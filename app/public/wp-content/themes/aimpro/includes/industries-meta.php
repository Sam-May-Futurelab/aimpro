<?php
// Industries Page Meta Fields

function add_industries_meta_boxes() {
    global $post;
    
    // Only add to pages with the industries template
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        
        // Only register this meta box for the industries page
        if ($page_template === 'page-industries.php') {
            add_meta_box(
                'industries_meta_box',
                'Industries Page Content',
                'industries_meta_box_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'add_industries_meta_boxes');

function industries_meta_box_callback($post) {
    // Only show on industries page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-industries.php') {
        echo '<p>This meta box only appears when using the "Industries Page" template.</p>';
        return;
    }

    wp_nonce_field('industries_meta_box', 'industries_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_industries_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_industries_header_subtitle', true);
    $intro_title = get_post_meta($post->ID, '_industries_intro_title', true);
    $intro_content = get_post_meta($post->ID, '_industries_intro_content', true);

    // Industry stats
    $industry_stats = get_post_meta($post->ID, '_industries_stats', true);
    if (empty($industry_stats)) {
        $industry_stats = array(
            array('number' => '7+', 'label' => 'Key Industries'),
            array('number' => '200+', 'label' => 'Industry Clients'),
            array('number' => '15+', 'label' => 'Years Experience')
        );
    }

    // Industry expertise section
    $expertise_title = get_post_meta($post->ID, '_industries_expertise_title', true);
    $expertise_subtitle = get_post_meta($post->ID, '_industries_expertise_subtitle', true);

    // Industries
    $industries = get_post_meta($post->ID, '_industries_list', true);
    if (empty($industries)) {
        $industries = array(
            array(
                'icon' => 'fas fa-car',
                'title' => 'Automotive',
                'description' => 'Drive qualified leads to your dealership or automotive service centre with targeted digital strategies that reach car buyers at every stage of their journey.',
                'features' => array('Vehicle inventory marketing', 'Service department promotion', 'Local SEO for dealerships', 'Lead generation campaigns'),
                'link_text' => 'Learn More',
                'link_url' => '/automotive'
            ),
            array(
                'icon' => 'fas fa-home',
                'title' => 'Home & Garden',
                'description' => 'Grow your home improvement, landscaping, or garden centre business with seasonal campaigns and local marketing strategies that capture homeowner intent.',
                'features' => array('Seasonal campaign optimisation', 'Before/after showcase content', 'Local service area targeting', 'Pinterest and visual marketing'),
                'link_text' => 'Learn More',
                'link_url' => '/home-garden'
            ),
            array(
                'icon' => 'fas fa-chart-line',
                'title' => 'Finance',
                'description' => 'Build trust and generate high-value leads for financial services with compliant, educational content marketing and targeted advertising strategies.',
                'features' => array('Regulatory compliant campaigns', 'Educational content marketing', 'Trust-building strategies', 'High-value lead generation'),
                'link_text' => 'Learn More',
                'link_url' => '/finance'
            ),
            array(
                'icon' => 'fas fa-user-tie',
                'title' => 'Professional Services',
                'description' => 'Establish thought leadership and attract ideal clients for your law firm, accounting practice, or consulting business with strategic content and SEO.',
                'features' => array('Thought leadership content', 'Professional networking', 'Expertise-based SEO', 'Client testimonial campaigns'),
                'link_text' => 'Learn More',
                'link_url' => '/professional-services'
            ),
            array(
                'icon' => 'fas fa-building',
                'title' => 'Estate Agents',
                'description' => 'Dominate your local property market with hyper-local SEO, stunning property showcases, and lead generation systems that convert browsers into buyers.',
                'features' => array('Hyper-local SEO optimisation', 'Property showcase campaigns', 'Virtual tour integration', 'Buyer/seller lead generation'),
                'link_text' => 'Learn More',
                'link_url' => '/estate-agents'
            ),
            array(
                'icon' => 'fas fa-users',
                'title' => 'Coaches & Consultants',
                'description' => 'Build your personal brand and attract high-value clients with strategic content marketing, thought leadership, and conversion-optimised funnels.',
                'features' => array('Personal brand development', 'Content marketing funnels', 'Speaking engagement promotion', 'High-ticket service marketing'),
                'link_text' => 'Learn More',
                'link_url' => '/coaches-consultants'
            ),
            array(
                'icon' => 'fas fa-shopping-cart',
                'title' => 'E-commerce',
                'description' => 'Maximize online sales and customer lifetime value with comprehensive e-commerce marketing including product feed optimisation, remarketing, and conversion rate optimisation.',
                'features' => array('Shopping campaign optimisation', 'Product feed management', 'Cart abandonment recovery', 'Customer retention strategies'),
                'link_text' => 'Learn More',
                'link_url' => '/ecommerce'
            )
        );
    }

    // Success stats section
    $success_title = get_post_meta($post->ID, '_industries_success_title', true);
    $success_subtitle = get_post_meta($post->ID, '_industries_success_subtitle', true);
    $success_stats = get_post_meta($post->ID, '_industries_success_stats', true);
    if (empty($success_stats)) {
        $success_stats = array(
            array('number' => '400%', 'label' => 'Average ROI increase across all industries'),
            array('number' => '95%', 'label' => 'Client retention rate'),
            array('number' => '�2.8M+', 'label' => 'Revenue generated for clients')
        );
    }

    // Why expertise matters section
    $expertise_matters_title = get_post_meta($post->ID, '_industries_expertise_matters_title', true);
    $expertise_matters_subtitle = get_post_meta($post->ID, '_industries_expertise_matters_subtitle', true);
    $expertise_points = get_post_meta($post->ID, '_industries_expertise_points', true);
    if (empty($expertise_points)) {        $expertise_points = array(
            array(
                'icon' => '',
                'title' => 'Target the Right Audience',
                'description' => 'We understand your customer\'s journey, pain points, and decision-making process.'
            ),
            array(
                'icon' => '??',
                'title' => 'Leverage Industry Data',
                'description' => 'Access to sector-specific benchmarks, trends, and performance metrics.'
            ),
            array(
                'icon' => '',
                'title' => 'Faster Results',
                'description' => 'Pre-tested strategies and proven tactics that work in your specific market.'
            ),
            array(
                'icon' => '??',
                'title' => 'Ensure Compliance',
                'description' => 'Navigate industry regulations and advertising guidelines with confidence.'
            )
        );
    }

    // Testimonials (without images)
    $testimonials_title = get_post_meta($post->ID, '_industries_testimonials_title', true);
    $testimonials = get_post_meta($post->ID, '_industries_testimonials', true);
    if (empty($testimonials)) {
        $testimonials = array(
            array(
                'quote' => 'Their understanding of the automotive market is exceptional. We\'ve seen a 180% increase in qualified leads since working with Aimpro Digital.',
                'name' => 'Mark Thompson',
                'position' => 'General Manager, Premier Motors',
                'industry' => 'Automotive'
            ),
            array(
                'quote' => 'The seasonal campaigns they created for our garden centre generated 220% more revenue during peak season. Outstanding results!',
                'name' => 'Sarah Mitchell',
                'position' => 'Owner, Blooming Gardens',
                'industry' => 'Home & Garden'
            ),
            array(
                'quote' => 'Their compliant approach to financial services marketing helped us generate high-quality leads while maintaining regulatory standards.',
                'name' => 'David Wilson',
                'position' => 'Director, WealthWise Financial',
                'industry' => 'Finance'
            )
        );
    }

    // CTA section
    $cta_title = get_post_meta($post->ID, '_industries_cta_title', true);
    $cta_subtitle = get_post_meta($post->ID, '_industries_cta_subtitle', true);
    $cta_primary_text = get_post_meta($post->ID, '_industries_cta_primary_text', true);
    $cta_primary_url = get_post_meta($post->ID, '_industries_cta_primary_url', true);
    $cta_secondary_text = get_post_meta($post->ID, '_industries_cta_secondary_text', true);
    $cta_secondary_url = get_post_meta($post->ID, '_industries_cta_secondary_url', true);

    ?>
    <style>
        .industries-meta {
            max-width: 100%;
        }
        .industries-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .industries-meta .form-table td {
            padding: 15px 10px;
        }
        .industries-meta input[type="text"],
        .industries-meta textarea,
        .industries-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .industries-meta textarea {
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

    <div class="industries-meta">
        <table class="form-table">
            <tr>
                <th><label for="industries_header_title">Page Header Title</label></th>
                <td><input type="text" id="industries_header_title" name="industries_header_title" value="<?php echo esc_attr($header_title); ?>" placeholder="Industries We Serve" /></td>
            </tr>
            <tr>
                <th><label for="industries_header_subtitle">Page Header Subtitle</label></th>
                <td><textarea id="industries_header_subtitle" name="industries_header_subtitle" placeholder="specialised digital marketing expertise across diverse sectors"><?php echo esc_textarea($header_subtitle); ?></textarea></td>
            </tr>
            <tr>
                <th><label for="industries_intro_title">Introduction Title</label></th>
                <td><input type="text" id="industries_intro_title" name="industries_intro_title" value="<?php echo esc_attr($intro_title); ?>" placeholder="Industry-Specific Digital Marketing Solutions" /></td>
            </tr>
            <tr>
                <th><label for="industries_intro_content">Introduction Content</label></th>
                <td><textarea id="industries_intro_content" name="industries_intro_content" placeholder="Every industry has unique challenges..."><?php echo esc_textarea($intro_content); ?></textarea></td>
            </tr>
        </table>

        <div class="section-divider">
            <h3>Industry Stats</h3>
            <div class="repeater-section">
                <div id="stats-container">
                    <?php foreach ($industry_stats as $index => $stat): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-stat">Remove</button>
                            <div class="item-field">
                                <label>Number/Value:</label>
                                <input type="text" name="industries_stats[<?php echo $index; ?>][number]" value="<?php echo esc_attr($stat['number']); ?>" placeholder="7+" />
                            </div>
                            <div class="item-field">
                                <label>Label:</label>
                                <input type="text" name="industries_stats[<?php echo $index; ?>][label]" value="<?php echo esc_attr($stat['label']); ?>" placeholder="Key Industries" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-stat">Add Stat</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Expertise Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="industries_expertise_title">Expertise Title</label></th>
                    <td><input type="text" id="industries_expertise_title" name="industries_expertise_title" value="<?php echo esc_attr($expertise_title); ?>" placeholder="Our Industry Expertise" /></td>
                </tr>
                <tr>
                    <th><label for="industries_expertise_subtitle">Expertise Subtitle</label></th>
                    <td><textarea id="industries_expertise_subtitle" name="industries_expertise_subtitle" placeholder="specialised digital marketing solutions..."><?php echo esc_textarea($expertise_subtitle); ?></textarea></td>
                </tr>
            </table>
        </div>

        <div class="section-divider">
            <h3>Industries List</h3>
            <div class="repeater-section">
                <div id="industries-container">
                    <?php foreach ($industries as $index => $industry): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-industry">Remove</button>
                            <div class="item-field">
                                <label>Icon (FontAwesome class or emoji):</label>
                                <input type="text" name="industries_list[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($industry['icon']); ?>" placeholder="fas fa-car" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="industries_list[<?php echo $index; ?>][title]" value="<?php echo esc_attr($industry['title']); ?>" placeholder="Automotive" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="industries_list[<?php echo $index; ?>][description]" placeholder="Drive qualified leads to your dealership..."><?php echo esc_textarea($industry['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Features (one per line):</label>
                                <textarea name="industries_list[<?php echo $index; ?>][features]" placeholder="Vehicle inventory marketing&#10;Service department promotion"><?php echo esc_textarea(is_array($industry['features']) ? implode("\n", $industry['features']) : $industry['features']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Link Text:</label>
                                <input type="text" name="industries_list[<?php echo $index; ?>][link_text]" value="<?php echo esc_attr($industry['link_text']); ?>" placeholder="Learn More" />
                            </div>
                            <div class="item-field">
                                <label>Link URL:</label>
                                <input type="url" name="industries_list[<?php echo $index; ?>][link_url]" value="<?php echo esc_attr($industry['link_url']); ?>" placeholder="/automotive" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-industry">Add Industry</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Success Stats Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="industries_success_title">Success Title</label></th>
                    <td><input type="text" id="industries_success_title" name="industries_success_title" value="<?php echo esc_attr($success_title); ?>" placeholder="Cross-Industry Success" /></td>
                </tr>
                <tr>
                    <th><label for="industries_success_subtitle">Success Subtitle</label></th>
                    <td><textarea id="industries_success_subtitle" name="industries_success_subtitle" placeholder="Delivering exceptional results..."><?php echo esc_textarea($success_subtitle); ?></textarea></td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="success-stats-container">
                    <?php foreach ($success_stats as $index => $stat): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-success-stat">Remove</button>
                            <div class="item-field">
                                <label>Number/Value:</label>
                                <input type="text" name="industries_success_stats[<?php echo $index; ?>][number]" value="<?php echo esc_attr($stat['number']); ?>" placeholder="400%" />
                            </div>
                            <div class="item-field">
                                <label>Label:</label>
                                <input type="text" name="industries_success_stats[<?php echo $index; ?>][label]" value="<?php echo esc_attr($stat['label']); ?>" placeholder="Average ROI increase" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-success-stat">Add Success Stat</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Why Expertise Matters Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="industries_expertise_matters_title">Expertise Matters Title</label></th>
                    <td><input type="text" id="industries_expertise_matters_title" name="industries_expertise_matters_title" value="<?php echo esc_attr($expertise_matters_title); ?>" placeholder="Why Industry Expertise Matters" /></td>
                </tr>
                <tr>
                    <th><label for="industries_expertise_matters_subtitle">Expertise Matters Subtitle</label></th>
                    <td><textarea id="industries_expertise_matters_subtitle" name="industries_expertise_matters_subtitle" placeholder="Generic marketing approaches fail..."><?php echo esc_textarea($expertise_matters_subtitle); ?></textarea></td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="expertise-points-container">
                    <?php foreach ($expertise_points as $index => $point): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-expertise-point">Remove</button>
                            <div class="item-field">
                                <label>Icon (emoji or FontAwesome):</label>
                                <input type="text" name="industries_expertise_points[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($point['icon']); ?>" placeholder="" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="industries_expertise_points[<?php echo $index; ?>][title]" value="<?php echo esc_attr($point['title']); ?>" placeholder="Target the Right Audience" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="industries_expertise_points[<?php echo $index; ?>][description]" placeholder="We understand your customer's journey..."><?php echo esc_textarea($point['description']); ?></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-expertise-point">Add Expertise Point</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Testimonials (without images)</h3>
            <table class="form-table">
                <tr>
                    <th><label for="industries_testimonials_title">Testimonials Title</label></th>
                    <td><input type="text" id="industries_testimonials_title" name="industries_testimonials_title" value="<?php echo esc_attr($testimonials_title); ?>" placeholder="What Our Industry Clients Say" /></td>
                </tr>
            </table>
            <div class="repeater-section">
                <div id="testimonials-container">
                    <?php foreach ($testimonials as $index => $testimonial): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-testimonial">Remove</button>
                            <div class="item-field">
                                <label>Quote:</label>
                                <textarea name="industries_testimonials[<?php echo $index; ?>][quote]" placeholder="Their understanding of the automotive market..."><?php echo esc_textarea($testimonial['quote']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Name:</label>
                                <input type="text" name="industries_testimonials[<?php echo $index; ?>][name]" value="<?php echo esc_attr($testimonial['name']); ?>" placeholder="Mark Thompson" />
                            </div>
                            <div class="item-field">
                                <label>Position:</label>
                                <input type="text" name="industries_testimonials[<?php echo $index; ?>][position]" value="<?php echo esc_attr($testimonial['position']); ?>" placeholder="General Manager, Premier Motors" />
                            </div>
                            <div class="item-field">
                                <label>Industry Tag:</label>
                                <input type="text" name="industries_testimonials[<?php echo $index; ?>][industry]" value="<?php echo esc_attr($testimonial['industry']); ?>" placeholder="Automotive" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-testimonial">Add Testimonial</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>CTA Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="industries_cta_title">CTA Title</label></th>
                    <td><input type="text" id="industries_cta_title" name="industries_cta_title" value="<?php echo esc_attr($cta_title); ?>" placeholder="Ready to Dominate Your Industry?" /></td>
                </tr>
                <tr>
                    <th><label for="industries_cta_subtitle">CTA Subtitle</label></th>
                    <td><textarea id="industries_cta_subtitle" name="industries_cta_subtitle" placeholder="Let's discuss how our industry-specific expertise..."><?php echo esc_textarea($cta_subtitle); ?></textarea></td>
                </tr>
                <tr>
                    <th><label for="industries_cta_primary_text">Primary Button Text</label></th>
                    <td><input type="text" id="industries_cta_primary_text" name="industries_cta_primary_text" value="<?php echo esc_attr($cta_primary_text); ?>" placeholder="Get Industry Analysis" /></td>
                </tr>
                <tr>
                    <th><label for="industries_cta_primary_url">Primary Button URL</label></th>
                    <td><input type="url" id="industries_cta_primary_url" name="industries_cta_primary_url" value="<?php echo esc_attr($cta_primary_url); ?>" placeholder="/contact" /></td>
                </tr>
                <tr>
                    <th><label for="industries_cta_secondary_text">Secondary Button Text</label></th>
                    <td><input type="text" id="industries_cta_secondary_text" name="industries_cta_secondary_text" value="<?php echo esc_attr($cta_secondary_text); ?>" placeholder="View Success Stories" /></td>
                </tr>
                <tr>
                    <th><label for="industries_cta_secondary_url">Secondary Button URL</label></th>
                    <td><input type="url" id="industries_cta_secondary_url" name="industries_cta_secondary_url" value="<?php echo esc_attr($cta_secondary_url); ?>" placeholder="/case-studies" /></td>
                </tr>
            </table>
        </div>
    </div>

    <script>
    jQuery(document).ready(function($) {
        // Add/remove functionality for repeaters
        $(document).on('click', '.add-stat', function() {
            var container = $('#stats-container');
            var index = container.find('.repeater-item').length;
            var html = '<div class="repeater-item">' +
                '<button type="button" class="remove-item remove-stat">Remove</button>' +
                '<div class="item-field"><label>Number/Value:</label><input type="text" name="industries_stats[' + index + '][number]" placeholder="7+" /></div>' +
                '<div class="item-field"><label>Label:</label><input type="text" name="industries_stats[' + index + '][label]" placeholder="Key Industries" /></div>' +
                '</div>';
            container.append(html);
        });

        $(document).on('click', '.add-industry', function() {
            var container = $('#industries-container');
            var index = container.find('.repeater-item').length;
            var html = '<div class="repeater-item">' +
                '<button type="button" class="remove-item remove-industry">Remove</button>' +
                '<div class="item-field"><label>Icon:</label><input type="text" name="industries_list[' + index + '][icon]" placeholder="fas fa-car" /></div>' +
                '<div class="item-field"><label>Title:</label><input type="text" name="industries_list[' + index + '][title]" placeholder="Automotive" /></div>' +
                '<div class="item-field"><label>Description:</label><textarea name="industries_list[' + index + '][description]" placeholder="Drive qualified leads..."></textarea></div>' +
                '<div class="item-field"><label>Features:</label><textarea name="industries_list[' + index + '][features]" placeholder="Feature 1\nFeature 2"></textarea></div>' +
                '<div class="item-field"><label>Link Text:</label><input type="text" name="industries_list[' + index + '][link_text]" placeholder="Learn More" /></div>' +
                '<div class="item-field"><label>Link URL:</label><input type="url" name="industries_list[' + index + '][link_url]" placeholder="/automotive" /></div>' +
                '</div>';
            container.append(html);
        });

        $(document).on('click', '.add-success-stat', function() {
            var container = $('#success-stats-container');
            var index = container.find('.repeater-item').length;
            var html = '<div class="repeater-item">' +
                '<button type="button" class="remove-item remove-success-stat">Remove</button>' +
                '<div class="item-field"><label>Number/Value:</label><input type="text" name="industries_success_stats[' + index + '][number]" placeholder="400%" /></div>' +
                '<div class="item-field"><label>Label:</label><input type="text" name="industries_success_stats[' + index + '][label]" placeholder="Average ROI increase" /></div>' +
                '</div>';
            container.append(html);
        });

        $(document).on('click', '.add-expertise-point', function() {
            var container = $('#expertise-points-container');
            var index = container.find('.repeater-item').length;
            var html = '<div class="repeater-item">' +
                '<button type="button" class="remove-item remove-expertise-point">Remove</button>' +
                '<div class="item-field"><label>Icon:</label><input type="text" name="industries_expertise_points[' + index + '][icon]" placeholder="" /></div>' +
                '<div class="item-field"><label>Title:</label><input type="text" name="industries_expertise_points[' + index + '][title]" placeholder="Target the Right Audience" /></div>' +
                '<div class="item-field"><label>Description:</label><textarea name="industries_expertise_points[' + index + '][description]" placeholder="We understand your customer\'s journey..."></textarea></div>' +
                '</div>';
            container.append(html);
        });

        $(document).on('click', '.add-testimonial', function() {
            var container = $('#testimonials-container');
            var index = container.find('.repeater-item').length;
            var html = '<div class="repeater-item">' +
                '<button type="button" class="remove-item remove-testimonial">Remove</button>' +
                '<div class="item-field"><label>Quote:</label><textarea name="industries_testimonials[' + index + '][quote]" placeholder="Their understanding of the automotive market..."></textarea></div>' +
                '<div class="item-field"><label>Name:</label><input type="text" name="industries_testimonials[' + index + '][name]" placeholder="Mark Thompson" /></div>' +
                '<div class="item-field"><label>Position:</label><input type="text" name="industries_testimonials[' + index + '][position]" placeholder="General Manager, Premier Motors" /></div>' +
                '<div class="item-field"><label>Industry Tag:</label><input type="text" name="industries_testimonials[' + index + '][industry]" placeholder="Automotive" /></div>' +
                '</div>';
            container.append(html);
        });

        // Remove items
        $(document).on('click', '.remove-item', function() {
            $(this).closest('.repeater-item').remove();
        });
    });
    </script>
    <?php
}

function save_industries_meta_box_data($post_id) {
    if (!isset($_POST['industries_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['industries_meta_box_nonce'], 'industries_meta_box')) {
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

    // Save all the meta fields
    $fields = array(
        'industries_header_title' => '_industries_header_title',
        'industries_header_subtitle' => '_industries_header_subtitle',
        'industries_intro_title' => '_industries_intro_title',
        'industries_intro_content' => '_industries_intro_content',
        'industries_expertise_title' => '_industries_expertise_title',
        'industries_expertise_subtitle' => '_industries_expertise_subtitle',
        'industries_success_title' => '_industries_success_title',
        'industries_success_subtitle' => '_industries_success_subtitle',
        'industries_expertise_matters_title' => '_industries_expertise_matters_title',
        'industries_expertise_matters_subtitle' => '_industries_expertise_matters_subtitle',
        'industries_testimonials_title' => '_industries_testimonials_title',
        'industries_cta_title' => '_industries_cta_title',
        'industries_cta_subtitle' => '_industries_cta_subtitle',
        'industries_cta_primary_text' => '_industries_cta_primary_text',
        'industries_cta_primary_url' => '_industries_cta_primary_url',
        'industries_cta_secondary_text' => '_industries_cta_secondary_text',
        'industries_cta_secondary_url' => '_industries_cta_secondary_url'
    );

    foreach ($fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
        }
    }

    // Save repeater fields
    if (isset($_POST['industries_stats'])) {
        update_post_meta($post_id, '_industries_stats', array_map('sanitize_text_field', $_POST['industries_stats']));
    }

    if (isset($_POST['industries_list'])) {
        $industries = array();
        foreach ($_POST['industries_list'] as $industry) {
            $industries[] = array(
                'icon' => sanitize_text_field($industry['icon']),
                'title' => sanitize_text_field($industry['title']),
                'description' => sanitize_textarea_field($industry['description']),
                'features' => array_filter(array_map('trim', explode("\n", sanitize_textarea_field($industry['features'])))),
                'link_text' => sanitize_text_field($industry['link_text']),
                'link_url' => sanitize_text_field($industry['link_url'])
            );
        }
        update_post_meta($post_id, '_industries_list', $industries);
    }

    if (isset($_POST['industries_success_stats'])) {
        update_post_meta($post_id, '_industries_success_stats', array_map('sanitize_text_field', $_POST['industries_success_stats']));
    }

    if (isset($_POST['industries_expertise_points'])) {
        $points = array();
        foreach ($_POST['industries_expertise_points'] as $point) {
            $points[] = array(
                'icon' => sanitize_text_field($point['icon']),
                'title' => sanitize_text_field($point['title']),
                'description' => sanitize_textarea_field($point['description'])
            );
        }
        update_post_meta($post_id, '_industries_expertise_points', $points);
    }

    if (isset($_POST['industries_testimonials'])) {
        $testimonials = array();
        foreach ($_POST['industries_testimonials'] as $testimonial) {
            $testimonials[] = array(
                'quote' => sanitize_textarea_field($testimonial['quote']),
                'name' => sanitize_text_field($testimonial['name']),
                'position' => sanitize_text_field($testimonial['position']),
                'industry' => sanitize_text_field($testimonial['industry'])
            );
        }
        update_post_meta($post_id, '_industries_testimonials', $testimonials);
    }
}
add_action('save_post', 'save_industries_meta_box_data');
