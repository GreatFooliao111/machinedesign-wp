# Antigravity Workspace Rules - MachineDesign.ir Spec-Driven Engine

## Core Operational Directives

1. **Mandatory Constitution Enforcement (Unified Ecosystem Constitution v2.1.0):**
   - Active workspace root: `D:\Antigravity\` | Web root: `C:\xampp\htdocs\machinedesign\`
   - At the beginning of EVERY task across the 3 ecosystem pillars (Web Platform, Industrial Trend Radar, Social Media Engine), read and strictly comply with:
     `D:\Antigravity\.specify\memory\constitution.md` (synchronized with `C:\xampp\htdocs\machinedesign\.specify\memory\constitution.md`)
   - **Absolute Anti-Cliché & Anti-Slop Directive (Gate 0 Mandatory Law):**
     - NEVER build or approve any webpage, UI section, or component without strictly passing Gate 0 (`design-taste-frontend` / tasteskill v2).
     - Strict prohibition of generic AI defaults: NO centered hero headlines with 3 floating icon cards, NO AI purple/blue gradient soup, NO unsupported resting box-shadows, NO 1px outlined box soup, NO emoji UI icons, NO clipped gradient text (`background-clip: text`), and NO meaningless marketing fluff.
     - Mandate the 5 pillars: (1) Subject Inventory (8-12 technical/workshop facts), (2) Idea Statement ("On this page, [unique mechanical asset] becomes [the interactive/visual device]"), (3) One Live Thing (tangible interactive component), (4) Static Scan pass via `npm run taste:lint` / `taste-lint.bat`, and (5) Real-browser multi-viewport verification via `npm run taste:inspect` / `taste-inspect.bat`.
    - NEVER use inline CSS styles (`style="..."`) or arbitrary colors. Strictly use the defined Swiss-German Precision Industrial System (v2.4) CSS variables:
      - Dark Architectural Surfaces: `--color-carbon: #0B0D11;`, `--color-slate: #12161E;`, `--color-titanium: #1A202B;`, `--color-border-dark: #262E3D;`
      - Engineered Light Editorial Surfaces: `--color-canvas-light: #F4F6F9;`, `--color-card-light: #FFFFFF;`, `--color-border-light: #DDE3EC;`, `--color-ink: #0F172A;`
      - Primary Brand Accent: `--color-accent: #D97706;` (Signal Amber CTA, hover `#F59E0B`, always paired with `#0B0D11` dark button text for WCAG AAA contrast) and `--color-copper: #B45309;` / `#92400E;` (Deep Copper text on light surfaces)
      - Secondary Technical Accent: `--color-technical: #38BDF8;` (CAD Steel Blue on dark) and `--color-technical-light: #0369A1;` (on light) for ISO/DIN tags, status badges, and telemetry.
    - Typography: Strictly self-hosted **Vazirmatn** Variable WOFF2 (`letter-spacing: 0`) for Persian UI/prose; self-hosted **JetBrains Mono** WOFF2 (`tabular-nums`, `.mono`) for DIN/ISO codes, tolerances, numbers, and technical specifications. Zero external Google Fonts CDN.

