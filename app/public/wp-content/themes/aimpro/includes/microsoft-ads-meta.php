<?php
/**
 * Microsoft Ads Meta Fields
 *
 * @package Aimpro
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set default values for Microsoft Ads page meta fields
 * This ensures fields are pre-populated with the frontend content
 */
function aimpro_get_microsoft_ads_default_values() {
    return array(
        // Hero Section
        'hero_title' => 'Microsoft/Bing Ads Management',
        'hero_subtitle' => 'Tap into the less competitive, higher-converting Bing search network to reach quality prospects and achieve better ROI with lower cost-per-click rates.',
        
        // Hero Stats
        'hero_stat1_number' => '45%',
        'hero_stat1_label' => 'Lower Average CPC',
        'hero_stat2_number' => '320%',
        'hero_stat2_label' => 'ROI Improvement',
        'hero_stat3_number' => '25%',
        'hero_stat3_label' => 'Additional Market Share',
        
        // Hero CTAs
        'hero_cta1_text' => 'Start Bing Campaigns',
        'hero_cta2_text' => 'View Packages',
        
        // Service Overview Section
        'overview_title' => 'Strategic Microsoft/Bing Ads Management',
        'overview_content' => 'While Google dominates search, Microsoft\'s Bing network (including Yahoo and AOL) represents a significant opportunity with less competition, higher-income demographics, and often better conversion rates. Our Bing Ads specialists help you capitalize on this underutilized platform.',
        
        // Service Items (6 services)
        'service_title_1' => 'Bing Search Campaigns',
        'service_content_1' => 'Strategic search advertising on Bing, Yahoo, and partner networks with optimised bidding and targeting strategies.',
        'service_icon_1' => 'fab fa-microsoft',
        
        'service_title_2' => 'Microsoft Shopping Ads',
        'service_content_2' => 'Product listing ads that showcase your inventory directly in Bing search results with competitive pricing advantages.',
        'service_icon_2' => 'fas fa-shopping-bag',
        
        'service_title_3' => 'Audience Targeting',
        'service_content_3' => 'Leverage Microsoft\'s LinkedIn data integration for precise B2B targeting and professional demographic reach.',
        'service_icon_3' => 'fas fa-users',
        
        'service_title_4' => 'Campaign optimisation',
        'service_content_4' => 'Continuous improvement through automated bidding, ad testing, and performance analysis specific to Bing\'s algorithm.',
        'service_icon_4' => 'fas fa-sync-alt',
          'service_title_5' => 'Conversion Tracking',
        'service_content_5' => 'Comprehensive reporting and insights comparing Bing performance to other platforms for optimal budget allocation.',
        'service_icon_5' => 'fas fa-chart-line',
        
        'service_title_6' => 'Google Ads Import',
        'service_content_6' => 'Seamless migration and optimisation of existing Google Ads campaigns to maximise Bing network potential.',
        'service_icon_6' => 'fas fa-download',
        
        // Case Study Section
        'case_study_title' => 'Case Study: B2B Software Success',        'case_study_intro' => 'How we helped a B2B software company achieve 320% ROI improvement by expanding to Microsoft/Bing Ads alongside their existing Google campaigns.',
        'case_study_challenge' => 'A growing B2B software company was experiencing rising costs and increased competition on Google Ads. They needed to diversify their paid search strategy to maintain growth while controlling customer acquisition costs in their competitive market.',
        'case_study_solution' => "Migrated and optimised existing Google campaigns for Bing's unique algorithm\nImplemented LinkedIn profile targeting for B2B prospect reach\nCreated Bing-specific ad copy optimised for lower competition keywords\nEstablished Microsoft Shopping campaigns for product visibility\nDeveloped cross-platform attribution and budget optimisation strategy",
        
        // Case Study Results
        'case_result_1_number' => '320%',
        'case_result_1_label' => 'ROI Improvement',
        'case_result_2_number' => '45%',
        'case_result_2_label' => 'Lower Cost Per Click',
        'case_result_3_number' => '185%',
        'case_result_3_label' => 'Lead Volume Increase',
        'case_result_4_number' => '25%',
        'case_result_4_label' => 'Additional Market Coverage',
        
        // Process Section
        'process_title' => 'Our Bing Ads Process',
        
        'process_step_number_1' => '1',
        'process_step_title_1' => 'Platform Analysis & Setup',
        'process_step_content_1' => 'analyse your existing search campaigns and set up Microsoft Ads account with proper tracking and conversion goals.',
        
        'process_step_number_2' => '2',
        'process_step_title_2' => 'Campaign Migration & optimisation',
        'process_step_content_2' => 'Import and optimise existing campaigns for Bing\'s unique algorithm and audience characteristics.',
        
        'process_step_number_3' => '3',
        'process_step_title_3' => 'Keyword Research & Expansion',
        'process_step_content_3' => 'Identify Bing-specific opportunities with lower competition and higher conversion potential.',
        
        'process_step_number_4' => '4',
        'process_step_title_4' => 'Launch & Monitoring',
        'process_step_content_4' => 'Deploy campaigns with careful monitoring and rapid optimisation based on Bing-specific performance patterns.',
        
        'process_step_number_5' => '5',
        'process_step_title_5' => 'Reporting & Scaling',
        'process_step_content_5' => 'Provide detailed performance reports and scale successful campaigns while maintaining cost efficiency.',
        
        // Tools Section
        'tools_title' => 'Microsoft Ads Tools & Technologies',
        
        'tool_title_1' => 'Microsoft Ads Platform',
        'tool_content_1' => 'Advanced campaign management through Microsoft\'s comprehensive advertising platform with unique B2B features.',
        'tool_icon_1' => 'fab fa-microsoft',
        
        'tool_title_2' => 'Bing Webmaster Tools',
        'tool_content_2' => 'In-depth keyword research and search insights specific to the Bing search network.',
        'tool_icon_2' => 'fas fa-search',
        
        'tool_title_3' => 'UET Tracking',
        'tool_content_3' => 'Universal Event Tracking for accurate conversion measurement and audience building.',
        'tool_icon_3' => 'fas fa-chart-bar',
        
        'tool_title_4' => 'LinkedIn Integration',
        'tool_content_4' => 'Professional targeting capabilities through Microsoft\'s integration with LinkedIn data.',
        'tool_icon_4' => 'fab fa-linkedin',
        
        // Benefits Section (White Label section)
        'benefits_title' => 'Why Choose Microsoft/Bing Ads?',
        
        'benefit_title_1' => 'Less Competition',
        'benefit_content_1' => 'Lower competition means better ad positions and reduced costs compared to Google Ads.',
        'benefit_icon_1' => 'fas fa-trophy',
        
        'benefit_title_2' => 'Higher Income Demographics',
        'benefit_content_2' => 'Bing users typically have higher household incomes and stronger purchasing power.',
        'benefit_icon_2' => 'fas fa-chart-line-up',
        
        'benefit_title_3' => 'Better B2B Reach',
        'benefit_content_3' => 'Superior targeting for business professionals through LinkedIn data integration.',
        'benefit_icon_3' => 'fas fa-briefcase',
        
        'benefit_title_4' => 'Import from Google',
        'benefit_content_4' => 'Easy campaign migration from Google Ads with automated optimisation for Bing.',
        'benefit_icon_4' => 'fas fa-download',
        
        'benefit_title_5' => 'Lower CPCs',
        'benefit_content_5' => 'Typically 30-50% lower cost-per-click rates compared to Google Ads.',
        'benefit_icon_5' => 'fas fa-dollar-sign',
        
        'benefit_title_6' => 'Quality Traffic',
        'benefit_content_6' => 'Higher-intent users with better conversion rates and longer session durations.',
        'benefit_icon_6' => 'fas fa-users',
        
        // Testimonial Section
        'testimonial_quote' => 'Switching to Microsoft Ads was the best decision we made. Aimpro helped us achieve 45% lower costs and 320% better ROI compared to our Google campaigns. The professional audience targeting is incredible.',
        'testimonial_name' => 'David Chen',
        'testimonial_title' => 'Marketing Director, TechFlow Solutions',
        
        // CTA Section
        'cta_title' => 'Ready to Tap Into Microsoft\'s Search Network?',
        'cta_content' => 'Get a free Microsoft Ads audit and discover untapped opportunities with lower competition and higher-converting traffic.',
        'cta_button_1_text' => 'Get Free Bing Ads Audit',
        'cta_button_2_text' => 'View All Services',
    );
}

