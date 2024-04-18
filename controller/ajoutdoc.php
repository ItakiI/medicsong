<?php
//on rappelle la bdd
require_once dirname(__DIR__) . '/config/cdb.php';

//on récupère les infos saisies dans le formulaire
$nom = $_POST["nom"];
$echantillon = '/medicsong/assets/mp3/' . $_FILES["echantillon"]["name"];
$image = '/medicsong/assets/img/' . $_FILES["image"]["name"];
$description = $_POST['description'];
$signature = '/medicsong/assets/img/' . $_FILES["signature"]["name"];
$spec = $_POST['spec'];

try {

   $donnee = [
      $nom,
      $echantillon,
      $image,
      $description,
      $signature,

   ];
   
   $sql = "INSERT INTO perso (`name`, `echantillon`, `image`, `description`, `signature`) VALUES (?,?,?,?,?)";
   $stmt = $bdd->prepare($sql);
   $stmt->execute($donnee);
   
//    // $bdd->lastInsertId();
   
   
   $last = "INSERT INTO perso_has_spec (perso_id, spec_id) VALUES (?,?)";
   $stmt1 = $bdd->prepare($last);
   $stmt1->execute([$bdd->lastInsertId(), $spec]);
   
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    
    die('Erreur : ' . $e->getMessage());
}

header('Location: ../views/admin.php'); 

?>