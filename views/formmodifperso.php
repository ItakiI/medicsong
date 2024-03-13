<?php 
require_once __DIR__ . '/components/head.php'; 
require_once __DIR__ . '/config/cdb.php';
?>

    <form action="modifpersobdd.php?id=<?php echo $_GET['id'] ?> " method='post'>
        
        <input type="text" name="id" value="<?php echo $_GET['id']?>" hidden>

        <div>
            <label for="echantillon">Echantillon</label>
            <input type="text" name="echantillon" id="echantillon" pattern="[A-Za-z0-9]+" autofocus>
        </div>
        <br>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png, .gif">
        </div>
        <br>
        <div>
            <label for="description">Description</label>
            <input type="textarea" name="description" id="description" pattern="[A-Za-z0-9]+">
        </div>
        <br>
        <br>
        <div>
            <button type="submit">Enregistrer les modifications</button>

        </div>
    </form>

    <?php require_once __DIR__ . '/components/footer.php'; ?>