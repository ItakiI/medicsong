<?php 

require_once __DIR__ . '/config/cdb.php';
require_once __DIR__ . '/function/produits.fn.php';
require_once __DIR__ . '/components/head.php';
require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/ban_produit.php';
// require_once dirname(__DIR__) . '/config/cdb.php';
// require_once dirname(__DIR__) . '/function/produits.fn.php';
// require_once dirname(__DIR__) . '/components/head.php';
// require_once dirname(__DIR__) . '/components/header.php';
// require_once dirname(__DIR__) . '/components/ban_produit.php';


?>
<div class="d-flex justify-content-evenly row row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 m-3 b-3 p-3 g-0">

<?php
// Récupérer les produits
$produits = getProduits($bdd);

if ($produits) {
  foreach ($produits as $produit) {

    // affichage des produits

    echo  '<div class="card text-center border border-black m-3 w-auto h-auto">
    <div class="align-item-center p-0 g-0 m-0">
      <img src="' . $produit["image"] . '" class="img-fluid p-0 g-0 m-0 border-bottom-0" alt="Photo de la possion">
    </div>
    <div class="card-body">
      <h5 class="card-title">' . $produit["nom"] . '</h5><br>
      <p class="card-text">Prix :<br>' . $produit["prix"] . '</p>
      <p class="card-text">Stock :<br>' . $produit["stock"] . '</p>
      <p class="card-text">Vendu :<br>' . $produit["vendu"] . '</p>
      <p class="card-text">Titre :<br>' . $produit["titre"] . '</p>
      <p class="card-text">Titre :<br>' . $produit["titre_1"] . '</p>
      <p class="card-text">Titre :<br>' . $produit["titre_2"] . '</p>
    </div>
    <div class="card-body">
      <a href="/medicsong/formmodifproduits.php?id=' . $produit['id'] . '" class="card-link btn btn-success">Modifier</a>
      <a href="/medicsong/delete_produits.php?id=' . $produit['id'] . '" class="card-link btn btn-danger">Supprimer</a>
    </div>
  </div>';
  }
} else {
  echo "Aucun produit trouvé."; // Message si aucun produit trouvé
}
?>

</div>

<?php require_once __DIR__ . '/components/footer.php'; ?>
