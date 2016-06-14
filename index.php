<?php include "header.php"; ?>
  <!-- inclure une sidebar (sidebar.php) -->
  <div class="row">

    <?php include "sidebar.php";  ?>

        <?php
          $lastMovies = getSixBestMovies($connexion);
          $lastUsers = getThreeLastUsers($connexion);
          $allTags = getTagsByNb($connexion);
         ?>
         <div class="jumbotron">
           <h3>Nuages de tags</h3>

           <?php foreach ($allTags as $key => $tag){ ?>
              <span
              style="font-size: <?php echo $tag['nbFilm']*1.5 + 12; ?>px"
              class="label label-default"><?php echo $tag['word'] ?></span>
           <?php } ?>

         </div>

          <div class="col-lg-9 col-md-9">
            <?php foreach($lastMovies as $movie) { ?>
              <div class="post-preview">
                      <h2 class="post-title">
                          <a href="movie.php?id=<?php echo $movie['id'] ?>">
                            <?php echo $movie['mtitle']; ?>
                          </a>
                      </h2>
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
              <?php } ?>

          </div>

          <h3>3 derniers utilisateurs connectés</h3>
          <hr />
          <div class="col-lg-9 col-md-9">
            <?php foreach($lastUsers as $user) { ?>
              <div class="post-preview">
                      <p class="post-subtitle">
                        <?php echo $user['email']; ?>
                        <?php echo $user['username']; ?>
                      </p>
                      <p>
                        <img src="<?php echo $user['avatar']; ?>"
                        class="img-thumbnail col-md-3 pull-right" />
                      </p>
              </div>
              <?php } ?>

          </div>


</div>

<?php include "footer.php";  ?>
