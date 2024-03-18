<?php

require_once dirname(__DIR__) . '\config\cdb.php';
require_once dirname(__DIR__) . '\function\perso.fn.php';

//on appel la fonction de suppression de l'utilisateur qui ce situe dans le dossier function perso.fn.php

deletePerso($bdd);

header('Location: ../views/admin.php');

?>