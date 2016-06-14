<?php

  /*  Connecter à la Base de données */
  function connectionBdd($nomBdd, $nomHost,
                        $login , $password,
                      $charset = "utf8"){

    // lancer une connection à lase de données avec PDO
    // host: localhost
    // dbname: nom de la base de données
    // Login
    // Mdp
    $bdd = new PDO("mysql:host={$nomHost};dbname={$nomBdd};charset={$charset}",
    $login, $password);

    // retourne la connexion de base de données
    return $bdd;
  }


   /*
   * Retourne les 6 meilleurs films selon la note de presse
   */
  function getSixBestMovies($connexion){
    // requete en SQL et execution avec la fonctio  query()
    $req = $connexion->query(
      "SELECT movies.id as id, movies.title as mtitle , movies.languages, movies.annee, movies.image as image,
      synopsis, movies.description as description, categories.title as ctitle,movies.note_presse,
      DATE_FORMAT(movies.date_release, '%d / %m / %Y à %H:%i') as date_release
       FROM movies
       INNER JOIN categories
       ON categories.id = movies.categories_id
       ORDER BY note_presse DESC
       LIMIT 6"
    );
    // récupération du resultat de ma requete
    // sous forme de tableau associatif
    $resultat = $req->fetchAll();
    // retourne le tableau de résultat
    return $resultat;
  }


  function getTagsByNb($connexion){
      $req = $connexion->query("
        SELECT word, COUNT( tags_movies.movies_id ) AS nbFilm
        FROM tags
        LEFT JOIN tags_movies ON tags.id = tags_movies.tags_id
        GROUP BY tags.id
        ORDER BY nbFilm DESC
      ");

      $resultat = $req->fetchAll();

      return $resultat;
  }

    /*
    * Store in database all contacts
    */
    function saveContact($connexion){
      $req = $connexion->prepare(
        "
          INSERT INTO contact(sujet,contenu,url, email, date_created)
          VALUES(:subject, :content, :url, :mail, :date)
        "
      );

      $req->execute([
        'subject' => $_POST['sujet'],
        'content' => $_POST['contenu'],
        'url' => $_POST['url'],
        'mail' => $_POST['email'],
        'date' => date('Y-m-d H:i:s') //fct en PHP
      ]);


    }

    function generateStars($nb){

      if(is_int($nb)){
        return str_repeat("<span class='fa fa-star'></span>", $nb);
      }
    }


    /**
    * Search movies in DB
    */
    function searchMovies($connexion, $input){

        $req = $connexion->query("
          SELECT id, title, synopsis, annee, budget
          FROM movies
          WHERE title REGEXP '{$input}'
          OR description REGEXP '{$input}'
          OR synopsis REGEXP '{$input}'
          OR budget REGEXP '{$input}'
        ");

        $resultat = $req->fetchAll();

        return $resultat;
    }

   /*
   *  Liste des commentaires pour un Film
   */
  function getAllCommentsByMoviesId($connexion, $id){

    $req = $connexion->query(
      "SELECT content, note, comments.created_at
      FROM comments
      WHERE comments.movies_id = {$id}"
    );
    $resultat = $req->fetchAll();
    return $resultat;
  }

  /**
  * recupère mes 3 derniers utilisateurs
  */
  function getThreeLastUsers($connexion){

    $req = $connexion->query(
      "SELECT avatar, username, email, tel, ville, DATE_FORMAT( last_login,  '%d/%m/%Y à %hH. %im.' ) AS lastLogin
        FROM user
        WHERE last_login < NOW( )
        AND last_login > DATE_SUB( NOW( ) , INTERVAL 1 WEEK )
        ORDER BY last_login DESC
        LIMIT 5"
    );

    $resultat = $req->fetchAll();
    return $resultat;

  }


  /*
  * Insérer un commentaire dans la bdd
  */
  function insererCommentInMovie($id, $connexion){
    // prepare() permet d'utiliser les requetes
    // du type insertion, modification ou suppression

    $req = $connexion->prepare("
      INSERT INTO comments(content,note,movies_id)
      VALUES(:content, :note, :movies_id)
    ");

    // $_POST['content']
    //  nom de mon champs contenu dans le formulaire
    $req->execute([
      'content' => $_POST['contenu'],
      'note' => $_POST['note'],
      'movies_id' => $id,
    ]);


  }


/*
* Cette fonction récupère
* tout le détail d'un film
* via son ID
*/
function getDetailMovieById($id, $connexion){

  $req = $connexion->query(
   "SELECT movies.title, synopsis, annee, movies.description, movies.image,
      trailer, languages, distributeur,
      budget, bo , duree, date_release,
      note_presse, views,
      categories.title AS ctitle
    FROM movies
    INNER JOIN categories
    ON categories.id = movies.categories_id
    WHERE movies.id = {$id}"
  );

  // fetch permet de récuper une ligne
  // et non un tableau fetchAll()

 // Dois-je récupérer plusieurs lignes ou 1 ligne?
 $resultat = $req->fetch();

 return $resultat;

}


?>
