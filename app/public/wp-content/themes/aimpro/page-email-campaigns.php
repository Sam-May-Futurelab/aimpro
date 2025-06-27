<?php
/**
 * Template Name: Email Campaigns
 * 
 * Email marketing campaigns services page
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="service-page email-campaigns-page">
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
                <span class="current">Email Campaigns</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_title', true) ?: 'Strategic Email Marketing Campaigns'); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_subtitle', true) ?: 'Drive engagement, nurture relationships, and boost sales with expertly crafted email campaigns that cut through inbox clutter and deliver measurable results for your business.'); ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_stat_1_number', true) ?: '4,200%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_stat_1_label', true) ?: 'Average ROI'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_stat_2_number', true) ?: '35%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_stat_2_label', true) ?: 'Higher Open Rates'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_stat_3_number', true) ?: '280%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_stat_3_label', true) ?: 'Click-Through Improvement'); ?></div>
                    </div>
                </div>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_primary_btn', true) ?: 'Launch Campaigns'); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_overview_title', true) ?: 'Professional Email Campaign Management'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_overview_description', true) ?: 'Email marketing remains one of the highest-ROI marketing channels when executed strategically. Our comprehensive email campaign services combine compelling design, persuasive copywriting, and advanced segmentation to deliver campaigns that your audience actually wants to read.'); ?></p>
            </div>
            
            <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_1_title', true) ?: 'Strategic Campaign Planning'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_1_desc', true) ?: 'Data-driven campaign strategies aligned with your business goals and customer journey stages.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_2_title', true) ?: 'Professional Email Design'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_2_desc', true) ?: 'Mobile-responsive, brand-aligned email templates that look stunning across all devices and email clients.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_3_title', true) ?: 'Conversion-Focused Copy'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_3_desc', true) ?: 'Compelling subject lines and email content that drives opens, clicks, and conversions.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_4_title', true) ?: 'Advanced Segmentation'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_4_desc', true) ?: 'Precise audience targeting based on behaviour, demographics, and purchase history for maximum relevance.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_5_title', true) ?: 'Performance optimisation'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_5_desc', true) ?: 'Continuous A/B testing and optimisation to improve open rates, click-through rates, and conversions.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_6_title', true) ?: 'Campaign Scheduling'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_6_desc', true) ?: 'Strategic timing and frequency optimisation to maximise engagement while avoiding subscriber fatigue.'); ?></p>                </div>
            </div>
        </div>
    </section>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content animate-on-scroll animate-fade-up">
                <div class="case-study-text">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_case_title', true) ?: 'Case Study: B2B Software Success'); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_case_intro', true) ?: 'How we helped a B2B software company increase their email marketing ROI by 4,200% and generate £350K in additional revenue through strategic campaign optimisation.'); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_case_challenge', true) ?: 'A growing B2B software company had a large email list but poor engagement rates. Their generic newsletters generated minimal revenue, open rates were below 15%, and they were struggling to convert trial users into paying customers through email.'); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Campaign Strategy</h3>
                        <ul>
                            <?php 
                            $solution_points = get_post_meta(get_the_ID(), 'email_campaigns_case_solution', true) ?: "Segmented list into 8 distinct audience groups based on user behaviour\nCreated targeted campaign series for each segment and buyer journey stage\nRedesigned email templates with mobile-first, conversion-focused approach\nImplemented advanced personalisation using behavioural data\nDeveloped product-specific campaigns with case studies and social proof";
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
                
                <div class="case-study-results animate-on-scroll animate-fade-up animate-delay-200">
                    <h3>The Results</h3>
                    <div class="results-grid animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_result_1_number', true) ?: '4,200%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_result_1_label', true) ?: 'ROI Increase'); ?></div>
                        </div>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_result_2_number', true) ?: '58%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_result_2_label', true) ?: 'Open Rate Improvement'); ?></div>
                        </div>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_result_3_number', true) ?: '280%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_result_3_label', true) ?: 'Click-Through Rate Increase'); ?></div>
                        </div>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_result_4_number', true) ?: '£350K'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_result_4_label', true) ?: 'Additional Annual Revenue'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Campaign Types Section -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Types of Email Campaigns We Create</h2>
                <p>Comprehensive email marketing solutions tailored to your specific business objectives and audience needs.</p>
            </div>
            <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3>Newsletter Campaigns</h3>
                    <p>Regular, value-packed newsletters that keep your brand top-of-mind and drive consistent engagement.</p>
                    <div class="service-metric">
                        <span>Average: 28% open rate</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Product Launch Campaigns</h3>
                    <p>Build anticipation and drive sales for new products or services with strategic launch sequences.</p>
                    <div class="service-metric">
                        <span>Average: 45% higher sales</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3>Promotional Campaigns</h3>
                    <p>Time-sensitive offers and sales campaigns designed to drive immediate action and revenue.</p>
                    <div class="service-metric">
                        <span>Average: 12% conversion rate</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Educational Content</h3>
                    <p>Value-driven campaigns that educate your audience and position your brand as an industry expert.</p>
                    <div class="service-metric">
                        <span>Average: 35% higher engagement</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Event & Webinar Promotion</h3>
                    <p>Drive registrations and attendance for your events, webinars, and speaking engagements.</p>
                    <div class="service-metric">
                        <span>Average: 65% registration rate</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Customer Retention</h3>
                    <p>Keep existing customers engaged with exclusive offers, updates, and loyalty programs.</p>
                    <div class="service-metric">
                        <span>Average: 25% repeat purchase increase</span>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_process_title', true) ?: 'Our Email Campaign Process'); ?></h2>
            <div class="process-steps animate-on-scroll animate-stagger animate-fade-up">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_1_title', true) ?: 'Strategy & Planning'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_1_desc', true) ?: 'Define campaign objectives, target audiences, and key performance indicators aligned with your business goals.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_2_title', true) ?: 'Audience Segmentation'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_2_desc', true) ?: 'analyse your email list and create targeted segments based on behaviour, demographics, and engagement history.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_3_title', true) ?: 'Content Creation'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_3_desc', true) ?: 'Develop compelling copy and design mobile-responsive templates that align with your brand and campaign goals.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_4_title', true) ?: 'Testing & Launch'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_4_desc', true) ?: 'A/B test subject lines, content, and send times before launching to optimise campaign performance.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_5_title', true) ?: 'Analysis & optimisation'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_5_desc', true) ?: 'Monitor performance metrics and continuously optimise future campaigns based on data insights.'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Best Practices Section -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Email Marketing Best Practices We Follow</h2>
                <p>Our proven strategies ensure your emails deliver maximum impact and engagement.</p>
            </div>
            <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile-First Design</h3>
                    <p>Over 60% of emails are opened on mobile devices. Our templates are optimised for perfect mobile experience.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-user-tag"></i>
                    </div>
                    <h3>Smart Personalisation</h3>
                    <p>Go beyond "Hi [Name]" with behavioural personalisation based on purchase history and engagement patterns.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Optimal Send Times</h3>
                    <p>Use data analytics to determine the best send times for your specific audience and industry.</p>
                </div>
                  <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Deliverability Focus</h3>
                    <p>Maintain high sender reputation and inbox placement through proper authentication and list hygiene.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>A/B Testing Strategy</h3>
                    <p>Continuously test subject lines, content, and send times to optimise performance and increase open rates.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Advanced Segmentation</h3>
                    <p>Create targeted campaigns using demographic, behavioural, and engagement data for higher conversion rates.</p>
                </div>
            </div>
        </div>
    </section><!-- Tools & Platforms -->
    <section class="tools-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Email Marketing Platforms We Use</h2>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up">
                <div class="tool-item">
                    <div class="tool-icon">
                        <i class="fab fa-mailchimp"></i>
                    </div>
                    <h3>Mailchimp</h3>
                    <p>User-friendly platform perfect for small to medium businesses with powerful automation features.</p>
                </div>
                
                <div class="tool-item">
                    <div class="tool-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Klaviyo</h3>
                    <p>Advanced e-commerce email marketing with sophisticated segmentation and predictive analytics.</p>
                </div>
                
                <div class="tool-item">
                    <div class="tool-icon">
                        <i class="fab fa-hubspot"></i>
                    </div>
                    <h3>HubSpot</h3>
                    <p>Complete marketing hub with CRM integration and comprehensive campaign management tools.</p>
                </div>
                
                <div class="tool-item">
                    <div class="tool-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>ActiveCampaign</h3>
                    <p>Powerful automation platform with advanced behavioural targeting and machine learning capabilities.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Industries Section -->
    <section class="industries-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Industries We Serve</h2>
            <div class="industries-grid animate-on-scroll animate-stagger animate-scale-up">
                <div class="industry-item">
                    <h3>E-commerce & Retail</h3>
                    <p>Product promotion, abandoned cart recovery, and customer retention campaigns.</p>
                </div>
                <div class="industry-item">
                    <h3>SaaS & Technology</h3>
                    <p>Feature announcements, trial nurturing, and user engagement campaigns.</p>
                </div>
                <div class="industry-item">
                    <h3>Professional Services</h3>
                    <p>Thought leadership content, client nurturing, and service promotion.</p>
                </div>
                <div class="industry-item">
                    <h3>Healthcare</h3>
                    <p>Patient education, appointment reminders, and wellness newsletters.</p>
                </div>
                <div class="industry-item">
                    <h3>Education</h3>
                    <p>Course promotion, student engagement, and educational content delivery.</p>
                </div>
                <div class="industry-item">
                    <h3>Financial Services</h3>
                    <p>Market updates, educational content, and compliant promotional campaigns.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content animate-on-scroll animate-fade-up">
                <blockquote>
                    "<?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_testimonial_quote', true) ?: 'Aimpro transformed our email marketing from an afterthought to our most profitable channel. Our ROI increased by 4,200% and we\'re generating £350K more revenue annually. Their strategic approach is unmatched.'); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_testimonial_author', true) ?: 'Michael Roberts'); ?></strong><br>
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_testimonial_position', true) ?: 'CEO, TechFlow Solutions'); ?>
                </cite>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-fade-up"><h2><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_cta_title', true) ?: 'Ready to Transform Your Email Marketing?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_cta_description', true) ?: 'Stop sending emails that get ignored. Our strategic email campaigns are designed to cut through inbox clutter and drive real business results. Let\'s turn your email list into a revenue-generating machine.'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-outline"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_cta_button', true) ?: 'Launch Campaigns'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Mobile-specific styles for Email Campaigns page */
