<?php
// Finance Page Meta Fields

function add_finance_meta_boxes() {
    global $post;
    
    // Only add to pages with the finance template
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        
        // Only register this meta box for the finance page
        if ($page_template === 'page-finance.php') {
            add_meta_box(
                'finance_meta_box',
                'Finance Page Content',
                'finance_meta_box_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'add_finance_meta_boxes');

function finance_meta_box_callback($post) {
    // Only show on finance page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-finance.php') {
        echo '<p>This meta box only appears when using the "Finance Industry Page" template.</p>';
        return;
    }

    wp_nonce_field('finance_meta_box', 'finance_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_finance_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_finance_header_subtitle', true);
    $overview_title = get_post_meta($post->ID, '_finance_overview_title', true);
    $overview_content = get_post_meta($post->ID, '_finance_overview_content', true);
    $overview_image = get_post_meta($post->ID, '_finance_overview_image', true);

    // Challenges section
    $challenges_title = get_post_meta($post->ID, '_finance_challenges_title', true);
    $challenges = get_post_meta($post->ID, '_finance_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'Strict regulatory compliance requirements (FCA, GDPR)',
            'Building trust in a skeptical market',
            'Long sales cycles and complex decision processes',
            'Educating prospects on complex financial products',
            'Generating high-value, qualified leads'
        );
    }

    // Marketing Solutions section (2x2 grid)
    $solutions_title = get_post_meta($post->ID, '_finance_solutions_title', true);
    $solutions = get_post_meta($post->ID, '_finance_solutions', true);
    if (empty($solutions)) {
        $solutions = array(
            array(
                'icon' => 'fas fa-check-circle',
                'title' => 'Regulatory Compliant Campaigns',
                'description' => 'Navigate FCA regulations and industry compliance requirements with campaigns designed specifically for financial services.',
                'features' => array('FCA-compliant ad copy and disclaimers', 'GDPR-compliant lead generation', 'Risk warning implementation', 'Regulatory review processes')
            ),
            array(
                'icon' => 'fas fa-book',
                'title' => 'Educational Content Marketing',
                'description' => 'Build trust and authority with educational content that helps prospects understand complex financial concepts and services.',
                'features' => array('Financial education blog content', 'Explainer videos and guides', 'Webinar and workshop promotion', 'Thought leadership positioning')
            ),
            array(
                'icon' => 'fas fa-user-plus',
                'title' => 'Trust-Building Strategies',
                'description' => 'Establish credibility and trust through strategic reputation management, client testimonials, and authority positioning.',
                'features' => array('Online reputation management', 'Client success story promotion', 'Professional qualification highlighting', 'Trust signal optimisation')
            ),
            array(
                'icon' => 'fas fa-chart-line',
                'title' => 'High-Value Lead Generation',
                'description' => 'Generate qualified leads for financial consultations, insurance quotes, and investment planning services.',
                'features' => array('Consultation booking optimisation', 'Financial calculator tools', 'Qualification-based lead scoring', 'Nurture sequence automation')
            )
        );
    }

    // Case study section
    $case_study_label = get_post_meta($post->ID, '_finance_case_study_label', true);
    $case_study_title = get_post_meta($post->ID, '_finance_case_study_title', true);
    $case_study_content = get_post_meta($post->ID, '_finance_case_study_content', true);
    $case_study_challenge_title = get_post_meta($post->ID, '_finance_case_study_challenge_title', true);
    $case_study_challenges = get_post_meta($post->ID, '_finance_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            'Strict FCA compliance requirements',
            'Difficulty explaining complex services',
            'Long sales cycles and high-touch process',
            'Competition from larger financial institutions'
        );
    }
    $case_study_solution_title = get_post_meta($post->ID, '_finance_case_study_solution_title', true);
    $case_study_solutions = get_post_meta($post->ID, '_finance_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Educational content strategy',
            'Compliant Google Ads campaigns',
            'Financial calculator lead magnets',
            'LinkedIn thought leadership campaigns'
        );
    }
    $case_study_results_title = get_post_meta($post->ID, '_finance_case_study_results_title', true);
    $case_study_results = get_post_meta($post->ID, '_finance_case_study_results', true);
    if (empty($case_study_results)) {
        $case_study_results = array(
            array('number' => '150%', 'label' => 'Qualified Leads Increase'),
            array('number' => '85%', 'label' => 'Reduction in Cost per Lead'),
            array('number' => '220%', 'label' => 'Website Organic Traffic'),
            array('number' => '40%', 'label' => 'Consultation Conversion Rate')
        );
    }
    $case_study_link_text = get_post_meta($post->ID, '_finance_case_study_link_text', true);
    $case_study_link_url = get_post_meta($post->ID, '_finance_case_study_link_url', true);

    // Financial Services Types section (4x1 grid)
    $types_title = get_post_meta($post->ID, '_finance_types_title', true);
    $types = get_post_meta($post->ID, '_finance_types', true);
    if (empty($types)) {
        $types = array(
            array(
                'icon' => 'fas fa-briefcase',
                'title' => 'Financial Advisory',
                'services' => array('Independent financial advisors', 'Wealth management firms', 'Investment consultants', 'Retirement planning specialists')
            ),
            array(
                'icon' => 'fas fa-university',
                'title' => 'Banking & Credit',
                'services' => array('Community banks', 'Credit unions', 'Mortgage brokers', 'Alternative lending')
            ),
            array(
                'icon' => 'fas fa-shield-alt',
                'title' => 'Insurance Services',
                'services' => array('Life insurance agents', 'Health insurance brokers', 'Property & casualty', 'Commercial insurance')
            ),
            array(
                'icon' => 'fas fa-mobile-alt',
                'title' => 'Fintech & Innovation',
                'services' => array('Financial apps & platforms', 'Payment processors', 'Cryptocurrency services', 'Investment platforms')
            )
        );
    }

    // Compliance Framework section
    $compliance_title = get_post_meta($post->ID, '_finance_compliance_title', true);
    $compliance_points = get_post_meta($post->ID, '_finance_compliance_points', true);
    if (empty($compliance_points)) {
        $compliance_points = array(
            array(
                'title' => 'FCA Regulation Compliance',
                'description' => 'All campaigns reviewed for FCA compliance including appropriate risk warnings, disclaimers, and promotional guidelines.'
            ),
            array(
                'title' => 'GDPR Data Protection',
                'description' => 'Strict data handling procedures ensuring all lead generation and customer data processing meets GDPR requirements.'
            ),
            array(
                'title' => 'Platform Policy Adherence',
                'description' => 'Expert knowledge of Google Ads, Facebook, and LinkedIn financial services policies to ensure campaign approval.'
            ),
            array(
                'title' => 'Risk Warning Implementation',
                'description' => 'Proper implementation of required risk warnings and disclaimers across all marketing materials and channels.'
            ),
            array(
                'title' => 'Documentation & Audit Trail',
                'description' => 'Complete documentation of all campaigns and communications for regulatory audit requirements.'
            ),
            array(
                'title' => 'Ongoing Compliance Monitoring',
                'description' => 'Regular review and updates to ensure ongoing compliance with evolving financial services regulations.'
            )
        );
    }

    // Marketing Funnel section
    $funnel_title = get_post_meta($post->ID, '_finance_funnel_title', true);
    $funnel_steps = get_post_meta($post->ID, '_finance_funnel_steps', true);
    if (empty($funnel_steps)) {
        $funnel_steps = array(
            array(
                'title' => 'Awareness: Educational Content',
                'description' => 'Attract prospects with educational content about financial planning, investment strategies, and market insights.',
                'tactics' => array('Financial education blog posts', 'Market analysis videos', 'Social media insights')
            ),
            array(
                'title' => 'Interest: Value-Added Tools',
                'description' => 'Engage prospects with calculators, guides, and resources that provide immediate value and capture contact information.',
                'tactics' => array('Financial calculators', 'Planning guides', 'Webinar registration')
            ),
            array(
                'title' => 'Consideration: Trust Building',
                'description' => 'Build trust through case studies, testimonials, and demonstrations of expertise and qualifications.',
                'tactics' => array('Client success stories', 'Professional credentials', 'Regulatory compliance')
            ),
            array(
                'title' => 'Conversion: Consultation Booking',
                'description' => 'Convert qualified prospects into consultations with clear value propositions and easy booking processes.',
                'tactics' => array('Free consultation offers', 'Online booking systems', 'Qualification questions')
            )
        );
    }

    // Testimonial section (without image)
    $testimonial_quote = get_post_meta($post->ID, '_finance_testimonial_quote', true);
    $testimonial_name = get_post_meta($post->ID, '_finance_testimonial_name', true);
    $testimonial_position = get_post_meta($post->ID, '_finance_testimonial_position', true);
    $testimonial_company = get_post_meta($post->ID, '_finance_testimonial_company', true);

    // CTA section
    $cta_title = get_post_meta($post->ID, '_finance_cta_title', true);
    $cta_subtitle = get_post_meta($post->ID, '_finance_cta_subtitle', true);
    $cta_primary_text = get_post_meta($post->ID, '_finance_cta_primary_text', true);
    $cta_primary_url = get_post_meta($post->ID, '_finance_cta_primary_url', true);
    $cta_secondary_text = get_post_meta($post->ID, '_finance_cta_secondary_text', true);
    $cta_secondary_url = get_post_meta($post->ID, '_finance_cta_secondary_url', true);
    $cta_benefits = get_post_meta($post->ID, '_finance_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '? Free compliance review',
            '? FCA-compliant strategy',
            '? Trust-building approach'
        );
    }

    ?>
    <style>
        .finance-meta {
            max-width: 100%;
        }
        .finance-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .finance-meta .form-table td {
            padding: 15px 10px;
        }
        .finance-meta input[type="text"],
        .finance-meta textarea,
        .finance-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .finance-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .repeater-section {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            background: #f9f9f9;
        }
        .repeater-item {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px 0;
            background: white;
            position: relative;
        }
        .remove-item {
            background: #dc3232;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            float: right;
            margin-top: -5px;
        }
        .add-item {
            background: #0073aa;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            margin: 10px 0;
        }
        .item-field {
            margin: 10px 0;
        }
        .item-field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .item-field input, .item-field textarea {
            width: 100%;
            max-width: 400px;
        }
        .section-divider {
            border-top: 2px solid #0073aa;
            margin: 30px 0 20px 0;
            padding-top: 20px;
        }
        .image-upload {
            border: 1px solid #ddd;
            padding: 15px;
            background: #f9f9f9;
        }
        .image-preview {
            max-width: 200px;
            height: auto;
            margin: 10px 0;
        }
        .upload-button {
            background: #0073aa;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            margin-right: 10px;
        }
        .remove-image {
            background: #dc3232;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
        }
        .list-editor {
            border: 1px solid #ddd;
            padding: 10px;
            background: #f9f9f9;
        }
        .list-item {
            display: flex;
            margin: 5px 0;
        }
        .list-item input {
            flex: 1;
            margin-right: 10px;
        }
        .remove-list-item {
            background: #dc3232;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        .add-list-item {
            background: #0073aa;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            margin-top: 5px;
        }
    </style>

    <div class="finance-meta">
        <table class="form-table">
            <tr>
                <th><label for="finance_header_title">Page Header Title</label></th>
                <td>
                    <?php wp_editor($header_title ?: 'Finance Digital Marketing', 'finance_header_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main page heading. HTML allowed for formatting.</p>
                </td>
            </tr>
            <tr>
                <th><label for="finance_header_subtitle">Page Header Subtitle</label></th>
                <td>
                    <?php wp_editor($header_subtitle ?: 'Build trust and generate high-value leads with compliant financial services marketing', 'finance_header_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                    <p class="description">Subtitle text below the main heading.</p>
                </td>
            </tr>
            <tr>
                <th><label for="finance_overview_title">Overview Title</label></th>
                <td>
                    <?php wp_editor($overview_title ?: 'Navigate Financial Services Marketing with Confidence', 'finance_overview_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Overview section heading.</p>
                </td>
            </tr>
            <tr>
                <th><label for="finance_overview_content">Overview Content</label></th>
                <td>
                    <?php wp_editor($overview_content ?: 'Financial services marketing requires a delicate balance of trust-building, compliance, and results. Our specialised approach helps financial advisors, banks, insurance companies, and fintech startups generate qualified leads while maintaining regulatory compliance.', 'finance_overview_content', array('textarea_rows' => 6, 'media_buttons' => false)); ?>
                    <p class="description">Overview section content text.</p>
                </td>
            </tr>
            <tr>
                <th><label for="finance_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload">
                        <input type="hidden" id="finance_overview_image" name="finance_overview_image" value="<?php echo esc_attr($overview_image); ?>" />
                        <div id="overview-image-preview">
                            <?php if ($overview_image): ?>
                                <img src="<?php echo esc_url($overview_image); ?>" class="image-preview" />
                            <?php endif; ?>
                        </div>
                        <button type="button" class="upload-button" id="upload-overview-image">Choose Image</button>
                        <button type="button" class="remove-image" id="remove-overview-image">Remove Image</button>
                        <p><em>Upload an image for the overview section (recommended size: 600x400px)</em></p>
                    </div>
                </td>
            </tr>
        </table>

        <div class="section-divider">
            <h3>Challenges Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="finance_challenges_title">Challenges Title</label></th>
                    <td>
                        <?php wp_editor($challenges_title ?: 'Financial Marketing Challenges We Solve:', 'finance_challenges_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Challenges section heading.</p>
                    </td>
                </tr>
            </table>
            <div class="list-editor">
                <div id="challenges-container">
                    <?php foreach ($challenges as $index => $challenge): ?>
                        <div class="list-item">
                            <input type="text" name="finance_challenges[<?php echo $index; ?>]" value="<?php echo esc_attr($challenge); ?>" placeholder="Challenge..." />
                            <button type="button" class="remove-list-item">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-list-item" id="add-challenge">Add Challenge</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Marketing Solutions Section (2x2 Grid)</h3>
            <table class="form-table">
                <tr>
                    <th><label for="finance_solutions_title">Solutions Title</label></th>
                    <td>
                        <?php wp_editor($solutions_title ?: 'Our Financial Services Marketing Solutions', 'finance_solutions_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Solutions section heading.</p>
                    </td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="solutions-container">
                    <?php foreach ($solutions as $index => $solution): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-solution">Remove</button>
                            <div class="item-field">
                                <label>Icon (FontAwesome class):</label>
                                <input type="text" name="finance_solutions[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($solution['icon']); ?>" placeholder="fas fa-check-circle" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <?php wp_editor($solution['title'], 'finance_solutions_' . $index . '_title', array('textarea_name' => 'finance_solutions[' . $index . '][title]', 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <?php wp_editor($solution['description'], 'finance_solutions_' . $index . '_description', array('textarea_name' => 'finance_solutions[' . $index . '][description]', 'textarea_rows' => 4, 'media_buttons' => false)); ?>
                            </div>
                            <div class="item-field">
                                <label>Features (one per line):</label>
                                <textarea name="finance_solutions[<?php echo $index; ?>][features]" placeholder="FCA-compliant ad copy&#10;GDPR-compliant lead generation"><?php echo esc_textarea(is_array($solution['features']) ? implode("\n", $solution['features']) : $solution['features']); ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-solution">Add Solution</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Case Study Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="finance_case_study_label">Case Study Label</label></th>
                    <td>
                        <?php wp_editor($case_study_label ?: 'Success Story', 'finance_case_study_label', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Case study section label.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_case_study_title">Case Study Title</label></th>
                    <td>
                        <?php wp_editor($case_study_title ?: 'WealthWise Financial: 150% Increase in Qualified Leads', 'finance_case_study_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Case study main heading.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_case_study_content">Case Study Content</label></th>
                    <td>
                        <?php wp_editor($case_study_content ?: 'WealthWise Financial, an independent financial advisory firm, needed to build their client base while maintaining strict compliance with FCA regulations.', 'finance_case_study_content', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
                        <p class="description">Case study introduction text.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_case_study_challenge_title">Challenge Section Title</label></th>
                    <td>
                        <?php wp_editor($case_study_challenge_title ?: 'The Challenge', 'finance_case_study_challenge_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Challenge section heading.</p>
                    </td>
                </tr>
            </table>
            
            <h4>Challenge Points</h4>
            <div class="list-editor">
                <div id="challenges-cs-container">
                    <?php foreach ($case_study_challenges as $index => $challenge): ?>
                        <div class="list-item">
                            <input type="text" name="finance_case_study_challenges[<?php echo $index; ?>]" value="<?php echo esc_attr($challenge); ?>" placeholder="Challenge..." />
                            <button type="button" class="remove-list-item">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-list-item" id="add-cs-challenge">Add Challenge</button>
            </div>

            <table class="form-table">
                <tr>
                    <th><label for="finance_case_study_solution_title">Solution Section Title</label></th>
                    <td>
                        <?php wp_editor($case_study_solution_title ?: 'Our Solution', 'finance_case_study_solution_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Solution section heading.</p>
                    </td>
                </tr>
            </table>
            
            <h4>Solution Points</h4>
            <div class="list-editor">
                <div id="solutions-cs-container">
                    <?php foreach ($case_study_solutions as $index => $solution): ?>
                        <div class="list-item">
                            <input type="text" name="finance_case_study_solutions[<?php echo $index; ?>]" value="<?php echo esc_attr($solution); ?>" placeholder="Solution..." />
                            <button type="button" class="remove-list-item">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-list-item" id="add-cs-solution">Add Solution</button>
            </div>

            <table class="form-table">
                <tr>
                    <th><label for="finance_case_study_results_title">Results Section Title</label></th>
                    <td>
                        <?php wp_editor($case_study_results_title ?: 'Results After 8 Months', 'finance_case_study_results_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Results section heading.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_case_study_link_text">Case Study Link Text</label></th>
                    <td>
                        <?php wp_editor($case_study_link_text ?: 'Read Full Case Study', 'finance_case_study_link_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Link text for full case study.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_case_study_link_url">Case Study Link URL</label></th>
                    <td><input type="url" id="finance_case_study_link_url" name="finance_case_study_link_url" value="<?php echo esc_attr($case_study_link_url); ?>" placeholder="/case-studies" /></td>
                </tr>
            </table>

            <h4>Results</h4>
            <div class="repeater-section">
                <div id="results-container">
                    <?php foreach ($case_study_results as $index => $result): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-result">Remove</button>
                            <div class="item-field">
                                <label>Number/Percentage:</label>
                                <input type="text" name="finance_case_study_results[<?php echo $index; ?>][number]" value="<?php echo esc_attr($result['number']); ?>" placeholder="150%" />
                            </div>
                            <div class="item-field">
                                <label>Label:</label>
                                <input type="text" name="finance_case_study_results[<?php echo $index; ?>][label]" value="<?php echo esc_attr($result['label']); ?>" placeholder="Qualified Leads Increase" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-result">Add Result</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Financial Services Types (4x1 Grid)</h3>
            <table class="form-table">
                <tr>
                    <th><label for="finance_types_title">Types Title</label></th>
                    <td>
                        <?php wp_editor($types_title ?: 'Financial Services We Specialise In', 'finance_types_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Financial services types section heading.</p>
                    </td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="types-container">
                    <?php foreach ($types as $index => $type): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-type">Remove</button>
                            <div class="item-field">
                                <label>Icon (FontAwesome class):</label>
                                <input type="text" name="finance_types[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($type['icon']); ?>" placeholder="fas fa-briefcase" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <?php wp_editor($type['title'], 'finance_types_' . $index . '_title', array('textarea_name' => 'finance_types[' . $index . '][title]', 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                            </div>
                            <div class="item-field">
                                <label>Services (one per line):</label>
                                <textarea name="finance_types[<?php echo $index; ?>][services]" placeholder="Independent financial advisors&#10;Wealth management firms"><?php echo esc_textarea(is_array($type['services']) ? implode("\n", $type['services']) : $type['services']); ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-type">Add Service Type</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Compliance Framework</h3>
            <table class="form-table">
                <tr>
                    <th><label for="finance_compliance_title">Compliance Title</label></th>
                    <td>
                        <?php wp_editor($compliance_title ?: 'Our Financial Marketing Compliance Framework', 'finance_compliance_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Compliance section heading.</p>
                    </td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="compliance-container">
                    <?php foreach ($compliance_points as $index => $point): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-compliance">Remove</button>
                            <div class="item-field">
                                <label>Title:</label>
                                <?php wp_editor($point['title'], 'finance_compliance_points_' . $index . '_title', array('textarea_name' => 'finance_compliance_points[' . $index . '][title]', 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <?php wp_editor($point['description'], 'finance_compliance_points_' . $index . '_description', array('textarea_name' => 'finance_compliance_points[' . $index . '][description]', 'textarea_rows' => 4, 'media_buttons' => false)); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-compliance">Add Compliance Point</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Marketing Funnel</h3>
            <table class="form-table">
                <tr>
                    <th><label for="finance_funnel_title">Funnel Title</label></th>
                    <td>
                        <?php wp_editor($funnel_title ?: 'The Financial Services Marketing Funnel', 'finance_funnel_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Marketing funnel section heading.</p>
                    </td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="funnel-container">
                    <?php foreach ($funnel_steps as $index => $step): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-funnel">Remove</button>
                            <div class="item-field">
                                <label>Step Title:</label>
                                <?php wp_editor($step['title'], 'finance_funnel_steps_' . $index . '_title', array('textarea_name' => 'finance_funnel_steps[' . $index . '][title]', 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                            </div>
                            <div class="item-field">
                                <label>Step Description:</label>
                                <?php wp_editor($step['description'], 'finance_funnel_steps_' . $index . '_description', array('textarea_name' => 'finance_funnel_steps[' . $index . '][description]', 'textarea_rows' => 4, 'media_buttons' => false)); ?>
                            </div>
                            <div class="item-field">
                                <label>Tactics (one per line):</label>
                                <textarea name="finance_funnel_steps[<?php echo $index; ?>][tactics]" placeholder="Financial education blog posts&#10;Market analysis videos"><?php echo esc_textarea(is_array($step['tactics']) ? implode("\n", $step['tactics']) : $step['tactics']); ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-funnel">Add Funnel Step</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Testimonial Section (without image)</h3>
            <table class="form-table">
                <tr>
                    <th><label for="finance_testimonial_quote">Testimonial Quote</label></th>
                    <td>
                        <?php wp_editor($testimonial_quote ?: 'Aimpro Digital\'s understanding of financial services compliance is exceptional. They helped us navigate FCA regulations while generating 150% more qualified leads. Their educational content strategy positions us as thought leaders in our market, and the lead quality has improved dramatically. We finally have a marketing partner that understands our industry.', 'finance_testimonial_quote', array('textarea_rows' => 6, 'media_buttons' => false)); ?>
                        <p class="description">Client testimonial quote content.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_testimonial_name">Client Name</label></th>
                    <td><input type="text" id="finance_testimonial_name" name="finance_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" placeholder="David Wilson" /></td>
                </tr>
                <tr>
                    <th><label for="finance_testimonial_position">Client Position</label></th>
                    <td><input type="text" id="finance_testimonial_position" name="finance_testimonial_position" value="<?php echo esc_attr($testimonial_position); ?>" placeholder="Director, WealthWise Financial" /></td>
                </tr>
                <tr>
                    <th><label for="finance_testimonial_company">Company Description</label></th>
                    <td><input type="text" id="finance_testimonial_company" name="finance_testimonial_company" value="<?php echo esc_attr($testimonial_company); ?>" placeholder="Independent Financial Advisory Firm" /></td>
                </tr>
            </table>
        </div>

        <div class="section-divider">
            <h3>CTA Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="finance_cta_title">CTA Title</label></th>
                    <td>
                        <?php wp_editor($cta_title ?: 'Ready to Grow Your Financial Services Business?', 'finance_cta_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Call-to-action section main heading.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_cta_subtitle">CTA Subtitle</label></th>
                    <td>
                        <?php wp_editor($cta_subtitle ?: 'Let\'s create a compliant, trust-building marketing strategy that generates high-value leads for your financial services.', 'finance_cta_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                        <p class="description">Call-to-action subtitle text.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_cta_primary_text">Primary Button Text</label></th>
                    <td>
                        <?php wp_editor($cta_primary_text ?: 'Get Compliance Audit', 'finance_cta_primary_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Primary call-to-action button text.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_cta_primary_url">Primary Button URL</label></th>
                    <td><input type="url" id="finance_cta_primary_url" name="finance_cta_primary_url" value="<?php echo esc_attr($cta_primary_url); ?>" placeholder="/contact" /></td>
                </tr>
                <tr>
                    <th><label for="finance_cta_secondary_text">Secondary Button Text</label></th>
                    <td>
                        <?php wp_editor($cta_secondary_text ?: 'View Finance Success Stories', 'finance_cta_secondary_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Secondary call-to-action button text.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="finance_cta_secondary_url">Secondary Button URL</label></th>
                    <td><input type="url" id="finance_cta_secondary_url" name="finance_cta_secondary_url" value="<?php echo esc_attr($cta_secondary_url); ?>" placeholder="/case-studies" /></td>
                </tr>
            </table>
            
            <h4>CTA Benefits</h4>
            <div class="list-editor">
                <div id="cta-benefits-container">
                    <?php foreach ($cta_benefits as $index => $benefit): ?>
                        <div class="list-item">
                            <input type="text" name="finance_cta_benefits[<?php echo $index; ?>]" value="<?php echo esc_attr($benefit); ?>" placeholder="? Benefit..." />
                            <button type="button" class="remove-list-item">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-list-item" id="add-benefit">Add Benefit</button>
            </div>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        // Media uploader for overview image
        $('#upload-overview-image').click(function(e) {
            e.preventDefault();
            var image = wp.media({
                title: 'Upload Overview Image',
                multiple: false
            }).open()
            .on('select', function(e){
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                $('#finance_overview_image').val(image_url);
                $('#overview-image-preview').html('<img src="' + image_url + '" class="image-preview" />');
            });
        });

        $('#remove-overview-image').click(function() {
            $('#finance_overview_image').val('');
            $('#overview-image-preview').html('');
        });

        // Add/remove functionality for all repeaters and lists
        var repeaterConfigs = [
            {addBtn: '.add-solution', container: '#solutions-container', prefix: 'finance_solutions', type: 'solution'},
            {addBtn: '.add-result', container: '#results-container', prefix: 'finance_case_study_results', type: 'result'},
            {addBtn: '.add-type', container: '#types-container', prefix: 'finance_types', type: 'type'},
            {addBtn: '.add-compliance', container: '#compliance-container', prefix: 'finance_compliance_points', type: 'compliance'},
            {addBtn: '.add-funnel', container: '#funnel-container', prefix: 'finance_funnel_steps', type: 'funnel'}
        ];

        var listConfigs = [
            {addBtn: '#add-challenge', container: '#challenges-container', prefix: 'finance_challenges'},
            {addBtn: '#add-cs-challenge', container: '#challenges-cs-container', prefix: 'finance_case_study_challenges'},
            {addBtn: '#add-cs-solution', container: '#solutions-cs-container', prefix: 'finance_case_study_solutions'},
            {addBtn: '#add-benefit', container: '#cta-benefits-container', prefix: 'finance_cta_benefits'}
        ];

        // Handle repeater items
        repeaterConfigs.forEach(function(config) {
            $(document).on('click', config.addBtn, function() {
                var container = $(config.container);
                var index = container.find('.repeater-item').length;
                var html = '';
                
                if (config.type === 'solution') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-solution">Remove</button>' +
                        '<div class="item-field"><label>Icon:</label><input type="text" name="' + config.prefix + '[' + index + '][icon]" placeholder="fas fa-check-circle" /></div>' +
                        '<div class="item-field"><label>Title:</label><input type="text" name="' + config.prefix + '[' + index + '][title]" placeholder="Solution Title" /></div>' +
                        '<div class="item-field"><label>Description:</label><textarea name="' + config.prefix + '[' + index + '][description]" placeholder="Solution description..."></textarea></div>' +
                        '<div class="item-field"><label>Features:</label><textarea name="' + config.prefix + '[' + index + '][features]" placeholder="Feature 1\nFeature 2"></textarea></div>' +
                        '</div>';
                } else if (config.type === 'result') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-result">Remove</button>' +
                        '<div class="item-field"><label>Number:</label><input type="text" name="' + config.prefix + '[' + index + '][number]" placeholder="150%" /></div>' +
                        '<div class="item-field"><label>Label:</label><input type="text" name="' + config.prefix + '[' + index + '][label]" placeholder="Increase in Leads" /></div>' +
                        '</div>';
                } else if (config.type === 'type') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-type">Remove</button>' +
                        '<div class="item-field"><label>Icon:</label><input type="text" name="' + config.prefix + '[' + index + '][icon]" placeholder="fas fa-briefcase" /></div>' +
                        '<div class="item-field"><label>Title:</label><input type="text" name="' + config.prefix + '[' + index + '][title]" placeholder="Service Type" /></div>' +
                        '<div class="item-field"><label>Services:</label><textarea name="' + config.prefix + '[' + index + '][services]" placeholder="Service 1\nService 2"></textarea></div>' +
                        '</div>';
                } else if (config.type === 'compliance') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-compliance">Remove</button>' +
                        '<div class="item-field"><label>Title:</label><input type="text" name="' + config.prefix + '[' + index + '][title]" placeholder="Compliance Point" /></div>' +
                        '<div class="item-field"><label>Description:</label><textarea name="' + config.prefix + '[' + index + '][description]" placeholder="Compliance description..."></textarea></div>' +
                        '</div>';
                } else if (config.type === 'funnel') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-funnel">Remove</button>' +
                        '<div class="item-field"><label>Title:</label><input type="text" name="' + config.prefix + '[' + index + '][title]" placeholder="Funnel Step" /></div>' +
                        '<div class="item-field"><label>Description:</label><textarea name="' + config.prefix + '[' + index + '][description]" placeholder="Step description..."></textarea></div>' +
                        '<div class="item-field"><label>Tactics:</label><textarea name="' + config.prefix + '[' + index + '][tactics]" placeholder="Tactic 1\nTactic 2"></textarea></div>' +
                        '</div>';
                }
                
                container.append(html);
            });
        });

        // Handle list items
        listConfigs.forEach(function(config) {
            $(document).on('click', config.addBtn, function() {
                var container = $(config.container);
                var index = container.find('.list-item').length;
                var html = '<div class="list-item">' +
                    '<input type="text" name="' + config.prefix + '[' + index + ']" placeholder="Item..." />' +
                    '<button type="button" class="remove-list-item">Remove</button>' +
                    '</div>';
                container.append(html);
            });
        });

        // Remove items
        $(document).on('click', '.remove-item, .remove-list-item', function() {
            $(this).closest('.repeater-item, .list-item').remove();
        });
    });
    </script>
    <?php
}

function save_finance_meta_box_data($post_id) {
    if (!isset($_POST['finance_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['finance_meta_box_nonce'], 'finance_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save all rich text content fields
    $rich_text_fields = array(
        'finance_header_title' => '_finance_header_title',
        'finance_header_subtitle' => '_finance_header_subtitle',
        'finance_overview_title' => '_finance_overview_title',
        'finance_overview_content' => '_finance_overview_content',
        'finance_challenges_title' => '_finance_challenges_title',
        'finance_solutions_title' => '_finance_solutions_title',
        'finance_case_study_label' => '_finance_case_study_label',
        'finance_case_study_title' => '_finance_case_study_title',
        'finance_case_study_content' => '_finance_case_study_content',
        'finance_case_study_challenge_title' => '_finance_case_study_challenge_title',
        'finance_case_study_solution_title' => '_finance_case_study_solution_title',
        'finance_case_study_results_title' => '_finance_case_study_results_title',
        'finance_case_study_link_text' => '_finance_case_study_link_text',
        'finance_types_title' => '_finance_types_title',
        'finance_compliance_title' => '_finance_compliance_title',
        'finance_funnel_title' => '_finance_funnel_title',
        'finance_testimonial_quote' => '_finance_testimonial_quote',
        'finance_cta_title' => '_finance_cta_title',
        'finance_cta_subtitle' => '_finance_cta_subtitle',
        'finance_cta_primary_text' => '_finance_cta_primary_text',
        'finance_cta_secondary_text' => '_finance_cta_secondary_text'
    );

    foreach ($rich_text_fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, wp_kses_post($_POST[$field]));
        }
    }

    // Save simple text fields (URLs, names, positions)
    $simple_fields = array(
        'finance_overview_image' => '_finance_overview_image',
        'finance_case_study_link_url' => '_finance_case_study_link_url',
        'finance_testimonial_name' => '_finance_testimonial_name',
        'finance_testimonial_position' => '_finance_testimonial_position',
        'finance_testimonial_company' => '_finance_testimonial_company',
        'finance_cta_primary_url' => '_finance_cta_primary_url',
        'finance_cta_secondary_url' => '_finance_cta_secondary_url'
    );

    foreach ($simple_fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
        }
    }

    // Save array fields
    $array_fields = array(
        'finance_challenges' => '_finance_challenges',
        'finance_case_study_challenges' => '_finance_case_study_challenges',
        'finance_case_study_solutions' => '_finance_case_study_solutions',
        'finance_cta_benefits' => '_finance_cta_benefits'
    );

    foreach ($array_fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, array_map('sanitize_text_field', $_POST[$field]));
        }
    }

    // Save complex repeater fields
    if (isset($_POST['finance_solutions'])) {
        $solutions = array();
        foreach ($_POST['finance_solutions'] as $solution) {
            $solutions[] = array(
                'icon' => sanitize_text_field($solution['icon']),
                'title' => wp_kses_post($solution['title']),
                'description' => wp_kses_post($solution['description']),
                'features' => array_filter(array_map('trim', explode("\n", sanitize_textarea_field($solution['features']))))
            );
        }
        update_post_meta($post_id, '_finance_solutions', $solutions);
    }

    if (isset($_POST['finance_case_study_results'])) {
        $results = array();
        foreach ($_POST['finance_case_study_results'] as $result) {
            $results[] = array(
                'number' => sanitize_text_field($result['number']),
                'label' => sanitize_text_field($result['label'])
            );
        }
        update_post_meta($post_id, '_finance_case_study_results', $results);
    }

    if (isset($_POST['finance_types'])) {
        $types = array();
        foreach ($_POST['finance_types'] as $type) {
            $types[] = array(
                'icon' => sanitize_text_field($type['icon']),
                'title' => wp_kses_post($type['title']),
                'services' => array_filter(array_map('trim', explode("\n", sanitize_textarea_field($type['services']))))
            );
        }
        update_post_meta($post_id, '_finance_types', $types);
    }

    if (isset($_POST['finance_compliance_points'])) {
        $compliance = array();
        foreach ($_POST['finance_compliance_points'] as $point) {
            $compliance[] = array(
                'title' => wp_kses_post($point['title']),
                'description' => wp_kses_post($point['description'])
            );
        }
        update_post_meta($post_id, '_finance_compliance_points', $compliance);
    }

    if (isset($_POST['finance_funnel_steps'])) {
        $funnel = array();
        foreach ($_POST['finance_funnel_steps'] as $step) {
            $funnel[] = array(
                'title' => wp_kses_post($step['title']),
                'description' => wp_kses_post($step['description']),
                'tactics' => array_filter(array_map('trim', explode("\n", sanitize_textarea_field($step['tactics']))))
            );
        }
        update_post_meta($post_id, '_finance_funnel_steps', $funnel);
    }
}
add_action('save_post', 'save_finance_meta_box_data');
