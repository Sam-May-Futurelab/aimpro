<?php
/**
 * Template Name: Sales Funnel Development
 * 
 * Sales Funnel Development Services
 *
 * @package Aimpro
 */

get_header(); ?>

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
    </div>

    <!-- Hero Section -->
    <section class="service-hero">
        <div class="container">
            <div class="service-hero-content">                <div class="hero-text">
                    <h1><?php echo get_post_meta(get_the_ID(), 'fb_hero_title', true) ?: 'Sales Funnel Development'; ?></h1>
                    <p class="hero-subtitle"><?php echo get_post_meta(get_the_ID(), 'fb_hero_subtitle', true) ?: 'Complete sales funnel systems that guide prospects through your customer journey, maximizing conversions at every step.'; ?></p>
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
                    </div>
                    <div class="hero-cta">
                        <a href="#contact" class="btn-primary"><?php echo get_post_meta(get_the_ID(), 'fb_cta_primary', true) ?: 'Get Funnel Strategy'; ?></a>
                        <a href="#case-study" class="btn-outline">View Case Study</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sales-funnel-hero.jpg" alt="Sales Funnel Development" />
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">            <div class="section-header">
                <h2>Sales Funnels That Drive Consistent Results</h2>
                <p>Our high-converting sales funnels are strategically designed to guide your prospects through a seamless journey from awareness to purchase, with carefully crafted touchpoints that overcome objections and build trust at every step.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>End-to-End Journey Mapping</h3>
                    <p>Comprehensive customer journey design that targets each stage of awareness with appropriate messaging and offers.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Behavior-Based Automation</h3>
                    <p>Intelligent automation that responds to user behavior and personalizes the experience to increase conversion rates.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Multi-Channel Integration</h3>
                    <p>Seamless integration across email, SMS, and retargeting to maintain engagement throughout the sales process.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Conversion Optimization</h3>
                    <p>Continuous testing and refinement to maximize conversions at each step of your sales funnel.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study Section -->
    <section id="case-study" class="case-study-section">
        <div class="container">
            <div class="case-study-content">                <div class="case-study-header">
                    <span class="case-study-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_subtitle', true) ?: 'Case Study'; ?></span>
                    <h2><?php echo get_post_meta(get_the_ID(), 'fb_case_study_title', true) ?: 'How DigitalCourse Pro Generated £540K in 90 Days with a Strategic Sales Funnel'; ?></h2>
                </div>
                
                <div class="case-study-grid">
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo get_post_meta(get_the_ID(), 'fb_case_study_challenge', true) ?: 'DigitalCourse Pro was struggling to convert their high-quality traffic into course sales. They had a single sales page that wasn\'t building enough trust or demonstrating value before asking for a £2,000 course purchase.'; ?></p>
                        
                        <div class="challenge-metrics">
                            <div class="metric">
                                <span class="metric-value"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_stat1_number', true) ?: '1.8%'; ?></span>
                                <span class="metric-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_stat1_label', true) ?: 'Conversion Rate'; ?></span>
                            </div>
                            <div class="metric">
                                <span class="metric-value"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_stat2_number', true) ?: '£890'; ?></span>
                                <span class="metric-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_stat2_label', true) ?: 'Monthly Revenue'; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-study-solution">
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
                                echo '<li><strong>Sales Page Optimization:</strong> High-converting sales page with social proof</li>';
                                echo '<li><strong>Upsell System:</strong> Additional products and coaching offers post-purchase</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                  <div class="case-study-results">
                    <h3><?php echo get_post_meta(get_the_ID(), 'fb_case_study_results_title', true) ?: 'The Results'; ?></h3>
                    <div class="results-grid">
                        <div class="result-item">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result1_number', true) ?: '£540K'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result1_label', true) ?: 'Revenue in 90 Days'; ?></span>
                        </div>
                        <div class="result-item">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result2_number', true) ?: '23.5%'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result2_label', true) ?: 'Funnel Conversion Rate'; ?></span>
                        </div>
                        <div class="result-item">
                            <span class="result-number"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result3_number', true) ?: '£3,800'; ?></span>
                            <span class="result-label"><?php echo get_post_meta(get_the_ID(), 'fb_case_study_result3_label', true) ?: 'Average Order Value'; ?></span>
                        </div>
                        <div class="result-item">
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
    </section>

    <!-- Funnel Types -->
    <section class="funnel-types">
        <div class="container">
            <h2>Types of Sales Funnels We Build</h2>
            
            <div class="types-grid">
                <div class="type-card">
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
                
                <div class="type-card">
                    <div class="type-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Webinar Funnels</h3>
                    <p>Build authority and trust through educational webinars that naturally lead to sales.</p>
                    <ul>
                        <li>Registration page optimization</li>
                        <li>Reminder email sequences</li>
                        <li>Webinar delivery systems</li>
                        <li>Post-webinar sales sequences</li>
                    </ul>
                    <div class="type-result">Average: 28% attendance rate</div>
                </div>
                
                <div class="type-card">
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
                
                <div class="type-card">
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
    </section>    <!-- Funnel Architecture -->
    <section class="funnel-architecture">
        <div class="container">
            <div class="section-content">
                <h2>Complete Funnel Architecture</h2>
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Traffic Sources</h3>
                            <p>Strategic traffic generation from multiple channels</p>
                            <ul class="feature-list">
                                <li>Paid advertising</li>
                                <li>Social media</li>
                                <li>SEO & content</li>
                                <li>Email marketing</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Lead Capture</h3>
                            <p>High-converting opt-in pages and lead magnets</p>
                            <ul class="feature-list">
                                <li>Landing pages</li>
                                <li>Pop-ups & forms</li>
                                <li>Content upgrades</li>
                                <li>Free tools</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Nurture Sequence</h3>
                            <p>Automated email sequences building trust and value</p>
                            <ul class="feature-list">
                                <li>Welcome series</li>
                                <li>Educational content</li>
                                <li>Social proof</li>
                                <li>Soft pitches</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Sales Conversion</h3>
                            <p>Optimized sales pages and conversion systems</p>
                            <ul class="feature-list">
                                <li>Sales pages</li>
                                <li>Webinars</li>
                                <li>Product demos</li>
                                <li>Consultations</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Maximize Value</h3>
                            <p>Upsells, cross-sells, and retention strategies</p>
                            <ul class="feature-list">
                                <li>Order bumps</li>
                                <li>Upsell offers</li>
                                <li>Cross-sell campaigns</li>
                                <li>Customer retention</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Development Process -->
    <section class="development-process">
        <div class="container">
            <h2>Our Funnel Development Process</h2>
            
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Funnel Strategy & Mapping</h3>
                        <p>Analyze your business model and create detailed funnel strategy with customer journey mapping.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Lead Magnet Creation</h3>
                        <p>Develop compelling lead magnets and value offers that attract your ideal customers.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Page Development</h3>
                        <p>Build all funnel pages with conversion-focused design and mobile optimization.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Email Automation Setup</h3>
                        <p>Create automated email sequences that nurture leads and drive conversions.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Integration & Testing</h3>
                        <p>Connect all systems, set up tracking, and thoroughly test the complete funnel flow.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Launch & Optimization</h3>
                        <p>Launch funnel with comprehensive analytics and ongoing optimization based on performance data.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2>Sales Funnel Development Packages</h2>
                <p>Complete funnel systems designed to maximize your revenue and customer lifetime value.</p>
            </div>
            
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Starter Funnel</h3>
                        <div class="price">£3,997</div>
                        <p>Simple lead generation funnel</p>
                    </div>
                    <ul class="pricing-features">
                        <li>3-page funnel system</li>
                        <li>Lead magnet creation</li>
                        <li>Opt-in page optimization</li>
                        <li>Thank you page</li>
                        <li>Basic email automation (5 emails)</li>
                        <li>Analytics setup</li>
                        <li>3-week delivery</li>
                        <li>30 days support</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                
                <div class="pricing-card featured">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3>Professional Funnel</h3>
                        <div class="price">£7,997</div>
                        <p>Complete sales funnel system</p>
                    </div>
                    <ul class="pricing-features">
                        <li>5-7 page funnel system</li>
                        <li>Advanced lead magnets</li>
                        <li>Sales page optimization</li>
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
                
                <div class="pricing-card">
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
                        <li>Split testing optimization</li>
                        <li>8-week delivery</li>
                        <li>90 days support</li>
                        <li>Ongoing optimization</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    <section class="technologies-section">
        <div class="container">
            <h2>Funnel Technologies & Platforms</h2>
            
            <div class="tools-grid">
                <div class="tool-category">
                    <h3>Funnel Platforms</h3>
                    <div class="tools-list">
                        <div class="tool-item">ClickFunnels</div>
                        <div class="tool-item">Leadpages</div>
                        <div class="tool-item">Unbounce</div>
                        <div class="tool-item">Instapage</div>
                        <div class="tool-item">WordPress</div>
                        <div class="tool-item">Custom Development</div>
                    </div>
                </div>
                
                <div class="tool-category">
                    <h3>Email Automation</h3>
                    <div class="tools-list">
                        <div class="tool-item">ActiveCampaign</div>
                        <div class="tool-item">ConvertKit</div>
                        <div class="tool-item">Mailchimp</div>
                        <div class="tool-item">Klaviyo</div>
                        <div class="tool-item">GetResponse</div>
                        <div class="tool-item">Drip</div>
                    </div>
                </div>
                
                <div class="tool-category">
                    <h3>Payment & CRM</h3>
                    <div class="tools-list">
                        <div class="tool-item">Stripe</div>
                        <div class="tool-item">PayPal</div>
                        <div class="tool-item">HubSpot</div>
                        <div class="tool-item">Salesforce</div>
                        <div class="tool-item">Pipedrive</div>
                        <div class="tool-item">Zapier Integration</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <h2>What Our Clients Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Our new sales funnel generated £540K in just 90 days. The systematic approach to nurturing leads is brilliant."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Michael Roberts</strong>
                        <span>Founder, DigitalCourse Pro</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The funnel system increased our conversion rate from 1.8% to 23.5%. It's like having a sales team that never sleeps."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Lisa Anderson</strong>
                        <span>CMO, InnovateCorps</span>
                    </div>
                </div>
                <div class="testimonial-card">
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
                <h2 style="text-align: center;">Frequently Asked Questions</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How long does funnel development take?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Timeline varies by complexity: 3 weeks for Starter, 5 weeks for Professional, and 8 weeks for Enterprise funnels. We provide detailed project timelines during consultation.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you create the lead magnets and content?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we create all lead magnets, email sequences, and funnel content. Our team includes copywriters and content creators specialized in conversion optimization.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Which platforms do you recommend?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Platform choice depends on your needs and budget. We'll recommend the best solution based on your requirements, from WordPress to dedicated funnel platforms.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can you integrate with our existing systems?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Absolutely! We integrate with all major CRMs, email platforms, payment processors, and business tools to ensure seamless data flow.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What kind of results can we expect?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Results vary by industry and implementation, but our clients typically see 200-400% increases in conversion rates and significant improvements in customer lifetime value.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you provide ongoing optimization?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer ongoing optimization services to continuously improve funnel performance based on real data and testing results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Build a Sales Funnel That Converts?</h2>
                <p>Get a free funnel strategy session and discover how a properly designed sales funnel can transform your business.</p>                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free Strategy Session</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
