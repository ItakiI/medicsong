<?php
//creation d'une page user 

// connexion a la base de donnée
require_once dirname(__DIR__) . '\config\cdb.php';
// redirection du tableau intermédiaire perso_has_spec
require_once dirname(__DIR__) . '\tableauinter.php';
// redirection des liens CSS & JS
require_once dirname(__DIR__) . '\components\head.php';
// redirection de la navbar + bannière
require_once dirname(__DIR__) . '\components\header.php';
require_once dirname(__DIR__) . '\components\ban_list_doc.php';

?>

<!-- présentation des médecins -->

<div class="presentation text-center mt-5 mb-5">
  <h5 class="fs-4">Bienvenue sur notre page dédiée à nos éminents guérisseurs de Medic'Song !</h5>
  <p class="fs-5">
    Explorez notre équipe de spécialistes en musique-thérapie, chacun expert dans son domaine, prêt à vous aider à atteindre un bien-être complet.<br>
    Découvrez comment nos médecins rockstars utilisent la puissance de la musique pour élever votre santé physique et émotionnelle.
  </p>
</div>

<hr class="m-5 mb-0 mt-0 p-0 b-0 g-0">

<!-- redirection des cartes docteur -->
<?php require_once 'card_docteur_user.php'; ?>
<!-- // redirection du footer -->
<?php require_once dirname(__DIR__) . '\components\footer.php'; ?>