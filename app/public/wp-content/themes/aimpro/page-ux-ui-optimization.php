<?php
/**
 * Template Name: UX/UI Optimization
 * 
 * UX/UI Optimization Services
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="service-page ux-ui-optimization-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">/</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">/</span>
                <a href="<?php echo home_url('/website-development'); ?>">Website Development</a>
                <span class="separator">/</span>
                <span class="current">UX/UI Optimization</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php echo get_post_meta(get_the_ID(), 'uxui_hero_title', true) ?: 'UX/UI Optimization'; ?></h1>
                <p class="hero-subtitle"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_subtitle', true) ?: 'Transform your existing website into a conversion machine through data-driven user experience optimization and interface improvements.'; ?></p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat1_number', true) ?: '275%'; ?></div>
                        <div class="stat-label"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat1_label', true) ?: 'Average Conversion Improvement'; ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat2_number', true) ?: '85%'; ?></div>
                        <div class="stat-label"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat2_label', true) ?: 'User Satisfaction Increase'; ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat3_number', true) ?: '65%'; ?></div>
                        <div class="stat-label"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat3_label', true) ?: 'Bounce Rate Reduction'; ?></div>
                    </div>
                </div>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_primary_button_text', true) ?: 'Get UX Audit'; ?></a>
                    <a href="#case-study" class="btn-outline streamlined"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_secondary_button_text', true) ?: 'View Case Study'; ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header">
                <h2><?php echo get_post_meta(get_the_ID(), 'uxui_intro_title', true) ?: 'Optimize Your Website for Maximum Performance'; ?></h2>
                <p><?php echo get_post_meta(get_the_ID(), 'uxui_intro_description', true) ?: 'Our UX/UI optimization service transforms underperforming websites into conversion powerhouses through systematic analysis, strategic improvements, and data-driven testing. We focus on enhancing user experience while dramatically improving your business metrics.'; ?></p>
            </div>
              <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_feature1_title', true) ?: 'Comprehensive UX Audit'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_feature1_description', true) ?: 'Deep analysis of user behavior, conversion barriers, and optimization opportunities using advanced analytics.'; ?></p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_feature2_title', true) ?: 'Conversion Rate Optimization'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_feature2_description', true) ?: 'Strategic improvements to forms, CTAs, and user flow to maximize conversions and revenue.'; ?></p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_feature3_title', true) ?: 'Mobile Experience Enhancement'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_feature3_description', true) ?: 'Optimize mobile user experience for the majority of your traffic with responsive design improvements.'; ?></p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_feature4_title', true) ?: 'Performance Optimization'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_feature4_description', true) ?: 'Speed optimization and Core Web Vitals improvements for better user experience and SEO rankings.'; ?></p>
                </div>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section id="case-study" class="case-study-section service-page-case-study">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-header">
                    <span class="case-study-label">Case Study</span>
                    <h2><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_title', true) ?: 'How LegalAdvice Pro Increased Consultation Bookings by 390% Through UX Optimization'; ?></h2>
                </div>
                
                <div class="case-study-grid">
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_challenge', true) ?: 'LegalAdvice Pro had a professional-looking website but was struggling with a 73% bounce rate and only 2.1% of visitors booking consultations. Users were leaving without engaging, despite high-quality traffic from SEO and PPC campaigns.'; ?></p>
                        
                        <div class="challenge-metrics">
                            <div class="metric">
                                <span class="metric-value"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_before_metric1_value', true) ?: '73%'; ?></span>
                                <span class="metric-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_before_metric1_label', true) ?: 'Bounce Rate'; ?></span>
                            </div>
                            <div class="metric">
                                <span class="metric-value"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_before_metric2_value', true) ?: '2.1%'; ?></span>
                                <span class="metric-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_before_metric2_label', true) ?: 'Consultation Booking Rate'; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Solution</h3>
                        <ul>
                            <li><strong>User Journey Optimization:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution1', true) ?: 'Streamlined navigation and clear conversion paths'; ?></li>
                            <li><strong>Trust Building Elements:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution2', true) ?: 'Added lawyer credentials, testimonials, and case results'; ?></li>
                            <li><strong>Form Optimization:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution3', true) ?: 'Simplified booking process from 7 fields to 3'; ?></li>
                            <li><strong>Mobile-First Redesign:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution4', true) ?: 'Optimized for mobile users (68% of traffic)'; ?></li>
                            <li><strong>Speed Optimization:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution5', true) ?: 'Reduced load time from 6.2s to 1.8s'; ?></li>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <div class="result-item">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result1_value', true) ?: '390%'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result1_label', true) ?: 'Increase in Consultation Bookings'; ?></span>
                        </div>
                        <div class="result-item">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result2_value', true) ?: '58%'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result2_label', true) ?: 'Reduction in Bounce Rate'; ?></span>
                        </div>
                        <div class="result-item">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result3_value', true) ?: '245%'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result3_label', true) ?: 'Increase in Session Duration'; ?></span>
                        </div>
                        <div class="result-item">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result4_value', true) ?: '£285K'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result4_label', true) ?: 'Additional Annual Revenue'; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optimization Areas -->
    <section class="optimization-areas">
        <div class="container">
            <h2>Key Areas We Optimize</h2>
            
            <div class="areas-grid">
                <div class="area-card">
                    <div class="area-icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3>User Journey & Navigation</h3>
                    <p>Streamline user paths and improve navigation structure for better user flow and conversions.</p>
                    <ul>
                        <li>Information architecture optimization</li>
                        <li>Menu structure improvements</li>
                        <li>Internal linking strategy</li>
                        <li>Search functionality enhancement</li>
                    </ul>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <h3>Conversion Elements</h3>
                    <p>Optimize forms, buttons, and calls-to-action for maximum conversion impact.</p>
                    <ul>
                        <li>CTA button optimization</li>
                        <li>Form field reduction</li>
                        <li>Trust signal placement</li>
                        <li>Urgency and scarcity elements</li>
                    </ul>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Experience</h3>
                    <p>Enhance mobile usability and performance for the majority of your users.</p>
                    <ul>
                        <li>Touch-friendly interface design</li>
                        <li>Mobile form optimization</li>
                        <li>Thumb-friendly navigation</li>
                        <li>Mobile speed optimization</li>
                    </ul>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Page Speed & Performance</h3>
                    <p>Optimize loading times and Core Web Vitals for better user experience and SEO.</p>
                    <ul>
                        <li>Image optimization</li>
                        <li>Code minification</li>
                        <li>Caching implementation</li>
                        <li>Core Web Vitals improvement</li>
                    </ul>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visual Hierarchy</h3>
                    <p>Improve content organization and visual flow to guide users toward desired actions.</p>
                    <ul>
                        <li>Content prioritization</li>
                        <li>Typography optimization</li>
                        <li>Color psychology application</li>
                        <li>White space utilization</li>
                    </ul>
                </div>
                
                <div class="area-card">
                    <div class="area-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Trust & Credibility</h3>
                    <p>Enhance trust signals and credibility elements to reduce conversion barriers.</p>
                    <ul>
                        <li>Social proof integration</li>
                        <li>Security badge placement</li>
                        <li>Testimonial optimization</li>
                        <li>Company credential display</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>    <!-- Optimization Process -->
    <section class="optimization-process">
        <div class="container">
            <h2><?php echo get_post_meta(get_the_ID(), 'uxui_process_title', true) ?: 'Our UX/UI Optimization Process'; ?></h2>
            
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step1_title', true) ?: 'Comprehensive UX Audit'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step1_description', true) ?: 'Analyze current performance, user behavior, and identify optimization opportunities using advanced analytics tools.'; ?></p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step2_title', true) ?: 'User Research & Testing'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step2_description', true) ?: 'Conduct user testing, heatmap analysis, and behavioral research to understand user pain points.'; ?></p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step3_title', true) ?: 'Strategy Development'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step3_description', true) ?: 'Create detailed optimization strategy with prioritized improvements based on impact and effort.'; ?></p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step4_title', true) ?: 'Design & Implementation'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step4_description', true) ?: 'Implement strategic improvements with focus on user experience and conversion optimization.'; ?></p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step5_title', true) ?: 'A/B Testing'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step5_description', true) ?: 'Test variations to ensure improvements deliver measurable results and optimal performance.'; ?></p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step6_title', true) ?: 'Monitor & Iterate'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step6_description', true) ?: 'Continuous monitoring and iterative improvements based on real user data and performance metrics.'; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2><?php echo get_post_meta(get_the_ID(), 'uxui_packages_title', true) ?: 'UX/UI Optimization Packages'; ?></h2>
                <p><?php echo get_post_meta(get_the_ID(), 'uxui_packages_subtitle', true) ?: 'Transform your website performance with data-driven optimization strategies.'; ?></p>
            </div>
              <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_package1_name', true) ?: 'UX Audit & Report'; ?></h3>
                        <div class="price"><?php echo get_post_meta(get_the_ID(), 'uxui_package1_price', true) ?: '£1,497'; ?></div>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_package1_description', true) ?: 'Comprehensive analysis & recommendations'; ?></p>
                    </div>
                    <ul class="pricing-features">
                        <?php 
                        $features1 = get_post_meta(get_the_ID(), 'uxui_package1_features', true);
                        if ($features1) {
                            $features_array = explode("\n", $features1);
                            foreach ($features_array as $feature) {
                                if (trim($feature)) {
                                    echo '<li>' . esc_html(trim($feature)) . '</li>';
                                }
                            }
                        } else {
                            // Default features
                            echo '<li>Complete UX audit</li>';
                            echo '<li>User behavior analysis</li>';
                            echo '<li>Conversion barrier identification</li>';
                            echo '<li>Mobile optimization review</li>';
                            echo '<li>Performance analysis</li>';
                            echo '<li>Detailed improvement roadmap</li>';
                            echo '<li>Priority action items</li>';
                            echo '<li>2-week delivery</li>';
                        }
                        ?>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                
                <div class="pricing-card featured">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_package2_name', true) ?: 'UX Optimization'; ?></h3>
                        <div class="price"><?php echo get_post_meta(get_the_ID(), 'uxui_package2_price', true) ?: '£4,997'; ?></div>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_package2_description', true) ?: 'Complete optimization implementation'; ?></p>
                    </div>
                    <ul class="pricing-features">
                        <?php 
                        $features2 = get_post_meta(get_the_ID(), 'uxui_package2_features', true);
                        if ($features2) {
                            $features_array = explode("\n", $features2);
                            foreach ($features_array as $feature) {
                                if (trim($feature)) {
                                    echo '<li>' . esc_html(trim($feature)) . '</li>';
                                }
                            }
                        } else {
                            // Default features
                            echo '<li>Comprehensive UX audit</li>';
                            echo '<li>Strategic optimization plan</li>';
                            echo '<li>Design & development implementation</li>';
                            echo '<li>Mobile experience optimization</li>';
                            echo '<li>Conversion element optimization</li>';
                            echo '<li>Performance improvements</li>';
                            echo '<li>A/B testing setup</li>';
                            echo '<li>Analytics configuration</li>';
                            echo '<li>4-week delivery</li>';
                            echo '<li>30 days support</li>';
                        }
                        ?>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>
                
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_package3_name', true) ?: 'Complete UX Overhaul'; ?></h3>
                        <div class="price"><?php echo get_post_meta(get_the_ID(), 'uxui_package3_price', true) ?: '£9,997'; ?></div>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_package3_description', true) ?: 'Full website transformation'; ?></p>
                    </div>
                    <ul class="pricing-features">
                        <?php 
                        $features3 = get_post_meta(get_the_ID(), 'uxui_package3_features', true);
                        if ($features3) {
                            $features_array = explode("\n", $features3);
                            foreach ($features_array as $feature) {
                                if (trim($feature)) {
                                    echo '<li>' . esc_html(trim($feature)) . '</li>';
                                }
                            }
                        } else {
                            // Default features
                            echo '<li>Complete UX research & analysis</li>';
                            echo '<li>User testing & interviews</li>';
                            echo '<li>Information architecture redesign</li>';
                            echo '<li>Visual design optimization</li>';
                            echo '<li>Advanced functionality improvements</li>';
                            echo '<li>Comprehensive performance optimization</li>';
                            echo '<li>Multi-variant testing</li>';
                            echo '<li>Ongoing optimization</li>';
                            echo '<li>6-week delivery</li>';
                            echo '<li>60 days support</li>';
                            echo '<li>Monthly optimization reviews</li>';
                        }
                        ?>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools & Analytics -->
    <section class="tools-section">
        <div class="container">
            <h2>UX/UI Analysis Tools & Technologies</h2>
            
            <div class="tools-grid">
                <div class="tool-category">
                    <h3>Analytics & Research</h3>
                    <div class="tools-list">
                        <div class="tool-item">Google Analytics</div>
                        <div class="tool-item">Hotjar</div>
                        <div class="tool-item">Crazy Egg</div>
                        <div class="tool-item">FullStory</div>
                        <div class="tool-item">Microsoft Clarity</div>
                        <div class="tool-item">UserTesting</div>
                    </div>
                </div>
                
                <div class="tool-category">
                    <h3>Testing & Optimization</h3>
                    <div class="tools-list">
                        <div class="tool-item">Google Optimize</div>
                        <div class="tool-item">Optimizely</div>
                        <div class="tool-item">VWO</div>
                        <div class="tool-item">Unbounce</div>
                        <div class="tool-item">Convert.com</div>
                        <div class="tool-item">AB Tasty</div>
                    </div>
                </div>
                
                <div class="tool-category">
                    <h3>Performance Tools</h3>
                    <div class="tools-list">
                        <div class="tool-item">Google PageSpeed</div>
                        <div class="tool-item">GTmetrix</div>
                        <div class="tool-item">Lighthouse</div>
                        <div class="tool-item">WebPageTest</div>
                        <div class="tool-item">Pingdom</div>
                        <div class="tool-item">Core Web Vitals</div>
                    </div>
                </div>
            </div>
        </div>    </section>    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <h2><?php echo get_post_meta(get_the_ID(), 'uxui_testimonials_title', true) ?: 'What Our Clients Say'; ?></h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"<?php echo get_post_meta(get_the_ID(), 'uxui_testimonial1_content', true) ?: 'The UX optimization increased our consultation bookings by 390%. The data-driven approach was exactly what we needed.'; ?>"</p>
                    </div>
                    <div class="testimonial-author">
                        <strong><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial1_author', true) ?: 'Patricia Johnson'; ?></strong>
                        <span><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial1_position', true) ?: 'Managing Partner, LegalAdvice Pro'; ?></span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"<?php echo get_post_meta(get_the_ID(), 'uxui_testimonial2_content', true) ?: 'Our bounce rate dropped from 73% to 31% and conversions tripled. The investment paid for itself in the first month.'; ?>"</p>
                    </div>
                    <div class="testimonial-author">
                        <strong><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial2_author', true) ?: 'Andrew Wilson'; ?></strong>
                        <span><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial2_position', true) ?: 'CEO, TechFlow Solutions'; ?></span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"<?php echo get_post_meta(get_the_ID(), 'uxui_testimonial3_content', true) ?: 'The mobile optimization alone increased our mobile conversions by 280%. Outstanding attention to detail.'; ?>"</p>
                    </div>
                    <div class="testimonial-author">
                        <strong><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial3_author', true) ?: 'Rachel Martinez'; ?></strong>
                        <span><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial3_position', true) ?: 'Marketing Director, InnovateCorps'; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2><?php echo get_post_meta(get_the_ID(), 'uxui_faq_title', true) ?: 'Frequently Asked Questions'; ?></h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq1_question', true) ?: 'How do you measure UX optimization success?'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq1_answer', true) ?: 'We track key metrics including conversion rates, bounce rates, session duration, and user satisfaction scores. We provide detailed before/after analytics reports.'; ?></p>
                </div>
                <div class="faq-item">
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq2_question', true) ?: 'Will you need to rebuild our entire website?'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq2_answer', true) ?: 'Not necessarily. Many optimizations can be implemented within your existing framework. We focus on strategic improvements that deliver maximum impact.'; ?></p>
                </div>
                <div class="faq-item">
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq3_question', true) ?: 'How long do optimization projects take?'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq3_answer', true) ?: 'Timeline varies by scope: 2 weeks for audits, 4 weeks for standard optimization, and 6 weeks for complete overhauls. We provide detailed timelines during consultation.'; ?></p>
                </div>
                <div class="faq-item">
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq4_question', true) ?: 'Do you test changes before implementing them?'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq4_answer', true) ?: 'Yes, we use A/B testing and staged rollouts to ensure improvements deliver measurable results before full implementation.'; ?></p>
                </div>
                <div class="faq-item">
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq5_question', true) ?: 'Can you optimize mobile experience separately?'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq5_answer', true) ?: 'Absolutely! Mobile optimization can be done as a standalone project, though we recommend comprehensive optimization for best results.'; ?></p>
                </div>
                <div class="faq-item">
                    <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq6_question', true) ?: 'What if the optimizations don\'t improve performance?'; ?></h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq6_answer', true) ?: 'Our optimizations are data-driven and tested. If results don\'t meet expectations, we provide additional optimization rounds at no extra cost.'; ?></p>
                </div>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2><?php echo get_post_meta(get_the_ID(), 'uxui_cta_title', true) ?: 'Ready to Optimize Your Website for Better Results?'; ?></h2>
                <p><?php echo get_post_meta(get_the_ID(), 'uxui_cta_description', true) ?: 'Get a free UX audit and discover exactly how to improve your website\'s performance and conversions.'; ?></p>                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary"><?php echo get_post_meta(get_the_ID(), 'uxui_cta_button_text', true) ?: 'Get Free UX Audit'; ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
