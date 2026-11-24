@echo off
if "%~1"=="" (
    node "%~dp0.agents\skills\design-taste-frontend\scripts\lint.mjs" "wp-content/themes/machinedesign-theme"
) else (
    node "%~dp0.agents\skills\design-taste-frontend\scripts\lint.mjs" %*
)
