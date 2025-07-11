<?php
// Meta fields for White Label PPC page

// Function to get default values for white label ppc page
function get_white_label_ppc_defaults() {
    return array(
        'header_title' => 'White Label PPC Services for Agencies',
        'header_subtitle' => 'Scale your agency\'s PPC offerings without hiring specialists. Our white label PPC management delivers exceptional results under your brand name while you focus on client relationships.',
        'header_stats' => array(
            array('number' => '150+', 'label' => 'Agency Partners'),
            array('number' => '£2.3M', 'label' => 'Monthly Ad Spend Managed'),
            array('number' => '24hrs', 'label' => 'Average Response Time')
        ),
        'header_cta_primary_text' => 'Partner With Us',
        'header_cta_primary_link' => '#contact',
        'header_cta_secondary_text' => 'View Partnership Plans',
        'header_cta_secondary_link' => '#packages',
        'overview_title' => 'Complete White Label PPC Solutions',
        'overview_description' => 'Expand your service offerings and increase revenue without the overhead of hiring PPC specialists. Our white label PPC services are delivered seamlessly under your agency\'s brand, allowing you to focus on what you do best while we handle the technical expertise.',
        'services' => array(
            array('icon' => 'fas fa-user-secret', 'title' => 'Invisible Partnership', 'description' => 'Complete white label service with no Aimpro branding. Your clients never know we exist - all work appears to come from your agency.'),
            array('icon' => 'fas fa-search', 'title' => 'Full Campaign Management', 'description' => 'End-to-end PPC management including Google Ads, Meta Ads, Microsoft Ads, and other platforms under your brand.'),
            array('icon' => 'fas fa-chart-bar', 'title' => 'Branded Reporting', 'description' => 'Comprehensive performance reports featuring your agency\'s branding, logo, and contact information.'),
            array('icon' => 'fas fa-headset', 'title' => 'Client Communication Support', 'description' => 'Handle client questions and strategy calls on your behalf, always representing your agency professionally.'),
            array('icon' => 'fas fa-graduation-cap', 'title' => 'Team Training', 'description' => 'Optional training for your team members to understand PPC basics and communicate effectively with clients.'),
            array('icon' => 'fas fa-rocket', 'title' => 'Rapid Scaling', 'description' => 'Take on unlimited PPC clients without hiring, training, or managing additional staff members.')
        ),
        'benefits_title' => 'Why Partner With Aimpro?',
        'benefits' => array(
            array('number' => '01', 'title' => 'Proven Expertise', 'description' => 'Our team manages over £2.3M in monthly ad spend with average ROI improvements of 285% for agency clients.'),
            array('number' => '02', 'title' => 'Complete Transparency', 'description' => 'Full access to campaign data, regular strategy calls, and detailed explanations of all optimisations and decisions.'),
            array('number' => '03', 'title' => 'Fast Turnaround', 'description' => 'New campaigns launched within 48 hours, with 24-hour response time for urgent requests and client needs.'),
            array('number' => '04', 'title' => 'Flexible Partnership', 'description' => 'Scale up or down as needed, with no long-term contracts or minimum client requirements.')
        ),
        'case_study_title' => 'Case Study: Digital Agency Partnership',
        'case_study_subtitle' => 'How we helped a growing digital agency increase their revenue by 240% in 8 months by offering comprehensive PPC services through our white label partnership.',
        'case_study_challenge_title' => 'The Challenge',
        'case_study_challenge_description' => 'A 12-person digital agency was losing potential clients who needed PPC services. They had the design and development expertise but lacked PPC specialists. Hiring would be expensive and risky, but turning down work was hurting growth.',
        'case_study_solution_title' => 'Our Partnership Solution',
        'case_study_solutions' => "Provided complete white label PPC management for their existing clients\nCreated branded reporting templates matching their visual identity\nTrained their account managers on PPC basics for client communication\nEstablished seamless handoff process for new PPC prospects\nDelivered monthly strategy sessions to support their client relationships",
        'case_study_results_title' => 'Partnership Results',
        'case_study_results' => array(
            array('number' => '240%', 'label' => 'Agency Revenue Increase'),
            array('number' => '35', 'label' => 'New PPC Clients Added'),
            array('number' => '£180K', 'label' => 'Additional Annual Revenue'),
            array('number' => '98%', 'label' => 'Client Retention Rate')
        ),
        'process_title' => 'Our Partnership Process',
        'process_steps' => array(
            array('title' => 'Partnership Setup', 'description' => 'Initial consultation to understand your agency\'s needs, client base, and service requirements. Setup branded reporting and communication protocols.'),
            array('title' => 'Team Integration', 'description' => 'Train your account managers on PPC basics and establish seamless handoff procedures for new clients and ongoing communication.'),
            array('title' => 'Client Onboarding', 'description' => 'Smooth transition of existing clients or onboarding of new PPC prospects with full campaign setup and strategy development.'),
            array('title' => 'Ongoing Management', 'description' => 'Daily campaign optimisation, weekly performance monitoring, and monthly strategy reviews to ensure optimal results.'),
            array('title' => 'Growth & Scaling', 'description' => 'Regular partnership reviews and strategy sessions to identify new opportunities and scale your PPC service offerings.')
        ),
        'packages_title' => 'White Label Partnership Plans',
        'packages' => array(
            array(
                'name' => 'Starter Partnership',
                'price' => '15%',
                'price_suffix' => ' revenue share',
                'features' => array(
                    'Up to 5 PPC clients',
                    'Google & Meta Ads management',
                    'Branded monthly reports',
                    'Email support',
                    'Basic team training',
                    'Client communication support',
                    '48-hour setup time'
                ),
                'cta_text' => 'Start Partnership',
                'popular' => false
            ),
            array(
                'name' => 'Growth Partnership',
                'price' => '12%',
                'price_suffix' => ' revenue share',
                'features' => array(
                    'Up to 15 PPC clients',
                    'All major PPC platforms',
                    'Custom branded materials',
                    'Priority support',
                    'Advanced team training',
                    'Monthly strategy calls',
                    'Dedicated account manager'
                ),
                'cta_text' => 'Start Partnership',
                'popular' => true
            ),
            array(
                'name' => 'Enterprise Partnership',
                'price' => '10%',
                'price_suffix' => ' revenue share',
                'features' => array(
                    'Unlimited PPC clients',
                    'Full service platform coverage',
                    'Co-branded marketing materials',
                    '24/7 priority support',
                    'On-site team training',
                    'Weekly partnership reviews',
                    'Exclusive territory rights'
                ),
                'cta_text' => 'Start Partnership',
                'popular' => false
            )
        ),
        'included_title' => 'What\'s Included in Every Partnership',
        'included_benefits' => array(
            array('icon' => 'fas fa-cogs', 'title' => 'Campaign Setup & Management', 'description' => 'Complete campaign architecture, keyword research, ad creation, and ongoing optimisation across all platforms.'),
            array('icon' => 'fas fa-chart-bar', 'title' => 'Branded Reporting', 'description' => 'Monthly performance reports featuring your agency\'s branding, delivered directly to your clients or to you for forwarding.'),
            array('icon' => 'fas fa-phone', 'title' => 'Client Call Support', 'description' => 'We can join client calls as your "PPC specialist" or provide talking points and strategy for your team to present.'),
            array('icon' => 'fas fa-shield-alt', 'title' => 'Performance Guarantee', 'description' => 'We guarantee improved performance within 90 days or provide additional optimisation at no charge.')
        ),
        'agency_types_title' => 'Perfect for These Agency Types',
        'agency_types' => array(
            array('title' => 'Design & Branding Agencies', 'description' => 'Add PPC services to complement your creative offerings and increase client lifetime value.'),
            array('title' => 'Web Development Companies', 'description' => 'Offer marketing services to drive traffic to the websites you build for clients.'),
            array('title' => 'SEO Agencies', 'description' => 'Provide immediate results while your SEO strategies gain momentum over time.'),
            array('title' => 'Content Marketing Agencies', 'description' => 'Amplify your content reach and drive conversions through targeted advertising.'),
            array('title' => 'Social Media Agencies', 'description' => 'Expand beyond organic social to include paid advertising and search marketing.'),
            array('title' => 'Full-Service Marketing', 'description' => 'Complete your service offerings without the overhead of specialised PPC staff.')
        ),
        'testimonial_quote' => 'Partnering with Aimpro for white label PPC was the best decision we made. We\'ve added 35 new clients and increased our revenue by 240% in just 8 months. Our clients love the results and have no idea we\'re not handling it internally.',
        'testimonial_name' => 'Rachel Foster',
        'testimonial_position' => 'Agency Director, Creative Solutions Co.',
        'cta_section_title' => 'Ready to Scale Your Agency\'s PPC Services?',
        'cta_section_description' => 'Stop turning down PPC opportunities. Partner with us to offer world-class PPC management under your brand and start growing your revenue immediately. No hiring, no training, no overhead.',
        'cta_section_button_text' => 'Start Partnership'
    );
}

