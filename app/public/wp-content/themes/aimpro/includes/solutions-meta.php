<?php
// Solutions Page Meta Fields

function add_solutions_meta_boxes() {
    global $post;
    
    // Only add to pages
    if (isset($post) && get_post_type($post) === 'page') {
        add_meta_box(
            'solutions_meta_box',
            'Solutions Page Content',
            'solutions_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_solutions_meta_boxes', 11);

function solutions_meta_box_callback($post) {
    // Only show on solutions page template
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template !== 'page-solutions.php' && $page_slug !== 'solutions') {
        echo '<p>This meta box is designed for the "Solutions Page" template or pages with slug "solutions".</p>';
        echo '<p>Current template: ' . ($page_template ?: 'Default') . '</p>';
        echo '<p>Current slug: ' . ($page_slug ?: 'Not set yet') . '</p>';
        return;
    }

    wp_nonce_field('solutions_meta_box', 'solutions_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_solutions_header_title', true) ?: 'Solutions';
    $header_subtitle = get_post_meta($post->ID, '_solutions_header_subtitle', true) ?: 'Proven digital marketing solutions that drive real business results';

    // Solutions Introduction
    $intro_title = get_post_meta($post->ID, '_solutions_intro_title', true) ?: 'Transform Your Business with Strategic Digital Solutions';
    $intro_content = get_post_meta($post->ID, '_solutions_intro_content', true) ?: 'Every business faces unique challenges in today\'s digital landscape. Our comprehensive solutions are designed to address your most pressing needs, from generating quality leads to maximizing ROI from your marketing investments. Discover how our proven methodologies can accelerate your growth.';
    
    // Solutions Stats
    $solution_stats = get_post_meta($post->ID, '_solutions_stats', true);
    if (empty($solution_stats)) {
        $solution_stats = array(
            array(
                'number' => '6',
                'label' => 'Core Solutions'
            ),
            array(
                'number' => '300%',
                'label' => 'Average ROI Increase'
            ),
            array(
                'number' => '500+',
                'label' => 'Successful Projects'
            )
        );
    }

    // Solutions Grid
    $solutions_grid_title = get_post_meta($post->ID, '_solutions_grid_title', true) ?: 'Our Digital Marketing Solutions';
    $solutions_cards = get_post_meta($post->ID, '_solutions_cards', true);
    if (empty($solutions_cards)) {
        $solutions_cards = array(
            array(
                'title' => 'Lead Generation (B2B/B2C)',
                'description' => 'Generate high-quality leads that convert into customers through targeted campaigns and proven funnels.',
                'features' => array(
                    'Targeted PPC campaigns',
                    'Lead magnet creation',
                    'Landing page optimization',
                    'CRM integration & nurturing'
                ),
                'results' => 'Average: 250% lead increase',
                'cta_text' => 'Explore Lead Generation',
                'cta_url' => '/lead-generation'
            ),
            array(
                'title' => 'Automate Marketing',
                'description' => 'Streamline your marketing processes with intelligent automation that nurtures leads and drives conversions 24/7.',
                'features' => array(
                    'Email marketing automation',
                    'Lead scoring & segmentation',
                    'Behavioral trigger campaigns',
                    'Multi-channel workflows'
                ),
                'results' => 'Average: 40% time savings',
                'cta_text' => 'Discover Automation',
                'cta_url' => '/automate-marketing'
            ),
            array(
                'title' => 'Improve ROI from Ads',
                'description' => 'Maximize your advertising spend with data-driven optimization strategies that deliver measurable results.',
                'features' => array(
                    'PPC campaign optimization',
                    'Conversion tracking setup',
                    'Audience refinement',
                    'Bid strategy optimization'
                ),
                'results' => 'Average: 180% ROI improvement',
                'cta_text' => 'Boost Ad Performance',
                'cta_url' => '/improve-roi-ads'
            ),
            array(
                'title' => 'Rank Higher Locally',
                'description' => 'Dominate local search results and attract customers in your area with comprehensive local SEO strategies.',
                'features' => array(
                    'Google My Business optimization',
                    'Local citation building',
                    'Review management',
                    'Local keyword targeting'
                ),
                'results' => 'Average: 300% local visibility boost',
                'cta_text' => 'Dominate Local Search',
                'cta_url' => '/rank-higher-locally'
            ),
            array(
                'title' => 'Build a High-Converting Website',
                'description' => 'Create a website that turns visitors into customers with conversion-focused design and optimization.',
                'features' => array(
                    'Conversion rate optimization',
                    'User experience design',
                    'A/B testing implementation',
                    'Mobile optimization'
                ),
                'results' => 'Average: 150% conversion increase',
                'cta_text' => 'Build Better Websites',
                'cta_url' => '/high-converting-website'
            ),
            array(
                'title' => 'Streamline Your Sales Funnel',
                'description' => 'Optimize every stage of your customer journey to reduce friction and increase conversion rates.',
                'features' => array(
                    'Funnel analysis & optimization',
                    'Customer journey mapping',
                    'Conversion bottleneck removal',
                    'Multi-step campaign design'
                ),
                'results' => 'Average: 200% funnel efficiency gain',
                'cta_text' => 'Optimize Your Funnel',
                'cta_url' => '/streamline-sales-funnel'
            )
        );
    }

    // Solution Process Section
    $process_title = get_post_meta($post->ID, '_solutions_process_title', true) ?: 'Our Solution Implementation Process';
    $process_steps = get_post_meta($post->ID, '_solutions_process_steps', true);
    if (empty($process_steps)) {
        $process_steps = array(
            array(
                'number' => '1',
                'title' => 'Discovery & Analysis',
                'description' => 'We analyze your current situation, challenges, and goals to identify the most impactful solutions.'
            ),
            array(
                'number' => '2',
                'title' => 'Custom Strategy Development',
                'description' => 'Create a tailored strategy that combines the right solutions for your specific business needs.'
            ),
            array(
                'number' => '3',
                'title' => 'Implementation & Integration',
                'description' => 'Deploy solutions with seamless integration into your existing systems and workflows.'
            ),
            array(
                'number' => '4',
                'title' => 'Optimization & Scaling',
                'description' => 'Continuously monitor, optimize, and scale solutions based on performance data and results.'
            )
        );
    }

    // Success Stories Section
    $success_stories_title = get_post_meta($post->ID, '_solutions_success_stories_title', true) ?: 'Solution Success Stories';
    $success_stories = get_post_meta($post->ID, '_solutions_success_stories', true);
    if (empty($success_stories)) {
        $success_stories = array(
            array(
                'metric_number' => '450%',
                'metric_label' => 'Lead Increase',
                'title' => 'Manufacturing Company',
                'description' => '"Our lead generation solution transformed their B2B marketing, generating 450% more qualified leads within 6 months."',
                'solution_used' => 'Lead Generation + Marketing Automation'
            ),
            array(
                'metric_number' => '320%',
                'metric_label' => 'ROI Improvement',
                'title' => 'E-commerce Retailer',
                'description' => '"Ad optimization and funnel streamlining resulted in 320% ROI improvement and 40% lower customer acquisition costs."',
                'solution_used' => 'ROI Optimization + Sales Funnel'
            ),
            array(
                'metric_number' => '500%',
                'metric_label' => 'Local Visibility',
                'title' => 'Professional Services',
                'description' => '"Local SEO implementation increased their Google My Business visibility by 500% and doubled client inquiries."',
                'solution_used' => 'Local SEO + Website Optimization'
            )
        );
    }

    // CTA Section
    $cta_title = get_post_meta($post->ID, '_solutions_cta_title', true) ?: 'Ready to Transform Your Business?';
    $cta_subtitle = get_post_meta($post->ID, '_solutions_cta_subtitle', true) ?: 'Let\'s identify the perfect solution combination for your unique challenges and growth goals.';
    $cta_primary_text = get_post_meta($post->ID, '_solutions_cta_primary_text', true) ?: 'Get Free Strategy Session';
    $cta_primary_url = get_post_meta($post->ID, '_solutions_cta_primary_url', true) ?: '/contact';
    $cta_secondary_text = get_post_meta($post->ID, '_solutions_cta_secondary_text', true) ?: 'View All Success Stories';
    $cta_secondary_url = get_post_meta($post->ID, '_solutions_cta_secondary_url', true) ?: '/case-studies';
    $cta_benefits = get_post_meta($post->ID, '_solutions_cta_benefits', true);
    if (empty($cta_benefits)) {
        $cta_benefits = array(
            '✓ Custom solution roadmap',
            '✓ ROI projections included',
            '✓ No obligation consultation'
        );
    }

    ?>
    <style>
        .solutions-meta {
            max-width: 100%;
        }
        .solutions-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .solutions-meta .form-table td {
            padding: 15px 10px;
        }
        .solutions-meta input[type="text"],
        .solutions-meta textarea,
        .solutions-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .solutions-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .solutions-meta .repeater-field {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }
        .solutions-meta .repeater-field input {
            margin-bottom: 5px;
        }
        .solutions-meta h3 {
            margin-top: 30px;
            margin-bottom: 15px;
            padding: 10px;
            background: #0073aa;
            color: white;
            border-radius: 3px;
        }
    </style>

    <div class="solutions-meta">
        
        <!-- Header Section -->
        <h3>Header Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="solutions_header_title">Page Title</label></th>
                <td>
                    <input type="text" 
                           id="solutions_header_title" 
                           name="solutions_header_title" 
                           value="<?php echo esc_attr($header_title); ?>"
                           placeholder="Solutions" />
                </td>
            </tr>
            <tr>
                <th><label for="solutions_header_subtitle">Page Subtitle</label></th>
                <td>
                    <textarea id="solutions_header_subtitle" 
                              name="solutions_header_subtitle"
                              placeholder="Proven digital marketing solutions that drive real business results"><?php echo esc_textarea($header_subtitle); ?></textarea>
                </td>
            </tr>
        </table>

        <!-- Introduction Section -->
        <h3>Introduction Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="solutions_intro_title">Introduction Title</label></th>
                <td>
                    <input type="text" 
                           id="solutions_intro_title" 
                           name="solutions_intro_title" 
                           value="<?php echo esc_attr($intro_title); ?>"
                           placeholder="Transform Your Business with Strategic Digital Solutions" />
                </td>
            </tr>
            <tr>
                <th><label for="solutions_intro_content">Introduction Content</label></th>
                <td>
                    <textarea id="solutions_intro_content" 
                              name="solutions_intro_content"
                              placeholder="Every business faces unique challenges..."><?php echo esc_textarea($intro_content); ?></textarea>
                </td>
            </tr>
        </table>

        <!-- Stats Section -->
        <h3>Solution Stats</h3>
        <div id="solution-stats-repeater">
            <?php if (!empty($solution_stats)): ?>
                <?php foreach ($solution_stats as $index => $stat): ?>
                    <div class="repeater-field">
                        <h4>Stat <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="solutions_stats[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($stat['number']); ?>"
                               placeholder="Number (e.g., 6)" />
                        <input type="text" 
                               name="solutions_stats[<?php echo $index; ?>][label]" 
                               value="<?php echo esc_attr($stat['label']); ?>"
                               placeholder="Label (e.g., Core Solutions)" />
                        <button type="button" class="button remove-repeater-item">Remove Stat</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-stat-item">Add Stat</button>

        <!-- Solutions Grid Section -->
        <h3>Solutions Grid</h3>
        <table class="form-table">
            <tr>
                <th><label for="solutions_grid_title">Grid Title</label></th>
                <td>
                    <input type="text" 
                           id="solutions_grid_title" 
                           name="solutions_grid_title" 
                           value="<?php echo esc_attr($solutions_grid_title); ?>"
                           placeholder="Our Digital Marketing Solutions" />
                </td>
            </tr>
        </table>

        <div id="solutions-cards-repeater">
            <?php if (!empty($solutions_cards)): ?>
                <?php foreach ($solutions_cards as $index => $card): ?>
                    <div class="repeater-field">
                        <h4>Solution Card <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="solutions_cards[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($card['title']); ?>"
                               placeholder="Solution Title" />
                        <textarea name="solutions_cards[<?php echo $index; ?>][description]" 
                                  placeholder="Solution description"><?php echo esc_textarea($card['description']); ?></textarea>
                        
                        <h5>Features</h5>
                        <div class="features-container">
                            <?php foreach ($card['features'] as $feat_index => $feature): ?>
                                <div class="feature-item">
                                    <input type="text" 
                                           name="solutions_cards[<?php echo $index; ?>][features][]" 
                                           value="<?php echo esc_attr($feature); ?>"
                                           placeholder="Feature" />
                                    <button type="button" class="button remove-feature">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <button type="button" class="button add-feature" data-card-index="<?php echo $index; ?>">Add Feature</button>
                        
                        <input type="text" 
                               name="solutions_cards[<?php echo $index; ?>][results]" 
                               value="<?php echo esc_attr($card['results']); ?>"
                               placeholder="Results (e.g., Average: 250% lead increase)" />
                        <input type="text" 
                               name="solutions_cards[<?php echo $index; ?>][cta_text]" 
                               value="<?php echo esc_attr($card['cta_text']); ?>"
                               placeholder="CTA Text (e.g., Explore Lead Generation)" />
                        <input type="text" 
                               name="solutions_cards[<?php echo $index; ?>][cta_url]" 
                               value="<?php echo esc_attr($card['cta_url']); ?>"
                               placeholder="CTA URL (e.g., /lead-generation)" />
                        <button type="button" class="button remove-repeater-item">Remove Solution Card</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-solution-card">Add Solution Card</button>

        <!-- Process Section -->
        <h3>Solution Process</h3>
        <table class="form-table">
            <tr>
                <th><label for="solutions_process_title">Process Title</label></th>
                <td>
                    <input type="text" 
                           id="solutions_process_title" 
                           name="solutions_process_title" 
                           value="<?php echo esc_attr($process_title); ?>"
                           placeholder="Our Solution Implementation Process" />
                </td>
            </tr>
        </table>

        <div id="process-steps-repeater">
            <?php if (!empty($process_steps)): ?>
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="repeater-field">
                        <h4>Process Step <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="solutions_process_steps[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($step['number']); ?>"
                               placeholder="Step Number (e.g., 1)" />
                        <input type="text" 
                               name="solutions_process_steps[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($step['title']); ?>"
                               placeholder="Step Title (e.g., Discovery & Analysis)" />
                        <textarea name="solutions_process_steps[<?php echo $index; ?>][description]" 
                                  placeholder="Step description"><?php echo esc_textarea($step['description']); ?></textarea>
                        <button type="button" class="button remove-repeater-item">Remove Process Step</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-process-step">Add Process Step</button>

        <!-- Success Stories Section -->
        <h3>Success Stories</h3>
        <table class="form-table">
            <tr>
                <th><label for="solutions_success_stories_title">Success Stories Title</label></th>
                <td>
                    <input type="text" 
                           id="solutions_success_stories_title" 
                           name="solutions_success_stories_title" 
                           value="<?php echo esc_attr($success_stories_title); ?>"
                           placeholder="Solution Success Stories" />
                </td>
            </tr>
        </table>

        <div id="success-stories-repeater">
            <?php if (!empty($success_stories)): ?>
                <?php foreach ($success_stories as $index => $story): ?>
                    <div class="repeater-field">
                        <h4>Success Story <?php echo $index + 1; ?></h4>
                        <input type="text" 
                               name="solutions_success_stories[<?php echo $index; ?>][metric_number]" 
                               value="<?php echo esc_attr($story['metric_number']); ?>"
                               placeholder="Metric Number (e.g., 450%)" />
                        <input type="text" 
                               name="solutions_success_stories[<?php echo $index; ?>][metric_label]" 
                               value="<?php echo esc_attr($story['metric_label']); ?>"
                               placeholder="Metric Label (e.g., Lead Increase)" />
                        <input type="text" 
                               name="solutions_success_stories[<?php echo $index; ?>][title]" 
                               value="<?php echo esc_attr($story['title']); ?>"
                               placeholder="Story Title (e.g., Manufacturing Company)" />
                        <textarea name="solutions_success_stories[<?php echo $index; ?>][description]" 
                                  placeholder="Success story description"><?php echo esc_textarea($story['description']); ?></textarea>
                        <input type="text" 
                               name="solutions_success_stories[<?php echo $index; ?>][solution_used]" 
                               value="<?php echo esc_attr($story['solution_used']); ?>"
                               placeholder="Solutions Used (e.g., Lead Generation + Marketing Automation)" />
                        <button type="button" class="button remove-repeater-item">Remove Success Story</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <button type="button" class="button add-success-story">Add Success Story</button>

        <!-- CTA Section -->
        <h3>CTA Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="solutions_cta_title">CTA Title</label></th>
                <td>
                    <input type="text" 
                           id="solutions_cta_title" 
                           name="solutions_cta_title" 
                           value="<?php echo esc_attr($cta_title); ?>"
                           placeholder="Ready to Transform Your Business?" />
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <textarea id="solutions_cta_subtitle" 
                              name="solutions_cta_subtitle"
                              placeholder="Let's identify the perfect solution combination for your unique challenges and growth goals."><?php echo esc_textarea($cta_subtitle); ?></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="solutions_cta_primary_text" 
                           name="solutions_cta_primary_text" 
                           value="<?php echo esc_attr($cta_primary_text); ?>"
                           placeholder="Get Free Strategy Session" />
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_primary_url">Primary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="solutions_cta_primary_url" 
                           name="solutions_cta_primary_url" 
                           value="<?php echo esc_url($cta_primary_url); ?>"
                           placeholder="/contact" />
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_secondary_text">Secondary Button Text</label></th>
                <td>
                    <input type="text" 
                           id="solutions_cta_secondary_text" 
                           name="solutions_cta_secondary_text" 
                           value="<?php echo esc_attr($cta_secondary_text); ?>"
                           placeholder="View All Success Stories" />
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_secondary_url">Secondary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="solutions_cta_secondary_url" 
                           name="solutions_cta_secondary_url" 
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
                                           name="solutions_cta_benefits[]" 
                                           value="<?php echo esc_attr($benefit); ?>"
                                           placeholder="✓ Benefit item" />
                                    <button type="button" class="button remove-repeater-item">Remove</button>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <button type="button" class="button add-benefit">Add Benefit</button>
                </td>
            </tr>
        </table>

    </div>

    <script>
    jQuery(document).ready(function($) {
        // Add stat item
        $('.add-stat-item').click(function(e) {
            e.preventDefault();
            var index = $('#solution-stats-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Stat ' + (index + 1) + '</h4>' +
                          '<input type="text" name="solutions_stats[' + index + '][number]" placeholder="Number (e.g., 6)" />' +
                          '<input type="text" name="solutions_stats[' + index + '][label]" placeholder="Label (e.g., Core Solutions)" />' +
                          '<button type="button" class="button remove-repeater-item">Remove Stat</button>' +
                          '</div>';
            $('#solution-stats-repeater').append(newField);
        });

        // Add solution card
        $('.add-solution-card').click(function(e) {
            e.preventDefault();
            var index = $('#solutions-cards-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Solution Card ' + (index + 1) + '</h4>' +
                          '<input type="text" name="solutions_cards[' + index + '][title]" placeholder="Solution Title" />' +
                          '<textarea name="solutions_cards[' + index + '][description]" placeholder="Solution description"></textarea>' +
                          '<h5>Features</h5>' +
                          '<div class="features-container">' +
                          '<div class="feature-item">' +
                          '<input type="text" name="solutions_cards[' + index + '][features][]" placeholder="Feature" />' +
                          '<button type="button" class="button remove-feature">Remove</button>' +
                          '</div>' +
                          '</div>' +
                          '<button type="button" class="button add-feature" data-card-index="' + index + '">Add Feature</button>' +
                          '<input type="text" name="solutions_cards[' + index + '][results]" placeholder="Results (e.g., Average: 250% lead increase)" />' +
                          '<input type="text" name="solutions_cards[' + index + '][cta_text]" placeholder="CTA Text (e.g., Explore Lead Generation)" />' +
                          '<input type="text" name="solutions_cards[' + index + '][cta_url]" placeholder="CTA URL (e.g., /lead-generation)" />' +
                          '<button type="button" class="button remove-repeater-item">Remove Solution Card</button>' +
                          '</div>';
            $('#solutions-cards-repeater').append(newField);
        });

        // Add feature to solution card
        $(document).on('click', '.add-feature', function(e) {
            e.preventDefault();
            var cardIndex = $(this).data('card-index');
            var featureContainer = $(this).prev('.features-container');
            var newFeature = '<div class="feature-item">' +
                             '<input type="text" name="solutions_cards[' + cardIndex + '][features][]" placeholder="Feature" />' +
                             '<button type="button" class="button remove-feature">Remove</button>' +
                             '</div>';
            featureContainer.append(newFeature);
        });

        // Remove feature
        $(document).on('click', '.remove-feature', function(e) {
            e.preventDefault();
            $(this).closest('.feature-item').remove();
        });

        // Add process step
        $('.add-process-step').click(function(e) {
            e.preventDefault();
            var index = $('#process-steps-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Process Step ' + (index + 1) + '</h4>' +
                          '<input type="text" name="solutions_process_steps[' + index + '][number]" placeholder="Step Number (e.g., 1)" />' +
                          '<input type="text" name="solutions_process_steps[' + index + '][title]" placeholder="Step Title (e.g., Discovery & Analysis)" />' +
                          '<textarea name="solutions_process_steps[' + index + '][description]" placeholder="Step description"></textarea>' +
                          '<button type="button" class="button remove-repeater-item">Remove Process Step</button>' +
                          '</div>';
            $('#process-steps-repeater').append(newField);
        });

        // Add success story
        $('.add-success-story').click(function(e) {
            e.preventDefault();
            var index = $('#success-stories-repeater .repeater-field').length;
            var newField = '<div class="repeater-field">' +
                          '<h4>Success Story ' + (index + 1) + '</h4>' +
                          '<input type="text" name="solutions_success_stories[' + index + '][metric_number]" placeholder="Metric Number (e.g., 450%)" />' +
                          '<input type="text" name="solutions_success_stories[' + index + '][metric_label]" placeholder="Metric Label (e.g., Lead Increase)" />' +
                          '<input type="text" name="solutions_success_stories[' + index + '][title]" placeholder="Story Title (e.g., Manufacturing Company)" />' +
                          '<textarea name="solutions_success_stories[' + index + '][description]" placeholder="Success story description"></textarea>' +
                          '<input type="text" name="solutions_success_stories[' + index + '][solution_used]" placeholder="Solutions Used (e.g., Lead Generation + Marketing Automation)" />' +
                          '<button type="button" class="button remove-repeater-item">Remove Success Story</button>' +
                          '</div>';
            $('#success-stories-repeater').append(newField);
        });

        // Add benefit
        $('.add-benefit').click(function(e) {
            e.preventDefault();
            var newField = '<div class="repeater-field">' +
                          '<input type="text" name="solutions_cta_benefits[]" placeholder="✓ Benefit item" />' +
                          '<button type="button" class="button remove-repeater-item">Remove</button>' +
                          '</div>';
            $('#cta-benefits-repeater').append(newField);
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

function sanitize_solutions_meta_value($field, $value) {
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
        if (strpos($field, 'content') !== false || strpos($field, 'description') !== false || strpos($field, 'subtitle') !== false) {
            return sanitize_textarea_field($value);
        } elseif (strpos($field, 'url') !== false) {
            return esc_url_raw($value);
        } else {
            return sanitize_text_field($value);
        }
    }
}

function save_solutions_meta_box_data($post_id) {
    if (!isset($_POST['solutions_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['solutions_meta_box_nonce'], 'solutions_meta_box')) {
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
        'solutions_header_title',
        'solutions_header_subtitle',
        'solutions_intro_title',
        'solutions_intro_content',
        'solutions_stats',
        'solutions_grid_title',
        'solutions_cards',
        'solutions_process_title',
        'solutions_process_steps',
        'solutions_success_stories_title',
        'solutions_success_stories',
        'solutions_cta_title',
        'solutions_cta_subtitle',
        'solutions_cta_primary_text',
        'solutions_cta_primary_url',
        'solutions_cta_secondary_text',
        'solutions_cta_secondary_url',
        'solutions_cta_benefits'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_solutions_meta_value($field, $_POST[$field]));
        }
    }
}
add_action('save_post', 'save_solutions_meta_box_data');
