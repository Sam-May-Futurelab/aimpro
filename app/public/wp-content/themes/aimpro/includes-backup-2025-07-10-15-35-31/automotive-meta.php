<?php
// Automotive Page Meta Fields

function add_automotive_meta_boxes() {
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    // Only add to pages using the Automotive template or with 'automotive' slug
    if ($page_template === 'page-automotive.php' || $page_slug === 'automotive') {
        add_meta_box(
            'automotive_meta_box',
            'Automotive Page Content',
            'automotive_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_automotive_meta_boxes');

function automotive_meta_box_callback($post) {
    wp_nonce_field('automotive_meta_box', 'automotive_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_automotive_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_automotive_header_subtitle', true);
    if (empty($header_subtitle)) {
        $header_subtitle = 'Drive more qualified leads to your dealership with proven automotive marketing strategies';
    }
    $overview_title = get_post_meta($post->ID, '_automotive_overview_title', true);
    $overview_content = get_post_meta($post->ID, '_automotive_overview_content', true);
    $overview_image = get_post_meta($post->ID, '_automotive_overview_image', true);

    // Challenges section
    $challenges_title = get_post_meta($post->ID, '_automotive_challenges_title', true);
    $challenges = get_post_meta($post->ID, '_automotive_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'Intense local competition from other dealerships',
            'Long sales cycles and multiple touchpoints',
            'Inventory-based marketing requirements',
            'Service department visibility and bookings',
            'Managing online reputation and reviews'
        );
    }

    // Services section
    $services_title = get_post_meta($post->ID, '_automotive_services_title', true);
    $services = get_post_meta($post->ID, '_automotive_services', true);
    if (empty($services)) {
        $services = array(
            array(
                'icon' => 'fas fa-map-marker-alt',
                'title' => 'Local SEO for Dealerships',
                'description' => 'Dominate local search results when customers search for "car dealerships near me" or specific vehicle models in your area.',
                'features' => array('Google My Business optimisation', 'Local directory listings', 'Location-based keyword targeting', 'Review management and reputation')
            ),
            array(
                'icon' => 'fas fa-car',
                'title' => 'Vehicle Inventory Marketing',
                'description' => 'Showcase your inventory with dynamic advertising that automatically promotes your available vehicles to interested buyers.',
                'features' => array('Dynamic vehicle ads on Google', 'Facebook vehicle showcase campaigns', 'Inventory-based remarketing', 'VDP (Vehicle Detail Page) optimisation')
            ),
            array(
                'icon' => 'fas fa-wrench',
                'title' => 'Service Department Marketing',
                'description' => 'Drive consistent revenue with targeted campaigns for oil changes, tire rotations, and major automotive services.',
                'features' => array('Service appointment booking campaigns', 'Maintenance reminder automation', 'Seasonal service promotions', 'Customer retention programs')
            ),
            array(
                'icon' => 'fas fa-chart-line',
                'title' => 'Lead Generation Campaigns',
                'description' => 'Generate high-quality leads for sales and service departments with targeted PPC campaigns and conversion optimisation.',
                'features' => array('Google Ads for automotive', 'Facebook lead generation', 'Trade-in value campaigns', 'Test drive scheduling')
            )
        );
    }

    // Case study section
    $case_study_label = get_post_meta($post->ID, '_automotive_case_study_label', true);
    $case_study_title = get_post_meta($post->ID, '_automotive_case_study_title', true);
    $case_study_content = get_post_meta($post->ID, '_automotive_case_study_content', true);
    $case_study_challenge_title = get_post_meta($post->ID, '_automotive_case_study_challenge_title', true);
    $case_study_challenges = get_post_meta($post->ID, '_automotive_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            'Low local search visibility',
            'Poor quality leads from generic campaigns',
            'Service department underperforming',
            'Inconsistent online presence across locations'
        );
    }
    $case_study_solution_title = get_post_meta($post->ID, '_automotive_case_study_solution_title', true);
    $case_study_solutions = get_post_meta($post->ID, '_automotive_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Comprehensive local SEO optimisation',
            'Dynamic vehicle inventory advertising',
            'Service-focused PPC campaigns',
            'Review management and reputation building'
        );
    }
    $case_study_results_title = get_post_meta($post->ID, '_automotive_case_study_results_title', true);
    $case_study_results = get_post_meta($post->ID, '_automotive_case_study_results', true);
    if (empty($case_study_results)) {
        $case_study_results = array(
            array('number' => '180%', 'label' => 'Increase in Qualified Leads'),
            array('number' => '250%', 'label' => 'Service Bookings Growth'),
            array('number' => '320%', 'label' => 'Local Search Visibility'),
            array('number' => '4.8?', 'label' => 'Average Review Rating')
        );
    }
    $case_study_link_text = get_post_meta($post->ID, '_automotive_case_study_link_text', true);
    $case_study_link_url = get_post_meta($post->ID, '_automotive_case_study_link_url', true);

    // Process section
    $process_title = get_post_meta($post->ID, '_automotive_process_title', true);
    $process_steps = get_post_meta($post->ID, '_automotive_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'title' => 'Market Analysis',
                'description' => 'We analyse your local automotive market, competitor strategies, and customer behaviour patterns.'
            ),
            array(
                'title' => 'Strategy Development',
                'description' => 'Create a customised marketing strategy that aligns with your inventory, services, and business goals.'
            ),
            array(
                'title' => 'Campaign Implementation',
                'description' => 'Launch targeted campaigns across multiple channels, optimised for automotive customer journeys.'
            ),
            array(
                'title' => 'Performance optimisation',
                'description' => 'Continuously monitor and optimise campaigns based on lead quality, cost per acquisition, and ROI.'
            )
        );
    }

    // Insights section
    $insights_title = get_post_meta($post->ID, '_automotive_insights_title', true);
    $insights = get_post_meta($post->ID, '_automotive_insights', true);
    if (empty($insights)) {
        $insights = array(
            array(
                'stat' => '95%',
                'title' => 'Research Online First',
                'description' => '95% of car buyers research vehicles online before visiting a dealership'
            ),
            array(
                'stat' => '13',
                'title' => 'Digital Touchpoints',
                'description' => 'Average customer visits 13 digital touchpoints during their car buying journey'
            ),
            array(
                'stat' => '60%',
                'title' => 'Mobile Research',
                'description' => '60% of automotive research happens on mobile devices'
            ),
            array(
                'stat' => '89%',
                'title' => 'Service Revenue',
                'description' => 'Service departments generate 89% of dealership profits'
            )
        );
    }

    // Testimonial section (without image)
    $testimonial_quote = get_post_meta($post->ID, '_automotive_testimonial_quote', true);
    $testimonial_name = get_post_meta($post->ID, '_automotive_testimonial_name', true);
    $testimonial_position = get_post_meta($post->ID, '_automotive_testimonial_position', true);
    $testimonial_company = get_post_meta($post->ID, '_automotive_testimonial_company', true);

    // CTA section
    $cta_title = get_post_meta($post->ID, '_automotive_cta_title', true);
    $cta_subtitle = get_post_meta($post->ID, '_automotive_cta_subtitle', true);
    $cta_primary_text = get_post_meta($post->ID, '_automotive_cta_primary_text', true);
    $cta_primary_url = get_post_meta($post->ID, '_automotive_cta_primary_url', true);
    $cta_secondary_text = get_post_meta($post->ID, '_automotive_cta_secondary_text', true);
    $cta_secondary_url = get_post_meta($post->ID, '_automotive_cta_secondary_url', true);
    $cta_benefits = get_post_meta($post->ID, '_automotive_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '✓ Free competitive analysis',
            '✓ Custom strategy recommendations',
            '✓ No obligation consultation'
        );
    }

    ?>
    <style>
        .automotive-meta {
            max-width: 100%;
        }
        .automotive-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .automotive-meta .form-table td {
            padding: 15px 10px;
        }
        .automotive-meta input[type="text"],
        .automotive-meta textarea,
        .automotive-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .automotive-meta textarea {
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
            max-height: 150px;
            width: auto;
            height: auto;
            margin: 10px 0;
            object-fit: contain;
        }
        #overview-image-preview {
            width: fit-content;
            height: fit-content;
            max-width: 100%;
            overflow: hidden;
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
        /* Style for WordPress Editor */
        .wp-editor-container {
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }
        .automotive-meta .wp-editor-area {
            height: 150px;
        }
        .editor-container {
            min-height: 150px;
            margin-bottom: 10px;
        }
        .wp-editor-tools {
            margin-bottom: 5px;
        }
        .item-field {
            margin-bottom: 12px;
        }
    </style>

    <div class="automotive-meta">
        <table class="form-table">
            <tr>
                <th><label for="automotive_header_title">Page Header Title</label></th>
                <td>
                    <?php
                    $header_title_settings = array(
                        'textarea_name' => 'automotive_header_title',
                        'textarea_rows' => 2,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    // Make sure we have content for the editor
                    if (empty($header_title)) {
                        $header_title = 'Automotive Digital Marketing';
                    }
                    
                    wp_editor($header_title, 'automotive_header_title', $header_title_settings);
                    ?>
                    <p class="description">Add formatted header title text.</p>
                </td>
            </tr>
            <tr>
                <th><label for="automotive_header_subtitle">Page Header Subtitle</label></th>
                <td>
                    <?php
                    $header_subtitle_settings = array(
                        'textarea_name' => 'automotive_header_subtitle',
                        'textarea_rows' => 4,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    // Make sure we have content for the editor
                    if (empty($header_subtitle)) {
                        $header_subtitle = 'Drive more qualified leads to your dealership with proven automotive marketing strategies';
                    }
                    
                    // Force the content to have some formatting to test rich text
                    if ($header_subtitle === 'Drive more qualified leads to your dealership with proven automotive marketing strategies') {
                        $header_subtitle = '<p>Drive <strong>more qualified leads</strong> to your dealership with <em>proven automotive marketing strategies</em></p>';
                    }
                    
                    wp_editor($header_subtitle, 'automotive_header_subtitle', $header_subtitle_settings);
                    ?>
                    <p class="description">Add formatted subtitle text.</p>
                </td>
            </tr>
            <tr>
                <th><label for="automotive_overview_title">Overview Title</label></th>
                <td>
                    <?php
                    $overview_title_settings = array(
                        'textarea_name' => 'automotive_overview_title',
                        'textarea_rows' => 2,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    // Make sure we have content for the editor
                    if (empty($overview_title)) {
                        $overview_title = 'Accelerate Your Automotive Business';
                    }
                    
                    wp_editor($overview_title, 'automotive_overview_title', $overview_title_settings);
                    ?>
                    <p class="description">Add formatted title text.</p>
                </td>
            </tr>
            <tr>
                <th><label for="automotive_overview_content">Overview Content</label></th>
                <td>
                    <?php
                    $editor_settings = array(
                        'textarea_name' => 'automotive_overview_content',
                        'textarea_rows' => 6,
                        'media_buttons' => false,
                        'teeny' => true,
                        'quicktags' => true,
                    );
                    // Make sure we have content for the editor
                    if (empty($overview_content)) {
                        $overview_content = 'The automotive industry has evolved dramatically. Today\'s car buyers research extensively online before stepping foot on a lot. Our specialised automotive marketing strategies ensure you\'re visible throughout their entire buyer journey.';
                    }
                    
                    // Force the content to have some formatting to test rich text
                    if (strpos($overview_content, 'evolved dramatically') !== false) {
                        $overview_content = '<p>The <strong>automotive industry</strong> has evolved dramatically. Today\'s car buyers research extensively online before stepping foot on a lot.</p><p>Our <em>specialised automotive marketing strategies</em> ensure you\'re visible throughout their entire buyer journey.</p>';
                    }
                    
                    wp_editor($overview_content, 'automotive_overview_content', $editor_settings);
                    ?>
                    <p class="description">Add formatted content for the overview section.</p>
                </td>
            </tr>
            <tr>
                <th><label for="automotive_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload">
                        <input type="hidden" id="automotive_overview_image" name="automotive_overview_image" value="<?php echo esc_attr($overview_image); ?>" />
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
                    <th><label for="automotive_challenges_title">Challenges Title</label></th>
                    <td>
                        <?php
                        $challenges_title_settings = array(
                            'textarea_name' => 'automotive_challenges_title',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($challenges_title)) {
                            $challenges_title = 'Automotive Marketing Challenges We Solve:';
                        }
                        
                        wp_editor($challenges_title, 'automotive_challenges_title', $challenges_title_settings);
                        ?>
                        <p class="description">Add formatted challenges title text.</p>
                    </td>
                </tr>
            </table>
            <div class="list-editor">
                <div id="challenges-container">
                    <?php foreach ($challenges as $index => $challenge): ?>
                        <div class="list-item">
                            <div class="editor-container" data-field-name="automotive_challenges[<?php echo $index; ?>]" data-editor-id="challenge_<?php echo $index; ?>" style="flex: 1; margin-right: 10px;">
                                <?php echo wp_kses_post($challenge); ?>
                            </div>
                            <button type="button" class="remove-list-item">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-list-item" id="add-challenge">Add Challenge</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Services Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="automotive_services_title">Services Title</label></th>
                    <td>
                        <?php
                        $services_title_settings = array(
                            'textarea_name' => 'automotive_services_title',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($services_title)) {
                            $services_title = 'Our Automotive Marketing Services';
                        }
                        
                        wp_editor($services_title, 'automotive_services_title', $services_title_settings);
                        ?>
                        <p class="description">Add formatted services title text.</p>
                    </td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="services-container">
                    <?php foreach ($services as $index => $service): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-service">Remove</button>
                            <div class="item-field">
                                <label>Icon (FontAwesome class):</label>
                                <input type="text" name="automotive_services[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($service['icon']); ?>" placeholder="fas fa-map-marker-alt" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <div class="editor-container" data-field-name="automotive_services[<?php echo $index; ?>][title]" data-editor-id="service_title_<?php echo $index; ?>">
                                    <?php echo wp_kses_post($service['title']); ?>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <div class="editor-container" data-field-name="automotive_services[<?php echo $index; ?>][description]" data-editor-id="service_desc_<?php echo $index; ?>">
                                    <?php 
                                    // Make sure description has proper HTML formatting
                                    $formatted_description = wp_kses_post($service['description']);
                                    if (!empty($formatted_description) && strpos($formatted_description, '<p>') === false && strpos($formatted_description, '<div>') === false) {
                                        $formatted_description = '<p>' . $formatted_description . '</p>';
                                    }
                                    echo $formatted_description; 
                                    ?>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>Features (one per line):</label>
                                <textarea name="automotive_services[<?php echo $index; ?>][features]" placeholder="Google My Business optimisation&#10;Local directory listings"><?php echo esc_textarea(is_array($service['features']) ? implode("\n", $service['features']) : $service['features']); ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-service">Add Service</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Case Study Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="automotive_case_study_label">Case Study Label</label></th>
                    <td>
                        <?php
                        $case_study_label_settings = array(
                            'textarea_name' => 'automotive_case_study_label',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($case_study_label)) {
                            $case_study_label = 'Success Story';
                        }
                        
                        wp_editor($case_study_label, 'automotive_case_study_label', $case_study_label_settings);
                        ?>
                        <p class="description">Add formatted case study label text.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="automotive_case_study_title">Case Study Title</label></th>
                    <td>
                        <?php
                        $case_study_title_settings = array(
                            'textarea_name' => 'automotive_case_study_title',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($case_study_title)) {
                            $case_study_title = 'Premier Motors: 180% Increase in Qualified Leads';
                        }
                        
                        wp_editor($case_study_title, 'automotive_case_study_title', $case_study_title_settings);
                        ?>
                        <p class="description">Add formatted case study title text.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="automotive_case_study_content">Case Study Content</label></th>
                    <td>
                        <?php
                        $case_study_editor_settings = array(
                            'textarea_name' => 'automotive_case_study_content',
                            'textarea_rows' => 5,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($case_study_content)) {
                            $case_study_content = 'Premier Motors, a multi-brand dealership, was struggling with online visibility and lead quality. Our comprehensive automotive marketing strategy transformed their digital presence.';
                        }
                        wp_editor($case_study_content, 'automotive_case_study_content', $case_study_editor_settings);
                        ?>
                        <p class="description">Add formatted content for the case study section.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="automotive_case_study_challenge_title">Challenge Section Title</label></th>
                    <td>
                        <?php
                        $case_study_challenge_title_settings = array(
                            'textarea_name' => 'automotive_case_study_challenge_title',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($case_study_challenge_title)) {
                            $case_study_challenge_title = 'The Challenge';
                        }
                        
                        wp_editor($case_study_challenge_title, 'automotive_case_study_challenge_title', $case_study_challenge_title_settings);
                        ?>
                        <p class="description">Add formatted challenge section title text.</p>
                    </td>
                </tr>
            </table>
            
            <h4>Challenge Points</h4>
            <div class="list-editor">
                <div id="challenges-cs-container">
                    <?php foreach ($case_study_challenges as $index => $challenge): ?>
                        <div class="list-item">
                            <div class="editor-container" data-field-name="automotive_case_study_challenges[<?php echo $index; ?>]" data-editor-id="cs_challenge_<?php echo $index; ?>" style="flex: 1; margin-right: 10px;">
                                <?php echo wp_kses_post($challenge); ?>
                            </div>
                            <button type="button" class="remove-list-item">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-list-item" id="add-cs-challenge">Add Challenge</button>
            </div>

            <table class="form-table">
                <tr>
                    <th><label for="automotive_case_study_solution_title">Solution Section Title</label></th>
                    <td>
                        <?php
                        $case_study_solution_title_settings = array(
                            'textarea_name' => 'automotive_case_study_solution_title',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($case_study_solution_title)) {
                            $case_study_solution_title = 'Our Solution';
                        }
                        
                        wp_editor($case_study_solution_title, 'automotive_case_study_solution_title', $case_study_solution_title_settings);
                        ?>
                        <p class="description">Add formatted solution section title text.</p>
                    </td>
                </tr>
            </table>
            
            <h4>Solution Points</h4>
            <div class="list-editor">
                <div id="solutions-container">
                    <?php foreach ($case_study_solutions as $index => $solution): ?>
                        <div class="list-item">
                            <div class="editor-container" data-field-name="automotive_case_study_solutions[<?php echo $index; ?>]" data-editor-id="solution_<?php echo $index; ?>" style="flex: 1; margin-right: 10px;">
                                <?php echo wp_kses_post($solution); ?>
                            </div>
                            <button type="button" class="remove-list-item">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-list-item" id="add-solution">Add Solution</button>
            </div>

            <table class="form-table">
                <tr>
                    <th><label for="automotive_case_study_results_title">Results Section Title</label></th>
                    <td>
                        <?php
                        $case_study_results_title_settings = array(
                            'textarea_name' => 'automotive_case_study_results_title',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($case_study_results_title)) {
                            $case_study_results_title = 'Results After 6 Months';
                        }
                        
                        wp_editor($case_study_results_title, 'automotive_case_study_results_title', $case_study_results_title_settings);
                        ?>
                        <p class="description">Add formatted results section title text.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="automotive_case_study_link_text">Case Study Link Text</label></th>
                    <td><input type="text" id="automotive_case_study_link_text" name="automotive_case_study_link_text" value="<?php echo esc_attr($case_study_link_text); ?>" placeholder="Read Full Case Study" /></td>
                </tr>
                <tr>
                    <th><label for="automotive_case_study_link_url">Case Study Link URL</label></th>
                    <td><input type="url" id="automotive_case_study_link_url" name="automotive_case_study_link_url" value="<?php echo esc_attr($case_study_link_url); ?>" placeholder="/case-studies" /></td>
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
                                <input type="text" name="automotive_case_study_results[<?php echo $index; ?>][number]" value="<?php echo esc_attr($result['number']); ?>" placeholder="180%" />
                            </div>
                            <div class="item-field">
                                <label>Label:</label>
                                <input type="text" name="automotive_case_study_results[<?php echo $index; ?>][label]" value="<?php echo esc_attr($result['label']); ?>" placeholder="Increase in Qualified Leads" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-result">Add Result</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Process Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="automotive_process_title">Process Title</label></th>
                    <td>
                        <?php
                        $process_title_settings = array(
                            'textarea_name' => 'automotive_process_title',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($process_title)) {
                            $process_title = 'Our Automotive Marketing Process';
                        }
                        
                        wp_editor($process_title, 'automotive_process_title', $process_title_settings);
                        ?>
                        <p class="description">Add formatted process title text.</p>
                    </td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="process-container">
                    <?php foreach ($process_steps as $index => $step): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-step">Remove</button>
                            <div class="item-field">
                                <label>Step Title:</label>
                                <div class="editor-container" data-field-name="automotive_process_steps[<?php echo $index; ?>][title]" data-editor-id="step_title_<?php echo $index; ?>">
                                    <?php echo wp_kses_post($step['title']); ?>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>Step Description:</label>
                                <div class="editor-container" data-field-name="automotive_process_steps[<?php echo $index; ?>][description]" data-editor-id="step_desc_<?php echo $index; ?>">
                                    <?php echo wp_kses_post($step['description']); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-step">Add Process Step</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Industry Insights</h3>
            <table class="form-table">
                <tr>
                    <th><label for="automotive_insights_title">Insights Title</label></th>
                    <td>
                        <?php
                        $insights_title_settings = array(
                            'textarea_name' => 'automotive_insights_title',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($insights_title)) {
                            $insights_title = 'Automotive Industry Insights';
                        }
                        
                        wp_editor($insights_title, 'automotive_insights_title', $insights_title_settings);
                        ?>
                        <p class="description">Add formatted insights title text.</p>
                    </td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="insights-container">
                    <?php foreach ($insights as $index => $insight): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-insight">Remove</button>
                            <div class="item-field">
                                <label>Statistic:</label>
                                <input type="text" name="automotive_insights[<?php echo $index; ?>][stat]" value="<?php echo esc_attr($insight['stat']); ?>" placeholder="95%" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <div class="editor-container" data-field-name="automotive_insights[<?php echo $index; ?>][title]" data-editor-id="insight_title_<?php echo $index; ?>">
                                    <?php 
                                    // Make sure title doesn't have wrapping <p> tags
                                    $title_content = wp_kses_post($insight['title']);
                                    // Strip wrapping <p> tags if they exist
                                    $title_content = preg_replace('/<p>(.*?)<\/p>/', '$1', $title_content);
                                    echo $title_content; 
                                    ?>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <div class="editor-container" data-field-name="automotive_insights[<?php echo $index; ?>][description]" data-editor-id="insight_desc_<?php echo $index; ?>">
                                    <?php echo wp_kses_post($insight['description']); ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-insight">Add Insight</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Testimonial Section (without image)</h3>
            <table class="form-table">
                <tr>
                    <th><label for="automotive_testimonial_quote">Testimonial Quote</label></th>
                    <td>
                        <?php
                        $testimonial_editor_settings = array(
                            'textarea_name' => 'automotive_testimonial_quote',
                            'textarea_rows' => 5,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($testimonial_quote)) {
                            $testimonial_quote = '"Aimpro Digital completely transformed our online presence. Their understanding of the automotive market helped us generate 180% more qualified leads and significantly improved our service department bookings. The team\'s expertise in automotive marketing is unmatched."';
                        }
                        wp_editor($testimonial_quote, 'automotive_testimonial_quote', $testimonial_editor_settings);
                        ?>
                        <p class="description">Add a formatted testimonial quote. You can use bold, italic, etc.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="automotive_testimonial_name">Client Name</label></th>
                    <td><input type="text" id="automotive_testimonial_name" name="automotive_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" placeholder="Mark Thompson" /></td>
                </tr>
                <tr>
                    <th><label for="automotive_testimonial_position">Client Position</label></th>
                    <td><input type="text" id="automotive_testimonial_position" name="automotive_testimonial_position" value="<?php echo esc_attr($testimonial_position); ?>" placeholder="General Manager, Premier Motors" /></td>
                </tr>
                <tr>
                    <th><label for="automotive_testimonial_company">Company Description</label></th>
                    <td><input type="text" id="automotive_testimonial_company" name="automotive_testimonial_company" value="<?php echo esc_attr($testimonial_company); ?>" placeholder="Multi-brand dealership with 3 locations" /></td>
                </tr>
            </table>
        </div>

        <div class="section-divider">
            <h3>CTA Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="automotive_cta_title">CTA Title</label></th>
                    <td>
                        <?php
                        $cta_title_settings = array(
                            'textarea_name' => 'automotive_cta_title',
                            'textarea_rows' => 2,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($cta_title)) {
                            $cta_title = 'Ready to Accelerate Your Automotive Marketing?';
                        }
                        
                        wp_editor($cta_title, 'automotive_cta_title', $cta_title_settings);
                        ?>
                        <p class="description">Add formatted CTA title text.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="automotive_cta_subtitle">CTA Subtitle</label></th>
                    <td>
                        <?php
                        $cta_subtitle_settings = array(
                            'textarea_name' => 'automotive_cta_subtitle',
                            'textarea_rows' => 4,
                            'media_buttons' => false,
                            'teeny' => true,
                            'quicktags' => true,
                        );
                        // Make sure we have content for the editor
                        if (empty($cta_subtitle)) {
                            $cta_subtitle = 'Let\'s discuss how our automotive marketing expertise can drive more qualified leads to your dealership.';
                        }
                        wp_editor($cta_subtitle, 'automotive_cta_subtitle', $cta_subtitle_settings);
                        ?>
                        <p class="description">Add formatted subtitle text for the CTA section.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="automotive_cta_primary_text">Primary Button Text</label></th>
                    <td><input type="text" id="automotive_cta_primary_text" name="automotive_cta_primary_text" value="<?php echo esc_attr($cta_primary_text); ?>" placeholder="Get Free Automotive Audit" /></td>
                </tr>
                <tr>
                    <th><label for="automotive_cta_primary_url">Primary Button URL</label></th>
                    <td><input type="url" id="automotive_cta_primary_url" name="automotive_cta_primary_url" value="<?php echo esc_attr($cta_primary_url); ?>" placeholder="/contact" /></td>
                </tr>
                <tr>
                    <th><label for="automotive_cta_secondary_text">Secondary Button Text</label></th>
                    <td><input type="text" id="automotive_cta_secondary_text" name="automotive_cta_secondary_text" value="<?php echo esc_attr($cta_secondary_text); ?>" placeholder="View More Success Stories" /></td>
                </tr>
                <tr>
                    <th><label for="automotive_cta_secondary_url">Secondary Button URL</label></th>
                    <td><input type="url" id="automotive_cta_secondary_url" name="automotive_cta_secondary_url" value="<?php echo esc_attr($cta_secondary_url); ?>" placeholder="/case-studies" /></td>
                </tr>
            </table>
            
            <h4>CTA Benefits</h4>
            <div class="list-editor">
                <div id="cta-benefits-container">
                    <?php foreach ($cta_benefits as $index => $benefit): ?>
                        <div class="list-item">
                            <input type="text" name="automotive_cta_benefits[<?php echo $index; ?>]" value="<?php echo esc_attr($benefit); ?>" placeholder="✓ Benefit..." />
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
                $('#automotive_overview_image').val(image_url);
                $('#overview-image-preview').html('<img src="' + image_url + '" class="image-preview" />');
            });
        });

        $('#remove-overview-image').click(function() {
            $('#automotive_overview_image').val('');
            $('#overview-image-preview').html('');
        });

        // Function to initialize all wp_editors in the page
        function initAllEditors() {
            if (typeof tinyMCE !== 'undefined') {
                tinyMCE.init({
                    mode: "textareas",
                    editor_selector: "mceEditor"
                });
            }
        }

        // Replace a simple textarea with wp_editor for repeater items
        function setupDynamicEditor(container, fieldName, editorId, content) {
            // Decode HTML entities before setting in textarea
            var decodedContent = $('<div/>').html(content).text();
            
            // If content is empty, set default placeholder text based on the field type
            if (!decodedContent || decodedContent.trim() === '') {
                if (fieldName.includes('services') && fieldName.includes('description')) {
                    decodedContent = 'Dominate local search results when customers search for "car dealerships near me" or specific vehicle models in your area.';
                } else if (fieldName.includes('process_steps') && fieldName.includes('description')) {
                    decodedContent = 'We analyse your local automotive market, competitor strategies, and customer behaviour patterns.';
                } else if (fieldName.includes('insights') && fieldName.includes('description')) {
                    decodedContent = '95% of car buyers research vehicles online before visiting a dealership';
                }
            }
            
            var editorHTML = '<div id="wp-' + editorId + '-wrap" class="wp-core-ui wp-editor-wrap tmce-active">' +
                '<div class="wp-editor-tools">' +
                '<div class="wp-editor-tabs">' +
                '<button type="button" class="wp-switch-editor switch-tmce" data-wp-editor-id="' + editorId + '">Visual</button>' +
                '<button type="button" class="wp-switch-editor switch-html" data-wp-editor-id="' + editorId + '">Text</button>' +
                '</div>' +
                '</div>' +
                '<div class="wp-editor-container">' +
                '<textarea class="wp-editor-area mceEditor" name="' + fieldName + '" id="' + editorId + '">' + decodedContent + '</textarea>' +
                '</div>' +
                '</div>';
            
            container.html(editorHTML);
            
            // Initialize this editor
            if (typeof tinyMCE !== 'undefined') {
                tinyMCE.execCommand('mceAddEditor', false, editorId);
            }
            
            // Initialize QuickTags
            if (typeof quicktags !== 'undefined') {
                quicktags({id: editorId, buttons: 'strong,em,link,ul,ol,li,code'});
            }
        }

        // Function to initialize the rich text editor with error handling
        function initializeDynamicEditor(container, fieldName, editorId, content) {
            try {
                // Debug - log initialization
                console.log('Initializing editor: ' + editorId + ' with content length: ' + (content ? content.length : 0));
                
                // Setup the editor
                setupDynamicEditor(container, fieldName, editorId, content);
                
                // Additional safety check to ensure content was properly set
                setTimeout(function() {
                    var editor = tinymce.get(editorId);
                    if (editor) {
                        var currentContent = editor.getContent();
                        if (!currentContent && content) {
                            console.log('Retry setting content for ' + editorId);
                            editor.setContent(content);
                        }
                    }
                }, 500);
            } catch (e) {
                console.error('Error initializing editor ' + editorId + ':', e);
                // Fallback to textarea if editor initialization fails
                $(container).html('<textarea name="' + fieldName + '" style="width:100%;min-height:150px;">' + content + '</textarea>');
            }
        }

        // Add/remove functionality for all repeaters and lists
        var repeaterConfigs = [
            {addBtn: '.add-service', container: '#services-container', prefix: 'automotive_services', type: 'service'},
            {addBtn: '.add-result', container: '#results-container', prefix: 'automotive_case_study_results', type: 'result'},
            {addBtn: '.add-step', container: '#process-container', prefix: 'automotive_process_steps', type: 'step'},
            {addBtn: '.add-insight', container: '#insights-container', prefix: 'automotive_insights', type: 'insight'}
        ];

        var listConfigs = [
            {addBtn: '#add-challenge', container: '#challenges-container', prefix: 'automotive_challenges'},
            {addBtn: '#add-cs-challenge', container: '#challenges-cs-container', prefix: 'automotive_case_study_challenges'},
            {addBtn: '#add-solution', container: '#solutions-container', prefix: 'automotive_case_study_solutions'},
            {addBtn: '#add-benefit', container: '#cta-benefits-container', prefix: 'automotive_cta_benefits'}
        ];

        // Handle repeater items
        repeaterConfigs.forEach(function(config) {
            $(document).on('click', config.addBtn, function() {
                var container = $(config.container);
                var index = container.find('.repeater-item').length;
                var html = '';
                
                if (config.type === 'service') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-service">Remove</button>' +
                        '<div class="item-field"><label>Icon:</label><input type="text" name="' + config.prefix + '[' + index + '][icon]" placeholder="fas fa-map-marker-alt" /></div>' +
                        '<div class="item-field"><label>Title:</label><input type="text" name="' + config.prefix + '[' + index + '][title]" placeholder="Service Title" /></div>' +
                        '<div class="item-field"><label>Description:</label><div class="editor-container" data-field-name="' + config.prefix + '[' + index + '][description]" data-editor-id="service_desc_' + index + '"></div></div>' +
                        '<div class="item-field"><label>Features:</label><textarea name="' + config.prefix + '[' + index + '][features]" placeholder="Feature 1\nFeature 2"></textarea></div>' +
                        '</div>';
                } else if (config.type === 'result') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-result">Remove</button>' +
                        '<div class="item-field"><label>Number:</label><input type="text" name="' + config.prefix + '[' + index + '][number]" placeholder="180%" /></div>' +
                        '<div class="item-field"><label>Label:</label><input type="text" name="' + config.prefix + '[' + index + '][label]" placeholder="Increase in Leads" /></div>' +
                        '</div>';
                } else if (config.type === 'step') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-step">Remove</button>' +
                        '<div class="item-field"><label>Title:</label><input type="text" name="' + config.prefix + '[' + index + '][title]" placeholder="Step Title" /></div>' +
                        '<div class="item-field"><label>Step Description:</label><div class="editor-container" data-field-name="' + config.prefix + '[' + index + '][description]" data-editor-id="step_desc_' + index + '"></div></div>' +
                        '</div>';
                } else if (config.type === 'insight') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-insight">Remove</button>' +
                        '<div class="item-field"><label>Statistic:</label><input type="text" name="' + config.prefix + '[' + index + '][stat]" placeholder="95%" /></div>' +
                        '<div class="item-field"><label>Title:</label><div class="editor-container" data-field-name="' + config.prefix + '[' + index + '][title]" data-editor-id="insight_title_' + index + '"></div></div>' +
                        '<div class="item-field"><label>Description:</label><div class="editor-container" data-field-name="' + config.prefix + '[' + index + '][description]" data-editor-id="insight_desc_' + index + '"></div></div>' +
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
                var placeholder = "Item...";
                
                // Set specific placeholders based on the field type
                if (config.prefix === 'automotive_challenges') {
                    placeholder = "Challenge...";
                } else if (config.prefix === 'automotive_case_study_challenges') {
                    placeholder = "Challenge...";
                } else if (config.prefix === 'automotive_case_study_solutions') {
                    placeholder = "Solution...";
                } else if (config.prefix === 'automotive_cta_benefits') {
                    placeholder = "✓ Benefit...";
                }
                
                var html = '<div class="list-item">' +
                    '<input type="text" name="' + config.prefix + '[' + index + ']" placeholder="' + placeholder + '" />' +
                    '<button type="button" class="remove-list-item">Remove</button>' +
                    '</div>';
                container.append(html);
            });
        });

        // Remove items
        $(document).on('click', '.remove-item, .remove-list-item', function() {
            $(this).closest('.repeater-item, .list-item').remove();
        });

        // Initialize all editors on page load
        initAllEditors();

        // Re-initialize editors when a repeater item is added
        $(document).on('click', '.add-service, .add-step, .add-insight', function() {
            var config = repeaterConfigs.find(c => $(this).hasClass(c.addBtn.replace('.', '')));
            if (config) {
                var container = $(config.container);
                var index = container.find('.repeater-item').length - 1;
                var newItem = container.find('.repeater-item').last();
                
                // Find all editor containers in this new item
                newItem.find('.editor-container').each(function() {
                    var fieldName = $(this).data('field-name') || $(this).attr('data-field-name');
                    var editorId = $(this).data('editor-id') || $(this).attr('data-editor-id');
                    if (fieldName && editorId) {
                        initializeDynamicEditor($(this), fieldName, editorId, '');
                    }
                });
            }
        });
        
        // Initialize any existing editor containers on load
        $('.editor-container').each(function() {
            var fieldName = $(this).data('field-name');
            var editorId = $(this).data('editor-id');
            
            // Get the content from the container's innerHTML
            var content = $(this).html().trim();
            
            // Create an element to decode HTML entities
            var textarea = document.createElement('textarea');
            textarea.innerHTML = content;
            content = textarea.value;
            
            // Debug
            console.log('Editor ID: ' + editorId + ', Content: ' + content);
            
            initializeDynamicEditor($(this), fieldName, editorId, content);
        });
    });
    </script>
    <?php
}

