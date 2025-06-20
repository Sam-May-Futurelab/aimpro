<?php
/**
 * UX/UI optimisation Meta Fields
 * Adds custom meta box for UX/UI optimisation template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_uxui_meta_box');
function aimpro_add_uxui_meta_box() {
    // Only add to pages using the UX/UI optimisation template or with 'ux-ui-optimisation' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-ux-ui-optimisation.php' || $page_slug === 'ux-ui-optimisation') {
        add_meta_box(
            'aimpro_uxui_settings',
            'UX/UI optimisation Settings',
            'aimpro_uxui_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_uxui_meta_box_callback($post) {
    wp_nonce_field('aimpro_uxui_meta_nonce', 'aimpro_uxui_meta_nonce');
    
    // Get stored values
    $values = get_post_custom($post->ID);
    
    // Define default values
    $defaults = array(
        // Hero Section
        'uxui_hero_title' => 'UX/UI optimisation',
        'uxui_hero_subtitle' => 'Transform your existing website into a conversion machine through data-driven user experience optimisation and interface improvements.',
        
        // Stats Section
        'uxui_stat1_number' => '275%',
        'uxui_stat1_label' => 'Average Conversion Improvement',
        'uxui_stat2_number' => '85%',
        'uxui_stat2_label' => 'User Satisfaction Increase',
        'uxui_stat3_number' => '65%',
        'uxui_stat3_label' => 'Bounce Rate Reduction',
        'uxui_cta_primary' => 'Get UX Audit',
        'uxui_cta_secondary' => 'View Case Study',
        
        // Introduction Section
        'uxui_intro_title' => 'optimise Your Website for Maximum Performance',
        'uxui_intro_description' => 'Our UX/UI optimisation service transforms underperforming websites into conversion powerhouses through systematic analysis, strategic improvements, and data-driven testing. We focus on enhancing user experience while dramatically improving your business metrics.',
        
        // Features Section
        'uxui_feature1_title' => 'Comprehensive UX Audit',
        'uxui_feature1_description' => 'Deep analysis of user behaviour, conversion barriers, and optimisation opportunities using advanced analytics.',
        'uxui_feature2_title' => 'Conversion Rate optimisation',
        'uxui_feature2_description' => 'Strategic improvements to forms, CTAs, and user flow to maximise conversions and revenue.',
        'uxui_feature3_title' => 'Mobile Experience Enhancement',
        'uxui_feature3_description' => 'optimise mobile user experience for the majority of your traffic with responsive design improvements.',
        'uxui_feature4_title' => 'Performance optimisation',
        'uxui_feature4_description' => 'Speed optimisation and Core Web Vitals improvements for better user experience and SEO rankings.',
        
        // Case Study Section
        'uxui_case_study_title' => 'How LegalAdvice Pro Increased Consultation Bookings by 390% Through UX optimisation',
        'uxui_case_study_subtitle' => 'Case Study',
        'uxui_case_study_challenge' => 'LegalAdvice Pro had high-quality traffic but a confusing website layout that made it difficult for visitors to understand their services and book consultations.',
        'uxui_case_study_stat1_number' => '2.1%',
        'uxui_case_study_stat1_label' => 'Consultation Booking Rate',
        'uxui_case_study_stat2_number' => '£4,200',
        'uxui_case_study_stat2_label' => 'Monthly Revenue',
        'uxui_case_study_solution_title' => 'Our Solution',
        'uxui_case_study_solution' => "User Journey Mapping: analysed visitor behaviour and identified friction points\nInformation Architecture: Restructured content hierarchy for better navigation\nMobile-First Redesign: Created responsive design prioritising mobile experience\nConversion optimisation: optimised forms and call-to-action placement\nA/B Testing: Tested multiple variations to maximise performance",
        'uxui_case_study_results_title' => 'The Results',
        'uxui_case_study_result1_number' => '390%',
        'uxui_case_study_result1_label' => 'Increase in Consultation Bookings',
        'uxui_case_study_result2_number' => '10.3%',
        'uxui_case_study_result2_label' => 'New Booking Conversion Rate',
        'uxui_case_study_result3_number' => '58%',
        'uxui_case_study_result3_label' => 'Reduction in Bounce Rate',
        'uxui_case_study_result4_number' => '£20,580',
        'uxui_case_study_result4_label' => 'New Monthly Revenue',
        
        // Services Section
        'uxui_services_title' => 'Our UX/UI optimisation Services',
        
        // Process Section
        'uxui_process_title' => 'Our UX/UI optimisation Process',
        'uxui_process1_number' => '1',
        'uxui_process1_title' => 'UX Audit & Analysis',
        'uxui_process1_description' => 'Comprehensive analysis of your current website performance, user behaviour, and conversion barriers.',
        'uxui_process2_number' => '2',
        'uxui_process2_title' => 'Strategy Development',
        'uxui_process2_description' => 'Create optimisation strategy based on data insights and industry best practices.',
        'uxui_process3_number' => '3',
        'uxui_process3_title' => 'Design & Development',
        'uxui_process3_description' => 'Implement improvements to interface design, user flow, and conversion elements.',
        'uxui_process4_number' => '4',
        'uxui_process4_title' => 'Testing & Validation',
        'uxui_process4_description' => 'A/B test changes and validate improvements through data analysis.',
        'uxui_process5_number' => '5',
        'uxui_process5_title' => 'Launch & Monitor',
        'uxui_process5_description' => 'Deploy optimisations and monitor performance metrics for continued improvement.',
        
        // Packages Section
        'uxui_packages_title' => 'UX/UI optimisation Packages',
        'uxui_packages_subtitle' => 'Choose the optimisation package that fits your needs and budget',
        
        'uxui_package1_title' => 'UX Audit',
        'uxui_package1_price' => '£1,497',
        'uxui_package1_description' => 'Perfect for identifying optimisation opportunities',
        'uxui_package1_features' => "Comprehensive UX audit\nUser behaviour analysis\nConversion barrier identification\noptimisation recommendations\nPriority action plan\n7-day delivery\n14 days support",
        'uxui_package1_cta' => 'Get Started',
        
        'uxui_package2_title' => 'UX/UI optimisation',
        'uxui_package2_price' => '£3,997',
        'uxui_package2_description' => 'Complete optimisation implementation',
        'uxui_package2_features' => "Full UX audit\nInterface improvements\nMobile optimisation\nConversion rate optimisation\nPerformance improvements\nA/B testing setup\n21-day delivery\n30 days support",
        'uxui_package2_label' => 'Most Popular',
        'uxui_package2_cta' => 'Get Started',
        
        'uxui_package3_title' => 'Complete UX Transformation',
        'uxui_package3_price' => '£7,997',
        'uxui_package3_description' => 'Full website transformation',
        'uxui_package3_features' => "Complete website redesign\nUser experience strategy\nAdvanced conversion optimisation\npersonalisation features\nOngoing optimisation\nComprehensive analytics\n30-day delivery\n90 days support\nMonthly optimisation",
        'uxui_package3_cta' => 'Get Started',
        
        // Industries Section
        'uxui_industries_title' => 'Industries We optimise',
        'uxui_industry1_name' => 'E-commerce',
        'uxui_industry1_description' => 'Product pages, checkout optimisation, and shopping experience improvements',
        'uxui_industry2_name' => 'Professional Services',
        'uxui_industry2_description' => 'Lead generation optimisation, consultation booking, and trust building',
        'uxui_industry3_name' => 'SaaS & Technology',
        'uxui_industry3_description' => 'Free trial conversions, onboarding optimisation, and user retention',
        'uxui_industry4_name' => 'Healthcare',
        'uxui_industry4_description' => 'Appointment booking, patient engagement, and accessibility compliance',
        'uxui_industry5_name' => 'Education',
        'uxui_industry5_description' => 'Course enrollment, student engagement, and learning platform optimisation',
        'uxui_industry6_name' => 'Finance',
        'uxui_industry6_description' => 'Trust optimisation, form completion, and compliance-focused design',
        
        // Testimonials Section
        'uxui_testimonials_title' => 'What Our Clients Say',
        'uxui_testimonial1_text' => 'The UX optimisation transformed our website completely. Our consultation bookings increased by 390% within 60 days of launch.',
        'uxui_testimonial1_name' => 'Sarah Mitchell',
        'uxui_testimonial1_title' => 'Managing Director, LegalAdvice Pro',
        'uxui_testimonial2_text' => 'Amazing attention to detail and clear understanding of user psychology. Our e-commerce conversion rate doubled.',
        'uxui_testimonial2_name' => 'James Cooper',
        'uxui_testimonial2_title' => 'Founder, TechGear Direct',
        'uxui_testimonial3_text' => 'The team identified issues we never noticed. The improvements to our mobile experience alone increased sales by 40%.',
        'uxui_testimonial3_name' => 'Lisa Chen',
        'uxui_testimonial3_title' => 'Marketing Manager, HealthTech Solutions',
        
        // FAQ Section
        'uxui_faq_title' => 'Frequently Asked Questions',
        'uxui_faq1_question' => 'How long does UX/UI optimisation take?',
        'uxui_faq1_answer' => 'Projects typically take 2-4 weeks depending on scope. A UX audit takes 1 week, while complete optimisation can take up to 4 weeks including testing and refinement.',
        'uxui_faq2_question' => 'Will optimisation affect my website\'s SEO?',
        'uxui_faq2_answer' => 'Our optimisations actually improve SEO through better user experience signals, faster loading times, and improved Core Web Vitals scores that Google values.',
        'uxui_faq3_question' => 'Do you provide A/B testing?',
        'uxui_faq3_answer' => 'Yes, we set up comprehensive A/B testing to validate improvements and ensure changes deliver measurable results before full implementation.',
        'uxui_faq4_question' => 'Can you optimise mobile experience?',
        'uxui_faq4_answer' => 'Absolutely. Mobile optimisation is a core part of our service, as mobile users typically represent 60-70% of website traffic.',
        'uxui_faq5_question' => 'What tools do you use for optimisation?',
        'uxui_faq5_answer' => 'We use Google Analytics, Hotjar, optimisely, Figma, and other industry-leading tools for analysis, design, and testing.',
        'uxui_faq6_question' => 'Do you provide ongoing optimisation?',
        'uxui_faq6_answer' => 'Yes, we offer ongoing optimisation packages to continuously improve performance based on new data and changing user behaviour patterns.'
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
                        <label class="meta-label" for="uxui_hero_title">Hero Title</label>
                        <input type="text" id="uxui_hero_title" name="uxui_hero_title" value="<?php echo esc_attr(get_meta_value('uxui_hero_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_hero_subtitle">Hero Subtitle</label>
                        <textarea id="uxui_hero_subtitle" name="uxui_hero_subtitle"><?php echo esc_textarea(get_meta_value('uxui_hero_subtitle', $defaults)); ?></textarea>
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
                        <label class="meta-label" for="uxui_stat1_number">Stat 1 Number</label>
                        <input type="text" id="uxui_stat1_number" name="uxui_stat1_number" value="<?php echo esc_attr(get_meta_value('uxui_stat1_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_stat1_label">Stat 1 Label</label>
                        <input type="text" id="uxui_stat1_label" name="uxui_stat1_label" value="<?php echo esc_attr(get_meta_value('uxui_stat1_label', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_stat2_number">Stat 2 Number</label>
                        <input type="text" id="uxui_stat2_number" name="uxui_stat2_number" value="<?php echo esc_attr(get_meta_value('uxui_stat2_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_stat2_label">Stat 2 Label</label>
                        <input type="text" id="uxui_stat2_label" name="uxui_stat2_label" value="<?php echo esc_attr(get_meta_value('uxui_stat2_label', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_stat3_number">Stat 3 Number</label>
                        <input type="text" id="uxui_stat3_number" name="uxui_stat3_number" value="<?php echo esc_attr(get_meta_value('uxui_stat3_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_stat3_label">Stat 3 Label</label>
                        <input type="text" id="uxui_stat3_label" name="uxui_stat3_label" value="<?php echo esc_attr(get_meta_value('uxui_stat3_label', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_cta_primary">Primary CTA Button Text</label>
                        <input type="text" id="uxui_cta_primary" name="uxui_cta_primary" value="<?php echo esc_attr(get_meta_value('uxui_cta_primary', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_cta_secondary">Secondary CTA Button Text</label>
                        <input type="text" id="uxui_cta_secondary" name="uxui_cta_secondary" value="<?php echo esc_attr(get_meta_value('uxui_cta_secondary', $defaults)); ?>" />
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
                        <label class="meta-label" for="uxui_intro_title">Introduction Title</label>
                        <input type="text" id="uxui_intro_title" name="uxui_intro_title" value="<?php echo esc_attr(get_meta_value('uxui_intro_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_intro_description">Introduction Description</label>
                        <textarea id="uxui_intro_description" name="uxui_intro_description"><?php echo esc_textarea(get_meta_value('uxui_intro_description', $defaults)); ?></textarea>
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
                            <label class="meta-label" for="uxui_feature<?php echo $i; ?>_title">Feature <?php echo $i; ?> Title</label>
                            <input type="text" id="uxui_feature<?php echo $i; ?>_title" name="uxui_feature<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("uxui_feature{$i}_title", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_feature<?php echo $i; ?>_description">Feature <?php echo $i; ?> Description</label>
                            <textarea id="uxui_feature<?php echo $i; ?>_description" name="uxui_feature<?php echo $i; ?>_description"><?php echo esc_textarea(get_meta_value("uxui_feature{$i}_description", $defaults)); ?></textarea>
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
                        <label class="meta-label" for="uxui_case_study_title">Case Study Title</label>
                        <input type="text" id="uxui_case_study_title" name="uxui_case_study_title" value="<?php echo esc_attr(get_meta_value('uxui_case_study_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <h4>The Challenge</h4>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_case_study_subtitle">Challenge Subtitle</label>
                        <input type="text" id="uxui_case_study_subtitle" name="uxui_case_study_subtitle" value="<?php echo esc_attr(get_meta_value('uxui_case_study_subtitle', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_case_study_challenge">Challenge Description</label>
                        <textarea id="uxui_case_study_challenge" name="uxui_case_study_challenge"><?php echo esc_textarea(get_meta_value('uxui_case_study_challenge', $defaults)); ?></textarea>
                    </div>
                </div>
            </div>
            
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_case_study_stat1_number">Challenge Stat 1 Number</label>
                        <input type="text" id="uxui_case_study_stat1_number" name="uxui_case_study_stat1_number" value="<?php echo esc_attr(get_meta_value('uxui_case_study_stat1_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_case_study_stat1_label">Challenge Stat 1 Label</label>
                        <input type="text" id="uxui_case_study_stat1_label" name="uxui_case_study_stat1_label" value="<?php echo esc_attr(get_meta_value('uxui_case_study_stat1_label', $defaults)); ?>" />
                    </div>
                </div>
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_case_study_stat2_number">Challenge Stat 2 Number</label>
                        <input type="text" id="uxui_case_study_stat2_number" name="uxui_case_study_stat2_number" value="<?php echo esc_attr(get_meta_value('uxui_case_study_stat2_number', $defaults)); ?>" />
                    </div>
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_case_study_stat2_label">Challenge Stat 2 Label</label>
                        <input type="text" id="uxui_case_study_stat2_label" name="uxui_case_study_stat2_label" value="<?php echo esc_attr(get_meta_value('uxui_case_study_stat2_label', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <h4>The Solution</h4>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_case_study_solution_title">Solution Title</label>
                        <input type="text" id="uxui_case_study_solution_title" name="uxui_case_study_solution_title" value="<?php echo esc_attr(get_meta_value('uxui_case_study_solution_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_case_study_solution">Solution Description (one point per line)</label>
                        <textarea id="uxui_case_study_solution" name="uxui_case_study_solution"><?php echo esc_textarea(get_meta_value('uxui_case_study_solution', $defaults)); ?></textarea>
                    </div>
                </div>
            </div>
            
            <h4>The Results</h4>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_case_study_results_title">Results Title</label>
                        <input type="text" id="uxui_case_study_results_title" name="uxui_case_study_results_title" value="<?php echo esc_attr(get_meta_value('uxui_case_study_results_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <div class="meta-row">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_case_study_result<?php echo $i; ?>_number">Result <?php echo $i; ?> Number</label>
                            <input type="text" id="uxui_case_study_result<?php echo $i; ?>_number" name="uxui_case_study_result<?php echo $i; ?>_number" value="<?php echo esc_attr(get_meta_value("uxui_case_study_result{$i}_number", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_case_study_result<?php echo $i; ?>_label">Result <?php echo $i; ?> Label</label>
                            <input type="text" id="uxui_case_study_result<?php echo $i; ?>_label" name="uxui_case_study_result<?php echo $i; ?>_label" value="<?php echo esc_attr(get_meta_value("uxui_case_study_result{$i}_label", $defaults)); ?>" />
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        
        <!-- Process Section -->
        <div class="meta-section">
            <h3>Process Section</h3>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_process_title">Section Title</label>
                        <input type="text" id="uxui_process_title" name="uxui_process_title" value="<?php echo esc_attr(get_meta_value('uxui_process_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column" style="flex: 0 0 80px;">
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_process<?php echo $i; ?>_number">Step Number</label>
                            <input type="text" id="uxui_process<?php echo $i; ?>_number" name="uxui_process<?php echo $i; ?>_number" value="<?php echo esc_attr(get_meta_value("uxui_process{$i}_number", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_process<?php echo $i; ?>_title">Step <?php echo $i; ?> Title</label>
                            <input type="text" id="uxui_process<?php echo $i; ?>_title" name="uxui_process<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("uxui_process{$i}_title", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_process<?php echo $i; ?>_description">Step <?php echo $i; ?> Description</label>
                            <textarea id="uxui_process<?php echo $i; ?>_description" name="uxui_process<?php echo $i; ?>_description"><?php echo esc_textarea(get_meta_value("uxui_process{$i}_description", $defaults)); ?></textarea>
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
                        <label class="meta-label" for="uxui_packages_title">Section Title</label>
                        <input type="text" id="uxui_packages_title" name="uxui_packages_title" value="<?php echo esc_attr(get_meta_value('uxui_packages_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            <div class="meta-row">
                <div class="meta-column">
                    <div class="meta-field">
                        <label class="meta-label" for="uxui_packages_subtitle">Section Subtitle</label>
                        <input type="text" id="uxui_packages_subtitle" name="uxui_packages_subtitle" value="<?php echo esc_attr(get_meta_value('uxui_packages_subtitle', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>Package <?php echo $i; ?></h4>
                        <?php if ($i == 2) : ?>
                            <div class="meta-field">
                                <label class="meta-label" for="uxui_package<?php echo $i; ?>_label">Package Label (e.g., "Most Popular")</label>
                                <input type="text" id="uxui_package<?php echo $i; ?>_label" name="uxui_package<?php echo $i; ?>_label" value="<?php echo esc_attr(get_meta_value("uxui_package{$i}_label", $defaults)); ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_package<?php echo $i; ?>_title">Package Title</label>
                            <input type="text" id="uxui_package<?php echo $i; ?>_title" name="uxui_package<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("uxui_package{$i}_title", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_package<?php echo $i; ?>_price">Package Price</label>
                            <input type="text" id="uxui_package<?php echo $i; ?>_price" name="uxui_package<?php echo $i; ?>_price" value="<?php echo esc_attr(get_meta_value("uxui_package{$i}_price", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_package<?php echo $i; ?>_description">Package Description</label>
                            <input type="text" id="uxui_package<?php echo $i; ?>_description" name="uxui_package<?php echo $i; ?>_description" value="<?php echo esc_attr(get_meta_value("uxui_package{$i}_description", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_package<?php echo $i; ?>_features">Package Features (one per line)</label>
                            <textarea id="uxui_package<?php echo $i; ?>_features" name="uxui_package<?php echo $i; ?>_features"><?php echo esc_textarea(get_meta_value("uxui_package{$i}_features", $defaults)); ?></textarea>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_package<?php echo $i; ?>_cta">Package CTA Button Text</label>
                            <input type="text" id="uxui_package<?php echo $i; ?>_cta" name="uxui_package<?php echo $i; ?>_cta" value="<?php echo esc_attr(get_meta_value("uxui_package{$i}_cta", $defaults)); ?>" />
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
                        <label class="meta-label" for="uxui_industries_title">Section Title</label>
                        <input type="text" id="uxui_industries_title" name="uxui_industries_title" value="<?php echo esc_attr(get_meta_value('uxui_industries_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_industry<?php echo $i; ?>_name">Industry <?php echo $i; ?> Name</label>
                            <input type="text" id="uxui_industry<?php echo $i; ?>_name" name="uxui_industry<?php echo $i; ?>_name" value="<?php echo esc_attr(get_meta_value("uxui_industry{$i}_name", $defaults)); ?>" />
                        </div>
                    </div>
                    <div class="meta-column">
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_industry<?php echo $i; ?>_description">Industry <?php echo $i; ?> Description</label>
                            <input type="text" id="uxui_industry<?php echo $i; ?>_description" name="uxui_industry<?php echo $i; ?>_description" value="<?php echo esc_attr(get_meta_value("uxui_industry{$i}_description", $defaults)); ?>" />
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
                        <label class="meta-label" for="uxui_testimonials_title">Section Title</label>
                        <input type="text" id="uxui_testimonials_title" name="uxui_testimonials_title" value="<?php echo esc_attr(get_meta_value('uxui_testimonials_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>Testimonial <?php echo $i; ?></h4>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_testimonial<?php echo $i; ?>_text">Testimonial Text</label>
                            <textarea id="uxui_testimonial<?php echo $i; ?>_text" name="uxui_testimonial<?php echo $i; ?>_text"><?php echo esc_textarea(get_meta_value("uxui_testimonial{$i}_text", $defaults)); ?></textarea>
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_testimonial<?php echo $i; ?>_name">Person Name</label>
                            <input type="text" id="uxui_testimonial<?php echo $i; ?>_name" name="uxui_testimonial<?php echo $i; ?>_name" value="<?php echo esc_attr(get_meta_value("uxui_testimonial{$i}_name", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_testimonial<?php echo $i; ?>_title">Person Title</label>
                            <input type="text" id="uxui_testimonial<?php echo $i; ?>_title" name="uxui_testimonial<?php echo $i; ?>_title" value="<?php echo esc_attr(get_meta_value("uxui_testimonial{$i}_title", $defaults)); ?>" />
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
                        <label class="meta-label" for="uxui_faq_title">Section Title</label>
                        <input type="text" id="uxui_faq_title" name="uxui_faq_title" value="<?php echo esc_attr(get_meta_value('uxui_faq_title', $defaults)); ?>" />
                    </div>
                </div>
            </div>
            
            <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="meta-row">
                    <div class="meta-column">
                        <h4>FAQ <?php echo $i; ?></h4>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_faq<?php echo $i; ?>_question">Question</label>
                            <input type="text" id="uxui_faq<?php echo $i; ?>_question" name="uxui_faq<?php echo $i; ?>_question" value="<?php echo esc_attr(get_meta_value("uxui_faq{$i}_question", $defaults)); ?>" />
                        </div>
                        <div class="meta-field">
                            <label class="meta-label" for="uxui_faq<?php echo $i; ?>_answer">Answer</label>
                            <textarea id="uxui_faq<?php echo $i; ?>_answer" name="uxui_faq<?php echo $i; ?>_answer"><?php echo esc_textarea(get_meta_value("uxui_faq{$i}_answer", $defaults)); ?></textarea>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <?php
}

/**
 * Save UX/UI optimisation Meta Box
 */
