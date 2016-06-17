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
c. var index = document.querySelector('button[data-index]').data('index');


Est-il possible en Programmation Orientée Objet
 d'instancier une classe B qui hérite d'une classe abstraite A
 et qui implémente une partie seulement des méthodes abstraites de cette classe A ?


 Quelles sont les lignes de code HTML qui sont invalides mais que le navigateur arrive cependant à interpréter ?


array_key_exists / in_array / array_search

section article:nth-child(2)

Expression true && (false || ($value && true))

Concernant l'architecture MVC sur le web, quelles sont les affirmations exactes ?
a. Un Contrôleur ne s'occupe que du code de gestion du protocole HTTP (chaîne de requête, formulaire, redirection HTTP, session, cookie, authentification, etc.)
b. Une Vue contient en immense majorité du code HTML et parfois un peu de code dans un langage de programmation (JavaScript, PHP) afin de rendre le code HTML en question dynamique
c. Un Contrôleur doit valider toutes les données de formulaire : par exemple s'assurer que l'adresse e-mail saisie est correcte
...


Que va afficher le code JavaScript suivant (avec la librairie jQuery) :
console.log($('ol li.even').length);


Quelles sont les points communs et les différences entre le Canvas et le SVG ?
Que doit-on faire en JavaScript pour s'assurer que le code manipulant le DOM s'exécute correctement au démarrage ?

La feuille de styles normalize.css permet entre autres de :

Que permet de faire précisément cette règle CSS : html { font-size: 62.5%; }

À partir du code JavaScript suivant :

La console a. console.log(data[1,4]);

Quels formats de sérialisation permettent de dialoguer entre deux machines via le protocole HTTP ?
JSON


Une base de données SQL contient une table employees et une table offices, un employé travaille dans un et un seul bureau.

Un élément qui aurait la propriété CSS suivante { padding: 20px 5px 15px } aura :


Quel principe de Programmation Orientée Objet
 permet de protéger les données du code extérieur ?
 L'encapsulation


 À partir du code JavaScript suivant :

 a. affiche dans la console "1", "3", "6", "10", "16"


 Quel moyen en Programmation Orientée Objet
 permet de gérer les erreurs potentielles d'un code ?
Execption

Ataque

Quel type d'attaque peut-on faire avec une chaîne de requête si le programmeur ne prend pas de précautions dans son code ?
XSS CFRS

Quel est le moyen LE PLUS FIABLE d'obtenir du polymorphisme
 en Programmation Orientée Objet ?


JS rappel:

+ var index = document.querySelector('li > button').dataset.index;
+ Orienté Objet
+







?>
