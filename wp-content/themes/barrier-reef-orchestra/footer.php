<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Barrier_Reef_Orchestra
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info" align="center">
			<img src="http://staging.jacobj.sgedu.site/wp-content/uploads/2016/05/symphony.jpg" alt="Footer-Image"><br>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'barrier-reef-orchestra' ) ); ?>" target="_blank"><?php printf( esc_html__( 'Proudly powered by %s', 'barrier-reef-orchestra' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://staging.jacobj.sgedu.site/', 'barrier-reef-orchestra' ) ); ?>"><?php printf( esc_html__( 'Copyrights @2016 %s', 'barrier-reef-orchestra' ), 'Barrier Reef Orchestra' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>