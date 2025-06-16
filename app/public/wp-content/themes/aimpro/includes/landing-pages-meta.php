<?php
/**
 * Landing Pages Meta Fields
 * Adds custom meta box for Landing Pages template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_landingpages_meta_box');
function aimpro_add_landingpages_meta_box() {
    // Only add to pages using the Landing Pages template or with 'landing-pages' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-landing-pages.php' || $page_slug === 'landing-pages') {
        add_meta_box(
            'aimpro_landingpages_settings',
            'Landing Pages Settings',
            'aimpro_landingpages_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_landingpages_meta_box_callback($post) {
    wp_nonce_field('aimpro_landingpages_meta_nonce', 'aimpro_landingpages_meta_nonce');
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    if ($page_template !== 'page-landing-pages.php' && $page_slug !== 'landing-pages') {
        echo '<p><strong>Note:</strong> These settings will only appear when this page uses the "Landing Pages" template or has the slug "landing-pages".</p>';
        return;
    }
    
    // Get stored values
    $values = get_post_custom($post->ID);
    
    // Define default values
    $defaults = array(
        // Hero Section
        'lp_hero_title' => 'High-Converting Landing Pages',
        'lp_hero_subtitle' => 'Purpose-built landing pages that turn visitors into customers with laser-focused messaging and conversion optimization.',
        
        // Stats Section
        'lp_stat1_number' => '340%',
        'lp_stat1_label' => 'Average Conversion Increase',
        'lp_stat2_number' => '7 Days',
        'lp_stat2_label' => 'Average Delivery Time',
        'lp_stat3_number' => '23%',
        'lp_stat3_label' => 'Average Conversion Rate',
        'lp_cta_primary' => 'Get Landing Page Quote',
        'lp_cta_secondary' => 'View Case Study',
        
        // Introduction Section
        'lp_intro_title' => 'Landing Pages That Convert Like Crazy',
        'lp_intro_description' => 'Our high-converting landing pages are meticulously crafted to achieve one goal: turn your traffic into leads and sales. Every element is strategically designed and tested to maximize conversions for your specific audience and offer.',
        
        // Features Section
        'lp_feature1_title' => 'Conversion-Focused Design',
        'lp_feature1_description' => 'Every element designed with one goal: converting visitors into customers through strategic placement and messaging.',
        'lp_feature2_title' => 'A/B Testing Ready',
        'lp_feature2_description' => 'Built-in testing capabilities to continuously optimize performance and improve conversion rates.',
        'lp_feature3_title' => 'Lightning Fast Loading',
        'lp_feature3_description' => 'Optimized for speed with under 2-second load times to minimize bounce rates and maximize conversions.',
        'lp_feature4_title' => 'Advanced Analytics',
        'lp_feature4_description' => 'Comprehensive tracking and analytics to measure performance and identify optimization opportunities.',
        
        // Case Study Section
        'lp_case_study_title' => 'How FitLife Academy Increased Course Sales by 485% with Optimized Landing Pages',
        'lp_case_study_subtitle' => 'The Challenge',
        'lp_case_study_challenge' => 'FitLife Academy was driving traffic to their course sales page but experiencing a disappointing 2.3% conversion rate. Despite quality traffic from Facebook ads, they were losing potential customers due to unclear messaging and poor page structure.',
        'lp_case_study_stat1_number' => '2.3%',
        'lp_case_study_stat1_label' => 'Conversion Rate',
        'lp_case_study_stat2_number' => '£8.50',
        'lp_case_study_stat2_label' => 'Cost per Lead',
        'lp_case_study_solution_title' => 'Our Solution',
        'lp_case_study_solution' => "Message-Match Optimization: Aligned landing page copy with ad messaging for consistency\nClear Value Proposition: Highlighted unique benefits and transformation outcomes\nSocial Proof Integration: Added testimonials, reviews, and success stories\nStreamlined Forms: Reduced form fields and optimized conversion flow\nMobile Optimization: Enhanced mobile experience for 70% mobile traffic",
        'lp_case_study_results_title' => 'The Results',
        'lp_case_study_result1_number' => '485%',
        'lp_case_study_result1_label' => 'Increase in Course Sales',
        'lp_case_study_result2_number' => '13.4%',
        'lp_case_study_result2_label' => 'New Conversion Rate',
        'lp_case_study_result3_number' => '£2.10',
        'lp_case_study_result3_label' => 'Reduced Cost per Lead',
        'lp_case_study_result4_number' => '£340K',
        'lp_case_study_result4_label' => 'Additional Annual Revenue',
        
        // Types of Landing Pages Section
        'lp_types_title' => 'Types of Landing Pages We Create',
        'lp_type1_title' => 'Lead Generation Pages',
        'lp_type1_description' => 'Capture high-quality leads with compelling offers and optimized forms that convert visitors into prospects.',
        'lp_type1_items' => "E-book downloads\nFree trial signups\nNewsletter subscriptions\nConsultation bookings",
        'lp_type2_title' => 'Sales Pages',
        'lp_type2_description' => 'Drive direct sales with persuasive copy, social proof, and clear purchasing pathways that convert browsers into buyers.',
        'lp_type2_items' => "Product sales pages\nCourse enrollment\nService bookings\nMembership signups",
        'lp_type3_title' => 'Event Registration',
        'lp_type3_description' => 'Maximize event attendance with compelling event pages that highlight value and simplify registration.',
        'lp_type3_items' => "Webinar registration\nWorkshop signups\nConference tickets\nProduct launches",
        'lp_type4_title' => 'App Download Pages',
        'lp_type4_description' => 'Increase app downloads with focused pages that showcase features, benefits, and social proof.',
        'lp_type4_items' => "Mobile app promotion\nSoftware downloads\nTool installations\nGame launches",
        
        // Process Section
        'lp_process_title' => 'Our Landing Page Creation Process',
        'lp_process1_number' => '1',
        'lp_process1_title' => 'Campaign Analysis',
        'lp_process1_description' => 'Analyze your traffic source, audience, and campaign goals to create targeted landing page strategy.',
        'lp_process2_number' => '2',
        'lp_process2_title' => 'Message & Offer Development',
        'lp_process2_description' => 'Craft compelling headlines, value propositions, and offers that resonate with your target audience.',
        'lp_process3_number' => '3',
        'lp_process3_title' => 'Conversion-Focused Design',
        'lp_process3_description' => 'Design pages with proven conversion elements: clear CTAs, social proof, and strategic layout.',
        'lp_process4_number' => '4',
        'lp_process4_title' => 'Development & Integration',
        'lp_process4_description' => 'Build fast-loading pages with proper tracking, form integrations, and mobile optimization.',
        'lp_process5_number' => '5',
        'lp_process5_title' => 'Testing & Optimization',
        'lp_process5_description' => 'Set up A/B tests and continuous optimization to improve conversion rates over time.',
        'lp_process6_number' => '6',
        'lp_process6_title' => 'Launch & Monitor',
        'lp_process6_description' => 'Launch with full analytics tracking and provide ongoing performance monitoring and insights.',
        
        // Packages Section
        'lp_packages_title' => 'Landing Page Packages',
        'lp_packages_subtitle' => 'Fast, effective landing pages designed to convert your traffic into customers.',
        
        'lp_package1_title' => 'Single Landing Page',
        'lp_package1_price' => '£997',
        'lp_package1_description' => 'Perfect for single campaigns',
        'lp_package1_features' => "1 custom landing page\nMobile-responsive design\nLead capture form\nBasic analytics setup\n1 round of revisions\n7-day delivery\n14 days support",
        'lp_package1_cta' => 'Get Started',
        
        'lp_package2_title' => 'Landing Page Bundle',
        'lp_package2_price' => '£2,497',
        'lp_package2_description' => 'Ideal for multiple campaigns',
        'lp_package2_features' => "3 custom landing pages\nAdvanced mobile optimization\nMulti-step forms\nConversion tracking setup\nA/B testing setup\nCRM integration\n2 rounds of revisions\n10-day delivery\n30 days support",
        'lp_package2_label' => 'Best Value',
        'lp_package2_cta' => 'Get Started',
        
        'lp_package3_title' => 'Funnel Series',
        'lp_package3_price' => '£4,997',
        'lp_package3_description' => 'Complete conversion funnel',
        'lp_package3_features' => "5+ landing pages\nComplete sales funnel\nAdvanced integrations\nEmail automation setup\nPayment processing\nComprehensive analytics\nUnlimited revisions\n14-day delivery\n60 days support\nOngoing optimization",
        'lp_package3_cta' => 'Get Started',
        
        // Conversion Elements Section
        'lp_elements_title' => 'Essential Conversion Elements We Include',
        'lp_element1_title' => 'Compelling Headlines',
        'lp_element1_description' => 'Attention-grabbing headlines that clearly communicate value and capture interest immediately.',
        'lp_element2_title' => 'Social Proof',
        'lp_element2_description' => 'Testimonials, reviews, trust badges, and customer logos that build credibility and trust.',
        'lp_element3_title' => 'Clear CTAs',
        'lp_element3_description' => 'Strategic call-to-action buttons that stand out and guide visitors toward conversion.',
        'lp_element4_title' => 'Urgency & Scarcity',
        'lp_element4_description' => 'Time-sensitive offers and limited availability messaging that motivates immediate action.',
        'lp_element5_title' => 'Risk Reversal',
        'lp_element5_description' => 'Money-back guarantees and risk-free offers that remove barriers to conversion.',
        'lp_element6_title' => 'Benefit-Focused Copy',
        'lp_element6_description' => 'Persuasive copy that focuses on benefits and outcomes rather than features.',
        
        // Industries Section
        'lp_industries_title' => 'Industries We Serve',
        'lp_industry1_name' => 'SaaS & Technology',
        'lp_industry1_description' => 'Free trial pages, demo requests, and software download pages',
        'lp_industry2_name' => 'Education & Training',
        'lp_industry2_description' => 'Course enrollment, webinar registration, and certification signups',
        'lp_industry3_name' => 'Health & Fitness',
        'lp_industry3_description' => 'Program signups, consultation bookings, and membership sales',
        'lp_industry4_name' => 'E-commerce',
        'lp_industry4_description' => 'Product launches, promotional campaigns, and seasonal sales',
        'lp_industry5_name' => 'Professional Services',
        'lp_industry5_description' => 'Lead generation, consultation bookings, and service inquiries',
        'lp_industry6_name' => 'Real Estate',
        'lp_industry6_description' => 'Property listings, buyer/seller leads, and market reports',
        
        // Testimonials Section
        'lp_testimonials_title' => 'What Our Clients Say',
        'lp_testimonial1_text' => 'Our new landing page converted at 13.4% compared to our old page\'s 2.3%. The ROI was immediate and substantial.',
        'lp_testimonial1_name' => 'Jessica Martinez',
        'lp_testimonial1_title' => 'Founder, FitLife Academy',
        'lp_testimonial2_text' => 'Aimpro\'s landing pages have been instrumental in scaling our lead generation. We\'re now getting 5x more qualified leads.',
        'lp_testimonial2_name' => 'Robert Taylor',
        'lp_testimonial2_title' => 'CMO, TechFlow Solutions',
        'lp_testimonial3_text' => 'The attention to detail and conversion optimization expertise is outstanding. Our webinar attendance increased by 280%.',
        'lp_testimonial3_name' => 'Amanda Collins',
        'lp_testimonial3_title' => 'Marketing Director, InnovateCorps',
        
        // FAQ Section
        'lp_faq_title' => 'Frequently Asked Questions',
        'lp_faq1_question' => 'How quickly can you deliver a landing page?',
        'lp_faq1_answer' => 'We can deliver a single landing page in as little as 7 days. More complex projects or funnel series can take 10-14 days depending on requirements and revisions.',
        'lp_faq2_question' => 'Do you write the copy for landing pages?',
        'lp_faq2_answer' => 'Yes, we provide complete copywriting services as part of every landing page package. Our conversion copywriters craft messaging that resonates with your target audience and drives action.',
        'lp_faq3_question' => 'Can you integrate with my CRM or email platform?',
        'lp_faq3_answer' => 'Absolutely. We integrate with all major CRM and email marketing platforms including HubSpot, Salesforce, Mailchimp, ActiveCampaign, and many others. Custom integrations are also available.',
        'lp_faq4_question' => 'Do you provide A/B testing setup?',
        'lp_faq4_answer' => 'Yes, our Landing Page Bundle and Funnel Series packages include A/B testing setup. We can create variations of headlines, CTAs, forms, and layouts to test what performs best for your audience.',
        'lp_faq5_question' => 'What if my landing page doesn\'t convert well?',
        'lp_faq5_answer' => 'We stand by our work. If your landing page doesn\'t perform to expectations, we\'ll analyze the data and make necessary adjustments to improve performance at no additional cost during your support period.',
        'lp_faq6_question' => 'Can I make changes after the page is live?',
        'lp_faq6_answer' => 'Yes, we provide you with access to make content updates yourself, or we can handle changes for you during your support period. Major redesigns may incur additional costs after the initial project is complete.'
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
                        <label class="meta-label" for="lp_hero_title">Hero Title</label>
                        <input type="text" id="lp_hero_title" name="lp_hero_title" value="<?php echo esc_attr(get_meta_value('lp_hero_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_hero_subtitle">Hero Subtitle</label>
                        <textarea id="lp_hero_subtitle" name="lp_hero_subtitle"><?php echo esc_textarea(get_meta_value('lp_hero_subtitle', $defaults)); ?></textarea>
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
                        <label class="meta-label" for="lp_stat1_number">Stat 1 Number</label>
                        <input type="text" id="lp_stat1_number" name="lp_stat1_number" value="<?php echo esc_attr(get_meta_value('lp_stat1_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="lp_stat1_label">Stat 1 Label</label>
                        <input type="text" id="lp_stat1_label" name="lp_stat1_label" value="<?php echo esc_attr(get_meta_value('lp_stat1_label', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_stat2_number">Stat 2 Number</label>
                        <input type="text" id="lp_stat2_number" name="lp_stat2_number" value="<?php echo esc_attr(get_meta_value('lp_stat2_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="lp_stat2_label">Stat 2 Label</label>
                        <input type="text" id="lp_stat2_label" name="lp_stat2_label" value="<?php echo esc_attr(get_meta_value('lp_stat2_label', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_stat3_number">Stat 3 Number</label>
                        <input type="text" id="lp_stat3_number" name="lp_stat3_number" value="<?php echo esc_attr(get_meta_value('lp_stat3_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="lp_stat3_label">Stat 3 Label</label>
                        <input type="text" id="lp_stat3_label" name="lp_stat3_label" value="<?php echo esc_attr(get_meta_value('lp_stat3_label', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_cta_primary">Primary CTA Button Text</label>
                        <input type="text" id="lp_cta_primary" name="lp_cta_primary" value="<?php echo esc_attr(get_meta_value('lp_cta_primary', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_cta_secondary">Secondary CTA Button Text</label>
                        <input type="text" id="lp_cta_secondary" name="lp_cta_secondary" value="<?php echo esc_attr(get_meta_value('lp_cta_secondary', $defaults)); ?>" />
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
                        <label class="meta-label" for="lp_intro_title">Introduction Title</label>
                        <input type="text" id="lp_intro_title" name="lp_intro_title" value="<?php echo esc_attr(get_meta_value('lp_intro_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_intro_description">Introduction Description</label>
                        <textarea id="lp_intro_description" name="lp_intro_description"><?php echo esc_textarea(get_meta_value('lp_intro_description', $defaults)); ?></textarea>
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
                            <label class="meta-label" for="lp_feature<?php echo $i; ?>_title">Feature <?php echo $i; ?> Title</label>
                            <input type="text" id="lp_feature<?php echo $i; ?>_title" name="lp_feature<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("lp_feature{$i}_title", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="lp_feature<?php echo $i; ?>_description">Feature <?php echo $i; ?> Description</label>
                            <textarea id="lp_feature<?php echo $i; ?>_description" name="lp_feature<?php echo $i; ?>_description"><?php echo esc_textarea(get_meta_value("lp_feature{$i}_description", $defaults)); ?></textarea>
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
                        <label class="meta-label" for="lp_case_study_title">Case Study Title</label>
                        <input type="text" id="lp_case_study_title" name="lp_case_study_title" value="<?php echo esc_attr(get_meta_value('lp_case_study_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <h4>The Challenge</h4>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_case_study_subtitle">Challenge Subtitle</label>
                        <input type="text" id="lp_case_study_subtitle" name="lp_case_study_subtitle" value="<?php echo esc_attr(get_meta_value('lp_case_study_subtitle', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_case_study_challenge">Challenge Description</label>
                        <textarea id="lp_case_study_challenge" name="lp_case_study_challenge"><?php echo esc_textarea(get_meta_value('lp_case_study_challenge', $defaults)); ?></textarea>
                    </div>
                </div>
            </div>
            
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_case_study_stat1_number">Challenge Stat 1 Number</label>
                        <input type="text" id="lp_case_study_stat1_number" name="lp_case_study_stat1_number" value="<?php echo esc_attr(get_meta_value('lp_case_study_stat1_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="lp_case_study_stat1_label">Challenge Stat 1 Label</label>
                        <input type="text" id="lp_case_study_stat1_label" name="lp_case_study_stat1_label" value="<?php echo esc_attr(get_meta_value('lp_case_study_stat1_label', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_case_study_stat2_number">Challenge Stat 2 Number</label>
                        <input type="text" id="lp_case_study_stat2_number" name="lp_case_study_stat2_number" value="<?php echo esc_attr(get_meta_value('lp_case_study_stat2_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="lp_case_study_stat2_label">Challenge Stat 2 Label</label>
                        <input type="text" id="lp_case_study_stat2_label" name="lp_case_study_stat2_label" value="<?php echo esc_attr(get_meta_value('lp_case_study_stat2_label', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <h4>The Solution</h4>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_case_study_solution_title">Solution Title</label>
                        <input type="text" id="lp_case_study_solution_title" name="lp_case_study_solution_title" value="<?php echo esc_attr(get_meta_value('lp_case_study_solution_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_case_study_solution">Solution Description (one point per line)</label>
                        <textarea id="lp_case_study_solution" name="lp_case_study_solution"><?php echo esc_textarea(get_meta_value('lp_case_study_solution', $defaults)); ?></textarea>
                    </div>
                </div>
            </div>
            
            <h4>The Results</h4>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_case_study_results_title">Results Title</label>
                        <input type="text" id="lp_case_study_results_title" name="lp_case_study_results_title" value="<?php echo esc_attr(get_meta_value('lp_case_study_results_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <div class="meta-row">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="lp_case_study_result<?php echo $i; ?>_number">Result <?php echo $i; ?> Number</label>
                            <input type="text" id="lp_case_study_result<?php echo $i; ?>_number" name="lp_case_study_result<?php echo $i; ?>_number" value="<?php echo esc_attr(get_meta_value("lp_case_study_result{$i}_number", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_case_study_result<?php echo $i; ?>_label">Result <?php echo $i; ?> Label</label>
                            <input type="text" id="lp_case_study_result<?php echo $i; ?>_label" name="lp_case_study_result<?php echo $i; ?>_label" value="<?php echo esc_attr(get_meta_value("lp_case_study_result{$i}_label", $defaults)); ?>" />
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        
        <!-- Types of Landing Pages Section -->
        <div class="meta-section">
            <h3>Types of Landing Pages Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_types_title">Section Title</label>
                        <input type="text" id="lp_types_title" name="lp_types_title" value="<?php echo esc_attr(get_meta_value('lp_types_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>Type <?php echo $i; ?></h4>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_type<?php echo $i; ?>_title">Type <?php echo $i; ?> Title</label>
                            <input type="text" id="lp_type<?php echo $i; ?>_title" name="lp_type<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("lp_type{$i}_title", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_type<?php echo $i; ?>_description">Type <?php echo $i; ?> Description</label>
                            <textarea id="lp_type<?php echo $i; ?>_description" name="lp_type<?php echo $i; ?>_description"><?php echo esc_textarea(get_meta_value("lp_type{$i}_description", $defaults)); ?></textarea>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_type<?php echo $i; ?>_items">Type <?php echo $i; ?> Items (one per line)</label>
                            <textarea id="lp_type<?php echo $i; ?>_items" name="lp_type<?php echo $i; ?>_items"><?php echo esc_textarea(get_meta_value("lp_type{$i}_items", $defaults)); ?></textarea>
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
                        <label class="meta-label" for="lp_process_title">Section Title</label>
                        <input type="text" id="lp_process_title" name="lp_process_title" value="<?php echo esc_attr(get_meta_value('lp_process_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column" style="flex: 0 0 80px;">
                        <div class="meta-field">
                            <label class="meta-label" for="lp_process<?php echo $i; ?>_number">Step Number</label>
                            <input type="text" id="lp_process<?php echo $i; ?>_number" name="lp_process<?php echo $i; ?>_number" value="<?php echo esc_attr(get_meta_value("lp_process{$i}_number", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="lp_process<?php echo $i; ?>_title">Step <?php echo $i; ?> Title</label>
                            <input type="text" id="lp_process<?php echo $i; ?>_title" name="lp_process<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("lp_process{$i}_title", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="lp_process<?php echo $i; ?>_description">Step <?php echo $i; ?> Description</label>
                            <textarea id="lp_process<?php echo $i; ?>_description" name="lp_process<?php echo $i; ?>_description"><?php echo esc_textarea(get_meta_value("lp_process{$i}_description", $defaults)); ?></textarea>
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
                        <label class="meta-label" for="lp_packages_title">Section Title</label>
                        <input type="text" id="lp_packages_title" name="lp_packages_title" value="<?php echo esc_attr(get_meta_value('lp_packages_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="lp_packages_subtitle">Section Subtitle</label>
                        <input type="text" id="lp_packages_subtitle" name="lp_packages_subtitle" value="<?php echo esc_attr(get_meta_value('lp_packages_subtitle', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>Package <?php echo $i; ?></h4>
                        <?php if ($i == 2) : ?>
                            <div class="meta-field">
                                <label class="meta-label" for="lp_package<?php echo $i; ?>_label">Package Label (e.g., "Best Value")</label>
                                <input type="text" id="lp_package<?php echo $i; ?>_label" name="lp_package<?php echo $i; ?>_label" value="<?php echo esc_attr(get_meta_value("lp_package{$i}_label", $defaults)); ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_package<?php echo $i; ?>_title">Package Title</label>
                            <input type="text" id="lp_package<?php echo $i; ?>_title" name="lp_package<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("lp_package{$i}_title", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_package<?php echo $i; ?>_price">Package Price</label>
                            <input type="text" id="lp_package<?php echo $i; ?>_price" name="lp_package<?php echo $i; ?>_price" value="<?php echo esc_attr(get_meta_value("lp_package{$i}_price", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_package<?php echo $i; ?>_description">Package Description</label>
                            <input type="text" id="lp_package<?php echo $i; ?>_description" name="lp_package<?php echo $i; ?>_description" value="<?php echo esc_attr(get_meta_value("lp_package{$i}_description", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_package<?php echo $i; ?>_features">Package Features (one per line)</label>
                            <textarea id="lp_package<?php echo $i; ?>_features" name="lp_package<?php echo $i; ?>_features"><?php echo esc_textarea(get_meta_value("lp_package{$i}_features", $defaults)); ?></textarea>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_package<?php echo $i; ?>_cta">Package CTA Button Text</label>
                            <input type="text" id="lp_package<?php echo $i; ?>_cta" name="lp_package<?php echo $i; ?>_cta" value="<?php echo esc_attr(get_meta_value("lp_package{$i}_cta", $defaults)); ?>" />
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
                        <label class="meta-label" for="lp_elements_title">Section Title</label>
                        <input type="text" id="lp_elements_title" name="lp_elements_title" value="<?php echo esc_attr(get_meta_value('lp_elements_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="lp_element<?php echo $i; ?>_title">Element <?php echo $i; ?> Title</label>
                            <input type="text" id="lp_element<?php echo $i; ?>_title" name="lp_element<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("lp_element{$i}_title", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="lp_element<?php echo $i; ?>_description">Element <?php echo $i; ?> Description</label>
                            <textarea id="lp_element<?php echo $i; ?>_description" name="lp_element<?php echo $i; ?>_description"><?php echo esc_textarea(get_meta_value("lp_element{$i}_description", $defaults)); ?></textarea>
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
                        <label class="meta-label" for="lp_industries_title">Section Title</label>
                        <input type="text" id="lp_industries_title" name="lp_industries_title" value="<?php echo esc_attr(get_meta_value('lp_industries_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="lp_industry<?php echo $i; ?>_name">Industry <?php echo $i; ?> Name</label>
                            <input type="text" id="lp_industry<?php echo $i; ?>_name" name="lp_industry<?php echo $i; ?>_name" value="<?php echo esc_attr(get_meta_value("lp_industry{$i}_name", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="lp_industry<?php echo $i; ?>_description">Industry <?php echo $i; ?> Description</label>
                            <input type="text" id="lp_industry<?php echo $i; ?>_description" name="lp_industry<?php echo $i; ?>_description" value="<?php echo esc_attr(get_meta_value("lp_industry{$i}_description", $defaults)); ?>" />
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
                        <label class="meta-label" for="lp_testimonials_title">Section Title</label>
                        <input type="text" id="lp_testimonials_title" name="lp_testimonials_title" value="<?php echo esc_attr(get_meta_value('lp_testimonials_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>Testimonial <?php echo $i; ?></h4>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_testimonial<?php echo $i; ?>_text">Testimonial Text</label>
                            <textarea id="lp_testimonial<?php echo $i; ?>_text" name="lp_testimonial<?php echo $i; ?>_text"><?php echo esc_textarea(get_meta_value("lp_testimonial{$i}_text", $defaults)); ?></textarea>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_testimonial<?php echo $i; ?>_name">Person Name</label>
                            <input type="text" id="lp_testimonial<?php echo $i; ?>_name" name="lp_testimonial<?php echo $i; ?>_name" value="<?php echo esc_attr(get_meta_value("lp_testimonial{$i}_name", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_testimonial<?php echo $i; ?>_title">Person Title</label>
                            <input type="text" id="lp_testimonial<?php echo $i; ?>_title" name="lp_testimonial<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("lp_testimonial{$i}_title", $defaults)); ?>" />
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
                        <label class="meta-label" for="lp_faq_title">Section Title</label>
                        <input type="text" id="lp_faq_title" name="lp_faq_title" value="<?php echo esc_attr(get_meta_value('lp_faq_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>FAQ <?php echo $i; ?></h4>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_faq<?php echo $i; ?>_question">Question</label>
                            <input type="text" id="lp_faq<?php echo $i; ?>_question" name="lp_faq<?php echo $i; ?>_question" value="<?php echo esc_attr(get_meta_value("lp_faq{$i}_question", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="lp_faq<?php echo $i; ?>_answer">Answer</label>
                            <textarea id="lp_faq<?php echo $i; ?>_answer" name="lp_faq<?php echo $i; ?>_answer"><?php echo esc_textarea(get_meta_value("lp_faq{$i}_answer", $defaults)); ?></textarea>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <?php
}

/**
 * Save Landing Pages Meta Box
 */
