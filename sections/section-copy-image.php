<?php
include('variables.php');
?>

<section class="section section--image-copy<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?>">

      <?php
        $image = get_sub_field('image');
        $position = get_sub_field('image_position');
      ?>
      <div class="content-flex-container <?php echo $position; ?>">
        <div class="content-body">
          <?php the_sub_field('copy'); ?>
        </div>
        <div class="image-container">
          <div class="image-wrapper">
            <?php if ($image) : ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div>
          <?php if ( get_sub_field('image_caption') ) : ?>
          <div class="caption-wrapper">
            <?php the_sub_field('image_caption'); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>

	</div>
</section>
