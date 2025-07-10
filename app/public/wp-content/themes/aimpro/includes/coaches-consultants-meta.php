<?php
// Coaches & Consultants Page Meta Fields

function add_coaches_consultants_meta_boxes() {
    global $post;
    
    // Only add to pages with the coaches-consultants template
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        
        // Only register this meta box for the coaches-consultants page
        if ($page_template === 'page-coaches-consultants.php') {
            add_meta_box(
                'coaches_consultants_meta_box',
                'Coaches & Consultants Page Content',
                'coaches_consultants_meta_box_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'add_coaches_consultants_meta_boxes', 11);

function coaches_consultants_meta_box_callback($post) {
    // Only show on coaches & consultants page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-coaches-consultants.php') {
        echo '<p>This meta box only appears when using the "Coaches & Consultants Industry Page" template.</p>';
        return;
    }

    wp_nonce_field('coaches_consultants_meta_box', 'coaches_consultants_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_coaches_consultants_header_title', true);
    if (empty($header_title)) $header_title = 'Coaches & Consultants Digital Marketing';
    
    $header_subtitle = get_post_meta($post->ID, '_coaches_consultants_header_subtitle', true);
    if (empty($header_subtitle)) $header_subtitle = 'Build your personal brand, attract ideal clients, and scale your coaching or consulting business';
    
    $overview_title = get_post_meta($post->ID, '_coaches_consultants_overview_title', true);
    if (empty($overview_title)) $overview_title = 'Transform Your Expertise Into a Thriving Business';
    
    $overview_content = get_post_meta($post->ID, '_coaches_consultants_overview_content', true);
    if (empty($overview_content)) $overview_content = 'As a coach or consultant, your expertise is your greatest asset. Our specialised marketing strategies help you build a powerful personal brand, attract high-value clients, and position yourself as the go-to authority in your niche.';
    
    $overview_image = get_post_meta($post->ID, '_coaches_consultants_overview_image', true);

    // Challenges section
    $challenges_title = get_post_meta($post->ID, '_coaches_consultants_challenges_title', true);
    if (empty($challenges_title)) $challenges_title = 'Coaching & Consulting Marketing Challenges We Solve:';
    
    $challenges = get_post_meta($post->ID, '_coaches_consultants_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'Building trust and credibility online',
            'Standing out in a crowded marketplace',
            'Generating consistent high-quality leads',
            'Positioning yourself as an industry authority',
            'Converting prospects into paying clients',
            'Scaling beyond one-on-one limitations'
        );
    }

    // Marketing Services section (2x2 grid)
    $services_title = get_post_meta($post->ID, '_coaches_consultants_services_title', true);
    if (empty($services_title)) $services_title = 'Our Coaching & Consulting Marketing Services';
    
    $services = get_post_meta($post->ID, '_coaches_consultants_services', true);
    if (empty($services)) {
        $services = array(
            array(
                'icon' => 'fas fa-user-tie',
                'title' => 'Personal Brand Strategy',
                'description' => 'Build a powerful personal brand that positions you as the authority in your niche and attracts your ideal coaching clients.',
                'features' => array('Authority positioning', 'Brand story development', 'Brand voice and messaging', 'Visual identity system')
            ),
            array(
                'icon' => 'fas fa-bullseye',
                'title' => 'High-Ticket Client Acquisition',
                'description' => 'Attract premium clients with targeted marketing campaigns designed to generate high-quality discovery calls and consultations.',
                'features' => array('Ideal client targeting', 'Lead magnet creation', 'Automated nurture sequences', 'Application process optimisation')
            ),
            array(
                'icon' => 'fas fa-chart-line',
                'title' => 'Authority Content Marketing',
                'description' => 'Establish your expertise with valuable content that educates prospects while positioning you as the go-to expert in your field.',
                'features' => array('Thought leadership content', 'Podcast & interview strategy', 'Educational resources', 'SEO-optimised articles')
            ),
            array(
                'icon' => 'fas fa-comment-dollar',
                'title' => 'Digital Sales Funnels',
                'description' => 'Convert more prospects into paying clients with proven sales funnels and automation that scale your coaching business.',
                'features' => array('Webinar & workshop funnels', 'Application & discovery call systems', 'Email sequences', 'Conversion optimisation')
            )
        );
    }

    // Case study section
    $case_study_label = get_post_meta($post->ID, '_coaches_consultants_case_study_label', true);
    if (empty($case_study_label)) $case_study_label = 'Success Story';
    
    $case_study_title = get_post_meta($post->ID, '_coaches_consultants_case_study_title', true);
    if (empty($case_study_title)) $case_study_title = 'Strategic Business Solutions: 400% Client Growth';
    
    $case_study_content = get_post_meta($post->ID, '_coaches_consultants_case_study_content', true);
    if (empty($case_study_content)) $case_study_content = 'Mark Anderson, a business strategy consultant, needed to establish his authority and generate consistent high-value client leads.';
    
    $case_study_challenge_title = get_post_meta($post->ID, '_coaches_consultants_case_study_challenge_title', true);
    if (empty($case_study_challenge_title)) $case_study_challenge_title = 'The Challenge';
    
    $case_study_challenges = get_post_meta($post->ID, '_coaches_consultants_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            'Low visibility in a competitive niche',
            'Inconsistent lead generation',
            'Under-priced services',
            'Limited scalability with 1:1 clients'
        );
    }
    $case_study_solution_title = get_post_meta($post->ID, '_coaches_consultants_case_study_solution_title', true);
    if (empty($case_study_solution_title)) $case_study_solution_title = 'Our Solution';
    
    $case_study_solutions = get_post_meta($post->ID, '_coaches_consultants_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Authority positioning strategy',
            'Automated lead generation system',
            'Premium service packaging',
            'Group program development'
        );
    }
    $case_study_results_title = get_post_meta($post->ID, '_coaches_consultants_case_study_results_title', true);
    if (empty($case_study_results_title)) $case_study_results_title = 'Results After 9 Months';
    
    $case_study_results = get_post_meta($post->ID, '_coaches_consultants_case_study_results', true);
    if (empty($case_study_results)) {
        $case_study_results = array(
            array('number' => '320%', 'label' => 'Increase in Discovery Calls'),
            array('number' => '250%', 'label' => 'Increase in Client Value'),
            array('number' => '400%', 'label' => 'Growth in Email Subscribers'),
            array('number' => '75%', 'label' => 'Reduction in Working Hours')
        );
    }
    $case_study_link_text = get_post_meta($post->ID, '_coaches_consultants_case_study_link_text', true);
    $case_study_link_url = get_post_meta($post->ID, '_coaches_consultants_case_study_link_url', true);

    // Process section
    $process_title = get_post_meta($post->ID, '_coaches_consultants_process_title', true);
    $process_steps = get_post_meta($post->ID, '_coaches_consultants_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'title' => 'Brand & Audience Analysis',
                'description' => 'We analyse your current brand positioning, audience, and competitor landscape to identify your unique advantage.'
            ),
            array(
                'title' => 'Authority Strategy Development',
                'description' => 'We create a customised marketing roadmap to position you as the go-to authority in your niche.'
            ),
            array(
                'title' => 'Lead Generation Implementation',
                'description' => 'We build and launch targeted campaigns designed to attract high-quality coaching prospects.'
            ),
            array(
                'title' => 'Conversion & Scale optimisation',
                'description' => 'We optimise your sales process and develop scalable programs to increase revenue while reducing time commitment.'
            )
        );
    }

    // Industry Insights section
    $insights_title = get_post_meta($post->ID, '_coaches_consultants_insights_title', true);
    $insights = get_post_meta($post->ID, '_coaches_consultants_insights', true);
    if (empty($insights)) {
        $insights = array(
            array(
                'stat' => '81%',
                'title' => 'Trust Factor',
                'description' => '81% of clients research coaches online before making a decision'
            ),
            array(
                'stat' => '68%',
                'title' => 'Content Influence',
                'description' => '68% of prospects choose coaches who provide valuable free content'
            ),
            array(
                'stat' => '73%',
                'title' => 'Referral Importance',
                'description' => '73% of coaching clients come from referrals and word of mouth'
            ),
            array(
                'stat' => '89%',
                'title' => 'Website Importance',
                'description' => '89% of prospects visit a coach\'s website before contacting them'
            )
        );
    }

    // Testimonial section (without image)
    $testimonial_quote = get_post_meta($post->ID, '_coaches_consultants_testimonial_quote', true);
    $testimonial_name = get_post_meta($post->ID, '_coaches_consultants_testimonial_name', true);
    $testimonial_position = get_post_meta($post->ID, '_coaches_consultants_testimonial_position', true);
    $testimonial_company = get_post_meta($post->ID, '_coaches_consultants_testimonial_company', true);

    // CTA section
    $cta_title = get_post_meta($post->ID, '_coaches_consultants_cta_title', true);
    $cta_subtitle = get_post_meta($post->ID, '_coaches_consultants_cta_subtitle', true);
    $cta_primary_text = get_post_meta($post->ID, '_coaches_consultants_cta_primary_text', true);
    $cta_primary_url = get_post_meta($post->ID, '_coaches_consultants_cta_primary_url', true);
    $cta_secondary_text = get_post_meta($post->ID, '_coaches_consultants_cta_secondary_text', true);
    $cta_secondary_url = get_post_meta($post->ID, '_coaches_consultants_cta_secondary_url', true);
    $cta_benefits = get_post_meta($post->ID, '_coaches_consultants_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '? Expert authority positioning',
            '? Premium client acquisition',
            '? Business scaling strategies'
        );
    }

    ?>
    <style>
        .coaches-consultants-meta {
            max-width: 100%;
        }
        .coaches-consultants-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .coaches-consultants-meta .form-table td {
            padding: 15px 10px;
        }
        .coaches-consultants-meta input[type="text"],
        .coaches-consultants-meta textarea,
        .coaches-consultants-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .coaches-consultants-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .coaches-consultants-meta .repeater-field {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }
        .coaches-consultants-meta .repeater-field input {
            margin-bottom: 5px;
        }
        .coaches-consultants-meta .image-upload-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .coaches-consultants-meta .image-preview {
            max-width: 150px;
            height: auto;
        }
        .coaches-consultants-meta .upload-button,
        .coaches-consultants-meta .remove-button {
            padding: 5px 10px;
            font-size: 12px;
        }
        .coaches-consultants-meta h3 {
            margin-top: 30px;
            margin-bottom: 15px;
            padding: 10px;
            background: #0073aa;
            color: white;
            border-radius: 3px;
        }
    </style>

    <div class="coaches-consultants-meta">
        
        <!-- Header Section -->
        <h3>Header Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="coaches_consultants_header_title">Page Title</label></th>
                <td>
                    <?php wp_editor($header_title, 'coaches_consultants_header_title', array(
                        'textarea_name' => 'coaches_consultants_header_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_header_subtitle">Page Subtitle</label></th>
                <td>
                    <?php wp_editor($header_subtitle, 'coaches_consultants_header_subtitle', array(
                        'textarea_name' => 'coaches_consultants_header_subtitle',
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
        </table>

        <!-- Overview Section -->
        <h3>Overview Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="coaches_consultants_overview_title">Overview Title</label></th>
                <td>
                    <?php wp_editor($overview_title, 'coaches_consultants_overview_title', array(
                        'textarea_name' => 'coaches_consultants_overview_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_overview_content">Overview Content</label></th>
                <td>
                    <?php wp_editor($overview_content, 'coaches_consultants_overview_content', array(
                        'textarea_name' => 'coaches_consultants_overview_content',
                        'media_buttons' => false,
                        'textarea_rows' => 6,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>                <th><label for="coaches_consultants_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload-container">
                        <input type="hidden" 
                               id="coaches_consultants_overview_image" 
                               name="coaches_consultants_overview_image" 
                               value="<?php echo esc_attr($overview_image); ?>" />
                        <button type="button" class="button upload-button" data-target="coaches_consultants_overview_image">Upload Image</button>
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" class="image-preview" />
                            <button type="button" class="button remove-button" data-target="coaches_consultants_overview_image">Remove</button>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Challenges Section -->
        <h3>Challenges Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="coaches_consultants_challenges_title">Challenges Title</label></th>
                <td>
                    <?php wp_editor($challenges_title, 'coaches_consultants_challenges_title', array(
                        'textarea_name' => 'coaches_consultants_challenges_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => false
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
                                    <?php wp_editor($challenge, 'coaches_consultants_challenges_' . $index, array(
                                        'textarea_name' => 'coaches_consultants_challenges[]',
                                        'media_buttons' => false,
                                        'textarea_rows' => 2,
                                        'teeny' => true,
                                        'quicktags' => false
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

        <!-- Marketing Services Section -->
        <h3>Marketing Services Section (2x2 Grid)</h3>
        <table class="form-table">
            <tr>
                <th><label for="coaches_consultants_services_title">Services Title</label></th>
                <td>
                    <?php wp_editor($services_title, 'coaches_consultants_services_title', array(
                        'textarea_name' => 'coaches_consultants_services_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
        </table>
        
        <div id="services-repeater">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $index => $service): ?>
                    <div class="repeater-field">
                        <h4>Service <?php echo $index + 1; ?></h4>
                        <label>Icon (e.g., fas fa-user-tie)</label>
                        <?php wp_editor($service['icon'], 'coaches_consultants_services_' . $index . '_icon', array(
                            'textarea_name' => 'coaches_consultants_services[' . $index . '][icon]',
                            'media_buttons' => false,
                            'textarea_rows' => 1,
                            'teeny' => true,
                            'quicktags' => false
                        )); ?>
                        <?php wp_editor($service['title'], 'coaches_consultants_services_' . $index . '_title', array(
                            'textarea_name' => 'coaches_consultants_services[' . $index . '][title]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => false
                        )); ?>
                        <?php wp_editor($service['description'], 'coaches_consultants_services_' . $index . '_description', array(
                            'textarea_name' => 'coaches_consultants_services[' . $index . '][description]',
                            'media_buttons' => false,
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'quicktags' => false
                        )); ?>
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($service['features'] as $feat_index => $feature): ?>
                                <?php wp_editor($feature, 'coaches_consultants_services_' . $index . '_feature_' . $feat_index, array(
                                    'textarea_name' => 'coaches_consultants_services[' . $index . '][features][]',
                                    'media_buttons' => false,
                                    'textarea_rows' => 1,
                                    'teeny' => true,
                                    'quicktags' => false
                                )); ?>
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
                <th><label for="coaches_consultants_case_study_label">Case Study Label</label></th>
                <td>
                    <?php wp_editor($case_study_label, 'coaches_consultants_case_study_label', array(
                        'textarea_name' => 'coaches_consultants_case_study_label',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_case_study_title">Case Study Title</label></th>
                <td>
                    <?php wp_editor($case_study_title, 'coaches_consultants_case_study_title', array(
                        'textarea_name' => 'coaches_consultants_case_study_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_case_study_content">Case Study Content</label></th>
                <td>
                    <?php wp_editor($case_study_content, 'coaches_consultants_case_study_content', array(
                        'textarea_name' => 'coaches_consultants_case_study_content',
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_case_study_challenge_title">Challenge Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_challenge_title, 'coaches_consultants_case_study_challenge_title', array(
                        'textarea_name' => 'coaches_consultants_case_study_challenge_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
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
                                    <label>Challenge Item</label>
                                    <?php wp_editor($challenge, 'coaches_consultants_case_study_challenges_' . $index, array(
                                        'textarea_name' => 'coaches_consultants_case_study_challenges[]',
                                        'media_buttons' => false,
                                        'textarea_rows' => 2,
                                        'teeny' => true,
                                        'quicktags' => false
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
                <th><label for="coaches_consultants_case_study_solution_title">Solution Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_solution_title, 'coaches_consultants_case_study_solution_title', array(
                        'textarea_name' => 'coaches_consultants_case_study_solution_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
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
                                    <label>Solution Item</label>
                                    <?php wp_editor($solution, 'coaches_consultants_case_study_solutions_' . $index, array(
                                        'textarea_name' => 'coaches_consultants_case_study_solutions[]',
                                        'media_buttons' => false,
                                        'textarea_rows' => 2,
                                        'teeny' => true,
                                        'quicktags' => false
                                    )); ?>
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="case-study-solutions-repeater">Add Solution</button>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_case_study_results_title">Results Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_results_title, 'coaches_consultants_case_study_results_title', array(
                        'textarea_name' => 'coaches_consultants_case_study_results_title',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
        </table>

        <div id="case-study-results-repeater">
            <?php if (!empty($case_study_results)): ?>
                <?php foreach ($case_study_results as $index => $result): ?>
                    <div class="repeater-field">
                        <h4>Result <?php echo $index + 1; ?></h4>
                        <label>Number (e.g., 320%)</label>
                        <?php wp_editor($result['number'], 'coaches_consultants_case_study_results_' . $index . '_number', array(
                            'textarea_name' => 'coaches_consultants_case_study_results[' . $index . '][number]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => false
                        )); ?>
                        <label>Label</label>
                        <?php wp_editor($result['label'], 'coaches_consultants_case_study_results_' . $index . '_label', array(
                            'textarea_name' => 'coaches_consultants_case_study_results[' . $index . '][label]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => false
                        )); ?>
                        <button type="button" class="button remove-repeater-item">Remove Result</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <table class="form-table">
            <tr>
                <th><label for="coaches_consultants_case_study_link_text">Case Study Link Text</label></th>
                <td>
                    <?php wp_editor($case_study_link_text, 'coaches_consultants_case_study_link_text', array(
                        'textarea_name' => 'coaches_consultants_case_study_link_text',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_case_study_link_url">Case Study Link URL</label></th>
                <td>
                    <input type="url" 
                           id="coaches_consultants_case_study_link_url" 
                           name="coaches_consultants_case_study_link_url" 
                           value="<?php echo esc_url($case_study_link_url); ?>"
                           placeholder="/case-studies" />
                </td>
            </tr>
        </table>

        <!-- Process Section -->
        <h3>Process Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="coaches_consultants_process_title">Process Title</label></th>
                <td>
                    <?php wp_editor($process_title, 'coaches_consultants_process_title', array(
                        'textarea_name' => 'coaches_consultants_process_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
        </table>

        <div id="process-steps-repeater">
            <?php if (!empty($process_steps)): ?>
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="repeater-field">
                        <h4>Step <?php echo $index + 1; ?></h4>
                        <?php wp_editor($step['title'], 'coaches_consultants_process_steps_' . $index . '_title', array(
                            'textarea_name' => 'coaches_consultants_process_steps[' . $index . '][title]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => false
                        )); ?>
                        <?php wp_editor($step['description'], 'coaches_consultants_process_steps_' . $index . '_description', array(
                            'textarea_name' => 'coaches_consultants_process_steps[' . $index . '][description]',
                            'media_buttons' => false,
                            'textarea_rows' => 4,
                            'teeny' => true,
                            'quicktags' => false
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
                <th><label for="coaches_consultants_insights_title">Insights Title</label></th>
                <td>
                    <?php wp_editor($insights_title, 'coaches_consultants_insights_title', array(
                        'textarea_name' => 'coaches_consultants_insights_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
        </table>

        <div id="insights-repeater">
            <?php if (!empty($insights)): ?>
                <?php foreach ($insights as $index => $insight): ?>
                    <div class="repeater-field">
                        <h4>Insight <?php echo $index + 1; ?></h4>
                        <label>Statistic (e.g., 81%)</label>
                        <?php wp_editor($insight['stat'], 'coaches_consultants_insights_' . $index . '_stat', array(
                            'textarea_name' => 'coaches_consultants_insights[' . $index . '][stat]',
                            'media_buttons' => false,
                            'textarea_rows' => 1,
                            'teeny' => true,
                            'quicktags' => false
                        )); ?>
                        <?php wp_editor($insight['title'], 'coaches_consultants_insights_' . $index . '_title', array(
                            'textarea_name' => 'coaches_consultants_insights[' . $index . '][title]',
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'teeny' => true,
                            'quicktags' => false
                        )); ?>
                        <?php wp_editor($insight['description'], 'coaches_consultants_insights_' . $index . '_description', array(
                            'textarea_name' => 'coaches_consultants_insights[' . $index . '][description]',
                            'media_buttons' => false,
                            'textarea_rows' => 3,
                            'teeny' => true,
                            'quicktags' => false
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
                <th><label for="coaches_consultants_testimonial_quote">Testimonial Quote</label></th>
                <td>
                    <?php wp_editor($testimonial_quote, 'coaches_consultants_testimonial_quote', array(
                        'textarea_name' => 'coaches_consultants_testimonial_quote',
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_testimonial_name">Customer Name</label></th>
                <td>
                    <?php wp_editor($testimonial_name, 'coaches_consultants_testimonial_name', array(
                        'textarea_name' => 'coaches_consultants_testimonial_name',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_testimonial_position">Customer Position</label></th>
                <td>
                    <?php wp_editor($testimonial_position, 'coaches_consultants_testimonial_position', array(
                        'textarea_name' => 'coaches_consultants_testimonial_position',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_testimonial_company">Company Description</label></th>
                <td>
                    <?php wp_editor($testimonial_company, 'coaches_consultants_testimonial_company', array(
                        'textarea_name' => 'coaches_consultants_testimonial_company',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
        </table>

        <!-- CTA Section -->
        <h3>CTA Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="coaches_consultants_cta_title">CTA Title</label></th>
                <td>
                    <?php wp_editor($cta_title, 'coaches_consultants_cta_title', array(
                        'textarea_name' => 'coaches_consultants_cta_title',
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <?php wp_editor($cta_subtitle, 'coaches_consultants_cta_subtitle', array(
                        'textarea_name' => 'coaches_consultants_cta_subtitle',
                        'media_buttons' => false,
                        'textarea_rows' => 4,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <?php wp_editor($cta_primary_text, 'coaches_consultants_cta_primary_text', array(
                        'textarea_name' => 'coaches_consultants_cta_primary_text',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_cta_primary_url">Primary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="coaches_consultants_cta_primary_url" 
                           name="coaches_consultants_cta_primary_url" 
                           value="<?php echo esc_url($cta_primary_url); ?>"
                           placeholder="/contact" />
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_cta_secondary_text">Secondary Button Text</label></th>
                <td>
                    <?php wp_editor($cta_secondary_text, 'coaches_consultants_cta_secondary_text', array(
                        'textarea_name' => 'coaches_consultants_cta_secondary_text',
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'teeny' => true,
                        'quicktags' => false
                    )); ?>
                </td>
            </tr>
            <tr>
                <th><label for="coaches_consultants_cta_secondary_url">Secondary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="coaches_consultants_cta_secondary_url" 
                           name="coaches_consultants_cta_secondary_url" 
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
                                    <label>Benefit Item</label>
                                    <?php wp_editor($benefit, 'coaches_consultants_cta_benefits_' . $index, array(
                                        'textarea_name' => 'coaches_consultants_cta_benefits[]',
                                        'media_buttons' => false,
                                        'textarea_rows' => 2,
                                        'teeny' => true,
                                        'quicktags' => false
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

    </div>    <script>
    jQuery(document).ready(function($) {
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
            var fieldName = target.replace('-repeater', '').replace(/-/g, '_');
            var index = $('#' + target + ' .repeater-field').length;
            
            var newField = '';
            
            // Create appropriate field based on repeater type
            if (target === 'challenges-repeater' || target === 'case-study-challenges-repeater' || 
                target === 'case-study-solutions-repeater' || target === 'cta-benefits-repeater') {
                // Simple text fields that need rich text
                newField = '<div class="repeater-field">' +
                          '<label>Item</label>' +
                          '<textarea name="coaches_consultants_' + fieldName + '[]" placeholder="Item" rows="2"></textarea>' +
                          '<button type="button" class="button remove-repeater-item">Remove</button>' +
                          '</div>';
            } else {
                // Default to textarea for new items
                newField = '<div class="repeater-field">' +
                          '<textarea name="coaches_consultants_' + fieldName + '[]" placeholder="Item" rows="2"></textarea>' +
                          '<button type="button" class="button remove-repeater-item">Remove</button>' +
                          '</div>';
            }
            
            $('#' + target).append(newField);
        });        // Remove repeater item
        $(document).on('click', '.remove-repeater-item', function(e) {
            e.preventDefault();
            $(this).closest('.repeater-field').remove();
        });

        // Ensure form has proper enctype for file uploads
        $('#post').attr('enctype', 'multipart/form-data');
    });
    </script>
    <?php
}

function sanitize_coaches_consultants_meta_value($field, $value) {
    // Rich text fields that should use wp_kses_post
    $rich_text_fields = array(
        'header_title', 'header_subtitle', 'overview_title', 'overview_content',
        'challenges_title', 'services_title', 'case_study_label', 'case_study_title',
        'case_study_content', 'case_study_challenge_title', 'case_study_solution_title',
        'case_study_results_title', 'case_study_link_text', 'process_title', 'insights_title',
        'testimonial_quote', 'testimonial_name', 'testimonial_position', 'testimonial_company',
        'cta_title', 'cta_subtitle', 'cta_primary_text', 'cta_secondary_text'
    );

    if (is_array($value)) {
        foreach ($value as &$item) {
            if (is_array($item)) {
                foreach ($item as $key => &$subitem) {
                    if (is_array($subitem)) {
                        foreach ($subitem as &$sub_subitem) {
                            // Check if this is rich text content - now treating most content as rich text
                            if ($key === 'title' || $key === 'description' || $key === 'icon' || $key === 'label' || $key === 'number' || $key === 'stat' || strpos($key, 'content') !== false) {
                                $sub_subitem = wp_kses_post($sub_subitem);
                            } else {
                                $sub_subitem = sanitize_text_field($sub_subitem);
                            }
                        }
                    } else {
                        // Check if this is rich text content - now treating most content as rich text
                        if ($key === 'title' || $key === 'description' || $key === 'icon' || $key === 'label' || $key === 'number' || $key === 'stat' || strpos($key, 'content') !== false) {
                            $subitem = wp_kses_post($subitem);
                        } else {
                            $subitem = sanitize_text_field($subitem);
                        }
                    }
                }
            } else {
                // For single values in arrays (like challenges, solutions, benefits) - now rich text
                $item = wp_kses_post($item);
            }
        }
        return $value;
    } else {
        // Check if this field should use rich text
        $is_rich_text = false;
        foreach ($rich_text_fields as $rich_field) {
            if (strpos($field, $rich_field) !== false) {
                $is_rich_text = true;
                break;
            }
        }
        
        if ($is_rich_text) {
            return wp_kses_post($value);
        } elseif (strpos($field, 'url') !== false || strpos($field, 'image') !== false) {
            return esc_url_raw($value);
        } else {
            return sanitize_text_field($value);
        }
    }
}

function save_coaches_consultants_meta_box_data($post_id) {
    if (!isset($_POST['coaches_consultants_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['coaches_consultants_meta_box_nonce'], 'coaches_consultants_meta_box')) {
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
        'coaches_consultants_header_title',
        'coaches_consultants_header_subtitle',
        'coaches_consultants_overview_title',
        'coaches_consultants_overview_content',
        'coaches_consultants_overview_image',
        'coaches_consultants_challenges_title',
        'coaches_consultants_challenges',
        'coaches_consultants_services_title',
        'coaches_consultants_services',
        'coaches_consultants_case_study_label',
        'coaches_consultants_case_study_title',
        'coaches_consultants_case_study_content',
        'coaches_consultants_case_study_challenge_title',
        'coaches_consultants_case_study_challenges',
        'coaches_consultants_case_study_solution_title',
        'coaches_consultants_case_study_solutions',
        'coaches_consultants_case_study_results_title',
        'coaches_consultants_case_study_results',
        'coaches_consultants_case_study_link_text',
        'coaches_consultants_case_study_link_url',
        'coaches_consultants_process_title',
        'coaches_consultants_process_steps',
        'coaches_consultants_insights_title',
        'coaches_consultants_insights',
        'coaches_consultants_testimonial_quote',
        'coaches_consultants_testimonial_name',
        'coaches_consultants_testimonial_position',
        'coaches_consultants_testimonial_company',
        'coaches_consultants_cta_title',
        'coaches_consultants_cta_subtitle',
        'coaches_consultants_cta_primary_text',
        'coaches_consultants_cta_primary_url',
        'coaches_consultants_cta_secondary_text',
        'coaches_consultants_cta_secondary_url',
        'coaches_consultants_cta_benefits'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_coaches_consultants_meta_value($field, $_POST[$field]));
        }
    }
}
add_action('save_post', 'save_coaches_consultants_meta_box_data');

