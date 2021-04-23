<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ymca
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

		<?php the_content(); ?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'animals' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- entry-content -->

	<div class="edit-post">
		<?php edit_post_link( __( 'Edit', 'animals' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- entry-content -->

</article><!-- post -->
