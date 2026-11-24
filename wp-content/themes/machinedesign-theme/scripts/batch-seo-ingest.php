<?php
/**
 * MachineDesign Batch SEO & Schema Ingestion Engine
 *
 * Imports batches of SEO-optimized articles and projects from JSON into WordPress as drafts,
 * populating Rank Math SEO metadata and custom Schema.org (JSON-LD) graphs.
 *
 * Usage:
 *   CLI: php batch-seo-ingest.php /path/to/articles.json
 *   PHP: require_once 'batch-seo-ingest.php'; $res = md_ingest_seo_json_file($file_path);
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	$wp_load = dirname( __DIR__, 4 ) . '/wp-load.php';
	if ( file_exists( $wp_load ) ) {
		require_once $wp_load;
	} else {
		exit( "Error: WordPress environment not found at $wp_load\n" );
	}
}

/**
 * Ingest an array of articles/posts from a JSON file.
 *
 * @param string $json_file_path Absolute path to the JSON file.
 * @param array  $options        Optional execution flags (e.g. ['default_status' => 'draft']).
 * @return array
 */
function md_ingest_seo_json_file( $json_file_path, $options = array() ) {
	if ( ! file_exists( $json_file_path ) ) {
		return array(
			'success' => false,
			'message' => "File not found: $json_file_path",
		);
	}

	$json_raw = file_get_contents( $json_file_path );
	if ( empty( $json_raw ) ) {
		return array(
			'success' => false,
			'message' => 'Empty file provided.',
		);
	}

	return md_ingest_seo_json_string( $json_raw, $options );
}

/**
 * Ingest an array of articles/posts from a raw JSON string.
 *
 * @param string $json_string Raw JSON string.
 * @param array  $options     Optional flags.
 * @return array
 */
