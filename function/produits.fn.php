<?php 

function addProduits ($bdd){

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
    
 }


 function deleteProduits ($bdd){
    $id = $_GET['id'];
    $sql = "DELETE FROM `produits` WHERE `id` = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
 }


function updateProduits ($bdd){
    $prix = $_POST["prix"];
    $vendu = $_POST["vendu"];
    $stock = $_POST['stock'];
    $titre = $_POST['titre'];
    $titre1 = $_POST['titre1'];
    $titre2 = $_POST['titre2'];
    $id = $_GET['id'];

    $sql = "UPDATE `produits` SET `prix` = :prix, `vendu` = :vendu, `stock` = :stock, `titre` = :titre, `titre_1` = :titre1, `titre_2` = :titre2 WHERE `id` = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':prix', $prix);
    $stmt->bindValue(':vendu', $vendu);
    $stmt->bindValue(':stock', $stock);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':titre', $titre);
    $stmt->bindValue(':titre1', $titre1);
    $stmt->bindValue(':titre2', $titre2);
    $stmt->execute();
    
}
 

?>