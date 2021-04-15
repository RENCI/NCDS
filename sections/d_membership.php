<?php 

  $home_id      = 'option';
  $memberTitle = get_field('memberTitle',$home_id);
  $memberLabel = get_field('memberLabel',$home_id);
  $memberUrl = get_field('memberUrl',$home_id);
  if(get_field('memberImage',$home_id)) {
    $memberImage = get_field('memberImage',$home_id)['sizes']['hd'];
  }else{
    $memberImage = get_template_directory_uri().'/images/bg-d.jpg';
  }  

?>
<section class="d" style="background-image:url('<?php echo $memberImage; ?>');">
  <div class="container">
    <?php if($memberTitle): ?>
      <h2><?php echo $memberTitle; ?></h2>
    <?php endif; ?>
    <div class="row center-xs">
      <div class="col-xs-12 col-sm-10">
        <div class="content-wrap gr-col-3 gr-sm-auto">
          <?php if( have_rows('memberItems',$home_id) ): ?>
            <?php  while ( have_rows('memberItems',$home_id) ) : the_row();
                
                $title = get_sub_field('$title');
                $text = get_sub_field('text');
          ?>

                <div class="single-box">                            
                  <h3><?php echo $title; ?></h3>
                  <p><?php echo $text; ?></p>                   
                </div>                           
            
            <?php endwhile; ?>   
          <?php endif; ?>
        </div>
        <div class="link">
          <a href="<?php echo $memberUrl; ?>" class="btn-1"><?php echo $memberLabel; ?></a>
        </div>
      </div>
    </div>
  </div>          
</section>