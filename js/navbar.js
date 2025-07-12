// Solution complète - Désactiver Bootstrap JS et prendre le contrôle total
document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('#navbarCollapse');
    
    if (navbarToggler && navbarCollapse) {
        
        // Désactiver Bootstrap data-toggle pour éviter les conflits
        navbarToggler.removeAttribute('data-toggle');
        navbarToggler.removeAttribute('data-target');
        
        // Gestion manuelle du toggle
        navbarToggler.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            if (navbarCollapse.classList.contains('show')) {
                // Fermer le menu
                navbarCollapse.classList.remove('show');
                if (!navbarCollapse.classList.contains('collapse')) {
                    navbarCollapse.classList.add('collapse');
                }
                navbarCollapse.style.height = '';
                this.setAttribute('aria-expanded', 'false');
            } else {
                // Ouvrir le menu
                navbarCollapse.classList.add('show');
                navbarCollapse.classList.remove('collapse');
                this.setAttribute('aria-expanded', 'true');
            }
        });
        
        // Fermer le menu quand on clique sur un lien
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    navbarCollapse.classList.remove('show');
                    if (!navbarCollapse.classList.contains('collapse')) {
                        navbarCollapse.classList.add('collapse');
                    }
                    navbarCollapse.style.height = '';
                    navbarToggler.setAttribute('aria-expanded', 'false');
                }
            });
        });
        
        // Fermer le menu quand on clique en dehors
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.navbar') && navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                if (!navbarCollapse.classList.contains('collapse')) {
                    navbarCollapse.classList.add('collapse');
                }
                navbarCollapse.style.height = '';
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        });
        
        // Gérer le redimensionnement de la fenêtre
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 992) {
                navbarCollapse.classList.remove('show');
                if (!navbarCollapse.classList.contains('collapse')) {
                    navbarCollapse.classList.add('collapse');
                }
                navbarCollapse.style.height = '';
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        });
    }
});