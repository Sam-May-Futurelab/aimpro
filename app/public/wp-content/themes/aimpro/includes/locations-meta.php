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
        'locations_hero_subtitle' => 'Serving businesses across the UK with digital marketing excellence from our strategically located offices and comprehensive remote services.',
        
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
        'locations_services_list' => '<strong>SEO Services</strong><br>PPC Management<br>Web Development<br>Marketing Automation<br>Strategy Consulting',
        
        // Service Areas
        'locations_areas_title' => 'Nationwide Service Coverage',
        'locations_areas_subtitle' => 'While based in Birmingham, our digital marketing expertise extends across the entire UK. We serve clients from London to Edinburgh, delivering consistent, high-quality results regardless of location.',
        
        // Area 1 - West Midlands
        'locations_area1_title' => '<strong>West Midlands</strong>',
        'locations_area1_cities' => 'Birmingham<br>Coventry<br>Wolverhampton<br>Walsall<br>Solihull',
        
        // Area 2 - Greater London
        'locations_area2_title' => '<strong>Greater London</strong>',
        'locations_area2_cities' => 'Central London<br>Croydon<br>Greenwich<br>Bromley<br>Kingston',
        
        // Area 3 - Manchester Area
        'locations_area3_title' => '<strong>Manchester Area</strong>',
        'locations_area3_cities' => 'Manchester<br>Salford<br>Stockport<br>Oldham<br>Bolton',
        
        // Area 4 - Nationwide
        'locations_area4_title' => '<strong>Nationwide</strong>',
        'locations_area4_cities' => 'Leeds<br>Liverpool<br>Bristol<br>Nottingham<br>Sheffield',
        
        // Remote Services
        'locations_remote_title' => '<strong>World-Class Digital Marketing</strong>, Anywhere',
        'locations_remote_description' => 'Distance doesn\'t limit excellence. Our remote collaboration capabilities ensure you receive the same premium service quality whether you\'re across the street or across the country. Advanced project management, regular video calls, and transparent reporting keep you connected every step of the way.',
        'locations_remote_cta_text' => 'Start Your Project',
        
        // Remote Features
        'locations_feature1_title' => '<strong>Virtual Consultations</strong>',
        'locations_feature1_description' => 'Face-to-face strategy sessions via secure video conferencing',
        'locations_feature2_title' => '<strong>Real-Time Reporting</strong>',
        'locations_feature2_description' => 'Live dashboards and instant performance updates',
        'locations_feature3_title' => '<strong>24/7 Support</strong>',
        'locations_feature3_description' => 'Dedicated support channels for immediate assistance',
        
        // Contact CTA
        'locations_cta_title' => '<strong>Ready to Start Your Digital Journey?</strong>',
        'locations_cta_description' => 'Contact our Birmingham team or schedule a remote consultation to discover how we can help you <em>dominate your market</em>.',
        'locations_cta_button1_text' => 'Get Free Consultation',
        'locations_cta_button2_text' => 'Call Now: 0121 285 8490',
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
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_hero_title', $defaults['locations_hero_title']), 'locations_hero_title', array(
                    'textarea_name' => 'locations_hero_title',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_hero_subtitle">Subtitle</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_hero_subtitle', $defaults['locations_hero_subtitle']), 'locations_hero_subtitle', array(
                    'textarea_name' => 'locations_hero_subtitle',
                    'media_buttons' => false,
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
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
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_services_title', $defaults['locations_services_title']), 'locations_services_title', array(
                    'textarea_name' => 'locations_services_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_services_list">Services List</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_services_list', $defaults['locations_services_list']), 'locations_services_list', array(
                    'textarea_name' => 'locations_services_list',
                    'media_buttons' => false,
                    'textarea_rows' => 5,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
                <p class="description">One service per line</p>
            </td>
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
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_areas_title', $defaults['locations_areas_title']), 'locations_areas_title', array(
                    'textarea_name' => 'locations_areas_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_areas_subtitle">Section Subtitle</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_areas_subtitle', $defaults['locations_areas_subtitle']), 'locations_areas_subtitle', array(
                    'textarea_name' => 'locations_areas_subtitle',
                    'media_buttons' => false,
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_area1_title">Area 1 Title</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_area1_title', $defaults['locations_area1_title']), 'locations_area1_title', array(
                    'textarea_name' => 'locations_area1_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_area1_cities">Area 1 Cities</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_area1_cities', $defaults['locations_area1_cities']), 'locations_area1_cities', array(
                    'textarea_name' => 'locations_area1_cities',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
                <p class="description">One city per line</p>
            </td>
        </tr>
        <tr>
            <th><label for="locations_area2_title">Area 2 Title</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_area2_title', $defaults['locations_area2_title']), 'locations_area2_title', array(
                    'textarea_name' => 'locations_area2_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_area2_cities">Area 2 Cities</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_area2_cities', $defaults['locations_area2_cities']), 'locations_area2_cities', array(
                    'textarea_name' => 'locations_area2_cities',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
                <p class="description">One city per line</p>
            </td>
        </tr>
        <tr>
            <th><label for="locations_area3_title">Area 3 Title</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_area3_title', $defaults['locations_area3_title']), 'locations_area3_title', array(
                    'textarea_name' => 'locations_area3_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_area3_cities">Area 3 Cities</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_area3_cities', $defaults['locations_area3_cities']), 'locations_area3_cities', array(
                    'textarea_name' => 'locations_area3_cities',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
                <p class="description">One city per line</p>
            </td>
        </tr>
        <tr>
            <th><label for="locations_area4_title">Area 4 Title</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_area4_title', $defaults['locations_area4_title']), 'locations_area4_title', array(
                    'textarea_name' => 'locations_area4_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_area4_cities">Area 4 Cities</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_area4_cities', $defaults['locations_area4_cities']), 'locations_area4_cities', array(
                    'textarea_name' => 'locations_area4_cities',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
                <p class="description">One city per line</p>
            </td>
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
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_remote_title', $defaults['locations_remote_title']), 'locations_remote_title', array(
                    'textarea_name' => 'locations_remote_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_remote_description">Description</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_remote_description', $defaults['locations_remote_description']), 'locations_remote_description', array(
                    'textarea_name' => 'locations_remote_description',
                    'media_buttons' => false,
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_feature1_title">Feature 1 Title</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_feature1_title', $defaults['locations_feature1_title']), 'locations_feature1_title', array(
                    'textarea_name' => 'locations_feature1_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_feature1_description">Feature 1 Description</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_feature1_description', $defaults['locations_feature1_description']), 'locations_feature1_description', array(
                    'textarea_name' => 'locations_feature1_description',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_feature2_title">Feature 2 Title</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_feature2_title', $defaults['locations_feature2_title']), 'locations_feature2_title', array(
                    'textarea_name' => 'locations_feature2_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_feature2_description">Feature 2 Description</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_feature2_description', $defaults['locations_feature2_description']), 'locations_feature2_description', array(
                    'textarea_name' => 'locations_feature2_description',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_feature3_title">Feature 3 Title</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_feature3_title', $defaults['locations_feature3_title']), 'locations_feature3_title', array(
                    'textarea_name' => 'locations_feature3_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_feature3_description">Feature 3 Description</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_feature3_description', $defaults['locations_feature3_description']), 'locations_feature3_description', array(
                    'textarea_name' => 'locations_feature3_description',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
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
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_cta_title', $defaults['locations_cta_title']), 'locations_cta_title', array(
                    'textarea_name' => 'locations_cta_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="locations_cta_description">CTA Description</label></th>
            <td>
                <?php
                wp_editor(aimpro_get_field('locations_cta_description', $defaults['locations_cta_description']), 'locations_cta_description', array(
                    'textarea_name' => 'locations_cta_description',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                ));
                ?>
            </td>
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

    // Define which fields are rich text (use wp_kses_post) vs regular text (use sanitize_textarea_field)
    $rich_text_fields = array(
        'locations_hero_title',
        'locations_hero_subtitle',
        'locations_services_title',
        'locations_services_list',
        'locations_areas_title',
        'locations_areas_subtitle',
        'locations_area1_title',
        'locations_area1_cities',
        'locations_area2_title',
        'locations_area2_cities',
        'locations_area3_title',
        'locations_area3_cities',
        'locations_area4_title',
        'locations_area4_cities',
        'locations_remote_title',
        'locations_remote_description',
        'locations_feature1_title',
        'locations_feature1_description',
        'locations_feature2_title',
        'locations_feature2_description',
        'locations_feature3_title',
        'locations_feature3_description',
        'locations_cta_title',
        'locations_cta_description'
    );

    $fields = aimpro_get_locations_fields();
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            if (in_array($field, $rich_text_fields)) {
                // Use wp_kses_post for rich text fields
                $value = wp_kses_post($_POST[$field]);
            } else {
                // Use sanitize_textarea_field for regular text fields
                $value = sanitize_textarea_field($_POST[$field]);
            }
            update_post_meta($post_id, $field, $value);
        }
    }

    return $post_id;
}
add_action('save_post', 'aimpro_save_locations_meta_fields');
