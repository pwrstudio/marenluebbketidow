<?php get_header(); ?>

<?php $CATEGORY = "about";?>


<div class='column right about-column'>
  <div class='inner'>
    <div class='single-post'>
      <?php echo get_field('main_content');?>
    </div>
  </div>
</div>

<div class='column left about-meta'>
  <div class='inner'>

    <?php // Links ?>
    <?php if(have_rows('links')):?>
      <div class='menu-header'>links</div>
      <?php while ( have_rows('links') ) : the_row(); ?>
        <a href='<?php echo get_sub_field('url');?>' target=_blank class='menu-item external'>
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
        <a href='<?php echo $file['url'];?>' download class='menu-item external'>
          <p>
            <?php echo get_sub_field( 'title' );?>
          </p>
        </a>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php // Contact ?>
    <div class='menu-header'>contact</div>
    <a href="mailto:<?php echo get_field('email');?>" class='menu-item external'>
      <p>email</p>
    </a>

  </div>

</div>


<?php get_footer(); ?>
