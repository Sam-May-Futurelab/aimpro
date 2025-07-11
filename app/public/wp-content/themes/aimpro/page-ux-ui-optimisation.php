<?php
/**
 * Template Name: UX/UI optimisation
 * 
 * UX/UI optimisation Services
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

/* Success Stories Section */
.success-stories-section {
    padding: 80px 0;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
}

.success-stories-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 20% 80%, rgba(255, 107, 53, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 107, 53, 0.05) 0%, transparent 50%);
    pointer-events: none;
}

.success-stories-section .container {
    position: relative;
    z-index: 1;
}

.success-stories-section .section-header {
    text-align: center;
    margin-bottom: 60px;
}

.success-stories-section .section-badge {
    display: inline-block;
    background: linear-gradient(135deg, var(--primary-orange), #ff8f65);
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 20px;
}

.success-stories-section h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 20px;
    line-height: 1.2;
}

.success-stories-section .section-subtitle {
    font-size: 1.1rem;
    color: var(--text-secondary);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.success-stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 40px;
    margin-top: 60px;
}

.success-story-card.modern-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    padding: 40px;
    border-radius: 24px;
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.1),
        0 8px 24px rgba(255, 107, 53, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.3);
    position: relative;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    transform: translateZ(0);
}

.success-story-card.modern-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 
        0 30px 60px rgba(0, 0, 0, 0.15),
        0 12px 32px rgba(255, 107, 53, 0.15);
    border-color: rgba(255, 107, 53, 0.3);
}

.story-rating {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 24px;
}

.story-rating .stars {
    color: var(--primary-orange);
    font-size: 1.2rem;
    letter-spacing: 2px;
}

.story-rating .rating-text {
    background: linear-gradient(135deg, var(--primary-orange), #ff8f65);
    color: white;
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 0.85rem;
    font-weight: 700;
}

.story-content p {
    font-size: 1.1rem;
    line-height: 1.7;
    color: var(--text-primary);
    margin-bottom: 32px;
    font-style: italic;
    position: relative;
}

.story-content p::before {
    content: '"';
    position: absolute;
    top: -15px;
    left: -20px;
    font-size: 4rem;
    color: var(--primary-orange);
    opacity: 0.1;
    font-family: serif;
}

.story-author {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 24px;
    border-top: 1px solid rgba(0, 0, 0, 0.08);
}

.story-author .author-info {
    display: flex;
    align-items: center;
    gap: 16px;
}

.story-author .author-avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-orange), #ff8f65);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 1.1rem;
    box-shadow: 0 4px 12px rgba(255, 107, 53, 0.3);
}

.story-author .author-details strong {
    display: block;
    color: var(--text-primary);
    font-size: 1.1rem;
    margin-bottom: 4px;
}

.story-author .author-details span {
    display: block;
    color: var(--text-secondary);
    font-size: 0.9rem;
    margin-bottom: 8px;
}

.story-author .company-badge {
    display: inline-block;
    background: rgba(255, 107, 53, 0.1);
    color: var(--primary-orange);
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 0.8rem;
    font-weight: 600;
}

.story-author .result-metric {
    text-align: right;
}

.story-author .result-metric .metric-value {
    display: block;
    font-size: 1.8rem;
    font-weight: 800;
    color: var(--primary-orange);
    line-height: 1;
}

.story-author .result-metric .metric-label {
    display: block;
    color: var(--text-secondary);
    font-size: 0.8rem;
    margin-top: 4px;
}

/* Mobile responsiveness for success stories */
@media (max-width: 768px) {
    .success-stories-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .success-story-card.modern-card {
        padding: 30px;
    }
    
    .story-author {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }
    
    .story-author .author-info {
        width: 100%;
    }
    
    .story-author .result-metric {
        text-align: left;
        width: 100%;
    }
    
    .success-stories-section h2 {
        font-size: 2rem;
    }
}

