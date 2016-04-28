<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="header">
			<div class="header_wrapper container row">
				<div class="video col span_8">
					<a href="#">Video<img src="<?php bloginfo('stylesheet_directory'); ?>/images/play_logo.png" alt="BrandCards"></a>
				</div>
				<div class="text col span_16">
					<h2>Your Brand Deserves Better.</h2>
					<p>You care about your brand, but managing assets and people can be chaos. You end up trying to communicate with ridiculous files names and complicated shared folder systems. <strong>We think your brand deserves more...</strong></p>
					<a href="https://brandcardsapp.com/membership-account/membership-levels/" class="button">Create An Account</a>
				</div>
			</div>
		</div>

		<div class="app_image">
			<div class="app_image_wrapper container row">
				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/app_image.png" alt="BrandCards Interface"></a>
				<p>BrandCards is an online app that allows you to create beautiful brand guidelines, manage all of your brand assets, and empower your team of designers, employees, and vendors. There's a place for everything: logos, colors, pallettes, typography, images, graphics, videos...</p>
			</div>
		</div>

		<div class="individual" id="demos">
			<div class="individual_wrapper container row">
				<div class="col span_12">
					<div class="individual_brand">
						<a href="http://hunterts.brandcardsapp.com/" target="_blank" class="individual_brand_link">View the Hunter T-Shirt's Brand</a>
						<a href="http://hunterts.brandcardsapp.com/" target="_blank" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/brand_item.png" alt="Hunter Ts"></a>
					</div>
				</div>
				<div class="col span_12 quote">
					<p class="quote_text">"BrandCards has transformed the way our business creates and shares brand artwork. I spend a lot less time digging through old files, emailing attatchments, and trying to rein in old logos. Less time managing means more time doing what I love—creating."</p>
					<p class="quote_reference">Patrick Copeland <span><i>Founder, Hunter T-Shirt Company</i></span></p>
				</div>
			</div>
		</div>

		<div class="demos">
			<div class="demos_wrapper container row gutters">
				<div class="col span_8">
					<a href="http://eathealthy.brandcardsapp.com/" target="_Blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cover_healthy.jpg" alt="Eat Healthy">
						<h3>Eat Healthy App</h3>
						<p>Brand Guide and Design Resources</p>
					</a>
				</div>
				<div class="col span_8">
					<a href="http://goodwater.brandcardsapp.com/" target="_Blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cover_water.jpg" alt="Good Water">
						<h3>Good Water</h3>
						<p>Charity Communciations Standards</p>
					</a>
				</div>
				<div class="col span_8">
					<a href="http://chaserealtor.brandcardsapp.com/" target="_Blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cover_realator.jpg" alt="Chase Realtor">
						<h3>Chase Realator Group</h3>
						<p>Style Guide and Agent Resources</p>
					</a>
				</div>
			</div>
		</div>

		<div class="create_screens">
			<div class="create_screens_wrapper container row">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/create_image.png" alt="BrandCards Creating Interface">
				<div class="create_screens_text">
					<h2>Your Brand is More Than a Logo.</h2>
					<p>Colors, fonts, images, graphics, video—creating a great brand means paying attention to every detail. BrandCards makes it possible to share those decisions with simplicity and style. Goodbye, ibuprofen.</p>
				</div>
			</div>
		</div>

		<div class="pricing" id="pricing">
			<div class="pricing_wrapper container row">
				<h3>Find a Plan That's Right for You and Your Brands</h3>
				<p>All plans are billed monthly and can be canceled at any time, no questions asked.</p>

				<div class="row gutters">
					<div class="pricing_item col span_8">
						<h2>Brand</h2>
						<h5>Free For The First 30 Days!</h5>
						<h4>$15/Month</h4>
						<p>Manage 1 Brand</p>
						<ul>
							<li>Build Online Brand Books</li>
							<li>Share Brand Files</li>
							<li>Create Adobe Color Swatches</li>
							<li>Invite Users to Collaborate</li>
						</ul>
						<a href="https://brandcardsapp.com/membership-account/membership-checkout/?level=1" target="_Blank" class="button">Select</a>
					</div>

					<div class="pricing_item col span_8">
						<h2>Designer</h2>
						<h5>Free For The First 30 Days!</h5>
						<h4>$30/Month</h4>
						<p>Manage 5 Brand</p>
						<ul>
							<li>Build Online Brand Books</li>
							<li>Share Brand Files</li>
							<li>Create Adobe Color Swatches</li>
							<li>Invite Users to Collaborate</li>
						</ul>
						<a href="https://brandcardsapp.com/membership-account/membership-checkout/?level=2" target="_Blank" class="button">Select</a>
					</div>

					<div class="pricing_item col span_8">
						<h2>Agency</h2>
						<h5>Free For The First 30 Days!</h5>
						<h4>$50/Month</h4>
						<p>Manage 10 Brand</p>
						<ul>
							<li>Build Online Brand Books</li>
							<li>Share Brand Files</li>
							<li>Create Adobe Color Swatches</li>
							<li>Invite Users to Collaborate</li>
						</ul>
						<a href="https://brandcardsapp.com/membership-account/membership-checkout/?level=3" target="_Blank" class="button">Select</a>
					</div>
				</div>

			</div>
		</div>

		<div class="posts">
			<div class="container row gutters">
					<div class="row posts_header">
						<h3>Brand Resouces</h3>
						<p>Never stop learning. Branding is a constantly evolving art.</p>
					</div>
					<div class="row">
						<?php

						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 3
						);

						$the_query = new WP_Query( $args ); ?>
						<?php $i = 0; ?>

						<?php if ( $the_query->have_posts() ) : ?>


							<?php while ( $the_query->have_posts() ) : $the_query->the_post();
							if($i % 3 == 0) {echo '</div><div class="row">';} ?>

								<div class="col span_8">
									<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?></a>
									<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
									<?php the_excerpt(); ?>
								</div>
							<?php $i++;  endwhile; ?>
							</div>

							<?php wp_reset_postdata(); ?>

						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

				<a href="/learn" class="button secondary">View More Resources</a>
			</div>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<div class="phone">
	<div class="phone_wrapper container row">
		<p>Take your brands with you, everywhere you go.</p>
		<h2>The world is mobile. Your brands should be, too.</h2>
	</div>
</div>


<?php
get_footer();
