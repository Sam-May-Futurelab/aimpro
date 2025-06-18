<?php
/**
 * Meta Ads Meta Fields
 *
 * @package Aimpro
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set default values for Meta Ads page meta fields
 * This ensures fields are pre-populated with the frontend content
 */
function aimpro_get_meta_ads_default_values() {
    return array(
        // Hero Section
        'hero_title' => 'Meta Ads (Facebook/Instagram) Management',
        'hero_subtitle' => 'Drive targeted traffic and conversions with expertly managed Facebook and Instagram advertising campaigns that reach your ideal customers where they spend their time.',
        
        // Hero Stats
        'hero_stat1_number' => '285%',
        'hero_stat1_label' => 'Average ROAS Increase',
        'hero_stat2_number' => '65%',
        'hero_stat2_label' => 'Lower Cost Per Lead',
        'hero_stat3_number' => '450%',
        'hero_stat3_label' => 'Reach Expansion',
        
        // Hero CTAs
        'hero_cta1_text' => 'Start Your Meta Campaign',
        'hero_cta2_text' => 'View Packages',
        
        // Service Overview Section
        'overview_title' => 'Comprehensive Meta Ads Management',
        'overview_content' => 'Facebook and Instagram advertising offers unparalleled targeting capabilities and massive reach. Our Meta Ads specialists create data-driven campaigns that connect your brand with highly qualified prospects across the world\'s largest social platforms.',
        
        // Service Items (6 services)
        'service_title_1' => 'Facebook Ads Management',
        'service_content_1' => 'Strategic Facebook advertising campaigns targeting specific demographics, interests, and behaviors to maximize reach and conversions.',
        'service_icon_1' => 'fab fa-facebook',
        
        'service_title_2' => 'Instagram Ads Optimization',
        'service_content_2' => 'Visual storytelling through Instagram ads that capture attention and drive engagement with compelling creative and precise targeting.',
        'service_icon_2' => 'fab fa-instagram',
        
        'service_title_3' => 'Advanced Audience Targeting',
        'service_content_3' => 'Leverage Meta\'s sophisticated targeting options including lookalike audiences, custom audiences, and detailed demographic targeting.',
        'service_icon_3' => 'fas fa-bullseye',
        
        'service_title_4' => 'Campaign Optimization',
        'service_content_4' => 'Continuous A/B testing of ad creative, copy, and targeting to improve performance and reduce costs over time.',
        'service_icon_4' => 'fas fa-sync-alt',
        
        'service_title_5' => 'Performance Analytics',
        'service_content_5' => 'Detailed reporting and analysis of campaign performance with actionable insights for continuous improvement.',
        'service_icon_5' => 'fas fa-chart-line',
        
        'service_title_6' => 'E-commerce Integration',
        'service_content_6' => 'Seamless integration with e-commerce platforms for dynamic product ads and conversion tracking.',
        'service_icon_6' => 'fas fa-shopping-cart',
        
        // Case Study Section
        'case_study_title' => 'Case Study: E-commerce Success',
        'case_study_intro' => 'How we helped an online retailer achieve a 380% increase in sales through strategic Meta advertising campaigns.',
        'case_study_challenge' => 'An established e-commerce retailer was struggling with high customer acquisition costs and declining ROAS from their existing Meta ads campaigns. Their broad targeting approach wasn\'t delivering qualified traffic, and their ad creative wasn\'t resonating with their target audience.',
        'case_study_solution' => "Implemented advanced audience segmentation and lookalike modeling\nCreated platform-specific creative optimized for Facebook and Instagram feeds\nLaunched retargeting campaigns for abandoned cart recovery\nEstablished dynamic product ads for catalog promotion\nImplemented conversion tracking and attribution modeling",
        
        // Case Study Results
        'case_result_1_number' => '380%',
        'case_result_1_label' => 'Sales Increase',
        'case_result_2_number' => '285%',
        'case_result_2_label' => 'ROAS Improvement',
        'case_result_3_number' => '65%',
        'case_result_3_label' => 'Cost Per Acquisition Reduction',
        'case_result_4_number' => '450%',
        'case_result_4_label' => 'Qualified Traffic Increase',
        
        // Process Section
        'process_title' => 'Our Meta Ads Process',
        
        'process_step_number_1' => '1',
        'process_step_title_1' => 'Audience Research & Strategy',
        'process_step_content_1' => 'Deep dive into your target audience demographics, interests, and behaviors to create detailed buyer personas and targeting strategies.',
        
        'process_step_number_2' => '2',
        'process_step_title_2' => 'Campaign Setup & Structure',
        'process_step_content_2' => 'Build optimized campaign architecture with proper audience segmentation, budget allocation, and conversion tracking implementation.',
        
        'process_step_number_3' => '3',
        'process_step_title_3' => 'Creative Development',
        'process_step_content_3' => 'Design compelling ad creative including images, videos, and copy optimized for Facebook and Instagram placements.',
        
        'process_step_number_4' => '4',
        'process_step_title_4' => 'Launch & Optimization',
        'process_step_content_4' => 'Deploy campaigns with continuous monitoring and optimization based on performance data and audience insights.',
        
        'process_step_number_5' => '5',
        'process_step_title_5' => 'Reporting & Scaling',
        'process_step_content_5' => 'Provide detailed performance reports and scale successful campaigns while testing new audiences and creative variations.',
        
        // Pricing Section
        'pricing_title' => 'Meta Ads Management Packages',
        'pricing_subtitle' => 'Professional Meta advertising management that drives real results for your business.',
        
        // Pricing Package 1 - Starter
        'pricing_package_1_name' => 'Starter',
        'pricing_package_1_price' => '£697',
        'pricing_package_1_period' => '/month',
        'pricing_package_1_description' => 'Perfect for small businesses',
        'pricing_package_1_features' => "Up to £2,000 ad spend management\nFacebook & Instagram campaigns\nBasic audience targeting\n3 ad creative variations\nWeekly performance reports\nConversion tracking setup\nMonthly strategy calls",
        'pricing_package_1_button_text' => 'Get Started',
        
        // Pricing Package 2 - Professional
        'pricing_package_2_name' => 'Professional',
        'pricing_package_2_price' => '£1,197',
        'pricing_package_2_period' => '/month',
        'pricing_package_2_description' => 'Comprehensive Meta advertising',        'pricing_package_2_features' => "Up to £5,000 ad spend management\nFull Meta platform coverage\nAdvanced audience targeting\nUnlimited ad creative testing\nBi-weekly optimization reports\nRetargeting campaigns\nLookalike audience creation\nPriority support",
        'pricing_package_2_button_text' => 'Get Started',
        'pricing_package_2_badge' => '',
        'pricing_package_2_featured' => true,
        
        // Pricing Package 3 - Enterprise
        'pricing_package_3_name' => 'Enterprise',
        'pricing_package_3_price' => '£1,997',
        'pricing_package_3_period' => '/month',
        'pricing_package_3_description' => 'Full-service enterprise solution',
        'pricing_package_3_features' => "Unlimited ad spend management\nMulti-platform integration\nCustom audience development\nVideo ad production\nDaily performance monitoring\nAdvanced attribution modeling\nDedicated account manager\n24/7 priority support",
        'pricing_package_3_button_text' => 'Get Started',
        
        // Tools Section
        'tools_title' => 'Tools & Technologies We Use',
        
        'tool_title_1' => 'Meta Business Manager',
        'tool_content_1' => 'Advanced campaign management and optimization through Meta\'s professional advertising platform.',
        'tool_icon_1' => 'fab fa-facebook',
        
        'tool_title_2' => 'Meta Analytics',
        'tool_content_2' => 'Comprehensive performance tracking and audience insights for data-driven optimization.',
        'tool_icon_2' => 'fas fa-chart-bar',
        
        'tool_title_3' => 'Audience Insights',
        'tool_content_3' => 'Advanced audience research and targeting capabilities for precise customer reach.',
        'tool_icon_3' => 'fas fa-users',
        
        'tool_title_4' => 'Creative Hub',
        'tool_content_4' => 'Professional ad creative development and testing platform for optimal performance.',
        'tool_icon_4' => 'fas fa-palette',
        
        // Industries Section
        'industries_title' => 'Industries We Serve',
        
        'industry_title_1' => 'E-commerce & Retail',
        'industry_content_1' => 'Drive product sales with dynamic ads and strategic retargeting campaigns.',
        
        'industry_title_2' => 'Professional Services',
        'industry_content_2' => 'Generate qualified leads for consultancies, agencies, and service providers.',
        
        'industry_title_3' => 'Healthcare & Wellness',
        'industry_content_3' => 'Compliant advertising strategies for medical practices and wellness brands.',
        
        'industry_title_4' => 'Real Estate',
        'industry_content_4' => 'Connect property buyers and sellers through targeted local advertising.',
        
        'industry_title_5' => 'Education & Training',
        'industry_content_5' => 'Reach students and professionals with educational content and course promotion.',
        
        'industry_title_6' => 'Technology & SaaS',
        'industry_content_6' => 'Drive software adoption and user acquisition through targeted campaigns.',
        
        // Testimonial Section
        'testimonial_quote' => 'Aimpro transformed our Meta advertising from a cost center to our most profitable marketing channel. Their strategic approach and creative optimization delivered a 285% increase in ROAS within just 4 months.',
        'testimonial_name' => 'Sarah Mitchell',
        'testimonial_title' => 'Marketing Director, RetailPlus',
        
        // CTA Section
        'cta_title' => 'Ready to Build Your High-Converting Website?',
        'cta_content' => 'Get a free website audit and consultation. We\'ll analyze your current site and show you exactly how to improve conversions and performance.',
        'cta_button_1_text' => 'Get Free Website Audit',
        'cta_button_2_text' => 'View All Services',
        'cta_benefit_1' => 'Free design consultation',
        'cta_benefit_2' => 'Performance analysis included',
        'cta_benefit_3' => 'No obligation quote'
    );
}

