<?php
/**
 * Template Name: Streamline Sales Funnel Solution Page
 * Description: Sales funnel optimisation solution for improved conversions
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo get_post_meta(get_the_ID(), 'streamline_hero_title', true) ?: 'Streamline Your Sales Funnel'; ?></h1>
                <p class="page-subtitle"><?php echo get_post_meta(get_the_ID(), 'streamline_hero_subtitle', true) ?: 'Transform scattered marketing efforts into a cohesive, high-converting sales system that works around the clock.'; ?></p>
                
                <!-- Hero Stats -->
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo get_post_meta(get_the_ID(), 'streamline_hero_stat_1_number', true) ?: '340%'; ?></span>
                        <span class="stat-label"><?php echo get_post_meta(get_the_ID(), 'streamline_hero_stat_1_label', true) ?: 'Lead Quality Improvement'; ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo get_post_meta(get_the_ID(), 'streamline_hero_stat_2_number', true) ?: '65%'; ?></span>
                        <span class="stat-label"><?php echo get_post_meta(get_the_ID(), 'streamline_hero_stat_2_label', true) ?: 'Faster Sales Cycle'; ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo get_post_meta(get_the_ID(), 'streamline_hero_stat_3_number', true) ?: '180%'; ?></span>
                        <span class="stat-label"><?php echo get_post_meta(get_the_ID(), 'streamline_hero_stat_3_label', true) ?: 'Revenue Growth'; ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solution Overview -->
        <section class="solution-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <h2><?php echo get_post_meta(get_the_ID(), 'streamline_overview_title', true) ?: 'Complete Sales Funnel Streamlining Solutions'; ?></h2>
                        <p><?php echo get_post_meta(get_the_ID(), 'streamline_overview_description', true) ?: 'Eliminate inefficiencies and gaps in your current sales process with our systematic approach to funnel optimisation and automation.'; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sales Funnel Services -->
        <section class="funnel-services">
            <div class="section-content">
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_service_1_title', true) ?: 'Funnel Analysis & Audit'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_service_1_desc', true) ?: 'Comprehensive review of your existing sales process to identify bottlenecks, gaps, and optimisation opportunities.'; ?></p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_service_2_title', true) ?: 'Process Mapping & Design'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_service_2_desc', true) ?: 'Visual mapping of your optimised sales journey with clear touchpoints and decision paths for maximum efficiency.'; ?></p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_service_3_title', true) ?: 'Lead Qualification System'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_service_3_desc', true) ?: 'Automated lead scoring and qualification processes that ensure your team focuses on the highest-value prospects.'; ?></p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_service_4_title', true) ?: 'Nurture Sequence optimisation'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_service_4_desc', true) ?: 'Refined email and communication sequences that move prospects smoothly through each stage of your funnel.'; ?></p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_service_5_title', true) ?: 'Conversion Point Enhancement'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_service_5_desc', true) ?: 'Strategic optimisation of key conversion moments to reduce friction and increase completion rates.'; ?></p>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_service_6_title', true) ?: 'Performance Monitoring'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_service_6_desc', true) ?: 'Ongoing analytics and reporting to track funnel performance and identify continuous improvement opportunities.'; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Study -->
        <section class="funnel-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <h2><?php echo get_post_meta(get_the_ID(), 'streamline_case_title', true) ?: 'Case Study: TechFlow Solutions Results'; ?></h2>
                        <p><?php echo get_post_meta(get_the_ID(), 'streamline_case_intro', true) ?: 'A B2B software company struggling with low conversion rates and long sales cycles. We completely redesigned their funnel strategy and implemented automated nurturing sequences.'; ?></p>
                        
                        <div class="case-study-results">
                            <div class="result-item">
                                <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'streamline_result_1_number', true) ?: '340%'; ?></span>
                                <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'streamline_result_1_label', true) ?: 'Conversion Rate Increase'; ?></span>
                            </div>
                            <div class="result-item">
                                <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'streamline_result_2_number', true) ?: '45%'; ?></span>
                                <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'streamline_result_2_label', true) ?: 'Sales Cycle Reduction'; ?></span>
                            </div>
                            <div class="result-item">
                                <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'streamline_result_3_number', true) ?: '280%'; ?></span>
                                <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'streamline_result_3_label', true) ?: 'Lead Quality Improvement'; ?></span>
                            </div>
                            <div class="result-item">
                                <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'streamline_result_4_number', true) ?: '£125K'; ?></span>
                                <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'streamline_result_4_label', true) ?: 'Revenue Growth'; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Steps -->
        <section class="process-steps">
            <div class="section-content">
                <h2><?php echo get_post_meta(get_the_ID(), 'streamline_process_title', true) ?: 'Our Proven Funnel optimisation Process'; ?></h2>
                <div class="steps-container">
                    <div class="step-item">
                        <div class="step-number"><?php echo get_post_meta(get_the_ID(), 'streamline_step_1_number', true) ?: '01'; ?></div>
                        <div class="step-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_step_1_title', true) ?: 'Audit & Analysis'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_step_1_desc', true) ?: 'Comprehensive review of your current funnel performance and identification of optimisation opportunities.'; ?></p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number"><?php echo get_post_meta(get_the_ID(), 'streamline_step_2_number', true) ?: '02'; ?></div>
                        <div class="step-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_step_2_title', true) ?: 'Strategy Development'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_step_2_desc', true) ?: 'Custom funnel strategy tailored to your business goals and customer journey requirements.'; ?></p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number"><?php echo get_post_meta(get_the_ID(), 'streamline_step_3_number', true) ?: '03'; ?></div>
                        <div class="step-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_step_3_title', true) ?: 'Implementation'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_step_3_desc', true) ?: 'Systematic implementation of optimisations and automation across all funnel touchpoints.'; ?></p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number"><?php echo get_post_meta(get_the_ID(), 'streamline_step_4_number', true) ?: '04'; ?></div>
                        <div class="step-content">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_step_4_title', true) ?: 'Monitor & optimise'; ?></h3>
                            <p><?php echo get_post_meta(get_the_ID(), 'streamline_step_4_desc', true) ?: 'Continuous monitoring and data-driven optimisation to maximise funnel performance.'; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="section-content">
                <div class="cta-content">
                    <h2>Ready to Streamline Your Sales Funnel?</h2>
                    <p>Let's analyse your current funnel and create a strategy that converts more prospects into customers.</p>
                    <div class="cta-buttons">
                        <a href="/contact" class="btn btn-primary">Start Your Funnel Audit</a>
                        <a href="/book-consultation" class="btn btn-secondary">Book Free Consultation</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
