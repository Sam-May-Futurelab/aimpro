<?php
/**
 * Locations Meta Fields
 *
 * @package Aimpro
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set default values for locations page meta fields
 * This ensures fields are pre-populated with the frontend content
 */
function aimpro_get_locations_default_values() {
    return array(
        // Hero Section
        'locations_hero_title' => 'Our Locations',
        'locations_hero_subtitle' => 'Serving businesses across the UK with digital marketing excellence from our strategically located offices.',
        
        // Office Details
        'locations_office_badge' => 'Head Office',
        'locations_office_city' => 'Birmingham',
        'locations_office_address_line1' => '55 Colmore Row',
        'locations_office_address_line2' => 'Birmingham B3 2AA',
        'locations_office_country' => 'United Kingdom',
        'locations_office_phone_link' => '+441212858490',
        'locations_office_phone_display' => '0121 285 8490',
        'locations_office_email' => 'hello@aimpro.co.uk',
        'locations_office_cta_text' => 'Contact Birmingham Office',
        
        // Services
        'locations_services_title' => 'Services Available',
        'locations_services_list' => "SEO Services\nPPC Management\nWeb Development\nMarketing Automation\nStrategy Consulting",
        
        // Service Areas
        'locations_areas_title' => 'Service Areas',
        'locations_areas_subtitle' => 'While our head office is in Birmingham, we proudly serve clients across the UK with our comprehensive digital marketing services.',
        
        // Area 1 - West Midlands
        'locations_area1_title' => 'West Midlands',
        'locations_area1_cities' => "Birmingham\nCoventry\nWolverhampton\nWalsall\nSolihull",
        
        // Area 2 - Greater London
        'locations_area2_title' => 'Greater London',
        'locations_area2_cities' => "Central London\nCroydon\nGreenwich\nBromley\nKingston",
        
        // Area 3 - Manchester Area
        'locations_area3_title' => 'Manchester Area',
        'locations_area3_cities' => "Manchester\nSalford\nStockport\nOldham\nBolton",
        
        // Area 4 - Nationwide
        'locations_area4_title' => 'Nationwide',
        'locations_area4_cities' => "Leeds\nLiverpool\nBristol\nNottingham\nSheffield",
        
        // Remote Services
        'locations_remote_title' => 'Remote Digital Marketing Services',
        'locations_remote_description' => 'No matter where you\'re located in the UK, our expert team delivers exceptional digital marketing results through our proven remote collaboration process.',
        'locations_remote_cta_text' => 'Start Your Project',
        
        // Remote Features
        'locations_feature1_title' => 'Virtual Consultations',
        'locations_feature1_description' => 'Face-to-face strategy sessions via video call',
        'locations_feature2_title' => 'Real-time Reporting',
        'locations_feature2_description' => 'Live dashboards and monthly performance reports',
        'locations_feature3_title' => 'Dedicated Support',
        'locations_feature3_description' => 'Direct access to your account manager',
        
        // Contact CTA
        'locations_cta_title' => 'Ready to Grow Your Business?',
        'locations_cta_description' => 'Contact our Birmingham team or schedule a remote consultation to discover how we can help you dominate your market.',
        'locations_cta_button1_text' => 'Get Started Today',
        'locations_cta_button2_text' => 'Call: 0121 285 8490',
    );
}

/**
 * Get list of locations page fields for the aimpro_get_field function
 */
function aimpro_get_locations_fields() {
    return array_keys(aimpro_get_locations_default_values());
}

/**
 * Add meta boxes for locations page
 */
