<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $utilisateur = connexion($bdd, $email, $pass);
    
    if ($utilisateur) {
        $_SESSION['id'] = $utilisateur['id'];
        $_SESSION['role'] = $utilisateur['role'];
        $_SESSION['pseudo'] = $utilisateur['pseudo'];

        if ($_SESSION['role'] === 'admin') {
            header('Location: admin.php');
           
        } else {
            header('Location: ../index.html.php');
        }
        exit();
    } else {
        $erreur = "Email ou mot de passe incorrect.";
    }
}

if (isset($_SESSION['inscrit'])) {
    $message = $_SESSION['inscrit'];
    unset($_SESSION['inscrit']);
}
