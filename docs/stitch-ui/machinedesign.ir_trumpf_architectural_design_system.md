---
name: "MachineDesign.ir — TRUMPF Architectural Design System"
description: "Museum-grade German B2B industrial engineering design system in RTL Persian, modeled on TRUMPF's pure gallery white surfaces, 0px razor-sharp geometry, cobalt engineering blue (#0033CC), and architectural hairline grids."
---

## Overview

**MachineDesign.ir (ماشین دیزاین)** embodies German industrial precision and architectural restraint. Modeled directly on TRUMPF's iconic B2B engineering aesthetic, the system rejects dark-mode SaaS clichés, rounded cards, glassmorphism, and decorative gradients in favor of 90% pure gallery white (`#FFFFFF`), cool German steel mist (`#F2F4F7`), razor-sharp `0px` rectangular geometry, and massive architectural whitespace (`96px–120px` vertical rhythm).

The interface speaks to plant directors, R&D leads, and procurement engineers in RTL Persian (`dir="rtl"`, `lang="fa"`), pairing high-contrast `Vazirmatn` editorial typography with `JetBrains Mono` (`dir="ltr"`) for ISO/DIN standards and micron-level tolerances.

## Colors

The palette is strictly architectural and light-first. Pure gallery white (`#FFFFFF`) serves as the primary canvas and header surface, alternating with cool industrial mist (`#F2F4F7`) for specification bands, filter bars, and secondary sections. TRUMPF Engineering Blue (`#0033CC`) is reserved for primary rectangular CTAs, active navigation underlines, and directional arrows (`←`). Restrained Industrial Amber (`#D97706`) is used sparingly for NDA badges, technical status dots, and critical RFQ highlights.

```yaml
colors:
  primary: "#0033CC"
  on-primary: "#FFFFFF"
  primary-hover: "#002299"
  on-primary-hover: "#FFFFFF"
  primary-tint: "#F0EFFF"
  on-primary-tint: "#001159"
  surface: "#FFFFFF"
  on-surface: "#111318"
  surface-mist: "#F2F4F7"
  on-surface-mist: "#111318"
  surface-dark: "#111318"
  on-surface-dark: "#FFFFFF"
  on-surface-variant: "#3A414A"
  on-surface-muted: "#5C5F61"
  outline: "#D8DEE6"
  outline-subtle: "#E2E6EB"
  amber-precision: "#D97706"
  amber-surface: "#FFEDE3"
  on-amber-surface: "#6E3900"
```

## Typography

All Persian UI, headlines, and technical prose use **Vazirmatn** with strict `letterSpacing: 0px` and a high-contrast editorial pairing of Light (`300`) / Regular (`400`) and ExtraBold (`800`) weights. All ISO/DIN standards, part numbers, and tolerances (`ISO 20816-3`, `ASME Y14.5`, `±0.0015 mm`) use **JetBrains Mono** rendered `dir="ltr"` with `tabular-nums`.

```yaml
typography:
  display-lg:
    fontFamily: "Vazirmatn"
    fontSize: 48px
    fontWeight: 800
    lineHeight: 60px
    letterSpacing: 0px
  display-lg-mobile:
    fontFamily: "Vazirmatn"
    fontSize: 32px
    fontWeight: 800
    lineHeight: 42px
    letterSpacing: 0px
  headline-lg:
    fontFamily: "Vazirmatn"
    fontSize: 36px
    fontWeight: 800
    lineHeight: 48px
    letterSpacing: 0px
  headline-lg-mobile:
    fontFamily: "Vazirmatn"
    fontSize: 28px
    fontWeight: 800
    lineHeight: 38px
    letterSpacing: 0px
  headline-md:
    fontFamily: "Vazirmatn"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 38px
    letterSpacing: 0px
  title-lg:
    fontFamily: "Vazirmatn"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: 0px
  title-md:
    fontFamily: "Vazirmatn"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: 0px
  body-lg:
    fontFamily: "Vazirmatn"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 32px
    letterSpacing: 0px
  body-md:
    fontFamily: "Vazirmatn"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0px
  body-sm:
    fontFamily: "Vazirmatn"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0px
  label-lg:
    fontFamily: "Vazirmatn"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 22px
    letterSpacing: 0px
  label-md:
    fontFamily: "Vazirmatn"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 18px
    letterSpacing: 0px
  label-sm:
    fontFamily: "Vazirmatn"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0px
  mono-md:
    fontFamily: "JetBrains Mono"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 0px
  mono-sm:
    fontFamily: "JetBrains Mono"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0px
```

