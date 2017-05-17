<?php

/* Template Name: Contact Page Template */

get_header();

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- CONTACT ======================================================== -->
		<section id="contact">
			<div class="container">
				<div class="row">

					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<!-- Welcome Message -->
					<div class="col-md-6">

						<?php while ( have_posts() ) : the_post() ?>

							<?php the_content(); ?>

							<?php the_post_thumbnail(); ?>

						<?php endwhile; // end of the loop ?>
						
					</div>

					<!-- Contact Form -->
					<div class="col-md-6">

						<?php echo do_shortcode( '[contact-form-7 id="266" title="Primary Contact Form"]' ); ?>

					</div>
					
				</div>
			</div>
		</section>

	</main>
</div>





<?php get_footer(); ?>