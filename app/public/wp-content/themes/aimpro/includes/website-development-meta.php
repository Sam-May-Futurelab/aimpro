<?php
// Meta fields for Website Development page

// Function to get default values for website development page
function get_website_development_defaults() {
    return array(
        'header_title' => 'Website Development Services',
        'header_subtitle' => 'Create high-converting websites that drive results and grow your business',
        'header_tags' => "Mobile-First\nConversion optimised\nSEO Ready",
        'overview_title' => 'Build Websites That Convert',
        'overview_description' => "Our website development services focus on creating beautiful, fast, and conversion-optimised websites that not only look great but drive real business results. From custom website design to high-converting landing pages, we build digital experiences that engage visitors and turn them into customers.\n\nEvery website we develop is built with performance, user experience, and search engine optimisation in mind, ensuring your investment delivers maximum return through increased traffic, leads, and sales.",
        'stats' => array(
            array('number' => '280%', 'label' => 'Average conversion increase'),
            array('number' => '<3 Sec', 'label' => 'Average load time'),
            array('number' => '98%', 'label' => 'Mobile performance score')
        ),
        'case_title' => 'Case Study: E-commerce Website Redesign',
        'case_subtitle' => 'Complete Website Overhaul Generates 380% Revenue Increase',
        'case_description' => 'An established e-commerce business approached us with an outdated website that was hurting their sales. Our comprehensive redesign and optimisation strategy transformed their online presence and dramatically improved their bottom line.',
        'case_challenges' => "Outdated design reducing customer trust\nPoor mobile experience (65% mobile traffic)\nSlow loading times (8+ seconds)\nConfusing navigation and checkout process\nLow conversion rate (0.8%)",
        'case_solutions' => "Modern, mobile-first responsive design\nStreamlined user experience and navigation\noptimised checkout process (one-click checkout)\nPerformance optimisation (2.1s load time)\nA/B tested conversion elements",
        'case_results' => array(
            array('number' => '380%', 'label' => 'Revenue Increase'),
            array('number' => '450%', 'label' => 'Conversion Rate Improvement'),
            array('number' => '75%', 'label' => 'Faster Load Times'),
            array('number' => '6 Weeks', 'label' => 'Development Timeline')
        ),
        'process_title' => 'Our Website Development Process',
        'process_steps' => array(
            array('title' => 'Discovery & Strategy', 'description' => 'Understanding your business goals, target audience, and requirements to create a strategic development plan.'),
            array('title' => 'Design & Planning', 'description' => 'Creating wireframes, mockups, and detailed design specifications that align with your brand and objectives.'),
            array('title' => 'Development & Build', 'description' => 'Expert development using modern technologies, best practices, and optimisation for performance and SEO.'),
            array('title' => 'Testing & Quality Assurance', 'description' => 'Comprehensive testing across devices, browsers, and performance metrics to ensure flawless functionality.'),
            array('title' => 'Launch & optimisation', 'description' => 'Strategic launch with ongoing monitoring, analytics setup, and continuous optimisation for better results.')
        ),
        'tech_title' => 'Technologies & Platforms We Use',
        'tech_description' => 'We leverage cutting-edge technologies and platforms to build robust, scalable websites that deliver exceptional performance.',
        'tech_categories' => array(
            array('category' => 'Content Management', 'tools' => array('WordPress', 'Webflow', 'Shopify', 'WooCommerce', 'Drupal')),
            array('category' => 'Frontend Technologies', 'tools' => array('HTML5 & CSS3', 'JavaScript (ES6+)', 'React.js', 'Vue.js', 'Bootstrap & Tailwind')),
            array('category' => 'Backend Development', 'tools' => array('PHP', 'Node.js', 'Python', 'MySQL', 'PostgreSQL')),
            array('category' => 'Performance & SEO', 'tools' => array('Google PageSpeed optimisation', 'Core Web Vitals', 'Schema.org Markup', 'CDN Integration', 'Image optimisation'))
        ),
        'features_title' => 'Standard Features Included',
        'features_description' => 'Every website we build includes these essential features to ensure optimal performance and user experience.',
        'features' => array(
            array('title' => 'Mobile-First Design', 'description' => 'Responsive design that looks and works perfectly on all devices, with mobile optimisation as a priority.'),
            array('title' => 'Lightning-Fast Performance', 'description' => 'optimised for speed with sub-3 second load times, improving user experience and search rankings.'),
            array('title' => 'SEO-optimised', 'description' => 'Built with SEO best practices, including proper structure, meta tags, and schema markup for better visibility.'),
            array('title' => 'Security & SSL', 'description' => 'Secure hosting, SSL certificates, and security best practices to protect your website and user data.'),
            array('title' => 'Analytics Integration', 'description' => 'Google Analytics, conversion tracking, and performance monitoring setup for data-driven insights.'),
            array('title' => 'Brand Consistency', 'description' => 'Design that reflects your brand identity with consistent colours, fonts, and messaging throughout.')
        ),
        'industries_title' => 'Website Development for Your Industry',
        'industries' => array(
            array('title' => 'E-commerce', 'description' => 'Online stores with optimised product pages, secure checkout, inventory management, and conversion-focused design.'),
            array('title' => 'Professional Services', 'description' => 'Professional websites with service showcases, client testimonials, appointment booking, and lead generation forms.'),
            array('title' => 'SaaS & Technology', 'description' => 'Product-focused websites with feature demonstrations, pricing pages, free trial signups, and customer onboarding.'),
            array('title' => 'Healthcare', 'description' => 'HIPAA-compliant websites with patient portals, appointment scheduling, and accessible design for healthcare providers.'),
            array('title' => 'Real Estate', 'description' => 'Property listing websites with search functionality, virtual tours, lead capture, and CRM integration.'),
            array('title' => 'Restaurants & Hospitality', 'description' => 'Visual websites with online ordering, reservation systems, menu displays, and local SEO optimisation.')
        ),
        'testimonial_quote' => 'The new website AIM Pro Marketing built for us has exceeded all expectations. Our conversion rate tripled within the first month, and we\'re getting compliments on the design daily. The investment has already paid for itself.',
        'testimonial_name' => 'Rachel Green',
        'testimonial_position' => 'Founder, Green Garden Solutions',
        'cta_title' => 'Ready to Build Your High-Converting Website?',
        'cta_description' => 'Let\'s create a website that drives results and grows your business with our expert development services.',
        'cta_primary_text' => 'Get Started',
        'cta_primary_link' => '',
        'cta_secondary_text' => '',
        'cta_secondary_link' => ''
    );
}

