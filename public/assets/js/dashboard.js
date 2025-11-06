// Dashboard functionality
document.addEventListener('DOMContentLoaded', function() {
    // Sidebar toggle
    const menuToggle = document.getElementById('menuToggle');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('mobile-open');
        });
    }
    
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('mobile-open');
        });
    }
    
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        if (window.innerWidth <= 768) {
            const isClickInsideSidebar = sidebar.contains(event.target);
            const isClickOnMenuToggle = menuToggle.contains(event.target);
            
            if (!isClickInsideSidebar && !isClickOnMenuToggle && sidebar.classList.contains('mobile-open')) {
                sidebar.classList.remove('mobile-open');
            }
        }
    });
    
    // Active sidebar item
    const currentPath = window.location.pathname;
    const sidebarItems = document.querySelectorAll('.sidebar-link');
    
    sidebarItems.forEach(item => {
        if (item.getAttribute('href') === currentPath) {
            item.closest('.sidebar-item').classList.add('active');
        }
    });
    
    // Chart initialization (placeholder for real charts)
    function initializeCharts() {
        // This would be replaced with actual chart library initialization
        console.log('Charts initialized');
    }
    
    // Notification handling
    const notificationBell = document.querySelector('.btn-icon[data-bs-toggle="dropdown"]');
    if (notificationBell) {
        notificationBell.addEventListener('click', function() {
            // Mark notifications as read
            const badge = this.querySelector('.notification-badge');
            if (badge) {
                badge.style.display = 'none';
            }
        });
    }
    
    // Search functionality
    const searchInput = document.querySelector('.search-input');
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            // Implement search logic here
            console.log('Searching for:', searchTerm);
        });
    }
    
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Initialize charts
    initializeCharts();
    
    // Auto-hide alerts
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    });
    
    // Load statistics
    loadDashboardStats();
});

// Load dashboard statistics
function loadDashboardStats() {
    // Simulate API call
    setTimeout(() => {
        // Update stats cards with real data
        const statCards = document.querySelectorAll('.card-value');
        statCards.forEach(card => {
            const target = parseInt(card.getAttribute('data-target') || '0');
            if (target > 0) {
                animateCounter(card, target);
            }
        });
    }, 1000);
}

// Animate counter
function animateCounter(element, target) {
    let current = 0;
    const increment = target / 50;
    const duration = 1500;
    const stepTime = duration / (target / increment);
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target.toLocaleString();
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current).toLocaleString();
        }
    }, stepTime);
}

// Export functions for global use
window.dashboard = {
    loadStats: loadDashboardStats,
    animateCounter: animateCounter
};