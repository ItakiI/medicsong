<div class="d-flex justify-content-evenly row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 m-3 b-3 p-3 g-0">
<!-- <div class="d-flex justify-content-evenly row row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 m-3 b-3 p-3 g-0"> -->


  <?php
  foreach ($result as $row) {

    // affichage des docteurs 
  ?>


    <div class="card text-center border border-black m-2 bg-secondary " style="--bs-bg-opacity: .5;">
      <div class="d-flex justify-content-center m-1 bt-0 pt-0 gt-0">
        <img src="<?php echo $row["image"] ?>" class=" w-100 h-100 mt-0 bt-0 pt-0 gt-0 border border-black" alt="Photo du docteur">
      </div>
      <div class="card-body">
        <h5 class="card-title">Dr. <?php echo $row["name"] ?></h5><br>
        <p class="card-text">Spécialité :<br><?php echo $row["spec"] ?></p>
        <p class="card-text">Description :<br><?php echo $row["description"] ?>
        <figure>
          <p>Échantillon :</p><br>
          <audio class="form-control" controls src="<?php echo $row["echantillon"] ?>">
            <a href="<?php echo $row["echantillon"] ?>">Download audio</a>
          </audio>
        </figure>
        <div class="d-flex justify-content-center">
          <img src="<?php echo $row["signature"] ?>" class=" w-25 h-25 border-bottom-0 bg-transparent" alt="Signature du docteur">
        </div>
      </div>
      <div class="card-body">
        <a href="/medicsong/views/formmodifperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-success border border-black">Modifier</a>
        <a href="/medicsong/controller/deleteperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-danger border border-black">Supprimer</a>
      </div>
    </div>

    <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <img src="<?php echo $row["image"] ?>" class="card-img-top w-100 h-100 mt-0 bt-0 pt-0 gt-0 border border-black" alt="...">
      <div class="card-body">
      <h5 class="card-title text-center fs-6">Dr. <?php echo $row["name"] ?></h5>
              <p class="fs-6">Spécialité :<br><?php echo $row["spec"] ?></p>
              <p class="fs-6">Description :<br><?php echo $row["description"] ?>
              <figure>
                <p class="fs-6">Échantillon :</p><br>
                <audio class="form-control" controls src="<?php echo $row["echantillon"] ?>"></audio>
              </figure>
                <div class="d-flex justify-content-center">
                  <img src="<?php echo $row["signature"] ?>" class=" w-25 h-25 border-bottom-0 bg-transparent" alt="Signature du docteur">
                </div>
      <div class="card-footer">
        <small class="text-body-secondary">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card-body">
              <a href="/medicsong/views/formmodifperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-success border border-black">Modifier</a>
              <a href="/medicsong/controller/deleteperso.php?id=<?php echo $row['perso_id'] ?>" class="card-link btn btn-danger border border-black">Supprimer</a>
            </div> -->





  <?php }  ?>

</div>