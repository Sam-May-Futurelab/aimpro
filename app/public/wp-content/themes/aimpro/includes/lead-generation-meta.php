<?php
// Lead Generation Page Meta Fields

function add_lead_generation_meta_boxes() {
    global $post;
    
    // Only add to pages with the correct template or slug
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        $page_slug = $post->post_name;
        
        // Only show meta box if this is the lead generation page
        if ($page_template === 'page-lead-generation.php' || $page_slug === 'lead-generation') {
            add_meta_box(
                'lead_generation_meta_box',
                'Lead Generation Page Content',
                'lead_generation_meta_box_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'add_lead_generation_meta_boxes', 11);

function lead_generation_meta_box_callback($post) {
    // Only show on lead generation page template
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-lead-generation.php' && $page_slug !== 'lead-generation') {
        echo '<p>This meta box is designed for the "Lead Generation Solution Page" template or pages with slug "lead-generation".</p>';
        echo '<p>Current template: ' . ($page_template ?: 'Default') . '</p>';
        echo '<p>Current slug: ' . ($page_slug ?: 'Not set yet') . '</p>';
        return;
    }

    wp_nonce_field('lead_generation_meta_box', 'lead_generation_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_lead_generation_header_title', true) ?: 'Lead Generation (B2B/B2C)';
    $header_subtitle = get_post_meta($post->ID, '_lead_generation_header_subtitle', true) ?: 'Generate high-quality leads that convert into customers with proven strategies and targeted campaigns';    // Solution Overview
    $overview_title = get_post_meta($post->ID, '_lead_generation_overview_title', true) ?: 'Turn Prospects Into Qualified Leads';
    $overview_content = get_post_meta($post->ID, '_lead_generation_overview_content', true) ?: 'Lead generation is the lifeblood of any successful business. Our comprehensive lead generation strategies combine multiple touchpoints, compelling offers, and sophisticated targeting to attract and capture high-quality prospects who are ready to engage with your business.';
    $overview_image = get_post_meta($post->ID, '_lead_generation_overview_image', true) ?: '';
    
    // Challenges
    $challenges_title = get_post_meta($post->ID, '_lead_generation_challenges_title', true) ?: 'Lead Generation Challenges We Solve:';
    $challenges = get_post_meta($post->ID, '_lead_generation_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'Low-quality leads that don\'t convert',
            'High cost per acquisition',
            'Inconsistent lead flow',
            'Poor lead nurturing processes',
            'Difficulty tracking lead sources',
            'Long sales cycles without proper follow-up'
        );
    }

    // Lead Generation Methods
    $methods_title = get_post_meta($post->ID, '_lead_generation_methods_title', true) ?: 'Our Lead Generation Methods';
    $methods = get_post_meta($post->ID, '_lead_generation_methods', true);
    if (empty($methods)) {
        $methods = array(
            array(
                'title' => 'Search Engine Marketing',
                'description' => 'Capture prospects actively searching for your solutions with targeted Google Ads and optimised landing pages.',
                'features' => array(
                    'High-intent keyword targeting',
                    'Conversion-optimised landing pages',
                    'Search ad optimisation',
                    'Negative keyword refinement'
                )
            ),
            array(
                'title' => 'Social Media Lead Generation',
                'description' => 'Leverage social platforms to reach and engage your ideal audience with compelling lead magnets and offers.',
                'features' => array(
                    'Facebook & LinkedIn lead ads',
                    'Audience targeting & lookalikes',
                    'Social proof integration',
                    'Multi-platform campaigns'
                )
            ),
            array(
                'title' => 'Content Marketing & Lead Magnets',
                'description' => 'Attract prospects with valuable content and convert them with irresistible lead magnets and gated resources.',
                'features' => array(
                    'High-value lead magnet creation',
                    'Educational content strategy',
                    'Gated resource optimisation',
                    'Progressive profiling setup'
                )
            ),
            array(
                'title' => 'Email Marketing & Nurturing',
                'description' => 'Build relationships and move prospects through your sales funnel with strategic email sequences.',
                'features' => array(
                    'Automated drip campaigns',
                    'Lead scoring implementation',
                    'behavioural trigger emails',
                    'CRM integration & tracking'
                )
            )
        );
    }

    // Success Story
    $case_study_label = get_post_meta($post->ID, '_lead_generation_case_study_label', true) ?: 'Success Story';
    $case_study_title = get_post_meta($post->ID, '_lead_generation_case_study_title', true) ?: 'TechFlow Solutions: 450% Lead Increase in 4 Months';
    $case_study_content = get_post_meta($post->ID, '_lead_generation_case_study_content', true) ?: 'TechFlow Solutions, a B2B software company, was struggling with inconsistent lead flow and poor lead quality from their existing marketing efforts.';
    
    $case_study_challenge_title = get_post_meta($post->ID, '_lead_generation_case_study_challenge_title', true) ?: 'The Challenge';
    $case_study_challenges = get_post_meta($post->ID, '_lead_generation_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            'Only 15-20 qualified leads per month',
            'High cost per lead ($350+ average)',
            'Long sales cycles with poor follow-up',
            'No systematic lead nurturing process'
        );
    }
    
    $case_study_solution_title = get_post_meta($post->ID, '_lead_generation_case_study_solution_title', true) ?: 'Our Solution';
    $case_study_solutions = get_post_meta($post->ID, '_lead_generation_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Multi-channel lead generation campaigns',
            'High-converting landing page development',
            'LinkedIn outreach automation',
            'Email nurturing sequence implementation'
        );
    }

    // Lead Generation Process
    $process_title = get_post_meta($post->ID, '_lead_generation_process_title', true) ?: 'Our Lead Generation Process';
    $process_steps = get_post_meta($post->ID, '_lead_generation_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'number' => '1',
                'title' => 'Audience Research & Targeting',
                'description' => 'Identify your ideal customer profiles and create detailed buyer personas for precise targeting.'
            ),
            array(
                'number' => '2',
                'title' => 'Lead Magnet Creation',
                'description' => 'Develop compelling offers and valuable content that your prospects can\'t resist downloading.'
            ),
            array(
                'number' => '3',
                'title' => 'Multi-Channel Campaign Launch',
                'description' => 'Deploy coordinated campaigns across search, social, and email channels for maximum reach.'
            ),
            array(
                'number' => '4',
                'title' => 'Nurturing & Conversion',
                'description' => 'Implement automated nurturing sequences that guide leads toward becoming customers.'
            )
        );
    }

    // Lead Generation Types
    $types_title = get_post_meta($post->ID, '_lead_generation_types_title', true) ?: 'Lead Generation Strategies by Business Type';
    $types = get_post_meta($post->ID, '_lead_generation_types', true);
    if (empty($types)) {
        $types = array(
            array(
                'title' => 'B2B Lead Generation',
                'features' => array(
                    'LinkedIn advertising & outreach',
                    'Industry-specific content marketing',
                    'Webinar and event marketing',
                    'Account-based marketing (ABM)',
                    'Sales-qualified lead (SQL) optimisation'
                )
            ),
            array(
                'title' => 'B2C Lead Generation',
                'features' => array(
                    'Facebook & Instagram lead ads',
                    'Google Shopping campaigns',
                    'Influencer partnerships',
                    'Contest and giveaway campaigns',
                    'SMS marketing integration'
                )
            ),
            array(
                'title' => 'Local Business Lead Generation',
                'features' => array(
                    'Google My Business optimisation',
                    'Local directory submissions',
                    'Geotargeted advertising',
                    'Review generation campaigns',
                    'Local event marketing'
                )
            )
        );
    }

    // Lead Generation Tools
    $tools_title = get_post_meta($post->ID, '_lead_generation_tools_title', true) ?: 'Lead Generation Tools & Technologies';
    $tools = get_post_meta($post->ID, '_lead_generation_tools', true);
    if (empty($tools)) {
        $tools = array(
            array(
                'title' => 'Analytics & Tracking',
                'features' => array(
                    'Google Analytics 4 setup',
                    'Conversion tracking implementation',
                    'Lead source attribution',
                    'ROI measurement dashboards'
                )
            ),
            array(
                'title' => 'CRM Integration',
                'features' => array(
                    'HubSpot integration',
                    'Salesforce automation',
                    'Pipedrive setup',
                    'Custom CRM solutions'
                )
            ),
            array(
                'title' => 'Landing Page optimisation',
                'features' => array(
                    'A/B testing frameworks',
                    'Heat mapping analysis',
                    'Form optimisation',
                    'Mobile responsiveness'
                )
            ),
            array(
                'title' => 'Email Marketing',
                'features' => array(
                    'Automated email sequences',
                    'Lead nurturing campaigns',
                    'behavioural email triggers',
                    'Performance analytics'
                )
            )
        );
    }

    // Testimonial (no image)
    $testimonial_quote = get_post_meta($post->ID, '_lead_generation_testimonial_quote', true) ?: 'Aimpro Digital completely transformed our lead generation. In just 4 months, we went from 20 leads per month to over 100 high-quality leads. Their multi-channel approach and systematic nurturing process has revolutionized our sales pipeline.';
    $testimonial_name = get_post_meta($post->ID, '_lead_generation_testimonial_name', true) ?: 'Sarah Johnson';
    $testimonial_position = get_post_meta($post->ID, '_lead_generation_testimonial_position', true) ?: 'Marketing Director, TechFlow Solutions';
    $testimonial_company = get_post_meta($post->ID, '_lead_generation_testimonial_company', true) ?: 'B2B Software Company';
    
    // CTA section
    $cta_title = get_post_meta($post->ID, '_lead_generation_cta_title', true) ?: 'Ready to Generate More Qualified Leads?';
    $cta_subtitle = get_post_meta($post->ID, '_lead_generation_cta_subtitle', true) ?: 'Let\'s create a custom lead generation strategy that fills your sales pipeline with high-quality prospects.';
    $cta_primary_text = get_post_meta($post->ID, '_lead_generation_cta_primary_text', true) ?: 'Get Free Lead Generation Audit';
    $cta_primary_url = get_post_meta($post->ID, '_lead_generation_cta_primary_url', true) ?: '/contact';
    $cta_secondary_text = get_post_meta($post->ID, '_lead_generation_cta_secondary_text', true) ?: 'View Lead Generation Success Stories';
    $cta_secondary_url = get_post_meta($post->ID, '_lead_generation_cta_secondary_url', true) ?: '/case-studies';
    $cta_benefits = get_post_meta($post->ID, '_lead_generation_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '? Custom lead generation strategy',
            '? Multi-channel campaign setup',
            '? CRM integration included'
        );
    }

    ?>
    <style>
        .lead-generation-meta {
            max-width: 100%;
        }
        .lead-generation-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .lead-generation-meta .form-table td {
            padding: 15px 10px;
        }
        .lead-generation-meta input[type="text"],
        .lead-generation-meta textarea,
        .lead-generation-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .lead-generation-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .lead-generation-meta .repeater-field {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }        .lead-generation-meta .repeater-field input {
            margin-bottom: 5px;
        }
        .lead-generation-meta .image-upload-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .lead-generation-meta .image-preview {
            max-width: 150px;
            height: auto;
        }
        .lead-generation-meta .upload-button,
        .lead-generation-meta .remove-button {
            padding: 5px 10px;
            font-size: 12px;
        }
        .lead-generation-meta h3 {
            margin-top: 30px;
            margin-bottom: 15px;
            padding: 10px;
            background: #0073aa;
            color: white;
            border-radius: 3px;
        }
    </style>

    <div class="lead-generation-meta">
        
        <!-- Header Section -->
        <h3>Header Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="lead_generation_header_title">Page Title</label></th>
                <td>
                    <?php wp_editor($header_title, 'lead_generation_header_title', array(
                        'textarea_name' => 'lead_generation_header_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_header_subtitle">Page Subtitle</label></th>
                <td>
                    <?php wp_editor($header_subtitle, 'lead_generation_header_subtitle', array(
                        'textarea_name' => 'lead_generation_header_subtitle',
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
        </table>

        <!-- Overview Section -->
        <h3>Overview Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="lead_generation_overview_title">Overview Title</label></th>
                <td>
                    <?php wp_editor($overview_title, 'lead_generation_overview_title', array(
                        'textarea_name' => 'lead_generation_overview_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_overview_content">Overview Content</label></th>
                <td>
                    <?php wp_editor($overview_content, 'lead_generation_overview_content', array(
                        'textarea_name' => 'lead_generation_overview_content',
                        'media_buttons' => false,
                        'textarea_rows' => 6,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload-container">
                        <input type="hidden" 
                               id="lead_generation_overview_image" 
                               name="lead_generation_overview_image" 
                               value="<?php echo esc_attr($overview_image); ?>" />
                        <button type="button" class="button upload-button" data-target="lead_generation_overview_image">Upload Image</button>
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" class="image-preview" />
                            <button type="button" class="button remove-button" data-target="lead_generation_overview_image">Remove</button>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Challenges Section -->
        <h3>Challenges Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="lead_generation_challenges_title">Challenges Title</label></th>
                <td>
                    <?php wp_editor($challenges_title, 'lead_generation_challenges_title', array(
                        'textarea_name' => 'lead_generation_challenges_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label>Challenges List</label></th>
                <td>
                    <div id="challenges-repeater">
                        <?php if (!empty($challenges)): ?>
                            <?php foreach ($challenges as $index => $challenge): ?>
                                <div class="repeater-field">
                                    <?php wp_editor($challenge, 'lead_generation_challenges_' . $index, array(
                                        'textarea_name' => 'lead_generation_challenges[]',
                                        'media_buttons' => false,
                                        'textarea_rows' => 2,
                                        'teeny' => true,
                                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                                    )); ?>
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="challenges-repeater">Add Challenge</button>
                </td>
            </tr>
        </table>

        <!-- Lead Generation Methods Section -->
        <h3>Lead Generation Methods Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="lead_generation_methods_title">Methods Title</label></th>
                <td>
                    <?php wp_editor($methods_title, 'lead_generation_methods_title', array(
                        'textarea_name' => 'lead_generation_methods_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
        </table>
        
        <div id="methods-repeater">
            <?php if (!empty($methods)): ?>
                <?php foreach ($methods as $index => $method): ?>
                    <div class="repeater-field">
                        <h4>Method <?php echo $index + 1; ?></h4>
                        <?php wp_editor($method['title'], 'lead_generation_methods_' . $index . '_title', array(
                            'textarea_name' => 'lead_generation_methods[' . $index . '][title]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                        )); ?>
                        <?php wp_editor($method['description'], 'lead_generation_methods_' . $index . '_description', array(
                            'textarea_name' => 'lead_generation_methods[' . $index . '][description]',
                            'media_buttons' => false,
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                        )); ?>
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($method['features'] as $feat_index => $feature): ?>
                                <?php wp_editor($feature, 'lead_generation_methods_' . $index . '_feature_' . $feat_index, array(
                                    'textarea_name' => 'lead_generation_methods[' . $index . '][features][]',
                                    'media_buttons' => false,
                                    'textarea_rows' => 2,
                                    'teeny' => true,
                                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                                )); ?>
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
                <th><label for="lead_generation_case_study_label">Case Study Label</label></th>
                <td>
                    <?php wp_editor($case_study_label, 'lead_generation_case_study_label', array(
                        'textarea_name' => 'lead_generation_case_study_label',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_case_study_title">Case Study Title</label></th>
                <td>
                    <?php wp_editor($case_study_title, 'lead_generation_case_study_title', array(
                        'textarea_name' => 'lead_generation_case_study_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_case_study_content">Case Study Content</label></th>
                <td>
                    <?php wp_editor($case_study_content, 'lead_generation_case_study_content', array(
                        'textarea_name' => 'lead_generation_case_study_content',
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_case_study_challenge_title">Challenge Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_challenge_title, 'lead_generation_case_study_challenge_title', array(
                        'textarea_name' => 'lead_generation_case_study_challenge_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label>Challenge Items</label></th>
                <td>
                    <div id="case-study-challenges-repeater">
                        <?php if (!empty($case_study_challenges)): ?>
                            <?php foreach ($case_study_challenges as $index => $challenge): ?>
                                <div class="repeater-field">
                                    <?php wp_editor($challenge, 'lead_generation_case_study_challenges_' . $index, array(
                                        'textarea_name' => 'lead_generation_case_study_challenges[]',
                                        'media_buttons' => false,
                                        'textarea_rows' => 2,
                                        'teeny' => true,
                                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                                    )); ?>
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="case-study-challenges-repeater">Add Challenge</button>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_case_study_solution_title">Solution Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_solution_title, 'lead_generation_case_study_solution_title', array(
                        'textarea_name' => 'lead_generation_case_study_solution_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label>Solution Items</label></th>
                <td>
                    <div id="case-study-solutions-repeater">
                        <?php if (!empty($case_study_solutions)): ?>
                            <?php foreach ($case_study_solutions as $index => $solution): ?>
                                <div class="repeater-field">
                                    <?php wp_editor($solution, 'lead_generation_case_study_solutions_' . $index, array(
                                        'textarea_name' => 'lead_generation_case_study_solutions[]',
                                        'media_buttons' => false,
                                        'textarea_rows' => 2,
                                        'teeny' => true,
                                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                                    )); ?>
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="case-study-solutions-repeater">Add Solution</button>
                </td>
            </tr>
        </table>

        <!-- Process Section -->
        <h3>Process Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="lead_generation_process_title">Process Title</label></th>
                <td>
                    <?php wp_editor($process_title, 'lead_generation_process_title', array(
                        'textarea_name' => 'lead_generation_process_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
        </table>

        <div id="process-steps-repeater">
            <?php if (!empty($process_steps)): ?>
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="repeater-field">
                        <h4>Step <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="lead_generation_process_steps[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($step['number']); ?>"
                               placeholder="Step number" />
                        <?php wp_editor($step['title'], 'lead_generation_process_steps_' . $index . '_title', array(
                            'textarea_name' => 'lead_generation_process_steps[' . $index . '][title]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                        )); ?>
                        <?php wp_editor($step['description'], 'lead_generation_process_steps_' . $index . '_description', array(
                            'textarea_name' => 'lead_generation_process_steps[' . $index . '][description]',
                            'media_buttons' => false,
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                        )); ?>
                        <button type="button" class="button remove-repeater-item">Remove Step</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-process-step">Add Process Step</button>

        <!-- Business Types Section -->
        <h3>Lead Generation Types Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="lead_generation_types_title">Types Title</label></th>
                <td>
                    <?php wp_editor($types_title, 'lead_generation_types_title', array(
                        'textarea_name' => 'lead_generation_types_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
        </table>

        <div id="types-repeater">
            <?php if (!empty($types)): ?>
                <?php foreach ($types as $index => $type): ?>
                    <div class="repeater-field">
                        <h4>Business Type <?php echo $index + 1; ?></h4>
                        <?php wp_editor($type['title'], 'lead_generation_types_' . $index . '_title', array(
                            'textarea_name' => 'lead_generation_types[' . $index . '][title]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                        )); ?>
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($type['features'] as $feat_index => $feature): ?>
                                <?php wp_editor($feature, 'lead_generation_types_' . $index . '_feature_' . $feat_index, array(
                                    'textarea_name' => 'lead_generation_types[' . $index . '][features][]',
                                    'media_buttons' => false,
                                    'textarea_rows' => 2,
                                    'teeny' => true,
                                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                                )); ?>
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button add-type-feature" data-type-index="<?php echo $index; ?>">Add Feature</button>
                        <button type="button" class="button remove-repeater-item">Remove Type</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-business-type">Add Business Type</button>

        <!-- Tools Section -->
        <h3>Tools & Technologies Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="lead_generation_tools_title">Tools Title</label></th>
                <td>
                    <?php wp_editor($tools_title, 'lead_generation_tools_title', array(
                        'textarea_name' => 'lead_generation_tools_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
        </table>

        <div id="tools-repeater">
            <?php if (!empty($tools)): ?>
                <?php foreach ($tools as $index => $tool): ?>
                    <div class="repeater-field">
                        <h4>Tool Category <?php echo $index + 1; ?></h4>
                        <?php wp_editor($tool['title'], 'lead_generation_tools_' . $index . '_title', array(
                            'textarea_name' => 'lead_generation_tools[' . $index . '][title]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                        )); ?>
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($tool['features'] as $feat_index => $feature): ?>
                                <?php wp_editor($feature, 'lead_generation_tools_' . $index . '_feature_' . $feat_index, array(
                                    'textarea_name' => 'lead_generation_tools[' . $index . '][features][]',
                                    'media_buttons' => false,
                                    'textarea_rows' => 2,
                                    'teeny' => true,
                                    'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                                )); ?>
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button add-tool-feature" data-tool-index="<?php echo $index; ?>">Add Feature</button>
                        <button type="button" class="button remove-repeater-item">Remove Tool</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-tool">Add Tool Category</button>

        <!-- Testimonial Section (No Image) -->
        <h3>Testimonial Section (No Image)</h3>
        <table class="form-table">
            <tr>
                <th><label for="lead_generation_testimonial_quote">Testimonial Quote</label></th>
                <td>
                    <?php wp_editor($testimonial_quote, 'lead_generation_testimonial_quote', array(
                        'textarea_name' => 'lead_generation_testimonial_quote',
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_testimonial_name">Customer Name</label></th>
                <td>
                    <input type="text" 
                           id="lead_generation_testimonial_name" 
                           name="lead_generation_testimonial_name" 
                           value="<?php echo esc_attr($testimonial_name); ?>"
                           placeholder="Customer Name" />
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_testimonial_position">Customer Position</label></th>
                <td>
                    <input type="text" 
                           id="lead_generation_testimonial_position" 
                           name="lead_generation_testimonial_position" 
                           value="<?php echo esc_attr($testimonial_position); ?>"
                           placeholder="Position & Company" />
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_testimonial_company">Company Description</label></th>
                <td>
                    <input type="text" 
                           id="lead_generation_testimonial_company" 
                           name="lead_generation_testimonial_company" 
                           value="<?php echo esc_attr($testimonial_company); ?>"
                           placeholder="Company Type" />
                </td>
            </tr>
        </table>

        <!-- CTA Section -->
        <h3>CTA Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="lead_generation_cta_title">CTA Title</label></th>
                <td>
                    <?php wp_editor($cta_title, 'lead_generation_cta_title', array(
                        'textarea_name' => 'lead_generation_cta_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <?php wp_editor($cta_subtitle, 'lead_generation_cta_subtitle', array(
                        'textarea_name' => 'lead_generation_cta_subtitle',
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="lead_generation_cta_primary_text" 
                           name="lead_generation_cta_primary_text" 
                           value="<?php echo esc_attr($cta_primary_text); ?>"
                           placeholder="Get Free Lead Generation Audit" />
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_cta_primary_url">Primary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="lead_generation_cta_primary_url" 
                           name="lead_generation_cta_primary_url" 
                           value="<?php echo esc_url($cta_primary_url); ?>"
                           placeholder="/contact" />
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_cta_secondary_text">Secondary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="lead_generation_cta_secondary_text" 
                           name="lead_generation_cta_secondary_text" 
                           value="<?php echo esc_attr($cta_secondary_text); ?>"
                           placeholder="View Lead Generation Success Stories" />
                </td>
            </tr>
            <tr>
                <th><label for="lead_generation_cta_secondary_url">Secondary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="lead_generation_cta_secondary_url" 
                           name="lead_generation_cta_secondary_url" 
                           value="<?php echo esc_url($cta_secondary_url); ?>"
                           placeholder="/case-studies" />
                </td>
            </tr>
            <tr>
                <th><label>CTA Benefits</label></th>
                <td>
                    <div id="cta-benefits-repeater">
                        <?php if (!empty($cta_benefits)): ?>
                            <?php foreach ($cta_benefits as $index => $benefit): ?>
                                <div class="repeater-field">
                                    <?php wp_editor($benefit, 'lead_generation_cta_benefits_' . $index, array(
                                        'textarea_name' => 'lead_generation_cta_benefits[]',
                                        'media_buttons' => false,
                                        'textarea_rows' => 2,
                                        'teeny' => true,
                                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                                    )); ?>
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
                          '<input type="text" name="lead_generation_' + target.replace('-repeater', '').replace(/-/g, '_') + '[]" placeholder="Item" />' +
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
                          '<input type="text" name="lead_generation_methods[' + index + '][title]" placeholder="Method title" />' +
                          '<textarea name="lead_generation_methods[' + index + '][description]" placeholder="Method description"></textarea>' +
                          '<div><strong>Features:</strong>' +
                          '<input type="text" name="lead_generation_methods[' + index + '][features][]" placeholder="Feature" />' +
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
            var newFeature = '<input type="text" name="lead_generation_methods[' + methodIndex + '][features][]" placeholder="Feature" />';
            container.append(newFeature);
        });

        // Add process step
        $('.add-process-step').click(function(e) {
            e.preventDefault();
            var index = $('#process-steps-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Step ' + (index + 1) + '</h4>' +
                          '<input type="text" name="lead_generation_process_steps[' + index + '][number]" placeholder="Step number" />' +
                          '<input type="text" name="lead_generation_process_steps[' + index + '][title]" placeholder="Step title" />' +
                          '<textarea name="lead_generation_process_steps[' + index + '][description]" placeholder="Step description"></textarea>' +
                          '<button type="button" class="button remove-repeater-item">Remove Step</button>' +
                          '</div>';
            $('#process-steps-repeater').append(newField);
        });

        // Add business type
        $('.add-business-type').click(function(e) {
            e.preventDefault();
            var index = $('#types-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Business Type ' + (index + 1) + '</h4>' +
                          '<input type="text" name="lead_generation_types[' + index + '][title]" placeholder="Type title" />' +
                          '<div><strong>Features:</strong>' +
                          '<input type="text" name="lead_generation_types[' + index + '][features][]" placeholder="Feature" />' +
                          '</div>' +
                          '<button type="button" class="button add-type-feature" data-type-index="' + index + '">Add Feature</button>' +
                          '<button type="button" class="button remove-repeater-item">Remove Type</button>' +
                          '</div>';
            $('#types-repeater').append(newField);
        });

        // Add feature to business type
        $(document).on('click', '.add-type-feature', function(e) {
            e.preventDefault();
            var typeIndex = $(this).data('type-index');
            var container = $(this).prev('div');
            var newFeature = '<input type="text" name="lead_generation_types[' + typeIndex + '][features][]" placeholder="Feature" />';
            container.append(newFeature);
        });

        // Add tool
        $('.add-tool').click(function(e) {
            e.preventDefault();
            var index = $('#tools-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Tool Category ' + (index + 1) + '</h4>' +
                          '<input type="text" name="lead_generation_tools[' + index + '][title]" placeholder="Tool category title" />' +
                          '<div><strong>Features:</strong>' +
                          '<input type="text" name="lead_generation_tools[' + index + '][features][]" placeholder="Feature" />' +
                          '</div>' +
                          '<button type="button" class="button add-tool-feature" data-tool-index="' + index + '">Add Feature</button>' +
                          '<button type="button" class="button remove-repeater-item">Remove Tool</button>' +
                          '</div>';
            $('#tools-repeater').append(newField);
        });

        // Add feature to tool
        $(document).on('click', '.add-tool-feature', function(e) {
            e.preventDefault();
            var toolIndex = $(this).data('tool-index');
            var container = $(this).prev('div');
            var newFeature = '<input type="text" name="lead_generation_tools[' + toolIndex + '][features][]" placeholder="Feature" />';
            container.append(newFeature);
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

function sanitize_lead_generation_meta_value($field, $value) {
    // Define which fields support rich text (wp_editor)
    $rich_text_fields = [
        'lead_generation_header_title',
        'lead_generation_header_subtitle',
        'lead_generation_overview_title',
        'lead_generation_overview_content',
        'lead_generation_challenges_title',
        'lead_generation_methods_title',
        'lead_generation_case_study_label',
        'lead_generation_case_study_title',
        'lead_generation_case_study_content',
        'lead_generation_case_study_challenge_title',
        'lead_generation_case_study_solution_title',
        'lead_generation_process_title',
        'lead_generation_types_title',
        'lead_generation_tools_title',
        'lead_generation_testimonial_quote',
        'lead_generation_cta_title',
        'lead_generation_cta_subtitle'
    ];

    if (is_array($value)) {
        foreach ($value as &$item) {
            if (is_array($item)) {
                // For nested arrays like methods, types, tools, process_steps
                foreach ($item as $key => &$subitem) {
                    if (is_array($subitem)) {
                        // For features arrays within methods/types/tools
                        foreach ($subitem as &$sub_subitem) {
                            $sub_subitem = wp_kses_post($sub_subitem);
                        }
                    } else {
                        // For individual properties like title, description
                        if ($key === 'title' || $key === 'description') {
                            $subitem = wp_kses_post($subitem);
                        } else {
                            $subitem = sanitize_text_field($subitem);
                        }
                    }
                }
            } else {
                // For simple arrays like challenges, case_study_challenges, case_study_solutions, cta_benefits
                if (in_array($field, ['lead_generation_challenges', 'lead_generation_case_study_challenges', 'lead_generation_case_study_solutions', 'lead_generation_cta_benefits'])) {
                    $item = wp_kses_post($item);
                } else {
                    $item = sanitize_text_field($item);
                }
            }
        }
        return $value;
    } else {
        // Handle individual fields
        if (in_array($field, $rich_text_fields)) {
            return wp_kses_post($value);
        } elseif (strpos($field, 'url') !== false) {
            return esc_url_raw($value);
        } else {
            return sanitize_text_field($value);
        }
    }
}

function save_lead_generation_meta_box_data($post_id) {
    if (!isset($_POST['lead_generation_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['lead_generation_meta_box_nonce'], 'lead_generation_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }    }

    // Save all fields
    $fields = [
        'lead_generation_header_title',
        'lead_generation_header_subtitle',
        'lead_generation_overview_title',
        'lead_generation_overview_content',
        'lead_generation_overview_image',
        'lead_generation_challenges_title',
        'lead_generation_challenges',
        'lead_generation_methods_title',
        'lead_generation_methods',
        'lead_generation_case_study_label',
        'lead_generation_case_study_title',
        'lead_generation_case_study_content',
        'lead_generation_case_study_challenge_title',
        'lead_generation_case_study_challenges',
        'lead_generation_case_study_solution_title',
        'lead_generation_case_study_solutions',
        'lead_generation_process_title',
        'lead_generation_process_steps',
        'lead_generation_types_title',
        'lead_generation_types',
        'lead_generation_tools_title',
        'lead_generation_tools',
        'lead_generation_testimonial_quote',
        'lead_generation_testimonial_name',
        'lead_generation_testimonial_position',
        'lead_generation_testimonial_company',
        'lead_generation_cta_title',
        'lead_generation_cta_subtitle',
        'lead_generation_cta_primary_text',
        'lead_generation_cta_primary_url',
        'lead_generation_cta_secondary_text',
        'lead_generation_cta_secondary_url',
        'lead_generation_cta_benefits'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_lead_generation_meta_value($field, $_POST[$field]));
        }
    }
}
add_action('save_post', 'save_lead_generation_meta_box_data');

