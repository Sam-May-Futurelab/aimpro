<?php
/**
 * Partnership Page Meta Fields
 * Adds custom meta box for Partnership Page template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_partner_meta_box');
function aimpro_add_partner_meta_box() {
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-become-a-partner.php' || $page_slug === 'become-a-partner' || $page_slug === 'partner') {
        add_meta_box(
            'aimpro_partner_settings',
            'Partnership Page Settings',
            'aimpro_partner_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_partner_meta_box_callback($post) {
    wp_nonce_field('aimpro_partner_meta_box', 'aimpro_partner_meta_box_nonce');
    
    // Page header
    $header_title = get_post_meta($post->ID, 'partner_header_title', true) ?: 'Become a Partner';
    $header_subtitle = get_post_meta($post->ID, 'partner_header_subtitle', true) ?: 'Join our network of strategic partners and grow together';
    
    // Introduction section
    $intro_heading = get_post_meta($post->ID, 'partner_intro_heading', true) ?: 'Partner with Aimpro Digital';
    $intro_text = get_post_meta($post->ID, 'partner_intro_text', true) ?: 'We believe in the power of collaboration. Our partnership program is designed to create mutually beneficial relationships that help both parties grow and succeed in the digital marketing landscape.\n\nWhether you\'re a complementary service provider, technology vendor, or strategic ally, we offer various partnership opportunities that can expand your reach while providing additional value to our clients.';
    
    // Stats section
    $stats_heading = get_post_meta($post->ID, 'partner_stats_heading', true) ?: 'Partnership Opportunity';
    
    // Partnership types section
    $opportunities_heading = get_post_meta($post->ID, 'partner_opportunities_heading', true) ?: 'Partnership Opportunities';
    
    // Why partner section
    $why_heading = get_post_meta($post->ID, 'partner_why_heading', true) ?: 'Why Partner with Aimpro Digital?';
    
    // Success stories section
    $stories_heading = get_post_meta($post->ID, 'partner_stories_heading', true) ?: 'Partner Success Stories';
    
    // Process section
    $process_heading = get_post_meta($post->ID, 'partner_process_heading', true) ?: 'How to Become a Partner';
    
    // Application form
    $form_heading = get_post_meta($post->ID, 'partner_form_heading', true) ?: 'Apply to Become a Partner';
    $form_description = get_post_meta($post->ID, 'partner_form_description', true) ?: 'Ready to explore partnership opportunities? Fill out the form below and we\'ll get back to you within 24 hours.';
    
    // Contact section
    $contact_heading = get_post_meta($post->ID, 'partner_contact_heading', true) ?: 'Questions About Partnerships?';
    $contact_description = get_post_meta($post->ID, 'partner_contact_description', true) ?: 'Our partnership team is here to answer any questions and help you find the right partnership opportunity';
    $contact_email = get_post_meta($post->ID, 'partner_contact_email', true) ?: 'hello@aimpro.co.uk';
    $contact_phone = get_post_meta($post->ID, 'partner_contact_phone', true) ?: '+44 121 285 8490';
    
    ?>
    <table class="form-table">
        <tr>
          <th colspan="2"><h3>Page Header</h3></th>
        </tr>
        <tr>
            <th><label for="partner_header_title">Page Title</label></th>
            <td><input type="text" id="partner_header_title" name="partner_header_title" value="<?php echo esc_attr($header_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_header_subtitle">Page Subtitle</label></th>
            <td><input type="text" id="partner_header_subtitle" name="partner_header_subtitle" value="<?php echo esc_attr($header_subtitle); ?>" class="regular-text" /></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Introduction Section</h3></th>
        </tr>
        <tr>
            <th><label for="partner_intro_heading">Introduction Heading</label></th>
            <td><input type="text" id="partner_intro_heading" name="partner_intro_heading" value="<?php echo esc_attr($intro_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_intro_text">Introduction Text</label></th>
            <td><textarea id="partner_intro_text" name="partner_intro_text" rows="5" class="large-text"><?php echo esc_textarea($intro_text); ?></textarea></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Section Headings</h3></th>
        </tr>
        <tr>
            <th><label for="partner_stats_heading">Stats Section Heading</label></th>
            <td><input type="text" id="partner_stats_heading" name="partner_stats_heading" value="<?php echo esc_attr($stats_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_opportunities_heading">Partnership Opportunities Heading</label></th>
            <td><input type="text" id="partner_opportunities_heading" name="partner_opportunities_heading" value="<?php echo esc_attr($opportunities_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_why_heading">Why Partner Section Heading</label></th>
            <td><input type="text" id="partner_why_heading" name="partner_why_heading" value="<?php echo esc_attr($why_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_stories_heading">Success Stories Heading</label></th>
            <td><input type="text" id="partner_stories_heading" name="partner_stories_heading" value="<?php echo esc_attr($stories_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_heading">Process Section Heading</label></th>
            <td><input type="text" id="partner_process_heading" name="partner_process_heading" value="<?php echo esc_attr($process_heading); ?>" class="regular-text" /></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Application Form</h3></th>
        </tr>
        <tr>
            <th><label for="partner_form_heading">Form Heading</label></th>
            <td><input type="text" id="partner_form_heading" name="partner_form_heading" value="<?php echo esc_attr($form_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_form_description">Form Description</label></th>
            <td><textarea id="partner_form_description" name="partner_form_description" rows="3" class="large-text"><?php echo esc_textarea($form_description); ?></textarea></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Contact Section</h3></th>
        </tr>
        <tr>
            <th><label for="partner_contact_heading">Contact Heading</label></th>
            <td><input type="text" id="partner_contact_heading" name="partner_contact_heading" value="<?php echo esc_attr($contact_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_contact_description">Contact Description</label></th>
            <td><textarea id="partner_contact_description" name="partner_contact_description" rows="2" class="large-text"><?php echo esc_textarea($contact_description); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="partner_contact_email">Contact Email</label></th>
            <td><input type="email" id="partner_contact_email" name="partner_contact_email" value="<?php echo esc_attr($contact_email); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_contact_phone">Contact Phone</label></th>
            <td><input type="text" id="partner_contact_phone" name="partner_contact_phone" value="<?php echo esc_attr($contact_phone); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

// Save meta box data
add_action('save_post', 'aimpro_save_partner_meta');
function aimpro_save_partner_meta($post_id) {
    if (!isset($_POST['aimpro_partner_meta_box_nonce']) || !wp_verify_nonce($_POST['aimpro_partner_meta_box_nonce'], 'aimpro_partner_meta_box')) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Save all fields
    $fields = array(
        'partner_header_title' => 'sanitize_text_field',
        'partner_header_subtitle' => 'sanitize_text_field',
        'partner_intro_heading' => 'sanitize_text_field',
        'partner_intro_text' => 'sanitize_textarea_field',
        'partner_stats_heading' => 'sanitize_text_field',
        'partner_opportunities_heading' => 'sanitize_text_field',
        'partner_why_heading' => 'sanitize_text_field',
        'partner_stories_heading' => 'sanitize_text_field',
        'partner_process_heading' => 'sanitize_text_field',
        'partner_form_heading' => 'sanitize_text_field',
        'partner_form_description' => 'sanitize_textarea_field',
        'partner_contact_heading' => 'sanitize_text_field',
        'partner_contact_description' => 'sanitize_textarea_field',
        'partner_contact_email' => 'sanitize_email',
        'partner_contact_phone' => 'sanitize_text_field'
    );
    
    foreach ($fields as $field => $sanitize_func) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, $sanitize_func($_POST[$field]));
        }
    }
}
