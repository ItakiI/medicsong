<?php
require_once dirname(__DIR__) . '/config/cdb.php';
require_once dirname(__DIR__) . '/components/head.php'; 
require_once dirname(__DIR__) . '/components/header.php';
 ?>
  


<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 justify-content-center g-0">
    <div class="col mb-5">
        <div class="card bg-transparent border-0 ">
            <form class="form-control border border-3 border-success bg-transparent text-center" action="/medicsong/controller/ajoutspec.php" method="post">
                <div class="m-5">
                    <label class="form-label" for="spec">Spécialités :</label>
                    <input class="form-control" type="text" name="spec" id="spec" pattern="[A-Za-z0-9]+" >
                    <br>
                    <button class="card-link btn btn-success d-grid gap-2 col-8 mx-auto mt-5" type="submit">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once dirname(__DIR__) . '/components/footer.php'; ?>