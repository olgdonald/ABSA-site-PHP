<?php
$currentPage = 'accueil'; ?>
<!DOCTYPE html>
<html lang="en">
    <?php include('./include/header.php'); ?>
    <link rel="stylesheet" href="css/index.css">
    <link href="css/service.css" rel="stylesheet">
    <link rel="stylesheet" href="css/partenaire.css">
    <link rel="stylesheet" href="css/rapports.css">
    </head>

    <body>
        <?php include('./include/navbar.php'); ?>
        
        <!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="img_absa/img (23).jpg" alt="Sensibilisation en milieu scolaire">
                </div>
                <div class="carousel-text">
                    <h1>Sensibilisation en milieu scolaire</h1>
                    <p>
                        ABSA travaille avec des enseignants pour faciliter l'intégration des élèves sourds dans les écoles ordinaires.
                    </p>
                    <div class="carousel-btn">
                        <a class="btn btn-custom" href="single.php">En savoir plus</a>
                        <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Regarder la vidéo</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="img/asba banner.jpg" alt="Distribution de matériel scolaire">
                </div>
                <div class="carousel-text">
                    <h1>Distribution de matériel scolaire</h1>
                    <p>
                        Grâce à nos partenaires, nous avons pu fournir du matériel scolaire à plus de 4200 enfants sourds.
                    </p>
                    <div class="carousel-btn">
                        <a class="btn btn-custom" href="#activites">En savoir plus</a>
                        <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Regarder la vidéo</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img">
                    <img src="img_absa/im (4).jpg" alt="Ateliers de sensibilisation à la santé">
                </div>
                <div class="carousel-text">
                    <h1>Ateliers de sensibilisation à la santé</h1>
                    <p>
                        Nous organisons des ateliers pour éduquer les enfants et adolescents sourds sur l'hygiène, la santé et la prévention.
                    </p>
                    <div class="carousel-btn">
                        <a class="btn btn-custom" href="#activites">En savoir plus</a>
                        <a class="btn btn-custom btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">Regarder la vidéo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

        <!-- About Start -->
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img" data-parallax="scroll" data-image-src="img_absa/1.jpg"></div>
            </div>
            <div class="col-lg-6">
                <div class="section-header">
                    <p>À Propos de Nous</p>
                    <h2>Association Bouche des Sourds d’Afrique (ABSA)</h2>
                </div>
                <div class="about-tab">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#tab-content-1">À Propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="tab-content-1" class="container tab-pane active">
                            <p>L'Association Bouche des Sourds d’Afrique (ABSA) a été fondée en 2007 par de jeunes volontaires à Obala, Cameroun, et légalement reconnue en 2010. Nous travaillons activement pour réduire l'exclusion et la marginalisation des personnes sourdes dans la société et pour les intégrer pleinement.</p>
                        </div>
                        <div id="tab-content-2" class="container tab-pane fade">
                            <p>Notre mission est de sensibiliser la population sur la condition des personnes sourdes et de lutter contre les préjugés tels que leur incapacité a avoir unraisonnement logique , fréquenter , travailler . Situation qui découle d'apres les préjugés de la « malédiction ancestrale ou divine , des mauvais sorts ou des pactes avec le diable » . Nous visons à offrir un cadre famillial accuillant , un accès équitable à l'éducation, à l'emploi , aux soins de santé et a l'information pour les personnes sourdes au sein de la société.</p>
                        </div>
                        <div id="tab-content-3" class="container tab-pane fade">
                            <p>Notre vision est de créer une société inclusive où les personnes sourdes peuvent vivre sans discrimination. Nous aspirons à développer des opportunités de formation et d'acces aux emplois décents pour les personnes sourdes, à construire et soutenir des écoles spécialisées et inclusives, et à assurer un accompagnement psychologique et matériel continu pour les sourds et leurs familles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



        <!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Nos Actions</p>
            <h2>Nous croyons que nous pouvons améliorer des vies avec votre aide</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="false">
                    <div class="service-icon">
                        <i class="flaticon-social-care"></i>
                    </div>
                    <div class="service-text">
                        <h3>Cours de Langue des Signes</h3>
                        <p>Nous offrons des cours de langue des signes pour permettre une meilleure communication entre les personnes sourdes et entendants normaux.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item"data-aos="zoom-out" data-aos-duration="1000" data-aos-once="false">
                    <div class="service-icon">
                        <i class="flaticon-education"></i>
                    </div>
                    <div class="service-text">
                        <h3>Éducation</h3>
                        <p>Nous accompagnons les structures éducatives et d'encadrement des sourds dans leurs missions pour une meilleure formation et insertion sociale des enfants sourds.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item"data-aos="zoom-out" data-aos-duration="1000" data-aos-once="false">
                    <div class="service-icon">
                        <i class="flaticon-healthcare"></i>
                    </div>
                    <div class="service-text">
                        <h3>Soins de Santé</h3>
                        <p>Nous oeuvrons pour l'accès aux soins de santé  des personnes sourdes, en promouvant des consultations médicales adaptées avec des services de traduction en langue des signes. Nous organison également des campagnes de sensibilisation de formation en santé sexuelle et reproductive et a l'hygienne de vie pour les personnes sourdes. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item"data-aos="zoom-out" data-aos-duration="1000" data-aos-once="false">
                    <div class="service-icon">
                        <i class="flaticon-kindness"></i>
                    </div>
                    <div class="service-text">
                        <h3>Conseils et Accompagnement</h3>
                        <p>Nous apportons un soutien psychologique et des conseils aux personnes sourdes ainsi qu'a leurs familles afin de les aider à surmonter les défis quotidiens auxquels ils sont confrontés et d'adopter des attitudes positives.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item"data-aos="zoom-out" data-aos-duration="1000" data-aos-once="false">
                    <div class="service-icon">
                        <i class="flaticon-donation"></i>
                    </div>
                    <div class="service-text">
                        <h3>Formation et Emploi</h3>
                        <p>Nous organisons des programmes de formation professionnelle et d'accompagnement a la recherche et la création d'emplois en faveur des personnes sourdes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item"data-aos="zoom-out" data-aos-duration="1000" data-aos-once="false">
                    <div class="service-icon">
                        <i class="flaticon-charity"></i>
                    </div>
                    <div class="service-text">
                        <h3>Sensibilisation et Plaidoyer</h3>
                        <p>Nous menons des actions de sensibilisation et de plaidoyer pour promouvoir les droits des personnes sourdes dans tous les aspects de la vie sociale afin de lutter contre tous les préjugés et discriminations dévellopés a l'endroit des sourds et parvenir a leur intégration harmonieuse au sein de la société.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

        
        
