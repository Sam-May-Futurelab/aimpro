<?php
/**
 * Helper Functions
 * General purpose helper functions for the Aimpro theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Helper function to get landing page field values from options
 * Enhanced to also check post meta for contact page fields
 */
function aimpro_get_field($field_name, $default = '') {
    // List of contact fields that should check post meta first
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
    
    // List of about fields that should check post meta first
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
    
    // List of locations fields that should check post meta first
    $locations_fields = array(
        'locations_hero_title',
        'locations_hero_subtitle',
        'locations_office_badge',
        'locations_office_city',
        'locations_office_address_line1',
        'locations_office_address_line2',
        'locations_office_country',
        'locations_office_phone_link',
        'locations_office_phone_display',
        'locations_office_email',
        'locations_office_cta_text',
        'locations_services_title',
        'locations_services_list',
        'locations_areas_title',
        'locations_areas_subtitle',
        'locations_area1_title',
        'locations_area1_cities',
        'locations_area2_title',
        'locations_area2_cities',
        'locations_area3_title',
        'locations_area3_cities',
        'locations_area4_title',
        'locations_area4_cities',
        'locations_remote_title',
        'locations_remote_description',
        'locations_remote_cta_text',
        'locations_feature1_title',
        'locations_feature1_description',
        'locations_feature2_title',
        'locations_feature2_description',
        'locations_feature3_title',
        'locations_feature3_description',
        'locations_cta_title',
        'locations_cta_description',
        'locations_cta_button1_text',
        'locations_cta_button2_text'
    );
    
    // Combine all page-specific fields
    // List of homepage fields that should check WordPress options directly
    $homepage_fields = array(
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
        'final_cta_description', 'newsletter_title', 'newsletter_subtitle', 'service_tags'
    );

    // For homepage fields, check WordPress options directly
    if (in_array($field_name, $homepage_fields)) {
        $value = get_option($field_name, $default);
        return !empty($value) ? $value : $default;
    }

    $page_meta_fields = array_merge($contact_fields, $about_fields, $locations_fields);
    
    // For page-specific fields, check post meta first
    if (in_array($field_name, $page_meta_fields)) {
        global $post;
        $post_id = $post ? $post->ID : get_the_ID();
        
        if ($post_id) {
            $post_meta_value = get_post_meta($post_id, $field_name, true);
            if (!empty($post_meta_value)) {
                return $post_meta_value;
            }
        }
    }
    
    // Fall back to checking theme options
    $value = get_option($field_name, $default);
    return !empty($value) ? $value : $default;
}

/**
 * Sanitize phone number for tel: links
 */
function aimpro_sanitize_phone($phone) {
    return preg_replace('/[^+\d]/', '', $phone);
}

/**
 * Get page template slug helper
 */
function aimpro_get_page_template() {
    global $post;
    if (!$post) return '';
    
    $template = get_page_template_slug($post->ID);
    return $template ?: 'page.php';
}

/**
 * Check if current page uses a specific template
 */
function aimpro_is_page_template($template_name) {
    return aimpro_get_page_template() === $template_name;
}

/**
 * Get post/page excerpt with custom length
 */
function aimpro_get_excerpt($post_id = null, $length = 155) {
    if (!$post_id) {
        global $post;
        $post_id = $post->ID;
    }
    
    $excerpt = get_post_field('post_excerpt', $post_id);
    
    if (empty($excerpt)) {
        $content = get_post_field('post_content', $post_id);
        $excerpt = wp_trim_words(strip_tags($content), $length);
    }
    
    return $excerpt;
}

/**
 * Format date for display
 */
function aimpro_format_date($date, $format = 'F j, Y') {
    return date($format, strtotime($date));
}

/**
 * Get reading time estimate
 */
function aimpro_get_reading_time($content) {
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Average reading speed
    
    return $reading_time . ' min read';
}
