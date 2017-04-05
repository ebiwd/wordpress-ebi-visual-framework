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
    wp_enqueue_script( 'modernizr', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/libraries/modernizr/modernizr.custom.49274.js', array(), '49274', false );

  	// Enqueue stylesheets.
    wp_enqueue_style( 'main-stylesheet', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/libraries/foundation-6/css/foundation.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'ebi-stylesheet', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/css/ebi-global.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'theme-stylesheet', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/css/theme-embl-petrol.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'font-stylesheet', '//www.ebi.ac.uk/web_guidelines/EBI-Icon-fonts/v1.1/fonts.css', array(), '1.1', 'all' );

  	// Deregister the jquery version bundled with WordPress.
  	wp_deregister_script( 'jquery' );

  	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
  	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

    // EBI assets
    wp_enqueue_script( 'foundation', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/libraries/foundation-6/js/foundation.js', array('jquery'), '1.1', true );
    wp_enqueue_script( 'foundationextend', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/js/foundationExtendEBI.js', array('jquery'), '1.1', true );

    wp_enqueue_script( 'ebicookiebanner', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/js/cookiebanner.js', array(), '1.1', true );
    wp_enqueue_script( 'ebifoot', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/js/foot.js', array(), '1.1', true );
    wp_enqueue_script( 'ebiscript', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/js/script.js', array(), '1.1', true );

    // <script type="text/JavaScript">$(document).foundation();</script>
    // <script type="text/JavaScript">$(document).foundationExtendEBI();</script>

  	// Add the comment-reply library on pages where it is necessary
  	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  		wp_enqueue_script( 'comment-reply' );
  	}

	}

	add_action( 'wp_enqueue_scripts', 'ebiframework_scripts' );
endif;
