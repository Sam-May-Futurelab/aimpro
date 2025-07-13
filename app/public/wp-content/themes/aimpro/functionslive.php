<?php
/**
 * Aimpro Digital Theme Functions
 * Enhanced with performance optimisations and SEO features
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function aimpro_theme_setup() {
    // Add theme support for various features
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo');
    
    // Add custom image sizes
    add_image_size('hero-image', 1920, 800, true);
    add_image_size('service-image', 400, 300, true);
    add_image_size('team-image', 300, 300, true);
}
add_action('after_setup_theme', 'aimpro_theme_setup');

/**
 * Create database table for form submissions
 */
function aimpro_create_submissions_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        form_type varchar(50) NOT NULL,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20) DEFAULT '',
        company varchar(100) DEFAULT '',
        message text DEFAULT '',
        ip_address varchar(45) DEFAULT '',
        user_agent text DEFAULT '',
        submission_date datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        KEY form_type (form_type),
        KEY email (email),
        KEY submission_date (submission_date)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    
    // Log table creation
    error_log('Aimpro submissions table created/updated');
}

// Create table on theme activation
add_action('after_switch_theme', 'aimpro_create_submissions_table');

// Also create table on theme setup if it doesn't exist
function aimpro_check_submissions_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        aimpro_create_submissions_table();
    }
}
add_action('wp_loaded', 'aimpro_check_submissions_table');

// Include contact page meta functionality
require_once get_template_directory() . '/includes/contact-meta.php';

// Include author settings meta functionality
require_once get_template_directory() . '/includes/author-settings-meta.php';

// Include homepage (index) meta functionality (IMPORTANT - DO NOT REMOVE)
require_once get_template_directory() . '/includes/index-meta.php';

// Include about page meta functionality
require_once get_template_directory() . '/includes/about-meta.php';

// Include AI CRM Setup page meta functionality
require_once get_template_directory() . '/includes/ai-crm-setup-meta.php';

// Include company page meta functionality
require_once get_template_directory() . '/includes/company-meta.php';

// Include team page meta functionality
require_once get_template_directory() . '/includes/team-meta.php';

// Include landing pages meta functionality
require_once get_template_directory() . '/includes/landing-pages-meta.php';

// Include testimonials page meta functionality
require_once get_template_directory() . '/includes/testimonials-meta.php';
require_once get_template_directory() . '/includes/careers-meta.php';
require_once get_template_directory() . '/includes/partner-meta.php';
require_once get_template_directory() . '/includes/resources-meta.php';
require_once get_template_directory() . '/includes/blog-meta.php';
require_once get_template_directory() . '/includes/case-studies-meta.php';
require_once get_template_directory() . '/includes/templates-tools-meta.php';
require_once get_template_directory() . '/includes/events-webinars-meta-simple.php';
require_once get_template_directory() . '/includes/training-mentoring-meta.php';
require_once get_template_directory() . '/includes/services-meta.php';
require_once get_template_directory() . '/includes/industries-meta.php';
require_once get_template_directory() . '/includes/automotive-meta.php';
require_once get_template_directory() . '/includes/home-garden-meta.php';
require_once get_template_directory() . '/includes/website-design-meta.php';
require_once get_template_directory() . '/includes/website-development-meta.php';
require_once get_template_directory() . '/includes/finance-meta.php';
require_once get_template_directory() . '/includes/professional-services-meta.php';
require_once get_template_directory() . '/includes/estate-agents-meta.php';
require_once get_template_directory() . '/includes/coaches-consultants-meta.php';
require_once get_template_directory() . '/includes/ecommerce-meta.php';
require_once get_template_directory() . '/includes/solutions-meta.php';
require_once get_template_directory() . '/includes/lead-generation-meta.php';
require_once get_template_directory() . '/includes/improve-roi-ads-meta.php';
require_once get_template_directory() . '/includes/rank-higher-locally-meta.php';
require_once get_template_directory() . '/includes/automate-marketing-meta.php';
require_once get_template_directory() . '/includes/high-converting-website-meta.php';
require_once get_template_directory() . '/includes/pdf-download-handler.php';
require_once get_template_directory() . '/includes/chatbots-meta.php';
require_once get_template_directory() . '/includes/advertising-ppc-meta.php';
require_once get_template_directory() . '/includes/google-ads-meta.php';
require_once get_template_directory() . '/includes/meta-ads-meta.php';
require_once get_template_directory() . '/includes/microsoft-ads-meta.php';
require_once get_template_directory() . '/includes/retargeting-display-meta.php';
require_once get_template_directory() . '/includes/ppc-audit-meta.php';
require_once get_template_directory() . '/includes/seo-services-meta.php';
require_once get_template_directory() . '/includes/local-seo-meta.php';
require_once get_template_directory() . '/includes/seo-audit-meta.php';
require_once get_template_directory() . '/includes/technical-seo-meta.php';
require_once get_template_directory() . '/includes/on-page-seo-meta.php';
require_once get_template_directory() . '/includes/white-label-seo-meta.php';
require_once get_template_directory() . '/includes/email-sms-flows-meta.php';
require_once get_template_directory() . '/includes/locations-meta.php';
require_once get_template_directory() . '/includes/privacy-policy-meta.php';


// Include helper functions
require_once get_template_directory() . '/includes/helpers.php';

/**
 * Add custom image sizes for blog thumbnails
 */
function aimpro_add_image_sizes() {
    // Add a custom image size for blog cards
    add_image_size('blog-thumbnail', 600, 400, true);
    
    // Add support for featured images if not already added
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'aimpro_add_image_sizes');

/**
 * Filter the thumbnail size attributes to improve blog images
 */
function aimpro_filter_post_thumbnail_html($html, $post_id, $post_thumbnail_id, $size, $attr) {
    if ($size === 'medium_large' || $size === 'medium') {
        // Replace with our custom size for blog thumbnails
        $html = wp_get_attachment_image(
            $post_thumbnail_id,
            'blog-thumbnail',
            false,
            $attr
        );
    }
    return $html;
}
add_filter('post_thumbnail_html', 'aimpro_filter_post_thumbnail_html', 10, 5);

/**
 * Enqueue Scripts and Styles with Performance optimisations
 */
