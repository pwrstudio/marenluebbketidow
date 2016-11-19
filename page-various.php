<?php get_header(); ?>

<?php $CATEGORY = "various";?>
<?php $idObj = get_category_by_slug('various'); ?>
<?php $id = $idObj->term_id; ?>

<div class='column left'>

  <?php $args = array('child_of' => $id); ?>
  <?php $categories = get_categories( $args ); ?>
  <?php foreach($categories as $category): ?>

    <?php $current_category = $category->name;?>

    <div class='menu-header'>
      <?php echo $current_category;?>
    </div>

    <?php $args = array('post_type' => 'post', 'category_name' => $current_category, 'posts_per_page' => -1); ?>
    <?php $about = new WP_Query( $args ); ?>
    <?php while ( $about->have_posts() ) : $about->the_post(); ?>
      <?php get_template_part('template_parts/menu-item'); ?>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>

  <?php endforeach; ?>

</div>

<?php $idObj = get_category_by_slug('various'); ?>
<?php $id = $idObj->term_id; ?>

<div class='column right'>

    <?php $args = array('child_of' => $id); ?>
    <?php $categories = get_categories( $args ); ?>
    <?php foreach($categories as $category): ?>

      <?php $current_category = $category->name;?>

      <?php $args = array('post_type' => 'post', 'category_name' => $current_category, 'posts_per_page' => -1); ?>
      <?php $about = new WP_Query( $args ); ?>
      <?php while ( $about->have_posts() ) : $about->the_post(); ?>
        <?php get_template_part('template_parts/content'); ?>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>

    <?php endforeach; ?>

</div>

<?php get_footer(); ?>
