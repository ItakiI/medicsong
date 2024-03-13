<?php

require_once dirname(__DIR__) . '/config/cdb.php';

// ID de l'utilisateur à mettre à jour
$id = $_GET['id'];

// Nouvelles valeurs à mettre à jour
$echantillon = '/medicsong/assets/mp3/' . $_POST["echantillon"];
$image = '/medicsong/assets/img/' . $_FILES["image"]["name"];
$description = $_POST["description"];


$sqlQuery = 'UPDATE perso SET echantillon = :echantillon , image = :image , description = :description WHERE id = :id';
$docteurStat = $bdd->prepare($sqlQuery);

$docteurStat->bindValue(':echantillon', $echantillon);
$docteurStat->bindValue(':image', $image);
$docteurStat->bindValue(':description', $description);
$docteurStat->bindValue(':id', $id); // Assurez-vous de lier l'ID en tant que entier

$docteurStat->execute();


header('Location: ../views/admin.php');

?>