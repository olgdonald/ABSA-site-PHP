// Gestion des carrousels d'images - Version corrigée
document.addEventListener('DOMContentLoaded', function() {
    const carousels = document.querySelectorAll('.media-carousel');
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalClose = document.querySelector('.modal-close');

    // Variable globale pour tracking du carrousel actuel
    let currentCarouselContext = null;

    // Fonctions globales pour le modal
    window.openModal = function(imageSrc, imageAlt, carouselContext) {
        modalImage.src = imageSrc;
        modalImage.alt = imageAlt || 'Image agrandie';
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        currentCarouselContext = carouselContext;
    };

    window.closeModal = function() {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
        currentCarouselContext = null;
    };

    // Vérification que les éléments modal existent
    if (!modal || !modalImage) {
        console.error('Éléments modal manquants');
        return;
    }

    carousels.forEach(carousel => {
        const items = carousel.querySelectorAll('.media-item');
        const dots = carousel.parentNode.querySelectorAll('.dot');
        const prevBtn = carousel.parentNode.querySelector('.prev-btn');
        const nextBtn = carousel.parentNode.querySelector('.next-btn');
        const counter = carousel.querySelector('.media-counter');
        let currentIndex = 0;

        // Vérification que tous les éléments nécessaires existent
        if (!items.length || !prevBtn || !nextBtn) {
            console.error('Éléments carrousel manquants');
            return;
        }

        // Fonction pour afficher une image du carrousel
        function showImage(index) {
            // Vérifier que l'index est valide
            if (index < 0 || index >= items.length) return;
            
            // Masquer tous les items
            items.forEach(item => {
                item.classList.remove('active');
                item.style.display = 'none';
            });
            
            // Afficher l'item actuel
            items[index].classList.add('active');
            items[index].style.display = 'block';
            
            // Mettre à jour les dots
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            
            // Mettre à jour le compteur
            if (counter) {
                const currentSpan = counter.querySelector('.current');
                if (currentSpan) {
                    currentSpan.textContent = index + 1;
                }
            }
            
            // Gérer l'état des boutons
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index === items.length - 1;
            
            // Mettre à jour l'index courant
            currentIndex = index;
        }

        // Créer le contexte du carrousel pour la navigation dans le modal
        const carouselContext = {
            items: items,
            carousel: carousel
        };

        // Event listeners pour les clics sur les images (une seule fois)
        items.forEach(item => {
            item.addEventListener('click', () => {
                const img = item.querySelector('img');
                if (img) {
                    window.openModal(img.src, img.alt, carouselContext);
                }
            });
        });

        // Navigation précédent
        prevBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (currentIndex > 0) {
                showImage(currentIndex - 1);
            }
        });

        // Navigation suivant
        nextBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (currentIndex < items.length - 1) {
                showImage(currentIndex + 1);
            }
        });

        // Navigation par dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', (e) => {
                e.stopPropagation();
                showImage(index);
            });
        });

        // Navigation au clavier pour le carrousel
        carousel.addEventListener('keydown', (e) => {
            switch(e.key) {
                case 'ArrowLeft':
                    e.preventDefault();
                    if (currentIndex > 0) showImage(currentIndex - 1);
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    if (currentIndex < items.length - 1) showImage(currentIndex + 1);
                    break;
            }
        });

    });

    // Gestion de la fermeture du modal
    if (modalClose) {
        modalClose.addEventListener('click', window.closeModal);
    }

    // Fermer le modal en cliquant sur l'arrière-plan
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            window.closeModal();
        }
    });

    // Fermeture avec la touche Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && modal.style.display === 'flex') {
            window.closeModal();
        }
    });

    // Navigation dans le modal avec les flèches
    document.addEventListener('keydown', (e) => {
        if (modal.style.display === 'flex' && currentCarouselContext) {
            const currentItems = currentCarouselContext.items;
            
            if (!currentItems) return;
            
            // Trouver l'image actuellement affichée dans le modal
            const currentModalSrc = modalImage.src;
            let currentModalIndex = -1;
            
            currentItems.forEach((item, index) => {
                const img = item.querySelector('img');
                if (img && img.src === currentModalSrc) {
                    currentModalIndex = index;
                }
            });
            
            switch(e.key) {
                case 'ArrowLeft':
                    e.preventDefault();
                    if (currentModalIndex > 0) {
                        const prevImg = currentItems[currentModalIndex - 1].querySelector('img');
                        if (prevImg) {
                            modalImage.src = prevImg.src;
                            modalImage.alt = prevImg.alt;
                        }
                    }
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    if (currentModalIndex < currentItems.length - 1) {
                        const nextImg = currentItems[currentModalIndex + 1].querySelector('img');
                        if (nextImg) {
                            modalImage.src = nextImg.src;
                            modalImage.alt = nextImg.alt;
                        }
                    }
                    break;
            }
        }
    });
});