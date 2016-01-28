<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Seo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

			<?php if ( get_theme_mod( 'seo_google_verification' ) ) : ?>
			<meta name="google-site-verification" content="<?php echo esc_html( get_theme_mod( 'seo_google_verification' ) ); ?>">
			<?php endif; ?>

			<?php if ( get_theme_mod( 'seo_google_shortcut_icon' ) ) : ?>
			<link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod( 'seo_google_shortcut_icon' ) ); ?>">	
			<?php endif; ?> 
			

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'seo' ); ?></a>
	<div class="dotted">
		<header id="masthead" class="site-header" style="background: url('<?php header_image(); ?>') repeat; height:10%">	     
			<div class="site-branding">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/Trade-Bucket-Global.png" class="logoImage"/>
				<img class="calllogo" src="<?php bloginfo('stylesheet_directory'); ?>/img/resizecalllogo.png"/>
				<p class="calldetails" >call us: +91-98-2095-5392</p>
				<img class="calllogo2" src="<?php bloginfo('stylesheet_directory'); ?>/img/EmailIcon.png"/>
				<p class="calldetails" >Email us: tbdltd@hotmail.com</p>
				
			</div><!-- .site-branding -->
			
			
			<div class="cont-nav">
					<nav>
						<div class="nav-ico" >
						
<a href="#" id="menu-icon" >	
							<span class="menu-button"> </span>
							<span class="menu-button"> </span>
							<span class="menu-button"> </span>
						</a>


						<div class="test">
						 <ul id="menu-menu-1" class="menu"><li id="menu-item-76" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-76">
<a href="<?php bloginfo('url'); ?>">Home</a>
	</li>
<li id="menu-item-78" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78">
<a href="<?php bloginfo('url'); ?>/index.php/contact-us/">Contact Us</a>
	</li>
<li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79">
<a href="<?php bloginfo('url'); ?>/index.php/how-we-work/">How We Work !!</a>
	</li>
<li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-81">
<a href="<?php bloginfo('url'); ?>/index.php/supported-industries/">Supported Industries</a>
</li>
<li id="menu-item-80" class="stylecaa menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-80">

<a href="<?php bloginfo('url'); ?>/index.php/services/">Services</a>

<ul class="sub-menu">
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100">
		<a href="<?php bloginfo('url'); ?>/index.php/services/">Air services</a>

	</li>
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99">
		<a href="<?php bloginfo('url'); ?>/index.php/services/#sourcing">Sourcing of Product</a>

	</li>
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
		<a href="<?php bloginfo('url'); ?>/index.php/services/#ImportExport">Import Export product across countries</a>

	</li>
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
		<a href="<?php bloginfo('url'); ?>/index.php/services/#warehousing">Ware housing</a>
	</li>
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96">
		<a href="<?php bloginfo('url'); ?>/index.php/custom-clearance/#custom-packaging">Customize Packaging</a>
	</li>
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95">
		<a href="<?php bloginfo('url'); ?>/index.php/transportation-and-distribution/#freight-services">Frieght Services</a>
	</li>
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94">
		<a href="<?php bloginfo('url'); ?>/index.php/services/#quality-control">Quality Control</a>
	</li>
</ul>
<a href="#" class="sub" id = "serviceExpand">+</a>
</li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121">
<a href="<?php bloginfo('url'); ?>/index.php/renewable-energy/">RENEWABLE ENERGY</a>
	</li>
</ul>
					</div>
					</div>		
					</nav>
			</div>
		</header><!-- #masthead -->
    </div>
</div>
	<div id="content" class="site-content">

	
	
	
	
	
	

	
	
	
