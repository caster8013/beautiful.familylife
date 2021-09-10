<?php 

function init(){

  wp_enqueue_script( 'jquery' );

  wp_enqueue_style('style', get_stylesheet_directory_uri(  ) . '/style.css', [], false, 'all');

  wp_enqueue_style( 'custom', get_template_directory_uri(  ). '/dist/custom.css', [], false, 'all' );
  wp_enqueue_script( 'custom', get_template_directory_uri(). '/dist/custom.js', ['jquery'], false, true);

  if( is_page( 'home' ) ){
    // wp_enqueue_style( 'my-app', get_template_directory_uri(  ). '/dist/app.css', [], false, 'all' );
  }

  if ( is_page( 'conditionally-load-style' ) ){
    // wp_enqueue_style( 'conditionally-load-style', get_template_directory_uri(  ). '/dist/conditionally-load-style.css', [], false, 'all' );
  }

  if ( is_page( ['bfl-video-list', 'home'] ) ){
    wp_enqueue_style( 'fontawesome', get_template_directory_uri(). '/dist/all.min.css', [], false, 'all' );
    wp_enqueue_style( 'bfl-video-list', get_template_directory_uri(). '/dist/bfl-video-list.css', [], false, 'all' );
    wp_enqueue_script( 'bfl-video-list', get_template_directory_uri(). '/dist/bfl-video-list.js', ['jquery'], false, true);
  }


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



// 如果没有登入的话，跳转到登陆界面！

// add_action( 'template_redirect', function() {

//   $login_page = home_url( '/login/' );
  
//   if( !is_user_logged_in(  ) && !is_page( 'login' ) ) {

//     wp_safe_redirect( $login_page );
//     exit;

//   }

// });

// 用户logout之后，跳转到登陆界面
// add_action('wp_logout', function() {

//   $login_page = home_url( '/login/' );

//   wp_safe_redirect( $login_page );
//   exit;

// });


// 如果是主页，跳转到 bfl-video-list
add_action( 'template_redirect', function() {

  $redirect_page = home_url( '/bfl-video-list/' );
  
  if( is_front_page() && !is_page( 'bfl-video-list' ) ) {

    wp_safe_redirect( $redirect_page );
    exit;

  }

});




// set the life span of the post password cookie
add_filter( 'post_password_expires', function() {

  return time() + 24 * 3600;

} );

add_filter( 'the_password_form', function() {

  global $post;
  $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
  $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">' . 
  '<div class="input-group"><input name="post_password" id="' . 
  $label . '" type="password" class="form-control" placeholder="Password" size="20" maxlength="20" />
  <button type="submit" name="Submit" class="btn btn-success d-flex justify-content-center align-items-center" value="' . 
  esc_attr__( "Submit" ) . '" ><i class="px-3 h4 fas fa-arrow-right mb-0"></i></button>' . 
  '</div><div class="h6 mt-3"><span class="text-muted">'. __("Note：") .'</span>'. __( "您将要访问的内容有密码保护，请输入密码前往！" ). '</div>'.
  '</form>';

  return $o;  


} );






?>

