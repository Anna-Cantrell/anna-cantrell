<?php
include('variables.php');
?>

<section class="section section--image<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?>">
		<?php if ( get_sub_field('image') ): ?>
			<?php $image = get_sub_field('image'); ?>
			<img src="<?php echo $image['url']; ?>" alt="" />
		<?php endif; ?>
	</div>
</section>
