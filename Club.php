<?php

class Club{

  protected $nom;
  protected $ville;
  protected $pays;
  protected $championnat;
  protected $joueurs = [];

  /**
   * [__construct description]
   */
  public function __construct($nom, $ville){
    $this->nom = $nom;
    $this->ville = $ville;
  }

  /**
   * Acheter un joueur
   * @param  Joueur $joueur [description]
   * @return [type]         [description]
   */
  public function acheterJoueur(Joueur $joueur){
    $this->joueurs[] = $joueur;
  }

    /**
     * Get the value of Nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of Nom
     *
     * @param mixed nom
     *
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of Ville
     *
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of Ville
     *
     * @param mixed ville
     *
     * @return self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of Pays
     *
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of Pays
     *
     * @param mixed pays
     *
     * @return self
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of Championnat
     *
     * @return mixed
     */
    public function getChampionnat()
    {
        return $this->championnat;
    }

    /**
     * Set the value of Championnat
     *
     * @param mixed championnat
     *
     * @return self
     */
    public function setChampionnat($championnat)
    {
        $this->championnat = $championnat;

        return $this;
    }




    /**
     * Get the value of Joueurs
     *
     * @return mixed
     */
    public function getJoueurs()
    {
        return $this->joueurs;
    }

    /**
     * Set the value of Joueurs
     *
     * @param mixed joueurs
     *
     * @return self
     */
    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }

}





 ?>
