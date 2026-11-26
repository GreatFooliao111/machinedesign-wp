<?php
defined( 'ABSPATH' ) || exit;

class MD_Core_Blocks_Shortcodes {

    public static function init() {
        add_action( 'init', array( __CLASS__, 'register_blocks_and_shortcodes' ) );
    }

    public static function register_blocks_and_shortcodes() {
        wp_register_script(
            'md-core-blocks-editor',
            MD_CORE_URL . 'assets/js/blocks-editor.js',
            array( 'wp-blocks', 'wp-element', 'wp-server-side-render' ),
            MD_CORE_VERSION,
            true
        );

        $blocks = array(
            'trumpf-hero'          => 'render_trumpf_hero',
            'bento-pillars'        => 'render_bento_pillars',
            'metrics-strip'        => 'render_metrics_strip',
            'industries-horizon'   => 'render_industries_horizon',
            'delta-kinematics-lab' => 'render_delta_kinematics_lab',
            'projects-grid'        => 'render_projects_grid',
            'team-quartet'         => 'render_team_quartet',
            'rfq-desk'             => 'render_rfq_desk',
        );

        foreach ( $blocks as $slug => $method ) {
            $sc_tag = 'md_' . str_replace( '-', '_', $slug );
            add_shortcode( $sc_tag, array( __CLASS__, $method ) );
            if ( function_exists( 'register_block_type' ) ) {
                register_block_type( 'machinedesign/' . $slug, array(
                    'editor_script'   => 'md-core-blocks-editor',
                    'render_callback' => array( __CLASS__, $method ),
                ) );
            }
        }
    }

    public static function theme_img( $file ) {
        return esc_url( get_template_directory_uri() . '/assets/images/heroes/' . $file );
    }

