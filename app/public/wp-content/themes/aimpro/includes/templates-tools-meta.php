<?php
// Templates & Tools Page Meta Fields

function add_templates_tools_meta_boxes() {
    global $post;
    
    // Only add to pages with the templates-tools template
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        
        // Only register this meta box for the templates-tools page
        if ($page_template === 'page-templates-tools.php') {
            add_meta_box(
                'templates_tools_meta_box',
                'Templates & Tools Page Content',
                'templates_tools_meta_box_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'add_templates_tools_meta_boxes');

function templates_tools_meta_box_callback($post) {
    // Only show on templates-tools page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-templates-tools.php') {
        echo '<p>This meta box only appears when using the "Templates & Tools Page" template.</p>';
        return;
    }

    wp_nonce_field('templates_tools_meta_box', 'templates_tools_meta_box_nonce');    // Get existing values
    $header_title = get_post_meta($post->ID, '_templates_tools_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_templates_tools_header_subtitle', true);
    $intro_title = get_post_meta($post->ID, '_templates_tools_intro_title', true);
    $intro_content = get_post_meta($post->ID, '_templates_tools_intro_content', true);

    // Tool categories
    $categories = get_post_meta($post->ID, '_templates_tools_categories', true);
    if (empty($categories)) {
        $categories = array(
            array('slug' => 'all', 'name' => 'All Tools'),
            array('slug' => 'seo', 'name' => 'SEO'),
            array('slug' => 'ppc', 'name' => 'PPC'),
            array('slug' => 'content', 'name' => 'Content Marketing'),
            array('slug' => 'social', 'name' => 'Social Media'),
            array('slug' => 'analytics', 'name' => 'Analytics'),
            array('slug' => 'strategy', 'name' => 'Strategy')
        );
    }    // Tools/Resources
    $tools = get_post_meta($post->ID, '_templates_tools_items', true);
    if (empty($tools)) {
        $tools = array(
            array(
                'title' => 'SEO Audit Checklist',
                'description' => 'Comprehensive 50-point checklist to audit your website\'s SEO performance and identify optimisation opportunities.',
                'category' => 'seo',
                'type' => 'PDF Template',
                'downloads' => '2,540 downloads',
                'icon' => 'fas fa-clipboard-check',
                'file_url' => ''
            ),
            array(
                'title' => 'Keyword Research Template',
                'description' => 'Excel template for organising keyword research, tracking search volumes, competition, and content opportunities.',
                'category' => 'seo',
                'type' => 'Excel Template',
                'downloads' => '1,890 downloads',
                'icon' => 'fas fa-search',
                'file_url' => ''
            ),
            array(
                'title' => 'Google Ads Campaign Planner',
                'description' => 'Structured template for planning Google Ads campaigns, including budget allocation and keyword mapping.',
                'category' => 'ppc',
                'type' => 'Google Sheets',
                'downloads' => '1,670 downloads',
                'icon' => 'fab fa-google',
                'file_url' => ''
            ),
            array(
                'title' => 'Content Calendar Template',
                'description' => '12-month editorial calendar template for planning, organising, and tracking your content marketing efforts.',
                'category' => 'content',
                'type' => 'Excel Template',
                'downloads' => '4,120 downloads',
                'icon' => 'fas fa-calendar-alt',
                'file_url' => ''
            ),
            array(
                'title' => 'Blog Post optimisation Guide',
                'description' => 'Step-by-step checklist for optimising blog posts for SEO, readability, and conversion potential.',
                'category' => 'content',
                'type' => 'PDF Guide',
                'downloads' => '2,890 downloads',
                'icon' => 'fas fa-edit',
                'file_url' => ''
            ),
            array(
                'title' => 'Social Media Posting Schedule',
                'description' => 'Optimal posting times and frequency guide for all major social media platforms to maximise engagement.',
                'category' => 'social',
                'type' => 'PDF Guide',
                'downloads' => '3,450 downloads',
                'icon' => 'fas fa-share-alt',
                'file_url' => ''
            ),
            array(
                'title' => 'GA4 Setup Checklist',
                'description' => 'Complete checklist for setting up Google Analytics 4, including essential configurations and tracking setup.',
                'category' => 'analytics',
                'type' => 'PDF Checklist',
                'downloads' => '1,940 downloads',
                'icon' => 'fab fa-google',
                'file_url' => ''
            ),
            array(
                'title' => 'Marketing Dashboard Template',
                'description' => 'Google Data Studio template for creating comprehensive marketing performance dashboards with KPI tracking.',
                'category' => 'analytics',
                'type' => 'Data Studio Template',
                'downloads' => '980 downloads',
                'icon' => 'fas fa-chart-bar',
                'file_url' => ''
            ),
            array(
                'title' => 'Digital Marketing Strategy Template',
                'description' => 'Comprehensive framework for developing a complete digital marketing strategy, including goals, tactics, and KPIs.',
                'category' => 'strategy',
                'type' => 'PowerPoint Template',
                'downloads' => '2,160 downloads',
                'icon' => 'fas fa-bullseye',
                'file_url' => ''
            )
        );
    }    // Featured resources
    $featured_title = get_post_meta($post->ID, '_templates_tools_featured_title', true);
    $featured_resources = get_post_meta($post->ID, '_templates_tools_featured_resources', true);
    if (empty($featured_resources)) {
        $featured_resources = array(
            array(
                'title' => 'Complete SEO Audit Checklist',
                'description' => 'Our most comprehensive SEO audit checklist with 50+ optimisation points.',
                'downloads' => '2,540 downloads',
                'icon' => 'fas fa-clipboard-list',
                'file_url' => ''
            ),
            array(
                'title' => 'Content Calendar Template',
                'description' => '12-month content planning template used by 1000+ marketers.',
                'downloads' => '4,120 downloads',
                'icon' => 'fas fa-chart-bar',
                'file_url' => ''
            ),
            array(
                'title' => 'PPC Campaign Planner',
                'description' => 'Strategic planning template for Google Ads and Facebook campaigns.',
                'downloads' => '1,670 downloads',
                'icon' => 'fas fa-crosshairs',
                'file_url' => ''
            )
        );
    }

    // Newsletter/CTA section
    $cta_title = get_post_meta($post->ID, '_templates_tools_cta_title', true);
    $cta_content = get_post_meta($post->ID, '_templates_tools_cta_content', true);

    ?>
    <style>
        .templates-tools-meta {
            max-width: 100%;
        }
        .templates-tools-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .templates-tools-meta .form-table td {
            padding: 15px 10px;
        }
        .templates-tools-meta input[type="text"],
        .templates-tools-meta textarea {
            width: 100%;
            max-width: 600px;
        }
        .templates-tools-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .tools-repeater, .categories-repeater, .featured-repeater {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            background: #f9f9f9;
        }
        .tools-item, .category-item, .featured-item {
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
        .item-field input, .item-field textarea, .item-field select {
            width: 100%;
            max-width: 400px;
        }
        .section-divider {
            border-top: 2px solid #0073aa;
            margin: 30px 0 20px 0;
            padding-top: 20px;
        }
    </style>

    <div class="templates-tools-meta">
        <table class="form-table">
            <tr>
                <th><label for="templates_tools_header_title">Page Header Title</label></th>
                <td><input type="text" id="templates_tools_header_title" name="templates_tools_header_title" value="<?php echo esc_attr($header_title); ?>" placeholder="Templates & Tools" /></td>
            </tr>
            <tr>
                <th><label for="templates_tools_header_subtitle">Page Header Subtitle</label></th>
                <td><textarea id="templates_tools_header_subtitle" name="templates_tools_header_subtitle" placeholder="Free resources to accelerate your digital marketing success"><?php echo esc_textarea($header_subtitle); ?></textarea></td>
            </tr>
            <tr>
                <th><label for="templates_tools_intro_title">Introduction Title</label></th>
                <td><input type="text" id="templates_tools_intro_title" name="templates_tools_intro_title" value="<?php echo esc_attr($intro_title); ?>" placeholder="Professional-Grade Tools & Templates" /></td>
            </tr>
            <tr>
                <th><label for="templates_tools_intro_content">Introduction Content</label></th>
                <td><textarea id="templates_tools_intro_content" name="templates_tools_intro_content" placeholder="Access our curated collection..."><?php echo esc_textarea($intro_content); ?></textarea></td>
            </tr>
        </table>

        <div class="section-divider">
            <h3>Tool Categories</h3>
            <div class="categories-repeater">
                <div id="categories-container">
                    <?php foreach ($categories as $index => $category): ?>
                        <div class="category-item">
                            <button type="button" class="remove-item remove-category">Remove</button>
                            <div class="item-field">
                                <label>Category Slug:</label>
                                <input type="text" name="templates_tools_categories[<?php echo $index; ?>][slug]" value="<?php echo esc_attr($category['slug']); ?>" placeholder="seo" />
                            </div>
                            <div class="item-field">
                                <label>Category Name:</label>
                                <input type="text" name="templates_tools_categories[<?php echo $index; ?>][name]" value="<?php echo esc_attr($category['name']); ?>" placeholder="SEO" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-category">Add Category</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Tools & Resources</h3>
            <div class="tools-repeater">
                <div id="tools-container">
                    <?php foreach ($tools as $index => $tool): ?>
                        <div class="tools-item">
                            <button type="button" class="remove-item remove-tool">Remove</button>
                            <div class="item-field">
                                <label>Tool Title:</label>
                                <input type="text" name="templates_tools_items[<?php echo $index; ?>][title]" value="<?php echo esc_attr($tool['title']); ?>" placeholder="SEO Audit Checklist" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="templates_tools_items[<?php echo $index; ?>][description]" placeholder="Comprehensive 50-point checklist..."><?php echo esc_textarea($tool['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Category:</label>
                                <select name="templates_tools_items[<?php echo $index; ?>][category]">
                                    <option value="">Select Category</option>
                                    <?php foreach ($categories as $cat): ?>
                                        <option value="<?php echo esc_attr($cat['slug']); ?>" <?php selected($tool['category'], $cat['slug']); ?>><?php echo esc_html($cat['name']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="item-field">
                                <label>Tool Type:</label>
                                <input type="text" name="templates_tools_items[<?php echo $index; ?>][type]" value="<?php echo esc_attr($tool['type']); ?>" placeholder="PDF Template" />
                            </div>
                            <div class="item-field">
                                <label>Downloads Count:</label>
                                <input type="text" name="templates_tools_items[<?php echo $index; ?>][downloads]" value="<?php echo esc_attr($tool['downloads']); ?>" placeholder="2,540 downloads" />
                            </div>
                            <div class="item-field">
                                <label>Icon Class:</label>
                                <input type="text" name="templates_tools_items[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($tool['icon']); ?>" placeholder="fas fa-clipboard-check" />
                            </div>
                            <div class="item-field">
                                <label>Downloadable File:</label>
                                <input type="file" name="templates_tools_items_file_<?php echo $index; ?>" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip" />
                                <?php if (!empty($tool['file_url'])): ?>
                                    <p>Current file: <a href="<?php echo esc_url($tool['file_url']); ?>" target="_blank"><?php echo esc_html(basename($tool['file_url'])); ?></a></p>
                                    <input type="hidden" name="templates_tools_items[<?php echo $index; ?>][file_url]" value="<?php echo esc_attr($tool['file_url']); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-tool">Add Tool/Resource</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Featured Resources Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="templates_tools_featured_title">Featured Section Title</label></th>
                    <td><input type="text" id="templates_tools_featured_title" name="templates_tools_featured_title" value="<?php echo esc_attr($featured_title); ?>" placeholder="Most Popular Resources" /></td>
                </tr>
            </table>
            
            <div class="featured-repeater">
                <div id="featured-container">
                    <?php foreach ($featured_resources as $index => $featured): ?>
                        <div class="featured-item">
                            <button type="button" class="remove-item remove-featured">Remove</button>
                            <div class="item-field">
                                <label>Resource Title:</label>
                                <input type="text" name="templates_tools_featured_resources[<?php echo $index; ?>][title]" value="<?php echo esc_attr($featured['title']); ?>" placeholder="Complete SEO Audit Checklist" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="templates_tools_featured_resources[<?php echo $index; ?>][description]" placeholder="Our most comprehensive SEO audit checklist..."><?php echo esc_textarea($featured['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Download Count:</label>
                                <input type="text" name="templates_tools_featured_resources[<?php echo $index; ?>][downloads]" value="<?php echo esc_attr($featured['downloads']); ?>" placeholder="2,540 downloads" />
                            </div>
                            <div class="item-field">
                                <label>Icon Class:</label>
                                <input type="text" name="templates_tools_featured_resources[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($featured['icon']); ?>" placeholder="fas fa-clipboard-list" />
                            </div>
                            <div class="item-field">
                                <label>Downloadable File:</label>
                                <input type="file" name="templates_tools_featured_file_<?php echo $index; ?>" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip" />
                                <?php if (!empty($featured['file_url'])): ?>
                                    <p>Current file: <a href="<?php echo esc_url($featured['file_url']); ?>" target="_blank"><?php echo esc_html(basename($featured['file_url'])); ?></a></p>
                                    <input type="hidden" name="templates_tools_featured_resources[<?php echo $index; ?>][file_url]" value="<?php echo esc_attr($featured['file_url']); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-featured">Add Featured Resource</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Newsletter/CTA Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="templates_tools_cta_title">CTA Title</label></th>
                    <td><input type="text" id="templates_tools_cta_title" name="templates_tools_cta_title" value="<?php echo esc_attr($cta_title); ?>" placeholder="Get New Tools First" /></td>
                </tr>
                <tr>
                    <th><label for="templates_tools_cta_content">CTA Content</label></th>
                    <td><textarea id="templates_tools_cta_content" name="templates_tools_cta_content" placeholder="Be the first to access our latest templates..."><?php echo esc_textarea($cta_content); ?></textarea></td>
                </tr>
            </table>
        </div>
    </div>

    <script>
        jQuery(document).ready(function($) {
            // Add category
            $('.add-category').click(function() {
                var container = $('#categories-container');
                var index = container.find('.category-item').length;
                var html = '<div class="category-item">' +
                    '<button type="button" class="remove-item remove-category">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Category Slug:</label>' +
                        '<input type="text" name="templates_tools_categories[' + index + '][slug]" placeholder="seo" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Category Name:</label>' +
                        '<input type="text" name="templates_tools_categories[' + index + '][name]" placeholder="SEO" />' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Remove category
            $(document).on('click', '.remove-category', function() {
                $(this).closest('.category-item').remove();
            });

            // Add tool
            $('.add-tool').click(function() {
                var container = $('#tools-container');
                var index = container.find('.tools-item').length;
                var categoriesOptions = '';
                <?php foreach ($categories as $cat): ?>
                categoriesOptions += '<option value="<?php echo esc_js($cat['slug']); ?>"><?php echo esc_js($cat['name']); ?></option>';
                <?php endforeach; ?>
                
                var html = '<div class="tools-item">' +
                    '<button type="button" class="remove-item remove-tool">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Tool Title:</label>' +
                        '<input type="text" name="templates_tools_items[' + index + '][title]" placeholder="SEO Audit Checklist" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Description:</label>' +
                        '<textarea name="templates_tools_items[' + index + '][description]" placeholder="Comprehensive 50-point checklist..."></textarea>' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Category:</label>' +
                        '<select name="templates_tools_items[' + index + '][category]">' +
                            '<option value="">Select Category</option>' + categoriesOptions +
                        '</select>' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Tool Type:</label>' +
                        '<input type="text" name="templates_tools_items[' + index + '][type]" placeholder="PDF Template" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Downloads Count:</label>' +
                        '<input type="text" name="templates_tools_items[' + index + '][downloads]" placeholder="2,540 downloads" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Icon Class:</label>' +
                        '<input type="text" name="templates_tools_items[' + index + '][icon]" placeholder="fas fa-clipboard-check" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Downloadable File:</label>' +
                        '<input type="file" name="templates_tools_items_file_' + index + '" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip" />' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Remove tool
            $(document).on('click', '.remove-tool', function() {
                $(this).closest('.tools-item').remove();
            });

            // Add featured resource
            $('.add-featured').click(function() {
                var container = $('#featured-container');
                var index = container.find('.featured-item').length;
                var html = '<div class="featured-item">' +
                    '<button type="button" class="remove-item remove-featured">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Resource Title:</label>' +
                        '<input type="text" name="templates_tools_featured_resources[' + index + '][title]" placeholder="Complete SEO Audit Checklist" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Description:</label>' +
                        '<textarea name="templates_tools_featured_resources[' + index + '][description]" placeholder="Our most comprehensive SEO audit checklist..."></textarea>' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Download Count:</label>' +
                        '<input type="text" name="templates_tools_featured_resources[' + index + '][downloads]" placeholder="2,540 downloads" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Icon Class:</label>' +
                        '<input type="text" name="templates_tools_featured_resources[' + index + '][icon]" placeholder="fas fa-clipboard-list" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Downloadable File:</label>' +
                        '<input type="file" name="templates_tools_featured_file_' + index + '" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip" />' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Remove featured resource
            $(document).on('click', '.remove-featured', function() {
                $(this).closest('.featured-item').remove();
            });
        });
    </script>
    <?php
}

function save_templates_tools_meta($post_id) {
    if (!isset($_POST['templates_tools_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['templates_tools_meta_box_nonce'], 'templates_tools_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Only save on templates-tools page template
    $page_template = get_page_template_slug($post_id);
    if ($page_template !== 'page-templates-tools.php') {
        return;
    }

    // Save basic fields
    $fields = array(
        'templates_tools_header_title',
        'templates_tools_header_subtitle',
        'templates_tools_intro_title',
        'templates_tools_intro_content',
        'templates_tools_featured_title',
        'templates_tools_cta_title',
        'templates_tools_cta_content'
    );

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_textarea_field($_POST[$field]));
        }
    }

    // Save categories
    if (isset($_POST['templates_tools_categories'])) {
        $categories = array();
        foreach ($_POST['templates_tools_categories'] as $category) {
            if (!empty($category['slug']) && !empty($category['name'])) {
                $categories[] = array(
                    'slug' => sanitize_text_field($category['slug']),
                    'name' => sanitize_text_field($category['name'])
                );
            }
        }
        update_post_meta($post_id, '_templates_tools_categories', $categories);
    }

    // Save tools/resources with file uploads
    if (isset($_POST['templates_tools_items'])) {
        $tools = array();
        foreach ($_POST['templates_tools_items'] as $index => $tool) {
            if (!empty($tool['title'])) {
                $tool_data = array(
                    'title' => sanitize_text_field($tool['title']),
                    'description' => sanitize_textarea_field($tool['description']),
                    'category' => sanitize_text_field($tool['category']),
                    'type' => sanitize_text_field($tool['type']),
                    'downloads' => sanitize_text_field($tool['downloads']),
                    'icon' => sanitize_text_field($tool['icon']),
                    'file_url' => isset($tool['file_url']) ? esc_url_raw($tool['file_url']) : ''
                );

                // Handle file upload
                $file_key = 'templates_tools_items_file_' . $index;
                if (!empty($_FILES[$file_key]['name'])) {
                    $uploaded_file = wp_handle_upload($_FILES[$file_key], array('test_form' => false));
                    if (!isset($uploaded_file['error']) && isset($uploaded_file['url'])) {
                        $tool_data['file_url'] = $uploaded_file['url'];
                    }
                }

                $tools[] = $tool_data;
            }
        }
        update_post_meta($post_id, '_templates_tools_items', $tools);
    }

    // Save featured resources with file uploads
    if (isset($_POST['templates_tools_featured_resources'])) {
        $featured = array();
        foreach ($_POST['templates_tools_featured_resources'] as $index => $resource) {
            if (!empty($resource['title'])) {
                $resource_data = array(
                    'title' => sanitize_text_field($resource['title']),
                    'description' => sanitize_textarea_field($resource['description']),
                    'downloads' => sanitize_text_field($resource['downloads']),
                    'icon' => sanitize_text_field($resource['icon']),
                    'file_url' => isset($resource['file_url']) ? esc_url_raw($resource['file_url']) : ''
                );

                // Handle file upload
                $file_key = 'templates_tools_featured_file_' . $index;
                if (!empty($_FILES[$file_key]['name'])) {
                    $uploaded_file = wp_handle_upload($_FILES[$file_key], array('test_form' => false));
                    if (!isset($uploaded_file['error']) && isset($uploaded_file['url'])) {
                        $resource_data['file_url'] = $uploaded_file['url'];
                    }
                }

                $featured[] = $resource_data;
            }
        }
        update_post_meta($post_id, '_templates_tools_featured_resources', $featured);
    }
}
add_action('save_post', 'save_templates_tools_meta');
