<?php
/**
 * Register widget areas
 *
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

if ( ! function_exists( 'ebiframework_sidebar_widgets' ) ) :
function ebiframework_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'ebiframework' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'ebiframework' ),
	  'before_widget' => '<article id="%1$s" class="widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h3>',
	  'after_title' => '</h3>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'ebiframework' ),
	  'description' => __( 'Drag widgets to this footer container', 'ebiframework' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h4>',
	  'after_title' => '</h4>',
	));
}

add_action( 'widgets_init', 'ebiframework_sidebar_widgets' );
endif;
