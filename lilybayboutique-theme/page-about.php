<?php

/* Template Name: About Page Template */

get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- ABOUT ======================================================== -->
		<section id="about">
			<div class="container">
				<div class="row">

					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<!-- Welcome Message -->

						<?php while ( have_posts() ) : the_post() ?>

							<div class="col-md-7"><?php the_content(); ?></div>
							<div class="col-md-5"><?php the_post_thumbnail(); ?></div> 

						<?php endwhile; // end of the loop ?>
						
					
				</div>
			</div>
		</section>

	</main>
</div>



<?php get_footer(); ?>