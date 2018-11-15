<?php
/*
Plugin Name: &nbsp;✨Material Web Components for WP✨
Description: Support for Material Web Components by Google
Plugin URI: https://github.com/pixelcollective/wp-material-web-components
Author: Tiny Pixel Collective, Kelly Mears <developers@tinypixel.io>
Version: 1.0.0
Author URI: https://tinypixel.io
*/

add_shortcode( 'mdc-menu', function ( $atts ) {
	$attributes = shortcode_atts( array(
    'location' => 'mdc_app_bar_navigation',
    'component' => 'mdc_app_bar',
  ), $atts );

  $menu_name = get_term(get_nav_menu_locations()[$attributes['location']], 'nav_menu')->name;

  if($attributes['component'] == 'mdc_app_bar') {
    $menu = wp_nav_menu( array(
      'theme_location' => $attributes['location'],
      'menu_class'     => 'mdc-button ripple',
      'container'      => '',
      'echo'           => false,
      'items_wrap'     => '%3$s',
      'depth'          => 0,
      'walker'         => new MDC_App_Bar_Navwalker(),
    ));

  } else {
    $menu = '<h6 class="mdc-list-group__subheader">'. $menu_name .'</h6>';
    $menu .= wp_nav_menu( array(
      'theme_location' => $attributes['location'],
      'menu_class'     => 'mdc-button ripple',
      'container'      => '',
      'echo'           => false,
      'items_wrap'     => '%3$s',
      'depth'          => 0,
      'walker'         => new MDC_Drawer_Navwalker(),
    ));
  }

  $menu .= '<hr class="mdc-list-divider">';

  return $menu;
});

add_action('after_setup_theme', function () {
  register_nav_menus([
    'mdc_app_bar_navigation' => __('App Bar', 'tiny_pixel'),
    'mdc_drawer_navigation_a' => __('Drawer A', 'tiny_pixel'),
    'mdc_drawer_navigation_b' => __('Drawer B', 'tiny_pixel'),
  ]);
});

class MDC_App_Bar_Navwalker extends Walker_Nav_Menu 
{
  function start_lvl( &$output, $depth = 0, $args = array() ) 
  {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent\n";
  }

  function end_lvl( &$output, $depth = 0, $args = array() ) 
  {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent\n";
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) 
  {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;
    $classes[] .= 'mdc-button ripple';
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    $output .= $indent . '';
    $attributes  = ! empty( $class_names )      ? ' class="'  . esc_attr( $class_names ) .'"' : '';
		$attributes .= ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function end_el( &$output, $item, $depth = 0, $args = array() ) 
  {
		$output .= "";
	}
}

class MDC_Drawer_Navwalker extends Walker_Nav_Menu 
{
  function start_lvl( &$output, $depth = 0, $args = array() ) 
  {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent\n";
  }

  function end_lvl( &$output, $depth = 0, $args = array() ) 
  {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent\n";
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) 
  {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;
    $classes[] .= 'mdc-list-item ripple';
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    $output .= $indent . '';
    $attributes  = ! empty( $class_names )      ? ' class="'  . esc_attr( $class_names ) .'"' : '';
		$attributes .= ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $item_output = $args->before;
    $item_output .= '';
    $item_output .= '<a'. $attributes .'>';
    $item_output .= '<i class="material-icons mdc-list-item__graphic" aria-hidden="true">bookmark</i>';
    $item_output .= '<span class="mdc-list-item__text">';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span>';
    $item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }

  function end_el( &$output, $item, $depth = 0, $args = array() ) 
  {
		$output .= "";
	}
}