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
            <div class="hero-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_title', true) ?: 'Strategic Email Marketing Campaigns'); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_subtitle', true) ?: 'Drive engagement, nurture relationships, and boost sales with expertly crafted email campaigns that cut through inbox clutter and deliver measurable results for your business.'); ?></p>
                <div class="hero-stats">
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
                    <a href="#packages" class="btn-outline streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_hero_secondary_btn', true) ?: 'View Packages'); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_overview_title', true) ?: 'Professional Email Campaign Management'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_overview_description', true) ?: 'Email marketing remains one of the highest-ROI marketing channels when executed strategically. Our comprehensive email campaign services combine compelling design, persuasive copywriting, and advanced segmentation to deliver campaigns that your audience actually wants to read.'); ?></p>
            </div>
            
            <div class="services-grid">
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
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_4_desc', true) ?: 'Precise audience targeting based on behavior, demographics, and purchase history for maximum relevance.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_5_title', true) ?: 'Performance Optimization'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_5_desc', true) ?: 'Continuous A/B testing and optimization to improve open rates, click-through rates, and conversions.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_6_title', true) ?: 'Campaign Scheduling'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_service_6_desc', true) ?: 'Strategic timing and frequency optimization to maximize engagement while avoiding subscriber fatigue.'); ?></p>
                </div>
            </div>
        </div>
    </section>
                    <p>Continuous A/B testing and optimization to improve open rates, click-through rates, and conversions.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Campaign Scheduling</h3>
                    <p>Strategic timing and frequency optimization to maximize engagement while avoiding subscriber fatigue.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_case_title', true) ?: 'Case Study: B2B Software Success'); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_case_intro', true) ?: 'How we helped a B2B software company increase their email marketing ROI by 4,200% and generate £350K in additional revenue through strategic campaign optimization.'); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_case_challenge', true) ?: 'A growing B2B software company had a large email list but poor engagement rates. Their generic newsletters generated minimal revenue, open rates were below 15%, and they were struggling to convert trial users into paying customers through email.'); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Campaign Strategy</h3>
                        <ul>
                            <?php 
                            $solution_points = get_post_meta(get_the_ID(), 'email_campaigns_case_solution', true) ?: "Segmented list into 8 distinct audience groups based on user behavior\nCreated targeted campaign series for each segment and buyer journey stage\nRedesigned email templates with mobile-first, conversion-focused approach\nImplemented advanced personalization using behavioral data\nDeveloped product-specific campaigns with case studies and social proof";
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
                
                <div class="case-study-results">
                    <h3>The Results</h3>
                    <div class="results-grid">
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
            <div class="section-header">
                <h2>Types of Email Campaigns We Create</h2>
                <p>Comprehensive email marketing solutions tailored to your specific business objectives and audience needs.</p>
            </div>
            <div class="services-grid">
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
            <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_process_title', true) ?: 'Our Email Campaign Process'); ?></h2>
            <div class="process-steps">
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
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_2_desc', true) ?: 'Analyze your email list and create targeted segments based on behavior, demographics, and engagement history.'); ?></p>
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
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_4_desc', true) ?: 'A/B test subject lines, content, and send times before launching to optimize campaign performance.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_5_title', true) ?: 'Analysis & Optimization'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_step_5_desc', true) ?: 'Monitor performance metrics and continuously optimize future campaigns based on data insights.'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Best Practices Section -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header">
                <h2>Email Marketing Best Practices We Follow</h2>
                <p>Our proven strategies ensure your emails deliver maximum impact and engagement.</p>
            </div>
            <div class="services-grid">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile-First Design</h3>
                    <p>Over 60% of emails are opened on mobile devices. Our templates are optimized for perfect mobile experience.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-user-tag"></i>
                    </div>
                    <h3>Smart Personalization</h3>
                    <p>Go beyond "Hi [Name]" with behavioral personalization based on purchase history and engagement patterns.</p>
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
            </div>
        </div>
    </section>

    <!-- Tools & Platforms -->
    <section class="tools-section">
        <div class="container">
            <h2>Email Marketing Platforms We Use</h2>
            <div class="tools-grid">
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
                    <p>Powerful automation platform with advanced behavioral targeting and machine learning capabilities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="industries-section">
        <div class="container">
            <h2>Industries We Serve</h2>
            <div class="industries-grid">
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
            <div class="testimonial-content">
                <blockquote>
                    "<?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_testimonial_quote', true) ?: 'Aimpro transformed our email marketing from an afterthought to our most profitable channel. Our ROI increased by 4,200% and we\'re generating £350K more revenue annually. Their strategic approach is unmatched.'); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_testimonial_author', true) ?: 'Michael Roberts'); ?></strong><br>
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_testimonial_position', true) ?: 'CEO, TechFlow Solutions'); ?>
                </cite>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_cta_title', true) ?: 'Ready to Transform Your Email Marketing?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_cta_description', true) ?: 'Stop sending emails that get ignored. Our strategic email campaigns are designed to cut through inbox clutter and drive real business results. Let\'s turn your email list into a revenue-generating machine.'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_campaigns_cta_button', true) ?: 'Launch Campaigns'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