function aimpro_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');
    
    // Enqueue CSS variables first
    wp_enqueue_style('aimpro-variables', get_template_directory_uri() . '/assets/css/variables.css', array(), $theme_version);
    
    // Enqueue base styles for typography, resets, and base components
    wp_enqueue_style('aimpro-base', get_template_directory_uri() . '/assets/css/base.css', array('aimpro-variables'), $theme_version);
      // Enqueue animations
    wp_enqueue_style('aimpro-animations', get_template_directory_uri() . '/assets/css/animations.css', array('aimpro-variables'), $theme_version);
    
    // Enqueue scroll animations
    wp_enqueue_style('aimpro-scroll-animations', get_template_directory_uri() . '/assets/css/scroll-animations.css', array('aimpro-variables'), $theme_version);
      // Enqueue components
    wp_enqueue_style('aimpro-components', get_template_directory_uri() . '/assets/css/components.css', array('aimpro-base'), $theme_version);    // Enqueue UI elements
    wp_enqueue_style('aimpro-ui-elements', get_template_directory_uri() . '/assets/css/ui-elements.css', array('aimpro-base'), $theme_version);    
    
    // Enqueue button styles
    wp_enqueue_style('aimpro-buttons', get_template_directory_uri() . '/assets/css/buttons.css', array('aimpro-base'), $theme_version);
    
    // Enqueue modern header styles (replaces old header-menu.css) - load after buttons for proper overrides
    wp_enqueue_style('aimpro-header-modern', get_template_directory_uri() . '/assets/css/header-modern.css', array('aimpro-base', 'aimpro-buttons'), $theme_version);    
    
    // Enqueue mobile menu styles (loaded after header-modern for proper specificity)
    wp_enqueue_style('aimpro-mobile-menu', get_template_directory_uri() . '/assets/css/mobile-menu.css', array('aimpro-header-modern'), $theme_version);
    
    // Enqueue hero styles
    wp_enqueue_style('aimpro-hero', get_template_directory_uri() . '/assets/css/hero.css', array('aimpro-base'), $theme_version);
      // Enqueue section-specific styles
    wp_enqueue_style('aimpro-visit-us', get_template_directory_uri() . '/assets/css/sections/visit-us.css', array('aimpro-base'), $theme_version);
    wp_enqueue_style('aimpro-value-statement', get_template_directory_uri() . '/assets/css/sections/value-statement.css', array('aimpro-base'), $theme_version);
    
    // Enqueue footer styles
    wp_enqueue_style('aimpro-footer', get_template_directory_uri() . '/assets/css/footer.css', array('aimpro-base'), $theme_version);
    
    // Enqueue footer components styles (CTA buttons, theme toggle)
    wp_enqueue_style('aimpro-footer-components', get_template_directory_uri() . '/assets/css/footer-components.css', array('aimpro-footer', 'aimpro-buttons'), $theme_version);
      // Enqueue contact form styles
    wp_enqueue_style('aimpro-contact-form', get_template_directory_uri() . '/assets/css/contact-form.css', array('aimpro-base'), $theme_version);
    
    // Enqueue responsive styles (should be loaded last)
    wp_enqueue_style('aimpro-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array('aimpro-base'), $theme_version);
    
    // Enqueue premium cursor styles (global)
    wp_enqueue_style('aimpro-premium-cursor', get_template_directory_uri() . '/assets/css/premium-cursor.css', array('aimpro-variables'), $theme_version);
    
    // Header overrides disabled - consolidated into header-modern.css
    // wp_enqueue_style('aimpro-header-overrides', get_template_directory_uri() . '/assets/css/header-overrides.css', array('aimpro-header-modern', 'aimpro-buttons'), $theme_version);
    
    // Enqueue ebook/lead magnet styles
    wp_enqueue_style('aimpro-ebook', get_template_directory_uri() . '/assets/css/ebook.css', array('aimpro-base'), $theme_version . '-' . time());
    
    // Enqueue insights styles
    wp_enqueue_style('aimpro-insights', get_template_directory_uri() . '/assets/css/insights.css', array('aimpro-base'), $theme_version . '-' . time());
    
    // Enqueue blog styles
    wp_enqueue_style('aimpro-blog', get_template_directory_uri() . '/assets/css/blog.css', array('aimpro-base'), $theme_version . '-' . time());
    
    // Enqueue blog post template styles (for single posts only)
    if (is_single()) {
        wp_enqueue_style('aimpro-blog-post', get_template_directory_uri() . '/assets/css/blog-post.css', array('aimpro-base'), $theme_version . '-' . time());
    }// Enqueue service pages styles with forced refresh
    wp_enqueue_style('aimpro-service-pages', get_template_directory_uri() . '/assets/css/service-pages.css', array('aimpro-base'), $theme_version . '-' . time() . rand(100, 999));

    // Enqueue solutions pages styles
    wp_enqueue_style('aimpro-solutions-pages', get_template_directory_uri() . '/assets/css/solutions-pages.css', array('aimpro-base'), $theme_version . '-' . time() . rand(100, 999));
      // Enqueue resource pages styles
    wp_enqueue_style('aimpro-resource-pages', get_template_directory_uri() . '/assets/css/resource-pages.css', array('aimpro-base', 'aimpro-variables'), $theme_version . '-' . time() . rand(100, 999));
      // Enqueue about/company pages styles
    wp_enqueue_style('aimpro-about-pages', get_template_directory_uri() . '/assets/css/about-pages.css', array('aimpro-base', 'aimpro-variables'), $theme_version . '-' . time() . rand(100, 999));      // Enqueue industry pages styles
    wp_enqueue_style('aimpro-industry-pages', get_template_directory_uri() . '/assets/css/industry-pages.css', array('aimpro-base', 'aimpro-variables'), $theme_version . '-' . time() . rand(100, 999));    
    // Enqueue SEO services styles
    wp_enqueue_style('aimpro-seo-services', get_template_directory_uri() . '/assets/css/seo-services.css', array('aimpro-base', 'aimpro-variables'), $theme_version . '-' . time() . rand(100, 999));    // Enqueue page template styles AFTER insights to ensure proper override
    wp_enqueue_style('aimpro-page-templates', get_template_directory_uri() . '/assets/css/page-templates.css', array('aimpro-base', 'aimpro-insights'), $theme_version . '-' . time());
      // Enqueue About page fix CSS - HIGHEST PRIORITY
    wp_enqueue_style('aimpro-about-fix', get_template_directory_uri() . '/assets/css/about-page-fix.css', array('aimpro-variables', 'aimpro-base', 'aimpro-page-templates'), $theme_version . '-' . time());
    
    // Enqueue Training and Mentoring page styles
    if (is_page('training-mentoring')) {
        wp_enqueue_style('aimpro-training-mentoring', get_template_directory_uri() . '/assets/css/training-mentoring.css', array('aimpro-variables', 'aimpro-base'), $theme_version . '-' . time() . rand(100, 999));
    }
    
    // Enqueue main style.css for backwards compatibility and WordPress theme recognition
    wp_enqueue_style('aimpro-style', get_stylesheet_uri(), array('aimpro-variables', 'aimpro-base'), $theme_version);
    
    // Preload critical fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null);    // Enqueue Lottie library for animations
    wp_enqueue_script('lottie-web', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js', array(), '5.12.2', true);
    
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');      // Enqueue scripts with proper dependencies and defer loading
    wp_enqueue_script('aimpro-main', get_template_directory_uri() . '/assets/js/main.js', array('lottie-web'), $theme_version, true);
    
    // Enqueue scroll animations
    wp_enqueue_script('aimpro-scroll-animations', get_template_directory_uri() . '/assets/js/scroll-animations.js', array(), $theme_version, true);
    
    // Enqueue premium cursor JavaScript (global)
    wp_enqueue_script('aimpro-premium-cursor', get_template_directory_uri() . '/assets/js/premium-cursor.js', array(), $theme_version, true);
      // Note: Removed JS-based menu enhancements to use pure CSS solution
    // mega-menu.js removed as it was causing navigation conflicts and isn't needed for current navigation structure
      // Add inline script for critical path optimisation
    $inline_script = "
        if (document.documentElement) {
            document.documentElement.classList.add('js');
        }
        if ('IntersectionObserver' in window && document.documentElement) {
            document.documentElement.classList.add('intersection-observer');
        }
    ";
    wp_add_inline_script('aimpro-main', $inline_script, 'before');
    
    // Localize script for AJAX and theme data
    wp_localize_script('aimpro-main', 'aimpro_data', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('aimpro_nonce'),
        'theme_url' => get_template_directory_uri(),
        'site_url' => home_url('/')
    ));
}
add_action('wp_enqueue_scripts', 'aimpro_enqueue_assets');

/**
 * Enhanced SEO and Performance Functions
 */

// Add structured data for business
function aimpro_add_structured_data() {
    $structured_data = array(
        '@context' => 'https://schema.org',
        '@type' => 'DigitalMarketingBusiness',
        'name' => 'Aimpro Digital',
        'description' => 'Premier digital marketing agency specialising in SEO, PPC, social media marketing, and web development.',
        'url' => home_url('/'),
        'logo' => get_template_directory_uri() . '/assets/images/logo.png',
        'sameAs' => array(
            'https://facebook.com/aimprodigital',
            'https://twitter.com/aimprodigital',
            'https://linkedin.com/company/aimprodigital',
            'https://instagram.com/aimprodigital'
        ),
        'contactPoint' => array(
            '@type' => 'ContactPoint',
            'telephone' => '+1-555-0123',
            'contactType' => 'customer service',
            'availableLanguage' => 'English'
        ),
        'address' => array(
            '@type' => 'PostalAddress',
            'addressLocality' => 'Your City',
            'addressRegion' => 'Your State',
            'addressCountry' => 'US'
        ),
        'founder' => array(
            '@type' => 'Person',
            'name' => 'Ajay Dhunna'
        )
    );
    
    echo '<script type="application/ld+json">' . json_encode($structured_data, JSON_UNESCAPED_SLASHES) . '</script>';
}
add_action('wp_head', 'aimpro_add_structured_data');

