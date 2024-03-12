<?php
//on rappelle la bdd
require_once 'cdb.php';



//on récupère les infos saisies dans le formulaire
$spec = $_POST ["spec"];


$donnee2 = [
  $spec,
  
];

$sql2 = "INSERT INTO spec (`spec`) VALUES (?)";
$stmt2= $bdd->prepare($sql2);
$stmt2->execute($donnee2);


header('Location: formperso.php');