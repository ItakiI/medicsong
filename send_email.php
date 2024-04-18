<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     $email = $_POST['mail']; // Changer 'email' en 'mail' pour correspondre à votre formulaire
//     $message = $_POST['msg']; // Changer 'message' en 'msg' pour correspondre à votre formulaire

//     // Adresse e-mail où vous souhaitez recevoir les messages
//     $to = "scellier.yoann@gmail.com";

//     // Sujet de l'e-mail
//     $subject = "Nouveau message de formulaire de contact";

//     // Contenu de l'e-mail
//     $body = "Nom: $name\n";
//     $body .= "E-mail: $email\n";
//     $body .= "Message:\n$message";

//     // Envoi de l'e-mail
//     if (mail($to, $subject, $body)) {
//         echo "Votre message a été envoyé avec succès.";
//     } else {
//         echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
//     }
// }






// require __DIR__ . "/vendor/autoload.php";

// use Postmark\PostmarkClient;
// use Postmark\Models\PostmarkAttachment;
// use Postmark\Models\PostmarkException;

// $name = $_POST["name"];
// $email = $_POST["mail"];
// $body = $_POST["body"];

// $file_path = $_FILES["file"]["tmp_name"];
// $file_name = $_FILES["file"]["name"];
// $file_type = mime_content_type($file_path);

// if ( ! is_uploaded_file($file_path)) {

//     throw new UnexpectedValueException("Invalid file");

// }

// try {

//     $client = new PostmarkClient("postmark API key here");

//     $attachment = PostmarkAttachment::fromFile($file_path,
//                                                $file_name,
//                                                $file_type);

//     $result = $client->sendEmail(
//         from: "Name <example@example.com>",
//         to: "$name <$email>",
//         htmlBody: $body,
//         textBody: strip_tags($body),
//         attachments: [$attachment]
//     );

//     echo "Message sent.";

// } catch (PostmarkException $e) {

//     echo $e->message;

// } catch (Exception $e) {

//     echo $e->getMessage();

// }