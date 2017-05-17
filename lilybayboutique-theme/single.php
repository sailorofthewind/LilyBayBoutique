<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lilybayboutique
 */

get_header(); ?>

<!-- BLOG-BODY ======================================================== -->
<section id="blog-body">
	<div class="container">
		<div class="row">
			
			<!-- BLOG-CONTENT ======================================================== -->
			<main class="col-sm-8" id="blog-content">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-single', get_post_format() );

				the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #blog-content -->

			<!-- BLOG-SIDEBAR ======================================================== -->
			<aside class="col-sm-3 pull-right" id="blog-sidebar">
				<?php get_sidebar(); ?>
			</aside>

		</div><!-- row -->
	</div><!-- container -->
</section><!-- blog-body -->

<?php get_footer(); ?>
