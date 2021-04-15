<?php 

  $home_id       = 'option';
  $socialTitle   = get_field('socialTitle',$home_id);
  $socialShortcode   = get_field('socialShortcode',$home_id);
  if(get_field('socialImage',$home_id)) {
    $socialImage = get_field('socialImage',$home_id)['sizes']['hd'];
  }else{
    $socialImage = get_template_directory_uri().'/images/bg-f.jpg';
  }     

?>

<section class="f" style="background-image:url('<?php echo $socialImage; ?>');">
  <div class="container">
    <div class="content-wrap gr-col-2 gr-xs-auto">
      <?php 

      $args = array(
        'post_type' => 'post',
        'category_name' => 'blog',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order'   => 'DESC',    
      );

      $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php 
            if(has_post_thumbnail()) {
              $image = get_the_post_thumbnail_url();
            }else{
              $image = get_template_directory_uri().'/images/default.jpg';
            }
          ?>          
          <div class="single-box">
            <div class="news-wrap">
              <div class="img-wrap bg-overlay" style="background-image:url('<?php echo $image; ?>');">
                <a href="<?php echo get_permalink(); ?>">
                  <span class="category-wrap"><span class="category">Blog</span></span>
                  <h3><?php the_title(); ?></h3>
                </a>
              </div>
            </div>
          </div>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

      <?php endif; ?>      

      <div class="single-box">
        <?php if($socialTitle): ?>
          <h2><?php echo $socialTitle; ?></h2>
        <?php endif; ?>
        <div class="plugin-wrap">
          <?php echo do_shortcode($socialShortcode); ?>
        </div>
      </div>
    </div>
  </div>
</section>