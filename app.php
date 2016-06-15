


<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
   media="all" charset="utf8" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
<?php

// J'inclue ma classe (fichier)...
include "src/Connexion.php";

/*
// Crée un objet de la classe Connexion
$connexion = new Connexion();

// je modifie l'attribut login
$connexion->login = "root";
$connexion->password = "troiswa";


// je crée un second objet de la classe Connexion
$connexionTwo = new Connexion();
$connexionTwo->login = "admin";
$connexionTwo->password = "123";
$connexionTwo->charset = "latin-swedish";

$connexionThree = new Connexion();
$connexionThree->charset = "utf8_general_ci";
$connexionThree->login = "toto";
$connexionThree->password = "456";
$connexionThree->host = "ovh.mysql.net";

$connexionTwo->timeout = 2;

/**
* Exercice 1
* Generaliser tous les host en localhost par defaut
* Créer une 3eme connexion en utf8 general ci sur le host ovh.mysql.net
* Ajouter un attribut temps de connexion avec valeur par défaut 3 (secondes)
* LA seconde connexion aura 2 secondes de connexion
*/
/*
* Exercice 2
----------------------------------------------------------------
* Crée un tableau de 5 objets Connexion
* Afficher pour chaque objets le login et le mdp
* Bonus: Dans l'affichage des connexions, si le login est root
* ou admin, afficher "La connexion est en superadmin"
$connexionFour = new Connexion();
$connexionFour->login = "otheradmin";
$connexionFour->password = "789";

$connexionFive = new Connexion();
$connexionFive->login = "admin_special";
$connexionFive->password = "james_bond";


$tabConnexions = [
  "Connexion1"  => $connexion,
  "Connexion2 " => $connexionTwo,
  "Connexion3 " => $connexionThree,
  "Connexion4 " => $connexionFour,
  "Connexion5 " => $connexionFive,
];


* Dans l'affichage des connexions, si le login est root
* ou admin et que le host est localhost,
* Afficher "<p>La connexion est superadmin en local</p>"
foreach($tabConnexions as $key => $connexionCourante){
    echo "<p> Login: <b>{$connexionCourante->login}</b> <br />
            Mot de passe: <b>{$connexionCourante->password}</b>
            Temps de connexion: <b>{$connexionCourante->timeout}</b>
            Host: <b>{$connexionCourante->host}</b>
        </p>";

    if(($connexionCourante->login == "root" || $connexionCourante->login == "admin")
    && ($connexionCourante->host == "localhost")){
        echo "<p>La connexion est superadmin en local</p>";
    }

    if($connexionCourante->timeout <= 2){
      echo "<p> La connexion est courte </p>";
    }
}


/*
* Exercice 2 : Si le temps de connexion est inférieur ou égal à 2
* Afficher "<p> La connexion est courte </p>"
*/

/*
* Exercice 3
* Modifier le temps de connexion pour chaque objets à 5s
* Modifier la 2eme connexion pour qu'elle est
* le même login et mdp que la 1ere connexion

// je parcours le tableau d'objet
foreach($tabConnexions as $obj){
  $obj->timeout = 5;
}

var_dump($tabConnexions);

$connexion->login = $connexionTwo->login;
$connexion->password = $connexionTwo->password;


$tabConnexions['Connexion2']->login = $tabConnexions['Connexion1']->login;
$tabConnexions['Connexion2']->password = $tabConnexions['Connexion1']->password;




+ Modifier le login de la 3eme connexion à root dans mon tableau
 de connexion
+ Afficher l'ensemble des connexionx

// Fonction de debogage pour l'Orienté Objet
// var_dump() est équivalent de print_r()
//var_dump($connexion, $connexionTwo, $connexionThree);

*/

$connexion = new Connexion(3306);


$connexion->getLogin();
// Bonnes pratiques...
$connexion->setCharset("utf8_general_ci");
$connexion->setLogin("root");
$connexion->setPassword("123456");
$connexion->setDbName("cinemal9");


echo "<p>
  Login {$connexion->getLogin()} <br />
  Password {$connexion->getPassword()}  <br />
  DbName {$connexion->getDbName()}
</p>";

//var_dump($connexion);
echo $connexion->info();

/**
* $this représente l'objet courant dans ma classe
*/

/**
* Exercice:
* Créer un 2eme objet de la classe Connexion
* et utiliser la méthode info()
*/

$connexionTwo = new Connexion(3307);
$connexionTwo->setHost('mysql.ovh.net');
$connexionTwo->setLogin('Lolo');
$connexionTwo->setPassword('toto');
$connexionTwo->setCharset('utf16_general_ci');
$connexionTwo->setDbName('cinemal10');

echo $connexionTwo->info();

/**
* Crée une méthode dans la classe Connexion
* qui permet d'afficher sous une alert Boostrap
* Le charset et le nom de la base de données
* de mes connexions
*/

echo $connexionTwo->infoAlert();
echo $connexionTwo->infoAlert('success');
echo $connexionTwo->infoAlert('info', 'search');

echo $connexionTwo->infoJumbotron();

/*
* Bonus: Ajouter un paramètre qui permet
* de régler la couleur de cette alert (primary, danger..)
* Bonus 2 : Ajouter un second parametre qui sera
* l'icon Fontawesome a mettre dans mon alert .
* Par défaut, l'icon sera une icon point d'exclamation
*/

/**
* Crée une méthode qui m'affiche tous mes informations
* de la connexion
* sous une div  Jumbotron (Bootstrap):
* Informations: login, password, base de donné et charset
*/

/**
* Exercice 3 (plus dur)
* Créer une méthode qui prends en parametre
* un tableau de 3 objets Connexion
* et qui affiche le login et mot de passe
* pour chaque objet sous une alert Bootstrapp
*/

$connexionThree =  new Connexion(3308);
$connexionThree->setHost('mysql.oneandone.net');
$connexionThree->setLogin('Lolo 2');
$connexionThree->setPassword('titi');
$connexionThree->setCharset('utf32_general_ci');
$connexionThree->setDbName('cinemal11');


$tabObjects = [$connexion, $connexionTwo, $connexionThree];

// Utiliser un objet de ma classe
// pour pouvoir utiliser une des methode de cette Classe
echo $connexion->infoTabBootstrap($tabObjects);


/**
* Créer une méthode qui permet d'afficher
* dans une colonne (col-X) de Bootstrapp
* le Jumbotron qui récapitule les informations d'une connexion
* On mettra en paramètre à cette methode
* le numéro de cette colonne qui sera par défaut "3"
*/

// echo $connexion->setColBs(3);
// echo $connexion->setColBs();

$tab = [$connexion, $connexionTwo, $connexionThree];

foreach($connexion->setColBsTab($tab) as $val){
  echo $val;
}


/**
* Crée une methode qui compare 2 objets Connexion
* et retourne true si ils ont les meme login et mdp
* et false si contraire ;)
*/

$tab = [
  "Connexion1" => $connexion,
  "Connexion2" => $connexionTwo,
 ];


$connexion->compareObj($tab);


echo "<pre>";
  if($connexionThree->compareOneObj($connexionTwo) == true){
    echo "les 2 objet ont un authentification identiques";
  }else{
    echo "les 2 objet sont différent sur l'authentification";
  }
echo "</pre>";


echo "<pre>";
var_dump($connexion, $connexionTwo,$connexionThree, $connexionFour);
echo "</pre>";




 ?>
