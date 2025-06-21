<?php
$currentPage = 'donate'; ?>
<!DOCTYPE html>
<html lang="en">
    <?php include('./include/header.php'); ?>
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
        <?php include('./include/navbar.php'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header page-base">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Faire un Don</h2>
                    </div>
                    <!-- <div class="col-12">
                        <a href="index.html">Accueil</a>
                        <a href="">Donation</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
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


        <?php include('./include/footer.php'); ?>
    </body>
</html>
