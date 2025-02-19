<?php
/**
 * Header content template
 *
 * @package _htl
 */

// Get the custom logo URL
$logo_url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
?>

<section id="site-header" class="fixed <?php echo is_admin_bar_showing() ? 'top-8 lg:top-9' : 'top-0'; ?> z-50 w-full border-b border-gallery bg-white/95 backdrop-blur-sm transition-all duration-200">
    <div class="w-full flex items-center justify-between gap-4 px-5 md:px-8 lg:px-4 xl:px-8 2xl:px-[5%]">
        <!-- Logo Section -->
        <div class="flex items-center gap-4 lg:w-[250px] xl:w-[280px] 2xl:w-[350px]">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo shrink-0 py-4 lg:py-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/web-logo-black (2).svg" 
                     alt="<?php echo get_bloginfo('name'); ?>" 
                     class="h-10 w-auto md:h-12" />
            </a>
            <span class="hidden whitespace-nowrap text-lg font-medium text-mine-shaft lg:text-sm xl:text-base 2xl:text-lg lg:block">Hebert-Thomas Law, PLLC</span>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-center">
            <?php if (has_nav_menu('primary')) : ?>
                <nav class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', '_htl'); ?>">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'flex items-center gap-3 lg:text-sm xl:text-base 2xl:gap-6',
                        'container' => false,
                        'walker' => new HTL_Mega_Menu_Walker()
                    ));
                    ?>
                </nav>
            <?php endif; ?>
        </div>

        <!-- Desktop CTA Buttons -->
        <div class="hidden lg:flex lg:w-[250px] xl:w-[280px] 2xl:w-[350px] lg:items-center lg:justify-end lg:gap-2 xl:gap-3">
            <a href="<?php echo esc_url(get_theme_mod('header_cta_primary_url', '#')); ?>" 
               class="inline-flex shrink-0 items-center justify-center gap-1.5 rounded-md border border-gallery bg-white px-2.5 py-1.5 lg:text-sm xl:text-base text-mine-shaft transition-colors hover:bg-gallery xl:px-3 xl:py-2 2xl:px-4 2xl:py-2.5">
                <?php echo esc_html(get_theme_mod('header_cta_primary_text', 'Contact Us')); ?>
                <i data-lucide="arrow-right" class="size-3.5 lg:size-4 shrink-0"></i>
            </a>
            <a href="<?php echo esc_url(get_theme_mod('header_cta_secondary_url', '#')); ?>" 
               class="inline-flex shrink-0 items-center justify-center gap-1.5 rounded-md border border-gallery bg-cod-gray px-2.5 py-1.5 lg:text-sm xl:text-base text-white transition-colors hover:bg-cod-gray hover:text-white xl:px-3 xl:py-2 2xl:px-4 2xl:py-2.5">
                <?php echo esc_html(get_theme_mod('header_cta_secondary_text', 'Schedule Consultation')); ?>
                <i data-lucide="arrow-right" class="size-3.5 lg:size-4 shrink-0"></i>
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <button type="button" class="mobile-menu-toggle lg:hidden inline-flex items-center justify-center rounded-md p-2.5 text-mine-shaft" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <i data-lucide="menu" class="block size-6" aria-hidden="true"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden" id="mobile-menu">
        <div class="space-y-1 px-4 pb-3 pt-2">
            <?php if (has_nav_menu('primary')) : ?>
                <nav class="mobile-navigation" role="navigation" aria-label="<?php esc_attr_e('Mobile Navigation', '_htl'); ?>">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'space-y-2',
                        'container' => false,
                        'walker' => new HTL_Mega_Menu_Walker()
                    ));
                    ?>
                </nav>
            <?php endif; ?>
            
            <!-- Mobile CTA Buttons -->
            <div class="mt-4 flex flex-col gap-2">
                <a href="<?php echo esc_url(get_theme_mod('header_cta_primary_url', '#')); ?>" 
                   class="inline-flex items-center justify-center gap-1.5 rounded-md border border-gallery bg-white px-4 py-2 text-mine-shaft">
                    <?php echo esc_html(get_theme_mod('header_cta_primary_text', 'Contact Us')); ?>
                    <i data-lucide="arrow-right" class="size-4"></i>
                </a>
                <a href="<?php echo esc_url(get_theme_mod('header_cta_secondary_url', '#')); ?>" 
                   class="inline-flex items-center justify-center gap-1.5 rounded-md border border-gallery bg-cod-gray px-4 py-2 text-white">
                    <?php echo esc_html(get_theme_mod('header_cta_secondary_text', 'Schedule Consultation')); ?>
                    <i data-lucide="arrow-right" class="size-4"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* Desktop submenu styles */
