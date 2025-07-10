<?php
/**
 * Case Studies Page Meta Fields
 * Adds custom meta box for Case Studies Page template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_casestudies_meta_box');
function aimpro_add_casestudies_meta_box() {
    // Only add to pages using the Case Studies Page template or with 'case-studies' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-case-studies.php' || $page_slug === 'case-studies') {
        add_meta_box(
            'aimpro_casestudies_settings',
            'Case Studies Page Settings',
            'aimpro_casestudies_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_casestudies_meta_box_callback($post) {
    wp_nonce_field('aimpro_casestudies_meta_nonce', 'aimpro_casestudies_meta_nonce');
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    if ($page_template !== 'page-case-studies.php' && $page_slug !== 'case-studies') {
        echo '<p><strong>Note:</strong> These settings will only appear when this page uses the "Case Studies Page" template or has the slug "case-studies".</p>';
        return;
    }
    
    // Header Section
    $cs_header_title = get_post_meta($post->ID, 'cs_header_title', true) ?: 'Case Studies';
    $cs_header_subtitle = get_post_meta($post->ID, 'cs_header_subtitle', true) ?: 'Real results from real clients across diverse industries';
    
    // Introduction Section
    $cs_intro_title = get_post_meta($post->ID, 'cs_intro_title', true) ?: 'Proven Success Stories';
    $cs_intro_description = get_post_meta($post->ID, 'cs_intro_description', true) ?: 'Discover how we\'ve helped businesses like yours achieve remarkable growth through strategic digital marketing. Each case study showcases real challenges, innovative solutions, and measurable results that demonstrate our commitment to client success.';
    
    // Results Overview Stats
    $cs_stat1_number = get_post_meta($post->ID, 'cs_stat1_number', true) ?: '250%';
    $cs_stat1_label = get_post_meta($post->ID, 'cs_stat1_label', true) ?: 'Average ROI Increase';
    $cs_stat2_number = get_post_meta($post->ID, 'cs_stat2_number', true) ?: '150+';
    $cs_stat2_label = get_post_meta($post->ID, 'cs_stat2_label', true) ?: 'Successful Projects';
    $cs_stat3_number = get_post_meta($post->ID, 'cs_stat3_number', true) ?: '£2.5M+';
    $cs_stat3_label = get_post_meta($post->ID, 'cs_stat3_label', true) ?: 'Revenue Generated';
    
    // Featured Case Study
    $cs_featured_category = get_post_meta($post->ID, 'cs_featured_category', true) ?: 'E-commerce';
    $cs_featured_title = get_post_meta($post->ID, 'cs_featured_title', true) ?: 'TechGear UK: 400% Revenue Growth in 12 Months';
    $cs_featured_summary = get_post_meta($post->ID, 'cs_featured_summary', true) ?: 'How we transformed a struggling online electronics retailer into a market leader through comprehensive SEO and PPC strategies.';
    $cs_featured_highlight1_number = get_post_meta($post->ID, 'cs_featured_highlight1_number', true) ?: '400%';
    $cs_featured_highlight1_label = get_post_meta($post->ID, 'cs_featured_highlight1_label', true) ?: 'Revenue Increase';
    $cs_featured_highlight2_number = get_post_meta($post->ID, 'cs_featured_highlight2_number', true) ?: '350%';
    $cs_featured_highlight2_label = get_post_meta($post->ID, 'cs_featured_highlight2_label', true) ?: 'Organic Traffic Growth';
    $cs_featured_highlight3_number = get_post_meta($post->ID, 'cs_featured_highlight3_number', true) ?: '180%';
    $cs_featured_highlight3_label = get_post_meta($post->ID, 'cs_featured_highlight3_label', true) ?: 'Conversion Rate Improvement';
    $cs_featured_cta_text = get_post_meta($post->ID, 'cs_featured_cta_text', true) ?: 'Read Full Case Study';
    $cs_featured_cta_url = get_post_meta($post->ID, 'cs_featured_cta_url', true) ?: '#';
    
    // Case Study Cards (6 case studies)
    $case_studies = array();
    for ($i = 1; $i <= 6; $i++) {
        $case_studies[$i] = array(
            'category' => get_post_meta($post->ID, "cs_case{$i}_category", true) ?: ($i == 1 ? 'E-commerce' : ($i == 2 ? 'Healthcare' : ($i == 3 ? 'Finance' : ($i == 4 ? 'Education' : ($i == 5 ? 'SaaS' : 'E-commerce'))))),
            'title' => get_post_meta($post->ID, "cs_case{$i}_title", true) ?: ($i == 1 ? 'Fashion Boutique: Local to National Success' : ($i == 2 ? 'Premier Dental: Patient Acquisition Success' : ($i == 3 ? 'WealthWise Advisors: Lead Generation Mastery' : ($i == 4 ? 'EduTech Solutions: Course Enrollment Boost' : ($i == 5 ? 'CloudFlow: B2B Lead Generation Excellence' : 'Home & Garden Co: Seasonal Success Strategy'))))),
            'description' => get_post_meta($post->ID, "cs_case{$i}_description", true) ?: ($i == 1 ? 'Transformed a local fashion boutique into a national online brand through targeted social media marketing and influencer partnerships.' : ($i == 2 ? 'Increased new patient bookings by 300% through local SEO optimisation and targeted Google Ads campaigns.' : ($i == 3 ? 'Generated high-quality leads for financial planning services through content marketing and LinkedIn advertising.' : ($i == 4 ? 'Increased online course enrollments by 500% through strategic content marketing and email automation.' : ($i == 5 ? 'Scaled from 50 to 500+ monthly qualified leads through account-based marketing and conversion optimisation.' : 'Maximized seasonal sales through strategic PPC campaigns and inventory-based ad optimisation.'))))),
            'metric1_value' => get_post_meta($post->ID, "cs_case{$i}_metric1_value", true) ?: ($i == 1 ? '280%' : ($i == 2 ? '300%' : ($i == 3 ? '220%' : ($i == 4 ? '500%' : ($i == 5 ? '900%' : '320%'))))),
            'metric1_label' => get_post_meta($post->ID, "cs_case{$i}_metric1_label", true) ?: ($i == 1 ? 'Social Engagement' : ($i == 2 ? 'New Patients' : ($i == 3 ? 'Quality Leads' : ($i == 4 ? 'Enrollments' : ($i == 5 ? 'Qualified Leads' : 'Seasonal Revenue'))))),
            'metric2_value' => get_post_meta($post->ID, "cs_case{$i}_metric2_value", true) ?: ($i == 1 ? '150%' : ($i == 2 ? '450%' : ($i == 3 ? '85%' : ($i == 4 ? '340%' : ($i == 5 ? '275%' : '65%'))))),
            'metric2_label' => get_post_meta($post->ID, "cs_case{$i}_metric2_label", true) ?: ($i == 1 ? 'Online Sales' : ($i == 2 ? 'Local Visibility' : ($i == 3 ? 'Cost Reduction' : ($i == 4 ? 'Email Revenue' : ($i == 5 ? 'Trial Conversions' : 'Cost per Sale'))))),
            'link_text' => get_post_meta($post->ID, "cs_case{$i}_link_text", true) ?: 'View Details',
            'link_url' => get_post_meta($post->ID, "cs_case{$i}_link_url", true) ?: '#'
        );
    }
    
    // Testimonials Section
    $cs_testimonials_title = get_post_meta($post->ID, 'cs_testimonials_title', true) ?: 'What Our Clients Say';
    $cs_testimonial1_content = get_post_meta($post->ID, 'cs_testimonial1_content', true) ?: 'Aimpro Digital completely transformed our online presence. Their strategic approach to SEO and PPC delivered results beyond our expectations.';
    $cs_testimonial1_name = get_post_meta($post->ID, 'cs_testimonial1_name', true) ?: 'Sarah Johnson';
    $cs_testimonial1_title = get_post_meta($post->ID, 'cs_testimonial1_title', true) ?: 'CEO, TechGear UK';
    
    $cs_testimonial2_content = get_post_meta($post->ID, 'cs_testimonial2_content', true) ?: 'The team\'s expertise in healthcare marketing is exceptional. We\'ve seen a 300% increase in new patient bookings since working with them.';
    $cs_testimonial2_name = get_post_meta($post->ID, 'cs_testimonial2_name', true) ?: 'Dr. Michael Smith';
    $cs_testimonial2_title = get_post_meta($post->ID, 'cs_testimonial2_title', true) ?: 'Practice Owner, Premier Dental';
    
    // CTA Section
    $cs_cta_title = get_post_meta($post->ID, 'cs_cta_title', true) ?: 'Ready to Be Our Next Success Story?';
    $cs_cta_description = get_post_meta($post->ID, 'cs_cta_description', true) ?: 'Let\'s discuss how we can help you achieve similar results for your business.';
    $cs_cta_button1_text = get_post_meta($post->ID, 'cs_cta_button1_text', true) ?: 'Start Your Project';
    $cs_cta_button1_url = get_post_meta($post->ID, 'cs_cta_button1_url', true) ?: '/contact';
    $cs_cta_button2_text = get_post_meta($post->ID, 'cs_cta_button2_text', true) ?: 'Learn About Our Process';
    $cs_cta_button2_url = get_post_meta($post->ID, 'cs_cta_button2_url', true) ?: '/about';
    ?>
    <div class="aimpro-casestudies-meta">
        <h4>Header Section</h4>
        <table class="form-table">
            <tr><th><label for="cs_header_title">Title</label></th><td><?php wp_editor($cs_header_title, "cs_header_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th><label for="cs_header_subtitle">Subtitle</label></th><td><?php wp_editor($cs_header_subtitle, "cs_header_subtitle", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
        </table>
        
        <h4>Introduction Section</h4>
        <table class="form-table">
            <tr><th><label for="cs_intro_title">Title</label></th><td><?php wp_editor($cs_intro_title, "cs_intro_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th><label for="cs_intro_description">Description</label></th><td><?php wp_editor($cs_intro_description, "cs_intro_description", array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
        </table>
        
        <h4>Results Overview Stats</h4>
        <table class="form-table">
            <tr><th>Stat 1 Number</th><td><?php wp_editor($cs_stat1_number, "cs_stat1_number", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Stat 1 Label</th><td><?php wp_editor($cs_stat1_label, "cs_stat1_label", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Stat 2 Number</th><td><?php wp_editor($cs_stat2_number, "cs_stat2_number", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Stat 2 Label</th><td><?php wp_editor($cs_stat2_label, "cs_stat2_label", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Stat 3 Number</th><td><?php wp_editor($cs_stat3_number, "cs_stat3_number", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Stat 3 Label</th><td><?php wp_editor($cs_stat3_label, "cs_stat3_label", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
        </table>
        
        <h4>Featured Case Study</h4>
        <table class="form-table">
            <tr><th>Category</th><td><?php wp_editor($cs_featured_category, "cs_featured_category", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Title</th><td><?php wp_editor($cs_featured_title, "cs_featured_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Summary</th><td><?php wp_editor($cs_featured_summary, "cs_featured_summary", array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Highlight 1 Number</th><td><?php wp_editor($cs_featured_highlight1_number, "cs_featured_highlight1_number", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Highlight 1 Label</th><td><?php wp_editor($cs_featured_highlight1_label, "cs_featured_highlight1_label", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Highlight 2 Number</th><td><?php wp_editor($cs_featured_highlight2_number, "cs_featured_highlight2_number", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Highlight 2 Label</th><td><?php wp_editor($cs_featured_highlight2_label, "cs_featured_highlight2_label", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Highlight 3 Number</th><td><?php wp_editor($cs_featured_highlight3_number, "cs_featured_highlight3_number", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Highlight 3 Label</th><td><?php wp_editor($cs_featured_highlight3_label, "cs_featured_highlight3_label", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>CTA Text</th><td><?php wp_editor($cs_featured_cta_text, "cs_featured_cta_text", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>CTA URL</th><td><input type="text" name="cs_featured_cta_url" value="<?php echo esc_attr($cs_featured_cta_url); ?>" /></td></tr>
        </table>
        
        <?php foreach ($case_studies as $index => $case_study): ?>
        <h4>Case Study <?php echo $index; ?></h4>
        <table class="form-table">
            <tr><th>Category</th><td><?php wp_editor($case_study['category'], "cs_case{$index}_category", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Title</th><td><?php wp_editor($case_study['title'], "cs_case{$index}_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Description</th><td><?php wp_editor($case_study['description'], "cs_case{$index}_description", array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Metric 1 Value</th><td><?php wp_editor($case_study['metric1_value'], "cs_case{$index}_metric1_value", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Metric 1 Label</th><td><?php wp_editor($case_study['metric1_label'], "cs_case{$index}_metric1_label", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Metric 2 Value</th><td><?php wp_editor($case_study['metric2_value'], "cs_case{$index}_metric2_value", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Metric 2 Label</th><td><?php wp_editor($case_study['metric2_label'], "cs_case{$index}_metric2_label", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Link Text</th><td><?php wp_editor($case_study['link_text'], "cs_case{$index}_link_text", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Link URL</th><td><input type="text" name="cs_case<?php echo $index; ?>_link_url" value="<?php echo esc_attr($case_study['link_url']); ?>" /></td></tr>
        </table>
        <?php endforeach; ?>
        
        <h4>Testimonials Section</h4>
        <table class="form-table">
            <tr><th>Section Title</th><td><?php wp_editor($cs_testimonials_title, "cs_testimonials_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Testimonial 1 Content</th><td><?php wp_editor($cs_testimonial1_content, "cs_testimonial1_content", array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Testimonial 1 Name</th><td><?php wp_editor($cs_testimonial1_name, "cs_testimonial1_name", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Testimonial 1 Title</th><td><?php wp_editor($cs_testimonial1_title, "cs_testimonial1_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Testimonial 2 Content</th><td><?php wp_editor($cs_testimonial2_content, "cs_testimonial2_content", array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Testimonial 2 Name</th><td><?php wp_editor($cs_testimonial2_name, "cs_testimonial2_name", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Testimonial 2 Title</th><td><?php wp_editor($cs_testimonial2_title, "cs_testimonial2_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
        </table>
        
        <h4>CTA Section</h4>
        <table class="form-table">
            <tr><th>CTA Title</th><td><?php wp_editor($cs_cta_title, "cs_cta_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>CTA Description</th><td><?php wp_editor($cs_cta_description, "cs_cta_description", array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Button 1 Text</th><td><?php wp_editor($cs_cta_button1_text, "cs_cta_button1_text", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Button 1 URL</th><td><input type="text" name="cs_cta_button1_url" value="<?php echo esc_attr($cs_cta_button1_url); ?>" /></td></tr>
            <tr><th>Button 2 Text</th><td><?php wp_editor($cs_cta_button2_text, "cs_cta_button2_text", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td></tr>
            <tr><th>Button 2 URL</th><td><input type="text" name="cs_cta_button2_url" value="<?php echo esc_attr($cs_cta_button2_url); ?>" /></td></tr>
        </table>
    </div>
    <?php
}

add_action('save_post', 'aimpro_save_casestudies_meta_fields');
function aimpro_save_casestudies_meta_fields($post_id) {
    if (!isset($_POST['aimpro_casestudies_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_casestudies_meta_nonce'], 'aimpro_casestudies_meta_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (get_post_type($post_id) !== 'page') return;
    
    $fields = array(
        // Header
        'cs_header_title', 'cs_header_subtitle',
        // Introduction
        'cs_intro_title', 'cs_intro_description',
        // Stats
        'cs_stat1_number', 'cs_stat1_label', 'cs_stat2_number', 'cs_stat2_label', 'cs_stat3_number', 'cs_stat3_label',
        // Featured case study
        'cs_featured_category', 'cs_featured_title', 'cs_featured_summary',
        'cs_featured_highlight1_number', 'cs_featured_highlight1_label',
        'cs_featured_highlight2_number', 'cs_featured_highlight2_label',
        'cs_featured_highlight3_number', 'cs_featured_highlight3_label',
        'cs_featured_cta_text', 'cs_featured_cta_url',
        // Testimonials
        'cs_testimonials_title', 'cs_testimonial1_content', 'cs_testimonial1_name', 'cs_testimonial1_title',
        'cs_testimonial2_content', 'cs_testimonial2_name', 'cs_testimonial2_title',
        // CTA
        'cs_cta_title', 'cs_cta_description', 'cs_cta_button1_text', 'cs_cta_button1_url', 'cs_cta_button2_text', 'cs_cta_button2_url'
    );
    
    // Add case study fields
    for ($i = 1; $i <= 6; $i++) {
        $fields = array_merge($fields, array(
            "cs_case{$i}_category", "cs_case{$i}_title", "cs_case{$i}_description",
            "cs_case{$i}_metric1_value", "cs_case{$i}_metric1_label",
            "cs_case{$i}_metric2_value", "cs_case{$i}_metric2_label",
            "cs_case{$i}_link_text", "cs_case{$i}_link_url"
        ));
    }
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];
            // Fields that should preserve rich text formatting
            if (strpos($field, '_url') !== false) {
                // URLs should be sanitized as URLs
                $value = esc_url_raw($value);
            } else {
                // All other fields are rich text and should allow HTML formatting
                $value = wp_kses_post($value);
            }
            update_post_meta($post_id, $field, $value);
        }
    }
}
