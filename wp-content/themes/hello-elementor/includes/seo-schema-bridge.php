<?php
/**
 * MachineDesign SEO & Schema Integration Bridge
 *
 * Seamlessly integrates custom Schema.org (JSON-LD) payloads from batch-ingested JSON content
 * into Rank Math's Schema Graph, with a robust fallback for standalone rendering.
 *
 * @package HelloElementor
 */

defined( 'ABSPATH' ) || exit;

/**
 * Filter Rank Math JSON-LD output to inject custom schema from '_md_custom_schema' postmeta.
 *
 * @param array  $data   Array of Schema.org graph entities.
 * @param object $jsonld Rank Math JSON-LD object.
 * @return array
 */
function md_seo_extend_rank_math_json_ld( $data, $jsonld ) {
	if ( ! is_singular() ) {
		return $data;
	}

	$post_id = get_the_ID();
	if ( ! $post_id ) {
		return $data;
	}

	$custom_schema = get_post_meta( $post_id, '_md_custom_schema', true );
	if ( empty( $custom_schema ) ) {
		return $data;
	}

	$schema_array = is_string( $custom_schema ) ? json_decode( $custom_schema, true ) : $custom_schema;
	if ( ! is_array( $schema_array ) ) {
		return $data;
	}

	// Flag that Rank Math successfully handled custom schema
	$GLOBALS['md_schema_rendered_by_rank_math'] = true;

	// If the custom schema is a full @graph array
	if ( isset( $schema_array['@graph'] ) && is_array( $schema_array['@graph'] ) ) {
		foreach ( $schema_array['@graph'] as $idx => $entity ) {
			$data[ 'md_custom_schema_' . $idx ] = $entity;
		}
	} else {
		// Single entity (e.g. TechArticle, HowTo, FAQPage)
		$key = ! empty( $schema_array['@type'] ) ? 'md_schema_' . strtolower( $schema_array['@type'] ) : 'md_custom_schema';
		$data[ $key ] = $schema_array;
	}

	return $data;
}
add_filter( 'rank_math/json_ld', 'md_seo_extend_rank_math_json_ld', 99, 2 );

/**
 * Fallback Schema.org JSON-LD output in wp_head
 * Ensures custom schemas render even if Rank Math filter is bypassed.
 */
function md_seo_output_custom_schema_fallback() {
	if ( ! is_singular() ) {
		return;
	}

	// If already handled by Rank Math hook, avoid duplication
	if ( ! empty( $GLOBALS['md_schema_rendered_by_rank_math'] ) ) {
		return;
	}

	$post_id = get_the_ID();
	if ( ! $post_id ) {
		return;
	}

	// If Rank Math is active and its json_ld filter is working, Rank Math will run at priority 30.
	// We only output fallback if Rank Math is inactive.
	if ( function_exists( 'rank_math' ) && ! empty( rank_math()->schema ) ) {
		return;
	}

	$custom_schema = get_post_meta( $post_id, '_md_custom_schema', true );
	if ( empty( $custom_schema ) ) {
		return;
	}

	$schema_array = is_string( $custom_schema ) ? json_decode( $custom_schema, true ) : $custom_schema;
	if ( ! is_array( $schema_array ) ) {
		return;
	}

	echo "\n<!-- MachineDesign Custom Schema.org JSON-LD (Fallback) -->\n";
	echo '<script type="application/ld+json">' . wp_json_encode( $schema_array, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";
}
add_action( 'wp_head', 'md_seo_output_custom_schema_fallback', 20 );