function md_ingest_seo_json_string( $json_string, $options = array() ) {
	global $wpdb;
	$wpdb->query( 'SET NAMES utf8mb4' );

	$items = json_decode( $json_string, true );
	if ( json_last_error() !== JSON_ERROR_NONE ) {
		return array(
			'success' => false,
			'message' => 'JSON parse error: ' . json_last_error_msg(),
		);
	}

	// Normalize single item to array of items
	if ( isset( $items['title'] ) ) {
		$items = array( $items );
	}

	if ( ! is_array( $items ) || empty( $items ) ) {
		return array(
			'success' => false,
			'message' => 'JSON payload must contain an array of article objects.',
		);
	}

	$results = array(
		'success'        => true,
		'total'          => count( $items ),
		'inserted_count' => 0,
		'updated_count'  => 0,
		'error_count'    => 0,
		'items'          => array(),
	);

	$default_status = $options['default_status'] ?? 'draft';
	$default_author = $options['default_author'] ?? 1;

	foreach ( $items as $idx => $item ) {
		$title = trim( $item['title'] ?? '' );
		if ( empty( $title ) ) {
			$results['error_count']++;
			$results['items'][] = array(
				'index'   => $idx,
				'success' => false,
				'error'   => 'Missing required "title" field.',
			);
			continue;
		}

		$post_type = ! empty( $item['post_type'] ) ? sanitize_key( $item['post_type'] ) : 'post';
		$slug      = ! empty( $item['slug'] ) ? sanitize_title( $item['slug'] ) : sanitize_title( $title );
		$content   = $item['content'] ?? '';
		$excerpt   = $item['excerpt'] ?? '';
		$status    = ! empty( $item['status'] ) ? sanitize_key( $item['status'] ) : $default_status;
		$author_id = ! empty( $item['author_id'] ) ? absint( $item['author_id'] ) : $default_author;
		$date      = ! empty( $item['date'] ) ? sanitize_text_field( $item['date'] ) : current_time( 'mysql' );

		// Check idempotency (check if post with this slug exists in this post_type)
		$existing_post = get_page_by_path( $slug, OBJECT, $post_type );
		$is_update     = ( $existing_post instanceof WP_Post );
		$post_id       = 0;

		$post_data = array(
			'post_title'   => $title,
			'post_name'    => $slug,
			'post_content' => $content,
			'post_excerpt' => $excerpt,
			'post_status'  => $status,
			'post_type'    => $post_type,
			'post_author'  => $author_id,
			'post_date'    => $date,
		);

		if ( $is_update ) {
			$post_data['ID'] = $existing_post->ID;
			$post_id         = wp_update_post( $post_data, true );
		} else {
			$post_id = wp_insert_post( $post_data, true );
		}

		if ( is_wp_error( $post_id ) ) {
			$results['error_count']++;
			$results['items'][] = array(
				'index'   => $idx,
				'title'   => $title,
				'slug'    => $slug,
				'success' => false,
				'error'   => $post_id->get_error_message(),
			);
			continue;
		}

		// Taxonomies (Categories and Tags)
		if ( ! empty( $item['category'] ) ) {
			$categories = is_array( $item['category'] ) ? $item['category'] : array( $item['category'] );
			$cat_ids    = array();
			$taxonomy   = ( $post_type === 'project' && taxonomy_exists( 'project_category' ) ) ? 'project_category' : 'category';

			foreach ( $categories as $cat_name ) {
				$term = term_exists( $cat_name, $taxonomy );
				if ( ! $term ) {
					$term = wp_insert_term( $cat_name, $taxonomy );
				}
				if ( ! is_wp_error( $term ) && ! empty( $term['term_id'] ) ) {
					$cat_ids[] = (int) $term['term_id'];
				}
			}
			if ( ! empty( $cat_ids ) ) {
				wp_set_object_terms( $post_id, $cat_ids, $taxonomy );
			}
		}

		if ( ! empty( $item['tags'] ) && is_array( $item['tags'] ) ) {
			$tag_taxonomy = ( $post_type === 'project' && taxonomy_exists( 'project_tag' ) ) ? 'project_tag' : 'post_tag';
			wp_set_object_terms( $post_id, $item['tags'], $tag_taxonomy );
		}

		// SEO Metadata (Rank Math native fields)
		$seo = $item['seo'] ?? array();
		if ( ! empty( $seo ) && is_array( $seo ) ) {
			if ( ! empty( $seo['meta_title'] ) ) {
				update_post_meta( $post_id, 'rank_math_title', sanitize_text_field( $seo['meta_title'] ) );
			}
			if ( ! empty( $seo['meta_description'] ) ) {
				update_post_meta( $post_id, 'rank_math_description', sanitize_textarea_field( $seo['meta_description'] ) );
			}
			if ( ! empty( $seo['focus_keyword'] ) ) {
				update_post_meta( $post_id, 'rank_math_focus_keyword', sanitize_text_field( $seo['focus_keyword'] ) );
			}
			if ( ! empty( $seo['canonical_url'] ) ) {
				update_post_meta( $post_id, 'rank_math_canonical_url', esc_url_raw( $seo['canonical_url'] ) );
			}
			if ( ! empty( $seo['robots'] ) ) {
				$robots = is_array( $seo['robots'] ) ? $seo['robots'] : array( $seo['robots'] );
				update_post_meta( $post_id, 'rank_math_robots', $robots );
			} else {
				update_post_meta( $post_id, 'rank_math_robots', array( 'index' ) );
			}
		}

		// Schema.org (JSON-LD) Ingestion
		$schema = $item['schema'] ?? null;
		$schema_type = 'None';
		if ( ! empty( $schema ) ) {
			$schema_json = is_string( $schema ) ? $schema : wp_json_encode( $schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES );
			update_post_meta( $post_id, '_md_custom_schema', $schema_json );

			// Also populate Rank Math schema postmeta for admin compatibility
			if ( is_array( $schema ) ) {
				$schema_type = $schema['@type'] ?? 'Custom';
				update_post_meta( $post_id, 'rank_math_schema_custom', $schema );
			}
		}

		if ( $is_update ) {
			$results['updated_count']++;
		} else {
			$results['inserted_count']++;
		}

		$results['items'][] = array(
			'index'       => $idx,
			'post_id'     => $post_id,
			'title'       => $title,
			'slug'        => $slug,
			'status'      => $status,
			'post_type'   => $post_type,
			'action'      => $is_update ? 'updated' : 'inserted',
			'schema_type' => $schema_type,
			'edit_url'    => admin_url( "post.php?post={$post_id}&action=edit" ),
			'preview_url' => get_permalink( $post_id ),
		);
	}

	return $results;
}

// CLI Runner execution
if ( php_sapi_name() === 'cli' && isset( $argv[0] ) && realpath( $argv[0] ) === realpath( __FILE__ ) ) {
	$file = $argv[1] ?? '';
	if ( empty( $file ) ) {
		echo "Usage: php batch-seo-ingest.php <path-to-json-file>\n";
		exit( 1 );
	}

	$res = md_ingest_seo_json_file( $file );
	echo wp_json_encode( $res, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "\n";
}
