---
name: machinedesign-wp-architect
description: Mechanical deployment and QA execution skill for the pre-built MachineDesign TRUMPF v3.0 Zero-Static WordPress starter kit on Windows XAMPP.
---
# machinedesign-wp-architect

Executes deterministic local deployment, brownfield activation, and smoke-test verification without altering the pre-designed TRUMPF UI or rewriting core plugin/theme files.

## Rules
1. Never rewrite or restyle `src/themes/machinedesign-trumpf/` or `src/plugins/machinedesign-core/` unless fixing a verified `php -l` error.
2. Never delete `wp-config.php`, `wp-content/uploads/`, `machinedesign-rfq-manager`, `seo-by-rank-math`, or `novamira`.
3. Never inject Tailwind Play CDN into WordPress templates.
4. Always run `scripts/setup-xampp.ps1` and `python scripts/smoke-test.py` and record results in `docs/QA_REPORT.md`.
