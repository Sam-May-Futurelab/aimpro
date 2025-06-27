<?php
/**
 * Template Name: Custom Website Design
 * 
 * Custom Website Design Services
 *
 * @package Aimpro
 */

get_header(); ?>

<style>
.tools-section .tool-icon {
    display: flex;
    justify-content: center;
    align-items: center;
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

<main id="primary" class="service-page website-design-page">
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
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1>Custom Website Design</h1>
                <p class="hero-subtitle">Beautiful, conversion-focused websites that perfectly represent your brand and drive measurable business results.</p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
                    <div class="stat-item">
                        <div class="stat-number">285%</div>
                        <div class="stat-label">Average Engagement Increase</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Client Satisfaction Rate</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">2.1s</div>
                        <div class="stat-label">Average Load Time</div>
                    </div>
                </div>                <div class="hero-ctas animate-on-scroll animate-fade-up">
                    <a href="#contact" class="btn-primary streamlined">Get Design Quote</a>
                </div>
            </div>
        </div>    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content">                <div class="overview-text animate-on-scroll animate-slide-left">
                    <h2>Websites That Work As Hard As You Do</h2>
                    <p class="overview-description">Our custom website design service creates powerful digital experiences that not only look stunning but convert visitors into customers. Every design decision is backed by user experience research and conversion optimisation principles.</p>
                    
                    <h3 class="features-heading">Key Design Features</h3>
                    <div class="service-features-list">
                        <div class="service-feature-item">
                            <h4><i class="fas fa-palette"></i> Brand-Aligned Design</h4>
                            <p>Custom designs that perfectly reflect your brand identity and values across every element.</p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-mobile-alt"></i> Mobile-First Approach</h4>
                            <p>Responsive designs optimised for all devices with emphasis on mobile user experience.</p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-chart-line"></i> Conversion optimisation</h4>
                            <p>Every element designed to guide visitors toward your desired actions and business goals.</p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-search"></i> SEO Foundation</h4>
                            <p>Built-in SEO best practices ensuring your website ranks well from day one.</p>
                        </div>
                    </div>
                </div>                <div class="overview-stats animate-on-scroll animate-slide-right">                    <h3 class="stats-heading">Proven Results</h3>
                    <p class="stats-description">Our designs don't just look good—they deliver measurable business results. Every project is built with conversion and user experience as top priorities.</p>                    <div class="target-icon" style="max-width: 350px; margin: 0 auto 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Aimpro-high-ranking-website-blog.png" alt="High Ranking Website" style="width: 100%; height: auto; display: block;">
                    </div>
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number">285%</span>
                        <span class="stat-label">Average Engagement Increase</span>
                    </div>
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number">95%</span>
                        <span class="stat-label">Client Satisfaction Rate</span>
                    </div>
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number">2.1s</span>
                        <span class="stat-label">Average Load Time</span>
                    </div>                    <div class="overview-cta animate-on-scroll animate-fade-up" style="margin-top: 30px; text-align: center;">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get a Free Design Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section id="case-study" class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text animate-on-scroll animate-slide-left">
                    <h2>Case Study: Premium Home Services Transformation</h2>
                    <p class="case-study-intro">How we helped a premium home services company increase lead generation by 420% and generate £180K in additional annual revenue through strategic website redesign and optimisation.</p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p>Premium Home Services had been operating successfully for over a decade, but their website was holding them back. The outdated design looked unprofessional and failed to reflect their premium service quality. With a bounce rate of 78% and only 3 leads per month, they were losing potential customers to competitors with stronger online presence.</p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Solution</h3>
                        <p>We implemented a comprehensive website transformation strategy:</p>
                        <ul>
                            <li><i class="fas fa-paint-brush"></i> <strong>Complete Visual Redesign:</strong> Modern, professional design reflecting premium brand positioning</li>
                            <li><i class="fas fa-images"></i> <strong>Service Showcase:</strong> Comprehensive service pages with before/after galleries</li>
                            <li><i class="fas fa-shield-alt"></i> <strong>Trust Building:</strong> Testimonials, certifications, and social proof integration</li>
                            <li><i class="fas fa-magnet"></i> <strong>Lead Capture:</strong> Strategic contact forms and clear call-to-action placement</li>
                            <li><i class="fas fa-mobile-alt"></i> <strong>Mobile Optimisation:</strong> Seamless experience across all devices</li>
                        </ul>
                    </div>
                    
                    <div class="case-study-results">
                        <h3>The Impact</h3>
                        <p>Within 6 months of launching the new website, Premium Home Services saw remarkable improvements across all key metrics, transforming their digital presence into a powerful lead generation engine.</p>
                    </div>
                </div>
                
                <div class="case-study-metrics animate-on-scroll animate-slide-right">
                    <div class="metrics-before">
                        <h4>Before</h4>
                        <div class="metric-item">
                            <span class="metric-number">78%</span>
                            <span class="metric-label">Bounce Rate</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-number">3</span>
                            <span class="metric-label">Leads per Month</span>
                        </div>
                        <div class="metric-item">
                            <span class="metric-number">45s</span>
                            <span class="metric-label">Average Session</span>
                        </div>
                    </div>
                    
                    <div class="metrics-after">
                        <h4>After</h4>
                        <div class="metric-item success">
                            <span class="metric-number">13%</span>
                            <span class="metric-label">Bounce Rate</span>
                            <span class="metric-change">-65%</span>
                        </div>
                        <div class="metric-item success">
                            <span class="metric-number">15+</span>
                            <span class="metric-label">Leads per Month</span>
                            <span class="metric-change">+420%</span>
                        </div>
                        <div class="metric-item success">
                            <span class="metric-number">2m 53s</span>
                            <span class="metric-label">Average Session</span>
                            <span class="metric-change">+285%</span>
                        </div>
                    </div>
                    
                    <div class="revenue-impact">
                        <div class="revenue-box">
                            <i class="fas fa-chart-line"></i>
                            <span class="revenue-amount">£180K</span>
                            <span class="revenue-label">Additional Annual Revenue</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- CTA after case study -->
            <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <h3>Ready to Transform Your Website?</h3>
                <p>See how our website design expertise can drive similar results for your business.</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Start Your Website Project</a>
            </div>
        </div>
    </section><!-- Design Process -->
    <section class="design-process">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Our Website Design Process</h2>
            
            <div class="process-timeline">
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Discovery & Research</h3>
                        <p>Deep dive into your business, target audience, competitors, and goals to inform the design strategy.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Strategy & Planning</h3>
                        <p>Create detailed site maps, user journeys, and conversion funnels to optimise user experience.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Wireframing & UX</h3>
                        <p>Develop wireframes and user experience architecture focusing on usability and conversion paths.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Visual Design</h3>
                        <p>Create stunning visual designs that align with your brand and appeal to your target audience.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Development & Testing</h3>
                        <p>Build responsive, fast-loading website with thorough testing across devices and browsers.</p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Launch & Optimisation</h3>
                        <p>Strategic launch with performance monitoring and ongoing optimisation for better results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Website Design Packages</h2>
                <p>Choose the perfect package for your business needs and budget.</p>
            </div>
            
            <div class="pricing-grid">
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Business Website</h3>
                        <div class="price">£2,997</div>
                        <p>Perfect for small businesses</p>
                    </div>
                    <ul class="pricing-features">
                        <li>5-page custom website</li>
                        <li>Mobile-responsive design</li>
                        <li>Contact form integration</li>
                        <li>Basic SEO optimisation</li>
                        <li>Google Analytics setup</li>
                        <li>2 rounds of revisions</li>
                        <li>3-week delivery</li>
                        <li>30 days support</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                  <div class="pricing-card featured animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Professional Website</h3>
                        <div class="price">£5,997</div>
                        <p>Ideal for growing companies</p>
                    </div>
                    <ul class="pricing-features">
                        <li>10-page custom website</li>
                        <li>Advanced mobile optimisation</li>
                        <li>Lead generation forms</li>
                        <li>Advanced SEO optimisation</li>
                        <li>Analytics & tracking setup</li>
                        <li>Blog setup & integration</li>
                        <li>3 rounds of revisions</li>
                        <li>4-week delivery</li>
                        <li>60 days support</li>
                        <li>Performance optimisation</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>
                
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Enterprise Website</h3>
                        <div class="price">£9,997</div>
                        <p>For large organisations</p>
                    </div>
                    <ul class="pricing-features">
                        <li>Unlimited pages</li>
                        <li>Custom functionality</li>
                        <li>Advanced integrations</li>
                        <li>Conversion optimisation</li>
                        <li>Multi-language support</li>
                        <li>Advanced analytics</li>
                        <li>Unlimited revisions</li>
                        <li>6-week delivery</li>
                        <li>90 days support</li>
                        <li>Priority support</li>
                        <li>Ongoing maintenance</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>            </div>
        </div>    </section>    <!-- Technologies -->    <section class="tools-section">
        <div class="container" style="text-align: center;">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2 style="margin-bottom: 20px;">Design Tools & Technologies</h2>
                <p style="max-width: 800px; margin: 0 auto 30px;">We use industry-leading tools and technologies to create stunning, high-performance websites that deliver results.</p>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Design & UX Tools</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fab fa-figma"></i>
                    </div>
                    <h3>Figma</h3>
                    <p>Collaborative interface design tool for creating wireframes and prototypes</p>
                </div>                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Adobe Creative Suite</h3>
                    <p>Complete design package including Photoshop, Illustrator and InDesign</p>
                </div>
                  <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-pencil-ruler"></i>
                    </div>
                    <h3>Sketch & XD</h3>
                    <p>Professional design tools for creating responsive user interfaces</p>
                </div>
                  <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>InVision & Principle</h3>
                    <p>Interactive prototyping tools for testing user flows and animations</p>
                </div>
            </div>
              <h3 class="tools-category animate-on-scroll animate-fade-up">Development Technologies</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fab fa-wordpress"></i>
                    </div>
                    <h3>WordPress</h3>
                    <p>Powerful CMS for scalable, easy-to-manage business websites</p>
                </div>
                  <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fab fa-react"></i>
                    </div>
                    <h3>Modern JavaScript</h3>
                    <p>React.js and other JavaScript frameworks for interactive experiences</p>
                </div>
                  <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fab fa-html5"></i>
                    </div>
                    <h3>HTML5/CSS3</h3>
                    <p>Latest web standards for responsive, accessible website development</p>
                </div>
                  <div class="tool-item" style="text-align: center;">                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-stream"></i>
                    </div>
                    <h3>Webflow & Shopify</h3>
                    <p>No-code and e-commerce platforms for specific business needs</p>
                </div>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">optimisation & Analytics</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Performance Tools</h3>
                    <p>Google PageSpeed and GTmetrix for speed optimisation</p>
                </div>
                  <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Analytics Platforms</h3>
                    <p>Google Analytics and data visualization for tracking results</p>
                </div>
                  <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h3>A/B Testing</h3>
                    <p>Conversion rate optimisation through split testing</p>
                </div>
                  <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <h3>UX Research Tools</h3>
                    <p>Hotjar, heatmaps, and user testing for continuous improvement</p>
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
                        <p>"The new website completely transformed our online presence. We're getting 4x more leads and our conversion rate has tripled."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Mark Johnson</strong>
                        <span>CEO, Premium Home Services</span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"Aimpro delivered a stunning website that perfectly captures our brand. The design process was smooth and professional."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Sarah Williams</strong>
                        <span>Marketing Director, TechFlow</span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
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
    </section>    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Frequently Asked Questions</h2>
            <div class="faq-grid">                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">How long does website design take?</button>
                    <div class="faq-answer">
                        <p>Timeline varies by complexity: 3 weeks for Business, 4 weeks for Professional, and 6 weeks for Enterprise packages. We provide detailed project timelines during consultation.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">Do you provide content writing?</button>
                    <div class="faq-answer">
                        <p>Yes, we offer professional copywriting services optimised for conversions and SEO. This can be added to any package or purchased separately.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">Will my website be mobile-friendly?</button>
                    <div class="faq-answer">
                        <p>Absolutely! All our websites are built with a mobile-first approach and are fully responsive across all devices and screen sizes.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">Can you redesign my existing website?</button>
                    <div class="faq-answer">
                        <p>Yes, we specialise in website redesigns. We can work with your existing content and improve the design, functionality, and performance.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">Do you provide ongoing maintenance?</button>
                    <div class="faq-answer">
                        <p>Yes, we offer maintenance packages for security updates, content changes, and performance optimisation. This ensures your website stays current and secure.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">What if I need changes after launch?</button>
                    <div class="faq-answer">
                        <p>All packages include a support period for minor changes. For major updates, we offer affordable maintenance packages or project-based updates.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-scale-up">
                <h2 class="animate-on-scroll animate-fade-up">Ready to Transform Your Online Presence?</h2>
                <p class="animate-on-scroll animate-fade-up">Get a free consultation and discover how a custom website can drive more leads and sales for your business.</p>                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free Quote</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

