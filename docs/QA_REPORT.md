# MachineDesign.ir — QA & Deployment Verification Report

- **Date:** 2026-11-27
- **Environment:** XAMPP (`http://localhost/machinedesign`)
- **Pre-Deployment DB Backup:** `C:\xampp\htdocs\machinedesign_backup_pre_v3.sql` (`581,945` bytes, external to git repo)
- **PHP Lint (`php -l`):** [x] 0 syntax errors across `src/plugins/machinedesign-core` (6 PHP files) and `src/themes/machinedesign-trumpf` (16 PHP files) via `scripts/setup-xampp.ps1`
- **Smoke Test (`python scripts/smoke-test.py http://localhost/machinedesign`):** [x] All 8 routes returned `PASS [200]` with RTL active, 0 Tailwind CDN, and 0 PHP fatals:
  - `PASS [200] /`
  - `PASS [200] /services/`
  - `PASS [200] /services/machine-design/`
  - `PASS [200] /projects/`
  - `PASS [200] /insights/`
  - `PASS [200] /about/`
  - `PASS [200] /contact/`
  - `PASS [200] /?s=conveyor`
- **Brownfield Preservation & Activation:** [x] Active plugins verified (`novamira/novamira.php`, `seo-by-rank-math/rank-math.php`, `machinedesign-rfq-manager/machinedesign-rfq-manager.php`, `machinedesign-core/machinedesign-core.php`), active theme set to `machinedesign-trumpf`, page templates mapped (`services`, `projects`, `insights`, `about`, `contact`, and all 6 service pillar pages -> `page-service-pillar.php`), and rewrite rules flushed (`REWRITE_RULES_FLUSHED=OK`).
- **Visual QA:** [ ] Pending final browser inspection of pure white TRUMPF header + Mega-Menu + Floating Rail + 4-Panel Hero + Bento Mosaic + Mid-Page 3D Delta Lab by user