@media (min-width: 1024px) {
    .primary-menu > li {
        position: relative;
    }
    .primary-menu > li > .sub-menu {
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 200px;
        background: white;
        padding: 0.5rem 0;
        border: 1px solid #E5E7EB;
        border-radius: 0.375rem;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.2s ease-in-out;
    }
    .primary-menu > li:hover > .sub-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .primary-menu .sub-menu li {
        padding: 0.5rem 1rem;
    }
    .primary-menu .sub-menu li:hover {
        background-color: #F3F4F6;
    }
}

/* Mobile menu styles */
@media (max-width: 1023px) {
    .menu-item-has-children > .sub-menu {
        display: none;
        transition: all 0.3s ease-in-out;
    }
    
    .menu-item-has-children.is-active > .sub-menu {
        display: block;
    }
    
    .menu-item-has-children.is-active > a [data-lucide="chevron-down"] {
        transform: rotate(180deg);
    }
    
    [data-lucide="chevron-down"] {
        transition: transform 0.3s ease-in-out;
    }
}

/* Desktop menu styles */
@media (min-width: 1024px) {
    .menu-item-has-children:hover > .sub-menu {
        opacity: 1 !important;
        visibility: visible !important;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Lucide icons
    if (window.lucide) {
        window.lucide.createIcons();
    }

    const header = document.getElementById('site-header');
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    let isOpen = false;
    let lastScroll = 0;

    // Set initial header height variable
    document.documentElement.style.setProperty('--header-height', header.offsetHeight + 'px');

    // Add padding to body to prevent content jump
    const adminBarHeight = document.getElementById('wpadminbar')?.offsetHeight || 0;
    document.body.style.paddingTop = (header.offsetHeight + adminBarHeight) + 'px';

    // Update header height on resize
    window.addEventListener('resize', () => {
        const currentAdminBarHeight = document.getElementById('wpadminbar')?.offsetHeight || 0;
        document.documentElement.style.setProperty('--header-height', header.offsetHeight + 'px');
        document.body.style.paddingTop = (header.offsetHeight + currentAdminBarHeight) + 'px';
    });

    // Handle scroll behavior
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll <= 0) {
            header.classList.remove('-translate-y-full');
            return;
        }

        if (currentScroll > lastScroll && !isOpen && currentScroll > 100) {
            // Scrolling down & menu closed & scrolled past 100px
            header.classList.add('-translate-y-full');
        } else {
            // Scrolling up or menu open
            header.classList.remove('-translate-y-full');
        }

        lastScroll = currentScroll;
    });

    // Mobile menu toggle
    const menuIcon = mobileMenuToggle.querySelector('[data-lucide]');

    mobileMenuToggle.addEventListener('click', function() {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
        
        // Toggle icon
        menuIcon.setAttribute('data-lucide', isExpanded ? 'menu' : 'x');
        
        if (window.lucide) {
            window.lucide.createIcons();
        }
    });

    // Handle mobile dropdown menus
    const menuItems = document.querySelectorAll('.menu-item-has-children > a');
    
    menuItems.forEach(item => {
        item.addEventListener('click', function(e) {
            if (window.innerWidth >= 1024) return;
            e.preventDefault();
            e.stopPropagation();
            
            const parent = this.parentElement;
            const wasActive = parent.classList.contains('is-active');
            
            // Close all dropdowns
            document.querySelectorAll('.menu-item-has-children').forEach(item => {
                item.classList.remove('is-active');
            });
            
            // Toggle current dropdown
            if (!wasActive) {
                parent.classList.add('is-active');
            }
        });
    });

    // Close mobile menu on window resize
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

    // Close menu on window resize if open (e.g., when switching to desktop view)
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024 && isOpen) { // 1024px is the 'lg' breakpoint
            mobileMenuToggle.click();
        }
    });
});
</script>
