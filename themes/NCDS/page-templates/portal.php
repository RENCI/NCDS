<?php
/*
Template Name: Portal
*/
?>

<?php if(pmpro_hasMembershipLevel('1')):?>

	<?php get_header(); ?>

	<?php 

	  $portalInteriorTopText = get_field('portalInteriorTopText'); 
	  $portalWelcomeTitle = get_field('portalWelcomeTitle');
	  $portalWelcomeText = get_field('portalWelcomeText');
	  $portalDirectoryLabel = get_field('portalDirectoryLabel');
	  $portalDirectoryUrl = get_field('portalDirectoryUrl');
	  $portalToolsTitle = get_field('portalToolsTitle');
	  $portalToolsLabel = get_field('portalToolsLabel');
	  $portalToolsUrl = get_field('portalToolsUrl');

	  if(get_field('portalInteriorTopImage')) {
	    $portalInteriorTopImage = get_field('portalInteriorTopImage')['sizes']['hd'];
	  }else{
	    $portalInteriorTopImage = get_template_directory_uri().'/images/interior-top-portal.jpg';
	  }   

	?>

	<section class="interior-top interior-top-portal" style="background-image:url('<?php echo $portalInteriorTopImage; ?>');"> 
	  <div class="container">
	    <div class="content-wrap">
	      <h1><?php the_title(); ?></h1>
	      <?php echo $portalInteriorTopText; ?>
	    </div>
	  </div>
	</section>

	<?php if( have_rows('portalItems') ): ?>
		<section class="l">
		  <div class="container">
		    <div class="content-wrap gr-col-3 gr-sm-auto">

					    <?php  while ( have_rows('portalItems') ) : the_row();
								  if(get_sub_field('image')) {
								    $image = get_sub_field('image')['sizes']['hd'];
								  }else{
								    $image = get_template_directory_uri().'/images/default.jpg';
								  } 			        
					        $title = get_sub_field('title');
					        $url = get_sub_field('url');
					  ?> 

						      <div class="single-box bg-cer" style="background-image:url('<?php echo $image; ?>');">
						        <a href="<?php echo $url; ?>">
						          <h3><?php echo $title; ?></h3>
						        </a>
						      </div>			                 
					    
					    <?php endwhile; ?>   

		    </div>
		  </div>
		</section>
	<?php endif; ?> 

	<?php if($portalWelcomeText): ?>
		<section class="m">
		  <div class="container">
		    <div class="content-wrap gr-col-2 col-5-7 gr-sm-auto">
		      <div class="single-box">
		      	<?php if($portalWelcomeTitle): ?>
		        	<h2><?php echo $portalWelcomeTitle; ?></h2>
		      	<?php endif; ?>
		      </div>
		      <div class="single-box">
		        <?php echo $portalWelcomeText; ?>
		        <div class="link">
		        	<?php if($portalDirectoryLabel): ?>
		          	<a href="<?php echo $portalDirectoryUrl; ?>" class="btn-3"><?php echo $portalDirectoryLabel; ?></a>
		        	<?php endif; ?>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>
	<?php endif; ?>

	<?php if( have_rows('portalMembers') ): ?>
	<section class="n"> 
	  <div class="container">
	    <div class="content-wrap gr-col-3 gr-sm-auto">
			    <?php  while ( have_rows('portalMembers') ) : the_row();
						  if(get_sub_field('image')) {
						    $image = get_sub_field('image')['sizes']['md'];
						  }else{
						    $image = get_template_directory_uri().'/images/default.jpg';
						  }		        
			        $title = get_sub_field('title');
			        $position = get_sub_field('position');
			        $url = get_sub_field('url');
			  ?>

			      <div class="single-box">
			        <div class="info-wrap">
			          <h3><?php echo $title; ?></h3>
			          <span class="position"><?php echo $position; ?></span>
			        </div>
			        <div class="img-wrap" style="background-image:url('<?php echo $image; ?>');">
			          <a href="<?php echo $url; ?>"></a>
			        </div>
			      </div>		                  
			    
			    <?php endwhile; ?>   

	    </div>
	  </div>
	</section>
	<?php endif; ?> 
	<?php if( have_rows('toolsItems') ): ?>
		<section class="o">
		  <div class="container">
		  	<?php if($portalToolsTitle): ?>
		    	<h2><?php echo $portalToolsTitle; ?></h2>
		  	<?php endif; ?>
		    <div class="content-wrap gr-col-3 gr-sm-auto">
				  
				    <?php  while ( have_rows('toolsItems') ) : the_row();
							  if(get_sub_field('image')) {
							    $image = get_sub_field('image')['sizes']['md'];
							  }else{
							    $image = get_template_directory_uri().'/images/default.jpg';
							  }		        
				        $url = get_sub_field('url');
				        $title = get_sub_field('title');
				  ?>

				      <div class="single-box">
				        <div class="img-wrap" style="background-image:url('<?php echo $image; ?>');">
				          <a href="<?php echo $url; ?>"></a>
				        </div>
				        <h3><a href="<?php echo $url; ?>">
				          <?php echo $title; ?>
				        </a></h3>
				      </div>		                  
				    
				    <?php endwhile; ?>      

		    </div>
		    <div class="link">
		    	<?php if($portalToolsLabel): ?>
		      <a href="<?php echo $portalToolsUrl; ?>" class="btn-2"><?php echo $portalToolsLabel; ?></a>
		    <?php endif; ?>
		    </div>
		  </div>
		</section>
	<?php endif; ?>
	<?php get_footer(); ?>
<?php else: ?>
	<?php get_header(); ?>
	<?php get_template_part('/template-parts/interior_top'); ?>
	<section class="interior page">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 side-direction side-direction-left">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							  <?php 

							  $args = array(
							    'echo'           => true,
							    'remember'       => true,
							    'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
							    'form_id'        => 'loginform',
							    'id_username'    => 'user_login',
							    'id_password'    => 'user_pass',
							    'id_remember'    => 'rememberme',
							    'id_submit'      => 'wp-submit',
							    'label_username' => __( 'Username or Email Address' ),
							    'label_password' => __( 'Password' ),
							    'label_remember' => __( 'Remember Me' ),
							    'label_log_in'   => __( 'Log In' ),
							    'value_username' => '',
							    'value_remember' => false
							  );

							   ?> 

							  <?php wp_login_form( $args ); ?>

							  <strong>Not a Member ? <a href="/membership-account/membership-checkout/?level=1">Register here!</a></strong> 
						<?php endwhile; ?>
					<?php endif; ?>
				</div> 
			</div>
		</div> 
	</section>
	<?php get_template_part('boxes'); ?>
	<?php get_footer(); ?>	
<?php endif ?> 