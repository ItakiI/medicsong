<?php
//creation d'une page d'administration avec possibilté d'ajout, de modification et de suppression de docteur. 


// redirection du tableau intermédiaire perso_has_spec
require_once './tableauinter.php';
// connexion a la base de donnée
require_once './cdb.php';
// redirection des liens CSS & JS
require_once './head.php';
// redirection de la navbar + bannière
require_once './header.php';

// echo uniqid();

foreach  ($result as $row) {

  // affichage des docteurs
?>

<div class="container-fluid text-center g-0">
  <div class="cols d-flex justify-content-evenly p-5 g-0">
    <div class="card col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
      <div class="align-item-center">
        <img src="<?php echo $row["image"] ?>" class="img-fluid bg-dark" alt="Photo du docteur">
      </div>
      <div class="card-body">
      <h5 class="card-title">Dr <?php echo $row["name"] ?></h5>
        <p class="card-text"><?php echo $row["description"] ?></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php echo $row["echantillon"] ?></li>
        <li class="list-group-item"><?php echo $row["signature"] ?></li>
      </ul>
      <div class="card-body">
        <a href="formmodifperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-success">Modifier</a>
        <a href="deleteperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-danger">Supprimer</a>
      </div>
    </div>
  </div>
</div>

<?php

}   

?>
