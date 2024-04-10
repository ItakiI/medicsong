<?php
// //Récupération des valeurs de chaque champ du formulaire de contact
// $userName = $_POST['name'];
// $userFirstname = $_POST['firstname'];
// $userPhonenumber = $_POST['phone'];
// $userEmail = $_POST['email'];
// $userSubject = $_POST['sujet'];
// $userMessage = $_POST['message'];

// //Initialisation des variables de validation
// $nameValid = false;
// $firstnameValid = false;
// $phonenumberValid = false;
// $emailValid = false;
// $subjectValid = false;
// $messageValid = false;

// //Expressions régulières (Regex) pour chaque champ du formulaire
// $userRegex = '/^[a-zA-Z-]{3,23}$/';
// $emailRegex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}$/';
// $phoneNumberRegex = '/^\+(?:\d{1,3})?\d{10}$/';
// $sujetRegex = '/^[^<>{}$]{3,200}$/';
// $messageRegex = '/^[^<>{}$]{24,}$/';

// //Fonction pour ajouter une classe en fonction de la validation
// function addClass($input, $regex, $value) {
//     if (!preg_match($regex, $value)) {
//         $input .= " is-invalid";
//     } else {
//         $input .= " is-valid";
//     }
//     return $input;
// }

// //Validation des champs du formulaire
// $userName = addClass($userName, $userRegex, $userName);
// $userFirstname = addClass($userFirstname, $userRegex, $userFirstname);
// $userPhonenumber = addClass($userPhonenumber, $phoneNumberRegex, $userPhonenumber);
// $userEmail = addClass($userEmail, $emailRegex, $userEmail);
// $userSubject = addClass($userSubject, $sujetRegex, $userSubject);
// $userMessage = addClass($userMessage, $messageRegex, $userMessage);

// //Vérification de la soumission du formulaire
// if ($nameValid && $firstnameValid && $phonenumberValid && $emailValid && $subjectValid && $messageValid) {
//     //Envoi de l'email
//     $to = "maxime.salins@gmail.com";
//     $subject = $userSubject;
//     $body = "Nom: $userName , Prénom: $userFirstname , Téléphone: $userPhonenumber , Email: $userEmail , Message: $userMessage";
//     $headers = "From: $userEmail";

//     if (mail($to, $subject, $body, $headers)) {
//         echo "<script>alert('Votre message a été envoyé avec succès.');</script>";
//     } else {
//         echo "<script>alert('Une erreur est survenue lors de l'envoi du message. Veuillez réessayer plus tard.');</script>";
//     }
// } else {
//     echo "<script>alert('Tous les champs ne sont pas remplis ou ne sont pas valides. Veuillez remplir correctement tous les champs du formulaire.');</script>";
// }

