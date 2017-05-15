<?php
/**
 * gotravel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gotravel
 */

if ( ! function_exists( 'gotravel_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gotravel_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gotravel, use a find and replace
	 * to change 'gotravel' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'gotravel', get_template_directory() . '/languages' );

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
	add_image_size( 'tour-thumb', 400, 400, true );
	add_image_size( 'tour-banner', 1920, 1080, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'gotravel' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gotravel_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'gotravel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gotravel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gotravel_content_width', 640 );
}
add_action( 'after_setup_theme', 'gotravel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gotravel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gotravel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gotravel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Header Search', 'gotravel' ),
		'id'            => 'header-search',
		'description'   => esc_html__( 'Add widgets here.', 'gotravel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gotravel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gotravel_scripts() {
	wp_enqueue_style( 'gotravel-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gotravel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gotravel-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'gotravel-bundle', get_template_directory_uri() . '/js/bundle.js', array(), '20170313', true );
}
add_action( 'wp_enqueue_scripts', 'gotravel_scripts' );


add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'tour', 'excerpt' );
}

function wpd_tours_query( $query ){ //para cambiar el post por pagina en archive 
    if( ! is_admin()
        && $query->is_post_type_archive( 'tour' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 12 );
    }
}
add_action( 'pre_get_posts', 'wpd_tours_query' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

require get_template_directory() . '/inc/cpt.php';
