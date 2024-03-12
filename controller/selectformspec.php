<?php

// LISTE des options déroulante

require_once dirname(__DIR__) . '/config/cdb.php';

// On récupère tout le contenu de la table spec
// function getAllSpec(){};
$sqlQuery = 'SELECT * FROM spec';
$recipesStatement1 = $bdd->prepare($sqlQuery);
$recipesStatement1->execute();
$recipes1 = $recipesStatement1->fetchAll();

foreach ($recipes1 as $spec) {
    echo '<option value="' . $spec['id'] . '"> ' . $spec['spec']. '</option>';

}

?>