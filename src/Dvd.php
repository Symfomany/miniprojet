<?php

namespace src;

/**
 * @class Dvd
 * @extends Movie
 */
class Dvd extends Movie
{

  protected $prix = 0;
  protected $taxe = 19.6;
  protected $capacite;
  protected $fabricant;
  protected $diametre;
  protected $poid;
  protected $coucheDouble = false;

  /**
   * Ecrase mon constructeur parent par ce constructeur
   * Override
   * @param [type] $connexion [description]
   */
  public function __construct(Connexion $connexion = null){
    if($connexion){
      $this->connexion = $connexion->connect();
    }
  }

  /**
   * [MoyenneBudgetDvd description]
   * @param [type] $dvd  [description]
   * @param [type] $dvd2 [description]
   * @param [type] $dvd3 [description]
   * @param [type] $dvd4 [description]
   * @param [type] $dvd5 [description]
   */
   public function movieBudget($tabMovie){
      $sum = $compteur = 0;

      foreach ($tabMovie as $value) {
          $sum += $value->budget;
          $compteur++;
      }
      $moyenne = $sum / $compteur;
      return [
         "moyenne" => $moyenne,
         "nb" => $compteur
       ];
   }






}




 ?>
