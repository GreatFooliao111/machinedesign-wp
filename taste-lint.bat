@echo off
if "%~1"=="" (
    node "%~dp0.agents\skills\design-taste-frontend\scripts\lint.mjs" "wp-content/themes/hello-elementor"
) else (
    node "%~dp0.agents\skills\design-taste-frontend\scripts\lint.mjs" %*
)
