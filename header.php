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


  <title><?php wp_title(" | ", TRUE, "RIGHT"); ?></title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div id='search' class='search'>search</div>

  <header>
    <div id='title'><strong>Maren Lübbke-Tidow</strong></div>
    <div id='main-menu'>
    <a href='about' class='main-menu-item'>about</div>
    <a href='texts' class='main-menu-item'>texts</div>
    <a href='editorial' class='main-menu-item'>editorial</div>
    <a href='curatorial' class='main-menu-item'>curatorial</div>
    <a href='various' class='main-menu-item'>various</div>
    </div>
  </header>