    /** 1. TRUMPF 4-Panel Edge-to-Edge Split Architectural Hero */
    public static function render_trumpf_hero( $atts = array() ) {
        ob_start();
        ?>
        <section class="md-tr-hero" aria-label="هیرو اصلی ماشین دیزاین">
            <div class="md-tr-hero-mosaic">
                <div class="md-tr-hero-panel"><img src="<?php echo self::theme_img( 'hero-machine-design.webp' ); ?>" alt="طراحی گیربکس و ماشین‌آلات صنعتی" loading="eager" fetchpriority="high" /></div>
                <div class="md-tr-hero-panel"><img src="<?php echo self::theme_img( 'hero-fea-analysis.webp' ); ?>" alt="تحلیل اجزای محدود FEA" loading="eager" /></div>
                <div class="md-tr-hero-panel"><img src="<?php echo self::theme_img( 'hero-cad-cam.webp' ); ?>" alt="ماشین‌کاری ۵ محور CNC" loading="eager" /></div>
                <div class="md-tr-hero-panel"><img src="<?php echo self::theme_img( 'hero-production-line.webp' ); ?>" alt="خطوط تولید تمام اتوماتیک" loading="eager" /></div>
            </div>
            <div class="md-tr-hero-statement md-reveal">
                <div class="md-container">
                    <span class="md-tr-kicker mono" dir="ltr">PRECISION MECHANICAL ENGINEERING // ISO 12100 · ASME Y14.5</span>
                    <h1 class="md-tr-hero-title">مهندسی دقیق ماشین‌آلات صنعتی، خطوط تولید و عیب‌یابی کارخانجات</h1>
                    <p class="md-tr-hero-lead">
                        پیوند محاسبات عددی، مدل‌سازی پارامتریک سالیدورکس و استانداردهای ساخت DFMA با تجربه میدانی کارگاهی؛ برای به صفر رساندن ریسک سرمایه‌گذاری و توقف خطوط تولید.
                    </p>
                    <div class="md-tr-hero-actions">
                        <a href="#rfq-desk" class="md-tr-btn md-tr-btn-primary">
                            <span>درخواست ارزیابی فنی و NDA</span>
                            <span class="md-tr-arrow" aria-hidden="true">←</span>
                        </a>
                        <a href="#pillars-mosaic" class="md-tr-btn md-tr-btn-outline">
                            <span>مشاهده ۶ ستون خدمات</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    /** 2. TRUMPF Iconic Asymmetric Bento Mosaic (1 Large 2x2 + 5 Precision Tiles) */
    public static function render_bento_pillars( $atts = array() ) {
        $pillars = array(
            array( 'code' => 'MD-SRV-01', 'title' => 'طراحی ماشین‌آلات و خطوط تولید (DFMA)', 'desc' => 'طراحی صفر تا صد خطوط بسته‌بندی، غذایی و مکانیزم‌های سفارشی.', 'url' => '/services/machine-design/', 'img' => 'hero-machine-design.webp', 'featured' => true ),
            array( 'code' => 'MD-SRV-02', 'title' => 'عیب‌یابی خط و آنالیز ارتعاشات FFT', 'desc' => 'پایش یاتاقان و بالانس دینامیکی ISO 20816.', 'url' => '/services/factory-troubleshooting/', 'img' => 'hero-troubleshooting.webp', 'featured' => false ),
            array( 'code' => 'MD-SRV-03', 'title' => 'تحقیق و توسعه (R&D) و پروتوتایپ', 'desc' => 'DFMEA و ساخت نمونه اولیه صنعتی.', 'url' => '/services/rd-prototyping/', 'img' => 'hero-rd-prototyping.webp', 'featured' => false ),
            array( 'code' => 'MD-SRV-04', 'title' => 'منتورشیپ SolidWorks و Ansys', 'desc' => 'آموزش پروژه‌محور طراحی و GD&T.', 'url' => '/services/engineering-mentorship/', 'img' => 'hero-cad-cam.webp', 'featured' => false ),
            array( 'code' => 'MD-SRV-05', 'title' => 'آموزش سازمانی تیم‌های کارخانجات', 'desc' => 'ارتقای تیم‌های نت و تولید در محل.', 'url' => '/services/corporate-training/', 'img' => 'hero-mold-design.webp', 'featured' => false ),
            array( 'code' => 'MD-SRV-06', 'title' => 'کارشناسی خرید و بازرسی (چین/دبی)', 'desc' => 'بازرسی پیش از خرید و تست FAT/SAT.', 'url' => '/services/machinery-inspection/', 'img' => 'hero-production-line.webp', 'featured' => false ),
        );
        ob_start();
        ?>
        <section class="md-tr-sec" id="pillars-mosaic">
            <div class="md-container">
                <div class="md-tr-sec-head md-reveal">
                    <div>
                        <span class="md-tr-kicker mono" dir="ltr">01 // ENGINEERING PORTFOLIO</span>
                        <h2 class="md-tr-sec-title">شش ستون تخصصی مهندسی ماشین دیزاین</h2>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="md-tr-btn md-tr-btn-outline">مشاهده نمای کلی خدمات ←</a>
                </div>
                <div class="md-tr-bento-mosaic">
                    <?php foreach ( $pillars as $p ) : ?>
                        <a href="<?php echo esc_url( home_url( $p['url'] ) ); ?>" class="md-tr-tile <?php echo $p['featured'] ? 'is-featured' : ''; ?> md-reveal">
                            <div class="md-tr-tile-media">
                                <img src="<?php echo self::theme_img( $p['img'] ); ?>" alt="<?php echo esc_attr( $p['title'] ); ?>" loading="lazy" />
                                <div class="md-tr-tile-scrim" aria-hidden="true"></div>
                            </div>
                            <div class="md-tr-tile-badge mono" dir="ltr"><?php echo esc_html( $p['code'] ); ?></div>
                            <div class="md-tr-tile-caption">
                                <h3><?php echo esc_html( $p['title'] ); ?></h3>
                                <p><?php echo esc_html( $p['desc'] ); ?></p>
                                <span class="md-tr-tile-link">جزئیات فنی <span class="md-tr-arrow">←</span></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    /** 3. TRUMPF Oversized Open Typographic KPI Strip (Zero Boxes) */
    public static function render_metrics_strip( $atts = array() ) {
        ob_start();
        ?>
        <section class="md-tr-sec md-tr-kpi-sec">
            <div class="md-container">
                <p class="md-tr-kpi-eyebrow">ماشین دیزاین — متعهد به دقت مهندسی و تولید بدون توقف</p>
                <div class="md-tr-kpi-grid">
                    <div class="md-tr-kpi-item md-reveal">
                        <span class="md-tr-kpi-num mono" data-countup><?php echo md_get_stat( 'stat_years_experience', '15+' ); ?></span>
                        <span class="md-tr-kpi-label">سال تجربه میدانی طراحی و ساخت</span>
                    </div>
                    <div class="md-tr-kpi-item md-reveal">
                        <span class="md-tr-kpi-num mono" data-countup><?php echo md_get_stat( 'stat_projects', '150+' ); ?></span>
                        <span class="md-tr-kpi-label">ماشین‌آلات و مکانیزم‌های اجراشده</span>
                    </div>
                    <div class="md-tr-kpi-item md-reveal">
                        <span class="md-tr-kpi-num mono" data-countup><?php echo md_get_stat( 'stat_production_lines', '40+' ); ?></span>
                        <span class="md-tr-kpi-label">خط تولید کامل راه‌اندازی‌شده</span>
                    </div>
                    <div class="md-tr-kpi-item md-reveal">
                        <span class="md-tr-kpi-num mono" data-countup><?php echo md_get_stat( 'stat_satisfaction', '98%' ); ?></span>
                        <span class="md-tr-kpi-label">رضایت و تداوم همکاری کارخانجات</span>
                    </div>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    /** 4. TRUMPF Horizon-Straddling Applications & Industries Band */
    public static function render_industries_horizon( $atts = array() ) {
        ob_start();
        ?>
        <section class="md-tr-horizon-sec">
            <div class="md-container">
                <div class="md-tr-sec-head md-reveal" style="justify-content:center;text-align:center;">
                    <div>
                        <span class="md-tr-kicker mono" dir="ltr">02 // MANUFACTURING SOLUTIONS</span>
                        <h2 class="md-tr-sec-title">راهکارهای متناسب با صنعت و خط تولید شما</h2>
                    </div>
                </div>
                <div class="md-tr-horizon-grid">
                    <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="md-tr-horizon-card md-reveal">
                        <div class="md-tr-tile-media">
                            <img src="<?php echo self::theme_img( 'hero-reverse-engineering.webp' ); ?>" alt="کاربردهای مهندسی و مهندسی معکوس" loading="lazy" />
                            <div class="md-tr-tile-scrim" aria-hidden="true"></div>
                        </div>
                        <div class="md-tr-horizon-label">
                            <h3>کاربردهای مهندسی (CAD · FEA · مهندسی معکوس)</h3>
                            <span class="md-tr-arrow">←</span>
                        </div>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/industry/food-beverage/' ) ); ?>" class="md-tr-horizon-card md-reveal">
                        <div class="md-tr-tile-media">
                            <img src="<?php echo self::theme_img( 'hero-production-line.webp' ); ?>" alt="صنایع هدف: غذایی، بسته‌بندی، دارویی و پلیمری" loading="lazy" />
                            <div class="md-tr-tile-scrim" aria-hidden="true"></div>
                        </div>
                        <div class="md-tr-horizon-label">
                            <h3>صنایع هدف (غذایی · بسته‌بندی · دارویی · پلیمر · خورشیدی)</h3>
                            <span class="md-tr-arrow">←</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    /** 5. Dedicated Mid-Page 3D Delta Robot Kinematics Showcase (Moved OUT of Hero!) */
    public static function render_delta_kinematics_lab( $atts = array() ) {
        $webm   = home_url( '/wp-content/uploads/2026/07/delta_robot_final_opt.webm' );
        $poster = get_template_directory_uri() . '/assets/images/delta_robot_final.avif';
        ob_start();
        ?>
        <section class="md-tr-delta-lab" aria-label="آزمایشگاه سینماتیک و دقت میکرونی">
            <div class="md-container md-tr-delta-grid">
                <div class="md-tr-delta-copy md-reveal">
                    <span class="md-tr-kicker mono" dir="ltr">03 // KINEMATICS &amp; PRECISION LAB</span>
                    <h2>سینماتیک پرسرعت، دقت میکرونی و ساخت‌پذیری واقعی</h2>
                    <p>
                        در ماشین دیزاین، مکانیزم‌های رباتیک دلتا، فک‌های دوار سروو و گیربکس‌های صنعتی پیش از برش اولین قطعه فولاد، تحت تحلیل دینامیکی، شبیه‌سازی خستگی Ansys و انطباقات <span class="mono">ASME Y14.5</span> اعتبارسنجی می‌شوند.
                    </p>
                    <ul class="md-tr-spec-list">
                        <li><span>دقت تکرارپذیری مکانیزم</span><strong class="mono">±0.0015 mm</strong></li>
                        <li><span>استاندارد ایمنی ماشین‌آلات</span><strong class="mono">ISO 12100 / CE</strong></li>
                        <li><span>پایش ارتعاشات تجهیزات دوار</span><strong class="mono">ISO 20816-3</strong></li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/services/rd-prototyping/' ) ); ?>" class="md-tr-btn md-tr-btn-amber">
                        <span>ورود به دپارتمان تحقیق و توسعه (R&amp;D)</span>
                        <span class="md-tr-arrow">←</span>
                    </a>
                </div>
                <div class="md-tr-delta-stage-wrap md-reveal">
                    <div class="delta-robot-stage" data-delta-stage tabindex="0" role="img" aria-label="مدل سه‌بعدی تعاملی ربات دلتا ماشین دیزاین">
                        <div class="delta-robot-anim-wrap" data-delta-robot>
                            <video class="delta-robot-video" autoplay loop muted playsinline poster="<?php echo esc_url( $poster ); ?>">
                                <source src="<?php echo esc_url( $webm ); ?>" type="video/webm" />
                                <img src="<?php echo esc_url( $poster ); ?>" alt="ربات دلتا صنعتی" loading="lazy" />
                            </video>
                        </div>
                        <div class="md-tr-delta-hud mono" data-delta-hud dir="ltr">
                            <span>PARALLEL DELTA KINEMATICS</span>
                            <span>±0.0015 mm</span>
                            <span class="is-amber">DFMA VERIFIED</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    /** 6. Dynamic Commissioned Projects Grid (project CPT) */
    public static function render_projects_grid( $atts = array() ) {
        $atts = shortcode_atts( array( 'limit' => 6 ), $atts );
        $q = new WP_Query( array(
            'post_type'      => 'project',
            'post_status'    => 'publish',
            'posts_per_page' => absint( $atts['limit'] ),
        ) );
        ob_start();
        ?>
        <section class="md-tr-sec md-tr-sec-mist">
            <div class="md-container">
                <div class="md-tr-sec-head md-reveal">
                    <div>
                        <span class="md-tr-kicker mono" dir="ltr">04 // COMMISSIONED PROJECTS</span>
                        <h2 class="md-tr-sec-title">پروژه‌های اجرایی تحویل‌شده در صنعت</h2>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/projects/' ) ); ?>" class="md-tr-btn md-tr-btn-outline">آرشیو کامل پروژه‌ها ←</a>
                </div>
                <div class="md-tr-card-grid-3">
                    <?php if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post();
                        $pid   = get_the_ID();
                        $std   = get_post_meta( $pid, '_md_project_standard', true ) ?: 'DIN / ISO';
                        $kpi   = get_post_meta( $pid, '_md_project_kpi', true );
                        $thumb = has_post_thumbnail( $pid ) ? get_the_post_thumbnail_url( $pid, 'large' ) : self::theme_img( 'hero-machine-design.webp' );
                    ?>
                        <article class="md-tr-editorial-card md-reveal">
                            <a href="<?php the_permalink(); ?>" class="md-tr-card-img-wrap">
                                <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" />
                            </a>
                            <div class="md-tr-card-body">
                                <span class="md-tr-card-meta mono" dir="ltr"><?php echo esc_html( $std ); ?></span>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo esc_html( has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( get_the_content() ), 20, '...' ) ); ?></p>
                                <?php if ( $kpi ) : ?><div class="md-tr-card-kpi"><?php echo esc_html( $kpi ); ?></div><?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="md-tr-card-more">مطالعه کیس‌استادی <span class="md-tr-arrow">←</span></a>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    /** 7. Curated 4-Member Core Engineering Leadership Quartet (Strictly 4 Leads!) */
    public static function render_team_quartet( $atts = array() ) {
        $q = new WP_Query( array(
            'post_type'      => 'team_member',
            'post_status'    => 'publish',
            'posts_per_page' => 4,
            'orderby'        => 'menu_order date',
            'order'          => 'ASC',
        ) );
        ob_start();
        ?>
        <section class="md-tr-sec">
            <div class="md-container">
                <div class="md-tr-sec-head md-reveal">
                    <div>
                        <span class="md-tr-kicker mono" dir="ltr">05 // CORE ENGINEERING LEADERSHIP</span>
                        <h2 class="md-tr-sec-title">هسته مرکزی راهبری فنی ماشین دیزاین</h2>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="md-tr-btn md-tr-btn-outline">درباره سازمان و ۴ دفتر فنی ←</a>
                </div>
                <div class="md-tr-team-grid-4">
                    <?php if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post();
                        $tid   = get_the_ID();
                        $role  = get_post_meta( $tid, '_md_member_role_badge', true ) ?: 'مهندس ارشد مکانیک';
                        $thumb = has_post_thumbnail( $tid ) ? get_the_post_thumbnail_url( $tid, 'large' ) : get_template_directory_uri() . '/assets/images/team-avatar-placeholder.svg';
                    ?>
                        <a href="<?php the_permalink(); ?>" class="md-tr-team-card md-reveal">
                            <div class="md-tr-team-photo"><img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" /></div>
                            <div class="md-tr-team-info">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo esc_html( $role ); ?></p>
                                <span class="md-tr-card-more">مشاهده پروفایل <span class="md-tr-arrow">←</span></span>
                            </div>
                        </a>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }

    /** 8. TRUMPF-Style Regional Hubs + Full NDA RFQ Desk (Bound to machinedesign-rfq-manager AJAX) */
    public static function render_rfq_desk( $atts = array() ) {
        ob_start();
        ?>
        <section class="md-tr-sec md-tr-sec-mist" id="rfq-desk">
            <div class="md-container">
                <div class="md-tr-rfq-shell md-reveal">
                    <div class="md-tr-rfq-info">
                        <span class="md-tr-kicker mono" dir="ltr">DIRECT ENGINEERING DESK // 100% NDA</span>
                        <h2>شروع پروژه، عیب‌یابی یا استعلام فنی</h2>
                        <p>تمامی نقشه‌ها و اطلاعات فنی شما تحت پروتکل رسمی محرمانگی (NDA) محافظت می‌شود. پاسخ‌گویی کارشناس ارشد زیر ۲۴ ساعت کاری.</p>
                        <div class="md-tr-hub-list">
                            <div><strong>تهران و مشهد</strong><span class="mono"><?php echo md_get_contact( 'phone_primary' ); ?></span></div>
                            <div><strong>مکاتبات فنی و NDA</strong><span class="mono"><?php echo md_get_contact( 'contact_email' ); ?></span></div>
                            <div><strong>دفاتر بازرسی خارجی</strong><span class="mono">Shanghai · Dubai</span></div>
                        </div>
                    </div>
                    <form class="md-tr-rfq-form" data-rfq-form>
                        <input type="text" name="md_hp_website" value="" style="display:none !important;" tabindex="-1" autocomplete="off" />
                        <div class="md-tr-form-grid">
                            <label><span>نام و سمت سازمانی *</span><input type="text" name="rfq_name" required placeholder="مدیر فنی / مدیر کارخانه" /></label>
                            <label><span>شماره تماس مستقیم *</span><input type="tel" name="rfq_phone" required dir="ltr" placeholder="0915 000 0000" /></label>
                        </div>
                        <label>
                            <span>انتخاب ستون خدمت مهندسی</span>
                            <select name="rfq_service_type">
                                <option value="SRV-01">۰۱ // طراحی ماشین‌آلات و خطوط تولید (DFMA)</option>
                                <option value="SRV-02">۰۲ // عیب‌یابی کارخانه و آنالیز ارتعاشات FFT</option>
                                <option value="SRV-03">۰۳ // تحقیق و توسعه (R&amp;D) و پروتوتایپ</option>
                                <option value="SRV-04">۰۴ // منتورشیپ فردی SolidWorks و Ansys</option>
                                <option value="SRV-05">۰۵ // آموزش سازمانی کارخانجات</option>
                                <option value="SRV-06">۰۶ // کارشناسی خرید و بازرسی ماشین‌آلات (چین/دبی)</option>
                            </select>
                        </label>
                        <label><span>خلاصه چالش فنی یا مشخصات خط</span><textarea name="rfq_desc" rows="3" placeholder="ظرفیت تولید، نوع دستگاه یا مشکل فنی..."></textarea></label>
                        <div class="md-tr-rfq-foot">
                            <span class="md-tr-nda-note">تضمین محرمانگی کامل اسناد تحت قرارداد رسمی NDA</span>
                            <button type="submit" class="md-tr-btn md-tr-btn-primary"><span>ارسال امن استعلام فنی</span><span class="md-tr-arrow">←</span></button>
                        </div>
                        <div class="md-tr-rfq-status" aria-live="polite"></div>
                    </form>
                </div>
            </div>
        </section>
        <?php
        return ob_get_clean();
    }
}
MD_Core_Blocks_Shortcodes::init();
