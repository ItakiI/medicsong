<?php 
require_once dirname(__DIR__) . '/components/head.php'; 
require_once dirname(__DIR__) . '/components/header.php';
require_once dirname(__DIR__ ) . '/components/ban_contact.php';
?>

<div>
  <div class="afin">
    <h3>Afin de nous contacter merci de remplir le formulaire ci dessous :</h3>
  </div>

  <!-- formulaire si dessous -->
  <form class ="mt-5 mb-5" action="/ma-page-de-traitement" method="post">
    <ul id="form">
      <li>
        <label for="name">Nom :</label><br>
        <input type="text" id="name" name="user_name" placeholder="Votre nom">
      </li>
      <li>
        <label for="mail">E-mail:</label><br>
        <input type="email" id="mail" name="user_mail" placeholder="Votre E-mail...">
      </li>
      <li>
        <label for="sujet">Sujet:</label><br>
        <select name="sujet" id="sujet" required>
          <option value="" disabled selected hidden>Choissez le sujet de votre message</option>
          <option value="demande">Demande d'intervention</option>
          <option value="RDV">Rendez-vous</option>
          <option value="réclamation">Réclamation</option>
          <option value="autre">Autre...</option>
        </select>
      </li>
      <li>
        <label for="msg">Message:</label><br>
        <textarea id="msg" name="user_message" placeholder="Votre message..."></textarea>
      </li>
    </ul>
    <br>

    <button type="submit">Envoyer le message</button>

  </form>
</div>

<?php require_once dirname(__DIR__) . '/components/footer.php'; ?>