<?php

/**
 * Plugin Name: Photocopy Collage
 * Plugin URI: https://kjellr.com
 * Description: Make your blocks look like a collage of photocopies.
 * Version: 1.0
 * Author: kjellr
 */

/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function photocopy_collage_register_block_styles() {
		/**
		 * Register stylesheet
		 */
		wp_register_style(
			'photocopy-collage-stylesheet',
			plugins_url( 'style.css', __FILE__ ),
			array(),
			'1.0'
		);

		/**
		 * Register block styles
		 */

		/* Image */
		register_block_style(
			'core/image',
			array(
				'name'         => 'collage-a',
				'label'        => 'Collage A',
				'style_handle' => 'photocopy-collage-stylesheet',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'         => 'collage-b',
				'label'        => 'Collage B',
				'style_handle' => 'photocopy-collage-stylesheet',
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'         => 'collage-c',
				'label'        => 'Collage C',
				'style_handle' => 'photocopy-collage-stylesheet',
			)
		);

		/* Gallery */
		register_block_style(
			'core/gallery',
			array(
				'name'         => 'collage-organic',
				'label'        => 'Photocopy Collage (Organic)',
				'style_handle' => 'photocopy-collage-stylesheet',
			)
		);
		register_block_style(
			'core/gallery',
			array(
				'name'         => 'collage-stacked',
				'label'        => 'Photocopy Collage (Stacked)',
				'style_handle' => 'photocopy-collage-stylesheet',
			)
		);

		/* Cover */
		register_block_style(
			'core/cover',
			array(
				'name'         => 'collage-organic',
				'label'        => 'Photocopy Collage',
				'style_handle' => 'photocopy-collage-stylesheet',
			)
		);

		/* Media & Text */
		register_block_style(
			'core/media-text',
			array(
				'name'         => 'collage-a',
				'label'        => 'Photocopy Collage (A)',
				'style_handle' => 'photocopy-collage-stylesheet',
			)
		);
		register_block_style(
			'core/media-text',
			array(
				'name'         => 'collage-b',
				'label'        => 'Photocopy Collage (B)',
				'style_handle' => 'photocopy-collage-stylesheet',
			)
		);
		register_block_style(
			'core/media-text',
			array(
				'name'         => 'collage-c',
				'label'        => 'Photocopy Collage (C)',
				'style_handle' => 'photocopy-collage-stylesheet',
			)
		);
	}

	add_action( 'init', 'photocopy_collage_register_block_styles' );
}