@media (max-width: 768px) {
    /* Hero section mobile adjustments */
    .email-campaigns-page .hero-stats {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
    }
    
    .email-campaigns-page .hero-stats .stat-item {
        background: rgba(255, 255, 255, 0.95) !important;
        backdrop-filter: blur(10px) !important;
        border-radius: 12px !important;
        padding: 20px !important;
        text-align: center !important;
        min-height: auto !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1) !important;
    }
    
    .email-campaigns-page .hero-stats .stat-number {
        font-size: 2.5rem !important;
        font-weight: 800 !important;
        color: #f15a25 !important;
        margin-bottom: 8px !important;
        line-height: 1.1 !important;
    }
    
    .email-campaigns-page .hero-stats .stat-label {
        font-size: 0.95rem !important;
        color: #1e293b !important;
        font-weight: 500 !important;
        line-height: 1.3 !important;
    }
    
    .email-campaigns-page .hero-ctas {
        flex-direction: column !important;
        gap: 15px !important;
        width: 100% !important;
        align-items: center !important;
        justify-content: center !important;
        text-align: center !important;
    }
    
    .email-campaigns-page .hero-ctas .btn-primary {
        width: auto !important;
        max-width: 280px !important;
        padding: 16px 32px !important;
        font-size: 1.1rem !important;
        font-weight: 600 !important;
        text-align: center !important;
        border-radius: 8px !important;
        transition: all 0.3s ease !important;
        background: #f15a25 !important;
        color: white !important;
        border: 2px solid #f15a25 !important;
        display: inline-block !important;
        margin: 0 auto !important;
    }
    
    /* Service overview mobile adjustments */
    .email-campaigns-page .services-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .email-campaigns-page .service-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .email-campaigns-page .service-icon {
        margin-bottom: 16px !important;
    }
    
    .email-campaigns-page .service-icon i {
        font-size: 2rem !important;
        color: #f15a25 !important;
    }
    
    .email-campaigns-page .service-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .email-campaigns-page .service-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        margin-bottom: 0 !important;
    }
    
    /* Tools section mobile adjustments */
    .email-campaigns-page .tools-section {
        padding: 60px 0 !important;
        background: #f8fafc !important;
    }
    
    .email-campaigns-page .tools-section h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
    }
    
    .email-campaigns-page .tools-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
    }
    
    .email-campaigns-page .tool-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .email-campaigns-page .tool-icon {
        margin-bottom: 16px !important;
        background: #f15a25 !important;
        width: 64px !important;
        height: 64px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin: 0 auto 16px !important;
    }
    
    .email-campaigns-page .tool-icon i {
        font-size: 2rem !important;
        color: white !important;
    }
    
    .email-campaigns-page .tool-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .email-campaigns-page .tool-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        margin-bottom: 0 !important;
    }
    
    /* Industries section mobile adjustments */
    .email-campaigns-page .industries-section {
        padding: 60px 0 !important;
        background: white !important;
    }
    
    .email-campaigns-page .industries-section h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
    }
    
    .email-campaigns-page .industries-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
    }
    
    .email-campaigns-page .industry-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .email-campaigns-page .industry-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .email-campaigns-page .industry-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        margin-bottom: 0 !important;
    }
    
    /* Testimonial section mobile adjustments */
    .email-campaigns-page .testimonial-section {
        padding: 60px 0 !important;
        background: #f8fafc !important;
    }
    
    .email-campaigns-page .testimonial-content {
        max-width: 100% !important;
        text-align: center !important;
        padding: 0 20px !important;
    }
    
    .email-campaigns-page .testimonial-content blockquote {
        font-size: 1.1rem !important;
        line-height: 1.6 !important;
        color: #1e293b !important;
        font-style: italic !important;
        margin-bottom: 24px !important;
    }
    
    .email-campaigns-page .testimonial-content cite {
        font-size: 0.9rem !important;
        color: #64748b !important;
    }
    
    .email-campaigns-page .testimonial-content cite strong {
        color: #1e293b !important;
        font-weight: 600 !important;
    }
    
    /* CTA section mobile adjustments */
    .email-campaigns-page .cta-section {
        padding: 60px 0 !important;
        background: linear-gradient(135deg, #1e293b 0%, #334155 100%) !important;
    }
    
    .email-campaigns-page .cta-content {
        text-align: center !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .email-campaigns-page .cta-content h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: white !important;
        margin-bottom: 20px !important;
        line-height: 1.3 !important;
    }
    
    .email-campaigns-page .cta-content p {
        font-size: 1.1rem !important;
        color: #cbd5e1 !important;
        line-height: 1.6 !important;
        margin-bottom: 30px !important;
    }
    
    .email-campaigns-page .cta-buttons {
        display: flex !important;
        flex-direction: column !important;
        gap: 15px !important;
        width: 100% !important;
        align-items: stretch !important;
    }
    
    .email-campaigns-page .cta-buttons .btn-outline {
        width: 100% !important;
        padding: 16px 24px !important;
        font-size: 1.1rem !important;
        font-weight: 600 !important;
        text-align: center !important;
        border-radius: 8px !important;
        background: #f15a25 !important;
        color: white !important;
        border: 2px solid #f15a25 !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
    }
    
    .email-campaigns-page .cta-buttons .btn-outline:hover {
        background: #d14a1f !important;
        border-color: #d14a1f !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 4px 12px rgba(241, 90, 37, 0.3) !important;
    }
}
</style>

<?php get_footer(); ?>
