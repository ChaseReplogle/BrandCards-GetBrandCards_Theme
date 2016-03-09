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
					<h1>Learn</h1>
					<h2>A brand for a company is like a reputation for a person. You earn reputation by trying to do hard things well.</h2>
					<p class="citation">Jeff Bezos</p>
					<p>Building a brand is hard work. It takes perseverence, focus, and determination. Having the right logo isn't enough. There's a lot more to learn and the challenges never stop evolving. <strong>Let's keep learning together.</strong></p>
				</div>
				<div class="col span_10 category_columns">
					<h3>Categories</h3>
					<ul class="">
						<?php wp_list_categories('exclude=1&hide_empty=0&order=DESC&title_li='); ?>
					</ul>
				</div>
			</div>
		</div>

		<div class="guides">
			<div class="container row gutters">
				<div class="col span_6 ">
					<a href="#">
						<img src="http://getbrandcards.com/wp-content/uploads/2016/03/File-Guide.jpg">
					</a>
				</div>
				<div class="col span_6">
					<img src="http://getbrandcards.com/wp-content/uploads/2016/03/color-1.jpg">
				</div>
				<div class="col span_6">
					<img src="http://getbrandcards.com/wp-content/uploads/2016/03/type.jpg">
				</div>
				<div class="col span_6">
					<img src="http://getbrandcards.com/wp-content/uploads/2016/03/logo.jpg">
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

							<div class="col span_8">
								<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
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
