<?php
// High-Converting Website Page Meta Fields

function add_high_converting_website_meta_boxes() {
    global $post;
    
    // Only add to pages
    if (isset($post) && get_post_type($post) === 'page') {
        add_meta_box(
            'high_converting_website_meta_box',
            'High-Converting Website Page Content',
            'high_converting_website_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_high_converting_website_meta_boxes', 11);

function high_converting_website_meta_box_callback($post) {
    // Only show on high converting website page template
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-high-converting-website.php' && $page_slug !== 'high-converting-website') {
        echo '<p>This meta box is designed for the "High-Converting Website Solution Page" template or pages with slug "high-converting-website".</p>';
        echo '<p>Current template: ' . ($page_template ?: 'Default') . '</p>';
        echo '<p>Current slug: ' . ($page_slug ?: 'Not set yet') . '</p>';
        return;
    }

    wp_nonce_field('high_converting_website_meta_box', 'high_converting_website_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_high_converting_website_header_title', true) ?: 'Build a High-Converting Website';
    $header_subtitle = get_post_meta($post->ID, '_high_converting_website_header_subtitle', true) ?: 'Create a website that turns visitors into customers with conversion-focused design and optimization';

    // Solution Overview
    $overview_title = get_post_meta($post->ID, '_high_converting_website_overview_title', true) ?: 'Transform Visitors Into Paying Customers';
    $overview_content = get_post_meta($post->ID, '_high_converting_website_overview_content', true) ?: 'Your website is your most powerful sales tool, working 24/7 to convert visitors into customers. Our data-driven approach to website design and optimization focuses on user experience, conversion psychology, and performance to create websites that don\'t just look good—they deliver results.';
    
    // Challenges
    $challenges_title = get_post_meta($post->ID, '_high_converting_website_challenges_title', true) ?: 'Website Conversion Challenges We Solve:';
    $challenges = get_post_meta($post->ID, '_high_converting_website_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'High bounce rates and low engagement',
            'Poor mobile user experience',
            'Unclear value propositions',
            'Confusing navigation and user flow',
            'Slow loading speeds',
            'Weak calls-to-action'
        );
    }

    // Website Conversion Services
    $services_title = get_post_meta($post->ID, '_high_converting_website_services_title', true) ?: 'Our Website Conversion Services';
    $services = get_post_meta($post->ID, '_high_converting_website_services', true);
    if (empty($services)) {
        $services = array(
            array(
                'title' => 'Conversion-Focused Design',
                'description' => 'Design websites with psychology-based elements that guide visitors toward taking action.',
                'features' => array(
                    'User experience (UX) optimization',
                    'Conversion psychology implementation',
                    'Visual hierarchy optimization',
                    'Trust signal integration'
                )
            ),
            array(
                'title' => 'Landing Page Optimization',
                'description' => 'Create high-converting landing pages that maximize conversions from your marketing campaigns.',
                'features' => array(
                    'Campaign-specific landing pages',
                    'A/B testing implementation',
                    'Form optimization',
                    'Lead capture optimization'
                )
            ),
            array(
                'title' => 'E-commerce Optimization',
                'description' => 'Optimize online stores to increase sales, reduce cart abandonment, and improve customer experience.',
                'features' => array(
                    'Product page optimization',
                    'Checkout process streamlining',
                    'Cart abandonment recovery',
                    'Cross-sell and upsell optimization'
                )
            ),
            array(
                'title' => 'Performance Optimization',
                'description' => 'Improve website speed and technical performance to reduce bounce rates and improve conversions.',
                'features' => array(
                    'Page speed optimization',
                    'Mobile responsiveness',
                    'Core Web Vitals improvement',
                    'Technical SEO implementation'
                )
            )
        );
    }

    // Case Study
    $case_study_label = get_post_meta($post->ID, '_high_converting_website_case_study_label', true) ?: 'Success Story';
    $case_study_title = get_post_meta($post->ID, '_high_converting_website_case_study_title', true) ?: 'FlexiFit: 280% Conversion Rate Improvement';
    $case_study_content = get_post_meta($post->ID, '_high_converting_website_case_study_content', true) ?: 'FlexiFit, an online fitness equipment retailer, had high traffic but poor conversion rates due to a confusing checkout process and weak value propositions.';
    
    // Case Study Challenges
    $case_study_challenge_title = get_post_meta($post->ID, '_high_converting_website_case_study_challenge_title', true) ?: 'The Challenge';
    $case_challenges = get_post_meta($post->ID, '_high_converting_website_case_study_challenges', true);
    if (empty($case_challenges)) {
        $case_challenges = array(
            '1.2% conversion rate on 50,000 monthly visitors',
            '75% cart abandonment rate',
            'Poor mobile user experience',
            'Unclear product benefits and value props'
        );
    }

    // Case Study Solution
    $case_study_solution_title = get_post_meta($post->ID, '_high_converting_website_case_study_solution_title', true) ?: 'Our Solution';
    $case_solutions = get_post_meta($post->ID, '_high_converting_website_case_study_solutions', true);
    if (empty($case_solutions)) {
        $case_solutions = array(
            'Complete website redesign with conversion focus',
            'Streamlined checkout process',
            'Mobile-first responsive design',
            'A/B tested product pages and CTAs'
        );
    }

    // Process
    $process_title = get_post_meta($post->ID, '_high_converting_website_process_title', true) ?: 'Our Website Optimization Process';
    $process_steps = get_post_meta($post->ID, '_high_converting_website_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'number' => '1',
                'title' => 'Conversion Audit',
                'description' => 'Comprehensive analysis of your website\'s current performance, user behavior, and conversion barriers.'
            ),
            array(
                'number' => '2',
                'title' => 'Strategy & Design',
                'description' => 'Create conversion-focused wireframes and designs based on user psychology and best practices.'
            ),
            array(
                'number' => '3',
                'title' => 'Development & Testing',
                'description' => 'Build optimized pages with A/B testing frameworks to validate improvements.'
            ),
            array(
                'number' => '4',
                'title' => 'Monitor & Optimize',
                'description' => 'Continuously track performance and implement data-driven improvements.'
            )
        );
    }

    // Conversion Elements
    $elements_title = get_post_meta($post->ID, '_high_converting_website_elements_title', true) ?: 'Key Conversion Elements We Optimize';
    $elements = get_post_meta($post->ID, '_high_converting_website_elements', true);
    if (empty($elements)) {
        $elements = array(
            array(
                'title' => 'Value Propositions',
                'description' => 'Clear, compelling messaging that communicates your unique value and benefits.',
                'features' => array(
                    'Headline optimization',
                    'Benefit-focused copy',
                    'Social proof integration',
                    'Risk reversal strategies'
                )
            ),
            array(
                'title' => 'Call-to-Action (CTA)',
                'description' => 'Strategic placement and design of CTAs that guide users toward conversion.',
                'features' => array(
                    'CTA button optimization',
                    'Action-oriented copy',
                    'Strategic placement',
                    'Color and contrast testing'
                )
            ),
            array(
                'title' => 'Trust Signals',
                'description' => 'Elements that build credibility and reduce purchase anxiety.',
                'features' => array(
                    'Customer testimonials',
                    'Security badges',
                    'Money-back guarantees',
                    'Industry certifications'
                )
            ),
            array(
                'title' => 'User Experience',
                'description' => 'Smooth, intuitive navigation and user flow optimization.',
                'features' => array(
                    'Navigation simplification',
                    'Form optimization',
                    'Page loading speed',
                    'Mobile responsiveness'
                )
            )
        );
    }

    // Website Types
    $types_title = get_post_meta($post->ID, '_high_converting_website_types_title', true) ?: 'Website Optimization by Type';
    $types = get_post_meta($post->ID, '_high_converting_website_types', true);
    if (empty($types)) {
        $types = array(
            array(
                'title' => 'Lead Generation Websites',
                'features' => array(
                    'Lead magnet optimization',
                    'Contact form optimization',
                    'Landing page creation',
                    'CRM integration'
                ),
                'results' => 'Average: 200% lead increase'
            ),
            array(
                'title' => 'E-commerce Websites',
                'features' => array(
                    'Product page optimization',
                    'Checkout flow improvement',
                    'Payment gateway optimization',
                    'Inventory management'
                ),
                'results' => 'Average: 150% sales increase'
            ),
            array(
                'title' => 'Service-Based Websites',
                'features' => array(
                    'Service page optimization',
                    'Portfolio showcasing',
                    'Booking system integration',
                    'Client testimonials'
                ),
                'results' => 'Average: 180% inquiry increase'
            )
        );
    }

    // Conversion Tools
    $tools_title = get_post_meta($post->ID, '_high_converting_website_tools_title', true) ?: 'Conversion Optimization Tools';
    $tools = get_post_meta($post->ID, '_high_converting_website_tools', true);
    if (empty($tools)) {
        $tools = array(
            array(
                'title' => 'Analytics & Testing',
                'items' => array(
                    'Google Analytics 4',
                    'Google Optimize',
                    'Hotjar heatmaps',
                    'Crazy Egg testing'
                )
            ),
            array(
                'title' => 'Performance Monitoring',
                'items' => array(
                    'PageSpeed Insights',
                    'GTmetrix analysis',
                    'Core Web Vitals',
                    'Mobile-friendly testing'
                )
            ),
            array(
                'title' => 'User Experience',
                'items' => array(
                    'User session recordings',
                    'Click tracking analysis',
                    'Form analytics',
                    'Conversion funnel analysis'
                )
            )
        );
    }

    // Testimonial (no image)
    $testimonial_quote = get_post_meta($post->ID, '_high_converting_website_testimonial_quote', true) ?: 'The website redesign Aimpro Digital delivered exceeded all expectations. Our conversion rate increased by 280% and our online sales have tripled. The user experience is now seamless and professional.';
    $testimonial_name = get_post_meta($post->ID, '_high_converting_website_testimonial_name', true) ?: 'Lisa Thompson';
    $testimonial_position = get_post_meta($post->ID, '_high_converting_website_testimonial_position', true) ?: 'Owner, FlexiFit Online';
    $testimonial_company = get_post_meta($post->ID, '_high_converting_website_testimonial_company', true) ?: 'E-commerce Fitness Retailer';

    // CTA
    $cta_title = get_post_meta($post->ID, '_high_converting_website_cta_title', true) ?: 'Ready to Build a High-Converting Website?';
    $cta_subtitle = get_post_meta($post->ID, '_high_converting_website_cta_subtitle', true) ?: 'Let\'s create a website that not only looks great but converts visitors into customers at a higher rate.';
    $cta_primary_text = get_post_meta($post->ID, '_high_converting_website_cta_primary_text', true) ?: 'Get Free Website Audit';
    $cta_primary_url = get_post_meta($post->ID, '_high_converting_website_cta_primary_url', true) ?: '/contact';
    $cta_secondary_text = get_post_meta($post->ID, '_high_converting_website_cta_secondary_text', true) ?: 'View Website Success Stories';
    $cta_secondary_url = get_post_meta($post->ID, '_high_converting_website_cta_secondary_url', true) ?: '/case-studies';
    $cta_benefits = get_post_meta($post->ID, '_high_converting_website_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '✓ Conversion-focused design',
            '✓ Mobile optimization included',
            '✓ A/B testing setup'
        );
    }
    ?>

    <div class="high-converting-website-meta-box">
        <style>
            .high-converting-website-meta-box .form-section {
                margin-bottom: 20px;
                padding-bottom: 20px;
                border-bottom: 1px solid #ddd;
            }
            .high-converting-website-meta-box h3 {
                margin-top: 0;
                padding: 10px;
                background-color: #f5f5f5;
                border-left: 4px solid #0073aa;
            }
            .high-converting-website-meta-box table {
                width: 100%;
                border-collapse: collapse;
            }
            .high-converting-website-meta-box th {
                text-align: left;
                padding: 15px 10px 5px 0;
                width: 20%;
                vertical-align: top;
            }
            .high-converting-website-meta-box td {
                padding: 15px 0 5px 0;
                width: 80%;
            }
            .high-converting-website-meta-box input[type="text"], 
            .high-converting-website-meta-box textarea {
                width: 100%;
            }
            .high-converting-website-meta-box textarea {
                min-height: 60px;
            }
            .high-converting-website-meta-box .repeater {
                margin-bottom: 15px;
            }
            .high-converting-website-meta-box .repeater-item {
                background: #f9f9f9;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ddd;
                position: relative;
            }
            .high-converting-website-meta-box .remove-item {
                position: absolute;
                top: 5px;
                right: 5px;
                color: #a00;
                cursor: pointer;
            }
            .high-converting-website-meta-box .add-item {
                margin-top: 10px;
            }
            .high-converting-website-meta-box .item-fields {
                margin-top: 10px;
            }
            .high-converting-website-meta-box .repeater-label {
                font-weight: bold;
                margin-bottom: 5px;
                display: block;
            }
            .high-converting-website-meta-box .nested-repeater {
                margin-left: 20px;
                margin-top: 10px;
            }
            .high-converting-website-meta-box .field-description {
                font-style: italic;
                color: #666;
                font-size: 0.9em;
            }
        </style>

        <!-- Page Header Section -->
        <div class="form-section">
            <h3>Page Header</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_header_title">Page Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_header_title" name="high_converting_website_header_title" value="<?php echo esc_attr($header_title); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_header_subtitle">Page Subtitle</label></th>
                    <td>
                        <textarea id="high_converting_website_header_subtitle" name="high_converting_website_header_subtitle"><?php echo esc_textarea($header_subtitle); ?></textarea>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Solution Overview Section -->
        <div class="form-section">
            <h3>Solution Overview</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_overview_title">Overview Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_overview_title" name="high_converting_website_overview_title" value="<?php echo esc_attr($overview_title); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_overview_content">Overview Content</label></th>
                    <td>
                        <textarea id="high_converting_website_overview_content" name="high_converting_website_overview_content"><?php echo esc_textarea($overview_content); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_challenges_title">Challenges Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_challenges_title" name="high_converting_website_challenges_title" value="<?php echo esc_attr($challenges_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="challenges_repeater">
                <div class="repeater-label">Challenges List</div>
                <?php if (!empty($challenges)) : ?>
                    <?php foreach ($challenges as $index => $challenge) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <input type="text" name="high_converting_website_challenges[]" value="<?php echo esc_attr($challenge); ?>" placeholder="Enter a challenge..." />
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <input type="text" name="high_converting_website_challenges[]" value="" placeholder="Enter a challenge..." />
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-item">Add Challenge</button>
            </div>
        </div>

        <!-- Website Conversion Services Section -->
        <div class="form-section">
            <h3>Website Conversion Services</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_services_title">Services Section Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_services_title" name="high_converting_website_services_title" value="<?php echo esc_attr($services_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="services_repeater">
                <div class="repeater-label">Services</div>
                <?php if (!empty($services)) : ?>
                    <?php foreach ($services as $index => $service) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <div class="item-fields">
                                <p>
                                    <label class="repeater-label">Service Title</label>
                                    <input type="text" name="high_converting_website_services[<?php echo $index; ?>][title]" value="<?php echo esc_attr($service['title']); ?>" placeholder="Service title..." />
                                </p>
                                <p>
                                    <label class="repeater-label">Service Description</label>
                                    <textarea name="high_converting_website_services[<?php echo $index; ?>][description]" placeholder="Service description..."><?php echo esc_textarea($service['description']); ?></textarea>
                                </p>
                                
                                <div class="nested-repeater">
                                    <label class="repeater-label">Service Features</label>
                                    <?php foreach ($service['features'] as $feature_index => $feature) : ?>
                                        <div class="repeater-item">
                                            <span class="remove-item">×</span>
                                            <input type="text" name="high_converting_website_services[<?php echo $index; ?>][features][]" value="<?php echo esc_attr($feature); ?>" placeholder="Feature..." />
                                        </div>
                                    <?php endforeach; ?>
                                    <button type="button" class="button add-nested-item" data-parent="<?php echo $index; ?>">Add Feature</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <div class="item-fields">
                            <p>
                                <label class="repeater-label">Service Title</label>
                                <input type="text" name="high_converting_website_services[0][title]" value="" placeholder="Service title..." />
                            </p>
                            <p>
                                <label class="repeater-label">Service Description</label>
                                <textarea name="high_converting_website_services[0][description]" placeholder="Service description..."></textarea>
                            </p>
                            
                            <div class="nested-repeater">
                                <label class="repeater-label">Service Features</label>
                                <div class="repeater-item">
                                    <span class="remove-item">×</span>
                                    <input type="text" name="high_converting_website_services[0][features][]" value="" placeholder="Feature..." />
                                </div>
                                <button type="button" class="button add-nested-item" data-parent="0">Add Feature</button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-service-item">Add Service</button>
            </div>
        </div>

        <!-- Case Study Section -->
        <div class="form-section">
            <h3>Case Study Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_case_study_label">Case Study Label</label></th>
                    <td>
                        <input type="text" id="high_converting_website_case_study_label" name="high_converting_website_case_study_label" value="<?php echo esc_attr($case_study_label); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_study_title">Case Study Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_case_study_title" name="high_converting_website_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_study_content">Case Study Content</label></th>
                    <td>
                        <textarea id="high_converting_website_case_study_content" name="high_converting_website_case_study_content"><?php echo esc_textarea($case_study_content); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_study_challenge_title">Challenge Section Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_case_study_challenge_title" name="high_converting_website_case_study_challenge_title" value="<?php echo esc_attr($case_study_challenge_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="case_challenges_repeater">
                <div class="repeater-label">Case Study Challenges</div>
                <?php if (!empty($case_challenges)) : ?>
                    <?php foreach ($case_challenges as $index => $challenge) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <input type="text" name="high_converting_website_case_study_challenges[]" value="<?php echo esc_attr($challenge); ?>" placeholder="Enter a case study challenge..." />
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <input type="text" name="high_converting_website_case_study_challenges[]" value="" placeholder="Enter a case study challenge..." />
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-item">Add Challenge</button>
            </div>

            <table>
                <tr>
                    <th><label for="high_converting_website_case_study_solution_title">Solution Section Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_case_study_solution_title" name="high_converting_website_case_study_solution_title" value="<?php echo esc_attr($case_study_solution_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="case_solutions_repeater">
                <div class="repeater-label">Case Study Solutions</div>
                <?php if (!empty($case_solutions)) : ?>
                    <?php foreach ($case_solutions as $index => $solution) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <input type="text" name="high_converting_website_case_study_solutions[]" value="<?php echo esc_attr($solution); ?>" placeholder="Enter a case study solution..." />
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <input type="text" name="high_converting_website_case_study_solutions[]" value="" placeholder="Enter a case study solution..." />
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-item">Add Solution</button>
            </div>
        </div>

        <!-- Process Section -->
        <div class="form-section">
            <h3>Process Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_process_title">Process Section Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_process_title" name="high_converting_website_process_title" value="<?php echo esc_attr($process_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="process_steps_repeater">
                <div class="repeater-label">Process Steps</div>
                <?php if (!empty($process_steps)) : ?>
                    <?php foreach ($process_steps as $index => $step) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <div class="item-fields">
                                <p>
                                    <label class="repeater-label">Step Number</label>
                                    <input type="text" name="high_converting_website_process_steps[<?php echo $index; ?>][number]" value="<?php echo esc_attr($step['number']); ?>" placeholder="e.g., 1" />
                                </p>
                                <p>
                                    <label class="repeater-label">Step Title</label>
                                    <input type="text" name="high_converting_website_process_steps[<?php echo $index; ?>][title]" value="<?php echo esc_attr($step['title']); ?>" placeholder="Step title..." />
                                </p>
                                <p>
                                    <label class="repeater-label">Step Description</label>
                                    <textarea name="high_converting_website_process_steps[<?php echo $index; ?>][description]" placeholder="Step description..."><?php echo esc_textarea($step['description']); ?></textarea>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <div class="item-fields">
                            <p>
                                <label class="repeater-label">Step Number</label>
                                <input type="text" name="high_converting_website_process_steps[0][number]" value="" placeholder="e.g., 1" />
                            </p>
                            <p>
                                <label class="repeater-label">Step Title</label>
                                <input type="text" name="high_converting_website_process_steps[0][title]" value="" placeholder="Step title..." />
                            </p>
                            <p>
                                <label class="repeater-label">Step Description</label>
                                <textarea name="high_converting_website_process_steps[0][description]" placeholder="Step description..."></textarea>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-process-step">Add Process Step</button>
            </div>
        </div>

        <!-- Conversion Elements Section -->
        <div class="form-section">
            <h3>Conversion Elements Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_elements_title">Elements Section Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_elements_title" name="high_converting_website_elements_title" value="<?php echo esc_attr($elements_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="elements_repeater">
                <div class="repeater-label">Conversion Elements</div>
                <?php if (!empty($elements)) : ?>
                    <?php foreach ($elements as $index => $element) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <div class="item-fields">
                                <p>
                                    <label class="repeater-label">Element Title</label>
                                    <input type="text" name="high_converting_website_elements[<?php echo $index; ?>][title]" value="<?php echo esc_attr($element['title']); ?>" placeholder="Element title..." />
                                </p>
                                <p>
                                    <label class="repeater-label">Element Description</label>
                                    <textarea name="high_converting_website_elements[<?php echo $index; ?>][description]" placeholder="Element description..."><?php echo esc_textarea($element['description']); ?></textarea>
                                </p>
                                
                                <div class="nested-repeater">
                                    <label class="repeater-label">Element Features</label>
                                    <?php foreach ($element['features'] as $feature_index => $feature) : ?>
                                        <div class="repeater-item">
                                            <span class="remove-item">×</span>
                                            <input type="text" name="high_converting_website_elements[<?php echo $index; ?>][features][]" value="<?php echo esc_attr($feature); ?>" placeholder="Feature..." />
                                        </div>
                                    <?php endforeach; ?>
                                    <button type="button" class="button add-element-feature" data-parent="<?php echo $index; ?>">Add Feature</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <div class="item-fields">
                            <p>
                                <label class="repeater-label">Element Title</label>
                                <input type="text" name="high_converting_website_elements[0][title]" value="" placeholder="Element title..." />
                            </p>
                            <p>
                                <label class="repeater-label">Element Description</label>
                                <textarea name="high_converting_website_elements[0][description]" placeholder="Element description..."></textarea>
                            </p>
                            
                            <div class="nested-repeater">
                                <label class="repeater-label">Element Features</label>
                                <div class="repeater-item">
                                    <span class="remove-item">×</span>
                                    <input type="text" name="high_converting_website_elements[0][features][]" value="" placeholder="Feature..." />
                                </div>
                                <button type="button" class="button add-element-feature" data-parent="0">Add Feature</button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-element-item">Add Element</button>
            </div>
        </div>

        <!-- Website Types Section -->
        <div class="form-section">
            <h3>Website Types Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_types_title">Types Section Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_types_title" name="high_converting_website_types_title" value="<?php echo esc_attr($types_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="types_repeater">
                <div class="repeater-label">Website Types</div>
                <?php if (!empty($types)) : ?>
                    <?php foreach ($types as $index => $type) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <div class="item-fields">
                                <p>
                                    <label class="repeater-label">Website Type Title</label>
                                    <input type="text" name="high_converting_website_types[<?php echo $index; ?>][title]" value="<?php echo esc_attr($type['title']); ?>" placeholder="Type title..." />
                                </p>
                                <p>
                                    <label class="repeater-label">Results Text</label>
                                    <input type="text" name="high_converting_website_types[<?php echo $index; ?>][results]" value="<?php echo esc_attr($type['results']); ?>" placeholder="e.g., Average: 200% lead increase" />
                                </p>
                                
                                <div class="nested-repeater">
                                    <label class="repeater-label">Type Features</label>
                                    <?php foreach ($type['features'] as $feature_index => $feature) : ?>
                                        <div class="repeater-item">
                                            <span class="remove-item">×</span>
                                            <input type="text" name="high_converting_website_types[<?php echo $index; ?>][features][]" value="<?php echo esc_attr($feature); ?>" placeholder="Feature..." />
                                        </div>
                                    <?php endforeach; ?>
                                    <button type="button" class="button add-type-feature" data-parent="<?php echo $index; ?>">Add Feature</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <div class="item-fields">
                            <p>
                                <label class="repeater-label">Website Type Title</label>
                                <input type="text" name="high_converting_website_types[0][title]" value="" placeholder="Type title..." />
                            </p>
                            <p>
                                <label class="repeater-label">Results Text</label>
                                <input type="text" name="high_converting_website_types[0][results]" value="" placeholder="e.g., Average: 200% lead increase" />
                            </p>
                            
                            <div class="nested-repeater">
                                <label class="repeater-label">Type Features</label>
                                <div class="repeater-item">
                                    <span class="remove-item">×</span>
                                    <input type="text" name="high_converting_website_types[0][features][]" value="" placeholder="Feature..." />
                                </div>
                                <button type="button" class="button add-type-feature" data-parent="0">Add Feature</button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-type-item">Add Website Type</button>
            </div>
        </div>

        <!-- Conversion Tools Section -->
        <div class="form-section">
            <h3>Conversion Tools Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_tools_title">Tools Section Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_tools_title" name="high_converting_website_tools_title" value="<?php echo esc_attr($tools_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="tools_repeater">
                <div class="repeater-label">Tool Categories</div>
                <?php if (!empty($tools)) : ?>
                    <?php foreach ($tools as $index => $tool) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <div class="item-fields">
                                <p>
                                    <label class="repeater-label">Tool Category Title</label>
                                    <input type="text" name="high_converting_website_tools[<?php echo $index; ?>][title]" value="<?php echo esc_attr($tool['title']); ?>" placeholder="Category title..." />
                                </p>
                                
                                <div class="nested-repeater">
                                    <label class="repeater-label">Tool Items</label>
                                    <?php foreach ($tool['items'] as $item_index => $item) : ?>
                                        <div class="repeater-item">
                                            <span class="remove-item">×</span>
                                            <input type="text" name="high_converting_website_tools[<?php echo $index; ?>][items][]" value="<?php echo esc_attr($item); ?>" placeholder="Tool item..." />
                                        </div>
                                    <?php endforeach; ?>
                                    <button type="button" class="button add-tool-item" data-parent="<?php echo $index; ?>">Add Item</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <div class="item-fields">
                            <p>
                                <label class="repeater-label">Tool Category Title</label>
                                <input type="text" name="high_converting_website_tools[0][title]" value="" placeholder="Category title..." />
                            </p>
                            
                            <div class="nested-repeater">
                                <label class="repeater-label">Tool Items</label>
                                <div class="repeater-item">
                                    <span class="remove-item">×</span>
                                    <input type="text" name="high_converting_website_tools[0][items][]" value="" placeholder="Tool item..." />
                                </div>
                                <button type="button" class="button add-tool-item" data-parent="0">Add Item</button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-tool-category">Add Tool Category</button>
            </div>
        </div>

        <!-- Testimonial Section (No Image) -->
        <div class="form-section">
            <h3>Testimonial Section (No Image)</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_testimonial_quote">Testimonial Quote</label></th>
                    <td>
                        <textarea id="high_converting_website_testimonial_quote" 
                              name="high_converting_website_testimonial_quote"
                              placeholder="Customer testimonial quote..."><?php echo esc_textarea($testimonial_quote); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_testimonial_name">Customer Name</label></th>
                    <td>
                        <input type="text" 
                           id="high_converting_website_testimonial_name" 
                           name="high_converting_website_testimonial_name" 
                           value="<?php echo esc_attr($testimonial_name); ?>"
                           placeholder="Customer name..." />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_testimonial_position">Customer Position</label></th>
                    <td>
                        <input type="text" 
                           id="high_converting_website_testimonial_position" 
                           name="high_converting_website_testimonial_position" 
                           value="<?php echo esc_attr($testimonial_position); ?>"
                           placeholder="Customer position..." />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_testimonial_company">Customer Company</label></th>
                    <td>
                        <input type="text" 
                           id="high_converting_website_testimonial_company" 
                           name="high_converting_website_testimonial_company" 
                           value="<?php echo esc_attr($testimonial_company); ?>"
                           placeholder="Customer company..." />
                    </td>
                </tr>
            </table>
        </div>

        <!-- CTA Section -->
        <div class="form-section">
            <h3>Call to Action Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_cta_title">CTA Title</label></th>
                    <td>
                        <input type="text" id="high_converting_website_cta_title" name="high_converting_website_cta_title" value="<?php echo esc_attr($cta_title); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_cta_subtitle">CTA Subtitle</label></th>
                    <td>
                        <textarea id="high_converting_website_cta_subtitle" name="high_converting_website_cta_subtitle"><?php echo esc_textarea($cta_subtitle); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_cta_primary_text">Primary Button Text</label></th>
                    <td>
                        <input type="text" id="high_converting_website_cta_primary_text" name="high_converting_website_cta_primary_text" value="<?php echo esc_attr($cta_primary_text); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_cta_primary_url">Primary Button URL</label></th>
                    <td>
                        <input type="text" id="high_converting_website_cta_primary_url" name="high_converting_website_cta_primary_url" value="<?php echo esc_attr($cta_primary_url); ?>" />
                        <span class="field-description">Enter the path (e.g., /contact)</span>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_cta_secondary_text">Secondary Button Text</label></th>
                    <td>
                        <input type="text" id="high_converting_website_cta_secondary_text" name="high_converting_website_cta_secondary_text" value="<?php echo esc_attr($cta_secondary_text); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_cta_secondary_url">Secondary Button URL</label></th>
                    <td>
                        <input type="text" id="high_converting_website_cta_secondary_url" name="high_converting_website_cta_secondary_url" value="<?php echo esc_attr($cta_secondary_url); ?>" />
                        <span class="field-description">Enter the path (e.g., /case-studies)</span>
                    </td>
                </tr>
            </table>

            <div class="repeater" id="cta_benefits_repeater">
                <div class="repeater-label">CTA Benefits</div>
                <?php if (!empty($cta_benefits)) : ?>
                    <?php foreach ($cta_benefits as $index => $benefit) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <input type="text" name="high_converting_website_cta_benefits[]" value="<?php echo esc_attr($benefit); ?>" placeholder="Enter a CTA benefit..." />
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <input type="text" name="high_converting_website_cta_benefits[]" value="" placeholder="Enter a CTA benefit..." />
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-item">Add Benefit</button>
            </div>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        // General repeater functionality
        $('.high-converting-website-meta-box').on('click', '.add-item', function() {
            var $repeater = $(this).closest('.repeater');
            var $lastItem = $repeater.find('.repeater-item:last');
            var $newItem = $lastItem.clone();
            
            // Clear values
            $newItem.find('input[type="text"], textarea').val('');
            
            $lastItem.after($newItem);
        });
        
        // Remove item functionality
        $('.high-converting-website-meta-box').on('click', '.remove-item', function() {
            var $repeater = $(this).closest('.repeater');
            if ($repeater.find('.repeater-item').length > 1) {
                $(this).closest('.repeater-item').remove();
            } else {
                $(this).closest('.repeater-item').find('input[type="text"], textarea').val('');
            }
        });
        
        // Add service item
        $('.high-converting-website-meta-box').on('click', '.add-service-item', function() {
            var $repeater = $('#services_repeater');
            var $items = $repeater.find('.repeater-item');
            var newIndex = $items.length;
            
            var $newItem = $items.first().clone();
            
            // Update indexes and clear values
            $newItem.find('input, textarea').each(function() {
                var name = $(this).attr('name');
                if (name) {
                    name = name.replace(/\[\d+\]/, '[' + newIndex + ']');
                    $(this).attr('name', name).val('');
                }
            });
            
            // Update data-parent attribute
            $newItem.find('.add-nested-item').attr('data-parent', newIndex);
            
            $items.last().after($newItem);
        });
        
        // Add nested item (features)
        $('.high-converting-website-meta-box').on('click', '.add-nested-item', function() {
            var $nestedRepeater = $(this).closest('.nested-repeater');
            var $lastItem = $nestedRepeater.find('.repeater-item:last');
            var $newItem = $lastItem.clone();
            
            // Clear value
            $newItem.find('input').val('');
            
            $lastItem.after($newItem);
        });
        
        // Add process step
        $('.high-converting-website-meta-box').on('click', '.add-process-step', function() {
            var $repeater = $('#process_steps_repeater');
            var $items = $repeater.find('.repeater-item');
            var newIndex = $items.length;
            
            var $newItem = $items.first().clone();
            
            // Update indexes and clear values
            $newItem.find('input, textarea').each(function() {
                var name = $(this).attr('name');
                if (name) {
                    name = name.replace(/\[\d+\]/, '[' + newIndex + ']');
                    $(this).attr('name', name).val('');
                }
            });
            
            $items.last().after($newItem);
        });
        
        // Add element item
        $('.high-converting-website-meta-box').on('click', '.add-element-item', function() {
            var $repeater = $('#elements_repeater');
            var $items = $repeater.find('.repeater-item');
            var newIndex = $items.length;
            
            var $newItem = $items.first().clone();
            
            // Update indexes and clear values
            $newItem.find('input, textarea').each(function() {
                var name = $(this).attr('name');
                if (name) {
                    name = name.replace(/\[\d+\]/, '[' + newIndex + ']');
                    $(this).attr('name', name).val('');
                }
            });
            
            // Update data-parent attribute
            $newItem.find('.add-element-feature').attr('data-parent', newIndex);
            
            $items.last().after($newItem);
        });
        
        // Add element feature
        $('.high-converting-website-meta-box').on('click', '.add-element-feature', function() {
            var $nestedRepeater = $(this).closest('.nested-repeater');
            var $lastItem = $nestedRepeater.find('.repeater-item:last');
            var $newItem = $lastItem.clone();
            
            // Clear value
            $newItem.find('input').val('');
            
            $lastItem.after($newItem);
        });
        
        // Add website type
        $('.high-converting-website-meta-box').on('click', '.add-type-item', function() {
            var $repeater = $('#types_repeater');
            var $items = $repeater.find('.repeater-item');
            var newIndex = $items.length;
            
            var $newItem = $items.first().clone();
            
            // Update indexes and clear values
            $newItem.find('input, textarea').each(function() {
                var name = $(this).attr('name');
                if (name) {
                    name = name.replace(/\[\d+\]/, '[' + newIndex + ']');
                    $(this).attr('name', name).val('');
                }
            });
            
            // Update data-parent attribute
            $newItem.find('.add-type-feature').attr('data-parent', newIndex);
            
            $items.last().after($newItem);
        });
        
        // Add type feature
        $('.high-converting-website-meta-box').on('click', '.add-type-feature', function() {
            var $nestedRepeater = $(this).closest('.nested-repeater');
            var $lastItem = $nestedRepeater.find('.repeater-item:last');
            var $newItem = $lastItem.clone();
            
            // Clear value
            $newItem.find('input').val('');
            
            $lastItem.after($newItem);
        });
        
        // Add tool category
        $('.high-converting-website-meta-box').on('click', '.add-tool-category', function() {
            var $repeater = $('#tools_repeater');
            var $items = $repeater.find('.repeater-item');
            var newIndex = $items.length;
            
            var $newItem = $items.first().clone();
            
            // Update indexes and clear values
            $newItem.find('input, textarea').each(function() {
                var name = $(this).attr('name');
                if (name) {
                    name = name.replace(/\[\d+\]/, '[' + newIndex + ']');
                    $(this).attr('name', name).val('');
                }
            });
            
            // Update data-parent attribute
            $newItem.find('.add-tool-item').attr('data-parent', newIndex);
            
            $items.last().after($newItem);
        });
        
        // Add tool item
        $('.high-converting-website-meta-box').on('click', '.add-tool-item', function() {
            var $nestedRepeater = $(this).closest('.nested-repeater');
            var $lastItem = $nestedRepeater.find('.repeater-item:last');
            var $newItem = $lastItem.clone();
            
            // Clear value
            $newItem.find('input').val('');
            
            $lastItem.after($newItem);
        });
    });
    </script>
