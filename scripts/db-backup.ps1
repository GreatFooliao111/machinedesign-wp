<#
.SYNOPSIS
    Automated MySQL / MariaDB backup script for MachineDesign.ir
.DESCRIPTION
    Dumps the active local database (machinedesign_local) with utf8mb4 character set
    and saves timestamped copies to D:\Machinedesign.ir\database-backups\
#>

param (
    [string]$DbName = "machinedesign_local",
    [string]$DbUser = "root",
    [string]$DbHost = "localhost",
    [string]$BackupDir = "D:\Machinedesign.ir\database-backups",
    [string]$MysqldumpPath = "C:\xampp\mysql\bin\mysqldump.exe"
)

$ErrorActionPreference = "Stop"

if (-not (Test-Path $BackupDir)) {
    New-Item -ItemType Directory -Path $BackupDir -Force | Out-Null
}

$Timestamp = Get-Date -Format "yyyy_MM_dd_HHmmss"
$TargetFile = Join-Path $BackupDir "${DbName}_backup_${Timestamp}.sql"
$LatestFile = Join-Path $BackupDir "${DbName}_latest.sql"

Write-Host "Starting database backup for [$DbName]..." -ForegroundColor Cyan

if (-not (Test-Path $MysqldumpPath)) {
    Write-Error "mysqldump executable not found at: $MysqldumpPath"
    exit 1
}

# Run mysqldump with complete schema, data and utf8mb4 encoding
& $MysqldumpPath -u $DbUser -h $DbHost --default-character-set=utf8mb4 --single-transaction --quick $DbName | Set-Content -Path $TargetFile -Encoding utf8

if (Test-Path $TargetFile) {
    Copy-Item -Path $TargetFile -Destination $LatestFile -Force
    $Size = (Get-Item $TargetFile).Length / 1MB
    Write-Host "Backup completed successfully!" -ForegroundColor Green
    Write-Host "Saved to: $TargetFile ($([math]::Round($Size, 2)) MB)" -ForegroundColor Yellow
    Write-Host "Updated: $LatestFile" -ForegroundColor Yellow
} else {
    Write-Error "Target backup file was not created."
}
