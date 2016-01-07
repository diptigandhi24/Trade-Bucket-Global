<?php
/**
 * Template part for displaying single posts.
 *
 * @package Seo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
		<i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?> <i class="fa fa-user"></i> <?php the_author() ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
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

