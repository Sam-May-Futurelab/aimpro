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

// Include retargeting display default values function for both frontend and admin
if (!function_exists('aimpro_get_retargeting_display_default_values')) {
    /**
     * Set default values for Retargeting & Display Advertising page meta fields
     * This ensures fields are pre-populated with the frontend content
     */
    function aimpro_get_retargeting_display_default_values() {
        return array(
            // Hero Section
            'hero_title' => 'Retargeting & Display Advertising',
            'hero_subtitle' => 'Re-engage interested prospects and build brand awareness with strategic retargeting and display campaigns that convert browsers into buyers across the web.',
            
            // Hero Stats
            'hero_stat1_number' => '475%',
            'hero_stat1_label' => 'Conversion Rate Increase',
            'hero_stat2_number' => '68%',
            'hero_stat2_label' => 'Lower Cost Per Conversion',
            'hero_stat3_number' => '12x',
            'hero_stat3_label' => 'Higher Click-Through Rate',
            
            // Hero CTAs
            'hero_cta1_text' => 'Start Retargeting',
            'hero_cta2_text' => 'View Packages',
            
            // Service Overview Section
            'overview_title' => 'Strategic Retargeting & Display Campaigns',
            'overview_content' => 'Most website visitors leave without converting. Our retargeting and display advertising strategies keep your brand top-of-mind, re-engage interested prospects, and guide them back to complete their purchase or inquiry across millions of websites.',
            
            // Service Items (6 services)
            'service_title_1' => 'Website Retargeting',
            'service_content_1' => 'Re-engage website visitors with personalised ads based on their browsing behaviour and pages visited.',
            'service_icon_1' => 'fas fa-bullseye',
            
            'service_title_2' => 'Abandoned Cart Recovery',
            'service_content_2' => 'Win back shoppers who left items in their cart with targeted ads featuring the exact products they viewed.',
            'service_icon_2' => 'fas fa-shopping-cart',
            
            'service_title_3' => 'Display Advertising',
            'service_content_3' => 'Build brand awareness and reach new audiences through visually compelling display ads across premium websites.',
            'service_icon_3' => 'fas fa-ad',
            
            'service_title_4' => 'Video Retargeting',
            'service_content_4' => 'Engage prospects with dynamic video content that showcases your products or services in action.',
            'service_icon_4' => 'fas fa-play-circle',
            
            'service_title_5' => 'Lookalike Audiences',
            'service_content_5' => 'Expand your reach by targeting new prospects who share characteristics with your best customers.',
            'service_icon_5' => 'fas fa-user-friends',
            
            'service_title_6' => 'Cross-Platform Campaigns',
            'service_content_6' => 'Coordinate retargeting efforts across Google, Facebook, Instagram, and other platforms for maximum impact.',
            'service_icon_6' => 'fas fa-sync-alt',
            
            // Case Study Section
            'case_study_title' => 'Case Study: E-commerce Cart Recovery',
            'case_study_intro' => 'How we helped an online retailer recover 475% more abandoned carts and increase overall conversion rates through strategic retargeting campaigns.',
            'case_study_challenge' => 'A fashion e-commerce store was losing 85% of potential customers to cart abandonment. Their existing email recovery campaigns were generating minimal results, and they needed a comprehensive strategy to re-engage prospects across multiple touchpoints.',
            'case_study_solution' => "Implemented pixel-based retargeting across Google Display Network and Facebook\nCreated dynamic product ads featuring abandoned cart items\nDeveloped sequential retargeting campaigns with progressive messaging\nLaunched lookalike audiences based on high-value customers\nA/B tested creative formats and messaging strategies",
            
            // Case Study Results
            'case_result_1_number' => '475%',
            'case_result_1_label' => 'Cart Recovery Increase',
            'case_result_2_number' => '68%',
            'case_result_2_label' => 'Lower Cost Per Conversion',
            'case_result_3_number' => '12x',
            'case_result_3_label' => 'Higher CTR vs Display Average',
            'case_result_4_number' => '235%',
            'case_result_4_label' => 'Return on Ad Spend',
            
            // Process Section
            'process_title' => 'Our Retargeting Process',
            
            'process_step_number_1' => '1',
            'process_step_title_1' => 'Audience Segmentation',
            'process_step_content_1' => 'analyse website behaviour to create detailed audience segments based on pages visited, engagement level, and conversion intent.',
            
            'process_step_number_2' => '2',
            'process_step_title_2' => 'Pixel Implementation',
            'process_step_content_2' => 'Install and configure tracking pixels across all relevant platforms to capture audience data and enable precise targeting.',
            
            'process_step_number_3' => '3',
            'process_step_title_3' => 'Creative Development',
            'process_step_content_3' => 'Design compelling ad creative with personalised messaging that addresses specific user behaviours and intent signals.',
            
            'process_step_number_4' => '4',
            'process_step_title_4' => 'Campaign Launch & Testing',
            'process_step_content_4' => 'Deploy retargeting campaigns with systematic A/B testing of creative, messaging, and frequency caps.',
            
            'process_step_number_5' => '5',
            'process_step_title_5' => 'Optimisation & Scaling',
            'process_step_content_5' => 'Continuously optimise based on performance data and scale successful campaigns across additional platforms and audiences.',
            
            // Retargeting Types Section
            'types_title' => 'Types of Retargeting We Implement',
            
            'type_title_1' => 'Pixel-Based Retargeting',
            'type_content_1' => 'Track anonymous website visitors and serve them relevant ads across the web based on their browsing behaviour.',
            'type_icon_1' => 'fas fa-mouse-pointer',
            
            'type_title_2' => 'List-Based Retargeting',
            'type_content_2' => 'Upload customer email lists to create targeted campaigns for existing contacts and previous customers.',
            'type_icon_2' => 'fas fa-database',
            
            'type_title_3' => 'Email Retargeting',
            'type_content_3' => 'Target users who interacted with your emails but didn\'t convert with coordinated display advertising.',
            'type_icon_3' => 'fas fa-envelope',
            
            'type_title_4' => 'Video View Retargeting',
            'type_content_4' => 'Re-engage users who watched your video content with follow-up campaigns driving specific actions.',
            'type_icon_4' => 'fas fa-play',
            
            'type_title_5' => 'Social Media Retargeting',
            'type_content_5' => 'Target website visitors on social platforms where they spend time with native, engaging ad formats.',
            'type_icon_5' => 'fas fa-share-alt',
            
            'type_title_6' => 'Cross-Device Retargeting',
            'type_content_6' => 'Follow users across all their devices to maintain consistent messaging and maximise conversion opportunities.',
            'type_icon_6' => 'fas fa-mobile-alt',
            
            // Tools Section
            'tools_title' => 'Tools & Technologies We Use',
            
            'tool_title_1' => 'Google Display Network',
            'tool_content_1' => 'Reach users across millions of websites, apps, and Google properties with targeted display campaigns.',
            'tool_icon_1' => 'fab fa-google',
            
            'tool_title_2' => 'Facebook Pixel',
            'tool_content_2' => 'Advanced retargeting and conversion tracking across Facebook and Instagram platforms.',
            'tool_icon_2' => 'fab fa-facebook',
            
            'tool_title_3' => 'Google Analytics',
            'tool_content_3' => 'Comprehensive audience analysis and behaviour tracking for precise retargeting segmentation.',
            'tool_icon_3' => 'fas fa-chart-bar',
            
            'tool_title_4' => 'Dynamic Creative Tools',
            'tool_content_4' => 'Automated ad creation and personalisation based on user behaviour and product interests.',
            'tool_icon_4' => 'fas fa-palette',
            
            // Industries Section
            'industries_title' => 'Industries We Serve',
            
            'industry_title_1' => 'E-commerce & Retail',
            'industry_content_1' => 'Recover abandoned carts and increase customer lifetime value through strategic retargeting.',
            
            'industry_title_2' => 'SaaS & Technology',
            'industry_content_2' => 'Nurture trial users and free account holders toward paid conversions.',
            
            'industry_title_3' => 'Financial Services',
            'industry_content_3' => 'Re-engage prospects who showed interest in loans, insurance, or investment products.',
            
            'industry_title_4' => 'Real Estate',
            'industry_content_4' => 'Follow up with property viewers and keep listings top-of-mind for potential buyers.',
            
            'industry_title_5' => 'Travel & Hospitality',
            'industry_content_5' => 'Recapture booking abandoners and promote special offers to interested travelers.',
            
            'industry_title_6' => 'Healthcare',
            'industry_content_6' => 'Nurture patients who researched treatments or services with compliant retargeting campaigns.',
            
            // Testimonial Section
            'testimonial_quote' => 'Our retargeting campaigns with Aimpro have been phenomenal. We\'re recovering 475% more abandoned carts and our cost per conversion dropped by 68%. It\'s transformed our entire marketing ROI.',
            'testimonial_name' => 'Emma Thompson',
            'testimonial_title' => 'E-commerce Director, StyleHub',
            
            // CTA Section
            'cta_title' => 'Ready to Re-Engage Your Lost Prospects?',
            'cta_content' => 'Stop losing potential customers forever. Our retargeting experts will help you build campaigns that bring visitors back and convert them into loyal customers. Start recovering lost revenue today.',
            'cta_button_1_text' => 'Start Retargeting',
            'cta_button_2_text' => 'View All Services',
        );
    }
}

