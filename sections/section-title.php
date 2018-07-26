<?php
include('variables.php');
?>

<section class="section section--title<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?>">
		<?php if ( get_sub_field('page_title') ): ?>
			<h1 class="title">
				<?php the_sub_field('page_title'); ?>
			</h1>
		<?php endif; ?>
		<?php if ( get_sub_field('subtitle') ): ?>
			<h3 class="subtitle"><?php the_sub_field('subtitle') ?></h3>
		<?php endif; ?>
	</div>
</section>
