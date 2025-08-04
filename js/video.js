// Quand le modal s'ouvre : mettre la bonne source mais ne pas forcer le play
  $('#videoModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var videoSrc = button.data("src");
    var video = document.getElementById('video');
    var source = video.querySelector('source');
    
    source.setAttribute('src', videoSrc);
    video.load(); // précharge mais NE joue PAS automatiquement
  });

  // Quand le modal se ferme : stoppe tout
  $('#videoModal').on('hidden.bs.modal', function () {
    var video = document.getElementById('video');
    video.pause();
    video.currentTime = 0;
    // Pas de load(), pas de removeAttribute
  });