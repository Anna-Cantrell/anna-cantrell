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
      <ul>
        <li><a href="#">annac.webdev@gmail.com</a></li>
        <li><a href="">github</a></li>
        <li><a href="">instagram</a></li>
        <li><a href="">linkedin</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-container">
    &copy;<?php echo date("Y"); ?> Anna Cantrell
  </div>
</footer>

</body>
</html>
