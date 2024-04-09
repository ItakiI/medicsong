<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $profil = $_POST['profil'];


    $result  = inscription($bdd, $pseudo, $email, $pass, $profil);

    if ($result['success']) {
        $_SESSION["inscrit"] = $result['message'];
        header('Location: connexion.php');
        exit();
    } else {
        $message = $result['message'];
    }
}