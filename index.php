<?php

/**
 * Plugin Name: Photocopier
 * Plugin URI: https://kjellr.com
 * Description: Make your blocks look like photocopies.
 * Version: 1.2.1
 * Author: Kjell Reigstad
 * 
 * Photocopier WordPress Plugin, 2020 Kjell Reigstad
 * Photocopier is distributed under the terms of the GNU GPL.
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * The noise pattern used is derived from "Noisy Pattern" on Patternlet.com CC0.
 * https://patternlet.com/noisy-pattern/
 * 
 * Plugin icon derived from "Abstract Concrete" by Sarah Pflug. CC0.
 * https://stocksnap.io/photo/abstract-concrete-QHO4YAWVRM
 * 
 * Screenshots use "Moon Planet" by Stephen Rahn. CC0
 * https://stocksnap.io/photo/moon-planet-Z6ETWLE1A2
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

		// Heading
		register_block_style(
			'core/heading',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped',
				'style_handle' => 'photocopier-stylesheet',
			)
		);

		// Image
		register_block_style(
			'core/image',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);

		// Image (Warped)
		register_block_style(
			'core/image',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);

		// Gallery
		register_block_style(
			'core/gallery',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);

		// Gallery (Warped)
		register_block_style(
			'core/gallery',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);

		// Media & Text
		register_block_style(
			'core/media-text',
			array(
				'name'         => 'photocopy',
				'label'        => 'Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);

		// Media & Text (Warped)
		register_block_style(
			'core/media-text',
			array(
				'name'         => 'photocopy-warped',
				'label'        => 'Warped Photocopy',
				'style_handle' => 'photocopier-stylesheet',
			)
		);
	}

	add_action( 'init', 'photocopier_register_block_styles' );
}

/**
 * Load the distortion SVG into the footer in the front end and editor.
 */
function photocopier_load_svg_filter() { 
    echo "<svg class='photocopier-svg-filter'><filter id='photocopy-filter-warp' filterUnits='userSpaceOnUse' x='0' y='0'><feTurbulence baseFrequency='0 0.021' seed='1' result='photocopy-turbulance'></feTurbulence><feDisplacementMap in='SourceGraphic' in2='photocopy-turbulance' scale='38' result='photocopy-displacement'></feDisplacementMap><feOffset dx='-14' dy='-9' result='photocopy-offset' in='photocopy-displacement'></feOffset><feComposite in='photocopy-offset' in2='SourceGraphic' result='photocopy-composite'></feComposite></filter></svg><svg class='photocopier-svg-filter'><filter id='photocopy-filter-warp-text' filterUnits='userSpaceOnUse' x='0' y='0'><feTurbulence baseFrequency='0 0.021' seed='1' result='photocopy-turbulance'></feTurbulence><feDisplacementMap in='SourceGraphic' in2='photocopy-turbulance' scale='38' result='photocopy-displacement'></feDisplacementMap><feOffset dx='-14' dy='-9' result='photocopy-offset' in='photocopy-displacement'></feOffset></filter></svg>";
}
add_action('wp_footer', 'photocopier_load_svg_filter');
add_action( 'admin_footer-post.php', 'photocopier_load_svg_filter' );