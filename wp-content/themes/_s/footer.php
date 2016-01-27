<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

  <!-- Dev helper *Remove it for released product -->
  <div class="responsive-helper">
    <a class="label" href="<?php bloginfo('template_directory'); ?>/styleguide">SG</a>
    <span class="label show-xsmall">X-small</span>
    <span class="label show-small">Small</span>
    <span class="label show-medium">Medium</span>
    <span class="label show-large">Large</span>
    <span class="label show-xlarge">X-large</span>
  </div>
</body>
</html>
