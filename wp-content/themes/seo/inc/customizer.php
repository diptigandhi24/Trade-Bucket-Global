<?php
/**
 * Seo Theme Customizer
 *
 * @package Seo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function seo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'seo_customize_register' );

/*********************************************************************************
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
**********************************************************************************/

function seo_customize_preview_js() {
	wp_enqueue_script( 'seo_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'seo_customize_preview_js' );
		
		
/*********************************************************************************
 * Canonical
**********************************************************************************/

if ( ! function_exists( 'seo_canonical' ) ) :
	function seo_canonical( $wp_customize ) {
 
		$wp_customize->add_section( 'seo_canonical_section' , array(
			'title'       => __( 'Home Page Canonical', 'seo' ),
			'description' => __( 'Your Canonical URL - The Canonical URL tag attribute is similar in many ways to a 301 redirect from an SEO perspective. In essence, you\'re telling the engines that multiple pages should be considered as one (which a 301 does), without actually redirecting visitors to the new URL <a href="https://moz.com/blog/canonical-url-tag-the-most-important-advancement-in-seo-practices-since-sitemaps">Read more</a>', 'seo' ),
		) );
		
		$wp_customize->add_setting( 'seo_canonical', array (
			'sanitize_callback' => 'esc_url',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_canonical', array(
			'label'    => __( 'Enter your canonical', 'seo' ),
			'section'  => 'seo_canonical_section',
			'settings' => 'seo_canonical',
		) ) );
		
}
endif;
		add_action('customize_register', 'seo_canonical');


/*********************************************************************************
 * Google Verification
**********************************************************************************/

if ( ! function_exists( 'seo_google_verification' ) ) :
	function seo_google_verification( $wp_customize ) {
 
		$wp_customize->add_section( 'google_verification_section' , array(
			'title'       => __( 'Google verification', 'seo' ),
			'description' => __( 'Your google verification code - You can use Google Analytics or Google Tag Manager to verify your ownership of a site on Google Search Console. Go to Webmaster Central and click Add a site. Enter the URL of your site. Two tabs are provided: Recommended method and Alternate methods. If neither Google Analytics nor Google Tag Manager is recommended, select Alternate methods. Select either Google Analytics or Google Tag Manager and click Verify.<a href="https://support.google.com/analytics/answer/1142414?hl=en">Read more</a>', 'seo' ),
		) );
		
		$wp_customize->add_setting( 'seo_google_verification', array (
			'sanitize_callback' => 'esc_html',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_google_verification', array(
			'label'    => __( 'Enter your google verification code', 'seo' ),
			'section'  => 'google_verification_section',
			'settings' => 'seo_google_verification',
		) ) );
		
}
endif;
		add_action('customize_register', 'seo_google_verification');

/*********************************************************************************
 * Shortcut Icon
**********************************************************************************/

if ( ! function_exists( 'seo_shortcut_icon' ) ) :
	function seo_shortcut_icon( $wp_customize ) {
 
		$wp_customize->add_section( 'google_shortcut_icon_section' , array(
			'title'       => __( 'Shortcut Icon', 'seo' ),
			'description' => __( 'These options allow you to post url shortcut icon:', 'seo' ),
		) );
		
		$wp_customize->add_setting( 'seo_google_shortcut_icon', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_google_shortcut_icon', array(
			'label'    => __( 'Enter your Shortcut Icon', 'seo' ),
			'section'  => 'google_shortcut_icon_section',
			'settings' => 'seo_google_shortcut_icon',
		) ) );
		
}
endif;
		add_action('customize_register', 'seo_shortcut_icon');	
		
/***********************************************************************************
Slide
***********************************************************************************/	

if ( ! function_exists( 'seo_slide' ) ) :
	function seo_slide( $wp_customize ) {
 
		$wp_customize->add_section( 'slide_section' , array(
			'title'       => __( 'Slide', 'seo' ),
			'description' => __( 'Home Page Slide:', 'seo' ),
		) );
		
		
		$wp_customize->add_setting( 'seo_slide_img', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_img', array(
			'label'    => __( 'Enter your Slide Img URL', 'seo' ),
			'section'  => 'slide_section',
			'settings' => 'seo_slide_img',
		) ) );
		
		
		$wp_customize->add_setting( 'seo_slide_title', array (
			'sanitize_callback' => 'esc_html',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_title', array(
			'label'    => __( 'Enter your Slide Title', 'seo' ),
			'section'  => 'slide_section',
			'settings' => 'seo_slide_title',
		) ) );
		
		$wp_customize->add_setting( 'seo_slide_url', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_url', array(
			'label'    => __( 'Enter your Slide URL', 'seo' ),
			'section'  => 'slide_section',
			'settings' => 'seo_slide_url',
		) ) );
		
		$wp_customize->add_setting( 'seo_slide_content', array (
			'sanitize_callback' => 'esc_html',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_content', array(
			'label'    => __( 'Enter your Slide Content', 'seo' ),
			'section'  => 'slide_section',
			'settings' => 'seo_slide_content',
			'type'     => 'textarea',
		) ) );
		
}
endif;
		add_action('customize_register', 'seo_slide');
		
