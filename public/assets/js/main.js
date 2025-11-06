// Navigation scroll effect
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    const heroSection = document.querySelector('.hero-section');
    
    function updateNavbar() {
        if (window.scrollY > 100) {
            navbar.classList.remove('navbar-transparent');
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.add('navbar-transparent');
            navbar.classList.remove('scrolled');
        }
    }
    
    // Initial check
    if (heroSection) {
        navbar.classList.add('navbar-transparent');
        updateNavbar();
        
        // Update on scroll
        window.addEventListener('scroll', updateNavbar);
    } else {
        navbar.classList.add('scrolled');
    }
    
    // Mobile menu close on click
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 992) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                    toggle: false
                });
                bsCollapse.hide();
            }
        });
    });
    
    // Active page highlighting
    const currentPage = document.body.getAttribute('data-page') || 'accueil';
    const activeLinks = document.querySelectorAll(`[href="<?= site_url('${currentPage}') ?>"]`);
    
    activeLinks.forEach(link => {
        link.classList.add('active');
    });
});