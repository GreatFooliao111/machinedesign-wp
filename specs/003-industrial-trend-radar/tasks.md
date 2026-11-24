# Implementation Tasks: Industrial Trend Radar & Foresight Knowledge Graph

**Feature Branch**: `003-industrial-trend-radar`  
**Status**: 100% Completed & Production Verified (v4.1-ArgonAudit)  
**Spec Reference**: [specs/003-industrial-trend-radar/spec.md](spec.md)

---

## لیست تسک‌های تکمیل‌شده به ترتیب وابستگی منطقی

- [x] **فاز ۰: طراحی سیستم و ممیزی مدل‌های ریاضی با آرگون (v4.1-ArgonAudit)**
  - [x] تدوین فرمول میرایی نمایی زمان (EWMA Time Decay با $\lambda = 0.05$)
  - [x] تدوین منحنی لاجستیک S با آستانه پسماند (Hysteresis S-Curve) جهت ثبات وضعیت نودها
  - [x] تدوین فرمول همگرایی ساختاری ژاکارد با وزن‌دهی معکوس فرکانس (IDF-Weighted Jaccard)
  - [x] تدوین فرمول آنتروپی نرمال شانون برای تفکیک فناوری‌های افقی از عمودی
  - [x] تدوین پروتکل فشرده‌سازی و حذف ایمن پیوندها (Safe Detach Delete Compaction)
  - [x] دریافت تاییدیه رسمی ماشین به ماشین از مدل آرگون (`v4.1-ArgonAudit`)

- [x] **فاز ۱: لایه لبه ابری کلودفلیر و هوش رقابتی گوگل (Edge Cloud & SERP)**
  - [x] پیاده‌سازی کرسر چرخشی متوازن ۴ فازه در ورکر برای ۱۴۰ بذر صنعتی
  - [x] اعمال شاخص واگرایی کانال (CDI) برای تفکیک خرید سرمایه‌ای از نیاز کارگاهی
  - [x] محدودسازی قطعی ساب‌ریکوئست‌ها به زیر ۴۴ جهت حفظ حاشیه ایمنی سقف ۵۰
  - [x] اتصال به API سرور Serper.dev با کش ۷ روزه (7-Day TTL) و بودجه ۷۰ کوئری روزانه
  - [x] ارسال خودکار ۵ ترند برتر هفته در شنبه‌ها ساعت ۰۸:۳۰ صبح تهران به تلگرام شخصی حسین (`@Hoseinvatandoust`)

- [x] **فاز ۲: استقرار پایگاه دانش Neo4j AuraDB و هستی‌شناسی (Graph Ontology)**
  - [x] راه‌اندازی اینستنس Neo4j AuraDB (`2bc9ca8b`) با دسترسی امن
  - [x] اعمال ۷ کانسترینت یکتا بر روی نودهای Trend, Pillar, MacroDriver, Mechanism, PainPoint, MarketPlayer
  - [x] ایجاد ایندکس تمام‌متن `trend_alias_ft` جهت تجمیع و ادغام خودکار اسامی مترادف

- [x] **فاز ۳: ماژول محاسباتی پایتون و همگام‌سازی سمت سرور (Neo4j Pipeline Engine)**
  - [x] توسعه اسکریپت [setup_schema.py](file:///D:/Antigravity/trend_radar/neo4j_engine/setup_schema.py) جهت راه‌اندازی کانسترینت‌ها
  - [x] توسعه ماژول جامع [sync_radar_to_neo4j.py](file:///D:/Antigravity/trend_radar/neo4j_engine/sync_radar_to_neo4j.py) با ۵ رویه ریاضیاتی سمت سرور
  - [x] تست میدانی و تایید صحت استخراج نودها و اجرای محاسبات Cypher روی سرور ابری

- [x] **فاز ۴: مستندسازی فنی، ارتقای اسکیل‌ها و یکپارچگی اسپک‌کیت (Integration & Docs)**
  - [x] تدوین سند جامع مرجع معماری: [TREND_RADAR_TECHNICAL_SPEC.md](file:///D:/Antigravity/trend_radar/TREND_RADAR_TECHNICAL_SPEC.md)
  - [x] ارتقای اسکیل [machinedesign-trend-radar](file:///C:/Users/Admin/.gemini/config/skills/machinedesign-trend-radar/SKILL.md) به نسخه v4.1 با سوییچ `--sync-neo4j`
  - [x] ارتقای اسکیل [neo4j-graph-navigator](file:///C:/Users/Admin/.gemini/config/skills/neo4j-graph-navigator/SKILL.md) به نسخه v4.1-ArgonAudit
  - [x] همگام‌سازی کامل اسناد اسپک در پوشه `specs/003-industrial-trend-radar/`
