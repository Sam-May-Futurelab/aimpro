<?php
/**
 * Template Name: Funnel Automation
 * 
 * Sales funnel automation services page
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="service-page funnel-automation-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/marketing-automation'); ?>">Marketing Automation</a>
                <span class="separator">›</span>
                <span class="current">Funnel Automation</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_hero_title', true) ?: 'Sales Funnel Automation'); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_hero_subtitle', true) ?: 'Build intelligent sales funnels that automatically guide prospects from awareness to purchase, nurturing leads at every stage while you focus on growing your business.'); ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_hero_stat_1_number', true) ?: '420%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_hero_stat_1_label', true) ?: 'Conversion Rate Increase'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_hero_stat_2_number', true) ?: '75%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_hero_stat_2_label', true) ?: 'Less Manual Work'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_hero_stat_3_number', true) ?: '180%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_hero_stat_3_label', true) ?: 'Revenue Growth'); ?></div>
                    </div>
                </div>                <div class="hero-ctas animate-on-scroll animate-fade-up">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_hero_primary_btn', true) ?: 'Build Your Funnel'); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">            <div class="overview-content animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_overview_title', true) ?: 'Intelligent Sales Funnel Design & Automation'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_overview_description', true) ?: 'Transform your scattered marketing efforts into a cohesive, automated system that consistently converts prospects into customers. Our funnel automation strategies eliminate manual bottlenecks and ensure no lead falls through the cracks.'); ?></p>
            </div>
            
            <div class="services-grid">
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_1_title', true) ?: 'Funnel Strategy & Design'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_1_desc', true) ?: 'Custom funnel architecture tailored to your customer journey with optimised touchpoints and conversion paths.'); ?></p>
                </div>                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_2_title', true) ?: 'Lead Magnet Creation'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_2_desc', true) ?: 'Compelling lead magnets and opt-in offers that attract your ideal prospects and start the nurturing process.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_3_title', true) ?: 'Landing Page optimisation'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_3_desc', true) ?: 'High-converting landing pages designed specifically for each funnel stage with focused messaging and clear CTAs.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_4_title', true) ?: 'Multi-Step Sequences'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_4_desc', true) ?: 'Automated email and SMS sequences that nurture leads through each stage of the buying journey.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_5_title', true) ?: 'Conversion Tracking'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_5_desc', true) ?: 'Comprehensive analytics and tracking to measure funnel performance and identify optimisation opportunities.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_6_title', true) ?: 'Continuous optimisation'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_service_6_desc', true) ?: 'Data-driven improvements and A/B testing to maximise conversion rates at every funnel stage.'); ?></p>                </div>            </div>
              <!-- CTA after services overview -->
            <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Your Custom Funnel Strategy</a>
            </div>
        </div>
    </section><!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text animate-on-scroll animate-slide-left">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_case_title', true) ?: 'Case Study: Coaching Business Transformation'); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_case_intro', true) ?: 'How we helped a business coach increase conversions by 420% and automate 75% of their sales process through intelligent funnel automation, generating £1.2M in additional revenue.'); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_case_challenge', true) ?: 'A successful business coach was spending 60+ hours per week manually following up with leads, conducting discovery calls, and nurturing prospects. Despite high expertise, their conversion rate was only 8% and they couldn\'t scale beyond their time limitations.'); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Funnel Solution</h3>
                        <ul>
                            <?php 
                            $solution_points = get_post_meta(get_the_ID(), 'funnel_automation_case_solution', true) ?: "Designed 5-stage automated funnel with strategic touchpoints\nCreated high-value lead magnet (business assessment tool)\nBuilt conversion-optimised landing pages for each funnel stage\nImplemented automated email sequences with personalised video messages\nSet up automated booking system with pre-qualification questions";
                            $points = explode("\n", $solution_points);
                            foreach ($points as $point) {
                                if (trim($point)) {
                                    echo '<li>' . esc_html(trim($point)) . '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results animate-on-scroll animate-slide-right">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_result_1_number', true) ?: '420%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_result_1_label', true) ?: 'Conversion Rate Increase'); ?></div>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_result_2_number', true) ?: '75%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_result_2_label', true) ?: 'Process Automation'); ?></div>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_result_3_number', true) ?: '180%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_result_3_label', true) ?: 'Revenue Growth'); ?></div>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_result_4_number', true) ?: '£1.2M'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_result_4_label', true) ?: 'Additional Annual Revenue'); ?></div>                        </div>
                    </div>
                </div>
            </div>
            
            <!-- CTA after case study results -->
            <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <p style="font-size: 1.1rem; colour: #666; margin-bottom: 1.5rem;">Ready to achieve similar results for your business?</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Start Your Funnel Transformation</a>
            </div>
        </div>
    </section>

    <!-- Funnel Types Section -->    <!-- Funnel Types -->
    <section class="local-seo-industries">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Types of Funnels We Build</h2>
            </div>
            <div class="industries-grid">
                <div class="industry-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <div class="service-content">
                        <h3>Lead Generation Funnel</h3>
                        <p>Attract qualified prospects with valuable lead magnets and nurture them through educational content toward a sales conversation.</p>
                    </div>
                </div>
                
                <div class="industry-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="service-content">
                        <h3>E-commerce Sales Funnel</h3>
                        <p>Guide visitors from product discovery to purchase with optimised product pages, cart recovery, and upsell sequences.</p>
                    </div>
                </div>
                
                <div class="industry-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="service-content">
                        <h3>Webinar Funnel</h3>
                        <p>Drive webinar registrations, maximise attendance, and convert attendees into customers with automated follow-up sequences.</p>
                    </div>
                </div>
                
                <div class="industry-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="service-content">
                        <h3>Product Launch Funnel</h3>
                        <p>Build anticipation and drive sales for new products with pre-launch sequences and scarcity-driven campaigns.</p>
                    </div>
                </div>
                
                <div class="industry-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="service-content">
                        <h3>Course/Membership Funnel</h3>
                        <p>Convert prospects into course students or members with value-driven content and social proof.</p>
                    </div>
                </div>
                
                <div class="industry-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="service-content">
                        <h3>B2B Sales Funnel</h3>
                        <p>Nurture business prospects through complex sales cycles with targeted content and automated follow-up.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_process_title', true) ?: 'Our Funnel Development Process'); ?></h2>
            <div class="process-steps">
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_1_title', true) ?: 'Customer Journey Analysis'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_1_desc', true) ?: 'Map your customer\'s buying journey and identify key touchpoints where automation can improve conversions.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_2_title', true) ?: 'Funnel Strategy Design'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_2_desc', true) ?: 'Create comprehensive funnel blueprint with conversion goals, messaging strategy, and automation triggers.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_3_title', true) ?: 'Asset Creation'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_3_desc', true) ?: 'Develop lead magnets, landing pages, email sequences, and all creative assets needed for the funnel.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_4_title', true) ?: 'Technical Implementation'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_4_desc', true) ?: 'Build and configure all automation workflows, tracking systems, and integration connections.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_5_title', true) ?: 'Testing & optimisation'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_step_5_desc', true) ?: 'Launch with careful monitoring and continuous optimisation based on performance data and user behaviour.'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Funnel Components Section -->
    <section class="components-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Essential Funnel Components</h2>
            <div class="components-grid">
                <div class="component-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="component-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Lead Magnets</h3>
                    <p>Valuable resources that attract prospects and start the relationship with immediate value delivery.</p>
                </div>
                
                <div class="component-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="component-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Landing Pages</h3>
                    <p>Conversion-optimised pages designed to capture leads and guide visitors toward desired actions.</p>
                </div>
                
                <div class="component-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="component-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Sequences</h3>
                    <p>Automated email series that nurture leads and build relationships over time.</p>
                </div>
                
                <div class="component-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="component-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>SMS Follow-up</h3>
                    <p>High-impact text messages for time-sensitive offers and important communications.</p>
                </div>
                
                <div class="component-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="component-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Analytics & Tracking</h3>
                    <p>Comprehensive measurement of funnel performance and conversion optimisation opportunities.</p>
                </div>
                
                <div class="component-item animate-on-scroll animate-stagger animate-fade-up">                    <div class="component-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Automation Rules</h3>
                    <p>Intelligent triggers and conditions that personalise the experience based on user behaviour.</p>
                </div>
            </div>
            
            <!-- CTA after funnel components -->
            <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <p style="font-size: 1.1rem; colour: #666; margin-bottom: 1.5rem;">Let us build these components into a high-converting funnel for your business</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Your Funnel Blueprint</a>
            </div>
        </div>
    </section><!-- Packages Section -->
    <section id="packages" class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Funnel Automation Packages</h2>
                <p>Transform your sales process with automated funnels that convert visitors into customers.</p>
            </div>
            
            <div class="pricing-grid">
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Starter Funnel</h3>
                        <div class="price">£2,997</div>
                        <p>Essential funnel foundation</p>
                    </div>
                    <ul class="pricing-features">
                        <li>3-stage funnel design</li>
                        <li>1 lead magnet creation</li>
                        <li>2 landing pages</li>
                        <li>5-email nurture sequence</li>
                        <li>Basic automation setup</li>
                        <li>Performance tracking</li>
                        <li>30-day optimisation</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                
                <div class="pricing-card featured animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Complete Funnel System</h3>
                        <div class="price">£5,997</div>
                        <p>Complete automation solution</p>
                    </div>
                    <ul class="pricing-features">
                        <li>5-stage funnel architecture</li>
                        <li>3 lead magnets + resources</li>
                        <li>5 optimised landing pages</li>
                        <li>Multi-channel sequences</li>
                        <li>Advanced automation flows</li>
                        <li>A/B testing setup</li>
                        <li>90-day optimisation</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>
                
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Enterprise Funnel Suite</h3>
                        <div class="price">£12,997</div>
                        <p>Full enterprise ecosystem</p>
                    </div>
                    <ul class="pricing-features">
                        <li>Multi-funnel ecosystem</li>
                        <li>Custom asset creation</li>
                        <li>Advanced segmentation</li>
                        <li>Predictive automation</li>
                        <li>Custom integrations</li>
                        <li>Dedicated funnel specialist</li>
                        <li>6-month optimisation</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>    <!-- Tools & Platforms -->
    <section class="tools-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Funnel Building Tools We Use</h2>
            <div class="tools-grid">                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-funnel-dollar"></i>
                    </div>
                    <h3>ClickFunnels</h3>
                    <p>Complete funnel building platform with drag-and-drop editor and built-in automation features.</p>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fab fa-hubspot"></i>
                    </div>
                    <h3>HubSpot</h3>
                    <p>Comprehensive marketing hub with advanced funnel tracking and lead nurturing capabilities.</p>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>ActiveCampaign</h3>
                    <p>Powerful automation platform with sophisticated behavioural triggers and personalisation.</p>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">                    <div class="tool-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Leadpages</h3>
                    <p>High-converting landing page builder with integrated analytics and A/B testing capabilities.</p>
                </div>
            </div>
            
            <!-- CTA after tools section -->
            <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <p style="font-size: 1.1rem; colour: #666; margin-bottom: 1.5rem;">Ready to leverage these powerful tools for your funnel?</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Expert Funnel Setup</a>
            </div>
        </div>
    </section><!-- Industries Section -->
    <section class="industries-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Industries We Serve</h2>
            <div class="industries-grid">
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <h3>Coaching & Consulting</h3>
                    <p>Lead generation and client acquisition funnels for professional service providers.</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <h3>E-commerce</h3>
                    <p>Product sales funnels with upsells, cross-sells, and customer retention automation.</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <h3>SaaS & Software</h3>
                    <p>Trial-to-paid conversion funnels and user onboarding automation sequences.</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <h3>Online Education</h3>
                    <p>Course enrollment funnels and student engagement automation workflows.</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <h3>Real Estate</h3>
                    <p>Lead nurturing funnels for property buyers, sellers, and investors.</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <h3>Healthcare</h3>
                    <p>Patient acquisition and appointment booking funnels with compliant automation.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content animate-on-scroll animate-fade-up">
                <blockquote>
                    "<?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_testimonial_quote', true) ?: 'The funnel automation Aimpro built transformed my business completely. I went from working 60+ hours a week chasing leads to having a system that generates £1.2M annually while I focus on what I love most - coaching.'); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_testimonial_author', true) ?: 'Patricia Williams'); ?></strong><br>
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_testimonial_position', true) ?: 'Business Coach & Consultant'); ?>
                </cite>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_cta_title', true) ?: 'Ready to Automate Your Sales Funnel?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_cta_description', true) ?: 'Stop losing leads to manual processes and inconsistent follow-up. Our intelligent funnel automation will transform your sales process and free up your time to focus on growing your business.'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-outline"><?php echo esc_html(get_post_meta(get_the_ID(), 'funnel_automation_cta_button', true) ?: 'Build Your Funnel'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Mobile CSS for Funnel Automation Page */
