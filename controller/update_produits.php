<?php
require_once dirname(__DIR__) . '/config/cdb.php';
require_once dirname(__DIR__) . '/function/produits.fn.php';


updateProduits($bdd);

header('Location: /medicsong/card_produits.php');?>


