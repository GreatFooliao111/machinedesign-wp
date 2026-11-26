<?php
/** Template Name: TRUMPF Engineering Team Roster (کادر مهندسی ۱۶ نفره) */
defined( 'ABSPATH' ) || exit;
get_header();

$departments = array(
    'all'           => 'همه متخصصان (۱۶)',
    'mechanism'     => 'طراحی مکانیزم (۴)',
    'simulation'    => 'شبیه‌سازی و ارتعاشات (۳)',
    'manufacturing' => 'مهندسی ساخت و DFMA (۴)',
    'automation'    => 'اتوماسیون و موشن (۳)',
    'safety-capex'  => 'ایمنی و CAPEX (۲)',
);

$roster_meta = array(
    'hossein-vatandoust' => array( 'dept' => 'mechanism', 'dept_label' => 'طراحی مکانیزم', 'kw' => 'حسین وطن دوست solidworks سالیدورک مکانیزم طراحی ماشین آلات صنایع غذایی بسته بندی founder' ),
    'alireza-rezvani'    => array( 'dept' => 'mechanism', 'dept_label' => 'طراحی مکانیزم', 'kw' => 'علیرضا رضوانی گیربکس چرخدنده سینماتیک دینامیک din 3960 انتقال قدرت' ),
    'kamran-rostami'     => array( 'dept' => 'mechanism', 'dept_label' => 'مهندسی معکوس', 'kw' => 'کامران رستمی مهندسی معکوس اسکن سه بعدی ابرنقاط geomagic بومی سازی' ),
    'nima-sadeghi'       => array( 'dept' => 'mechanism', 'dept_label' => 'ماشین‌آلات بسته‌بندی', 'kw' => 'نیما صادقی بسته بندی فرم دهی پیوسته فیلینگ پلیمر بهداشتی ehedg ultrasonic' ),
    'sara-rad'           => array( 'dept' => 'simulation', 'dept_label' => 'شبیه‌سازی سازه و FEA', 'kw' => 'سارا راد fea ansys انسیس المان محدود تحلیل تنش خستگی شبیه سازی' ),
    'ehsan-karimi'       => array( 'dept' => 'simulation', 'dept_label' => 'سیالات محاسباتی CFD', 'kw' => 'احسان کریمی cfd fluent فلوئنت سیالات انتقال حرارت خشک کن انرژی' ),
    'behnam-farahmand'   => array( 'dept' => 'simulation', 'dept_label' => 'عیب‌یابی ارتعاشات', 'kw' => 'بهنام فرهمند ارتعاشات پایش وضعیت بالانس دینامیکی یاتاقان شفت iso 10816 iso 20816' ),
    'morteza-kazemi'     => array( 'dept' => 'manufacturing', 'dept_label' => 'مهندسی ساخت و DFMA', 'kw' => 'مرتضی کاظمی ساخت dfma فرزکاری چندمحوره cnc فیکسچر جیگ تراشکاری' ),
    'maryam-amini'       => array( 'dept' => 'manufacturing', 'dept_label' => 'کنترل کیفیت و GD&T', 'kw' => 'مریم امینی gd&t تلرانس گذاری هندسی cmm zeiss asme y14.5 کنترل کیفیت' ),
    'davood-hosseini'    => array( 'dept' => 'manufacturing', 'dept_label' => 'شیت‌متال و لیزر', 'kw' => 'داوود حسینی شیت متال ورق کاری برش لیزر خمکاری cnc نستینگ k-factor' ),
    'farhad-najafi'      => array( 'dept' => 'manufacturing', 'dept_label' => 'متالورژی و انتخاب مواد', 'kw' => 'فرهاد نجفی متالورژی علم مواد عملیات حرارتی تریبولوژی سایش فولاد آلیاژی' ),
    'majid-yazdani'      => array( 'dept' => 'automation', 'dept_label' => 'اتوماسیون صنعتی PLC', 'kw' => 'مجید یزدانی plc اتوماسیون زیمنس siemens tia portal s7-1500 موشن کنترل سروموتور' ),
    'elnaz-pirooz'       => array( 'dept' => 'automation', 'dept_label' => 'مکاترونیک و بینایی ماشین', 'kw' => 'الناز پیروز پردازش تصویر بینایی ماشین vision ai cognex سنسور سورتینگ اپتیک' ),
    'hamidreza-shams'    => array( 'dept' => 'automation', 'dept_label' => 'هیدرولیک و پنوماتیک', 'kw' => 'حمیدرضا شمس هیدرولیک پنوماتیک پاورپک منیفولد جک rexroth festo شیر هیدرولیک' ),
    'payam-yeganeh'      => array( 'dept' => 'safety-capex', 'dept_label' => 'ایمنی و انطباق استاندارد', 'kw' => 'پیام یگانه ایمنی ماشین آلات iso 12100 ce marking ارزیابی ریسک' ),
    'keyvan-motamedi'    => array( 'dept' => 'safety-capex', 'dept_label' => 'مهندسی هزینه و CAPEX', 'kw' => 'کیوان معتمدی capex rfq تحلیل اقتصادی roi مهندسی هزینه استعلام خرید قرارداد' ),
);

