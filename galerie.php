
<?php $currentPage = 'galerie'; ?>
<!DOCTYPE html>
<html lang="en">
   <?php include('./include/header.php'); ?>
        <link rel="stylesheet" href="css/galerie.css">

    </head>

    <body>
         <?php include('./include/navbar.php'); ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header page-event">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Notre Galerie</h2>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Galerie Start -->
<section id="galerie">
  <div class="container">

    <!-- En-tête de section -->
    <div class="section-header">
      <p class="subtitle">Galerie Média</p>
      <h2>
        Nos actions en images et en vidéos
      </h2>
      <p class="lead">
        Découvrez l'impact de notre travail à travers notre collection de moments précieux et d'histoires inspirantes.
      </p>
    </div>

    <!-- Filtres -->
    <!-- <div class="text-center">
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
    </div> -->

    <!-- Grille -->
    <div class="row grid" id="gallery">

      

    </div>
  </div>
</section>
<!-- Galerie End -->

<!-- Modal Media -->
<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="mediaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="mediaModalLabel">Média</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0">
        <div id="mediaContainer"></div>
      </div>
      <div class="modal-footer">
        <div class="w-100">
        </div>
      </div>
    </div>
  </div>
</div>




<?php include('./include/footer.php'); ?>

        <script src="js/banderol.js"></script>
        <script src="js/galerie.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
