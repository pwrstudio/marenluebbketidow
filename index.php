<?php get_header(); ?>

<?php $CATEGORY = "news";?>

<div class='column left'>
  <div class='inner'>
    <?php $args = array('post_type' => 'post', 'category_name' => $CATEGORY, 'posts_per_page' => -1); ?>
    <?php $about = new WP_Query( $args ); ?>
    <?php while ( $about->have_posts() ) : $about->the_post(); ?>
      <?php get_template_part('template_parts/menu-item'); ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div>
</div>

<div class='column right'>
  <div class='inner'>
    <?php $args = array('post_type' => 'post', 'category_name' => $CATEGORY, 'posts_per_page' => -1); ?>
    <?php $about = new WP_Query( $args ); ?>
    <?php while ( $about->have_posts() ) : $about->the_post(); ?>
      <?php get_template_part('template_parts/content'); ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
  </div>
</div>

<?php get_footer(); ?>
