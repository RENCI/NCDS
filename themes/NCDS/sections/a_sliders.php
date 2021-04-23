<?php $home_id = 'option'; ?>

<?php if(have_rows('slider_items',$home_id)): ?> 

  <section class="a slider-widget">
    <div class="slider-a">
      <div id="home-slider" class="carousel slide carousel-fade data-ride="carousel">
      <div class="container bullets">
         <ol class="carousel-indicators"></ol>
      </div>
         <div class="carousel-inner" role="listbox">
          <?php $c = 0; /* This variable is used in order to see if there is
          more than one  item, if that is the case we are going to show the arrows at the bottom.
          if not, the arrows wont be displayed. */?>
          <?php  while (have_rows('slider_items',$home_id)) : the_row();

            /* All the items variables goes here. */

            if(get_sub_field('image')) {
              $image = get_sub_field('image')['sizes']['hd'];
            }else{
              $image = get_template_directory_uri().'/images/slider.jpg';
            }  

            $video = get_sub_field('video');
            $title = get_sub_field('title');
            $label = get_sub_field('label');
            $url   = get_sub_field('url');

          ?>

            <?php /* Every single one of the sliders are represented on this structure. */ ?>

            <div class="slider-box">
              <video id="home-video" class="embed-responsive-item" autoplay="" loop=""  muted="">
                  <source src="<?php echo $video; ?>" >
                  Your browser does not support the video tag.
              </video>  
              <div class="bg-img" style="background-image:url('<?php echo $image; ?>');"></div>
              <div class="container">
                <div class="caption-a">
                  <div class="content-wrap">
                    <h2><?php echo $title; ?></h2>
		    <?php if ($label): ?>
                        <a href="<?php echo $url; ?>" class="btn-1"><?php echo $label; ?></a>
		    <?php endif; ?>
                  </div>
                </div>  
              </div>
            </div>

            <?php $c++; ?>                         

          <?php endwhile; ?>      
        </div>
        <?php /* See comment above */ ?>
        <?php if($c > 1): ?>
          <a class="left carousel-control" href="#home-slider" role="button" data-slide="prev">
            <span class="glyphicon-chevron-left fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#home-slider" role="button" data-slide="next">
            <span class="glyphicon-chevron-right fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </section>

<?php endif; ?> 
