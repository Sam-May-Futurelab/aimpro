<?php
/**
 * Template Name: High-Converting Website Solution Page
 * Description: Website optimisation solution for maximum conversions
 */

get_header(); ?>

<main id="main" class="main-content">    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/solutions'); ?>">Solutions</a>
                <span class="separator">›</span>
                <span class="current">High Converting Website</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo get_post_meta(get_the_ID(), 'high_converting_website_header_title', true) ?: 'Build a High-Converting Website'; ?></h1>
                <p class="page-subtitle"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_header_subtitle', true) ?: 'Create a website that turns visitors into customers with conversion-focused design and optimisation'; ?></p>
            </div>
        </section>

        <!-- Solution Overview -->
        <section class="solution-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo get_post_meta(get_the_ID(), 'high_converting_website_overview_title', true) ?: 'Transform Visitors Into Paying Customers'; ?></h2>
                        <p><?php echo get_post_meta(get_the_ID(), '_high_converting_website_overview_content', true) ?: 'Your website is your most powerful sales tool, working 24/7 to convert visitors into customers. Our data-driven approach to website design and optimisation focuses on user experience, conversion psychology, and performance to create websites that don\'t just look good—they deliver results.'; ?></p>
                        
                        <div class="solution-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo get_post_meta(get_the_ID(), 'high_converting_website_challenges_title', true) ?: 'Website Conversion Challenges We Solve:'; ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), 'high_converting_website_challenges', true);
                                if (!empty($challenges) && is_array($challenges)) {
                                    foreach ($challenges as $challenge) {
                                        echo '<li>' . esc_html($challenge['challenge']) . '</li>';
                                    }
                                } else {
                                    // Default challenges if none are set
                                    $default_challenges = array(
                                        'High bounce rates and low engagement',
                                        'Poor mobile user experience',
                                        'Unclear value propositions',
                                        'Confusing navigation and user flow',
                                        'Slow loading speeds',
                                        'Weak calls-to-action'
                                    );
                                    
                                    foreach ($default_challenges as $challenge) {
                                        echo '<li>' . esc_html($challenge) . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>                    <div class="overview-image animate-on-scroll animate-slide-right">                        
                        <div class="image-wrapper">
                        <?php 
                        $overview_image = get_post_meta(get_the_ID(), '_high_converting_website_overview_image', true);
                        if (!empty($overview_image)) {
                            echo wp_get_attachment_image($overview_image, 'full', false, array('alt' => 'High-Converting Website Strategy'));
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/solutions/website-conversion-overview.jpg" alt="High-Converting Website Strategy" />';
                        }
                        ?>
                        </div>
                        <div class="overview-image-cta animate-on-scroll animate-scale-up">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary overview-cta-btn">Improve Your Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Website Optimisation Services -->
        <section class="website-optimisation-services">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_services_title', true) ?: 'Our Website Conversion Services'; ?></h2>
                <div class="services-grid">
                    <?php
                    $services = get_post_meta(get_the_ID(), 'high_converting_website_services', true);
                    if (!empty($services) && is_array($services)) {
                        foreach ($services as $service) {
                            ?>
                            <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                                <div class="service-icon">
                                    <?php 
                                    if (!empty($service['icon'])) {
                                        echo $service['icon']; 
                                    } else {
                                        // Default icon
                                        ?>
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentcolour" stroke-width="2"/>
                                            <line x1="8" y1="21" x2="16" y2="21" stroke="currentcolour" stroke-width="2"/>
                                            <line x1="12" y1="17" x2="12" y2="21" stroke="currentcolour" stroke-width="2"/>
                                        </svg>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="service-content">
                                    <h3><?php echo esc_html($service['title']); ?></h3>
                                    <p><?php echo esc_html($service['description']); ?></p>
                                    <?php if (!empty($service['features']) && is_array($service['features'])) : ?>
                                        <ul class="service-features">
                                            <?php foreach ($service['features'] as $feature) : ?>
                                                <li><?php echo esc_html($feature); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        // Default services if none are set
                        $default_services = array(
                            array(
                                'title' => 'Conversion-Focused Design',
                                'description' => 'Design websites with psychology-based elements that guide visitors toward taking action.',
                                'icon' => '<i class="fas fa-palette" style="font-size: 48px;"></i>',
                                'features' => array(
                                    'User experience (UX) optimisation',
                                    'Conversion psychology implementation',
                                    'Visual hierarchy optimisation',
                                    'Trust signal integration'
                                )
                            ),
                            array(
                                'title' => 'Landing Page Optimisation',
                                'description' => 'Create high-converting landing pages that maximise conversions from your marketing campaigns.',
                                'icon' => '<i class="fas fa-bullseye" style="font-size: 48px;"></i>',
                                'features' => array(
                                    'Campaign-specific landing pages',
                                    'A/B testing implementation',                                    'Form optimisation',
                                    'Lead capture optimisation'
                                )
                            ),
                            array(                                'title' => 'E-commerce Optimisation',
                                'description' => 'Optimise online stores to increase sales, reduce cart abandonment, and improve customer experience.',
                                'icon' => '<i class="fas fa-shopping-cart" style="font-size: 48px;"></i>',
                                'features' => array(
                                    'Product page optimisation',
                                    'Checkout process streamlining',
                                    'Cart abandonment recovery',
                                    'Cross-sell and upsell optimisation'
                                )
                            ),
                            array(                                'title' => 'Performance Optimisation',
                                'description' => 'Improve website speed and technical performance to reduce bounce rates and improve conversions.',
                                'icon' => '<i class="fas fa-tachometer-alt" style="font-size: 48px;"></i>',
                                'features' => array(
                                    'Page speed optimisation',
                                    'Mobile responsiveness',
                                    'Core Web Vitals improvement',
                                    'Technical SEO implementation'
                                )
                            )
                        );
                          foreach ($default_services as $service) {
                            ?>
                            <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                                <div class="service-icon">
                                    <?php echo $service['icon']; ?>
                                </div>
                                <div class="service-content">
                                    <h3><?php echo esc_html($service['title']); ?></h3>
                                    <p><?php echo esc_html($service['description']); ?></p>
                                    <ul class="service-features">
                                        <?php foreach ($service['features'] as $feature) : ?>
                                            <li><?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- Website Success Story -->
        <section class="website-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <span class="case-study-label"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_case_study_label', true) ?: 'Success Story'; ?></span>
                        <h2><?php echo get_post_meta(get_the_ID(), 'high_converting_website_case_study_title', true) ?: 'FlexiFit: 280% Conversion Rate Improvement'; ?></h2>
                        <p><?php echo get_post_meta(get_the_ID(), 'high_converting_website_case_study_description', true) ?: 'FlexiFit, an online fitness equipment retailer, had high traffic but poor conversion rates due to a confusing checkout process and weak value propositions.'; ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo get_post_meta(get_the_ID(), 'high_converting_website_case_study_challenge_title', true) ?: 'The Challenge'; ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), 'high_converting_website_case_study_challenges', true);
                                if (!empty($challenges) && is_array($challenges)) {
                                    foreach ($challenges as $challenge) {
                                        echo '<li>' . esc_html($challenge['challenge']) . '</li>';
                                    }
                                } else {
                                    // Default case study challenges if none are set
                                    $default_challenges = array(
                                        '1.2% conversion rate on 50,000 monthly visitors',
                                        '75% cart abandonment rate',
                                        'Poor mobile user experience',
                                        'Unclear product benefits and value props'
                                    );
                                    
                                    foreach ($default_challenges as $challenge) {
                                        echo '<li>' . esc_html($challenge) . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo get_post_meta(get_the_ID(), 'high_converting_website_case_study_solution_title', true) ?: 'Our Solution'; ?></h3>
                            <ul>
                                <?php
                                $solutions = get_post_meta(get_the_ID(), 'high_converting_website_case_study_solutions', true);
                                if (!empty($solutions) && is_array($solutions)) {
                                    foreach ($solutions as $solution) {
                                        echo '<li>' . esc_html($solution['solution']) . '</li>';
                                    }
                                } else {
                                    // Default case study solutions if none are set
                                    $default_solutions = array(
                                        'Complete website redesign with conversion focus',
                                        'Streamlined checkout process',
                                        'Mobile-first responsive design',
                                        'A/B tested product pages and CTAs'
                                    );
                                    
                                    foreach ($default_solutions as $solution) {
                                        echo '<li>' . esc_html($solution) . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Website Optimisation Process -->
        <section class="website-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_process_title', true) ?: 'Our Website Optimisation Process'; ?></h2>
                <div class="process-steps">                    <?php
                    $steps = get_post_meta(get_the_ID(), 'high_converting_website_process_steps', true);
                    if (!empty($steps) && is_array($steps)) {
                        $step_count = 1;
                        foreach ($steps as $step) {
                            ?>
                            <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                                <div class="step-number"><?php echo $step_count; ?></div>
                                <div class="step-content">
                                    <h3><?php echo esc_html($step['title']); ?></h3>
                                    <p><?php echo esc_html($step['description']); ?></p>
                                </div>
                            </div>
                            <?php
                            $step_count++;
                        }
                    } else {
                        // Default process steps if none are set
                        $default_steps = array(
                            array(
                                'title' => 'Conversion Audit',
                                'description' => 'Comprehensive analysis of your website\'s current performance, user behaviour, and conversion barriers.'
                            ),
                            array(
                                'title' => 'Strategy & Design',
                                'description' => 'Create conversion-focused wireframes and designs based on user psychology and best practices.'
                            ),
                            array(
                                'title' => 'Development & Testing',
                                'description' => 'Build optimised pages with A/B testing frameworks to validate improvements.'
                            ),
                            array(
                                'title' => 'Monitor & Optimise',
                                'description' => 'Continuously track performance and implement data-driven improvements.'
                            )
                        );
                        
                        $step_count = 1;
                        foreach ($default_steps as $step) {
                            ?>
                            <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                                <div class="step-number"><?php echo $step_count; ?></div>
                                <div class="step-content">
                                    <h3><?php echo esc_html($step['title']); ?></h3>
                                    <p><?php echo esc_html($step['description']); ?></p>
                                </div>
                            </div>
                            <?php
                            $step_count++;
                        }
                    }
                    ?>                </div>
                <div class="process-cta animate-on-scroll animate-scale-up mt-1">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Build Your High-Converting Website</a>
                </div>
            </div>
        </section>        <!-- Conversion Elements -->
        <section class="conversion-elements tools-section">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_elements_title', true) ?: 'Key Conversion Elements We Optimise'; ?></h2>
                <div class="tools-grid">
                    <?php
                    $elements = get_post_meta(get_the_ID(), 'high_converting_website_elements', true);
                    if (!empty($elements) && is_array($elements)) {
                        foreach ($elements as $element) {
                            ?>
                            <div class="tools-category animate-on-scroll animate-stagger animate-fade-up">
                                <h3><?php echo esc_html($element['title']); ?></h3>
                                <p><?php echo esc_html($element['description']); ?></p>
                                <?php if (!empty($element['features']) && is_array($element['features'])) : ?>
                                    <ul class="tools-list">
                                        <?php foreach ($element['features'] as $feature) : ?>
                                            <li class="tool-item">
                                                <span class="tool-name"><?php echo esc_html($feature); ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php
                        }
                    } else {
                        // Default elements with new styling
                        ?>
                        <div class="tools-category animate-on-scroll animate-stagger animate-fade-up">
                            <h3>Value Propositions</h3>
                            <p>Clear, compelling messaging that communicates your unique value and benefits.</p>
                            <ul class="tools-list">
                                <li class="tool-item">
                                    <span class="tool-name">Headline optimisation</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Benefit-focused copy</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Social proof integration</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Risk reversal strategies</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="tools-category animate-on-scroll animate-stagger animate-fade-up">
                            <h3>Call-to-Action (CTA)</h3>
                            <p>Strategic placement and design of CTAs that guide users toward conversion.</p>
                            <ul class="tools-list">
                                <li class="tool-item">
                                    <span class="tool-name">CTA button optimisation</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Action-oriented copy</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Strategic placement</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Colour and contrast testing</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="tools-category animate-on-scroll animate-stagger animate-fade-up">
                            <h3>Trust Signals</h3>
                            <p>Elements that build credibility and reduce purchase anxiety.</p>
                            <ul class="tools-list">
                                <li class="tool-item">
                                    <span class="tool-name">Customer testimonials</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Security badges</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Money-back guarantees</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Industry certifications</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="tools-category animate-on-scroll animate-stagger animate-fade-up">
                            <h3>User Experience</h3>
                            <p>Smooth, intuitive navigation and user flow optimisation.</p>
                            <ul class="tools-list">
                                <li class="tool-item">
                                    <span class="tool-name">Navigation simplification</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Form optimisation</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Page loading speed</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Mobile responsiveness</span>
                                </li>
                            </ul>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section><!-- Website Types -->
        <section class="website-types">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_types_title', true) ?: 'Website Optimisation by Type'; ?></h2>
                <div class="types-grid">
                    <?php
                    $types = get_post_meta(get_the_ID(), 'high_converting_website_types', true);
                    if (!empty($types) && is_array($types)) {
                        foreach ($types as $type) {
                            ?>
                            <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                                <h3><?php echo esc_html($type['title']); ?></h3>
                                <?php if (!empty($type['features']) && is_array($type['features'])) : ?>
                                    <ul class="type-features">
                                        <?php foreach ($type['features'] as $feature) : ?>
                                            <li><?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="type-results">
                                    <span><?php echo esc_html($type['result']); ?></span>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        // Default website types if none are set
                        $default_types = array(
                            array(
                                'title' => 'Lead Generation Websites',
                                'features' => array(                                    'Lead magnet optimisation',
                                    'Contact form optimisation',
                                    'Landing page creation',
                                    'CRM integration'
                                ),
                                'result' => 'Average: 200% lead increase'
                            ),
                            array(
                                'title' => 'E-commerce Websites',
                                'features' => array(
                                    'Product page optimisation',
                                    'Checkout flow improvement',
                                    'Payment gateway optimisation',
                                    'Inventory management'
                                ),
                                'result' => 'Average: 150% sales increase'
                            ),
                            array(
                                'title' => 'Service-Based Websites',
                                'features' => array(
                                    'Service page optimisation',
                                    'Portfolio showcasing',
                                    'Booking system integration',
                                    'Client testimonials'
                                ),
                                'result' => 'Average: 180% inquiry increase'
                            )
                        );
                          foreach ($default_types as $type) {
                            ?>
                            <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                                <h3><?php echo esc_html($type['title']); ?></h3>
                                <ul class="type-features">
                                    <?php foreach ($type['features'] as $feature) : ?>
                                        <li><?php echo esc_html($feature); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <div class="type-results">
                                    <span><?php echo esc_html($type['result']); ?></span>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>        </section>

        <!-- Conversion Tools -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header animate-on-scroll animate-fade-up">                    <h2>Conversion Optimisation Tools</h2>
                    <p>We use industry-leading tools and technologies to analyse, test, and optimise your website's conversion performance.</p>
                </div>
                <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Analytics & Testing</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Google Analytics 4</li>
                            <li>Google Optimise</li>
                            <li>Hotjar Heatmaps</li>
                            <li>Crazy Egg Testing</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h3>Performance Monitoring</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>PageSpeed Insights</li>
                            <li>GTmetrix Analysis</li>
                            <li>Core Web Vitals</li>
                            <li>Mobile-Friendly Testing</li>
                        </ul>
                    </div>
                      <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h3>User Experience</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>User Session Recordings</li>
                            <li>Click Tracking Analysis</li>
                            <li>Form Analytics</li>
                            <li>Conversion Funnel Analysis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- Website Testimonial -->
        <section class="website-testimonial">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <blockquote>
                        <?php echo get_post_meta(get_the_ID(), 'high_converting_website_testimonial_quote', true) ?: 'The website redesign Aimpro Digital delivered exceeded all expectations. Our conversion rate increased by 280% and our online sales have tripled. The user experience is now seamless and professional.'; ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo get_post_meta(get_the_ID(), 'high_converting_website_testimonial_name', true) ?: 'Lisa Thompson'; ?></h4>
                            <span><?php echo get_post_meta(get_the_ID(), 'high_converting_website_testimonial_position', true) ?: 'Owner, FlexiFit Online'; ?></span>
                            <div class="author-company"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_testimonial_company', true) ?: 'E-commerce Fitness Retailer'; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Free Download Section -->
        <?php 
        $pdf_id = get_post_meta(get_the_ID(), '_download_pdf_id', true);
        $pdf_title = get_post_meta(get_the_ID(), '_download_pdf_title', true);
        $pdf_description = get_post_meta(get_the_ID(), '_download_pdf_description', true);
        
        if ($pdf_id && $pdf_title): ?>
        <section class="pdf-download-section" style="background: #f8f9fa; padding: 4rem 0;">
            <div class="container">
                <div class="download-content" style="max-width: 600px; margin: 0 auto; text-align: center;">
                    <div class="download-icon" style="margin-bottom: 2rem;">
                        <i class="fas fa-file-pdf" style="font-size: 4rem; colour: #d73502;"></i>
                    </div>
                    <h2 style="colour: #333; margin-bottom: 1rem;"><?php echo esc_html($pdf_title); ?></h2>
                    <?php if ($pdf_description): ?>
                        <p style="colour: #666; font-size: 1.1rem; margin-bottom: 2rem;"><?php echo esc_html($pdf_description); ?></p>
                    <?php endif; ?>
                    
                    <form id="pdf-download-form" style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                        <div class="form-group" style="margin-bottom: 1.5rem;">
                            <input type="email" id="download-email" name="email" placeholder="Enter your email address" required 
                                   style="width: 100%; padding: 1rem; border: 1px solid #ddd; border-radius: 4px; font-size: 1rem;" />
                        </div>
                        <button type="submit" class="btn-primary" style="width: 100%; padding: 1rem 2rem; background: #0066cc; colour: white; border: none; border-radius: 4px; font-size: 1.1rem; cursor: pointer;">
                            <i class="fas fa-download" style="margin-right: 0.5rem;"></i>
                            Download Free PDF
                        </button>
                        <p style="font-size: 0.9rem; colour: #666; margin-top: 1rem;">
                            We respect your privacy. Unsubscribe anytime.
                        </p>
                        <?php wp_nonce_field('pdf_download_nonce', 'pdf_nonce'); ?>
                        <input type="hidden" name="pdf_id" value="<?php echo esc_attr($pdf_id); ?>" />
                    </form>
                    
                    <div id="download-success" style="display: none; text-align: center; margin-top: 2rem;">
                        <div style="background: #d4edda; colour: #155724; padding: 1rem; border-radius: 4px; margin-bottom: 1rem;">
                            <i class="fas fa-check-circle" style="margin-right: 0.5rem;"></i>
                            Thank you! Your download will start automatically.
                        </div>
                        <a id="download-link" href="#" class="btn-primary" style="display: inline-block; padding: 1rem 2rem; text-decoration: none;">
                            <i class="fas fa-download" style="margin-right: 0.5rem;"></i>
                            Click here if download doesn't start
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <script>
        jQuery(document).ready(function($) {
            $('#pdf-download-form').on('submit', function(e) {
                e.preventDefault();
                
                var email = $('#download-email').val();
                var pdfId = $('input[name="pdf_id"]').val();
                var nonce = $('input[name="pdf_nonce"]').val();
                
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'POST',
                    data: {
                        action: 'pdf_download',
                        email: email,
                        pdf_id: pdfId,
                        nonce: nonce
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#pdf-download-form').hide();
                            $('#download-success').show();
                            $('#download-link').attr('href', response.data.download_url);
                            
                            // Auto-start download
                            window.location.href = response.data.download_url;
                        } else {
                            alert('Error: ' + response.data);
                        }
                    },
                    error: function() {
                        alert('Something went wrong. Please try again.');
                    }
                });
            });
        });
        </script>
        <?php endif; ?>

        <!-- CTA Section -->
        <section class="website-cta text-center">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_cta_title', true) ?: 'Ready to Build a High-Converting Website?'; ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_cta_description', true) ?: 'Let\'s create a website that not only looks great but converts visitors into customers at a higher rate.'; ?></p>
                <div class="cta-buttons animate-on-scroll animate-scale-up">
                    <a href="<?php echo get_post_meta(get_the_ID(), 'high_converting_website_cta_primary_link', true) ?: home_url('/contact'); ?>" class="btn btn-primary"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_cta_primary_text', true) ?: 'Get Free Website Audit'; ?></a>
                    <a href="<?php echo get_post_meta(get_the_ID(), 'high_converting_website_cta_secondary_link', true) ?: home_url('/case-studies'); ?>" class="btn btn-secondary"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_cta_secondary_text', true) ?: 'View Website Success Stories'; ?></a>
                </div>                <div class="cta-benefits animate-on-scroll animate-fade-up">
                    <?php
                    $benefits = get_post_meta(get_the_ID(), 'high_converting_website_cta_benefits', true);
                    if (!empty($benefits) && is_array($benefits)) {
                        foreach ($benefits as $benefit) {
                            echo '<span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html($benefit['benefit']) . '</span>';
                        }
                    } else {
                        // Default benefits if none are set
                        $default_benefits = array(
                            'Conversion-focused design',
                            'Mobile optimisation included',
                            'A/B testing setup'
                        );
                        
                        foreach ($default_benefits as $benefit) {
                            echo '<span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> ' . esc_html($benefit) . '</span>';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

<style>
/* Default styles for conversion elements */
.conversion-elements .tools-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.conversion-elements .tools-category {
    background: #ffffff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 2rem;
    text-align: left;
    box-shadow: 0 4px 6px rgba(0,0,0,0.07);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.conversion-elements .tools-category:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 15px rgba(0,0,0,0.1);
}

.conversion-elements .tools-category h3 {
    font-size: 1.4rem;
    margin-bottom: 1rem;
    color: #f15a25;
    font-weight: 600;
    line-height: 1.3;
}

.conversion-elements .tools-category p {
    font-size: 1rem;
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.conversion-elements .tools-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.conversion-elements .tool-item {
    padding: 0.75rem 0;
    border-bottom: 1px solid #f1f3f4;
    position: relative;
}

.conversion-elements .tool-item:before {
    display: none; /* Hide bullet points */
}

.conversion-elements .tool-item:last-child {
    border-bottom: none;
}

.conversion-elements .tool-name {
    font-size: 0.95rem;
    color: #495057;
    line-height: 1.5;
    display: block;
    font-weight: 500;
}

/* Default styles for website process */
.website-process .process-steps {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.website-process .process-step {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
}

.website-process .step-number {
    background: #f15a25;
    color: white;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.4rem;
    flex-shrink: 0;
}

.website-process .step-content h3 {
    margin-bottom: 0.5rem;
    color: #333;
    font-size: 1.3rem;
}

.website-process .step-content p {
    margin: 0;
    color: #666;
    line-height: 1.6;
    font-size: 1rem;
}

.website-process .process-cta {
    text-align: center;
    margin-top: 3rem;
}

.website-process .process-cta-btn {
    background: #f15a25;
    color: white;
    padding: 1rem 2rem;
    text-decoration: none;
    border-radius: 5px;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.website-process .process-cta-btn:hover {
    background: #d14619;
}

/* Mobile optimizations for high converting website page */
@media (max-width: 768px) {
    /* Key Conversion Elements - Mobile Layout */
    .conversion-elements .tools-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 1.5rem;
        margin-top: 1.5rem;
        width: 100%;
        max-width: 100%;
        padding: 0;
    }
    
    .conversion-elements .tools-category {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: left;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        width: 100%;
        box-sizing: border-box;
        margin: 0;
        transform: none !important;
    }
    
    .conversion-elements .tools-category:hover {
        transform: none !important;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .conversion-elements .tools-category h3 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        color: #f15a25;
        line-height: 1.3;
        font-weight: 600;
    }
    
    .conversion-elements .tools-category p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    
    .conversion-elements .tools-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .conversion-elements .tool-item {
        padding: 0.5rem 0;
        border-bottom: 1px solid #e9ecef;
        position: relative;
    }
    
    .conversion-elements .tool-item:before {
        display: none; /* Hide bullet points on mobile */
    }
    
    .conversion-elements .tool-item:last-child {
        border-bottom: none;
    }
    
    .conversion-elements .tool-name {
        font-size: 0.85rem;
        color: #495057;
        line-height: 1.4;
        display: block;
        font-weight: 500;
    }
    
    /* Website Services Grid - Mobile Layout */
    .website-optimisation-services .services-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .website-optimisation-services .service-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .website-optimisation-services .service-icon {
        margin-bottom: 1rem;
    }
    
    .website-optimisation-services .service-icon i {
        font-size: 2.5rem !important;
        color: #ff6b35;
    }
    
    .website-optimisation-services .service-card h3 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        color: #212529;
    }
    
    .website-optimisation-services .service-card p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    
    .website-optimisation-services .service-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .website-optimisation-services .service-features li {
        font-size: 0.85rem;
        color: #495057;
        padding: 0.25rem 0;
        border-bottom: 1px solid #e9ecef;
        line-height: 1.4;
    }
    
    .website-optimisation-services .service-features li:last-child {
        border-bottom: none;
    }
    
    /* Website Types Grid - Mobile Layout */
    .website-types .types-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .website-types .type-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .website-types .type-card h3 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
        color: #212529;
    }
    
    .website-types .type-features {
        list-style: none;
        padding: 0;
        margin: 0 0 1rem 0;
    }
    
    .website-types .type-features li {
        font-size: 0.85rem;
        color: #495057;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e9ecef;
        line-height: 1.4;
    }
    
    .website-types .type-features li:last-child {
        border-bottom: none;
    }
    
    .website-types .type-results {
        background: #ff6b35;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-top: 1rem;
    }
    
    /* Process Steps - Mobile Layout with Centered Numbers */
    .website-process .process-steps {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .website-process .process-step {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 1rem;
    }
    
    .website-process .step-number {
        background: #f15a25;
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.2rem;
        flex-shrink: 0;
        margin-bottom: 0.5rem;
    }
    
    .website-process .step-content {
        width: 100%;
    }
    
    .website-process .step-content h3 {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        color: #333;
    }
    
    .website-process .step-content p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin: 0;
    }
    
    /* CTA Buttons - Mobile Layout */
    .overview-cta-btn,
    .process-cta-btn {
        width: 100%;
        padding: 0.875rem 1.5rem;
        text-align: center;
        font-weight: 600;
        border-radius: 6px;
        font-size: 0.9rem;
        text-decoration: none;
        background: #ff6b35 !important;
        color: white !important;
        border: 2px solid #ff6b35 !important;
        transition: all 0.3s ease;
        margin-top: 1rem;
        display: inline-block;
        box-sizing: border-box;
    }
    
    .overview-cta-btn:hover,
    .process-cta-btn:hover {
        background: #e55a2b !important;
        border-color: #e55a2b !important;
        color: white !important;
    }
    
    /* Overview Image - Mobile */
    .overview-image {
        margin-top: 2rem;
        text-align: center;
    }
    
    .overview-image .image-wrapper {
        margin-bottom: 1rem;
    }
    
    .overview-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    
    /* Container Overrides for Mobile */
    .conversion-elements .section-content {
        overflow: hidden;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin: 0;
    }
    
    .container {
        width: 100%;
        max-width: 100%;
        padding-left: 1rem;
        padding-right: 1rem;
        box-sizing: border-box;
        margin-left: auto;
        margin-right: auto;
    }
    
    /* Force single column layout on mobile */
    .conversion-elements .tools-grid {
        display: block !important;
    }
    
    .conversion-elements .tools-category {
        display: block !important;
        width: 100% !important;
        max-width: 100% !important;
        margin-bottom: 1.5rem;
        overflow: hidden;
    }
    
    /* Hide bullet point icons for lists */
    .service-features li:before,
    .type-features li:before,
    .tools-list li:before,
    .tool-item:before {
        display: none !important;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* Tablet Layout - 2x2 grid for most sections */
    .conversion-elements .tools-grid,
    .website-optimisation-services .services-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .website-types .types-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }
    
    .tools-category,
    .service-card,
    .type-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
}
</style>

