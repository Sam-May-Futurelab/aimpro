<?php
/**
 * Template Name: Technical SEO Page
 * Description: Technical SEO services for website optimization
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Technical SEO Services</h1>
                <p class="page-subtitle">Optimize your website's technical foundation for better search engine performance</p>
            </div>
        </section>

        <!-- Technical SEO Overview -->
        <section class="technical-seo-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <h2>Build a Solid Technical Foundation for SEO Success</h2>
                        <p>Technical SEO is the backbone of search engine optimization. Our technical SEO services ensure your website is properly crawled, indexed, and understood by search engines. We fix critical technical issues that prevent your site from ranking and implement optimizations that give you a competitive edge.</p>
                        
                        <div class="technical-benefits">
                            <h3>Technical SEO Impact:</h3>
                            <ul>
                                <li>Improve site speed by up to 70%</li>
                                <li>Enhance crawlability and indexation</li>
                                <li>Boost Core Web Vitals scores</li>
                                <li>Improve mobile user experience</li>
                                <li>Increase search engine trust and authority</li>
                                <li>Reduce bounce rates and improve engagement</li>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/technical-seo-overview.jpg" alt="Technical SEO Services" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Technical SEO Services -->
        <section class="technical-seo-services">
            <div class="section-content">
                <h2>Complete Technical SEO Services</h2>
                <div class="services-grid">
                    
                    <div class="service-card featured">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 1V3M12 21V23M4.22 4.22L5.64 5.64M18.36 18.36L19.78 19.78M1 12H3M21 12H23M4.22 19.78L5.64 18.36M18.36 5.64L19.78 4.22" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Site Speed Optimization</h3>
                            <p>Improve your website's loading speed for better user experience and search rankings.</p>
                            <ul class="service-features">
                                <li>Page speed analysis and optimization</li>
                                <li>Image compression and optimization</li>
                                <li>Code minification and compression</li>
                                <li>CDN implementation</li>
                                <li>Caching optimization</li>
                                <li>Server response optimization</li>
                            </ul>
                            <div class="service-results">
                                <span>Average: 60% speed improvement</span>
                            </div>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/>
                                <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Core Web Vitals Optimization</h3>
                            <p>Optimize your website for Google's Core Web Vitals ranking factors.</p>
                            <ul class="service-features">
                                <li>Largest Contentful Paint (LCP) optimization</li>
                                <li>First Input Delay (FID) improvement</li>
                                <li>Cumulative Layout Shift (CLS) reduction</li>
                                <li>First Contentful Paint (FCP) optimization</li>
                                <li>Time to Interactive (TTI) improvement</li>
                                <li>Performance monitoring setup</li>
                            </ul>
                            <div class="service-results">
                                <span>Achieve "Good" Core Web Vitals scores</span>
                            </div>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 2V5M16 2V5M3.5 9.09H20.5M3 5.5H21A1.5 1.5 0 0 1 22.5 7V20A1.5 1.5 0 0 1 21 21.5H3A1.5 1.5 0 0 1 1.5 20V7A1.5 1.5 0 0 1 3 5.5Z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Crawlability & Indexability</h3>
                            <p>Ensure search engines can properly crawl and index your website content.</p>
                            <ul class="service-features">
                                <li>Robots.txt optimization</li>
                                <li>XML sitemap creation and optimization</li>
                                <li>Internal linking structure</li>
                                <li>Crawl error identification and fixing</li>
                                <li>URL structure optimization</li>
                                <li>Redirect chain resolution</li>
                            </ul>
                            <div class="service-results">
                                <span>100% crawlable and indexable pages</span>
                            </div>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Schema Markup Implementation</h3>
                            <p>Implement structured data to help search engines understand your content.</p>
                            <ul class="service-features">
                                <li>Business schema markup</li>
                                <li>Product and service schema</li>
                                <li>Review and rating schema</li>
                                <li>FAQ and How-to schema</li>
                                <li>Event and organization schema</li>
                                <li>Rich snippet optimization</li>
                            </ul>
                            <div class="service-results">
                                <span>Enhanced SERP appearance</span>
                            </div>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="4" width="20" height="16" rx="2" stroke="currentColor" stroke-width="2"/>
                                <path d="M10 9L8 12L10 15M14 9L16 12L14 15" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Mobile Optimization</h3>
                            <p>Ensure your website provides an excellent mobile user experience.</p>
                            <ul class="service-features">
                                <li>Mobile-friendly design implementation</li>
                                <li>Responsive layout optimization</li>
                                <li>Mobile page speed optimization</li>
                                <li>Touch element optimization</li>
                                <li>Mobile usability improvements</li>
                                <li>AMP implementation (if needed)</li>
                            </ul>
                            <div class="service-results">
                                <span>Pass Google Mobile-Friendly test</span>
                            </div>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>HTTPS & Security</h3>
                            <p>Implement security measures that protect users and improve search rankings.</p>
                            <ul class="service-features">
                                <li>SSL certificate installation</li>
                                <li>HTTPS implementation</li>
                                <li>Security header optimization</li>
                                <li>Mixed content resolution</li>
                                <li>Security vulnerability assessment</li>
                                <li>HSTS implementation</li>
                            </ul>
                            <div class="service-results">
                                <span>Secure, trusted website</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Technical SEO Success Story -->
        <section class="technical-seo-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <span class="case-study-label">Technical SEO Success Story</span>
                        <h2>E-commerce Store: 70% Speed Improvement & 250% Traffic Growth</h2>
                        <p>A large e-commerce store was experiencing poor search rankings despite having great products and content. Technical issues were severely impacting their search performance and user experience.</p>
                        
                        <div class="case-study-challenge">
                            <h3>Technical Issues Identified</h3>
                            <ul>
                                <li>Page load time of 8.5 seconds</li>
                                <li>Poor Core Web Vitals scores</li>
                                <li>Mobile usability issues</li>
                                <li>Crawl errors preventing indexation</li>
                                <li>Missing schema markup</li>
                                <li>Duplicate content issues</li>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3>Technical SEO Solutions</h3>
                            <ul>
                                <li>Comprehensive site speed optimization</li>
                                <li>Core Web Vitals improvements</li>
                                <li>Mobile optimization implementation</li>
                                <li>Crawl error resolution</li>
                                <li>Schema markup implementation</li>
                                <li>Technical content optimization</li>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
                        <h3>Results After 4 Months</h3>
                        <div class="results-grid">
                            <div class="result-item">
                                <div class="result-number">70%</div>
                                <div class="result-label">Page Speed Improvement</div>
                            </div>
                            <div class="result-item">
                                <div class="result-number">250%</div>
                                <div class="result-label">Organic Traffic Increase</div>
                            </div>
                            <div class="result-item">
                                <div class="result-number">85%</div>
                                <div class="result-label">Mobile Usability Score</div>
                            </div>
                            <div class="result-item">
                                <div class="result-number">45%</div>
                                <div class="result-label">Bounce Rate Reduction</div>
                            </div>
                        </div>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="case-study-link">Read Full Case Study</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technical SEO Process -->
        <section class="technical-seo-process">
            <div class="section-content">
                <h2>Our Technical SEO Process</h2>
                <div class="process-steps">
                    
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Technical Audit</h3>
                            <p>Comprehensive analysis of your website's technical SEO health and issues.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Priority Assessment</h3>
                            <p>Prioritize technical issues based on impact and implementation complexity.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Implementation</h3>
                            <p>Execute technical optimizations following best practices and guidelines.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Testing & Monitoring</h3>
                            <p>Test implementations and monitor performance improvements continuously.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Technical SEO Tools -->
        <section class="technical-seo-tools">
            <div class="section-content">
                <h2>Professional Technical SEO Tools</h2>
                <div class="tools-grid">
                    
                    <div class="tool-category">
                        <h3>Site Speed & Performance</h3>
                        <ul class="tool-list">
                            <li>Google PageSpeed Insights</li>
                            <li>GTmetrix</li>
                            <li>WebPageTest</li>
                            <li>Lighthouse</li>
                        </ul>
                    </div>

                    <div class="tool-category">
                        <h3>Crawling & Indexing</h3>
                        <ul class="tool-list">
                            <li>Screaming Frog SEO Spider</li>
                            <li>Google Search Console</li>
                            <li>Bing Webmaster Tools</li>
                            <li>DeepCrawl</li>
                        </ul>
                    </div>

                    <div class="tool-category">
                        <h3>Schema & Structured Data</h3>
                        <ul class="tool-list">
                            <li>Google Rich Results Test</li>
                            <li>Schema Markup Validator</li>
                            <li>JSON-LD Generator</li>
                            <li>Structured Data Testing Tool</li>
                        </ul>
                    </div>

                    <div class="tool-category">
                        <h3>Mobile & Core Web Vitals</h3>
                        <ul class="tool-list">
                            <li>Google Mobile-Friendly Test</li>
                            <li>Core Web Vitals Report</li>
                            <li>Chrome DevTools</li>
                            <li>Real User Monitoring (RUM)</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- Common Technical Issues -->
        <section class="technical-issues">
            <div class="section-content">
                <h2>Common Technical SEO Issues We Fix</h2>
                <div class="issues-grid">
                    
                    <div class="issue-card">
                        <div class="issue-severity high">High Priority</div>
                        <h3>Site Speed Issues</h3>
                        <p>Slow loading pages that hurt user experience and rankings.</p>
                        <ul class="issue-symptoms">
                            <li>Large, unoptimized images</li>
                            <li>Excessive HTTP requests</li>
                            <li>Unminified CSS and JavaScript</li>
                            <li>Poor server response times</li>
                        </ul>
                    </div>

                    <div class="issue-card">
                        <div class="issue-severity high">High Priority</div>
                        <h3>Crawl Errors</h3>
                        <p>Issues preventing search engines from accessing your content.</p>
                        <ul class="issue-symptoms">
                            <li>404 errors and broken links</li>
                            <li>Blocked resources in robots.txt</li>
                            <li>Server errors (5xx codes)</li>
                            <li>Redirect chains and loops</li>
                        </ul>
                    </div>

                    <div class="issue-card">
                        <div class="issue-severity medium">Medium Priority</div>
                        <h3>Mobile Issues</h3>
                        <p>Poor mobile experience affecting mobile rankings.</p>
                        <ul class="issue-symptoms">
                            <li>Non-responsive design</li>
                            <li>Touch elements too close</li>
                            <li>Viewport not configured</li>
                            <li>Flash content usage</li>
                        </ul>
                    </div>

                    <div class="issue-card">
                        <div class="issue-severity medium">Medium Priority</div>
                        <h3>Duplicate Content</h3>
                        <p>Content duplication issues confusing search engines.</p>
                        <ul class="issue-symptoms">
                            <li>Multiple URLs for same content</li>
                            <li>Missing canonical tags</li>
                            <li>Parameter-based duplicates</li>
                            <li>Scraped or copied content</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- Technical SEO Testimonial -->
        <section class="technical-seo-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <blockquote>
                        "The technical SEO work from Aimpro Digital was transformational. They improved our site speed by 70% and fixed issues we didn't even know existed. Our organic traffic has more than doubled since the technical optimizations were completed."
                    </blockquote>
                    <div class="testimonial-author">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/technical-seo-anna.jpg" alt="Anna Chen" />
                        <div class="author-info">
                            <h4>Anna Chen</h4>
                            <span>E-commerce Manager, StyleHub</span>
                            <div class="author-company">Online Fashion Retailer</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="technical-seo-cta">
            <div class="section-content">
                <h2>Ready to Fix Your Technical SEO Issues?</h2>
                <p>Let's optimize your website's technical foundation for better search performance and user experience.</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Free Technical Audit</a>
                    <a href="<?php echo home_url('/case-studies'); ?>" class="btn btn-secondary">View Technical SEO Results</a>
                </div>
                <div class="cta-benefits">
                    <span class="benefit">✓ Technical SEO audit included</span>
                    <span class="benefit">✓ Core Web Vitals optimization</span>
                    <span class="benefit">✓ Site speed improvements</span>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
