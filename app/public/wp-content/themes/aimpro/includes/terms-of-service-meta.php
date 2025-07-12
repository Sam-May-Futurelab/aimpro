<?php
/**
 * Terms of Service Page Meta Box
 */

/**
 * Helper function to get terms defaults safely
 */
if (!function_exists('get_terms_meta_default')) {
    function get_terms_meta_default($key, $fallback = '') {
        // Comprehensive fallback defaults for terms meta interface
        $meta_defaults = array(
            'header_title' => 'Terms of Service',
            'header_subtitle' => 'Please read these terms and conditions carefully before using our services',
            'last_updated' => 'Last updated: ' . date('F j, Y'),
            'intro_title' => '1. Introduction',
            'intro_content' => 'Welcome to Aimpro Digital. These terms and conditions ("Terms", "Agreement") are an agreement between Aimpro Digital ("we", "us", "our") and you ("User", "you", "your"). This Agreement sets forth the general terms and conditions of your use of our website and services.',
            'acceptance_title' => '2. Acceptance of Terms',
            'acceptance_content' => 'By accessing and using our website and services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.',
            'services_title' => '3. Services Description',
            'services_content' => 'Aimpro Digital provides digital marketing services including but not limited to: search engine optimization (SEO), pay-per-click advertising (PPC), social media marketing, content marketing, web design and development, and related digital marketing consultancy services.',
            'services_list' => "Search Engine Optimization (SEO)\nPay-Per-Click Advertising (PPC)\nSocial Media Marketing\nContent Marketing\nWeb Design and Development\nDigital Marketing Consultancy\nAnalytics and Reporting Services",
            'obligations_title' => '4. User Obligations',
            'obligations_content' => 'As a user of our services, you agree to:',
            'obligations_list' => "Provide accurate and complete information\nComply with all applicable laws and regulations\nNot use our services for any unlawful purposes\nRespect intellectual property rights\nMaintain confidentiality of login credentials\nNotify us of any unauthorized use of your account",
            'payment_title' => '5. Payment Terms',
            'payment_content' => 'Payment terms are specified in individual service agreements. Generally, services are billed monthly in advance unless otherwise agreed. Late payments may result in service suspension or termination.',
            'ip_title' => '6. Intellectual Property',
            'ip_content' => 'The service and its original content, features and functionality are and will remain the exclusive property of Aimpro Digital and its licensors. The service is protected by copyright, trademark, and other laws. Our trademarks and trade dress may not be used in connection with any product or service without our prior written consent.',
            'liability_title' => '7. Limitation of Liability',
            'liability_content' => 'In no event shall Aimpro Digital, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from your use of the service.',
            'termination_title' => '8. Termination',
            'termination_content' => 'We may terminate or suspend your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. Upon termination, your right to use the service will cease immediately.',
            'law_title' => '9. Governing Law',
            'law_content' => 'These Terms shall be interpreted and governed by the laws of England and Wales, without regard to its conflict of law provisions. Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights.',
            'changes_title' => '10. Changes to Terms',
            'changes_content' => 'We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will try to provide at least 30 days notice prior to any new terms taking effect.',
            'contact_title' => '11. Contact Information',
            'contact_content' => 'If you have any questions about these Terms of Service, please contact us at:',
            'contact_email' => 'info@aimprodigital.com',
            'contact_phone' => '0121 285 2866',
            'contact_address' => 'Birmingham, UK'
        );
        
        return isset($meta_defaults[$key]) ? $meta_defaults[$key] : $fallback;
    }
}