// Add preload hints for performance
function aimpro_add_resource_hints() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link rel="dns-prefetch" href="//google-analytics.com">';
    echo '<link rel="dns-prefetch" href="//googletagmanager.com">';
}
add_action('wp_head', 'aimpro_add_resource_hints', 1);

// optimise CSS delivery
function aimpro_optimise_css_delivery() {
    echo '<style id="critical-css">
        body{font-family:"Inter",sans-serif;margin:0;padding:0;line-height:1.6;color:#1a1a1a}
        .sticky-header{position:fixed;top:0;width:100%;z-index:1000;transition:all 0.3s ease}
        .hero-section{min-height:100vh;display:flex;align-items:center;background:linear-gradient(135deg,#667eea 0%,#764ba2 100%)}
    </style>';
}
add_action('wp_head', 'aimpro_optimise_css_delivery', 2);

// Add security headers
function aimpro_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
}
add_action('send_headers', 'aimpro_security_headers');

// optimise WordPress for performance
function aimpro_optimise_wordpress() {
    // Remove unnecessary WordPress features
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    
    // Disable emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    
    // Remove jQuery migrate
    function remove_jquery_migrate($scripts) {
        if (!is_admin() && isset($scripts->registered['jquery'])) {
            $script = $scripts->registered['jquery'];
            if ($script->deps) {
                $script->deps = array_diff($script->deps, array('jquery-migrate'));
            }
        }
    }
    add_action('wp_default_scripts', 'remove_jquery_migrate');
}
add_action('init', 'aimpro_optimise_wordpress');

// Add custom post type for testimonials (if needed)
function aimpro_register_post_types() {
    // Register Testimonials post type
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
        'show_in_rest' => true
    ));
    
    // Register Insights post type
    register_post_type('insight', array(
        'labels' => array(
            'name' => 'Insights',
            'singular_name' => 'Insight',
            'add_new' => 'Add New Insight',
            'add_new_item' => 'Add New Insight',
            'edit_item' => 'Edit Insight',
            'view_item' => 'View Insight',
            'search_items' => 'Search Insights',
            'not_found' => 'No insights found',
            'not_found_in_trash' => 'No insights found in trash'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'insights'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-lightbulb',
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
        'show_in_rest' => true    ));
}
add_action('init', 'aimpro_register_post_types');

// Add meta box for Insight Read Time
function aimpro_add_insight_meta_boxes() {
    add_meta_box(
        'insight_read_time',
        'Insight Details',
        'aimpro_insight_meta_box_callback',
        'insight',
        'side',
        'high'
    );
}
add_action('add_meta_boxes', 'aimpro_add_insight_meta_boxes');

// Insight meta box callback function
function aimpro_insight_meta_box_callback($post) {
    wp_nonce_field('aimpro_save_insight_meta', 'aimpro_insight_meta_nonce');
    $read_time = get_post_meta($post->ID, 'insight_read_time', true);
    $is_featured = get_post_meta($post->ID, 'insight_featured', true);
    echo '<p>';
    echo '<label for="insight_read_time">Read Time (in minutes):</label>';
    echo '<input type="number" id="insight_read_time" name="insight_read_time" min="1" max="60" value="' . esc_attr($read_time ? $read_time : '5') . '">';
    echo '</p>';
    echo '<p>';
    echo '<input type="checkbox" id="insight_featured" name="insight_featured" value="1" ' . checked($is_featured, '1', false) . '>';
    echo '<label for="insight_featured">Feature this insight</label>';
    echo '<span class="description">(Shows in large featured area)</span>';
    echo '</p>';
}

// Save insight meta data
function aimpro_save_insight_meta($post_id) {
    // Check if nonce is set and valid
    if (!isset($_POST['aimpro_insight_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_insight_meta_nonce'], 'aimpro_save_insight_meta')) {
        return;
    }
    
    // Check if autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save read time
    if (isset($_POST['insight_read_time'])) {
        update_post_meta($post_id, 'insight_read_time', sanitize_text_field($_POST['insight_read_time']));
    }
    
    // Save featured status
    $featured = isset($_POST['insight_featured']) ? '1' : '0';
    update_post_meta($post_id, 'insight_featured', $featured);
}
add_action('save_post_insight', 'aimpro_save_insight_meta');

// Helper function to get insight read time
function aimpro_get_read_time($post_id) {
    $read_time = get_post_meta($post_id, 'insight_read_time', true);
    return $read_time ? $read_time : '5';
}

// Handle Main Contact Form Submission
function aimpro_handle_contact_form() {
    if (!isset($_POST['contact_form']) || !wp_verify_nonce($_POST['contact_nonce'], 'contact_submission')) {
        return;
    }
    
    // Sanitize and validate input
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $referral = sanitize_text_field($_POST['referral']);
    $message = sanitize_textarea_field($_POST['query']);
    
    if (empty($name) || empty($email) || !is_email($email)) {
        wp_redirect(add_query_arg('contact_error', '1', $_POST['_wp_http_referer']));
        exit;
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    // Store in database
    $result = $wpdb->insert(
        $table_name,
        array(
            'form_type' => 'contact',
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'referral' => $referral,
            'message' => $message,
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT']
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    if ($result) {        // Send email notification to admin
        $to = 'hello@aimpro.co.uk';
        $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
        $message_body = "New contact form submission:\n\n";
        $message_body .= "Name: {$name}\n";
        $message_body .= "Email: {$email}\n";
        $message_body .= "Phone: {$phone}\n";
        $message_body .= "Found us via: {$referral}\n";
        $message_body .= "Message: {$message}\n";
        $message_body .= "IP Address: {$_SERVER['REMOTE_ADDR']}\n";
        $message_body .= "Date: " . current_time('mysql') . "\n";
        
        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . get_bloginfo('name') . ' <noreply@' . parse_url(home_url(), PHP_URL_HOST) . '>',
            'Reply-To: ' . $email
        );
        
        wp_mail($to, $subject, $message_body, $headers);
        
        // Send auto-response to user
        $user_subject = 'Thank you for contacting us - ' . get_bloginfo('name');
        $user_message = "Hi {$name},\n\n";
        $user_message .= "Thank you for getting in touch with us!\n\n";
        $user_message .= "We've received your message and one of our team members will respond within 24 hours.\n\n";        $user_message .= "In the meantime, feel free to check out our latest insights and case studies on our website.\n\n";
        $user_message .= "Best regards,\n";
        $user_message .= "The Aimpro Team\n";
        $user_message .= "hello@aimpro.co.uk\n";
        $user_message .= "Phone: +44 121 285 8490";
        
        $user_headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Aimpro Digital <hello@aimpro.co.uk>'
        );
        
        wp_mail($email, $user_subject, $user_message, $user_headers);
        
        wp_redirect(add_query_arg('contact_success', '1', $_POST['_wp_http_referer']));
    } else {
        wp_redirect(add_query_arg('contact_error', '1', $_POST['_wp_http_referer']));
    }
    exit;
}
add_action('admin_post_contact_form', 'aimpro_handle_contact_form');
add_action('admin_post_nopriv_contact_form', 'aimpro_handle_contact_form');

// Handle Partnership Application Form
function aimpro_handle_partnership_form() {
    if (!isset($_POST['partnership_form_nonce']) || !wp_verify_nonce($_POST['partnership_form_nonce'], 'partnership_form_nonce')) {
        wp_die('Security check failed. Please try again.');
    }
    
    // Sanitize and validate input
    $company_name = sanitize_text_field($_POST['company_name']);
    $contact_name = sanitize_text_field($_POST['contact_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $website = esc_url_raw($_POST['website']);
    $company_size = sanitize_text_field($_POST['company_size']);
    $partnership_type = sanitize_text_field($_POST['partnership_type']);
    $business_description = sanitize_textarea_field($_POST['business_description']);
    $partnership_goals = sanitize_textarea_field($_POST['partnership_goals']);
    $current_clients = sanitize_textarea_field($_POST['current_clients']);
    
    // Validate required fields
    if (empty($company_name) || empty($contact_name) || empty($email) || empty($phone) || 
        empty($partnership_type) || empty($business_description) || empty($partnership_goals) || 
        !is_email($email)) {
        wp_redirect(add_query_arg('partnership_error', '1', $_POST['_wp_http_referer']));
        exit;
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    // Store in database
    $result = $wpdb->insert(
        $table_name,
        array(
            'form_type' => 'partnership',
            'name' => $contact_name,
            'email' => $email,
            'phone' => $phone,
            'company' => $company_name,
            'message' => "Partnership Type: {$partnership_type}\n\n" .
                        "Company Size: {$company_size}\n\n" .
                        "Website: {$website}\n\n" .
                        "Business Description: {$business_description}\n\n" .
                        "Partnership Goals: {$partnership_goals}\n\n" .
                        "Current Clients: {$current_clients}",
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT']
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    if ($result) {
        // Send email notification to admin
        $to = 'hello@aimpro.co.uk';
        $subject = 'New Partnership Application - ' . get_bloginfo('name');
        $message_body = "New partnership application submission:\n\n";
        $message_body .= "Company: {$company_name}\n";
        $message_body .= "Contact: {$contact_name}\n";
        $message_body .= "Email: {$email}\n";
        $message_body .= "Phone: {$phone}\n";
        $message_body .= "Website: {$website}\n";
        $message_body .= "Company Size: {$company_size}\n";
        $message_body .= "Partnership Type: {$partnership_type}\n\n";
        $message_body .= "Business Description:\n{$business_description}\n\n";
        $message_body .= "Partnership Goals:\n{$partnership_goals}\n\n";
        $message_body .= "Current Clients:\n{$current_clients}\n\n";
        $message_body .= "IP Address: {$_SERVER['REMOTE_ADDR']}\n";
        $message_body .= "Date: " . current_time('mysql') . "\n";
        
        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . get_bloginfo('name') . ' <noreply@' . parse_url(home_url(), PHP_URL_HOST) . '>',
            'Reply-To: ' . $email
        );
        
        wp_mail($to, $subject, $message_body, $headers);
        
        // Send auto-response to user
        $user_subject = 'Thank you for your partnership application - ' . get_bloginfo('name');
        $user_message = "Hi {$contact_name},\n\n";
        $user_message .= "Thank you for your interest in partnering with us!\n\n";
        $user_message .= "We've received your partnership application for {$company_name} and our partnership team will review your submission within 2-3 business days.\n\n";
        $user_message .= "We're excited about the potential opportunities to collaborate and will be in touch to discuss next steps.\n\n";
        $user_message .= "Best regards,\n";
        $user_message .= "The Aimpro Team\n";
        $user_message .= "hello@aimpro.co.uk\n";
        $user_message .= "Phone: +44 121 285 8490";
        
        $user_headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Aimpro Digital <hello@aimpro.co.uk>'
        );
        
        wp_mail($email, $user_subject, $user_message, $user_headers);
        
        wp_redirect(add_query_arg('partnership_success', '1', $_POST['_wp_http_referer']));
    } else {
        wp_redirect(add_query_arg('partnership_error', '1', $_POST['_wp_http_referer']));
    }
    exit;
}
add_action('admin_post_partnership_form', 'aimpro_handle_partnership_form');
add_action('admin_post_nopriv_partnership_form', 'aimpro_handle_partnership_form');

// Handle career application form submissions
function aimpro_handle_career_application() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['career_nonce'], 'career_application')) {
        wp_redirect(add_query_arg('career_error', '1', $_POST['_wp_http_referer']));
        exit;
    }

    // Sanitize form data
    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $position = sanitize_text_field($_POST['position']);
    $portfolio = esc_url_raw($_POST['portfolio']);
    $cover_letter = sanitize_textarea_field($_POST['cover_letter']);

    // Handle file upload
    $resume_info = '';
    if (!empty($_FILES['resume']['name'])) {
        $allowed_types = array('pdf', 'doc', 'docx');
        $file_extension = strtolower(pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION));
        
        if (in_array($file_extension, $allowed_types)) {
            $upload_dir = wp_upload_dir();
            $filename = $first_name . '_' . $last_name . '_resume_' . time() . '.' . $file_extension;
            $file_path = $upload_dir['path'] . '/' . $filename;
            
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $file_path)) {
                $resume_info = "Resume uploaded: " . $upload_dir['url'] . '/' . $filename;
            } else {
                $resume_info = "Resume upload failed";
            }
        } else {
            $resume_info = "Invalid file type for resume";
        }
    }

    // Prepare email content
    $subject = 'New Career Application - ' . $position;
    $message = "New career application received:\n\n";
    $message .= "Name: {$first_name} {$last_name}\n";
    $message .= "Email: {$email}\n";
    $message .= "Phone: {$phone}\n";
    $message .= "Position: {$position}\n";
    $message .= "Portfolio: {$portfolio}\n";
    $message .= "Cover Letter:\n{$cover_letter}\n\n";
    $message .= $resume_info . "\n";
    $message .= "Submitted from: " . site_url();

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <noreply@' . $_SERVER['HTTP_HOST'] . '>',
        'Reply-To: ' . $email
    );

    // Send to admin
    $admin_email = get_option('admin_email');
    $email_sent = wp_mail($admin_email, $subject, $message, $headers);

    // Send confirmation to applicant
    $user_subject = 'Application Received - ' . get_bloginfo('name');
    $user_message = "Dear {$first_name},\n\n";
    $user_message .= "Thank you for your interest in joining our team at Aimpro Digital.\n\n";
    $user_message .= "We have received your application for the {$position} position and will review it carefully. ";
    $user_message .= "If your qualifications match our current needs, we will contact you within 5-7 business days.\n\n";
    $user_message .= "Best regards,\n";
    $user_message .= "The Aimpro Digital Team\n";
    $user_message .= "careers@aimpro.co.uk";

    $user_headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: Aimpro Digital <careers@aimpro.co.uk>'
    );

    if ($email_sent) {
        wp_mail($email, $user_subject, $user_message, $user_headers);
        wp_redirect(add_query_arg('career_success', '1', $_POST['_wp_http_referer']));
    } else {
        wp_redirect(add_query_arg('career_error', '1', $_POST['_wp_http_referer']));
    }
    exit;
}
add_action('admin_post_career_application', 'aimpro_handle_career_application');
add_action('admin_post_nopriv_career_application', 'aimpro_handle_career_application');

