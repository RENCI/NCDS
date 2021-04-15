<?php get_header(); ?>
<?php get_template_part('/template-parts/interior_top'); ?>
<section class="interior search-page">
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-md-12 side-direction side-direction-left">
<?php 

$search_query = bsearch_clean_terms( apply_filters( 'the_search_query', get_search_query() ) );
 ?>

  <section id="primary">
    <div id="content" role="main">
      <header class="page-header">
        <h1 class="page-title">
          <?php printf( __( 'Search Results for: %s', 'twentyeleven' ), '<span>' . get_search_query() . '</span>' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
        </h1>
      </header>

      <?php echo get_bsearch_results( $search_query, $limit ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
    </div><!-- #content -->
  </section><!-- #primary -->

      </div>
      </div>             
    </div>
</section>
<?php get_template_part('boxes'); ?>
<?php get_footer(); ?>