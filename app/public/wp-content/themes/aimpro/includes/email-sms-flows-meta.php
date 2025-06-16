<?php
// Meta fields for Email & SMS Flows page
add_action('add_meta_boxes', function() {
    global $post;
    $template = get_page_template_slug($post->ID);
    $slug = get_post_field('post_name', $post->ID);
    if ($template === 'page-email-sms-flows.php' || $slug === 'email-sms-flows') {
        add_meta_box('email_sms_flows_meta', 'Email & SMS Flows Settings', 'email_sms_flows_meta_callback', 'page', 'normal', 'high');
    }
});

function email_sms_flows_meta_callback($post) {
    wp_nonce_field('email_sms_flows_meta', 'email_sms_flows_meta_nonce');
    ?>
    <style>
        .email-meta-section { margin-bottom: 25px; padding: 15px; border: 1px solid #ddd; }
        .email-meta-section h3 { margin-top: 0; color: #23282d; }
        .email-meta-field { margin-bottom: 15px; }
        .email-meta-field label { display: block; margin-bottom: 5px; font-weight: 600; }
        .email-meta-field input, .email-meta-field textarea { width: 100%; }
        .email-meta-field textarea { height: 80px; }
        .email-stats-row { display: flex; gap: 20px; }
        .email-stats-row .email-meta-field { flex: 1; }
    </style>

    <div class="email-meta-section">
        <h3>Hero Section</h3>
        <div class="email-meta-field">
            <label>Hero Title</label>
            <input type="text" name="email_hero_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_title', true) ?: 'Email & SMS Automation Flows'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Hero Subtitle</label>
            <textarea name="email_hero_subtitle"><?php echo esc_textarea(get_post_meta($post->ID, 'email_hero_subtitle', true) ?: 'Create sophisticated multi-channel communication sequences that nurture leads, recover abandoned carts, and build lasting customer relationships through intelligent email and SMS automation.'); ?></textarea>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Hero Stat 1 Number</label>
                <input type="text" name="email_hero_stat_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_1_number', true) ?: '580%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Hero Stat 1 Label</label>
                <input type="text" name="email_hero_stat_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_1_label', true) ?: 'Revenue Per Email Increase'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Hero Stat 2 Number</label>
                <input type="text" name="email_hero_stat_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_2_number', true) ?: '45%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Hero Stat 2 Label</label>
                <input type="text" name="email_hero_stat_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_2_label', true) ?: 'Higher SMS Open Rates'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Hero Stat 3 Number</label>
                <input type="text" name="email_hero_stat_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_3_number', true) ?: '320%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Hero Stat 3 Label</label>
                <input type="text" name="email_hero_stat_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_3_label', true) ?: 'Cart Recovery Improvement'); ?>" />
            </div>
        </div>
        <div class="email-meta-field">
            <label>Hero Primary Button Text</label>
            <input type="text" name="email_hero_primary_btn" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_primary_btn', true) ?: 'Build Your Flows'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Hero Secondary Button Text</label>
            <input type="text" name="email_hero_secondary_btn" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_secondary_btn', true) ?: 'View Packages'); ?>" />
        </div>
    </div>

    <div class="email-meta-section">
        <h3>Service Overview</h3>
        <div class="email-meta-field">
            <label>Overview Title</label>
            <input type="text" name="email_overview_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_overview_title', true) ?: 'Intelligent Multi-Channel Communication'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Overview Description</label>
            <textarea name="email_overview_description"><?php echo esc_textarea(get_post_meta($post->ID, 'email_overview_description', true) ?: 'Transform one-time visitors into loyal customers with strategically designed email and SMS automation flows. Our data-driven approach ensures the right message reaches the right person at the perfect moment, maximizing engagement and conversions.'); ?></textarea>
        </div>

        <h4>Service Items</h4>
        <div class="email-meta-field">
            <label>Service 1 Title</label>
            <input type="text" name="email_service_1_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_1_title', true) ?: 'Welcome Email Series'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 1 Description</label>
            <textarea name="email_service_1_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_1_desc', true) ?: 'Onboard new subscribers with engaging welcome sequences that build trust and drive first purchases.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 2 Title</label>
            <input type="text" name="email_service_2_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_2_title', true) ?: 'Abandoned Cart Recovery'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 2 Description</label>
            <textarea name="email_service_2_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_2_desc', true) ?: 'Multi-step email and SMS sequences that recover lost sales with personalized product reminders and incentives.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 3 Title</label>
            <input type="text" name="email_service_3_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_3_title', true) ?: 'SMS Marketing Automation'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 3 Description</label>
            <textarea name="email_service_3_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_3_desc', true) ?: 'High-impact SMS campaigns for time-sensitive offers, shipping updates, and urgent customer communications.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 4 Title</label>
            <input type="text" name="email_service_4_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_4_title', true) ?: 'Lead Nurturing Sequences'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 4 Description</label>
            <textarea name="email_service_4_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_4_desc', true) ?: 'Educational and value-driven email flows that guide prospects through your sales funnel over time.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 5 Title</label>
            <input type="text" name="email_service_5_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_5_title', true) ?: 'Re-engagement Campaigns'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 5 Description</label>
            <textarea name="email_service_5_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_5_desc', true) ?: 'Win back inactive subscribers and customers with targeted campaigns designed to rekindle interest.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 6 Title</label>
            <input type="text" name="email_service_6_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_6_title', true) ?: 'VIP Customer Flows'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 6 Description</label>
            <textarea name="email_service_6_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_6_desc', true) ?: 'Exclusive communications for high-value customers with special offers and premium experiences.'); ?></textarea>
        </div>
    </div>

    <div class="email-meta-section">
        <h3>Case Study</h3>
        <div class="email-meta-field">
            <label>Case Study Title</label>
            <input type="text" name="email_case_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_case_title', true) ?: 'Case Study: E-commerce Revenue Recovery'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Case Study Intro</label>
            <textarea name="email_case_intro"><?php echo esc_textarea(get_post_meta($post->ID, 'email_case_intro', true) ?: 'How we helped an online fashion retailer increase revenue per email by 580% and recover 320% more abandoned carts through strategic email and SMS automation flows.'); ?></textarea>
        </div>
        <div class="email-meta-field">
            <label>Challenge Description</label>
            <textarea name="email_case_challenge"><?php echo esc_textarea(get_post_meta($post->ID, 'email_case_challenge', true) ?: 'A growing fashion e-commerce brand was losing 78% of potential customers to cart abandonment and had low customer lifetime value. Their basic email marketing generated minimal revenue, and they had no SMS strategy to complement their efforts.'); ?></textarea>
        </div>
        <div class="email-meta-field">
            <label>Solution Points (one per line)</label>
            <textarea name="email_case_solution"><?php echo esc_textarea(get_post_meta($post->ID, 'email_case_solution', true) ?: "Designed 12-email welcome series with fashion styling tips and progressive discounts\nCreated 5-step abandoned cart recovery flow with SMS integration\nBuilt browse abandonment flows for window shoppers\nImplemented post-purchase upsell and review request sequences\nDeveloped VIP customer program with exclusive SMS alerts"); ?></textarea>
        </div>
        
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Result 1 Number</label>
                <input type="text" name="email_result_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_1_number', true) ?: '580%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Result 1 Label</label>
                <input type="text" name="email_result_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_1_label', true) ?: 'Revenue Per Email Increase'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Result 2 Number</label>
                <input type="text" name="email_result_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_2_number', true) ?: '320%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Result 2 Label</label>
                <input type="text" name="email_result_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_2_label', true) ?: 'Cart Recovery Improvement'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Result 3 Number</label>
                <input type="text" name="email_result_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_3_number', true) ?: '45%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Result 3 Label</label>
                <input type="text" name="email_result_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_3_label', true) ?: 'SMS Open Rate'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Result 4 Number</label>
                <input type="text" name="email_result_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_4_number', true) ?: '£185K'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Result 4 Label</label>
                <input type="text" name="email_result_4_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_4_label', true) ?: 'Additional Monthly Revenue'); ?>" />
            </div>
        </div>
    </div>

    <div class="email-meta-section">
        <h3>Process Section</h3>
        <div class="email-meta-field">
            <label>Process Title</label>
            <input type="text" name="email_process_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_process_title', true) ?: 'Our Flow Development Process'); ?>" />
        </div>
        
        <?php for ($i = 1; $i <= 5; $i++): 
            $step_titles = [
                1 => 'Customer Journey Mapping',
                2 => 'Flow Strategy Design', 
                3 => 'Content Creation',
                4 => 'Technical Implementation',
                5 => 'Testing & Optimization'
            ];
            $step_descriptions = [
                1 => 'Analyze your customer touchpoints and identify key moments where automation can drive engagement and conversions.',
                2 => 'Create detailed flow maps with timing, triggers, and branching logic based on customer behavior and preferences.',
                3 => 'Develop compelling email and SMS content with persuasive copy, engaging visuals, and clear calls-to-action.',
                4 => 'Build and configure automation flows with proper tracking, segmentation, and cross-channel coordination.',
                5 => 'A/B test flow performance and continuously optimize timing, content, and triggers for maximum effectiveness.'
            ];
        ?>
        <h4>Step <?php echo $i; ?></h4>
        <div class="email-meta-field">
            <label>Step <?php echo $i; ?> Title</label>
            <input type="text" name="email_step_<?php echo $i; ?>_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_step_' . $i . '_title', true) ?: $step_titles[$i]); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Step <?php echo $i; ?> Description</label>
            <textarea name="email_step_<?php echo $i; ?>_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_step_' . $i . '_desc', true) ?: $step_descriptions[$i]); ?></textarea>
        </div>
        <?php endfor; ?>
    </div>

    <div class="email-meta-section">
        <h3>Testimonial</h3>
        <div class="email-meta-field">
            <label>Testimonial Quote</label>
            <textarea name="email_testimonial_quote"><?php echo esc_textarea(get_post_meta($post->ID, 'email_testimonial_quote', true) ?: 'Our email and SMS flows are now our most profitable marketing channel. Aimpro\'s automation strategy increased our revenue per email by 580% and we\'re recovering 3x more abandoned carts. The ROI is incredible.'); ?></textarea>
        </div>
        <div class="email-meta-field">
            <label>Testimonial Author Name</label>
            <input type="text" name="email_testimonial_author" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_testimonial_author', true) ?: 'Sophie Chen'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Testimonial Author Position</label>
            <input type="text" name="email_testimonial_position" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_testimonial_position', true) ?: 'Marketing Director, StyleBox Fashion'); ?>" />
        </div>
    </div>

    <div class="email-meta-section">
        <h3>CTA Section</h3>
        <div class="email-meta-field">
            <label>CTA Title</label>
            <input type="text" name="email_cta_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_cta_title', true) ?: 'Ready to Build Revenue-Generating Automation Flows?'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>CTA Description</label>
            <textarea name="email_cta_description"><?php echo esc_textarea(get_post_meta($post->ID, 'email_cta_description', true) ?: 'Stop leaving money on the table with basic email marketing. Our sophisticated email and SMS automation flows will turn your subscriber list into a predictable revenue engine that works 24/7.'); ?></textarea>
        </div>
        <div class="email-meta-field">
            <label>CTA Button Text</label>
            <input type="text" name="email_cta_button" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_cta_button', true) ?: 'Build Your Flows'); ?>" />
        </div>
    </div>
    <?php
}

// Save Email & SMS Flows meta data
add_action('save_post', function($post_id) {
    if (!isset($_POST['email_sms_flows_meta_nonce']) || !wp_verify_nonce($_POST['email_sms_flows_meta_nonce'], 'email_sms_flows_meta')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    $email_fields = [
        'email_hero_title', 'email_hero_subtitle',
        'email_hero_stat_1_number', 'email_hero_stat_1_label',
        'email_hero_stat_2_number', 'email_hero_stat_2_label',
        'email_hero_stat_3_number', 'email_hero_stat_3_label',
        'email_hero_primary_btn', 'email_hero_secondary_btn',
        'email_overview_title', 'email_overview_description',
        'email_service_1_title', 'email_service_1_desc',
        'email_service_2_title', 'email_service_2_desc',
        'email_service_3_title', 'email_service_3_desc',
        'email_service_4_title', 'email_service_4_desc',
        'email_service_5_title', 'email_service_5_desc',
        'email_service_6_title', 'email_service_6_desc',
        'email_case_title', 'email_case_intro', 'email_case_challenge', 'email_case_solution',
        'email_result_1_number', 'email_result_1_label',
        'email_result_2_number', 'email_result_2_label',
        'email_result_3_number', 'email_result_3_label',
        'email_result_4_number', 'email_result_4_label',
        'email_process_title',
        'email_step_1_title', 'email_step_1_desc',
        'email_step_2_title', 'email_step_2_desc',
        'email_step_3_title', 'email_step_3_desc',
        'email_step_4_title', 'email_step_4_desc',
        'email_step_5_title', 'email_step_5_desc',
        'email_testimonial_quote', 'email_testimonial_author', 'email_testimonial_position',
        'email_cta_title', 'email_cta_description', 'email_cta_button'
    ];

    foreach ($email_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_textarea_field($_POST[$field]));
        }
    }
});
?>
