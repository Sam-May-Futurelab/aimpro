<?php
/**
 * Terms of Service Page Meta Box
 */

// Add meta box for Terms of Service page
add_action('add_meta_boxes', 'terms_of_service_meta_boxes');
function terms_of_service_meta_boxes() {
    add_meta_box(
        'terms_of_service_meta',
        'Terms of Service Content',
        'terms_of_service_meta_callback',
        'page',
        'normal',
        'high'
    );
}

// Meta box callback
function terms_of_service_meta_callback($post) {
    // Only show for pages using the Terms of Service template
    $template = get_post_meta($post->ID, '_wp_page_template', true);
    if ($template !== 'page-terms-of-service.php') {
        echo '<p>This meta box is only available for pages using the "Terms of Service" template.</p>';
        return;
    }

    wp_nonce_field('terms_of_service_meta_nonce', 'terms_of_service_meta_nonce');
    
    // Get existing values
    $header_title = get_post_meta($post->ID, '_terms_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_terms_header_subtitle', true);
    $last_updated = get_post_meta($post->ID, '_terms_last_updated', true);
    
    // Introduction section
    $intro_title = get_post_meta($post->ID, '_terms_intro_title', true);
    $intro_content = get_post_meta($post->ID, '_terms_intro_content', true);
    
    // Acceptance section
    $acceptance_title = get_post_meta($post->ID, '_terms_acceptance_title', true);
    $acceptance_content = get_post_meta($post->ID, '_terms_acceptance_content', true);
    
    // Services section
    $services_title = get_post_meta($post->ID, '_terms_services_title', true);
    $services_content = get_post_meta($post->ID, '_terms_services_content', true);
    $services_list = get_post_meta($post->ID, '_terms_services_list', true);
    
    // User obligations section
    $obligations_title = get_post_meta($post->ID, '_terms_obligations_title', true);
    $obligations_content = get_post_meta($post->ID, '_terms_obligations_content', true);
    $obligations_list = get_post_meta($post->ID, '_terms_obligations_list', true);
    
    // Payment terms section
    $payment_title = get_post_meta($post->ID, '_terms_payment_title', true);
    $payment_content = get_post_meta($post->ID, '_terms_payment_content', true);
    
    // Intellectual property section
    $ip_title = get_post_meta($post->ID, '_terms_ip_title', true);
    $ip_content = get_post_meta($post->ID, '_terms_ip_content', true);
    
    // Limitation of liability section
    $liability_title = get_post_meta($post->ID, '_terms_liability_title', true);
    $liability_content = get_post_meta($post->ID, '_terms_liability_content', true);
    
    // Termination section
    $termination_title = get_post_meta($post->ID, '_terms_termination_title', true);
    $termination_content = get_post_meta($post->ID, '_terms_termination_content', true);
    
    // Governing law section
    $law_title = get_post_meta($post->ID, '_terms_law_title', true);
    $law_content = get_post_meta($post->ID, '_terms_law_content', true);
    
    // Changes to terms section
    $changes_title = get_post_meta($post->ID, '_terms_changes_title', true);
    $changes_content = get_post_meta($post->ID, '_terms_changes_content', true);
    
    // Contact information section
    $contact_title = get_post_meta($post->ID, '_terms_contact_title', true);
    $contact_content = get_post_meta($post->ID, '_terms_contact_content', true);
    $contact_email = get_post_meta($post->ID, '_terms_contact_email', true);
    $contact_phone = get_post_meta($post->ID, '_terms_contact_phone', true);
    $contact_address = get_post_meta($post->ID, '_terms_contact_address', true);
    ?>
    
    <style>
        .terms-meta-section { margin-bottom: 25px; padding-bottom: 20px; border-bottom: 1px solid #ddd; }
        .terms-meta-section:last-child { border-bottom: none; }
        .terms-meta-section h3 { color: #23282d; margin-bottom: 15px; font-size: 16px; }
        .terms-meta-field { margin-bottom: 15px; }
        .terms-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; }
        .terms-meta-field input[type="text"], .terms-meta-field input[type="email"], .terms-meta-field input[type="tel"] { width: 100%; }
        .terms-meta-field textarea { width: 100%; min-height: 100px; }
        .terms-meta-field .list-textarea { min-height: 120px; }
        .terms-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        @media (max-width: 782px) { .terms-meta-grid { grid-template-columns: 1fr; } }
        .description { font-style: italic; color: #666; margin-top: 5px; }
    </style>

    <div class="terms-of-service-meta">
        <!-- Header Section -->
        <div class="terms-meta-section">
            <h3>Page Header</h3>
            <div class="terms-meta-field">
                <label for="terms_header_title">Page Title</label>
                <input type="text" id="terms_header_title" name="_terms_header_title" 
                       value="<?php echo esc_attr($header_title); ?>" 
                       placeholder="Terms of Service" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_header_subtitle">Page Subtitle</label>
                <input type="text" id="terms_header_subtitle" name="_terms_header_subtitle" 
                       value="<?php echo esc_attr($header_subtitle); ?>" 
                       placeholder="Please read these terms and conditions carefully before using our services" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_last_updated">Last Updated Text</label>
                <input type="text" id="terms_last_updated" name="_terms_last_updated" 
                       value="<?php echo esc_attr($last_updated); ?>" 
                       placeholder="Last updated: January 1, 2024" />
                <p class="description">Include the full text (e.g., "Last updated: January 1, 2024")</p>
            </div>
        </div>

        <!-- Introduction Section -->
        <div class="terms-meta-section">
            <h3>1. Introduction</h3>
            <div class="terms-meta-field">
                <label for="terms_intro_title">Section Title</label>
                <input type="text" id="terms_intro_title" name="_terms_intro_title" 
                       value="<?php echo esc_attr($intro_title); ?>" 
                       placeholder="1. Introduction" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_intro_content">Content</label>
                <textarea id="terms_intro_content" name="_terms_intro_content" rows="4"><?php echo esc_textarea($intro_content); ?></textarea>
            </div>
        </div>

        <!-- Acceptance of Terms Section -->
        <div class="terms-meta-section">
            <h3>2. Acceptance of Terms</h3>
            <div class="terms-meta-field">
                <label for="terms_acceptance_title">Section Title</label>
                <input type="text" id="terms_acceptance_title" name="_terms_acceptance_title" 
                       value="<?php echo esc_attr($acceptance_title); ?>" 
                       placeholder="2. Acceptance of Terms" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_acceptance_content">Content</label>
                <textarea id="terms_acceptance_content" name="_terms_acceptance_content" rows="4"><?php echo esc_textarea($acceptance_content); ?></textarea>
            </div>
        </div>

        <!-- Services Description Section -->
        <div class="terms-meta-section">
            <h3>3. Services Description</h3>
            <div class="terms-meta-field">
                <label for="terms_services_title">Section Title</label>
                <input type="text" id="terms_services_title" name="_terms_services_title" 
                       value="<?php echo esc_attr($services_title); ?>" 
                       placeholder="3. Services Description" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_services_content">Content</label>
                <textarea id="terms_services_content" name="_terms_services_content" rows="4"><?php echo esc_textarea($services_content); ?></textarea>
            </div>
            <div class="terms-meta-field">
                <label for="terms_services_list">Services List</label>
                <textarea id="terms_services_list" name="_terms_services_list" class="list-textarea" rows="6"><?php 
                if (is_array($services_list)) {
                    echo esc_textarea(implode("\n", $services_list)); 
                } else {
                    echo esc_textarea($services_list);
                }
                ?></textarea>
                <p class="description">Enter each service on a new line</p>
            </div>
        </div>

        <!-- User Obligations Section -->
        <div class="terms-meta-section">
            <h3>4. User Obligations</h3>
            <div class="terms-meta-field">
                <label for="terms_obligations_title">Section Title</label>
                <input type="text" id="terms_obligations_title" name="_terms_obligations_title" 
                       value="<?php echo esc_attr($obligations_title); ?>" 
                       placeholder="4. User Obligations" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_obligations_content">Content</label>
                <textarea id="terms_obligations_content" name="_terms_obligations_content" rows="3"><?php echo esc_textarea($obligations_content); ?></textarea>
            </div>
            <div class="terms-meta-field">
                <label for="terms_obligations_list">Obligations List</label>
                <textarea id="terms_obligations_list" name="_terms_obligations_list" class="list-textarea" rows="6"><?php 
                if (is_array($obligations_list)) {
                    echo esc_textarea(implode("\n", $obligations_list)); 
                } else {
                    echo esc_textarea($obligations_list);
                }
                ?></textarea>
                <p class="description">Enter each obligation on a new line</p>
            </div>
        </div>

        <!-- Payment Terms Section -->
        <div class="terms-meta-section">
            <h3>5. Payment Terms</h3>
            <div class="terms-meta-field">
                <label for="terms_payment_title">Section Title</label>
                <input type="text" id="terms_payment_title" name="_terms_payment_title" 
                       value="<?php echo esc_attr($payment_title); ?>" 
                       placeholder="5. Payment Terms" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_payment_content">Content</label>
                <textarea id="terms_payment_content" name="_terms_payment_content" rows="4"><?php echo esc_textarea($payment_content); ?></textarea>
            </div>
        </div>

        <!-- Intellectual Property Section -->
        <div class="terms-meta-section">
            <h3>6. Intellectual Property</h3>
            <div class="terms-meta-field">
                <label for="terms_ip_title">Section Title</label>
                <input type="text" id="terms_ip_title" name="_terms_ip_title" 
                       value="<?php echo esc_attr($ip_title); ?>" 
                       placeholder="6. Intellectual Property" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_ip_content">Content</label>
                <textarea id="terms_ip_content" name="_terms_ip_content" rows="4"><?php echo esc_textarea($ip_content); ?></textarea>
            </div>
        </div>

        <!-- Limitation of Liability Section -->
        <div class="terms-meta-section">
            <h3>7. Limitation of Liability</h3>
            <div class="terms-meta-field">
                <label for="terms_liability_title">Section Title</label>
                <input type="text" id="terms_liability_title" name="_terms_liability_title" 
                       value="<?php echo esc_attr($liability_title); ?>" 
                       placeholder="7. Limitation of Liability" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_liability_content">Content</label>
                <textarea id="terms_liability_content" name="_terms_liability_content" rows="4"><?php echo esc_textarea($liability_content); ?></textarea>
            </div>
        </div>

        <!-- Termination Section -->
        <div class="terms-meta-section">
            <h3>8. Termination</h3>
            <div class="terms-meta-field">
                <label for="terms_termination_title">Section Title</label>
                <input type="text" id="terms_termination_title" name="_terms_termination_title" 
                       value="<?php echo esc_attr($termination_title); ?>" 
                       placeholder="8. Termination" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_termination_content">Content</label>
                <textarea id="terms_termination_content" name="_terms_termination_content" rows="4"><?php echo esc_textarea($termination_content); ?></textarea>
            </div>
        </div>

        <!-- Governing Law Section -->
        <div class="terms-meta-section">
            <h3>9. Governing Law</h3>
            <div class="terms-meta-field">
                <label for="terms_law_title">Section Title</label>
                <input type="text" id="terms_law_title" name="_terms_law_title" 
                       value="<?php echo esc_attr($law_title); ?>" 
                       placeholder="9. Governing Law" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_law_content">Content</label>
                <textarea id="terms_law_content" name="_terms_law_content" rows="4"><?php echo esc_textarea($law_content); ?></textarea>
            </div>
        </div>

        <!-- Changes to Terms Section -->
        <div class="terms-meta-section">
            <h3>10. Changes to Terms</h3>
            <div class="terms-meta-field">
                <label for="terms_changes_title">Section Title</label>
                <input type="text" id="terms_changes_title" name="_terms_changes_title" 
                       value="<?php echo esc_attr($changes_title); ?>" 
                       placeholder="10. Changes to Terms" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_changes_content">Content</label>
                <textarea id="terms_changes_content" name="_terms_changes_content" rows="4"><?php echo esc_textarea($changes_content); ?></textarea>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="terms-meta-section">
            <h3>11. Contact Information</h3>
            <div class="terms-meta-field">
                <label for="terms_contact_title">Section Title</label>
                <input type="text" id="terms_contact_title" name="_terms_contact_title" 
                       value="<?php echo esc_attr($contact_title); ?>" 
                       placeholder="11. Contact Information" />
            </div>
            <div class="terms-meta-field">
                <label for="terms_contact_content">Content</label>
                <textarea id="terms_contact_content" name="_terms_contact_content" rows="3"><?php echo esc_textarea($contact_content); ?></textarea>
            </div>
            <div class="terms-meta-grid">
                <div class="terms-meta-field">
                    <label for="terms_contact_email">Email Address</label>
                    <input type="email" id="terms_contact_email" name="_terms_contact_email" 
                           value="<?php echo esc_attr($contact_email); ?>" 
                           placeholder="info@aimprodigital.com" />
                </div>
                <div class="terms-meta-field">
                    <label for="terms_contact_phone">Phone Number</label>
                    <input type="tel" id="terms_contact_phone" name="_terms_contact_phone" 
                           value="<?php echo esc_attr($contact_phone); ?>" 
                           placeholder="0121 285 2866" />
                </div>
            </div>
            <div class="terms-meta-field">
                <label for="terms_contact_address">Address</label>
                <input type="text" id="terms_contact_address" name="_terms_contact_address" 
                       value="<?php echo esc_attr($contact_address); ?>" 
                       placeholder="Birmingham, UK" />
            </div>
        </div>
    </div>
    <?php
}

// Save meta box data
add_action('save_post', 'save_terms_of_service_meta');
function save_terms_of_service_meta($post_id) {
    // Verify nonce
    if (!isset($_POST['terms_of_service_meta_nonce']) || !wp_verify_nonce($_POST['terms_of_service_meta_nonce'], 'terms_of_service_meta_nonce')) {
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

    // Only save for pages using the Terms of Service template
    $template = get_post_meta($post_id, '_wp_page_template', true);
    if ($template !== 'page-terms-of-service.php') {
        return;
    }

    // List of all meta fields to save
    $meta_fields = array(
        '_terms_header_title',
        '_terms_header_subtitle', 
        '_terms_last_updated',
        '_terms_intro_title',
        '_terms_intro_content',
        '_terms_acceptance_title',
        '_terms_acceptance_content',
        '_terms_services_title',
        '_terms_services_content',
        '_terms_services_list',
        '_terms_obligations_title',
        '_terms_obligations_content',
        '_terms_obligations_list',
        '_terms_payment_title',
        '_terms_payment_content',
        '_terms_ip_title',
        '_terms_ip_content',
        '_terms_liability_title',
        '_terms_liability_content',
        '_terms_termination_title',
        '_terms_termination_content',
        '_terms_law_title',
        '_terms_law_content',
        '_terms_changes_title',
        '_terms_changes_content',
        '_terms_contact_title',
        '_terms_contact_content',
        '_terms_contact_email',
        '_terms_contact_phone',
        '_terms_contact_address'
    );

    // Save each field
    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];
            
            // Handle list fields specially - convert text to array
            if ($field === '_terms_services_list' || $field === '_terms_obligations_list') {
                if (is_string($value) && !empty($value)) {
                    $value = array_filter(array_map('trim', explode("\n", $value)));
                }
            }
            
            // Sanitize and save
            if (is_array($value)) {
                $value = array_map('sanitize_text_field', $value);
            } else {
                $value = sanitize_textarea_field($value);
            }
            
            update_post_meta($post_id, $field, $value);
        }
    }
}
