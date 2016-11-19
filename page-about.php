<?php get_header(); ?>

<?php $CATEGORY = "about";?>


<div class='column right about-column'>
  <div class='single-post'>
    <?php echo get_field('main_content');?>
  </div>
</div>

<div class='column left about-meta'>

  <?php // Links ?>
  <?php if(have_rows('links')):?>
    <div class='menu-header'>links</div>
    <?php while ( have_rows('links') ) : the_row(); ?>
      <a href='<?php echo get_sub_field('url');?>' target=_blank class='about-list-item'>
        <p>
          <?php echo get_sub_field('title');?>
        </p>
      </a>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php // Downloads ?>
  <?php if(have_rows('downloads')):?>
    <div class='menu-header'>downloads</div>
    <?php while ( have_rows('downloads') ) : the_row(); ?>
      <?php $file = get_sub_field('file'); ?>
      <a href='<?php echo $file['url'];?>' download class='about-list-item'>
        <p>
          <?php echo get_sub_field( 'title' );?>
        </p>
      </a>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php // Contact ?>
  <div class='menu-header'>contact</div>
  <p>
    <a href="mailto:<?php echo get_field('email');?>" class='about-list-item'>email</a>
  </p>

</div>


<?php get_footer(); ?>
