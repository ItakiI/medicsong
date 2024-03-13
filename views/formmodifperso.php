<?php 
require_once dirname(__DIR__) . '/config/cdb.php';
require_once dirname(__DIR__) . '/components/head.php'; 
require_once dirname(__DIR__) . '/components/header.php';
?>

<form action="modifpersobdd.php?id=<?php echo $_GET['id'] ?> " method='post'>

    <input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden>

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
    </div>
    <br>
    <div>
        <button type="submit">Enregistrer les modifications</button>

    </div>
</form>

<?php 
require_once dirname(__DIR__) . '/components/footer.php';
 ?>