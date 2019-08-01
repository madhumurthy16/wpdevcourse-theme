<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    <h4><?php bloginfo('description'); ?></h4>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.jpg" alt="" />

  </header>
