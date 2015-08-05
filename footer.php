<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package underboot
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-inner container">
			<div class="site-footer-widgets row">
				<?php dynamic_sidebar( 'footer-widget' ); ?>
			</div><!-- /.site-footer-widgets -->
		</div><!-- /.site-footer-inner -->
		<div class="site-info">
			Copyright © <?php echo bloginfo( 'name' ); ?> All Rights Reserved.
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'underboot' ), 'underboot', '<a href="http://olein-design.com">Olein Design</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
