<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
</head>

<?php

include "src/Movie.php";
include "src/Connexion.php";

// Objet Connexion
$myConnexion = new Connexion(3306, "localhost","cineacademy","root", "djscrave");

$movie = new Movie("Warner Bros", 2016, $myConnexion);
$movie->setTitre('Godzilla');
$movie->setSynopsis("Depuis les origines de la civilisation, Apocalypse, le tout premier mutant, a absorbé de nombreux pouvoirs, devenant à la fois immortel et invincible, adoré comme un dieu. Se réveillant après un sommeil de plusieurs milliers d'années et désillusionné par le monde qu'il découvre, il réunit de puissants mutants dont Magneto pour nettoyer l'humanité et régner sur un nouvel ordre. Raven et Professeur X vont joindre leurs forces pour affronter leur plus dangereux ennemi et sauver l'humanité d'une destruction totale.");
$movie->setBudget(240000000);
$movie->setDateRelease('2016-05-18');
$movie->setDistributeur('HBO');

//echo $movie->deleteMovie(89);
//$resultat =  $movie->nombreFilm(5, 10000000);
//echo $resultat['nbFilm'];

var_dump($movie);
echo $movie->testDateReleaseFromMovie($movie);


/**
 *  DateTime est une classe native en PHP_Time
 *  Permettant de manipuler toute forme de date
 */
// now est un mot clef permetant d'avoir la date d'aujourd'hui
$now = new DateTime("now");
var_dump($now);

// format() Permet de sortie une date au bon format
var_dump($now->format('d/m/Y'));

// createFromFormat() permetd e générer un nouvel objet DateTime selon un format d'entrée
$dateFr = DateTime::createFromFormat('d/m/Y', "16/03/1988") ;

var_dump($dateFr);

var_dump($dateFr->format('Y-m-d'));

// Formats relatifs

//
$yersteday = new DateTime('-1 day');
var_dump($yersteday);

$nextYear = new DateTime('+1 year');
var_dump($nextYear);


$nextYear = new DateTime('2012-04-08');

$lastDayOfThisMounth = new DateTime('last day of this month');
var_dump($lastDayOfThisMounth);

// Fonction modify() permetant de modifier une date dans un objet DateTime
$dateModify = $now->modify('+2 day');
var_dump($dateModify);

//chaine la modification de Datetime
$dateModifyTwo = $now->modify('-1 week + 2 hour - 30 minute');
var_dump($dateModifyTwo);






// echo $movie->infoAll();
// $movie->insererMovieInDb();

// $movies = $movie->getLastMoviesFr("Warner_Bros", "VO");
//
//
// foreach($movies as $movie){
//
//   echo "<p>{$movie['title']}</p>";
//
// }
//
//
// $movieOne = new Movie("HBO", "2014", $myConnexion);
// $movieOne->setTitre('X-Men: Apocalypse');
// $movieOne->setDateRelease('2016-05-18');
// $movieOne->setSynopsis("Depuis les origines de la civilisation, Apocalypse, le tout premier mutant, a absorbé de nombreux pouvoirs, devenant à la fois immortel et invincible, adoré comme un dieu. Se réveillant après un sommeil de plusieurs milliers d'années et désillusionné par le monde qu'il découvre, il réunit de puissants mutants dont Magneto pour nettoyer l'humanité et régner sur un nouvel ordre. Raven et Professeur X vont joindre leurs forces pour affronter leur plus dangereux ennemi et sauver l'humanité d'une destruction totale.");
// $movieOne->setBudget('240000000');
//
// // echo $movieOne->infoAll();
//
//
// $movieTwo = new Movie("Europacorp", 15, $myConnexion);
// $movieTwo->setTitre('Bienvenue à Marly-Gomont');
// $movieTwo->setSynopsis("En 1975, Seyolo Zantoko, médecin fraichement diplômé originaire de Kinshasa, saisit l’opportunité d’un poste de médecin de campagne dans un petit village français. Arrivés à Marly-Gomont, Seyolo et sa famille déchantent. Les habitants ont peur, ils n’ont jamais vu de noirs de leur vie. Mais Seyolo est bien décidé à réussir son pari et va tout mettre en œuvre pour gagner la confiance des villageois... ");
// $movieTwo->setDateRelease('2016-06-18');
// $movieTwo->setBudget('11000');
//
// // echo $movieTwo->infoAll();
//
//
// $movieThree = new Movie("HBO", 15, $myConnexion);
// $movieThree->setTitre('The Neon Demon');
// $movieThree->setSynopsis("Une jeune fille débarque à Los Angeles. Son rêve est de devenir mannequin. Son ascension fulgurante et sa pureté suscitent jalousies et convoitises. Certaines filles s’inclinent devant elle, d'autres sont prêtes à tout pour lui voler sa beauté. ");
// $movieThree->setDateRelease('2016-06-08');
// $movieThree->setBudget('65000');
//
// // echo $movieThree->infoAll();
//
//
// var_dump($movie, $movieOne, $movieTwo, $movieThree);
//
// echo "<p>{$movie->getFrenchPrice()}</p>";
//
// echo $movie->compareBudget($movieThree);
// echo $movieTwo->compareBudget($movieThree);
//
//
// echo $movie->compteMotsSynopsisOther();
// echo "<p>Nb de mot {$movie->compteMotsSynopsisOther()} </p>";
//
// if($movie->checkDistribVisible()){
//   echo "<p>Oui le distrib est WB et visible</p>";
// }else{
//   echo "<p>Non le distrib n'est pas WB et visible</p>";
//
// }
//
//
// $tableau =  $movie->movieBudget([
//   $movie, $movieTwo, $movieThree, $movieOne
// ]);
//
// echo "Moyenne: ".$tableau['moyenne'];
// echo "Nb: ".$tableau['nb'];
//
// var_dump($movie);
//
// $tabmovies = [$movieTwo, $movieThree];
//
// $movie->injectTableauMovies($tabmovies);
//
//
// var_dump($movie->existMovieInDb());


?>
