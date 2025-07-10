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
                'features' => array('Product page optimisation', 'Category & collection SEO', 'Schema markup implementation', 'Site structure optimisation')
            ),
            array(
                'icon' => 'fas fa-shopping-cart',
                'title' => 'Conversion Rate optimisation',
                'description' => 'Transform more browsers into buyers with data-driven CRO strategies that improve the entire customer journey.',
                'features' => array('Cart abandonment recovery', 'Product page optimisation', 'Checkout flow analysis', 'User behaviour tracking')
            ),
            array(
                'icon' => 'fas fa-ad',
                'title' => 'E-commerce PPC & Shopping Ads',
                'description' => 'Drive qualified traffic to your products with highly-targeted paid campaigns across search, shopping, and display networks.',
                'features' => array('Google Shopping campaigns', 'Dynamic remarketing', 'Search ads optimisation', 'Competitor conquest campaigns')
            ),
            array(
                'icon' => 'fas fa-envelope',
                'title' => 'Email & SMS Marketing',
                'description' => 'Maximize customer lifetime value with personalised email and SMS campaigns that drive repeat purchases and loyalty.',
                'features' => array('Abandoned cart sequences', 'Post-purchase nurturing', 'personalised product recommendations', 'Segmentation strategies')
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
            'Product page SEO optimisation',
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
                'description' => 'We analyse your store performance, customer behaviour, and identify key optimisation opportunities.'
            ),
            array(
                'title' => 'Multi-Channel Strategy',
                'description' => 'We develop an integrated marketing approach across organic, paid, and owned channels.'
            ),
            array(
                'title' => 'Conversion optimisation',
                'description' => 'We implement targeted improvements to increase your conversion rate at every stage of the funnel.'
            ),
            array(
                'title' => 'Scaling & optimisation',
                'description' => 'We continuously refine your marketing mix to maximise return on investment and scale growth.'
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
            '? Conversion rate optimisation',
            '? Multi-channel strategies',
            '? ROI-focused campaigns'
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
                    <?php wp_editor($header_title ?: 'E-commerce Digital Marketing', 'ecommerce_header_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main page heading. HTML allowed for gradient text.</p>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_header_subtitle">Page Subtitle</label></th>
                <td>
                    <?php wp_editor($header_subtitle ?: 'Drive more traffic, increase conversions, and maximise revenue for your online store', 'ecommerce_header_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                    <p class="description">Subtitle text below the main heading.</p>
                </td>
            </tr>
        </table>

        <!-- Overview Section -->
        <h3>Overview Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="ecommerce_overview_title">Overview Title</label></th>
                <td>
                    <?php wp_editor($overview_title ?: 'Accelerate Your E-commerce Growth', 'ecommerce_overview_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the overview section.</p>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_overview_content">Overview Content</label></th>
                <td>
                    <?php wp_editor($overview_content ?: 'The e-commerce landscape is more competitive than ever. Our specialised e-commerce marketing strategies help online retailers increase traffic, improve conversion rates, and maximise customer lifetime value through data-driven digital marketing.', 'ecommerce_overview_content', array('textarea_rows' => 6, 'media_buttons' => false)); ?>
                    <p class="description">Main description text for the overview section.</p>
                </td>
            </tr>
            <tr>                <th><label for="ecommerce_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload-container">
                        <input type="hidden" 
                               id="ecommerce_overview_image" 
                               name="ecommerce_overview_image" 
                               value="<?php echo esc_attr($overview_image); ?>" />
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
                    <?php wp_editor($challenges_title ?: 'E-commerce Marketing Challenges We Solve:', 'ecommerce_challenges_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Heading for the challenges section.</p>
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
                    <?php wp_editor($services_title ?: 'Our E-commerce Marketing Services', 'ecommerce_services_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the services section.</p>
                </td>
            </tr>
        </table>
        
        <div id="services-repeater">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $index => $service): ?>
                    <div class="repeater-field">
                        <h4>Service <?php echo $index + 1; ?></h4>
                        <p><strong>Icon Class:</strong></p>
                        <input type="text" 
                               name="ecommerce_services[<?php echo $index; ?>][icon]" 
                               value="<?php echo esc_attr($service['icon']); ?>"
                               placeholder="Icon class (e.g., fas fa-shopping-cart)" />
                        <p><strong>Service Title:</strong></p>
                        <?php wp_editor($service['title'], 'ecommerce_services_' . $index . '_title', array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'ecommerce_services[' . $index . '][title]')); ?>
                        <p><strong>Service Description:</strong></p>
                        <?php wp_editor($service['description'], 'ecommerce_services_' . $index . '_description', array('textarea_rows' => 4, 'media_buttons' => false, 'textarea_name' => 'ecommerce_services[' . $index . '][description]')); ?>
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
                    <?php wp_editor($case_study_label ?: 'Success Story', 'ecommerce_case_study_label', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Small label above the case study title.</p>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_case_study_title">Case Study Title</label></th>
                <td>
                    <?php wp_editor($case_study_title ?: 'Sports Equipment Plus: 320% Revenue Growth', 'ecommerce_case_study_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the case study.</p>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_case_study_content">Case Study Content</label></th>
                <td>
                    <?php wp_editor($case_study_content ?: 'Sports Equipment Plus, an online sports retailer, needed to compete against major e-commerce platforms and increase their market share.', 'ecommerce_case_study_content', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                    <p class="description">Introduction paragraph for the case study.</p>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_case_study_challenge_title">Challenge Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_challenge_title ?: 'The Challenge', 'ecommerce_case_study_challenge_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Heading for the challenge section.</p>
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
                    <?php wp_editor($case_study_solution_title ?: 'Our Solution', 'ecommerce_case_study_solution_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Heading for the solution section.</p>
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
                    <?php wp_editor($case_study_results_title ?: 'Results After 8 Months', 'ecommerce_case_study_results_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Heading for the results section.</p>
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
                    <?php wp_editor($case_study_link_text ?: 'Read Full Case Study', 'ecommerce_case_study_link_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Text for the case study link button.</p>
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
                    <?php wp_editor($process_title ?: 'Our E-commerce Marketing Process', 'ecommerce_process_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the process section.</p>
                </td>
            </tr>
        </table>

        <div id="process-steps-repeater">
            <?php if (!empty($process_steps)): ?>
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="repeater-field">
                        <h4>Step <?php echo $index + 1; ?></h4>
                        <p><strong>Step Title:</strong></p>
                        <?php wp_editor($step['title'], 'ecommerce_process_steps_' . $index . '_title', array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'ecommerce_process_steps[' . $index . '][title]')); ?>
                        <p><strong>Step Description:</strong></p>
                        <?php wp_editor($step['description'], 'ecommerce_process_steps_' . $index . '_description', array('textarea_rows' => 3, 'media_buttons' => false, 'textarea_name' => 'ecommerce_process_steps[' . $index . '][description]')); ?>
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
                    <?php wp_editor($insights_title ?: 'E-commerce Industry Insights', 'ecommerce_insights_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the insights section.</p>
                </td>
            </tr>
        </table>

        <div id="insights-repeater">
            <?php if (!empty($insights)): ?>
                <?php foreach ($insights as $index => $insight): ?>
                    <div class="repeater-field">
                        <h4>Insight <?php echo $index + 1; ?></h4>
                        <p><strong>Statistic:</strong></p>
                        <input type="text" 
                               name="ecommerce_insights[<?php echo $index; ?>][stat]" 
                               value="<?php echo esc_attr($insight['stat']); ?>"
                               placeholder="Statistic (e.g., 68%)" />
                        <p><strong>Insight Title:</strong></p>
                        <input type="text" 
                               name="ecommerce_insights[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($insight['title']); ?>"
                               placeholder="Insight title" />
                        <p><strong>Insight Description:</strong></p>
                        <?php wp_editor($insight['description'], 'ecommerce_insights_' . $index . '_description', array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'ecommerce_insights[' . $index . '][description]')); ?>
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
                    <?php wp_editor($testimonial_quote ?: 'Working with this team transformed our e-commerce performance. Their data-driven approach and deep understanding of our industry helped us achieve incredible results that exceeded all our expectations.', 'ecommerce_testimonial_quote', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
                    <p class="description">Customer testimonial quote content.</p>
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
                    <?php wp_editor($cta_title ?: 'Ready to Scale Your E-commerce Business?', 'ecommerce_cta_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the CTA section.</p>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <?php wp_editor($cta_subtitle ?: 'Let\'s discuss how our e-commerce marketing expertise can drive more traffic, conversions, and revenue for your online store.', 'ecommerce_cta_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                    <p class="description">Supporting text below the CTA title.</p>
                </td>
            </tr>
            <tr>
                <th><label for="ecommerce_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <?php wp_editor($cta_primary_text ?: 'Get Free E-commerce Audit', 'ecommerce_cta_primary_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Text for the primary CTA button.</p>
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
                    <?php wp_editor($cta_secondary_text ?: 'View E-commerce Success Stories', 'ecommerce_cta_secondary_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Text for the secondary CTA button.</p>
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
                                           placeholder="? Benefit item" />
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

    <script>    jQuery(document).ready(function($) {
        // Image upload functionality
        $('.upload-button').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            var container = $(this).closest('.image-upload-container');
            var frame = wp.media({
                title: 'Select Image',
                multiple: false
            });
            
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $('#' + target).val(attachment.url);
                
                // Update image preview without page refresh
                if (container.find('.image-preview').length) {
                    // Update existing preview
                    container.find('.image-preview').attr('src', attachment.url);
                } else {
                    // Add new preview and remove button
                    container.append('<img src="' + attachment.url + '" class="image-preview" />');
                    container.append('<button type="button" class="button remove-button" data-target="' + target + '">Remove</button>');
                    
                    // Add click handler for the new remove button
                    container.find('.remove-button').on('click', function(e) {
                        e.preventDefault();
                        var target = $(this).data('target');
                        $('#' + target).val('');
                        $(this).prev('.image-preview').remove();
                        $(this).remove();
                    });
                }
            });
            
            frame.open();
        });

        // Remove image
        $('.remove-button').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('#' + target).val('');
            $(this).prev('.image-preview').remove();
            $(this).remove();
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
    // Rich text fields that should use wp_kses_post
    $rich_text_fields = [
        'ecommerce_header_title',
        'ecommerce_header_subtitle', 
        'ecommerce_overview_title',
        'ecommerce_overview_content',
        'ecommerce_challenges_title',
        'ecommerce_services_title',
        'ecommerce_case_study_label',
        'ecommerce_case_study_title',
        'ecommerce_case_study_content',
        'ecommerce_case_study_challenge_title',
        'ecommerce_case_study_solution_title',
        'ecommerce_case_study_results_title',
        'ecommerce_case_study_link_text',
        'ecommerce_process_title',
        'ecommerce_insights_title',
        'ecommerce_testimonial_quote',
        'ecommerce_cta_title',
        'ecommerce_cta_subtitle',
        'ecommerce_cta_primary_text',
        'ecommerce_cta_secondary_text'
    ];

    if (is_array($value)) {
        foreach ($value as &$item) {
            if (is_array($item)) {
                foreach ($item as $key => &$subitem) {
                    if (is_array($subitem)) {
                        foreach ($subitem as &$sub_subitem) {
                            // Check if this is a rich text field in service descriptions or process descriptions
                            if ($key === 'title' || $key === 'description') {
                                $sub_subitem = wp_kses_post($sub_subitem);
                            } else {
                                $sub_subitem = sanitize_text_field($sub_subitem);
                            }
                        }
                    } else {
                        // Check if this is a rich text field in service/process items
                        if ($key === 'title' || $key === 'description') {
                            $subitem = wp_kses_post($subitem);
                        } else {
                            $subitem = sanitize_text_field($subitem);
                        }
                    }
                }
            } else {
                $item = sanitize_text_field($item);
            }
        }
        return $value;
    } else {
        // Single field values
        if (in_array($field, $rich_text_fields)) {
            return wp_kses_post($value);
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

