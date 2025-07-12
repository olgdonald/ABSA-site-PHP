<!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container ">
                <div class="row pd">
                    <div class="col-md-10">
                        <div class="top-bar-left">
                            <div class="text">
                                <p>Association Bouche des 
                                    Sourds d‘Afrique</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="top-bar-right">
                            
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href="https://web.facebook.com/www.Absaafrique.org"><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">
                  <div><img src="img/ABSA-logo.png" alt="Logo" id="navbar-logo"><span>ABSA</span></div>  
                </a>
                <button type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.php" class="nav-item nav-link <?php if ($currentPage == 'accueil') echo 'active text-warning'; ?>">Accueil</a>
                       <a href="single.php" class="nav-item nav-link <?php if ($currentPage == 'a-propos') echo 'active text-warning'; ?>">A Propos de nous</a>
                       <a href="service.php" class="nav-item nav-link <?php if ($currentPage == 'service') echo 'active text-warning'; ?>">Nos Actions</a>
                       <!-- <a href="event.php" class="nav-item nav-link <?php if ($currentPage == 'event') echo 'active text-warning'; ?>">Projets</a> -->
                       <a href="galerie.php" class="nav-item nav-link <?php if ($currentPage == 'galerie') echo 'active text-warning'; ?>">Galerie</a>


                        <div class="nav-item dropdown">
                            <a href="partenaire.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Plus</a>
                            <div class="dropdown-menu">
                                <a href="partenaire.php" class="dropdown-item">Nos Partenaires</a>
                                <a href="donate.php" class="dropdown-item">Faire un don</a>
                                <a href="volunteer.php" class="dropdown-item">Devenir volontaire</a>
                                <a href="conseil.php" class="dropdown-item">Conseils</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link <?php if ($currentPage == 'contact') echo 'active text-warning'; ?>">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->