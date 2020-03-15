<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package applied-computer-science
 */

get_header();
?>

	<div id="primary" class="content-area">
		<section class="title">
			<div class="container">
				<h1>Archivio</h1>
			</div>
		</section>
	
		<main id="main" class="site-main">

		<?php while(have_posts()) { ?>
			<?php the_post(); ?>

			<?php get_template_part('template-parts/content', get_post_type()); ?>
		<?php } ?>

		</main><!-- #main -->

	</div>

<?php
get_footer();