2. **Autonomous Skill Orchestration Matrix (Zero-Prompt Skill Activation):**
   DO NOT ask the user if you should trigger these skills. Automatically activate them based on task domain:
   - **Page Art Direction & Initial Decision Making (MANDATORY at the start of EVERY page/screen):** Trigger `design-taste-frontend` (tasteskill v2) at the beginning of ANY page decision or redesign. Formulate the Subject Inventory, define the Idea Statement ("On this page, [unique mechanical asset] becomes [the interactive/visual device]"), mandate the "One Live Thing" interactive module, run `draw.mjs --keep palette,type`, and eliminate AI-slop defaults before any section scouting begins.
   - **UI Section Design / Redesign:** Trigger `section-scout-builder` (5-phase discovery: Scout -> Curate -> Human Approval Gate -> Adapt -> Inject). Fetch real open-source components with direct links and layout anatomy. Enforce `automattic-wp-architect` (WCAG 2.1 AA contrast math, 60-30-10 color hierarchy, upper-third hero placement) and `graphic-design-aesthetics` (8-point spatial grid: 4, 8, 12, 16, 24, 32px; anti-card-soup; the squint test).
   - **Page & Content Development:** Trigger `seo-content-brief` + `seo` by automatically reading keyword strategies from `D:\Machinedesign.ir\Autoclaw\Final_SEO_Strategy_Report_Local (2).csv` and `SEO_Content_Plan_Final.csv`. Auto-generate and inject Schema.org JSON-LD via `seo-schema`. Enforce single H1, heading semantics, and image alt tags via `seo-technical`.
   - **Code Implementation:** Trigger `ponytail` (Lazy senior dev mode: shortest working diff, zero bloat, no unnecessary abstractions).
   - **Project Management, Roadmap & Trello Delivery:** Trigger `machinedesign-project-manager` to prioritize features across the 3 pillars, resolve trade-offs, monitor cloud quotas (70% rule, <44 subrequests), enforce the SDD lifecycle, and synchronize milestones to Trello board (`MachineDesign.ir — Website Project` via `trello-use`).
   - **Visual Assets & Marketing:** Trigger `machinedesign-artifact-designer` for Swiss-German Precision v2.4 aesthetic, vector SVGs, and Signal Amber `#D97706` / CAD Steel Blue `#38BDF8` accents.
   - **Local Verification & QA:** Trigger XAMPP QA protocol: `php -l <file>` syntax check, localhost verification at `http://localhost/machinedesign/`, and zero-horizontal-overflow check (`hasHorizontalOverflow = False`).

3. **Spec-Driven Development (SDD) Autonomous Workflow:**
   For all new features, sections, interactive modules, or architectural modifications, execute the autonomous end-to-end SDD cycle without waiting for manual command prompts:
   - **Prerequisites Discovery:** Automatically run `check-prerequisites.ps1` to inspect current feature docs.
   - **/speckit-specify**: Create baseline specifications (`specs/<feature>/spec.md`). Auto-populate SEO data from Autoclaw and formulate the Subject Idea Statement + "One Live Thing" via `design-taste-frontend`.
   - **/speckit-plan**: Create architectural implementation plans (`specs/<feature>/plan.md`). Auto-trigger Gate 0 (`design-taste-frontend` direction sheet), section scout, and contrast checks.
   - **/speckit-tasks**: Break down plans into actionable tasks (`specs/<feature>/tasks.md`) with standard 5-phase structure.
   - **/speckit-analyze (Pre-flight Gate)**: Automatically run cross-artifact consistency analysis before implementation to verify 100% compliance with constitution and resolve gaps.
   - **/speckit-implement**: Execute code modifications following verified tasks, test on XAMPP, and verify baseline symmetry and pass `taste:lint`.
   - **/speckit-converge (Post-implementation Verification)**: Automatically assess codebase against spec/plan/tasks to identify and close any unmet requirements before concluding the task.

4. **Resource Economy & 3D Web Performance:**
   - Zero heavy external dependencies (no bulky 3D or CSS frameworks).
   - Mechanisms rendered via GPU-accelerated CSS 3D transforms (`perspective(1100px)`) and Lerp physics (`delta-robot-3d.js`).
   - Videos streamed via off-DOM HTML5 `<canvas>` to eliminate downloader overlay buttons (e.g. IDM).
   - Primary animated transparent format: **Transparent WebM** (VP9, `yuva420p`, CRF 36-38, < 400KB).

5. **Visual Symmetry & Layout Integrity:**
   - 2-Column Image-Text Split: `align-items: stretch` with 100% height object-fit cover.
   - Multi-Column Baseline Symmetry: Symmetrical footer chips with 0.00px baseline deviation.
   - Zero-Overlap Overlay: Maximum one HUD glass badge at the bottom of imagery.

