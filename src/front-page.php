<?php
/**
 * The front page template file
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

		<?php $bulletin_board_query = get_last_bulletin_posts(); ?>
		<?php if($bulletin_board_query->have_posts()) { ?>
		<aside class="bulletin-board">

			<div class="container">
				<h2>Bacheca</h2>
			</div>

			<?php while($bulletin_board_query->have_posts()) { ?>
				<?php $bulletin_board_query->the_post(); ?>

				<?php get_template_part('template-parts/clean', get_post_type()); ?>
			<?php } ?>

			<div class="container">
				<p>
					<a href="<?php echo get_the_permalink(get_page_by_path('bacheca')); ?>">Vedi tutti gli annunci</a>
					•
					<a href="<?php bloginfo('rss2_url'); ?>?post_type[]=bulletin_board" title="Segui il feed RSS della bacheca">Feed RSS bacheca</a>
				</p>
			<div>

		</aside>
		<?php } ?>

	</div>

<?php
get_footer();
