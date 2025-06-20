// Attendre que le DOM soit chargé
$(document).ready(function() {
  
  // Liste des images
  const imageNames = [
    "1.jpg", "im (1).jpg", "im (2).jpg", "im (3).jpg", "im (4).jpg", "im (5).jpg", "im (6).jpg",
    "img (1).jpg", "img (2).jpg", "img (3).jpg", "img (4).jpg", "img (5).jpg", "img (6).jpg", "img (7).jpg",
    "img (8).jpg", "img (9).jpg", "img (10).jpg", "img (11).jpg", "img (12).jpg", "img (13).jpg", "img (14).jpg",
    "img (15).jpg", "img (16).jpg", "img (17).jpg", "img (18).jpg", "img (19).jpg", "img (20).jpg", "img (21).jpg",
    "img (22).jpg", "img (23).jpg", "img (24).jpg", "img (25).jpg", "img (26).jpg", "img (27).jpg",
    "img R1.jpg", "img.jpg"
  ];

  const galleryContainer = document.getElementById("gallery");

  // Ajouter les images dynamiquement
  imageNames.forEach((name, index) => {
    const div = document.createElement("div");
    div.className = "col-lg-4 col-md-6 mb-4 grid-item photo";
    div.innerHTML = `
        <div class="media-item photo">
          <div class="overlay">
            <div class="icon-circle">
              <i class="fas fa-expand"></i>
            </div>
          </div>
          <img 
            src="img_absa/${name}" 
            alt="Image ${index + 1}" 
            data-toggle="modal" 
            data-target="#mediaModal" 
            data-src="img_absa/${name}" 
            data-type="photo"
            style="cursor: pointer;"
          >
          <span class="badge-type">Photo</span>
          <div class="content">
            <h5>Photo ${index + 1}</h5>
            <p>Découvrez nos activités et notre impact dans la communauté.</p>
            <div class="meta">
              <span><i class="fas fa-calendar"></i> 2024</span>
              <span><i class="fas fa-users"></i> Communauté</span>
            </div>
          </div>
        </div>
    `;
    galleryContainer.appendChild(div);
  });

  // Initialiser Isotope après que les images soient ajoutées
  setTimeout(function() {
    var $grid = $('.grid').isotope({
      itemSelector: '.grid-item',
      layoutMode: 'fitRows'
    });

    // Gestion des filtres
    $('.filter-btn').click(function () {
      $('.filter-btn').removeClass('active');
      $(this).addClass('active');
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    });

    // Réarranger la grille après ajout des images
    $grid.isotope('reloadItems').isotope();
  }, 100);

  // Gestion du modal pour afficher l'image ou vidéo
  $('#mediaModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Bouton qui a déclenché le modal
    var img = button.closest('.media-item').find('img'); // Trouver l'image dans le conteneur parent
    var src = img.data('src');
    var type = img.data('type');
    var alt = img.attr('alt');
    
    var modal = $(this);
    var container = $('#mediaContainer');
    
    // Vider le container
    container.empty();
    
    // Mettre à jour le titre
    modal.find('.modal-title').text(alt || 'Média');

    if (type === 'photo') {
      container.append(`<img src="${src}" class="img-fluid rounded" alt="${alt}">`);
    } else if (type === 'video') {
      container.append(`
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="${src}" allowfullscreen></iframe>
        </div>
      `);
    }

    // Charger commentaires fictifs
    const fakeComments = [
      'Belle image ! 👍',
      'Très inspirant. Merci pour votre travail.',
      'Magnifique initiative pour la communauté.',
      'Continuez comme ça ! 💪'
    ];
    const list = $('#commentsList');
    list.empty();
    fakeComments.forEach(comment => {
      list.append(`<li class="mb-2"><small class="text-muted">Anonyme:</small> ${comment}</li>`);
    });
  });

  // Gestion des clics sur les images ET les overlays
  $(document).on('click', '.media-item img, .media-item .overlay', function(e) {
    e.preventDefault();
    var $mediaItem = $(this).closest('.media-item');
    var $img = $mediaItem.find('img');
    
    // Déclencher l'ouverture du modal
    $('#mediaModal').modal('show');
    
    // Simuler l'événement show.bs.modal avec les bonnes données
    var modalEvent = $.Event('show.bs.modal');
    modalEvent.relatedTarget = $img[0];
    $('#mediaModal').trigger(modalEvent);
  });

  // Ajouter un commentaire
  $('#commentForm').submit(function (e) {
    e.preventDefault();
    const comment = $('#userComment').val().trim();
    if (comment) {
      const timestamp = new Date().toLocaleTimeString();
      $('#commentsList').append(`
        <li class="mb-2">
          <small class="text-muted">Vous (${timestamp}):</small> ${comment}
        </li>
      `);
      $('#userComment').val('');
      
      // Faire défiler vers le bas pour voir le nouveau commentaire
      var commentsList = document.getElementById('commentsList');
      commentsList.scrollTop = commentsList.scrollHeight;
    }
  });

  // Nettoyer le modal quand il se ferme
  $('#mediaModal').on('hidden.bs.modal', function () {
    $('#mediaContainer').empty();
  });

});

// Version alternative avec vanilla JavaScript si jQuery pose problème
document.addEventListener("DOMContentLoaded", function () {
  // Fonction pour initialiser Isotope avec vanilla JS
  function initIsotope() {
    var grid = document.querySelector('.grid');
    if (grid && typeof Isotope !== 'undefined') {
      var iso = new Isotope(grid, {
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
      });

      // Gestion des filtres
      var filterButtons = document.querySelectorAll('.filter-btn');
      filterButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
          var filterValue = this.getAttribute('data-filter');

          filterButtons.forEach(function (b) {
            b.classList.remove('active');
          });
          this.classList.add('active');

          iso.arrange({ filter: filterValue });
        });
      });
    }
  }

  // Initialiser Isotope après un court délai
  setTimeout(initIsotope, 200);
});