// Handle Lead Magnet Form Submission
function aimpro_handle_lead_magnet_form() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['lead_magnet_nonce'], 'lead_magnet_nonce')) {
        wp_redirect(add_query_arg('lead_error', '1', $_POST['_wp_http_referer'] ?? wp_get_referer()));
        exit;
    }
    
    // Sanitize and validate input
    $email = sanitize_email($_POST['email']);
    $magnet_type = sanitize_text_field($_POST['magnet_type']);
    $pdf_id = isset($_POST['pdf_id']) ? intval($_POST['pdf_id']) : 0;
    $pdf_url = isset($_POST['pdf_url']) ? esc_url_raw($_POST['pdf_url']) : '';
    
    if (empty($email) || !is_email($email)) {
        wp_redirect(add_query_arg('lead_error', '1', $_POST['_wp_http_referer'] ?? wp_get_referer()));
        exit;
    }
    
    // If PDF is available, force download directly
    if (!empty($pdf_url) && $pdf_id) {
        // Get the file path
        $file_path = get_attached_file($pdf_id);
        
        if ($file_path && file_exists($file_path)) {
            // Store the download in database for tracking
            global $wpdb;
            $table_name = $wpdb->prefix . 'aimpro_submissions';
            
            $wpdb->insert(
                $table_name,
                array(
                    'form_type' => 'lead_magnet',
                    'name' => '',
                    'email' => $email,
                    'phone' => '',
                    'message' => $magnet_type,
                    'ip_address' => $_SERVER['REMOTE_ADDR'],
                    'user_agent' => $_SERVER['HTTP_USER_AGENT']
                ),
                array('%s', '%s', '%s', '%s', '%s', '%s', '%s')
            );
            
            // Force PDF download
            $filename = basename($file_path);
            
            // Set headers for PDF download
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            header('Content-Length: ' . filesize($file_path));
            header('Cache-Control: private, no-transform, no-store, must-revalidate');
            header('Pragma: no-cache');
            header('Expires: 0');
            
            // Clear any previous output
            if (ob_get_level()) {
                ob_end_clean();
            }
            
            // Output the file
            readfile($file_path);
            exit;
        }
    }
    
    // Fallback: store submission and redirect to success
    global $wpdb;
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    $result = $wpdb->insert(
        $table_name,
        array(
            'form_type' => 'lead_magnet',
            'name' => '',
            'email' => $email,
            'phone' => '',
            'message' => $magnet_type,
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT']
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    if ($result) {
        wp_redirect(add_query_arg('lead_success', '1', $_POST['_wp_http_referer'] ?? wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('lead_error', '1', $_POST['_wp_http_referer'] ?? wp_get_referer()));
    }
    exit;
}
add_action('admin_post_lead_magnet_form', 'aimpro_handle_lead_magnet_form');
add_action('admin_post_nopriv_lead_magnet_form', 'aimpro_handle_lead_magnet_form');

// Handle Newsletter Signup Form Submission
function aimpro_handle_newsletter_signup() {
    // Debug logging
    error_log('Newsletter signup attempt started');
    error_log('POST data: ' . print_r($_POST, true));
    
    if (!isset($_POST['action']) || $_POST['action'] !== 'newsletter_signup' || !wp_verify_nonce($_POST['newsletter_nonce'], 'newsletter_signup')) {
        error_log('Newsletter signup failed: nonce or action check failed');
        wp_redirect(home_url());
        exit;
    }
    
    // Sanitize and validate input
    $name = sanitize_text_field($_POST['subscriber_name'] ?? '');
    $email = sanitize_email($_POST['subscriber_email'] ?? '');
    
    error_log("Newsletter signup data - Name: $name, Email: $email");
    
    if (empty($name) || empty($email) || !is_email($email)) {
        error_log('Newsletter signup failed: validation failed');
        $referer = wp_get_referer() ?: home_url();
        wp_redirect(add_query_arg('newsletter_error', '1', $referer));
        exit;
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    // Check if table exists
    $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'");
    if (!$table_exists) {
        error_log('Newsletter signup failed: table does not exist');
        $referer = wp_get_referer() ?: home_url();
        wp_redirect(add_query_arg('newsletter_error', '1', $referer));
        exit;
    }
    
    // Check if email already exists for newsletter subscriptions
    $existing = $wpdb->get_var($wpdb->prepare(
        "SELECT id FROM $table_name WHERE email = %s AND form_type = 'newsletter'",
        $email
    ));
    
    if ($existing) {
        error_log('Newsletter signup: email already exists, redirecting to success');
        $referer = wp_get_referer() ?: home_url();
        wp_redirect(add_query_arg('newsletter_success', '1', $referer));
        exit;
    }
    
    // Store in database
    $result = $wpdb->insert(
        $table_name,
        array(
            'form_type' => 'newsletter',
            'name' => $name,
            'email' => $email,
            'message' => 'Newsletter subscription',
            'ip_address' => $_SERVER['REMOTE_ADDR'] ?? '',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? ''
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    if ($result) {
        // Send email notification to admin
        $to = 'hello@aimpro.co.uk';
        $subject = 'New Newsletter Subscription - ' . get_bloginfo('name');
        $message_body = "New newsletter subscription:\n\n";
        $message_body .= "Name: $name\n";
        $message_body .= "Email: $email\n";
        $message_body .= "Date: " . current_time('mysql') . "\n";
        $message_body .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n\n";
        $message_body .= "You can view all subscriptions in the WordPress admin under 'Form Submissions'.";
        
        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . get_bloginfo('name') . ' <noreply@' . $_SERVER['HTTP_HOST'] . '>'
        );
        
        wp_mail($to, $subject, $message_body, $headers);
        
        error_log('Newsletter signup successful for: ' . $email);
        $referer = wp_get_referer() ?: home_url();
        wp_redirect(add_query_arg('newsletter_success', '1', $referer));
        exit;
    } else {
        error_log('Newsletter signup failed: database insert failed for ' . $email);
        $referer = wp_get_referer() ?: home_url();
        wp_redirect(add_query_arg('newsletter_error', '1', $referer));
        exit;
    }
}

// AJAX handler for newsletter signup
function aimpro_handle_newsletter_signup_ajax() {
    // Debug logging
    error_log('AJAX Newsletter signup attempt started');
    error_log('POST data: ' . print_r($_POST, true));
    
    if (!isset($_POST['action']) || $_POST['action'] !== 'newsletter_signup' || !wp_verify_nonce($_POST['newsletter_nonce'], 'newsletter_signup')) {
        error_log('AJAX Newsletter signup failed: nonce or action check failed');
        wp_send_json_error('Security check failed. Please refresh the page and try again.');
        return;
    }
    
    // Sanitize and validate input
    $name = sanitize_text_field($_POST['subscriber_name'] ?? '');
    $email = sanitize_email($_POST['subscriber_email'] ?? '');
    
    error_log("AJAX Newsletter signup data - Name: $name, Email: $email");
    
    if (empty($name) || empty($email) || !is_email($email)) {
        error_log('AJAX Newsletter signup failed: validation failed');
        wp_send_json_error('Please provide a valid name and email address.');
        return;
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    // Check if table exists
    $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'");
    if (!$table_exists) {
        error_log('AJAX Newsletter signup failed: table does not exist');
        wp_send_json_error('Database error. Please try again later.');
        return;
    }
    
    // Check if email already exists for newsletter subscriptions
    $existing = $wpdb->get_var($wpdb->prepare(
        "SELECT id FROM $table_name WHERE email = %s AND form_type = 'newsletter'",
        $email
    ));
    
    if ($existing) {
        error_log('AJAX Newsletter signup: email already exists');
        wp_send_json_success('You\'re already subscribed! Thank you for your interest.');
        return;
    }
    
    // Store in database
    $result = $wpdb->insert(
        $table_name,
        array(
            'form_type' => 'newsletter',
            'name' => $name,
            'email' => $email,
            'message' => 'Newsletter subscription',
            'ip_address' => $_SERVER['REMOTE_ADDR'] ?? '',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? ''
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    if ($result) {
        // Send email notification to admin
        $to = 'hello@aimpro.co.uk';
        $subject = 'New Newsletter Subscription - ' . get_bloginfo('name');
        $message_body = "New newsletter subscription:\n\n";
        $message_body .= "Name: $name\n";
        $message_body .= "Email: $email\n";
        $message_body .= "Date: " . current_time('mysql') . "\n";
        $message_body .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "\n\n";
        $message_body .= "You can view all subscriptions in the WordPress admin under 'Form Submissions'.";
        
        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . get_bloginfo('name') . ' <noreply@' . $_SERVER['HTTP_HOST'] . '>'
        );
        
        wp_mail($to, $subject, $message_body, $headers);
        
        error_log('AJAX Newsletter signup successful for: ' . $email);
        wp_send_json_success('Thank you for subscribing! You\'ll receive our latest updates and tips.');
    } else {
        error_log('AJAX Newsletter signup failed: database insert failed for ' . $email);
        wp_send_json_error('Sorry, there was an error processing your subscription. Please try again.');
    }
}

add_action('wp_ajax_newsletter_signup', 'aimpro_handle_newsletter_signup_ajax');
add_action('wp_ajax_nopriv_newsletter_signup', 'aimpro_handle_newsletter_signup_ajax');
add_action('admin_post_newsletter_signup', 'aimpro_handle_newsletter_signup');
add_action('admin_post_nopriv_newsletter_signup', 'aimpro_handle_newsletter_signup');

// Add admin menu for viewing form submissions
function aimpro_add_submissions_menu() {
    add_menu_page(
        'Form Submissions',
        'Form Submissions',
        'manage_options',
        'aimpro-submissions',
        'aimpro_submissions_page',
        'dashicons-email-alt',
        30
    );
}
add_action('admin_menu', 'aimpro_add_submissions_menu');

// Display form submissions page
function aimpro_submissions_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    // Handle deletion
    if (isset($_GET['delete_id']) && wp_verify_nonce($_GET['_wpnonce'], 'delete_submission')) {
        $wpdb->delete($table_name, array('id' => intval($_GET['delete_id'])), array('%d'));
        echo '<div class="notice notice-success"><p>Submission deleted successfully!</p></div>';
    }
    
    $submissions = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submission_date DESC");
    
    ?>
    <div class="wrap">
        <h1>Form Submissions</h1>
        <p>View and manage all form submissions from your website.</p>
        
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($submissions): ?>
                    <?php foreach ($submissions as $submission): ?>
                        <tr>
                            <td><?php echo date('M j, Y g:i A', strtotime($submission->submission_date)); ?></td>
                            <td>
                                <span class="submission-type <?php echo esc_attr($submission->form_type); ?>">
                                    <?php 
                                    switch($submission->form_type) {
                                        case 'lead_magnet':
                                            echo 'Lead Magnet';
                                            break;
                                        case 'newsletter':
                                            echo 'Newsletter';
                                            break;
                                        case 'contact':
                                        default:
                                            echo 'Contact Form';
                                            break;
                                    }
                                    ?>
                                </span>
                            </td>
                            <td><strong><?php echo esc_html($submission->name); ?></strong></td>
                            <td><a href="mailto:<?php echo esc_attr($submission->email); ?>"><?php echo esc_html($submission->email); ?></a></td>
                            <td><?php echo esc_html($submission->phone); ?></td>
                            <td><?php echo esc_html(wp_trim_words($submission->message, 10)); ?></td>
                            <td>
                                <a href="?page=aimpro-submissions&delete_id=<?php echo $submission->id; ?>&_wpnonce=<?php echo wp_create_nonce('delete_submission'); ?>" 
                                   onclick="return confirm('Are you sure you want to delete this submission?')" 
                                   class="button button-small">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7">No submissions found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        
        <style>
        .submission-type {
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }
        .submission-type.lead_magnet {
            background: #e7f3ff;
            color: #0073aa;
        }
        .submission-type.contact {
            background: #f0f6fc;
            color: #2c3338;
        }
        .submission-type.newsletter {
            background: #fff2e1;
            color: #f15a25;
        }
        </style>
    </div>
    <?php
}

/**
 * Add Homepage Settings admin page
 */
function aimpro_add_homepage_settings_menu() {
    add_menu_page(
        'Homepage Settings',
        'Homepage Settings', 
        'manage_options',
        'aimpro-homepage-settings',
        'aimpro_homepage_settings_page',
        'dashicons-admin-home',
        25
    );
}
add_action('admin_menu', 'aimpro_add_homepage_settings_menu');

// Homepage Settings page callback
function aimpro_homepage_settings_page() {
    // Handle form submission
    if (isset($_POST['submit']) && wp_verify_nonce($_POST['homepage_settings_nonce'], 'save_homepage_settings')) {
        // List of homepage fields to save
        $homepage_fields = array(
            'hero_badge_text', 'hero_title', 'hero_strapline_1', 'hero_strapline_2', 
            'hero_strapline_3', 'hero_strapline_4', 'hero_subtitle', 'hero_primary_cta_text', 
            'hero_primary_cta_url', 'value_statement_title', 'value_statement_description', 
            'value_statement_cta_text', 'value_statement_cta_url', 'stat_1_number', 'stat_1_label', 
            'stat_2_number', 'stat_2_label', 'stat_3_number', 'stat_3_label', 'stat_4_number', 
            'stat_4_label', 'services_title', 'services_subtitle', 'lead_magnet_title', 
            'lead_magnet_subtitle', 'lead_magnet_ebook_title', 'lead_magnet_ebook_description', 
            'lead_magnet_form_title', 'lead_magnet_form_subtitle', 'office_title', 'office_description', 
            'coffee_meeting_url', 'office_address_title', 'office_address', 'about_page_url', 
            'team_section_url', 'company_page_url', 'team_section_title', 'team_section_subtitle',
            'team_cta_text', 'team_cta_url', 'testimonials_badge', 'testimonials_title', 
            'testimonials_subtitle', 'testimonials_cta_text', 'testimonials_cta_url',
            'testimonials_stat_1_number', 'testimonials_stat_1_label', 'testimonials_stat_2_number',
            'testimonials_stat_2_label', 'testimonials_stat_3_number', 'testimonials_stat_3_label',
            'blog_title', 'blog_subtitle', 'blog_cta_text', 'blog_cta_url', 'homepage_blog_1_image', 
            'homepage_blog_1_date', 'homepage_blog_1_category', 'homepage_blog_1_title', 
            'homepage_blog_1_excerpt', 'homepage_blog_1_url', 'homepage_blog_2_image', 
            'homepage_blog_2_date', 'homepage_blog_2_category', 'homepage_blog_2_title', 
            'homepage_blog_2_excerpt', 'homepage_blog_2_url', 'homepage_blog_3_image', 
            'homepage_blog_3_date', 'homepage_blog_3_category', 'homepage_blog_3_title', 
            'homepage_blog_3_excerpt', 'homepage_blog_3_url', 'final_cta_title', 
            'final_cta_description', 'newsletter_title', 'newsletter_subtitle'
        );

        // Save each field as a WordPress option
        foreach ($homepage_fields as $field) {
            if (isset($_POST[$field])) {
                // Use wp_kses_post for rich text fields, sanitize_text_field for others
                $rich_text_fields = array('hero_title', 'hero_subtitle', 'value_statement_title', 'value_statement_description', 'services_title', 'services_subtitle', 'lead_magnet_title', 'lead_magnet_subtitle', 'lead_magnet_ebook_description', 'lead_magnet_form_subtitle', 'office_title', 'office_description', 'office_address', 'team_section_title', 'team_section_subtitle', 'testimonials_subtitle', 'blog_title', 'blog_subtitle', 'homepage_blog_1_excerpt', 'homepage_blog_2_excerpt', 'homepage_blog_3_excerpt', 'final_cta_title', 'final_cta_description', 'newsletter_title', 'newsletter_subtitle');
                
                if (in_array($field, $rich_text_fields)) {
                    update_option($field, wp_kses_post($_POST[$field]));
                } else {
                    update_option($field, sanitize_text_field($_POST[$field]));
                }
            }
        }

        // Handle service tags array
        if (isset($_POST['service_tags']) && is_array($_POST['service_tags'])) {
            $service_tags = array();
            foreach ($_POST['service_tags'] as $tag) {
                if (!empty($tag['text']) && !empty($tag['url'])) {
                    $service_tags[] = array(
                        'text' => sanitize_text_field($tag['text']),
                        'url' => sanitize_text_field($tag['url'])
                    );
                }
            }
            update_option('service_tags', $service_tags);
        }

        echo '<div class="notice notice-success"><p>Homepage settings saved successfully!</p></div>';
    }

    ?>
    <div class="wrap">
        <h1>Homepage Settings</h1>
        <form method="post" action="">
            <?php wp_nonce_field('save_homepage_settings', 'homepage_settings_nonce'); ?>
            
            <h2 class="nav-tab-wrapper">
                <a href="#hero-section" class="nav-tab nav-tab-active">Hero Section</a>
                <a href="#value-section" class="nav-tab">Value Statement</a>
                <a href="#stats-section" class="nav-tab">Statistics</a>
                <a href="#services-section" class="nav-tab">Services</a>
                <a href="#lead-magnet-section" class="nav-tab">Lead Magnet</a>
                <a href="#office-section" class="nav-tab">Office Info</a>
                <a href="#team-section" class="nav-tab">Team Section</a>
                <a href="#testimonials-section" class="nav-tab">Testimonials</a>
                <a href="#blog-section" class="nav-tab">Blog Section</a>
                <a href="#final-cta-section" class="nav-tab">Final CTA</a>
            </h2>
            
            <div id="hero-section" class="tab-content">
                <h3>Hero Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Hero Badge Text</th>
                        <td>
                            <input type="text" name="hero_badge_text" value="<?php echo esc_attr(get_option('hero_badge_text', 'Award-Winning Digital Agency')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Hero Title</th>
                        <td>
                            <?php wp_editor(get_option('hero_title', '<h1 class="hero-title">Scale Your Business With <span class="curly-underline">PRECISION</span> Digital <span class="highlight-word">Marketing</span></h1>'), 'hero_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                            <p class="description">Main hero title. HTML allowed for styling.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Hero Straplines</th>
                        <td>
                            <input type="text" name="hero_strapline_1" value="<?php echo esc_attr(get_option('hero_strapline_1', 'No Fluff. Just Results.')); ?>" placeholder="Strapline 1" class="regular-text" /><br><br>
                            <input type="text" name="hero_strapline_2" value="<?php echo esc_attr(get_option('hero_strapline_2', 'Data-Driven Strategy. Measurable Results.')); ?>" placeholder="Strapline 2" class="regular-text" /><br><br>
                            <input type="text" name="hero_strapline_3" value="<?php echo esc_attr(get_option('hero_strapline_3', 'Grow Your Business With Precision Marketing.')); ?>" placeholder="Strapline 3" class="regular-text" /><br><br>
                            <input type="text" name="hero_strapline_4" value="<?php echo esc_attr(get_option('hero_strapline_4', 'Your High-ROI Digital Marketing Partner')); ?>" placeholder="Strapline 4" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Hero Subtitle</th>
                        <td>
                            <?php wp_editor(get_option('hero_subtitle', 'Expert Lead Generation, SEO, PPC & Automation. Data-driven strategies that deliver <strong class="highlight-underline">MEASURABLE RESULTS</strong> and accelerate your <strong class="highlight-word">growth</strong>.'), 'hero_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Hero CTA Text</th>
                        <td>
                            <input type="text" name="hero_primary_cta_text" value="<?php echo esc_attr(get_option('hero_primary_cta_text', 'CLAIM YOUR FREE GROWTH STRATEGY')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Hero CTA URL</th>
                        <td>
                            <input type="text" name="hero_primary_cta_url" value="<?php echo esc_attr(get_option('hero_primary_cta_url', '#contact')); ?>" class="regular-text" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <div id="value-section" class="tab-content" style="display:none;">
                <h3>Value Statement Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Value Statement Title</th>
                        <td>
                            <?php wp_editor(get_option('value_statement_title', 'A Results-Driven Digital Agency Obsessed With Your <span class="highlight curly-underline">SUCCESS</span>'), 'value_statement_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Value Statement Description</th>
                        <td>
                            <?php wp_editor(get_option('value_statement_description', 'We partner with ambitious businesses to transform their digital presence through intelligent strategies and performance-focused marketing. Our proven methodologies deliver quantifiable results that drive exponential growth and maximise your competitive advantage.'), 'value_statement_description', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Value Statement CTA Text</th>
                        <td>
                            <input type="text" name="value_statement_cta_text" value="<?php echo esc_attr(get_option('value_statement_cta_text', 'CLAIM YOUR FREE GROWTH AUDIT')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Value Statement CTA URL</th>
                        <td>
                            <input type="text" name="value_statement_cta_url" value="<?php echo esc_attr(get_option('value_statement_cta_url', '#contact')); ?>" class="regular-text" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <div id="stats-section" class="tab-content" style="display:none;">
                <h3>Statistics Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Statistic 1</th>
                        <td>
                            <input type="text" name="stat_1_number" value="<?php echo esc_attr(get_option('stat_1_number', '25')); ?>" placeholder="Number" class="small-text" />
                            <input type="text" name="stat_1_label" value="<?php echo esc_attr(get_option('stat_1_label', 'Years of Experience')); ?>" placeholder="Label" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Statistic 2</th>
                        <td>
                            <input type="text" name="stat_2_number" value="<?php echo esc_attr(get_option('stat_2_number', '98')); ?>" placeholder="Number" class="small-text" />
                            <input type="text" name="stat_2_label" value="<?php echo esc_attr(get_option('stat_2_label', 'Increase in Client Leads')); ?>" placeholder="Label" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Statistic 3</th>
                        <td>
                            <input type="text" name="stat_3_number" value="<?php echo esc_attr(get_option('stat_3_number', '25')); ?>" placeholder="Number" class="small-text" />
                            <input type="text" name="stat_3_label" value="<?php echo esc_attr(get_option('stat_3_label', 'Happy Clients')); ?>" placeholder="Label" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Statistic 4</th>
                        <td>
                            <input type="text" name="stat_4_number" value="<?php echo esc_attr(get_option('stat_4_number', '500')); ?>" placeholder="Number" class="small-text" />
                            <input type="text" name="stat_4_label" value="<?php echo esc_attr(get_option('stat_4_label', 'Projects Completed')); ?>" placeholder="Label" class="regular-text" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <div id="services-section" class="tab-content" style="display:none;">
                <h3>Services Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Services Title</th>
                        <td>
                            <?php wp_editor(get_option('services_title', 'Our Services'), 'services_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Services Subtitle</th>
                        <td>
                            <?php wp_editor(get_option('services_subtitle', 'Comprehensive digital marketing solutions'), 'services_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div id="lead-magnet-section" class="tab-content" style="display:none;">
                <h3>Lead Magnet Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Lead Magnet Title</th>
                        <td>
                            <?php wp_editor(get_option('lead_magnet_title', 'Free Digital Marketing Strategy Guide'), 'lead_magnet_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Lead Magnet Subtitle</th>
                        <td>
                            <?php wp_editor(get_option('lead_magnet_subtitle', 'Get our comprehensive guide to digital marketing success'), 'lead_magnet_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Lead Magnet eBook Title</th>
                        <td>
                            <input type="text" name="lead_magnet_ebook_title" value="<?php echo esc_attr(get_option('lead_magnet_ebook_title', 'The Ultimate Digital Marketing Guide')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Lead Magnet eBook Description</th>
                        <td>
                            <?php wp_editor(get_option('lead_magnet_ebook_description', 'Download our comprehensive guide to digital marketing strategies that work'), 'lead_magnet_ebook_description', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Lead Magnet Form Title</th>
                        <td>
                            <input type="text" name="lead_magnet_form_title" value="<?php echo esc_attr(get_option('lead_magnet_form_title', 'Get Your Free Guide')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Lead Magnet Form Subtitle</th>
                        <td>
                            <?php wp_editor(get_option('lead_magnet_form_subtitle', 'Enter your details to download instantly'), 'lead_magnet_form_subtitle', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div id="office-section" class="tab-content" style="display:none;">
                <h3>Office Information Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Office Title</th>
                        <td>
                            <?php wp_editor(get_option('office_title', 'Visit Our Office'), 'office_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Office Description</th>
                        <td>
                            <?php wp_editor(get_option('office_description', 'Come and meet our team in person'), 'office_description', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Coffee Meeting URL</th>
                        <td>
                            <input type="text" name="coffee_meeting_url" value="<?php echo esc_attr(get_option('coffee_meeting_url', '#contact')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Office Address Title</th>
                        <td>
                            <input type="text" name="office_address_title" value="<?php echo esc_attr(get_option('office_address_title', 'Our Location')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Office Address</th>
                        <td>
                            <?php wp_editor(get_option('office_address', '123 Business Street<br>City, Country'), 'office_address', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">About Page URL</th>
                        <td>
                            <input type="text" name="about_page_url" value="<?php echo esc_attr(get_option('about_page_url', '/about')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Company Page URL</th>
                        <td>
                            <input type="text" name="company_page_url" value="<?php echo esc_attr(get_option('company_page_url', '/company')); ?>" class="regular-text" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <div id="team-section" class="tab-content" style="display:none;">
                <h3>Team Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Team Section Title</th>
                        <td>
                            <?php wp_editor(get_option('team_section_title', 'Meet Our Expert Team'), 'team_section_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Team Section Subtitle</th>
                        <td>
                            <?php wp_editor(get_option('team_section_subtitle', 'Passionate professionals dedicated to your success'), 'team_section_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Team Section URL</th>
                        <td>
                            <input type="text" name="team_section_url" value="<?php echo esc_attr(get_option('team_section_url', '/team')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Team CTA Text</th>
                        <td>
                            <input type="text" name="team_cta_text" value="<?php echo esc_attr(get_option('team_cta_text', 'Meet the Team')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Team CTA URL</th>
                        <td>
                            <input type="text" name="team_cta_url" value="<?php echo esc_attr(get_option('team_cta_url', '/team')); ?>" class="regular-text" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <div id="testimonials-section" class="tab-content" style="display:none;">
                <h3>Testimonials Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Testimonials Badge</th>
                        <td>
                            <input type="text" name="testimonials_badge" value="<?php echo esc_attr(get_option('testimonials_badge', 'Client Reviews')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Testimonials Title</th>
                        <td>
                            <?php wp_editor(get_option('testimonials_title', 'What Our Clients Say'), 'testimonials_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Testimonials Subtitle</th>
                        <td>
                            <?php wp_editor(get_option('testimonials_subtitle', 'Real results from real businesses'), 'testimonials_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Testimonials CTA Text</th>
                        <td>
                            <input type="text" name="testimonials_cta_text" value="<?php echo esc_attr(get_option('testimonials_cta_text', 'See All Reviews')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Testimonials CTA URL</th>
                        <td>
                            <input type="text" name="testimonials_cta_url" value="<?php echo esc_attr(get_option('testimonials_cta_url', '/testimonials')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Testimonials Statistics</th>
                        <td>
                            <h4>Testimonials Stats</h4>
                            <input type="text" name="testimonials_stat_1_number" value="<?php echo esc_attr(get_option('testimonials_stat_1_number', '100')); ?>" placeholder="Number" class="small-text" />
                            <input type="text" name="testimonials_stat_1_label" value="<?php echo esc_attr(get_option('testimonials_stat_1_label', 'Happy Clients')); ?>" placeholder="Label" class="regular-text" /><br><br>
                            
                            <input type="text" name="testimonials_stat_2_number" value="<?php echo esc_attr(get_option('testimonials_stat_2_number', '95')); ?>" placeholder="Number" class="small-text" />
                            <input type="text" name="testimonials_stat_2_label" value="<?php echo esc_attr(get_option('testimonials_stat_2_label', 'Success Rate')); ?>" placeholder="Label" class="regular-text" /><br><br>
                            
                            <input type="text" name="testimonials_stat_3_number" value="<?php echo esc_attr(get_option('testimonials_stat_3_number', '24')); ?>" placeholder="Number" class="small-text" />
                            <input type="text" name="testimonials_stat_3_label" value="<?php echo esc_attr(get_option('testimonials_stat_3_label', 'Hours Support')); ?>" placeholder="Label" class="regular-text" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <div id="blog-section" class="tab-content" style="display:none;">
                <h3>Blog Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Blog Title</th>
                        <td>
                            <?php wp_editor(get_option('blog_title', 'Latest Insights'), 'blog_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Blog Subtitle</th>
                        <td>
                            <?php wp_editor(get_option('blog_subtitle', 'Stay updated with the latest digital marketing trends'), 'blog_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Blog CTA Text</th>
                        <td>
                            <input type="text" name="blog_cta_text" value="<?php echo esc_attr(get_option('blog_cta_text', 'View All Posts')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Blog CTA URL</th>
                        <td>
                            <input type="text" name="blog_cta_url" value="<?php echo esc_attr(get_option('blog_cta_url', '/blog')); ?>" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Featured Blog Post 1</th>
                        <td>
                            <h4>Blog Post 1</h4>
                            <input type="text" name="homepage_blog_1_image" value="<?php echo esc_attr(get_option('homepage_blog_1_image', '')); ?>" placeholder="Image URL" class="regular-text" /><br><br>
                            <input type="text" name="homepage_blog_1_date" value="<?php echo esc_attr(get_option('homepage_blog_1_date', '')); ?>" placeholder="Date" class="regular-text" /><br><br>
                            <input type="text" name="homepage_blog_1_category" value="<?php echo esc_attr(get_option('homepage_blog_1_category', '')); ?>" placeholder="Category" class="regular-text" /><br><br>
                            <input type="text" name="homepage_blog_1_title" value="<?php echo esc_attr(get_option('homepage_blog_1_title', '')); ?>" placeholder="Post Title" class="regular-text" /><br><br>
                            <?php wp_editor(get_option('homepage_blog_1_excerpt', ''), 'homepage_blog_1_excerpt', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                            <br><input type="text" name="homepage_blog_1_url" value="<?php echo esc_attr(get_option('homepage_blog_1_url', '')); ?>" placeholder="Post URL" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Featured Blog Post 2</th>
                        <td>
                            <h4>Blog Post 2</h4>
                            <input type="text" name="homepage_blog_2_image" value="<?php echo esc_attr(get_option('homepage_blog_2_image', '')); ?>" placeholder="Image URL" class="regular-text" /><br><br>
                            <input type="text" name="homepage_blog_2_date" value="<?php echo esc_attr(get_option('homepage_blog_2_date', '')); ?>" placeholder="Date" class="regular-text" /><br><br>
                            <input type="text" name="homepage_blog_2_category" value="<?php echo esc_attr(get_option('homepage_blog_2_category', '')); ?>" placeholder="Category" class="regular-text" /><br><br>
                            <input type="text" name="homepage_blog_2_title" value="<?php echo esc_attr(get_option('homepage_blog_2_title', '')); ?>" placeholder="Post Title" class="regular-text" /><br><br>
                            <?php wp_editor(get_option('homepage_blog_2_excerpt', ''), 'homepage_blog_2_excerpt', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                            <br><input type="text" name="homepage_blog_2_url" value="<?php echo esc_attr(get_option('homepage_blog_2_url', '')); ?>" placeholder="Post URL" class="regular-text" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Featured Blog Post 3</th>
                        <td>
                            <h4>Blog Post 3</h4>
                            <input type="text" name="homepage_blog_3_image" value="<?php echo esc_attr(get_option('homepage_blog_3_image', '')); ?>" placeholder="Image URL" class="regular-text" /><br><br>
                            <input type="text" name="homepage_blog_3_date" value="<?php echo esc_attr(get_option('homepage_blog_3_date', '')); ?>" placeholder="Date" class="regular-text" /><br><br>
                            <input type="text" name="homepage_blog_3_category" value="<?php echo esc_attr(get_option('homepage_blog_3_category', '')); ?>" placeholder="Category" class="regular-text" /><br><br>
                            <input type="text" name="homepage_blog_3_title" value="<?php echo esc_attr(get_option('homepage_blog_3_title', '')); ?>" placeholder="Post Title" class="regular-text" /><br><br>
                            <?php wp_editor(get_option('homepage_blog_3_excerpt', ''), 'homepage_blog_3_excerpt', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                            <br><input type="text" name="homepage_blog_3_url" value="<?php echo esc_attr(get_option('homepage_blog_3_url', '')); ?>" placeholder="Post URL" class="regular-text" />
                        </td>
                    </tr>
                </table>
            </div>
            
            <div id="final-cta-section" class="tab-content" style="display:none;">
                <h3>Final CTA & Newsletter Section</h3>
                <table class="form-table">
                    <tr>
                        <th scope="row">Final CTA Title</th>
                        <td>
                            <?php wp_editor(get_option('final_cta_title', 'Ready to Transform Your Business?'), 'final_cta_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Final CTA Description</th>
                        <td>
                            <?php wp_editor(get_option('final_cta_description', 'Get started with our proven digital marketing strategies today'), 'final_cta_description', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Newsletter Title</th>
                        <td>
                            <?php wp_editor(get_option('newsletter_title', 'Stay Updated'), 'newsletter_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Newsletter Subtitle</th>
                        <td>
                            <?php wp_editor(get_option('newsletter_subtitle', 'Subscribe to our newsletter for the latest digital marketing tips'), 'newsletter_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </td>
                    </tr>
                </table>
            </div>
            
            <style>
                .tab-content { margin-top: 20px; }
                .nav-tab-wrapper { margin-bottom: 0; }
                .nav-tab { cursor: pointer; }
            </style>
            
            <script>
                jQuery(document).ready(function($) {
                    $('.nav-tab').click(function(e) {
                        e.preventDefault();
                        $('.nav-tab').removeClass('nav-tab-active');
                        $(this).addClass('nav-tab-active');
                        $('.tab-content').hide();
                        $($(this).attr('href')).show();
                    });
                });
            </script>
            
            <?php submit_button('Save Homepage Settings'); ?>
        </form>
    </div>
    <?php
}

/**
 * Force light theme on all pages
 */
function aimpro_force_light_theme($classes) {
    $classes[] = 'light-theme';
    return $classes;
}
add_filter('body_class', 'aimpro_force_light_theme');
