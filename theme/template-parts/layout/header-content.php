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
    <div class="flex w-full items-center justify-between px-5 md:px-8 lg:px-[5%]">
        <!-- Logo and Mobile Menu Toggle -->
        <div class="flex w-auto items-center justify-between gap-8">
            <div class="flex items-center gap-4">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo py-4 lg:py-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/web-logo-black (2).svg" 
                         alt="<?php echo get_bloginfo('name'); ?>" 
                         class="h-10 w-auto md:h-12" />
                </a>
                <span class="hidden text-lg font-medium text-mine-shaft lg:block">Hebert-Thomas Law, PLLC</span>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="flex h-14 w-14 items-center justify-center rounded-full bg-cod-gray hover:bg-mine-shaft lg:hidden" 
                    aria-label="Toggle Menu" 
                    data-toggle="mobile-menu"
                    aria-expanded="false">
                <i data-lucide="menu" class="size-8 text-white"></i>
            </button>
        </div>

        <!-- Navigation Menu -->
        <div class="mobile-menu invisible absolute left-0 top-full h-[calc(100vh-100%)] w-full transform overflow-auto bg-white opacity-0 transition-all duration-300 ease-in-out lg:visible lg:relative lg:h-auto lg:flex-1 lg:translate-x-0 lg:overflow-visible lg:bg-transparent lg:opacity-100" 
             style="--height-closed:0; --height-open:calc(100vh - var(--header-height, 100%))">
            <div class="px-5 md:px-8 lg:px-0">
                <?php if (has_nav_menu('primary')) : ?>
                    <nav class="primary-navigation py-6 lg:py-0" role="navigation" aria-label="<?php esc_attr_e('Primary Navigation', '_htl'); ?>">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_class' => 'primary-menu flex flex-col lg:flex-row lg:items-center lg:justify-center',
                            'container' => false,
                            'items_wrap' => '<div class="%2$s">%3$s</div>',
                            'walker' => new HTL_Mega_Menu_Walker()
                        ));
                        ?>
                    </nav>
                <?php endif; ?>

                <!-- Mobile CTA Links -->
                <div class="mt-6 flex w-full flex-col gap-y-4 pb-24 lg:hidden">
                    <a href="<?php echo esc_url(get_theme_mod('header_cta_primary_url', '#')); ?>" 
                       class="inline-flex items-center justify-center gap-3 rounded-md border border-gallery bg-white px-5 py-3 text-mine-shaft transition-colors hover:bg-gallery">
                        <?php echo esc_html(get_theme_mod('header_cta_primary_text', 'Contact Us')); ?>
                        <i data-lucide="arrow-right" class="size-4"></i>
                    </a>
                    <a href="<?php echo esc_url(get_theme_mod('header_cta_secondary_url', '#')); ?>" 
                       class="inline-flex items-center justify-center gap-3 rounded-md border border-gallery bg-cod-gray px-5 py-3 text-white transition-colors hover:bg-mine-shaft">
                        <?php echo esc_html(get_theme_mod('header_cta_secondary_text', 'Schedule Consultation')); ?>
                        <i data-lucide="arrow-right" class="size-4"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Desktop CTA Links -->
        <div class="hidden lg:flex lg:gap-4">
            <a href="<?php echo esc_url(get_theme_mod('header_cta_primary_url', '#')); ?>" 
               class="inline-flex items-center justify-center gap-3 rounded-md border border-gallery bg-white px-5 py-2.5 text-mine-shaft transition-colors hover:bg-gallery">
                <?php echo esc_html(get_theme_mod('header_cta_primary_text', 'Contact Us')); ?>
                <i data-lucide="arrow-right" class="size-4"></i>
            </a>
            <a href="<?php echo esc_url(get_theme_mod('header_cta_secondary_url', '#')); ?>" 
               class="inline-flex items-center justify-center gap-3 rounded-md border border-gallery bg-cod-gray px-5 py-2.5 text-white transition-colors hover:bg-mine-shaft">
                <?php echo esc_html(get_theme_mod('header_cta_secondary_text', 'Schedule Consultation')); ?>
                <i data-lucide="arrow-right" class="size-4"></i>
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('site-header');
    const mobileMenuToggle = document.querySelector('[data-toggle="mobile-menu"]');
    const mobileMenu = document.querySelector('.mobile-menu');
    let isOpen = false;
    let lastScroll = 0;

    // Initialize Lucide icons
    lucide.createIcons();

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

    mobileMenuToggle?.addEventListener('click', function() {
        isOpen = !isOpen;
        this.setAttribute('aria-expanded', isOpen);
        
        if (isOpen) {
            mobileMenu.classList.remove('invisible', 'opacity-0', 'translate-x-full');
            document.body.style.overflow = 'hidden';
            this.innerHTML = '<i data-lucide="x" class="size-8 text-white"></i>';
            // Ensure header is visible when menu is open
            header.classList.remove('-translate-y-full');
        } else {
            mobileMenu.classList.add('invisible', 'opacity-0', 'translate-x-full');
            document.body.style.overflow = '';
            this.innerHTML = '<i data-lucide="menu" class="size-8 text-white"></i>';
        }
        
        // Re-initialize icons after DOM change
        lucide.createIcons();
    });

    // Close menu on window resize if open (e.g., when switching to desktop view)
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024 && isOpen) { // 1024px is the 'lg' breakpoint
            mobileMenuToggle.click();
        }
    });
});
</script>
