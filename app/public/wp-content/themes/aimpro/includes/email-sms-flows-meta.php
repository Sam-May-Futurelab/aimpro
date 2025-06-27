<?php
/**
 * Email & SMS Flows Meta Configuration
 * 
 * Custom fields and meta configuration for the Email & SMS Flows page
 * This file can be used to define custom fields for the page
 */

// Add custom meta boxes for Email & SMS Flows page
function email_sms_flows_meta_boxes() {
    add_meta_box(
        'email_sms_flows_settings',
        'Email & SMS Flows Settings',
        'email_sms_flows_meta_callback',
        'page',
        'normal',
        'high'
    );
}

// Meta box callback function
function email_sms_flows_meta_callback($post) {
    // Only show for the Email & SMS Flows page template
    $template = get_page_template_slug($post->ID);
    if ($template !== 'page-email-sms-flows.php') {
        return;
    }
    
    // Add nonce for security
    wp_nonce_field('email_sms_flows_meta_nonce', 'email_sms_flows_meta_nonce_field');
    
    // Get current values
    $hero_stats = get_post_meta($post->ID, '_email_sms_flows_hero_stats', true);
    $case_study_enabled = get_post_meta($post->ID, '_email_sms_flows_case_study', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th scope="row">
                <label for="email_sms_flows_hero_stats">Hero Statistics (JSON format)</label>
            </th>
            <td>
                <textarea id="email_sms_flows_hero_stats" name="email_sms_flows_hero_stats" rows="5" cols="50" class="large-text"><?php echo esc_textarea($hero_stats); ?></textarea>
                <p class="description">Enter hero statistics in JSON format for custom stats display</p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="email_sms_flows_case_study">Show Case Study Section</label>
            </th>
            <td>
                <input type="checkbox" id="email_sms_flows_case_study" name="email_sms_flows_case_study" value="1" <?php checked($case_study_enabled, '1'); ?> />
                <label for="email_sms_flows_case_study">Display the case study section</label>
            </td>
        </tr>
    </table>
    <p><strong>Note:</strong> If you add content in the page editor above, it will override the default template design. Leave the editor empty to use the custom Email & SMS Flows template.</p>
    <?php
}

// Save meta box data
function save_email_sms_flows_meta($post_id) {
    // Check nonce
    if (!isset($_POST['email_sms_flows_meta_nonce_field']) || 
        !wp_verify_nonce($_POST['email_sms_flows_meta_nonce_field'], 'email_sms_flows_meta_nonce')) {
        return;
    }
    
    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save hero stats
    if (isset($_POST['email_sms_flows_hero_stats'])) {
        update_post_meta($post_id, '_email_sms_flows_hero_stats', sanitize_textarea_field($_POST['email_sms_flows_hero_stats']));
    }
    
    // Save case study setting
    $case_study = isset($_POST['email_sms_flows_case_study']) ? '1' : '0';
    update_post_meta($post_id, '_email_sms_flows_case_study', $case_study);
}

// Hook into WordPress
add_action('add_meta_boxes', 'email_sms_flows_meta_boxes');
add_action('save_post', 'save_email_sms_flows_meta');