6. **Trade Secret Commercial Doctrine (Zero Technical Disclosure to Competitors):**
   - NEVER disclose internal mechanical blueprints, disassembled views, gear ratios, or reverse-engineering teardowns in public social media content. Titles like "کالبدشکافی مکانیسم" are strictly prohibited.
   - Always frame technical superiority as proprietary trade secrets: "ما سال‌ها روی قلق‌های مهندسی این دستگاه کار کرده‌ایم؛ این رازها و فرمول‌های طلایی منحصراً به خریداران آموزش داده می‌شود تا فرسنگ‌ها از رقبایشان جلوتر باشند."

7. **Social Media Visual Generation Architecture (`image-generator` Single-Grid Master Sheet):**
   - Absolute prohibition of coding carousels/images via Python PIL, HTML/Selenium or canvas. All visual slides must be generated directly by `image-generator` subagent.
   - Canonical Machine Reference Photo: `D:\Machinedesign.ir\machinedesign-social-assets\campaigns\launch-dumpling-series\01_source_material\images\konbrit_150_canonical_reference.jpg`.
   - Single-Grid Pipeline: To save quota and ensure 100% visual and typographic coherence, generate all slides of a carousel in a unified master grid image (e.g. 2x2 grid or horizontal contact sheet), then auto-slice into 1080x1350 slides with Python Pillow.
   - Strict Anti-Hallucination & Negative Prompts: Focused photographic zooms on visible external components (e.g. smooth dough passing through the real stainless rollers or dumplings landing on conveyor) are permitted and encouraged for visual variety, but must NEVER invent fantasy internal gears, extra motors, or alter the canonical geometry. Keep text explanations customer-centric (smooth dough, zero tearing, peace of mind) rather than overly academic or revealing internal trade secrets.
   - Master Sheet Grid Cleanliness: Request seamless, borderless grids without visible dividing lines or white seams. In slicing scripts, trim seam margins to eliminate edge lines.
   - Persian Typographic Precision & Anti-Kashida Rule: When justifying Persian text lines, NEVER use letter elongation (kashida / tatweel / کشیدگی حروف) as it corrupts letter ligatures and creates typos (e.g. garbled repeating letters). Always instruct the image model to achieve line justification solely by adjusting inter-word spacing (word spacing), keeping letter glyphs natural, un-stretched, and un-elongated. Strict negative prompts against duplicate words (e.g. repeated nouns like گندم), typos, garbled letters, or spelling errors.

8. **Geographic Grounding & Anti-Hallucination Location Rule:**
   - Official Office, Showroom & Live Testing Workshop: Strictly **Mashhad, Saman Tower (مشهد، برج سامان)**.
   - NEVER hallucinate Tehran as the workshop or headquarters location. In-person testing with client dough, visits, and consultations happen in Mashhad (Saman Tower).

9. **Canonical Rotary Mold Reference & Anti-Hallucination for Molds:**
   - Ground-Truth Mold Photos:
     - `D:\Machinedesign.ir\machinedesign-social-assets\campaigns\launch-dumpling-series\01_source_material\images\konbrit_150_rotary_molds_mounted.jpg`
     - `D:\Machinedesign.ir\machinedesign-social-assets\campaigns\launch-dumpling-series\01_source_material\images\konbrit_150_rotary_molds_isolated.jpg`
   - Real Machine Molds are **rotary cylindrical drum forming dies (قالب‌های استوانه‌ای روتاری)** made of CNC machined brass/bronze alloy mounted on a horizontal rotating shaft opposite a smooth steel counter-cylinder.
   - STRICT PROHIBITION: NEVER hallucinate flat stamping dies, flat square cookie cutters, waffle plates, or fantasy cookie molds. All molds must strictly match real bronze/brass rotary drum dies.

