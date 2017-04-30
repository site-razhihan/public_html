<?php
/**
 * Footer
 *
 * @package CargoPress
 */

$footer_widgets_layout = CargoPressHelpers::footer_widgets_layout_array();

?>
	<div class="footer-logos">
		<?php if ( is_front_page()) : ?>
			<?php echo do_shortcode('[logoshowcase center_mode="true" slides_column="6" autoplay="false" dots="false" center_mode="false"]'); ?>
		<?php endif ?>
	</div>

	<div class="footer-top-vopros">
		<div class="container">
			<div class="row">
				<div class="hentry__content">
					<span class="est-vopr">Если у вас остались вопросы...</span>
					<span class="spr-vopr">Просто позвоните или напишите нам</span>
					<div class="contact-vopr">
						<span class="vopr-tel">+7(495)255-26-23</span>
						<span class="vopr-mail">info@auto-exclusiv.ru</span>
					</div>
				</div>
			</div>
		</div>
	</div>
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