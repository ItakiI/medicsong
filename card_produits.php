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

<div class="d-flex justify-content-evenly row row-cols-sm-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 g-0">

  <?php
  // Récupérer les produits
  $produits = getProduits($bdd);

  if ($produits) {
    foreach ($produits as $produit) {

      // affichage des produits
  ?>

      <div>
        <div class="card mb-3 m-3" style="max-height: 560px; width: auto">
          <div class="row g-0">
            <div class="col-md-5 d-flex align-self-center">
              <img src="<?php echo $produit["image"] ?>" class=" img-fluid rounded-start h-100 w-100 m-3 border-bottom-0 border border-black" alt="">
            </div>
            <div class="col-md-7">
              <div class="card-body m-0 mb-0 b-0 bb-0 p-0 pb-0 g-0 gb-0">
                <h5 class="card-title text-center"><?php echo $produit["nom"] ?></h5>
                <p>Prix : <?php echo $produit["prix"] ?><br>
                  Stock : <?php echo $produit["stock"] ?><br>
                  Vendu : <?php echo $produit["vendu"] ?><br>
                  Titre : <?php echo $produit["titre"] ?><br>
                  Titre : <?php echo $produit["titre_1"] ?><br>
                  Titre : <?php echo $produit["titre_2"] ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body d-flex justify-content-evenly mb-3">
          <a href="/medicsong/views/formmodifproduits.php?id=<?php echo $produit['id'] ?>" class="card-link btn btn-success">Modifier</a>
          <a href="/medicsong/controller/delete_produits.php?id=<?php echo $produit['id'] ?>" class="card-link btn btn-danger">Supprimer</a>
        </div>
      </div>
  <?php

    }
  } else {
    echo "Aucun produit trouvé."; // Message si aucun produit trouvé
  }

  ?>

</div>





<?php require_once __DIR__ . '/components/footer.php'; ?>