<?php get_header(); ?>
<?php get_template_part('/template-parts/interior_top'); ?>
<section class="interior search-page">
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-md-12 side-direction side-direction-left">
          <div class="content-search">
              <h2 class="search-title"> <?php echo $wp_query->found_posts; ?>
              <?php _e( 'Search Results Found For', 'locale' ); ?>: "<em><?php the_search_query(); ?>"</em> </h2>
              <?php if ( have_posts() ) { ?>
                  <ul class="search-list-result">
                      <?php while ( have_posts() ) { the_post(); ?>
                          <li>
                              <h3><a href="<?php echo get_permalink(); ?>">
                                  <?php the_title();  ?>
                              </a></h3>
                              <?php echo wp_trim_words(get_the_excerpt(),30,'...'); ?>
                              <div class="read-more" style="margin-top: 20px;">
                                <a href="<?php the_permalink(); ?>" class="btn-2"><span class="bd-top"></span><span class="btn-content">read More</span><span class="bd-button"></span></a>
                              </div>
                          </li>
                      <?php } ?>
                  </ul>
                  <?php //paginate_links(); ?>
              <?php } ?>
          </div>
          <div class="pagination">
              <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                  <?php 
                    the_posts_pagination(
                      array( 
                        'mid_size' => 2, 
                        'screen_reader_text' => __( ' ', 'textdomain' ),
                      ) 
                    ); ?>
              <?php endif; ?>
          </div>
      </div>
      </div>             
    </div>
</section>
<?php get_template_part('boxes'); ?>
<?php get_footer(); ?>