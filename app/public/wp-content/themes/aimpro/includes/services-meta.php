<?php
/**
 * Services Page Meta Boxes
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add meta boxes for Services page
function add_services_meta_boxes() {
    add_meta_box(
        'services_header',
        'Page Header',
        'services_header_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'services_intro',
        'Services Introduction',
        'services_intro_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'services_stats',
        'Services Statistics',
        'services_stats_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'services_grid',
        'Quick Service Navigation',
        'services_grid_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'services_categories',
        'Service Categories',
        'services_categories_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'services_benefits',
        'Why Choose Our Services',
        'services_benefits_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'services_process',
        'Service Process',
        'services_process_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'services_cta',
        'CTA Section',
        'services_cta_callback',
        'page',
        'normal',
        'high'
    );
}

// Hook to add meta boxes only for the Services page template
function services_add_meta_boxes() {
    global $post;
    if (isset($post) && get_page_template_slug($post->ID) == 'page-services.php') {
        add_services_meta_boxes();
    }
}
add_action('add_meta_boxes', 'services_add_meta_boxes');

// Default values
function get_services_defaults() {
    return array(
        // Header defaults
        'header_title' => 'Services',
        'header_subtitle' => 'Comprehensive digital marketing services that drive measurable results',
        
        // Intro defaults
        'intro_title' => 'Award-Winning Digital Marketing Services',
        'intro_description' => 'From SEO and PPC to website development and marketing automation, our comprehensive suite of services is designed to accelerate your business growth. Each service is delivered by certified experts using proven methodologies and cutting-edge technology.',
        
        // Stats defaults
        'stat_1_number' => '15+',
        'stat_1_label' => 'Service Categories',
        'stat_2_number' => '500+',
        'stat_2_label' => 'Successful Projects',
        'stat_3_number' => '98%',
        'stat_3_label' => 'Client Satisfaction',
        
        // Services grid defaults
        'services_grid_title' => 'Our Services',
        'services_grid_subtitle' => 'Explore our comprehensive range of services designed to elevate your digital presence',
        
        // Quick services
        'service_1_title' => 'SEO Services',
        'service_1_description' => 'Improve search rankings and organic traffic',
        'service_1_icon' => 'fas fa-search',
        'service_1_link' => home_url('/seo-services'),
        
        'service_2_title' => 'PPC Advertising',
        'service_2_description' => 'Maximize ROI with targeted advertising',
        'service_2_icon' => 'fas fa-bullhorn',
        'service_2_link' => home_url('/advertising-ppc'),
        
        'service_3_title' => 'Website Design',
        'service_3_description' => 'Beautiful, conversion-focused websites',
        'service_3_icon' => 'fas fa-paint-brush',
        'service_3_link' => home_url('/website-design'),
        
        'service_4_title' => 'Marketing Automation',
        'service_4_description' => 'Streamline and scale your marketing',
        'service_4_icon' => 'fas fa-cogs',
        'service_4_link' => home_url('/automate-marketing'),
        
        'service_5_title' => 'Lead Generation',
        'service_5_description' => 'Convert visitors into qualified leads',
        'service_5_icon' => 'fas fa-chart-line',
        'service_5_link' => home_url('/lead-generation'),
        
        'service_6_title' => 'Sales Funnels',
        'service_6_description' => 'Optimise your conversion process',
        'service_6_icon' => 'fas fa-funnel-dollar',
        'service_6_link' => home_url('/streamline-sales-funnel'),
        
        // Benefits defaults
        'benefits_title' => 'Why Choose Aimpro Digital Services?',
        'benefit_1_title' => 'Certified Experts',
        'benefit_1_description' => 'Our team holds certifications from Google, Meta, Microsoft, and other leading platforms.',
        'benefit_2_title' => 'Data-Driven Results',
        'benefit_2_description' => 'Every strategy is backed by data analysis and proven methodologies for measurable results.',
        'benefit_3_title' => 'Integrated Approach',
        'benefit_3_description' => 'All our services work together seamlessly to create a comprehensive marketing ecosystem.',
        'benefit_4_title' => 'Transparent Reporting',
        'benefit_4_description' => 'Regular, detailed reports keep you informed about performance and ROI at every step.',
        
        // Process defaults
        'process_title' => 'Our Service Delivery Process',
        'process_step_1_title' => 'Discovery & Analysis',
        'process_step_1_description' => 'We analyze your business, goals, and current performance to create a tailored strategy.',
        'process_step_2_title' => 'Strategy Development',
        'process_step_2_description' => 'Our experts develop a comprehensive plan aligned with your objectives and budget.',
        'process_step_3_title' => 'Implementation',
        'process_step_3_description' => 'We execute the strategy using proven methodologies and cutting-edge tools.',
        'process_step_4_title' => 'Monitor & Optimize',
        'process_step_4_description' => 'Continuous monitoring and optimization ensure maximum performance and ROI.',
        
        // CTA defaults
        'cta_title' => 'Ready to Transform Your Digital Presence?',
        'cta_description' => 'Let\'s discuss which services will have the biggest impact on your business growth.',
        'cta_primary_text' => 'Get Free Consultation',
        'cta_primary_link' => home_url('/contact'),
        'cta_secondary_text' => 'View Our Results',
        'cta_secondary_link' => home_url('/case-studies'),
        'cta_features' => array(
            'Free strategy session',
            'No obligation consultation',
            'Custom recommendations'
        )
    );
}

// Meta box callbacks
function services_header_callback($post) {
    wp_nonce_field('services_meta_nonce', 'services_meta_nonce');
    $defaults = get_services_defaults();
    
    $title = get_post_meta($post->ID, '_services_header_title', true) ?: $defaults['header_title'];
    $subtitle = get_post_meta($post->ID, '_services_header_subtitle', true) ?: $defaults['header_subtitle'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="services_header_title">Page Title</label></th>';
    echo '<td>';
    wp_editor($title, 'services_header_title', array('textarea_name' => 'services_header_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '<tr><th><label for="services_header_subtitle">Page Subtitle</label></th>';
    echo '<td>';
    wp_editor($subtitle, 'services_header_subtitle', array('textarea_name' => 'services_header_subtitle', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '</table>';
}

function services_intro_callback($post) {
    $defaults = get_services_defaults();
    
    $title = get_post_meta($post->ID, '_services_intro_title', true) ?: $defaults['intro_title'];
    $description = get_post_meta($post->ID, '_services_intro_description', true) ?: $defaults['intro_description'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="services_intro_title">Introduction Title</label></th>';
    echo '<td>';
    wp_editor($title, 'services_intro_title', array('textarea_name' => 'services_intro_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '<tr><th><label for="services_intro_description">Introduction Description</label></th>';
    echo '<td>';
    wp_editor($description, 'services_intro_description', array('textarea_name' => 'services_intro_description', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 5, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '</table>';
}

function services_stats_callback($post) {
    $defaults = get_services_defaults();
    
    echo '<h4>Statistics</h4>';
    for ($i = 1; $i <= 3; $i++) {
        $number = get_post_meta($post->ID, "_services_stat_{$i}_number", true) ?: $defaults["stat_{$i}_number"];
        $label = get_post_meta($post->ID, "_services_stat_{$i}_label", true) ?: $defaults["stat_{$i}_label"];
        
        echo '<h5>Statistic ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="services_stat_' . $i . '_number">Number/Value</label></th>';
        echo '<td>';
        wp_editor($number, 'services_stat_' . $i . '_number', array('textarea_name' => 'services_stat_' . $i . '_number', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
        echo '</td></tr>';
        echo '<tr><th><label for="services_stat_' . $i . '_label">Label</label></th>';
        echo '<td>';
        wp_editor($label, 'services_stat_' . $i . '_label', array('textarea_name' => 'services_stat_' . $i . '_label', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
        echo '</td></tr>';
        echo '</table>';
    }
}

function services_grid_callback($post) {
    $defaults = get_services_defaults();
    
    $grid_title = get_post_meta($post->ID, '_services_grid_title', true) ?: $defaults['services_grid_title'];
    $grid_subtitle = get_post_meta($post->ID, '_services_grid_subtitle', true) ?: $defaults['services_grid_subtitle'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="services_grid_title">Grid Title</label></th>';
    echo '<td>';
    wp_editor($grid_title, 'services_grid_title', array('textarea_name' => 'services_grid_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '<tr><th><label for="services_grid_subtitle">Grid Subtitle</label></th>';
    echo '<td>';
    wp_editor($grid_subtitle, 'services_grid_subtitle', array('textarea_name' => 'services_grid_subtitle', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '</table>';
    
    echo '<h4>Quick Service Cards</h4>';
    for ($i = 1; $i <= 6; $i++) {
        $title = get_post_meta($post->ID, "_services_service_{$i}_title", true) ?: $defaults["service_{$i}_title"];
        $description = get_post_meta($post->ID, "_services_service_{$i}_description", true) ?: $defaults["service_{$i}_description"];
        $icon = get_post_meta($post->ID, "_services_service_{$i}_icon", true) ?: $defaults["service_{$i}_icon"];
        $link = get_post_meta($post->ID, "_services_service_{$i}_link", true) ?: $defaults["service_{$i}_link"];
        
        echo '<h5>Service ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="services_service_' . $i . '_title">Title</label></th>';
        echo '<td>';
        wp_editor($title, 'services_service_' . $i . '_title', array('textarea_name' => 'services_service_' . $i . '_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
        echo '</td></tr>';
        echo '<tr><th><label for="services_service_' . $i . '_description">Description</label></th>';
        echo '<td>';
        wp_editor($description, 'services_service_' . $i . '_description', array('textarea_name' => 'services_service_' . $i . '_description', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
        echo '</td></tr>';
        echo '<tr><th><label for="services_service_' . $i . '_icon">Icon Class (FontAwesome)</label></th>';
        echo '<td><input type="text" id="services_service_' . $i . '_icon" name="services_service_' . $i . '_icon" value="' . esc_attr($icon) . '" style="width: 100%;" placeholder="e.g., fas fa-search" /></td></tr>';
        echo '<tr><th><label for="services_service_' . $i . '_link">Link URL</label></th>';
        echo '<td><input type="url" id="services_service_' . $i . '_link" name="services_service_' . $i . '_link" value="' . esc_url($link) . '" style="width: 100%;" /></td></tr>';
        echo '</table><hr>';
    }
}

function services_categories_callback($post) {
    echo '<p>Service categories (SEO, PPC, Marketing Automation, Website Development) are hardcoded in the template. To modify these sections, edit the page-services.php template directly.</p>';
    echo '<p>Future enhancement: Create dynamic category management here.</p>';
}

function services_benefits_callback($post) {
    $defaults = get_services_defaults();
    
    $benefits_title = get_post_meta($post->ID, '_services_benefits_title', true) ?: $defaults['benefits_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="services_benefits_title">Benefits Section Title</label></th>';
    echo '<td>';
    wp_editor($benefits_title, 'services_benefits_title', array('textarea_name' => 'services_benefits_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '</table>';
    
    echo '<h4>Benefits</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $title = get_post_meta($post->ID, "_services_benefit_{$i}_title", true) ?: $defaults["benefit_{$i}_title"];
        $description = get_post_meta($post->ID, "_services_benefit_{$i}_description", true) ?: $defaults["benefit_{$i}_description"];
        
        echo '<h5>Benefit ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="services_benefit_' . $i . '_title">Title</label></th>';
        echo '<td>';
        wp_editor($title, 'services_benefit_' . $i . '_title', array('textarea_name' => 'services_benefit_' . $i . '_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
        echo '</td></tr>';
        echo '<tr><th><label for="services_benefit_' . $i . '_description">Description</label></th>';
        echo '<td>';
        wp_editor($description, 'services_benefit_' . $i . '_description', array('textarea_name' => 'services_benefit_' . $i . '_description', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link')));
        echo '</td></tr>';
        echo '</table>';
    }
}

function services_process_callback($post) {
    $defaults = get_services_defaults();
    
    $process_title = get_post_meta($post->ID, '_services_process_title', true) ?: $defaults['process_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="services_process_title">Process Section Title</label></th>';
    echo '<td>';
    wp_editor($process_title, 'services_process_title', array('textarea_name' => 'services_process_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '</table>';
    
    echo '<h4>Process Steps</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $step_title = get_post_meta($post->ID, "_services_process_step_{$i}_title", true) ?: $defaults["process_step_{$i}_title"];
        $step_description = get_post_meta($post->ID, "_services_process_step_{$i}_description", true) ?: $defaults["process_step_{$i}_description"];
        
        echo '<h5>Step ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="services_process_step_' . $i . '_title">Step Title</label></th>';
        echo '<td>';
        wp_editor($step_title, 'services_process_step_' . $i . '_title', array('textarea_name' => 'services_process_step_' . $i . '_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
        echo '</td></tr>';
        echo '<tr><th><label for="services_process_step_' . $i . '_description">Step Description</label></th>';
        echo '<td>';
        wp_editor($step_description, 'services_process_step_' . $i . '_description', array('textarea_name' => 'services_process_step_' . $i . '_description', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link')));
        echo '</td></tr>';
        echo '</table>';
    }
}

function services_cta_callback($post) {
    $defaults = get_services_defaults();
    
    $title = get_post_meta($post->ID, '_services_cta_title', true) ?: $defaults['cta_title'];
    $description = get_post_meta($post->ID, '_services_cta_description', true) ?: $defaults['cta_description'];
    $primary_text = get_post_meta($post->ID, '_services_cta_primary_text', true) ?: $defaults['cta_primary_text'];
    $primary_link = get_post_meta($post->ID, '_services_cta_primary_link', true) ?: $defaults['cta_primary_link'];
    $secondary_text = get_post_meta($post->ID, '_services_cta_secondary_text', true) ?: $defaults['cta_secondary_text'];
    $secondary_link = get_post_meta($post->ID, '_services_cta_secondary_link', true) ?: $defaults['cta_secondary_link'];
    $features = get_post_meta($post->ID, '_services_cta_features', true) ?: $defaults['cta_features'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="services_cta_title">CTA Title</label></th>';
    echo '<td>';
    wp_editor($title, 'services_cta_title', array('textarea_name' => 'services_cta_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '<tr><th><label for="services_cta_description">CTA Description</label></th>';
    echo '<td>';
    wp_editor($description, 'services_cta_description', array('textarea_name' => 'services_cta_description', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '<tr><th><label for="services_cta_primary_text">Primary Button Text</label></th>';
    echo '<td>';
    wp_editor($primary_text, 'services_cta_primary_text', array('textarea_name' => 'services_cta_primary_text', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '<tr><th><label for="services_cta_primary_link">Primary Button Link</label></th>';
    echo '<td><input type="url" id="services_cta_primary_link" name="services_cta_primary_link" value="' . esc_url($primary_link) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="services_cta_secondary_text">Secondary Button Text</label></th>';
    echo '<td>';
    wp_editor($secondary_text, 'services_cta_secondary_text', array('textarea_name' => 'services_cta_secondary_text', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link')));
    echo '</td></tr>';
    echo '<tr><th><label for="services_cta_secondary_link">Secondary Button Link</label></th>';
    echo '<td><input type="url" id="services_cta_secondary_link" name="services_cta_secondary_link" value="' . esc_url($secondary_link) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="services_cta_features">CTA Features (one per line)</label></th>';
    echo '<td><textarea id="services_cta_features" name="services_cta_features" rows="3" style="width: 100%;">' . esc_textarea(implode("\n", (array)$features)) . '</textarea></td></tr>';
    echo '</table>';
}

// Save meta data
function save_services_meta($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['services_meta_nonce']) || !wp_verify_nonce($_POST['services_meta_nonce'], 'services_meta_nonce')) {
        return;
    }

    // Check if user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check if this is the correct page template
    if (get_page_template_slug($post_id) !== 'page-services.php') {
        return;
    }

    // Rich text fields that need wp_kses_post() sanitization
    $rich_text_fields = array(
        'services_header_title', 'services_header_subtitle',
        'services_intro_title', 'services_intro_description',
        'services_grid_title', 'services_grid_subtitle',
        'services_benefits_title',
        'services_process_title',
        'services_cta_title', 'services_cta_description', 'services_cta_primary_text', 'services_cta_secondary_text'
    );

    // Save rich text fields with wp_kses_post()
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, wp_kses_post($_POST[$field]));
        }
    }

    // Save URL fields with esc_url_raw()
    $url_fields = array(
        'services_cta_primary_link', 'services_cta_secondary_link'
    );
    
    foreach ($url_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, esc_url_raw($_POST[$field]));
        }
    }

    // Save stats (1-3)
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["services_stat_{$i}_number"])) {
            update_post_meta($post_id, "_services_stat_{$i}_number", wp_kses_post($_POST["services_stat_{$i}_number"]));
        }
        if (isset($_POST["services_stat_{$i}_label"])) {
            update_post_meta($post_id, "_services_stat_{$i}_label", wp_kses_post($_POST["services_stat_{$i}_label"]));
        }
    }

    // Save quick service cards (1-6)
    for ($i = 1; $i <= 6; $i++) {
        if (isset($_POST["services_service_{$i}_title"])) {
            update_post_meta($post_id, "_services_service_{$i}_title", wp_kses_post($_POST["services_service_{$i}_title"]));
        }
        if (isset($_POST["services_service_{$i}_description"])) {
            update_post_meta($post_id, "_services_service_{$i}_description", wp_kses_post($_POST["services_service_{$i}_description"]));
        }
        if (isset($_POST["services_service_{$i}_icon"])) {
            update_post_meta($post_id, "_services_service_{$i}_icon", sanitize_text_field($_POST["services_service_{$i}_icon"]));
        }
        if (isset($_POST["services_service_{$i}_link"])) {
            update_post_meta($post_id, "_services_service_{$i}_link", esc_url_raw($_POST["services_service_{$i}_link"]));
        }
    }

    // Save benefits (1-4)
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["services_benefit_{$i}_title"])) {
            update_post_meta($post_id, "_services_benefit_{$i}_title", wp_kses_post($_POST["services_benefit_{$i}_title"]));
        }
        if (isset($_POST["services_benefit_{$i}_description"])) {
            update_post_meta($post_id, "_services_benefit_{$i}_description", wp_kses_post($_POST["services_benefit_{$i}_description"]));
        }
    }

    // Save process steps (1-4)
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["services_process_step_{$i}_title"])) {
            update_post_meta($post_id, "_services_process_step_{$i}_title", wp_kses_post($_POST["services_process_step_{$i}_title"]));
        }
        if (isset($_POST["services_process_step_{$i}_description"])) {
            update_post_meta($post_id, "_services_process_step_{$i}_description", wp_kses_post($_POST["services_process_step_{$i}_description"]));
        }
    }

    // Save array fields (lists)
    $array_fields = array(
        'services_cta_features'
    );
    
    foreach ($array_fields as $field) {
        if (isset($_POST[$field])) {
            $lines = explode("\n", $_POST[$field]);
            $cleaned_lines = array_map('sanitize_text_field', $lines);
            $cleaned_lines = array_filter($cleaned_lines); // Remove empty lines
            update_post_meta($post_id, '_' . $field, $cleaned_lines);
        }
    }
}
add_action('save_post', 'save_services_meta');

?>
