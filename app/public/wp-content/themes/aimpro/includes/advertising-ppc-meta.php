<?php
/**
 * Advertising & PPC Meta Fields
 *
 * @package Aimpro
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set default values for advertising & PPC page meta fields
 * This ensures fields are pre-populated with the frontend content
 */
function aimpro_get_advertising_ppc_default_values() {
    return array(
        // Page Header
        'header_title' => 'Advertising & PPC Services',
        'header_subtitle' => 'Drive immediate results with data-driven paid advertising campaigns',
        'header_badge_1' => 'Google Certified',
        'header_badge_2' => 'Meta Partner',
        'header_badge_3' => 'Microsoft Certified',
        
        // Service Overview
        'overview_title' => 'Maximize Your Advertising ROI',
        'overview_content_1' => 'Our comprehensive PPC and advertising services help you reach your target audience at the exact moment they\'re searching for your products or services. From Google Ads to social media advertising, we create and manage campaigns that deliver measurable results and maximise your return on investment.',
        'overview_content_2' => 'With certified experts across all major advertising platforms, we ensure your campaigns are optimised for performance, cost-efficiency, and sustainable growth.',
        
        // Overview Stats
        'overview_stat1_number' => '320%',
        'overview_stat1_label' => 'Average ROI improvement',
        'overview_stat2_number' => '45%',
        'overview_stat2_label' => 'Reduction in cost per lead',
        'overview_stat3_number' => '£2.5M+',
        'overview_stat3_label' => 'Ad spend managed annually',
        
        // Services Section
        'services_title' => 'Our Advertising & PPC Services',
        'services_subtitle' => 'Comprehensive pay-per-click advertising solutions designed to maximise your return on investment across all major platforms.',
        
        // Service Items (6 services)
        'service_title_1' => 'Google Ads Management',
        'service_content_1' => 'Comprehensive Google Ads campaigns including Search, Display, Shopping, and YouTube advertising for maximum reach and ROI.',
        'service_features_1' => "Search campaign optimisation\nDisplay and remarketing campaigns\nShopping ads for e-commerce\nYouTube advertising\nPerformance Max campaigns",
        'service_metric_1' => 'Average: 280% increase in conversions',
        'service_link_1' => '/google-ads',
        
        'service_title_2' => 'Meta Ads (Facebook & Instagram)',
        'service_content_2' => 'Strategic social media advertising campaigns on Facebook and Instagram to reach and engage your target audience effectively.',
        'service_features_2' => "Facebook advertising campaigns\nInstagram advertising\nAudience targeting and lookalikes\nCreative optimisation\nConversion tracking setup",
        'service_metric_2' => 'Average: 65% lower cost per acquisition',
        'service_link_2' => '/meta-ads',
        
        'service_title_3' => 'Microsoft Ads (Bing)',
        'service_content_3' => 'Capture additional market share with Microsoft Ads on Bing, reaching audiences that competitors often overlook.',
        'service_features_3' => "Bing search advertising\nMicrosoft Audience Network\nLinkedIn integration targeting\nImport from Google Ads\nUnique audience insights",
        'service_metric_3' => 'Average: 35% lower CPC than Google',
        'service_link_3' => '/microsoft-ads',
        
        'service_title_4' => 'Retargeting & Display Advertising',
        'service_content_4' => 'Re-engage visitors who didn\'t convert with strategic retargeting campaigns across multiple platforms and networks.',
        'service_features_4' => "Dynamic retargeting campaigns\nCross-platform remarketing\nDisplay network advertising\nCustom audience creation\nSequential messaging strategies",
        'service_metric_4' => 'Average: 3x higher conversion rates',
        'service_link_4' => '/retargeting-display',
        
        'service_title_5' => 'PPC Audit',
        'service_content_5' => 'Comprehensive analysis of your existing PPC campaigns with actionable recommendations for immediate improvements.',
        'service_features_5' => "Account structure analysis\nKeyword performance review\nAd copy effectiveness assessment\nLanding page optimisation\nConversion tracking audit",
        'service_metric_5' => 'Identify 20+ optimisation opportunities',
        'service_link_5' => '/ppc-audit',
        
        'service_title_6' => 'White Label PPC',
        'service_content_6' => 'Professional PPC management services for agencies and resellers, delivered under your brand with full transparency.',
        'service_features_6' => "Branded PPC reporting\nAgency dashboard access\nScalable campaign management\nPartner training and support\nClient communication tools",
        'service_metric_6' => 'Scale your agency PPC offerings',
        'service_link_6' => '/white-label-ppc',
        
        // Case Study Section
        'case_study_title' => 'Case Study: E-commerce Success Story',
        'case_study_subtitle' => 'Online Retailer Achieves 520% ROI Improvement',
        'case_study_intro' => 'A growing e-commerce business approached us with underperforming Google Ads campaigns and high advertising costs. Our comprehensive PPC optimisation strategy transformed their advertising performance and dramatically improved their bottom line.',
        
        'challenge_title' => 'The Challenge',
        'challenge_list' => "High cost per acquisition (£45 average)\nPoor campaign structure and targeting\nLow-quality traffic and conversions\nWasted ad spend on irrelevant keywords\nNo conversion tracking or optimisation",
        
        'solution_title' => 'Our Solution',
        'solution_list' => "Complete account restructure and keyword optimisation\nImplemented advanced audience targeting\nCreated high-converting ad copy variations\nSet up comprehensive conversion tracking\noptimised landing pages for better conversions",
        
        // Case Study Metrics
        'case_metric_1_number' => '520%',
        'case_metric_1_label' => 'ROI Improvement',
        'case_metric_2_number' => '73%',
        'case_metric_2_label' => 'Reduction in CPA',
        'case_metric_3_number' => '340%',
        'case_metric_3_label' => 'Increase in Conversions',
        'case_metric_4_number' => '8 Weeks',
        'case_metric_4_label' => 'Time to See Results',
        
        // Process Section
        'process_title' => 'Our PPC Management Process',
        
        'process_step_title_1' => 'Discovery & Strategy',
        'process_step_content_1' => 'Comprehensive analysis of your business, competitors, and market to develop a winning PPC strategy.',
        
        'process_step_title_2' => 'Campaign Setup',
        'process_step_content_2' => 'Expert campaign structure, keyword research, ad creation, and tracking implementation across chosen platforms.',
        
        'process_step_title_3' => 'Launch & Monitor',
        'process_step_content_3' => 'Campaign launch with close monitoring of performance metrics and immediate optimisations as needed.',
        
        'process_step_title_4' => 'optimise & Scale',
        'process_step_content_4' => 'Continuous optimisation based on data insights, scaling successful campaigns and improving underperformers.',
        
        'process_step_title_5' => 'Report & Refine',
        'process_step_content_5' => 'Regular reporting with insights and recommendations for ongoing improvement and growth.',
        
        // Platforms Section
        'platforms_title' => 'Advertising Platforms We Manage',
        
        'platform_category_1' => 'Search Advertising',
        'platform_list_1' => "Google Ads Search Campaigns\nMicrosoft Ads (Bing)\nYouTube Search Ads\nAmazon Advertising",
        
        'platform_category_2' => 'Social Media Advertising',
        'platform_list_2' => "Facebook Advertising\nInstagram Advertising\nLinkedIn Ads\nTwitter Ads",
        
        'platform_category_3' => 'E-commerce Advertising',
        'platform_list_3' => "Google Shopping Ads\nFacebook Shop Ads\nAmazon PPC\nProduct Listing Ads",
        
        'platform_category_4' => 'Display & Video',
        'platform_list_4' => "Google Display Network\nYouTube Video Ads\nProgrammatic Display\nRetargeting Networks",
        
        // Industry Applications
        'industry_title' => 'PPC Advertising for Your Industry',
        
        'industry_name_1' => 'E-commerce',
        'industry_content_1' => 'Shopping campaigns, dynamic remarketing, and conversion optimisation for online retailers and product-based businesses.',
        
        'industry_name_2' => 'Professional Services',
        'industry_content_2' => 'Lead generation campaigns, local targeting, and conversion tracking for lawyers, accountants, consultants, and agencies.',
        
        'industry_name_3' => 'Healthcare',
        'industry_content_3' => 'Compliant advertising strategies for healthcare providers, medical practices, and wellness businesses.',
        
        'industry_name_4' => 'Real Estate',
        'industry_content_4' => 'Local property advertising, lead generation, and audience targeting for real estate agents and property developers.',
        
        'industry_name_5' => 'Home & Garden',
        'industry_content_5' => 'Seasonal campaigns, local targeting, and conversion optimisation for contractors, landscapers, and home improvement businesses.',
        
        'industry_name_6' => 'Automotive',
        'industry_content_6' => 'Vehicle advertising, local dealership promotion, and service-based campaigns for automotive businesses.',
        
        // Testimonial Section
        'testimonial_quote' => 'AIM Pro Marketing completely transformed our Google Ads performance. Within 3 months, our cost per lead dropped by 60% while our conversion volume tripled. Their expertise in PPC is unmatched.',
        'testimonial_name' => 'Michael Thompson',
        'testimonial_title' => 'Marketing Director, TechStart Solutions',
        
        // CTA Section
        'cta_title' => 'Ready to Maximize Your Advertising ROI?',
        'cta_content' => 'Get a free PPC audit and strategy session. We\'ll analyse your current campaigns and show you exactly how to improve performance and reduce costs.',
        'cta_button_1_text' => 'Get Free PPC Audit',
        'cta_button_2_text' => 'View All Services',
        'cta_feature_1' => 'Free campaign analysis',
        'cta_feature_2' => 'Performance improvement plan',
        'cta_feature_3' => 'No obligation consultation'
    );
}

