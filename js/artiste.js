 // Initialisation AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });

        // Animation des boutons
        document.querySelectorAll('.btn-artiste, .btn-activite').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.05)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Effet parallaxe léger sur les icônes flottantes
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            document.querySelectorAll('.floating-icon').forEach((icon, index) => {
                icon.style.transform = `translateY(${rate * (index + 1) * 0.2}px)`;
            });
        });