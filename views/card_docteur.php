<div class="d-flex justify-content-evenly row row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 m-3 b-3 p-3 g-0">

  <?php
  foreach ($result as $row) {

    // affichage des docteurs 
  ?>


    <div class="card text-center border border-black m-3 bg-secondary " style="--bs-bg-opacity: .5;">
      <div class="d-flex justify-content-center mt-3">
        <img src="<?php echo $row["image"] ?>" class=" w-75 h-auto border border-black" alt="Photo du docteur">
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
        <div class="d-flex justify-content-center">
          <img src="<?php echo $row["signature"] ?>" class=" w-25 h-25 border-bottom-0" alt="Signature du docteur">
        </div>
      </div>
      <div class="card-body">
        <a href="/medicsong/views/formmodifperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-success border border-black">Modifier</a>
        <a href="/medicsong/controller/deleteperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-danger border border-black">Supprimer</a>
      </div>
    </div>

  <?php }  ?>

</div>