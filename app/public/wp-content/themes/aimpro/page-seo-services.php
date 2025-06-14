<?php
/**
 * Template Name: SEO Services Page
 * Description: Comprehensive SEO services overview
 */

get_header(); ?>

<main id="main" class="main-content seo-service-page">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>SEO Services</h1>
                <p class="page-subtitle">Dominate search results and drive organic traffic with our comprehensive SEO strategies</p>
            </div>
        </section>

        <!-- SEO Overview -->
        <section class="seo-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <h2>Expert SEO Services That Drive Results</h2>
                        <p>Our comprehensive SEO services are designed to improve your search engine rankings, increase organic traffic, and drive qualified leads to your business. With over 25 years of combined experience and proven methodologies, we help businesses of all sizes achieve sustainable growth through search engine optimization.</p>
                        
                        <div class="seo-benefits">
                            <h3>What SEO Can Do for Your Business:</h3>
                            <ul>
                                <li>Increase organic search visibility by up to 300%</li>
                                <li>Drive qualified traffic that converts into customers</li>
                                <li>Build long-term, sustainable online presence</li>
                                <li>Improve brand credibility and trust</li>
                                <li>Generate cost-effective leads compared to paid advertising</li>
                                <li>Stay ahead of competitors in search results</li>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/seo-overview.jpg" alt="SEO Services Overview" />
                    </div>
                </div>
            </div>
        </section>

        <!-- SEO Services Grid -->
        <section class="seo-services-grid">
            <div class="section-content">
                <h2>Our Complete SEO Service Portfolio</h2>
                <div class="services-grid">
                    
                    <div class="service-card featured">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2"/>
                                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Local SEO</h3>
                            <p>Dominate local search results and attract customers in your geographic area with our comprehensive local SEO strategies.</p>
                            <ul class="service-features">
                                <li>Google My Business optimization</li>
                                <li>Local citation building</li>
                                <li>Review management and generation</li>
                                <li>Local keyword targeting</li>
                                <li>Geographic content optimization</li>
                            </ul>
                            <div class="service-results">
                                <span>Average: 400% increase in local visibility</span>
                            </div>
                            <a href="<?php echo home_url('/local-seo'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>SEO Audit</h3>
                            <p>Comprehensive analysis of your website's SEO performance with actionable recommendations for improvement.</p>
                            <ul class="service-features">
                                <li>Technical SEO analysis</li>
                                <li>Content gap identification</li>
                                <li>Competitor analysis</li>
                                <li>Keyword opportunity research</li>
                                <li>Detailed action plan</li>
                            </ul>
                            <div class="service-results">
                                <span>Identify 50+ optimization opportunities</span>
                            </div>
                            <a href="<?php echo home_url('/seo-audit'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.7 6.3C15.1 5.9 15.1 5.3 14.7 4.9C14.3 4.5 13.7 4.5 13.3 4.9L12 6.2L10.7 4.9C10.3 4.5 9.7 4.5 9.3 4.9C8.9 5.3 8.9 5.9 9.3 6.3L10.6 7.6L9.3 8.9C8.9 9.3 8.9 9.9 9.3 10.3C9.7 10.7 10.3 10.7 10.7 10.3L12 9L13.3 10.3C13.7 10.7 14.3 10.7 14.7 10.3C15.1 9.9 15.1 9.3 14.7 8.9L13.4 7.6L14.7 6.3Z" stroke="currentColor" stroke-width="2"/>
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Technical SEO</h3>
                            <p>Optimize your website's technical foundation to improve search engine crawling, indexing, and rankings.</p>
                            <ul class="service-features">
                                <li>Site speed optimization</li>
                                <li>Core Web Vitals improvement</li>
                                <li>Schema markup implementation</li>
                                <li>Mobile optimization</li>
                                <li>Crawl error resolution</li>
                            </ul>
                            <div class="service-results">
                                <span>Average: 60% improvement in site speed</span>
                            </div>
                            <a href="<?php echo home_url('/technical-seo'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 2H6A2 2 0 0 0 4 4V20A2 2 0 0 0 6 22H18A2 2 0 0 0 20 20V8L14 2Z" stroke="currentColor" stroke-width="2"/>
                                <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2"/>
                                <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                                <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>On-Page SEO</h3>
                            <p>Optimize individual pages to rank higher and earn more relevant traffic in search engines.</p>
                            <ul class="service-features">
                                <li>Keyword research and optimization</li>
                                <li>Content optimization</li>
                                <li>Meta tag optimization</li>
                                <li>Internal linking strategy</li>
                                <li>Image optimization</li>
                            </ul>
                            <div class="service-results">
                                <span>Average: 250% increase in organic traffic</span>
                            </div>
                            <a href="<?php echo home_url('/on-page-seo'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2"/>
                                <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                <path d="M23 21V19C23 18.1645 22.7045 17.3541 22.1679 16.7116C21.6313 16.0691 20.8902 15.6316 20.07 15.4662" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>White Label SEO</h3>
                            <p>Professional SEO services for agencies and resellers under your brand with full support.</p>
                            <ul class="service-features">
                                <li>Branded SEO reporting</li>
                                <li>Agency dashboard access</li>
                                <li>Scalable SEO solutions</li>
                                <li>Partner support and training</li>
                                <li>Client communication tools</li>
                            </ul>
                            <div class="service-results">
                                <span>Scale your agency with confidence</span>
                            </div>
                            <a href="<?php echo home_url('/white-label-seo'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SEO Success Story -->
        <section class="seo-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <span class="case-study-label">SEO Success Story</span>
                        <h2>TechFlow Solutions: 450% Organic Traffic Increase</h2>
                        <p>TechFlow Solutions, a B2B software company, was struggling with poor search visibility and minimal organic traffic despite having quality products and services.</p>
                        
                        <div class="case-study-challenge">
                            <h3>The Challenge</h3>
                            <ul>
                                <li>Low search engine rankings for target keywords</li>
                                <li>Poor technical SEO foundation</li>
                                <li>Lack of optimized content strategy</li>
                                <li>No local SEO presence</li>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3>Our SEO Strategy</h3>
                            <ul>
                                <li>Comprehensive technical SEO overhaul</li>
                                <li>Strategic keyword research and targeting</li>
                                <li>Content optimization and creation</li>
                                <li>Local SEO implementation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
                        <h3>Results After 8 Months</h3>
                        <div class="results-grid">
                            <div class="result-item">
                                <div class="result-number">450%</div>
                                <div class="result-label">Organic Traffic Increase</div>
                            </div>
                            <div class="result-item">
                                <div class="result-number">320%</div>
                                <div class="result-label">Keyword Rankings Improvement</div>
                            </div>
                            <div class="result-item">
                                <div class="result-number">280%</div>
                                <div class="result-label">Lead Generation Increase</div>
                            </div>
                            <div class="result-item">
                                <div class="result-number">65%</div>
                                <div class="result-label">Conversion Rate Boost</div>
                            </div>
                        </div>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="case-study-link">Read Full Case Study</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEO Process -->
        <section class="seo-process">
            <div class="section-content">
                <h2>Our Proven SEO Process</h2>
                <div class="process-steps">
                    
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>SEO Audit & Analysis</h3>
                            <p>Comprehensive analysis of your current SEO performance, technical issues, and opportunities.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Strategy Development</h3>
                            <p>Create a customized SEO strategy based on your business goals and market research.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Implementation</h3>
                            <p>Execute technical optimizations, content improvements, and link building strategies.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Monitor & Optimize</h3>
                            <p>Continuous monitoring and optimization based on performance data and algorithm updates.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SEO Tools & Technologies -->
        <section class="seo-tools">
            <div class="section-content">
                <h2>Professional SEO Tools & Technologies</h2>
                <div class="tools-grid">
                    
                    <div class="tool-category">
                        <h3>Research & Analysis</h3>
                        <ul class="tool-list">
                            <li>Ahrefs</li>
                            <li>SEMrush</li>
                            <li>Moz Pro</li>
                            <li>Google Search Console</li>
                        </ul>
                    </div>

                    <div class="tool-category">
                        <h3>Technical SEO</h3>
                        <ul class="tool-list">
                            <li>Screaming Frog</li>
                            <li>GTmetrix</li>
                            <li>Google PageSpeed Insights</li>
                            <li>Schema Markup Validator</li>
                        </ul>
                    </div>

                    <div class="tool-category">
                        <h3>Content Optimization</h3>
                        <ul class="tool-list">
                            <li>Surfer SEO</li>
                            <li>Clearscope</li>
                            <li>Yoast SEO</li>
                            <li>Google Analytics 4</li>
                        </ul>
                    </div>

                    <div class="tool-category">
                        <h3>Local SEO</h3>
                        <ul class="tool-list">
                            <li>BrightLocal</li>
                            <li>Google My Business</li>
                            <li>Whitespark</li>
                            <li>ReviewTrackers</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- SEO Industries -->
        <section class="seo-industries">
            <div class="section-content">
                <h2>SEO Expertise Across Industries</h2>
                <div class="industries-grid">
                    
                    <div class="industry-card">
                        <h3>E-commerce</h3>
                        <p>Product page optimization, category structure, and technical SEO for online stores.</p>
                        <ul class="industry-features">
                            <li>Product schema markup</li>
                            <li>Category page optimization</li>
                            <li>E-commerce technical SEO</li>
                        </ul>
                    </div>

                    <div class="industry-card">
                        <h3>Professional Services</h3>
                        <p>Local SEO and authority building for lawyers, accountants, consultants, and other professionals.</p>
                        <ul class="industry-features">
                            <li>Local search optimization</li>
                            <li>Professional authority building</li>
                            <li>Service page optimization</li>
                        </ul>
                    </div>

                    <div class="industry-card">
                        <h3>Healthcare</h3>
                        <p>Medical SEO with compliance focus for hospitals, clinics, and healthcare providers.</p>
                        <ul class="industry-features">
                            <li>Medical content optimization</li>
                            <li>Local medical SEO</li>
                            <li>HIPAA-compliant strategies</li>
                        </ul>
                    </div>

                    <div class="industry-card">
                        <h3>Real Estate</h3>
                        <p>Property listing optimization and local market dominance for real estate professionals.</p>
                        <ul class="industry-features">
                            <li>Property listing optimization</li>
                            <li>Local market SEO</li>
                            <li>Real estate schema markup</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- SEO Testimonial -->
        <section class="seo-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <blockquote>
                        "Aimpro Digital's SEO services have completely transformed our online presence. We went from page 3 to ranking #1 for our most important keywords, and our organic traffic has increased by over 400%. The team's expertise and dedication are unmatched."
                    </blockquote>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/seo-david.jpg" alt="David Mitchell" />
                        <div class="author-info">
                            <h4>David Mitchell</h4>
                            <span>Managing Director, TechFlow Solutions</span>
                            <div class="author-company">B2B Software Company</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Dominate Search Results?</h2>
                    <p>Let's discuss how our SEO services can increase your organic visibility and drive qualified traffic to your business.</p>
                    <div class="cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free SEO Audit</a>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="btn-outline">View SEO Results</a>
                    </div>
                    <div class="cta-features">
                        <span class="feature-check">✓ Comprehensive SEO audit included</span>
                        <span class="feature-check">✓ Custom strategy recommendations</span>
                        <span class="feature-check">✓ No long-term contracts required</span>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
