<?php
// Technical SEO page meta boxes and fields

// Add meta boxes
function technical_seo_add_meta_boxes() {
    add_meta_box(
        'technical_seo_header',
        'Page Header Settings',
        'technical_seo_header_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'technical_seo_overview',
        'Technical SEO Overview',
        'technical_seo_overview_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'technical_seo_services',
        'Technical SEO Services',
        'technical_seo_services_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'technical_seo_case_study',
        'Case Study',
        'technical_seo_case_study_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'technical_seo_process',
        'Process Steps',
        'technical_seo_process_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'technical_seo_tools',
        'Technical SEO Tools',
        'technical_seo_tools_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'technical_seo_issues',
        'Common Technical Issues',
        'technical_seo_issues_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'technical_seo_testimonial',
        'Testimonial',
        'technical_seo_testimonial_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'technical_seo_cta',
        'Call to Action',
        'technical_seo_cta_callback',
        'page',
        'normal',
        'high'
    );
}

// Check if this is the Technical SEO page
function is_technical_seo_page() {
    global $post;
    return $post && get_page_template_slug($post->ID) === 'page-technical-seo.php';
}

// Only add meta boxes for Technical SEO page
add_action('add_meta_boxes', function() {
    if (is_technical_seo_page()) {
        technical_seo_add_meta_boxes();
    }
});

