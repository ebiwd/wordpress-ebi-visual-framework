<?php
/**
 * The sidebar containing the main widget area
 *
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

?>
<aside class="sidebar columns medium-4">
	<?php do_action( 'ebiframework_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'ebiframework_after_sidebar' ); ?>
</aside>
