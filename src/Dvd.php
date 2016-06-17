<?php

namespace src;

/**
 * @class Dvd
 * @extends Movie
 */
class Dvd extends Movie implements ContenuInterface
{

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







    /**
     * Get the value of Prix
     *
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of Prix
     *
     * @param mixed prix
     *
     * @return self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of Taxe
     *
     * @return mixed
     */
    public function getTaxe()
    {
        return $this->taxe;
    }

    /**
     * Set the value of Taxe
     *
     * @param mixed taxe
     *
     * @return self
     */
    public function setTaxe($taxe)
    {
        $this->taxe = $taxe;

        return $this;
    }

    /**
     * Get the value of Capacite
     *
     * @return mixed
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set the value of Capacite
     *
     * @param mixed capacite
     *
     * @return self
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get the value of Fabricant
     *
     * @return mixed
     */
    public function getFabricant()
    {
        return $this->fabricant;
    }

    /**
     * Set the value of Fabricant
     *
     * @param mixed fabricant
     *
     * @return self
     */
    public function setFabricant($fabricant)
    {
        $this->fabricant = $fabricant;

        return $this;
    }

    /**
     * Get the value of Diametre
     *
     * @return mixed
     */
    public function getDiametre()
    {
        return $this->diametre;
    }

    /**
     * Set the value of Diametre
     *
     * @param mixed diametre
     *
     * @return self
     */
    public function setDiametre($diametre)
    {
        $this->diametre = $diametre;

        return $this;
    }

    /**
     * Get the value of Poid
     *
     * @return mixed
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * Set the value of Poid
     *
     * @param mixed poid
     *
     * @return self
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * Get the value of Couche Double
     *
     * @return mixed
     */
    public function getCoucheDouble()
    {
        return $this->coucheDouble;
    }

    /**
     * Set the value of Couche Double
     *
     * @param mixed coucheDouble
     *
     * @return self
     */
    public function setCoucheDouble($coucheDouble)
    {
        $this->coucheDouble = $coucheDouble;

        return $this;
    }


    /**
     * Permet à partir d'un DVD acheté, un dvd ou blue ray offert
     * @return [type] [description]
     */
    public function promotionOffert(Movie $movie){

      return "<p>Le film {$this->titre} acehté en dvd
                  vous donne pour offert le film {$movie->titre}</p>";

    }


}




 ?>
