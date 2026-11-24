# Implementation Plan: Contact & RFQ Hub (`page-contact.php`)

**Branch**: `001-contact-and-rfq-hub` | **Date**: 2026-10-27 | **Spec**: [specs/001-contact-and-rfq-hub/spec.md](spec.md)  
**Input**: Feature specification from `specs/001-contact-and-rfq-hub/spec.md`

---

## ۱. خلاصه اجرایی (Summary)

هدف این طرح معماری، پیاده‌سازی صفحه مستقل و صنعتی **«مرکز جامع تماس و استعلام مهندسی» (`page-contact.php`)** در پوسته فعال وردپرس (`hello-elementor`) است. این صفحه به عنوان هسته تبدیل ترافیک حاصل از ۶ ستون خدمات عمل کرده و شامل هیرو بنر مهندسی، دو ستون کاملاً متقارن (ستون اطلاعات کارگاه/تلفن‌ها/کانال‌های پیام‌رسان و ستون فرم استعلام هوشمند RFQ با صدور کد رهگیری)، پروتکل محرمانگی (NDA) و کدهای ساختاریافته Schema.org خواهد بود.

---

## ۲. کانتکست فنی (Technical Context)

- **استک فنی:** PHP 8.x + WordPress Core Theme API (بدون صفحه‌ساز یا فریمورک اضافی).
- **استایل‌ها:** CSS بومی متکی بر توکن‌های ریشه `:root` در `style.css` (پالت Cyber-Mechanical Dark با رنگ تاکیدی `#8ce70c`).
- **اسکریپت و تعامل:** جاوااسکریپت بومی و سبک متصل به اکشن‌های ایجکس وردپرس (`wp_ajax_machinedesign_rfq_submit`) و افزونه `machinedesign-rfq-manager`.
- **معماری سئو:** تزریق JSON-LD ساختاریافته Schema.org (`ContactPage`, `Organization`, `LocalBusiness`) در هدر تمپلیت.
- **محدودیت پرفورمنس و منابع:** حجم کل کدهای افزوده زیر ۶۰ کیلوبایت؛ زمان پاسخ ایجکس زیر ۵۰۰ میلی‌ثانیه؛ تست عدم سرریز افقی (`hasHorizontalOverflow = False`).

---

## ۳. کنترل گیت‌های قانون اساسی و اسکیل‌های خودکار (Constitution & Autonomous Skills Check)

### ۱. گیت پویش سکشن‌های UI (`section-scout-builder`)
- [x] پویش ۳ گزینه واقعی، مدرن و متن‌باز با لینک مستقیم از دایرکتوری‌های معتبر (TailwindFlex, Preline UI, HyperUI).
- [ ] **ایستگاه تایید انسانی (Human Approval Gate):** ارائه گزینه‌ها به کاربر و توقف قبل از کدنویسی نهایی.
- [x] ترنسپایل تمیز به ساختار Semantic PHP/CSS بدون بلوک‌های ناخوانا (`core/html`).

### ۲. گیت تباین و زیباییشناسی (`automattic-wp-architect` + `graphic-design-aesthetics`)
- [x] تایید ریاضی تباین رنگی WCAG 2.1 AA (رنگ نئون `#8ce70c` روی اسلیت تیره `#121824` برابر با نسبت خارق‌العاده **10.8:1**؛ عدم استفاده از متن نئون روی زمینه سفید).
- [x] سلسله‌مراتب رنگی ۶۰-۳۰-۱۰ (۶۰٪ زمینه تیره `#121824`، ۳۰٪ کادرها و کارت‌های میانی `#1c2536`، ۱۰٪ سبز نئون سازمانی `#8ce70c`).
- [x] شبکه ریتم فضایی ۸ پیکسلی (پدینگ‌ها و فواصل کاملاً مضرب ۴ یا ۸ پیکسل: `8px, 16px, 24px, 32px`).
- [x] ضد سوپ‌کارت (Anti-Card-Soup) و تست نیمه‌بسته چشم (The Squint Test): کانون بصری مسلط روی دکمه ثبت استعلام و چیپ NDA.
- [x] تقارن خط مبنای عمودی ستون‌ها (Vertical Baseline Symmetry) با خطای ۰.۰۰ پیکسل بین ستون تماس و ستون فرم.

### ۳. گیت سئو و داده‌های ساختاریافته (`seo` + `seo-schema`)
- [x] کلمات کلیدی، عنوان H1 و H2ها منطبق با `D:\Machinedesign.ir\Autoclaw\Final_SEO_Strategy_Report_Local (2).csv`.
- [x] اسکیماهای JSON-LD آماده تزریق: `ContactPage`, `Organization`, `LocalBusiness` با متادیتاهای مهندس وطن‌دوست.
- [x] تضمین تنها ۱ تگ H1 و متادیسکریپشن استاندارد.

### ۴. گیت اقتصاد منابع و سادگی (`ponytail`)
- [x] کمترین تغییر کارآمد؛ استفاده ۱۰۰٪ از استایل‌های موجود در `style.css` و متغیرهای سازمانی بدون لود کتابخانه‌های جدید.

### ۵. گیت کنترل کیفیت محیط لوکال XAMPP
- [x] اعتبارسنجی سینتکس با `C:\xampp\php\php.exe -l`.
- [x] تست عملیاتی در `http://localhost/machinedesign/contact/`.
- [x] کنترل عدم سرریز افقی اسکرول در تمام رزولوشن‌ها.

---

## ۴. گزینه‌های پویش‌شده رابط کاربری (Scouted UI Options - Section Scout Builder)

بر اساس پویش در دایرکتوری‌های متن‌باز کامپوننت‌ها، ۳ الگوی برتر برای چیدمان صفحه تماس و فرم استعلام انتخاب شده‌اند:

