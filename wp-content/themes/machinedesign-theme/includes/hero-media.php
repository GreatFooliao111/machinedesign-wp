<?php
/**
 * Dynamic 3D Hero Media Engine & Universal Animated 3D Delta Robot Stage (v2.3)
 *
 * Default Unified Standard across all Main Header pages:
 *   Interactive transparent 3D Delta Robot WebM + AVIF fallback + Differential Parallax HUD.
 * Dynamic Override System preserved:
 *   1. Dedicated Page Meta Box (`_md_hero_image_id` from WP Media Library)
 *   2. Standard WordPress Featured Image (`get_post_thumbnail_id`)
 *   3. Default Animated 3D Delta Robot Stage (for Main Header pages) or Built-in 3D WebP Render
 *
 * @package MachineDesign
 */

defined( 'ABSPATH' ) || exit;

/**
 * Page-specific HUD telemetry metadata and fallback WebP renders.
 *
 * @return array<string, array{file:string, alt:string, code:string, hud_label:string, hud_val:string, hud_tol_label:string, hud_tol:string, hud_tag:string, use_delta:bool}>
 */
function md_get_default_hero_renders() {
	return array(
		'front-page'              => array(
			'file'          => 'hero-machine-design.webp',
			'alt'           => 'مکانیزم سه‌بعدی ربات دلتا، عملگر دقیق رباتیک و طراحی ماشین‌آلات صنعتی ماشین دیزاین',
			'code'          => 'SYS-00 // INDUSTRIAL MECHANICS',
			'hud_label'     => 'HIGH-SPEED KINEMATICS',
			'hud_val'       => 'PARALLEL DELTA ROBOT',
			'hud_tol_label' => 'TOLERANCE',
			'hud_tol'       => '±0.0015 mm',
			'hud_tag'       => 'DFMA VERIFIED',
			'use_delta'     => true,
		),
		'services'                => array(
			'file'          => 'hero-production-line.webp',
			'alt'           => 'ستون‌های شش‌گانه خدمات مهندسی مکانیک و اتوماسیون صنعتی ماشین دیزاین',
			'code'          => 'SERVICES // 6 ENGINEERING PILLARS',
			'hud_label'     => 'ENGINEERING SUITE',
			'hud_val'       => '6 CORE PILLARS',
			'hud_tol_label' => 'STANDARD',
			'hud_tol'       => 'ISO 12100 / ASME',
			'hud_tag'       => 'FULL-CYCLE R&D',
			'use_delta'     => true,
		),
		'machine-design'          => array(
			'file'          => 'hero-machine-design.webp',
			'alt'           => 'طراحی ماشین‌آلات صنعتی، مکانیزم‌های سروو دقیق و خطوط تولید سفارشی',
			'code'          => 'PILLAR-01 // DFMA & MACHINERY',
			'hud_label'     => 'HIGH-SPEED KINEMATICS',
			'hud_val'       => 'PARALLEL DELTA ROBOT',
			'hud_tol_label' => 'TOLERANCE',
			'hud_tol'       => '±0.0015 mm',
			'hud_tag'       => 'DFMA VERIFIED',
			'use_delta'     => true,
		),
		'factory-troubleshooting' => array(
			'file'          => 'hero-troubleshooting.webp',
			'alt'           => 'عیب‌یابی الکتروموتور گیربکس‌دار، کاهنده سیاره‌ای، بالانس دینامیکی و آنالیز ارتعاشات FFT کارخانجات',
			'code'          => 'PILLAR-02 // ISO 20816 DIAGNOSTICS',
			'hud_label'     => 'VIBRATION & FFT',
			'hud_val'       => 'DYNAMIC BALANCING',
			'hud_tol_label' => 'COMPLIANCE',
			'hud_tol'       => 'ISO 20816-3',
			'hud_tag'       => 'RCFA PROTOCOL',
			'use_delta'     => true,
		),
		'rd-prototyping'          => array(
			'file'          => 'hero-rd-prototyping.webp',
			'alt'           => 'تحقیق و توسعه صنعتی، رباتیک دلتا و نمونه‌سازی دقیق روی میز گرانیت مترولوژی',
			'code'          => 'PILLAR-03 // R&D & PROTOTYPING',
			'hud_label'     => 'R&D PROTOTYPING',
			'hud_val'       => 'DFMEA & VALIDATION',
			'hud_tol_label' => 'ITERATION',
			'hud_tol'       => 'TRL-4 TO TRL-8',
			'hud_tag'       => 'NDA PROTECTED',
			'use_delta'     => true,
		),
		'engineering-mentorship'  => array(
			'file'          => 'hero-cad-cam.webp',
			'alt'           => 'کله‌فرز دقیق CNC با اینسرت کارباید، منتورشیپ SolidWorks و تلرانس‌گذاری GD&T',
			'code'          => 'PILLAR-04 // ENGINEERING MENTORSHIP',
			'hud_label'     => 'MENTORSHIP TRACK',
			'hud_val'       => 'SOLIDWORKS & ANSYS',
			'hud_tol_label' => 'BLUEPRINTING',
			'hud_tol'       => 'ASME Y14.5-2018',
			'hud_tag'       => 'WORKSHOP GRADE',
			'use_delta'     => true,
		),
		'corporate-training'      => array(
			'file'          => 'hero-production-line.webp',
			'alt'           => 'آموزش سازمانی و ارتقای کادر فنی کارخانجات در خطوط تولید مدرن',
			'code'          => 'PILLAR-05 // CORPORATE TRAINING',
			'hud_label'     => 'ON-SITE ACADEMY',
			'hud_val'       => 'FACTORY R&D TEAMS',
			'hud_tol_label' => 'DELIVERY',
			'hud_tol'       => 'LIVE PRODUCTION',
			'hud_tag'       => 'ZERO-THEORY',
			'use_delta'     => true,
		),
		'machinery-inspection'    => array(
			'file'          => 'hero-production-line.webp',
			'alt'           => 'کارشناسی خرید، بازرسی فنی و تدوین قراردادهای ماشین‌آلات صنعتی',
			'code'          => 'PILLAR-06 // TECHNICAL INSPECTION',
			'hud_label'     => 'GLOBAL AUDIT',
			'hud_val'       => 'CHINA & DUBAI FAT',
			'hud_tol_label' => 'CHECKLIST',
			'hud_tol'       => '140+ TEST POINTS',
			'hud_tag'       => 'RISK SHIELD',
			'use_delta'     => true,
		),
		'projects'                => array(
			'file'          => 'hero-machine-design.webp',
			'alt'           => 'آرشیو پروژه‌های اجرایی طراحی ماشین‌آلات و خطوط تولید صنعتی',
			'code'          => 'PORTFOLIO // VERIFIED BUILDS',
			'hud_label'     => 'COMMISSIONED LINES',
			'hud_val'       => '150+ MACHINES',
			'hud_tol_label' => 'THROUGHPUT',
			'hud_tol'       => 'UP TO 180 PPM',
			'hud_tag'       => 'FIELD PROVEN',
			'use_delta'     => true,
		),
		'about'                   => array(
			'file'          => 'hero-production-line.webp',
			'alt'           => 'درباره مهندسی مکانیک ماشین دیزاین؛ پیوند تحلیل دقیق و ساخت صنعتی',
			'code'          => 'ABOUT // PRECISION ENGINEERING',
			'hud_label'     => 'SYSTEM ARCHITECTURE',
			'hud_val'       => '15+ YEARS FIELD',
			'hud_tol_label' => 'HUBS',
			'hud_tol'       => 'TEHRAN / MASHHAD',
			'hud_tag'       => 'ISO COMPLIANT',
			'use_delta'     => true,
		),
		'insights'                => array(
			'file'          => 'hero-fea-analysis.webp',
			'alt'           => 'مقالات تخصصی، استانداردهای DIN و ISO و پایگاه دانش ماشین دیزاین',
			'code'          => 'INSIGHTS // TECHNICAL ARCHIVE',
			'hud_label'     => 'KNOWLEDGE BASE',
			'hud_val'       => 'DIN / ISO / ASME',
			'hud_tol_label' => 'PUBLICATIONS',
			'hud_tol'       => 'PEER-REVIEWED',
			'hud_tag'       => 'ENGINEERING DOCS',
			'use_delta'     => true,
		),
		'contact'                 => array(
			'file'          => 'hero-machine-design.webp',
			'alt'           => 'مرکز تماس و ثبت استعلام فنی پروژه‌های صنعتی ماشین دیزاین',
			'code'          => 'RFQ // DIRECT ENGINEERING DESK',
			'hud_label'     => 'RFQ TELEMETRY',
			'hud_val'       => 'DIRECT TECH DESK',
			'hud_tol_label' => 'SLA RESPONSE',
			'hud_tol'       => '< 24 HOURS',
			'hud_tag'       => '100% NDA',
			'use_delta'     => true,
		),
		'cad-cam-modeling'        => array(
			'file'          => 'hero-cad-cam.webp',
			'alt'           => 'کله‌فرز دقیق CNC با اینسرت‌های کارباید، مدل‌سازی CAD/CAM و ماشین‌کاری پنج‌محوره',
			'code'          => 'SPEC // CAD-CAM & ASME Y14.5',
			'hud_label'     => 'PARAMETRIC CAD',
			'hud_val'       => '3/5-AXIS CNC',
			'hud_tol_label' => 'GD&T',
			'hud_tol'       => 'ASME Y14.5',
			'hud_tag'       => 'ZERO-ERROR',
			'use_delta'     => false,
		),
		'fea-analysis'            => array(
			'file'          => 'hero-fea-analysis.webp',
			'alt'           => 'تحلیل اجزای محدود FEA، مش‌بندی عددی و توزیع تنش فون‌مایزر روی ایمپلر استیل پمپ سانتریفیوژ',
			'code'          => 'SPEC // FEA & STRUCTURAL SIMULATION',
			'hud_label'     => 'FEA SOLVER',
			'hud_val'       => 'ANSYS / ABAQUS',
			'hud_tol_label' => 'SAFETY FACTOR',
			'hud_tol'       => 'FoS >= 2.2',
			'hud_tag'       => 'VALIDATED',
			'use_delta'     => false,
		),
		'mold-design'             => array(
			'file'          => 'hero-mold-design.webp',
			'alt'           => 'مجموعه قالب‌های صنعتی فولادی H13، پین‌های راهنما و طراحی قالب سنبه‌ماتریس دقیق',
			'code'          => 'SPEC // PRECISION TOOLING & MOLDS',
			'hud_label'     => 'TOOLING DESIGN',
			'hud_val'       => 'MULTI-CAVITY DIE',
			'hud_tol_label' => 'HARDNESS',
			'hud_tol'       => '58-62 HRC',
			'hud_tag'       => 'DFM READY',
			'use_delta'     => false,
		),
		'reverse-engineering'     => array(
			'file'          => 'hero-reverse-engineering.webp',
			'alt'           => 'اسکنر نوری سه‌بعدی نور آبی در حال مهندسی معکوس چرخ‌دنده مخروطی مارپیچ صنعتی',
			'code'          => 'SPEC // 3D METROLOGY & REVERSE ENG',
			'hud_label'     => '3D OPTICAL SCAN',
			'hud_val'       => 'BLUE-LIGHT METROLOGY',
			'hud_tol_label' => 'ACCURACY',
			'hud_tol'       => '±0.010 mm',
			'hud_tag'       => 'CAD REBUILT',
			'use_delta'     => false,
		),
		'team'                    => array(
			'file'          => 'hero-rd-prototyping.webp',
			'alt'           => 'کادر مهندسی و متخصصان طراحی ماشین‌آلات صنعتی ماشین دیزاین',
			'code'          => 'TEAM // ENGINEERING MATRIX',
			'hud_label'     => 'ENGINEERING MATRIX',
			'hud_val'       => '16+ SPECIALISTS',
			'hud_tol_label' => 'DISCIPLINES',
			'hud_tol'       => 'CAD / FEA / PLC',
			'hud_tag'       => 'SENIOR TEAM',
			'use_delta'     => false,
		),
	);
}

