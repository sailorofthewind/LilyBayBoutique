<?php

$testimonial_image		=	get_field('testimonial_image');
$testimonial_name		=	get_field('testimonial_name');
$testimonial_text		=	get_field('testimonial_text');

?>

<!-- TESTIMONIALS ======================================================== -->
<section id="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo $testimonial_image['url']; ?>" alt="">
			</div>

			<div class="col-md-8">
				<blockquote>&ldquo; <?php echo $testimonial_text; ?> &rdquo; 

				<span><cite>&mdash; <?php echo $testimonial_name; ?></cite></span> 
				</blockquote> 

			</div>
		</div>
	</div>
</section>


