<?php
/**
 * Homepage template file, post archive
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
				<h1>Novità</h1>
			</div>
		</section>

		<main id="main" class="site-main newsfeed">

		<?php while(have_posts()) { ?>
			<?php the_post(); ?>

			<?php get_template_part('template-parts/content', get_post_type()); ?>
		<?php } ?>

		</main><!-- #main -->

	</div>

<?php
get_footer();
