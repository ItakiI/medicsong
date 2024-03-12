<?php

require_once 'cdb.php';

// On récupére les infos dans la table perso_has_spec
$sqlQuery = 'SELECT * FROM perso_has_spec';
$recipesStatement = $bdd->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">

<?php require_once 'head.php'; ?>

  <body class="bg-warning-subtle">
     
<?php require_once 'header.php'; ?>

<?php require_once 'banniere.php'; ?>

<?php require_once 'index_contenu.php'; ?>

<?php require_once 'footer.php'; ?>


  </body>
</html>