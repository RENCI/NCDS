<?php
/*
Template Name: Project Tag
*/
?>

<?php get_header(); ?>

<?php 

  $projectInteriorTopText = get_field('projectInteriorTopText1'); 
  $projectDescriptionTitle = get_field('projectDescriptionTitle1');
  $projectDescriptionText = get_field('projectDescriptionText1');
  $projectMoreInfoTitle = get_field('projectMoreInfoTitle1');
  $projectMoreInfoText = get_field('projectMoreInfoText1');
  $projectMoreInfoText2 = get_field('projectMoreInfoText21');
  $relatedTitle = get_field('relatedTitle1');

  if(get_field('projectInteriorTopImage')) {
    $projectInteriorTopImage = get_field('projectInteriorTopImage')['sizes']['hd'];
  }else{
    $projectInteriorTopImage = get_template_directory_uri().'/images/interior-top-member.jpg';
  }

  if(get_field('projectDescriptionImage1')) {
    $projectDescriptionImage = get_field('projectDescriptionImage1')['sizes']['hd'];
  }else{
    $projectDescriptionImage = get_template_directory_uri().'/images/img-i.jpg';
  }      

?>

<section class="interior-top interior-top-projects" style="background-image:url('<?php echo $projectInteriorTopImage; ?>');"> 
  <div class="container">
    <div class="content-wrap">
      <h1><?php the_title(); ?></h1>
      <?php echo $projectInteriorTopText; ?>
    </div>
  </div>
</section>


<?php if($projectDescriptionText): ?>
	<section class="i">
	  <div class="container">
	    <div class="content-wrap gr-col-2 col-5-7  gr-sm-auto">
	      <div class="single-box">
	        <div class="img-wrap" style="background-image:url('<?php echo $projectDescriptionImage; ?>');">
	        </div>
	      </div>
	      <div class="single-box">
	        <div class="side-right">
	          <h2><?php echo $projectDescriptionTitle; ?></h2>
						<?php echo $projectDescriptionText; ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
<?php endif; ?>



<?php 
$args = array(
	'post_type' => 'projects',
	'tax_query' => array(
		array(
			'taxonomy' => 'project_tag',
			'field'    => 'id',
			'terms'    => get_field('project_tag'),
		),
	),
);
$the_query = new WP_Query( $args ); ?>

<section class="g">
  <div class="container">
	  	<h2><?php echo $projectMoreInfoTitle; ?></h2>
	    <?php echo $projectMoreInfoText; ?>
<?php if ( $the_query->have_posts() ) : ?>
 				<div class="content-wrap gr-col-4  gr-sm-auto">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
						if(has_post_thumbnail()) {
						    $image = get_the_post_thumbnail_url(get_the_ID(),'md');
						  }else{
						    $image = get_template_directory_uri().'/images/default.jpg';
						  }  
			        $url = get_permalink();
			        $title = get_the_title();
			  ?>

                              <div class="single-box">
                                <div class="img-wrap" style="background-image:url('<?php echo $image; ?>');">
                                  <a href="<?php echo $url; ?>"></a>
                                </div>
                                <div class="info-wrap">
                                  <h3><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h3>
                                  <?php echo $text; ?>
                                  <div class="link">
                                    <a href="<?php echo $url; ?>" class="btn-2">Explore</a>
                                  </div>
                                </div>
                              </div>


				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				</div>
	   
	<!-- <?php //else : ?>
		<p><?php //esc_html_e( 'Sorry, no projects at this time.' ); ?></p> -->
	<?php endif; ?>
    <?php echo $projectMoreInfoText2; ?>
	</div>
</section>

<?php if( have_rows('relatedItems1') ): ?>
	<section class="k">
	  <div class="container">
	    <h2><?php echo $relatedTitle; ?></h2>
	    <div class="content-wrap gr-col-3  gr-sm-auto">
			 
			    <?php  while ( have_rows('relatedItems1') ) : the_row();
			        
			        $image = get_sub_field('image');
			        $url = get_sub_field('url');
			        $title = get_sub_field('title');
			  ?>

				      <div class="single-box">
				        <a href="<?php echo $url; ?>">
				          <span class="img-wrap bg-overlay" style="background-image:url('<?php echo $image; ?>');"></span>
				          <span class="title-wrap">
				            <h3><?php echo $title; ?></h3>
				          </span>
				        </a>
				      </div>			                  
			    
			    <?php endwhile; ?>   
	    </div>
	  </div>
	</section>

<?php endif; ?>


<?php get_footer(); ?>
