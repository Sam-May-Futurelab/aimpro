<?php
/**
 * Marketing Automation Meta Boxes
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add meta boxes for Marketing Automation page
function add_marketing_automation_meta_boxes() {
    add_meta_box(
        'marketing_automation_settings',
        'Marketing Automation Settings',
        'marketing_automation_meta_box_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_marketing_automation_meta_boxes');

// Meta box callback function
function marketing_automation_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('marketing_automation_meta_box', 'marketing_automation_meta_box_nonce');

    // Get existing values
    $values = get_post_meta($post->ID);
    ?>
    
    <style>
        .meta-box-section { margin-bottom: 30px; padding: 15px; border: 1px solid #ddd; }
        .meta-box-section h3 { margin-top: 0; colour: #23282d; }
        .meta-field { margin-bottom: 15px; }
        .meta-field label { display: block; margin-bottom: 5px; font-weight: 600; }
        .meta-field input, .meta-field textarea, .meta-field select { width: 100%; }
        .meta-field textarea { height: 100px; }
        .stats-row, .services-row { display: flex; gap: 20px; }
        .stats-row .meta-field, .services-row .meta-field { flex: 1; }
        .service-item { border: 1px solid #ccc; padding: 15px; margin-bottom: 15px; }
        .process-steps .step-item { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; }
    </style>

    <div class="meta-box-section">
        <h3>Page Header</h3>        <div class="meta-field">
            <label for="ma_header_title">Header Title</label>
            <input type="text" id="ma_header_title" name="ma_header_title" value="<?php echo esc_attr($values['ma_header_title'][0] ?? 'Marketing Automation Services'); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_header_subtitle">Header Subtitle</label>
            <textarea id="ma_header_subtitle" name="ma_header_subtitle"><?php echo esc_textarea($values['ma_header_subtitle'][0] ?? 'Streamline your marketing processes and nurture leads automatically'); ?></textarea>
        </div>
        <div class="meta-field">
            <label for="ma_header_badges">Header Badges (comma-separated)</label>
            <input type="text" id="ma_header_badges" name="ma_header_badges" value="<?php echo esc_attr($values['ma_header_badges'][0] ?? 'AI-Powered, CRM Integration, Multi-Channel'); ?>" />
        </div>
    </div>

    <div class="meta-box-section">
        <h3>Service Overview</h3>        <div class="meta-field">
            <label for="ma_overview_title">Overview Title</label>
            <input type="text" id="ma_overview_title" name="ma_overview_title" value="<?php echo esc_attr($values['ma_overview_title'][0] ?? 'Automate Your Way to Growth'); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_overview_description_1">Overview Description (First Paragraph)</label>
            <textarea id="ma_overview_description_1" name="ma_overview_description_1"><?php echo esc_textarea($values['ma_overview_description_1'][0] ?? 'Our marketing automation services help you create sophisticated, personalised customer journeys that nurture leads, increase conversions, and drive revenue growth. From email sequences to AI-powered chatbots, we build automation systems that work 24/7 to grow your business.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label for="ma_overview_description_2">Overview Description (Second Paragraph)</label>
            <textarea id="ma_overview_description_2" name="ma_overview_description_2"><?php echo esc_textarea($values['ma_overview_description_2'][0] ?? 'By leveraging cutting-edge automation tools and AI technology, we help you deliver the right message to the right person at the right time, creating meaningful connections that drive long-term customer relationships.'); ?></textarea>
        </div>        <div class="stats-row">
            <div class="meta-field">
                <label for="ma_stat_1_number">Stat 1 Number</label>
                <input type="text" id="ma_stat_1_number" name="ma_stat_1_number" value="<?php echo esc_attr($values['ma_stat_1_number'][0] ?? '60%'); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_stat_1_label">Stat 1 Label</label>
                <input type="text" id="ma_stat_1_label" name="ma_stat_1_label" value="<?php echo esc_attr($values['ma_stat_1_label'][0] ?? 'Time savings on average'); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label for="ma_stat_2_number">Stat 2 Number</label>
                <input type="text" id="ma_stat_2_number" name="ma_stat_2_number" value="<?php echo esc_attr($values['ma_stat_2_number'][0] ?? '300%'); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_stat_2_label">Stat 2 Label</label>
                <input type="text" id="ma_stat_2_label" name="ma_stat_2_label" value="<?php echo esc_attr($values['ma_stat_2_label'][0] ?? 'Increase in lead nurturing'); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label for="ma_stat_3_number">Stat 3 Number</label>
                <input type="text" id="ma_stat_3_number" name="ma_stat_3_number" value="<?php echo esc_attr($values['ma_stat_3_number'][0] ?? '85%'); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_stat_3_label">Stat 3 Label</label>
                <input type="text" id="ma_stat_3_label" name="ma_stat_3_label" value="<?php echo esc_attr($values['ma_stat_3_label'][0] ?? 'Improvement in conversion rates'); ?>" />
            </div>
        </div>
    </div>

    <div class="meta-box-section">
        <h3>Services Section</h3>        <div class="meta-field">
            <label for="ma_services_title">Services Section Title</label>
            <input type="text" id="ma_services_title" name="ma_services_title" value="<?php echo esc_attr($values['ma_services_title'][0] ?? 'Our Marketing Automation Services'); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_services_description">Services Section Description</label>
            <textarea id="ma_services_description" name="ma_services_description"><?php echo esc_textarea($values['ma_services_description'][0] ?? 'Streamline your marketing processes with intelligent automation solutions that nurture leads and drive conversions.'); ?></textarea>
        </div>

        <!-- Service 1: AI CRM Setup -->
        <div class="service-item">
            <h4>Service 1: AI CRM Setup & Integration</h4>            <div class="meta-field">
                <label for="ma_service_1_title">Service 1 Title</label>
                <input type="text" id="ma_service_1_title" name="ma_service_1_title" value="<?php echo esc_attr($values['ma_service_1_title'][0] ?? 'AI CRM Setup & Integration'); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_1_description">Service 1 Description</label>
                <textarea id="ma_service_1_description" name="ma_service_1_description"><?php echo esc_textarea($values['ma_service_1_description'][0] ?? 'Implement and configure advanced CRM systems with AI capabilities to manage leads, track customer interactions, and automate sales processes.'); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_1_features">Service 1 Features (one per line)</label>
                <textarea id="ma_service_1_features" name="ma_service_1_features"><?php echo esc_textarea($values['ma_service_1_features'][0] ?? "CRM platform selection and setup\nAI lead scoring implementation\nSales pipeline automation\nCustom field and workflow creation\nThird-party integrations"); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_1_metric">Service 1 Metric</label>
                <input type="text" id="ma_service_1_metric" name="ma_service_1_metric" value="<?php echo esc_attr($values['ma_service_1_metric'][0] ?? 'Average: 50% increase in sales efficiency'); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_1_link">Service 1 Link URL</label>
                <input type="url" id="ma_service_1_link" name="ma_service_1_link" value="<?php echo esc_attr($values['ma_service_1_link'][0] ?? '/ai-crm-setup'); ?>" />
            </div>
        </div>

        <!-- Service 2: Email & SMS Automation -->
        <div class="service-item">
            <h4>Service 2: Email & SMS Automation Flows</h4>            <div class="meta-field">
                <label for="ma_service_2_title">Service 2 Title</label>
                <input type="text" id="ma_service_2_title" name="ma_service_2_title" value="<?php echo esc_attr($values['ma_service_2_title'][0] ?? 'Email & SMS Automation Flows'); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_2_description">Service 2 Description</label>
                <textarea id="ma_service_2_description" name="ma_service_2_description"><?php echo esc_textarea($values['ma_service_2_description'][0] ?? 'Create sophisticated email and SMS sequences that nurture leads, onboard customers, and drive repeat purchases automatically.'); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_2_features">Service 2 Features (one per line)</label>
                <textarea id="ma_service_2_features" name="ma_service_2_features"><?php echo esc_textarea($values['ma_service_2_features'][0] ?? "Welcome series automation\nAbandoned cart recovery\nLead nurturing sequences\nCustomer onboarding flows\nRe-engagement campaigns"); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_2_metric">Service 2 Metric</label>
                <input type="text" id="ma_service_2_metric" name="ma_service_2_metric" value="<?php echo esc_attr($values['ma_service_2_metric'][0] ?? 'Average: 25% increase in email revenue'); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_2_link">Service 2 Link URL</label>
                <input type="url" id="ma_service_2_link" name="ma_service_2_link" value="<?php echo esc_attr($values['ma_service_2_link'][0] ?? '/email-sms-flows'); ?>" />
            </div>
        </div>

        <!-- Service 3: Email Marketing Campaigns -->
        <div class="service-item">
            <h4>Service 3: Email Marketing Campaigns</h4>            <div class="meta-field">
                <label for="ma_service_3_title">Service 3 Title</label>
                <input type="text" id="ma_service_3_title" name="ma_service_3_title" value="<?php echo esc_attr($values['ma_service_3_title'][0] ?? 'Email Marketing Campaigns'); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_3_description">Service 3 Description</label>
                <textarea id="ma_service_3_description" name="ma_service_3_description"><?php echo esc_textarea($values['ma_service_3_description'][0] ?? 'Design and execute targeted email marketing campaigns that engage your audience and drive conversions with personalised messaging.'); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_3_features">Service 3 Features (one per line)</label>
                <textarea id="ma_service_3_features" name="ma_service_3_features"><?php echo esc_textarea($values['ma_service_3_features'][0] ?? "Campaign strategy and planning\nEmail template design\nList segmentation and targeting\nA/B testing and optimisation\nPerformance analytics and reporting"); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_3_metric">Service 3 Metric</label>
                <input type="text" id="ma_service_3_metric" name="ma_service_3_metric" value="<?php echo esc_attr($values['ma_service_3_metric'][0] ?? 'Average: 35% improvement in open rates'); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_3_link">Service 3 Link URL</label>
                <input type="url" id="ma_service_3_link" name="ma_service_3_link" value="<?php echo esc_attr($values['ma_service_3_link'][0] ?? '/email-campaigns'); ?>" />
            </div>
        </div>

        <!-- Service 4: Sales Funnel Automation -->
        <div class="service-item">
            <h4>Service 4: Sales Funnel Automation</h4>
            <div class="meta-field">
                <label for="ma_service_4_title">Service 4 Title</label>
                <input type="text" id="ma_service_4_title" name="ma_service_4_title" value="<?php echo esc_attr($values['ma_service_4_title'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_4_description">Service 4 Description</label>
                <textarea id="ma_service_4_description" name="ma_service_4_description"><?php echo esc_textarea($values['ma_service_4_description'][0] ?? ''); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_4_features">Service 4 Features (one per line)</label>
                <textarea id="ma_service_4_features" name="ma_service_4_features"><?php echo esc_textarea($values['ma_service_4_features'][0] ?? ''); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_4_metric">Service 4 Metric</label>
                <input type="text" id="ma_service_4_metric" name="ma_service_4_metric" value="<?php echo esc_attr($values['ma_service_4_metric'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_4_link">Service 4 Link URL</label>
                <input type="url" id="ma_service_4_link" name="ma_service_4_link" value="<?php echo esc_attr($values['ma_service_4_link'][0] ?? ''); ?>" />
            </div>
        </div>

        <!-- Service 5: Chatbot Development -->
        <div class="service-item">
            <h4>Service 5: Chatbot Development</h4>
            <div class="meta-field">
                <label for="ma_service_5_title">Service 5 Title</label>
                <input type="text" id="ma_service_5_title" name="ma_service_5_title" value="<?php echo esc_attr($values['ma_service_5_title'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_5_description">Service 5 Description</label>
                <textarea id="ma_service_5_description" name="ma_service_5_description"><?php echo esc_textarea($values['ma_service_5_description'][0] ?? ''); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_5_features">Service 5 Features (one per line)</label>
                <textarea id="ma_service_5_features" name="ma_service_5_features"><?php echo esc_textarea($values['ma_service_5_features'][0] ?? ''); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_5_metric">Service 5 Metric</label>
                <input type="text" id="ma_service_5_metric" name="ma_service_5_metric" value="<?php echo esc_attr($values['ma_service_5_metric'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_5_link">Service 5 Link URL</label>
                <input type="url" id="ma_service_5_link" name="ma_service_5_link" value="<?php echo esc_attr($values['ma_service_5_link'][0] ?? ''); ?>" />
            </div>
        </div>

        <!-- Service 6: AI Marketing Tools -->
        <div class="service-item">
            <h4>Service 6: AI Marketing Tools</h4>
            <div class="meta-field">
                <label for="ma_service_6_title">Service 6 Title</label>
                <input type="text" id="ma_service_6_title" name="ma_service_6_title" value="<?php echo esc_attr($values['ma_service_6_title'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_6_description">Service 6 Description</label>
                <textarea id="ma_service_6_description" name="ma_service_6_description"><?php echo esc_textarea($values['ma_service_6_description'][0] ?? ''); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_6_features">Service 6 Features (one per line)</label>
                <textarea id="ma_service_6_features" name="ma_service_6_features"><?php echo esc_textarea($values['ma_service_6_features'][0] ?? ''); ?></textarea>
            </div>
            <div class="meta-field">
                <label for="ma_service_6_metric">Service 6 Metric</label>
                <input type="text" id="ma_service_6_metric" name="ma_service_6_metric" value="<?php echo esc_attr($values['ma_service_6_metric'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_service_6_link">Service 6 Link URL</label>
                <input type="url" id="ma_service_6_link" name="ma_service_6_link" value="<?php echo esc_attr($values['ma_service_6_link'][0] ?? ''); ?>" />
            </div>
        </div>
    </div>

    <div class="meta-box-section">
        <h3>Case Study Section</h3>
        <div class="meta-field">
            <label for="ma_case_study_title">Case Study Title</label>
            <input type="text" id="ma_case_study_title" name="ma_case_study_title" value="<?php echo esc_attr($values['ma_case_study_title'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_case_study_subtitle">Case Study Subtitle</label>
            <input type="text" id="ma_case_study_subtitle" name="ma_case_study_subtitle" value="<?php echo esc_attr($values['ma_case_study_subtitle'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_case_study_description">Case Study Description</label>
            <textarea id="ma_case_study_description" name="ma_case_study_description"><?php echo esc_textarea($values['ma_case_study_description'][0] ?? ''); ?></textarea>
        </div>
        <div class="meta-field">
            <label for="ma_case_study_challenges">Case Study Challenges (one per line)</label>
            <textarea id="ma_case_study_challenges" name="ma_case_study_challenges"><?php echo esc_textarea($values['ma_case_study_challenges'][0] ?? ''); ?></textarea>
        </div>
        <div class="meta-field">
            <label for="ma_case_study_solutions">Case Study Solutions (one per line)</label>
            <textarea id="ma_case_study_solutions" name="ma_case_study_solutions"><?php echo esc_textarea($values['ma_case_study_solutions'][0] ?? ''); ?></textarea>
        </div>
        
        <!-- Case Study Metrics -->
        <div class="stats-row">
            <div class="meta-field">
                <label for="ma_case_metric_1_number">Case Study Metric 1 Number</label>
                <input type="text" id="ma_case_metric_1_number" name="ma_case_metric_1_number" value="<?php echo esc_attr($values['ma_case_metric_1_number'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_case_metric_1_label">Case Study Metric 1 Label</label>
                <input type="text" id="ma_case_metric_1_label" name="ma_case_metric_1_label" value="<?php echo esc_attr($values['ma_case_metric_1_label'][0] ?? ''); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label for="ma_case_metric_2_number">Case Study Metric 2 Number</label>
                <input type="text" id="ma_case_metric_2_number" name="ma_case_metric_2_number" value="<?php echo esc_attr($values['ma_case_metric_2_number'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_case_metric_2_label">Case Study Metric 2 Label</label>
                <input type="text" id="ma_case_metric_2_label" name="ma_case_metric_2_label" value="<?php echo esc_attr($values['ma_case_metric_2_label'][0] ?? ''); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label for="ma_case_metric_3_number">Case Study Metric 3 Number</label>
                <input type="text" id="ma_case_metric_3_number" name="ma_case_metric_3_number" value="<?php echo esc_attr($values['ma_case_metric_3_number'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_case_metric_3_label">Case Study Metric 3 Label</label>
                <input type="text" id="ma_case_metric_3_label" name="ma_case_metric_3_label" value="<?php echo esc_attr($values['ma_case_metric_3_label'][0] ?? ''); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label for="ma_case_metric_4_number">Case Study Metric 4 Number</label>
                <input type="text" id="ma_case_metric_4_number" name="ma_case_metric_4_number" value="<?php echo esc_attr($values['ma_case_metric_4_number'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_case_metric_4_label">Case Study Metric 4 Label</label>
                <input type="text" id="ma_case_metric_4_label" name="ma_case_metric_4_label" value="<?php echo esc_attr($values['ma_case_metric_4_label'][0] ?? ''); ?>" />
            </div>
        </div>
    </div>

    <div class="meta-box-section">
        <h3>Process Section</h3>
        <div class="meta-field">
            <label for="ma_process_title">Process Section Title</label>
            <input type="text" id="ma_process_title" name="ma_process_title" value="<?php echo esc_attr($values['ma_process_title'][0] ?? ''); ?>" />
        </div>
        
        <div class="process-steps">
            <?php for ($i = 1; $i <= 5; $i++): ?>
            <div class="step-item">
                <h4>Step <?php echo $i; ?></h4>
                <div class="meta-field">
                    <label for="ma_process_step_<?php echo $i; ?>_title">Step <?php echo $i; ?> Title</label>
                    <input type="text" id="ma_process_step_<?php echo $i; ?>_title" name="ma_process_step_<?php echo $i; ?>_title" value="<?php echo esc_attr($values['ma_process_step_' . $i . '_title'][0] ?? ''); ?>" />
                </div>
                <div class="meta-field">
                    <label for="ma_process_step_<?php echo $i; ?>_description">Step <?php echo $i; ?> Description</label>
                    <textarea id="ma_process_step_<?php echo $i; ?>_description" name="ma_process_step_<?php echo $i; ?>_description"><?php echo esc_textarea($values['ma_process_step_' . $i . '_description'][0] ?? ''); ?></textarea>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>

    <div class="meta-box-section">
        <h3>Tools Section</h3>
        <div class="meta-field">
            <label for="ma_tools_title">Tools Section Title</label>
            <input type="text" id="ma_tools_title" name="ma_tools_title" value="<?php echo esc_attr($values['ma_tools_title'][0] ?? ''); ?>" />
        </div>
        
        <!-- Tool Categories -->
        <div class="meta-field">
            <label for="ma_tools_crm_title">CRM Platforms Title</label>
            <input type="text" id="ma_tools_crm_title" name="ma_tools_crm_title" value="<?php echo esc_attr($values['ma_tools_crm_title'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_tools_crm_list">CRM Platforms List (one per line)</label>
            <textarea id="ma_tools_crm_list" name="ma_tools_crm_list"><?php echo esc_textarea($values['ma_tools_crm_list'][0] ?? ''); ?></textarea>
        </div>
        
        <div class="meta-field">
            <label for="ma_tools_email_title">Email Automation Title</label>
            <input type="text" id="ma_tools_email_title" name="ma_tools_email_title" value="<?php echo esc_attr($values['ma_tools_email_title'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_tools_email_list">Email Automation List (one per line)</label>
            <textarea id="ma_tools_email_list" name="ma_tools_email_list"><?php echo esc_textarea($values['ma_tools_email_list'][0] ?? ''); ?></textarea>
        </div>
        
        <div class="meta-field">
            <label for="ma_tools_chatbot_title">Chatbot Platforms Title</label>
            <input type="text" id="ma_tools_chatbot_title" name="ma_tools_chatbot_title" value="<?php echo esc_attr($values['ma_tools_chatbot_title'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_tools_chatbot_list">Chatbot Platforms List (one per line)</label>
            <textarea id="ma_tools_chatbot_list" name="ma_tools_chatbot_list"><?php echo esc_textarea($values['ma_tools_chatbot_list'][0] ?? ''); ?></textarea>
        </div>
        
        <div class="meta-field">
            <label for="ma_tools_ai_title">AI & Analytics Title</label>
            <input type="text" id="ma_tools_ai_title" name="ma_tools_ai_title" value="<?php echo esc_attr($values['ma_tools_ai_title'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_tools_ai_list">AI & Analytics List (one per line)</label>
            <textarea id="ma_tools_ai_list" name="ma_tools_ai_list"><?php echo esc_textarea($values['ma_tools_ai_list'][0] ?? ''); ?></textarea>
        </div>
    </div>

    <div class="meta-box-section">
        <h3>Industry Applications</h3>
        <div class="meta-field">
            <label for="ma_industries_title">Industries Section Title</label>
            <input type="text" id="ma_industries_title" name="ma_industries_title" value="<?php echo esc_attr($values['ma_industries_title'][0] ?? ''); ?>" />
        </div>
        
        <?php 
        $industries = ['saas', 'ecommerce', 'professional', 'healthcare', 'education', 'realestate'];
        $industry_labels = ['SaaS & Technology', 'E-commerce', 'Professional Services', 'Healthcare', 'Education', 'Real Estate'];
        for ($i = 0; $i < count($industries); $i++): 
            $industry = $industries[$i];
            $label = $industry_labels[$i];
        ?>
        <div class="service-item">
            <h4><?php echo $label; ?></h4>
            <div class="meta-field">
                <label for="ma_industry_<?php echo $industry; ?>_title"><?php echo $label; ?> Title</label>
                <input type="text" id="ma_industry_<?php echo $industry; ?>_title" name="ma_industry_<?php echo $industry; ?>_title" value="<?php echo esc_attr($values['ma_industry_' . $industry . '_title'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_industry_<?php echo $industry; ?>_description"><?php echo $label; ?> Description</label>
                <textarea id="ma_industry_<?php echo $industry; ?>_description" name="ma_industry_<?php echo $industry; ?>_description"><?php echo esc_textarea($values['ma_industry_' . $industry . '_description'][0] ?? ''); ?></textarea>
            </div>
        </div>
        <?php endfor; ?>
    </div>

    <div class="meta-box-section">
        <h3>ROI Section</h3>
        <div class="meta-field">
            <label for="ma_roi_title">ROI Section Title</label>
            <input type="text" id="ma_roi_title" name="ma_roi_title" value="<?php echo esc_attr($values['ma_roi_title'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_roi_benefits_title">ROI Benefits Title</label>
            <input type="text" id="ma_roi_benefits_title" name="ma_roi_benefits_title" value="<?php echo esc_attr($values['ma_roi_benefits_title'][0] ?? ''); ?>" />
        </div>
        
        <!-- ROI Benefits -->
        <?php for ($i = 1; $i <= 4; $i++): ?>
        <div class="stats-row">
            <div class="meta-field">
                <label for="ma_roi_benefit_<?php echo $i; ?>_metric">ROI Benefit <?php echo $i; ?> Metric</label>
                <input type="text" id="ma_roi_benefit_<?php echo $i; ?>_metric" name="ma_roi_benefit_<?php echo $i; ?>_metric" value="<?php echo esc_attr($values['ma_roi_benefit_' . $i . '_metric'][0] ?? ''); ?>" />
            </div>
            <div class="meta-field">
                <label for="ma_roi_benefit_<?php echo $i; ?>_label">ROI Benefit <?php echo $i; ?> Label</label>
                <input type="text" id="ma_roi_benefit_<?php echo $i; ?>_label" name="ma_roi_benefit_<?php echo $i; ?>_label" value="<?php echo esc_attr($values['ma_roi_benefit_' . $i . '_label'][0] ?? ''); ?>" />
            </div>
        </div>
        <?php endfor; ?>
        
        <div class="meta-field">
            <label for="ma_roi_cta_title">ROI CTA Title</label>
            <input type="text" id="ma_roi_cta_title" name="ma_roi_cta_title" value="<?php echo esc_attr($values['ma_roi_cta_title'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_roi_cta_description">ROI CTA Description</label>
            <textarea id="ma_roi_cta_description" name="ma_roi_cta_description"><?php echo esc_textarea($values['ma_roi_cta_description'][0] ?? ''); ?></textarea>
        </div>
        <div class="meta-field">
            <label for="ma_roi_cta_button_text">ROI CTA Button Text</label>
            <input type="text" id="ma_roi_cta_button_text" name="ma_roi_cta_button_text" value="<?php echo esc_attr($values['ma_roi_cta_button_text'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_roi_cta_button_url">ROI CTA Button URL</label>
            <input type="url" id="ma_roi_cta_button_url" name="ma_roi_cta_button_url" value="<?php echo esc_attr($values['ma_roi_cta_button_url'][0] ?? ''); ?>" />
        </div>
    </div>

    <div class="meta-box-section">
        <h3>Testimonial Section</h3>
        <div class="meta-field">
            <label for="ma_testimonial_quote">Testimonial Quote</label>
            <textarea id="ma_testimonial_quote" name="ma_testimonial_quote"><?php echo esc_textarea($values['ma_testimonial_quote'][0] ?? ''); ?></textarea>
        </div>
        <div class="meta-field">
            <label for="ma_testimonial_author_name">Testimonial Author Name</label>
            <input type="text" id="ma_testimonial_author_name" name="ma_testimonial_author_name" value="<?php echo esc_attr($values['ma_testimonial_author_name'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_testimonial_author_position">Testimonial Author Position</label>
            <input type="text" id="ma_testimonial_author_position" name="ma_testimonial_author_position" value="<?php echo esc_attr($values['ma_testimonial_author_position'][0] ?? ''); ?>" />
        </div>
    </div>

    <div class="meta-box-section">
        <h3>CTA Section</h3>
        <div class="meta-field">
            <label for="ma_cta_title">CTA Title</label>
            <input type="text" id="ma_cta_title" name="ma_cta_title" value="<?php echo esc_attr($values['ma_cta_title'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_cta_description">CTA Description</label>
            <textarea id="ma_cta_description" name="ma_cta_description"><?php echo esc_textarea($values['ma_cta_description'][0] ?? ''); ?></textarea>
        </div>
        <div class="meta-field">
            <label for="ma_cta_primary_button_text">Primary Button Text</label>
            <input type="text" id="ma_cta_primary_button_text" name="ma_cta_primary_button_text" value="<?php echo esc_attr($values['ma_cta_primary_button_text'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_cta_primary_button_url">Primary Button URL</label>
            <input type="url" id="ma_cta_primary_button_url" name="ma_cta_primary_button_url" value="<?php echo esc_attr($values['ma_cta_primary_button_url'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_cta_secondary_button_text">Secondary Button Text</label>
            <input type="text" id="ma_cta_secondary_button_text" name="ma_cta_secondary_button_text" value="<?php echo esc_attr($values['ma_cta_secondary_button_text'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_cta_secondary_button_url">Secondary Button URL</label>
            <input type="url" id="ma_cta_secondary_button_url" name="ma_cta_secondary_button_url" value="<?php echo esc_attr($values['ma_cta_secondary_button_url'][0] ?? ''); ?>" />
        </div>
        <div class="meta-field">
            <label for="ma_cta_features">CTA Features (comma-separated)</label>
            <input type="text" id="ma_cta_features" name="ma_cta_features" value="<?php echo esc_attr($values['ma_cta_features'][0] ?? ''); ?>" />
        </div>
    </div>

    <?php
}

// Save meta box data
function save_marketing_automation_meta_box_data($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['marketing_automation_meta_box_nonce']) || !wp_verify_nonce($_POST['marketing_automation_meta_box_nonce'], 'marketing_automation_meta_box')) {
        return;
    }

    // Check if user has permission to edit posts
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Define all meta fields
    $meta_fields = [
        // Header fields
        'ma_header_title', 'ma_header_subtitle', 'ma_header_badges',
        
        // Overview fields
        'ma_overview_title', 'ma_overview_description_1', 'ma_overview_description_2',
        'ma_stat_1_number', 'ma_stat_1_label', 'ma_stat_2_number', 'ma_stat_2_label',
        'ma_stat_3_number', 'ma_stat_3_label',
        
        // Services fields
        'ma_services_title', 'ma_services_description',
        
        // Service 1-6 fields
        'ma_service_1_title', 'ma_service_1_description', 'ma_service_1_features', 'ma_service_1_metric', 'ma_service_1_link',
        'ma_service_2_title', 'ma_service_2_description', 'ma_service_2_features', 'ma_service_2_metric', 'ma_service_2_link',
        'ma_service_3_title', 'ma_service_3_description', 'ma_service_3_features', 'ma_service_3_metric', 'ma_service_3_link',
        'ma_service_4_title', 'ma_service_4_description', 'ma_service_4_features', 'ma_service_4_metric', 'ma_service_4_link',
        'ma_service_5_title', 'ma_service_5_description', 'ma_service_5_features', 'ma_service_5_metric', 'ma_service_5_link',
        'ma_service_6_title', 'ma_service_6_description', 'ma_service_6_features', 'ma_service_6_metric', 'ma_service_6_link',
        
        // Case study fields
        'ma_case_study_title', 'ma_case_study_subtitle', 'ma_case_study_description',
        'ma_case_study_challenges', 'ma_case_study_solutions',
        'ma_case_metric_1_number', 'ma_case_metric_1_label', 'ma_case_metric_2_number', 'ma_case_metric_2_label',
        'ma_case_metric_3_number', 'ma_case_metric_3_label', 'ma_case_metric_4_number', 'ma_case_metric_4_label',
        
        // Process fields
        'ma_process_title',
        'ma_process_step_1_title', 'ma_process_step_1_description',
        'ma_process_step_2_title', 'ma_process_step_2_description',
        'ma_process_step_3_title', 'ma_process_step_3_description',
        'ma_process_step_4_title', 'ma_process_step_4_description',
        'ma_process_step_5_title', 'ma_process_step_5_description',
        
        // Tools fields
        'ma_tools_title',
        'ma_tools_crm_title', 'ma_tools_crm_list',
        'ma_tools_email_title', 'ma_tools_email_list',
        'ma_tools_chatbot_title', 'ma_tools_chatbot_list',
        'ma_tools_ai_title', 'ma_tools_ai_list',
        
        // Industry fields
        'ma_industries_title',
        'ma_industry_saas_title', 'ma_industry_saas_description',
        'ma_industry_ecommerce_title', 'ma_industry_ecommerce_description',
        'ma_industry_professional_title', 'ma_industry_professional_description',
        'ma_industry_healthcare_title', 'ma_industry_healthcare_description',
        'ma_industry_education_title', 'ma_industry_education_description',
        'ma_industry_realestate_title', 'ma_industry_realestate_description',
        
        // ROI fields
        'ma_roi_title', 'ma_roi_benefits_title',
        'ma_roi_benefit_1_metric', 'ma_roi_benefit_1_label',
        'ma_roi_benefit_2_metric', 'ma_roi_benefit_2_label',
        'ma_roi_benefit_3_metric', 'ma_roi_benefit_3_label',
        'ma_roi_benefit_4_metric', 'ma_roi_benefit_4_label',
        'ma_roi_cta_title', 'ma_roi_cta_description', 'ma_roi_cta_button_text', 'ma_roi_cta_button_url',
        
        // Testimonial fields
        'ma_testimonial_quote', 'ma_testimonial_author_name', 'ma_testimonial_author_position',
        
        // CTA fields
        'ma_cta_title', 'ma_cta_description',
        'ma_cta_primary_button_text', 'ma_cta_primary_button_url',
        'ma_cta_secondary_button_text', 'ma_cta_secondary_button_url',
        'ma_cta_features'
    ];

    // Save each meta field
    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_textarea_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'save_marketing_automation_meta_box_data');
