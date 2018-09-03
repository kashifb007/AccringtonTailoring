 <?php
/**
 * The main template file
 *
 *
 * @package WordPress
 * @subpackage Accrington
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<?php if ( have_posts() ) : ?>
 

<?php  // Start the loop.
			while ( have_posts() ) : the_post(); 

//output page content
the_content();

// End the loop.
			endwhile;

				?>

<?php endif; ?>

<?php get_footer();