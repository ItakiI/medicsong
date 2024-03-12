<!DOCTYPE html>
<html lang="fr">

<?php 
require_once './head.php'; 
require_once 'cdb.php';
require_once 'tableauinter.php';


foreach ($result as $row) {
   if ($row['perso_id'] == $_GET['perso_id']) {
?>

<body class="bg-warning-subtle">

    <form action="modifpersobdd.php?id=<?php echo $row['perso_id'] ?> " method='post'>
        
        <input type="text" name="id" value="<?php $_GET['perso_id']?>" hidden>

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

    <?php }} 
    require_once './footer.php'; ?>

</body>

</html>