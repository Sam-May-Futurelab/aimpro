<?php
/**
 * Team Page Meta Fields
 * Adds custom meta box for Team Page template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_team_meta_box');
function aimpro_add_team_meta_box() {
    // Only add to pages using the Team Page template or with 'team' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-team.php' || $page_slug === 'team') {
        add_meta_box(
            'aimpro_team_settings',
            'Team Page Settings',
            'aimpro_team_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_team_meta_box_callback($post) {
    wp_nonce_field('aimpro_team_meta_box', 'aimpro_team_meta_box_nonce');
    
    // Get saved values
    $team_header_title = get_post_meta($post->ID, 'team_header_title', true) ?: 'Our Team';
    $team_header_subtitle = get_post_meta($post->ID, 'team_header_subtitle', true) ?: 'Meet the experts behind your digital success';
    
    $team_intro_heading = get_post_meta($post->ID, 'team_intro_heading', true) ?: 'The People Who Make It Happen';
    $team_intro_desc = get_post_meta($post->ID, 'team_intro_desc', true) ?: 'Our diverse team of digital marketing specialists, strategists, and creative professionals work together to deliver exceptional results for our clients. Each team member brings unique expertise and passion to help your business thrive in the digital landscape.';
    
    $leadership_heading = get_post_meta($post->ID, 'leadership_heading', true) ?: 'Leadership Team';

    // Values section
    $values_heading = get_post_meta($post->ID, 'values_heading', true) ?: 'What Drives Our Team';
    $values_list = get_post_meta($post->ID, 'values_list', true) ?: 'Collaboration: We believe the best results come from working together, sharing knowledge, and supporting each other\'s growth.
Continuous Learning: Digital marketing evolves rapidly, and we\'re committed to staying ahead through ongoing education and skill development.
Client Success: Your success is our success. We\'re dedicated to delivering results that exceed expectations and drive real business growth.
Innovation: We embrace new technologies and creative approaches to solve complex marketing challenges and stay ahead of the curve.';
    
    // CTA section
    $cta_heading = get_post_meta($post->ID, 'team_cta_heading', true) ?: 'Want to Join Our Team?';
    $cta_desc = get_post_meta($post->ID, 'team_cta_desc', true) ?: 'We\'re always looking for talented individuals who share our passion for digital marketing excellence';
    $cta_button1_text = get_post_meta($post->ID, 'team_cta_button1_text', true) ?: 'View Open Positions';
    $cta_button1_url = get_post_meta($post->ID, 'team_cta_button1_url', true) ?: home_url('/careers');
    $cta_button2_text = get_post_meta($post->ID, 'team_cta_button2_text', true) ?: 'Get in Touch';
    $cta_button2_url = get_post_meta($post->ID, 'team_cta_button2_url', true) ?: home_url('/contact');
    
    ?>
    <table class="form-table">
        <tr>
          <th colspan="2"><h3>Page Header</h3></th>
        </tr>
        <tr>
            <th><label for="team_header_title">Page Title</label></th>
            <td><input type="text" id="team_header_title" name="team_header_title" value="<?php echo esc_attr($team_header_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="team_header_subtitle">Page Subtitle</label></th>
            <td><input type="text" id="team_header_subtitle" name="team_header_subtitle" value="<?php echo esc_attr($team_header_subtitle); ?>" class="regular-text" /></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Team Introduction</h3></th>
        </tr>
        <tr>
            <th><label for="team_intro_heading">Introduction Heading</label></th>
            <td><input type="text" id="team_intro_heading" name="team_intro_heading" value="<?php echo esc_attr($team_intro_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="team_intro_desc">Introduction Description</label></th>
            <td><textarea id="team_intro_desc" name="team_intro_desc" rows="4" class="large-text"><?php echo esc_textarea($team_intro_desc); ?></textarea></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Leadership Team</h3></th>
        </tr>
        <tr>
            <th><label for="leadership_heading">Leadership Section Heading</label></th>
            <td><input type="text" id="leadership_heading" name="leadership_heading" value="<?php echo esc_attr($leadership_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th colspan="2"><p class="description">The leadership team members shown will be the same ones displayed on the homepage.</p></th>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Team Values</h3></th>
        </tr>
        <tr>
            <th><label for="values_heading">Values Section Heading</label></th>
            <td><input type="text" id="values_heading" name="values_heading" value="<?php echo esc_attr($values_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="values_list">Values List</label></th>
            <td>
                <textarea id="values_list" name="values_list" rows="6" class="large-text"><?php echo esc_textarea($values_list); ?></textarea>
                <p class="description">Format: Value Name: Value Description (one per line)</p>
            </td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Call to Action</h3></th>
        </tr>
        <tr>
            <th><label for="team_cta_heading">CTA Heading</label></th>
            <td><input type="text" id="team_cta_heading" name="team_cta_heading" value="<?php echo esc_attr($cta_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="team_cta_desc">CTA Description</label></th>
            <td><input type="text" id="team_cta_desc" name="team_cta_desc" value="<?php echo esc_attr($cta_desc); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="team_cta_button1_text">Primary Button Text</label></th>
            <td><input type="text" id="team_cta_button1_text" name="team_cta_button1_text" value="<?php echo esc_attr($cta_button1_text); ?>" /></td>
        </tr>
        <tr>
            <th><label for="team_cta_button1_url">Primary Button URL</label></th>
            <td><input type="text" id="team_cta_button1_url" name="team_cta_button1_url" value="<?php echo esc_attr($cta_button1_url); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="team_cta_button2_text">Secondary Button Text</label></th>
            <td><input type="text" id="team_cta_button2_text" name="team_cta_button2_text" value="<?php echo esc_attr($cta_button2_text); ?>" /></td>
        </tr>
        <tr>
            <th><label for="team_cta_button2_url">Secondary Button URL</label></th>
            <td><input type="text" id="team_cta_button2_url" name="team_cta_button2_url" value="<?php echo esc_attr($cta_button2_url); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

// Save meta box data
add_action('save_post', 'aimpro_save_team_meta');
function aimpro_save_team_meta($post_id) {
    // Check if our nonce is set and verify it
    if (!isset($_POST['aimpro_team_meta_box_nonce']) || !wp_verify_nonce($_POST['aimpro_team_meta_box_nonce'], 'aimpro_team_meta_box')) {
        return;
    }
    
    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Header fields
    if (isset($_POST['team_header_title'])) {
        update_post_meta($post_id, 'team_header_title', sanitize_text_field($_POST['team_header_title']));
    }
    if (isset($_POST['team_header_subtitle'])) {
        update_post_meta($post_id, 'team_header_subtitle', sanitize_text_field($_POST['team_header_subtitle']));
    }
    
    // Intro fields
    if (isset($_POST['team_intro_heading'])) {
        update_post_meta($post_id, 'team_intro_heading', sanitize_text_field($_POST['team_intro_heading']));
    }
    if (isset($_POST['team_intro_desc'])) {
        update_post_meta($post_id, 'team_intro_desc', sanitize_textarea_field($_POST['team_intro_desc']));
    }
    
    // Leadership fields
    if (isset($_POST['leadership_heading'])) {
        update_post_meta($post_id, 'leadership_heading', sanitize_text_field($_POST['leadership_heading']));
    }
    
    // Values fields
    if (isset($_POST['values_heading'])) {
        update_post_meta($post_id, 'values_heading', sanitize_text_field($_POST['values_heading']));
    }
    if (isset($_POST['values_list'])) {
        update_post_meta($post_id, 'values_list', sanitize_textarea_field($_POST['values_list']));
    }
    
    // CTA fields
    if (isset($_POST['team_cta_heading'])) {
        update_post_meta($post_id, 'team_cta_heading', sanitize_text_field($_POST['team_cta_heading']));
    }
    if (isset($_POST['team_cta_desc'])) {
        update_post_meta($post_id, 'team_cta_desc', sanitize_text_field($_POST['team_cta_desc']));
    }
    if (isset($_POST['team_cta_button1_text'])) {
        update_post_meta($post_id, 'team_cta_button1_text', sanitize_text_field($_POST['team_cta_button1_text']));
    }
    if (isset($_POST['team_cta_button1_url'])) {
        update_post_meta($post_id, 'team_cta_button1_url', esc_url_raw($_POST['team_cta_button1_url']));
    }
    if (isset($_POST['team_cta_button2_text'])) {
        update_post_meta($post_id, 'team_cta_button2_text', sanitize_text_field($_POST['team_cta_button2_text']));
    }
    if (isset($_POST['team_cta_button2_url'])) {
        update_post_meta($post_id, 'team_cta_button2_url', esc_url_raw($_POST['team_cta_button2_url']));
    }
}
