# MachineDesign.ir — QA & Deployment Verification Report

- **Date:** 2026-11-27
- **Environment:** XAMPP (`http://localhost/machinedesign`)
- **PHP Lint (`php -l`):** [x] 0 syntax errors across `machinedesign-core` (6 files) and `machinedesign-trumpf` (16 files) via `scripts\setup-xampp.ps1`
- **Smoke Test (`python scripts/smoke-test.py`):** [x] All 8 HTTP 200, RTL (`dir="rtl"`), Zero-Tailwind-CDN, and Zero-PHP-Fatal checks passed
- **Brownfield Preservation:** [x] Existing database preserved (external backup at `C:\xampp\htdocs\machinedesign_backup_pre_v3.sql`, 954,934 bytes); verified `pages=20`, `posts=5`, `project=8`, `team_member=16`; active plugins preserved (`machinedesign-core/machinedesign-core.php`, `machinedesign-rfq-manager/machinedesign-rfq-manager.php`, `novamira/novamira.php`, `seo-by-rank-math/rank-math.php`); active theme switched to `machinedesign-trumpf` with rewrite rules flushed and page templates assigned.
- **Visual QA:** [ ] Automated HTTP/RTL/Zero-Static smoke tests passed (`PASS [200]` on all 8 routes); interactive browser visual inspection pending manual review on `http://localhost/machinedesign/`.

## Smoke Test Output (`python scripts/smoke-test.py http://localhost/machinedesign`)

```text
PASS [200] /
PASS [200] /services/
PASS [200] /services/machine-design/
PASS [200] /projects/
PASS [200] /insights/
PASS [200] /about/
PASS [200] /contact/
PASS [200] /?s=conveyor
```

## Activation & Template Assignment Summary

- **Theme:** `template=machinedesign-trumpf`, `stylesheet=machinedesign-trumpf`
- **Core Templates Assigned:** `/services/` -> `page-services.php`, `/projects/` -> `page-projects.php`, `/insights/` -> `page-insights.php`, `/about/` -> `page-about.php`, `/contact/` -> `page-contact.php`
- **Service Pillar Pages Assigned (`page-service-pillar.php`):** `/services/machine-design/`, `/services/factory-troubleshooting/`, `/services/rd-prototyping/`, `/services/engineering-mentorship/`, `/services/corporate-training/`, `/services/machinery-inspection/`, `/services/fea-analysis/`, `/services/mold-design/`, `/services/cad-cam-modeling/`, `/services/reverse-engineering/`
