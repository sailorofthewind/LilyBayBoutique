<?php

/*
	Template Name: Home Page
*/

?>

<?php get_header(); ?>

	<?php get_template_part('template-parts/content', 'hero'); ?>

	<?php get_template_part('template-parts/content', 'featured'); ?>

	<?php get_template_part('template-parts/content', 'testimonials'); ?>

	<?php get_template_part('template-parts/content', 'overview'); ?>

	<?php get_template_part('template-parts/content', 'instagramfeed'); ?>

<?php get_footer(); ?>

