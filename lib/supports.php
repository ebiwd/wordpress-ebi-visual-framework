<?php

// Main theme supports
if( ! function_exists( 'ebiframework_theme_support' ) ) {
  function ebiframework_theme_support() {
    add_theme_support('post-thumbnails'); // Add post thumbnail support
    add_theme_support('automatic-feed-links'); // RSS feed links
    add_theme_support( 'title-tag' ); // Allows WP to handle the title tag in head
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat')); //  Post formats
    add_theme_support('menus'); // Add  menu
    register_nav_menus(array(
      'topbarmenu' => __('Topbar Menu', 'ebiframework'),
      'footermenu' => __('Footer Menu', 'ebiframework')
    ));
    add_theme_support( 'custom-background', // Set default background or image
      array(
        'default-image' => '',
        'default-color' => '',
        'wp-head-callback' => '_custom_background_cb',
        'admin-head-callback' => '',
        'admin-preview-callback' => ''
      )
    );
  }
}
add_action('after_setup_theme', 'ebiframework_theme_support');

// Add style to read more button
function ebiframework_readmore() {
  return '<a class="button small right" href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'ebiframework_readmore' );


// Auto Excerpy EBIFramework Style
function ebiframework_excerpt($text, $raw_excerpt) {
  if( ! $raw_excerpt ) {
    $content = apply_filters( 'the_content', get_the_content() );
    $text = substr( $content, 0, strpos( $content, '</p>' ) + 4 );
  }
  $text = preg_replace("/<img[^>]+\>/i", "", $text);
  $text = preg_replace('/<a href=\"(.*?)\">(.*?)<\/a>/', "", $text);
  $buttonmore = '<p><a class="button right" href="'. get_permalink() . '"> Read the full article...</a></p>';
  return $text . " " . $buttonmore;
  }
add_filter( 'wp_trim_excerpt', 'ebiframework_excerpt', 10, 2 );

?>
