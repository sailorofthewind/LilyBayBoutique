


<!-- FEATURED ======================================================== -->
<section id="featured">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">

				
				<!-- Display Featured Products -->
				<?php 

			    $featured_query = new WP_Query( array(
										         'tax_query' => array(
										                 array(
										                     'taxonomy' => 'product_visibility',
										                     'field'    => 'name',
										                     'terms'    => 'featured',
										                     'operator' => 'IN'
										                 ),
										          ),
										     ) );  

				if ($featured_query->have_posts()) :   

				    while ($featured_query->have_posts()) :   

				        $featured_query->the_post();  

				        $product = get_product( $featured_query->post->ID );  

				        // here is my output 

				    endwhile;  

				endif;  

				wp_reset_query();

				?>

				<?php the_content(); ?>

			</div>
		</div>
	</div>
</section>