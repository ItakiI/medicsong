<!DOCTYPE html>
<html lang="fr">

<?php require_once './head.php'; ?>

<body>
    <?php require_once 'cdb.php'; ?>

    <form action="ajoutdoc.php" enctype="multipart/form-data" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <br>
        <div>
            <label for="echantillon">Echantillon</label>
            <input type="text" name="echantillon" id="echantillon">
        </div>
        <br>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
        </div>
        <br>
        <div>
            <label for="description">Description</label>
            <input type="textarea" name="description" id="description">
        </div>
        <br>
        <!-- <div>
            <label for="signature">Signature</label>
            <input type="file" name="signature" id="signature">
        </div> -->
        <br>
        <div>
            <label for="spec">Spécialite</label>
            <select name="spec" id="spec">
                <?php require_once 'selectformspec.php'; ?>
            </select>

        </div>
        <br>
        <div>
            <button type="submit">Enregistrer les modifications</button>

        </div>
    </form>

    <?php require_once './footer.php'; ?>

</body>

</html>