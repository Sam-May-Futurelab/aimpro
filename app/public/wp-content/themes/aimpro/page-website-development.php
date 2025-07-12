<?php
/**
 * Template Name: Website Development Services
 * Description: Comprehensive website development services overview
 */

// Include the meta defaults function
require_once get_template_directory() . '/includes/website-development-meta.php';

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/website-services'); ?>">Website Services</a>
                <span class="separator">›</span>
                <span class="current">Website Development</span>
            </nav>
        </div>
    </div>

    <div class="container">
        <?php
        // Get meta values with defaults
        $header_title = get_post_meta(get_the_ID(), 'website_development_header_title', true);
        $header_subtitle = get_post_meta(get_the_ID(), 'website_development_header_subtitle', true);
        $header_tags = get_post_meta(get_the_ID(), 'website_development_header_tags', true);
        $overview_title = get_post_meta(get_the_ID(), 'website_development_overview_title', true);
        $overview_description = get_post_meta(get_the_ID(), 'website_development_overview_description', true);
        $stats = get_post_meta(get_the_ID(), 'website_development_stats', true);
        
        // Get defaults if fields are empty
        $defaults = get_website_development_defaults();
        if (empty($header_title)) $header_title = $defaults['header_title'];
        if (empty($header_subtitle)) $header_subtitle = $defaults['header_subtitle'];
        if (empty($header_tags)) $header_tags = $defaults['header_tags'];
        if (empty($overview_title)) $overview_title = $defaults['overview_title'];
        if (empty($overview_description)) $overview_description = $defaults['overview_description'];
        if (empty($stats) || !is_array($stats)) $stats = $defaults['stats'];
        ?>
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo wp_kses_post($header_title); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post($header_subtitle); ?></p>
                <div class="header-badges">
                    <?php 
                    // Handle tags - could be string or array
                    $tags = is_string($header_tags) ? explode("\n", $header_tags) : $header_tags;
                    if (is_array($tags)) {
                        foreach ($tags as $tag) {
                            echo '<span class="badge">' . esc_html(trim($tag)) . '</span>';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Service Overview -->
        <section class="service-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <h2><?php echo wp_kses_post($overview_title); ?></h2>
                        <?php echo wpautop(wp_kses_post($overview_description)); ?>
                    </div>
                    <div class="overview-stats">
                        <?php foreach ($stats as $stat): ?>
                        <div class="stat-item">
                            <span class="stat-number"><?php echo esc_html($stat['number']); ?></span>
                            <span class="stat-label"><?php echo esc_html($stat['label']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Development Success Story -->
        <section class="development-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <?php
                    // Get case study meta values
                    $case_title = get_post_meta(get_the_ID(), 'website_development_case_title', true);
                    $case_subtitle = get_post_meta(get_the_ID(), 'website_development_case_subtitle', true);
                    $case_description = get_post_meta(get_the_ID(), 'website_development_case_description', true);
                    $case_challenges = get_post_meta(get_the_ID(), 'website_development_case_challenges', true);
                    $case_solutions = get_post_meta(get_the_ID(), 'website_development_case_solutions', true);
                    $case_results = get_post_meta(get_the_ID(), 'website_development_case_results', true);
                    
                    // Get defaults if empty
                    if (empty($case_title)) $case_title = $defaults['case_title'];
                    if (empty($case_subtitle)) $case_subtitle = $defaults['case_subtitle'];
                    if (empty($case_description)) $case_description = $defaults['case_description'];
                    if (empty($case_challenges)) $case_challenges = $defaults['case_challenges'];
                    if (empty($case_solutions)) $case_solutions = $defaults['case_solutions'];
                    if (empty($case_results) || !is_array($case_results)) $case_results = $defaults['case_results'];
                    ?>
                    <div class="case-study-text">
                        <h2><?php echo wp_kses_post($case_title); ?></h2>
                        <h3><?php echo wp_kses_post($case_subtitle); ?></h3>
                        <?php echo wpautop(wp_kses_post($case_description)); ?>
                        
                        <div class="challenge-solution">
                            <div class="challenge">
                                <h4>The Challenge</h4>
                                <ul>
                                    <?php 
                                    // Handle challenges - could be string or array
                                    $challenges = is_string($case_challenges) ? explode("\n", $case_challenges) : $case_challenges;
                                    if (is_array($challenges)) {
                                        foreach ($challenges as $challenge) {
                                            echo '<li>' . esc_html(trim($challenge)) . '</li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="solution">
                                <h4>Our Solution</h4>
                                <ul>
                                    <?php 
                                    // Handle solutions - could be string or array
                                    $solutions = is_string($case_solutions) ? explode("\n", $case_solutions) : $case_solutions;
                                    if (is_array($solutions)) {
                                        foreach ($solutions as $solution) {
                                            echo '<li>' . esc_html(trim($solution)) . '</li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="case-study-metrics">
                        <?php foreach ($case_results as $result): ?>
                        <div class="metric-card">
                            <div class="metric-number"><?php echo esc_html($result['number']); ?></div>
                            <div class="metric-label"><?php echo esc_html($result['label']); ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Development Process -->
        <section class="development-process">
            <div class="section-content">
                <h2>Our Website Development Process</h2>
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Discovery & Strategy</h3>
                            <p>Understanding your business goals, target audience, and requirements to create a strategic development plan.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Design & Planning</h3>
                            <p>Creating wireframes, mockups, and detailed design specifications that align with your brand and objectives.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Development & Build</h3>
                            <p>Expert development using modern technologies, best practices, and optimisation for performance and SEO.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Testing & Quality Assurance</h3>
                            <p>Comprehensive testing across devices, browsers, and performance metrics to ensure flawless functionality.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Launch & Optimisation</h3>
                            <p>Strategic launch with ongoing monitoring, analytics setup, and continuous optimisation for better results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Technologies We Use -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <h2>Technologies & Platforms We Use</h2>
                    <p>We leverage cutting-edge technologies and platforms to build robust, scalable websites that deliver exceptional performance.</p>
                </div>
                <div class="services-grid">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h3>Content Management</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>WordPress</li>
                            <li>Webflow</li>
                            <li>Shopify</li>
                            <li>WooCommerce</li>
                            <li>Drupal</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Frontend Technologies</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>HTML5 & CSS3</li>
                            <li>JavaScript (ES6+)</li>
                            <li>React.js</li>
                            <li>Vue.js</li>
                            <li>Bootstrap & Tailwind</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3>Backend Development</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>PHP</li>
                            <li>Node.js</li>
                            <li>Python</li>
                            <li>MySQL</li>
                            <li>PostgreSQL</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3>Performance & SEO</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Google PageSpeed optimisation</li>
                            <li>Core Web Vitals</li>
                            <li>Schema.org Markup</li>
                            <li>CDN Integration</li>
                            <li>Image optimisation</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3>Hosting & Infrastructure</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>AWS & Google Cloud</li>
                            <li>Cloudflare CDN</li>
                            <li>SSL Certificates</li>
                            <li>Automated Backups</li>
                            <li>Load Balancing</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Development Tools</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Git Version Control</li>
                            <li>Webpack & Build Tools</li>
                            <li>API Integrations</li>
                            <li>Testing Frameworks</li>
                            <li>CI/CD Pipelines</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- Website Features -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <h2>Standard Features Included</h2>
                    <p>Every website we build includes these essential features to ensure optimal performance and user experience.</p>
                </div>                <div class="services-grid">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile-First Design</h3>
                        <p>Responsive design that looks and works perfectly on all devices, with mobile optimisation as a priority.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <h3>Lightning-Fast Performance</h3>
                        <p>optimised for speed with sub-3 second load times, improving user experience and search rankings.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>SEO-Optimised</h3>
                        <p>Built with SEO best practices, including proper structure, meta tags, and schema markup for better visibility.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Security & SSL</h3>
                        <p>Secure hosting, SSL certificates, and security best practices to protect your website and user data.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3>Analytics Integration</h3>
                        <p>Google Analytics, conversion tracking, and performance monitoring setup for data-driven insights.</p>
                    </div>
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h3>Brand Consistency</h3>
                        <p>Design that reflects your brand identity with consistent colours, fonts, and messaging throughout.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Industry Applications -->
        <section class="industry-applications">
            <div class="section-content">
                <h2>Website Development for Your Industry</h2>
                <div class="industry-grid">
                    <div class="industry-item">
                        <h3>E-commerce</h3>
                        <p>Online stores with optimised product pages, secure checkout, inventory management, and conversion-focused design.</p>
                    </div>
                    <div class="industry-item">
                        <h3>Professional Services</h3>
                        <p>Professional websites with service showcases, client testimonials, appointment booking, and lead generation forms.</p>
                    </div>
                    <div class="industry-item">
                        <h3>SaaS & Technology</h3>
                        <p>Product-focused websites with feature demonstrations, pricing pages, free trial signups, and customer onboarding.</p>
                    </div>
                    <div class="industry-item">
                        <h3>Healthcare</h3>
                        <p>HIPAA-compliant websites with patient portals, appointment scheduling, and accessible design for healthcare providers.</p>
                    </div>
                    <div class="industry-item">
                        <h3>Real Estate</h3>
                        <p>Property listing websites with search functionality, virtual tours, lead capture, and CRM integration.</p>
                    </div>
                    <div class="industry-item">
                        <h3>Restaurants & Hospitality</h3>
                        <p>Visual websites with online ordering, reservation systems, menu displays, and local SEO optimisation.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Client Testimonial -->
        <section class="client-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <div class="quote-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 21C3 17.4 5.4 17.4 5.4 17.4H9V21H3Z" stroke="currentcolour" stroke-width="2"/>
                            <path d="M15 21C15 17.4 17.4 17.4 17.4 17.4H21V21H15Z" stroke="currentcolour" stroke-width="2"/>
                        </svg>
                    </div>
                    <blockquote>
                        "The new website AIM Pro Marketing built for us has exceeded all expectations. Our conversion rate tripled within the first month, and we're getting compliments on the design daily. The investment has already paid for itself."
                    </blockquote>
                    <div class="testimonial-author">
                        <strong>Rachel Green</strong>
                        <span>Founder, Green Garden Solutions</span>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="cta-section">
            <div class="section-content">
                <div class="cta-content">
                    <h2>Ready to Automate Your Marketing?</h2>
                    <p>Let's create a custom automation strategy that saves you time while improving your marketing results.</p>
                    <div class="cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
