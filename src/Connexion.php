<?php

namespace src;


/**
 * @class Connexion
 * @author Julien Boyer
 * @version 1.0
 */
class Connexion {

    /**
    * Attribut host
    */
    protected $host = 'localhost';

    /**
    * Attribut login
    */
    protected $login;

    /**
    * Attribut password
    */
    protected $password;

    /**
    * Attribut charset
    * Valeur par défaut: utf8
    */
    protected $charset = "utf8";

    /**
    * Attribut dbName
    */
    protected $dbName;

    /**
    * Attribut timeout
    */
    protected $timeout = 3;

    /**
     * @var Integer: Port de ma connexion
     */
    protected $port;

    /**
     * Constante SGBD
     */
    const SGBD = "Mysql";


    /**
     * Methode magique qui permet d'initialiser mon objet
     * Constructeur de ma classe
     * Initialiser le host lors de la construction
     */
    public function __construct(
    $port, $host = "localhost", $dbName = "cinemal9",
    $login, $password){

      $this->port = $port;
      $this->host = $host;
      $this->login = $login;
      $this->password = $password;
      $this->dbName = $dbName;

    }

    /**
    * Getter
    * Accéder à l'attribut host
    */
    public function getHost(){

      return "Nom de l'hébergeur {$this->host}";
    }

    /**
    * Getter
    * Accéder à l'attribut login
    */
    public function getLogin(){

      return $this->login;
    }

    /**
    * Getter
    * Accéder à l'attribut password
    */
    public function getPassword(){

      return $this->password;
    }

    /**
    * Getter
    * Accéder à l'attribut charset
    */
    public function getCharset(){

      return $this->charset;
    }

    /**
    * Getter
    * Accéder à l'attribut port
    */
    public function getPort(){

      return $this->port;
    }
    /**
    * Getter
    * Accéder à l'attribut dbname
    */
    public function getDbName(){

      return $this->dbName;
    }

    /**
    * Getter
    * Accéder à l'attribut timeout
    */
    public function getTimeout(){

      return $this->timeout;
    }


    /**
    * Setter
    * Permet de mofifier la valeur d'un attribut protégé
    */
    public function setCharset($charset){

      $this->charset = $charset;
    }

    /**
    * Setter
    */
    public function setHost($host){

      $this->host = $host;
    }

    /**
    * Setter
    */
    public function setLogin($login){

      $this->login = $login;
    }

    /**
    * Setter
    */
    public function setPassword($password){

      $this->password = $password;
    }

    /**
    * Setter
    */
    public function setDbName($dbName){

      $this->dbName = $dbName;
    }

    /**
    * Setter
    */
    public function setPort($port){

      $this->port = $port;
    }
    /**
    * Méthode qui affiche les infos de ma connexion
    */
    public function info(){

      return "<p>Host: {$this->host}
                Login: {$this->login}
                Password: {$this->password}
              </p>";
    }

    /**
    *
    * Affiche sous une alert mes infos de connexion
    * @param $couleur: Couleur de mon alert
    * @param $icon: Icone affcher dans le alert
    * @return String: Mon alert Boostrapp
    *
    */
    public function infoAlert($couleur = 'danger',
                            $icon = "exclamation",
                            $attributs = ['dbName', 'charset']){

        if(preg_match("/^(info|warning|danger|success)$/i",
         $couleur)){

          return "<div class='alert alert-{$couleur}'>
                  <span class='fa fa-{$icon}'></span>  {$this->$attributs[0]} {$this->$attributs[1]}
                  </div>";
        }else{

          return false;
        }
    }


    /**
     * ok
    * Permet d'affiche sous Jumbotron, les infos de ma Connexion
    * @param  $couleur: String Nom de la couleur sous Jumbotron
    * @return String: Jumbotron div
    */
      public function infoJumbotron($couleur = "success"){

        return "<div class='jumbotron'>
                  <p class='bg-{$couleur}'>Authentification: {$this->login} {$this->password} </p>
                  <p class='bg-{$couleur}'>Base de données: {$this->dbName} {$this->charset}</p>
                </div>";
    }


    /**
    * Afficher les attributs login et pasword pour chaque object
    * @param $tabObjects: Array Tableaux d'objets de la classe Connexion
    */
    public function infoTabBootstrap($tabObjects = []){

        $html = "";

        foreach ($tabObjects as $key => $value) {
          $html = $html . "<div class='alert alert-danger'>
                    {$value->login} {$value->password}
                  </div>";
        }

        return $html;
    }


    /**
     *  Definir la colonne col-X autour de  mon objet
     * @param integer $nbColonne nb de colonne à afficher
     */
    public function setColBs($nbColonne = 3, $widthBs = "xs"){

      return "<div class='col-{$widthBs}-{$nbColonne}'>
                  {$this->infoJumbotron()}
                </div>
              ";
    }

    /**
     *  Parcour mon tableau d'objets pour metter chaque element dans un col-md
     * @param [type] $tabObjects [description]
     */
    public function setColBsTab($tabObjects = []){

      $tab = []; //tableau vide
      if(is_array($tabObjects)){
        foreach($tabObjects as $obj){

            $tab[] = $obj->setColBs(); //ajout de chaque element
        }
      }else{
        throw new Exception("Attention, cela doit etre un tableau d'objet");
      }

      return $tab; // je retourne mon tableau
    }


    /**
     *  Prend un tableau pour comparer login & mdp
     * @param  [type] $tabObj tableau d'objets
     * @return boolean
     */
    public function compareObj($tabObj = []){
        if (
        $tabObj['Connexion1']->login == $tabObj['Connexion2']->login
        && $tabObj['Connexion2']->password == $tabObj['Connexion2']->password
         ) {
            return true;
        }

        return false;
    }




    /**
     *  Compare 2 objets au niveau login et password
     * @param  Connexion $obj [description]
     * @return [type]         [description]
     *
     * Type Hinting: Type l'objet en paramètre
     */
    public function compareOneObj(Connexion $obj){

      if($this->login == $obj->login
        && $this->password == $obj->password)
      {
        return true;
      }

        return false;
    }


    /**
     * Permet une connexion à la base de données
     * @return  DBO Object se connecter à la bdd avec PDO
     * La méthode peut retourner un objet
     */
    public function connect(){

      $connexion =  new \PDO("mysql:host={$this->host};dbname={$this->dbName};charset={$this->charset}",
      $this->login, $this->password);

      return $connexion;
    }


}








 ?>
