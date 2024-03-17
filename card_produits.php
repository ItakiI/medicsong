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

<div class="row gap-4 row-cols-2 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-5 w-100 text-center justify-content-center my-5">

  <?php
  // Récupérer les produits
  $produits = getProduits($bdd);

  if ($produits) {
    foreach ($produits as $produit) {

      // affichage des produits
  ?>
      <div class="card col pt-2">
        <img src="<?php echo $produit["image"] ?>" class="card-img-top" alt="..." />
        <div>
          <div class="card-body">
            <h5 class="card-title fw-bold"><?php echo $produit["nom"] ?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix : <span class="text-danger"><?php echo $produit["prix"] ?></span> €</li>
            <li class="list-group-item">Stock : <span class="text-danger"><?php echo $produit["stock"] ?></span></li>
            <li class="list-group-item">Vendu : <span class="text-danger"><?php echo $produit["vendu"] ?></span></li>
            <li class="list-group-item">Titre : <span class="text-danger"><?php echo $produit["titre"] ?></span></li>
            <li class="list-group-item">Titre : <span class="text-danger"><?php echo $produit["titre_1"] ?></li>
            <li class="list-group-item">Titre : <span class="text-danger"><?php echo $produit["titre_2"] ?></li>
          </ul>
        </div>
        <div class="card-body d-flex flex-column justify-content-end">

          <a href="/medicsong/views/formmodifproduits.php?id=<?php echo $produit['id'] ?>" class=" btn btn-success my-2 w-100">Modifier</a>

          <a href="/medicsong/controller/delete_produits.php?id=<?php echo $produit['id'] ?>" class=" btn btn-danger my-2 w-100">Supprimer</a>
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