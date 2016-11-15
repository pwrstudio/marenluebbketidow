<div id='<?php echo get_post_field( 'post_name', get_post() );?>' class='post-item'>
  <h2>
    <?php echo get_field('full_title');?>
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