add_action('add_meta_boxes', function() {
    global $post;
    
    // Check if this is the right page/template
    if (!$post || $post->post_type !== 'page') return;
    
    $template = get_page_template_slug($post->ID);
    $page_slug = get_post_field('post_name', $post->ID);
    
    // Show meta box only for website development template/page
    if ($template === 'page-website-development.php' || 
        $page_slug === 'website-development' || 
        $page_slug === 'website-development-services') {
        add_meta_box(
            'website_development_meta', 
            'Website Development Page Content', 
            'website_development_meta_callback', 
            'page', 
            'normal', 
            'high'
        );
    }
});

function website_development_meta_callback($post) {
    wp_nonce_field('website_development_meta', 'website_development_meta_nonce');
    
    // Default values
    $defaults = get_website_development_defaults();
    
    // Get current values or use defaults
    $header_title = get_post_meta($post->ID, 'website_development_header_title', true) ?: $defaults['header_title'];
    $header_subtitle = get_post_meta($post->ID, 'website_development_header_subtitle', true) ?: $defaults['header_subtitle'];
    $header_tags = get_post_meta($post->ID, 'website_development_header_tags', true) ?: $defaults['header_tags'];
    $overview_title = get_post_meta($post->ID, 'website_development_overview_title', true) ?: $defaults['overview_title'];
    $overview_description = get_post_meta($post->ID, 'website_development_overview_description', true) ?: $defaults['overview_description'];
    $stats = get_post_meta($post->ID, 'website_development_stats', true);
    if (!is_array($stats) || empty($stats)) $stats = $defaults['stats'];
    $case_title = get_post_meta($post->ID, 'website_development_case_title', true) ?: $defaults['case_title'];
    $case_subtitle = get_post_meta($post->ID, 'website_development_case_subtitle', true) ?: $defaults['case_subtitle'];
    $case_description = get_post_meta($post->ID, 'website_development_case_description', true) ?: $defaults['case_description'];
    $case_challenges = get_post_meta($post->ID, 'website_development_case_challenges', true) ?: $defaults['case_challenges'];
    $case_solutions = get_post_meta($post->ID, 'website_development_case_solutions', true) ?: $defaults['case_solutions'];
    $case_results = get_post_meta($post->ID, 'website_development_case_results', true);
    if (!is_array($case_results) || empty($case_results)) $case_results = $defaults['case_results'];
    $process_title = get_post_meta($post->ID, 'website_development_process_title', true) ?: $defaults['process_title'];
    $process_steps = get_post_meta($post->ID, 'website_development_process_steps', true);
    if (!is_array($process_steps) || empty($process_steps)) $process_steps = $defaults['process_steps'];
    $tech_title = get_post_meta($post->ID, 'website_development_tech_title', true) ?: $defaults['tech_title'];
    $tech_description = get_post_meta($post->ID, 'website_development_tech_description', true) ?: $defaults['tech_description'];
    $tech_categories = get_post_meta($post->ID, 'website_development_tech_categories', true);
    if (!is_array($tech_categories) || empty($tech_categories)) $tech_categories = $defaults['tech_categories'];
    $features_title = get_post_meta($post->ID, 'website_development_features_title', true) ?: $defaults['features_title'];
    $features_description = get_post_meta($post->ID, 'website_development_features_description', true) ?: $defaults['features_description'];
    $features = get_post_meta($post->ID, 'website_development_features', true);
    if (!is_array($features) || empty($features)) $features = $defaults['features'];
    $industries_title = get_post_meta($post->ID, 'website_development_industries_title', true) ?: $defaults['industries_title'];
    $industries = get_post_meta($post->ID, 'website_development_industries', true);
    if (!is_array($industries) || empty($industries)) $industries = $defaults['industries'];
    $testimonial_quote = get_post_meta($post->ID, 'website_development_testimonial_quote', true) ?: $defaults['testimonial_quote'];
    $testimonial_name = get_post_meta($post->ID, 'website_development_testimonial_name', true) ?: $defaults['testimonial_name'];
    $testimonial_position = get_post_meta($post->ID, 'website_development_testimonial_position', true) ?: $defaults['testimonial_position'];
    $cta_title = get_post_meta($post->ID, 'website_development_cta_title', true) ?: $defaults['cta_title'];
    $cta_description = get_post_meta($post->ID, 'website_development_cta_description', true) ?: $defaults['cta_description'];
    $cta_primary_text = get_post_meta($post->ID, 'website_development_cta_primary_text', true) ?: $defaults['cta_primary_text'];
    $cta_primary_link = get_post_meta($post->ID, 'website_development_cta_primary_link', true) ?: $defaults['cta_primary_link'];
    $cta_secondary_text = get_post_meta($post->ID, 'website_development_cta_secondary_text', true) ?: $defaults['cta_secondary_text'];
    $cta_secondary_link = get_post_meta($post->ID, 'website_development_cta_secondary_link', true) ?: $defaults['cta_secondary_link'];
    
    ?>
    <div style="margin-bottom:20px;">
        <label><strong>Header Title</strong></label><br>
        <input type="text" name="website_development_header_title" value="<?php echo esc_attr($header_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Header Subtitle</strong></label><br>
        <input type="text" name="website_development_header_subtitle" value="<?php echo esc_attr($header_subtitle); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Header Tags (one per line)</strong></label><br>
        <textarea name="website_development_header_tags" style="width:100%;height:40px;"><?php echo esc_textarea($header_tags); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Overview Title</strong></label><br>
        <input type="text" name="website_development_overview_title" value="<?php echo esc_attr($overview_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Overview Description</strong></label><br>
        <textarea name="website_development_overview_description" style="width:100%;height:80px;"><?php echo esc_textarea($overview_description); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Stats (repeatable: number & label)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($stats)); $i++) {
            $stat = $stats[$i] ?? ['number'=>'','label'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_development_stats[<?php echo $i; ?>][number]" value="<?php echo esc_attr($stat['number']); ?>" placeholder="Stat Number" style="width:48%;margin-right:2%;" />
                <input type="text" name="website_development_stats[<?php echo $i; ?>][label]" value="<?php echo esc_attr($stat['label']); ?>" placeholder="Stat Label" style="width:48%;" />
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-stat">Add Stat</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Title</strong></label><br>
        <input type="text" name="website_development_case_title" value="<?php echo esc_attr($case_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Subtitle</strong></label><br>
        <input type="text" name="website_development_case_subtitle" value="<?php echo esc_attr($case_subtitle); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Description</strong></label><br>
        <textarea name="website_development_case_description" style="width:100%;height:60px;"><?php echo esc_textarea($case_description); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Challenges (one per line)</strong></label><br>
        <textarea name="website_development_case_challenges" style="width:100%;height:60px;"><?php echo esc_textarea($case_challenges); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Solutions (one per line)</strong></label><br>
        <textarea name="website_development_case_solutions" style="width:100%;height:60px;"><?php echo esc_textarea($case_solutions); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Results (repeatable: number & label)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($case_results)); $i++) {
            $result = $case_results[$i] ?? ['number'=>'','label'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_development_case_results[<?php echo $i; ?>][number]" value="<?php echo esc_attr($result['number']); ?>" placeholder="Result Number" style="width:48%;margin-right:2%;" />
                <input type="text" name="website_development_case_results[<?php echo $i; ?>][label]" value="<?php echo esc_attr($result['label']); ?>" placeholder="Result Label" style="width:48%;" />
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-result">Add Result</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Process Title</strong></label><br>
        <input type="text" name="website_development_process_title" value="<?php echo esc_attr($process_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Process Steps (repeatable: title & description)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($process_steps)); $i++) {
            $step = $process_steps[$i] ?? ['title'=>'','description'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_development_process_steps[<?php echo $i; ?>][title]" value="<?php echo esc_attr($step['title']); ?>" placeholder="Step Title" style="width:100%;margin-bottom:3px;" />
                <textarea name="website_development_process_steps[<?php echo $i; ?>][description]" placeholder="Step Description" style="width:100%;height:40px;"><?php echo esc_textarea($step['description']); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-step">Add Step</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Technologies Title</strong></label><br>
        <input type="text" name="website_development_tech_title" value="<?php echo esc_attr($tech_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Technologies Description</strong></label><br>
        <textarea name="website_development_tech_description" style="width:100%;height:40px;"><?php echo esc_textarea($tech_description); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Technology Categories (repeatable: category & tools)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($tech_categories)); $i++) {
            $category = $tech_categories[$i] ?? ['category'=>'','tools'=>[]];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_development_tech_categories[<?php echo $i; ?>][category]" value="<?php echo esc_attr($category['category']); ?>" placeholder="Category Name" style="width:100%;margin-bottom:3px;" />
                <textarea name="website_development_tech_categories[<?php echo $i; ?>][tools]" placeholder="Tools (one per line)" style="width:100%;height:40px;"><?php echo esc_textarea(is_array($category['tools']) ? implode("\n", $category['tools']) : $category['tools']); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-tech-category">Add Category</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Features Title</strong></label><br>
        <input type="text" name="website_development_features_title" value="<?php echo esc_attr($features_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Features Description</strong></label><br>
        <textarea name="website_development_features_description" style="width:100%;height:40px;"><?php echo esc_textarea($features_description); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Features (repeatable: title & description)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($features)); $i++) {
            $feature = $features[$i] ?? ['title'=>'','description'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_development_features[<?php echo $i; ?>][title]" value="<?php echo esc_attr($feature['title']); ?>" placeholder="Feature Title" style="width:100%;margin-bottom:3px;" />
                <textarea name="website_development_features[<?php echo $i; ?>][description]" placeholder="Feature Description" style="width:100%;height:40px;"><?php echo esc_textarea($feature['description']); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-feature">Add Feature</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Industries Title</strong></label><br>
        <input type="text" name="website_development_industries_title" value="<?php echo esc_attr($industries_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Industries (repeatable: title & description)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($industries)); $i++) {
            $industry = $industries[$i] ?? ['title'=>'','description'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_development_industries[<?php echo $i; ?>][title]" value="<?php echo esc_attr($industry['title']); ?>" placeholder="Industry Title" style="width:100%;margin-bottom:3px;" />
                <textarea name="website_development_industries[<?php echo $i; ?>][description]" placeholder="Industry Description" style="width:100%;height:40px;"><?php echo esc_textarea($industry['description']); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-industry">Add Industry</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Testimonial Quote</strong></label><br>
        <textarea name="website_development_testimonial_quote" style="width:100%;height:60px;"><?php echo esc_textarea($testimonial_quote); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Testimonial Name</strong></label><br>
        <input type="text" name="website_development_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Testimonial Position</strong></label><br>
        <input type="text" name="website_development_testimonial_position" value="<?php echo esc_attr($testimonial_position); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Title</strong></label><br>
        <input type="text" name="website_development_cta_title" value="<?php echo esc_attr($cta_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Description</strong></label><br>
        <textarea name="website_development_cta_description" style="width:100%;height:40px;"><?php echo esc_textarea($cta_description); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Primary Button Text</strong></label><br>
        <input type="text" name="website_development_cta_primary_text" value="<?php echo esc_attr($cta_primary_text); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Primary Button Link</strong></label><br>
        <input type="text" name="website_development_cta_primary_link" value="<?php echo esc_attr($cta_primary_link); ?>" placeholder="Leave blank for default contact page" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Secondary Button Text (optional)</strong></label><br>
        <input type="text" name="website_development_cta_secondary_text" value="<?php echo esc_attr($cta_secondary_text); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Secondary Button Link</strong></label><br>
        <input type="text" name="website_development_cta_secondary_link" value="<?php echo esc_attr($cta_secondary_link); ?>" style="width:100%;" />
    </div>
    
    <script>
    jQuery(document).ready(function($) {
        // Add new stat
        $('.add-stat').click(function() {
            var statCount = $('input[name^="website_development_stats"]').length / 2;
            var newStat = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_development_stats[' + statCount + '][number]" placeholder="Stat Number" style="width:48%;margin-right:2%;" />' +
                '<input type="text" name="website_development_stats[' + statCount + '][label]" placeholder="Stat Label" style="width:48%;" />' +
                '</div>';
            $(this).before(newStat);
        });
        
        // Add new result
        $('.add-result').click(function() {
            var resultCount = $('input[name^="website_development_case_results"]').length / 2;
            var newResult = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_development_case_results[' + resultCount + '][number]" placeholder="Result Number" style="width:48%;margin-right:2%;" />' +
                '<input type="text" name="website_development_case_results[' + resultCount + '][label]" placeholder="Result Label" style="width:48%;" />' +
                '</div>';
            $(this).before(newResult);
        });
        
        // Add new step
        $('.add-step').click(function() {
            var stepCount = $('input[name^="website_development_process_steps"]').length;
            var newStep = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_development_process_steps[' + stepCount + '][title]" placeholder="Step Title" style="width:100%;margin-bottom:3px;" />' +
                '<textarea name="website_development_process_steps[' + stepCount + '][description]" placeholder="Step Description" style="width:100%;height:40px;"></textarea>' +
                '</div>';
            $(this).before(newStep);
        });
        
        // Add new tech category
        $('.add-tech-category').click(function() {
            var categoryCount = $('input[name^="website_development_tech_categories"]').length;
            var newCategory = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_development_tech_categories[' + categoryCount + '][category]" placeholder="Category Name" style="width:100%;margin-bottom:3px;" />' +
                '<textarea name="website_development_tech_categories[' + categoryCount + '][tools]" placeholder="Tools (one per line)" style="width:100%;height:40px;"></textarea>' +
                '</div>';
            $(this).before(newCategory);
        });
        
        // Add new feature
        $('.add-feature').click(function() {
            var featureCount = $('input[name^="website_development_features"]').length / 2;
            var newFeature = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_development_features[' + featureCount + '][title]" placeholder="Feature Title" style="width:100%;margin-bottom:3px;" />' +
                '<textarea name="website_development_features[' + featureCount + '][description]" placeholder="Feature Description" style="width:100%;height:40px;"></textarea>' +
                '</div>';
            $(this).before(newFeature);
        });
        
        // Add new industry
        $('.add-industry').click(function() {
            var industryCount = $('input[name^="website_development_industries"]').length;
            var newIndustry = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_development_industries[' + industryCount + '][title]" placeholder="Industry Title" style="width:100%;margin-bottom:3px;" />' +
                '<textarea name="website_development_industries[' + industryCount + '][description]" placeholder="Industry Description" style="width:100%;height:40px;"></textarea>' +
                '</div>';
            $(this).before(newIndustry);
        });
    });
    </script>
    <?php
}

add_action('save_post', function($post_id) {
    if (!isset($_POST['website_development_meta_nonce']) || 
        !wp_verify_nonce($_POST['website_development_meta_nonce'], 'website_development_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_page', $post_id)) return;

    // Save all meta fields
    $fields = [
        'website_development_header_title',
        'website_development_header_subtitle',
        'website_development_header_tags',
        'website_development_overview_title',
        'website_development_overview_description',
        'website_development_stats',
        'website_development_case_title',
        'website_development_case_subtitle',
        'website_development_case_description',
        'website_development_case_challenges',
        'website_development_case_solutions',
        'website_development_case_results',
        'website_development_process_title',
        'website_development_process_steps',
        'website_development_tech_title',
        'website_development_tech_description',
        'website_development_tech_categories',
        'website_development_features_title',
        'website_development_features_description',
        'website_development_features',
        'website_development_industries_title',
        'website_development_industries',
        'website_development_testimonial_quote',
        'website_development_testimonial_name',
        'website_development_testimonial_position',
        'website_development_cta_title',
        'website_development_cta_description',
        'website_development_cta_primary_text',
        'website_development_cta_primary_link',
        'website_development_cta_secondary_text',
        'website_development_cta_secondary_link'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            // Handle array fields specially
            if (strpos($field, '_stats') !== false ||
                strpos($field, '_results') !== false ||
                strpos($field, '_steps') !== false ||
                strpos($field, '_categories') !== false ||
                strpos($field, '_features') !== false ||
                strpos($field, '_industries') !== false) {
                // Process array fields
                $value = $_POST[$field];
                if (is_array($value)) {
                    // For tech categories, convert tools from newline-separated to array
                    if (strpos($field, '_categories') !== false) {
                        foreach ($value as &$category) {
                            if (isset($category['tools']) && is_string($category['tools'])) {
                                $category['tools'] = array_filter(explode("\n", trim($category['tools'])));
                            }
                        }
                    }
                    update_post_meta($post_id, $field, $value);
                }
            } elseif (strpos($field, '_challenges') !== false || strpos($field, '_solutions') !== false) {
                // Convert newline-separated to array for challenges and solutions
                $value = array_filter(explode("\n", trim($_POST[$field])));
                update_post_meta($post_id, $field, $value);
            } elseif (strpos($field, '_tags') !== false) {
                // Convert newline-separated to array for tags
                $value = array_filter(explode("\n", trim($_POST[$field])));
                update_post_meta($post_id, $field, $value);
            } else {
                // Regular text fields
                update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
            }
        }
    }
});