add_action('add_meta_boxes', function() {
    global $post;
    
    // Check if this is the right page/template
    if (!$post || $post->post_type !== 'page') return;
    
    $template = get_page_template_slug($post->ID);
    $page_slug = get_post_field('post_name', $post->ID);
    
    // Show meta box only for white label ppc template/page
    if ($template === 'page-white-label-ppc.php' || 
        $template === 'White Label PPC' ||
        $page_slug === 'white-label-ppc') {
        add_meta_box(
            'white_label_ppc_meta', 
            'White Label PPC Page Content', 
            'white_label_ppc_meta_callback', 
            'page', 
            'normal', 
            'high'
        );
    }
});

function white_label_ppc_meta_callback($post) {
    wp_nonce_field('white_label_ppc_meta', 'white_label_ppc_meta_nonce');
    
    // Default values
    $defaults = get_white_label_ppc_defaults();
    
    // Get current values or use defaults
    $header_title = get_post_meta($post->ID, 'white_label_ppc_header_title', true) ?: $defaults['header_title'];
    $header_subtitle = get_post_meta($post->ID, 'white_label_ppc_header_subtitle', true) ?: $defaults['header_subtitle'];
    $header_stats = get_post_meta($post->ID, 'white_label_ppc_header_stats', true);
    if (!is_array($header_stats) || empty($header_stats)) $header_stats = $defaults['header_stats'];
    $header_cta_primary_text = get_post_meta($post->ID, 'white_label_ppc_header_cta_primary_text', true) ?: $defaults['header_cta_primary_text'];
    $header_cta_primary_link = get_post_meta($post->ID, 'white_label_ppc_header_cta_primary_link', true) ?: $defaults['header_cta_primary_link'];
    $header_cta_secondary_text = get_post_meta($post->ID, 'white_label_ppc_header_cta_secondary_text', true) ?: $defaults['header_cta_secondary_text'];
    $header_cta_secondary_link = get_post_meta($post->ID, 'white_label_ppc_header_cta_secondary_link', true) ?: $defaults['header_cta_secondary_link'];
    $overview_title = get_post_meta($post->ID, 'white_label_ppc_overview_title', true) ?: $defaults['overview_title'];
    $overview_description = get_post_meta($post->ID, 'white_label_ppc_overview_description', true) ?: $defaults['overview_description'];
    $services = get_post_meta($post->ID, 'white_label_ppc_services', true);
    if (!is_array($services) || empty($services)) $services = $defaults['services'];
    $benefits_title = get_post_meta($post->ID, 'white_label_ppc_benefits_title', true) ?: $defaults['benefits_title'];
    $benefits = get_post_meta($post->ID, 'white_label_ppc_benefits', true);
    if (!is_array($benefits) || empty($benefits)) $benefits = $defaults['benefits'];
    $case_study_title = get_post_meta($post->ID, 'white_label_ppc_case_study_title', true) ?: $defaults['case_study_title'];
    $case_study_subtitle = get_post_meta($post->ID, 'white_label_ppc_case_study_subtitle', true) ?: $defaults['case_study_subtitle'];
    $case_study_challenge_title = get_post_meta($post->ID, 'white_label_ppc_case_study_challenge_title', true) ?: $defaults['case_study_challenge_title'];
    $case_study_challenge_description = get_post_meta($post->ID, 'white_label_ppc_case_study_challenge_description', true) ?: $defaults['case_study_challenge_description'];
    $case_study_solution_title = get_post_meta($post->ID, 'white_label_ppc_case_study_solution_title', true) ?: $defaults['case_study_solution_title'];
    $case_study_solutions = get_post_meta($post->ID, 'white_label_ppc_case_study_solutions', true) ?: $defaults['case_study_solutions'];
    $case_study_results_title = get_post_meta($post->ID, 'white_label_ppc_case_study_results_title', true) ?: $defaults['case_study_results_title'];
    $case_study_results = get_post_meta($post->ID, 'white_label_ppc_case_study_results', true);
    if (!is_array($case_study_results) || empty($case_study_results)) $case_study_results = $defaults['case_study_results'];
    $process_title = get_post_meta($post->ID, 'white_label_ppc_process_title', true) ?: $defaults['process_title'];
    $process_steps = get_post_meta($post->ID, 'white_label_ppc_process_steps', true);
    if (!is_array($process_steps) || empty($process_steps)) $process_steps = $defaults['process_steps'];
    $packages_title = get_post_meta($post->ID, 'white_label_ppc_packages_title', true) ?: $defaults['packages_title'];
    $packages = get_post_meta($post->ID, 'white_label_ppc_packages', true);
    if (!is_array($packages) || empty($packages)) $packages = $defaults['packages'];
    $included_title = get_post_meta($post->ID, 'white_label_ppc_included_title', true) ?: $defaults['included_title'];
    $included_benefits = get_post_meta($post->ID, 'white_label_ppc_included_benefits', true);
    if (!is_array($included_benefits) || empty($included_benefits)) $included_benefits = $defaults['included_benefits'];
    $agency_types_title = get_post_meta($post->ID, 'white_label_ppc_agency_types_title', true) ?: $defaults['agency_types_title'];
    $agency_types = get_post_meta($post->ID, 'white_label_ppc_agency_types', true);
    if (!is_array($agency_types) || empty($agency_types)) $agency_types = $defaults['agency_types'];
    $testimonial_quote = get_post_meta($post->ID, 'white_label_ppc_testimonial_quote', true) ?: $defaults['testimonial_quote'];
    $testimonial_name = get_post_meta($post->ID, 'white_label_ppc_testimonial_name', true) ?: $defaults['testimonial_name'];
    $testimonial_position = get_post_meta($post->ID, 'white_label_ppc_testimonial_position', true) ?: $defaults['testimonial_position'];
    $cta_section_title = get_post_meta($post->ID, 'white_label_ppc_cta_section_title', true) ?: $defaults['cta_section_title'];
    $cta_section_description = get_post_meta($post->ID, 'white_label_ppc_cta_section_description', true) ?: $defaults['cta_section_description'];
    $cta_section_button_text = get_post_meta($post->ID, 'white_label_ppc_cta_section_button_text', true) ?: $defaults['cta_section_button_text'];
    
    ?>
    <style>
        .meta-field {
            margin-bottom: 20px;
        }
        .meta-field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .repeater-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            background: #f9f9f9;
        }
        .repeater-controls {
            margin-top: 10px;
        }
    </style>
    
    <h3>Hero Section</h3>
    <div class="meta-field">
        <label><strong>Header Title</strong></label>
        <?php wp_editor($header_title, 'white_label_ppc_header_title', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Header Subtitle</strong></label>
        <?php wp_editor($header_subtitle, 'white_label_ppc_header_subtitle', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Header Stats (repeatable: number & label)</strong></label>
        <div id="header-stats-container">
            <?php
            for ($i = 0; $i < max(1, count($header_stats)); $i++) {
                $stat = $header_stats[$i] ?? array('number'=>'','label'=>'');
                ?>
                <div class="repeater-item">
                    <input type="text" name="white_label_ppc_header_stats[<?php echo $i; ?>][number]" value="<?php echo esc_attr($stat['number']); ?>" placeholder="Stat Number" style="width:48%;margin-right:2%;" />
                    <input type="text" name="white_label_ppc_header_stats[<?php echo $i; ?>][label]" value="<?php echo esc_attr($stat['label']); ?>" placeholder="Stat Label" style="width:48%;" />
                    <button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="button add-header-stat">Add Stat</button>
    </div>
    <div class="meta-field">
        <label><strong>Primary CTA Text</strong></label>
        <input type="text" name="white_label_ppc_header_cta_primary_text" value="<?php echo esc_attr($header_cta_primary_text); ?>" style="width:100%;" />
    </div>
    <div class="meta-field">
        <label><strong>Primary CTA Link</strong></label>
        <input type="text" name="white_label_ppc_header_cta_primary_link" value="<?php echo esc_attr($header_cta_primary_link); ?>" style="width:100%;" />
    </div>
    <div class="meta-field">
        <label><strong>Secondary CTA Text</strong></label>
        <input type="text" name="white_label_ppc_header_cta_secondary_text" value="<?php echo esc_attr($header_cta_secondary_text); ?>" style="width:100%;" />
    </div>
    <div class="meta-field">
        <label><strong>Secondary CTA Link</strong></label>
        <input type="text" name="white_label_ppc_header_cta_secondary_link" value="<?php echo esc_attr($header_cta_secondary_link); ?>" style="width:100%;" />
    </div>

    <h3>Service Overview Section</h3>
    <div class="meta-field">
        <label><strong>Overview Title</strong></label>
        <?php wp_editor($overview_title, 'white_label_ppc_overview_title', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Overview Description</strong></label>
        <?php wp_editor($overview_description, 'white_label_ppc_overview_description', array('textarea_rows' => 4, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Services (repeatable: icon, title, description)</strong></label>
        <div id="services-container">
            <?php
            for ($i = 0; $i < max(1, count($services)); $i++) {
                $service = $services[$i] ?? array('icon'=>'','title'=>'','description'=>'');
                ?>
                <div class="repeater-item">
                    <input type="text" name="white_label_ppc_services[<?php echo $i; ?>][icon]" value="<?php echo esc_attr($service['icon']); ?>" placeholder="Font Awesome Icon Class (e.g., fas fa-search)" style="width:100%;margin-bottom:5px;" />
                    <input type="text" name="white_label_ppc_services[<?php echo $i; ?>][title]" value="<?php echo esc_attr($service['title']); ?>" placeholder="Service Title" style="width:100%;margin-bottom:5px;" />
                    <textarea name="white_label_ppc_services[<?php echo $i; ?>][description]" placeholder="Service Description" style="width:100%;height:60px;"><?php echo esc_textarea($service['description']); ?></textarea>
                    <button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="button add-service">Add Service</button>
    </div>

    <h3>Benefits Section</h3>
    <div class="meta-field">
        <label><strong>Benefits Title</strong></label>
        <?php wp_editor($benefits_title, 'white_label_ppc_benefits_title', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Benefits (repeatable: number, title, description)</strong></label>
        <div id="benefits-container">
            <?php
            for ($i = 0; $i < max(1, count($benefits)); $i++) {
                $benefit = $benefits[$i] ?? array('number'=>'','title'=>'','description'=>'');
                ?>
                <div class="repeater-item">
                    <input type="text" name="white_label_ppc_benefits[<?php echo $i; ?>][number]" value="<?php echo esc_attr($benefit['number']); ?>" placeholder="Benefit Number" style="width:20%;margin-right:2%;" />
                    <input type="text" name="white_label_ppc_benefits[<?php echo $i; ?>][title]" value="<?php echo esc_attr($benefit['title']); ?>" placeholder="Benefit Title" style="width:76%;margin-bottom:5px;" />
                    <textarea name="white_label_ppc_benefits[<?php echo $i; ?>][description]" placeholder="Benefit Description" style="width:100%;height:60px;"><?php echo esc_textarea($benefit['description']); ?></textarea>
                    <button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="button add-benefit">Add Benefit</button>
    </div>

    <h3>Case Study Section</h3>
    <div class="meta-field">
        <label><strong>Case Study Title</strong></label>
        <?php wp_editor($case_study_title, 'white_label_ppc_case_study_title', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Case Study Subtitle</strong></label>
        <?php wp_editor($case_study_subtitle, 'white_label_ppc_case_study_subtitle', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Challenge Title</strong></label>
        <?php wp_editor($case_study_challenge_title, 'white_label_ppc_case_study_challenge_title', array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Challenge Description</strong></label>
        <?php wp_editor($case_study_challenge_description, 'white_label_ppc_case_study_challenge_description', array('textarea_rows' => 4, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Solution Title</strong></label>
        <?php wp_editor($case_study_solution_title, 'white_label_ppc_case_study_solution_title', array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Solutions (one per line)</strong></label>
        <?php wp_editor($case_study_solutions, 'white_label_ppc_case_study_solutions', array('textarea_rows' => 6, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Results Title</strong></label>
        <?php wp_editor($case_study_results_title, 'white_label_ppc_case_study_results_title', array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Results (repeatable: number & label)</strong></label>
        <div id="results-container">
            <?php
            for ($i = 0; $i < max(1, count($case_study_results)); $i++) {
                $result = $case_study_results[$i] ?? array('number'=>'','label'=>'');
                ?>
                <div class="repeater-item">
                    <input type="text" name="white_label_ppc_case_study_results[<?php echo $i; ?>][number]" value="<?php echo esc_attr($result['number']); ?>" placeholder="Result Number" style="width:48%;margin-right:2%;" />
                    <input type="text" name="white_label_ppc_case_study_results[<?php echo $i; ?>][label]" value="<?php echo esc_attr($result['label']); ?>" placeholder="Result Label" style="width:48%;" />
                    <button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="button add-result">Add Result</button>
    </div>

    <h3>Process Section</h3>
    <div class="meta-field">
        <label><strong>Process Title</strong></label>
        <?php wp_editor($process_title, 'white_label_ppc_process_title', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Process Steps (repeatable: title, description)</strong></label>
        <div id="process-container">
            <?php
            for ($i = 0; $i < max(1, count($process_steps)); $i++) {
                $step = $process_steps[$i] ?? array('title'=>'','description'=>'');
                ?>
                <div class="repeater-item">
                    <input type="text" name="white_label_ppc_process_steps[<?php echo $i; ?>][title]" value="<?php echo esc_attr($step['title']); ?>" placeholder="Step Title" style="width:100%;margin-bottom:5px;" />
                    <textarea name="white_label_ppc_process_steps[<?php echo $i; ?>][description]" placeholder="Step Description" style="width:100%;height:60px;"><?php echo esc_textarea($step['description']); ?></textarea>
                    <button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="button add-process-step">Add Process Step</button>
    </div>

    <h3>Packages Section</h3>
    <div class="meta-field">
        <label><strong>Packages Title</strong></label>
        <?php wp_editor($packages_title, 'white_label_ppc_packages_title', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Packages</strong></label>
        <div id="packages-container">
            <?php
            for ($i = 0; $i < max(1, count($packages)); $i++) {
                $package = $packages[$i] ?? array('name'=>'','price'=>'','price_suffix'=>'','features'=>array(),'cta_text'=>'','popular'=>false);
                ?>
                <div class="repeater-item">
                    <input type="text" name="white_label_ppc_packages[<?php echo $i; ?>][name]" value="<?php echo esc_attr($package['name']); ?>" placeholder="Package Name" style="width:100%;margin-bottom:5px;" />
                    <input type="text" name="white_label_ppc_packages[<?php echo $i; ?>][price]" value="<?php echo esc_attr($package['price']); ?>" placeholder="Price" style="width:48%;margin-right:2%;" />
                    <input type="text" name="white_label_ppc_packages[<?php echo $i; ?>][price_suffix]" value="<?php echo esc_attr($package['price_suffix']); ?>" placeholder="Price Suffix" style="width:48%;margin-bottom:5px;" />
                    <label style="margin-bottom:5px;">
                        <input type="checkbox" name="white_label_ppc_packages[<?php echo $i; ?>][popular]" value="1" <?php checked($package['popular'], true); ?> />
                        Popular Package
                    </label><br>
                    <textarea name="white_label_ppc_packages[<?php echo $i; ?>][features]" placeholder="Features (one per line)" style="width:100%;height:100px;"><?php echo esc_textarea(is_array($package['features']) ? implode("\n", $package['features']) : $package['features']); ?></textarea>
                    <input type="text" name="white_label_ppc_packages[<?php echo $i; ?>][cta_text]" value="<?php echo esc_attr($package['cta_text']); ?>" placeholder="CTA Text" style="width:100%;margin-top:5px;" />
                    <button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="button add-package">Add Package</button>
    </div>

    <h3>What's Included Section</h3>
    <div class="meta-field">
        <label><strong>What's Included Title</strong></label>
        <?php wp_editor($included_title, 'white_label_ppc_included_title', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Included Benefits (repeatable: icon, title, description)</strong></label>
        <div id="included-benefits-container">
            <?php
            for ($i = 0; $i < max(1, count($included_benefits)); $i++) {
                $benefit = $included_benefits[$i] ?? array('icon'=>'','title'=>'','description'=>'');
                ?>
                <div class="repeater-item">
                    <input type="text" name="white_label_ppc_included_benefits[<?php echo $i; ?>][icon]" value="<?php echo esc_attr($benefit['icon']); ?>" placeholder="Font Awesome Icon Class" style="width:100%;margin-bottom:5px;" />
                    <input type="text" name="white_label_ppc_included_benefits[<?php echo $i; ?>][title]" value="<?php echo esc_attr($benefit['title']); ?>" placeholder="Benefit Title" style="width:100%;margin-bottom:5px;" />
                    <textarea name="white_label_ppc_included_benefits[<?php echo $i; ?>][description]" placeholder="Benefit Description" style="width:100%;height:60px;"><?php echo esc_textarea($benefit['description']); ?></textarea>
                    <button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="button add-included-benefit">Add Included Benefit</button>
    </div>

    <h3>Agency Types Section</h3>
    <div class="meta-field">
        <label><strong>Agency Types Title</strong></label>
        <?php wp_editor($agency_types_title, 'white_label_ppc_agency_types_title', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Agency Types (repeatable: title, description)</strong></label>
        <div id="agency-types-container">
            <?php
            for ($i = 0; $i < max(1, count($agency_types)); $i++) {
                $type = $agency_types[$i] ?? array('title'=>'','description'=>'');
                ?>
                <div class="repeater-item">
                    <input type="text" name="white_label_ppc_agency_types[<?php echo $i; ?>][title]" value="<?php echo esc_attr($type['title']); ?>" placeholder="Agency Type Title" style="width:100%;margin-bottom:5px;" />
                    <textarea name="white_label_ppc_agency_types[<?php echo $i; ?>][description]" placeholder="Agency Type Description" style="width:100%;height:60px;"><?php echo esc_textarea($type['description']); ?></textarea>
                    <button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="button add-agency-type">Add Agency Type</button>
    </div>

    <h3>Testimonial Section</h3>
    <div class="meta-field">
        <label><strong>Testimonial Quote</strong></label>
        <?php wp_editor($testimonial_quote, 'white_label_ppc_testimonial_quote', array('textarea_rows' => 4, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>Testimonial Name</strong></label>
        <input type="text" name="white_label_ppc_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" style="width:100%;" />
    </div>
    <div class="meta-field">
        <label><strong>Testimonial Position</strong></label>
        <input type="text" name="white_label_ppc_testimonial_position" value="<?php echo esc_attr($testimonial_position); ?>" style="width:100%;" />
    </div>

    <h3>CTA Section</h3>
    <div class="meta-field">
        <label><strong>CTA Section Title</strong></label>
        <?php wp_editor($cta_section_title, 'white_label_ppc_cta_section_title', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>CTA Section Description</strong></label>
        <?php wp_editor($cta_section_description, 'white_label_ppc_cta_section_description', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true, 'quicktags' => array('buttons' => 'strong,em,link'))); ?>
    </div>
    <div class="meta-field">
        <label><strong>CTA Button Text</strong></label>
        <input type="text" name="white_label_ppc_cta_section_button_text" value="<?php echo esc_attr($cta_section_button_text); ?>" style="width:100%;" />
    </div>

    <script>
    jQuery(document).ready(function($) {
        // Add functionality for repeater fields
        var counter = 0;
        
        // Header Stats
        $('.add-header-stat').click(function() {
            counter++;
            $('#header-stats-container').append(
                '<div class="repeater-item">' +
                '<input type="text" name="white_label_ppc_header_stats[' + counter + '][number]" placeholder="Stat Number" style="width:48%;margin-right:2%;" />' +
                '<input type="text" name="white_label_ppc_header_stats[' + counter + '][label]" placeholder="Stat Label" style="width:48%;" />' +
                '<button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>' +
                '</div>'
            );
        });
        
        // Services
        $('.add-service').click(function() {
            counter++;
            $('#services-container').append(
                '<div class="repeater-item">' +
                '<input type="text" name="white_label_ppc_services[' + counter + '][icon]" placeholder="Font Awesome Icon Class" style="width:100%;margin-bottom:5px;" />' +
                '<input type="text" name="white_label_ppc_services[' + counter + '][title]" placeholder="Service Title" style="width:100%;margin-bottom:5px;" />' +
                '<textarea name="white_label_ppc_services[' + counter + '][description]" placeholder="Service Description" style="width:100%;height:60px;"></textarea>' +
                '<button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>' +
                '</div>'
            );
        });
        
        // Benefits
        $('.add-benefit').click(function() {
            counter++;
            $('#benefits-container').append(
                '<div class="repeater-item">' +
                '<input type="text" name="white_label_ppc_benefits[' + counter + '][number]" placeholder="Benefit Number" style="width:20%;margin-right:2%;" />' +
                '<input type="text" name="white_label_ppc_benefits[' + counter + '][title]" placeholder="Benefit Title" style="width:76%;margin-bottom:5px;" />' +
                '<textarea name="white_label_ppc_benefits[' + counter + '][description]" placeholder="Benefit Description" style="width:100%;height:60px;"></textarea>' +
                '<button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>' +
                '</div>'
            );
        });
        
        // Results
        $('.add-result').click(function() {
            counter++;
            $('#results-container').append(
                '<div class="repeater-item">' +
                '<input type="text" name="white_label_ppc_case_study_results[' + counter + '][number]" placeholder="Result Number" style="width:48%;margin-right:2%;" />' +
                '<input type="text" name="white_label_ppc_case_study_results[' + counter + '][label]" placeholder="Result Label" style="width:48%;" />' +
                '<button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>' +
                '</div>'
            );
        });
        
        // Process Steps
        $('.add-process-step').click(function() {
            counter++;
            $('#process-container').append(
                '<div class="repeater-item">' +
                '<input type="text" name="white_label_ppc_process_steps[' + counter + '][title]" placeholder="Step Title" style="width:100%;margin-bottom:5px;" />' +
                '<textarea name="white_label_ppc_process_steps[' + counter + '][description]" placeholder="Step Description" style="width:100%;height:60px;"></textarea>' +
                '<button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>' +
                '</div>'
            );
        });
        
        // Packages
        $('.add-package').click(function() {
            counter++;
            $('#packages-container').append(
                '<div class="repeater-item">' +
                '<input type="text" name="white_label_ppc_packages[' + counter + '][name]" placeholder="Package Name" style="width:100%;margin-bottom:5px;" />' +
                '<input type="text" name="white_label_ppc_packages[' + counter + '][price]" placeholder="Price" style="width:48%;margin-right:2%;" />' +
                '<input type="text" name="white_label_ppc_packages[' + counter + '][price_suffix]" placeholder="Price Suffix" style="width:48%;margin-bottom:5px;" />' +
                '<label style="margin-bottom:5px;"><input type="checkbox" name="white_label_ppc_packages[' + counter + '][popular]" value="1" /> Popular Package</label><br>' +
                '<textarea name="white_label_ppc_packages[' + counter + '][features]" placeholder="Features (one per line)" style="width:100%;height:100px;"></textarea>' +
                '<input type="text" name="white_label_ppc_packages[' + counter + '][cta_text]" placeholder="CTA Text" style="width:100%;margin-top:5px;" />' +
                '<button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>' +
                '</div>'
            );
        });
        
        // Included Benefits
        $('.add-included-benefit').click(function() {
            counter++;
            $('#included-benefits-container').append(
                '<div class="repeater-item">' +
                '<input type="text" name="white_label_ppc_included_benefits[' + counter + '][icon]" placeholder="Font Awesome Icon Class" style="width:100%;margin-bottom:5px;" />' +
                '<input type="text" name="white_label_ppc_included_benefits[' + counter + '][title]" placeholder="Benefit Title" style="width:100%;margin-bottom:5px;" />' +
                '<textarea name="white_label_ppc_included_benefits[' + counter + '][description]" placeholder="Benefit Description" style="width:100%;height:60px;"></textarea>' +
                '<button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>' +
                '</div>'
            );
        });
        
        // Agency Types
        $('.add-agency-type').click(function() {
            counter++;
            $('#agency-types-container').append(
                '<div class="repeater-item">' +
                '<input type="text" name="white_label_ppc_agency_types[' + counter + '][title]" placeholder="Agency Type Title" style="width:100%;margin-bottom:5px;" />' +
                '<textarea name="white_label_ppc_agency_types[' + counter + '][description]" placeholder="Agency Type Description" style="width:100%;height:60px;"></textarea>' +
                '<button type="button" class="button remove-item" style="margin-top:5px;">Remove</button>' +
                '</div>'
            );
        });
        
        // Remove items
        $(document).on('click', '.remove-item', function() {
            $(this).closest('.repeater-item').remove();
        });
    });
    </script>
    <?php
}

add_action('save_post', function($post_id) {
    if (!isset($_POST['white_label_ppc_meta_nonce']) || 
        !wp_verify_nonce($_POST['white_label_ppc_meta_nonce'], 'white_label_ppc_meta') ||
        defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ||
        !current_user_can('edit_post', $post_id)) {
        return;
    }
    
    $fields = array(
        'white_label_ppc_header_title',
        'white_label_ppc_header_subtitle',
        'white_label_ppc_header_stats',
        'white_label_ppc_header_cta_primary_text',
        'white_label_ppc_header_cta_primary_link',
        'white_label_ppc_header_cta_secondary_text',
        'white_label_ppc_header_cta_secondary_link',
        'white_label_ppc_overview_title',
        'white_label_ppc_overview_description',
        'white_label_ppc_services',
        'white_label_ppc_benefits_title',
        'white_label_ppc_benefits',
        'white_label_ppc_case_study_title',
        'white_label_ppc_case_study_subtitle',
        'white_label_ppc_case_study_challenge_title',
        'white_label_ppc_case_study_challenge_description',
        'white_label_ppc_case_study_solution_title',
        'white_label_ppc_case_study_solutions',
        'white_label_ppc_case_study_results_title',
        'white_label_ppc_case_study_results',
        'white_label_ppc_process_title',
        'white_label_ppc_process_steps',
        'white_label_ppc_packages_title',
        'white_label_ppc_packages',
        'white_label_ppc_included_title',
        'white_label_ppc_included_benefits',
        'white_label_ppc_agency_types_title',
        'white_label_ppc_agency_types',
        'white_label_ppc_testimonial_quote',
        'white_label_ppc_testimonial_name',
        'white_label_ppc_testimonial_position',
        'white_label_ppc_cta_section_title',
        'white_label_ppc_cta_section_description',
        'white_label_ppc_cta_section_button_text'
    );
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            // Handle package features conversion
            if ($field === 'white_label_ppc_packages' && isset($_POST[$field])) {
                $packages = $_POST[$field];
                foreach ($packages as $key => $package) {
                    if (isset($package['features']) && is_string($package['features'])) {
                        $packages[$key]['features'] = array_filter(explode("\n", $package['features']));
                    }
                    $packages[$key]['popular'] = isset($package['popular']) && $package['popular'] === '1';
                }
                update_post_meta($post_id, $field, $packages);
            } else {
                update_post_meta($post_id, $field, $_POST[$field]);
            }
        }
    }
});
?>
