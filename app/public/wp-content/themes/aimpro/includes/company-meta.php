<?php
/**
 * Company Page Meta Fields
 * Adds custom meta box for Company Page template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_company_meta_box');
function aimpro_add_company_meta_box() {
    // Only add to pages using the Company Page template or with 'company' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-company.php' || $page_slug === 'company') {
        add_meta_box(
            'aimpro_company_settings',
            'Company Page Settings',
            'aimpro_company_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_company_meta_box_callback($post) {
    wp_nonce_field('aimpro_company_meta_nonce', 'aimpro_company_meta_nonce');
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    if ($page_template !== 'page-company.php' && $page_slug !== 'company') {
        echo '<p><strong>Note:</strong> These settings will only appear when this page uses the "Company Page" template or has the slug "company".</p>';
        return;
    }
    // Get current values
    $company_header_title = get_post_meta($post->ID, 'company_header_title', true) ?: 'Our Company';
    $company_header_subtitle = get_post_meta($post->ID, 'company_header_subtitle', true) ?: 'The story behind Aimpro Digital';
    $company_overview_heading = get_post_meta($post->ID, 'company_overview_heading', true) ?: 'About Aimpro Digital';
    $company_overview_desc1 = get_post_meta($post->ID, 'company_overview_desc1', true) ?: 'Founded in 2020, Aimpro Digital has grown from a small startup to a leading digital marketing agency serving clients across the globe. Our passion for innovation and commitment to results has driven us to become a trusted partner for businesses of all sizes.';
    $company_overview_desc2 = get_post_meta($post->ID, 'company_overview_desc2', true) ?: 'We specialize in comprehensive digital marketing solutions that drive real business growth. From strategic planning to execution, we\'re dedicated to helping our clients achieve their goals through cutting-edge digital marketing strategies.';
    $company_overview_image = get_post_meta($post->ID, 'company_overview_image', true) ?: '';
    $company_history_heading = get_post_meta($post->ID, 'company_history_heading', true) ?: 'Our Journey';
    $company_timeline_2020_title = get_post_meta($post->ID, 'company_timeline_2020_title', true) ?: 'Company Founded';
    $company_timeline_2020_desc = get_post_meta($post->ID, 'company_timeline_2020_desc', true) ?: 'Aimpro Digital was established with a vision to revolutionize digital marketing for small and medium businesses.';
    $company_timeline_2021_title = get_post_meta($post->ID, 'company_timeline_2021_title', true) ?: 'First 100 Clients';
    $company_timeline_2021_desc = get_post_meta($post->ID, 'company_timeline_2021_desc', true) ?: 'Reached our first major milestone by successfully serving 100 clients across various industries.';
    $company_timeline_2022_title = get_post_meta($post->ID, 'company_timeline_2022_title', true) ?: 'Team Expansion';
    $company_timeline_2022_desc = get_post_meta($post->ID, 'company_timeline_2022_desc', true) ?: 'Expanded our team to 25+ specialists in SEO, PPC, content marketing, and web development.';
    ?>
    <div class="aimpro-company-meta">
        <h4>Header Section</h4>
        <table class="form-table">
            <tr><th><label for="company_header_title">Title</label></th><td><input type="text" id="company_header_title" name="company_header_title" value="<?php echo esc_attr($company_header_title); ?>" /></td></tr>
            <tr><th><label for="company_header_subtitle">Subtitle</label></th><td><input type="text" id="company_header_subtitle" name="company_header_subtitle" value="<?php echo esc_attr($company_header_subtitle); ?>" /></td></tr>
        </table>
        <h4>Overview Section</h4>
        <table class="form-table">
            <tr><th><label for="company_overview_heading">Heading</label></th><td><input type="text" id="company_overview_heading" name="company_overview_heading" value="<?php echo esc_attr($company_overview_heading); ?>" /></td></tr>
            <tr><th><label for="company_overview_desc1">Description 1</label></th><td><textarea id="company_overview_desc1" name="company_overview_desc1"><?php echo esc_textarea($company_overview_desc1); ?></textarea></td></tr>
            <tr><th><label for="company_overview_desc2">Description 2</label></th><td><textarea id="company_overview_desc2" name="company_overview_desc2"><?php echo esc_textarea($company_overview_desc2); ?></textarea></td></tr>
            <tr><th><label for="company_overview_image">Image URL</label></th><td><input type="text" id="company_overview_image" name="company_overview_image" value="<?php echo esc_attr($company_overview_image); ?>" /></td></tr>
        </table>
        <h4>History Section</h4>
        <table class="form-table">
            <tr><th><label for="company_history_heading">Section Heading</label></th><td><input type="text" id="company_history_heading" name="company_history_heading" value="<?php echo esc_attr($company_history_heading); ?>" /></td></tr>
            <tr><th colspan="2"><strong>Timeline</strong></th></tr>
            <tr><th>2020 Title</th><td><input type="text" name="company_timeline_2020_title" value="<?php echo esc_attr($company_timeline_2020_title); ?>" /></td></tr>
            <tr><th>2020 Description</th><td><textarea name="company_timeline_2020_desc"><?php echo esc_textarea($company_timeline_2020_desc); ?></textarea></td></tr>
            <tr><th>2021 Title</th><td><input type="text" name="company_timeline_2021_title" value="<?php echo esc_attr($company_timeline_2021_title); ?>" /></td></tr>
            <tr><th>2021 Description</th><td><textarea name="company_timeline_2021_desc"><?php echo esc_textarea($company_timeline_2021_desc); ?></textarea></td></tr>
            <tr><th>2022 Title</th><td><input type="text" name="company_timeline_2022_title" value="<?php echo esc_attr($company_timeline_2022_title); ?>" /></td></tr>
            <tr><th>2022 Description</th><td><textarea name="company_timeline_2022_desc"><?php echo esc_textarea($company_timeline_2022_desc); ?></textarea></td></tr>
        </table>
    </div>
    <?php
}

add_action('save_post', 'aimpro_save_company_meta_fields');
function aimpro_save_company_meta_fields($post_id) {
    if (!isset($_POST['aimpro_company_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_company_meta_nonce'], 'aimpro_company_meta_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (get_post_type($post_id) !== 'page') return;
    $fields = array(
        'company_header_title', 'company_header_subtitle',
        'company_overview_heading', 'company_overview_desc1', 'company_overview_desc2', 'company_overview_image',
        'company_history_heading',
        'company_timeline_2020_title', 'company_timeline_2020_desc',
        'company_timeline_2021_title', 'company_timeline_2021_desc',
        'company_timeline_2022_title', 'company_timeline_2022_desc'
    );
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];
            if (strpos($field, 'desc') !== false) {
                $value = wp_kses_post($value);
            } else {
                $value = sanitize_text_field($value);
            }
            update_post_meta($post_id, $field, $value);
        }
    }
}
