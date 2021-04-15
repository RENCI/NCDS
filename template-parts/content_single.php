<?php
/**
 * @package ymca
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<?php /*if(has_post_thumbnail()): ?>

			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" width="300" style="float: left;margin-right: 20px;">

		<?php endif; */?>	

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
		
	</div><!-- entry-content -->

</article><!-- post -->
