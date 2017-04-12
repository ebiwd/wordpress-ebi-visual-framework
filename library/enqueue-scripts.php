<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package EBI Visual Framework
 * @since EBI Visual Framework 1.0.0
 */

if ( ! function_exists( 'ebiframework_scripts' ) ) :
	function ebiframework_scripts() {
  	// Enqueue stylesheets.
    wp_enqueue_style( 'main-stylesheet', '//wwwdev.ebi.ac.uk/web_guidelines/EBI-Framework/v1.2/libraries/foundation-6/css/foundation.css', array(), '1.2', 'all' );
    wp_enqueue_style( 'ebi-stylesheet', '//wwwdev.ebi.ac.uk/web_guidelines/EBI-Framework/v1.2/css/ebi-global.css', array(), '1.2', 'all' );
    wp_enqueue_style( 'theme-stylesheet', '//wwwdev.ebi.ac.uk/web_guidelines/EBI-Framework/v1.2/css/theme-embl-petrol.css', array(), '1.2', 'all' );
    wp_enqueue_style( 'font-stylesheet', '//www.ebi.ac.uk/web_guidelines/EBI-Icon-fonts/v1.2/fonts.css', array(), '1.2', 'all' );

  	// Deregister the jquery version bundled with WordPress.
  	wp_deregister_script( 'jquery' );

  	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
  	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

    // EBI assets
    wp_enqueue_script( 'ebiscript', '//wwwdev.ebi.ac.uk/web_guidelines/EBI-Framework/v1.2/js/script.js', array(), '1.2', true );

    wp_enqueue_script( 'foundation', '//wwwdev.ebi.ac.uk/web_guidelines/EBI-Framework/v1.2/libraries/foundation-6/js/foundation.js', array('jquery','ebiscript'), '1.2', true );
    wp_enqueue_script( 'foundationextend', '//wwwdev.ebi.ac.uk/web_guidelines/EBI-Framework/v1.2/js/foundationExtendEBI.js', array('jquery','ebiscript'), '1.2', true );
    // wp_enqueue_script( 'foundationexecute', get_template_directory_uri() . '/assets/javascript/custom/init-foundation.js', array('jquery','ebiscript'), '1.2', true );

    wp_add_inline_script( 'foundation-bootstrap', 'jQuery(document).foundation();' );
    wp_add_inline_script( 'foundation-ebi-bootstrap', 'jQuery(document).foundationExtendEBI();' );
    // <script type="text/JavaScript">$(document).foundation();</script>
    // <script type="text/JavaScript">$(document).foundationExtendEBI();</script>

  	// Add the comment-reply library on pages where it is necessary
  	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  		wp_enqueue_script( 'comment-reply' );
  	}

	}

	add_action( 'wp_enqueue_scripts', 'ebiframework_scripts' );
endif;