/* FAQ Section Styling - Proper font sizes */
.faq-section {
    padding: 60px 0;
}

.faq-section h2 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 3rem;
    color: var(--text-primary);
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    border-bottom: 1px solid #e2e8f0;
    margin-bottom: 0;
}

.faq-question {
    width: 100%;
    padding: 1.5rem 0;
    border: none;
    background: none;
    text-align: left;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: color 0.3s ease;
}

.faq-question h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text-primary);
    margin: 0;
    flex: 1;
    line-height: 1.4;
}

.faq-question:hover h3 {
    color: var(--primary-orange);
}

.faq-question::after {
    content: '+';
    font-size: 1.5rem;
    font-weight: 300;
    color: #64748b;
    transition: transform 0.3s ease;
    margin-left: 1rem;
    flex-shrink: 0;
}

.faq-item.active .faq-question::after {
    transform: rotate(45deg);
    color: var(--primary-orange);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
}

.faq-answer p {
    padding: 0 0 1.5rem 0;
    margin: 0;
    color: var(--text-secondary);
    line-height: 1.6;
    font-size: 1rem;
}

/* Mobile responsiveness for FAQ */
@media (max-width: 768px) {
    .faq-section h2 {
        font-size: 2rem;
    }
    
    .faq-question h3 {
        font-size: 1rem;
    }
    
    .faq-question {
        padding: 1rem 0;
    }
    
    .faq-answer p {
        font-size: 0.9rem;
    }
}
</style>

