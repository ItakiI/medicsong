<div class="d-flex justify-content-evenly row row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 m-3 b-3 p-3 g-0">

  <?php
  foreach ($result as $row) {

    // affichage des docteurs 
  ?>

    <div class="card text-center border border-black m-3">
      <div class="align-item-center mh-100">
        <img src="<?php echo $row["image"] ?>" class="img-fluid mh-100 w-auto border-bottom-0" alt="Photo du docteur">
      </div>
      <div class="card-body">
        <h5 class="card-title">Dr. <?php echo $row["name"] ?></h5><br>
        <p class="card-text">Spécialité :<br><?php echo $row["spec"] ?></p>
        <p class="card-text">Description :<br><?php echo $row["description"] ?>
        <figure>
          <p>Échantillon :</p><br>
          <audio controls src="<?php echo $row["echantillon"] ?>">
            <a href="<?php echo $row["echantillon"] ?>">Download audio</a>
          </audio>
        </figure>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?php echo $row["signature"] ?></li>
        </ul>
      </div>
      <div class="card-body">
        <a href="/medicsong/views/formmodifperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-success">Modifier</a>
        <a href="/medicsong/controller/deleteperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-danger">Supprimer</a>
      </div>
    </div>

  <?php }  ?>

</div>