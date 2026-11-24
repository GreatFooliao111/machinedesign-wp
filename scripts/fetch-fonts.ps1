# MachineDesign Precision v2.0 — Self-Hosted Font Fetcher (Iran-Optimized)
# Downloads Vazirmatn Variable WOFF2 + JetBrains Mono Regular/Bold WOFF2 directly into theme assets/fonts/
$ErrorActionPreference = "Stop"
$FontsDir = Join-Path $PSScriptRoot "..\wp-content\themes\machinedesign-theme\assets\fonts"
New-Item -ItemType Directory -Force -Path $FontsDir | Out-Null

$Downloads = @{
    "Vazirmatn-Variable.woff2"   = "https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/fonts/webfonts/Vazirmatn[wght].woff2"
    "JetBrainsMono-Regular.woff2" = "https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono@v2.304/fonts/webfonts/JetBrainsMono-Regular.woff2"
    "JetBrainsMono-Bold.woff2"    = "https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono@v2.304/fonts/webfonts/JetBrainsMono-Bold.woff2"
}

foreach ($Name in $Downloads.Keys) {
    $Dest = Join-Path $FontsDir $Name
    Write-Host "Downloading $Name..."
    Invoke-WebRequest -Uri $Downloads[$Name] -OutFile $Dest
}
Write-Host "All self-hosted fonts installed in $FontsDir. functions.php will automatically switch to local fonts!"
