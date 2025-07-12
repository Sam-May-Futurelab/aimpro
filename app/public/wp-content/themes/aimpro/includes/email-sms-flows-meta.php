<?php
/**
 * Email & SMS Flows Meta Configuration
 * 
 * Custom fields and meta configuration for the Email & SMS Flows page
 * This file can be used to define custom fields for the page
 */

// Add custom meta boxes for Email & SMS Flows page
function email_sms_flows_meta_boxes() {
    // Only add meta box for the Email & SMS Flows page
    global $post;
    if (!$post) {
        return;
    }
    
    $template = get_page_template_slug($post->ID);
    $slug = get_post_field('post_name', $post->ID);
    
    // Only add meta box for the Email & SMS Flows page template or slug
    if ($template !== 'page-email-sms-flows.php' && $slug !== 'email-sms-flows') {
        return;
    }
    
    add_meta_box(
        'email_sms_flows_settings',
        'Email & SMS Flows Settings',
        'email_sms_flows_meta_callback',
        'page',
        'normal',
        'high'
    );
}

// Meta box callback function
function email_sms_flows_meta_callback($post) {
    // Add nonce for security
    wp_nonce_field('email_sms_flows_meta', 'email_sms_flows_meta_nonce');
    
    ?>
    <style>
        .email-sms-flows-meta-section { margin-bottom: 25px; padding: 15px; border: 1px solid #ddd; }
        .email-sms-flows-meta-section h3 { margin-top: 0; color: #23282d; }
        .email-sms-flows-meta-field { margin-bottom: 15px; }
        .email-sms-flows-meta-field label { display: block; margin-bottom: 5px; font-weight: 600; }
        .email-sms-flows-meta-field input, .email-sms-flows-meta-field textarea { width: 100%; }
        .email-sms-flows-meta-field textarea { height: 80px; }
        .email-sms-flows-stats-row { display: flex; gap: 20px; }
        .email-sms-flows-stats-row .email-sms-flows-meta-field { flex: 1; }
    </style>

    <div class="email-sms-flows-meta-section">
        <h3>Hero Section</h3>
        <div class="email-sms-flows-meta-field">
            <label>Hero Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_hero_title', true) ?: 'Email & SMS Automation Flows', 'email_sms_flows_hero_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main page heading. HTML allowed for gradient text.</p>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Hero Subtitle</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_hero_subtitle', true) ?: 'Create sophisticated multi-channel communication sequences that nurture leads, recover abandoned carts, and build lasting customer relationships through intelligent email and SMS automation.', 'email_sms_flows_hero_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Subtitle text below the main heading.</p>
        </div>
        <div class="email-sms-flows-stats-row">
            <div class="email-sms-flows-meta-field">
                <label>Hero Stat 1 Number</label>
                <input type="text" name="email_sms_flows_hero_stat_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_hero_stat_1_number', true) ?: '580%'); ?>" />
            </div>
            <div class="email-sms-flows-meta-field">
                <label>Hero Stat 1 Label</label>
                <input type="text" name="email_sms_flows_hero_stat_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_hero_stat_1_label', true) ?: 'Revenue Per Email Increase'); ?>" />
            </div>
        </div>
        <div class="email-sms-flows-stats-row">
            <div class="email-sms-flows-meta-field">
                <label>Hero Stat 2 Number</label>
                <input type="text" name="email_sms_flows_hero_stat_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_hero_stat_2_number', true) ?: '45%'); ?>" />
            </div>
            <div class="email-sms-flows-meta-field">
                <label>Hero Stat 2 Label</label>
                <input type="text" name="email_sms_flows_hero_stat_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_hero_stat_2_label', true) ?: 'Higher SMS Open Rates'); ?>" />
            </div>
        </div>
        <div class="email-sms-flows-stats-row">
            <div class="email-sms-flows-meta-field">
                <label>Hero Stat 3 Number</label>
                <input type="text" name="email_sms_flows_hero_stat_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_hero_stat_3_number', true) ?: '320%'); ?>" />
            </div>
            <div class="email-sms-flows-meta-field">
                <label>Hero Stat 3 Label</label>
                <input type="text" name="email_sms_flows_hero_stat_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_hero_stat_3_label', true) ?: 'Cart Recovery Improvement'); ?>" />
            </div>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Hero Button Text</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_hero_button', true) ?: 'Build Your Flows', 'email_sms_flows_hero_button', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Text for the CTA button.</p>
        </div>
    </div>

    <div class="email-sms-flows-meta-section">
        <h3>Service Overview</h3>
        <div class="email-sms-flows-meta-field">
            <label>Overview Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_overview_title', true) ?: 'Intelligent Multi-Channel Communication', 'email_sms_flows_overview_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main heading for the overview section.</p>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Overview Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_overview_description', true) ?: 'Transform one-time visitors into loyal customers with strategically designed email and SMS automation flows. Our data-driven approach ensures the right message reaches the right person at the perfect moment, maximising engagement and conversions.', 'email_sms_flows_overview_description', array('textarea_rows' => 6, 'media_buttons' => false)); ?>
            <p class="description">Main description text for the overview section.</p>
        </div>

        <h4>Service Items</h4>
        <div class="email-sms-flows-meta-field">
            <label>Service 1 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_1_title', true) ?: 'Welcome Email Series', 'email_sms_flows_service_1_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Service 1 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_1_desc', true) ?: 'Onboard new subscribers with engaging welcome sequences that build trust and drive first purchases.', 'email_sms_flows_service_1_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-sms-flows-meta-field">
            <label>Service 2 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_2_title', true) ?: 'Abandoned Cart Recovery', 'email_sms_flows_service_2_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Service 2 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_2_desc', true) ?: 'Multi-step email and SMS sequences that recover lost sales with personalised product reminders and incentives.', 'email_sms_flows_service_2_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-sms-flows-meta-field">
            <label>Service 3 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_3_title', true) ?: 'SMS Marketing Automation', 'email_sms_flows_service_3_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Service 3 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_3_desc', true) ?: 'High-impact SMS campaigns for time-sensitive offers, shipping updates, and urgent customer communications.', 'email_sms_flows_service_3_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-sms-flows-meta-field">
            <label>Service 4 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_4_title', true) ?: 'Lead Nurturing Sequences', 'email_sms_flows_service_4_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Service 4 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_4_desc', true) ?: 'Educational and value-driven email flows that guide prospects through your sales funnel over time.', 'email_sms_flows_service_4_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-sms-flows-meta-field">
            <label>Service 5 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_5_title', true) ?: 'Re-engagement Campaigns', 'email_sms_flows_service_5_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Service 5 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_5_desc', true) ?: 'Win back inactive subscribers and customers with targeted campaigns designed to rekindle interest.', 'email_sms_flows_service_5_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-sms-flows-meta-field">
            <label>Service 6 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_6_title', true) ?: 'VIP Customer Flows', 'email_sms_flows_service_6_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Service 6 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_service_6_desc', true) ?: 'Exclusive communications for high-value customers with special offers and premium experiences.', 'email_sms_flows_service_6_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>
    </div>

    <div class="email-sms-flows-meta-section">
        <h3>Case Study</h3>
        <div class="email-sms-flows-meta-field">
            <label>Case Study Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_case_title', true) ?: 'Case Study: E-commerce Revenue Recovery', 'email_sms_flows_case_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main heading for the case study.</p>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Case Study Intro</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_case_intro', true) ?: 'How we helped an online fashion retailer increase revenue per email by 580% and recover 320% more abandoned carts through strategic email and SMS automation flows.', 'email_sms_flows_case_intro', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Introduction paragraph for the case study.</p>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Challenge Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_case_challenge', true) ?: 'A growing fashion e-commerce brand was losing 78% of potential customers to cart abandonment and had low customer lifetime value. Their basic email marketing generated minimal revenue, and they had no SMS strategy to complement their efforts.', 'email_sms_flows_case_challenge', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Description of the client's challenges.</p>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Solution Points (one per line)</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_case_solution', true) ?: "Designed 12-email welcome series with fashion styling tips and progressive discounts\nCreated 5-step abandoned cart recovery flow with SMS integration\nBuilt browse abandonment flows for window shoppers\nImplemented post-purchase upsell and review request sequences\nDeveloped VIP customer program with exclusive SMS alerts", 'email_sms_flows_case_solution', array('textarea_rows' => 6, 'media_buttons' => false)); ?>
            <p class="description">List of solutions implemented (each on a new line).</p>
        </div>
        
        <div class="email-sms-flows-stats-row">
            <div class="email-sms-flows-meta-field">
                <label>Result 1 Number</label>
                <input type="text" name="email_sms_flows_result_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_result_1_number', true) ?: '580%'); ?>" />
            </div>
            <div class="email-sms-flows-meta-field">
                <label>Result 1 Label</label>
                <input type="text" name="email_sms_flows_result_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_result_1_label', true) ?: 'Revenue Per Email Increase'); ?>" />
            </div>
        </div>
        <div class="email-sms-flows-stats-row">
            <div class="email-sms-flows-meta-field">
                <label>Result 2 Number</label>
                <input type="text" name="email_sms_flows_result_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_result_2_number', true) ?: '320%'); ?>" />
            </div>
            <div class="email-sms-flows-meta-field">
                <label>Result 2 Label</label>
                <input type="text" name="email_sms_flows_result_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_result_2_label', true) ?: 'Cart Recovery Improvement'); ?>" />
            </div>
        </div>
        <div class="email-sms-flows-stats-row">
            <div class="email-sms-flows-meta-field">
                <label>Result 3 Number</label>
                <input type="text" name="email_sms_flows_result_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_result_3_number', true) ?: '45%'); ?>" />
            </div>
            <div class="email-sms-flows-meta-field">
                <label>Result 3 Label</label>
                <input type="text" name="email_sms_flows_result_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_result_3_label', true) ?: 'SMS Open Rate'); ?>" />
            </div>
        </div>
        <div class="email-sms-flows-stats-row">
            <div class="email-sms-flows-meta-field">
                <label>Result 4 Number</label>
                <input type="text" name="email_sms_flows_result_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_result_4_number', true) ?: '£185K'); ?>" />
            </div>
            <div class="email-sms-flows-meta-field">
                <label>Result 4 Label</label>
                <input type="text" name="email_sms_flows_result_4_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_sms_flows_result_4_label', true) ?: 'Additional Monthly Revenue'); ?>" />
            </div>
        </div>
    </div>

    <div class="email-sms-flows-meta-section">
        <h3>Testimonial</h3>
        <div class="email-sms-flows-meta-field">
            <label>Testimonial Quote</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_testimonial_quote', true) ?: 'Our email and SMS flows are now our most profitable marketing channel. Aimpro\'s automation strategy increased our revenue per email by 580% and we\'re recovering 3x more abandoned carts. The ROI is incredible.', 'email_sms_flows_testimonial_quote', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Customer testimonial quote.</p>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Testimonial Author Name</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_testimonial_author', true) ?: 'Sophie Chen', 'email_sms_flows_testimonial_author', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Name of the person giving the testimonial.</p>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>Testimonial Author Position</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_testimonial_position', true) ?: 'Marketing Director, StyleBox Fashion', 'email_sms_flows_testimonial_position', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Position and company of the testimonial author.</p>
        </div>
    </div>

    <div class="email-sms-flows-meta-section">
        <h3>CTA Section</h3>
        <div class="email-sms-flows-meta-field">
            <label>CTA Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_cta_title', true) ?: 'Ready to Build Revenue-Generating Automation Flows?', 'email_sms_flows_cta_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main heading for the CTA section.</p>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>CTA Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_cta_description', true) ?: 'Stop leaving money on the table with basic email marketing. Our sophisticated email and SMS automation flows will turn your subscriber list into a predictable revenue engine that works 24/7.', 'email_sms_flows_cta_description', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Description text for the CTA section.</p>
        </div>
        <div class="email-sms-flows-meta-field">
            <label>CTA Button Text</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_sms_flows_cta_button', true) ?: 'Build Your Flows', 'email_sms_flows_cta_button', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Text for the CTA button.</p>
        </div>
    </div>
    <?php
}

