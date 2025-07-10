<?php
/**
 * Google Ads Meta Fields
 *
 * @package Aimpro
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set default values for Google Ads page meta fields
 * This ensures fields are pre-populated with the frontend content
 */
function aimpro_get_google_ads_default_values() {
    return array(
        // Hero Section
        'hero_badge' => 'Google Premier Partner',
        'hero_title' => 'Google Ads Management That DOMINATES SEARCH',
        'hero_subtitle' => 'Stop losing money on Google Ads. Our certified experts create high-converting campaigns that turn search traffic into paying customers with 199% increase in conversion rates.',
        
        // Hero Stats
        'hero_stat1_number' => '199%',
        'hero_stat1_label' => 'Increase in Conversion Rates',
        'hero_stat2_number' => '67%',
        'hero_stat2_label' => 'Lower Cost Per Click',
        'hero_stat3_number' => '£1.8M+',
        'hero_stat3_label' => 'Google Ads Managed',
        
        // Hero CTAs
        'hero_cta1_text' => 'Get Free Google Ads Audit',
        'hero_cta2_text' => 'View Google Ads Services',
        
        // Services Section
        'services_title' => 'Complete Google Ads Solutions',
        'services_subtitle' => 'From search campaigns to YouTube advertising, we manage every aspect of your Google Ads presence for maximum impact and ROI.',
        
        // Service Items (6 services)
        'service_title_1' => 'Search Campaigns',
        'service_content_1' => 'Target high-intent keywords when customers are actively searching for your products or services.',
        'service_features_1' => "Keyword research & strategy\nAd copy testing & optimisation\nBid management\nLanding page optimisation",
        
        'service_title_2' => 'Display Campaigns',
        'service_content_2' => 'Reach potential customers across millions of websites with compelling visual advertisements.',
        'service_features_2' => "Responsive display ads\nAudience targeting\nRemarketing campaigns\nCreative optimisation",
        
        'service_title_3' => 'Shopping Campaigns',
        'service_content_3' => 'Showcase your products directly in Google search results with optimised shopping ads.',
        'service_features_3' => "Product feed optimisation\nSmart shopping campaigns\nMerchant centre setup\nPerformance monitoring",
        
        'service_title_4' => 'YouTube Advertising',
        'service_content_4' => 'Engage audiences with video advertising on the world\'s largest video platform.',
        'service_features_4' => "Video ad creation\nAudience targeting\nCampaign optimisation\nPerformance tracking",
        
        'service_title_5' => 'Performance Max',
        'service_content_5' => 'Leverage Google\'s AI to maximise performance across all Google Ads inventory.',
        'service_features_5' => "Automated bidding\nCross-network reach\nAsset optimisation\nConversion tracking",
        
        'service_title_6' => 'Local Campaigns',
        'service_content_6' => 'Drive foot traffic and local actions with location-based advertising campaigns.',
        'service_features_6' => "Local store visits\nLocation extensions\nStore sales tracking\nRadius targeting",
        
        // Case Study Section
        'case_study_label' => 'Google Ads Success Story',
        'case_study_title' => 'Law Firm Increases Qualified Leads by 340% with Strategic Google Ads',
        'case_study_challenge' => 'A Manchester-based law firm was struggling with expensive Google Ads campaigns that generated low-quality leads, wasting £5,000+ monthly budget.',
        'case_study_solution' => 'We restructured their campaigns with precise keyword targeting, created compelling ad copy focused on legal expertise, and implemented advanced conversion tracking.',
        'case_study_results_intro' => 'Within 120 days, we transformed their Google Ads performance completely.',
        
        // Case Study Results
        'case_result_1_number' => '340%',
        'case_result_1_label' => 'Increase in Qualified Leads',
        'case_result_2_number' => '58%',
        'case_result_2_label' => 'Lower Cost Per Lead',
        'case_result_3_number' => '720%',
        'case_result_3_label' => 'Return on Ad Spend',
        'case_result_4_number' => '£85,000',
        'case_result_4_label' => 'Monthly Revenue Generated',
        
        // Process Section
        'process_title' => 'Our Google Ads Management Process',
        'process_subtitle' => 'We follow a proven methodology that consistently delivers exceptional results for our clients.',
        
        'process_step_number_1' => '01',
        'process_step_title_1' => 'Account Audit',
        'process_step_content_1' => 'Comprehensive analysis of your current Google Ads performance and opportunities.',
        
        'process_step_number_2' => '02',
        'process_step_title_2' => 'Strategy Development',
        'process_step_content_2' => 'Create a custom strategy based on your goals, industry, and target audience.',
        
        'process_step_number_3' => '03',
        'process_step_title_3' => 'Campaign Build',
        'process_step_content_3' => 'Build optimised campaigns with proper structure, keywords, and tracking setup.',
        
        'process_step_number_4' => '04',
        'process_step_title_4' => 'Launch & Monitor',
        'process_step_content_4' => 'Launch campaigns and closely monitor performance during the critical first weeks.',
        
        'process_step_number_5' => '05',
        'process_step_title_5' => 'optimise & Scale',
        'process_step_content_5' => 'Continuously optimise based on performance data and scale successful campaigns.',
        
        // Tools Section
        'tools_title' => 'Advanced Tools & Technologies',
        'tools_subtitle' => 'We use cutting-edge tools and technologies to maximise your Google Ads performance.',
        
        'tool_name_1' => 'Google Ads Editor',
        'tool_description_1' => 'Bulk campaign management and optimisation',
        
        'tool_name_2' => 'Google Analytics 4',
        'tool_description_2' => 'Advanced conversion tracking and attribution',
        
        'tool_name_3' => 'Google Tag Manager',
        'tool_description_3' => 'Precise tracking implementation',
        
        'tool_name_4' => 'Keyword Planner',
        'tool_description_4' => 'Keyword research and forecasting',
        
        'tool_name_5' => 'SEMrush/Ahrefs',
        'tool_description_5' => 'Competitor analysis and keyword insights',
        
        'tool_name_6' => 'Google optimise',
        'tool_description_6' => 'Landing page testing and optimisation',
        
        // Industries Section
        'industries_title' => 'Industries We specialise In',
        'industries_subtitle' => 'Our Google Ads expertise spans across multiple industries with proven success.',
        
        'industry_name_1' => 'Legal Services',
        'industry_description_1' => 'Personal injury, family law, criminal defence, and corporate legal services.',
        
        'industry_name_2' => 'Healthcare & Medical',
        'industry_description_2' => 'Private practices, dental clinics, cosmetic surgery, and healthcare services.',
        
        'industry_name_3' => 'E-commerce & Retail',
        'industry_description_3' => 'Online stores, shopping campaigns, and product advertising optimisation.',
        
        'industry_name_4' => 'Home Services',
        'industry_description_4' => 'Plumbers, electricians, HVAC, roofing, and local service providers.',
        
        'industry_name_5' => 'Financial Services',
        'industry_description_5' => 'Insurance, mortgages, financial planning, and investment services.',
        
        'industry_name_6' => 'B2B Services',
        'industry_description_6' => 'Professional services, consulting, software, and business solutions.',
        
        // Pricing Section
        'pricing_title' => 'Google Ads Management Packages',
        'pricing_subtitle' => 'Transparent pricing with no hidden fees. Choose the package that fits your business needs.',
        
        // Pricing Package 1 - Starter
        'pricing_package_1_name' => 'Starter',
        'pricing_package_1_price' => '£497',
        'pricing_package_1_period' => '/month',
        'pricing_package_1_features' => "Up to £2,000 ad spend\n2 campaign types\nBasic conversion tracking\nMonthly reporting\nEmail support",
        'pricing_package_1_button_text' => 'Get Started',
        
        // Pricing Package 2 - Professional
        'pricing_package_2_name' => 'Professional',
        'pricing_package_2_price' => '£897',
        'pricing_package_2_period' => '/month',
        'pricing_package_2_features' => "Up to £5,000 ad spend\nAll campaign types\nAdvanced conversion tracking\nBi-weekly optimisation\nMonthly strategy calls\nPriority support",
        'pricing_package_2_button_text' => 'Get Started',
        'pricing_package_2_badge' => 'Most Popular',
        'pricing_package_2_featured' => true,
        
        // Pricing Package 3 - Enterprise
        'pricing_package_3_name' => 'Enterprise',
        'pricing_package_3_price' => '£1,497',
        'pricing_package_3_period' => '/month',
        'pricing_package_3_features' => "£5,000+ ad spend\nFull campaign suite\nAdvanced attribution\nWeekly optimisation\nDedicated account manager\n24/7 support",
        'pricing_package_3_button_text' => 'Get Started',
        
        // Testimonial Section
        'testimonial_quote' => 'The results speak for themselves. Our Google Ads performance improved dramatically within the first month. Cost per lead dropped by 60% while lead quality increased significantly. Couldn\'t be happier with the service.',
        'testimonial_name' => 'James Richardson',
        'testimonial_title' => 'Managing Director, Richardson Legal Services',
        
        // Simple CTA Section
        'simple_cta_title' => 'Ready to Dominate Google Search?',
        'simple_cta_content' => 'Get a free Google Ads audit and strategy session. We\'ll analyse your current performance and show you exactly how to improve your ROI.',
        'simple_cta_button_text' => 'Get Free Google Ads Audit',
        'simple_cta_feature_1' => 'Free account analysis',
        'simple_cta_feature_2' => 'Competitor research',
        'simple_cta_feature_3' => 'Performance improvement plan'
    );
}

