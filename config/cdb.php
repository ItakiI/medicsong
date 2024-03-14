<?php

//nous nous connectons à la base de données

try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=medicsong', 'root', 'Nico2205!');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout

    die('Erreur : ' . $e->getMessage());
}
// Si tout va bien, on peut continuer


// 'mysql:host=localhost;dbname=medicsong', 'root', 'Nico2205!';