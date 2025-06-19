<?php
// Meta fields for Website Design page

// Function to get default values for website design page
function get_website_design_defaults() {
    return array(
        'header_title' => 'Custom Website Design',
        'header_subtitle' => 'Beautiful, conversion-focused websites that perfectly represent your brand and drive measurable business results.',
        'header_stats' => array(
            array('number' => '285%', 'label' => 'Average Engagement Increase'),
            array('number' => '95%', 'label' => 'Client Satisfaction Rate'),
            array('number' => '2.1s', 'label' => 'Average Load Time')
        ),
        'header_cta_primary_text' => 'Get Design Quote',
        'header_cta_primary_link' => '#contact',
        'header_cta_secondary_text' => 'View Portfolio',
        'header_cta_secondary_link' => '#portfolio',
        'overview_title' => 'Websites That Work As Hard As You Do',
        'overview_description' => 'Our custom website design service creates powerful digital experiences that not only look stunning but convert visitors into customers. Every design decision is backed by user experience research and conversion optimisation principles.',
        'features' => array(
            array('title' => 'Brand-Aligned Design', 'description' => 'Custom designs that perfectly reflect your brand identity and values across every element.'),
            array('title' => 'Mobile-First Approach', 'description' => 'Responsive designs optimised for all devices with emphasis on mobile user experience.'),
            array('title' => 'Conversion optimisation', 'description' => 'Every element designed to guide visitors toward your desired actions and business goals.'),
            array('title' => 'SEO Foundation', 'description' => 'Built-in SEO best practices ensuring your website ranks well from day one.')
        ),        'case_study_title' => 'Case Study',
        'case_study_subtitle' => 'How Premium Home Services Increased Lead Generation by 300%',
        'case_study_challenge_title' => 'The Challenge',
        'case_study_challenge_description' => 'Premium Home Services had an outdated website that looked unprofessional and failed to generate quality leads. Their bounce rate was 78%, and they were losing potential customers to competitors with better online presence.',
        'case_study_challenge_stats' => array(
            array('number' => '78%', 'label' => 'Bounce Rate'),
            array('number' => '3', 'label' => 'Leads per Month')
        ),
        'case_study_solution_title' => 'Our Solution',
        'case_study_solutions' => "Complete Visual Redesign: Modern, professional design reflecting premium brand positioning\nService Showcase: Comprehensive service pages with before/after galleries\nTrust Building: Testimonials, certifications, and social proof integration\nLead Capture: Strategic contact forms and clear call-to-action placement\nMobile optimisation: Seamless experience across all devices",
        'case_study_results_title' => 'The Results',
        'case_study_results' => array(
            array('number' => '300%', 'label' => 'Increase in Monthly Leads'),
            array('number' => '65%', 'label' => 'Reduction in Bounce Rate'),
            array('number' => '285%', 'label' => 'Increase in Session Duration'),
            array('number' => '£180K', 'label' => 'Additional Annual Revenue')
        ),
        'process_title' => 'Our Website Design Process',
        'process_steps' => array(
            array('title' => 'Discovery & Research', 'description' => 'Deep dive into your business, target audience, competitors, and goals to inform the design strategy.'),
            array('title' => 'Strategy & Planning', 'description' => 'Create detailed site maps, user journeys, and conversion funnels to optimise user experience.'),
            array('title' => 'Wireframing & UX', 'description' => 'Develop wireframes and user experience architecture focusing on usability and conversion paths.'),
            array('title' => 'Visual Design', 'description' => 'Create stunning visual designs that align with your brand and appeal to your target audience.'),
            array('title' => 'Development & Testing', 'description' => 'Build responsive, fast-loading website with thorough testing across devices and browsers.'),
            array('title' => 'Launch & optimisation', 'description' => 'Strategic launch with performance monitoring and ongoing optimisation for better results.')
        ),
        'packages_title' => 'Website Design Packages',
        'packages_subtitle' => 'Choose the perfect package for your business needs and budget.',
        'packages' => array(
            array(
                'name' => 'Business Website',
                'price' => '£2,997',
                'description' => 'Perfect for small businesses',
                'features' => array(
                    '5-page custom website',
                    'Mobile-responsive design',
                    'Contact form integration',
                    'Basic SEO optimisation',
                    'Google Analytics setup',
                    '2 rounds of revisions',
                    '3-week delivery',
                    '30 days support'
                ),
                'cta_text' => 'Get Started',
                'popular' => false
            ),
            array(
                'name' => 'Professional Website',
                'price' => '£5,997',
                'description' => 'Ideal for growing companies',
                'features' => array(
                    '10-page custom website',
                    'Advanced mobile optimisation',
                    'Lead generation forms',
                    'Advanced SEO optimisation',
                    'Analytics & tracking setup',
                    'Blog setup & integration',
                    '3 rounds of revisions',
                    '4-week delivery',
                    '60 days support',
                    'Performance optimisation'
                ),
                'cta_text' => 'Get Started',
                'popular' => true
            ),
            array(
                'name' => 'Enterprise Website',
                'price' => '£9,997',
                'description' => 'For large organisations',
                'features' => array(
                    'Unlimited pages',
                    'Custom functionality',
                    'Advanced integrations',
                    'Conversion optimisation',
                    'Multi-language support',
                    'Advanced analytics',
                    'Unlimited revisions',
                    '6-week delivery',
                    '90 days support',
                    'Priority support',
                    'Ongoing maintenance'
                ),
                'cta_text' => 'Get Started',
                'popular' => false
            )
        ),
        'tools_title' => 'Design Tools & Technologies',
        'tools_categories' => array(
            array('category' => 'Design Tools', 'tools' => array('Figma', 'Adobe XD', 'Sketch', 'Adobe Creative Suite', 'InVision', 'Principle')),
            array('category' => 'Development', 'tools' => array('WordPress', 'Webflow', 'React.js', 'HTML5/CSS3', 'JavaScript', 'PHP')),
            array('category' => 'optimisation', 'tools' => array('Google PageSpeed', 'GTmetrix', 'Hotjar', 'Google Analytics', 'A/B Testing Tools', 'SEO Auditing'))
        ),
        'testimonials_title' => 'What Our Clients Say',
        'testimonials' => array(
            array('quote' => 'The new website completely transformed our online presence. We\'re getting 4x more leads and our conversion rate has tripled.', 'name' => 'Mark Johnson', 'position' => 'CEO, Premium Home Services'),
            array('quote' => 'Aimpro delivered a stunning website that perfectly captures our brand. The design process was smooth and professional.', 'name' => 'Sarah Williams', 'position' => 'Marketing Director, TechFlow'),
            array('quote' => 'Not only does our website look amazing, but it\'s also converting visitors into customers at a rate we never thought possible.', 'name' => 'David Chen', 'position' => 'Founder, InnovateCorps')
        ),
        'faq_title' => 'Frequently Asked Questions',
        'faqs' => array(
            array('question' => 'How long does website design take?', 'answer' => 'Timeline varies by complexity: 3 weeks for Business, 4 weeks for Professional, and 6 weeks for Enterprise packages. We provide detailed project timelines during consultation.'),
            array('question' => 'Do you provide content writing?', 'answer' => 'Yes, we offer professional copywriting services optimised for conversions and SEO. This can be added to any package or purchased separately.'),
            array('question' => 'Will my website be mobile-friendly?', 'answer' => 'Absolutely! All our websites are built with a mobile-first approach and are fully responsive across all devices and screen sizes.'),
            array('question' => 'Can you redesign my existing website?', 'answer' => 'Yes, we specialise in website redesigns. We can work with your existing content and improve the design, functionality, and performance.'),
            array('question' => 'Do you provide ongoing maintenance?', 'answer' => 'Yes, we offer maintenance packages for security updates, content changes, and performance optimisation. This ensures your website stays current and secure.'),
            array('question' => 'What if I need changes after launch?', 'answer' => 'All packages include a support period for minor changes. For major updates, we offer affordable maintenance packages or project-based updates.')
        )
    );
}

