<?php
// Rank Higher Locally Page Meta Fields

function add_rank_higher_locally_meta_boxes() {
    global $post;
    
    // Only add to pages
    if (isset($post) && get_post_type($post) === 'page') {
        add_meta_box(
            'rank_higher_locally_meta_box',
            'Rank Higher Locally Page Content',
            'rank_higher_locally_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_rank_higher_locally_meta_boxes', 11);

function rank_higher_locally_meta_box_callback($post) {
    // Only show on rank higher locally page template
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-rank-higher-locally.php' && $page_slug !== 'rank-higher-locally') {
        echo '<p>This meta box is designed for the "Rank Higher Locally Solution Page" template or pages with slug "rank-higher-locally".</p>';
        echo '<p>Current template: ' . ($page_template ?: 'Default') . '</p>';
        echo '<p>Current slug: ' . ($page_slug ?: 'Not set yet') . '</p>';
        return;
    }

    wp_nonce_field('rank_higher_locally_meta_box', 'rank_higher_locally_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_rank_higher_locally_header_title', true) ?: 'Rank Higher Locally';
    $header_subtitle = get_post_meta($post->ID, '_rank_higher_locally_header_subtitle', true) ?: 'Dominate local search results and attract customers in your area with comprehensive local SEO strategies';

    // Solution Overview
    $overview_title = get_post_meta($post->ID, '_rank_higher_locally_overview_title', true) ?: 'Become the Local Leader in Your Industry';
    $overview_content = get_post_meta($post->ID, '_rank_higher_locally_overview_content', true) ?: 'Local search drives immediate action. When potential customers search for services "near me," you want to be the first business they find. Our comprehensive local SEO strategies help you dominate local search results, increase visibility, and attract more qualified customers in your service area.';
    
    // Challenges
    $challenges_title = get_post_meta($post->ID, '_rank_higher_locally_challenges_title', true) ?: 'Local Search Challenges We Solve:';
    $challenges = get_post_meta($post->ID, '_rank_higher_locally_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'Poor visibility in local search results',
            'Inconsistent business information online',
            'Limited Google My Business optimization',
            'Lack of local customer reviews',
            'Competition from national chains',
            'Difficulty ranking for location-based keywords'
        );
    }

    // Local SEO Services
    $services_title = get_post_meta($post->ID, '_rank_higher_locally_services_title', true) ?: 'Our Local SEO Services';
    $services = get_post_meta($post->ID, '_rank_higher_locally_services', true);
    if (empty($services)) {
        $services = array(
            array(
                'title' => 'Google My Business Optimization',
                'description' => 'Maximize your Google My Business profile to appear prominently in local search results and Google Maps.',
                'features' => array(
                    'Complete profile optimization',
                    'Regular posting and updates',
                    'Photo and video optimization',
                    'Q&A management'
                ),
                'icon' => 'fab fa-google'
            ),
            array(
                'title' => 'Local Citation Building',
                'description' => 'Build consistent business listings across local directories to improve search visibility and credibility.',
                'features' => array(
                    'Directory submission campaigns',
                    'NAP consistency monitoring',
                    'Industry-specific citations',
                    'Citation cleanup & corrections'
                ),
                'icon' => 'fas fa-building'
            ),
            array(
                'title' => 'Review Management',
                'description' => 'Generate positive reviews and manage your online reputation to build trust with potential customers.',
                'features' => array(
                    'Review generation campaigns',
                    'Review response management',
                    'Reputation monitoring',
                    'Review widget implementation'
                ),
                'icon' => 'fas fa-star'
            ),
            array(
                'title' => 'Local Keyword Optimization',
                'description' => 'Target location-specific keywords that drive local traffic and qualified leads to your business.',
                'features' => array(
                    'Local keyword research',
                    'Location page creation',
                    'Service area optimization',
                    'Local content strategy'
                ),
                'icon' => 'fas fa-search-location'
            )
        );
    }

    // Case Study
    $case_study_label = get_post_meta($post->ID, '_rank_higher_locally_case_study_label', true) ?: 'Success Story';
    $case_study_title = get_post_meta($post->ID, '_rank_higher_locally_case_study_title', true) ?: 'Precision Dental: 500% Local Visibility Increase';
    $case_study_content = get_post_meta($post->ID, '_rank_higher_locally_case_study_content', true) ?: 'Precision Dental, a family dental practice, was invisible in local search results despite serving the community for 15 years.';
    
    // Case Study Challenges
    $case_study_challenge_title = get_post_meta($post->ID, '_rank_higher_locally_case_study_challenge_title', true) ?: 'The Challenge';
    $case_challenges = get_post_meta($post->ID, '_rank_higher_locally_case_study_challenges', true);
    if (empty($case_challenges)) {
        $case_challenges = array(
            'Not appearing in local search results',
            'Inconsistent business information online',
            'Only 8 Google reviews',
            'Lost patients to competitors'
        );
    }

    // Case Study Solution
    $case_study_solution_title = get_post_meta($post->ID, '_rank_higher_locally_case_study_solution_title', true) ?: 'Our Solution';
    $case_solutions = get_post_meta($post->ID, '_rank_higher_locally_case_study_solutions', true);
    if (empty($case_solutions)) {
        $case_solutions = array(
            'Complete Google My Business optimization',
            'Local citation building campaign',
            'Review generation system implementation',
            'Location-specific content creation'
        );
    }

    // Case Study Results
    $case_study_results_title = get_post_meta($post->ID, '_rank_higher_locally_case_study_results_title', true) ?: 'Results After 6 Months';
    $case_results = get_post_meta($post->ID, '_rank_higher_locally_case_study_results', true);
    if (empty($case_results)) {
        $case_results = array(
            array(
                'number' => '500%',
                'label' => 'Local Visibility Increase'
            ),
            array(
                'number' => '300%',
                'label' => 'Phone Call Increase'
            ),
            array(
                'number' => '85+',
                'label' => 'New Google Reviews'
            ),
            array(
                'number' => '4.9★',
                'label' => 'Average Review Rating'
            )
        );
    }
    
    // Case Study Link
    $case_study_link_text = get_post_meta($post->ID, '_rank_higher_locally_case_study_link_text', true) ?: 'Read Full Case Study';
    $case_study_link_url = get_post_meta($post->ID, '_rank_higher_locally_case_study_link_url', true) ?: '/case-studies';

    // Process
    $process_title = get_post_meta($post->ID, '_rank_higher_locally_process_title', true) ?: 'Our Local SEO Process';
    $process_steps = get_post_meta($post->ID, '_rank_higher_locally_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'number' => '1',
                'title' => 'Local SEO Audit',
                'description' => 'Comprehensive analysis of your current local search presence and competitor landscape.'
            ),
            array(
                'number' => '2',
                'title' => 'Foundation Optimization',
                'description' => 'Optimize Google My Business, fix NAP inconsistencies, and establish local search foundation.'
            ),
            array(
                'number' => '3',
                'title' => 'Citation & Content Building',
                'description' => 'Build local citations, create location-specific content, and implement review strategies.'
            ),
            array(
                'number' => '4',
                'title' => 'Monitoring & Optimization',
                'description' => 'Track local rankings, monitor reviews, and continuously optimize for better performance.'
            )
        );
    }

    // Benefits
    $benefits_title = get_post_meta($post->ID, '_rank_higher_locally_benefits_title', true) ?: 'Local SEO Benefits for Your Business';
    $benefits_description = get_post_meta($post->ID, '_rank_higher_locally_benefits_description', true) ?: 'Powerful local search optimization that drives real business results';
    $benefits = get_post_meta($post->ID, '_rank_higher_locally_benefits', true);
    if (empty($benefits)) {
        $benefits = array(
            array(
                'title' => 'Increased Local Visibility',
                'description' => 'Appear prominently when potential customers search for your services in your area.',
                'icon' => 'fas fa-map-marker-alt'
            ),
            array(
                'title' => 'More Phone Calls',
                'description' => 'Generate more qualified phone leads from customers ready to book or buy.',
                'icon' => 'fas fa-phone'
            ),
            array(
                'title' => 'Increased Foot Traffic',
                'description' => 'Drive more customers to your physical location with improved local search presence.',
                'icon' => 'fas fa-walking'
            ),
            array(
                'title' => 'Better Online Reputation',
                'description' => 'Build trust with positive reviews and professional online presence management.',
                'icon' => 'fas fa-star'
            )
        );
    }

    // Testimonial (no image)
    $testimonial_quote = get_post_meta($post->ID, '_rank_higher_locally_testimonial_quote', true) ?: 'Our local visibility has completely transformed since working with Aimpro Digital. We now rank #1 for all our key local searches and get 300% more phone calls. Our practice has never been busier.';
    $testimonial_name = get_post_meta($post->ID, '_rank_higher_locally_testimonial_name', true) ?: 'Dr. Patricia Moore';
    $testimonial_position = get_post_meta($post->ID, '_rank_higher_locally_testimonial_position', true) ?: 'Owner, Precision Dental Practice';
    $testimonial_company = get_post_meta($post->ID, '_rank_higher_locally_testimonial_company', true) ?: 'Family Dental Practice';

    // CTA
    $cta_title = get_post_meta($post->ID, '_rank_higher_locally_cta_title', true) ?: 'Ready to Dominate Local Search?';
    $cta_subtitle = get_post_meta($post->ID, '_rank_higher_locally_cta_subtitle', true) ?: 'Let\'s create a comprehensive local SEO strategy that puts your business at the top of local search results.';
    $cta_primary_text = get_post_meta($post->ID, '_rank_higher_locally_cta_primary_text', true) ?: 'Get Free Local SEO Audit';
    $cta_primary_url = get_post_meta($post->ID, '_rank_higher_locally_cta_primary_url', true) ?: '/contact';
    $cta_secondary_text = get_post_meta($post->ID, '_rank_higher_locally_cta_secondary_text', true) ?: 'View Local Success Stories';
    $cta_secondary_url = get_post_meta($post->ID, '_rank_higher_locally_cta_secondary_url', true) ?: '/case-studies';
    $cta_benefits = get_post_meta($post->ID, '_rank_higher_locally_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '✓ Complete local presence audit',
            '✓ Competitor analysis included',
            '✓ Custom optimization roadmap'
        );
    }
    ?>

    <div class="rank-higher-locally-meta-box">
        <style>
            .rank-higher-locally-meta-box .form-section {
                margin-bottom: 20px;
                padding-bottom: 20px;
                border-bottom: 1px solid #ddd;
            }
            .rank-higher-locally-meta-box h3 {
                margin-top: 0;
                padding: 10px;
                background-color: #f5f5f5;
                border-left: 4px solid #0073aa;
            }
            .rank-higher-locally-meta-box table {
                width: 100%;
                border-collapse: collapse;
            }
            .rank-higher-locally-meta-box th {
                text-align: left;
                padding: 15px 10px 5px 0;
                width: 20%;
                vertical-align: top;
            }
            .rank-higher-locally-meta-box td {
                padding: 15px 0 5px 0;
                width: 80%;
            }
            .rank-higher-locally-meta-box input[type="text"], 
            .rank-higher-locally-meta-box textarea {
                width: 100%;
            }
            .rank-higher-locally-meta-box textarea {
                min-height: 60px;
            }
            .rank-higher-locally-meta-box .repeater {
                margin-bottom: 15px;
            }
            .rank-higher-locally-meta-box .repeater-item {
                background: #f9f9f9;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ddd;
                position: relative;
            }
            .rank-higher-locally-meta-box .remove-item {
                position: absolute;
                top: 5px;
                right: 5px;
                color: #a00;
                cursor: pointer;
            }
            .rank-higher-locally-meta-box .add-item {
                margin-top: 10px;
            }
            .rank-higher-locally-meta-box .item-fields {
                margin-top: 10px;
            }
            .rank-higher-locally-meta-box .repeater-label {
                font-weight: bold;
                margin-bottom: 5px;
                display: block;
            }
            .rank-higher-locally-meta-box .nested-repeater {
                margin-left: 20px;
                margin-top: 10px;
            }
            .rank-higher-locally-meta-box .field-description {
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
                    <th><label for="rank_higher_locally_header_title">Page Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_header_title" name="rank_higher_locally_header_title" value="<?php echo esc_attr($header_title); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_header_subtitle">Page Subtitle</label></th>
                    <td>
                        <textarea id="rank_higher_locally_header_subtitle" name="rank_higher_locally_header_subtitle"><?php echo esc_textarea($header_subtitle); ?></textarea>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Solution Overview Section -->
        <div class="form-section">
            <h3>Solution Overview</h3>
            <table>
                <tr>
                    <th><label for="rank_higher_locally_overview_title">Overview Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_overview_title" name="rank_higher_locally_overview_title" value="<?php echo esc_attr($overview_title); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_overview_content">Overview Content</label></th>
                    <td>
                        <textarea id="rank_higher_locally_overview_content" name="rank_higher_locally_overview_content"><?php echo esc_textarea($overview_content); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_challenges_title">Challenges Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_challenges_title" name="rank_higher_locally_challenges_title" value="<?php echo esc_attr($challenges_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="challenges_repeater">
                <div class="repeater-label">Challenges List</div>
                <?php if (!empty($challenges)) : ?>
                    <?php foreach ($challenges as $index => $challenge) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <input type="text" name="rank_higher_locally_challenges[]" value="<?php echo esc_attr($challenge); ?>" placeholder="Enter a challenge..." />
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <input type="text" name="rank_higher_locally_challenges[]" value="" placeholder="Enter a challenge..." />
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-item">Add Challenge</button>
            </div>
        </div>

        <!-- Local SEO Services Section -->
        <div class="form-section">
            <h3>Local SEO Services</h3>
            <table>
                <tr>
                    <th><label for="rank_higher_locally_services_title">Services Section Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_services_title" name="rank_higher_locally_services_title" value="<?php echo esc_attr($services_title); ?>" />
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
                                    <input type="text" name="rank_higher_locally_services[<?php echo $index; ?>][title]" value="<?php echo esc_attr($service['title']); ?>" placeholder="Service title..." />
                                </p>
                                <p>
                                    <label class="repeater-label">Service Description</label>
                                    <textarea name="rank_higher_locally_services[<?php echo $index; ?>][description]" placeholder="Service description..."><?php echo esc_textarea($service['description']); ?></textarea>
                                </p>
                                <p>
                                    <label class="repeater-label">Icon Class</label>
                                    <input type="text" name="rank_higher_locally_services[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($service['icon']); ?>" placeholder="Font Awesome icon class (e.g., fas fa-star)" />
                                    <span class="field-description">Enter a Font Awesome icon class (e.g., fas fa-star)</span>
                                </p>
                                
                                <div class="nested-repeater">
                                    <label class="repeater-label">Service Features</label>
                                    <?php foreach ($service['features'] as $feature_index => $feature) : ?>
                                        <div class="repeater-item">
                                            <span class="remove-item">×</span>
                                            <input type="text" name="rank_higher_locally_services[<?php echo $index; ?>][features][]" value="<?php echo esc_attr($feature); ?>" placeholder="Feature..." />
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
                                <input type="text" name="rank_higher_locally_services[0][title]" value="" placeholder="Service title..." />
                            </p>
                            <p>
                                <label class="repeater-label">Service Description</label>
                                <textarea name="rank_higher_locally_services[0][description]" placeholder="Service description..."></textarea>
                            </p>
                            <p>
                                <label class="repeater-label">Icon Class</label>
                                <input type="text" name="rank_higher_locally_services[0][icon]" value="" placeholder="Font Awesome icon class (e.g., fas fa-star)" />
                                <span class="field-description">Enter a Font Awesome icon class (e.g., fas fa-star)</span>
                            </p>
                            
                            <div class="nested-repeater">
                                <label class="repeater-label">Service Features</label>
                                <div class="repeater-item">
                                    <span class="remove-item">×</span>
                                    <input type="text" name="rank_higher_locally_services[0][features][]" value="" placeholder="Feature..." />
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
                    <th><label for="rank_higher_locally_case_study_label">Case Study Label</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_case_study_label" name="rank_higher_locally_case_study_label" value="<?php echo esc_attr($case_study_label); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_case_study_title">Case Study Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_case_study_title" name="rank_higher_locally_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_case_study_content">Case Study Content</label></th>
                    <td>
                        <textarea id="rank_higher_locally_case_study_content" name="rank_higher_locally_case_study_content"><?php echo esc_textarea($case_study_content); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_case_study_challenge_title">Challenge Section Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_case_study_challenge_title" name="rank_higher_locally_case_study_challenge_title" value="<?php echo esc_attr($case_study_challenge_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="case_challenges_repeater">
                <div class="repeater-label">Case Study Challenges</div>
                <?php if (!empty($case_challenges)) : ?>
                    <?php foreach ($case_challenges as $index => $challenge) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <input type="text" name="rank_higher_locally_case_study_challenges[]" value="<?php echo esc_attr($challenge); ?>" placeholder="Enter a case study challenge..." />
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <input type="text" name="rank_higher_locally_case_study_challenges[]" value="" placeholder="Enter a case study challenge..." />
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-item">Add Challenge</button>
            </div>

            <table>
                <tr>
                    <th><label for="rank_higher_locally_case_study_solution_title">Solution Section Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_case_study_solution_title" name="rank_higher_locally_case_study_solution_title" value="<?php echo esc_attr($case_study_solution_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="case_solutions_repeater">
                <div class="repeater-label">Case Study Solutions</div>
                <?php if (!empty($case_solutions)) : ?>
                    <?php foreach ($case_solutions as $index => $solution) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <input type="text" name="rank_higher_locally_case_study_solutions[]" value="<?php echo esc_attr($solution); ?>" placeholder="Enter a case study solution..." />
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <input type="text" name="rank_higher_locally_case_study_solutions[]" value="" placeholder="Enter a case study solution..." />
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-item">Add Solution</button>
            </div>

            <table>
                <tr>
                    <th><label for="rank_higher_locally_case_study_results_title">Results Section Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_case_study_results_title" name="rank_higher_locally_case_study_results_title" value="<?php echo esc_attr($case_study_results_title); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="case_results_repeater">
                <div class="repeater-label">Case Study Results</div>
                <?php if (!empty($case_results)) : ?>
                    <?php foreach ($case_results as $index => $result) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <div class="item-fields">
                                <p>
                                    <label class="repeater-label">Result Number/Percentage</label>
                                    <input type="text" name="rank_higher_locally_case_study_results[<?php echo $index; ?>][number]" value="<?php echo esc_attr($result['number']); ?>" placeholder="e.g., 500%" />
                                </p>
                                <p>
                                    <label class="repeater-label">Result Label</label>
                                    <input type="text" name="rank_higher_locally_case_study_results[<?php echo $index; ?>][label]" value="<?php echo esc_attr($result['label']); ?>" placeholder="e.g., Local Visibility Increase" />
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <div class="item-fields">
                            <p>
                                <label class="repeater-label">Result Number/Percentage</label>
                                <input type="text" name="rank_higher_locally_case_study_results[0][number]" value="" placeholder="e.g., 500%" />
                            </p>
                            <p>
                                <label class="repeater-label">Result Label</label>
                                <input type="text" name="rank_higher_locally_case_study_results[0][label]" value="" placeholder="e.g., Local Visibility Increase" />
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-result-item">Add Result</button>
            </div>

            <table>
                <tr>
                    <th><label for="rank_higher_locally_case_study_link_text">Case Study Link Text</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_case_study_link_text" name="rank_higher_locally_case_study_link_text" value="<?php echo esc_attr($case_study_link_text); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_case_study_link_url">Case Study Link URL</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_case_study_link_url" name="rank_higher_locally_case_study_link_url" value="<?php echo esc_attr($case_study_link_url); ?>" />
                        <span class="field-description">Enter the path (e.g., /case-studies)</span>
                    </td>
                </tr>
            </table>
        </div>

        <!-- Process Section -->
        <div class="form-section">
            <h3>Process Section</h3>
            <table>
                <tr>
                    <th><label for="rank_higher_locally_process_title">Process Section Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_process_title" name="rank_higher_locally_process_title" value="<?php echo esc_attr($process_title); ?>" />
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
                                    <input type="text" name="rank_higher_locally_process_steps[<?php echo $index; ?>][number]" value="<?php echo esc_attr($step['number']); ?>" placeholder="e.g., 1" />
                                </p>
                                <p>
                                    <label class="repeater-label">Step Title</label>
                                    <input type="text" name="rank_higher_locally_process_steps[<?php echo $index; ?>][title]" value="<?php echo esc_attr($step['title']); ?>" placeholder="Step title..." />
                                </p>
                                <p>
                                    <label class="repeater-label">Step Description</label>
                                    <textarea name="rank_higher_locally_process_steps[<?php echo $index; ?>][description]" placeholder="Step description..."><?php echo esc_textarea($step['description']); ?></textarea>
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
                                <input type="text" name="rank_higher_locally_process_steps[0][number]" value="" placeholder="e.g., 1" />
                            </p>
                            <p>
                                <label class="repeater-label">Step Title</label>
                                <input type="text" name="rank_higher_locally_process_steps[0][title]" value="" placeholder="Step title..." />
                            </p>
                            <p>
                                <label class="repeater-label">Step Description</label>
                                <textarea name="rank_higher_locally_process_steps[0][description]" placeholder="Step description..."></textarea>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-process-step">Add Process Step</button>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="form-section">
            <h3>Benefits Section</h3>
            <table>
                <tr>
                    <th><label for="rank_higher_locally_benefits_title">Benefits Section Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_benefits_title" name="rank_higher_locally_benefits_title" value="<?php echo esc_attr($benefits_title); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_benefits_description">Benefits Description</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_benefits_description" name="rank_higher_locally_benefits_description" value="<?php echo esc_attr($benefits_description); ?>" />
                    </td>
                </tr>
            </table>

            <div class="repeater" id="benefits_repeater">
                <div class="repeater-label">Benefits</div>
                <?php if (!empty($benefits)) : ?>
                    <?php foreach ($benefits as $index => $benefit) : ?>
                        <div class="repeater-item">
                            <span class="remove-item">×</span>
                            <div class="item-fields">
                                <p>
                                    <label class="repeater-label">Benefit Title</label>
                                    <input type="text" name="rank_higher_locally_benefits[<?php echo $index; ?>][title]" value="<?php echo esc_attr($benefit['title']); ?>" placeholder="Benefit title..." />
                                </p>
                                <p>
                                    <label class="repeater-label">Benefit Description</label>
                                    <textarea name="rank_higher_locally_benefits[<?php echo $index; ?>][description]" placeholder="Benefit description..."><?php echo esc_textarea($benefit['description']); ?></textarea>
                                </p>
                                <p>
                                    <label class="repeater-label">Icon Class</label>
                                    <input type="text" name="rank_higher_locally_benefits[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($benefit['icon']); ?>" placeholder="Font Awesome icon class (e.g., fas fa-star)" />
                                    <span class="field-description">Enter a Font Awesome icon class (e.g., fas fa-star)</span>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <div class="item-fields">
                            <p>
                                <label class="repeater-label">Benefit Title</label>
                                <input type="text" name="rank_higher_locally_benefits[0][title]" value="" placeholder="Benefit title..." />
                            </p>
                            <p>
                                <label class="repeater-label">Benefit Description</label>
                                <textarea name="rank_higher_locally_benefits[0][description]" placeholder="Benefit description..."></textarea>
                            </p>
                            <p>
                                <label class="repeater-label">Icon Class</label>
                                <input type="text" name="rank_higher_locally_benefits[0][icon]" value="" placeholder="Font Awesome icon class (e.g., fas fa-star)" />
                                <span class="field-description">Enter a Font Awesome icon class (e.g., fas fa-star)</span>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-benefit-item">Add Benefit</button>
            </div>
        </div>

        <!-- Testimonial Section (No Image) -->
        <div class="form-section">
            <h3>Testimonial Section (No Image)</h3>
            <table>
                <tr>
                    <th><label for="rank_higher_locally_testimonial_quote">Testimonial Quote</label></th>
                    <td>
                        <textarea id="rank_higher_locally_testimonial_quote" 
                              name="rank_higher_locally_testimonial_quote"
                              placeholder="Customer testimonial quote..."><?php echo esc_textarea($testimonial_quote); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_testimonial_name">Customer Name</label></th>
                    <td>
                        <input type="text" 
                           id="rank_higher_locally_testimonial_name" 
                           name="rank_higher_locally_testimonial_name" 
                           value="<?php echo esc_attr($testimonial_name); ?>"
                           placeholder="Customer name..." />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_testimonial_position">Customer Position</label></th>
                    <td>
                        <input type="text" 
                           id="rank_higher_locally_testimonial_position" 
                           name="rank_higher_locally_testimonial_position" 
                           value="<?php echo esc_attr($testimonial_position); ?>"
                           placeholder="Customer position..." />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_testimonial_company">Customer Company</label></th>
                    <td>
                        <input type="text" 
                           id="rank_higher_locally_testimonial_company" 
                           name="rank_higher_locally_testimonial_company" 
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
                    <th><label for="rank_higher_locally_cta_title">CTA Title</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_cta_title" name="rank_higher_locally_cta_title" value="<?php echo esc_attr($cta_title); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_cta_subtitle">CTA Subtitle</label></th>
                    <td>
                        <textarea id="rank_higher_locally_cta_subtitle" name="rank_higher_locally_cta_subtitle"><?php echo esc_textarea($cta_subtitle); ?></textarea>
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_cta_primary_text">Primary Button Text</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_cta_primary_text" name="rank_higher_locally_cta_primary_text" value="<?php echo esc_attr($cta_primary_text); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_cta_primary_url">Primary Button URL</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_cta_primary_url" name="rank_higher_locally_cta_primary_url" value="<?php echo esc_attr($cta_primary_url); ?>" />
                        <span class="field-description">Enter the path (e.g., /contact)</span>
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_cta_secondary_text">Secondary Button Text</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_cta_secondary_text" name="rank_higher_locally_cta_secondary_text" value="<?php echo esc_attr($cta_secondary_text); ?>" />
                    </td>
                </tr>
                <tr>
                    <th><label for="rank_higher_locally_cta_secondary_url">Secondary Button URL</label></th>
                    <td>
                        <input type="text" id="rank_higher_locally_cta_secondary_url" name="rank_higher_locally_cta_secondary_url" value="<?php echo esc_attr($cta_secondary_url); ?>" />
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
                            <input type="text" name="rank_higher_locally_cta_benefits[]" value="<?php echo esc_attr($benefit); ?>" placeholder="Enter a CTA benefit..." />
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="repeater-item">
                        <span class="remove-item">×</span>
                        <input type="text" name="rank_higher_locally_cta_benefits[]" value="" placeholder="Enter a CTA benefit..." />
                    </div>
                <?php endif; ?>
                <button type="button" class="button add-item">Add Benefit</button>
            </div>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        // General repeater functionality
        $('.rank-higher-locally-meta-box').on('click', '.add-item', function() {
            var $repeater = $(this).closest('.repeater');
            var $lastItem = $repeater.find('.repeater-item:last');
            var $newItem = $lastItem.clone();
            
            // Clear values
            $newItem.find('input[type="text"], textarea').val('');
            
            $lastItem.after($newItem);
        });
        
        // Remove item functionality
        $('.rank-higher-locally-meta-box').on('click', '.remove-item', function() {
            var $repeater = $(this).closest('.repeater');
            if ($repeater.find('.repeater-item').length > 1) {
                $(this).closest('.repeater-item').remove();
            } else {
                $(this).closest('.repeater-item').find('input[type="text"], textarea').val('');
            }
        });
        
        // Add service item
        $('.rank-higher-locally-meta-box').on('click', '.add-service-item', function() {
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
        $('.rank-higher-locally-meta-box').on('click', '.add-nested-item', function() {
            var parentIndex = $(this).data('parent');
            var $nestedRepeater = $(this).closest('.nested-repeater');
            var $lastItem = $nestedRepeater.find('.repeater-item:last');
            var $newItem = $lastItem.clone();
            
            // Clear value
            $newItem.find('input').val('');
            
            $lastItem.after($newItem);
        });
        
        // Add result item
        $('.rank-higher-locally-meta-box').on('click', '.add-result-item', function() {
            var $repeater = $('#case_results_repeater');
            var $items = $repeater.find('.repeater-item');
            var newIndex = $items.length;
            
            var $newItem = $items.first().clone();
            
            // Update indexes and clear values
            $newItem.find('input').each(function() {
                var name = $(this).attr('name');
                if (name) {
                    name = name.replace(/\[\d+\]/, '[' + newIndex + ']');
                    $(this).attr('name', name).val('');
                }
            });
            
            $items.last().after($newItem);
        });
        
        // Add process step
        $('.rank-higher-locally-meta-box').on('click', '.add-process-step', function() {
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
        
        // Add benefit item
        $('.rank-higher-locally-meta-box').on('click', '.add-benefit-item', function() {
            var $repeater = $('#benefits_repeater');
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
    });
    </script>
<?php
}

function sanitize_rank_higher_locally_meta_value($field, $value) {
    if (in_array($field, [
        'rank_higher_locally_challenges',
        'rank_higher_locally_case_study_challenges',
        'rank_higher_locally_case_study_solutions',
        'rank_higher_locally_cta_benefits'
    ])) {
        // For simple arrays of text
        return array_map('sanitize_text_field', $value);
    } elseif ($field === 'rank_higher_locally_services') {
        // For complex arrays with nested arrays
        foreach ($value as $key => $service) {
            $value[$key]['title'] = sanitize_text_field($service['title']);
            $value[$key]['description'] = sanitize_textarea_field($service['description']);
            $value[$key]['icon'] = sanitize_text_field($service['icon']);
            if (isset($service['features']) && is_array($service['features'])) {
                $value[$key]['features'] = array_map('sanitize_text_field', $service['features']);
            } else {
                $value[$key]['features'] = array();
            }
        }
        return $value;
    } elseif ($field === 'rank_higher_locally_case_study_results') {
        // For results array
        foreach ($value as $key => $result) {
            $value[$key]['number'] = sanitize_text_field($result['number']);
            $value[$key]['label'] = sanitize_text_field($result['label']);
        }
        return $value;
    } elseif ($field === 'rank_higher_locally_process_steps') {
        // For process steps array
        foreach ($value as $key => $step) {
            $value[$key]['number'] = sanitize_text_field($step['number']);
            $value[$key]['title'] = sanitize_text_field($step['title']);
            $value[$key]['description'] = sanitize_textarea_field($step['description']);
        }
        return $value;
    } elseif ($field === 'rank_higher_locally_benefits') {
        // For benefits array
        foreach ($value as $key => $benefit) {
            $value[$key]['title'] = sanitize_text_field($benefit['title']);
            $value[$key]['description'] = sanitize_textarea_field($benefit['description']);
            $value[$key]['icon'] = sanitize_text_field($benefit['icon']);
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

function save_rank_higher_locally_meta_box_data($post_id) {
    if (!isset($_POST['rank_higher_locally_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['rank_higher_locally_meta_box_nonce'], 'rank_higher_locally_meta_box')) {
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
        'rank_higher_locally_header_title',
        'rank_higher_locally_header_subtitle',
        'rank_higher_locally_overview_title',
        'rank_higher_locally_overview_content',
        'rank_higher_locally_challenges_title',
        'rank_higher_locally_challenges',
        'rank_higher_locally_services_title',
        'rank_higher_locally_services',
        'rank_higher_locally_case_study_label',
        'rank_higher_locally_case_study_title',
        'rank_higher_locally_case_study_content',
        'rank_higher_locally_case_study_challenge_title',
        'rank_higher_locally_case_study_challenges',
        'rank_higher_locally_case_study_solution_title',
        'rank_higher_locally_case_study_solutions',
        'rank_higher_locally_case_study_results_title',
        'rank_higher_locally_case_study_results',
        'rank_higher_locally_case_study_link_text',
        'rank_higher_locally_case_study_link_url',
        'rank_higher_locally_process_title',
        'rank_higher_locally_process_steps',
        'rank_higher_locally_benefits_title',
        'rank_higher_locally_benefits_description',
        'rank_higher_locally_benefits',
        'rank_higher_locally_testimonial_quote',
        'rank_higher_locally_testimonial_name',
        'rank_higher_locally_testimonial_position',
        'rank_higher_locally_testimonial_company',
        'rank_higher_locally_cta_title',
        'rank_higher_locally_cta_subtitle',
        'rank_higher_locally_cta_primary_text',
        'rank_higher_locally_cta_primary_url',
        'rank_higher_locally_cta_secondary_text',
        'rank_higher_locally_cta_secondary_url',
        'rank_higher_locally_cta_benefits'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_rank_higher_locally_meta_value($field, $_POST[$field]));
        }
    }
}
add_action('save_post', 'save_rank_higher_locally_meta_box_data');
