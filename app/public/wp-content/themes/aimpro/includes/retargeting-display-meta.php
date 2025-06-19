<?php
/**
 * Retargeting & Display Ads Meta Fields
 *
 * @package Aimpro
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set default values for Retargeting & Display Ads page meta fields
 * This ensures fields are pre-populated with the frontend content
 */
function aimpro_get_retargeting_display_default_values() {
    return array(
        // Hero Section
        'hero_title' => 'Retargeting & Display Advertising',
        'hero_subtitle' => 'Re-engage interested prospects and build brand awareness with strategic retargeting and display campaigns that convert browsers into buyers across the web.',
        
        // Hero Stats
        'hero_stat1_number' => '475%',
        'hero_stat1_label' => 'Conversion Rate Increase',
        'hero_stat2_number' => '68%',
        'hero_stat2_label' => 'Lower Cost Per Conversion',
        'hero_stat3_number' => '12x',
        'hero_stat3_label' => 'Higher Click-Through Rate',
        
        // Hero CTAs
        'hero_cta1_text' => 'Start Retargeting',
        'hero_cta2_text' => 'View Packages',
        
        // Service Overview Section
        'overview_title' => 'Strategic Retargeting & Display Campaigns',
        'overview_content' => 'Most website visitors leave without converting. Our retargeting and display advertising strategies keep your brand top-of-mind, re-engage interested prospects, and guide them back to complete their purchase or inquiry across millions of websites.',
        
        // Service Items (6 services)
        'service_title_1' => 'Website Retargeting',
        'service_content_1' => 'Re-engage website visitors with personalised ads based on their browsing behaviour and pages visited.',
        'service_icon_1' => 'fas fa-bullseye',
        
        'service_title_2' => 'Abandoned Cart Recovery',
        'service_content_2' => 'Win back shoppers who left items in their cart with targeted ads featuring the exact products they viewed.',
        'service_icon_2' => 'fas fa-shopping-cart',
        
        'service_title_3' => 'Display Advertising',
        'service_content_3' => 'Build brand awareness and reach new audiences through visually compelling display ads across premium websites.',
        'service_icon_3' => 'fas fa-ad',
        
        'service_title_4' => 'Video Retargeting',
        'service_content_4' => 'Engage prospects with dynamic video content that showcases your products or services in action.',
        'service_icon_4' => 'fas fa-play-circle',
        
        'service_title_5' => 'Lookalike Audiences',
        'service_content_5' => 'Expand your reach by targeting new prospects who share characteristics with your best customers.',
        'service_icon_5' => 'fas fa-user-friends',
        
        'service_title_6' => 'Cross-Platform Campaigns',
        'service_content_6' => 'Coordinate retargeting efforts across Google, Facebook, Instagram, and other platforms for maximum impact.',
        'service_icon_6' => 'fas fa-sync-alt',
        
        // Case Study Section
        'case_study_title' => 'Case Study: E-commerce Cart Recovery',
        'case_study_intro' => 'How we helped an online retailer recover 475% more abandoned carts and increase overall conversion rates through strategic retargeting campaigns.',
        'case_study_challenge' => 'A fashion e-commerce store was losing 85% of potential customers to cart abandonment. Their existing email recovery campaigns were generating minimal results, and they needed a comprehensive strategy to re-engage prospects across multiple touchpoints.',
        'case_study_solution' => "Implemented pixel-based retargeting across Google Display Network and Facebook\nCreated dynamic product ads featuring abandoned cart items\nDeveloped sequential retargeting campaigns with progressive messaging\nLaunched lookalike audiences based on high-value customers\nA/B tested creative formats and messaging strategies",
        
        // Case Study Results
        'case_result_1_number' => '475%',
        'case_result_1_label' => 'Cart Recovery Increase',
        'case_result_2_number' => '68%',
        'case_result_2_label' => 'Lower Cost Per Conversion',
        'case_result_3_number' => '12x',
        'case_result_3_label' => 'Higher CTR vs Display Average',
        'case_result_4_number' => '235%',
        'case_result_4_label' => 'Return on Ad Spend',
        
        // Process Section
        'process_title' => 'Our Retargeting Process',
        
        'process_step_number_1' => '1',
        'process_step_title_1' => 'Audience Segmentation',
        'process_step_content_1' => 'analyse website behaviour to create detailed audience segments based on pages visited, engagement level, and conversion intent.',
        
        'process_step_number_2' => '2',
        'process_step_title_2' => 'Pixel Implementation',
        'process_step_content_2' => 'Install and configure tracking pixels across all relevant platforms to capture audience data and enable precise targeting.',
        
        'process_step_number_3' => '3',
        'process_step_title_3' => 'Creative Development',
        'process_step_content_3' => 'Design compelling ad creative with personalised messaging that addresses specific user behaviours and intent signals.',
        
        'process_step_number_4' => '4',
        'process_step_title_4' => 'Campaign Launch & Testing',
        'process_step_content_4' => 'Deploy retargeting campaigns with systematic A/B testing of creative, messaging, and frequency caps.',
        
        'process_step_number_5' => '5',
        'process_step_title_5' => 'optimisation & Scaling',
        'process_step_content_5' => 'Continuously optimise based on performance data and scale successful campaigns across additional platforms and audiences.',
        
        // Retargeting Types Section
        'types_title' => 'Types of Retargeting We Implement',
        
        'type_title_1' => 'Pixel-Based Retargeting',
        'type_content_1' => 'Track anonymous website visitors and serve them relevant ads across the web based on their browsing behaviour.',
        'type_icon_1' => 'fas fa-mouse-pointer',
        
        'type_title_2' => 'List-Based Retargeting',
        'type_content_2' => 'Upload customer email lists to create targeted campaigns for existing contacts and previous customers.',
        'type_icon_2' => 'fas fa-database',
        
        'type_title_3' => 'Email Retargeting',
        'type_content_3' => 'Target users who interacted with your emails but didn\'t convert with coordinated display advertising.',
        'type_icon_3' => 'fas fa-envelope',
        
        'type_title_4' => 'Video View Retargeting',
        'type_content_4' => 'Re-engage users who watched your video content with follow-up campaigns driving specific actions.',
        'type_icon_4' => 'fas fa-play',
        
        'type_title_5' => 'Social Media Retargeting',
        'type_content_5' => 'Target website visitors on social platforms where they spend time with native, engaging ad formats.',
        'type_icon_5' => 'fas fa-share-alt',
        
        'type_title_6' => 'Cross-Device Retargeting',
        'type_content_6' => 'Follow users across all their devices to maintain consistent messaging and maximise conversion opportunities.',
        'type_icon_6' => 'fas fa-mobile-alt',
        
        // Tools Section
        'tools_title' => 'Tools & Technologies We Use',
        
        'tool_title_1' => 'Google Display Network',
        'tool_content_1' => 'Reach users across millions of websites, apps, and Google properties with targeted display campaigns.',
        'tool_icon_1' => 'fab fa-google',
        
        'tool_title_2' => 'Facebook Pixel',
        'tool_content_2' => 'Advanced retargeting and conversion tracking across Facebook and Instagram platforms.',
        'tool_icon_2' => 'fab fa-facebook',
        
        'tool_title_3' => 'Google Analytics',
        'tool_content_3' => 'Comprehensive audience analysis and behaviour tracking for precise retargeting segmentation.',
        'tool_icon_3' => 'fas fa-chart-bar',
        
        'tool_title_4' => 'Dynamic Creative Tools',
        'tool_content_4' => 'Automated ad creation and personalisation based on user behaviour and product interests.',
        'tool_icon_4' => 'fas fa-palette',
        
        // Industries Section
        'industries_title' => 'Industries We Serve',
        
        'industry_title_1' => 'E-commerce & Retail',
        'industry_content_1' => 'Recover abandoned carts and increase customer lifetime value through strategic retargeting.',
        
        'industry_title_2' => 'SaaS & Technology',
        'industry_content_2' => 'Nurture trial users and free account holders toward paid conversions.',
        
        'industry_title_3' => 'Financial Services',
        'industry_content_3' => 'Re-engage prospects who showed interest in loans, insurance, or investment products.',
        
        'industry_title_4' => 'Real Estate',
        'industry_content_4' => 'Follow up with property viewers and keep listings top-of-mind for potential buyers.',
        
        'industry_title_5' => 'Travel & Hospitality',
        'industry_content_5' => 'Recapture booking abandoners and promote special offers to interested travelers.',
        
        'industry_title_6' => 'Healthcare',
        'industry_content_6' => 'Nurture patients who researched treatments or services with compliant retargeting campaigns.',
        
        // Testimonial Section
        'testimonial_quote' => 'Our retargeting campaigns with Aimpro have been phenomenal. We\'re recovering 475% more abandoned carts and our cost per conversion dropped by 68%. It\'s transformed our entire marketing ROI.',
        'testimonial_name' => 'Emma Thompson',
        'testimonial_title' => 'E-commerce Director, StyleHub',
        
        // CTA Section
        'cta_title' => 'Ready to Re-Engage Your Lost Prospects?',
        'cta_content' => 'Stop losing potential customers forever. Our retargeting experts will help you build campaigns that bring visitors back and convert them into loyal customers. Start recovering lost revenue today.',
        'cta_button_1_text' => 'Start Retargeting',
        'cta_button_2_text' => 'View All Services',
    );
}