// Include meta functionality only in admin area to prevent header issues
if (is_admin()) {
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
    require_once get_template_directory() . '/includes/services-meta.php';
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
    require_once get_template_directory() . '/includes/email-sms-flows-meta.php';
    require_once get_template_directory() . '/includes/locations-meta.php';
}

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

// Include single blog post meta functionality
require_once get_template_directory() . '/includes/single-blog-meta.php';
require_once get_template_directory() . '/includes/privacy-policy-meta.php';
require_once get_template_directory() . '/includes/terms-of-service-meta.php';
require_once get_template_directory() . '/includes/sitemap-meta.php';

if (!function_exists('aimpro_get_seo_audit_default_values')) {
    /**
     * Set default values for SEO Audit page meta fields
     * This ensures fields are pre-populated with the frontend content
     */
    function aimpro_get_seo_audit_default_values() {
        return array(
            // Header Section
            'seo_audit_header_title' => 'Comprehensive SEO Audit',
            'seo_audit_header_subtitle' => 'Get a detailed analysis of your website\'s SEO performance with actionable recommendations to boost your search rankings and organic traffic.',
            
            // Overview Section
            'seo_audit_overview_title' => 'What\'s Included in Your SEO Audit',
            'seo_audit_overview_description' => 'Our comprehensive SEO audit examines every aspect of your website\'s search performance to identify opportunities for improvement and provide clear, actionable recommendations.',
            
            // Benefits Section
            'seo_audit_benefits_title' => 'What Our SEO Audit Reveals:',
            
            // Components Section
            'seo_audit_components_title' => 'Complete SEO Audit Components',
            
            // Sample Section
            'seo_audit_sample_title' => 'What\'s Included in Your SEO Audit Report',
            
            // Process Section
            'seo_audit_process_title' => 'Our SEO Audit Process',
            
            // Case Study Section
            'seo_audit_case_study_title' => 'TechStart Solutions: From Audit to 380% Traffic Growth',
            'seo_audit_case_study_description' => 'Discover how our comprehensive SEO audit helped a technology company identify critical issues and implement strategies that resulted in a 380% increase in organic traffic and first-page rankings for 47 target keywords.',
            'seo_audit_case_study_challenge_title' => 'The Challenge',
            
            // Testimonial Section
            'seo_audit_testimonial_quote' => 'The SEO audit from Aimpro Digital was incredibly detailed and actionable. They found issues we never knew existed and provided a clear roadmap to fix them. After implementing their recommendations, our organic traffic increased by 380% in just 6 months.',
            'seo_audit_testimonial_author_name' => 'Sarah Mitchell',
            'seo_audit_testimonial_author_title' => 'Marketing Director',
            'seo_audit_testimonial_author_company' => 'TechStart Solutions',
            
            // CTA Section
            'seo_audit_cta_title' => 'Ready to Uncover Your SEO Opportunities?',
            'seo_audit_cta_description' => 'Get your comprehensive SEO audit today and discover exactly what\'s holding your website back from ranking higher and attracting more organic traffic.',
            'seo_audit_cta_primary_text' => 'Get Your Free SEO Audit',
            'seo_audit_cta_secondary_text' => 'View All Services',
        );
    }
}

