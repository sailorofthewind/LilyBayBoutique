 <?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lilybayboutique
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<!-- post-details -->
		<div class="post-details">
			<span><i class="fa fa-calendar" aria-hidden="true"></i><time><?php the_date(); ?></time></span>
			<span><i class="fa fa-folder-o" aria-hidden="true"></i><?php the_category(', '); ?></span>
			<span><i class="fa fa-tags" aria-hidden="true"></i><?php the_tags(); ?></span>
			<span><?php edit_post_link('Edit', '<i class="fa fa-pencil"></i>', ''); ?></span>

			<!-- post-comment-badge-->
			<div class="post-comments-badge">
				<a href="<?php comments_link(); ?>"><i class="fa fa-comments-o" aria-hidden="true"></i> <?php comments_number( 0, 1, '%'); ?></a>
			</div><!-- post-comments-badge -->

		</div><!-- post-details -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<!-- post-image -->
	<?php if(has_post_thumbnail() ) { // check for feature image ?>
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php } ?>

	<!-- post-excerpt -->
	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div>

</article><!-- #post-## -->
