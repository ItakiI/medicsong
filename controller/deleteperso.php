<?php

require_once __DIR__ . '/config/cdb.php';

// création de variable qui serons rappelé
$id = $_GET['id'];

$tableMere = 'DELETE FROM perso_has_spec WHERE perso_id = :id';
$tableMere = $bdd->prepare($tableMere);
$tableMere->bindValue(':id', $id);
$tableMere->execute();

$tablePersos = 'DELETE FROM perso WHERE id = :id';
$tablePerso = $bdd->prepare($tablePersos);
$tablePerso->bindValue(':id', $id);
$tablePerso->execute();

header('Location:' . __DIR__ . ' /admin.php');