add_action('add_meta_boxes', function() {
    global $post;
    
    // Check if this is the right page/template
    if (!$post || $post->post_type !== 'page') return;
    
    $template = get_page_template_slug($post->ID);
    $page_slug = get_post_field('post_name', $post->ID);
    
    // Show meta box only for website design template/page
    if ($template === 'page-website-design.php' || 
        $page_slug === 'website-design' || 
        $page_slug === 'custom-website-design') {
        add_meta_box(
            'website_design_meta', 
            'Website Design Page Content', 
            'website_design_meta_callback', 
            'page', 
            'normal', 
            'high'
        );
    }
});

function website_design_meta_callback($post) {
    wp_nonce_field('website_design_meta', 'website_design_meta_nonce');
    
    // Default values
    $defaults = get_website_design_defaults();
    
    // Get current values or use defaults
    $header_title = get_post_meta($post->ID, 'website_design_header_title', true) ?: $defaults['header_title'];
    $header_subtitle = get_post_meta($post->ID, 'website_design_header_subtitle', true) ?: $defaults['header_subtitle'];
    $header_stats = get_post_meta($post->ID, 'website_design_header_stats', true);
    if (!is_array($header_stats) || empty($header_stats)) $header_stats = $defaults['header_stats'];
    $header_cta_primary_text = get_post_meta($post->ID, 'website_design_header_cta_primary_text', true) ?: $defaults['header_cta_primary_text'];
    $header_cta_primary_link = get_post_meta($post->ID, 'website_design_header_cta_primary_link', true) ?: $defaults['header_cta_primary_link'];
    $header_cta_secondary_text = get_post_meta($post->ID, 'website_design_header_cta_secondary_text', true) ?: $defaults['header_cta_secondary_text'];
    $header_cta_secondary_link = get_post_meta($post->ID, 'website_design_header_cta_secondary_link', true) ?: $defaults['header_cta_secondary_link'];
    $overview_title = get_post_meta($post->ID, 'website_design_overview_title', true) ?: $defaults['overview_title'];
    $overview_description = get_post_meta($post->ID, 'website_design_overview_description', true) ?: $defaults['overview_description'];
    $features = get_post_meta($post->ID, 'website_design_features', true);
    if (!is_array($features) || empty($features)) $features = $defaults['features'];
    $case_study_title = get_post_meta($post->ID, 'website_design_case_study_title', true) ?: $defaults['case_study_title'];
    $case_study_subtitle = get_post_meta($post->ID, 'website_design_case_study_subtitle', true) ?: $defaults['case_study_subtitle'];
    $case_study_challenge_title = get_post_meta($post->ID, 'website_design_case_study_challenge_title', true) ?: $defaults['case_study_challenge_title'];
    $case_study_challenge_description = get_post_meta($post->ID, 'website_design_case_study_challenge_description', true) ?: $defaults['case_study_challenge_description'];
    $case_study_challenge_stats = get_post_meta($post->ID, 'website_design_case_study_challenge_stats', true);
    if (!is_array($case_study_challenge_stats) || empty($case_study_challenge_stats)) $case_study_challenge_stats = $defaults['case_study_challenge_stats'];
    $case_study_solution_title = get_post_meta($post->ID, 'website_design_case_study_solution_title', true) ?: $defaults['case_study_solution_title'];
    $case_study_solutions = get_post_meta($post->ID, 'website_design_case_study_solutions', true) ?: $defaults['case_study_solutions'];
    $case_study_results_title = get_post_meta($post->ID, 'website_design_case_study_results_title', true) ?: $defaults['case_study_results_title'];
    $case_study_results = get_post_meta($post->ID, 'website_design_case_study_results', true);
    if (!is_array($case_study_results) || empty($case_study_results)) $case_study_results = $defaults['case_study_results'];
    $process_title = get_post_meta($post->ID, 'website_design_process_title', true) ?: $defaults['process_title'];
    $process_steps = get_post_meta($post->ID, 'website_design_process_steps', true);
    if (!is_array($process_steps) || empty($process_steps)) $process_steps = $defaults['process_steps'];
    $packages_title = get_post_meta($post->ID, 'website_design_packages_title', true) ?: $defaults['packages_title'];
    $packages_subtitle = get_post_meta($post->ID, 'website_design_packages_subtitle', true) ?: $defaults['packages_subtitle'];
    $packages = get_post_meta($post->ID, 'website_design_packages', true);
    if (!is_array($packages) || empty($packages)) $packages = $defaults['packages'];
    $tools_title = get_post_meta($post->ID, 'website_design_tools_title', true) ?: $defaults['tools_title'];
    $tools_categories = get_post_meta($post->ID, 'website_design_tools_categories', true);
    if (!is_array($tools_categories) || empty($tools_categories)) $tools_categories = $defaults['tools_categories'];
    $testimonials_title = get_post_meta($post->ID, 'website_design_testimonials_title', true) ?: $defaults['testimonials_title'];
    $testimonials = get_post_meta($post->ID, 'website_design_testimonials', true);
    if (!is_array($testimonials) || empty($testimonials)) $testimonials = $defaults['testimonials'];
    $faq_title = get_post_meta($post->ID, 'website_design_faq_title', true) ?: $defaults['faq_title'];
    $faqs = get_post_meta($post->ID, 'website_design_faqs', true);
    if (!is_array($faqs) || empty($faqs)) $faqs = $defaults['faqs'];
    
    ?>
    <div style="margin-bottom:20px;">
        <label><strong>Header Title</strong></label><br>
        <input type="text" name="website_design_header_title" value="<?php echo esc_attr($header_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Header Subtitle</strong></label><br>
        <textarea name="website_design_header_subtitle" style="width:100%;height:60px;"><?php echo esc_textarea($header_subtitle); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Header Stats (repeatable: number & label)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($header_stats)); $i++) {
            $stat = $header_stats[$i] ?? ['number'=>'','label'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_design_header_stats[<?php echo $i; ?>][number]" value="<?php echo esc_attr($stat['number']); ?>" placeholder="Stat Number" style="width:48%;margin-right:2%;" />
                <input type="text" name="website_design_header_stats[<?php echo $i; ?>][label]" value="<?php echo esc_attr($stat['label']); ?>" placeholder="Stat Label" style="width:48%;" />
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-header-stat">Add Stat</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Primary CTA Text</strong></label><br>
        <input type="text" name="website_design_header_cta_primary_text" value="<?php echo esc_attr($header_cta_primary_text); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Primary CTA Link</strong></label><br>
        <input type="text" name="website_design_header_cta_primary_link" value="<?php echo esc_attr($header_cta_primary_link); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Secondary CTA Text</strong></label><br>
        <input type="text" name="website_design_header_cta_secondary_text" value="<?php echo esc_attr($header_cta_secondary_text); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Secondary CTA Link</strong></label><br>
        <input type="text" name="website_design_header_cta_secondary_link" value="<?php echo esc_attr($header_cta_secondary_link); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Overview Title</strong></label><br>
        <input type="text" name="website_design_overview_title" value="<?php echo esc_attr($overview_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Overview Description</strong></label><br>
        <textarea name="website_design_overview_description" style="width:100%;height:80px;"><?php echo esc_textarea($overview_description); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Features (repeatable: title & description)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($features)); $i++) {
            $feature = $features[$i] ?? ['title'=>'','description'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_design_features[<?php echo $i; ?>][title]" value="<?php echo esc_attr($feature['title']); ?>" placeholder="Feature Title" style="width:100%;margin-bottom:3px;" />
                <textarea name="website_design_features[<?php echo $i; ?>][description]" placeholder="Feature Description" style="width:100%;height:40px;"><?php echo esc_textarea($feature['description']); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-feature">Add Feature</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Title</strong></label><br>
        <input type="text" name="website_design_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Subtitle</strong></label><br>
        <input type="text" name="website_design_case_study_subtitle" value="<?php echo esc_attr($case_study_subtitle); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Challenge Title</strong></label><br>
        <input type="text" name="website_design_case_study_challenge_title" value="<?php echo esc_attr($case_study_challenge_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Challenge Description</strong></label><br>
        <textarea name="website_design_case_study_challenge_description" style="width:100%;height:60px;"><?php echo esc_textarea($case_study_challenge_description); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Challenge Stats (repeatable: number & label)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($case_study_challenge_stats)); $i++) {
            $stat = $case_study_challenge_stats[$i] ?? ['number'=>'','label'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_design_case_study_challenge_stats[<?php echo $i; ?>][number]" value="<?php echo esc_attr($stat['number']); ?>" placeholder="Stat Number" style="width:48%;margin-right:2%;" />
                <input type="text" name="website_design_case_study_challenge_stats[<?php echo $i; ?>][label]" value="<?php echo esc_attr($stat['label']); ?>" placeholder="Stat Label" style="width:48%;" />
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-challenge-stat">Add Challenge Stat</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Solution Title</strong></label><br>
        <input type="text" name="website_design_case_study_solution_title" value="<?php echo esc_attr($case_study_solution_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Solutions (one per line)</strong></label><br>
        <textarea name="website_design_case_study_solutions" style="width:100%;height:80px;"><?php echo esc_textarea($case_study_solutions); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Results Title</strong></label><br>
        <input type="text" name="website_design_case_study_results_title" value="<?php echo esc_attr($case_study_results_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Results (repeatable: number & label)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($case_study_results)); $i++) {
            $result = $case_study_results[$i] ?? ['number'=>'','label'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_design_case_study_results[<?php echo $i; ?>][number]" value="<?php echo esc_attr($result['number']); ?>" placeholder="Result Number" style="width:48%;margin-right:2%;" />
                <input type="text" name="website_design_case_study_results[<?php echo $i; ?>][label]" value="<?php echo esc_attr($result['label']); ?>" placeholder="Result Label" style="width:48%;" />
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-result">Add Result</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Process Title</strong></label><br>
        <input type="text" name="website_design_process_title" value="<?php echo esc_attr($process_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Process Steps (repeatable: title & description)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($process_steps)); $i++) {
            $step = $process_steps[$i] ?? ['title'=>'','description'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_design_process_steps[<?php echo $i; ?>][title]" value="<?php echo esc_attr($step['title']); ?>" placeholder="Step Title" style="width:100%;margin-bottom:3px;" />
                <textarea name="website_design_process_steps[<?php echo $i; ?>][description]" placeholder="Step Description" style="width:100%;height:40px;"><?php echo esc_textarea($step['description']); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-step">Add Step</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Packages Title</strong></label><br>
        <input type="text" name="website_design_packages_title" value="<?php echo esc_attr($packages_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Packages Subtitle</strong></label><br>
        <input type="text" name="website_design_packages_subtitle" value="<?php echo esc_attr($packages_subtitle); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Packages (complex repeatable)</strong></label><br>
        <p><em>Note: This is a complex field. For full package editing, consider using a dedicated interface.</em></p>
        <textarea name="website_design_packages_json" style="width:100%;height:120px;" placeholder="JSON format for packages"><?php echo esc_textarea(json_encode($packages, JSON_PRETTY_PRINT)); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Tools Title</strong></label><br>
        <input type="text" name="website_design_tools_title" value="<?php echo esc_attr($tools_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Tool Categories (repeatable: category & tools)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($tools_categories)); $i++) {
            $category = $tools_categories[$i] ?? ['category'=>'','tools'=>[]];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_design_tools_categories[<?php echo $i; ?>][category]" value="<?php echo esc_attr($category['category']); ?>" placeholder="Category Name" style="width:100%;margin-bottom:3px;" />
                <textarea name="website_design_tools_categories[<?php echo $i; ?>][tools]" placeholder="Tools (one per line)" style="width:100%;height:40px;"><?php echo esc_textarea(is_array($category['tools']) ? implode("\n", $category['tools']) : $category['tools']); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-tool-category">Add Tool Category</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Testimonials Title</strong></label><br>
        <input type="text" name="website_design_testimonials_title" value="<?php echo esc_attr($testimonials_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Testimonials (repeatable: quote, name & position)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($testimonials)); $i++) {
            $testimonial = $testimonials[$i] ?? ['quote'=>'','name'=>'','position'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <textarea name="website_design_testimonials[<?php echo $i; ?>][quote]" placeholder="Testimonial Quote" style="width:100%;height:60px;margin-bottom:3px;"><?php echo esc_textarea($testimonial['quote']); ?></textarea>
                <input type="text" name="website_design_testimonials[<?php echo $i; ?>][name]" value="<?php echo esc_attr($testimonial['name']); ?>" placeholder="Name" style="width:48%;margin-right:2%;" />
                <input type="text" name="website_design_testimonials[<?php echo $i; ?>][position]" value="<?php echo esc_attr($testimonial['position']); ?>" placeholder="Position" style="width:48%;" />
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-testimonial">Add Testimonial</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>FAQ Title</strong></label><br>
        <input type="text" name="website_design_faq_title" value="<?php echo esc_attr($faq_title); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>FAQs (repeatable: question & answer)</strong></label><br>
        <?php
        for ($i = 0; $i < max(1, count($faqs)); $i++) {
            $faq = $faqs[$i] ?? ['question'=>'','answer'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="website_design_faqs[<?php echo $i; ?>][question]" value="<?php echo esc_attr($faq['question']); ?>" placeholder="FAQ Question" style="width:100%;margin-bottom:3px;" />
                <textarea name="website_design_faqs[<?php echo $i; ?>][answer]" placeholder="FAQ Answer" style="width:100%;height:60px;"><?php echo esc_textarea($faq['answer']); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-faq">Add FAQ</button>
    </div>
    
    <script>
    jQuery(document).ready(function($) {
        // Add new header stat
        $('.add-header-stat').click(function() {
            var statCount = $('input[name^="website_design_header_stats"]').length / 2;
            var newStat = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_design_header_stats[' + statCount + '][number]" placeholder="Stat Number" style="width:48%;margin-right:2%;" />' +
                '<input type="text" name="website_design_header_stats[' + statCount + '][label]" placeholder="Stat Label" style="width:48%;" />' +
                '</div>';
            $(this).before(newStat);
        });
        
        // Add new feature
        $('.add-feature').click(function() {
            var featureCount = $('input[name^="website_design_features"]').length;
            var newFeature = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_design_features[' + featureCount + '][title]" placeholder="Feature Title" style="width:100%;margin-bottom:3px;" />' +
                '<textarea name="website_design_features[' + featureCount + '][description]" placeholder="Feature Description" style="width:100%;height:40px;"></textarea>' +
                '</div>';
            $(this).before(newFeature);
        });
        
        // Add new challenge stat
        $('.add-challenge-stat').click(function() {
            var statCount = $('input[name^="website_design_case_study_challenge_stats"]').length / 2;
            var newStat = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_design_case_study_challenge_stats[' + statCount + '][number]" placeholder="Stat Number" style="width:48%;margin-right:2%;" />' +
                '<input type="text" name="website_design_case_study_challenge_stats[' + statCount + '][label]" placeholder="Stat Label" style="width:48%;" />' +
                '</div>';
            $(this).before(newStat);
        });
        
        // Add new result
        $('.add-result').click(function() {
            var resultCount = $('input[name^="website_design_case_study_results"]').length / 2;
            var newResult = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_design_case_study_results[' + resultCount + '][number]" placeholder="Result Number" style="width:48%;margin-right:2%;" />' +
                '<input type="text" name="website_design_case_study_results[' + resultCount + '][label]" placeholder="Result Label" style="width:48%;" />' +
                '</div>';
            $(this).before(newResult);
        });
        
        // Add new step
        $('.add-step').click(function() {
            var stepCount = $('input[name^="website_design_process_steps"]').length;
            var newStep = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_design_process_steps[' + stepCount + '][title]" placeholder="Step Title" style="width:100%;margin-bottom:3px;" />' +
                '<textarea name="website_design_process_steps[' + stepCount + '][description]" placeholder="Step Description" style="width:100%;height:40px;"></textarea>' +
                '</div>';
            $(this).before(newStep);
        });
        
        // Add new tool category
        $('.add-tool-category').click(function() {
            var categoryCount = $('input[name^="website_design_tools_categories"]').length;
            var newCategory = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_design_tools_categories[' + categoryCount + '][category]" placeholder="Category Name" style="width:100%;margin-bottom:3px;" />' +
                '<textarea name="website_design_tools_categories[' + categoryCount + '][tools]" placeholder="Tools (one per line)" style="width:100%;height:40px;"></textarea>' +
                '</div>';
            $(this).before(newCategory);
        });
        
        // Add new testimonial
        $('.add-testimonial').click(function() {
            var testimonialCount = $('textarea[name^="website_design_testimonials"]').length / 3;
            var newTestimonial = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<textarea name="website_design_testimonials[' + testimonialCount + '][quote]" placeholder="Testimonial Quote" style="width:100%;height:60px;margin-bottom:3px;"></textarea>' +
                '<input type="text" name="website_design_testimonials[' + testimonialCount + '][name]" placeholder="Name" style="width:48%;margin-right:2%;" />' +
                '<input type="text" name="website_design_testimonials[' + testimonialCount + '][position]" placeholder="Position" style="width:48%;" />' +
                '</div>';
            $(this).before(newTestimonial);
        });
        
        // Add new FAQ
        $('.add-faq').click(function() {
            var faqCount = $('input[name^="website_design_faqs"]').length;
            var newFaq = '<div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">' +
                '<input type="text" name="website_design_faqs[' + faqCount + '][question]" placeholder="FAQ Question" style="width:100%;margin-bottom:3px;" />' +
                '<textarea name="website_design_faqs[' + faqCount + '][answer]" placeholder="FAQ Answer" style="width:100%;height:60px;"></textarea>' +
                '</div>';
            $(this).before(newFaq);
        });
    });
    </script>
    <?php
}

add_action('save_post', function($post_id) {
    if (!isset($_POST['website_design_meta_nonce']) || 
        !wp_verify_nonce($_POST['website_design_meta_nonce'], 'website_design_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_page', $post_id)) return;

    // Save all meta fields
    $fields = [
        'website_design_header_title',
        'website_design_header_subtitle',
        'website_design_header_stats',
        'website_design_header_cta_primary_text',
        'website_design_header_cta_primary_link',
        'website_design_header_cta_secondary_text',
        'website_design_header_cta_secondary_link',
        'website_design_overview_title',
        'website_design_overview_description',
        'website_design_features',
        'website_design_case_study_title',
        'website_design_case_study_subtitle',
        'website_design_case_study_challenge_title',
        'website_design_case_study_challenge_description',
        'website_design_case_study_challenge_stats',
        'website_design_case_study_solution_title',
        'website_design_case_study_solutions',
        'website_design_case_study_results_title',
        'website_design_case_study_results',
        'website_design_process_title',
        'website_design_process_steps',
        'website_design_packages_title',
        'website_design_packages_subtitle',
        'website_design_tools_title',
        'website_design_tools_categories',
        'website_design_testimonials_title',
        'website_design_testimonials',
        'website_design_faq_title',
        'website_design_faqs'
    ];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, $_POST[$field]);
        }
    }

    // Handle JSON packages field
    if (isset($_POST['website_design_packages_json'])) {
        $packages_data = json_decode(stripslashes($_POST['website_design_packages_json']), true);
        if ($packages_data) {
            update_post_meta($post_id, 'website_design_packages', $packages_data);
        }
    }

    // Handle tool categories conversion
    if (isset($_POST['website_design_tools_categories'])) {
        $categories = $_POST['website_design_tools_categories'];
        foreach ($categories as &$category) {
            if (isset($category['tools']) && is_string($category['tools'])) {
                $category['tools'] = array_filter(explode("\n", trim($category['tools'])));
            }
        }
        update_post_meta($post_id, 'website_design_tools_categories', $categories);
    }
});
