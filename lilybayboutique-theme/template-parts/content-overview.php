<?php

// Advanced Custom Fields

$overview_blog_image				= get_field('overview_blog_image');
$overview_newsletter_image	= get_field('overview_newsletter_image');
$overview_about_image				= get_field('overview_about_image');

?>

<!-- OVERVIEW ======================================================== -->
<section id="overview">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<?php $events_page = get_post(17); ?>
				<a href="<?php echo get_permalink($events_page->ID); ?>">
					<div class="overview-mask">
						<h1>Blog</h1>
						<h3>Read the blog</h3>
					</div>
				</a>
			</div>
			<div class="col-sm-12 col-md-6" style="background: url(<?php echo $overview_blog_image['url'] ?>) center center no-repeat; background-size: cover;" >
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6 col-md-push-6">
				<?php $events_page = get_post(112); ?>
				<a href="<?php echo get_permalink($events_page->ID); ?>">						<div class="overview-mask">
						<h1>Get in touch</h1>
						<h3>Join our list for updates</h3>
					</div>
				</a>
			</div>
			<div class="col-sm-12 col-md-6 col-md-pull-6" style="background: url(<?php echo $overview_newsletter_image['url'] ?>) center center no-repeat; background-size: cover;" >
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6">
				<?php $events_page = get_post(109); ?>
				<a href="<?php echo get_permalink($events_page->ID); ?>">						<div class="overview-mask">
						<h1>About us</h1>
						<h3>Learn more about us</h3>
					</div>
				</a>
			</div>
			<div class="col-sm-12 col-md-6" style="background: url(<?php echo $overview_about_image['url'] ?>) center center no-repeat; background-size: cover;" >
			</div>
		</div>	
	</div>
</section>