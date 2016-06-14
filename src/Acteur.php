<?php

namespace src;


/**
 * Class Acteur qui hérite de ma classe Personnel
 * @class Acteur
 * @extends Personnel
 */
class Acteur extends Personnel
{

  const PAYS = "France";
  const LANGUE = "Fr";


  /**
   * Retourne toutes les informations statiques et propres aux acteurs
   * @return [type] [description]
   */
  public static function informationOfActor(){

    if(self::PAYS == "France" && self::LANGUE == "Fr"){

      return  "<p>La lange est le français pour tout mes acteurs</p>";
    }

     return "<p> Aucune langue détécté</p>";
  }

  

}










 ?>
