<?php
/**
 * Footer
 *
 * @package CargoPress
 */

$footer_widgets_layout = CargoPressHelpers::footer_widgets_layout_array();

?>

	<footer class="footer" role="contentinfo">
		<?php if ( ! empty( $footer_widgets_layout ) && is_active_sidebar( 'footer-widgets' ) ) : ?>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</footer>
	</div><!-- end of .boxed-container -->

	<?php wp_footer(); ?>
	</body>
</html>