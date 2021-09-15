<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <a class="navbar-brand" href="<?php echo home_url(  ); ?>"><h4><?php echo get_bloginfo('name'); ?></h4></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1">
    <span class="navbar-toggler-icon"></span>
    </button>

    <?php
      wp_nav_menu( array(
          'theme_location'    => 'primary_menu',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
    ?>
    
  </div>
</nav>
<div class="d-flex justify-content-end">

  <?php 
    global $current_user; 
    wp_get_current_user();

    if(is_user_logged_in(  )){
  ?>

    <span><?php echo $current_user->display_name ?></span>, <a href="<?php echo wp_logout_url(); ?>">logout</a>

  <?php } ?>

</div>