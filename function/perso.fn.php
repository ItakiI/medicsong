<?php

function addAllPerso($bdd){

    $sql = "SELECT perso.*, s.spec FROM `perso` INNER JOIN perso_has_spec ps ON ps.perso_id = perso.id JOIN spec s ON s.id = ps.spec_id;";
    $query = $bdd->query($sql);
    $stmt = $query->fetchAll(PDO::FETCH_ASSOC);
    return $stmt;
}

function addPersoWithSpec ($bdd,$spec){
    $sql = "SELECT perso.*, s.spec FROM `perso` INNER JOIN perso_has_spec ps ON ps.perso_id = perso.id JOIN spec s ON s.id = ps.spec_id WHERE s.spec = :spec";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':spec', $spec);
    $stmt->execute();
    return $stmt;
}

function modifPerso($bdd){
    // ID de l'utilisateur à mettre à jour
$id = $_GET['id'];

// Nouvelles valeurs à mettre à jour
$echantillon = '/medicsong/assets/mp3/' . $_FILES["echantillon"]["name"];
$image = '/medicsong/assets/img/' . $_FILES["image"]["name"];
$description = $_POST["description"];


$sqlQuery = 'UPDATE perso SET `echantillon` = :echantillon , `image` = :image , `description` = :description WHERE id = :id';
$docteurStat = $bdd->prepare($sqlQuery);

$docteurStat->bindValue(':echantillon', $echantillon);
$docteurStat->bindValue(':image', $image);
$docteurStat->bindValue(':description', $description);
$docteurStat->bindValue(':id', $id); // Assurez-vous de lier l'ID en tant que entier

$docteurStat->execute();
}

function deletePerso($bdd){
    $id = $_GET['id'];

$tableMere = 'DELETE FROM perso_has_spec WHERE perso_id = :id';
$tableMere = $bdd->prepare($tableMere);
$tableMere->bindValue(':id', $id);
$tableMere->execute();

$tablePersos = 'DELETE FROM perso WHERE id = :id';
$tablePerso = $bdd->prepare($tablePersos);
$tablePerso->bindValue(':id', $id);
$tablePerso->execute();
}