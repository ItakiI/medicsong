<?php

require_once __DIR__ . '/config/cdb.php';

function ajoutSpec($bdd) {

  $spec = $_POST ["spec"];
  
  $donnee2 = [
    $spec,  
  ];
  
  $sql2 = "INSERT INTO spec (`spec`) VALUES (?)";
  $stmt2= $bdd->prepare($sql2);
  $stmt2->execute($donnee2);
}

 header('Location:' . __DIR__ . '/admin.php'); 

 ?>