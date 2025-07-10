<?php
/**
 * Sitemap Page Meta Box
 */

// Add meta box for Sitemap page
add_action('add_meta_boxes', 'sitemap_meta_boxes');
function sitemap_meta_boxes() {
    add_meta_box(
        'sitemap_meta',
        'Sitemap Content',
        'sitemap_meta_callback',
        'page',
        'normal',
        'high'
    );
}

// Meta box callback
function sitemap_meta_callback($post) {
    // Only show for pages using the Sitemap template
    $template = get_post_meta($post->ID, '_wp_page_template', true);
    if ($template !== 'page-sitemap.php') {
        echo '<p>This meta box is only available for pages using the "Sitemap" template.</p>';
        return;
    }

    wp_nonce_field('sitemap_meta_nonce', 'sitemap_meta_nonce');
    
    // Get existing values
    $header_title = get_post_meta($post->ID, '_sitemap_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_sitemap_header_subtitle', true);
    
    // Section titles
    $main_title = get_post_meta($post->ID, '_sitemap_main_title', true);
    $services_title = get_post_meta($post->ID, '_sitemap_services_title', true);
    $industries_title = get_post_meta($post->ID, '_sitemap_industries_title', true);
    $solutions_title = get_post_meta($post->ID, '_sitemap_solutions_title', true);
    $resources_title = get_post_meta($post->ID, '_sitemap_resources_title', true);
    $company_title = get_post_meta($post->ID, '_sitemap_company_title', true);
    $legal_title = get_post_meta($post->ID, '_sitemap_legal_title', true);
    
    // Section links
    $main_pages = get_post_meta($post->ID, '_sitemap_main_pages', true);
    $services = get_post_meta($post->ID, '_sitemap_services', true);
    $industries = get_post_meta($post->ID, '_sitemap_industries', true);
    $solutions = get_post_meta($post->ID, '_sitemap_solutions', true);
    $resources = get_post_meta($post->ID, '_sitemap_resources', true);
    $company_pages = get_post_meta($post->ID, '_sitemap_company_pages', true);
    $legal_pages = get_post_meta($post->ID, '_sitemap_legal_pages', true);
    
    // Bottom section
    $info_title = get_post_meta($post->ID, '_sitemap_info_title', true);
    $info_content = get_post_meta($post->ID, '_sitemap_info_content', true);
    $cta_text = get_post_meta($post->ID, '_sitemap_cta_text', true);
    $cta_url = get_post_meta($post->ID, '_sitemap_cta_url', true);
    ?>
    
    <style>
        .sitemap-meta-section { margin-bottom: 25px; padding-bottom: 20px; border-bottom: 1px solid #ddd; }
        .sitemap-meta-section:last-child { border-bottom: none; }
        .sitemap-meta-section h3 { color: #23282d; margin-bottom: 15px; font-size: 16px; }
        .sitemap-meta-field { margin-bottom: 15px; }
        .sitemap-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; }
        .sitemap-meta-field input[type="text"], .sitemap-meta-field input[type="url"] { width: 100%; }
        .sitemap-meta-field textarea { width: 100%; min-height: 120px; }
        .sitemap-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .sitemap-links-container { border: 1px solid #ddd; padding: 15px; border-radius: 4px; background: #f9f9f9; }
        .sitemap-link-pair { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; margin-bottom: 10px; }
        .sitemap-link-pair:last-child { margin-bottom: 0; }
        @media (max-width: 782px) { .sitemap-meta-grid, .sitemap-link-pair { grid-template-columns: 1fr; } }
        .description { font-style: italic; color: #666; margin-top: 5px; font-size: 12px; }
        .add-link-btn { background: #0073aa; color: white; border: none; padding: 8px 12px; border-radius: 3px; cursor: pointer; margin-top: 10px; }
        .remove-link-btn { background: #dc3232; color: white; border: none; padding: 4px 8px; border-radius: 3px; cursor: pointer; font-size: 12px; }
    </style>

    <div class="sitemap-meta">
        <!-- Header Section -->
        <div class="sitemap-meta-section">
            <h3>Page Header</h3>
            <div class="sitemap-meta-field">
                <label for="sitemap_header_title">Page Title</label>
                <input type="text" id="sitemap_header_title" name="_sitemap_header_title" 
                       value="<?php echo esc_attr($header_title); ?>" 
                       placeholder="Sitemap" />
            </div>
            <div class="sitemap-meta-field">
                <label for="sitemap_header_subtitle">Page Subtitle</label>
                <input type="text" id="sitemap_header_subtitle" name="_sitemap_header_subtitle" 
                       value="<?php echo esc_attr($header_subtitle); ?>" 
                       placeholder="Find all the pages and content on our website organized by section" />
            </div>
        </div>

        <!-- Section Titles -->
        <div class="sitemap-meta-section">
            <h3>Section Titles</h3>
            <div class="sitemap-meta-grid">
                <div class="sitemap-meta-field">
                    <label for="sitemap_main_title">Main Pages Section</label>
                    <input type="text" id="sitemap_main_title" name="_sitemap_main_title" 
                           value="<?php echo esc_attr($main_title); ?>" 
                           placeholder="Main Pages" />
                </div>
                <div class="sitemap-meta-field">
                    <label for="sitemap_services_title">Services Section</label>
                    <input type="text" id="sitemap_services_title" name="_sitemap_services_title" 
                           value="<?php echo esc_attr($services_title); ?>" 
                           placeholder="Our Services" />
                </div>
                <div class="sitemap-meta-field">
                    <label for="sitemap_industries_title">Industries Section</label>
                    <input type="text" id="sitemap_industries_title" name="_sitemap_industries_title" 
                           value="<?php echo esc_attr($industries_title); ?>" 
                           placeholder="Industries We Serve" />
                </div>
                <div class="sitemap-meta-field">
                    <label for="sitemap_solutions_title">Solutions Section</label>
                    <input type="text" id="sitemap_solutions_title" name="_sitemap_solutions_title" 
                           value="<?php echo esc_attr($solutions_title); ?>" 
                           placeholder="Solutions" />
                </div>
                <div class="sitemap-meta-field">
                    <label for="sitemap_resources_title">Resources Section</label>
                    <input type="text" id="sitemap_resources_title" name="_sitemap_resources_title" 
                           value="<?php echo esc_attr($resources_title); ?>" 
                           placeholder="Resources" />
                </div>
                <div class="sitemap-meta-field">
                    <label for="sitemap_company_title">Company Section</label>
                    <input type="text" id="sitemap_company_title" name="_sitemap_company_title" 
                           value="<?php echo esc_attr($company_title); ?>" 
                           placeholder="Company" />
                </div>
                <div class="sitemap-meta-field">
                    <label for="sitemap_legal_title">Legal Section</label>
                    <input type="text" id="sitemap_legal_title" name="_sitemap_legal_title" 
                           value="<?php echo esc_attr($legal_title); ?>" 
                           placeholder="Legal" />
                </div>
            </div>
        </div>

        <!-- Main Pages Links -->
        <div class="sitemap-meta-section">
            <h3>Main Pages Links</h3>
            <div class="sitemap-links-container">
                <div id="main-pages-container">
                    <?php 
                    if (!empty($main_pages) && is_array($main_pages)) {
                        foreach ($main_pages as $index => $page) {
                            echo '<div class="sitemap-link-pair">';
                            echo '<input type="text" name="_sitemap_main_pages[' . $index . '][title]" placeholder="Page Title" value="' . esc_attr($page['title']) . '" />';
                            echo '<input type="url" name="_sitemap_main_pages[' . $index . '][url]" placeholder="Page URL" value="' . esc_attr($page['url']) . '" />';
                            echo '<button type="button" class="remove-link-btn" onclick="removeLink(this)">Remove</button>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                <button type="button" class="add-link-btn" onclick="addMainPageLink()">Add Main Page</button>
                <p class="description">Add the main navigation pages of your website</p>
            </div>
        </div>

        <!-- Services Links -->
        <div class="sitemap-meta-section">
            <h3>Services Links</h3>
            <div class="sitemap-links-container">
                <div id="services-container">
                    <?php 
                    if (!empty($services) && is_array($services)) {
                        foreach ($services as $index => $service) {
                            echo '<div class="sitemap-link-pair">';
                            echo '<input type="text" name="_sitemap_services[' . $index . '][title]" placeholder="Service Title" value="' . esc_attr($service['title']) . '" />';
                            echo '<input type="url" name="_sitemap_services[' . $index . '][url]" placeholder="Service URL" value="' . esc_attr($service['url']) . '" />';
                            echo '<button type="button" class="remove-link-btn" onclick="removeLink(this)">Remove</button>';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                <button type="button" class="add-link-btn" onclick="addServiceLink()">Add Service</button>
                <p class="description">Add your digital marketing services</p>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="sitemap-meta-section">
            <h3>Bottom Section</h3>
            <div class="sitemap-meta-field">
                <label for="sitemap_info_title">Help Section Title</label>
                <input type="text" id="sitemap_info_title" name="_sitemap_info_title" 
                       value="<?php echo esc_attr($info_title); ?>" 
                       placeholder="Can't Find What You're Looking For?" />
            </div>
            <div class="sitemap-meta-field">
                <label for="sitemap_info_content">Help Section Content</label>
                <textarea id="sitemap_info_content" name="_sitemap_info_content" rows="3"><?php echo esc_textarea($info_content); ?></textarea>
            </div>
            <div class="sitemap-meta-grid">
                <div class="sitemap-meta-field">
                    <label for="sitemap_cta_text">Contact Button Text</label>
                    <input type="text" id="sitemap_cta_text" name="_sitemap_cta_text" 
                           value="<?php echo esc_attr($cta_text); ?>" 
                           placeholder="Contact Us" />
                </div>
                <div class="sitemap-meta-field">
                    <label for="sitemap_cta_url">Contact Button URL</label>
                    <input type="url" id="sitemap_cta_url" name="_sitemap_cta_url" 
                           value="<?php echo esc_attr($cta_url); ?>" 
                           placeholder="<?php echo home_url('/contact'); ?>" />
                </div>
            </div>
        </div>
    </div>

    <script>
    function addMainPageLink() {
        const container = document.getElementById('main-pages-container');
        const index = container.children.length;
        const div = document.createElement('div');
        div.className = 'sitemap-link-pair';
        div.innerHTML = `
            <input type="text" name="_sitemap_main_pages[${index}][title]" placeholder="Page Title" />
            <input type="url" name="_sitemap_main_pages[${index}][url]" placeholder="Page URL" />
            <button type="button" class="remove-link-btn" onclick="removeLink(this)">Remove</button>
        `;
        container.appendChild(div);
    }

    function addServiceLink() {
        const container = document.getElementById('services-container');
        const index = container.children.length;
        const div = document.createElement('div');
        div.className = 'sitemap-link-pair';
        div.innerHTML = `
            <input type="text" name="_sitemap_services[${index}][title]" placeholder="Service Title" />
            <input type="url" name="_sitemap_services[${index}][url]" placeholder="Service URL" />
            <button type="button" class="remove-link-btn" onclick="removeLink(this)">Remove</button>
        `;
        container.appendChild(div);
    }

    function removeLink(button) {
        button.parentElement.remove();
    }
    </script>
    <?php
}

// Save meta box data
add_action('save_post', 'save_sitemap_meta');
function save_sitemap_meta($post_id) {
    // Verify nonce
    if (!isset($_POST['sitemap_meta_nonce']) || !wp_verify_nonce($_POST['sitemap_meta_nonce'], 'sitemap_meta_nonce')) {
        return;
    }

    // Check if user can edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Don't save on autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Only save for pages using the Sitemap template
    $template = get_post_meta($post_id, '_wp_page_template', true);
    if ($template !== 'page-sitemap.php') {
        return;
    }

    // List of simple meta fields to save
    $simple_fields = array(
        '_sitemap_header_title',
        '_sitemap_header_subtitle', 
        '_sitemap_main_title',
        '_sitemap_services_title',
        '_sitemap_industries_title',
        '_sitemap_solutions_title',
        '_sitemap_resources_title',
        '_sitemap_company_title',
        '_sitemap_legal_title',
        '_sitemap_info_title',
        '_sitemap_info_content',
        '_sitemap_cta_text',
        '_sitemap_cta_url'
    );

    // Save simple fields
    foreach ($simple_fields as $field) {
        if (isset($_POST[$field])) {
            $value = sanitize_textarea_field($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        }
    }

    // Save array fields (links)
    $array_fields = array(
        '_sitemap_main_pages',
        '_sitemap_services',
        '_sitemap_industries',
        '_sitemap_solutions',
        '_sitemap_resources',
        '_sitemap_company_pages',
        '_sitemap_legal_pages'
    );

    foreach ($array_fields as $field) {
        if (isset($_POST[$field]) && is_array($_POST[$field])) {
            $clean_array = array();
            foreach ($_POST[$field] as $item) {
                if (!empty($item['title']) && !empty($item['url'])) {
                    $clean_array[] = array(
                        'title' => sanitize_text_field($item['title']),
                        'url' => esc_url_raw($item['url'])
                    );
                }
            }
            update_post_meta($post_id, $field, $clean_array);
        }
    }
}
