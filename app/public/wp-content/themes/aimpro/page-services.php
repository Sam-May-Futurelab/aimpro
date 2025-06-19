<?php
/**
 * Template Name: Services Page
 * Description: Main services hub page
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1>Services</h1>
                <p class="page-subtitle">Comprehensive digital marketing services that drive measurable results</p>
            </div>
        </section>

        <!-- Services Introduction -->
        <section class="services-intro">
            <div class="section-content">
                <div class="intro-content animate-on-scroll animate-slide-left">
                    <h2>Award-Winning Digital Marketing Services</h2>
                    <p>From SEO and PPC to website development and marketing automation, our comprehensive suite of services is designed to accelerate your business growth. Each service is delivered by certified experts using proven methodologies and cutting-edge technology.</p>
                </div>                <div class="services-stats animate-on-scroll animate-slide-right">
                    <div class="stat-item">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Service Categories</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Successful Projects</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </section>        <!-- Service Links Grid -->
        <section class="service-links-grid">
            <div class="section-content">
                <div class="service-links-heading animate-on-scroll animate-fade-up">
                    <h2>Our Services</h2>
                    <p>Explore our comprehensive range of services designed to elevate your digital presence</p>
                </div>
                
                <!-- Quick Service Navigation Grid -->
                <div class="services-grid">
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-search" aria-hidden="true"></i>
                        </div>
                        <h3>SEO Services</h3>
                        <p>Improve search rankings and organic traffic</p>
                        <a href="<?php echo home_url('/seo-services'); ?>" class="service-link">Learn More</a>
                    </div>                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-bullhorn" aria-hidden="true"></i>
                        </div>
                        <h3>PPC Advertising</h3>
                        <p>Maximize ROI with targeted advertising</p>
                        <a href="<?php echo home_url('/advertising-ppc'); ?>" class="service-link">Learn More</a>
                    </div>
                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush" aria-hidden="true"></i>
                        </div>
                        <h3>Website Design</h3>
                        <p>Beautiful, conversion-focused websites</p>
                        <a href="<?php echo home_url('/website-design'); ?>" class="service-link">Learn More</a>
                    </div>
                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-cogs" aria-hidden="true"></i>
                        </div>
                        <h3>Marketing Automation</h3>
                        <p>Streamline and scale your marketing</p>
                        <a href="<?php echo home_url('/automate-marketing'); ?>" class="service-link">Learn More</a>
                    </div>
                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-chart-line" aria-hidden="true"></i>
                        </div>
                        <h3>Lead Generation</h3>
                        <p>Convert visitors into qualified leads</p>
                        <a href="<?php echo home_url('/lead-generation'); ?>" class="service-link">Learn More</a>
                    </div>
                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-funnel-dollar" aria-hidden="true"></i>
                        </div>
                        <h3>Sales Funnels</h3>
                        <p>optimise your conversion process</p>
                        <a href="<?php echo home_url('/streamline-sales-funnel'); ?>" class="service-link">Learn More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Categories -->
        <section class="services-categories">
            <div class="section-content">
                  <!-- SEO Services -->
                <div class="service-category-section">
                    <div class="category-header animate-on-scroll animate-fade-up">
                        <div class="category-icon">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="8" stroke="currentcolour" stroke-width="2"/>
                                <path d="M21 21L16.65 16.65" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-info">
                            <h2>SEO Services</h2>
                            <p>Dominate search results and drive organic traffic with our comprehensive SEO strategies</p>
                            <a href="<?php echo home_url('/seo-services'); ?>" class="category-main-link">Explore SEO Services</a>
                        </div>
                    </div>
                    
                    <div class="service-subcategories">
                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>Local SEO</h3>
                            <p>Dominate local search results and attract customers in your area.</p>
                            <ul class="service-features">
                                <li>Google My Business optimisation</li>
                                <li>Local citation building</li>
                                <li>Review management</li>
                                <li>Local keyword targeting</li>
                            </ul>
                            <a href="<?php echo home_url('/local-seo'); ?>" class="service-link">Learn More</a>
                        </div>                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>SEO Audit</h3>
                            <p>Comprehensive analysis of your website's SEO performance and opportunities.</p>
                            <ul class="service-features">
                                <li>Technical SEO analysis</li>
                                <li>Content gap identification</li>
                                <li>Competitor analysis</li>
                                <li>Action plan creation</li>
                            </ul>
                            <a href="<?php echo home_url('/seo-audit'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>Technical SEO</h3>
                            <p>optimise your website's technical foundation for better search performance.</p>
                            <ul class="service-features">
                                <li>Site speed optimisation</li>
                                <li>Core Web Vitals improvement</li>
                                <li>Schema markup implementation</li>
                                <li>Mobile optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/technical-seo'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>On-Page SEO</h3>
                            <p>optimise individual pages to rank higher and earn more relevant traffic.</p>
                            <ul class="service-features">
                                <li>Keyword optimisation</li>
                                <li>Content optimisation</li>
                                <li>Meta tag optimisation</li>
                                <li>Internal linking strategy</li>
                            </ul>
                            <a href="<?php echo home_url('/on-page-seo'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>White Label SEO</h3>
                            <p>Professional SEO services for agencies and resellers under your brand.</p>
                            <ul class="service-features">
                                <li>Branded reporting</li>
                                <li>Agency dashboard access</li>
                                <li>Scalable solutions</li>
                                <li>Partner support</li>
                            </ul>
                            <a href="<?php echo home_url('/white-label-seo'); ?>" class="service-link">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Advertising & PPC -->
                <div class="service-category-section">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 20V10" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 20V4" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 20V14" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-info">
                            <h2>Advertising & PPC</h2>
                            <p>Maximize your advertising ROI with expertly managed pay-per-click campaigns</p>
                            <a href="<?php echo home_url('/advertising-ppc'); ?>" class="category-main-link">Explore PPC Services</a>
                        </div>
                    </div>
                    
                    <div class="service-subcategories">
                        <div class="subcategory-card">
                            <h3>Google Ads</h3>
                            <p>Drive qualified traffic and conversions with expertly managed Google Ads campaigns.</p>
                            <ul class="service-features">
                                <li>Search campaign management</li>
                                <li>Shopping ads optimisation</li>
                                <li>Display advertising</li>
                                <li>YouTube advertising</li>
                            </ul>
                            <a href="<?php echo home_url('/google-ads'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Meta Ads (FB/Instagram)</h3>
                            <p>Reach your audience on Facebook and Instagram with targeted social media advertising.</p>
                            <ul class="service-features">
                                <li>Facebook advertising</li>
                                <li>Instagram advertising</li>
                                <li>Audience targeting</li>
                                <li>Creative optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/meta-ads'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Microsoft/Bing Ads</h3>
                            <p>Capture additional market share with Microsoft Advertising campaigns.</p>
                            <ul class="service-features">
                                <li>Bing search advertising</li>
                                <li>LinkedIn audience network</li>
                                <li>Microsoft audience targeting</li>
                                <li>Cross-platform optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/microsoft-ads'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Retargeting & Display</h3>
                            <p>Re-engage visitors and build brand awareness with strategic display advertising.</p>
                            <ul class="service-features">
                                <li>Retargeting campaigns</li>
                                <li>Display network advertising</li>
                                <li>Dynamic remarketing</li>
                                <li>Cross-device tracking</li>
                            </ul>
                            <a href="<?php echo home_url('/retargeting-display'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>PPC Audit</h3>
                            <p>Comprehensive analysis of your existing PPC campaigns for optimisation opportunities.</p>
                            <ul class="service-features">
                                <li>Account structure review</li>
                                <li>Keyword analysis</li>
                                <li>Ad copy optimisation</li>
                                <li>Performance recommendations</li>
                            </ul>
                            <a href="<?php echo home_url('/ppc-audit'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>White Label PPC</h3>
                            <p>Professional PPC management services for agencies under your brand.</p>
                            <ul class="service-features">
                                <li>Branded reporting</li>
                                <li>Agency dashboard</li>
                                <li>Scalable management</li>
                                <li>Partner training</li>
                            </ul>
                            <a href="<?php echo home_url('/white-label-ppc'); ?>" class="service-link">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Marketing Automation -->
                <div class="service-category-section">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-info">
                            <h2>Marketing Automation</h2>
                            <p>Streamline your marketing processes with intelligent automation and AI-powered tools</p>
                            <a href="<?php echo home_url('/marketing-automation'); ?>" class="category-main-link">Explore Automation</a>
                        </div>
                    </div>
                    
                    <div class="service-subcategories">
                        <div class="subcategory-card">
                            <h3>AI CRM Setup</h3>
                            <p>Implement and optimise AI-powered CRM systems for better customer management.</p>
                            <ul class="service-features">
                                <li>CRM implementation</li>
                                <li>AI workflow automation</li>
                                <li>Lead scoring setup</li>
                                <li>Integration management</li>
                            </ul>
                            <a href="<?php echo home_url('/ai-crm-setup'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Email & SMS Flows</h3>
                            <p>Create automated email and SMS sequences that nurture leads and drive conversions.</p>
                            <ul class="service-features">
                                <li>Email automation</li>
                                <li>SMS marketing flows</li>
                                <li>behavioural triggers</li>
                                <li>Segmentation strategy</li>
                            </ul>
                            <a href="<?php echo home_url('/email-sms-flows'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Email Campaigns</h3>
                            <p>Design and execute high-converting email marketing campaigns.</p>
                            <ul class="service-features">
                                <li>Campaign design</li>
                                <li>List management</li>
                                <li>A/B testing</li>
                                <li>Performance optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/email-campaigns'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Funnel Automation</h3>
                            <p>Automate your sales funnels to convert more leads into customers.</p>
                            <ul class="service-features">
                                <li>Funnel design</li>
                                <li>Automation setup</li>
                                <li>Lead qualification</li>
                                <li>Conversion optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/funnel-automation'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Chatbots</h3>
                            <p>Implement intelligent chatbots to engage visitors and qualify leads 24/7.</p>
                            <ul class="service-features">
                                <li>Chatbot development</li>
                                <li>AI conversation flows</li>
                                <li>Lead qualification</li>
                                <li>Integration setup</li>
                            </ul>
                            <a href="<?php echo home_url('/chatbots'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>AI Tools</h3>
                            <p>Leverage cutting-edge AI tools to enhance your marketing effectiveness.</p>
                            <ul class="service-features">
                                <li>AI tool implementation</li>
                                <li>Process automation</li>
                                <li>Performance analytics</li>
                                <li>Custom AI solutions</li>
                            </ul>
                            <a href="<?php echo home_url('/ai-tools'); ?>" class="service-link">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Website Development -->
                <div class="service-category-section">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentcolour" stroke-width="2"/>
                                <line x1="8" y1="21" x2="16" y2="21" stroke="currentcolour" stroke-width="2"/>
                                <line x1="12" y1="17" x2="12" y2="21" stroke="currentcolour" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="category-info">
                            <h2>Website Development</h2>
                            <p>Create high-converting websites that engage visitors and drive business growth</p>
                            <a href="<?php echo home_url('/website-development'); ?>" class="category-main-link">Explore Web Services</a>
                        </div>
                    </div>
                    
                    <div class="service-subcategories">
                        <div class="subcategory-card">
                            <h3>Website Design</h3>
                            <p>Custom website design that reflects your brand and converts visitors into customers.</p>
                            <ul class="service-features">
                                <li>Custom design</li>
                                <li>Mobile-first approach</li>
                                <li>User experience optimisation</li>
                                <li>Brand integration</li>
                            </ul>
                            <a href="<?php echo home_url('/website-design'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Landing Pages</h3>
                            <p>High-converting landing pages designed to maximise campaign performance.</p>
                            <ul class="service-features">
                                <li>Conversion-focused design</li>
                                <li>A/B testing setup</li>
                                <li>Campaign integration</li>
                                <li>Performance tracking</li>
                            </ul>
                            <a href="<?php echo home_url('/landing-pages'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Funnel Builds</h3>
                            <p>Complete sales funnel development from lead capture to conversion.</p>
                            <ul class="service-features">
                                <li>Multi-step funnels</li>
                                <li>Conversion optimisation</li>
                                <li>Payment integration</li>
                                <li>Analytics setup</li>
                            </ul>
                            <a href="<?php echo home_url('/funnel-builds'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>UX/UI optimisation</h3>
                            <p>Improve user experience and interface design for better conversions.</p>
                            <ul class="service-features">
                                <li>User experience audit</li>
                                <li>Interface optimisation</li>
                                <li>Usability testing</li>
                                <li>Conversion improvements</li>
                            </ul>
                            <a href="<?php echo home_url('/ux-ui-optimisation'); ?>" class="service-link">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>        </section>

        <!-- Why Choose Our Services -->
        <section class="services-benefits services-why-choose">
            <div class="section-content">
                <h2>Why Choose Aimpro Digital Services?</h2>
                <div class="benefits-grid benefits-grid-4">
                    
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentcolour" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Certified Experts</h3>
                        <p>Our team holds certifications from Google, Meta, Microsoft, and other leading platforms.</p>
                    </div>

                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 20V10" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 20V4" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 20V14" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Data-Driven Results</h3>
                        <p>Every strategy is backed by data analysis and proven methodologies for measurable results.</p>
                    </div>

                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Integrated Approach</h3>
                        <p>All our services work together seamlessly to create a comprehensive marketing ecosystem.</p>
                    </div>

                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 12H18L15 21L9 3L6 12H2" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Transparent Reporting</h3>
                        <p>Regular, detailed reports keep you informed about performance and ROI at every step.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Service Process -->
        <section class="services-process">
            <div class="section-content">
                <h2>Our Service Delivery Process</h2>
                <div class="process-steps">
                    
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Discovery & Analysis</h3>
                            <p>We start by understanding your business, goals, and current situation through comprehensive analysis.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Strategy Development</h3>
                            <p>Create a customised strategy tailored to your specific needs and market opportunities.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Implementation</h3>
                            <p>Execute the strategy with precision, using best practices and proven methodologies.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Monitor & optimise</h3>
                            <p>Continuously track performance and make data-driven optimisations for maximum results.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="services-cta">
            <div class="section-content">
                <h2>Ready to Transform Your Digital Presence?</h2>
                <p>Let's discuss which services will have the biggest impact on your business growth.</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Free Consultation</a>
                    <a href="<?php echo home_url('/case-studies'); ?>" class="btn btn-secondary">View Our Results</a>
                </div>                <div class="cta-benefits">
                    <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Free strategy session</span>
                    <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> No obligation consultation</span>
                    <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Custom recommendations</span>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
