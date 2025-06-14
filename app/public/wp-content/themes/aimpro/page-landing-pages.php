<?php
/**
 * Template Name: Landing Pages
 * 
 * High-Converting Landing Pages Services
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="landing-pages-page">
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
                <span class="current">Landing Pages</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="service-hero">
        <div class="container">
            <div class="service-hero-content">
                <div class="hero-text">
                    <h1>High-Converting Landing Pages</h1>
                    <p class="hero-subtitle">Purpose-built landing pages that turn visitors into customers with laser-focused messaging and conversion optimization.</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">340%</span>
                            <span class="stat-label">Average Conversion Increase</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">7 Days</span>
                            <span class="stat-label">Average Delivery Time</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">23%</span>
                            <span class="stat-label">Average Conversion Rate</span>
                        </div>
                    </div>
                    <div class="hero-cta">
                        <a href="#contact" class="btn-primary">Get Landing Page Quote</a>
                        <a href="#case-study" class="btn-outline">View Case Study</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing-pages-hero.jpg" alt="High-Converting Landing Pages" />
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header">
                <h2>Landing Pages That Convert Like Crazy</h2>
                <p>Our high-converting landing pages are meticulously crafted to achieve one goal: turn your traffic into leads and sales. Every element is strategically designed and tested to maximize conversions for your specific audience and offer.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Conversion-Focused Design</h3>
                    <p>Every element designed with one goal: converting visitors into customers through strategic placement and messaging.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>A/B Testing Ready</h3>
                    <p>Built-in testing capabilities to continuously optimize performance and improve conversion rates.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Lightning Fast Loading</h3>
                    <p>Optimized for speed with under 2-second load times to minimize bounce rates and maximize conversions.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Advanced Analytics</h3>
                    <p>Comprehensive tracking and analytics to measure performance and identify optimization opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study Section -->
    <section id="case-study" class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-header">
                    <span class="case-study-label">Case Study</span>
                    <h2>How FitLife Academy Increased Course Sales by 485% with Optimized Landing Pages</h2>
                </div>
                
                <div class="case-study-grid">
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p>FitLife Academy was driving traffic to their course sales page but experiencing a disappointing 2.3% conversion rate. Despite quality traffic from Facebook ads, they were losing potential customers due to unclear messaging and poor page structure.</p>
                        
                        <div class="challenge-metrics">
                            <div class="metric">
                                <span class="metric-value">2.3%</span>
                                <span class="metric-label">Conversion Rate</span>
                            </div>
                            <div class="metric">
                                <span class="metric-value">£8.50</span>
                                <span class="metric-label">Cost per Lead</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Solution</h3>
                        <ul>
                            <li><strong>Message-Match Optimization:</strong> Aligned landing page copy with ad messaging for consistency</li>
                            <li><strong>Clear Value Proposition:</strong> Highlighted unique benefits and transformation outcomes</li>
                            <li><strong>Social Proof Integration:</strong> Added testimonials, reviews, and success stories</li>
                            <li><strong>Streamlined Forms:</strong> Reduced form fields and optimized conversion flow</li>
                            <li><strong>Mobile Optimization:</strong> Enhanced mobile experience for 70% mobile traffic</li>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <div class="result-item">
                            <span class="result-number">485%</span>
                            <span class="result-label">Increase in Course Sales</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">13.4%</span>
                            <span class="result-label">New Conversion Rate</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">£2.10</span>
                            <span class="result-label">Reduced Cost per Lead</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">£340K</span>
                            <span class="result-label">Additional Annual Revenue</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Landing Page Types -->
    <section class="landing-page-types">
        <div class="container">
            <h2>Types of Landing Pages We Create</h2>
            
            <div class="types-grid">
                <div class="type-card">
                    <div class="type-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3>Lead Generation Pages</h3>
                    <p>Capture high-quality leads with compelling offers and optimized forms that convert visitors into prospects.</p>
                    <ul>
                        <li>E-book downloads</li>
                        <li>Free trial signups</li>
                        <li>Newsletter subscriptions</li>
                        <li>Consultation bookings</li>
                    </ul>
                </div>
                
                <div class="type-card">
                    <div class="type-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Sales Pages</h3>
                    <p>Drive direct sales with persuasive copy, social proof, and clear purchasing pathways that convert browsers into buyers.</p>
                    <ul>
                        <li>Product sales pages</li>
                        <li>Course enrollment</li>
                        <li>Service bookings</li>
                        <li>Membership signups</li>
                    </ul>
                </div>
                
                <div class="type-card">
                    <div class="type-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Event Registration</h3>
                    <p>Maximize event attendance with compelling event pages that highlight value and simplify registration.</p>
                    <ul>
                        <li>Webinar registration</li>
                        <li>Workshop signups</li>
                        <li>Conference tickets</li>
                        <li>Product launches</li>
                    </ul>
                </div>
                
                <div class="type-card">
                    <div class="type-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>App Download Pages</h3>
                    <p>Increase app downloads with focused pages that showcase features, benefits, and social proof.</p>
                    <ul>
                        <li>Mobile app promotion</li>
                        <li>Software downloads</li>
                        <li>Tool installations</li>
                        <li>Game launches</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Process -->
    <section class="design-process">
        <div class="container">
            <h2>Our Landing Page Creation Process</h2>
            
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Campaign Analysis</h3>
                        <p>Analyze your traffic source, audience, and campaign goals to create targeted landing page strategy.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Message & Offer Development</h3>
                        <p>Craft compelling headlines, value propositions, and offers that resonate with your target audience.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Conversion-Focused Design</h3>
                        <p>Design pages with proven conversion elements: clear CTAs, social proof, and strategic layout.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Development & Integration</h3>
                        <p>Build fast-loading pages with proper tracking, form integrations, and mobile optimization.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Testing & Optimization</h3>
                        <p>Set up A/B tests and continuous optimization to improve conversion rates over time.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Launch & Monitor</h3>
                        <p>Launch with full analytics tracking and provide ongoing performance monitoring and insights.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2>Landing Page Packages</h2>
                <p>Fast, effective landing pages designed to convert your traffic into customers.</p>
            </div>
            
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Single Landing Page</h3>
                        <div class="price">£997</div>
                        <p>Perfect for single campaigns</p>
                    </div>
                    <ul class="pricing-features">
                        <li>1 custom landing page</li>
                        <li>Mobile-responsive design</li>
                        <li>Lead capture form</li>
                        <li>Basic analytics setup</li>
                        <li>1 round of revisions</li>
                        <li>7-day delivery</li>
                        <li>14 days support</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                
                <div class="pricing-card featured">
                    <div class="pricing-badge">Best Value</div>
                    <div class="pricing-header">
                        <h3>Landing Page Bundle</h3>
                        <div class="price">£2,497</div>
                        <p>Ideal for multiple campaigns</p>
                    </div>
                    <ul class="pricing-features">
                        <li>3 custom landing pages</li>
                        <li>Advanced mobile optimization</li>
                        <li>Multi-step forms</li>
                        <li>Conversion tracking setup</li>
                        <li>A/B testing setup</li>
                        <li>CRM integration</li>
                        <li>2 rounds of revisions</li>
                        <li>10-day delivery</li>
                        <li>30 days support</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>
                
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Funnel Series</h3>
                        <div class="price">£4,997</div>
                        <p>Complete conversion funnel</p>
                    </div>
                    <ul class="pricing-features">
                        <li>5+ landing pages</li>
                        <li>Complete sales funnel</li>
                        <li>Advanced integrations</li>
                        <li>Email automation setup</li>
                        <li>Payment processing</li>
                        <li>Comprehensive analytics</li>
                        <li>Unlimited revisions</li>
                        <li>14-day delivery</li>
                        <li>60 days support</li>
                        <li>Ongoing optimization</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>    <!-- Conversion Elements -->
    <section class="whitelabel-services">
        <div class="container">
            <div class="section-header">
                <h2>Essential Conversion Elements We Include</h2>
            </div>
            
            <div class="whitelabel-services-grid">
                <div class="whitelabel-service-card">
                    <div class="service-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div class="service-content">
                        <h3>Compelling Headlines</h3>
                        <p>Attention-grabbing headlines that clearly communicate value and capture interest immediately.</p>
                    </div>
                </div>
                
                <div class="whitelabel-service-card">
                    <div class="service-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="service-content">
                        <h3>Social Proof</h3>
                        <p>Testimonials, reviews, trust badges, and customer logos that build credibility and trust.</p>
                    </div>
                </div>
                
                <div class="whitelabel-service-card">
                    <div class="service-icon">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <div class="service-content">
                        <h3>Clear CTAs</h3>
                        <p>Strategic call-to-action buttons that stand out and guide visitors toward conversion.</p>
                    </div>
                </div>
                
                <div class="whitelabel-service-card">
                    <div class="service-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="service-content">
                        <h3>Urgency & Scarcity</h3>
                        <p>Time-sensitive offers and limited availability messaging that motivates immediate action.</p>
                    </div>
                </div>
                
                <div class="whitelabel-service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Risk Reversal</h3>
                        <p>Money-back guarantees and risk-free offers that remove barriers to conversion.</p>
                    </div>
                </div>
                
                <div class="whitelabel-service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="service-content">
                        <h3>Benefit-Focused Copy</h3>
                        <p>Persuasive copy that focuses on benefits and outcomes rather than features.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries -->
    <section class="industries-section">
        <div class="container">
            <h2>Industries We Serve</h2>
            <div class="industries-grid">
                <div class="industry-item">
                    <i class="fas fa-laptop-code"></i>
                    <h3>SaaS & Technology</h3>
                    <p>Free trial pages, demo requests, and software download pages</p>
                </div>
                <div class="industry-item">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Education & Training</h3>
                    <p>Course enrollment, webinar registration, and certification signups</p>
                </div>
                <div class="industry-item">
                    <i class="fas fa-dumbbell"></i>
                    <h3>Health & Fitness</h3>
                    <p>Program signups, consultation bookings, and membership sales</p>
                </div>
                <div class="industry-item">
                    <i class="fas fa-shopping-bag"></i>
                    <h3>E-commerce</h3>
                    <p>Product launches, promotional campaigns, and seasonal sales</p>
                </div>
                <div class="industry-item">
                    <i class="fas fa-briefcase"></i>
                    <h3>Professional Services</h3>
                    <p>Lead generation, consultation bookings, and service inquiries</p>
                </div>
                <div class="industry-item">
                    <i class="fas fa-home"></i>
                    <h3>Real Estate</h3>
                    <p>Property listings, buyer/seller leads, and market reports</p>
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
                        <p>"Our new landing page converted at 13.4% compared to our old page's 2.3%. The ROI was immediate and substantial."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Jessica Martinez</strong>
                        <span>Founder, FitLife Academy</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Aimpro's landing pages have been instrumental in scaling our lead generation. We're now getting 5x more qualified leads."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Robert Taylor</strong>
                        <span>CMO, TechFlow Solutions</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The attention to detail and conversion optimization expertise is outstanding. Our webinar attendance increased by 280%."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Amanda Collins</strong>
                        <span>Marketing Director, InnovateCorps</span>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- FAQ Section -->
    <section class="seo-faqs">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question">How quickly can you deliver a landing page?</button>
                    <div class="faq-answer">
                        <p>Single landing pages can be delivered in 7 days, while more complex funnels take 10-14 days. Rush delivery is available for urgent campaigns.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Do you write the copy for landing pages?</button>
                    <div class="faq-answer">
                        <p>Yes, our packages include conversion-optimized copywriting. We can also work with your existing copy if you prefer.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Can you integrate with my CRM or email platform?</button>
                    <div class="faq-answer">
                        <p>Absolutely! We integrate with all major CRMs, email platforms, and marketing automation tools to ensure seamless lead capture.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Do you provide A/B testing setup?</button>
                    <div class="faq-answer">
                        <p>Yes, our Professional and Funnel packages include A/B testing setup to help you continuously optimize conversion rates.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">What if my landing page doesn't convert well?</button>
                    <div class="faq-answer">
                        <p>We provide ongoing optimization support and can make data-driven improvements to enhance performance based on actual results.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Can I make changes after the page is live?</button>
                    <div class="faq-answer">
                        <p>Yes, all packages include support periods for changes. We also offer maintenance packages for ongoing updates and optimization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Build Landing Pages That Convert?</h2>
                <p>Get a free consultation and discover how high-converting landing pages can transform your marketing campaigns.</p>                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free Quote</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
