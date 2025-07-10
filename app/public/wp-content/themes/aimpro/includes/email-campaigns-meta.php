<?php
// Meta fields for Email Campaigns page
add_action('add_meta_boxes', function() {
    global $post;
    $template = get_page_template_slug($post->ID);
    $slug = get_post_field('post_name', $post->ID);
    if ($template === 'page-email-campaigns.php' || $slug === 'email-campaigns') {
        add_meta_box('email_campaigns_meta', 'Email Campaigns Settings', 'email_campaigns_meta_callback', 'page', 'normal', 'high');
    }
});

function email_campaigns_meta_callback($post) {
    wp_nonce_field('email_campaigns_meta', 'email_campaigns_meta_nonce');
    ?>
    <style>
        .email-campaigns-meta-section { margin-bottom: 25px; padding: 15px; border: 1px solid #ddd; }
        .email-campaigns-meta-section h3 { margin-top: 0; color: #23282d; }
        .email-campaigns-meta-field { margin-bottom: 15px; }
        .email-campaigns-meta-field label { display: block; margin-bottom: 5px; font-weight: 600; }
        .email-campaigns-meta-field input, .email-campaigns-meta-field textarea { width: 100%; }
        .email-campaigns-meta-field textarea { height: 80px; }
        .email-campaigns-stats-row { display: flex; gap: 20px; }
        .email-campaigns-stats-row .email-campaigns-meta-field { flex: 1; }
    </style>

    <div class="email-campaigns-meta-section">
        <h3>Hero Section</h3>
        <div class="email-campaigns-meta-field">
            <label>Hero Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_hero_title', true) ?: 'Strategic Email Marketing Campaigns', 'email_campaigns_hero_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main page heading. HTML allowed for gradient text.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Hero Subtitle</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_hero_subtitle', true) ?: 'Drive engagement, nurture relationships, and boost sales with expertly crafted email campaigns that cut through inbox clutter and deliver measurable results for your business.', 'email_campaigns_hero_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Subtitle text below the main heading.</p>
        </div>
        <div class="email-campaigns-stats-row">
            <div class="email-campaigns-meta-field">
                <label>Hero Stat 1 Number</label>
                <input type="text" name="email_campaigns_hero_stat_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_hero_stat_1_number', true) ?: '4,200%'); ?>" />
            </div>
            <div class="email-campaigns-meta-field">
                <label>Hero Stat 1 Label</label>
                <input type="text" name="email_campaigns_hero_stat_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_hero_stat_1_label', true) ?: 'Average ROI'); ?>" />
            </div>
        </div>
        <div class="email-campaigns-stats-row">
            <div class="email-campaigns-meta-field">
                <label>Hero Stat 2 Number</label>
                <input type="text" name="email_campaigns_hero_stat_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_hero_stat_2_number', true) ?: '35%'); ?>" />
            </div>
            <div class="email-campaigns-meta-field">
                <label>Hero Stat 2 Label</label>
                <input type="text" name="email_campaigns_hero_stat_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_hero_stat_2_label', true) ?: 'Higher Open Rates'); ?>" />
            </div>
        </div>
        <div class="email-campaigns-stats-row">
            <div class="email-campaigns-meta-field">
                <label>Hero Stat 3 Number</label>
                <input type="text" name="email_campaigns_hero_stat_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_hero_stat_3_number', true) ?: '280%'); ?>" />
            </div>
            <div class="email-campaigns-meta-field">
                <label>Hero Stat 3 Label</label>
                <input type="text" name="email_campaigns_hero_stat_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_hero_stat_3_label', true) ?: 'Click-Through Improvement'); ?>" />
            </div>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Hero Primary Button Text</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_hero_primary_btn', true) ?: 'Launch Campaigns', 'email_campaigns_hero_primary_btn', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Text for the primary CTA button.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Hero Secondary Button Text</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_hero_secondary_btn', true) ?: 'View Packages', 'email_campaigns_hero_secondary_btn', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Text for the secondary CTA button.</p>
        </div>
    </div>

    <div class="email-campaigns-meta-section">
        <h3>Service Overview</h3>
        <div class="email-campaigns-meta-field">
            <label>Overview Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_overview_title', true) ?: 'Professional Email Campaign Management', 'email_campaigns_overview_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main heading for the overview section.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Overview Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_overview_description', true) ?: 'Email marketing remains one of the highest-ROI marketing channels when executed strategically. Our comprehensive email campaign services combine compelling design, persuasive copywriting, and advanced segmentation to deliver campaigns that your audience actually wants to read.', 'email_campaigns_overview_description', array('textarea_rows' => 6, 'media_buttons' => false)); ?>
            <p class="description">Main description text for the overview section.</p>
        </div>

        <h4>Service Items</h4>
        <div class="email-campaigns-meta-field">
            <label>Service 1 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_1_title', true) ?: 'Strategic Campaign Planning', 'email_campaigns_service_1_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Service 1 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_1_desc', true) ?: 'Data-driven campaign strategies aligned with your business goals and customer journey stages.', 'email_campaigns_service_1_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-campaigns-meta-field">
            <label>Service 2 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_2_title', true) ?: 'Professional Email Design', 'email_campaigns_service_2_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Service 2 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_2_desc', true) ?: 'Mobile-responsive, brand-aligned email templates that look stunning across all devices and email clients.', 'email_campaigns_service_2_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-campaigns-meta-field">
            <label>Service 3 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_3_title', true) ?: 'Conversion-Focused Copy', 'email_campaigns_service_3_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Service 3 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_3_desc', true) ?: 'Compelling subject lines and email content that drives opens, clicks, and conversions.', 'email_campaigns_service_3_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-campaigns-meta-field">
            <label>Service 4 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_4_title', true) ?: 'Advanced Segmentation', 'email_campaigns_service_4_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Service 4 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_4_desc', true) ?: 'Precise audience targeting based on behaviour, demographics, and purchase history for maximum relevance.', 'email_campaigns_service_4_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-campaigns-meta-field">
            <label>Service 5 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_5_title', true) ?: 'Performance optimisation', 'email_campaigns_service_5_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Service 5 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_5_desc', true) ?: 'Continuous A/B testing and optimisation to improve open rates, click-through rates, and conversions.', 'email_campaigns_service_5_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>

        <div class="email-campaigns-meta-field">
            <label>Service 6 Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_6_title', true) ?: 'Campaign Scheduling', 'email_campaigns_service_6_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Service 6 Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_service_6_desc', true) ?: 'Strategic timing and frequency optimisation to maximise engagement while avoiding subscriber fatigue.', 'email_campaigns_service_6_desc', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
        </div>
    </div>

    <div class="email-campaigns-meta-section">
        <h3>Case Study</h3>
        <div class="email-campaigns-meta-field">
            <label>Case Study Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_case_title', true) ?: 'Case Study: B2B Software Success', 'email_campaigns_case_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main heading for the case study.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Case Study Intro</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_case_intro', true) ?: 'How we helped a B2B software company increase their email marketing ROI by 4,200% and generate £350K in additional revenue through strategic campaign optimisation.', 'email_campaigns_case_intro', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Introduction paragraph for the case study.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Challenge Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_case_challenge', true) ?: 'A growing B2B software company had a large email list but poor engagement rates. Their generic newsletters generated minimal revenue, open rates were below 15%, and they were struggling to convert trial users into paying customers through email.', 'email_campaigns_case_challenge', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Description of the client's challenges.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Solution Points (one per line)</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_case_solution', true) ?: "Segmented list into 8 distinct audience groups based on user behaviour\nCreated targeted campaign series for each segment and buyer journey stage\nRedesigned email templates with mobile-first, conversion-focused approach\nImplemented advanced personalisation using behavioural data\nDeveloped product-specific campaigns with case studies and social proof", 'email_campaigns_case_solution', array('textarea_rows' => 6, 'media_buttons' => false)); ?>
            <p class="description">List of solutions implemented (each on a new line).</p>
        </div>
        
        <div class="email-campaigns-stats-row">
            <div class="email-campaigns-meta-field">
                <label>Result 1 Number</label>
                <input type="text" name="email_campaigns_result_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_result_1_number', true) ?: '4,200%'); ?>" />
            </div>
            <div class="email-campaigns-meta-field">
                <label>Result 1 Label</label>
                <input type="text" name="email_campaigns_result_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_result_1_label', true) ?: 'ROI Increase'); ?>" />
            </div>
        </div>
        <div class="email-campaigns-stats-row">
            <div class="email-campaigns-meta-field">
                <label>Result 2 Number</label>
                <input type="text" name="email_campaigns_result_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_result_2_number', true) ?: '58%'); ?>" />
            </div>
            <div class="email-campaigns-meta-field">
                <label>Result 2 Label</label>
                <input type="text" name="email_campaigns_result_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_result_2_label', true) ?: 'Open Rate Improvement'); ?>" />
            </div>
        </div>
        <div class="email-campaigns-stats-row">
            <div class="email-campaigns-meta-field">
                <label>Result 3 Number</label>
                <input type="text" name="email_campaigns_result_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_result_3_number', true) ?: '280%'); ?>" />
            </div>
            <div class="email-campaigns-meta-field">
                <label>Result 3 Label</label>
                <input type="text" name="email_campaigns_result_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_result_3_label', true) ?: 'Click-Through Rate Increase'); ?>" />
            </div>
        </div>
        <div class="email-campaigns-stats-row">
            <div class="email-campaigns-meta-field">
                <label>Result 4 Number</label>
                <input type="text" name="email_campaigns_result_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_result_4_number', true) ?: '�350K'); ?>" />
            </div>
            <div class="email-campaigns-meta-field">
                <label>Result 4 Label</label>
                <input type="text" name="email_campaigns_result_4_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_campaigns_result_4_label', true) ?: 'Additional Annual Revenue'); ?>" />
            </div>
        </div>
    </div>

    <div class="email-campaigns-meta-section">
        <h3>Process Section</h3>
        <div class="email-campaigns-meta-field">
            <label>Process Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_process_title', true) ?: 'Our Email Campaign Process', 'email_campaigns_process_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main heading for the process section.</p>
        </div>
        
        <?php for ($i = 1; $i <= 5; $i++): 
            $step_titles = [
                1 => 'Strategy & Planning',
                2 => 'Audience Segmentation', 
                3 => 'Content Creation',
                4 => 'Testing & Launch',
                5 => 'Analysis & optimisation'
            ];
            $step_descriptions = [
                1 => 'Define campaign objectives, target audiences, and key performance indicators aligned with your business goals.',
                2 => 'analyse your email list and create targeted segments based on behaviour, demographics, and engagement history.',
                3 => 'Develop compelling copy and design mobile-responsive templates that align with your brand and campaign goals.',
                4 => 'A/B test subject lines, content, and send times before launching to optimise campaign performance.',
                5 => 'Monitor performance metrics and continuously optimise future campaigns based on data insights.'
            ];
        ?>
        <h4>Step <?php echo $i; ?></h4>
        <div class="email-campaigns-meta-field">
            <label>Step <?php echo $i; ?> Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_step_' . $i . '_title', true) ?: $step_titles[$i], 'email_campaigns_step_' . $i . '_title', array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'email_campaigns_step_' . $i . '_title')); ?>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Step <?php echo $i; ?> Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_step_' . $i . '_desc', true) ?: $step_descriptions[$i], 'email_campaigns_step_' . $i . '_desc', array('textarea_rows' => 4, 'media_buttons' => false, 'textarea_name' => 'email_campaigns_step_' . $i . '_desc')); ?>
        </div>
        <?php endfor; ?>
    </div>

    <div class="email-campaigns-meta-section">
        <h3>Testimonial</h3>
        <div class="email-campaigns-meta-field">
            <label>Testimonial Quote</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_testimonial_quote', true) ?: 'Aimpro transformed our email marketing from an afterthought to our most profitable channel. Our ROI increased by 4,200% and we\'re generating £350K more revenue annually. Their strategic approach is unmatched.', 'email_campaigns_testimonial_quote', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Customer testimonial quote.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Testimonial Author Name</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_testimonial_author', true) ?: 'Michael Roberts', 'email_campaigns_testimonial_author', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Name of the person giving the testimonial.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>Testimonial Author Position</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_testimonial_position', true) ?: 'CEO, TechFlow Solutions', 'email_campaigns_testimonial_position', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Position and company of the testimonial author.</p>
        </div>
    </div>

    <div class="email-campaigns-meta-section">
        <h3>CTA Section</h3>
        <div class="email-campaigns-meta-field">
            <label>CTA Title</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_cta_title', true) ?: 'Ready to Launch High-Converting Email Campaigns?', 'email_campaigns_cta_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
            <p class="description">Main heading for the CTA section.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>CTA Description</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_cta_description', true) ?: 'Stop sending generic emails that get ignored. Our strategic email campaigns will transform your subscriber list into a revenue-generating machine with measurable ROI.', 'email_campaigns_cta_description', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
            <p class="description">Description text for the CTA section.</p>
        </div>
        <div class="email-campaigns-meta-field">
            <label>CTA Button Text</label>
            <?php wp_editor(get_post_meta($post->ID, 'email_campaigns_cta_button', true) ?: 'Launch Your Campaigns', 'email_campaigns_cta_button', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
            <p class="description">Text for the CTA button.</p>
        </div>
    </div>
    <?php
}

