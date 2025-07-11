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
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $overview_title = get_post_meta($post->ID, '_retargeting_display_overview_title', true);
    if (empty($overview_title)) $overview_title = $defaults['overview_title'];
    
    $overview_content = get_post_meta($post->ID, '_retargeting_display_overview_content', true);
    if (empty($overview_content)) $overview_content = $defaults['overview_content'];
    
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
        <?php wp_editor($process_title, 'retargeting_display_process_title', array('textarea_name' => 'retargeting_display_process_title', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $types_title = get_post_meta($post->ID, '_retargeting_display_types_title', true);
    if (empty($types_title)) $types_title = $defaults['types_title'];
    
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
                if (empty($type_title)) $type_title = $defaults["type_title_{$i}"];
                
                $type_content = get_post_meta($post->ID, "_retargeting_display_type_content_{$i}", true);
                if (empty($type_content)) $type_content = $defaults["type_content_{$i}"];
                
                $type_icon = get_post_meta($post->ID, "_retargeting_display_type_icon_{$i}", true);
                if (empty($type_icon)) $type_icon = $defaults["type_icon_{$i}"];
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
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $tools_title = get_post_meta($post->ID, '_retargeting_display_tools_title', true);
    if (empty($tools_title)) $tools_title = $defaults['tools_title'];
    
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
                if (empty($tool_title)) $tool_title = $defaults["tool_title_{$i}"];
                
                $tool_content = get_post_meta($post->ID, "_retargeting_display_tool_content_{$i}", true);
                if (empty($tool_content)) $tool_content = $defaults["tool_content_{$i}"];
                
                $tool_icon = get_post_meta($post->ID, "_retargeting_display_tool_icon_{$i}", true);
                if (empty($tool_icon)) $tool_icon = $defaults["tool_icon_{$i}"];
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
    
    $defaults = aimpro_get_retargeting_display_default_values();
    
    $industries_title = get_post_meta($post->ID, '_retargeting_display_industries_title', true);
    if (empty($industries_title)) $industries_title = $defaults['industries_title'];
    
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
                if (empty($industry_title)) $industry_title = $defaults["industry_title_{$i}"];
                
                $industry_content = get_post_meta($post->ID, "_retargeting_display_industry_content_{$i}", true);
                if (empty($industry_content)) $industry_content = $defaults["industry_content_{$i}"];
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