<!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/avel-chuklanov-9cx4-QowgLc-unsplash.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">10</h3>
                                <p>Zone d'intervention</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">62</h3>
                                <p>volontaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-number" data-toggle="counter-up">106.000000</h3>
                                <span>FCFA</span>
                                <p>Objectif</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-number" data-toggle="counter-up">21.000000</h3>
                                <span>FCFA</span>
                                <p>Récoltés</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
<!-- Facts End -->

<section class="realisations">
    <div class="container">
        <div class="section-header text-center">
            <p class="subtitle">Rapports et Archives</p>
            <h2>Rapports, projets et témoignages d’un engagement solidaire</h2>
        </div>

    <div class="realisations-year">
    <div class="realisations-list">

                <div class="realisation-item">
                    <img src="img/1.png" alt="Soutien aux sourds-muets">
                    <h4>Rapport d'activité Avril-Mai 2025 absa</h4>
                    <p>L'objectif fixé en amont, à savoir la distribution effective de denrées alimentaires dans quatre établissements ciblés, a été pleinement atteint. En effet, les descentes sur le terrain ont permis à notre équipe de se rendre successivement dans les quatre sites identifiés, où les opérations de remise des vivres se sont déroulées dans de bonnes conditions.</p>
                    <a class="btn btn-custom" href="doc/Rapport d'activité avril-Mai 2025 absa" download>Télécharger</a>
                </div>

                <div class="realisation-item">
                    <img src="img_absa/img.jpg" alt="Accès aux soins">
                    <h4>projet d'appui scolaire d'Obala</h4>
                    <p>Ce Projet avait pour objectif de soutenir les familles et les enfants sourds dans la voie de la réusite scolaire.Plus de détails dans ce document.</p>
                    <a class="btn btn-custom" href="doc/projet d'appui scolaire d'Obala 2010_034922.pdf" download>Télécharger</a>
                </div>
                
    </div>
    </div>
        
       

        
    <div class="see-more-container">
        <button class="btn-see-more"><a href="service.php">Voir Plus</a></button>
    </div>
