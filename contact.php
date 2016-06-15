<?php include "header.php"; ?>

  <?php

      // Tableau associatif qui récupere toute données soumise
      // par un formulaire
      $contact = $_POST;

      // empty() si vide ou pas
      // isset() si une clefs du tableau existe
      if(!empty($contact) && isset($contact['email']))
      {

        /*
        * Sujet: Min. 3 caractères alpha
        * Email: soit valide
        * Url: soit valide
        */
        if(preg_match("/^[a-z]{3,}$/", $contact['sujet'])){
          // save in db
          saveContact($connexion);
          echo "<div class='alert alert-success'>
                  Votre contact a bien été envoyé
                </div>";
        }else{
          echo "<div class='alert alert-danger'>
                      Votre sujet est invalide !
                </div>";
        }

      }

   ?>

  <div class="row">

      <form action="contact.php" method="post">

          <input type="text" class="form-control" name="sujet" placeholder="Votre sujet" />
          <input type="email" class="form-control" name="email" placeholder="Votre email" />
          <input type="url" class="form-control" name="url" placeholder="http://" />
          <textarea class="form-control" name="contenu" placeholder="Votre contenu ici..."></textarea>

        <button class="btn btn-primary btn-sm" type="submit">
            Envoyer
        </button>
      </form>


  </div>


  <?php include "footer.php"; ?>
