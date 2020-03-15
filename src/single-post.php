<?php
/**
 * News post template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<?php if(have_posts()) { ?>
	<?php the_post(); ?>

		<?php if(has_post_thumbnail()) { ?>
		<section class="hero">
			<div class="container">
				<img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>" srcset="<?php echo wp_get_attachment_image_srcset(get_post_thumbnail_id()); ?>" alt="" />
			</div>
		</section>
		<?php } ?>
		
		<main id="main" class="site-main">
			<?php get_template_part('template-parts/content', get_post_type()); ?>
		</main><!-- #main -->

<?php } ?>

	</div><!-- #primary -->

<?php
get_footer();
