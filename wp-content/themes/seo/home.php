<?php
/**
 * The Home template file.
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

			<?php if ( get_theme_mod( 'seo_canonical' ) ) : ?>
			<link rel="canonical" href="<?php echo esc_url( get_theme_mod( 'seo_canonical' ) ); ?>">
			<?php endif; ?>  	
			
			
				
 			
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="dotted">
		<header id="masthead" class="site-header box-border" >	     
			<div class="site-branding ">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/Trade-Bucket-Global.png" class="logoImage"/>
				<img class="calllogo" src="<?php bloginfo('stylesheet_directory'); ?>/img/resizecalllogo.png"/>
				<p class="calldetails" >Call us: +91-98-2095-5392</p>
				<img class="calllogo2" src="<?php bloginfo('stylesheet_directory'); ?>/img/EmailIcon.png"/>
				<p class="calldetails">Email us:<a href="mailto:tbdltd@hotmail.com" style="display:inline-block ; margin-left:10px" >tbdltd@hotmail.com</a></p>
			</div><!-- .site-branding -->	
			<div class="cont-nav">
					<nav>
						<div class="nav-ico">
						
<a href="#" id="menu-icon">	
							<span class="menu-button"> </span>
							<span class="menu-button"> </span>
							<span class="menu-button"> </span>
							<p class="mobileMenuIcon">Menu</p>
						</a>
						<div class="showNavMenu ">
						 <ul id="menu-menu-1" class="menu"><li id="menu-item-76" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-76">
<a href="<?php bloginfo('url'); ?>" >Home</a>
	</li>
<li id="menu-item-78" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78">
<a href="<?php bloginfo('url'); ?>/index.php/contact-us/">Contact Us</a>
	</li>
<li id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79">
<a href="<?php bloginfo('url'); ?>/index.php/how-we-work/">How We Work !!</a>
	</li>
<li id="menu-item-80" class="stylecaa menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-80">

							<a href="<?php bloginfo('url'); ?>/index.php/services/">SERVICES</a>

								<ul class="sub-menu">
									<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100">
										<a href="<?php bloginfo('url'); ?>/index.php/services/">Air services</a>

									</li>
									<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99">
										<a href="<?php bloginfo('url'); ?>/index.php/services/#sourcing">Sourcing of Product</a>

									</li>
									<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
										<a href="<?php bloginfo('url'); ?>/index.php/services/#ImportExport">Import - Export product</a>

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
								<a href="#" class="sub" id = "servicesSubmenuButton">+</a>
							
							</li>
<li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-81">
<a href="<?php bloginfo('url'); ?>/index.php/industries/">Supported Industries</a>
<ul class="sub-menu">
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-100">
		<a href="<?php bloginfo('url'); ?>/index.php/industries/#P&C">Pharmaceutical & Chemicals</a>

	</li>
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99">
		<a href="<?php bloginfo('url'); ?>/index.php/industries/#G&F">Garment and Furnishing</a>

	</li>
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98">
		<a href="<?php bloginfo('url'); ?>/index.php/industries/#B&c&E">Building & construction Materials & Equipments</a>

	</li>
	<li id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-97">
		<a href="<?php bloginfo('url'); ?>/index.php/industries/#FMCG">FMGC / Cosmetic & food</a>
	</li>
	
</ul>

<a href="#" class="sub" id = "supportedIndustriesSubmenuButton">+</a>

</li>

<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121">
<a href="<?php bloginfo('url'); ?>/index.php/renewable-energy/">SOLAR ENERGY</a>
	</li>
</ul>	
					</div>
					</div>		
					</nav>
			</div>

		</header><!-- #masthead -->
	</div>	
	<div class="seos-slide">
		<div ><?php wd_slider(4); ?></div>
		<div class="slidetext"> 
		<h2>Safe Product Delivery WorldWide</h2>
		</div>	
	</div>	
		
		<div class="featured-box">   
			<div class="wrapper">
				<div class="home-box">
					<div class="home-box-content" id="homebox1">
						<h1>Services</h1>
						 <img src="<?php bloginfo('stylesheet_directory'); ?>/img/boximage1.png"/>
						<ul>
						<li><a href="http://www.continentalgroup.com/services/air-services">Air Services</a></li>
						<li><a href="http://www.continentalgroup.com/services/ocean-services">Ocean Services</a></li>
						<li><a href="http://www.continentalgroup.com/services/door-to-door">Door to Door</a></li>
						<li><a href="http://www.continentalgroup.com/services/custom-clearance">Custom Clearance</a></li>
						<li><a href="http://www.continentalgroup.com/services/transportation-distribution">Transportation 								&amp; Distribution</a></li>
						</ul>
					</div>
					<div class="home-box-content" id="homebox2">
						<h1>Supported Industries</h1>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/box2Image.jpg"/>
						<ul>
						<li><a href="http://www.continentalgroup.com/services/air-services">Pharmaceutical and Chemaicals</a></li>
						<li><a href="http://www.continentalgroup.com/services/ocean-services">Garments and Furnishings</a></li>
						<li><a href="http://www.continentalgroup.com/services/door-to-door">Buiilding material/Construction Materials</a></li>
						<li><a href="http://www.continentalgroup.com/services/custom-clearance">FMCG / Cosmetic and Food</a></li>
						<li><a href="http://www.continentalgroup.com/services/transportation-distribution">Energy Solutions</a></li>
						</ul>
					</div>
					<div class="home-box-content" id="homebox3">
						<h1>Experience</h1>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/box3Image.jpg"/>
						<ul>
						<li><a href="http://www.continentalgroup.com/services/air-services">Air Services</a></li>
						<li><a href="http://www.continentalgroup.com/services/ocean-services">Ocean Services</a></li>
						<li><a href="http://www.continentalgroup.com/services/door-to-door">Door to Door</a></li>
						<li><a href="http://www.continentalgroup.com/services/custom-clearance">Custom Clearance</a></li>
						<li><a href="http://www.continentalgroup.com/services/transportation-distribution">Transportation 								&amp; Distribution</a></li>
						</ul>
					</div>

				</div>

			</div>
    
        
        	</div>
	
	
<?php get_footer(); ?>
