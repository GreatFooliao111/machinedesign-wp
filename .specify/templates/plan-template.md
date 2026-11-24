# Implementation Plan: [FEATURE]

**Branch**: `[###-feature-name]` | **Date**: [DATE] | **Spec**: [link]

**Input**: Feature specification from `/specs/[###-feature-name]/spec.md`

**Note**: This template is filled in by the `/speckit-plan` command; its definition describes the execution workflow.

## Summary

[Extract from feature spec: primary requirement + technical approach from research]

## Technical Context

<!--
  ACTION REQUIRED: Replace the content in this section with the technical details
  for the project. The structure here is presented in advisory capacity to guide
  the iteration process.
-->

**Language/Version**: [e.g., Python 3.11, Swift 5.9, Rust 1.75 or NEEDS CLARIFICATION]

**Primary Dependencies**: [e.g., FastAPI, UIKit, LLVM or NEEDS CLARIFICATION]

**Storage**: [if applicable, e.g., PostgreSQL, CoreData, files or N/A]

**Testing**: [e.g., pytest, XCTest, cargo test or NEEDS CLARIFICATION]

**Target Platform**: [e.g., Linux server, iOS 15+, WASM or NEEDS CLARIFICATION]

**Project Type**: [e.g., library/cli/web-service/mobile-app/compiler/desktop-app or NEEDS CLARIFICATION]

**Performance Goals**: [domain-specific, e.g., 1000 req/s, 10k lines/sec, 60 fps or NEEDS CLARIFICATION]

**Constraints**: [domain-specific, e.g., <200ms p95, <100MB memory, offline-capable or NEEDS CLARIFICATION]

**Scale/Scope**: [domain-specific, e.g., 10k users, 1M LOC, 50 screens or NEEDS CLARIFICATION]

## Constitution & Autonomous Skills Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

### 0. Front-End Art Direction & Subject Idea Gate (design-taste-frontend - MANDATORY STARTING GATE)
- [ ] **Mandatory Initial Invocation**: Triggered at the beginning of EVERY new page decision or major redesign.
- [ ] **Subject Inventory & Idea Statement**: Formulated the core sentence: `On this page, [unique MachineDesign mechanical asset/fact] becomes [the interactive/visual device]`.
- [ ] **One Live Thing**: Defined one authentic interactive element the visitor can physically touch/operate (e.g. 3D mechanism parallax, interactive RFQ telemetry, tolerance calculator, kinetic stage).
- [ ] **Anti-Slop Direction Draw**: Ran `draw.mjs` or adopted curated gallery blueprints with `--keep palette,type` (strictly preserving Swiss-German Precision v2.4 tokens `#0B0D11`, `#12161E`, Signal Amber `#D97706`, CAD Steel Blue `#38BDF8`, Vazirmatn & JetBrains Mono).
- [ ] **Argument Claims**: Mapped sections to specific technical proof points, eliminating boilerplate stock layouts (no meaningless icon rows or fake vanity metrics).

### 1. UI Section Scout Gate (section-scout-builder)
- [ ] If modifying/adding UI sections: Scouted 3-4 real open-source components (Flowbite, TailwindFlex, Uiverse, MagicUI) with direct URLs.
- [ ] Human Approval Gate: Presented real layout anatomy and adaptation plans to user before writing code.
- [ ] Transpiled cleanly into WordPress semantic PHP/CSS without raw `core/html` blocks.

