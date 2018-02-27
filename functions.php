<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * EBI Visual Framework functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-ebiframework-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-ebiframework-top-bar-walker.php' );
require_once( 'library/class-ebiframework-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

function modify_read_more_link() {
  return '<a class="readmore" href="' . get_permalink() . '">Read more</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

// add custom class to tag
function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="tag"',$html);
    return $html;
}
add_filter('the_tags','add_class_the_tags');

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-ebiframework-protocol-relative-theme-assets.php' );
