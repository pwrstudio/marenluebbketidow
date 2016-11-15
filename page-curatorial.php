<?php get_header(); ?>

<?php $CATEGORY = "curatorial";?>

<div class='column left'>
  <?php // Output menu ?>
  <?php $args = array('post_type' => 'post', 'category_name' => $CATEGORY, 'posts_per_page' => -1); ?>
  <?php $about = new WP_Query( $args ); ?>
  <?php while ( $about->have_posts() ) : $about->the_post(); ?>
    <?php get_template_part('menu-item'); ?>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
</div>

<div class='column right'>
  <?php // Output content ?>
  <?php $args = array('post_type' => 'post', 'category_name' => $CATEGORY, 'posts_per_page' => -1); ?>
  <?php $about = new WP_Query( $args ); ?>
  <?php while ( $about->have_posts() ) : $about->the_post(); ?>
    <?php get_template_part('content'); ?>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>

</div>

<?php get_footer(); ?>