### 2. Aesthetics & Contrast Math Gate (automattic-wp-architect + graphic-design-aesthetics)
- [ ] WCAG 2.1 AA Contrast verified (Normal text ≥ 4.5:1; UI/Large text ≥ 3:1; Signal Amber `#D97706` CTA buttons always paired with dark `#0B0D11` text for WCAG AAA compliance).
- [ ] 60-30-10 Color Hierarchy: 60% architectural slate/carbon (`#0B0D11`, `#12161E`) or engineered platinum canvas (`#F4F6F9`), 30% surfaces/borders (`#1A202B`, `#262E3D` or white Bento cards `#FFFFFF` with `#DDE3EC` borders), 10% Signal Amber accent (`#D97706`).
- [ ] 8-Point Spatial Grid: All gaps, margins, paddings are strict multiples of 4px/8px (`8px, 16px, 24px, 32px`).
- [ ] Anti-AI Slop: Hero headline anchored in upper third (`clamp(4rem, 8vw, 7rem)`), no empty `100vh` flex voids.
- [ ] Anti-Card-Soup & The Squint Test: Only 1 dominant focal point, no repetitive unnecessary card boxes.

### 3. SEO & Knowledge Strategy Gate (seo + seo-schema)
- [ ] Target keywords, H1, and H2s verified against `D:\Machinedesign.ir\Autoclaw\Final_SEO_Strategy_Report_Local (2).csv`.
- [ ] Schema.org JSON-LD structured data specified (e.g. `ProfessionalService`, `ContactPage`, `FAQPage`).
- [ ] Single semantic H1 tag, proper image `alt` and explicit dimensions.

### 4. Performance & Ponytail Gate (ponytail + 3D/Video)
- [ ] Smallest complete working diff; zero unnecessary dependencies or frameworks.
- [ ] 3D mechanisms use GPU CSS transforms + Lerp physics (`delta-robot-3d.js`).
- [ ] Video mechanisms rendered via off-DOM HTML5 `<canvas>` to eliminate downloader extensions (like IDM).
- [ ] Animated transparent format: Transparent WebM (VP9, `yuva420p`, CRF 36-38, < 400KB).

### 5. Local XAMPP QA Gate
- [ ] PHP syntax check: `php -l <file.php>`.
- [ ] Localhost verification at `http://localhost/machinedesign/`.
- [ ] Zero horizontal scroll overflow: `hasHorizontalOverflow = False`.

## Project Structure

### Documentation (this feature)

```text
specs/[###-feature]/
├── plan.md              # This file (/speckit-plan command output)
├── research.md          # Phase 0 output (/speckit-plan command)
├── data-model.md        # Phase 1 output (/speckit-plan command)
├── quickstart.md        # Phase 1 output (/speckit-plan command)
├── contracts/           # Phase 1 output (/speckit-plan command)
└── tasks.md             # Phase 2 output (/speckit-tasks command - NOT created by /speckit-plan)
```

### Source Code (repository root)
<!--
  ACTION REQUIRED: Replace the placeholder tree below with the concrete layout
  for this feature. Delete unused options and expand the chosen structure with
  real paths (e.g., apps/admin, packages/something). The delivered plan must
  not include Option labels.
-->

```text
# [REMOVE IF UNUSED] Option 1: Single project (DEFAULT)
src/
├── models/
├── services/
├── cli/
└── lib/

tests/
├── contract/
├── integration/
└── unit/

# [REMOVE IF UNUSED] Option 2: Web application (when "frontend" + "backend" detected)
backend/
├── src/
│   ├── models/
│   ├── services/
│   └── api/
└── tests/

frontend/
├── src/
│   ├── components/
│   ├── pages/
│   └── services/
└── tests/

# [REMOVE IF UNUSED] Option 3: Mobile + API (when "iOS/Android" detected)
api/
└── [same as backend above]

ios/ or android/
└── [platform-specific structure: feature modules, UI flows, platform tests]
```

**Structure Decision**: [Document the selected structure and reference the real
directories captured above]

## Complexity Tracking

> **Fill ONLY if Constitution Check has violations that must be justified**

| Violation | Why Needed | Simpler Alternative Rejected Because |
|-----------|------------|-------------------------------------|
| [e.g., 4th project] | [current need] | [why 3 projects insufficient] |
| [e.g., Repository pattern] | [specific problem] | [why direct DB access insufficient] |
