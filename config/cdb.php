<?php

//nous nous connectons à la base de données

try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=medicsong', 'yoann', 'Simplon2023!');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout

    die('Erreur : ' . $e->getMessage());
}
// Si tout va bien, on peut continuer