<?php
}

function sanitize_high_converting_website_meta_value($field, $value) {
    if (in_array($field, [
        'high_converting_website_challenges',
        'high_converting_website_case_study_challenges',
        'high_converting_website_case_study_solutions',
        'high_converting_website_cta_benefits'
    ])) {
        // For simple arrays of text
        return array_map('sanitize_text_field', $value);
    } elseif ($field === 'high_converting_website_services') {
        // For complex arrays with nested arrays
        foreach ($value as $key => $service) {
            $value[$key]['title'] = sanitize_text_field($service['title']);
            $value[$key]['description'] = sanitize_textarea_field($service['description']);
            if (isset($service['features']) && is_array($service['features'])) {
                $value[$key]['features'] = array_map('sanitize_text_field', $service['features']);
            } else {
                $value[$key]['features'] = array();
            }
        }
        return $value;
    } elseif ($field === 'high_converting_website_process_steps') {
        // For process steps array
        foreach ($value as $key => $step) {
            $value[$key]['number'] = sanitize_text_field($step['number']);
            $value[$key]['title'] = sanitize_text_field($step['title']);
            $value[$key]['description'] = sanitize_textarea_field($step['description']);
        }
        return $value;
    } elseif ($field === 'high_converting_website_elements') {
        // For elements array
        foreach ($value as $key => $element) {
            $value[$key]['title'] = sanitize_text_field($element['title']);
            $value[$key]['description'] = sanitize_textarea_field($element['description']);
            if (isset($element['features']) && is_array($element['features'])) {
                $value[$key]['features'] = array_map('sanitize_text_field', $element['features']);
            } else {
                $value[$key]['features'] = array();
            }
        }
        return $value;
    } elseif ($field === 'high_converting_website_types') {
        // For website types array
        foreach ($value as $key => $type) {
            $value[$key]['title'] = sanitize_text_field($type['title']);
            $value[$key]['results'] = sanitize_text_field($type['results']);
            if (isset($type['features']) && is_array($type['features'])) {
                $value[$key]['features'] = array_map('sanitize_text_field', $type['features']);
            } else {
                $value[$key]['features'] = array();
            }
        }
        return $value;
    } elseif ($field === 'high_converting_website_tools') {
        // For tools array
        foreach ($value as $key => $tool) {
            $value[$key]['title'] = sanitize_text_field($tool['title']);
            if (isset($tool['items']) && is_array($tool['items'])) {
                $value[$key]['items'] = array_map('sanitize_text_field', $tool['items']);
            } else {
                $value[$key]['items'] = array();
            }
        }
        return $value;
    } else {
        // For simple text fields
        if (strpos($field, '_content') !== false || 
            strpos($field, 'testimonial_quote') !== false || 
            strpos($field, 'subtitle') !== false) {
            return sanitize_textarea_field($value);
        }
        return sanitize_text_field($value);
    }
}

