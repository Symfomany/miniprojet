<?php

include_once "./src/Connexion.php";

/**
* Classe Connexion représentative de ma connexion en bdd
*/
class ConnexionTest extends PHPUnit_Framework_TestCase{

  /**
  * Test get host()
  */
  public function testCreate(){
      $connexion  = new Connexion(5000);
      $this->assertInstanceOf('Connexion', $connexion);
      $this->assertEquals($connexion->getHost(), "Nom de l'hébergeur localhost");
      $this->assertEquals($connexion->getPort(), 5000);
  }

  /**
  * Test get host()
  */
  public function testgetHost(){
      $connexion  = new Connexion(5000);
      $this->assertEquals($connexion->getHost(), "Nom de l'hébergeur localhost");
      $connexion->setHost("mysql.ovh.net");
      $this->assertEquals($connexion->getHost(), "Nom de l'hébergeur mysql.ovh.net");
  }
  /**
  * Test get host()
  */
  public function testgetDbName(){
      $connexion  = new Connexion(5000);
      $this->assertEquals($connexion->getDbName(), "cinemal9");

      $connexion2  = new Connexion(5000, "mysql.ovh.net");
      $connexion2->setDbName('mysql');
      $this->assertEquals($connexion2->getDbName(), "mysql");
  }
  /**
  * Test compare Objects
  */
  public function testcompareOneObj(){
      $connexion  = new Connexion(5000);
      $connexion->setLogin('root');
      $connexion->setPassword('123456');
      $connexion2  = new Connexion(5000, "mysql.ovh.net");
      $connexion2->setLogin('root');
      $connexion2->setPassword('123456');
      $this->assertTrue($connexion2->compareOneObj($connexion));
      $connexion2  = new Connexion(5000, "mysql.ovh.net");
      $connexion2->setLogin('root');
      $connexion2->setPassword('1234567');
      $this->assertFalse($connexion2->compareOneObj($connexion));
  }

  /**
   * [testinfoAlert description]
   * @return [type] [description]
   */
  public function testinfoAlert(){
    $connexion  = new Connexion(9000);
    $chaine = $connexion->infoAlert("successs");
    $this->assertFalse($chaine);
    $chaine = $connexion->infoAlert("success");
    $this->assertInternalType("string", $chaine);
  }

  /**
   * [testinfoAlert description]
   * @return [type] [description]
   * @expectedException Exception
   */
  public function testsetColBsTab(){
    $connexion  = new Connexion(9000);
    $connexion2  = new Connexion(8000);
    $connexion3  = new Connexion(7000);
    $connexion4  = new Connexion(6000);

    $resultat = $connexion->setColBsTab(2);

    $resultat = $connexion->setColBsTab([]);
    $this->assertEmpty($resultat, "woooooooooow");

    $resultat = $connexion->setColBsTab([$connexion, $connexion2, $connexion3, $connexion4]);
    $this->assertCount(4, $resultat);
  }


}
