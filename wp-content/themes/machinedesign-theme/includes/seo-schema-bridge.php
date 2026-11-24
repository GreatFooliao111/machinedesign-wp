<?php
/**
 * MachineDesign Unified Rank Math SEO & Schema.org JSON-LD Bridge (v2.0)
 *
 * Integrates Organization, Service (for all 6 pillars + technical sub-services),
 * ContactPage, and custom '_md_custom_schema' postmeta directly into Rank Math's
 * native JSON-LD graph (`rank_math/json_ld`) with zero duplicate tags.
 * Falls back to standalone JSON-LD output ONLY if Rank Math is inactive.
 *
 * @package MachineDesign
 */

defined( 'ABSPATH' ) || exit;

/**
 * Map page template filenames to structured Service Schema metadata.
 *
 * @return array<string, array{name:string, type:string, desc:string}>
 */
function md_get_template_service_schema_map() {
	return array(
		'page-machine-design.php'          => array(
			'name' => 'طراحی ماشین‌آلات صنعتی و خطوط تولید (DFMA)',
			'type' => 'Industrial Machinery & Production Line Engineering',
			'desc' => 'طراحی مهندسی ماشین‌آلات سفارشی، مکانیزم‌های دقیق، نقشه‌های اجرایی ASME Y14.5 و راه‌اندازی خطوط تولید.',
		),
		'page-factory-troubleshooting.php' => array(
			'name' => 'عیب‌یابی تخصصی کارخانجات و آنالیز ارتعاشات FFT',
			'type' => 'Industrial Diagnostics & Vibration Analysis',
			'desc' => 'پایش وضعیت یاتاقان‌ها، آنالیز ارتعاشات ISO 20816، بالانس دینامیکی و رفع ریشه‌ای توقف خطوط تولید.',
		),
		'page-rd-prototyping.php'          => array(
			'name' => 'تحقیق و توسعه صنعتی (R&D)، پروتوتایپ و DFMEA',
			'type' => 'Industrial R&D and Rapid Prototyping',
			'desc' => 'توسعه مکانیزم‌های جدید، تحلیل شکست DFMEA و ساخت نمونه اولیه صنعتی با دقت مهندسی.',
		),
		'page-engineering-mentorship.php'  => array(
			'name' => 'آموزش و منتورشیپ فردی مهندسی (SolidWorks، FEA، GD&T)',
			'type' => 'Mechanical Engineering Mentorship',
			'desc' => 'منتورشیپ پروژه‌محور طراحی صنعتی، شبیه‌سازی عددی FEA و تلرانس‌گذاری هندسی برای مهندسان مکانیک.',
		),
		'page-corporate-training.php'      => array(
			'name' => 'آموزش سازمانی و ارتقای تیم‌های فنی کارخانجات',
			'type' => 'Corporate Industrial Engineering Training',
			'desc' => 'دوره‌های تخصصی حین کار در محل کارخانه برای ارتقای تیم‌های نگهداری، تعمیرات و مهندسی تولید.',
		),
		'page-machinery-inspection.php'    => array(
			'name' => 'کارشناسی خرید، بازرسی فنی و تدوین قرارداد ماشین‌آلات',
			'type' => 'Industrial Machinery Technical Inspection',
			'desc' => 'بازرسی فنی پیش از خرید ماشین‌آلات داخلی و خارجی (چین و امارات)، تست عملکرد و تدوین قرارداد فنی.',
		),
		'page-cad-cam-modeling.php'        => array(
			'name' => 'مدل‌سازی سه‌بعدی CAD/CAM و تلرانس‌گذاری GD&T',
			'type' => 'CAD/CAM Modeling & GD&T Blueprinting',
			'desc' => 'مدل‌سازی پارامتریک SolidWorks، کدنویسی CNC و نقشه‌کشی ساخت مطابق ASME Y14.5.',
		),
		'page-fea-analysis.php'            => array(
			'name' => 'تحلیل اجزای محدود (FEA) و شبیه‌سازی تنش مکانیکی',
			'type' => 'Finite Element Analysis (FEA)',
			'desc' => 'تحلیل تنش استاتیکی، دینامیکی، حرارتی و خستگی قطعات و سازه‌های صنعتی پیش از ساخت.',
		),
		'page-mold-design.php'             => array(
			'name' => 'طراحی قالب‌های صنعتی و سنبه‌ماتریس',
			'type' => 'Industrial Mold & Die Engineering',
			'desc' => 'مهندسی قالب‌های تزریق، فرم‌دهی و سنبه‌ماتریس با تحلیل خنک‌کاری و عمر مفید بالا.',
		),
		'page-reverse-engineering.php'     => array(
			'name' => 'مهندسی معکوس و اسکن سه‌بعدی قطعات صنعتی',
			'type' => '3D Scanning & Reverse Engineering',
			'desc' => 'اسکن نوری دقیق، استخراج ابرنقاط و بازطراحی بومی قطعات پیچیده و گیربکس‌های صنعتی.',
		),
	);
}

/**
 * Build dynamic Organization + Page-Specific Schema entities from Theme Options.
 *
 * @param int $post_id Current post ID.
 * @return array<string, array>
 */
