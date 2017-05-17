<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package lilybayboutique
 */

get_header(); ?>

	<!-- BLOG-HEADER ======================================================== -->
	<section id="blog-header" data-type="background" data-speed="2">

				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'lilybayboutique-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

		

	</section>


	<!-- BLOG-BODY ======================================================== -->
	<section id="blog-body">
		<div class="container">
			<div class="row">
				
				<!-- BLOG-CONTENT ======================================================== -->
				<main class="col-sm-8" id="blog-content">



					<?php
					if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

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
