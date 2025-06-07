 // Gestion des carrousels d'images
        document.addEventListener('DOMContentLoaded', function() {
            const carousels = document.querySelectorAll('.media-carousel');
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalClose = document.querySelector('.modal-close');

            carousels.forEach(carousel => {
                const items = carousel.querySelectorAll('.media-item');
                const dots = carousel.parentNode.querySelectorAll('.dot');
                const prevBtn = carousel.parentNode.querySelector('.prev-btn');
                const nextBtn = carousel.parentNode.querySelector('.next-btn');
                const counter = carousel.querySelector('.media-counter');
                let currentIndex = 0;

                // Fonction pour afficher une image
                function showImage(index) {
                    items.forEach((item, i) => {
                        item.classList.toggle('active', i === index);
                    });
                    dots.forEach((dot, i) => {
                        dot.classList.toggle('active', i === index);
                    });
                    
                    if (counter) {
                        counter.querySelector('.current').textContent = index + 1;
                    }
                    
                    prevBtn.disabled = index === 0;
                    nextBtn.disabled = index === items.length - 1;
                    currentIndex = index;
                }

                // Navigation précédent/suivant
                prevBtn.addEventListener('click', () => {
                    if (currentIndex > 0) {
                        showImage(currentIndex - 1);
                    }
                });

                nextBtn.addEventListener('click', () => {
                    if (currentIndex < items.length - 1) {
                        showImage(currentIndex + 1);
                    }
                });

                // Navigation par points
                dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        showImage(index);
                    });
                });

                // Clic sur image pour agrandir
                items.forEach(item => {
                    item.addEventListener('click', () => {
                        const img = item.querySelector('img');
                        if (img) {
                            modalImage.src = img.src;
                            modalImage.alt = img.alt;
                            modal.style.display = 'block';
                            document.body.style.overflow = 'hidden';
                        }
                    });
                });

                // Initialisation
                showImage(0);
            });

            // Fermeture du modal
            modalClose.addEventListener('click', () => {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            });

            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });

            // Fermeture avec Escape
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && modal.style.display === 'block') {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        });