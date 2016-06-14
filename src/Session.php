<?php

namespace src;

use \DateTime;

/**
 * Session
 */
class Session
{

  protected $dateSession;
  protected $dateCreation;
  protected $idMovie;

  const NBBILLETS = 100;
  const THREED = true;
  const ANNEE = 2012;


    /**
     * Get the value of Session
     *
     * @return mixed
     */
    public function getDateSession()
    {
        return $this->dateSession;
    }

    /**
     * Set the value of Session
     *
     * @param mixed dateSession
     *
     * @return self
     */
    public function setDateSession($dateSession)
    {
        $this->dateSession = $dateSession;

        return $this;
    }

    /**
     * Get the value of Date Creation
     *
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of Date Creation
     *
     * @param mixed dateCreation
     *
     * @return self
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get the value of Id Movie
     *
     * @return mixed
     */
    public function getIdMovie()
    {
        return $this->idMovie;
    }

    /**
     * Set the value of Id Movie
     *
     * @param mixed idMovie
     *
     * @return self
     */
    public function setIdMovie($idMovie)
    {
        $this->idMovie = $idMovie;

        return $this;
    }

  /**
   *
   * @return [type] [description]
   */
  public function dateFormat(){

    $myDate = new DateTime($this->dateSession);
    return $myDate->format('d/m/Y à H:i:s');
  }


  /**
   * Retourne l'année de la date de sortie
   * @return [type] [description]
   */
  public function getYearOfDateRelease(){
    $date = new \DateTime($this->dateSession);
    return $date->format('Y');
  }

  /**
   *
   * @param  [type] $one [description]
   * @param  [type] $two [description]
   * @return [type]      [description]
   */
  public static function getTheDiff(Session $one, Session $two){

     $dateTimeOne = new \DateTime($one->getDateSession() );
     $dateTimeTwo = new \DateTime($two->getDateSession() );

      // différence entre 2 objets Datetime
      $interval = $dateTimeOne -> diff(
        $dateTimeTwo
      );

      return $interval-> format('%a days');
  }

  /**
   * Liste des séances selon, un paramètre
   * @param  DateTime  $dateAfter [description]
   * @param  Connexion $co        [description]
   * @return [type]               [description]
   */
  public static function seanceAfter(\DateTime $dateAfter,
              Connexion $co){

     $req = $co->connect()->query(
       "SELECT id
        FROM sessions
        WHERE date_session > {$dateAfter->format('Y-m-d')}"
     );

       return $req->fetchAll();
   }

   /**
    * Soustraire une intervalle sur une date (Objet Datetime)
    * @param  [type] $intervale [description]
    * @return [type]            [description]
    */
   public  function sousDateIntervale(\DateInterval $interval){

    $dates = new \DateTime($this->dateSession);
    $date = $dates->sub($interval);
    return $date->format('d-m-Y H:i:s') . "\n";
  }

  /**
   * Prendre les objets Session en 2012 a partir d'un tableaux de sessions
   * @param  [type] $tabFilm [description]
   * @return Array    Tableaux des objets
   */
  public static function getTabObjSession2012($tabFilm = []){

      $newTabObjs = [];

      foreach ($tabFilm as $value) {
        $date = new \DateTime($value->getDateSession());
        if ($date->format('Y') == self::ANNEE) {
          $newTabObjs[] = $value;
        }
      }

      return $newTabObjs;
  }


  /**
 * Compares la session par rapport à une date donnée
 * @param  [$objectSess]  Object of "Session" class
 * @param  [$objectDate]  Date type "DateTime"
 * @return [Boolean] true or false, if DateSession if greater or smaller
 */
public static function boolIfSupOrInf(Session $objectSess,
                                      \DateTime $objectDate){

  $DateTimeSess = new \DateTime($objectSess->getDateSession());

  if($DateTimeSess > $objectDate){
    return true;
  }

    return false;
}



/**
 * Methode qui me retourne le nb de séance comprises entre 2 dates
 * @param  [type] $dateTimeOne [description]
 * @param  [type] $dateTimeTwo [description]
 * @param  [type] $connect     [description]
 * @return [type]              [description]
 */
public static function returnSessionSelect(\DateTime $dateTimeOne,      \DateTime $dateTimeTwo, Connexion $connect){

    $req = $connect->connect()->query(
      "SELECT id, date_session
       FROM sessions
       WHERE date_session > '{$dateTimeOne->format('Y-m-d')}'
       AND date_session < '{$dateTimeTwo->format('Y-m-d')}'"
    );

    $resultat = $req->fetchAll();

    return count($resultat);
  }







}







 ?>
