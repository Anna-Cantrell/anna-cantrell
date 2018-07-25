<?php
/**
 * Header Template
 *
 * This file is the header template for the WordPress theme. It displays the top
 * part of the HTML document.
 *
 * @package WordPress
 * @subpackage Anna Cantrell
 * @since Anna Cantrell 1.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<?php
	$headerClass = "page";
	if ( is_front_page() ) :
			$headerClass = "home";
	endif;
?>

<body <?php body_class(); ?> class="<?php echo $headerClass ?>">


	<section id="header" class="<?php echo $headerClass ?>">
      <div class="wrapper">
        <div class="container">

          <div id="titleContainer" class="title-container">
            <h1 id="name"><a href="<?php echo get_site_url(); ?>">Anna Cantrell</a></h1>
            <p id="tagline">design + develop + experience</p>
          </div>

          <div id="hr" class="nav-hr">
          </div>

          <ul class="nav-bar">
            <li><a href="#work-section">Work</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>

        </div>
      </div>
    </section>


    <section id="hero" class="<?php echo $headerClass ?>">
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
