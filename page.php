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
								<?php
									the_content( sprintf(
										/* translators: %s: Name of current post. */
										wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'get_brandcards' ), array( 'span' => array( 'class' => array() ) ) ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									) );

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'get_brandcards' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->
						</div>
					</div>
					</main>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