$members_q = new WP_Query( array(
    'post_type'      => 'team_member',
    'post_status'    => 'publish',
    'posts_per_page' => 24,
    'orderby'        => array( 'menu_order' => 'ASC', 'ID' => 'ASC' ),
) );
?>
<section class="md-tr-sec" style="padding-bottom:44px;border-bottom:1px solid var(--tr-line);">
  <div class="md-container">
    <span class="md-tr-kicker mono" dir="ltr">ENGINEERING DELEGATION // 16 SENIOR SPECIALISTS</span>
    <h1 class="md-tr-hero-title" style="text-align:right;margin:0 0 18px;max-width:none;">اعضای کادر مهندسی ماشین دیزاین</h1>
    <p class="md-tr-hero-lead" style="text-align:right;margin:0 0 28px;max-width:74ch;">
      در پروژه‌های صنعتی واقعی، یک نفر همه‌چیزدان نیست. هر ماشین یا خط تولید تحت هدایت مشترک ۱۶ متخصص شامل طراحان مکانیزم، تحلیل‌گران FEA/CFD، مهندسان ساخت DFMA، متخصصان کنترل کیفیت GD&amp;T، برنامه‌نویسان PLC زیمنس و ممیزان ایمنی و CAPEX اجرا می‌شود.
    </p>

    <div class="md-tr-team-toolbar">
      <div style="display:flex;gap:8px;flex-wrap:wrap;" data-filter-group="#md-team-roster">
        <?php foreach ( $departments as $dk => $dlabel ) : ?>
          <button type="button" class="md-tr-btn md-tr-btn-outline <?php echo 'all' === $dk ? 'is-active' : ''; ?>" data-filter="<?php echo esc_attr( $dk ); ?>"><?php echo esc_html( $dlabel ); ?></button>
        <?php endforeach; ?>
      </div>
      <input type="search" class="md-tr-team-search" data-team-search placeholder="جستجو بر اساس نام، تخصص یا نرم‌افزار (مثلاً SolidWorks, FEA, PLC)..." aria-label="جستجوی اعضای تیم" />
    </div>
  </div>
</section>

<section class="md-tr-sec md-tr-sec-mist">
  <div class="md-container">
    <div class="md-tr-team-grid-4" id="md-team-roster">
      <?php while ( $members_q->have_posts() ) : $members_q->the_post();
        $mid   = get_the_ID();
        $slug  = get_post_field( 'post_name', $mid );
        $meta  = $roster_meta[ $slug ] ?? array( 'dept' => 'mechanism', 'dept_label' => 'تیم مهندسی', 'kw' => get_the_title() );
        $role  = get_post_meta( $mid, '_md_member_role_badge', true ) ?: $meta['dept_label'];
        $sub   = get_post_meta( $mid, '_md_member_subtitle', true ) ?: get_the_excerpt();
        $thumb = has_post_thumbnail( $mid ) ? get_the_post_thumbnail_url( $mid, 'medium_large' ) : get_template_directory_uri() . '/assets/images/team-avatar-placeholder.svg';
        $kw    = $meta['kw'] . ' ' . get_the_title() . ' ' . $role . ' ' . $sub;
      ?>
        <article class="md-tr-team-card md-reveal" data-cats="<?php echo esc_attr( $meta['dept'] ); ?>" data-keywords="<?php echo esc_attr( $kw ); ?>">
          <a href="<?php the_permalink(); ?>" class="md-tr-team-photo">
            <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" />
          </a>
          <div class="md-tr-team-info">
            <span class="md-tr-team-role"><?php echo esc_html( $role ); ?></span>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo esc_html( wp_trim_words( $sub, 16, '...' ) ); ?></p>
          </div>
        </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<section class="md-tr-sec">
  <div class="md-container">
    <div class="md-tr-sec-head">
      <div>
        <span class="md-tr-kicker mono" dir="ltr">MULTI-DISCIPLINARY WORKFLOW // ZERO REWORK</span>
        <h2 class="md-tr-sec-title">چگونه ۱۶ متخصص روی پروژه شما هم‌افزایی می‌کنند؟</h2>
      </div>
    </div>
    <div class="md-tr-process-grid" style="grid-template-columns:repeat(5, minmax(0, 1fr));">
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP 01</span>
        <h3>تحلیل فرآیند و معماری مکانیزم</h3>
        <p>تعیین کانسپت سینماتیکی، انتخاب مکانیزم انتقال قدرت و برآورد اولیه هزینه و بازگشت سرمایه (CAPEX/ROI).</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP 02</span>
        <h3>مدل‌سازی پارامتریک CAD &amp; DFMA</h3>
        <p>طراحی اسمبلی سه‌بعدی در SolidWorks با لحاظ کردن محدودیت‌های خمکاری لیزر، برش و ماشین‌کاری کارگاه‌های داخلی.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP 03</span>
        <h3>شبیه‌سازی تنش، ارتعاش و CFD</h3>
        <p>راستی‌آزمایی قطعات باربر در Ansys، بررسی فرکانس طبیعی، تحلیل حرارتی-سیالاتی و حذف نقاط تمرکز تنش.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP 04</span>
        <h3>تلرانس‌گذاری GD&amp;T و ساخت CNC</h3>
        <p>نقشه‌های اجرایی منطبق بر ASME Y14.5، انتخاب آلیاژ و عملیات حرارتی، و ماشین‌کاری چندمحوره بدون دوباره‌کاری.</p>
      </div>
      <div class="md-tr-process-step">
        <span class="md-tr-step-num">STEP 05</span>
        <h3>اتوماسیون، ایمنی CE و آزمون SAT</h3>
        <p>برنامه‌نویسی PLC زیمنس، کنترل سرووها، ممیزی ریسک بر اساس ISO 12100 و تحویل بدون وقفه در خط کارخانه.</p>
      </div>
    </div>
  </div>
</section>
<?php echo do_shortcode( '[md_rfq_desk]' ); get_footer();
