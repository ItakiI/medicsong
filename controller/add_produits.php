<?php
require_once dirname(__DIR__) . '\config\cdb.php';
require_once dirname(__DIR__) . '\function\produits.fn.php';

addProduits($bdd);
 
header('Location: /medicsong/views/admin.php'); 

?>