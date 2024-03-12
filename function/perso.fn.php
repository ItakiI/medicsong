<?php

function addAllPerso($bdd){

    $sql = "SELECT perso.*, s.spec FROM `perso` INNER JOIN perso_has_spec ps ON ps.perso_id = perso.id JOIN spec s ON s.id = ps.spec_id;";
    $query = $bdd->query($sql);
    $stmt = $query->fetchAll(PDO::FETCH_ASSOC);
    return $stmt;
}

function addPersoWithSpec ($bdd,$spec){
    $sql = "SELECT perso.*, s.spec FROM `perso` INNER JOIN perso_has_spec ps ON ps.perso_id = perso.id JOIN spec s ON s.id = ps.spec_id WHERE s.spec = :spec";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(':spec', $spec);
    $stmt->execute();
    return $stmt;
}