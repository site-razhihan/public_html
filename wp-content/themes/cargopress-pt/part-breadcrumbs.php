<?php if ( function_exists( 'bcn_display' ) && !is_front_page()) { ?>
	<div class="breadcrumbs">
		<div class="container">
			<?php bcn_display(); ?>
		</div>
	</div>
<?php } ?>