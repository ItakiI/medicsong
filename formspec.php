<!DOCTYPE html>
<html lang="fr">

<?php require_once './head.php'; ?>

<body>
  <?php require_once 'cdb.php'; ?>
  
<form action="ajoutspec.php" method="post">
<div>
    <label for="spec">Spécialités</label>
    <input type="text" name="spec" id="spec" >
</div>
<br>
<div>   
    <button type="submit">Enregistrer les modifications</button>  
    
</div>
</form>

<?php require_once './footer.php'; ?>

</body>
</html>