 <?php

  $home_id  = 'option';

?>

<section class="sidebar-wrap">
  <div class="container">
    <div class="content-wrap gr-col-3 gr-xs-auto">
      <?php if( have_rows('boxes',$home_id) ): ?>
        <?php  while ( have_rows('boxes',$home_id) ) : the_row();
            if(get_sub_field('image')) {
              $image = get_sub_field('image')['sizes']['hd'];
            }else{
              $image = get_template_directory_uri().'/images/default.jpg';
            }                
            $title = get_sub_field('title');
            $url = get_sub_field('url');
      ?>

            <div class="single-box bg-overlay bg-cer" style="background-image:url('<?php echo $image; ?>');">
              <a href="<?php echo $url; ?>">
                <span><?php echo $title; ?></span>     
              </a>
            </div>                        
        <?php endwhile; ?>   
      <?php endif; ?> 
    </div>
  </div>
</section>
