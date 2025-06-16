<?php
/**
 * Contact Page Meta Fields
 * Adds custom meta box for Contact Page template with editable content fields
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add meta box for Contact Page Settings
 */
add_action('add_meta_boxes', 'aimpro_add_contact_meta_box');
function aimpro_add_contact_meta_box() {
    // Only add to pages using the Contact Page template or with 'contact' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-contact.php' || $page_slug === 'contact') {
        add_meta_box(
            'aimpro_contact_settings',
            'Contact Page Settings',
            'aimpro_contact_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

/**
 * Contact Page Meta Box Callback
 */
function aimpro_contact_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('aimpro_contact_meta_nonce', 'aimpro_contact_meta_nonce');
    
    // Check if this is the contact page template
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-contact.php' && $page_slug !== 'contact') {
        echo '<p><strong>Note:</strong> These settings will only appear when this page uses the "Contact Page" template or has the slug "contact".</p>';
        echo '<p>Current template: ' . ($page_template ?: 'Default') . '</p>';
        echo '<p>Current slug: ' . ($page_slug ?: 'Not set yet') . '</p>';
        return;
    }    // Get current values from post meta
    $contact_hero_heading = get_post_meta($post->ID, 'contact_hero_heading', true);
    $contact_hero_subtitle = get_post_meta($post->ID, 'contact_hero_subtitle', true);
    $contact_hero_badge = get_post_meta($post->ID, 'contact_hero_badge', true);
    $contact_phone = get_post_meta($post->ID, 'contact_phone', true);
    $contact_phone_label = get_post_meta($post->ID, 'contact_phone_label', true);
    $contact_email = get_post_meta($post->ID, 'contact_email', true);
    $contact_email_label = get_post_meta($post->ID, 'contact_email_label', true);
    $contact_hours = get_post_meta($post->ID, 'contact_hours', true);
    $contact_hours_label = get_post_meta($post->ID, 'contact_hours_label', true);
    $contact_form_title = get_post_meta($post->ID, 'contact_form_title', true);
    $contact_form_subtitle = get_post_meta($post->ID, 'contact_form_subtitle', true);
    $contact_form_submit_text = get_post_meta($post->ID, 'contact_form_submit_text', true);
    $contact_form_name_label = get_post_meta($post->ID, 'contact_form_name_label', true);
    $contact_form_email_label = get_post_meta($post->ID, 'contact_form_email_label', true);
    $contact_form_phone_label = get_post_meta($post->ID, 'contact_form_phone_label', true);
    $contact_form_referral_label = get_post_meta($post->ID, 'contact_form_referral_label', true);
    $contact_form_query_label = get_post_meta($post->ID, 'contact_form_query_label', true);
    $contact_form_query_placeholder = get_post_meta($post->ID, 'contact_form_query_placeholder', true);
    $contact_office_heading = get_post_meta($post->ID, 'contact_office_heading', true);
    $contact_office_description = get_post_meta($post->ID, 'contact_office_description', true);
    $contact_office_location = get_post_meta($post->ID, 'contact_office_location', true);
    $contact_office_building = get_post_meta($post->ID, 'contact_office_building', true);
    $contact_office_address = get_post_meta($post->ID, 'contact_office_address', true);
    $contact_office_district = get_post_meta($post->ID, 'contact_office_district', true);
    $contact_office_cta_text = get_post_meta($post->ID, 'contact_office_cta_text', true);
    $contact_faq_heading = get_post_meta($post->ID, 'contact_faq_heading', true);
    $contact_faq_subtitle = get_post_meta($post->ID, 'contact_faq_subtitle', true);
    $contact_social_proof_heading = get_post_meta($post->ID, 'contact_social_proof_heading', true);
    $contact_social_proof_subtitle = get_post_meta($post->ID, 'contact_social_proof_subtitle', true);
    $contact_stat_1_number = get_post_meta($post->ID, 'contact_stat_1_number', true);
    $contact_stat_1_label = get_post_meta($post->ID, 'contact_stat_1_label', true);
    $contact_stat_2_number = get_post_meta($post->ID, 'contact_stat_2_number', true);
    $contact_stat_2_label = get_post_meta($post->ID, 'contact_stat_2_label', true);
    $contact_stat_3_number = get_post_meta($post->ID, 'contact_stat_3_number', true);
    $contact_stat_3_label = get_post_meta($post->ID, 'contact_stat_3_label', true);
    $contact_stat_4_number = get_post_meta($post->ID, 'contact_stat_4_number', true);
    $contact_stat_4_label = get_post_meta($post->ID, 'contact_stat_4_label', true);
    $contact_testimonial_quote = get_post_meta($post->ID, 'contact_testimonial_quote', true);
    $contact_testimonial_author = get_post_meta($post->ID, 'contact_testimonial_author', true);
    $contact_testimonial_position = get_post_meta($post->ID, 'contact_testimonial_position', true);
    $contact_final_cta_heading = get_post_meta($post->ID, 'contact_final_cta_heading', true);
    $contact_final_cta_description = get_post_meta($post->ID, 'contact_final_cta_description', true);
    $contact_final_cta_phone_text = get_post_meta($post->ID, 'contact_final_cta_phone_text', true);
    $contact_final_cta_email_text = get_post_meta($post->ID, 'contact_final_cta_email_text', true);
    $contact_final_cta_guarantee = get_post_meta($post->ID, 'contact_final_cta_guarantee', true);
      // Set defaults if empty
    if (empty($contact_hero_heading)) $contact_hero_heading = 'Get In Touch with <span class="text-gradient">Digital Marketing Experts</span>';
    if (empty($contact_hero_subtitle)) $contact_hero_subtitle = 'Ready to transform your business? Let\'s discuss your digital marketing goals and create a strategy that delivers measurable results.';
    if (empty($contact_hero_badge)) $contact_hero_badge = 'LOCATED IN BIRMINGHAM\'S BUSINESS DISTRICT';
    if (empty($contact_phone)) $contact_phone = '+44 121 285 8490';
    if (empty($contact_phone_label)) $contact_phone_label = 'Call Us Now';
    if (empty($contact_email)) $contact_email = 'hello@aimpro.co.uk';
    if (empty($contact_email_label)) $contact_email_label = 'Email Us';
    if (empty($contact_hours)) $contact_hours = 'Mon-Fri: 9AM-6PM';
    if (empty($contact_hours_label)) $contact_hours_label = 'Business Hours';
    if (empty($contact_form_title)) $contact_form_title = 'Send Us a Message';
    if (empty($contact_form_subtitle)) $contact_form_subtitle = 'Fill out the form below and we\'ll get back to you within 24 hours with a customized strategy for your business.';
    if (empty($contact_form_submit_text)) $contact_form_submit_text = 'Submit';
    if (empty($contact_form_name_label)) $contact_form_name_label = 'Name *';
    if (empty($contact_form_email_label)) $contact_form_email_label = 'Email *';
    if (empty($contact_form_phone_label)) $contact_form_phone_label = 'Phone';
    if (empty($contact_form_referral_label)) $contact_form_referral_label = 'Where did you find us?';
    if (empty($contact_form_query_label)) $contact_form_query_label = 'Query';
    if (empty($contact_form_query_placeholder)) $contact_form_query_placeholder = 'Tell us about your inquiry...';
    if (empty($contact_office_heading)) $contact_office_heading = 'Come See Us... We\'re a REAL Company with Real Humans';
    if (empty($contact_office_description)) $contact_office_description = 'Let\'s discuss your project over a coffee. Book a time to visit our Birmingham office and meet the team behind your marketing success.';
    if (empty($contact_office_location)) $contact_office_location = 'Our Birmingham Office';
    if (empty($contact_office_building)) $contact_office_building = '55 Colmore Row';
    if (empty($contact_office_address)) $contact_office_address = '55 Colmore Row, Birmingham B3 2AA';
    if (empty($contact_office_district)) $contact_office_district = 'Right in the heart of Birmingham\'s business district';
    if (empty($contact_office_cta_text)) $contact_office_cta_text = 'BOOK A COFFEE MEETING';
    if (empty($contact_faq_heading)) $contact_faq_heading = 'Frequently Asked Questions';
    if (empty($contact_faq_subtitle)) $contact_faq_subtitle = 'Quick answers to common questions about working with our digital marketing agency.';
    if (empty($contact_social_proof_heading)) $contact_social_proof_heading = 'Join 200+ Businesses That Trust Aimpro';
    if (empty($contact_social_proof_subtitle)) $contact_social_proof_subtitle = 'From startups to established enterprises, we\'ve helped businesses across industries achieve their digital marketing goals.';
    if (empty($contact_stat_1_number)) $contact_stat_1_number = '500%';
    if (empty($contact_stat_1_label)) $contact_stat_1_label = 'Average Lead Increase';
    if (empty($contact_stat_2_number)) $contact_stat_2_number = '£2.4M+';
    if (empty($contact_stat_2_label)) $contact_stat_2_label = 'Revenue Generated';
    if (empty($contact_stat_3_number)) $contact_stat_3_number = '98%';
    if (empty($contact_stat_3_label)) $contact_stat_3_label = 'Client Satisfaction';
    if (empty($contact_stat_4_number)) $contact_stat_4_number = '24hr';
    if (empty($contact_stat_4_label)) $contact_stat_4_label = 'Response Time';
    if (empty($contact_testimonial_quote)) $contact_testimonial_quote = 'Aimpro transformed our digital presence completely. Within 6 months, we saw a 340% increase in qualified leads and our revenue doubled. Their team truly understands both the technical and strategic aspects of digital marketing.';
    if (empty($contact_testimonial_author)) $contact_testimonial_author = 'Sarah Johnson';
    if (empty($contact_testimonial_position)) $contact_testimonial_position = 'Marketing Director, TechFlow Solutions';
    if (empty($contact_final_cta_heading)) $contact_final_cta_heading = 'Ready to <span class="text-gradient">Transform Your Digital Marketing?</span>';
    if (empty($contact_final_cta_description)) $contact_final_cta_description = 'Don\'t let your competitors get ahead. Schedule a free consultation today and discover how we can help you achieve your business goals with proven digital marketing strategies.';
    if (empty($contact_final_cta_phone_text)) $contact_final_cta_phone_text = 'Call Now: +44 121 285 8490';
    if (empty($contact_final_cta_email_text)) $contact_final_cta_email_text = 'Send Email';
    if (empty($contact_final_cta_guarantee)) $contact_final_cta_guarantee = 'Free Consultation • No Obligation • Immediate Value';
    
    ?>
    <style>
    .aimpro-contact-meta .form-table th {
        width: 200px;
        font-weight: 600;
    }
    .aimpro-contact-meta .form-table td {
        padding: 15px 10px;
    }
    .aimpro-contact-meta input[type="text"],
    .aimpro-contact-meta textarea {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .aimpro-contact-meta textarea {
        min-height: 80px;
        resize: vertical;
    }
    .aimpro-contact-meta .description {
        font-style: italic;
        color: #666;
        margin-top: 5px;
    }
    .aimpro-contact-section {
        margin-bottom: 30px;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 5px;
    }
    .aimpro-contact-section h4 {
        margin: 0 0 15px 0;
        padding: 0;
        color: #333;
        border-bottom: 2px solid #0073aa;
        padding-bottom: 10px;
    }
    </style>
    
    <div class="aimpro-contact-meta">
        <p><strong>Edit the content for your Contact page below:</strong></p>
          <!-- Hero Section -->
        <div class="aimpro-contact-section">
            <h4>🎯 Hero Section</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="contact_hero_badge">Hero Badge</label>
                    </th>
                    <td>
                        <input type="text" id="contact_hero_badge" name="contact_hero_badge" value="<?php echo esc_attr($contact_hero_badge); ?>" />
                        <p class="description">Small text above the main heading (e.g., "LOCATED IN BIRMINGHAM'S BUSINESS DISTRICT").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_hero_heading">Hero Heading</label>
                    </th>
                    <td>
                        <textarea id="contact_hero_heading" name="contact_hero_heading" rows="2"><?php echo esc_textarea($contact_hero_heading); ?></textarea>
                        <p class="description">HTML allowed. Use &lt;span class="text-gradient"&gt; for gradient text.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_hero_subtitle">Hero Subtitle</label>
                    </th>
                    <td>
                        <textarea id="contact_hero_subtitle" name="contact_hero_subtitle" rows="3"><?php echo esc_textarea($contact_hero_subtitle); ?></textarea>
                        <p class="description">Descriptive text shown below the main heading.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Contact Information -->
        <div class="aimpro-contact-section">
            <h4>📞 Contact Information Cards</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="contact_phone_label">Phone Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_phone_label" name="contact_phone_label" value="<?php echo esc_attr($contact_phone_label); ?>" />
                        <p class="description">Label above phone number (e.g., "Call Us Now").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_phone">Phone Number</label>
                    </th>
                    <td>
                        <input type="text" id="contact_phone" name="contact_phone" value="<?php echo esc_attr($contact_phone); ?>" />
                        <p class="description">Your main contact phone number.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_email_label">Email Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_email_label" name="contact_email_label" value="<?php echo esc_attr($contact_email_label); ?>" />
                        <p class="description">Label above email address (e.g., "Email Us").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_email">Email Address</label>
                    </th>
                    <td>
                        <input type="email" id="contact_email" name="contact_email" value="<?php echo esc_attr($contact_email); ?>" />
                        <p class="description">Your main contact email address.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_hours_label">Business Hours Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_hours_label" name="contact_hours_label" value="<?php echo esc_attr($contact_hours_label); ?>" />
                        <p class="description">Label above business hours (e.g., "Business Hours").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_hours">Business Hours</label>
                    </th>
                    <td>
                        <input type="text" id="contact_hours" name="contact_hours" value="<?php echo esc_attr($contact_hours); ?>" />
                        <p class="description">Your business operating hours.</p>
                    </td>
                </tr>
            </table>
        </div>
          <!-- Contact Form -->
        <div class="aimpro-contact-section">
            <h4>📝 Contact Form Section</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="contact_form_title">Form Title</label>
                    </th>
                    <td>
                        <input type="text" id="contact_form_title" name="contact_form_title" value="<?php echo esc_attr($contact_form_title); ?>" />
                        <p class="description">Main heading for the contact form section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_form_subtitle">Form Subtitle</label>
                    </th>
                    <td>
                        <textarea id="contact_form_subtitle" name="contact_form_subtitle" rows="3"><?php echo esc_textarea($contact_form_subtitle); ?></textarea>
                        <p class="description">Description text shown above the contact form.</p>
                    </td>
                </tr>                <tr>
                    <th scope="row">
                        <label for="contact_form_submit_text">Submit Button Text</label>
                    </th>
                    <td>
                        <input type="text" id="contact_form_submit_text" name="contact_form_submit_text" value="<?php echo esc_attr($contact_form_submit_text); ?>" />
                        <p class="description">Text displayed on the form submit button.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_form_name_label">Name Field Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_form_name_label" name="contact_form_name_label" value="<?php echo esc_attr($contact_form_name_label); ?>" />
                        <p class="description">Label for the name input field.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_form_email_label">Email Field Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_form_email_label" name="contact_form_email_label" value="<?php echo esc_attr($contact_form_email_label); ?>" />
                        <p class="description">Label for the email input field.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_form_phone_label">Phone Field Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_form_phone_label" name="contact_form_phone_label" value="<?php echo esc_attr($contact_form_phone_label); ?>" />
                        <p class="description">Label for the phone input field.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_form_referral_label">Referral Field Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_form_referral_label" name="contact_form_referral_label" value="<?php echo esc_attr($contact_form_referral_label); ?>" />
                        <p class="description">Label for the referral dropdown field.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_form_query_label">Query Field Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_form_query_label" name="contact_form_query_label" value="<?php echo esc_attr($contact_form_query_label); ?>" />
                        <p class="description">Label for the query textarea field.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_form_query_placeholder">Query Field Placeholder</label>
                    </th>
                    <td>
                        <input type="text" id="contact_form_query_placeholder" name="contact_form_query_placeholder" value="<?php echo esc_attr($contact_form_query_placeholder); ?>" />
                        <p class="description">Placeholder text for the query textarea field.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Office/Visit Section -->
        <div class="aimpro-contact-section">
            <h4>🏢 Office Visit Section</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="contact_office_heading">Office Section Heading</label>
                    </th>
                    <td>
                        <textarea id="contact_office_heading" name="contact_office_heading" rows="2"><?php echo esc_textarea($contact_office_heading); ?></textarea>
                        <p class="description">Main heading for the office visit section. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_office_description">Office Description</label>
                    </th>
                    <td>
                        <textarea id="contact_office_description" name="contact_office_description" rows="3"><?php echo esc_textarea($contact_office_description); ?></textarea>
                        <p class="description">Description text about visiting your office.</p>
                    </td>
                </tr>                <tr>
                    <th scope="row">
                        <label for="contact_office_address">Office Address & Details</label>
                    </th>
                    <td>
                        <textarea id="contact_office_address" name="contact_office_address" rows="3"><?php echo esc_textarea($contact_office_address); ?></textarea>
                        <p class="description">Full office address and location details.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_office_location">Office Location Name</label>
                    </th>
                    <td>
                        <input type="text" id="contact_office_location" name="contact_office_location" value="<?php echo esc_attr($contact_office_location); ?>" />
                        <p class="description">Name/title of the office location (e.g., "Our Birmingham Office").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_office_building">Office Building</label>
                    </th>
                    <td>
                        <input type="text" id="contact_office_building" name="contact_office_building" value="<?php echo esc_attr($contact_office_building); ?>" />
                        <p class="description">Building name or number (e.g., "55 Colmore Row").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_office_district">Office District Description</label>
                    </th>
                    <td>
                        <input type="text" id="contact_office_district" name="contact_office_district" value="<?php echo esc_attr($contact_office_district); ?>" />
                        <p class="description">Description of the area/district where the office is located.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_office_cta_text">Office CTA Button Text</label>
                    </th>
                    <td>
                        <input type="text" id="contact_office_cta_text" name="contact_office_cta_text" value="<?php echo esc_attr($contact_office_cta_text); ?>" />
                        <p class="description">Text for the "book a meeting" button.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- FAQ Section -->
        <div class="aimpro-contact-section">
            <h4>❓ FAQ Section</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="contact_faq_heading">FAQ Section Heading</label>
                    </th>
                    <td>
                        <input type="text" id="contact_faq_heading" name="contact_faq_heading" value="<?php echo esc_attr($contact_faq_heading); ?>" />
                        <p class="description">Main heading for the FAQ section.</p>
                    </td>
                </tr>                <tr>
                    <th scope="row">
                        <label for="contact_faq_subtitle">FAQ Subtitle</label>
                    </th>
                    <td>
                        <textarea id="contact_faq_subtitle" name="contact_faq_subtitle" rows="2"><?php echo esc_textarea($contact_faq_subtitle); ?></textarea>
                        <p class="description">Description text below the FAQ heading.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_1_question">FAQ 1 - Question</label>
                    </th>
                    <td>
                        <input type="text" id="contact_faq_1_question" name="contact_faq_1_question" value="<?php echo esc_attr(get_post_meta($post->ID, 'contact_faq_1_question', true) ?: 'How quickly can you start working on my project?'); ?>" />
                        <p class="description">First FAQ question.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_1_answer">FAQ 1 - Answer</label>
                    </th>
                    <td>
                        <textarea id="contact_faq_1_answer" name="contact_faq_1_answer" rows="3"><?php echo esc_textarea(get_post_meta($post->ID, 'contact_faq_1_answer', true) ?: 'We can typically begin new projects within 1-2 weeks of our initial consultation. For urgent requirements, we offer expedited onboarding within 48-72 hours.'); ?></textarea>
                        <p class="description">First FAQ answer.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_2_question">FAQ 2 - Question</label>
                    </th>
                    <td>
                        <input type="text" id="contact_faq_2_question" name="contact_faq_2_question" value="<?php echo esc_attr(get_post_meta($post->ID, 'contact_faq_2_question', true) ?: 'Do you work with businesses outside Birmingham?'); ?>" />
                        <p class="description">Second FAQ question.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_2_answer">FAQ 2 - Answer</label>
                    </th>
                    <td>
                        <textarea id="contact_faq_2_answer" name="contact_faq_2_answer" rows="3"><?php echo esc_textarea(get_post_meta($post->ID, 'contact_faq_2_answer', true) ?: 'Absolutely! While we\'re based in Birmingham, we work with clients across the UK and internationally. Most of our services are delivered remotely with regular video calls and reports.'); ?></textarea>
                        <p class="description">Second FAQ answer.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_3_question">FAQ 3 - Question</label>
                    </th>
                    <td>
                        <input type="text" id="contact_faq_3_question" name="contact_faq_3_question" value="<?php echo esc_attr(get_post_meta($post->ID, 'contact_faq_3_question', true) ?: 'What\'s included in your free consultation?'); ?>" />
                        <p class="description">Third FAQ question.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_3_answer">FAQ 3 - Answer</label>
                    </th>
                    <td>
                        <textarea id="contact_faq_3_answer" name="contact_faq_3_answer" rows="3"><?php echo esc_textarea(get_post_meta($post->ID, 'contact_faq_3_answer', true) ?: 'Our free consultation includes a comprehensive audit of your current digital marketing, competitive analysis, and a customized strategy recommendation with projected ROI.'); ?></textarea>
                        <p class="description">Third FAQ answer.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_4_question">FAQ 4 - Question</label>
                    </th>
                    <td>
                        <input type="text" id="contact_faq_4_question" name="contact_faq_4_question" value="<?php echo esc_attr(get_post_meta($post->ID, 'contact_faq_4_question', true) ?: 'Do you require long-term contracts?'); ?>" />
                        <p class="description">Fourth FAQ question.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_4_answer">FAQ 4 - Answer</label>
                    </th>
                    <td>
                        <textarea id="contact_faq_4_answer" name="contact_faq_4_answer" rows="3"><?php echo esc_textarea(get_post_meta($post->ID, 'contact_faq_4_answer', true) ?: 'We prefer to work on monthly rolling contracts for most services, with a minimum 3-month commitment to ensure we can deliver meaningful results. No lengthy lock-ins required.'); ?></textarea>
                        <p class="description">Fourth FAQ answer.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_5_question">FAQ 5 - Question</label>
                    </th>
                    <td>
                        <input type="text" id="contact_faq_5_question" name="contact_faq_5_question" value="<?php echo esc_attr(get_post_meta($post->ID, 'contact_faq_5_question', true) ?: 'Can you help with both B2B and B2C marketing?'); ?>" />
                        <p class="description">Fifth FAQ question.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_5_answer">FAQ 5 - Answer</label>
                    </th>
                    <td>
                        <textarea id="contact_faq_5_answer" name="contact_faq_5_answer" rows="3"><?php echo esc_textarea(get_post_meta($post->ID, 'contact_faq_5_answer', true) ?: 'Yes! Our team has extensive experience in both B2B and B2C marketing across various industries including SaaS, e-commerce, professional services, and retail.'); ?></textarea>
                        <p class="description">Fifth FAQ answer.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_6_question">FAQ 6 - Question</label>
                    </th>
                    <td>
                        <input type="text" id="contact_faq_6_question" name="contact_faq_6_question" value="<?php echo esc_attr(get_post_meta($post->ID, 'contact_faq_6_question', true) ?: 'What results can I expect and how quickly?'); ?>" />
                        <p class="description">Sixth FAQ question.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_faq_6_answer">FAQ 6 - Answer</label>
                    </th>
                    <td>
                        <textarea id="contact_faq_6_answer" name="contact_faq_6_answer" rows="3"><?php echo esc_textarea(get_post_meta($post->ID, 'contact_faq_6_answer', true) ?: 'Most clients see initial improvements within 30-60 days, with significant results typically achieved within 3-6 months. We provide detailed monthly reports showing your progress and ROI.'); ?></textarea>
                        <p class="description">Sixth FAQ answer.</p>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Social Proof Section -->
        <div class="aimpro-contact-section">
            <h4>🏆 Social Proof Section</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="contact_social_proof_heading">Social Proof Heading</label>
                    </th>
                    <td>
                        <input type="text" id="contact_social_proof_heading" name="contact_social_proof_heading" value="<?php echo esc_attr($contact_social_proof_heading); ?>" />
                        <p class="description">Main heading for the social proof section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_social_proof_subtitle">Social Proof Subtitle</label>
                    </th>
                    <td>
                        <textarea id="contact_social_proof_subtitle" name="contact_social_proof_subtitle" rows="2"><?php echo esc_textarea($contact_social_proof_subtitle); ?></textarea>
                        <p class="description">Description text for the social proof section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_stat_1_number">Stat 1 - Number</label>
                    </th>
                    <td>
                        <input type="text" id="contact_stat_1_number" name="contact_stat_1_number" value="<?php echo esc_attr($contact_stat_1_number); ?>" />
                        <p class="description">First statistic number (e.g., "500%").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_stat_1_label">Stat 1 - Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_stat_1_label" name="contact_stat_1_label" value="<?php echo esc_attr($contact_stat_1_label); ?>" />
                        <p class="description">First statistic description.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_stat_2_number">Stat 2 - Number</label>
                    </th>
                    <td>
                        <input type="text" id="contact_stat_2_number" name="contact_stat_2_number" value="<?php echo esc_attr($contact_stat_2_number); ?>" />
                        <p class="description">Second statistic number (e.g., "£2.4M+").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_stat_2_label">Stat 2 - Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_stat_2_label" name="contact_stat_2_label" value="<?php echo esc_attr($contact_stat_2_label); ?>" />
                        <p class="description">Second statistic description.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_stat_3_number">Stat 3 - Number</label>
                    </th>
                    <td>
                        <input type="text" id="contact_stat_3_number" name="contact_stat_3_number" value="<?php echo esc_attr($contact_stat_3_number); ?>" />
                        <p class="description">Third statistic number (e.g., "98%").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_stat_3_label">Stat 3 - Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_stat_3_label" name="contact_stat_3_label" value="<?php echo esc_attr($contact_stat_3_label); ?>" />
                        <p class="description">Third statistic description.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_stat_4_number">Stat 4 - Number</label>
                    </th>
                    <td>
                        <input type="text" id="contact_stat_4_number" name="contact_stat_4_number" value="<?php echo esc_attr($contact_stat_4_number); ?>" />
                        <p class="description">Fourth statistic number (e.g., "24hr").</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_stat_4_label">Stat 4 - Label</label>
                    </th>
                    <td>
                        <input type="text" id="contact_stat_4_label" name="contact_stat_4_label" value="<?php echo esc_attr($contact_stat_4_label); ?>" />
                        <p class="description">Fourth statistic description.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_testimonial_quote">Testimonial Quote</label>
                    </th>
                    <td>
                        <textarea id="contact_testimonial_quote" name="contact_testimonial_quote" rows="4"><?php echo esc_textarea($contact_testimonial_quote); ?></textarea>
                        <p class="description">Client testimonial quote text.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_testimonial_author">Testimonial Author</label>
                    </th>
                    <td>
                        <input type="text" id="contact_testimonial_author" name="contact_testimonial_author" value="<?php echo esc_attr($contact_testimonial_author); ?>" />
                        <p class="description">Name of the person giving the testimonial.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_testimonial_position">Testimonial Position</label>
                    </th>
                    <td>
                        <input type="text" id="contact_testimonial_position" name="contact_testimonial_position" value="<?php echo esc_attr($contact_testimonial_position); ?>" />
                        <p class="description">Job title and company of testimonial author.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Final CTA Section -->
        <div class="aimpro-contact-section">
            <h4>🎯 Final Call-to-Action</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="contact_final_cta_heading">Final CTA Heading</label>
                    </th>
                    <td>
                        <textarea id="contact_final_cta_heading" name="contact_final_cta_heading" rows="2"><?php echo esc_textarea($contact_final_cta_heading); ?></textarea>
                        <p class="description">Main heading for the final CTA section. HTML allowed for gradient text.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_final_cta_description">Final CTA Description</label>
                    </th>
                    <td>
                        <textarea id="contact_final_cta_description" name="contact_final_cta_description" rows="4"><?php echo esc_textarea($contact_final_cta_description); ?></textarea>
                        <p class="description">Description text for the final call-to-action section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_final_cta_phone_text">Phone CTA Button Text</label>
                    </th>
                    <td>
                        <input type="text" id="contact_final_cta_phone_text" name="contact_final_cta_phone_text" value="<?php echo esc_attr($contact_final_cta_phone_text); ?>" />
                        <p class="description">Text for the phone call button.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="contact_final_cta_email_text">Email CTA Button Text</label>
                    </th>
                    <td>
                        <input type="text" id="contact_final_cta_email_text" name="contact_final_cta_email_text" value="<?php echo esc_attr($contact_final_cta_email_text); ?>" />
                        <p class="description">Text for the email button.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <div style="background: #e7f3ff; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <p><strong>💡 How to use these fields:</strong></p>
            <p>These values are accessed in your template using: <code>&lt;?php echo aimpro_get_field('field_name', 'Fallback Value'); ?&gt;</code></p>
            <p>After saving, the content will appear on your Contact page immediately.</p>
        </div>
    </div>
    <?php
}

/**
 * Save Contact Page Meta Fields
 */
add_action('save_post', 'aimpro_save_contact_meta_fields');
function aimpro_save_contact_meta_fields($post_id) {
    // Verify nonce
    if (!isset($_POST['aimpro_contact_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_contact_meta_nonce'], 'aimpro_contact_meta_nonce')) {
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
    }    // Define the fields to save
    $contact_fields = array(
        'contact_hero_heading',
        'contact_hero_subtitle',
        'contact_hero_badge',
        'contact_phone',
        'contact_phone_label',
        'contact_email',
        'contact_email_label',
        'contact_hours',
        'contact_hours_label',
        'contact_form_title',
        'contact_form_subtitle',
        'contact_form_submit_text',
        'contact_form_name_label',
        'contact_form_email_label',
        'contact_form_phone_label',
        'contact_form_referral_label',
        'contact_form_query_label',
        'contact_form_query_placeholder',
        'contact_office_heading',
        'contact_office_description',
        'contact_office_location',
        'contact_office_building',
        'contact_office_address',
        'contact_office_district',
        'contact_office_cta_text',
        'contact_faq_heading',
        'contact_faq_subtitle',
        'contact_faq_1_question',
        'contact_faq_1_answer',
        'contact_faq_2_question',
        'contact_faq_2_answer',
        'contact_faq_3_question',
        'contact_faq_3_answer',
        'contact_faq_4_question',
        'contact_faq_4_answer',
        'contact_faq_5_question',
        'contact_faq_5_answer',
        'contact_faq_6_question',
        'contact_faq_6_answer',
        'contact_social_proof_heading',
        'contact_social_proof_subtitle',
        'contact_stat_1_number',
        'contact_stat_1_label',
        'contact_stat_2_number',
        'contact_stat_2_label',
        'contact_stat_3_number',
        'contact_stat_3_label',
        'contact_stat_4_number',
        'contact_stat_4_label',
        'contact_testimonial_quote',
        'contact_testimonial_author',
        'contact_testimonial_position',
        'contact_final_cta_heading',
        'contact_final_cta_description',
        'contact_final_cta_phone_text',
        'contact_final_cta_email_text',
        'contact_final_cta_guarantee'
    );
    
    // Save each field
    foreach ($contact_fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];            // Sanitize based on field type
            if (in_array($field, array('contact_hero_heading', 'contact_hero_subtitle', 'contact_form_subtitle', 'contact_office_heading', 'contact_office_description', 'contact_final_cta_heading', 'contact_final_cta_description', 'contact_faq_subtitle', 'contact_social_proof_subtitle', 'contact_testimonial_quote'))) {
                // Allow HTML for certain fields
                $value = wp_kses_post($value);
            } elseif (in_array($field, array('contact_faq_1_answer', 'contact_faq_2_answer', 'contact_faq_3_answer', 'contact_faq_4_answer', 'contact_faq_5_answer', 'contact_faq_6_answer'))) {
                // FAQ answers - allow basic HTML
                $value = wp_kses_post($value);
            } elseif ($field === 'contact_email') {
                // Sanitize email
                $value = sanitize_email($value);
            } else {
                // Regular text fields
                $value = sanitize_text_field($value);
            }
            
            // Save to post meta
            update_post_meta($post_id, $field, $value);
        }
    }
}

// Contact Meta integration complete
// The enhanced aimpro_get_field() function in functions.php
// now automatically checks post meta for contact fields
