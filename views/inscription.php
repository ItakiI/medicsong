<?php
// session_start();

require_once dirname(__DIR__) . '\config\cdb.php';
require_once dirname(__DIR__) . '\function\membre.fn.php';
require_once dirname(__DIR__) . '\controller\inscription_controller.php';

require_once dirname(__DIR__) . '\components\head.php';
require_once dirname(__DIR__) . '\components\header.php';
require_once dirname(__DIR__) . '\components\ban_inscription.php';

?>

 <!-- page d'inscription -->

 <div class="d-flex justify-content-evenly align-self-center">
    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
        <div class="col">
            <div class="m-5">
                <h1 class="presentation text-center fs-3 mt-5">Rejoignez Médic'Song.</h1>
                <p class="presentation text-center fs-6 mb-3">Prêt à découvrir les bienfaits de la musique pour votre bien-être et votre santé ?<br> 
                Inscrivez-vous dès maintenant à Médic'Song pour accéder à une expérience musicale unique et personnalisée. En créant un compte, <br> 
                vous pourrez explorer notre vaste bibliothèque musicale, découvrir des playlists thématiques conçues pour vous, <br> 
                et suivre votre progression dans l'utilisation de la musique comme outil de soin. <br> 
                Rejoignez notre communauté dès aujourd'hui et commencez votre voyage vers une meilleure santé grâce à la musique.</p>
                <div class="d-flex justify-content-around m-2 flex-wrap gap-3 ">
                    <a href="/medicsong/views/inscription.php" class="card-link btn btn-success btn-xl fw-bold hover-btn">Inscription</a>
                </div>
            </div>
        </div>

        <div class="col align-self-center mb-5">
            <div class="card bg-transparent border-0 align-items-center">
                <form class="form-control w-75 border border-3 border-success bg-transparent text-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method='post'>

                <?php if (!empty($message)) : ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>

                    <div class="row justify-content-center">
                    <label class="form-label" for="pseudo">Pseudo :</label>
                        <input class="form-control text-center w-75 border-1 border-black" type="text" name="pseudo" id="pseudo" placeholder="Entrez votre pseudo..">
                        <br>
                        <label class="form-label" for="email">Email :</label>
                        <input class="form-control text-center w-75 border-1 border-black" style="height: 2rem;" type="email" name="email" 
                        id="email" placeholder="Entrez votre mail...">
                        <br>
                        <label class="form-label" for="pass">Mot de passe :</label>
                        <input class="form-control text-center w-75 border-1 border-black" type="password" name="pass" id="pass" placeholder="Entrez un mot de passe..">
                        <br>
                        <label class="form-label" for="profil">Profil :</label>
                        <textarea class="form-control text-center w-75 border-1 border-black" type="text" name="profil" id="profil" placeholder="Entrez votre profile.."></textarea>
                        <br>
                    </div>
                    <button class="card-link btn btn-success d-grid gap-2 col-4 mx-auto m-3" type="submit">Valider</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
require_once dirname(__DIR__) . '\components\footer.php'; 
?>