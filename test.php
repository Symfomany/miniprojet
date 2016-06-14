<?php

include "Joueur.php";
include "Club.php";


$joueur = new Joueur(15, 240000000);
var_dump($joueur);

echo $joueur->augmenterSalaire(15, 2);

var_dump($joueur);

$joueur->changerClub(10, 300000000, true, "Attaquant");

var_dump($joueur);


$joueur2 = new Joueur(15);


$joueur2->setPoste('Défenseur');
var_dump($joueur);


echo $joueur2->driblerJoueur($joueur, ["petit-pont", "grand-pont"]);


$club = new Club('OL','Lyon');
$club->acheterJoueur($joueur);
$club->acheterJoueur($joueur2);


$club2 = new Club('OM','Marseille');
$club2->acheterJoueur($joueur);

var_dump($club2);


?>
