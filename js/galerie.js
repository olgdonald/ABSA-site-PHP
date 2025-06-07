
  const imageNames = [
    "1.jpg", "im (1).jpg", "im (2).jpg", "im (3).jpg", "im (4).jpg", "im (5).jpg", "im (6).jpg",
    "img (1).jpg", "img (2).jpg", "img (3).jpg", "img (4).jpg", "img (5).jpg", "img (6).jpg", "img (7).jpg",
    "img (8).jpg", "img (9).jpg", "img (10).jpg", "img (11).jpg", "img (12).jpg", "img (13).jpg", "img (14).jpg",
    "img (15).jpg", "img (16).jpg", "img (17).jpg", "img (18).jpg", "img (19).jpg", "img (20).jpg", "img (21).jpg",
    "img (22).jpg", "img (23).jpg", "img (24).jpg", "img (25).jpg", "img (26).jpg", "img (27).jpg",
    "img R1.jpg", "img.jpg"
  ];

  const galleryContainer = document.getElementById("gallery");

  imageNames.forEach(name => {
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
            alt="Événement communautaire" 
            data-toggle="modal" 
            data-target="#mediaModal" 
            data-src="img_absa/${name}" 
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
      
    `;
    galleryContainer.appendChild(div);
  });
  
  
  // Initialiser Isotope pour le filtre
  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows'
  });

  $('.filter-btn').click(function () {
    $('.filter-btn').removeClass('active');
    $(this).addClass('active');
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  // Modal : afficher l'image ou vidéo
  $('#mediaModal').on('show.bs.modal', function (event) {
    var img = $(event.relatedTarget);
    var src = img.data('src');
    var type = img.data('type');
    var container = $('#mediaContainer');
    container.empty();

    if (type === 'image') {
      container.append(`<img src="${src}" class="img-fluid rounded">`);
    } else if (type === 'video') {
      container.append(`<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="${src}" allowfullscreen></iframe></div>`);
    }

    // Charger commentaires fictifs (à remplacer par un système Firebase ou backend réel)
    const fakeComments = ['Belle image !', 'Très inspirant.', 'Magnifique initiative.'];
    const list = $('#commentsList');
    list.empty();
    fakeComments.forEach(c => list.append(`<li>${c}</li>`));
  });

  // Ajouter un commentaire (local)
  $('#commentForm').submit(function (e) {
    e.preventDefault();
    const comment = $('#userComment').val().trim();
    if (comment) {
      $('#commentsList').append(`<li>${comment}</li>`);
      $('#userComment').val('');
    }
  });

  document.addEventListener("DOMContentLoaded", function () {
    var grid = document.querySelector('.grid');
    var iso;

    // Initialisation de la grille une fois les images chargées
    imagesLoaded(grid, function () {
      iso = new Isotope(grid, {
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
      });
    });

    // Filtres
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
  });

