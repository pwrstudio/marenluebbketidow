<div id='' class='post-item'>
  <h2>
    <?php echo get_field('full-title');?>
  </h2>
  <div class='content'>
    <?php echo get_field('main-content');?>
  </div>
  <?php $pdf = get_sub_field('pdf'); ?>
  <?php if($pdf):?>
    <div class='pdf'>
      <a href='' target=_blank>Open pdf</a> (New tab)
    </div>
  <?php endif;?>
</div>
