
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ABSA</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/ABSA-logo.png" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/galerie.css">
        <style>
            

        </style>
    </head>

    <body>
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
                                <a href=""><i class="fab fa-facebook-f"></i></a>
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
                <a href="index.html" class="navbar-brand">
                  <div><img src="img/ABSA-logo.png" alt="Logo" id="navbar-logo"><span>ABSA</span></div>  
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="index.html" class="nav-item nav-link">Accueil</a>
                        <a href="single.html" class="nav-item nav-link">A Propos</a>
                        <a href="service.html" class="nav-item nav-link"> Nos Actions</a>
                        <a href="event.html" class="nav-item nav-link active">Projets </a>
                        <a href="conseil.html" class="nav-item nav-link">Conseils</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Plus</a>
                            <div class="dropdown-menu">
                                <a href="partenaire.html" class="dropdown-item">Nos Partenaires</a>
                                <a href="donate.html" class="dropdown-item">Faire un don</a>
                                <a href="volunteer.html" class="dropdown-item">Devenir volontaire</a>
                                <a href="blog.html" class="dropdown-item">Blog</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header page-event">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Nos Projets</h2>
                    </div>
                    <!-- <div class="col-12">
                        <a href="index.html">Accueil</a>
                        <a href="">Projets</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Galerie Start -->
<section id="galerie">
  <div class="container">

    <!-- En-tête de section -->
    <div class="section-header">
      <p>Galerie Média</p>
      <h2>
        Nos actions en 
        <span class="text-primary-gradient">images</span> 
        et en 
        <span class="text-accent-gradient">vidéos</span>
      </h2>
      <p class="lead">
        Découvrez l'impact de notre travail à travers notre collection de moments précieux et d'histoires inspirantes.
      </p>
    </div>

    <!-- Filtres -->
    <div class="text-center">
      <div class="filter-container">
        <button class="filter-btn active" data-filter="*">
          <i class="fas fa-th-large"></i> Tout
        </button>
        <button class="filter-btn" data-filter=".photo">
          <i class="fas fa-camera"></i> Photos
        </button>
        <button class="filter-btn" data-filter=".video">
          <i class="fas fa-play"></i> Vidéos
        </button>
      </div>
    </div>

    <!-- Grille -->
    <div class="row grid" id="gallery">

      <!-- Exemple : Vidéo -->
      <div class="col-lg-4 col-md-6 mb-4 grid-item video">
        <div class="media-item video">
          <div class="overlay">
            <div class="icon-circle">
              <i class="fas fa-play"></i>
            </div>
          </div>
          <img 
            src="img_absa/video-thumbnail.jpg" 
            alt="Vidéo de campagne" 
            data-toggle="modal" 
            data-target="#mediaModal" 
            data-src="https://www.youtube.com/embed/ScMzIvxBSi4" 
            data-type="video"
          >
          <span class="badge-type">Vidéo</span>
          <div class="content">
            <h5>Vidéo de campagne</h5>
            <p>Découvrez notre dernière campagne de sensibilisation pour l'inclusion des personnes sourdes.</p>
            <div class="meta">
              <span><i class="fas fa-calendar"></i> Mars 2024</span>
              <span><i class="fas fa-eye"></i> 1.2k vues</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Exemple : Photo 1 -->
      <div class="col-lg-4 col-md-6 mb-4 grid-item photo">
        <div class="media-item photo">
          <div class="overlay">
            <div class="icon-circle">
              <i class="fas fa-expand"></i>
            </div>
          </div>
          <img 
            src="img_absa/img (17).jpg" 
            alt="Atelier de sensibilisation" 
            data-toggle="modal" 
            data-target="#mediaModal" 
            data-src="img_absa/img (17).jpg" 
            data-type="photo"
          >
          <span class="badge-type">Photo</span>
          <div class="content">
            <h5>Atelier de sensibilisation</h5>
            <p>Session de formation pour nos bénévoles dans notre centre de Yaoundé.</p>
            <div class="meta">
              <span><i class="fas fa-calendar"></i> Février 2024</span>
              <span><i class="fas fa-heart"></i> 45 likes</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Exemple : Photo 2 -->
      <div class="col-lg-4 col-md-6 mb-4 grid-item photo">
        <div class="media-item photo">
          <div class="overlay">
            <div class="icon-circle">
              <i class="fas fa-expand"></i>
            </div>
          </div>
          <img 
            src="img_absa/img (13).jpg" 
            alt="Événement communautaire" 
            data-toggle="modal" 
            data-target="#mediaModal" 
            data-src="img_absa/img (13).jpg" 
            data-type="photo"
          >
          <span class="badge-type">Photo</span>
          <div class="content">
            <h5>Événement communautaire</h5>
            <p>Rassemblement annuel de notre communauté pour célébrer nos réussites.</p>
            <div class="meta">
              <span><i class="fas fa-calendar"></i> Janvier 2024</span>
              <span><i class="fas fa-users"></i> 150 participants</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Les éléments suivants seront injectés par ton JS... -->

    </div>
  </div>
</section>
<!-- Galerie End -->



        <!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-contact">
                    <h2>Notre Siège Social</h2>
                    <p><i class="fa fa-map-marker-alt"></i>Yaoundé, Cameroun</p>
                    <p><i class="fa fa-phone-alt"></i>+237 6 77 69 26 90</p>
                    <p><i class="fa fa-envelope"></i>abpepba@yahoo.fr</p>
                    <div class="footer-social">
                        <a class="btn btn-custom" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-custom" href="https://web.facebook.com/www.Absaafrique.org"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-custom" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-custom" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-custom" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="footer-link">
                    <h2>Liens Utiles</h2>
                    <a href="#">Conditions d'Utilisation</a>
                    <a href="#">Politique de Confidentialité</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-newsletter">
                    <h2>Lettre d'information (Newsletter)</h2>
                    <form>
                        <input class="form-control" placeholder="Votre Email">
                        <button class="btn btn-custom">Soumettre</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; <a href="#">ABSA</a>, Tous droits réservés.</p>
            </div>
            
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Banderole Donateurs Start -->
<div class="banderole-donateurs">
    <div class="message-explicatif">
        <p>Ils ont fait un don</p>
    </div>
    <div class="donateur" id="donateur-container">
        <img src="img/default.jpg" alt="Photo Donateur" id="donateur-photo">
        <div class="donateur-details">
            <p id="donateur-nom" class="nom">Nom Donateur</p>
            <p id="donateur-montant">Montant: 0 FCFA</p>
        </div>
    </div>
</div>
<!-- Banderole Donateurs End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

        <script src="js/galerie.js"></script>
        <script src="js/banderol.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
