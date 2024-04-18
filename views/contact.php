<?php
require_once dirname(__DIR__) . '\components\head.php';
require_once dirname(__DIR__) . '\components\header.php';
require_once dirname(__DIR__) . '\components\ban_contact.php';
?>

<div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 g-0">
  <div class="col">
    <div class="card p-3 m-3 b-3 bg-transparent border-0">
      <form class="form-control border border-3 border-success bg-transparent text-center" action="../send_email.php" method="post">
        <div class="m-4">
          <label class="form-label" for="name">Nom :</label><br>
          <div class="input-group mb-3">
            <input class="form-control" type="text" id="name" name="name" placeholder="Votre nom">
          </div>
        </div>
        <div class="m-4">
          <label class="" for="mail">E-mail :</label><br>
          <div class="input-group mb-3">
            <input class="form-control" type="email" id="mail" name="mail" placeholder="Votre E-mail...">
          </div>
        </div>
        <!-- <div class="m-4">
          <label class="form-label" for="sujet">Sujet :</label><br>
          <div class="input-group mb-3">
            <select class="form-label form-select-lg w-100"  id="sujet" required>
              <option value="" disabled selected hidden>Choissez le sujet de votre message</option>
              <option value="demande">Demande d'intervention</option>
              <option value="RDV">Rendez-vous</option>
              <option value="réclamation">Réclamation</option>
              <option value="autre">Autre...</option>
            </select>
          </div>
        </div> -->
        <div class="m-4">
          <label class="form-label" for="msg">Message :</label><br>
          <div class="input-group">
            <textarea class="form-control" type="text" id="msg" name="msg" placeholder="Votre message..."></textarea>
          </div>
        </div>
        <div class="m-4"> 
          <br>
          <button class="card-link btn btn-success d-grid gap-2 col-8 mx-auto" id="formId" type="submit" style="background-color: rgb(2, 128, 144);">Envoyer le message.</button>
      </form>
    </div>
  </div>
</div>

<div class="col align-self-center">
  <div class="card p-3 m-3 b-3 bg-transparent border-0 text-center">
    <h5 class="card-title">Ici et maintenant.</h5>
    <p class="card-text">Pour contacter notre centre de guérison, veuillez remplir le formulaire ci-contre.<br>
      Nous sommes présents dans le monde entier, prêts à vous fournir<br>
       des services de musique-thérapie de qualité.<br>
      Votre guérison commence ici, où que vous soyez dans le monde.</p>
    <img src="/medicsong/assets/img/360_F_50519091_cJKPrdvLlEnZLEAMgP6QvZUDKFzuOsaq.webp" class="img-fluid h-auto w-auto border border-black col-8" alt="map">
  </div>
</div>
</div>

<?php require_once dirname(__DIR__) . '\components\footer.php'; ?>