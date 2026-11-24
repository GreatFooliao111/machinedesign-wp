import os

extra_css = """
/* ==========================================================================
   TEAM SEARCH & ENHANCED ROSTER CONTROLS
   ========================================================================== */
.team-filter-controls-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  margin: 18px 0 28px;
  flex-wrap: wrap;
}

.team-search-bar {
  position: relative;
  flex: 1 1 360px;
  max-width: 520px;
}

.team-search-bar .search-icon {
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  color: #64748b;
  pointer-events: none;
  display: flex;
  align-items: center;
}

.team-search-input {
  width: 100%;
  background: rgba(14, 20, 32, 0.85);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 12px;
  padding: 12px 42px 12px 40px;
  font-family: inherit;
  font-size: 0.88rem;
  color: #f1f5f9;
  transition: all 0.25s ease;
  outline: none;
}

.team-search-input:focus {
  border-color: var(--color-accent, #8ce70c);
  background: rgba(18, 24, 36, 0.95);
  box-shadow: 0 0 0 3px rgba(140, 231, 12, 0.15);
}

.team-search-input::placeholder {
  color: #64748b;
  font-size: 0.82rem;
}

.team-search-clear {
  position: absolute;
  left: 12px;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255, 255, 255, 0.1);
  border: none;
  border-radius: 50%;
  width: 22px;
  height: 22px;
  display: none;
  align-items: center;
  justify-content: center;
  color: #94a3b8;
  font-size: 0.75rem;
  cursor: pointer;
  transition: all 0.2s ease;
}

.team-search-clear:hover {
  background: rgba(239, 68, 68, 0.2);
  color: #ef4444;
}

.team-results-count {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 0.8rem;
  font-weight: 700;
  color: #94a3b8;
  background: rgba(14, 20, 32, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 30px;
  padding: 8px 16px;
}

.team-results-count .count-led {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--color-accent, #8ce70c);
  box-shadow: 0 0 8px var(--color-accent, #8ce70c);
  animation: ledPulse 2s infinite ease-in-out;
}

/* Empty State */
.team-empty-state {
  text-align: center;
  padding: 60px 24px;
  background: rgba(14, 20, 32, 0.5);
  border: 1px dashed rgba(255, 255, 255, 0.15);
  border-radius: 16px;
  margin: 30px 0;
}

.team-empty-state .empty-state-icon {
  margin-bottom: 16px;
  display: flex;
  justify-content: center;
}

.team-empty-state .empty-state-title {
  font-size: 1.2rem;
  font-weight: 800;
  color: #f1f5f9;
  margin: 0 0 8px;
}

.team-empty-state .empty-state-desc {
  font-size: 0.88rem;
  color: #94a3b8;
  max-width: 480px;
  margin: 0 auto 20px;
  line-height: 1.6;
}

.btn-reset-filters {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 22px;
  font-size: 0.85rem;
  font-weight: 700;
  border-radius: 8px;
  border: 1px solid var(--color-accent, #8ce70c);
  color: var(--color-accent, #8ce70c);
  background: transparent;
  cursor: pointer;
  transition: all 0.25s ease;
}

.btn-reset-filters:hover {
  background: var(--color-accent, #8ce70c);
  color: #0c111a;
}

/* Founder Card Special Distinction */
.is-founder-card {
  position: relative;
  border-color: rgba(140, 231, 12, 0.45) !important;
  box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.6), 0 0 25px rgba(140, 231, 12, 0.12) !important;
}

.is-founder-card:hover {
  border-color: var(--color-accent, #8ce70c) !important;
  box-shadow: 0 20px 45px -10px rgba(0, 0, 0, 0.75), 0 0 40px rgba(140, 231, 12, 0.25) !important;
}

.founder-badge-mini {
  background: rgba(140, 231, 12, 0.15);
  border: 1px solid var(--color-accent, #8ce70c);
  color: var(--color-accent, #8ce70c);
  font-size: 0.62rem;
  font-weight: 800;
  padding: 2px 8px;
  border-radius: 4px;
  letter-spacing: 0.05em;
}

/* Verified Location Grounding Chip */
.team-location-verified-chip {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 8px;
  padding: 10px 18px;
  background: rgba(140, 231, 12, 0.08);
  border: 1px solid rgba(140, 231, 12, 0.28);
  border-radius: 30px;
  font-size: 0.78rem;
  color: #e2e8f0;
  margin-bottom: 24px;
  line-height: 1.5;
}

.team-location-verified-chip strong {
  color: var(--color-accent, #8ce70c);
}

.team-location-verified-chip .chip-divider {
  color: rgba(140, 231, 12, 0.4);
}

@media (max-width: 768px) {
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
    font-size: 0.72rem;
    padding: 8px 12px;
  }
}
"""

style_path = 'C:/xampp/htdocs/machinedesign/wp-content/themes/hello-elementor/style.css'
with open(style_path, 'a', encoding='utf-8') as f:
    f.write(extra_css)

print("SUCCESS: Appended enhanced search and controls CSS!")
