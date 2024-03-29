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
  <div class="card border border-black bg-info-subtle mb-3 m-3" style="max-height: 560px; width: auto">
    <div class="row g-0">
      <div class="col-md-7 d-flex align-self-center">
        <img src="<?php echo $produit["image"] ?>" class=" img-fluid rounded-start h-100 w-100 m-3 border-bottom-0 border border-black" alt="">
      </div>
      <div class="col-md-5 align-self-center">
        <div class="card-body">
          <h5 class="card-title text-center fs-6"><?php echo $produit["nom"] ?></h5>
          <p class="fs-6">Prix : <?php echo $produit["prix"] ?>€<br>
          Stock : <?php echo $produit["stock"] ?><br>
          Vendu : <?php echo $produit["vendu"] ?><br> 
          Titre : <br><?php echo $produit["titre"] ?><br>
          Titre : <br><?php echo $produit["titre_1"] ?><br>
          Titre : <br><?php echo $produit["titre_2"] ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card-title d-flex justify-content-evenly mb-3">
    <a href="/medicsong/views/formmodifproduits.php?id=<?php echo $produit['id'] ?>" class="card-link border border-black btn btn-success d-grid gap-3 col-4 mx-auto">Modifier</a>
    <a href="/medicsong/controller/delete_produits.php?id=<?php echo $produit['id'] ?>" class="card-link border border-black btn btn-danger d-grid gap-3 col-4 mx-auto">Supprimer</a>
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