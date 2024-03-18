<?php

function addAllPerso($bdd){

    $sql = "SELECT perso.*, s.spec FROM `perso` 
    INNER JOIN perso_has_spec ps ON ps.perso_id = perso.id
    JOIN spec s ON s.id = ps.spec_id;";
    $query = $bdd->query($sql);
    $stmt = $query->fetchAll(PDO::FETCH_ASSOC);
    return $stmt;
}

function addPersoWithSpec ($bdd,$spec){
    $sql = "SELECT perso.*, s.spec FROM `perso`
    INNER JOIN perso_has_spec ps ON ps.perso_id = perso.id 
    JOIN spec s ON s.id = ps.spec_id WHERE s.spec = :spec";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':spec', $spec);
    $stmt->execute();
    return $stmt;
}

    function updatePerso($bdd) {
        // Vérifier si l'ID est défini
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
    
            // Vérifier chaque champ et initialiser les variables
            // $description = isset($_POST["description"]) ? $_POST["description"] : null;
            $description = isset($_POST["description"]) && !empty($_POST["description"]) ? $_POST["description"] : null;
            $image = null;
            $echantillon = null;
    
            // Vérifier si le fichier a été téléchargé avec succès
            if (isset($_FILES["echantillon"]) && $_FILES["echantillon"]["error"] === UPLOAD_ERR_OK) {
                $echantillon = '/medicsong/assets/mp3/' . $_FILES["echantillon"]["name"];
            }
            if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
                $image = '/medicsong/assets/img/' . $_FILES["image"]["name"];
            }
            
            // Construire la requête SQL en fonction des champs reçus
            $sql = "UPDATE `perso` SET ";
            $updateDoc = array();
            if ($description !== null) {
                $updateDoc[] = "`description` = :description";
            }
            if ($image !== null) {
                $updateDoc[] = "`image` = :image";
            }
            if ($echantillon !== null) {
                $updateDoc[] = "`echantillon` = :echantillon";
            }
            
            // Vérifier si au moins un champ est modifié
            if (!empty($updateDoc)) {
                $sql .= implode(", ", $updateDoc);
                $sql .= " WHERE `id` = :id";
    
                // Préparer et exécuter la requête
                $stmt = $bdd->prepare($sql);
                if ($description !== null) {
                    $stmt->bindValue(':description', $description);
                }
                if ($image !== null) {
                    $stmt->bindValue(':image', $image);
                }
                if ($echantillon !== null) {
                    $stmt->bindValue(':echantillon', $echantillon);
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

function deletePerso($bdd){
    $id = $_GET['id'];

$tableMere = 'DELETE FROM perso_has_spec WHERE perso_id = :id';
$tableMere = $bdd->prepare($tableMere);
$tableMere->bindValue(':id', $id);
$tableMere->execute();

$tablePersos = 'DELETE FROM perso WHERE id = :id';
$tablePerso = $bdd->prepare($tablePersos);
$tablePerso->bindValue(':id', $id);
$tablePerso->execute();
}