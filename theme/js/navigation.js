jQuery(document).ready(function($) {
    // Mobile menu toggle
    const mobileToggle = $('.mobile-menu-toggle');
    const mobileMenu = $('#mobile-menu');

    mobileToggle.on('click', function() {
        mobileMenu.slideToggle();
        $(this).toggleClass('active');
        
        // Toggle icon
        const icon = $(this).find('[data-lucide]');
        if ($(this).hasClass('active')) {
            icon.attr('data-lucide', 'x');
        } else {
            icon.attr('data-lucide', 'menu');
        }
        
        if (window.lucide) {
            window.lucide.createIcons();
        }
    });

    // Mobile submenu toggles
    $('.menu-item-has-children > a').on('click', function(e) {
        if (window.innerWidth >= 1024) return; // Don't handle on desktop
        
        e.preventDefault();
        const $submenu = $(this).siblings('.sub-menu');
        const $icon = $(this).find('[data-lucide="chevron-down"]');
        
        // Close other submenus at the same level
        const $siblings = $(this).parent().siblings('.menu-item-has-children');
        $siblings.find('.sub-menu').slideUp();
        $siblings.find('[data-lucide="chevron-down"]').removeClass('rotate-180');
        
        // Toggle current submenu
        $submenu.slideToggle();
        $icon.toggleClass('rotate-180');
    });

    // Handle resize
    $(window).on('resize', function() {
        if (window.innerWidth >= 1024) {
            mobileMenu.hide();
            mobileToggle.removeClass('active');
            $('.sub-menu').removeAttr('style');
            $('[data-lucide="chevron-down"]').removeClass('rotate-180');
            
            // Reset menu icon
            mobileToggle.find('[data-lucide]').attr('data-lucide', 'menu');
            if (window.lucide) {
                window.lucide.createIcons();
            }
        }
    });
});
