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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

  <!-- Coding helper -->
  <div class="label" style="position:fixed;top:inherit;bottom:0;right:0;z-index:999;background:red;color:#fff;">
    <span class="show-xsmall">X-small</span>
    <span class="show-small">Small</span>
    <span class="show-medium">Medium</span>
    <span class="show-large">Large</span>
    <span class="show-xlarge">X-large</span>
    <a href="<?php bloginfo('template_directory'); ?>/styleguide">Style Guide</a>
  </div>
</body>
</html>
