<?php get_header(); ?>
<?php get_template_part('/template-parts/interior_top'); ?>
<section class="interior interior-category">
	<div class="container">
      <div class="row">
				<div class="col-xs-12 col-md-12 side-direction side-direction-left">
					<?php if (have_posts()) : ?>

		          <div class="blog-widget">
		            <div class="filter-wrap">
		            </div>
										<?php while (have_posts()) : the_post(); ?>
											<?php 
											  if(get_sub_field('preview_image')) {
											    $image = get_sub_field('preview_image')['sizes']['md'];
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
					              <a href="<?php echo get_permalink(); ?>" class="btn-2"><span>read more</span></a>
					            </div>
					          </div>
		                <hr>
										<?php endwhile; ?>
										<div class="pagination">
											<?php if ( $wp_query->max_num_pages > 1 ) : ?>
											<?php the_posts_pagination(array( 'mid_size' => 2, 'screen_reader_text' => __( ' ', 'textdomain' ),) ); ?>
											<?php endif; ?>	
										</div>
									<?php endif; ?>
		          </div>						
				</div> 
			</div> 		 	
	</div> 
</section>
<?php get_template_part('boxes'); ?>
<?php get_footer(); ?>