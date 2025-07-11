<?php
// On-Page SEO page meta boxes and fields

// Add meta boxes
function on_page_seo_add_meta_boxes() {
    add_meta_box(
        'on_page_seo_header',
        'Page Header Settings',
        'on_page_seo_header_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'on_page_seo_overview',
        'Service Overview',
        'on_page_seo_overview_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'on_page_seo_services',
        'On-Page SEO Services',
        'on_page_seo_services_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'on_page_seo_case_study',
        'Case Study',
        'on_page_seo_case_study_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'on_page_seo_process',
        'Process Steps',
        'on_page_seo_process_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'on_page_seo_tools',
        'Tools & Technologies',
        'on_page_seo_tools_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'on_page_seo_industries',
        'Industry Applications',
        'on_page_seo_industries_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'on_page_seo_faqs',
        'FAQ Section',
        'on_page_seo_faqs_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'on_page_seo_testimonial',
        'Testimonial',
        'on_page_seo_testimonial_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'on_page_seo_cta',
        'Call to Action',
        'on_page_seo_cta_callback',
        'page',
        'normal',
        'high'
    );
}

// Check if this is the On-Page SEO page
function is_on_page_seo_page() {
    global $post;
    return $post && get_page_template_slug($post->ID) === 'page-on-page-seo.php';
}

// Only add meta boxes for On-Page SEO page
add_action('add_meta_boxes', function() {
    if (is_on_page_seo_page()) {
        on_page_seo_add_meta_boxes();
    }
});

