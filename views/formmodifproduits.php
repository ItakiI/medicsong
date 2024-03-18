<?php
require_once dirname(__DIR__) . '\config\cdb.php';
require_once dirname(__DIR__) . '\components\head.php';
require_once dirname(__DIR__) . '\components\header.php';
?>


<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 justify-content-center g-0">
    <div class="col mb-5">
        <div class="card bg-transparent border-0 ">
            <form class="form-control border border-3 border-success bg-transparent text-center" action="/medicsong/controller/update_produits.php?id=<?= $_GET['id'] ?>" method="post">
                <div class="m-5">
                    <label class="form-label" for="prix">Prix :</label>
                    <input class="form-control" type="number" step="0.01" min="0" name="prix" id="prix">
                    <br>
                    <label class="form-label" for="titre">Titre 1 :</label>
                    <input class="form-control" type="text" name="titre" id="titre">
                    <br>
                    <label class="form-label" for="titre1">Titre 2 :</label>
                    <input class="form-control" type="text" name="titre1" id="titre1">
                    <br>
                    <label class="form-label" for="titre2">Titre 3 :</label>
                    <input class="form-control" type="text" name="titre2" id="titre2">
                    <br>
                    <label class="form-label" for="stock">Stock :</label>
                    <input class="form-control" type="number" name="stock" id="stock">
                    <br>
                    <label class="form-label" for="vendu">Vendu :</label>
                    <input class="form-control" type="number" name="vendu" id="vendu">
                    <br>
                    <button class="card-link btn btn-success d-grid gap-2 col-8 mx-auto mt-5" type="submit">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once dirname(__DIR__) . '\components\footer.php'; ?>