<?php $currentPage = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include('./include/header.php'); ?>
    
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
        <div class="page-header page-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contactez Nous</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p class="subtitle">Contactez-nous</p>
                    <h2>Une préoccupation ? laissez nous un message</h2>
                </div>

                <div class="container my-5 p-4 rounded-4">
    <div class="row gy-4">
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <div class="contact-box py-4 px-3">
          <i class="fas fa-phone fa-2x text-info mb-2 icon-custom"></i>
          <h4 class="mt-2 text-dark">Téléphone</h4>
          <p class="text-muted">+237 6 77 69 26 90</p>
        </div>
      </div>
  
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <div class="contact-box py-4 px-3">
          <i class="fas fa-envelope fa-2x text-info mb-2 icon-custom"></i>
          <h4 class="mt-2 text-dark">Email</h4>
          <p class="text-muted">abpepba@yahoo.fr</p>
        </div>
      </div>
  
      <div class="col-md-4 text-center">
        <div class="contact-box py-4 px-3">
          <i class="fas fa-map-marker-alt fa-2x text-info mb-2 icon-custom"></i>
          <h4 class="mt-2 text-dark">Adresse</h4>
          <p class="text-muted">Carrefour Belibi, Yaoundé, Cameroun</p>
        </div>
      </div>
    </div>
</div>
                  
                  


                <div class="contact-img">
                    <img loading="lazy"  src="img/asba banner.jpg" alt="Image">
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


        <?php include('./include/footer.php'); ?>
    </body>
</html>
