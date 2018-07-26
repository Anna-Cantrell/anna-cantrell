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
						<a href="<?php the_permalink(); ?>"></a>

						<?php if( has_tag() ) : ?>
							<div class="tag-container">
								<p>
									<?php
								  $posttags = get_the_tags();
								  if ($posttags) {
								    foreach($posttags as $tag) {
								      echo $tag->name . ' ';
								    }
								  }
								?>
								</p>
							</div>
						<?php endif; ?>

						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'post-thumbnail', ['class' => 'article-image'] ); ?>
						<?php endif; ?>
						<?php if ( has_category('react') || has_category('wordpress') ) : ?>
							<?php
							$wpIcon = get_field('wordpress_icon', 'options');
							$reactIcon = get_field('react_icon', 'options');
							?>
							<div class="icon-container">
								<?php if ( has_category('react') ) : ?>
									<div class="icon">
										<img src="<?php echo $reactIcon['url']; ?>" alt="" />
									</div>
								<?php endif; ?>
								<?php if ( has_category('wordpress') ) : ?>
									<div class="icon">
										<img src="<?php echo $wpIcon['url']; ?>" alt="" />
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
					</div>

					<?php wp_reset_postdata(); ?>
				<?php endif; ?>

			<?php endwhile; ?>
			</div>
		<?php endif; ?>

	</div>
</section>
