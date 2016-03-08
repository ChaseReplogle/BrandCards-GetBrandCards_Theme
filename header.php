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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header_menu" id="sticky">
	<div class="header_menu_wrapper container row">
		<div class="branding col span_4">
			<a href="/"><h1>BrandCards</h1></a>
		</div>
		<div class="menu col span_20">
			<a href="#" class="mobile_toggle"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mobile_menu_icon.png"></a>
			<ul class="desktop_menu">
				<li><a href="getbrandcards.com/">Home</a></li>
				<li><a href="getbrandcards.com/#demos">Demos</a></li>
				<li><a href="getbrandcards.com/#pricing">Pricing</a></li>
				<li><a href="#">Learn</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="http://brandcardsapp.com/membership-account/membership-levels/" target="_Blank"><span>Create Account</span></a></li>
				<li><a href="http://brandcardsapp.com">Login</a></li>
			</ul>

			<ul class="mobile_menu">
				<li><a href="getbrandcards.com/">Home</a></li>
				<li><a href="getbrandcards.com/#demos">Demos</a></li>
				<li><a href="getbrandcards.com/#pricing">Pricing</a></li>
				<li><a href="#">Learn</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="http://brandcardsapp.com/membership-account/membership-levels/" target="_Blank"><span>Create Account</span></a></li>
				<li><a href="http://brandcardsapp.com">Login</a></li>
			</ul>
		</div>
	</div>
</header>
