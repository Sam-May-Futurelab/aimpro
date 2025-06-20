# PowerShell script to remove BOM (Byte Order Mark) from PHP files
# BOM characters cause "not a valid JSON response" errors in WordPress

$includesPath = "C:\Users\Sam\Local Sites\aimpro\app\public\wp-content\themes\aimpro\includes"
$phpFiles = Get-ChildItem -Path $includesPath -Filter "*.php"

Write-Host "Removing BOM characters from PHP files..." -ForegroundColor Green

foreach ($file in $phpFiles) {
    $bytes = [System.IO.File]::ReadAllBytes($file.FullName)
    
    # Check if file starts with UTF-8 BOM (EF BB BF)
    if ($bytes.Length -ge 3 -and $bytes[0] -eq 0xEF -and $bytes[1] -eq 0xBB -and $bytes[2] -eq 0xBF) {
        Write-Host "Removing BOM from: $($file.Name)" -ForegroundColor Yellow
        
        # Remove the first 3 bytes (BOM)
        $newBytes = $bytes[3..($bytes.Length-1)]
        [System.IO.File]::WriteAllBytes($file.FullName, $newBytes)
        
        Write-Host "Fixed: $($file.Name)" -ForegroundColor Green
    }
}

Write-Host "BOM removal completed!" -ForegroundColor Green
