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

// Include contact page meta functionality
require_once get_template_directory() . '/includes/contact-meta.php';

// Include author settings meta functionality
require_once get_template_directory() . '/includes/author-settings-meta.php';

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
require_once get_template_directory() . '/includes/industries-meta.php';
require_once get_template_directory() . '/includes/automotive-meta.php';
require_once get_template_directory() . '/includes/home-garden-meta.php';
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
require_once get_template_directory() . '/includes/finance-meta.php';
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
        $to = 'sam@futurelab.solutions';
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
        $user_message .= "sam@futurelab.solutions\n";
        $user_message .= "Phone: +44 121 285 8490";
        
        $user_headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Aimpro Digital <sam@futurelab.solutions>'
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

// Add Open Graph meta tags
function aimpro_add_og_meta() {
    if (is_front_page()) {
        echo '<meta property="og:title" content="Aimpro Digital - Premier Digital Marketing Agency">';
        echo '<meta property="og:description" content="Transform your business with data-driven digital marketing strategies. Expert SEO, PPC, social media marketing, and web development services.">';
        echo '<meta property="og:type" content="website">';
        echo '<meta property="og:url" content="' . home_url('/') . '">';
        echo '<meta property="og:image" content="' . get_template_directory_uri() . '/assets/images/og-image.jpg">';
        echo '<meta property="og:site_name" content="Aimpro Digital">';
        
        echo '<meta name="twitter:card" content="summary_large_image">';
        echo '<meta name="twitter:title" content="Aimpro Digital - Premier Digital Marketing Agency">';
        echo '<meta name="twitter:description" content="Transform your business with data-driven digital marketing strategies.">';
        echo '<meta name="twitter:image" content="' . get_template_directory_uri() . '/assets/images/og-image.jpg">';
    }
}
add_action('wp_head', 'aimpro_add_og_meta');

