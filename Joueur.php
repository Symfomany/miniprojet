<?php


/**
 *
 */
class Joueur
{
  protected $nom;
  protected $prenom;
  protected $numero;
  protected $poste;
  protected $taille;
  protected $poids;
  protected $salaire = 1000000;
  protected $age;
  protected $club;
  protected $nationalite;
  protected $techniques = ['dribler',
        'passer','courir', 'sauter' ];

  /**
   * Initilize object
   * @param [type] $numero  [description]
   * @param [type] $salaire [description]
   */
  public function __construct($numero,
    $salaire = 1000000, Club $club = null){

    $this->club = $club;
    $this->numero = $numero;
    $this->salaire = $salaire;

    if($numero == 10){
      $this->techniques = ['dribler', 'courir'];
    }

  }

    /**
     * Get the value of Numero
     *
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of Numero
     *
     * @param mixed numero
     *
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of Poste
     *
     * @return mixed
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set the value of Poste
     *
     * @param mixed poste
     *
     * @return self
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get the value of Taille
     *
     * @return mixed
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set the value of Taille
     *
     * @param mixed taille
     *
     * @return self
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get the value of Poids
     *
     * @return mixed
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of Poids
     *
     * @param mixed poids
     *
     * @return self
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of Salaire
     *
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of Salaire
     *
     * @param mixed salaire
     *
     * @return self
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get the value of Age
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of Age
     *
     * @param mixed age
     *
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Augmenter le salaire selon une prime
     * @param  [type] $prime [description]
     * @return [type]        [description]
     */
    public function augmenterSalaire($prime, $coefficient = 1){

      $this->salaire += $prime * $coefficient;

      return $this->salaire;
    }

    /**
     * [driblerJoueur description]
     * @param  Joueur $joueur     [description]
     * @param  [type] $techniques [description]
     * @return [type]             [description]
     */
    public function driblerJoueur(Joueur $joueur,   $techniques = []){
      $html= "";

      foreach($techniques as $technique){
        $html .= "Un {$this->poste} {$this->numero} a fais
        un {$technique} sur le joueur {$joueur->numero} et {$joueur->poste}
         ";
      }

      return $html;


    }


      /**
       * [changerClub description]
       * @param  [type] $numero  [description]
       * @param  [type] $salaire [description]
       * @return [type]          [description]
       */
      public function changerClub($numero, $salaire, $promotion = false, $poste = ""){
          $this->numero = $numero;

          if($salaire != $this->salaire){
            $this->salaire = $salaire;
          }

          if($promotion == true){
            $this->poste = $poste;
            $this->augmenterSalaire(2000, 15);
          }
      }

}










 ?>
