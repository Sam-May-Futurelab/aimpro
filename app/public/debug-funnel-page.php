<?php
/**
 * Debug script for Streamline Sales Funnel page
 * Access this file directly to check the page setup
 */

// Include WordPress
require_once __DIR__ . '/wp-config.php';

echo "<h1>Streamline Sales Funnel Page Debug</h1>";

// Check if page exists
$page = get_page_by_path('streamline-sales-funnel');
if ($page) {
    echo "<h2>✅ Page Found</h2>";
    echo "<p><strong>Page ID:</strong> " . $page->ID . "</p>";
    echo "<p><strong>Page Title:</strong> " . $page->post_title . "</p>";
    echo "<p><strong>Page Status:</strong> " . $page->post_status . "</p>";
    echo "<p><strong>Template:</strong> " . get_page_template_slug($page->ID) . "</p>";
    
    // Check meta fields
    echo "<h2>Meta Fields Status</h2>";
    $meta_fields = [
        'streamline_sales_funnel_header_title',
        'streamline_sales_funnel_header_subtitle',
        'streamline_sales_funnel_overview_title',
        'streamline_sales_funnel_overview_description',
        'streamline_sales_funnel_cta_title'
    ];
    
    foreach ($meta_fields as $field) {
        $value = get_post_meta($page->ID, $field, true);
        $status = !empty($value) ? "✅ Has content" : "❌ Empty";
        echo "<p><strong>$field:</strong> $status</p>";
        if (!empty($value)) {
            echo "<p style='margin-left: 20px; color: #666;'>" . substr($value, 0, 100) . "...</p>";
        }
    }
    
    echo "<h2>Template Files</h2>";
    $template_file = locate_template('page-streamline-sales-funnel.php');
    echo "<p><strong>Template File:</strong> " . ($template_file ? "✅ Found: $template_file" : "❌ Missing") . "</p>";
    
    $meta_file = get_template_directory() . '/includes/streamline-sales-funnel-meta.php';
    echo "<p><strong>Meta File:</strong> " . (file_exists($meta_file) ? "✅ Found: $meta_file" : "❌ Missing") . "</p>";
    
} else {
    echo "<h2>❌ Page Not Found</h2>";
    echo "<p>The 'streamline-sales-funnel' page does not exist. Please create it in WordPress admin.</p>";
}

echo "<h2>Next Steps</h2>";
echo "<ol>";
echo "<li>Go to WordPress Admin → Pages</li>";
echo "<li>Find or create the 'Streamline Sales Funnel' page</li>";
echo "<li>Set the page template to 'Streamline Sales Funnel Solution Page'</li>";
echo "<li>The meta fields should now show with default content</li>";
echo "<li>Update and save the page</li>";
echo "</ol>";
?>