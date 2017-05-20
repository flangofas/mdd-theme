<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Material_Design_Dentistry
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function material_design_dentistry_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'material_design_dentistry_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function material_design_dentistry_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'material_design_dentistry_pingback_header' );


function material_design_dentistry_get_language_flag($language = null) {
	global $q_config;
	if (!$language) {
		$language = $q_config['language'];
	}
	$location = qtranxf_flag_location();
	$img_url = $location . $q_config['flag'][$language];

	return '<img src="' . $img_url . '">';
}

function material_design_dentistry_active_languages() {
	$items = '';
	foreach (qtranxf_getSortedLanguages() as $language) {
		$img = material_design_dentistry_get_language_flag($language);
		$items .= '<li><a href="' . qtranxf_convertURL('', $language, false, true) . '">' . $img . '</a></li>';
	}

	echo $items;
}

function material_design_dentistry_is_multilingual()
{
	$langs = [];
	if (function_exists('qtranxf_getSortedLanguages')) {
		$langs = qtranxf_getSortedLanguages();
	}

	return empty($langs) ? false : true;
}
