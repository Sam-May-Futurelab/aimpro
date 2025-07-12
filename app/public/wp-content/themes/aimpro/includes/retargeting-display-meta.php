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
 * Helper function to get retargeting defaults safely
 */
if (!function_exists('get_retargeting_meta_default')) {
    function get_retargeting_meta_default($key, $fallback = '') {
        if (function_exists('aimpro_get_retargeting_display_default_values')) {
            $defaults = aimpro_get_retargeting_display_default_values();
            return isset($defaults[$key]) ? $defaults[$key] : $fallback;
        }
        
        // Comprehensive fallback defaults for meta interface
        $meta_defaults = array(
            'hero_title' => 'Retargeting & Display Advertising',
            'hero_subtitle' => 'Re-engage interested prospects and build brand awareness with strategic retargeting campaigns.',
            'hero_stat1_number' => '475%',
            'hero_stat1_label' => 'Average CTR Increase',
            'hero_stat2_number' => '68%',
            'hero_stat2_label' => 'Conversion Rate Boost',
            'hero_stat3_number' => '12x',
            'hero_stat3_label' => 'ROAS Improvement',
            'hero_cta1_text' => 'Start Retargeting',
            'hero_cta2_text' => 'View Packages',
            'overview_title' => 'Strategic Retargeting & Display Solutions',
            'overview_content' => 'Reconnect with your most valuable prospects through targeted display campaigns.',
            'service_title_1' => 'Website Retargeting',
            'service_content_1' => 'Target visitors who explored your site but didn\'t convert.',
            'service_icon_1' => 'fas fa-globe',
            'service_title_2' => 'Email Retargeting',
            'service_content_2' => 'Re-engage subscribers with personalized display ads.',
            'service_icon_2' => 'fas fa-envelope',
            'service_title_3' => 'Dynamic Product Ads',
            'service_content_3' => 'Show specific products to interested prospects.',
            'service_icon_3' => 'fas fa-shopping-cart',
            'service_title_4' => 'Video Retargeting',
            'service_content_4' => 'Target viewers of your video content.',
            'service_icon_4' => 'fas fa-video',
            'service_title_5' => 'Social Media Retargeting',
            'service_content_5' => 'Reach prospects across social platforms.',
            'service_icon_5' => 'fas fa-share-alt',
            'service_title_6' => 'Cross-Device Targeting',
            'service_content_6' => 'Follow prospects across all their devices.',
            'service_icon_6' => 'fas fa-mobile-alt',
            'case_study_title' => 'Retargeting Success Story',
            'case_study_intro' => 'How we increased conversions by 340% for an e-commerce client.',
            'case_study_challenge' => 'High traffic but low conversion rates on product pages.',
            'case_study_solution' => 'Strategic retargeting campaign with dynamic product ads.',
            'case_result_1_number' => '340%',
            'case_result_1_label' => 'Conversion Increase',
            'case_result_2_number' => '65%',
            'case_result_2_label' => 'Lower CPA',
            'case_result_3_number' => '8.2x',
            'case_result_3_label' => 'ROAS Achievement',
            'case_result_4_number' => '45%',
            'case_result_4_label' => 'Brand Recall Lift',
            'process_title' => 'Our Retargeting Process',
            'process_step_number_1' => '01',
            'process_step_title_1' => 'Audience Analysis',
            'process_step_content_1' => 'Identify and segment your most valuable prospects.',
            'process_step_number_2' => '02',
            'process_step_title_2' => 'Creative Development',
            'process_step_content_2' => 'Design compelling ads that drive action.',
            'process_step_number_3' => '03',
            'process_step_title_3' => 'Campaign Setup',
            'process_step_content_3' => 'Configure targeting and bidding strategies.',
            'process_step_number_4' => '04',
            'process_step_title_4' => 'Launch & Monitor',
            'process_step_content_4' => 'Deploy campaigns and track performance.',
            'process_step_number_5' => '05',
            'process_step_title_5' => 'Optimize & Scale',
            'process_step_content_5' => 'Refine campaigns for maximum ROI.',
            'types_title' => 'Retargeting Campaign Types',
            'type_title_1' => 'Standard Retargeting',
            'type_content_1' => 'Show ads to previous website visitors.',
            'type_icon_1' => 'fas fa-redo',
            'type_title_2' => 'Dynamic Retargeting',
            'type_content_2' => 'Display specific products viewed.',
            'type_icon_2' => 'fas fa-sync-alt',
            'type_title_3' => 'Search Retargeting',
            'type_content_3' => 'Target users based on search behavior.',
            'type_icon_3' => 'fas fa-search',
            'type_title_4' => 'Email Retargeting',
            'type_content_4' => 'Reach email subscribers across the web.',
            'type_icon_4' => 'fas fa-at',
            'type_title_5' => 'Video Retargeting',
            'type_content_5' => 'Target video viewers with display ads.',
            'type_icon_5' => 'fas fa-play',
            'type_title_6' => 'Customer Lookalikes',
            'type_content_6' => 'Find new prospects similar to customers.',
            'type_icon_6' => 'fas fa-users',
            'tools_title' => 'Retargeting Platforms We Use',
            'tool_title_1' => 'Google Ads',
            'tool_content_1' => 'Reach audiences across Google\'s network.',
            'tool_icon_1' => 'fab fa-google',
            'tool_title_2' => 'Facebook Ads',
            'tool_content_2' => 'Target users on Facebook and Instagram.',
            'tool_icon_2' => 'fab fa-facebook',
            'tool_title_3' => 'LinkedIn Ads',
            'tool_content_3' => 'Professional B2B retargeting campaigns.',
            'tool_icon_3' => 'fab fa-linkedin',
            'tool_title_4' => 'Display Networks',
            'tool_content_4' => 'Premium placements across the web.',
            'tool_icon_4' => 'fas fa-ad',
            'industries_title' => 'Industries We Serve',
            'industry_title_1' => 'E-commerce',
            'industry_content_1' => 'Drive product sales and reduce cart abandonment.',
            'industry_title_2' => 'SaaS',
            'industry_content_2' => 'Convert trial users to paid subscribers.',
            'industry_title_3' => 'Healthcare',
            'industry_content_3' => 'Reach patients seeking medical services.',
            'industry_title_4' => 'Financial Services',
            'industry_content_4' => 'Generate leads for financial products.',
            'industry_title_5' => 'Education',
            'industry_content_5' => 'Attract students to courses and programs.',
            'industry_title_6' => 'Real Estate',
            'industry_content_6' => 'Connect with property buyers and sellers.',
            'testimonial_quote' => 'Their retargeting campaigns brought back 40% of our lost prospects and generated our highest ROI to date.',
            'testimonial_name' => 'Jennifer Martinez',
            'testimonial_title' => 'Marketing Director, TechFlow Solutions',
            'cta_title' => 'Ready to Re-Engage Your Prospects?',
            'cta_content' => 'Let us create a retargeting strategy that brings back your most valuable prospects.',
            'cta_button_1_text' => 'Start Retargeting Campaign',
            'cta_button_2_text' => 'Get Free Consultation'
        );
        
        return isset($meta_defaults[$key]) ? $meta_defaults[$key] : $fallback;
    }
}

