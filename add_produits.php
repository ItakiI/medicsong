<?php
require_once __DIR__ . '/config/cdb.php';
require_once __DIR__ . '/function/produits.fn.php';

addProduits($bdd);

header('Location: /medicsong/views/admin.php'); 

?>