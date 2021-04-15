<?php
/*
Template Name: Project
*/
?>

<?php get_header(); ?>

<?php 

  $projectInteriorTopText = get_field('projectInteriorTopText'); 
  $projectDescriptionTitle = get_field('projectDescriptionTitle');
  $projectDescriptionText = get_field('projectDescriptionText');
  $projectMoreInfoTitle = get_field('projectMoreInfoTitle');
  $projectMoreInfoText = get_field('projectMoreInfoText');
  $projectMoreInfoText2 = get_field('projectMoreInfoText2');
  $relatedTitle = get_field('relatedTitle');

  if(get_field('projectInteriorTopImage')) {
    $projectInteriorTopImage = get_field('projectInteriorTopImage')['sizes']['hd'];
  }else{
    $projectInteriorTopImage = get_template_directory_uri().'/images/interior-top-projects.jpg';
  }

  if(get_field('projectDescriptionImage')) {
    $projectDescriptionImage = get_field('projectDescriptionImage')['sizes']['hd'];
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

<?php if( have_rows('projectMoreInfoItems') ): ?>
	<section class="j">
	  <div class="container">
	    <h2><?php echo $projectMoreInfoTitle; ?></h2>
	    <?php echo $projectMoreInfoText; ?>
	    <div class="content-wrap gr-col-4  gr-sm-auto">
			  
			    <?php  while ( have_rows('projectMoreInfoItems') ) : the_row();
			        
			        $image = get_sub_field('image');
			        $url = get_sub_field('url');
			        $title = get_sub_field('title');
			  ?>

			      <div class="single-box">
			        <div class="img-wrap bg-overlay" style="background-image:url('<?php echo $image; ?>');"><a href="<?php echo $url; ?>"><span><?php echo $title; ?></span></a>
			        </div>
			      </div>		                  
			    
			    <?php endwhile; ?>    

	    </div>
	    <?php echo $projectMoreInfoText2; ?>
	  </div>
	</section>
<?php endif; ?> 

<?php if( have_rows('relatedItems') ): ?>
	<section class="k">
	  <div class="container">
	    <h2><?php echo $relatedTitle; ?></h2>
	    <div class="content-wrap gr-col-3  gr-sm-auto">
			 
			    <?php  while ( have_rows('relatedItems') ) : the_row();
			        
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