<?php 

if ( ! function_exists( 'ebiframework_widgets' ) ) :
function ebiframework_widgets() {

  register_sidebar(array(
    'id' => 'ef-sidebar',
    'name' => __( 'Sidebar for Blog', 'ebiframework' ),
    'description' => __( 'Drag items to populate sidebar widget', 'ebiframework' ),
    'before_widget' => '<div id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
    'after_widget' => '</div></div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  ));

  register_sidebar(array(
    'id' => 'ef-page-sidebar',
    'name' => __( 'Sidebar for Page', 'ebiframework' ),
    'description' => __( 'Drag items to populate sidebar widget', 'ebiframework' ),
    'before_widget' => '<div id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
    'after_widget' => '</div></div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  ));

  register_sidebar(array(
    'id' => 'ef-footer',
    'name' => __( 'Footer', 'ebiframework' ),
    'description' => __( 'Drag items to populate footer menu', 'ebiframework' ),
    'before_widget' => '<div id="%1$s" class="medium-3 columns widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  ));

  register_sidebar(array(
    'id' => 'ef-newsletter',
    'name' => __( 'Newsletter', 'ebiframework' ),
    'description' => __( 'Drag items to populate subscribe to news letter', 'ebiframework' ),
    'before_widget' => '<div id="%1$s" class="large-12 columns widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h6>',
    'after_title' => '</h6>',
  ));

}

add_action( 'widgets_init', 'ebiframework_widgets' );
endif;
?>