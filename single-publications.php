<?php get_header(); ?>
<?php get_template_part('/template-parts/interior_top'); ?>
<section class="interior interior">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 side-direction side-direction-left">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php 
						$file = get_field('file');
						if($file): 
						?>	
						<a href="<?php echo $file; ?>" target="_blank" class="btn-2">Download</a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div> 
		</div>
	</div> 
</section>
<?php get_template_part('boxes'); ?>
<?php get_footer(); ?>