</section>
    
</div>
<!-- Event End -->

 <!-- Donate Start -->
 <div class="donate" data-parallax="scroll" data-image-src="img_absa/img (10).jpg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="donate-content">
                    <div class="section-header">
                        <p>Faites un don maintenant</p>
                        <h2>Contribuons à améliorer la vie des personnes dans le besoin</h2>
                    </div>
                    <div class="donate-text">
                        <p>
                            Votre soutien est crucial pour aider les personnes sourdes à avoir une vie épanouie. Avec votre don, nous pourrons fournir des ressources essentielles, des équipements adaptés et des services d'accompagnement pour favoriser leur intégration sociale et professionnelle.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="donate-form"data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false">
                    <form id="donationForm" data-form-type="donation" onsubmit="sendMail('#donationForm', event); return false;">
                        <div class="control-group">
                            <input type="text" class="form-control" id="donate_nom" placeholder="Nom" required="required" />
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="donate_email" placeholder="Email" required="required" />
                        </div>
                        <div class="control-group">
                            <input type="number" class="form-control" id="donate_numero" placeholder="Numéro de téléphone" required="required" />
                        </div>
                        <div class="control-group">
                            <input type="number" class="form-control" id="donate_montant" placeholder="Montant en FCFA" required="required" />
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit">Faire un don maintenant</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Donate End -->


     <!-- Partners Section Start -->
        <section class="partners-section">
            <div class="container">
                <div class="section-header text-center">
                    <p class="subtitle">Nos Partenaires</p>
                    <h2>Des institutions exceptionnelles qui collaborent avec nous</h2>
                </div>

                <!-- Établissements Primaires Spécialisés -->
                <div class="partner-category" data-aos="fade-up" data-aos-duration="1000">
                    
                    <div class="partners-grid">
                        

                        <div class="partner-item">
                            <div class="partner-img">
                                <img src="img/absa-partenaire (3).jpg" alt="EDAN">
                            </div>
                            <div class="partner-content">
                                <h4>École des déficients auditifs de Ndikimimeki (EDAN)</h4>
                                <p class="partner-type">Établissement partenaire</p>
                                <p class="partner-description">Centre éducatif pour enfants sourds et malentendants</p>
                            </div>
                        </div>


                        <div class="partner-item">
                            <div class="partner-img">
                                <img src="img/absa-partenaire (2).jpg" alt="CAESEDA">
                            </div>
                            <div class="partner-content">
                                <h4>CAESEDA DE NKOLMEBANGA</h4>
                                <p class="partner-type">École Inclusive</p>
                                <p class="partner-description">Centre d'accompagnement éducatif spécialisé</p>
                                <div class="partner-contact">
                                    <i class="fas fa-phone"></i>
                                    <span>677 368 015</span>
                                </div>
                            </div>
                        </div>

                        <div class="partner-item">
                            <div class="partner-img">
                                <img src="img/absa-partenaire (4).jpg" alt="Friends of Deafs">
                            </div>
                            <div class="partner-content">
                                <h4>FRIENDS OF DEAFS SCHOOL (MBOA 2)</h4>
                                <p class="partner-type">Établissement partenaire</p>
                                <p class="partner-description">École spécialisée pour enfants sourds</p>
                                <div class="partner-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Obala</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ministères -->
                <div class="partner-category" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    
                    <div class="partners-grid">
                        <div class="partner-item ">
                            <div class="partner-img">
                                <img src="img/minas-logo.jpg" alt="MINAS" onerror="this.src='img/minas.jfif'">
                            </div>
                            <div class="partner-content">
                                <h4>Ministère des Affaires Sociales</h4>
                                <p class="partner-type">MINAS</p>
                                <p class="partner-description">Partenaire institutionnel pour l'inclusion sociale</p>
                                <div class="partner-badges">
                                    <span class="badge official">Officiel</span>
                                </div>
                            </div>
                        </div>

                        <div class="partner-item ">
                            <div class="partner-img">
                                <img src="img/minsec-logo.jpg" alt="MINSEC" onerror="this.src='img/minisec.jfif'">
                            </div>
                            <div class="partner-content">
                                <h4>Ministère de l'Enseignement Secondaire</h4>
                                <p class="partner-type">MINSEC</p>
                                <p class="partner-description">Partenaire pour l'éducation inclusive</p>
                                <div class="partner-badges">
                                    <span class="badge official">Officiel</span>
                                </div>
                            </div>
                        </div>
                        <div class="partner-item ">
                            <div class="partner-img">
                                <img src="img/giz-logo.jpg" alt="GIZ" onerror="this.src='img/GIZ.jpg'">
                            </div>
                            <div class="partner-content">
                                <h4>Deutsche Gesellschaft für Internationale Zusammenarbeit</h4>
                                <p class="partner-type">GIZ</p>
                                <p class="partner-description">Coopération technique allemande pour le développement</p>
                                <div class="partner-badges">
                                    <span class="badge international">International</span>
                                    <span class="badge country">Allemagne</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
            <div class="see-more-container">
            <button class="btn-see-more"><a href="partenaire.php">Voir Plus</a></button>
        </div>
        </section>
        <!-- Partners Section End -->
   
        
        
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
                            Rejoignez ABSA et contribuez à améliorer la vie des personnes sourdes en Afrique. En tant que bénévole, vous aurez l'opportunité de soutenir nos projets éducatifs , de santé , de sensibilisation et d'intégration professionnelle, tout en apportant une aide précieuse à ceux qui en ont besoin. Ensemble, nous pouvons créer un environnement inclusif où chacun a la possibilité de s'épanouir et de vivre pleinement. Chaque geste compte, et votre engagement peut faire la différence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Volunteer End -->

        