function save_automotive_meta_box_data($post_id) {
    if (!isset($_POST['automotive_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['automotive_meta_box_nonce'], 'automotive_meta_box')) {
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

    // Save all simple text fields
    $fields = array(
        'automotive_header_title' => '_automotive_header_title',
        'automotive_header_subtitle' => '_automotive_header_subtitle',
        'automotive_overview_title' => '_automotive_overview_title',
        'automotive_overview_content' => '_automotive_overview_content',
        'automotive_overview_image' => '_automotive_overview_image',
        'automotive_challenges_title' => '_automotive_challenges_title',
        'automotive_services_title' => '_automotive_services_title',
        'automotive_case_study_label' => '_automotive_case_study_label',
        'automotive_case_study_title' => '_automotive_case_study_title',
        'automotive_case_study_content' => '_automotive_case_study_content',
        'automotive_case_study_challenge_title' => '_automotive_case_study_challenge_title',
        'automotive_case_study_solution_title' => '_automotive_case_study_solution_title',
        'automotive_case_study_results_title' => '_automotive_case_study_results_title',
        'automotive_case_study_link_text' => '_automotive_case_study_link_text',
        'automotive_case_study_link_url' => '_automotive_case_study_link_url',
        'automotive_process_title' => '_automotive_process_title',
        'automotive_insights_title' => '_automotive_insights_title',
        'automotive_testimonial_quote' => '_automotive_testimonial_quote',
        'automotive_testimonial_name' => '_automotive_testimonial_name',
        'automotive_testimonial_position' => '_automotive_testimonial_position',
        'automotive_testimonial_company' => '_automotive_testimonial_company',
        'automotive_cta_title' => '_automotive_cta_title',
        'automotive_cta_subtitle' => '_automotive_cta_subtitle',
        'automotive_cta_primary_text' => '_automotive_cta_primary_text',
        'automotive_cta_primary_url' => '_automotive_cta_primary_url',
        'automotive_cta_secondary_text' => '_automotive_cta_secondary_text',
        'automotive_cta_secondary_url' => '_automotive_cta_secondary_url'
    );

    foreach ($fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            // Apply different sanitization based on field type
            if (in_array($field, [
                'automotive_overview_content', 
                'automotive_case_study_content', 
                'automotive_testimonial_quote',
                'automotive_header_subtitle',
                'automotive_cta_subtitle',
                'automotive_header_title',
                'automotive_overview_title',
                'automotive_challenges_title',
                'automotive_services_title',
                'automotive_case_study_label',
                'automotive_case_study_title',
                'automotive_case_study_challenge_title',
                'automotive_case_study_solution_title',
                'automotive_case_study_results_title',
                'automotive_process_title',
                'automotive_insights_title',
                'automotive_cta_title'
            ])) {
            // For rich text fields, use wp_kses to allow certain HTML tags
                $allowed_html = array(
                    'p' => array(
                        'style' => array(),
                        'class' => array()
                    ),
                    'strong' => array(),
                    'em' => array(),
                    'b' => array(),
                    'i' => array(),
                    'u' => array(),
                    'a' => array(
                        'href' => array(),
                        'title' => array(),
                        'target' => array(),
                        'rel' => array(),
                        'class' => array()
                    ),
                    'ul' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'ol' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'li' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'span' => array(
                        'style' => array(),
                        'class' => array()
                    ),
                    'br' => array(),
                    'div' => array(
                        'class' => array(),
                        'style' => array(),
                        'id' => array()
                    ),
                    'h1' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'h2' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'h3' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'h4' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'h5' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'h6' => array(
                        'class' => array(),
                        'style' => array()
                    ),
                    'img' => array(
                        'src' => array(),
                        'alt' => array(),
                        'title' => array(),
                        'width' => array(),
                        'height' => array(),
                        'class' => array(),
                        'style' => array()
                    )
                );
                // Use the built-in wp_kses_post which is more permissive than our custom filter
                update_post_meta($post_id, $meta_key, wp_kses_post($_POST[$field]));
            } else {
                // For regular text fields, use sanitize_text_field
                update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
            }
        }
    }

    // Save array fields
    $array_fields = array(
        'automotive_challenges' => '_automotive_challenges',
        'automotive_case_study_challenges' => '_automotive_case_study_challenges',
        'automotive_case_study_solutions' => '_automotive_case_study_solutions',
    );

    foreach ($array_fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, array_map('wp_kses_post', $_POST[$field]));
        }
    }
    
    // Save CTA benefits with HTML
    if (isset($_POST['automotive_cta_benefits'])) {
        update_post_meta($post_id, '_automotive_cta_benefits', array_map('wp_kses_post', $_POST['automotive_cta_benefits']));
    }

    // Save complex repeater fields
    if (isset($_POST['automotive_services'])) {
        $services = array();
        foreach ($_POST['automotive_services'] as $service) {
            $services[] = array(
                'icon' => sanitize_text_field($service['icon']),
                'title' => wp_kses_post($service['title']),
                'description' => wp_kses_post($service['description']),
                'features' => array_filter(array_map('trim', explode("\n", wp_kses_post($service['features']))))
            );
        }
        update_post_meta($post_id, '_automotive_services', $services);
    }

    if (isset($_POST['automotive_case_study_results'])) {
        $results = array();
        foreach ($_POST['automotive_case_study_results'] as $result) {
            $results[] = array(
                'number' => sanitize_text_field($result['number']),
                'label' => sanitize_text_field($result['label'])
            );
        }
        update_post_meta($post_id, '_automotive_case_study_results', $results);
    }

    if (isset($_POST['automotive_process_steps'])) {
        $steps = array();
        foreach ($_POST['automotive_process_steps'] as $step) {
            $steps[] = array(
                'title' => wp_kses_post($step['title']),
                'description' => wp_kses_post($step['description'])
            );
        }
        update_post_meta($post_id, '_automotive_process_steps', $steps);
    }

    if (isset($_POST['automotive_insights'])) {
        $insights = array();
        foreach ($_POST['automotive_insights'] as $insight) {
            // For the title, strip wrapping <p> tags if they exist
            $title = wp_kses_post($insight['title']);
            $title = preg_replace('/<p>(.*?)<\/p>/', '$1', $title);
            
            $insights[] = array(
                'stat' => sanitize_text_field($insight['stat']),
                'title' => $title,
                'description' => wp_kses_post($insight['description'])
            );
        }
        update_post_meta($post_id, '_automotive_insights', $insights);
    }
}
add_action('save_post', 'save_automotive_meta_box_data');