// Save Email Campaigns meta data
add_action('save_post', function($post_id) {
    if (!isset($_POST['email_campaigns_meta_nonce']) || !wp_verify_nonce($_POST['email_campaigns_meta_nonce'], 'email_campaigns_meta')) {
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
        'email_campaigns_hero_title', 'email_campaigns_hero_subtitle',
        'email_campaigns_hero_primary_btn', 'email_campaigns_hero_secondary_btn',
        'email_campaigns_overview_title', 'email_campaigns_overview_description',
        'email_campaigns_service_1_title', 'email_campaigns_service_1_desc',
        'email_campaigns_service_2_title', 'email_campaigns_service_2_desc',
        'email_campaigns_service_3_title', 'email_campaigns_service_3_desc',
        'email_campaigns_service_4_title', 'email_campaigns_service_4_desc',
        'email_campaigns_service_5_title', 'email_campaigns_service_5_desc',
        'email_campaigns_service_6_title', 'email_campaigns_service_6_desc',
        'email_campaigns_case_title', 'email_campaigns_case_intro', 'email_campaigns_case_challenge', 'email_campaigns_case_solution',
        'email_campaigns_process_title',
        'email_campaigns_step_1_title', 'email_campaigns_step_1_desc',
        'email_campaigns_step_2_title', 'email_campaigns_step_2_desc',
        'email_campaigns_step_3_title', 'email_campaigns_step_3_desc',
        'email_campaigns_step_4_title', 'email_campaigns_step_4_desc',
        'email_campaigns_step_5_title', 'email_campaigns_step_5_desc',
        'email_campaigns_testimonial_quote', 'email_campaigns_testimonial_author', 'email_campaigns_testimonial_position',
        'email_campaigns_cta_title', 'email_campaigns_cta_description', 'email_campaigns_cta_button'
    ];

    // Regular text fields that should use sanitize_text_field
    $text_fields = [
        'email_campaigns_hero_stat_1_number', 'email_campaigns_hero_stat_1_label',
        'email_campaigns_hero_stat_2_number', 'email_campaigns_hero_stat_2_label',
        'email_campaigns_hero_stat_3_number', 'email_campaigns_hero_stat_3_label',
        'email_campaigns_result_1_number', 'email_campaigns_result_1_label',
        'email_campaigns_result_2_number', 'email_campaigns_result_2_label',
        'email_campaigns_result_3_number', 'email_campaigns_result_3_label',
        'email_campaigns_result_4_number', 'email_campaigns_result_4_label'
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
});
