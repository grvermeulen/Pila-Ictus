<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Newton
 */

function newton_jetpack_setup() {
	/**
	 * Add theme support for Infinite Scroll.
	 * See: https://jetpack.me/support/infinite-scroll/
	 */
	add_theme_support( 'infinite-scroll', array(
		'type'		=> 'scroll',
		'container'	=> 'main',
		'render'    => 'newton_infinite_scroll_render',
		'footer'	=> false,
	) );

	/**
	 * Add theme support for Responsive Videos.
	 */
	add_theme_support( 'jetpack-responsive-videos' );

	// Declare theme support for Site Logo.
	add_theme_support( 'site-logo', array(
		'size' => 'newton-logo',
	) );
} // end function newton_jetpack_setup
add_action( 'after_setup_theme', 'newton_jetpack_setup' );

function newton_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function newton_infinite_scroll_render