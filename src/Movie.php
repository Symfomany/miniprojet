<?php

namespace src;


/**
 * Class Movie represent table movies
 */
class Movie{

    /**
     * Id
     * @var [type]
     */
    protected $id;

    /**
     * [$titre description]
     * @var [type]
     */
   protected $titre;

  /**
   * [$synopsis description]
   * @var [type]
   */
  protected $synopsis;

  /**
   * [$annee description]
   * @var [type]
   */
  protected $annee;

  /**
   * [$dateRelease description]
   * @var [type]
   */
  protected $dateRelease;

  /**
   * [$budget description]
   * @var [type]
   */
  protected $budget;

  /**
   * [$visible description]
   * @var [type]
   */
  protected $visible = true;

  /**
   * [$distributeur description]
   * @var [type]
   */
  protected $distributeur;


  /**
   * Objet de la classe Connexion
   * @var [type]
   */
  protected $connexion;

  /**
   *
   */
  const VERSION = "1.0";


  /**
   * [__construct description]
   * @param [type] $annee [description]
   */
  public function __construct($distributeur = "", $annee = "",
  Connexion $connexion = null, $id = null){

    $this->id = $id;

    // J'initialise ma connexion à la base de données
    // par l'intermédiaire de mon objet $connexion
    if($connexion){
    $this->connexion = $connexion->connect();
  }
    $this->distributeur = $distributeur;

    if ($annee == "") {
      $this->annee = date('Y');
    } else {
      $this->annee = $annee;
    }

  }


    /**
     * Get the value of Class Movie represent table movies
     *
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }



    /**
     * Set the value of Class Movie represent table movies
     *
     * @param mixed titre
     *
     * @return self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of Synopsis
     *
     * @return mixed
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set the value of Synopsis
     *
     * @param mixed synopsis
     *
     * @return self
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get the value of Annee
     *
     * @return mixed
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of Annee
     *
     * @param mixed annee
     *
     * @return self
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get the value of Date Release
     *
     * @return mixed
     */
    public function getDateRelease()
    {
        return $this->dateRelease;
    }

    /**
     * Set the value of Date Release
     *
     * @param mixed dateRelease
     *
     * @return self
     */
    public function setDateRelease($dateRelease)
    {
        $this->dateRelease = $dateRelease;

        return $this;
    }

