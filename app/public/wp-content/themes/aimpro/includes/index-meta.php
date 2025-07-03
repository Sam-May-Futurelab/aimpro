<?php
// Homepage Meta Fields

function add_index_meta_boxes() {
    global $post;
    if (empty($post)) return;
    
    // Only add to the homepage (front page)
    if (is_admin() && $post->ID == get_option('page_on_front')) {
        add_meta_box(
            'index_meta_box',
            'Homepage Content Editor',
            'index_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_index_meta_boxes');

function index_meta_box_callback($post) {
    wp_nonce_field('index_meta_box', 'index_meta_box_nonce');

    // Get existing values - Hero Section
    $hero_badge_text = get_post_meta($post->ID, '_hero_badge_text', true);
    if (empty($hero_badge_text)) {
        $hero_badge_text = 'Award-Winning Digital Agency';
    }
    
    $hero_title = get_post_meta($post->ID, '_hero_title', true);
    if (empty($hero_title)) {
        $hero_title = '<h1 class="hero-title">Scale Your Business With <span class="curly-underline">PRECISION</span> Digital <span class="highlight-word" style="colour: #f15a25 !important; -webkit-text-fill-colour: #f15a25 !important;">Marketing</span></h1>';
    }
    
    $hero_strapline_1 = get_post_meta($post->ID, '_hero_strapline_1', true);
    if (empty($hero_strapline_1)) {
        $hero_strapline_1 = 'No Fluff. Just Results.';
    }
    
    $hero_strapline_2 = get_post_meta($post->ID, '_hero_strapline_2', true);
    if (empty($hero_strapline_2)) {
        $hero_strapline_2 = 'Data-Driven Strategy. Measurable Results.';
    }
    
    $hero_strapline_3 = get_post_meta($post->ID, '_hero_strapline_3', true);
    if (empty($hero_strapline_3)) {
        $hero_strapline_3 = 'Grow Your Business With Precision Marketing.';
    }
    
    $hero_strapline_4 = get_post_meta($post->ID, '_hero_strapline_4', true);
    if (empty($hero_strapline_4)) {
        $hero_strapline_4 = 'Your High-ROI Digital Marketing Partner';
    }
    
    $hero_subtitle = get_post_meta($post->ID, '_hero_subtitle', true);
    if (empty($hero_subtitle)) {
        $hero_subtitle = 'Expert Lead Generation, SEO, PPC & Automation. Data-driven strategies that deliver <strong class="highlight-underline">MEASURABLE RESULTS</strong> and accelerate your <strong class="highlight-word">growth</strong>.';
    }
    
    $hero_primary_cta_text = get_post_meta($post->ID, '_hero_primary_cta_text', true);
    if (empty($hero_primary_cta_text)) {
        $hero_primary_cta_text = 'CLAIM YOUR FREE GROWTH STRATEGY';
    }
    
    $hero_primary_cta_url = get_post_meta($post->ID, '_hero_primary_cta_url', true);
    if (empty($hero_primary_cta_url)) {
        $hero_primary_cta_url = '#contact';
    }

    // Service Tags
    $service_tags = get_post_meta($post->ID, '_service_tags', true);
    if (empty($service_tags)) {
        $service_tags = array(
            array('text' => 'SEO', 'url' => '/seo-services'),
            array('text' => 'Google Ads', 'url' => '/google-ads'),
            array('text' => 'Social Media', 'url' => '/meta-ads'),
            array('text' => 'Website', 'url' => '/website-design'),
            array('text' => 'Ads', 'url' => '/retargeting-display'),
            array('text' => 'AI Automation', 'url' => '/ai-crm-setup'),
            array('text' => 'CRM', 'url' => '/ai-crm-setup'),
            array('text' => 'Email', 'url' => '/email-campaigns'),
        );
    }

    // Value Statement Section
    $value_statement_title = get_post_meta($post->ID, '_value_statement_title', true);
    if (empty($value_statement_title)) {
        $value_statement_title = 'A Results-Driven Digital Agency Obsessed With Your <span class="highlight curly-underline">SUCCESS</span>';
    }
    
    $value_statement_description = get_post_meta($post->ID, '_value_statement_description', true);
    if (empty($value_statement_description)) {
        $value_statement_description = 'We partner with ambitious businesses to transform their digital presence through intelligent strategies and performance-focused marketing. Our proven methodologies deliver quantifiable results that drive exponential growth and maximise your competitive advantage.';
    }
    
    $value_statement_cta_text = get_post_meta($post->ID, '_value_statement_cta_text', true);
    if (empty($value_statement_cta_text)) {
        $value_statement_cta_text = 'CLAIM YOUR FREE GROWTH AUDIT';
    }
    
    $value_statement_cta_url = get_post_meta($post->ID, '_value_statement_cta_url', true);
    if (empty($value_statement_cta_url)) {
        $value_statement_cta_url = '#contact';
    }

    // Stats Section
    $stat_1_number = get_post_meta($post->ID, '_stat_1_number', true);
    if (empty($stat_1_number)) {
        $stat_1_number = '25';
    }
    
    $stat_1_label = get_post_meta($post->ID, '_stat_1_label', true);
    if (empty($stat_1_label)) {
        $stat_1_label = 'Years of Experience';
    }
    
    $stat_2_number = get_post_meta($post->ID, '_stat_2_number', true);
    if (empty($stat_2_number)) {
        $stat_2_number = '98';
    }
    
    $stat_2_label = get_post_meta($post->ID, '_stat_2_label', true);
    if (empty($stat_2_label)) {
        $stat_2_label = 'Increase in Client Leads';
    }
    
    $stat_3_number = get_post_meta($post->ID, '_stat_3_number', true);
    if (empty($stat_3_number)) {
        $stat_3_number = '25';
    }
    
    $stat_3_label = get_post_meta($post->ID, '_stat_3_label', true);
    if (empty($stat_3_label)) {
        $stat_3_label = 'Industries Transformed';
    }
    
    $stat_4_number = get_post_meta($post->ID, '_stat_4_number', true);
    if (empty($stat_4_number)) {
        $stat_4_number = '199';
    }
    
    $stat_4_label = get_post_meta($post->ID, '_stat_4_label', true);
    if (empty($stat_4_label)) {
        $stat_4_label = 'Increase in Conversion Rates';
    }

    // Services Section
    $services_title = get_post_meta($post->ID, '_services_title', true);
    if (empty($services_title)) {
        $services_title = 'Premium Digital Marketing Solutions That <span class="highlight curly-underline">DELIVER</span>';
    }
    
    $services_subtitle = get_post_meta($post->ID, '_services_subtitle', true);
    if (empty($services_subtitle)) {
        $services_subtitle = 'Zero fluff. Pure performance. Our integrated marketing ecosystem works seamlessly to transform prospects into profits.';
    }

    ?>
    <style>
        .index-meta {
            max-width: 100%;
        }
        .index-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .index-meta .form-table td {
            padding: 15px 10px;
        }
        .index-meta input[type="text"],
        .index-meta textarea,
        .index-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .index-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .repeater-section {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            background: #f9f9f9;
        }
        .repeater-item {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px 0;
            background: white;
            position: relative;
        }
        .remove-item {
            background: #dc3232;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            float: right;
            margin-top: -5px;
        }
        .add-item {
            background: #0073aa;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            margin: 10px 0;
        }
        .item-field {
            margin: 10px 0;
        }
        .item-field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .item-field input, .item-field textarea {
            width: 100%;
            max-width: 400px;
        }
        .section-divider {
            border-top: 2px solid #0073aa;
            margin: 30px 0 20px 0;
            padding-top: 20px;
        }
        .wp-editor-container {
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }
        .index-meta .wp-editor-area {
            height: 150px;
        }
        .editor-container {
            min-height: 150px;
            margin-bottom: 10px;
        }
        .wp-editor-tools {
            margin-bottom: 5px;
        }
        .item-field {
            margin-bottom: 12px;
        }
        .inline-fields {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }
        .inline-fields .field-group {
            flex: 1;
        }
        .inline-fields .field-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .inline-fields .field-group input {
            width: 100%;
        }
    </style>

    <div class="index-meta">
        <table class="form-table">
            <!-- Hero Section -->
            <tr>
                <th colspan="2"><h2 class="section-divider">🎯 Hero Section</h2></th>
            </tr>
            <tr>
                <th><label for="hero_badge_text">Hero Badge Text</label></th>
                <td>
                    <input type="text" id="hero_badge_text" name="hero_badge_text" value="<?php echo esc_attr($hero_badge_text); ?>" />
                    <p class="description">Text shown in the hero badge (e.g., "Award-Winning Digital Agency")</p>
                </td>
            </tr>
            <tr>
                <th><label for="hero_title">Hero Title</label></th>
                <td>
                    <?php
                    $hero_title_settings = array(
                        'textarea_name' => 'hero_title',
                        'textarea_rows' => 3,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    wp_editor($hero_title, 'hero_title', $hero_title_settings);
                    ?>
                    <p class="description">Main hero title with HTML formatting. Use spans for styling.</p>
                </td>
            </tr>
            <tr>
                <th><label for="hero_straplines">Hero Straplines</label></th>
                <td>
                    <div class="inline-fields">
                        <div class="field-group">
                            <label>Strapline 1</label>
                            <input type="text" name="hero_strapline_1" value="<?php echo esc_attr($hero_strapline_1); ?>" />
                        </div>
                        <div class="field-group">
                            <label>Strapline 2</label>
                            <input type="text" name="hero_strapline_2" value="<?php echo esc_attr($hero_strapline_2); ?>" />
                        </div>
                    </div>
                    <div class="inline-fields">
                        <div class="field-group">
                            <label>Strapline 3</label>
                            <input type="text" name="hero_strapline_3" value="<?php echo esc_attr($hero_strapline_3); ?>" />
                        </div>
                        <div class="field-group">
                            <label>Strapline 4</label>
                            <input type="text" name="hero_strapline_4" value="<?php echo esc_attr($hero_strapline_4); ?>" />
                        </div>
                    </div>
                    <p class="description">Rotating text lines that appear below the title</p>
                </td>
            </tr>
            <tr>
                <th><label for="hero_subtitle">Hero Subtitle</label></th>
                <td>
                    <?php
                    $hero_subtitle_settings = array(
                        'textarea_name' => 'hero_subtitle',
                        'textarea_rows' => 4,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    wp_editor($hero_subtitle, 'hero_subtitle', $hero_subtitle_settings);
                    ?>
                    <p class="description">Hero subtitle with rich text formatting support</p>
                </td>
            </tr>
            <tr>
                <th><label for="hero_cta">Hero Call to Action</label></th>
                <td>
                    <div class="inline-fields">
                        <div class="field-group">
                            <label>Button Text</label>
                            <input type="text" name="hero_primary_cta_text" value="<?php echo esc_attr($hero_primary_cta_text); ?>" />
                        </div>
                        <div class="field-group">
                            <label>Button URL</label>
                            <input type="url" name="hero_primary_cta_url" value="<?php echo esc_attr($hero_primary_cta_url); ?>" />
                        </div>
                    </div>
                    <p class="description">Primary call-to-action button</p>
                </td>
            </tr>

            <!-- Service Tags Section -->
            <tr>
                <th colspan="2"><h2 class="section-divider">🏷️ Service Tags</h2></th>
            </tr>
            <tr>
                <th><label for="service_tags">Service Tags</label></th>
                <td>
                    <div class="repeater-section" id="service-tags-repeater">
                        <div id="service-tags-container">
                            <?php 
                            if (!empty($service_tags)) {
                                foreach ($service_tags as $index => $tag) {
                                    ?>
                                    <div class="repeater-item" data-index="<?php echo $index; ?>">
                                        <button type="button" class="remove-item" onclick="removeServiceTag(this)">Remove</button>
                                        <div class="inline-fields">
                                            <div class="field-group">
                                                <label>Tag Text</label>
                                                <input type="text" name="service_tags[<?php echo $index; ?>][text]" value="<?php echo esc_attr($tag['text']); ?>" />
                                            </div>
                                            <div class="field-group">
                                                <label>URL</label>
                                                <input type="text" name="service_tags[<?php echo $index; ?>][url]" value="<?php echo esc_attr($tag['url']); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <button type="button" class="add-item" onclick="addServiceTag()">Add Service Tag</button>
                    </div>
                    <p class="description">Service tags shown below the hero section</p>
                </td>
            </tr>

            <!-- Value Statement Section -->
            <tr>
                <th colspan="2"><h2 class="section-divider">💡 Value Statement</h2></th>
            </tr>
            <tr>
                <th><label for="value_statement_title">Value Statement Title</label></th>
                <td>
                    <?php
                    $value_title_settings = array(
                        'textarea_name' => 'value_statement_title',
                        'textarea_rows' => 3,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    wp_editor($value_statement_title, 'value_statement_title', $value_title_settings);
                    ?>
                    <p class="description">Title for the value statement section</p>
                </td>
            </tr>
            <tr>
                <th><label for="value_statement_description">Value Statement Description</label></th>
                <td>
                    <?php
                    $value_desc_settings = array(
                        'textarea_name' => 'value_statement_description',
                        'textarea_rows' => 5,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    wp_editor($value_statement_description, 'value_statement_description', $value_desc_settings);
                    ?>
                    <p class="description">Description text for the value statement</p>
                </td>
            </tr>
            <tr>
                <th><label for="value_statement_cta">Value Statement CTA</label></th>
                <td>
                    <div class="inline-fields">
                        <div class="field-group">
                            <label>Button Text</label>
                            <input type="text" name="value_statement_cta_text" value="<?php echo esc_attr($value_statement_cta_text); ?>" />
                        </div>
                        <div class="field-group">
                            <label>Button URL</label>
                            <input type="url" name="value_statement_cta_url" value="<?php echo esc_attr($value_statement_cta_url); ?>" />
                        </div>
                    </div>
                </td>
            </tr>

            <!-- Stats Section -->
            <tr>
                <th colspan="2"><h2 class="section-divider">📊 Statistics</h2></th>
            </tr>
            <tr>
                <th><label for="stats">Statistics</label></th>
                <td>
                    <div class="inline-fields">
                        <div class="field-group">
                            <label>Stat 1 Number</label>
                            <input type="text" name="stat_1_number" value="<?php echo esc_attr($stat_1_number); ?>" />
                            <label>Stat 1 Label</label>
                            <input type="text" name="stat_1_label" value="<?php echo esc_attr($stat_1_label); ?>" />
                        </div>
                        <div class="field-group">
                            <label>Stat 2 Number</label>
                            <input type="text" name="stat_2_number" value="<?php echo esc_attr($stat_2_number); ?>" />
                            <label>Stat 2 Label</label>
                            <input type="text" name="stat_2_label" value="<?php echo esc_attr($stat_2_label); ?>" />
                        </div>
                    </div>
                    <div class="inline-fields">
                        <div class="field-group">
                            <label>Stat 3 Number</label>
                            <input type="text" name="stat_3_number" value="<?php echo esc_attr($stat_3_number); ?>" />
                            <label>Stat 3 Label</label>
                            <input type="text" name="stat_3_label" value="<?php echo esc_attr($stat_3_label); ?>" />
                        </div>
                        <div class="field-group">
                            <label>Stat 4 Number</label>
                            <input type="text" name="stat_4_number" value="<?php echo esc_attr($stat_4_number); ?>" />
                            <label>Stat 4 Label</label>
                            <input type="text" name="stat_4_label" value="<?php echo esc_attr($stat_4_label); ?>" />
                        </div>
                    </div>
                    <p class="description">Statistics shown in the counter section</p>
                </td>
            </tr>

            <!-- Services Section -->
            <tr>
                <th colspan="2"><h2 class="section-divider">🚀 Services Section</h2></th>
            </tr>
            <tr>
                <th><label for="services_title">Services Title</label></th>
                <td>
                    <?php
                    $services_title_settings = array(
                        'textarea_name' => 'services_title',
                        'textarea_rows' => 3,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    wp_editor($services_title, 'services_title', $services_title_settings);
                    ?>
                    <p class="description">Title for the services section</p>
                </td>
            </tr>
            <tr>
                <th><label for="services_subtitle">Services Subtitle</label></th>
                <td>
                    <?php
                    $services_subtitle_settings = array(
                        'textarea_name' => 'services_subtitle',
                        'textarea_rows' => 3,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    wp_editor($services_subtitle, 'services_subtitle', $services_subtitle_settings);
                    ?>
                    <p class="description">Subtitle for the services section</p>
                </td>
            </tr>
        </table>
    </div>

    <script>
    let serviceTagIndex = <?php echo count($service_tags); ?>;

    function addServiceTag() {
        const container = document.getElementById('service-tags-container');
        const newItem = document.createElement('div');
        newItem.className = 'repeater-item';
        newItem.setAttribute('data-index', serviceTagIndex);
        
        newItem.innerHTML = `
            <button type="button" class="remove-item" onclick="removeServiceTag(this)">Remove</button>
            <div class="inline-fields">
                <div class="field-group">
                    <label>Tag Text</label>
                    <input type="text" name="service_tags[${serviceTagIndex}][text]" value="" />
                </div>
                <div class="field-group">
                    <label>URL</label>
                    <input type="text" name="service_tags[${serviceTagIndex}][url]" value="" />
                </div>
            </div>
        `;
        
        container.appendChild(newItem);
        serviceTagIndex++;
    }

    function removeServiceTag(button) {
        button.parentElement.remove();
    }
    </script>

    <?php
}

function save_index_meta_box_data($post_id) {
    if (!isset($_POST['index_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['index_meta_box_nonce'], 'index_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save all simple text fields
    $fields = array(
        'hero_badge_text' => '_hero_badge_text',
        'hero_title' => '_hero_title',
        'hero_strapline_1' => '_hero_strapline_1',
        'hero_strapline_2' => '_hero_strapline_2',
        'hero_strapline_3' => '_hero_strapline_3',
        'hero_strapline_4' => '_hero_strapline_4',
        'hero_subtitle' => '_hero_subtitle',
        'hero_primary_cta_text' => '_hero_primary_cta_text',
        'hero_primary_cta_url' => '_hero_primary_cta_url',
        'value_statement_title' => '_value_statement_title',
        'value_statement_description' => '_value_statement_description',
        'value_statement_cta_text' => '_value_statement_cta_text',
        'value_statement_cta_url' => '_value_statement_cta_url',
        'stat_1_number' => '_stat_1_number',
        'stat_1_label' => '_stat_1_label',
        'stat_2_number' => '_stat_2_number',
        'stat_2_label' => '_stat_2_label',
        'stat_3_number' => '_stat_3_number',
        'stat_3_label' => '_stat_3_label',
        'stat_4_number' => '_stat_4_number',
        'stat_4_label' => '_stat_4_label',
        'services_title' => '_services_title',
        'services_subtitle' => '_services_subtitle',
    );

    foreach ($fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, wp_kses_post($_POST[$field]));
        }
    }

    // Save service tags array
    if (isset($_POST['service_tags'])) {
        $service_tags = array();
        foreach ($_POST['service_tags'] as $tag) {
            if (!empty($tag['text'])) {
                $service_tags[] = array(
                    'text' => sanitize_text_field($tag['text']),
                    'url' => esc_url_raw($tag['url'])
                );
            }
        }
        update_post_meta($post_id, '_service_tags', $service_tags);
    }
}
add_action('save_post', 'save_index_meta_box_data');

?>
