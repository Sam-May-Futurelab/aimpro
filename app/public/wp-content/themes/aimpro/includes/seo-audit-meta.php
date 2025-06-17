<?php
// SEO Audit page meta boxes and fields

// Add meta boxes
function seo_audit_add_meta_boxes() {
    add_meta_box(
        'seo_audit_header',
        'Page Header Settings',
        'seo_audit_header_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_audit_overview',
        'SEO Audit Overview',
        'seo_audit_overview_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_audit_components',
        'Audit Components',
        'seo_audit_components_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_audit_sample',
        'Audit Sample Report',
        'seo_audit_sample_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_audit_process',
        'Audit Process',
        'seo_audit_process_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_audit_case_study',
        'Case Study',
        'seo_audit_case_study_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_audit_tools',
        'Audit Tools',
        'seo_audit_tools_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_audit_testimonial',
        'Testimonial',
        'seo_audit_testimonial_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'seo_audit_cta',
        'Call to Action',
        'seo_audit_cta_callback',
        'page',
        'normal',
        'high'
    );
}

// Check if this is the SEO Audit page
function is_seo_audit_page() {
    global $post;
    return $post && get_page_template_slug($post->ID) === 'page-seo-audit.php';
}

// Only add meta boxes for SEO Audit page
add_action('add_meta_boxes', function() {
    if (is_seo_audit_page()) {
        seo_audit_add_meta_boxes();
    }
});

