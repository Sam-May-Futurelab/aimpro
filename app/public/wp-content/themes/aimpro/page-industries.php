<?php
/**
 * Template Name: Industries Page
 * Description: Main industries hub page
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Industries We Serve</h1>
                <p class="page-subtitle">Specialized digital marketing expertise across diverse sectors</p>
            </div>
        </section>

        <!-- Industries Introduction -->
        <section class="industries-intro">
            <div class="section-content">
                <div class="intro-content">
                    <h2>Industry-Specific Digital Marketing Solutions</h2>
                    <p>Every industry has unique challenges, customer behaviors, and marketing opportunities. Our team brings deep sector expertise and proven strategies tailored to your specific market, ensuring maximum ROI and sustainable growth.</p>
                </div>
                <div class="industry-stats">
                    <div class="stat-item">
                        <div class="stat-number">7+</div>
                        <div class="stat-label">Key Industries</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">Industry Clients</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
            </div>
        </section>        <!-- Industries Grid -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <h2>Our Industry Expertise</h2>
                    <p>Specialized digital marketing solutions tailored to your industry's unique challenges and opportunities.</p>
                </div>
                <div class="services-grid">
                      <!-- Automotive -->
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h3>Automotive</h3>
                        <p>Drive qualified leads to your dealership or automotive service center with targeted digital strategies that reach car buyers at every stage of their journey.</p>
                        <ul class="service-features">
                            <li>Vehicle inventory marketing</li>
                            <li>Service department promotion</li>
                            <li>Local SEO for dealerships</li>
                            <li>Lead generation campaigns</li>
                        </ul>
                        <a href="<?php echo home_url('/automotive'); ?>" class="service-link">Learn More</a>                    </div>

                    <!-- Home & Garden -->
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Home & Garden</h3>
                        <p>Grow your home improvement, landscaping, or garden center business with seasonal campaigns and local marketing strategies that capture homeowner intent.</p>
                        <ul class="service-features">
                            <li>Seasonal campaign optimization</li>
                            <li>Before/after showcase content</li>
                            <li>Local service area targeting</li>
                            <li>Pinterest and visual marketing</li>
                        </ul>
                        <a href="<?php echo home_url('/home-garden'); ?>" class="service-link">Learn More</a>
                    </div>

                    <!-- Finance -->
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Finance</h3>
                        <p>Build trust and generate high-value leads for financial services with compliant, educational content marketing and targeted advertising strategies.</p>
                        <ul class="service-features">
                            <li>Regulatory compliant campaigns</li>
                            <li>Educational content marketing</li>
                            <li>Trust-building strategies</li>
                            <li>High-value lead generation</li>
                        </ul>
                        <a href="<?php echo home_url('/finance'); ?>" class="service-link">Learn More</a>
                    </div><div class="service-item">
                    <div class="service-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Professional Services</h3>
                    <p>Establish thought leadership and attract ideal clients for your law firm, accounting practice, or consulting business with strategic content and SEO.</p>
                    <ul class="service-features">
                        <li>Thought leadership content</li>
                        <li>Professional networking</li>
                        <li>Expertise-based SEO</li>
                        <li>Client testimonial campaigns</li>
                    </ul>
                    <a href="<?php echo home_url('/professional-services'); ?>" class="service-link">Learn More</a>
                </div>                <div class="service-item">
                    <div class="service-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 22V12H15V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Estate Agents</h3>
                    <p>Dominate your local property market with hyper-local SEO, stunning property showcases, and lead generation systems that convert browsers into buyers.</p>
                    <ul class="service-features">
                        <li>Hyper-local SEO optimization</li>
                        <li>Property showcase campaigns</li>
                        <li>Virtual tour integration</li>
                        <li>Buyer/seller lead generation</li>
                    </ul>
                    <a href="<?php echo home_url('/estate-agents'); ?>" class="service-link">Learn More</a>
                </div>                <div class="service-item">
                    <div class="service-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 20H22V18C22 16.3431 20.6569 15 19 15C18.0444 15 17.1931 15.4468 16.6438 16.1429" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9 12C11.2091 12 13 10.2091 13 8C13 5.79086 11.2091 4 9 4C6.79086 4 5 5.79086 5 8C5 10.2091 6.79086 12 9 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 20H14V18C14 16.3431 12.6569 15 11 15H5C3.34315 15 2 16.3431 2 18V20Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Coaches & Consultants</h3>
                    <p>Build your personal brand and attract high-value clients with strategic content marketing, thought leadership, and conversion-optimized funnels.</p>
                    <ul class="service-features">
                        <li>Personal brand development</li>
                        <li>Content marketing funnels</li>
                        <li>Speaking engagement promotion</li>
                        <li>High-ticket service marketing</li>
                    </ul>
                    <a href="<?php echo home_url('/coaches-consultants'); ?>" class="service-link">Learn More</a>
                </div>                <div class="service-item">
                    <div class="service-icon">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.7 15.3C4.3 15.7 4.6 16.4 5.1 16.4H17M17 13V16.4M9 19.5C9.82843 19.5 10.5 20.1716 10.5 21C10.5 21.8284 9.82843 22.5 9 22.5C8.17157 22.5 7.5 21.8284 7.5 21C7.5 20.1716 8.17157 19.5 9 19.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20 19.5C20.8284 19.5 21.5 20.1716 21.5 21C21.5 21.8284 20.8284 22.5 20 22.5C19.1716 22.5 18.5 21.8284 18.5 21C18.5 20.1716 19.1716 19.5 20 19.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>E-commerce</h3>
                    <p>Maximize online sales and customer lifetime value with comprehensive e-commerce marketing including product feed optimization, remarketing, and conversion rate optimization.</p>
                    <ul class="service-features">
                        <li>Shopping campaign optimization</li>
                        <li>Product feed management</li>
                        <li>Cart abandonment recovery</li>
                        <li>Customer retention strategies</li>
                    </ul>
                    <a href="<?php echo home_url('/ecommerce'); ?>" class="service-link">Learn More</a>
                </div>
            </div>
        </div>
    </section>        <!-- Industry Success Stories -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <h2>Cross-Industry Success</h2>
                    <p>Delivering exceptional results across diverse industries and business sectors.</p>
                </div>
                <div class="success-stats">
                    <div class="stat-item">
                        <div class="stat-number">400%</div>
                        <div class="stat-label">Average ROI increase across all industries</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Client retention rate</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">£2.8M+</div>
                        <div class="stat-label">Revenue generated for clients</div>
                    </div>
                </div>
            </div>
        </section>        <!-- Why Industry Expertise Matters -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <h2>Why Industry Expertise Matters</h2>
                    <p>Generic marketing approaches fail because they don't account for industry-specific customer behaviors, seasonal patterns, and regulatory requirements. Our deep industry knowledge enables us to:</p>
                </div>
                <div class="services-grid">
                    <div class="service-item">
                        <div class="service-icon">
                            <span>🎯</span>
                        </div>
                        <h3>Target the Right Audience</h3>
                        <p>We understand your customer's journey, pain points, and decision-making process.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <span>📊</span>
                        </div>
                        <h3>Leverage Industry Data</h3>
                        <p>Access to sector-specific benchmarks, trends, and performance metrics.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <span>⚡</span>
                        </div>
                        <h3>Faster Results</h3>
                        <p>Pre-tested strategies and proven tactics that work in your specific market.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <span>🔒</span>
                        </div>
                        <h3>Ensure Compliance</h3>
                        <p>Navigate industry regulations and advertising guidelines with confidence.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industry Testimonials -->
        <section class="industry-testimonials">
            <div class="section-content">
                <h2>What Our Industry Clients Say</h2>
                <div class="testimonials-grid">
                    
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"Their understanding of the automotive market is exceptional. We've seen a 180% increase in qualified leads since working with Aimpro Digital."</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/automotive-client.jpg" alt="Mark Thompson" />
                            <div class="author-info">
                                <h4>Mark Thompson</h4>
                                <span>General Manager, Premier Motors</span>
                                <div class="industry-tag">Automotive</div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"The seasonal campaigns they created for our garden center generated 220% more revenue during peak season. Outstanding results!"</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/garden-client.jpg" alt="Sarah Mitchell" />
                            <div class="author-info">
                                <h4>Sarah Mitchell</h4>
                                <span>Owner, Blooming Gardens</span>
                                <div class="industry-tag">Home & Garden</div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <p>"Their compliant approach to financial services marketing helped us generate high-quality leads while maintaining regulatory standards."</p>
                        </div>
                        <div class="testimonial-author">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/finance-client.jpg" alt="David Wilson" />
                            <div class="author-info">
                                <h4>David Wilson</h4>
                                <span>Director, WealthWise Financial</span>
                                <div class="industry-tag">Finance</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section id="contact" class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Dominate Your Industry?</h2>
                    <p>Let's discuss how our industry-specific expertise can accelerate your business growth.</p>
                    <div class="cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Industry Analysis</a>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="btn-outline">View Success Stories</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