### گزینه ۱: الگوی تفکیک کارت‌های فنی و فرم متقارن (Preline UI Split Cards & Form)
- **منبع و لینک مستقیم:** [Preline UI - Contact Pages / Split Layout](https://preline.co/)
- **آناتومی چیدمان واقعی:** 
  - ستون راست: ۳ کارت مستقل با مرزهای نئونی ضعیف شامل: ۱. کارت تلفن مستقیم و موقعیت کارگاه؛ ۲. کارت ارتباط آنی در تلگرام و بله با لینک مستقیم؛ ۳. چیپ خط‌چین تضمین محرمانگی NDA.
  - ستون چپ: کانتینر یکپارچه فرم مهندسی RFQ شامل فیلدهای شناور (نام، تلفن، دراپ‌داون ۶ ستون خدمات، باکس توضیحات، دکمه اکشن نئونی و پیام موفقیت ایجکس).
- **برنامه بومی‌سازی ماشین دیزاین:** زمینه اسلیت `#121824`، کادرها با بردر نئونی `rgba(140, 231, 12, 0.25)`، گوشه‌های ۲۰ پیکسلی، تایپوگرافی وزیرمتن و تراز خط مبنا با انحراف ۰.۰۰ پیکسل.

### گزینه ۲: الگوی گلس‌مورفیک تله‌متری مهندسی (TailwindFlex Glassmorphic Telemetry)
- **منبع و لینک مستقیم:** [TailwindFlex - Modern Two-Column Glassmorphic Contact](https://tailwindflex.com/)
- **آناتومی چیدمان واقعی:**
  - ساختار ۵۰/۵۰ عمیق. ستون راست دارای والپیپر مات گرید CAD و بج شیشه‌ای وضعیت پاسخ‌دهی (SLA ۲۴ ساعته) همراه با پین وکتور نقشه و اطلاعات تماس مستقیم.
  - ستون چپ: فرم با استایل شیشه‌ای تیره (`backdrop-filter: blur(12px)`)، فیلدهای ورودی مینیمال با بردر نئونی هنگام فوکوس، و تگ‌های بیضی برای انتخاب سریع نوع پروژه.
- **برنامه بومی‌سازی ماشین دیزاین:** ترنسپایل کامل به CSS بومی، سازگاری کامل با RTL، حذف افکت‌های سنگین جهت پرفورمنس حداکثری.

### گزینه ۳: الگوی متمرکز صنعتی تایپوگرافی با دکمه‌های رادیویی ستون‌ها (HyperUI High-Craft Inquiry)
- **منبع و لینک مستقیم:** [HyperUI - Marketing Contact Forms](https://www.hyperui.dev/components/marketing/contact-forms)
- **آناتومی چیدمان واقعی:**
  - تمرکز بالا بر تایپوگرافی مهندسی. در بالای فرم، انتخاب ستون خدمت از طریق دکمه‌های دکمه‌ای (Pill Radios) ۶ گانه صورت می‌گیرد. ستون کناری شامل خلاصه بیوگرافی مهندس حسین وطن‌دوست به عنوان پشتیبان فنی قراردادها و تگ‌های شبکه‌های اجتماعی است.
- **برنامه بومی‌سازی ماشین دیزاین:** انطباق با دکمه‌های `.btn-accent`، اتصال به هندلر `main.js` و ایجاد چیپ‌های متقارن کف ستون‌ها.

---

## ۵. نقشه تغییرات فایل‌ها (Proposed File Changes)

- **[NEW]** `C:\xampp\htdocs\machinedesign\wp-content\themes\hello-elementor\page-contact.php`  
- **[MODIFY]** `C:\xampp\htdocs\machinedesign\wp-content\themes\hello-elementor\style.css`  
- **[VERIFY]** `C:\xampp\htdocs\machinedesign\wp-content\themes\hello-elementor\assets\js\main.js`  

---

## ۶. نقشه داده‌های ساختاریافته (Schema.org JSON-LD Specification)

```json
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ContactPage",
      "@id": "https://machinedesign.ir/contact/#webpage",
      "url": "https://machinedesign.ir/contact/",
      "name": "تماس با ماشین دیزاین: استعلام پروژه و مشاوره فنی صنعتی",
      "description": "ثبت استعلام هوشمند طراحی ماشین‌آلات، مهندسی معکوس و مشاوره رفع توقف خطوط تولید با تضمین محرمانگی NDA.",
      "inLanguage": "fa-IR"
    },
    {
      "@type": "Organization",
      "@id": "https://machinedesign.ir/#organization",
      "name": "ماشین دیزاین | MachineDesign.ir",
      "url": "https://machinedesign.ir",
      "founder": {
        "@type": "Person",
        "name": "حسین وطن‌دوست",
        "jobTitle": "مهندس ارشد طراح ماشین‌آلات و مکانیزم‌های صنعتی"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "technical support and RFQ inquiry",
        "email": "hosseinvatandoust699@gmail.com",
        "availableLanguage": ["Persian", "English"]
      }
    }
  ]
}
```

---

## ۷. برنامه اعتبارسنجی و تست محلی (Verification Plan)

1. **بررسی سینتکس PHP:**
   ```powershell
   & "C:\xampp\php\php.exe" -l "C:\xampp\htdocs\machinedesign\wp-content\themes\hello-elementor\page-contact.php"
   ```
2. **بررسی لود در مرورگر و پاسخ سرور محلی:**
   ```powershell
   Invoke-WebRequest -Uri "http://localhost/machinedesign/contact/" -UseBasicParsing
   ```
3. **تست تقارن بصری و عدم سرریز افقی.**
