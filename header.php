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


  <title>Maren Luebbke-Tidow</title>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div id='search' class='search'>
    <span class='search-button'>search</span>
    <?php get_search_form();?>
  </div>

  <div id='close' class='close'>close</div>

  <header>
    <a href='<?php echo get_home_url(); ?>' id='title'><strong>Maren Luebbke-Tidow</strong></a>
    <div id='main-menu'>

      <div class='main-menu-item about'>
        <a href='about'>about</a>
      </div>

      <div class='main-menu-item texts'>
        <a href='texts'>texts</a>
      </div>

      <div class='main-menu-item editorial'>
        <a href='editorial'>editorial</a>
      </div>

      <div class='main-menu-item curatorial'>
        <a href='curatorial'>curatorial</a>
      </div>

      <div class='main-menu-item various'>
        <a href='various'>various</a>
      </div>

    </div>
  </header>
