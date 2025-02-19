document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = mobileMenuToggle.querySelector('[data-lucide="menu"]');

    if (mobileMenuToggle && mobileMenu) {
        mobileMenuToggle.addEventListener('click', function() {
            const isExpanded = mobileMenuToggle.getAttribute('aria-expanded') === 'true';
            mobileMenuToggle.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
            
            // Toggle menu icon
            if (!isExpanded) {
                menuIcon.setAttribute('data-lucide', 'x');
            } else {
                menuIcon.setAttribute('data-lucide', 'menu');
            }
            // Refresh Lucide icons
            if (window.lucide) {
                window.lucide.createIcons();
            }
        });
    }

    // Dropdown toggles
    const dropdownToggles = document.querySelectorAll('[data-dropdown-toggle]');
    
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            // Only handle dropdowns on mobile
            if (window.innerWidth >= 1024) return;
            
            e.preventDefault();
            const dropdownContainer = this.closest('[data-dropdown]');
            const submenu = dropdownContainer.querySelector('[data-submenu]');
            const chevron = this.querySelector('[data-lucide="chevron-down"]');
            
            // Toggle aria-expanded
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            
            // Animate submenu height
            if (submenu) {
                if (!isExpanded) {
                    // Get the height of the submenu content
                    submenu.style.maxHeight = submenu.scrollHeight + 'px';
                    chevron.style.transform = 'rotate(180deg)';
                } else {
                    submenu.style.maxHeight = '0';
                    chevron.style.transform = 'rotate(0)';
                }
            }
        });
    });

    // Close mobile menu on window resize if screen becomes desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024) {
            mobileMenu.classList.add('hidden');
            mobileMenuToggle.setAttribute('aria-expanded', 'false');
            menuIcon.setAttribute('data-lucide', 'menu');
            if (window.lucide) {
                window.lucide.createIcons();
            }
        }
    });
});
