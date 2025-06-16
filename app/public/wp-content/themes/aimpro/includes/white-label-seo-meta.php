<?php
// White Label SEO page meta boxes and fields

// Add meta boxes
function white_label_seo_add_meta_boxes() {
    add_meta_box(
        'white_label_seo_header',
        'Page Header Settings',
        'white_label_seo_header_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'white_label_seo_overview',
        'Service Overview',
        'white_label_seo_overview_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'white_label_seo_benefits',
        'Why Choose White Label Benefits',
        'white_label_seo_benefits_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'white_label_seo_services',
        'White Label Services',
        'white_label_seo_services_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'white_label_seo_packages',
        'Pricing Packages',
        'white_label_seo_packages_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'white_label_seo_case_study',
        'Case Study',
        'white_label_seo_case_study_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'white_label_seo_included',
        'What\'s Included',
        'white_label_seo_included_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'white_label_seo_faqs',
        'FAQ Section',
        'white_label_seo_faqs_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'white_label_seo_testimonial',
        'Testimonial',
        'white_label_seo_testimonial_callback',
        'page',
        'normal',
        'high'
    );
    
    add_meta_box(
        'white_label_seo_cta',
        'Call to Action',
        'white_label_seo_cta_callback',
        'page',
        'normal',
        'high'
    );
}

// Check if this is the White Label SEO page
function is_white_label_seo_page() {
    global $post;
    return $post && get_page_template_slug($post->ID) === 'page-white-label-seo.php';
}

// Only add meta boxes for White Label SEO page
add_action('add_meta_boxes', function() {
    if (is_white_label_seo_page()) {
        white_label_seo_add_meta_boxes();
    }
});

