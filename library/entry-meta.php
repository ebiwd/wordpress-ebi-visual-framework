<?php
/**
 * Entry meta information for posts
 *
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

if ( ! function_exists( 'ebiframework_entry_meta' ) ) :
	function ebiframework_entry_meta() {
		/* translators: %1$s: current date, %2$s: current time */
		echo '<time class="updated float-left small secondary" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Posted on %1$s at %2$s.', 'ebiframework' ), get_the_date(), get_the_time() ) . '</time>';
		echo '<cite class="float-left byline author">' . __( 'Written by', 'ebiframework' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></cite>';
	}
endif;
