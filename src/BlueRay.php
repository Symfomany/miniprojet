<?php

namespace src;


/**
 * @class BlueRay
 * @extends Movie
 */
class BlueRay extends Movie
{


  protected $typeMedia = "disque optique";
  protected $codage = ['MPEG-4', 'H.264', 'VC-1'];
  protected $diametre;
  protected $poid;
  protected $fabricant;
  protected $mecanisme;
  protected $utilisation;

  /**
   * Get the value of Type Media
   *
   * @return mixed
   */
    public function getTypeMedia()
    {
        return $this->typeMedia;
    }

    /**
     * Set the value of Type Media
     *
     * @param mixed typeMedia
     *
     * @return self
     */
    public function setTypeMedia($typeMedia)
    {
        $this->typeMedia = $typeMedia;

        return $this;
    }

    /**
     * Get the value of Codage
     *
     * @return mixed
     */
    public function getCodage()
    {
        return $this->codage;
    }

    /**
     * Set the value of Codage
     *
     * @param mixed codage
     *
     * @return self
     */
    public function setCodage($codage)
    {
        $this->codage = $codage;

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
     * Get the value of Mecanisme
     *
     * @return mixed
     */
    public function getMecanisme()
    {
        return $this->mecanisme;
    }

    /**
     * Set the value of Mecanisme
     *
     * @param mixed mecanisme
     *
     * @return self
     */
    public function setMecanisme($mecanisme)
    {
        $this->mecanisme = $mecanisme;

        return $this;
    }

    /**
     * Get the value of Utilisation
     *
     * @return mixed
     */
    public function getUtilisation()
    {
        return $this->utilisation;
    }

    /**
     * Set the value of Utilisation
     *
     * @param mixed utilisation
     *
     * @return self
     */
    public function setUtilisation($utilisation)
    {
        $this->utilisation = $utilisation;

        return $this;
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

}














 ?>
