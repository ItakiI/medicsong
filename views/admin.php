<?php
//creation d'une page d'administration avec possibilté d'ajout, de modification et de suppression de docteur. 

// connexion a la base de donnée
require_once dirname(__DIR__) . '/config/cdb.php';
// redirection du tableau intermédiaire perso_has_spec
require_once dirname(__DIR__) . '/tableauinter.php';
// redirection des liens CSS & JS
require_once dirname(__DIR__) . '/components/head.php';
// redirection de la navbar + bannière
require_once dirname(__DIR__) . '/components/header.php';
require_once dirname(__DIR__) . '/components/ban_list_doc.php';

?>

<!-- présentation des médecins -->

<div id="present">
  <p class="presentation text-center">
  Bienvenue sur notre page dédiée à nos éminents guérisseurs de Medic'Song !<br>
  Explorez notre équipe de spécialistes en musique-thérapie, chacun expert dans son domaine, prêt à vous aider à atteindre un bien-être complet.<br>
  Découvrez comment nos médecins rockstars utilisent la puissance de la musique pour élever votre santé physique et émotionnelle.
  </p>
</div>

<!-- Boutons d'ajouts des Docteurs, des produits, des specialités -->
<div class="d-flex justify-content-around m-5">
  <a href="/medicsong/views/formperso.php" class="card-link btn btn-primary btn-lg">Ajouter un Médecin</a>
  <a href="/medicsong/views/formproduits.php" class="card-link btn btn-primary btn-lg">Ajouter un Produit</a>
  <a href="/medicsong/views/formspec.php" class="card-link btn btn-primary btn-lg">Ajouter une Specialité</a>
</div>

<!-- redirection des cartes docteur -->
<?php require_once 'card_docteur.php';?>
<!-- // redirection du footer -->
<?php require_once dirname(__DIR__) . '/components/footer.php';?>