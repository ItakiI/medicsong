<?php

// require_once __DIR__ . '/config/cdb.php';
// require_once __DIR__ . '/function/produits.fn.php';
// require_once __DIR__ . '/components/head.php';
// require_once __DIR__ . '/components/header.php';
// require_once __DIR__ . '/components/ban_produit.php';
require_once dirname(__DIR__) . '\config\cdb.php';
require_once dirname(__DIR__) . '\function\produits.fn.php';
require_once dirname(__DIR__) . '\components\head.php';
require_once dirname(__DIR__) . '\components\header.php';
require_once dirname(__DIR__) . '\components\ban_produit.php';

?>

<div class="row gap-4 row-cols-2 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-5 w-100 text-center justify-content-center my-5">

  <?php
  // Récupérer les produits
  $produits = getProduits($bdd);

  if ($produits) {
    foreach ($produits as $produit) {

      // affichage des docteurs 
  ?>
      <div class="card mb-3 shadow px-0 rounded" style="max-width: 540px;">
        <div class="row g-0 justify-content-center shadow h-100 rounded">
          <div class=" p-3 col-md-5 d-flex flex-column justify-content-center bg-dark-subtle shadow rounded-start">
            <img src="<?php echo $produit["image"] ?>" class="img-fluid shadow rounded-start" alt="...">
            <h5 class="card-title fs-5 text-center mt-3"><?php echo $produit["nom"] ?></h5>
          </div>
          <div class="col-md-7 bg-dark-subtle rounded-end">
            <div class="card-body shadow h-100 rounded-end ">

              <p class="card-text">Prix : <span class="text-danger"><?php echo $produit["prix"] ?></span> €</span>

              <p class="card-text">Stock : <span class="text-danger"><?php echo $produit["stock"] ?> </span>

              <p class="card-text">Vendu : <span class="text-danger"><?php echo $produit["vendu"] ?></span>

              <p class="card-text">Titre : <span class="text-danger"><?php echo $produit["titre"] ?></span>

              <p class="card-text">Titre : <span class="text-danger"><?php echo $produit["titre_1"] ?></span>
              <p class="card-text">Titre : <span class="text-danger"><?php echo $produit["titre_2"] ?></span>

            </div>
          </div>
        </div>
      </div>
  <?php

    }
  } else {
    echo "Aucun produit trouvé."; // Message si aucun produit trouvé
  }

  ?>

</div>

<?php require_once dirname(__DIR__) . '\components\footer.php'; ?>

