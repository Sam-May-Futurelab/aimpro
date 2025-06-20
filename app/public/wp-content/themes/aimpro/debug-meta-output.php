<?php
/**
 * Debug script to identify which meta file is causing output issues
 * This will help us find the source of the "not a valid JSON response" error
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

$meta_files = array(
    '/includes/contact-meta.php',
    '/includes/author-settings-meta.php',
    '/includes/about-meta.php',
    '/includes/company-meta.php',
    '/includes/team-meta.php',
    '/includes/landing-pages-meta.php',
    '/includes/testimonials-meta.php',
    '/includes/careers-meta.php',
    '/includes/partner-meta.php',
    '/includes/resources-meta.php',
    '/includes/blog-meta.php',
    '/includes/case-studies-meta.php',
    '/includes/templates-tools-meta.php',
    '/includes/events-webinars-meta.php',
    '/includes/training-mentoring-meta.php',
    '/includes/industries-meta.php',
    '/includes/automotive-meta.php',
    '/includes/home-garden-meta.php',
    '/includes/finance-meta.php',
    '/includes/professional-services-meta.php',
    '/includes/estate-agents-meta.php',
    '/includes/ecommerce-meta.php',
    '/includes/coaches-consultants-meta.php',
    '/includes/seo-services-meta.php',
    '/includes/google-ads-meta.php',
    '/includes/social-media-meta.php',
    '/includes/website-design-meta.php',
    '/includes/email-campaigns-meta.php',
    '/includes/funnel-automation-meta.php',
    '/includes/marketing-automation-meta.php',
    '/includes/funnel-builds-meta.php',
    '/includes/high-converting-website-meta.php',
    '/includes/lead-generation-meta.php',
    '/includes/improve-roi-ads-meta.php',
    '/includes/rank-higher-locally-meta.php',
    '/includes/automate-marketing-meta.php',
    '/includes/streamline-sales-funnel-meta.php',
    '/includes/solutions-meta.php',
    '/includes/white-label-seo-meta.php'
);

echo "Checking meta files for output issues...\n";

foreach ($meta_files as $file) {
    $full_path = get_template_directory() . $file;
    if (file_exists($full_path)) {
        echo "Checking: " . $file . "\n";
        
        // Start output buffering to catch any unwanted output
        ob_start();
        
        // Include the file
        include_once $full_path;
        
        // Get any output that was generated
        $output = ob_get_contents();
        ob_end_clean();
        
        if (!empty($output)) {
            echo "*** OUTPUT FOUND IN: " . $file . " ***\n";
            echo "Output: " . var_export($output, true) . "\n";
            echo "Length: " . strlen($output) . " characters\n";
            echo "---\n";
        }
    } else {
        echo "File not found: " . $file . "\n";
    }
}

echo "Check complete.\n";
?>
