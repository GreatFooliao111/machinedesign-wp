# ماژول ۰۳: افزونه‌ها، روت‌های REST API و بهینه‌سازی دیتابیس (Backend, REST & Performance)

> **خاستگاه:** تلفیق و بهینه‌سازی اسکیل‌های `wp-rest-api`، `wp-plugin-development`، `wp-plugin-directory-guidelines` و `wp-performance`.

---

## ۱. توسعه روت‌های اختصاصی REST API

* **نحوه ثبت روت استاندارد:**
  تمامی اندپوینت‌های سفارشی سایت (نظیر ارسال فرم استعلام RFQ یا جستجوی سریع پروژه‌ها) باید از طریق هوک `rest_api_init` ثبت شوند:
  ```php
  add_action( 'rest_api_init', function () {
      register_rest_route( 'machinedesign/v1', '/rfq-submit', array(
          'methods'             => 'POST',
          'callback'            => 'md_handle_rfq_submission',
          'permission_callback' => 'md_verify_rfq_permission',
          'args'                => array(
              'full_name' => array(
                  'required'          => true,
                  'validate_callback' => function( $param ) { return is_string( $param ) && !empty( $param ); },
                  'sanitize_callback' => 'sanitize_text_field',
              ),
              'phone' => array(
                  'required'          => true,
                  'sanitize_callback' => 'sanitize_text_field',
              ),
          ),
      ) );
  } );
  ```
* **مجوزها و نانس‌ها:**
  * هیچ روت POST نباید بدون اعتبارسنجی نانس یا توکن CSRF باز رها شود.
  * برای درخواست‌های عمومی بدون لاگین (مانند ثبت استعلام از طرف بازدیدکننده)، استفاده از `wp_verify_nonce` و محدودسازی نرخ درخواست (Rate Limiting) الزامی است.

---

## ۲. افزونه‌های فعال و اختصاصی

* **افزونه فرم RFQ (`machinedesign-rfq-manager`):**
  * مدیریت فرم استعلام قیمت چندمرحله‌ای، صدور کد رهگیری HUD و ذخیره در جدول اختصاصی دیتابیس.
* **افزونه اتصال ریموت (`novamira`):**
  * ایجاد اندپوینت `/wp-json/mcp/novamira` جهت تعامل ابزارها با ویرایشگر وردپرس.

---

## ۳. بهینه‌سازی دیتابیس و عملکرد (Performance Guidelines)

* **پرهیز از N+1 Queries:** در صفحات لیست پروژه‌ها یا اعضای تیم، همواره از یک کوئری تجمیعی `WP_Query` استفاده کنید و فراداده‌ها (Post Meta) را یکجا لود نمایید.
* **گزینه‌های خودکارلود (Autoloaded Options):**
  * تنظیمات حجیم یا کدهای HTML بزرگ را در جدول `wp_options` با `autoload = 'yes'` ذخیره نکنید.
* **پاکسازی ترنزینت‌های منقضی:**
  * کش‌های موقت باید تاریخ انقضای معین داشته باشند (`set_transient( ..., ..., 12 * HOUR_IN_SECONDS )`).
