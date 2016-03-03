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
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="#demos">Demos</a></li>
				<li><a href="#pricing">Pricing</a></li>
				<li><a href="#">Learn</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#"><span>Create Account</span></a></li>

			</ul>
		</div>
	</div>
</header>
