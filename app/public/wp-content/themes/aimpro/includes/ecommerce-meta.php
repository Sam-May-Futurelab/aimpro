<?php
// E-commerce Page Meta Fields

function add_ecommerce_meta_boxes() {
    global $post;
    
    // Only add to pages with the correct template or slug
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        $page_slug = $post->post_name;
        
        // Only show meta box if this is the ecommerce page
        if ($page_template === 'page-ecommerce.php' || $page_slug === 'ecommerce' || $page_slug === 'e-commerce') {
            add_meta_box(
                'ecommerce_meta_box',
                'E-commerce Page Content',
                'ecommerce_meta_box_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'add_ecommerce_meta_boxes', 11);

function ecommerce_meta_box_callback($post) {
    // Only show on e-commerce page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-ecommerce.php') {
        echo '<p>This meta box only appears when using the "E-commerce Industry Page" template.</p>';
        return;
    }

    wp_nonce_field('ecommerce_meta_box', 'ecommerce_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_ecommerce_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_ecommerce_header_subtitle', true);
    $overview_title = get_post_meta($post->ID, '_ecommerce_overview_title', true);
    $overview_content = get_post_meta($post->ID, '_ecommerce_overview_content', true);
    $overview_image = get_post_meta($post->ID, '_ecommerce_overview_image', true);

    // Challenges section
    $challenges_title = get_post_meta($post->ID, '_ecommerce_challenges_title', true);
    $challenges = get_post_meta($post->ID, '_ecommerce_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'High customer acquisition costs',
            'Intense competition from marketplaces',
            'Cart abandonment and low conversion rates',
            'Seasonal sales fluctuations',
            'Customer retention and loyalty',
            'Product visibility and discovery'
        );
    }

    // Marketing Services section (2x2 grid)
    $services_title = get_post_meta($post->ID, '_ecommerce_services_title', true);
    $services = get_post_meta($post->ID, '_ecommerce_services', true);
    if (empty($services)) {
        $services = array(
            array(
                'icon' => 'fas fa-search',
                'title' => 'E-commerce SEO',
                'description' => 'Increase organic product visibility with e-commerce-specific SEO strategies designed to drive targeted shopping traffic.',
                'features' => array('Product page optimization', 'Category & collection SEO', 'Schema markup implementation', 'Site structure optimization')
            ),
            array(
                'icon' => 'fas fa-shopping-cart',
                'title' => 'Conversion Rate Optimization',
                'description' => 'Transform more browsers into buyers with data-driven CRO strategies that improve the entire customer journey.',
                'features' => array('Cart abandonment recovery', 'Product page optimization', 'Checkout flow analysis', 'User behavior tracking')
            ),
            array(
                'icon' => 'fas fa-ad',
                'title' => 'E-commerce PPC & Shopping Ads',
                'description' => 'Drive qualified traffic to your products with highly-targeted paid campaigns across search, shopping, and display networks.',
                'features' => array('Google Shopping campaigns', 'Dynamic remarketing', 'Search ads optimization', 'Competitor conquest campaigns')
            ),
            array(
                'icon' => 'fas fa-envelope',
                'title' => 'Email & SMS Marketing',
                'description' => 'Maximize customer lifetime value with personalized email and SMS campaigns that drive repeat purchases and loyalty.',
                'features' => array('Abandoned cart sequences', 'Post-purchase nurturing', 'Personalized product recommendations', 'Segmentation strategies')
            )
        );
    }

    // Case study section
    $case_study_label = get_post_meta($post->ID, '_ecommerce_case_study_label', true);
    $case_study_title = get_post_meta($post->ID, '_ecommerce_case_study_title', true);
    $case_study_content = get_post_meta($post->ID, '_ecommerce_case_study_content', true);
    $case_study_challenge_title = get_post_meta($post->ID, '_ecommerce_case_study_challenge_title', true);
    $case_study_challenges = get_post_meta($post->ID, '_ecommerce_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            'Low conversion rate (under 1%)',
            'High shopping cart abandonment',
            'Poor product visibility in search',
            'Increasing ad costs and lower ROAS'
        );
    }
    $case_study_solution_title = get_post_meta($post->ID, '_ecommerce_case_study_solution_title', true);
    $case_study_solutions = get_post_meta($post->ID, '_ecommerce_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Comprehensive CRO strategy',
            'Abandoned cart recovery system',
            'Product page SEO optimization',
            'Restructured PPC campaigns'
        );
    }
    $case_study_results_title = get_post_meta($post->ID, '_ecommerce_case_study_results_title', true);
    $case_study_results = get_post_meta($post->ID, '_ecommerce_case_study_results', true);
    if (empty($case_study_results)) {
        $case_study_results = array(
            array('number' => '143%', 'label' => 'Conversion Rate Increase'),
            array('number' => '47%', 'label' => 'Reduction in Cart Abandonment'),
            array('number' => '315%', 'label' => 'Organic Traffic Growth'),
            array('number' => '285%', 'label' => 'Return on Ad Spend')
        );
    }
    $case_study_link_text = get_post_meta($post->ID, '_ecommerce_case_study_link_text', true);
    $case_study_link_url = get_post_meta($post->ID, '_ecommerce_case_study_link_url', true);

    // Process section
    $process_title = get_post_meta($post->ID, '_ecommerce_process_title', true);
    $process_steps = get_post_meta($post->ID, '_ecommerce_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'title' => 'Store & Customer Analysis',
                'description' => 'We analyze your store performance, customer behavior, and identify key optimization opportunities.'
            ),
            array(
                'title' => 'Multi-Channel Strategy',
                'description' => 'We develop an integrated marketing approach across organic, paid, and owned channels.'
            ),
            array(
                'title' => 'Conversion Optimization',
                'description' => 'We implement targeted improvements to increase your conversion rate at every stage of the funnel.'
            ),
            array(
                'title' => 'Scaling & Optimization',
                'description' => 'We continuously refine your marketing mix to maximize return on investment and scale growth.'
            )
        );
    }

    // E-commerce Insights section
    $insights_title = get_post_meta($post->ID, '_ecommerce_insights_title', true);
    $insights = get_post_meta($post->ID, '_ecommerce_insights', true);
    if (empty($insights)) {
        $insights = array(
            array(
                'stat' => '68%',
                'title' => 'Cart Abandonment',
                'description' => '68% of online shopping carts are abandoned before purchase'
            ),
            array(
                'stat' => '39%',
                'title' => 'Mobile Revenue',
                'description' => '39% of e-commerce revenue comes from mobile devices'
            ),
            array(
                'stat' => '43%',
                'title' => 'Search Traffic',
                'description' => '43% of e-commerce traffic comes from organic search results'
            ),
            array(
                'stat' => '65%',
                'title' => 'Repeat Customers',
                'description' => '65% of store revenue comes from repeat customers'
            )
        );
    }

    // Testimonial section (without image)
    $testimonial_quote = get_post_meta($post->ID, '_ecommerce_testimonial_quote', true);
    $testimonial_name = get_post_meta($post->ID, '_ecommerce_testimonial_name', true);
    $testimonial_position = get_post_meta($post->ID, '_ecommerce_testimonial_position', true);
    $testimonial_company = get_post_meta($post->ID, '_ecommerce_testimonial_company', true);    // CTA section
    $cta_title = get_post_meta($post->ID, '_ecommerce_cta_title', true) ?: 'Ready to Scale Your E-commerce Business?';
    $cta_subtitle = get_post_meta($post->ID, '_ecommerce_cta_subtitle', true) ?: 'Let\'s discuss how our e-commerce marketing expertise can drive more traffic, conversions, and revenue for your online store.';
    $cta_primary_text = get_post_meta($post->ID, '_ecommerce_cta_primary_text', true) ?: 'Get Free E-commerce Audit';
    $cta_primary_url = get_post_meta($post->ID, '_ecommerce_cta_primary_url', true);
    $cta_secondary_text = get_post_meta($post->ID, '_ecommerce_cta_secondary_text', true) ?: 'View E-commerce Success Stories';
    $cta_secondary_url = get_post_meta($post->ID, '_ecommerce_cta_secondary_url', true);
    $cta_benefits = get_post_meta($post->ID, '_ecommerce_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '✓ Conversion rate optimization',
            '✓ Multi-channel strategies',
            '✓ ROI-focused campaigns'
        );
    }

    ?>
    <style>
        .ecommerce-meta {
            max-width: 100%;
        }
        .ecommerce-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .ecommerce-meta .form-table td {
            padding: 15px 10px;
        }
        .ecommerce-meta input[type="text"],
        .ecommerce-meta textarea,
        .ecommerce-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .ecommerce-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .ecommerce-meta .repeater-field {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }
        .ecommerce-meta .repeater-field input {
            margin-bottom: 5px;
        }
        .ecommerce-meta .image-upload-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .ecommerce-meta .image-preview {
            max-width: 150px;
            height: auto;
        }
        .ecommerce-meta .upload-button,
        .ecommerce-meta .remove-button {
            padding: 5px 10px;
            font-size: 12px;
        }
        .ecommerce-meta h3 {
            margin-top: 30px;
            margin-bottom: 15px;
            padding: 10px;
            background: #0073aa;
            color: white;
            border-radius: 3px;
        }
    </style>

    <div class="ecommerce-meta">
        
        <!-- Header Section -->
        <h3>Header Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_header_title">Page Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_header_title" 
                           name="ecommerce_header_title" 
                           value="<?php echo esc_attr($header_title); ?>"
                           placeholder="E-commerce Digital Marketing" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_header_subtitle">Page Subtitle</label></th>
                <td>
                    <textarea id="ecommerce_header_subtitle" 
                              name="ecommerce_header_subtitle"
                              placeholder="Drive more traffic, increase conversions, and maximize revenue for your online store"><?php echo esc_textarea($header_subtitle); ?></textarea>
                </td>
            </tr>
        </table>

        <!-- Overview Section -->
        <h3>Overview Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_overview_title">Overview Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_overview_title" 
                           name="ecommerce_overview_title" 
                           value="<?php echo esc_attr($overview_title); ?>"
                           placeholder="Accelerate Your E-commerce Growth" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_overview_content">Overview Content</label></th>
                <td>
                    <textarea id="ecommerce_overview_content" 
                              name="ecommerce_overview_content"
                              placeholder="The e-commerce landscape is more competitive than ever..."><?php echo esc_textarea($overview_content); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload-container">
                        <input type="url" 
                               id="ecommerce_overview_image" 
                               name="ecommerce_overview_image" 
                               value="<?php echo esc_url($overview_image); ?>"
                               placeholder="Image URL" />
                        <button type="button" class="button upload-button" data-target="ecommerce_overview_image">Upload Image</button>
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" class="image-preview" />
                            <button type="button" class="button remove-button" data-target="ecommerce_overview_image">Remove</button>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Challenges Section -->
        <h3>Challenges Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_challenges_title">Challenges Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_challenges_title" 
                           name="ecommerce_challenges_title" 
                           value="<?php echo esc_attr($challenges_title); ?>"
                           placeholder="E-commerce Marketing Challenges We Solve:" />
                </td>
            </tr>
            <tr>
                <th><label>Challenges List</label></th>
                <td>
                    <div id="challenges-repeater">
                        <?php if (!empty($challenges)): ?>
                            <?php foreach ($challenges as $index => $challenge): ?>
                                <div class="repeater-field">
                                    <input type="text" 
                                           name="ecommerce_challenges[]" 
                                           value="<?php echo esc_attr($challenge); ?>"
                                           placeholder="Challenge item" />
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="challenges-repeater">Add Challenge</button>
                </td>
            </tr>
        </table>

        <!-- Marketing Services Section -->
        <h3>Marketing Services Section (2x2 Grid)</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_services_title">Services Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_services_title" 
                           name="ecommerce_services_title" 
                           value="<?php echo esc_attr($services_title); ?>"
                           placeholder="Our E-commerce Marketing Services" />
                </td>
            </tr>
        </table>
        
        <div id="services-repeater">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $index => $service): ?>
                    <div class="repeater-field">
                        <h4>Service <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="ecommerce_services[<?php echo $index; ?>][icon]" 
                               value="<?php echo esc_attr($service['icon']); ?>"
                               placeholder="Icon class (e.g., fas fa-shopping-cart)" />
                        <input type="text" 
                               name="ecommerce_services[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($service['title']); ?>"
                               placeholder="Service title" />
                        <textarea name="ecommerce_services[<?php echo $index; ?>][description]" 
                                  placeholder="Service description"><?php echo esc_textarea($service['description']); ?></textarea>
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($service['features'] as $feat_index => $feature): ?>
                                <input type="text" 
                                       name="ecommerce_services[<?php echo $index; ?>][features][]" 
                                       value="<?php echo esc_attr($feature); ?>"
                                       placeholder="Feature" />
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button remove-repeater-item">Remove Service</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Case Study Section -->
        <h3>Case Study Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_case_study_label">Case Study Label</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_case_study_label" 
                           name="ecommerce_case_study_label" 
                           value="<?php echo esc_attr($case_study_label); ?>"
                           placeholder="Success Story" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_case_study_title">Case Study Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_case_study_title" 
                           name="ecommerce_case_study_title" 
                           value="<?php echo esc_attr($case_study_title); ?>"
                           placeholder="From Struggling Store to 7-Figure Success" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_case_study_content">Case Study Content</label></th>
                <td>
                    <textarea id="ecommerce_case_study_content" 
                              name="ecommerce_case_study_content"
                              placeholder="Case study description..."><?php echo esc_textarea($case_study_content); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_case_study_challenge_title">Challenge Section Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_case_study_challenge_title" 
                           name="ecommerce_case_study_challenge_title" 
                           value="<?php echo esc_attr($case_study_challenge_title); ?>"
                           placeholder="The Challenge" />
                </td>
            </tr>
            <tr>
                <th><label>Challenge Items</label></th>
                <td>
                    <div id="case-study-challenges-repeater">
                        <?php if (!empty($case_study_challenges)): ?>
                            <?php foreach ($case_study_challenges as $challenge): ?>
                                <div class="repeater-field">
                                    <input type="text" 
                                           name="ecommerce_case_study_challenges[]" 
                                           value="<?php echo esc_attr($challenge); ?>"
                                           placeholder="Challenge item" />
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="case-study-challenges-repeater">Add Challenge</button>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_case_study_solution_title">Solution Section Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_case_study_solution_title" 
                           name="ecommerce_case_study_solution_title" 
                           value="<?php echo esc_attr($case_study_solution_title); ?>"
                           placeholder="Our Solution" />
                </td>
            </tr>
            <tr>
                <th><label>Solution Items</label></th>
                <td>
                    <div id="case-study-solutions-repeater">
                        <?php if (!empty($case_study_solutions)): ?>
                            <?php foreach ($case_study_solutions as $solution): ?>
                                <div class="repeater-field">
                                    <input type="text" 
                                           name="ecommerce_case_study_solutions[]" 
                                           value="<?php echo esc_attr($solution); ?>"
                                           placeholder="Solution item" />
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="case-study-solutions-repeater">Add Solution</button>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_case_study_results_title">Results Section Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_case_study_results_title" 
                           name="ecommerce_case_study_results_title" 
                           value="<?php echo esc_attr($case_study_results_title); ?>"
                           placeholder="Results After 6 Months" />
                </td>
            </tr>
        </table>

        <div id="case-study-results-repeater">
            <?php if (!empty($case_study_results)): ?>
                <?php foreach ($case_study_results as $index => $result): ?>
                    <div class="repeater-field">
                        <h4>Result <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="ecommerce_case_study_results[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($result['number']); ?>"
                               placeholder="Number (e.g., 143%)" />
                        <input type="text" 
                               name="ecommerce_case_study_results[<?php echo $index; ?>][label]" 
                               value="<?php echo esc_attr($result['label']); ?>"
                               placeholder="Label" />
                        <button type="button" class="button remove-repeater-item">Remove Result</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <table class="form-table">
            <tr>
                <th><label for="ecommerce_case_study_link_text">Case Study Link Text</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_case_study_link_text" 
                           name="ecommerce_case_study_link_text" 
                           value="<?php echo esc_attr($case_study_link_text); ?>"
                           placeholder="Read Full Case Study" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_case_study_link_url">Case Study Link URL</label></th>
                <td>
                    <input type="url" 
                           id="ecommerce_case_study_link_url" 
                           name="ecommerce_case_study_link_url" 
                           value="<?php echo esc_url($case_study_link_url); ?>"
                           placeholder="/case-studies" />
                </td>
            </tr>
        </table>

        <!-- Process Section -->
        <h3>Process Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_process_title">Process Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_process_title" 
                           name="ecommerce_process_title" 
                           value="<?php echo esc_attr($process_title); ?>"
                           placeholder="Our E-commerce Marketing Process" />
                </td>
            </tr>
        </table>

        <div id="process-steps-repeater">
            <?php if (!empty($process_steps)): ?>
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="repeater-field">
                        <h4>Step <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="ecommerce_process_steps[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($step['title']); ?>"
                               placeholder="Step title" />
                        <textarea name="ecommerce_process_steps[<?php echo $index; ?>][description]" 
                                  placeholder="Step description"><?php echo esc_textarea($step['description']); ?></textarea>
                        <button type="button" class="button remove-repeater-item">Remove Step</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- E-commerce Insights Section -->
        <h3>E-commerce Insights Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_insights_title">Insights Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_insights_title" 
                           name="ecommerce_insights_title" 
                           value="<?php echo esc_attr($insights_title); ?>"
                           placeholder="E-commerce Industry Insights" />
                </td>
            </tr>
        </table>

        <div id="insights-repeater">
            <?php if (!empty($insights)): ?>
                <?php foreach ($insights as $index => $insight): ?>
                    <div class="repeater-field">
                        <h4>Insight <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="ecommerce_insights[<?php echo $index; ?>][stat]" 
                               value="<?php echo esc_attr($insight['stat']); ?>"
                               placeholder="Statistic (e.g., 68%)" />
                        <input type="text" 
                               name="ecommerce_insights[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($insight['title']); ?>"
                               placeholder="Insight title" />
                        <textarea name="ecommerce_insights[<?php echo $index; ?>][description]" 
                                  placeholder="Insight description"><?php echo esc_textarea($insight['description']); ?></textarea>
                        <button type="button" class="button remove-repeater-item">Remove Insight</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Testimonial Section (No Image) -->
        <h3>Testimonial Section (No Image)</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_testimonial_quote">Testimonial Quote</label></th>
                <td>
                    <textarea id="ecommerce_testimonial_quote" 
                              name="ecommerce_testimonial_quote"
                              placeholder="Customer testimonial quote..."><?php echo esc_textarea($testimonial_quote); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_testimonial_name">Customer Name</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_testimonial_name" 
                           name="ecommerce_testimonial_name" 
                           value="<?php echo esc_attr($testimonial_name); ?>"
                           placeholder="John Smith" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_testimonial_position">Customer Position</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_testimonial_position" 
                           name="ecommerce_testimonial_position" 
                           value="<?php echo esc_attr($testimonial_position); ?>"
                           placeholder="Founder & CEO" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_testimonial_company">Company Description</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_testimonial_company" 
                           name="ecommerce_testimonial_company" 
                           value="<?php echo esc_attr($testimonial_company); ?>"
                           placeholder="Premium Lifestyle Brand" />
                </td>
            </tr>
        </table>

        <!-- CTA Section -->
        <h3>CTA Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_cta_title">CTA Title</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_cta_title" 
                           name="ecommerce_cta_title" 
                           value="<?php echo esc_attr($cta_title); ?>"
                           placeholder="Ready to Scale Your E-commerce Business?" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <textarea id="ecommerce_cta_subtitle" 
                              name="ecommerce_cta_subtitle"
                              placeholder="Let's discuss how our e-commerce marketing expertise can drive more traffic, conversions, and revenue for your online store."><?php echo esc_textarea($cta_subtitle); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_cta_primary_text" 
                           name="ecommerce_cta_primary_text" 
                           value="<?php echo esc_attr($cta_primary_text); ?>"
                           placeholder="Get Free E-commerce Audit" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_cta_primary_url">Primary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="ecommerce_cta_primary_url" 
                           name="ecommerce_cta_primary_url" 
                           value="<?php echo esc_url($cta_primary_url); ?>"
                           placeholder="/contact" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_cta_secondary_text">Secondary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="ecommerce_cta_secondary_text" 
                           name="ecommerce_cta_secondary_text" 
                           value="<?php echo esc_attr($cta_secondary_text); ?>"
                           placeholder="View E-commerce Success Stories" />
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_cta_secondary_url">Secondary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="ecommerce_cta_secondary_url" 
                           name="ecommerce_cta_secondary_url" 
                           value="<?php echo esc_url($cta_secondary_url); ?>"
                           placeholder="/case-studies" />
                </td>
            </tr>
            <tr>
                <th><label>CTA Benefits</label></th>
                <td>
                    <div id="cta-benefits-repeater">
                        <?php if (!empty($cta_benefits)): ?>
                            <?php foreach ($cta_benefits as $benefit): ?>
                                <div class="repeater-field">
                                    <input type="text" 
                                           name="ecommerce_cta_benefits[]" 
                                           value="<?php echo esc_attr($benefit); ?>"
                                           placeholder="✓ Benefit item" />
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="cta-benefits-repeater">Add Benefit</button>
                </td>
            </tr>
        </table>

    </div>

    <script>
    jQuery(document).ready(function($) {
        // Image upload functionality
        $('.upload-button').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            var frame = wp.media({
                title: 'Select Image',
                multiple: false
            });
            
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $('#' + target).val(attachment.url);
                // Refresh preview
                location.reload();
            });
            
            frame.open();
        });

        // Remove image
        $('.remove-button').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('#' + target).val('');
            location.reload();
        });

        // Add repeater item
        $('.add-repeater-item').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            var newField = '<div class="repeater-field">' +
                          '<input type="text" name="ecommerce_' + target.replace('-repeater', '').replace(/-/g, '_') + '[]" placeholder="Item" />' +
                          '<button type="button" class="button remove-repeater-item">Remove</button>' +
                          '</div>';
            $('#' + target).append(newField);
        });

        // Remove repeater item
        $(document).on('click', '.remove-repeater-item', function(e) {
            e.preventDefault();
            $(this).closest('.repeater-field').remove();
        });
    });
    </script>
    <?php
}

