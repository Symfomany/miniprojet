<?php

include  "src/Movie.php";
include  "src/Dvd.php";
include  "src/Connexion.php";

use src\Connexion;
use src\Dvd;

$connexion = new Connexion(3306,"localhost","cineacademy","root", "djscrave");

$dvd = new Dvd($connexion);
$dvd->setTitre('La Baleine Bleue');
$dvd->setSynopsis("Description  de la jolie baleine bleue");
$dvd->setBudget(1000000);


$dvdTwo = new Dvd($connexion);
$dvdTwo->setTitre('La Baleine Verte');
$dvdTwo->setSynopsis("Description  de la jolie baleine verte");
$dvdTwo->setBudget(200000000);

$dvdThree = new Dvd($connexion);
$dvdThree->setTitre('La Baleine Jaune');
$dvdThree->setSynopsis("Description  de la jolie baleine jaune");
$dvdThree->setBudget(300000000);

$dvdFour = new Dvd($connexion);
$dvdFour->setTitre('La Baleine Orange');
$dvdFour->setSynopsis("Description  de la jolie baleine orange");
$dvdFour->setBudget(2500000);

$dvdFive = new Dvd($connexion);
$dvdFive->setTitre('La Baleine Rouge');
$dvdFive->setSynopsis("Description  de la jolie baleine rouge");
$dvdFive->setBudget(3900000);


var_dump($dvd,$dvdTwo,$dvdThree, $dvdFour, $dvdFive);

echo $dvd->compareBudget($dvdTwo);

var_dump($dvd->movieBudget([$dvdTwo,$dvdThree, $dvdFour]));

$dvd->insererMovieInDb();
$dvdTwo->insererMovieInDb();
$dvdThree->insererMovieInDb();



?>
