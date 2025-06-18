<?php
/**
 * Template Name: Streamline Sales Funnel Solution Page
 * Description: Sales funnel optimization solution for improved conversions
 */

get_header(); ?>

<main id="primary" class="service-page streamline-funnel-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <?php
                $breadcrumb_path = get_post_meta(get_the_ID(), 'streamline_breadcrumb_path', true) ?: 'Home › Services › Marketing Automation › Streamline Sales Funnel';
                $parts = explode(' › ', $breadcrumb_path);
                $urls = array(
                    'Home' => home_url(),
                    'Services' => home_url('/services'),
                    'Marketing Automation' => home_url('/marketing-automation'),
                    'Streamline Sales Funnel' => ''
                );
                
                foreach ($parts as $index => $part) {
                    if ($index < count($parts) - 1) {
                        $url = isset($urls[$part]) ? $urls[$part] : '#';
                        echo '<a href="' . esc_url($url) . '">' . esc_html($part) . '</a>';
                        echo '<span class="separator">›</span>';
                    } else {
                        echo '<span class="current">' . esc_html($part) . '</span>';
                    }
                }
                ?>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_title', true) ?: 'Streamline Your Sales Funnel'); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_subtitle', true) ?: 'Transform scattered marketing efforts into a cohesive, high-converting sales system that works around the clock.'); ?></p>
                
                <div class="hero-stats animate-on-scroll animate-fade-up">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_stat_1_number', true) ?: '340%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_stat_1_label', true) ?: 'Lead Quality Improvement'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_stat_2_number', true) ?: '65%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_stat_2_label', true) ?: 'Faster Sales Cycle'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_stat_3_number', true) ?: '180%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_stat_3_label', true) ?: 'Revenue Growth'); ?></div>
                    </div>
                </div>
                
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_primary_btn', true) ?: 'Optimize My Funnel'); ?></a>
                    <a href="#audit" class="btn-outline streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_secondary_btn', true) ?: 'Free Audit'); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <div class="overview-text animate-on-scroll animate-slide-left">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_overview_title', true) ?: 'Complete Sales Funnel Streamlining Solutions'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_overview_description', true) ?: 'Eliminate inefficiencies and gaps in your current sales process with our systematic approach to funnel optimization and automation.'); ?></p>
                    
                    <div class="solution-challenges">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_problems_title', true) ?: 'Sales Funnel Problems We Solve:'); ?></h3>
                        <ul>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_problem_1', true) ?: 'High drop-off rates between funnel stages'); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_problem_2', true) ?: 'Poor lead qualification and scoring systems'); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_problem_3', true) ?: 'Inconsistent follow-up and nurturing sequences'); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_problem_4', true) ?: 'Lack of funnel visibility and performance tracking'); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_problem_5', true) ?: 'Misaligned marketing and sales efforts'); ?></li>
                            <li><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_problem_6', true) ?: 'Manual processes slowing down conversions'); ?></li>
                        </ul>
                    </div>
                </div>                <div class="overview-image animate-on-scroll animate-slide-right">
                    <?php 
                    $overview_image = get_post_meta(get_the_ID(), 'streamline_overview_image', true);
                    $default_image = get_template_directory_uri() . '/assets/images/services/streamline-sales-funnel.jpg';
                    ?>
                    <div class="image-wrapper">
                        <img src="<?php echo esc_url($overview_image ?: $default_image); ?>" alt="Sales Funnel Streamlining" />
                    </div>
                    <div class="overview-image-cta">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary overview-cta-btn">Streamline Your Sales Funnel</a>
                    </div>
                </div>
            </div><div class="services-grid">
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-search-plus"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_1_title', true) ?: 'Funnel Analysis & Audit'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_1_desc', true) ?: 'Comprehensive review of your existing sales process to identify bottlenecks, gaps, and optimization opportunities.'); ?></p>
                </div>                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_2_title', true) ?: 'Process Mapping & Design'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_2_desc', true) ?: 'Visual mapping of your optimized sales journey with clear touchpoints and decision paths for maximum efficiency.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_3_title', true) ?: 'Lead Qualification System'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_3_desc', true) ?: 'Automated lead scoring and qualification processes that ensure your team focuses on the highest-value prospects.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_4_title', true) ?: 'Nurture Sequence Optimization'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_4_desc', true) ?: 'Refined email and communication sequences that move prospects smoothly through each stage of your funnel.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_5_title', true) ?: 'Conversion Point Enhancement'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_5_desc', true) ?: 'Strategic optimization of key conversion moments to reduce friction and increase completion rates.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_6_title', true) ?: 'Performance Monitoring'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_6_desc', true) ?: 'Ongoing analytics and reporting to track funnel performance and identify continuous improvement opportunities.'); ?></p>
                </div>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text animate-on-scroll animate-slide-left">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_case_title', true) ?: 'Case Study: TechFlow Solutions Results'); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_case_intro', true) ?: 'A B2B software company struggling with low conversion rates and long sales cycles. We completely redesigned their funnel strategy and implemented automated nurturing sequences.'); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_case_challenge', true) ?: 'TechFlow Solutions was struggling with a 12% conversion rate and losing 68% of qualified leads due to poor follow-up processes and a fragmented sales funnel with multiple drop-off points.'); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Funnel Solution</h3>
                        <ul>
                            <?php 
                            $solution_points = get_post_meta(get_the_ID(), 'streamline_case_solution', true) ?: "Redesigned complete 7-stage funnel with optimized touchpoints\nImplemented automated lead scoring and qualification system\nCreated personalized nurturing sequences based on prospect behavior\nBuilt conversion-optimized landing pages for each funnel stage\nSet up comprehensive analytics and performance tracking\nIntegrated CRM with marketing automation for seamless handoffs";
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
                        <div class="result-item animate-on-scroll animate-stagger animate-fade-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_result_1_number', true) ?: '340%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_result_1_label', true) ?: 'Conversion Rate Increase'); ?></div>
                        </div>                        <div class="result-item animate-on-scroll animate-stagger animate-fade-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_result_2_number', true) ?: '45%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_result_2_label', true) ?: 'Sales Cycle Reduction'); ?></div>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-fade-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_result_3_number', true) ?: '280%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_result_3_label', true) ?: 'Lead Quality Improvement'); ?></div>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-fade-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_result_4_number', true) ?: '£125K'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_result_4_label', true) ?: 'Revenue Growth'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>        <!-- Process Steps -->
        <section class="process-steps-section">
            <div class="container">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_process_title', true) ?: 'Our Proven Funnel Optimization Process'); ?></h2>                <div class="process-steps">
                    <div class="step-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><span><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_1_number', true) ?: '01'); ?></span></div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_1_title', true) ?: 'Audit & Analysis'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_1_desc', true) ?: 'Comprehensive review of your current funnel performance and identification of optimization opportunities.'); ?></p>
                        </div>
                    </div>                    <div class="step-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><span><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_2_number', true) ?: '02'); ?></span></div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_2_title', true) ?: 'Strategy Development'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_2_desc', true) ?: 'Custom funnel strategy tailored to your business goals and customer journey requirements.'); ?></p>
                        </div>
                    </div>

                    <div class="step-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><span><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_3_number', true) ?: '03'); ?></span></div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_3_title', true) ?: 'Implementation'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_3_desc', true) ?: 'Systematic implementation of optimizations and automation across all funnel touchpoints.'); ?></p>
                        </div>
                    </div>                    <div class="step-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><span><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_4_number', true) ?: '04'); ?></span></div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_4_title', true) ?: 'Monitor & Optimize'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_4_desc', true) ?: 'Continuous monitoring and data-driven optimization to maximize funnel performance.'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="process-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Optimize Your Sales Funnel</a>
                </div>
            </div>
        </section>        <!-- Why Choose Us Section -->
        <section class="why-choose-section">
            <div class="container">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_why_title', true) ?: 'Why Choose AiMPro for Funnel Streamlining?'); ?></h2>
                <div class="benefits-grid">
                    <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_1_title', true) ?: 'Data-Driven Approach'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_1_desc', true) ?: 'Every optimization is backed by comprehensive analytics and A/B testing to ensure maximum ROI.'); ?></p>
                    </div>                    
                    <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_2_title', true) ?: 'Industry Expertise'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_2_desc', true) ?: '5+ years optimizing funnels across diverse industries with proven conversion improvements.'); ?></p>
                    </div>
                    
                    <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_3_title', true) ?: 'Ongoing Support'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_3_desc', true) ?: 'Continuous monitoring and optimization to maintain peak funnel performance as your business grows.'); ?></p>
                    </div>
                </div>
            </div>
        </section>        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_title', true) ?: 'Frequently Asked Questions'); ?></h2>
                <div class="faq-container animate-on-scroll animate-fade-up">
                    <div class="faq-item">
                        <h3 class="faq-question"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_1_question', true) ?: 'How long does it take to see results from funnel optimization?'); ?></h3>
                        <div class="faq-answer">
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_1_answer', true) ?: 'Most clients see initial improvements within 2-4 weeks, with significant results typically visible within 6-8 weeks as we test, refine, and optimize the funnel based on real user data.'); ?></p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_2_question', true) ?: 'What tools do you use for funnel optimization?'); ?></h3>
                        <div class="faq-answer">
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_2_answer', true) ?: 'We use industry-leading tools including HubSpot, Klaviyo, Google Analytics, Hotjar, and custom tracking solutions to analyze user behavior and optimize every touchpoint.'); ?></p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_3_question', true) ?: 'Do you work with existing funnels or build from scratch?'); ?></h3>
                        <div class="faq-answer">
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_3_answer', true) ?: 'We can optimize your existing funnel or build a completely new one from scratch, depending on your current setup and business needs. We always start with a comprehensive audit.'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="cta-section animate-on-scroll animate-scale-up" id="contact">
            <div class="container">
                <div class="cta-content">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_cta_title', true) ?: 'Ready to Streamline Your Sales Funnel?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_cta_description', true) ?: 'Let\'s analyze your current funnel and create a strategy that converts more prospects into customers.'); ?></p><div class="cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-secondary streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_cta_button_primary', true) ?: 'Start Your Funnel Audit'); ?></a>
                        <a href="<?php echo home_url('/book-consultation'); ?>" class="btn-outline streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_cta_button_secondary', true) ?: 'Book Free Consultation'); ?></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
