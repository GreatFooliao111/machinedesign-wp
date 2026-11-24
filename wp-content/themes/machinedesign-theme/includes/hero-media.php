<?php
/**
 * Dynamic 3D Hero Media Engine & WP-Admin Meta Box
 *
 * Allows site administrators to replace any page's 3D Hero render directly
 * from the WordPress Media Library (via the dedicated Hero 3D Meta Box or
 * standard Featured Image), falling back cleanly to built-in Swiss-German
 * industrial WebP renders.
 *
 * @package MachineDesign
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default built-in 3D Hero renders mapped by template/page key.
 *
 * @return array<string, array{file:string, alt:string, code:string}>
 */
function md_get_default_hero_renders() {
	return array(
		'front-page'              => array(
			'file' => 'hero-machine-design.webp',
			'alt'  => 'رندر سه‌بعدی گیربکس صنعتی هلیکال و مکانیزم سروو خط تولید ماشین دیزاین',
			'code' => 'SYS-00 // INDUSTRIAL MECHANICS',
		),
		'machine-design'          => array(
			'file' => 'hero-machine-design.webp',
			'alt'  => 'طراحی ماشین‌آلات صنعتی، گیربکس‌های دقیق و خطوط تولید سفارشی',
			'code' => 'PILLAR-01 // DFMA & MACHINERY',
		),
		'factory-troubleshooting' => array(
			'file' => 'hero-troubleshooting.webp',
			'alt'  => 'بالانس دینامیکی، آنالیز ارتعاشات FFT و پایش وضعیت یاتاقان‌های صنعتی',
			'code' => 'PILLAR-02 // ISO 20816 DIAGNOSTICS',
		),
		'rd-prototyping'          => array(
			'file' => 'hero-rd-prototyping.webp',
			'alt'  => 'تحقیق و توسعه صنعتی، رباتیک دلتا و نمونه‌سازی دقیق روی میز گرانیت مترولوژی',
			'code' => 'PILLAR-03 // R&D & PROTOTYPING',
		),
		'engineering-mentorship'  => array(
			'file' => 'hero-cad-cam.webp',
			'alt'  => 'آموزش و منتورشیپ تخصصی SolidWorks، طراحی مهندسی و تلرانس‌گذاری GD&T',
			'code' => 'PILLAR-04 // ENGINEERING MENTORSHIP',
		),
		'corporate-training'      => array(
			'file' => 'hero-production-line.webp',
			'alt'  => 'آموزش سازمانی و ارتقای کادر فنی کارخانجات در خطوط تولید مدرن',
			'code' => 'PILLAR-05 // CORPORATE TRAINING',
		),
		'machinery-inspection'    => array(
			'file' => 'hero-production-line.webp',
			'alt'  => 'کارشناسی خرید، بازرسی فنی و تدوین قراردادهای ماشین‌آلات صنعتی',
			'code' => 'PILLAR-06 // TECHNICAL INSPECTION',
		),
		'cad-cam-modeling'        => array(
			'file' => 'hero-cad-cam.webp',
			'alt'  => 'مدل‌سازی دقیق CAD/CAM و ماشین‌کاری CNC پنج‌محوره قطعات صنعتی',
			'code' => 'SPEC // CAD-CAM & ASME Y14.5',
		),
		'fea-analysis'            => array(
			'file' => 'hero-fea-analysis.webp',
			'alt'  => 'تحلیل اجزای محدود FEA، توزیع تنش و شبیه‌سازی مکانیکی ایمپلر و سازه صنعتی',
			'code' => 'SPEC // FEA & STRUCTURAL SIMULATION',
		),
		'mold-design'             => array(
			'file' => 'hero-mold-design.webp',
			'alt'  => 'طراحی قالب‌های صنعتی چندحفره، سنبه‌ماتریس و سیستم‌های خنک‌کاری دقیق',
			'code' => 'SPEC // PRECISION TOOLING & MOLDS',
		),
		'reverse-engineering'     => array(
			'file' => 'hero-reverse-engineering.webp',
			'alt'  => 'اسکن سه‌بعدی نور آبی و مهندسی معکوس قطعات پیچیده صنعتی و چرخ‌دنده',
			'code' => 'SPEC // 3D METROLOGY & REVERSE ENG',
		),
		'services'                => array(
			'file' => 'hero-production-line.webp',
			'alt'  => 'ستون‌های شش‌گانه خدمات مهندسی مکانیک و اتوماسیون صنعتی ماشین دیزاین',
			'code' => 'SERVICES // 6 ENGINEERING PILLARS',
		),
		'about'                   => array(
			'file' => 'hero-production-line.webp',
			'alt'  => 'درباره مهندسی مکانیک ماشین دیزاین؛ پیوند تحلیل دقیق و ساخت صنعتی',
			'code' => 'ABOUT // SWISS-GERMAN PRECISION',
		),
		'contact'                 => array(
			'file' => 'hero-machine-design.webp',
			'alt'  => 'مرکز تماس و ثبت استعلام فنی پروژه‌های صنعتی ماشین دیزاین',
			'code' => 'RFQ // DIRECT ENGINEERING DESK',
		),
		'team'                    => array(
			'file' => 'hero-rd-prototyping.webp',
			'alt'  => 'کادر مهندسی و متخصصان طراحی ماشین‌آلات صنعتی ماشین دیزاین',
			'code' => 'TEAM // ENGINEERING MATRIX',
		),
		'projects'                => array(
			'file' => 'hero-machine-design.webp',
			'alt'  => 'آرشیو پروژه‌های اجرایی طراحی ماشین‌آلات و خطوط تولید صنعتی',
			'code' => 'PORTFOLIO // VERIFIED BUILDS',
		),
	);
}