// Get SEO Services default values
if (!function_exists('get_seo_services_defaults')) {
    function get_seo_services_defaults() {
        return array(
            'header_title' => 'Professional SEO Services',
            'header_subtitle' => 'Drive more organic traffic and boost your search rankings with our data-driven SEO strategies and proven methodologies.',
            'overview_title' => 'Comprehensive SEO Solutions That Drive Results',
            'overview_description' => 'Our proven SEO strategies help businesses increase organic traffic, improve search rankings, and drive sustainable growth. From technical optimization to content strategy, we provide end-to-end SEO services that deliver measurable results.',
            'overview_benefits_title' => 'Why Choose Our SEO Services:',
            'overview_benefits' => array(
                'Proven track record with 300+ successful campaigns',
                'Data-driven approach with transparent reporting',
                'White-hat techniques that ensure long-term success',
                'Dedicated account management and regular updates',
                'Custom strategies tailored to your industry',
                'Local, national, and international SEO expertise'
            ),
            'overview_image' => '',
            'services_grid_title' => 'Our SEO Service Portfolio',
            
            // Service 1 - Technical SEO
            'service_1_title' => 'Technical SEO',
            'service_1_description' => 'Optimize your website\'s technical foundation for better crawlability, indexing, and user experience.',
            'service_1_features' => array('Site speed optimization', 'Mobile responsiveness', 'Core Web Vitals', 'XML sitemaps', 'Schema markup'),
            'service_1_result' => '45% average improvement in Core Web Vitals',
            'service_1_link' => '/services/technical-seo',
            'service_1_featured' => true,
            
            // Service 2 - On-Page SEO
            'service_2_title' => 'On-Page SEO',
            'service_2_description' => 'Optimize individual pages for target keywords and improve content quality and relevance.',
            'service_2_features' => array('Keyword optimization', 'Meta tags', 'Content optimization', 'Internal linking', 'Header structure'),
            'service_2_result' => '68% increase in keyword rankings',
            'service_2_link' => '/services/on-page-seo',
            'service_2_featured' => false,
            
            // Service 3 - Local SEO
            'service_3_title' => 'Local SEO',
            'service_3_description' => 'Dominate local search results and attract more customers from your geographic area.',
            'service_3_features' => array('Google My Business', 'Local citations', 'Review management', 'Local keywords', 'NAP consistency'),
            'service_3_result' => '89% increase in local visibility',
            'service_3_link' => '/services/local-seo',
            'service_3_featured' => false,
            
            // Service 4 - Content SEO
            'service_4_title' => 'Content SEO',
            'service_4_description' => 'Create and optimize high-quality content that ranks well and engages your audience.',
            'service_4_features' => array('Content strategy', 'Keyword research', 'Blog optimization', 'Content audits', 'Topic clusters'),
            'service_4_result' => '125% growth in organic traffic',
            'service_4_link' => '/services/content-seo',
            'service_4_featured' => false,
            
            // Service 5 - Link Building
            'service_5_title' => 'Link Building',
            'service_5_description' => 'Build high-quality backlinks to increase domain authority and improve search rankings.',
            'service_5_features' => array('White-hat link building', 'Guest posting', 'Digital PR', 'Resource pages', 'Broken link building'),
            'service_5_result' => '78% increase in domain authority',
            'service_5_link' => '/services/link-building',
            'service_5_featured' => false,
            
            // Service 6 - SEO Audits
            'service_6_title' => 'SEO Audits',
            'service_6_description' => 'Comprehensive analysis of your website\'s SEO performance and actionable improvement recommendations.',
            'service_6_features' => array('Technical analysis', 'Competitor research', 'Keyword gaps', 'Content audit', 'Backlink analysis'),
            'service_6_result' => '40+ page detailed report',
            'service_6_link' => '/services/seo-audit',
            'service_6_featured' => false,
            
            // Case Study
            'case_study_label' => 'SEO Success Story',
            'case_study_title' => 'TechStart Solutions: 380% Organic Traffic Growth',
            'case_study_description' => 'TechStart Solutions was struggling with declining organic traffic and poor search rankings. Our comprehensive SEO strategy transformed their digital presence.',
            'case_study_challenge_title' => 'The Challenge',
            'case_study_challenges' => array(
                'Poor technical SEO foundation',
                'Limited content strategy',
                'Weak backlink profile',
                'No local SEO presence',
                'Outdated SEO practices'
            ),
            'case_study_solution_title' => 'Our Solution',
            'case_study_solutions' => array(
                'Complete technical SEO overhaul',
                'Comprehensive content strategy',
                'Strategic link building campaign',
                'Local SEO optimization',
                'Ongoing monitoring and optimization'
            ),
            'case_study_results_title' => 'Results Achieved',
            'case_study_link' => '/case-studies',
            'case_study_link_text' => 'Read Full Case Study',
            
            // Case Study Results
            'case_study_result_1_number' => '380%',
            'case_study_result_1_label' => 'Organic Traffic Increase',
            'case_study_result_2_number' => '250%',
            'case_study_result_2_label' => 'Keyword Rankings Improved',
            'case_study_result_3_number' => '68%',
            'case_study_result_3_label' => 'Conversion Rate Boost',
            'case_study_result_4_number' => '45%',
            'case_study_result_4_label' => 'Page Speed Improvement',
            
            // Process
            'process_title' => 'Our Proven SEO Process',
            'process_step_1_title' => 'SEO Audit & Strategy',
            'process_step_1_description' => 'Comprehensive analysis of your current SEO performance and competitive landscape to develop a custom strategy.',
            'process_step_2_title' => 'Technical Optimization',
            'process_step_2_description' => 'Fix technical issues, improve site speed, and ensure proper indexing and crawlability.',
            'process_step_3_title' => 'Content & On-Page',
            'process_step_3_description' => 'Optimize existing content and create new, high-quality content targeting relevant keywords.',
            'process_step_4_title' => 'Link Building & Promotion',
            'process_step_4_description' => 'Build high-quality backlinks and increase domain authority through strategic outreach and promotion.',
            'process_step_5_title' => 'Monitor & Optimize',
            'process_step_5_description' => 'Continuous monitoring, reporting, and optimization to ensure sustained growth and performance.',
            
            // Industries
            'industries_title' => 'SEO Services by Industry',
            'industry_1_title' => 'E-commerce SEO',
            'industry_1_description' => 'Specialized SEO strategies for online stores to increase product visibility and drive sales.',
            'industry_1_features' => array('Product page optimization', 'Category pages', 'Shopping campaigns', 'Local inventory'),
            'industry_2_title' => 'Healthcare SEO',
            'industry_2_description' => 'Compliant SEO solutions for healthcare providers to attract more patients and build trust.',
            'industry_2_features' => array('HIPAA compliance', 'Local medical SEO', 'Medical content', 'Reputation management'),
            'industry_3_title' => 'Legal SEO',
            'industry_3_description' => 'Specialized SEO for law firms to increase client acquisition and establish authority.',
            'industry_3_features' => array('Legal content', 'Local law SEO', 'Practice area pages', 'Client testimonials'),
            
            // Testimonial
            'testimonial_quote' => 'The SEO team at Aimpro Digital transformed our organic presence. Our traffic increased by 380% and we\'re now ranking #1 for our most important keywords. Their data-driven approach and clear communication made all the difference.',
            'testimonial_name' => 'Sarah Mitchell',
            'testimonial_title' => 'Marketing Director',
            'testimonial_company' => 'TechStart Solutions',
            
            // CTA
            'cta_title' => 'Ready to Dominate Search Results?',
            'cta_description' => 'Get a free SEO audit and discover how we can help you outrank your competition and drive more organic traffic.',
            'cta_primary_text' => 'Get Free SEO Audit',
            'cta_primary_link' => '/contact',
            'cta_secondary_text' => 'View Our SEO Packages',
            'cta_secondary_link' => '/services/seo-packages',
            'cta_features' => array(
                'Free 40+ page SEO audit',
                'Competitive analysis included',
                'Custom strategy consultation',
                'No obligation required'
            )
        );
    }
}
