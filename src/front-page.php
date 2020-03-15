<?php
/**
 * The front page template file
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package applied-computer-science
 */

get_header();
?>

	<div id="primary" class="content-area">

	<?php if(have_posts()) { ?>
	<?php the_post(); ?>

		<section class="title">
			<div class="container">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>

	<?php if(has_post_thumbnail()) { ?>
		<section class="hero">
			<div class="container">
				<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
				<img src="<?php echo $thumb[0]; ?>" width="<?php echo $thumb[1]; ?>" height="<?php echo $thumb[2]; ?>" srcset="<?php echo wp_get_attachment_image_srcset(get_post_thumbnail_id()); ?>" alt="" />
			</div>
		</section>

	<?php } ?>
	
	<?php rewind_posts(); ?>
<?php } ?>

		<main id="main" class="site-main">

		<?php while(have_posts()) { ?>
			<?php the_post(); ?>

			<?php get_template_part('template-parts/clean', get_post_type()); ?>
		<?php } ?>

		</main><!-- #main -->

	</div>

<?php
get_footer();
