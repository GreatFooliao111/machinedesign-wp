# ماژول ۰۷: پل ارتباطی و پروتکل نُوامایرا (Novamira MCP Bridge)

این ماژول پروتکل تعامل مستقیم ابزارهای آنتی‌گراویتی با وردپرس را از طریق اندپوینت رسمی Novamira MCP تعریف می‌کند.

---

## ۱. مشخصات اتصال و احراز هویت (Endpoint & Auth)
* **اندپوینت سرویس:** `http://localhost/machinedesign/wp-json/mcp/novamira`
* **نوع پروتکل:** JSON-RPC 2.0 Streaming Protocol
* **اعتبارسنجی:** Basic Auth با استفاده از Application Passwords وردپرس:
  * نام کاربری: `hossein`
  * رمز عبور اپلیکیشن: `ayQgvTHKbDaM47cMbis5nhow`

---

## ۲. چرخه ۴ مرحله‌ای دست‌تکانی و نشست (Handshake Lifecycle)
برای اجرای موفق هر عملیات از طریق Novamira، رعایت این توالی الزامی است:
1. **مقداردهی اولیه (`initialize`):**
   * ارسال متد `initialize` با قابلیت‌های کلاینت (`protocolVersion: "2024-11-05"`).
2. **استخراج شناسه نشست (`Mcp-Session-Id`):**
   * شناسه سشن از هدر پاسخ HTTP (`Mcp-Session-Id`) دریافت و برای کلیه درخواست‌های بعدی در هدر نگهداری می‌شود.
3. **اعلام آمادگی (`notifications/initialized`):**
   * ارسال نوتیفیکیشن تایید سشن به اندپوینت.
4. **فراخوانی ابزارها (`tools/call`):**
   * استفاده از ابزار قدرتمند `mcp-adapter-execute-ability` با نام ابیلیتی `novamira/execute-php`.

---

## ۳. الگوی اجرای کد PHP امن سمت سرور
```json
{
  "jsonrpc": "2.0",
  "id": 1,
  "method": "tools/call",
  "params": {
    "name": "mcp-adapter-execute-ability",
    "arguments": {
      "ability_name": "novamira/execute-php",
      "parameters": {
        "code": "<?php ... return [ 'success' => true ]; ?>"
      }
    }
  }
}
```

---

## ۴. سناریوهای کاربردی مجاز (Sanctioned Operations)
* نصب، فعال‌سازی و تنظیم افزونه‌ها مستقیماً در محیط وردپرس.
* خواندن و ثبت تنظیمات در `wp_options` با سازگاری کامل UTF-8.
* اجرای توابع درونی وردپرس برای ممیزی سلامت سیستم، بررسی CPTها و مدیریت بلوک‌ها.
