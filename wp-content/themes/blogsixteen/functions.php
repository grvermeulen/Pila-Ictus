<?php
/**
 * BlogSixteen functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BlogSixteen
 */

if ( ! function_exists( 'blogsixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function blogsixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on BlogSixteen, use a find and replace
	 * to change 'blogsixteen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'blogsixteen', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'blogsixteen' )
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-header', apply_filters( 'blogsixteen_custom_header_args', array(
		'default-image' => get_template_directory_uri() . '/images/header.jpg',
		'width'         => 1200,
		'height'        => 400,
		'uploads'       => true,
	) ) );
}
endif; // blogsixteen_setup
add_action( 'after_setup_theme', 'blogsixteen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blogsixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blogsixteen_content_width', 640 );
}
add_action( 'after_setup_theme', 'blogsixteen_content_width', 0 );


/**
*
* Read more to posts
*
*/

function blogsixteen_new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More...', 'blogsixteen' ) . '</a>';
}
add_filter( 'excerpt_more', 'blogsixteen_new_excerpt_more' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blogsixteen_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'blogsixteen' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'blogsixteen_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blogsixteen_scripts() {
	wp_enqueue_style( 'blogsixteen-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Source+Sans+Pro:400,700,300,700italic,400italic', false );

	wp_enqueue_style( 'blogsixteen-style', get_stylesheet_uri() );

	wp_enqueue_script( 'blogsixteen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

		wp_enqueue_script( 'blogsixteen-focus', get_template_directory_uri() . '/js/focus.js', array(), '20160130', true );

	wp_enqueue_script( 'blogsixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blogsixteen_scripts' );


add_filter( 'body_class', 'blogsixteen_sidebar_body_class' );

function blogsixteen_sidebar_body_class( $classes ) {
	$classes[] = is_dynamic_sidebar('sidebar-1') ? 'has-sidebar' : 'no-sidebar';
	return $classes;
}

/**
 * Add editor styles
 */
function blogsixteen_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'blogsixteen_add_editor_styles' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer theme colors
 *
 */
require get_template_directory() . '/inc/theme-colors.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
