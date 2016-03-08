<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package get_brandcards
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="single-learn-article">
						<div class="single-learn-article_wrapper container row">
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
					</main>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
