<?php
/**
 * About Page Meta Fields
 * Adds custom meta box for About Page template with editable content fields
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add meta box for About Page Settings
 */
add_action('add_meta_boxes', 'aimpro_add_about_meta_box');
function aimpro_add_about_meta_box() {
    // Only add to pages using the About Page template or with 'about' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-about.php' || $page_slug === 'about') {
        add_meta_box(
            'aimpro_about_settings',
            'About Page Settings',
            'aimpro_about_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

/**
 * About Page Meta Box Callback
 */
function aimpro_about_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('aimpro_about_meta_nonce', 'aimpro_about_meta_nonce');
    
    // Check if this is the about page template
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-about.php' && $page_slug !== 'about') {
        echo '<p><strong>Note:</strong> These settings will only appear when this page uses the "About Page" template or has the slug "about".</p>';
        echo '<p>Current template: ' . ($page_template ?: 'Default') . '</p>';
        echo '<p>Current slug: ' . ($page_slug ?: 'Not set yet') . '</p>';
        return;
    }

    // Get current values from post meta with defaults
    $about_hero_badge = get_post_meta($post->ID, 'about_hero_badge', true) ?: 'About Us';
    $about_hero_heading = get_post_meta($post->ID, 'about_hero_heading', true) ?: 'About Aimpro Digital';
    $about_hero_subtitle = get_post_meta($post->ID, 'about_hero_subtitle', true) ?: 'Your trusted partner in digital marketing excellence';
    
    $about_overview_heading = get_post_meta($post->ID, 'about_overview_heading', true) ?: 'Empowering Brands with Data-Driven Growth';
    $about_overview_description = get_post_meta($post->ID, 'about_overview_description', true) ?: 'Welcome to Aimpro Digital, where strategy, creativity, and technology converge to drive exceptional results. We\'re a team of passionate digital experts dedicated to helping UK businesses achieve their full potential. From lead generation to marketing automation, we build powerful, data-backed solutions that fuel your brand\'s success.';
    
    $about_video_heading = get_post_meta($post->ID, 'about_video_heading', true) ?: 'Watch Our Story';
    $about_video_description = get_post_meta($post->ID, 'about_video_description', true) ?: 'Discover how we help businesses transform their digital presence';
    $about_video_url = get_post_meta($post->ID, 'about_video_url', true) ?: '';
    $about_video_poster = get_post_meta($post->ID, 'about_video_poster', true) ?: '';
    
    $about_values_heading = get_post_meta($post->ID, 'about_values_heading', true) ?: 'Experiences Fueled by<br>Data and Dedication';
    $about_values_subtitle = get_post_meta($post->ID, 'about_values_subtitle', true) ?: 'At Aimpro Digital, we\'re more than a digital marketing agency.<br>We\'re a team of strategists, creatives, and tech enthusiasts<br>committed to making a meaningful impact for our clients.';
    
    // Stats
    $about_stat_1_number = get_post_meta($post->ID, 'about_stat_1_number', true) ?: '25';
    $about_stat_1_label = get_post_meta($post->ID, 'about_stat_1_label', true) ?: 'Years of Experience';
    $about_stat_2_number = get_post_meta($post->ID, 'about_stat_2_number', true) ?: '98';
    $about_stat_2_label = get_post_meta($post->ID, 'about_stat_2_label', true) ?: '% Increase in Client Leads';
    $about_stat_3_number = get_post_meta($post->ID, 'about_stat_3_number', true) ?: '15';
    $about_stat_3_label = get_post_meta($post->ID, 'about_stat_3_label', true) ?: '+ Industries Transformed';
    $about_stat_4_number = get_post_meta($post->ID, 'about_stat_4_number', true) ?: '199';
    $about_stat_4_label = get_post_meta($post->ID, 'about_stat_4_label', true) ?: '% Increase in Conversion Rates';
    
    // Values
    $about_value_1_heading = get_post_meta($post->ID, 'about_value_1_heading', true) ?: 'Innovative Solutions';
    $about_value_1_description = get_post_meta($post->ID, 'about_value_1_description', true) ?: 'Our approach goes beyond the ordinary. We infuse creativity and innovation into every strategy, crafting unique solutions tailored to your brand\'s needs. By blending fresh ideas with strategic insights, we create campaigns that truly connect with your audience.';
    $about_value_2_heading = get_post_meta($post->ID, 'about_value_2_heading', true) ?: 'Data-Driven Strategies';
    $about_value_2_description = get_post_meta($post->ID, 'about_value_2_description', true) ?: 'We believe in the power of data. Every decision we make is backed by in-depth analytics, ensuring that each campaign is optimised to deliver maximum results and ROI. With data at the core, your marketing efforts are not only efficient but also highly effective.';
    $about_value_3_heading = get_post_meta($post->ID, 'about_value_3_heading', true) ?: 'Proven Track Record';
    $about_value_3_description = get_post_meta($post->ID, 'about_value_3_description', true) ?: 'Our results speak for themselves. Across diverse industries, we\'ve consistently delivered growth, enhanced visibility, and high-quality leads, proving our ability to drive real impact for our clients.';
    $about_value_4_heading = get_post_meta($post->ID, 'about_value_4_heading', true) ?: 'Collaborative Partnership';
    $about_value_4_description = get_post_meta($post->ID, 'about_value_4_description', true) ?: 'We\'re more than an agency—we\'re an extension of your team. Through open communication and a collaborative approach, we work closely with you to exceed expectations and achieve your goals together.';
    $about_value_5_heading = get_post_meta($post->ID, 'about_value_5_heading', true) ?: 'Exceptional Customer Service';
    $about_value_5_description = get_post_meta($post->ID, 'about_value_5_description', true) ?: 'Client satisfaction is our top priority. From strategy through to execution, our dedicated team provides support at every step, ensuring a smooth and seamless experience tailored to your needs.';
    $about_value_6_heading = get_post_meta($post->ID, 'about_value_6_heading', true) ?: 'Forward-Thinking Approach';
    $about_value_6_description = get_post_meta($post->ID, 'about_value_6_description', true) ?: 'In an ever-changing digital landscape, we keep your brand one step ahead. Our forward-thinking approach enables us to adapt quickly to trends, ensuring your brand stays competitive and relevant in the market.';
    
    // CTA
    $about_cta_heading = get_post_meta($post->ID, 'about_cta_heading', true) ?: 'Let\'s Connect!';
    $about_cta_description = get_post_meta($post->ID, 'about_cta_description', true) ?: 'Ready to transform your digital presence? Get in touch with our team today.';
    $about_cta_button_1_text = get_post_meta($post->ID, 'about_cta_button_1_text', true) ?: 'Get Started Today';
    $about_cta_button_1_url = get_post_meta($post->ID, 'about_cta_button_1_url', true) ?: '/contact';
    $about_cta_button_2_text = get_post_meta($post->ID, 'about_cta_button_2_text', true) ?: 'Call Us Now';
    $about_cta_button_2_url = get_post_meta($post->ID, 'about_cta_button_2_url', true) ?: 'tel:01212858490';
    
    ?>
    <style>
    .aimpro-about-meta .form-table th {
        width: 200px;
        font-weight: 600;
    }
    .aimpro-about-meta .form-table td {
        padding: 15px 10px;
    }
    .aimpro-about-meta input[type="text"],
    .aimpro-about-meta input[type="url"],
    .aimpro-about-meta textarea {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .aimpro-about-meta textarea {
        min-height: 80px;
        resize: vertical;
    }    .aimpro-about-meta .description {
        font-style: italic;
        color: #666;
        margin-top: 5px;
    }
    .aimpro-about-section {
        margin-bottom: 30px;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 5px;
    }    .aimpro-about-section h4 {
        margin: 0 0 15px 0;
        padding: 0;
        color: #333;
        border-bottom: 2px solid #0073aa;
        padding-bottom: 10px;
    }
    </style>
    
    <div class="aimpro-about-meta">
        <p><strong>Edit the content for your About page below:</strong></p>
        
        <!-- Hero Section -->
        <div class="aimpro-about-section">
            <h4>🎯 Hero Section</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="about_hero_badge">Hero Badge</label>
                    </th>
                    <td>
                        <input type="text" id="about_hero_badge" name="about_hero_badge" value="<?php echo esc_attr($about_hero_badge); ?>" />
                        <p class="description">Small text above the main heading (e.g., "About Us").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_hero_heading">Hero Heading</label>
                    </th>
                    <td>
                        <input type="text" id="about_hero_heading" name="about_hero_heading" value="<?php echo esc_attr($about_hero_heading); ?>" />
                        <p class="description">Main page heading.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_hero_subtitle">Hero Subtitle</label>
                    </th>
                    <td>
                        <textarea id="about_hero_subtitle" name="about_hero_subtitle" rows="2"><?php echo esc_textarea($about_hero_subtitle); ?></textarea>
                        <p class="description">Descriptive text shown below the main heading.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Company Overview -->
        <div class="aimpro-about-section">
            <h4>🏢 Company Overview</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="about_overview_heading">Overview Heading</label>
                    </th>
                    <td>
                        <input type="text" id="about_overview_heading" name="about_overview_heading" value="<?php echo esc_attr($about_overview_heading); ?>" />
                        <p class="description">Heading for the company overview section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_overview_description">Overview Description</label>
                    </th>
                    <td>
                        <textarea id="about_overview_description" name="about_overview_description" rows="4"><?php echo esc_textarea($about_overview_description); ?></textarea>
                        <p class="description">Detailed description of your company and mission.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Video Section -->
        <div class="aimpro-about-section">
            <h4>🎥 Video Section</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="about_video_heading">Video Heading</label>
                    </th>
                    <td>
                        <input type="text" id="about_video_heading" name="about_video_heading" value="<?php echo esc_attr($about_video_heading); ?>" />
                        <p class="description">Heading above the video (optional).</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_video_description">Video Description</label>
                    </th>
                    <td>
                        <textarea id="about_video_description" name="about_video_description" rows="2"><?php echo esc_textarea($about_video_description); ?></textarea>
                        <p class="description">Description text below video heading (optional).</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_video_url">Video URL</label>
                    </th>
                    <td>
                        <input type="url" id="about_video_url" name="about_video_url" value="<?php echo esc_attr($about_video_url); ?>" />
                        <p class="description">YouTube, Vimeo, or direct video file URL. Leave empty to hide video section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_video_poster">Video Poster Image</label>
                    </th>
                    <td>
                        <input type="url" id="about_video_poster" name="about_video_poster" value="<?php echo esc_attr($about_video_poster); ?>" />
                        <p class="description">URL to poster/thumbnail image (optional).</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Values/Stats Section -->
        <div class="aimpro-about-section">
            <h4>📊 Values & Stats Section</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="about_values_heading">Values Heading</label>
                    </th>
                    <td>
                        <textarea id="about_values_heading" name="about_values_heading" rows="2"><?php echo esc_textarea($about_values_heading); ?></textarea>
                        <p class="description">Main heading for values section. HTML allowed for line breaks.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_values_subtitle">Values Subtitle</label>
                    </th>
                    <td>
                        <textarea id="about_values_subtitle" name="about_values_subtitle" rows="3"><?php echo esc_textarea($about_values_subtitle); ?></textarea>
                        <p class="description">Subtitle text. HTML allowed for line breaks.</p>
                    </td>
                </tr>
            </table>
            
            <!-- Stats Fields -->
            <h5 style="margin: 20px 0 10px 0;">📈 Statistics</h5>
            <table class="form-table">
                <tr>
                    <th scope="row">Stat 1</th>
                    <td>
                        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
                            <input type="text" name="about_stat_1_number" value="<?php echo esc_attr($about_stat_1_number); ?>" placeholder="Number" style="width: 100px;" />
                            <input type="text" name="about_stat_1_label" value="<?php echo esc_attr($about_stat_1_label); ?>" placeholder="Label" style="flex: 1;" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Stat 2</th>
                    <td>
                        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
                            <input type="text" name="about_stat_2_number" value="<?php echo esc_attr($about_stat_2_number); ?>" placeholder="Number" style="width: 100px;" />
                            <input type="text" name="about_stat_2_label" value="<?php echo esc_attr($about_stat_2_label); ?>" placeholder="Label" style="flex: 1;" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Stat 3</th>
                    <td>
                        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
                            <input type="text" name="about_stat_3_number" value="<?php echo esc_attr($about_stat_3_number); ?>" placeholder="Number" style="width: 100px;" />
                            <input type="text" name="about_stat_3_label" value="<?php echo esc_attr($about_stat_3_label); ?>" placeholder="Label" style="flex: 1;" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Stat 4</th>
                    <td>
                        <div style="display: flex; gap: 10px;">
                            <input type="text" name="about_stat_4_number" value="<?php echo esc_attr($about_stat_4_number); ?>" placeholder="Number" style="width: 100px;" />
                            <input type="text" name="about_stat_4_label" value="<?php echo esc_attr($about_stat_4_label); ?>" placeholder="Label" style="flex: 1;" />
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Values Grid -->
        <div class="aimpro-about-section">
            <h4>💎 Company Values (6 Values)</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">Value 1</th>
                    <td>
                        <input type="text" name="about_value_1_heading" value="<?php echo esc_attr($about_value_1_heading); ?>" placeholder="Value Heading" style="width: 100%; margin-bottom: 5px;" />
                        <textarea name="about_value_1_description" rows="3" placeholder="Value Description" style="width: 100%;"><?php echo esc_textarea($about_value_1_description); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Value 2</th>
                    <td>
                        <input type="text" name="about_value_2_heading" value="<?php echo esc_attr($about_value_2_heading); ?>" placeholder="Value Heading" style="width: 100%; margin-bottom: 5px;" />
                        <textarea name="about_value_2_description" rows="3" placeholder="Value Description" style="width: 100%;"><?php echo esc_textarea($about_value_2_description); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Value 3</th>
                    <td>
                        <input type="text" name="about_value_3_heading" value="<?php echo esc_attr($about_value_3_heading); ?>" placeholder="Value Heading" style="width: 100%; margin-bottom: 5px;" />
                        <textarea name="about_value_3_description" rows="3" placeholder="Value Description" style="width: 100%;"><?php echo esc_textarea($about_value_3_description); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Value 4</th>
                    <td>
                        <input type="text" name="about_value_4_heading" value="<?php echo esc_attr($about_value_4_heading); ?>" placeholder="Value Heading" style="width: 100%; margin-bottom: 5px;" />
                        <textarea name="about_value_4_description" rows="3" placeholder="Value Description" style="width: 100%;"><?php echo esc_textarea($about_value_4_description); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Value 5</th>
                    <td>
                        <input type="text" name="about_value_5_heading" value="<?php echo esc_attr($about_value_5_heading); ?>" placeholder="Value Heading" style="width: 100%; margin-bottom: 5px;" />
                        <textarea name="about_value_5_description" rows="3" placeholder="Value Description" style="width: 100%;"><?php echo esc_textarea($about_value_5_description); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Value 6</th>
                    <td>
                        <input type="text" name="about_value_6_heading" value="<?php echo esc_attr($about_value_6_heading); ?>" placeholder="Value Heading" style="width: 100%; margin-bottom: 5px;" />
                        <textarea name="about_value_6_description" rows="3" placeholder="Value Description" style="width: 100%;"><?php echo esc_textarea($about_value_6_description); ?></textarea>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- CTA Section -->
        <div class="aimpro-about-section">
            <h4>🎯 Call-to-Action Section</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="about_cta_heading">CTA Heading</label>
                    </th>
                    <td>
                        <input type="text" id="about_cta_heading" name="about_cta_heading" value="<?php echo esc_attr($about_cta_heading); ?>" />
                        <p class="description">Main heading for the call-to-action section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_cta_description">CTA Description</label>
                    </th>
                    <td>
                        <textarea id="about_cta_description" name="about_cta_description" rows="2"><?php echo esc_textarea($about_cta_description); ?></textarea>
                        <p class="description">Description text for the CTA section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Button 1</th>
                    <td>
                        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
                            <input type="text" name="about_cta_button_1_text" value="<?php echo esc_attr($about_cta_button_1_text); ?>" placeholder="Button Text" style="flex: 1;" />
                            <input type="text" name="about_cta_button_1_url" value="<?php echo esc_attr($about_cta_button_1_url); ?>" placeholder="Button URL" style="flex: 1;" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Button 2</th>
                    <td>
                        <div style="display: flex; gap: 10px;">
                            <input type="text" name="about_cta_button_2_text" value="<?php echo esc_attr($about_cta_button_2_text); ?>" placeholder="Button Text" style="flex: 1;" />
                            <input type="text" name="about_cta_button_2_url" value="<?php echo esc_attr($about_cta_button_2_url); ?>" placeholder="Button URL (tel: or mailto: allowed)" style="flex: 1;" />
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
        <div style="background: #e7f3ff; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <p><strong>💡 How to use these fields:</strong></p>
            <p>These values are accessed in your template using: <code>&lt;?php echo aimpro_get_field('field_name', 'Fallback Value'); ?&gt;</code></p>
            <p>After saving, the content will appear on your About page immediately.</p>
        </div>
    </div>
    <?php
}

/**
 * Save About Page Meta Fields
 */
add_action('save_post', 'aimpro_save_about_meta_fields');
function aimpro_save_about_meta_fields($post_id) {
    // Verify nonce
    if (!isset($_POST['aimpro_about_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_about_meta_nonce'], 'aimpro_about_meta_nonce')) {
        return;
    }
    
    // Check if user has permissions to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Only save for pages
    if (get_post_type($post_id) !== 'page') {
        return;
    }
    
    // Define the fields to save
    $about_fields = array(
        'about_hero_badge',
        'about_hero_heading',
        'about_hero_subtitle',
        'about_overview_heading',
        'about_overview_description',
        'about_video_heading',
        'about_video_description',
        'about_video_url',
        'about_video_poster',
        'about_values_heading',
        'about_values_subtitle',
        'about_stat_1_number',
        'about_stat_1_label',
        'about_stat_2_number',
        'about_stat_2_label',
        'about_stat_3_number',
        'about_stat_3_label',
        'about_stat_4_number',
        'about_stat_4_label',
        'about_value_1_heading',
        'about_value_1_description',
        'about_value_2_heading',
        'about_value_2_description',
        'about_value_3_heading',
        'about_value_3_description',
        'about_value_4_heading',
        'about_value_4_description',
        'about_value_5_heading',
        'about_value_5_description',
        'about_value_6_heading',
        'about_value_6_description',
        'about_cta_heading',
        'about_cta_description',
        'about_cta_button_1_text',
        'about_cta_button_1_url',
        'about_cta_button_2_text',
        'about_cta_button_2_url'
    );
    
    // Save each field
    foreach ($about_fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];
            
            // Sanitize based on field type
            if (in_array($field, array('about_overview_description', 'about_values_heading', 'about_values_subtitle', 'about_hero_subtitle', 'about_video_description', 'about_cta_description'))) {
                // Allow HTML for certain fields
                $value = wp_kses_post($value);
            } elseif (in_array($field, array('about_value_1_description', 'about_value_2_description', 'about_value_3_description', 'about_value_4_description', 'about_value_5_description', 'about_value_6_description'))) {
                // Value descriptions - allow basic HTML
                $value = wp_kses_post($value);
            } elseif (in_array($field, array('about_video_url', 'about_video_poster', 'about_cta_button_1_url', 'about_cta_button_2_url'))) {
                // URLs
                $value = esc_url_raw($value);
            } else {
                // Regular text fields
                $value = sanitize_text_field($value);
            }
            
            // Save to post meta
            update_post_meta($post_id, $field, $value);        }
    }
}
