<?php

/**
 * bsc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bsc
 */
if ( ! defined( 'bsc_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'bsc_VERSION', '0.2.1' );
}

if ( ! defined( 'bsc_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `bsc_content_class`
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
		'bsc_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'bsc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bsc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bsc, use a find and replace
		 * to change 'bsc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bsc', get_template_directory() . '/languages' );

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
				'menu-top-header' => __( 'Menu Top Header', 'bsc' ),
				'menu-1' => __( 'Menu Chính', 'bsc' ),
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
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */


		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'bsc_setup' );


/**
 * Enqueue scripts and styles.
 */
function bsc_scripts() {

	if ( is_404() ) {
		wp_enqueue_style( 'bsc-404', get_template_directory_uri() . '/css/404.min.css', array(), bsc_VERSION );
	}
	wp_enqueue_style( 'bsc-css-libs', get_template_directory_uri() . '/assets/libs/frontend-libs.min.css' );
	wp_enqueue_style( 'bsc-css-font', get_template_directory_uri() . '/assets/fonts/font.css' );
	wp_enqueue_style( 'bsc-style', get_stylesheet_uri(), array(), bsc_VERSION );

	//JS
	wp_enqueue_script( 'bsc-js-libs', get_template_directory_uri() . '/assets/libs/frontend-libs.js', array(), bsc_VERSION, true );
	if ( class_exists( 'WPCF7' ) ) {
		wp_enqueue_style( 'bsc-alert', get_template_directory_uri() . '/assets/libs/frontend-alert.min.css' );
		wp_enqueue_script( 'bsc-jquery_alert', get_template_directory_uri() . '/assets/libs/frontend-alert.js', array(), bsc_VERSION, true );
	}
	wp_enqueue_script( 'bsc-script', get_template_directory_uri() . '/js/script.min.js', array(), bsc_VERSION, true );

	wp_localize_script( 'bsc-script', 'ajaxurl', array(
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
		'security' => wp_create_nonce( 'common_nonce' ),
	) );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bsc_scripts' );



/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer Wordpress.
 */
require get_template_directory() . '/inc/customizer-wp.php';

/**
 * Customizer Widget.
 */
require get_template_directory() . '/inc/customizer-widget.php';

/**
 * Customizer Ajax.
 */
require get_template_directory() . '/inc/customizer-ajax.php';

/**
 * Customizer API.
 */
require get_template_directory() . '/inc/customizer-api.php';

/**
 * Customizer CPT.
 */
require get_template_directory() . '/inc/customizer-cpt.php';

/**
 * Customizer CF7.
 */
require get_template_directory() . '/inc/customizer-cf7.php';

/**
 * Customizer Sitemap.
 */
require get_template_directory() . '/inc/customizer-sitemap.php';

/**
 * Hide Custom Theme
 */
define( 'DISALLOW_FILE_EDIT', true );
add_filter( 'acf/settings/show_admin', '__return_false' );
