<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	is_active_sidebar( 'sidebar-3' ) ||
	is_active_sidebar( 'sidebar-4' ) ||
	is_active_sidebar( 'sidebar-5' )) :
	?>

	<aside class="widget-area wp-block-columns" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'twentyseventeen' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-2' ) ) {
			?>
			<div class="wp-block-column footer-widget-1">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			<?php
		}
		if ( is_active_sidebar( 'sidebar-3' ) ) {
			?>
			<div class="wp-block-column footer-widget-2">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		<?php } ?>
		<?php
		if ( is_active_sidebar( 'sidebar-4' ) || is_active_sidebar( 'sidebar-5' )) {
			?>
			<div class="wp-block-column footer-widget-3 footer-block-address">
				<?php dynamic_sidebar( 'sidebar-4' ); ?>
				<?php dynamic_sidebar( 'sidebar-5' ); ?>
			</div>
			<?php
		} ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
