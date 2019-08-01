<?php

  function itms_register_menus() {
    register_nav_menus(
      array(
        'header-menu' => _( 'Header Menu' ),
        'footer-menu' => _(' Footer Menu ')
      )
    );
  }
  add_action( 'init', 'itms_register_menus' );

  function itms_custom_theme_assets() {
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css' );
  }
  add_action( 'wp_enqueue_scripts', 'itms_custom_theme_assets' );

 ?>
