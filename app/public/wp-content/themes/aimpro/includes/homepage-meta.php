<?php
/**
 * Homepage Meta Fields
 * Adds custom fields for homepage content management
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add meta box for homepage settings
add_action('add_meta_boxes', 'aimpro_add_homepage_meta_box');
add_action('save_post', 'aimpro_save_homepage_meta');

function aimpro_add_homepage_meta_box() {
    // Add meta box to pages - only show on homepage
    add_meta_box(
        'aimpro_homepage_meta',
        'Homepage Content Settings',
        'aimpro_homepage_meta_callback',
        'page',
        'normal',
        'low'  // Changed from 'high' to 'low' to put it at bottom
    );
}

function aimpro_homepage_meta_callback($post) {
    // Only show homepage fields for pages using the default template
    $page_template = get_page_template_slug($post->ID);
    
    if (!empty($page_template)) {
        echo '<p><strong>Homepage Content Settings</strong></p>';
        echo '<p>These settings only appear on pages using the "Default template". This page is currently using a custom template.</p>';
        echo '<p>To use homepage settings, change the template to "Default template" in the Page Attributes panel.</p>';
        return;
    }
    
    // Add nonce field for security
    wp_nonce_field('aimpro_homepage_meta_nonce', 'aimpro_homepage_meta_nonce_field');
    
    // Get current values
    $hero_badge_text = get_post_meta($post->ID, 'hero_badge_text', true);
    $hero_title = get_post_meta($post->ID, 'hero_title', true);
    $hero_strapline_1 = get_post_meta($post->ID, 'hero_strapline_1', true);
    $hero_strapline_2 = get_post_meta($post->ID, 'hero_strapline_2', true);
    $hero_strapline_3 = get_post_meta($post->ID, 'hero_strapline_3', true);
    $hero_strapline_4 = get_post_meta($post->ID, 'hero_strapline_4', true);
    $hero_subtitle = get_post_meta($post->ID, 'hero_subtitle', true);
    $hero_primary_cta_text = get_post_meta($post->ID, 'hero_primary_cta_text', true);
    $hero_primary_cta_url = get_post_meta($post->ID, 'hero_primary_cta_url', true);
    
    // Value Statement
    $value_statement_title = get_post_meta($post->ID, 'value_statement_title', true);
    $value_statement_description = get_post_meta($post->ID, 'value_statement_description', true);
    $value_statement_cta_text = get_post_meta($post->ID, 'value_statement_cta_text', true);
    $value_statement_cta_url = get_post_meta($post->ID, 'value_statement_cta_url', true);
    
    // Stats
    $stat_1_number = get_post_meta($post->ID, 'stat_1_number', true);
    $stat_1_label = get_post_meta($post->ID, 'stat_1_label', true);
    $stat_2_number = get_post_meta($post->ID, 'stat_2_number', true);
    $stat_2_label = get_post_meta($post->ID, 'stat_2_label', true);
    $stat_3_number = get_post_meta($post->ID, 'stat_3_number', true);
    $stat_3_label = get_post_meta($post->ID, 'stat_3_label', true);
    $stat_4_number = get_post_meta($post->ID, 'stat_4_number', true);
    $stat_4_label = get_post_meta($post->ID, 'stat_4_label', true);
    
    // Services
    $services_title = get_post_meta($post->ID, 'services_title', true);
    $services_subtitle = get_post_meta($post->ID, 'services_subtitle', true);
    
    // Lead Magnet
    $lead_magnet_title = get_post_meta($post->ID, 'lead_magnet_title', true);
    $lead_magnet_subtitle = get_post_meta($post->ID, 'lead_magnet_subtitle', true);
    $lead_magnet_ebook_title = get_post_meta($post->ID, 'lead_magnet_ebook_title', true);
    $lead_magnet_ebook_description = get_post_meta($post->ID, 'lead_magnet_ebook_description', true);
    $lead_magnet_form_title = get_post_meta($post->ID, 'lead_magnet_form_title', true);
    $lead_magnet_form_subtitle = get_post_meta($post->ID, 'lead_magnet_form_subtitle', true);
    
    // Office Visit
    $office_title = get_post_meta($post->ID, 'office_title', true);
    $office_description = get_post_meta($post->ID, 'office_description', true);
    $coffee_meeting_url = get_post_meta($post->ID, 'coffee_meeting_url', true);
    $office_address_title = get_post_meta($post->ID, 'office_address_title', true);
    $office_address = get_post_meta($post->ID, 'office_address', true);
    $about_page_url = get_post_meta($post->ID, 'about_page_url', true);
    $team_section_url = get_post_meta($post->ID, 'team_section_url', true);
    $company_page_url = get_post_meta($post->ID, 'company_page_url', true);
    
    // Blog Section
    $blog_title = get_post_meta($post->ID, 'blog_title', true);
    $blog_subtitle = get_post_meta($post->ID, 'blog_subtitle', true);
    $blog_cta_text = get_post_meta($post->ID, 'blog_cta_text', true);
    $blog_cta_url = get_post_meta($post->ID, 'blog_cta_url', true);
    
    // Homepage Blog Posts
    $homepage_blog_1_image = get_post_meta($post->ID, 'homepage_blog_1_image', true);
    $homepage_blog_1_date = get_post_meta($post->ID, 'homepage_blog_1_date', true);
    $homepage_blog_1_category = get_post_meta($post->ID, 'homepage_blog_1_category', true);
    $homepage_blog_1_title = get_post_meta($post->ID, 'homepage_blog_1_title', true);
    $homepage_blog_1_excerpt = get_post_meta($post->ID, 'homepage_blog_1_excerpt', true);
    $homepage_blog_1_url = get_post_meta($post->ID, 'homepage_blog_1_url', true);
    
    $homepage_blog_2_image = get_post_meta($post->ID, 'homepage_blog_2_image', true);
    $homepage_blog_2_date = get_post_meta($post->ID, 'homepage_blog_2_date', true);
    $homepage_blog_2_category = get_post_meta($post->ID, 'homepage_blog_2_category', true);
    $homepage_blog_2_title = get_post_meta($post->ID, 'homepage_blog_2_title', true);
    $homepage_blog_2_excerpt = get_post_meta($post->ID, 'homepage_blog_2_excerpt', true);
    $homepage_blog_2_url = get_post_meta($post->ID, 'homepage_blog_2_url', true);
    
    $homepage_blog_3_image = get_post_meta($post->ID, 'homepage_blog_3_image', true);
    $homepage_blog_3_date = get_post_meta($post->ID, 'homepage_blog_3_date', true);
    $homepage_blog_3_category = get_post_meta($post->ID, 'homepage_blog_3_category', true);
    $homepage_blog_3_title = get_post_meta($post->ID, 'homepage_blog_3_title', true);
    $homepage_blog_3_excerpt = get_post_meta($post->ID, 'homepage_blog_3_excerpt', true);
    $homepage_blog_3_url = get_post_meta($post->ID, 'homepage_blog_3_url', true);
    
    // Final CTA
    $final_cta_title = get_post_meta($post->ID, 'final_cta_title', true);
    $final_cta_description = get_post_meta($post->ID, 'final_cta_description', true);
    
    // Newsletter
    $newsletter_title = get_post_meta($post->ID, 'newsletter_title', true);
    $newsletter_subtitle = get_post_meta($post->ID, 'newsletter_subtitle', true);
    
    // Team Section
    $team_section_title = get_post_meta($post->ID, 'team_section_title', true);
    $team_section_subtitle = get_post_meta($post->ID, 'team_section_subtitle', true);
    $team_cta_text = get_post_meta($post->ID, 'team_cta_text', true);
    $team_cta_url = get_post_meta($post->ID, 'team_cta_url', true);
    
    // Testimonials Section
    $testimonials_badge = get_post_meta($post->ID, 'testimonials_badge', true);
    $testimonials_title = get_post_meta($post->ID, 'testimonials_title', true);
    $testimonials_subtitle = get_post_meta($post->ID, 'testimonials_subtitle', true);
    $testimonials_cta_text = get_post_meta($post->ID, 'testimonials_cta_text', true);
    $testimonials_cta_url = get_post_meta($post->ID, 'testimonials_cta_url', true);
    
    // Testimonials Stats
    $testimonials_stat_1_number = get_post_meta($post->ID, 'testimonials_stat_1_number', true);
    $testimonials_stat_1_label = get_post_meta($post->ID, 'testimonials_stat_1_label', true);
    $testimonials_stat_2_number = get_post_meta($post->ID, 'testimonials_stat_2_number', true);
    $testimonials_stat_2_label = get_post_meta($post->ID, 'testimonials_stat_2_label', true);
    $testimonials_stat_3_number = get_post_meta($post->ID, 'testimonials_stat_3_number', true);
    $testimonials_stat_3_label = get_post_meta($post->ID, 'testimonials_stat_3_label', true);
    
    // Service Tags
    $service_tags = get_post_meta($post->ID, 'service_tags', true);
    if (!is_array($service_tags)) {
        $service_tags = array(
            array('text' => 'SEO', 'url' => '/seo-services'),
            array('text' => 'PPC', 'url' => '/google-ads'),
            array('text' => 'Social Media', 'url' => '/meta-ads'),
            array('text' => 'Website', 'url' => '/website-design'),
            array('text' => 'Ads', 'url' => '/retargeting-display'),
            array('text' => 'Email', 'url' => '/email-campaigns'),
            array('text' => 'AI Automation', 'url' => '/ai-crm-setup'),
            array('text' => 'CRM', 'url' => '/ai-crm-setup'),
            array('text' => 'Google Ads', 'url' => '/google-ads'),
            array('text' => 'SMS', 'url' => '/sms-marketing'),
            array('text' => 'Chatbot', 'url' => '/chatbot-automation'),
            array('text' => 'Funnels', 'url' => '/sales-funnels'),
            array('text' => 'UX/UI', 'url' => '/ux-ui-design'),
        );
    }
    
    ?>
    <style>
        .service-tag-row {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
            align-items: center;
        }
        .service-tag-row input {
            flex: 1;
        }
        .service-tag-row .remove-tag {
            background: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .add-tag-btn {
            background: #0073aa;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
    
    <div class="aimpro-homepage-meta">
        
        <!-- Hero Section -->
        <div>
            <h3>Hero Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="hero_badge_text">Hero Badge Text</label>
                    </th>
                    <td>
                        <input type="text" id="hero_badge_text" name="hero_badge_text" value="<?php echo esc_attr($hero_badge_text ?: 'Award-Winning Digital Agency'); ?>" class="regular-text" />
                        <p class="description">Small badge text above the main heading.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hero_title">Hero Title</label>
                    </th>
                    <td>
                        <?php wp_editor($hero_title ?: '<h1 class="hero-title">Scale Your Business With <span class="curly-underline">PRECISION</span> Digital <span class="highlight-word" style="colour: #f15a25 !important; -webkit-text-fill-colour: #f15a25 !important;">Marketing</span></h1>', 'hero_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main hero title. HTML allowed. Use span classes for styling.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hero_strapline_1">Hero Strapline 1</label>
                    </th>
                    <td>
                        <input type="text" id="hero_strapline_1" name="hero_strapline_1" value="<?php echo esc_attr($hero_strapline_1 ?: 'No Fluff. Just Results.'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hero_strapline_2">Hero Strapline 2</label>
                    </th>
                    <td>
                        <input type="text" id="hero_strapline_2" name="hero_strapline_2" value="<?php echo esc_attr($hero_strapline_2 ?: 'Data-Driven Strategy. Measurable Results.'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hero_strapline_3">Hero Strapline 3</label>
                    </th>
                    <td>
                        <input type="text" id="hero_strapline_3" name="hero_strapline_3" value="<?php echo esc_attr($hero_strapline_3 ?: 'Grow Your Business With Precision Marketing.'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hero_strapline_4">Hero Strapline 4</label>
                    </th>
                    <td>
                        <input type="text" id="hero_strapline_4" name="hero_strapline_4" value="<?php echo esc_attr($hero_strapline_4 ?: 'Your High-ROI Digital Marketing Partner'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hero_subtitle">Hero Subtitle</label>
                    </th>
                    <td>
                        <?php wp_editor($hero_subtitle ?: 'Expert Lead Generation, SEO, PPC & Automation. Data-driven strategies that deliver <strong class="highlight-underline">MEASURABLE RESULTS</strong> and accelerate your <strong class="highlight-word">growth</strong>.', 'hero_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                        <p class="description">Descriptive text below the main heading. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hero_primary_cta_text">Hero CTA Text</label>
                    </th>
                    <td>
                        <input type="text" id="hero_primary_cta_text" name="hero_primary_cta_text" value="<?php echo esc_attr($hero_primary_cta_text ?: 'CLAIM YOUR FREE GROWTH STRATEGY'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hero_primary_cta_url">Hero CTA URL</label>
                    </th>
                    <td>
                        <input type="url" id="hero_primary_cta_url" name="hero_primary_cta_url" value="<?php echo esc_attr($hero_primary_cta_url ?: '#contact'); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Service Tags -->
        <div>
            <h3>Service Tags Strip</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label>Service Tags</label>
                    </th>
                    <td>
                        <div id="service-tags-container">
                            <?php foreach ($service_tags as $index => $tag): ?>
                                <div class="service-tag-row">
                                    <input type="text" name="service_tags[<?php echo $index; ?>][text]" placeholder="Tag Text" value="<?php echo esc_attr($tag['text']); ?>" />
                                    <input type="text" name="service_tags[<?php echo $index; ?>][url]" placeholder="Tag URL" value="<?php echo esc_attr($tag['url']); ?>" />
                                    <button type="button" class="remove-tag" onclick="removeServiceTag(this)">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="add-tag-btn" onclick="addServiceTag()">Add Service Tag</button>
                        <p class="description">Manage the service tags that appear in the scrolling strip.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Value Statement -->
        <div>
            <h3>Value Statement Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="value_statement_title">Value Statement Title</label>
                    </th>
                    <td>
                        <?php wp_editor($value_statement_title ?: 'A Results-Driven Digital Agency Obsessed With Your <span class="highlight curly-underline">SUCCESS</span>', 'value_statement_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main title for the value statement section. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="value_statement_description">Value Statement Description</label>
                    </th>
                    <td>
                        <?php wp_editor($value_statement_description ?: 'We partner with ambitious businesses to transform their digital presence through intelligent strategies and performance-focused marketing. Our proven methodologies deliver quantifiable results that drive exponential growth and maximise your competitive advantage.', 'value_statement_description', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                        <p class="description">Descriptive text for the value statement.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="value_statement_cta_text">Value Statement CTA Text</label>
                    </th>
                    <td>
                        <input type="text" id="value_statement_cta_text" name="value_statement_cta_text" value="<?php echo esc_attr($value_statement_cta_text ?: 'CLAIM YOUR FREE GROWTH AUDIT'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="value_statement_cta_url">Value Statement CTA URL</label>
                    </th>
                    <td>
                        <input type="url" id="value_statement_cta_url" name="value_statement_cta_url" value="<?php echo esc_attr($value_statement_cta_url ?: '#contact'); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Stats Section -->
        <div>
            <h3>Stats Counter Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="stat_1_number">Stat 1 Number</label>
                    </th>
                    <td>
                        <input type="text" id="stat_1_number" name="stat_1_number" value="<?php echo esc_attr($stat_1_number ?: '25'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="stat_1_label">Stat 1 Label</label>
                    </th>
                    <td>
                        <input type="text" id="stat_1_label" name="stat_1_label" value="<?php echo esc_attr($stat_1_label ?: 'Years of Experience'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="stat_2_number">Stat 2 Number</label>
                    </th>
                    <td>
                        <input type="text" id="stat_2_number" name="stat_2_number" value="<?php echo esc_attr($stat_2_number ?: '98'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="stat_2_label">Stat 2 Label</label>
                    </th>
                    <td>
                        <input type="text" id="stat_2_label" name="stat_2_label" value="<?php echo esc_attr($stat_2_label ?: 'Increase in Client Leads'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="stat_3_number">Stat 3 Number</label>
                    </th>
                    <td>
                        <input type="text" id="stat_3_number" name="stat_3_number" value="<?php echo esc_attr($stat_3_number ?: '25'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="stat_3_label">Stat 3 Label</label>
                    </th>
                    <td>
                        <input type="text" id="stat_3_label" name="stat_3_label" value="<?php echo esc_attr($stat_3_label ?: 'Industries Transformed'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="stat_4_number">Stat 4 Number</label>
                    </th>
                    <td>
                        <input type="text" id="stat_4_number" name="stat_4_number" value="<?php echo esc_attr($stat_4_number ?: '199'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="stat_4_label">Stat 4 Label</label>
                    </th>
                    <td>
                        <input type="text" id="stat_4_label" name="stat_4_label" value="<?php echo esc_attr($stat_4_label ?: 'Increase in Conversion Rates'); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Services Section -->
        <div>
            <h3>Services Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="services_title">Services Title</label>
                    </th>
                    <td>
                        <?php wp_editor($services_title ?: 'Premium Digital Marketing Solutions That <span class="highlight curly-underline">DELIVER</span>', 'services_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main title for the services section. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="services_subtitle">Services Subtitle</label>
                    </th>
                    <td>
                        <?php wp_editor($services_subtitle ?: 'Zero fluff. Pure performance. Our integrated marketing ecosystem works seamlessly to transform prospects into profits.', 'services_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Subtitle describing the services section.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Lead Magnet Section -->
        <div>
            <h3>Lead Magnet Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="lead_magnet_title">Lead Magnet Title</label>
                    </th>
                    <td>
                        <?php wp_editor($lead_magnet_title ?: 'Get Our Free Digital Marketing <span class="highlight curly-underline">GUIDE</span>', 'lead_magnet_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main title for the lead magnet section. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="lead_magnet_subtitle">Lead Magnet Subtitle</label>
                    </th>
                    <td>
                        <?php wp_editor($lead_magnet_subtitle ?: 'Download our comprehensive digital marketing guide packed with proven strategies to grow your business.', 'lead_magnet_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Subtitle for the lead magnet section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="lead_magnet_ebook_title">Ebook Title</label>
                    </th>
                    <td>
                        <input type="text" id="lead_magnet_ebook_title" name="lead_magnet_ebook_title" value="<?php echo esc_attr($lead_magnet_ebook_title ?: 'The Ultimate Digital Marketing Playbook'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="lead_magnet_ebook_description">Ebook Description</label>
                    </th>
                    <td>
                        <?php wp_editor($lead_magnet_ebook_description ?: 'Discover the exact strategies we use to help our clients increase leads by 200%+ and dominate their local markets.', 'lead_magnet_ebook_description', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Description of the ebook/guide.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="lead_magnet_form_title">Form Title</label>
                    </th>
                    <td>
                        <input type="text" id="lead_magnet_form_title" name="lead_magnet_form_title" value="<?php echo esc_attr($lead_magnet_form_title ?: 'Get Your Free Digital Marketing Guide'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="lead_magnet_form_subtitle">Form Subtitle</label>
                    </th>
                    <td>
                        <?php wp_editor($lead_magnet_form_subtitle ?: 'Fill out the form below and we\'ll send you our comprehensive guide plus schedule a free consultation.', 'lead_magnet_form_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Subtitle for the form section.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Office Visit Section -->
        <div>
            <h3>Office Visit Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="office_title">Office Title</label>
                    </th>
                    <td>
                        <?php wp_editor($office_title ?: 'Come See Us... We\'re a <span class="highlight curly-underline">REAL</span> Company with Real Humans', 'office_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main title for the office visit section. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="office_description">Office Description</label>
                    </th>
                    <td>
                        <?php wp_editor($office_description ?: 'Let\'s discuss your project over a coffee. Book a time to visit our Birmingham office and meet the team behind your marketing success.', 'office_description', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Description text for the office visit section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="coffee_meeting_url">Coffee Meeting URL</label>
                    </th>
                    <td>
                        <input type="url" id="coffee_meeting_url" name="coffee_meeting_url" value="<?php echo esc_attr($coffee_meeting_url ?: '#contact'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="office_address_title">Office Address Title</label>
                    </th>
                    <td>
                        <input type="text" id="office_address_title" name="office_address_title" value="<?php echo esc_attr($office_address_title ?: 'Our Birmingham Office'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="office_address">Office Address</label>
                    </th>
                    <td>
                        <?php wp_editor($office_address ?: '<p><strong>Located in: 55 Colmore Row</strong><br>Address: 55 Colmore Row, Birmingham B3 2AA<br>Right in the heart of Birmingham\'s business district</p>', 'office_address', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                        <p class="description">Office address details. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="about_page_url">About Page URL</label>
                    </th>
                    <td>
                        <input type="url" id="about_page_url" name="about_page_url" value="<?php echo esc_attr($about_page_url ?: '/about'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="team_section_url">Team Section URL</label>
                    </th>
                    <td>
                        <input type="url" id="team_section_url" name="team_section_url" value="<?php echo esc_attr($team_section_url ?: '#team'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="company_page_url">Company Page URL</label>
                    </th>
                    <td>
                        <input type="url" id="company_page_url" name="company_page_url" value="<?php echo esc_attr($company_page_url ?: '#contact'); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Team Section -->
        <div>
            <h3>Team Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="team_section_title">Team Section Title</label>
                    </th>
                    <td>
                        <?php wp_editor($team_section_title ?: 'Meet The Experts Who Make <span class="highlight curly-underline">MAGIC</span> Happen', 'team_section_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main title for the team section. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="team_section_subtitle">Team Section Subtitle</label>
                    </th>
                    <td>
                        <?php wp_editor($team_section_subtitle ?: 'No faceless agencies here. Our marketing specialists are passionate about client success and personally invested in delivering exceptional results for every business we partner with.', 'team_section_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                        <p class="description">Subtitle for the team section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="team_cta_text">Team CTA Text</label>
                    </th>
                    <td>
                        <input type="text" id="team_cta_text" name="team_cta_text" value="<?php echo esc_attr($team_cta_text ?: 'TALK TO OUR EXPERTS'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="team_cta_url">Team CTA URL</label>
                    </th>
                    <td>
                        <input type="url" id="team_cta_url" name="team_cta_url" value="<?php echo esc_attr($team_cta_url ?: '/contact'); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Testimonials Section -->
        <div>
            <h3>Testimonials Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="testimonials_badge">Testimonials Badge</label>
                    </th>
                    <td>
                        <input type="text" id="testimonials_badge" name="testimonials_badge" value="<?php echo esc_attr($testimonials_badge ?: 'Client Success Stories'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="testimonials_title">Testimonials Title</label>
                    </th>
                    <td>
                        <input type="text" id="testimonials_title" name="testimonials_title" value="<?php echo esc_attr($testimonials_title ?: 'Real Results from Real Businesses'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="testimonials_subtitle">Testimonials Subtitle</label>
                    </th>
                    <td>
                        <?php wp_editor($testimonials_subtitle ?: 'Don\'t just take our word for it. Here\'s what our clients have to say about the transformative results we\'ve delivered for their businesses.', 'testimonials_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Subtitle for the testimonials section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="testimonials_cta_text">Testimonials CTA Text</label>
                    </th>
                    <td>
                        <input type="text" id="testimonials_cta_text" name="testimonials_cta_text" value="<?php echo esc_attr($testimonials_cta_text ?: 'START YOUR SUCCESS STORY'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="testimonials_cta_url">Testimonials CTA URL</label>
                    </th>
                    <td>
                        <input type="url" id="testimonials_cta_url" name="testimonials_cta_url" value="<?php echo esc_attr($testimonials_cta_url ?: '/contact'); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
            
            <h4>Testimonials Statistics</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="testimonials_stat_1_number">Testimonials Stat 1 Number</label>
                    </th>
                    <td>
                        <input type="text" id="testimonials_stat_1_number" name="testimonials_stat_1_number" value="<?php echo esc_attr($testimonials_stat_1_number ?: '500+'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="testimonials_stat_1_label">Testimonials Stat 1 Label</label>
                    </th>
                    <td>
                        <input type="text" id="testimonials_stat_1_label" name="testimonials_stat_1_label" value="<?php echo esc_attr($testimonials_stat_1_label ?: 'Happy Clients'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="testimonials_stat_2_number">Testimonials Stat 2 Number</label>
                    </th>
                    <td>
                        <input type="text" id="testimonials_stat_2_number" name="testimonials_stat_2_number" value="<?php echo esc_attr($testimonials_stat_2_number ?: '98%'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="testimonials_stat_2_label">Testimonials Stat 2 Label</label>
                    </th>
                    <td>
                        <input type="text" id="testimonials_stat_2_label" name="testimonials_stat_2_label" value="<?php echo esc_attr($testimonials_stat_2_label ?: 'Client Satisfaction'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="testimonials_stat_3_number">Testimonials Stat 3 Number</label>
                    </th>
                    <td>
                        <input type="text" id="testimonials_stat_3_number" name="testimonials_stat_3_number" value="<?php echo esc_attr($testimonials_stat_3_number ?: '150%'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="testimonials_stat_3_label">Testimonials Stat 3 Label</label>
                    </th>
                    <td>
                        <input type="text" id="testimonials_stat_3_label" name="testimonials_stat_3_label" value="<?php echo esc_attr($testimonials_stat_3_label ?: 'Average ROI Increase'); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Blog Section -->
        <div>
            <h3>Blog Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="blog_title">Blog Title</label>
                    </th>
                    <td>
                        <?php wp_editor($blog_title ?: 'Scale Up Your <span class="highlight curly-underline">MARKETING</span>', 'blog_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main title for the blog section. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="blog_subtitle">Blog Subtitle</label>
                    </th>
                    <td>
                        <?php wp_editor($blog_subtitle ?: 'Zero secrets. Maximum value. We share proven strategies and insider insights to help ambitious marketers like you accelerate growth, drive traffic, and maximise revenue.', 'blog_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                        <p class="description">Subtitle for the blog section.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="blog_cta_text">Blog CTA Text</label>
                    </th>
                    <td>
                        <input type="text" id="blog_cta_text" name="blog_cta_text" value="<?php echo esc_attr($blog_cta_text ?: 'MORE BLOGS'); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="blog_cta_url">Blog CTA URL</label>
                    </th>
                    <td>
                        <input type="url" id="blog_cta_url" name="blog_cta_url" value="<?php echo esc_attr($blog_cta_url ?: '/blog'); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Homepage Blog Posts -->
        <div>
            <h3>Homepage Featured Blog Posts</h3>
            
            <h4>Blog Post 1</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_1_image">Blog 1 Image URL</label>
                    </th>
                    <td>
                        <input type="url" id="homepage_blog_1_image" name="homepage_blog_1_image" value="<?php echo esc_attr($homepage_blog_1_image); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_1_date">Blog 1 Date</label>
                    </th>
                    <td>
                        <input type="text" id="homepage_blog_1_date" name="homepage_blog_1_date" value="<?php echo esc_attr($homepage_blog_1_date); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_1_category">Blog 1 Category</label>
                    </th>
                    <td>
                        <input type="text" id="homepage_blog_1_category" name="homepage_blog_1_category" value="<?php echo esc_attr($homepage_blog_1_category); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_1_title">Blog 1 Title</label>
                    </th>
                    <td>
                        <input type="text" id="homepage_blog_1_title" name="homepage_blog_1_title" value="<?php echo esc_attr($homepage_blog_1_title); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_1_excerpt">Blog 1 Excerpt</label>
                    </th>
                    <td>
                        <?php wp_editor($homepage_blog_1_excerpt, 'homepage_blog_1_excerpt', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Short excerpt for the blog post.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_1_url">Blog 1 URL</label>
                    </th>
                    <td>
                        <input type="url" id="homepage_blog_1_url" name="homepage_blog_1_url" value="<?php echo esc_attr($homepage_blog_1_url); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
            
            <h4>Blog Post 2</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_2_image">Blog 2 Image URL</label>
                    </th>
                    <td>
                        <input type="url" id="homepage_blog_2_image" name="homepage_blog_2_image" value="<?php echo esc_attr($homepage_blog_2_image); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_2_date">Blog 2 Date</label>
                    </th>
                    <td>
                        <input type="text" id="homepage_blog_2_date" name="homepage_blog_2_date" value="<?php echo esc_attr($homepage_blog_2_date); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_2_category">Blog 2 Category</label>
                    </th>
                    <td>
                        <input type="text" id="homepage_blog_2_category" name="homepage_blog_2_category" value="<?php echo esc_attr($homepage_blog_2_category); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_2_title">Blog 2 Title</label>
                    </th>
                    <td>
                        <input type="text" id="homepage_blog_2_title" name="homepage_blog_2_title" value="<?php echo esc_attr($homepage_blog_2_title); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_2_excerpt">Blog 2 Excerpt</label>
                    </th>
                    <td>
                        <?php wp_editor($homepage_blog_2_excerpt, 'homepage_blog_2_excerpt', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Short excerpt for the blog post.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_2_url">Blog 2 URL</label>
                    </th>
                    <td>
                        <input type="url" id="homepage_blog_2_url" name="homepage_blog_2_url" value="<?php echo esc_attr($homepage_blog_2_url); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
            
            <h4>Blog Post 3</h4>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_3_image">Blog 3 Image URL</label>
                    </th>
                    <td>
                        <input type="url" id="homepage_blog_3_image" name="homepage_blog_3_image" value="<?php echo esc_attr($homepage_blog_3_image); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_3_date">Blog 3 Date</label>
                    </th>
                    <td>
                        <input type="text" id="homepage_blog_3_date" name="homepage_blog_3_date" value="<?php echo esc_attr($homepage_blog_3_date); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_3_category">Blog 3 Category</label>
                    </th>
                    <td>
                        <input type="text" id="homepage_blog_3_category" name="homepage_blog_3_category" value="<?php echo esc_attr($homepage_blog_3_category); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_3_title">Blog 3 Title</label>
                    </th>
                    <td>
                        <input type="text" id="homepage_blog_3_title" name="homepage_blog_3_title" value="<?php echo esc_attr($homepage_blog_3_title); ?>" class="regular-text" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_3_excerpt">Blog 3 Excerpt</label>
                    </th>
                    <td>
                        <?php wp_editor($homepage_blog_3_excerpt, 'homepage_blog_3_excerpt', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Short excerpt for the blog post.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="homepage_blog_3_url">Blog 3 URL</label>
                    </th>
                    <td>
                        <input type="url" id="homepage_blog_3_url" name="homepage_blog_3_url" value="<?php echo esc_attr($homepage_blog_3_url); ?>" class="regular-text" />
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Final CTA Section -->
        <div>
            <h3>Final CTA Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="final_cta_title">Final CTA Title</label>
                    </th>
                    <td>
                        <?php wp_editor($final_cta_title ?: 'You Bring the Ambition, We Drive the <span class="highlight curly-underline">RESULTS</span>', 'final_cta_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main title for the final CTA section. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="final_cta_description">Final CTA Description</label>
                    </th>
                    <td>
                        <?php wp_editor($final_cta_description ?: 'Request a marketing review today. We\'ll send you a detailed analysis of your website and marketing, breaking down your next steps to success.', 'final_cta_description', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Description for the final CTA section.</p>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- Newsletter Section -->
        <div>
            <h3>Newsletter Section</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="newsletter_title">Newsletter Title</label>
                    </th>
                    <td>
                        <?php wp_editor($newsletter_title ?: 'Stay Updated with the <span class="highlight curly-underline">Latest</span> Insights', 'newsletter_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main title for the newsletter section. HTML allowed.</p>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="newsletter_subtitle">Newsletter Subtitle</label>
                    </th>
                    <td>
                        <?php wp_editor($newsletter_subtitle ?: 'Get the latest resources, industry updates, and expert tips delivered directly to your inbox every week.', 'newsletter_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Subtitle for the newsletter section.</p>
                    </td>
                </tr>
            </table>
        </div>
        
    </div>
    
    <script>
        function addServiceTag() {
            const container = document.getElementById('service-tags-container');
            const index = container.children.length;
            const newRow = document.createElement('div');
            newRow.className = 'service-tag-row';
            newRow.innerHTML = `
                <input type="text" name="service_tags[${index}][text]" placeholder="Tag Text" />
                <input type="text" name="service_tags[${index}][url]" placeholder="Tag URL" />
                <button type="button" class="remove-tag" onclick="removeServiceTag(this)">Remove</button>
            `;
            container.appendChild(newRow);
        }
        
        function removeServiceTag(button) {
            button.parentElement.remove();
        }
    </script>
    
    <?php
}

function aimpro_save_homepage_meta($post_id) {
    // Check nonce for security
    if (!isset($_POST['aimpro_homepage_meta_nonce_field']) || 
        !wp_verify_nonce($_POST['aimpro_homepage_meta_nonce_field'], 'aimpro_homepage_meta_nonce')) {
        return;
    }
    
    // Check if user has permission
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Avoid infinite loop during autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // List of all meta fields to save
    $meta_fields = array(
        'hero_badge_text', 'hero_title', 'hero_strapline_1', 'hero_strapline_2', 
        'hero_strapline_3', 'hero_strapline_4', 'hero_subtitle', 'hero_primary_cta_text', 
        'hero_primary_cta_url', 'value_statement_title', 'value_statement_description', 
        'value_statement_cta_text', 'value_statement_cta_url', 'stat_1_number', 'stat_1_label', 
        'stat_2_number', 'stat_2_label', 'stat_3_number', 'stat_3_label', 'stat_4_number', 
        'stat_4_label', 'services_title', 'services_subtitle', 'lead_magnet_title', 
        'lead_magnet_subtitle', 'lead_magnet_ebook_title', 'lead_magnet_ebook_description', 
        'lead_magnet_form_title', 'lead_magnet_form_subtitle', 'office_title', 'office_description', 
        'coffee_meeting_url', 'office_address_title', 'office_address', 'about_page_url', 
        'team_section_url', 'company_page_url', 'team_section_title', 'team_section_subtitle',
        'team_cta_text', 'team_cta_url', 'testimonials_badge', 'testimonials_title', 
        'testimonials_subtitle', 'testimonials_cta_text', 'testimonials_cta_url',
        'testimonials_stat_1_number', 'testimonials_stat_1_label', 'testimonials_stat_2_number',
        'testimonials_stat_2_label', 'testimonials_stat_3_number', 'testimonials_stat_3_label',
        'blog_title', 'blog_subtitle', 'blog_cta_text', 'blog_cta_url', 'homepage_blog_1_image', 
        'homepage_blog_1_date', 'homepage_blog_1_category', 'homepage_blog_1_title', 
        'homepage_blog_1_excerpt', 'homepage_blog_1_url', 'homepage_blog_2_image', 
        'homepage_blog_2_date', 'homepage_blog_2_category', 'homepage_blog_2_title', 
        'homepage_blog_2_excerpt', 'homepage_blog_2_url', 'homepage_blog_3_image', 
        'homepage_blog_3_date', 'homepage_blog_3_category', 'homepage_blog_3_title', 
        'homepage_blog_3_excerpt', 'homepage_blog_3_url', 'final_cta_title', 
        'final_cta_description', 'newsletter_title', 'newsletter_subtitle'
    );
    
    // Save each field
    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_textarea_field($_POST[$field]));
        }
    }
    
    // Save service tags array
    if (isset($_POST['service_tags']) && is_array($_POST['service_tags'])) {
        $service_tags = array();
        foreach ($_POST['service_tags'] as $tag) {
            if (!empty($tag['text']) && !empty($tag['url'])) {
                $service_tags[] = array(
                    'text' => sanitize_text_field($tag['text']),
                    'url' => sanitize_text_field($tag['url'])
                );
            }
        }
        update_post_meta($post_id, 'service_tags', $service_tags);
    }
}
