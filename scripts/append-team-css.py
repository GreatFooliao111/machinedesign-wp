css_code = """
/* ==========================================================================
   THE 16-MEMBER ENGINEERING POWERHOUSE ROSTER (PAGE-TEAM.PHP)
   ========================================================================== */

/* Hero Enhancements */
.team-hub-hero {
  position: relative;
  overflow: hidden;
}

.team-hero-split {
  align-items: center;
}

.team-hero-metrics-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 12px;
  margin: 28px 0;
}

.team-metric-chip {
  background: rgba(14, 20, 32, 0.75);
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 12px;
  padding: 14px 12px;
  text-align: center;
  display: flex;
  flex-direction: column;
  gap: 4px;
}

.team-metric-chip .metric-num {
  font-size: 1.55rem;
  font-weight: 900;
  color: var(--color-accent, #8ce70c);
  line-height: 1;
}

.team-metric-chip .metric-lbl {
  font-size: 0.72rem;
  font-weight: 600;
  color: #94a3b8;
  line-height: 1.3;
}

/* Hero Delegation Photo Frame */
.team-delegation-frame {
  position: relative;
  border-radius: 20px;
  overflow: hidden;
  border: 1px solid rgba(140, 231, 12, 0.3);
  background: #0c111a;
  width: 100%;
  max-width: 440px;
  margin: 0 auto;
  box-shadow: 0 30px 70px -15px rgba(0, 0, 0, 0.65), 0 0 50px -10px rgba(140, 231, 12, 0.2);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.team-delegation-frame:hover {
  transform: translateY(-4px);
  box-shadow: 0 35px 85px -15px rgba(0, 0, 0, 0.75), 0 0 65px -5px rgba(140, 231, 12, 0.35);
}

.delegation-top-hud {
  position: absolute;
  top: 14px;
  right: 16px;
  left: 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 2;
  pointer-events: none;
}

.delegation-top-hud .hud-item-tag {
  font-size: 0.68rem;
  font-weight: 800;
  color: #f1f5f9;
  background: rgba(12, 17, 26, 0.88);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  border-radius: 6px;
  padding: 4px 10px;
  letter-spacing: 0.05em;
}

.delegation-top-hud .hud-item-live {
  font-size: 0.65rem;
  font-weight: 700;
  color: var(--color-accent, #8ce70c);
  background: rgba(12, 17, 26, 0.88);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(140, 231, 12, 0.3);
  border-radius: 6px;
  padding: 4px 10px;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  letter-spacing: 0.04em;
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
  object-position: center 85%;
  display: block;
  filter: brightness(0.98) contrast(1.04);
  transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

.team-delegation-frame:hover .delegation-photo-img {
  transform: scale(1.03);
}

.delegation-bottom-badge {
  position: absolute;
  bottom: 16px;
  right: 16px;
  left: 16px;
  background: rgba(12, 17, 26, 0.92);
  backdrop-filter: blur(14px);
  -webkit-backdrop-filter: blur(14px);
  border: 1px solid rgba(140, 231, 12, 0.3);
  border-radius: 10px;
  padding: 10px 14px;
  display: flex;
  align-items: center;
  gap: 10px;
  z-index: 2;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
}

.delegation-bottom-badge .badge-text-group {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.delegation-bottom-badge .badge-label {
  font-size: 0.62rem;
  font-weight: 800;
  color: var(--color-accent, #8ce70c);
  letter-spacing: 0.06em;
}

.delegation-bottom-badge .badge-title {
  font-size: 0.74rem;
  font-weight: 700;
  color: #ffffff;
  line-height: 1.35;
}

/* ==========================================================================
   2. TEAM FILTER & ROSTER GRID
   ========================================================================== */
.team-filter-section {
  padding: 85px 0 95px;
  background: #f8fafc;
}

.team-section-header {
  text-align: center;
  max-width: 820px;
  margin: 0 auto 40px;
}

.team-section-title {
  font-size: 2.1rem;
  font-weight: 900;
  color: #0f172a;
  margin: 12px 0 16px;
  line-height: 1.35;
}

.team-section-subtitle {
  font-size: 1rem;
  color: #475569;
  line-height: 1.7;
  margin: 0;
}

/* Tabs */
.team-tabs-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 48px;
}

.team-tab-btn {
  background: #ffffff;
  border: 1px solid #cbd5e1;
  border-radius: 30px;
  padding: 9px 20px;
  font-size: 0.88rem;
  font-weight: 700;
  color: #334155;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  font-family: inherit;
}

.team-tab-btn:hover {
  border-color: #8ce70c;
  background: #f1f5f9;
  color: #0f172a;
}

.team-tab-btn.is-active {
  background: #0f172a;
  border-color: #0f172a;
  color: #ffffff;
  box-shadow: 0 4px 16px rgba(15, 23, 42, 0.2);
}

.team-tab-btn.is-active .tab-dot {
  background: #8ce70c;
  box-shadow: 0 0 8px #8ce70c;
}

.tab-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #94a3b8;
  display: inline-block;
  transition: background 0.2s;
}

.tab-count {
  font-size: 0.72rem;
  font-weight: 800;
  background: rgba(148, 163, 184, 0.2);
  color: inherit;
  padding: 2px 7px;
  border-radius: 12px;
}

.team-tab-btn.is-active .tab-count {
  background: rgba(140, 231, 12, 0.25);
  color: #8ce70c;
}

/* Roster 4-Column Grid */
.team-roster-bento-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 26px;
}

/* Roster Card */
.roster-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 18px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
  transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease, border-color 0.3s ease, opacity 0.25s ease;
  position: relative;
}

.roster-card:hover {
  transform: translateY(-8px);
  border-color: #8ce70c;
  box-shadow: 0 24px 50px -10px rgba(15, 23, 42, 0.12), 0 0 25px rgba(140, 231, 12, 0.18);
}

.roster-card.is-founder-card {
  border: 2px solid rgba(140, 231, 12, 0.5);
  box-shadow: 0 6px 24px rgba(140, 231, 12, 0.1);
}

.roster-card.is-founder-card:hover {
  border-color: #8ce70c;
  box-shadow: 0 26px 60px -10px rgba(15, 23, 42, 0.16), 0 0 35px rgba(140, 231, 12, 0.3);
}

/* Card Photo Frame */
.roster-photo-link {
  display: block;
  text-decoration: none;
}

.roster-photo-frame {
  position: relative;
  width: 100%;
  aspect-ratio: 4 / 5;
  overflow: hidden;
  background: #121824;
}

.roster-photo-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  display: block;
  transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
}

.roster-card:hover .roster-photo-img {
  transform: scale(1.05);
}

.roster-photo-top-chip {
  position: absolute;
  top: 12px;
  right: 12px;
  background: rgba(10, 14, 23, 0.88);
  backdrop-filter: blur(8px);
  color: var(--color-accent, #8ce70c);
  font-size: 0.65rem;
  font-weight: 800;
  padding: 4px 9px;
  border-radius: 6px;
  border: 1px solid rgba(140, 231, 12, 0.25);
  display: inline-flex;
  align-items: center;
  gap: 6px;
  letter-spacing: 0.05em;
  z-index: 2;
}

.chip-status-led {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: #8ce70c;
  box-shadow: 0 0 6px #8ce70c;
}

.roster-exp-pill {
  position: absolute;
  bottom: 12px;
  left: 12px;
  background: rgba(10, 14, 23, 0.88);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 6px;
  padding: 3px 8px;
  display: flex;
  align-items: baseline;
  gap: 4px;
  z-index: 2;
}

.roster-exp-pill .exp-val {
  font-size: 0.74rem;
  font-weight: 900;
  color: #8ce70c;
}

.roster-exp-pill .exp-sub {
  font-size: 0.62rem;
  color: #cbd5e1;
}

/* Card Body */
.roster-card-body {
  padding: 20px 18px 18px;
  display: flex;
  flex-direction: column;
  flex: 1 1 auto;
  gap: 8px;
}

.roster-dept-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.roster-dept-tag {
  font-size: 0.68rem;
  font-weight: 800;
  color: #0284c7;
  letter-spacing: 0.04em;
}

.founder-badge-mini {
  font-size: 0.62rem;
  font-weight: 900;
  color: #0a0e17;
  background: #8ce70c;
  padding: 2px 7px;
  border-radius: 4px;
  letter-spacing: 0.06em;
}

.roster-member-name {
  font-size: 1.15rem;
  font-weight: 900;
  color: #0f172a;
  margin: 0;
  line-height: 1.35;
}

.roster-member-name a {
  color: inherit;
  text-decoration: none;
  transition: color 0.2s;
}

.roster-card:hover .roster-member-name a {
  color: #0f172a;
}

.roster-role-badge {
  font-size: 0.74rem;
  font-weight: 700;
  color: #1e293b;
  background: #f1f5f9;
  border-radius: 6px;
  padding: 4px 8px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.roster-member-subtitle {
  font-size: 0.8rem;
  color: #64748b;
  line-height: 1.55;
  margin: 0;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  min-height: 2.5em;
}

.roster-specs-row {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-top: 4px;
}

.spec-pill {
  font-size: 0.68rem;
  font-weight: 700;
  color: #334155;
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 5px;
  padding: 3px 7px;
  display: inline-flex;
  align-items: center;
  gap: 4px;
  white-space: nowrap;
}

.spec-pill svg {
  color: #8ce70c;
}

.roster-card-footer {
  margin-top: auto;
  padding-top: 14px;
  border-top: 1px solid #f1f5f9;
}

.btn-roster-profile {
  width: 100%;
  background: #0f172a;
  color: #ffffff !important;
  padding: 9px 14px;
  border-radius: 10px;
  font-weight: 800;
  font-size: 0.82rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  text-decoration: none;
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
}

.roster-card:hover .btn-roster-profile {
  background: #8ce70c;
  color: #0a0e17 !important;
  box-shadow: 0 4px 16px rgba(140, 231, 12, 0.3);
}

/* ==========================================================================
   3. INTEGRATED WORKFLOW SECTION
   ========================================================================== */
.team-workflow-section {
  padding: 85px 0 90px;
  background: #0c111a;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}

.team-workflow-section .team-section-title {
  color: #ffffff;
}

.team-workflow-section .team-section-subtitle {
  color: #94a3b8;
}

.team-workflow-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 20px;
  margin-top: 48px;
}

.workflow-step-card {
  background: rgba(18, 24, 36, 0.85);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 14px;
  padding: 24px 20px;
  position: relative;
  transition: all 0.3s ease;
}

.workflow-step-card:hover {
  border-color: rgba(140, 231, 12, 0.4);
  transform: translateY(-4px);
  background: rgba(22, 30, 46, 0.95);
}

.workflow-step-card .step-num {
  font-size: 1.6rem;
  font-weight: 900;
  color: var(--color-accent, #8ce70c);
  line-height: 1;
  margin-bottom: 12px;
  display: block;
}

.workflow-step-card .step-title {
  font-size: 0.96rem;
  font-weight: 800;
  color: #ffffff;
  margin: 0 0 10px;
  line-height: 1.4;
}

.workflow-step-card .step-desc {
  font-size: 0.8rem;
  color: #94a3b8;
  line-height: 1.6;
  margin: 0;
}

/* ==========================================================================
   4. TEAM CTA SECTION
   ========================================================================== */
.team-cta-section {
  padding: 80px 0 100px;
  background: #0a0e17;
}

.team-cta-box {
  background: linear-gradient(145deg, rgba(18, 24, 36, 0.95) 0%, rgba(13, 19, 31, 0.98) 100%);
  border: 1px solid rgba(140, 231, 12, 0.35);
  border-radius: 24px;
  padding: 56px 48px;
  text-align: center;
  max-width: 900px;
  margin: 0 auto;
  box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5), 0 0 50px rgba(140, 231, 12, 0.1);
}

.team-cta-box .cta-badge {
  display: inline-block;
  font-size: 0.72rem;
  font-weight: 800;
  color: var(--color-accent, #8ce70c);
  background: rgba(140, 231, 12, 0.12);
  border: 1px solid rgba(140, 231, 12, 0.3);
  border-radius: 6px;
  padding: 4px 14px;
  letter-spacing: 0.05em;
  margin-bottom: 18px;
}

.team-cta-box .cta-title {
  font-size: 1.95rem;
  font-weight: 900;
  color: #ffffff;
  margin: 0 0 16px;
  line-height: 1.35;
}

.team-cta-box .cta-subtitle {
  font-size: 1rem;
  color: #94a3b8;
  line-height: 1.7;
  max-width: 720px;
  margin: 0 auto 32px;
}

.team-cta-box .cta-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 16px;
}

.btn-cta-main {
  background: #8ce70c !important;
  color: #0a0e17 !important;
  font-weight: 900;
  padding: 14px 30px;
  border-radius: 12px;
  text-decoration: none;
  font-size: 0.95rem;
  box-shadow: 0 4px 20px rgba(140, 231, 12, 0.35);
  transition: all 0.3s ease;
}

.btn-cta-main:hover {
  background: #a3f724 !important;
  transform: translateY(-2px);
  box-shadow: 0 8px 28px rgba(140, 231, 12, 0.55);
}

.btn-cta-phone {
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: #ffffff !important;
  font-weight: 800;
  padding: 13px 26px;
  border-radius: 12px;
  font-size: 0.92rem;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  transition: all 0.3s ease;
}

.btn-cta-phone:hover {
  border-color: #8ce70c;
  color: #8ce70c !important;
  background: rgba(140, 231, 12, 0.08);
}

/* ==========================================================================
   5. RESPONSIVE BREAKPOINTS (ROSTER & HERO)
   ========================================================================== */
@media (max-width: 1200px) {
  .team-roster-bento-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }
  .team-workflow-grid {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 991px) {
  .team-hero-split {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  .team-delegation-frame {
    max-width: 400px;
  }
  .team-roster-bento-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }
  .team-hero-metrics-strip {
    grid-template-columns: repeat(2, 1fr);
  }
  .team-workflow-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 640px) {
  .team-section-title {
    font-size: 1.6rem;
  }
  .team-roster-bento-grid {
    grid-template-columns: 1fr;
    gap: 20px;
    max-width: 420px;
    margin: 0 auto;
  }
  .team-tabs-wrapper {
    gap: 8px;
  }
  .team-tab-btn {
    width: 100%;
    justify-content: space-between;
    padding: 10px 16px;
  }
  .team-workflow-grid {
    grid-template-columns: 1fr;
  }
  .team-cta-box {
    padding: 40px 24px;
  }
  .team-cta-box .cta-title {
    font-size: 1.5rem;
  }
  .team-cta-actions {
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

path = r'C:\xampp\htdocs\machinedesign\wp-content\themes\hello-elementor\style.css'
with open(path, 'r', encoding='utf-8') as f:
    orig = f.read()

# Check if already appended
if 'THE 16-MEMBER ENGINEERING POWERHOUSE ROSTER' not in orig:
    with open(path, 'a', encoding='utf-8') as f:
        f.write('\n' + css_code)
    print("SUCCESS: Appended team roster CSS!")
else:
    print("CSS already present, updating...")
    import re
    updated = re.sub(r'/\* =+\s*THE 16-MEMBER ENGINEERING POWERHOUSE ROSTER[\s\S]*$', css_code, orig)
    with open(path, 'w', encoding='utf-8') as f:
        f.write(updated)
    print("SUCCESS: Updated team roster CSS!")
