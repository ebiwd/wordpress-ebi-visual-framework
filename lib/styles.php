<?php

if( ! function_exists( 'ebiframework_styles' ) ) {
	function ebiframework_styles()
	{

    wp_register_style( 'foundation-css', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/libraries/foundation-6/css/foundation.css', array(), '' ); // Foundation
    wp_register_style( 'ebi-fonts', '//www.ebi.ac.uk/web_guidelines/EBI-Icon-fonts/v1.1/fonts.css', array(), '' ); // Foundation
    wp_register_style( 'ebi-theme', '//www.ebi.ac.uk/web_guidelines/EBI-Framework/v1.1/css/theme-ebi-services-about.css', array(), '' ); // Foundation
		wp_register_style( 'wordpress-specific-css', get_stylesheet_directory_uri() . '/style.css', array(), ''); // Local wordpress-specific customisations
		// wp_register_style('google-css', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Lora:400,700|Droid+Sans+Mono'); // Google Fonts

    wp_enqueue_style( 'foundation-css' );
    wp_enqueue_style( 'ebi-fonts' );
    wp_enqueue_style( 'ebi-theme' );
		wp_enqueue_style( 'wordpress-specific-css' );
		// wp_enqueue_style( 'google-css' );

	}
}

add_action( 'wp_enqueue_scripts', 'ebiframework_styles' );

?>
