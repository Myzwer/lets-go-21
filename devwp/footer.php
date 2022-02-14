<?php
/**
 * The template for displaying the footer of the Let's Go Theme
 *
 * Contains the opening of the footer of all pages and all subsequent content.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Let's Go
 * @since 1.0.0
 */

?>
<script>
    jQuery(document).foundation();
</script>


<!-- FOOTER START -->
<div class="footer">
    <a href="/frontpage">Home</a> | <a href="/privacy-policy">Privacy Policy</a>
    <p>© <?php echo date("Y"); ?> Foothills Church</p>
</div>
<!-- END OF FOOTER -->





<?php wp_footer(); ?>

</body>
</html>
