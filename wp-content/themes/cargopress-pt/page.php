<?php
/**
 * Main Page Page
 *
 * @package CargoPress
 */

get_header();

$sidebar = get_field( 'sidebar' );

if ( ! $sidebar ) {
	$sidebar = 'left';
}

get_template_part( 'part-main-title' );
get_template_part( 'part-breadcrumbs' );

?>

	<div class="container">
		<div class="row">
			<main class="col-xs-12<?php echo 'left' === $sidebar ? '  col-md-9  col-md-push-3' : ''; echo 'right' === $sidebar ? '  col-md-9' : ''; ?>" role="main">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
				?>

				<article <?php post_class( 'clearfix' ); ?>>
					<div class="hentry__content">
						<?php 
						    $shortcode = get_post_meta($post->ID, 'shortcode-servises', true);
						    echo !empty($shortcode) ?  do_shortcode($shortcode) : ''; 
					    ?>
					</div>
					<div class="hentry__content">
						<?php if ( is_front_page()) : ?>
						<div class="head_block row">
							<span class="head-text">Что мы делаем</span>
							<span class="line-bottom"></span>
						</div>
						<div class="header__navigation  js-sticky-offset">
							<?php
							if ( has_nav_menu( 'we_do' ) ) {
								wp_nav_menu( array(
									'theme_location' => 'we_do',
									'container'      => false,
									'menu_class'     => 'we_do',
									'walker'         => new Aria_Walker_Nav_Menu(),
									'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
								) );
							}
							?>
							<div class="select-icon"></div>
						</div>
						<?php endif ?>

						<?php if ( is_front_page()) : ?>
							<?php echo do_shortcode('[logoshowcase]'); ?>
						<?php endif ?>

						<?php the_content(); ?>
					</div>
					<?php
					if ( comments_open( get_the_ID() ) ) {
						comments_template( '', true );
					}
					?>
				</article>

				<?php
						endwhile;
					endif;
				?>

			</main>

			<?php if ( 'none' !== $sidebar ) : ?>
				<div class="col-xs-12  col-md-3<?php echo 'left' === $sidebar ? '  col-md-pull-9' : ''; ?>">
					<div class="sidebar" role="complementary">
						<?php
							if ( is_active_sidebar( 'regular-page-sidebar' ) ) {
								dynamic_sidebar( 'regular-page-sidebar' );
							}
						?>
					</div>
				</div>
			<?php endif ?>

		</div>
	</div>

<?php get_footer(); ?>