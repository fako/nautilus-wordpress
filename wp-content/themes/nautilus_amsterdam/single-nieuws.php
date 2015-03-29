<?php
/**
 * Template name: Custom nieuws voorpagina
 * Sample template for displaying single nieuws posts.
 * Save this file as as single-nieuws.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	

	<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php the_excerpt(); ?>

		<h2>Custom Fields</h2>	
		
		<strong>Afbeelding:</strong> <img src="<?php print_custom_field('image_news:to_image_src'); ?>" /><br />




<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
