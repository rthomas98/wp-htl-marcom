<?php
/**
 * Footer content
 */
?>
<footer id="colophon" class="px-[5%] py-12 md:py-18 lg:py-20 bg-white">
  <div class="container">
    <div class="grid grid-cols-1 gap-x-[8vw] gap-y-12 pb-12 md:gap-y-16 md:pb-18 lg:grid-cols-[0.75fr_1fr] lg:gap-y-4 lg:pb-20">
      <div class="flex flex-col">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="mb-5 md:mb-6">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/web-logo-black (2).svg" 
               alt="<?php echo get_bloginfo('name'); ?>" 
               class="inline-block h-10 w-auto md:h-12" />
        </a>
        <p class="mb-5 text-mine-shaft md:mb-6">Join our newsletter to stay up to date on features and releases.</p>
        <div class="w-full max-w-md">
          <div class="ff-form-newsletter">
            <?php 
            if (function_exists('do_shortcode')) {
                echo do_shortcode('[fluentform id="3"]'); // Replace "1" with your newsletter form ID
            }
            ?>
          </div>
          <div class="mt-3">
            <p class="text-xs text-mine-shaft">
              By subscribing you agree to with our
              <a href="<?php echo esc_url(get_privacy_policy_url()); ?>" class="underline hover:text-cod-gray">Privacy Policy</a>
              and provide consent to receive updates from our company.
            </p>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 items-start gap-y-10 sm:grid-cols-3 sm:gap-x-6 md:gap-x-8 md:gap-y-4">
        <?php if (has_nav_menu('footer-1')) : ?>
          <div class="footer-menu-section">
            <h3 class="mb-5 text-base font-semibold text-cod-gray md:mb-6"><?php echo wp_get_nav_menu_name('footer-1'); ?></h3>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-1',
              'menu_class' => '',
              'container' => false,
              'items_wrap' => '<ul>%3$s</ul>',
              'link_before' => '<span>',
              'link_after' => '</span>',
              'add_li_class' => 'py-3 text-sm text-mine-shaft hover:text-cod-gray'
            ));
            ?>
          </div>
        <?php endif; ?>

        <?php if (has_nav_menu('footer-2')) : ?>
          <div class="footer-menu-section">
            <h3 class="mb-5 text-base font-semibold text-cod-gray md:mb-6"><?php echo wp_get_nav_menu_name('footer-2'); ?></h3>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-2',
              'menu_class' => '',
              'container' => false,
              'items_wrap' => '<ul>%3$s</ul>',
              'link_before' => '<span>',
              'link_after' => '</span>',
              'add_li_class' => 'py-3 text-sm text-mine-shaft hover:text-cod-gray'
            ));
            ?>
          </div>
        <?php endif; ?>

        <div class="flex flex-col items-start justify-start">
          <h2 class="mb-3 font-semibold text-cod-gray md:mb-4">Follow me</h2>
          <ul>
            <?php if (get_theme_mod('social_facebook')) : ?>
              <li class="py-2 text-sm">
                <a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-mine-shaft hover:text-cod-gray">
                  <span><i data-lucide="facebook" class="size-6"></i></span>
                  <span>Facebook</span>
                </a>
              </li>
            <?php endif; ?>
            <?php if (get_theme_mod('social_x')) : ?>
              <li class="py-2 text-sm">
                <a href="<?php echo esc_url(get_theme_mod('social_x')); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-mine-shaft hover:text-cod-gray">
                  <span><i data-lucide="twitter" class="size-6"></i></span>
                  <span>X</span>
                </a>
              </li>
            <?php endif; ?>
            <?php if (get_theme_mod('social_instagram')) : ?>
              <li class="py-2 text-sm">
                <a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-mine-shaft hover:text-cod-gray">
                  <span><i data-lucide="instagram" class="size-6"></i></span>
                  <span>Instagram</span>
                </a>
              </li>
            <?php endif; ?>
            <?php if (get_theme_mod('social_linkedin')) : ?>
              <li class="py-2 text-sm">
                <a href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-mine-shaft hover:text-cod-gray">
                  <span><i data-lucide="linkedin" class="size-6"></i></span>
                  <span>LinkedIn</span>
                </a>
              </li>
            <?php endif; ?>
            <?php if (get_theme_mod('social_youtube')) : ?>
              <li class="py-2 text-sm">
                <a href="<?php echo esc_url(get_theme_mod('social_youtube')); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-mine-shaft hover:text-cod-gray">
                  <span><i data-lucide="youtube" class="size-6"></i></span>
                  <span>Youtube</span>
                </a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="h-px w-full bg-gallery"></div>
    <div class="flex flex-col-reverse items-start justify-between pb-4 pt-6 text-sm md:flex-row md:items-center md:pb-0 md:pt-8">
      <p class="mt-6 text-mine-shaft md:mt-0">
        &copy; <?php echo date('Y'); ?> <?php echo esc_html(get_bloginfo('name')); ?>. All rights reserved.
      </p>
      <?php if (has_nav_menu('footer-legal')) : ?>
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer-legal',
          'menu_class' => 'grid grid-flow-row grid-cols-[max-content] justify-center gap-y-4 text-sm md:grid-flow-col md:gap-x-6 md:gap-y-0',
          'container' => false,
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'link_before' => '',
          'link_after' => '',
          'add_li_class' => 'underline text-mine-shaft hover:text-cod-gray'
        ));
        ?>
      <?php endif; ?>
    </div>
  </div>
</footer>
