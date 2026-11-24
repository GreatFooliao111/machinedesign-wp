# ماژول ۰۵: ابزارهای محیط محلی XAMPP و خط فرمان ویندوز (Local Toolchain & XAMPP Runtime)

این ماژول قوانین فنی و تله‌های اثبات‌شده محیط ویندوز و XAMPP را برای توسعه بدون خطای وبسایت ماشین دیزاین مدون می‌سازد.

---

## ۱. مشخصات محیط توسعه لوکال

* **مسیر ریشه وب:** `C:\xampp\htdocs\machinedesign\`
* **آدرس لوکال:** `http://localhost/machinedesign/`
* **پایگاه داده:** MariaDB با نام دیتابیس `machinedesign_local` (کاربر `root`، بدون رمز).
* **مفسر PHP:** `C:\xampp\php\php.exe` (PHP 8.2.12).
* **کلاینت MySQL:** `C:\xampp\mysql\bin\mysql.exe`.
* **محیط شل:** Git-Bash / MSYS در سیستم عامل ویندوز.

---

## ۲. تله‌های حیاتی و درس‌های تجربی (Critical Pitfalls & Workarounds)

### ۲.۱ قانون طلایی تغییرات فارسی در دیتابیس (The UTF-8mb4 Safe Rule)
> [!CAUTION]
> **هرگز متن یا کوئری حاوی کاراکترهای فارسی را مستقیماً از طریق خط فرمان `mysql.exe` اجرا نکنید.**
> شل خط فرمان ویندوز انکودینگ اتصال را به `latin1` یا `cp1256` تقلیل داده و حروف فارسی را به علامت سوال `????` تبدیل می‌کند که باعث تخریب جبران‌ناپذیر عنوان صفحات و محتوا می‌شود.

* **روش استاندارد و ایمن:**
  همواره یک فایل اسکریپت موقت PHP ایجاد کرده و آن را با PHP CLI اجرا کنید:
  ```php
  <?php
  require_once 'C:/xampp/htdocs/machinedesign/wp-load.php';
  global $wpdb;
  $wpdb->query( "SET NAMES utf8mb4" );
  $wpdb->update(
      $wpdb->posts,
      array( 'post_title' => 'عنوان فارسی اصلاح‌شده' ),
      array( 'ID' => 158 )
  );
  echo "UPDATED\n";
  ```

### ۲.۲ فرمت مسیرها در شل Git-Bash
* برنامه‌های اجرایی بومی ویندوز (`php.exe`، `node.exe`، `mysql.exe`) مسیرهای یونیکسی به سبک `/c/xampp/...` را به عنوان آرگومان ورودی متوجه نمی‌شوند.
* همواره مسیرها را به فرمت ویندوزی با اسلش رو به جلو یا بک‌اسلش پاس دهید:
  `C:/xampp/htdocs/machinedesign/wp-content/themes/hello-elementor/header.php`

### ۲.۳ ساختار آدرس‌دهی صفحات ستون خدمات
* صفحات ستون خدمات ۶ گانه همگی زیرمسیر `/services/<slug>/` هستند (مانند `/services/machine-design/` یا `/services/engineering-mentorship/`).
* صدا زدن مستقیم `/<slug>/` با ریدایرکت 301 مواجه می‌شود؛ لذا در تست‌های اتوماتیک یا پیوندها همواره آدرس کامل `/services/...` را استفاده کنید.

### ۲.۴ دستورالعمل‌های خط فرمان ویندوز و PowerShell (Windows PowerShell Best Practices)
* **جداسازی و زنجیره‌سازی دستورات:** در محیط ویندوز PowerShell، عملگر `&&` در نسخه‌های پیش‌فرض پشتیبانی نمی‌شود و خطای پارسر تولید می‌کند. همواره دستورات را با علامت سمیکالن `;` از یکدیگر تفکیک کنید (`git add -A; git commit -m "..."`).
* **اجرای اسکریپت‌های اسکرچ PHP:** از اجرای کوئری‌ها یا اسکریپت‌های خطی `php -r` در پاورشل به دلیل فرار غیراستاندارد کوتیشن‌ها و بک‌اسلش‌ها خودداری کنید. همواره اسکریپت موقت در یک فایل اسکرچ (مانند `scratch_run.php`) ایجاد کرده، با `C:\xampp\php\php.exe -f <path>` اجرا و بلافاصله آن را حذف کنید.
* **مسیر مفسر PHP:** با توجه به اینکه مفسر PHP ممکن است به متغیر PATH سیستم اضافه نشده باشد، همواره از مسیر مستقیم و مطلق `C:\xampp\php\php.exe` استفاده نمایید.
* **اجرای ابزارهای Node و لینتر:** در صورت قرار داشتن در دایرکتوری خارج از وبسایت، دستورات npm را منحصراً با پرچم `--prefix "C:\xampp\htdocs\machinedesign"` اجرا نمایید تا `package.json` پروژه به درستی شناسایی شود (`npm --prefix "C:\xampp\htdocs\machinedesign" run taste:lint`).

### ۲.۵ معماری سئوی دینامیک و مدیریت اطلاعات تماس مرکزی (Dynamic SEO & Central Contact)
* **مدیریت دینامیک تگ `<title>`:** بهینه‌سازی عناوین صفحات برای نگه‌داشتن زیر ۶۰ کاراکتر منحصراً از طریق پایپ‌لاین فیلترهای وردپرس (`document_title_parts` و `rank_math/frontend/title`) در `functions.php` اعمال می‌شود تا از هاردکد کردن مقادیر در تمپلیت‌ها جلوگیری شود.
* **نقشه سایت بومی وردپرس:** پیوندهای نقشه سایت در فوتر باید همواره با تابع `esc_url( home_url( '/wp-sitemap.xml' ) )` فراخوانی شوند.
* **هلپر مرکزی تماس:** شماره‌های تماس و ایمیل‌ها نباید در تمپلیت‌ها هاردکد شوند، بلکه از طریق تابع `md_get_contact($key, $default)` و تابع نرمال‌سازی پیوند تماس `md_tel_uri($phone)` مدیریت می‌شوند. هرگونه داده آزمایشی یا پیش‌فرض تماس باید با کامنت صریح `/* TODO: REAL_CONTACT */` نشانه‌گذاری گردد.

---

## ۳. دستورات سریع تست و اعتبارسنجی (Execution Cheat Sheet)

```bash
# رفتن به پوشه اصلی وبسایت
cd /c/xampp/htdocs/machinedesign

# بررسی خطای سینتکس یک فایل PHP
/c/xampp/php/php.exe -l "C:/xampp/htdocs/machinedesign/wp-content/themes/hello-elementor/header.php"

# بررسی سینتکس تمام فایل‌های قالب
find wp-content/themes/hello-elementor -name '*.php' | while read f; do /c/xampp/php/php.exe -l "$f" >/dev/null 2>&1 || echo "FAIL: $f"; done

# اجرای لینتر دروازه صفر (Gate 0)
node ./.agents/skills/design-taste-frontend/scripts/lint.mjs wp-content/themes/hello-elementor

# بازرسی زنده رندر و تقارن با مرورگر واقعی
node ./.agents/skills/design-taste-frontend/scripts/inspect.mjs http://localhost/machinedesign/ --widths 1440,768,390

# بررسی تعادل آکولادهای CSS
python -c "s=open('wp-content/themes/hello-elementor/style.css',encoding='utf-8').read(); print(s.count('{'), s.count('}'))"
```
