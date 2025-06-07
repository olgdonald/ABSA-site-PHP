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

        <!-- email -->
        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
        </script>
        <script type="text/javascript">
            (function(){
                emailjs.init({
                publicKey: "FHRSv30zb2Z2YbIqS",
                });
            })();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="./js/email.js"></script>
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
                        <a href="event.html" class="nav-item nav-link">Projets </a>
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
        <div class="page-header page-base">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Devenir volontaire</h2>
                    </div>
                    <!-- <div class="col-12">
                        <a href="index.html">Accueil</a>
                        <a href="">Devenir volontaire</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Volunteer Start -->
<div class="volunteer" data-parallax="scroll" data-image-src="img_absa/img (10).jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="volunteer-form" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false">
                    <form id="volontaireForm" data-form-type="volontaire" onsubmit="sendMail('#volontaireForm', event); return false;">
                        <div class="control-group">
                            <input type="text" class="form-control" id="volontaire_nom" placeholder="Nom" required="required" />
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="volontaire_email" placeholder="Email" required="required" />
                        </div>
                        <div class="control-group">
                            <input type="number" class="form-control" id="volontaire_numero" placeholder="Numéro" required="required" />
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="volontaire_message" placeholder="Pourquoi souhaitez-vous devenir bénévole?" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit">Devenir bénévole</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="volunteer-content">
                    <div class="section-header">
                        <p>Devenir Bénévole</p>
                        <h2>Faisons une différence dans la vie des autres</h2>
                    </div>
                    <div class="volunteer-text">
                        <p>
                            Rejoignez ABSA et contribuez à améliorer la vie des personnes sourdes et muettes en Afrique. En tant que bénévole, vous aurez l'opportunité de soutenir nos projets éducatifs, de sensibilisation et d'intégration sociale, tout en apportant une aide précieuse à ceux qui en ont besoin. Ensemble, nous pouvons créer un environnement inclusif où chacun a la possibilité de s'épanouir et de vivre pleinement. Chaque geste compte, et votre engagement peut faire la différence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Volunteer End -->


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
        <script src="js/banderol.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