/**
 * Check if the current/given page has a manual Media Library override (Meta Box or Featured Image).
 *
 * @param string   $template_key Template key.
 * @param int|null $post_id      Optional post ID.
 * @return array{url:string, alt:string, code:string, width:int, height:int, is_override:bool}
 */
function md_get_page_hero_image( $template_key = 'front-page', $post_id = null ) {
	$defaults = md_get_default_hero_renders();
	$fallback = isset( $defaults[ $template_key ] ) ? $defaults[ $template_key ] : $defaults['front-page'];

	$pid = $post_id ? (int) $post_id : (int) get_queried_object_id();

	if ( $pid > 0 ) {
		// 1. Dedicated 3D Hero Meta Box override
		$custom_id = (int) get_post_meta( $pid, '_md_hero_image_id', true );
		if ( $custom_id > 0 ) {
			$img = wp_get_attachment_image_src( $custom_id, 'full' );
			if ( ! empty( $img[0] ) ) {
				$alt = get_post_meta( $custom_id, '_wp_attachment_image_alt', true );
				return array(
					'url'         => $img[0],
					'alt'         => $alt ? $alt : $fallback['alt'],
					'code'        => $fallback['code'],
					'width'       => ! empty( $img[1] ) ? (int) $img[1] : 1376,
					'height'      => ! empty( $img[2] ) ? (int) $img[2] : 768,
					'is_override' => true,
				);
			}
		}

		// 2. Standard WordPress Featured Image override
		$thumb_id = (int) get_post_thumbnail_id( $pid );
		if ( $thumb_id > 0 ) {
			$img = wp_get_attachment_image_src( $thumb_id, 'full' );
			if ( ! empty( $img[0] ) ) {
				$alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
				return array(
					'url'         => $img[0],
					'alt'         => $alt ? $alt : $fallback['alt'],
					'code'        => $fallback['code'],
					'width'       => ! empty( $img[1] ) ? (int) $img[1] : 1376,
					'height'      => ! empty( $img[2] ) ? (int) $img[2] : 768,
					'is_override' => true,
				);
			}
		}
	}

	// 3. Built-in theme WebP fallback
	return array(
		'url'         => get_template_directory_uri() . '/assets/images/heroes/' . $fallback['file'],
		'alt'         => $fallback['alt'],
		'code'        => $fallback['code'],
		'width'       => 1376,
		'height'      => 768,
		'is_override' => false,
	);
}

