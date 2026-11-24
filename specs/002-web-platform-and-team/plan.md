# Architecture Implementation Plan: Web Engineering Platform & Team Roster

**Feature Branch**: `002-web-platform-and-team`  
**Status**: Completed & Verified  
**Constitution Ref**: Article 2 (Gate 0 Anti-Slop & Anti-Cliché Law) & Article 3 (Web Platform)

---

## ۱. ممیزی دروازه ضد کلیشه (Gate 0 Anti-Slop Audit)

- [x] **Subject Inventory**: استخراج ۱۶ متخصص ارشد، سوابق واقعی در صنایع ماشین‌سازی، استانداردهای DIN/ISO، و محل کارگاه در برج سامان مشهد.
- [x] **Idea Statement**: گالری اعزام به هانوفر آلمان تبدیل به کنسول تعاملی فیلتر دپارتمان‌ها و پورتفولیوی چندرشته‌ای مهندسی می‌شود.
- [x] **One Live Thing**: کنسول فیلتر آنی دپارتمان‌ها + موتور جستجوی کلاینت‌ساید چندمعیاره + افکت چرخش ۳ بعدی ماوس بدون لود مجدد صفحه.
- [x] **Zero AI Clichés**: حذف کارت‌های آیکون‌دار ۳ تایی ژنریک، عدم استفاده از گرادیان‌های کلیشه‌ای بنفش/آبی، پرهیز از سایه‌های معلق ناموجه و کادربندی‌های تو در تو.
- [x] **Taste Verification**: بررسی استاتیک با `npm run taste:lint` و بازبینی چندعرضی با `npm run taste:inspect`.

---

## ۲. معماری فایل‌ها و ساختار کد

```text
wp-content/themes/hello-elementor/
├── page-team.php              # تمپلیت اختصاصی صفحه تیم با ساختار بنتو و فیلتر کلاینت‌ساید
├── single-team_member.php     # تمپلیت تک‌پست پورتفولیوی اختصاصی هر مهندس
├── style.css                  # استایل‌های متناوب (سکشن‌های زوج روشن / فرد تیره)
└── functions.php              # توابع md_get_team_member_profile_data و منوی ناوبری
```

---

## ۳. توکن‌های طراحی و پالت رنگی متناوب

- **سکشن‌های ۱ و ۳ (تیره):**
  - پس‌زمینه: `#0a0e17` و `#0d121c`
  - کارت‌ها: `#121824`
  - رنگ تاکیدی: `#8ce70c`
  - متن: `#f8fafc` و `#94a3b8`
- **سکشن‌های ۲ و ۴ (روشن):**
  - پس‌زمینه: `#f8fafc`
  - کارت‌ها: `#ffffff` با بوردر `#e2e8f0` و هاور `#8ce70c`
  - تیترها: `#0f172a`
  - تگ‌های دپارتمان: `#15803d` روی پس‌زمینه لیمویی محو `rgba(140, 231, 12, 0.12)`
  - دکمه‌ها: سرمه‌ای صنعتی `#0f172a` با متن نئون

---

## ۴. پایپ‌لاین انتشار و همگام‌سازی

- فایل‌های قالب فشرده در `D:\Machinedesign.ir\cpanel-deploy\hello-elementor-machinedesign.zip`.
- دامپ دیتابیس MySQL شامل آیتم‌های منوی جدید در `D:\Machinedesign.ir\cpanel-deploy\machinedesign_wp.sql`.
