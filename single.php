<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package get_brandcards
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

					<div class="single-learn-article">
						<div class="single-learn-article_wrapper container row">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_format() );

							endwhile; // End of the loop.
							?>
						</div>
					</div>
					</main>
				</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
