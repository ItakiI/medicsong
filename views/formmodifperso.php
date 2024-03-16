<?php 
require_once dirname(__DIR__) . '/config/cdb.php';
require_once dirname(__DIR__) . '/components/head.php'; 
require_once dirname(__DIR__) . '/components/header.php';
?>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 justify-content-center g-0">
    <div class="col mb-5">
        <div class="card bg-transparent border-0 ">
            <form class="form-control border border-3 border-success bg-transparent text-center" action="/medicsong/controller/modifpersobdd.php?id=<?php echo $_GET['id'] ?> " method='post'>
                <input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden>
                <div class="m-5">
                    <label class="form-label" for="echantillon">Echantillon</label>
                    <input class="form-control" type="file" name="echantillon" id="echantillon">
                    <br>
                    <label class="form-label" for="image">Image</label>
                    <input class="form-control" type="file" name="image" id="image">
                    <br>
                    <label class="form-label" for="description">Description</label>
                    <input class="form-control" type="textarea" name="description" id="description">
                    <br>
                    <button class="card-link btn btn-success d-grid gap-2 col-8 mx-auto mt-5" type="submit">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>




<?php 
require_once dirname(__DIR__) . '/components/footer.php';
 ?>


