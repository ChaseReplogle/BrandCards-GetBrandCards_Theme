<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package get_brandcards
 */

?>

<div class="phone">
	<div class="phone_wrapper container row">
		<p>Take your brands with you, everywhere you go.</p>
		<h2>The world is mobile. Your brands should be, too.</h2>
	</div>
</div>

<div class="footer">
	<div class="footer_wrapper">
		<ul class="social">
			<li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_fb.png"></a></li>
			<li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_twitter.png"></a></li>
			<li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_instagram.png"></a></li>
			<li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_dribbble.png"></a></li>
			<li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_youtube.png"></a></li>
		</ul>
		<ul class="links">
			<li><a href="/">Home</a></li>
			<li><a href="#demos">Demos</a></li>
			<li><a href="#pricing">Pricing</a></li>
			<li><a href="#">Learn</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="http://brandcardsapp.com/membership-account/membership-levels/" target="_Blank">Create Account</a></li>
		</ul>
		<p>BrandCards | Copyright 2015 • All Rights Reserved</p>
	</div>
</div>
<?php wp_footer(); ?>
<script>
  jQuery(document).ready(function( $ ) {
    $("#sticky").sticky({topSpacing:0});
  });
</script>
</body>
</html>
