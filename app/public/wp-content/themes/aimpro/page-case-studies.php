<?php
/**
 * Template Name: Case Studies Page
 * Description: Client success stories and case studies
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/resources'); ?>">Resources</a>
                <span class="separator">›</span>
                <span class="current">Case Studies</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_header_title', true) ?: 'Case Studies'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_header_subtitle', true) ?: 'Real results from real clients across diverse industries'); ?></p>
            </div>
        </section>        <!-- Case Studies Introduction -->
        <section class="case-studies-intro">
            <div class="section-content">
                <div class="intro-content animate-on-scroll animate-fade-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_intro_title', true) ?: 'Proven Success Stories'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_intro_description', true) ?: 'Discover how we\'ve helped businesses like yours achieve remarkable growth through strategic digital marketing. Each case study showcases real challenges, innovative solutions, and measurable results that demonstrate our commitment to client success.'); ?></p>
                </div>
                <div class="results-overview animate-on-scroll animate-stagger animate-scale-up">
                    <div class="result-stat">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_stat1_number', true) ?: '250%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_stat1_label', true) ?: 'Average ROI Increase'); ?></div>
                    </div>
                    <div class="result-stat">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_stat2_number', true) ?: '150+'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_stat2_label', true) ?: 'Successful Projects'); ?></div>
                    </div>
                    <div class="result-stat">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_stat3_number', true) ?: '£2.5M+'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_stat3_label', true) ?: 'Revenue Generated'); ?></div>
                    </div>
                </div>
            </div>
        </section>        <!-- Featured Case Study -->
        <section class="featured-case-study">
            <div class="section-content">
                <div class="featured-study animate-on-scroll animate-slide-left">
                    <div class="study-content">
                        <span class="study-category"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_category', true) ?: 'E-commerce'); ?></span>
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_title', true) ?: 'TechGear UK: 400% Revenue Growth in 12 Months'); ?></h2>
                        <p class="study-summary"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_summary', true) ?: 'How we transformed a struggling online electronics retailer into a market leader through comprehensive SEO and PPC strategies.'); ?></p>
                        
                        <div class="study-highlights">
                            <div class="highlight-item">
                                <div class="highlight-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_highlight1_number', true) ?: '400%'); ?></div>
                                <div class="highlight-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_highlight1_label', true) ?: 'Revenue Increase'); ?></div>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_highlight2_number', true) ?: '350%'); ?></div>
                                <div class="highlight-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_highlight2_label', true) ?: 'Organic Traffic Growth'); ?></div>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_highlight3_number', true) ?: '180%'); ?></div>
                                <div class="highlight-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_highlight3_label', true) ?: 'Conversion Rate Improvement'); ?></div>
                            </div>
                        </div>
                        
                        <a href="<?php echo home_url('/blog'); ?>" class="study-cta"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_featured_cta_text', true) ?: 'Read Full Case Study'); ?></a>
                    </div>
                    <div class="study-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/techgear-featured.jpg" alt="<?php echo esc_attr(get_post_meta(get_the_ID(), 'cs_featured_title', true) ?: 'TechGear UK Case Study'); ?>" />
                    </div>
                </div>
            </div>
        </section>        <!-- Case Studies Grid -->        <section class="case-studies-grid">
            <div class="section-content">
                <div class="studies-grid">
                    
                    <!-- E-commerce Case Study -->
                    <div class="case-study-card animate-on-scroll animate-stagger animate-fade-up" data-category="ecommerce">
                        <div class="study-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/fashion-boutique.jpg" alt="Fashion Boutique Case Study" />
                            <div class="study-overlay">
                                <span class="study-category">E-commerce</span>
                            </div>
                        </div>
                        <div class="study-content">
                            <h3>Fashion Boutique: Local to National Success</h3>
                            <p>Transformed a local fashion boutique into a national online brand through targeted social media marketing and influencer partnerships.</p>
                            <div class="study-metrics">
                                <div class="metric">
                                    <span class="metric-value">280%</span>
                                    <span class="metric-label">Social Engagement</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">150%</span>
                                    <span class="metric-label">Online Sales</span>                                </div>
                            </div>
                            <a href="<?php echo home_url('/blog'); ?>" class="study-link">View Details</a>
                        </div>
                    </div>                    <!-- Healthcare Case Study -->
                    <div class="case-study-card animate-on-scroll animate-stagger animate-fade-up" data-category="healthcare">
                        <div class="study-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/dental-clinic.jpg" alt="Dental Clinic Case Study" />
                            <div class="study-overlay">
                                <span class="study-category">Healthcare</span>
                            </div>
                        </div>
                        <div class="study-content">
                            <h3>Premier Dental: Patient Acquisition Success</h3>
                            <p>Increased new patient bookings by 300% through local SEO optimisation and targeted Google Ads campaigns.</p>
                            <div class="study-metrics">
                                <div class="metric">
                                    <span class="metric-value">300%</span>
                                    <span class="metric-label">New Patients</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">450%</span>
                                    <span class="metric-label">Local Visibility</span>                                </div>
                            </div>
                            <a href="<?php echo home_url('/blog'); ?>" class="study-link">View Details</a>
                        </div>
                    </div>                    <!-- Finance Case Study -->
                    <div class="case-study-card animate-on-scroll animate-stagger animate-fade-up" data-category="finance">
                        <div class="study-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/financial-advisor.jpg" alt="Financial Advisor Case Study" />
                            <div class="study-overlay">
                                <span class="study-category">Finance</span>
                            </div>
                        </div>
                        <div class="study-content">
                            <h3>WealthWise Advisors: Lead Generation Mastery</h3>
                            <p>Generated high-quality leads for financial planning services through content marketing and LinkedIn advertising.</p>
                            <div class="study-metrics">
                                <div class="metric">
                                    <span class="metric-value">220%</span>
                                    <span class="metric-label">Quality Leads</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">85%</span>
                                    <span class="metric-label">Cost Reduction</span>                                </div>
                            </div>
                            <a href="<?php echo home_url('/blog'); ?>" class="study-link">View Details</a>
                        </div>
                    </div>                    <!-- Education Case Study -->
                    <div class="case-study-card animate-on-scroll animate-stagger animate-fade-up" data-category="education">
                        <div class="study-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/online-courses.jpg" alt="Online Education Case Study" />
                            <div class="study-overlay">
                                <span class="study-category">Education</span>
                            </div>
                        </div>
                        <div class="study-content">
                            <h3>EduTech Solutions: Course Enrollment Boost</h3>
                            <p>Increased online course enrollments by 500% through strategic content marketing and email automation.</p>
                            <div class="study-metrics">
                                <div class="metric">
                                    <span class="metric-value">500%</span>
                                    <span class="metric-label">Enrollments</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">340%</span>
                                    <span class="metric-label">Email Revenue</span>                                </div>
                            </div>
                            <a href="<?php echo home_url('/blog'); ?>" class="study-link">View Details</a>
                        </div>
                    </div>                    <!-- SaaS Case Study -->
                    <div class="case-study-card animate-on-scroll animate-stagger animate-fade-up" data-category="saas">
                        <div class="study-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/saas-platform.jpg" alt="SaaS Platform Case Study" />
                            <div class="study-overlay">
                                <span class="study-category">SaaS</span>
                            </div>
                        </div>
                        <div class="study-content">
                            <h3>CloudFlow: B2B Lead Generation Excellence</h3>
                            <p>Scaled from 50 to 500+ monthly qualified leads through account-based marketing and conversion optimisation.</p>
                            <div class="study-metrics">
                                <div class="metric">
                                    <span class="metric-value">900%</span>
                                    <span class="metric-label">Qualified Leads</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">275%</span>
                                    <span class="metric-label">Trial Conversions</span>                                </div>
                            </div>
                            <a href="<?php echo home_url('/blog'); ?>" class="study-link">View Details</a>
                        </div>
                    </div>                    <!-- E-commerce Case Study 2 -->
                    <div class="case-study-card animate-on-scroll animate-stagger animate-fade-up" data-category="ecommerce">
                        <div class="study-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/home-decor.jpg" alt="Home Decor Case Study" />
                            <div class="study-overlay">
                                <span class="study-category">E-commerce</span>
                            </div>
                        </div>
                        <div class="study-content">
                            <h3>Home & Garden Co: Seasonal Success Strategy</h3>
                            <p>Maximized seasonal sales through strategic PPC campaigns and inventory-based ad optimisation.</p>
                            <div class="study-metrics">
                                <div class="metric">
                                    <span class="metric-value">320%</span>
                                    <span class="metric-label">Seasonal Revenue</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">65%</span>
                                    <span class="metric-label">Cost per Sale</span>                                </div>
                            </div>
                            <a href="<?php echo home_url('/blog'); ?>" class="study-link">View Details</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>        <!-- Client Testimonials -->
        <section class="case-study-testimonials">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_testimonials_title', true) ?: 'What Our Clients Say'); ?></h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card animate-on-scroll animate-stagger animate-slide-left">
                        <div class="testimonial-content">
                            <p>"<?php echo esc_html(get_post_meta(get_the_ID(), 'cs_testimonial1_content', true) ?: 'Aimpro Digital completely transformed our online presence. Their strategic approach to SEO and PPC delivered results beyond our expectations.'); ?>"</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_testimonial1_author_name', true) ?: 'Sarah Johnson'); ?></h4>
                                <span><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_testimonial1_author_title', true) ?: 'CEO, TechGear UK'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card animate-on-scroll animate-stagger animate-slide-right">
                        <div class="testimonial-content">
                            <p>"<?php echo esc_html(get_post_meta(get_the_ID(), 'cs_testimonial2_content', true) ?: 'The team\'s expertise in healthcare marketing is exceptional. We\'ve seen a 300% increase in new patient bookings since working with them.'); ?>"</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_testimonial2_author_name', true) ?: 'Dr. Michael Smith'); ?></h4>
                                <span><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_testimonial2_author_title', true) ?: 'Practice Owner, Premier Dental'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section id="contact" class="cta-section">
            <div class="container">
                <div class="cta-content animate-on-scroll animate-scale-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_cta_title', true) ?: 'Ready to Be Our Next Success Story?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_cta_description', true) ?: 'Let\'s discuss how we can help you achieve similar results for your business.'); ?></p><div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), 'cs_cta_button1_url', true) ?: '/contact')); ?>" class="btn-outline"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_cta_button1_text', true) ?: 'Start Your Project'); ?></a>
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), 'cs_cta_button2_url', true) ?: '/about')); ?>" class="btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), 'cs_cta_button2_text', true) ?: 'Learn About Our Process'); ?></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<!-- Mobile Responsive Styles for Case Studies Page -->
<style>
/* Mobile optimizations for case studies intro section */
@media (max-width: 768px) {
    .case-studies-intro .section-content {
        padding: 2rem 1rem !important;
    }
    
    .intro-content {
        text-align: center !important;
        margin-bottom: 2rem !important;
    }
    
    .intro-content h2 {
        font-size: 1.8rem !important;
        line-height: 1.3 !important;
        margin-bottom: 1rem !important;
    }
    
    .intro-content p {
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        max-width: 100% !important;
        margin: 0 auto !important;
    }
    
    .results-overview {
        display: flex !important;
        flex-direction: column !important;
        gap: 1.5rem !important;
        align-items: center !important;
        width: 100% !important;
        margin-top: 2rem !important;
    }
    
    .result-stat {
        text-align: center !important;
        padding: 1rem !important;
        width: 100% !important;
        max-width: 280px !important;
        background: rgba(255, 255, 255, 0.05) !important;
        border-radius: 12px !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
    }
    
    .result-stat .stat-number {
        font-size: 2.2rem !important;
        margin-bottom: 0.5rem !important;
        display: block !important;
    }
    
    .result-stat .stat-label {
        font-size: 0.9rem !important;
        line-height: 1.3 !important;
        display: block !important;
    }
    
    /* Page header mobile optimization */
    .page-header-content {
        text-align: center !important;
        padding: 1.5rem 1rem !important;
    }
    
    .page-header-content h1 {
        font-size: 2rem !important;
        margin-bottom: 1rem !important;
    }
    
    .page-subtitle {
        font-size: 1rem !important;
        line-height: 1.4 !important;
    }
    
    /* Featured case study mobile optimization */
    .featured-study {
        flex-direction: column !important;
        gap: 2rem !important;
    }
    
    .study-content {
        text-align: center !important;
        order: 2 !important;
    }
    
    .study-image {
        order: 1 !important;
        width: 100% !important;
    }
    
    .study-highlights {
        flex-direction: column !important;
        gap: 1rem !important;
        margin: 1.5rem 0 !important;
    }
    
    .highlight-item {
        text-align: center !important;
        padding: 1rem !important;
        background: rgba(255, 255, 255, 0.05) !important;
        border-radius: 8px !important;
    }
    
    /* Case studies grid mobile optimization */
    .studies-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .case-study-card {
        margin-bottom: 1rem !important;
    }
    
    .study-metrics {
        flex-direction: column !important;
        gap: 0.75rem !important;
        margin: 1rem 0 !important;
    }
    
    .metric {
        text-align: center !important;
        padding: 0.75rem !important;
        background: rgba(255, 255, 255, 0.05) !important;
        border-radius: 6px !important;
    }
    
    /* Testimonials mobile optimization */
    .testimonials-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .testimonial-card {
        padding: 1.5rem 1rem !important;
        text-align: center !important;
    }
}

@media (max-width: 480px) {
    .case-studies-intro .section-content {
        padding: 1.5rem 0.75rem !important;
    }
    
    .intro-content h2 {
        font-size: 1.5rem !important;
    }
    
    .intro-content p {
        font-size: 0.9rem !important;
    }
    
    .result-stat {
        padding: 0.75rem !important;
        max-width: 100% !important;
    }
    
    .result-stat .stat-number {
        font-size: 1.8rem !important;
    }
    
    .result-stat .stat-label {
        font-size: 0.8rem !important;
    }
    
    .page-header-content {
        padding: 1rem 0.75rem !important;
    }
    
    .page-header-content h1 {
        font-size: 1.6rem !important;
    }
}
</style>

<?php get_footer(); ?>