    /**
     * Get the value of Budget
     *
     * @return mixed
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set the value of Budget
     *
     * @param mixed budget
     *
     * @return self
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }



    /**
     * Get the value of [$visible description]
     *
     * @return [type]
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set the value of [$visible description]
     *
     * @param [type] visible
     *
     * @return self
     */
    public function setVisible( $visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get the value of [$distributeur description]
     *
     * @return [type]
     */
    public function getDistributeur()
    {
        return $this->distributeur;
    }

    /**
     * Set the value of [$distributeur description]
     *
     * @param [type] distributeur
     *
     * @return self
     */
    public function setDistributeur( $distributeur)
    {
        $this->distributeur = $distributeur;

        return $this;
    }



    public function infoAll(){

      return "<p>{$this->titre} <br />
              {$this->synopsis}
              {$this->annee}
              {$this->budget}
              </p>";

    }

    /**
     * Retourner un prix formatter en français
     * @return
     */
    public function getFrenchPrice(){

        return number_format($this->budget,0, ",", " ")."€";
    }


    /**
     * compare object courant avec object du parametre et sort le budget le plus grand
     * @param  INT $objectBudget object dont on souhaite la comparaison
     * @return INT budget le plus grand de la comparaison
     */
      public function compareBudget(Movie $objectBudget){

       if($this->budget > $objectBudget->budget){
         return " Pour <b>{$this->getTitre()}</b> le budget est de <b>{$this->getFrenchPrice()}</b> ";
       }

       return "Pour <b>{$objectBudget->getTitre()}</b> le budget est de <b>{$objectBudget->getFrenchPrice()}</b>";
     }


 /**
  * [compteMotsSynopsis description]
  * @return boolean [description]
  */
  public function compteMotsSynopsis() {

    return "<div class='col-md-12'>
              <div class='alert alert-info'>
                <blockquote>
                  <p>{$this->synopsis}</p>
                  <footer class='pull-right'>Mon synopsis dispose de
                  <span class='badge'>".str_word_count($this->synopsis)."</span> mots</footer>
                </blockquote>
              </div>
            </div>";
  }

  /**
   * Exploser ma chaine en tableau puis retourne
   * le nb de elements que comporte ce tableau
   *
   * "2016-04-03"
   * $tableau = explode("-", "2016-04-03")
   * echo $tableau[0]
   *
   * @return integer nb elements
   */
  public function compteMotsSynopsisOther() {

      return count(explode(" ",$this->synopsis));
  }

  /**
   * [getDistributeur description]
   * @return [type] [description]
   */
  public function checkDistribVisible(){

  		if($this->distributeur == "Warner Bros"
      && $this->visible == true){
  			return true;
  		}
			return false;

  	}
/**
 * [movieBudget description]
 * @param  [type] $tabMovie [description]
 * @return [type]           [description]
 */
public function movieBudget($tabMovie){
   $sum = $compteur = 0;

   foreach ($tabMovie as $value) {

     if ($value->budget < 100000){
       $sum += $value->budget;
       $compteur++;
     }

   }

   $moyenne = $sum / $compteur;

   return [
      "moyenne" => $moyenne,
      "nb" => $compteur
    ];
}


/**
 * Calclul lamoyenne de budget des film ayant un petit budget (moins de 1 000 000)
 * @param  [array] tableau d'objet
 * @return [integer] moyenne des budget ()
 */
public function getMoyFilmPetitBudget($tabObjet = []){

  return $budgetMoyen = ($this->movieBudget($tabObjet)["moyenne"]
            /$this->movieBudget($tabObjet)["nb"]);
}







    /**
     * Get the value of Objet de la classe Connexion
     *
     * @return [type]
     */
    public function getConnexion()
    {
        return $this->connexion;
    }

    /**
     * Set the value of Objet de la classe Connexion
     *
     * @param [type] connexion
     *
     * @return self
     */
    public function setConnexion( $connexion)
    {
        $this->connexion = $connexion;

        return $this;
    }

    /**
     * Retourne un tableau des 3 derniers films français à partor de
     * ma BDD
     * @return Array tableau de film
     */
    public function getLastMoviesFr($distributeur = "HBO", $bo = "VOSTFR"){

      $req = $this->connexion->query("SELECT title
        FROM movies
        WHERE languages =  'fr'
        AND visible = 1
        AND distributeur = '{$distributeur}'
        AND bo = '{$bo}'
        ORDER BY date_release DESC
        LIMIT 3
      ");

      $resultat = $req->fetchAll();
      return $resultat;
    }


    /**
     * Permettre d'insérer un film dans la base de donnée
     * @return [type] [description]
     */
    public function insererMovieInDb(){

      $req = $this->connexion->prepare("
        INSERT INTO movies(title, synopsis, annee, budget, date_release)
        VALUES(:titre, :synopsis, :annee, :budget, :date_release)
      ");

      $req->execute([
        'titre' => $this->titre,
        'synopsis' => $this->synopsis,
        'annee' => $this->annee,
        'budget' => $this->budget,
        'date_release' => $this->dateRelease,
      ]);

    }

    /**
     * Permet d'insérer plusieurs films dans ma table movies
     * @param  Collection d'objets $tabFilms
     * @return void
     */
    public static function injectTableauMovies($tabFilms = []){

        foreach($tabFilms as $key => $value){
            if($value->existMovieInDb() == false){
              $value->insererMovieInDb();
            }
        }

    }

    /**
     * Verifier si mon movie existe en bdd
     * @param  Movie  $movie
     * @return [type]        [description]
     */
    public function existMovieInDb(){

      $req = $this->connexion->query(
            "SELECT title
            FROM movies
            WHERE title = '{$this->titre}'"
      );
      $resultat = $req->fetch();
      if($resultat == false){

        return false;
      }else{

        return true;
      }
  }

  /**
   * Methode permettant de supprimer un film en bdd selon un Id
   * @param  int $idMovie [description]
   * @return [type]          [description]
   */
  public function deleteMovie($idMovie){
    $req=$this->connexion->prepare(
      'DELETE FROM movies
       WHERE id= :id
      ');
    $req->execute([
      'id'=>$idMovie,
    ]);

    return "<div class='alert alert-danger'>
    Requete execeutée</div>";
  }


/**
 * [updateMoviesFromID description]
 * @param  [type] $id    ID du film à modifier
 * @param  Movies $movie Objet Film
 * @return [type]        Bootsrap alert pour requete ok
 */
public function updateMoviesFromID($id, Movies $movie){

  $req=$this->connection->prepare(
   "UPDATE movies
    SET title= :titre,
      synopsis= :synopsis,
      annee= :annee,
      date_release= :dateRelease,
      budget= :budget,
      visible= :visible,
      distributeur= :distributeur

    WHERE id = :id
  ");

  return $req->execute([
    'id' => $id,
    'titre' => $movie->titre,
    'synopsis' => $movie->synopsis,
    'annee' => $movie->annee,
    'dateRelease' => $movie->dateRelease,
    'budget' => $movie->budget,
    'visible' => $movie->visible,
    'distributeur' => $movie->distributeur,
  ]);

}

/**
 * [retrouverFilmByTitle description]
 * @param  [type] $titre [description]
 * @return [type]        [description]
 */
public function retrouverFilmByTitle($titre){

    $req = $this->connexion->query(
    "SELECT title
      FROM movies
      WHERE title = '{$titre}'
    ");

    $resultat = $req->fetch();

    if($resultat == false){

      return false;

    }

      return true;

 }

/**
 * Nombre de film avec restriction sur le budget selon une intervalle
 * @param  integer $budgetMin [description]
 * @param  integer $budgetMax [description]
 * @return [type]             [description]
 */
public function nombreFilm($budgetMin = 0, $budgetMax = 0){

 $req= $this->connexion->query(
   "SELECT COUNT(title) as nbFilm
   FROM movies
   WHERE budget < {$budgetMax} AND budget > {$budgetMin}"
 );
 return $req->fetch();
}

/**
 * test si un film est passé ou futur sur sa date release
 * @param  Movies $movie objet film
 * @return string        passé ou futur
 */
public function testDateReleaseFromMovie (Movie $movie){

  $req=$this->connexion->query(
    "SELECT *
    FROM movies
    WHERE title = '{$movie->titre}'
  ");

  $resultQuery = $req->fetch();

    $myDate = DateTime::createFromFormat('Y-m-d', $resultQuery["date_release"]);
    $myDateTimeNow = new DateTime('now');

    if ($myDate > $myDateTimeNow) {
      return "après";
    }

    return "avant";
}


/**
 * Récupérer un titre et une description de la catégorie
 * selon l'Id ou le titre du film envoyé en paramètre
 * @param  string $id    [description]
 * @param  string $title [description]
 * @return [type]        [description]
 */
   public function recupCatDesc($id = '', $title = ""){

      $ask = $this->connexion->query(

        "SELECT categories.title, categories.description
         FROM categories

         INNER JOIN movies
         ON movies.id = categories.id

         WHERE movies.id = {$id}
         OR movies.title = '{$title}'
       ");

       return  $ask->fetch();
   }

   /**
    * Méthode statique
    * C'est une méthode particulière qui ne traite
    * qu'avec des constantes
    * La méthode statique ne traite
    * qu'avec des constantes.
    * Je ne peut utiliser $this
    * dans une méthode statique
    */
   public static function getInformationofMovie(){

      return "<div>
                La version par défaut de tous mes films
                ".self::VERSION."
              </div>";

   }


}
