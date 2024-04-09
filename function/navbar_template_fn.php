<?php

// navbar pour un simple visiteur
function navUsers() {
?>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-success p-0 border-black border-bottom">
            <div class="container-fluid d-flex justify-content-between bg-success">
                <div class=" d-flex align-items-center flex-wrap">
                    <a class="navbar-brand" href="/medicsong/index.html.php"><img src="/medicsong/assets/img/vinnylmedico.png" alt="MedicSong" width="80" height="80">
                    </a>
                    <a class="nav-title text-black text-decoration-none" href="/medicsong/index.html.php">
                        Medicsong
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end pe-5" id="navbarNavDropdown">
                    <ul class="navbar-nav fw-bold text-center my-3 d-flex justify-content-end align-items-center">
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/index.html.php">ACCUEIL</a>
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/views/nos_specialiste.php">NOS SPÉCIALISTES</a>
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/views/nosproduits_user.php">NOS PRODUITS</a>
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/views/contact.php">CONTACT</a>
                        </li>
                        <div class="nav-item mx-3 rounded-1 align-items-center">
                            <li class="nav-item mx-3 rounded-1">
                                <a class="nav-link active m-0 p-0 b-0 g-0" href="/medicsong/views/connexion.php" style="font-size: 13px;">CONNEXION</a>
                            </li>
                            <hr class="m-0 p-0 b-0 g-0">
                            <li class="nav-item mx-3 rounded-1">
                                <a class="nav-link active m-0 p-0 b-0 g-0 " href="/medicsong/views/inscription.php" style="font-size: 13px;">INSCRIPTION</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<?php
}

// navbar pour un visiteur connecté
function navUsersConnect() 
{

// Vérification si l'utilisateur est connecté et que le pseudo est disponible dans la session
if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
} else {
    // Gérez le cas où l'utilisateur n'est pas connecté ou le pseudo n'est pas disponible
    $pseudo = "Utilisateur";
}
?>    
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-success p-0 border-black border-bottom">
            <div class="container-fluid d-flex justify-content-between bg-success">
                <div class=" d-flex align-items-center flex-wrap">
                    <a class="navbar-brand" href="/medicsong/index.html.php"><img src="/medicsong/assets/img/vinnylmedico.png" alt="MedicSong" width="80" height="80">
                    </a>
                    <a class="nav-title text-black text-decoration-none" href="/medicsong/index.html.php">
                        Medicsong
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end pe-5" id="navbarNavDropdown">
                    <ul class="navbar-nav fw-bold text-center my-3 d-flex justify-content-end align-items-center">
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/index.html.php">ACCUEIL</a>
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/views/nos_specialiste.php">NOS SPÉCIALISTES</a>
                            </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/views/nosproduits_user.php">NOS PRODUITS</a>
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/views/contact.php">CONTACT</a>
                        </li>
                        <div class="nav-item mx-3 rounded-1 align-items-center">
                            <li class="nav-item mx-3 rounded-1">
                                <p class="mb-0" style="font-size: 8px;">WELCOME</p>
                                <p style="font-size: 13px;"><?php echo $pseudo ?></p>
                            </li>
                            <hr class="m-0 p-0 b-0 g-0">
                            <li class="nav-item mx-3 rounded-1">
                                <a class="nav-link active m-0 p-0 b-0 g-0 " href="/medicsong/controller/deco_controller.php" style="font-size: 13px;">DÉCONNEXION</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<?php
}

// navbar pour un administrateur connecté
function navAdminConnect() {

// Vérification si l'utilisateur est connecté et que le pseudo est disponible dans la session
if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
} else {
    // Gérez le cas où l'utilisateur n'est pas connecté ou le pseudo n'est pas disponible
    $pseudo = "Utilisateur";
}
?>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-success p-0 border-black border-bottom">
            <div class="container-fluid d-flex justify-content-between bg-success">
                <div class=" d-flex align-items-center flex-wrap">
                    <a class="navbar-brand" href="/medicsong/index.html.php"><img src="/medicsong/assets/img/vinnylmedico.png" alt="MedicSong" width="80" height="80">
                    </a>
                    <a class="nav-title text-black text-decoration-none" href="/medicsong/index.html.php">
                        Medicsong
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end pe-5" id="navbarNavDropdown">
                    <ul class="navbar-nav fw-bold text-center my-3 d-flex justify-content-end align-items-center">
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/index.html.php">ACCUEIL</a>
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/views/admin.php">NOS SPÉCIALISTES</a>
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/views/nosproduits.php">NOS PRODUITS</a>
                        </li>
                        <li class="nav-item mx-3 rounded-1">
                            <a class="nav-link active fs-6" href="/medicsong/views/contact.php">CONTACT</a>
                        </li>
                        <div class="nav-item mx-3 rounded-1 align-items-center">
                            <li class="nav-item mx-3 rounded-1">
                                <p class="mb-0" style="font-size: 8px;">WELCOME</p>
                                <p style="font-size: 13px;"><?php echo $pseudo ?></p>
                            </li>
                            <hr class="m-0 p-0 b-0 g-0">
                            <li class="nav-item mx-3 rounded-1">
                                <a class="nav-link active m-0 p-0 b-0 g-0 " href="/medicsong/controller/deco_controller.php" style="font-size: 13px;">DÉCONNEXION</a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php
}