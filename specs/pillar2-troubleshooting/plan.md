# طرح فنی پیاده‌سازی لندینگ‌پیج ستون دوم: مشاوره فنی و عیب‌یابی خطوط تولید (Plan)

## ۱. ساختار فنی و فایل‌های هدف (Architecture & Target Files)
- **فایل قالب وردپرس:** `page-factory-troubleshooting.php` در مسیر پوسته فعال `wp-content/themes/hello-elementor/`.
- **اختصاص قالب به برگه:** انتساب خودکار به برگه با شناسه `ID: 6` و نامک `factory-troubleshooting`.
- **استایل‌ها:** افزودن سکشن ۱۹ در فایل [style.css](file:///C:/xampp/htdocs/machinedesign/wp-content/themes/hello-elementor/style.css) با استفاده از کلاس‌های مدرن متناسب با دیزاین‌سیستم فعال Cyber-Mechanical Dark (`#0b0f19`, `#121824`, `#8ce70c`).
- **اسکریپت و انیمیشن:** استفاده یکپارچه از موتور آماده [delta-robot-3d.js](file:///C:/xampp/htdocs/machinedesign/wp-content/themes/hello-elementor/assets/js/delta-robot-3d.js) بدون نیاز به افزودن کدهای JS حجیم.

---

## ۲. رعایت استانداردهای معماری (Compliance & Standards)
- **پرهیز از افزونه‌های سنگین (Ponytail Doctrine):** پیاده‌سازی ۱۰۰٪ کدهای استاندارد PHP/HTML5/CSS بدون سربار، با بالاترین سرعت لود (زیر ۱ ثانیه).
- **تقارن بصری دوستونه (2-Column Symmetry):** تراز ارتفاعی دقیق ستون متن و ستون استیج سه‌بعدی در هیرو، تگ‌های منظم و فاقد هرگونه همپوشانی (Zero-Overlap).
- **هویت بصری یکپارچه:** فونت وزیرمتن برای متون فارسی، فونت مونواسپیس برای کدهای فنی، رنگ تاکیدی سبز نئون سازمانی (`#8ce70c`) و کارت‌های شیشه‌ای تیره با حاشیه‌های متالیک.

---

## ۳. مراحل اجرایی (Execution Roadmap)
1. **ایجاد قالب اختصاصی:** پیاده‌سازی [page-factory-troubleshooting.php](file:///C:/xampp/htdocs/machinedesign/wp-content/themes/hello-elementor/page-factory-troubleshooting.php) با ۵ سکشن تخصصی.
2. **افزودن استایل‌های اختصاصی در CSS:** افزودن کلاس‌های گریدهای ۴ گانه، بنر اورژانسی خط تولید و لیست اسناد تحویلی.
3. **تست لوکال و ارزیابی ریسپانسیو:** اجرای تست‌های سرور و مرورگر headless با ابعاد مختلف دسکتاپ و موبایل.
4. **عکس‌برداری و مستندسازی:** ثبت اسکرین‌شات از سکشن‌های صفحه جهت بررسی و تایید کاربر.
5. **به‌روزرسانی پکیج انتشار cPanel:** زیپ کردن مجدد قالب در پکیج نهایی هاست.
