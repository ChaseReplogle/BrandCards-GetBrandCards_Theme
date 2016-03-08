<?php
/**
 * Template Name: Learn
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="search">
			<div class="container row">
				<form role="search" method="get" id="searchform"
				    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				    <div>
				        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search BrandCard's Articles and Tips" />
				        <input type="submit" id="searchsubmit"
				            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
				    </div>
				</form>
			</div>
		</div>

		<div class="categories">
			<div class="container row">
				<div class="col span_14">
					<h2>Vivamus in lacus eu risus aliquam ullamcorper.</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum bibendum orci a dolor ultricies sollicitudin. Vivamus in lacus eu risus aliquam ullamcorper. Fusce vehicula accumsan pellentesque. Curabitur nec imperdiet arcu.</p>
				</div>
				<div class="col span_10">
					<ul class="category_columns">
						<?php wp_list_categories('exclude=1&hide_empty=0&title_li='); ?>
					</ul>
				</div>
			</div>
		</div>

		<div class="guides">
			<div class="container row gutters">
				<div class="col span_6 ">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/guide.png">
				</div>
				<div class="col span_6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/guide.png">
				</div>
				<div class="col span_6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/guide.png">
				</div>
				<div class="col span_6">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/guide.png">
				</div>
			</div>
		</div>

		<div class="posts">
			<div class="container row gutters">
					<?php

					$args = array(
						'post_type' => 'post',
					);

					$the_query = new WP_Query( $args ); ?>

					<?php if ( $the_query->have_posts() ) : ?>


						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

							<div class="col span_12">
								<h4>Posted by <?php the_author(); ?> on <?php echo get_post_time("F j, Y", true); ?></h4>
								<h2><?php the_title(); ?></h2>
								<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?></a>
								<?php the_excerpt(); ?>
							</div>
						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
			</div>
		</div>


		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_footer();
