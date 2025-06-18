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
            <input type="text" name="streamline_hero_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_title', true) ?: 'Streamline Your Sales Funnel'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Hero Subtitle</label>
            <textarea name="streamline_hero_subtitle"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_hero_subtitle', true) ?: 'Transform scattered marketing efforts into a cohesive, high-converting sales system that works around the clock.'); ?></textarea>
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
            <input type="text" name="streamline_hero_primary_btn" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_hero_primary_btn', true) ?: 'Optimize My Funnel'); ?>" />
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
            <input type="text" name="streamline_overview_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_overview_title', true) ?: 'Complete Sales Funnel Streamlining Solutions'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Overview Description</label>
            <textarea name="streamline_overview_description"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_overview_description', true) ?: 'Eliminate inefficiencies and gaps in your current sales process with our systematic approach to funnel optimization and automation.'); ?></textarea>
        </div>

        <h4>Service Items</h4>
        <div class="streamline-meta-field">
            <label>Service 1 Title</label>
            <input type="text" name="streamline_service_1_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_service_1_title', true) ?: 'Funnel Analysis & Audit'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Service 1 Description</label>
            <textarea name="streamline_service_1_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_service_1_desc', true) ?: 'Comprehensive review of your existing sales process to identify bottlenecks, gaps, and optimization opportunities.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Service 2 Title</label>
            <input type="text" name="streamline_service_2_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_service_2_title', true) ?: 'Process Mapping & Design'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Service 2 Description</label>
            <textarea name="streamline_service_2_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_service_2_desc', true) ?: 'Visual mapping of your optimized sales journey with clear touchpoints and decision paths for maximum efficiency.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Service 3 Title</label>
            <input type="text" name="streamline_service_3_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_service_3_title', true) ?: 'Lead Qualification System'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Service 3 Description</label>
            <textarea name="streamline_service_3_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_service_3_desc', true) ?: 'Automated lead scoring and qualification processes that ensure your team focuses on the highest-value prospects.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Service 4 Title</label>
            <input type="text" name="streamline_service_4_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_service_4_title', true) ?: 'Nurture Sequence Optimization'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Service 4 Description</label>
            <textarea name="streamline_service_4_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_service_4_desc', true) ?: 'Refined email and communication sequences that move prospects smoothly through each stage of your funnel.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Service 5 Title</label>
            <input type="text" name="streamline_service_5_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_service_5_title', true) ?: 'Conversion Point Enhancement'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Service 5 Description</label>
            <textarea name="streamline_service_5_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_service_5_desc', true) ?: 'Strategic optimization of key conversion moments to reduce friction and increase completion rates.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Service 6 Title</label>
            <input type="text" name="streamline_service_6_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_service_6_title', true) ?: 'Performance Monitoring'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Service 6 Description</label>
            <textarea name="streamline_service_6_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_service_6_desc', true) ?: 'Ongoing analytics and reporting to track funnel performance and identify continuous improvement opportunities.'); ?></textarea>
        </div>

        <h4>Problems We Solve</h4>
        <div class="streamline-meta-field">
            <label>Problems Title</label>
            <input type="text" name="streamline_problems_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problems_title', true) ?: 'Sales Funnel Problems We Solve:'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 1</label>
            <input type="text" name="streamline_problem_1" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_1', true) ?: 'High drop-off rates between funnel stages'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 2</label>
            <input type="text" name="streamline_problem_2" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_2', true) ?: 'Poor lead qualification and scoring systems'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 3</label>
            <input type="text" name="streamline_problem_3" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_3', true) ?: 'Inconsistent follow-up and nurturing sequences'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 4</label>
            <input type="text" name="streamline_problem_4" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_4', true) ?: 'Lack of funnel visibility and performance tracking'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 5</label>
            <input type="text" name="streamline_problem_5" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_5', true) ?: 'Misaligned marketing and sales efforts'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Problem 6</label>
            <input type="text" name="streamline_problem_6" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_problem_6', true) ?: 'Manual processes slowing down conversions'); ?>" />
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>Case Study</h3>
        <div class="streamline-meta-field">
            <label>Case Study Title</label>
            <input type="text" name="streamline_case_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_case_title', true) ?: 'Case Study: TechFlow Solutions Results'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Case Study Intro</label>
            <textarea name="streamline_case_intro"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_case_intro', true) ?: 'A B2B software company struggling with low conversion rates and long sales cycles. We completely redesigned their funnel strategy and implemented automated nurturing sequences.'); ?></textarea>
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
                <input type="text" name="streamline_result_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_4_number', true) ?: '£125K'); ?>" />
            </div>
            <div class="streamline-meta-field">
                <label>Result 4 Label</label>
                <input type="text" name="streamline_result_4_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_result_4_label', true) ?: 'Revenue Growth'); ?>" />
            </div>
        </div>

        <h4>Case Study Challenge & Solution</h4>
        <div class="streamline-meta-field">
            <label>Case Study Challenge</label>
            <textarea name="streamline_case_challenge"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_case_challenge', true) ?: 'TechFlow Solutions was struggling with a 12% conversion rate and losing 68% of qualified leads due to poor follow-up processes and a fragmented sales funnel with multiple drop-off points.'); ?></textarea>
        </div>
        <div class="streamline-meta-field">
            <label>Case Study Solution (one point per line)</label>
            <textarea name="streamline_case_solution" rows="8"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_case_solution', true) ?: 'Redesigned complete 7-stage funnel with optimized touchpoints