/**
 * Register Microsoft Ads meta boxes
 */
function aimpro_register_microsoft_ads_meta_boxes() {
    // Only show these meta boxes on the Microsoft Ads page template
    $screen = get_current_screen();
    if ($screen->id == 'page' && isset($_GET['post'])) {
        $template = get_post_meta($_GET['post'], '_wp_page_template', true);
        if ($template != 'page-microsoft-ads.php') {
            return;
        }
    }
    
    add_meta_box(
        'microsoft_ads_hero_section',
        __('Hero Section', 'aimpro'),
        'aimpro_microsoft_ads_hero_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'microsoft_ads_overview_section',
        __('Service Overview Section', 'aimpro'),
        'aimpro_microsoft_ads_overview_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'microsoft_ads_services_section',
        __('Services Section', 'aimpro'),
        'aimpro_microsoft_ads_services_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'microsoft_ads_case_study_section',
        __('Case Study Section', 'aimpro'),
        'aimpro_microsoft_ads_case_study_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'microsoft_ads_process_section',
        __('Process Section', 'aimpro'),
        'aimpro_microsoft_ads_process_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'microsoft_ads_tools_section',
        __('Tools Section', 'aimpro'),
        'aimpro_microsoft_ads_tools_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'microsoft_ads_benefits_section',
        __('Benefits Section', 'aimpro'),
        'aimpro_microsoft_ads_benefits_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'microsoft_ads_testimonial_section',
        __('Testimonial Section', 'aimpro'),
        'aimpro_microsoft_ads_testimonial_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'microsoft_ads_cta_section',
        __('CTA Section', 'aimpro'),
        'aimpro_microsoft_ads_cta_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes_page', 'aimpro_register_microsoft_ads_meta_boxes');

/**
 * Hero Section Callback
 */
function aimpro_microsoft_ads_hero_callback($post) {
    wp_nonce_field(basename(__FILE__), 'microsoft_ads_hero_nonce');
    
    $defaults = aimpro_get_microsoft_ads_default_values();
    
    // Get saved values or use defaults if empty
    $hero_title = get_post_meta($post->ID, '_microsoft_ads_hero_title', true);
    if (empty($hero_title)) $hero_title = $defaults['hero_title'];
    
    $hero_subtitle = get_post_meta($post->ID, '_microsoft_ads_hero_subtitle', true);
    if (empty($hero_subtitle)) $hero_subtitle = $defaults['hero_subtitle'];
    
    // Hero Stats
    $hero_stat1_number = get_post_meta($post->ID, '_microsoft_ads_hero_stat1_number', true);
    if (empty($hero_stat1_number)) $hero_stat1_number = $defaults['hero_stat1_number'];
    
    $hero_stat1_label = get_post_meta($post->ID, '_microsoft_ads_hero_stat1_label', true);
    if (empty($hero_stat1_label)) $hero_stat1_label = $defaults['hero_stat1_label'];
    
    $hero_stat2_number = get_post_meta($post->ID, '_microsoft_ads_hero_stat2_number', true);
    if (empty($hero_stat2_number)) $hero_stat2_number = $defaults['hero_stat2_number'];
    
    $hero_stat2_label = get_post_meta($post->ID, '_microsoft_ads_hero_stat2_label', true);
    if (empty($hero_stat2_label)) $hero_stat2_label = $defaults['hero_stat2_label'];
    
    $hero_stat3_number = get_post_meta($post->ID, '_microsoft_ads_hero_stat3_number', true);
    if (empty($hero_stat3_number)) $hero_stat3_number = $defaults['hero_stat3_number'];
    
    $hero_stat3_label = get_post_meta($post->ID, '_microsoft_ads_hero_stat3_label', true);
    if (empty($hero_stat3_label)) $hero_stat3_label = $defaults['hero_stat3_label'];
    
    // Hero CTAs
    $hero_cta1_text = get_post_meta($post->ID, '_microsoft_ads_hero_cta1_text', true);
    if (empty($hero_cta1_text)) $hero_cta1_text = $defaults['hero_cta1_text'];
    
    $hero_cta2_text = get_post_meta($post->ID, '_microsoft_ads_hero_cta2_text', true);
    if (empty($hero_cta2_text)) $hero_cta2_text = $defaults['hero_cta2_text'];
    
    // Output fields
    ?>
    <p>
        <label for="microsoft_ads_hero_title"><?php _e('Hero Title', 'aimpro'); ?></label><br>
        <input type="text" id="microsoft_ads_hero_title" name="microsoft_ads_hero_title" value="<?php echo esc_attr($hero_title); ?>" class="widefat">
    </p>
    <p>
        <label for="microsoft_ads_hero_subtitle"><?php _e('Hero Subtitle', 'aimpro'); ?></label><br>
        <textarea id="microsoft_ads_hero_subtitle" name="microsoft_ads_hero_subtitle" class="widefat" rows="4"><?php echo esc_textarea($hero_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Hero Stats', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="microsoft_ads_hero_stat1_number"><?php _e('Stat 1 Number', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_hero_stat1_number" name="microsoft_ads_hero_stat1_number" value="<?php echo esc_attr($hero_stat1_number); ?>" class="widefat">
            </p>
            <p>
                <label for="microsoft_ads_hero_stat1_label"><?php _e('Stat 1 Label', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_hero_stat1_label" name="microsoft_ads_hero_stat1_label" value="<?php echo esc_attr($hero_stat1_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="microsoft_ads_hero_stat2_number"><?php _e('Stat 2 Number', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_hero_stat2_number" name="microsoft_ads_hero_stat2_number" value="<?php echo esc_attr($hero_stat2_number); ?>" class="widefat">
            </p>
            <p>
                <label for="microsoft_ads_hero_stat2_label"><?php _e('Stat 2 Label', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_hero_stat2_label" name="microsoft_ads_hero_stat2_label" value="<?php echo esc_attr($hero_stat2_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="microsoft_ads_hero_stat3_number"><?php _e('Stat 3 Number', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_hero_stat3_number" name="microsoft_ads_hero_stat3_number" value="<?php echo esc_attr($hero_stat3_number); ?>" class="widefat">
            </p>
            <p>
                <label for="microsoft_ads_hero_stat3_label"><?php _e('Stat 3 Label', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_hero_stat3_label" name="microsoft_ads_hero_stat3_label" value="<?php echo esc_attr($hero_stat3_label); ?>" class="widefat">
            </p>
        </div>
    </div>
    
    <h4><?php _e('Hero CTAs', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="microsoft_ads_hero_cta1_text"><?php _e('Primary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_hero_cta1_text" name="microsoft_ads_hero_cta1_text" value="<?php echo esc_attr($hero_cta1_text); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="microsoft_ads_hero_cta2_text"><?php _e('Secondary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_hero_cta2_text" name="microsoft_ads_hero_cta2_text" value="<?php echo esc_attr($hero_cta2_text); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Service Overview Section Callback
 */
function aimpro_microsoft_ads_overview_callback($post) {
    wp_nonce_field(basename(__FILE__), 'microsoft_ads_overview_nonce');
    
    $defaults = aimpro_get_microsoft_ads_default_values();
    
    $overview_title = get_post_meta($post->ID, '_microsoft_ads_overview_title', true);
    if (empty($overview_title)) $overview_title = $defaults['overview_title'];
    
    $overview_content = get_post_meta($post->ID, '_microsoft_ads_overview_content', true);
    if (empty($overview_content)) $overview_content = $defaults['overview_content'];
    
    ?>
    <p>
        <label for="microsoft_ads_overview_title"><?php _e('Overview Title', 'aimpro'); ?></label><br>
        <input type="text" id="microsoft_ads_overview_title" name="microsoft_ads_overview_title" value="<?php echo esc_attr($overview_title); ?>" class="widefat">
    </p>
    <p>
        <label for="microsoft_ads_overview_content"><?php _e('Overview Content', 'aimpro'); ?></label><br>
        <textarea id="microsoft_ads_overview_content" name="microsoft_ads_overview_content" class="widefat" rows="5"><?php echo esc_textarea($overview_content); ?></textarea>
    </p>
    <?php
}

/**
 * Services Section Callback
 */
function aimpro_microsoft_ads_services_callback($post) {
    wp_nonce_field(basename(__FILE__), 'microsoft_ads_services_nonce');
    
    $defaults = aimpro_get_microsoft_ads_default_values();
    
    ?>
    <p><strong><?php _e('Manage the 6 service items below:', 'aimpro'); ?></strong></p>
    
    <?php for($i = 1; $i <= 6; $i++) : 
        $service_title = get_post_meta($post->ID, "_microsoft_ads_service_title_{$i}", true);
        if (empty($service_title)) $service_title = $defaults["service_title_{$i}"];
        
        $service_content = get_post_meta($post->ID, "_microsoft_ads_service_content_{$i}", true);
        if (empty($service_content)) $service_content = $defaults["service_content_{$i}"];
        
        $service_icon = get_post_meta($post->ID, "_microsoft_ads_service_icon_{$i}", true);
        if (empty($service_icon)) $service_icon = $defaults["service_icon_{$i}"];
    ?>
    
    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0;">
        <h4><?php echo sprintf(__('Service %d', 'aimpro'), $i); ?></h4>
        <p>
            <label for="microsoft_ads_service_title_<?php echo $i; ?>"><?php _e('Service Title', 'aimpro'); ?></label><br>
            <input type="text" id="microsoft_ads_service_title_<?php echo $i; ?>" name="microsoft_ads_service_title_<?php echo $i; ?>" value="<?php echo esc_attr($service_title); ?>" class="widefat">
        </p>
        <p>
            <label for="microsoft_ads_service_content_<?php echo $i; ?>"><?php _e('Service Content', 'aimpro'); ?></label><br>
            <textarea id="microsoft_ads_service_content_<?php echo $i; ?>" name="microsoft_ads_service_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($service_content); ?></textarea>
        </p>
        <p>
            <label for="microsoft_ads_service_icon_<?php echo $i; ?>"><?php _e('Service Icon (FontAwesome class)', 'aimpro'); ?></label><br>
            <input type="text" id="microsoft_ads_service_icon_<?php echo $i; ?>" name="microsoft_ads_service_icon_<?php echo $i; ?>" value="<?php echo esc_attr($service_icon); ?>" class="widefat" placeholder="e.g., fas fa-chart-line">
        </p>
    </div>
    
    <?php endfor; ?>
    <?php
}

/**
 * Case Study Section Callback
 */
function aimpro_microsoft_ads_case_study_callback($post) {
    wp_nonce_field(basename(__FILE__), 'microsoft_ads_case_study_nonce');
    
    $defaults = aimpro_get_microsoft_ads_default_values();
    
    $case_study_title = get_post_meta($post->ID, '_microsoft_ads_case_study_title', true);
    if (empty($case_study_title)) $case_study_title = $defaults['case_study_title'];
    
    $case_study_intro = get_post_meta($post->ID, '_microsoft_ads_case_study_intro', true);
    if (empty($case_study_intro)) $case_study_intro = $defaults['case_study_intro'];
    
    $case_study_challenge = get_post_meta($post->ID, '_microsoft_ads_case_study_challenge', true);
    if (empty($case_study_challenge)) $case_study_challenge = $defaults['case_study_challenge'];
    
    $case_study_solution = get_post_meta($post->ID, '_microsoft_ads_case_study_solution', true);
    if (empty($case_study_solution)) $case_study_solution = $defaults['case_study_solution'];
    
    ?>
    <p>
        <label for="microsoft_ads_case_study_title"><?php _e('Case Study Title', 'aimpro'); ?></label><br>
        <input type="text" id="microsoft_ads_case_study_title" name="microsoft_ads_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" class="widefat">
    </p>
    <p>
        <label for="microsoft_ads_case_study_intro"><?php _e('Case Study Intro', 'aimpro'); ?></label><br>
        <textarea id="microsoft_ads_case_study_intro" name="microsoft_ads_case_study_intro" class="widefat" rows="3"><?php echo esc_textarea($case_study_intro); ?></textarea>
    </p>
    <p>
        <label for="microsoft_ads_case_study_challenge"><?php _e('The Challenge', 'aimpro'); ?></label><br>
        <textarea id="microsoft_ads_case_study_challenge" name="microsoft_ads_case_study_challenge" class="widefat" rows="4"><?php echo esc_textarea($case_study_challenge); ?></textarea>
    </p>
    <p>
        <label for="microsoft_ads_case_study_solution"><?php _e('Our Solution (one per line)', 'aimpro'); ?></label><br>
        <textarea id="microsoft_ads_case_study_solution" name="microsoft_ads_case_study_solution" class="widefat" rows="5"><?php echo esc_textarea($case_study_solution); ?></textarea>
    </p>
    
    <h4><?php _e('Case Study Results', 'aimpro'); ?></h4>
    <?php for($i = 1; $i <= 4; $i++) : 
        $result_number = get_post_meta($post->ID, "_microsoft_ads_case_result_{$i}_number", true);
        if (empty($result_number)) $result_number = $defaults["case_result_{$i}_number"];
        
        $result_label = get_post_meta($post->ID, "_microsoft_ads_case_result_{$i}_label", true);
        if (empty($result_label)) $result_label = $defaults["case_result_{$i}_label"];
    ?>
    <div style="display: inline-block; width: 48%; margin-right: 2%; margin-bottom: 10px;">
        <label for="microsoft_ads_case_result_<?php echo $i; ?>_number"><?php echo sprintf(__('Result %d Number', 'aimpro'), $i); ?></label><br>
        <input type="text" id="microsoft_ads_case_result_<?php echo $i; ?>_number" name="microsoft_ads_case_result_<?php echo $i; ?>_number" value="<?php echo esc_attr($result_number); ?>" class="widefat">
        <br><br>
        <label for="microsoft_ads_case_result_<?php echo $i; ?>_label"><?php echo sprintf(__('Result %d Label', 'aimpro'), $i); ?></label><br>
        <input type="text" id="microsoft_ads_case_result_<?php echo $i; ?>_label" name="microsoft_ads_case_result_<?php echo $i; ?>_label" value="<?php echo esc_attr($result_label); ?>" class="widefat">
    </div>
    <?php endfor; ?>
    <?php
}

/**
 * Process Section Callback
 */
function aimpro_microsoft_ads_process_callback($post) {
    wp_nonce_field(basename(__FILE__), 'microsoft_ads_process_nonce');
    
    $defaults = aimpro_get_microsoft_ads_default_values();
    
    $process_title = get_post_meta($post->ID, '_microsoft_ads_process_title', true);
    if (empty($process_title)) $process_title = $defaults['process_title'];
    
    ?>
    <p>
        <label for="microsoft_ads_process_title"><?php _e('Process Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="microsoft_ads_process_title" name="microsoft_ads_process_title" value="<?php echo esc_attr($process_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Process Steps', 'aimpro'); ?></h4>
    <?php for($i = 1; $i <= 5; $i++) : 
        $step_number = get_post_meta($post->ID, "_microsoft_ads_process_step_number_{$i}", true);
        if (empty($step_number)) $step_number = $defaults["process_step_number_{$i}"];
        
        $step_title = get_post_meta($post->ID, "_microsoft_ads_process_step_title_{$i}", true);
        if (empty($step_title)) $step_title = $defaults["process_step_title_{$i}"];
        
        $step_content = get_post_meta($post->ID, "_microsoft_ads_process_step_content_{$i}", true);
        if (empty($step_content)) $step_content = $defaults["process_step_content_{$i}"];
    ?>
    
    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0;">
        <h4><?php echo sprintf(__('Process Step %d', 'aimpro'), $i); ?></h4>
        <div style="display: flex; gap: 20px;">
            <div style="flex: 0 0 60px;">
                <label for="microsoft_ads_process_step_number_<?php echo $i; ?>"><?php _e('Number', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_process_step_number_<?php echo $i; ?>" name="microsoft_ads_process_step_number_<?php echo $i; ?>" value="<?php echo esc_attr($step_number); ?>" class="widefat">
            </div>
            <div style="flex: 1;">
                <label for="microsoft_ads_process_step_title_<?php echo $i; ?>"><?php _e('Step Title', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_process_step_title_<?php echo $i; ?>" name="microsoft_ads_process_step_title_<?php echo $i; ?>" value="<?php echo esc_attr($step_title); ?>" class="widefat">
            </div>
        </div>
        <p>
            <label for="microsoft_ads_process_step_content_<?php echo $i; ?>"><?php _e('Step Content', 'aimpro'); ?></label><br>
            <textarea id="microsoft_ads_process_step_content_<?php echo $i; ?>" name="microsoft_ads_process_step_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($step_content); ?></textarea>
        </p>
    </div>
    
    <?php endfor; ?>
    <?php
}

/**
 * Tools Section Callback
 */
function aimpro_microsoft_ads_tools_callback($post) {
    wp_nonce_field(basename(__FILE__), 'microsoft_ads_tools_nonce');
    
    $defaults = aimpro_get_microsoft_ads_default_values();
    
    $tools_title = get_post_meta($post->ID, '_microsoft_ads_tools_title', true);
    if (empty($tools_title)) $tools_title = $defaults['tools_title'];
    
    ?>
    <p>
        <label for="microsoft_ads_tools_title"><?php _e('Tools Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="microsoft_ads_tools_title" name="microsoft_ads_tools_title" value="<?php echo esc_attr($tools_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Tools (4 items)', 'aimpro'); ?></h4>
    <?php for($i = 1; $i <= 4; $i++) : 
        $tool_title = get_post_meta($post->ID, "_microsoft_ads_tool_title_{$i}", true);
        if (empty($tool_title)) $tool_title = $defaults["tool_title_{$i}"];
        
        $tool_content = get_post_meta($post->ID, "_microsoft_ads_tool_content_{$i}", true);
        if (empty($tool_content)) $tool_content = $defaults["tool_content_{$i}"];
        
        $tool_icon = get_post_meta($post->ID, "_microsoft_ads_tool_icon_{$i}", true);
        if (empty($tool_icon)) $tool_icon = $defaults["tool_icon_{$i}"];
    ?>
    
    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0;">
        <h4><?php echo sprintf(__('Tool %d', 'aimpro'), $i); ?></h4>
        <p>
            <label for="microsoft_ads_tool_title_<?php echo $i; ?>"><?php _e('Tool Title', 'aimpro'); ?></label><br>
            <input type="text" id="microsoft_ads_tool_title_<?php echo $i; ?>" name="microsoft_ads_tool_title_<?php echo $i; ?>" value="<?php echo esc_attr($tool_title); ?>" class="widefat">
        </p>
        <p>
            <label for="microsoft_ads_tool_content_<?php echo $i; ?>"><?php _e('Tool Content', 'aimpro'); ?></label><br>
            <textarea id="microsoft_ads_tool_content_<?php echo $i; ?>" name="microsoft_ads_tool_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($tool_content); ?></textarea>
        </p>
        <p>
            <label for="microsoft_ads_tool_icon_<?php echo $i; ?>"><?php _e('Tool Icon (FontAwesome class)', 'aimpro'); ?></label><br>
            <input type="text" id="microsoft_ads_tool_icon_<?php echo $i; ?>" name="microsoft_ads_tool_icon_<?php echo $i; ?>" value="<?php echo esc_attr($tool_icon); ?>" class="widefat" placeholder="e.g., fas fa-chart-line">
        </p>
    </div>
    
    <?php endfor; ?>
    <?php
}

/**
 * Benefits Section Callback
 */
function aimpro_microsoft_ads_benefits_callback($post) {
    wp_nonce_field(basename(__FILE__), 'microsoft_ads_benefits_nonce');
    
    $defaults = aimpro_get_microsoft_ads_default_values();
    
    $benefits_title = get_post_meta($post->ID, '_microsoft_ads_benefits_title', true);
    if (empty($benefits_title)) $benefits_title = $defaults['benefits_title'];
    
    ?>
    <p>
        <label for="microsoft_ads_benefits_title"><?php _e('Benefits Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="microsoft_ads_benefits_title" name="microsoft_ads_benefits_title" value="<?php echo esc_attr($benefits_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Benefits (6 items)', 'aimpro'); ?></h4>
    <?php for($i = 1; $i <= 6; $i++) : 
        $benefit_title = get_post_meta($post->ID, "_microsoft_ads_benefit_title_{$i}", true);
        if (empty($benefit_title)) $benefit_title = $defaults["benefit_title_{$i}"];
        
        $benefit_content = get_post_meta($post->ID, "_microsoft_ads_benefit_content_{$i}", true);
        if (empty($benefit_content)) $benefit_content = $defaults["benefit_content_{$i}"];
        
        $benefit_icon = get_post_meta($post->ID, "_microsoft_ads_benefit_icon_{$i}", true);
        if (empty($benefit_icon)) $benefit_icon = $defaults["benefit_icon_{$i}"];
    ?>
    
    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0;">
        <h4><?php echo sprintf(__('Benefit %d', 'aimpro'), $i); ?></h4>
        <p>
            <label for="microsoft_ads_benefit_title_<?php echo $i; ?>"><?php _e('Benefit Title', 'aimpro'); ?></label><br>
            <input type="text" id="microsoft_ads_benefit_title_<?php echo $i; ?>" name="microsoft_ads_benefit_title_<?php echo $i; ?>" value="<?php echo esc_attr($benefit_title); ?>" class="widefat">
        </p>
        <p>
            <label for="microsoft_ads_benefit_content_<?php echo $i; ?>"><?php _e('Benefit Content', 'aimpro'); ?></label><br>
            <textarea id="microsoft_ads_benefit_content_<?php echo $i; ?>" name="microsoft_ads_benefit_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($benefit_content); ?></textarea>
        </p>
        <p>
            <label for="microsoft_ads_benefit_icon_<?php echo $i; ?>"><?php _e('Benefit Icon (FontAwesome class)', 'aimpro'); ?></label><br>
            <input type="text" id="microsoft_ads_benefit_icon_<?php echo $i; ?>" name="microsoft_ads_benefit_icon_<?php echo $i; ?>" value="<?php echo esc_attr($benefit_icon); ?>" class="widefat" placeholder="e.g., fas fa-chart-line">
        </p>
    </div>
    
    <?php endfor; ?>
    <?php
}

/**
 * Testimonial Section Callback
 */
function aimpro_microsoft_ads_testimonial_callback($post) {
    wp_nonce_field(basename(__FILE__), 'microsoft_ads_testimonial_nonce');
    
    $defaults = aimpro_get_microsoft_ads_default_values();
    
    $testimonial_quote = get_post_meta($post->ID, '_microsoft_ads_testimonial_quote', true);
    if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
    
    $testimonial_name = get_post_meta($post->ID, '_microsoft_ads_testimonial_name', true);
    if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
    
    $testimonial_title = get_post_meta($post->ID, '_microsoft_ads_testimonial_title', true);
    if (empty($testimonial_title)) $testimonial_title = $defaults['testimonial_title'];
    
    ?>
    <p>
        <label for="microsoft_ads_testimonial_quote"><?php _e('Testimonial Quote', 'aimpro'); ?></label><br>
        <textarea id="microsoft_ads_testimonial_quote" name="microsoft_ads_testimonial_quote" class="widefat" rows="4"><?php echo esc_textarea($testimonial_quote); ?></textarea>
    </p>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="microsoft_ads_testimonial_name"><?php _e('Client Name', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_testimonial_name" name="microsoft_ads_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="microsoft_ads_testimonial_title"><?php _e('Client Title', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_testimonial_title" name="microsoft_ads_testimonial_title" value="<?php echo esc_attr($testimonial_title); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * CTA Section Callback
 */
function aimpro_microsoft_ads_cta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'microsoft_ads_cta_nonce');
    
    $defaults = aimpro_get_microsoft_ads_default_values();
    
    $cta_title = get_post_meta($post->ID, '_microsoft_ads_cta_title', true);
    if (empty($cta_title)) $cta_title = $defaults['cta_title'];
    
    $cta_content = get_post_meta($post->ID, '_microsoft_ads_cta_content', true);
    if (empty($cta_content)) $cta_content = $defaults['cta_content'];
    
    $cta_button_1_text = get_post_meta($post->ID, '_microsoft_ads_cta_button_1_text', true);
    if (empty($cta_button_1_text)) $cta_button_1_text = $defaults['cta_button_1_text'];
    
    $cta_button_2_text = get_post_meta($post->ID, '_microsoft_ads_cta_button_2_text', true);
    if (empty($cta_button_2_text)) $cta_button_2_text = $defaults['cta_button_2_text'];
    
    ?>
    <p>
        <label for="microsoft_ads_cta_title"><?php _e('CTA Title', 'aimpro'); ?></label><br>
        <input type="text" id="microsoft_ads_cta_title" name="microsoft_ads_cta_title" value="<?php echo esc_attr($cta_title); ?>" class="widefat">
    </p>
    <p>
        <label for="microsoft_ads_cta_content"><?php _e('CTA Content', 'aimpro'); ?></label><br>
        <textarea id="microsoft_ads_cta_content" name="microsoft_ads_cta_content" class="widefat" rows="3"><?php echo esc_textarea($cta_content); ?></textarea>
    </p>
    
    <h4><?php _e('CTA Buttons', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="microsoft_ads_cta_button_1_text"><?php _e('Primary Button Text', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_cta_button_1_text" name="microsoft_ads_cta_button_1_text" value="<?php echo esc_attr($cta_button_1_text); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="microsoft_ads_cta_button_2_text"><?php _e('Secondary Button Text', 'aimpro'); ?></label><br>
                <input type="text" id="microsoft_ads_cta_button_2_text" name="microsoft_ads_cta_button_2_text" value="<?php echo esc_attr($cta_button_2_text); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Save Microsoft Ads meta boxes
 */
function aimpro_save_microsoft_ads_meta_boxes($post_id) {
    // Check if we're autosaving
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Check the user's permissions
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    }
    
    // Save Hero Section
    if (isset($_POST['microsoft_ads_hero_nonce']) && wp_verify_nonce($_POST['microsoft_ads_hero_nonce'], basename(__FILE__))) {
        if (isset($_POST['microsoft_ads_hero_title'])) {
            update_post_meta($post_id, '_microsoft_ads_hero_title', sanitize_text_field($_POST['microsoft_ads_hero_title']));
        }
        if (isset($_POST['microsoft_ads_hero_subtitle'])) {
            update_post_meta($post_id, '_microsoft_ads_hero_subtitle', sanitize_textarea_field($_POST['microsoft_ads_hero_subtitle']));
        }
        
        // Hero Stats
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["microsoft_ads_hero_stat{$i}_number"])) {
                update_post_meta($post_id, "_microsoft_ads_hero_stat{$i}_number", sanitize_text_field($_POST["microsoft_ads_hero_stat{$i}_number"]));
            }
            if (isset($_POST["microsoft_ads_hero_stat{$i}_label"])) {
                update_post_meta($post_id, "_microsoft_ads_hero_stat{$i}_label", sanitize_text_field($_POST["microsoft_ads_hero_stat{$i}_label"]));
            }
        }
        
        // Hero CTAs
        if (isset($_POST['microsoft_ads_hero_cta1_text'])) {
            update_post_meta($post_id, '_microsoft_ads_hero_cta1_text', sanitize_text_field($_POST['microsoft_ads_hero_cta1_text']));
        }
        if (isset($_POST['microsoft_ads_hero_cta2_text'])) {
            update_post_meta($post_id, '_microsoft_ads_hero_cta2_text', sanitize_text_field($_POST['microsoft_ads_hero_cta2_text']));
        }
    }
    
    // Save Overview Section
    if (isset($_POST['microsoft_ads_overview_nonce']) && wp_verify_nonce($_POST['microsoft_ads_overview_nonce'], basename(__FILE__))) {
        if (isset($_POST['microsoft_ads_overview_title'])) {
            update_post_meta($post_id, '_microsoft_ads_overview_title', sanitize_text_field($_POST['microsoft_ads_overview_title']));
        }
        if (isset($_POST['microsoft_ads_overview_content'])) {
            update_post_meta($post_id, '_microsoft_ads_overview_content', sanitize_textarea_field($_POST['microsoft_ads_overview_content']));
        }
    }
    
    // Save Services Section
    if (isset($_POST['microsoft_ads_services_nonce']) && wp_verify_nonce($_POST['microsoft_ads_services_nonce'], basename(__FILE__))) {
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["microsoft_ads_service_title_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_service_title_{$i}", sanitize_text_field($_POST["microsoft_ads_service_title_{$i}"]));
            }
            if (isset($_POST["microsoft_ads_service_content_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_service_content_{$i}", sanitize_textarea_field($_POST["microsoft_ads_service_content_{$i}"]));
            }
            if (isset($_POST["microsoft_ads_service_icon_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_service_icon_{$i}", sanitize_text_field($_POST["microsoft_ads_service_icon_{$i}"]));
            }
        }
    }
    
    // Save Case Study Section
    if (isset($_POST['microsoft_ads_case_study_nonce']) && wp_verify_nonce($_POST['microsoft_ads_case_study_nonce'], basename(__FILE__))) {
        if (isset($_POST['microsoft_ads_case_study_title'])) {
            update_post_meta($post_id, '_microsoft_ads_case_study_title', sanitize_text_field($_POST['microsoft_ads_case_study_title']));
        }
        if (isset($_POST['microsoft_ads_case_study_intro'])) {
            update_post_meta($post_id, '_microsoft_ads_case_study_intro', sanitize_textarea_field($_POST['microsoft_ads_case_study_intro']));
        }
        if (isset($_POST['microsoft_ads_case_study_challenge'])) {
            update_post_meta($post_id, '_microsoft_ads_case_study_challenge', sanitize_textarea_field($_POST['microsoft_ads_case_study_challenge']));
        }
        if (isset($_POST['microsoft_ads_case_study_solution'])) {
            update_post_meta($post_id, '_microsoft_ads_case_study_solution', sanitize_textarea_field($_POST['microsoft_ads_case_study_solution']));
        }
        
        // Case Study Results
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["microsoft_ads_case_result_{$i}_number"])) {
                update_post_meta($post_id, "_microsoft_ads_case_result_{$i}_number", sanitize_text_field($_POST["microsoft_ads_case_result_{$i}_number"]));
            }
            if (isset($_POST["microsoft_ads_case_result_{$i}_label"])) {
                update_post_meta($post_id, "_microsoft_ads_case_result_{$i}_label", sanitize_text_field($_POST["microsoft_ads_case_result_{$i}_label"]));
            }
        }
    }
    
    // Save Process Section
    if (isset($_POST['microsoft_ads_process_nonce']) && wp_verify_nonce($_POST['microsoft_ads_process_nonce'], basename(__FILE__))) {
        if (isset($_POST['microsoft_ads_process_title'])) {
            update_post_meta($post_id, '_microsoft_ads_process_title', sanitize_text_field($_POST['microsoft_ads_process_title']));
        }
        
        // Process Steps
        for ($i = 1; $i <= 5; $i++) {
            if (isset($_POST["microsoft_ads_process_step_number_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_process_step_number_{$i}", sanitize_text_field($_POST["microsoft_ads_process_step_number_{$i}"]));
            }
            if (isset($_POST["microsoft_ads_process_step_title_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_process_step_title_{$i}", sanitize_text_field($_POST["microsoft_ads_process_step_title_{$i}"]));
            }
            if (isset($_POST["microsoft_ads_process_step_content_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_process_step_content_{$i}", sanitize_textarea_field($_POST["microsoft_ads_process_step_content_{$i}"]));
            }
        }
    }
    
    // Save Tools Section
    if (isset($_POST['microsoft_ads_tools_nonce']) && wp_verify_nonce($_POST['microsoft_ads_tools_nonce'], basename(__FILE__))) {
        if (isset($_POST['microsoft_ads_tools_title'])) {
            update_post_meta($post_id, '_microsoft_ads_tools_title', sanitize_text_field($_POST['microsoft_ads_tools_title']));
        }
        
        // Tools
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["microsoft_ads_tool_title_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_tool_title_{$i}", sanitize_text_field($_POST["microsoft_ads_tool_title_{$i}"]));
            }
            if (isset($_POST["microsoft_ads_tool_content_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_tool_content_{$i}", sanitize_textarea_field($_POST["microsoft_ads_tool_content_{$i}"]));
            }
            if (isset($_POST["microsoft_ads_tool_icon_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_tool_icon_{$i}", sanitize_text_field($_POST["microsoft_ads_tool_icon_{$i}"]));
            }
        }
    }
    
    // Save Benefits Section
    if (isset($_POST['microsoft_ads_benefits_nonce']) && wp_verify_nonce($_POST['microsoft_ads_benefits_nonce'], basename(__FILE__))) {
        if (isset($_POST['microsoft_ads_benefits_title'])) {
            update_post_meta($post_id, '_microsoft_ads_benefits_title', sanitize_text_field($_POST['microsoft_ads_benefits_title']));
        }
        
        // Benefits
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["microsoft_ads_benefit_title_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_benefit_title_{$i}", sanitize_text_field($_POST["microsoft_ads_benefit_title_{$i}"]));
            }
            if (isset($_POST["microsoft_ads_benefit_content_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_benefit_content_{$i}", sanitize_textarea_field($_POST["microsoft_ads_benefit_content_{$i}"]));
            }
            if (isset($_POST["microsoft_ads_benefit_icon_{$i}"])) {
                update_post_meta($post_id, "_microsoft_ads_benefit_icon_{$i}", sanitize_text_field($_POST["microsoft_ads_benefit_icon_{$i}"]));
            }
        }
    }
    
    // Save Testimonial Section
    if (isset($_POST['microsoft_ads_testimonial_nonce']) && wp_verify_nonce($_POST['microsoft_ads_testimonial_nonce'], basename(__FILE__))) {
        if (isset($_POST['microsoft_ads_testimonial_quote'])) {
            update_post_meta($post_id, '_microsoft_ads_testimonial_quote', sanitize_textarea_field($_POST['microsoft_ads_testimonial_quote']));
        }
        if (isset($_POST['microsoft_ads_testimonial_name'])) {
            update_post_meta($post_id, '_microsoft_ads_testimonial_name', sanitize_text_field($_POST['microsoft_ads_testimonial_name']));
        }
        if (isset($_POST['microsoft_ads_testimonial_title'])) {
            update_post_meta($post_id, '_microsoft_ads_testimonial_title', sanitize_text_field($_POST['microsoft_ads_testimonial_title']));
        }
    }
    
    // Save CTA Section
    if (isset($_POST['microsoft_ads_cta_nonce']) && wp_verify_nonce($_POST['microsoft_ads_cta_nonce'], basename(__FILE__))) {
        if (isset($_POST['microsoft_ads_cta_title'])) {
            update_post_meta($post_id, '_microsoft_ads_cta_title', sanitize_text_field($_POST['microsoft_ads_cta_title']));
        }
        if (isset($_POST['microsoft_ads_cta_content'])) {
            update_post_meta($post_id, '_microsoft_ads_cta_content', sanitize_textarea_field($_POST['microsoft_ads_cta_content']));
        }
        if (isset($_POST['microsoft_ads_cta_button_1_text'])) {
            update_post_meta($post_id, '_microsoft_ads_cta_button_1_text', sanitize_text_field($_POST['microsoft_ads_cta_button_1_text']));
        }
        if (isset($_POST['microsoft_ads_cta_button_2_text'])) {
            update_post_meta($post_id, '_microsoft_ads_cta_button_2_text', sanitize_text_field($_POST['microsoft_ads_cta_button_2_text']));
        }
    }
}
add_action('save_post', 'aimpro_save_microsoft_ads_meta_boxes');
