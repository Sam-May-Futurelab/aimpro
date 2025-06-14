<?php
/**
 * Template Name: Google Ads Management
 * Description: Google Ads management services page
 */

get_header(); 
?>
<style>
/* Direct page styles to ensure they override theme styles */
#primary.google-ads-page #contact.cta-section {
    background: linear-gradient(135deg, #F15A25 0%, #e04a15 100%) !important;
    padding: 60px 0 !important;
    margin: 60px 0 !important;
    border-radius: 16px !important;
    box-shadow: 0 20px 40px rgba(241, 90, 37, 0.2) !important;
    color: white !important;
    position: relative !important;
    overflow: hidden !important;
}

#primary.google-ads-page #contact.cta-section .cta-content h2 {
    font-size: 36px !important;
    font-weight: 700 !important;
    margin-bottom: 20px !important;
    color: white !important;
}

#primary.google-ads-page #contact.cta-section .cta-content p {
    font-size: 18px !important;
    margin-bottom: 30px !important;
    color: rgba(255, 255, 255, 0.95) !important;
    line-height: 1.6 !important;
}

#primary.google-ads-page #contact.cta-section .cta-buttons {
    display: flex !important;
    justify-content: center !important;
    gap: 20px !important;
    margin-bottom: 30px !important;
}

#primary.google-ads-page #contact.cta-section .btn-primary {
    background: white !important;
    color: #F15A25 !important;
    border: none !important;
}

#primary.google-ads-page #contact.cta-section .btn-outline {
    background: transparent !important;
    color: white !important;
    border: 2px solid white !important;
}

#primary.google-ads-page #contact.cta-section .cta-features {
    display: flex !important;
    justify-content: center !important;
    gap: 40px !important;
    flex-wrap: wrap !important;
}

#primary.google-ads-page #contact.cta-section .cta-features span {
    color: white !important;
    font-size: 16px !important;
    font-weight: 500 !important;
}

/* Mobile adjustments */
@media (max-width: 768px) {
    #primary.google-ads-page #contact.cta-section .cta-buttons {
        flex-direction: column !important;
        align-items: center !important;
    }
    
    #primary.google-ads-page #contact.cta-section .cta-features {
        flex-direction: column !important;
        align-items: center !important;
        gap: 15px !important;
    }
}
</style>