/**
 * Register Meta Ads meta boxes
 */
function aimpro_register_meta_ads_meta_boxes() {
    // Only show these meta boxes on the Meta Ads page template
    $screen = get_current_screen();
    if ($screen->id == 'page' && isset($_GET['post'])) {
        $template = get_post_meta($_GET['post'], '_wp_page_template', true);
        if ($template != 'page-meta-ads.php') {
            return;
        }
    }
    
    add_meta_box(
        'meta_ads_hero_section',
        __('Hero Section', 'aimpro'),
        'aimpro_meta_ads_hero_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'meta_ads_overview_section',
        __('Service Overview Section', 'aimpro'),
        'aimpro_meta_ads_overview_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'meta_ads_services_section',
        __('Services Section', 'aimpro'),
        'aimpro_meta_ads_services_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'meta_ads_case_study_section',
        __('Case Study Section', 'aimpro'),
        'aimpro_meta_ads_case_study_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'meta_ads_process_section',
        __('Process Section', 'aimpro'),
        'aimpro_meta_ads_process_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'meta_ads_pricing_section',
        __('Pricing Section', 'aimpro'),
        'aimpro_meta_ads_pricing_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'meta_ads_tools_section',
        __('Tools Section', 'aimpro'),
        'aimpro_meta_ads_tools_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'meta_ads_industries_section',
        __('Industries Section', 'aimpro'),
        'aimpro_meta_ads_industries_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'meta_ads_testimonial_section',
        __('Testimonial Section', 'aimpro'),
        'aimpro_meta_ads_testimonial_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'meta_ads_cta_section',
        __('CTA Section', 'aimpro'),
        'aimpro_meta_ads_cta_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes_page', 'aimpro_register_meta_ads_meta_boxes');

/**
 * Hero Section Callback
 */
function aimpro_meta_ads_hero_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_hero_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    // Get saved values or use defaults if empty
    $hero_title = get_post_meta($post->ID, '_meta_ads_hero_title', true);
    if (empty($hero_title)) $hero_title = $defaults['hero_title'];
    
    $hero_subtitle = get_post_meta($post->ID, '_meta_ads_hero_subtitle', true);
    if (empty($hero_subtitle)) $hero_subtitle = $defaults['hero_subtitle'];
    
    // Hero Stats
    $hero_stat1_number = get_post_meta($post->ID, '_meta_ads_hero_stat1_number', true);
    if (empty($hero_stat1_number)) $hero_stat1_number = $defaults['hero_stat1_number'];
    
    $hero_stat1_label = get_post_meta($post->ID, '_meta_ads_hero_stat1_label', true);
    if (empty($hero_stat1_label)) $hero_stat1_label = $defaults['hero_stat1_label'];
    
    $hero_stat2_number = get_post_meta($post->ID, '_meta_ads_hero_stat2_number', true);
    if (empty($hero_stat2_number)) $hero_stat2_number = $defaults['hero_stat2_number'];
    
    $hero_stat2_label = get_post_meta($post->ID, '_meta_ads_hero_stat2_label', true);
    if (empty($hero_stat2_label)) $hero_stat2_label = $defaults['hero_stat2_label'];
    
    $hero_stat3_number = get_post_meta($post->ID, '_meta_ads_hero_stat3_number', true);
    if (empty($hero_stat3_number)) $hero_stat3_number = $defaults['hero_stat3_number'];
    
    $hero_stat3_label = get_post_meta($post->ID, '_meta_ads_hero_stat3_label', true);
    if (empty($hero_stat3_label)) $hero_stat3_label = $defaults['hero_stat3_label'];
    
    // Hero CTAs
    $hero_cta1_text = get_post_meta($post->ID, '_meta_ads_hero_cta1_text', true);
    if (empty($hero_cta1_text)) $hero_cta1_text = $defaults['hero_cta1_text'];
    
    $hero_cta2_text = get_post_meta($post->ID, '_meta_ads_hero_cta2_text', true);
    if (empty($hero_cta2_text)) $hero_cta2_text = $defaults['hero_cta2_text'];
    
    // Output fields
    ?>
    <p>
        <label for="meta_ads_hero_title"><?php _e('Hero Title', 'aimpro'); ?></label><br>
        <input type="text" id="meta_ads_hero_title" name="meta_ads_hero_title" value="<?php echo esc_attr($hero_title); ?>" class="widefat">
    </p>
    <p>
        <label for="meta_ads_hero_subtitle"><?php _e('Hero Subtitle', 'aimpro'); ?></label><br>
        <textarea id="meta_ads_hero_subtitle" name="meta_ads_hero_subtitle" class="widefat" rows="4"><?php echo esc_textarea($hero_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Hero Stats', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="meta_ads_hero_stat1_number"><?php _e('Stat 1 Number', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_hero_stat1_number" name="meta_ads_hero_stat1_number" value="<?php echo esc_attr($hero_stat1_number); ?>" class="widefat">
            </p>
            <p>
                <label for="meta_ads_hero_stat1_label"><?php _e('Stat 1 Label', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_hero_stat1_label" name="meta_ads_hero_stat1_label" value="<?php echo esc_attr($hero_stat1_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="meta_ads_hero_stat2_number"><?php _e('Stat 2 Number', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_hero_stat2_number" name="meta_ads_hero_stat2_number" value="<?php echo esc_attr($hero_stat2_number); ?>" class="widefat">
            </p>
            <p>
                <label for="meta_ads_hero_stat2_label"><?php _e('Stat 2 Label', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_hero_stat2_label" name="meta_ads_hero_stat2_label" value="<?php echo esc_attr($hero_stat2_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="meta_ads_hero_stat3_number"><?php _e('Stat 3 Number', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_hero_stat3_number" name="meta_ads_hero_stat3_number" value="<?php echo esc_attr($hero_stat3_number); ?>" class="widefat">
            </p>
            <p>
                <label for="meta_ads_hero_stat3_label"><?php _e('Stat 3 Label', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_hero_stat3_label" name="meta_ads_hero_stat3_label" value="<?php echo esc_attr($hero_stat3_label); ?>" class="widefat">
            </p>
        </div>
    </div>
    
    <h4><?php _e('Hero CTAs', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="meta_ads_hero_cta1_text"><?php _e('Primary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_hero_cta1_text" name="meta_ads_hero_cta1_text" value="<?php echo esc_attr($hero_cta1_text); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="meta_ads_hero_cta2_text"><?php _e('Secondary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_hero_cta2_text" name="meta_ads_hero_cta2_text" value="<?php echo esc_attr($hero_cta2_text); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Service Overview Section Callback
 */
function aimpro_meta_ads_overview_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_overview_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    // Get saved values or use defaults
    $overview_title = get_post_meta($post->ID, '_meta_ads_overview_title', true);
    if (empty($overview_title)) $overview_title = $defaults['overview_title'];
    
    $overview_content = get_post_meta($post->ID, '_meta_ads_overview_content', true);
    if (empty($overview_content)) $overview_content = $defaults['overview_content'];
    
    ?>
    <p>
        <label for="meta_ads_overview_title"><?php _e('Overview Title', 'aimpro'); ?></label><br>
        <input type="text" id="meta_ads_overview_title" name="meta_ads_overview_title" value="<?php echo esc_attr($overview_title); ?>" class="widefat">
    </p>
    <p>
        <label for="meta_ads_overview_content"><?php _e('Overview Content', 'aimpro'); ?></label><br>
        <textarea id="meta_ads_overview_content" name="meta_ads_overview_content" class="widefat" rows="4"><?php echo esc_textarea($overview_content); ?></textarea>
    </p>
    <?php
}

/**
 * Services Section Callback
 */
function aimpro_meta_ads_services_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_services_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    ?>
    <h4><?php _e('Service Items', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 6; $i++): 
        $service_title = get_post_meta($post->ID, "_meta_ads_service_title_{$i}", true);
        if (empty($service_title)) $service_title = $defaults["service_title_{$i}"];
        
        $service_content = get_post_meta($post->ID, "_meta_ads_service_content_{$i}", true);
        if (empty($service_content)) $service_content = $defaults["service_content_{$i}"];
        
        $service_icon = get_post_meta($post->ID, "_meta_ads_service_icon_{$i}", true);
        if (empty($service_icon)) $service_icon = $defaults["service_icon_{$i}"];
    ?>
    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0;">
        <h5><?php echo sprintf(__('Service %d', 'aimpro'), $i); ?></h5>
        <p>
            <label for="meta_ads_service_title_<?php echo $i; ?>"><?php _e('Service Title', 'aimpro'); ?></label><br>
            <input type="text" id="meta_ads_service_title_<?php echo $i; ?>" name="meta_ads_service_title_<?php echo $i; ?>" value="<?php echo esc_attr($service_title); ?>" class="widefat">
        </p>
        <p>
            <label for="meta_ads_service_content_<?php echo $i; ?>"><?php _e('Service Content', 'aimpro'); ?></label><br>
            <textarea id="meta_ads_service_content_<?php echo $i; ?>" name="meta_ads_service_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($service_content); ?></textarea>
        </p>
        <p>
            <label for="meta_ads_service_icon_<?php echo $i; ?>"><?php _e('Icon Class (e.g., fab fa-facebook)', 'aimpro'); ?></label><br>
            <input type="text" id="meta_ads_service_icon_<?php echo $i; ?>" name="meta_ads_service_icon_<?php echo $i; ?>" value="<?php echo esc_attr($service_icon); ?>" class="widefat">
        </p>
    </div>
    <?php endfor; ?>
    <?php
}

/**
 * Case Study Section Callback
 */
function aimpro_meta_ads_case_study_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_case_study_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    // Get saved values or use defaults
    $case_study_title = get_post_meta($post->ID, '_meta_ads_case_study_title', true);
    if (empty($case_study_title)) $case_study_title = $defaults['case_study_title'];
    
    $case_study_intro = get_post_meta($post->ID, '_meta_ads_case_study_intro', true);
    if (empty($case_study_intro)) $case_study_intro = $defaults['case_study_intro'];
    
    $case_study_challenge = get_post_meta($post->ID, '_meta_ads_case_study_challenge', true);
    if (empty($case_study_challenge)) $case_study_challenge = $defaults['case_study_challenge'];
    
    $case_study_solution = get_post_meta($post->ID, '_meta_ads_case_study_solution', true);
    if (empty($case_study_solution)) $case_study_solution = $defaults['case_study_solution'];
    
    ?>
    <p>
        <label for="meta_ads_case_study_title"><?php _e('Case Study Title', 'aimpro'); ?></label><br>
        <input type="text" id="meta_ads_case_study_title" name="meta_ads_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" class="widefat">
    </p>
    <p>
        <label for="meta_ads_case_study_intro"><?php _e('Case Study Intro', 'aimpro'); ?></label><br>
        <textarea id="meta_ads_case_study_intro" name="meta_ads_case_study_intro" class="widefat" rows="3"><?php echo esc_textarea($case_study_intro); ?></textarea>
    </p>
    <p>
        <label for="meta_ads_case_study_challenge"><?php _e('Challenge', 'aimpro'); ?></label><br>
        <textarea id="meta_ads_case_study_challenge" name="meta_ads_case_study_challenge" class="widefat" rows="4"><?php echo esc_textarea($case_study_challenge); ?></textarea>
    </p>
    <p>
        <label for="meta_ads_case_study_solution"><?php _e('Solution (one per line)', 'aimpro'); ?></label><br>
        <textarea id="meta_ads_case_study_solution" name="meta_ads_case_study_solution" class="widefat" rows="5"><?php echo esc_textarea($case_study_solution); ?></textarea>
    </p>
    
    <h4><?php _e('Case Study Results', 'aimpro'); ?></h4>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
        <?php for ($i = 1; $i <= 4; $i++): 
            $case_result_number = get_post_meta($post->ID, "_meta_ads_case_result_{$i}_number", true);
            if (empty($case_result_number)) $case_result_number = $defaults["case_result_{$i}_number"];
            
            $case_result_label = get_post_meta($post->ID, "_meta_ads_case_result_{$i}_label", true);
            if (empty($case_result_label)) $case_result_label = $defaults["case_result_{$i}_label"];
        ?>
        <div style="border: 1px solid #ddd; padding: 10px;">
            <h5><?php echo sprintf(__('Result %d', 'aimpro'), $i); ?></h5>
            <p>
                <label for="meta_ads_case_result_<?php echo $i; ?>_number"><?php _e('Number', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_case_result_<?php echo $i; ?>_number" name="meta_ads_case_result_<?php echo $i; ?>_number" value="<?php echo esc_attr($case_result_number); ?>" class="widefat">
            </p>
            <p>
                <label for="meta_ads_case_result_<?php echo $i; ?>_label"><?php _e('Label', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_case_result_<?php echo $i; ?>_label" name="meta_ads_case_result_<?php echo $i; ?>_label" value="<?php echo esc_attr($case_result_label); ?>" class="widefat">
            </p>
        </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Process Section Callback
 */
function aimpro_meta_ads_process_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_process_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    // Get saved values or use defaults
    $process_title = get_post_meta($post->ID, '_meta_ads_process_title', true);
    if (empty($process_title)) $process_title = $defaults['process_title'];
    
    ?>
    <p>
        <label for="meta_ads_process_title"><?php _e('Process Title', 'aimpro'); ?></label><br>
        <input type="text" id="meta_ads_process_title" name="meta_ads_process_title" value="<?php echo esc_attr($process_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Process Steps', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 5; $i++): 
        $step_number = get_post_meta($post->ID, "_meta_ads_process_step_number_{$i}", true);
        if (empty($step_number)) $step_number = $defaults["process_step_number_{$i}"];
        
        $step_title = get_post_meta($post->ID, "_meta_ads_process_step_title_{$i}", true);
        if (empty($step_title)) $step_title = $defaults["process_step_title_{$i}"];
        
        $step_content = get_post_meta($post->ID, "_meta_ads_process_step_content_{$i}", true);
        if (empty($step_content)) $step_content = $defaults["process_step_content_{$i}"];
    ?>
    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0;">
        <h5><?php echo sprintf(__('Step %d', 'aimpro'), $i); ?></h5>
        <div style="display: flex; gap: 15px;">
            <div style="flex: 0 0 80px;">
                <p>
                    <label for="meta_ads_process_step_number_<?php echo $i; ?>"><?php _e('Number', 'aimpro'); ?></label><br>
                    <input type="text" id="meta_ads_process_step_number_<?php echo $i; ?>" name="meta_ads_process_step_number_<?php echo $i; ?>" value="<?php echo esc_attr($step_number); ?>" class="widefat">
                </p>
            </div>
            <div style="flex: 1;">
                <p>
                    <label for="meta_ads_process_step_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                    <input type="text" id="meta_ads_process_step_title_<?php echo $i; ?>" name="meta_ads_process_step_title_<?php echo $i; ?>" value="<?php echo esc_attr($step_title); ?>" class="widefat">
                </p>
                <p>
                    <label for="meta_ads_process_step_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                    <textarea id="meta_ads_process_step_content_<?php echo $i; ?>" name="meta_ads_process_step_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($step_content); ?></textarea>
                </p>
            </div>
        </div>
    </div>
    <?php endfor; ?>
    <?php
}

/**
 * Pricing Section Callback
 */
function aimpro_meta_ads_pricing_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_pricing_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    // Get saved values or use defaults
    $pricing_title = get_post_meta($post->ID, '_meta_ads_pricing_title', true);
    if (empty($pricing_title)) $pricing_title = $defaults['pricing_title'];
    
    $pricing_subtitle = get_post_meta($post->ID, '_meta_ads_pricing_subtitle', true);
    if (empty($pricing_subtitle)) $pricing_subtitle = $defaults['pricing_subtitle'];
    
    ?>
    <p>
        <label for="meta_ads_pricing_title"><?php _e('Pricing Title', 'aimpro'); ?></label><br>
        <input type="text" id="meta_ads_pricing_title" name="meta_ads_pricing_title" value="<?php echo esc_attr($pricing_title); ?>" class="widefat">
    </p>
    <p>
        <label for="meta_ads_pricing_subtitle"><?php _e('Pricing Subtitle', 'aimpro'); ?></label><br>
        <textarea id="meta_ads_pricing_subtitle" name="meta_ads_pricing_subtitle" class="widefat" rows="3"><?php echo esc_textarea($pricing_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Pricing Packages', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 3; $i++): 
        $package_name = get_post_meta($post->ID, "_meta_ads_pricing_package_{$i}_name", true);
        if (empty($package_name)) $package_name = $defaults["pricing_package_{$i}_name"];
        
        $package_price = get_post_meta($post->ID, "_meta_ads_pricing_package_{$i}_price", true);
        if (empty($package_price)) $package_price = $defaults["pricing_package_{$i}_price"];
        
        $package_period = get_post_meta($post->ID, "_meta_ads_pricing_package_{$i}_period", true);
        if (empty($package_period)) $package_period = $defaults["pricing_package_{$i}_period"];
        
        $package_description = get_post_meta($post->ID, "_meta_ads_pricing_package_{$i}_description", true);
        if (empty($package_description)) $package_description = $defaults["pricing_package_{$i}_description"];
        
        $package_features = get_post_meta($post->ID, "_meta_ads_pricing_package_{$i}_features", true);
        if (empty($package_features)) $package_features = $defaults["pricing_package_{$i}_features"];
        
        $package_button_text = get_post_meta($post->ID, "_meta_ads_pricing_package_{$i}_button_text", true);
        if (empty($package_button_text)) $package_button_text = $defaults["pricing_package_{$i}_button_text"];
        
        // Optional fields
        $package_badge = get_post_meta($post->ID, "_meta_ads_pricing_package_{$i}_badge", true);
        if (empty($package_badge) && isset($defaults["pricing_package_{$i}_badge"])) {
            $package_badge = $defaults["pricing_package_{$i}_badge"];
        }
        
        $package_featured = get_post_meta($post->ID, "_meta_ads_pricing_package_{$i}_featured", true);
        if (empty($package_featured) && isset($defaults["pricing_package_{$i}_featured"])) {
            $package_featured = $defaults["pricing_package_{$i}_featured"];
        }
    ?>    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; <?php echo ($i == 2) ? 'background-color: #f9f9f9;' : ''; ?>">
        <h5><?php echo sprintf(__('Package %d', 'aimpro'), $i); ?></h5>
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px;">
            <div>
                <p>
                    <label for="meta_ads_pricing_package_<?php echo $i; ?>_name"><?php _e('Package Name', 'aimpro'); ?></label><br>
                    <input type="text" id="meta_ads_pricing_package_<?php echo $i; ?>_name" name="meta_ads_pricing_package_<?php echo $i; ?>_name" value="<?php echo esc_attr($package_name); ?>" class="widefat">
                </p>
            </div>
            <div>
                <p>
                    <label for="meta_ads_pricing_package_<?php echo $i; ?>_price"><?php _e('Price', 'aimpro'); ?></label><br>
                    <input type="text" id="meta_ads_pricing_package_<?php echo $i; ?>_price" name="meta_ads_pricing_package_<?php echo $i; ?>_price" value="<?php echo esc_attr($package_price); ?>" class="widefat">
                </p>
            </div>
            <div>
                <p>
                    <label for="meta_ads_pricing_package_<?php echo $i; ?>_period"><?php _e('Period', 'aimpro'); ?></label><br>
                    <input type="text" id="meta_ads_pricing_package_<?php echo $i; ?>_period" name="meta_ads_pricing_package_<?php echo $i; ?>_period" value="<?php echo esc_attr($package_period); ?>" class="widefat">
                </p>
            </div>
        </div>
        <p>
            <label for="meta_ads_pricing_package_<?php echo $i; ?>_description"><?php _e('Description', 'aimpro'); ?></label><br>
            <input type="text" id="meta_ads_pricing_package_<?php echo $i; ?>_description" name="meta_ads_pricing_package_<?php echo $i; ?>_description" value="<?php echo esc_attr($package_description); ?>" class="widefat">
        </p>
        <p>
            <label for="meta_ads_pricing_package_<?php echo $i; ?>_features"><?php _e('Features (one per line)', 'aimpro'); ?></label><br>
            <textarea id="meta_ads_pricing_package_<?php echo $i; ?>_features" name="meta_ads_pricing_package_<?php echo $i; ?>_features" class="widefat" rows="8"><?php echo esc_textarea($package_features); ?></textarea>
        </p>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
            <div>
                <p>
                    <label for="meta_ads_pricing_package_<?php echo $i; ?>_button_text"><?php _e('Button Text', 'aimpro'); ?></label><br>
                    <input type="text" id="meta_ads_pricing_package_<?php echo $i; ?>_button_text" name="meta_ads_pricing_package_<?php echo $i; ?>_button_text" value="<?php echo esc_attr($package_button_text); ?>" class="widefat">
                </p>
            </div>
            <div>
                <?php if ($i == 2): ?>
                <p>
                    <label for="meta_ads_pricing_package_<?php echo $i; ?>_badge"><?php _e('Badge Text (optional)', 'aimpro'); ?></label><br>
                    <input type="text" id="meta_ads_pricing_package_<?php echo $i; ?>_badge" name="meta_ads_pricing_package_<?php echo $i; ?>_badge" value="<?php echo esc_attr($package_badge); ?>" class="widefat">
                </p>
                <p>
                    <label>
                        <input type="checkbox" name="meta_ads_pricing_package_<?php echo $i; ?>_featured" value="1" <?php checked($package_featured, 1); ?>>
                        <?php _e('Featured Package', 'aimpro'); ?>
                    </label>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endfor; ?>
    <?php
}

/**
 * Tools Section Callback
 */
function aimpro_meta_ads_tools_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_tools_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    // Get saved values or use defaults
    $tools_title = get_post_meta($post->ID, '_meta_ads_tools_title', true);
    if (empty($tools_title)) $tools_title = $defaults['tools_title'];
    
    ?>
    <p>
        <label for="meta_ads_tools_title"><?php _e('Tools Title', 'aimpro'); ?></label><br>
        <input type="text" id="meta_ads_tools_title" name="meta_ads_tools_title" value="<?php echo esc_attr($tools_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Tools List', 'aimpro'); ?></h4>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
        <?php for ($i = 1; $i <= 4; $i++): 
            $tool_title = get_post_meta($post->ID, "_meta_ads_tool_title_{$i}", true);
            if (empty($tool_title)) $tool_title = $defaults["tool_title_{$i}"];
            
            $tool_content = get_post_meta($post->ID, "_meta_ads_tool_content_{$i}", true);
            if (empty($tool_content)) $tool_content = $defaults["tool_content_{$i}"];
            
            $tool_icon = get_post_meta($post->ID, "_meta_ads_tool_icon_{$i}", true);
            if (empty($tool_icon)) $tool_icon = $defaults["tool_icon_{$i}"];
        ?>
        <div style="border: 1px solid #ddd; padding: 10px;">
            <h5><?php echo sprintf(__('Tool %d', 'aimpro'), $i); ?></h5>
            <p>
                <label for="meta_ads_tool_title_<?php echo $i; ?>"><?php _e('Tool Title', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_tool_title_<?php echo $i; ?>" name="meta_ads_tool_title_<?php echo $i; ?>" value="<?php echo esc_attr($tool_title); ?>" class="widefat">
            </p>
            <p>
                <label for="meta_ads_tool_content_<?php echo $i; ?>"><?php _e('Description', 'aimpro'); ?></label><br>
                <textarea id="meta_ads_tool_content_<?php echo $i; ?>" name="meta_ads_tool_content_<?php echo $i; ?>" class="widefat" rows="2"><?php echo esc_textarea($tool_content); ?></textarea>
            </p>
            <p>
                <label for="meta_ads_tool_icon_<?php echo $i; ?>"><?php _e('Icon Class', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_tool_icon_<?php echo $i; ?>" name="meta_ads_tool_icon_<?php echo $i; ?>" value="<?php echo esc_attr($tool_icon); ?>" class="widefat">
            </p>
        </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Industries Section Callback
 */
function aimpro_meta_ads_industries_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_industries_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    // Get saved values or use defaults
    $industries_title = get_post_meta($post->ID, '_meta_ads_industries_title', true);
    if (empty($industries_title)) $industries_title = $defaults['industries_title'];
    
    ?>
    <p>
        <label for="meta_ads_industries_title"><?php _e('Industries Title', 'aimpro'); ?></label><br>
        <input type="text" id="meta_ads_industries_title" name="meta_ads_industries_title" value="<?php echo esc_attr($industries_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Industries List', 'aimpro'); ?></h4>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
        <?php for ($i = 1; $i <= 6; $i++): 
            $industry_title = get_post_meta($post->ID, "_meta_ads_industry_title_{$i}", true);
            if (empty($industry_title)) $industry_title = $defaults["industry_title_{$i}"];
            
            $industry_content = get_post_meta($post->ID, "_meta_ads_industry_content_{$i}", true);
            if (empty($industry_content)) $industry_content = $defaults["industry_content_{$i}"];
        ?>
        <div style="border: 1px solid #ddd; padding: 10px;">
            <h5><?php echo sprintf(__('Industry %d', 'aimpro'), $i); ?></h5>
            <p>
                <label for="meta_ads_industry_title_<?php echo $i; ?>"><?php _e('Industry Title', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_industry_title_<?php echo $i; ?>" name="meta_ads_industry_title_<?php echo $i; ?>" value="<?php echo esc_attr($industry_title); ?>" class="widefat">
            </p>
            <p>
                <label for="meta_ads_industry_content_<?php echo $i; ?>"><?php _e('Description', 'aimpro'); ?></label><br>
                <textarea id="meta_ads_industry_content_<?php echo $i; ?>" name="meta_ads_industry_content_<?php echo $i; ?>" class="widefat" rows="2"><?php echo esc_textarea($industry_content); ?></textarea>
            </p>
        </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Testimonial Section Callback
 */
function aimpro_meta_ads_testimonial_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_testimonial_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    // Get saved values or use defaults
    $testimonial_quote = get_post_meta($post->ID, '_meta_ads_testimonial_quote', true);
    if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
    
    $testimonial_name = get_post_meta($post->ID, '_meta_ads_testimonial_name', true);
    if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
    
    $testimonial_title = get_post_meta($post->ID, '_meta_ads_testimonial_title', true);
    if (empty($testimonial_title)) $testimonial_title = $defaults['testimonial_title'];
    
    ?>
    <p>
        <label for="meta_ads_testimonial_quote"><?php _e('Testimonial Quote', 'aimpro'); ?></label><br>
        <textarea id="meta_ads_testimonial_quote" name="meta_ads_testimonial_quote" class="widefat" rows="5"><?php echo esc_textarea($testimonial_quote); ?></textarea>
    </p>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="meta_ads_testimonial_name"><?php _e('Client Name', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_testimonial_name" name="meta_ads_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="meta_ads_testimonial_title"><?php _e('Client Title/Company', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_testimonial_title" name="meta_ads_testimonial_title" value="<?php echo esc_attr($testimonial_title); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * CTA Section Callback
 */
function aimpro_meta_ads_cta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'meta_ads_cta_nonce');
    
    $defaults = aimpro_get_meta_ads_default_values();
    
    // Get saved values or use defaults
    $cta_title = get_post_meta($post->ID, '_meta_ads_cta_title', true);
    if (empty($cta_title)) $cta_title = $defaults['cta_title'];
    
    $cta_content = get_post_meta($post->ID, '_meta_ads_cta_content', true);
    if (empty($cta_content)) $cta_content = $defaults['cta_content'];
    
    $cta_button_1_text = get_post_meta($post->ID, '_meta_ads_cta_button_1_text', true);
    if (empty($cta_button_1_text)) $cta_button_1_text = $defaults['cta_button_1_text'];
    
    $cta_button_2_text = get_post_meta($post->ID, '_meta_ads_cta_button_2_text', true);
    if (empty($cta_button_2_text)) $cta_button_2_text = $defaults['cta_button_2_text'];
    
    ?>
    <p>
        <label for="meta_ads_cta_title"><?php _e('CTA Title', 'aimpro'); ?></label><br>
        <input type="text" id="meta_ads_cta_title" name="meta_ads_cta_title" value="<?php echo esc_attr($cta_title); ?>" class="widefat">
    </p>
    <p>
        <label for="meta_ads_cta_content"><?php _e('CTA Content', 'aimpro'); ?></label><br>
        <textarea id="meta_ads_cta_content" name="meta_ads_cta_content" class="widefat" rows="3"><?php echo esc_textarea($cta_content); ?></textarea>
    </p>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="meta_ads_cta_button_1_text"><?php _e('Button 1 Text', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_cta_button_1_text" name="meta_ads_cta_button_1_text" value="<?php echo esc_attr($cta_button_1_text); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="meta_ads_cta_button_2_text"><?php _e('Button 2 Text', 'aimpro'); ?></label><br>
                <input type="text" id="meta_ads_cta_button_2_text" name="meta_ads_cta_button_2_text" value="<?php echo esc_attr($cta_button_2_text); ?>" class="widefat">
            </p>
        </div>
    </div>
    
    <h4><?php _e('CTA Benefits', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 3; $i++): 
        $cta_benefit = get_post_meta($post->ID, "_meta_ads_cta_benefit_{$i}", true);
        if (empty($cta_benefit)) $cta_benefit = $defaults["cta_benefit_{$i}"];
    ?>
    <p>
        <label for="meta_ads_cta_benefit_<?php echo $i; ?>"><?php echo sprintf(__('Benefit %d', 'aimpro'), $i); ?></label><br>
        <input type="text" id="meta_ads_cta_benefit_<?php echo $i; ?>" name="meta_ads_cta_benefit_<?php echo $i; ?>" value="<?php echo esc_attr($cta_benefit); ?>" class="widefat">
    </p>
    <?php endfor;
}

/**
 * Save meta box data
 */
function aimpro_save_meta_ads_meta_boxes($post_id) {
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
    if (isset($_POST['meta_ads_hero_nonce']) && wp_verify_nonce($_POST['meta_ads_hero_nonce'], basename(__FILE__))) {
        if (isset($_POST['meta_ads_hero_title'])) {
            update_post_meta($post_id, '_meta_ads_hero_title', sanitize_text_field($_POST['meta_ads_hero_title']));
        }
        if (isset($_POST['meta_ads_hero_subtitle'])) {
            update_post_meta($post_id, '_meta_ads_hero_subtitle', sanitize_textarea_field($_POST['meta_ads_hero_subtitle']));
        }
        
        // Hero Stats
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["meta_ads_hero_stat{$i}_number"])) {
                update_post_meta($post_id, "_meta_ads_hero_stat{$i}_number", sanitize_text_field($_POST["meta_ads_hero_stat{$i}_number"]));
            }
            if (isset($_POST["meta_ads_hero_stat{$i}_label"])) {
                update_post_meta($post_id, "_meta_ads_hero_stat{$i}_label", sanitize_text_field($_POST["meta_ads_hero_stat{$i}_label"]));
            }
        }
        
        // Hero CTAs
        if (isset($_POST['meta_ads_hero_cta1_text'])) {
            update_post_meta($post_id, '_meta_ads_hero_cta1_text', sanitize_text_field($_POST['meta_ads_hero_cta1_text']));
        }
        if (isset($_POST['meta_ads_hero_cta2_text'])) {
            update_post_meta($post_id, '_meta_ads_hero_cta2_text', sanitize_text_field($_POST['meta_ads_hero_cta2_text']));
        }
    }
    
    // Save Overview Section
    if (isset($_POST['meta_ads_overview_nonce']) && wp_verify_nonce($_POST['meta_ads_overview_nonce'], basename(__FILE__))) {
        if (isset($_POST['meta_ads_overview_title'])) {
            update_post_meta($post_id, '_meta_ads_overview_title', sanitize_text_field($_POST['meta_ads_overview_title']));
        }
        if (isset($_POST['meta_ads_overview_content'])) {
            update_post_meta($post_id, '_meta_ads_overview_content', sanitize_textarea_field($_POST['meta_ads_overview_content']));
        }
    }
    
    // Save Services Section
    if (isset($_POST['meta_ads_services_nonce']) && wp_verify_nonce($_POST['meta_ads_services_nonce'], basename(__FILE__))) {
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["meta_ads_service_title_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_service_title_{$i}", sanitize_text_field($_POST["meta_ads_service_title_{$i}"]));
            }
            if (isset($_POST["meta_ads_service_content_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_service_content_{$i}", sanitize_textarea_field($_POST["meta_ads_service_content_{$i}"]));
            }
            if (isset($_POST["meta_ads_service_icon_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_service_icon_{$i}", sanitize_text_field($_POST["meta_ads_service_icon_{$i}"]));
            }
        }
    }
    
    // Save Case Study Section
    if (isset($_POST['meta_ads_case_study_nonce']) && wp_verify_nonce($_POST['meta_ads_case_study_nonce'], basename(__FILE__))) {
        if (isset($_POST['meta_ads_case_study_title'])) {
            update_post_meta($post_id, '_meta_ads_case_study_title', sanitize_text_field($_POST['meta_ads_case_study_title']));
        }
        if (isset($_POST['meta_ads_case_study_intro'])) {
            update_post_meta($post_id, '_meta_ads_case_study_intro', sanitize_textarea_field($_POST['meta_ads_case_study_intro']));
        }
        if (isset($_POST['meta_ads_case_study_challenge'])) {
            update_post_meta($post_id, '_meta_ads_case_study_challenge', sanitize_textarea_field($_POST['meta_ads_case_study_challenge']));
        }
        if (isset($_POST['meta_ads_case_study_solution'])) {
            update_post_meta($post_id, '_meta_ads_case_study_solution', sanitize_textarea_field($_POST['meta_ads_case_study_solution']));
        }
        
        // Case Study Results
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["meta_ads_case_result_{$i}_number"])) {
                update_post_meta($post_id, "_meta_ads_case_result_{$i}_number", sanitize_text_field($_POST["meta_ads_case_result_{$i}_number"]));
            }
            if (isset($_POST["meta_ads_case_result_{$i}_label"])) {
                update_post_meta($post_id, "_meta_ads_case_result_{$i}_label", sanitize_text_field($_POST["meta_ads_case_result_{$i}_label"]));
            }
        }
    }
    
    // Save Process Section
    if (isset($_POST['meta_ads_process_nonce']) && wp_verify_nonce($_POST['meta_ads_process_nonce'], basename(__FILE__))) {
        if (isset($_POST['meta_ads_process_title'])) {
            update_post_meta($post_id, '_meta_ads_process_title', sanitize_text_field($_POST['meta_ads_process_title']));
        }
        
        // Process Steps
        for ($i = 1; $i <= 5; $i++) {
            if (isset($_POST["meta_ads_process_step_number_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_process_step_number_{$i}", sanitize_text_field($_POST["meta_ads_process_step_number_{$i}"]));
            }
            if (isset($_POST["meta_ads_process_step_title_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_process_step_title_{$i}", sanitize_text_field($_POST["meta_ads_process_step_title_{$i}"]));
            }
            if (isset($_POST["meta_ads_process_step_content_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_process_step_content_{$i}", sanitize_textarea_field($_POST["meta_ads_process_step_content_{$i}"]));
            }
        }
    }
    
    // Save Pricing Section
    if (isset($_POST['meta_ads_pricing_nonce']) && wp_verify_nonce($_POST['meta_ads_pricing_nonce'], basename(__FILE__))) {
        if (isset($_POST['meta_ads_pricing_title'])) {
            update_post_meta($post_id, '_meta_ads_pricing_title', sanitize_text_field($_POST['meta_ads_pricing_title']));
        }
        if (isset($_POST['meta_ads_pricing_subtitle'])) {
            update_post_meta($post_id, '_meta_ads_pricing_subtitle', sanitize_textarea_field($_POST['meta_ads_pricing_subtitle']));
        }
        
        // Pricing Packages
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["meta_ads_pricing_package_{$i}_name"])) {
                update_post_meta($post_id, "_meta_ads_pricing_package_{$i}_name", sanitize_text_field($_POST["meta_ads_pricing_package_{$i}_name"]));
            }
            if (isset($_POST["meta_ads_pricing_package_{$i}_price"])) {
                update_post_meta($post_id, "_meta_ads_pricing_package_{$i}_price", sanitize_text_field($_POST["meta_ads_pricing_package_{$i}_price"]));
            }
            if (isset($_POST["meta_ads_pricing_package_{$i}_period"])) {
                update_post_meta($post_id, "_meta_ads_pricing_package_{$i}_period", sanitize_text_field($_POST["meta_ads_pricing_package_{$i}_period"]));
            }
            if (isset($_POST["meta_ads_pricing_package_{$i}_description"])) {
                update_post_meta($post_id, "_meta_ads_pricing_package_{$i}_description", sanitize_text_field($_POST["meta_ads_pricing_package_{$i}_description"]));
            }
            if (isset($_POST["meta_ads_pricing_package_{$i}_features"])) {
                update_post_meta($post_id, "_meta_ads_pricing_package_{$i}_features", sanitize_textarea_field($_POST["meta_ads_pricing_package_{$i}_features"]));
            }
            if (isset($_POST["meta_ads_pricing_package_{$i}_button_text"])) {
                update_post_meta($post_id, "_meta_ads_pricing_package_{$i}_button_text", sanitize_text_field($_POST["meta_ads_pricing_package_{$i}_button_text"]));
            }
            
            // Optional fields
            if (isset($_POST["meta_ads_pricing_package_{$i}_badge"])) {
                update_post_meta($post_id, "_meta_ads_pricing_package_{$i}_badge", sanitize_text_field($_POST["meta_ads_pricing_package_{$i}_badge"]));
            }
            if (isset($_POST["meta_ads_pricing_package_{$i}_featured"])) {
                update_post_meta($post_id, "_meta_ads_pricing_package_{$i}_featured", sanitize_text_field($_POST["meta_ads_pricing_package_{$i}_featured"]));
            }
        }
    }
    
    // Save Tools Section
    if (isset($_POST['meta_ads_tools_nonce']) && wp_verify_nonce($_POST['meta_ads_tools_nonce'], basename(__FILE__))) {
        if (isset($_POST['meta_ads_tools_title'])) {
            update_post_meta($post_id, '_meta_ads_tools_title', sanitize_text_field($_POST['meta_ads_tools_title']));
        }
        
        // Tools List
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["meta_ads_tool_title_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_tool_title_{$i}", sanitize_text_field($_POST["meta_ads_tool_title_{$i}"]));
            }
            if (isset($_POST["meta_ads_tool_content_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_tool_content_{$i}", sanitize_textarea_field($_POST["meta_ads_tool_content_{$i}"]));
            }
            if (isset($_POST["meta_ads_tool_icon_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_tool_icon_{$i}", sanitize_text_field($_POST["meta_ads_tool_icon_{$i}"]));
            }
        }
    }
    
    // Save Industries Section
    if (isset($_POST['meta_ads_industries_nonce']) && wp_verify_nonce($_POST['meta_ads_industries_nonce'], basename(__FILE__))) {
        if (isset($_POST['meta_ads_industries_title'])) {
            update_post_meta($post_id, '_meta_ads_industries_title', sanitize_text_field($_POST['meta_ads_industries_title']));
        }
        
        // Industries List
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["meta_ads_industry_title_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_industry_title_{$i}", sanitize_text_field($_POST["meta_ads_industry_title_{$i}"]));
            }
            if (isset($_POST["meta_ads_industry_content_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_industry_content_{$i}", sanitize_textarea_field($_POST["meta_ads_industry_content_{$i}"]));
            }
        }
    }
    
    // Save Testimonial Section
    if (isset($_POST['meta_ads_testimonial_nonce']) && wp_verify_nonce($_POST['meta_ads_testimonial_nonce'], basename(__FILE__))) {
        if (isset($_POST['meta_ads_testimonial_quote'])) {
            update_post_meta($post_id, '_meta_ads_testimonial_quote', sanitize_textarea_field($_POST['meta_ads_testimonial_quote']));
        }
        if (isset($_POST['meta_ads_testimonial_name'])) {
            update_post_meta($post_id, '_meta_ads_testimonial_name', sanitize_text_field($_POST['meta_ads_testimonial_name']));
        }
        if (isset($_POST['meta_ads_testimonial_title'])) {
            update_post_meta($post_id, '_meta_ads_testimonial_title', sanitize_text_field($_POST['meta_ads_testimonial_title']));
        }
    }
    
    // Save CTA Section
    if (isset($_POST['meta_ads_cta_nonce']) && wp_verify_nonce($_POST['meta_ads_cta_nonce'], basename(__FILE__))) {
        if (isset($_POST['meta_ads_cta_title'])) {
            update_post_meta($post_id, '_meta_ads_cta_title', sanitize_text_field($_POST['meta_ads_cta_title']));
        }
        if (isset($_POST['meta_ads_cta_content'])) {
            update_post_meta($post_id, '_meta_ads_cta_content', sanitize_textarea_field($_POST['meta_ads_cta_content']));
        }
        if (isset($_POST['meta_ads_cta_button_1_text'])) {
            update_post_meta($post_id, '_meta_ads_cta_button_1_text', sanitize_text_field($_POST['meta_ads_cta_button_1_text']));
        }
        if (isset($_POST['meta_ads_cta_button_2_text'])) {
            update_post_meta($post_id, '_meta_ads_cta_button_2_text', sanitize_text_field($_POST['meta_ads_cta_button_2_text']));
        }
        
        // CTA Benefits
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["meta_ads_cta_benefit_{$i}"])) {
                update_post_meta($post_id, "_meta_ads_cta_benefit_{$i}", sanitize_text_field($_POST["meta_ads_cta_benefit_{$i}"]));
            }
        }
    }
}
add_action('save_post', 'aimpro_save_meta_ads_meta_boxes');