function sanitize_ecommerce_meta_value($field, $value) {
    if (is_array($value)) {
        foreach ($value as &$item) {
            if (is_array($item)) {
                foreach ($item as $key => &$subitem) {
                    if (is_array($subitem)) {
                        foreach ($subitem as &$sub_subitem) {
                            $sub_subitem = sanitize_text_field($sub_subitem);
                        }
                    } else {
                        $subitem = sanitize_text_field($subitem);
                    }
                }
            } else {
                $item = sanitize_text_field($item);
            }
        }
        return $value;
    } else {
        if (strpos($field, 'content') !== false || strpos($field, 'description') !== false || strpos($field, 'subtitle') !== false) {
            return sanitize_textarea_field($value);
        } elseif (strpos($field, 'url') !== false || strpos($field, 'image') !== false) {
            return esc_url_raw($value);
        } else {
            return sanitize_text_field($value);
        }
    }
}

function save_ecommerce_meta_box_data($post_id) {
    if (!isset($_POST['ecommerce_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['ecommerce_meta_box_nonce'], 'ecommerce_meta_box')) {
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
        'ecommerce_header_title',
        'ecommerce_header_subtitle',
        'ecommerce_overview_title',
        'ecommerce_overview_content',
        'ecommerce_overview_image',
        'ecommerce_challenges_title',
        'ecommerce_challenges',
        'ecommerce_services_title',
        'ecommerce_services',
        'ecommerce_case_study_label',
        'ecommerce_case_study_title',
        'ecommerce_case_study_content',
        'ecommerce_case_study_challenge_title',
        'ecommerce_case_study_challenges',
        'ecommerce_case_study_solution_title',
        'ecommerce_case_study_solutions',
        'ecommerce_case_study_results_title',
        'ecommerce_case_study_results',
        'ecommerce_case_study_link_text',
        'ecommerce_case_study_link_url',
        'ecommerce_process_title',
        'ecommerce_process_steps',
        'ecommerce_insights_title',
        'ecommerce_insights',
        'ecommerce_testimonial_quote',
        'ecommerce_testimonial_name',
        'ecommerce_testimonial_position',
        'ecommerce_testimonial_company',
        'ecommerce_cta_title',
        'ecommerce_cta_subtitle',
        'ecommerce_cta_primary_text',
        'ecommerce_cta_primary_url',
        'ecommerce_cta_secondary_text',
        'ecommerce_cta_secondary_url',
        'ecommerce_cta_benefits'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_ecommerce_meta_value($field, $_POST[$field]));
        }
    }
}
add_action('save_post', 'save_ecommerce_meta_box_data');
