<?php
/*
// page_1.php
echo "PAGE 1 ( $fileName )";

// page-2.php
echo "PAGE 2 ( $filename )";

// page-3.php
echo "PAGE 3 ( $fileName )";

// page-quatre.php
echo "PAGE 4 ( $fileName )";

// index.php
if(array_key_exists('page', $_GET) == true)
{
  if(ctype_digit($_GET['page']) == true)
  {
    echo "BONJOUR ";

    if(in_array($_GET['page'], [ '1', '2', 'quatre' ]) == true)
    {
      $fileName = "page-".$_GET['page'].".php";

      require $fileName;
    }
  }
}

2.À quoi sert AJAX et quel moyen technique permet d'en faire en JavaScript natif ?
XMLHttpRequest

3.Quels sont en JavaScript les moyens techniques dont on dispose pour stocker des données dans le navigateur ?

http://www.alsacreations.com/article/lire/1402-web-storage-localstorage-sessionstorage.html

5.
*/
// *
// index.php
try
{
  if(array_key_exists('search', $_GET) == false)
  {
    throw new InvalidArgumentException('Il manque le paramètre search !');
  }
  if(ctype_alpha($_GET['search']) == false)
  {
    throw new Exception('Le paramètre search ne doit contenir que des lettres !');
  }

  echo "Vous avez demandé la recherche suivante : ".$_GET['search'];
}
catch(Exception $exception)
{
  echo "ERREUR - ".$exception->getMessage();
}

// Dans le fichier view.phtml, quel code permet de générer une liste HTML avec le prénom et l'âge de chacun ?

$data = ['Tom' => 42, 'Elsa' => 24, 'Michel' => 31, 'Isabelle' => 35 ];

include 'view.phtml';

// <ul>
//   <?php foreach($data as $firstName => $age): ?>
<!-- //     <li><?= $firstName ?> a <?= $age ?> ans</li>
//   <?php endforeach ?>
// </ul> -->

// $colors = array(50 => 'red', 200 => 'green', 'color' => 'blue');
//
// foreach($colors as $index => $color)
// {
//    if ($colors[$index] == $_GET['color'])
//    {
//      echo $color;
//    }
// }
// Quelles sont les fonctions d'aggrégation existantes en SQL ?
//
// Comment s'appelle précisément la partie située à partir du ? dans l'adresse HTTP suivante :


// En Programmation Orienté Objet,
// qu'est ce qui permet de construire des applications
// plus robustes et faciles à maintenir : la composition ou l'héritage ?

Quels sont les types de données existants en JavaScript ?

En PHP, si j'enregistre la saisie texte d'un formulaire dans une base de données pour réafficher plus tard cette saisie dans une page en HTML, que dois-je faire ?

<!-- Objet en javascript -->
var Car = function(brand)
{
  if(brand == 'Audi')
  {
    this.color = 'red';
  }
  else
  {
    this.color = 'blue';
  }
}


class Shape
{
  private $color;

  public function setColor($color)
  {
    $this->color = $color;
  }
}


<!-- code PHP -->
class Rectangle extends Shape
{
  public function draw()
  {
    echo "Je suis un rectangle de couleur ".$this->color;
  }
}

<form action="search.php">
  <label for="firstName">Prénom :</label>
  <input id="firstName" name="first-name" type="text">
  <input type="submit" value="Rechercher">
</form>


Est-ce que le PHP 5.3 permet nativement l'héritage multiple ?
Non

<ul>
    <li><button data-index="1">Clique sur moi !</button></li>
    <li><button data-index="2">Clique plutôt sur moi !</button></li>
    <li><button data-index="3">Ne clique pas sur moi !</button></li>
</ul>





?>