/**
 * Render the Hero 3D Stage:
 * - If admin uploaded a custom Meta Box / Featured Image override -> renders that override.
 * - Else if page is a Main Header route (`use_delta => true`) -> renders the interactive
 *   Animated 3D Delta Robot WebM + AVIF fallback + Differential Parallax HUD Glass Badge.
 * - Else (technical sub-service pages) -> renders the dedicated Swiss-German 3D WebP render.
 *
 * @param string $template_key   Template key from md_get_default_hero_renders().
 * @param string $badge_override Optional badge text override.
 * @return void
 */
function md_render_hero_3d_stage( $template_key = 'machine-design', $badge_override = '' ) {
	$defaults = md_get_default_hero_renders();
	$cfg      = isset( $defaults[ $template_key ] ) ? $defaults[ $template_key ] : $defaults['front-page'];
	$hero     = md_get_page_hero_image( $template_key );

	// If no manual Media Library override is active and this route uses the Unified 3D Delta Robot Stage:
	if ( empty( $hero['is_override'] ) && ! empty( $cfg['use_delta'] ) ) {
		$webm_url   = home_url( '/wp-content/uploads/2026/07/delta_robot_final_opt.webm' );
		$poster_url = get_template_directory_uri() . '/assets/images/delta_robot_final.avif';
		$tag_text   = $badge_override ? $badge_override : $cfg['hud_tag'];
		?>
		<div
			class="delta-robot-stage md-delta-unified-stage"
			data-delta-stage
			tabindex="0"
			role="img"
			aria-label="<?php echo esc_attr( $cfg['alt'] ); ?>"
		>
			<div class="delta-robot-glow" aria-hidden="true"></div>
			<div class="delta-robot-shadow" data-delta-shadow aria-hidden="true"></div>

			<div class="delta-robot-anim-wrap" data-delta-robot>
				<video
					class="delta-robot-img delta-robot-video"
					autoplay
					loop
					muted
					playsinline
					poster="<?php echo esc_url( $poster_url ); ?>"
					aria-label="<?php echo esc_attr( $cfg['alt'] ); ?>"
				>
					<source src="<?php echo esc_url( $webm_url ); ?>" type="video/webm">
					<img
						src="<?php echo esc_url( $poster_url ); ?>"
						alt="<?php echo esc_attr( $cfg['alt'] ); ?>"
						class="delta-robot-img"
						loading="eager"
						fetchpriority="high"
					/>
				</video>
			</div>

			<div class="delta-robot-hud" data-delta-hud dir="ltr">
				<div class="delta-robot-hud-col">
					<span class="delta-robot-hud-label"><?php echo esc_html( $cfg['hud_label'] ); ?></span>
					<span class="delta-robot-hud-value"><?php echo esc_html( $cfg['hud_val'] ); ?></span>
				</div>
				<div class="delta-robot-hud-sep" aria-hidden="true"></div>
				<div class="delta-robot-hud-col">
					<span class="delta-robot-hud-label"><?php echo esc_html( $cfg['hud_tol_label'] ); ?></span>
					<span class="delta-robot-hud-value"><?php echo esc_html( $cfg['hud_tol'] ); ?></span>
				</div>
				<div class="delta-robot-hud-tag">
					<span class="delta-robot-hud-led" aria-hidden="true"></span>
					<span><?php echo esc_html( $tag_text ); ?></span>
				</div>
			</div>
		</div>
		<?php
		return;
	}

	// Custom Media Library Override OR Dedicated Technical Sub-Service Static 3D Render
	$code = $badge_override ? $badge_override : $hero['code'];
	?>
	<figure class="md-hero-stage" aria-label="<?php echo esc_attr( $hero['alt'] ); ?>">
		<div class="md-hero-stage-frame">
			<img
				src="<?php echo esc_url( $hero['url'] ); ?>"
				alt="<?php echo esc_attr( $hero['alt'] ); ?>"
				width="<?php echo esc_attr( $hero['width'] ); ?>"
				height="<?php echo esc_attr( $hero['height'] ); ?>"
				class="md-hero-stage-img"
				loading="eager"
				fetchpriority="high"
				decoding="async"
			/>
			<div class="md-hero-stage-vignette" aria-hidden="true"></div>
		</div>
		<figcaption class="md-hero-stage-caption">
			<span class="md-hero-dot" aria-hidden="true"></span>
			<span class="mono" dir="ltr"><?php echo esc_html( $code ); ?></span>
		</figcaption>
	</figure>
	<?php
}

