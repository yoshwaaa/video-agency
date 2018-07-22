<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,500,700" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <header>
        <div class="container">
            <a href="/" class="logoLink">
                <div class="logo">
                    <span class="logoColor">TY</span>LER <span class="logoWeight">JEWETT</span>
                </div>
            </a>    
            <div class="header-menu">
                <a class="menuLink" href="/portfolio/">Portfolio</a>
                <a class="menuLink" href="/about/">About</a>
                <a class="menuLink" href="/reel/">Reel</a>
                <a class="menuLink" href="/wp-content/themes/TyJewettTheme/images/tylerjewettresume.pdf" download>Resume</a>
                <a class="menuLinkButton" href="/contact/">
                    <div class="header-button">Contact Me</div>
                </a>
            </div>
        </div>
    </header>
    <div id="header-menu-button">Menu</div>
	<div id="content" class="site-content">
