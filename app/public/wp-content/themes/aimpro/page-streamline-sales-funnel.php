<?php
/**
 * Template Name: Streamline Sales Funnel Solution Page
 * Description: Sales funnel optimisation solution for improved conversions
 */

get_header(); ?>

<main id="primary" class="service-page streamline-funnel-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/solutions'); ?>">Solutions</a>
                <span class="separator">›</span>
                <span class="current">Streamline Sales Funnel</span>
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
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_primary_btn', true) ?: 'optimise My Funnel'); ?></a>
                    <a href="#audit" class="btn-outline streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_hero_secondary_btn', true) ?: 'Free Audit'); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <div class="overview-text animate-on-scroll animate-slide-left">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_overview_title', true) ?: 'Complete Sales Funnel Streamlining Solutions'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_overview_description', true) ?: 'Eliminate inefficiencies and gaps in your current sales process with our systematic approach to funnel optimisation and automation.'); ?></p>
                    
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
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_1_desc', true) ?: 'Comprehensive review of your existing sales process to identify bottlenecks, gaps, and optimisation opportunities.'); ?></p>
                </div>                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_2_title', true) ?: 'Process Mapping & Design'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_2_desc', true) ?: 'Visual mapping of your optimised sales journey with clear touchpoints and decision paths for maximum efficiency.'); ?></p>
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
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_4_title', true) ?: 'Nurture Sequence optimisation'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_4_desc', true) ?: 'Refined email and communication sequences that move prospects smoothly through each stage of your funnel.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_5_title', true) ?: 'Conversion Point Enhancement'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_service_5_desc', true) ?: 'Strategic optimisation of key conversion moments to reduce friction and increase completion rates.'); ?></p>
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
                            $solution_points = get_post_meta(get_the_ID(), 'streamline_case_solution', true) ?: "Redesigned complete 7-stage funnel with optimised touchpoints\nImplemented automated lead scoring and qualification system\nCreated personalised nurturing sequences based on prospect behaviour\nBuilt conversion-optimised landing pages for each funnel stage\nSet up comprehensive analytics and performance tracking\nIntegrated CRM with marketing automation for seamless handoffs";
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
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_process_title', true) ?: 'Our Proven Funnel optimisation Process'); ?></h2>                <div class="process-steps">
                    <div class="step-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><span><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_1_number', true) ?: '01'); ?></span></div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_1_title', true) ?: 'Audit & Analysis'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_1_desc', true) ?: 'Comprehensive review of your current funnel performance and identification of optimisation opportunities.'); ?></p>
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
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_3_desc', true) ?: 'Systematic implementation of optimisations and automation across all funnel touchpoints.'); ?></p>
                        </div>
                    </div>                    <div class="step-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><span><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_4_number', true) ?: '04'); ?></span></div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_4_title', true) ?: 'Monitor & optimise'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_step_4_desc', true) ?: 'Continuous monitoring and data-driven optimisation to maximise funnel performance.'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="process-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">optimise Your Sales Funnel</a>
                </div>
            </div>
        </section>        <!-- Why Choose Us Section -->
        <section class="why-choose-section">
            <div class="container">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_why_title', true) ?: 'Why Choose Aimpro for Funnel Streamlining?'); ?></h2>
                <div class="benefits-grid">
                    <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_1_title', true) ?: 'Data-Driven Approach'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_1_desc', true) ?: 'Every optimisation is backed by comprehensive analytics and A/B testing to ensure maximum ROI.'); ?></p>
                    </div>                    
                    <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_2_title', true) ?: 'Industry Expertise'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_2_desc', true) ?: '5+ years optimising funnels across diverse industries with proven conversion improvements.'); ?></p>
                    </div>
                    
                    <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_3_title', true) ?: 'Ongoing Support'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_benefit_3_desc', true) ?: 'Continuous monitoring and optimisation to maintain peak funnel performance as your business grows.'); ?></p>
                    </div>
                </div>
            </div>
        </section>        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_title', true) ?: 'Frequently Asked Questions'); ?></h2>
                <div class="faq-container animate-on-scroll animate-fade-up">
                    <div class="faq-item">
                        <h3 class="faq-question"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_1_question', true) ?: 'How long does it take to see results from funnel optimisation?'); ?></h3>
                        <div class="faq-answer">
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_1_answer', true) ?: 'Most clients see initial improvements within 2-4 weeks, with significant results typically visible within 6-8 weeks as we test, refine, and optimise the funnel based on real user data.'); ?></p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_2_question', true) ?: 'What tools do you use for funnel optimisation?'); ?></h3>
                        <div class="faq-answer">
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_2_answer', true) ?: 'We use industry-leading tools including HubSpot, Klaviyo, Google Analytics, Hotjar, and custom tracking solutions to analyse user behaviour and optimise every touchpoint.'); ?></p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <h3 class="faq-question"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_3_question', true) ?: 'Do you work with existing funnels or build from scratch?'); ?></h3>
                        <div class="faq-answer">
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_faq_3_answer', true) ?: 'We can optimise your existing funnel or build a completely new one from scratch, depending on your current setup and business needs. We always start with a comprehensive audit.'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="cta-section animate-on-scroll animate-scale-up" id="contact">
            <div class="container">
                <div class="cta-content">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_cta_title', true) ?: 'Ready to Streamline Your Sales Funnel?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_cta_description', true) ?: 'Let\'s analyse your current funnel and create a strategy that converts more prospects into customers.'); ?></p><div class="cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-secondary streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_cta_button_primary', true) ?: 'Start Your Funnel Audit'); ?></a>
                        <a href="<?php echo home_url('/book-consultation'); ?>" class="btn-outline streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'streamline_cta_button_secondary', true) ?: 'Book Free Consultation'); ?></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

