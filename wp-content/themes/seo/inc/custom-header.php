<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * @package Seo
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses seo_header_style()
 * @uses seo_admin_header_style()
 * @uses seo_admin_header_image()
 */
 
  /********************************************
* Header Color
*********************************************/ 
 
function seo_colors($wp_customize) {

		$wp_customize->add_setting('seo_header_color', array(         
		'default'     => 'FFFFFF',
		 'sanitize_callback' => 'sanitize_hex_color'
		)); 	

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'seo_header_color', array(
		'label' => __('Header Color', 'seo'),        
		 'section' => 'colors',
		'settings' => 'seo_header_color'
		)));
 
 }
		add_action('customize_register', 'seo_colors');
 ?><?php
		function seosblue_customize_css() {
    ?>
		<style type="text/css">
		header, header p, .site-description, header .site-title a {color:<?php echo esc_html(get_theme_mod('seo_header_color')); ?>;}    
		</style>
    <?php
	
}
		add_action('wp_head', 'seosblue_customize_css');
 
 
 
 
 
 
/*********************************************************************************************************
* Custom header
**********************************************************************************************************/



		$seo_custom_header_logo  = array(
			'width'         => 1300,
			'height'        => 100,
			'random-default' => true,
			'flex-height'            => true,
			'flex-width'             => false,
			'header-text'            => false,
			
		);

		add_theme_support( 'custom-header', $seo_custom_header_logo );

register_default_headers( array(
	'img' => array(
	'url' => get_template_directory_uri() . '/img/seosthemes-background.png',
	'thumbnail_url' => get_template_directory_uri() . '/img/seosthemes-background.png',
	'description' => _x( 'Header Img', 'header image', 'seo' )),
));