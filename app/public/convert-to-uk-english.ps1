# PowerShell script to convert American English to UK English in Aimpro theme files
# Run this from the WordPress installation directory

$themePath = "wp-content\themes\aimpro"
$replacementFile = "american-to-uk-replacements.txt"

# Define the replacements
$replacements = @{
    # Optimization family
    "optimize" = "optimise"
    "optimizes" = "optimises" 
    "optimized" = "optimised"
    "optimizing" = "optimising"
    "optimization" = "optimisation"
    "optimizations" = "optimisations"
    
    # Analysis family
    "analyze" = "analyse"
    "analyzes" = "analyses"
    "analyzed" = "analysed"
    "analyzing" = "analysing"
    
    # Organization family
    "organize" = "organise"
    "organizes" = "organises"
    "organized" = "organised"
    "organizing" = "organising"
    "organization" = "organisation"
    "organizations" = "organisations"
    "organizational" = "organisational"
    
    # Utilization family
    "utilize" = "utilise"
    "utilizes" = "utilises"
    "utilized" = "utilised"
    "utilizing" = "utilising"
    "utilization" = "utilisation"
    
    # Realization family
    "realize" = "realise"
    "realizes" = "realises"
    "realized" = "realised"
    "realizing" = "realising"
    "realization" = "realisation"
    
    # Specialization family
    "specialize" = "specialise"
    "specializes" = "specialises"
    "specialized" = "specialised"
    "specializing" = "specialising"
    "specialization" = "specialisation"
    
    # Maximization family
    "maximize" = "maximise"
    "maximizes" = "maximises"
    "maximized" = "maximised"
    "maximizing" = "maximising"
    "maximization" = "maximisation"
    
    # Minimization family
    "minimize" = "minimise"
    "minimizes" = "minimises"
    "minimized" = "minimised"
    "minimizing" = "minimising"
    "minimization" = "minimisation"
    
    # Stabilization family
    "stabilize" = "stabilise"
    "stabilizes" = "stabilises"
    "stabilized" = "stabilised"
    "stabilizing" = "stabilising"
    "stabilization" = "stabilisation"
    
    # Mobilization family  
    "mobilize" = "mobilise"
    "mobilizes" = "mobilises"
    "mobilized" = "mobilised"
    "mobilizing" = "mobilising"
    "mobilization" = "mobilisation"
    
    # Priority family
    "prioritize" = "prioritise"
    "prioritizes" = "prioritises"
    "prioritized" = "prioritised"
    "prioritizing" = "prioritising"
    "prioritization" = "prioritisation"
    
    # Color family (only text content, not CSS properties)
    # "color" = "colour"  # Commented out as this affects CSS
    
    # Recognition family
    "recognize" = "recognise"
    "recognizes" = "recognises"
    "recognized" = "recognised"
    "recognizing" = "recognising"
    
    # Behavior family
    "behavior" = "behaviour"
    "behaviors" = "behaviours"
    "behavioral" = "behavioural"
    
    # Honor family
    "honor" = "honour"
    "honors" = "honours"
    "honored" = "honoured"
    "honoring" = "honouring"
    
    # Favor family
    "favor" = "favour"
    "favors" = "favours"
    "favored" = "favoured"
    "favoring" = "favouring"
    
    # Center family
    "center" = "centre"
    "centers" = "centres"
    "centered" = "centred"
    "centering" = "centring"
    
    # Meter family
    "meter" = "metre"
    "meters" = "metres"
    
    # Theater family
    "theater" = "theatre"
    "theaters" = "theatres"
    
    # License family (verb - noun is already licence in UK)
    # Be careful with this one as it can be verb or noun
    
    # Defense family
    "defense" = "defence"
    "defenses" = "defences"
    
    # Offense family
    "offense" = "offence"
    "offenses" = "offences"
}

# Get all PHP files in the theme directory
$phpFiles = Get-ChildItem -Path $themePath -Filter "*.php" -Recurse

Write-Host "Found $($phpFiles.Count) PHP files to process"

$totalReplacements = 0

foreach ($file in $phpFiles) {
    Write-Host "Processing: $($file.FullName)"
    
    $content = Get-Content -Path $file.FullName -Raw
    $originalContent = $content
    $fileReplacements = 0
    
    # Apply each replacement
    foreach ($american in $replacements.Keys) {
        $british = $replacements[$american]
        
        # Count occurrences before replacement
        $beforeCount = ($content | Select-String -Pattern $american -AllMatches).Matches.Count
        
        # Perform case-sensitive replacement for whole words only
        $content = $content -creplace "\b$american\b", $british
        
        # Count occurrences after replacement  
        $afterCount = ($content | Select-String -Pattern $american -AllMatches).Matches.Count
        
        $replaced = $beforeCount - $afterCount
        if ($replaced -gt 0) {
            Write-Host "  Replaced $replaced instances of '$american' with '$british'"
            $fileReplacements += $replaced
        }
    }
    
    # Write back to file if changes were made
    if ($content -ne $originalContent) {
        Set-Content -Path $file.FullName -Value $content -NoNewline
        Write-Host "  Total replacements in file: $fileReplacements"
        $totalReplacements += $fileReplacements
    } else {
        Write-Host "  No changes needed"
    }
}

Write-Host ""
Write-Host "Conversion complete!"
Write-Host "Total replacements made: $totalReplacements"
Write-Host ""
Write-Host "Files processed:"
foreach ($file in $phpFiles) {
    Write-Host "  $($file.Name)"
}
