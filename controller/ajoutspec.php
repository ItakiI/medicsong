<?php

require_once dirname(__DIR__) .  '/config/cdb.php';

function ajoutSpec($bdd) {

  $spec = $_POST ["spec"];
  
  $donnee2 = [
    $spec,  
  ];
  
  $sql2 = "INSERT INTO spec (`spec`) VALUES (?)";
  $stmt2= $bdd->prepare($sql2);
  $stmt2->execute($donnee2);
}

 header('Location: ../views/admin.php'); 

 ?>