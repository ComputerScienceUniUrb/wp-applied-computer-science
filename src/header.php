<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package applied-computer-science
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<header id="header" class="site-header">
		
		<?php include ('template-parts/social-bar.php'); ?>

		<!-- Logo and menu wrapper -->
		<div class="logo-menu-wrapper">
			<div class="logo-menu-constrainer">
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img id="logo" src="<?php echo get_template_directory_uri() .'/img/favicon-w128.png' ?>" srcset="<?php echo get_template_directory_uri() .'/img/favicon-w128.png' ?> 128w, <?php echo get_template_directory_uri() .'/img/favicon-w256.png' ?> 256w, <?php echo get_template_directory_uri() .'/img/favicon-w512.png' ?> 512w" alt="Logo">
						<div class="logotype">
							<div class="subtitle">Magistrale</div>
							<div class="title">Informatica</div>
							<div class="title">Applicata</div>
						</div>
					</a>
				</div>
				<div class="menu">
					<?php get_main_menu(); ?>
				</div>
				<div class="menu-toggler">
					<i class="fas fa-bars"></i>
				</div>
			</div>
		</div>

		<!-- Sidebar (for mobile) -->
		<div class="sidebar">
			<h1><a href="<?php echo home_url(); ?>"><?php echo get_bloginfo();?></a></h1>
			<div class="menu-toggler">
				<i class="fas fa-bars"></i>
			</div>
			<div class="menu">
				<?php get_main_menu(); ?>
			</div>

			<?php include ('template-parts/social-bar.php'); ?>
		</div>
	</header>

	<div id="content" class="site-content">
