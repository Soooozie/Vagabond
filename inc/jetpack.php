<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.com/
 *
 * @package Vagabond
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 */
function vagabond_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'vagabond_infinite_scroll_render',
		'footer'    => 'page',
	) );

	//Add theme support - Comic / Featured Content 
	add_theme_support('jetpack-comic');

	add_theme_support('featured-content', array(
		'featured_content_filter' => 'lel_get_featured_posts', 'max_posts' => 20,));

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );
}
add_action( 'after_setup_theme', 'vagabond_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function vagabond_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
		    get_template_part( 'template-parts/content', 'search' );
		else :
		    get_template_part( 'template-parts/content', get_post_format() );
		endif;
	}
}
