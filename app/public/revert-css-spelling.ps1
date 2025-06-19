# PowerShell script to revert CSS-related terms back to American spelling
# This fixes centering issues while keeping content in UK English

$themeDir = "c:\Users\Sam\Local Sites\aimpro\app\public\wp-content\themes\aimpro"

# CSS and class name terms that need to be American spelling
$cssReplacements = @{
    'text-centre' = 'text-center'
    'centre-' = 'center-'
    'justify-centre' = 'justify-center'
    'align-centre' = 'align-center'
    'centred' = 'centered'
    'centre-block' = 'center-block'
    'centre-text' = 'center-text'
    'centre-content' = 'center-content'
    'centre-items' = 'center-items'
    'centre-vertical' = 'center-vertical'
    'centre-horizontal' = 'center-horizontal'
    'centre-flex' = 'center-flex'
    'centre-grid' = 'center-grid'
    'centre-auto' = 'center-auto'
    'centre-align' = 'center-align'
    'wp-block-group__inner-container.centre' = 'wp-block-group__inner-container.center'
    'class="centre' = 'class="center'
    'class=''centre' = 'class=''center'
    'class="text-centre' = 'class="text-center'
    'class=''text-centre' = 'class=''text-center'
    '"centre"' = '"center"'
    '''centre''' = '''center'''
    'style="text-align: centre' = 'style="text-align: center'
    'text-align:centre' = 'text-align:center'
    'text-align: centre' = 'text-align: center'
    'justify-content: centre' = 'justify-content: center'
    'align-items: centre' = 'align-items: center'
    'margin: 0 auto; text-align: centre' = 'margin: 0 auto; text-align: center'
}

Write-Host "Starting CSS spelling reversion in theme directory: $themeDir" -ForegroundColor Green

# Get all PHP, CSS, and JS files
$files = Get-ChildItem -Path $themeDir -Include "*.php", "*.css", "*.js" -Recurse

foreach ($file in $files) {
    $content = Get-Content -Path $file.FullName -Raw -Encoding UTF8
    $originalContent = $content
    
    # Apply CSS-related replacements
    foreach ($replacement in $cssReplacements.GetEnumerator()) {
        $content = $content -replace [regex]::Escape($replacement.Key), $replacement.Value
    }
    
    # Only write if content changed
    if ($content -ne $originalContent) {
        Set-Content -Path $file.FullName -Value $content -Encoding UTF8
        Write-Host "Updated: $($file.FullName)" -ForegroundColor Yellow
    }
}

Write-Host "CSS spelling reversion completed!" -ForegroundColor Green
Write-Host "All CSS-related terms have been reverted to American spelling for proper functionality." -ForegroundColor Cyan
