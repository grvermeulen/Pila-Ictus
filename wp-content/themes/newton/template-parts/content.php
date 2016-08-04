<?php
/**
 * @package Newton
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php newton_post_thumbnail(); ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		
		<?php if ( 'post' == get_post_type() ) : ?>
			<?php newton_post_date(); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div id="divider-top" class="divider"></div>

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'newton' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'newton' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<div id="divider-bottom" class="divider"></div>

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php newton_entry_meta(); ?>
		</div>
		<div class="entry-comments">
			<?php newton_entry_comments(); ?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