// Header callback
function technical_seo_header_callback($post) {
    wp_nonce_field('technical_seo_meta_nonce', 'technical_seo_meta_nonce');
    
    $title = get_post_meta($post->ID, 'technical_seo_header_title', true) ?: 'Technical SEO Services';
    $subtitle = get_post_meta($post->ID, 'technical_seo_header_subtitle', true) ?: 'Optimize your website\'s technical foundation for better search engine performance';
    $hero_image = get_post_meta($post->ID, 'technical_seo_hero_image', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="technical_seo_header_title">Page Title</label></th>';
    echo '<td><input type="text" id="technical_seo_header_title" name="technical_seo_header_title" value="' . esc_attr($title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_header_subtitle">Page Subtitle</label></th>';
    echo '<td><textarea id="technical_seo_header_subtitle" name="technical_seo_header_subtitle" rows="3" style="width: 100%;">' . esc_textarea($subtitle) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="technical_seo_hero_image">Hero Image</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="technical_seo_hero_image" name="technical_seo_hero_image" value="' . esc_attr($hero_image) . '" />';
    echo '<div id="technical_seo_hero_image_preview">';
    if ($hero_image) {
        echo '<img src="' . esc_url($hero_image) . '" style="max-width: 200px; height: auto;" /><br>';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="technical_seo_hero_image_button">Choose Image</button>';
    if ($hero_image) {
        echo ' <button type="button" class="button" id="technical_seo_hero_image_remove">Remove Image</button>';
    }
    echo '</td></tr>';
    echo '</table>';
}

// Overview callback
function technical_seo_overview_callback($post) {    $overview_title = get_post_meta($post->ID, 'technical_seo_overview_title', true) ?: 'Build a Solid Technical Foundation for SEO Success';
    $overview_description = get_post_meta($post->ID, 'technical_seo_overview_description', true) ?: 'Technical SEO is the backbone of search engine optimization. Our technical SEO services ensure your website is properly crawled, indexed, and understood by search engines. We fix critical technical issues that prevent your site from ranking and implement optimizations that give you a competitive edge.';
    $benefits_title = get_post_meta($post->ID, 'technical_seo_benefits_title', true) ?: 'Technical SEO Impact:';
    $benefits = get_post_meta($post->ID, 'technical_seo_benefits', true) ?: array(
        'Improve site speed by up to 70%',
        'Enhance crawlability and indexation',
        'Boost Core Web Vitals scores',
        'Improve mobile user experience',
        'Increase search engine trust and authority',
        'Reduce bounce rates and improve engagement'
    );
    $overview_image_id = get_post_meta($post->ID, 'technical_seo_overview_image_id', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="technical_seo_overview_title">Overview Title</label></th>';
    echo '<td><input type="text" id="technical_seo_overview_title" name="technical_seo_overview_title" value="' . esc_attr($overview_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_overview_description">Overview Description</label></th>';
    echo '<td><textarea id="technical_seo_overview_description" name="technical_seo_overview_description" rows="4" style="width: 100%;">' . esc_textarea($overview_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="technical_seo_benefits_title">Benefits Title</label></th>';
    echo '<td><input type="text" id="technical_seo_benefits_title" name="technical_seo_benefits_title" value="' . esc_attr($benefits_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Benefits List</label></th>';
    echo '<td>';
    if (is_array($benefits)) {
        foreach ($benefits as $i => $benefit) {
            echo '<div style="margin-bottom: 10px;">';
            echo '<input type="text" name="technical_seo_benefits[]" value="' . esc_attr($benefit) . '" style="width: 90%;" />';
            echo ' <button type="button" class="button remove-benefit">Remove</button>';
            echo '</div>';
        }
    }
    echo '<div id="technical-seo-benefits-container"></div>';
    echo '<button type="button" class="button" id="add-technical-seo-benefit">Add Benefit</button>';
    echo '</td></tr>';
    
    echo '<tr><th><label for="technical_seo_overview_image_id">Overview Image</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="technical_seo_overview_image_id" name="technical_seo_overview_image_id" value="' . esc_attr($overview_image_id) . '" />';
    echo '<div id="technical_seo_overview_image_preview">';
    if ($overview_image_id) {
        echo wp_get_attachment_image($overview_image_id, 'medium');
    }
    echo '</div>';
    echo '<button type="button" class="button" id="technical_seo_overview_image_button">Choose Image</button>';
    if ($overview_image_id) {
        echo ' <button type="button" class="button" id="technical_seo_overview_image_remove">Remove Image</button>';
    }
    echo '</td></tr>';
    echo '</table>';
}

// Services callback
function technical_seo_services_callback($post) {
    $services_title = get_post_meta($post->ID, 'technical_seo_services_title', true) ?: 'Complete Technical SEO Services';
    $services = get_post_meta($post->ID, 'technical_seo_services', true) ?: array(
        array(
            'title' => 'Site Speed Optimization',
            'description' => 'Improve your website\'s loading speed for better user experience and search rankings.',
            'features' => array(
                'Page speed analysis and optimization',
                'Image compression and optimization',
                'Code minification and compression',
                'CDN implementation',
                'Caching optimization',
                'Server response optimization'
            ),
            'results' => 'Average: 60% speed improvement',
            'featured' => true
        ),
        array(
            'title' => 'Core Web Vitals Optimization',
            'description' => 'Optimize your website for Google\'s Core Web Vitals ranking factors.',
            'features' => array(
                'Largest Contentful Paint (LCP) optimization',
                'First Input Delay (FID) improvement',
                'Cumulative Layout Shift (CLS) reduction',
                'First Contentful Paint (FCP) optimization',
                'Time to Interactive (TTI) improvement',
                'Performance monitoring setup'
            ),
            'results' => 'Achieve "Good" Core Web Vitals scores',
            'featured' => false
        ),
        array(
            'title' => 'Crawlability & Indexability',
            'description' => 'Ensure search engines can properly crawl and index your website content.',
            'features' => array(
                'Robots.txt optimization',
                'XML sitemap creation and optimization',
                'Internal linking structure',
                'Crawl error identification and fixing',
                'URL structure optimization',
                'Redirect chain resolution'
            ),
            'results' => '100% crawlable and indexable pages',
            'featured' => false
        ),
        array(
            'title' => 'Schema Markup Implementation',
            'description' => 'Implement structured data to help search engines understand your content.',
            'features' => array(
                'Business schema markup',
                'Product and service schema',
                'Review and rating schema',
                'FAQ and How-to schema',
                'Event and organization schema',
                'Rich snippet optimization'
            ),
            'results' => 'Enhanced SERP appearance',
            'featured' => false
        ),
        array(
            'title' => 'Mobile Optimization',
            'description' => 'Ensure your website provides an excellent mobile user experience.',
            'features' => array(
                'Mobile-friendly design implementation',
                'Responsive layout optimization',
                'Mobile page speed optimization',
                'Touch element optimization',
                'Mobile usability improvements',
                'AMP implementation (if needed)'
            ),
            'results' => 'Pass Google Mobile-Friendly test',
            'featured' => false
        ),
        array(
            'title' => 'HTTPS & Security',
            'description' => 'Implement security measures that protect users and improve search rankings.',
            'features' => array(
                'SSL certificate installation',
                'HTTPS implementation',
                'Security header optimization',
                'Mixed content resolution',
                'Security vulnerability assessment',
                'HSTS implementation'
            ),
            'results' => 'Secure, trusted website',
            'featured' => false
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="technical_seo_services_title">Services Section Title</label></th>';
    echo '<td><input type="text" id="technical_seo_services_title" name="technical_seo_services_title" value="' . esc_attr($services_title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Technical SEO Services</h4>';
    if (is_array($services)) {
        foreach ($services as $i => $service) {
            echo '<div class="service-item" style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">';
            echo '<h4>Service ' . ($i + 1) . '</h4>';
            
            echo '<label>Title:</label><br>';
            echo '<input type="text" name="technical_seo_services[' . $i . '][title]" value="' . esc_attr($service['title']) . '" style="width: 100%; margin-bottom: 10px;" />';
            
            echo '<label>Description:</label><br>';
            echo '<textarea name="technical_seo_services[' . $i . '][description]" rows="3" style="width: 100%; margin-bottom: 10px;">' . esc_textarea($service['description']) . '</textarea>';
            
            echo '<label>Results:</label><br>';
            echo '<input type="text" name="technical_seo_services[' . $i . '][results]" value="' . esc_attr($service['results']) . '" style="width: 100%; margin-bottom: 10px;" />';
            
            echo '<label>Featured Service:</label><br>';
            echo '<input type="checkbox" name="technical_seo_services[' . $i . '][featured]" value="1" ' . (isset($service['featured']) && $service['featured'] ? 'checked' : '') . ' /> Yes<br><br>';
            
            echo '<label>Features:</label><br>';
            if (isset($service['features']) && is_array($service['features'])) {
                foreach ($service['features'] as $j => $feature) {
                    echo '<div style="margin-bottom: 5px;">';
                    echo '<input type="text" name="technical_seo_services[' . $i . '][features][]" value="' . esc_attr($feature) . '" style="width: 90%;" />';
                    echo '</div>';
                }
            }
            echo '</div>';
        }
    }
}

// Case Study callback
function technical_seo_case_study_callback($post) {
    $case_study_label = get_post_meta($post->ID, 'technical_seo_case_study_label', true) ?: 'Technical SEO Success Story';
    $case_study_title = get_post_meta($post->ID, 'technical_seo_case_study_title', true) ?: 'E-commerce Store: 70% Speed Improvement & 250% Traffic Growth';
    $case_study_description = get_post_meta($post->ID, 'technical_seo_case_study_description', true) ?: 'A large e-commerce store was experiencing poor search rankings despite having great products and content. Technical issues were severely impacting their search performance and user experience.';
    $case_study_challenge_title = get_post_meta($post->ID, 'technical_seo_case_study_challenge_title', true) ?: 'Technical Issues Identified';
    $case_study_challenges = get_post_meta($post->ID, 'technical_seo_case_study_challenges', true) ?: array(
        'Page load time of 8.5 seconds',
        'Poor Core Web Vitals scores',
        'Mobile usability issues',
        'Crawl errors preventing indexation',
        'Missing schema markup',
        'Duplicate content issues'
    );
    $case_study_solution_title = get_post_meta($post->ID, 'technical_seo_case_study_solution_title', true) ?: 'Technical SEO Solutions';
    $case_study_solutions = get_post_meta($post->ID, 'technical_seo_case_study_solutions', true) ?: array(
        'Comprehensive site speed optimization',
        'Core Web Vitals improvements',
        'Mobile optimization implementation',
        'Crawl error resolution',
        'Schema markup implementation',
        'Technical content optimization'
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="technical_seo_case_study_label">Case Study Label</label></th>';
    echo '<td><input type="text" id="technical_seo_case_study_label" name="technical_seo_case_study_label" value="' . esc_attr($case_study_label) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_case_study_title">Case Study Title</label></th>';
    echo '<td><input type="text" id="technical_seo_case_study_title" name="technical_seo_case_study_title" value="' . esc_attr($case_study_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_case_study_description">Case Study Description</label></th>';
    echo '<td><textarea id="technical_seo_case_study_description" name="technical_seo_case_study_description" rows="4" style="width: 100%;">' . esc_textarea($case_study_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="technical_seo_case_study_challenge_title">Challenges Title</label></th>';
    echo '<td><input type="text" id="technical_seo_case_study_challenge_title" name="technical_seo_case_study_challenge_title" value="' . esc_attr($case_study_challenge_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Challenges List</label></th>';
    echo '<td>';
    if (is_array($case_study_challenges)) {
        foreach ($case_study_challenges as $i => $challenge) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="technical_seo_case_study_challenges[]" value="' . esc_attr($challenge) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    
    echo '<tr><th><label for="technical_seo_case_study_solution_title">Solutions Title</label></th>';
    echo '<td><input type="text" id="technical_seo_case_study_solution_title" name="technical_seo_case_study_solution_title" value="' . esc_attr($case_study_solution_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Solutions List</label></th>';
    echo '<td>';
    if (is_array($case_study_solutions)) {
        foreach ($case_study_solutions as $i => $solution) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="technical_seo_case_study_solutions[]" value="' . esc_attr($solution) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Process callback
function technical_seo_process_callback($post) {
    $process_title = get_post_meta($post->ID, 'technical_seo_process_title', true) ?: 'Our Technical SEO Process';
    $process_steps = get_post_meta($post->ID, 'technical_seo_process_steps', true) ?: array(
        array(
            'title' => 'Technical Audit',
            'description' => 'Comprehensive analysis of your website\'s technical SEO health and issues.'
        ),
        array(
            'title' => 'Priority Assessment',
            'description' => 'Prioritize technical issues based on impact and implementation complexity.'
        ),
        array(
            'title' => 'Implementation',
            'description' => 'Execute technical optimizations following best practices and guidelines.'
        ),
        array(
            'title' => 'Testing & Monitoring',
            'description' => 'Test implementations and monitor performance improvements continuously.'
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="technical_seo_process_title">Process Section Title</label></th>';
    echo '<td><input type="text" id="technical_seo_process_title" name="technical_seo_process_title" value="' . esc_attr($process_title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Process Steps</h4>';
    if (is_array($process_steps)) {
        foreach ($process_steps as $i => $step) {
            echo '<div style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd;">';
            echo '<h4>Step ' . ($i + 1) . '</h4>';
            echo '<label>Step Title:</label><br>';
            echo '<input type="text" name="technical_seo_process_steps[' . $i . '][title]" value="' . esc_attr($step['title']) . '" style="width: 100%; margin-bottom: 5px;" />';
            echo '<label>Step Description:</label><br>';
            echo '<textarea name="technical_seo_process_steps[' . $i . '][description]" rows="3" style="width: 100%;">' . esc_textarea($step['description']) . '</textarea>';
            echo '</div>';
        }
    }
}

// Tools callback
function technical_seo_tools_callback($post) {
    $tools_title = get_post_meta($post->ID, 'technical_seo_tools_title', true) ?: 'Professional Technical SEO Tools';
    $tool_categories = get_post_meta($post->ID, 'technical_seo_tool_categories', true) ?: array(
        array(
            'title' => 'Site Speed & Performance',
            'tools' => array(
                'Google PageSpeed Insights',
                'GTmetrix',
                'WebPageTest',
                'Lighthouse'
            )
        ),
        array(
            'title' => 'Crawling & Indexing',
            'tools' => array(
                'Screaming Frog SEO Spider',
                'Google Search Console',
                'Bing Webmaster Tools',
                'DeepCrawl'
            )
        ),
        array(
            'title' => 'Schema & Structured Data',
            'tools' => array(
                'Google Rich Results Test',
                'Schema Markup Validator',
                'JSON-LD Generator',
                'Structured Data Testing Tool'
            )
        ),
        array(
            'title' => 'Mobile & Core Web Vitals',
            'tools' => array(
                'Google Mobile-Friendly Test',
                'Core Web Vitals Report',
                'Chrome DevTools',
                'Real User Monitoring (RUM)'
            )
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="technical_seo_tools_title">Tools Section Title</label></th>';
    echo '<td><input type="text" id="technical_seo_tools_title" name="technical_seo_tools_title" value="' . esc_attr($tools_title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Tool Categories</h4>';
    if (is_array($tool_categories)) {
        foreach ($tool_categories as $i => $category) {
            echo '<div style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd;">';
            echo '<label>Category Title:</label><br>';
            echo '<input type="text" name="technical_seo_tool_categories[' . $i . '][title]" value="' . esc_attr($category['title']) . '" style="width: 100%; margin-bottom: 10px;" />';
            echo '<label>Tools:</label><br>';
            if (isset($category['tools']) && is_array($category['tools'])) {
                foreach ($category['tools'] as $j => $tool) {
                    echo '<div style="margin-bottom: 5px;">';
                    echo '<input type="text" name="technical_seo_tool_categories[' . $i . '][tools][]" value="' . esc_attr($tool) . '" style="width: 100%;" />';
                    echo '</div>';
                }
            }
            echo '</div>';
        }
    }
}

// Issues callback
function technical_seo_issues_callback($post) {
    $issues_title = get_post_meta($post->ID, 'technical_seo_issues_title', true) ?: 'Common Technical SEO Issues We Fix';
    $issues = get_post_meta($post->ID, 'technical_seo_issues', true) ?: array(
        array(
            'title' => 'Site Speed Issues',
            'description' => 'Slow loading pages that hurt user experience and rankings.',
            'priority' => 'high',
            'issues' => array(
                'Large, unoptimized images',
                'Excessive HTTP requests',
                'Unminified CSS and JavaScript',
                'Poor server response times'
            )
        ),
        array(
            'title' => 'Crawl Errors',
            'description' => 'Issues preventing search engines from accessing your content.',
            'priority' => 'high',
            'issues' => array(
                '404 errors and broken links',
                'Blocked resources in robots.txt',
                'Server errors (5xx codes)',
                'Redirect chains and loops'
            )
        ),
        array(
            'title' => 'Mobile Issues',
            'description' => 'Poor mobile experience affecting mobile rankings.',
            'priority' => 'medium',
            'issues' => array(
                'Non-responsive design',
                'Touch elements too close',
                'Viewport not configured',
                'Flash content usage'
            )
        ),
        array(
            'title' => 'Duplicate Content',
            'description' => 'Content duplication issues confusing search engines.',
            'priority' => 'medium',
            'issues' => array(
                'Multiple URLs for same content',
                'Missing canonical tags',
                'Parameter-based duplicates',
                'Scraped or copied content'
            )
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="technical_seo_issues_title">Issues Section Title</label></th>';
    echo '<td><input type="text" id="technical_seo_issues_title" name="technical_seo_issues_title" value="' . esc_attr($issues_title) . '" style="width: 100%;" /></td></tr>';
    echo '</table>';
    
    echo '<h4>Technical Issues</h4>';
    if (is_array($issues)) {
        foreach ($issues as $i => $issue) {
            echo '<div style="margin-bottom: 15px; padding: 10px; border: 1px solid #ddd;">';
            echo '<label>Issue Title:</label><br>';
            echo '<input type="text" name="technical_seo_issues[' . $i . '][title]" value="' . esc_attr($issue['title']) . '" style="width: 100%; margin-bottom: 10px;" />';
            echo '<label>Issue Description:</label><br>';
            echo '<textarea name="technical_seo_issues[' . $i . '][description]" rows="2" style="width: 100%; margin-bottom: 10px;">' . esc_textarea($issue['description']) . '</textarea>';
            echo '<label>Priority:</label><br>';
            echo '<select name="technical_seo_issues[' . $i . '][priority]" style="width: 100%; margin-bottom: 10px;">';
            echo '<option value="high" ' . (($issue['priority'] === 'high') ? 'selected' : '') . '>High Priority</option>';
            echo '<option value="medium" ' . (($issue['priority'] === 'medium') ? 'selected' : '') . '>Medium Priority</option>';
            echo '<option value="low" ' . (($issue['priority'] === 'low') ? 'selected' : '') . '>Low Priority</option>';
            echo '</select>';
            echo '<label>Issues List:</label><br>';
            if (isset($issue['issues']) && is_array($issue['issues'])) {
                foreach ($issue['issues'] as $j => $specific_issue) {
                    echo '<div style="margin-bottom: 5px;">';
                    echo '<input type="text" name="technical_seo_issues[' . $i . '][issues][]" value="' . esc_attr($specific_issue) . '" style="width: 100%;" />';
                    echo '</div>';
                }
            }
            echo '</div>';
        }
    }
}

// Testimonial callback
function technical_seo_testimonial_callback($post) {
    $testimonial_quote = get_post_meta($post->ID, 'technical_seo_testimonial_quote', true) ?: 'The technical SEO work from Aimpro Digital was transformational. They improved our site speed by 70% and fixed issues we didn\'t even know existed. Our organic traffic has more than doubled since the technical optimizations were completed.';
    $testimonial_author_name = get_post_meta($post->ID, 'technical_seo_testimonial_author_name', true) ?: 'Anna Chen';
    $testimonial_author_title = get_post_meta($post->ID, 'technical_seo_testimonial_author_title', true) ?: 'E-commerce Manager, StyleHub';
    $testimonial_author_company = get_post_meta($post->ID, 'technical_seo_testimonial_author_company', true) ?: 'Online Fashion Retailer';
    $testimonial_image = get_post_meta($post->ID, 'technical_seo_testimonial_image', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="technical_seo_testimonial_quote">Testimonial Quote</label></th>';
    echo '<td><textarea id="technical_seo_testimonial_quote" name="technical_seo_testimonial_quote" rows="5" style="width: 100%;">' . esc_textarea($testimonial_quote) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="technical_seo_testimonial_author_name">Author Name</label></th>';
    echo '<td><input type="text" id="technical_seo_testimonial_author_name" name="technical_seo_testimonial_author_name" value="' . esc_attr($testimonial_author_name) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_testimonial_author_title">Author Title</label></th>';
    echo '<td><input type="text" id="technical_seo_testimonial_author_title" name="technical_seo_testimonial_author_title" value="' . esc_attr($testimonial_author_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_testimonial_author_company">Author Company</label></th>';
    echo '<td><input type="text" id="technical_seo_testimonial_author_company" name="technical_seo_testimonial_author_company" value="' . esc_attr($testimonial_author_company) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_testimonial_image">Author Image</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="technical_seo_testimonial_image" name="technical_seo_testimonial_image" value="' . esc_attr($testimonial_image) . '" />';
    echo '<div id="technical_seo_testimonial_image_preview">';
    if ($testimonial_image) {
        echo '<img src="' . esc_url($testimonial_image) . '" style="max-width: 150px; height: auto;" /><br>';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="technical_seo_testimonial_image_button">Choose Image</button>';
    if ($testimonial_image) {
        echo ' <button type="button" class="button" id="technical_seo_testimonial_image_remove">Remove Image</button>';
    }
    echo '</td></tr>';
    echo '</table>';
}

// CTA callback
function technical_seo_cta_callback($post) {
    $cta_title = get_post_meta($post->ID, 'technical_seo_cta_title', true) ?: 'Ready to Fix Your Technical SEO Issues?';
    $cta_description = get_post_meta($post->ID, 'technical_seo_cta_description', true) ?: 'Let\'s optimize your website\'s technical foundation for better search performance and user experience.';
    $cta_primary_text = get_post_meta($post->ID, 'technical_seo_cta_primary_text', true) ?: 'Get Free Technical Audit';
    $cta_primary_url = get_post_meta($post->ID, 'technical_seo_cta_primary_url', true) ?: home_url('/contact');
    $cta_secondary_text = get_post_meta($post->ID, 'technical_seo_cta_secondary_text', true) ?: 'View Technical SEO Results';
    $cta_secondary_url = get_post_meta($post->ID, 'technical_seo_cta_secondary_url', true) ?: home_url('/case-studies');
    $cta_benefits = get_post_meta($post->ID, 'technical_seo_cta_benefits', true) ?: array(
        '✓ Technical SEO audit included',
        '✓ Core Web Vitals optimization',
        '✓ Site speed improvements'
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="technical_seo_cta_title">CTA Title</label></th>';
    echo '<td><input type="text" id="technical_seo_cta_title" name="technical_seo_cta_title" value="' . esc_attr($cta_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_cta_description">CTA Description</label></th>';
    echo '<td><textarea id="technical_seo_cta_description" name="technical_seo_cta_description" rows="3" style="width: 100%;">' . esc_textarea($cta_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="technical_seo_cta_primary_text">Primary Button Text</label></th>';
    echo '<td><input type="text" id="technical_seo_cta_primary_text" name="technical_seo_cta_primary_text" value="' . esc_attr($cta_primary_text) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_cta_primary_url">Primary Button URL</label></th>';
    echo '<td><input type="text" id="technical_seo_cta_primary_url" name="technical_seo_cta_primary_url" value="' . esc_attr($cta_primary_url) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_cta_secondary_text">Secondary Button Text</label></th>';
    echo '<td><input type="text" id="technical_seo_cta_secondary_text" name="technical_seo_cta_secondary_text" value="' . esc_attr($cta_secondary_text) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="technical_seo_cta_secondary_url">Secondary Button URL</label></th>';
    echo '<td><input type="text" id="technical_seo_cta_secondary_url" name="technical_seo_cta_secondary_url" value="' . esc_attr($cta_secondary_url) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Benefits</label></th>';
    echo '<td>';
    if (is_array($cta_benefits)) {
        foreach ($cta_benefits as $i => $benefit) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="technical_seo_cta_benefits[]" value="' . esc_attr($benefit) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Save meta data
function technical_seo_save_meta($post_id) {
    if (!isset($_POST['technical_seo_meta_nonce']) || !wp_verify_nonce($_POST['technical_seo_meta_nonce'], 'technical_seo_meta_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }    // Save all meta fields
    $meta_fields = array(
        'technical_seo_header_title',
        'technical_seo_header_subtitle',
        'technical_seo_hero_image',
        'technical_seo_overview_title',
        'technical_seo_overview_description',
        'technical_seo_benefits_title',
        'technical_seo_benefits',
        'technical_seo_overview_image_id',
        'technical_seo_services_title',
        'technical_seo_services',
        'technical_seo_case_study_label',
        'technical_seo_case_study_title',
        'technical_seo_case_study_description',
        'technical_seo_case_study_challenge_title',
        'technical_seo_case_study_challenges',
        'technical_seo_case_study_solution_title',
        'technical_seo_case_study_solutions',
        'technical_seo_process_title',
        'technical_seo_process_steps',
        'technical_seo_tools_title',
        'technical_seo_tool_categories',
        'technical_seo_issues_title',
        'technical_seo_issues',
        'technical_seo_testimonial_quote',
        'technical_seo_testimonial_author_name',
        'technical_seo_testimonial_author_title',
        'technical_seo_testimonial_author_company',
        'technical_seo_testimonial_image',
        'technical_seo_cta_title',
        'technical_seo_cta_description',
        'technical_seo_cta_primary_text',
        'technical_seo_cta_primary_url',
        'technical_seo_cta_secondary_text',
        'technical_seo_cta_secondary_url',
        'technical_seo_cta_benefits'
    );

    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
}

add_action('save_post', 'technical_seo_save_meta');

// Add JavaScript for media uploader
function technical_seo_admin_scripts($hook) {
    global $post;
    
    if ($hook !== 'post.php' && $hook !== 'post-new.php') {
        return;
    }
    
    if (!$post || get_page_template_slug($post->ID) !== 'page-technical-seo.php') {
        return;
    }
    
    wp_enqueue_media();
    wp_enqueue_script('technical-seo-admin', get_template_directory_uri() . '/js/technical-seo-admin.js', array('jquery'), '1.0', true);
}
add_action('admin_enqueue_scripts', 'technical_seo_admin_scripts');

// Create admin JS file if it doesn't exist
function create_technical_seo_admin_js() {
    $js_file = get_template_directory() . '/js/technical-seo-admin.js';
    
    if (!file_exists($js_file)) {
        $js_dir = dirname($js_file);
        if (!file_exists($js_dir)) {
            wp_mkdir_p($js_dir);
        }
        
        $js_content = "
jQuery(document).ready(function($) {
    // Hero Image Upload
    $('#technical_seo_hero_image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Hero Image',
            multiple: false
        }).open()
        .on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('#technical_seo_hero_image').val(image_url);
            $('#technical_seo_hero_image_preview').html('<img src=\"' + image_url + '\" style=\"max-width: 200px; height: auto;\" /><br>');
            if ($('#technical_seo_hero_image_remove').length === 0) {
                $('#technical_seo_hero_image_button').after(' <button type=\"button\" class=\"button\" id=\"technical_seo_hero_image_remove\">Remove Image</button>');
            }
        });
    });
    
    // Hero Image Remove
    $(document).on('click', '#technical_seo_hero_image_remove', function(e) {
        e.preventDefault();
        $('#technical_seo_hero_image').val('');
        $('#technical_seo_hero_image_preview').html('');
        $(this).remove();
    });
    
    // Testimonial Image Upload
    $('#technical_seo_testimonial_image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Testimonial Image',
            multiple: false
        }).open()
        .on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('#technical_seo_testimonial_image').val(image_url);
            $('#technical_seo_testimonial_image_preview').html('<img src=\"' + image_url + '\" style=\"max-width: 150px; height: auto;\" /><br>');
            if ($('#technical_seo_testimonial_image_remove').length === 0) {
                $('#technical_seo_testimonial_image_button').after(' <button type=\"button\" class=\"button\" id=\"technical_seo_testimonial_image_remove\">Remove Image</button>');
            }
        });
    });
    
    // Testimonial Image Remove
    $(document).on('click', '#technical_seo_testimonial_image_remove', function(e) {
        e.preventDefault();
        $('#technical_seo_testimonial_image').val('');
        $('#technical_seo_testimonial_image_preview').html('');
        $(this).remove();
    });
    
    // Add Benefit
    $('#add-technical-seo-benefit').click(function() {
        var container = $('#technical-seo-benefits-container');
        var newBenefit = $('<div style=\"margin-bottom: 10px;\"><input type=\"text\" name=\"technical_seo_benefits[]\" value=\"\" style=\"width: 90%;\" /> <button type=\"button\" class=\"button remove-benefit\">Remove</button></div>');
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

add_action('init', 'create_technical_seo_admin_js');
?>
