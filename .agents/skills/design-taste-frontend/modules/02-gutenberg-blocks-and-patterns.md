# ماژول ۰۲: مهندسی بلوک‌ها، الگوها و قالب‌های گوتنبرگ (Gutenberg Blocks & Patterns)

> **خاستگاه:** تلفیق و بهینه‌سازی اسکیل‌های `wp-block-development`، `wp-block-themes` و `wp-patterns`.

---

## ۱. اصول معماری بلوک‌های تمیز (Zero Raw HTML Rule)

* **منع مطلق `<!-- wp:html -->` در محتوا:**
  * در برگه‌ها و الگوهای وردپرس هرگز از بلوک خام HTML استفاده نکنید. این بلوک‌ها در ویرایشگر سایت کدر و غیرقابل ویرایش می‌شوند.
  * همواره ساختار را به بلوک‌های معنایی استاندارد هسته وردپرس تجزیه کنید:
    * کانتینرها و سکشن‌ها: `<!-- wp:group {"layout":{"type":"constrained"}} -->`
    * ستون‌بندی‌ها: `<!-- wp:columns -->` و `<!-- wp:column -->`
    * تیترها و متون: `<!-- wp:heading -->` و `<!-- wp:paragraph -->`
    * دکمه‌ها: `<!-- wp:buttons -->` و `<!-- wp:button -->`
  * کلاس‌های کمکی و استایل‌های سفارشی را از طریق خصوصیت `className` به بلوک‌ها متصل کنید.

---

## ۲. توکن‌های تم و هماهنگی با `theme.json`

* **پرهیز از مقادیر هاردکدشده رنگ و فاصله:**
  * رنگ‌ها را به توکن‌های پالت متصل کنید: `has-accent-color`, `has-primary-background-color`.
  * فاصله‌ها را با مقادیر گام‌به‌گام استاندارد `var(--wp--preset--spacing--...)` کنترل کنید.
* **ثبت الگوها (Patterns Registration):**
  * الگوهای آماده برای سکشن‌های پرتکرار (مانند جدول مشخصات فنی، کارت‌های خدمات ۶ گانه، بردهای دیاگرام HUD) باید در فایل‌های PHP با سربرگ استاندارد ثبت شوند:
    ```php
    <?php
    /**
     * Title: Machinery Inspection HUD Board
     * Slug: machinedesign/inspection-hud-board
     * Categories: featured, services
     */
    ?>
    ```

---

## ۳. تمپلیت‌ها و تمپلیت پارت‌ها (Templates & Template Parts)

* **سلسله‌مراتب تمپلیت‌ها در قالب `machinedesign-theme`:**
  * صفحه اصلی: `front-page.php`
  * صفحات ستون خدمات: `page-*.php` (در مسیر `/services/<slug>/`)
  * سربرگ و پابرگ سراسری: `header.php` و `footer.php`
  * اجزای مشترک قابل استفاده مجدد: در پوشه `template-parts/` سازمان‌دهی شوند.
* **ثبت و مدیریت صفحات فاقد تمپلیت:**
  * صفحه پروژه‌ها (برگه ۱۰): نیازمند تمپلیت اختصاصی `page-projects.php`.
  * صفحه مقالات (برگه ۱۳۰): نیازمند تمپلیت `page-insights.php` یا `archive.php`.
  * صفحات حقوقی: تمپلیت‌های سبک برای `/nda-protocol/` و `/privacy-policy/`.