/**
 * Resolve the active Hero 3D image URL & alt for the current (or given) page.
 *
 * Priority:
 * 1. Page Meta Box `_md_hero_image_id` (Media Library attachment)
 * 2. WordPress Native Featured Image (`get_post_thumbnail_id`)
 * 3. Built-in theme WebP render (`assets/images/heroes/hero-*.webp`)
 *
 * @param string   $template_key Key from md_get_default_hero_renders().
 * @param int|null $post_id      Optional post ID.
 * @return array{url:string, alt:string, code:string, width:int, height:int}
 */
function md_get_page_hero_image( $template_key = 'front-page', $post_id = null ) {
	$defaults = md_get_default_hero_renders();
	$fallback = isset( $defaults[ $template_key ] ) ? $defaults[ $template_key ] : $defaults['front-page'];

	$pid = $post_id ? (int) $post_id : (int) get_queried_object_id();

	// 1. Dedicated 3D Hero Meta Box image
	if ( $pid > 0 ) {
		$custom_id = (int) get_post_meta( $pid, '_md_hero_image_id', true );
		if ( $custom_id > 0 ) {
			$img = wp_get_attachment_image_src( $custom_id, 'full' );
			if ( ! empty( $img[0] ) ) {
				$alt = get_post_meta( $custom_id, '_wp_attachment_image_alt', true );
				return array(
					'url'    => $img[0],
					'alt'    => $alt ? $alt : $fallback['alt'],
					'code'   => $fallback['code'],
					'width'  => ! empty( $img[1] ) ? (int) $img[1] : 1376,
					'height' => ! empty( $img[2] ) ? (int) $img[2] : 768,
				);
			}
		}

		// 2. Standard WordPress Featured Image
		$thumb_id = (int) get_post_thumbnail_id( $pid );
		if ( $thumb_id > 0 ) {
			$img = wp_get_attachment_image_src( $thumb_id, 'full' );
			if ( ! empty( $img[0] ) ) {
				$alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
				return array(
					'url'    => $img[0],
					'alt'    => $alt ? $alt : $fallback['alt'],
					'code'   => $fallback['code'],
					'width'  => ! empty( $img[1] ) ? (int) $img[1] : 1376,
					'height' => ! empty( $img[2] ) ? (int) $img[2] : 768,
				);
			}
		}
	}

	// 3. Built-in theme WebP render
	return array(
		'url'    => get_template_directory_uri() . '/assets/images/heroes/' . $fallback['file'],
		'alt'    => $fallback['alt'],
		'code'   => $fallback['code'],
		'width'  => 1376,
		'height' => 768,
	);
}

/**
 * Render the standardized Swiss-German 3D Hero Stage visual frame.
 *
 * @param string $template_key Template key.
 * @param string $badge_override Optional technical badge override.
 * @return void
 */
function md_render_hero_3d_stage( $template_key = 'machine-design', $badge_override = '' ) {
	$hero = md_get_page_hero_image( $template_key );
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
 * Register WP-Admin Meta Box on all Pages for 1-click 3D Hero Image override.
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

/**
 * Enqueue WP Media scripts on page edit screen.
 */
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

/**
 * Render Hero 3D Media Meta Box UI in WP-Admin.
 *
 * @param WP_Post $post Current post object.
 */
function md_render_hero_media_metabox( $post ) {
	wp_nonce_field( 'md_save_hero_media_nonce', 'md_hero_media_nonce' );
	$image_id  = (int) get_post_meta( $post->ID, '_md_hero_image_id', true );
	$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'medium' ) : '';
	$enable_slot = (string) get_post_meta( $post->ID, '_md_enable_gutenberg_slot', true );
	?>
	<div id="md-hero-media-wrap" style="direction:rtl;">
		<p style="font-size:12px;color:#555;margin-top:0;">
			برای تغییر تصویر سه‌بعدی بالای این صفحه، یک رندر جدید از کتابخانه رسانه انتخاب کنید (در صورت خالی بودن، از <strong>تصویر شاخص</strong> یا رندر پیش‌فرض قالب استفاده می‌شود).
		</p>
		<div id="md-hero-preview" style="margin-bottom:10px;background:#0B0D11;border-radius:4px;overflow:hidden;min-height:90px;display:flex;align-items:center;justify-content:center;">
			<?php if ( $image_url ) : ?>
				<img src="<?php echo esc_url( $image_url ); ?>" style="width:100%;height:auto;display:block;" alt="" />
			<?php else : ?>
				<span style="color:#9BA7B8;font-size:11px;padding:12px;">رندر پیش‌فرض قالب فعال است</span>
			<?php endif; ?>
		</div>
		<input type="hidden" id="md_hero_image_id" name="md_hero_image_id" value="<?php echo esc_attr( $image_id ); ?>" />
		<button type="button" class="button button-primary" id="md-hero-upload-btn" style="width:100%;margin-bottom:6px;">انتخاب / تغییر تصویر سه‌بعدی</button>
		<button type="button" class="button" id="md-hero-remove-btn" style="width:100%;<?php echo $image_id ? '' : 'display:none;'; ?>">بازگشت به رندر پیش‌فرض</button>
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
			$('#md-hero-preview').html('<span style="color:#9BA7B8;font-size:11px;padding:12px;">رندر پیش‌فرض قالب فعال است</span>');
			$(this).hide();
		});
	})(jQuery);
	</script>
	<?php
}

/**
 * Save Hero 3D Media Meta Box value securely.
 *
 * @param int $post_id Post ID.
 */
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
