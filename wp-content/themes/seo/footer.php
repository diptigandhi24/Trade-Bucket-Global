<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Seo
 */

?>

	</div><!-- #content -->
<div class="animateblock btm">
	<div class="social">
		 <div class="icon">

		<?php if ( get_theme_mod( 'seo_facebook' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'seo_facebook' ) ); ?>" class="fb" title="<?php echo esc_url( get_theme_mod( 'seo_facebook' ) ); ?>"><?php _e('', 'seo') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'seo_twitter' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'seo_twitter' ) ); ?>" class="tw" title="<?php echo esc_url( get_theme_mod( 'seo_twitter' ) ); ?>"><?php _e('', 'seo') ?></a>
            <?php endif; ?>

			<?php if ( get_theme_mod( 'seo_google' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'seo_google' ) ); ?>" class="gp" title="<?php echo esc_url( get_theme_mod( 'seo_google' ) ); ?>"><?php _e('', 'seo') ?></a>
            <?php endif; ?>

			<?php if ( get_theme_mod( 'seo_youtube' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'seo_youtube' ) ); ?>" class="yt" title="<?php echo esc_url( get_theme_mod( 'seo_youtube' ) ); ?>"><?php _e('', 'seo') ?></a>
            <?php endif; ?>	

            <?php if ( get_theme_mod( 'seo_vimeo' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'seo_vimeo' ) ); ?>" class="vi" title="<?php echo esc_url( get_theme_mod( 'seo_vimeo' ) ); ?>"><?php _e('', 'seo') ?></a>
            <?php endif; ?>	
            
            <?php if ( get_theme_mod( 'seo_pinterest' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'seo_pinterest' ) ); ?>" class="pi" title="<?php echo esc_url( get_theme_mod( 'seo_pinterest' ) ); ?>"><?php _e('', 'seo') ?></a>
            <?php endif; ?>
            
            <?php if ( get_theme_mod( 'seo_linkedin' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'seo_linkedin' ) ); ?>" class="li" title="<?php echo esc_url( get_theme_mod( 'seo_linkedin' ) ); ?>"><?php _e('', 'seo') ?></a>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'seo_rss' ) ) : ?>
            <a href="<?php echo esc_url( get_theme_mod( 'seo_rss' ) ); ?>" class="rs" title="<?php echo esc_url( get_theme_mod( 'seo_rss' ) ); ?>"><?php _e('', 'seo') ?></a>
            <?php endif; ?>           
	</div>
</div>
</div>
<div class="animateblock left">	
	<footer id="colophon" class="site-footer">
		<div class="footer-center seo-clear">
			<div class="footer-widgets">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div class="footer-widgets">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="footer-widgets">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
			<div class="footer-widgets">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
		</div>
			<details class="site-infos">
				<summary><?php _e('All rights reserved', 'seo'); ?> &copy; <?php bloginfo('name'); ?></summary>
				<p><a href="http://wordpress.org/" title="<?php esc_attr_e( '', 'seo' ); ?>"><?php printf( __( 'Powered by %s', 'seo' ), 'WordPress' ); ?></a></p>
				<p><a href="<?php echo esc_url(__('http://seosthemes.com/', 'seo')); ?>" target="_blank"><?php _e('Theme by SEOS', 'seo'); ?></a></p>	
			</details> <!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
