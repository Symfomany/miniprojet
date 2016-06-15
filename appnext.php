<?php
include  "src/Movie.php";
include  "src/Dvd.php";
include  "src/Connexion.php";
include  "lib/Connexion.php";
include  "src/Acteur.php";
include  "src/Realisateur.php";
include  "src/Session.php";

//use appel les namespace et les classes
// le use c'est le nom du namespace + nom de la Classe
// A partir du moment ou j'ai un namespace
// je dois "use" la classe pour pouvoir l'utiliser
use src\Connexion as ConnexionSrc;
use src\Movie;
use src\Acteur;
use src\Realisateur;
use src\Session;
use lib\Connexion as ConnexionLib;

// as: permet d'aliaser le nom de mes classes

// $movie = new Movie();
// // "::" permet l'appel d'une constante dans ma classe
// echo $movie::VERSION;
//
// $connexion = new ConnexionSrc(3306, "localhost","cineacademy","root", "djscrave");
// $connexionLib = new ConnexionLib();
//
//
// var_dump($connexion, $connexionLib);
//
//  // Impossible: $movie::VERSION = "2.0";
//  echo $connexion::SGBD;
//
//
//  $acteur = new Acteur();
//  echo $acteur::PAYS . " " .$acteur::LANGUE;
//
//  echo "<br />";
//  echo "Méthode numéro 2:";
//
//  // Appel depuis la classe
//  echo Acteur::PAYS;
//  echo Movie::VERSION;
//
// /**
//  * + Créer une constante SGBD dans la classe Connexion
//  * qui soit égale à Mysql.
//  * + Afficher cette constante
//  * + Créer une constante dan la classe Acteur
//  *   langue qui soit égale à FR et un pays égale à France
//  * + Afficher ces 2 constantes
//  */
//
// // appel d'une méthode statique par ma classe Movie
// echo Movie::getInformationofMovie();
//
// echo Acteur::informationOfActor();
//
// $director = new Realisateur();
// $director->setFirstname("Peter");
// $director->setLastname("Jackson");
// $director->setDob("1964-04-02");
// $director->setBiography("Peter Jackson est un réalisateur, scénariste et producteur néo-zélandais né le 31 octobre 1961 à Wellington, en Nouvelle-Zélande. Il est surtout connu pour avoir réalisé la trilogie du Seigneur des anneaux, d'après l'œuvre de J. R. R. Tolkien, et un remake de King Kong.");
// $director->setImage('https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Peter_Jackson_SDCC_2014.jpg/220px-Peter_Jackson_SDCC_2014.jpg');
// echo $director->getDobFr();
// var_dump($director);
//
//
// $session = new Session;
// $session->setDateSession('2016-04-02 11:30:15');
// $session->setDateCreation('2016-06-11');
// $session->setIdMovie(3);
//
// $session2 = new Session;
// $session2->setDateSession('2016-03-26 11:30:15');
// $session2->setDateCreation('2016-06-11');
// $session2->setIdMovie(4);
//
// echo Session::getTheDiff($session, $session2);
//
// $now = new DateTime('now');
// $movies =  Session::seanceAfter($now, $connexion);
// foreach ($movies as $key => $value) {
//   echo $value['id'];
// }
// echo $session->dateFormat();
// var_dump($session);



$session = new Session();
$session->setDateSession('2016-11-24 11:30:15');
$session->setDateCreation('2016-06-11');
$session->setIdMovie(3);

$sessionTwo = new Session();
$sessionTwo->setDateSession('2017-11-24 11:30:15');
$sessionTwo->setDateCreation('2012-06-11');
$sessionTwo->setIdMovie(3);

$sessionThree = new Session();
$sessionThree->setDateSession('2012-11-24 11:30:15');
$sessionThree->setDateCreation('2012-06-11');
$sessionThree->setIdMovie(3);
echo $session->sousDateIntervale(new DateInterval("P5D"));

$tabSessions = [$session, $sessionTwo, $sessionThree];
$tabSession = Session::getTabObjSession2012($tabSessions);

var_dump($tabSession);

var_dump(Session::boolIfSupOrInf($sessionTwo, new DateTime('now')));

$connexion = new ConnexionSrc(3306, "localhost","cineacademy","root", "djscrave");
$dateOne = new DateTime('2012-01-01');
$dateTwo = new DateTime('2016-01-01');
echo Session::returnSessionSelect($dateOne, $dateTwo, $connexion);

?>
