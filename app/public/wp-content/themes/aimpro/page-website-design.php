<?php
/**
 * Template Name: Custom Website Design
 * 
 * Custom Website Design Services
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="website-design-page">
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
                <span class="current">Custom Website Design</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="service-hero">
        <div class="container">
            <div class="service-hero-content">
                <div class="hero-text">
                    <h1>Custom Website Design</h1>
                    <p class="hero-subtitle">Beautiful, conversion-focused websites that perfectly represent your brand and drive measurable business results.</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">285%</span>
                            <span class="stat-label">Average Engagement Increase</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">95%</span>
                            <span class="stat-label">Client Satisfaction Rate</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">2.1s</span>
                            <span class="stat-label">Average Load Time</span>
                        </div>
                    </div>
                    <div class="hero-cta">
                        <a href="#contact" class="btn-primary">Get Design Quote</a>
                        <a href="#portfolio" class="btn-outline">View Portfolio</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/website-design-hero.jpg" alt="Custom Website Design" />
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header">
                <h2>Websites That Work As Hard As You Do</h2>
                <p>Our custom website design service creates powerful digital experiences that not only look stunning but convert visitors into customers. Every design decision is backed by user experience research and conversion optimization principles.</p>
            </div>
              <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Brand-Aligned Design</h3>
                    <p>Custom designs that perfectly reflect your brand identity and values across every element.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile-First Approach</h3>
                    <p>Responsive designs optimized for all devices with emphasis on mobile user experience.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Conversion Optimization</h3>
                    <p>Every element designed to guide visitors toward your desired actions and business goals.</p>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>SEO Foundation</h3>
                    <p>Built-in SEO best practices ensuring your website ranks well from day one.</p>
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
                    <h2>How Premium Home Services Increased Lead Generation by 420%</h2>
                </div>
                
                <div class="case-study-grid">
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p>Premium Home Services had an outdated website that looked unprofessional and failed to generate quality leads. Their bounce rate was 78%, and they were losing potential customers to competitors with better online presence.</p>
                        
                        <div class="challenge-metrics">
                            <div class="metric">
                                <span class="metric-value">78%</span>
                                <span class="metric-label">Bounce Rate</span>
                            </div>
                            <div class="metric">
                                <span class="metric-value">3</span>
                                <span class="metric-label">Leads per Month</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Solution</h3>
                        <ul>
                            <li><strong>Complete Visual Redesign:</strong> Modern, professional design reflecting premium brand positioning</li>
                            <li><strong>Service Showcase:</strong> Comprehensive service pages with before/after galleries</li>
                            <li><strong>Trust Building:</strong> Testimonials, certifications, and social proof integration</li>
                            <li><strong>Lead Capture:</strong> Strategic contact forms and clear call-to-action placement</li>
                            <li><strong>Mobile Optimization:</strong> Seamless experience across all devices</li>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <div class="result-item">
                            <span class="result-number">420%</span>
                            <span class="result-label">Increase in Monthly Leads</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">65%</span>
                            <span class="result-label">Reduction in Bounce Rate</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">285%</span>
                            <span class="result-label">Increase in Session Duration</span>
                        </div>
                        <div class="result-item">
                            <span class="result-number">£180K</span>
                            <span class="result-label">Additional Annual Revenue</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Process -->
    <section class="design-process">
        <div class="container">
            <h2>Our Website Design Process</h2>
            
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Discovery & Research</h3>
                        <p>Deep dive into your business, target audience, competitors, and goals to inform the design strategy.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Strategy & Planning</h3>
                        <p>Create detailed site maps, user journeys, and conversion funnels to optimize user experience.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Wireframing & UX</h3>
                        <p>Develop wireframes and user experience architecture focusing on usability and conversion paths.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Visual Design</h3>
                        <p>Create stunning visual designs that align with your brand and appeal to your target audience.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Development & Testing</h3>
                        <p>Build responsive, fast-loading website with thorough testing across devices and browsers.</p>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Launch & Optimization</h3>
                        <p>Strategic launch with performance monitoring and ongoing optimization for better results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header">
                <h2>Website Design Packages</h2>
                <p>Choose the perfect package for your business needs and budget.</p>
            </div>
            
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Business Website</h3>
                        <div class="price">£2,997</div>
                        <p>Perfect for small businesses</p>
                    </div>
                    <ul class="pricing-features">
                        <li>5-page custom website</li>
                        <li>Mobile-responsive design</li>
                        <li>Contact form integration</li>
                        <li>Basic SEO optimization</li>
                        <li>Google Analytics setup</li>
                        <li>2 rounds of revisions</li>
                        <li>3-week delivery</li>
                        <li>30 days support</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                
                <div class="pricing-card featured">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3>Professional Website</h3>
                        <div class="price">£5,997</div>
                        <p>Ideal for growing companies</p>
                    </div>
                    <ul class="pricing-features">
                        <li>10-page custom website</li>
                        <li>Advanced mobile optimization</li>
                        <li>Lead generation forms</li>
                        <li>Advanced SEO optimization</li>
                        <li>Analytics & tracking setup</li>
                        <li>Blog setup & integration</li>
                        <li>3 rounds of revisions</li>
                        <li>4-week delivery</li>
                        <li>60 days support</li>
                        <li>Performance optimization</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>
                
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Enterprise Website</h3>
                        <div class="price">£9,997</div>
                        <p>For large organizations</p>
                    </div>
                    <ul class="pricing-features">
                        <li>Unlimited pages</li>
                        <li>Custom functionality</li>
                        <li>Advanced integrations</li>
                        <li>Conversion optimization</li>
                        <li>Multi-language support</li>
                        <li>Advanced analytics</li>
                        <li>Unlimited revisions</li>
                        <li>6-week delivery</li>
                        <li>90 days support</li>
                        <li>Priority support</li>
                        <li>Ongoing maintenance</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <h2>Recent Website Designs</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-tech-startup.jpg" alt="Tech Startup Website" />
                    </div>
                    <div class="portfolio-content">
                        <h3>Tech Startup</h3>
                        <p>Modern SaaS website with conversion-focused design</p>
                        <div class="portfolio-result">340% increase in trial signups</div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-law-firm.jpg" alt="Law Firm Website" />
                    </div>
                    <div class="portfolio-content">
                        <h3>Law Firm</h3>
                        <p>Professional website building trust and credibility</p>
                        <div class="portfolio-result">280% increase in consultations</div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-ecommerce.jpg" alt="E-commerce Website" />
                    </div>
                    <div class="portfolio-content">
                        <h3>E-commerce Store</h3>
                        <p>High-converting online store with seamless UX</p>
                        <div class="portfolio-result">380% increase in sales</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies -->
    <section class="technologies-section">
        <div class="container">
            <h2>Design Tools & Technologies</h2>
            
            <div class="tools-grid">
                <div class="tool-category">
                    <h3>Design Tools</h3>
                    <div class="tools-list">
                        <div class="tool-item">Figma</div>
                        <div class="tool-item">Adobe XD</div>
                        <div class="tool-item">Sketch</div>
                        <div class="tool-item">Adobe Creative Suite</div>
                        <div class="tool-item">InVision</div>
                        <div class="tool-item">Principle</div>
                    </div>
                </div>
                
                <div class="tool-category">
                    <h3>Development</h3>
                    <div class="tools-list">
                        <div class="tool-item">WordPress</div>
                        <div class="tool-item">Webflow</div>
                        <div class="tool-item">React.js</div>
                        <div class="tool-item">HTML5/CSS3</div>
                        <div class="tool-item">JavaScript</div>
                        <div class="tool-item">PHP</div>
                    </div>
                </div>
                
                <div class="tool-category">
                    <h3>Optimization</h3>
                    <div class="tools-list">
                        <div class="tool-item">Google PageSpeed</div>
                        <div class="tool-item">GTmetrix</div>
                        <div class="tool-item">Hotjar</div>
                        <div class="tool-item">Google Analytics</div>
                        <div class="tool-item">A/B Testing Tools</div>
                        <div class="tool-item">SEO Auditing</div>
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
                        <p>"The new website completely transformed our online presence. We're getting 4x more leads and our conversion rate has tripled."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Mark Johnson</strong>
                        <span>CEO, Premium Home Services</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Aimpro delivered a stunning website that perfectly captures our brand. The design process was smooth and professional."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Sarah Williams</strong>
                        <span>Marketing Director, TechFlow</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Not only does our website look amazing, but it's also converting visitors into customers at a rate we never thought possible."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>David Chen</strong>
                        <span>Founder, InnovateCorps</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>How long does website design take?</h3>
                    <p>Timeline varies by complexity: 3 weeks for Business, 4 weeks for Professional, and 6 weeks for Enterprise packages. We provide detailed project timelines during consultation.</p>
                </div>
                <div class="faq-item">
                    <h3>Do you provide content writing?</h3>
                    <p>Yes, we offer professional copywriting services optimized for conversions and SEO. This can be added to any package or purchased separately.</p>
                </div>
                <div class="faq-item">
                    <h3>Will my website be mobile-friendly?</h3>
                    <p>Absolutely! All our websites are built with a mobile-first approach and are fully responsive across all devices and screen sizes.</p>
                </div>
                <div class="faq-item">
                    <h3>Can you redesign my existing website?</h3>
                    <p>Yes, we specialize in website redesigns. We can work with your existing content and improve the design, functionality, and performance.</p>
                </div>
                <div class="faq-item">
                    <h3>Do you provide ongoing maintenance?</h3>
                    <p>Yes, we offer maintenance packages for security updates, content changes, and performance optimization. This ensures your website stays current and secure.</p>
                </div>
                <div class="faq-item">
                    <h3>What if I need changes after launch?</h3>
                    <p>All packages include a support period for minor changes. For major updates, we offer affordable maintenance packages or project-based updates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Online Presence?</h2>
                <p>Get a free consultation and discover how a custom website can drive more leads and sales for your business.</p>                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free Quote</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
