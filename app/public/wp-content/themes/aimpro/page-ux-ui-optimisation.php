﻿<?php
/**
 * Template Name: UX/UI optimisation
 * 
 * UX/UI optimisation Services
 *
 * @package Aimpro
 */

get_header(); ?>

<style>
.tools-section .tool-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto 15px;
}
.tools-section .tool-icon i {
    font-size: 2.5rem;
}
.tools-section .tools-category {
    margin-top: 50px;
    margin-bottom: 30px;
    padding: 20px 0;
    position: relative;
    font-size: 1.8rem;
}
.tools-section .tools-grid {
    margin-bottom: 50px;
}
.tools-section .section-header {
    margin-bottom: 50px;
    padding-top: 20px;
}

/* Rounded corners for case study sections */
.case-study-challenge, .case-study-solution {
    border-radius: 12px;
    overflow: hidden;
}
</style>

<main id="primary" class="service-page ux-ui-optimisation-page">
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
                <span class="current">UX/UI optimisation</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo get_post_meta(get_the_ID(), 'uxui_hero_title', true) ?: 'UX/UI optimisation'; ?></h1>
                <p class="hero-subtitle"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_subtitle', true) ?: 'Transform your existing website into a conversion machine through data-driven user experience optimisation and interface improvements.'; ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
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
                <div class="hero-ctas animate-on-scroll animate-fade-up">
                    <a href="#contact" class="btn-primary streamlined"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_primary_button_text', true) ?: 'Get your FREE UX Audit'; ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <div class="overview-text animate-on-scroll animate-slide-left">
                    <h2><?php echo get_post_meta(get_the_ID(), 'uxui_intro_title', true) ?: 'optimise Your Website for Maximum Performance'; ?></h2>
                    <p class="overview-description"><?php echo get_post_meta(get_the_ID(), 'uxui_intro_description', true) ?: 'Our UX/UI optimisation service transforms underperforming websites into conversion powerhouses through systematic analysis, strategic improvements, and data-driven testing. We focus on enhancing user experience while dramatically improving your business metrics.'; ?></p>
                    
                    <h3 class="features-heading">Key UX/UI Features</h3>
                    <div class="service-features-list">
                        <div class="service-feature-item">
                            <h4><i class="fas fa-search-plus"></i> <?php echo get_post_meta(get_the_ID(), 'uxui_feature1_title', true) ?: 'Comprehensive UX Audit'; ?></h4>
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_feature1_description', true) ?: 'Deep analysis of user behaviour, conversion barriers, and optimisation opportunities using advanced analytics.'; ?></p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-chart-line"></i> <?php echo get_post_meta(get_the_ID(), 'uxui_feature2_title', true) ?: 'Conversion Rate optimisation'; ?></h4>
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_feature2_description', true) ?: 'Strategic improvements to forms, CTAs, and user flow to maximise conversions and revenue.'; ?></p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-mobile-alt"></i> <?php echo get_post_meta(get_the_ID(), 'uxui_feature3_title', true) ?: 'Mobile Experience Enhancement'; ?></h4>
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_feature3_description', true) ?: 'optimise mobile user experience for the majority of your traffic with responsive design improvements.'; ?></p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-tachometer-alt"></i> <?php echo get_post_meta(get_the_ID(), 'uxui_feature4_title', true) ?: 'Performance optimisation'; ?></h4>
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_feature4_description', true) ?: 'Speed optimisation and Core Web Vitals improvements for better user experience and SEO rankings.'; ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="overview-stats animate-on-scroll animate-slide-right">
                    <h3 class="stats-heading">Proven Results</h3>
                    <p class="stats-description">Our UX/UI optimisations don't just look good—they deliver measurable business results. Every change is backed by data and focused on conversion.</p>
                    
                    <div class="target-icon" style="max-width: 350px; margin: 0 auto 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Aimpro-high-ranking-website-blog.png" alt="UX/UI optimisation" style="width: 100%; height: auto; display: block;">
                    </div>
                    
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number">275%</span>
                        <span class="stat-label">Average Conversion Improvement</span>
                    </div>
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number">85%</span>
                        <span class="stat-label">User Satisfaction Increase</span>
                    </div>
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number">65%</span>
                        <span class="stat-label">Bounce Rate Reduction</span>
                    </div>
                    
                    <div class="overview-cta animate-on-scroll animate-fade-up" style="margin-top: 30px; text-align: center;">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get a Free UX Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Case Study Section -->    <section id="case-study" class="case-study-section service-page-case-study">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-header animate-on-scroll animate-fade-up">
                    <span class="case-study-label">Case Study</span>
                    <h2><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_title', true) ?: 'How LegalAdvice Pro Increased Consultation Bookings by 390% Through UX optimisation'; ?></h2>
                </div>
                
                <div class="case-study-grid">
                    <div class="case-study-challenge animate-on-scroll animate-slide-left">
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_challenge', true) ?: 'LegalAdvice Pro had a professional-looking website but was struggling with a 73% bounce rate and only 2.1% of visitors booking consultations. Users were leaving without engaging, despite high-quality traffic from SEO and PPC campaigns.'; ?></p>
                        
                        <div class="challenge-metrics">
                            <div class="metric animate-on-scroll animate-stagger animate-scale-up">
                                <span class="metric-value"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_before_metric1_value', true) ?: '73%'; ?></span>
                                <span class="metric-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_before_metric1_label', true) ?: 'Bounce Rate'; ?></span>
                            </div>
                            <div class="metric animate-on-scroll animate-stagger animate-scale-up">
                                <span class="metric-value"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_before_metric2_value', true) ?: '2.1%'; ?></span>
                                <span class="metric-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_before_metric2_label', true) ?: 'Consultation Booking Rate'; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-study-solution animate-on-scroll animate-slide-right">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution_title', true) ?: 'Our Solution'; ?></h3>
                        <ul>
                            <li><strong>User Journey optimisation:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution1', true) ?: 'Streamlined navigation and clear conversion paths'; ?></li>
                            <li><strong>Trust Building Elements:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution2', true) ?: 'Added lawyer credentials, testimonials, and case results'; ?></li>
                            <li><strong>Form optimisation:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution3', true) ?: 'Simplified booking process from 7 fields to 3'; ?></li>
                            <li><strong>Mobile-First Redesign:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution4', true) ?: 'optimised for mobile users (68% of traffic)'; ?></li>
                            <li><strong>Speed optimisation:</strong> <?php echo get_post_meta(get_the_ID(), 'uxui_case_study_solution5', true) ?: 'Reduced load time from 6.2s to 1.8s'; ?></li>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results animate-on-scroll animate-fade-up">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result1_value', true) ?: '390%'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result1_label', true) ?: 'Increase in Consultation Bookings'; ?></span>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result2_value', true) ?: '58%'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result2_label', true) ?: 'Reduction in Bounce Rate'; ?></span>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result3_value', true) ?: '245%'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result3_label', true) ?: 'Increase in Session Duration'; ?></span>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result4_value', true) ?: '£285K'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'uxui_case_study_result4_label', true) ?: 'Additional Annual Revenue'; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- optimisation Areas -->    <section class="optimisation-areas">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Key Areas We optimise</h2>
            
            <div class="tools-grid">
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="area-icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <h4>User Journey & Navigation</h4>
                    <p>Streamline user paths and improve navigation structure for better user flow and conversions.</p>
                    <ul>
                        <li>Information architecture optimisation</li>
                        <li>Menu structure improvements</li>
                        <li>Internal linking strategy</li>
                        <li>Search functionality enhancement</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="area-icon">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <h4>Conversion Elements</h4>
                    <p>optimise forms, buttons, and calls-to-action for maximum conversion impact.</p>
                    <ul>
                        <li>CTA button optimisation</li>
                        <li>Form field reduction</li>
                        <li>Trust signal placement</li>
                        <li>Urgency and scarcity elements</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="area-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h4>Mobile Experience</h4>
                    <p>Enhance mobile usability and performance for the majority of your users.</p>
                    <ul>
                        <li>Touch-friendly interface design</li>
                        <li>Mobile form optimisation</li>
                        <li>Thumb-friendly navigation</li>
                        <li>Mobile speed optimisation</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="area-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h4>Page Speed & Performance</h4>
                    <p>optimise loading times and Core Web Vitals for better user experience and SEO.</p>
                    <ul>
                        <li>Image optimisation</li>
                        <li>Code minification</li>
                        <li>Caching implementation</li>
                        <li>Core Web Vitals improvement</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="area-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h4>Visual Hierarchy</h4>
                    <p>Improve content organisation and visual flow to guide users toward desired actions.</p>
                    <ul>
                        <li>Content prioritisation</li>
                        <li>Typography optimisation</li>
                        <li>colour psychology application</li>
                        <li>White space utilisation</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="area-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h4>Trust & Credibility</h4>
                    <p>Enhance trust signals and credibility elements to reduce conversion barriers.</p>
                    <ul>
                        <li>Social proof integration</li>
                        <li>Security badge placement</li>
                        <li>Testimonial optimisation</li>
                        <li>Company credential display</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- optimisation Process -->    <section class="optimisation-process">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'uxui_process_title', true) ?: 'Our UX/UI optimisation Process'; ?></h2>
            
            <div class="process-timeline">
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step1_title', true) ?: 'Comprehensive UX Audit'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step1_description', true) ?: 'analyse current performance, user behaviour, and identify optimisation opportunities using advanced analytics tools.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step2_title', true) ?: 'User Research & Testing'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step2_description', true) ?: 'Conduct user testing, heatmap analysis, and behavioural research to understand user pain points.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step3_title', true) ?: 'Strategy Development'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step3_description', true) ?: 'Create detailed optimisation strategy with prioritised improvements based on impact and effort.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step4_title', true) ?: 'Design & Implementation'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step4_description', true) ?: 'Implement strategic improvements with focus on user experience and conversion optimisation.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step5_title', true) ?: 'A/B Testing'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step5_description', true) ?: 'Test variations to ensure improvements deliver measurable results and optimal performance.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_process_step6_title', true) ?: 'Monitor & Iterate'; ?></h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_process_step6_description', true) ?: 'Continuous monitoring and iterative improvements based on real user data and performance metrics.'; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Pricing Section -->    <section class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo get_post_meta(get_the_ID(), 'uxui_packages_title', true) ?: 'UX/UI optimisation Packages'; ?></h2>
                <p><?php echo get_post_meta(get_the_ID(), 'uxui_packages_subtitle', true) ?: 'Transform your website performance with data-driven optimisation strategies.'; ?></p>
            </div>
              <div class="pricing-grid">
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
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
                            echo '<li>User behaviour analysis</li>';
                            echo '<li>Conversion barrier identification</li>';
                            echo '<li>Mobile optimisation review</li>';
                            echo '<li>Performance analysis</li>';
                            echo '<li>Detailed improvement roadmap</li>';
                            echo '<li>Priority action items</li>';
                            echo '<li>2-week delivery</li>';
                        }
                        ?>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                  <div class="pricing-card featured animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_package2_name', true) ?: 'UX optimisation'; ?></h3>
                        <div class="price"><?php echo get_post_meta(get_the_ID(), 'uxui_package2_price', true) ?: '£4,997'; ?></div>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_package2_description', true) ?: 'Complete optimisation implementation'; ?></p>
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
                            echo '<li>Strategic optimisation plan</li>';
                            echo '<li>Design & development implementation</li>';
                            echo '<li>Mobile experience optimisation</li>';
                            echo '<li>Conversion element optimisation</li>';
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
                
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
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
                            echo '<li>Visual design optimisation</li>';
                            echo '<li>Advanced functionality improvements</li>';
                            echo '<li>Comprehensive performance optimisation</li>';
                            echo '<li>Multi-variant testing</li>';
                            echo '<li>Ongoing optimisation</li>';
                            echo '<li>6-week delivery</li>';
                            echo '<li>60 days support</li>';
                            echo '<li>Monthly optimisation reviews</li>';
                        }
                        ?>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>    <!-- Tools & Analytics -->
    <section class="tools-section">
        <div class="container" style="text-align: center;">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2 style="margin-bottom: 20px;">UX/UI Analysis Tools & Technologies</h2>
                <p style="max-width: 800px; margin: 0 auto 30px;">We use industry-leading tools and technologies to analyse, test, and optimise your website for maximum performance.</p>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Analytics & Research</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fab fa-google"></i>
                    </div>
                    <h3>Google Analytics</h3>
                    <p>Comprehensive website analytics platform for tracking user behaviour</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <h3>Hotjar</h3>
                    <p>Heatmaps, session recordings, and user feedback tools</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Crazy Egg & FullStory</h3>
                    <p>User behaviour visualization and scroll depth tracking</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>UserTesting & Clarity</h3>
                    <p>User testing platforms for real user feedback and insight</p>
                </div>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Testing & optimisation</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fab fa-google"></i>
                    </div>
                    <h3>Google optimise</h3>
                    <p>Free A/B testing platform with Google Analytics integration</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>optimisely</h3>
                    <p>Advanced experimentation platform for multivariate testing</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>VWO & Convert</h3>
                    <p>Visual editor for creating and testing UX optimisations</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Unbounce & AB Tasty</h3>
                    <p>Landing page optimisation and personalisation tools</p>
                </div>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Performance Tools</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Google PageSpeed</h3>
                    <p>Performance analysis and improvement recommendations</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>GTmetrix</h3>
                    <p>Detailed performance analysis and optimisation scoring</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Lighthouse</h3>
                    <p>Automated website auditing tool for performance, accessibility, and SEO</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Core Web Vitals</h3>
                    <p>Google's page experience metrics for performance measurement</p>
                </div>
            </div>
        </div>
    </section></section>    <!-- Testimonials -->    <section class="testimonials-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'uxui_testimonials_title', true) ?: 'What Our Clients Say'; ?></h2>
            <div class="testimonials-grid">
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"<?php echo get_post_meta(get_the_ID(), 'uxui_testimonial1_content', true) ?: 'The UX optimisation increased our consultation bookings by 390%. The data-driven approach was exactly what we needed.'; ?>"</p>
                    </div>
                    <div class="testimonial-author">
                        <strong><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial1_author', true) ?: 'Patricia Johnson'; ?></strong>
                        <span><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial1_position', true) ?: 'Managing Partner, LegalAdvice Pro'; ?></span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"<?php echo get_post_meta(get_the_ID(), 'uxui_testimonial2_content', true) ?: 'Our bounce rate dropped from 73% to 31% and conversions tripled. The investment paid for itself in the first month.'; ?>"</p>
                    </div>
                    <div class="testimonial-author">
                        <strong><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial2_author', true) ?: 'Andrew Wilson'; ?></strong>
                        <span><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial2_position', true) ?: 'CEO, TechFlow Solutions'; ?></span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"<?php echo get_post_meta(get_the_ID(), 'uxui_testimonial3_content', true) ?: 'The mobile optimisation alone increased our mobile conversions by 280%. Outstanding attention to detail.'; ?>"</p>
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
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;"><?php echo get_post_meta(get_the_ID(), 'uxui_faq_title', true) ?: 'Frequently Asked Questions'; ?></h2>
                <div class="faq-list">
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq1_question', true) ?: 'How do you measure UX optimisation success?'; ?></h3>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq1_answer', true) ?: 'We track key metrics including conversion rates, bounce rates, session duration, and user satisfaction scores. We provide detailed before/after analytics reports.'; ?></p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq2_question', true) ?: 'Will you need to rebuild our entire website?'; ?></h3>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq2_answer', true) ?: 'Not necessarily. Many optimisations can be implemented within your existing framework. We focus on strategic improvements that deliver maximum impact.'; ?></p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq3_question', true) ?: 'How long do optimisation projects take?'; ?></h3>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq3_answer', true) ?: 'Timeline varies by scope: 2 weeks for audits, 4 weeks for standard optimisation, and 6 weeks for complete overhauls. We provide detailed timelines during consultation.'; ?></p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq4_question', true) ?: 'Do you test changes before implementing them?'; ?></h3>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq4_answer', true) ?: 'Yes, we use A/B testing and staged rollouts to ensure improvements deliver measurable results before full implementation.'; ?></p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq5_question', true) ?: 'Can you optimise mobile experience separately?'; ?></h3>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq5_answer', true) ?: 'Absolutely! Mobile optimisation can be done as a standalone project, though we recommend comprehensive optimisation for best results.'; ?></p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3><?php echo get_post_meta(get_the_ID(), 'uxui_faq6_question', true) ?: 'What if the optimisations don\'t improve performance?'; ?></h3>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo get_post_meta(get_the_ID(), 'uxui_faq6_answer', true) ?: 'Our optimisations are data-driven and tested. If results don\'t meet expectations, we provide additional optimisation rounds at no extra cost.'; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-scale-up">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'uxui_cta_title', true) ?: 'Ready to optimise Your Website for Better Results?'; ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'uxui_cta_description', true) ?: 'Get a free UX audit and discover exactly how to improve your website\'s performance and conversions.'; ?></p>                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary"><?php echo get_post_meta(get_the_ID(), 'uxui_cta_button_text', true) ?: 'Get Free UX Audit'; ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

