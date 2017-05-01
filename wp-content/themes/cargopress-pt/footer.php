<?php
/**
 * Footer
 *
 * @package CargoPress
 */

$footer_widgets_layout = CargoPressHelpers::footer_widgets_layout_array();

?>
	<div class="container">
		<div class="row">
		<?php echo do_shortcode('[simple_testimonials adaptiveheight="true" arrows="false" dots="true" fade="true" infinite="true" slidestoshow="3" total_post="6" layout="grid" speed="300" autoplayspeed="3000"  autoplay="false"]'); ?>
		</div>
	</div>

	<?php if ( is_front_page()) : ?>
	<span class="line-razd"></span>
	<div class="footer-logos">
		<div class="head_block row">
			<span class="head-text">Партнеры</span>
			<span class="line-bottom"></span>
		</div>
			<?php echo do_shortcode('[logoshowcase center_mode="true" slides_column="6" autoplay="false" dots="false" center_mode="false" ]'); ?>
	</div>
	<?php endif ?>

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