<style>
/* Mobile optimizations for streamline sales funnel page */
@media (max-width: 768px) {
    /* Case Study Results Grid - Mobile Layout */
    .case-study-results .results-grid,
    .results-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-top: 1.5rem;
        width: 100%;
        max-width: 100%;
        overflow: hidden;
    }
    
    .case-study-results .result-item,
    .results-grid .result-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem 1rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
    }
    
    .case-study-results .result-number,
    .results-grid .result-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ff6b35;
        line-height: 1;
        margin-bottom: 0.5rem;
        word-break: break-word;
    }
    
    .case-study-results .result-label,
    .results-grid .result-label {
        font-size: 0.9rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }
    
    /* Hero Stats - Mobile Layout */
    .hero-stats {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-top: 1.5rem;
        width: 100%;
        max-width: 100%;
    }
    
    .hero-stats .stat-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem 1rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        width: 100%;
        box-sizing: border-box;
    }
    
    .hero-stats .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ff6b35;
        line-height: 1;
        margin-bottom: 0.5rem;
    }
    
    .hero-stats .stat-label {
        font-size: 0.9rem;
        font-weight: 600;
        color: #495057;
        line-height: 1.3;
    }
    
    /* Services Grid - Mobile Layout */
    .services-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .service-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .service-icon {
        margin-bottom: 1rem;
    }
    
    .service-icon i {
        font-size: 2.5rem;
        color: #ff6b35;
    }
    
    .service-item h3 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        color: #212529;
    }
    
    .service-item p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin: 0;
    }
    
    /* Process Steps - Mobile Layout */
    .process-steps {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .step-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .step-number {
        background: #ff6b35;
        color: white;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
    }
    
    .step-content h3 {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        color: #212529;
    }
    
    .step-content p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin: 0;
    }
    
    /* Benefits Grid - Mobile Layout */
    .benefits-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .benefit-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
    }
    
    .benefit-item h3 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        color: #212529;
    }
    
    .benefit-item p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin: 0;
    }
    
    /* CTA Buttons - Mobile Layout */
    .hero-ctas,
    .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin: 1.5rem 0;
        width: 100%;
    }
    
    .btn-primary,
    .btn-outline,
    .btn-secondary,
    .overview-cta-btn,
    .process-cta-btn {
        width: 100%;
        padding: 0.875rem 1.5rem;
        text-align: center;
        font-weight: 600;
        border-radius: 6px;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }
    
    .btn-primary,
    .btn-secondary,
    .overview-cta-btn,
    .process-cta-btn {
        background: #ff6b35;
        color: white !important;
        border: 2px solid #ff6b35;
    }
    
    .btn-primary:hover,
    .btn-secondary:hover,
    .overview-cta-btn:hover,
    .process-cta-btn:hover {
        background: #e55a2b;
        border-color: #e55a2b;
        color: white !important;
    }
    
    .btn-outline {
        background: transparent;
        color: #ff6b35 !important;
        border: 2px solid #ff6b35;
    }
    
    .btn-outline:hover {
        background: #ff6b35;
        color: white !important;
    }
    
    /* Container and Section Overrides */
    .container {
        width: 100%;
        max-width: 100%;
        padding-left: 1rem;
        padding-right: 1rem;
        box-sizing: border-box;
    }
    
    .case-study-section .container,
    .service-overview .container,
    .process-steps-section .container {
        overflow: hidden;
    }
    
    /* FAQ Section - Mobile */
    .faq-container {
        width: 100%;
    }
    
    .faq-item {
        margin-bottom: 1rem;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .faq-question {
        background: #f8f9fa;
        padding: 1rem;
        margin: 0;
        font-size: 1rem;
        cursor: pointer;
    }
    
    .faq-answer {
        padding: 1rem;
        background: white;
    }
    
    .faq-answer p {
        margin: 0;
        font-size: 0.9rem;
        line-height: 1.5;
        color: #6c757d;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* Tablet Layout - 2x2 grid */
    .results-grid,
    .hero-stats {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }
}
</style>
