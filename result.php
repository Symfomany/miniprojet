<?php include "header.php"; ?>

<?php
  // recupere le tab associatif du formulaire
  $search = $_POST;

  if(!empty($search)){

    $movies = searchMovies($connexion, $search['search']);
  ?>
    <?php if(!empty($movies)){ ?>
        <?php foreach($movies as $movie){ ?>

            <div class="col-md-4">
              <h3><?php echo $movie['title']; ?></h3>
              <p><?php echo strip_tags($movie['synopsis']); ?></p>
              <p><?php echo $movie['annee']; ?>
              <?php echo $movie['budget']; ?>€</p>
            </div>

        <?php } ?>
    <?php } ?>



  <?php } ?>




<?php include "footer.php"; ?>
