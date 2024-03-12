<?php
//on rappelle la bdd
require_once 'cdb.php';

//on récupère les infos saisies dans le formulaire
$nom = $_POST["nom"];
$echantillon = $_POST["echantillon"];

$image = 'image/'. $_POST["image"];
// var_dump($_FILES["image"]);
// echo '<br>';
// var_dump($_FILES);
$description = $_POST['description'];
$signature = $_POST["signature"];

$spec = $_POST['spec'];
// var_dump($spec);
try {

   $donnee = [
      $nom,
      $echantillon,
      $image,
      $description,
      $signature,

   ];

   $img_name = uniqid() . '.' . (pathinfo($image['name'], PATHINFO_EXTENSION));
   // echo '<br>';
   // echo $img_name;
   
   $img_folder = __DIR__ . '/assets/img/';

   if (!is_dir($img_folder)) {
       mkdir($img_folder, 0755, true);
   }
   
   $file_path = $img_folder . $img_name;
   
   if (!file_exists($file_path)) {
       // Créer un fichier s'il n'existe pas
       $move_file = @move_uploaded_file($image['tmp_name'], $dir);
       $file_handle = fopen($file_path, 'w');
       fclose($file_handle);
       echo "Le fichier $file_path a été créé.";
   } else {
       echo "Le fichier $file_path existe déjà.";
   }


   // @mkdir( '/assets/img/', 0777);

   // $img_folder = __DIR__ . '/assets/img/';
   // $dir = $img_folder . $img_name;
   // $move_file = @move_uploaded_file($image['tmp_name'], $dir);

   // $sql = "INSERT INTO perso (`name`, `echantillon`, `image`, `description`, `signature`) VALUES (?,?,?,?,?)";
   // $stmt = $bdd->prepare($sql);
   // $stmt->execute($donnee);

   // $bdd->lastInsertId();

   // $last = "INSERT INTO perso_has_spec (perso_id, spec_id) VALUES (?,?)";
   // $stmt1 = $bdd->prepare($last);
   // $stmt1->execute([$bdd->lastInsertId(), $spec]);

} catch (Exception $e) {
   // En cas d'erreur, on affiche un message et on arrête tout

   die('Erreur : ' . $e->getMessage());
}

// header('Location: index.html.php');
