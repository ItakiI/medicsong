<?php
require_once dirname(__DIR__) . '/config/cdb.php';
require_once dirname(__DIR__) . '/function/produits.fn.php';

deleteProduits($bdd);

header('Location: /medicsong/views/nosproduits.php');
