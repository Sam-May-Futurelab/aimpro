<?php
/**
 * Privacy Policy Page Meta Box
 */

// Add meta box for Privacy Policy page
add_action('add_meta_boxes', 'privacy_policy_meta_boxes');
function privacy_policy_meta_boxes() {
    // Only show this meta box on the Privacy Policy page template or page with privacy-policy slug
    $screen = get_current_screen();
    if ($screen->id == 'page' && isset($_GET['post'])) {
        $template = get_post_meta($_GET['post'], '_wp_page_template', true);
        $post = get_post($_GET['post']);
        $slug = $post ? $post->post_name : '';
        
        // Show meta box if template matches OR slug matches
        if ($template != 'page-privacy-policy.php' && $slug != 'privacy-policy') {
            return;
        }
    }
    
    add_meta_box(
        'privacy_policy_meta',
        'Privacy Policy Content',
        'privacy_policy_meta_callback',
        'page',
        'normal',
        'high'
    );
}

// Meta box callback
function privacy_policy_meta_callback($post) {
    wp_nonce_field('privacy_policy_meta_nonce', 'privacy_policy_meta_nonce');
    
    // Get existing values with safe defaults
    $header_title = get_post_meta($post->ID, 'privacy_header_title', true);
    if (empty($header_title)) $header_title = 'Privacy Policy';
    
    $header_subtitle = get_post_meta($post->ID, 'privacy_header_subtitle', true);
    if (empty($header_subtitle)) $header_subtitle = 'How we collect, use, and protect your information';
    
    $last_updated = get_post_meta($post->ID, 'privacy_last_updated', true);
    if (empty($last_updated)) $last_updated = date('Y-m-d');
    
    // Policy sections with defaults
    $info_collect_content = get_post_meta($post->ID, 'privacy_info_collect', true);
    if (empty($info_collect_content)) $info_collect_content = 'We collect information you provide directly to us, such as when you fill out contact forms, subscribe to our newsletter, or engage with our services. This may include your name, email address, phone number, company information, and any other details you choose to provide.';
    
    $info_use_content = get_post_meta($post->ID, 'privacy_info_use', true);
    if (empty($info_use_content)) $info_use_content = 'We use the information we collect to provide and improve our digital marketing services, respond to your inquiries, send you relevant marketing communications (with your consent), and analyze website usage to improve user experience.';
    
    $info_sharing_content = get_post_meta($post->ID, 'privacy_info_sharing', true);
    if (empty($info_sharing_content)) $info_sharing_content = 'We do not sell, trade, or rent your personal information to third parties. We may share your information only with your explicit consent, to comply with legal requirements, or with trusted service providers who assist in our operations under strict confidentiality.';
    
    $cookies_content = get_post_meta($post->ID, 'privacy_cookies', true);
    if (empty($cookies_content)) $cookies_content = 'Our website uses cookies and similar tracking technologies to remember your preferences, analyze website traffic, provide personalized content, and enable social media features. You can control cookie settings through your browser preferences.';
    
    $security_content = get_post_meta($post->ID, 'privacy_security', true);
    if (empty($security_content)) $security_content = 'We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no internet transmission is 100% secure, and we cannot guarantee absolute security.';
    
    $user_rights_content = get_post_meta($post->ID, 'privacy_user_rights', true);
    if (empty($user_rights_content)) $user_rights_content = 'Depending on your location, you may have certain rights regarding your personal information, including access, correction, deletion, withdrawal of consent, and data portability. To exercise these rights, please contact us using the information provided below.';
    
    $third_party_content = get_post_meta($post->ID, 'privacy_third_party', true);
    if (empty($third_party_content)) $third_party_content = 'Our website may contain links to third-party websites or integrate with external services. These third parties have their own privacy policies, and we are not responsible for their practices.';
    
    $changes_content = get_post_meta($post->ID, 'privacy_changes', true);
    if (empty($changes_content)) $changes_content = 'We may update this Privacy Policy from time to time to reflect changes in our practices or applicable laws. We will notify you of any material changes by posting the updated policy on our website.';
    
    $contact_content = get_post_meta($post->ID, 'privacy_contact', true);
    if (empty($contact_content)) $contact_content = 'If you have any questions about this Privacy Policy or our data practices, please contact us at: <strong>Aimpro Digital</strong>, Birmingham, UK. Email: hello@aimpro.co.uk, Phone: 0121 285 8490';
    
    // CTA section with defaults
    $cta_heading = get_post_meta($post->ID, 'privacy_cta_heading', true);
    if (empty($cta_heading)) $cta_heading = 'Questions About Our Privacy Policy?';
    
    $cta_description = get_post_meta($post->ID, 'privacy_cta_description', true);
    if (empty($cta_description)) $cta_description = 'We\'re here to help clarify any concerns you may have about how we handle your data';
    
    $cta_button1_text = get_post_meta($post->ID, 'privacy_cta_button1_text', true);
    if (empty($cta_button1_text)) $cta_button1_text = 'Contact Us';
    
    $cta_button1_url = get_post_meta($post->ID, 'privacy_cta_button1_url', true);
    if (empty($cta_button1_url)) $cta_button1_url = '/contact';
    
    $cta_button2_text = get_post_meta($post->ID, 'privacy_cta_button2_text', true);
    if (empty($cta_button2_text)) $cta_button2_text = 'Back to Home';
    
    $cta_button2_url = get_post_meta($post->ID, 'privacy_cta_button2_url', true);
    if (empty($cta_button2_url)) $cta_button2_url = '/';
    ?>
    
    <style>
        .privacy-meta-section { margin-bottom: 25px; padding-bottom: 20px; border-bottom: 1px solid #ddd; }
        .privacy-meta-section:last-child { border-bottom: none; }
        .privacy-meta-section h3 { color: #23282d; margin-bottom: 15px; font-size: 16px; }
        .privacy-meta-field { margin-bottom: 15px; }
        .privacy-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; }
        .privacy-meta-field input[type="text"], .privacy-meta-field input[type="url"], .privacy-meta-field input[type="date"] { width: 100%; }
        .privacy-meta-field textarea { width: 100%; min-height: 120px; }
        .privacy-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        @media (max-width: 782px) { .privacy-meta-grid { grid-template-columns: 1fr; } }
    </style>

    <div class="privacy-policy-meta">
        <!-- Header Section -->
        <div class="privacy-meta-section">
            <h3>Page Header</h3>
            <div class="privacy-meta-field">
                <label for="privacy_header_title">Page Title</label>
                <?php wp_editor($header_title, 'privacy_header_title_editor', array(
                    'textarea_name' => 'privacy_header_title',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link'),
                    'wpautop' => false
                )); ?>
            </div>
            <div class="privacy-meta-field">
                <label for="privacy_header_subtitle">Page Subtitle</label>
                <?php wp_editor($header_subtitle, 'privacy_header_subtitle_editor', array(
                    'textarea_name' => 'privacy_header_subtitle',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link'),
                    'wpautop' => false
                )); ?>
            </div>
            <div class="privacy-meta-field">
                <label for="privacy_last_updated">Last Updated Date</label>
                <input type="date" id="privacy_last_updated" name="privacy_last_updated" 
                       value="<?php echo esc_attr($last_updated); ?>" />
                <p class="description">Leave empty to use current date automatically</p>
            </div>
        </div>

        <!-- Information We Collect -->
        <div class="privacy-meta-section">
            <h3>1. Information We Collect</h3>
            <div class="privacy-meta-field">
                <label for="privacy_info_collect">Content</label>
                <?php wp_editor($info_collect_content, 'privacy_info_collect_editor', array(
                    'textarea_name' => 'privacy_info_collect',
                    'media_buttons' => false,
                    'textarea_rows' => 6,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => true
                )); ?>
                <p class="description">Use the editor toolbar to format text and create bullet points with the list buttons.</p>
            </div>
        </div>

        <!-- How We Use Information -->
        <div class="privacy-meta-section">
            <h3>2. How We Use Your Information</h3>
            <div class="privacy-meta-field">
                <label for="privacy_info_use">Content</label>
                <?php wp_editor($info_use_content, 'privacy_info_use_editor', array(
                    'textarea_name' => 'privacy_info_use',
                    'media_buttons' => false,
                    'textarea_rows' => 6,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => true
                )); ?>
            </div>
        </div>

        <!-- Information Sharing -->
        <div class="privacy-meta-section">
            <h3>3. Information Sharing</h3>
            <div class="privacy-meta-field">
                <label for="privacy_info_sharing">Content</label>
                <?php wp_editor($info_sharing_content, 'privacy_info_sharing_editor', array(
                    'textarea_name' => 'privacy_info_sharing',
                    'media_buttons' => false,
                    'textarea_rows' => 6,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => true
                )); ?>
            </div>
        </div>

        <!-- Cookies and Tracking -->
        <div class="privacy-meta-section">
            <h3>4. Cookies and Tracking</h3>
            <div class="privacy-meta-field">
                <label for="privacy_cookies">Content</label>
                <?php wp_editor($cookies_content, 'privacy_cookies_editor', array(
                    'textarea_name' => 'privacy_cookies',
                    'media_buttons' => false,
                    'textarea_rows' => 6,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => true
                )); ?>
            </div>
        </div>

        <!-- Data Security -->
        <div class="privacy-meta-section">
            <h3>5. Data Security</h3>
            <div class="privacy-meta-field">
                <label for="privacy_security">Content</label>
                <?php wp_editor($security_content, 'privacy_security_editor', array(
                    'textarea_name' => 'privacy_security',
                    'media_buttons' => false,
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => true
                )); ?>
            </div>
        </div>

        <!-- Your Rights -->
        <div class="privacy-meta-section">
            <h3>6. Your Rights</h3>
            <div class="privacy-meta-field">
                <label for="privacy_user_rights">Content</label>
                <?php wp_editor($user_rights_content, 'privacy_user_rights_editor', array(
                    'textarea_name' => 'privacy_user_rights',
                    'media_buttons' => false,
                    'textarea_rows' => 6,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => true
                )); ?>
            </div>
        </div>

        <!-- Third-Party Services -->
        <div class="privacy-meta-section">
            <h3>7. Third-Party Services</h3>
            <div class="privacy-meta-field">
                <label for="privacy_third_party">Content</label>
                <?php wp_editor($third_party_content, 'privacy_third_party_editor', array(
                    'textarea_name' => 'privacy_third_party',
                    'media_buttons' => false,
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => true
                )); ?>
            </div>
        </div>

        <!-- Changes to Policy -->
        <div class="privacy-meta-section">
            <h3>8. Changes to This Policy</h3>
            <div class="privacy-meta-field">
                <label for="privacy_changes">Content</label>
                <?php wp_editor($changes_content, 'privacy_changes_editor', array(
                    'textarea_name' => 'privacy_changes',
                    'media_buttons' => false,
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => true
                )); ?>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="privacy-meta-section">
            <h3>9. Contact Us</h3>
            <div class="privacy-meta-field">
                <label for="privacy_contact">Content</label>
                <?php wp_editor($contact_content, 'privacy_contact_editor', array(
                    'textarea_name' => 'privacy_contact',
                    'media_buttons' => false,
                    'textarea_rows' => 4,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => true
                )); ?>
                <p class="description">Contact information will be automatically added from theme settings if left empty.</p>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="privacy-meta-section">
            <h3>Bottom CTA Section</h3>
            <div class="privacy-meta-field">
                <label for="privacy_cta_heading">CTA Heading</label>
                <?php wp_editor($cta_heading, 'privacy_cta_heading_editor', array(
                    'textarea_name' => 'privacy_cta_heading',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link'),
                    'wpautop' => false
                )); ?>
            </div>
            <div class="privacy-meta-field">
                <label for="privacy_cta_description">CTA Description</label>
                <?php wp_editor($cta_description, 'privacy_cta_description_editor', array(
                    'textarea_name' => 'privacy_cta_description',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li'),
                    'wpautop' => false
                )); ?>
            </div>
            <div class="privacy-meta-grid">
                <div class="privacy-meta-field">
                    <label for="privacy_cta_button1_text">Button 1 Text</label>
                    <input type="text" id="privacy_cta_button1_text" name="privacy_cta_button1_text" 
                           value="<?php echo esc_attr($cta_button1_text); ?>" 
                           placeholder="Contact Us" />
                </div>
                <div class="privacy-meta-field">
                    <label for="privacy_cta_button1_url">Button 1 URL</label>
                    <input type="url" id="privacy_cta_button1_url" name="privacy_cta_button1_url" 
                           value="<?php echo esc_attr($cta_button1_url); ?>" 
                           placeholder="/contact" />
                </div>
            </div>
            <div class="privacy-meta-grid">
                <div class="privacy-meta-field">
                    <label for="privacy_cta_button2_text">Button 2 Text</label>
                    <input type="text" id="privacy_cta_button2_text" name="privacy_cta_button2_text" 
                           value="<?php echo esc_attr($cta_button2_text); ?>" 
                           placeholder="Back to Home" />
                </div>
                <div class="privacy-meta-field">
                    <label for="privacy_cta_button2_url">Button 2 URL</label>
                    <input type="url" id="privacy_cta_button2_url" name="privacy_cta_button2_url" 
                           value="<?php echo esc_attr($cta_button2_url); ?>" 
                           placeholder="/" />
                </div>
            </div>
        </div>
    </div>
    <?php
}

// Save meta box data
add_action('save_post', 'privacy_policy_save_meta');
function privacy_policy_save_meta($post_id) {
    // Verify nonce
    if (!isset($_POST['privacy_policy_meta_nonce']) || !wp_verify_nonce($_POST['privacy_policy_meta_nonce'], 'privacy_policy_meta_nonce')) {
        return;
    }

    // Check if user has permission to edit
    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    // Don't save during autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Only save for pages using the Privacy Policy template or with privacy-policy slug
    $template = get_post_meta($post_id, '_wp_page_template', true);
    $post = get_post($post_id);
    $slug = $post ? $post->post_name : '';
    
    // Save meta if template matches OR slug matches
    if ($template !== 'page-privacy-policy.php' && $slug !== 'privacy-policy') {
        return;
    }

    // Array of rich text fields that should use wp_kses_post()
    $rich_text_fields = [
        'privacy_header_title',
        'privacy_header_subtitle',
        'privacy_info_collect',
        'privacy_info_use',
        'privacy_info_sharing',
        'privacy_cookies',
        'privacy_security',
        'privacy_user_rights',
        'privacy_third_party',
        'privacy_changes',
        'privacy_contact',
        'privacy_cta_heading',
        'privacy_cta_description'
    ];
    
    // Array of simple text fields that should use sanitize_text_field()
    $text_fields = [
        'privacy_last_updated',
        'privacy_cta_button1_text',
        'privacy_cta_button1_url',
        'privacy_cta_button2_text',
        'privacy_cta_button2_url'
    ];

    // Save rich text fields with wp_kses_post()
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, wp_kses_post($_POST[$field]));
        }
    }
    
    // Save simple text fields with sanitize_text_field()
    foreach ($text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
?>
