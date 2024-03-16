<?php 
require_once dirname(__DIR__) . '/components/head.php';
require_once dirname(__DIR__) . '/components/header.php';
require_once dirname(__DIR__) . '/components/ban_produit.php';
?>

<div id="carouselExampleControlsNoTouching" class="carousel slide w-25 m-25 container mt-5 mb-5" data-bs-touch="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/medicsong/assets/img/pochette bob 1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/medicsong/assets/img/pochette eminem 2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/medicsong/assets/img/pochette john 1.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php require_once dirname(__DIR__) . '/card_produits.php'; ?>
<?php require_once dirname(__DIR__) . '/components/footer.php'; ?>