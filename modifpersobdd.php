<?php

require_once 'cdb.php';

// ID de l'utilisateur à mettre à jour
$id = $_GET['id'];

// Nouvelles valeurs à mettre à jour
$echantillon = $_POST["echantillon"];
$image = $_POST["image"];
$description = $_POST["description"];


$sqlQuery = 'UPDATE perso SET echantillon = :echantillon , image = :image , description = :description WHERE id = :id';
$docteurStat = $bdd->prepare($sqlQuery);

$docteurStat->bindValue(':echantillon', $echantillon);
$docteurStat->bindValue(':image', $image);
$docteurStat->bindValue(':description', $description);
$docteurStat->bindValue(':id', $id); // Assurez-vous de lier l'ID en tant que entier

$docteurStat->execute();



header('Location: admin.php');




?>

