<?php

/**
 * Seo functions and definitions
 *
 * @package Seo
 */

 /* ----------------------------------------------------------------------
 Basic
---------------------------------------------------------------------- */
	
if ( ! function_exists( 'seo_setup' ) ) :

function seo_setup() {
	load_theme_textdomain( 'seo', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	
	if ( ! isset( $content_width ) ) $content_width = 600;

			register_nav_menus(array(
			'menu-top' => esc_html__('Menu Top', 'seo' )
		));


	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	add_theme_support( 'custom-background', apply_filters( 'seo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'seo_setup' );


function seo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'seo_content_width', 640 );
}
add_action( 'after_setup_theme', 'seo_content_width', 0 );

	add_theme_support( 'woocommerce' );

/* ----------------------------------------------------------------------
 Register widget area.
---------------------------------------------------------------------- */

function seo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'seo' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',

	) );


	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'seo' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'seo' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'seo' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
				register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'seo' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'seo_widgets_init' );
 
 /* ----------------------------------------------------------------------
 Enqueue scripts and styles
---------------------------------------------------------------------- */

	function seo_scripts() {
	
	wp_enqueue_style( 'seo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'seo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'seo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	function seo_add_editor_styles() {
			add_editor_style( get_template_directory_uri() . '/style.css' );
		}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
	add_action( 'wp_enqueue_scripts', 'seo_scripts' );

/* ----------------------------------------------------------------------
Include
---------------------------------------------------------------------- */

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';

/* ----------------------------------------------------------------------
SEO Customize
---------------------------------------------------------------------- */

function seo_mytheme_customize_register( $wp_customize )
{
	function seo_wpse_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'seo') . '</a>';
}
add_filter( 'excerpt_more', 'seo_wpse_excerpt_more' );

}
add_action( 'customize_register', 'seo_mytheme_customize_register' );
		
/*********************************************************************************************************
* Pagination. 
**********************************************************************************************************/


		if ( ! function_exists( 'seo_pagination' ) ) :

		function seo_pagination() {
			global $wp_query;
			$current = max( 1, get_query_var('paged') );
			$big = 324424442;

			$pagination_return = paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => $current,
				'total' => $wp_query->max_num_pages,
				'next_text' => '&raquo;',
				'prev_text' => '&laquo;'
			) );
			if ( ! empty( $pagination_return ) ) {
				echo '<div class="pagination">';
				echo '<div class="total-pages">';
				echo '</div>';
				echo $pagination_return;
				echo '</div>';
			}

		}
		endif; 

 	$seo_page = array(
		'before'           => '<p>' . __( 'Pages:', 'seo' ),
		'after'            => '</p>',
		'link_before'      => '',
		'link_after'       => '',
		'next_or_number'   => 'number',
		'separator'        => ' ',
		'nextpagelink'     => __( 'Next', 'seo' ),
		'previouspagelink' => __( 'Previous', 'seo' ),
		'pagelink'         => '%',
		'echo'             => 1
	);
 
        wp_link_pages( $seo_page);