/**
 * Register Advertising & PPC meta boxes
 */
function aimpro_register_advertising_ppc_meta_boxes() {
    // Only show these meta boxes on the Advertising & PPC page template
    $screen = get_current_screen();
    if ($screen->id == 'page' && isset($_GET['post'])) {
        $template = get_post_meta($_GET['post'], '_wp_page_template', true);
        if ($template != 'page-advertising-ppc.php') {
            return;
        }
    }
    
    add_meta_box(
        'advertising_ppc_header_section',
        __('Page Header', 'aimpro'),
        'aimpro_advertising_ppc_header_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'advertising_ppc_overview_section',
        __('Service Overview', 'aimpro'),
        'aimpro_advertising_ppc_overview_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'advertising_ppc_services_section',
        __('Services Section', 'aimpro'),
        'aimpro_advertising_ppc_services_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'advertising_ppc_case_study_section',
        __('Case Study Section', 'aimpro'),
        'aimpro_advertising_ppc_case_study_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'advertising_ppc_process_section',
        __('Process Section', 'aimpro'),
        'aimpro_advertising_ppc_process_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'advertising_ppc_platforms_section',
        __('Platforms Section', 'aimpro'),
        'aimpro_advertising_ppc_platforms_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'advertising_ppc_industries_section',
        __('Industries Section', 'aimpro'),
        'aimpro_advertising_ppc_industries_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'advertising_ppc_testimonial_section',
        __('Testimonial Section', 'aimpro'),
        'aimpro_advertising_ppc_testimonial_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'advertising_ppc_cta_section',
        __('CTA Section', 'aimpro'),
        'aimpro_advertising_ppc_cta_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes_page', 'aimpro_register_advertising_ppc_meta_boxes');

/**
 * Page Header Callback
 */
function aimpro_advertising_ppc_header_callback($post) {
    wp_nonce_field(basename(__FILE__), 'advertising_ppc_header_nonce');
    
    $defaults = aimpro_get_advertising_ppc_default_values();
    
    // Get saved values or use defaults if empty
    $header_title = get_post_meta($post->ID, '_advertising_ppc_header_title', true);
    if (empty($header_title)) $header_title = $defaults['header_title'];
    
    $header_subtitle = get_post_meta($post->ID, '_advertising_ppc_header_subtitle', true);
    if (empty($header_subtitle)) $header_subtitle = $defaults['header_subtitle'];
    
    // Header badges
    $header_badge_1 = get_post_meta($post->ID, '_advertising_ppc_header_badge_1', true);
    if (empty($header_badge_1)) $header_badge_1 = $defaults['header_badge_1'];
    
    $header_badge_2 = get_post_meta($post->ID, '_advertising_ppc_header_badge_2', true);
    if (empty($header_badge_2)) $header_badge_2 = $defaults['header_badge_2'];
    
    $header_badge_3 = get_post_meta($post->ID, '_advertising_ppc_header_badge_3', true);
    if (empty($header_badge_3)) $header_badge_3 = $defaults['header_badge_3'];
    
    // Output fields
    ?>
    <p>
        <label for="advertising_ppc_header_title"><?php _e('Page Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_header_title" name="advertising_ppc_header_title" value="<?php echo esc_attr($header_title); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_header_subtitle"><?php _e('Page Subtitle', 'aimpro'); ?></label><br>
        <textarea id="advertising_ppc_header_subtitle" name="advertising_ppc_header_subtitle" class="widefat" rows="3"><?php echo esc_textarea($header_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Header Badges', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_header_badge_1"><?php _e('Badge 1', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_header_badge_1" name="advertising_ppc_header_badge_1" value="<?php echo esc_attr($header_badge_1); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_header_badge_2"><?php _e('Badge 2', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_header_badge_2" name="advertising_ppc_header_badge_2" value="<?php echo esc_attr($header_badge_2); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_header_badge_3"><?php _e('Badge 3', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_header_badge_3" name="advertising_ppc_header_badge_3" value="<?php echo esc_attr($header_badge_3); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Service Overview Callback
 */
function aimpro_advertising_ppc_overview_callback($post) {
    wp_nonce_field(basename(__FILE__), 'advertising_ppc_overview_nonce');
    
    $defaults = aimpro_get_advertising_ppc_default_values();
    
    // Get saved values or use defaults if empty
    $overview_title = get_post_meta($post->ID, '_advertising_ppc_overview_title', true);
    if (empty($overview_title)) $overview_title = $defaults['overview_title'];
    
    $overview_content_1 = get_post_meta($post->ID, '_advertising_ppc_overview_content_1', true);
    if (empty($overview_content_1)) $overview_content_1 = $defaults['overview_content_1'];
    
    $overview_content_2 = get_post_meta($post->ID, '_advertising_ppc_overview_content_2', true);
    if (empty($overview_content_2)) $overview_content_2 = $defaults['overview_content_2'];
    
    // Stats
    $overview_stat1_number = get_post_meta($post->ID, '_advertising_ppc_overview_stat1_number', true);
    if (empty($overview_stat1_number)) $overview_stat1_number = $defaults['overview_stat1_number'];
    
    $overview_stat1_label = get_post_meta($post->ID, '_advertising_ppc_overview_stat1_label', true);
    if (empty($overview_stat1_label)) $overview_stat1_label = $defaults['overview_stat1_label'];
    
    $overview_stat2_number = get_post_meta($post->ID, '_advertising_ppc_overview_stat2_number', true);
    if (empty($overview_stat2_number)) $overview_stat2_number = $defaults['overview_stat2_number'];
    
    $overview_stat2_label = get_post_meta($post->ID, '_advertising_ppc_overview_stat2_label', true);
    if (empty($overview_stat2_label)) $overview_stat2_label = $defaults['overview_stat2_label'];
    
    $overview_stat3_number = get_post_meta($post->ID, '_advertising_ppc_overview_stat3_number', true);
    if (empty($overview_stat3_number)) $overview_stat3_number = $defaults['overview_stat3_number'];
    
    $overview_stat3_label = get_post_meta($post->ID, '_advertising_ppc_overview_stat3_label', true);
    if (empty($overview_stat3_label)) $overview_stat3_label = $defaults['overview_stat3_label'];
    
    // Output fields
    ?>
    <p>
        <label for="advertising_ppc_overview_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_overview_title" name="advertising_ppc_overview_title" value="<?php echo esc_attr($overview_title); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_overview_content_1"><?php _e('First Paragraph', 'aimpro'); ?></label><br>
        <textarea id="advertising_ppc_overview_content_1" name="advertising_ppc_overview_content_1" class="widefat" rows="4"><?php echo esc_textarea($overview_content_1); ?></textarea>
    </p>
    <p>
        <label for="advertising_ppc_overview_content_2"><?php _e('Second Paragraph', 'aimpro'); ?></label><br>
        <textarea id="advertising_ppc_overview_content_2" name="advertising_ppc_overview_content_2" class="widefat" rows="3"><?php echo esc_textarea($overview_content_2); ?></textarea>
    </p>
    
    <h4><?php _e('Overview Stats', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_overview_stat1_number"><?php _e('Stat 1 Number', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat1_number" name="advertising_ppc_overview_stat1_number" value="<?php echo esc_attr($overview_stat1_number); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_overview_stat1_label"><?php _e('Stat 1 Label', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat1_label" name="advertising_ppc_overview_stat1_label" value="<?php echo esc_attr($overview_stat1_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_overview_stat2_number"><?php _e('Stat 2 Number', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat2_number" name="advertising_ppc_overview_stat2_number" value="<?php echo esc_attr($overview_stat2_number); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_overview_stat2_label"><?php _e('Stat 2 Label', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat2_label" name="advertising_ppc_overview_stat2_label" value="<?php echo esc_attr($overview_stat2_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_overview_stat3_number"><?php _e('Stat 3 Number', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat3_number" name="advertising_ppc_overview_stat3_number" value="<?php echo esc_attr($overview_stat3_number); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_overview_stat3_label"><?php _e('Stat 3 Label', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat3_label" name="advertising_ppc_overview_stat3_label" value="<?php echo esc_attr($overview_stat3_label); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Services Section Callback
 */
function aimpro_advertising_ppc_services_callback($post) {
    wp_nonce_field(basename(__FILE__), 'advertising_ppc_services_nonce');
    
    $defaults = aimpro_get_advertising_ppc_default_values();
    
    // Get saved values or use defaults if empty
    $services_title = get_post_meta($post->ID, '_advertising_ppc_services_title', true);
    if (empty($services_title)) $services_title = $defaults['services_title'];
    
    $services_subtitle = get_post_meta($post->ID, '_advertising_ppc_services_subtitle', true);
    if (empty($services_subtitle)) $services_subtitle = $defaults['services_subtitle'];
    
    // Service Items (6 items)
    $services = array();
    for ($i = 1; $i <= 6; $i++) {
        $title = get_post_meta($post->ID, "_advertising_ppc_service_title_{$i}", true);
        if (empty($title)) $title = $defaults["service_title_{$i}"];
        
        $content = get_post_meta($post->ID, "_advertising_ppc_service_content_{$i}", true);
        if (empty($content)) $content = $defaults["service_content_{$i}"];
        
        $features = get_post_meta($post->ID, "_advertising_ppc_service_features_{$i}", true);
        if (empty($features)) $features = $defaults["service_features_{$i}"];
        
        $metric = get_post_meta($post->ID, "_advertising_ppc_service_metric_{$i}", true);
        if (empty($metric)) $metric = $defaults["service_metric_{$i}"];
        
        $link = get_post_meta($post->ID, "_advertising_ppc_service_link_{$i}", true);
        if (empty($link)) $link = $defaults["service_link_{$i}"];
        
        $services[$i] = array(
            'title' => $title,
            'content' => $content,
            'features' => $features,
            'metric' => $metric,
            'link' => $link,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="advertising_ppc_services_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_services_title" name="advertising_ppc_services_title" value="<?php echo esc_attr($services_title); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_services_subtitle"><?php _e('Section Subtitle', 'aimpro'); ?></label><br>
        <textarea id="advertising_ppc_services_subtitle" name="advertising_ppc_services_subtitle" class="widefat" rows="3"><?php echo esc_textarea($services_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Service Items', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php printf(__('Service %d', 'aimpro'), $i); ?></h4>
            <p>
                <label for="advertising_ppc_service_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_service_title_<?php echo $i; ?>" name="advertising_ppc_service_title_<?php echo $i; ?>" value="<?php echo esc_attr($services[$i]['title']); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_service_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                <textarea id="advertising_ppc_service_content_<?php echo $i; ?>" name="advertising_ppc_service_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($services[$i]['content']); ?></textarea>
            </p>
            <p>
                <label for="advertising_ppc_service_features_<?php echo $i; ?>"><?php _e('Features List (one per line)', 'aimpro'); ?></label><br>
                <textarea id="advertising_ppc_service_features_<?php echo $i; ?>" name="advertising_ppc_service_features_<?php echo $i; ?>" class="widefat" rows="5"><?php echo esc_textarea($services[$i]['features']); ?></textarea>
            </p>
            <p>
                <label for="advertising_ppc_service_metric_<?php echo $i; ?>"><?php _e('Metric/Result', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_service_metric_<?php echo $i; ?>" name="advertising_ppc_service_metric_<?php echo $i; ?>" value="<?php echo esc_attr($services[$i]['metric']); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_service_link_<?php echo $i; ?>"><?php _e('Learn More Link', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_service_link_<?php echo $i; ?>" name="advertising_ppc_service_link_<?php echo $i; ?>" value="<?php echo esc_attr($services[$i]['link']); ?>" class="widefat">
                <small><?php _e('Example: /google-ads', 'aimpro'); ?></small>
            </p>
        </div>
    <?php endfor; ?>
    <?php
}

/**
 * Case Study Section Callback
 */
function aimpro_advertising_ppc_case_study_callback($post) {
    wp_nonce_field(basename(__FILE__), 'advertising_ppc_case_study_nonce');
    
    $defaults = aimpro_get_advertising_ppc_default_values();
    
    // Get saved values or use defaults if empty
    $case_study_title = get_post_meta($post->ID, '_advertising_ppc_case_study_title', true);
    if (empty($case_study_title)) $case_study_title = $defaults['case_study_title'];
    
    $case_study_subtitle = get_post_meta($post->ID, '_advertising_ppc_case_study_subtitle', true);
    if (empty($case_study_subtitle)) $case_study_subtitle = $defaults['case_study_subtitle'];
    
    $case_study_intro = get_post_meta($post->ID, '_advertising_ppc_case_study_intro', true);
    if (empty($case_study_intro)) $case_study_intro = $defaults['case_study_intro'];
    
    $challenge_title = get_post_meta($post->ID, '_advertising_ppc_challenge_title', true);
    if (empty($challenge_title)) $challenge_title = $defaults['challenge_title'];
    
    $challenge_list = get_post_meta($post->ID, '_advertising_ppc_challenge_list', true);
    if (empty($challenge_list)) $challenge_list = $defaults['challenge_list'];
    
    $solution_title = get_post_meta($post->ID, '_advertising_ppc_solution_title', true);
    if (empty($solution_title)) $solution_title = $defaults['solution_title'];
    
    $solution_list = get_post_meta($post->ID, '_advertising_ppc_solution_list', true);
    if (empty($solution_list)) $solution_list = $defaults['solution_list'];
    
    // Case Study Metrics
    $case_metrics = array();
    for ($i = 1; $i <= 4; $i++) {
        $number = get_post_meta($post->ID, "_advertising_ppc_case_metric_{$i}_number", true);
        if (empty($number)) $number = $defaults["case_metric_{$i}_number"];
        
        $label = get_post_meta($post->ID, "_advertising_ppc_case_metric_{$i}_label", true);
        if (empty($label)) $label = $defaults["case_metric_{$i}_label"];
        
        $case_metrics[$i] = array(
            'number' => $number,
            'label' => $label,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="advertising_ppc_case_study_title"><?php _e('Case Study Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_case_study_title" name="advertising_ppc_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_case_study_subtitle"><?php _e('Case Study Subtitle', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_case_study_subtitle" name="advertising_ppc_case_study_subtitle" value="<?php echo esc_attr($case_study_subtitle); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_case_study_intro"><?php _e('Case Study Intro', 'aimpro'); ?></label><br>
        <textarea id="advertising_ppc_case_study_intro" name="advertising_ppc_case_study_intro" class="widefat" rows="4"><?php echo esc_textarea($case_study_intro); ?></textarea>
    </p>
    
    <h4><?php _e('The Challenge', 'aimpro'); ?></h4>
    <p>
        <label for="advertising_ppc_challenge_title"><?php _e('Challenge Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_challenge_title" name="advertising_ppc_challenge_title" value="<?php echo esc_attr($challenge_title); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_challenge_list"><?php _e('Challenge List (one item per line)', 'aimpro'); ?></label><br>
        <textarea id="advertising_ppc_challenge_list" name="advertising_ppc_challenge_list" class="widefat" rows="5"><?php echo esc_textarea($challenge_list); ?></textarea>
    </p>
    
    <h4><?php _e('The Solution', 'aimpro'); ?></h4>
    <p>
        <label for="advertising_ppc_solution_title"><?php _e('Solution Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_solution_title" name="advertising_ppc_solution_title" value="<?php echo esc_attr($solution_title); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_solution_list"><?php _e('Solution List (one item per line)', 'aimpro'); ?></label><br>
        <textarea id="advertising_ppc_solution_list" name="advertising_ppc_solution_list" class="widefat" rows="5"><?php echo esc_textarea($solution_list); ?></textarea>
    </p>
    
    <h4><?php _e('Case Study Metrics', 'aimpro'); ?></h4>
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div style="flex: 1; min-width: 200px;">
                <h4><?php printf(__('Metric %d', 'aimpro'), $i); ?></h4>
                <p>
                    <label for="advertising_ppc_case_metric_<?php echo $i; ?>_number"><?php _e('Number/Value', 'aimpro'); ?></label><br>
                    <input type="text" id="advertising_ppc_case_metric_<?php echo $i; ?>_number" name="advertising_ppc_case_metric_<?php echo $i; ?>_number" value="<?php echo esc_attr($case_metrics[$i]['number']); ?>" class="widefat">
                </p>
                <p>
                    <label for="advertising_ppc_case_metric_<?php echo $i; ?>_label"><?php _e('Label', 'aimpro'); ?></label><br>
                    <input type="text" id="advertising_ppc_case_metric_<?php echo $i; ?>_label" name="advertising_ppc_case_metric_<?php echo $i; ?>_label" value="<?php echo esc_attr($case_metrics[$i]['label']); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Process Section Callback
 */
function aimpro_advertising_ppc_process_callback($post) {
    wp_nonce_field(basename(__FILE__), 'advertising_ppc_process_nonce');
    
    $defaults = aimpro_get_advertising_ppc_default_values();
    
    // Get saved values or use defaults if empty
    $process_title = get_post_meta($post->ID, '_advertising_ppc_process_title', true);
    if (empty($process_title)) $process_title = $defaults['process_title'];
    
    // Process steps (5 items)
    $steps = array();
    for ($i = 1; $i <= 5; $i++) {
        $title = get_post_meta($post->ID, "_advertising_ppc_process_step_title_{$i}", true);
        if (empty($title)) $title = $defaults["process_step_title_{$i}"];
        
        $content = get_post_meta($post->ID, "_advertising_ppc_process_step_content_{$i}", true);
        if (empty($content)) $content = $defaults["process_step_content_{$i}"];
        
        $steps[$i] = array(
            'title' => $title,
            'content' => $content,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="advertising_ppc_process_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_process_title" name="advertising_ppc_process_title" value="<?php echo esc_attr($process_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Process Steps', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php printf(__('Step %d', 'aimpro'), $i); ?></h4>
            <p>
                <label for="advertising_ppc_process_step_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_process_step_title_<?php echo $i; ?>" name="advertising_ppc_process_step_title_<?php echo $i; ?>" value="<?php echo esc_attr($steps[$i]['title']); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_process_step_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                <textarea id="advertising_ppc_process_step_content_<?php echo $i; ?>" name="advertising_ppc_process_step_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($steps[$i]['content']); ?></textarea>
            </p>
        </div>
    <?php endfor; ?>
    <?php
}

/**
 * Platforms Section Callback
 */
function aimpro_advertising_ppc_platforms_callback($post) {
    wp_nonce_field(basename(__FILE__), 'advertising_ppc_platforms_nonce');
    
    $defaults = aimpro_get_advertising_ppc_default_values();
    
    // Get saved values or use defaults if empty
    $platforms_title = get_post_meta($post->ID, '_advertising_ppc_platforms_title', true);
    if (empty($platforms_title)) $platforms_title = $defaults['platforms_title'];
    
    // Platform categories and lists
    $platforms = array(
        'Search Advertising' => array(),
        'Social Media Advertising' => array(),
        'E-commerce Advertising' => array(),
        'Display & Video' => array(),
    );
    
    foreach ($platforms as $category => $list) {
        $platform_list = get_post_meta($post->ID, "_advertising_ppc_platform_list_" . sanitize_title($category), true);
        if (!empty($platform_list)) {
            $platforms[$category] = explode("\n", $platform_list);
        }
    }
    
    // Output fields
    ?>
    <p>
        <label for="advertising_ppc_platforms_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_platforms_title" name="advertising_ppc_platforms_title" value="<?php echo esc_attr($platforms_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Platform Categories', 'aimpro'); ?></h4>
    <?php foreach ($platforms as $category => $list) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php echo esc_html($category); ?></h4>
            <p>
                <label for="advertising_ppc_platform_list_<?php echo sanitize_title($category); ?>"><?php _e('Platform List (one per line)', 'aimpro'); ?></label><br>
                <textarea id="advertising_ppc_platform_list_<?php echo sanitize_title($category); ?>" name="advertising_ppc_platform_list_<?php echo sanitize_title($category); ?>" class="widefat" rows="5"><?php echo esc_textarea(implode("\n", $list)); ?></textarea>
            </p>
        </div>
    <?php endforeach; ?>
    <?php
}

/**
 * Industries Section Callback
 */
function aimpro_advertising_ppc_industries_callback($post) {
    wp_nonce_field(basename(__FILE__), 'advertising_ppc_industries_nonce');
    
    $defaults = aimpro_get_advertising_ppc_default_values();
    
    // Get saved values or use defaults if empty
    $industry_title = get_post_meta($post->ID, '_advertising_ppc_industry_title', true);
    if (empty($industry_title)) $industry_title = $defaults['industry_title'];
    
    // Industry items
    $industries = array();
    for ($i = 1; $i <= 6; $i++) {
        $name = get_post_meta($post->ID, "_advertising_ppc_industry_name_{$i}", true);
        if (empty($name)) $name = $defaults["industry_name_{$i}"];
        
        $content = get_post_meta($post->ID, "_advertising_ppc_industry_content_{$i}", true);
        if (empty($content)) $content = $defaults["industry_content_{$i}"];
        
        $industries[$i] = array(
            'name' => $name,
            'content' => $content,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="advertising_ppc_industry_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_industry_title" name="advertising_ppc_industry_title" value="<?php echo esc_attr($industry_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Industry Items', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php printf(__('Industry %d', 'aimpro'), $i); ?></h4>
            <p>
                <label for="advertising_ppc_industry_name_<?php echo $i; ?>"><?php _e('Industry Name', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_industry_name_<?php echo $i; ?>" name="advertising_ppc_industry_name_<?php echo $i; ?>" value="<?php echo esc_attr($industries[$i]['name']); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_industry_content_<?php echo $i; ?>"><?php _e('Industry Content', 'aimpro'); ?></label><br>
                <textarea id="advertising_ppc_industry_content_<?php echo $i; ?>" name="advertising_ppc_industry_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($industries[$i]['content']); ?></textarea>
            </p>
        </div>
    <?php endfor; ?>
    <?php
}

/**
 * Testimonial Section Callback
 */
function aimpro_advertising_ppc_testimonial_callback($post) {
    wp_nonce_field(basename(__FILE__), 'advertising_ppc_testimonial_nonce');
    
    $defaults = aimpro_get_advertising_ppc_default_values();
    
    // Get saved values or use defaults if empty
    $testimonial_quote = get_post_meta($post->ID, '_advertising_ppc_testimonial_quote', true);
    if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
    
    $testimonial_name = get_post_meta($post->ID, '_advertising_ppc_testimonial_name', true);
    if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
    
    $testimonial_title = get_post_meta($post->ID, '_advertising_ppc_testimonial_title', true);
    if (empty($testimonial_title)) $testimonial_title = $defaults['testimonial_title'];
    
    // Output fields
    ?>
    <p>
        <label for="advertising_ppc_testimonial_quote"><?php _e('Testimonial Quote', 'aimpro'); ?></label><br>
        <textarea id="advertising_ppc_testimonial_quote" name="advertising_ppc_testimonial_quote" class="widefat" rows="4"><?php echo esc_textarea($testimonial_quote); ?></textarea>
    </p>
    <p>
        <label for="advertising_ppc_testimonial_name"><?php _e('Client Name', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_testimonial_name" name="advertising_ppc_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_testimonial_title"><?php _e('Client Title/Position', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_testimonial_title" name="advertising_ppc_testimonial_title" value="<?php echo esc_attr($testimonial_title); ?>" class="widefat">
    </p>
    <?php
}

/**
 * CTA Section Callback
 */
function aimpro_advertising_ppc_cta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'advertising_ppc_cta_nonce');
    
    $defaults = aimpro_get_advertising_ppc_default_values();
    
    // Get saved values or use defaults if empty
    $cta_title = get_post_meta($post->ID, '_advertising_ppc_cta_title', true);
    if (empty($cta_title)) $cta_title = $defaults['cta_title'];
    
    $cta_content = get_post_meta($post->ID, '_advertising_ppc_cta_content', true);
    if (empty($cta_content)) $cta_content = $defaults['cta_content'];
    
    $cta_button_1_text = get_post_meta($post->ID, '_advertising_ppc_cta_button_1_text', true);
    if (empty($cta_button_1_text)) $cta_button_1_text = $defaults['cta_button_1_text'];
    
    $cta_button_2_text = get_post_meta($post->ID, '_advertising_ppc_cta_button_2_text', true);
    if (empty($cta_button_2_text)) $cta_button_2_text = $defaults['cta_button_2_text'];
    
    // Output fields
    ?>
    <p>
        <label for="advertising_ppc_cta_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_cta_title" name="advertising_ppc_cta_title" value="<?php echo esc_attr($cta_title); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_cta_content"><?php _e('Section Content', 'aimpro'); ?></label><br>
        <textarea id="advertising_ppc_cta_content" name="advertising_ppc_cta_content" class="widefat" rows="3"><?php echo esc_textarea($cta_content); ?></textarea>
    </p>
    <p>
        <label for="advertising_ppc_cta_button_1_text"><?php _e('Button 1 Text', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_cta_button_1_text" name="advertising_ppc_cta_button_1_text" value="<?php echo esc_attr($cta_button_1_text); ?>" class="widefat">
    </p>
    <p>
        <label for="advertising_ppc_cta_button_2_text"><?php _e('Button 2 Text', 'aimpro'); ?></label><br>
        <input type="text" id="advertising_ppc_cta_button_2_text" name="advertising_ppc_cta_button_2_text" value="<?php echo esc_attr($cta_button_2_text); ?>" class="widefat">
    </p>
    <?php
}

/**
 * Save Advertising & PPC meta box data
 */
function aimpro_save_advertising_ppc_meta_boxes($post_id) {
    // Verify nonce
    if (!isset($_POST['advertising_ppc_header_nonce']) || !wp_verify_nonce($_POST['advertising_ppc_header_nonce'], basename(__FILE__))) {
        return;
    }
    
    // Save Page Header fields
    $header_fields = array(
        '_advertising_ppc_header_title',
        '_advertising_ppc_header_subtitle',
        '_advertising_ppc_header_badge_1',
        '_advertising_ppc_header_badge_2',
        '_advertising_ppc_header_badge_3',
    );
    foreach ($header_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field(wp_unslash($_POST[$field])));
        }
    }
    
    // Verify nonce for other sections
    $sections = array('overview', 'services', 'case_study', 'process', 'platforms', 'industries', 'testimonial', 'cta');
    foreach ($sections as $section) {
        if (!isset($_POST["advertising_ppc_{$section}_nonce"]) || !wp_verify_nonce($_POST["advertising_ppc_{$section}_nonce"], basename(__FILE__))) {
            return;
        }
    }
    
    // Save Service Overview fields
    $overview_fields = array(
        '_advertising_ppc_overview_title',
        '_advertising_ppc_overview_content_1',
        '_advertising_ppc_overview_content_2',
        '_advertising_ppc_overview_stat1_number',
        '_advertising_ppc_overview_stat1_label',
        '_advertising_ppc_overview_stat2_number',
        '_advertising_ppc_overview_stat2_label',
        '_advertising_ppc_overview_stat3_number',
        '_advertising_ppc_overview_stat3_label',
    );
    foreach ($overview_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field(wp_unslash($_POST[$field])));
        }
    }
    
    // Save Services Section fields
    $services_title = isset($_POST['_advertising_ppc_services_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_services_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_services_title', $services_title);
    
    $services_subtitle = isset($_POST['_advertising_ppc_services_subtitle']) ? sanitize_textarea_field(wp_unslash($_POST['_advertising_ppc_services_subtitle'])) : '';
    update_post_meta($post_id, '_advertising_ppc_services_subtitle', $services_subtitle);
    
    for ($i = 1; $i <= 6; $i++) {
        $service_title = isset($_POST["_advertising_ppc_service_title_{$i}"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_service_title_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_title_{$i}", $service_title);
        
        $service_content = isset($_POST["_advertising_ppc_service_content_{$i}"]) ? sanitize_textarea_field(wp_unslash($_POST["_advertising_ppc_service_content_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_content_{$i}", $service_content);
        
        $service_features = isset($_POST["_advertising_ppc_service_features_{$i}"]) ? sanitize_textarea_field(wp_unslash($_POST["_advertising_ppc_service_features_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_features_{$i}", $service_features);
        
        $service_metric = isset($_POST["_advertising_ppc_service_metric_{$i}"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_service_metric_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_metric_{$i}", $service_metric);
        
        $service_link = isset($_POST["_advertising_ppc_service_link_{$i}"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_service_link_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_link_{$i}", $service_link);
    }
    
    // Save Case Study Section fields
    $case_study_title = isset($_POST['_advertising_ppc_case_study_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_case_study_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_case_study_title', $case_study_title);
    
    $case_study_subtitle = isset($_POST['_advertising_ppc_case_study_subtitle']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_case_study_subtitle'])) : '';
    update_post_meta($post_id, '_advertising_ppc_case_study_subtitle', $case_study_subtitle);
    
    $case_study_intro = isset($_POST['_advertising_ppc_case_study_intro']) ? sanitize_textarea_field(wp_unslash($_POST['_advertising_ppc_case_study_intro'])) : '';
    update_post_meta($post_id, '_advertising_ppc_case_study_intro', $case_study_intro);
    
    $challenge_title = isset($_POST['_advertising_ppc_challenge_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_challenge_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_challenge_title', $challenge_title);
    
    $challenge_list = isset($_POST['_advertising_ppc_challenge_list']) ? sanitize_textarea_field(wp_unslash($_POST['_advertising_ppc_challenge_list'])) : '';
    update_post_meta($post_id, '_advertising_ppc_challenge_list', $challenge_list);
    
    $solution_title = isset($_POST['_advertising_ppc_solution_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_solution_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_solution_title', $solution_title);
    
    $solution_list = isset($_POST['_advertising_ppc_solution_list']) ? sanitize_textarea_field(wp_unslash($_POST['_advertising_ppc_solution_list'])) : '';
    update_post_meta($post_id, '_advertising_ppc_solution_list', $solution_list);
    
    for ($i = 1; $i <= 4; $i++) {
        $case_metric_number = isset($_POST["_advertising_ppc_case_metric_{$i}_number"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_case_metric_{$i}_number"])) : '';
        update_post_meta($post_id, "_advertising_ppc_case_metric_{$i}_number", $case_metric_number);
        
        $case_metric_label = isset($_POST["_advertising_ppc_case_metric_{$i}_label"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_case_metric_{$i}_label"])) : '';
        update_post_meta($post_id, "_advertising_ppc_case_metric_{$i}_label", $case_metric_label);
    }
    
    // Save Process Section fields
    $process_title = isset($_POST['_advertising_ppc_process_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_process_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_process_title', $process_title);
    
    for ($i = 1; $i <= 5; $i++) {
        $process_step_title = isset($_POST["_advertising_ppc_process_step_title_{$i}"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_process_step_title_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_process_step_title_{$i}", $process_step_title);
        
        $process_step_content = isset($_POST["_advertising_ppc_process_step_content_{$i}"]) ? sanitize_textarea_field(wp_unslash($_POST["_advertising_ppc_process_step_content_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_process_step_content_{$i}", $process_step_content);
    }
    
    // Save Platforms Section fields
    $platforms_title = isset($_POST['_advertising_ppc_platforms_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_platforms_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_platforms_title', $platforms_title);
    
    $platform_categories = array('Search Advertising', 'Social Media Advertising', 'E-commerce Advertising', 'Display & Video');
    foreach ($platform_categories as $category) {
        $platform_list = isset($_POST["_advertising_ppc_platform_list_" . sanitize_title($category)]) ? sanitize_textarea_field(wp_unslash($_POST["_advertising_ppc_platform_list_" . sanitize_title($category)])) : '';
        update_post_meta($post_id, "_advertising_ppc_platform_list_" . sanitize_title($category), $platform_list);
    }
    
    // Save Industries Section fields
    $industry_title = isset($_POST['_advertising_ppc_industry_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_industry_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_industry_title', $industry_title);
    
    for ($i = 1; $i <= 6; $i++) {
        $industry_name = isset($_POST["_advertising_ppc_industry_name_{$i}"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_industry_name_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_industry_name_{$i}", $industry_name);
        
        $industry_content = isset($_POST["_advertising_ppc_industry_content_{$i}"]) ? sanitize_textarea_field(wp_unslash($_POST["_advertising_ppc_industry_content_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_industry_content_{$i}", $industry_content);
    }
    
    // Save Testimonial Section fields
    $testimonial_quote = isset($_POST['_advertising_ppc_testimonial_quote']) ? sanitize_textarea_field(wp_unslash($_POST['_advertising_ppc_testimonial_quote'])) : '';
    update_post_meta($post_id, '_advertising_ppc_testimonial_quote', $testimonial_quote);
    
    $testimonial_name = isset($_POST['_advertising_ppc_testimonial_name']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_testimonial_name'])) : '';
    update_post_meta($post_id, '_advertising_ppc_testimonial_name', $testimonial_name);
    
    $testimonial_title = isset($_POST['_advertising_ppc_testimonial_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_testimonial_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_testimonial_title', $testimonial_title);
    
    // Save CTA Section fields
    $cta_title = isset($_POST['_advertising_ppc_cta_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_cta_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_cta_title', $cta_title);
    
    $cta_content = isset($_POST['_advertising_ppc_cta_content']) ? sanitize_textarea_field(wp_unslash($_POST['_advertising_ppc_cta_content'])) : '';
    update_post_meta($post_id, '_advertising_ppc_cta_content', $cta_content);
    
    $cta_button_1_text = isset($_POST['_advertising_ppc_cta_button_1_text']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_cta_button_1_text'])) : '';
    update_post_meta($post_id, '_advertising_ppc_cta_button_1_text', $cta_button_1_text);
    
    $cta_button_2_text = isset($_POST['_advertising_ppc_cta_button_2_text']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_cta_button_2_text'])) : '';
    update_post_meta($post_id, '_advertising_ppc_cta_button_2_text', $cta_button_2_text);
}
add_action('save_post', 'aimpro_save_advertising_ppc_meta_boxes');
