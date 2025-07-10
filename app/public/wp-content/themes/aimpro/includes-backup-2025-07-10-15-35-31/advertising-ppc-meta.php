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
        // Page Header Section
        'header_title' => 'Drive immediate results with data-driven paid advertising <strong>campaigns</strong>',
        'header_subtitle' => '<strong>Google Certified</strong> • <strong>Meta Partner</strong> • <strong>Microsoft Certified</strong>',
        'header_badge_1' => 'Google Certified',
        'header_badge_2' => 'Meta Partner',
        'header_badge_3' => 'Microsoft Certified',
        
        // Service Overview Section
        'overview_title' => 'Paid Advertising That Delivers Results',
        'overview_content_1' => 'Our certified PPC specialists create and manage high-performing campaigns across Google Ads, Facebook, Instagram, LinkedIn, and Microsoft Advertising platforms.',
        'overview_content_2' => 'We focus on maximising your return on ad spend (ROAS) through strategic keyword research, compelling ad copy, and continuous optimisation.',
        'overview_stat1_number' => '340%',
        'overview_stat1_label' => 'Average ROI Increase',
        'overview_stat2_number' => '65%',
        'overview_stat2_label' => 'Reduction in Cost Per Click',
        'overview_stat3_number' => '8 Weeks',
        'overview_stat3_label' => 'Average Time to See Results',
        
        // Services Section
        'services_title' => 'Our Paid Advertising Services',
        'services_subtitle' => 'Comprehensive PPC management across all major advertising platforms',
        
        // Service Items
        'service_title_1' => 'Google Ads Management',
        'service_content_1' => 'Search campaigns, shopping ads, display advertising, and YouTube campaigns managed by Google certified specialists.',
        'service_features_1' => "Keyword research & strategy\nAd copy creation & testing\nBid management & optimisation\nConversion tracking setup",
        'service_metric_1' => 'Average: 280% increase in conversions',
        'service_link_1' => '/google-ads',
        
        'service_title_2' => 'Facebook & Instagram Ads',
        'service_content_2' => 'Targeted social media advertising campaigns designed to reach your ideal customers on Facebook and Instagram.',
        'service_features_2' => "Audience research & targeting\nCreative development\nA/B testing campaigns\nRetargeting & lookalike audiences",
        'service_metric_2' => 'Average: 65% lower cost per acquisition',
        'service_link_2' => '/facebook-ads',
        
        'service_title_3' => 'Microsoft Advertising',
        'service_content_3' => 'Reach customers on Bing and partner networks with strategically managed Microsoft Advertising campaigns.',
        'service_features_3' => "Lower competition keywords\nCross-platform campaign sync\nLinkedIn profile targeting\nImport from Google Ads",
        'service_metric_3' => 'Average: 35% lower CPC than Google',
        'service_link_3' => '/microsoft-ads',
        
        'service_title_4' => 'LinkedIn Advertising',
        'service_content_4' => 'B2B focused advertising campaigns targeting professionals based on job title, company, industry, and more.',
        'service_features_4' => "Professional targeting options\nSponsored content campaigns\nMessage ads & dynamic ads\nLead generation forms",
        'service_metric_4' => 'Average: 3x higher conversion rates',
        'service_link_4' => '/linkedin-ads',
        
        'service_title_5' => 'PPC Audits & Strategy',
        'service_content_5' => 'Comprehensive analysis of your existing campaigns with actionable recommendations for improvement.',
        'service_features_5' => "Account structure review\nKeyword analysis\nCompetitor research\n90-day action plan",
        'service_metric_5' => 'Identify 20+ optimisation opportunities',
        'service_link_5' => '/ppc-audit',
        
        'service_title_6' => 'White Label PPC',
        'service_content_6' => 'Partner with us to offer PPC services to your clients under your brand with our expert management.',
        'service_features_6' => "Your branding on reports\nDedicated account manager\nTransparent pricing\nClient communication support",
        'service_metric_6' => 'Scale your agency PPC offerings',
        'service_link_6' => '/white-label-ppc',
        
        // Case Study Section
        'case_study_title' => 'PPC Success Story',
        'case_study_subtitle' => 'How we transformed a struggling Google Ads account',
        'case_study_intro' => 'A professional services company came to us with poorly performing Google Ads campaigns that were generating leads at an unsustainable cost.',
        'challenge_title' => 'The Challenge',
        'challenge_list' => "High cost per lead ($85 average)\nPoor quality score (2-4/10)\nLow conversion rates (1.2%)\nWasted ad spend on irrelevant keywords",
        'solution_title' => 'Our Solution',
        'solution_list' => "Complete account restructure\nKeyword research & negative keyword implementation\nLanding page optimisation recommendations\nAd copy testing & optimisation\nBid strategy refinement",
        
        // Process Section
        'process_title' => 'Our PPC Management Process',
        'process_step_title_1' => 'Discovery & Audit',
        'process_step_content_1' => 'Comprehensive analysis of your business, competitors, and current advertising efforts to identify opportunities.',
        
        'process_step_title_2' => 'Strategy & Setup',
        'process_step_content_2' => 'Development of targeted campaigns with proper account structure, keyword research, and ad copy creation.',
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
        
        'process_step_title_4' => 'Optimise & Scale',
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
    // Only add to pages using the Advertising & PPC template or with 'advertising-ppc' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-advertising-ppc.php' && $page_slug !== 'advertising-ppc') {
        return;
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
add_action('add_meta_boxes', 'aimpro_register_advertising_ppc_meta_boxes');

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
    <style>
        .advertising-ppc-meta {
            max-width: 100%;
        }
        .advertising-ppc-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .advertising-ppc-meta .form-table td {
            padding: 15px 10px;
        }
        .advertising-ppc-meta input[type="text"],
        .advertising-ppc-meta textarea,
        .advertising-ppc-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .advertising-ppc-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .wp-editor-container {
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }
        .advertising-ppc-meta .wp-editor-area {
            height: 150px;
        }
        .editor-container {
            min-height: 150px;
            margin-bottom: 10px;
        }
        .wp-editor-tools {
            margin-bottom: 5px;
        }
    </style>
    
    <div class="advertising-ppc-meta">
        <p>
            <label for="advertising_ppc_header_title"><?php _e('Page Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($header_title, '_advertising_ppc_header_title', array(
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
        </p>
        <p>
            <label for="advertising_ppc_header_subtitle"><?php _e('Page Subtitle', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($header_subtitle, '_advertising_ppc_header_subtitle', array(
                'media_buttons' => false,
                'textarea_rows' => 4,
                'teeny' => true,
                'tinymce' => array(
                    'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink',
                    'toolbar2' => '',
                    'statusbar' => false
                )
            )); 
            ?>
    </p>
    
    <h4><?php _e('Header Badges', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_header_badge_1"><?php _e('Badge 1', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_header_badge_1" name="_advertising_ppc_header_badge_1" value="<?php echo esc_attr($header_badge_1); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_header_badge_2"><?php _e('Badge 2', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_header_badge_2" name="_advertising_ppc_header_badge_2" value="<?php echo esc_attr($header_badge_2); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_header_badge_3"><?php _e('Badge 3', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_header_badge_3" name="_advertising_ppc_header_badge_3" value="<?php echo esc_attr($header_badge_3); ?>" class="widefat">
            </p>
        </div>
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
    <div class="advertising-ppc-meta">
        <p>
            <label for="advertising_ppc_overview_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($overview_title, '_advertising_ppc_overview_title', array(
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
        </p>
        <p>
            <label for="advertising_ppc_overview_content_1"><?php _e('First Paragraph', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($overview_content_1, '_advertising_ppc_overview_content_1', array(
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
        </p>
        <p>
            <label for="advertising_ppc_overview_content_2"><?php _e('Second Paragraph', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($overview_content_2, '_advertising_ppc_overview_content_2', array(
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
        </p>
    
    <h4><?php _e('Overview Stats', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_overview_stat1_number"><?php _e('Stat 1 Number', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat1_number" name="_advertising_ppc_overview_stat1_number" value="<?php echo esc_attr($overview_stat1_number); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_overview_stat1_label"><?php _e('Stat 1 Label', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat1_label" name="_advertising_ppc_overview_stat1_label" value="<?php echo esc_attr($overview_stat1_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_overview_stat2_number"><?php _e('Stat 2 Number', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat2_number" name="_advertising_ppc_overview_stat2_number" value="<?php echo esc_attr($overview_stat2_number); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_overview_stat2_label"><?php _e('Stat 2 Label', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat2_label" name="_advertising_ppc_overview_stat2_label" value="<?php echo esc_attr($overview_stat2_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="advertising_ppc_overview_stat3_number"><?php _e('Stat 3 Number', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat3_number" name="_advertising_ppc_overview_stat3_number" value="<?php echo esc_attr($overview_stat3_number); ?>" class="widefat">
            </p>
            <p>
                <label for="advertising_ppc_overview_stat3_label"><?php _e('Stat 3 Label', 'aimpro'); ?></label><br>
                <input type="text" id="advertising_ppc_overview_stat3_label" name="_advertising_ppc_overview_stat3_label" value="<?php echo esc_attr($overview_stat3_label); ?>" class="widefat">
            </p>
        </div>
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
    <div class="advertising-ppc-meta">
        <p>
            <label for="advertising_ppc_services_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($services_title, '_advertising_ppc_services_title', array(
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
        </p>
        <p>
            <label for="advertising_ppc_services_subtitle"><?php _e('Section Subtitle', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($services_subtitle, '_advertising_ppc_services_subtitle', array(
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
        </p>
        
        <h4><?php _e('Service Items', 'aimpro'); ?></h4>
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                <h4><?php printf(__('Service %d', 'aimpro'), $i); ?></h4>
                <p>
                    <label for="advertising_ppc_service_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                    <?php 
                    wp_editor($services[$i]['title'], '_advertising_ppc_service_title_' . $i, array(
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                </p>
                <p>
                    <label for="advertising_ppc_service_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                    <?php 
                    wp_editor($services[$i]['content'], '_advertising_ppc_service_content_' . $i, array(
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
                </p>
                <p>
                    <label for="advertising_ppc_service_features_<?php echo $i; ?>"><?php _e('Features List', 'aimpro'); ?></label><br>
                    <?php 
                    wp_editor($services[$i]['features'], '_advertising_ppc_service_features_' . $i, array(
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
                </p>
                <p>
                    <label for="advertising_ppc_service_metric_<?php echo $i; ?>"><?php _e('Metric/Result', 'aimpro'); ?></label><br>
                    <input type="text" id="advertising_ppc_service_metric_<?php echo $i; ?>" name="_advertising_ppc_service_metric_<?php echo $i; ?>" value="<?php echo esc_attr($services[$i]['metric']); ?>" class="widefat">
                </p>
                <p>
                    <label for="advertising_ppc_service_link_<?php echo $i; ?>"><?php _e('Learn More Link', 'aimpro'); ?></label><br>
                    <input type="text" id="advertising_ppc_service_link_<?php echo $i; ?>" name="_advertising_ppc_service_link_<?php echo $i; ?>" value="<?php echo esc_attr($services[$i]['link']); ?>" class="widefat">
                    <small><?php _e('Example: /google-ads', 'aimpro'); ?></small>
                </p>
            </div>
        <?php endfor; ?>
    </div>
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
    <div class="advertising-ppc-meta">
        <p>
            <label for="advertising_ppc_case_study_title"><?php _e('Case Study Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($case_study_title, '_advertising_ppc_case_study_title', array(
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
        </p>
        <p>
            <label for="advertising_ppc_case_study_subtitle"><?php _e('Case Study Subtitle', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($case_study_subtitle, '_advertising_ppc_case_study_subtitle', array(
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
        </p>
        <p>
            <label for="advertising_ppc_case_study_intro"><?php _e('Case Study Intro', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($case_study_intro, '_advertising_ppc_case_study_intro', array(
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
        </p>
        
        <h4><?php _e('The Challenge', 'aimpro'); ?></h4>
        <p>
            <label for="advertising_ppc_challenge_title"><?php _e('Challenge Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($challenge_title, '_advertising_ppc_challenge_title', array(
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
        </p>
        <p>
            <label for="advertising_ppc_challenge_list"><?php _e('Challenge List', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($challenge_list, '_advertising_ppc_challenge_list', array(
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
        </p>
        
        <h4><?php _e('The Solution', 'aimpro'); ?></h4>
        <p>
            <label for="advertising_ppc_solution_title"><?php _e('Solution Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($solution_title, '_advertising_ppc_solution_title', array(
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
        </p>
        <p>
            <label for="advertising_ppc_solution_list"><?php _e('Solution List', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($solution_list, '_advertising_ppc_solution_list', array(
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
        </p>
        
        <h4><?php _e('Case Study Metrics', 'aimpro'); ?></h4>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div style="flex: 1; min-width: 200px;">
                    <h4><?php printf(__('Metric %d', 'aimpro'), $i); ?></h4>
                    <p>
                        <label for="advertising_ppc_case_metric_<?php echo $i; ?>_number"><?php _e('Number/Value', 'aimpro'); ?></label><br>
                        <input type="text" id="advertising_ppc_case_metric_<?php echo $i; ?>_number" name="_advertising_ppc_case_metric_<?php echo $i; ?>_number" value="<?php echo esc_attr($case_metrics[$i]['number']); ?>" class="widefat">
                    </p>
                    <p>
                        <label for="advertising_ppc_case_metric_<?php echo $i; ?>_label"><?php _e('Label', 'aimpro'); ?></label><br>
                        <input type="text" id="advertising_ppc_case_metric_<?php echo $i; ?>_label" name="_advertising_ppc_case_metric_<?php echo $i; ?>_label" value="<?php echo esc_attr($case_metrics[$i]['label']); ?>" class="widefat">
                    </p>
                </div>
            <?php endfor; ?>
        </div>
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
    <div class="advertising-ppc-meta">
        <p>
            <label for="advertising_ppc_process_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($process_title, '_advertising_ppc_process_title', array(
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
        </p>
        
        <h4><?php _e('Process Steps', 'aimpro'); ?></h4>
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                <h4><?php printf(__('Step %d', 'aimpro'), $i); ?></h4>
                <p>
                    <label for="advertising_ppc_process_step_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                    <?php 
                    wp_editor($steps[$i]['title'], '_advertising_ppc_process_step_title_' . $i, array(
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                </p>
                <p>
                    <label for="advertising_ppc_process_step_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                    <?php 
                    wp_editor($steps[$i]['content'], '_advertising_ppc_process_step_content_' . $i, array(
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
                </p>
            </div>
        <?php endfor; ?>
    </div>
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
    <div class="advertising-ppc-meta">
        <p>
            <label for="advertising_ppc_platforms_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($platforms_title, '_advertising_ppc_platforms_title', array(
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
        </p>
        
        <h4><?php _e('Platform Categories', 'aimpro'); ?></h4>
        <?php foreach ($platforms as $category => $list) : ?>
            <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                <h4><?php echo esc_html($category); ?></h4>
                <p>
                    <label for="advertising_ppc_platform_list_<?php echo sanitize_title($category); ?>"><?php _e('Platform List', 'aimpro'); ?></label><br>
                    <?php 
                    wp_editor(implode("\n", $list), '_advertising_ppc_platform_list_' . sanitize_title($category), array(
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
                </p>
            </div>
        <?php endforeach; ?>
    </div>
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
    <div class="advertising-ppc-meta">
        <p>
            <label for="advertising_ppc_industry_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($industry_title, '_advertising_ppc_industry_title', array(
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
        </p>
        
        <h4><?php _e('Industry Items', 'aimpro'); ?></h4>
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
                <h4><?php printf(__('Industry %d', 'aimpro'), $i); ?></h4>
                <p>
                    <label for="advertising_ppc_industry_name_<?php echo $i; ?>"><?php _e('Industry Name', 'aimpro'); ?></label><br>
                    <?php 
                    wp_editor($industries[$i]['name'], '_advertising_ppc_industry_name_' . $i, array(
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'tinymce' => array(
                            'toolbar1' => 'bold,italic,underline,strikethrough,|,link,unlink',
                            'toolbar2' => '',
                            'statusbar' => false
                        )
                    )); 
                    ?>
                </p>
                <p>
                    <label for="advertising_ppc_industry_content_<?php echo $i; ?>"><?php _e('Industry Content', 'aimpro'); ?></label><br>
                    <?php 
                    wp_editor($industries[$i]['content'], '_advertising_ppc_industry_content_' . $i, array(
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
                </p>
            </div>
        <?php endfor; ?>
    </div>
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
    <div class="advertising-ppc-meta">
        <p>
            <label for="advertising_ppc_testimonial_quote"><?php _e('Testimonial Quote', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($testimonial_quote, '_advertising_ppc_testimonial_quote', array(
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
        </p>
        <p>
            <label for="advertising_ppc_testimonial_name"><?php _e('Client Name', 'aimpro'); ?></label><br>
            <input type="text" id="advertising_ppc_testimonial_name" name="_advertising_ppc_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" class="widefat">
        </p>
        <p>
            <label for="advertising_ppc_testimonial_title"><?php _e('Client Title/Position', 'aimpro'); ?></label><br>
            <input type="text" id="advertising_ppc_testimonial_title" name="_advertising_ppc_testimonial_title" value="<?php echo esc_attr($testimonial_title); ?>" class="widefat">
        </p>
    </div>
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
    <div class="advertising-ppc-meta">
        <p>
            <label for="advertising_ppc_cta_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($cta_title, '_advertising_ppc_cta_title', array(
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
        </p>
        <p>
            <label for="advertising_ppc_cta_content"><?php _e('Section Content', 'aimpro'); ?></label><br>
            <?php 
            wp_editor($cta_content, '_advertising_ppc_cta_content', array(
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
        </p>
        <p>
            <label for="advertising_ppc_cta_button_1_text"><?php _e('Button 1 Text', 'aimpro'); ?></label><br>
            <input type="text" id="advertising_ppc_cta_button_1_text" name="_advertising_ppc_cta_button_1_text" value="<?php echo esc_attr($cta_button_1_text); ?>" class="widefat">
        </p>
        <p>
            <label for="advertising_ppc_cta_button_2_text"><?php _e('Button 2 Text', 'aimpro'); ?></label><br>
            <input type="text" id="advertising_ppc_cta_button_2_text" name="_advertising_ppc_cta_button_2_text" value="<?php echo esc_attr($cta_button_2_text); ?>" class="widefat">
        </p>
    </div>
    
    <script>
    jQuery(document).ready(function($) {
        // Function to initialize all wp_editors
        function initAllEditors() {
            if (typeof tinyMCE !== 'undefined') {
                // Initialize any TinyMCE editors that may not have been initialized
                $('textarea[id*="advertising_ppc"]').each(function() {
                    var editorId = $(this).attr('id');
                    if (editorId && !tinyMCE.get(editorId)) {
                        try {
                            tinyMCE.init({
                                selector: '#' + editorId,
                                menubar: false,
                                toolbar: 'bold italic underline strikethrough | bullist numlist | link unlink',
                                statusbar: false,
                                height: 150,
                                setup: function(editor) {
                                    editor.on('change', function() {
                                        editor.save();
                                    });
                                }
                            });
                        } catch(e) {
                            console.log('Could not initialize editor: ' + editorId);
                        }
                    }
                });
            }
        }

        // Initialize editors on page load
        setTimeout(function() {
            initAllEditors();
        }, 1000);

        // Re-initialize when meta boxes are loaded/changed
        $(document).on('postbox-toggled', function() {
            setTimeout(function() {
                initAllEditors();
            }, 500);
        });
    });
    </script>
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
    
    // Check if user has permissions to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Only save for pages
    if (get_post_type($post_id) !== 'page') {
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
            // Use wp_kses_post for rich text fields (title and subtitle), sanitize_text_field for badges
            if (in_array($field, ['_advertising_ppc_header_title', '_advertising_ppc_header_subtitle'])) {
                update_post_meta($post_id, $field, wp_kses_post(wp_unslash($_POST[$field])));
            } else {
                update_post_meta($post_id, $field, sanitize_text_field(wp_unslash($_POST[$field])));
            }
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
            // Use wp_kses_post for rich text fields, sanitize_text_field for numbers and labels
            if (in_array($field, ['_advertising_ppc_overview_title', '_advertising_ppc_overview_content_1', '_advertising_ppc_overview_content_2'])) {
                update_post_meta($post_id, $field, wp_kses_post(wp_unslash($_POST[$field])));
            } else {
                update_post_meta($post_id, $field, sanitize_text_field(wp_unslash($_POST[$field])));
            }
        }
    }
    
    // Save Services Section fields
    $services_title = isset($_POST['_advertising_ppc_services_title']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_services_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_services_title', $services_title);
    
    $services_subtitle = isset($_POST['_advertising_ppc_services_subtitle']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_services_subtitle'])) : '';
    update_post_meta($post_id, '_advertising_ppc_services_subtitle', $services_subtitle);
    
    for ($i = 1; $i <= 6; $i++) {
        $service_title = isset($_POST["_advertising_ppc_service_title_{$i}"]) ? wp_kses_post(wp_unslash($_POST["_advertising_ppc_service_title_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_title_{$i}", $service_title);
        
        $service_content = isset($_POST["_advertising_ppc_service_content_{$i}"]) ? wp_kses_post(wp_unslash($_POST["_advertising_ppc_service_content_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_content_{$i}", $service_content);
        
        $service_features = isset($_POST["_advertising_ppc_service_features_{$i}"]) ? wp_kses_post(wp_unslash($_POST["_advertising_ppc_service_features_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_features_{$i}", $service_features);
        
        $service_metric = isset($_POST["_advertising_ppc_service_metric_{$i}"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_service_metric_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_metric_{$i}", $service_metric);
        
        $service_link = isset($_POST["_advertising_ppc_service_link_{$i}"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_service_link_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_service_link_{$i}", $service_link);
    }
    
    // Save Case Study Section fields
    $case_study_title = isset($_POST['_advertising_ppc_case_study_title']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_case_study_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_case_study_title', $case_study_title);
    
    $case_study_subtitle = isset($_POST['_advertising_ppc_case_study_subtitle']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_case_study_subtitle'])) : '';
    update_post_meta($post_id, '_advertising_ppc_case_study_subtitle', $case_study_subtitle);
    
    $case_study_intro = isset($_POST['_advertising_ppc_case_study_intro']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_case_study_intro'])) : '';
    update_post_meta($post_id, '_advertising_ppc_case_study_intro', $case_study_intro);
    
    $challenge_title = isset($_POST['_advertising_ppc_challenge_title']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_challenge_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_challenge_title', $challenge_title);
    
    $challenge_list = isset($_POST['_advertising_ppc_challenge_list']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_challenge_list'])) : '';
    update_post_meta($post_id, '_advertising_ppc_challenge_list', $challenge_list);
    
    $solution_title = isset($_POST['_advertising_ppc_solution_title']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_solution_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_solution_title', $solution_title);
    
    $solution_list = isset($_POST['_advertising_ppc_solution_list']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_solution_list'])) : '';
    update_post_meta($post_id, '_advertising_ppc_solution_list', $solution_list);
    
    for ($i = 1; $i <= 4; $i++) {
        $case_metric_number = isset($_POST["_advertising_ppc_case_metric_{$i}_number"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_case_metric_{$i}_number"])) : '';
        update_post_meta($post_id, "_advertising_ppc_case_metric_{$i}_number", $case_metric_number);
        
        $case_metric_label = isset($_POST["_advertising_ppc_case_metric_{$i}_label"]) ? sanitize_text_field(wp_unslash($_POST["_advertising_ppc_case_metric_{$i}_label"])) : '';
        update_post_meta($post_id, "_advertising_ppc_case_metric_{$i}_label", $case_metric_label);
    }
    
    // Save Process Section fields
    $process_title = isset($_POST['_advertising_ppc_process_title']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_process_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_process_title', $process_title);
    
    for ($i = 1; $i <= 5; $i++) {
        $process_step_title = isset($_POST["_advertising_ppc_process_step_title_{$i}"]) ? wp_kses_post(wp_unslash($_POST["_advertising_ppc_process_step_title_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_process_step_title_{$i}", $process_step_title);
        
        $process_step_content = isset($_POST["_advertising_ppc_process_step_content_{$i}"]) ? wp_kses_post(wp_unslash($_POST["_advertising_ppc_process_step_content_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_process_step_content_{$i}", $process_step_content);
    }
    
    // Save Platforms Section fields
    $platforms_title = isset($_POST['_advertising_ppc_platforms_title']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_platforms_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_platforms_title', $platforms_title);
    
    $platform_categories = array('Search Advertising', 'Social Media Advertising', 'E-commerce Advertising', 'Display & Video');
    foreach ($platform_categories as $category) {
        $platform_list = isset($_POST["_advertising_ppc_platform_list_" . sanitize_title($category)]) ? wp_kses_post(wp_unslash($_POST["_advertising_ppc_platform_list_" . sanitize_title($category)])) : '';
        update_post_meta($post_id, "_advertising_ppc_platform_list_" . sanitize_title($category), $platform_list);
    }
    
    // Save Industries Section fields
    $industry_title = isset($_POST['_advertising_ppc_industry_title']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_industry_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_industry_title', $industry_title);
    
    for ($i = 1; $i <= 6; $i++) {
        $industry_name = isset($_POST["_advertising_ppc_industry_name_{$i}"]) ? wp_kses_post(wp_unslash($_POST["_advertising_ppc_industry_name_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_industry_name_{$i}", $industry_name);
        
        $industry_content = isset($_POST["_advertising_ppc_industry_content_{$i}"]) ? wp_kses_post(wp_unslash($_POST["_advertising_ppc_industry_content_{$i}"])) : '';
        update_post_meta($post_id, "_advertising_ppc_industry_content_{$i}", $industry_content);
    }
    
    // Save Testimonial Section fields
    $testimonial_quote = isset($_POST['_advertising_ppc_testimonial_quote']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_testimonial_quote'])) : '';
    update_post_meta($post_id, '_advertising_ppc_testimonial_quote', $testimonial_quote);
    
    $testimonial_name = isset($_POST['_advertising_ppc_testimonial_name']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_testimonial_name'])) : '';
    update_post_meta($post_id, '_advertising_ppc_testimonial_name', $testimonial_name);
    
    $testimonial_title = isset($_POST['_advertising_ppc_testimonial_title']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_testimonial_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_testimonial_title', $testimonial_title);
    
    // Save CTA Section fields
    $cta_title = isset($_POST['_advertising_ppc_cta_title']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_cta_title'])) : '';
    update_post_meta($post_id, '_advertising_ppc_cta_title', $cta_title);
    
    $cta_content = isset($_POST['_advertising_ppc_cta_content']) ? wp_kses_post(wp_unslash($_POST['_advertising_ppc_cta_content'])) : '';
    update_post_meta($post_id, '_advertising_ppc_cta_content', $cta_content);
    
    $cta_button_1_text = isset($_POST['_advertising_ppc_cta_button_1_text']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_cta_button_1_text'])) : '';
    update_post_meta($post_id, '_advertising_ppc_cta_button_1_text', $cta_button_1_text);
    
    $cta_button_2_text = isset($_POST['_advertising_ppc_cta_button_2_text']) ? sanitize_text_field(wp_unslash($_POST['_advertising_ppc_cta_button_2_text'])) : '';
    update_post_meta($post_id, '_advertising_ppc_cta_button_2_text', $cta_button_2_text);
}
add_action('save_post', 'aimpro_save_advertising_ppc_meta_boxes');
