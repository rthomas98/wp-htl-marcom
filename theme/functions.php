<?php
/**
 * _htl functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _htl
 */

if ( ! defined( '_HTL_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( '_HTL_VERSION', '0.1.0' );
}

if ( ! defined( '_HTL_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `_htl_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'_HTL_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( '_htl_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function _htl_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on _htl, use a find and replace
		 * to change '_htl' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( '_htl', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', '_htl' ),
				'menu-2' => __( 'Footer Menu', '_htl' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', '_htl_setup' );

/**
 * Register nav menus
 */
function _htl_register_nav_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', '_htl'),
        'footer'  => __('Footer Menu', '_htl'),
    ));
}
add_action('after_setup_theme', '_htl_register_nav_menus');

/**
 * Register footer menus
 */
function _htl_register_footer_menus() {
    register_nav_menus(array(
        'footer-1' => __('Footer Menu 1', '_htl'),
        'footer-2' => __('Footer Menu 2', '_htl'),
        'footer-legal' => __('Footer Legal Menu', '_htl'),
    ));
}
add_action('after_setup_theme', '_htl_register_footer_menus');

/**
 * Add custom class to menu items
 */
function _htl_add_menu_li_class($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', '_htl_add_menu_li_class', 10, 3);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _htl_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', '_htl' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', '_htl' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_htl_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _htl_scripts() {
    // Enqueue fonts
    wp_enqueue_style('htl-fonts', get_template_directory_uri() . '/css/fonts.css', array(), _HTL_VERSION);
    
    // Enqueue Lucide Icons
    wp_enqueue_script('lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true);
    wp_enqueue_script('lucide-icons-init', 'https://unpkg.com/lucide@latest/dist/umd/lucide.min.js', array('lucide-icons'), null, true);
    
    // Enqueue theme styles
    wp_enqueue_style('_htl-style', get_stylesheet_uri(), array(), _HTL_VERSION);
    
    // Enqueue Fluent Forms custom styles
    wp_enqueue_style('_htl-fluent-forms', get_template_directory_uri() . '/assets/css/fluent-forms.css', array(), _HTL_VERSION);

    // Enqueue theme scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('_htl-script', get_template_directory_uri() . '/js/script.min.js', array('jquery'), _HTL_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action( 'wp_enqueue_scripts', '_htl_scripts' );

/**
 * Enqueue the block editor script.
 */
function _htl_enqueue_block_editor_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'_htl-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			_HTL_VERSION,
			true
		);
		wp_add_inline_script( '_htl-editor', "tailwindTypographyClasses = '" . esc_attr( _HTL_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', '_htl_enqueue_block_editor_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function _htl_tinymce_add_class( $settings ) {
	$settings['body_class'] = _HTL_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', '_htl_tinymce_add_class' );

/**
 * Add social media settings to customizer
 */
function _htl_social_media_customizer($wp_customize) {
    // Add Social Media Section
    $wp_customize->add_section('social_media', array(
        'title' => __('Social Media', '_htl'),
        'priority' => 30,
    ));

    // Facebook
    $wp_customize->add_setting('social_facebook', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_facebook', array(
        'label' => __('Facebook URL', '_htl'),
        'section' => 'social_media',
        'type' => 'url'
    ));

    // Instagram
    $wp_customize->add_setting('social_instagram', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_instagram', array(
        'label' => __('Instagram URL', '_htl'),
        'section' => 'social_media',
        'type' => 'url'
    ));

    // X (Twitter)
    $wp_customize->add_setting('social_x', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_x', array(
        'label' => __('X (Twitter) URL', '_htl'),
        'section' => 'social_media',
        'type' => 'url'
    ));

    // LinkedIn
    $wp_customize->add_setting('social_linkedin', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_linkedin', array(
        'label' => __('LinkedIn URL', '_htl'),
        'section' => 'social_media',
        'type' => 'url'
    ));

    // YouTube
    $wp_customize->add_setting('social_youtube', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('social_youtube', array(
        'label' => __('YouTube URL', '_htl'),
        'section' => 'social_media',
        'type' => 'url'
    ));
}
add_action('customize_register', '_htl_social_media_customizer');

/**
 * Set posts per page for blog
 */
function _htl_set_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query()) {
        if (is_home() || is_archive()) {
            $query->set('posts_per_page', 20);
        }
    }
}
add_action('pre_get_posts', '_htl_set_posts_per_page');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

// Icon functions.
require get_template_directory() . '/inc/icon-functions.php';

// Include custom menu walkers
require get_template_directory() . '/inc/class-htl-mega-menu-walker.php';
require get_template_directory() . '/inc/class-htl-mobile-menu-walker.php';

// Include ACF Blocks registration
require_once get_template_directory() . '/inc/blocks.php';

/**
 * Custom pagination function
 */
function _htl_custom_pagination() {
    global $wp_query;
    
    if ($wp_query->max_num_pages <= 1) return;

    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'array',
        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polyline points="15 18 9 12 15 6"></polyline></svg>',
        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4"><polyline points="9 18 15 12 9 6"></polyline></svg>',
    ));

    if (is_array($pages)) {
        echo '<nav class="flex items-center justify-center space-x-2">';
        foreach ($pages as $page) {
            $active = strpos($page, 'current') !== false;
            $class = $active 
                ? 'bg-black text-white' 
                : 'text-gray-600 hover:text-black hover:bg-gray-100';
            echo '<div class="' . $class . ' inline-flex h-8 w-8 items-center justify-center rounded-lg text-sm font-semibold transition-colors">';
            echo str_replace('page-numbers', '', $page);
            echo '</div>';
        }
        echo '</nav>';
    }
}
