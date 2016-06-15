<?php

include_once "./src/Movie.php";


class MovieTest extends PHPUnit_Framework_TestCase
{

     public function testCreateMovie(){

      $movie = new Movie();
      $movie->setTitre('Xmen Apocalypse');
      $movie->setSynopsis("Depuis les origines de la civilisation, Apocalypse, le tout premier mutant, a absorbé de nombreux pouvoirs, devenant à la fois immortel et invincible, adoré comme un dieu. Se réveillant après un sommeil de plusieurs milliers d'années et désillusionné par le monde qu'il découvre, il réunit de puissants mutants dont Magneto pour nettoyer l'humanité et régner sur un nouvel ordre. Raven et Professeur X vont joindre leurs forces pour affronter leur plus dangereux ennemi et sauver l'humanité d'une destruction totale.");
      $movie->setAnnee(2016);
      $movie->setBudget(240000000);
      $movie->setDateRelease('2016-05-18');

      $this->assertInstanceOf("Movie", $movie);
      $this->assertEquals('Xmen Apocssalypse', $movie->getTitre());

    }



}



 ?>
