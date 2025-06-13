<?php
/**
 * Template Name: Solutions Page
 * Description: Main solutions hub page
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Solutions</h1>
                <p class="page-subtitle">Proven digital marketing solutions that drive real business results</p>
            </div>
        </section>

        <!-- Solutions Introduction -->
        <section class="solutions-intro">
            <div class="section-content">
                <div class="intro-content">
                    <h2>Transform Your Business with Strategic Digital Solutions</h2>
                    <p>Every business faces unique challenges in today's digital landscape. Our comprehensive solutions are designed to address your most pressing needs, from generating quality leads to maximizing ROI from your marketing investments. Discover how our proven methodologies can accelerate your growth.</p>
                </div>
                <div class="solution-stats">
                    <div class="stat-item">
                        <div class="stat-number">6</div>
                        <div class="stat-label">Core Solutions</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">300%</div>
                        <div class="stat-label">Average ROI Increase</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Successful Projects</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Solutions Grid -->
        <section class="solutions-grid">
            <div class="section-content">
                <h2>Our Digital Marketing Solutions</h2>
                <div class="solution-categories">
                    
                    <!-- Lead Generation -->
                    <div class="solution-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23 21V19C23 18.1645 22.7045 17.3541 22.1679 16.7116C21.6313 16.0691 20.8902 15.6316 20.07 15.4662" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 3.13281C16.8902 3.29814 17.6313 3.73574 18.1679 4.37823C18.7045 5.02072 19 5.83115 19 6.66656C19 7.50197 18.7045 8.3124 18.1679 8.95489C17.6313 9.59738 16.8902 10.035 16 10.2003" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Lead Generation (B2B/B2C)</h3>
                            <p>Generate high-quality leads that convert into customers through targeted campaigns and proven funnels.</p>
                            <ul class="category-highlights">
                                <li>Targeted PPC campaigns</li>
                                <li>Lead magnet creation</li>
                                <li>Landing page optimization</li>
                                <li>CRM integration & nurturing</li>
                            </ul>
                            <div class="category-results">
                                <span class="result-metric">Average: 250% lead increase</span>
                            </div>
                            <a href="<?php echo home_url('/lead-generation'); ?>" class="solution-cta">Explore Lead Generation</a>
                        </div>
                    </div>

                    <!-- Marketing Automation -->
                    <div class="solution-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Automate Marketing</h3>
                            <p>Streamline your marketing processes with intelligent automation that nurtures leads and drives conversions 24/7.</p>
                            <ul class="category-highlights">
                                <li>Email marketing automation</li>
                                <li>Lead scoring & segmentation</li>
                                <li>Behavioral trigger campaigns</li>
                                <li>Multi-channel workflows</li>
                            </ul>
                            <div class="category-results">
                                <span class="result-metric">Average: 40% time savings</span>
                            </div>
                            <a href="<?php echo home_url('/automate-marketing'); ?>" class="solution-cta">Discover Automation</a>
                        </div>
                    </div>

                    <!-- ROI from Ads -->
                    <div class="solution-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 20V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 20V4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 20V14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Improve ROI from Ads</h3>
                            <p>Maximize your advertising spend with data-driven optimization strategies that deliver measurable results.</p>
                            <ul class="category-highlights">
                                <li>PPC campaign optimization</li>
                                <li>Conversion tracking setup</li>
                                <li>Audience refinement</li>
                                <li>Bid strategy optimization</li>
                            </ul>
                            <div class="category-results">
                                <span class="result-metric">Average: 180% ROI improvement</span>
                            </div>
                            <a href="<?php echo home_url('/improve-roi-ads'); ?>" class="solution-cta">Boost Ad Performance</a>
                        </div>
                    </div>

                    <!-- Local SEO -->
                    <div class="solution-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Rank Higher Locally</h3>
                            <p>Dominate local search results and attract customers in your area with comprehensive local SEO strategies.</p>
                            <ul class="category-highlights">
                                <li>Google My Business optimization</li>
                                <li>Local citation building</li>
                                <li>Review management</li>
                                <li>Local keyword targeting</li>
                            </ul>
                            <div class="category-results">
                                <span class="result-metric">Average: 300% local visibility boost</span>
                            </div>
                            <a href="<?php echo home_url('/rank-higher-locally'); ?>" class="solution-cta">Dominate Local Search</a>
                        </div>
                    </div>

                    <!-- High-Converting Website -->
                    <div class="solution-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/>
                                <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Build a High-Converting Website</h3>
                            <p>Create a website that turns visitors into customers with conversion-focused design and optimization.</p>
                            <ul class="category-highlights">
                                <li>Conversion rate optimization</li>
                                <li>User experience design</li>
                                <li>A/B testing implementation</li>
                                <li>Mobile optimization</li>
                            </ul>
                            <div class="category-results">
                                <span class="result-metric">Average: 150% conversion increase</span>
                            </div>
                            <a href="<?php echo home_url('/high-converting-website'); ?>" class="solution-cta">Build Better Websites</a>
                        </div>
                    </div>

                    <!-- Sales Funnel -->
                    <div class="solution-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Streamline Your Sales Funnel</h3>
                            <p>Optimize every stage of your customer journey to reduce friction and increase conversion rates.</p>
                            <ul class="category-highlights">
                                <li>Funnel analysis & optimization</li>
                                <li>Customer journey mapping</li>
                                <li>Conversion bottleneck removal</li>
                                <li>Multi-step campaign design</li>
                            </ul>
                            <div class="category-results">
                                <span class="result-metric">Average: 200% funnel efficiency gain</span>
                            </div>
                            <a href="<?php echo home_url('/streamline-sales-funnel'); ?>" class="solution-cta">Optimize Your Funnel</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Solution Process -->
        <section class="solution-process">
            <div class="section-content">
                <h2>Our Solution Implementation Process</h2>
                <div class="process-steps">
                    
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Discovery & Analysis</h3>
                            <p>We analyze your current situation, challenges, and goals to identify the most impactful solutions.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Custom Strategy Development</h3>
                            <p>Create a tailored strategy that combines the right solutions for your specific business needs.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Implementation & Integration</h3>
                            <p>Deploy solutions with seamless integration into your existing systems and workflows.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Optimization & Scaling</h3>
                            <p>Continuously monitor, optimize, and scale solutions based on performance data and results.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Success Stories -->
        <section class="solution-success">
            <div class="section-content">
                <h2>Solution Success Stories</h2>
                <div class="success-grid">
                    
                    <div class="success-story">
                        <div class="story-metric">
                            <span class="metric-number">450%</span>
                            <span class="metric-label">Lead Increase</span>
                        </div>
                        <div class="story-content">
                            <h3>Manufacturing Company</h3>
                            <p>"Our lead generation solution transformed their B2B marketing, generating 450% more qualified leads within 6 months."</p>
                            <span class="story-solution">Lead Generation + Marketing Automation</span>
                        </div>
                    </div>

                    <div class="success-story">
                        <div class="story-metric">
                            <span class="metric-number">320%</span>
                            <span class="metric-label">ROI Improvement</span>
                        </div>
                        <div class="story-content">
                            <h3>E-commerce Retailer</h3>
                            <p>"Ad optimization and funnel streamlining resulted in 320% ROI improvement and 40% lower customer acquisition costs."</p>
                            <span class="story-solution">ROI Optimization + Sales Funnel</span>
                        </div>
                    </div>

                    <div class="success-story">
                        <div class="story-metric">
                            <span class="metric-number">500%</span>
                            <span class="metric-label">Local Visibility</span>
                        </div>
                        <div class="story-content">
                            <h3>Professional Services</h3>
                            <p>"Local SEO implementation increased their Google My Business visibility by 500% and doubled client inquiries."</p>
                            <span class="story-solution">Local SEO + Website Optimization</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Solution CTA -->
        <section class="solution-cta-section">
            <div class="section-content">
                <div class="cta-content">
                    <h2>Ready to Transform Your Business?</h2>
                    <p>Let's identify the perfect solution combination for your unique challenges and growth goals.</p>
                    <div class="cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Free Strategy Session</a>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="btn btn-secondary">View All Success Stories</a>
                    </div>
                    <div class="cta-benefits">
                        <span class="benefit">✓ Custom solution roadmap</span>
                        <span class="benefit">✓ ROI projections included</span>
                        <span class="benefit">✓ No obligation consultation</span>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
