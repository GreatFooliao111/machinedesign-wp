import os

alternating_css = """/* ==========================================================================
   THE 16-MEMBER ENGINEERING POWERHOUSE ROSTER (PAGE-TEAM.PHP)
   Alternating Theme Hierarchy:
   - Section 1 (Odd):  Dark Theme (Hero & Delegation Matrix)
   - Section 2 (Even): Light Theme (Directory, Department Tabs, Bento Cards)
   - Section 3 (Odd):  Dark Theme (5-Step Integrated Project Workflow)
   - Section 4 (Even): Light Theme (Consultation & RFQ Box)
   ========================================================================== */

/* ==========================================================================
   SECTION 1 (ODD - DARK): HERO BANNER
   ========================================================================== */
.team-hub-hero {
  position: relative;
  overflow: hidden;
  background: #0a0e17;
  padding: 44px 0 60px;
}

.team-hero-split {
  align-items: center;
}

.team-hero-metrics-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
  margin: 18px 0 22px;
}

.team-metric-chip {
  background: rgba(18, 24, 36, 0.65);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.07);
  border-radius: 9px;
  padding: 8px 6px;
  text-align: center;
  display: flex;
  flex-direction: column;
  gap: 2px;
  transition: border-color 0.22s ease, transform 0.22s ease;
}

.team-metric-chip:hover {
  border-color: rgba(140, 231, 12, 0.35);
  transform: translateY(-2px);
}

.team-metric-chip .metric-num {
  font-size: 1.35rem;
  font-weight: 900;
  color: var(--color-accent, #8ce70c);
  line-height: 1.1;
}

.team-metric-chip .metric-lbl {
  font-size: 0.68rem;
  font-weight: 600;
  color: #94a3b8;
  line-height: 1.3;
}

/* Hero Delegation Photo Frame */
.team-delegation-frame {
  position: relative;
  border-radius: 14px;
  overflow: hidden;
  border: 1px solid rgba(140, 231, 12, 0.28);
  background: #0c111a;
  width: 100%;
  max-width: 380px;
  margin: 0 auto;
  box-shadow: 0 18px 45px -10px rgba(0, 0, 0, 0.75), 0 0 35px -8px rgba(140, 231, 12, 0.18);
  transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease;
}

.team-delegation-frame:hover {
  box-shadow: 0 25px 60px -10px rgba(0, 0, 0, 0.85), 0 0 50px -4px rgba(140, 231, 12, 0.3);
}

.delegation-top-hud {
  position: absolute;
  top: 9px;
  right: 11px;
  left: 11px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 2;
  pointer-events: none;
}

.delegation-top-hud .hud-item-tag {
  font-size: 0.58rem;
  font-weight: 700;
  color: #f1f5f9;
  background: rgba(10, 14, 23, 0.85);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 4px;
  padding: 2px 6px;
  letter-spacing: 0.05em;
}

.delegation-top-hud .hud-item-live {
  font-size: 0.58rem;
  font-weight: 700;
  color: var(--color-accent, #8ce70c);
  background: rgba(10, 14, 23, 0.85);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(140, 231, 12, 0.3);
  border-radius: 4px;
  padding: 2px 6px;
  display: inline-flex;
  align-items: center;
  gap: 4px;
}

.delegation-photo-wrap {
  margin: 0;
  padding: 0;
  width: 100%;
  aspect-ratio: 9 / 15;
  overflow: hidden;
  background: #0f172a;
}

.delegation-photo-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  display: block;
}

.delegation-bottom-badge {
  position: absolute;
  bottom: 9px;
  right: 9px;
  left: 9px;
  background: rgba(10, 14, 23, 0.88);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(140, 231, 12, 0.28);
  border-radius: 7px;
  padding: 7px 11px;
  display: flex;
  align-items: center;
  gap: 7px;
  z-index: 2;
}

.delegation-bottom-badge .badge-label {
  display: block;
  font-size: 0.56rem;
  font-weight: 800;
  color: var(--color-accent, #8ce70c);
  letter-spacing: 0.05em;
  margin-bottom: 2px;
}

.delegation-bottom-badge .badge-title {
  display: block;
  font-size: 0.7rem;
  font-weight: 700;
  color: #f1f5f9;
  line-height: 1.35;
}

/* CAD Crosshairs */
.cad-corner-crosshair {
  position: absolute;
  width: 9px;
  height: 9px;
  pointer-events: none;
  z-index: 3;
}

.cad-corner-crosshair::before,
.cad-corner-crosshair::after {
  content: '';
  position: absolute;
  background: var(--color-accent, #8ce70c);
}

.cad-corner-crosshair.top-right { top: 6px; right: 6px; }
.cad-corner-crosshair.top-left { top: 6px; left: 6px; }
.cad-corner-crosshair.bottom-right { bottom: 6px; right: 6px; }
.cad-corner-crosshair.bottom-left { bottom: 6px; left: 6px; }

.cad-corner-crosshair.top-right::before { top: 0; right: 0; width: 7px; height: 1.5px; }
.cad-corner-crosshair.top-right::after  { top: 0; right: 0; width: 1.5px; height: 7px; }

.cad-corner-crosshair.top-left::before { top: 0; left: 0; width: 7px; height: 1.5px; }
.cad-corner-crosshair.top-left::after  { top: 0; left: 0; width: 1.5px; height: 7px; }

.cad-corner-crosshair.bottom-right::before { bottom: 0; right: 0; width: 7px; height: 1.5px; }
.cad-corner-crosshair.bottom-right::after  { bottom: 0; right: 0; width: 1.5px; height: 7px; }

.cad-corner-crosshair.bottom-left::before { bottom: 0; left: 0; width: 7px; height: 1.5px; }
.cad-corner-crosshair.bottom-left::after  { bottom: 0; left: 0; width: 1.5px; height: 7px; }

/* ==========================================================================
   SECTION 2 (EVEN - LIGHT THEME): DIRECTORY & 16-MEMBER BENTO GRID
   ========================================================================== */
.team-filter-section {
  padding: 56px 0 72px;
  background: #f8fafc;
  border-top: 1px solid #e2e8f0;
  border-bottom: 1px solid #e2e8f0;
}

.team-section-header {
  text-align: center;
  max-width: 660px;
  margin: 0 auto 24px;
}

.team-section-header .section-tag {
  display: inline-block;
  font-size: 0.68rem;
  font-weight: 800;
  color: #166534;
  letter-spacing: 0.08em;
  margin-bottom: 7px;
  background: rgba(140, 231, 12, 0.15);
  padding: 3px 10px;
  border-radius: 20px;
}

.team-section-title {
  font-size: 1.85rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0 0 9px;
  line-height: 1.3;
}

.team-section-subtitle {
  font-size: 0.88rem;
  color: #475569;
  line-height: 1.65;
  margin: 0;
}

/* Light Mode Department Filter Tabs (Refined Pill Shape) */
.team-tabs-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 8px;
  margin-bottom: 12px;
}

.team-tab-btn {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  padding: 6px 14px;
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 24px;
  color: #475569;
  font-size: 0.78rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
  outline: none;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
}

.team-tab-btn:hover {
  border-color: #cbd5e1;
  color: #0f172a;
  background: #f1f5f9;
}

.team-tab-btn.is-active {
  background: #0f172a;
  border-color: #0f172a;
  color: #8ce70c;
  font-weight: 700;
  box-shadow: 0 4px 14px rgba(15, 23, 42, 0.16);
}

.team-tab-btn .tab-dot {
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: #94a3b8;
  transition: all 0.22s ease;
}

.team-tab-btn.is-active .tab-dot {
  background: var(--color-accent, #8ce70c);
  box-shadow: 0 0 6px var(--color-accent, #8ce70c);
}

.team-tab-btn .tab-count {
  font-size: 0.65rem;
  font-weight: 800;
  background: #f1f5f9;
  border-radius: 10px;
  padding: 1px 6px;
  color: #64748b;
  line-height: 1.2;
}

.team-tab-btn.is-active .tab-count {
  color: #8ce70c;
  background: rgba(140, 231, 12, 0.2);
}

/* Light Mode Search Controls Bar */
.team-filter-controls-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 14px;
  margin: 14px 0 24px;
  flex-wrap: wrap;
}

.team-search-bar {
  position: relative;
  flex: 1 1 320px;
  max-width: 440px;
}

.team-search-bar .search-icon {
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  color: #94a3b8;
  pointer-events: none;
  display: flex;
  align-items: center;
}

input[type="search"].team-search-input {
  width: 100%;
  background: #ffffff;
  border: 1px solid #cbd5e1;
  border-radius: 20px;
  padding: 8px 38px 8px 34px;
  font-family: inherit;
  font-size: 0.82rem;
  color: #0f172a;
  transition: all 0.22s ease;
  outline: none;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
}

input[type="search"].team-search-input:focus {
  border-color: #0f172a;
  background: #ffffff;
  box-shadow: 0 0 0 3px rgba(140, 231, 12, 0.2);
}

input[type="search"].team-search-input::placeholder {
  color: #94a3b8;
  font-size: 0.78rem;
}

.team-search-clear {
  position: absolute;
  left: 12px;
  top: 50%;
  transform: translateY(-50%);
  background: #e2e8f0;
  border: none;
  border-radius: 50%;
  width: 18px;
  height: 18px;
  display: none;
  align-items: center;
  justify-content: center;
  color: #64748b;
  font-size: 0.68rem;
  cursor: pointer;
  transition: all 0.2s ease;
}

.team-search-clear:hover {
  background: #fee2e2;
  color: #ef4444;
}

.team-results-count {
  display: inline-flex;
  align-items: center;
  gap: 7px;
  font-size: 0.72rem;
  font-weight: 600;
  color: #475569;
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 20px;
  padding: 5px 12px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
}

.team-results-count .count-led {
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: #16a34a;
  box-shadow: 0 0 5px #16a34a;
}

/* Light Mode Empty State */
.team-empty-state {
  text-align: center;
  padding: 48px 20px;
  background: #ffffff;
  border: 1px dashed #cbd5e1;
  border-radius: 12px;
  margin: 20px 0 32px;
}

.team-empty-state .empty-state-icon {
  margin-bottom: 12px;
  display: flex;
  justify-content: center;
}

.team-empty-state .empty-state-title {
  font-size: 1.1rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0 0 6px;
}

.team-empty-state .empty-state-desc {
  font-size: 0.82rem;
  color: #64748b;
  max-width: 440px;
  margin: 0 auto 16px;
  line-height: 1.6;
}

.btn-reset-filters {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 7px 16px;
  font-size: 0.78rem;
  font-weight: 700;
  border-radius: 20px;
  border: 1px solid #0f172a;
  color: #0f172a;
  background: #f1f5f9;
  cursor: pointer;
  transition: all 0.22s ease;
}

.btn-reset-filters:hover {
  background: #0f172a;
  color: #8ce70c;
  font-weight: 800;
}

/* Light Mode 16-Member Bento Grid */
.team-roster-bento-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
}

/* Light Mode Roster Card */
.roster-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  box-shadow: 0 4px 16px -2px rgba(0, 0, 0, 0.05), 0 2px 6px -1px rgba(0, 0, 0, 0.02);
  transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.22s ease, opacity 0.2s ease;
  position: relative;
}

.roster-card:hover {
  transform: translateY(-5px);
  border-color: rgba(140, 231, 12, 0.7);
  box-shadow: 0 16px 36px -8px rgba(15, 23, 42, 0.12), 0 0 20px -4px rgba(140, 231, 12, 0.2);
}

.roster-card.is-founder-card {
  border-color: rgba(140, 231, 12, 0.65);
  box-shadow: 0 6px 20px -2px rgba(15, 23, 42, 0.08), 0 0 16px rgba(140, 231, 12, 0.15);
}

.roster-card.is-founder-card:hover {
  border-color: #16a34a;
  box-shadow: 0 20px 45px -8px rgba(15, 23, 42, 0.16), 0 0 30px rgba(140, 231, 12, 0.25);
}

/* Card Photo Frame (Kept Dark Gallery Backdrop) */
.roster-photo-link {
  display: block;
  text-decoration: none;
}

.roster-photo-frame {
  position: relative;
  width: 100%;
  aspect-ratio: 4 / 4.75;
  overflow: hidden;
  background: #0d121c;
  border-radius: 13px 13px 0 0;
}

.roster-photo-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 12%;
  display: block;
  transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
}

.roster-card:hover .roster-photo-img {
  transform: scale(1.04);
}

/* Micro-Chip on Photo */
.roster-photo-top-chip {
  position: absolute;
  top: 8px;
  right: 8px;
  background: rgba(10, 14, 23, 0.82);
  backdrop-filter: blur(8px);
  color: var(--color-accent, #8ce70c);
  font-size: 0.58rem;
  font-weight: 700;
  padding: 2px 7px;
  border-radius: 4px;
  border: 1px solid rgba(140, 231, 12, 0.25);
  display: inline-flex;
  align-items: center;
  gap: 4px;
  letter-spacing: 0.05em;
  z-index: 2;
}

.chip-status-led {
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background: #8ce70c;
  box-shadow: 0 0 4px #8ce70c;
}

/* Micro-Pill at Bottom of Photo */
.roster-exp-pill {
  position: absolute;
  bottom: 8px;
  left: 8px;
  background: rgba(10, 14, 23, 0.82);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  padding: 2px 7px;
  font-size: 0.68rem;
  line-height: 1.2;
  display: flex;
  align-items: baseline;
  gap: 3px;
  z-index: 2;
}

.roster-exp-pill .exp-val {
  font-size: 0.68rem;
  font-weight: 900;
  color: #8ce70c;
}

.roster-exp-pill .exp-sub {
  font-size: 0.56rem;
  color: #cbd5e1;
}

/* Light Mode Card Body */
.roster-card-body {
  padding: 14px 13px 13px;
  display: flex;
  flex-direction: column;
  flex: 1 1 auto;
  background: #ffffff;
}

.roster-dept-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 6px;
  margin-bottom: 5px;
}

.roster-dept-tag {
  font-size: 0.62rem;
  font-weight: 700;
  color: #15803d;
  background: rgba(140, 231, 12, 0.12);
  border-radius: 4px;
  padding: 2px 6px;
  border: 1px solid rgba(140, 231, 12, 0.3);
}

.founder-badge-mini {
  background: #0f172a;
  border: 1px solid #0f172a;
  color: #8ce70c;
  font-size: 0.56rem;
  font-weight: 800;
  padding: 1px 5px;
  border-radius: 3px;
  letter-spacing: 0.04em;
}

.roster-member-name {
  font-size: 1.0rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0 0 3px;
  line-height: 1.35;
}

.roster-member-name a {
  color: inherit;
  text-decoration: none;
  transition: color 0.2s ease;
}

.roster-member-name a:hover {
  color: #16a34a;
}

.roster-role-badge {
  font-size: 0.72rem;
  font-weight: 600;
  color: #475569;
  line-height: 1.4;
  margin-bottom: 5px;
  min-height: 30px;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.roster-member-subtitle {
  font-size: 0.7rem;
  color: #64748b;
  line-height: 1.45;
  margin: 0 0 8px;
  min-height: 30px;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.roster-specs-row {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
  margin-bottom: 10px;
}

.spec-pill {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  font-size: 0.64rem;
  font-weight: 700;
  color: #0f172a;
  background: #f1f5f9;
  border: 1px solid #e2e8f0;
  border-radius: 4px;
  padding: 2px 6px;
}

.spec-pill svg {
  flex-shrink: 0;
  width: 10px;
  height: 10px;
  color: #16a34a;
}

/* Light Mode Card Footer Action */
.roster-card-footer {
  margin-top: auto;
  padding-top: 6px;
}

.btn-roster-profile {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  width: 100%;
  padding: 7px 10px;
  background: #f8fafc;
  border: 1px solid #cbd5e1;
  border-radius: 6px;
  color: #0f172a;
  font-size: 0.76rem;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.22s cubic-bezier(0.16, 1, 0.3, 1);
}

.btn-roster-profile svg {
  width: 13px;
  height: 13px;
  color: #64748b;
  transition: transform 0.22s ease, color 0.22s ease;
}

.btn-roster-profile:hover {
  background: #0f172a;
  border-color: #0f172a;
  color: #8ce70c;
  font-weight: 800;
}

.btn-roster-profile:hover svg {
  color: #8ce70c;
  transform: translateX(-4px);
}

/* ==========================================================================
   SECTION 3 (ODD - DARK THEME): INTEGRATED PROJECT WORKFLOW
   ========================================================================== */
.team-workflow-section {
  padding: 56px 0 64px;
  background: #0d121c;
  border-top: 1px solid rgba(255, 255, 255, 0.06);
  border-bottom: 1px solid rgba(255, 255, 255, 0.06);
}

.team-workflow-section .team-section-title {
  color: #f8fafc;
}

.team-workflow-section .team-section-subtitle {
  color: #94a3b8;
}

.team-workflow-section .section-tag {
  color: var(--color-accent, #8ce70c);
  background: rgba(140, 231, 12, 0.08);
  border: 1px solid rgba(140, 231, 12, 0.2);
}

.team-workflow-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 14px;
  margin-top: 26px;
}

.workflow-step-card {
  background: #121824;
  border: 1px solid rgba(255, 255, 255, 0.07);
  border-radius: 12px;
  padding: 18px 14px;
  display: flex;
  flex-direction: column;
  transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.25s ease, box-shadow 0.28s ease;
  position: relative;
}

.workflow-step-card:hover {
  transform: translateY(-3px);
  border-color: rgba(140, 231, 12, 0.35);
  box-shadow: 0 12px 26px -6px rgba(0, 0, 0, 0.65);
}

.workflow-step-card .step-num {
  font-size: 1.35rem;
  font-weight: 900;
  color: var(--color-accent, #8ce70c);
  line-height: 1;
  margin-bottom: 6px;
  display: block;
}

.workflow-step-card .step-title {
  font-size: 0.9rem;
  font-weight: 800;
  color: #f8fafc;
  margin: 0 0 6px;
  line-height: 1.35;
}

.workflow-step-card .step-desc {
  font-size: 0.76rem;
  color: #94a3b8;
  line-height: 1.55;
  margin: 0;
}

/* ==========================================================================
   SECTION 4 (EVEN - LIGHT THEME): DIRECT CONSULTATION & RFQ BANNER
   ========================================================================== */
.team-cta-section {
  padding: 56px 0 68px;
  background: #f8fafc;
  border-top: 1px solid #e2e8f0;
}

.team-cta-box {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 16px;
  padding: 36px 28px;
  text-align: center;
  box-shadow: 0 16px 40px -10px rgba(15, 23, 42, 0.06), 0 0 25px -4px rgba(140, 231, 12, 0.08);
  max-width: 840px;
  margin: 0 auto;
}

.team-location-verified-chip {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 7px;
  padding: 6px 14px;
  background: rgba(140, 231, 12, 0.1);
  border: 1px solid rgba(140, 231, 12, 0.35);
  border-radius: 20px;
  font-size: 0.72rem;
  color: #0f172a;
  margin-bottom: 16px;
  line-height: 1.5;
}

.team-location-verified-chip strong {
  color: #15803d;
}

.team-location-verified-chip .chip-divider {
  color: #94a3b8;
}

.team-cta-box .cta-badge {
  display: inline-block;
  font-size: 0.62rem;
  font-weight: 800;
  color: #15803d;
  letter-spacing: 0.06em;
  margin-bottom: 8px;
  background: rgba(140, 231, 12, 0.12);
  padding: 2px 8px;
  border-radius: 4px;
}

.team-cta-box .cta-title {
  font-size: 1.55rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0 0 8px;
  line-height: 1.35;
}

.team-cta-box .cta-subtitle {
  font-size: 0.88rem;
  color: #475569;
  line-height: 1.65;
  max-width: 560px;
  margin: 0 auto 22px;
}

.team-cta-box .cta-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  flex-wrap: wrap;
}

.btn-cta-main {
  background: #0f172a !important;
  color: #8ce70c !important;
  border: 1px solid #0f172a !important;
  padding: 9px 20px;
  font-size: 0.82rem;
  font-weight: 800;
  border-radius: 7px;
  transition: all 0.22s ease;
}

.btn-cta-main:hover {
  background: #1e293b !important;
  color: #9cfa1b !important;
}

.btn-cta-phone {
  background: #ffffff !important;
  color: #0f172a !important;
  border: 1px solid #cbd5e1 !important;
  padding: 9px 16px;
  font-size: 0.82rem;
  font-weight: 700;
  border-radius: 7px;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  transition: all 0.22s ease;
}

.btn-cta-phone:hover {
  border-color: #0f172a !important;
  background: #f1f5f9 !important;
}

/* ==========================================================================
   6. RESPONSIVE BREAKPOINTS
   ========================================================================== */
@media (max-width: 1199px) {
  .team-roster-bento-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .team-workflow-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 991px) {
  .team-roster-bento-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
  }
  .team-workflow-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .team-hero-metrics-strip {
    grid-template-columns: repeat(2, 1fr);
  }
  .team-cta-box {
    padding: 26px 16px;
  }
}

@media (max-width: 640px) {
  .team-roster-bento-grid {
    grid-template-columns: 1fr;
    gap: 14px;
  }
  .team-workflow-grid {
    grid-template-columns: 1fr;
    gap: 10px;
  }
  .team-hero-metrics-strip {
    grid-template-columns: 1fr;
    gap: 8px;
  }
  .team-filter-controls-row {
    flex-direction: column;
    align-items: stretch;
  }
  .team-search-bar {
    max-width: 100%;
  }
  .team-results-count {
    justify-content: center;
  }
  .team-location-verified-chip {
    font-size: 0.68rem;
    padding: 6px 10px;
  }
  .team-cta-box .cta-actions {
    flex-direction: column;
    width: 100%;
  }
  .btn-cta-main,
  .btn-cta-phone {
    width: 100%;
    justify-content: center;
  }
}
"""

style_path = 'C:/xampp/htdocs/machinedesign/wp-content/themes/hello-elementor/style.css'
with open(style_path, 'r', encoding='utf-8') as f:
    full_css = f.read()

marker = '/* ==========================================================================\n   THE 16-MEMBER ENGINEERING POWERHOUSE ROSTER (PAGE-TEAM.PHP)'
idx = full_css.find(marker)
if idx != -1:
    base_css = full_css[:idx]
    new_full_css = base_css + alternating_css
    with open(style_path, 'w', encoding='utf-8') as f:
        f.write(new_full_css)
    print("SUCCESS: Applied alternating theme (Light for even sections)!")
else:
    print("ERROR: Marker not found!")
