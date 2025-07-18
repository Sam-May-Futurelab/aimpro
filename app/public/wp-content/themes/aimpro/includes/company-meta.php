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
    $company_overview_desc2 = get_post_meta($post->ID, 'company_overview_desc2', true) ?: 'We specialise in comprehensive digital marketing solutions that drive real business growth. From strategic planning to execution, we\'re dedicated to helping our clients achieve their goals through cutting-edge digital marketing strategies.';
    $company_overview_image = get_post_meta($post->ID, 'company_overview_image', true) ?: '';
    $company_history_heading = get_post_meta($post->ID, 'company_history_heading', true) ?: 'Our Journey';
    $company_timeline_2020_title = get_post_meta($post->ID, 'company_timeline_2020_title', true) ?: 'Company Founded';
    $company_timeline_2020_desc = get_post_meta($post->ID, 'company_timeline_2020_desc', true) ?: 'Aimpro Digital was established with a vision to revolutionize digital marketing for small and medium businesses.';
    $company_timeline_2021_title = get_post_meta($post->ID, 'company_timeline_2021_title', true) ?: 'First 100 Clients';
    $company_timeline_2021_desc = get_post_meta($post->ID, 'company_timeline_2021_desc', true) ?: 'Reached our first major milestone by successfully serving 100 clients across various industries.';    $company_timeline_2022_title = get_post_meta($post->ID, 'company_timeline_2022_title', true) ?: 'Team Expansion';
    $company_timeline_2022_desc = get_post_meta($post->ID, 'company_timeline_2022_desc', true) ?: 'Expanded our team to 25+ specialists in SEO, PPC, content marketing, and web development.';
    $company_timeline_2023_title = get_post_meta($post->ID, 'company_timeline_2023_title', true) ?: 'Industry Recognition';
    $company_timeline_2023_desc = get_post_meta($post->ID, 'company_timeline_2023_desc', true) ?: 'Received multiple industry awards for innovation and client satisfaction in digital marketing.';
    $company_timeline_2024_title = get_post_meta($post->ID, 'company_timeline_2024_title', true) ?: 'Global Expansion';
    $company_timeline_2024_desc = get_post_meta($post->ID, 'company_timeline_2024_desc', true) ?: 'Expanded our services globally, now serving clients across North America, Europe, and Asia.';
    
    // Foundation section fields
    $company_foundation_heading = get_post_meta($post->ID, 'company_foundation_heading', true) ?: 'Our Foundation';
    $company_mission_title = get_post_meta($post->ID, 'company_mission_title', true) ?: 'Our Mission';
    $company_mission_desc = get_post_meta($post->ID, 'company_mission_desc', true) ?: 'To empower businesses with innovative digital marketing strategies that drive sustainable growth and measurable results in an ever-evolving digital landscape.';
    $company_vision_title = get_post_meta($post->ID, 'company_vision_title', true) ?: 'Our Vision';
    $company_vision_desc = get_post_meta($post->ID, 'company_vision_desc', true) ?: 'To become the world\'s most trusted digital marketing partner, known for delivering exceptional results and fostering long-term client relationships built on trust and transparency.';
    $company_values_title = get_post_meta($post->ID, 'company_values_title', true) ?: 'Our Values';
      // Values list
    $company_values_list = get_post_meta($post->ID, 'company_values_list', true) ?: 'Integrity: We operate with honesty and transparency in all our dealings
