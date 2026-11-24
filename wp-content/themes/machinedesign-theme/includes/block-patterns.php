<?php
/**
 * Native Gutenberg Block Patterns Registration
 *
 * Registers reusable Swiss-German Industrial block patterns so editors can
 * assemble or customize landing sections natively in WordPress Block Editor
 * without Elementor or PHP edits.
 *
 * @package MachineDesign
 */

defined( 'ABSPATH' ) || exit;

function md_register_block_pattern_category() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'machinedesign-industrial',
			array(
				'label' => 'ماشین دیزاین (الگوهای صنعتی)',
			)
		);
	}
}
add_action( 'init', 'md_register_block_pattern_category' );
