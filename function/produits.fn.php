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


function updateProduits($bdd) {
    // Vérifier si l'ID est défini
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Vérifier chaque champ et initialiser les variables
        $prix = isset($_POST["prix"]) && !empty($_POST["prix"]) ? $_POST["prix"] : null;
        $vendu = isset($_POST["vendu"]) && !empty($_POST["vendu"]) ? $_POST["vendu"] : null;
        $stock = isset($_POST['stock']) && !empty($_POST['stock']) ? $_POST['stock'] : null;
        $titre = isset($_POST['titre']) && !empty($_POST['titre']) ? $_POST['titre'] : null;
        $titre1 = isset($_POST['titre1']) && !empty($_POST['titre1']) ? $_POST['titre1'] : null;
        $titre2 = isset($_POST['titre2']) && !empty($_POST['titre2']) ? $_POST['titre2'] : null;

        // Construire la requête SQL en fonction des champs reçus
        $sql = "UPDATE `produits` SET ";
        $updateFields = array();
        if ($prix !== null) {
            $updateFields[] = "`prix` = :prix";
        }
        if ($vendu !== null) {
            $updateFields[] = "`vendu` = :vendu";
        }
        if ($stock !== null) {
            $updateFields[] = "`stock` = :stock";
        }
        if ($titre !== null) {
            $updateFields[] = "`titre` = :titre";
        }
        if ($titre1 !== null) {
            $updateFields[] = "`titre_1` = :titre1";
        }
        if ($titre2 !== null) {
            $updateFields[] = "`titre_2` = :titre2";
        }
        // Vérifier si au moins un champ est modifié
        if (!empty($updateFields)) {
            $sql .= implode(", ", $updateFields);
            $sql .= " WHERE `id` = :id";

            // Préparer et exécuter la requête
            $stmt = $bdd->prepare($sql);
            if ($prix !== null) {
                $stmt->bindValue(':prix', $prix);
            }
            if ($vendu !== null) {
                $stmt->bindValue(':vendu', $vendu);
            }
            if ($stock !== null) {
                $stmt->bindValue(':stock', $stock);
            }
            if ($titre !== null) {
                $stmt->bindValue(':titre', $titre);
            }
            if ($titre1 !== null) {
                $stmt->bindValue(':titre1', $titre1);
            }
            if ($titre2 !== null) {
                $stmt->bindValue(':titre2', $titre2);
            }
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            
            // Afficher un message de succès ou de confirmation de mise à jour
            echo "Produit mis à jour avec succès.";
        } else {
            // Afficher un message si aucun champ n'est modifié
            echo "Aucune donnée à mettre à jour.";
        }
    } else {
        // Afficher un message d'erreur si l'ID n'est pas défini
        echo "ID du produit non fourni.";
    }
}

function getProduits ($bdd){
    // On récupère tout le contenu de la table produits
    $sqlQuery = 'SELECT * FROM produits';
    $recipesStatement1 = $bdd->prepare($sqlQuery);
    $recipesStatement1->execute();
    $produits = $recipesStatement1->fetchAll();
    return $produits;
}
 

?>