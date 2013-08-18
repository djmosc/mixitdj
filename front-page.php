<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mixitdj
 * @since mixitdj 1.0
 */

get_header(); ?>
<section id="front-page">
	<?php while ( have_posts() ) : the_post(); ?>
	<div id="content" <?php post_class(); ?>>
		<?php if(!$post->post_content == ''): ?>
		<div class="page-content container">
			<?php the_content(); ?>
		</div>
		<?php endif; ?>
		<?php if ( get_field('content')):?>
		<?php get_template_part('inc/content'); ?>
		<?php endif; ?>
	</div>
	<?php endwhile; // end of the loop. ?>
</section><!-- #front-page -->

<?php get_footer(); ?>