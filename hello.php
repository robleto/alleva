<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Alleva
 * @since Alleva 1.0
 *
 * 
 * Template Name: Hello
 */
get_header(); ?>

		<!-- ALERTS -->
		<section id="home-page-alerts" class="line">
			<div class="unit size1of1">
				<?php if ( is_active_sidebar( 'frontpage-alerts' ) ) : ?>
					<?php dynamic_sidebar( 'frontpage-alerts' ); ?>
				<?php endif; ?>
			</div>	
		</section>

		<!-- HOME PAGE PROMO -->
		<section id="home-page-promo" class="line">
			<div class="unit size1of1">
				<?php if ( is_active_sidebar( 'frontpage-promo' ) ) : ?>
					<?php dynamic_sidebar( 'frontpage-promo' ); ?>
				<?php endif; ?>
			</div>	
		</section>


		<!-- THREE-UP PROMOS -->
		<section id="home-page-three-up" class="line">
			<?php if ( is_active_sidebar( 'frontpage-upper-line-1' ) ) : ?>
				<?php dynamic_sidebar( 'frontpage-upper-line-1' ); ?>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'frontpage-upper-line-2' ) ) : ?>
				<?php dynamic_sidebar( 'frontpage-upper-line-2' ); ?>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'frontpage-upper-line-3' ) ) : ?>
				<?php dynamic_sidebar( 'frontpage-upper-line-3' ); ?>
			<?php endif; ?>
		</section>


		<!-- BLOGS & GIFTS -->
		<section id="home-page-three-up" class="line">
			<div class="unit size2of3 home-loop">
					<?php $posts = get_posts( "numberposts=5" ); ?>
			        <?php if( $posts ) : ?>
					<h3 class="loop-title widget-title">News and Updates</h3>
			        <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
			          <div class="homepage-excerpt" id="post-<?php the_ID(); ?>">
			        	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			  				the_post_thumbnail('category-thumb');
							}
						?>
			          	<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			            <?php the_excerpt(); ?> 
			          </div>
				    <?php endforeach; ?>
				    <?php endif; ?>
			</div>	
			<?php if ( is_active_sidebar( 'frontpage-lower-line' ) ) : ?>
				<?php dynamic_sidebar( 'frontpage-lower-line' ); ?>
			<?php endif; ?>
		</section>


<?php get_footer(); ?>