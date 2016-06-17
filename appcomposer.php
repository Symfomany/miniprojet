<?php
/**
 * Je charge Composer dans mon projet
 * Composer s'occupera de charger automatoiquement mes classes
 * en PHP
 */
include "vendor/autoload.php";

use src\Movie;
use src\Dvd;
use Dompdf\Dompdf;
use Dompdf\Options;



$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();




$connexion = new src\Connexion(3306, "localhost","cineacademy","root", "djscrave");
$movie = new Movie('Warner Bros', 2012, $connexion);
$movieTwo = new Movie('HBO', 2013, $connexion);
$movieThree = new Movie('HBO', 2014);
$movieFour = new Movie('HBO', 2013);

$dvd = new Dvd();
//dump($dvd);

$bigTable = [
  [12,15,21, $movieThree],
  [155,20,544],
  ["qsdguqysgd",$movieTwo,[$movieFour],  "kjqhdqs", "uqsgdu"],
  ["kqushdiqs", 123, true, $movie, "la"],
];

//dump($bigTable);


// dumper un tableaux de 3 objets Movies


// instantiate and use the dompdf class

// (Optional) Setup the paper size and orientation
$html = file_get_contents('html/index.html', FILE_USE_INCLUDE_PATH);

$options = new Options();
$options->set('defaultFont', 'Courier');
$dompdf = new Dompdf();


$dompdf->loadHtml($html);
$dompdf->setPaper('A2', 'portrait');

$dompdf->render();
$dompdf->stream();






 ?>
