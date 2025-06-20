<?php
// Home & Garden Page Meta Fields

function add_home_garden_meta_boxes() {
    $home_garden_screens = array('page');
    
    foreach ($home_garden_screens as $screen) {
        add_meta_box(
            'home_garden_meta_box',
            'Home & Garden Page Content',
            'home_garden_meta_box_callback',
            $screen,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_home_garden_meta_boxes');

function home_garden_meta_box_callback($post) {
    // Only show on home garden page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-home-garden.php') {
        echo '<p>This meta box only appears when using the "Home & Garden Industry Page" template.</p>';
        return;
    }

    wp_nonce_field('home_garden_meta_box', 'home_garden_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_home_garden_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_home_garden_header_subtitle', true);
    $overview_title = get_post_meta($post->ID, '_home_garden_overview_title', true);
    $overview_content = get_post_meta($post->ID, '_home_garden_overview_content', true);
    $overview_image = get_post_meta($post->ID, '_home_garden_overview_image', true);

    // Challenges section
    $challenges_title = get_post_meta($post->ID, '_home_garden_challenges_title', true);
    $challenges = get_post_meta($post->ID, '_home_garden_challenges', true);
    if (empty($challenges)) {
        $challenges = array(
            'Seasonal demand fluctuations and planning',
            'Weather-dependent service scheduling',
            'Showcasing visual before/after transformations',
            'Local service area competition',
            'Generating leads during off-peak seasons'
        );
    }

    // Services section
    $services_title = get_post_meta($post->ID, '_home_garden_services_title', true);
    $services = get_post_meta($post->ID, '_home_garden_services', true);
    if (empty($services)) {
        $services = array(
            array(
                'icon' => 'fas fa-calendar-alt',
                'title' => 'Seasonal Campaign optimisation',
                'description' => 'Maximize revenue during peak seasons with strategically planned campaigns that target homeowners when they\'re ready to invest in their properties.',
                'features' => array('Spring landscaping campaigns', 'Summer maintenance promotions', 'Fall cleanup and preparation', 'Winter planning and indoor projects')
            ),
            array(
                'icon' => 'fas fa-camera',
                'title' => 'Visual Content Marketing',
                'description' => 'Showcase stunning transformations with before/after content that demonstrates your expertise and builds trust with potential customers.',
                'features' => array('Before/after transformation showcases', 'Time-lapse project videos', 'Pinterest optimisation for inspiration', 'Instagram visual storytelling')
            ),
            array(
                'icon' => 'fas fa-map-marker-alt',
                'title' => 'Local Service Area Marketing',
                'description' => 'Dominate your local service areas with geo-targeted campaigns that reach homeowners exactly when they need your services.',
                'features' => array('Hyper-local SEO optimisation', 'Google My Business management', 'Location-based PPC campaigns', 'Neighborhood-specific targeting')
            ),
            array(
                'icon' => 'fas fa-chart-line',
                'title' => 'Lead Generation & Conversion',
                'description' => 'Convert website visitors into paying customers with optimised landing pages, quote request forms, and follow-up automation.',
                'features' => array('Quote request optimisation', 'Consultation booking systems', 'Follow-up automation', 'Seasonal promotion campaigns')
            )
        );
    }

    // Case study section
    $case_study_label = get_post_meta($post->ID, '_home_garden_case_study_label', true);
    $case_study_title = get_post_meta($post->ID, '_home_garden_case_study_title', true);
    $case_study_content = get_post_meta($post->ID, '_home_garden_case_study_content', true);
    $case_study_challenge_title = get_post_meta($post->ID, '_home_garden_case_study_challenge_title', true);
    $case_study_challenges = get_post_meta($post->ID, '_home_garden_case_study_challenges', true);
    if (empty($case_study_challenges)) {
        $case_study_challenges = array(
            'Heavy dependence on 3-month peak season',
            'Limited online visibility for landscaping services',
            'Competition from big box stores',
            'Difficulty showcasing service quality online'
        );
    }
    $case_study_solution_title = get_post_meta($post->ID, '_home_garden_case_study_solution_title', true);
    $case_study_solutions = get_post_meta($post->ID, '_home_garden_case_study_solutions', true);
    if (empty($case_study_solutions)) {
        $case_study_solutions = array(
            'Pre-season awareness campaigns',
            'Visual before/after content strategy',
            'Local SEO for landscaping services',
            'Year-round maintenance program promotion'
        );
    }
    $case_study_results_title = get_post_meta($post->ID, '_home_garden_case_study_results_title', true);
    $case_study_results = get_post_meta($post->ID, '_home_garden_case_study_results', true);
    if (empty($case_study_results)) {
        $case_study_results = array(
            array('number' => '220%', 'label' => 'Seasonal Revenue Increase'),
            array('number' => '160%', 'label' => 'Landscaping Service Leads'),
            array('number' => '45%', 'label' => 'Year-Round Revenue Growth'),
            array('number' => '85%', 'label' => 'Increase in Repeat Customers')
        );
    }
    $case_study_link_text = get_post_meta($post->ID, '_home_garden_case_study_link_text', true);
    $case_study_link_url = get_post_meta($post->ID, '_home_garden_case_study_link_url', true);

    // Seasonal calendar section
    $calendar_title = get_post_meta($post->ID, '_home_garden_calendar_title', true);
    $seasons = get_post_meta($post->ID, '_home_garden_seasons', true);
    if (empty($seasons)) {
        $seasons = array(
            array(
                'title' => '?? Spring (March - May)',
                'revenue_type' => 'Peak Revenue Season',
                'focus_title' => 'Key Marketing Focus:',
                'focus_points' => array('Landscaping design consultations', 'Garden preparation and planting', 'Lawn care service sign-ups', 'Outdoor living space projects'),
                'tactics' => array('Pre-season email campaigns', 'Early bird promotions', 'Social media inspiration content')
            ),
            array(
                'title' => '?? Summer (June - August)',
                'revenue_type' => 'Maintenance Season',
                'focus_title' => 'Key Marketing Focus:',
                'focus_points' => array('Irrigation and watering solutions', 'Pest control services', 'Lawn maintenance contracts', 'Outdoor entertainment spaces'),
                'tactics' => array('Maintenance reminders', 'Drought-resistant solutions', 'Before/after showcases')
            ),
            array(
                'title' => '?? Fall (September - November)',
                'revenue_type' => 'Preparation Season',
                'focus_title' => 'Key Marketing Focus:',
                'focus_points' => array('Fall cleanup services', 'Winter preparation', 'Tree and shrub care', 'Holiday decoration services'),
                'tactics' => array('Cleanup service packages', 'Winter prep checklists', 'Next year planning')
            ),
            array(
                'title' => '?? Winter (December - February)',
                'revenue_type' => 'Planning Season',
                'focus_title' => 'Key Marketing Focus:',
                'focus_points' => array('Holiday decorating services', 'Indoor plant care', 'Next year project planning', 'Design consultations'),
                'tactics' => array('Planning consultations', 'Educational content', 'Early bird spring bookings')
            )
        );
    }

    // Visual marketing section
    $visual_title = get_post_meta($post->ID, '_home_garden_visual_title', true);
    $visual_examples = get_post_meta($post->ID, '_home_garden_visual_examples', true);
    if (empty($visual_examples)) {
        $visual_examples = array(
            array(
                'image' => '',
                'title' => 'Before/After Transformations',
                'description' => 'Showcase dramatic transformations that demonstrate your expertise and build trust with potential customers.',
                'stats' => array('? 340% higher engagement', '? 85% more inquiries')
            ),
            array(
                'image' => '',
                'title' => 'Time-lapse Project Videos',
                'description' => 'Document your projects from start to finish with engaging time-lapse videos that showcase your process.',
                'stats' => array('? 250% video completion rate', '? 120% social shares')
            ),
            array(
                'image' => '',
                'title' => 'Seasonal Inspiration Content',
                'description' => 'Share seasonal tips, plant care guides, and inspiration content that keeps your audience engaged year-round.',
                'stats' => array('? 180% Pinterest traffic', '? 95% repeat visitors')
            )
        );
    }

    // Testimonial section (without image)
    $testimonial_quote = get_post_meta($post->ID, '_home_garden_testimonial_quote', true);
    $testimonial_name = get_post_meta($post->ID, '_home_garden_testimonial_name', true);
    $testimonial_position = get_post_meta($post->ID, '_home_garden_testimonial_position', true);
    $testimonial_company = get_post_meta($post->ID, '_home_garden_testimonial_company', true);

    // CTA section
    $cta_title = get_post_meta($post->ID, '_home_garden_cta_title', true);
    $cta_subtitle = get_post_meta($post->ID, '_home_garden_cta_subtitle', true);
    $cta_primary_text = get_post_meta($post->ID, '_home_garden_cta_primary_text', true);
    $cta_primary_url = get_post_meta($post->ID, '_home_garden_cta_primary_url', true);
    $cta_secondary_text = get_post_meta($post->ID, '_home_garden_cta_secondary_text', true);
    $cta_secondary_url = get_post_meta($post->ID, '_home_garden_cta_secondary_url', true);
    $cta_benefits = get_post_meta($post->ID, '_home_garden_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '? Free seasonal audit',
            '? Custom campaign recommendations',
            '? Visual marketing strategy'
        );
    }

    ?>
    <style>
        .home-garden-meta {
            max-width: 100%;
        }
        .home-garden-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .home-garden-meta .form-table td {
            padding: 15px 10px;
        }
        .home-garden-meta input[type="text"],
        .home-garden-meta textarea,
        .home-garden-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .home-garden-meta textarea {
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

    <div class="home-garden-meta">
        <table class="form-table">
            <tr>
                <th><label for="home_garden_header_title">Page Header Title</label></th>
                <td><input type="text" id="home_garden_header_title" name="home_garden_header_title" value="<?php echo esc_attr($header_title); ?>" placeholder="Home & Garden Digital Marketing" /></td>
            </tr>
            <tr>
                <th><label for="home_garden_header_subtitle">Page Header Subtitle</label></th>
                <td><textarea id="home_garden_header_subtitle" name="home_garden_header_subtitle" placeholder="Grow your home improvement business with seasonal campaigns and local marketing strategies"><?php echo esc_textarea($header_subtitle); ?></textarea></td>
            </tr>
            <tr>
                <th><label for="home_garden_overview_title">Overview Title</label></th>
                <td><input type="text" id="home_garden_overview_title" name="home_garden_overview_title" value="<?php echo esc_attr($overview_title); ?>" placeholder="Cultivate Your Home & Garden Business Growth" /></td>
            </tr>
            <tr>
                <th><label for="home_garden_overview_content">Overview Content</label></th>
                <td><textarea id="home_garden_overview_content" name="home_garden_overview_content" placeholder="The home and garden industry is highly seasonal..."><?php echo esc_textarea($overview_content); ?></textarea></td>
            </tr>
            <tr>
                <th><label for="home_garden_overview_image">Overview Image</label></th>
                <td>
                    <div class="image-upload">
                        <input type="hidden" id="home_garden_overview_image" name="home_garden_overview_image" value="<?php echo esc_attr($overview_image); ?>" />
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
                    <th><label for="home_garden_challenges_title">Challenges Title</label></th>
                    <td><input type="text" id="home_garden_challenges_title" name="home_garden_challenges_title" value="<?php echo esc_attr($challenges_title); ?>" placeholder="Home & Garden Marketing Challenges We Solve:" /></td>
                </tr>
            </table>
            <div class="list-editor">
                <div id="challenges-container">
                    <?php foreach ($challenges as $index => $challenge): ?>
                        <div class="list-item">
                            <input type="text" name="home_garden_challenges[<?php echo $index; ?>]" value="<?php echo esc_attr($challenge); ?>" placeholder="Challenge..." />
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
                    <th><label for="home_garden_services_title">Services Title</label></th>
                    <td><input type="text" id="home_garden_services_title" name="home_garden_services_title" value="<?php echo esc_attr($services_title); ?>" placeholder="Our Home & Garden Marketing Services" /></td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="services-container">
                    <?php foreach ($services as $index => $service): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-service">Remove</button>
                            <div class="item-field">
                                <label>Icon (FontAwesome class):</label>
                                <input type="text" name="home_garden_services[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($service['icon']); ?>" placeholder="fas fa-calendar-alt" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="home_garden_services[<?php echo $index; ?>][title]" value="<?php echo esc_attr($service['title']); ?>" placeholder="Seasonal Campaign optimisation" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="home_garden_services[<?php echo $index; ?>][description]" placeholder="Maximize revenue during peak seasons..."><?php echo esc_textarea($service['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Features (one per line):</label>
                                <textarea name="home_garden_services[<?php echo $index; ?>][features]" placeholder="Spring landscaping campaigns&#10;Summer maintenance promotions"><?php echo esc_textarea(is_array($service['features']) ? implode("\n", $service['features']) : $service['features']); ?></textarea>
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
                    <th><label for="home_garden_case_study_label">Case Study Label</label></th>
                    <td><input type="text" id="home_garden_case_study_label" name="home_garden_case_study_label" value="<?php echo esc_attr($case_study_label); ?>" placeholder="Success Story" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_case_study_title">Case Study Title</label></th>
                    <td><input type="text" id="home_garden_case_study_title" name="home_garden_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" placeholder="Blooming Gardens: 220% Seasonal Revenue Boost" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_case_study_content">Case Study Content</label></th>
                    <td><textarea id="home_garden_case_study_content" name="home_garden_case_study_content" placeholder="Blooming Gardens, a local garden centre..."><?php echo esc_textarea($case_study_content); ?></textarea></td>
                </tr>
                <tr>
                    <th><label for="home_garden_case_study_challenge_title">Challenge Section Title</label></th>
                    <td><input type="text" id="home_garden_case_study_challenge_title" name="home_garden_case_study_challenge_title" value="<?php echo esc_attr($case_study_challenge_title); ?>" placeholder="The Challenge" /></td>
                </tr>
            </table>
            
            <h4>Challenge Points</h4>
            <div class="list-editor">
                <div id="challenges-cs-container">
                    <?php foreach ($case_study_challenges as $index => $challenge): ?>
                        <div class="list-item">
                            <input type="text" name="home_garden_case_study_challenges[<?php echo $index; ?>]" value="<?php echo esc_attr($challenge); ?>" placeholder="Challenge..." />
                            <button type="button" class="remove-list-item">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-list-item" id="add-cs-challenge">Add Challenge</button>
            </div>

            <table class="form-table">
                <tr>
                    <th><label for="home_garden_case_study_solution_title">Solution Section Title</label></th>
                    <td><input type="text" id="home_garden_case_study_solution_title" name="home_garden_case_study_solution_title" value="<?php echo esc_attr($case_study_solution_title); ?>" placeholder="Our Solution" /></td>
                </tr>
            </table>
            
            <h4>Solution Points</h4>
            <div class="list-editor">
                <div id="solutions-container">
                    <?php foreach ($case_study_solutions as $index => $solution): ?>
                        <div class="list-item">
                            <input type="text" name="home_garden_case_study_solutions[<?php echo $index; ?>]" value="<?php echo esc_attr($solution); ?>" placeholder="Solution..." />
                            <button type="button" class="remove-list-item">Remove</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-list-item" id="add-solution">Add Solution</button>
            </div>

            <table class="form-table">
                <tr>
                    <th><label for="home_garden_case_study_results_title">Results Section Title</label></th>
                    <td><input type="text" id="home_garden_case_study_results_title" name="home_garden_case_study_results_title" value="<?php echo esc_attr($case_study_results_title); ?>" placeholder="Results After 12 Months" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_case_study_link_text">Case Study Link Text</label></th>
                    <td><input type="text" id="home_garden_case_study_link_text" name="home_garden_case_study_link_text" value="<?php echo esc_attr($case_study_link_text); ?>" placeholder="Read Full Case Study" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_case_study_link_url">Case Study Link URL</label></th>
                    <td><input type="url" id="home_garden_case_study_link_url" name="home_garden_case_study_link_url" value="<?php echo esc_attr($case_study_link_url); ?>" placeholder="/case-studies" /></td>
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
                                <input type="text" name="home_garden_case_study_results[<?php echo $index; ?>][number]" value="<?php echo esc_attr($result['number']); ?>" placeholder="220%" />
                            </div>
                            <div class="item-field">
                                <label>Label:</label>
                                <input type="text" name="home_garden_case_study_results[<?php echo $index; ?>][label]" value="<?php echo esc_attr($result['label']); ?>" placeholder="Seasonal Revenue Increase" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-result">Add Result</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Seasonal Calendar</h3>
            <table class="form-table">
                <tr>
                    <th><label for="home_garden_calendar_title">Calendar Title</label></th>
                    <td><input type="text" id="home_garden_calendar_title" name="home_garden_calendar_title" value="<?php echo esc_attr($calendar_title); ?>" placeholder="Home & Garden Seasonal Marketing Calendar" /></td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="seasons-container">
                    <?php foreach ($seasons as $index => $season): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-season">Remove</button>
                            <div class="item-field">
                                <label>Season Title:</label>
                                <input type="text" name="home_garden_seasons[<?php echo $index; ?>][title]" value="<?php echo esc_attr($season['title']); ?>" placeholder="?? Spring (March - May)" />
                            </div>
                            <div class="item-field">
                                <label>Revenue Type:</label>
                                <input type="text" name="home_garden_seasons[<?php echo $index; ?>][revenue_type]" value="<?php echo esc_attr($season['revenue_type']); ?>" placeholder="Peak Revenue Season" />
                            </div>
                            <div class="item-field">
                                <label>Focus Title:</label>
                                <input type="text" name="home_garden_seasons[<?php echo $index; ?>][focus_title]" value="<?php echo esc_attr($season['focus_title']); ?>" placeholder="Key Marketing Focus:" />
                            </div>
                            <div class="item-field">
                                <label>Focus Points (one per line):</label>
                                <textarea name="home_garden_seasons[<?php echo $index; ?>][focus_points]" placeholder="Landscaping design consultations&#10;Garden preparation and planting"><?php echo esc_textarea(is_array($season['focus_points']) ? implode("\n", $season['focus_points']) : $season['focus_points']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Tactics (one per line):</label>
                                <textarea name="home_garden_seasons[<?php echo $index; ?>][tactics]" placeholder="Pre-season email campaigns&#10;Early bird promotions"><?php echo esc_textarea(is_array($season['tactics']) ? implode("\n", $season['tactics']) : $season['tactics']); ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-season">Add Season</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Visual Marketing Examples</h3>
            <table class="form-table">
                <tr>
                    <th><label for="home_garden_visual_title">Visual Marketing Title</label></th>
                    <td><input type="text" id="home_garden_visual_title" name="home_garden_visual_title" value="<?php echo esc_attr($visual_title); ?>" placeholder="The Power of Visual Marketing for Home & Garden" /></td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="visual-container">
                    <?php foreach ($visual_examples as $index => $example): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-visual">Remove</button>
                            <div class="item-field">
                                <label>Example Image:</label>
                                <div class="image-upload">
                                    <input type="hidden" name="home_garden_visual_examples[<?php echo $index; ?>][image]" value="<?php echo esc_attr($example['image']); ?>" class="visual-image-field" />
                                    <div class="visual-image-preview">
                                        <?php if (!empty($example['image'])): ?>
                                            <img src="<?php echo esc_url($example['image']); ?>" class="image-preview" />
                                        <?php endif; ?>
                                    </div>
                                    <button type="button" class="upload-button visual-upload">Choose Image</button>
                                    <button type="button" class="remove-image visual-remove">Remove Image</button>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="home_garden_visual_examples[<?php echo $index; ?>][title]" value="<?php echo esc_attr($example['title']); ?>" placeholder="Before/After Transformations" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="home_garden_visual_examples[<?php echo $index; ?>][description]" placeholder="Showcase dramatic transformations..."><?php echo esc_textarea($example['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Stats (one per line):</label>
                                <textarea name="home_garden_visual_examples[<?php echo $index; ?>][stats]" placeholder="? 340% higher engagement&#10;? 85% more inquiries"><?php echo esc_textarea(is_array($example['stats']) ? implode("\n", $example['stats']) : $example['stats']); ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-visual">Add Visual Example</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Testimonial Section (without image)</h3>
            <table class="form-table">
                <tr>
                    <th><label for="home_garden_testimonial_quote">Testimonial Quote</label></th>
                    <td><textarea id="home_garden_testimonial_quote" name="home_garden_testimonial_quote" placeholder="Working with Aimpro Digital transformed our seasonal business model..."><?php echo esc_textarea($testimonial_quote); ?></textarea></td>
                </tr>
                <tr>
                    <th><label for="home_garden_testimonial_name">Client Name</label></th>
                    <td><input type="text" id="home_garden_testimonial_name" name="home_garden_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" placeholder="Sarah Mitchell" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_testimonial_position">Client Position</label></th>
                    <td><input type="text" id="home_garden_testimonial_position" name="home_garden_testimonial_position" value="<?php echo esc_attr($testimonial_position); ?>" placeholder="Owner, Blooming Gardens" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_testimonial_company">Company Description</label></th>
                    <td><input type="text" id="home_garden_testimonial_company" name="home_garden_testimonial_company" value="<?php echo esc_attr($testimonial_company); ?>" placeholder="Garden centre & Landscaping Services" /></td>
                </tr>
            </table>
        </div>

        <div class="section-divider">
            <h3>CTA Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="home_garden_cta_title">CTA Title</label></th>
                    <td><input type="text" id="home_garden_cta_title" name="home_garden_cta_title" value="<?php echo esc_attr($cta_title); ?>" placeholder="Ready to Grow Your Home & Garden Business?" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_cta_subtitle">CTA Subtitle</label></th>
                    <td><textarea id="home_garden_cta_subtitle" name="home_garden_cta_subtitle" placeholder="Let's create a seasonal marketing strategy..."><?php echo esc_textarea($cta_subtitle); ?></textarea></td>
                </tr>
                <tr>
                    <th><label for="home_garden_cta_primary_text">Primary Button Text</label></th>
                    <td><input type="text" id="home_garden_cta_primary_text" name="home_garden_cta_primary_text" value="<?php echo esc_attr($cta_primary_text); ?>" placeholder="Get Seasonal Marketing Plan" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_cta_primary_url">Primary Button URL</label></th>
                    <td><input type="url" id="home_garden_cta_primary_url" name="home_garden_cta_primary_url" value="<?php echo esc_attr($cta_primary_url); ?>" placeholder="/contact" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_cta_secondary_text">Secondary Button Text</label></th>
                    <td><input type="text" id="home_garden_cta_secondary_text" name="home_garden_cta_secondary_text" value="<?php echo esc_attr($cta_secondary_text); ?>" placeholder="View More Success Stories" /></td>
                </tr>
                <tr>
                    <th><label for="home_garden_cta_secondary_url">Secondary Button URL</label></th>
                    <td><input type="url" id="home_garden_cta_secondary_url" name="home_garden_cta_secondary_url" value="<?php echo esc_attr($cta_secondary_url); ?>" placeholder="/case-studies" /></td>
                </tr>
            </table>
            
            <h4>CTA Benefits</h4>
            <div class="list-editor">
                <div id="cta-benefits-container">
                    <?php foreach ($cta_benefits as $index => $benefit): ?>
                        <div class="list-item">
                            <input type="text" name="home_garden_cta_benefits[<?php echo $index; ?>]" value="<?php echo esc_attr($benefit); ?>" placeholder="? Benefit..." />
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
                $('#home_garden_overview_image').val(image_url);
                $('#overview-image-preview').html('<img src="' + image_url + '" class="image-preview" />');
            });
        });

        $('#remove-overview-image').click(function() {
            $('#home_garden_overview_image').val('');
            $('#overview-image-preview').html('');
        });

        // Media uploader for visual examples
        $(document).on('click', '.visual-upload', function(e) {
            e.preventDefault();
            var button = $(this);
            var container = button.closest('.repeater-item');
            var image = wp.media({
                title: 'Upload Visual Example Image',
                multiple: false
            }).open()
            .on('select', function(e){
                var uploaded_image = image.state().get('selection').first();
                var image_url = uploaded_image.toJSON().url;
                container.find('.visual-image-field').val(image_url);
                container.find('.visual-image-preview').html('<img src="' + image_url + '" class="image-preview" />');
            });
        });

        $(document).on('click', '.visual-remove', function() {
            var container = $(this).closest('.repeater-item');
            container.find('.visual-image-field').val('');
            container.find('.visual-image-preview').html('');
        });

        // Add/remove functionality for all repeaters and lists
        var repeaterConfigs = [
            {addBtn: '.add-service', container: '#services-container', prefix: 'home_garden_services', type: 'service'},
            {addBtn: '.add-result', container: '#results-container', prefix: 'home_garden_case_study_results', type: 'result'},
            {addBtn: '.add-season', container: '#seasons-container', prefix: 'home_garden_seasons', type: 'season'},
            {addBtn: '.add-visual', container: '#visual-container', prefix: 'home_garden_visual_examples', type: 'visual'}
        ];

        var listConfigs = [
            {addBtn: '#add-challenge', container: '#challenges-container', prefix: 'home_garden_challenges'},
            {addBtn: '#add-cs-challenge', container: '#challenges-cs-container', prefix: 'home_garden_case_study_challenges'},
            {addBtn: '#add-solution', container: '#solutions-container', prefix: 'home_garden_case_study_solutions'},
            {addBtn: '#add-benefit', container: '#cta-benefits-container', prefix: 'home_garden_cta_benefits'}
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
                        '<div class="item-field"><label>Icon:</label><input type="text" name="' + config.prefix + '[' + index + '][icon]" placeholder="fas fa-calendar-alt" /></div>' +
                        '<div class="item-field"><label>Title:</label><input type="text" name="' + config.prefix + '[' + index + '][title]" placeholder="Service Title" /></div>' +
                        '<div class="item-field"><label>Description:</label><textarea name="' + config.prefix + '[' + index + '][description]" placeholder="Service description..."></textarea></div>' +
                        '<div class="item-field"><label>Features:</label><textarea name="' + config.prefix + '[' + index + '][features]" placeholder="Feature 1\nFeature 2"></textarea></div>' +
                        '</div>';
                } else if (config.type === 'result') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-result">Remove</button>' +
                        '<div class="item-field"><label>Number:</label><input type="text" name="' + config.prefix + '[' + index + '][number]" placeholder="220%" /></div>' +
                        '<div class="item-field"><label>Label:</label><input type="text" name="' + config.prefix + '[' + index + '][label]" placeholder="Revenue Increase" /></div>' +
                        '</div>';
                } else if (config.type === 'season') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-season">Remove</button>' +
                        '<div class="item-field"><label>Season Title:</label><input type="text" name="' + config.prefix + '[' + index + '][title]" placeholder="?? Spring (March - May)" /></div>' +
                        '<div class="item-field"><label>Revenue Type:</label><input type="text" name="' + config.prefix + '[' + index + '][revenue_type]" placeholder="Peak Revenue Season" /></div>' +
                        '<div class="item-field"><label>Focus Title:</label><input type="text" name="' + config.prefix + '[' + index + '][focus_title]" placeholder="Key Marketing Focus:" /></div>' +
                        '<div class="item-field"><label>Focus Points:</label><textarea name="' + config.prefix + '[' + index + '][focus_points]" placeholder="Focus point 1\nFocus point 2"></textarea></div>' +
                        '<div class="item-field"><label>Tactics:</label><textarea name="' + config.prefix + '[' + index + '][tactics]" placeholder="Tactic 1\nTactic 2"></textarea></div>' +
                        '</div>';
                } else if (config.type === 'visual') {
                    html = '<div class="repeater-item">' +
                        '<button type="button" class="remove-item remove-visual">Remove</button>' +
                        '<div class="item-field"><label>Example Image:</label><div class="image-upload"><input type="hidden" name="' + config.prefix + '[' + index + '][image]" class="visual-image-field" /><div class="visual-image-preview"></div><button type="button" class="upload-button visual-upload">Choose Image</button><button type="button" class="remove-image visual-remove">Remove Image</button></div></div>' +
                        '<div class="item-field"><label>Title:</label><input type="text" name="' + config.prefix + '[' + index + '][title]" placeholder="Example Title" /></div>' +
                        '<div class="item-field"><label>Description:</label><textarea name="' + config.prefix + '[' + index + '][description]" placeholder="Example description..."></textarea></div>' +
                        '<div class="item-field"><label>Stats:</label><textarea name="' + config.prefix + '[' + index + '][stats]" placeholder="? Stat 1\n? Stat 2"></textarea></div>' +
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

function save_home_garden_meta_box_data($post_id) {
    if (!isset($_POST['home_garden_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['home_garden_meta_box_nonce'], 'home_garden_meta_box')) {
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
        'home_garden_header_title' => '_home_garden_header_title',
        'home_garden_header_subtitle' => '_home_garden_header_subtitle',
        'home_garden_overview_title' => '_home_garden_overview_title',
        'home_garden_overview_content' => '_home_garden_overview_content',
        'home_garden_overview_image' => '_home_garden_overview_image',
        'home_garden_challenges_title' => '_home_garden_challenges_title',
        'home_garden_services_title' => '_home_garden_services_title',
        'home_garden_case_study_label' => '_home_garden_case_study_label',
        'home_garden_case_study_title' => '_home_garden_case_study_title',
        'home_garden_case_study_content' => '_home_garden_case_study_content',
        'home_garden_case_study_challenge_title' => '_home_garden_case_study_challenge_title',
        'home_garden_case_study_solution_title' => '_home_garden_case_study_solution_title',
        'home_garden_case_study_results_title' => '_home_garden_case_study_results_title',
        'home_garden_case_study_link_text' => '_home_garden_case_study_link_text',
        'home_garden_case_study_link_url' => '_home_garden_case_study_link_url',
        'home_garden_calendar_title' => '_home_garden_calendar_title',
        'home_garden_visual_title' => '_home_garden_visual_title',
        'home_garden_testimonial_quote' => '_home_garden_testimonial_quote',
        'home_garden_testimonial_name' => '_home_garden_testimonial_name',
        'home_garden_testimonial_position' => '_home_garden_testimonial_position',
        'home_garden_testimonial_company' => '_home_garden_testimonial_company',
        'home_garden_cta_title' => '_home_garden_cta_title',
        'home_garden_cta_subtitle' => '_home_garden_cta_subtitle',
        'home_garden_cta_primary_text' => '_home_garden_cta_primary_text',
        'home_garden_cta_primary_url' => '_home_garden_cta_primary_url',
        'home_garden_cta_secondary_text' => '_home_garden_cta_secondary_text',
        'home_garden_cta_secondary_url' => '_home_garden_cta_secondary_url'
    );

    foreach ($fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
        }
    }

    // Save array fields
    $array_fields = array(
        'home_garden_challenges' => '_home_garden_challenges',
        'home_garden_case_study_challenges' => '_home_garden_case_study_challenges',
        'home_garden_case_study_solutions' => '_home_garden_case_study_solutions',
        'home_garden_cta_benefits' => '_home_garden_cta_benefits'
    );

    foreach ($array_fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, array_map('sanitize_text_field', $_POST[$field]));
        }
    }

    // Save complex repeater fields
    if (isset($_POST['home_garden_services'])) {
        $services = array();
        foreach ($_POST['home_garden_services'] as $service) {
            $services[] = array(
                'icon' => sanitize_text_field($service['icon']),
                'title' => sanitize_text_field($service['title']),
                'description' => sanitize_textarea_field($service['description']),
                'features' => array_filter(array_map('trim', explode("\n", sanitize_textarea_field($service['features']))))
            );
        }
        update_post_meta($post_id, '_home_garden_services', $services);
    }

    if (isset($_POST['home_garden_case_study_results'])) {
        $results = array();
        foreach ($_POST['home_garden_case_study_results'] as $result) {
            $results[] = array(
                'number' => sanitize_text_field($result['number']),
                'label' => sanitize_text_field($result['label'])
            );
        }
        update_post_meta($post_id, '_home_garden_case_study_results', $results);
    }

    if (isset($_POST['home_garden_seasons'])) {
        $seasons = array();
        foreach ($_POST['home_garden_seasons'] as $season) {
            $seasons[] = array(
                'title' => sanitize_text_field($season['title']),
                'revenue_type' => sanitize_text_field($season['revenue_type']),
                'focus_title' => sanitize_text_field($season['focus_title']),
                'focus_points' => array_filter(array_map('trim', explode("\n", sanitize_textarea_field($season['focus_points'])))),
                'tactics' => array_filter(array_map('trim', explode("\n", sanitize_textarea_field($season['tactics']))))
            );
        }
        update_post_meta($post_id, '_home_garden_seasons', $seasons);
    }

    if (isset($_POST['home_garden_visual_examples'])) {
        $examples = array();
        foreach ($_POST['home_garden_visual_examples'] as $example) {
            $examples[] = array(
                'image' => esc_url_raw($example['image']),
                'title' => sanitize_text_field($example['title']),
                'description' => sanitize_textarea_field($example['description']),
                'stats' => array_filter(array_map('trim', explode("\n", sanitize_textarea_field($example['stats']))))
            );
        }
        update_post_meta($post_id, '_home_garden_visual_examples', $examples);
    }
}
add_action('save_post', 'save_home_garden_meta_box_data');
