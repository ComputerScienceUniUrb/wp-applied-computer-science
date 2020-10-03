<?php
/*
Template Name: Bacheca
*/

get_header();

$loop = get_last_bulletin_posts(-1);
?>

<div id="primary" class="content-area">
	<section class="title">
		<div class="container">
			<h1>Bacheca</h1>
		</div>
	</section>

	<main id="main" class="site-main">

<?php
if($loop->have_posts()) {
	while($loop->have_posts()) {
		$loop->the_post();
?>

		<?php get_template_part('template-parts/clean', get_post_type()); ?>

<?php
	}
}
else {
?>

	<p>Non ci sono annunci in bacheca.</p>

<?php
}
?>

	</main>

</div>

<?php
get_footer();
