<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Seo
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function seo_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'seo_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function seo_jetpack_setup
add_action( 'after_setup_theme', 'seo_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function seo_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function seo_infinite_scroll_render
