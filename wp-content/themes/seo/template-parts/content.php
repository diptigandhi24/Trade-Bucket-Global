<?php
/**
 * Template part for displaying posts.
 *
 * @package Seo
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">

			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?> <i class="fa fa-user"></i> <?php the_author() ?>
			</div><!-- .entry-meta -->

			<?php endif; ?>
		</header><!-- .entry-header -->
			<div class="seo-thumbnail"><?php
if ( has_post_thumbnail() ) { 
	the_post_thumbnail( 'custom-size' ); 
}
?> </div>
		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'seo' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seo' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php seo_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