function aimpro_add_locations_meta_boxes() {
    $post_id = isset($_GET['post']) ? intval($_GET['post']) : 0;
    
    if ($post_id) {
        $template = get_page_template_slug($post_id);
        if ($template === 'page-locations.php') {
            add_meta_box(
                'locations_hero_meta',
                'Hero Section',
                'aimpro_locations_hero_meta_callback',
                'page',
                'normal',
                'high'
            );
            
            add_meta_box(
                'locations_office_meta',
                'Office Details',
                'aimpro_locations_office_meta_callback',
                'page',
                'normal',
                'high'
            );
            
            add_meta_box(
                'locations_areas_meta',
                'Service Areas',
                'aimpro_locations_areas_meta_callback',
                'page',
                'normal',
                'high'
            );
            
            add_meta_box(
                'locations_remote_meta',
                'Remote Services',
                'aimpro_locations_remote_meta_callback',
                'page',
                'normal',
                'high'
            );
            
            add_meta_box(
                'locations_cta_meta',
                'Contact CTA',
                'aimpro_locations_cta_meta_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'aimpro_add_locations_meta_boxes');

/**
 * Hero Section Meta Box Callback
 */
function aimpro_locations_hero_meta_callback($post) {
    wp_nonce_field('aimpro_locations_meta_nonce', 'aimpro_locations_meta_nonce');
    $defaults = aimpro_get_locations_default_values();
    ?>
    <table class="form-table">
        <tr>
            <th><label for="locations_hero_title">Title</label></th>
            <td><input type="text" id="locations_hero_title" name="locations_hero_title" value="<?php echo esc_attr(aimpro_get_field('locations_hero_title', $defaults['locations_hero_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_hero_subtitle">Subtitle</label></th>
            <td><textarea id="locations_hero_subtitle" name="locations_hero_subtitle" rows="3" class="large-text"><?php echo esc_textarea(aimpro_get_field('locations_hero_subtitle', $defaults['locations_hero_subtitle'])); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * Office Details Meta Box Callback
 */
function aimpro_locations_office_meta_callback($post) {
    $defaults = aimpro_get_locations_default_values();
    ?>
    <table class="form-table">
        <tr>
            <th><label for="locations_office_badge">Office Badge</label></th>
            <td><input type="text" id="locations_office_badge" name="locations_office_badge" value="<?php echo esc_attr(aimpro_get_field('locations_office_badge', $defaults['locations_office_badge'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_office_city">City</label></th>
            <td><input type="text" id="locations_office_city" name="locations_office_city" value="<?php echo esc_attr(aimpro_get_field('locations_office_city', $defaults['locations_office_city'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_office_address_line1">Address Line 1</label></th>
            <td><input type="text" id="locations_office_address_line1" name="locations_office_address_line1" value="<?php echo esc_attr(aimpro_get_field('locations_office_address_line1', $defaults['locations_office_address_line1'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_office_address_line2">Address Line 2</label></th>
            <td><input type="text" id="locations_office_address_line2" name="locations_office_address_line2" value="<?php echo esc_attr(aimpro_get_field('locations_office_address_line2', $defaults['locations_office_address_line2'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_office_country">Country</label></th>
            <td><input type="text" id="locations_office_country" name="locations_office_country" value="<?php echo esc_attr(aimpro_get_field('locations_office_country', $defaults['locations_office_country'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_office_phone_display">Phone (Display)</label></th>
            <td><input type="text" id="locations_office_phone_display" name="locations_office_phone_display" value="<?php echo esc_attr(aimpro_get_field('locations_office_phone_display', $defaults['locations_office_phone_display'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_office_phone_link">Phone (Link)</label></th>
            <td><input type="text" id="locations_office_phone_link" name="locations_office_phone_link" value="<?php echo esc_attr(aimpro_get_field('locations_office_phone_link', $defaults['locations_office_phone_link'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_office_email">Email</label></th>
            <td><input type="email" id="locations_office_email" name="locations_office_email" value="<?php echo esc_attr(aimpro_get_field('locations_office_email', $defaults['locations_office_email'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_services_title">Services Title</label></th>
            <td><input type="text" id="locations_services_title" name="locations_services_title" value="<?php echo esc_attr(aimpro_get_field('locations_services_title', $defaults['locations_services_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_services_list">Services List</label></th>
            <td><textarea id="locations_services_list" name="locations_services_list" rows="5" class="large-text" placeholder="One service per line"><?php echo esc_textarea(aimpro_get_field('locations_services_list', $defaults['locations_services_list'])); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="locations_office_cta_text">CTA Button Text</label></th>
            <td><input type="text" id="locations_office_cta_text" name="locations_office_cta_text" value="<?php echo esc_attr(aimpro_get_field('locations_office_cta_text', $defaults['locations_office_cta_text'])); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Service Areas Meta Box Callback
 */
function aimpro_locations_areas_meta_callback($post) {
    $defaults = aimpro_get_locations_default_values();
    ?>
    <table class="form-table">
        <tr>
            <th><label for="locations_areas_title">Section Title</label></th>
            <td><input type="text" id="locations_areas_title" name="locations_areas_title" value="<?php echo esc_attr(aimpro_get_field('locations_areas_title', $defaults['locations_areas_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_areas_subtitle">Section Subtitle</label></th>
            <td><textarea id="locations_areas_subtitle" name="locations_areas_subtitle" rows="3" class="large-text"><?php echo esc_textarea(aimpro_get_field('locations_areas_subtitle', $defaults['locations_areas_subtitle'])); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="locations_area1_title">Area 1 Title</label></th>
            <td><input type="text" id="locations_area1_title" name="locations_area1_title" value="<?php echo esc_attr(aimpro_get_field('locations_area1_title', $defaults['locations_area1_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_area1_cities">Area 1 Cities</label></th>
            <td><textarea id="locations_area1_cities" name="locations_area1_cities" rows="3" class="large-text" placeholder="One city per line"><?php echo esc_textarea(aimpro_get_field('locations_area1_cities', $defaults['locations_area1_cities'])); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="locations_area2_title">Area 2 Title</label></th>
            <td><input type="text" id="locations_area2_title" name="locations_area2_title" value="<?php echo esc_attr(aimpro_get_field('locations_area2_title', $defaults['locations_area2_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_area2_cities">Area 2 Cities</label></th>
            <td><textarea id="locations_area2_cities" name="locations_area2_cities" rows="3" class="large-text" placeholder="One city per line"><?php echo esc_textarea(aimpro_get_field('locations_area2_cities', $defaults['locations_area2_cities'])); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="locations_area3_title">Area 3 Title</label></th>
            <td><input type="text" id="locations_area3_title" name="locations_area3_title" value="<?php echo esc_attr(aimpro_get_field('locations_area3_title', $defaults['locations_area3_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_area3_cities">Area 3 Cities</label></th>
            <td><textarea id="locations_area3_cities" name="locations_area3_cities" rows="3" class="large-text" placeholder="One city per line"><?php echo esc_textarea(aimpro_get_field('locations_area3_cities', $defaults['locations_area3_cities'])); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="locations_area4_title">Area 4 Title</label></th>
            <td><input type="text" id="locations_area4_title" name="locations_area4_title" value="<?php echo esc_attr(aimpro_get_field('locations_area4_title', $defaults['locations_area4_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_area4_cities">Area 4 Cities</label></th>
            <td><textarea id="locations_area4_cities" name="locations_area4_cities" rows="3" class="large-text" placeholder="One city per line"><?php echo esc_textarea(aimpro_get_field('locations_area4_cities', $defaults['locations_area4_cities'])); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * Remote Services Meta Box Callback
 */
function aimpro_locations_remote_meta_callback($post) {
    $defaults = aimpro_get_locations_default_values();
    ?>
    <table class="form-table">
        <tr>
            <th><label for="locations_remote_title">Section Title</label></th>
            <td><input type="text" id="locations_remote_title" name="locations_remote_title" value="<?php echo esc_attr(aimpro_get_field('locations_remote_title', $defaults['locations_remote_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_remote_description">Description</label></th>
            <td><textarea id="locations_remote_description" name="locations_remote_description" rows="3" class="large-text"><?php echo esc_textarea(aimpro_get_field('locations_remote_description', $defaults['locations_remote_description'])); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="locations_feature1_title">Feature 1 Title</label></th>
            <td><input type="text" id="locations_feature1_title" name="locations_feature1_title" value="<?php echo esc_attr(aimpro_get_field('locations_feature1_title', $defaults['locations_feature1_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_feature1_description">Feature 1 Description</label></th>
            <td><input type="text" id="locations_feature1_description" name="locations_feature1_description" value="<?php echo esc_attr(aimpro_get_field('locations_feature1_description', $defaults['locations_feature1_description'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_feature2_title">Feature 2 Title</label></th>
            <td><input type="text" id="locations_feature2_title" name="locations_feature2_title" value="<?php echo esc_attr(aimpro_get_field('locations_feature2_title', $defaults['locations_feature2_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_feature2_description">Feature 2 Description</label></th>
            <td><input type="text" id="locations_feature2_description" name="locations_feature2_description" value="<?php echo esc_attr(aimpro_get_field('locations_feature2_description', $defaults['locations_feature2_description'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_feature3_title">Feature 3 Title</label></th>
            <td><input type="text" id="locations_feature3_title" name="locations_feature3_title" value="<?php echo esc_attr(aimpro_get_field('locations_feature3_title', $defaults['locations_feature3_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_feature3_description">Feature 3 Description</label></th>
            <td><input type="text" id="locations_feature3_description" name="locations_feature3_description" value="<?php echo esc_attr(aimpro_get_field('locations_feature3_description', $defaults['locations_feature3_description'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_remote_cta_text">CTA Button Text</label></th>
            <td><input type="text" id="locations_remote_cta_text" name="locations_remote_cta_text" value="<?php echo esc_attr(aimpro_get_field('locations_remote_cta_text', $defaults['locations_remote_cta_text'])); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Contact CTA Meta Box Callback
 */
function aimpro_locations_cta_meta_callback($post) {
    $defaults = aimpro_get_locations_default_values();
    ?>
    <table class="form-table">
        <tr>
            <th><label for="locations_cta_title">CTA Title</label></th>
            <td><input type="text" id="locations_cta_title" name="locations_cta_title" value="<?php echo esc_attr(aimpro_get_field('locations_cta_title', $defaults['locations_cta_title'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_cta_description">CTA Description</label></th>
            <td><textarea id="locations_cta_description" name="locations_cta_description" rows="3" class="large-text"><?php echo esc_textarea(aimpro_get_field('locations_cta_description', $defaults['locations_cta_description'])); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="locations_cta_button1_text">Button 1 Text</label></th>
            <td><input type="text" id="locations_cta_button1_text" name="locations_cta_button1_text" value="<?php echo esc_attr(aimpro_get_field('locations_cta_button1_text', $defaults['locations_cta_button1_text'])); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="locations_cta_button2_text">Button 2 Text</label></th>
            <td><input type="text" id="locations_cta_button2_text" name="locations_cta_button2_text" value="<?php echo esc_attr(aimpro_get_field('locations_cta_button2_text', $defaults['locations_cta_button2_text'])); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Save locations meta fields
 */
function aimpro_save_locations_meta_fields($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['aimpro_locations_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_locations_meta_nonce'], 'aimpro_locations_meta_nonce')) {
        return $post_id;
    }

    // Check if user has permissions to save data
    if (!current_user_can('edit_page', $post_id)) {
        return $post_id;
    }

    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    $fields = aimpro_get_locations_fields();
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = sanitize_textarea_field($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        }
    }

    return $post_id;
}
add_action('save_post', 'aimpro_save_locations_meta_fields');