function save_high_converting_website_meta_box_data($post_id) {
    if (!isset($_POST['high_converting_website_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['high_converting_website_meta_box_nonce'], 'high_converting_website_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    }

    // Save all fields
    $fields = [
        'high_converting_website_header_title',
        'high_converting_website_header_subtitle',
        'high_converting_website_overview_title',
        'high_converting_website_overview_content',
        'high_converting_website_challenges_title',
        'high_converting_website_challenges',
        'high_converting_website_services_title',
        'high_converting_website_services',
        'high_converting_website_case_study_label',
        'high_converting_website_case_study_title',
        'high_converting_website_case_study_content',
        'high_converting_website_case_study_challenge_title',
        'high_converting_website_case_study_challenges',
        'high_converting_website_case_study_solution_title',
        'high_converting_website_case_study_solutions',
        'high_converting_website_process_title',
        'high_converting_website_process_steps',
        'high_converting_website_elements_title',
        'high_converting_website_elements',
        'high_converting_website_types_title',
        'high_converting_website_types',
        'high_converting_website_tools_title',
        'high_converting_website_tools',
        'high_converting_website_testimonial_quote',
        'high_converting_website_testimonial_name',
        'high_converting_website_testimonial_position',
        'high_converting_website_testimonial_company',
        'high_converting_website_cta_title',
        'high_converting_website_cta_subtitle',
        'high_converting_website_cta_primary_text',
        'high_converting_website_cta_primary_url',
        'high_converting_website_cta_secondary_text',
        'high_converting_website_cta_secondary_url',
        'high_converting_website_cta_benefits'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_high_converting_website_meta_value($field, $_POST[$field]));
        }
    }
}
add_action('save_post', 'save_high_converting_website_meta_box_data');
