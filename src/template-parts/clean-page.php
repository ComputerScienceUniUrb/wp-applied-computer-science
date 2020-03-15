<?php
/**
 * Template part for displaying a clean page.
 * @package applied-computer-science
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</div>
</article>
