<?php
/*
Template Name: Projects
*/
?>
<?php get_header(); ?>
<?php get_template_part('/template-parts/interior_top'); ?>
<section class="interior interior-category">
	<div class="container">
      <div class="row">
				<div class="col-xs-12 col-md-12 side-direction side-direction-left">
          <div class="blog-widget">
            <div class="filter-wrap">
            	<?php echo do_shortcode('[mdf_search_form id="490"]'); ?>
            </div>
	          <?php
	            $shortcode = '[mdf_results_by_ajax shortcode="mdf_custom template=any/my_posts post_type=projects orderby=date order=desc page=1 per_page=6" pagination=b]';
	            echo do_shortcode($shortcode); ?>
          </div>	
				</div> 
			</div> 		 	
	</div> 
</section>
<!--
  <?php get_template_part('boxes'); ?>
-->
<?php get_footer(); ?>
