<div class="row gap-4 row-cols-2 row-cols-sm-2 row-cols-lg-4 row-cols-xxl-5 w-100 text-center justify-content-center my-5">

  <?php
  foreach ($result as $row) {
    // affichage des docteurs 
  ?>

    <div class="card pt-2 bg-dark-subtle shadow">
      <img src="<?php echo $row["image"] ?>" class="card-img-top object-fit-scale h-auto " style="max-height: 300px;" alt="docteur-image" />
      <div>
        <div class="card-body">
          <h5 class="card-title fw-bold fs-3">Dr. <span class="fw-normal"><?php echo $row["name"] ?></h5>
        </div>

        <ul class="list-group list-group-flush fs-5 rounded shadow   ">
          <li class="px-2 bg-body-secondary rounded-top">
            <p>Spécialité : <br> <span class="text-success"><?php echo $row["spec"] ?>
                <hr>
          </li>
          <li class="px-2  bg-body-secondary ">
            <p class="card-text">Description : <br> <span class="fs-6"><?php echo $row["description"] ?></span>
              <hr>
          </li>
          <li class="px-2  bg-body-secondary">
            <figure>
              <p>Échantillon :</p>
              <audio class="px-2 form-control bg-dark-subtle" controls src="<?php echo $row["echantillon"] ?>">
                <a href="<?php echo $row["echantillon"] ?>">Download audio</a>
              </audio>
            </figure>
          </li>
          <li class="p-2 bg-body-secondary bg-body-secondary">
            <div class="d-flex justify-content-center bg-body-secondary">
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
  <?php
  }
  ?>
</div>