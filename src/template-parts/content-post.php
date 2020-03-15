<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package applied-computer-science
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="newsfeed-element">
			<div class="timestamp">
				<div class="day"><?php echo get_the_date('j'); ?></div>
				<div class="rest">
					<span class="month"><?php echo get_the_date('n'); ?></span>
					<span class="year"><?php echo get_the_date('Y'); ?></span>
				</div>
			</div>
			<div class="thumb">
			<?php if(has_post_thumbnail()) { ?>
				<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
				<img src="<?php echo $thumb[0]; ?>" width="<?php echo $thumb[1]; ?>" height="<?php echo $thumb[2]; ?>" srcset="<?php echo wp_get_attachment_image_srcset(get_post_thumbnail_id()); ?>" alt="" />
			<?php } ?>
			</div>
			<div class="content">
				<h2 id="title-<?php the_ID(); ?>">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>