function md_build_dynamic_schema_entities( $post_id ) {
	$entities = array();
	$org_id   = trailingslashit( home_url( '/' ) ) . '#organization';

	$phone = function_exists( 'md_get_contact' ) ? md_get_contact( 'phone_primary', '' ) : '';
	$email = function_exists( 'md_get_contact' ) ? md_get_contact( 'contact_email', 'info@machinedesign.ir' ) : 'info@machinedesign.ir';
	$city  = function_exists( 'md_get_option' ) ? md_get_option( 'workshop_city', 'مشهد' ) : 'مشهد';

	$same_as = array();
	if ( function_exists( 'md_get_option' ) ) {
		foreach ( array( 'linkedin_url', 'youtube_channel' ) as $k ) {
			$u = md_get_option( $k, '' );
			if ( ! empty( $u ) && filter_var( $u, FILTER_VALIDATE_URL ) ) {
				$same_as[] = $u;
			}
		}
	}

	$entities['md_organization'] = array(
		'@type'       => 'Organization',
		'@id'         => $org_id,
		'name'        => 'ماشین دیزاین (MachineDesign.ir)',
		'url'         => home_url( '/' ),
		'email'       => $email,
		'telephone'   => $phone,
		'address'     => array(
			'@type'           => 'PostalAddress',
			'addressLocality' => $city,
			'addressCountry'  => 'IR',
		),
		'sameAs'      => $same_as,
	);

	// Auto-inject Service Schema on any service pillar or technical sub-service page
	$template = get_page_template_slug( $post_id );
	$svc_map  = md_get_template_service_schema_map();
	if ( $template && isset( $svc_map[ $template ] ) ) {
		$svc = $svc_map[ $template ];
		$entities['md_service'] = array(
			'@type'       => 'Service',
			'@id'         => get_permalink( $post_id ) . '#service',
			'name'        => $svc['name'],
			'serviceType' => $svc['type'],
			'description' => $svc['desc'],
			'url'         => get_permalink( $post_id ),
			'provider'    => array( '@id' => $org_id ),
			'areaServed'  => array( 'IR', 'AE', 'CN' ),
		);
	} elseif ( 'page-contact.php' === $template ) {
		$entities['md_contact_page'] = array(
			'@type'       => 'ContactPage',
			'@id'         => get_permalink( $post_id ) . '#contactpage',
			'name'        => get_the_title( $post_id ),
			'url'         => get_permalink( $post_id ),
			'mainEntity'  => array( '@id' => $org_id ),
		);
	}

	// Merge optional per-post '_md_custom_schema' postmeta
	$custom_schema = get_post_meta( $post_id, '_md_custom_schema', true );
	if ( ! empty( $custom_schema ) ) {
		$schema_array = is_string( $custom_schema ) ? json_decode( $custom_schema, true ) : $custom_schema;
		if ( is_array( $schema_array ) ) {
			if ( isset( $schema_array['@graph'] ) && is_array( $schema_array['@graph'] ) ) {
				foreach ( $schema_array['@graph'] as $idx => $entity ) {
					$entities[ 'md_custom_schema_' . $idx ] = $entity;
				}
			} else {
				$key              = ! empty( $schema_array['@type'] ) ? 'md_schema_' . strtolower( $schema_array['@type'] ) : 'md_custom_schema';
				$entities[ $key ] = $schema_array;
			}
		}
	}

	return $entities;
}

/**
 * Filter Rank Math JSON-LD graph cleanly without duplicating Rank Math's own entities.
 */
function md_seo_extend_rank_math_json_ld( $data, $jsonld ) {
	if ( ! is_singular() && ! is_front_page() ) {
		return $data;
	}
	$post_id = (int) get_queried_object_id();
	if ( $post_id <= 0 ) {
		return $data;
	}

	$GLOBALS['md_schema_rendered_by_rank_math'] = true;
	$entities = md_build_dynamic_schema_entities( $post_id );

	// Avoid duplicating Organization if Rank Math already emitted 'publisher' or 'Organization'
	if ( isset( $data['Organization'] ) || isset( $data['publisher'] ) ) {
		unset( $entities['md_organization'] );
	}

	foreach ( $entities as $key => $entity ) {
		$data[ $key ] = $entity;
	}

	return $data;
}
add_filter( 'rank_math/json_ld', 'md_seo_extend_rank_math_json_ld', 99, 2 );

/**
 * Standalone fallback ONLY when Rank Math is NOT active.
 */
function md_seo_output_custom_schema_fallback() {
	if ( ! is_singular() && ! is_front_page() ) {
		return;
	}
	if ( ! empty( $GLOBALS['md_schema_rendered_by_rank_math'] ) ) {
		return;
	}
	if ( defined( 'RANK_MATH_VERSION' ) || function_exists( 'rank_math' ) ) {
		return;
	}

	$post_id = (int) get_queried_object_id();
	if ( $post_id <= 0 ) {
		return;
	}

	$entities = md_build_dynamic_schema_entities( $post_id );
	if ( empty( $entities ) ) {
		return;
	}

	$payload = array(
		'@context' => 'https://schema.org',
		'@graph'   => array_values( $entities ),
	);

	echo "\n<!-- MachineDesign Structured Schema (Standalone Fallback) -->\n";
	echo '<script type="application/ld+json">' . wp_json_encode( $payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . "</script>\n";
}
add_action( 'wp_head', 'md_seo_output_custom_schema_fallback', 20 );
