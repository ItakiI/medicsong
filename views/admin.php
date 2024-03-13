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
require_once dirname(__DIR__) . '/components/ban_list_doc.php';?>

<div class="container">
<a href="/medicsong/" class="card-link btn btn-success btn-lg">Ajouter un médecin</a>
<a href="/medicsong/" class="card-link btn btn-success btn-lg">Ajouter une specialité</a>
</div>

<?php require_once 'admin_presentation.php';

  // affichage des docteurs
require_once 'card_docteur.php'; 

// redirection du footer
require_once dirname(__DIR__) . '/components/footer.php';

?>