<main id="primary" class="service-page ux-ui-optimisation-page">
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
                <span class="current">UX/UI optimisation</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_hero_title', true)) ?: 'UX/UI optimisation'; ?></h1>
                <p class="hero-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_hero_subtitle', true)) ?: 'Transform your existing website into a conversion machine through data-driven user experience optimisation and interface improvements.'; ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat1_number', true) ?: '275%'; ?></div>
                        <div class="stat-label"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat1_label', true) ?: 'Average Conversion Improvement'; ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat2_number', true) ?: '85%'; ?></div>
                        <div class="stat-label"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat2_label', true) ?: 'User Satisfaction Increase'; ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat3_number', true) ?: '65%'; ?></div>
                        <div class="stat-label"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_stat3_label', true) ?: 'Bounce Rate Reduction'; ?></div>
                    </div>
                </div>
                <div class="hero-ctas animate-on-scroll animate-fade-up">
                    <a href="#contact" class="btn-primary streamlined"><?php echo get_post_meta(get_the_ID(), 'uxui_hero_primary_button_text', true) ?: 'Get your FREE UX Audit'; ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <div class="overview-text animate-on-scroll animate-slide-left">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_intro_title', true)) ?: 'optimise Your Website for Maximum Performance'; ?></h2>
                    <p class="overview-description"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_intro_description', true)) ?: 'Our UX/UI optimisation service transforms underperforming websites into conversion powerhouses through systematic analysis, strategic improvements, and data-driven testing. We focus on enhancing user experience while dramatically improving your business metrics.'; ?></p>
                    
                    <h3 class="features-heading">Key UX/UI Features</h3>
                    <div class="service-features-list">
                        <div class="service-feature-item">
                            <h4><i class="fas fa-search-plus"></i> <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_feature1_title', true)) ?: 'Comprehensive UX Audit'; ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_feature1_description', true)) ?: 'Deep analysis of user behaviour, conversion barriers, and optimisation opportunities using advanced analytics.'; ?></p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-chart-line"></i> <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_feature2_title', true)) ?: 'Conversion Rate optimisation'; ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_feature2_description', true)) ?: 'Strategic improvements to forms, CTAs, and user flow to maximise conversions and revenue.'; ?></p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-mobile-alt"></i> <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_feature3_title', true)) ?: 'Mobile Experience Enhancement'; ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_feature3_description', true)) ?: 'optimise mobile user experience for the majority of your traffic with responsive design improvements.'; ?></p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-tachometer-alt"></i> <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_feature4_title', true)) ?: 'Performance optimisation'; ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_feature4_description', true)) ?: 'Speed optimisation and Core Web Vitals improvements for better user experience and SEO rankings.'; ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="overview-stats animate-on-scroll animate-slide-right">
                    <h3 class="stats-heading">Proven Results</h3>
                    <p class="stats-description">Our UX/UI optimisations don't just look good—they deliver measurable business results. Every change is backed by data and focused on conversion.</p>
                    
                    <div class="target-icon" style="max-width: 350px; margin: 0 auto 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Aimpro-high-ranking-website-blog.png" alt="UX/UI optimisation" style="width: 100%; height: auto; display: block;">
                    </div>
                    
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number">275%</span>
                        <span class="stat-label">Average Conversion Improvement</span>
                    </div>
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number">85%</span>
                        <span class="stat-label">User Satisfaction Increase</span>
                    </div>
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number">65%</span>
                        <span class="stat-label">Bounce Rate Reduction</span>
                    </div>
                    
                    <div class="overview-cta animate-on-scroll animate-fade-up" style="margin-top: 30px; text-align: center;">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get a Free UX Audit</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Success Stories Section -->
    <section id="success-stories" class="success-stories-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <span class="section-badge">Success Stories</span>
                <h2>Real Results From UX/UI Optimisation</h2>
                <p class="section-subtitle">See how we've transformed businesses through strategic user experience improvements</p>
            </div>
            
            <div class="success-stories-grid">
                <div class="success-story-card modern-card animate-on-scroll animate-slide-left">
                    <div class="story-rating">
                        <div class="stars">★★★★★</div>
                        <div class="rating-text">5.0 Rating</div>
                    </div>
                    
                    <div class="story-content">
                        <p>"LegalAdvice Pro was struggling with a 73% bounce rate and only 2.1% conversion. Through strategic UX optimisation, we streamlined their user journey, simplified forms, and added trust elements."</p>
                    </div>
                    
                    <div class="story-author">
                        <div class="author-info">
                            <div class="author-avatar">LP</div>
                            <div class="author-details">
                                <strong>Sarah Mitchell</strong>
                                <span>Managing Director</span>
                                <div class="company-badge">LegalAdvice Pro</div>
                            </div>
                        </div>
                        <div class="result-metric">
                            <div class="metric-value">390%</div>
                            <div class="metric-label">Conversion Increase</div>
                        </div>
                    </div>
                </div>
                
                <div class="success-story-card modern-card animate-on-scroll animate-slide-right">
                    <div class="story-rating">
                        <div class="stars">★★★★★</div>
                        <div class="rating-text">5.0 Rating</div>
                    </div>
                    
                    <div class="story-content">
                        <p>"TechFlow Solutions needed their B2B platform optimised for better user engagement. We redesigned their dashboard, improved navigation, and enhanced the onboarding process for enterprise clients."</p>
                    </div>
                    
                    <div class="story-author">
                        <div class="author-info">
                            <div class="author-avatar">TF</div>
                            <div class="author-details">
                                <strong>David Chen</strong>
                                <span>Head of Product</span>
                                <div class="company-badge">TechFlow Solutions</div>
                            </div>
                        </div>
                        <div class="result-metric">
                            <div class="metric-value">245%</div>
                            <div class="metric-label">User Engagement</div>
                        </div>
                    </div>
                </div>
                
                <div class="success-story-card modern-card animate-on-scroll animate-fade-up">
                    <div class="story-rating">
                        <div class="stars">★★★★★</div>
                        <div class="rating-text">5.0 Rating</div>
                    </div>
                    
                    <div class="story-content">
                        <p>"EcoShop needed their e-commerce site optimised for mobile users. We redesigned the checkout flow, improved product pages, and enhanced the mobile shopping experience."</p>
                    </div>
                    
                    <div class="story-author">
                        <div class="author-info">
                            <div class="author-avatar">ES</div>
                            <div class="author-details">
                                <strong>Emma Rodriguez</strong>
                                <span>E-commerce Manager</span>
                                <div class="company-badge">EcoShop</div>
                            </div>
                        </div>
                        <div class="result-metric">
                            <div class="metric-value">167%</div>
                            <div class="metric-label">Mobile Sales</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- optimisation Areas -->    <section class="optimisation-areas">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;">Key Areas We Optimise</h2>
            
            <div class="tools-grid">
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <h4>User Journey & Navigation</h4>
                    <p>Streamline user paths and improve navigation structure for better user flow and conversions.</p>
                    <ul>
                        <li>Information architecture optimisation</li>
                        <li>Menu structure improvements</li>
                        <li>Internal linking strategy</li>
                        <li>Search functionality enhancement</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <h4>Conversion Elements</h4>
                    <p>optimise forms, buttons, and calls-to-action for maximum conversion impact.</p>
                    <ul>
                        <li>CTA button optimisation</li>
                        <li>Form field reduction</li>
                        <li>Trust signal placement</li>
                        <li>Urgency and scarcity elements</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <h4>Mobile Experience</h4>
                    <p>Enhance mobile usability and performance for the majority of your users.</p>
                    <ul>
                        <li>Touch-friendly interface design</li>
                        <li>Mobile form optimisation</li>
                        <li>Thumb-friendly navigation</li>
                        <li>Mobile speed optimisation</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <h4>Page Speed & Performance</h4>
                    <p>optimise loading times and Core Web Vitals for better user experience and SEO.</p>
                    <ul>
                        <li>Image optimisation</li>
                        <li>Code minification</li>
                        <li>Caching implementation</li>
                        <li>Core Web Vitals improvement</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <h4>Visual Hierarchy</h4>
                    <p>Improve content organisation and visual flow to guide users toward desired actions.</p>
                    <ul>
                        <li>Content prioritisation</li>
                        <li>Typography optimisation</li>
                        <li>colour psychology application</li>
                        <li>White space utilisation</li>
                    </ul>
                </div>
                
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <h4>Trust & Credibility</h4>
                    <p>Enhance trust signals and credibility elements to reduce conversion barriers.</p>
                    <ul>
                        <li>Social proof integration</li>
                        <li>Security badge placement</li>
                        <li>Testimonial optimisation</li>
                        <li>Company credential display</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- optimisation Process -->    <section class="optimisation-process">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_title', true)) ?: 'Our UX/UI optimisation Process'; ?></h2>
            
            <div class="process-timeline">
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step1_title', true)) ?: 'Comprehensive UX Audit'; ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step1_description', true)) ?: 'analyse current performance, user behaviour, and identify optimisation opportunities using advanced analytics tools.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step2_title', true)) ?: 'User Research & Testing'; ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step2_description', true)) ?: 'Conduct user testing, heatmap analysis, and behavioural research to understand user pain points.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step3_title', true)) ?: 'Strategy Development'; ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step3_description', true)) ?: 'Create detailed optimisation strategy with prioritised improvements based on impact and effort.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step4_title', true)) ?: 'Design & Implementation'; ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step4_description', true)) ?: 'Implement strategic improvements with focus on user experience and conversion optimisation.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step5_title', true)) ?: 'A/B Testing'; ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step5_description', true)) ?: 'Test variations to ensure improvements deliver measurable results and optimal performance.'; ?></p>
                    </div>
                </div>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step6_title', true)) ?: 'Monitor & Iterate'; ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'uxui_process_step6_description', true)) ?: 'Continuous monitoring and iterative improvements based on real user data and performance metrics.'; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Pricing Section -->    <section class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo get_post_meta(get_the_ID(), 'uxui_packages_title', true) ?: 'UX/UI optimisation Packages'; ?></h2>
                <p><?php echo get_post_meta(get_the_ID(), 'uxui_packages_subtitle', true) ?: 'Transform your website performance with data-driven optimisation strategies.'; ?></p>
            </div>
              <div class="pricing-grid">
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_package1_name', true) ?: 'UX Audit & Report'; ?></h3>
                        <div class="price"><?php echo get_post_meta(get_the_ID(), 'uxui_package1_price', true) ?: '£1,497'; ?></div>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_package1_description', true) ?: 'Comprehensive analysis & recommendations'; ?></p>
                    </div>
                    <ul class="pricing-features">
                        <?php 
                        $features1 = get_post_meta(get_the_ID(), 'uxui_package1_features', true);
                        if ($features1) {
                            $features_array = explode("\n", $features1);
                            foreach ($features_array as $feature) {
                                if (trim($feature)) {
                                    echo '<li>' . esc_html(trim($feature)) . '</li>';
                                }
                            }
                        } else {
                            // Default features
                            echo '<li>Complete UX audit</li>';
                            echo '<li>User behaviour analysis</li>';
                            echo '<li>Conversion barrier identification</li>';
                            echo '<li>Mobile optimisation review</li>';
                            echo '<li>Performance analysis</li>';
                            echo '<li>Detailed improvement roadmap</li>';
                            echo '<li>Priority action items</li>';
                            echo '<li>2-week delivery</li>';
                        }
                        ?>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                  <div class="pricing-card featured animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_package2_name', true) ?: 'UX optimisation'; ?></h3>
                        <div class="price"><?php echo get_post_meta(get_the_ID(), 'uxui_package2_price', true) ?: '£4,997'; ?></div>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_package2_description', true) ?: 'Complete optimisation implementation'; ?></p>
                    </div>
                    <ul class="pricing-features">
                        <?php 
                        $features2 = get_post_meta(get_the_ID(), 'uxui_package2_features', true);
                        if ($features2) {
                            $features_array = explode("\n", $features2);
                            foreach ($features_array as $feature) {
                                if (trim($feature)) {
                                    echo '<li>' . esc_html(trim($feature)) . '</li>';
                                }
                            }
                        } else {
                            // Default features
                            echo '<li>Comprehensive UX audit</li>';
                            echo '<li>Strategic optimisation plan</li>';
                            echo '<li>Design & development implementation</li>';
                            echo '<li>Mobile experience optimisation</li>';
                            echo '<li>Conversion element optimisation</li>';
                            echo '<li>Performance improvements</li>';
                            echo '<li>A/B testing setup</li>';
                            echo '<li>Analytics configuration</li>';
                            echo '<li>4-week delivery</li>';
                            echo '<li>30 days support</li>';
                        }
                        ?>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>
                
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3><?php echo get_post_meta(get_the_ID(), 'uxui_package3_name', true) ?: 'Complete UX Overhaul'; ?></h3>
                        <div class="price"><?php echo get_post_meta(get_the_ID(), 'uxui_package3_price', true) ?: '£9,997'; ?></div>
                        <p><?php echo get_post_meta(get_the_ID(), 'uxui_package3_description', true) ?: 'Full website transformation'; ?></p>
                    </div>
                    <ul class="pricing-features">
                        <?php 
                        $features3 = get_post_meta(get_the_ID(), 'uxui_package3_features', true);
                        if ($features3) {
                            $features_array = explode("\n", $features3);
                            foreach ($features_array as $feature) {
                                if (trim($feature)) {
                                    echo '<li>' . esc_html(trim($feature)) . '</li>';
                                }
                            }
                        } else {
                            // Default features
                            echo '<li>Complete UX research & analysis</li>';
                            echo '<li>User testing & interviews</li>';
                            echo '<li>Information architecture redesign</li>';
                            echo '<li>Visual design optimisation</li>';
                            echo '<li>Advanced functionality improvements</li>';
                            echo '<li>Comprehensive performance optimisation</li>';
                            echo '<li>Multi-variant testing</li>';
                            echo '<li>Ongoing optimisation</li>';
                            echo '<li>6-week delivery</li>';
                            echo '<li>60 days support</li>';
                            echo '<li>Monthly optimisation reviews</li>';
                        }
                        ?>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>    <!-- Tools & Analytics -->
    <section class="tools-section">
        <div class="container" style="text-align: center;">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2 style="margin-bottom: 20px;">UX/UI Analysis Tools & Technologies</h2>
                <p style="max-width: 800px; margin: 0 auto 30px;">We use industry-leading tools and technologies to analyse, test, and optimise your website for maximum performance.</p>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Analytics & Research</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fab fa-google"></i>
                    </div>
                    <h3>Google Analytics</h3>
                    <p>Comprehensive website analytics platform for tracking user behaviour</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-mouse-pointer"></i>
                    </div>
                    <h3>Hotjar</h3>
                    <p>Heatmaps, session recordings, and user feedback tools</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Crazy Egg & FullStory</h3>
                    <p>User behaviour visualization and scroll depth tracking</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>UserTesting & Clarity</h3>
                    <p>User testing platforms for real user feedback and insight</p>
                </div>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Testing & optimisation</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fab fa-google"></i>
                    </div>
                    <h3>Google optimise</h3>
                    <p>Free A/B testing platform with Google Analytics integration</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>optimisely</h3>
                    <p>Advanced experimentation platform for multivariate testing</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>VWO & Convert</h3>
                    <p>Visual editor for creating and testing UX optimisations</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Unbounce & AB Tasty</h3>
                    <p>Landing page optimisation and personalisation tools</p>
                </div>
            </div>
            
            <h3 class="tools-category animate-on-scroll animate-fade-up">Performance Tools</h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Google PageSpeed</h3>
                    <p>Performance analysis and improvement recommendations</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-stopwatch"></i>
                    </div>
                    <h3>GTmetrix</h3>
                    <p>Detailed performance analysis and optimisation scoring</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Lighthouse</h3>
                    <p>Automated website auditing tool for performance, accessibility, and SEO</p>
                </div>
                <div class="tool-item" style="text-align: center;">
                    <div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Core Web Vitals</h3>
                    <p>Google's page experience metrics for performance measurement</p>
                </div>
            </div>
        </div>
    </section></section>    <!-- Testimonials -->    <section class="testimonials-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'uxui_testimonials_title', true) ?: 'What Our Clients Say'; ?></h2>
            <div class="testimonials-grid">
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"<?php echo get_post_meta(get_the_ID(), 'uxui_testimonial1_content', true) ?: 'The UX optimisation increased our consultation bookings by 390%. The data-driven approach was exactly what we needed.'; ?>"</p>
                    </div>
                    <div class="testimonial-author">
                        <strong><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial1_author', true) ?: 'Patricia Johnson'; ?></strong>
                        <span><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial1_position', true) ?: 'Managing Partner, LegalAdvice Pro'; ?></span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"<?php echo get_post_meta(get_the_ID(), 'uxui_testimonial2_content', true) ?: 'Our bounce rate dropped from 73% to 31% and conversions tripled. The investment paid for itself in the first month.'; ?>"</p>
                    </div>
                    <div class="testimonial-author">
                        <strong><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial2_author', true) ?: 'Andrew Wilson'; ?></strong>
                        <span><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial2_position', true) ?: 'CEO, TechFlow Solutions'; ?></span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"<?php echo get_post_meta(get_the_ID(), 'uxui_testimonial3_content', true) ?: 'The mobile optimisation alone increased our mobile conversions by 280%. Outstanding attention to detail.'; ?>"</p>
                    </div>
                    <div class="testimonial-author">
                        <strong><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial3_author', true) ?: 'Rachel Martinez'; ?></strong>
                        <span><?php echo get_post_meta(get_the_ID(), 'uxui_testimonial3_position', true) ?: 'Marketing Director, InnovateCorps'; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;"><?php echo get_post_meta(get_the_ID(), 'uxui_faq_title', true) ?: 'Frequently Asked Questions'; ?></h2>
                <div class="faq-list">
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>How long does UX/UI optimisation take?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Timeline varies by scope: 2-3 weeks for audits, 4-6 weeks for standard optimisation, and 8-12 weeks for complete overhauls. We provide detailed timelines during consultation based on your specific requirements.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>Will optimisation affect my website's SEO?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>UX/UI optimisation actually improves SEO! Better user experience leads to lower bounce rates, longer session durations, and improved Core Web Vitals - all positive ranking factors for search engines.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>Do you provide A/B testing?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, A/B testing is a core part of our optimisation process. We test different variations to ensure improvements deliver measurable results before full implementation across your site.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>Can you optimise mobile experience?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Absolutely! Mobile optimisation is essential and can be done as part of overall UX improvements or as a standalone project. We focus on touch-friendly interfaces, loading speed, and mobile-specific user journeys.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>What tools do you use for optimisation?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>We use industry-leading tools including Google Analytics, Hotjar for heatmaps, Google Optimize for A/B testing, PageSpeed Insights for performance, and UserTesting for user feedback and behaviour analysis.</p>
                        </div>
                    </div>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3>Do you provide ongoing optimisation?</h3>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we offer ongoing optimisation packages with monthly monitoring, continuous testing, and iterative improvements based on user data and performance metrics to ensure sustained results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-scale-up">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'uxui_cta_title', true) ?: 'Ready to optimise Your Website for Better Results?'; ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'uxui_cta_description', true) ?: 'Get a free UX audit and discover exactly how to improve your website\'s performance and conversions.'; ?></p>                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary"><?php echo get_post_meta(get_the_ID(), 'uxui_cta_button_text', true) ?: 'Get Free UX Audit'; ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Mobile optimisation for Key Areas We Optimise section */
