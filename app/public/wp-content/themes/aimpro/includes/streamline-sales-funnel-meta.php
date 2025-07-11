<?php
// Meta fields for Streamline Sales Funnel page
add_action('add_meta_boxes', function() {
    global $post;
    $template = get_page_template_slug($post->ID);
    $slug = get_post_field('post_name', $post->ID);
    if ($template === 'page-streamline-sales-funnel.php' || $slug === 'streamline-sales-funnel') {
        add_meta_box('streamline_sales_funnel_meta', 'Streamline Sales Funnel Settings', 'streamline_sales_funnel_meta_callback', 'page', 'normal', 'high');
    }
});

function streamline_sales_funnel_meta_callback($post) {
    wp_nonce_field('streamline_sales_funnel_meta', 'streamline_sales_funnel_meta_nonce');
    ?>
    <style>
        .streamline-meta-section { margin-bottom: 25px; padding: 15px; border: 1px solid #ddd; }
        .streamline-meta-section h3 { margin-top: 0; color: #23282d; }
        .streamline-meta-field { margin-bottom: 15px; }
        .streamline-meta-field label { display: block; margin-bottom: 5px; font-weight: 600; }
        .streamline-meta-field input, .streamline-meta-field textarea { width: 100%; }
        .streamline-meta-field textarea { height: 80px; }
        .streamline-stats-row { display: flex; gap: 20px; }
        .streamline-stats-row .streamline-meta-field { flex: 1; }
    </style>

    <div class="streamline-meta-section">
        <h3>Hero Section</h3>
        <div class="streamline-meta-field">
            <label>Hero Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_hero_title', true) ?: 'Streamline Your Sales Funnel',
                'streamline_hero_title',
                array(
                    'textarea_name' => 'streamline_hero_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Hero Subtitle</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_hero_subtitle', true) ?: 'Transform scattered marketing efforts into a cohesive, high-converting sales system that works around the clock.',
                'streamline_hero_subtitle',
                array(
                    'textarea_name' => 'streamline_hero_subtitle',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-stats-row">
            <div class="streamline-meta-field">
                <label>Hero Stat 1 Number</label>
                <input type="text" name="streamline_hero_stat_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_stat_1_number', true) ?: '340%'); ?>" />
            </div>
            <div class="streamline-meta-field">
                <label>Hero Stat 1 Label</label>
                <input type="text" name="streamline_hero_stat_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_stat_1_label', true) ?: 'Lead Quality Improvement'); ?>" />
            </div>
        </div>
        <div class="streamline-stats-row">
            <div class="streamline-meta-field">
                <label>Hero Stat 2 Number</label>
                <input type="text" name="streamline_hero_stat_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_stat_2_number', true) ?: '65%'); ?>" />
            </div>
            <div class="streamline-meta-field">
                <label>Hero Stat 2 Label</label>
                <input type="text" name="streamline_hero_stat_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_stat_2_label', true) ?: 'Faster Sales Cycle'); ?>" />
            </div>
        </div>
        <div class="streamline-stats-row">
            <div class="streamline-meta-field">
                <label>Hero Stat 3 Number</label>
                <input type="text" name="streamline_hero_stat_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_stat_3_number', true) ?: '180%'); ?>" />
            </div>
            <div class="streamline-meta-field">
                <label>Hero Stat 3 Label</label>
                <input type="text" name="streamline_hero_stat_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_stat_3_label', true) ?: 'Revenue Growth'); ?>" />
            </div>
        </div>
        <div class="streamline-meta-field">
            <label>Hero Primary Button Text</label>
            <input type="text" name="streamline_hero_primary_btn" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_primary_btn', true) ?: 'optimise My Funnel'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Hero Secondary Button Text</label>
            <input type="text" name="streamline_hero_secondary_btn" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_secondary_btn', true) ?: 'Free Audit'); ?>" />
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>Services Overview</h3>
        <div class="streamline-meta-field">
            <label>Overview Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_overview_title', true) ?: 'Complete Sales Funnel Streamlining Solutions',
                'streamline_overview_title',
                array(
                    'textarea_name' => 'streamline_overview_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Overview Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_overview_description', true) ?: 'Eliminate inefficiencies and gaps in your current sales process with our systematic approach to funnel optimisation and automation.',
                'streamline_overview_description',
                array(
                    'textarea_name' => 'streamline_overview_description',
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        
        <div class="streamline-meta-field">
            <label>Overview Image</label>
            <div style="display: flex; align-items: center; margin-bottom: 10px;">
                <div id="streamline_overview_image_preview" style="margin-right: 15px; min-width: 150px; min-height: 80px;">
                    <?php 
                    $overview_image = get_post_meta($post->ID, 'streamline_overview_image', true);
                    if ($overview_image) {
                        echo '<img src="' . esc_url($overview_image) . '" style="max-width: 150px; height: auto;" />';
                    }
                    ?>
                </div>
                <div>
                    <input type="hidden" name="streamline_overview_image" id="streamline_overview_image" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_overview_image', true)); ?>" />
                    <button type="button" class="button" id="streamline_overview_image_button">Choose Image</button>
                    <button type="button" class="button" id="streamline_overview_image_remove" style="margin-left: 10px;">Remove Image</button>
                    <p class="description">Recommended size: 600x400px</p>
                </div>
            </div>
        </div>

        <h4>Service Items</h4>
        <div class="streamline-meta-field">
            <label>Service 1 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_1_title', true) ?: 'Funnel Analysis & Audit',
                'streamline_service_1_title',
                array(
                    'textarea_name' => 'streamline_service_1_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Service 1 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_1_desc', true) ?: 'Comprehensive review of your existing sales process to identify bottlenecks, gaps, and optimisation opportunities.',
                'streamline_service_1_desc',
                array(
                    'textarea_name' => 'streamline_service_1_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Service 2 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_2_title', true) ?: 'Process Mapping & Design',
                'streamline_service_2_title',
                array(
                    'textarea_name' => 'streamline_service_2_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Service 2 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_2_desc', true) ?: 'Visual mapping of your optimised sales journey with clear touchpoints and decision paths for maximum efficiency.',
                'streamline_service_2_desc',
                array(
                    'textarea_name' => 'streamline_service_2_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Service 3 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_3_title', true) ?: 'Lead Qualification System',
                'streamline_service_3_title',
                array(
                    'textarea_name' => 'streamline_service_3_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Service 3 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_3_desc', true) ?: 'Automated lead scoring and qualification processes that ensure your team focuses on the highest-value prospects.',
                'streamline_service_3_desc',
                array(
                    'textarea_name' => 'streamline_service_3_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Service 4 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_4_title', true) ?: 'Nurture Sequence optimisation',
                'streamline_service_4_title',
                array(
                    'textarea_name' => 'streamline_service_4_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Service 4 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_4_desc', true) ?: 'Refined email and communication sequences that move prospects smoothly through each stage of your funnel.',
                'streamline_service_4_desc',
                array(
                    'textarea_name' => 'streamline_service_4_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Service 5 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_5_title', true) ?: 'Conversion Point Enhancement',
                'streamline_service_5_title',
                array(
                    'textarea_name' => 'streamline_service_5_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Service 5 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_5_desc', true) ?: 'Strategic optimisation of key conversion moments to reduce friction and increase completion rates.',
                'streamline_service_5_desc',
                array(
                    'textarea_name' => 'streamline_service_5_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Service 6 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_6_title', true) ?: 'Performance Monitoring',
                'streamline_service_6_title',
                array(
                    'textarea_name' => 'streamline_service_6_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Service 6 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_service_6_desc', true) ?: 'Ongoing analytics and reporting to track funnel performance and identify continuous improvement opportunities.',
                'streamline_service_6_desc',
                array(
                    'textarea_name' => 'streamline_service_6_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <h4>Problems We Solve</h4>
        <div class="streamline-meta-field">
            <label>Problems Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_problems_title', true) ?: 'Sales Funnel Problems We Solve:',
                'streamline_problems_title',
                array(
                    'textarea_name' => 'streamline_problems_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Problem 1</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_problem_1', true) ?: 'High drop-off rates between funnel stages',
                'streamline_problem_1',
                array(
                    'textarea_name' => 'streamline_problem_1',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Problem 2</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_problem_2', true) ?: 'Poor lead qualification and scoring systems',
                'streamline_problem_2',
                array(
                    'textarea_name' => 'streamline_problem_2',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Problem 3</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_problem_3', true) ?: 'Inconsistent follow-up and nurturing sequences',
                'streamline_problem_3',
                array(
                    'textarea_name' => 'streamline_problem_3',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Problem 4</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_problem_4', true) ?: 'Lack of funnel visibility and performance tracking',
                'streamline_problem_4',
                array(
                    'textarea_name' => 'streamline_problem_4',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Problem 5</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_problem_5', true) ?: 'Misaligned marketing and sales efforts',
                'streamline_problem_5',
                array(
                    'textarea_name' => 'streamline_problem_5',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Problem 6</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_problem_6', true) ?: 'Manual processes slowing down conversions',
                'streamline_problem_6',
                array(
                    'textarea_name' => 'streamline_problem_6',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>Case Study</h3>
        <div class="streamline-meta-field">
            <label>Case Study Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_case_title', true) ?: 'Case Study: TechFlow Solutions Results',
                'streamline_case_title',
                array(
                    'textarea_name' => 'streamline_case_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Case Study Intro</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_case_intro', true) ?: 'A B2B software company struggling with low conversion rates and long sales cycles. We completely redesigned their funnel strategy and implemented automated nurturing sequences.',
                'streamline_case_intro',
                array(
                    'textarea_name' => 'streamline_case_intro',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <h4>Case Study Results</h4>
        <div class="streamline-stats-row">
            <div class="streamline-meta-field">
                <label>Result 1 Number</label>
                <input type="text" name="streamline_result_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_1_number', true) ?: '340%'); ?>" />
            </div>
            <div class="streamline-meta-field">
                <label>Result 1 Label</label>
                <input type="text" name="streamline_result_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_1_label', true) ?: 'Conversion Rate Increase'); ?>" />
            </div>
        </div>
        <div class="streamline-stats-row">
            <div class="streamline-meta-field">
                <label>Result 2 Number</label>
                <input type="text" name="streamline_result_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_2_number', true) ?: '45%'); ?>" />
            </div>
            <div class="streamline-meta-field">
                <label>Result 2 Label</label>
                <input type="text" name="streamline_result_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_2_label', true) ?: 'Sales Cycle Reduction'); ?>" />
            </div>
        </div>
        <div class="streamline-stats-row">
            <div class="streamline-meta-field">
                <label>Result 3 Number</label>
                <input type="text" name="streamline_result_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_3_number', true) ?: '280%'); ?>" />
            </div>
            <div class="streamline-meta-field">
                <label>Result 3 Label</label>
                <input type="text" name="streamline_result_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_3_label', true) ?: 'Lead Quality Improvement'); ?>" />
            </div>
        </div>
        <div class="streamline-stats-row">
            <div class="streamline-meta-field">
                <label>Result 4 Number</label>
                <input type="text" name="streamline_result_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_4_number', true) ?: '�125K'); ?>" />
            </div>
            <div class="streamline-meta-field">
                <label>Result 4 Label</label>
                <input type="text" name="streamline_result_4_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_4_label', true) ?: 'Revenue Growth'); ?>" />
            </div>
        </div>

        <h4>Case Study Challenge & Solution</h4>
        <div class="streamline-meta-field">
            <label>Case Study Challenge</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_case_challenge', true) ?: 'TechFlow Solutions was struggling with a 12% conversion rate and losing 68% of qualified leads due to poor follow-up processes and a fragmented sales funnel with multiple drop-off points.',
                'streamline_case_challenge',
                array(
                    'textarea_name' => 'streamline_case_challenge',
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Case Study Solution (one point per line)</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_case_solution', true) ?: 'Redesigned complete 7-stage funnel with optimised touchpoints
Implemented automated lead scoring and qualification system
Created personalised nurturing sequences based on prospect behaviour
Built conversion-optimised landing pages for each funnel stage
Set up comprehensive analytics and performance tracking
Integrated CRM with marketing automation for seamless handoffs',
                'streamline_case_solution',
                array(
                    'textarea_name' => 'streamline_case_solution',
                    'textarea_rows' => 8,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>Process Steps</h3>
        <div class="streamline-meta-field">
            <label>Process Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_process_title', true) ?: 'Our Proven <strong>Funnel Optimisation Process</strong>',
                'streamline_process_title',
                array(
                    'textarea_name' => 'streamline_process_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <h4>Process Steps</h4>
        <div class="streamline-meta-field">
            <label>Step 1 Number</label>
            <input type="text" name="streamline_step_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_1_number', true) ?: '01'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 1 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_step_1_title', true) ?: 'Audit & Analysis',
                'streamline_step_1_title',
                array(
                    'textarea_name' => 'streamline_step_1_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Step 1 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_step_1_desc', true) ?: 'Comprehensive review of your current funnel performance and identification of optimisation opportunities.',
                'streamline_step_1_desc',
                array(
                    'textarea_name' => 'streamline_step_1_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Step 2 Number</label>
            <input type="text" name="streamline_step_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_2_number', true) ?: '02'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 2 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_step_2_title', true) ?: 'Strategy Development',
                'streamline_step_2_title',
                array(
                    'textarea_name' => 'streamline_step_2_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Step 2 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_step_2_desc', true) ?: 'Custom funnel strategy tailored to your business goals and customer journey requirements.',
                'streamline_step_2_desc',
                array(
                    'textarea_name' => 'streamline_step_2_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Step 3 Number</label>
            <input type="text" name="streamline_step_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_3_number', true) ?: '03'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 3 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_step_3_title', true) ?: 'Implementation',
                'streamline_step_3_title',
                array(
                    'textarea_name' => 'streamline_step_3_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Step 3 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_step_3_desc', true) ?: 'Systematic implementation of optimisations and automation across all funnel touchpoints.',
                'streamline_step_3_desc',
                array(
                    'textarea_name' => 'streamline_step_3_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Step 4 Number</label>
            <input type="text" name="streamline_step_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_4_number', true) ?: '04'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 4 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_step_4_title', true) ?: 'Monitor & Optimise',
                'streamline_step_4_title',
                array(
                    'textarea_name' => 'streamline_step_4_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Step 4 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_step_4_desc', true) ?: 'Continuous monitoring and data-driven optimisation to maximise funnel performance.',
                'streamline_step_4_desc',
                array(
                    'textarea_name' => 'streamline_step_4_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>Breadcrumbs & Navigation</h3>
        <div class="streamline-meta-field">
            <label>Breadcrumb Path (e.g., Home � Services � Marketing Automation � Streamline Sales Funnel)</label>
            <input type="text" name="streamline_breadcrumb_path" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_breadcrumb_path', true) ?: 'Home � Services � Marketing Automation � Streamline Sales Funnel'); ?>" />
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>Problems / Challenges</h3>
        <div class="streamline-meta-field">
            <label>Common Problems Title</label>
            <input type="text" name="streamline_problems_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problems_title', true) ?: 'Common Problems We Solve'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 1</label>
            <input type="text" name="streamline_problem_1" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_1', true) ?: 'Low Conversion Rates'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 2</label>
            <input type="text" name="streamline_problem_2" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_2', true) ?: 'Inefficient Processes'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 3</label>
            <input type="text" name="streamline_problem_3" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_3', true) ?: 'Lack of Automation'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 4</label>
            <input type="text" name="streamline_problem_4" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_4', true) ?: 'Poor Lead Quality'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 5</label>
            <input type="text" name="streamline_problem_5" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_5', true) ?: 'Unclear Customer Journey'); ?>" />
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>Why Choose Us Section</h3>
        <div class="streamline-meta-field">
            <label>Why Choose Title</label>
            <input type="text" name="streamline_why_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_why_title', true) ?: 'Why Choose AiMPro for Funnel Streamlining?'); ?>" />
        </div>
        
        <h4>Benefits</h4>
        <div class="streamline-meta-field">
            <label>Benefit 1 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_benefit_1_title', true) ?: 'Data-Driven Approach',
                'streamline_benefit_1_title',
                array(
                    'textarea_name' => 'streamline_benefit_1_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Benefit 1 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_benefit_1_desc', true) ?: 'Every optimisation is backed by comprehensive analytics and A/B testing to ensure maximum ROI.',
                'streamline_benefit_1_desc',
                array(
                    'textarea_name' => 'streamline_benefit_1_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Benefit 2 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_benefit_2_title', true) ?: 'Industry Expertise',
                'streamline_benefit_2_title',
                array(
                    'textarea_name' => 'streamline_benefit_2_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Benefit 2 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_benefit_2_desc', true) ?: '5+ years optimising funnels across diverse industries with proven conversion improvements.',
                'streamline_benefit_2_desc',
                array(
                    'textarea_name' => 'streamline_benefit_2_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>Benefit 3 Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_benefit_3_title', true) ?: 'Ongoing Support',
                'streamline_benefit_3_title',
                array(
                    'textarea_name' => 'streamline_benefit_3_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Benefit 3 Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_benefit_3_desc', true) ?: 'Continuous monitoring and optimisation to maintain peak funnel performance as your business grows.',
                'streamline_benefit_3_desc',
                array(
                    'textarea_name' => 'streamline_benefit_3_desc',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>FAQ Section</h3>
        <div class="streamline-meta-field">
            <label>FAQ Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_faq_title', true) ?: 'Frequently Asked Questions',
                'streamline_faq_title',
                array(
                    'textarea_name' => 'streamline_faq_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <h4>FAQ Items</h4>
        <div class="streamline-meta-field">
            <label>FAQ 1 Question</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_faq_1_question', true) ?: 'How long does it take to see results from funnel optimisation?',
                'streamline_faq_1_question',
                array(
                    'textarea_name' => 'streamline_faq_1_question',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>FAQ 1 Answer</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_faq_1_answer', true) ?: 'Most clients see initial improvements within 2-4 weeks, with significant results typically visible within 6-8 weeks as we test, refine, and optimise the funnel based on real user data.',
                'streamline_faq_1_answer',
                array(
                    'textarea_name' => 'streamline_faq_1_answer',
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>FAQ 2 Question</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_faq_2_question', true) ?: 'What tools do you use for funnel optimisation?',
                'streamline_faq_2_question',
                array(
                    'textarea_name' => 'streamline_faq_2_question',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>FAQ 2 Answer</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_faq_2_answer', true) ?: 'We use industry-leading tools including HubSpot, Klaviyo, Google Analytics, Hotjar, and custom tracking solutions to analyse user behaviour and optimise every touchpoint.',
                'streamline_faq_2_answer',
                array(
                    'textarea_name' => 'streamline_faq_2_answer',
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>

        <div class="streamline-meta-field">
            <label>FAQ 3 Question</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_faq_3_question', true) ?: 'Do you work with existing funnels or build from scratch?',
                'streamline_faq_3_question',
                array(
                    'textarea_name' => 'streamline_faq_3_question',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>FAQ 3 Answer</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_faq_3_answer', true) ?: 'We can optimise your existing funnel or build a completely new one from scratch, depending on your current setup and business needs. We always start with a comprehensive audit.',
                'streamline_faq_3_answer',
                array(
                    'textarea_name' => 'streamline_faq_3_answer',
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>CTA Section</h3>
        <div class="streamline-meta-field">
            <label>CTA Title</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_cta_title', true) ?: 'Ready to <strong>Streamline Your Sales Funnel?</strong>',
                'streamline_cta_title',
                array(
                    'textarea_name' => 'streamline_cta_title',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>CTA Description</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_cta_description', true) ?: 'Let\'s analyse your current funnel and create a strategy that converts more prospects into customers.',
                'streamline_cta_description',
                array(
                    'textarea_name' => 'streamline_cta_description',
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Primary Button Text</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_cta_button_primary', true) ?: 'Start Your Funnel Audit',
                'streamline_cta_button_primary',
                array(
                    'textarea_name' => 'streamline_cta_button_primary',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
        <div class="streamline-meta-field">
            <label>Secondary Button Text</label>
            <?php
            wp_editor(
                get_post_meta($post->ID, 'streamline_cta_button_secondary', true) ?: 'Book Free Consultation',
                'streamline_cta_button_secondary',
                array(
                    'textarea_name' => 'streamline_cta_button_secondary',
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'media_buttons' => false,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )
            );
            ?>
        </div>
    </div>
    
    <!-- Media Uploader JavaScript -->
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        // Handle Overview Image Upload
        var overviewMediaUploader;
        
        $('#streamline_overview_image_button').click(function(e) {
            e.preventDefault();
            
            // If the uploader object has already been created, reopen the dialog
            if (overviewMediaUploader) {
                overviewMediaUploader.open();
                return;
            }
            
            // Create the media uploader
            overviewMediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Overview Image',
                button: {
                    text: 'Select Image'
                },
                multiple: false
            });
            
            // When a file is selected, grab the URL and set it as the field value
            overviewMediaUploader.on('select', function() {
                var attachment = overviewMediaUploader.state().get('selection').first().toJSON();
                $('#streamline_overview_image').val(attachment.url);
                $('#streamline_overview_image_preview').html('<img src="' + attachment.url + '" style="max-width: 150px; height: auto;" />');
            });
            
            // Open the uploader dialog
            overviewMediaUploader.open();
        });
        
        // Handle Remove Image button
        $('#streamline_overview_image_remove').click(function(e) {
            e.preventDefault();
            $('#streamline_overview_image').val('');
            $('#streamline_overview_image_preview').html('');
        });
    });
    </script>
    <?php
}

// Save the meta fields
add_action('save_post', function($post_id) {
    // Check if our nonce is set
    if (!isset($_POST['streamline_sales_funnel_meta_nonce'])) {
        return;
    }

    // Verify that the nonce is valid
    if (!wp_verify_nonce($_POST['streamline_sales_funnel_meta_nonce'], 'streamline_sales_funnel_meta')) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions
    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    // Save all hero fields
    if (isset($_POST['streamline_hero_title'])) {
        update_post_meta($post_id, 'streamline_hero_title', wp_kses_post($_POST['streamline_hero_title']));
    }
    if (isset($_POST['streamline_hero_subtitle'])) {
        update_post_meta($post_id, 'streamline_hero_subtitle', wp_kses_post($_POST['streamline_hero_subtitle']));
    }
    if (isset($_POST['streamline_hero_primary_btn'])) {
        update_post_meta($post_id, 'streamline_hero_primary_btn', sanitize_text_field($_POST['streamline_hero_primary_btn']));
    }
    if (isset($_POST['streamline_hero_secondary_btn'])) {
        update_post_meta($post_id, 'streamline_hero_secondary_btn', sanitize_text_field($_POST['streamline_hero_secondary_btn']));
    }
    if (isset($_POST['streamline_breadcrumb_path'])) {
        update_post_meta($post_id, 'streamline_breadcrumb_path', sanitize_text_field($_POST['streamline_breadcrumb_path']));
    }
    
    // Save hero stats
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["streamline_hero_stat_{$i}_number"])) {
            update_post_meta($post_id, "streamline_hero_stat_{$i}_number", sanitize_text_field($_POST["streamline_hero_stat_{$i}_number"]));
        }
        if (isset($_POST["streamline_hero_stat_{$i}_label"])) {
            update_post_meta($post_id, "streamline_hero_stat_{$i}_label", sanitize_text_field($_POST["streamline_hero_stat_{$i}_label"]));
        }
    }

    // Save overview fields
    if (isset($_POST['streamline_overview_title'])) {
        update_post_meta($post_id, 'streamline_overview_title', wp_kses_post($_POST['streamline_overview_title']));
    }
    if (isset($_POST['streamline_overview_description'])) {
        update_post_meta($post_id, 'streamline_overview_description', wp_kses_post($_POST['streamline_overview_description']));
    }
    if (isset($_POST['streamline_overview_image'])) {
        update_post_meta($post_id, 'streamline_overview_image', sanitize_text_field($_POST['streamline_overview_image']));
    }

    // Save service fields
    for ($i = 1; $i <= 6; $i++) {
        if (isset($_POST["streamline_service_{$i}_title"])) {
            update_post_meta($post_id, "streamline_service_{$i}_title", wp_kses_post($_POST["streamline_service_{$i}_title"]));
        }
        if (isset($_POST["streamline_service_{$i}_desc"])) {
            update_post_meta($post_id, "streamline_service_{$i}_desc", wp_kses_post($_POST["streamline_service_{$i}_desc"]));
        }
    }

    // Save case study fields
    if (isset($_POST['streamline_case_title'])) {
        update_post_meta($post_id, 'streamline_case_title', wp_kses_post($_POST['streamline_case_title']));
    }
    if (isset($_POST['streamline_case_intro'])) {
        update_post_meta($post_id, 'streamline_case_intro', wp_kses_post($_POST['streamline_case_intro']));
    }
    if (isset($_POST['streamline_case_challenge'])) {
        update_post_meta($post_id, 'streamline_case_challenge', wp_kses_post($_POST['streamline_case_challenge']));
    }
    if (isset($_POST['streamline_case_solution'])) {
        update_post_meta($post_id, 'streamline_case_solution', wp_kses_post($_POST['streamline_case_solution']));
    }

    // Save case study results
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["streamline_result_{$i}_number"])) {
            update_post_meta($post_id, "streamline_result_{$i}_number", sanitize_text_field($_POST["streamline_result_{$i}_number"]));
        }
        if (isset($_POST["streamline_result_{$i}_label"])) {
            update_post_meta($post_id, "streamline_result_{$i}_label", sanitize_text_field($_POST["streamline_result_{$i}_label"]));
        }
    }

    // Save process fields
    if (isset($_POST['streamline_process_title'])) {
        update_post_meta($post_id, 'streamline_process_title', wp_kses_post($_POST['streamline_process_title']));
    }

    // Save process steps
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["streamline_step_{$i}_number"])) {
            update_post_meta($post_id, "streamline_step_{$i}_number", sanitize_text_field($_POST["streamline_step_{$i}_number"]));
        }
        if (isset($_POST["streamline_step_{$i}_title"])) {
            update_post_meta($post_id, "streamline_step_{$i}_title", wp_kses_post($_POST["streamline_step_{$i}_title"]));
        }
        if (isset($_POST["streamline_step_{$i}_desc"])) {
            update_post_meta($post_id, "streamline_step_{$i}_desc", wp_kses_post($_POST["streamline_step_{$i}_desc"]));
        }
    }

    // Save problems/challenges
    if (isset($_POST['streamline_problems_title'])) {
        update_post_meta($post_id, 'streamline_problems_title', wp_kses_post($_POST['streamline_problems_title']));
    }
    for ($i = 1; $i <= 6; $i++) {
        if (isset($_POST["streamline_problem_{$i}"])) {
            update_post_meta($post_id, "streamline_problem_{$i}", wp_kses_post($_POST["streamline_problem_{$i}"]));
        }
    }

    // Save benefits
    if (isset($_POST['streamline_why_title'])) {
        update_post_meta($post_id, 'streamline_why_title', sanitize_text_field($_POST['streamline_why_title']));
    }
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["streamline_benefit_{$i}_title"])) {
            update_post_meta($post_id, "streamline_benefit_{$i}_title", wp_kses_post($_POST["streamline_benefit_{$i}_title"]));
        }
        if (isset($_POST["streamline_benefit_{$i}_desc"])) {
            update_post_meta($post_id, "streamline_benefit_{$i}_desc", wp_kses_post($_POST["streamline_benefit_{$i}_desc"]));
        }
    }

    // Save FAQ
    if (isset($_POST['streamline_faq_title'])) {
        update_post_meta($post_id, 'streamline_faq_title', wp_kses_post($_POST['streamline_faq_title']));
    }
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["streamline_faq_{$i}_question"])) {
            update_post_meta($post_id, "streamline_faq_{$i}_question", wp_kses_post($_POST["streamline_faq_{$i}_question"]));
        }
        if (isset($_POST["streamline_faq_{$i}_answer"])) {
            update_post_meta($post_id, "streamline_faq_{$i}_answer", wp_kses_post($_POST["streamline_faq_{$i}_answer"]));
        }
    }

    // Save CTA Section
    if (isset($_POST['streamline_cta_title'])) {
        update_post_meta($post_id, 'streamline_cta_title', wp_kses_post($_POST['streamline_cta_title']));
    }
    if (isset($_POST['streamline_cta_description'])) {
        update_post_meta($post_id, 'streamline_cta_description', wp_kses_post($_POST['streamline_cta_description']));
    }
    if (isset($_POST['streamline_cta_button_primary'])) {
        update_post_meta($post_id, 'streamline_cta_button_primary', wp_kses_post($_POST['streamline_cta_button_primary']));
    }
    if (isset($_POST['streamline_cta_button_secondary'])) {
        update_post_meta($post_id, 'streamline_cta_button_secondary', wp_kses_post($_POST['streamline_cta_button_secondary']));
    }
    
    // Save Overview Image
    if (isset($_POST['streamline_overview_image'])) {
        update_post_meta($post_id, 'streamline_overview_image', esc_url_raw($_POST['streamline_overview_image']));
    }
});

// Enqueue media uploader
add_action('admin_enqueue_scripts', function($hook) {
    global $post;
    if (($hook == 'post.php' || $hook == 'post-new.php') && isset($post)) {
        $template = get_page_template_slug($post->ID);
        $slug = get_post_field('post_name', $post->ID);
        if ($template === 'page-streamline-sales-funnel.php' || $slug === 'streamline-sales-funnel') {
            wp_enqueue_media();
            
            // Add the media uploader script
            ?>
            <script>
            jQuery(document).ready(function($) {
                // Media uploader for overview image
                var mediaUploader;
                
                $('#streamline_overview_image_button').click(function(e) {
                    e.preventDefault();
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media.frames.file_frame = wp.media({
                        title: 'Choose Overview Image',
                        button: {
                            text: 'Select Image'
                        },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        var attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#streamline_overview_image').val(attachment.url);
                        $('#streamline_overview_image_preview').html('<img src="' + attachment.url + '" style="max-width: 150px; height: auto;" />');
                    });
                    mediaUploader.open();
                });
                
                $('#streamline_overview_image_remove').click(function(e) {
                    e.preventDefault();
                    $('#streamline_overview_image').val('');
                    $('#streamline_overview_image_preview').html('');
                });
            });
            </script>
            <?php
        }
    }
});

