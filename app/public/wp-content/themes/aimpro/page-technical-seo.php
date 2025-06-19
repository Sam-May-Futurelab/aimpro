<?php
/**
 * Template Name: Technical SEO Page
 * Description: Technical SEO services for website optimisation
 */

get_header(); 

// Get meta data with fallbacks
$header_title = get_post_meta(get_the_ID(), 'technical_seo_header_title', true) ?: 'Technical SEO Services';
$header_subtitle = get_post_meta(get_the_ID(), 'technical_seo_header_subtitle', true) ?: 'optimise your website\'s technical foundation for better search engine performance';
$hero_image = get_post_meta(get_the_ID(), 'technical_seo_hero_image', true);

?>

<main id="main" class="main-content seo-service-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/seo-services'); ?>">SEO Services</a>
                <span class="separator">›</span>
                <span class="current">Technical SEO</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html($header_title); ?></h1>
                <p class="page-subtitle"><?php echo esc_html($header_subtitle); ?></p>
            </div>
            <?php if ($hero_image): ?>
                <div class="page-header-image animate-on-scroll animate-scale-up">
                    <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($header_title); ?>" />
                </div>
            <?php endif; ?>
        </section>        <!-- Technical SEO Overview -->
        <section class="technical-seo-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <?php                        $overview_title = get_post_meta(get_the_ID(), 'technical_seo_overview_title', true) ?: 'Build a Solid Technical Foundation for SEO Success';
                        $overview_description = get_post_meta(get_the_ID(), 'technical_seo_overview_description', true) ?: 'Technical SEO is the backbone of search engine optimisation. Our technical SEO services ensure your website is properly crawled, indexed, and understood by search engines. We fix critical technical issues that prevent your site from ranking and implement optimisations that give you a competitive edge.';
                        $benefits_title = get_post_meta(get_the_ID(), 'technical_seo_benefits_title', true) ?: 'Technical SEO Impact:';
                        $benefits = get_post_meta(get_the_ID(), 'technical_seo_benefits', true) ?: array(
                            'Improve site speed by up to 70%',
                            'Enhance crawlability and indexation',
                            'Boost Core Web Vitals scores',
                            'Improve mobile user experience',
                            'Increase search engine trust and authority',
                            'Reduce bounce rates and improve engagement'
                        );
                        $overview_image_id = get_post_meta(get_the_ID(), 'technical_seo_overview_image_id', true);
                        $overview_image = get_post_meta(get_the_ID(), 'technical_seo_overview_image', true) ?: get_template_directory_uri() . '/assets/images/services/technical-seo-overview.jpg';
                        ?>
                        <h2><?php echo esc_html($overview_title); ?></h2>
                        <p><?php echo esc_html($overview_description); ?></p>
                        
                        <div class="technical-benefits animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html($benefits_title); ?></h3>
                            <ul>
                                <?php foreach ($benefits as $benefit): ?>
                                    <li><?php echo esc_html($benefit); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php if ($overview_image_id): ?>
                            <?php echo wp_get_attachment_image($overview_image_id, 'large', false, array('alt' => 'Technical SEO Services')); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url($overview_image); ?>" alt="Technical SEO Services" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section><!-- Technical SEO Services -->
        <section class="technical-seo-services">
            <div class="section-content">
                <?php                $services_title = get_post_meta(get_the_ID(), 'technical_seo_services_title', true) ?: 'Complete Technical SEO Services';
                $services = get_post_meta(get_the_ID(), 'technical_seo_services', true) ?: array(
                    array(
                        'title' => 'Site Speed optimisation',
                        'icon' => 'fas fa-tachometer-alt',
                        'description' => 'Improve your website\'s loading speed for better user experience and search rankings.',
                        'features' => array(
                            'Page speed analysis and optimisation',
                            'Image compression and optimisation',
                            'Code minification and compression',
                            'CDN implementation',
                            'Caching optimisation',
                            'Server response optimisation'
                        ),
                        'results' => 'Average: 60% speed improvement',
                        'featured' => true
                    ),
                    array(
                        'title' => 'Core Web Vitals optimisation',
                        'icon' => 'fas fa-chart-line',
                        'description' => 'optimise your website for Google\'s Core Web Vitals ranking factors.',
                        'features' => array(
                            'Largest Contentful Paint (LCP) optimisation',
                            'First Input Delay (FID) improvement',
                            'Cumulative Layout Shift (CLS) reduction',
                            'First Contentful Paint (FCP) optimisation',
                            'Time to Interactive (TTI) improvement',
                            'Performance monitoring setup'
                        ),
                        'results' => 'Achieve "Good" Core Web Vitals scores',
                        'featured' => false
                    ),
                    array(
                        'title' => 'Crawlability & Indexability',
                        'icon' => 'fas fa-spider',
                        'description' => 'Ensure search engines can properly crawl and index your website content.',
                        'features' => array(
                            'Robots.txt optimisation',
                            'XML sitemap creation and optimisation',
                            'Internal linking structure',
                            'Crawl error identification and fixing',
                            'URL structure optimisation',
                            'Redirect chain resolution'
                        ),
                        'results' => '100% crawlable and indexable pages',
                        'featured' => false
                    ),
                    array(
                        'title' => 'Schema Markup Implementation',
                        'icon' => 'fas fa-code',
                        'description' => 'Implement structured data to help search engines understand your content.',
                        'features' => array(
                            'Business schema markup',
                            'Product and service schema',
                            'Review and rating schema',
                            'FAQ and How-to schema',
                            'Event and organisation schema',
                            'Rich snippet optimisation'
                        ),
                        'results' => 'Enhanced SERP appearance',
                        'featured' => false
                    ),
                    array(
                        'title' => 'Mobile optimisation',
                        'icon' => 'fas fa-mobile-alt',
                        'description' => 'Ensure your website provides an excellent mobile user experience.',
                        'features' => array(
                            'Mobile-friendly design implementation',
                            'Responsive layout optimisation',
                            'Mobile page speed optimisation',
                            'Touch element optimisation',
                            'Mobile usability improvements',
                            'AMP implementation (if needed)'
                        ),
                        'results' => 'Pass Google Mobile-Friendly test',
                        'featured' => false
                    ),
                    array(
                        'title' => 'HTTPS & Security',
                        'icon' => 'fas fa-shield-alt',
                        'description' => 'Implement security measures that protect users and improve search rankings.',
                        'features' => array(
                            'SSL certificate installation',
                            'HTTPS implementation',
                            'Security header optimisation',
                            'Mixed content resolution',
                            'Security vulnerability assessment',
                            'HSTS implementation'
                        ),
                        'results' => 'Secure, trusted website',
                        'featured' => false
                    )
                );
                ?>                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($services_title); ?></h2>
                <div class="services-grid">
                      <?php foreach ($services as $service): ?>
                        <div class="service-card <?php echo (isset($service['featured']) && $service['featured']) ? 'featured' : ''; ?> animate-on-scroll animate-stagger animate-fade-up">
                            <div class="service-icon">
                                <i class="<?php echo esc_attr($service['icon'] ?? 'fas fa-cog'); ?>"></i>
                            </div>
                            <div class="service-content">
                                <h3><?php echo esc_html($service['title']); ?></h3>
                                <p><?php echo esc_html($service['description']); ?></p>
                                <?php if (isset($service['features']) && is_array($service['features'])): ?>
                                    <ul class="service-features">
                                        <?php foreach ($service['features'] as $feature): ?>
                                            <li><?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <?php if (isset($service['results'])): ?>
                                    <div class="service-results">
                                        <span><?php echo esc_html($service['results']); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>                </div>
                <div class="text-centre mt-1 animate-on-scroll animate-fade-up">
                    <a href="/contact/" class="btn btn-primary">Get Your Technical SEO Audit</a>
                </div>
            </div>
        </section>        <!-- Technical SEO Success Story -->
        <section class="technical-seo-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <?php 
                        $case_study_label = get_post_meta(get_the_ID(), 'technical_seo_case_study_label', true) ?: 'Technical SEO Success Story';
                        $case_study_title = get_post_meta(get_the_ID(), 'technical_seo_case_study_title', true) ?: 'E-commerce Store: 70% Speed Improvement & 250% Traffic Growth';
                        $case_study_description = get_post_meta(get_the_ID(), 'technical_seo_case_study_description', true) ?: 'A large e-commerce store was experiencing poor search rankings despite having great products and content. Technical issues were severely impacting their search performance and user experience.';
                        $case_study_challenge_title = get_post_meta(get_the_ID(), 'technical_seo_case_study_challenge_title', true) ?: 'Technical Issues Identified';
                        $case_study_challenges = get_post_meta(get_the_ID(), 'technical_seo_case_study_challenges', true) ?: array(
                            'Page load time of 8.5 seconds',
                            'Poor Core Web Vitals scores',
                            'Mobile usability issues',
                            'Crawl errors preventing indexation',
                            'Missing schema markup',
                            'Duplicate content issues'
                        );
                        $case_study_solution_title = get_post_meta(get_the_ID(), 'technical_seo_case_study_solution_title', true) ?: 'Technical SEO Solutions';
                        $case_study_solutions = get_post_meta(get_the_ID(), 'technical_seo_case_study_solutions', true) ?: array(
                            'Comprehensive site speed optimisation',
                            'Core Web Vitals improvements',
                            'Mobile optimisation implementation',
                            'Crawl error resolution',
                            'Schema markup implementation',
                            'Technical content optimisation'
                        );
                        ?>                        <span class="case-study-label animate-on-scroll animate-fade-up"><?php echo esc_html($case_study_label); ?></span>
                        <h2 class="animate-on-scroll animate-slide-left"><?php echo esc_html($case_study_title); ?></h2>
                        <p class="animate-on-scroll animate-slide-left"><?php echo esc_html($case_study_description); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html($case_study_challenge_title); ?></h3>
                            <ul>
                                <?php foreach ($case_study_challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html($case_study_solution_title); ?></h3>
                            <ul>
                                <?php foreach ($case_study_solutions as $solution): ?>
                                    <li><?php echo esc_html($solution); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Technical SEO Process -->
        <section class="technical-seo-process">
            <div class="section-content">
                <?php 
                $process_title = get_post_meta(get_the_ID(), 'technical_seo_process_title', true) ?: 'Our Technical SEO Process';
                $process_steps = get_post_meta(get_the_ID(), 'technical_seo_process_steps', true) ?: array(
                    array(
                        'title' => 'Technical Audit',
                        'description' => 'Comprehensive analysis of your website\'s technical SEO health and issues.'
                    ),
                    array(
                        'title' => 'Priority Assessment',
                        'description' => 'Prioritize technical issues based on impact and implementation complexity.'
                    ),
                    array(
                        'title' => 'Implementation',
                        'description' => 'Execute technical optimisations following best practices and guidelines.'
                    ),
                    array(
                        'title' => 'Testing & Monitoring',
                        'description' => 'Test implementations and monitor performance improvements continuously.'
                    )
                );
                ?>                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($process_title); ?></h2>
                <div class="process-steps">
                    
                    <?php foreach ($process_steps as $index => $step): ?>
                        <div class="process-step animate-on-scroll animate-stagger animate-slide-up">
                            <div class="step-number"><?php echo ($index + 1); ?></div>
                            <div class="step-content">
                                <h3><?php echo esc_html($step['title']); ?></h3>
                                <p><?php echo esc_html($step['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>        </section>

        <!-- Technical SEO Tools -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header animate-on-scroll animate-fade-up">
                    <h2>Professional Technical SEO Tools</h2>
                    <p>We use cutting-edge tools and technologies to diagnose, analyse, and optimise your website's technical performance.</p>
                </div>
                <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3>Site Speed & Performance</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Google PageSpeed Insights</li>
                            <li>GTmetrix</li>
                            <li>WebPageTest</li>
                            <li>Lighthouse</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-spider"></i>
                        </div>
                        <h3>Crawling & Indexing</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Screaming Frog SEO Spider</li>
                            <li>Google Search Console</li>
                            <li>Bing Webmaster Tools</li>
                            <li>DeepCrawl</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Schema & Structured Data</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Google Rich Results Test</li>
                            <li>Schema Markup Validator</li>
                            <li>JSON-LD Generator</li>
                            <li>Structured Data Testing Tool</li>
                        </ul>
                    </div>
                      <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile & Core Web Vitals</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Google Mobile-Friendly Test</li>
                            <li>Core Web Vitals Report</li>
                            <li>Chrome DevTools</li>
                            <li>Real User Monitoring (RUM)</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Security & HTTPS</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>SSL Certificate Testing</li>
                            <li>Security Headers Check</li>
                            <li>Mixed Content Detection</li>
                            <li>Vulnerability Scanning</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <h3>Server & Infrastructure</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Server Response Time Testing</li>
                            <li>CDN Configuration</li>
                            <li>Robots.txt Validation</li>
                            <li>XML Sitemap optimisation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- Common Technical Issues -->
        <section class="technical-issues-section">
            <div class="section-content">
                <?php 
                $issues_title = get_post_meta(get_the_ID(), 'technical_seo_issues_title', true) ?: 'Common Technical SEO Issues We Fix';
                $issues = get_post_meta(get_the_ID(), 'technical_seo_issues', true) ?: array(
                    array(
                        'title' => 'Site Speed Issues',
                        'description' => 'Slow loading pages that hurt user experience and rankings.',
                        'priority' => 'high',
                        'issues' => array(
                            'Large, unoptimised images',
                            'Excessive HTTP requests',
                            'Unminified CSS and JavaScript',
                            'Poor server response times'
                        )
                    ),
                    array(
                        'title' => 'Crawl Errors',
                        'description' => 'Issues preventing search engines from accessing your content.',
                        'priority' => 'high',
                        'issues' => array(
                            '404 errors and broken links',
                            'Blocked resources in robots.txt',
                            'Server errors (5xx codes)',
                            'Redirect chains and loops'
                        )
                    ),
                    array(
                        'title' => 'Mobile Issues',
                        'description' => 'Poor mobile experience affecting mobile rankings.',
                        'priority' => 'medium',
                        'issues' => array(
                            'Non-responsive design',
                            'Touch elements too close',
                            'Viewport not configured',
                            'Flash content usage'
                        )
                    ),
                    array(
                        'title' => 'Duplicate Content',
                        'description' => 'Content duplication issues confusing search engines.',
                        'priority' => 'medium',
                        'issues' => array(
                            'Multiple URLs for same content',
                            'Missing canonical tags',
                            'Parameter-based duplicates',
                            'Scraped or copied content'
                        )
                    )
                );
                ?>                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($issues_title); ?></h2>
                <div class="issues-grid">
                    
                    <?php foreach ($issues as $issue): ?>
                        <div class="issue-card <?php echo esc_attr($issue['priority']); ?>-priority animate-on-scroll animate-stagger animate-fade-up">>
                            <div class="issue-priority <?php echo esc_attr($issue['priority']); ?>"><?php echo ucfirst($issue['priority']); ?> Priority</div>
                            <h3><?php echo esc_html($issue['title']); ?></h3>
                            <p><?php echo esc_html($issue['description']); ?></p>
                            <ul class="issue-list">
                                <?php foreach ($issue['issues'] as $specific_issue): ?>
                                    <li><?php echo esc_html($specific_issue); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>        <!-- Technical SEO Testimonial -->
        <section class="technical-seo-testimonial">
            <div class="section-content">                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <?php 
                    $testimonial_quote = get_post_meta(get_the_ID(), 'technical_seo_testimonial_quote', true) ?: 'The technical SEO work from Aimpro Digital was transformational. They improved our site speed by 70% and fixed issues we didn\'t even know existed. Our organic traffic has more than doubled since the technical optimisations were completed.';
                    $testimonial_author_name = get_post_meta(get_the_ID(), 'technical_seo_testimonial_author_name', true) ?: 'Anna Chen';
                    $testimonial_author_title = get_post_meta(get_the_ID(), 'technical_seo_testimonial_author_title', true) ?: 'E-commerce Manager, StyleHub';
                    $testimonial_author_company = get_post_meta(get_the_ID(), 'technical_seo_testimonial_author_company', true) ?: 'Online Fashion Retailer';
                    $testimonial_image = get_post_meta(get_the_ID(), 'technical_seo_testimonial_image', true);
                    ?>
                    <blockquote>
                        <?php echo esc_html($testimonial_quote); ?>
                    </blockquote>
                    <div class="testimonial-author animate-on-scroll animate-slide-up">
                        <?php if ($testimonial_image): ?>
                            <img src="<?php echo esc_url($testimonial_image); ?>" alt="<?php echo esc_attr($testimonial_author_name); ?>" />
                        <?php endif; ?>
                        <div class="author-info">
                            <h4><?php echo esc_html($testimonial_author_name); ?></h4>
                            <span><?php echo esc_html($testimonial_author_title); ?></span>
                            <div class="author-company"><?php echo esc_html($testimonial_author_company); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section id="contact" class="cta-section">
            <div class="container">                <div class="cta-content animate-on-scroll animate-fade-up">
                    <?php 
                    $cta_title = get_post_meta(get_the_ID(), 'technical_seo_cta_title', true) ?: 'Ready to Fix Your Technical SEO Issues?';
                    $cta_description = get_post_meta(get_the_ID(), 'technical_seo_cta_description', true) ?: 'Let\'s optimise your website\'s technical foundation for better search performance and user experience.';
                    $cta_primary_text = get_post_meta(get_the_ID(), 'technical_seo_cta_primary_text', true) ?: 'Get Free Technical Audit';
                    $cta_primary_url = get_post_meta(get_the_ID(), 'technical_seo_cta_primary_url', true) ?: home_url('/contact');
                    $cta_secondary_text = get_post_meta(get_the_ID(), 'technical_seo_cta_secondary_text', true) ?: 'View Technical SEO Results';
                    $cta_secondary_url = get_post_meta(get_the_ID(), 'technical_seo_cta_secondary_url', true) ?: home_url('/case-studies');                    $cta_benefits = get_post_meta(get_the_ID(), 'technical_seo_cta_benefits', true) ?: array(
                        '<i class="fas fa-check" aria-hidden="true"></i> Technical SEO audit included',
                        '<i class="fas fa-check" aria-hidden="true"></i> Core Web Vitals optimisation',
                        '<i class="fas fa-check" aria-hidden="true"></i> Site speed improvements'
                    );
                    ?>
                    <h2><?php echo esc_html($cta_title); ?></h2>
                    <p><?php echo esc_html($cta_description); ?></p>
                    <div class="cta-buttons animate-on-scroll animate-slide-up">
                        <a href="<?php echo esc_url($cta_primary_url); ?>" class="btn-primary"><?php echo esc_html($cta_primary_text); ?></a>
                        <a href="<?php echo esc_url($cta_secondary_url); ?>" class="btn-outline"><?php echo esc_html($cta_secondary_text); ?></a>
                    </div>
                    <div class="cta-features animate-on-scroll animate-fade-up">
                        <?php foreach ($cta_benefits as $benefit): ?>
                            <span class="feature-check"><?php echo esc_html($benefit); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
