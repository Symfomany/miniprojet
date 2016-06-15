<?php

include "src/Personnel.php";
include "src/Acteur.php";
include "src/Realisateur.php";
include "src/ActeurSerie.php";
include "src/ActeurFilm.php";
include "src/Movie.php";

use src\Acteur;
use src\Realisateur;
use src\ActeurSerie;
use src\ActeurFilm;
use src\Movie;

$actor = new Acteur();
$actor->setPrenom('Julien');
$actor->setNom('Boyer');
$actor->setVille('Lyon');
$actor->setDob('1988-03-16');
$actor->setBiography('Thug Life !
                  Et il y a  belle lurette...');
$actor->setSalaire(1500);

$realisateur = new Realisateur();
$realisateur->setPrenom('Peter');
$realisateur->setNom('Jackdon');
$realisateur->setVille('New-York');
$realisateur->setDob('2016-03-06');
$realisateur->setBiography('La super vie du chef des hobbit :p');
$realisateur->setSalaire(250000000);


$acteurDeSerie = new ActeurSerie();
$acteurDeSerie->setNomDeSerie('Gotham');
$acteurDeSerie->setSurnom('Jim Gordon');
$acteurDeSerie->setVille('Los-Angeles');
$acteurDeSerie->setNom('Gordon');
$acteurDeSerie->setPrenom('Jim');
$acteurDeSerie->setDob('1972-05-03');


$acteurDeFilm = new ActeurFilm();
$acteurDeFilm->setSalaire(2000000);
$acteurDeFilm->setPrenom('Bower');
$acteurDeFilm->setNom('Jack');
$acteurDeFilm->setOscars(
['Grammy Award 2011', 'Grammy Award 2012']
);
$acteurDeFilm->setCv('http://moncv.com/cv.pdf');

$movie = new Movie();
$movie->setTitre('Moby Dick');

echo $acteurDeFilm->commenterMovie($movie);
echo $acteurDeSerie->commenterMovie($movie);


var_dump($actor, $realisateur, $acteurDeSerie, $acteurDeFilm);






?>