10. **Authentic Human Operator Representation (Natural, Grounded Realism):**
    - When depicting people working with the machine, feature an **authentic, relatable Iranian female operator / food business entrepreneur** wearing realistic working attire (e.g., a practical apron or workshop food-grade chef coat with hijab/head covering suitable for an Iranian food production environment).
    - Avoid artificial hyper-glamour or clinical sterile glowing lab coats. The scene must feel grounded and authentic ("imperfectly real" working workshop environment), while physical scale, machine proportions, perspective, and angles must be 100% physically accurate.

11. **Production Capacity Realism (No Rigid 10,000/hr Exaggeration):**
    - Production speed is dynamic and scales **between 1,000 to 10,000 pieces per hour**, depending on piece size/weight (larger samosas yield lower hourly counts, small dumplings yield higher) and human staffing throughput.
    - NEVER state a rigid flat "10,000/hr" as a fixed number. Always frame as: `ظرفیت متغیر بین ۱,۰۰۰ تا ۱۰,۰۰۰ عدد در ساعت (متناسب با ابعاد محصول و چیدمان نیروی انسانی)`.

12. **Buffer MCP Social Scheduling & Queue Hygiene Protocol:**
    - Buffer is the primary and definitive tool for scheduling and publishing Instagram carousels, reels, and posts.
    - Lead Channel: Personal Creator Account `@h.vatan.doust` (`6adbbe89778b240e2fa2e674`) for all food processing machinery campaigns (Konbrit KBDM-150 series).
    - Collaborator Tag: Business Account `@machinedesign.ir` (`6adb4d84778b240e2f9c776b`) must be tagged on slide 1 (`userTags: [{"handle": "machinedesign.ir", "x": 0.5, "y": 0.5}]`).
    - Queue Hygiene: Before scheduling newly approved posts, always run `list_posts` and permanently purge unapproved/outdated test drafts with `delete_post` to prevent accidental publication.

13. **Neo4j Aura Knowledge Graph (Futures Studies & Strategic Foresight Engine):**
    - Cloud Database: Neo4j AuraDB (Instance ID: `2bc9ca8b`)
    - Connection URI: `neo4j+s://2bc9ca8b.databases.neo4j.io`
    - Username: `2bc9ca8b`
    - Password: `3aywtn2piG5OTOAXkXkpDR4VtGVWpnHXHYYjsTHXxYs`
    - Secondary Key Identifiers: Client `mdIWO0b0t5cj92ctQf9428S6IFduImqH` | Secret `ohwU-SgrmiChlxr8cHEDS8BbxGbSPl54spN85VWzXo58ky7K8HKolban7un5cPHD`
    - Skill: `neo4j-graph-navigator` (located at `C:\Users\Admin\.gemini\config\skills\neo4j-graph-navigator\`)
    - MCP Integration: Official `neo4j-mcp-server` configured in global `mcp_config.json` with read/write Cypher tools.
    - Purpose: Strategic foresight, cross-impact matrix, futures wheels, weak signals and trend-to-pillar knowledge graph navigation.

14. **Trello Dual-Purpose Kanban & Realistic Scheduling (trello-use):**
    - Target Workspace: `MachineDesign.ir` (`6a2a570709d3dbb1bfc805ca`) | Board: `MachineDesign.ir — Website Project` (`6a2a5dcd1837acd40f66054b`).
    - High-Level AI Tracking: AI task cards must remain high-level milestones (no messy micro-technical jargon) so Hossein gets an instant, clean birds-eye view of project state.
    - Human Action Items: Dedicated surface for Hossein's personal real-world tasks (workshop testing at Saman Tower, client meetings, contract approvals).
    - Realistic Scheduling: Strictly avoid over-compressed deadlines, arbitrary sequencing, or idle gaps. Schedule tasks with human capacity in mind; default due times: 10:00 AM or 4:00 PM Tehran time (`Asia/Tehran` converted to UTC ISO 8601).

