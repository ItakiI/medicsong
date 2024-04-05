<?php
require_once dirname(__DIR__) . '\components\head.php';
require_once dirname(__DIR__) . '\components\header.php';
require_once dirname(__DIR__) . '\components\ban_connexion.php';
?>

 <!-- page de connexion -->

<div class="d-flex justify-content-evenly align-self-center">
    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
        <div class="col">
            <div class="m-5">
            <h1 class="presentation text-center fs-3">Connexion à Médic'Song.</h1>
            <p class="presentation text-center fs-6">Bienvenue sur Médic'Song !<br>
            Pour accéder à votre compte, veuillez saisir vos identifiants ci-dessous.<br>
            Si vous n'avez pas encore de compte, vous pouvez vous inscrire en cliquant sur le lien "Inscription" ci-dessous.<br>
            Une fois connecté, vous pourrez profiter de toutes les fonctionnalités de Médic'Song, notamment la gestion de votre <br>
            bibliothèque musicale personnalisée et l'accès à des playlists spécialement conçues pour votre bien-être et votre santé.</p>
            <div class="d-flex justify-content-around m-2 flex-wrap gap-3 ">
                <a href="/medicsong/views/inscription.php" class="card-link btn btn-success btn-xl fw-bold hover-btn">Inscription</a>
            </div>
        </div>
    </div>

        <div class="col align-self-center mb-5">
            <div class="card bg-transparent border-0 align-items-center">
                <form class="form-control w-75 border border-3 border-success bg-transparent text-center" action="" enctype="multipart/form-data" method='post'>
                    <input type="text" name="id" value="" hidden>
                    <div class="row justify-content-center">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control text-center w-75 border-1 border-black" style="height: 2rem;" type="mail" name="email" id="email" placeholder="Entrez votre mail...">
                        <br>
                        <label class="form-label" for="pass">Password</label>
                        <input class="form-control text-center w-75 border-1 border-black" type="password" name="pass" id="pass" placeholder="Entrez un password..">
                        <br>
                    </div>
                    <button class="card-link btn btn-success d-grid gap-2 col-4 mx-auto m-3" type="submit">Connexion</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
require_once dirname(__DIR__) . '\components\footer.php'; 
?>