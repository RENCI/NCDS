<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
global $mdf_loop;
?>
      
  <?php while ($mdf_loop->have_posts()) : $mdf_loop->the_post();
     // $post_thumbnail_id = get_post_thumbnail_id($post->ID);
     // $image             = wp_get_attachment_image_src($post_thumbnail_id, array(150, 150), false);
      //$totalPost         = wp_count_posts( 'resources' )->publish;
      ?>

      <?php 
        if(has_post_thumbnail()) {
          $image = get_the_post_thumbnail_url();
        }else{
          $image = get_template_directory_uri().'/images/default.jpg';
        }
      ?>

      <div class="single-article">
        <div class="img-wrap" style="background-image: url('<?php echo $image; ?>');">
        </div>
        <div class="right-side">
          <h2><?php the_title(); ?></h2>
          <p><?php echo excerpt(20); ?></p>
          <a href="<?php echo get_permalink(); ?>" class="btn-2"><span class="bd-top"></span><span class="btn-content">read more</span><span class="bd-button"></span></a>
        </div>
      </div>

  <?php endwhile; ?>
   
<?php wp_reset_postdata(); ?>

         
