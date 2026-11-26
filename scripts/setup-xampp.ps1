# MachineDesign TRUMPF v3.0 — Non-Admin Windows XAMPP Setup Script
$ErrorActionPreference = "Stop"
$WpRoot = "C:\xampp\htdocs\machinedesign"
$KitRoot = Split-Path -Parent $PSScriptRoot

$Pairs = @(
    @{ Src = Join-Path $KitRoot "src\plugins\machinedesign-core"; Dst = Join-Path $WpRoot "wp-content\plugins\machinedesign-core" },
    @{ Src = Join-Path $KitRoot "src\themes\machinedesign-trumpf"; Dst = Join-Path $WpRoot "wp-content\themes\machinedesign-trumpf" }
)

foreach ($P in $Pairs) {
    if (Test-Path $P.Dst) {
        Write-Host "Removing existing target: $($P.Dst)"
        cmd /c "rmdir /S /Q `"$($P.Dst)`""
    }
    Write-Host "Linking Junction: $($P.Dst) -> $($P.Src)"
    cmd /c "mklink /J `"$($P.Dst)`" `"$($P.Src)`""
    if ($LASTEXITCODE -ne 0) {
        Write-Host "Junction fallback: robocopy /MIR..."
        robocopy $P.Src $P.Dst /MIR /NFL /NDL /NJH /NJS | Out-Null
    }
}

# Download self-hosted Vazirmatn + JetBrains Mono WOFF2 into theme assets/fonts/
$FontsDir = Join-Path $KitRoot "src\themes\machinedesign-trumpf\assets\fonts"
New-Item -ItemType Directory -Force -Path $FontsDir | Out-Null
$Fonts = @{
    "Vazirmatn-Variable.woff2"    = "https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/fonts/webfonts/Vazirmatn[wght].woff2"
    "JetBrainsMono-Regular.woff2" = "https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono@v2.304/fonts/webfonts/JetBrainsMono-Regular.woff2"
    "JetBrainsMono-Bold.woff2"    = "https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono@v2.304/fonts/webfonts/JetBrainsMono-Bold.woff2"
}
foreach ($k in $Fonts.Keys) {
    $dest = Join-Path $FontsDir $k
    if (-not (Test-Path $dest)) {
        try { Invoke-WebRequest -Uri $Fonts[$k] -OutFile $dest } catch { Write-Warning "Font download skipped for $k (Google Fonts fallback active)." }
    }
}

Write-Host "Running PHP syntax lint across all plugin & theme PHP files..."
Get-ChildItem -Path (Join-Path $KitRoot "src") -Recurse -Filter "*.php" | ForEach-Object {
    & "C:\xampp\php\php.exe" -l $_.FullName
    if ($LASTEXITCODE -ne 0) { throw "PHP syntax error in $($_.FullName)" }
}
Write-Host "SUCCESS: MachineDesign TRUMPF v3.0 linked and verified with 0 PHP errors."
