<?php
/**
 * Template Name: Sales Funnel Development
 * 
 * Sales Funnel Development Services
 *
 * @package Aimpro
 */

get_header(); ?>

<style>
.tools-section .tool-icon {
    display: flex;
    justify-content: centre;
    align-items: centre;
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

<main id="primary" class="funnel-builds-page">
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
                <span class="current">Sales Funnel Development</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="service-hero">
        <div class="container">
            <div class="service-hero-content animate-on-scroll animate-fade-up">                <div class="hero-text">
                    <h1><?php echo get_post_meta(get_the_ID(), 'fb_hero_title', true) ?: 'Sales Funnel Development'; ?></h1>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number"><?php echo get_post_meta(get_the_ID(), 'fb_stat1_number', true) ?: '420%'; ?></span>
                            <span class="stat-label"><?php echo get_post_meta(get_the_ID(), 'fb_stat1_label', true) ?: 'Average Sales Velocity Increase'; ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number"><?php echo get_post_meta(get_the_ID(), 'fb_stat2_number', true) ?: '68%'; ?></span>
                            <span class="stat-label"><?php echo get_post_meta(get_the_ID(), 'fb_stat2_label', true) ?: 'Lead-to-Customer Rate'; ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number"><?php echo get_post_meta(get_the_ID(), 'fb_stat3_number', true) ?: '3.2x'; ?></span>
                            <span class="stat-label"><?php echo get_post_meta(get_the_ID(), 'fb_stat3_label', true) ?: 'Average Revenue Per Visitor'; ?></span>
                        </div>
                    </div>                    <div class="hero-cta">
                        <a href="#contact" class="btn-primary">Get Funnel Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Sales Funnels That Drive Consistent Results</h2>
            </div>
              <div class="features-grid">
                <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>End-to-End Journey Mapping</h3>
                    <p>Comprehensive customer journey design that targets each stage of awareness with appropriate messaging and offers.</p>
                </div>
                <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>behaviour-Based Automation</h3>
                    <p>Intelligent automation that responds to user behaviour and personalises the experience to increase conversion rates.</p>
                </div>
                <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Multi-Channel Integration</h3>
                    <p>Seamless integration across email, SMS, and retargeting to maintain engagement throughout the sales process.</p>
                </div>
                <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Conversion optimisation</h3>
                    <p>Continuous testing and refinement to maximise conversions at each step of your sales funnel.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section id="case-study" class="case-study-section">
        <div class="container">
            <div class="case-study-content">                <div class="case-study-header animate-on-scroll animate-fade-up">
                    <span class="case-study-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_subtitle', true) ?: 'Case Study'; ?></span>
                    <h2><?php echo get_post_meta(get_the_ID(), 'fb_case_study_title', true) ?: 'How DigitalCourse Pro Generated £540K in 90 Days with a Strategic Sales Funnel'; ?></h2>
                </div>
                
                <div class="case-study-grid">
                    <div class="case-study-challenge animate-on-scroll animate-slide-left">                        <p><?php echo get_post_meta(get_the_ID(), 'fb_case_study_challenge', true) ?: 'DigitalCourse Pro was struggling to convert their high-quality traffic into course sales. They had a single sales page that wasn\'t building enough trust or demonstrating value before asking for a £2,000 course purchase.'; ?></p>
                        
                        <div class="challenge-metrics">
                            <div class="metric animate-on-scroll animate-stagger animate-scale-up">
                                <span class="metric-value"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_stat1_number', true) ?: '1.8%'; ?></span>
                                <span class="metric-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_stat1_label', true) ?: 'Conversion Rate'; ?></span>
                            </div>
                            <div class="metric animate-on-scroll animate-stagger animate-scale-up">
                                <span class="metric-value"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_stat2_number', true) ?: '£890'; ?></span>
                                <span class="metric-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_stat2_label', true) ?: 'Monthly Revenue'; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-study-solution animate-on-scroll animate-slide-right">
                        <h3><?php echo get_post_meta(get_the_ID(), 'fb_case_study_solution_title', true) ?: 'Our Solution'; ?></h3>
                        <ul>
                            <?php 
                            $solutions = get_post_meta(get_the_ID(), 'fb_case_study_solution', true);
                            if (!empty($solutions)) {
                                $solution_lines = explode("\n", $solutions);
                                foreach ($solution_lines as $line) {
                                    if (!empty(trim($line))) {
                                        echo '<li>' . esc_html(trim($line)) . '</li>';
                                    }
                                }
                            } else {
                                echo '<li><strong>Lead Magnet Funnel:</strong> Created valuable free course to capture email addresses</li>';
                                echo '<li><strong>Nurture Sequence:</strong> 7-day email series building trust and demonstrating expertise</li>';
                                echo '<li><strong>Webinar Funnel:</strong> Live training sessions showcasing course value</li>';
                                echo '<li><strong>Sales Page optimisation:</strong> High-converting sales page with social proof</li>';
                                echo '<li><strong>Upsell System:</strong> Additional products and coaching offers post-purchase</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                  <div class="case-study-results animate-on-scroll animate-fade-up">
                    <h3><?php echo get_post_meta(get_the_ID(), 'fb_case_study_results_title', true) ?: 'The Results'; ?></h3>
                    <div class="results-grid">
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result1_number', true) ?: '£540K'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result1_label', true) ?: 'Revenue in 90 Days'; ?></span>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result2_number', true) ?: '23.5%'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result2_label', true) ?: 'Funnel Conversion Rate'; ?></span>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result3_number', true) ?: '£3,800'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result3_label', true) ?: 'Average Order Value'; ?></span>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result4_number', true) ?: '6.2x'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result4_label', true) ?: 'ROI in First Quarter'; ?></span>
                        </div>
                            <span class="result-number">3,200+</span>
                            <span class="result-label">New Email Subscribers</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">£3,400</span>
                            <span class="result-label">Average Customer Value</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Funnel Types -->
    <section class="funnel-types">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Types of Sales Funnels We Build</h2>
            
            <div class="types-grid">
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Lead Generation Funnels</h3>
                    <p>Capture high-quality leads with valuable lead magnets and nurture them into paying customers.</p>
                    <ul>
                        <li>E-book download funnels</li>
                        <li>Free tool/calculator funnels</li>
                        <li>Video series funnels</li>
                        <li>Assessment/quiz funnels</li>
                    </ul>
                    <div class="type-result">Average: 340% more leads</div>
                </div>
                
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Webinar Funnels</h3>
                    <p>Build authority and trust through educational webinars that naturally lead to sales.</p>
                    <ul>
                        <li>Registration page optimisation</li>
                        <li>Reminder email sequences</li>
                        <li>Webinar delivery systems</li>
                        <li>Post-webinar sales sequences</li>
                    </ul>
                    <div class="type-result">Average: 28% attendance rate</div>
                </div>
                
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-commerce Funnels</h3>
                    <p>Maximize revenue per visitor with strategic product funnels and upsell sequences.</p>
                    <ul>
                        <li>Product discovery funnels</li>
                        <li>Cart abandonment recovery</li>
                        <li>Upsell/cross-sell funnels</li>
                        <li>Customer retention funnels</li>
                    </ul>
                    <div class="type-result">Average: 45% increase in AOV</div>
                </div>
                
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Membership Funnels</h3>
                    <p>Build recurring revenue with membership and subscription-based funnels.</p>
                    <ul>
                        <li>Free trial funnels</li>
                        <li>Membership sales pages</li>
                        <li>Onboarding sequences</li>
                        <li>Retention campaigns</li>
                    </ul>
                    <div class="type-result">Average: 85% retention rate</div>
                </div>
            </div>
        </div>
    </section><!-- Development Process -->
    <section class="development-process">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Our Funnel Development Process</h2>
            
            <div class="process-timeline">
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Funnel Strategy & Mapping</h3>
                        <p>analyse your business model and create detailed funnel strategy with customer journey mapping.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Lead Magnet Creation</h3>
                        <p>Develop compelling lead magnets and value offers that attract your ideal customers.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Page Development</h3>
                        <p>Build all funnel pages with conversion-focused design and mobile optimisation.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Email Automation Setup</h3>
                        <p>Create automated email sequences that nurture leads and drive conversions.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Integration & Testing</h3>
                        <p>Connect all systems, set up tracking, and thoroughly test the complete funnel flow.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Launch & optimisation</h3>
                        <p>Launch funnel with comprehensive analytics and ongoing optimisation based on performance data.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Sales Funnel Development Packages</h2>
                <p>Complete funnel systems designed to maximise your revenue and customer lifetime value.</p>
            </div>
            
            <div class="pricing-grid">
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Starter Funnel</h3>
                        <div class="price">£3,997</div>
                        <p>Simple lead generation funnel</p>
                    </div>
                    <ul class="pricing-features">
                        <li>3-page funnel system</li>
                        <li>Lead magnet creation</li>
                        <li>Opt-in page optimisation</li>
                        <li>Thank you page</li>
                        <li>Basic email automation (5 emails)</li>
                        <li>Analytics setup</li>
                        <li>3-week delivery</li>
                        <li>30 days support</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                  <div class="pricing-card featured animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Professional Funnel</h3>
                        <div class="price">£7,997</div>
                        <p>Complete sales funnel system</p>
                    </div>
                    <ul class="pricing-features">
                        <li>5-7 page funnel system</li>
                        <li>Advanced lead magnets</li>
                        <li>Sales page optimisation</li>
                        <li>Webinar funnel setup</li>
                        <li>Advanced email automation (15+ emails)</li>
                        <li>Upsell/downsell pages</li>
                        <li>Payment integration</li>
                        <li>A/B testing setup</li>
                        <li>5-week delivery</li>
                        <li>60 days support</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>
                
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Enterprise Funnel</h3>
                        <div class="price">£15,997</div>
                        <p>Complete funnel ecosystem</p>
                    </div>
                    <ul class="pricing-features">
                        <li>10+ page funnel system</li>
                        <li>Multiple traffic funnels</li>
                        <li>Advanced segmentation</li>
                        <li>Multi-product funnels</li>
                        <li>Comprehensive automation (30+ emails)</li>
                        <li>Customer retention funnels</li>
                        <li>Advanced integrations</li>
                        <li>Split testing optimisation</li>
                        <li>8-week delivery</li>
                        <li>90 days support</li>
                        <li>Ongoing optimisation</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>    <!-- Technologies -->
    <section class="tools-section">
        <div class="container" style="text-align: centre;">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2 style="margin-bottom: 20px;">Funnel Technologies & Platforms</h2>
                <p style="max-width: 800px; margin: 0 auto 30px;">We use industry-leading tools and technologies to create high-converting, automated sales funnels that drive consistent results.</p>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Funnel Platforms</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: centre;">                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-funnel-dollar"></i>
                    </div>
                    <h3>ClickFunnels</h3>
                    <p>specialised funnel builder for sales pages and marketing funnels</p>
                </div>
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Leadpages</h3>
                    <p>Landing page platform focused on lead generation and conversions</p>
                </div>
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-window-maximise"></i>
                    </div>
                    <h3>Unbounce & Instapage</h3>
                    <p>Advanced landing page platforms with A/B testing capabilities</p>
                </div>
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <h3>WordPress</h3>
                    <p>Flexible CMS for custom-developed, brand-aligned funnel experiences</p>
                </div>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Email Automation</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: centre;">
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3>ActiveCampaign</h3>
                    <p>Advanced automation platform with behaviour-based segmentation</p>
                </div>
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <h3>ConvertKit</h3>
                    <p>Creator-focused email platform for content and course creators</p>
                </div>
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fab fa-mailchimp"></i>
                    </div>
                    <h3>Mailchimp & Klaviyo</h3>
                    <p>Email marketing platforms for newsletters and e-commerce automation</p>
                </div>
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>GetResponse & Drip</h3>
                    <p>specialised automation tools with visual workflow builders</p>
                </div>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Payment & CRM Integration</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: centre;">
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fab fa-stripe"></i>
                    </div>
                    <h3>Stripe & PayPal</h3>
                    <p>Secure payment processing for one-time and subscription billing</p>
                </div>
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fab fa-hubspot"></i>
                    </div>
                    <h3>HubSpot</h3>
                    <p>All-in-one marketing platform with CRM and automation capabilities</p>
                </div>
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fab fa-salesforce"></i>
                    </div>
                    <h3>Salesforce</h3>
                    <p>Enterprise CRM solution for sales team integration and tracking</p>
                </div>                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-plug"></i>
                    </div>
                    <h3>Zapier & Integrations</h3>
                    <p>Automated workflows connecting your funnel with 3000+ business tools</p>
                </div>
            </div>
        </div>
    </section>    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">What Our Clients Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"Our new sales funnel generated £540K in just 90 days. The systematic approach to nurturing leads is brilliant."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Michael Roberts</strong>
                        <span>Founder, DigitalCourse Pro</span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"The funnel system increased our conversion rate from 1.8% to 23.5%. It's like having a sales team that never sleeps."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Lisa Anderson</strong>
                        <span>CMO, InnovateCorps</span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"The automated nurture sequence builds incredible trust. Our customers now come to us pre-sold and ready to buy."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>James Wilson</strong>
                        <span>CEO, TechFlow Solutions</span>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up" style="text-align: centre;">Frequently Asked Questions</h2>
                <div class="faq-list">
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>How long does funnel development take?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Timeline varies by complexity: 3 weeks for Starter, 5 weeks for Professional, and 8 weeks for Enterprise funnels. We provide detailed project timelines during consultation.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>Do you create the lead magnets and content?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we create all lead magnets, email sequences, and funnel content. Our team includes copywriters and content creators specialised in conversion optimisation.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>Which platforms do you recommend?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Platform choice depends on your needs and budget. We'll recommend the best solution based on your requirements, from WordPress to dedicated funnel platforms.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>Can you integrate with our existing systems?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Absolutely! We integrate with all major CRMs, email platforms, payment processors, and business tools to ensure seamless data flow.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>What kind of results can we expect?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Results vary by industry and implementation, but our clients typically see 200-400% increases in conversion rates and significant improvements in customer lifetime value.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>Do you provide ongoing optimisation?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer ongoing optimisation services to continuously improve funnel performance based on real data and testing results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-scale-up">
                <h2 class="animate-on-scroll animate-fade-up">Ready to Build a Sales Funnel That Converts?</h2>
                <p class="animate-on-scroll animate-fade-up">Get a free funnel strategy session and discover how a properly designed sales funnel can transform your business.</p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free Strategy Session</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
