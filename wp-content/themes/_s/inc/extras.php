<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package _s
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function _s_body_classes( $classes ) {
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
add_filter( 'body_class', '_s_body_classes' );

/**
 * Clean WordPress nav menu.
 * Deletes all CSS classes and id's, except for those listed in the array below.
 */
function custom_wp_nav_menu($var) {
  return is_array($var) ? array_intersect($var, array(
	//List of allowed menu classes
	'first',
	'last',
	'current_page_item',
	'current_page_parent',
	'current_page_ancestor',
	'current-menu-ancestor',
	'active'
	)
  ) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');

//Replaces "current-menu-item" (and similar classes) with "active"
function current_to_active($text){
  $replace = array(
	//List of menu item classes that should be changed to "active"
	'current_page_item' => 'active',
	'current_page_parent' => 'active',
	'current_page_ancestor' => 'active',
	'current-menu-ancestor' => 'active'
  );
  $text = str_replace(array_keys($replace), $replace, $text);
	return $text;
}
add_filter ('wp_nav_menu','current_to_active');

//Deletes empty classes and removes the sub menu class
function strip_empty_classes($menu) {
  $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
  return $menu;
}
add_filter ('wp_nav_menu','strip_empty_classes');
