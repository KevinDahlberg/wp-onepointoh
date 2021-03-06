<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_onepointoh
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer">
		<div class="row">
			<div class="col">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp_onepointoh' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'wp_onepointoh' ), 'WordPress' );
				?></a>
				<span class="sep"> | </span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'wp_onepointoh' ), 'wp_onepointoh', '<a href="https://automattic.com/">Automattic</a>' );
				?>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
