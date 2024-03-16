<?php

require_once __DIR__ . '/config/cdb.php';

require_once __DIR__ . '/components/head.php';
    
require_once __DIR__ .'/components/header.php'; 

require_once __DIR__ . '/components/banniere.php';

?>

<!-- présentation du groupe -->
<div id="present">
  <p class="presentation text-center">
    Bienvenue chez Médic’Song, où la musique devient la médecine de l'âme.<br>
    Notre équipe de spécialistes est dévouée à aider chacun à retrouver l'équilibre émotionnel à travers une thérapie unique : la musique.<br>
    Nous croyons fermement que les mélodies bien choisies peuvent apaiser l'esprit, stimuler la motivation et offrir un soulagement aux maux de
    l'âme.
  </p>
</div>

<?php require_once 'index_contenu.php'; 

require_once __DIR__ . '/components/footer.php';
 
?>