<?php
/**
 * Template Name: High-Converting Website Solution Page
 * Description: Website optimization solution for maximum conversions
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo get_post_meta(get_the_ID(), 'high_converting_website_header_title', true) ?: 'Build a High-Converting Website'; ?></h1>
                <p class="page-subtitle"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_header_subtitle', true) ?: 'Create a website that turns visitors into customers with conversion-focused design and optimization'; ?></p>
            </div>
        </section>

        <!-- Solution Overview -->
        <section class="solution-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo get_post_meta(get_the_ID(), 'high_converting_website_overview_title', true) ?: 'Transform Visitors Into Paying Customers'; ?></h2>
                        <p><?php echo get_post_meta(get_the_ID(), '_high_converting_website_overview_content', true) ?: 'Your website is your most powerful sales tool, working 24/7 to convert visitors into customers. Our data-driven approach to website design and optimization focuses on user experience, conversion psychology, and performance to create websites that don\'t just look good—they deliver results.'; ?></p>
                        
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
        </section>        <!-- Website Optimization Services -->
        <section class="website-optimization-services">
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
                                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                            <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/>
                                            <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2"/>
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
                                'features' => array(
                                    'User experience (UX) optimization',
                                    'Conversion psychology implementation',
                                    'Visual hierarchy optimization',
                                    'Trust signal integration'
                                )
                            ),
                            array(
                                'title' => 'Landing Page Optimization',
                                'description' => 'Create high-converting landing pages that maximize conversions from your marketing campaigns.',
                                'features' => array(
                                    'Campaign-specific landing pages',
                                    'A/B testing implementation',
                                    'Form optimization',
                                    'Lead capture optimization'
                                )
                            ),
                            array(
                                'title' => 'E-commerce Optimization',
                                'description' => 'Optimize online stores to increase sales, reduce cart abandonment, and improve customer experience.',
                                'features' => array(
                                    'Product page optimization',
                                    'Checkout process streamlining',
                                    'Cart abandonment recovery',
                                    'Cross-sell and upsell optimization'
                                )
                            ),
                            array(
                                'title' => 'Performance Optimization',
                                'description' => 'Improve website speed and technical performance to reduce bounce rates and improve conversions.',
                                'features' => array(
                                    'Page speed optimization',
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
                                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                        <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/>
                                        <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2"/>
                                    </svg>
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
        </section>        <!-- Website Optimization Process -->
        <section class="website-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_process_title', true) ?: 'Our Website Optimization Process'; ?></h2>
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
                                'description' => 'Comprehensive analysis of your website\'s current performance, user behavior, and conversion barriers.'
                            ),
                            array(
                                'title' => 'Strategy & Design',
                                'description' => 'Create conversion-focused wireframes and designs based on user psychology and best practices.'
                            ),
                            array(
                                'title' => 'Development & Testing',
                                'description' => 'Build optimized pages with A/B testing frameworks to validate improvements.'
                            ),
                            array(
                                'title' => 'Monitor & Optimize',
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
                    ?>
                </div>
                <div class="process-cta animate-on-scroll animate-scale-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Build Your High-Converting Website</a>
                </div>
            </div>
        </section>        <!-- Conversion Elements -->
        <section class="conversion-elements tools-section">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_elements_title', true) ?: 'Key Conversion Elements We Optimize'; ?></h2>
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
                                    <span class="tool-name">Headline optimization</span>
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
                                    <span class="tool-name">CTA button optimization</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Action-oriented copy</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Strategic placement</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Color and contrast testing</span>
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
                            <p>Smooth, intuitive navigation and user flow optimization.</p>
                            <ul class="tools-list">
                                <li class="tool-item">
                                    <span class="tool-name">Navigation simplification</span>
                                </li>
                                <li class="tool-item">
                                    <span class="tool-name">Form optimization</span>
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
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_types_title', true) ?: 'Website Optimization by Type'; ?></h2>
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
                                'features' => array(
                                    'Lead magnet optimization',
                                    'Contact form optimization',
                                    'Landing page creation',
                                    'CRM integration'
                                ),
                                'result' => 'Average: 200% lead increase'
                            ),
                            array(
                                'title' => 'E-commerce Websites',
                                'features' => array(
                                    'Product page optimization',
                                    'Checkout flow improvement',
                                    'Payment gateway optimization',
                                    'Inventory management'
                                ),
                                'result' => 'Average: 150% sales increase'
                            ),
                            array(
                                'title' => 'Service-Based Websites',
                                'features' => array(
                                    'Service page optimization',
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
            </div>
        </section>        <!-- Conversion Tools -->
        <section class="conversion-tools">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo get_post_meta(get_the_ID(), 'high_converting_website_tools_title', true) ?: 'Conversion Optimization Tools'; ?></h2>
                <div class="tools-grid">
                    <?php                    $tools = get_post_meta(get_the_ID(), 'high_converting_website_tools', true);
                    if (!empty($tools) && is_array($tools)) {
                        foreach ($tools as $tool) {
                            ?>
                            <div class="tool-category animate-on-scroll animate-stagger animate-fade-up">
                                <h3><?php echo esc_html($tool['category']); ?></h3>
                                <?php if (!empty($tool['tools']) && is_array($tool['tools'])) : ?>
                                    <ul class="tool-list">
                                        <?php foreach ($tool['tools'] as $item) : ?>
                                            <li><?php echo esc_html($item); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php
                        }
                    } else {
                        // Default conversion tools if none are set
                        $default_tools = array(
                            array(
                                'category' => 'Analytics & Testing',
                                'tools' => array(
                                    'Google Analytics 4',
                                    'Google Optimize',
                                    'Hotjar heatmaps',
                                    'Crazy Egg testing'
                                )
                            ),
                            array(
                                'category' => 'Performance Monitoring',
                                'tools' => array(
                                    'PageSpeed Insights',
                                    'GTmetrix analysis',
                                    'Core Web Vitals',
                                    'Mobile-friendly testing'
                                )
                            ),
                            array(
                                'category' => 'User Experience',
                                'tools' => array(
                                    'User session recordings',
                                    'Click tracking analysis',
                                    'Form analytics',
                                    'Conversion funnel analysis'
                                )
                            )
                        );
                        
                        foreach ($default_tools as $tool) {
                            ?>
                            <div class="tool-category animate-on-scroll animate-stagger animate-fade-up">
                                <h3><?php echo esc_html($tool['category']); ?></h3>
                                <ul class="tool-list">
                                    <?php foreach ($tool['tools'] as $item) : ?>
                                        <li><?php echo esc_html($item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- Website Testimonial -->
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
        </section>        <!-- CTA Section -->
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
                            'Mobile optimization included',
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
