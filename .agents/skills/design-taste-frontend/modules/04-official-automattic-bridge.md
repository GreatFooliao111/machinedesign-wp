# ماژول ۰۴: پل هماهنگی با اسکیل‌های رسمی اتوماتیک (Official Automattic Bridge)

این ماژول قوانین هدایت و اولویت‌بندی اسکیل‌های رسمی وردپرس را مشخص می‌کند تا هیچ تداخلی بین کدهای محلی و ابزارهای ابری شرکت اتوماتیک پیش نیاید.

---

## ۱. فهرست اسکیل‌های رسمی مستقر در آنتی‌گراویتی

سه اسکیل رسمی زیر از پلاگین `wordpress` (متعلق به شرکت Automattic) بر روی سیستم نصب هستند و در اولویت ۱۰۰٪ قرار دارند:

1. **`edit-wordpress-block-content`:**
   * **مسیر فایل:** `C:\Users\Admin\.gemini\config\plugins\wordpress\skills\edit-wordpress-block-content\SKILL.md`
   * **کاربرد:** ایجاد، اعتبارسنجی و ویرایش محتوای بلوک‌های گوتنبرگ با استفاده از توکن‌های تم و بلوک‌های استاندارد هسته.
2. **`manage-wordpress-com-sites`:**
   * **مسیر فایل:** `C:\Users\Admin\.gemini\config\plugins\wordpress\skills\manage-wordpress-com-sites\SKILL.md`
   * **کاربرد:** کاوش، ایجاد، ارتقا، مدیریت افزونه‌ها و بررسی آمار ترافیک سایت‌های وردپرس‌دات‌کام و جت‌پک.
3. **`publish-wordpress-content`:**
   * **مسیر فایل:** `C:\Users\Admin\.gemini\config\plugins\wordpress\skills\publish-wordpress-content\SKILL.md`
   * **کاربرد:** انتشار، پیش‌نویس، زمان‌بندی و مدیریت برگه‌ها، پست‌ها، منوها و بخش‌های مجزای صفحات (In-Place Section Editing).

---

## ۲. اولویت‌بندی و عدم تداخل (Priority & Non-Conflict Rule)

* **قاعده هدایت (Routing Rule):**
  هرگاه درخواستی مستقیماً ناظر بر ویرایش محتوای یک برگه با بلوک‌های گوتنبرگ یا تعامل با قابلیت‌های ابری وردپرس باشد:
  * ابتدا زمینه و قوانین اسکیل رسمی مربوطه (`edit-wordpress-block-content` یا `publish-wordpress-content`) ملاک عمل قرار می‌گیرد.
  * اسکیل والد `wp-platform-architect` صرفاً گاردریل‌های تکمیلی محیط محلی (مانند حفظ استانداردهای رنگ، تقارن 0.00px و جلوگیری از باگ‌های سیستم محلی) را تزریق می‌کند.
* **حفظ اصالت فایل‌ها:**
  نسخه‌های اصلی اسکیل‌های رسمی در پوشه پلاگین `plugins/wordpress/skills/` به هیچ وجه تغییر یا حذف نمی‌شوند.
