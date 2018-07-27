<?php
/**
 * Footer Template
 *
 * This file is the footer template for the WordPress theme. It displays the
 * bottom part of the HTML document.
 *
 * @package WordPress
 * @subpackage Anna Cantrell
 * @since Anna Cantrell 1.0
 */

?>

<?php wp_footer(); ?>
<?php
	$footerClass = "page";
	if ( is_front_page() ) :
			$footerClass = "home";
	endif;
?>

<footer class="<?php echo $footerClass; ?>">
  <div class="prefooter-container">
    <div class="footer-title">
      Hit me up
    </div>
    <div class="contact-list">
      <?php if (have_rows('footer_links', 'options')) : ?>
        <ul>
        <?php while ( have_rows('footer_links', 'options')) : the_row(); ?>
          <li><a href="<?php the_sub_field('link_url', 'options') ?>" target="_blank"><?php the_sub_field('link_label', 'options') ?></a></li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
  <div class="footer-container">
    &copy;<?php echo date("Y"); ?> Anna Cantrell
  </div>
</footer>

</body>
</html>