## Layout & Spacing

The layout follows a **Fixed-Max-Width Architectural Grid** (`max-w-[1440px]` outer frame with `1280px` content container) in RTL (`dir="rtl"`). Vertical rhythm is expansive (`96px–120px` between major bands), and sibling grid items align cleanly on an `8px` base step with `1px solid #D8DEE6` hairline grid dividers.

```yaml
spacing:
  gutter-xs: 4px
  gutter-sm: 8px
  gutter-md: 16px
  gutter-lg: 24px
  gutter-xl: 32px
  section-md: 64px
  section-lg: 96px
  section-xl: 120px
  page-margin: 32px
```

## Elevation & Depth

This design system is strictly **flat and architectural**. Depth and hierarchy are established exclusively through:
1. Alternating surface bands (`#FFFFFF` pure white vs. `#F2F4F7` industrial mist).
2. Crisp `1px solid #D8DEE6` and `1px solid #E2E6EB` hairline dividers.
3. Generous negative space and typographic scale contrast.

Drop shadows, elevation blurs, and glassmorphism (`backdrop-blur`) are strictly forbidden.

## Shapes

Every element—buttons, cards, images, hero content blocks, input fields, tables, and status badges—uses **razor-sharp `0px` rectangular corners**. Rounded corners (`rounded-md`, `rounded-lg`, `rounded-full`) are never used.

```yaml
rounded:
  none: 0px
  DEFAULT: 0px
  sm: 0px
  md: 0px
  lg: 0px
```

## Motion & Micro-interaction

Motion is crisp, mechanical, and restrained. Hover transitions on links, rectangular CTAs, and tab underlines occur within `150ms` using `ease-out`. Nothing bounces, glows, or loops decoratively.

```yaml
motion:
  state-change:
    duration: 150ms
    delay: 0ms
    timingFunction: ease-out
  tab-switch:
    duration: 200ms
    delay: 0ms
    timingFunction: cubic-bezier(0.2, 0, 0, 1)
```

## Voice & Content Strategy

- **Tone of Voice:** Authoritative, precise, engineering-first, and free of marketing hyperbole. Write in formal, technical Persian (`مهندسی دقیق`, `طراحی برای ساخت و مونتاژ (DFMA)`, `تلرانس میکرونی`).
- **Directional Arrows:** In RTL Persian, forward action arrows point left (`←`).
- **Technical Standards & Numbers:** ISO/DIN codes, dimensions, tolerances, and phone numbers always render in `JetBrains Mono` with `dir="ltr"` and `tabular-nums`.

## Components

Component implementations live as individual HTML sticker sheet files in
`components/`. Each file contains the canonical, styled HTML components with
`<!-- COMPONENT: name -->` comment markers. Read each file before use.

- **Button** → `@components/button.html` — `button-primary`, `button-icon`, `button-with-icon`
- **Input Field** → `@components/input-field.html` — `input-field-text`, `input-field-icon`
- **Table** → `@components/table.html` — `table-standard`, `table-interactive`, `table-selectable`
- **Tabs** → `@components/tabs.html` — `tabs-horizontal`, `tabs-with-icon`

## Do's and Don'ts

- **DO** set `dir="rtl"` and `lang="fa"` on `<html>`.
- **DO** keep 90% of every screen in pure gallery white (`#FFFFFF`) and cool mist (`#F2F4F7`).
- **DO** use `0px` sharp rectangular corners on every button, image, card, input, and badge.
- **DO** use `1px` hairline borders (`#D8DEE6`, `#E2E6EB`) and generous `96px–120px` section spacing.
- **DON'T** use dark-mode page backgrounds, dark header bars, rounded SaaS cards, pill buttons, neon colors, glowing gradients, glassmorphic `backdrop-blur` badges, or heavy drop shadows.