@media (max-width: 768px) {
    /* Hero section mobile adjustments */
    .ux-ui-optimisation-page .page-hero {
        padding: 80px 0 60px !important;
        min-height: auto !important;
        background: #ffffff !important;
    }
    
    .ux-ui-optimisation-page .hero-content {
        text-align: center !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .ux-ui-optimisation-page .hero-content h1 {
        font-size: 2.2rem !important;
        font-weight: 800 !important;
        color: #1e293b !important;
        margin-bottom: 20px !important;
        line-height: 1.2 !important;
        word-wrap: break-word !important;
    }
    
    .ux-ui-optimisation-page .hero-subtitle {
        font-size: 1.1rem !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        margin-bottom: 30px !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .ux-ui-optimisation-page .hero-stats {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
        margin-bottom: 30px !important;
    }
    
    .ux-ui-optimisation-page .hero-stats .stat-item {
        background: #f8fafc !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        text-align: center !important;
        min-height: auto !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .ux-ui-optimisation-page .hero-stats .stat-number {
        font-size: 2.5rem !important;
        font-weight: 800 !important;
        color: #f15a25 !important;
        margin-bottom: 8px !important;
        line-height: 1.1 !important;
    }
    
    .ux-ui-optimisation-page .hero-stats .stat-label {
        font-size: 0.95rem !important;
        color: #64748b !important;
        font-weight: 500 !important;
        line-height: 1.3 !important;
        word-wrap: break-word !important;
    }
    
    .ux-ui-optimisation-page .hero-ctas {
        display: flex !important;
        flex-direction: column !important;
        gap: 15px !important;
        width: 100% !important;
        align-items: stretch !important;
    }
    
    .ux-ui-optimisation-page .hero-ctas .btn-primary {
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
    
    /* Key Areas We Optimise section - MAIN FIX */
    .ux-ui-optimisation-page .optimisation-areas {
        padding: 60px 0 !important;
        background: #f8fafc !important;
        overflow-x: hidden !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas .container {
        width: 100% !important;
        max-width: 100% !important;
        padding: 0 20px !important;
        overflow-x: hidden !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
        word-wrap: break-word !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas .tools-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
        width: 100% !important;
        margin: 0 auto !important;
        overflow-x: hidden !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas .tool-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: left !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        width: 100% !important;
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        hyphens: auto !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas .tool-item h4 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
        word-wrap: break-word !important;
        text-align: center !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas .tool-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        margin-bottom: 16px !important;
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        hyphens: auto !important;
        text-align: center !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas .tool-item ul {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas .tool-item ul li {
        padding: 8px 0 !important;
        color: #64748b !important;
        font-size: 0.9rem !important;
        line-height: 1.4 !important;
        border-bottom: 1px solid #f1f5f9 !important;
        position: relative !important;
        padding-left: 20px !important;
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        hyphens: auto !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas .tool-item ul li:before {
        content: "•" !important;
        color: #f15a25 !important;
        font-weight: bold !important;
        position: absolute !important;
        left: 0 !important;
        top: 8px !important;
    }
    
    .ux-ui-optimisation-page .optimisation-areas .tool-item ul li:last-child {
        border-bottom: none !important;
    }
    
    /* Process section mobile adjustments */
    .ux-ui-optimisation-page .optimisation-process {
        padding: 60px 0 !important;
        background: white !important;
    }
    
    .ux-ui-optimisation-page .optimisation-process h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
        padding: 0 20px !important;
    }
    
    .ux-ui-optimisation-page .process-timeline {
        display: flex !important;
        flex-direction: column !important;
        gap: 20px !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .ux-ui-optimisation-page .process-step {
        display: flex !important;
        flex-direction: row !important;
        align-items: flex-start !important;
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .ux-ui-optimisation-page .step-number {
        background: #f15a25 !important;
        color: white !important;
        width: 40px !important;
        height: 40px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-weight: 700 !important;
        font-size: 1.1rem !important;
        margin-right: 16px !important;
        flex-shrink: 0 !important;
    }
    
    .ux-ui-optimisation-page .step-content h3 {
        color: #1e293b !important;
        font-size: 1.2rem !important;
        font-weight: 700 !important;
        margin-bottom: 8px !important;
        line-height: 1.3 !important;
    }
    
    .ux-ui-optimisation-page .step-content p {
        color: #64748b !important;
        font-size: 0.9rem !important;
        line-height: 1.5 !important;
        margin: 0 !important;
    }
    
    /* CTA section mobile adjustments */
    .ux-ui-optimisation-page .cta-section {
        padding: 60px 0 !important;
        background: linear-gradient(135deg, #1e293b 0%, #334155 100%) !important;
    }
    
    .ux-ui-optimisation-page .cta-content {
        text-align: center !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .ux-ui-optimisation-page .cta-content h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: white !important;
        margin-bottom: 20px !important;
        line-height: 1.3 !important;
    }
    
    .ux-ui-optimisation-page .cta-content p {
        font-size: 1.1rem !important;
        color: #cbd5e1 !important;
        line-height: 1.6 !important;
        margin-bottom: 30px !important;
    }
    
    .ux-ui-optimisation-page .cta-buttons {
        display: flex !important;
        flex-direction: column !important;
        gap: 15px !important;
        width: 100% !important;
        align-items: stretch !important;
    }
    
    .ux-ui-optimisation-page .cta-buttons .btn-primary {
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
    
    .ux-ui-optimisation-page .cta-buttons .btn-primary:hover {
        background: #d14a1f !important;
        border-color: #d14a1f !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 4px 12px rgba(241, 90, 37, 0.3) !important;
    }
}
</style>

<?php get_footer(); ?>

