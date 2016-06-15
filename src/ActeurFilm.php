<?php
namespace src;

/**
 *
 */
class ActeurFilm extends Acteur{

  protected $cv;


  protected $oscars = [];




    /**
     * Get the value of Cv
     *
     * @return mixed
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set the value of Cv
     *
     * @param mixed cv
     *
     * @return self
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get the value of Oscars
     *
     * @return mixed
     */
    public function getOscars()
    {
        return $this->oscars;
    }

    /**
     * Set the value of Oscars
     *
     * @param mixed oscars
     *
     * @return self
     */
    public function setOscars($oscars)
    {
        $this->oscars = $oscars;

        return $this;
    }

}
?>
