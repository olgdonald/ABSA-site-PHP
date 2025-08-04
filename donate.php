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
        <link rel="stylesheet" href="css/don.css">
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

         <!-- Donation Process Section Start -->
    <div class="donation-process">
        <div class="container">
            <!-- Introduction -->
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mb-4" style="color: #2c3e50; font-weight: 600;">
                        Votre soutien change des vies
                    </h2>
                    <p class="lead mb-5" style="color: #7f8c8d;">
                        Chaque don compte pour améliorer l'inclusion et la dignité des personnes sourdes au Cameroun. 
                        Découvrez comment faire votre don en toute simplicité.
                    </p>
                </div>
            </div>

        

            <!-- Process Steps -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="process-card" data-aos="fade-up" data-aos-duration="800">
                        <div class="tutorial-title">
                            <h3>Comment faire votre don ?</h3>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="process-step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h4>Choisissez votre moyen de paiement</h4>
                                        <p>Sélectionnez Orange Money, MTN MoMo ou virement bancaire selon votre préférence.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="process-step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h4>Effectuez le paiement</h4>
                                        <p>Utilisez le numéro ou IBAN fourni pour effectuer votre don via votre téléphone ou banque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="process-step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h4>Confirmez votre don</h4>
                                        <p>Remplissez le formulaire de confirmation avec les détails de votre transaction.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="process-step">
                                    <div class="step-number">4</div>
                                    <div class="step-content">
                                        <h4>Recevez votre reçu</h4>
                                        <p>Nous vous enverrons une confirmation par email avec tous les détails de votre don.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payment Methods -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center mb-4" style="color: #2c3e50; font-weight: 600;">
                        Choisissez votre moyen de paiement
                    </h3>
                    
                    <div class="payment-methods">
                        <div class="payment-method orange-money" data-aos="fade-up" data-aos-delay="100">
                            <div class="payment-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h4 style="color: #2c3e50; font-weight: 600;">Orange Money</h4>
                            <div class="payment-info">
                                <div class="payment-number">6 57 91 07 16</div>
                                <div class="payment-name">ABSA Cameroun</div>
                            </div>
                            <p class="mt-3" style="color: #7f8c8d; font-size: 14px;">
                                Composez #150# et suivez les instructions
                            </p>
                        </div>
                        
                        <div class="payment-method mtn-momo" data-aos="fade-up" data-aos-delay="200">
                            <div class="payment-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h4 style="color: #2c3e50; font-weight: 600;">MTN MoMo</h4>
                            <div class="payment-info">
                                <div class="payment-number">677 69 26 90</div>
                                <div class="payment-name">ABSA Cameroun</div>
                            </div>
                            <p class="mt-3" style="color: #7f8c8d; font-size: 14px;">
                                Composez *126# et suivez les instructions
                            </p>
                        </div>
                        
                        <div class="payment-method bank-transfer" data-aos="fade-up" data-aos-delay="300">
                            <div class="payment-icon">
                                <i class="fas fa-university"></i>
                            </div>
                            <h4 style="color: #2c3e50; font-weight: 600;">AFRILAND FIRST BANK</h4>
                            <div class="payment-info">
                                <div class="payment-number">CM 21 10005 00001 00220551001 02/CEPI</div>
                                <div class="payment-name">ASSOCIATION BOUCHE DES SOURDS D'AFRIQUE(ABSA)</div>
                            </div>
                            <p class="mt-3" style="color: #7f8c8d; font-size: 14px;">
                                Utilisez ce code IBAN pour vos virements
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="section-divider">
                <i class="fas fa-heart" style="color: #f1c40f; font-size: 24px;"></i>
            </div> -->
        </div>
    </div>
    <!-- Donation Process Section End -->

    <!-- Form Transition -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-transition" data-aos="zoom-in" data-aos-duration="1000">
                    <h3><i class="fas fa-check-circle mr-2"></i>Paiement effectué ?</h3>
                    <p>Parfait ! Maintenant, aidez-nous à confirmer votre don en remplissant le formulaire ci-dessous.</p>
                </div>
            </div>
        </div>
    </div>
        
        
        <!-- Donate Start -->
 <!-- <div class="donate" data-parallax="scroll" data-image-src="img_absa/img (10).jpg">
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
</div> -->


<!-- Donate Form Start -->
    <div class="donate" data-parallax="scroll" data-image-src="img_absa/img (10).jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="donate-content">
                        <div class="section-header">
                            <p style=" color : white;">Confirmez votre don</p>
                            <h2>Formulaire de preuve de paiement</h2>
                        </div>
                        <div class="donate-text">
                            <p>
                                Merci d'avoir effectué votre don ! Pour finaliser le processus et vous envoyer votre reçu, 
                                veuillez remplir ce formulaire avec les informations de votre transaction. 
                                Vos données sont sécurisées et utilisées uniquement pour la gestion de votre don.
                            </p>
                            <div class="mt-4 p-3" style="background: rgba(147, 236, 252, 0.1); border-radius: 10px; border-left: 4px solid #3498db;">
                                <small style="color: white;">
                                    <i class="fas fa-info-circle mr-2"></i>
                                    <strong>Important :</strong> Gardez votre reçu de transaction pour vos records personnels.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="donate-form" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="false">
                        <form id="donationForm" data-form-type="donation" onsubmit="sendMail('#donationForm', event); return false;">
                            <div class="control-group">
                                <input type="text" class="form-control" id="donate_nom" placeholder="Nom complet" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="donate_email" placeholder="Email" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="tel" class="form-control" id="donate_numero" placeholder="Numéro de téléphone" required="required" />
                            </div>
                            <div class="control-group">
                                <select class="form-control" id="donate_methode" required="required">
                                    <option value="">Moyen de paiement utilisé</option>
                                    <option value="Orange Money">Orange Money</option>
                                    <option value="MTN MoMo">MTN MoMo</option>
                                    <option value="Virement Bancaire">Virement Bancaire</option>
                                </select>
                            </div>
                            <div class="control-group">
                                <input type="number" class="form-control" id="donate_montant" placeholder="Montant donné (FCFA)" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="date" class="form-control" id="donate_date" placeholder="Date de la transaction" required="required" />
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="donate_reference" placeholder="Référence de transaction (ID UNIQUE)" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit">
                                    <i class="fas fa-paper-plane mr-2"></i>Confirmer mon don
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate Form End -->
<!-- Donate End -->


        <?php include('./include/footer.php'); ?>
        <script>
        // Auto-fill today's date
        document.getElementById('donate_date').valueAsDate = new Date();
    </script>
    </body>
</html>
