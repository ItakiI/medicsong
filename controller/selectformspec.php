<?php

// LISTE des options déroulante

require_once __DIR__ . '/controler/cdb.php';

// On récupère tout le contenu de la table spec

$sqlQuery = 'SELECT * FROM spec';
$recipesStatement1 = $bdd->prepare($sqlQuery);
$recipesStatement1->execute();
$recipes1 = $recipesStatement1->fetchAll();

foreach ($recipes1 as $spec) {
    echo '<option value="' . $spec['id'] . '"> ' . $spec['spec']. '</option>';

}

?>