/**
 * Register WP-Admin Meta Box on all Pages for 1-click 3D Hero Image override & Gutenberg Slot toggle.
 */
function md_register_hero_media_metabox() {
	add_meta_box(
		'md_hero_3d_media_box',
		'تصویر سه‌بعدی هیرو صفحه (3D Hero Render)',
		'md_render_hero_media_metabox',
		array( 'page' ),
		'side',
		'high'
	);
}
add_action( 'add_meta_boxes', 'md_register_hero_media_metabox' );

function md_enqueue_hero_media_admin_assets( $hook ) {
	if ( 'post.php' !== $hook && 'post-new.php' !== $hook ) {
		return;
	}
	$screen = get_current_screen();
	if ( ! $screen || 'page' !== $screen->post_type ) {
		return;
	}
	wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'md_enqueue_hero_media_admin_assets' );

function md_render_hero_media_metabox( $post ) {
	wp_nonce_field( 'md_save_hero_media_nonce', 'md_hero_media_nonce' );
	$image_id    = (int) get_post_meta( $post->ID, '_md_hero_image_id', true );
	$image_url   = $image_id ? wp_get_attachment_image_url( $image_id, 'medium' ) : '';
	$enable_slot = (string) get_post_meta( $post->ID, '_md_enable_gutenberg_slot', true );
	?>
	<div id="md-hero-media-wrap" style="direction:rtl;">
		<p style="font-size:12px;color:#555;margin-top:0;">
			به‌صورت پیش‌فرض روی صفحات اصلی منو، <strong>انیمیشن سه‌بعدی ربات دلتا</strong> نمایش داده می‌شود. برای جایگزینی با تصویر یا رندر اختصاصی، از دکمه زیر انتخاب کنید.
		</p>
		<div id="md-hero-preview" style="margin-bottom:10px;background:#0B0D11;border-radius:4px;overflow:hidden;min-height:90px;display:flex;align-items:center;justify-content:center;">
			<?php if ( $image_url ) : ?>
				<img src="<?php echo esc_url( $image_url ); ?>" style="width:100%;height:auto;display:block;" alt="" />
			<?php else : ?>
				<span style="color:#9BA7B8;font-size:11px;padding:12px;">استیج سه‌بعدی پیش‌فرض فعال است</span>
			<?php endif; ?>
		</div>
		<input type="hidden" id="md_hero_image_id" name="md_hero_image_id" value="<?php echo esc_attr( $image_id ); ?>" />
		<button type="button" class="button button-primary" id="md-hero-upload-btn" style="width:100%;margin-bottom:6px;">انتخاب / تغییر تصویر سه‌بعدی</button>
		<button type="button" class="button" id="md-hero-remove-btn" style="width:100%;<?php echo $image_id ? '' : 'display:none;'; ?>">بازگشت به استیج سه‌بعدی پیش‌فرض</button>
		<hr style="margin:12px 0;" />
		<label style="display:flex;align-items:flex-start;gap:6px;font-size:12px;line-height:1.6;">
			<input type="checkbox" name="md_enable_gutenberg_slot" value="1" <?php checked( $enable_slot, '1' ); ?> />
			<span>نمایش بلوک‌های گوتنبرگ اضافی در پایین این برگه (اختیاری)</span>
		</label>
	</div>
	<script>
	(function($){
		var frame;
		$('#md-hero-upload-btn').on('click', function(e){
			e.preventDefault();
			if (frame) { frame.open(); return; }
			frame = wp.media({
				title: 'انتخاب تصویر سه‌بعدی هیرو صفحه',
				button: { text: 'تنظیم به عنوان تصویر هیرو' },
				multiple: false,
				library: { type: 'image' }
			});
			frame.on('select', function(){
				var att = frame.state().get('selection').first().toJSON();
				$('#md_hero_image_id').val(att.id);
				var url = (att.sizes && att.sizes.medium) ? att.sizes.medium.url : att.url;
				$('#md-hero-preview').html('<img src="' + url + '" style="width:100%;height:auto;display:block;" alt="" />');
				$('#md-hero-remove-btn').show();
			});
			frame.open();
		});
		$('#md-hero-remove-btn').on('click', function(e){
			e.preventDefault();
			$('#md_hero_image_id').val('');
			$('#md-hero-preview').html('<span style="color:#9BA7B8;font-size:11px;padding:12px;">استیج سه‌بعدی پیش‌فرض فعال است</span>');
			$(this).hide();
		});
	})(jQuery);
	</script>
	<?php
}

function md_save_hero_media_metabox( $post_id ) {
	if ( ! isset( $_POST['md_hero_media_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['md_hero_media_nonce'] ) ), 'md_save_hero_media_nonce' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if ( isset( $_POST['md_hero_image_id'] ) && '' !== $_POST['md_hero_image_id'] ) {
		update_post_meta( $post_id, '_md_hero_image_id', absint( $_POST['md_hero_image_id'] ) );
	} else {
		delete_post_meta( $post_id, '_md_hero_image_id' );
	}

	if ( ! empty( $_POST['md_enable_gutenberg_slot'] ) ) {
		update_post_meta( $post_id, '_md_enable_gutenberg_slot', '1' );
	} else {
		delete_post_meta( $post_id, '_md_enable_gutenberg_slot' );
	}
}
add_action( 'save_post_page', 'md_save_hero_media_metabox' );
