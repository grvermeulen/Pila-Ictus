<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Newton
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php get_sidebar( 'right' ); ?>

		<div id="site-info" class="site-info">
			<span class="site-info-top"><?php echo __( 'Powered by ', 'newton' ) ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'newton' ) ); ?>" rel="generator">WordPress</a></span>
			<span class="site-info-bottom"><?php printf( __( '%1$s by %2$s', 'newton' ), '<a href="http://michaelvandenberg.com/portfolio/themes/newton/" rel="theme">The Newton theme</a>', '<a href="http://michaelvandenberg.com/" rel="designer">Michael Van Den Berg</a>' ); ?></span>
		</div><!-- #site-info -->
	</footer><!-- #colophon -->

	<a href="#content" class="back-to-top"><span class="genericon genericon-top"></span></a>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
