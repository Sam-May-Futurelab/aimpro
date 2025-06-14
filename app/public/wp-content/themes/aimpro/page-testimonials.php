<?php
/**
 * Template Name: Testimonials Page
 * Description: Client testimonials and success stories
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Client Testimonials</h1>
                <p class="page-subtitle">See what our clients have to say about working with Aimpro Digital</p>
            </div>
        </section>

        <!-- Featured Testimonials -->
        <section class="featured-testimonials">
            <div class="section-content">
                <h2>Success Stories</h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card featured">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" fill="currentColor"/>
                                </svg>
                            </div>
                            <blockquote>
                                "Aimpro Digital transformed our online presence completely. Within 6 months, our website traffic increased by 300% and our lead generation improved by 250%. Their team's expertise in SEO and PPC advertising delivered results beyond our expectations."
                            </blockquote>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/sarah-ceo.jpg" alt="Sarah Williams - CEO" />
                                </div>
                                <div class="author-info">
                                    <h4>Sarah Williams</h4>
                                    <p>CEO, TechStart Solutions</p>
                                    <div class="company-info">
                                        <span>Technology Consulting</span>
                                        <span>50+ Employees</span>
                                    </div>
                                </div>
                            </div>
                            <div class="results-summary">
                                <div class="result-item">
                                    <span class="result-number">300%</span>
                                    <span class="result-label">Traffic Increase</span>
                                </div>
                                <div class="result-item">
                                    <span class="result-number">250%</span>
                                    <span class="result-label">More Leads</span>
                                </div>
                                <div class="result-item">
                                    <span class="result-number">6</span>
                                    <span class="result-label">Months to Results</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card featured">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" fill="currentColor"/>
                                </svg>
                            </div>
                            <blockquote>
                                "Working with Aimpro Digital has been a game-changer for our e-commerce business. Their strategic approach to Google Ads and Facebook advertising helped us achieve a 400% return on ad spend. The team is professional, responsive, and truly understands our industry."
                            </blockquote>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/michael-founder.jpg" alt="Michael Chen - Founder" />
                                </div>
                                <div class="author-info">
                                    <h4>Michael Chen</h4>
                                    <p>Founder, Elite Fitness Gear</p>
                                    <div class="company-info">
                                        <span>E-commerce</span>
                                        <span>$2M+ Annual Revenue</span>
                                    </div>
                                </div>
                            </div>
                            <div class="results-summary">
                                <div class="result-item">
                                    <span class="result-number">400%</span>
                                    <span class="result-label">ROAS</span>
                                </div>
                                <div class="result-item">
                                    <span class="result-number">180%</span>
                                    <span class="result-label">Sales Growth</span>
                                </div>
                                <div class="result-item">
                                    <span class="result-number">90</span>
                                    <span class="result-label">Days to ROI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industry Testimonials -->
        <section class="industry-testimonials">
            <div class="section-content">
                <h2>Testimonials by Industry</h2>
                
                <!-- Technology Sector -->
                <div class="industry-group">
                    <h3>Technology & SaaS</h3>
                    <div class="testimonials-row">
                        <div class="testimonial-card">
                            <blockquote>
                                "Aimpro Digital's content marketing strategy helped us establish thought leadership in our space. Our blog traffic increased by 500% and we're now recognized as industry experts."
                            </blockquote>
                            <div class="testimonial-author">
                                <h4>Jennifer Martinez</h4>
                                <p>CMO, CloudSync Pro</p>
                            </div>
                        </div>
                        
                        <div class="testimonial-card">
                            <blockquote>
                                "Their technical SEO expertise was exactly what we needed. Our SaaS platform now ranks #1 for our primary keywords, resulting in 40% of our new customers coming from organic search."
                            </blockquote>
                            <div class="testimonial-author">
                                <h4>David Kim</h4>
                                <p>CEO, DataFlow Analytics</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Healthcare Sector -->
                <div class="industry-group">
                    <h3>Healthcare & Medical</h3>
                    <div class="testimonials-row">
                        <div class="testimonial-card">
                            <blockquote>
                                "Our medical practice saw a 200% increase in new patient appointments after implementing Aimpro Digital's local SEO strategy. Their understanding of healthcare marketing compliance is exceptional."
                            </blockquote>
                            <div class="testimonial-author">
                                <h4>Dr. Amanda Foster</h4>
                                <p>Medical Director, Foster Family Medicine</p>
                            </div>
                        </div>
                        
                        <div class="testimonial-card">
                            <blockquote>
                                "The team helped us navigate complex healthcare advertising regulations while still achieving outstanding results. Our patient acquisition cost decreased by 60%."
                            </blockquote>
                            <div class="testimonial-author">
                                <h4>Robert Taylor</h4>
                                <p>Administrator, Wellness Center Group</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Retail & E-commerce -->
                <div class="industry-group">
                    <h3>Retail & E-commerce</h3>
                    <div class="testimonials-row">
                        <div class="testimonial-card">
                            <blockquote>
                                "Our online sales tripled within the first year of working with Aimpro Digital. Their e-commerce expertise and data-driven approach made all the difference."
                            </blockquote>
                            <div class="testimonial-author">
                                <h4>Lisa Thompson</h4>
                                <p>Owner, Artisan Home Decor</p>
                            </div>
                        </div>
                        
                        <div class="testimonial-card">
                            <blockquote>
                                "The shopping campaign optimization they implemented for our Google Ads resulted in a 250% increase in qualified traffic and 180% boost in conversions."
                            </blockquote>
                            <div class="testimonial-author">
                                <h4>James Wilson</h4>
                                <p>Marketing Director, Sports Equipment Plus</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Professional Services -->
                <div class="industry-group">
                    <h3>Professional Services</h3>
                    <div class="testimonials-row">
                        <div class="testimonial-card">
                            <blockquote>
                                "As a law firm, we needed a marketing partner who understood our industry's unique challenges. Aimpro Digital delivered targeted strategies that increased our qualified leads by 300%."
                            </blockquote>
                            <div class="testimonial-author">
                                <h4>Patricia Rodriguez</h4>
                                <p>Managing Partner, Rodriguez & Associates</p>
                            </div>
                        </div>
                        
                        <div class="testimonial-card">
                            <blockquote>
                                "Their LinkedIn advertising strategy for our B2B consulting firm generated high-quality leads that converted at 3x our previous rate. Exceptional work and great communication."
                            </blockquote>
                            <div class="testimonial-author">
                                <h4>Mark Anderson</h4>
                                <p>Principal, Strategic Business Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Metrics & Results -->
        <section class="testimonial-metrics">
            <div class="section-content">
                <h2>Client Results by the Numbers</h2>
                <div class="metrics-grid">
                    <div class="metric-card">
                        <span class="metric-number">500+</span>
                        <span class="metric-label">Happy Clients</span>
                        <p>Businesses we've helped grow</p>
                    </div>
                    <div class="metric-card">
                        <span class="metric-number">99%</span>
                        <span class="metric-label">Client Retention</span>
                        <p>Long-term partnerships</p>
                    </div>
                    <div class="metric-card">
                        <span class="metric-number">250%</span>
                        <span class="metric-label">Average ROI</span>
                        <p>Return on marketing investment</p>
                    </div>
                    <div class="metric-card">
                        <span class="metric-number">$50M+</span>
                        <span class="metric-label">Revenue Generated</span>
                        <p>For our clients collectively</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Testimonials -->
        <section class="video-testimonials">
            <div class="section-content">
                <h2>Video Testimonials</h2>
                <div class="video-grid">
                    <div class="video-testimonial">
                        <div class="video-placeholder">
                            <div class="play-button">
                                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 5v14l11-7z" fill="currentColor"/>
                                </svg>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-thumbnails/testimonial-1.jpg" alt="Video Testimonial - TechStart Solutions" />
                        </div>
                        <div class="video-info">
                            <h4>TechStart Solutions Success Story</h4>
                            <p>How we helped a tech startup scale from 0 to $1M in revenue</p>
                        </div>
                    </div>
                    
                    <div class="video-testimonial">
                        <div class="video-placeholder">
                            <div class="play-button">
                                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 5v14l11-7z" fill="currentColor"/>
                                </svg>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-thumbnails/testimonial-2.jpg" alt="Video Testimonial - Elite Fitness Gear" />
                        </div>
                        <div class="video-info">
                            <h4>Elite Fitness Gear Transformation</h4>
                            <p>E-commerce success through strategic PPC campaigns</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Client Logos -->
        <section class="client-logos">
            <div class="section-content">
                <h2>Trusted by Leading Brands</h2>
                <div class="logos-grid">
                    <div class="logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logos/techstart.svg" alt="TechStart Solutions" />
                    </div>
                    <div class="logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logos/elite-fitness.svg" alt="Elite Fitness Gear" />
                    </div>
                    <div class="logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logos/cloudsync.svg" alt="CloudSync Pro" />
                    </div>
                    <div class="logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logos/foster-medical.svg" alt="Foster Family Medicine" />
                    </div>
                    <div class="logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logos/artisan-home.svg" alt="Artisan Home Decor" />
                    </div>
                    <div class="logo-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/client-logos/dataflow.svg" alt="DataFlow Analytics" />
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="testimonials-cta">
            <div class="section-content">
                <h2>Ready to Join Our Success Stories?</h2>
                <p>Let's discuss how we can help your business achieve similar results</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Start Your Success Story</a>
                    <a href="<?php echo home_url('/case-studies'); ?>" class="btn btn-secondary">View Case Studies</a>
                </div>
            </div>
        </section>    </div>
</main>

<?php get_footer(); ?>
