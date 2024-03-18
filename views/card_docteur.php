<div class="row gap-4 row-cols-2 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-5 w-100 text-center justify-content-center my-5">

  <?php
  foreach ($result as $row) {

    // affichage des docteurs 
  ?>
    <div class="card col pt-2 bg-dark-subtle shadow ">
      <img src="<?php echo $row["image"] ?>" class="card-img-top img-thumbnail shadow" alt="docteur-image" />
      <div>
        <div class="card-body">
          <h5 class="card-title fw-bold fs-3">Dr. <span class="fw-normal"><?php echo $row["name"] ?></h5>
        </div>
        <ul class="list-group list-group-flush fs-5 rounded shadow   ">
          <li class="list-group-item bg-secondary-subtle">
            <p>Spécialité : <span class="text-success"><?php echo $row["spec"] ?>
                <hr>
          </li>
          <li class="list-group-item bg-secondary-subtle ">
            <p class="card-text">Description : <br> <span class="fs-6"><?php echo $row["description"] ?></span>
              <hr>
          </li>
          <li class="list-group-item bg-secondary-subtle">
            <figure>
              <p>Échantillon :</p>
              <audio class="form-control bg-dark-subtle" controls src="<?php echo $row["echantillon"] ?>">
                <a href="<?php echo $row["echantillon"] ?>">Download audio</a>
              </audio>
            </figure>
          </li>
          <li class="list-group-item bg-secondary-subtle">
            <div class="d-flex justify-content-center">
              <img src="<?php echo $row["signature"] ?>" class=" w-50 h-25 border-bottom-0" alt="Signature du docteur">
            </div>
          </li>

        </ul>
      </div>
      <div class="card-body d-flex flex-column justify-content-end">

        <a href="/medicsong/views/formmodifperso.php?id=<?php echo $row['perso_id'] ?>" class=" btn btn-success my-2 w-100">Modifier</a>

        <a href="/medicsong/controller/deleteperso.php?id=<?php echo $row['perso_id'] ?>" class=" btn btn-danger my-2 w-100">Supprimer</a>
      </div>
    </div>



  <?php }  ?>

</div>




