<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Alleva
 * @since Alleva 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-all' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-all' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

	<?php if ( is_single() && is_active_sidebar( 'sidebar-posts' ) ) : ?>
		<div id="secondary" class="widget-area sidebar-posts" role="complementary">
			<?php dynamic_sidebar( 'sidebar-posts' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

	<?php if ( is_page() && is_active_sidebar( 'sidebar-pages' ) ) : ?>
		<div id="secondary" class="widget-area sidebar-pages" role="complementary">
			<?php dynamic_sidebar( 'sidebar-pages' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>


	<!-- Sidebar logos for Workplace page -->
	<?php if ( is_page(10) ) : ?>
		<div id="secondary" class="widget-area sidebar-pages down-the-page" role="complementary">
			<aside class="widget client-images">
				<h3 class="widget-title">Workplace Clients Include:</h3>
				<img src="/wp-content/themes/alleva/images/clients.png" alt="The Motley Fool, Sirius XM, Ideal Innovations Incorporated, FannieMae" style="box-shadow: none;" />
			</aside>	

			.
		</div>
	<?php endif; ?>