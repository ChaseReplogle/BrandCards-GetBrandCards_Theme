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
					<a href="#">Video</a>
				</div>
				<div class="text col span_16">
					<h2>Your Brand Deserves Better</h2>
					<p>You care about your brand, but managing all of the assets and people can be chaos. You end up trying to communicate by ridiculous files names and complicated shared folder systes. <strong>We think your brand deserves it...</strong></p>
					<a href="#" class="button">Create An Account</a>
				</div>
			</div>
		</div>

		<div class="app_image">
			<div class="app_image_wrapper container row">
				<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/app_image.png"></a>
				<p>BrandCards is an online app that allows you to create beautiful brand guidelines, manage all of your brand assets, and empower your team of designers, employees, and vendors. There's a place for everythign: logos, colors, typography, images, graphics, videos...</p>
			</div>
		</div>

		<div class="individual" id="demos">
			<div class="individual_wrapper container row">
				<div class="col span_12">
					<div class="individual_brand">
						<a href="http://hunterts.brandcardsapp.com/" target="_blank" class="individual_brand_link">View the Hunter T-Shirt's Brand</a>
						<a href="http://hunterts.brandcardsapp.com/" target="_blank" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/brand_item.png"></a>
					</div>
				</div>
				<div class="col span_12 quote">
					<p class="quote_text">"BrandCards has transformed the way our business creates and shares brand artwork. I spend less less time digging for old files, emailing attatchments, and trying to rein in old logos. Less time managing means more time dowing what I love—creating."</p>
					<p class="quote_reference">Patrick Copeland <span><i>Founder, Hunter T-Shirt Company</i></span></p>
				</div>
			</div>
		</div>

		<div class="demos">
			<div class="demos_wrapper container row gutters">
				<div class="col span_8">
					<a href="http://eathealthy.brandcardsapp.com/" target="_Blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cover_healthy.jpg">
						<h3>Eat Healthy App</h3>
						<p>Brand Guide and Design Resources</p>
					</a>
				</div>
				<div class="col span_8">
					<a href="http://goodwater.brandcardsapp.com/" target="_Blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cover_water.jpg">
						<h3>Good Water</h3>
						<p>Charity Communciations Standards</p>
					</a>
				</div>
				<div class="col span_8">
					<a href="http://chaserealtor.brandcardsapp.com/" target="_Blank">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cover_realator.jpg">
						<h3>Chase Realator Group</h3>
						<p>Style Guide and Agent Resources</p>
					</a>
				</div>
			</div>
		</div>

		<div class="create_screens">
			<div class="create_screens_wrapper container row">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/create_image.png">
				<div class="create_screens_text">
					<h2>Your Brand is More Than a Logo</h2>
					<p>A brand is more than just a logo. Colors, fonts, images, graphics, video—creating a great brand means paying attention to every detail. BrandCards makes it possible to share each and every decision.</p>
				</div>
			</div>
		</div>

		<div class="pricing" id="pricing">
			<div class="pricing_wrapper container row">
				<h3>Find a Plan That's Right for You and Your Brands</h3>
				<p>All plans are billed montly and can be canceled at any time, no questions asked.</p>

				<div class="row gutters">
					<div class="pricing_item col span_8">
						<h2>Brand</h2>
						<h4>$15/Month</h4>
						<p>Manage 1 Brand</p>
						<ul>
							<li>Build Online Brand Books</li>
							<li>Share Brand Files</li>
							<li>Create Adobe Color Swatches</li>
							<li>Invite Users to Collaborate</li>
						</ul>
						<a href="https://brandcardsapp.com/membership-account/membership-checkout/?level" target="_Blank" class="button">Select</a>
					</div>

					<div class="pricing_item col span_8">
						<h2>Designer</h2>
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

		</main><!-- #main -->
	</div><!-- #primary -->



<?php
get_footer();
