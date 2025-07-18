<?php
// Solutions Page Meta Fields

function add_solutions_meta_boxes() {
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    // Only add to pages using the Solutions template or with 'solutions' slug
    if ($page_template === 'page-solutions.php' || $page_slug === 'solutions') {
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
    $intro_content = get_post_meta($post->ID, '_solutions_intro_content', true) ?: 'Every business faces unique challenges in today\'s digital landscape. Our comprehensive solutions are designed to address your most pressing needs, from generating quality leads to maximising ROI from your marketing investments. Discover how our proven methodologies can accelerate your growth.';
    
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
                    'Landing page optimisation',
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
                    'behavioural trigger campaigns',
                    'Multi-channel workflows'
                ),
                'results' => 'Average: 40% time savings',
                'cta_text' => 'Discover Automation',
                'cta_url' => '/automate-marketing'
            ),
            array(
                'title' => 'Improve ROI from Ads',
                'description' => 'Maximize your advertising spend with data-driven optimisation strategies that deliver measurable results.',
                'features' => array(
                    'PPC campaign optimisation',
                    'Conversion tracking setup',
                    'Audience refinement',
                    'Bid strategy optimisation'
                ),
                'results' => 'Average: 180% ROI improvement',
                'cta_text' => 'Boost Ad Performance',
                'cta_url' => '/improve-roi-ads'
            ),
            array(
                'title' => 'Rank Higher Locally',
                'description' => 'Dominate local search results and attract customers in your area with comprehensive local SEO strategies.',
                'features' => array(
                    'Google My Business optimisation',
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
                'description' => 'Create a website that turns visitors into customers with conversion-focused design and optimisation.',
                'features' => array(
                    'Conversion rate optimisation',
                    'User experience design',
                    'A/B testing implementation',
                    'Mobile optimisation'
                ),
                'results' => 'Average: 150% conversion increase',
                'cta_text' => 'Build Better Websites',
                'cta_url' => '/high-converting-website'
            ),
            array(
                'title' => 'Streamline Your Sales Funnel',
                'description' => 'optimise every stage of your customer journey to reduce friction and increase conversion rates.',
                'features' => array(
                    'Funnel analysis & optimisation',
                    'Customer journey mapping',
                    'Conversion bottleneck removal',
                    'Multi-step campaign design'
                ),
                'results' => 'Average: 200% funnel efficiency gain',
                'cta_text' => 'optimise Your Funnel',
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
                'description' => 'We analyse your current situation, challenges, and goals to identify the most impactful solutions.'
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
                'title' => 'optimisation & Scaling',
                'description' => 'Continuously monitor, optimise, and scale solutions based on performance data and results.'
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
                'description' => '"Ad optimisation and funnel streamlining resulted in 320% ROI improvement and 40% lower customer acquisition costs."',
                'solution_used' => 'ROI optimisation + Sales Funnel'
            ),
            array(
                'metric_number' => '500%',
                'metric_label' => 'Local Visibility',
                'title' => 'Professional Services',
                'description' => '"Local SEO implementation increased their Google My Business visibility by 500% and doubled client inquiries."',
                'solution_used' => 'Local SEO + Website optimisation'
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
            '? Custom solution roadmap',
            '? ROI projections included',
            '? No obligation consultation'
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
                    <?php 
                    wp_editor($header_title, 'solutions_header_title', array(
                        'textarea_name' => 'solutions_header_title',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <th><label for="solutions_header_subtitle">Page Subtitle</label></th>
                <td>
                    <?php 
                    wp_editor($header_subtitle, 'solutions_header_subtitle', array(
                        'textarea_name' => 'solutions_header_subtitle',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
        </table>

        <!-- Introduction Section -->
        <h3>Introduction Section</h3>
        <table class="form-table">
            <tr>
                <th><label for="solutions_intro_title">Introduction Title</label></th>
                <td>
                    <?php 
                    wp_editor($intro_title, 'solutions_intro_title', array(
                        'textarea_name' => 'solutions_intro_title',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <th><label for="solutions_intro_content">Introduction Content</label></th>
                <td>
                    <?php 
                    wp_editor($intro_content, 'solutions_intro_content', array(
                        'textarea_name' => 'solutions_intro_content',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 5,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
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
                        <p><strong>Number/Value:</strong></p>
                        <?php 
                        wp_editor($stat['number'], 'solutions_stats_' . $index . '_number', array(
                            'textarea_name' => 'solutions_stats[' . $index . '][number]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        <p><strong>Label:</strong></p>
                        <?php 
                        wp_editor($stat['label'], 'solutions_stats_' . $index . '_label', array(
                            'textarea_name' => 'solutions_stats[' . $index . '][label]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
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
                    <?php 
                    wp_editor($solutions_grid_title, 'solutions_grid_title', array(
                        'textarea_name' => 'solutions_grid_title',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
        </table>

        <div id="solutions-cards-repeater">
            <?php if (!empty($solutions_cards)): ?>
                <?php foreach ($solutions_cards as $index => $card): ?>
                    <div class="repeater-field">
                        <h4>Solution Card <?php echo $index + 1; ?></h4>
                        <p><strong>Title:</strong></p>
                        <?php 
                        wp_editor($card['title'], 'solutions_cards_' . $index . '_title', array(
                            'textarea_name' => 'solutions_cards[' . $index . '][title]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        <p><strong>Description:</strong></p>
                        <?php 
                        wp_editor($card['description'], 'solutions_cards_' . $index . '_description', array(
                            'textarea_name' => 'solutions_cards[' . $index . '][description]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 4,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        
                        <p><strong>Features (one per line):</strong></p>
                        <textarea name="solutions_cards[<?php echo $index; ?>][features]" rows="4" style="width: 100%;"><?php echo esc_textarea(is_array($card['features']) ? implode("\n", $card['features']) : $card['features']); ?></textarea>
                        
                        <p><strong>Results:</strong></p>
                        <?php 
                        wp_editor($card['results'], 'solutions_cards_' . $index . '_results', array(
                            'textarea_name' => 'solutions_cards[' . $index . '][results]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        
                        <p><strong>CTA Text:</strong></p>
                        <?php 
                        wp_editor($card['cta_text'], 'solutions_cards_' . $index . '_cta_text', array(
                            'textarea_name' => 'solutions_cards[' . $index . '][cta_text]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        
                        <p><strong>CTA URL:</strong></p>
                        <input type="url" name="solutions_cards[<?php echo $index; ?>][cta_url]" value="<?php echo esc_url($card['cta_url']); ?>" style="width: 100%;" placeholder="/solution-page" />
                        
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
                    <?php 
                    wp_editor($process_title, 'solutions_process_title', array(
                        'textarea_name' => 'solutions_process_title',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
        </table>

        <div id="process-steps-repeater">
            <?php if (!empty($process_steps)): ?>
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="repeater-field">
                        <h4>Process Step <?php echo $index + 1; ?></h4>
                        <p><strong>Step Number:</strong></p>
                        <input type="text" 
                               name="solutions_process_steps[<?php echo $index; ?>][number]" 
                               value="<?php echo esc_attr($step['number']); ?>"
                               placeholder="Step Number (e.g., 1)" style="width: 100%;" />
                        <p><strong>Step Title:</strong></p>
                        <?php 
                        wp_editor($step['title'], 'solutions_process_steps_' . $index . '_title', array(
                            'textarea_name' => 'solutions_process_steps[' . $index . '][title]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        <p><strong>Step Description:</strong></p>
                        <?php 
                        wp_editor($step['description'], 'solutions_process_steps_' . $index . '_description', array(
                            'textarea_name' => 'solutions_process_steps[' . $index . '][description]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 4,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
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
                    <?php 
                    wp_editor($success_stories_title, 'solutions_success_stories_title', array(
                        'textarea_name' => 'solutions_success_stories_title',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
        </table>

        <div id="success-stories-repeater">
            <?php if (!empty($success_stories)): ?>
                <?php foreach ($success_stories as $index => $story): ?>
                    <div class="repeater-field">
                        <h4>Success Story <?php echo $index + 1; ?></h4>
                        <p><strong>Metric Number:</strong></p>
                        <?php 
                        wp_editor($story['metric_number'], 'solutions_success_stories_' . $index . '_metric_number', array(
                            'textarea_name' => 'solutions_success_stories[' . $index . '][metric_number]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        <p><strong>Metric Label:</strong></p>
                        <?php 
                        wp_editor($story['metric_label'], 'solutions_success_stories_' . $index . '_metric_label', array(
                            'textarea_name' => 'solutions_success_stories[' . $index . '][metric_label]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        <p><strong>Story Title:</strong></p>
                        <?php 
                        wp_editor($story['title'], 'solutions_success_stories_' . $index . '_title', array(
                            'textarea_name' => 'solutions_success_stories[' . $index . '][title]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        <p><strong>Description:</strong></p>
                        <?php 
                        wp_editor($story['description'], 'solutions_success_stories_' . $index . '_description', array(
                            'textarea_name' => 'solutions_success_stories[' . $index . '][description]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 4,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
                        <p><strong>Solutions Used:</strong></p>
                        <?php 
                        wp_editor($story['solution_used'], 'solutions_success_stories_' . $index . '_solution_used', array(
                            'textarea_name' => 'solutions_success_stories[' . $index . '][solution_used]',
                            'teeny' => true,
                            'media_buttons' => false,
                            'textarea_rows' => 2,
                            'quicktags' => array('buttons' => 'strong,em,link')
                        ));
                        ?>
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
                    <?php 
                    wp_editor($cta_title, 'solutions_cta_title', array(
                        'textarea_name' => 'solutions_cta_title',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_subtitle">CTA Subtitle</label></th>
                <td>
                    <?php 
                    wp_editor($cta_subtitle, 'solutions_cta_subtitle', array(
                        'textarea_name' => 'solutions_cta_subtitle',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 3,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_primary_text">Primary Button Text</label></th>
                <td>
                    <?php 
                    wp_editor($cta_primary_text, 'solutions_cta_primary_text', array(
                        'textarea_name' => 'solutions_cta_primary_text',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_primary_url">Primary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="solutions_cta_primary_url" 
                           name="solutions_cta_primary_url" 
                           value="<?php echo esc_url($cta_primary_url); ?>"
                           placeholder="/contact" style="width: 100%;" />
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_secondary_text">Secondary Button Text</label></th>
                <td>
                    <?php 
                    wp_editor($cta_secondary_text, 'solutions_cta_secondary_text', array(
                        'textarea_name' => 'solutions_cta_secondary_text',
                        'teeny' => true,
                        'media_buttons' => false,
                        'textarea_rows' => 2,
                        'quicktags' => array('buttons' => 'strong,em,link')
                    ));
                    ?>
                </td>
            </tr>
            <tr>
                <th><label for="solutions_cta_secondary_url">Secondary Button URL</label></th>
                <td>
                    <input type="url" 
                           id="solutions_cta_secondary_url" 
                           name="solutions_cta_secondary_url" 
                           value="<?php echo esc_url($cta_secondary_url); ?>"
                           placeholder="/case-studies" style="width: 100%;" />
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
                                           placeholder="? Benefit item" />
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
                          '<p><strong>Step Number:</strong></p>' +
                          '<input type="text" name="solutions_process_steps[' + index + '][number]" placeholder="Step Number (e.g., 1)" style="width: 100%;" />' +
                          '<p><strong>Step Title:</strong></p>' +
                          '<textarea name="solutions_process_steps[' + index + '][title]" placeholder="Step Title (e.g., Discovery & Analysis)" rows="2" style="width: 100%;"></textarea>' +
                          '<p><strong>Step Description:</strong></p>' +
                          '<textarea name="solutions_process_steps[' + index + '][description]" placeholder="Step description" rows="4" style="width: 100%;"></textarea>' +
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
                          '<input type="text" name="solutions_cta_benefits[]" placeholder="? Benefit item" />' +
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
                            // Check if this is likely rich text content from wp_editor
                            if (in_array($key, ['title', 'description', 'results', 'cta_text', 'metric_number', 'metric_label', 'solution_used'])) {
                                $sub_subitem = wp_kses_post($sub_subitem);
                            } else {
                                $sub_subitem = sanitize_text_field($sub_subitem);
                            }
                        }
                    } else {
                        // Check if this is likely rich text content from wp_editor
                        if (in_array($key, ['title', 'description', 'results', 'cta_text', 'metric_number', 'metric_label', 'solution_used', 'number', 'label'])) {
                            $subitem = wp_kses_post($subitem);
                        } elseif ($key === 'features') {
                            // Features can be plain text (array or string)
                            $subitem = is_array($subitem) ? array_map('sanitize_text_field', $subitem) : sanitize_textarea_field($subitem);
                        } else {
                            $subitem = sanitize_text_field($subitem);
                        }
                    }
                }
            } else {
                // Handle top-level array items (like CTA benefits)
                $item = sanitize_text_field($item);
            }
        }
        return $value;
    } else {
        // Single values - check if this is from wp_editor fields
        $wp_editor_fields = [
            'solutions_header_title', 'solutions_header_subtitle',
            'solutions_intro_title', 'solutions_intro_content',
            'solutions_grid_title', 'solutions_process_title',
            'solutions_success_stories_title', 'solutions_cta_title',
            'solutions_cta_subtitle', 'solutions_cta_primary_text',
            'solutions_cta_secondary_text'
        ];
        
        if (in_array($field, $wp_editor_fields)) {
            return wp_kses_post($value);
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
