<?php 

if ( ! function_exists( 'ebiframework_article_meta' ) ) {
    function ebiframework_article_meta() {
        echo '<span class="byline author">'. __('Written by', 'ebiframework') .' '. get_the_author() .' </span>';
        echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. get_the_time('F jS, Y') .'</time>';
    }
};

?>