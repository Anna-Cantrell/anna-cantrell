<?php
include('variables.php');
?>

<section class="section section--grid<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?>">

	<?php get_template_part('sections/section', 'global-work'); ?>

	</div>
</section>
