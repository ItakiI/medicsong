<?php
require_once dirname(__DIR__) . '/config/cdb.php';
require_once dirname(__DIR__) . '/components/head.php';
require_once dirname(__DIR__) . '/components/header.php';
?>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 justify-content-center g-0">
    <div class="col mb-5">
        <div class="card bg-transparent border-0 ">
            <form class="form-control border border-3 border-success bg-transparent text-center" action="/medicsong/controller/ajoutdoc.php" enctype="multipart/form-data" method="post">
                <div class="m-5">
                    <label class="form-label" for="nom">Nom :</label>
                    <input class="form-control" type="text" name="nom" id="nom" autofocus>
                    <br>
                    <label class="form-label" for="echantillon">Echantillon :</label>
                    <input class="form-control" type="text" name="echantillon" id="echantillon" ">
                    <br>
                    <label class=" form-label" for="image">Image :</label>
                    <input class="form-control" type="file" name="image" id="image" accept=".pdf, .jpg, .jpeg, .png, .gif, .webp ">
                    <br>
                    <label class="form-label" for="description">Description :</label>
                    <input class="form-control" type="textarea" name="description" id="description" pattern="[A-Za-z0-9]+">
                    <br>
                    <label class="form-label" for="signature">Signature :</label>
                    <input class="form-control" type="file" name="signature" id="signature" accept=".pdf, .jpg, .jpeg, .png, .gif, .webp">
                    <br>
                    <label class="form-label" for="sujet">Spécialite :</label>
                    <select class="form-label form-select-lg w-100" name="spec" id="spec">
                        <?php require_once dirname(__DIR__) .  '/controller/selectformspec.php'; ?>
                    </select>
                    <br>
                    <button class="card-link btn btn-success d-grid gap-2 col-8 mx-auto mt-5" type="submit">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once dirname(__DIR__) . '/components/footer.php'; ?>