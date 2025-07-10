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
    $ai_result_4_number = get_post_meta($post->ID, 'ai_result_4_number', true) ?: 'Â£2.1M';
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

    // AI Features Section Fields
    $ai_features_title = get_post_meta($post->ID, 'ai_features_title', true) ?: 'AI-Powered CRM Features';
    $ai_features_subtitle = get_post_meta($post->ID, 'ai_features_subtitle', true) ?: 'Transform your customer relationship management with intelligent features that automate processes and drive better results.';
    $ai_feature_1_title = get_post_meta($post->ID, 'ai_feature_1_title', true) ?: 'Smart Lead Scoring';
    $ai_feature_1_desc = get_post_meta($post->ID, 'ai_feature_1_desc', true) ?: 'AI algorithms analyse 50+ data points to score leads and predict conversion probability in real-time.';
    $ai_feature_2_title = get_post_meta($post->ID, 'ai_feature_2_title', true) ?: 'Predictive Forecasting';
    $ai_feature_2_desc = get_post_meta($post->ID, 'ai_feature_2_desc', true) ?: 'Machine learning models predict sales outcomes, revenue forecasts, and optimal deal closure timing.';
    $ai_feature_3_title = get_post_meta($post->ID, 'ai_feature_3_title', true) ?: 'Behavioural Targeting';
    $ai_feature_3_desc = get_post_meta($post->ID, 'ai_feature_3_desc', true) ?: 'AI tracks customer behaviour patterns to trigger personalised engagement at optimal moments.';
    $ai_feature_4_title = get_post_meta($post->ID, 'ai_feature_4_title', true) ?: 'Intelligent Reporting';
    $ai_feature_4_desc = get_post_meta($post->ID, 'ai_feature_4_desc', true) ?: 'AI-generated insights and recommendations based on performance data and market trends.';

    // Packages Section Fields
    $ai_packages_title = get_post_meta($post->ID, 'ai_packages_title', true) ?: 'AI CRM Setup Packages';
    $ai_packages_subtitle = get_post_meta($post->ID, 'ai_packages_subtitle', true) ?: 'Transform your customer relationship management with data-driven optimisation strategies.';
    
    // Package 1 - Essential
    $ai_package_1_title = get_post_meta($post->ID, 'ai_package_1_title', true) ?: 'Essential AI CRM';
    $ai_package_1_price = get_post_meta($post->ID, 'ai_package_1_price', true) ?: '£2,497';
    $ai_package_1_subtitle = get_post_meta($post->ID, 'ai_package_1_subtitle', true) ?: 'Basic AI implementation';
    $ai_package_1_features = get_post_meta($post->ID, 'ai_package_1_features', true) ?: "CRM platform setup (HubSpot/Salesforce)\nBasic AI lead scoring\nContact data migration\nEssential workflow automation\nTeam training (2 sessions)\n30-day support\nPerformance reporting";
    
    // Package 2 - Advanced
    $ai_package_2_title = get_post_meta($post->ID, 'ai_package_2_title', true) ?: 'Advanced AI CRM';
    $ai_package_2_price = get_post_meta($post->ID, 'ai_package_2_price', true) ?: '£4,997';
    $ai_package_2_subtitle = get_post_meta($post->ID, 'ai_package_2_subtitle', true) ?: 'Complete AI implementation';
    $ai_package_2_features = get_post_meta($post->ID, 'ai_package_2_features', true) ?: "Full CRM implementation\nAdvanced AI lead scoring & prediction\nOmnichannel integration\nIntelligent workflow automation\nCustom dashboards & reporting\nComprehensive team training\n90-day optimisation support";
    
    // Package 3 - Enterprise
    $ai_package_3_title = get_post_meta($post->ID, 'ai_package_3_title', true) ?: 'Enterprise AI CRM';
    $ai_package_3_price = get_post_meta($post->ID, 'ai_package_3_price', true) ?: '£9,997';
    $ai_package_3_subtitle = get_post_meta($post->ID, 'ai_package_3_subtitle', true) ?: 'Full enterprise transformation';
    $ai_package_3_features = get_post_meta($post->ID, 'ai_package_3_features', true) ?: "Enterprise CRM architecture\nCustom AI model development\nAdvanced predictive analytics\nMulti-system integrations\nWhite-glove implementation\nDedicated project manager\n6-month ongoing optimisation";

    // Platforms Section Fields
    $ai_platforms_title = get_post_meta($post->ID, 'ai_platforms_title', true) ?: 'Supported CRM Platforms';
    $ai_platforms_subtitle = get_post_meta($post->ID, 'ai_platforms_subtitle', true) ?: 'We work with leading CRM platforms to implement AI-powered solutions that transform your customer management.';
    $ai_platform_1_title = get_post_meta($post->ID, 'ai_platform_1_title', true) ?: 'HubSpot CRM';
    $ai_platform_1_desc = get_post_meta($post->ID, 'ai_platform_1_desc', true) ?: 'Complete inbound marketing platform with powerful AI automation and lead nurturing capabilities.';
    $ai_platform_2_title = get_post_meta($post->ID, 'ai_platform_2_title', true) ?: 'Salesforce';
    $ai_platform_2_desc = get_post_meta($post->ID, 'ai_platform_2_desc', true) ?: 'Enterprise-grade CRM with Einstein AI for advanced predictive analytics and automation.';
    $ai_platform_3_title = get_post_meta($post->ID, 'ai_platform_3_title', true) ?: 'Pipedrive';
    $ai_platform_3_desc = get_post_meta($post->ID, 'ai_platform_3_desc', true) ?: 'Sales-focused CRM with AI-powered sales assistant and intelligent deal recommendations.';
    $ai_platform_4_title = get_post_meta($post->ID, 'ai_platform_4_title', true) ?: 'ActiveCampaign';
    $ai_platform_4_desc = get_post_meta($post->ID, 'ai_platform_4_desc', true) ?: 'Customer experience automation platform combining CRM, email marketing, and AI predictions.';
    $ai_platform_5_title = get_post_meta($post->ID, 'ai_platform_5_title', true) ?: 'Zoho CRM';
    $ai_platform_5_desc = get_post_meta($post->ID, 'ai_platform_5_desc', true) ?: 'Comprehensive business suite with Zia AI assistant for intelligent sales forecasting and customer insights.';
    $ai_platform_6_title = get_post_meta($post->ID, 'ai_platform_6_title', true) ?: 'Microsoft Dynamics 365';
    $ai_platform_6_desc = get_post_meta($post->ID, 'ai_platform_6_desc', true) ?: 'Enterprise CRM platform with built-in AI capabilities for sales acceleration and customer service automation.';

    // Industries Section Fields
    $ai_industries_title = get_post_meta($post->ID, 'ai_industries_title', true) ?: 'Industries We Serve';
    $ai_industry_1_title = get_post_meta($post->ID, 'ai_industry_1_title', true) ?: 'SaaS & Technology';
    $ai_industry_1_desc = get_post_meta($post->ID, 'ai_industry_1_desc', true) ?: 'optimise trial-to-paid conversions and reduce churn with predictive customer analytics.';
    $ai_industry_2_title = get_post_meta($post->ID, 'ai_industry_2_title', true) ?: 'Professional Services';
    $ai_industry_2_desc = get_post_meta($post->ID, 'ai_industry_2_desc', true) ?: 'Streamline client onboarding and automate proposal generation with AI workflows.';
    $ai_industry_3_title = get_post_meta($post->ID, 'ai_industry_3_title', true) ?: 'E-commerce';
    $ai_industry_3_desc = get_post_meta($post->ID, 'ai_industry_3_desc', true) ?: 'personalise customer journeys and predict purchase behaviour for increased sales.';
    $ai_industry_4_title = get_post_meta($post->ID, 'ai_industry_4_title', true) ?: 'Real Estate';
    $ai_industry_4_desc = get_post_meta($post->ID, 'ai_industry_4_desc', true) ?: 'Automate lead qualification and nurture prospects through complex sales cycles.';
    $ai_industry_5_title = get_post_meta($post->ID, 'ai_industry_5_title', true) ?: 'Manufacturing';
    $ai_industry_5_desc = get_post_meta($post->ID, 'ai_industry_5_desc', true) ?: 'Manage complex B2B relationships and optimise quote-to-cash processes.';
    $ai_industry_6_title = get_post_meta($post->ID, 'ai_industry_6_title', true) ?: 'Healthcare';
    $ai_industry_6_desc = get_post_meta($post->ID, 'ai_industry_6_desc', true) ?: 'Improve patient engagement and streamline appointment scheduling with AI automation.';

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
                    <?php 
                    wp_editor($ai_hero_title, 'ai_hero_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Main heading displayed in the hero section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_hero_subtitle">Hero Subtitle</label></th>
                <td>
                    <?php 
                    wp_editor($ai_hero_subtitle, 'ai_hero_subtitle', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
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
                    <?php 
                    wp_editor($ai_overview_title, 'ai_overview_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for the service overview section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_overview_description">Overview Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_overview_description, 'ai_overview_description', array(
                        'media_buttons' => false,
                        'textarea_rows' => 6,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
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
                    <?php 
                    wp_editor($ai_service_1_title, 'ai_service_1_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for first service (AI Lead Scoring)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_1_desc">Service 1 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_1_desc, 'ai_service_1_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for first service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_2_title">Service 2 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_2_title, 'ai_service_2_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for second service (Predictive Analytics)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_2_desc">Service 2 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_2_desc, 'ai_service_2_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for second service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_3_title">Service 3 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_3_title, 'ai_service_3_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for third service (Workflow Automation)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_3_desc">Service 3 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_3_desc, 'ai_service_3_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for third service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_4_title">Service 4 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_4_title, 'ai_service_4_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for fourth service (Sales Pipeline optimisation)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_4_desc">Service 4 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_4_desc, 'ai_service_4_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for fourth service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_5_title">Service 5 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_5_title, 'ai_service_5_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for fifth service (Intelligent Customer Insights)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_5_desc">Service 5 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_5_desc, 'ai_service_5_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for fifth service</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_6_title">Service 6 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_6_title, 'ai_service_6_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for sixth service (Omnichannel Integration)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_service_6_desc">Service 6 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_service_6_desc, 'ai_service_6_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
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
                    <?php 
                    wp_editor($ai_case_title, 'ai_case_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for the case study section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_case_intro">Case Study Intro</label></th>
                <td>
                    <?php 
                    wp_editor($ai_case_intro, 'ai_case_intro', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Introductory text for the case study</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_case_challenge">Challenge Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_case_challenge, 'ai_case_challenge', array(
                        'media_buttons' => false,
                        'textarea_rows' => 6,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description of the client's challenge</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_case_solution">Solution Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_case_solution, 'ai_case_solution', array(
                        'media_buttons' => false,
                        'textarea_rows' => 8,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description of the solution provided (use bullet lists for multiple points)</div>
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
                    <?php 
                    wp_editor($ai_process_title, 'ai_process_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for the implementation process section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_1_title">Step 1 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_1_title, 'ai_step_1_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for first implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_1_desc">Step 1 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_1_desc, 'ai_step_1_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for first step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_2_title">Step 2 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_2_title, 'ai_step_2_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for second implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_2_desc">Step 2 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_2_desc, 'ai_step_2_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for second step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_3_title">Step 3 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_3_title, 'ai_step_3_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for third implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_3_desc">Step 3 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_3_desc, 'ai_step_3_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for third step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_4_title">Step 4 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_4_title, 'ai_step_4_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for fourth implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_4_desc">Step 4 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_4_desc, 'ai_step_4_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for fourth step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_5_title">Step 5 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_5_title, 'ai_step_5_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for fifth implementation step</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_step_5_desc">Step 5 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_step_5_desc, 'ai_step_5_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
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
                    <?php 
                    wp_editor($ai_testimonial_quote, 'ai_testimonial_quote', array(
                        'media_buttons' => false,
                        'textarea_rows' => 6,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
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
        <h3>AI Features Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_features_title">Features Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_features_title, 'ai_features_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for the AI features section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_features_subtitle">Features Subtitle</label></th>
                <td>
                    <?php 
                    wp_editor($ai_features_subtitle, 'ai_features_subtitle', array(
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Subtitle for the AI features section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_feature_1_title">Feature 1 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_feature_1_title, 'ai_feature_1_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for first AI feature (Smart Lead Scoring)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_feature_1_desc">Feature 1 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_feature_1_desc, 'ai_feature_1_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for first AI feature</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_feature_2_title">Feature 2 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_feature_2_title, 'ai_feature_2_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for second AI feature (Predictive Forecasting)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_feature_2_desc">Feature 2 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_feature_2_desc, 'ai_feature_2_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for second AI feature</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_feature_3_title">Feature 3 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_feature_3_title, 'ai_feature_3_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for third AI feature (Behavioural Targeting)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_feature_3_desc">Feature 3 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_feature_3_desc, 'ai_feature_3_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for third AI feature</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_feature_4_title">Feature 4 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_feature_4_title, 'ai_feature_4_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for fourth AI feature (Intelligent Reporting)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_feature_4_desc">Feature 4 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_feature_4_desc, 'ai_feature_4_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for fourth AI feature</div>
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
                    <?php 
                    wp_editor($ai_cta_title, 'ai_cta_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for the final call-to-action section</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>Package Pricing Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_packages_title">Packages Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_packages_title, 'ai_packages_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for the packages section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_packages_subtitle">Packages Subtitle</label></th>
                <td>
                    <?php 
                    wp_editor($ai_packages_subtitle, 'ai_packages_subtitle', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Subtitle for the packages section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_1_title">Package 1 Title</label></th>
                <td>
                    <input type="text" id="ai_package_1_title" name="ai_package_1_title" value="<?php echo esc_attr($ai_package_1_title); ?>" />
                    <div class="meta-help">Title for Essential package</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_1_price">Package 1 Price</label></th>
                <td>
                    <input type="text" id="ai_package_1_price" name="ai_package_1_price" value="<?php echo esc_attr($ai_package_1_price); ?>" />
                    <div class="meta-help">Price for Essential package (e.g., "£2,497")</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_1_subtitle">Package 1 Subtitle</label></th>
                <td>
                    <input type="text" id="ai_package_1_subtitle" name="ai_package_1_subtitle" value="<?php echo esc_attr($ai_package_1_subtitle); ?>" />
                    <div class="meta-help">Subtitle for Essential package</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_1_features">Package 1 Features</label></th>
                <td>
                    <?php 
                    wp_editor($ai_package_1_features, 'ai_package_1_features', array(
                        'media_buttons' => false,
                        'textarea_rows' => 8,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Features list for Essential package (use bullet list format)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_2_title">Package 2 Title</label></th>
                <td>
                    <input type="text" id="ai_package_2_title" name="ai_package_2_title" value="<?php echo esc_attr($ai_package_2_title); ?>" />
                    <div class="meta-help">Title for Advanced package</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_2_price">Package 2 Price</label></th>
                <td>
                    <input type="text" id="ai_package_2_price" name="ai_package_2_price" value="<?php echo esc_attr($ai_package_2_price); ?>" />
                    <div class="meta-help">Price for Advanced package</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_2_subtitle">Package 2 Subtitle</label></th>
                <td>
                    <input type="text" id="ai_package_2_subtitle" name="ai_package_2_subtitle" value="<?php echo esc_attr($ai_package_2_subtitle); ?>" />
                    <div class="meta-help">Subtitle for Advanced package</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_2_features">Package 2 Features</label></th>
                <td>
                    <?php 
                    wp_editor($ai_package_2_features, 'ai_package_2_features', array(
                        'media_buttons' => false,
                        'textarea_rows' => 8,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Features list for Advanced package (use bullet list format)</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_3_title">Package 3 Title</label></th>
                <td>
                    <input type="text" id="ai_package_3_title" name="ai_package_3_title" value="<?php echo esc_attr($ai_package_3_title); ?>" />
                    <div class="meta-help">Title for Enterprise package</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_3_price">Package 3 Price</label></th>
                <td>
                    <input type="text" id="ai_package_3_price" name="ai_package_3_price" value="<?php echo esc_attr($ai_package_3_price); ?>" />
                    <div class="meta-help">Price for Enterprise package</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_3_subtitle">Package 3 Subtitle</label></th>
                <td>
                    <input type="text" id="ai_package_3_subtitle" name="ai_package_3_subtitle" value="<?php echo esc_attr($ai_package_3_subtitle); ?>" />
                    <div class="meta-help">Subtitle for Enterprise package</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_package_3_features">Package 3 Features</label></th>
                <td>
                    <?php 
                    wp_editor($ai_package_3_features, 'ai_package_3_features', array(
                        'media_buttons' => false,
                        'textarea_rows' => 8,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Features list for Enterprise package (use bullet list format)</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>CRM Platforms Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_platforms_title">Platforms Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platforms_title, 'ai_platforms_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for the CRM platforms section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platforms_subtitle">Platforms Subtitle</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platforms_subtitle, 'ai_platforms_subtitle', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Subtitle for the CRM platforms section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_1_title">Platform 1 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_1_title, 'ai_platform_1_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for HubSpot CRM</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_1_desc">Platform 1 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_1_desc, 'ai_platform_1_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for HubSpot CRM</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_2_title">Platform 2 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_2_title, 'ai_platform_2_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for Salesforce</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_2_desc">Platform 2 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_2_desc, 'ai_platform_2_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for Salesforce</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_3_title">Platform 3 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_3_title, 'ai_platform_3_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for Pipedrive</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_3_desc">Platform 3 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_3_desc, 'ai_platform_3_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for Pipedrive</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_4_title">Platform 4 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_4_title, 'ai_platform_4_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for ActiveCampaign</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_4_desc">Platform 4 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_4_desc, 'ai_platform_4_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for ActiveCampaign</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_5_title">Platform 5 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_5_title, 'ai_platform_5_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for Zoho CRM</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_5_desc">Platform 5 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_5_desc, 'ai_platform_5_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for Zoho CRM</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_6_title">Platform 6 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_6_title, 'ai_platform_6_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for Microsoft Dynamics 365</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_platform_6_desc">Platform 6 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_platform_6_desc, 'ai_platform_6_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for Microsoft Dynamics 365</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="meta-section">
        <h3>Industries Section</h3>
        <table class="meta-table">
            <tr>
                <th><label for="ai_industries_title">Industries Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industries_title, 'ai_industries_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for the industries section</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_1_title">Industry 1 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_1_title, 'ai_industry_1_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for SaaS & Technology industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_1_desc">Industry 1 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_1_desc, 'ai_industry_1_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for SaaS & Technology industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_2_title">Industry 2 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_2_title, 'ai_industry_2_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for Professional Services industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_2_desc">Industry 2 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_2_desc, 'ai_industry_2_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for Professional Services industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_3_title">Industry 3 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_3_title, 'ai_industry_3_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for E-commerce industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_3_desc">Industry 3 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_3_desc, 'ai_industry_3_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for E-commerce industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_4_title">Industry 4 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_4_title, 'ai_industry_4_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for Real Estate industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_4_desc">Industry 4 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_4_desc, 'ai_industry_4_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for Real Estate industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_5_title">Industry 5 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_5_title, 'ai_industry_5_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for Manufacturing industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_5_desc">Industry 5 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_5_desc, 'ai_industry_5_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for Manufacturing industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_6_title">Industry 6 Title</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_6_title, 'ai_industry_6_title', array(
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Title for Healthcare industry</div>
                </td>
            </tr>
            <tr>
                <th><label for="ai_industry_6_desc">Industry 6 Description</label></th>
                <td>
                    <?php 
                    wp_editor($ai_industry_6_desc, 'ai_industry_6_desc', array(
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => false,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                    <div class="meta-help">Description for Healthcare industry</div>
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
        'ai_cta_title',

        // AI Features Section
        'ai_features_title', 'ai_features_subtitle',
        'ai_feature_1_title', 'ai_feature_1_desc',
        'ai_feature_2_title', 'ai_feature_2_desc',
        'ai_feature_3_title', 'ai_feature_3_desc',
        'ai_feature_4_title', 'ai_feature_4_desc',

        // Packages Section
        'ai_packages_title', 'ai_packages_subtitle',
        'ai_package_1_title', 'ai_package_1_price', 'ai_package_1_subtitle', 'ai_package_1_features',
        'ai_package_2_title', 'ai_package_2_price', 'ai_package_2_subtitle', 'ai_package_2_features',
        'ai_package_3_title', 'ai_package_3_price', 'ai_package_3_subtitle', 'ai_package_3_features',

        // Platforms Section
        'ai_platforms_title', 'ai_platforms_subtitle',
        'ai_platform_1_title', 'ai_platform_1_desc',
        'ai_platform_2_title', 'ai_platform_2_desc',
        'ai_platform_3_title', 'ai_platform_3_desc',
        'ai_platform_4_title', 'ai_platform_4_desc',
        'ai_platform_5_title', 'ai_platform_5_desc',
        'ai_platform_6_title', 'ai_platform_6_desc',

        // Industries Section
        'ai_industries_title',
        'ai_industry_1_title', 'ai_industry_1_desc',
        'ai_industry_2_title', 'ai_industry_2_desc',
        'ai_industry_3_title', 'ai_industry_3_desc',
        'ai_industry_4_title', 'ai_industry_4_desc',
        'ai_industry_5_title', 'ai_industry_5_desc',
        'ai_industry_6_title', 'ai_industry_6_desc'
    ];

    // Save each meta field
    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];
            
            // Sanitize the value based on field type
            if (strpos($field, '_title') !== false || 
                strpos($field, '_subtitle') !== false || 
                strpos($field, '_description') !== false ||
                strpos($field, '_desc') !== false || 
                strpos($field, '_quote') !== false || 
                strpos($field, '_solution') !== false ||
                strpos($field, '_challenge') !== false ||
                strpos($field, '_intro') !== false ||
                strpos($field, '_features') !== false) {
                // Rich text fields - use wp_kses_post to allow HTML
                $value = wp_kses_post($value);
            } elseif (strpos($field, '_url') !== false) {
                // URLs
                $value = esc_url_raw($value);
            } else {
                // Regular text fields (numbers, labels, button text, author names, positions, prices)
                $value = sanitize_text_field($value);
            }
            
            update_post_meta($post_id, $field, $value);
        }
    }
}
