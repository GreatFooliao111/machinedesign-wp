# طرح فنی و معماری پیاده‌سازی ستون ۳ (Pillar 3 Technical Plan)

## ۱. فایل‌ها و ماژول‌های تحت تاثیر
1. **تمپلیت جدید PHP:**
   - مسیر: `wp-content/themes/machinedesign-theme/page-rd-prototyping.php`
   - الگوی نام‌گذاری تمپلیت: `Template Name: Pillar 3: R&D & Prototyping`
2. **استایل‌های اختصاصی در `style.css`:**
   - ادغام کلاس‌های اختصاصی ستون سوم (نظیر کارت‌های DFMEA، بج‌های هایلایت R&D، کارت‌های متدولوژی پروتوتایپ).
   - استفاده حداکثری از استایل‌های مشترک ستون‌ها (`.pillar-hero-wrap`, `.services-stats-strip`, `.services-intro-grid`, `.workflow-grid-4`) جهت رعایت فلسفه سادگی (Ponytail).
3. **پایگاه داده وردپرس:**
   - تنظیم فیلد متای `_wp_page_template` برای برگه شناسه `124` به مقدار `page-rd-prototyping.php`.
4. **پکیج استقرار هاست:**
   - به‌روزرسانی `D:\Machinedesign.ir\cpanel-deploy\machinedesign-theme-deploy.zip`.

---

## ۲. توالی اجرایی فازها
- **گام ۱:** ایجاد تمپلیت `page-rd-prototyping.php` با ساختار کامل ۷ سکشنی استاندارد.
- **گام ۲:** تنظیم قالب برگه در وردپرس برای برگه `rd-prototyping` (ID: 124).
- **گام ۳:** تکمیل و بررسی استایل‌های مربوطه در `style.css`.
- **گام ۴:** تست در مرورگر Headless با Selenium، سنجش تراز عمودی، بررسی حذف تگ‌های ویدیو از DOM و ثبت اسکرین‌شات از تمام سکشن‌ها.
- **گام ۵:** بسته‌بندی فایل فشرده تمپلیت برای استقرار در cPanel.
