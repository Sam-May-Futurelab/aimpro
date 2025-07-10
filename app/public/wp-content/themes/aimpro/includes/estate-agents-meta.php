<?php
// Estate Agents Page Meta Fields

function add_estate_agents_meta_boxes() {
    global $post;
    
    // Only add to pages with the estate-agents template
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        
        // Only register this meta box for the estate-agents page
        if ($page_template === 'page-estate-agents.php') {
            add_meta_box(
                'estate_agents_meta_box',
                'Estate Agents Page Content',
                'estate_agents_meta_box_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'add_estate_agents_meta_boxes');

function estate_agents_meta_box_callback($post) {
    // Only show on estate agents page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-estate-agents.php') {
        echo '<p>This meta box only appears when using the "Estate Agents Industry Page" template.</p>';
        return;
    }

    wp_nonce_field('estate_agents_meta_box', 'estate_agents_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_estate_agents_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_estate_agents_header_subtitle', true);
    $overview_title = get_post_meta($post->ID, '_estate_agents_overview_title', true);
    $overview_content = get_post_meta($post->ID, '_estate_agents_overview_content', true);
    $overview_image = get_post_meta($post->ID, '_estate_agents_overview_image', true);

    // Challenges section
    $challenges_title = get_post_meta($post->ID, '_estate_agents_challenges_title', true);
    $challenges = get_post_meta($post->ID, '_estate_agents_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'Intense competition from online property portals',
            'Seasonal market fluctuations',
            'Generating quality vendor leads',
            'Standing out in local search results',
            'Building trust and credibility',
            'Managing online reputation and reviews'
        );
    }

    // Marketing Services section (2x2 grid)
    $services_title = get_post_meta($post->ID, '_estate_agents_services_title', true);
    $services = get_post_meta($post->ID, '_estate_agents_services', true);
    if (empty($services)) {
        $services = array(
            array(
                'icon' => 'fas fa-home',
                'title' => 'Local Property SEO',
                'description' => 'Dominate local search results when potential clients search for estate agents, property valuations, and homes for sale in your area.',
                'features' => array('Google My Business optimisation', 'Local property keyword targeting', 'Area-specific landing pages', 'Property portal profile optimisation')
            ),
            array(
                'icon' => 'fas fa-users',
                'title' => 'Vendor Lead Generation',
                'description' => 'Attract property sellers with targeted campaigns designed to generate high-quality vendor leads and property valuations.',
                'features' => array('Google Ads for vendor leads', 'Facebook lead generation campaigns', 'Property valuation landing pages', 'Market report lead magnets')
            ),
            array(
                'icon' => 'fas fa-desktop',
                'title' => 'Property Content Marketing',
                'description' => 'Establish your expertise with valuable property content that educates buyers and sellers while building your brand authority.',
                'features' => array('Market insight blog posts', 'Area property guides', 'Video property tours', 'Market analysis reports')
            ),
        );
    }

    // Case study section
    $case_study_label = get_post_meta($post->ID, '_estate_agents_case_study_label', true);
    $case_study_title = get_post_meta($post->ID, '_estate_agents_case_study_title', true);
    $case_study_content = get_post_meta($post->ID, '_estate_agents_case_study_content', true);
    $case_study_challenge_title = get_post_meta($post->ID, '_estate_agents_case_study_challenge_title', true);
    $case_study_challenges = get_post_meta($post->ID, '_estate_agents_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            'Competition from national estate agent brands',
            'Limited vendor lead generation',
            'Poor local search visibility',
            'Seasonal market fluctuations'
        );
    }
    $case_study_solution_title = get_post_meta($post->ID, '_estate_agents_case_study_solution_title', true);
    $case_study_solutions = get_post_meta($post->ID, '_estate_agents_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Comprehensive local SEO strategy',
            'Targeted vendor lead campaigns',
            'Property market content marketing',
            'Social media property showcase'
        );
    }
    $case_study_results_title = get_post_meta($post->ID, '_estate_agents_case_study_results_title', true);
    $case_study_results = get_post_meta($post->ID, '_estate_agents_case_study_results', true);
    if (empty($case_study_results)) {
        $case_study_results = array(
            array('number' => '280%', 'label' => 'Vendor Lead Increase'),
            array('number' => '450%', 'label' => 'Property Valuation Requests'),
            array('number' => '320%', 'label' => 'Local Search Visibility'),
            array('number' => '65%', 'label' => 'More Property Sales')
        );
    }
    $case_study_link_text = get_post_meta($post->ID, '_estate_agents_case_study_link_text', true);
    $case_study_link_url = get_post_meta($post->ID, '_estate_agents_case_study_link_url', true);

    // Process section
    $process_title = get_post_meta($post->ID, '_estate_agents_process_title', true);
    $process_steps = get_post_meta($post->ID, '_estate_agents_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'title' => 'Local Market Analysis',
                'description' => 'analyse your local property market, competitor strategies, and identify opportunities for growth.'
            ),
            array(
                'title' => 'Multi-Channel Strategy',
                'description' => 'Develop integrated campaigns across search, social, and content to attract both buyers and sellers.'
            ),
            array(
                'title' => 'Lead Generation Implementation',
                'description' => 'Launch targeted campaigns designed to generate vendor leads, buyer inquiries, and valuation requests.'
            ),
            array(
                'title' => 'Performance Tracking',
                'description' => 'Monitor lead quality, conversion rates, and adjust strategies based on market conditions.'
            )
        );
    }

    // Property Market Insights section
    $insights_title = get_post_meta($post->ID, '_estate_agents_insights_title', true);
    $insights = get_post_meta($post->ID, '_estate_agents_insights', true);
    if (empty($insights)) {
        $insights = array(
            array(
                'stat' => '92%',
                'title' => 'Online Property Search',
                'description' => '92% of property buyers start their search online'
            ),
            array(
                'stat' => '76%',
                'title' => 'Local Agent Preference',
                'description' => '76% of sellers prefer local estate agents over national chains'
            ),
            array(
                'stat' => '84%',
                'title' => 'Reviews Influence',
                'description' => '84% of clients check online reviews before choosing an agent'
            ),
            array(
                'stat' => '67%',
                'title' => 'Mobile Property Search',
                'description' => '67% of property searches happen on mobile devices'
            )
        );
    }

    // Testimonial section (without image)
    $testimonial_quote = get_post_meta($post->ID, '_estate_agents_testimonial_quote', true);
    $testimonial_name = get_post_meta($post->ID, '_estate_agents_testimonial_name', true);
    $testimonial_position = get_post_meta($post->ID, '_estate_agents_testimonial_position', true);
    $testimonial_company = get_post_meta($post->ID, '_estate_agents_testimonial_company', true);

    // CTA section
    $cta_title = get_post_meta($post->ID, '_estate_agents_cta_title', true);
    $cta_subtitle = get_post_meta($post->ID, '_estate_agents_cta_subtitle', true);
    $cta_primary_text = get_post_meta($post->ID, '_estate_agents_cta_primary_text', true);
    $cta_primary_url = get_post_meta($post->ID, '_estate_agents_cta_primary_url', true);
    $cta_secondary_text = get_post_meta($post->ID, '_estate_agents_cta_secondary_text', true);
    $cta_secondary_url = get_post_meta($post->ID, '_estate_agents_cta_secondary_url', true);
    $cta_benefits = get_post_meta($post->ID, '_estate_agents_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            'Property market expertise',
            'Local SEO specialists',
            'Vendor lead generation'
        );
    }

    ?>
    <style>
        .estate-agents-meta {
            max-width: 100%;
        }
        .estate-agents-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .estate-agents-meta .form-table td {
            padding: 15px 10px;
        }
        .estate-agents-meta input[type="text"],
        .estate-agents-meta textarea,
        .estate-agents-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .estate-agents-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .estate-agents-meta .repeater-field {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }
        .estate-agents-meta .repeater-field input {
            margin-bottom: 5px;
        }
        .estate-agents-meta .image-upload-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .estate-agents-meta .image-preview {
            max-width: 150px;
            height: auto;
        }
        .estate-agents-meta .upload-button,
        .estate-agents-meta .remove-button {
            padding: 5px 10px;
            font-size: 12px;
        }
        .estate-agents-meta h3 {
            margin-top: 30px;
            margin-bottom: 15px;
            padding: 10px;
            background: #0073aa;
            color: white;
            border-radius: 3px;
        }
    </style>

    <div class="estate-agents-meta">
        
        <!-- Header Section -->
        <h3>Header Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="estate_agents_header_title">Page Title</label></th>
                <td>
                    <?php wp_editor($header_title ?: 'Estate Agent Digital Marketing', 'estate_agents_header_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main page heading. HTML allowed for formatting.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_header_subtitle">Page Subtitle</label></th>
                <td>
                    <?php wp_editor($header_subtitle ?: 'Generate quality property leads and dominate your local property market', 'estate_agents_header_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                    <p class="description">Subtitle text below the main heading.</p>
                </td>
            </tr>
        </table>

        <!-- Overview Section -->
        <h3>Overview Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="estate_agents_overview_title">Overview Title</label></th>
                <td>
                    <?php wp_editor($overview_title ?: 'Sell More Properties, Attract More Vendors', 'estate_agents_overview_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the overview section.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_overview_content">Overview Content</label></th>
                <td>
                    <?php wp_editor($overview_content ?: 'The property market is fiercely competitive. Our specialised estate agent marketing strategies help you stand out, generate high-quality vendor and buyer leads, and establish your agency as the go-to property experts in your area.', 'estate_agents_overview_content', array('textarea_rows' => 6, 'media_buttons' => false)); ?>
                    <p class="description">Main description text for the overview section.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload-container">
                        <input type="url" 
                               id="estate_agents_overview_image" 
                               name="estate_agents_overview_image" 
                               value="<?php echo esc_url($overview_image); ?>"
                               placeholder="Image URL" />
                        <button type="button" class="button upload-button" data-target="estate_agents_overview_image">Upload Image</button>
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" class="image-preview" />
                            <button type="button" class="button remove-button" data-target="estate_agents_overview_image">Remove</button>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        </table>

        <!-- Challenges Section -->
        <h3>Challenges Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="estate_agents_challenges_title">Challenges Title</label></th>
                <td>
                    <?php wp_editor($challenges_title ?: 'Estate Agent Marketing Challenges We Solve:', 'estate_agents_challenges_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
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
                                    <?php wp_editor($challenge, 'estate_agents_challenges_' . $index, array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'estate_agents_challenges[]')); ?>
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
                <th><label for="estate_agents_services_title">Services Title</label></th>
                <td>
                    <?php wp_editor($services_title ?: 'Our Estate Agent Marketing Services', 'estate_agents_services_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the services section.</p>
                </td>
            </tr>
        </table>
        
        <div id="services-repeater">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $index => $service): ?>
                    <div class="repeater-field">
                        <h4>Service <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="estate_agents_services[<?php echo $index; ?>][icon]" 
                               value="<?php echo esc_attr($service['icon']); ?>"
                               placeholder="Icon class (e.g., fas fa-home)" />
                        <?php wp_editor($service['title'], 'estate_agents_services_' . $index . '_title', array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'estate_agents_services[' . $index . '][title]')); ?>
                        <label>Service Title</label>
                        
                        <?php wp_editor($service['description'], 'estate_agents_services_' . $index . '_description', array('textarea_rows' => 4, 'media_buttons' => false, 'textarea_name' => 'estate_agents_services[' . $index . '][description]')); ?>
                        <label>Service Description</label>
                        
                        <div>
                            <strong>Features:</strong>
                            <?php foreach ($service['features'] as $feat_index => $feature): ?>
                                <?php wp_editor($feature, 'estate_agents_services_' . $index . '_feature_' . $feat_index, array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'estate_agents_services[' . $index . '][features][]')); ?>
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
                <th><label for="estate_agents_case_study_label">Case Study Label</label></th>
                <td>
                    <?php wp_editor($case_study_label ?: 'Success Story', 'estate_agents_case_study_label', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Small label above the case study title.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_case_study_title">Case Study Title</label></th>
                <td>
                    <?php wp_editor($case_study_title ?: 'PropertyPro: 280% Increase in Vendor Leads', 'estate_agents_case_study_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the case study.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_case_study_content">Case Study Content</label></th>
                <td>
                    <?php wp_editor($case_study_content ?: 'PropertyPro, an independent estate agency, needed to compete against national chains and generate more vendor leads in their local market.', 'estate_agents_case_study_content', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                    <p class="description">Introduction paragraph for the case study.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_case_study_challenge_title">Challenge Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_challenge_title ?: 'The Challenge', 'estate_agents_case_study_challenge_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Heading for the challenge section.</p>
                </td>
            </tr>
            <tr>
                <th><label>Challenge Items</label></th>
                <td>
                    <div id="case-study-challenges-repeater">
                        <?php if (!empty($case_study_challenges)): ?>
                            <?php foreach ($case_study_challenges as $index => $challenge): ?>
                                <div class="repeater-field">
                                    <?php wp_editor($challenge, 'estate_agents_case_study_challenges_' . $index, array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'estate_agents_case_study_challenges[]')); ?>
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="case-study-challenges-repeater">Add Challenge</button>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_case_study_solution_title">Solution Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_solution_title ?: 'Our Solution', 'estate_agents_case_study_solution_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Heading for the solution section.</p>
                </td>
            </tr>
            <tr>
                <th><label>Solution Items</label></th>
                <td>
                    <div id="case-study-solutions-repeater">
                        <?php if (!empty($case_study_solutions)): ?>
                            <?php foreach ($case_study_solutions as $index => $solution): ?>
                                <div class="repeater-field">
                                    <?php wp_editor($solution, 'estate_agents_case_study_solutions_' . $index, array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'estate_agents_case_study_solutions[]')); ?>
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-repeater-item" data-target="case-study-solutions-repeater">Add Solution</button>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_case_study_results_title">Results Section Title</label></th>
                <td>
                    <?php wp_editor($case_study_results_title ?: 'Results After 6 Months', 'estate_agents_case_study_results_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
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
                               name="estate_agents_case_study_results[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($result['number']); ?>"
                               placeholder="Number (e.g., 280%)" />
                        <input type="text" 
                               name="estate_agents_case_study_results[<?php echo $index; ?>][label]" 
                               value="<?php echo esc_attr($result['label']); ?>"
                               placeholder="Label" />
                        <button type="button" class="button remove-repeater-item">Remove Result</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <table class="form-table">
            <tr>
                <th><label for="estate_agents_case_study_link_text">Case Study Link Text</label></th>
                <td>
                    <input type="text" 
                           id="estate_agents_case_study_link_text" 
                           name="estate_agents_case_study_link_text" 
                           value="<?php echo esc_attr($case_study_link_text); ?>"
                           placeholder="Read Full Case Study" />
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_case_study_link_url">Case Study Link URL</label></th>
                <td>
                    <input type="url" 
                           id="estate_agents_case_study_link_url" 
                           name="estate_agents_case_study_link_url" 
                           value="<?php echo esc_url($case_study_link_url); ?>"
                           placeholder="/case-studies" />
                </td>
            </tr>
        </table>

        <!-- Process Section -->
        <h3>Process Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="estate_agents_process_title">Process Title</label></th>
                <td>
                    <?php wp_editor($process_title ?: 'Our Estate Agent Marketing Process', 'estate_agents_process_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the process section.</p>
                </td>
            </tr>
        </table>

        <div id="process-steps-repeater">
            <?php if (!empty($process_steps)): ?>
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="repeater-field">
                        <h4>Step <?php echo $index + 1; ?></h4>
                        <?php wp_editor($step['title'], 'estate_agents_process_steps_' . $index . '_title', array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'estate_agents_process_steps[' . $index . '][title]')); ?>
                        <label>Step Title</label>
                        <?php wp_editor($step['description'], 'estate_agents_process_steps_' . $index . '_description', array('textarea_rows' => 3, 'media_buttons' => false, 'textarea_name' => 'estate_agents_process_steps[' . $index . '][description]')); ?>
                        <label>Step Description</label>
                        <button type="button" class="button remove-repeater-item">Remove Step</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Property Market Insights Section -->
        <h3>Property Market Insights Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="estate_agents_insights_title">Insights Title</label></th>
                <td>
                    <?php wp_editor($insights_title ?: 'Property Market Insights', 'estate_agents_insights_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the insights section.</p>
                </td>
            </tr>
        </table>

        <div id="insights-repeater">
            <?php if (!empty($insights)): ?>
                <?php foreach ($insights as $index => $insight): ?>
                    <div class="repeater-field">
                        <h4>Insight <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="estate_agents_insights[<?php echo $index; ?>][stat]" 
                               value="<?php echo esc_attr($insight['stat']); ?>"
                               placeholder="Statistic (e.g., 92%)" />
                        <label>Statistic</label>
                        <?php wp_editor($insight['title'], 'estate_agents_insights_' . $index . '_title', array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'estate_agents_insights[' . $index . '][title]')); ?>
                        <label>Insight Title</label>
                        <?php wp_editor($insight['description'], 'estate_agents_insights_' . $index . '_description', array('textarea_rows' => 3, 'media_buttons' => false, 'textarea_name' => 'estate_agents_insights[' . $index . '][description]')); ?>
                        <label>Insight Description</label>
                        <button type="button" class="button remove-repeater-item">Remove Insight</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Testimonial Section -->
        <h3>Testimonial Section (No Image)</h3>
        <table class="form-table">
            <tr>
                <th><label for="estate_agents_testimonial_quote">Testimonial Quote</label></th>
                <td>
                    <?php wp_editor($testimonial_quote ?: 'Aimpro Digital transformed our estate agency\'s online presence. Their understanding of the property market and local SEO expertise helped us generate 280% more vendor leads. We\'re now the leading independent agent in our area.', 'estate_agents_testimonial_quote', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                    <p class="description">Customer testimonial quote.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_testimonial_name">Customer Name</label></th>
                <td>
                    <?php wp_editor($testimonial_name ?: 'Sarah Mitchell', 'estate_agents_testimonial_name', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Name of the person giving the testimonial.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_testimonial_position">Customer Position</label></th>
                <td>
                    <?php wp_editor($testimonial_position ?: 'Director, PropertyPro Estate Agents', 'estate_agents_testimonial_position', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Position and company of the testimonial author.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_testimonial_company">Company Description</label></th>
                <td>
                    <?php wp_editor($testimonial_company ?: 'Independent estate agency with 3 offices', 'estate_agents_testimonial_company', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Additional company description.</p>
                </td>
            </tr>
        </table>

        <!-- CTA Section -->
        <h3>CTA Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="estate_agents_cta_title">CTA Title</label></th>
                <td>
                    <?php wp_editor($cta_title ?: 'Ready to Dominate Your Local Property Market?', 'estate_agents_cta_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                    <p class="description">Main heading for the CTA section.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <?php wp_editor($cta_subtitle ?: 'Let\'s discuss how our estate agent marketing expertise can generate more vendor leads and property sales.', 'estate_agents_cta_subtitle', array('textarea_rows' => 4, 'media_buttons' => false)); ?>
                    <p class="description">Description text for the CTA section.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <?php wp_editor($cta_primary_text ?: 'Get Free Marketing Audit', 'estate_agents_cta_primary_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Text for the primary CTA button.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_cta_primary_url">Primary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="estate_agents_cta_primary_url" 
                           name="estate_agents_cta_primary_url" 
                           value="<?php echo esc_url($cta_primary_url); ?>"
                           placeholder="/contact" />
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_cta_secondary_text">Secondary Button Text</label></th>
                <td>
                    <?php wp_editor($cta_secondary_text ?: 'View Property Success Stories', 'estate_agents_cta_secondary_text', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                    <p class="description">Text for the secondary CTA button.</p>
                </td>
            </tr>
            <tr>
                <th><label for="estate_agents_cta_secondary_url">Secondary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="estate_agents_cta_secondary_url" 
                           name="estate_agents_cta_secondary_url" 
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
                                    <?php wp_editor($benefit, 'estate_agents_cta_benefits_' . $index, array('textarea_rows' => 2, 'media_buttons' => false, 'textarea_name' => 'estate_agents_cta_benefits[]')); ?>
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
                          '<input type="text" name="estate_agents_' + target.replace('-repeater', '').replace(/-/g, '_') + '[]" placeholder="Item" />' +
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

function estate_agents_sanitize_meta_value($field, $value) {
    if (is_array($value)) {
        return array_map(function($item) use ($field) {
            return estate_agents_sanitize_meta_value($field, $item);
        }, $value);
    }
    
    // URL fields
    if (strpos($field, '_url') !== false || strpos($field, '_image') !== false) {
        return esc_url_raw($value);
    }
    
    // Stat/number fields (keep as text)
    if (strpos($field, '_stat') !== false || strpos($field, '_number') !== false || strpos($field, '_label') !== false) {
        return sanitize_text_field($value);
    }
    
    // Icon classes
    if (strpos($field, '_icon') !== false) {
        return sanitize_text_field($value);
    }
    
    // All other content fields should allow rich text
    return wp_kses_post($value);
}

function save_estate_agents_meta_box_data($post_id) {
    if (!isset($_POST['estate_agents_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['estate_agents_meta_box_nonce'], 'estate_agents_meta_box')) {
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
        'estate_agents_header_title',
        'estate_agents_header_subtitle',
        'estate_agents_overview_title',
        'estate_agents_overview_content',
        'estate_agents_overview_image',
        'estate_agents_challenges_title',
        'estate_agents_challenges',
        'estate_agents_services_title',
        'estate_agents_services',
        'estate_agents_case_study_label',
        'estate_agents_case_study_title',
        'estate_agents_case_study_content',
        'estate_agents_case_study_challenge_title',
        'estate_agents_case_study_challenges',
        'estate_agents_case_study_solution_title',
        'estate_agents_case_study_solutions',
        'estate_agents_case_study_results_title',
        'estate_agents_case_study_results',
        'estate_agents_case_study_link_text',
        'estate_agents_case_study_link_url',
        'estate_agents_process_title',
        'estate_agents_process_steps',
        'estate_agents_insights_title',
        'estate_agents_insights',
        'estate_agents_testimonial_quote',
        'estate_agents_testimonial_name',
        'estate_agents_testimonial_position',
        'estate_agents_testimonial_company',
        'estate_agents_cta_title',
        'estate_agents_cta_subtitle',
        'estate_agents_cta_primary_text',
        'estate_agents_cta_primary_url',
        'estate_agents_cta_secondary_text',
        'estate_agents_cta_secondary_url',
        'estate_agents_cta_benefits'
    ];    foreach ($fields as $field) {        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, estate_agents_sanitize_meta_value($field, $_POST[$field]));
        }
    }
}
add_action('save_post', 'save_estate_agents_meta_box_data');
?>