// Save meta box data
function save_email_sms_flows_meta($post_id) {
    // Check nonce
    if (!isset($_POST['email_sms_flows_meta_nonce']) || 
        !wp_verify_nonce($_POST['email_sms_flows_meta_nonce'], 'email_sms_flows_meta')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    // Rich text fields that should use wp_kses_post
    $rich_text_fields = [
        'email_sms_flows_hero_title', 'email_sms_flows_hero_subtitle', 'email_sms_flows_hero_button',
        'email_sms_flows_overview_title', 'email_sms_flows_overview_description',
        'email_sms_flows_service_1_title', 'email_sms_flows_service_1_desc',
        'email_sms_flows_service_2_title', 'email_sms_flows_service_2_desc',
        'email_sms_flows_service_3_title', 'email_sms_flows_service_3_desc',
        'email_sms_flows_service_4_title', 'email_sms_flows_service_4_desc',
        'email_sms_flows_service_5_title', 'email_sms_flows_service_5_desc',
        'email_sms_flows_service_6_title', 'email_sms_flows_service_6_desc',
        'email_sms_flows_case_title', 'email_sms_flows_case_intro', 'email_sms_flows_case_challenge', 'email_sms_flows_case_solution',
        'email_sms_flows_testimonial_quote', 'email_sms_flows_testimonial_author', 'email_sms_flows_testimonial_position',
        'email_sms_flows_cta_title', 'email_sms_flows_cta_description', 'email_sms_flows_cta_button'
    ];

    // Regular text fields that should use sanitize_text_field
    $text_fields = [
        'email_sms_flows_hero_stat_1_number', 'email_sms_flows_hero_stat_1_label',
        'email_sms_flows_hero_stat_2_number', 'email_sms_flows_hero_stat_2_label',
        'email_sms_flows_hero_stat_3_number', 'email_sms_flows_hero_stat_3_label',
        'email_sms_flows_result_1_number', 'email_sms_flows_result_1_label',
        'email_sms_flows_result_2_number', 'email_sms_flows_result_2_label',
        'email_sms_flows_result_3_number', 'email_sms_flows_result_3_label',
        'email_sms_flows_result_4_number', 'email_sms_flows_result_4_label'
    ];

    // Save rich text fields
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, wp_kses_post($_POST[$field]));
        }
    }

    // Save regular text fields
    foreach ($text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}

// Hook into WordPress
add_action('add_meta_boxes', 'email_sms_flows_meta_boxes');
add_action('save_post', 'save_email_sms_flows_meta');
