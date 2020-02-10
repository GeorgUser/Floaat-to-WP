<?php
/**
 * Enqueue all styles and scripts.
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style}
 *
 * @package Floaat
 */

if ( ! function_exists( 'floaat_scripts' ) ) :
	/**
	 * floaat_scripts
	 *
	 * @return void
	 */
	function floaat_scripts() {
        wp_enqueue_style('archivo', 'https://fonts.googleapis.com/css?family=Archivo:400,700&display=swap', array(), '1.0.0', 'all');
        wp_enqueue_style('archivoBlack', 'https://fonts.googleapis.com/css?family=Archivo+Black&display=swap', array(), '1.0.0', 'all');
        wp_enqueue_style('main-stylesheet', get_stylesheet_directory_uri().'/dist/styles/main.css', array(), '1.0.0', 'all');

		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', [], '2.2.4', true );

        wp_enqueue_script('javascript', get_stylesheet_directory_uri().'/dist/scripts/main.js', array(), '1.0.0', true);

        // Localize script
		$theme_vars = array(
			'template_url' => get_bloginfo('template_url'),
		);
		wp_localize_script( 'javascript', 'themeVars', $theme_vars );
	}

	add_action( 'wp_enqueue_scripts', 'floaat_scripts' );
endif;
