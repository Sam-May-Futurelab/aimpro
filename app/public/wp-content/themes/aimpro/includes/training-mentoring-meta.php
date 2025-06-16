<?php
// Training & Mentoring Page Meta Fields

function add_training_mentoring_meta_boxes() {
    $training_mentoring_screens = array('page');
    
    foreach ($training_mentoring_screens as $screen) {
        add_meta_box(
            'training_mentoring_meta_box',
            'Training & Mentoring Page Content',
            'training_mentoring_meta_box_callback',
            $screen,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_training_mentoring_meta_boxes');

function training_mentoring_meta_box_callback($post) {
    // Only show on training-mentoring page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-training-mentoring.php') {
        echo '<p>This meta box only appears when using the "Training & Mentoring Page" template.</p>';
        return;
    }

    wp_nonce_field('training_mentoring_meta_box', 'training_mentoring_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_training_mentoring_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_training_mentoring_header_subtitle', true);
    $intro_title = get_post_meta($post->ID, '_training_mentoring_intro_title', true);
    $intro_content = get_post_meta($post->ID, '_training_mentoring_intro_content', true);

    // Training benefits (4 tiles)
    $benefits = get_post_meta($post->ID, '_training_mentoring_benefits', true);
    if (empty($benefits)) {
        $benefits = array(
            array(
                'icon' => 'fas fa-crosshairs',
                'title' => 'Personalized Approach',
                'description' => 'Tailored programs based on your current skills and specific goals'
            ),
            array(
                'icon' => 'fas fa-bolt',
                'title' => 'Accelerated Learning',
                'description' => 'Learn from industry experts with real-world experience'
            ),
            array(
                'icon' => 'fas fa-chart-line',
                'title' => 'Measurable Results',
                'description' => 'Track your progress with actionable assignments and projects'
            ),
            array(
                'icon' => 'fas fa-star',
                'title' => 'Expert Guidance',
                'description' => 'Direct access to senior digital marketing professionals'
            )
        );
    }

    // Training programs
    $programs = get_post_meta($post->ID, '_training_mentoring_programs', true);
    if (empty($programs)) {
        $programs = array(
            array(
                'featured' => true,
                'badge' => 'Most Popular',
                'title' => 'Individual Mentoring',
                'price' => '£149',
                'period' => 'per session',
                'description' => 'One-on-one mentoring sessions with senior digital marketing experts tailored to your specific needs and career goals.',
                'features' => array('1-hour intensive sessions', 'Personalized learning plan', 'Homework assignments', 'Progress tracking', 'Email support between sessions', 'Industry certification guidance'),
                'topics_title' => 'Choose Your Focus Area:',
                'topics' => array('SEO Strategy', 'PPC Management', 'Content Marketing', 'Social Media', 'Analytics', 'Strategy'),
                'cta_text' => 'Book Session',
                'cta_url' => '#'
            ),
            array(
                'featured' => false,
                'badge' => '',
                'title' => 'Team Training Workshops',
                'price' => '£899',
                'period' => 'per workshop',
                'description' => 'Comprehensive team training workshops designed to upskill your entire marketing department with consistent, high-quality education.',
                'features' => array('Half-day or full-day workshops', 'Up to 12 team members', 'Interactive exercises', 'Custom curriculum', 'Workshop materials included', '30-day follow-up support'),
                'topics_title' => 'Popular Workshop Topics:',
                'topics' => array('Digital Strategy', 'SEO Fundamentals', 'PPC Best Practices', 'Content Planning', 'Analytics Setup', 'Campaign Management'),
                'cta_text' => 'Request Quote',
                'cta_url' => '#'
            ),
            array(
                'featured' => false,
                'badge' => '',
                'title' => 'Certification Program',
                'price' => '£1,299',
                'period' => '3-month program',
                'description' => 'Comprehensive 3-month certification program covering all aspects of digital marketing with hands-on projects and industry recognition.',
                'features' => array('12 structured modules', 'Weekly group sessions', 'Real-world projects', 'Industry certification', 'Career guidance', 'Lifetime community access'),
                'topics_title' => 'Curriculum Includes:',
                'topics' => array('Marketing Strategy', 'SEO & SEM', 'Content & Social', 'Email Marketing', 'Analytics', 'Campaign Management'),
                'cta_text' => 'Apply Now',
                'cta_url' => '#'
            )
        );
    }

    // Success stories (remove images)
    $success_stories_title = get_post_meta($post->ID, '_training_mentoring_success_stories_title', true);
    $success_stories = get_post_meta($post->ID, '_training_mentoring_success_stories', true);
    if (empty($success_stories)) {
        $success_stories = array(
            array(
                'quote' => 'The individual mentoring program helped me transition from traditional marketing to digital. Within 6 months, I landed a senior digital marketing role with a 40% salary increase.',
                'name' => 'Emma Thompson',
                'position' => 'Senior Digital Marketing Manager',
                'results' => array('40% salary increase', 'Senior role in 6 months')
            ),
            array(
                'quote' => 'Our team workshop on PPC management was transformative. We immediately implemented the strategies and saw a 150% improvement in our campaign performance.',
                'name' => 'David Chen',
                'position' => 'Marketing Director, TechStart',
                'results' => array('150% performance boost', 'Team alignment achieved')
            ),
            array(
                'quote' => 'The certification program gave me the confidence and skills to start my own digital marketing consultancy. I\'m now working with 8 clients and growing.',
                'name' => 'Lisa Rodriguez',
                'position' => 'Founder, Rodriguez Marketing',
                'results' => array('Started own business', '8 active clients')
            )
        );
    }

    // Learning paths
    $learning_paths_title = get_post_meta($post->ID, '_training_mentoring_learning_paths_title', true);
    $learning_paths_subtitle = get_post_meta($post->ID, '_training_mentoring_learning_paths_subtitle', true);
    $learning_paths = get_post_meta($post->ID, '_training_mentoring_learning_paths', true);
    if (empty($learning_paths)) {
        $learning_paths = array(
            array(
                'title' => 'Beginner to Professional',
                'duration' => '3-6 months',
                'description' => 'Perfect for marketing newcomers or those switching from traditional marketing to digital.',
                'steps' => array('Digital Marketing Fundamentals', 'SEO & Content Basics', 'PPC Campaign Management', 'Analytics & Reporting'),
                'cta_text' => 'Start Learning Path',
                'cta_url' => '#'
            ),
            array(
                'title' => 'Specialist to Expert',
                'duration' => '2-4 months',
                'description' => 'For experienced marketers looking to master advanced strategies and become industry experts.',
                'steps' => array('Advanced Strategy Development', 'Marketing Automation', 'Advanced Analytics', 'Team Leadership'),
                'cta_text' => 'Start Learning Path',
                'cta_url' => '#'
            ),
            array(
                'title' => 'Entrepreneur Track',
                'duration' => '4-8 months',
                'description' => 'Comprehensive training for business owners and entrepreneurs to master their own marketing.',
                'steps' => array('Business Marketing Strategy', 'Cost-Effective Tactics', 'Conversion Optimization', 'Growth Scaling'),
                'cta_text' => 'Start Learning Path',
                'cta_url' => '#'
            )
        );
    }

    // Mentors
    $mentors_title = get_post_meta($post->ID, '_training_mentoring_mentors_title', true);
    $mentors = get_post_meta($post->ID, '_training_mentoring_mentors', true);
    if (empty($mentors)) {
        $mentors = array(
            array(
                'name' => 'John Smith',
                'title' => 'SEO & Content Strategy Expert',
                'description' => '15+ years in digital marketing with expertise in enterprise SEO and content strategy. Former head of SEO at major UK e-commerce companies.',
                'specialties' => array('Technical SEO', 'Content Strategy', 'Enterprise SEO'),
                'stats' => array('50+ mentees', '★★★★★ 4.9')
            ),
            array(
                'name' => 'Sarah Johnson',
                'title' => 'PPC & Paid Media Specialist',
                'description' => 'Google Ads certified professional with 12+ years managing multi-million pound advertising budgets across various industries.',
                'specialties' => array('Google Ads', 'Facebook Ads', 'Campaign Optimization'),
                'stats' => array('75+ mentees', '★★★★★ 4.8')
            ),
            array(
                'name' => 'Mike Chen',
                'title' => 'Analytics & Data Strategy Expert',
                'description' => 'Former Google Analytics team member with deep expertise in data analysis, conversion tracking, and marketing attribution.',
                'specialties' => array('Google Analytics', 'Data Analysis', 'Attribution Modeling'),
                'stats' => array('40+ mentees', '★★★★★ 4.9')
            )
        );
    }

    // FAQ section
    $faq_title = get_post_meta($post->ID, '_training_mentoring_faq_title', true);
    $faqs = get_post_meta($post->ID, '_training_mentoring_faqs', true);
    if (empty($faqs)) {
        $faqs = array(
            array(
                'question' => 'How do I choose the right program?',
                'answer' => 'We offer a free 15-minute consultation to understand your goals and recommend the best program for your needs. Contact us to schedule your consultation.'
            ),
            array(
                'question' => 'What if I need to reschedule sessions?',
                'answer' => 'We understand life happens. You can reschedule sessions up to 24 hours in advance without any penalties. Emergency rescheduling is handled case-by-case.'
            ),
            array(
                'question' => 'Do you offer refunds?',
                'answer' => 'We offer a satisfaction guarantee. If you\'re not completely satisfied with your first session, we\'ll refund your money or provide a replacement mentor.'
            ),
            array(
                'question' => 'Can I get corporate training for my team?',
                'answer' => 'Absolutely! We offer customized corporate training programs for teams of any size. Contact us for a tailored proposal and volume discounts.'
            ),
            array(
                'question' => 'Are sessions recorded?',
                'answer' => 'Individual mentoring sessions can be recorded upon request. Workshop sessions include access to presentation materials and key recordings.'
            ),
            array(
                'question' => 'What certification do I receive?',
                'answer' => 'Our certification program provides an industry-recognized certificate upon completion, plus assistance with pursuing Google, Facebook, and other platform certifications.'
            )
        );
    }

    // CTA section
    $cta_title = get_post_meta($post->ID, '_training_mentoring_cta_title', true);
    $cta_content = get_post_meta($post->ID, '_training_mentoring_cta_content', true);
    $cta_primary_text = get_post_meta($post->ID, '_training_mentoring_cta_primary_text', true);
    $cta_primary_url = get_post_meta($post->ID, '_training_mentoring_cta_primary_url', true);
    $cta_secondary_text = get_post_meta($post->ID, '_training_mentoring_cta_secondary_text', true);
    $cta_secondary_url = get_post_meta($post->ID, '_training_mentoring_cta_secondary_url', true);
    $cta_note = get_post_meta($post->ID, '_training_mentoring_cta_note', true);

    ?>
    <style>
        .training-mentoring-meta {
            max-width: 100%;
        }
        .training-mentoring-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .training-mentoring-meta .form-table td {
            padding: 15px 10px;
        }
        .training-mentoring-meta input[type="text"],
        .training-mentoring-meta textarea,
        .training-mentoring-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .training-mentoring-meta textarea {
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
        .item-field input, .item-field textarea, .item-field select {
            width: 100%;
            max-width: 400px;
        }
        .section-divider {
            border-top: 2px solid #0073aa;
            margin: 30px 0 20px 0;
            padding-top: 20px;
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

    <div class="training-mentoring-meta">
        <table class="form-table">
            <tr>
                <th><label for="training_mentoring_header_title">Page Header Title</label></th>
                <td><input type="text" id="training_mentoring_header_title" name="training_mentoring_header_title" value="<?php echo esc_attr($header_title); ?>" placeholder="Training & Mentoring" /></td>
            </tr>
            <tr>
                <th><label for="training_mentoring_header_subtitle">Page Header Subtitle</label></th>
                <td><textarea id="training_mentoring_header_subtitle" name="training_mentoring_header_subtitle" placeholder="Accelerate your digital marketing expertise with personalized guidance"><?php echo esc_textarea($header_subtitle); ?></textarea></td>
            </tr>
            <tr>
                <th><label for="training_mentoring_intro_title">Introduction Title</label></th>
                <td><input type="text" id="training_mentoring_intro_title" name="training_mentoring_intro_title" value="<?php echo esc_attr($intro_title); ?>" placeholder="Invest in Your Digital Marketing Future" /></td>
            </tr>
            <tr>
                <th><label for="training_mentoring_intro_content">Introduction Content</label></th>
                <td><textarea id="training_mentoring_intro_content" name="training_mentoring_intro_content" placeholder="Whether you're looking to upskill your team..."><?php echo esc_textarea($intro_content); ?></textarea></td>
            </tr>
        </table>

        <div class="section-divider">
            <h3>Training Benefits (4 tiles)</h3>
            <div class="repeater-section">
                <div id="benefits-container">
                    <?php foreach ($benefits as $index => $benefit): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-benefit">Remove</button>
                            <div class="item-field">
                                <label>Icon (FontAwesome class):</label>
                                <input type="text" name="training_mentoring_benefits[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($benefit['icon']); ?>" placeholder="fas fa-crosshairs" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="training_mentoring_benefits[<?php echo $index; ?>][title]" value="<?php echo esc_attr($benefit['title']); ?>" placeholder="Personalized Approach" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="training_mentoring_benefits[<?php echo $index; ?>][description]" placeholder="Tailored programs based on your current skills..."><?php echo esc_textarea($benefit['description']); ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-benefit">Add Benefit</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Training Programs</h3>
            <div class="repeater-section">
                <div id="programs-container">
                    <?php foreach ($programs as $index => $program): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-program">Remove</button>
                            <div class="item-field">
                                <label>Featured Program:</label>
                                <input type="checkbox" name="training_mentoring_programs[<?php echo $index; ?>][featured]" value="1" <?php checked(!empty($program['featured'])); ?> /> Featured program
                            </div>
                            <div class="item-field">
                                <label>Badge Text (if featured):</label>
                                <input type="text" name="training_mentoring_programs[<?php echo $index; ?>][badge]" value="<?php echo esc_attr($program['badge']); ?>" placeholder="Most Popular" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="training_mentoring_programs[<?php echo $index; ?>][title]" value="<?php echo esc_attr($program['title']); ?>" placeholder="Individual Mentoring" />
                            </div>
                            <div class="item-field">
                                <label>Price:</label>
                                <input type="text" name="training_mentoring_programs[<?php echo $index; ?>][price]" value="<?php echo esc_attr($program['price']); ?>" placeholder="£149" />
                            </div>
                            <div class="item-field">
                                <label>Period:</label>
                                <input type="text" name="training_mentoring_programs[<?php echo $index; ?>][period]" value="<?php echo esc_attr($program['period']); ?>" placeholder="per session" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="training_mentoring_programs[<?php echo $index; ?>][description]" placeholder="One-on-one mentoring sessions..."><?php echo esc_textarea($program['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Features (one per line):</label>
                                <div class="list-editor">
                                    <div class="features-list" data-program="<?php echo $index; ?>">
                                        <?php 
                                        $features = isset($program['features']) ? $program['features'] : array();
                                        foreach ($features as $feature_index => $feature): ?>
                                            <div class="list-item">
                                                <input type="text" name="training_mentoring_programs[<?php echo $index; ?>][features][<?php echo $feature_index; ?>]" value="<?php echo esc_attr($feature); ?>" placeholder="Feature item" />
                                                <button type="button" class="remove-list-item">Remove</button>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button type="button" class="add-list-item add-feature" data-program="<?php echo $index; ?>">Add Feature</button>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>Topics Title:</label>
                                <input type="text" name="training_mentoring_programs[<?php echo $index; ?>][topics_title]" value="<?php echo esc_attr($program['topics_title']); ?>" placeholder="Choose Your Focus Area:" />
                            </div>
                            <div class="item-field">
                                <label>Topics (one per line):</label>
                                <div class="list-editor">
                                    <div class="topics-list" data-program="<?php echo $index; ?>">
                                        <?php 
                                        $topics = isset($program['topics']) ? $program['topics'] : array();
                                        foreach ($topics as $topic_index => $topic): ?>
                                            <div class="list-item">
                                                <input type="text" name="training_mentoring_programs[<?php echo $index; ?>][topics][<?php echo $topic_index; ?>]" value="<?php echo esc_attr($topic); ?>" placeholder="Topic item" />
                                                <button type="button" class="remove-list-item">Remove</button>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button type="button" class="add-list-item add-topic" data-program="<?php echo $index; ?>">Add Topic</button>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>CTA Text:</label>
                                <input type="text" name="training_mentoring_programs[<?php echo $index; ?>][cta_text]" value="<?php echo esc_attr($program['cta_text']); ?>" placeholder="Book Session" />
                            </div>
                            <div class="item-field">
                                <label>CTA URL:</label>
                                <input type="url" name="training_mentoring_programs[<?php echo $index; ?>][cta_url]" value="<?php echo esc_url($program['cta_url']); ?>" placeholder="https://example.com" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-program">Add Program</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Success Stories (remove images)</h3>
            <table class="form-table">
                <tr>
                    <th><label for="training_mentoring_success_stories_title">Section Title</label></th>
                    <td><input type="text" id="training_mentoring_success_stories_title" name="training_mentoring_success_stories_title" value="<?php echo esc_attr($success_stories_title); ?>" placeholder="Success Stories" /></td>
                </tr>
            </table>
            
            <div class="repeater-section">
                <div id="success-stories-container">
                    <?php foreach ($success_stories as $index => $story): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-story">Remove</button>
                            <div class="item-field">
                                <label>Quote:</label>
                                <textarea name="training_mentoring_success_stories[<?php echo $index; ?>][quote]" placeholder="The individual mentoring program helped me..."><?php echo esc_textarea($story['quote']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Name:</label>
                                <input type="text" name="training_mentoring_success_stories[<?php echo $index; ?>][name]" value="<?php echo esc_attr($story['name']); ?>" placeholder="Emma Thompson" />
                            </div>
                            <div class="item-field">
                                <label>Position:</label>
                                <input type="text" name="training_mentoring_success_stories[<?php echo $index; ?>][position]" value="<?php echo esc_attr($story['position']); ?>" placeholder="Senior Digital Marketing Manager" />
                            </div>
                            <div class="item-field">
                                <label>Results (one per line):</label>
                                <div class="list-editor">
                                    <div class="results-list" data-story="<?php echo $index; ?>">
                                        <?php 
                                        $results = isset($story['results']) ? $story['results'] : array();
                                        foreach ($results as $result_index => $result): ?>
                                            <div class="list-item">
                                                <input type="text" name="training_mentoring_success_stories[<?php echo $index; ?>][results][<?php echo $result_index; ?>]" value="<?php echo esc_attr($result); ?>" placeholder="40% salary increase" />
                                                <button type="button" class="remove-list-item">Remove</button>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button type="button" class="add-list-item add-result" data-story="<?php echo $index; ?>">Add Result</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-story">Add Success Story</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Learning Paths</h3>
            <table class="form-table">
                <tr>
                    <th><label for="training_mentoring_learning_paths_title">Section Title</label></th>
                    <td><input type="text" id="training_mentoring_learning_paths_title" name="training_mentoring_learning_paths_title" value="<?php echo esc_attr($learning_paths_title); ?>" placeholder="Learning Paths" /></td>
                </tr>
                <tr>
                    <th><label for="training_mentoring_learning_paths_subtitle">Section Subtitle</label></th>
                    <td><textarea id="training_mentoring_learning_paths_subtitle" name="training_mentoring_learning_paths_subtitle" placeholder="Structured progression routes based on your career goals"><?php echo esc_textarea($learning_paths_subtitle); ?></textarea></td>
                </tr>
            </table>
            
            <div class="repeater-section">
                <div id="learning-paths-container">
                    <?php foreach ($learning_paths as $index => $path): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-path">Remove</button>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="training_mentoring_learning_paths[<?php echo $index; ?>][title]" value="<?php echo esc_attr($path['title']); ?>" placeholder="Beginner to Professional" />
                            </div>
                            <div class="item-field">
                                <label>Duration:</label>
                                <input type="text" name="training_mentoring_learning_paths[<?php echo $index; ?>][duration]" value="<?php echo esc_attr($path['duration']); ?>" placeholder="3-6 months" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="training_mentoring_learning_paths[<?php echo $index; ?>][description]" placeholder="Perfect for marketing newcomers..."><?php echo esc_textarea($path['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Steps (one per line):</label>
                                <div class="list-editor">
                                    <div class="steps-list" data-path="<?php echo $index; ?>">
                                        <?php 
                                        $steps = isset($path['steps']) ? $path['steps'] : array();
                                        foreach ($steps as $step_index => $step): ?>
                                            <div class="list-item">
                                                <input type="text" name="training_mentoring_learning_paths[<?php echo $index; ?>][steps][<?php echo $step_index; ?>]" value="<?php echo esc_attr($step); ?>" placeholder="Digital Marketing Fundamentals" />
                                                <button type="button" class="remove-list-item">Remove</button>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button type="button" class="add-list-item add-step" data-path="<?php echo $index; ?>">Add Step</button>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>CTA Text:</label>
                                <input type="text" name="training_mentoring_learning_paths[<?php echo $index; ?>][cta_text]" value="<?php echo esc_attr($path['cta_text']); ?>" placeholder="Start Learning Path" />
                            </div>
                            <div class="item-field">
                                <label>CTA URL:</label>
                                <input type="url" name="training_mentoring_learning_paths[<?php echo $index; ?>][cta_url]" value="<?php echo esc_url($path['cta_url']); ?>" placeholder="https://example.com" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-path">Add Learning Path</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Mentors</h3>
            <table class="form-table">
                <tr>
                    <th><label for="training_mentoring_mentors_title">Section Title</label></th>
                    <td><input type="text" id="training_mentoring_mentors_title" name="training_mentoring_mentors_title" value="<?php echo esc_attr($mentors_title); ?>" placeholder="Meet Your Mentors" /></td>
                </tr>
            </table>
            
            <div class="repeater-section">
                <div id="mentors-container">
                    <?php foreach ($mentors as $index => $mentor): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-mentor">Remove</button>
                            <div class="item-field">
                                <label>Name:</label>
                                <input type="text" name="training_mentoring_mentors[<?php echo $index; ?>][name]" value="<?php echo esc_attr($mentor['name']); ?>" placeholder="John Smith" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="training_mentoring_mentors[<?php echo $index; ?>][title]" value="<?php echo esc_attr($mentor['title']); ?>" placeholder="SEO & Content Strategy Expert" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="training_mentoring_mentors[<?php echo $index; ?>][description]" placeholder="15+ years in digital marketing..."><?php echo esc_textarea($mentor['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Specialties (one per line):</label>
                                <div class="list-editor">
                                    <div class="specialties-list" data-mentor="<?php echo $index; ?>">
                                        <?php 
                                        $specialties = isset($mentor['specialties']) ? $mentor['specialties'] : array();
                                        foreach ($specialties as $specialty_index => $specialty): ?>
                                            <div class="list-item">
                                                <input type="text" name="training_mentoring_mentors[<?php echo $index; ?>][specialties][<?php echo $specialty_index; ?>]" value="<?php echo esc_attr($specialty); ?>" placeholder="Technical SEO" />
                                                <button type="button" class="remove-list-item">Remove</button>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button type="button" class="add-list-item add-specialty" data-mentor="<?php echo $index; ?>">Add Specialty</button>
                                </div>
                            </div>
                            <div class="item-field">
                                <label>Stats (one per line):</label>
                                <div class="list-editor">
                                    <div class="stats-list" data-mentor="<?php echo $index; ?>">
                                        <?php 
                                        $stats = isset($mentor['stats']) ? $mentor['stats'] : array();
                                        foreach ($stats as $stat_index => $stat): ?>
                                            <div class="list-item">
                                                <input type="text" name="training_mentoring_mentors[<?php echo $index; ?>][stats][<?php echo $stat_index; ?>]" value="<?php echo esc_attr($stat); ?>" placeholder="50+ mentees" />
                                                <button type="button" class="remove-list-item">Remove</button>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button type="button" class="add-list-item add-stat" data-mentor="<?php echo $index; ?>">Add Stat</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-mentor">Add Mentor</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>FAQ Section (existing styling)</h3>
            <table class="form-table">
                <tr>
                    <th><label for="training_mentoring_faq_title">FAQ Title</label></th>
                    <td><input type="text" id="training_mentoring_faq_title" name="training_mentoring_faq_title" value="<?php echo esc_attr($faq_title); ?>" placeholder="Frequently Asked Questions" /></td>
                </tr>
            </table>
            
            <div class="repeater-section">
                <div id="faqs-container">
                    <?php foreach ($faqs as $index => $faq): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-faq">Remove</button>
                            <div class="item-field">
                                <label>Question:</label>
                                <input type="text" name="training_mentoring_faqs[<?php echo $index; ?>][question]" value="<?php echo esc_attr($faq['question']); ?>" placeholder="How do I choose the right program?" />
                            </div>
                            <div class="item-field">
                                <label>Answer:</label>
                                <textarea name="training_mentoring_faqs[<?php echo $index; ?>][answer]" placeholder="We offer a free 15-minute consultation..."><?php echo esc_textarea($faq['answer']); ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-faq">Add FAQ</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>CTA Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="training_mentoring_cta_title">CTA Title</label></th>
                    <td><input type="text" id="training_mentoring_cta_title" name="training_mentoring_cta_title" value="<?php echo esc_attr($cta_title); ?>" placeholder="Ready to Accelerate Your Marketing Career?" /></td>
                </tr>
                <tr>
                    <th><label for="training_mentoring_cta_content">CTA Content</label></th>
                    <td><textarea id="training_mentoring_cta_content" name="training_mentoring_cta_content" placeholder="Book a free consultation to discuss your goals..."><?php echo esc_textarea($cta_content); ?></textarea></td>
                </tr>
                <tr>
                    <th><label for="training_mentoring_cta_primary_text">Primary Button Text</label></th>
                    <td><input type="text" id="training_mentoring_cta_primary_text" name="training_mentoring_cta_primary_text" value="<?php echo esc_attr($cta_primary_text); ?>" placeholder="Book Free Consultation" /></td>
                </tr>
                <tr>
                    <th><label for="training_mentoring_cta_primary_url">Primary Button URL</label></th>
                    <td><input type="url" id="training_mentoring_cta_primary_url" name="training_mentoring_cta_primary_url" value="<?php echo esc_url($cta_primary_url); ?>" placeholder="https://example.com" /></td>
                </tr>
                <tr>
                    <th><label for="training_mentoring_cta_secondary_text">Secondary Button Text</label></th>
                    <td><input type="text" id="training_mentoring_cta_secondary_text" name="training_mentoring_cta_secondary_text" value="<?php echo esc_attr($cta_secondary_text); ?>" placeholder="Contact Us" /></td>
                </tr>
                <tr>
                    <th><label for="training_mentoring_cta_secondary_url">Secondary Button URL</label></th>
                    <td><input type="url" id="training_mentoring_cta_secondary_url" name="training_mentoring_cta_secondary_url" value="<?php echo esc_url($cta_secondary_url); ?>" placeholder="https://example.com/contact" /></td>
                </tr>
                <tr>
                    <th><label for="training_mentoring_cta_note">CTA Note</label></th>
                    <td><input type="text" id="training_mentoring_cta_note" name="training_mentoring_cta_note" value="<?php echo esc_attr($cta_note); ?>" placeholder="Free 15-minute consultation • No obligation • Personalized recommendations" /></td>
                </tr>
            </table>
        </div>
    </div>

    <script>
        jQuery(document).ready(function($) {
            // Add benefit
            $('.add-benefit').click(function() {
                var container = $('#benefits-container');
                var index = container.find('.repeater-item').length;
                var html = '<div class="repeater-item">' +
                    '<button type="button" class="remove-item remove-benefit">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Icon (FontAwesome class):</label>' +
                        '<input type="text" name="training_mentoring_benefits[' + index + '][icon]" placeholder="fas fa-star" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Title:</label>' +
                        '<input type="text" name="training_mentoring_benefits[' + index + '][title]" placeholder="Benefit Title" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Description:</label>' +
                        '<textarea name="training_mentoring_benefits[' + index + '][description]" placeholder="Benefit description..."></textarea>' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Remove items
            $(document).on('click', '.remove-item', function() {
                $(this).closest('.repeater-item').remove();
            });

            // Remove list items
            $(document).on('click', '.remove-list-item', function() {
                $(this).closest('.list-item').remove();
            });

            // Add list items functionality would be added here for features, topics, etc.
            // This is a simplified version - full implementation would handle all dynamic list additions
        });
    </script>
    <?php
}

function save_training_mentoring_meta($post_id) {
    if (!isset($_POST['training_mentoring_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['training_mentoring_meta_box_nonce'], 'training_mentoring_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Only save on training-mentoring page template
    $page_template = get_page_template_slug($post_id);
    if ($page_template !== 'page-training-mentoring.php') {
        return;
    }

    // Save all meta fields
    $fields = array(
        'training_mentoring_header_title',
        'training_mentoring_header_subtitle',
        'training_mentoring_intro_title',
        'training_mentoring_intro_content',
        'training_mentoring_success_stories_title',
        'training_mentoring_learning_paths_title',
        'training_mentoring_learning_paths_subtitle',
        'training_mentoring_mentors_title',
        'training_mentoring_faq_title',
        'training_mentoring_cta_title',
        'training_mentoring_cta_content',
        'training_mentoring_cta_primary_text',
        'training_mentoring_cta_primary_url',
        'training_mentoring_cta_secondary_text',
        'training_mentoring_cta_secondary_url',
        'training_mentoring_cta_note'
    );

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = ($field === 'training_mentoring_cta_primary_url' || $field === 'training_mentoring_cta_secondary_url') 
                ? esc_url_raw($_POST[$field]) 
                : sanitize_textarea_field($_POST[$field]);
            update_post_meta($post_id, '_' . $field, $value);
        }
    }

    // Save array fields
    $array_fields = array(
        'training_mentoring_benefits',
        'training_mentoring_programs',
        'training_mentoring_success_stories',
        'training_mentoring_learning_paths',
        'training_mentoring_mentors',
        'training_mentoring_faqs'
    );

    foreach ($array_fields as $field) {
        if (isset($_POST[$field])) {
            $sanitized_data = array();
            foreach ($_POST[$field] as $item) {
                $sanitized_item = array();
                foreach ($item as $key => $value) {
                    if ($key === 'cta_url' || strpos($key, '_url') !== false) {
                        $sanitized_item[$key] = esc_url_raw($value);
                    } elseif ($key === 'featured') {
                        $sanitized_item[$key] = !empty($value);
                    } elseif (is_array($value)) {
                        $sanitized_item[$key] = array_map('sanitize_text_field', $value);
                    } else {
                        $sanitized_item[$key] = sanitize_textarea_field($value);
                    }
                }
                $sanitized_data[] = $sanitized_item;
            }
            update_post_meta($post_id, '_' . $field, $sanitized_data);
        }
    }
}
add_action('save_post', 'save_training_mentoring_meta');
