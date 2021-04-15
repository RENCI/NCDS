 <?php

  $home_id     = 'option';
  $impactTitle = get_field('impactTitle',$home_id);
  if(get_field('impactImage',$home_id)) {
    $impactImage = get_field('impactImage',$home_id)['sizes']['hd'];
  }else{
    $impactImage = get_template_directory_uri().'/images/bg-e.jpg';
  } 

?>

<section class="e bg-cer" style="background-image:url('<?php echo $impactImage; ?>');">
  <div class="container">
    <?php if($impactTitle): ?>
      <h2><?php echo $impactTitle; ?></h2>
    <?php endif; ?>
    <div class="content-wrap gr-col-4 gr-xs-auto">
      <?php if( have_rows('impactItems',$home_id) ): ?>
        <?php  while ( have_rows('impactItems',$home_id) ) : the_row();
            
            $amount = get_sub_field('amount');
            $unit = get_sub_field('unit');
            $title = get_sub_field('$title');
      ?>

          <div class="single-box">                            
            <span class="amount-wrap">
              <span class="amount"><?php echo $amount; ?> <span class="unit"><?php echo $unit; ?></span></span>
            </span>
            <span class="title"><?php echo $title; ?></span>
          </div>                      
        
        <?php endwhile; ?>   
      <?php endif; ?> 

    </div>
  </div>
</section>
