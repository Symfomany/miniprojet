<?php
namespace src;


/**
 *
 */
class ActeurSerie extends Acteur{

  protected $nomDeSerie;

  protected $surnom;
  /**
     * Get the value of Nom De Serie
     *
     * @return mixed
     */
    public function getNomDeSerie()
    {
        return $this->nomDeSerie;
    }

    /**
     * Set the value of Nom De Serie
     *
     * @param mixed nomDeSerie
     *
     * @return self
     */
    public function setNomDeSerie($nomDeSerie)
    {
        $this->nomDeSerie = $nomDeSerie;

        return $this;
    }

    /**
     * Get the value of Surnom
     *
     * @return mixed
     */
    public function getSurnom()
    {
        return $this->surnom;
    }

    /**
     * Set the value of Surnom
     *
     * @param mixed surnom
     *
     * @return self
     */
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;

        return $this;
    }

}

 ?>
