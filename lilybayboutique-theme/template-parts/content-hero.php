<?php 

// Custom Fields

$hero_background_image_url 	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );


?>

<!-- HERO ======================================================== -->
<?php if( has_post_thumbnail() ) {	// Check for feature image ?>	

	<section id="hero" data-type="background" data-speed="1.5" style="background: url('<?php echo $hero_background_image_url; ?>') center 0 no-repeat fixed; background-size: cover;">
	</section>

<?php } else {  // Fallback image ?>

	<section id="hero" data-type="background" data-speed="1.5"></section>

<?php } ?>

<div id="welcome">
	<h1>Hypoallergenic Jewellery Carefully Handmade in London</h1>
	<h2>Thank you for your visit</h2>
	<a id="arr-down" href="#"><i class="fa fa-angle-down fa-2x" aria-hidden="true" id="arr-down"></i></a>
	<h2 id="featured-products">Featured Products</h2>
</div>