function aimpro_save_uxui_meta($post_id) {
    // Check if our nonce is set and verify it
    if (!isset($_POST['aimpro_uxui_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_uxui_meta_nonce'], 'aimpro_uxui_meta_nonce')) {
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
        'uxui_hero_title', 'uxui_hero_subtitle',
        
        // Stats Section
        'uxui_stat1_number', 'uxui_stat1_label',
        'uxui_stat2_number', 'uxui_stat2_label',
        'uxui_stat3_number', 'uxui_stat3_label',
        'uxui_cta_primary', 'uxui_cta_secondary',
        
        // Introduction Section
        'uxui_intro_title', 'uxui_intro_description',
        
        // Features Section
        'uxui_feature1_title', 'uxui_feature1_description',
        'uxui_feature2_title', 'uxui_feature2_description',
        'uxui_feature3_title', 'uxui_feature3_description',
        'uxui_feature4_title', 'uxui_feature4_description',
        
        // Case Study Section
        'uxui_case_study_title', 'uxui_case_study_subtitle', 'uxui_case_study_challenge',
        'uxui_case_study_stat1_number', 'uxui_case_study_stat1_label',
        'uxui_case_study_stat2_number', 'uxui_case_study_stat2_label',
        'uxui_case_study_solution_title', 'uxui_case_study_solution',
        'uxui_case_study_results_title',
        'uxui_case_study_result1_number', 'uxui_case_study_result1_label',
        'uxui_case_study_result2_number', 'uxui_case_study_result2_label',
        'uxui_case_study_result3_number', 'uxui_case_study_result3_label',
        'uxui_case_study_result4_number', 'uxui_case_study_result4_label',
        
        // Process Section
        'uxui_process_title',
        'uxui_process1_number', 'uxui_process1_title', 'uxui_process1_description',
        'uxui_process2_number', 'uxui_process2_title', 'uxui_process2_description',
        'uxui_process3_number', 'uxui_process3_title', 'uxui_process3_description',
        'uxui_process4_number', 'uxui_process4_title', 'uxui_process4_description',
        'uxui_process5_number', 'uxui_process5_title', 'uxui_process5_description',
        
        // Packages Section
        'uxui_packages_title', 'uxui_packages_subtitle',
        'uxui_package1_title', 'uxui_package1_price', 'uxui_package1_description', 'uxui_package1_features', 'uxui_package1_cta',
        'uxui_package2_label', 'uxui_package2_title', 'uxui_package2_price', 'uxui_package2_description', 'uxui_package2_features', 'uxui_package2_cta',
        'uxui_package3_title', 'uxui_package3_price', 'uxui_package3_description', 'uxui_package3_features', 'uxui_package3_cta',
        
        // Industries Section
        'uxui_industries_title',
        'uxui_industry1_name', 'uxui_industry1_description',
        'uxui_industry2_name', 'uxui_industry2_description',
        'uxui_industry3_name', 'uxui_industry3_description',
        'uxui_industry4_name', 'uxui_industry4_description',
        'uxui_industry5_name', 'uxui_industry5_description',
        'uxui_industry6_name', 'uxui_industry6_description',
        
        // Testimonials Section
        'uxui_testimonials_title',
        'uxui_testimonial1_text', 'uxui_testimonial1_name', 'uxui_testimonial1_title',
        'uxui_testimonial2_text', 'uxui_testimonial2_name', 'uxui_testimonial2_title',
        'uxui_testimonial3_text', 'uxui_testimonial3_name', 'uxui_testimonial3_title',
        
        // FAQ Section
        'uxui_faq_title',
        'uxui_faq1_question', 'uxui_faq1_answer',
        'uxui_faq2_question', 'uxui_faq2_answer',
        'uxui_faq3_question', 'uxui_faq3_answer',
        'uxui_faq4_question', 'uxui_faq4_answer',
        'uxui_faq5_question', 'uxui_faq5_answer',
        'uxui_faq6_question', 'uxui_faq6_answer'
    );
    
    // Update post meta for each field
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = wp_kses_post($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        }
    }
}
add_action('save_post', 'aimpro_save_uxui_meta');