Implemented automated lead scoring and qualification system
Created personalized nurturing sequences based on prospect behavior
Built conversion-optimized landing pages for each funnel stage
Set up comprehensive analytics and performance tracking
Integrated CRM with marketing automation for seamless handoffs'); ?></textarea>
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>Process Steps</h3>
        <div class="streamline-meta-field">
            <label>Process Title</label>
            <input type="text" name="streamline_process_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_process_title', true) ?: 'Our Proven Funnel Optimization Process'); ?>" />
        </div>

        <h4>Process Steps</h4>
        <div class="streamline-meta-field">
            <label>Step 1 Number</label>
            <input type="text" name="streamline_step_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_1_number', true) ?: '01'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 1 Title</label>
            <input type="text" name="streamline_step_1_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_1_title', true) ?: 'Audit & Analysis'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 1 Description</label>
            <textarea name="streamline_step_1_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_step_1_desc', true) ?: 'Comprehensive review of your current funnel performance and identification of optimization opportunities.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Step 2 Number</label>
            <input type="text" name="streamline_step_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_2_number', true) ?: '02'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 2 Title</label>
            <input type="text" name="streamline_step_2_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_2_title', true) ?: 'Strategy Development'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 2 Description</label>
            <textarea name="streamline_step_2_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_step_2_desc', true) ?: 'Custom funnel strategy tailored to your business goals and customer journey requirements.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Step 3 Number</label>
            <input type="text" name="streamline_step_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_3_number', true) ?: '03'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 3 Title</label>
            <input type="text" name="streamline_step_3_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_3_title', true) ?: 'Implementation'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 3 Description</label>
            <textarea name="streamline_step_3_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_step_3_desc', true) ?: 'Systematic implementation of optimizations and automation across all funnel touchpoints.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Step 4 Number</label>
            <input type="text" name="streamline_step_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_4_number', true) ?: '04'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 4 Title</label>
            <input type="text" name="streamline_step_4_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_step_4_title', true) ?: 'Monitor & Optimize'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Step 4 Description</label>
            <textarea name="streamline_step_4_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_step_4_desc', true) ?: 'Continuous monitoring and data-driven optimization to maximize funnel performance.'); ?></textarea>
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>Breadcrumbs & Navigation</h3>
        <div class="streamline-meta-field">
            <label>Breadcrumb Path (e.g., Home › Services › Marketing Automation › Streamline Sales Funnel)</label>
            <input type="text" name="streamline_breadcrumb_path" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_breadcrumb_path', true) ?: 'Home › Services › Marketing Automation › Streamline Sales Funnel'); ?>" />
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
            <input type="text" name="streamline_benefit_1_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_benefit_1_title', true) ?: 'Data-Driven Approach'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Benefit 1 Description</label>
            <textarea name="streamline_benefit_1_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_benefit_1_desc', true) ?: 'Every optimization is backed by comprehensive analytics and A/B testing to ensure maximum ROI.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Benefit 2 Title</label>
            <input type="text" name="streamline_benefit_2_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_benefit_2_title', true) ?: 'Industry Expertise'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Benefit 2 Description</label>
            <textarea name="streamline_benefit_2_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_benefit_2_desc', true) ?: '5+ years optimizing funnels across diverse industries with proven conversion improvements.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>Benefit 3 Title</label>
            <input type="text" name="streamline_benefit_3_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_benefit_3_title', true) ?: 'Ongoing Support'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>Benefit 3 Description</label>
            <textarea name="streamline_benefit_3_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_benefit_3_desc', true) ?: 'Continuous monitoring and optimization to maintain peak funnel performance as your business grows.'); ?></textarea>
        </div>
    </div>

    <div class="streamline-meta-section">
        <h3>FAQ Section</h3>
        <div class="streamline-meta-field">
            <label>FAQ Title</label>
            <input type="text" name="streamline_faq_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_faq_title', true) ?: 'Frequently Asked Questions'); ?>" />
        </div>

        <h4>FAQ Items</h4>
        <div class="streamline-meta-field">
            <label>FAQ 1 Question</label>
            <input type="text" name="streamline_faq_1_question" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_faq_1_question', true) ?: 'How long does it take to see results from funnel optimization?'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>FAQ 1 Answer</label>
            <textarea name="streamline_faq_1_answer"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_faq_1_answer', true) ?: 'Most clients see initial improvements within 2-4 weeks, with significant results typically visible within 6-8 weeks as we test, refine, and optimize the funnel based on real user data.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>FAQ 2 Question</label>
            <input type="text" name="streamline_faq_2_question" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_faq_2_question', true) ?: 'What tools do you use for funnel optimization?'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>FAQ 2 Answer</label>
            <textarea name="streamline_faq_2_answer"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_faq_2_answer', true) ?: 'We use industry-leading tools including HubSpot, Klaviyo, Google Analytics, Hotjar, and custom tracking solutions to analyze user behavior and optimize every touchpoint.'); ?></textarea>
        </div>

        <div class="streamline-meta-field">
            <label>FAQ 3 Question</label>
            <input type="text" name="streamline_faq_3_question" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_faq_3_question', true) ?: 'Do you work with existing funnels or build from scratch?'); ?>" />
        </div>
        <div class="streamline-meta-field">
            <label>FAQ 3 Answer</label>
            <textarea name="streamline_faq_3_answer"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_faq_3_answer', true) ?: 'We can optimize your existing funnel or build a completely new one from scratch, depending on your current setup and business needs. We always start with a comprehensive audit.'); ?></textarea>
        </div>
    </div>
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
        update_post_meta($post_id, 'streamline_hero_title', sanitize_text_field($_POST['streamline_hero_title']));
    }
    if (isset($_POST['streamline_hero_subtitle'])) {
        update_post_meta($post_id, 'streamline_hero_subtitle', sanitize_textarea_field($_POST['streamline_hero_subtitle']));
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
        update_post_meta($post_id, 'streamline_overview_title', sanitize_text_field($_POST['streamline_overview_title']));
    }
    if (isset($_POST['streamline_overview_description'])) {
        update_post_meta($post_id, 'streamline_overview_description', sanitize_textarea_field($_POST['streamline_overview_description']));
    }

    // Save service fields
    for ($i = 1; $i <= 6; $i++) {
        if (isset($_POST["streamline_service_{$i}_title"])) {
            update_post_meta($post_id, "streamline_service_{$i}_title", sanitize_text_field($_POST["streamline_service_{$i}_title"]));
        }
        if (isset($_POST["streamline_service_{$i}_desc"])) {
            update_post_meta($post_id, "streamline_service_{$i}_desc", sanitize_textarea_field($_POST["streamline_service_{$i}_desc"]));
        }
    }

    // Save case study fields
    if (isset($_POST['streamline_case_title'])) {
        update_post_meta($post_id, 'streamline_case_title', sanitize_text_field($_POST['streamline_case_title']));
    }
    if (isset($_POST['streamline_case_intro'])) {
        update_post_meta($post_id, 'streamline_case_intro', sanitize_textarea_field($_POST['streamline_case_intro']));
    }
    if (isset($_POST['streamline_case_challenge'])) {
        update_post_meta($post_id, 'streamline_case_challenge', sanitize_textarea_field($_POST['streamline_case_challenge']));
    }
    if (isset($_POST['streamline_case_solution'])) {
        update_post_meta($post_id, 'streamline_case_solution', sanitize_textarea_field($_POST['streamline_case_solution']));
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
        update_post_meta($post_id, 'streamline_process_title', sanitize_text_field($_POST['streamline_process_title']));
    }

    // Save process steps
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["streamline_step_{$i}_number"])) {
            update_post_meta($post_id, "streamline_step_{$i}_number", sanitize_text_field($_POST["streamline_step_{$i}_number"]));
        }
        if (isset($_POST["streamline_step_{$i}_title"])) {
            update_post_meta($post_id, "streamline_step_{$i}_title", sanitize_text_field($_POST["streamline_step_{$i}_title"]));
        }
        if (isset($_POST["streamline_step_{$i}_desc"])) {
            update_post_meta($post_id, "streamline_step_{$i}_desc", sanitize_textarea_field($_POST["streamline_step_{$i}_desc"]));
        }
    }

    // Save problems/challenges
    if (isset($_POST['streamline_problems_title'])) {
        update_post_meta($post_id, 'streamline_problems_title', sanitize_text_field($_POST['streamline_problems_title']));
    }
    for ($i = 1; $i <= 6; $i++) {
        if (isset($_POST["streamline_problem_{$i}"])) {
            update_post_meta($post_id, "streamline_problem_{$i}", sanitize_text_field($_POST["streamline_problem_{$i}"]));
        }
    }

    // Save benefits
    if (isset($_POST['streamline_why_title'])) {
        update_post_meta($post_id, 'streamline_why_title', sanitize_text_field($_POST['streamline_why_title']));
    }
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["streamline_benefit_{$i}_title"])) {
            update_post_meta($post_id, "streamline_benefit_{$i}_title", sanitize_text_field($_POST["streamline_benefit_{$i}_title"]));
        }
        if (isset($_POST["streamline_benefit_{$i}_desc"])) {
            update_post_meta($post_id, "streamline_benefit_{$i}_desc", sanitize_textarea_field($_POST["streamline_benefit_{$i}_desc"]));
        }
    }

    // Save FAQ
    if (isset($_POST['streamline_faq_title'])) {
        update_post_meta($post_id, 'streamline_faq_title', sanitize_text_field($_POST['streamline_faq_title']));
    }
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["streamline_faq_{$i}_question"])) {
            update_post_meta($post_id, "streamline_faq_{$i}_question", sanitize_text_field($_POST["streamline_faq_{$i}_question"]));
        }
        if (isset($_POST["streamline_faq_{$i}_answer"])) {
            update_post_meta($post_id, "streamline_faq_{$i}_answer", sanitize_textarea_field($_POST["streamline_faq_{$i}_answer"]));
        }
    }
});
