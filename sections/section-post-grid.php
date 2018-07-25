<?php
include('variables.php');
?>

<section class="section section--grid<?php echo isset($classes) ? $classes : ''; ?>">
	<div class="layout layout--<?php echo $layout; ?>">

		<?php if ( have_rows('title') ): ?>
			<div class="post-grid">
			<?php while ( have_rows('title') ) : the_row();
				$project = get_sub_field('page_link', $post_id);
				if ( $project ) :
			    $post = $project;
			    setup_postdata( $post ); ?>

					<div class="post-grid__single">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'post-thumbnail', ['class' => 'article-image'] ); ?>
						<?php endif; ?>
					</div>

					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>