// Header callback
function white_label_seo_header_callback($post) {
    $header_title = get_post_meta($post->ID, 'white_label_seo_header_title', true) ?: 'White Label SEO Services';
    $header_subtitle = get_post_meta($post->ID, 'white_label_seo_header_subtitle', true) ?: 'Scale your agency with our comprehensive white label SEO solutions';
    $header_badges = get_post_meta($post->ID, 'white_label_seo_header_badges', true) ?: array(
        'Agency Partners',
        'Your Branding',
        'Full Transparency'
    );
    
    wp_nonce_field('white_label_seo_meta_nonce', 'white_label_seo_meta_nonce');
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="white_label_seo_header_title">Header Title</label></th>';
    echo '<td><input type="text" id="white_label_seo_header_title" name="white_label_seo_header_title" value="' . esc_attr($header_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_header_subtitle">Header Subtitle</label></th>';
    echo '<td><textarea id="white_label_seo_header_subtitle" name="white_label_seo_header_subtitle" rows="3" style="width: 100%;">' . esc_textarea($header_subtitle) . '</textarea></td></tr>';
    
    echo '<tr><th><label>Header Badges</label></th>';
    echo '<td>';
    if (is_array($header_badges)) {
        foreach ($header_badges as $i => $badge) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="white_label_seo_header_badges[]" value="' . esc_attr($badge) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Overview callback
function white_label_seo_overview_callback($post) {
    $overview_title = get_post_meta($post->ID, 'white_label_seo_overview_title', true) ?: 'Professional SEO Services Under Your Brand';
    $overview_description_1 = get_post_meta($post->ID, 'white_label_seo_overview_description_1', true) ?: 'Our white label SEO services allow agencies, consultants, and business owners to offer comprehensive SEO solutions to their clients without the overhead of building an in-house team. We work behind the scenes, delivering exceptional results while you maintain the client relationship.';
    $overview_description_2 = get_post_meta($post->ID, 'white_label_seo_overview_description_2', true) ?: 'From technical audits to content optimization and link building, our team becomes an extension of your agency, delivering consistent, high-quality SEO services that help you scale your business and increase profitability.';
    $stats = get_post_meta($post->ID, 'white_label_seo_stats', true) ?: array(
        array('number' => '150+', 'label' => 'Agency partners'),
        array('number' => '95%', 'label' => 'Partner retention rate'),
        array('number' => '48hr', 'label' => 'Average response time')
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="white_label_seo_overview_title">Overview Title</label></th>';
    echo '<td><input type="text" id="white_label_seo_overview_title" name="white_label_seo_overview_title" value="' . esc_attr($overview_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_overview_description_1">Overview Description 1</label></th>';
    echo '<td><textarea id="white_label_seo_overview_description_1" name="white_label_seo_overview_description_1" rows="4" style="width: 100%;">' . esc_textarea($overview_description_1) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_overview_description_2">Overview Description 2</label></th>';
    echo '<td><textarea id="white_label_seo_overview_description_2" name="white_label_seo_overview_description_2" rows="4" style="width: 100%;">' . esc_textarea($overview_description_2) . '</textarea></td></tr>';
    
    echo '<tr><th><label>Statistics</label></th>';
    echo '<td>';
    if (is_array($stats)) {
        foreach ($stats as $i => $stat) {
            echo '<div style="margin-bottom: 10px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>Stat ' . ($i + 1) . ' Number:</label><br>';
            echo '<input type="text" name="white_label_seo_stats[' . $i . '][number]" value="' . esc_attr($stat['number']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            echo '<label>Stat ' . ($i + 1) . ' Label:</label><br>';
            echo '<input type="text" name="white_label_seo_stats[' . $i . '][label]" value="' . esc_attr($stat['label']) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Benefits callback
function white_label_seo_benefits_callback($post) {
    $benefits_title = get_post_meta($post->ID, 'white_label_seo_benefits_title', true) ?: 'Why Choose White Label SEO?';
    $benefits = get_post_meta($post->ID, 'white_label_seo_benefits', true) ?: array(
        array(
            'title' => 'Scale Rapidly',
            'description' => 'Expand your service offerings and take on more clients without hiring additional staff or investing in expensive SEO tools.'
        ),
        array(
            'title' => 'Expert Delivery',
            'description' => 'Leverage our team of certified SEO specialists and access to premium tools without the overhead costs.'
        ),
        array(
            'title' => 'Higher Margins',
            'description' => 'Increase your profit margins by offering SEO services at competitive rates while reducing operational costs.'
        ),
        array(
            'title' => 'Your Brand',
            'description' => 'All deliverables are fully branded with your company\'s logo, colors, and messaging. Your clients never know we exist.'
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="white_label_seo_benefits_title">Benefits Title</label></th>';
    echo '<td><input type="text" id="white_label_seo_benefits_title" name="white_label_seo_benefits_title" value="' . esc_attr($benefits_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Benefits</label></th>';
    echo '<td>';
    if (is_array($benefits)) {
        foreach ($benefits as $i => $benefit) {
            echo '<div style="margin-bottom: 15px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>Benefit ' . ($i + 1) . ' Title:</label><br>';
            echo '<input type="text" name="white_label_seo_benefits[' . $i . '][title]" value="' . esc_attr($benefit['title']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            echo '<label>Benefit ' . ($i + 1) . ' Description:</label><br>';
            echo '<textarea name="white_label_seo_benefits[' . $i . '][description]" rows="3" style="width: 100%;">' . esc_textarea($benefit['description']) . '</textarea>';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Services callback
function white_label_seo_services_callback($post) {
    $services_title = get_post_meta($post->ID, 'white_label_seo_services_title', true) ?: 'White Label SEO Services We Provide';
    $services = get_post_meta($post->ID, 'white_label_seo_services', true) ?: array(
        array(
            'title' => 'SEO Audits & Analysis',
            'description' => 'Comprehensive website audits with detailed reports, recommendations, and action plans - all under your branding.',
            'features' => array(
                'Technical SEO audits',
                'Content gap analysis',
                'Competitor research',
                'Keyword opportunity mapping'
            )
        ),
        array(
            'title' => 'On-Page Optimization',
            'description' => 'Complete on-page SEO optimization including content, meta tags, and technical elements for improved rankings.',
            'features' => array(
                'Title tag & meta optimization',
                'Content optimization',
                'Schema markup implementation',
                'Internal linking strategy'
            )
        ),
        array(
            'title' => 'Local SEO Services',
            'description' => 'Comprehensive local SEO optimization to help your clients dominate local search results and attract nearby customers.',
            'features' => array(
                'Google Business Profile optimization',
                'Local citation building',
                'Review management setup',
                'Local content creation'
            )
        ),
        array(
            'title' => 'Technical SEO',
            'description' => 'Advanced technical optimization to improve site performance, crawlability, and search engine understanding.',
            'features' => array(
                'Site speed optimization',
                'Core Web Vitals improvement',
                'Mobile optimization',
                'Crawl error resolution'
            )
        ),
        array(
            'title' => 'Link Building',
            'description' => 'High-quality, white-hat link building campaigns to improve domain authority and search rankings.',
            'features' => array(
                'Guest posting campaigns',
                'Business directory submissions',
                'Resource page link building',
                'Digital PR outreach'
            )
        ),
        array(
            'title' => 'Monthly Reporting',
            'description' => 'Comprehensive monthly reports with your branding, showing progress, insights, and recommendations.',
            'features' => array(
                'Ranking tracking reports',
                'Traffic & conversion analysis',
                'Competitive intelligence',
                'Custom branded dashboards'
            )
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="white_label_seo_services_title">Services Title</label></th>';
    echo '<td><input type="text" id="white_label_seo_services_title" name="white_label_seo_services_title" value="' . esc_attr($services_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Services</label></th>';
    echo '<td>';
    if (is_array($services)) {
        foreach ($services as $i => $service) {
            echo '<div style="margin-bottom: 20px; border: 1px solid #ddd; padding: 15px;">';
            echo '<h4>Service ' . ($i + 1) . '</h4>';
            echo '<label>Title:</label><br>';
            echo '<input type="text" name="white_label_seo_services[' . $i . '][title]" value="' . esc_attr($service['title']) . '" style="width: 100%; margin-bottom: 10px;" /><br>';
            echo '<label>Description:</label><br>';
            echo '<textarea name="white_label_seo_services[' . $i . '][description]" rows="3" style="width: 100%; margin-bottom: 10px;">' . esc_textarea($service['description']) . '</textarea><br>';
            echo '<label>Features:</label><br>';
            if (isset($service['features']) && is_array($service['features'])) {
                foreach ($service['features'] as $j => $feature) {
                    echo '<input type="text" name="white_label_seo_services[' . $i . '][features][]" value="' . esc_attr($feature) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
                }
            }
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Packages callback
function white_label_seo_packages_callback($post) {
    $packages_title = get_post_meta($post->ID, 'white_label_seo_packages_title', true) ?: 'White Label SEO Packages';
    $packages = get_post_meta($post->ID, 'white_label_seo_packages', true) ?: array(
        array(
            'title' => 'Starter Package',
            'price' => '£497',
            'period' => 'per month',
            'features' => array(
                'Up to 5 target keywords',
                'Monthly SEO audit',
                'On-page optimization',
                'Basic link building (5 links/month)',
                'Monthly branded report',
                'Google Business Profile optimization',
                'Technical SEO monitoring'
            ),
            'featured' => false
        ),
        array(
            'title' => 'Professional Package',
            'price' => '£997',
            'period' => 'per month',
            'badge' => 'Most Popular',
            'features' => array(
                'Up to 15 target keywords',
                'Bi-weekly SEO audits',
                'Advanced on-page optimization',
                'Premium link building (15 links/month)',
                'Weekly branded reports',
                'Local SEO optimization',
                'Content optimization',
                'Competitor analysis',
                'Priority support'
            ),
            'featured' => true
        ),
        array(
            'title' => 'Enterprise Package',
            'price' => '£1,997',
            'period' => 'per month',
            'features' => array(
                'Unlimited keywords',
                'Weekly SEO audits',
                'Complete on-page optimization',
                'Premium link building (30+ links/month)',
                'Custom reporting schedule',
                'Multi-location SEO',
                'Content creation included',
                'Advanced technical SEO',
                'Dedicated account manager',
                'White-glove support'
            ),
            'featured' => false
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="white_label_seo_packages_title">Packages Title</label></th>';
    echo '<td><input type="text" id="white_label_seo_packages_title" name="white_label_seo_packages_title" value="' . esc_attr($packages_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Packages</label></th>';
    echo '<td>';
    if (is_array($packages)) {
        foreach ($packages as $i => $package) {
            echo '<div style="margin-bottom: 20px; border: 1px solid #ddd; padding: 15px;">';
            echo '<h4>Package ' . ($i + 1) . '</h4>';
            echo '<label>Title:</label><br>';
            echo '<input type="text" name="white_label_seo_packages[' . $i . '][title]" value="' . esc_attr($package['title']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            echo '<label>Price:</label><br>';
            echo '<input type="text" name="white_label_seo_packages[' . $i . '][price]" value="' . esc_attr($package['price']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            echo '<label>Period:</label><br>';
            echo '<input type="text" name="white_label_seo_packages[' . $i . '][period]" value="' . esc_attr($package['period']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            if (isset($package['badge'])) {
                echo '<label>Badge (if any):</label><br>';
                echo '<input type="text" name="white_label_seo_packages[' . $i . '][badge]" value="' . esc_attr($package['badge']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            }
            echo '<label>Featured Package:</label><br>';
            echo '<input type="checkbox" name="white_label_seo_packages[' . $i . '][featured]" value="1" ' . (isset($package['featured']) && $package['featured'] ? 'checked' : '') . ' /> Featured Package<br><br>';
            echo '<label>Features:</label><br>';
            if (isset($package['features']) && is_array($package['features'])) {
                foreach ($package['features'] as $j => $feature) {
                    echo '<input type="text" name="white_label_seo_packages[' . $i . '][features][]" value="' . esc_attr($feature) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
                }
            }
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Case Study callback
function white_label_seo_case_study_callback($post) {
    $case_study_title = get_post_meta($post->ID, 'white_label_seo_case_study_title', true) ?: 'Partner Success Story';
    $case_study_subtitle = get_post_meta($post->ID, 'white_label_seo_case_study_subtitle', true) ?: 'Digital Agency Scales to £50K Monthly Revenue';
    $case_study_description = get_post_meta($post->ID, 'white_label_seo_case_study_description', true) ?: 'A small digital marketing agency approached us looking to add SEO services to their offering without the overhead of hiring specialists. Our white label partnership helped them transform their business.';
    $challenges = get_post_meta($post->ID, 'white_label_seo_challenges', true) ?: array(
        'Clients requesting SEO services they couldn\'t provide',
        'Limited budget for hiring SEO specialists',
        'Lack of SEO tools and expertise',
        'Need to maintain client relationships'
    );
    $solutions = get_post_meta($post->ID, 'white_label_seo_solutions', true) ?: array(
        'Complete white label SEO service integration',
        'Branded reports and client communications',
        'Monthly strategy calls and support',
        'Transparent pricing and processes'
    );
    $metrics = get_post_meta($post->ID, 'white_label_seo_metrics', true) ?: array(
        array('number' => '£50K', 'label' => 'Monthly SEO Revenue'),
        array('number' => '35', 'label' => 'New SEO Clients'),
        array('number' => '85%', 'label' => 'Profit Margin'),
        array('number' => '18 Months', 'label' => 'Partnership Duration')
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="white_label_seo_case_study_title">Case Study Title</label></th>';
    echo '<td><input type="text" id="white_label_seo_case_study_title" name="white_label_seo_case_study_title" value="' . esc_attr($case_study_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_case_study_subtitle">Case Study Subtitle</label></th>';
    echo '<td><input type="text" id="white_label_seo_case_study_subtitle" name="white_label_seo_case_study_subtitle" value="' . esc_attr($case_study_subtitle) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_case_study_description">Case Study Description</label></th>';
    echo '<td><textarea id="white_label_seo_case_study_description" name="white_label_seo_case_study_description" rows="4" style="width: 100%;">' . esc_textarea($case_study_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label>Challenges</label></th>';
    echo '<td>';
    if (is_array($challenges)) {
        foreach ($challenges as $i => $challenge) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="white_label_seo_challenges[]" value="' . esc_attr($challenge) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    
    echo '<tr><th><label>Solutions</label></th>';
    echo '<td>';
    if (is_array($solutions)) {
        foreach ($solutions as $i => $solution) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="white_label_seo_solutions[]" value="' . esc_attr($solution) . '" style="width: 100%;" />';
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
            echo '<input type="text" name="white_label_seo_metrics[' . $i . '][number]" value="' . esc_attr($metric['number']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            echo '<label>Metric ' . ($i + 1) . ' Label:</label><br>';
            echo '<input type="text" name="white_label_seo_metrics[' . $i . '][label]" value="' . esc_attr($metric['label']) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Included callback
function white_label_seo_included_callback($post) {
    $included_title = get_post_meta($post->ID, 'white_label_seo_included_title', true) ?: 'What\'s Included in Every Partnership';
    $included_items = get_post_meta($post->ID, 'white_label_seo_included_items', true) ?: array(
        array(
            'title' => 'Full Branding',
            'description' => 'All reports, dashboards, and communications use your company branding, colors, and logo.'
        ),
        array(
            'title' => 'Direct Communication',
            'description' => 'Dedicated account manager and direct access to our SEO team for questions and updates.'
        ),
        array(
            'title' => 'Transparent Reporting',
            'description' => 'Real-time access to all campaign data, metrics, and progress through branded dashboards.'
        ),
        array(
            'title' => 'Premium Tools',
            'description' => 'Access to enterprise-level SEO tools and software at no additional cost to you.'
        ),
        array(
            'title' => 'Growth Support',
            'description' => 'Marketing materials, sales support, and training to help you sell SEO services effectively.'
        ),
        array(
            'title' => 'Quality Guarantee',
            'description' => '100% satisfaction guarantee with full refund if you\'re not completely satisfied with our services.'
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="white_label_seo_included_title">Included Title</label></th>';
    echo '<td><input type="text" id="white_label_seo_included_title" name="white_label_seo_included_title" value="' . esc_attr($included_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Included Items</label></th>';
    echo '<td>';
    if (is_array($included_items)) {
        foreach ($included_items as $i => $item) {
            echo '<div style="margin-bottom: 15px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>Item ' . ($i + 1) . ' Title:</label><br>';
            echo '<input type="text" name="white_label_seo_included_items[' . $i . '][title]" value="' . esc_attr($item['title']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            echo '<label>Item ' . ($i + 1) . ' Description:</label><br>';
            echo '<textarea name="white_label_seo_included_items[' . $i . '][description]" rows="3" style="width: 100%;">' . esc_textarea($item['description']) . '</textarea>';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// FAQs callback
function white_label_seo_faqs_callback($post) {
    $faqs_title = get_post_meta($post->ID, 'white_label_seo_faqs_title', true) ?: 'Frequently Asked Questions';
    $faqs = get_post_meta($post->ID, 'white_label_seo_faqs', true) ?: array(
        array(
            'question' => 'Will my clients know you\'re providing the SEO services?',
            'answer' => 'No, absolutely not. All communications, reports, and deliverables are fully branded with your company information. We remain completely invisible to your clients.'
        ),
        array(
            'question' => 'What\'s the minimum commitment for white label services?',
            'answer' => 'We require a minimum 6-month commitment to ensure we can deliver meaningful results. This also allows time to build strong processes and see significant improvements.'
        ),
        array(
            'question' => 'How do you handle client communications?',
            'answer' => 'You maintain all client relationships. We provide you with regular updates and reports that you can share with your clients under your branding.'
        ),
        array(
            'question' => 'Can I customize the services for different clients?',
            'answer' => 'Yes, we offer flexible service packages that can be customized based on each client\'s specific needs, budget, and goals.'
        ),
        array(
            'question' => 'What kind of training and support do you provide?',
            'answer' => 'We provide comprehensive onboarding, sales training materials, and ongoing support to help you successfully sell and manage SEO services.'
        ),
        array(
            'question' => 'How quickly can we get started?',
            'answer' => 'After our initial consultation and agreement, we can typically have your white label SEO services up and running within 1-2 weeks.'
        )
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="white_label_seo_faqs_title">FAQs Title</label></th>';
    echo '<td><input type="text" id="white_label_seo_faqs_title" name="white_label_seo_faqs_title" value="' . esc_attr($faqs_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>FAQ Items</label></th>';
    echo '<td>';
    if (is_array($faqs)) {
        foreach ($faqs as $i => $faq) {
            echo '<div style="margin-bottom: 15px; border: 1px solid #ddd; padding: 10px;">';
            echo '<label>FAQ ' . ($i + 1) . ' Question:</label><br>';
            echo '<input type="text" name="white_label_seo_faqs[' . $i . '][question]" value="' . esc_attr($faq['question']) . '" style="width: 100%; margin-bottom: 5px;" /><br>';
            echo '<label>FAQ ' . ($i + 1) . ' Answer:</label><br>';
            echo '<textarea name="white_label_seo_faqs[' . $i . '][answer]" rows="3" style="width: 100%;">' . esc_textarea($faq['answer']) . '</textarea>';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Testimonial callback
function white_label_seo_testimonial_callback($post) {
    wp_enqueue_media(); // Enqueue media uploader
    
    $testimonial_image = get_post_meta($post->ID, 'white_label_seo_testimonial_image', true);
    $testimonial_quote = get_post_meta($post->ID, 'white_label_seo_testimonial_quote', true) ?: 'Partnering with AIM Pro Marketing for white label SEO has been a game-changer for our agency. We\'ve added £30K in monthly recurring revenue and our clients are seeing incredible results. The team is professional, transparent, and delivers exactly what they promise.';
    $testimonial_author = get_post_meta($post->ID, 'white_label_seo_testimonial_author', true) ?: 'James Richardson';
    $testimonial_position = get_post_meta($post->ID, 'white_label_seo_testimonial_position', true) ?: 'Founder, Digital Growth Agency';
    
    echo '<table class="form-table">';
    
    // Testimonial Image
    echo '<tr><th><label for="white_label_seo_testimonial_image">Testimonial Image (Optional)</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="white_label_seo_testimonial_image" name="white_label_seo_testimonial_image" value="' . esc_attr($testimonial_image) . '" />';
    echo '<div id="white_label_seo_testimonial_image_preview" style="margin-bottom: 10px;">';
    if ($testimonial_image) {
        echo '<img src="' . esc_url($testimonial_image) . '" style="max-width: 150px; height: auto;" />';
    }
    echo '</div>';
    echo '<button type="button" class="button" id="white_label_seo_testimonial_upload_btn">Upload Image</button> ';
    if ($testimonial_image) {
        echo '<button type="button" class="button" id="white_label_seo_testimonial_remove_btn">Remove Image</button>';
    }
    echo '<script>
    jQuery(document).ready(function($) {
        $("#white_label_seo_testimonial_upload_btn").click(function(e) {
            e.preventDefault();
            var custom_uploader = wp.media({
                title: "Select Testimonial Image",
                button: { text: "Use Image" },
                multiple: false
            });
            custom_uploader.on("select", function() {
                var attachment = custom_uploader.state().get("selection").first().toJSON();
                $("#white_label_seo_testimonial_image").val(attachment.url);
                $("#white_label_seo_testimonial_image_preview").html("<img src=\"" + attachment.url + "\" style=\"max-width: 150px; height: auto;\" />");
                $("#white_label_seo_testimonial_remove_btn").show();
            });
            custom_uploader.open();
        });
        $("#white_label_seo_testimonial_remove_btn").click(function(e) {
            e.preventDefault();
            $("#white_label_seo_testimonial_image").val("");
            $("#white_label_seo_testimonial_image_preview").html("");
            $(this).hide();
        });
    });
    </script>';
    echo '</td></tr>';
    
    echo '<tr><th><label for="white_label_seo_testimonial_quote">Testimonial Quote</label></th>';
    echo '<td><textarea id="white_label_seo_testimonial_quote" name="white_label_seo_testimonial_quote" rows="5" style="width: 100%;">' . esc_textarea($testimonial_quote) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_testimonial_author">Author Name</label></th>';
    echo '<td><input type="text" id="white_label_seo_testimonial_author" name="white_label_seo_testimonial_author" value="' . esc_attr($testimonial_author) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_testimonial_position">Author Position</label></th>';
    echo '<td><input type="text" id="white_label_seo_testimonial_position" name="white_label_seo_testimonial_position" value="' . esc_attr($testimonial_position) . '" style="width: 100%;" /></td></tr>';
    
    echo '</table>';
}

// CTA callback
function white_label_seo_cta_callback($post) {
    $cta_title = get_post_meta($post->ID, 'white_label_seo_cta_title', true) ?: 'Ready to Scale Your Agency with SEO?';
    $cta_description = get_post_meta($post->ID, 'white_label_seo_cta_description', true) ?: 'Join over 150 successful agency partners who trust us to deliver exceptional SEO results under their brand. Schedule a consultation to learn how our white label services can help you grow.';
    $cta_button_text = get_post_meta($post->ID, 'white_label_seo_cta_button_text', true) ?: 'Schedule Partnership Call';
    $cta_button_url = get_post_meta($post->ID, 'white_label_seo_cta_button_url', true) ?: home_url('/contact');
    $cta_features = get_post_meta($post->ID, 'white_label_seo_cta_features', true) ?: array(
        'No setup fees',
        '6-month minimum commitment',
        '100% satisfaction guarantee'
    );
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="white_label_seo_cta_title">CTA Title</label></th>';
    echo '<td><input type="text" id="white_label_seo_cta_title" name="white_label_seo_cta_title" value="' . esc_attr($cta_title) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_cta_description">CTA Description</label></th>';
    echo '<td><textarea id="white_label_seo_cta_description" name="white_label_seo_cta_description" rows="3" style="width: 100%;">' . esc_textarea($cta_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_cta_button_text">Button Text</label></th>';
    echo '<td><input type="text" id="white_label_seo_cta_button_text" name="white_label_seo_cta_button_text" value="' . esc_attr($cta_button_text) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label for="white_label_seo_cta_button_url">Button URL</label></th>';
    echo '<td><input type="text" id="white_label_seo_cta_button_url" name="white_label_seo_cta_button_url" value="' . esc_attr($cta_button_url) . '" style="width: 100%;" /></td></tr>';
    
    echo '<tr><th><label>Features</label></th>';
    echo '<td>';
    if (is_array($cta_features)) {
        foreach ($cta_features as $i => $feature) {
            echo '<div style="margin-bottom: 5px;">';
            echo '<input type="text" name="white_label_seo_cta_features[]" value="' . esc_attr($feature) . '" style="width: 100%;" />';
            echo '</div>';
        }
    }
    echo '</td></tr>';
    echo '</table>';
}

// Save meta data
function white_label_seo_save_meta($post_id) {
    if (!isset($_POST['white_label_seo_meta_nonce']) || !wp_verify_nonce($_POST['white_label_seo_meta_nonce'], 'white_label_seo_meta_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }    // Save all meta fields
    $meta_fields = array(
        'white_label_seo_header_title',
        'white_label_seo_header_subtitle',
        'white_label_seo_header_badges',
        'white_label_seo_overview_title',
        'white_label_seo_overview_description_1',
        'white_label_seo_overview_description_2',
        'white_label_seo_stats',
        'white_label_seo_benefits_title',
        'white_label_seo_benefits',
        'white_label_seo_services_title',
        'white_label_seo_services',
        'white_label_seo_packages_title',
        'white_label_seo_packages',
        'white_label_seo_case_study_title',
        'white_label_seo_case_study_subtitle',
        'white_label_seo_case_study_description',
        'white_label_seo_case_study_challenges',
        'white_label_seo_case_study_solutions',
        'white_label_seo_case_study_metrics',
        'white_label_seo_included_title',
        'white_label_seo_included_items',
        'white_label_seo_faq_title',
        'white_label_seo_faqs',
        'white_label_seo_testimonial_image',
        'white_label_seo_testimonial_quote',
        'white_label_seo_testimonial_author',
        'white_label_seo_testimonial_position',
        'white_label_seo_cta_title',
        'white_label_seo_cta_description',
        'white_label_seo_cta_button_text',
        'white_label_seo_cta_button_url',
        'white_label_seo_cta_features'
    );

    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }
}

add_action('save_post', 'white_label_seo_save_meta');
?>
