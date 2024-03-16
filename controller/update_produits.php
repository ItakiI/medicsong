<?php
require_once dirname(__DIR__) . '/config/cdb.php';
require_once dirname(__DIR__) . '/function/produits.fn.php';

// on appel la fonction de modification du produit qui ce situe dans le dossier function produits.fn.php
updateProduits($bdd);

header('Location: /medicsong/views/admin.php');?>


