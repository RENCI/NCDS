<?php 
  $image_default = get_template_directory_uri().'/images/interior-top.jpg';
?>

<?php if(is_search()): ?>

<section class="interior-top" style="background-image:url('<?php echo $image_default; ?>');"> 
  <div class="container">
    <div class="content-wrap">
      <h1>Search</h1>
    </div>
  </div>
</section>	

<?php elseif (is_category()): ?>

<section class="interior-top" style="background-image:url('<?php echo $image_default; ?>');"> 
  <div class="container">
    <div class="content-wrap">
      <h1><?php echo single_cat_title(); ?></h1>
    </div>
  </div>
</section>



<?php elseif (is_singular('team_member')) : ?>

	<section class="interior-top" style="background-image:url('<?php echo $image_default; ?>');"> 
	  <div class="container">
	    <div class="content-wrap">
	      <h1><?php the_title(); ?></h1>
	    </div>
	  </div>
	</section>

<?php elseif (is_singular('publications')) : ?>

	<section class="interior-top" style="background-image:url('<?php echo $image_default; ?>');"> 
	  <div class="container">
	    <div class="content-wrap">
	      <h1><?php echo 'Publications'; ?></h1>
	      <span class="subtitle"><?php the_title(); ?></span>
	    </div>
	  </div>
	</section>

<?php elseif (is_singular('projects')) : ?>
	<?php
	$image = get_field('banner_image');
	if(!empty($image)) {
	    $image = $image['sizes']['hd'];
	  }else{
	    $image = get_template_directory_uri().'/images/interior-top.jpg';
	  }
	?>
	<section class="interior-top" style="background-image:url('<?php echo $image; ?>');"> 
	  <div class="container">
	    <div class="content-wrap">
	      <h1>
	      <?php the_title(); ?>
	      </h1>
	    </div>
	  </div>
	</section>

<?php elseif(is_archive()): ?>

	<section class="interior-top" style="background-image:url('<?php echo $image_default; ?>');"> 
	  <div class="container">
	    <div class="content-wrap">
	      <h1><?php echo str_replace("Archives: ", "", get_the_archive_title()); ?></h1>
	    </div>
	  </div>
	</section>
		
<?php  else: ?>	

	<?php
	if(has_post_thumbnail()) {
	    $image = get_the_post_thumbnail_url();
	  }else{
	    $image = get_template_directory_uri().'/images/interior-top.jpg';
	  }
	?>

	<section class="interior-top" style="background-image:url('<?php echo $image; ?>');"> 
	  <div class="container">
	    <div class="content-wrap">
	      <h1><?php echo get_the_title(); ?></h1>
	    </div>
	  </div>
	</section>	

<?php endif;?>	