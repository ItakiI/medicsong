<?php
require_once __DIR__ . '/config/cdb.php';



// on récupère les infos saisies dans le formulaire formproduits.php

$nom = $_POST["nom"];
$effet = $_POST["effet"];
$prix = $_POST["prix"];
$titre = $_POST['titre'];
$image = '/medicsong/assets/img/' . $_FILES["image"]["name"];
$vendu = $_POST["vendu"];
$stock = $_POST['stock'];
$titre1 = $_POST['titre1'];
$titre2 = $_POST['titre2'];


try {

   $donnee3 = [
      $nom,
      $effet,
      $prix,
      $titre,
      $image,
      $vendu,
      $stock,
      $titre1,
      $titre2,

   ];
   

$sql = "INSERT INTO produits (`nom`, `effet`, `prix`, `titre`, `image`, `vendu`, `stock`, `titre_1`, `titre_2`) VALUES (?,?,?,?,?,?,?,?,?)";
$stmt = $bdd->prepare($sql);
$stmt->execute($donnee3);
   
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    
    die('Erreur : ' . $e->getMessage());
}

header('Location: /medicsong/views/admin.php'); 

?>