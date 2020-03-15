<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package applied-computer-science
 */
get_header();
?>

	<div id="primary" class="content-area">

<?php if((is_front_page() || is_singular()) && have_posts()) { ?>
	<?php the_post(); ?>

	<?php if(has_post_thumbnail()) { ?>
		<section class="hero">
			<div class="container">
				<img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>" srcset="<?php echo wp_get_attachment_image_srcset(get_post_thumbnail_id()); ?>" alt="" />
			</div>
		</section>

	<?php } ?>
	
	<?php rewind_posts(); ?>
<?php } ?>

		<main id="main" class="site-main">

		<?php while(have_posts()) { ?>
			<?php the_post(); ?>

			<?php get_template_part('template-parts/content', get_post_type()); ?>

			<?php
			// if (get_post_type() === 'bulletin_board' || get_post_type() === 'seminars') {

			// } else {
			// 	the_post_navigation();

			// 	// If comments are open or we have at least one comment, load up the comment template.
			// 	if ( comments_open() || get_comments_number() ) :
			// 		comments_template();
			// 	endif;
			// }
			?>

		<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