<!-- Contact Début -->
<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Contactez-nous</p>
            <h2>Une préoccupation ? laissez nous un message</h2>
        </div>
        <div class="contact-img">
            <img src="img/asba banner.jpg" alt="Image">
        </div>
        <div class="contact-form">
            <div id="success"></div>
            <form id="contactForm" data-form-type="contact" onsubmit="sendMail('#contactForm', event); return false;">
                <div class="control-group">
                    <input type="text" class="form-control" id="name" placeholder="Votre Nom" required="required" data-validation-required-message="Veuillez entrer votre nom" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control" id="email" placeholder="Votre Email" required="required" data-validation-required-message="Veuillez entrer votre email" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="number" class="form-control" id="numero" placeholder="Votre Numéro" required="required" data-validation-required-message="Veuillez entrer votre numero" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" id="subject" placeholder="Sujet" required="required" data-validation-required-message="Veuillez entrer un sujet" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Veuillez entrer votre message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-custom" type="submit" id="sendMessageButton">Envoyer le Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Contact Fin -->


<!-- Blog Début -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Réalisations</p>
            <h2>Découvrez ce que nous accomplissons pour changer des vies</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img_absa/img (13).jpg" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="service.php">Soutien et Assistance pour les Sourds</a></h3>
                        <p>
                            Nous apportons un accompagnement personnalisé aux personnes sourdes à travers des programmes éducatifs, des aides matérielles et un suivi social, afin de favoriser leur inclusion et leur autonomie au quotidien.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img_absa/img (3).jpg" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="service.php">Installation de panneaux solaire</a></h3>
                        <p>
                            Pour favoriser l'autonomie énergétique des centres d'accueil, nous avons installé des panneaux solaires dans plusieurs structures. Cette initiative permet un accès durable à l'électricité tout en respectant l’environnement.
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img_absa/im (2).jpg" alt="Image">
                    </div>
                    <div class="blog-text">
                        <h3><a href="service.php">Événements et Activités écologiques</a></h3>
                        <p>
                            L'association organise régulièrement des actions de sensibilisation à l'environnement, telles que des campagnes, des journées de nettoyage et des ateliers éducatifs, avec la participation active de la communauté sourde.
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="see-more-container">
        <button class="btn-see-more"><a href="service.php">Voir Plus</a></button>
    </div>
</div>
<!-- Blog Fin -->


        <?php include('./include/footer.php'); ?>
        <script src="js/service.js"></script>
    </body>
</html>
