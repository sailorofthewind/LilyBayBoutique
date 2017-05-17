<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lilybayboutique
 */

get_header(); ?>



		<?php
		if ( have_posts() ) : ?>



			<!-- BLOG-BODY ======================================================== -->
			<section id="blog-body">
				<div class="container">
					<div class="row">
						
						<!-- BLOG-CONTENT ======================================================== -->
						<main class="col-sm-8" id="blog-content">

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

					</main><!-- #blog-content -->

					<!-- BLOG-SIDEBAR ======================================================== -->
					<aside class="col-sm-3 pull-right" id="blog-sidebar">
						<?php get_sidebar(); ?>
					</aside>

					</div><!-- row -->
				</div><!-- container -->
			</section><!-- blog-body -->



<?php
get_footer(); ?>