@media (max-width: 768px) {
    /* Hero Section Mobile Optimization */
    .page-hero {
        padding: 60px 0 !important;
    }
    
    .hero-content {
        text-align: center;
        max-width: 100%;
        padding: 0 20px;
    }
    
    .page-hero h1 {
        font-size: 2rem !important;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 16px;
        line-height: 1.3;
    }
    
    .hero-subtitle {
        font-size: 1.1rem !important;
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 30px;
        max-width: 100%;
    }
    
    /* Tools Section Mobile Optimization */
    .tools-section {
        padding: 60px 0 !important;
    }
    
    .tools-section h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
    }
    
    .tools-section .tools-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
    }
    
    .tools-section .tool-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .tools-section .tool-icon {
        margin-bottom: 16px !important;
    }
    
    .tools-section .tool-icon i {
        font-size: 2rem !important;
        color: #f15a25 !important;
    }
    
    .tools-section .tool-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .tools-section .tool-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
        hyphens: auto !important;
        word-wrap: break-word !important;
    }
    
    /* Service Overview Grid */
    .services-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .service-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .service-icon {
        margin-bottom: 16px !important;
    }
    
    .service-icon i {
        font-size: 2rem !important;
        color: #f15a25 !important;
    }
    
    .service-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
    }
    
    .service-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
    }
    
    /* Process Steps */
    .process-steps {
        display: flex !important;
        flex-direction: column !important;
        gap: 20px !important;
    }
    
    .process-step {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        display: flex !important;
        align-items: flex-start !important;
        gap: 16px !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .step-number {
        background: #f15a25 !important;
        color: white !important;
        width: 40px !important;
        height: 40px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-weight: 700 !important;
        font-size: 1.1rem !important;
        flex-shrink: 0 !important;
    }
    
    .step-content h3 {
        color: #1e293b !important;
        font-size: 1.2rem !important;
        font-weight: 700 !important;
        margin-bottom: 8px !important;
    }
    
    .step-content p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
    }
    
    /* Pricing Grid */
    .pricing-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .pricing-card {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .pricing-card.featured {
        border: 2px solid #f15a25 !important;
        box-shadow: 0 4px 12px rgba(241, 90, 37, 0.2) !important;
    }
    
    /* Industries Grid */
    .industries-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .industry-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .industry-item h3 {
        color: #f15a25 !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
    }
    
    .industry-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
    }
    
    /* CTA Buttons */
    .btn-primary {
        background: #f15a25 !important;
        color: white !important;
        border: 2px solid #f15a25 !important;
        padding: 16px 24px !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        text-decoration: none !important;
        text-align: center !important;
        font-size: 1rem !important;
        display: block !important;
        width: 100% !important;
        max-width: 300px !important;
        margin: 0 auto !important;
    }
    
    .btn-outline {
        background: transparent !important;
        color: #f15a25 !important;
        border: 2px solid #f15a25 !important;
        padding: 16px 24px !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        text-decoration: none !important;
        text-align: center !important;
        font-size: 1rem !important;
        display: block !important;
        width: 100% !important;
        max-width: 300px !important;
        margin: 0 auto !important;
    }
    
    /* Testimonial */
    .testimonial-content {
        text-align: center !important;
        padding: 0 20px !important;
    }
    
    .testimonial-content blockquote {
        font-size: 1.1rem !important;
        line-height: 1.6 !important;
        margin-bottom: 20px !important;
    }
    
    /* Case Study Results Grid */
    .results-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px !important;
    }
    
    .result-item {
        background: white !important;
        border: 2px solid #f15a25 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .result-number {
        font-size: 2rem !important;
        font-weight: 800 !important;
        color: #f15a25 !important;
        display: block !important;
        margin-bottom: 8px !important;
    }
    
    .result-label {
        color: #64748b !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        line-height: 1.3 !important;
    }
}
</style>

<?php get_footer(); ?>

