<?php

namespace src;

/**
 * @class Realisateur
 * @version 1.0
 * @author Boyer Julien
 * @extends Personnel
 */
class Realisateur extends Personnel
{

  protected $nom;
  protected $prenom;
  protected $dob;
  protected $biography;
  protected $ville;
  protected $image;

    /**
     * Get the value of Firstname
     *
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of Firstname
     *
     * @param mixed firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of Lastname
     *
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of Lastname
     *
     * @param mixed lastname
     *
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of Dob
     *
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of Dob
     *
     * @param mixed dob
     *
     * @return self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get the value of Biography
     *
     * @return mixed
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Set the value of Biography
     *
     * @param mixed biography
     *
     * @return self
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;

        return $this;
    }

    /**
     * Get the value of Image
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of Image
     *
     * @param mixed image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Permet de retourner la date de naissance au format français
     * @return
     */
    public function getDobFr(){

        $myDate = new \DateTime($this->dob);
        return $myDate->format('d/m/Y');
    }

}









 ?>
