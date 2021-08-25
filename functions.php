<?php 

function init(){

  wp_enqueue_script( 'jquery' );

  wp_enqueue_style('style', get_stylesheet_directory_uri(  ) . '/style.css', [], false, 'all');

  if( is_page( 'home' ) ){
    wp_enqueue_style( 'my-app', get_template_directory_uri(  ). '/dist/app.css', [], false, 'all' );
  }

  if ( is_page( 'conditionally-load-style' ) ){
    wp_enqueue_style( 'conditionally-load-style', get_template_directory_uri(  ). '/dist/conditionally-load-style.css', [], false, 'all' );
  }

  if ( is_page( ['bfl-video-list', 'home'] ) ){
    wp_enqueue_style( 'bfl-video-list-style', get_template_directory_uri(  ). '/dist/bfl-video-list.css', [], false, 'all' );
    wp_enqueue_script( 'bfl-video-list-js', get_template_directory_uri(). '/dist/bfl-video-list.js ', ['jquery'], false, true);
  }

  // wp_enqueue_script( 'my-style', get_template_directory_uri(). '/dist/app.js ', ['jquery'], false, true);


}

add_action('wp_enqueue_scripts', 'init');

// Menus
add_theme_support( 'menus' );

register_nav_menus( array(
  "primary_menu" => "Primary Location",
) );

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

add_filter( 'nav_menu_link_attributes', 'prefix_bs5_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function prefix_bs5_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}









?>