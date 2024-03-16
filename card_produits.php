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

<div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-6 g-0">

  <?php
  // Récupérer les produits
  $produits = getProduits($bdd);

  if ($produits) {
    foreach ($produits as $produit) {

      // affichage des produits
  ?>


      <div class="card m-2" style="..">
        <div class="row g-0">
          <div class="cols-lg-4">
            <img src="<?php echo $produit["image"] ?>" class="img-fluid border-bottom-0" alt="Photo de la potion">
          </div>
          <div class="cols-lg-8">
            <div class="card-body ">
              <h5 class="card-title"><?php echo $produit["nom"] ?></h5>
            </div>
            <div class="card-body ">
              <p>Prix : <?php echo $produit["prix"] ?><br>
              Stock : <?php echo $produit["stock"] ?><br>
              Vendu : <?php echo $produit["vendu"] ?><br>
              Titre : <?php echo $produit["titre"] ?><br>
              Titre : <?php echo $produit["titre_1"] ?><br>
              Titre : <?php echo $produit["titre_2"] ?></p>
            </div>
          </div>
          <div class="card-body d-flex justify-content-evenly">
            <a href="/medicsong/views/formmodifproduits.php?id=<?php echo $produit['id'] ?>" class="card-link btn btn-success">Modifier</a>
            <a href="/medicsong/controller/delete_produits.php?id=<?php echo $produit['id'] ?>" class="card-link btn btn-danger">Supprimer</a>
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

<?php require_once __DIR__ . '/components/footer.php'; ?>