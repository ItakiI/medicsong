<?php 
// require_once dirname(__DIR__) . '/config/cdb.php';
// require_once dirname(__DIR__) . '/components/head.php';
// require_once dirname(__DIR__) . '/components/header.php';

require_once __DIR__ . '/config/cdb.php';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/header.php';    

?>


<form class="mt-5 mb-5" action="update_produits.php?id=<?= $_GET['id']?>" method="post">
    <div>
        <label for="prix">Prix</label>
        <input type="number" step="0.01" min="0" name="prix" id="prix">
    </div>
    <br>
    <div>
        <label for="titre">Titre 1</label>
        <input type="text" name="titre" id="titre">
    </div>
    <br>
    <div>
        <label for="titre1">Titre 2</label>
        <input type="text" name="titre1" id="titre1">
    </div>
    <br>
    <div>
        <label for="titre2">Titre 3</label>
        <input type="text" name="titre2" id="titre2">
    </div>
    <br>
    <div>
        <label for="stock">Stock</label>
        <input type="number"  name="stock" id="stock">
    </div>
    <br>
    <div>
        <label for="vendu">Vendu</label>
        <input type="number"  name="vendu" id="vendu">
    </div>
    <br>
    <div>
        <button type="submit">Enregistrer les modifications</button>
    </div>
</form>



