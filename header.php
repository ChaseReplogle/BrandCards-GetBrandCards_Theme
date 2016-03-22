<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package get_brandcards
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,600' rel='stylesheet' type='text/css'>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '1014859888579690');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1014859888579690&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header_menu" id="sticky">
	<div class="header_menu_wrapper container row">
		<div class="branding col span_4">
			<a href="/"><h1>BrandCards</h1></a>
		</div>
		<div class="menu col span_20">
			<a href="#" class="mobile_toggle"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile_menu_icon.png" alt="Mobile Icon"></a>
			<ul class="desktop_menu">
				<li><a href="http://getbrandcards.com/">Home</a></li>
				<li><a href="http://getbrandcards.com/#demos">Demos</a></li>
				<li><a href="http://getbrandcards.com/#pricing">Pricing</a></li>
				<li><a href="/learn">Learn</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="http://brandcardsapp.com/membership-account/membership-levels/" target="_Blank"><span>Create Account</span></a></li>
				<li><a href="http://brandcardsapp.com">Login</a></li>
			</ul>

			<ul class="mobile_menu">
				<li><a href="http://getbrandcards.com/">Home</a></li>
				<li><a href="http://getbrandcards.com/#demos">Demos</a></li>
				<li><a href="http://getbrandcards.com/#pricing">Pricing</a></li>
				<li><a href="/learn">Learn</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="http://brandcardsapp.com/membership-account/membership-levels/" target="_Blank"><span>Create Account</span></a></li>
				<li><a href="http://brandcardsapp.com">Login</a></li>
			</ul>
		</div>
	</div>
</header>
