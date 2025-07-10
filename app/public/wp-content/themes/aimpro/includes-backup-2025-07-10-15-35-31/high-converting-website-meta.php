<?php
// High-Converting Website Page Meta Fields

function add_high_converting_website_meta_boxes() {
    global $post;
    
    // Only add to pages with the high-converting-website template
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        $page_slug = $post->post_name;
        
        // Only register this meta box for the high-converting-website page
        if ($page_template === 'page-high-converting-website.php' || $page_slug === 'high-converting-website') {
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
}
add_action('add_meta_boxes', 'add_high_converting_website_meta_boxes', 11);

// Enqueue media uploader scripts
function high_converting_website_admin_enqueue_scripts($hook) {
    if ($hook == 'post.php' || $hook == 'post-new.php') {
        global $post;
        if (isset($post)) {
            $page_template = get_page_template_slug($post->ID);
            $page_slug = $post->post_name;
            
            if ($page_template === 'page-high-converting-website.php' || $page_slug === 'high-converting-website') {
                wp_enqueue_media();
            }
        }
    }
}
add_action('admin_enqueue_scripts', 'high_converting_website_admin_enqueue_scripts');

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
    $header_subtitle = get_post_meta($post->ID, '_high_converting_website_header_subtitle', true) ?: 'Create a website that turns visitors into customers with conversion-focused design and optimisation';    // Solution Overview
    $overview_title = get_post_meta($post->ID, '_high_converting_website_overview_title', true) ?: 'Transform Visitors Into Paying Customers';
    $overview_content = get_post_meta($post->ID, '_high_converting_website_overview_content', true) ?: 'Your website is your most powerful sales tool, working 24/7 to convert visitors into customers. Our data-driven approach to website design and optimisation focuses on user experience, conversion psychology, and performance to create websites that don\'t just look good�they deliver results.';
    $overview_image = get_post_meta($post->ID, '_high_converting_website_overview_image', true);
    
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
                    'User experience (UX) optimisation',
                    'Conversion psychology implementation',
                    'Visual hierarchy optimisation',
                    'Trust signal integration'
                )
            ),
            array(
                'title' => 'Landing Page optimisation',
                'description' => 'Create high-converting landing pages that maximise conversions from your marketing campaigns.',
                'features' => array(
                    'Campaign-specific landing pages',
                    'A/B testing implementation',
                    'Form optimisation',
                    'Lead capture optimisation'
                )
            ),
            array(
                'title' => 'E-commerce optimisation',
                'description' => 'optimise online stores to increase sales, reduce cart abandonment, and improve customer experience.',
                'features' => array(
                    'Product page optimisation',
                    'Checkout process streamlining',
                    'Cart abandonment recovery',
                    'Cross-sell and upsell optimisation'
                )
            ),
            array(
                'title' => 'Performance optimisation',
                'description' => 'Improve website speed and technical performance to reduce bounce rates and improve conversions.',
                'features' => array(
                    'Page speed optimisation',
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
    $process_title = get_post_meta($post->ID, '_high_converting_website_process_title', true) ?: 'Our Website optimisation Process';
    $process_steps = get_post_meta($post->ID, '_high_converting_website_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'number' => '1',
                'title' => 'Conversion Audit',
                'description' => 'Comprehensive analysis of your website\'s current performance, user behaviour, and conversion barriers.'
            ),
            array(
                'number' => '2',
                'title' => 'Strategy & Design',
                'description' => 'Create conversion-focused wireframes and designs based on user psychology and best practices.'
            ),
            array(
                'number' => '3',
                'title' => 'Development & Testing',
                'description' => 'Build optimised pages with A/B testing frameworks to validate improvements.'
            ),
            array(
                'number' => '4',
                'title' => 'Monitor & optimise',
                'description' => 'Continuously track performance and implement data-driven improvements.'
            )
        );
    }

    // Conversion Elements
    $elements_title = get_post_meta($post->ID, '_high_converting_website_elements_title', true) ?: 'Key Conversion Elements We optimise';
    $elements = get_post_meta($post->ID, '_high_converting_website_elements', true);
    if (empty($elements)) {
        $elements = array(
            array(
                'title' => 'Value Propositions',
                'description' => 'Clear, compelling messaging that communicates your unique value and benefits.',
                'features' => array(
                    'Headline optimisation',
                    'Benefit-focused copy',
                    'Social proof integration',
                    'Risk reversal strategies'
                )
            ),
            array(
                'title' => 'Call-to-Action (CTA)',
                'description' => 'Strategic placement and design of CTAs that guide users toward conversion.',
                'features' => array(
                    'CTA button optimisation',
                    'Action-oriented copy',
                    'Strategic placement',
                    'colour and contrast testing'
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
                'description' => 'Smooth, intuitive navigation and user flow optimisation.',
                'features' => array(
                    'Navigation simplification',
                    'Form optimisation',
                    'Page loading speed',
                    'Mobile responsiveness'
                )
            )
        );
    }

    // Website Types
    $types_title = get_post_meta($post->ID, '_high_converting_website_types_title', true) ?: 'Website optimisation by Type';
    $types = get_post_meta($post->ID, '_high_converting_website_types', true);
    if (empty($types)) {
        $types = array(
            array(
                'title' => 'Lead Generation Websites',
                'features' => array(
                    'Lead magnet optimisation',
                    'Contact form optimisation',
                    'Landing page creation',
                    'CRM integration'
                ),
                'results' => 'Average: 200% lead increase'
            ),
            array(
                'title' => 'E-commerce Websites',
                'features' => array(
                    'Product page optimisation',
                    'Checkout flow improvement',
                    'Payment gateway optimisation',
                    'Inventory management'
                ),
                'results' => 'Average: 150% sales increase'
            ),
            array(
                'title' => 'Service-Based Websites',
                'features' => array(
                    'Service page optimisation',
                    'Portfolio showcasing',
                    'Booking system integration',
                    'Client testimonials'
                ),
                'results' => 'Average: 180% inquiry increase'
            )
        );
    }

    // Conversion Tools
    $tools_title = get_post_meta($post->ID, '_high_converting_website_tools_title', true) ?: 'Conversion optimisation Tools';
    $tools = get_post_meta($post->ID, '_high_converting_website_tools', true);
    if (empty($tools)) {
        $tools = array(
            array(
                'title' => 'Analytics & Testing',
                'items' => array(
                    'Google Analytics 4',
                    'Google optimise',
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
            '? Conversion-focused design',
            '? Mobile optimisation included',
            '? A/B testing setup'
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
                background-colour: #f5f5f5;
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
            }            .high-converting-website-meta-box .field-description {
                font-style: italic;
                color: #666;
                font-size: 0.9em;
            }
            .high-converting-website-meta-box .image-upload-container {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }
            .high-converting-website-meta-box .image-preview {
                max-width: 200px;
                max-height: 150px;
                object-fit: cover;
                border: 1px solid #ddd;
                border-radius: 4px;
            }
            .high-converting-website-meta-box .upload-button,
            .high-converting-website-meta-box .remove-button {
                width: fit-content;
            }
        </style>

        <!-- Page Header Section -->
        <div class="form-section">
            <h3>Page Header</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_header_title">Page Title</label></th>
                    <td>
                        <?php wp_editor($header_title, 'high_converting_website_header_title', array(
                            'textarea_name' => 'high_converting_website_header_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_header_subtitle">Page Subtitle</label></th>
                    <td>
                        <?php wp_editor($header_subtitle, 'high_converting_website_header_subtitle', array(
                            'textarea_name' => 'high_converting_website_header_subtitle',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
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
                        <?php wp_editor($overview_title, 'high_converting_website_overview_title', array(
                            'textarea_name' => 'high_converting_website_overview_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>                <tr>
                    <th><label for="high_converting_website_overview_content">Overview Content</label></th>
                    <td>
                        <?php wp_editor($overview_content, 'high_converting_website_overview_content', array(
                            'textarea_name' => 'high_converting_website_overview_content',
                            'textarea_rows' => 8,
                            'teeny' => false,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_overview_image">Overview Image</label></th>
                    <td>
                        <input type="hidden" 
                               id="high_converting_website_overview_image" 
                               name="high_converting_website_overview_image" 
                               value="<?php echo esc_attr($overview_image); ?>" />
                        <button type="button" class="button upload-button" data-target="high_converting_website_overview_image">Upload Image</button>
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url(wp_get_attachment_url($overview_image)); ?>" class="image-preview" />
                            <button type="button" class="button remove-button" data-target="high_converting_website_overview_image">Remove</button>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_challenges_title">Challenges Title</label></th>
                    <td>
                        <?php wp_editor($challenges_title, 'high_converting_website_challenges_title', array(
                            'textarea_name' => 'high_converting_website_challenges_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>

            <!-- Individual Challenge Fields -->
            <table>
                <tr>
                    <th><label for="high_converting_website_challenge_1">Challenge 1</label></th>
                    <td>
                        <?php wp_editor(isset($challenges[0]) ? $challenges[0] : 'High bounce rates and low engagement', 'high_converting_website_challenge_1', array(
                            'textarea_name' => 'high_converting_website_challenge_1',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_challenge_2">Challenge 2</label></th>
                    <td>
                        <?php wp_editor(isset($challenges[1]) ? $challenges[1] : 'Poor mobile user experience', 'high_converting_website_challenge_2', array(
                            'textarea_name' => 'high_converting_website_challenge_2',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_challenge_3">Challenge 3</label></th>
                    <td>
                        <?php wp_editor(isset($challenges[2]) ? $challenges[2] : 'Unclear value propositions', 'high_converting_website_challenge_3', array(
                            'textarea_name' => 'high_converting_website_challenge_3',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_challenge_4">Challenge 4</label></th>
                    <td>
                        <?php wp_editor(isset($challenges[3]) ? $challenges[3] : 'Confusing navigation and user flow', 'high_converting_website_challenge_4', array(
                            'textarea_name' => 'high_converting_website_challenge_4',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_challenge_5">Challenge 5</label></th>
                    <td>
                        <?php wp_editor(isset($challenges[4]) ? $challenges[4] : 'Slow loading speeds', 'high_converting_website_challenge_5', array(
                            'textarea_name' => 'high_converting_website_challenge_5',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_challenge_6">Challenge 6</label></th>
                    <td>
                        <?php wp_editor(isset($challenges[5]) ? $challenges[5] : 'Weak calls-to-action', 'high_converting_website_challenge_6', array(
                            'textarea_name' => 'high_converting_website_challenge_6',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Website Conversion Services Section -->
        <div class="form-section">
            <h3>Website Conversion Services</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_services_title">Services Section Title</label></th>
                    <td>
                        <?php wp_editor($services_title, 'high_converting_website_services_title', array(
                            'textarea_name' => 'high_converting_website_services_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>

            <!-- Individual Service Fields -->
            <table>
                <!-- Service 1: Conversion-Focused Design -->
                <tr>
                    <th><label for="high_converting_website_service_1_title">Service 1 Title</label></th>
                    <td>
                        <?php wp_editor(isset($services[0]['title']) ? $services[0]['title'] : 'Conversion-Focused Design', 'high_converting_website_service_1_title', array(
                            'textarea_name' => 'high_converting_website_service_1_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_service_1_description">Service 1 Description</label></th>
                    <td>
                        <?php wp_editor(isset($services[0]['description']) ? $services[0]['description'] : 'Design websites with psychology-based elements that guide visitors toward taking action.', 'high_converting_website_service_1_description', array(
                            'textarea_name' => 'high_converting_website_service_1_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Service 2: Landing Page Optimisation -->
                <tr>
                    <th><label for="high_converting_website_service_2_title">Service 2 Title</label></th>
                    <td>
                        <?php wp_editor(isset($services[1]['title']) ? $services[1]['title'] : 'Landing Page Optimisation', 'high_converting_website_service_2_title', array(
                            'textarea_name' => 'high_converting_website_service_2_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_service_2_description">Service 2 Description</label></th>
                    <td>
                        <?php wp_editor(isset($services[1]['description']) ? $services[1]['description'] : 'Create high-converting landing pages that maximise conversions from your marketing campaigns.', 'high_converting_website_service_2_description', array(
                            'textarea_name' => 'high_converting_website_service_2_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Service 3: E-commerce Optimisation -->
                <tr>
                    <th><label for="high_converting_website_service_3_title">Service 3 Title</label></th>
                    <td>
                        <?php wp_editor(isset($services[2]['title']) ? $services[2]['title'] : 'E-commerce Optimisation', 'high_converting_website_service_3_title', array(
                            'textarea_name' => 'high_converting_website_service_3_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_service_3_description">Service 3 Description</label></th>
                    <td>
                        <?php wp_editor(isset($services[2]['description']) ? $services[2]['description'] : 'Optimise online stores to increase sales, reduce cart abandonment, and improve customer experience.', 'high_converting_website_service_3_description', array(
                            'textarea_name' => 'high_converting_website_service_3_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Service 4: Performance Optimisation -->
                <tr>
                    <th><label for="high_converting_website_service_4_title">Service 4 Title</label></th>
                    <td>
                        <?php wp_editor(isset($services[3]['title']) ? $services[3]['title'] : 'Performance Optimisation', 'high_converting_website_service_4_title', array(
                            'textarea_name' => 'high_converting_website_service_4_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_service_4_description">Service 4 Description</label></th>
                    <td>
                        <?php wp_editor(isset($services[3]['description']) ? $services[3]['description'] : 'Improve website speed and technical performance to reduce bounce rates and improve conversions.', 'high_converting_website_service_4_description', array(
                            'textarea_name' => 'high_converting_website_service_4_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Case Study Section -->
        <div class="form-section">
            <h3>Case Study Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_case_study_label">Case Study Label</label></th>
                    <td>
                        <?php wp_editor($case_study_label, 'high_converting_website_case_study_label', array(
                            'textarea_name' => 'high_converting_website_case_study_label',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_study_title">Case Study Title</label></th>
                    <td>
                        <?php wp_editor($case_study_title, 'high_converting_website_case_study_title', array(
                            'textarea_name' => 'high_converting_website_case_study_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_study_content">Case Study Content</label></th>
                    <td>
                        <?php wp_editor($case_study_content, 'high_converting_website_case_study_content', array(
                            'textarea_name' => 'high_converting_website_case_study_content',
                            'textarea_rows' => 6,
                            'teeny' => false,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_study_challenge_title">Challenge Section Title</label></th>
                    <td>
                        <?php wp_editor($case_study_challenge_title, 'high_converting_website_case_study_challenge_title', array(
                            'textarea_name' => 'high_converting_website_case_study_challenge_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>

            <!-- Individual Case Study Challenge Fields -->
            <table>
                <tr>
                    <th><label for="high_converting_website_case_challenge_1">Case Challenge 1</label></th>
                    <td>
                        <?php wp_editor(isset($case_challenges[0]) ? $case_challenges[0] : '1.2% conversion rate on 50,000 monthly visitors', 'high_converting_website_case_challenge_1', array(
                            'textarea_name' => 'high_converting_website_case_challenge_1',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_challenge_2">Case Challenge 2</label></th>
                    <td>
                        <?php wp_editor(isset($case_challenges[1]) ? $case_challenges[1] : '75% cart abandonment rate', 'high_converting_website_case_challenge_2', array(
                            'textarea_name' => 'high_converting_website_case_challenge_2',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_challenge_3">Case Challenge 3</label></th>
                    <td>
                        <?php wp_editor(isset($case_challenges[2]) ? $case_challenges[2] : 'Poor mobile user experience', 'high_converting_website_case_challenge_3', array(
                            'textarea_name' => 'high_converting_website_case_challenge_3',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_challenge_4">Case Challenge 4</label></th>
                    <td>
                        <?php wp_editor(isset($case_challenges[3]) ? $case_challenges[3] : 'Unclear product benefits and value props', 'high_converting_website_case_challenge_4', array(
                            'textarea_name' => 'high_converting_website_case_challenge_4',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>

            <table>
                <tr>
                    <th><label for="high_converting_website_case_study_solution_title">Solution Section Title</label></th>
                    <td>
                        <?php wp_editor($case_study_solution_title, 'high_converting_website_case_study_solution_title', array(
                            'textarea_name' => 'high_converting_website_case_study_solution_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>

            <!-- Individual Case Study Solution Fields -->
            <table>
                <tr>
                    <th><label for="high_converting_website_case_solution_1">Case Solution 1</label></th>
                    <td>
                        <?php wp_editor(isset($case_solutions[0]) ? $case_solutions[0] : 'Complete website redesign with conversion focus', 'high_converting_website_case_solution_1', array(
                            'textarea_name' => 'high_converting_website_case_solution_1',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_solution_2">Case Solution 2</label></th>
                    <td>
                        <?php wp_editor(isset($case_solutions[1]) ? $case_solutions[1] : 'Streamlined checkout process', 'high_converting_website_case_solution_2', array(
                            'textarea_name' => 'high_converting_website_case_solution_2',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_solution_3">Case Solution 3</label></th>
                    <td>
                        <?php wp_editor(isset($case_solutions[2]) ? $case_solutions[2] : 'Mobile-first responsive design', 'high_converting_website_case_solution_3', array(
                            'textarea_name' => 'high_converting_website_case_solution_3',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_case_solution_4">Case Solution 4</label></th>
                    <td>
                        <?php wp_editor(isset($case_solutions[3]) ? $case_solutions[3] : 'A/B tested product pages and CTAs', 'high_converting_website_case_solution_4', array(
                            'textarea_name' => 'high_converting_website_case_solution_4',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Process Section -->
        <div class="form-section">
            <h3>Process Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_process_title">Process Section Title</label></th>
                    <td>
                        <?php wp_editor($process_title, 'high_converting_website_process_title', array(
                            'textarea_name' => 'high_converting_website_process_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>

            <!-- Individual Process Step Fields -->
            <table>
                <!-- Step 1 -->
                <tr>
                    <th><label for="high_converting_website_process_step_1_number">Step 1 Number</label></th>
                    <td>
                        <input type="text" 
                               id="high_converting_website_process_step_1_number" 
                               name="high_converting_website_process_step_1_number" 
                               value="<?php echo esc_attr(isset($process_steps[0]['number']) ? $process_steps[0]['number'] : '1'); ?>"
                               placeholder="e.g., 1" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_process_step_1_title">Step 1 Title</label></th>
                    <td>
                        <?php wp_editor(isset($process_steps[0]['title']) ? $process_steps[0]['title'] : 'Conversion Audit', 'high_converting_website_process_step_1_title', array(
                            'textarea_name' => 'high_converting_website_process_step_1_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_process_step_1_description">Step 1 Description</label></th>
                    <td>
                        <?php wp_editor(isset($process_steps[0]['description']) ? $process_steps[0]['description'] : 'Comprehensive analysis of your website\'s current performance, user behaviour, and conversion barriers.', 'high_converting_website_process_step_1_description', array(
                            'textarea_name' => 'high_converting_website_process_step_1_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Step 2 -->
                <tr>
                    <th><label for="high_converting_website_process_step_2_number">Step 2 Number</label></th>
                    <td>
                        <input type="text" 
                               id="high_converting_website_process_step_2_number" 
                               name="high_converting_website_process_step_2_number" 
                               value="<?php echo esc_attr(isset($process_steps[1]['number']) ? $process_steps[1]['number'] : '2'); ?>"
                               placeholder="e.g., 2" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_process_step_2_title">Step 2 Title</label></th>
                    <td>
                        <?php wp_editor(isset($process_steps[1]['title']) ? $process_steps[1]['title'] : 'Strategy & Design', 'high_converting_website_process_step_2_title', array(
                            'textarea_name' => 'high_converting_website_process_step_2_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_process_step_2_description">Step 2 Description</label></th>
                    <td>
                        <?php wp_editor(isset($process_steps[1]['description']) ? $process_steps[1]['description'] : 'Create conversion-focused wireframes and designs based on user psychology and best practices.', 'high_converting_website_process_step_2_description', array(
                            'textarea_name' => 'high_converting_website_process_step_2_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Step 3 -->
                <tr>
                    <th><label for="high_converting_website_process_step_3_number">Step 3 Number</label></th>
                    <td>
                        <input type="text" 
                               id="high_converting_website_process_step_3_number" 
                               name="high_converting_website_process_step_3_number" 
                               value="<?php echo esc_attr(isset($process_steps[2]['number']) ? $process_steps[2]['number'] : '3'); ?>"
                               placeholder="e.g., 3" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_process_step_3_title">Step 3 Title</label></th>
                    <td>
                        <?php wp_editor(isset($process_steps[2]['title']) ? $process_steps[2]['title'] : 'Development & Testing', 'high_converting_website_process_step_3_title', array(
                            'textarea_name' => 'high_converting_website_process_step_3_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_process_step_3_description">Step 3 Description</label></th>
                    <td>
                        <?php wp_editor(isset($process_steps[2]['description']) ? $process_steps[2]['description'] : 'Build optimised pages with A/B testing frameworks to validate improvements.', 'high_converting_website_process_step_3_description', array(
                            'textarea_name' => 'high_converting_website_process_step_3_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Step 4 -->
                <tr>
                    <th><label for="high_converting_website_process_step_4_number">Step 4 Number</label></th>
                    <td>
                        <input type="text" 
                               id="high_converting_website_process_step_4_number" 
                               name="high_converting_website_process_step_4_number" 
                               value="<?php echo esc_attr(isset($process_steps[3]['number']) ? $process_steps[3]['number'] : '4'); ?>"
                               placeholder="e.g., 4" />
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_process_step_4_title">Step 4 Title</label></th>
                    <td>
                        <?php wp_editor(isset($process_steps[3]['title']) ? $process_steps[3]['title'] : 'Monitor & Optimise', 'high_converting_website_process_step_4_title', array(
                            'textarea_name' => 'high_converting_website_process_step_4_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_process_step_4_description">Step 4 Description</label></th>
                    <td>
                        <?php wp_editor(isset($process_steps[3]['description']) ? $process_steps[3]['description'] : 'Continuously track performance and implement data-driven improvements.', 'high_converting_website_process_step_4_description', array(
                            'textarea_name' => 'high_converting_website_process_step_4_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Conversion Elements Section -->
        <div class="form-section">
            <h3>Conversion Elements Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_elements_title">Elements Section Title</label></th>
                    <td>
                        <?php wp_editor($elements_title, 'high_converting_website_elements_title', array(
                            'textarea_name' => 'high_converting_website_elements_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>

            <!-- Individual Conversion Element Fields -->
            <table>
                <!-- Element 1: Value Propositions -->
                <tr>
                    <th><label for="high_converting_website_element_1_title">Element 1 Title</label></th>
                    <td>
                        <?php wp_editor(isset($elements[0]['title']) ? $elements[0]['title'] : 'Value Propositions', 'high_converting_website_element_1_title', array(
                            'textarea_name' => 'high_converting_website_element_1_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_element_1_description">Element 1 Description</label></th>
                    <td>
                        <?php wp_editor(isset($elements[0]['description']) ? $elements[0]['description'] : 'Clear, compelling messaging that communicates your unique value and benefits.', 'high_converting_website_element_1_description', array(
                            'textarea_name' => 'high_converting_website_element_1_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Element 2: Call-to-Action (CTA) -->
                <tr>
                    <th><label for="high_converting_website_element_2_title">Element 2 Title</label></th>
                    <td>
                        <?php wp_editor(isset($elements[1]['title']) ? $elements[1]['title'] : 'Call-to-Action (CTA)', 'high_converting_website_element_2_title', array(
                            'textarea_name' => 'high_converting_website_element_2_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_element_2_description">Element 2 Description</label></th>
                    <td>
                        <?php wp_editor(isset($elements[1]['description']) ? $elements[1]['description'] : 'Strategic placement and design of CTAs that guide users toward conversion.', 'high_converting_website_element_2_description', array(
                            'textarea_name' => 'high_converting_website_element_2_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Element 3: Trust Signals -->
                <tr>
                    <th><label for="high_converting_website_element_3_title">Element 3 Title</label></th>
                    <td>
                        <?php wp_editor(isset($elements[2]['title']) ? $elements[2]['title'] : 'Trust Signals', 'high_converting_website_element_3_title', array(
                            'textarea_name' => 'high_converting_website_element_3_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_element_3_description">Element 3 Description</label></th>
                    <td>
                        <?php wp_editor(isset($elements[2]['description']) ? $elements[2]['description'] : 'Elements that build credibility and reduce purchase anxiety.', 'high_converting_website_element_3_description', array(
                            'textarea_name' => 'high_converting_website_element_3_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Element 4: User Experience -->
                <tr>
                    <th><label for="high_converting_website_element_4_title">Element 4 Title</label></th>
                    <td>
                        <?php wp_editor(isset($elements[3]['title']) ? $elements[3]['title'] : 'User Experience', 'high_converting_website_element_4_title', array(
                            'textarea_name' => 'high_converting_website_element_4_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_element_4_description">Element 4 Description</label></th>
                    <td>
                        <?php wp_editor(isset($elements[3]['description']) ? $elements[3]['description'] : 'Smooth, intuitive navigation and user flow optimisation.', 'high_converting_website_element_4_description', array(
                            'textarea_name' => 'high_converting_website_element_4_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Website Types Section -->
        <div class="form-section">
            <h3>Website Types Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_types_title">Types Section Title</label></th>
                    <td>
                        <?php wp_editor($types_title, 'high_converting_website_types_title', array(
                            'textarea_name' => 'high_converting_website_types_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>

            <!-- Individual Website Type Fields -->
            <table>
                <!-- Type 1: Lead Generation Websites -->
                <tr>
                    <th><label for="high_converting_website_type_1_title">Website Type 1 Title</label></th>
                    <td>
                        <?php wp_editor(isset($types[0]['title']) ? $types[0]['title'] : 'Lead Generation Websites', 'high_converting_website_type_1_title', array(
                            'textarea_name' => 'high_converting_website_type_1_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_type_1_description">Website Type 1 Description</label></th>
                    <td>
                        <?php wp_editor(isset($types[0]['description']) ? $types[0]['description'] : 'Specialized optimization for websites focused on capturing leads and converting visitors into potential customers.', 'high_converting_website_type_1_description', array(
                            'textarea_name' => 'high_converting_website_type_1_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_type_1_results">Website Type 1 Results</label></th>
                    <td>
                        <?php wp_editor(isset($types[0]['results']) ? $types[0]['results'] : 'Average: 200% lead increase', 'high_converting_website_type_1_results', array(
                            'textarea_name' => 'high_converting_website_type_1_results',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Type 2: E-commerce Websites -->
                <tr>
                    <th><label for="high_converting_website_type_2_title">Website Type 2 Title</label></th>
                    <td>
                        <?php wp_editor(isset($types[1]['title']) ? $types[1]['title'] : 'E-commerce Websites', 'high_converting_website_type_2_title', array(
                            'textarea_name' => 'high_converting_website_type_2_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_type_2_description">Website Type 2 Description</label></th>
                    <td>
                        <?php wp_editor(isset($types[1]['description']) ? $types[1]['description'] : 'Complete optimization for online stores to increase sales, reduce cart abandonment, and maximize revenue.', 'high_converting_website_type_2_description', array(
                            'textarea_name' => 'high_converting_website_type_2_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_type_2_results">Website Type 2 Results</label></th>
                    <td>
                        <?php wp_editor(isset($types[1]['results']) ? $types[1]['results'] : 'Average: 150% sales increase', 'high_converting_website_type_2_results', array(
                            'textarea_name' => 'high_converting_website_type_2_results',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Type 3: Service-Based Websites -->
                <tr>
                    <th><label for="high_converting_website_type_3_title">Website Type 3 Title</label></th>
                    <td>
                        <?php wp_editor(isset($types[2]['title']) ? $types[2]['title'] : 'Service-Based Websites', 'high_converting_website_type_3_title', array(
                            'textarea_name' => 'high_converting_website_type_3_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_type_3_description">Website Type 3 Description</label></th>
                    <td>
                        <?php wp_editor(isset($types[2]['description']) ? $types[2]['description'] : 'Tailored optimization for service providers to showcase expertise and convert visitors into clients.', 'high_converting_website_type_3_description', array(
                            'textarea_name' => 'high_converting_website_type_3_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_type_3_results">Website Type 3 Results</label></th>
                    <td>
                        <?php wp_editor(isset($types[2]['results']) ? $types[2]['results'] : 'Average: 180% inquiry increase', 'high_converting_website_type_3_results', array(
                            'textarea_name' => 'high_converting_website_type_3_results',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Conversion Tools Section -->
        <div class="form-section">
            <h3>Conversion Tools Section</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_tools_title">Tools Section Title</label></th>
                    <td>
                        <?php wp_editor($tools_title, 'high_converting_website_tools_title', array(
                            'textarea_name' => 'high_converting_website_tools_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>

            <!-- Individual Tool Category Fields -->
            <table>
                <!-- Tool Category 1: Analytics & Testing -->
                <tr>
                    <th><label for="high_converting_website_tool_1_title">Tool Category 1 Title</label></th>
                    <td>
                        <?php wp_editor(isset($tools[0]['title']) ? $tools[0]['title'] : 'Analytics & Testing', 'high_converting_website_tool_1_title', array(
                            'textarea_name' => 'high_converting_website_tool_1_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_tool_1_description">Tool Category 1 Description</label></th>
                    <td>
                        <?php wp_editor(isset($tools[0]['description']) ? $tools[0]['description'] : 'Advanced analytics and testing tools to measure performance and optimize conversion rates.', 'high_converting_website_tool_1_description', array(
                            'textarea_name' => 'high_converting_website_tool_1_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Tool Category 2: Performance Monitoring -->
                <tr>
                    <th><label for="high_converting_website_tool_2_title">Tool Category 2 Title</label></th>
                    <td>
                        <?php wp_editor(isset($tools[1]['title']) ? $tools[1]['title'] : 'Performance Monitoring', 'high_converting_website_tool_2_title', array(
                            'textarea_name' => 'high_converting_website_tool_2_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_tool_2_description">Tool Category 2 Description</label></th>
                    <td>
                        <?php wp_editor(isset($tools[1]['description']) ? $tools[1]['description'] : 'Comprehensive performance monitoring tools to track website speed and user experience metrics.', 'high_converting_website_tool_2_description', array(
                            'textarea_name' => 'high_converting_website_tool_2_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                
                <!-- Tool Category 3: User Experience -->
                <tr>
                    <th><label for="high_converting_website_tool_3_title">Tool Category 3 Title</label></th>
                    <td>
                        <?php wp_editor(isset($tools[2]['title']) ? $tools[2]['title'] : 'User Experience', 'high_converting_website_tool_3_title', array(
                            'textarea_name' => 'high_converting_website_tool_3_title',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_tool_3_description">Tool Category 3 Description</label></th>
                    <td>
                        <?php wp_editor(isset($tools[2]['description']) ? $tools[2]['description'] : 'User experience analysis tools to understand visitor behavior and optimize user journeys.', 'high_converting_website_tool_3_description', array(
                            'textarea_name' => 'high_converting_website_tool_3_description',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Testimonial Section (No Image) -->
        <div class="form-section">
            <h3>Testimonial Section (No Image)</h3>
            <table>
                <tr>
                    <th><label for="high_converting_website_testimonial_quote">Testimonial Quote</label></th>
                    <td>
                        <?php wp_editor($testimonial_quote, 'high_converting_website_testimonial_quote', array(
                            'textarea_name' => 'high_converting_website_testimonial_quote',
                            'textarea_rows' => 6,
                            'teeny' => false,
                            'media_buttons' => false
                        )); ?>
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
                        <?php wp_editor($cta_title, 'high_converting_website_cta_title', array(
                            'textarea_name' => 'high_converting_website_cta_title',
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_cta_subtitle">CTA Subtitle</label></th>
                    <td>
                        <?php wp_editor($cta_subtitle, 'high_converting_website_cta_subtitle', array(
                            'textarea_name' => 'high_converting_website_cta_subtitle',
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
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

            <!-- Individual CTA Benefit Fields -->
            <table>
                <tr>
                    <th><label for="high_converting_website_cta_benefit_1">CTA Benefit 1</label></th>
                    <td>
                        <?php wp_editor(isset($cta_benefits[0]) ? $cta_benefits[0] : '✓ Conversion-focused design', 'high_converting_website_cta_benefit_1', array(
                            'textarea_name' => 'high_converting_website_cta_benefit_1',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_cta_benefit_2">CTA Benefit 2</label></th>
                    <td>
                        <?php wp_editor(isset($cta_benefits[1]) ? $cta_benefits[1] : '✓ Mobile optimization included', 'high_converting_website_cta_benefit_2', array(
                            'textarea_name' => 'high_converting_website_cta_benefit_2',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
                <tr>
                    <th><label for="high_converting_website_cta_benefit_3">CTA Benefit 3</label></th>
                    <td>
                        <?php wp_editor(isset($cta_benefits[2]) ? $cta_benefits[2] : '✓ A/B testing setup', 'high_converting_website_cta_benefit_3', array(
                            'textarea_name' => 'high_converting_website_cta_benefit_3',
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'media_buttons' => false
                        )); ?>
                    </td>
                </tr>
            </table>
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
        
        // Image upload functionality
        var custom_uploader;
        $('.high-converting-website-meta-box').on('click', '.upload-button', function(e) {
            e.preventDefault();
            var $this = $(this);
            var target = $this.data('target');
            
            if (custom_uploader) {
                custom_uploader.open();
                return;
            }
            
            custom_uploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Image',
                button: {
                    text: 'Choose Image'
                },
                multiple: false
            });
            
            custom_uploader.on('select', function() {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('#' + target).val(attachment.id);
                
                // Update preview
                var $container = $this.closest('td');
                $container.find('.image-preview').remove();
                $container.find('.remove-button').remove();
                $container.append('<img src="' + attachment.url + '" class="image-preview" />');
                $container.append('<button type="button" class="button remove-button" data-target="' + target + '">Remove</button>');
            });
            
            custom_uploader.open();
        });
        
        // Remove image functionality
        $('.high-converting-website-meta-box').on('click', '.remove-button', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('#' + target).val('');
            $(this).siblings('.image-preview').remove();
            $(this).remove();
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
        // Check if this is a rich text field that should use wp_kses_post
        if (strpos($field, '_content') !== false || 
            strpos($field, 'testimonial_quote') !== false || 
            strpos($field, 'subtitle') !== false ||
            strpos($field, '_title') !== false ||
            strpos($field, '_label') !== false) {
            return wp_kses_post($value);
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
    }    // Save all fields
    $fields = [
        'high_converting_website_header_title',
        'high_converting_website_header_subtitle',
        'high_converting_website_overview_title',
        'high_converting_website_overview_content',
        'high_converting_website_overview_image',
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
