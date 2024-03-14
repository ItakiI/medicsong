
<?php 
require_once dirname(__DIR__) . '/config/cdb.php'; 
require_once dirname(__DIR__) . '/components/head.php'; 
require_once dirname(__DIR__) . '/components/header.php';
?>

    <form class= "mt-5 mb-5" action="/medicsong/controller/ajoutdoc.php" enctype="multipart/form-data" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" autofocus>
        </div>
        <br>
        <div>
            <label for="echantillon">Echantillon</label>
            <input type="text" name="echantillon" id="echantillon" ">
        </div>
        <br>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" accept=".pdf, .jpg, .jpeg, .png, .gif, .webp ">
        </div>
        <br>
        <div>
            <label for="description">Description</label>
            <input type="textarea" name="description" id="description" pattern="[A-Za-z0-9]+">
        </div>
        <br>
        <div>
            <label for="signature">Signature</label>
            <input type="file" name="signature" id="signature" accept=".pdf, .jpg, .jpeg, .png, .gif, .webp">
        </div>
        <br>
        <div>
            <label for="spec">Spécialite</label>
            <select name="spec" id="spec">
                <?php require_once dirname(__DIR__) .  '/controller/selectformspec.php'; ?>
            </select>
        </div>
        <br>
        <div>
            <button type="submit">Enregistrer les modifications</button>
        </div>
    </form>

    <?php require_once dirname(__DIR__) . '/components/footer.php'; ?>