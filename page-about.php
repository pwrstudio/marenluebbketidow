<?php get_header(); ?>

<?php $CATEGORY = "about";?>

<div class='column left'>

  <?php // Links ?>
  <?php if(have_rows('links')):?>
    <div class='menu-header'>links</div>
    <?php while ( have_rows('links') ) : the_row(); ?>
      <a href='<?php echo get_sub_field( 'url' );?>' target=_blank class='menu-item'>
        <p>
          <?php echo get_sub_field( 'title' );?>
        </p>
      </a>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php // Downloads ?>
  <?php if(have_rows('downloads')):?>
    <div class='menu-header'>downloads</div>
    <?php while ( have_rows('downloads') ) : the_row(); ?>
      <?php $url = get_field('url'); ?>
      <a href='<?php echo $url['url'];?>' download class='menu-item'>
        <p>
          <?php echo get_sub_field( 'title' );?>
        </p>
      </a>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php // Contact ?>
  <div class='menu-header'>contact</div>
  <div class='menu-item'>
    <?php echo get_field('contact');?>
  </div>

</div>

<div class='column right'>
  <div class='single-post'>
    <?php echo get_field('main_content');?>
  </div>
</div>

<?php get_footer(); ?>
