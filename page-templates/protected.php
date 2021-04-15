<?php
/*
Template Name: Protected page
*/
?>

<?php if(pmpro_hasMembershipLevel('1')):?>
	<?php get_header(); ?>
	<?php get_template_part('/template-parts/interior_top'); ?>
	<section class="interior page">
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