// Header callback
function on_page_seo_header_callback($post) {
    $header_title = get_post_meta($post->ID, 'on_page_seo_header_title', true) ?: 'On-Page SEO Services';
    $header_subtitle = get_post_meta($post->ID, 'on_page_seo_header_subtitle', true) ?: 'optimise every page element to boost search rankings and user experience';
    $header_badges = get_post_meta($post->ID, 'on_page_seo_header_badges', true) ?: array(
        'Content optimisation',
        'Technical Implementation',
        'User Experience'
    );
    
    wp_nonce_field('on_page_seo_meta_nonce', 'on_page_seo_meta_nonce');
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_header_title">Header Title</label></th>';
    echo '<td>';
    wp_editor($header_title, 'on_page_seo_header_title', array(
        'textarea_name' => 'on_page_seo_header_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_header_subtitle">Header Subtitle</label></th>';
    echo '<td>';
    wp_editor($header_subtitle, 'on_page_seo_header_subtitle', array(
        'textarea_name' => 'on_page_seo_header_subtitle',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label>Header Badges</label></th>';
    echo '<td>';
    if (is_array($header_badges)) {
        foreach ($header_badges as $i => $badge) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="on_page_seo_header_badges[]" value="' . esc_attr($badge) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Overview callback
function on_page_seo_overview_callback($post) {
    $overview_title = get_post_meta($post->ID, 'on_page_seo_overview_title', true) ?: 'Comprehensive On-Page SEO optimisation';
    $overview_description_1 = get_post_meta($post->ID, 'on_page_seo_overview_description_1', true) ?: 'Our on-page SEO services focus on optimising individual web pages to rank higher and earn more relevant traffic in search engines. We optimise both the content and HTML source code of a page, ensuring every element contributes to your search visibility and user experience.';
    $overview_description_2 = get_post_meta($post->ID, 'on_page_seo_overview_description_2', true) ?: 'From title tags and meta descriptions to content structure and internal linking, our systematic approach to on-page SEO ensures your website communicates effectively with both search engines and users.';
    $stats = get_post_meta($post->ID, 'on_page_seo_stats', true) ?: array(
        array('number' => '73%', 'label' => 'Average ranking improvement'),
        array('number' => '280%', 'label' => 'Increase in organic traffic'),
        array('number' => '45%', 'label' => 'Improvement in CTR')
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_overview_title">Overview Title</label></th>';
    echo '<td>';
    wp_editor($overview_title, 'on_page_seo_overview_title', array(
        'textarea_name' => 'on_page_seo_overview_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_overview_description_1">Overview Description 1</label></th>';
    echo '<td>';
    wp_editor($overview_description_1, 'on_page_seo_overview_description_1', array(
        'textarea_name' => 'on_page_seo_overview_description_1',
        'media_buttons' => false,
        'textarea_rows' => 4,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_overview_description_2">Overview Description 2</label></th>';
    echo '<td>';
    wp_editor($overview_description_2, 'on_page_seo_overview_description_2', array(
        'textarea_name' => 'on_page_seo_overview_description_2',
        'media_buttons' => false,
        'textarea_rows' => 4,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label>Statistics</label></th>';
    echo '<td>';
    if (is_array($stats)) {
        foreach ($stats as $i => $stat) {
            echo '<div style="margin-bottom: 10px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>Stat ' . ($i + 1) . ' Number:</label><br>';
            echo '<input type="text" name="on_page_seo_stats[' . $i . '][number]" value="' . esc_attr($stat['number']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            echo '<label>Stat ' . ($i + 1) . ' Label:</label><br>';
            echo '<input type="text" name="on_page_seo_stats[' . $i . '][label]" value="' . esc_attr($stat['label']) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Services callback
function on_page_seo_services_callback($post) {
    $services_title = get_post_meta($post->ID, 'on_page_seo_services_title', true) ?: 'Our On-Page SEO Services';
    $services = get_post_meta($post->ID, 'on_page_seo_services', true) ?: array(
        array(
            'title' => 'Title Tag & Meta Description optimisation',
            'description' => 'Craft compelling title tags and meta descriptions that improve click-through rates and communicate page relevance to search engines.',
            'features' => array(
                'Keyword-optimised title tags',
                'Compelling meta descriptions',
                'SERP preview optimisation',
                'Character limit compliance'
            )
        ),
        array(
            'title' => 'Content Structure & optimisation',
            'description' => 'optimise content structure using proper heading hierarchy, keyword placement, and semantic markup for better search visibility.',
            'features' => array(
                'H1-H6 heading optimisation',
                'Keyword density analysis',
                'Content readability improvement',
                'Featured snippet optimisation'
            )
        ),
        array(
            'title' => 'URL Structure & optimisation',
            'description' => 'Create SEO-friendly URL structures that are both user-friendly and search engine optimised for maximum visibility.',
            'features' => array(
                'Clean URL structure',
                'Keyword-rich URLs',
                'URL canonicalization',
                'Redirect management'
            )
        ),
        array(
            'title' => 'Image & Media optimisation',
            'description' => 'optimise images and media files for faster loading times and better search engine understanding of your content.',
            'features' => array(
                'Alt text optimisation',
                'Image file compression',
                'Descriptive file names',
                'WebP format conversion'
            )
        ),
        array(
            'title' => 'Internal Linking Strategy',
            'description' => 'Develop strategic internal linking structures that distribute page authority and improve user navigation throughout your site.',
            'features' => array(
                'Link architecture planning',
                'Anchor text optimisation',
                'Deep linking strategies',
                'Link equity distribution'
            )
        ),
        array(
            'title' => 'Schema Markup Implementation',
            'description' => 'Implement structured data markup to help search engines better understand your content and enable rich snippets.',
            'features' => array(
                'Rich snippet optimisation',
                'Local business schema',
                'Product schema markup',
                'FAQ and How-to schemas'
            )
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_services_title">Services Title</label></th>';
    echo '<td>';
    wp_editor($services_title, 'on_page_seo_services_title', array(
        'textarea_name' => 'on_page_seo_services_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label>Services</label></th>';
    echo '<td>';
    if (is_array($services)) {
        foreach ($services as $i => $service) {
            echo '<div style="margin-bottom: 20px; border: 1px solid #ddd; padding: 15px;">';
            echo '<h4>Service ' . ($i + 1) . '</h4>';
            echo '<label>Title:</label><br>';
            wp_editor($service['title'], "on_page_seo_services_{$i}_title", array(
                'textarea_name' => "on_page_seo_services[{$i}][title]",
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            ));
            echo '<br><label>Description:</label><br>';
            wp_editor($service['description'], "on_page_seo_services_{$i}_description", array(
                'textarea_name' => "on_page_seo_services[{$i}][description]",
                'media_buttons' => false,
                'textarea_rows' => 4,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
            ));
            echo '<br><label>Features:</label><br>';
            if (isset($service['features']) && is_array($service['features'])) {
                foreach ($service['features'] as $j => $feature) {
                    echo '<input type="text" name="on_page_seo_services[' . $i . '][features][]" value="' . esc_attr($feature) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
                }
            }
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Case Study callback
function on_page_seo_case_study_callback($post) {
    $case_study_title = get_post_meta($post->ID, 'on_page_seo_case_study_title', true) ?: 'Case Study: Professional Services Firm';
    $case_study_subtitle = get_post_meta($post->ID, 'on_page_seo_case_study_subtitle', true) ?: 'Complete On-Page optimisation Drives 425% Traffic Growth';
    $case_study_description = get_post_meta($post->ID, 'on_page_seo_case_study_description', true) ?: 'A London-based professional services firm approached us with poor search rankings and low organic visibility. Our comprehensive on-page optimisation strategy transformed their digital presence.';
    $challenges = get_post_meta($post->ID, 'on_page_seo_challenges', true) ?: array(
        'Pages ranking beyond position 50 for target keywords',
        'Poor content structure and keyword targeting',
        'Low click-through rates from search results',
        'Missing technical SEO elements'
    );
    $solutions = get_post_meta($post->ID, 'on_page_seo_solutions', true) ?: array(
        'Complete title tag and meta description overhaul',
        'Content restructuring with proper heading hierarchy',
        'Strategic internal linking implementation',
        'Schema markup for all service pages'
    );
    $metrics = get_post_meta($post->ID, 'on_page_seo_metrics', true) ?: array(
        array('number' => '425%', 'label' => 'Increase in Organic Traffic'),
        array('number' => '68%', 'label' => 'Improvement in CTR'),
        array('number' => '85%', 'label' => 'Keywords in Top 10'),
        array('number' => '12 Weeks', 'label' => 'Time to See Results')
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_case_study_title">Case Study Title</label></th>';
    echo '<td>';
    wp_editor($case_study_title, 'on_page_seo_case_study_title', array(
        'textarea_name' => 'on_page_seo_case_study_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_case_study_subtitle">Case Study Subtitle</label></th>';
    echo '<td>';
    wp_editor($case_study_subtitle, 'on_page_seo_case_study_subtitle', array(
        'textarea_name' => 'on_page_seo_case_study_subtitle',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_case_study_description">Case Study Description</label></th>';
    echo '<td>';
    wp_editor($case_study_description, 'on_page_seo_case_study_description', array(
        'textarea_name' => 'on_page_seo_case_study_description',
        'media_buttons' => false,
        'textarea_rows' => 5,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label>Challenges</label></th>';
    echo '<td>';
    if (is_array($challenges)) {
        foreach ($challenges as $i => $challenge) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="on_page_seo_challenges[]" value="' . esc_attr($challenge) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    
    echo '<tr><th><label>Solutions</label></th>';
    echo '<td>';
    if (is_array($solutions)) {
        foreach ($solutions as $i => $solution) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="on_page_seo_solutions[]" value="' . esc_attr($solution) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    
    echo '<tr><th><label>Metrics</label></th>';
    echo '<td>';
    if (is_array($metrics)) {
        foreach ($metrics as $i => $metric) {
            echo '<div style="margin-bottom: 10px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>Metric ' . ($i + 1) . ' Number:</label><br>';
            echo '<input type="text" name="on_page_seo_metrics[' . $i . '][number]" value="' . esc_attr($metric['number']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            echo '<label>Metric ' . ($i + 1) . ' Label:</label><br>';
            echo '<input type="text" name="on_page_seo_metrics[' . $i . '][label]" value="' . esc_attr($metric['label']) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Process callback
function on_page_seo_process_callback($post) {
    $process_title = get_post_meta($post->ID, 'on_page_seo_process_title', true) ?: 'Our On-Page SEO Process';
    $process_steps = get_post_meta($post->ID, 'on_page_seo_process_steps', true) ?: array(
        array(
            'title' => 'Content Audit & Analysis',
            'description' => 'Comprehensive review of existing content, identifying optimisation opportunities and gaps in your current on-page SEO strategy.'
        ),
        array(
            'title' => 'Keyword Research & Mapping',
            'description' => 'In-depth keyword research to identify high-value opportunities and map keywords to specific pages for optimal targeting.'
        ),
        array(
            'title' => 'Technical Implementation',
            'description' => 'Systematic implementation of on-page optimisations including title tags, meta descriptions, headers, and technical elements.'
        ),
        array(
            'title' => 'Content optimisation',
            'description' => 'optimise content structure, readability, and keyword placement while maintaining natural flow and user value.'
        ),
        array(
            'title' => 'Monitoring & Refinement',
            'description' => 'Ongoing monitoring of performance metrics and continuous refinement of on-page elements based on data and results.'
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_process_title">Process Title</label></th>';
    echo '<td>';
    wp_editor($process_title, 'on_page_seo_process_title', array(
        'textarea_name' => 'on_page_seo_process_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label>Process Steps</label></th>';
    echo '<td>';
    if (is_array($process_steps)) {
        foreach ($process_steps as $i => $step) {
            echo '<div style="margin-bottom: 15px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>Step ' . ($i + 1) . ' Title:</label><br>';
            wp_editor($step['title'], "on_page_seo_process_step_{$i}_title", array(
                'textarea_name' => "on_page_seo_process_steps[{$i}][title]",
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            ));
            echo '<br><label>Step ' . ($i + 1) . ' Description:</label><br>';
            wp_editor($step['description'], "on_page_seo_process_step_{$i}_description", array(
                'textarea_name' => "on_page_seo_process_steps[{$i}][description]",
                'media_buttons' => false,
                'textarea_rows' => 4,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
            ));
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Tools callback
function on_page_seo_tools_callback($post) {
    $tools_title = get_post_meta($post->ID, 'on_page_seo_tools_title', true) ?: 'Tools & Technologies We Use';
    $tool_categories = get_post_meta($post->ID, 'on_page_seo_tool_categories', true) ?: array(
        array(
            'title' => 'SEO Analysis Tools',
            'tools' => array(
                'Screaming Frog SEO Spider',
                'Ahrefs Site Audit',
                'SEMrush On-Page SEO Checker',
                'Google Search Console'
            )
        ),
        array(
            'title' => 'Content optimisation',
            'tools' => array(
                'Surfer SEO Content Editor',
                'Clearscope Content optimisation',
                'MarketMuse Content Planning',
                'Grammarly for Readability'
            )
        ),
        array(
            'title' => 'Technical Implementation',
            'tools' => array(
                'Yoast SEO (WordPress)',
                'Schema.org Markup',
                'Google Tag Manager',
                'Custom HTML/CSS Solutions'
            )
        ),
        array(
            'title' => 'Performance Monitoring',
            'tools' => array(
                'Google Analytics 4',
                'Google PageSpeed Insights',
                'GTmetrix Performance',
                'Core Web Vitals Monitoring'
            )
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_tools_title">Tools Title</label></th>';
    echo '<td>';
    wp_editor($tools_title, 'on_page_seo_tools_title', array(
        'textarea_name' => 'on_page_seo_tools_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label>Tool Categories</label></th>';
    echo '<td>';
    if (is_array($tool_categories)) {
        foreach ($tool_categories as $i => $category) {
            echo '<div style="margin-bottom: 15px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>Category ' . ($i + 1) . ' Title:</label><br>';
            wp_editor($category['title'], "on_page_seo_tool_category_{$i}_title", array(
                'textarea_name' => "on_page_seo_tool_categories[{$i}][title]",
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            ));
            echo '<br><label>Tools:</label><br>';
            if (isset($category['tools']) && is_array($category['tools'])) {
                foreach ($category['tools'] as $j => $tool) {
                    echo '<input type="text" name="on_page_seo_tool_categories[' . $i . '][tools][]" value="' . esc_attr($tool) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
                }
            }
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Industries callback
function on_page_seo_industries_callback($post) {
    $industries_title = get_post_meta($post->ID, 'on_page_seo_industries_title', true) ?: 'On-Page SEO for Your Industry';
    $industries = get_post_meta($post->ID, 'on_page_seo_industries', true) ?: array(
        array(
            'title' => 'E-commerce',
            'description' => 'Product page optimisation, category structure, and schema markup for enhanced product visibility in search results.'
        ),
        array(
            'title' => 'Professional Services',
            'description' => 'Service page optimisation, local business schema, and content structure to attract high-value clients.'
        ),
        array(
            'title' => 'Healthcare',
            'description' => 'Medical content optimisation, YMYL compliance, and structured data for healthcare providers and services.'
        ),
        array(
            'title' => 'Real Estate',
            'description' => 'Property listing optimisation, local area content, and schema markup for enhanced search visibility.'
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_industries_title">Industries Title</label></th>';
    echo '<td>';
    wp_editor($industries_title, 'on_page_seo_industries_title', array(
        'textarea_name' => 'on_page_seo_industries_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label>Industries</label></th>';
    echo '<td>';
    if (is_array($industries)) {
        foreach ($industries as $i => $industry) {
            echo '<div style="margin-bottom: 15px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>Industry ' . ($i + 1) . ' Title:</label><br>';
            wp_editor($industry['title'], "on_page_seo_industry_{$i}_title", array(
                'textarea_name' => "on_page_seo_industries[{$i}][title]",
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            ));
            echo '<br><label>Industry ' . ($i + 1) . ' Description:</label><br>';
            wp_editor($industry['description'], "on_page_seo_industry_{$i}_description", array(
                'textarea_name' => "on_page_seo_industries[{$i}][description]",
                'media_buttons' => false,
                'textarea_rows' => 4,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
            ));
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// FAQs callback
function on_page_seo_faqs_callback($post) {
    $faqs_title = get_post_meta($post->ID, 'on_page_seo_faqs_title', true) ?: 'Frequently Asked Questions';
    $faqs = get_post_meta($post->ID, 'on_page_seo_faqs', true) ?: array(
        array(
            'question' => 'How long does it take to see results from on-page SEO?',
            'answer' => 'While some improvements can be seen within 2-4 weeks, significant ranking improvements typically occur within 8-12 weeks of implementation. The timeline depends on competition level and current site authority.'
        ),
        array(
            'question' => 'What\'s the difference between on-page and technical SEO?',
            'answer' => 'On-page SEO focuses on optimising individual page content and HTML elements, while technical SEO addresses site-wide technical issues like crawlability, site speed, and mobile-friendliness.'
        ),
        array(
            'question' => 'Do you provide ongoing on-page optimisation?',
            'answer' => 'Yes, we offer both one-time optimisation services and ongoing monthly optimisation as part of our comprehensive SEO packages to maintain and improve performance over time.'
        ),
        array(
            'question' => 'How do you measure on-page SEO success?',
            'answer' => 'We track keyword rankings, organic traffic growth, click-through rates, time on page, and conversions to measure the effectiveness of our on-page optimisations.'
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_faqs_title">FAQs Title</label></th>';
    echo '<td>';
    wp_editor($faqs_title, 'on_page_seo_faqs_title', array(
        'textarea_name' => 'on_page_seo_faqs_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label>FAQ Items</label></th>';
    echo '<td>';
    if (is_array($faqs)) {
        foreach ($faqs as $i => $faq) {
            echo '<div style="margin-bottom: 15px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>FAQ ' . ($i + 1) . ' Question:</label><br>';
            wp_editor($faq['question'], "on_page_seo_faq_{$i}_question", array(
                'textarea_name' => "on_page_seo_faqs[{$i}][question]",
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            ));
            echo '<br><label>FAQ ' . ($i + 1) . ' Answer:</label><br>';
            wp_editor($faq['answer'], "on_page_seo_faq_{$i}_answer", array(
                'textarea_name' => "on_page_seo_faqs[{$i}][answer]",
                'media_buttons' => false,
                'textarea_rows' => 4,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
            ));
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Testimonial callback
function on_page_seo_testimonial_callback($post) {
    $testimonial_quote = get_post_meta($post->ID, 'on_page_seo_testimonial_quote', true) ?: 'The on-page optimisation work AIM Pro Marketing did for our website was incredible. Within 3 months, we saw our main service pages ranking on the first page of Google. The attention to detail in optimising every element was impressive.';
    $testimonial_author_name = get_post_meta($post->ID, 'on_page_seo_testimonial_author_name', true) ?: 'Sarah Mitchell';
    $testimonial_author_title = get_post_meta($post->ID, 'on_page_seo_testimonial_author_title', true) ?: 'Marketing Director, Professional Services Ltd';
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_testimonial_quote">Testimonial Quote</label></th>';
    echo '<td>';
    wp_editor($testimonial_quote, 'on_page_seo_testimonial_quote', array(
        'textarea_name' => 'on_page_seo_testimonial_quote',
        'media_buttons' => false,
        'textarea_rows' => 5,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_testimonial_author_name">Author Name</label></th>';
    echo '<td>';
    wp_editor($testimonial_author_name, 'on_page_seo_testimonial_author_name', array(
        'textarea_name' => 'on_page_seo_testimonial_author_name',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_testimonial_author_title">Author Title</label></th>';
    echo '<td>';
    wp_editor($testimonial_author_title, 'on_page_seo_testimonial_author_title', array(
        'textarea_name' => 'on_page_seo_testimonial_author_title',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '</table>';
}

// CTA callback
function on_page_seo_cta_callback($post) {
    $cta_title = get_post_meta($post->ID, 'on_page_seo_cta_title', true) ?: 'Ready to optimise Your Website Pages?';
    $cta_description = get_post_meta($post->ID, 'on_page_seo_cta_description', true) ?: 'Get a comprehensive on-page SEO audit and strategy session. We\'ll identify optimisation opportunities and show you how to improve your search rankings.';
    $cta_primary_text = get_post_meta($post->ID, 'on_page_seo_cta_primary_text', true) ?: 'Get Free SEO Audit';
    $cta_primary_url = get_post_meta($post->ID, 'on_page_seo_cta_primary_url', true) ?: home_url('/contact');
    $cta_secondary_text = get_post_meta($post->ID, 'on_page_seo_cta_secondary_text', true) ?: 'View All SEO Services';
    $cta_secondary_url = get_post_meta($post->ID, 'on_page_seo_cta_secondary_url', true) ?: home_url('/seo-services');
    $cta_features = get_post_meta($post->ID, 'on_page_seo_cta_features', true) ?: array(
        'Free 30-minute consultation',
        'Detailed optimisation recommendations',
        'No obligation quote'
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="on_page_seo_cta_title">CTA Title</label></th>';
    echo '<td>';
    wp_editor($cta_title, 'on_page_seo_cta_title', array(
        'textarea_name' => 'on_page_seo_cta_title',
        'media_buttons' => false,
        'textarea_rows' => 3,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_cta_description">CTA Description</label></th>';
    echo '<td>';
    wp_editor($cta_description, 'on_page_seo_cta_description', array(
        'textarea_name' => 'on_page_seo_cta_description',
        'media_buttons' => false,
        'textarea_rows' => 4,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_cta_primary_text">Primary Button Text</label></th>';
    echo '<td>';
    wp_editor($cta_primary_text, 'on_page_seo_cta_primary_text', array(
        'textarea_name' => 'on_page_seo_cta_primary_text',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_cta_primary_url">Primary Button URL</label></th>';
    echo '<td><input type="text" id="on_page_seo_cta_primary_url" name="on_page_seo_cta_primary_url" value="' . esc_attr($cta_primary_url) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="on_page_seo_cta_secondary_text">Secondary Button Text</label></th>';
    echo '<td>';
    wp_editor($cta_secondary_text, 'on_page_seo_cta_secondary_text', array(
        'textarea_name' => 'on_page_seo_cta_secondary_text',
        'media_buttons' => false,
        'textarea_rows' => 2,
        'teeny' => true,
        'quicktags' => array('buttons' => 'strong,em,link')
    ));
    echo '</td></tr>';
    
    echo '<tr><th><label for="on_page_seo_cta_secondary_url">Secondary Button URL</label></th>';
    echo '<td><input type="text" id="on_page_seo_cta_secondary_url" name="on_page_seo_cta_secondary_url" value="' . esc_attr($cta_secondary_url) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Features</label></th>';
    echo '<td>';
    if (is_array($cta_features)) {
        foreach ($cta_features as $i => $feature) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="on_page_seo_cta_features[]" value="' . esc_attr($feature) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Save meta data
function on_page_seo_save_meta($post_id) {
    if (!isset($_POST['on_page_seo_meta_nonce']) || !wp_verify_nonce($_POST['on_page_seo_meta_nonce'], 'on_page_seo_meta_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save all meta fields
    $rich_text_fields = array(
        'on_page_seo_header_title',
        'on_page_seo_header_subtitle',
        'on_page_seo_overview_title',
        'on_page_seo_overview_description_1',
        'on_page_seo_overview_description_2',
        'on_page_seo_services_title',
        'on_page_seo_case_study_title',
        'on_page_seo_case_study_subtitle', 
        'on_page_seo_case_study_description',
        'on_page_seo_process_title',
        'on_page_seo_tools_title',
        'on_page_seo_industries_title',
        'on_page_seo_faqs_title',
        'on_page_seo_testimonial_quote',
        'on_page_seo_testimonial_author_name',
        'on_page_seo_testimonial_author_title',
        'on_page_seo_cta_title',
        'on_page_seo_cta_description',
        'on_page_seo_cta_primary_text',
        'on_page_seo_cta_secondary_text'
    );
    
    $regular_fields = array(
        'on_page_seo_header_badges',
        'on_page_seo_stats',
        'on_page_seo_services',
        'on_page_seo_challenges',
        'on_page_seo_solutions',
        'on_page_seo_metrics',
        'on_page_seo_process_steps',
        'on_page_seo_tool_categories',
        'on_page_seo_industries',
        'on_page_seo_faqs',
        'on_page_seo_cta_primary_url',
        'on_page_seo_cta_secondary_url',
        'on_page_seo_cta_features'
    );

    // Save rich text fields with wp_kses_post()
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, wp_kses_post($_POST[$field]));
        }
    }
    
    // Save regular fields (arrays and simple text)
    foreach ($regular_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
    
    // Handle complex array fields with rich text content
    if (isset($_POST['on_page_seo_services']) && is_array($_POST['on_page_seo_services'])) {
        $services = $_POST['on_page_seo_services'];
        foreach ($services as $i => $service) {
            if (isset($service['title'])) {
                $services[$i]['title'] = wp_kses_post($service['title']);
            }
            if (isset($service['description'])) {
                $services[$i]['description'] = wp_kses_post($service['description']);
            }
        }
        update_post_meta($post_id, 'on_page_seo_services', $services);
    }
    
    if (isset($_POST['on_page_seo_process_steps']) && is_array($_POST['on_page_seo_process_steps'])) {
        $steps = $_POST['on_page_seo_process_steps'];
        foreach ($steps as $i => $step) {
            if (isset($step['title'])) {
                $steps[$i]['title'] = wp_kses_post($step['title']);
            }
            if (isset($step['description'])) {
                $steps[$i]['description'] = wp_kses_post($step['description']);
            }
        }
        update_post_meta($post_id, 'on_page_seo_process_steps', $steps);
    }
    
    if (isset($_POST['on_page_seo_tool_categories']) && is_array($_POST['on_page_seo_tool_categories'])) {
        $categories = $_POST['on_page_seo_tool_categories'];
        foreach ($categories as $i => $category) {
            if (isset($category['title'])) {
                $categories[$i]['title'] = wp_kses_post($category['title']);
            }
        }
        update_post_meta($post_id, 'on_page_seo_tool_categories', $categories);
    }
    
    if (isset($_POST['on_page_seo_industries']) && is_array($_POST['on_page_seo_industries'])) {
        $industries = $_POST['on_page_seo_industries'];
        foreach ($industries as $i => $industry) {
            if (isset($industry['title'])) {
                $industries[$i]['title'] = wp_kses_post($industry['title']);
            }
            if (isset($industry['description'])) {
                $industries[$i]['description'] = wp_kses_post($industry['description']);
            }
        }
        update_post_meta($post_id, 'on_page_seo_industries', $industries);
    }
    
    if (isset($_POST['on_page_seo_faqs']) && is_array($_POST['on_page_seo_faqs'])) {
        $faqs = $_POST['on_page_seo_faqs'];
        foreach ($faqs as $i => $faq) {
            if (isset($faq['question'])) {
                $faqs[$i]['question'] = wp_kses_post($faq['question']);
            }
            if (isset($faq['answer'])) {
                $faqs[$i]['answer'] = wp_kses_post($faq['answer']);
            }
        }
        update_post_meta($post_id, 'on_page_seo_faqs', $faqs);
    }
}

add_action('save_post', 'on_page_seo_save_meta');
?>
