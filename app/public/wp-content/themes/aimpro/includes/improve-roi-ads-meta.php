<?php
// Improve ROI from Ads Page Meta Fields

function add_improve_roi_ads_meta_boxes() {
    global $post;
    
    // Only add to pages
    if (isset($post) && get_post_type($post) === 'page') {
        add_meta_box(
            'improve_roi_ads_meta_box',
            'Improve ROI from Ads Page Content',
            'improve_roi_ads_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_improve_roi_ads_meta_boxes', 11);

// Enqueue media scripts for image uploads
function enqueue_improve_roi_ads_admin_scripts($hook) {
    global $post;
    
    if ($hook == 'post-new.php' || $hook == 'post.php') {
        if (isset($post) && get_post_type($post) === 'page') {
            wp_enqueue_media();
            wp_enqueue_script('jquery');
        }
    }
}
add_action('admin_enqueue_scripts', 'enqueue_improve_roi_ads_admin_scripts');

function improve_roi_ads_meta_box_callback($post) {
    // Only show on improve ROI ads page template
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-improve-roi-ads.php' && $page_slug !== 'improve-roi-ads') {
        echo '<p>This meta box is designed for the "Improve ROI from Ads Solution Page" template or pages with slug "improve-roi-ads".</p>';
        echo '<p>Current template: ' . ($page_template ?: 'Default') . '</p>';
        echo '<p>Current slug: ' . ($page_slug ?: 'Not set yet') . '</p>';
        return;
    }

    wp_nonce_field('improve_roi_ads_meta_box', 'improve_roi_ads_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_improve_roi_ads_header_title', true) ?: 'Improve ROI from Ads';
    $header_subtitle = get_post_meta($post->ID, '_improve_roi_ads_header_subtitle', true) ?: 'Maximize your advertising spend with data-driven optimisation strategies that deliver measurable results';    // Solution Overview
    $overview_title = get_post_meta($post->ID, '_improve_roi_ads_overview_title', true) ?: 'Turn Ad Spend Into Profitable Growth';
    $overview_content = get_post_meta($post->ID, '_improve_roi_ads_overview_content', true) ?: 'Every advertising dollar should drive real business results. Our comprehensive ad optimisation strategies combine advanced analytics, conversion tracking, and continuous testing to maximise your return on ad spend (ROAS) while reducing customer acquisition costs and improving campaign performance.';
    $overview_image = get_post_meta($post->ID, '_improve_roi_ads_overview_image', true);
    
    // Challenges
    $challenges_title = get_post_meta($post->ID, '_improve_roi_ads_challenges_title', true) ?: 'Ad ROI Challenges We Solve:';
    $challenges = get_post_meta($post->ID, '_improve_roi_ads_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'High cost per acquisition (CPA)',
            'Poor ad targeting and audience selection',
            'Low conversion rates from ad traffic',
            'Wasted budget on underperforming campaigns',
            'Lack of proper conversion tracking',
            'Difficulty scaling profitable campaigns'
        );
    }

    // ROI optimisation Methods
    $methods_title = get_post_meta($post->ID, '_improve_roi_ads_methods_title', true) ?: 'Our Ad ROI optimisation Methods';
    $methods = get_post_meta($post->ID, '_improve_roi_ads_methods', true);
    if (empty($methods)) {
        $methods = array(
            array(
                'title' => 'Advanced Conversion Tracking',
                'description' => 'Implement comprehensive tracking systems to measure true ROI and optimise for the metrics that matter most.',
                'features' => array(
                    'Enhanced e-commerce tracking',
                    'Offline conversion tracking',
                    'Customer lifetime value analysis',
                    'Attribution modeling setup'
                )
            ),
            array(
                'title' => 'Audience optimisation',
                'description' => 'Refine targeting to reach high-value prospects while reducing spend on low-converting audiences.',
                'features' => array(
                    'Audience segmentation analysis',
                    'Lookalike audience creation',
                    'Negative audience exclusions',
                    'Custom intent audiences'
                )
            ),
            array(
                'title' => 'Campaign Structure optimisation',
                'description' => 'Restructure campaigns for better performance, clearer data insights, and more efficient budget allocation.',
                'features' => array(
                    'Single keyword ad groups (SKAGs)',
                    'Campaign segmentation strategies',
                    'Ad group theme optimisation',
                    'Budget allocation modeling'
                )
            ),
            array(
                'title' => 'Landing Page optimisation',
                'description' => 'Improve post-click experience to maximise conversion rates and reduce cost per conversion.',
                'features' => array(
                    'Landing page A/B testing',
                    'Conversion rate optimisation',
                    'Mobile experience optimisation',
                    'Page speed improvements'
                )
            )
        );
    }

    // Success Story
    $case_study_label = get_post_meta($post->ID, '_improve_roi_ads_case_study_label', true) ?: 'Success Story';
    $case_study_title = get_post_meta($post->ID, '_improve_roi_ads_case_study_title', true) ?: 'EcoHome Solutions: 320% ROI Improvement';
    $case_study_content = get_post_meta($post->ID, '_improve_roi_ads_case_study_content', true) ?: 'EcoHome Solutions was spending £15,000/month on Google Ads with poor returns and high cost per acquisition.';
    
    $case_study_challenge_title = get_post_meta($post->ID, '_improve_roi_ads_case_study_challenge_title', true) ?: 'The Challenge';
    $case_study_challenges = get_post_meta($post->ID, '_improve_roi_ads_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            '£15,000/month ad spend with poor ROI',
            'Cost per acquisition of £250+ per lead',
            'Low conversion rates (1.2%)',
            'No proper conversion tracking in place'
        );
    }
    
    $case_study_solution_title = get_post_meta($post->ID, '_improve_roi_ads_case_study_solution_title', true) ?: 'Our Solution';
    $case_study_solutions = get_post_meta($post->ID, '_improve_roi_ads_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Complete conversion tracking overhaul',
            'Campaign restructuring and optimisation',
            'Landing page redesign and testing',
            'Advanced bidding strategy implementation'
        );
    }

    // Case Study Results
    $case_study_results_title = get_post_meta($post->ID, '_improve_roi_ads_case_study_results_title', true) ?: 'Results After 5 Months';
    $case_study_results = get_post_meta($post->ID, '_improve_roi_ads_case_study_results', true);
    if (empty($case_study_results)) {
        $case_study_results = array(
            array(
                'number' => '320%',
                'label' => 'ROI Improvement'
            ),
            array(
                'number' => '65%',
                'label' => 'Cost Reduction'
            ),
            array(
                'number' => '180%',
                'label' => 'Conversion Rate Increase'
            ),
            array(
                'number' => '450%',
                'label' => 'Lead Volume Growth'
            )
        );
    }
    $case_study_link_text = get_post_meta($post->ID, '_improve_roi_ads_case_study_link_text', true) ?: 'Read Full Case Study';
    $case_study_link_url = get_post_meta($post->ID, '_improve_roi_ads_case_study_link_url', true) ?: '/case-studies';

    // ROI Process
    $process_title = get_post_meta($post->ID, '_improve_roi_ads_process_title', true) ?: 'Our Ad ROI optimisation Process';
    $process_steps = get_post_meta($post->ID, '_improve_roi_ads_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'number' => '1',
                'title' => 'Performance Audit',
                'description' => 'Comprehensive analysis of current ad performance, tracking setup, and ROI calculation methods.'
            ),
            array(
                'number' => '2',
                'title' => 'Tracking & Analytics Setup',
                'description' => 'Implement proper conversion tracking and analytics to measure true campaign performance and ROI.'
            ),
            array(
                'number' => '3',
                'title' => 'Campaign optimisation',
                'description' => 'Restructure campaigns, refine targeting, and optimise bidding strategies for improved performance.'
            ),
            array(
                'number' => '4',
                'title' => 'Continuous Testing',
                'description' => 'Ongoing A/B testing and optimisation to maintain and improve ROI over time.'
            )
        );
    }

    // Platform optimisation
    $platforms_title = get_post_meta($post->ID, '_improve_roi_ads_platforms_title', true) ?: 'Platform-Specific ROI optimisation';
    $platforms = get_post_meta($post->ID, '_improve_roi_ads_platforms', true);
    if (empty($platforms)) {
        $platforms = array(
            array(
                'title' => 'Google Ads optimisation',
                'features' => array(
                    'Smart bidding strategy implementation',
                    'Quality Score improvements',
                    'Search impression share analysis',
                    'Shopping campaign optimisation',
                    'Performance Max campaign setup'
                ),
                'results' => 'Average: 250% Google Ads ROI improvement'
            ),
            array(
                'title' => 'Facebook Ads optimisation',
                'features' => array(
                    'iOS 14.5+ tracking solutions',
                    'Conversion API implementation',
                    'Creative testing automation',
                    'Audience overlap elimination',
                    'Campaign budget optimisation'
                ),
                'results' => 'Average: 180% Facebook ROI improvement'
            ),
            array(
                'title' => 'LinkedIn Ads optimisation',
                'features' => array(
                    'B2B audience targeting refinement',
                    'Lead generation form optimisation',
                    'Sponsored content optimisation',
                    'Account-based marketing setup',
                    'LinkedIn matched audiences'
                ),
                'results' => 'Average: 200% LinkedIn ROI improvement'
            )
        );
    }

    // ROI Metrics
    $metrics_title = get_post_meta($post->ID, '_improve_roi_ads_metrics_title', true) ?: 'Key ROI Metrics We Track & optimise';
    $metrics = get_post_meta($post->ID, '_improve_roi_ads_metrics', true);
    if (empty($metrics)) {
        $metrics = array(
            array(
                'title' => 'Performance Metrics',
                'items' => array(
                    'Return on Ad Spend (ROAS)',
                    'Cost Per Acquisition (CPA)',
                    'Click-Through Rate (CTR)',
                    'Conversion Rate',
                    'Quality Score'
                )
            ),
            array(
                'title' => 'Business Metrics',
                'items' => array(
                    'Customer Lifetime Value (CLV)',
                    'Revenue Per Click',
                    'Profit Margin Per Campaign',
                    'Payback Period',
                    'Customer Acquisition Cost'
                )
            ),
            array(
                'title' => 'Efficiency Metrics',
                'items' => array(
                    'Impression Share',
                    'Search Lost IS (Budget)',
                    'Search Lost IS (Rank)',
                    'Cost Per Thousand (CPM)',
                    'Average Position'
                )
            ),
            array(
                'title' => 'Targeting Metrics',
                'items' => array(
                    'Audience Overlap',
                    'Demographic Performance',
                    'Geographic Efficiency',
                    'Device Performance',
                    'Time of Day optimisation'
                )
            )
        );
    }

    // Testimonial (no image)
    $testimonial_quote = get_post_meta($post->ID, '_improve_roi_ads_testimonial_quote', true) ?: 'Aimpro Digital took our ad performance from break-even to highly profitable. Our ROI improved by 320% and we\'re now getting 4x more leads for the same budget. Their optimisation expertise is exceptional.';
    $testimonial_name = get_post_meta($post->ID, '_improve_roi_ads_testimonial_name', true) ?: 'Michael Thompson';
    $testimonial_position = get_post_meta($post->ID, '_improve_roi_ads_testimonial_position', true) ?: 'Marketing Director, EcoHome Solutions';
    $testimonial_company = get_post_meta($post->ID, '_improve_roi_ads_testimonial_company', true) ?: 'Green Technology Company';
    
    // CTA section
    $cta_title = get_post_meta($post->ID, '_improve_roi_ads_cta_title', true) ?: 'Ready to Maximize Your Ad ROI?';
    $cta_subtitle = get_post_meta($post->ID, '_improve_roi_ads_cta_subtitle', true) ?: 'Let\'s analyse your current ad performance and create a strategy to dramatically improve your return on investment.';
    $cta_primary_text = get_post_meta($post->ID, '_improve_roi_ads_cta_primary_text', true) ?: 'Get Free Ad Account Audit';
    $cta_primary_url = get_post_meta($post->ID, '_improve_roi_ads_cta_primary_url', true) ?: '/contact';
    $cta_secondary_text = get_post_meta($post->ID, '_improve_roi_ads_cta_secondary_text', true) ?: 'View ROI Success Stories';
    $cta_secondary_url = get_post_meta($post->ID, '_improve_roi_ads_cta_secondary_url', true) ?: '/case-studies';
    $cta_features = get_post_meta($post->ID, '_improve_roi_ads_cta_features', true);
    if (empty($cta_features)) {
        $cta_features = array(
            '? Complete performance analysis',
            '? ROI improvement roadmap',
            '? Custom optimisation strategy'
        );
    }

    ?>
    <style>
        .improve-roi-ads-meta {
            max-width: 100%;
        }
        .improve-roi-ads-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .improve-roi-ads-meta .form-table td {
            padding: 15px 10px;
        }
        .improve-roi-ads-meta input[type="text"],
        .improve-roi-ads-meta textarea,
        .improve-roi-ads-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .improve-roi-ads-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .improve-roi-ads-meta .repeater-field {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }
        .improve-roi-ads-meta .repeater-field input {
            margin-bottom: 5px;
        }        .improve-roi-ads-meta h3 {
            margin-top: 30px;
            margin-bottom: 15px;
            padding: 10px;
            background: #0073aa;
            color: white;
            border-radius: 3px;
        }
        .improve-roi-ads-meta .image-preview {
            max-width: 200px;
            height: auto;
            display: block;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .improve-roi-ads-meta .upload-button,
        .improve-roi-ads-meta .remove-button {
            margin-right: 10px;
            margin-bottom: 10px;
        }
    </style>

    <div class="improve-roi-ads-meta">
        
        <!-- Header Section -->
        <h3>Header Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_header_title">Page Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_header_title" 
                           name="improve_roi_ads_header_title" 
                           value="<?php echo esc_attr($header_title); ?>"
                           placeholder="Improve ROI from Ads" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_header_subtitle">Page Subtitle</label></th>
                <td>
                    <textarea id="improve_roi_ads_header_subtitle" 
                              name="improve_roi_ads_header_subtitle"
                              placeholder="Maximize your advertising spend with data-driven optimisation strategies that deliver measurable results"><?php echo esc_textarea($header_subtitle); ?></textarea>
                </td>
            </tr>
        </table>

        <!-- Overview Section -->
        <h3>Overview Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_overview_title">Overview Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_overview_title" 
                           name="improve_roi_ads_overview_title" 
                           value="<?php echo esc_attr($overview_title); ?>"
                           placeholder="Turn Ad Spend Into Profitable Growth" />
                </td>
            </tr>            <tr>
                <th><label for="improve_roi_ads_overview_content">Overview Content</label></th>
                <td>
                    <textarea id="improve_roi_ads_overview_content" 
                              name="improve_roi_ads_overview_content"
                              placeholder="Every advertising dollar should drive real business results..."><?php echo esc_textarea($overview_content); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload-container">
                        <input type="hidden" 
                               id="improve_roi_ads_overview_image" 
                               name="improve_roi_ads_overview_image" 
                               value="<?php echo esc_attr($overview_image); ?>" />
                        <button type="button" class="button upload-button" data-target="improve_roi_ads_overview_image">Upload Image</button>
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" class="image-preview" />
                            <button type="button" class="button remove-button" data-target="improve_roi_ads_overview_image">Remove</button>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Challenges Section -->
        <h3>Challenges Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_challenges_title">Challenges Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_challenges_title" 
                           name="improve_roi_ads_challenges_title" 
                           value="<?php echo esc_attr($challenges_title); ?>"
                           placeholder="Ad ROI Challenges We Solve:" />
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
                                           name="improve_roi_ads_challenges[]" 
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

        <!-- ROI optimisation Methods Section -->
        <h3>ROI optimisation Methods Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_methods_title">Methods Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_methods_title" 
                           name="improve_roi_ads_methods_title" 
                           value="<?php echo esc_attr($methods_title); ?>"
                           placeholder="Our Ad ROI optimisation Methods" />
                </td>
            </tr>
        </table>
        
        <div id="methods-repeater">
            <?php if (!empty($methods)): ?>
                <?php foreach ($methods as $index => $method): ?>
                    <div class="repeater-field">
                        <h4>Method <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="improve_roi_ads_methods[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($method['title']); ?>"
                               placeholder="Method title" />
                        <textarea name="improve_roi_ads_methods[<?php echo $index; ?>][description]" 
                                  placeholder="Method description"><?php echo esc_textarea($method['description']); ?></textarea>
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($method['features'] as $feat_index => $feature): ?>
                                <input type="text" 
                                       name="improve_roi_ads_methods[<?php echo $index; ?>][features][]" 
                                       value="<?php echo esc_attr($feature); ?>"
                                       placeholder="Feature" />
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button add-feature" data-method-index="<?php echo $index; ?>">Add Feature</button>
                        <button type="button" class="button remove-repeater-item">Remove Method</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-method">Add Method</button>

        <!-- Case Study Section -->
        <h3>Success Story Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_case_study_label">Case Study Label</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_case_study_label" 
                           name="improve_roi_ads_case_study_label" 
                           value="<?php echo esc_attr($case_study_label); ?>"
                           placeholder="Success Story" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_case_study_title">Case Study Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_case_study_title" 
                           name="improve_roi_ads_case_study_title" 
                           value="<?php echo esc_attr($case_study_title); ?>"
                           placeholder="EcoHome Solutions: 320% ROI Improvement" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_case_study_content">Case Study Content</label></th>
                <td>
                    <textarea id="improve_roi_ads_case_study_content" 
                              name="improve_roi_ads_case_study_content"
                              placeholder="Case study description..."><?php echo esc_textarea($case_study_content); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_case_study_challenge_title">Challenge Section Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_case_study_challenge_title" 
                           name="improve_roi_ads_case_study_challenge_title" 
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
                                           name="improve_roi_ads_case_study_challenges[]" 
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
                <th><label for="improve_roi_ads_case_study_solution_title">Solution Section Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_case_study_solution_title" 
                           name="improve_roi_ads_case_study_solution_title" 
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
                                           name="improve_roi_ads_case_study_solutions[]" 
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
                <th><label for="improve_roi_ads_case_study_results_title">Results Section Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_case_study_results_title" 
                           name="improve_roi_ads_case_study_results_title" 
                           value="<?php echo esc_attr($case_study_results_title); ?>"
                           placeholder="Results After 5 Months" />
                </td>
            </tr>
        </table>
        
        <div id="case-study-results-repeater">
            <?php if (!empty($case_study_results)): ?>
                <?php foreach ($case_study_results as $index => $result): ?>
                    <div class="repeater-field">
                        <h4>Result <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="improve_roi_ads_case_study_results[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($result['number']); ?>"
                               placeholder="Result number (e.g., 320%)" />
                        <input type="text" 
                               name="improve_roi_ads_case_study_results[<?php echo $index; ?>][label]" 
                               value="<?php echo esc_attr($result['label']); ?>"
                               placeholder="Result label" />
                        <button type="button" class="button remove-repeater-item">Remove Result</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-result">Add Result</button>
        
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_case_study_link_text">Case Study Link Text</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_case_study_link_text" 
                           name="improve_roi_ads_case_study_link_text" 
                           value="<?php echo esc_attr($case_study_link_text); ?>"
                           placeholder="Read Full Case Study" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_case_study_link_url">Case Study Link URL</label></th>
                <td>
                    <input type="url" 
                           id="improve_roi_ads_case_study_link_url" 
                           name="improve_roi_ads_case_study_link_url" 
                           value="<?php echo esc_url($case_study_link_url); ?>"
                           placeholder="/case-studies" />
                </td>
            </tr>
        </table>

        <!-- Process Section -->
        <h3>Process Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_process_title">Process Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_process_title" 
                           name="improve_roi_ads_process_title" 
                           value="<?php echo esc_attr($process_title); ?>"
                           placeholder="Our Ad ROI optimisation Process" />
                </td>
            </tr>
        </table>

        <div id="process-steps-repeater">
            <?php if (!empty($process_steps)): ?>
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="repeater-field">
                        <h4>Step <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="improve_roi_ads_process_steps[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($step['number']); ?>"
                               placeholder="Step number" />
                        <input type="text" 
                               name="improve_roi_ads_process_steps[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($step['title']); ?>"
                               placeholder="Step title" />
                        <textarea name="improve_roi_ads_process_steps[<?php echo $index; ?>][description]" 
                                  placeholder="Step description"><?php echo esc_textarea($step['description']); ?></textarea>
                        <button type="button" class="button remove-repeater-item">Remove Step</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-process-step">Add Process Step</button>

        <!-- Platform optimisation Section -->
        <h3>Platform optimisation Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_platforms_title">Platforms Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_platforms_title" 
                           name="improve_roi_ads_platforms_title" 
                           value="<?php echo esc_attr($platforms_title); ?>"
                           placeholder="Platform-Specific ROI optimisation" />
                </td>
            </tr>
        </table>

        <div id="platforms-repeater">
            <?php if (!empty($platforms)): ?>
                <?php foreach ($platforms as $index => $platform): ?>
                    <div class="repeater-field">
                        <h4>Platform <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="improve_roi_ads_platforms[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($platform['title']); ?>"
                               placeholder="Platform title" />
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($platform['features'] as $feat_index => $feature): ?>
                                <input type="text" 
                                       name="improve_roi_ads_platforms[<?php echo $index; ?>][features][]" 
                                       value="<?php echo esc_attr($feature); ?>"
                                       placeholder="Feature" />
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button add-platform-feature" data-platform-index="<?php echo $index; ?>">Add Feature</button>
                        <input type="text" 
                               name="improve_roi_ads_platforms[<?php echo $index; ?>][results]" 
                               value="<?php echo esc_attr($platform['results']); ?>"
                               placeholder="Average results" />
                        <button type="button" class="button remove-repeater-item">Remove Platform</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-platform">Add Platform</button>

        <!-- Metrics Section -->
        <h3>Metrics Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_metrics_title">Metrics Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_metrics_title" 
                           name="improve_roi_ads_metrics_title" 
                           value="<?php echo esc_attr($metrics_title); ?>"
                           placeholder="Key ROI Metrics We Track & optimise" />
                </td>
            </tr>
        </table>

        <div id="metrics-repeater">
            <?php if (!empty($metrics)): ?>
                <?php foreach ($metrics as $index => $metric): ?>
                    <div class="repeater-field">
                        <h4>Metric Category <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="improve_roi_ads_metrics[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($metric['title']); ?>"
                               placeholder="Metric category title" />
                        <div>
                            <strong>Metrics:</strong>
                            <?php foreach ($metric['items'] as $item_index => $item): ?>
                                <input type="text" 
                                       name="improve_roi_ads_metrics[<?php echo $index; ?>][items][]" 
                                       value="<?php echo esc_attr($item); ?>"
                                       placeholder="Metric item" />
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button add-metric-item" data-metric-index="<?php echo $index; ?>">Add Metric Item</button>
                        <button type="button" class="button remove-repeater-item">Remove Category</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-metric-category">Add Metric Category</button>

        <!-- Testimonial Section (No Image) -->
        <h3>Testimonial Section (No Image)</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_testimonial_quote">Testimonial Quote</label></th>
                <td>
                    <textarea id="improve_roi_ads_testimonial_quote" 
                              name="improve_roi_ads_testimonial_quote"
                              placeholder="Customer testimonial quote..."><?php echo esc_textarea($testimonial_quote); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_testimonial_name">Customer Name</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_testimonial_name" 
                           name="improve_roi_ads_testimonial_name" 
                           value="<?php echo esc_attr($testimonial_name); ?>"
                           placeholder="Customer Name" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_testimonial_position">Customer Position</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_testimonial_position" 
                           name="improve_roi_ads_testimonial_position" 
                           value="<?php echo esc_attr($testimonial_position); ?>"
                           placeholder="Position & Company" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_testimonial_company">Company Description</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_testimonial_company" 
                           name="improve_roi_ads_testimonial_company" 
                           value="<?php echo esc_attr($testimonial_company); ?>"
                           placeholder="Company Type" />
                </td>
            </tr>
        </table>

        <!-- CTA Section -->
        <h3>CTA Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="improve_roi_ads_cta_title">CTA Title</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_cta_title" 
                           name="improve_roi_ads_cta_title" 
                           value="<?php echo esc_attr($cta_title); ?>"
                           placeholder="Ready to Maximize Your Ad ROI?" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <textarea id="improve_roi_ads_cta_subtitle" 
                              name="improve_roi_ads_cta_subtitle"
                              placeholder="Let's analyse your current ad performance and create a strategy to dramatically improve your return on investment."><?php echo esc_textarea($cta_subtitle); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_cta_primary_text" 
                           name="improve_roi_ads_cta_primary_text" 
                           value="<?php echo esc_attr($cta_primary_text); ?>"
                           placeholder="Get Free Ad Account Audit" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_cta_primary_url">Primary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="improve_roi_ads_cta_primary_url" 
                           name="improve_roi_ads_cta_primary_url" 
                           value="<?php echo esc_url($cta_primary_url); ?>"
                           placeholder="/contact" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_cta_secondary_text">Secondary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="improve_roi_ads_cta_secondary_text" 
                           name="improve_roi_ads_cta_secondary_text" 
                           value="<?php echo esc_attr($cta_secondary_text); ?>"
                           placeholder="View ROI Success Stories" />
                </td>
            </tr>
            <tr>
                <th><label for="improve_roi_ads_cta_secondary_url">Secondary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="improve_roi_ads_cta_secondary_url" 
                           name="improve_roi_ads_cta_secondary_url" 
                           value="<?php echo esc_url($cta_secondary_url); ?>"
                           placeholder="/case-studies" />
                </td>
            </tr>
            <tr>
                <th><label>CTA Features</label></th>
                <td>
                    <div id="cta-features-repeater">
                        <?php if (!empty($cta_features)): ?>
                            <?php foreach ($cta_features as $feature): ?>
                                <div class="repeater-field">
                                    <input type="text" 
                                           name="improve_roi_ads_cta_features[]" 
                                           value="<?php echo esc_attr($feature); ?>"
                                           placeholder="? Feature item" />
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="cta-features-repeater">Add Feature</button>
                </td>
            </tr>
        </table>

    </div>

    <script>
    jQuery(document).ready(function($) {
        // Add repeater item
        $('.add-repeater-item').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            var newField = '<div class="repeater-field">' +
                          '<input type="text" name="improve_roi_ads_' + target.replace('-repeater', '').replace(/-/g, '_') + '[]" placeholder="Item" />' +
                          '<button type="button" class="button remove-repeater-item">Remove</button>' +
                          '</div>';
            $('#' + target).append(newField);
        });

        // Add method
        $('.add-method').click(function(e) {
            e.preventDefault();
            var index = $('#methods-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Method ' + (index + 1) + '</h4>' +
                          '<input type="text" name="improve_roi_ads_methods[' + index + '][title]" placeholder="Method title" />' +
                          '<textarea name="improve_roi_ads_methods[' + index + '][description]" placeholder="Method description"></textarea>' +
                          '<div><strong>Features:</strong>' +
                          '<input type="text" name="improve_roi_ads_methods[' + index + '][features][]" placeholder="Feature" />' +
                          '</div>' +
                          '<button type="button" class="button add-feature" data-method-index="' + index + '">Add Feature</button>' +
                          '<button type="button" class="button remove-repeater-item">Remove Method</button>' +
                          '</div>';
            $('#methods-repeater').append(newField);
        });

        // Add feature to method
        $(document).on('click', '.add-feature', function(e) {
            e.preventDefault();
            var methodIndex = $(this).data('method-index');
            var container = $(this).prev('div');
            var newFeature = '<input type="text" name="improve_roi_ads_methods[' + methodIndex + '][features][]" placeholder="Feature" />';
            container.append(newFeature);
        });

        // Add process step
        $('.add-process-step').click(function(e) {
            e.preventDefault();
            var index = $('#process-steps-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Step ' + (index + 1) + '</h4>' +
                          '<input type="text" name="improve_roi_ads_process_steps[' + index + '][number]" placeholder="Step number" />' +
                          '<input type="text" name="improve_roi_ads_process_steps[' + index + '][title]" placeholder="Step title" />' +
                          '<textarea name="improve_roi_ads_process_steps[' + index + '][description]" placeholder="Step description"></textarea>' +
                          '<button type="button" class="button remove-repeater-item">Remove Step</button>' +
                          '</div>';
            $('#process-steps-repeater').append(newField);
        });

        // Add result
        $('.add-result').click(function(e) {
            e.preventDefault();
            var index = $('#case-study-results-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Result ' + (index + 1) + '</h4>' +
                          '<input type="text" name="improve_roi_ads_case_study_results[' + index + '][number]" placeholder="Result number (e.g., 320%)" />' +
                          '<input type="text" name="improve_roi_ads_case_study_results[' + index + '][label]" placeholder="Result label" />' +
                          '<button type="button" class="button remove-repeater-item">Remove Result</button>' +
                          '</div>';
            $('#case-study-results-repeater').append(newField);
        });

        // Add platform
        $('.add-platform').click(function(e) {
            e.preventDefault();
            var index = $('#platforms-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Platform ' + (index + 1) + '</h4>' +
                          '<input type="text" name="improve_roi_ads_platforms[' + index + '][title]" placeholder="Platform title" />' +
                          '<div><strong>Features:</strong>' +
                          '<input type="text" name="improve_roi_ads_platforms[' + index + '][features][]" placeholder="Feature" />' +
                          '</div>' +
                          '<button type="button" class="button add-platform-feature" data-platform-index="' + index + '">Add Feature</button>' +
                          '<input type="text" name="improve_roi_ads_platforms[' + index + '][results]" placeholder="Average results" />' +
                          '<button type="button" class="button remove-repeater-item">Remove Platform</button>' +
                          '</div>';
            $('#platforms-repeater').append(newField);
        });

        // Add feature to platform
        $(document).on('click', '.add-platform-feature', function(e) {
            e.preventDefault();
            var platformIndex = $(this).data('platform-index');
            var container = $(this).prev('div');
            var newFeature = '<input type="text" name="improve_roi_ads_platforms[' + platformIndex + '][features][]" placeholder="Feature" />';
            container.append(newFeature);
        });

        // Add metric category
        $('.add-metric-category').click(function(e) {
            e.preventDefault();
            var index = $('#metrics-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Metric Category ' + (index + 1) + '</h4>' +
                          '<input type="text" name="improve_roi_ads_metrics[' + index + '][title]" placeholder="Metric category title" />' +
                          '<div><strong>Metrics:</strong>' +
                          '<input type="text" name="improve_roi_ads_metrics[' + index + '][items][]" placeholder="Metric item" />' +
                          '</div>' +
                          '<button type="button" class="button add-metric-item" data-metric-index="' + index + '">Add Metric Item</button>' +
                          '<button type="button" class="button remove-repeater-item">Remove Category</button>' +
                          '</div>';
            $('#metrics-repeater').append(newField);
        });

        // Add metric item
        $(document).on('click', '.add-metric-item', function(e) {
            e.preventDefault();
            var metricIndex = $(this).data('metric-index');
            var container = $(this).prev('div');
            var newItem = '<input type="text" name="improve_roi_ads_metrics[' + metricIndex + '][items][]" placeholder="Metric item" />';
            container.append(newItem);
        });        // Remove repeater item
        $(document).on('click', '.remove-repeater-item', function(e) {
            e.preventDefault();
            $(this).closest('.repeater-field').remove();
        });

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

        // Ensure form has proper enctype for file uploads
        $('#post').attr('enctype', 'multipart/form-data');
    });
    </script>
    <?php
}

function sanitize_improve_roi_ads_meta_value($field, $value) {
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
        if (strpos($field, 'content') !== false || strpos($field, 'description') !== false || strpos($field, 'quote') !== false || strpos($field, 'subtitle') !== false) {
            return sanitize_textarea_field($value);
        } elseif (strpos($field, 'url') !== false) {
            return esc_url_raw($value);
        } else {
            return sanitize_text_field($value);
        }
    }
}

function save_improve_roi_ads_meta_box_data($post_id) {
    if (!isset($_POST['improve_roi_ads_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['improve_roi_ads_meta_box_nonce'], 'improve_roi_ads_meta_box')) {
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
        'improve_roi_ads_header_title',
        'improve_roi_ads_header_subtitle',        'improve_roi_ads_overview_title',
        'improve_roi_ads_overview_content',
        'improve_roi_ads_overview_image',
        'improve_roi_ads_challenges_title',
        'improve_roi_ads_challenges',
        'improve_roi_ads_methods_title',
        'improve_roi_ads_methods',
        'improve_roi_ads_case_study_label',
        'improve_roi_ads_case_study_title',
        'improve_roi_ads_case_study_content',
        'improve_roi_ads_case_study_challenge_title',
        'improve_roi_ads_case_study_challenges',
        'improve_roi_ads_case_study_solution_title',
        'improve_roi_ads_case_study_solutions',
        'improve_roi_ads_case_study_results_title',
        'improve_roi_ads_case_study_results',
        'improve_roi_ads_case_study_link_text',
        'improve_roi_ads_case_study_link_url',
        'improve_roi_ads_process_title',
        'improve_roi_ads_process_steps',
        'improve_roi_ads_platforms_title',
        'improve_roi_ads_platforms',
        'improve_roi_ads_metrics_title',
        'improve_roi_ads_metrics',
        'improve_roi_ads_testimonial_quote',
        'improve_roi_ads_testimonial_name',
        'improve_roi_ads_testimonial_position',
        'improve_roi_ads_testimonial_company',
        'improve_roi_ads_cta_title',
        'improve_roi_ads_cta_subtitle',
        'improve_roi_ads_cta_primary_text',
        'improve_roi_ads_cta_primary_url',
        'improve_roi_ads_cta_secondary_text',
        'improve_roi_ads_cta_secondary_url',
        'improve_roi_ads_cta_features'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_improve_roi_ads_meta_value($field, $_POST[$field]));
        }
    }
}
add_action('save_post', 'save_improve_roi_ads_meta_box_data');
