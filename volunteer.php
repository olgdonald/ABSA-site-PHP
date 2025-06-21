<?php
$currentPage = 'voloneer'; ?>
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


<?php include('./include/footer.php'); ?>
    </body>
</html>
