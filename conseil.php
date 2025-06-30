<?php $currentPage = 'conseil'; ?>
<!DOCTYPE html>
<html lang="en">
    <?php include('./include/header.php'); ?>
        <style>
            .gestes-langue-des-signes {
    padding: 60px 0;
    background-color: #f8f9fa;
    width: 100%;
}

.gestes-langue-des-signes .card {
    transition: transform 0.3s ease-in-out;
}

.gestes-langue-des-signes .card:hover {
    transform: translateY(-10px);
}

.gestes-langue-des-signes .card-img-top {
    height: 250px;
    object-fit: cover;
}

        </style>
    </head>

    <body>
       <?php include('./include/navbar.php'); ?>
        
        <!-- Page Header Start -->
        <div class="page-header page-conseil">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Conseil et Sensibilisation</h2>
                    </div>
                    <!-- <div class="col-12">
                        <a href="index.html">Accueil</a>
                        <a href="conseil.html">Conseil et Sensibilisation</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Conseil et Sensibilisation Start -->
        <div class="conseil">
            <div class="container">
                <div class="section-header text-center">
                    <p class="subtitle">Conseils pour sourds-muets et leurs entourages</p>
                    <h2>Comment se comporter et les bonnes pratiques</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card min1">
                            <img loading="lazy"  src="img_absa/img R1.jpg" class="card-img-top" alt="Conseil 1">
                            <div class="card-body">
                                <h5 class="card-title">Conseil 1</h5>
                                <p class="card-text">Utilisez des gestes simples et clairs pour communiquer. Assurez-vous d'avoir leur attention avant de parler.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card min1">
                            <img loading="lazy"  src="img/alphabet-en-langue-des-signes-1024x788.webp" class="card-img-top" alt="Conseil 3">
                            <div class="card-body">
                                <h5 class="card-title">Conseil 2</h5>
                                <p class="card-text">Apprenez quelques mots de base en langue des signes pour montrer votre soutien et faciliter la communication.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- <div class="section-header text-center mt-5">
                    <h2>Vidéos de sensibilisation</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card">
                            <iframe class="card-img-top" src="https://www.youtube.com/embed/example1" frameborder="0" allowfullscreen></iframe>
                            <div class="card-body">
                                <h5 class="card-title">Vidéo 1</h5>
                                <p class="card-text">Découvrez comment améliorer la communication avec les sourds-muets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="card">
                            <iframe class="card-img-top" src="https://www.youtube.com/embed/example2" frameborder="0" allowfullscreen></iframe>
                            <div class="card-body">
                                <h5 class="card-title">Vidéo 2</h5>
                                <p class="card-text">Apprenez les gestes de base en langue des signes.</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Conseil et Sensibilisation End -->
         <!-- Gestes de Base en Langue des Signes Start -->
<section class="gestes-langue-des-signes">
    <div class="container">
        <div class="section-header text-center">
            <h2>Gestes de Base en Langue des Signes</h2>
            <p>Apprenez les gestes fondamentaux pour communiquer en langue des signes.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img loading="lazy"  src="img/bonjour.jpeg" class="card-img-top" alt="Geste Bonjour">
                    <div class="card-body">
                        <h5 class="card-title">Bonjour</h5>
                        <p class="card-text">Pour dire "Bonjour", levez la main droite à hauteur de l'épaule et agitez-la légèrement.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img loading="lazy"  src="img/merci.jpeg" class="card-img-top" alt="Geste Merci">
                    <div class="card-body">
                        <h5 class="card-title">Merci</h5>
                        <p class="card-text">Pour dire "Merci", touchez vos lèvres avec les doigts de la main droite et avancez la main vers l'avant.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img loading="lazy"  src="img/stp.jpeg" class="card-img-top" alt="Geste S'il vous plaît">
                    <div class="card-body">
                        <h5 class="card-title">S'il vous plaît</h5>
                        <p class="card-text">Pour dire "S'il vous plaît", placez la paume de votre main droite contre votre poitrine et effectuez un mouvement circulaire.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img loading="lazy"  src="img/oui.jpeg" class="card-img-top" alt="Geste Oui">
                    <div class="card-body">
                        <h5 class="card-title">Oui</h5>
                        <p class="card-text">Pour dire "Oui", fermez votre main en un poing et effectuez un mouvement de haut en bas, comme si vous secouiez la tête pour dire "oui".</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img loading="lazy"  src="img/non.jpeg" class="card-img-top" alt="Geste Non">
                    <div class="card-body">
                        <h5 class="card-title">Non</h5>
                        <p class="card-text">Pour dire "Non", utilisez l'index et le majeur de votre main droite pour faire un geste de pince, puis secouez la main de gauche à droite.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img loading="lazy"  src="img/bye.jpeg" class="card-img-top" alt="Geste Au revoir">
                    <div class="card-body">
                        <h5 class="card-title">Au revoir</h5>
                        <p class="card-text">Pour dire "Au revoir", levez la main droite et agitez-la d'un côté à l'autre.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gestes de Base en Langue des Signes End -->

        
        <?php include('./include/footer.php'); ?>

        <script src="js/banderol.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