/**
 * Register Retargeting & Display Ads meta boxes
 */
function aimpro_register_retargeting_display_meta_boxes() {
    // Only show these meta boxes on the Retargeting & Display Ads page template
    $screen = get_current_screen();
    if ($screen->id == 'page' && isset($_GET['post'])) {
        $template = get_post_meta($_GET['post'], '_wp_page_template', true);
        if ($template != 'page-retargeting-display.php') {
            return;
        }
    }
    
    add_meta_box(
        'retargeting_display_hero_section',
        __('Hero Section', 'aimpro'),
        'aimpro_retargeting_display_hero_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'retargeting_display_overview_section',
        __('Service Overview Section', 'aimpro'),
        'aimpro_retargeting_display_overview_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'retargeting_display_services_section',
        __('Services Section', 'aimpro'),
        'aimpro_retargeting_display_services_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'retargeting_display_case_study_section',
        __('Case Study Section', 'aimpro'),
        'aimpro_retargeting_display_case_study_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'retargeting_display_process_section',
        __('Process Section', 'aimpro'),
        'aimpro_retargeting_display_process_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'retargeting_display_types_section',
        __('Retargeting Types Section', 'aimpro'),
        'aimpro_retargeting_display_types_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'retargeting_display_tools_section',
        __('Tools Section', 'aimpro'),
        'aimpro_retargeting_display_tools_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'retargeting_display_industries_section',
        __('Industries Section', 'aimpro'),
        'aimpro_retargeting_display_industries_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'retargeting_display_testimonial_section',
        __('Testimonial Section', 'aimpro'),
        'aimpro_retargeting_display_testimonial_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'retargeting_display_cta_section',
        __('CTA Section', 'aimpro'),
        'aimpro_retargeting_display_cta_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes_page', 'aimpro_register_retargeting_display_meta_boxes');

/**
 * Hero Section Callback
 */
function aimpro_retargeting_display_hero_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_hero_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    // Get saved values or use defaults if empty
    $hero_title = get_post_meta($post->ID, '_retargeting_display_hero_title', true);
    if (empty($hero_title)) $hero_title = $defaults['hero_title'];
    
    $hero_subtitle = get_post_meta($post->ID, '_retargeting_display_hero_subtitle', true);
    if (empty($hero_subtitle)) $hero_subtitle = $defaults['hero_subtitle'];
    
    // Hero Stats
    $hero_stat1_number = get_post_meta($post->ID, '_retargeting_display_hero_stat1_number', true);
    if (empty($hero_stat1_number)) $hero_stat1_number = $defaults['hero_stat1_number'];
    
    $hero_stat1_label = get_post_meta($post->ID, '_retargeting_display_hero_stat1_label', true);
    if (empty($hero_stat1_label)) $hero_stat1_label = $defaults['hero_stat1_label'];
    
    $hero_stat2_number = get_post_meta($post->ID, '_retargeting_display_hero_stat2_number', true);
    if (empty($hero_stat2_number)) $hero_stat2_number = $defaults['hero_stat2_number'];
    
    $hero_stat2_label = get_post_meta($post->ID, '_retargeting_display_hero_stat2_label', true);
    if (empty($hero_stat2_label)) $hero_stat2_label = $defaults['hero_stat2_label'];
    
    $hero_stat3_number = get_post_meta($post->ID, '_retargeting_display_hero_stat3_number', true);
    if (empty($hero_stat3_number)) $hero_stat3_number = $defaults['hero_stat3_number'];
    
    $hero_stat3_label = get_post_meta($post->ID, '_retargeting_display_hero_stat3_label', true);
    if (empty($hero_stat3_label)) $hero_stat3_label = $defaults['hero_stat3_label'];
    
    // Hero CTAs
    $hero_cta1_text = get_post_meta($post->ID, '_retargeting_display_hero_cta1_text', true);
    if (empty($hero_cta1_text)) $hero_cta1_text = $defaults['hero_cta1_text'];
    
    $hero_cta2_text = get_post_meta($post->ID, '_retargeting_display_hero_cta2_text', true);
    if (empty($hero_cta2_text)) $hero_cta2_text = $defaults['hero_cta2_text'];
    
    // Output fields
    ?>
    <p>
        <label for="retargeting_display_hero_title"><?php _e('Hero Title', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_hero_title" name="retargeting_display_hero_title" value="<?php echo esc_attr($hero_title); ?>" class="widefat">
    </p>
    <p>
        <label for="retargeting_display_hero_subtitle"><?php _e('Hero Subtitle', 'aimpro'); ?></label><br>
        <textarea id="retargeting_display_hero_subtitle" name="retargeting_display_hero_subtitle" class="widefat" rows="4"><?php echo esc_textarea($hero_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Hero Stats', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="retargeting_display_hero_stat1_number"><?php _e('Stat 1 Number', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_hero_stat1_number" name="retargeting_display_hero_stat1_number" value="<?php echo esc_attr($hero_stat1_number); ?>" class="widefat">
            </p>
            <p>
                <label for="retargeting_display_hero_stat1_label"><?php _e('Stat 1 Label', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_hero_stat1_label" name="retargeting_display_hero_stat1_label" value="<?php echo esc_attr($hero_stat1_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="retargeting_display_hero_stat2_number"><?php _e('Stat 2 Number', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_hero_stat2_number" name="retargeting_display_hero_stat2_number" value="<?php echo esc_attr($hero_stat2_number); ?>" class="widefat">
            </p>
            <p>
                <label for="retargeting_display_hero_stat2_label"><?php _e('Stat 2 Label', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_hero_stat2_label" name="retargeting_display_hero_stat2_label" value="<?php echo esc_attr($hero_stat2_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="retargeting_display_hero_stat3_number"><?php _e('Stat 3 Number', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_hero_stat3_number" name="retargeting_display_hero_stat3_number" value="<?php echo esc_attr($hero_stat3_number); ?>" class="widefat">
            </p>
            <p>
                <label for="retargeting_display_hero_stat3_label"><?php _e('Stat 3 Label', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_hero_stat3_label" name="retargeting_display_hero_stat3_label" value="<?php echo esc_attr($hero_stat3_label); ?>" class="widefat">
            </p>
        </div>
    </div>
    
    <h4><?php _e('Hero CTAs', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="retargeting_display_hero_cta1_text"><?php _e('Primary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_hero_cta1_text" name="retargeting_display_hero_cta1_text" value="<?php echo esc_attr($hero_cta1_text); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="retargeting_display_hero_cta2_text"><?php _e('Secondary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_hero_cta2_text" name="retargeting_display_hero_cta2_text" value="<?php echo esc_attr($hero_cta2_text); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

// Continue with callback functions for all sections...

/**
 * Service Overview Section Callback
 */
function aimpro_retargeting_display_overview_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_overview_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $overview_title = get_post_meta($post->ID, '_retargeting_display_overview_title', true);
    if (empty($overview_title)) $overview_title = $defaults['overview_title'];
    
    $overview_content = get_post_meta($post->ID, '_retargeting_display_overview_content', true);
    if (empty($overview_content)) $overview_content = $defaults['overview_content'];
    
    ?>
    <p>
        <label for="retargeting_display_overview_title"><?php _e('Overview Title', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_overview_title" name="retargeting_display_overview_title" value="<?php echo esc_attr($overview_title); ?>" class="widefat">
    </p>
    <p>
        <label for="retargeting_display_overview_content"><?php _e('Overview Content', 'aimpro'); ?></label><br>
        <textarea id="retargeting_display_overview_content" name="retargeting_display_overview_content" class="widefat" rows="5"><?php echo esc_textarea($overview_content); ?></textarea>
    </p>
    <?php
}

/**
 * Services Section Callback
 */
function aimpro_retargeting_display_services_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_services_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    ?>
    <div id="retargeting-display-services">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Service %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $service_title = get_post_meta($post->ID, "_retargeting_display_service_title_{$i}", true);
                if (empty($service_title)) $service_title = $defaults["service_title_{$i}"];
                
                $service_content = get_post_meta($post->ID, "_retargeting_display_service_content_{$i}", true);
                if (empty($service_content)) $service_content = $defaults["service_content_{$i}"];
                
                $service_icon = get_post_meta($post->ID, "_retargeting_display_service_icon_{$i}", true);
                if (empty($service_icon)) $service_icon = $defaults["service_icon_{$i}"];
                ?>
                
                <p>
                    <label for="retargeting_display_service_title_<?php echo $i; ?>"><?php _e('Service Title', 'aimpro'); ?></label><br>
                    <input type="text" id="retargeting_display_service_title_<?php echo $i; ?>" name="retargeting_display_service_title_<?php echo $i; ?>" value="<?php echo esc_attr($service_title); ?>" class="widefat">
                </p>
                <p>
                    <label for="retargeting_display_service_content_<?php echo $i; ?>"><?php _e('Service Content', 'aimpro'); ?></label><br>
                    <textarea id="retargeting_display_service_content_<?php echo $i; ?>" name="retargeting_display_service_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($service_content); ?></textarea>
                </p>
                <p>
                    <label for="retargeting_display_service_icon_<?php echo $i; ?>"><?php _e('Service Icon (Font Awesome class)', 'aimpro'); ?></label><br>
                    <input type="text" id="retargeting_display_service_icon_<?php echo $i; ?>" name="retargeting_display_service_icon_<?php echo $i; ?>" value="<?php echo esc_attr($service_icon); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Case Study Section Callback
 */
function aimpro_retargeting_display_case_study_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_case_study_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $case_study_title = get_post_meta($post->ID, '_retargeting_display_case_study_title', true);
    if (empty($case_study_title)) $case_study_title = $defaults['case_study_title'];
    
    $case_study_intro = get_post_meta($post->ID, '_retargeting_display_case_study_intro', true);
    if (empty($case_study_intro)) $case_study_intro = $defaults['case_study_intro'];
    
    $case_study_challenge = get_post_meta($post->ID, '_retargeting_display_case_study_challenge', true);
    if (empty($case_study_challenge)) $case_study_challenge = $defaults['case_study_challenge'];
    
    $case_study_solution = get_post_meta($post->ID, '_retargeting_display_case_study_solution', true);
    if (empty($case_study_solution)) $case_study_solution = $defaults['case_study_solution'];
    
    ?>
    <p>
        <label for="retargeting_display_case_study_title"><?php _e('Case Study Title', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_case_study_title" name="retargeting_display_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" class="widefat">
    </p>
    <p>
        <label for="retargeting_display_case_study_intro"><?php _e('Case Study Intro', 'aimpro'); ?></label><br>
        <textarea id="retargeting_display_case_study_intro" name="retargeting_display_case_study_intro" class="widefat" rows="3"><?php echo esc_textarea($case_study_intro); ?></textarea>
    </p>
    <p>
        <label for="retargeting_display_case_study_challenge"><?php _e('Challenge', 'aimpro'); ?></label><br>
        <textarea id="retargeting_display_case_study_challenge" name="retargeting_display_case_study_challenge" class="widefat" rows="4"><?php echo esc_textarea($case_study_challenge); ?></textarea>
    </p>
    <p>
        <label for="retargeting_display_case_study_solution"><?php _e('Solution', 'aimpro'); ?></label><br>
        <textarea id="retargeting_display_case_study_solution" name="retargeting_display_case_study_solution" class="widefat" rows="6"><?php echo esc_textarea($case_study_solution); ?></textarea>
    </p>
    
    <h4><?php _e('Case Study Results', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 15px; flex-wrap: wrap;">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div style="flex: 1; min-width: 200px;">
                <?php
                $result_number = get_post_meta($post->ID, "_retargeting_display_case_result_{$i}_number", true);
                if (empty($result_number)) $result_number = $defaults["case_result_{$i}_number"];
                
                $result_label = get_post_meta($post->ID, "_retargeting_display_case_result_{$i}_label", true);
                if (empty($result_label)) $result_label = $defaults["case_result_{$i}_label"];
                ?>
                <p>
                    <label for="retargeting_display_case_result_<?php echo $i; ?>_number"><?php echo sprintf(__('Result %d Number', 'aimpro'), $i); ?></label><br>
                    <input type="text" id="retargeting_display_case_result_<?php echo $i; ?>_number" name="retargeting_display_case_result_<?php echo $i; ?>_number" value="<?php echo esc_attr($result_number); ?>" class="widefat">
                </p>
                <p>
                    <label for="retargeting_display_case_result_<?php echo $i; ?>_label"><?php echo sprintf(__('Result %d Label', 'aimpro'), $i); ?></label><br>
                    <input type="text" id="retargeting_display_case_result_<?php echo $i; ?>_label" name="retargeting_display_case_result_<?php echo $i; ?>_label" value="<?php echo esc_attr($result_label); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Process Section Callback
 */
function aimpro_retargeting_display_process_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_process_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $process_title = get_post_meta($post->ID, '_retargeting_display_process_title', true);
    if (empty($process_title)) $process_title = $defaults['process_title'];
    
    ?>
    <p>
        <label for="retargeting_display_process_title"><?php _e('Process Title', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_process_title" name="retargeting_display_process_title" value="<?php echo esc_attr($process_title); ?>" class="widefat">
    </p>
    
    <div id="retargeting-display-process-steps">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Process Step %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $step_number = get_post_meta($post->ID, "_retargeting_display_process_step_number_{$i}", true);
                if (empty($step_number)) $step_number = $defaults["process_step_number_{$i}"];
                
                $step_title = get_post_meta($post->ID, "_retargeting_display_process_step_title_{$i}", true);
                if (empty($step_title)) $step_title = $defaults["process_step_title_{$i}"];
                
                $step_content = get_post_meta($post->ID, "_retargeting_display_process_step_content_{$i}", true);
                if (empty($step_content)) $step_content = $defaults["process_step_content_{$i}"];
                ?>
                
                <div style="display: flex; gap: 20px;">
                    <div style="width: 60px;">
                        <p>
                            <label for="retargeting_display_process_step_number_<?php echo $i; ?>"><?php _e('Step Number', 'aimpro'); ?></label><br>
                            <input type="text" id="retargeting_display_process_step_number_<?php echo $i; ?>" name="retargeting_display_process_step_number_<?php echo $i; ?>" value="<?php echo esc_attr($step_number); ?>" class="widefat">
                        </p>
                    </div>
                    <div style="flex: 1;">
                        <p>
                            <label for="retargeting_display_process_step_title_<?php echo $i; ?>"><?php _e('Step Title', 'aimpro'); ?></label><br>
                            <input type="text" id="retargeting_display_process_step_title_<?php echo $i; ?>" name="retargeting_display_process_step_title_<?php echo $i; ?>" value="<?php echo esc_attr($step_title); ?>" class="widefat">
                        </p>
                        <p>
                            <label for="retargeting_display_process_step_content_<?php echo $i; ?>"><?php _e('Step Content', 'aimpro'); ?></label><br>
                            <textarea id="retargeting_display_process_step_content_<?php echo $i; ?>" name="retargeting_display_process_step_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($step_content); ?></textarea>
                        </p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Retargeting Types Section Callback
 */
function aimpro_retargeting_display_types_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_types_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $types_title = get_post_meta($post->ID, '_retargeting_display_types_title', true);
    if (empty($types_title)) $types_title = $defaults['types_title'];
    
    ?>
    <p>
        <label for="retargeting_display_types_title"><?php _e('Types Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_types_title" name="retargeting_display_types_title" value="<?php echo esc_attr($types_title); ?>" class="widefat">
    </p>
    
    <div id="retargeting-display-types">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Type %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $type_title = get_post_meta($post->ID, "_retargeting_display_type_title_{$i}", true);
                if (empty($type_title)) $type_title = $defaults["type_title_{$i}"];
                
                $type_content = get_post_meta($post->ID, "_retargeting_display_type_content_{$i}", true);
                if (empty($type_content)) $type_content = $defaults["type_content_{$i}"];
                
                $type_icon = get_post_meta($post->ID, "_retargeting_display_type_icon_{$i}", true);
                if (empty($type_icon)) $type_icon = $defaults["type_icon_{$i}"];
                ?>
                
                <p>
                    <label for="retargeting_display_type_title_<?php echo $i; ?>"><?php _e('Type Title', 'aimpro'); ?></label><br>
                    <input type="text" id="retargeting_display_type_title_<?php echo $i; ?>" name="retargeting_display_type_title_<?php echo $i; ?>" value="<?php echo esc_attr($type_title); ?>" class="widefat">
                </p>
                <p>
                    <label for="retargeting_display_type_content_<?php echo $i; ?>"><?php _e('Type Content', 'aimpro'); ?></label><br>
                    <textarea id="retargeting_display_type_content_<?php echo $i; ?>" name="retargeting_display_type_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($type_content); ?></textarea>
                </p>
                <p>
                    <label for="retargeting_display_type_icon_<?php echo $i; ?>"><?php _e('Type Icon (Font Awesome class)', 'aimpro'); ?></label><br>
                    <input type="text" id="retargeting_display_type_icon_<?php echo $i; ?>" name="retargeting_display_type_icon_<?php echo $i; ?>" value="<?php echo esc_attr($type_icon); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Tools Section Callback
 */
function aimpro_retargeting_display_tools_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_tools_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $tools_title = get_post_meta($post->ID, '_retargeting_display_tools_title', true);
    if (empty($tools_title)) $tools_title = $defaults['tools_title'];
    
    ?>
    <p>
        <label for="retargeting_display_tools_title"><?php _e('Tools Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_tools_title" name="retargeting_display_tools_title" value="<?php echo esc_attr($tools_title); ?>" class="widefat">
    </p>
    
    <div id="retargeting-display-tools">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Tool %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $tool_title = get_post_meta($post->ID, "_retargeting_display_tool_title_{$i}", true);
                if (empty($tool_title)) $tool_title = $defaults["tool_title_{$i}"];
                
                $tool_content = get_post_meta($post->ID, "_retargeting_display_tool_content_{$i}", true);
                if (empty($tool_content)) $tool_content = $defaults["tool_content_{$i}"];
                
                $tool_icon = get_post_meta($post->ID, "_retargeting_display_tool_icon_{$i}", true);
                if (empty($tool_icon)) $tool_icon = $defaults["tool_icon_{$i}"];
                ?>
                
                <p>
                    <label for="retargeting_display_tool_title_<?php echo $i; ?>"><?php _e('Tool Title', 'aimpro'); ?></label><br>
                    <input type="text" id="retargeting_display_tool_title_<?php echo $i; ?>" name="retargeting_display_tool_title_<?php echo $i; ?>" value="<?php echo esc_attr($tool_title); ?>" class="widefat">
                </p>
                <p>
                    <label for="retargeting_display_tool_content_<?php echo $i; ?>"><?php _e('Tool Content', 'aimpro'); ?></label><br>
                    <textarea id="retargeting_display_tool_content_<?php echo $i; ?>" name="retargeting_display_tool_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($tool_content); ?></textarea>
                </p>
                <p>
                    <label for="retargeting_display_tool_icon_<?php echo $i; ?>"><?php _e('Tool Icon (Font Awesome class)', 'aimpro'); ?></label><br>
                    <input type="text" id="retargeting_display_tool_icon_<?php echo $i; ?>" name="retargeting_display_tool_icon_<?php echo $i; ?>" value="<?php echo esc_attr($tool_icon); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Industries Section Callback
 */
function aimpro_retargeting_display_industries_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_industries_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $industries_title = get_post_meta($post->ID, '_retargeting_display_industries_title', true);
    if (empty($industries_title)) $industries_title = $defaults['industries_title'];
    
    ?>
    <p>
        <label for="retargeting_display_industries_title"><?php _e('Industries Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_industries_title" name="retargeting_display_industries_title" value="<?php echo esc_attr($industries_title); ?>" class="widefat">
    </p>
    
    <div id="retargeting-display-industries">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Industry %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $industry_title = get_post_meta($post->ID, "_retargeting_display_industry_title_{$i}", true);
                if (empty($industry_title)) $industry_title = $defaults["industry_title_{$i}"];
                
                $industry_content = get_post_meta($post->ID, "_retargeting_display_industry_content_{$i}", true);
                if (empty($industry_content)) $industry_content = $defaults["industry_content_{$i}"];
                ?>
                
                <p>
                    <label for="retargeting_display_industry_title_<?php echo $i; ?>"><?php _e('Industry Title', 'aimpro'); ?></label><br>
                    <input type="text" id="retargeting_display_industry_title_<?php echo $i; ?>" name="retargeting_display_industry_title_<?php echo $i; ?>" value="<?php echo esc_attr($industry_title); ?>" class="widefat">
                </p>
                <p>
                    <label for="retargeting_display_industry_content_<?php echo $i; ?>"><?php _e('Industry Content', 'aimpro'); ?></label><br>
                    <textarea id="retargeting_display_industry_content_<?php echo $i; ?>" name="retargeting_display_industry_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($industry_content); ?></textarea>
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Testimonial Section Callback
 */
function aimpro_retargeting_display_testimonial_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_testimonial_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $testimonial_quote = get_post_meta($post->ID, '_retargeting_display_testimonial_quote', true);
    if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
    
    $testimonial_name = get_post_meta($post->ID, '_retargeting_display_testimonial_name', true);
    if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
    
    $testimonial_title = get_post_meta($post->ID, '_retargeting_display_testimonial_title', true);
    if (empty($testimonial_title)) $testimonial_title = $defaults['testimonial_title'];
    
    ?>
    <p>
        <label for="retargeting_display_testimonial_quote"><?php _e('Testimonial Quote', 'aimpro'); ?></label><br>
        <textarea id="retargeting_display_testimonial_quote" name="retargeting_display_testimonial_quote" class="widefat" rows="4"><?php echo esc_textarea($testimonial_quote); ?></textarea>
    </p>
    <p>
        <label for="retargeting_display_testimonial_name"><?php _e('Client Name', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_testimonial_name" name="retargeting_display_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" class="widefat">
    </p>
    <p>
        <label for="retargeting_display_testimonial_title"><?php _e('Client Title', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_testimonial_title" name="retargeting_display_testimonial_title" value="<?php echo esc_attr($testimonial_title); ?>" class="widefat">
    </p>
    <?php
}

/**
 * CTA Section Callback
 */
function aimpro_retargeting_display_cta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_cta_nonce');
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $cta_title = get_post_meta($post->ID, '_retargeting_display_cta_title', true);
    if (empty($cta_title)) $cta_title = $defaults['cta_title'];
    
    $cta_content = get_post_meta($post->ID, '_retargeting_display_cta_content', true);
    if (empty($cta_content)) $cta_content = $defaults['cta_content'];
    
    $cta_button_1_text = get_post_meta($post->ID, '_retargeting_display_cta_button_1_text', true);
    if (empty($cta_button_1_text)) $cta_button_1_text = $defaults['cta_button_1_text'];
    
    $cta_button_2_text = get_post_meta($post->ID, '_retargeting_display_cta_button_2_text', true);
    if (empty($cta_button_2_text)) $cta_button_2_text = $defaults['cta_button_2_text'];
    
    ?>
    <p>
        <label for="retargeting_display_cta_title"><?php _e('CTA Title', 'aimpro'); ?></label><br>
        <input type="text" id="retargeting_display_cta_title" name="retargeting_display_cta_title" value="<?php echo esc_attr($cta_title); ?>" class="widefat">
    </p>
    <p>
        <label for="retargeting_display_cta_content"><?php _e('CTA Content', 'aimpro'); ?></label><br>
        <textarea id="retargeting_display_cta_content" name="retargeting_display_cta_content" class="widefat" rows="3"><?php echo esc_textarea($cta_content); ?></textarea>
    </p>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="retargeting_display_cta_button_1_text"><?php _e('Primary Button Text', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_cta_button_1_text" name="retargeting_display_cta_button_1_text" value="<?php echo esc_attr($cta_button_1_text); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="retargeting_display_cta_button_2_text"><?php _e('Secondary Button Text', 'aimpro'); ?></label><br>
                <input type="text" id="retargeting_display_cta_button_2_text" name="retargeting_display_cta_button_2_text" value="<?php echo esc_attr($cta_button_2_text); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Save Retargeting & Display Ads meta boxes
 */
function aimpro_save_retargeting_display_meta_boxes($post_id) {
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
    if (isset($_POST['retargeting_display_hero_nonce']) && wp_verify_nonce($_POST['retargeting_display_hero_nonce'], basename(__FILE__))) {
        $hero_fields = [
            'retargeting_display_hero_title' => '_retargeting_display_hero_title',
            'retargeting_display_hero_subtitle' => '_retargeting_display_hero_subtitle',
            'retargeting_display_hero_cta1_text' => '_retargeting_display_hero_cta1_text',
            'retargeting_display_hero_cta2_text' => '_retargeting_display_hero_cta2_text'
        ];
        
        foreach ($hero_fields as $field => $meta_key) {
            if (isset($_POST[$field])) {
                $value = ($field === 'retargeting_display_hero_subtitle') ? 
                    sanitize_textarea_field($_POST[$field]) : 
                    sanitize_text_field($_POST[$field]);
                update_post_meta($post_id, $meta_key, $value);
            }
        }
        
        // Hero Stats
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["retargeting_display_hero_stat{$i}_number"])) {
                update_post_meta($post_id, "_retargeting_display_hero_stat{$i}_number", sanitize_text_field($_POST["retargeting_display_hero_stat{$i}_number"]));
            }
            if (isset($_POST["retargeting_display_hero_stat{$i}_label"])) {
                update_post_meta($post_id, "_retargeting_display_hero_stat{$i}_label", sanitize_text_field($_POST["retargeting_display_hero_stat{$i}_label"]));
            }
        }
    }
    
    // Save Overview Section
    if (isset($_POST['retargeting_display_overview_nonce']) && wp_verify_nonce($_POST['retargeting_display_overview_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_overview_title'])) {
            update_post_meta($post_id, '_retargeting_display_overview_title', sanitize_text_field($_POST['retargeting_display_overview_title']));
        }
        if (isset($_POST['retargeting_display_overview_content'])) {
            update_post_meta($post_id, '_retargeting_display_overview_content', sanitize_textarea_field($_POST['retargeting_display_overview_content']));
        }
    }
    
    // Save Services Section
    if (isset($_POST['retargeting_display_services_nonce']) && wp_verify_nonce($_POST['retargeting_display_services_nonce'], basename(__FILE__))) {
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["retargeting_display_service_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_service_title_{$i}", sanitize_text_field($_POST["retargeting_display_service_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_service_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_service_content_{$i}", sanitize_textarea_field($_POST["retargeting_display_service_content_{$i}"]));
            }
            if (isset($_POST["retargeting_display_service_icon_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_service_icon_{$i}", sanitize_text_field($_POST["retargeting_display_service_icon_{$i}"]));
            }
        }
    }
    
    // Save Case Study Section
    if (isset($_POST['retargeting_display_case_study_nonce']) && wp_verify_nonce($_POST['retargeting_display_case_study_nonce'], basename(__FILE__))) {
        $case_study_fields = [
            'retargeting_display_case_study_title' => '_retargeting_display_case_study_title',
            'retargeting_display_case_study_intro' => '_retargeting_display_case_study_intro',
            'retargeting_display_case_study_challenge' => '_retargeting_display_case_study_challenge',
            'retargeting_display_case_study_solution' => '_retargeting_display_case_study_solution'
        ];
        
        foreach ($case_study_fields as $field => $meta_key) {
            if (isset($_POST[$field])) {
                $value = ($field === 'retargeting_display_case_study_title') ? 
                    sanitize_text_field($_POST[$field]) : 
                    sanitize_textarea_field($_POST[$field]);
                update_post_meta($post_id, $meta_key, $value);
            }
        }
        
        // Case Study Results
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["retargeting_display_case_result_{$i}_number"])) {
                update_post_meta($post_id, "_retargeting_display_case_result_{$i}_number", sanitize_text_field($_POST["retargeting_display_case_result_{$i}_number"]));
            }
            if (isset($_POST["retargeting_display_case_result_{$i}_label"])) {
                update_post_meta($post_id, "_retargeting_display_case_result_{$i}_label", sanitize_text_field($_POST["retargeting_display_case_result_{$i}_label"]));
            }
        }
    }
    
    // Save Process Section
    if (isset($_POST['retargeting_display_process_nonce']) && wp_verify_nonce($_POST['retargeting_display_process_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_process_title'])) {
            update_post_meta($post_id, '_retargeting_display_process_title', sanitize_text_field($_POST['retargeting_display_process_title']));
        }
        
        for ($i = 1; $i <= 5; $i++) {
            if (isset($_POST["retargeting_display_process_step_number_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_process_step_number_{$i}", sanitize_text_field($_POST["retargeting_display_process_step_number_{$i}"]));
            }
            if (isset($_POST["retargeting_display_process_step_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_process_step_title_{$i}", sanitize_text_field($_POST["retargeting_display_process_step_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_process_step_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_process_step_content_{$i}", sanitize_textarea_field($_POST["retargeting_display_process_step_content_{$i}"]));
            }
        }
    }
    
    // Save Retargeting Types Section
    if (isset($_POST['retargeting_display_types_nonce']) && wp_verify_nonce($_POST['retargeting_display_types_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_types_title'])) {
            update_post_meta($post_id, '_retargeting_display_types_title', sanitize_text_field($_POST['retargeting_display_types_title']));
        }
        
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["retargeting_display_type_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_type_title_{$i}", sanitize_text_field($_POST["retargeting_display_type_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_type_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_type_content_{$i}", sanitize_textarea_field($_POST["retargeting_display_type_content_{$i}"]));
            }
            if (isset($_POST["retargeting_display_type_icon_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_type_icon_{$i}", sanitize_text_field($_POST["retargeting_display_type_icon_{$i}"]));
            }
        }
    }
    
    // Save Tools Section
    if (isset($_POST['retargeting_display_tools_nonce']) && wp_verify_nonce($_POST['retargeting_display_tools_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_tools_title'])) {
            update_post_meta($post_id, '_retargeting_display_tools_title', sanitize_text_field($_POST['retargeting_display_tools_title']));
        }
        
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["retargeting_display_tool_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_tool_title_{$i}", sanitize_text_field($_POST["retargeting_display_tool_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_tool_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_tool_content_{$i}", sanitize_textarea_field($_POST["retargeting_display_tool_content_{$i}"]));
            }
            if (isset($_POST["retargeting_display_tool_icon_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_tool_icon_{$i}", sanitize_text_field($_POST["retargeting_display_tool_icon_{$i}"]));
            }
        }
    }
    
    // Save Industries Section
    if (isset($_POST['retargeting_display_industries_nonce']) && wp_verify_nonce($_POST['retargeting_display_industries_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_industries_title'])) {
            update_post_meta($post_id, '_retargeting_display_industries_title', sanitize_text_field($_POST['retargeting_display_industries_title']));
        }
        
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["retargeting_display_industry_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_industry_title_{$i}", sanitize_text_field($_POST["retargeting_display_industry_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_industry_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_industry_content_{$i}", sanitize_textarea_field($_POST["retargeting_display_industry_content_{$i}"]));
            }
        }
    }
    
    // Save Testimonial Section
    if (isset($_POST['retargeting_display_testimonial_nonce']) && wp_verify_nonce($_POST['retargeting_display_testimonial_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_testimonial_quote'])) {
            update_post_meta($post_id, '_retargeting_display_testimonial_quote', sanitize_textarea_field($_POST['retargeting_display_testimonial_quote']));
        }
        if (isset($_POST['retargeting_display_testimonial_name'])) {
            update_post_meta($post_id, '_retargeting_display_testimonial_name', sanitize_text_field($_POST['retargeting_display_testimonial_name']));
        }
        if (isset($_POST['retargeting_display_testimonial_title'])) {
            update_post_meta($post_id, '_retargeting_display_testimonial_title', sanitize_text_field($_POST['retargeting_display_testimonial_title']));
        }
    }
    
    // Save CTA Section
    if (isset($_POST['retargeting_display_cta_nonce']) && wp_verify_nonce($_POST['retargeting_display_cta_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_cta_title'])) {
            update_post_meta($post_id, '_retargeting_display_cta_title', sanitize_text_field($_POST['retargeting_display_cta_title']));
        }
        if (isset($_POST['retargeting_display_cta_content'])) {
            update_post_meta($post_id, '_retargeting_display_cta_content', sanitize_textarea_field($_POST['retargeting_display_cta_content']));
        }
        if (isset($_POST['retargeting_display_cta_button_1_text'])) {
            update_post_meta($post_id, '_retargeting_display_cta_button_1_text', sanitize_text_field($_POST['retargeting_display_cta_button_1_text']));
        }
        if (isset($_POST['retargeting_display_cta_button_2_text'])) {
            update_post_meta($post_id, '_retargeting_display_cta_button_2_text', sanitize_text_field($_POST['retargeting_display_cta_button_2_text']));
        }
    }
}
add_action('save_post', 'aimpro_save_retargeting_display_meta_boxes');
