<?php
/**
 * Funnel Builds Meta Fields
 * Adds custom meta box for Funnel Builds template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_funnelbuilds_meta_box');
function aimpro_add_funnelbuilds_meta_box() {
    // Only add to pages using the Funnel Builds template or with 'funnel-builds' slug
    // EXCEPT when the page is using the streamline-sales-funnel template
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    // Don't show this meta box if using the streamline-sales-funnel template
    if ($page_template === 'page-streamline-sales-funnel.php') {
        return;
    }
    
    if ($page_template === 'page-funnel-builds.php' || $page_slug === 'funnel-builds') {
        add_meta_box(
            'aimpro_funnelbuilds_settings',
            'Funnel Builds Settings',
            'aimpro_funnelbuilds_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_funnelbuilds_meta_box_callback($post) {
    wp_nonce_field('aimpro_funnelbuilds_meta_nonce', 'aimpro_funnelbuilds_meta_nonce');
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    if ($page_template !== 'page-funnel-builds.php' && $page_slug !== 'funnel-builds') {
        echo '<p><strong>Note:</strong> These settings will only appear when this page uses the "Funnel Builds" template or has the slug "funnel-builds".</p>';
        return;
    }
    
    // Get stored values
    $values = get_post_custom($post->ID);
    
    // Define default values
    $defaults = array(
        // Hero Section
        'fb_hero_title' => 'High-Converting Sales Funnels',
        'fb_hero_subtitle' => 'Multi-step conversion funnels that guide prospects through a seamless journey from awareness to purchase',
        
        // Stats Section
        'fb_stat1_number' => '415%',
        'fb_stat1_label' => 'Average ROI Increase',
        'fb_stat2_number' => '14 Days',
        'fb_stat2_label' => 'Average Delivery Time',
        'fb_stat3_number' => '32%',
        'fb_stat3_label' => 'Average Conversion Rate',
        'fb_cta_primary' => 'Get Funnel Quote',
        'fb_cta_secondary' => 'View Case Study',
        
        // Introduction Section
        'fb_intro_title' => 'Sales Funnels That Drive Consistent Results',
        'fb_intro_description' => 'Our high-converting sales funnels are strategically designed to guide your prospects through a seamless journey from awareness to purchase, with carefully crafted touchpoints that overcome objections and build trust at every step.',
        
        // Features Section
        'fb_feature1_title' => 'End-to-End Journey Mapping',
        'fb_feature1_description' => 'Comprehensive customer journey design that targets each stage of awareness with appropriate messaging and offers.',
        'fb_feature2_title' => 'behaviour-Based Automation',
        'fb_feature2_description' => 'Intelligent automation that responds to user behaviour and personalises the experience to increase conversion rates.',
        'fb_feature3_title' => 'Multi-Channel Integration',
        'fb_feature3_description' => 'Seamless integration across email, SMS, and retargeting to maintain engagement throughout the sales process.',
        'fb_feature4_title' => 'Conversion optimisation',
        'fb_feature4_description' => 'Continuous testing and refinement to maximise conversions at each step of your sales funnel.',
        
        // Case Study Section
        'fb_case_study_title' => 'How ProCoach Increased Course Sales by 825% with Our Funnel Strategy',
        'fb_case_study_subtitle' => 'The Challenge',
        'fb_case_study_challenge' => 'ProCoach had a great online course but was struggling with a single-page sales approach that achieved only a 1.8% conversion rate. Despite quality traffic from Facebook ads, they were losing potential customers due to asking for the sale too quickly without sufficient trust-building.',
        'fb_case_study_stat1_number' => '1.8%',
        'fb_case_study_stat1_label' => 'Conversion Rate',
        'fb_case_study_stat2_number' => '�12.40',
        'fb_case_study_stat2_label' => 'Cost per Lead',
        'fb_case_study_solution_title' => 'Our Solution',
        'fb_case_study_solution' => "Multi-Step Funnel Design: Created a 4-step funnel with micro-commitments instead of direct sales\nValue-First Approach: Delivered free valuable content before asking for the purchase\nWebinar Integration: Added a high-value webinar as a middle-funnel conversion tool\nEmail Nurture Sequence: Developed a 14-day email sequence to warm up cold leads\nRetargeting Strategy: Implemented targeted ads for visitors at different funnel stages",
        'fb_case_study_results_title' => 'The Results',
        'fb_case_study_result1_number' => '825%',
        'fb_case_study_result1_label' => 'Increase in Course Sales',
        'fb_case_study_result2_number' => '21.6%',
        'fb_case_study_result2_label' => 'Final Conversion Rate',
        'fb_case_study_result3_number' => '�3.80',
        'fb_case_study_result3_label' => 'Reduced Cost per Lead',
        'fb_case_study_result4_number' => '�520K',
        'fb_case_study_result4_label' => 'Additional Annual Revenue',
        
        // Types of Funnels Section
        'fb_types_title' => 'Types of Funnels We Build',
        'fb_type1_title' => 'Lead Generation Funnels',
        'fb_type1_description' => 'Capture and qualify prospects with compelling lead magnets and nurture sequences that build trust and engagement.',
        'fb_type1_items' => "Free report/guide funnels\nQuiz/assessment funnels\nWebinar registration funnels\nConsultation booking funnels",
        'fb_type2_title' => 'Product Sales Funnels',
        'fb_type2_description' => 'Convert interested prospects into buyers with persuasive content, objection handling, and irresistible offers.',
        'fb_type2_items' => "Product launch funnels\nLimited-time offer funnels\nUpsell/cross-sell funnels\nHigh-ticket sales funnels",
        'fb_type3_title' => 'Membership & Course Funnels',
        'fb_type3_description' => 'Drive enrollments to your membership site or online course with specialised funnels that showcase value and overcome hesitations.',
        'fb_type3_items' => "Free trial funnels\nWebinar-to-course funnels\nMini-course lead-in funnels\nTiered membership funnels",
        'fb_type4_title' => 'Service Business Funnels',
        'fb_type4_description' => 'Generate qualified appointments and consultations for service-based businesses with qualifying sequences and value demonstrations.',
        'fb_type4_items' => "Case study funnels\nApplication funnels\nFree strategy call funnels\nService comparison funnels",
        
        // Process Section
        'fb_process_title' => 'Our Funnel Creation Process',
        'fb_process1_number' => '1',
        'fb_process1_title' => 'Strategy & Mapping',
        'fb_process1_description' => 'Define your customer journey, conversion goals, and key touchpoints across the entire funnel.',
        'fb_process2_number' => '2',
        'fb_process2_title' => 'Offer & Content Creation',
        'fb_process2_description' => 'Develop compelling lead magnets, core offers, upsells, and content assets for each funnel stage.',
        'fb_process3_number' => '3',
        'fb_process3_title' => 'Page & Email Design',
        'fb_process3_description' => 'Create high-converting landing pages, forms, and email sequences with persuasive copy and design.',
        'fb_process4_number' => '4',
        'fb_process4_title' => 'Automation Setup',
        'fb_process4_description' => 'Implement behaviour-based triggers, tagging, and segmentation for personalised user journeys.',
        'fb_process5_number' => '5',
        'fb_process5_title' => 'Testing & optimisation',
        'fb_process5_description' => 'A/B test funnel elements and refine based on data to maximise conversion rates at each step.',
        'fb_process6_number' => '6',
        'fb_process6_title' => 'Launch & Scale',
        'fb_process6_description' => 'Deploy your funnel, monitor performance, and scale traffic once conversion metrics are proven.',
        
        // Packages Section
        'fb_packages_title' => 'Sales Funnel Packages',
        'fb_packages_subtitle' => 'Complete funnel solutions designed to convert your prospects into paying customers',
        
        'fb_package1_title' => 'Lead Generation Funnel',
        'fb_package1_price' => '�2,497',
        'fb_package1_description' => 'Perfect for growing your email list',
        'fb_package1_features' => "2-3 step funnel design\nLead magnet creation\nLanding page & thank you page\nEmail integration\n5-part email sequence\nBasic tracking setup\n14-day delivery\n30 days support",
        'fb_package1_cta' => 'Get Started',
        
        'fb_package2_title' => 'Full Sales Funnel',
        'fb_package2_price' => '�4,997',
        'fb_package2_description' => 'Complete system to sell products or services',
        'fb_package2_features' => "4-6 step funnel design\nLead magnet & tripwire offer\nSales page & checkout integration\nUpsell/downsell sequences\n10-part email automation\nRetargeting strategy\nA/B testing setup\n21-day delivery\n60 days support",
        'fb_package2_label' => 'Best Value',
        'fb_package2_cta' => 'Get Started',
        
        'fb_package3_title' => 'Complete Funnel System',
        'fb_package3_price' => '�9,997',
        'fb_package3_description' => 'End-to-end marketing and sales ecosystem',
        'fb_package3_features' => "Full marketing ecosystem\nMultiple interconnected funnels\nWebinar or video series funnel\nComplete email marketing system\nAdvanced segmentation\nFull analytics & reporting\nConversion optimisation\nSales integration & training\n30-day delivery\n90 days support\nOngoing optimisation",
        'fb_package3_cta' => 'Get Started',
        
        // Technology Section
        'fb_technology_title' => 'Funnel Technology We Work With',
        'fb_technology1_title' => 'Funnel Building Platforms',
        'fb_technology1_items' => "ClickFunnels\nKartra\nLeadPages\nUnbounce\nInstaPage\nCustom WordPress",
        'fb_technology2_title' => 'Email Automation',
        'fb_technology2_items' => "ActiveCampaign\nKlaviyo\nMailchimp\nConvertKit\nDrip\nHubSpot\nGetResponse",
        'fb_technology3_title' => 'CRM & Sales Integration',
        'fb_technology3_items' => "Salesforce\nHubSpot CRM\nPipedrive\nZoho CRM\nKeap (Infusionsoft)",
        'fb_technology4_title' => 'Payment Processing',
        'fb_technology4_items' => "Stripe\nPayPal\nSquare\nAuthorize.net\nSamCart\nThrivecart",
        
        // Conversion Elements Section
        'fb_elements_title' => 'Funnel Conversion Elements We Use',
        'fb_element1_title' => 'Value-First Content',
        'fb_element1_description' => 'Educational content that builds trust and positions you as an authority before asking for the sale.',
        'fb_element2_title' => 'Micro-Commitments',
        'fb_element2_description' => 'Small, easy-to-take actions that gradually increase engagement and investment in your process.',
        'fb_element3_title' => 'Social Proof',
        'fb_element3_description' => 'Testimonials, case studies, and reviews strategically placed to overcome objections at critical decision points.',
        'fb_element4_title' => 'Scarcity & Urgency',
        'fb_element4_description' => 'Ethical time and quantity limitations that encourage prompt decision-making.',
        'fb_element5_title' => 'Clear Call-to-Actions',
        'fb_element5_description' => 'Obvious next steps that guide prospects through each stage of your funnel without confusion.',
        'fb_element6_title' => 'Objection Handling',
        'fb_element6_description' => 'Proactive addressing of common concerns that might prevent prospects from moving forward.',
        
        // Industries Section
        'fb_industries_title' => 'Industries We Serve',
        'fb_industry1_name' => 'Coaches & Consultants',
        'fb_industry1_description' => 'High-ticket coaching programs, consultation bookings, and membership sites',
        'fb_industry2_name' => 'Online Education',
        'fb_industry2_description' => 'Course creators, membership sites, and digital training programs',
        'fb_industry3_name' => 'Health & Wellness',
        'fb_industry3_description' => 'Supplements, fitness programs, wellness services, and health coaching',
        'fb_industry4_name' => 'E-commerce',
        'fb_industry4_description' => 'Product launches, subscription services, and direct-to-consumer brands',
        'fb_industry5_name' => 'Professional Services',
        'fb_industry5_description' => 'Legal, financial, real estate, and specialised B2B services',
        'fb_industry6_name' => 'SaaS & Technology',
        'fb_industry6_description' => 'Free trial conversions, demo bookings, and subscription sign-ups',
        
        // Testimonials Section
        'fb_testimonials_title' => 'What Our Clients Say',
        'fb_testimonial1_text' => 'The funnel Aimpro built for us completely transformed our business. We went from struggling to consistently sell our coaching program to having a predictable system that generates 15-20 new clients every month.',
        'fb_testimonial1_name' => 'Michael Chen',
        'fb_testimonial1_title' => 'Founder, ProCoach Academy',
        'fb_testimonial2_text' => 'I was skeptical about investing in a complete funnel system, but the ROI has been incredible. Within 60 days, we recouped the entire investment and now have a scalable client acquisition system.',
        'fb_testimonial2_name' => 'Sarah Williams',
        'fb_testimonial2_title' => 'CEO, Wellness Evolved',
        'fb_testimonial3_text' => 'What impressed me most was how they integrated everything from lead generation to sales. Our team now has complete visibility into the customer journey, and we\'ve reduced our cost per acquisition by 62%.',
        'fb_testimonial3_name' => 'David Reynolds',
        'fb_testimonial3_title' => 'Marketing Director, SaaS Solutions',
        
        // FAQ Section
        'fb_faq_title' => 'Frequently Asked Questions',
        'fb_faq1_question' => 'How long does it take to build a complete sales funnel?',
        'fb_faq1_answer' => 'Our standard timeline is 14-30 days depending on the complexity of your funnel. Lead generation funnels typically take 14 days, while complete sales systems with multiple paths and integrations can take up to 30 days to ensure everything is properly tested and optimised.',
        'fb_faq2_question' => 'Do you help with the copy and content for the funnel?',
        'fb_faq2_answer' => 'Yes, all our funnel packages include professional copywriting services. Our conversion copywriters craft compelling headlines, sales page copy, email sequences, and other content assets needed for your funnel to convert effectively.',
        'fb_faq3_question' => 'Can you work with my existing CRM or email platform?',
        'fb_faq3_answer' => 'Absolutely. We integrate with all major CRM and email marketing platforms including ActiveCampaign, HubSpot, Salesforce, Mailchimp, Klaviyo, ConvertKit, and many others. If you have a custom system, we can work with that too.',
        'fb_faq4_question' => 'Do you provide traffic generation services for the funnel?',
        'fb_faq4_answer' => 'While our primary focus is building high-converting funnels, we do offer traffic generation services as an add-on. This includes Facebook/Instagram ads, Google ads, and organic traffic strategies to ensure your funnel receives qualified visitors.',
        'fb_faq5_question' => 'How do you measure the success of a funnel?',
        'fb_faq5_answer' => 'We track key metrics at each stage of your funnel, including opt-in rates, email open rates, click-through rates, sales conversion rates, and overall ROI. We provide regular reports and dashboards so you can see exactly how your funnel is performing.',
        'fb_faq6_question' => 'What if the funnel doesn\'t perform as expected?',
        'fb_faq6_answer' => 'We stand behind our work with a performance guarantee. If your funnel doesn\'t meet the agreed-upon performance benchmarks, we\'ll continue working on optimisations and improvements at no additional cost until it does. Our goal is your success, not just delivery.'
    );
    
    // Helper function to get value with default
    function get_meta_value($key, $defaults) {
        global $post;
        $value = get_post_meta($post->ID, $key, true);
        return $value !== '' ? $value : (isset($defaults[$key]) ? $defaults[$key] : '');
    }
    
    // Start building the form
    ?>
    <style>
        .meta-section {
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }
        .meta-section:last-child {
            border-bottom: none;
        }
        .meta-section h3 {
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }
        .meta-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        .meta-column {
            flex: 1;
            min-width: 200px;
            margin-right: 20px;
        }
        .meta-column:last-child {
            margin-right: 0;
        }
        .meta-label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .meta-description {
            font-style: italic;
            color: #777;
            margin-bottom: 5px;
        }
        .meta-field input[type="text"], 
        .meta-field textarea {
            width: 100%;
            max-width: 500px;
        }
        .meta-field textarea {
            min-height: 100px;
        }
    </style>
    
    <div class="meta-container">
        <!-- Hero Section -->
        <div class="meta-section">
            <h3>Hero Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_hero_title">Hero Title</label>
                        <?php wp_editor(get_meta_value('fb_hero_title', $defaults), 'fb_hero_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Main hero section heading. HTML allowed for formatting.</p>
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_hero_subtitle">Hero Subtitle</label>
                        <?php wp_editor(get_meta_value('fb_hero_subtitle', $defaults), 'fb_hero_subtitle', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
                        <p class="description">Hero subtitle text content.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stats Section -->
        <div class="meta-section">
            <h3>Stats Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_stat1_number">Stat 1 Number</label>
                        <input type="text" id="fb_stat1_number" name="fb_stat1_number" value="<?php echo esc_attr(get_meta_value('fb_stat1_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="fb_stat1_label">Stat 1 Label</label>
                        <input type="text" id="fb_stat1_label" name="fb_stat1_label" value="<?php echo esc_attr(get_meta_value('fb_stat1_label', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_stat2_number">Stat 2 Number</label>
                        <input type="text" id="fb_stat2_number" name="fb_stat2_number" value="<?php echo esc_attr(get_meta_value('fb_stat2_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="fb_stat2_label">Stat 2 Label</label>
                        <input type="text" id="fb_stat2_label" name="fb_stat2_label" value="<?php echo esc_attr(get_meta_value('fb_stat2_label', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_stat3_number">Stat 3 Number</label>
                        <input type="text" id="fb_stat3_number" name="fb_stat3_number" value="<?php echo esc_attr(get_meta_value('fb_stat3_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="fb_stat3_label">Stat 3 Label</label>
                        <input type="text" id="fb_stat3_label" name="fb_stat3_label" value="<?php echo esc_attr(get_meta_value('fb_stat3_label', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_cta_primary">Primary CTA Button Text</label>
                        <?php wp_editor(get_meta_value('fb_cta_primary', $defaults), 'fb_cta_primary', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Primary CTA button text.</p>
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_cta_secondary">Secondary CTA Button Text</label>
                        <?php wp_editor(get_meta_value('fb_cta_secondary', $defaults), 'fb_cta_secondary', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Secondary CTA button text.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Introduction Section -->
        <div class="meta-section">
            <h3>Introduction Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_intro_title">Introduction Title</label>
                        <?php wp_editor(get_meta_value('fb_intro_title', $defaults), 'fb_intro_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Introduction section heading.</p>
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_intro_description">Introduction Description</label>
                        <?php wp_editor(get_meta_value('fb_intro_description', $defaults), 'fb_intro_description', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
                        <p class="description">Introduction description text.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Features Section -->
        <div class="meta-section">
            <h3>Features Section</h3>
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_feature<?php echo $i; ?>_title">Feature <?php echo $i; ?> Title</label>
                            <?php wp_editor(get_meta_value("fb_feature{$i}_title", $defaults), "fb_feature{$i}_title", array('textarea_name' => "fb_feature{$i}_title", 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_feature<?php echo $i; ?>_description">Feature <?php echo $i; ?> Description</label>
                            <?php wp_editor(get_meta_value("fb_feature{$i}_description", $defaults), "fb_feature{$i}_description", array('textarea_name' => "fb_feature{$i}_description", 'textarea_rows' => 4, 'media_buttons' => false)); ?>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
        <!-- Case Study Section -->
        <div class="meta-section">
            <h3>Case Study Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_title">Case Study Title</label>
                        <?php wp_editor(get_meta_value('fb_case_study_title', $defaults), 'fb_case_study_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Case study main heading.</p>
                    </div>
                </div>
            </div>
            
            <h4>The Challenge</h4>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_subtitle">Challenge Subtitle</label>
                        <?php wp_editor(get_meta_value('fb_case_study_subtitle', $defaults), 'fb_case_study_subtitle', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Challenge section subtitle.</p>
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_challenge">Challenge Description</label>
                        <?php wp_editor(get_meta_value('fb_case_study_challenge', $defaults), 'fb_case_study_challenge', array('textarea_rows' => 5, 'media_buttons' => false)); ?>
                        <p class="description">Detailed challenge description.</p>
                    </div>
                </div>
            </div>
            
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_stat1_number">Challenge Stat 1 Number</label>
                        <input type="text" id="fb_case_study_stat1_number" name="fb_case_study_stat1_number" value="<?php echo esc_attr(get_meta_value('fb_case_study_stat1_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_stat1_label">Challenge Stat 1 Label</label>
                        <input type="text" id="fb_case_study_stat1_label" name="fb_case_study_stat1_label" value="<?php echo esc_attr(get_meta_value('fb_case_study_stat1_label', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_stat2_number">Challenge Stat 2 Number</label>
                        <input type="text" id="fb_case_study_stat2_number" name="fb_case_study_stat2_number" value="<?php echo esc_attr(get_meta_value('fb_case_study_stat2_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_stat2_label">Challenge Stat 2 Label</label>
                        <input type="text" id="fb_case_study_stat2_label" name="fb_case_study_stat2_label" value="<?php echo esc_attr(get_meta_value('fb_case_study_stat2_label', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <h4>The Solution</h4>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_solution_title">Solution Title</label>
                        <?php wp_editor(get_meta_value('fb_case_study_solution_title', $defaults), 'fb_case_study_solution_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Solution section title.</p>
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_solution">Solution Description (one point per line)</label>
                        <textarea id="fb_case_study_solution" name="fb_case_study_solution"><?php echo esc_textarea(get_meta_value('fb_case_study_solution', $defaults)); ?></textarea>
                        <p class="description">Solution points, one per line.</p>
                    </div>
                </div>
            </div>
            
            <h4>The Results</h4>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_case_study_results_title">Results Title</label>
                        <?php wp_editor(get_meta_value('fb_case_study_results_title', $defaults), 'fb_case_study_results_title', array('textarea_rows' => 2, 'media_buttons' => false)); ?>
                        <p class="description">Results section title.</p>
                    </div>
                </div>
            </div>
            
            <div class="meta-row">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_case_study_result<?php echo $i; ?>_number">Result <?php echo $i; ?> Number</label>
                            <input type="text" id="fb_case_study_result<?php echo $i; ?>_number" name="fb_case_study_result<?php echo $i; ?>_number" value="<?php echo esc_attr(get_meta_value("fb_case_study_result{$i}_number", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_case_study_result<?php echo $i; ?>_label">Result <?php echo $i; ?> Label</label>
                            <input type="text" id="fb_case_study_result<?php echo $i; ?>_label" name="fb_case_study_result<?php echo $i; ?>_label" value="<?php echo esc_attr(get_meta_value("fb_case_study_result{$i}_label", $defaults)); ?>" />
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        
        <!-- Types of Funnels Section -->
        <div class="meta-section">
            <h3>Types of Funnels Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_types_title">Section Title</label>
                        <?php wp_editor(get_meta_value('fb_types_title', $defaults), 'fb_types_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Types of funnels section heading.</p>
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>Type <?php echo $i; ?></h4>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_type<?php echo $i; ?>_title">Type <?php echo $i; ?> Title</label>
                            <?php wp_editor(get_meta_value("fb_type{$i}_title", $defaults), "fb_type{$i}_title", array('textarea_name' => "fb_type{$i}_title", 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_type<?php echo $i; ?>_description">Type <?php echo $i; ?> Description</label>
                            <?php wp_editor(get_meta_value("fb_type{$i}_description", $defaults), "fb_type{$i}_description", array('textarea_name' => "fb_type{$i}_description", 'textarea_rows' => 4, 'media_buttons' => false)); ?>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_type<?php echo $i; ?>_items">Type <?php echo $i; ?> Items (one per line)</label>
                            <textarea id="fb_type<?php echo $i; ?>_items" name="fb_type<?php echo $i; ?>_items"><?php echo esc_textarea(get_meta_value("fb_type{$i}_items", $defaults)); ?></textarea>
                            <p class="description">List items, one per line.</p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
        <!-- Process Section -->
        <div class="meta-section">
            <h3>Process Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_process_title">Section Title</label>
                        <?php wp_editor(get_meta_value('fb_process_title', $defaults), 'fb_process_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Process section heading.</p>
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column" style="flex: 0 0 80px;">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_process<?php echo $i; ?>_number">Step Number</label>
                            <input type="text" id="fb_process<?php echo $i; ?>_number" name="fb_process<?php echo $i; ?>_number" value="<?php echo esc_attr(get_meta_value("fb_process{$i}_number", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_process<?php echo $i; ?>_title">Step <?php echo $i; ?> Title</label>
                            <?php wp_editor(get_meta_value("fb_process{$i}_title", $defaults), "fb_process{$i}_title", array('textarea_name' => "fb_process{$i}_title", 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_process<?php echo $i; ?>_description">Step <?php echo $i; ?> Description</label>
                            <?php wp_editor(get_meta_value("fb_process{$i}_description", $defaults), "fb_process{$i}_description", array('textarea_name' => "fb_process{$i}_description", 'textarea_rows' => 4, 'media_buttons' => false)); ?>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
        <!-- Packages Section -->
        <div class="meta-section">
            <h3>Packages Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_packages_title">Section Title</label>
                        <?php wp_editor(get_meta_value('fb_packages_title', $defaults), 'fb_packages_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Packages section heading.</p>
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_packages_subtitle">Section Subtitle</label>
                        <?php wp_editor(get_meta_value('fb_packages_subtitle', $defaults), 'fb_packages_subtitle', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Packages section subtitle.</p>
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>Package <?php echo $i; ?></h4>
                        <?php if ($i == 2) : ?>
                            <div class="meta-field">
                                <label class="meta-label" for="fb_package<?php echo $i; ?>_label">Package Label (e.g., "Best Value")</label>
                                <input type="text" id="fb_package<?php echo $i; ?>_label" name="fb_package<?php echo $i; ?>_label" value="<?php echo esc_attr(get_meta_value("fb_package{$i}_label", $defaults)); ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_package<?php echo $i; ?>_title">Package Title</label>
                            <?php wp_editor(get_meta_value("fb_package{$i}_title", $defaults), "fb_package{$i}_title", array('textarea_name' => "fb_package{$i}_title", 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_package<?php echo $i; ?>_price">Package Price</label>
                            <input type="text" id="fb_package<?php echo $i; ?>_price" name="fb_package<?php echo $i; ?>_price" value="<?php echo esc_attr(get_meta_value("fb_package{$i}_price", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_package<?php echo $i; ?>_description">Package Description</label>
                            <?php wp_editor(get_meta_value("fb_package{$i}_description", $defaults), "fb_package{$i}_description", array('textarea_name' => "fb_package{$i}_description", 'textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_package<?php echo $i; ?>_features">Package Features (one per line)</label>
                            <textarea id="fb_package<?php echo $i; ?>_features" name="fb_package<?php echo $i; ?>_features"><?php echo esc_textarea(get_meta_value("fb_package{$i}_features", $defaults)); ?></textarea>
                            <p class="description">Package features, one per line.</p>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_package<?php echo $i; ?>_cta">Package CTA Button Text</label>
                            <?php wp_editor(get_meta_value("fb_package{$i}_cta", $defaults), "fb_package{$i}_cta", array('textarea_name' => "fb_package{$i}_cta", 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
        <!-- Technology Section -->
        <div class="meta-section">
            <h3>Technology Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_technology_title">Section Title</label>
                        <?php wp_editor(get_meta_value('fb_technology_title', $defaults), 'fb_technology_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Technology section heading.</p>
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_technology<?php echo $i; ?>_title">Technology Category <?php echo $i; ?> Title</label>
                            <?php wp_editor(get_meta_value("fb_technology{$i}_title", $defaults), "fb_technology{$i}_title", array('textarea_name' => "fb_technology{$i}_title", 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_technology<?php echo $i; ?>_items">Technology Items (one per line)</label>
                            <textarea id="fb_technology<?php echo $i; ?>_items" name="fb_technology<?php echo $i; ?>_items"><?php echo esc_textarea(get_meta_value("fb_technology{$i}_items", $defaults)); ?></textarea>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
        <!-- Conversion Elements Section -->
        <div class="meta-section">
            <h3>Conversion Elements Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_elements_title">Section Title</label>
                        <?php wp_editor(get_meta_value('fb_elements_title', $defaults), 'fb_elements_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Conversion elements section heading.</p>
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_element<?php echo $i; ?>_title">Element <?php echo $i; ?> Title</label>
                            <?php wp_editor(get_meta_value("fb_element{$i}_title", $defaults), "fb_element{$i}_title", array('textarea_name' => "fb_element{$i}_title", 'textarea_rows' => 2, 'media_buttons' => false)); ?>
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_element<?php echo $i; ?>_description">Element <?php echo $i; ?> Description</label>
                            <?php wp_editor(get_meta_value("fb_element{$i}_description", $defaults), "fb_element{$i}_description", array('textarea_name' => "fb_element{$i}_description", 'textarea_rows' => 4, 'media_buttons' => false)); ?>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
        <!-- Industries Section -->
        <div class="meta-section">
            <h3>Industries Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_industries_title">Section Title</label>
                        <?php wp_editor(get_meta_value('fb_industries_title', $defaults), 'fb_industries_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Industries section heading.</p>
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_industry<?php echo $i; ?>_name">Industry <?php echo $i; ?> Name</label>
                            <input type="text" id="fb_industry<?php echo $i; ?>_name" name="fb_industry<?php echo $i; ?>_name" value="<?php echo esc_attr(get_meta_value("fb_industry{$i}_name", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="fb_industry<?php echo $i; ?>_description">Industry <?php echo $i; ?> Description</label>
                            <?php wp_editor(get_meta_value("fb_industry{$i}_description", $defaults), "fb_industry{$i}_description", array('textarea_name' => "fb_industry{$i}_description", 'textarea_rows' => 3, 'media_buttons' => false)); ?>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
        <!-- Testimonials Section -->
        <div class="meta-section">
            <h3>Testimonials Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_testimonials_title">Section Title</label>
                        <?php wp_editor(get_meta_value('fb_testimonials_title', $defaults), 'fb_testimonials_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">Testimonials section heading.</p>
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>Testimonial <?php echo $i; ?></h4>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_testimonial<?php echo $i; ?>_text">Testimonial Text</label>
                            <?php wp_editor(get_meta_value("fb_testimonial{$i}_text", $defaults), "fb_testimonial{$i}_text", array('textarea_name' => "fb_testimonial{$i}_text", 'textarea_rows' => 5, 'media_buttons' => false)); ?>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_testimonial<?php echo $i; ?>_name">Person Name</label>
                            <input type="text" id="fb_testimonial<?php echo $i; ?>_name" name="fb_testimonial<?php echo $i; ?>_name" value="<?php echo esc_attr(get_meta_value("fb_testimonial{$i}_name", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_testimonial<?php echo $i; ?>_title">Person Title</label>
                            <input type="text" id="fb_testimonial<?php echo $i; ?>_title" name="fb_testimonial<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("fb_testimonial{$i}_title", $defaults)); ?>" />
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        
        <!-- FAQ Section -->
        <div class="meta-section">
            <h3>FAQ Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="fb_faq_title">Section Title</label>
                        <?php wp_editor(get_meta_value('fb_faq_title', $defaults), 'fb_faq_title', array('textarea_rows' => 3, 'media_buttons' => false)); ?>
                        <p class="description">FAQ section heading.</p>
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>FAQ <?php echo $i; ?></h4>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_faq<?php echo $i; ?>_question">Question</label>
                            <input type="text" id="fb_faq<?php echo $i; ?>_question" name="fb_faq<?php echo $i; ?>_question" value="<?php echo esc_attr(get_meta_value("fb_faq{$i}_question", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="fb_faq<?php echo $i; ?>_answer">Answer</label>
                            <?php wp_editor(get_meta_value("fb_faq{$i}_answer", $defaults), "fb_faq{$i}_answer", array('textarea_name' => "fb_faq{$i}_answer", 'textarea_rows' => 5, 'media_buttons' => false)); ?>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <?php
}

/**
 * Save Funnel Builds Meta Box
 */
