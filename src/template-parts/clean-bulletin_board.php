<?php
/**
 * Template part for displaying a clean bulletin board element.
 * @package applied-computer-science
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="entry-content">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_content(); ?>
			<p>Scadenza: <?php echo get_field('expiry_date'); ?></p>
		</div><!-- .entry-content -->
	</div>
</article>