/***********************************************************************************
Homepage Images
***********************************************************************************/
	
if ( ! function_exists( 'seo_featured' ) ) :
	function seo_featured( $wp_customize ) {
 
		$wp_customize->add_section( 'slide_featured' , array(
			'title'       => __( 'Images Homepage', 'seo' ),
			'description' => __( 'Homepage Images - allows you to publish 3 images with explanation and url.', 'seo' ),
		) );
		
		$wp_customize->add_setting( 'seo_slide_featured', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_featured', array(
			'label'    => __( 'Enter Img URL 1:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_slide_featured',
		) ) );
		
		$wp_customize->add_setting( 'seo_slide_featured_title', array (
			'sanitize_callback' => 'esc_html',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_featured_title', array(
			'label'    => __( 'Enter Title 1:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_slide_featured_title',
		) ) );
		
		$wp_customize->add_setting( 'seo_slide_featured_url', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_featured_url', array(
			'label'    => __( 'Enter URL 1:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_slide_featured_url',
		) ) );

		$wp_customize->add_setting( 'seo_featured_content', array (
			'sanitize_callback' => 'esc_html',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_featured_content', array(
			'label'    => __( 'Enter Explanation 1:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_featured_content',
			'type'     => 'textarea',
		) ) );		

/* ********************************************************************************** */	

        $wp_customize->add_setting( 'seo_slide_featured1', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_featured1', array(
			'label'    => __( 'Enter Img URL 2:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_slide_featured1',
		) ) );
		
		$wp_customize->add_setting( 'seo_slide_featured_title1', array (
			'sanitize_callback' => 'esc_html',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_featured_title1', array(
			'label'    => __( 'Enter Title 2:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_slide_featured_title1',
		) ) );
		
		$wp_customize->add_setting( 'seo_slide_featured_url1', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_featured_url1', array(
			'label'    => __( 'Enter URL 2:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_slide_featured_url1',
		) ) );

		$wp_customize->add_setting( 'seo_featured_content1', array (
			'sanitize_callback' => 'esc_html',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_featured_content1', array(
			'label'    => __( 'Enter Explanation 2:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_featured_content1',
			'type'     => 'textarea',
		) ) );	

/* ********************************************************************************** */			

        $wp_customize->add_setting( 'seo_slide_featured2', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_featured2', array(
			'label'    => __( 'Enter Img URL 3:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_slide_featured2',
		) ) );
		
		$wp_customize->add_setting( 'seo_slide_featured_title2', array (
			'sanitize_callback' => 'esc_html',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_featured_title2', array(
			'label'    => __( 'Enter Title 3:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_slide_featured_title2',
		) ) );
		
		$wp_customize->add_setting( 'seo_slide_featured_url2', array (
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_slide_featured_url2', array(
			'label'    => __( 'Enter URL 3:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_slide_featured_url2',
		) ) );

		$wp_customize->add_setting( 'seo_featured_content2', array (
			'sanitize_callback' => 'esc_html',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_featured_content2', array(
			'label'    => __( 'Enter Explanation 3:', 'seo' ),
			'section'  => 'slide_featured',
			'settings' => 'seo_featured_content2',
			'type'     => 'textarea',
		) ) );	
}
endif;
		add_action('customize_register', 'seo_featured');	

/*********************************************************************************
 * Seo - how to use
**********************************************************************************/


if ( ! function_exists( 'seo_how_to_use' ) ) :
	function seo_how_to_use( $wp_customize ) {
 
		$wp_customize->add_section( 'seo_how_to_use_section' , array(
			'title'       => __( 'How to use Seo Theme', 'seo' ),
			'description' => __( '<a class="button button-primary" href="http://seosthemes.com/seo-wordpress-theme/">How to use Seo Theme</a>', 'seo' ),
			'priority'   => 1,
		) );
		
		$wp_customize->add_setting( 'seo_how_to_use', array (
			'sanitize_callback' => 'esc_url',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'seo_how_to_use', array(
			'label'    => __( 'How to use Seo Theme', 'seo' ),
			'section'  => 'seo_how_to_use_section',
			'settings' => 'seo_how_to_use',
			'type'     => 'radio',

		) ) );
		
}
endif;
		add_action('customize_register', 'seo_how_to_use');		
				