function aimpro_save_funnelbuilds_meta($post_id) {
    // Check if our nonce is set and verify it
    if (!isset($_POST['aimpro_funnelbuilds_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_funnelbuilds_meta_nonce'], 'aimpro_funnelbuilds_meta_nonce')) {
        return;
    }
    
    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Check if this is an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Rich text fields (use wp_kses_post)
    $rich_text_fields = array(
        // Hero Section
        'fb_hero_title', 'fb_hero_subtitle',
        'fb_cta_primary', 'fb_cta_secondary',
        
        // Introduction Section
        'fb_intro_title', 'fb_intro_description',
        
        // Features Section
        'fb_feature1_title', 'fb_feature1_description',
        'fb_feature2_title', 'fb_feature2_description',
        'fb_feature3_title', 'fb_feature3_description',
        'fb_feature4_title', 'fb_feature4_description',
        
        // Case Study Section
        'fb_case_study_title', 'fb_case_study_subtitle', 'fb_case_study_challenge',
        'fb_case_study_solution_title', 'fb_case_study_results_title',
        
        // Types of Funnels Section
        'fb_types_title',
        'fb_type1_title', 'fb_type1_description',
        'fb_type2_title', 'fb_type2_description',
        'fb_type3_title', 'fb_type3_description',
        'fb_type4_title', 'fb_type4_description',
        
        // Process Section
        'fb_process_title',
        'fb_process1_title', 'fb_process1_description',
        'fb_process2_title', 'fb_process2_description',
        'fb_process3_title', 'fb_process3_description',
        'fb_process4_title', 'fb_process4_description',
        'fb_process5_title', 'fb_process5_description',
        'fb_process6_title', 'fb_process6_description',
        
        // Packages Section
        'fb_packages_title', 'fb_packages_subtitle',
        'fb_package1_title', 'fb_package1_description', 'fb_package1_cta',
        'fb_package2_title', 'fb_package2_description', 'fb_package2_cta',
        'fb_package3_title', 'fb_package3_description', 'fb_package3_cta',
        
        // Technology Section
        'fb_technology_title',
        'fb_technology1_title', 'fb_technology2_title', 'fb_technology3_title', 'fb_technology4_title',
        
        // Conversion Elements Section
        'fb_elements_title',
        'fb_element1_title', 'fb_element1_description',
        'fb_element2_title', 'fb_element2_description',
        'fb_element3_title', 'fb_element3_description',
        'fb_element4_title', 'fb_element4_description',
        'fb_element5_title', 'fb_element5_description',
        'fb_element6_title', 'fb_element6_description',
        
        // Industries Section
        'fb_industries_title',
        'fb_industry1_description', 'fb_industry2_description', 'fb_industry3_description',
        'fb_industry4_description', 'fb_industry5_description', 'fb_industry6_description',
        
        // Testimonials Section
        'fb_testimonials_title',
        'fb_testimonial1_text', 'fb_testimonial2_text', 'fb_testimonial3_text',
        
        // FAQ Section
        'fb_faq_title',
        'fb_faq1_answer', 'fb_faq2_answer', 'fb_faq3_answer',
        'fb_faq4_answer', 'fb_faq5_answer', 'fb_faq6_answer'
    );
    
    // Simple text fields (use sanitize_text_field)
    $simple_text_fields = array(
        // Stats Section
        'fb_stat1_number', 'fb_stat1_label',
        'fb_stat2_number', 'fb_stat2_label',
        'fb_stat3_number', 'fb_stat3_label',
        
        // Case Study Section
        'fb_case_study_stat1_number', 'fb_case_study_stat1_label',
        'fb_case_study_stat2_number', 'fb_case_study_stat2_label',
        'fb_case_study_result1_number', 'fb_case_study_result1_label',
        'fb_case_study_result2_number', 'fb_case_study_result2_label',
        'fb_case_study_result3_number', 'fb_case_study_result3_label',
        'fb_case_study_result4_number', 'fb_case_study_result4_label',
        
        // Process Section
        'fb_process1_number', 'fb_process2_number', 'fb_process3_number',
        'fb_process4_number', 'fb_process5_number', 'fb_process6_number',
        
        // Packages Section
        'fb_package1_price', 'fb_package2_label', 'fb_package2_price', 'fb_package3_price',
        
        // Industries Section
        'fb_industry1_name', 'fb_industry2_name', 'fb_industry3_name',
        'fb_industry4_name', 'fb_industry5_name', 'fb_industry6_name',
        
        // Testimonials Section
        'fb_testimonial1_name', 'fb_testimonial1_title',
        'fb_testimonial2_name', 'fb_testimonial2_title',
        'fb_testimonial3_name', 'fb_testimonial3_title',
        
        // FAQ Section
        'fb_faq1_question', 'fb_faq2_question', 'fb_faq3_question',
        'fb_faq4_question', 'fb_faq5_question', 'fb_faq6_question'
    );
    
    // Textarea fields (use sanitize_textarea_field)
    $textarea_fields = array(
        'fb_case_study_solution',
        'fb_type1_items', 'fb_type2_items', 'fb_type3_items', 'fb_type4_items',
        'fb_package1_features', 'fb_package2_features', 'fb_package3_features',
        'fb_technology1_items', 'fb_technology2_items', 'fb_technology3_items', 'fb_technology4_items'
    );
    
    // Update rich text fields
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            $value = wp_kses_post($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        }
    }
    
    // Update simple text fields
    foreach ($simple_text_fields as $field) {
        if (isset($_POST[$field])) {
            $value = sanitize_text_field($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        }
    }
    
    // Update textarea fields
    foreach ($textarea_fields as $field) {
        if (isset($_POST[$field])) {
            $value = sanitize_textarea_field($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        }
    }
}
add_action('save_post', 'aimpro_save_funnelbuilds_meta');
