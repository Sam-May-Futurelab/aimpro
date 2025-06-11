<?php
/**
 * Aimpro Digital Theme Functions
 * Enhanced with performance optimizations and SEO features
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
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'aimpro'),
        'footer' => __('Footer Menu', 'aimpro')
    ));
}
add_action('after_setup_theme', 'aimpro_theme_setup');

/**
 * Enqueue Scripts and Styles with Performance Optimizations
 */
function aimpro_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');    // Enqueue styles with preload for critical CSS
    wp_enqueue_style('aimpro-style', get_stylesheet_uri(), array(), $theme_version);
      // Enqueue header and menu styles
    wp_enqueue_style('aimpro-header-menu', get_template_directory_uri() . '/assets/css/header-menu.css', array('aimpro-style'), $theme_version);
    
    // Enqueue hero styles
    wp_enqueue_style('aimpro-hero', get_template_directory_uri() . '/assets/css/hero.css', array('aimpro-style'), $theme_version);
    
    // Enqueue button styles
    wp_enqueue_style('aimpro-buttons', get_template_directory_uri() . '/assets/css/buttons.css', array('aimpro-style'), $theme_version);
    
    // Enqueue footer styles
    wp_enqueue_style('aimpro-footer', get_template_directory_uri() . '/assets/css/footer.css', array('aimpro-style'), $theme_version);
    
    // Enqueue footer components styles (CTA buttons, theme toggle)
    wp_enqueue_style('aimpro-footer-components', get_template_directory_uri() . '/assets/css/footer-components.css', array('aimpro-footer', 'aimpro-buttons'), $theme_version);
    
    // Preload critical fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap', array(), null);
      // Enqueue Lottie library for animations
    wp_enqueue_script('lottie-web', 'https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js', array(), '5.12.2', true);
    
    // Enqueue scripts with proper dependencies and defer loading
    wp_enqueue_script('aimpro-main', get_template_directory_uri() . '/assets/js/main.js', array('lottie-web'), $theme_version, true);
    
    // Add inline script for critical path optimization
    $inline_script = "
        document.documentElement.classList.add('js');
        if ('IntersectionObserver' in window) {
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
        'description' => 'Premier digital marketing agency specializing in SEO, PPC, social media marketing, and web development.',
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

// Optimize CSS delivery
function aimpro_optimize_css_delivery() {
    echo '<style id="critical-css">
        body{font-family:"Inter",sans-serif;margin:0;padding:0;line-height:1.6;color:#1a1a1a}
        .loading-screen{position:fixed;top:0;left:0;width:100%;height:100vh;background:linear-gradient(135deg,#FFD700 0%,#FFA500 100%);display:flex;align-items:center;justify-content:center;z-index:10000}
        .sticky-header{position:fixed;top:0;width:100%;z-index:1000;transition:all 0.3s ease}
        .hero-section{min-height:100vh;display:flex;align-items:center;background:linear-gradient(135deg,#667eea 0%,#764ba2 100%)}
    </style>';
}
add_action('wp_head', 'aimpro_optimize_css_delivery', 2);

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

// Optimize WordPress for performance
function aimpro_optimize_wordpress() {
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
add_action('init', 'aimpro_optimize_wordpress');

// Add custom post type for testimonials (if needed)
function aimpro_register_post_types() {
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
}
add_action('init', 'aimpro_register_post_types');

// AJAX handler for contact form (if needed)
function aimpro_handle_contact_form() {
    check_ajax_referer('aimpro_nonce', 'nonce');
    
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);
    
    // Process form submission here
    // For now, just return success
    wp_send_json_success(array(
        'message' => 'Thank you for your message! We\'ll get back to you soon.'
    ));
}
add_action('wp_ajax_contact_form', 'aimpro_handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'aimpro_handle_contact_form');

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
 * Theme Activation Hook
 */
function aimpro_theme_activation() {
    // Flush rewrite rules
    flush_rewrite_rules();
    
    // Set default customizer values
    set_theme_mod('company_phone', '+1 (555) 123-4567');
    set_theme_mod('company_email', 'hello@aimprodigital.com');
}
add_action('after_switch_theme', 'aimpro_theme_activation');
?>
