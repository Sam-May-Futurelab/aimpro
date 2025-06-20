<?php
/**
 * AI CRM Setup Page Meta Fields
 * Adds custom meta box for AI CRM Setup Page template with editable content fields
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add meta box for AI CRM Setup Page Settings
 */
add_action('add_meta_boxes', 'aimpro_add_ai_crm_meta_box');
function aimpro_add_ai_crm_meta_box() {
    // Only add to pages using the AI CRM Setup template or with 'ai-crm-setup' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-ai-crm-setup.php' || $page_slug === 'ai-crm-setup') {
        add_meta_box(
            'aimpro_ai_crm_settings',
            'AI CRM Setup Page Settings',
            'aimpro_ai_crm_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

/**
 * AI CRM Setup Page Meta Box Callback
 */
function aimpro_ai_crm_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('aimpro_ai_crm_meta_nonce', 'aimpro_ai_crm_meta_nonce');
    
    // Check if this is the AI CRM Setup page template
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-ai-crm-setup.php' && $page_slug !== 'ai-crm-setup') {
        echo '<p><strong>Note:</strong> These settings will only appear when this page uses the "AI CRM Setup" template or has the slug "ai-crm-setup".</p>';
        echo '<p>Current template: ' . ($page_template ?: 'Default') . '</p>';
        echo '<p>Current slug: ' . ($page_slug ?: 'Not set yet') . '</p>';
        return;
    }

    // Hero Section Fields
    $ai_hero_title = get_post_meta($post->ID, 'ai_hero_title', true) ?: 'AI-Powered CRM Setup & Implementation';
    $ai_hero_subtitle = get_post_meta($post->ID, 'ai_hero_subtitle', true) ?: 'Transform your customer relationship management with AI-driven CRM systems that automate lead scoring, predict customer behaviour, and optimise your entire sales funnel for maximum conversion.';
    $ai_hero_stat_1_number = get_post_meta($post->ID, 'ai_hero_stat_1_number', true) ?: '340%';
    $ai_hero_stat_1_label = get_post_meta($post->ID, 'ai_hero_stat_1_label', true) ?: 'Lead Conversion Increase';
    $ai_hero_stat_2_number = get_post_meta($post->ID, 'ai_hero_stat_2_number', true) ?: '85%';
    $ai_hero_stat_2_label = get_post_meta($post->ID, 'ai_hero_stat_2_label', true) ?: 'Faster Lead Response';
    $ai_hero_stat_3_number = get_post_meta($post->ID, 'ai_hero_stat_3_number', true) ?: '60%';
    $ai_hero_stat_3_label = get_post_meta($post->ID, 'ai_hero_stat_3_label', true) ?: 'Sales Cycle Reduction';
    $ai_hero_primary_btn = get_post_meta($post->ID, 'ai_hero_primary_btn', true) ?: 'Start CRM Setup';
    $ai_hero_secondary_btn = get_post_meta($post->ID, 'ai_hero_secondary_btn', true) ?: 'View Packages';

    // Overview Section Fields
    $ai_overview_title = get_post_meta($post->ID, 'ai_overview_title', true) ?: 'Intelligent CRM Implementation';
    $ai_overview_description = get_post_meta($post->ID, 'ai_overview_description', true) ?: 'Modern businesses need more than basic contact management. Our AI-powered CRM implementations leverage machine learning, predictive analytics, and intelligent automation to transform how you manage customer relationships and drive revenue growth.';

    // Services Section Fields
    $ai_service_1_title = get_post_meta($post->ID, 'ai_service_1_title', true) ?: 'AI Lead Scoring';
    $ai_service_1_desc = get_post_meta($post->ID, 'ai_service_1_desc', true) ?: 'Automatically score and prioritise leads based on behaviour, demographics, and engagement patterns using machine learning algorithms.';
    $ai_service_2_title = get_post_meta($post->ID, 'ai_service_2_title', true) ?: 'Predictive Analytics';
    $ai_service_2_desc = get_post_meta($post->ID, 'ai_service_2_desc', true) ?: 'Forecast customer lifetime value, churn probability, and optimal engagement timing with advanced AI models.';
    $ai_service_3_title = get_post_meta($post->ID, 'ai_service_3_title', true) ?: 'Workflow Automation';
    $ai_service_3_desc = get_post_meta($post->ID, 'ai_service_3_desc', true) ?: 'Create intelligent workflows that adapt based on customer behaviour and automatically trigger the right actions at the right time.';
    $ai_service_4_title = get_post_meta($post->ID, 'ai_service_4_title', true) ?: 'Sales Pipeline optimisation';
    $ai_service_4_desc = get_post_meta($post->ID, 'ai_service_4_desc', true) ?: 'AI-driven pipeline management that identifies bottlenecks and suggests optimal next actions for each prospect.';
    $ai_service_5_title = get_post_meta($post->ID, 'ai_service_5_title', true) ?: 'Intelligent Customer Insights';
    $ai_service_5_desc = get_post_meta($post->ID, 'ai_service_5_desc', true) ?: 'Deep customer profiling using AI to understand preferences, behaviour patterns, and optimal communication strategies.';
    $ai_service_6_title = get_post_meta($post->ID, 'ai_service_6_title', true) ?: 'Omnichannel Integration';
    $ai_service_6_desc = get_post_meta($post->ID, 'ai_service_6_desc', true) ?: 'Unified customer view across all touchpoints with AI-powered attribution and engagement tracking.';

    // Case Study Section Fields
    $ai_case_title = get_post_meta($post->ID, 'ai_case_title', true) ?: 'Case Study: SaaS Company Transformation';
    $ai_case_intro = get_post_meta($post->ID, 'ai_case_intro', true) ?: 'How we helped a growing SaaS company increase lead conversion by 340% and reduce sales cycle time by 60% through intelligent CRM implementation.';
    $ai_case_challenge = get_post_meta($post->ID, 'ai_case_challenge', true) ?: 'A rapidly growing SaaS company was struggling with manual lead management, inconsistent follow-up, and inability to identify high-value prospects. Their sales team was spending 70% of time on administrative tasks instead of selling, and lead response times averaged 4+ hours.';
    $ai_case_solution = get_post_meta($post->ID, 'ai_case_solution', true) ?: "Implemented HubSpot CRM with custom AI lead scoring model\nBuilt predictive analytics dashboard for customer lifetime value\nCreated intelligent workflow automation for lead nurturing\nIntegrated omnichannel communication tracking\nDeployed AI chatbot for initial lead qualification";

    // Results Section Fields
    $ai_result_1_number = get_post_meta($post->ID, 'ai_result_1_number', true) ?: '340%';
    $ai_result_1_label = get_post_meta($post->ID, 'ai_result_1_label', true) ?: 'Lead Conversion Increase';
    $ai_result_2_number = get_post_meta($post->ID, 'ai_result_2_number', true) ?: '85%';
    $ai_result_2_label = get_post_meta($post->ID, 'ai_result_2_label', true) ?: 'Faster Lead Response';
    $ai_result_3_number = get_post_meta($post->ID, 'ai_result_3_number', true) ?: '60%';
    $ai_result_3_label = get_post_meta($post->ID, 'ai_result_3_label', true) ?: 'Sales Cycle Reduction';
    $ai_result_4_number = get_post_meta($post->ID, 'ai_result_4_number', true) ?: '£2.1M';
    $ai_result_4_label = get_post_meta($post->ID, 'ai_result_4_label', true) ?: 'Additional Annual Revenue';

    // Process Section Fields
    $ai_process_title = get_post_meta($post->ID, 'ai_process_title', true) ?: 'Our AI CRM Implementation Process';
    $ai_step_1_title = get_post_meta($post->ID, 'ai_step_1_title', true) ?: 'Discovery & Analysis';
    $ai_step_1_desc = get_post_meta($post->ID, 'ai_step_1_desc', true) ?: 'Comprehensive audit of current CRM processes, data quality assessment, and identification of AI automation opportunities.';
    $ai_step_2_title = get_post_meta($post->ID, 'ai_step_2_title', true) ?: 'Platform Selection & Design';
    $ai_step_2_desc = get_post_meta($post->ID, 'ai_step_2_desc', true) ?: 'Choose optimal CRM platform and design AI-powered workflows tailored to your sales process and customer journey.';
    $ai_step_3_title = get_post_meta($post->ID, 'ai_step_3_title', true) ?: 'Data Migration & Cleansing';
    $ai_step_3_desc = get_post_meta($post->ID, 'ai_step_3_desc', true) ?: 'Migrate existing data with AI-powered cleansing and enrichment to ensure high-quality, actionable customer information.';
    $ai_step_4_title = get_post_meta($post->ID, 'ai_step_4_title', true) ?: 'AI Configuration & Training';
    $ai_step_4_desc = get_post_meta($post->ID, 'ai_step_4_desc', true) ?: 'Configure machine learning models, set up predictive analytics, and train AI systems on your specific business patterns.';
    $ai_step_5_title = get_post_meta($post->ID, 'ai_step_5_title', true) ?: 'Testing & optimisation';
    $ai_step_5_desc = get_post_meta($post->ID, 'ai_step_5_desc', true) ?: 'Comprehensive testing of AI workflows, user training, and continuous optimisation based on performance data.';

    // Testimonial Section Fields
    $ai_testimonial_quote = get_post_meta($post->ID, 'ai_testimonial_quote', true) ?: 'The AI CRM implementation by Aimpro completely transformed our sales process. We\'re now converting 340% more leads and our sales cycle is 60% shorter. The predictive analytics help us focus on the right prospects at the right time.';
    $ai_testimonial_author = get_post_meta($post->ID, 'ai_testimonial_author', true) ?: 'James Richardson';
    $ai_testimonial_position = get_post_meta($post->ID, 'ai_testimonial_position', true) ?: 'VP Sales, TechFlow Solutions';

    // CTA Section Fields
    $ai_cta_title = get_post_meta($post->ID, 'ai_cta_title', true) ?: 'Ready to Transform Your CRM with AI?';

    ?>
    <style>
        .meta-table { border-collapse: collapse; width: 100%; }
        .meta-table th, .meta-table td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; vertical-align: top; }
        .meta-table th { background-color: #f9f9f9; font-weight: bold; width: 200px; }
        .meta-table input[type="text"], .meta-table textarea, .meta-table input[type="url"] { width: 100%; padding: 8px; box-sizing: border-box; }
        .meta-table textarea { min-height: 80px; resize: vertical; }
        .meta-section { margin: 30px 0; padding: 20px; background: #f8f9fa; border-left: 4px solid #007cba; }
        .meta-section h3 { margin-top: 0; color: #23282d; }
        .meta-help { font-size: 12px; color: #666; margin-top: 5px; }
    </style>

    <div class="meta-section">
        <h3>Hero Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_hero_title">Hero Title</label></th>
                <td>
                    <input type="text" id="ai_hero_title" name="ai_hero_title" value="<?php echo esc_attr($ai_hero_title); ?>" />
                    <div class="meta-help">Main heading displayed in the hero section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_subtitle">Hero Subtitle</label></th>
                <td>
                    <textarea id="ai_hero_subtitle" name="ai_hero_subtitle"><?php echo esc_textarea($ai_hero_subtitle); ?></textarea>
                    <div class="meta-help">Subtitle text displayed below the main heading</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_stat_1_number">Stat 1 Number</label></th>
                <td>
                    <input type="text" id="ai_hero_stat_1_number" name="ai_hero_stat_1_number" value="<?php echo esc_attr($ai_hero_stat_1_number); ?>" />
                    <div class="meta-help">First statistic number (e.g., "340%")</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_stat_1_label">Stat 1 Label</label></th>
                <td>
                    <input type="text" id="ai_hero_stat_1_label" name="ai_hero_stat_1_label" value="<?php echo esc_attr($ai_hero_stat_1_label); ?>" />
                    <div class="meta-help">First statistic label</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_stat_2_number">Stat 2 Number</label></th>
                <td>
                    <input type="text" id="ai_hero_stat_2_number" name="ai_hero_stat_2_number" value="<?php echo esc_attr($ai_hero_stat_2_number); ?>" />
                    <div class="meta-help">Second statistic number (e.g., "85%")</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_stat_2_label">Stat 2 Label</label></th>
                <td>
                    <input type="text" id="ai_hero_stat_2_label" name="ai_hero_stat_2_label" value="<?php echo esc_attr($ai_hero_stat_2_label); ?>" />
                    <div class="meta-help">Second statistic label</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_stat_3_number">Stat 3 Number</label></th>
                <td>
                    <input type="text" id="ai_hero_stat_3_number" name="ai_hero_stat_3_number" value="<?php echo esc_attr($ai_hero_stat_3_number); ?>" />
                    <div class="meta-help">Third statistic number (e.g., "60%")</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_stat_3_label">Stat 3 Label</label></th>
                <td>
                    <input type="text" id="ai_hero_stat_3_label" name="ai_hero_stat_3_label" value="<?php echo esc_attr($ai_hero_stat_3_label); ?>" />
                    <div class="meta-help">Third statistic label</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_primary_btn">Primary Button Text</label></th>
                <td>
                    <input type="text" id="ai_hero_primary_btn" name="ai_hero_primary_btn" value="<?php echo esc_attr($ai_hero_primary_btn); ?>" />
                    <div class="meta-help">Text for the primary call-to-action button</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_secondary_btn">Secondary Button Text</label></th>
                <td>
                    <input type="text" id="ai_hero_secondary_btn" name="ai_hero_secondary_btn" value="<?php echo esc_attr($ai_hero_secondary_btn); ?>" />
                    <div class="meta-help">Text for the secondary call-to-action button</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>Overview Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_overview_title">Overview Title</label></th>
                <td>
                    <input type="text" id="ai_overview_title" name="ai_overview_title" value="<?php echo esc_attr($ai_overview_title); ?>" />
                    <div class="meta-help">Title for the service overview section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_overview_description">Overview Description</label></th>
                <td>
                    <textarea id="ai_overview_description" name="ai_overview_description"><?php echo esc_textarea($ai_overview_description); ?></textarea>
                    <div class="meta-help">Description text for the overview section</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>Services Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_service_1_title">Service 1 Title</label></th>
                <td>
                    <input type="text" id="ai_service_1_title" name="ai_service_1_title" value="<?php echo esc_attr($ai_service_1_title); ?>" />
                    <div class="meta-help">Title for first service (AI Lead Scoring)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_1_desc">Service 1 Description</label></th>
                <td>
                    <textarea id="ai_service_1_desc" name="ai_service_1_desc"><?php echo esc_textarea($ai_service_1_desc); ?></textarea>
                    <div class="meta-help">Description for first service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_2_title">Service 2 Title</label></th>
                <td>
                    <input type="text" id="ai_service_2_title" name="ai_service_2_title" value="<?php echo esc_attr($ai_service_2_title); ?>" />
                    <div class="meta-help">Title for second service (Predictive Analytics)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_2_desc">Service 2 Description</label></th>
                <td>
                    <textarea id="ai_service_2_desc" name="ai_service_2_desc"><?php echo esc_textarea($ai_service_2_desc); ?></textarea>
                    <div class="meta-help">Description for second service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_3_title">Service 3 Title</label></th>
                <td>
                    <input type="text" id="ai_service_3_title" name="ai_service_3_title" value="<?php echo esc_attr($ai_service_3_title); ?>" />
                    <div class="meta-help">Title for third service (Workflow Automation)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_3_desc">Service 3 Description</label></th>
                <td>
                    <textarea id="ai_service_3_desc" name="ai_service_3_desc"><?php echo esc_textarea($ai_service_3_desc); ?></textarea>
                    <div class="meta-help">Description for third service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_4_title">Service 4 Title</label></th>
                <td>
                    <input type="text" id="ai_service_4_title" name="ai_service_4_title" value="<?php echo esc_attr($ai_service_4_title); ?>" />
                    <div class="meta-help">Title for fourth service (Sales Pipeline optimisation)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_4_desc">Service 4 Description</label></th>
                <td>
                    <textarea id="ai_service_4_desc" name="ai_service_4_desc"><?php echo esc_textarea($ai_service_4_desc); ?></textarea>
                    <div class="meta-help">Description for fourth service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_5_title">Service 5 Title</label></th>
                <td>
                    <input type="text" id="ai_service_5_title" name="ai_service_5_title" value="<?php echo esc_attr($ai_service_5_title); ?>" />
                    <div class="meta-help">Title for fifth service (Intelligent Customer Insights)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_5_desc">Service 5 Description</label></th>
                <td>
                    <textarea id="ai_service_5_desc" name="ai_service_5_desc"><?php echo esc_textarea($ai_service_5_desc); ?></textarea>
                    <div class="meta-help">Description for fifth service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_6_title">Service 6 Title</label></th>
                <td>
                    <input type="text" id="ai_service_6_title" name="ai_service_6_title" value="<?php echo esc_attr($ai_service_6_title); ?>" />
                    <div class="meta-help">Title for sixth service (Omnichannel Integration)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_6_desc">Service 6 Description</label></th>
                <td>
                    <textarea id="ai_service_6_desc" name="ai_service_6_desc"><?php echo esc_textarea($ai_service_6_desc); ?></textarea>
                    <div class="meta-help">Description for sixth service</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>Case Study Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_case_title">Case Study Title</label></th>
                <td>
                    <input type="text" id="ai_case_title" name="ai_case_title" value="<?php echo esc_attr($ai_case_title); ?>" />
                    <div class="meta-help">Title for the case study section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_case_intro">Case Study Intro</label></th>
                <td>
                    <textarea id="ai_case_intro" name="ai_case_intro"><?php echo esc_textarea($ai_case_intro); ?></textarea>
                    <div class="meta-help">Introductory text for the case study</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_case_challenge">Challenge Description</label></th>
                <td>
                    <textarea id="ai_case_challenge" name="ai_case_challenge"><?php echo esc_textarea($ai_case_challenge); ?></textarea>
                    <div class="meta-help">Description of the client's challenge</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_case_solution">Solution Description</label></th>
                <td>
                    <textarea id="ai_case_solution" name="ai_case_solution"><?php echo esc_textarea($ai_case_solution); ?></textarea>
                    <div class="meta-help">Description of the solution provided (use line breaks for bullet points)</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>Results Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_result_1_number">Result 1 Number</label></th>
                <td>
                    <input type="text" id="ai_result_1_number" name="ai_result_1_number" value="<?php echo esc_attr($ai_result_1_number); ?>" />
                    <div class="meta-help">First result statistic (e.g., "340%")</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_result_1_label">Result 1 Label</label></th>
                <td>
                    <input type="text" id="ai_result_1_label" name="ai_result_1_label" value="<?php echo esc_attr($ai_result_1_label); ?>" />
                    <div class="meta-help">First result description</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_result_2_number">Result 2 Number</label></th>
                <td>
                    <input type="text" id="ai_result_2_number" name="ai_result_2_number" value="<?php echo esc_attr($ai_result_2_number); ?>" />
                    <div class="meta-help">Second result statistic</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_result_2_label">Result 2 Label</label></th>
                <td>
                    <input type="text" id="ai_result_2_label" name="ai_result_2_label" value="<?php echo esc_attr($ai_result_2_label); ?>" />
                    <div class="meta-help">Second result description</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_result_3_number">Result 3 Number</label></th>
                <td>
                    <input type="text" id="ai_result_3_number" name="ai_result_3_number" value="<?php echo esc_attr($ai_result_3_number); ?>" />
                    <div class="meta-help">Third result statistic</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_result_3_label">Result 3 Label</label></th>
                <td>
                    <input type="text" id="ai_result_3_label" name="ai_result_3_label" value="<?php echo esc_attr($ai_result_3_label); ?>" />
                    <div class="meta-help">Third result description</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_result_4_number">Result 4 Number</label></th>
                <td>
                    <input type="text" id="ai_result_4_number" name="ai_result_4_number" value="<?php echo esc_attr($ai_result_4_number); ?>" />
                    <div class="meta-help">Fourth result statistic</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_result_4_label">Result 4 Label</label></th>
                <td>
                    <input type="text" id="ai_result_4_label" name="ai_result_4_label" value="<?php echo esc_attr($ai_result_4_label); ?>" />
                    <div class="meta-help">Fourth result description</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>Implementation Process Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_process_title">Process Title</label></th>
                <td>
                    <input type="text" id="ai_process_title" name="ai_process_title" value="<?php echo esc_attr($ai_process_title); ?>" />
                    <div class="meta-help">Title for the implementation process section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_1_title">Step 1 Title</label></th>
                <td>
                    <input type="text" id="ai_step_1_title" name="ai_step_1_title" value="<?php echo esc_attr($ai_step_1_title); ?>" />
                    <div class="meta-help">Title for first implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_1_desc">Step 1 Description</label></th>
                <td>
                    <textarea id="ai_step_1_desc" name="ai_step_1_desc"><?php echo esc_textarea($ai_step_1_desc); ?></textarea>
                    <div class="meta-help">Description for first step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_2_title">Step 2 Title</label></th>
                <td>
                    <input type="text" id="ai_step_2_title" name="ai_step_2_title" value="<?php echo esc_attr($ai_step_2_title); ?>" />
                    <div class="meta-help">Title for second implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_2_desc">Step 2 Description</label></th>
                <td>
                    <textarea id="ai_step_2_desc" name="ai_step_2_desc"><?php echo esc_textarea($ai_step_2_desc); ?></textarea>
                    <div class="meta-help">Description for second step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_3_title">Step 3 Title</label></th>
                <td>
                    <input type="text" id="ai_step_3_title" name="ai_step_3_title" value="<?php echo esc_attr($ai_step_3_title); ?>" />
                    <div class="meta-help">Title for third implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_3_desc">Step 3 Description</label></th>
                <td>
                    <textarea id="ai_step_3_desc" name="ai_step_3_desc"><?php echo esc_textarea($ai_step_3_desc); ?></textarea>
                    <div class="meta-help">Description for third step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_4_title">Step 4 Title</label></th>
                <td>
                    <input type="text" id="ai_step_4_title" name="ai_step_4_title" value="<?php echo esc_attr($ai_step_4_title); ?>" />
                    <div class="meta-help">Title for fourth implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_4_desc">Step 4 Description</label></th>
                <td>
                    <textarea id="ai_step_4_desc" name="ai_step_4_desc"><?php echo esc_textarea($ai_step_4_desc); ?></textarea>
                    <div class="meta-help">Description for fourth step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_5_title">Step 5 Title</label></th>
                <td>
                    <input type="text" id="ai_step_5_title" name="ai_step_5_title" value="<?php echo esc_attr($ai_step_5_title); ?>" />
                    <div class="meta-help">Title for fifth implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_5_desc">Step 5 Description</label></th>
                <td>
                    <textarea id="ai_step_5_desc" name="ai_step_5_desc"><?php echo esc_textarea($ai_step_5_desc); ?></textarea>
                    <div class="meta-help">Description for fifth step</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>Testimonial Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_testimonial_quote">Testimonial Quote</label></th>
                <td>
                    <textarea id="ai_testimonial_quote" name="ai_testimonial_quote"><?php echo esc_textarea($ai_testimonial_quote); ?></textarea>
                    <div class="meta-help">Customer testimonial quote</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_testimonial_author">Testimonial Author</label></th>
                <td>
                    <input type="text" id="ai_testimonial_author" name="ai_testimonial_author" value="<?php echo esc_attr($ai_testimonial_author); ?>" />
                    <div class="meta-help">Name of the person giving the testimonial</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_testimonial_position">Author Position</label></th>
                <td>
                    <input type="text" id="ai_testimonial_position" name="ai_testimonial_position" value="<?php echo esc_attr($ai_testimonial_position); ?>" />
                    <div class="meta-help">Job title and company of the testimonial author</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>Call-to-Action Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_cta_title">CTA Title</label></th>
                <td>
                    <input type="text" id="ai_cta_title" name="ai_cta_title" value="<?php echo esc_attr($ai_cta_title); ?>" />
                    <div class="meta-help">Title for the final call-to-action section</div>
                </td>
            </tr>
        </table>
    </div>
    <?php
}

/**
 * Save AI CRM Setup Page meta fields
 */
add_action('save_post', 'aimpro_save_ai_crm_meta');
function aimpro_save_ai_crm_meta($post_id) {
    // Check nonce
    if (!isset($_POST['aimpro_ai_crm_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_ai_crm_meta_nonce'], 'aimpro_ai_crm_meta_nonce')) {
        return;
    }

    // Check if user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Only save for pages with AI CRM Setup template or slug
    $page_template = get_page_template_slug($post_id);
    $page_slug = get_post_field('post_name', $post_id);
    
    if ($page_template !== 'page-ai-crm-setup.php' && $page_slug !== 'ai-crm-setup') {
        return;
    }

    // Define all meta fields to save
    $meta_fields = [
        // Hero Section
        'ai_hero_title', 'ai_hero_subtitle',
        'ai_hero_stat_1_number', 'ai_hero_stat_1_label',
        'ai_hero_stat_2_number', 'ai_hero_stat_2_label',
        'ai_hero_stat_3_number', 'ai_hero_stat_3_label',
        'ai_hero_primary_btn', 'ai_hero_secondary_btn',

        // Overview Section
        'ai_overview_title', 'ai_overview_description',

        // Services Section
        'ai_service_1_title', 'ai_service_1_desc',
        'ai_service_2_title', 'ai_service_2_desc',
        'ai_service_3_title', 'ai_service_3_desc',
        'ai_service_4_title', 'ai_service_4_desc',
        'ai_service_5_title', 'ai_service_5_desc',
        'ai_service_6_title', 'ai_service_6_desc',

        // Case Study Section
        'ai_case_title', 'ai_case_intro', 'ai_case_challenge', 'ai_case_solution',

        // Results Section
        'ai_result_1_number', 'ai_result_1_label',
        'ai_result_2_number', 'ai_result_2_label',
        'ai_result_3_number', 'ai_result_3_label',
        'ai_result_4_number', 'ai_result_4_label',

        // Process Section
        'ai_process_title',
        'ai_step_1_title', 'ai_step_1_desc',
        'ai_step_2_title', 'ai_step_2_desc',
        'ai_step_3_title', 'ai_step_3_desc',
        'ai_step_4_title', 'ai_step_4_desc',
        'ai_step_5_title', 'ai_step_5_desc',

        // Testimonial Section
        'ai_testimonial_quote', 'ai_testimonial_author', 'ai_testimonial_position',

        // CTA Section
        'ai_cta_title'
    ];

    // Save each meta field
    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];
            
            // Sanitize the value based on field type
            if (strpos($field, '_desc') !== false || strpos($field, '_quote') !== false || strpos($field, '_solution') !== false) {
                // Text areas - allow line breaks
                $value = sanitize_textarea_field($value);
            } elseif (strpos($field, '_url') !== false) {
                // URLs
                $value = esc_url_raw($value);
            } else {
                // Regular text fields
                $value = sanitize_text_field($value);
            }
            
            update_post_meta($post_id, $field, $value);
        }
    }
}
