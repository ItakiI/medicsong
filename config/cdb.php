<?php

//nous nous connectons à la base de données

try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=medicsong', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout

    die('Erreur : ' . $e->getMessage());
}
// Si tout va bien, on peut continuer



// Ajouter vos ID pour vous connectez en commentaire pour faire du copier coller pour changer lors des pulls
// Yoann = $bdd = new PDO('mysql:host=localhost;dbname=medicsong', 'yoann', 'Simplon2023!');
// Taki =
// Nico = $bdd = new PDO('mysql:host=localhost;dbname=medicsong', 'root', 'Nico2205!');
