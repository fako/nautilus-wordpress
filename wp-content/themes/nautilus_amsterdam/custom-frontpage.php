<?php
/**
 * Template Name: Custom frontpage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 * Boot Store theme is based on Twentytwelve theme. The official WordPress theme.
 *
 * @package WordPress
 * @subpackage Boot Store
 * @since Boot Store 1.0
 */

get_header();

	if ( ! is_active_sidebar( 'sidebar-page' ) ) $col_width = 'span12';
	else $col_width = 'span9'; ?>

	<div id="primary" class="site-content <?php echo $col_width; ?>">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

<div id="customfrontpagenews">
				<h2>Nautilus Nieuws</h2>

<?php

	$args = array( 'post_type' => 'nieuws', 'posts_per_page' => 5 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		echo('<div class="frontpage-news-article">'.the_title('<h3>','</h3>',false));
		$image_id = get_custom_field('image_news:to_image_src');
		$image = wp_get_attachment_image_src($image_id, 'medium');
		if(!empty($image)){
			echo('<img src="'.$image[0].'" class="alignleft" width="300" />');
		}

		echo '<div class="entry-content" style="clear:both;margin-bottom:2em;">';
		the_excerpt('lees meer...');
		echo '</div>';

		echo('</div>');

	endwhile;

?>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar('page'); ?>
<?php get_footer(); ?>

