<?php
/**
 * Template Name: Case Studies Page
 * Description: Client success stories and case studies
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Case Studies</h1>
                <p class="page-subtitle">Real results from real clients across diverse industries</p>
            </div>
        </section>

        <!-- Case Studies Introduction -->
        <section class="case-studies-intro">
            <div class="section-content">
                <div class="intro-content">
                    <h2>Proven Success Stories</h2>
                    <p>Discover how we've helped businesses like yours achieve remarkable growth through strategic digital marketing. Each case study showcases real challenges, innovative solutions, and measurable results that demonstrate our commitment to client success.</p>
                </div>
                <div class="results-overview">
                    <div class="result-stat">
                        <div class="stat-number">250%</div>
                        <div class="stat-label">Average ROI Increase</div>
                    </div>
                    <div class="result-stat">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Successful Projects</div>
                    </div>
                    <div class="result-stat">
                        <div class="stat-number">£2.5M+</div>
                        <div class="stat-label">Revenue Generated</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Case Study -->
        <section class="featured-case-study">
            <div class="section-content">
                <div class="featured-study">
                    <div class="study-content">
                        <span class="study-category">E-commerce</span>
                        <h2>TechGear UK: 400% Revenue Growth in 12 Months</h2>
                        <p class="study-summary">How we transformed a struggling online electronics retailer into a market leader through comprehensive SEO and PPC strategies.</p>
                        
                        <div class="study-highlights">
                            <div class="highlight-item">
                                <div class="highlight-number">400%</div>
                                <div class="highlight-label">Revenue Increase</div>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-number">350%</div>
                                <div class="highlight-label">Organic Traffic Growth</div>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-number">180%</div>
                                <div class="highlight-label">Conversion Rate Improvement</div>
                            </div>
                        </div>
                        
                        <a href="#" class="study-cta">Read Full Case Study</a>
                    </div>
                    <div class="study-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/techgear-featured.jpg" alt="TechGear UK Case Study" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Case Studies Grid -->
        <section class="case-studies-grid">
            <div class="section-content">
                <div class="filter-tabs">
                    <button class="filter-tab active" data-filter="all">All Industries</button>
                    <button class="filter-tab" data-filter="ecommerce">E-commerce</button>
                    <button class="filter-tab" data-filter="healthcare">Healthcare</button>
                    <button class="filter-tab" data-filter="finance">Finance</button>
                    <button class="filter-tab" data-filter="education">Education</button>
                    <button class="filter-tab" data-filter="saas">SaaS</button>
                </div>

                <div class="studies-grid">
                    
                    <!-- E-commerce Case Study -->
                    <div class="case-study-card" data-category="ecommerce">
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
                                    <span class="metric-label">Online Sales</span>
                                </div>
                            </div>
                            <a href="#" class="study-link">View Details</a>
                        </div>
                    </div>

                    <!-- Healthcare Case Study -->
                    <div class="case-study-card" data-category="healthcare">
                        <div class="study-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/dental-clinic.jpg" alt="Dental Clinic Case Study" />
                            <div class="study-overlay">
                                <span class="study-category">Healthcare</span>
                            </div>
                        </div>
                        <div class="study-content">
                            <h3>Premier Dental: Patient Acquisition Success</h3>
                            <p>Increased new patient bookings by 300% through local SEO optimization and targeted Google Ads campaigns.</p>
                            <div class="study-metrics">
                                <div class="metric">
                                    <span class="metric-value">300%</span>
                                    <span class="metric-label">New Patients</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">450%</span>
                                    <span class="metric-label">Local Visibility</span>
                                </div>
                            </div>
                            <a href="#" class="study-link">View Details</a>
                        </div>
                    </div>

                    <!-- Finance Case Study -->
                    <div class="case-study-card" data-category="finance">
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
                                    <span class="metric-label">Cost Reduction</span>
                                </div>
                            </div>
                            <a href="#" class="study-link">View Details</a>
                        </div>
                    </div>

                    <!-- Education Case Study -->
                    <div class="case-study-card" data-category="education">
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
                                    <span class="metric-label">Email Revenue</span>
                                </div>
                            </div>
                            <a href="#" class="study-link">View Details</a>
                        </div>
                    </div>

                    <!-- SaaS Case Study -->
                    <div class="case-study-card" data-category="saas">
                        <div class="study-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/saas-platform.jpg" alt="SaaS Platform Case Study" />
                            <div class="study-overlay">
                                <span class="study-category">SaaS</span>
                            </div>
                        </div>
                        <div class="study-content">
                            <h3>CloudFlow: B2B Lead Generation Excellence</h3>
                            <p>Scaled from 50 to 500+ monthly qualified leads through account-based marketing and conversion optimization.</p>
                            <div class="study-metrics">
                                <div class="metric">
                                    <span class="metric-value">900%</span>
                                    <span class="metric-label">Qualified Leads</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">275%</span>
                                    <span class="metric-label">Trial Conversions</span>
                                </div>
                            </div>
                            <a href="#" class="study-link">View Details</a>
                        </div>
                    </div>

                    <!-- E-commerce Case Study 2 -->
                    <div class="case-study-card" data-category="ecommerce">
                        <div class="study-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/home-decor.jpg" alt="Home Decor Case Study" />
                            <div class="study-overlay">
                                <span class="study-category">E-commerce</span>
                            </div>
                        </div>
                        <div class="study-content">
                            <h3>Home & Garden Co: Seasonal Success Strategy</h3>
                            <p>Maximized seasonal sales through strategic PPC campaigns and inventory-based ad optimization.</p>
                            <div class="study-metrics">
                                <div class="metric">
                                    <span class="metric-value">320%</span>
                                    <span class="metric-label">Seasonal Revenue</span>
                                </div>
                                <div class="metric">
                                    <span class="metric-value">65%</span>
                                    <span class="metric-label">Cost per Sale</span>
                                </div>
                            </div>
                            <a href="#" class="study-link">View Details</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Client Testimonials -->
        <section class="case-study-testimonials">
            <div class="section-content">
                <h2>What Our Clients Say</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"Aimpro Digital completely transformed our online presence. Their strategic approach to SEO and PPC delivered results beyond our expectations."</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/sarah-tech.jpg" alt="Sarah Johnson" />
                            <div class="author-info">
                                <h4>Sarah Johnson</h4>
                                <span>CEO, TechGear UK</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"The team's expertise in healthcare marketing is exceptional. We've seen a 300% increase in new patient bookings since working with them."</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/dr-smith.jpg" alt="Dr. Michael Smith" />
                            <div class="author-info">
                                <h4>Dr. Michael Smith</h4>
                                <span>Practice Owner, Premier Dental</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section id="contact" class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Be Our Next Success Story?</h2>
                    <p>Let's discuss how we can help you achieve similar results for your business.</p>
                    <div class="cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Start Your Project</a>
                        <a href="<?php echo home_url('/about'); ?>" class="btn-outline">Learn About Our Process</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
