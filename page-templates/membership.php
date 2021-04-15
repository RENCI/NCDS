<?php
/*
Template Name: Membership
*/
?>

<?php get_header(); ?>

<?php 

  $interiorTopText = get_field('interiorTopText'); 
  $membershipPortalTitle = get_field('membershipPortalTitle');
  $membershipPortalText = get_field('membershipPortalText');
  $membershipPortalLabel = get_field('membershipPortalLabel');
  $membershipPortalUrl = get_field('membershipPortalUrl');
  $membershipFaqTitle = get_field('membershipFaqTitle');

  if(get_field('interiorTopImage')) {
    $interiorTopImage = get_field('interiorTopImage')['sizes']['hd'];
  }else{
    $interiorTopImage = get_template_directory_uri().'/images/interior-top-member.jpg';
  }

  if(get_field('membershipPortalImage')) {
    $membershipPortalImage = get_field('membershipPortalImage')['sizes']['hd'];
  }else{
    $membershipPortalImage = get_template_directory_uri().'/images/bg-h.jpg';
  }     

?>

<section class="interior-top interior-top-member" style="background-image:url('<?php echo $interiorTopImage; ?>');"> 
  <div class="container">
    <div class="content-wrap">
      <h1><?php the_title(); ?></h1>
      <?php echo $interiorTopText; ?>
    </div>
  </div>
</section>

<?php if( have_rows('membershipItems') ): ?>
	<section class="g">
	  <div class="container">
	    <div class="content-wrap gr-col-3 gr-sm-auto">

			    <?php  while ( have_rows('membershipItems') ) : the_row();
						  if(get_sub_field('image')) {
						    $image = get_sub_field('image')['sizes']['md'];
						  }else{
						    $image = get_template_directory_uri().'/images/default.jpg';
						  }		        
			        $url = get_sub_field('url');
			        $title = get_sub_field('title');
			        $text = get_sub_field('text');
			        $label = get_sub_field('label');
			  ?> 

			      <div class="single-box">
			        <div class="img-wrap" style="background-image:url('<?php echo $image; ?>');">
			          <a href="<?php echo $url; ?>"></a>
			        </div>
			        <div class="info-wrap">
			          <h3><a href="<?php echo $url; ?>"><?php echo $title; ?></a></h3>
			          <?php echo $text; ?>
			          <div class="link">
			            <a href="<?php echo $url; ?>" class="btn-2"><?php echo $label; ?></a>
			          </div>
			        </div>
			      </div>		                 
			    
			    <?php endwhile; ?>   
			   
	    </div>
	  </div>
	</section>
<?php endif; ?> 

<?php if($membershipPortalText): ?>
	<section class="h bg-overlay bg-cer" style="background-image:url('<?php echo $membershipPortalImage; ?>');">
	  <div class="container">
	    <div class="content-wrap">
	      <div class="single-box">
	      	<?php if($membershipPortalTitle): ?>
	        	<h2><?php echo $membershipPortalTitle; ?></h2>
	      	<?php endif; ?>
	        <?php echo $membershipPortalText; ?>
	        
	        <div class="link">
	        	<?php if($membershipPortalLabel): ?>
	          	<a href="<?php echo $membershipPortalUrl; ?>" class="btn-1"><?php echo $membershipPortalLabel; ?></a>
	        	<?php endif; ?>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
<?php endif; ?>

<section class="interior">
  <div class="container">
    <div class="accordion-bottom">
    	<?php if($membershipFaqTitle): ?>
      	<h2><?php echo $membershipFaqTitle; ?></h2>
    	<?php endif; ?>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <?php if( have_rows('membershipFaqItems') ): ?>
				  	<?php $c=1; ?>
				    <?php  while ( have_rows('membershipFaqItems') ) : the_row();
				        $title = get_sub_field('title');
				        $text = get_sub_field('text');
				  ?>

							<?php if($c==1): ?>
			          <div class="panel panel-default">
			            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $c; ?>" aria-expanded="true" aria-controls="collapse<?php echo $c; ?>">
			              <div class="panel-heading" role="tab" id="heading<?php echo $c; ?>">
			                <h4 class="panel-title">
			                    <?php echo $title; ?>
			                </h4>
			              </div>
			            </a>
			            <div id="collapse<?php echo $c; ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo $c; ?>">
			              <div class="panel-body">
			              	<?php echo $text; ?>
			              </div>
			            </div>
			          </div>
							<?php else: ?>
			          <div class="panel panel-default">
			            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $c; ?>" aria-expanded="false" aria-controls="collapse<?php echo $c; ?>">
			              <div class="panel-heading" role="tab" id="heading<?php echo $c; ?>">
			                <h4 class="panel-title">
			                    <?php echo $title; ?>
			                </h4>
			              </div>
			            </a>
			            <div id="collapse<?php echo $c; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $c; ?>">
			              <div class="panel-body">
			                <?php echo $text; ?>
			              </div>
			            </div>
			          </div>
		          <?php endif; ?>		

		          <?php $c++; ?>		                  
				    
				    <?php endwhile; ?>   
				  <?php endif; ?>      
        </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>