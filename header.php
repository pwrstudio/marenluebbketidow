<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="theme-color" content="#000">

  <?php // FAVICONS ?>
  <?php get_template_part('template_parts/favicons'); ?>

  <?php // META INFO ?>
  <?php get_template_part('template_parts/meta_info'); ?>


  <title>Maren Lübbke-Tidow</title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div id='search' class='search'>
    <span class='search-button'>search</span>
    <?php get_search_form();?>
  </div>

  <div id='close' class='close'>close</div>

  <header>
    <a href='<?php echo get_home_url(); ?>' id='title'><strong>Maren Lübbke-Tidow</strong></a>
    <div id='main-menu'>
    <a href='about' class='main-menu-item'>about</a>
    <a href='texts' class='main-menu-item'>texts</a>
    <a href='editorial' class='main-menu-item'>editorial</a>
    <a href='curatorial' class='main-menu-item'>curatorial</a>
    <a href='various' class='main-menu-item'>various</a>
    </div>
  </header>
