<?php
// Professional Services Page Meta Fields

function add_professional_services_meta_boxes() {
    global $post;
    
    // Only add to pages with the professional-services template
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        
        // Only register this meta box for the professional-services page
        if ($page_template === 'page-professional-services.php') {
            add_meta_box(
                'professional_services_meta_box',
                'Professional Services Page Content',
                'professional_services_meta_box_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'add_professional_services_meta_boxes');

function professional_services_meta_box_callback($post) {
    // Only show on professional services page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-professional-services.php') {
        echo '<p>This meta box only appears when using the "Professional Services Industry Page" template.</p>';
        return;
    }

    wp_nonce_field('professional_services_meta_box', 'professional_services_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_professional_services_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_professional_services_header_subtitle', true);
    $overview_title = get_post_meta($post->ID, '_professional_services_overview_title', true);
    $overview_content = get_post_meta($post->ID, '_professional_services_overview_content', true);
    $overview_image = get_post_meta($post->ID, '_professional_services_overview_image', true);

    // Challenges section
    $challenges_title = get_post_meta($post->ID, '_professional_services_challenges_title', true);
    $challenges = get_post_meta($post->ID, '_professional_services_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'Building trust and credibility online',
            'Complex, long sales cycles',
            'Compliance and ethical advertising constraints',
            'High-value client acquisition costs',
            'Demonstrating expertise and thought leadership',
            'Differentiating from established competitors'
        );
    }

    // Marketing Solutions section (2x2 grid)
    $solutions_title = get_post_meta($post->ID, '_professional_services_solutions_title', true);
    $solutions = get_post_meta($post->ID, '_professional_services_solutions', true);
    if (empty($solutions)) {
        $solutions = array(
            array(
                'icon' => 'fas fa-search',
                'title' => 'Local SEO for Professional Services',
                'description' => 'Dominate local search results when potential clients search for legal, accounting, or consulting services in your area.',
                'features' => array('Google My Business optimisation', 'Local citation building', 'Practice area keyword targeting', 'Review management and reputation')
            ),
            array(
                'icon' => 'fas fa-file-alt',
                'title' => 'Content Marketing & Thought Leadership',
                'description' => 'Establish your expertise through strategic content that demonstrates knowledge and builds trust with potential clients.',
                'features' => array('Legal/industry blog writing', 'Case study development', 'White paper creation', 'Video content strategy')
            ),
            array(
                'icon' => 'fab fa-linkedin',
                'title' => 'LinkedIn Marketing for B2B',
                'description' => 'Build professional networks and generate high-value leads through strategic LinkedIn advertising and organic engagement.',
                'features' => array('LinkedIn profile optimisation', 'Sponsored content campaigns', 'Lead generation forms', 'Professional networking strategy')
            ),
            array(
                'icon' => 'fas fa-gavel',
                'title' => 'Compliance-Focused PPC',
                'description' => 'Drive qualified leads while maintaining strict adherence to professional advertising regulations and ethical guidelines.',
                'features' => array('Google Ads for legal/professional', 'Compliance monitoring', 'High-intent keyword targeting', 'Landing page optimisation')
            )
        );
    }

    // Case study section
    $case_study_label = get_post_meta($post->ID, '_professional_services_case_study_label', true);
    $case_study_title = get_post_meta($post->ID, '_professional_services_case_study_title', true);
    $case_study_content = get_post_meta($post->ID, '_professional_services_case_study_content', true);
    $case_study_challenge_title = get_post_meta($post->ID, '_professional_services_case_study_challenge_title', true);
    $case_study_challenges = get_post_meta($post->ID, '_professional_services_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            'Low-quality leads from generic campaigns',
            'Strict compliance requirements',
            'Long sales cycles and high client lifetime value',
            'Competitive landscape with established firms'
        );
    }
    $case_study_solution_title = get_post_meta($post->ID, '_professional_services_case_study_solution_title', true);
    $case_study_solutions = get_post_meta($post->ID, '_professional_services_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Compliance-focused content marketing',
            'LinkedIn thought leadership campaigns',
            'Educational webinar funnels',
            'High-intent keyword targeting'
        );
    }
    $case_study_results_title = get_post_meta($post->ID, '_professional_services_case_study_results_title', true);
    $case_study_results = get_post_meta($post->ID, '_professional_services_case_study_results', true);
    if (empty($case_study_results)) {
        $case_study_results = array(
            array('number' => '300%', 'label' => 'Lead Quality Improvement'),
            array('number' => '220%', 'label' => 'Qualified Consultation Requests'),
            array('number' => '185%', 'label' => 'Organic Search Traffic'),
            array('number' => '450%', 'label' => 'LinkedIn Engagement')
        );
    }
    $case_study_link_text = get_post_meta($post->ID, '_professional_services_case_study_link_text', true);
    $case_study_link_url = get_post_meta($post->ID, '_professional_services_case_study_link_url', true);

    // Process section
    $process_title = get_post_meta($post->ID, '_professional_services_process_title', true);
    $process_steps = get_post_meta($post->ID, '_professional_services_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'title' => 'Compliance Audit',
                'description' => 'Review all regulatory requirements and ethical guidelines for your profession and jurisdiction.'
            ),
            array(
                'title' => 'Authority Strategy',
                'description' => 'Develop content and positioning strategy to establish your firm as a trusted authority in your practice area.'
            ),
            array(
                'title' => 'Multi-Channel Implementation',
                'description' => 'Deploy integrated campaigns across search, social, and content channels with compliance monitoring.'
            ),
            array(
                'title' => 'Lead Nurturing',
                'description' => 'Implement sophisticated nurturing sequences designed for long sales cycles and high-value clients.'
            )
        );
    }

    // Industry Insights section
    $insights_title = get_post_meta($post->ID, '_professional_services_insights_title', true);
    $insights = get_post_meta($post->ID, '_professional_services_insights', true);
    if (empty($insights)) {
        $insights = array(
            array(
                'stat' => '78%',
                'title' => 'Research Before Contact',
                'description' => '78% of clients research professional services extensively before making contact'
            ),
            array(
                'stat' => '65%',
                'title' => 'Trust Factor',
                'description' => '65% of clients choose professionals based on online reputation and reviews'
            ),
            array(
                'stat' => '89%',
                'title' => 'Local Search',
                'description' => '89% of professional service searches include local intent'
            ),
            array(
                'stat' => '92%',
                'title' => 'Content Influence',
                'description' => '92% of buyers are influenced by educational content during research'
            )
        );
    }

    // Testimonial section (without image)
    $testimonial_quote = get_post_meta($post->ID, '_professional_services_testimonial_quote', true);
    $testimonial_name = get_post_meta($post->ID, '_professional_services_testimonial_name', true);
    $testimonial_position = get_post_meta($post->ID, '_professional_services_testimonial_position', true);
    $testimonial_company = get_post_meta($post->ID, '_professional_services_testimonial_company', true);

    // CTA section
    $cta_title = get_post_meta($post->ID, '_professional_services_cta_title', true);
    $cta_subtitle = get_post_meta($post->ID, '_professional_services_cta_subtitle', true);
    $cta_primary_text = get_post_meta($post->ID, '_professional_services_cta_primary_text', true);
    $cta_primary_url = get_post_meta($post->ID, '_professional_services_cta_primary_url', true);
    $cta_secondary_text = get_post_meta($post->ID, '_professional_services_cta_secondary_text', true);
    $cta_secondary_url = get_post_meta($post->ID, '_professional_services_cta_secondary_url', true);
    $cta_benefits = get_post_meta($post->ID, '_professional_services_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '? Compliance-focused strategies',
            '? Industry-specific expertise',
            '? Confidential consultation'
        );
    }

    ?>
    <style>
        .professional-services-meta {
            max-width: 100%;
        }
        .professional-services-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .professional-services-meta .form-table td {
            padding: 15px 10px;
        }
        .professional-services-meta input[type="text"],
        .professional-services-meta textarea,
        .professional-services-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .professional-services-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .professional-services-meta .repeater-field {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }
        .professional-services-meta .repeater-field input {
            margin-bottom: 5px;
        }
        .professional-services-meta .image-upload-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .professional-services-meta .image-preview {
            max-width: 150px;
            height: auto;
        }
        .professional-services-meta .upload-button,
        .professional-services-meta .remove-button {
            padding: 5px 10px;
            font-size: 12px;
        }
        .professional-services-meta h3 {
            margin-top: 30px;
            margin-bottom: 15px;
            padding: 10px;
            background: #0073aa;
            color: white;
            border-radius: 3px;
        }
    </style>

    <div class="professional-services-meta">
        
        <!-- Header Section -->
        <h3>Header Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="professional_services_header_title">Page Title</label></th>
                <td>
                    <?php wp_editor($header_title, 'professional_services_header_title_editor', array(
                        'textarea_name' => 'professional_services_header_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_header_subtitle">Page Subtitle</label></th>
                <td>
                    <?php wp_editor($header_subtitle, 'professional_services_header_subtitle_editor', array(
                        'textarea_name' => 'professional_services_header_subtitle',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
        </table>

        <!-- Overview Section -->
        <h3>Overview Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="professional_services_overview_title">Overview Title</label></th>
                <td>
                    <?php wp_editor($overview_title, 'professional_services_overview_title_editor', array(
                        'textarea_name' => 'professional_services_overview_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_overview_content">Overview Content</label></th>
                <td>
                    <?php wp_editor($overview_content, 'professional_services_overview_content_editor', array(
                        'textarea_name' => 'professional_services_overview_content',
                        'media_buttons' => false,
                        'textarea_rows' => 6,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload-container">
                        <input type="url" 
                               id="professional_services_overview_image" 
                               name="professional_services_overview_image" 
                               value="<?php echo esc_url($overview_image); ?>"
                               placeholder="Image URL" />
                        <button type="button" class="button upload-button" data-target="professional_services_overview_image">Upload Image</button>
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" class="image-preview" />
                            <button type="button" class="button remove-button" data-target="professional_services_overview_image">Remove</button>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Challenges Section -->
        <h3>Challenges Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="professional_services_challenges_title">Challenges Title</label></th>
                <td>
                    <?php wp_editor($challenges_title, 'professional_services_challenges_title_editor', array(
                        'textarea_name' => 'professional_services_challenges_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
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
                                    <input type="text" 
                                           name="professional_services_challenges[]" 
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

        <!-- Marketing Solutions Section -->
        <h3>Marketing Solutions Section (2x2 Grid)</h3>
        <table class="form-table">
            <tr>
                <th><label for="professional_services_solutions_title">Solutions Title</label></th>
                <td>
                    <?php wp_editor($solutions_title, 'professional_services_solutions_title_editor', array(
                        'textarea_name' => 'professional_services_solutions_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
        </table>
        
        <div id="solutions-repeater">
            <?php if (!empty($solutions)): ?>
                <?php foreach ($solutions as $index => $solution): ?>
                    <div class="repeater-field">
                        <h4>Solution <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="professional_services_solutions[<?php echo $index; ?>][icon]" 
                               value="<?php echo esc_attr($solution['icon']); ?>"
                               placeholder="Icon class (e.g., fas fa-search)" />
                        <input type="text" 
                               name="professional_services_solutions[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($solution['title']); ?>"
                               placeholder="Solution title" />
                        <?php wp_editor($solution['description'], 'professional_services_solutions_description_' . $index . '_editor', array(
                            'textarea_name' => 'professional_services_solutions[' . $index . '][description]',
                            'media_buttons' => false,
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        )); ?>
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($solution['features'] as $feat_index => $feature): ?>
                                <input type="text" 
                                       name="professional_services_solutions[<?php echo $index; ?>][features][]" 
                                       value="<?php echo esc_attr($feature); ?>"
                                       placeholder="Feature" />
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button remove-repeater-item">Remove Solution</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Case Study Section -->
        <h3>Case Study Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="professional_services_case_study_label">Case Study Label</label></th>
                <td>
                    <?php wp_editor($case_study_label, 'professional_services_case_study_label_editor', array(
                        'textarea_name' => 'professional_services_case_study_label',
                        'media_buttons' => false,
                        'textarea_rows' => 1,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_case_study_title">Case Study Title</label></th>
                <td>
                    <?php wp_editor($case_study_title, 'professional_services_case_study_title_editor', array(
                        'textarea_name' => 'professional_services_case_study_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_case_study_content">Case Study Content</label></th>
                <td>
                    <?php wp_editor($case_study_content, 'professional_services_case_study_content_editor', array(
                        'textarea_name' => 'professional_services_case_study_content',
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_case_study_challenge_title">Challenge Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_challenge_title, 'professional_services_case_study_challenge_title_editor', array(
                        'textarea_name' => 'professional_services_case_study_challenge_title',
                        'media_buttons' => false,
                        'textarea_rows' => 1,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
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
                                           name="professional_services_case_study_challenges[]" 
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
                <th><label for="professional_services_case_study_solution_title">Solution Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_solution_title, 'professional_services_case_study_solution_title_editor', array(
                        'textarea_name' => 'professional_services_case_study_solution_title',
                        'media_buttons' => false,
                        'textarea_rows' => 1,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
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
                                           name="professional_services_case_study_solutions[]" 
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
                <th><label for="professional_services_case_study_results_title">Results Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_results_title, 'professional_services_case_study_results_title_editor', array(
                        'textarea_name' => 'professional_services_case_study_results_title',
                        'media_buttons' => false,
                        'textarea_rows' => 1,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
        </table>

        <div id="case-study-results-repeater">
            <?php if (!empty($case_study_results)): ?>
                <?php foreach ($case_study_results as $index => $result): ?>
                    <div class="repeater-field">
                        <h4>Result <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="professional_services_case_study_results[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($result['number']); ?>"
                               placeholder="Number (e.g., 300%)" />
                        <input type="text" 
                               name="professional_services_case_study_results[<?php echo $index; ?>][label]" 
                               value="<?php echo esc_attr($result['label']); ?>"
                               placeholder="Label" />
                        <button type="button" class="button remove-repeater-item">Remove Result</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <table class="form-table">
            <tr>
                <th><label for="professional_services_case_study_link_text">Case Study Link Text</label></th>
                <td>
                    <input type="text" 
                           id="professional_services_case_study_link_text" 
                           name="professional_services_case_study_link_text" 
                           value="<?php echo esc_attr($case_study_link_text); ?>"
                           placeholder="Read Full Case Study" />
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_case_study_link_url">Case Study Link URL</label></th>
                <td>
                    <input type="url" 
                           id="professional_services_case_study_link_url" 
                           name="professional_services_case_study_link_url" 
                           value="<?php echo esc_url($case_study_link_url); ?>"
                           placeholder="/case-studies" />
                </td>
            </tr>
        </table>

        <!-- Process Section -->
        <h3>Process Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="professional_services_process_title">Process Title</label></th>
                <td>
                    <?php wp_editor($process_title, 'professional_services_process_title_editor', array(
                        'textarea_name' => 'professional_services_process_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
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
                               name="professional_services_process_steps[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($step['title']); ?>"
                               placeholder="Step title" />
                        <?php wp_editor($step['description'], 'professional_services_process_steps_description_' . $index . '_editor', array(
                            'textarea_name' => 'professional_services_process_steps[' . $index . '][description]',
                            'media_buttons' => false,
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
                        )); ?>
                        <button type="button" class="button remove-repeater-item">Remove Step</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Industry Insights Section -->
        <h3>Industry Insights Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="professional_services_insights_title">Insights Title</label></th>
                <td>
                    <?php wp_editor($insights_title, 'professional_services_insights_title_editor', array(
                        'textarea_name' => 'professional_services_insights_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
        </table>

        <div id="insights-repeater">
            <?php if (!empty($insights)): ?>
                <?php foreach ($insights as $index => $insight): ?>
                    <div class="repeater-field">
                        <h4>Insight <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="professional_services_insights[<?php echo $index; ?>][stat]" 
                               value="<?php echo esc_attr($insight['stat']); ?>"
                               placeholder="Statistic (e.g., 78%)" />
                        <input type="text" 
                               name="professional_services_insights[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($insight['title']); ?>"
                               placeholder="Insight title" />
                        <?php wp_editor($insight['description'], 'professional_services_insights_description_' . $index . '_editor', array(
                            'textarea_name' => 'professional_services_insights[' . $index . '][description]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        )); ?>
                        <button type="button" class="button remove-repeater-item">Remove Insight</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Testimonial Section -->
        <h3>Testimonial Section (No Image)</h3>
        <table class="form-table">
            <tr>
                <th><label for="professional_services_testimonial_quote">Testimonial Quote</label></th>
                <td>
                    <?php wp_editor($testimonial_quote, 'professional_services_testimonial_quote_editor', array(
                        'textarea_name' => 'professional_services_testimonial_quote',
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_testimonial_name">Customer Name</label></th>
                <td>
                    <input type="text" 
                           id="professional_services_testimonial_name" 
                           name="professional_services_testimonial_name" 
                           value="<?php echo esc_attr($testimonial_name); ?>"
                           placeholder="Elizabeth Brown" />
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_testimonial_position">Customer Position</label></th>
                <td>
                    <input type="text" 
                           id="professional_services_testimonial_position" 
                           name="professional_services_testimonial_position" 
                           value="<?php echo esc_attr($testimonial_position); ?>"
                           placeholder="Managing Partner, Brown & Associates Law" />
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_testimonial_company">Company Description</label></th>
                <td>
                    <input type="text" 
                           id="professional_services_testimonial_company" 
                           name="professional_services_testimonial_company" 
                           value="<?php echo esc_attr($testimonial_company); ?>"
                           placeholder="Multi-practice law firm with 15 attorneys" />
                </td>
            </tr>
        </table>

        <!-- CTA Section -->
        <h3>CTA Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="professional_services_cta_title">CTA Title</label></th>
                <td>
                    <?php wp_editor($cta_title, 'professional_services_cta_title_editor', array(
                        'textarea_name' => 'professional_services_cta_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <?php wp_editor($cta_subtitle, 'professional_services_cta_subtitle_editor', array(
                        'textarea_name' => 'professional_services_cta_subtitle',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="professional_services_cta_primary_text" 
                           name="professional_services_cta_primary_text" 
                           value="<?php echo esc_attr($cta_primary_text); ?>"
                           placeholder="Get Free Practice Audit" />
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_cta_primary_url">Primary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="professional_services_cta_primary_url" 
                           name="professional_services_cta_primary_url" 
                           value="<?php echo esc_url($cta_primary_url); ?>"
                           placeholder="/contact" />
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_cta_secondary_text">Secondary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="professional_services_cta_secondary_text" 
                           name="professional_services_cta_secondary_text" 
                           value="<?php echo esc_attr($cta_secondary_text); ?>"
                           placeholder="View More Success Stories" />
                </td>
            </tr>
            <tr>
                <th><label for="professional_services_cta_secondary_url">Secondary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="professional_services_cta_secondary_url" 
                           name="professional_services_cta_secondary_url" 
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
                                           name="professional_services_cta_benefits[]" 
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

    <script>
    jQuery(document).ready(function($) {        // Image upload functionality
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
                
                // Add preview image without page reload
                var previewContainer = $('#' + target).closest('.image-upload-container');
                if (previewContainer.find('.image-preview').length > 0) {
                    previewContainer.find('.image-preview').attr('src', attachment.url);
                } else {
                    previewContainer.append('<img src="' + attachment.url + '" class="image-preview" />');
                    previewContainer.append('<button type="button" class="button remove-button" data-target="' + target + '">Remove</button>');
                }
            });
            
            frame.open();
        });        // Remove image
        $(document).on('click', '.remove-button', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('#' + target).val('');
            $(this).siblings('.image-preview').remove();
            $(this).remove();
        });

        // Add repeater item
        $('.add-repeater-item').click(function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            var newField = '<div class="repeater-field">' +
                          '<input type="text" name="professional_services_' + target.replace('-repeater', '').replace(/-/g, '_') + '[]" placeholder="Item" />' +
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

function save_professional_services_meta_box_data($post_id) {
    if (!isset($_POST['professional_services_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['professional_services_meta_box_nonce'], 'professional_services_meta_box')) {
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

    // Rich text fields that should use wp_kses_post()
    $rich_text_fields = [
        'professional_services_header_title',
        'professional_services_header_subtitle',
        'professional_services_overview_title',
        'professional_services_overview_content',
        'professional_services_challenges_title',
        'professional_services_solutions_title',
        'professional_services_case_study_label',
        'professional_services_case_study_title',
        'professional_services_case_study_content',
        'professional_services_case_study_challenge_title',
        'professional_services_case_study_solution_title',
        'professional_services_case_study_results_title',
        'professional_services_process_title',
        'professional_services_insights_title',
        'professional_services_testimonial_quote',
        'professional_services_cta_title',
        'professional_services_cta_subtitle'
    ];

    // Array fields and other fields that need special handling
    $array_fields = [
        'professional_services_challenges',
        'professional_services_solutions',
        'professional_services_case_study_challenges',
        'professional_services_case_study_solutions',
        'professional_services_case_study_results',
        'professional_services_process_steps',
        'professional_services_insights',
        'professional_services_cta_benefits'
    ];

    // URL/Text fields that should use sanitize_text_field()
    $text_fields = [
        'professional_services_overview_image',
        'professional_services_case_study_link_text',
        'professional_services_case_study_link_url',
        'professional_services_testimonial_name',
        'professional_services_testimonial_position',
        'professional_services_testimonial_company',
        'professional_services_cta_primary_text',
        'professional_services_cta_primary_url',
        'professional_services_cta_secondary_text',
        'professional_services_cta_secondary_url'
    ];

    // Save rich text fields with wp_kses_post()
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, wp_kses_post($_POST[$field]));
        }
    }

    // Save array fields with special handling
    foreach ($array_fields as $field) {
        if (isset($_POST[$field])) {
            $sanitized_array = sanitize_meta_value($field, $_POST[$field]);
            update_post_meta($post_id, '_' . $field, $sanitized_array);
        }
    }

    // Save simple text fields with sanitize_text_field()
    foreach ($text_fields as $field) {
        if (isset($_POST[$field])) {
            if (strpos($field, '_url') !== false || strpos($field, '_image') !== false) {
                update_post_meta($post_id, '_' . $field, esc_url_raw($_POST[$field]));
            } else {
                update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
}
add_action('save_post', 'save_professional_services_meta_box_data');

function sanitize_meta_value($field, $value) {
    if (is_array($value)) {
        return array_map(function($item) use ($field) {
            if (is_array($item)) {
                // For nested arrays like solutions and process steps
                $sanitized_item = array();
                foreach ($item as $key => $val) {
                    if ($key === 'description') {
                        // Rich text content for descriptions
                        $sanitized_item[$key] = wp_kses_post($val);
                    } elseif (is_array($val)) {
                        // For features arrays
                        $sanitized_item[$key] = array_map('sanitize_text_field', $val);
                    } else {
                        $sanitized_item[$key] = sanitize_text_field($val);
                    }
                }
                return $sanitized_item;
            }
            return sanitize_text_field($item);
        }, $value);
    }
    
    if (strpos($field, '_url') !== false || strpos($field, '_image') !== false) {
        return esc_url_raw($value);
    }
    
    if (strpos($field, '_content') !== false || strpos($field, '_subtitle') !== false || strpos($field, '_quote') !== false) {
        return wp_kses_post($value);
    }
    
    return sanitize_text_field($value);
}