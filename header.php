<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Material_Design_Dentistry
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'material-design-dentistry' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
		</ul>
		<nav>
			<div class="container">
				<div class="nav-wrapper">
					<a href="#" class="brand-logo center"><img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="Site logo"></a>
					<ul id="nav-mobile" class="left hide-on-med-and-down">
						<li><a class="dropdown-button" href="#!" data-activates="dropdown1">OUR DOCTORS<i class="material-icons right">arrow_drop_down</i></a></li>
						<li><a href="badges.html">OUR CLINIC</a></li>
						<li><a href="collapsible.html">TREATMENTS</a></li>
					</ul>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="sass.html">ARTICLES</a></li>
						<li><a href="badges.html">VIDEOS</a></li>
						<li><a href="collapsible.html">Q&amp;A</a></li>
						<li><a href="collapsible.html">CONTACT US</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->