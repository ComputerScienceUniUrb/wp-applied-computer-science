<?php
/**
 * Template part for displaying a clean bulletin board element.
 * @package applied-computer-science
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="newsfeed-element">
			<div class="timestamp">
				<div class="day"><?php echo get_the_date('j'); ?></div>
				<div class="rest">
					<span class="month"><?php echo cdl_month_to_string(get_the_date('n')); ?></span>
					<span class="year"><?php echo get_the_date('Y'); ?></span>
				</div>
			</div>

			<div class="content">
				<h2 id="title-<?php the_ID(); ?>">
					<?php the_title(); ?>
				</h2>
				
				<?php the_content(); ?>

				<p class="subtle expiry-date">Scadenza: <?php echo cdl_date_field_to_extended('expiry_date'); ?>.</p>
			</div>
		</div>
	</div>
</article>
