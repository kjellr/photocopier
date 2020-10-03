<?php

/**
 * Plugin Name: Photocopier
 * Plugin URI: https://kjellr.com
 * Description: Make your blocks look like photocopies.
 * Version: 1.0
 * Author: kjellr
 */

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function photocopier_register_block_styles() {
	
		/**
		 * Register stylesheet
		 */
		wp_register_style(
			'photocopier-stylesheet',
			plugins_url( 'style.css', __FILE__ ),
			array(),
			'1.0'
		);

		/**
		 * Register block styles
		 */
		register_block_style(
			'core/image',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);
	}

	add_action( 'init', 'photocopier_register_block_styles' );
}