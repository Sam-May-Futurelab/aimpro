<?php
// Automate Marketing Page Meta Fields

function add_automate_marketing_meta_boxes() {
    global $post;
    
    // Only add to pages
    if (isset($post) && get_post_type($post) === 'page') {
        add_meta_box(
            'automate_marketing_meta_box',
            'Automate Marketing Page Content',
            'automate_marketing_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_automate_marketing_meta_boxes', 11);

function automate_marketing_meta_box_callback($post) {
    // Only show on automate marketing page template
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-automate-marketing.php' && $page_slug !== 'automate-marketing') {
        echo '<p>This meta box is designed for the "Automate Marketing Solution Page" template or pages with slug "automate-marketing".</p>';
        echo '<p>Current template: ' . ($page_template ?: 'Default') . '</p>';
        echo '<p>Current slug: ' . ($page_slug ?: 'Not set yet') . '</p>';
        return;
    }

    wp_nonce_field('automate_marketing_meta_box', 'automate_marketing_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_automate_marketing_header_title', true) ?: 'Automate Marketing';
    $header_subtitle = get_post_meta($post->ID, '_automate_marketing_header_subtitle', true) ?: 'Streamline your marketing processes with intelligent automation that works 24/7';

    // Solution Overview
    $overview_title = get_post_meta($post->ID, '_automate_marketing_overview_title', true) ?: 'Transform Manual Tasks Into Automated Success';
    $overview_content = get_post_meta($post->ID, '_automate_marketing_overview_content', true) ?: 'Marketing automation eliminates repetitive tasks while delivering personalized experiences at scale. Our comprehensive automation strategies help you nurture leads, engage customers, and drive conversions without constant manual intervention, freeing your team to focus on strategy and growth.';
    
    // Challenges
    $challenges_title = get_post_meta($post->ID, '_automate_marketing_challenges_title', true) ?: 'Marketing Automation Challenges We Solve:';
    $challenges = get_post_meta($post->ID, '_automate_marketing_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'Time-consuming manual marketing tasks',
            'Inconsistent lead follow-up',
            'Difficulty scaling personalized campaigns',
            'Poor lead scoring and qualification',
            'Disconnected marketing and sales processes',
            'Lack of behavioral trigger campaigns'
        );
    }

    // Automation Solutions
    $solutions_title = get_post_meta($post->ID, '_automate_marketing_solutions_title', true) ?: 'Our Marketing Automation Solutions';
    $solutions = get_post_meta($post->ID, '_automate_marketing_solutions', true);
    if (empty($solutions)) {
        $solutions = array(
            array(
                'title' => 'Email Marketing Automation',
                'description' => 'Create sophisticated email workflows that nurture leads and customers through personalized journeys.',
                'features' => array(
                    'Welcome email sequences',
                    'Abandoned cart recovery',
                    'Behavioral trigger campaigns',
                    'Re-engagement workflows'
                )
            ),
            array(
                'title' => 'Lead Scoring & Nurturing',
                'description' => 'Automatically score and segment leads based on behavior, demographics, and engagement levels.',
                'features' => array(
                    'Dynamic lead scoring models',
                    'Progressive profiling',
                    'Automated list segmentation',
                    'Sales-ready lead alerts'
                )
            ),
            array(
                'title' => 'Social Media Automation',
                'description' => 'Schedule, publish, and optimize social media content across multiple platforms automatically.',
                'features' => array(
                    'Content scheduling & publishing',
                    'Social listening automation',
                    'Automated response systems',
                    'Cross-platform campaigns'
                )
            ),
            array(
                'title' => 'CRM Integration & Workflows',
                'description' => 'Connect your marketing tools with sales systems for seamless lead handoffs and follow-up.',
                'features' => array(
                    'CRM data synchronization',
                    'Sales notification triggers',
                    'Pipeline automation',
                    'Customer lifecycle tracking'
                )
            )
        );
    }

    // Success Story
    $case_study_label = get_post_meta($post->ID, '_automate_marketing_case_study_label', true) ?: 'Success Story';
    $case_study_title = get_post_meta($post->ID, '_automate_marketing_case_study_title', true) ?: 'GrowthTech: 60% Time Savings + 300% Lead Conversion';
    $case_study_content = get_post_meta($post->ID, '_automate_marketing_case_study_content', true) ?: 'GrowthTech, a SaaS company, was spending 40+ hours per week on manual marketing tasks and struggling with inconsistent lead follow-up.';
    
    $case_study_challenge_title = get_post_meta($post->ID, '_automate_marketing_case_study_challenge_title', true) ?: 'The Challenge';
    $case_study_challenges = get_post_meta($post->ID, '_automate_marketing_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            '40+ hours weekly on manual marketing tasks',
            'Inconsistent lead follow-up processes',
            'Poor lead qualification and scoring',
            'Disconnected marketing and sales teams'
        );
    }
    
    $case_study_solution_title = get_post_meta($post->ID, '_automate_marketing_case_study_solution_title', true) ?: 'Our Solution';
    $case_study_solutions = get_post_meta($post->ID, '_automate_marketing_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Complete marketing automation setup',
            'Lead scoring and nurturing workflows',
            'CRM integration and sales automation',
            'Behavioral trigger campaign implementation'
        );
    }

    // Results Section
    $results_title = get_post_meta($post->ID, '_automate_marketing_results_title', true) ?: 'Results After 3 Months';
    $results = get_post_meta($post->ID, '_automate_marketing_results', true);
    if (empty($results)) {
        $results = array(
            array(
                'number' => '60%',
                'label' => 'Time Savings'
            ),
            array(
                'number' => '300%',
                'label' => 'Lead Conversion Increase'
            ),
            array(
                'number' => '85%',
                'label' => 'Email Open Rate'
            ),
            array(
                'number' => '45%',
                'label' => 'Sales Cycle Reduction'
            )
        );
    }
    $case_study_link_text = get_post_meta($post->ID, '_automate_marketing_case_study_link_text', true) ?: 'Read Full Case Study';
    $case_study_link_url = get_post_meta($post->ID, '_automate_marketing_case_study_link_url', true) ?: '/case-studies';

    // Automation Process
    $process_title = get_post_meta($post->ID, '_automate_marketing_process_title', true) ?: 'Our Marketing Automation Process';
    $process_steps = get_post_meta($post->ID, '_automate_marketing_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'number' => '1',
                'title' => 'Current State Analysis',
                'description' => 'Audit your existing marketing processes to identify automation opportunities and pain points.'
            ),
            array(
                'number' => '2',
                'title' => 'Workflow Design & Mapping',
                'description' => 'Create comprehensive automation workflows that align with your customer journey and business goals.'
            ),
            array(
                'number' => '3',
                'title' => 'Platform Setup & Integration',
                'description' => 'Configure automation tools, integrate systems, and set up tracking for optimal performance.'
            ),
            array(
                'number' => '4',
                'title' => 'Testing & Optimization',
                'description' => 'Monitor performance, A/B test workflows, and continuously optimize for better results.'
            )
        );
    }

    // Benefits Section
    $benefits_title = get_post_meta($post->ID, '_automate_marketing_benefits_title', true) ?: 'Marketing Automation Benefits';
    $benefits = get_post_meta($post->ID, '_automate_marketing_benefits', true);
    if (empty($benefits)) {
        $benefits = array(
            array(
                'title' => 'Time Savings',
                'description' => 'Save 40+ hours per week by automating repetitive marketing tasks and workflows.',
                'icon_class' => 'fas fa-clock'
            ),
            array(
                'title' => 'Better Lead Quality',
                'description' => 'Improve lead scoring and qualification to focus sales efforts on highest-value prospects.',
                'icon_class' => 'fas fa-crosshairs'
            ),
            array(
                'title' => 'Increased Conversions',
                'description' => 'Nurture leads more effectively with personalized, timely communications that drive action.',
                'icon_class' => 'fas fa-chart-line'
            ),
            array(
                'title' => 'Consistent Execution',
                'description' => 'Ensure every lead receives consistent, professional follow-up regardless of team capacity.',
                'icon_class' => 'fas fa-sync-alt'
            )
        );
    }

    // Tools Section
    $tools_title = get_post_meta($post->ID, '_automate_marketing_tools_title', true) ?: 'Marketing Automation Platforms We Use';
    $tools_categories = get_post_meta($post->ID, '_automate_marketing_tools_categories', true);
    if (empty($tools_categories)) {
        $tools_categories = array(
            array(
                'title' => 'Email Automation',
                'tools' => array(
                    'HubSpot Marketing Hub',
                    'Mailchimp Automation',
                    'ActiveCampaign',
                    'ConvertKit'
                )
            ),
            array(
                'title' => 'CRM Integration',
                'tools' => array(
                    'Salesforce Automation',
                    'HubSpot CRM',
                    'Pipedrive Workflows',
                    'Zoho CRM Plus'
                )
            ),
            array(
                'title' => 'Social Media Automation',
                'tools' => array(
                    'Hootsuite Scheduling',
                    'Buffer Automation',
                    'Sprout Social',
                    'Later Scheduling'
                )
            ),
            array(
                'title' => 'Analytics & Reporting',
                'tools' => array(
                    'Google Analytics 4',
                    'HubSpot Analytics',
                    'Mixpanel Events',
                    'Custom Dashboards'
                )
            )
        );
    }

    // Testimonial (no image)
    $testimonial_quote = get_post_meta($post->ID, '_automate_marketing_testimonial_quote', true) ?: 'The marketing automation system Aimpro Digital implemented has been a game-changer. We\'ve saved 25 hours per week on manual tasks and our lead conversion rate has tripled. The ROI has been incredible.';
    $testimonial_name = get_post_meta($post->ID, '_automate_marketing_testimonial_name', true) ?: 'David Chen';
    $testimonial_position = get_post_meta($post->ID, '_automate_marketing_testimonial_position', true) ?: 'VP of Marketing, GrowthTech';
    $testimonial_company = get_post_meta($post->ID, '_automate_marketing_testimonial_company', true) ?: 'SaaS Platform Company';
    
    // CTA section
    $cta_title = get_post_meta($post->ID, '_automate_marketing_cta_title', true) ?: 'Ready to Automate Your Marketing?';
    $cta_subtitle = get_post_meta($post->ID, '_automate_marketing_cta_subtitle', true) ?: 'Let\'s create a custom automation strategy that saves you time while improving your marketing results.';
    $cta_primary_text = get_post_meta($post->ID, '_automate_marketing_cta_primary_text', true) ?: 'Get Free Automation Audit';
    $cta_primary_url = get_post_meta($post->ID, '_automate_marketing_cta_primary_url', true) ?: '/contact';
    $cta_secondary_text = get_post_meta($post->ID, '_automate_marketing_cta_secondary_text', true) ?: 'View Automation Success Stories';
    $cta_secondary_url = get_post_meta($post->ID, '_automate_marketing_cta_secondary_url', true) ?: '/case-studies';
    $cta_features = get_post_meta($post->ID, '_automate_marketing_cta_features', true);
    if (empty($cta_features)) {
        $cta_features = array(
            '✓ Custom workflow design',
            '✓ Full platform integration',
            '✓ Ongoing optimization'
        );
    }

    ?>
    <style>
        .automate-marketing-meta {
            max-width: 100%;
        }
        .automate-marketing-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .automate-marketing-meta .form-table td {
            padding: 15px 10px;
        }
        .automate-marketing-meta input[type="text"],
        .automate-marketing-meta textarea,
        .automate-marketing-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .automate-marketing-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .automate-marketing-meta .repeater-field {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }
        .automate-marketing-meta .repeater-field input {
            margin-bottom: 5px;
        }
        .automate-marketing-meta h3 {
            margin-top: 30px;
            margin-bottom: 15px;
            padding: 10px;
            background: #0073aa;
            color: white;
            border-radius: 3px;
        }
    </style>

    <div class="automate-marketing-meta">
        
        <!-- Header Section -->
        <h3>Header Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_header_title">Page Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_header_title" 
                           name="automate_marketing_header_title" 
                           value="<?php echo esc_attr($header_title); ?>"
                           placeholder="Automate Marketing" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_header_subtitle">Page Subtitle</label></th>
                <td>
                    <textarea id="automate_marketing_header_subtitle" 
                              name="automate_marketing_header_subtitle"
                              placeholder="Streamline your marketing processes with intelligent automation that works 24/7"><?php echo esc_textarea($header_subtitle); ?></textarea>
                </td>
            </tr>
        </table>

        <!-- Overview Section -->
        <h3>Overview Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_overview_title">Overview Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_overview_title" 
                           name="automate_marketing_overview_title" 
                           value="<?php echo esc_attr($overview_title); ?>"
                           placeholder="Transform Manual Tasks Into Automated Success" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_overview_content">Overview Content</label></th>
                <td>
                    <textarea id="automate_marketing_overview_content" 
                              name="automate_marketing_overview_content"
                              placeholder="Marketing automation eliminates repetitive tasks..."><?php echo esc_textarea($overview_content); ?></textarea>
                </td>
            </tr>
        </table>

        <!-- Challenges Section -->
        <h3>Challenges Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_challenges_title">Challenges Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_challenges_title" 
                           name="automate_marketing_challenges_title" 
                           value="<?php echo esc_attr($challenges_title); ?>"
                           placeholder="Marketing Automation Challenges We Solve:" />
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
                                           name="automate_marketing_challenges[]" 
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

        <!-- Automation Solutions Section -->
        <h3>Automation Solutions Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_solutions_title">Solutions Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_solutions_title" 
                           name="automate_marketing_solutions_title" 
                           value="<?php echo esc_attr($solutions_title); ?>"
                           placeholder="Our Marketing Automation Solutions" />
                </td>
            </tr>
        </table>
        
        <div id="solutions-repeater">
            <?php if (!empty($solutions)): ?>
                <?php foreach ($solutions as $index => $solution): ?>
                    <div class="repeater-field">
                        <h4>Solution <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="automate_marketing_solutions[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($solution['title']); ?>"
                               placeholder="Solution title" />
                        <textarea name="automate_marketing_solutions[<?php echo $index; ?>][description]" 
                                  placeholder="Solution description"><?php echo esc_textarea($solution['description']); ?></textarea>
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($solution['features'] as $feat_index => $feature): ?>
                                <input type="text" 
                                       name="automate_marketing_solutions[<?php echo $index; ?>][features][]" 
                                       value="<?php echo esc_attr($feature); ?>"
                                       placeholder="Feature" />
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button add-feature" data-solution-index="<?php echo $index; ?>">Add Feature</button>
                        <button type="button" class="button remove-repeater-item">Remove Solution</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-solution">Add Solution</button>

        <!-- Case Study Section -->
        <h3>Success Story Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_case_study_label">Case Study Label</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_case_study_label" 
                           name="automate_marketing_case_study_label" 
                           value="<?php echo esc_attr($case_study_label); ?>"
                           placeholder="Success Story" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_case_study_title">Case Study Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_case_study_title" 
                           name="automate_marketing_case_study_title" 
                           value="<?php echo esc_attr($case_study_title); ?>"
                           placeholder="GrowthTech: 60% Time Savings + 300% Lead Conversion" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_case_study_content">Case Study Content</label></th>
                <td>
                    <textarea id="automate_marketing_case_study_content" 
                              name="automate_marketing_case_study_content"
                              placeholder="Case study description..."><?php echo esc_textarea($case_study_content); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_case_study_challenge_title">Challenge Section Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_case_study_challenge_title" 
                           name="automate_marketing_case_study_challenge_title" 
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
                                           name="automate_marketing_case_study_challenges[]" 
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
                <th><label for="automate_marketing_case_study_solution_title">Solution Section Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_case_study_solution_title" 
                           name="automate_marketing_case_study_solution_title" 
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
                                           name="automate_marketing_case_study_solutions[]" 
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
        </table>

        <!-- Results Section -->
        <h3>Results Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_results_title">Results Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_results_title" 
                           name="automate_marketing_results_title" 
                           value="<?php echo esc_attr($results_title); ?>"
                           placeholder="Results After 3 Months" />
                </td>
            </tr>
        </table>

        <div id="results-repeater">
            <?php if (!empty($results)): ?>
                <?php foreach ($results as $index => $result): ?>
                    <div class="repeater-field">
                        <h4>Result <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="automate_marketing_results[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($result['number']); ?>"
                               placeholder="Result number (e.g. 60%)" />
                        <input type="text" 
                               name="automate_marketing_results[<?php echo $index; ?>][label]" 
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
                <th><label for="automate_marketing_case_study_link_text">Case Study Link Text</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_case_study_link_text" 
                           name="automate_marketing_case_study_link_text" 
                           value="<?php echo esc_attr($case_study_link_text); ?>"
                           placeholder="Read Full Case Study" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_case_study_link_url">Case Study Link URL</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_case_study_link_url" 
                           name="automate_marketing_case_study_link_url" 
                           value="<?php echo esc_attr($case_study_link_url); ?>"
                           placeholder="/case-studies" />
                </td>
            </tr>
        </table>

        <!-- Process Section -->
        <h3>Process Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_process_title">Process Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_process_title" 
                           name="automate_marketing_process_title" 
                           value="<?php echo esc_attr($process_title); ?>"
                           placeholder="Our Marketing Automation Process" />
                </td>
            </tr>
        </table>

        <div id="process-steps-repeater">
            <?php if (!empty($process_steps)): ?>
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="repeater-field">
                        <h4>Step <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="automate_marketing_process_steps[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($step['number']); ?>"
                               placeholder="Step number" />
                        <input type="text" 
                               name="automate_marketing_process_steps[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($step['title']); ?>"
                               placeholder="Step title" />
                        <textarea name="automate_marketing_process_steps[<?php echo $index; ?>][description]" 
                                  placeholder="Step description"><?php echo esc_textarea($step['description']); ?></textarea>
                        <button type="button" class="button remove-repeater-item">Remove Step</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-process-step">Add Process Step</button>

        <!-- Benefits Section -->
        <h3>Benefits Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_benefits_title">Benefits Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_benefits_title" 
                           name="automate_marketing_benefits_title" 
                           value="<?php echo esc_attr($benefits_title); ?>"
                           placeholder="Marketing Automation Benefits" />
                </td>
            </tr>
        </table>

        <div id="benefits-repeater">
            <?php if (!empty($benefits)): ?>
                <?php foreach ($benefits as $index => $benefit): ?>
                    <div class="repeater-field">
                        <h4>Benefit <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="automate_marketing_benefits[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($benefit['title']); ?>"
                               placeholder="Benefit title" />
                        <textarea name="automate_marketing_benefits[<?php echo $index; ?>][description]" 
                                  placeholder="Benefit description"><?php echo esc_textarea($benefit['description']); ?></textarea>
                        <input type="text" 
                               name="automate_marketing_benefits[<?php echo $index; ?>][icon_class]" 
                               value="<?php echo esc_attr($benefit['icon_class']); ?>"
                               placeholder="Icon class (e.g. fas fa-clock)" />
                        <button type="button" class="button remove-repeater-item">Remove Benefit</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-benefit">Add Benefit</button>

        <!-- Tools Section -->
        <h3>Tools & Platforms Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_tools_title">Tools Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_tools_title" 
                           name="automate_marketing_tools_title" 
                           value="<?php echo esc_attr($tools_title); ?>"
                           placeholder="Marketing Automation Platforms We Use" />
                </td>
            </tr>
        </table>

        <div id="tools-categories-repeater">
            <?php if (!empty($tools_categories)): ?>
                <?php foreach ($tools_categories as $index => $category): ?>
                    <div class="repeater-field">
                        <h4>Tool Category <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="automate_marketing_tools_categories[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($category['title']); ?>"
                               placeholder="Category title" />
                        <div>
                            <strong>Tools:</strong>
                            <?php foreach ($category['tools'] as $tool_index => $tool): ?>
                                <input type="text" 
                                       name="automate_marketing_tools_categories[<?php echo $index; ?>][tools][]" 
                                       value="<?php echo esc_attr($tool); ?>"
                                       placeholder="Tool" />
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button add-tool" data-category-index="<?php echo $index; ?>">Add Tool</button>
                        <button type="button" class="button remove-repeater-item">Remove Category</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-tool-category">Add Tool Category</button>

        <!-- Testimonial Section (No Image) -->
        <h3>Testimonial Section (No Image)</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_testimonial_quote">Testimonial Quote</label></th>
                <td>
                    <textarea id="automate_marketing_testimonial_quote" 
                              name="automate_marketing_testimonial_quote"
                              placeholder="Customer testimonial quote..."><?php echo esc_textarea($testimonial_quote); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_testimonial_name">Customer Name</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_testimonial_name" 
                           name="automate_marketing_testimonial_name" 
                           value="<?php echo esc_attr($testimonial_name); ?>"
                           placeholder="Customer Name" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_testimonial_position">Customer Position</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_testimonial_position" 
                           name="automate_marketing_testimonial_position" 
                           value="<?php echo esc_attr($testimonial_position); ?>"
                           placeholder="Position & Company" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_testimonial_company">Company Description</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_testimonial_company" 
                           name="automate_marketing_testimonial_company" 
                           value="<?php echo esc_attr($testimonial_company); ?>"
                           placeholder="Company Type" />
                </td>
            </tr>
        </table>

        <!-- CTA Section -->
        <h3>CTA Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="automate_marketing_cta_title">CTA Title</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_cta_title" 
                           name="automate_marketing_cta_title" 
                           value="<?php echo esc_attr($cta_title); ?>"
                           placeholder="Ready to Automate Your Marketing?" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <textarea id="automate_marketing_cta_subtitle" 
                              name="automate_marketing_cta_subtitle"
                              placeholder="Let's create a custom automation strategy that saves you time while improving your marketing results."><?php echo esc_textarea($cta_subtitle); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_cta_primary_text" 
                           name="automate_marketing_cta_primary_text" 
                           value="<?php echo esc_attr($cta_primary_text); ?>"
                           placeholder="Get Free Automation Audit" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_cta_primary_url">Primary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="automate_marketing_cta_primary_url" 
                           name="automate_marketing_cta_primary_url" 
                           value="<?php echo esc_url($cta_primary_url); ?>"
                           placeholder="/contact" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_cta_secondary_text">Secondary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="automate_marketing_cta_secondary_text" 
                           name="automate_marketing_cta_secondary_text" 
                           value="<?php echo esc_attr($cta_secondary_text); ?>"
                           placeholder="View Automation Success Stories" />
                </td>
            </tr>
            <tr>
                <th><label for="automate_marketing_cta_secondary_url">Secondary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="automate_marketing_cta_secondary_url" 
                           name="automate_marketing_cta_secondary_url" 
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
                                           name="automate_marketing_cta_features[]" 
                                           value="<?php echo esc_attr($feature); ?>"
                                           placeholder="✓ Feature item" />
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
                          '<input type="text" name="automate_marketing_' + target.replace('-repeater', '').replace(/-/g, '_') + '[]" placeholder="Item" />' +
                          '<button type="button" class="button remove-repeater-item">Remove</button>' +
                          '</div>';
            $('#' + target).append(newField);
        });

        // Add solution
        $('.add-solution').click(function(e) {
            e.preventDefault();
            var index = $('#solutions-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Solution ' + (index + 1) + '</h4>' +
                          '<input type="text" name="automate_marketing_solutions[' + index + '][title]" placeholder="Solution title" />' +
                          '<textarea name="automate_marketing_solutions[' + index + '][description]" placeholder="Solution description"></textarea>' +
                          '<div><strong>Features:</strong>' +
                          '<input type="text" name="automate_marketing_solutions[' + index + '][features][]" placeholder="Feature" />' +
                          '</div>' +
                          '<button type="button" class="button add-feature" data-solution-index="' + index + '">Add Feature</button>' +
                          '<button type="button" class="button remove-repeater-item">Remove Solution</button>' +
                          '</div>';
            $('#solutions-repeater').append(newField);
        });

        // Add feature to solution
        $(document).on('click', '.add-feature', function(e) {
            e.preventDefault();
            var solutionIndex = $(this).data('solution-index');
            var container = $(this).prev('div');
            var newFeature = '<input type="text" name="automate_marketing_solutions[' + solutionIndex + '][features][]" placeholder="Feature" />';
            container.append(newFeature);
        });

        // Add process step
        $('.add-process-step').click(function(e) {
            e.preventDefault();
            var index = $('#process-steps-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Step ' + (index + 1) + '</h4>' +
                          '<input type="text" name="automate_marketing_process_steps[' + index + '][number]" placeholder="Step number" />' +
                          '<input type="text" name="automate_marketing_process_steps[' + index + '][title]" placeholder="Step title" />' +
                          '<textarea name="automate_marketing_process_steps[' + index + '][description]" placeholder="Step description"></textarea>' +
                          '<button type="button" class="button remove-repeater-item">Remove Step</button>' +
                          '</div>';
            $('#process-steps-repeater').append(newField);
        });

        // Add result
        $('.add-result').click(function(e) {
            e.preventDefault();
            var index = $('#results-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Result ' + (index + 1) + '</h4>' +
                          '<input type="text" name="automate_marketing_results[' + index + '][number]" placeholder="Result number (e.g. 60%)" />' +
                          '<input type="text" name="automate_marketing_results[' + index + '][label]" placeholder="Result label" />' +
                          '<button type="button" class="button remove-repeater-item">Remove Result</button>' +
                          '</div>';
            $('#results-repeater').append(newField);
        });

        // Add benefit
        $('.add-benefit').click(function(e) {
            e.preventDefault();
            var index = $('#benefits-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Benefit ' + (index + 1) + '</h4>' +
                          '<input type="text" name="automate_marketing_benefits[' + index + '][title]" placeholder="Benefit title" />' +
                          '<textarea name="automate_marketing_benefits[' + index + '][description]" placeholder="Benefit description"></textarea>' +
                          '<input type="text" name="automate_marketing_benefits[' + index + '][icon_class]" placeholder="Icon class (e.g. fas fa-clock)" />' +
                          '<button type="button" class="button remove-repeater-item">Remove Benefit</button>' +
                          '</div>';
            $('#benefits-repeater').append(newField);
        });

        // Add tool category
        $('.add-tool-category').click(function(e) {
            e.preventDefault();
            var index = $('#tools-categories-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Tool Category ' + (index + 1) + '</h4>' +
                          '<input type="text" name="automate_marketing_tools_categories[' + index + '][title]" placeholder="Category title" />' +
                          '<div><strong>Tools:</strong>' +
                          '<input type="text" name="automate_marketing_tools_categories[' + index + '][tools][]" placeholder="Tool" />' +
                          '</div>' +
                          '<button type="button" class="button add-tool" data-category-index="' + index + '">Add Tool</button>' +
                          '<button type="button" class="button remove-repeater-item">Remove Category</button>' +
                          '</div>';
            $('#tools-categories-repeater').append(newField);
        });

        // Add tool to category
        $(document).on('click', '.add-tool', function(e) {
            e.preventDefault();
            var categoryIndex = $(this).data('category-index');
            var container = $(this).prev('div');
            var newTool = '<input type="text" name="automate_marketing_tools_categories[' + categoryIndex + '][tools][]" placeholder="Tool" />';
            container.append(newTool);
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

function sanitize_automate_marketing_meta_value($field, $value) {
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

function save_automate_marketing_meta_box_data($post_id) {
    if (!isset($_POST['automate_marketing_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['automate_marketing_meta_box_nonce'], 'automate_marketing_meta_box')) {
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
        'automate_marketing_header_title',
        'automate_marketing_header_subtitle',
        'automate_marketing_overview_title',
        'automate_marketing_overview_content',
        'automate_marketing_challenges_title',
        'automate_marketing_challenges',
        'automate_marketing_solutions_title',
        'automate_marketing_solutions',
        'automate_marketing_case_study_label',
        'automate_marketing_case_study_title',
        'automate_marketing_case_study_content',
        'automate_marketing_case_study_challenge_title',
        'automate_marketing_case_study_challenges',
        'automate_marketing_case_study_solution_title',
        'automate_marketing_case_study_solutions',
        'automate_marketing_results_title',
        'automate_marketing_results',
        'automate_marketing_case_study_link_text',
        'automate_marketing_case_study_link_url',
        'automate_marketing_process_title',
        'automate_marketing_process_steps',
        'automate_marketing_benefits_title',
        'automate_marketing_benefits',
        'automate_marketing_tools_title',
        'automate_marketing_tools_categories',
        'automate_marketing_testimonial_quote',
        'automate_marketing_testimonial_name',
        'automate_marketing_testimonial_position',
        'automate_marketing_testimonial_company',
        'automate_marketing_cta_title',
        'automate_marketing_cta_subtitle',
        'automate_marketing_cta_primary_text',
        'automate_marketing_cta_primary_url',
        'automate_marketing_cta_secondary_text',
        'automate_marketing_cta_secondary_url',
        'automate_marketing_cta_features'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_automate_marketing_meta_value($field, $_POST[$field]));
        }
    }
}
add_action('save_post', 'save_automate_marketing_meta_box_data');
