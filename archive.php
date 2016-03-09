<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package get_brandcards
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="archive_header">
				<div class="container row">
					<h3>File Formats</h3>
				</div>
			</div>

			<div class="posts">
			<div class="back_learn container row">
				<a href="/learn">&#8592; Back</a>
			</div>
			<div class="container row gutters">
				<div class="col span_8">
					<h2>List of Posts</h2>
					<hr>
					<ul class="post_list">
					<?php
						if ( have_posts() ) : ?>

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post(); ?>

								<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

							<?php endwhile; endif; ?>
					</ul>
				</div>
				<div class="col span_16">

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<div class="col span_12">

					<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); }  ?></a>
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<?php the_excerpt(); ?>
				</div>

			<?php endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			</div>
			</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
