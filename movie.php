<?php include "header.php"; ?>

  <div class="row">

    <?php include "sidebar.php";  ?>
    <?php
      // recupere mon id
      $id = $_GET['id'];

      // recupere mes données de formulaire
      // $_POST => un tableau associatif de mes données
      // de formulaire
      $donnes = $_POST;

      // Si mes données ne sont pas vides
      // Si mon formulaire a été soumis
      if(!empty($donnes)){

        // Insertion d'un commentaire en bdd
        insererCommentInMovie($id, $connexion);

        echo "
        <div class='alert alert-success'>
          Votre commentaire a bien été ajouté
        </div>";
      }


      $movie = getDetailMovieById($id, $connexion);
      if(!$movie){
        echo "Vous n'avez pas de film";
      }else{

     ?>

      <h1><?php echo $movie['title']. " <i>".$movie['annee']; ?></i></h1>
      <hr />
      <?php
        $commentaires = getAllCommentsByMoviesId($connexion, $id);

        // <pre>print_r()</pre> permet de stylyser vos debogage
      ?>

      <h3>Liste des commentaires <i><?php echo count($commentaires); ?> comms</i> </h3>


    <div class="row">
      <div class="col-md-8">

            <?php foreach($commentaires as $comment){  ?>

                <p><?php  echo $comment['content'] ?>
                  <span class="badge"><strong>
                    <?php echo generateStars($comment['note']); ?>
                  </strong> / 5</span>

                    <?php echo str_repeat("<span class='fa fa-star'></span>",
                    $comment['note']); ?>
                </p>
            <?php  } ?>
      </div>
    </div>
    <hr />

    <!-- Formulaire avec methode POST -->
    <form action="movie.php?id=<?php echo $id ?>" method="POST">

      <label for="note"> Note </label>
      <input name="note" type="text" required="required" class="form-control" id="note" />

      <label for="contenu"> Contenu </label>
      <textarea name="contenu" required="required" class="form-control" id="contenu"></textarea>

      <button class="btn btn-success" type="submit">Ajouter ce commentaire</button>

    </form>



    </form>






      <div class="post-preview">
              <h3 class="post-title">
                  <a href="movie.php?id=<?php echo $movie['id'] ?>">
                    <?php echo $movie['mtitle']; ?>
                  </a>
              </h3>
              <?php if($movie['note_presse'] >= 15 && $movie['note_presse'] < 20){ ?>
                  <span class="label label-success">
                    <?php }elseif($movie['note_presse'] >= 10 && $movie['note_presse'] < 15) { ?>
                      <span class="label label-info">
                  <?php }elseif($movie['note_presse'] >= 5 && $movie['note_presse'] < 10) { ?>
                    <span class="label label-warning">
                  <?php }else { ?>
                    <span class="label label-danger">
                    <?php } ?>
              <?php echo $movie['note_presse']; ?> / 20
            </span>
              <span class="pull-right label label-primary">
                <?php echo $movie['languages']; ?>
              </span>
              <h3 class="post-subtitle">
                <?php echo $movie['ctitle']; ?>
              </h3>
              <p>
                <img src="<?php echo $movie['image']; ?>" class="img-thumbnail col-md-3 pull-right" />
                <?php echo strip_tags($movie['synopsis']); ?>
              </p>
          <p class="post-meta">Créer dans <a href="#"><?php echo $movie['ctitle']; ?></a> <?php echo $movie['date_release']; ?></p>
      </div>
  </div>
<?php } ?>
  <?php include "footer.php";  ?>
