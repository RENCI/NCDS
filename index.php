<?php get_header(); ?>
<?php get_template_part('/template-parts/interior_top'); ?>
<section class="interior index">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 side-direction side-direction-left">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('/template-parts/content_page'); ?>	
					<?php endwhile; ?>
				<?php endif; ?>
			</div> 
		</div>
	</div> 
</section>
<?php get_template_part('boxes'); ?>
<?php get_footer(); ?>