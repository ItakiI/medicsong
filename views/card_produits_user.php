<?php

require_once dirname(__DIR__) . '/config/cdb.php';
require_once dirname(__DIR__) . '/function/produits.fn.php';
require_once dirname(__DIR__) . '/components/head.php';
require_once dirname(__DIR__) . '/components/header.php';
require_once dirname(__DIR__) . '/components/ban_produit.php';

?>

<div class="row gap-4 row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xxl-5 text-center justify-content-center g-0">

  <?php
  // Récupérer les produits
  $produits = getProduits($bdd);

  if ($produits) {
    foreach ($produits as $produit) {

      // affichage des docteurs 
  ?>
      <div class="card m-4 shadow px-0 rounded bg-body-secondary" style="max-width: 540px;">
        <div class="row g-0 justify-content-center shadow h-100 bg-body-secondary rounded">

          <div class=" p-0 w-50 col-md-5 d-flex flex-column justify-content-center bg-body-secondary rounded-start">
            <img src="<?php echo $produit["image"] ?>" class="img-fluid w-100 rounded-start" alt="...">
            <h5 class="card-title  fs-5 text-center"><?php echo $produit["nom"] ?></h5>
          </div>

          <div class="col-md-6 bg-body-secondary rounded-end align-self-center">
            <div class="card-body rounded-end">

              <p class="card-text fs-6 m-0 p-0 b-0">Prix : <span class="text-danger"><?php echo $produit["prix"] ?></span> €</span>
              <p class="card-text fs-6 m-0 p-0 b-0">Stock : <span class="text-danger"><?php echo $produit["stock"] ?> </span>
              <p class="card-text fs-6 m-0 p-0 b-0">Vendu : <span class="text-danger"><?php echo $produit["vendu"] ?></span>
              <p class="card-text fs-6 m-0 p-0 b-0">Titre : <span class="text-danger"><?php echo $produit["titre"] ?></span>
              <p class="card-text fs-6 m-0 p-0 b-0">Titre : <span class="text-danger"><?php echo $produit["titre_1"] ?></span>
              <p class="card-text fs-6 m-0 p-0 b-0">Titre : <span class="text-danger"><?php echo $produit["titre_2"] ?></span>

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

<?php require_once dirname(__DIR__) . '/components/footer.php'; ?>