// Add meta box for Terms of Service page
add_action('add_meta_boxes', 'terms_of_service_meta_boxes');
function terms_of_service_meta_boxes() {
    // Only show this meta box on the Terms of Service page template or page with terms-of-service slug
    $screen = get_current_screen();
    if ($screen->id == 'page' && isset($_GET['post'])) {
        $template = get_post_meta($_GET['post'], '_wp_page_template', true);
        $post = get_post($_GET['post']);
        $slug = $post ? $post->post_name : '';
        
        // Show meta box if template matches OR slug matches
        if ($template != 'page-terms-of-service.php' && $slug != 'terms-of-service') {
            return;
        }
    }
    
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
    wp_nonce_field('terms_of_service_meta_nonce', 'terms_of_service_meta_nonce');
    
    // Get existing values with safe defaults
    $header_title = get_post_meta($post->ID, '_terms_header_title', true);
    if (empty($header_title)) $header_title = get_terms_meta_default('header_title');
    
    $header_subtitle = get_post_meta($post->ID, '_terms_header_subtitle', true);
    if (empty($header_subtitle)) $header_subtitle = get_terms_meta_default('header_subtitle');
    
    $last_updated = get_post_meta($post->ID, '_terms_last_updated', true);
    if (empty($last_updated)) $last_updated = get_terms_meta_default('last_updated');
    
    // Introduction section
    $intro_title = get_post_meta($post->ID, '_terms_intro_title', true);
    if (empty($intro_title)) $intro_title = get_terms_meta_default('intro_title');
    
    $intro_content = get_post_meta($post->ID, '_terms_intro_content', true);
    if (empty($intro_content)) $intro_content = get_terms_meta_default('intro_content');
    
    // Acceptance section
    $acceptance_title = get_post_meta($post->ID, '_terms_acceptance_title', true);
    if (empty($acceptance_title)) $acceptance_title = get_terms_meta_default('acceptance_title');
    
    $acceptance_content = get_post_meta($post->ID, '_terms_acceptance_content', true);
    if (empty($acceptance_content)) $acceptance_content = get_terms_meta_default('acceptance_content');
    
    // Services section
    $services_title = get_post_meta($post->ID, '_terms_services_title', true);
    if (empty($services_title)) $services_title = get_terms_meta_default('services_title');
    
    $services_content = get_post_meta($post->ID, '_terms_services_content', true);
    if (empty($services_content)) $services_content = get_terms_meta_default('services_content');
    
    $services_list = get_post_meta($post->ID, '_terms_services_list', true);
    if (empty($services_list)) $services_list = get_terms_meta_default('services_list');
    
    // User obligations section
    $obligations_title = get_post_meta($post->ID, '_terms_obligations_title', true);
    if (empty($obligations_title)) $obligations_title = get_terms_meta_default('obligations_title');
    
    $obligations_content = get_post_meta($post->ID, '_terms_obligations_content', true);
    if (empty($obligations_content)) $obligations_content = get_terms_meta_default('obligations_content');
    
    $obligations_list = get_post_meta($post->ID, '_terms_obligations_list', true);
    if (empty($obligations_list)) $obligations_list = get_terms_meta_default('obligations_list');
    
    // Payment terms section
    $payment_title = get_post_meta($post->ID, '_terms_payment_title', true);
    if (empty($payment_title)) $payment_title = get_terms_meta_default('payment_title');
    
    $payment_content = get_post_meta($post->ID, '_terms_payment_content', true);
    if (empty($payment_content)) $payment_content = get_terms_meta_default('payment_content');
    
    // Intellectual property section
    $ip_title = get_post_meta($post->ID, '_terms_ip_title', true);
    if (empty($ip_title)) $ip_title = get_terms_meta_default('ip_title');
    
    $ip_content = get_post_meta($post->ID, '_terms_ip_content', true);
    if (empty($ip_content)) $ip_content = get_terms_meta_default('ip_content');
    
    // Limitation of liability section
    $liability_title = get_post_meta($post->ID, '_terms_liability_title', true);
    if (empty($liability_title)) $liability_title = get_terms_meta_default('liability_title');
    
    $liability_content = get_post_meta($post->ID, '_terms_liability_content', true);
    if (empty($liability_content)) $liability_content = get_terms_meta_default('liability_content');
    
    // Termination section
    $termination_title = get_post_meta($post->ID, '_terms_termination_title', true);
    if (empty($termination_title)) $termination_title = get_terms_meta_default('termination_title');
    
    $termination_content = get_post_meta($post->ID, '_terms_termination_content', true);
    if (empty($termination_content)) $termination_content = get_terms_meta_default('termination_content');
    
    // Governing law section
    $law_title = get_post_meta($post->ID, '_terms_law_title', true);
    if (empty($law_title)) $law_title = get_terms_meta_default('law_title');
    
    $law_content = get_post_meta($post->ID, '_terms_law_content', true);
    if (empty($law_content)) $law_content = get_terms_meta_default('law_content');
    
    // Changes to terms section
    $changes_title = get_post_meta($post->ID, '_terms_changes_title', true);
    if (empty($changes_title)) $changes_title = get_terms_meta_default('changes_title');
    
    $changes_content = get_post_meta($post->ID, '_terms_changes_content', true);
    if (empty($changes_content)) $changes_content = get_terms_meta_default('changes_content');
    
    // Contact information section
    $contact_title = get_post_meta($post->ID, '_terms_contact_title', true);
    if (empty($contact_title)) $contact_title = get_terms_meta_default('contact_title');
    
    $contact_content = get_post_meta($post->ID, '_terms_contact_content', true);
    if (empty($contact_content)) $contact_content = get_terms_meta_default('contact_content');
    
    $contact_email = get_post_meta($post->ID, '_terms_contact_email', true);
    if (empty($contact_email)) $contact_email = get_terms_meta_default('contact_email');
    
    $contact_phone = get_post_meta($post->ID, '_terms_contact_phone', true);
    if (empty($contact_phone)) $contact_phone = get_terms_meta_default('contact_phone');
    
    $contact_address = get_post_meta($post->ID, '_terms_contact_address', true);
    if (empty($contact_address)) $contact_address = get_terms_meta_default('contact_address');
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
                <?php wp_editor($header_subtitle, 'terms_header_subtitle', array('textarea_name' => 'terms_header_subtitle', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($intro_content, 'terms_intro_content', array('textarea_name' => 'terms_intro_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($acceptance_content, 'terms_acceptance_content', array('textarea_name' => 'terms_acceptance_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($services_content, 'terms_services_content', array('textarea_name' => 'terms_services_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($obligations_content, 'terms_obligations_content', array('textarea_name' => 'terms_obligations_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($payment_content, 'terms_payment_content', array('textarea_name' => 'terms_payment_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($ip_content, 'terms_ip_content', array('textarea_name' => 'terms_ip_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($liability_content, 'terms_liability_content', array('textarea_name' => 'terms_liability_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($termination_content, 'terms_termination_content', array('textarea_name' => 'terms_termination_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($law_content, 'terms_law_content', array('textarea_name' => 'terms_law_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($changes_content, 'terms_changes_content', array('textarea_name' => 'terms_changes_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 4, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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
                <?php wp_editor($contact_content, 'terms_contact_content', array('textarea_name' => 'terms_contact_content', 'teeny' => true, 'media_buttons' => false, 'textarea_rows' => 3, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
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

    // Only save for pages using the Terms of Service template or with terms-of-service slug
    $template = get_post_meta($post_id, '_wp_page_template', true);
    $post = get_post($post_id);
    $slug = $post ? $post->post_name : '';
    
    // Save meta if template matches OR slug matches
    if ($template !== 'page-terms-of-service.php' && $slug !== 'terms-of-service') {
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

    // Define rich text fields that use wp_editor (use wp_kses_post)
    $rich_text_fields = array(
        '_terms_header_subtitle',
        '_terms_intro_content',
        '_terms_acceptance_content',
        '_terms_services_content',
        '_terms_obligations_content',
        '_terms_payment_content',
        '_terms_ip_content',
        '_terms_liability_content',
        '_terms_termination_content',
        '_terms_law_content',
        '_terms_changes_content',
        '_terms_contact_content'
    );

    // Save each field
    foreach ($meta_fields as $field) {
        // Check both underscore and non-underscore versions
        $field_without_underscore = ltrim($field, '_');
        
        if (isset($_POST[$field])) {
            $value = $_POST[$field];
        } elseif (isset($_POST[$field_without_underscore])) {
            $value = $_POST[$field_without_underscore];
        } else {
            continue;
        }
        
        // Handle list fields specially - convert text to array
        if ($field === '_terms_services_list' || $field === '_terms_obligations_list') {
            if (is_string($value) && !empty($value)) {
                $value = array_filter(array_map('trim', explode("\n", $value)));
            }
        }
        
        // Sanitize and save
        if (is_array($value)) {
            $value = array_map('sanitize_text_field', $value);
        } elseif (in_array($field, $rich_text_fields)) {
            $value = wp_kses_post($value);
        } else {
            $value = sanitize_text_field($value);
        }
        
        update_post_meta($post_id, $field, $value);
    }
}
