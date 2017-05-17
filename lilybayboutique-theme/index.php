<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lilybayboutique
 */


// Advanced Custom Fields


$post_id = false;

if( is_home() )
{
	$post_id = 17; // specif ID of home page
}

$blog_image 					= get_field('blog_image', $post_id);
$blog_header_feature_image		= get_field('blog_header_feature_image', $post_id);
$blog_avatar_image				= get_field('blog_avatar_image', $post_id);


get_header(); ?>


	<!-- BLOG-HEADER ======================================================== -->
	<?php 

		if( !empty($blog_header_feature_image) ) {	// Check for feature image ?>	

		<section id="blog-header" data-type="background" data-speed="2" style="background: url(<?php echo $blog_header_feature_image['url'] ?>) center 0 no-repeat fixed; background-size: cover;">
		</section>

	<?php } else {  // Fallback image ?>

	<section id="blog-header">
		
		<div id="blog-intro">
			<h1>Welcome to the Lily Bay Blog</h1>
			<h2>A PEACEFUL PLACE TO GET INSPIRED</h2>
		</div>

	</section>

	<?php } ?>


	<!-- BLOG-BODY ======================================================== -->
	<section id="blog-body">
		<div class="container">
			<div class="row">
				<!-- BLOG-CONTENT ======================================================== -->
				<main class="col-md-8" id="blog-content">

				<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				
				<div class="row">
					<!-- Post Thumbnail -->
					<div class="col-md-5"><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
					<div class="col-md-7">
						<!-- Post Title -->
						<h1 class="post-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
						<!-- Post Date -->
						<p class="post-date"><?php the_date(); ?></p>
						<!-- Post Excerpt -->
						<?php the_excerpt(); ?>
					</div>
				</div>
				

				<?php endwhile; ?>
				
				<!-- Posts Navigation -->
				<div class="posts-navigation">
	   				<div class="alignleft"><?php previous_posts_link('Newer Entries') ?></div>
   					<div class="alignright"><?php next_posts_link('Older Entries','') ?></div>
   					<div class="clearfix"></div>
				</div>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- content -->

	 			<!-- BLOG-SIDEBAR ======================================================== -->
				<aside class="col-md-3 pull-right" id="blog-sidebar">
					<?php get_sidebar(); ?>
				</aside>

			</div><!-- row -->
		</div><!-- container -->
	</section>

<?php
get_footer();

?>