<?php get_header(); ?>

<div class='column left'>

  <div class='menu-item'>
    <strong>search for “<?php echo get_search_query();?>”: <?php echo $wp_query->found_posts;?> results
  </div>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php // get_template_part( 'menu-item'); ?>
    <a href='#<?php echo get_post_field( 'post_name', get_post() );?>' class='menu-item'>
      <?php echo get_field('full_title');?>
    </a>
  <?php endwhile; ?>

</div>

<div class='column right'>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php // get_template_part( 'content'); ?>
    <div id='<?php echo get_post_field( 'post_name', get_post() );?>' class='post-item'>
      <h2>
        <strong><?php echo get_field('full_title');?></strong>
      </h2>
      <div class='content'>
        <?php echo get_field('main_content');?>
      </div>
      <?php $pdf = get_field('pdf'); ?>
      <?php if($pdf):?>
        <div class='pdf'>
          <a href='<?php echo $pdf['url'];?>' target=_blank>Open pdf</a> (New tab)
        </div>
      <?php endif;?>
    </div>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
