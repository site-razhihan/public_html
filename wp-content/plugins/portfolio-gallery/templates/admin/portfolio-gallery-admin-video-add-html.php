<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div id="portfolio_gallery_add_videos" style="display: none">
	<div id="portfolio_gallery_add_videos_wrap" data-portfolio-gallery-id=""
		 data-add-thumb-video-nonce=""
		 data-add-video-nonce="">
		<h2><?php echo __( 'Add Video URL From Youtube or Vimeo', 'portfolio-gallery' ); ?></h2>
		<div class="control-panel">
			<form method="post" action="" class="add-main-video">
				<input type="text" id="huge_it_add_video_input" name="huge_it_add_video_input"/>
				<button class='save-slider-options button-primary huge-it-insert-video-button'
						id='huge-it-insert-video-button'><?php echo __( 'Insert Video', 'portfolio-gallery' ); ?></button>
				<div id="add-video-popup-options">
					<div>
						<div>
							<label for="show_title"><?php echo __( 'Title', 'portfolio-gallery' ); ?>:</label>
							<div>
								<input name="show_title" value="" type="text"/>
							</div>
						</div>
						<div>
							<label for="show_description"><?php echo __( 'Description', 'portfolio-gallery' ); ?>
								:</label>
							<textarea id="show_description" name="show_description"></textarea>
						</div>
						<div>
							<label for="show_url"><?php echo __( 'Url', 'portfolio-gallery' ); ?>:</label>
							<input type="text" name="show_url" value=""/>
						</div>
					</div>
				</div>
			</form>
			<form method="post" action="" class="add-thumb-video" data-portfolio-item-id="">
				<input type="text" id="huge_it_add_video_input_thumb" name="huge_it_add_video_input_thumb"/>
				<button class='save-slider-options button-primary huge-it-insert-thumb-video-button'
						id='huge-it-insert-video-button'><?php echo __( 'Insert Video', 'portfolio-gallery' ); ?></button>
			</form>
		</div>
	</div>
</div>