// Header callback
function seo_audit_header_callback($post) {
    wp_nonce_field('seo_audit_meta_nonce', 'seo_audit_meta_nonce');
    
    $title = get_post_meta($post->ID, 'seo_audit_header_title', true) ?: 'SEO Audit Services';
    $subtitle = get_post_meta($post->ID, 'seo_audit_header_subtitle', true) ?: 'Comprehensive analysis of your website\'s SEO performance and growth opportunities';
    $hero_image = get_post_meta($post->ID, 'seo_audit_hero_image', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_audit_header_title">Page Title</label></th>';
    echo '<td><input type="text" id="seo_audit_header_title" name="seo_audit_header_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_header_subtitle">Page Subtitle</label></th>';
    echo '<td><textarea id="seo_audit_header_subtitle" name="seo_audit_header_subtitle" rows="3" style="width: 100%;">' . esc_textarea($subtitle) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="seo_audit_hero_image">Hero Image</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="seo_audit_hero_image" name="seo_audit_hero_image" value="' . esc_attr($hero_image) . '" />';
    echo '<div id="seo_audit_hero_image_preview">';
    if ($hero_image) {
        echo '<img src="' . esc_url($hero_image) . '" style="max-width: 200px; height: auto;" /><br>';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="seo_audit_hero_image_button">Choose Image</button>';
    if ($hero_image) {
        echo ' <button type="button" class="button" id="seo_audit_hero_image_remove">Remove Image</button>';
    }
    echo '</td></tr>';
    echo '</table>';
}

// Overview callback
function seo_audit_overview_callback($post) {
    $overview_title = get_post_meta($post->ID, 'seo_audit_overview_title', true) ?: 'Discover Your Website\'s Hidden SEO Potential';
    $overview_description = get_post_meta($post->ID, 'seo_audit_overview_description', true) ?: 'Our comprehensive SEO audit provides a detailed analysis of your website\'s current performance, identifies critical issues affecting your rankings, and delivers a prioritized action plan to improve your search visibility. Get the insights you need to outrank your competition and drive more organic traffic.';
    $benefits_title = get_post_meta($post->ID, 'seo_audit_benefits_title', true) ?: 'What Our SEO Audit Reveals:';
    $benefits = get_post_meta($post->ID, 'seo_audit_benefits', true) ?: array(
        'Technical SEO issues preventing good rankings',
        'Content gaps and optimization opportunities',
        'Competitor analysis and market positioning',
        'Keyword opportunities you\'re missing',
        'Backlink profile analysis and improvement areas',
        'Mobile and Core Web Vitals performance'
    );
    $overview_image = get_post_meta($post->ID, 'seo_audit_overview_image', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_audit_overview_title">Overview Title</label></th>';
    echo '<td><input type="text" id="seo_audit_overview_title" name="seo_audit_overview_title" value="' . esc_attr($overview_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_overview_description">Overview Description</label></th>';
    echo '<td><textarea id="seo_audit_overview_description" name="seo_audit_overview_description" rows="4" style="width: 100%;">' . esc_textarea($overview_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="seo_audit_benefits_title">Benefits Title</label></th>';
    echo '<td><input type="text" id="seo_audit_benefits_title" name="seo_audit_benefits_title" value="' . esc_attr($benefits_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Benefits List</label></th>';
    echo '<td>';
    if (is_array($benefits)) {
        foreach ($benefits as $i => $benefit) {
            echo '<div style="margin-bottom: 10px;">';
            echo '<input type="text" name="seo_audit_benefits[]" value="' . esc_attr($benefit) . '" style="width: 90%;" />';
            echo ' <button type="button" class="button remove-benefit">Remove</button>';
            echo '</div>';
        }
    }
    echo '<div id="seo-audit-benefits-container"></div>';
    echo '<button type="button" class="button" id="add-seo-audit-benefit">Add Benefit</button>';
    echo '</td></tr>';    echo '<tr><th><label for="seo_audit_overview_image">Overview Image</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="seo_audit_overview_image" name="seo_audit_overview_image" value="' . esc_attr($overview_image) . '" />';
    echo '<div id="seo_audit_overview_image_preview" style="margin-bottom: 10px;">';
    if ($overview_image) {
        echo '<img src="' . esc_url(wp_get_attachment_url($overview_image)) . '" style="max-width: 200px; height: auto;" />';
    }
    echo '</div>';
    echo '<button type="button" class="button upload-button" data-target="seo_audit_overview_image">Upload Image</button>';
    echo '<button type="button" class="button remove-button" data-target="seo_audit_overview_image" style="margin-left: 10px;">Remove Image</button>';
    echo '</td></tr>';
    echo '</table>';
}

// Components callback
function seo_audit_components_callback($post) {
    $components_title = get_post_meta($post->ID, 'seo_audit_components_title', true) ?: 'Complete SEO Audit Components';
    $components = get_post_meta($post->ID, 'seo_audit_components', true) ?: array(
        array(
            'title' => 'Technical SEO Analysis',
            'description' => 'Deep dive into your website\'s technical foundation to identify and fix critical issues.',
            'features' => array(
                'Site speed and Core Web Vitals',
                'Crawlability and indexability',
                'URL structure and redirects',
                'XML sitemaps and robots.txt',
                'Schema markup implementation',
                'Mobile-friendliness assessment'
            ),
            'featured' => true
        ),
        array(
            'title' => 'Keyword Analysis',
            'description' => 'Comprehensive keyword research and optimization opportunity identification.',
            'features' => array(
                'Current keyword rankings',
                'Keyword gap analysis',
                'Search volume and competition',
                'Long-tail keyword opportunities',
                'Semantic keyword mapping',
                'Local keyword research'
            ),
            'featured' => false
        ),
        array(
            'title' => 'Content Audit',
            'description' => 'Evaluate your content quality, optimization, and identify improvement opportunities.',
            'features' => array(
                'Content quality assessment',
                'On-page optimization review',
                'Meta tags and headers analysis',
                'Content gap identification',
                'Duplicate content detection',
                'Content performance metrics'
            ),
            'featured' => false
        ),
        array(
            'title' => 'Competitor Analysis',
            'description' => 'Analyze your top competitors to identify opportunities and benchmark performance.',
            'features' => array(
                'Competitor keyword rankings',
                'Content strategy analysis',
                'Backlink profile comparison',
                'Technical SEO comparison',
                'SERP position analysis',
                'Market share assessment'
            ),
            'featured' => false
        ),
        array(
            'title' => 'Backlink Analysis',
            'description' => 'Comprehensive review of your link profile and link building opportunities.',
            'features' => array(
                'Backlink quality assessment',
                'Toxic link identification',
                'Link building opportunities',
                'Anchor text analysis',
                'Domain authority evaluation',
                'Link gap analysis'
            ),
            'featured' => false
        ),
        array(
            'title' => 'Local SEO Audit',
            'description' => 'Evaluate your local search presence and optimization opportunities.',
            'features' => array(
                'Google My Business optimization',
                'Local citation consistency',
                'Review profile analysis',
                'Local keyword rankings',
                'NAP consistency check',
                'Local competitor analysis'
            ),
            'featured' => false
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_audit_components_title">Components Section Title</label></th>';
    echo '<td><input type="text" id="seo_audit_components_title" name="seo_audit_components_title" value="' . esc_attr($components_title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Audit Components</h4>';
    if (is_array($components)) {
        foreach ($components as $i => $component) {
            echo '<div class="component-item" style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">';
            echo '<h4>Component ' . ($i + 1) . '</h4>';
            
            echo '<label>Title:</label><br>';
            echo '<input type="text" name="seo_audit_components[' . $i . '][title]" value="' . esc_attr($component['title']) . '" style="width: 100%; margin-bottom: 10px;" />';
            
            echo '<label>Description:</label><br>';
            echo '<textarea name="seo_audit_components[' . $i . '][description]" rows="3" style="width: 100%; margin-bottom: 10px;">' . esc_textarea($component['description']) . '</textarea>';
            
            echo '<label>Featured Component:</label><br>';
            echo '<input type="checkbox" name="seo_audit_components[' . $i . '][featured]" value="1" ' . (isset($component['featured']) && $component['featured'] ? 'checked' : '') . ' /> Yes<br><br>';
            
            echo '<label>Features:</label><br>';
            if (isset($component['features']) && is_array($component['features'])) {
                foreach ($component['features'] as $j => $feature) {
                    echo '<div style="margin-bottom: 5px;">';
                    echo '<input type="text" name="seo_audit_components[' . $i . '][features][]" value="' . esc_attr($feature) . '" style="width: 90%;" />';
                    echo '</div>';
                }
            }
            echo '</div>';
        }
    }
}

// Sample callback
function seo_audit_sample_callback($post) {
    $sample_title = get_post_meta($post->ID, 'seo_audit_sample_title', true) ?: 'What\'s Included in Your SEO Audit Report';
    $sample_subtitle = get_post_meta($post->ID, 'seo_audit_sample_subtitle', true) ?: 'Comprehensive 40+ Page Report';
    $sample_image = get_post_meta($post->ID, 'seo_audit_sample_image', true) ?: get_template_directory_uri() . '/assets/images/services/seo-audit-sample.jpg';
    $report_sections = get_post_meta($post->ID, 'seo_audit_report_sections', true) ?: array(
        array('title' => 'Executive Summary', 'description' => 'High-level overview of findings and recommendations'),
        array('title' => 'Technical Issues', 'description' => 'Detailed technical problems with priority levels'),
        array('title' => 'Content Analysis', 'description' => 'Content optimization opportunities and gaps'),
        array('title' => 'Competitive Landscape', 'description' => 'How you compare to top competitors'),
        array('title' => 'Action Plan', 'description' => 'Prioritized recommendations with timelines'),
        array('title' => 'ROI Projections', 'description' => 'Expected traffic and revenue improvements')
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_audit_sample_title">Sample Section Title</label></th>';
    echo '<td><input type="text" id="seo_audit_sample_title" name="seo_audit_sample_title" value="' . esc_attr($sample_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_sample_subtitle">Sample Subtitle</label></th>';
    echo '<td><input type="text" id="seo_audit_sample_subtitle" name="seo_audit_sample_subtitle" value="' . esc_attr($sample_subtitle) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_sample_image">Sample Image URL</label></th>';
    echo '<td><input type="text" id="seo_audit_sample_image" name="seo_audit_sample_image" value="' . esc_attr($sample_image) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Report Sections</h4>';
    if (is_array($report_sections)) {
        foreach ($report_sections as $i => $section) {
            echo '<div style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd;">';
            echo '<label>Section Title:</label><br>';
            echo '<input type="text" name="seo_audit_report_sections[' . $i . '][title]" value="' . esc_attr($section['title']) . '" style="width: 100%; margin-bottom: 5px;" />';
            echo '<label>Section Description:</label><br>';
            echo '<input type="text" name="seo_audit_report_sections[' . $i . '][description]" value="' . esc_attr($section['description']) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
}

// Process callback
function seo_audit_process_callback($post) {
    $process_title = get_post_meta($post->ID, 'seo_audit_process_title', true) ?: 'Our SEO Audit Process';
    $process_steps = get_post_meta($post->ID, 'seo_audit_process_steps', true) ?: array(
        array(
            'title' => 'Initial Consultation',
            'description' => 'Understand your business goals, target audience, and current challenges.',
            'duration' => '1-2 Days'
        ),
        array(
            'title' => 'Data Collection',
            'description' => 'Gather comprehensive data using professional SEO tools and manual analysis.',
            'duration' => '3-5 Days'
        ),
        array(
            'title' => 'Analysis & Report',
            'description' => 'Analyze data and create detailed report with actionable recommendations.',
            'duration' => '5-7 Days'
        ),
        array(
            'title' => 'Presentation & Strategy',
            'description' => 'Present findings and discuss implementation strategy with your team.',
            'duration' => '1 Day'
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_audit_process_title">Process Section Title</label></th>';
    echo '<td><input type="text" id="seo_audit_process_title" name="seo_audit_process_title" value="' . esc_attr($process_title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Process Steps</h4>';
    if (is_array($process_steps)) {
        foreach ($process_steps as $i => $step) {
            echo '<div style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd;">';
            echo '<h4>Step ' . ($i + 1) . '</h4>';
            echo '<label>Step Title:</label><br>';
            echo '<input type="text" name="seo_audit_process_steps[' . $i . '][title]" value="' . esc_attr($step['title']) . '" style="width: 100%; margin-bottom: 5px;" />';
            echo '<label>Step Description:</label><br>';
            echo '<textarea name="seo_audit_process_steps[' . $i . '][description]" rows="3" style="width: 100%; margin-bottom: 5px;">' . esc_textarea($step['description']) . '</textarea>';
            echo '<label>Duration:</label><br>';
            echo '<input type="text" name="seo_audit_process_steps[' . $i . '][duration]" value="' . esc_attr($step['duration']) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
}

// Case Study callback
function seo_audit_case_study_callback($post) {
    $case_study_label = get_post_meta($post->ID, 'seo_audit_case_study_label', true) ?: 'SEO Audit Success Story';
    $case_study_title = get_post_meta($post->ID, 'seo_audit_case_study_title', true) ?: 'TechStart Solutions: From Audit to 380% Traffic Growth';
    $case_study_description = get_post_meta($post->ID, 'seo_audit_case_study_description', true) ?: 'TechStart Solutions was struggling with declining organic traffic and poor search rankings despite having great products. Our comprehensive SEO audit revealed critical issues that were holding them back.';
    $case_study_challenge_title = get_post_meta($post->ID, 'seo_audit_case_study_challenge_title', true) ?: 'Issues Discovered in Audit';
    $case_study_challenges = get_post_meta($post->ID, 'seo_audit_case_study_challenges', true) ?: array(
        '47 technical SEO errors affecting crawling',
        'Poor site speed (3.8s load time)',
        'Duplicate content across 60% of pages',
        'Missing schema markup',
        'Weak internal linking structure'
    );
    $case_study_solution_title = get_post_meta($post->ID, 'seo_audit_case_study_solution_title', true) ?: 'Audit Recommendations Implemented';
    $case_study_solutions = get_post_meta($post->ID, 'seo_audit_case_study_solutions', true) ?: array(
        'Fixed all technical SEO issues',
        'Improved site speed to 1.2s',
        'Resolved duplicate content problems',
        'Implemented comprehensive schema markup',
        'Restructured internal linking'
    );
    $case_study_results_title = get_post_meta($post->ID, 'seo_audit_case_study_results_title', true) ?: 'Results After Implementation';
    $case_study_results = get_post_meta($post->ID, 'seo_audit_case_study_results', true) ?: array(
        array('number' => '380%', 'label' => 'Organic Traffic Increase'),
        array('number' => '47', 'label' => 'Technical Issues Fixed'),
        array('number' => '250%', 'label' => 'Keyword Rankings Improved'),
        array('number' => '70%', 'label' => 'Faster Page Load Speed')
    );
    $case_study_link_text = get_post_meta($post->ID, 'seo_audit_case_study_link_text', true) ?: 'Read Full Case Study';
    $case_study_link_url = get_post_meta($post->ID, 'seo_audit_case_study_link_url', true) ?: home_url('/case-studies');
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_audit_case_study_label">Case Study Label</label></th>';
    echo '<td><input type="text" id="seo_audit_case_study_label" name="seo_audit_case_study_label" value="' . esc_attr($case_study_label) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_case_study_title">Case Study Title</label></th>';
    echo '<td><input type="text" id="seo_audit_case_study_title" name="seo_audit_case_study_title" value="' . esc_attr($case_study_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_case_study_description">Case Study Description</label></th>';
    echo '<td><textarea id="seo_audit_case_study_description" name="seo_audit_case_study_description" rows="4" style="width: 100%;">' . esc_textarea($case_study_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="seo_audit_case_study_challenge_title">Challenges Title</label></th>';
    echo '<td><input type="text" id="seo_audit_case_study_challenge_title" name="seo_audit_case_study_challenge_title" value="' . esc_attr($case_study_challenge_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Challenges List</label></th>';
    echo '<td>';
    if (is_array($case_study_challenges)) {
        foreach ($case_study_challenges as $i => $challenge) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="seo_audit_case_study_challenges[]" value="' . esc_attr($challenge) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    
    echo '<tr><th><label for="seo_audit_case_study_solution_title">Solutions Title</label></th>';
    echo '<td><input type="text" id="seo_audit_case_study_solution_title" name="seo_audit_case_study_solution_title" value="' . esc_attr($case_study_solution_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Solutions List</label></th>';
    echo '<td>';
    if (is_array($case_study_solutions)) {
        foreach ($case_study_solutions as $i => $solution) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="seo_audit_case_study_solutions[]" value="' . esc_attr($solution) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    
    echo '<tr><th><label for="seo_audit_case_study_results_title">Results Title</label></th>';
    echo '<td><input type="text" id="seo_audit_case_study_results_title" name="seo_audit_case_study_results_title" value="' . esc_attr($case_study_results_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_case_study_link_text">Link Text</label></th>';
    echo '<td><input type="text" id="seo_audit_case_study_link_text" name="seo_audit_case_study_link_text" value="' . esc_attr($case_study_link_text) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_case_study_link_url">Link URL</label></th>';
    echo '<td><input type="text" id="seo_audit_case_study_link_url" name="seo_audit_case_study_link_url" value="' . esc_attr($case_study_link_url) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Results Statistics</h4>';
    if (is_array($case_study_results)) {
        foreach ($case_study_results as $i => $result) {
            echo '<div style="margin-bottom: 10px; padding: 10px; border: 1px solid #ddd;">';
            echo '<label>Result Number:</label><br>';
            echo '<input type="text" name="seo_audit_case_study_results[' . $i . '][number]" value="' . esc_attr($result['number']) . '" style="width: 100%; margin-bottom: 5px;" />';
            echo '<label>Result Label:</label><br>';
            echo '<input type="text" name="seo_audit_case_study_results[' . $i . '][label]" value="' . esc_attr($result['label']) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
}

// Tools callback
function seo_audit_tools_callback($post) {
    $tools_title = get_post_meta($post->ID, 'seo_audit_tools_title', true) ?: 'Professional SEO Audit Tools';
    $tool_categories = get_post_meta($post->ID, 'seo_audit_tool_categories', true) ?: array(
        array(
            'title' => 'Technical Analysis',
            'tools' => array(
                'Screaming Frog SEO Spider',
                'Google Search Console',
                'GTmetrix & PageSpeed Insights',
                'SEMrush Site Audit'
            )
        ),
        array(
            'title' => 'Keyword Research',
            'tools' => array(
                'Ahrefs Keywords Explorer',
                'SEMrush Keyword Magic Tool',
                'Google Keyword Planner',
                'Moz Keyword Explorer'
            )
        ),
        array(
            'title' => 'Content Analysis',
            'tools' => array(
                'Surfer SEO',
                'Clearscope',
                'Siteliner',
                'Copyscape'
            )
        ),
        array(
            'title' => 'Backlink Analysis',
            'tools' => array(
                'Ahrefs Site Explorer',
                'Majestic SEO',
                'SEMrush Backlink Analytics',
                'Moz Link Explorer'
            )
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_audit_tools_title">Tools Section Title</label></th>';
    echo '<td><input type="text" id="seo_audit_tools_title" name="seo_audit_tools_title" value="' . esc_attr($tools_title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Tool Categories</h4>';
    if (is_array($tool_categories)) {
        foreach ($tool_categories as $i => $category) {
            echo '<div style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd;">';
            echo '<label>Category Title:</label><br>';
            echo '<input type="text" name="seo_audit_tool_categories[' . $i . '][title]" value="' . esc_attr($category['title']) . '" style="width: 100%; margin-bottom: 10px;" />';
            echo '<label>Tools:</label><br>';
            if (isset($category['tools']) && is_array($category['tools'])) {
                foreach ($category['tools'] as $j => $tool) {
                    echo '<div style="margin-bottom: 5px;">';
                    echo '<input type="text" name="seo_audit_tool_categories[' . $i . '][tools][]" value="' . esc_attr($tool) . '" style="width: 100%;" />';
                    echo '</div>';
                }
            }
            echo '</div>';
        }
    }
}

// Testimonial callback
function seo_audit_testimonial_callback($post) {
    $testimonial_quote = get_post_meta($post->ID, 'seo_audit_testimonial_quote', true) ?: 'The SEO audit from Aimpro Digital was incredibly detailed and actionable. They found issues we never knew existed and provided a clear roadmap to fix them. After implementing their recommendations, our organic traffic increased by 380% in just 6 months.';
    $testimonial_author_name = get_post_meta($post->ID, 'seo_audit_testimonial_author_name', true) ?: 'Mike Johnson';
    $testimonial_author_title = get_post_meta($post->ID, 'seo_audit_testimonial_author_title', true) ?: 'Marketing Director, TechStart Solutions';
    $testimonial_author_company = get_post_meta($post->ID, 'seo_audit_testimonial_author_company', true) ?: 'B2B Technology Company';
    $testimonial_image = get_post_meta($post->ID, 'seo_audit_testimonial_image', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_audit_testimonial_quote">Testimonial Quote</label></th>';
    echo '<td><textarea id="seo_audit_testimonial_quote" name="seo_audit_testimonial_quote" rows="5" style="width: 100%;">' . esc_textarea($testimonial_quote) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="seo_audit_testimonial_author_name">Author Name</label></th>';
    echo '<td><input type="text" id="seo_audit_testimonial_author_name" name="seo_audit_testimonial_author_name" value="' . esc_attr($testimonial_author_name) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_testimonial_author_title">Author Title</label></th>';
    echo '<td><input type="text" id="seo_audit_testimonial_author_title" name="seo_audit_testimonial_author_title" value="' . esc_attr($testimonial_author_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_testimonial_author_company">Author Company</label></th>';
    echo '<td><input type="text" id="seo_audit_testimonial_author_company" name="seo_audit_testimonial_author_company" value="' . esc_attr($testimonial_author_company) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_testimonial_image">Author Image</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="seo_audit_testimonial_image" name="seo_audit_testimonial_image" value="' . esc_attr($testimonial_image) . '" />';
    echo '<div id="seo_audit_testimonial_image_preview">';
    if ($testimonial_image) {
        echo '<img src="' . esc_url($testimonial_image) . '" style="max-width: 150px; height: auto;" /><br>';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="seo_audit_testimonial_image_button">Choose Image</button>';
    if ($testimonial_image) {
        echo ' <button type="button" class="button" id="seo_audit_testimonial_image_remove">Remove Image</button>';
    }
    echo '</td></tr>';
    echo '</table>';
}

// CTA callback
function seo_audit_cta_callback($post) {
    $cta_title = get_post_meta($post->ID, 'seo_audit_cta_title', true) ?: 'Ready to Uncover Your SEO Opportunities?';
    $cta_description = get_post_meta($post->ID, 'seo_audit_cta_description', true) ?: 'Get a comprehensive SEO audit that reveals exactly what\'s holding your website back and how to fix it.';
    $cta_primary_text = get_post_meta($post->ID, 'seo_audit_cta_primary_text', true) ?: 'Get Your SEO Audit';
    $cta_primary_url = get_post_meta($post->ID, 'seo_audit_cta_primary_url', true) ?: home_url('/contact');
    $cta_secondary_text = get_post_meta($post->ID, 'seo_audit_cta_secondary_text', true) ?: 'View Audit Results';
    $cta_secondary_url = get_post_meta($post->ID, 'seo_audit_cta_secondary_url', true) ?: home_url('/case-studies');
    $cta_benefits = get_post_meta($post->ID, 'seo_audit_cta_benefits', true) ?: array(
        '✓ 40+ page detailed report',
        '✓ Actionable recommendations',
        '✓ Strategy consultation included'
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="seo_audit_cta_title">CTA Title</label></th>';
    echo '<td><input type="text" id="seo_audit_cta_title" name="seo_audit_cta_title" value="' . esc_attr($cta_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_cta_description">CTA Description</label></th>';
    echo '<td><textarea id="seo_audit_cta_description" name="seo_audit_cta_description" rows="3" style="width: 100%;">' . esc_textarea($cta_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="seo_audit_cta_primary_text">Primary Button Text</label></th>';
    echo '<td><input type="text" id="seo_audit_cta_primary_text" name="seo_audit_cta_primary_text" value="' . esc_attr($cta_primary_text) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_cta_primary_url">Primary Button URL</label></th>';
    echo '<td><input type="text" id="seo_audit_cta_primary_url" name="seo_audit_cta_primary_url" value="' . esc_attr($cta_primary_url) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_cta_secondary_text">Secondary Button Text</label></th>';
    echo '<td><input type="text" id="seo_audit_cta_secondary_text" name="seo_audit_cta_secondary_text" value="' . esc_attr($cta_secondary_text) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="seo_audit_cta_secondary_url">Secondary Button URL</label></th>';
    echo '<td><input type="text" id="seo_audit_cta_secondary_url" name="seo_audit_cta_secondary_url" value="' . esc_attr($cta_secondary_url) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Benefits</label></th>';
    echo '<td>';
    if (is_array($cta_benefits)) {
        foreach ($cta_benefits as $i => $benefit) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="seo_audit_cta_benefits[]" value="' . esc_attr($benefit) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Save meta data
function seo_audit_save_meta($post_id) {
    if (!isset($_POST['seo_audit_meta_nonce']) || !wp_verify_nonce($_POST['seo_audit_meta_nonce'], 'seo_audit_meta_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save all meta fields
    $meta_fields = array(
        'seo_audit_header_title',
        'seo_audit_header_subtitle',
        'seo_audit_hero_image',
        'seo_audit_overview_title',
        'seo_audit_overview_description',
        'seo_audit_benefits_title',
        'seo_audit_benefits',
        'seo_audit_overview_image',
        'seo_audit_components_title',
        'seo_audit_components',
        'seo_audit_sample_title',
        'seo_audit_sample_subtitle',
        'seo_audit_sample_image',
        'seo_audit_report_sections',
        'seo_audit_process_title',
        'seo_audit_process_steps',
        'seo_audit_case_study_label',
        'seo_audit_case_study_title',
        'seo_audit_case_study_description',
        'seo_audit_case_study_challenge_title',
        'seo_audit_case_study_challenges',
        'seo_audit_case_study_solution_title',
        'seo_audit_case_study_solutions',
        'seo_audit_case_study_results_title',
        'seo_audit_case_study_results',
        'seo_audit_case_study_link_text',
        'seo_audit_case_study_link_url',
        'seo_audit_tools_title',
        'seo_audit_tool_categories',
        'seo_audit_testimonial_quote',
        'seo_audit_testimonial_author_name',
        'seo_audit_testimonial_author_title',
        'seo_audit_testimonial_author_company',
        'seo_audit_testimonial_image',
        'seo_audit_cta_title',
        'seo_audit_cta_description',
        'seo_audit_cta_primary_text',
        'seo_audit_cta_primary_url',
        'seo_audit_cta_secondary_text',
        'seo_audit_cta_secondary_url',
        'seo_audit_cta_benefits'
    );

    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
}

add_action('save_post', 'seo_audit_save_meta');

// Add JavaScript for media uploader
function seo_audit_admin_scripts($hook) {
    global $post;
    
    if ($hook !== 'post.php' && $hook !== 'post-new.php') {
        return;
    }
    
    if (!$post || get_page_template_slug($post->ID) !== 'page-seo-audit.php') {
        return;
    }
    
    wp_enqueue_media();
    wp_enqueue_script('seo-audit-admin', get_template_directory_uri() . '/js/seo-audit-admin.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'seo_audit_admin_scripts');

// Create admin JS file if it doesn't exist
function create_seo_audit_admin_js() {
    $js_file = get_template_directory() . '/js/seo-audit-admin.js';
    
    if (!file_exists($js_file)) {
        $js_dir = dirname($js_file);
        if (!file_exists($js_dir)) {
            wp_mkdir_p($js_dir);
        }
        
        $js_content = "
jQuery(document).ready(function($) {
    // Hero Image Upload
    $('#seo_audit_hero_image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Hero Image',
            multiple: false
        }).open()
        .on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('#seo_audit_hero_image').val(image_url);
            $('#seo_audit_hero_image_preview').html('<img src=\"' + image_url + '\" style=\"max-width: 200px; height: auto;\" /><br>');
            if ($('#seo_audit_hero_image_remove').length === 0) {
                $('#seo_audit_hero_image_button').after(' <button type=\"button\" class=\"button\" id=\"seo_audit_hero_image_remove\">Remove Image</button>');
            }
        });
    });
    
    // Hero Image Remove
    $(document).on('click', '#seo_audit_hero_image_remove', function(e) {
        e.preventDefault();
        $('#seo_audit_hero_image').val('');
        $('#seo_audit_hero_image_preview').html('');
        $(this).remove();
    });
    
    // Testimonial Image Upload
    $('#seo_audit_testimonial_image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Testimonial Image',
            multiple: false
        }).open()
        .on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('#seo_audit_testimonial_image').val(image_url);
            $('#seo_audit_testimonial_image_preview').html('<img src=\"' + image_url + '\" style=\"max-width: 150px; height: auto;\" /><br>');
            if ($('#seo_audit_testimonial_image_remove').length === 0) {
                $('#seo_audit_testimonial_image_button').after(' <button type=\"button\" class=\"button\" id=\"seo_audit_testimonial_image_remove\">Remove Image</button>');
            }
        });
    });
    
    // Testimonial Image Remove
    $(document).on('click', '#seo_audit_testimonial_image_remove', function(e) {
        e.preventDefault();
        $('#seo_audit_testimonial_image').val('');
        $('#seo_audit_testimonial_image_preview').html('');
        $(this).remove();
    });
    
    // Add Benefit
    $('#add-seo-audit-benefit').click(function() {
        var container = $('#seo-audit-benefits-container');
        var newBenefit = $('<div style=\"margin-bottom: 10px;\"><input type=\"text\" name=\"seo_audit_benefits[]\" value=\"\" style=\"width: 90%;\" /> <button type=\"button\" class=\"button remove-benefit\">Remove</button></div>');
        container.append(newBenefit);
    });
    
    // Remove Benefit
    $(document).on('click', '.remove-benefit', function() {
        $(this).parent().remove();
    });
});
";
        
        file_put_contents($js_file, $js_content);
    }
}

add_action('init', 'create_seo_audit_admin_js');
?>
