<?php
/**
 * Header Template
 *
 * This file is the header template for the WordPress theme. It displays the top
 * part of the HTML document.
 *
 * @package WordPress
 * @subpackage Brisk
 * @since Brisk 1.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<section id="header">
	<div class="wrapper">
		<div class="container">

			<div id="titleContainer" class="title-container">
				<h1 id="name">Anna Cantrell</h1>
				<p id="tagline">design + develop + experience</p>
			</div>

			<div id="hr" class="nav-hr">
			</div>

				<?php wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu_class' => 'nav-bar'
				 )
				); ?>
				
		</div>
	</div>
</section>


<section id="hero">
	<div class=" wrapper">
		<div class="container">

			<div class="geometry-container">
				<div id="rhom" class="rhom-container">
					<div class="geo-rhom-outer"></div>
					<div class="geo-rhom-inner"></div>
				</div>

					<div id="par" class="par-container">
						<div class="geo-par-1"></div>
						<div class="geo-par-2"></div>
					</div>
			</div>

		</div>
	</div>
</section>
