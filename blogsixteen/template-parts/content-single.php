<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BlogSixteen
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="featured-image">
	<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail('medium');
	} ?>
	</div>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php blogsixteen_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogsixteen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php blogsixteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
