<?php get_header(); ?>
<?php get_template_part('/template-parts/interior_top'); ?>
<section class="interior error404">
	<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 side-direction side-direction-left">
					<div class="fourerror">
						<i class="fa fa-exclamation-circle"></i>
						<h3>404: Not Found</h3>
						<h4>Uh oh!</h4>
						<p>Sorry, the page you were looking for doesn't exist. Try searching for your content in the box below, or click to go back to the <a href ="/">HOME</a> page.</p>
						<div class="search">
							<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div>
									<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
									<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
									<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
								</div>
							</form>
						</div> 
					</div>
				</div> 
			</div> 				
	</div> 
</section> 
<!-- <?php get_template_part('boxes'); ?> -->
<?php get_footer(); ?>