/**
 * Register Google Ads meta boxes
 */
function aimpro_register_google_ads_meta_boxes() {
    // Only show these meta boxes on the Google Ads page template
    $screen = get_current_screen();
    if ($screen->id == 'page' && isset($_GET['post'])) {
        $template = get_post_meta($_GET['post'], '_wp_page_template', true);
        if ($template != 'page-google-ads.php') {
            return;
        }
    }
    
    add_meta_box(
        'google_ads_hero_section',
        __('Hero Section', 'aimpro'),
        'aimpro_google_ads_hero_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'google_ads_services_section',
        __('Services Section', 'aimpro'),
        'aimpro_google_ads_services_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'google_ads_case_study_section',
        __('Case Study Section', 'aimpro'),
        'aimpro_google_ads_case_study_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'google_ads_process_section',
        __('Process Section', 'aimpro'),
        'aimpro_google_ads_process_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'google_ads_tools_section',
        __('Tools Section', 'aimpro'),
        'aimpro_google_ads_tools_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'google_ads_industries_section',
        __('Industries Section', 'aimpro'),
        'aimpro_google_ads_industries_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'google_ads_pricing_section',
        __('Pricing Section', 'aimpro'),
        'aimpro_google_ads_pricing_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'google_ads_testimonial_section',
        __('Testimonial Section', 'aimpro'),
        'aimpro_google_ads_testimonial_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'google_ads_simple_cta_section',
        __('Simple CTA Section', 'aimpro'),
        'aimpro_google_ads_simple_cta_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes_page', 'aimpro_register_google_ads_meta_boxes');

/**
 * Hero Section Callback
 */
function aimpro_google_ads_hero_callback($post) {
    wp_nonce_field(basename(__FILE__), 'google_ads_hero_nonce');
    
    $defaults = aimpro_get_google_ads_default_values();
    
    // Get saved values or use defaults if empty
    $hero_badge = get_post_meta($post->ID, '_google_ads_hero_badge', true);
    if (empty($hero_badge)) $hero_badge = $defaults['hero_badge'];
    
    $hero_title = get_post_meta($post->ID, '_google_ads_hero_title', true);
    if (empty($hero_title)) $hero_title = $defaults['hero_title'];
    
    $hero_subtitle = get_post_meta($post->ID, '_google_ads_hero_subtitle', true);
    if (empty($hero_subtitle)) $hero_subtitle = $defaults['hero_subtitle'];
    
    // Hero Stats
    $hero_stat1_number = get_post_meta($post->ID, '_google_ads_hero_stat1_number', true);
    if (empty($hero_stat1_number)) $hero_stat1_number = $defaults['hero_stat1_number'];
    
    $hero_stat1_label = get_post_meta($post->ID, '_google_ads_hero_stat1_label', true);
    if (empty($hero_stat1_label)) $hero_stat1_label = $defaults['hero_stat1_label'];
    
    $hero_stat2_number = get_post_meta($post->ID, '_google_ads_hero_stat2_number', true);
    if (empty($hero_stat2_number)) $hero_stat2_number = $defaults['hero_stat2_number'];
    
    $hero_stat2_label = get_post_meta($post->ID, '_google_ads_hero_stat2_label', true);
    if (empty($hero_stat2_label)) $hero_stat2_label = $defaults['hero_stat2_label'];
    
    $hero_stat3_number = get_post_meta($post->ID, '_google_ads_hero_stat3_number', true);
    if (empty($hero_stat3_number)) $hero_stat3_number = $defaults['hero_stat3_number'];
    
    $hero_stat3_label = get_post_meta($post->ID, '_google_ads_hero_stat3_label', true);
    if (empty($hero_stat3_label)) $hero_stat3_label = $defaults['hero_stat3_label'];
    
    // Hero CTAs
    $hero_cta1_text = get_post_meta($post->ID, '_google_ads_hero_cta1_text', true);
    if (empty($hero_cta1_text)) $hero_cta1_text = $defaults['hero_cta1_text'];
    
    $hero_cta2_text = get_post_meta($post->ID, '_google_ads_hero_cta2_text', true);
    if (empty($hero_cta2_text)) $hero_cta2_text = $defaults['hero_cta2_text'];
    
    // Output fields
    ?>
    <p>
        <label for="google_ads_hero_badge"><?php _e('Hero Badge', 'aimpro'); ?></label><br>
        <input type="text" id="google_ads_hero_badge" name="google_ads_hero_badge" value="<?php echo esc_attr($hero_badge); ?>" class="widefat">
    </p>
    <p>
        <label for="google_ads_hero_title"><?php _e('Hero Title', 'aimpro'); ?></label><br>
        <?php wp_editor($hero_title, 'google_ads_hero_title', array(
            'textarea_name' => 'google_ads_hero_title',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    <p>
        <label for="google_ads_hero_subtitle"><?php _e('Hero Subtitle', 'aimpro'); ?></label><br>
        <?php wp_editor($hero_subtitle, 'google_ads_hero_subtitle', array(
            'textarea_name' => 'google_ads_hero_subtitle',
            'media_buttons' => false,
            'textarea_rows' => 4,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    
    <h4><?php _e('Hero Stats', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="google_ads_hero_stat1_number"><?php _e('Stat 1 Number', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_hero_stat1_number" name="google_ads_hero_stat1_number" value="<?php echo esc_attr($hero_stat1_number); ?>" class="widefat">
            </p>
            <p>
                <label for="google_ads_hero_stat1_label"><?php _e('Stat 1 Label', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_hero_stat1_label" name="google_ads_hero_stat1_label" value="<?php echo esc_attr($hero_stat1_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="google_ads_hero_stat2_number"><?php _e('Stat 2 Number', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_hero_stat2_number" name="google_ads_hero_stat2_number" value="<?php echo esc_attr($hero_stat2_number); ?>" class="widefat">
            </p>
            <p>
                <label for="google_ads_hero_stat2_label"><?php _e('Stat 2 Label', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_hero_stat2_label" name="google_ads_hero_stat2_label" value="<?php echo esc_attr($hero_stat2_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="google_ads_hero_stat3_number"><?php _e('Stat 3 Number', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_hero_stat3_number" name="google_ads_hero_stat3_number" value="<?php echo esc_attr($hero_stat3_number); ?>" class="widefat">
            </p>
            <p>
                <label for="google_ads_hero_stat3_label"><?php _e('Stat 3 Label', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_hero_stat3_label" name="google_ads_hero_stat3_label" value="<?php echo esc_attr($hero_stat3_label); ?>" class="widefat">
            </p>
        </div>
    </div>
    
    <h4><?php _e('Hero CTAs', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="google_ads_hero_cta1_text"><?php _e('Primary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_hero_cta1_text" name="google_ads_hero_cta1_text" value="<?php echo esc_attr($hero_cta1_text); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="google_ads_hero_cta2_text"><?php _e('Secondary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_hero_cta2_text" name="google_ads_hero_cta2_text" value="<?php echo esc_attr($hero_cta2_text); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Services Section Callback
 */
function aimpro_google_ads_services_callback($post) {
    wp_nonce_field(basename(__FILE__), 'google_ads_services_nonce');
    
    $defaults = aimpro_get_google_ads_default_values();
    
    // Get saved values or use defaults
    $services_title = get_post_meta($post->ID, '_google_ads_services_title', true);
    if (empty($services_title)) $services_title = $defaults['services_title'];
    
    $services_subtitle = get_post_meta($post->ID, '_google_ads_services_subtitle', true);
    if (empty($services_subtitle)) $services_subtitle = $defaults['services_subtitle'];
    
    ?>
    <p>
        <label for="google_ads_services_title"><?php _e('Services Title', 'aimpro'); ?></label><br>
        <?php wp_editor($services_title, 'google_ads_services_title', array(
            'textarea_name' => 'google_ads_services_title',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link')
        )); ?>
    </p>
    <p>
        <label for="google_ads_services_subtitle"><?php _e('Services Subtitle', 'aimpro'); ?></label><br>
        <?php wp_editor($services_subtitle, 'google_ads_services_subtitle', array(
            'textarea_name' => 'google_ads_services_subtitle',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    
    <h4><?php _e('Service Items', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 6; $i++): 
        $service_title = get_post_meta($post->ID, "_google_ads_service_title_{$i}", true);
        if (empty($service_title)) $service_title = $defaults["service_title_{$i}"];
        
        $service_content = get_post_meta($post->ID, "_google_ads_service_content_{$i}", true);
        if (empty($service_content)) $service_content = $defaults["service_content_{$i}"];
        
        $service_features = get_post_meta($post->ID, "_google_ads_service_features_{$i}", true);
        if (empty($service_features)) $service_features = $defaults["service_features_{$i}"];
    ?>
    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0;">
        <h5><?php echo sprintf(__('Service %d', 'aimpro'), $i); ?></h5>
        <p>
            <label for="google_ads_service_title_<?php echo $i; ?>"><?php _e('Service Title', 'aimpro'); ?></label><br>
            <?php wp_editor($service_title, "google_ads_service_title_{$i}", array(
                'textarea_name' => "google_ads_service_title_{$i}",
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); ?>
        </p>
        <p>
            <label for="google_ads_service_content_<?php echo $i; ?>"><?php _e('Service Content', 'aimpro'); ?></label><br>
            <?php wp_editor($service_content, "google_ads_service_content_{$i}", array(
                'textarea_name' => "google_ads_service_content_{$i}",
                'media_buttons' => false,
                'textarea_rows' => 3,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
            )); ?>
        </p>
        <p>
            <label for="google_ads_service_features_<?php echo $i; ?>"><?php _e('Service Features (one per line)', 'aimpro'); ?></label><br>
            <textarea id="google_ads_service_features_<?php echo $i; ?>" name="google_ads_service_features_<?php echo $i; ?>" class="widefat" rows="4"><?php echo esc_textarea($service_features); ?></textarea>
        </p>
    </div>
    <?php endfor; ?>
    <?php
}

/**
 * Case Study Section Callback
 */
function aimpro_google_ads_case_study_callback($post) {
    wp_nonce_field(basename(__FILE__), 'google_ads_case_study_nonce');
    
    $defaults = aimpro_get_google_ads_default_values();
    
    // Get saved values or use defaults
    $case_study_label = get_post_meta($post->ID, '_google_ads_case_study_label', true);
    if (empty($case_study_label)) $case_study_label = $defaults['case_study_label'];
    
    $case_study_title = get_post_meta($post->ID, '_google_ads_case_study_title', true);
    if (empty($case_study_title)) $case_study_title = $defaults['case_study_title'];
    
    $case_study_challenge = get_post_meta($post->ID, '_google_ads_case_study_challenge', true);
    if (empty($case_study_challenge)) $case_study_challenge = $defaults['case_study_challenge'];
    
    $case_study_solution = get_post_meta($post->ID, '_google_ads_case_study_solution', true);
    if (empty($case_study_solution)) $case_study_solution = $defaults['case_study_solution'];
    
    $case_study_results_intro = get_post_meta($post->ID, '_google_ads_case_study_results_intro', true);
    if (empty($case_study_results_intro)) $case_study_results_intro = $defaults['case_study_results_intro'];
    
    ?>
    <p>
        <label for="google_ads_case_study_label"><?php _e('Case Study Label', 'aimpro'); ?></label><br>
        <input type="text" id="google_ads_case_study_label" name="google_ads_case_study_label" value="<?php echo esc_attr($case_study_label); ?>" class="widefat">
    </p>
    <p>
        <label for="google_ads_case_study_title"><?php _e('Case Study Title', 'aimpro'); ?></label><br>
        <?php wp_editor($case_study_title, 'google_ads_case_study_title', array(
            'textarea_name' => 'google_ads_case_study_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link')
        )); ?>
    </p>
    <p>
        <label for="google_ads_case_study_challenge"><?php _e('Challenge', 'aimpro'); ?></label><br>
        <?php wp_editor($case_study_challenge, 'google_ads_case_study_challenge', array(
            'textarea_name' => 'google_ads_case_study_challenge',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    <p>
        <label for="google_ads_case_study_solution"><?php _e('Solution', 'aimpro'); ?></label><br>
        <?php wp_editor($case_study_solution, 'google_ads_case_study_solution', array(
            'textarea_name' => 'google_ads_case_study_solution',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    <p>
        <label for="google_ads_case_study_results_intro"><?php _e('Results Intro', 'aimpro'); ?></label><br>
        <?php wp_editor($case_study_results_intro, 'google_ads_case_study_results_intro', array(
            'textarea_name' => 'google_ads_case_study_results_intro',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link')
        )); ?>
    </p>
    
    <h4><?php _e('Case Study Results', 'aimpro'); ?></h4>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
        <?php for ($i = 1; $i <= 4; $i++): 
            $case_result_number = get_post_meta($post->ID, "_google_ads_case_result_{$i}_number", true);
            if (empty($case_result_number)) $case_result_number = $defaults["case_result_{$i}_number"];
            
            $case_result_label = get_post_meta($post->ID, "_google_ads_case_result_{$i}_label", true);
            if (empty($case_result_label)) $case_result_label = $defaults["case_result_{$i}_label"];
        ?>
        <div style="border: 1px solid #ddd; padding: 10px;">
            <h5><?php echo sprintf(__('Result %d', 'aimpro'), $i); ?></h5>
            <p>
                <label for="google_ads_case_result_<?php echo $i; ?>_number"><?php _e('Number', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_case_result_<?php echo $i; ?>_number" name="google_ads_case_result_<?php echo $i; ?>_number" value="<?php echo esc_attr($case_result_number); ?>" class="widefat">
            </p>
            <p>
                <label for="google_ads_case_result_<?php echo $i; ?>_label"><?php _e('Label', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_case_result_<?php echo $i; ?>_label" name="google_ads_case_result_<?php echo $i; ?>_label" value="<?php echo esc_attr($case_result_label); ?>" class="widefat">
            </p>
        </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Process Section Callback
 */
function aimpro_google_ads_process_callback($post) {
    wp_nonce_field(basename(__FILE__), 'google_ads_process_nonce');
    
    $defaults = aimpro_get_google_ads_default_values();
    
    // Get saved values or use defaults
    $process_title = get_post_meta($post->ID, '_google_ads_process_title', true);
    if (empty($process_title)) $process_title = $defaults['process_title'];
    
    $process_subtitle = get_post_meta($post->ID, '_google_ads_process_subtitle', true);
    if (empty($process_subtitle)) $process_subtitle = $defaults['process_subtitle'];
    
    ?>
    <p>
        <label for="google_ads_process_title"><?php _e('Process Title', 'aimpro'); ?></label><br>
        <?php wp_editor($process_title, 'google_ads_process_title', array(
            'textarea_name' => 'google_ads_process_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link')
        )); ?>
    </p>
    <p>
        <label for="google_ads_process_subtitle"><?php _e('Process Subtitle', 'aimpro'); ?></label><br>
        <?php wp_editor($process_subtitle, 'google_ads_process_subtitle', array(
            'textarea_name' => 'google_ads_process_subtitle',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    
    <h4><?php _e('Process Steps', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 5; $i++): 
        $step_number = get_post_meta($post->ID, "_google_ads_process_step_number_{$i}", true);
        if (empty($step_number)) $step_number = $defaults["process_step_number_{$i}"];
        
        $step_title = get_post_meta($post->ID, "_google_ads_process_step_title_{$i}", true);
        if (empty($step_title)) $step_title = $defaults["process_step_title_{$i}"];
        
        $step_content = get_post_meta($post->ID, "_google_ads_process_step_content_{$i}", true);
        if (empty($step_content)) $step_content = $defaults["process_step_content_{$i}"];
    ?>
    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0;">
        <h5><?php echo sprintf(__('Step %d', 'aimpro'), $i); ?></h5>
        <div style="display: flex; gap: 15px;">
            <div style="flex: 0 0 80px;">
                <p>
                    <label for="google_ads_process_step_number_<?php echo $i; ?>"><?php _e('Number', 'aimpro'); ?></label><br>
                    <input type="text" id="google_ads_process_step_number_<?php echo $i; ?>" name="google_ads_process_step_number_<?php echo $i; ?>" value="<?php echo esc_attr($step_number); ?>" class="widefat">
                </p>
            </div>
            <div style="flex: 1;">
                <p>
                    <label for="google_ads_process_step_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                    <?php wp_editor($step_title, "google_ads_process_step_title_{$i}", array(
                        'textarea_name' => "google_ads_process_step_title_{$i}",
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </p>
                <p>
                    <label for="google_ads_process_step_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                    <?php wp_editor($step_content, "google_ads_process_step_content_{$i}", array(
                        'textarea_name' => "google_ads_process_step_content_{$i}",
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </p>
            </div>
        </div>
    </div>
    <?php endfor; ?>
    <?php
}

/**
 * Tools Section Callback
 */
function aimpro_google_ads_tools_callback($post) {
    wp_nonce_field(basename(__FILE__), 'google_ads_tools_nonce');
    
    $defaults = aimpro_get_google_ads_default_values();
    
    // Get saved values or use defaults
    $tools_title = get_post_meta($post->ID, '_google_ads_tools_title', true);
    if (empty($tools_title)) $tools_title = $defaults['tools_title'];
    
    $tools_subtitle = get_post_meta($post->ID, '_google_ads_tools_subtitle', true);
    if (empty($tools_subtitle)) $tools_subtitle = $defaults['tools_subtitle'];
    
    ?>
    <p>
        <label for="google_ads_tools_title"><?php _e('Tools Title', 'aimpro'); ?></label><br>
        <?php wp_editor($tools_title, 'google_ads_tools_title', array(
            'textarea_name' => 'google_ads_tools_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link')
        )); ?>
    </p>
    <p>
        <label for="google_ads_tools_subtitle"><?php _e('Tools Subtitle', 'aimpro'); ?></label><br>
        <?php wp_editor($tools_subtitle, 'google_ads_tools_subtitle', array(
            'textarea_name' => 'google_ads_tools_subtitle',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    
    <h4><?php _e('Tools List', 'aimpro'); ?></h4>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
        <?php for ($i = 1; $i <= 6; $i++): 
            $tool_name = get_post_meta($post->ID, "_google_ads_tool_name_{$i}", true);
            if (empty($tool_name)) $tool_name = $defaults["tool_name_{$i}"];
            
            $tool_description = get_post_meta($post->ID, "_google_ads_tool_description_{$i}", true);
            if (empty($tool_description)) $tool_description = $defaults["tool_description_{$i}"];
        ?>
        <div style="border: 1px solid #ddd; padding: 10px;">
            <h5><?php echo sprintf(__('Tool %d', 'aimpro'), $i); ?></h5>
            <p>
                <label for="google_ads_tool_name_<?php echo $i; ?>"><?php _e('Tool Name', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_tool_name_<?php echo $i; ?>" name="google_ads_tool_name_<?php echo $i; ?>" value="<?php echo esc_attr($tool_name); ?>" class="widefat">
            </p>
            <p>
                <label for="google_ads_tool_description_<?php echo $i; ?>"><?php _e('Description', 'aimpro'); ?></label><br>
                <?php wp_editor($tool_description, "google_ads_tool_description_{$i}", array(
                    'textarea_name' => "google_ads_tool_description_{$i}",
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )); ?>
            </p>
        </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Industries Section Callback
 */
function aimpro_google_ads_industries_callback($post) {
    wp_nonce_field(basename(__FILE__), 'google_ads_industries_nonce');
    
    $defaults = aimpro_get_google_ads_default_values();
    
    // Get saved values or use defaults
    $industries_title = get_post_meta($post->ID, '_google_ads_industries_title', true);
    if (empty($industries_title)) $industries_title = $defaults['industries_title'];
    
    $industries_subtitle = get_post_meta($post->ID, '_google_ads_industries_subtitle', true);
    if (empty($industries_subtitle)) $industries_subtitle = $defaults['industries_subtitle'];
    
    ?>
    <p>
        <label for="google_ads_industries_title"><?php _e('Industries Title', 'aimpro'); ?></label><br>
        <?php wp_editor($industries_title, 'google_ads_industries_title', array(
            'textarea_name' => 'google_ads_industries_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link')
        )); ?>
    </p>
    <p>
        <label for="google_ads_industries_subtitle"><?php _e('Industries Subtitle', 'aimpro'); ?></label><br>
        <?php wp_editor($industries_subtitle, 'google_ads_industries_subtitle', array(
            'textarea_name' => 'google_ads_industries_subtitle',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    
    <h4><?php _e('Industries List', 'aimpro'); ?></h4>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
        <?php for ($i = 1; $i <= 6; $i++): 
            $industry_name = get_post_meta($post->ID, "_google_ads_industry_name_{$i}", true);
            if (empty($industry_name)) $industry_name = $defaults["industry_name_{$i}"];
            
            $industry_description = get_post_meta($post->ID, "_google_ads_industry_description_{$i}", true);
            if (empty($industry_description)) $industry_description = $defaults["industry_description_{$i}"];
        ?>
        <div style="border: 1px solid #ddd; padding: 10px;">
            <h5><?php echo sprintf(__('Industry %d', 'aimpro'), $i); ?></h5>
            <p>
                <label for="google_ads_industry_name_<?php echo $i; ?>"><?php _e('Industry Name', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_industry_name_<?php echo $i; ?>" name="google_ads_industry_name_<?php echo $i; ?>" value="<?php echo esc_attr($industry_name); ?>" class="widefat">
            </p>
            <p>
                <label for="google_ads_industry_description_<?php echo $i; ?>"><?php _e('Description', 'aimpro'); ?></label><br>
                <?php wp_editor($industry_description, "google_ads_industry_description_{$i}", array(
                    'textarea_name' => "google_ads_industry_description_{$i}",
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link')
                )); ?>
            </p>
        </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Pricing Section Callback
 */
function aimpro_google_ads_pricing_callback($post) {
    wp_nonce_field(basename(__FILE__), 'google_ads_pricing_nonce');
    
    $defaults = aimpro_get_google_ads_default_values();
    
    // Get saved values or use defaults
    $pricing_title = get_post_meta($post->ID, '_google_ads_pricing_title', true);
    if (empty($pricing_title)) $pricing_title = $defaults['pricing_title'];
    
    $pricing_subtitle = get_post_meta($post->ID, '_google_ads_pricing_subtitle', true);
    if (empty($pricing_subtitle)) $pricing_subtitle = $defaults['pricing_subtitle'];
    
    ?>
    <p>
        <label for="google_ads_pricing_title"><?php _e('Pricing Title', 'aimpro'); ?></label><br>
        <?php wp_editor($pricing_title, 'google_ads_pricing_title', array(
            'textarea_name' => 'google_ads_pricing_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link')
        )); ?>
    </p>
    <p>
        <label for="google_ads_pricing_subtitle"><?php _e('Pricing Subtitle', 'aimpro'); ?></label><br>
        <?php wp_editor($pricing_subtitle, 'google_ads_pricing_subtitle', array(
            'textarea_name' => 'google_ads_pricing_subtitle',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    
    <h4><?php _e('Pricing Packages', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 3; $i++): 
        $package_name = get_post_meta($post->ID, "_google_ads_pricing_package_{$i}_name", true);
        if (empty($package_name)) $package_name = $defaults["pricing_package_{$i}_name"];
        
        $package_price = get_post_meta($post->ID, "_google_ads_pricing_package_{$i}_price", true);
        if (empty($package_price)) $package_price = $defaults["pricing_package_{$i}_price"];
        
        $package_period = get_post_meta($post->ID, "_google_ads_pricing_package_{$i}_period", true);
        if (empty($package_period)) $package_period = $defaults["pricing_package_{$i}_period"];
        
        $package_features = get_post_meta($post->ID, "_google_ads_pricing_package_{$i}_features", true);
        if (empty($package_features)) $package_features = $defaults["pricing_package_{$i}_features"];
        
        $package_button_text = get_post_meta($post->ID, "_google_ads_pricing_package_{$i}_button_text", true);
        if (empty($package_button_text)) $package_button_text = $defaults["pricing_package_{$i}_button_text"];
        
        // Optional fields
        $package_badge = get_post_meta($post->ID, "_google_ads_pricing_package_{$i}_badge", true);
        if (empty($package_badge) && isset($defaults["pricing_package_{$i}_badge"])) {
            $package_badge = $defaults["pricing_package_{$i}_badge"];
        }
        
        $package_featured = get_post_meta($post->ID, "_google_ads_pricing_package_{$i}_featured", true);
        if (empty($package_featured) && isset($defaults["pricing_package_{$i}_featured"])) {
            $package_featured = $defaults["pricing_package_{$i}_featured"];
        }
    ?>
    <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; <?php echo ($i == 2) ? 'background-colour: #f9f9f9;' : ''; ?>">
        <h5><?php echo sprintf(__('Package %d', 'aimpro'), $i); ?><?php echo ($i == 2) ? ' (Most Popular)' : ''; ?></h5>
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 15px;">
            <div>
                <p>
                    <label for="google_ads_pricing_package_<?php echo $i; ?>_name"><?php _e('Package Name', 'aimpro'); ?></label><br>
                    <input type="text" id="google_ads_pricing_package_<?php echo $i; ?>_name" name="google_ads_pricing_package_<?php echo $i; ?>_name" value="<?php echo esc_attr($package_name); ?>" class="widefat">
                </p>
            </div>
            <div>
                <p>
                    <label for="google_ads_pricing_package_<?php echo $i; ?>_price"><?php _e('Price', 'aimpro'); ?></label><br>
                    <input type="text" id="google_ads_pricing_package_<?php echo $i; ?>_price" name="google_ads_pricing_package_<?php echo $i; ?>_price" value="<?php echo esc_attr($package_price); ?>" class="widefat">
                </p>
            </div>
            <div>
                <p>
                    <label for="google_ads_pricing_package_<?php echo $i; ?>_period"><?php _e('Period', 'aimpro'); ?></label><br>
                    <input type="text" id="google_ads_pricing_package_<?php echo $i; ?>_period" name="google_ads_pricing_package_<?php echo $i; ?>_period" value="<?php echo esc_attr($package_period); ?>" class="widefat">
                </p>
            </div>
        </div>
        <p>
            <label for="google_ads_pricing_package_<?php echo $i; ?>_features"><?php _e('Features (one per line)', 'aimpro'); ?></label><br>
            <textarea id="google_ads_pricing_package_<?php echo $i; ?>_features" name="google_ads_pricing_package_<?php echo $i; ?>_features" class="widefat" rows="6"><?php echo esc_textarea($package_features); ?></textarea>
        </p>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
            <div>
                <p>
                    <label for="google_ads_pricing_package_<?php echo $i; ?>_button_text"><?php _e('Button Text', 'aimpro'); ?></label><br>
                    <input type="text" id="google_ads_pricing_package_<?php echo $i; ?>_button_text" name="google_ads_pricing_package_<?php echo $i; ?>_button_text" value="<?php echo esc_attr($package_button_text); ?>" class="widefat">
                </p>
            </div>
            <div>
                <?php if ($i == 2): ?>
                <p>
                    <label for="google_ads_pricing_package_<?php echo $i; ?>_badge"><?php _e('Badge Text (optional)', 'aimpro'); ?></label><br>
                    <input type="text" id="google_ads_pricing_package_<?php echo $i; ?>_badge" name="google_ads_pricing_package_<?php echo $i; ?>_badge" value="<?php echo esc_attr($package_badge); ?>" class="widefat">
                </p>
                <p>
                    <label>
                        <input type="checkbox" name="google_ads_pricing_package_<?php echo $i; ?>_featured" value="1" <?php checked($package_featured, 1); ?>>
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
 * Testimonial Section Callback
 */
function aimpro_google_ads_testimonial_callback($post) {
    wp_nonce_field(basename(__FILE__), 'google_ads_testimonial_nonce');
    
    $defaults = aimpro_get_google_ads_default_values();
    
    // Get saved values or use defaults
    $testimonial_quote = get_post_meta($post->ID, '_google_ads_testimonial_quote', true);
    if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
    
    $testimonial_name = get_post_meta($post->ID, '_google_ads_testimonial_name', true);
    if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
    
    $testimonial_title = get_post_meta($post->ID, '_google_ads_testimonial_title', true);
    if (empty($testimonial_title)) $testimonial_title = $defaults['testimonial_title'];
    
    ?>
    <p>
        <label for="google_ads_testimonial_quote"><?php _e('Testimonial Quote', 'aimpro'); ?></label><br>
        <?php wp_editor($testimonial_quote, 'google_ads_testimonial_quote', array(
            'textarea_name' => 'google_ads_testimonial_quote',
            'media_buttons' => false,
            'textarea_rows' => 5,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link')
        )); ?>
    </p>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="google_ads_testimonial_name"><?php _e('Client Name', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_testimonial_name" name="google_ads_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="google_ads_testimonial_title"><?php _e('Client Title/Company', 'aimpro'); ?></label><br>
                <input type="text" id="google_ads_testimonial_title" name="google_ads_testimonial_title" value="<?php echo esc_attr($testimonial_title); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Simple CTA Section Callback
 */
function aimpro_google_ads_simple_cta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'google_ads_simple_cta_nonce');
    
    $defaults = aimpro_get_google_ads_default_values();
    
    // Get saved values or use defaults
    $simple_cta_title = get_post_meta($post->ID, '_google_ads_simple_cta_title', true);
    if (empty($simple_cta_title)) $simple_cta_title = $defaults['simple_cta_title'];
    
    $simple_cta_content = get_post_meta($post->ID, '_google_ads_simple_cta_content', true);
    if (empty($simple_cta_content)) $simple_cta_content = $defaults['simple_cta_content'];
    
    $simple_cta_button_text = get_post_meta($post->ID, '_google_ads_simple_cta_button_text', true);
    if (empty($simple_cta_button_text)) $simple_cta_button_text = $defaults['simple_cta_button_text'];
    
    ?>
    <p>
        <label for="google_ads_simple_cta_title"><?php _e('CTA Title', 'aimpro'); ?></label><br>
        <?php wp_editor($simple_cta_title, 'google_ads_simple_cta_title', array(
            'textarea_name' => 'google_ads_simple_cta_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link')
        )); ?>
    </p>
    <p>
        <label for="google_ads_simple_cta_content"><?php _e('CTA Content', 'aimpro'); ?></label><br>
        <?php wp_editor($simple_cta_content, 'google_ads_simple_cta_content', array(
            'textarea_name' => 'google_ads_simple_cta_content',
            'media_buttons' => false,
            'textarea_rows' => 3,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        )); ?>
    </p>
    <p>
        <label for="google_ads_simple_cta_button_text"><?php _e('Button Text', 'aimpro'); ?></label><br>
        <input type="text" id="google_ads_simple_cta_button_text" name="google_ads_simple_cta_button_text" value="<?php echo esc_attr($simple_cta_button_text); ?>" class="widefat">
    </p>
    
    <h4><?php _e('CTA Features', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 3; $i++): 
        $simple_cta_feature = get_post_meta($post->ID, "_google_ads_simple_cta_feature_{$i}", true);
        if (empty($simple_cta_feature)) $simple_cta_feature = $defaults["simple_cta_feature_{$i}"];
    ?>
    <p>
        <label for="google_ads_simple_cta_feature_<?php echo $i; ?>"><?php echo sprintf(__('Feature %d', 'aimpro'), $i); ?></label><br>
        <input type="text" id="google_ads_simple_cta_feature_<?php echo $i; ?>" name="google_ads_simple_cta_feature_<?php echo $i; ?>" value="<?php echo esc_attr($simple_cta_feature); ?>" class="widefat">
    </p>
    <?php endfor;
}

/**
 * Save meta box data
 */
function aimpro_save_google_ads_meta_boxes($post_id) {
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
    if (isset($_POST['google_ads_hero_nonce']) && wp_verify_nonce($_POST['google_ads_hero_nonce'], basename(__FILE__))) {
        if (isset($_POST['google_ads_hero_badge'])) {
            update_post_meta($post_id, '_google_ads_hero_badge', sanitize_text_field($_POST['google_ads_hero_badge']));
        }
        if (isset($_POST['google_ads_hero_title'])) {
            update_post_meta($post_id, '_google_ads_hero_title', wp_kses_post($_POST['google_ads_hero_title']));
        }
        if (isset($_POST['google_ads_hero_subtitle'])) {
            update_post_meta($post_id, '_google_ads_hero_subtitle', wp_kses_post($_POST['google_ads_hero_subtitle']));
        }
        
        // Hero Stats
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["google_ads_hero_stat{$i}_number"])) {
                update_post_meta($post_id, "_google_ads_hero_stat{$i}_number", sanitize_text_field($_POST["google_ads_hero_stat{$i}_number"]));
            }
            if (isset($_POST["google_ads_hero_stat{$i}_label"])) {
                update_post_meta($post_id, "_google_ads_hero_stat{$i}_label", sanitize_text_field($_POST["google_ads_hero_stat{$i}_label"]));
            }
        }
        
        // Hero CTAs
        if (isset($_POST['google_ads_hero_cta1_text'])) {
            update_post_meta($post_id, '_google_ads_hero_cta1_text', sanitize_text_field($_POST['google_ads_hero_cta1_text']));
        }
        if (isset($_POST['google_ads_hero_cta2_text'])) {
            update_post_meta($post_id, '_google_ads_hero_cta2_text', sanitize_text_field($_POST['google_ads_hero_cta2_text']));
        }
    }
    
    // Save Services Section
    if (isset($_POST['google_ads_services_nonce']) && wp_verify_nonce($_POST['google_ads_services_nonce'], basename(__FILE__))) {
        if (isset($_POST['google_ads_services_title'])) {
            update_post_meta($post_id, '_google_ads_services_title', wp_kses_post($_POST['google_ads_services_title']));
        }
        if (isset($_POST['google_ads_services_subtitle'])) {
            update_post_meta($post_id, '_google_ads_services_subtitle', wp_kses_post($_POST['google_ads_services_subtitle']));
        }
        
        // Service Items
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["google_ads_service_title_{$i}"])) {
                update_post_meta($post_id, "_google_ads_service_title_{$i}", wp_kses_post($_POST["google_ads_service_title_{$i}"]));
            }
            if (isset($_POST["google_ads_service_content_{$i}"])) {
                update_post_meta($post_id, "_google_ads_service_content_{$i}", wp_kses_post($_POST["google_ads_service_content_{$i}"]));
            }
            if (isset($_POST["google_ads_service_features_{$i}"])) {
                update_post_meta($post_id, "_google_ads_service_features_{$i}", sanitize_textarea_field($_POST["google_ads_service_features_{$i}"]));
            }
        }
    }
    
    // Save Case Study Section
    if (isset($_POST['google_ads_case_study_nonce']) && wp_verify_nonce($_POST['google_ads_case_study_nonce'], basename(__FILE__))) {
        if (isset($_POST['google_ads_case_study_label'])) {
            update_post_meta($post_id, '_google_ads_case_study_label', sanitize_text_field($_POST['google_ads_case_study_label']));
        }
        if (isset($_POST['google_ads_case_study_title'])) {
            update_post_meta($post_id, '_google_ads_case_study_title', wp_kses_post($_POST['google_ads_case_study_title']));
        }
        if (isset($_POST['google_ads_case_study_challenge'])) {
            update_post_meta($post_id, '_google_ads_case_study_challenge', wp_kses_post($_POST['google_ads_case_study_challenge']));
        }
        if (isset($_POST['google_ads_case_study_solution'])) {
            update_post_meta($post_id, '_google_ads_case_study_solution', wp_kses_post($_POST['google_ads_case_study_solution']));
        }
        if (isset($_POST['google_ads_case_study_results_intro'])) {
            update_post_meta($post_id, '_google_ads_case_study_results_intro', wp_kses_post($_POST['google_ads_case_study_results_intro']));
        }
        
        // Case Study Results
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["google_ads_case_result_{$i}_number"])) {
                update_post_meta($post_id, "_google_ads_case_result_{$i}_number", sanitize_text_field($_POST["google_ads_case_result_{$i}_number"]));
            }
            if (isset($_POST["google_ads_case_result_{$i}_label"])) {
                update_post_meta($post_id, "_google_ads_case_result_{$i}_label", sanitize_text_field($_POST["google_ads_case_result_{$i}_label"]));
            }
        }
    }
    
    // Save Process Section
    if (isset($_POST['google_ads_process_nonce']) && wp_verify_nonce($_POST['google_ads_process_nonce'], basename(__FILE__))) {
        if (isset($_POST['google_ads_process_title'])) {
            update_post_meta($post_id, '_google_ads_process_title', wp_kses_post($_POST['google_ads_process_title']));
        }
        if (isset($_POST['google_ads_process_subtitle'])) {
            update_post_meta($post_id, '_google_ads_process_subtitle', wp_kses_post($_POST['google_ads_process_subtitle']));
        }
        
        // Process Steps
        for ($i = 1; $i <= 5; $i++) {
            if (isset($_POST["google_ads_process_step_number_{$i}"])) {
                update_post_meta($post_id, "_google_ads_process_step_number_{$i}", sanitize_text_field($_POST["google_ads_process_step_number_{$i}"]));
            }
            if (isset($_POST["google_ads_process_step_title_{$i}"])) {
                update_post_meta($post_id, "_google_ads_process_step_title_{$i}", wp_kses_post($_POST["google_ads_process_step_title_{$i}"]));
            }
            if (isset($_POST["google_ads_process_step_content_{$i}"])) {
                update_post_meta($post_id, "_google_ads_process_step_content_{$i}", wp_kses_post($_POST["google_ads_process_step_content_{$i}"]));
            }
        }
    }
    
    // Save Tools Section
    if (isset($_POST['google_ads_tools_nonce']) && wp_verify_nonce($_POST['google_ads_tools_nonce'], basename(__FILE__))) {
        if (isset($_POST['google_ads_tools_title'])) {
            update_post_meta($post_id, '_google_ads_tools_title', wp_kses_post($_POST['google_ads_tools_title']));
        }
        if (isset($_POST['google_ads_tools_subtitle'])) {
            update_post_meta($post_id, '_google_ads_tools_subtitle', wp_kses_post($_POST['google_ads_tools_subtitle']));
        }
        
        // Tools List
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["google_ads_tool_name_{$i}"])) {
                update_post_meta($post_id, "_google_ads_tool_name_{$i}", sanitize_text_field($_POST["google_ads_tool_name_{$i}"]));
            }
            if (isset($_POST["google_ads_tool_description_{$i}"])) {
                update_post_meta($post_id, "_google_ads_tool_description_{$i}", wp_kses_post($_POST["google_ads_tool_description_{$i}"]));
            }
        }
    }
    
    // Save Industries Section
    if (isset($_POST['google_ads_industries_nonce']) && wp_verify_nonce($_POST['google_ads_industries_nonce'], basename(__FILE__))) {
        if (isset($_POST['google_ads_industries_title'])) {
            update_post_meta($post_id, '_google_ads_industries_title', wp_kses_post($_POST['google_ads_industries_title']));
        }
        if (isset($_POST['google_ads_industries_subtitle'])) {
            update_post_meta($post_id, '_google_ads_industries_subtitle', wp_kses_post($_POST['google_ads_industries_subtitle']));
        }
        
        // Industries List
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["google_ads_industry_name_{$i}"])) {
                update_post_meta($post_id, "_google_ads_industry_name_{$i}", sanitize_text_field($_POST["google_ads_industry_name_{$i}"]));
            }
            if (isset($_POST["google_ads_industry_description_{$i}"])) {
                update_post_meta($post_id, "_google_ads_industry_description_{$i}", wp_kses_post($_POST["google_ads_industry_description_{$i}"]));
            }
        }
    }
    
    // Save Pricing Section
    if (isset($_POST['google_ads_pricing_nonce']) && wp_verify_nonce($_POST['google_ads_pricing_nonce'], basename(__FILE__))) {
        if (isset($_POST['google_ads_pricing_title'])) {
            update_post_meta($post_id, '_google_ads_pricing_title', wp_kses_post($_POST['google_ads_pricing_title']));
        }
        if (isset($_POST['google_ads_pricing_subtitle'])) {
            update_post_meta($post_id, '_google_ads_pricing_subtitle', wp_kses_post($_POST['google_ads_pricing_subtitle']));
        }
        
        // Pricing Packages
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["google_ads_pricing_package_{$i}_name"])) {
                update_post_meta($post_id, "_google_ads_pricing_package_{$i}_name", sanitize_text_field($_POST["google_ads_pricing_package_{$i}_name"]));
            }
            if (isset($_POST["google_ads_pricing_package_{$i}_price"])) {
                update_post_meta($post_id, "_google_ads_pricing_package_{$i}_price", sanitize_text_field($_POST["google_ads_pricing_package_{$i}_price"]));
            }
            if (isset($_POST["google_ads_pricing_package_{$i}_period"])) {
                update_post_meta($post_id, "_google_ads_pricing_package_{$i}_period", sanitize_text_field($_POST["google_ads_pricing_package_{$i}_period"]));
            }
            if (isset($_POST["google_ads_pricing_package_{$i}_features"])) {
                update_post_meta($post_id, "_google_ads_pricing_package_{$i}_features", sanitize_textarea_field($_POST["google_ads_pricing_package_{$i}_features"]));
            }
            if (isset($_POST["google_ads_pricing_package_{$i}_button_text"])) {
                update_post_meta($post_id, "_google_ads_pricing_package_{$i}_button_text", sanitize_text_field($_POST["google_ads_pricing_package_{$i}_button_text"]));
            }
            
            // Optional fields
            if (isset($_POST["google_ads_pricing_package_{$i}_badge"])) {
                update_post_meta($post_id, "_google_ads_pricing_package_{$i}_badge", sanitize_text_field($_POST["google_ads_pricing_package_{$i}_badge"]));
            }
            if (isset($_POST["google_ads_pricing_package_{$i}_featured"])) {
                update_post_meta($post_id, "_google_ads_pricing_package_{$i}_featured", sanitize_text_field($_POST["google_ads_pricing_package_{$i}_featured"]));
            }
        }
    }
    
    // Save Testimonial Section
    if (isset($_POST['google_ads_testimonial_nonce']) && wp_verify_nonce($_POST['google_ads_testimonial_nonce'], basename(__FILE__))) {
        if (isset($_POST['google_ads_testimonial_quote'])) {
            update_post_meta($post_id, '_google_ads_testimonial_quote', wp_kses_post($_POST['google_ads_testimonial_quote']));
        }
        if (isset($_POST['google_ads_testimonial_name'])) {
            update_post_meta($post_id, '_google_ads_testimonial_name', sanitize_text_field($_POST['google_ads_testimonial_name']));
        }
        if (isset($_POST['google_ads_testimonial_title'])) {
            update_post_meta($post_id, '_google_ads_testimonial_title', sanitize_text_field($_POST['google_ads_testimonial_title']));
        }
    }
    
    // Save Simple CTA Section
    if (isset($_POST['google_ads_simple_cta_nonce']) && wp_verify_nonce($_POST['google_ads_simple_cta_nonce'], basename(__FILE__))) {
        if (isset($_POST['google_ads_simple_cta_title'])) {
            update_post_meta($post_id, '_google_ads_simple_cta_title', wp_kses_post($_POST['google_ads_simple_cta_title']));
        }
        if (isset($_POST['google_ads_simple_cta_content'])) {
            update_post_meta($post_id, '_google_ads_simple_cta_content', wp_kses_post($_POST['google_ads_simple_cta_content']));
        }
        if (isset($_POST['google_ads_simple_cta_button_text'])) {
            update_post_meta($post_id, '_google_ads_simple_cta_button_text', sanitize_text_field($_POST['google_ads_simple_cta_button_text']));
        }
        
        // CTA Features
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["google_ads_simple_cta_feature_{$i}"])) {
                update_post_meta($post_id, "_google_ads_simple_cta_feature_{$i}", sanitize_text_field($_POST["google_ads_simple_cta_feature_{$i}"]));
            }
        }
    }
}
add_action('save_post', 'aimpro_save_google_ads_meta_boxes');
