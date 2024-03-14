<?php
// require_once dirname(__DIR__) . '/config/cdb.php';
// require_once dirname(__DIR__) . '/function/produits.fn.php';
require_once __DIR__ . '/config/cdb.php';
require_once __DIR__ . '/function/produits.fn.php';

updateProduits($bdd);

header('Location: /medicsong/views/admin.php');

?>


