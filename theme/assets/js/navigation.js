jQuery(document).ready(function($) {
    // Mobile menu toggle
    const $mobileMenuToggle = $('.mobile-menu-toggle');
    const $mobileMenu = $('#mobile-menu');
    const $menuIcon = $mobileMenuToggle.find('[data-lucide="menu"]');

    $mobileMenuToggle.on('click', function() {
        const isExpanded = $(this).attr('aria-expanded') === 'true';
        $(this).attr('aria-expanded', !isExpanded);
        $mobileMenu.toggleClass('hidden');
        
        // Toggle menu icon
        if (!isExpanded) {
            $menuIcon.attr('data-lucide', 'x');
        } else {
            $menuIcon.attr('data-lucide', 'menu');
        }
        // Refresh Lucide icons
        if (window.lucide) {
            window.lucide.createIcons();
        }
    });

    // Handle mobile dropdown menus
    $('.has-submenu > a').on('click', function(e) {
        // Only handle dropdowns on mobile
        if (window.innerWidth >= 1024) return;
        
        e.preventDefault();
        const $this = $(this);
        const $submenu = $this.siblings('[data-submenu]');
        const $chevron = $this.find('[data-lucide="chevron-down"]');
        
        // Toggle aria-expanded
        const isExpanded = $this.attr('aria-expanded') === 'true';
        $this.attr('aria-expanded', !isExpanded);
        
        // Animate submenu
        if ($submenu.length) {
            if (!isExpanded) {
                $submenu.css('maxHeight', $submenu[0].scrollHeight + 'px');
                $chevron.css('transform', 'rotate(180deg)');
            } else {
                $submenu.css('maxHeight', '0');
                $chevron.css('transform', 'rotate(0)');
            }
        }
    });

    // Close mobile menu on window resize
    $(window).on('resize', function() {
        if (window.innerWidth >= 1024) {
            $mobileMenu.addClass('hidden');
            $mobileMenuToggle.attr('aria-expanded', 'false');
            $menuIcon.attr('data-lucide', 'menu');
            if (window.lucide) {
                window.lucide.createIcons();
            }
            
            // Reset all submenus
            $('[data-submenu]').css('maxHeight', '');
            $('[data-lucide="chevron-down"]').css('transform', '');
            $('.has-submenu > a').attr('aria-expanded', 'false');
        }
    });
});