function aimpro_save_landingpages_meta($post_id) {
    // Check if our nonce is set and verify it
    if (!isset($_POST['aimpro_landingpages_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_landingpages_meta_nonce'], 'aimpro_landingpages_meta_nonce')) {
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
    
    // Get all fields from $_POST
    $fields = array(
        // Hero Section
        'lp_hero_title', 'lp_hero_subtitle',
        
        // Stats Section
        'lp_stat1_number', 'lp_stat1_label',
        'lp_stat2_number', 'lp_stat2_label',
        'lp_stat3_number', 'lp_stat3_label',
        'lp_cta_primary', 'lp_cta_secondary',
        
        // Introduction Section
        'lp_intro_title', 'lp_intro_description',
        
        // Features Section
        'lp_feature1_title', 'lp_feature1_description',
        'lp_feature2_title', 'lp_feature2_description',
        'lp_feature3_title', 'lp_feature3_description',
        'lp_feature4_title', 'lp_feature4_description',
        
        // Case Study Section
        'lp_case_study_title', 'lp_case_study_subtitle', 'lp_case_study_challenge',
        'lp_case_study_stat1_number', 'lp_case_study_stat1_label',
        'lp_case_study_stat2_number', 'lp_case_study_stat2_label',
        'lp_case_study_solution_title', 'lp_case_study_solution',
        'lp_case_study_results_title',
        'lp_case_study_result1_number', 'lp_case_study_result1_label',
        'lp_case_study_result2_number', 'lp_case_study_result2_label',
        'lp_case_study_result3_number', 'lp_case_study_result3_label',
        'lp_case_study_result4_number', 'lp_case_study_result4_label',
        
        // Types of Landing Pages Section
        'lp_types_title',
        'lp_type1_title', 'lp_type1_description', 'lp_type1_items',
        'lp_type2_title', 'lp_type2_description', 'lp_type2_items',
        'lp_type3_title', 'lp_type3_description', 'lp_type3_items',
        'lp_type4_title', 'lp_type4_description', 'lp_type4_items',
        
        // Process Section
        'lp_process_title',
        'lp_process1_number', 'lp_process1_title', 'lp_process1_description',
        'lp_process2_number', 'lp_process2_title', 'lp_process2_description',
        'lp_process3_number', 'lp_process3_title', 'lp_process3_description',
        'lp_process4_number', 'lp_process4_title', 'lp_process4_description',
        'lp_process5_number', 'lp_process5_title', 'lp_process5_description',
        'lp_process6_number', 'lp_process6_title', 'lp_process6_description',
        
        // Packages Section
        'lp_packages_title', 'lp_packages_subtitle',
        'lp_package1_title', 'lp_package1_price', 'lp_package1_description', 'lp_package1_features', 'lp_package1_cta',
        'lp_package2_label', 'lp_package2_title', 'lp_package2_price', 'lp_package2_description', 'lp_package2_features', 'lp_package2_cta',
        'lp_package3_title', 'lp_package3_price', 'lp_package3_description', 'lp_package3_features', 'lp_package3_cta',
        
        // Conversion Elements Section
        'lp_elements_title',
        'lp_element1_title', 'lp_element1_description',
        'lp_element2_title', 'lp_element2_description',
        'lp_element3_title', 'lp_element3_description',
        'lp_element4_title', 'lp_element4_description',
        'lp_element5_title', 'lp_element5_description',
        'lp_element6_title', 'lp_element6_description',
        
        // Industries Section
        'lp_industries_title',
        'lp_industry1_name', 'lp_industry1_description',
        'lp_industry2_name', 'lp_industry2_description',
        'lp_industry3_name', 'lp_industry3_description',
        'lp_industry4_name', 'lp_industry4_description',
        'lp_industry5_name', 'lp_industry5_description',
        'lp_industry6_name', 'lp_industry6_description',
        
        // Testimonials Section
        'lp_testimonials_title',
        'lp_testimonial1_text', 'lp_testimonial1_name', 'lp_testimonial1_title',
        'lp_testimonial2_text', 'lp_testimonial2_name', 'lp_testimonial2_title',
        'lp_testimonial3_text', 'lp_testimonial3_name', 'lp_testimonial3_title',
        
        // FAQ Section
        'lp_faq_title',
        'lp_faq1_question', 'lp_faq1_answer',
        'lp_faq2_question', 'lp_faq2_answer',
        'lp_faq3_question', 'lp_faq3_answer',
        'lp_faq4_question', 'lp_faq4_answer',
        'lp_faq5_question', 'lp_faq5_answer',
        'lp_faq6_question', 'lp_faq6_answer'
    );
    
    // Update post meta for each field
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = wp_kses_post($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        }
    }
}
add_action('save_post', 'aimpro_save_landingpages_meta');
