<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package yellowbird1
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function yellowbird1_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'yellowbird1_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function yellowbird1_jetpack_setup
add_action( 'after_setup_theme', 'yellowbird1_jetpack_setup' );

function yellowbird1_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function yellowbird1_infinite_scroll_render