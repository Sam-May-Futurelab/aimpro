<?php
/**
 * Local SEO Page Meta Boxes
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Add meta boxes for Local SEO page
function add_local_seo_meta_boxes() {
    add_meta_box(
        'local_seo_header',
        'Page Header',
        'local_seo_header_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'local_seo_overview',
        'Local SEO Overview Section',
        'local_seo_overview_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'local_seo_services',
        'Local SEO Services',
        'local_seo_services_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'local_seo_case_study',
        'Local SEO Case Study Section',
        'local_seo_case_study_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'local_seo_process',
        'Local SEO Process Section',
        'local_seo_process_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'local_seo_industries',
        'Local SEO Industries Section',
        'local_seo_industries_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'local_seo_tools',
        'Local SEO Tools Section',
        'local_seo_tools_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'local_seo_testimonial',
        'Local SEO Testimonial Section',
        'local_seo_testimonial_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'local_seo_cta',
        'CTA Section',
        'local_seo_cta_callback',
        'page',
        'normal',
        'high'
    );
}

// Hook to add meta boxes only for the Local SEO page template
function local_seo_add_meta_boxes() {
    global $post;
    if (isset($post) && get_page_template_slug($post->ID) == 'page-local-seo.php') {
        add_local_seo_meta_boxes();
    }
}
add_action('add_meta_boxes', 'local_seo_add_meta_boxes');

// Enqueue media scripts for image uploaders
function local_seo_admin_scripts($hook) {
    global $post;
    if ($hook == 'post.php' || $hook == 'post-new.php') {
        if (isset($post) && get_page_template_slug($post->ID) == 'page-local-seo.php') {
            wp_enqueue_media();
        }
    }
}
add_action('admin_enqueue_scripts', 'local_seo_admin_scripts');

// Default values
function get_local_seo_defaults() {
    return array(
        // Header defaults
        'header_title' => 'Local SEO Services',
        'header_subtitle' => 'Dominate local search results and attract customers in your area',
        
        // Overview defaults
        'overview_title' => 'Become the #1 Choice in Your Local Market',
        'overview_description' => 'Local SEO is crucial for businesses that serve customers in specific geographic areas. Our comprehensive local SEO strategies help you appear prominently in local search results, Google Maps, and voice searches, driving more foot traffic and local customers to your business.',
        'overview_benefits_title' => 'Why Local SEO Matters:',
        'overview_benefits' => array(
            '76% of people search for local businesses daily',
            '28% of local searches result in a purchase',
            'Local searches have a 50% higher conversion rate',
            'Google My Business listings get 5x more views than websites',
            '88% of consumers trust online reviews as much as personal recommendations'
        ),
        'overview_image' => get_template_directory_uri() . '/assets/images/services/local-seo-overview.jpg',
        
        // Services defaults
        'services_title' => 'Complete Local SEO Services',
        'service_1_title' => 'Google My Business optimisation',
        'service_1_description' => 'Complete optimisation of your Google My Business profile to maximise local visibility and engagement.',
        'service_1_features' => array(
            'Profile setup and verification',
            'Business information optimisation',
            'Photo and video optimisation',
            'Google Posts management',
            'Q&A management'
        ),
        
        'service_2_title' => 'Local Citation Building',
        'service_2_description' => 'Build consistent business citations across high-authority local directories and platforms.',
        'service_2_features' => array(
            'Directory submission',
            'NAP consistency management',
            'Industry-specific citations',
            'Citation cleanup and correction',
            'Local partnership building'
        ),
        
        'service_3_title' => 'Review Management',
        'service_3_description' => 'Generate more positive reviews and manage your online reputation across all platforms.',
        'service_3_features' => array(
            'Review generation campaigns',
            'Review response management',
            'Reputation monitoring',
            'Review platform optimisation',
            'Crisis management'
        ),
        
        'service_4_title' => 'Local Keyword optimisation',
        'service_4_description' => 'Target location-specific keywords to capture local search traffic and qualified leads.',
        'service_4_features' => array(
            'Local keyword research',
            'Geographic content optimisation',
            'Location landing pages',
            'Service area optimisation',
            'Local search intent targeting'
        ),
        
        'service_5_title' => 'Local Link Building',
        'service_5_description' => 'Build high-quality local backlinks to boost your authority and local search rankings.',
        'service_5_features' => array(
            'Local business partnerships',
            'Community event participation',
            'Local news and PR',
            'Chamber of Commerce listings',
            'Industry association links'
        ),
        
        'service_6_title' => 'Local Website optimisation',
        'service_6_description' => 'optimise your website structure and content for local search visibility and conversions.',
        'service_6_features' => array(
            'Local schema markup',
            'Contact page optimisation',
            'Location-specific content',
            'Mobile optimisation',
            'Local conversion optimisation'
        ),
        
        // Case Study defaults
        'case_study_label' => 'Local SEO Success Story',
        'case_study_title' => 'Birmingham Dental Practice: 500% Local Visibility Increase',
        'case_study_description' => 'A local dental practice in Birmingham was struggling to attract new patients despite providing excellent service. They were invisible in local search results and losing potential patients to competitors.',
        'case_study_challenge_title' => 'The Challenge',
        'case_study_challenges' => array(
            'No Google My Business optimisation',
            'Inconsistent business information online',
            'Very few online reviews',
            'Poor local search rankings'
        ),
        'case_study_solution_title' => 'Our Local SEO Strategy',
        'case_study_solutions' => array(
            'Complete Google My Business optimisation',
            'Local citation building and cleanup',
            'Review generation campaign',
            'Local content optimisation'
        ),        'case_study_results_title' => 'Results After 6 Months',
        'case_study_results' => array(
            array('number' => '500%', 'label' => 'Local Visibility Increase'),
            array('number' => '350%', 'label' => 'More Phone Calls'),
            array('number' => '80+', 'label' => 'New Patient Reviews'),
            array('number' => '65%', 'label' => 'Increase in New Patients')
        ),
        'case_study_link_url' => home_url('/case-studies'),
        'case_study_link_text' => 'Read Full Case Study',
        
        // Process defaults
        'process_title' => 'Our Local SEO Process',
        'process_step_1_title' => 'Local Market Analysis',
        'process_step_1_description' => 'analyse your local market, competitors, and opportunities for maximum impact.',
        'process_step_2_title' => 'Google My Business Setup',
        'process_step_2_description' => 'optimise and verify your Google My Business profile for maximum visibility.',
        'process_step_3_title' => 'Citation Building',
        'process_step_3_description' => 'Build consistent citations across relevant local directories and platforms.',
        'process_step_4_title' => 'Monitor & optimise',
        'process_step_4_description' => 'Continuously monitor performance and optimise for better local search results.',
        
        // Industries defaults
        'industries_title' => 'Local SEO by Industry',
        'industry_1_title' => 'Healthcare & Medical',
        'industry_1_features' => array(
            'Medical practice optimisation',
            'Patient review management',
            'Local health directory listings',
            'Service area targeting'
        ),
        'industry_2_title' => 'Legal Services',
        'industry_2_features' => array(
            'Law firm local optimisation',
            'Legal directory submissions',
            'Practice area targeting',
            'Professional review management'
        ),
        'industry_3_title' => 'Home Services',
        'industry_3_features' => array(
            'Service area optimisation',
            'Emergency service targeting',
            'Local contractor listings',
            'Seasonal campaign management'
        ),
        'industry_4_title' => 'Retail & Restaurants',
        'industry_4_features' => array(
            'Location-based optimisation',
            'Menu and product showcasing',
            'Event and promotion management',
            'Multi-location SEO'
        ),
        
        // Tools defaults
        'tools_title' => 'Local SEO Tools & Platforms',
        'tools_category_1_title' => 'Google Platforms',
        'tools_category_1_tools' => array('Google My Business', 'Google Search Console', 'Google Analytics', 'Google Maps'),
        'tools_category_2_title' => 'Local SEO Tools',
        'tools_category_2_tools' => array('BrightLocal', 'Whitespark', 'Moz Local', 'LocalFalcon'),
        'tools_category_3_title' => 'Review Management',
        'tools_category_3_tools' => array('ReviewTrackers', 'Podium', 'BirdEye', 'Grade.us'),
        'tools_category_4_title' => 'Citation Management',
        'tools_category_4_tools' => array('Yext', 'Synup', 'Neustar Localeze', 'Acxiom'),
        
        // Testimonial defaults - NO DEFAULT IMAGE
        'testimonial_quote' => 'The local SEO work Aimpro Digital did for our dental practice was phenomenal. We went from being invisible in local search to ranking #1 for \'dentist Birmingham\' and have seen a 65% increase in new patients. The team\'s expertise in local SEO is outstanding.',
        'testimonial_image' => '',
        'testimonial_name' => 'Dr. Sarah Williams',
        'testimonial_title' => 'Practice Owner, Birmingham Dental Care',
        'testimonial_company' => 'Healthcare Provider',
        
        // CTA defaults
        'cta_title' => 'Ready to Dominate Local Search?',
        'cta_description' => 'Let\'s get your business ranking #1 in local search results and attract more customers in your area.',
        'cta_primary_text' => 'Get Free Local SEO Audit',
        'cta_primary_link' => home_url('/contact'),
        'cta_secondary_text' => 'View Local SEO Results',
        'cta_secondary_link' => home_url('/case-studies'),
        'cta_benefits' => array(
            'Local market analysis included',
            'Google My Business optimisation',
            'Citation audit and cleanup'
        )
    );
}

// Meta box callbacks
function local_seo_header_callback($post) {
    wp_nonce_field('local_seo_meta_nonce', 'local_seo_meta_nonce');
    $defaults = get_local_seo_defaults();
    
    $title = get_post_meta($post->ID, '_local_seo_header_title', true) ?: $defaults['header_title'];
    $subtitle = get_post_meta($post->ID, '_local_seo_header_subtitle', true) ?: $defaults['header_subtitle'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_header_title">Page Title</label></th>';
    echo '<td>';
    wp_editor($title, 'local_seo_header_title', array(
        'textarea_name' => 'local_seo_header_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_header_subtitle">Page Subtitle</label></th>';
    echo '<td>';
    wp_editor($subtitle, 'local_seo_header_subtitle', array(
        'textarea_name' => 'local_seo_header_subtitle',
        'media_buttons' => false,
        'textarea_rows' => 4,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '</table>';
}

function local_seo_overview_callback($post) {
    $defaults = get_local_seo_defaults();
    
    $title = get_post_meta($post->ID, '_local_seo_overview_title', true) ?: $defaults['overview_title'];
    $description = get_post_meta($post->ID, '_local_seo_overview_description', true) ?: $defaults['overview_description'];
    $benefits_title = get_post_meta($post->ID, '_local_seo_overview_benefits_title', true) ?: $defaults['overview_benefits_title'];
    $benefits = get_post_meta($post->ID, '_local_seo_overview_benefits', true) ?: $defaults['overview_benefits'];
    $image = get_post_meta($post->ID, '_local_seo_overview_image', true) ?: $defaults['overview_image'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_overview_title">Section Title</label></th>';
    echo '<td>';
    wp_editor($title, 'local_seo_overview_title', array(
        'textarea_name' => 'local_seo_overview_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_overview_description">Description</label></th>';
    echo '<td>';
    wp_editor($description, 'local_seo_overview_description', array(
        'textarea_name' => 'local_seo_overview_description',
        'media_buttons' => false,
        'textarea_rows' => 6,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_overview_benefits_title">Benefits Section Title</label></th>';
    echo '<td>';
    wp_editor($benefits_title, 'local_seo_overview_benefits_title', array(
        'textarea_name' => 'local_seo_overview_benefits_title',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_overview_benefits">Benefits (one per line)</label></th>';
    echo '<td>';
    $benefits_text = is_array($benefits) ? implode("\n", $benefits) : $benefits;
    wp_editor($benefits_text, 'local_seo_overview_benefits', array(
        'textarea_name' => 'local_seo_overview_benefits',
        'media_buttons' => false,
        'textarea_rows' => 5,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_overview_image">Hero Image</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="local_seo_overview_image" name="local_seo_overview_image" value="' . esc_attr($image) . '" />';
    echo '<div id="local_seo_overview_image_preview" style="margin-bottom: 10px;">';
    if ($image) {
        echo '<img src="' . esc_url($image) . '" style="max-width: 200px; height: auto;" />';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="local_seo_overview_image_button">Choose Image</button>';
    echo '<button type="button" class="button" id="local_seo_overview_image_remove" style="margin-left: 10px;">Remove Image</button>';
    echo '</td></tr>';
    echo '</table>';
    
    // Add media uploader script
    echo '<script>
    jQuery(document).ready(function($) {
        var mediaUploader;
        
        $("#local_seo_overview_image_button").click(function(e) {
            e.preventDefault();
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }
            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: "Choose Hero Image",
                button: {
                    text: "Choose Image"
                },
                multiple: false
            });
            mediaUploader.on("select", function() {
                var attachment = mediaUploader.state().get("selection").first().toJSON();
                $("#local_seo_overview_image").val(attachment.url);
                $("#local_seo_overview_image_preview").html("<img src=\"" + attachment.url + "\" style=\"max-width: 200px; height: auto;\" />");
            });
            mediaUploader.open();
        });
        
        $("#local_seo_overview_image_remove").click(function(e) {
            e.preventDefault();
            $("#local_seo_overview_image").val("");
            $("#local_seo_overview_image_preview").html("");
        });
    });
    </script>';
}

function local_seo_services_callback($post) {
    $defaults = get_local_seo_defaults();
    
    $services_title = get_post_meta($post->ID, '_local_seo_services_title', true) ?: $defaults['services_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_services_title">Services Section Title</label></th>';
    echo '<td>';
    wp_editor($services_title, 'local_seo_services_title', array(
        'textarea_name' => 'local_seo_services_title',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '</table>';
    
    echo '<h4>Service Cards</h4>';
    
    for ($i = 1; $i <= 6; $i++) {
        $title = get_post_meta($post->ID, "_local_seo_service_{$i}_title", true) ?: $defaults["service_{$i}_title"];
        $description = get_post_meta($post->ID, "_local_seo_service_{$i}_description", true) ?: $defaults["service_{$i}_description"];
        $features = get_post_meta($post->ID, "_local_seo_service_{$i}_features", true) ?: $defaults["service_{$i}_features"];
        
        echo '<h5>Service ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="local_seo_service_' . $i . '_title">Title</label></th>';
        echo '<td>';
        wp_editor($title, 'local_seo_service_' . $i . '_title', array(
            'textarea_name' => 'local_seo_service_' . $i . '_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        ));
        echo '</td></tr>';
        echo '<tr><th><label for="local_seo_service_' . $i . '_description">Description</label></th>';
        echo '<td>';
        wp_editor($description, 'local_seo_service_' . $i . '_description', array(
            'textarea_name' => 'local_seo_service_' . $i . '_description',
            'media_buttons' => false,
            'textarea_rows' => 4,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        ));
        echo '</td></tr>';
        echo '<tr><th><label for="local_seo_service_' . $i . '_features">Features (one per line)</label></th>';
        echo '<td>';
        $features_text = is_array($features) ? implode("\n", $features) : $features;
        wp_editor($features_text, 'local_seo_service_' . $i . '_features', array(
            'textarea_name' => 'local_seo_service_' . $i . '_features',
            'media_buttons' => false,
            'textarea_rows' => 5,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        ));
        echo '</td></tr>';
        echo '</table><hr>';
    }
}

function local_seo_case_study_callback($post) {
    $defaults = get_local_seo_defaults();
    
    $label = get_post_meta($post->ID, '_local_seo_case_study_label', true) ?: $defaults['case_study_label'];
    $title = get_post_meta($post->ID, '_local_seo_case_study_title', true) ?: $defaults['case_study_title'];
    $description = get_post_meta($post->ID, '_local_seo_case_study_description', true) ?: $defaults['case_study_description'];
    $challenge_title = get_post_meta($post->ID, '_local_seo_case_study_challenge_title', true) ?: $defaults['case_study_challenge_title'];
    $challenges = get_post_meta($post->ID, '_local_seo_case_study_challenges', true) ?: $defaults['case_study_challenges'];
    $solution_title = get_post_meta($post->ID, '_local_seo_case_study_solution_title', true) ?: $defaults['case_study_solution_title'];
    $solutions = get_post_meta($post->ID, '_local_seo_case_study_solutions', true) ?: $defaults['case_study_solutions'];
    $results_title = get_post_meta($post->ID, '_local_seo_case_study_results_title', true) ?: $defaults['case_study_results_title'];
    $link = get_post_meta($post->ID, '_local_seo_case_study_link', true) ?: $defaults['case_study_link'];
    $link_text = get_post_meta($post->ID, '_local_seo_case_study_link_text', true) ?: $defaults['case_study_link_text'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_case_study_label">Case Study Label</label></th>';
    echo '<td>';
    wp_editor($label, 'local_seo_case_study_label', array(
        'textarea_name' => 'local_seo_case_study_label',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_case_study_title">Case Study Title</label></th>';
    echo '<td>';
    wp_editor($title, 'local_seo_case_study_title', array(
        'textarea_name' => 'local_seo_case_study_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_case_study_description">Description</label></th>';
    echo '<td>';
    wp_editor($description, 'local_seo_case_study_description', array(
        'textarea_name' => 'local_seo_case_study_description',
        'media_buttons' => false,
        'textarea_rows' => 4,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_case_study_challenge_title">Challenge Section Title</label></th>';
    echo '<td>';
    wp_editor($challenge_title, 'local_seo_case_study_challenge_title', array(
        'textarea_name' => 'local_seo_case_study_challenge_title',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_case_study_challenges">Challenges (one per line)</label></th>';
    echo '<td>';
    $challenges_text = is_array($challenges) ? implode("\n", $challenges) : $challenges;
    wp_editor($challenges_text, 'local_seo_case_study_challenges', array(
        'textarea_name' => 'local_seo_case_study_challenges',
        'media_buttons' => false,
        'textarea_rows' => 4,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_case_study_solution_title">Solution Section Title</label></th>';
    echo '<td>';
    wp_editor($solution_title, 'local_seo_case_study_solution_title', array(
        'textarea_name' => 'local_seo_case_study_solution_title',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_case_study_solutions">Solutions (one per line)</label></th>';
    echo '<td>';
    $solutions_text = is_array($solutions) ? implode("\n", $solutions) : $solutions;
    wp_editor($solutions_text, 'local_seo_case_study_solutions', array(
        'textarea_name' => 'local_seo_case_study_solutions',
        'media_buttons' => false,
        'textarea_rows' => 4,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_case_study_results_title">Results Section Title</label></th>';
    echo '<td>';
    wp_editor($results_title, 'local_seo_case_study_results_title', array(
        'textarea_name' => 'local_seo_case_study_results_title',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '</table>';
    
    echo '<h4>Results</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $number = get_post_meta($post->ID, "_local_seo_case_study_result_{$i}_number", true) ?: $defaults["case_study_result_{$i}_number"];
        $label = get_post_meta($post->ID, "_local_seo_case_study_result_{$i}_label", true) ?: $defaults["case_study_result_{$i}_label"];
        
        echo '<table class="form-table">';
        echo '<tr><th><label for="local_seo_case_study_result_' . $i . '_number">Result ' . $i . ' Number</label></th>';
        echo '<td><input type="text" id="local_seo_case_study_result_' . $i . '_number" name="local_seo_case_study_result_' . $i . '_number" value="' . esc_attr($number) . '" style="width: 100%;" /></td></tr>';
        echo '<tr><th><label for="local_seo_case_study_result_' . $i . '_label">Result ' . $i . ' Label</label></th>';
        echo '<td><input type="text" id="local_seo_case_study_result_' . $i . '_label" name="local_seo_case_study_result_' . $i . '_label" value="' . esc_attr($label) . '" style="width: 100%;" /></td></tr>';
        echo '</table>';
    }
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_case_study_link">Case Study Link</label></th>';
    echo '<td><input type="url" id="local_seo_case_study_link" name="local_seo_case_study_link" value="' . esc_url($link) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="local_seo_case_study_link_text">Link Text</label></th>';
    echo '<td><input type="text" id="local_seo_case_study_link_text" name="local_seo_case_study_link_text" value="' . esc_attr($link_text) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
}

function local_seo_process_callback($post) {
    $defaults = get_local_seo_defaults();
    
    $title = get_post_meta($post->ID, '_local_seo_process_title', true) ?: $defaults['process_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_process_title">Process Section Title</label></th>';
    echo '<td>';
    wp_editor($title, 'local_seo_process_title', array(
        'textarea_name' => 'local_seo_process_title',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '</table>';
    
    echo '<h4>Process Steps</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $step_title = get_post_meta($post->ID, "_local_seo_process_step_{$i}_title", true) ?: $defaults["process_step_{$i}_title"];
        $step_description = get_post_meta($post->ID, "_local_seo_process_step_{$i}_description", true) ?: $defaults["process_step_{$i}_description"];
        
        echo '<h5>Step ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="local_seo_process_step_' . $i . '_title">Step Title</label></th>';
        echo '<td>';
        wp_editor($step_title, 'local_seo_process_step_' . $i . '_title', array(
            'textarea_name' => 'local_seo_process_step_' . $i . '_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        ));
        echo '</td></tr>';
        echo '<tr><th><label for="local_seo_process_step_' . $i . '_description">Step Description</label></th>';
        echo '<td>';
        wp_editor($step_description, 'local_seo_process_step_' . $i . '_description', array(
            'textarea_name' => 'local_seo_process_step_' . $i . '_description',
            'media_buttons' => false,
            'textarea_rows' => 4,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        ));
        echo '</td></tr>';
        echo '</table>';
    }
}

function local_seo_industries_callback($post) {
    $defaults = get_local_seo_defaults();
    
    $title = get_post_meta($post->ID, '_local_seo_industries_title', true) ?: $defaults['industries_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_industries_title">Industries Section Title</label></th>';
    echo '<td>';
    wp_editor($title, 'local_seo_industries_title', array(
        'textarea_name' => 'local_seo_industries_title',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '</table>';
    
    echo '<h4>Industry Cards</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $industry_title = get_post_meta($post->ID, "_local_seo_industry_{$i}_title", true) ?: $defaults["industry_{$i}_title"];
        $industry_features = get_post_meta($post->ID, "_local_seo_industry_{$i}_features", true) ?: $defaults["industry_{$i}_features"];
        
        echo '<h5>Industry ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="local_seo_industry_' . $i . '_title">Industry Title</label></th>';
        echo '<td>';
        wp_editor($industry_title, 'local_seo_industry_' . $i . '_title', array(
            'textarea_name' => 'local_seo_industry_' . $i . '_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        ));
        echo '</td></tr>';
        echo '<tr><th><label for="local_seo_industry_' . $i . '_features">Industry Features (one per line)</label></th>';
        echo '<td>';
        $features_text = is_array($industry_features) ? implode("\n", $industry_features) : $industry_features;
        wp_editor($features_text, 'local_seo_industry_' . $i . '_features', array(
            'textarea_name' => 'local_seo_industry_' . $i . '_features',
            'media_buttons' => false,
            'textarea_rows' => 4,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        ));
        echo '</td></tr>';
        echo '</table>';
    }
}

function local_seo_tools_callback($post) {
    $defaults = get_local_seo_defaults();
    
    $title = get_post_meta($post->ID, '_local_seo_tools_title', true) ?: $defaults['tools_title'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_tools_title">Tools Section Title</label></th>';
    echo '<td>';
    wp_editor($title, 'local_seo_tools_title', array(
        'textarea_name' => 'local_seo_tools_title',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '</table>';
    
    echo '<h4>Tool Categories</h4>';
    for ($i = 1; $i <= 4; $i++) {
        $category_title = get_post_meta($post->ID, "_local_seo_tools_category_{$i}_title", true) ?: $defaults["tools_category_{$i}_title"];
        $tools = get_post_meta($post->ID, "_local_seo_tools_category_{$i}_tools", true) ?: $defaults["tools_category_{$i}_tools"];
        
        echo '<h5>Category ' . $i . '</h5>';
        echo '<table class="form-table">';
        echo '<tr><th><label for="local_seo_tools_category_' . $i . '_title">Category Title</label></th>';
        echo '<td>';
        wp_editor($category_title, 'local_seo_tools_category_' . $i . '_title', array(
            'textarea_name' => 'local_seo_tools_category_' . $i . '_title',
            'media_buttons' => false,
            'textarea_rows' => 2,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        ));
        echo '</td></tr>';
        echo '<tr><th><label for="local_seo_tools_category_' . $i . '_tools">Tools (one per line)</label></th>';
        echo '<td>';
        $tools_text = is_array($tools) ? implode("\n", $tools) : $tools;
        wp_editor($tools_text, 'local_seo_tools_category_' . $i . '_tools', array(
            'textarea_name' => 'local_seo_tools_category_' . $i . '_tools',
            'media_buttons' => false,
            'textarea_rows' => 4,
            'teeny' => true,
            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
        ));
        echo '</td></tr>';
        echo '</table>';
    }
}

function local_seo_testimonial_callback($post) {
    $defaults = get_local_seo_defaults();
    
    $quote = get_post_meta($post->ID, '_local_seo_testimonial_quote', true) ?: $defaults['testimonial_quote'];
    $image = get_post_meta($post->ID, '_local_seo_testimonial_image', true) ?: '';
    $name = get_post_meta($post->ID, '_local_seo_testimonial_name', true) ?: $defaults['testimonial_name'];
    $title = get_post_meta($post->ID, '_local_seo_testimonial_title', true) ?: $defaults['testimonial_title'];
    $company = get_post_meta($post->ID, '_local_seo_testimonial_company', true) ?: $defaults['testimonial_company'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_testimonial_quote">Testimonial Quote</label></th>';
    echo '<td>';
    wp_editor($quote, 'local_seo_testimonial_quote', array(
        'textarea_name' => 'local_seo_testimonial_quote',
        'media_buttons' => false,
        'textarea_rows' => 4,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_testimonial_image">Author Image (Optional)</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="local_seo_testimonial_image" name="local_seo_testimonial_image" value="' . esc_attr($image) . '" />';
    echo '<div id="local_seo_testimonial_image_preview" style="margin-bottom: 10px;">';
    if ($image) {
        echo '<img src="' . esc_url($image) . '" style="max-width: 100px; height: auto;" />';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="local_seo_testimonial_image_button">Choose Image</button>';
    echo '<button type="button" class="button" id="local_seo_testimonial_image_remove" style="margin-left: 10px;">Remove Image</button>';
    echo '<p class="description">Upload an image for the testimonial author (optional)</p>';
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_testimonial_name">Author Name</label></th>';
    echo '<td><input type="text" id="local_seo_testimonial_name" name="local_seo_testimonial_name" value="' . esc_attr($name) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="local_seo_testimonial_title">Author Title</label></th>';
    echo '<td><input type="text" id="local_seo_testimonial_title" name="local_seo_testimonial_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="local_seo_testimonial_company">Author Company</label></th>';
    echo '<td><input type="text" id="local_seo_testimonial_company" name="local_seo_testimonial_company" value="' . esc_attr($company) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    // Add media uploader script for testimonial
    echo '<script>
    jQuery(document).ready(function($) {
        var testimonialMediaUploader;
        
        $("#local_seo_testimonial_image_button").click(function(e) {
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
                $("#local_seo_testimonial_image").val(attachment.url);
                $("#local_seo_testimonial_image_preview").html("<img src=\"" + attachment.url + "\" style=\"max-width: 100px; height: auto;\" />");
            });
            testimonialMediaUploader.open();
        });
        
        $("#local_seo_testimonial_image_remove").click(function(e) {
            e.preventDefault();
            $("#local_seo_testimonial_image").val("");
            $("#local_seo_testimonial_image_preview").html("");
        });
    });
    </script>';
}

function local_seo_cta_callback($post) {
    $defaults = get_local_seo_defaults();
    
    $title = get_post_meta($post->ID, '_local_seo_cta_title', true) ?: $defaults['cta_title'];
    $description = get_post_meta($post->ID, '_local_seo_cta_description', true) ?: $defaults['cta_description'];
    $primary_text = get_post_meta($post->ID, '_local_seo_cta_primary_text', true) ?: $defaults['cta_primary_text'];
    $primary_link = get_post_meta($post->ID, '_local_seo_cta_primary_link', true) ?: $defaults['cta_primary_link'];
    $secondary_text = get_post_meta($post->ID, '_local_seo_cta_secondary_text', true) ?: $defaults['cta_secondary_text'];
    $secondary_link = get_post_meta($post->ID, '_local_seo_cta_secondary_link', true) ?: $defaults['cta_secondary_link'];
    $benefits = get_post_meta($post->ID, '_local_seo_cta_benefits', true) ?: $defaults['cta_benefits'];
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="local_seo_cta_title">CTA Title</label></th>';
    echo '<td>';
    wp_editor($title, 'local_seo_cta_title', array(
        'textarea_name' => 'local_seo_cta_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_cta_description">CTA Description</label></th>';
    echo '<td>';
    wp_editor($description, 'local_seo_cta_description', array(
        'textarea_name' => 'local_seo_cta_description',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '<tr><th><label for="local_seo_cta_primary_text">Primary Button Text</label></th>';
    echo '<td><input type="text" id="local_seo_cta_primary_text" name="local_seo_cta_primary_text" value="' . esc_attr($primary_text) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="local_seo_cta_primary_link">Primary Button Link</label></th>';
    echo '<td><input type="url" id="local_seo_cta_primary_link" name="local_seo_cta_primary_link" value="' . esc_url($primary_link) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="local_seo_cta_secondary_text">Secondary Button Text</label></th>';
    echo '<td><input type="text" id="local_seo_cta_secondary_text" name="local_seo_cta_secondary_text" value="' . esc_attr($secondary_text) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="local_seo_cta_secondary_link">Secondary Button Link</label></th>';
    echo '<td><input type="url" id="local_seo_cta_secondary_link" name="local_seo_cta_secondary_link" value="' . esc_url($secondary_link) . '" style="width: 100%;" /></td></tr>';
    echo '<tr><th><label for="local_seo_cta_benefits">CTA Benefits (one per line)</label></th>';
    echo '<td>';
    wp_editor(implode("\n", (array)$benefits), 'local_seo_cta_benefits', array(
        'textarea_name' => 'local_seo_cta_benefits',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    echo '</table>';
}

// Save meta data
function save_local_seo_meta($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['local_seo_meta_nonce']) || !wp_verify_nonce($_POST['local_seo_meta_nonce'], 'local_seo_meta_nonce')) {
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
    if (get_page_template_slug($post_id) !== 'page-local-seo.php') {
        return;
    }

    // List of all meta fields to save (rich text fields)
    $rich_text_fields = array(
        // Header
        'local_seo_header_title', 'local_seo_header_subtitle',
        
        // Overview
        'local_seo_overview_title', 'local_seo_overview_description', 'local_seo_overview_benefits_title',
        
        // Services
        'local_seo_services_title',
        
        // Case Study
        'local_seo_case_study_label', 'local_seo_case_study_title', 'local_seo_case_study_description',
        'local_seo_case_study_challenge_title', 'local_seo_case_study_solution_title', 'local_seo_case_study_results_title',
        
        // Process
        'local_seo_process_title',
        
        // Industries
        'local_seo_industries_title',
        
        // Tools
        'local_seo_tools_title',
        
        // Testimonial
        'local_seo_testimonial_quote',
        
        // CTA
        'local_seo_cta_title', 'local_seo_cta_description'
    );

    // List of simple text fields (non-rich text)
    $simple_text_fields = array(
        // Overview
        'local_seo_overview_image',
        
        // Case Study
        'local_seo_case_study_link', 'local_seo_case_study_link_text',
        
        // Testimonial
        'local_seo_testimonial_image', 'local_seo_testimonial_name',
        'local_seo_testimonial_title', 'local_seo_testimonial_company',
        
        // CTA
        'local_seo_cta_primary_text', 'local_seo_cta_primary_link',
        'local_seo_cta_secondary_text', 'local_seo_cta_secondary_link'
    );

    // Save rich text fields using wp_kses_post
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, wp_kses_post($_POST[$field]));
        }
    }

    // Save simple text fields
    foreach ($simple_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }

    // Save array fields (lists) - some may contain rich text
    $rich_text_array_fields = array(
        'local_seo_overview_benefits', 'local_seo_case_study_challenges', 'local_seo_case_study_solutions', 'local_seo_cta_benefits'
    );
    
    foreach ($rich_text_array_fields as $field) {
        if (isset($_POST[$field])) {
            $lines = explode("\n", $_POST[$field]);
            $cleaned_lines = array_map('wp_kses_post', $lines);
            $cleaned_lines = array_filter($cleaned_lines); // Remove empty lines
            update_post_meta($post_id, '_' . $field, $cleaned_lines);
        }
    }

    // Save service cards (1-6) - now with rich text support
    for ($i = 1; $i <= 6; $i++) {
        // Rich text fields
        $service_rich_text_fields = array(
            "local_seo_service_{$i}_title", "local_seo_service_{$i}_description"
        );
        
        foreach ($service_rich_text_fields as $field) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, '_' . $field, wp_kses_post($_POST[$field]));
            }
        }
        
        // Save service features (array with rich text)
        if (isset($_POST["local_seo_service_{$i}_features"])) {
            $lines = explode("\n", $_POST["local_seo_service_{$i}_features"]);
            $cleaned_lines = array_map('wp_kses_post', $lines);
            $cleaned_lines = array_filter($cleaned_lines);
            update_post_meta($post_id, "_local_seo_service_{$i}_features", $cleaned_lines);
        }
    }

    // Save case study results (1-4)
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["local_seo_case_study_result_{$i}_number"])) {
            update_post_meta($post_id, "_local_seo_case_study_result_{$i}_number", sanitize_text_field($_POST["local_seo_case_study_result_{$i}_number"]));
        }
        if (isset($_POST["local_seo_case_study_result_{$i}_label"])) {
            update_post_meta($post_id, "_local_seo_case_study_result_{$i}_label", sanitize_text_field($_POST["local_seo_case_study_result_{$i}_label"]));
        }
    }

    // Save process steps (1-4) - now with rich text support
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["local_seo_process_step_{$i}_title"])) {
            update_post_meta($post_id, "_local_seo_process_step_{$i}_title", wp_kses_post($_POST["local_seo_process_step_{$i}_title"]));
        }
        if (isset($_POST["local_seo_process_step_{$i}_description"])) {
            update_post_meta($post_id, "_local_seo_process_step_{$i}_description", wp_kses_post($_POST["local_seo_process_step_{$i}_description"]));
        }
    }

    // Save industry cards (1-4) - now with rich text support
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["local_seo_industry_{$i}_title"])) {
            update_post_meta($post_id, "_local_seo_industry_{$i}_title", wp_kses_post($_POST["local_seo_industry_{$i}_title"]));
        }
        if (isset($_POST["local_seo_industry_{$i}_features"])) {
            $lines = explode("\n", $_POST["local_seo_industry_{$i}_features"]);
            $cleaned_lines = array_map('wp_kses_post', $lines);
            $cleaned_lines = array_filter($cleaned_lines);
            update_post_meta($post_id, "_local_seo_industry_{$i}_features", $cleaned_lines);
        }
    }

    // Save tool categories (1-4) - now with rich text support
    for ($i = 1; $i <= 4; $i++) {
        if (isset($_POST["local_seo_tools_category_{$i}_title"])) {
            update_post_meta($post_id, "_local_seo_tools_category_{$i}_title", wp_kses_post($_POST["local_seo_tools_category_{$i}_title"]));
        }
        if (isset($_POST["local_seo_tools_category_{$i}_tools"])) {
            $lines = explode("\n", $_POST["local_seo_tools_category_{$i}_tools"]);
            $cleaned_lines = array_map('wp_kses_post', $lines);
            $cleaned_lines = array_filter($cleaned_lines);
            update_post_meta($post_id, "_local_seo_tools_category_{$i}_tools", $cleaned_lines);
        }
    }
}
add_action('save_post', 'save_local_seo_meta');

?>
