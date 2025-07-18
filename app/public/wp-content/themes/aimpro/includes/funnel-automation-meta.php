<?php
// Meta fields for Sales Funnel Automation page
add_action('add_meta_boxes', function() {
    global $post;
    $template = get_page_template_slug($post->ID);
    $slug = get_post_field('post_name', $post->ID);
    if ($template === 'page-funnel-automation.php' || $slug === 'funnel-automation') {
        add_meta_box('funnel_automation_meta', 'Sales Funnel Automation Settings', 'funnel_automation_meta_callback', 'page', 'normal', 'high');
    }
});

function funnel_automation_meta_callback($post) {
    wp_nonce_field('funnel_automation_meta', 'funnel_automation_meta_nonce');
    ?>
    <style>
        .funnel-automation-meta-section { margin-bottom: 25px; padding: 15px; border: 1px solid #ddd; }
        .funnel-automation-meta-section h3 { margin-top: 0; color: #23282d; }
        .funnel-automation-meta-field { margin-bottom: 15px; }
        .funnel-automation-meta-field label { display: block; margin-bottom: 5px; font-weight: 600; }
        .funnel-automation-meta-field input, .funnel-automation-meta-field textarea { width: 100%; }
        .funnel-automation-meta-field textarea { height: 80px; }
        .funnel-automation-stats-row { display: flex; gap: 20px; }
        .funnel-automation-stats-row .funnel-automation-meta-field { flex: 1; }
    </style>

    <div class="funnel-automation-meta-section">
        <h3>Hero Section</h3>
        <div class="funnel-automation-meta-field">
            <label>Hero Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_hero_title', true) ?: 'Sales Funnel Automation', 'funnel_automation_hero_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main hero section heading. HTML allowed for formatting.</p>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Hero Subtitle</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_hero_subtitle', true) ?: 'Build intelligent sales funnels that automatically guide prospects from awareness to purchase, nurturing leads at every stage while you focus on growing your business.', 'funnel_automation_hero_subtitle', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
            <p class="description">Hero subtitle text content.</p>
        </div>
        <div class="funnel-automation-stats-row">
            <div class="funnel-automation-meta-field">
                <label>Hero Stat 1 Number</label>
                <input type="text" name="funnel_automation_hero_stat_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_hero_stat_1_number', true) ?: '420%'); ?>" />
            </div>
            <div class="funnel-automation-meta-field">
                <label>Hero Stat 1 Label</label>
                <input type="text" name="funnel_automation_hero_stat_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_hero_stat_1_label', true) ?: 'Conversion Rate Increase'); ?>" />
            </div>
        </div>
        <div class="funnel-automation-stats-row">
            <div class="funnel-automation-meta-field">
                <label>Hero Stat 2 Number</label>
                <input type="text" name="funnel_automation_hero_stat_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_hero_stat_2_number', true) ?: '75%'); ?>" />
            </div>
            <div class="funnel-automation-meta-field">
                <label>Hero Stat 2 Label</label>
                <input type="text" name="funnel_automation_hero_stat_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_hero_stat_2_label', true) ?: 'Less Manual Work'); ?>" />
            </div>
        </div>
        <div class="funnel-automation-stats-row">
            <div class="funnel-automation-meta-field">
                <label>Hero Stat 3 Number</label>
                <input type="text" name="funnel_automation_hero_stat_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_hero_stat_3_number', true) ?: '180%'); ?>" />
            </div>
            <div class="funnel-automation-meta-field">
                <label>Hero Stat 3 Label</label>
                <input type="text" name="funnel_automation_hero_stat_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_hero_stat_3_label', true) ?: 'Revenue Growth'); ?>" />
            </div>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Hero Primary Button Text</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_hero_primary_btn', true) ?: 'Build Your Funnel', 'funnel_automation_hero_primary_btn', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Primary CTA button text.</p>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Hero Secondary Button Text</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_hero_secondary_btn', true) ?: 'View Packages', 'funnel_automation_hero_secondary_btn', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Secondary CTA button text.</p>
        </div>
    </div>

    <div class="funnel-automation-meta-section">
        <h3>Service Overview</h3>
        <div class="funnel-automation-meta-field">
            <label>Overview Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_overview_title', true) ?: 'Intelligent Sales Funnel Design & Automation', 'funnel_automation_overview_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Service overview section heading.</p>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Overview Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_overview_description', true) ?: 'Transform your scattered marketing efforts into a cohesive, automated system that consistently converts prospects into customers. Our funnel automation strategies eliminate manual bottlenecks and ensure no lead falls through the cracks.', 'funnel_automation_overview_description', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
            <p class="description">Overview description text.</p>
        </div>

        <h4>Service Items</h4>
        <div class="funnel-automation-meta-field">
            <label>Service 1 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_1_title', true) ?: 'Funnel Strategy & Design', 'funnel_automation_service_1_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Service 1 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_1_desc', true) ?: 'Custom funnel architecture tailored to your customer journey with optimised touchpoints and conversion paths.', 'funnel_automation_service_1_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
        </div>

        <div class="funnel-automation-meta-field">
            <label>Service 2 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_2_title', true) ?: 'Lead Magnet Creation', 'funnel_automation_service_2_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Service 2 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_2_desc', true) ?: 'Compelling lead magnets and opt-in offers that attract your ideal prospects and start the nurturing process.', 'funnel_automation_service_2_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
        </div>

        <div class="funnel-automation-meta-field">
            <label>Service 3 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_3_title', true) ?: 'Landing Page optimisation', 'funnel_automation_service_3_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Service 3 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_3_desc', true) ?: 'High-converting landing pages designed specifically for each funnel stage with focused messaging and clear CTAs.', 'funnel_automation_service_3_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
        </div>

        <div class="funnel-automation-meta-field">
            <label>Service 4 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_4_title', true) ?: 'Multi-Step Sequences', 'funnel_automation_service_4_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Service 4 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_4_desc', true) ?: 'Automated email and SMS sequences that nurture leads through each stage of the buying journey.', 'funnel_automation_service_4_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
        </div>

        <div class="funnel-automation-meta-field">
            <label>Service 5 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_5_title', true) ?: 'Conversion Tracking', 'funnel_automation_service_5_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Service 5 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_5_desc', true) ?: 'Comprehensive analytics and tracking to measure funnel performance and identify optimisation opportunities.', 'funnel_automation_service_5_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
        </div>

        <div class="funnel-automation-meta-field">
            <label>Service 6 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_6_title', true) ?: 'Continuous optimisation', 'funnel_automation_service_6_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Service 6 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_service_6_desc', true) ?: 'Data-driven improvements and A/B testing to maximise conversion rates at every funnel stage.', 'funnel_automation_service_6_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
        </div>
    </div>

    <div class="funnel-automation-meta-section">
        <h3>Case Study</h3>
        <div class="funnel-automation-meta-field">
            <label>Case Study Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_case_title', true) ?: 'Case Study: Coaching Business Transformation', 'funnel_automation_case_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Case Study Intro</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_case_intro', true) ?: 'How we helped a business coach increase conversions by 420% and automate 75% of their sales process through intelligent funnel automation, generating £1.2M in additional revenue.', 'funnel_automation_case_intro', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Challenge Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_case_challenge', true) ?: 'A successful business coach was spending 60+ hours per week manually following up with leads, conducting discovery calls, and nurturing prospects. Despite high expertise, their conversion rate was only 8% and they couldn\'t scale beyond their time limitations.', 'funnel_automation_case_challenge', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Solution Points (one per line)</label>
            <textarea name="funnel_automation_case_solution"><?php echo esc_textarea(get_post_meta($post->ID, 'funnel_automation_case_solution', true) ?: "Designed 5-stage automated funnel with strategic touchpoints\nCreated high-value lead magnet (business assessment tool)\nBuilt conversion-optimised landing pages for each funnel stage\nImplemented automated email sequences with personalised video messages\nSet up automated booking system with pre-qualification questions"); ?></textarea>
        </div>
        
        <div class="funnel-automation-stats-row">
            <div class="funnel-automation-meta-field">
                <label>Result 1 Number</label>
                <input type="text" name="funnel_automation_result_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_result_1_number', true) ?: '420%'); ?>" />
            </div>
            <div class="funnel-automation-meta-field">
                <label>Result 1 Label</label>
                <input type="text" name="funnel_automation_result_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_result_1_label', true) ?: 'Conversion Rate Increase'); ?>" />
            </div>
        </div>
        <div class="funnel-automation-stats-row">
            <div class="funnel-automation-meta-field">
                <label>Result 2 Number</label>
                <input type="text" name="funnel_automation_result_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_result_2_number', true) ?: '75%'); ?>" />
            </div>
            <div class="funnel-automation-meta-field">
                <label>Result 2 Label</label>
                <input type="text" name="funnel_automation_result_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_result_2_label', true) ?: 'Process Automation'); ?>" />
            </div>
        </div>
        <div class="funnel-automation-stats-row">
            <div class="funnel-automation-meta-field">
                <label>Result 3 Number</label>
                <input type="text" name="funnel_automation_result_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_result_3_number', true) ?: '180%'); ?>" />
            </div>
            <div class="funnel-automation-meta-field">
                <label>Result 3 Label</label>
                <input type="text" name="funnel_automation_result_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_result_3_label', true) ?: 'Revenue Growth'); ?>" />
            </div>
        </div>
        <div class="funnel-automation-stats-row">
            <div class="funnel-automation-meta-field">
                <label>Result 4 Number</label>
                <input type="text" name="funnel_automation_result_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_result_4_number', true) ?: '�1.2M'); ?>" />
            </div>
            <div class="funnel-automation-meta-field">
                <label>Result 4 Label</label>
                <input type="text" name="funnel_automation_result_4_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_result_4_label', true) ?: 'Additional Annual Revenue'); ?>" />
            </div>
        </div>
    </div>

    <div class="funnel-automation-meta-section">
        <h3>Process Section</h3>
        <div class="funnel-automation-meta-field">
            <label>Process Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_process_title', true) ?: 'Our Funnel Development Process', 'funnel_automation_process_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>
        
        <?php for ($i = 1; $i <= 5; $i++): 
            $step_titles = [
                1 => 'Customer Journey Analysis',
                2 => 'Funnel Strategy Design', 
                3 => 'Asset Creation',
                4 => 'Technical Implementation',
                5 => 'Testing & optimisation'
            ];
            $step_descriptions = [
                1 => 'Map your customer\'s buying journey and identify key touchpoints where automation can improve conversions.',
                2 => 'Create comprehensive funnel blueprint with conversion goals, messaging strategy, and automation triggers.',
                3 => 'Develop lead magnets, landing pages, email sequences, and all creative assets needed for the funnel.',
                4 => 'Build and configure all automation workflows, tracking systems, and integration connections.',
                5 => 'Launch with careful monitoring and continuous optimisation based on performance data and user behaviour.'
            ];
        ?>
        <h4>Step <?php echo $i; ?></h4>
        <div class="funnel-automation-meta-field">
            <label>Step <?php echo $i; ?> Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_step_' . $i . '_title', true) ?: $step_titles[$i], 'funnel_automation_step_' . $i . '_title', array('textarea_name' => 'funnel_automation_step_' . $i . '_title', 'textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Step <?php echo $i; ?> Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_step_' . $i . '_desc', true) ?: $step_descriptions[$i], 'funnel_automation_step_' . $i . '_desc', array('textarea_name' => 'funnel_automation_step_' . $i . '_desc', 'textarea_rows' => 4, 'media_buttons' => false)); ?>
        </div>
        <?php endfor; ?>
    </div>

    <div class="funnel-automation-meta-section">
        <h3>Testimonial</h3>
        <div class="funnel-automation-meta-field">
            <label>Testimonial Quote</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_testimonial_quote', true) ?: 'The funnel automation Aimpro built transformed my business completely. I went from working 60+ hours a week chasing leads to having a system that generates £1.2M annually while I focus on what I love most - coaching.', 'funnel_automation_testimonial_quote', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>Testimonial Author Name</label>
            <input type="text" name="funnel_automation_testimonial_author" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_testimonial_author', true) ?: 'Patricia Williams'); ?>" />
        </div>
        <div class="funnel-automation-meta-field">
            <label>Testimonial Author Position</label>
            <input type="text" name="funnel_automation_testimonial_position" value="<?php echo esc_attr(get_post_meta($post->ID, 'funnel_automation_testimonial_position', true) ?: 'Business Coach & Consultant'); ?>" />
        </div>
    </div>

    <div class="funnel-automation-meta-section">
        <h3>CTA Section</h3>
        <div class="funnel-automation-meta-field">
            <label>CTA Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_cta_title', true) ?: 'Ready to Automate Your Sales Funnel?', 'funnel_automation_cta_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>CTA Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_cta_description', true) ?: 'Stop losing leads to manual processes and inconsistent follow-up. Our intelligent funnel automation will transform your sales process and free up your time to focus on growing your business.', 'funnel_automation_cta_description', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
        </div>
        <div class="funnel-automation-meta-field">
            <label>CTA Button Text</label>
            <?php wp_editor(get_post_meta($post->ID, 'funnel_automation_cta_button', true) ?: 'Build Your Funnel', 'funnel_automation_cta_button', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
    </div>
    <?php
}

// Save Sales Funnel Automation meta data
add_action('save_post', function($post_id) {
    if (!isset($_POST['funnel_automation_meta_nonce']) || !wp_verify_nonce($_POST['funnel_automation_meta_nonce'], 'funnel_automation_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    // Rich text content fields
    $rich_text_fields = [
        'funnel_automation_hero_title', 'funnel_automation_hero_subtitle',
        'funnel_automation_hero_primary_btn', 'funnel_automation_hero_secondary_btn',
        'funnel_automation_overview_title', 'funnel_automation_overview_description',
        'funnel_automation_service_1_title', 'funnel_automation_service_1_desc',
        'funnel_automation_service_2_title', 'funnel_automation_service_2_desc',
        'funnel_automation_service_3_title', 'funnel_automation_service_3_desc',
        'funnel_automation_service_4_title', 'funnel_automation_service_4_desc',
        'funnel_automation_service_5_title', 'funnel_automation_service_5_desc',
        'funnel_automation_service_6_title', 'funnel_automation_service_6_desc',
        'funnel_automation_case_title', 'funnel_automation_case_intro', 'funnel_automation_case_challenge',
        'funnel_automation_process_title',
        'funnel_automation_step_1_title', 'funnel_automation_step_1_desc',
        'funnel_automation_step_2_title', 'funnel_automation_step_2_desc',
        'funnel_automation_step_3_title', 'funnel_automation_step_3_desc',
        'funnel_automation_step_4_title', 'funnel_automation_step_4_desc',
        'funnel_automation_step_5_title', 'funnel_automation_step_5_desc',
        'funnel_automation_testimonial_quote',
        'funnel_automation_cta_title', 'funnel_automation_cta_description', 'funnel_automation_cta_button'
    ];

    // Simple text fields (stats, numbers, names, etc.)
    $simple_text_fields = [
        'funnel_automation_hero_stat_1_number', 'funnel_automation_hero_stat_1_label',
        'funnel_automation_hero_stat_2_number', 'funnel_automation_hero_stat_2_label',
        'funnel_automation_hero_stat_3_number', 'funnel_automation_hero_stat_3_label',
        'funnel_automation_case_solution',
        'funnel_automation_result_1_number', 'funnel_automation_result_1_label',
        'funnel_automation_result_2_number', 'funnel_automation_result_2_label',
        'funnel_automation_result_3_number', 'funnel_automation_result_3_label',
        'funnel_automation_result_4_number', 'funnel_automation_result_4_label',
        'funnel_automation_testimonial_author', 'funnel_automation_testimonial_position'
    ];

    // Save rich text fields with wp_kses_post
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, wp_kses_post($_POST[$field]));
        }
    }

    // Save simple text fields with sanitize_text_field
    foreach ($simple_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
});