<main id="primary" class="services-page google-ads-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">/</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">/</span>
                <a href="<?php echo home_url('/advertising-ppc'); ?>">PPC & Advertising</a>
                <span class="separator">/</span>
                <span class="current">Google Ads Management</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="page-hero services-hero google-ads-hero">
        <div class="hero-background">
            <div class="hero-pattern"></div>
        </div>
        <div class="container">
            <div class="hero-content">                <div class="hero-badge">
                    <span>Google Premier Partner</span>
                </div>
                <h1>Google Ads Management That <span class="highlight">DOMINATES SEARCH</span></h1>
                <p class="hero-subtitle">Stop losing money on Google Ads. Our certified experts create high-converting campaigns that turn search traffic into paying customers with <strong>199% increase in conversion rates</strong>.</p><div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">199%</span>
                        <span class="stat-label">Increase in Conversion Rates</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">67%</span>
                        <span class="stat-label">Lower Cost Per Click</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">£1.8M+</span>
                        <span class="stat-label">Google Ads Managed</span>
                    </div>
                </div>                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined">Get Free Google Ads Audit</a>
                    <a href="#services" class="btn-outline streamlined">View Google Ads Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-overview-section">
        <div class="container">
            <div class="section-header">
                <h2>Complete Google Ads Solutions</h2>
                <p>From search campaigns to YouTube advertising, we manage every aspect of your Google Ads presence for maximum impact and ROI.</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="21 21l-4.35-4.35"></path>
                        </svg>
                    </div>
                    <h3>Search Campaigns</h3>
                    <p>Target high-intent keywords when customers are actively searching for your products or services.</p>
                    <ul class="service-features">
                        <li>Keyword research & strategy</li>
                        <li>Ad copy testing & optimization</li>
                        <li>Bid management</li>
                        <li>Landing page optimization</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="9" cy="9" r="2"></circle>
                            <path d="21 15l-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                        </svg>
                    </div>
                    <h3>Display Campaigns</h3>
                    <p>Reach potential customers across millions of websites with compelling visual advertisements.</p>
                    <ul class="service-features">
                        <li>Responsive display ads</li>
                        <li>Audience targeting</li>
                        <li>Remarketing campaigns</li>
                        <li>Creative optimization</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3>Shopping Campaigns</h3>
                    <p>Showcase your products directly in Google search results with optimized shopping ads.</p>
                    <ul class="service-features">
                        <li>Product feed optimization</li>
                        <li>Smart shopping campaigns</li>
                        <li>Merchant Center setup</li>
                        <li>Performance monitoring</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="23 7 16 12 23 17 23 7"></polygon>
                            <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                        </svg>
                    </div>
                    <h3>YouTube Advertising</h3>
                    <p>Engage audiences with video advertising on the world's largest video platform.</p>
                    <ul class="service-features">
                        <li>Video ad creation</li>
                        <li>Audience targeting</li>
                        <li>Campaign optimization</li>
                        <li>Performance tracking</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M12 1v6m0 6v6m11-7h-6m-6 0H1"></path>
                        </svg>
                    </div>
                    <h3>Performance Max</h3>
                    <p>Leverage Google's AI to maximize performance across all Google Ads inventory.</p>
                    <ul class="service-features">
                        <li>Automated bidding</li>
                        <li>Cross-network reach</li>
                        <li>Asset optimization</li>
                        <li>Conversion tracking</li>
                    </ul>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline>
                            <polyline points="7.5 19.79 7.5 14.6 3 12"></polyline>
                            <polyline points="21 12 16.5 14.6 16.5 19.79"></polyline>
                        </svg>
                    </div>
                    <h3>Local Campaigns</h3>
                    <p>Drive foot traffic and local actions with location-based advertising campaigns.</p>
                    <ul class="service-features">
                        <li>Local store visits</li>
                        <li>Location extensions</li>
                        <li>Store sales tracking</li>
                        <li>Radius targeting</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-card">
                <div class="case-study-content">
                    <div class="case-study-header">
                        <span class="case-study-label">Google Ads Success Story</span>
                        <h2>Law Firm Increases Qualified Leads by 340% with Strategic Google Ads</h2>
                    </div>
                    <div class="case-study-story">
                        <p><strong>The Challenge:</strong> A Manchester-based law firm was struggling with expensive Google Ads campaigns that generated low-quality leads, wasting £5,000+ monthly budget.</p>
                        <p><strong>Our Solution:</strong> We restructured their campaigns with precise keyword targeting, created compelling ad copy focused on legal expertise, and implemented advanced conversion tracking.</p>
                        <p><strong>The Results:</strong> Within 120 days, we transformed their Google Ads performance completely.</p>
                    </div>
                    <div class="case-study-results">
                        <div class="result-item">
                            <span class="result-number">340%</span>
                            <span class="result-label">Increase in Qualified Leads</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">58%</span>
                            <span class="result-label">Lower Cost Per Lead</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">720%</span>
                            <span class="result-label">Return on Ad Spend</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">£85,000</span>
                            <span class="result-label">Monthly Revenue Generated</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Google Ads Management Process</h2>
                <p>We follow a proven methodology that consistently delivers exceptional results for our clients.</p>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">01</div>
                    <h3>Account Audit</h3>
                    <p>Comprehensive analysis of your current Google Ads performance and opportunities.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">02</div>
                    <h3>Strategy Development</h3>
                    <p>Create a custom strategy based on your goals, industry, and target audience.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">03</div>
                    <h3>Campaign Build</h3>
                    <p>Build optimized campaigns with proper structure, keywords, and tracking setup.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">04</div>
                    <h3>Launch & Monitor</h3>
                    <p>Launch campaigns and closely monitor performance during the critical first weeks.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">05</div>
                    <h3>Optimize & Scale</h3>
                    <p>Continuously optimize based on performance data and scale successful campaigns.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools & Technologies -->
    <section class="tools-section">
        <div class="container">
            <div class="section-header">
                <h2>Advanced Tools & Technologies</h2>
                <p>We use cutting-edge tools and technologies to maximize your Google Ads performance.</p>
            </div>
            <div class="tools-grid">
                <div class="tool-item">
                    <h4>Google Ads Editor</h4>
                    <p>Bulk campaign management and optimization</p>
                </div>
                <div class="tool-item">
                    <h4>Google Analytics 4</h4>
                    <p>Advanced conversion tracking and attribution</p>
                </div>
                <div class="tool-item">
                    <h4>Google Tag Manager</h4>
                    <p>Precise tracking implementation</p>
                </div>
                <div class="tool-item">
                    <h4>Keyword Planner</h4>
                    <p>Keyword research and forecasting</p>
                </div>
                <div class="tool-item">
                    <h4>SEMrush/Ahrefs</h4>
                    <p>Competitor analysis and keyword insights</p>
                </div>
                <div class="tool-item">
                    <h4>Google Optimize</h4>
                    <p>Landing page testing and optimization</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Focus -->
    <section class="industries-section">
        <div class="container">
            <div class="section-header">
                <h2>Industries We Specialize In</h2>
                <p>Our Google Ads expertise spans across multiple industries with proven success.</p>
            </div>
            <div class="industries-grid">
                <div class="industry-item">
                    <h4>Legal Services</h4>
                    <p>Personal injury, family law, criminal defense, and corporate legal services.</p>
                </div>
                <div class="industry-item">
                    <h4>Healthcare & Medical</h4>
                    <p>Private practices, dental clinics, cosmetic surgery, and healthcare services.</p>
                </div>
                <div class="industry-item">
                    <h4>E-commerce & Retail</h4>
                    <p>Online stores, shopping campaigns, and product advertising optimization.</p>
                </div>
                <div class="industry-item">
                    <h4>Home Services</h4>
                    <p>Plumbers, electricians, HVAC, roofing, and local service providers.</p>
                </div>
                <div class="industry-item">
                    <h4>Financial Services</h4>
                    <p>Insurance, mortgages, financial planning, and investment services.</p>
                </div>
                <div class="industry-item">
                    <h4>B2B Services</h4>
                    <p>Professional services, consulting, software, and business solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2>Google Ads Management Packages</h2>
                <p>Transparent pricing with no hidden fees. Choose the package that fits your business needs.</p>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Starter</h3>
                        <div class="price">£497<span>/month</span></div>
                    </div>
                    <ul class="pricing-features">
                        <li>Up to £2,000 ad spend</li>
                        <li>2 campaign types</li>
                        <li>Basic conversion tracking</li>
                        <li>Monthly reporting</li>
                        <li>Email support</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                <div class="pricing-card featured">
                    <div class="pricing-header">
                        <h3>Professional</h3>
                        <div class="price">£897<span>/month</span></div>
                        <span class="popular-badge">Most Popular</span>
                    </div>
                    <ul class="pricing-features">
                        <li>Up to £5,000 ad spend</li>
                        <li>All campaign types</li>
                        <li>Advanced conversion tracking</li>
                        <li>Bi-weekly optimization</li>
                        <li>Monthly strategy calls</li>
                        <li>Priority support</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Enterprise</h3>
                        <div class="price">£1,497<span>/month</span></div>
                    </div>
                    <ul class="pricing-features">
                        <li>£5,000+ ad spend</li>
                        <li>Full campaign suite</li>
                        <li>Advanced attribution</li>
                        <li>Weekly optimization</li>
                        <li>Dedicated account manager</li>
                        <li>24/7 support</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    <div class="quote-mark">"</div>
                    <p>"The results speak for themselves. Our Google Ads performance improved dramatically within the first month. Cost per lead dropped by 60% while lead quality increased significantly. Couldn't be happier with the service."</p>
                    <div class="testimonial-author">
                        <strong>James Richardson</strong>
                        <span>Managing Director, Richardson Legal Services</span>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section class="simple-cta-section">
        <div class="section-content">
            <div class="simple-cta-content">
                <h2>Ready to Dominate Google Search?</h2>
                <p>Get a free Google Ads audit and strategy session. We'll analyze your current performance and show you exactly how to improve your ROI.</p>
                <div class="simple-cta-buttons">
                    <a href="#contact-form" class="btn btn-primary">Get Free Google Ads Audit</a>
                </div>
                <div class="simple-cta-features">
                    <span>Free account analysis</span>
                    <span>Competitor research</span>
                    <span>Performance improvement plan</span>
                </div>
            </div>
        </div>
    </section>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
