# PowerShell script to remove trailing comments from PHP meta files
# This fixes the "not a valid JSON response" error by removing output after PHP closing

$includesPath = "C:\Users\Sam\Local Sites\aimpro\app\public\wp-content\themes\aimpro\includes"
$phpFiles = Get-ChildItem -Path $includesPath -Filter "*.php"

Write-Host "Fixing trailing comments in PHP meta files..." -ForegroundColor Green

foreach ($file in $phpFiles) {
    $content = Get-Content $file.FullName -Raw
    $lines = Get-Content $file.FullName
    
    # Check if file ends with comments after PHP closing
    $lastNonEmptyLine = ""
    $lastNonEmptyIndex = -1
    
    for ($i = $lines.Length - 1; $i -ge 0; $i--) {
        $line = $lines[$i].Trim()
        if ($line -ne "") {
            $lastNonEmptyLine = $line
            $lastNonEmptyIndex = $i
            break
        }
    }
    
    # If last non-empty line is a comment, find the closing brace and truncate there
    if ($lastNonEmptyLine.StartsWith("//") -or $lastNonEmptyLine.StartsWith("#") -or $lastNonEmptyLine.StartsWith("*")) {
        Write-Host "Found trailing comments in: $($file.Name)" -ForegroundColor Yellow
        
        # Find the last closing brace
        for ($i = $lastNonEmptyIndex - 1; $i -ge 0; $i--) {
            $line = $lines[$i].Trim()
            if ($line -eq "}") {
                # Truncate the file at this line
                $newContent = $lines[0..$i] -join "`r`n"
                Set-Content -Path $file.FullName -Value $newContent -NoNewline
                Write-Host "Fixed: $($file.Name)" -ForegroundColor Green
                break
            }
        }
    }
}

Write-Host "Trailing comment cleanup completed!" -ForegroundColor Green
