<?php

namespace src;

/**
 *
 */
class Categorie implements ContenuInterface, VisibleInterface{


  public function compteMotsSynopsis(){
      // compter ici le nb de mot descroption de catégorie

  }


      /**
       * Get the value of [$visible description]
       *
       * @return [type]
       */
      public function getVisible()
      {
          return $this->visible;
      }

      /**
       * Set the value of [$visible description]
       *
       * @param [type] visible
       *
       * @return self
       */
      public function setVisible( $visible)
      {
          $this->visible = $visible;

          return $this;
      }


}



 ?>
