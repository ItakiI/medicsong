<?php

require_once __DIR__ . '/config/cdb.php';

require_once __DIR__ . '/components/head.php';

require_once __DIR__ . '/components/header.php';

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
<div class="cols d-flex justify-content-evenly align-item-center p-5 g-0">
    <div class="card text-center border-0 bg-transparent mb-3" style="max-width: 100%;">
        <div class="row d-flex justify-content-evenly align-item-center g-0">
            <div class="col-lg-5 b-3 m-3 d-flex justify-content-evenly align-items-center border-start-0">
                <img src="assets\img\logo_medecin.gif" class="img-fluid g-0 w-auto h-auto rounded-start border-bottom-0">
            </div>
            <div class="col-lg-6 d-flex justify-content-evenly align-item-center align-self-center">
                <div class="col-md-7">
                    <div class="card-body">
                        <h5>La Dream Team de la Santé par la Musique</h5>
                        <p>Découvrez la crème de la crème des guérisseurs modernes au sein de Médic'Song !<br>
                            Notre équipe diversifiée de médecins rockstars est là pour vous offrir une guérison complète et sans compromis.<br>
                            Des spécialistes renommés dans leurs domaines respectifs, chacun apportant son expertise unique pour vous aider à surmonter les défis
                            de la santé physique et mentale. Cliquez sur le lien pour en savoir plus sur chaque membre de notre équipe
                            et découvrez comment la musique peut transformer votre vie.</p>
                    </div>
                    <div class="">
                        <a href="/medicsong/views/admin.php" class="card-link btn btn-success d-grid gap-2 col-8 mx-auto hover-btn">Plus d'inforations.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__ . '/components/footer.php'; ?>