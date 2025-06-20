# PowerShell script to fix UK CSS spelling issues in WordPress theme
# This fixes colour -> color and centre -> center in CSS within PHP files

$rootPath = "C:\Users\Sam\Local Sites\aimpro\app\public\wp-content\themes\aimpro"

# Get all PHP files in includes directory
$phpFiles = Get-ChildItem -Path "$rootPath\includes" -Filter "*.php" -Recurse

Write-Host "Fixing CSS spelling issues in PHP files..." -ForegroundColor Green

foreach ($file in $phpFiles) {
    $content = Get-Content $file.FullName -Raw
    $originalContent = $content
    
    # Fix CSS colour -> color (but not in content text)
    $content = $content -replace '(\s+|\{|;)colour(\s*:\s*)', '${1}color${2}'
    
    # Fix CSS centre -> center (but not in content text)  
    $content = $content -replace '(\s+|\{|;)text-centre(\s*;)', '${1}text-center${2}'
    $content = $content -replace '(\s+|\{|;)centre(\s*:\s*)', '${1}center${2}'
    
    if ($content -ne $originalContent) {
        Set-Content -Path $file.FullName -Value $content -NoNewline
        Write-Host "Fixed CSS in: $($file.Name)" -ForegroundColor Yellow
    }
}

Write-Host "CSS spelling fixes completed!" -ForegroundColor Green
Write-Host "Note: This only fixes CSS properties, not content text." -ForegroundColor Cyan
