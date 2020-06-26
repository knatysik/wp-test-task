<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php
	if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

	
	<?php endif; ?>
			<section class="entry-content">
				<?php
					the_content(
						sprintf(
							/* translators: %s: Post title. */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
							get_the_title()
						)
					);
					?>
			</section><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
