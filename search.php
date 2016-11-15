<?php get_header(); ?>

<div class='column left'>

  <div class='menu-item'>
    <strong>search for “<?php echo get_search_query();?>”: <?php echo $wp_query->found_posts;?> results
  </div>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'menu-item'); ?>
  <?php endwhile; ?>

</div>

<div class='column right'>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content'); ?>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
