<?php
/**
 * SEO Services Page Meta Boxes
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add meta boxes for SEO Services page
function add_seo_services_meta_boxes() {
    add_meta_box(
        'seo_services_header',
        'Page Header',
        'seo_services_header_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_services_overview',
        'SEO Overview Section',
        'seo_services_overview_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_services_grid',
        'SEO Services Grid',
        'seo_services_grid_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_services_case_study',
        'SEO Case Study Section',
        'seo_services_case_study_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_services_process',
        'SEO Process Section',
        'seo_services_process_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_services_tools',
        'SEO Tools Section',
        'seo_services_tools_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_services_industries',
        'SEO Industries Section',
        'seo_services_industries_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_services_testimonial',
        'SEO Testimonial Section',
        'seo_services_testimonial_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_services_cta',
        'CTA Section',
        'seo_services_cta_callback',
        'page',
        'normal',
        'high'
    );
}

// Hook to add meta boxes only for the SEO Services page template
function seo_services_add_meta_boxes() {
    global $post;
    if (isset($post) && get_page_template_slug($post->ID) == 'page-seo-services.php') {
        add_seo_services_meta_boxes();
    }
}
add_action('add_meta_boxes', 'seo_services_add_meta_boxes');

// Enqueue media scripts for image uploaders
function seo_services_admin_scripts($hook) {
    global $post;
    if ($hook == 'post.php' || $hook == 'post-new.php') {
        if (isset($post) && get_page_template_slug($post->ID) == 'page-seo-services.php') {
            wp_enqueue_media();
        }
    }
}
add_action('admin_enqueue_scripts', 'seo_services_admin_scripts');

// Default values
function get_seo_services_defaults() {
    return array(
        // Header defaults
        'header_title' => 'SEO Services',
        'header_subtitle' => 'Dominate search results and drive organic traffic with our comprehensive SEO strategies',
        
        // Overview defaults
        'overview_title' => 'Expert SEO Services That Drive Results',
        'overview_description' => 'Our comprehensive SEO services are designed to improve your search engine rankings, increase organic traffic, and drive qualified leads to your business. With over 25 years of combined experience and proven methodologies, we help businesses of all sizes achieve sustainable growth through search engine optimisation.',
        'overview_benefits_title' => 'What SEO Can Do for Your Business:',
        'overview_benefits' => array(
            'Increase organic search visibility by up to 300%',
            'Drive qualified traffic that converts into customers',
            'Build long-term, sustainable online presence',
            'Improve brand credibility and trust',
            'Generate cost-effective leads compared to paid advertising',
            'Stay ahead of competitors in search results'
        ),
        'overview_image' => get_template_directory_uri() . '/assets/images/services/seo-overview.jpg',
        
        // Services Grid defaults
        'services_grid_title' => 'Our Complete SEO Service Portfolio',
        'service_1_title' => 'Local SEO',
        'service_1_description' => 'Dominate local search results and attract customers in your geographic area with our comprehensive local SEO strategies.',
        'service_1_features' => array(
            'Google My Business optimisation',
            'Local citation building',
            'Review management and generation',
            'Local keyword targeting',
            'Geographic content optimisation'
        ),
        'service_1_result' => '',
        'service_1_link' => home_url('/local-seo'),
        'service_1_featured' => true,
        
        'service_2_title' => 'SEO Audit',
        'service_2_description' => 'Comprehensive analysis of your website\'s SEO performance with actionable recommendations for improvement.',
        'service_2_features' => array(
            'Technical SEO analysis',
            'Content gap identification',
            'Competitor analysis',
            'Keyword opportunity research',
            'Detailed action plan'
        ),
        'service_2_result' => 'Identify 50+ optimisation opportunities',
        'service_2_link' => home_url('/seo-audit'),
        'service_2_featured' => false,
        
        'service_3_title' => 'Technical SEO',
        'service_3_description' => 'optimise your website\'s technical foundation to improve search engine crawling, indexing, and rankings.',
        'service_3_features' => array(
            'Site speed optimisation',
            'Core Web Vitals improvement',
            'Schema markup implementation',
            'Mobile optimisation',
            'Crawl error resolution'
        ),
        'service_3_result' => 'Average: 60% improvement in site speed',
        'service_3_link' => home_url('/technical-seo'),
        'service_3_featured' => false,
        
        'service_4_title' => 'On-Page SEO',
        'service_4_description' => 'optimise individual pages to rank higher and earn more relevant traffic in search engines.',
        'service_4_features' => array(
            'Keyword research and optimisation',
            'Content optimisation',
            'Meta tag optimisation',
            'Internal linking strategy',
            'Image optimisation'
        ),
        'service_4_result' => '',
        'service_4_link' => home_url('/on-page-seo'),
        'service_4_featured' => false,
        
        'service_5_title' => 'White Label SEO',
        'service_5_description' => 'Professional SEO services for agencies and resellers under your brand with full support.',
        'service_5_features' => array(
            'Branded SEO reporting',
            'Agency dashboard access',
            'Scalable SEO solutions',
            'Partner support and training',
            'Client communication tools'
        ),
        'service_5_result' => '',
        'service_5_link' => home_url('/white-label-seo'),
        'service_5_featured' => false,
        
        // Case Study defaults
        'case_study_label' => 'SEO Success Story',
        'case_study_title' => 'TechFlow Solutions: 450% Organic Traffic Increase',
        'case_study_description' => 'TechFlow Solutions, a B2B software company, was struggling with poor search visibility and minimal organic traffic despite having quality products and services.',
        'case_study_challenge_title' => 'The Challenge',
        'case_study_challenges' => array(
            'Low search engine rankings for target keywords',
            'Poor technical SEO foundation',
            'Lack of optimised content strategy',
            'No local SEO presence'
        ),
        'case_study_solution_title' => 'Our SEO Strategy',
        'case_study_solutions' => array(
            'Comprehensive technical SEO overhaul',
            'Strategic keyword research and targeting',
            'Content optimisation and creation',
            'Local SEO implementation'
        ),
        'case_study_results_title' => 'Results After 8 Months',
        'case_study_result_1_number' => '450%',
        'case_study_result_1_label' => 'Organic Traffic Increase',
        'case_study_result_2_number' => '320%',
        'case_study_result_2_label' => 'Keyword Rankings Improvement',
        'case_study_result_3_number' => '280%',
        'case_study_result_3_label' => 'Lead Generation Increase',
        'case_study_result_4_number' => '65%',
        'case_study_result_4_label' => 'Conversion Rate Boost',
        'case_study_link' => home_url('/case-studies'),
        'case_study_link_text' => 'Read Full Case Study',
        
        // Process defaults
        'process_title' => 'Our Proven SEO Process',
        'process_step_1_title' => 'SEO Audit & Analysis',
        'process_step_1_description' => 'Comprehensive analysis of your current SEO performance, technical issues, and opportunities.',
        'process_step_2_title' => 'Strategy Development',
        'process_step_2_description' => 'Create a customised SEO strategy based on your business goals and market research.',
        'process_step_3_title' => 'Implementation',
        'process_step_3_description' => 'Execute technical optimisations, content improvements, and link building strategies.',
        'process_step_4_title' => 'Monitor & optimise',
        'process_step_4_description' => 'Continuous monitoring and optimisation based on performance data and algorithm updates.',
        
        // Tools defaults
        'tools_title' => 'Professional SEO Tools & Technologies',
        'tools_category_1_title' => 'Research & Analysis',
        'tools_category_1_tools' => array('Ahrefs', 'SEMrush', 'Moz Pro', 'Google Search Console'),
        'tools_category_2_title' => 'Technical SEO',
        'tools_category_2_tools' => array('Screaming Frog', 'GTmetrix', 'Google PageSpeed Insights', 'Schema Markup Validator'),
        'tools_category_3_title' => 'Content optimisation',
        'tools_category_3_tools' => array('Surfer SEO', 'Clearscope', 'Yoast SEO', 'Google Analytics 4'),
        'tools_category_4_title' => 'Local SEO',
        'tools_category_4_tools' => array('BrightLocal', 'Google My Business', 'Whitespark', 'ReviewTrackers'),
        
        // Industries defaults
        'industries_title' => 'SEO Expertise Across Industries',
        'industry_1_title' => 'E-commerce',
        'industry_1_description' => 'Product page optimisation, category structure, and technical SEO for online stores.',
        'industry_1_features' => array(
            'Product schema markup',
            'Category page optimisation',
            'E-commerce technical SEO'
        ),
        'industry_2_title' => 'Professional Services',
        'industry_2_description' => 'Local SEO and authority building for lawyers, accountants, consultants, and other professionals.',
        'industry_2_features' => array(
            'Local search optimisation',
            'Professional authority building',
            'Service page optimisation'
        ),
        'industry_3_title' => 'Healthcare',
        'industry_3_description' => 'Medical SEO with compliance focus for hospitals, clinics, and healthcare providers.',
        'industry_3_features' => array(
            'Medical content optimisation',
            'Local medical SEO',
            'HIPAA-compliant strategies'
        ),
        'industry_4_title' => 'Real Estate',
        'industry_4_description' => 'Property listing optimisation and local market dominance for real estate professionals.',
        'industry_4_features' => array(
            'Property listing optimisation',
            'Local market SEO',
            'Real estate schema markup'
        ),          // Testimonial defaults
        'testimonial_quote' => 'Aimpro Digital\'s SEO services have completely transformed our online presence. We went from page 3 to ranking #1 for our most important keywords, and our organic traffic has increased by over 400%. The team\'s expertise and dedication are unmatched.',
        'testimonial_image' => '', // No image - removed David Mitchell image
        'testimonial_name' => 'David Mitchell',
        'testimonial_title' => 'Managing Director, TechFlow Solutions',
        'testimonial_company' => 'B2B Software Company',
        
        // CTA defaults
        'cta_title' => 'Ready to Dominate Search Results?',
        'cta_description' => 'Let\'s discuss how our SEO services can increase your organic visibility and drive qualified traffic to your business.',
        'cta_primary_text' => 'Get Free SEO Audit',
        'cta_primary_link' => home_url('/contact'),
        'cta_secondary_text' => 'View SEO Results',
        'cta_secondary_link' => home_url('/case-studies'),
        'cta_features' => array(
            'Comprehensive SEO audit included',
            'Custom strategy recommendations',
            'No long-term contracts required'
        )
    );
}

// Meta box callbacks
function seo_services_header_callback($post) {
    wp_nonce_field('seo_services_meta_nonce', 'seo_services_meta_nonce');
    $defaults = get_seo_services_defaults();
    
    $title = get_post_meta($post->ID, '_seo_header_title', true) ?: $defaults['header_title'];
    $subtitle = get_post_meta($post->ID, '_seo_header_subtitle', true) ?: $defaults['header_subtitle'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_header_title">Page Title</label></th>';
    echo '<td><input type="text" id="seo_header_title" name="seo_header_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_header_subtitle">Page Subtitle</label></th>';
    echo '<td><textarea id="seo_header_subtitle" name="seo_header_subtitle" rows="3" style="width: 100%;">' . esc_textarea($subtitle) . '</textarea></td></tr>';
    echo '</table>';
}

function seo_services_overview_callback($post) {
    $defaults = get_seo_services_defaults();
    
    $title = get_post_meta($post->ID, '_seo_overview_title', true) ?: $defaults['overview_title'];
    $description = get_post_meta($post->ID, '_seo_overview_description', true) ?: $defaults['overview_description'];
    $benefits_title = get_post_meta($post->ID, '_seo_overview_benefits_title', true) ?: $defaults['overview_benefits_title'];
    $benefits = get_post_meta($post->ID, '_seo_overview_benefits', true) ?: $defaults['overview_benefits'];
    $image = get_post_meta($post->ID, '_seo_overview_image', true) ?: $defaults['overview_image'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_overview_title">Section Title</label></th>';
    echo '<td><input type="text" id="seo_overview_title" name="seo_overview_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_overview_description">Description</label></th>';
    echo '<td><textarea id="seo_overview_description" name="seo_overview_description" rows="4" style="width: 100%;">' . esc_textarea($description) . '</textarea></td></tr>';
    echo '<tr><th><label for="seo_overview_benefits_title">Benefits Section Title</label></th>';
    echo '<td><input type="text" id="seo_overview_benefits_title" name="seo_overview_benefits_title" value="' . esc_attr($benefits_title) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_overview_benefits">Benefits (one per line)</label></th>';
    echo '<td><textarea id="seo_overview_benefits" name="seo_overview_benefits" rows="6" style="width: 100%;">' . esc_textarea(implode("\n", (array)$benefits)) . '</textarea></td></tr>';
    echo '<tr><th><label for="seo_overview_image">Overview Image</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="seo_overview_image" name="seo_overview_image" value="' . esc_attr($image) . '" />';
    echo '<div id="seo_overview_image_preview" style="margin-bottom: 10px;">';
    if ($image) {
        echo '<img src="' . esc_url($image) . '" style="max-width: 200px; height: auto;" />';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="seo_overview_image_button">Choose Image</button>';
    echo '<button type="button" class="button" id="seo_overview_image_remove" style="margin-left: 10px;">Remove Image</button>';
    echo '</td></tr>';
    echo '</table>';
    
    // Add media uploader script
    echo '<script>
    jQuery(document).ready(function($) {
        var mediaUploader;
        
        $("#seo_overview_image_button").click(function(e) {
            e.preventDefault();
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }
            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: "Choose Image",
                button: {
                    text: "Choose Image"
                },
                multiple: false
            });
            mediaUploader.on("select", function() {
                var attachment = mediaUploader.state().get("selection").first().toJSON();
                $("#seo_overview_image").val(attachment.url);
                $("#seo_overview_image_preview").html("<img src=\"" + attachment.url + "\" style=\"max-width: 200px; height: auto;\" />");
            });
            mediaUploader.open();
        });
        
        $("#seo_overview_image_remove").click(function(e) {
            e.preventDefault();
            $("#seo_overview_image").val("");
            $("#seo_overview_image_preview").html("");
        });
    });
    </script>';
}

function seo_services_grid_callback($post) {
    $defaults = get_seo_services_defaults();
    
    $grid_title = get_post_meta($post->ID, '_seo_services_grid_title', true) ?: $defaults['services_grid_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_services_grid_title">Services Grid Title</label></th>';
    echo '<td><input type="text" id="seo_services_grid_title" name="seo_services_grid_title" value="' . esc_attr($grid_title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Service Cards</h4>';
    
    for ($i = 1; $i <= 5; $i++) {
        $title = get_post_meta($post->ID, "_seo_service_{$i}_title", true) ?: $defaults["service_{$i}_title"];
        $description = get_post_meta($post->ID, "_seo_service_{$i}_description", true) ?: $defaults["service_{$i}_description"];
        $features = get_post_meta($post->ID, "_seo_service_{$i}_features", true) ?: $defaults["service_{$i}_features"];
        $result = get_post_meta($post->ID, "_seo_service_{$i}_result", true) ?: $defaults["service_{$i}_result"];
        $link = get_post_meta($post->ID, "_seo_service_{$i}_link", true) ?: $defaults["service_{$i}_link"];
        $featured = get_post_meta($post->ID, "_seo_service_{$i}_featured", true) ?: $defaults["service_{$i}_featured"];
        
        echo '<h5>Service ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="seo_service_' . $i . '_title">Title</label></th>';
        echo '<td><input type="text" id="seo_service_' . $i . '_title" name="seo_service_' . $i . '_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
        echo '<tr><th><label for="seo_service_' . $i . '_description">Description</label></th>';
        echo '<td><textarea id="seo_service_' . $i . '_description" name="seo_service_' . $i . '_description" rows="3" style="width: 100%;">' . esc_textarea($description) . '</textarea></td></tr>';
        echo '<tr><th><label for="seo_service_' . $i . '_features">Features (one per line)</label></th>';
        echo '<td><textarea id="seo_service_' . $i . '_features" name="seo_service_' . $i . '_features" rows="5" style="width: 100%;">' . esc_textarea(implode("\n", (array)$features)) . '</textarea></td></tr>';
        echo '<tr><th><label for="seo_service_' . $i . '_result">Result/Stat</label></th>';
        echo '<td><input type="text" id="seo_service_' . $i . '_result" name="seo_service_' . $i . '_result" value="' . esc_attr($result) . '" style="width: 100%;" /></td></tr>';
        echo '<tr><th><label for="seo_service_' . $i . '_link">Learn More Link</label></th>';
        echo '<td><input type="url" id="seo_service_' . $i . '_link" name="seo_service_' . $i . '_link" value="' . esc_url($link) . '" style="width: 100%;" /></td></tr>';
        echo '<tr><th><label for="seo_service_' . $i . '_featured">Featured Service</label></th>';
        echo '<td><input type="checkbox" id="seo_service_' . $i . '_featured" name="seo_service_' . $i . '_featured" value="1" ' . checked($featured, true, false) . ' /></td></tr>';
        echo '</table><hr>';
    }
}

function seo_services_case_study_callback($post) {
    $defaults = get_seo_services_defaults();
    
    $label = get_post_meta($post->ID, '_seo_case_study_label', true) ?: $defaults['case_study_label'];
    $title = get_post_meta($post->ID, '_seo_case_study_title', true) ?: $defaults['case_study_title'];
    $description = get_post_meta($post->ID, '_seo_case_study_description', true) ?: $defaults['case_study_description'];
    $challenge_title = get_post_meta($post->ID, '_seo_case_study_challenge_title', true) ?: $defaults['case_study_challenge_title'];
    $challenges = get_post_meta($post->ID, '_seo_case_study_challenges', true) ?: $defaults['case_study_challenges'];
    $solution_title = get_post_meta($post->ID, '_seo_case_study_solution_title', true) ?: $defaults['case_study_solution_title'];
    $solutions = get_post_meta($post->ID, '_seo_case_study_solutions', true) ?: $defaults['case_study_solutions'];
    $results_title = get_post_meta($post->ID, '_seo_case_study_results_title', true) ?: $defaults['case_study_results_title'];
    $link = get_post_meta($post->ID, '_seo_case_study_link', true) ?: $defaults['case_study_link'];
    $link_text = get_post_meta($post->ID, '_seo_case_study_link_text', true) ?: $defaults['case_study_link_text'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_case_study_label">Case Study Label</label></th>';
    echo '<td><input type="text" id="seo_case_study_label" name="seo_case_study_label" value="' . esc_attr($label) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_case_study_title">Case Study Title</label></th>';
    echo '<td><input type="text" id="seo_case_study_title" name="seo_case_study_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_case_study_description">Description</label></th>';
    echo '<td><textarea id="seo_case_study_description" name="seo_case_study_description" rows="3" style="width: 100%;">' . esc_textarea($description) . '</textarea></td></tr>';
    echo '<tr><th><label for="seo_case_study_challenge_title">Challenge Section Title</label></th>';
    echo '<td><input type="text" id="seo_case_study_challenge_title" name="seo_case_study_challenge_title" value="' . esc_attr($challenge_title) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_case_study_challenges">Challenges (one per line)</label></th>';
    echo '<td><textarea id="seo_case_study_challenges" name="seo_case_study_challenges" rows="4" style="width: 100%;">' . esc_textarea(implode("\n", (array)$challenges)) . '</textarea></td></tr>';
    echo '<tr><th><label for="seo_case_study_solution_title">Solution Section Title</label></th>';
    echo '<td><input type="text" id="seo_case_study_solution_title" name="seo_case_study_solution_title" value="' . esc_attr($solution_title) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_case_study_solutions">Solutions (one per line)</label></th>';
    echo '<td><textarea id="seo_case_study_solutions" name="seo_case_study_solutions" rows="4" style="width: 100%;">' . esc_textarea(implode("\n", (array)$solutions)) . '</textarea></td></tr>';
    echo '<tr><th><label for="seo_case_study_results_title">Results Section Title</label></th>';
    echo '<td><input type="text" id="seo_case_study_results_title" name="seo_case_study_results_title" value="' . esc_attr($results_title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Results</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $number = get_post_meta($post->ID, "_seo_case_study_result_{$i}_number", true) ?: $defaults["case_study_result_{$i}_number"];
        $label = get_post_meta($post->ID, "_seo_case_study_result_{$i}_label", true) ?: $defaults["case_study_result_{$i}_label"];
        
        echo '<table class="form-table">';
        echo '<tr><th><label for="seo_case_study_result_' . $i . '_number">Result ' . $i . ' Number</label></th>';
        echo '<td><input type="text" id="seo_case_study_result_' . $i . '_number" name="seo_case_study_result_' . $i . '_number" value="' . esc_attr($number) . '" style="width: 100%;" /></td></tr>';
        echo '<tr><th><label for="seo_case_study_result_' . $i . '_label">Result ' . $i . ' Label</label></th>';
        echo '<td><input type="text" id="seo_case_study_result_' . $i . '_label" name="seo_case_study_result_' . $i . '_label" value="' . esc_attr($label) . '" style="width: 100%;" /></td></tr>';
        echo '</table>';
    }
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_case_study_link">Case Study Link</label></th>';
    echo '<td><input type="url" id="seo_case_study_link" name="seo_case_study_link" value="' . esc_url($link) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_case_study_link_text">Link Text</label></th>';
    echo '<td><input type="text" id="seo_case_study_link_text" name="seo_case_study_link_text" value="' . esc_attr($link_text) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
}

function seo_services_process_callback($post) {
    $defaults = get_seo_services_defaults();
    
    $title = get_post_meta($post->ID, '_seo_process_title', true) ?: $defaults['process_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_process_title">Process Section Title</label></th>';
    echo '<td><input type="text" id="seo_process_title" name="seo_process_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Process Steps</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $step_title = get_post_meta($post->ID, "_seo_process_step_{$i}_title", true) ?: $defaults["process_step_{$i}_title"];
        $step_description = get_post_meta($post->ID, "_seo_process_step_{$i}_description", true) ?: $defaults["process_step_{$i}_description"];
        
        echo '<h5>Step ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="seo_process_step_' . $i . '_title">Step Title</label></th>';
        echo '<td><input type="text" id="seo_process_step_' . $i . '_title" name="seo_process_step_' . $i . '_title" value="' . esc_attr($step_title) . '" style="width: 100%;" /></td></tr>';
        echo '<tr><th><label for="seo_process_step_' . $i . '_description">Step Description</label></th>';
        echo '<td><textarea id="seo_process_step_' . $i . '_description" name="seo_process_step_' . $i . '_description" rows="3" style="width: 100%;">' . esc_textarea($step_description) . '</textarea></td></tr>';
        echo '</table>';
    }
}

function seo_services_tools_callback($post) {
    $defaults = get_seo_services_defaults();
    
    $title = get_post_meta($post->ID, '_seo_tools_title', true) ?: $defaults['tools_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_tools_title">Tools Section Title</label></th>';
    echo '<td><input type="text" id="seo_tools_title" name="seo_tools_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Tool Categories</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $category_title = get_post_meta($post->ID, "_seo_tools_category_{$i}_title", true) ?: $defaults["tools_category_{$i}_title"];
        $tools = get_post_meta($post->ID, "_seo_tools_category_{$i}_tools", true) ?: $defaults["tools_category_{$i}_tools"];
        
        echo '<h5>Category ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="seo_tools_category_' . $i . '_title">Category Title</label></th>';
        echo '<td><input type="text" id="seo_tools_category_' . $i . '_title" name="seo_tools_category_' . $i . '_title" value="' . esc_attr($category_title) . '" style="width: 100%;" /></td></tr>';
        echo '<tr><th><label for="seo_tools_category_' . $i . '_tools">Tools (one per line)</label></th>';
        echo '<td><textarea id="seo_tools_category_' . $i . '_tools" name="seo_tools_category_' . $i . '_tools" rows="4" style="width: 100%;">' . esc_textarea(implode("\n", (array)$tools)) . '</textarea></td></tr>';
        echo '</table>';
    }
}

function seo_services_industries_callback($post) {
    $defaults = get_seo_services_defaults();
    
    $title = get_post_meta($post->ID, '_seo_industries_title', true) ?: $defaults['industries_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_industries_title">Industries Section Title</label></th>';
    echo '<td><input type="text" id="seo_industries_title" name="seo_industries_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Industry Cards</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $industry_title = get_post_meta($post->ID, "_seo_industry_{$i}_title", true) ?: $defaults["industry_{$i}_title"];
        $industry_description = get_post_meta($post->ID, "_seo_industry_{$i}_description", true) ?: $defaults["industry_{$i}_description"];
        $industry_features = get_post_meta($post->ID, "_seo_industry_{$i}_features", true) ?: $defaults["industry_{$i}_features"];
        
        echo '<h5>Industry ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="seo_industry_' . $i . '_title">Industry Title</label></th>';
        echo '<td><input type="text" id="seo_industry_' . $i . '_title" name="seo_industry_' . $i . '_title" value="' . esc_attr($industry_title) . '" style="width: 100%;" /></td></tr>';
        echo '<tr><th><label for="seo_industry_' . $i . '_description">Industry Description</label></th>';
        echo '<td><textarea id="seo_industry_' . $i . '_description" name="seo_industry_' . $i . '_description" rows="3" style="width: 100%;">' . esc_textarea($industry_description) . '</textarea></td></tr>';
        echo '<tr><th><label for="seo_industry_' . $i . '_features">Industry Features (one per line)</label></th>';
        echo '<td><textarea id="seo_industry_' . $i . '_features" name="seo_industry_' . $i . '_features" rows="3" style="width: 100%;">' . esc_textarea(implode("\n", (array)$industry_features)) . '</textarea></td></tr>';
        echo '</table>';
    }
}

function seo_services_testimonial_callback($post) {
    $defaults = get_seo_services_defaults();
    
    $quote = get_post_meta($post->ID, '_seo_testimonial_quote', true) ?: $defaults['testimonial_quote'];
    $image = get_post_meta($post->ID, '_seo_testimonial_image', true) ?: '';
    $name = get_post_meta($post->ID, '_seo_testimonial_name', true) ?: $defaults['testimonial_name'];
    $title = get_post_meta($post->ID, '_seo_testimonial_title', true) ?: $defaults['testimonial_title'];
    $company = get_post_meta($post->ID, '_seo_testimonial_company', true) ?: $defaults['testimonial_company'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_testimonial_quote">Testimonial Quote</label></th>';
    echo '<td><textarea id="seo_testimonial_quote" name="seo_testimonial_quote" rows="4" style="width: 100%;">' . esc_textarea($quote) . '</textarea></td></tr>';
    echo '<tr><th><label for="seo_testimonial_image">Author Image (Optional)</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="seo_testimonial_image" name="seo_testimonial_image" value="' . esc_attr($image) . '" />';
    echo '<div id="seo_testimonial_image_preview" style="margin-bottom: 10px;">';
    if ($image) {
        echo '<img src="' . esc_url($image) . '" style="max-width: 100px; height: auto;" />';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="seo_testimonial_image_button">Choose Image</button>';
    echo '<button type="button" class="button" id="seo_testimonial_image_remove" style="margin-left: 10px;">Remove Image</button>';
    echo '<p class="description">Upload an image for the testimonial author (optional)</p>';
    echo '</td></tr>';
    echo '<tr><th><label for="seo_testimonial_name">Author Name</label></th>';
    echo '<td><input type="text" id="seo_testimonial_name" name="seo_testimonial_name" value="' . esc_attr($name) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_testimonial_title">Author Title</label></th>';
    echo '<td><input type="text" id="seo_testimonial_title" name="seo_testimonial_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_testimonial_company">Author Company</label></th>';
    echo '<td><input type="text" id="seo_testimonial_company" name="seo_testimonial_company" value="' . esc_attr($company) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    // Add media uploader script for testimonial
    echo '<script>
    jQuery(document).ready(function($) {
        var testimonialMediaUploader;
        
        $("#seo_testimonial_image_button").click(function(e) {
            e.preventDefault();
            if (testimonialMediaUploader) {
                testimonialMediaUploader.open();
                return;
            }
            testimonialMediaUploader = wp.media.frames.file_frame = wp.media({
                title: "Choose Author Image",
                button: {
                    text: "Choose Image"
                },
                multiple: false
            });
            testimonialMediaUploader.on("select", function() {
                var attachment = testimonialMediaUploader.state().get("selection").first().toJSON();
                $("#seo_testimonial_image").val(attachment.url);
                $("#seo_testimonial_image_preview").html("<img src=\"" + attachment.url + "\" style=\"max-width: 100px; height: auto;\" />");
            });
            testimonialMediaUploader.open();
        });
        
        $("#seo_testimonial_image_remove").click(function(e) {
            e.preventDefault();
            $("#seo_testimonial_image").val("");
            $("#seo_testimonial_image_preview").html("");
        });
    });
    </script>';
}

function seo_services_cta_callback($post) {
    $defaults = get_seo_services_defaults();
    
    $title = get_post_meta($post->ID, '_seo_cta_title', true) ?: $defaults['cta_title'];
    $description = get_post_meta($post->ID, '_seo_cta_description', true) ?: $defaults['cta_description'];
    $primary_text = get_post_meta($post->ID, '_seo_cta_primary_text', true) ?: $defaults['cta_primary_text'];
    $primary_link = get_post_meta($post->ID, '_seo_cta_primary_link', true) ?: $defaults['cta_primary_link'];
    $secondary_text = get_post_meta($post->ID, '_seo_cta_secondary_text', true) ?: $defaults['cta_secondary_text'];
    $secondary_link = get_post_meta($post->ID, '_seo_cta_secondary_link', true) ?: $defaults['cta_secondary_link'];
    $features = get_post_meta($post->ID, '_seo_cta_features', true) ?: $defaults['cta_features'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_cta_title">CTA Title</label></th>';
    echo '<td><input type="text" id="seo_cta_title" name="seo_cta_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_cta_description">CTA Description</label></th>';
    echo '<td><textarea id="seo_cta_description" name="seo_cta_description" rows="3" style="width: 100%;">' . esc_textarea($description) . '</textarea></td></tr>';
    echo '<tr><th><label for="seo_cta_primary_text">Primary Button Text</label></th>';
    echo '<td><input type="text" id="seo_cta_primary_text" name="seo_cta_primary_text" value="' . esc_attr($primary_text) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_cta_primary_link">Primary Button Link</label></th>';
    echo '<td><input type="url" id="seo_cta_primary_link" name="seo_cta_primary_link" value="' . esc_url($primary_link) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_cta_secondary_text">Secondary Button Text</label></th>';
    echo '<td><input type="text" id="seo_cta_secondary_text" name="seo_cta_secondary_text" value="' . esc_attr($secondary_text) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_cta_secondary_link">Secondary Button Link</label></th>';
    echo '<td><input type="url" id="seo_cta_secondary_link" name="seo_cta_secondary_link" value="' . esc_url($secondary_link) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="seo_cta_features">CTA Features (one per line)</label></th>';
    echo '<td><textarea id="seo_cta_features" name="seo_cta_features" rows="3" style="width: 100%;">' . esc_textarea(implode("\n", (array)$features)) . '</textarea></td></tr>';
    echo '</table>';
}

// Save meta data
function save_seo_services_meta($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['seo_services_meta_nonce']) || !wp_verify_nonce($_POST['seo_services_meta_nonce'], 'seo_services_meta_nonce')) {
        return;
    }

    // Check if user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check if this is the correct page template
    if (get_page_template_slug($post_id) !== 'page-seo-services.php') {
        return;
    }

    // List of all meta fields to save
    $meta_fields = array(
        // Header
        'seo_header_title', 'seo_header_subtitle',
        
        // Overview
        'seo_overview_title', 'seo_overview_description', 'seo_overview_benefits_title', 'seo_overview_image',
        
        // Services Grid
        'seo_services_grid_title',
        
        // Case Study
        'seo_case_study_label', 'seo_case_study_title', 'seo_case_study_description',
        'seo_case_study_challenge_title', 'seo_case_study_solution_title', 'seo_case_study_results_title',
        'seo_case_study_link', 'seo_case_study_link_text',
        
        // Process
        'seo_process_title',
        
        // Tools
        'seo_tools_title',
        
        // Industries
        'seo_industries_title',
        
        // Testimonial
        'seo_testimonial_quote', 'seo_testimonial_image', 'seo_testimonial_name',
        'seo_testimonial_title', 'seo_testimonial_company',
        
        // CTA
        'seo_cta_title', 'seo_cta_description', 'seo_cta_primary_text', 'seo_cta_primary_link',
        'seo_cta_secondary_text', 'seo_cta_secondary_link'
    );

    // Save simple text fields
    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }

    // Save array fields (lists)
    $array_fields = array(
        'seo_overview_benefits', 'seo_case_study_challenges', 'seo_case_study_solutions', 'seo_cta_features'
    );
    
    foreach ($array_fields as $field) {
        if (isset($_POST[$field])) {
            $lines = explode("\n", $_POST[$field]);
            $cleaned_lines = array_map('sanitize_text_field', $lines);
            $cleaned_lines = array_filter($cleaned_lines); // Remove empty lines
            update_post_meta($post_id, '_' . $field, $cleaned_lines);
        }
    }

    // Save service cards (1-5)
    for ($i = 1; $i <= 5; $i++) {
        $service_fields = array(
            "seo_service_{$i}_title", "seo_service_{$i}_description", "seo_service_{$i}_result", "seo_service_{$i}_link"
        );
        
        foreach ($service_fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            }
        }
        
        // Save service features (array)
        if (isset($_POST["seo_service_{$i}_features"])) {
            $lines = explode("\n", $_POST["seo_service_{$i}_features"]);
            $cleaned_lines = array_map('sanitize_text_field', $lines);
            $cleaned_lines = array_filter($cleaned_lines);
            update_post_meta($post_id, "_seo_service_{$i}_features", $cleaned_lines);
        }
        
        // Save featured checkbox
        $featured = isset($_POST["seo_service_{$i}_featured"]) ? true : false;
        update_post_meta($post_id, "_seo_service_{$i}_featured", $featured);
    }

    // Save case study results (1-4)
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["seo_case_study_result_{$i}_number"])) {
            update_post_meta($post_id, "_seo_case_study_result_{$i}_number", sanitize_text_field($_POST["seo_case_study_result_{$i}_number"]));
        }
        if (isset($_POST["seo_case_study_result_{$i}_label"])) {
            update_post_meta($post_id, "_seo_case_study_result_{$i}_label", sanitize_text_field($_POST["seo_case_study_result_{$i}_label"]));
        }
    }

    // Save process steps (1-4)
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["seo_process_step_{$i}_title"])) {
            update_post_meta($post_id, "_seo_process_step_{$i}_title", sanitize_text_field($_POST["seo_process_step_{$i}_title"]));
        }
        if (isset($_POST["seo_process_step_{$i}_description"])) {
            update_post_meta($post_id, "_seo_process_step_{$i}_description", sanitize_text_field($_POST["seo_process_step_{$i}_description"]));
        }
    }

    // Save tool categories (1-4)
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["seo_tools_category_{$i}_title"])) {
            update_post_meta($post_id, "_seo_tools_category_{$i}_title", sanitize_text_field($_POST["seo_tools_category_{$i}_title"]));
        }
        if (isset($_POST["seo_tools_category_{$i}_tools"])) {
            $lines = explode("\n", $_POST["seo_tools_category_{$i}_tools"]);
            $cleaned_lines = array_map('sanitize_text_field', $lines);
            $cleaned_lines = array_filter($cleaned_lines);
            update_post_meta($post_id, "_seo_tools_category_{$i}_tools", $cleaned_lines);
        }
    }

    // Save industry cards (1-4)
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["seo_industry_{$i}_title"])) {
            update_post_meta($post_id, "_seo_industry_{$i}_title", sanitize_text_field($_POST["seo_industry_{$i}_title"]));
        }
        if (isset($_POST["seo_industry_{$i}_description"])) {
            update_post_meta($post_id, "_seo_industry_{$i}_description", sanitize_text_field($_POST["seo_industry_{$i}_description"]));
        }
        if (isset($_POST["seo_industry_{$i}_features"])) {
            $lines = explode("\n", $_POST["seo_industry_{$i}_features"]);
            $cleaned_lines = array_map('sanitize_text_field', $lines);
            $cleaned_lines = array_filter($cleaned_lines);
            update_post_meta($post_id, "_seo_industry_{$i}_features", $cleaned_lines);
        }
    }
}
add_action('save_post', 'save_seo_services_meta');

?>