// Add theme customizer options
function aimpro_customize_register($wp_customize) {
    // Add company info section
    $wp_customize->add_section('aimpro_company_info', array(
        'title' => 'Company Information',
        'priority' => 30,
    ));
    
    // Add phone number setting
    $wp_customize->add_setting('company_phone', array(
        'default' => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('company_phone', array(
        'label' => 'Phone Number',
        'section' => 'aimpro_company_info',
        'type' => 'text',
    ));
    
    // Add email setting
    $wp_customize->add_setting('company_email', array(
        'default' => 'hello@aimprodigital.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('company_email', array(
        'label' => 'Email Address',
        'section' => 'aimpro_company_info',
        'type' => 'email',
    ));
}
add_action('customize_register', 'aimpro_customize_register');

/**
 * ========================================
 * LANDING PAGE CUSTOM FIELDS SYSTEM
 * ========================================
 * Makes the landing page content editable via WordPress admin
 */

// Add custom fields support
add_action('init', 'aimpro_add_custom_fields_support');
function aimpro_add_custom_fields_support() {
    add_post_type_support('page', 'custom-fields');
}

// Add meta boxes for landing page content
add_action('add_meta_boxes', 'aimpro_add_landing_page_meta_boxes');
function aimpro_add_landing_page_meta_boxes() {
    global $post;
    if (empty($post)) return;
    
    // Only add these meta boxes to the homepage/front page
    // Template-specific pages should use their own meta files in the includes/ folder
    $is_front_page = false;
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    // Check if this is the front page/homepage ONLY
    if (get_option('page_on_front') == $post->ID) {
        $is_front_page = true;
    }
    
    // Also allow for pages specifically designed as the main landing page
    if ($page_template === 'front-page.php' || $page_slug === 'home' || $page_slug === 'homepage') {
        $is_front_page = true;
    }
      // IMPORTANT: Do NOT add these meta boxes to pages that have their own template-specific meta files
    // Get all pages that have dedicated meta files in the includes/ folder
    $template_specific_pages = array(
        'page-about.php', 'page-contact.php', 'page-ai-crm-setup.php', 'page-services.php',
        'page-finance.php', 'page-estate-agents.php', 'page-professional-services.php',
        'page-coaches-consultants.php', 'page-improve-roi-ads.php', 'page-rank-higher-locally.php',
        'page-automate-marketing.php', 'page-high-converting-website.php', 'page-events-webinars.php',
        'page-training-mentoring.php', 'page-templates-tools.php', 'page-industries.php',
        'page-home-garden.php', 'page-automotive.php', 'page-ecommerce.php', 'page-solutions.php',
        'page-lead-generation.php', 'page-chatbots.php', 'page-advertising-ppc.php', 'page-google-ads.php',
        'page-meta-ads.php', 'page-microsoft-ads.php', 'page-retargeting-display.php', 'page-ppc-audit.php',
        'page-seo-services.php', 'page-local-seo.php', 'page-seo-audit.php', 'page-technical-seo.php',
        'page-on-page-seo.php', 'page-white-label-seo.php', 'page-funnel-automation.php', 'page-funnel-builds.php',
        'page-email-campaigns.php', 'page-email-sms-flows.php', 'page-marketing-automation.php',
        'page-website-design.php', 'page-website-development.php', 'page-ux-ui-optimisation.php',
        'page-landing-pages.php', 'page-streamline-sales-funnel.php', 'page-company.php', 'page-team.php',
        'page-testimonials.php', 'page-careers.php', 'page-become-a-partner.php', 'page-resources.php',
        'page-blog.php', 'page-case-studies.php'
    );
    
    // Additional check: if the page has ANY template file, don't add global meta boxes
    // This ensures that ONLY the true homepage gets these meta boxes
    if (!empty($page_template) || in_array($page_template, $template_specific_pages)) {
        return;
    }
    
    // Extra safety: check page slug for known template-specific pages
    $template_specific_slugs = array(
        'about', 'contact', 'ai-crm-setup', 'services', 'finance', 'estate-agents', 
        'professional-services', 'coaches-consultants', 'improve-roi-ads', 'rank-higher-locally',
        'automate-marketing', 'high-converting-website', 'events-webinars', 'training-mentoring',
        'templates-tools', 'industries', 'home-garden', 'automotive', 'ecommerce', 'solutions',
        'lead-generation', 'chatbots', 'advertising-ppc', 'google-ads', 'meta-ads', 'microsoft-ads',
        'retargeting-display', 'ppc-audit', 'seo-services', 'local-seo', 'seo-audit', 'technical-seo',
        'on-page-seo', 'white-label-seo', 'funnel-automation', 'funnel-builds', 'email-campaigns',
        'email-sms-flows', 'marketing-automation', 'website-design', 'website-development',
        'ux-ui-optimisation', 'landing-pages', 'streamline-sales-funnel', 'company', 'team',
        'testimonials', 'careers', 'become-a-partner', 'resources', 'blog', 'case-studies'
    );
    
    if (in_array($page_slug, $template_specific_slugs)) {
        return;
    }    // Only add meta boxes if this is truly the front page and not a template-specific page
    if ($is_front_page) {
        add_meta_box(
            'aimpro_hero_section',
            'Homepage Content - Hero Section',
            'aimpro_hero_section_callback',
            'page',
            'normal',
            'high'
        );
        
        add_meta_box(
            'aimpro_stats_section',
            'Homepage Content - Stats Section',
            'aimpro_stats_section_callback',
            'page',
            'normal',
            'high'
        );
        
        add_meta_box(
            'aimpro_services_preview',
            'Homepage Content - Services Preview',
            'aimpro_services_preview_callback',
            'page',
            'normal',
            'high'
        );
        
        add_meta_box(
            'aimpro_office_section',
            'Homepage Content - Office Visit Section',
            'aimpro_office_section_callback',
            'page',
            'normal',
            'high'
        );
    }
}

// Hero Section Meta Box
function aimpro_hero_section_callback($post) {
    wp_nonce_field('aimpro_save_meta_box_data', 'aimpro_meta_box_nonce');
    
    // Add clear indication this is for homepage only
    echo '<div style="background: #f0f9ff; padding: 15px; margin-bottom: 20px; border-left: 4px solid #0073aa;">';
    echo '<strong>📍 Homepage Content:</strong> These fields control the content on your website\'s homepage/front page only. ';
    echo 'Template-specific pages (like About, Services, AI CRM Setup, etc.) have their own dedicated meta boxes.';
    echo '</div>';
    
    $hero_badge = get_post_meta($post->ID, '_hero_badge', true) ?: '#1 RATED DIGITAL MARKETING AGENCY';
    $hero_title = get_post_meta($post->ID, '_hero_title', true) ?: 'Boost Your Online Presence with <span class="text-gradient">Data-Driven Marketing</span>';
    $hero_subtitle = get_post_meta($post->ID, '_hero_subtitle', true) ?: 'Transform your business with proven digital marketing strategies that deliver measurable results. From SEO to PPC, we drive growth that matters.';
    $hero_cta_primary = get_post_meta($post->ID, '_hero_cta_primary', true) ?: 'GET FREE MARKETING AUDIT';
    $hero_cta_secondary = get_post_meta($post->ID, '_hero_cta_secondary', true) ?: 'TALK TO AN EXPERT';
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="hero_badge">Hero Badge Text</label></th>';
    echo '<td><input type="text" id="hero_badge" name="hero_badge" value="' . esc_attr($hero_badge) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="hero_title">Hero Title (HTML allowed)</label></th>';
    echo '<td><textarea id="hero_title" name="hero_title" rows="3" style="width: 100%;">' . esc_textarea($hero_title) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="hero_subtitle">Hero Subtitle</label></th>';
    echo '<td><textarea id="hero_subtitle" name="hero_subtitle" rows="4" style="width: 100%;">' . esc_textarea($hero_subtitle) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="hero_cta_primary">Primary CTA Button Text</label></th>';
    echo '<td><input type="text" id="hero_cta_primary" name="hero_cta_primary" value="' . esc_attr($hero_cta_primary) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="hero_cta_secondary">Secondary CTA Button Text</label></th>';
    echo '<td><input type="text" id="hero_cta_secondary" name="hero_cta_secondary" value="' . esc_attr($hero_cta_secondary) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
}

// Stats Section Meta Box
function aimpro_stats_section_callback($post) {
    $stats = get_post_meta($post->ID, '_stats_section', true) ?: array(
        array('number' => '500+', 'label' => 'Clients Served'),
        array('number' => '99%', 'label' => 'Client Satisfaction'),
        array('number' => '250%', 'label' => 'Average ROI Increase'),
        array('number' => '24/7', 'label' => 'Support Available')
    );
    
    echo '<div id="stats-container">';
    foreach ($stats as $index => $stat) {
        echo '<div class="stat-item" style="border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; border-radius: 5px;">';
        echo '<h4>Stat ' . ($index + 1) . '</h4>';
        echo '<label>Number/Value: <input type="text" name="stats[' . $index . '][number]" value="' . esc_attr($stat['number']) . '" style="width: 100%; margin: 5px 0;" /></label>';
        echo '<label>Label: <input type="text" name="stats[' . $index . '][label]" value="' . esc_attr($stat['label']) . '" style="width: 100%; margin: 5px 0;" /></label>';
        echo '</div>';
    }
    echo '</div>';
}

// Services Preview Meta Box
function aimpro_services_preview_callback($post) {
    $services_title = get_post_meta($post->ID, '_services_title', true) ?: 'Our <span class="highlight">Premium</span> Digital Marketing Services';
    $services_subtitle = get_post_meta($post->ID, '_services_subtitle', true) ?: 'Comprehensive solutions designed to accelerate your digital growth and maximise ROI across all channels.';
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="services_title">Services Section Title (HTML allowed)</label></th>';
    echo '<td><textarea id="services_title" name="services_title" rows="2" style="width: 100%;">' . esc_textarea($services_title) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="services_subtitle">Services Section Subtitle</label></th>';
    echo '<td><textarea id="services_subtitle" name="services_subtitle" rows="3" style="width: 100%;">' . esc_textarea($services_subtitle) . '</textarea></td></tr>';
    echo '</table>';
}

// Office Section Meta Box
function aimpro_office_section_callback($post) {
    $office_title = get_post_meta($post->ID, '_office_title', true) ?: 'Come See Us... We\'re a <span class="highlight curly-underline">REAL</span> Company with Real Humans';
    $office_description = get_post_meta($post->ID, '_office_description', true) ?: 'Let\'s discuss your project over a coffee. Book a time to visit our Birmingham office and meet the team behind your marketing success.';
    $office_address_title = get_post_meta($post->ID, '_office_address_title', true) ?: 'Our Birmingham Office';
    $office_address = get_post_meta($post->ID, '_office_address', true) ?: '<strong>Located in: 55 Colmore Row</strong><br>Address: 55 Colmore Row, Birmingham B3 2AA<br>Right in the heart of Birmingham\'s business district';
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="office_title">Office Section Title (HTML allowed)</label></th>';
    echo '<td><textarea id="office_title" name="office_title" rows="2" style="width: 100%;">' . esc_textarea($office_title) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="office_description">Office Description</label></th>';
    echo '<td><textarea id="office_description" name="office_description" rows="3" style="width: 100%;">' . esc_textarea($office_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="office_address_title">Office Address Title</label></th>';
    echo '<td><input type="text" id="office_address_title" name="office_address_title" value="' . esc_attr($office_address_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="office_address">Office Address (HTML allowed)</label></th>';
    echo '<td><textarea id="office_address" name="office_address" rows="4" style="width: 100%;">' . esc_textarea($office_address) . '</textarea></td></tr>';
    echo '</table>';
}

// Save meta box data
add_action('save_post', 'aimpro_save_meta_box_data');
function aimpro_save_meta_box_data($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['aimpro_meta_box_nonce']) || !wp_verify_nonce($_POST['aimpro_meta_box_nonce'], 'aimpro_save_meta_box_data')) {
        return;
    }

    // Check if user has permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save hero section fields
    $hero_fields = array('hero_badge', 'hero_title', 'hero_subtitle', 'hero_cta_primary', 'hero_cta_secondary');
    foreach ($hero_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
    
    // Save stats section
    if (isset($_POST['stats'])) {
        $stats_data = array();
        foreach ($_POST['stats'] as $stat) {
            $stats_data[] = array(
                'number' => sanitize_text_field($stat['number']),
                'label' => sanitize_text_field($stat['label'])
            );
        }
        update_post_meta($post_id, '_stats_section', $stats_data);
    }
    
    // Save services section
    if (isset($_POST['services_title'])) {
        update_post_meta($post_id, '_services_title', wp_kses_post($_POST['services_title']));
    }
    if (isset($_POST['services_subtitle'])) {
        update_post_meta($post_id, '_services_subtitle', sanitize_textarea_field($_POST['services_subtitle']));
    }
    
    // Save office section
    $office_fields = array('office_title', 'office_description', 'office_address_title', 'office_address');
    foreach ($office_fields as $field) {
        if (isset($_POST[$field])) {
            if ($field === 'office_title' || $field === 'office_address') {
                update_post_meta($post_id, '_' . $field, wp_kses_post($_POST[$field]));
            } else {
                update_post_meta($post_id, '_' . $field, sanitize_textarea_field($_POST[$field]));
            }
        }
    }
}

/**
 * Theme Activation Hook
 */
function aimpro_theme_activation() {
    // Flush rewrite rules
    flush_rewrite_rules();
    
    // Set default customiser values
    set_theme_mod('company_phone', '+1 (555) 123-4567');
    set_theme_mod('company_email', 'hello@aimprodigital.com');
    
    // Set default landing page values
    aimpro_set_default_landing_page_values();
}

/**
 * Set default landing page field values
 */
function aimpro_set_default_landing_page_values() {
    $defaults = array(
        'hero_badge_text' => 'Award-Winning Digital Agency',
        'hero_title' => '<h1 class="hero-title">Scale Your Business With <span class="highlight curly-underline">PRECISION</span> Digital <span class="highlight-word" style="color: #f15a25 !important; -webkit-text-fill-color: #f15a25 !important;">Marketing</span></h1>',
        'hero_subtitle' => 'Expert Lead Generation, SEO, PPC & Automation. Data-driven strategies that deliver <strong class="highlight-underline">MEASURABLE RESULTS</strong> and accelerate your <strong class="highlight-word">growth</strong>.',
        'hero_primary_cta_text' => 'CLAIM YOUR FREE GROWTH STRATEGY',
        'hero_primary_cta_url' => '#contact',
        // Hero straplines
        'hero_strapline_1' => 'No Fluff. Just Results.',
        'hero_strapline_2' => 'Data-Driven Strategy. Measurable Results.',
        'hero_strapline_3' => 'Grow Your Business With Precision Marketing.',
        'hero_strapline_4' => 'Your High-ROI Digital Marketing Partner',
        // Stats
        'stat_1_number' => '25',
        'stat_1_label' => 'Years of Experience',
        'stat_2_number' => '98',
        'stat_2_label' => 'Increase in Client Leads',
        'stat_3_number' => '15',
        'stat_3_label' => 'Industries Transformed',
        'stat_4_number' => '199',
        'stat_4_label' => 'Increase in Conversion Rates',        // Services
        'services_title' => 'Premium Digital Marketing Solutions That <span class="highlight curly-underline">DELIVER</span>',
        'services_subtitle' => 'Zero fluff. Pure performance. Our integrated marketing ecosystem works seamlessly to transform prospects into profits.',
        // Value Statement
        'value_statement_title' => 'A Results-Driven Digital Agency Obsessed With Your <span class="highlight curly-underline">SUCCESS</span>',
        'value_statement_description' => 'We partner with ambitious businesses to transform their digital presence through intelligent strategies and performance-focused marketing. Our proven methodologies deliver quantifiable results that drive exponential growth and maximise your competitive advantage.',
        'value_statement_cta_text' => 'CLAIM YOUR FREE GROWTH AUDIT',
        'value_statement_cta_url' => '#contact',        // Blog Section
        'blog_title' => 'Scale Up Your <span class="highlight curly-underline">MARKETING</span>',
        'blog_subtitle' => 'Zero secrets. Maximum value. We share proven strategies and insider insights to help ambitious marketers like you accelerate growth, drive traffic, and maximise revenue.',
        'blog_cta_text' => 'MORE BLOGS',
        'blog_cta_url' => '/blog',// Final CTA Section
        'final_cta_title' => 'You Bring the Ambition, We Drive the <span class="highlight curly-underline">RESULTS</span>',
        'final_cta_description' => 'Request a marketing review today. We\'ll send you a detailed analysis of your website and marketing, breaking down your next steps to success.',        // Service Tags (Dynamic)
        'service_tags' => array(
            array('text' => 'SEO', 'url' => '/seo-services'),
            array('text' => 'Google Ads', 'url' => '/google-ads'),
            array('text' => 'Social Media', 'url' => '/meta-ads'),
            array('text' => 'Website', 'url' => '/website-design'),
            array('text' => 'Ads', 'url' => '/retargeting-display'),
            array('text' => 'Email', 'url' => '/email-campaigns'),
            array('text' => 'AI Automation', 'url' => '/ai-tools'),
            array('text' => 'CRM', 'url' => '/ai-crm-setup'),
        ),
        // Header CTA Buttons
        'header_cta_1_text' => 'Get a Free Audit',
        'header_cta_1_url' => '#contact',
        'header_cta_2_text' => 'Book a Call',
        'header_cta_2_url' => 'tel:+441212858490',
        // Contact Form
        'contact_form_title' => 'Get In Touch',
        'contact_form_subtitle' => 'We\'d love to hear from you. Send us a message and we\'ll respond as soon as possible.',
        'contact_form_name_label' => 'Name *',
        'contact_form_email_label' => 'Email *',
        'contact_form_phone_label' => 'Phone',
        'contact_form_referral_label' => 'Where did you find us?',
        'contact_form_query_label' => 'Query',
        'contact_form_query_placeholder' => 'Tell us about your inquiry...',
        'contact_form_submit_text' => 'Submit',
        // Office
        'office_title' => 'Come See Us... We\'re a <span class="highlight curly-underline">REAL</span> Company with Real Humans',
        'office_description' => 'Let\'s discuss your project over a coffee. Book a time to visit our Birmingham office and meet the team behind your marketing success.',
        'office_address_title' => 'Our Birmingham Office',
        'office_address' => '<p><strong>Located in: 55 Colmore Row</strong><br>
                    Address: 55 Colmore Row, Birmingham B3 2AA<br>
                    Right in the heart of Birmingham\'s business district</p>',
        // Testimonials
        'testimonials_title' => 'Don\'t Just Take Our Word for It',
        'testimonials_subtitle' => 'Discover how we\'ve transformed businesses across industries with strategies that deliver measurable growth:',
        // Individual testimonials
        'testimonial_1_content' => 'Honestly, if you have a business that relies on your website to bring in business, don\'t waste your time on any other company. From my experience, I have gained approximately 50% increase in qualified leads.',
        'testimonial_1_author' => 'Emily Hargreaves',
        'testimonial_1_title' => 'Marketing Director',
        'testimonial_2_content' => 'No negatives at all. One of the best companies we have ever worked with. So dynamic and on trend. Incredibly proactive in everything they do and the bonus is that they are such lovely people to work with.',
        'testimonial_2_author' => 'Charlotte Davies',
        'testimonial_2_title' => 'Business Owner',
        'testimonial_3_content' => 'The Google Ads campaigns run by Aimpro Digital have been a fantastic success. Their attention to detail and ability to target the right audience has really paid off. We\'ve seen a significant increase in traffic and conversions, all thanks to their hard work and expertise!',
        'testimonial_3_author' => 'Tom Ridley',
        'testimonial_3_title' => 'Sales Director, Sheffield',
        'testimonial_4_content' => 'Aimpro Digital has been a game-changer for our business! Since partnering with them, we\'ve seen a consistent flow of quality leads that truly align with our services. It\'s been a breath of fresh air to work with a team that understands our goals and delivers on their promises.',
        'testimonial_4_author' => 'Sarah Thompson',
        'testimonial_4_title' => 'Marketing Manager, London',
        'testimonial_5_content' => 'Our online visibility has improved dramatically thanks to Aimpro Digital\'s SEO expertise. Within months, we went from barely being on the map to ranking on the first page for key terms. The team is knowledgeable, transparent, and always ready with helpful advice. Couldn\'t recommend them more!',
        'testimonial_5_author' => 'James Whitfield',        'testimonial_5_title' => 'Director, Birmingham',
        // Lead Magnet Section
        'lead_magnet_title' => 'Get Our Free Digital Marketing <span class="highlight curly-underline">GUIDE</span>',
        'lead_magnet_subtitle' => 'Download our comprehensive digital marketing guide packed with proven strategies to grow your business.',
        'lead_magnet_ebook_title' => 'The Ultimate Digital Marketing Playbook',
        'lead_magnet_ebook_description' => 'Discover the exact strategies we use to help our clients increase leads by 200%+ and dominate their local markets.',        'lead_magnet_form_title' => 'Get Your Free Digital Marketing Guide',
        'lead_magnet_form_subtitle' => 'Fill out the form below and we\'ll send you our comprehensive guide plus schedule a free consultation.',
        'lead_magnet_name_label' => 'Full Name *',
        'lead_magnet_email_label' => 'Email Address *',
        'lead_magnet_phone_label' => 'Phone Number *',
        'lead_magnet_submit_text' => 'GET FREE EBOOK NOW',
        'lead_magnet_privacy_text' => 'We respect your privacy and will never share your information. <a href="/privacy-policy">Privacy Policy</a>'
    );
    
    foreach ($defaults as $key => $value) {
        // Only set if not already set
        if (!get_option($key, false)) {
            update_option($key, $value);
        }
    }
}
add_action('after_switch_theme', 'aimpro_theme_activation');

// Ensure defaults are set on admin page load
add_action('admin_init', 'aimpro_ensure_defaults');
function aimpro_ensure_defaults() {
    // Check if defaults need to be set
    if (!get_option('aimpro_defaults_set', false)) {
        aimpro_set_default_landing_page_values();
        update_option('aimpro_defaults_set', true);
    }
}

/**
 * Create Landing Page Settings Admin Page
 */
function aimpro_add_admin_pages() {
    add_menu_page(
        'Landing Page Settings',
        'Landing Page',
        'manage_options',
        'aimpro-landing-page',
        'aimpro_landing_page_admin',
        'dashicons-admin-page',
        30
    );
}
add_action('admin_menu', 'aimpro_add_admin_pages');

/**
 * Landing Page Settings Admin Page Content
 */
function aimpro_landing_page_admin() {
    // Handle form submission
    if (isset($_POST['submit']) && wp_verify_nonce($_POST['aimpro_landing_page_nonce'], 'aimpro_landing_page_save')) {        if (current_user_can('manage_options')) {            // Save all the custom fields
            $fields = array(
                'hero_badge_text', 'hero_title', 'hero_subtitle', 'hero_primary_cta_text', 'hero_primary_cta_url',
                'hero_strapline_1', 'hero_strapline_2', 'hero_strapline_3', 'hero_strapline_4',
                'stat_1_number', 'stat_1_label', 'stat_2_number', 'stat_2_label',
                'stat_3_number', 'stat_3_label', 'stat_4_number', 'stat_4_label',
                'services_title', 'services_subtitle',
                'value_statement_title', 'value_statement_description', 'value_statement_cta_text', 'value_statement_cta_url',
                'blog_title', 'blog_subtitle', 'blog_cta_text', 'blog_cta_url',
                'homepage_blog_1_image', 'homepage_blog_1_date', 'homepage_blog_1_category', 'homepage_blog_1_title', 'homepage_blog_1_excerpt', 'homepage_blog_1_url',
                'homepage_blog_2_image', 'homepage_blog_2_date', 'homepage_blog_2_category', 'homepage_blog_2_title', 'homepage_blog_2_excerpt', 'homepage_blog_2_url',
                'homepage_blog_3_image', 'homepage_blog_3_date', 'homepage_blog_3_category', 'homepage_blog_3_title', 'homepage_blog_3_excerpt', 'homepage_blog_3_url',
                'final_cta_title', 'final_cta_description',
                'header_cta_1_text', 'header_cta_1_url', 'header_cta_2_text', 'header_cta_2_url',
                'contact_form_title', 'contact_form_subtitle', 'contact_form_name_label', 'contact_form_email_label',
                'contact_form_phone_label', 'contact_form_referral_label', 'contact_form_query_label', 
                'contact_form_query_placeholder', 'contact_form_submit_text',
                'office_title', 'office_description', 'office_address_title', 'office_address',
                'testimonials_title', 'testimonials_subtitle',
                'testimonial_1_content', 'testimonial_1_author', 'testimonial_1_title',
                'testimonial_2_content', 'testimonial_2_author', 'testimonial_2_title',
                'testimonial_3_content', 'testimonial_3_author', 'testimonial_3_title',
                'testimonial_4_content', 'testimonial_4_author', 'testimonial_4_title',
                'testimonial_5_content', 'testimonial_5_author', 'testimonial_5_title',
                'lead_magnet_title', 'lead_magnet_subtitle', 'lead_magnet_ebook_title', 'lead_magnet_ebook_description',
                'lead_magnet_form_title', 'lead_magnet_form_subtitle', 'lead_magnet_name_label', 'lead_magnet_email_label', 'lead_magnet_phone_label',
                'lead_magnet_submit_text', 'lead_magnet_privacy_text'
            );
            
            // Handle dynamic service tags
            if (isset($_POST['service_tags'])) {
                $service_tags = [];
                foreach ($_POST['service_tags'] as $tag) {
                    if (!empty($tag['text'])) {
                        $service_tags[] = array(
                            'text' => sanitize_text_field($tag['text']),
                            'url' => esc_url_raw($tag['url'])
                        );
                    }
                }
                update_option('service_tags', $service_tags);
            }              foreach ($fields as $field) {
                if (isset($_POST[$field])) {
                    if (in_array($field, array('hero_title', 'office_title', 'office_address', 'value_statement_title', 'blog_title', 'final_cta_title', 'lead_magnet_title'))) {
                        // Allow HTML for specific fields
                        update_option($field, wp_kses_post(wp_unslash($_POST[$field])));
                    } else {
                        // Sanitize text fields and remove magic quotes
                        update_option($field, sanitize_textarea_field(wp_unslash($_POST[$field])));
                    }
                }
            }
            
            // Create homepage_blog_posts array from individual fields
            $homepage_blog_posts = array();
            for ($i = 1; $i <= 3; $i++) {
                $homepage_blog_posts[] = array(
                    'image' => get_option("homepage_blog_{$i}_image", get_template_directory_uri() . '/assets/images/Aimpro-high-ranking-website-blog.png'),
                    'date' => get_option("homepage_blog_{$i}_date", 'Jun 17, 2025'),
                    'category' => get_option("homepage_blog_{$i}_category", 'Digital Marketing'),
                    'title' => get_option("homepage_blog_{$i}_title", 'Blog Post Title'),
                    'excerpt' => get_option("homepage_blog_{$i}_excerpt", 'Blog post excerpt...'),
                    'url' => get_option("homepage_blog_{$i}_url", '#')
                );
            }
            update_option('homepage_blog_posts', $homepage_blog_posts);
            
            echo '<div class="notice notice-success"><p>Landing page settings saved successfully!</p></div>';        }
    }
    
    // Only output HTML if we're on the admin page
    if (!isset($_GET['page']) || $_GET['page'] !== 'aimpro-landing-page') {
        return;
    }
    
    ?>
    <div class="wrap">
        <h1>Landing Page Settings</h1>
        <p>Edit the content for your landing page. Changes will appear immediately on the frontend.</p>
        
        <form method="post" action="">
            <?php wp_nonce_field('aimpro_landing_page_save', 'aimpro_landing_page_nonce'); ?>
            
            <div class="aimpro-admin-sections">
                
                <!-- Hero Section -->
                <div class="aimpro-admin-section">
                    <h2>Hero Section</h2>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Badge Text</th>
                            <td>
                                <input type="text" name="hero_badge_text" value="<?php echo esc_attr(get_option('hero_badge_text', 'Award-Winning Digital Agency')); ?>" class="regular-text" />
                                <p class="description">Small badge text above the main title</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Main Title</th>
                            <td>
                                <textarea name="hero_title" rows="3" class="large-text"><?php echo esc_textarea(get_option('hero_title', '<h1 class="hero-title">Scale Your Business With <span class="highlight curly-underline">PRECISION</span> Digital <span class="highlight-word" style="color: #f15a25 !important; -webkit-text-fill-color: #f15a25 !important;">Marketing</span></h1>')); ?></textarea>
                                <p class="description">Main hero title (HTML allowed for styling)</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Subtitle</th>
                            <td>
                                <textarea name="hero_subtitle" rows="3" class="large-text"><?php echo esc_textarea(get_option('hero_subtitle', 'Expert Lead Generation, SEO, PPC & Automation. Data-driven strategies that deliver <strong class="highlight-underline">MEASURABLE RESULTS</strong> and accelerate your <strong class="highlight-word">growth</strong>.')); ?></textarea>
                                <p class="description">Hero subtitle text</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Primary CTA Text</th>
                            <td>
                                <input type="text" name="hero_primary_cta_text" value="<?php echo esc_attr(get_option('hero_primary_cta_text', 'CLAIM YOUR FREE GROWTH STRATEGY')); ?>" class="regular-text" />
                            </td>
                        </tr>                        <tr>
                            <th scope="row">Primary CTA URL</th>
                            <td>
                                <input type="text" name="hero_primary_cta_url" value="<?php echo esc_attr(get_option('hero_primary_cta_url', '#contact')); ?>" class="regular-text" />
                            </td>
                        </tr>
                    </table>
                    
                    <h3>Hero Straplines (Rotating Text)</h3>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Strapline 1</th>
                            <td>
                                <input type="text" name="hero_strapline_1" value="<?php echo esc_attr(get_option('hero_strapline_1', 'No Fluff. Just Results.')); ?>" class="regular-text" />
                                <p class="description">First rotating message (appears first)</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Strapline 2</th>
                            <td>
                                <input type="text" name="hero_strapline_2" value="<?php echo esc_attr(get_option('hero_strapline_2', 'Data-Driven Strategy. Measurable Results.')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Strapline 3</th>
                            <td>
                                <input type="text" name="hero_strapline_3" value="<?php echo esc_attr(get_option('hero_strapline_3', 'Grow Your Business With Precision Marketing.')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Strapline 4</th>
                            <td>
                                <input type="text" name="hero_strapline_4" value="<?php echo esc_attr(get_option('hero_strapline_4', 'Your High-ROI Digital Marketing Partner')); ?>" class="regular-text" />
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- Stats Section -->
                <div class="aimpro-admin-section">
                    <h2>Stats Section</h2>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Stat 1</th>
                            <td>
                                <input type="number" name="stat_1_number" value="<?php echo esc_attr(get_option('stat_1_number', '25')); ?>" class="small-text" />
                                <input type="text" name="stat_1_label" value="<?php echo esc_attr(get_option('stat_1_label', 'Years of Experience')); ?>" class="regular-text" placeholder="Label" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Stat 2</th>
                            <td>
                                <input type="number" name="stat_2_number" value="<?php echo esc_attr(get_option('stat_2_number', '98')); ?>" class="small-text" />
                                <input type="text" name="stat_2_label" value="<?php echo esc_attr(get_option('stat_2_label', 'Increase in Client Leads')); ?>" class="regular-text" placeholder="Label" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Stat 3</th>
                            <td>
                                <input type="number" name="stat_3_number" value="<?php echo esc_attr(get_option('stat_3_number', '15')); ?>" class="small-text" />
                                <input type="text" name="stat_3_label" value="<?php echo esc_attr(get_option('stat_3_label', 'Industries Transformed')); ?>" class="regular-text" placeholder="Label" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Stat 4</th>
                            <td>
                                <input type="number" name="stat_4_number" value="<?php echo esc_attr(get_option('stat_4_number', '199')); ?>" class="small-text" />
                                <input type="text" name="stat_4_label" value="<?php echo esc_attr(get_option('stat_4_label', 'Increase in Conversion Rates')); ?>" class="regular-text" placeholder="Label" />
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- Services Section -->
                <div class="aimpro-admin-section">
                    <h2>Services Section</h2>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Section Title</th>
                            <td>
                                <textarea name="services_title" rows="2" class="large-text"><?php echo esc_textarea(get_option('services_title', 'Premium Digital Marketing Solutions That <span class="highlight curly-underline">DELIVER</span>')); ?></textarea>
                                <p class="description">Services section main title</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Section Subtitle</th>
                            <td>
                                <textarea name="services_subtitle" rows="2" class="large-text"><?php echo esc_textarea(get_option('services_subtitle', 'Zero fluff. Pure performance. Our integrated marketing ecosystem works seamlessly to transform prospects into profits.')); ?></textarea>
                                <p class="description">Services section subtitle</p>
                            </td>
                        </tr>                    </table>
                </div>
                  <!-- Service Tags Section -->
                <div class="aimpro-admin-section">
                    <h2>Service Tags Strip</h2>
                    <p class="description">These are the service tags that appear below the hero section. You can add, remove, and reorder them.</p>
                    
                    <div id="service-tags-container">
                        <?php 
                        $service_tags = get_option('service_tags', array(
                            array('text' => '/seo-services'),
                            array('text' => 'Google Ads', 'url' => '/google-ads'),
                            array('text' => 'Social Media', 'url' => '/meta-ads'),
                            array('text' => 'Website', 'url' => '/website-design'),
                            array('text' => 'Ads', 'url' => '/retargeting-display'),
                            array('text' => 'Email', 'url' => '/email-campaigns'),
                            array('text' => 'AI Automation', 'url' => '/ai-tools'),
                            array('text' => 'CRM', 'url' => '/ai-crm-setup'),
                        ));
                        
                        foreach ($service_tags as $index => $tag): ?>
                            <div class="service-tag-row" style="display: flex; margin-bottom: 10px; align-items: center;">
                                <span class="drag-handle" style="cursor: move; margin-right: 10px;">⋮⋮</span>
                                <input type="text" name="service_tags[<?php echo $index; ?>][text]" 
                                       value="<?php echo esc_attr($tag['text']); ?>" 
                                       placeholder="Tag Name" class="regular-text" style="margin-right: 10px;" />
                                <input type="text" name="service_tags[<?php echo $index; ?>][url]" 
                                       value="<?php echo esc_attr($tag['url']); ?>" 
                                       placeholder="/page-url or full URL" class="regular-text" style="margin-right: 10px;" />
                                <button type="button" class="button remove-tag" onclick="removeServiceTag(this)">Remove</button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <button type="button" class="button button-secondary" onclick="addServiceTag()">Add New Tag</button>
                    <p class="description">Enter the service offerings you want to highlight. Use relative URLs (e.g., /seo-services) or full URLs.</p>
                    
                    <script>
                    let tagIndex = <?php echo count($service_tags); ?>;
                    
                    function addServiceTag() {
                        const container = document.getElementById('service-tags-container');
                        const newRow = document.createElement('div');
                        newRow.className = 'service-tag-row';
                        newRow.style.cssText = 'display: flex; margin-bottom: 10px; align-items: center;';
                        newRow.innerHTML = `
                            <span class="drag-handle" style="cursor: move; margin-right: 10px;">⋮⋮</span>
                            <input type="text" name="service_tags[${tagIndex}][text]" placeholder="Tag Name" class="regular-text" style="margin-right: 10px;" />
                            <input type="text" name="service_tags[${tagIndex}][url]" placeholder="/page-url or full URL" class="regular-text" style="margin-right: 10px;" />
                            <button type="button" class="button remove-tag" onclick="removeServiceTag(this)">Remove</button>
                        `;
                        container.appendChild(newRow);
                        tagIndex++;
                    }
                    
                    function removeServiceTag(button) {
                        if (confirm('Are you sure you want to remove this tag?')) {
                            button.parentElement.remove();
                        }
                    }
                    
                    // Make tags sortable (basic drag and drop)
                    document.addEventListener('DOMContentLoaded', function() {
                        const container = document.getElementById('service-tags-container');
                        let draggedElement = null;
                        
                        container.addEventListener('dragstart', function(e) {
                            if (e.target.classList.contains('drag-handle')) {
                                draggedElement = e.target.parentElement;
                                e.dataTransfer.effectAllowed = 'move';
                            }
                        });
                        
                        container.addEventListener('dragover', function(e) {
                            e.preventDefault();
                            e.dataTransfer.dropEffect = 'move';
                        });
                        
                        container.addEventListener('drop', function(e) {
                            e.preventDefault();
                            if (draggedElement && e.target.closest('.service-tag-row')) {
                                const targetRow = e.target.closest('.service-tag-row');
                                if (targetRow !== draggedElement) {
                                    container.insertBefore(draggedElement, targetRow.nextSibling);
                                }
                            }
                        });
                        
                        // Make drag handles draggable
                        container.querySelectorAll('.drag-handle').forEach(handle => {
                            handle.draggable = true;
                        });
                    });
                    </script>
                </div>
                
                <!-- Header CTA Buttons -->
                <div class="aimpro-admin-section">
                    <h2>Header CTA Buttons</h2>
                    <p class="description">The call-to-action buttons in the top navigation header.</p>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Primary CTA Button</th>
                            <td>
                                <input type="text" name="header_cta_1_text" value="<?php echo esc_attr(get_option('header_cta_1_text', 'Get a Free Audit')); ?>" class="regular-text" placeholder="Button Text" />
                                <input type="text" name="header_cta_1_url" value="<?php echo esc_attr(get_option('header_cta_1_url', '#contact')); ?>" class="regular-text" placeholder="Button URL" style="margin-top: 5px;" />
                                <p class="description">Primary header button (outline style)</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Secondary CTA Button</th>
                            <td>
                                <input type="text" name="header_cta_2_text" value="<?php echo esc_attr(get_option('header_cta_2_text', 'Book a Call')); ?>" class="regular-text" placeholder="Button Text" />
                                <input type="text" name="header_cta_2_url" value="<?php echo esc_attr(get_option('header_cta_2_url', 'tel:+441212858490')); ?>" class="regular-text" placeholder="Button URL" style="margin-top: 5px;" />
                                <p class="description">Secondary header button (solid style). Use "tel:" for phone numbers.</p>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- Contact Form Labels -->
                <div class="aimpro-admin-section">
                    <h2>Contact Form Labels</h2>
                    <p class="description">customise the contact form field labels and messages.</p>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Form Title</th>
                            <td>
                                <input type="text" name="contact_form_title" value="<?php echo esc_attr(get_option('contact_form_title', 'Get In Touch')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Form Subtitle</th>
                            <td>
                                <textarea name="contact_form_subtitle" rows="2" class="large-text"><?php echo esc_textarea(get_option('contact_form_subtitle', 'We\'d love to hear from you. Send us a message and we\'ll respond as soon as possible.')); ?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Field Labels</th>
                            <td>
                               
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 10px;">
                                    <input type="text" name="contact_form_name_label" value="<?php echo esc_attr(get_option('contact_form_name_label', 'Name *')); ?>" class="regular-text" placeholder="Name Label" />
                                    <input type="text" name="contact_form_email_label" value="<?php echo esc_attr(get_option('contact_form_email_label', 'Email *')); ?>" class="regular-text" placeholder="Email Label" />
                                    <input type="text" name="contact_form_phone_label" value="<?php echo esc_attr(get_option('contact_form_phone_label', 'Phone')); ?>" class="regular-text" placeholder="Phone Label" />
                                    <input type="text" name="contact_form_referral_label" value="<?php echo esc_attr(get_option('contact_form_referral_label', 'Where did you find us?')); ?>" class="regular-text" placeholder="Referral Label" />
                                </div>
                                <input type="text" name="contact_form_query_label" value="<?php echo esc_attr(get_option('contact_form_query_label', 'Query')); ?>" class="regular-text" placeholder="Query Label" style="margin-bottom: 10px;" />
                                <input type="text" name="contact_form_query_placeholder" value="<?php echo esc_attr(get_option('contact_form_query_placeholder', 'Tell us about your inquiry...')); ?>" class="regular-text" placeholder="Query Placeholder Text" />
                                <p class="description">customise the labels for all form fields.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Submit Button</th>
                            <td>
                                <input type="text" name="contact_form_submit_text" value="<?php echo esc_attr(get_option('contact_form_submit_text', 'Submit')); ?>" class="regular-text" />
                                <p class="description">Text for the form submit button.</p>
                                                                                                             </td>
                        </tr>                    </table>
                </div>
                
                <!-- Lead Magnet Section -->
                <div class="aimpro-admin-section">
                    <h2>Lead Magnet Section</h2>
                    <p class="description">customise the free digital marketing guide lead magnet section.</p>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Section Title</th>
                            <td>
                                <textarea name="lead_magnet_title" rows="2" class="large-text"><?php echo esc_textarea(get_option('lead_magnet_title', 'Get Our Free Digital Marketing <span class="highlight curly-underline">GUIDE</span>')); ?></textarea>
                                <p class="description">Main title for the lead magnet section (HTML allowed)</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Section Subtitle</th>
                            <td>
                                <textarea name="lead_magnet_subtitle" rows="2" class="large-text"><?php echo esc_textarea(get_option('lead_magnet_subtitle', 'Download our comprehensive digital marketing guide packed with proven strategies to grow your business.')); ?></textarea>
                                <p class="description">Subtitle text below the main title</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Ebook Title</th>
                            <td>
                                <input type="text" name="lead_magnet_ebook_title" value="<?php echo esc_attr(get_option('lead_magnet_ebook_title', 'The Ultimate Digital Marketing Playbook')); ?>" class="regular-text" />
                                <p class="description">Title of the ebook/guide</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Ebook Description</th>
                            <td>
                                <textarea name="lead_magnet_ebook_description" rows="3" class="large-text"><?php echo esc_textarea(get_option('lead_magnet_ebook_description', 'Discover the exact strategies we use to help our clients increase leads by 200%+ and dominate their local markets.')); ?></textarea>
                                <p class="description">Description of what's inside the ebook</p>
                            </td>
                        </tr>                        <tr>
                            <th scope="row">Form Title</th>
                            <td>
                                <input type="text" name="lead_magnet_form_title" value="<?php echo esc_attr(get_option('lead_magnet_form_title', 'Get Your Free Digital Marketing Guide')); ?>" class="regular-text" />
                                <p class="description">Title above the form</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Form Subtitle</th>
                            <td>
                                <textarea name="lead_magnet_form_subtitle" rows="2" class="large-text"><?php echo esc_textarea(get_option('lead_magnet_form_subtitle', 'Fill out the form below and we\'ll send you our comprehensive guide plus schedule a free consultation.')); ?></textarea>
                                <p class="description">Subtitle text below the form title</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Name Field Label</th>
                            <td>
                                <input type="text" name="lead_magnet_name_label" value="<?php echo esc_attr(get_option('lead_magnet_name_label', 'Full Name *')); ?>" class="regular-text" />
                                <p class="description">Label for the name field</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Email Field Label</th>
                            <td>
                                <input type="text" name="lead_magnet_email_label" value="<?php echo esc_attr(get_option('lead_magnet_email_label', 'Email Address *')); ?>" class="regular-text" />
                                <p class="description">Label for the email field</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Phone Field Label</th>
                            <td>
                                <input type="text" name="lead_magnet_phone_label" value="<?php echo esc_attr(get_option('lead_magnet_phone_label', 'Phone Number *')); ?>" class="regular-text" />
                                <p class="description">Label for the phone field</p>
                            </td>                        </tr>
                        <tr>
                            <th scope="row">Submit Button Text</th>
                            <td>
                                <input type="text" name="lead_magnet_submit_text" value="<?php echo esc_attr(get_option('lead_magnet_submit_text', 'GET FREE EBOOK NOW')); ?>" class="regular-text" />
                                <p class="description">Text for the submit button</p>
                            </td>
                        </tr>                        <tr>
                            <th scope="row">Privacy Text</th>
                            <td>
                                <textarea name="lead_magnet_privacy_text" rows="2" class="large-text"><?php echo esc_textarea(get_option('lead_magnet_privacy_text', 'We respect your privacy and will never share your information. <a href="/privacy-policy">Privacy Policy</a>')); ?></textarea>
                                <p class="description">Privacy notice below the form (HTML allowed for links)</p>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- Value Statement Section -->
                <div class="aimpro-admin-section">
                    <h2>Value Statement Section</h2>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Section Title</th>
                            <td>
                                <textarea name="value_statement_title" rows="2" class="large-text"><?php echo esc_textarea(get_option('value_statement_title', 'A Results-Driven Digital Agency Obsessed With Your <span class="highlight curly-underline">SUCCESS</span>')); ?></textarea>
                                <p class="description">Value statement main title (HTML allowed)</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Description</th>
                            <td>
                                <textarea name="value_statement_description" rows="4" class="large-text"><?php echo esc_textarea(get_option('value_statement_description', 'We partner with ambitious businesses to transform their digital presence through intelligent strategies and performance-focused marketing. Our proven methodologies deliver quantifiable results that drive exponential growth and maximise your competitive advantage.')); ?></textarea>
                                <p class="description">Value statement description text</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">CTA Button Text</th>
                            <td>
                                <input type="text" name="value_statement_cta_text" value="<?php echo esc_attr(get_option('value_statement_cta_text', 'CLAIM YOUR FREE GROWTH AUDIT')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">CTA Button URL</th>
                            <td>
                                <input type="text" name="value_statement_cta_url" value="<?php echo esc_attr(get_option('value_statement_cta_url', '#contact')); ?>" class="regular-text" />
                            </td>
                        </tr>
                    </table>
                </div>
                  <!-- Blog Section -->
                <div class="aimpro-admin-section">
                    <h2>Blog Section</h2>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Section Title</th>
                            <td>
                                <textarea name="blog_title" rows="2" class="large-text"><?php echo esc_textarea(get_option('blog_title', 'Scale Up Your <span class="highlight curly-underline">MARKETING</span>')); ?></textarea>
                                <p class="description">Blog section main title (HTML allowed)</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Section Subtitle</th>
                            <td>
                                <textarea name="blog_subtitle" rows="3" class="large-text"><?php echo esc_textarea(get_option('blog_subtitle', 'Zero secrets. Maximum value. We share proven strategies and insider insights to help ambitious marketers like you accelerate growth, drive traffic, and maximise revenue.')); ?></textarea>
                                <p class="description">Blog section subtitle</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">CTA Button Text</th>
                            <td>
                                <input type="text" name="blog_cta_text" value="<?php echo esc_attr(get_option('blog_cta_text', 'More Blogs')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">CTA Button URL</th>
                            <td>
                                <input type="text" name="blog_cta_url" value="<?php echo esc_attr(get_option('blog_cta_url', '/blog')); ?>" class="regular-text" />
                            </td>
                        </tr>
                    </table>
                    
                    <h3>Homepage Featured Blog Posts</h3>
                    <p>Configure the 3 blog posts that appear on the homepage:</p>
                    
                    <!-- Blog Post 1 -->
                    <h4>Blog Post 1</h4>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Image URL</th>
                            <td>
                                <input type="url" name="homepage_blog_1_image" value="<?php echo esc_attr(get_option('homepage_blog_1_image', get_template_directory_uri() . '/assets/images/Aimpro-high-ranking-website-blog.png')); ?>" class="large-text" />
                                <p class="description">Full URL to the blog post image</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Date</th>
                            <td>
                                <input type="text" name="homepage_blog_1_date" value="<?php echo esc_attr(get_option('homepage_blog_1_date', 'Jun 17, 2025')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Category</th>
                            <td>
                                <input type="text" name="homepage_blog_1_category" value="<?php echo esc_attr(get_option('homepage_blog_1_category', 'Social Media')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Title</th>
                            <td>
                                <input type="text" name="homepage_blog_1_title" value="<?php echo esc_attr(get_option('homepage_blog_1_title', 'Social Media Strategy That Actually Drives Leads in 2025')); ?>" class="large-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Excerpt</th>
                            <td>
                                <textarea name="homepage_blog_1_excerpt" rows="3" class="large-text"><?php echo esc_textarea(get_option('homepage_blog_1_excerpt', 'Posting random content and hoping for results? That doesn\'t cut it anymore. In 2025, effective social media marketing means strategy...')); ?></textarea>
                            </td>
                        </tr>                        <tr>
                            <th scope="row">URL</th>
                            <td>
                                <input type="text" name="homepage_blog_1_url" value="<?php echo esc_attr(get_option('homepage_blog_1_url', '/social-media-strategy-that-actually-drives-leads-in-2025')); ?>" class="large-text" />
                                <p class="description">Relative URL to the blog post (e.g., /blog-post-slug)</p>
                            </td>
                        </tr>
                    </table>
                    
                    <!-- Blog Post 2 -->
                    <h4>Blog Post 2</h4>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Image URL</th>
                            <td>
                                <input type="url" name="homepage_blog_2_image" value="<?php echo esc_attr(get_option('homepage_blog_2_image', get_template_directory_uri() . '/assets/images/Aimpro-high-ranking-website-blog.png')); ?>" class="large-text" />
                                <p class="description">Full URL to the blog post image</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Date</th>                            <td>
                                <input type="text" name="homepage_blog_2_date" value="<?php echo esc_attr(get_option('homepage_blog_2_date', 'Jun 17, 2025')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Category</th>                            <td>
                                <input type="text" name="homepage_blog_2_category" value="<?php echo esc_attr(get_option('homepage_blog_2_category', 'PPC')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Title</th>                            <td>
                                <input type="text" name="homepage_blog_2_title" value="<?php echo esc_attr(get_option('homepage_blog_2_title', 'How to Win With Google Ads in 2025: 4 Strategies That Actually Work')); ?>" class="large-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Excerpt</th>
                            <td>
                                <textarea name="homepage_blog_2_excerpt" rows="3" class="large-text"><?php echo esc_textarea(get_option('homepage_blog_2_excerpt', 'If you\'re spending money on Google Ads but not seeing results, you\'re not alone. PPC in 2025 is more competitive...')); ?></textarea>
                            </td>
                        </tr>                        <tr>
                            <th scope="row">URL</th>
                            <td>
                                <input type="text" name="homepage_blog_2_url" value="<?php echo esc_attr(get_option('homepage_blog_2_url', '/how-to-win-with-google-ads-in-2025-4-strategies-that-actually-work')); ?>" class="large-text" />
                                <p class="description">Relative URL to the blog post (e.g., /blog-post-slug)</p>
                            </td>
                        </tr>
                    </table>
                    
                    <!-- Blog Post 3 -->
                    <h4>Blog Post 3</h4>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Image URL</th>
                            <td>
                                <input type="url" name="homepage_blog_3_image" value="<?php echo esc_attr(get_option('homepage_blog_3_image', get_template_directory_uri() . '/assets/images/Aimpro-high-ranking-website-blog.png')); ?>" class="large-text" />
                                <p class="description">Full URL to the blog post image</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Date</th>                            <td>
                                <input type="text" name="homepage_blog_3_date" value="<?php echo esc_attr(get_option('homepage_blog_3_date', 'Jun 17, 2025')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Category</th>                            <td>
                                <input type="text" name="homepage_blog_3_category" value="<?php echo esc_attr(get_option('homepage_blog_3_category', 'SEO')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Title</th>                            <td>
                                <input type="text" name="homepage_blog_3_title" value="<?php echo esc_attr(get_option('homepage_blog_3_title', '5 Proven Local SEO Strategies to Dominate Your Area in 2025')); ?>" class="large-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Excerpt</th>
                            <td>
                                <textarea name="homepage_blog_3_excerpt" rows="3" class="large-text"><?php echo esc_textarea(get_option('homepage_blog_3_excerpt', 'Looking to dominate your local market and attract high-quality leads? Local SEO is one of the most cost-effective and high-ROI...')); ?></textarea>
                            </td>
                        </tr>                        <tr>
                            <th scope="row">URL</th>
                            <td>
                                <input type="text" name="homepage_blog_3_url" value="<?php echo esc_attr(get_option('homepage_blog_3_url', '/5-proven-local-seo-strategies-to-dominate-your-area-in-2025')); ?>" class="large-text" />
                                <p class="description">Relative URL to the blog post (e.g., /blog-post-slug)</p>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- Final CTA Section -->
                <div class="aimpro-admin-section">
                    <h2>Final CTA Section</h2>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Section Title</th>
                            <td>
                                <textarea name="final_cta_title" rows="2" class="large-text"><?php echo esc_textarea(get_option('final_cta_title', 'You Bring the Ambition, We Drive the <span class="highlight curly-underline">RESULTS</span>')); ?></textarea>
                                <p class="description">Final CTA main title (HTML allowed)</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Description</th>
                            <td>
                                <textarea name="final_cta_description" rows="3" class="large-text"><?php echo esc_textarea(get_option('final_cta_description', 'Request a marketing review today. We\'ll send you a detailed analysis of your website and marketing, breaking down your next steps to success.')); ?></textarea>
                                <p class="description">Description text for the final CTA section</p>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <!-- Office Section -->
                <div class="aimpro-admin-section">
                    <h2>Office Visit Section</h2>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Section Title</th>
                            <td>                                <textarea name="office_title" rows="2" class="large-text"><?php echo esc_textarea(get_option('office_title', 'Come See Us... We\'re a <span class="highlight curly-underline">REAL</span> Company with Real Humans')); ?></textarea>
                                <p class="description">Office section title (HTML allowed)</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Description</th>
                            <td>
                                <textarea name="office_description" rows="3" class="large-text"><?php echo esc_textarea(get_option('office_description', 'Let\'s discuss your project over a coffee. Book a time to visit our Birmingham office and meet the team behind your marketing success.')); ?></textarea>
                                <p class="description">Office section description</p>
                            </td </tr>
                        <tr>
                            <th scope="row">Address Title</th>
                            <td>
                                <input type="text" name="office_address_title" value="<?php echo esc_attr(get_option('office_address_title', 'Our Birmingham Office')); ?>" class="regular-text" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Address Details</th>
                            <td>
                                <textarea name="office_address" rows="4" class="large-text"><?php echo esc_textarea(get_option('office_address', '<p><strong>Located in: 55 Colmore Row</strong><br>
                    Address: 55 Colmore Row, Birmingham B3 2AA<br>
                    Right in the heart of Birmingham\'s business district</p>')); ?></textarea>
                                <p class="description">Full address details (HTML allowed)</p>
                            </td>                        </tr>
                    </table>
                </div>
                
                <!-- Testimonials Section -->
                <div class="aimpro-admin-section">
                    <h2>Testimonials Section</h2>
                    <table class="form-table">
                        <tr>
                            <th scope="row">Section Title</th>
                            <td>
                                <input type="text" name="testimonials_title" value="<?php echo esc_attr(get_option('testimonials_title', 'Don\'t Just Take Our Word for It')); ?>" class="regular-text" />
                                <p class="description">Main heading for testimonials section</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Section Subtitle</th>
                            <td>
                                <textarea name="testimonials_subtitle" rows="2" class="large-text"><?php echo esc_textarea(get_option('testimonials_subtitle', 'Discover how we\'ve transformed businesses across industries with strategies that deliver measurable growth:')); ?></textarea>
                                <p class="description">Description below the testimonials title</p>
                            </td>
                        </tr>
                    </table>
                    
                    <h3>Individual Testimonials</h3>
                    
                    <!-- Testimonial 1 -->
                    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <h4>Testimonial 1</h4>
                        <table class="form-table">
                            <tr>
                                <th scope="row">Content</th>
                                <td>
                                    <textarea name="testimonial_1_content" rows="3" class="large-text"><?php echo esc_textarea(get_option('testimonial_1_content', 'Honestly, if you have a business that relies on your website to bring in business, don\'t waste your time on any other company. From my experience, I have gained approximately 50% increase in qualified leads.')); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Name</th>
                                <td>
                                    <input type="text" name="testimonial_1_author" value="<?php echo esc_attr(get_option('testimonial_1_author', 'Emily Hargreaves')); ?>" class="regular-text" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Title</th>
                                <td>
                                    <input type="text" name="testimonial_1_title" value="<?php echo esc_attr(get_option('testimonial_1_title', 'Marketing Director')); ?>" class="regular-text" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <h4>Testimonial 2</h4>
                        <table class="form-table">
                            <tr>
                                <th scope="row">Content</th>
                                <td>
                                    <textarea name="testimonial_2_content" rows="3" class="large-text"><?php echo esc_textarea(get_option('testimonial_2_content', 'No negatives at all. One of the best companies we have ever worked with. So dynamic and on trend. Incredibly proactive in everything they do and the bonus is that they are such lovely people to work with.')); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Name</th>
                                <td>
                                    <input type="text" name="testimonial_2_author" value="<?php echo esc_attr(get_option('testimonial_2_author', 'Charlotte Davies')); ?>" class="regular-text" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Title</th>
                                <td>
                                    <input type="text" name="testimonial_2_title" value="<?php echo esc_attr(get_option('testimonial_2_title', 'Business Owner')); ?>" class="regular-text" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <h4>Testimonial 3</h4>
                        <table class="form-table">
                            <tr>
                                <th scope="row">Content</th>
                                <td>
                                    <textarea name="testimonial_3_content" rows="3" class="large-text"><?php echo esc_textarea(get_option('testimonial_3_content', 'The Google Ads campaigns run by Aimpro Digital have been a fantastic success. Their attention to detail and ability to target the right audience has really paid off. We\'ve seen a significant increase in traffic and conversions, all thanks to their hard work and expertise!')); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Name</th>
                                <td>
                                    <input type="text" name="testimonial_3_author" value="<?php echo esc_attr(get_option('testimonial_3_author', 'Tom Ridley')); ?>" class="regular-text" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Title</th>
                                <td>
                                    <input type="text" name="testimonial_3_title" value="<?php echo esc_attr(get_option('testimonial_3_title', 'Sales Director, Sheffield')); ?>" class="regular-text" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <!-- Testimonial 4 -->
                    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <h4>Testimonial 4</h4>
                        <table class="form-table">
                            <tr>
                                <th scope="row">Content</th>
                                <td>
                                    <textarea name="testimonial_4_content" rows="3" class="large-text"><?php echo esc_textarea(get_option('testimonial_4_content', 'Aimpro Digital has been a game-changer for our business! Since partnering with them, we\'ve seen a consistent flow of quality leads that truly align with our services. It\'s been a breath of fresh air to work with a team that understands our goals and delivers on their promises.')); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Name</th>
                                <td>
                                    <input type="text" name="testimonial_4_author" value="<?php echo esc_attr(get_option('testimonial_4_author', 'Sarah Thompson')); ?>" class="regular-text" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Title</th>
                                <td>
                                    <input type="text" name="testimonial_4_title" value="<?php echo esc_attr(get_option('testimonial_4_title', 'Marketing Manager, London')); ?>" class="regular-text" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <!-- Testimonial 5 -->
                    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px;">
                        <h4>Testimonial 5</h4>
                        <table class="form-table">
                            <tr>
                                <th scope="row">Content</th>
                                <td>
                                    <textarea name="testimonial_5_content" rows="3" class="large-text"><?php echo esc_textarea(get_option('testimonial_5_content', 'Our online visibility has improved dramatically thanks to Aimpro Digital\'s SEO expertise. Within months, we went from barely being on the map to ranking on the first page for key terms. The team is knowledgeable, transparent, and always ready with helpful advice. Couldn\'t recommend them more!')); ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Name</th>
                                <td>
                                    <input type="text" name="testimonial_5_author" value="<?php echo esc_attr(get_option('testimonial_5_author', 'James Whitfield')); ?>" class="regular-text" />
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Author Title</th>
                                <td>
                                    <input type="text" name="testimonial_5_title" value="<?php echo esc_attr(get_option('testimonial_5_title', 'Director, Birmingham')); ?>" class="regular-text" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
            </div>
            
            <?php submit_button('Save Landing Page Settings'); ?>
        </form>
    </div>
    
    <style>
    .aimpro-admin-section {
        background: #fff;
        border: 1px solid #c3c4c7;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        margin: 20px 0;
        padding: 20px;
    }
    .aimpro-admin-section h2 {
        margin-top: 0;
        color: #1d2327;
        font-size: 18px;
        font-weight: 600;
        border-bottom: 1px solid #dcdcde;
        padding-bottom: 10px;
    }
    .aimpro-admin-sections .form-table th {
        width: 200px;
        font-weight: 600;
    }
    </style>
    <?php
}

/**
 * Migrate old service tags to new dynamic format
 */
function aimpro_migrate_service_tags() {
    // Check if migration is needed
    if (get_option('service_tags_migrated', false)) {
        return;
    }
    
    // Get old service tags
    $old_tags = array();
    for ($i = 1; $i <= 8; $i++) {
        $tag_text = get_option("service_tag_$i", '');
        if (!empty($tag_text)) {
            // Map old tags to their likely URLs
            $url_mapping = array(
                'SEO' => '/seo-services',
                'Google Ads' => '/google-ads',
                'Social Media' => '/meta-ads',
                'Website' => '/website-design',
                'Ads' => '/retargeting-display',
                'Email' => '/email-campaigns',
                'AI Automation' => '/ai-tools',
                'CRM' => '/ai-crm-setup',
            );
            
            $url = isset($url_mapping[$tag_text]) ? $url_mapping[$tag_text] : '/';
            
            $old_tags[] = array(
                'text' => $tag_text,
                'url' => $url
            );
        }
    }
    
    // Only migrate if we found old tags and new format doesn't exist
    if (!empty($old_tags) && !get_option('service_tags', false)) {
        update_option('service_tags', $old_tags);
    }
    
    // Mark migration as complete
    update_option('service_tags_migrated', true);
}
add_action('init', 'aimpro_migrate_service_tags');

// Clean up escaped quotes in database values
// Run this once to fix existing data
function aimpro_cleanup_escaped_quotes() {    $fields_to_clean = array(
        'testimonials_title', 'testimonials_subtitle',
        'testimonial_1_content', 'testimonial_2_content', 'testimonial_3_content', 
        'testimonial_4_content', 'testimonial_5_content',
        'office_description', 'value_statement_description', 'hero_subtitle',
        'contact_form_subtitle'
    );
    
    foreach ($fields_to_clean as $field) {
        $value = get_option($field);
        if ($value) {
            // Remove multiple levels of escaping
            $cleaned = wp_unslash($value);
            $cleaned = stripslashes($cleaned);
            $cleaned = str_replace(array('\\\'', '\\"'), array("'", '"'), $cleaned);
            update_option($field, $cleaned);
        }
    }
}

// Run cleanup on theme activation or when needed
// Uncomment the next line to run cleanup once
// Cleanup function disabled after fixing escaped quotes
// add_action('admin_init', 'aimpro_cleanup_escaped_quotes');

// Form Handling Functions
// =======================

// Create database table for form submissions
function aimpro_create_submissions_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        form_type varchar(50) NOT NULL,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20),
        company varchar(100),
        referral varchar(50),
        message text,
        ip_address varchar(45),
        user_agent text,
        submission_date datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_switch_theme', 'aimpro_create_submissions_table');

// Handle Lead Magnet Form Submission
function aimpro_handle_lead_magnet_form() {
    if (!isset($_POST['lead_magnet_form']) || !wp_verify_nonce($_POST['lead_magnet_nonce'], 'lead_magnet_submission')) {
        return;
    }
    
    // Sanitize and validate input
    $name = sanitize_text_field($_POST['lead_name']);
    $email = sanitize_email($_POST['lead_email']);
    $phone = sanitize_text_field($_POST['lead_phone']);
    
    if (empty($name) || empty($email) || !is_email($email)) {
        wp_redirect(add_query_arg('lead_error', '1', $_POST['_wp_http_referer']));
        exit;
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    // Store in database
    $result = $wpdb->insert(
        $table_name,
        array(
            'form_type' => 'lead_magnet',
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT']
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    if ($result) {        // Send email notification to admin
        $to = 'sam@futurelab.solutions';
        $subject = 'New Lead Magnet Download Request - ' . get_bloginfo('name');
        $message = "New lead magnet download request:\n\n";
        $message .= "Name: {$name}\n";
        $message .= "Email: {$email}\n";
        $message .= "Phone: {$phone}\n";
        $message .= "IP Address: {$_SERVER['REMOTE_ADDR']}\n";
        $message .= "Date: " . current_time('mysql') . "\n";
        
        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: ' . get_bloginfo('name') . ' <noreply@' . parse_url(home_url(), PHP_URL_HOST) . '>',
            'Reply-To: ' . $email
        );
        
        wp_mail($to, $subject, $message, $headers);
        
        // Send auto-response to user
        $user_subject = 'Your Free Digital Marketing Guide - ' . get_bloginfo('name');
        $user_message = "Hi {$name},\n\n";
        $user_message .= "Thank you for requesting our Digital Marketing Guide!\n\n";
        $user_message .= "We'll be sending you the guide shortly along with some exclusive insights.\n\n";
        $user_message .= "Our team will also be in touch within 24 hours to schedule your free consultation.\n\n";
        $user_message .= "Best regards,\n";
        $user_message .= "The Aimpro Team\n";
        $user_message .= "sam@futurelab.solutions\n";
        $user_message .= "Phone: +44 121 285 8490";
        
        $user_headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Aimpro Digital <sam@futurelab.solutions>'
        );
        
        wp_mail($email, $user_subject, $user_message, $user_headers);
        
        wp_redirect(add_query_arg('lead_success', '1', $_POST['_wp_http_referer']));
    } else {
        wp_redirect(add_query_arg('lead_error', '1', $_POST['_wp_http_referer']));
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
    $name = sanitize_text_field($_POST['subscriber_name']);
    $email = sanitize_email($_POST['subscriber_email']);
    
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
    
    error_log("Newsletter signup - Insert result: " . ($result ? 'SUCCESS' : 'FAILED'));
    if (!$result) {
        error_log("Newsletter signup - Database error: " . $wpdb->last_error);
    }
    
    if ($result) {
        error_log('Newsletter signup successful, sending email notification');
        // Send email notification to admin
        $to = 'sam@futurelab.solutions';
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
        
        wp_redirect(add_query_arg('newsletter_success', '1', $_POST['_wp_http_referer'] ?? home_url()));
    } else {
        wp_redirect(add_query_arg('newsletter_error', '1', $_POST['_wp_http_referer'] ?? home_url()));
    }
    exit;
}

// AJAX handler for newsletter signup
function aimpro_handle_newsletter_signup_ajax() {
    // Check nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'newsletter_signup')) {
        wp_send_json_error('Invalid security token');
        return;
    }
    
    // Sanitize and validate input
    $name = sanitize_text_field($_POST['subscriber_name'] ?? '');
    $email = sanitize_email($_POST['subscriber_email'] ?? '');
    
    if (empty($name) || empty($email) || !is_email($email)) {
        wp_send_json_error('Please provide a valid name and email address');
        return;
    }
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'aimpro_submissions';
    
    // Check if table exists
    $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table_name'");
    if (!$table_exists) {
        wp_send_json_error('System error. Please try again later.');
        return;
    }
    
    // Check if email already exists for newsletter subscriptions
    $existing = $wpdb->get_var($wpdb->prepare(
        "SELECT id FROM $table_name WHERE email = %s AND form_type = 'newsletter'",
        $email
    ));
    
    if ($existing) {
        wp_send_json_success('You are already subscribed to our newsletter!');
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
        $to = 'sam@futurelab.solutions';
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
        
        wp_send_json_success('Thank you for subscribing! You\'ll receive our latest updates and tips.');
    } else {
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
 * Breadcrumbs Functionality
 */
/**
 * Helper function to display embedded videos consistently across templates
 *
 * @param string $video_url The URL of the video to embed
 * @param array $args Optional. Additional arguments for the video embed
 * @return string HTML output for the video embed
 */
function aimpro_video_embed($video_url, $args = array()) {
    if (empty($video_url)) {
        return '';
    }

    $defaults = array(
        'class' => 'video-embed',
        'width' => 800,
        'height' => 450,
        'title' => '',
    );
    
    $args = wp_parse_args($args, $defaults);
    
    // Get oEmbed HTML
    $embed_code = wp_oembed_get($video_url, array(
        'width' => $args['width'],
        'height' => $args['height'],
    ));
    
    if (!$embed_code) {
        return '';
    }
    
    $output = '<div class="' . esc_attr($args['class']) . '">';
    $output .= $embed_code;
    $output .= '</div>';
    
    if (!empty($args['title'])) {
        $output .= '<div class="video-caption">' . esc_html($args['title']) . '</div>';
    }
    
    return $output;
}

/**
 * Breadcrumbs function for all page templates
 * 
 * @return string HTML output for the breadcrumbs
 */
function aimpro_breadcrumbs() {
    // Settings
    $breadcrumb_separator = '<span class="breadcrumb-separator">/</span>';
    $home_title = 'Home';
    
    // Get the query & post information
    global $post, $wp_query;
    
    // Do not display on the homepage
    if (!is_front_page()) {
        
        // Build the breadcrumbs
        echo '<nav aria-label="Breadcrumb" class="breadcrumbs">';
        echo '<ol>';
        
        // Home page
        echo '<li class="breadcrumb-item"><a href="' . esc_url(home_url()) . '">' . esc_html($home_title) . '</a></li>';
        echo $breadcrumb_separator;
        
        if (is_archive() && !is_tax() && !is_category() && !is_tag()) {
            
            // Archive page
            echo '<li class="breadcrumb-item current">' . post_type_archive_title('', false) . '</li>';
            
        } else if (is_archive() && is_tax() && !is_category() && !is_tag()) {
            
            // Custom post type archive
            $post_type = get_post_type();
            if ($post_type != 'post') {
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
                echo '<li class="breadcrumb-item"><a href="' . esc_url($post_type_archive) . '">' . esc_html($post_type_object->labels->name) . '</a></li>';
                echo $breadcrumb_separator;
            }
            
            // Current term
            $current_term = get_queried_object();
            $taxonomy = get_taxonomy($current_term->taxonomy);
            echo '<li class="breadcrumb-item current">' . esc_html($current_term->name) . '</li>';
            
        } else if (is_single()) {
            
            // Single post
            $post_type = get_post_type();
            
            if ($post_type != 'post') {
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
                echo '<li class="breadcrumb-item"><a href="' . esc_url($post_type_archive) . '">' . esc_html($post_type_object->labels->name) . '</a></li>';
                echo $breadcrumb_separator;
            } else {
                // Categories
                $categories = get_the_category();
                if ($categories) {
                    $category = $categories[0];
                    echo '<li class="breadcrumb-item"><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
                    echo $breadcrumb_separator;
                }
            }
            
            // Current post
            echo '<li class="breadcrumb-item current">' . get_the_title() . '</li>';
            
        } else if (is_page()) {
            
            // Standard page
            if ($post->post_parent) {
                // Parent pages
                $parent_id = $post->post_parent;
                $breadcrumbs = array();
                
                while ($parent_id) {
                    $page = get_post($parent_id);
                    $breadcrumbs[] = '<li class="breadcrumb-item"><a href="' . esc_url(get_permalink($page->ID)) . '">' . get_the_title($page->ID) . '</a></li>';
                    $parent_id = $page->post_parent;
                }
                
                // Display breadcrumbs in reverse order
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1) echo $breadcrumb_separator;
                }
                
                echo $breadcrumb_separator;
            }
            
            // Current page
            echo '<li class="breadcrumb-item current">' . get_the_title() . '</li>';
            
        } else if (is_category()) {
            
            // Category page
            echo '<li class="breadcrumb-item current">' . single_cat_title('', false) . '</li>';
            
        } else if (is_tag()) {
            
            // Tag page
            echo '<li class="breadcrumb-item current">' . single_tag_title('', false) . '</li>';
            
        } else if (is_author()) {
            
            // Author archive
            global $author;
            $userdata = get_userdata($author);
            echo '<li class="breadcrumb-item current">' . esc_html($userdata->display_name) . '</li>';
            
        } else if (is_search()) {
            
            // Search results page
            echo '<li class="breadcrumb-item current">Search results for "' . get_search_query() . '"</li>';
            
        } else if (is_404()) {
            
            // 404 page
            echo '<li class="breadcrumb-item current">404 Error</li>';
            
        }
        
        echo '</ol>';
        echo '</nav>';
    }
}

/**
 * About Page Video Management
 * Add custom meta box for video upload in WordPress admin
 */

 // Add meta box for About page video
function aimpro_add_about_video_meta_box() {
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    // Only add to the About page or pages using the About template
    if ($page_slug === 'about' || $page_template === 'page-about.php' || $post->ID === get_option('aimpro_about_page_id')) {
        add_meta_box(
            'about_page_video',
            'About Page Video',
            'aimpro_about_video_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'aimpro_add_about_video_meta_box');

// Meta box callback function
function aimpro_about_video_meta_box_callback($post) {
    wp_nonce_field('aimpro_about_video_nonce', 'aimpro_about_video_nonce');
    
    $video_url = get_post_meta($post->ID, '_about_page_video', true);
    $video_type = get_post_meta($post->ID, '_about_page_video_type', true);
    $video_enabled = get_post_meta($post->ID, '_about_page_video_enabled', true);
    
    if (!$video_type) $video_type = 'upload'; // Default to upload
    
    ?>
    <table class="form-table">
        <tr>
            <th scope="row">
                <label for="about_video_enabled">Enable Video Section</label>
            </th>
            <td>
                <input type="checkbox" id="about_video_enabled" name="about_video_enabled" value="1" <?php checked($video_enabled, '1'); ?> />
                <p class="description">Check to display the video section on the About page.</p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="video_type">Video Type</label>
            </th>
            <td>
                <label style="margin-right: 20px;">
                    <input type="radio" name="video_type" value="upload" <?php checked($video_type, 'upload'); ?> />
                    Upload Video File
                </label>
                <label>
                    <input type="radio" name="video_type" value="url" <?php checked($video_type, 'url'); ?> />
                    YouTube/Vimeo URL
                </label>
                <p class="description">Choose whether to upload a video file or use a YouTube/Vimeo URL.</p>
            </td>
        </tr>
        <tr id="upload_video_row" style="<?php echo $video_type === 'url' ? 'display: none;' : ''; ?>">
            <th scope="row">
                <label for="about_video_url">Upload Video</label>
            </th>
            <td>
                <input type="hidden" id="about_video_url" name="about_video_url" value="<?php echo esc_url($video_url); ?>" />
                <div id="video_preview" style="margin-bottom: 10px;">
                    <?php if ($video_url && $video_type === 'upload'): ?>
                        <video width="300" height="200" controls>
                            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <br>
                        <button type="button" class="button" id="remove_video_btn">Remove Video</button>
                    <?php else: ?>
                        <p>No video selected</p>
                    <?php endif; ?>
                </div>
                <button type="button" class="button" id="upload_video_btn">
                    <?php echo ($video_url && $video_type === 'upload') ? 'Change Video' : 'Upload Video'; ?>
                </button>
                <p class="description">Upload a video file (MP4 recommended) for the About page.</p>
            </td>
        </tr>
        <tr id="url_video_row" style="<?php echo $video_type === 'upload' ? 'display: none;' : ''; ?>">
            <th scope="row">
                <label for="video_url_input">Video URL</label>
            </th>
            <td>
                <input type="url" id="video_url_input" name="video_url_input" value="<?php echo $video_type === 'url' ? esc_url($video_url) : ''; ?>" style="width: 100%; max-width: 500px;" placeholder="https://www.youtube.com/watch?v=..." />
                <div id="url_video_preview" style="margin-top: 10px;">
                    <?php if ($video_url && $video_type === 'url'): ?>
                        <div style="max-width: 300px;">
                            <?php echo aimpro_get_video_embed($video_url, 300, 200); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <p class="description">
                    Paste a YouTube or Vimeo URL here. Examples:<br>
                    • https://www.youtube.com/watch?v=VIDEO_ID<br>
                    • https://youtu.be/VIDEO_ID<br>
                    • https://vimeo.com/VIDEO_ID
                </p>
            </td>
        </tr>
    </table>
      <script>
    jQuery(document).ready(function($) {
        var mediaUploader;
        
        // Handle video type toggle
        $('input[name="video_type"]').change(function() {
            var selectedType = $(this).val();
            if (selectedType === 'upload') {
                $('#upload_video_row').show();
                $('#url_video_row').hide();
                $('#video_url_input').val('');
                $('#url_video_preview').empty();
            } else {
                $('#upload_video_row').hide();
                $('#url_video_row').show();
                $('#about_video_url').val('');
                updateVideoPreview('');
            }
        });
        
        // Handle URL input changes
        $('#video_url_input').on('input', function() {
            var url = $(this).val();
            if (url) {
                updateUrlPreview(url);
            } else {
                $('#url_video_preview').empty();
            }
        });
        
        function updateUrlPreview(url) {
            if (isValidVideoUrl(url)) {
                var embedCode = getEmbedCode(url, 300, 200);
                $('#url_video_preview').html('<div style="max-width: 300px;">' + embedCode + '</div>');
            } else {
                $('#url_video_preview').html('<p style="color: #d63384;">Please enter a valid YouTube or Vimeo URL</p>');
            }
        }
        
        function isValidVideoUrl(url) {
            var youtubeRegex = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/;
            var vimeoRegex = /(?:vimeo)\.com.*(?:videos|video|channels|)\/([\d]+)/i;
            return youtubeRegex.test(url) || vimeoRegex.test(url);
        }
        
        function getEmbedCode(url, width, height) {
            // YouTube
            var youtubeMatch = url.match(/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/);
            if (youtubeMatch) {
                var videoId = youtubeMatch[1];
                return '<iframe width="' + width + '" height="' + height + '" src="https://www.youtube.com/embed/' + videoId + '" frameborder="0" allowfullscreen></iframe>';
            }
            
            // Vimeo
            var vimeoMatch = url.match(/(?:vimeo)\.com.*(?:videos|video|channels|)\/([\d]+)/i);
            if (vimeoMatch) {
                var videoId = vimeoMatch[1];
                return '<iframe width="' + width + '" height="' + height + '" src="https://player.vimeo.com/video/' + videoId + '" frameborder="0" allowfullscreen></iframe>';
            }
            
            return '<p>Preview not available</p>';
        }
        
        $('#upload_video_btn').click(function(e) {
            e.preventDefault();
            
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }
            
            mediaUploader = wp.media({
                title: 'Choose Video',
                button: {
                    text: 'Choose Video'
                },
                library: {
                    type: 'video'
                },
                multiple: false
            });
            
            mediaUploader.on('select', function() {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#about_video_url').val(attachment.url);
                updateVideoPreview(attachment.url);
                $('#upload_video_btn').text('Change Video');
            });
            
            mediaUploader.open();
        });
        
        $('#remove_video_btn').click(function(e) {
            e.preventDefault();
            $('#about_video_url').val('');
            $('#video_preview').html('<p>No video selected</p>');
            $('#upload_video_btn').text('Upload Video');
        });
        
        function updateVideoPreview(url) {
            if (url) {
                var preview = '<video width="300" height="200" controls>' +
                             '<source src="' + url + '" type="video/mp4">' +
                             'Your browser does not support the video tag.' +
                             '</video><br>' +
                             '<button type="button" class="button" id="remove_video_btn">Remove Video</button>';
                $('#video_preview').html(preview);
                
                // Re-bind remove button
                $('#remove_video_btn').click(function(e) {
                    e.preventDefault();
                    $('#about_video_url').val('');
                    $('#video_preview').html('<p>No video selected</p>');
                    $('#upload_video_btn').text('Upload Video');
                });
            } else {
                $('#video_preview').html('<p>No video selected</p>');
            }
        }
    });
    </script>
    <?php
}

// Save meta box data
function aimpro_save_about_video_meta_box($post_id) {
    if (!isset($_POST['aimpro_about_video_nonce']) || !wp_verify_nonce($_POST['aimpro_about_video_nonce'], 'aimpro_about_video_nonce')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save video enabled status
    $video_enabled = isset($_POST['about_video_enabled']) ? '1' : '0';
    update_post_meta($post_id, '_about_page_video_enabled', $video_enabled);
    
    // Save video type
    $video_type = isset($_POST['video_type']) ? sanitize_text_field($_POST['video_type']) : 'upload';
    update_post_meta($post_id, '_about_page_video_type', $video_type);
    
    // Save video URL based on type
    if ($video_type === 'upload' && isset($_POST['about_video_url'])) {
        update_post_meta($post_id, '_about_page_video', sanitize_url($_POST['about_video_url']));
    } elseif ($video_type === 'url' && isset($_POST['video_url_input'])) {
        $video_url = sanitize_url($_POST['video_url_input']);
        if (aimpro_is_valid_video_url($video_url)) {
            update_post_meta($post_id, '_about_page_video', $video_url);
        }
    }
}
add_action('save_post', 'aimpro_save_about_video_meta_box');


// Function to get about page video
function aimpro_get_about_video() {
    $about_page = get_page_by_path('about');
    if (!$about_page) {
        return false;
    }
    
    $video_enabled = get_post_meta($about_page->ID, '_about_page_video_enabled', true);
    $video_url = get_post_meta($about_page->ID, '_about_page_video', true);
    
    if ($video_enabled === '1' && !empty($video_url)) {
        return $video_url;
    }
    
    return false;
}

// Helper function to validate video URLs
function aimpro_is_valid_video_url($url) {
    $youtube_regex = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/';
    $vimeo_regex = '/(?:vimeo)\.com.*(?:videos|video|channels|)\/([\d]+)/i';
    
    return preg_match($youtube_regex, $url) || preg_match($vimeo_regex, $url);
}

// Helper function to get video embed code
function aimpro_get_video_embed($url, $width = 560, $height = 315) {
    if (!aimpro_is_valid_video_url($url)) {
        return '<p>Invalid video URL</p>';
    }
    
    // YouTube
    if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $url, $matches)) {
        $video_id = $matches[1];
        return '<iframe width="' . $width . '" height="' . $height . '" src="https://www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
    }
    
    // Vimeo
    if (preg_match('/(?:vimeo)\.com.*(?:videos|video|channels|)\/([\d]+)/i', $url, $matches)) {
        $video_id = $matches[1];
        return '<iframe width="' . $width . '" height="' . $height . '" src="https://player.vimeo.com/video/' . $video_id . '" frameborder="0" allowfullscreen></iframe>';
    }
    
    return '<p>Video format not supported</p>';
}

// Helper function to get video type from About page
function aimpro_get_about_video_type() {
    $about_page = get_page_by_path('about');
    if (!$about_page) {
        return false;
    }
    
    return get_post_meta($about_page->ID, '_about_page_video_type', true);
}

// Function to display About page video section
function aimpro_display_about_video() {
    $video_url = aimpro_get_about_video();
    $video_type = aimpro_get_about_video_type();
    
    if (!$video_url) {
        return '';
    }
    
    $output = '<div class="about-video-section">';
    
    if ($video_type === 'url') {
        // For YouTube/Vimeo URLs, use embed code
        $output .= '<div class="video-container">';
        $output .= aimpro_get_video_embed($video_url, 800, 450);
        $output .= '</div>';
    } else {
        // For uploaded videos, use HTML5 video tag
        $output .= '<div class="video-container">';
        $output .= '<video width="800" height="450" controls>';
        $output .= '<source src="' . esc_url($video_url) . '" type="video/mp4">';
        $output .= 'Your browser does not support the video tag.';
        $output .= '</video>';
        $output .= '</div>';
    }
    
    $output .= '</div>';
    
    return $output;
}

/**
 * Calculate estimated reading time for content
 */
function aimpro_estimated_reading_time($content) {
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // 200 words per minute average
    return max(1, $reading_time); // Minimum 1 minute
}

// Include streamline sales funnel meta functionality
require_once get_template_directory() . '/includes/streamline-sales-funnel-meta.php';

// Include funnel builds meta functionality
require_once get_template_directory() . '/includes/funnel-builds-meta.php';

// Include UX/UI optimisation meta functionality
require_once get_template_directory() . '/includes/ux-ui-optimisation-meta.php';

// Include email campaigns meta functionality
require_once get_template_directory() . '/includes/email-campaigns-meta.php';

// Include funnel automation meta functionality
require_once get_template_directory() . '/includes/funnel-automation-meta.php';