Innovation: We continuously evolve and adapt to stay ahead of industry trends
Excellence: We strive for the highest quality in everything we do
Partnership: We treat our clients as partners in their success
Results: We are committed to delivering measurable outcomes';
    
    // Stats section
    $company_stats_heading = get_post_meta($post->ID, 'company_stats_heading', true) ?: 'Our Impact by the Numbers';
    $company_stats = array(
        'stat1' => get_post_meta($post->ID, 'company_stat1', true) ?: '500+|Clients Served|Businesses we\'ve helped grow',
        'stat2' => get_post_meta($post->ID, 'company_stat2', true) ?: '$50M+|Revenue Generated|For our clients collectively',
        'stat3' => get_post_meta($post->ID, 'company_stat3', true) ?: '250%|Average ROI|Return on marketing investment',
        'stat4' => get_post_meta($post->ID, 'company_stat4', true) ?: '99%|Client Retention|Long-term partnerships',
        'stat5' => get_post_meta($post->ID, 'company_stat5', true) ?: '30+|Team Members|Digital marketing experts',
        'stat6' => get_post_meta($post->ID, 'company_stat6', true) ?: '24/7|Support|Always here when you need us'
    );
    
    // CTA section
    $company_cta_heading = get_post_meta($post->ID, 'company_cta_heading', true) ?: 'Ready to Partner with Us?';
    $company_cta_desc = get_post_meta($post->ID, 'company_cta_desc', true) ?: 'Let\'s discuss how Aimpro Digital can help accelerate your business growth';
    $company_cta_button1_text = get_post_meta($post->ID, 'company_cta_button1_text', true) ?: 'Contact Us Today';
    $company_cta_button1_url = get_post_meta($post->ID, 'company_cta_button1_url', true) ?: '/contact';
    $company_cta_button2_text = get_post_meta($post->ID, 'company_cta_button2_text', true) ?: 'Meet Our Team';
    $company_cta_button2_url = get_post_meta($post->ID, 'company_cta_button2_url', true) ?: '/team';
    ?>
    <div class="aimpro-company-meta">
        <h4>Header Section</h4>
        <table class="form-table">
            <tr><th><label for="company_header_title">Title</label></th><td><?php wp_editor($company_header_title, 'company_header_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_header_subtitle">Subtitle</label></th><td><?php wp_editor($company_header_subtitle, 'company_header_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?></td></tr>
        </table>
        <h4>Overview Section</h4>
        <table class="form-table">
            <tr><th><label for="company_overview_heading">Heading</label></th><td><?php wp_editor($company_overview_heading, 'company_overview_heading', array('textarea_rows' => 3, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_overview_desc1">Description 1</label></th><td><?php wp_editor($company_overview_desc1, 'company_overview_desc1', array('textarea_rows' => 8, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_overview_desc2">Description 2</label></th><td><?php wp_editor($company_overview_desc2, 'company_overview_desc2', array('textarea_rows' => 8, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_overview_image">Image URL</label></th><td><input type="text" id="company_overview_image" name="company_overview_image" value="<?php echo esc_attr($company_overview_image); ?>" /></td></tr>
        </table>
        <h4>History Section</h4>
        <table class="form-table">
            <tr><th><label for="company_history_heading">Section Heading</label></th><td><?php wp_editor($company_history_heading, 'company_history_heading', array('textarea_rows' => 3, 'media_buttons' => false)); ?></td></tr>
            <tr><th colspan="2"><strong>Timeline</strong></th></tr>
            <tr><th>2020 Title</th><td><?php wp_editor($company_timeline_2020_title, 'company_timeline_2020_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th>2020 Description</th><td><?php wp_editor($company_timeline_2020_desc, 'company_timeline_2020_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?></td></tr>
            <tr><th>2021 Title</th><td><?php wp_editor($company_timeline_2021_title, 'company_timeline_2021_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th>2021 Description</th><td><?php wp_editor($company_timeline_2021_desc, 'company_timeline_2021_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?></td></tr>
            <tr><th>2022 Title</th><td><?php wp_editor($company_timeline_2022_title, 'company_timeline_2022_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th>2022 Description</th><td><?php wp_editor($company_timeline_2022_desc, 'company_timeline_2022_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?></td></tr>
            <tr><th>2023 Title</th><td><?php wp_editor($company_timeline_2023_title, 'company_timeline_2023_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th>2023 Description</th><td><?php wp_editor($company_timeline_2023_desc, 'company_timeline_2023_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?></td></tr>
            <tr><th>2024 Title</th><td><?php wp_editor($company_timeline_2024_title, 'company_timeline_2024_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th>2024 Description</th><td><?php wp_editor($company_timeline_2024_desc, 'company_timeline_2024_desc', array('textarea_rows' => 4, 'media_buttons' => false)); ?></td></tr>
        </table>
        
        <h4>Foundation Section</h4>
        <table class="form-table">
            <tr><th><label for="company_foundation_heading">Section Heading</label></th><td><?php wp_editor($company_foundation_heading, 'company_foundation_heading', array('textarea_rows' => 3, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_mission_title">Mission Title</label></th><td><?php wp_editor($company_mission_title, 'company_mission_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_mission_desc">Mission Description</label></th><td><?php wp_editor($company_mission_desc, 'company_mission_desc', array('textarea_rows' => 5, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_vision_title">Vision Title</label></th><td><?php wp_editor($company_vision_title, 'company_vision_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_vision_desc">Vision Description</label></th><td><?php wp_editor($company_vision_desc, 'company_vision_desc', array('textarea_rows' => 5, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_values_title">Values Title</label></th><td><?php wp_editor($company_values_title, 'company_values_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_values_list">Values List (One per line, format: "Title: Description")</label></th><td><?php wp_editor($company_values_list, 'company_values_list', array('textarea_rows' => 8, 'media_buttons' => false)); ?></td></tr>
        </table>
          <h4>Stats Section</h4>
        <table class="form-table">
            <tr><th><label for="company_stats_heading">Section Heading</label></th><td><?php wp_editor($company_stats_heading, 'company_stats_heading', array('textarea_rows' => 3, 'media_buttons' => false)); ?></td></tr>
            <tr><th colspan="2"><strong>Stats (Format: Number|Label|Description)</strong></th></tr>
            <?php foreach ($company_stats as $key => $value): 
                $parts = explode('|', $value);
                $number = isset($parts[0]) ? $parts[0] : '';
                $label = isset($parts[1]) ? $parts[1] : '';
                $desc = isset($parts[2]) ? $parts[2] : '';
            ?>
            <tr><th><?php echo ucfirst(str_replace('stat', 'Stat ', $key)); ?></th><td><input type="text" name="company_<?php echo $key; ?>" value="<?php echo esc_attr($value); ?>" placeholder="500+|Clients Served|Businesses we've helped grow" /></td></tr>
            <?php endforeach; ?>
        </table>
        
        <h4>CTA Section</h4>
        <table class="form-table">
            <tr><th><label for="company_cta_heading">CTA Heading</label></th><td><?php wp_editor($company_cta_heading, 'company_cta_heading', array('textarea_rows' => 3, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_cta_desc">CTA Description</label></th><td><?php wp_editor($company_cta_desc, 'company_cta_desc', array('textarea_rows' => 5, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_cta_button1_text">Button 1 Text</label></th><td><?php wp_editor($company_cta_button1_text, 'company_cta_button1_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_cta_button1_url">Button 1 URL</label></th><td><input type="text" id="company_cta_button1_url" name="company_cta_button1_url" value="<?php echo esc_attr($company_cta_button1_url); ?>" /></td></tr>
            <tr><th><label for="company_cta_button2_text">Button 2 Text</label></th><td><?php wp_editor($company_cta_button2_text, 'company_cta_button2_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?></td></tr>
            <tr><th><label for="company_cta_button2_url">Button 2 URL</label></th><td><input type="text" id="company_cta_button2_url" name="company_cta_button2_url" value="<?php echo esc_attr($company_cta_button2_url); ?>" /></td></tr>
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

    // Rich text fields
    $rich_text_fields = array(
        'company_header_title', 'company_header_subtitle',
        'company_overview_heading', 'company_overview_desc1', 'company_overview_desc2',
        'company_history_heading',
        'company_timeline_2020_title', 'company_timeline_2020_desc',
        'company_timeline_2021_title', 'company_timeline_2021_desc',
        'company_timeline_2022_title', 'company_timeline_2022_desc',
        'company_timeline_2023_title', 'company_timeline_2023_desc',
        'company_timeline_2024_title', 'company_timeline_2024_desc',
        'company_foundation_heading', 'company_mission_title', 'company_mission_desc',
        'company_vision_title', 'company_vision_desc', 'company_values_title', 'company_values_list',
        'company_stats_heading',
        'company_cta_heading', 'company_cta_desc', 'company_cta_button1_text', 'company_cta_button2_text'
    );

    // URL fields
    $url_fields = array(
        'company_overview_image', 'company_cta_button1_url', 'company_cta_button2_url'
    );

    // Stats fields (keep as text)
    $text_fields = array(
        'company_stat1', 'company_stat2', 'company_stat3', 'company_stat4', 'company_stat5', 'company_stat6'
    );

    // Save rich text fields
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, wp_kses_post($_POST[$field]));
        }
    }

    // Save URL fields
    foreach ($url_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, esc_url_raw($_POST[$field]));
        }
    }

    // Save text fields
    foreach ($text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