/**
 * Hero Section Callback
 */
function aimpro_retargeting_display_hero_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_hero_nonce');
    
    // Use safe helper function instead of direct call
    
    // Get saved values or use defaults if empty
    $hero_title = get_post_meta($post->ID, '_retargeting_display_hero_title', true);
    if (empty($hero_title)) $hero_title = get_retargeting_meta_default('hero_title');
    
    $hero_subtitle = get_post_meta($post->ID, '_retargeting_display_hero_subtitle', true);
    if (empty($hero_subtitle)) $hero_subtitle = get_retargeting_meta_default('hero_subtitle');
    
    // Hero Stats
    $hero_stat1_number = get_post_meta($post->ID, '_retargeting_display_hero_stat1_number', true);
    if (empty($hero_stat1_number)) $hero_stat1_number = get_retargeting_meta_default('hero_stat1_number');
    
    $hero_stat1_label = get_post_meta($post->ID, '_retargeting_display_hero_stat1_label', true);
    if (empty($hero_stat1_label)) $hero_stat1_label = get_retargeting_meta_default('hero_stat1_label');
    
    $hero_stat2_number = get_post_meta($post->ID, '_retargeting_display_hero_stat2_number', true);
    if (empty($hero_stat2_number)) $hero_stat2_number = get_retargeting_meta_default('hero_stat2_number');
    
    $hero_stat2_label = get_post_meta($post->ID, '_retargeting_display_hero_stat2_label', true);
    if (empty($hero_stat2_label)) $hero_stat2_label = get_retargeting_meta_default('hero_stat2_label');
    
    $hero_stat3_number = get_post_meta($post->ID, '_retargeting_display_hero_stat3_number', true);
    if (empty($hero_stat3_number)) $hero_stat3_number = get_retargeting_meta_default('hero_stat3_number');
    
    $hero_stat3_label = get_post_meta($post->ID, '_retargeting_display_hero_stat3_label', true);
    if (empty($hero_stat3_label)) $hero_stat3_label = get_retargeting_meta_default('hero_stat3_label');
    
    // Hero CTAs
    $hero_cta1_text = get_post_meta($post->ID, '_retargeting_display_hero_cta1_text', true);
    if (empty($hero_cta1_text)) $hero_cta1_text = get_retargeting_meta_default('hero_cta1_text');
    
    $hero_cta2_text = get_post_meta($post->ID, '_retargeting_display_hero_cta2_text', true);
    if (empty($hero_cta2_text)) $hero_cta2_text = get_retargeting_meta_default('hero_cta2_text');
    
    // Output fields
    ?>
    <p>
        <label for="retargeting_display_hero_title"><?php _e('Hero Title', 'aimpro'); ?></label><br>
        <?php wp_editor($hero_title, 'retargeting_display_hero_title', array('textarea_name' => 'retargeting_display_hero_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    <p>
        <label for="retargeting_display_hero_subtitle"><?php _e('Hero Subtitle', 'aimpro'); ?></label><br>
        <?php wp_editor($hero_subtitle, 'retargeting_display_hero_subtitle', array('textarea_name' => 'retargeting_display_hero_subtitle', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
    
    $overview_title = get_post_meta($post->ID, '_retargeting_display_overview_title', true);
    if (empty($overview_title)) $overview_title = get_retargeting_meta_default('overview_title');
    
    $overview_content = get_post_meta($post->ID, '_retargeting_display_overview_content', true);
    if (empty($overview_content)) $overview_content = get_retargeting_meta_default('overview_content');
    
    ?>
    <p>
        <label for="retargeting_display_overview_title"><?php _e('Overview Title', 'aimpro'); ?></label><br>
        <?php wp_editor($overview_title, 'retargeting_display_overview_title', array('textarea_name' => 'retargeting_display_overview_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    <p>
        <label for="retargeting_display_overview_content"><?php _e('Overview Content', 'aimpro'); ?></label><br>
        <?php wp_editor($overview_content, 'retargeting_display_overview_content', array('textarea_name' => 'retargeting_display_overview_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 6, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    <?php
}

/**
 * Services Section Callback
 */
function aimpro_retargeting_display_services_callback($post) {
    wp_nonce_field(basename(__FILE__), 'retargeting_display_services_nonce');
    
    ?>
    <div id="retargeting-display-services">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Service %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $service_title = get_post_meta($post->ID, "_retargeting_display_service_title_{$i}", true);
                if (empty($service_title)) $service_title = get_retargeting_meta_default("service_title_{$i}");
                
                $service_content = get_post_meta($post->ID, "_retargeting_display_service_content_{$i}", true);
                if (empty($service_content)) $service_content = get_retargeting_meta_default("service_content_{$i}");
                
                $service_icon = get_post_meta($post->ID, "_retargeting_display_service_icon_{$i}", true);
                if (empty($service_icon)) $service_icon = get_retargeting_meta_default("service_icon_{$i}");
                ?>
                
                <p>
                    <label for="retargeting_display_service_title_<?php echo $i; ?>"><?php _e('Service Title', 'aimpro'); ?></label><br>
                    <?php wp_editor($service_title, "retargeting_display_service_title_{$i}", array('textarea_name' => "retargeting_display_service_title_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
                </p>
                <p>
                    <label for="retargeting_display_service_content_<?php echo $i; ?>"><?php _e('Service Content', 'aimpro'); ?></label><br>
                    <?php wp_editor($service_content, "retargeting_display_service_content_{$i}", array('textarea_name' => "retargeting_display_service_content_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
    
    $case_study_title = get_post_meta($post->ID, '_retargeting_display_case_study_title', true);
    if (empty($case_study_title)) $case_study_title = get_retargeting_meta_default('case_study_title');
    
    $case_study_intro = get_post_meta($post->ID, '_retargeting_display_case_study_intro', true);
    if (empty($case_study_intro)) $case_study_intro = get_retargeting_meta_default('case_study_intro');
    
    $case_study_challenge = get_post_meta($post->ID, '_retargeting_display_case_study_challenge', true);
    if (empty($case_study_challenge)) $case_study_challenge = get_retargeting_meta_default('case_study_challenge');
    
    $case_study_solution = get_post_meta($post->ID, '_retargeting_display_case_study_solution', true);
    if (empty($case_study_solution)) $case_study_solution = get_retargeting_meta_default('case_study_solution');
    
    ?>
    <p>
        <label for="retargeting_display_case_study_title"><?php _e('Case Study Title', 'aimpro'); ?></label><br>
        <?php wp_editor($case_study_title, 'retargeting_display_case_study_title', array('textarea_name' => 'retargeting_display_case_study_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    <p>
        <label for="retargeting_display_case_study_intro"><?php _e('Case Study Intro', 'aimpro'); ?></label><br>
        <?php wp_editor($case_study_intro, 'retargeting_display_case_study_intro', array('textarea_name' => 'retargeting_display_case_study_intro', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    <p>
        <label for="retargeting_display_case_study_challenge"><?php _e('Challenge', 'aimpro'); ?></label><br>
        <?php wp_editor($case_study_challenge, 'retargeting_display_case_study_challenge', array('textarea_name' => 'retargeting_display_case_study_challenge', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 5, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    <p>
        <label for="retargeting_display_case_study_solution"><?php _e('Solution', 'aimpro'); ?></label><br>
        <?php wp_editor($case_study_solution, 'retargeting_display_case_study_solution', array('textarea_name' => 'retargeting_display_case_study_solution', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 5, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    
    <h4><?php _e('Case Study Results', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 15px; flex-wrap: wrap;">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div style="flex: 1; min-width: 200px;">
                <?php
                $result_number = get_post_meta($post->ID, "_retargeting_display_case_result_{$i}_number", true);
                if (empty($result_number)) $result_number = get_retargeting_meta_default("case_result_{$i}_number");
                
                $result_label = get_post_meta($post->ID, "_retargeting_display_case_result_{$i}_label", true);
                if (empty($result_label)) $result_label = get_retargeting_meta_default("case_result_{$i}_label");
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
    
    $process_title = get_post_meta($post->ID, '_retargeting_display_process_title', true);
    if (empty($process_title)) $process_title = get_retargeting_meta_default('process_title');
    
    ?>
    <p>
        <label for="retargeting_display_process_title"><?php _e('Process Title', 'aimpro'); ?></label><br>
        <?php wp_editor($process_title, 'retargeting_display_process_title', array('textarea_name' => 'retargeting_display_process_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    
    <div id="retargeting-display-process-steps">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Process Step %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $step_number = get_post_meta($post->ID, "_retargeting_display_process_step_number_{$i}", true);
                if (empty($step_number)) $step_number = get_retargeting_meta_default("process_step_number_{$i}");
                
                $step_title = get_post_meta($post->ID, "_retargeting_display_process_step_title_{$i}", true);
                if (empty($step_title)) $step_title = get_retargeting_meta_default("process_step_title_{$i}");
                
                $step_content = get_post_meta($post->ID, "_retargeting_display_process_step_content_{$i}", true);
                if (empty($step_content)) $step_content = get_retargeting_meta_default("process_step_content_{$i}");
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
                            <?php wp_editor($step_title, "retargeting_display_process_step_title_{$i}", array('textarea_name' => "retargeting_display_process_step_title_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
                        </p>
                        <p>
                            <label for="retargeting_display_process_step_content_<?php echo $i; ?>"><?php _e('Step Content', 'aimpro'); ?></label><br>
                            <?php wp_editor($step_content, "retargeting_display_process_step_content_{$i}", array('textarea_name' => "retargeting_display_process_step_content_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
    
    $types_title = get_post_meta($post->ID, '_retargeting_display_types_title', true);
    if (empty($types_title)) $types_title = get_retargeting_meta_default('types_title');
    
    ?>
    <p>
        <label for="retargeting_display_types_title"><?php _e('Types Section Title', 'aimpro'); ?></label><br>
        <?php wp_editor($types_title, 'retargeting_display_types_title', array('textarea_name' => 'retargeting_display_types_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    
    <div id="retargeting-display-types">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Type %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $type_title = get_post_meta($post->ID, "_retargeting_display_type_title_{$i}", true);
                if (empty($type_title)) $type_title = get_retargeting_meta_default("type_title_{$i}");
                
                $type_content = get_post_meta($post->ID, "_retargeting_display_type_content_{$i}", true);
                if (empty($type_content)) $type_content = get_retargeting_meta_default("type_content_{$i}");
                
                $type_icon = get_post_meta($post->ID, "_retargeting_display_type_icon_{$i}", true);
                if (empty($type_icon)) $type_icon = get_retargeting_meta_default("type_icon_{$i}");
                ?>
                
                <p>
                    <label for="retargeting_display_type_title_<?php echo $i; ?>"><?php _e('Type Title', 'aimpro'); ?></label><br>
                    <?php wp_editor($type_title, "retargeting_display_type_title_{$i}", array('textarea_name' => "retargeting_display_type_title_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
                </p>
                <p>
                    <label for="retargeting_display_type_content_<?php echo $i; ?>"><?php _e('Type Content', 'aimpro'); ?></label><br>
                    <?php wp_editor($type_content, "retargeting_display_type_content_{$i}", array('textarea_name' => "retargeting_display_type_content_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
    
    $tools_title = get_post_meta($post->ID, '_retargeting_display_tools_title', true);
    if (empty($tools_title)) $tools_title = get_retargeting_meta_default('tools_title');
    
    ?>
    <p>
        <label for="retargeting_display_tools_title"><?php _e('Tools Section Title', 'aimpro'); ?></label><br>
        <?php wp_editor($tools_title, 'retargeting_display_tools_title', array('textarea_name' => 'retargeting_display_tools_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    
    <div id="retargeting-display-tools">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Tool %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $tool_title = get_post_meta($post->ID, "_retargeting_display_tool_title_{$i}", true);
                if (empty($tool_title)) $tool_title = get_retargeting_meta_default("tool_title_{$i}");
                
                $tool_content = get_post_meta($post->ID, "_retargeting_display_tool_content_{$i}", true);
                if (empty($tool_content)) $tool_content = get_retargeting_meta_default("tool_content_{$i}");
                
                $tool_icon = get_post_meta($post->ID, "_retargeting_display_tool_icon_{$i}", true);
                if (empty($tool_icon)) $tool_icon = get_retargeting_meta_default("tool_icon_{$i}");
                ?>
                
                <p>
                    <label for="retargeting_display_tool_title_<?php echo $i; ?>"><?php _e('Tool Title', 'aimpro'); ?></label><br>
                    <?php wp_editor($tool_title, "retargeting_display_tool_title_{$i}", array('textarea_name' => "retargeting_display_tool_title_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
                </p>
                <p>
                    <label for="retargeting_display_tool_content_<?php echo $i; ?>"><?php _e('Tool Content', 'aimpro'); ?></label><br>
                    <?php wp_editor($tool_content, "retargeting_display_tool_content_{$i}", array('textarea_name' => "retargeting_display_tool_content_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
    
    $industries_title = get_post_meta($post->ID, '_retargeting_display_industries_title', true);
    if (empty($industries_title)) $industries_title = get_retargeting_meta_default('industries_title');
    
    ?>
    <p>
        <label for="retargeting_display_industries_title"><?php _e('Industries Section Title', 'aimpro'); ?></label><br>
        <?php wp_editor($industries_title, 'retargeting_display_industries_title', array('textarea_name' => 'retargeting_display_industries_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    
    <div id="retargeting-display-industries">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Industry %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $industry_title = get_post_meta($post->ID, "_retargeting_display_industry_title_{$i}", true);
                if (empty($industry_title)) $industry_title = get_retargeting_meta_default("industry_title_{$i}");
                
                $industry_content = get_post_meta($post->ID, "_retargeting_display_industry_content_{$i}", true);
                if (empty($industry_content)) $industry_content = get_retargeting_meta_default("industry_content_{$i}");
                ?>
                
                <p>
                    <label for="retargeting_display_industry_title_<?php echo $i; ?>"><?php _e('Industry Title', 'aimpro'); ?></label><br>
                    <?php wp_editor($industry_title, "retargeting_display_industry_title_{$i}", array('textarea_name' => "retargeting_display_industry_title_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 2, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
                </p>
                <p>
                    <label for="retargeting_display_industry_content_<?php echo $i; ?>"><?php _e('Industry Content', 'aimpro'); ?></label><br>
                    <?php wp_editor($industry_content, "retargeting_display_industry_content_{$i}", array('textarea_name' => "retargeting_display_industry_content_{$i}", 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
    
    $testimonial_quote = get_post_meta($post->ID, '_retargeting_display_testimonial_quote', true);
    if (empty($testimonial_quote)) $testimonial_quote = get_retargeting_meta_default('testimonial_quote');
    
    $testimonial_name = get_post_meta($post->ID, '_retargeting_display_testimonial_name', true);
    if (empty($testimonial_name)) $testimonial_name = get_retargeting_meta_default('testimonial_name');
    
    $testimonial_title = get_post_meta($post->ID, '_retargeting_display_testimonial_title', true);
    if (empty($testimonial_title)) $testimonial_title = get_retargeting_meta_default('testimonial_title');
    
    ?>
    <p>
        <label for="retargeting_display_testimonial_quote"><?php _e('Testimonial Quote', 'aimpro'); ?></label><br>
        <?php wp_editor($testimonial_quote, 'retargeting_display_testimonial_quote', array('textarea_name' => 'retargeting_display_testimonial_quote', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
    
    $cta_title = get_post_meta($post->ID, '_retargeting_display_cta_title', true);
    if (empty($cta_title)) $cta_title = get_retargeting_meta_default('cta_title');
    
    $cta_content = get_post_meta($post->ID, '_retargeting_display_cta_content', true);
    if (empty($cta_content)) $cta_content = get_retargeting_meta_default('cta_content');
    
    $cta_button_1_text = get_post_meta($post->ID, '_retargeting_display_cta_button_1_text', true);
    if (empty($cta_button_1_text)) $cta_button_1_text = get_retargeting_meta_default('cta_button_1_text');
    
    $cta_button_2_text = get_post_meta($post->ID, '_retargeting_display_cta_button_2_text', true);
    if (empty($cta_button_2_text)) $cta_button_2_text = get_retargeting_meta_default('cta_button_2_text');
    
    ?>
    <p>
        <label for="retargeting_display_cta_title"><?php _e('CTA Title', 'aimpro'); ?></label><br>
        <?php wp_editor($cta_title, 'retargeting_display_cta_title', array('textarea_name' => 'retargeting_display_cta_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </p>
    <p>
        <label for="retargeting_display_cta_content"><?php _e('CTA Content', 'aimpro'); ?></label><br>
        <?php wp_editor($cta_content, 'retargeting_display_cta_content', array('textarea_name' => 'retargeting_display_cta_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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

    // Define rich text fields that use wp_editor (use wp_kses_post)
    $rich_text_fields = [
        'retargeting_display_hero_title',
        'retargeting_display_hero_subtitle',
        'retargeting_display_overview_title',
        'retargeting_display_overview_content',
        'retargeting_display_case_study_title',
        'retargeting_display_case_study_intro',
        'retargeting_display_case_study_challenge',
        'retargeting_display_case_study_solution',
        'retargeting_display_process_title',
        'retargeting_display_types_title',
        'retargeting_display_tools_title',
        'retargeting_display_industries_title',
        'retargeting_display_testimonial_quote',
        'retargeting_display_cta_title',
        'retargeting_display_cta_content'
    ];

    // Add dynamic rich text fields for services, process steps, types, tools, industries
    for ($i = 1; $i <= 6; $i++) {
        $rich_text_fields[] = "retargeting_display_service_title_{$i}";
        $rich_text_fields[] = "retargeting_display_service_content_{$i}";
        $rich_text_fields[] = "retargeting_display_type_title_{$i}";
        $rich_text_fields[] = "retargeting_display_type_content_{$i}";
        $rich_text_fields[] = "retargeting_display_industry_title_{$i}";
        $rich_text_fields[] = "retargeting_display_industry_content_{$i}";
    }
    
    for ($i = 1; $i <= 5; $i++) {
        $rich_text_fields[] = "retargeting_display_process_step_title_{$i}";
        $rich_text_fields[] = "retargeting_display_process_step_content_{$i}";
    }
    
    for ($i = 1; $i <= 4; $i++) {
        $rich_text_fields[] = "retargeting_display_tool_title_{$i}";
        $rich_text_fields[] = "retargeting_display_tool_content_{$i}";
    }

    // Define text fields that remain plain text (use sanitize_text_field)
    $text_fields = [
        'retargeting_display_hero_cta1_text',
        'retargeting_display_hero_cta2_text',
        'retargeting_display_testimonial_name',
        'retargeting_display_testimonial_title',
        'retargeting_display_cta_button_1_text',
        'retargeting_display_cta_button_2_text'
    ];

    // Add dynamic text fields
    for ($i = 1; $i <= 3; $i++) {
        $text_fields[] = "retargeting_display_hero_stat{$i}_number";
        $text_fields[] = "retargeting_display_hero_stat{$i}_label";
    }
    
    for ($i = 1; $i <= 6; $i++) {
        $text_fields[] = "retargeting_display_service_icon_{$i}";
        $text_fields[] = "retargeting_display_type_icon_{$i}";
    }
    
    for ($i = 1; $i <= 5; $i++) {
        $text_fields[] = "retargeting_display_process_step_number_{$i}";
    }
    
    for ($i = 1; $i <= 4; $i++) {
        $text_fields[] = "retargeting_display_case_result_{$i}_number";
        $text_fields[] = "retargeting_display_case_result_{$i}_label";
        $text_fields[] = "retargeting_display_tool_icon_{$i}";
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
                $value = in_array($field, $rich_text_fields) ? wp_kses_post($_POST[$field]) : sanitize_text_field($_POST[$field]);
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
            update_post_meta($post_id, '_retargeting_display_overview_title', wp_kses_post($_POST['retargeting_display_overview_title']));
        }
        if (isset($_POST['retargeting_display_overview_content'])) {
            update_post_meta($post_id, '_retargeting_display_overview_content', wp_kses_post($_POST['retargeting_display_overview_content']));
        }
    }
    
    // Save Services Section
    if (isset($_POST['retargeting_display_services_nonce']) && wp_verify_nonce($_POST['retargeting_display_services_nonce'], basename(__FILE__))) {
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["retargeting_display_service_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_service_title_{$i}", wp_kses_post($_POST["retargeting_display_service_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_service_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_service_content_{$i}", wp_kses_post($_POST["retargeting_display_service_content_{$i}"]));
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
                update_post_meta($post_id, $meta_key, wp_kses_post($_POST[$field]));
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
            update_post_meta($post_id, '_retargeting_display_process_title', wp_kses_post($_POST['retargeting_display_process_title']));
        }
        
        for ($i = 1; $i <= 5; $i++) {
            if (isset($_POST["retargeting_display_process_step_number_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_process_step_number_{$i}", sanitize_text_field($_POST["retargeting_display_process_step_number_{$i}"]));
            }
            if (isset($_POST["retargeting_display_process_step_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_process_step_title_{$i}", wp_kses_post($_POST["retargeting_display_process_step_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_process_step_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_process_step_content_{$i}", wp_kses_post($_POST["retargeting_display_process_step_content_{$i}"]));
            }
        }
    }
    
    // Save Retargeting Types Section
    if (isset($_POST['retargeting_display_types_nonce']) && wp_verify_nonce($_POST['retargeting_display_types_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_types_title'])) {
            update_post_meta($post_id, '_retargeting_display_types_title', wp_kses_post($_POST['retargeting_display_types_title']));
        }
        
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["retargeting_display_type_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_type_title_{$i}", wp_kses_post($_POST["retargeting_display_type_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_type_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_type_content_{$i}", wp_kses_post($_POST["retargeting_display_type_content_{$i}"]));
            }
            if (isset($_POST["retargeting_display_type_icon_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_type_icon_{$i}", sanitize_text_field($_POST["retargeting_display_type_icon_{$i}"]));
            }
        }
    }
    
    // Save Tools Section
    if (isset($_POST['retargeting_display_tools_nonce']) && wp_verify_nonce($_POST['retargeting_display_tools_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_tools_title'])) {
            update_post_meta($post_id, '_retargeting_display_tools_title', wp_kses_post($_POST['retargeting_display_tools_title']));
        }
        
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["retargeting_display_tool_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_tool_title_{$i}", wp_kses_post($_POST["retargeting_display_tool_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_tool_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_tool_content_{$i}", wp_kses_post($_POST["retargeting_display_tool_content_{$i}"]));
            }
            if (isset($_POST["retargeting_display_tool_icon_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_tool_icon_{$i}", sanitize_text_field($_POST["retargeting_display_tool_icon_{$i}"]));
            }
        }
    }
    
    // Save Industries Section
    if (isset($_POST['retargeting_display_industries_nonce']) && wp_verify_nonce($_POST['retargeting_display_industries_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_industries_title'])) {
            update_post_meta($post_id, '_retargeting_display_industries_title', wp_kses_post($_POST['retargeting_display_industries_title']));
        }
        
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["retargeting_display_industry_title_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_industry_title_{$i}", wp_kses_post($_POST["retargeting_display_industry_title_{$i}"]));
            }
            if (isset($_POST["retargeting_display_industry_content_{$i}"])) {
                update_post_meta($post_id, "_retargeting_display_industry_content_{$i}", wp_kses_post($_POST["retargeting_display_industry_content_{$i}"]));
            }
        }
    }
    
    // Save Testimonial Section
    if (isset($_POST['retargeting_display_testimonial_nonce']) && wp_verify_nonce($_POST['retargeting_display_testimonial_nonce'], basename(__FILE__))) {
        if (isset($_POST['retargeting_display_testimonial_quote'])) {
            update_post_meta($post_id, '_retargeting_display_testimonial_quote', wp_kses_post($_POST['retargeting_display_testimonial_quote']));
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
            update_post_meta($post_id, '_retargeting_display_cta_title', wp_kses_post($_POST['retargeting_display_cta_title']));
        }
        if (isset($_POST['retargeting_display_cta_content'])) {
            update_post_meta($post_id, '_retargeting_display_cta_content', wp_kses_post($_POST['retargeting_display_cta_content']));
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
