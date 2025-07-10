<?php
/**
 * Template Name: Landing Pages
 * 
 * High-Converting Landing Pages Services
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="service-page landing-pages-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">/</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">/</span>
                <a href="<?php echo home_url('/website-development'); ?>">Website Development</a>
                <span class="separator">/</span>
                <span class="current">Landing Pages</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_hero_title', true) ?: 'High-Converting Landing Pages'); ?></h1>
                <p class="hero-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_hero_subtitle', true) ?: 'Purpose-built landing pages that turn visitors into customers with laser-focused messaging and conversion optimisation.'); ?></p>
                <div class="hero-stats animate-on-scroll animate-fade-up">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat1_number', true) ?: '340%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat1_label', true) ?: 'Average Conversion Increase'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat2_number', true) ?: '7 Days'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat2_label', true) ?: 'Average Delivery Time'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat3_number', true) ?: '23%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat3_label', true) ?: 'Average Conversion Rate'); ?></div>
                    </div>
                </div>                <div class="hero-ctas animate-on-scroll animate-scale-up">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_cta_primary', true) ?: 'Get Landing Page Quote'); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <div class="overview-text animate-on-scroll animate-slide-left">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_intro_title', true) ?: 'Landing Pages That Convert Like Crazy'); ?></h2>
                    <p class="overview-description"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_intro_description', true) ?: 'Our high-converting landing pages are meticulously crafted to achieve one goal: turn your traffic into leads and sales. Every element is strategically designed and tested to maximise conversions for your specific audience and offer.'); ?></p>
                    
                    <h3 class="features-heading">Key Features</h3>
                    <div class="service-features-list">
                        <div class="service-feature-item">
                            <h4><i class="fas fa-bullseye"></i> <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_feature1_title', true) ?: 'Conversion-Focused Design'); ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_feature1_description', true) ?: 'Every element designed with one goal: converting visitors into customers through strategic placement and messaging.'); ?></p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-flask"></i> <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_feature2_title', true) ?: 'A/B Testing Ready'); ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_feature2_description', true) ?: 'Built-in testing capabilities to continuously optimise performance and improve conversion rates.'); ?></p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-rocket"></i> <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_feature3_title', true) ?: 'Lightning Fast Loading'); ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_feature3_description', true) ?: 'optimised for speed with under 2-second load times to minimise bounce rates and maximise conversions.'); ?></p>
                        </div>
                        
                        <div class="service-feature-item">
                            <h4><i class="fas fa-chart-bar"></i> <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_feature4_title', true) ?: 'Advanced Analytics'); ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_feature4_description', true) ?: 'Comprehensive tracking and analytics to measure performance and identify optimisation opportunities.'); ?></p>
                        </div>
                    </div>
                </div>
                
                <div class="overview-stats animate-on-scroll animate-slide-right">
                    <h3 class="stats-heading">Proven Results</h3>
                    <p class="stats-description">Our landing pages don't just look good—they deliver measurable business results. Every element is optimised for maximum conversions.</p>
                    
                    <div class="target-icon" style="max-width: 350px; margin: 0 auto 20px; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Aimpro-high-ranking-website-blog.png" alt="High Converting Landing Page" style="width: 100%; height: auto; display: block;">
                    </div>
                    
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat1_number', true) ?: '340%'); ?></span>
                        <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat1_label', true) ?: 'Average Conversion Increase'); ?></span>
                    </div>
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat2_number', true) ?: '7 Days'); ?></span>
                        <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat2_label', true) ?: 'Average Delivery Time'); ?></span>
                    </div>
                    <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                        <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat3_number', true) ?: '23%'); ?></span>
                        <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_stat3_label', true) ?: 'Average Conversion Rate'); ?></span>
                    </div>                    <div class="overview-cta animate-on-scroll animate-fade-up" style="margin-top: 30px; text-align: center;">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get a Free Landing Page Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section id="case-study" class="case-study-showcase">
        <div class="container">
            <div class="case-study-wrapper">
                <!-- Header -->
                <div class="case-study-intro animate-on-scroll animate-fade-up">
                    <div class="case-study-badge">
                        <span class="badge-icon">📈</span>
                        <span class="badge-text">Success Story</span>
                    </div>
                    <h2 class="case-study-title"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_case_study_title', true) ?: 'How FitLife Academy Increased Course Sales by <span class="highlight-number">485%</span>'); ?></h2>
                    <p class="case-study-subtitle">Transforming a struggling course sales page into a high-converting revenue generator</p>
                </div>

                <!-- Story Flow -->
                <div class="case-study-flow">
                    <!-- Challenge -->
                    <div class="story-section challenge-section animate-on-scroll animate-slide-left">
                        <div class="section-header">
                            <div class="section-icon challenge-icon">⚡</div>
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_case_study_subtitle', true) ?: 'The Challenge'); ?></h3>
                        </div>
                        <div class="section-content">
                            <p class="story-text"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_case_study_challenge', true) ?: 'FitLife Academy was driving quality traffic from Facebook ads but experiencing a disappointing 2.3% conversion rate. Despite investing heavily in paid advertising, unclear messaging and poor page structure were causing them to lose potential customers at the final hurdle.'); ?></p>
                            <div class="inline-metrics">
                                <div class="metric-item">
                                    <span class="metric-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_stat1_number', true) ?: '2.3%'); ?></span>
                                    <span class="metric-text"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_stat1_label', true) ?: 'Conversion Rate'); ?></span>
                                </div>
                                <div class="metric-item">
                                    <span class="metric-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_stat2_number', true) ?: '£8.50'); ?></span>
                                    <span class="metric-text"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_stat2_label', true) ?: 'Cost per Lead'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Arrow -->
                    <div class="story-arrow animate-on-scroll animate-scale-up">
                        <div class="arrow-icon">↓</div>
                        <span class="arrow-text">Our Approach</span>
                    </div>

                    <!-- Solution -->
                    <div class="story-section solution-section animate-on-scroll animate-slide-right">
                        <div class="section-header">
                            <div class="section-icon solution-icon">🎯</div>
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_case_study_solution_title', true) ?: 'Strategic Transformation'); ?></h3>
                        </div>
                        <div class="section-content">
                            <?php 
                            $solution_content = get_post_meta(get_the_ID(), 'lp_case_study_solution', true);
                            if ($solution_content) {
                                echo '<div class="solution-text">' . wp_kses_post($solution_content) . '</div>';
                            } else { ?>
                            <div class="solution-grid">
                                <div class="solution-item">
                                    <strong>Message-Match Optimisation</strong>
                                    <p>Aligned landing page copy with ad messaging for seamless user experience</p>
                                </div>
                                <div class="solution-item">
                                    <strong>Clear Value Proposition</strong>
                                    <p>Highlighted unique benefits and transformation outcomes</p>
                                </div>
                                <div class="solution-item">
                                    <strong>Social Proof Integration</strong>
                                    <p>Added compelling testimonials and success stories</p>
                                </div>
                                <div class="solution-item">
                                    <strong>Mobile Optimisation</strong>
                                    <p>Enhanced experience for 70% mobile traffic</p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- Arrow -->
                    <div class="story-arrow animate-on-scroll animate-scale-up">
                        <div class="arrow-icon">↓</div>
                        <span class="arrow-text">The Results</span>
                    </div>

                    <!-- Results -->
                    <div class="story-section results-section animate-on-scroll animate-fade-up">
                        <div class="section-header">
                            <div class="section-icon results-icon">🚀</div>
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_case_study_results_title', true) ?: 'Exceptional Results'); ?></h3>
                        </div>
                        <div class="section-content">
                            <div class="results-showcase">
                                <div class="primary-result">
                                    <span class="big-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_result1_number', true) ?: '485%'); ?></span>
                                    <span class="big-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_result1_label', true) ?: 'Increase in Course Sales'); ?></span>
                                </div>
                                <div class="secondary-results">
                                    <div class="result-stat">
                                        <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_result2_number', true) ?: '13.4%'); ?></span>
                                        <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_result2_label', true) ?: 'New Conversion Rate'); ?></span>
                                    </div>
                                    <div class="result-stat">
                                        <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_result3_number', true) ?: '£2.10'); ?></span>
                                        <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_result3_label', true) ?: 'Reduced Cost per Lead'); ?></span>
                                    </div>
                                    <div class="result-stat">
                                        <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_result4_number', true) ?: '£340K'); ?></span>
                                        <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'lp_case_study_result4_label', true) ?: 'Additional Annual Revenue'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                </div>

                <!-- Call to Action -->
                <div class="case-study-cta-redesigned animate-on-scroll animate-fade-up">
                    <div class="cta-container">
                        <div class="cta-icon">
                            <span class="success-emoji">🎯</span>
                        </div>
                        <div class="cta-text-content">
                            <h4 class="cta-headline">Ready for Similar Results?</h4>
                            <p class="cta-description">Let's transform your landing pages into high-converting revenue generators</p>
                        </div>
                        <div class="cta-action">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary cta-btn-enhanced">Get Your Landing Page Strategy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Landing Page Types -->
    <section class="landing-page-types">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_types_title', true) ?: 'Types of Landing Pages We Create'); ?></h2>
            
            <div class="types-grid">
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-magnet"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_type1_title', true) ?: 'Lead Generation Pages'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_type1_description', true) ?: 'Capture high-quality leads with compelling offers and optimised forms that convert visitors into prospects.'); ?></p>
                    <?php 
                    $type1_items = get_post_meta(get_the_ID(), 'lp_type1_items', true);
                    if ($type1_items) {
                        // Convert line breaks to list items for better display
                        $items = array_filter(explode("\n", $type1_items));
                        if (!empty($items)) {
                            echo '<ul>';
                            foreach ($items as $item) {
                                echo '<li>' . esc_html(trim($item)) . '</li>';
                            }
                            echo '</ul>';
                        }
                    } else { ?>
                    <ul>
                        <li>E-book downloads</li>
                        <li>Free trial signups</li>
                        <li>Newsletter subscriptions</li>
                        <li>Consultation bookings</li>
                    </ul>
                    <?php } ?>
                </div>
                
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_type2_title', true) ?: 'Sales Pages'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_type2_description', true) ?: 'Drive direct sales with persuasive copy, social proof, and clear purchasing pathways that convert browsers into buyers.'); ?></p>
                    <?php 
                    $type2_items = get_post_meta(get_the_ID(), 'lp_type2_items', true);
                    if ($type2_items) {
                        $items = array_filter(explode("\n", $type2_items));
                        if (!empty($items)) {
                            echo '<ul>';
                            foreach ($items as $item) {
                                echo '<li>' . esc_html(trim($item)) . '</li>';
                            }
                            echo '</ul>';
                        }
                    } else { ?>
                    <ul>
                        <li>Product sales pages</li>
                        <li>Course enrollment</li>
                        <li>Service bookings</li>
                        <li>Membership signups</li>
                    </ul>
                    <?php } ?>
                </div>
                
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_type3_title', true) ?: 'Event Registration'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_type3_description', true) ?: 'Maximize event attendance with compelling event pages that highlight value and simplify registration.'); ?></p>
                    <?php 
                    $type3_items = get_post_meta(get_the_ID(), 'lp_type3_items', true);
                    if ($type3_items) {
                        $items = array_filter(explode("\n", $type3_items));
                        if (!empty($items)) {
                            echo '<ul>';
                            foreach ($items as $item) {
                                echo '<li>' . esc_html(trim($item)) . '</li>';
                            }
                            echo '</ul>';
                        }
                    } else { ?>
                    <ul>
                        <li>Webinar registration</li>
                        <li>Workshop signups</li>
                        <li>Conference tickets</li>
                        <li>Product launches</li>
                    </ul>
                    <?php } ?>
                </div>
                  <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_type4_title', true) ?: 'App Download Pages'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_type4_description', true) ?: 'Increase app downloads with focused pages that showcase features, benefits, and social proof.'); ?></p>
                    <?php 
                    $type4_items = get_post_meta(get_the_ID(), 'lp_type4_items', true);
                    if ($type4_items) {
                        $items = array_filter(explode("\n", $type4_items));
                        if (!empty($items)) {
                            echo '<ul>';
                            foreach ($items as $item) {
                                echo '<li>' . esc_html(trim($item)) . '</li>';
                            }
                            echo '</ul>';
                        }
                    } else { ?>
                    <ul>
                        <li>Mobile app promotion</li>
                        <li>Software downloads</li>
                        <li>Tool installations</li>
                        <li>Game launches</li>
                    </ul>
                    <?php } ?>
                </div>
                
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Contest & Giveaway Pages</h3>
                    <p>Boost engagement and grow your audience with exciting contest pages that encourage participation and sharing.</p>
                    <ul>
                        <li>Social media contests</li>
                        <li>Prize giveaways</li>
                        <li>Viral campaigns</li>
                        <li>Brand awareness contests</li>
                    </ul>
                </div>
                
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Partner & Affiliate Pages</h3>
                    <p>Convert visitors into partners and affiliates with dedicated pages that highlight program benefits and opportunities.</p>
                    <ul>
                        <li>Affiliate program signups</li>
                        <li>Partnership applications</li>
                        <li>Reseller programs</li>
                        <li>Referral campaigns</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>    <!-- Design Process -->
    <section class="design-process">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'lp_process_title', true) ?: 'Our Landing Page Creation Process'); ?></h2>
            
            <div class="process-timeline">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number"><?php echo esc_html(get_post_meta(get_the_ID(), "lp_process{$i}_number", true) ?: $i); ?></div>
                    <div class="step-content">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), "lp_process{$i}_title", true) ?: 'Step ' . $i); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), "lp_process{$i}_description", true) ?: 'Description for step ' . $i); ?></p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Landing Page Packages</h2>
                <p>Fast, effective landing pages designed to convert your traffic into customers.</p>
            </div>
            
            <div class="pricing-grid">
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Single Landing Page</h3>
                        <div class="price">£997</div>
                        <p>Perfect for single campaigns</p>
                    </div>
                    <ul class="pricing-features">
                        <li>1 custom landing page</li>
                        <li>Mobile-responsive design</li>
                        <li>Lead capture form</li>
                        <li>Basic analytics setup</li>
                        <li>1 round of revisions</li>
                        <li>7-day delivery</li>
                        <li>14 days support</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>                </div>
                  <div class="pricing-card featured animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Landing Page Bundle</h3>
                        <div class="price">£2,497</div>
                        <p>Ideal for multiple campaigns</p>
                    </div>
                    <ul class="pricing-features">
                        <li>3 custom landing pages</li>
                        <li>Advanced mobile optimisation</li>
                        <li>Multi-step forms</li>
                        <li>Conversion tracking setup</li>
                        <li>A/B testing setup</li>
                        <li>CRM integration</li>
                        <li>2 rounds of revisions</li>
                        <li>10-day delivery</li>
                        <li>30 days support</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>                </div>
                
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="pricing-header">
                        <h3>Funnel Series</h3>
                        <div class="price">£4,997</div>
                        <p>Complete conversion funnel</p>
                    </div>
                    <ul class="pricing-features">
                        <li>5+ landing pages</li>
                        <li>Complete sales funnel</li>
                        <li>Advanced integrations</li>
                        <li>Email automation setup</li>
                        <li>Payment processing</li>
                        <li>Comprehensive analytics</li>
                        <li>Unlimited revisions</li>
                        <li>14-day delivery</li>
                        <li>60 days support</li>
                        <li>Ongoing optimisation</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>    <!-- Conversion Elements -->
    <section class="lead-generation-methods">
        <div class="container">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Essential Conversion Elements We Include</h2>
            </div>
              <div class="methods-grid">
                <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="method-content">
                        <h3>Compelling Headlines</h3>
                        <p>Attention-grabbing headlines that clearly communicate value and capture interest immediately.</p>
                    </div>
                </div>
                
                <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="method-content">
                        <h3>Social Proof</h3>
                        <p>Testimonials, reviews, trust badges, and customer logos that build credibility and trust.</p>
                    </div>
                </div>
                
                <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="method-content">
                        <h3>Clear CTAs</h3>
                        <p>Strategic call-to-action buttons that stand out and guide visitors toward conversion.</p>
                    </div>
                </div>
                
                <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="method-content">
                        <h3>Urgency & Scarcity</h3>
                        <p>Time-sensitive offers and limited availability messaging that motivates immediate action.</p>
                    </div>
                </div>
                
                <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="method-content">
                        <h3>Risk Reversal</h3>
                        <p>Money-back guarantees and risk-free offers that remove barriers to conversion.</p>
                    </div>
                </div>
                  <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="method-content">
                        <h3>Benefit-Focused Copy</h3>
                        <p>Persuasive copy that focuses on benefits and outcomes rather than features.</p>
                    </div>
                </div>
                
                <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="method-content">
                        <h3>Visual Hierarchy</h3>
                        <p>Strategic layout design that guides visitor attention and creates a clear path to conversion.</p>
                    </div>
                </div>
                
                <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="method-content">
                        <h3>Mobile Optimisation</h3>
                        <p>Responsive design that delivers exceptional user experience across all devices and screen sizes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Industries -->
    <section class="industries-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Industries We Serve</h2>
            <div class="industries-grid">
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <i class="fas fa-laptop-code"></i>
                    <h3>SaaS & Technology</h3>
                    <p>Free trial pages, demo requests, and software download pages</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Education & Training</h3>
                    <p>Course enrollment, webinar registration, and certification signups</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <i class="fas fa-dumbbell"></i>
                    <h3>Health & Fitness</h3>
                    <p>Program signups, consultation bookings, and membership sales</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <i class="fas fa-shopping-bag"></i>
                    <h3>E-commerce</h3>
                    <p>Product launches, promotional campaigns, and seasonal sales</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <i class="fas fa-briefcase"></i>
                    <h3>Professional Services</h3>
                    <p>Lead generation, consultation bookings, and service inquiries</p>
                </div>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <i class="fas fa-home"></i>
                    <h3>Real Estate</h3>
                    <p>Property listings, buyer/seller leads, and market reports</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">What Our Clients Say</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"Our new landing page converted at 13.4% compared to our old page's 2.3%. The ROI was immediate and substantial."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Jessica Martinez</strong>
                        <span>Founder, FitLife Academy</span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"Aimpro's landing pages have been instrumental in scaling our lead generation. We're now getting 5x more qualified leads."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Robert Taylor</strong>
                        <span>CMO, TechFlow Solutions</span>
                    </div>
                </div>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p>"The attention to detail and conversion optimisation expertise is outstanding. Our webinar attendance increased by 280%."</p>
                    </div>
                    <div class="testimonial-author">
                        <strong>Amanda Collins</strong>
                        <span>Marketing Director, InnovateCorps</span>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- FAQ Section -->
    <section class="seo-faqs">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Frequently Asked Questions</h2>
            <div class="faq-list">
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">How quickly can you deliver a landing page?</button>
                    <div class="faq-answer">
                        <p>Single landing pages can be delivered in 7 days, while more complex funnels take 10-14 days. Rush delivery is available for urgent campaigns.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">Do you write the copy for landing pages?</button>
                    <div class="faq-answer">
                        <p>Yes, our packages include conversion-optimised copywriting. We can also work with your existing copy if you prefer.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">Can you integrate with my CRM or email platform?</button>
                    <div class="faq-answer">
                        <p>Absolutely! We integrate with all major CRMs, email platforms, and marketing automation tools to ensure seamless lead capture.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">Do you provide A/B testing setup?</button>
                    <div class="faq-answer">
                        <p>Yes, our Professional and Funnel packages include A/B testing setup to help you continuously optimise conversion rates.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">What if my landing page doesn't convert well?</button>
                    <div class="faq-answer">
                        <p>We provide ongoing optimisation support and can make data-driven improvements to enhance performance based on actual results.</p>
                    </div>
                </div>
                <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                    <button class="faq-question">Can I make changes after the page is live?</button>
                    <div class="faq-answer">
                        <p>Yes, all packages include support periods for changes. We also offer maintenance packages for ongoing updates and optimisation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-scale-up">
                <h2 class="animate-on-scroll animate-fade-up">Ready to Build Landing Pages That Convert?</h2>
                <p class="animate-on-scroll animate-fade-up">Get a free consultation and discover how high-converting landing pages can transform your marketing campaigns.</p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free Quote</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Modern Case Study Showcase Styles */
.case-study-showcase {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 4rem 0;
    position: relative;
    overflow: hidden;
}

.case-study-showcase::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    pointer-events: none;
}

.case-study-wrapper {
    position: relative;
    z-index: 2;
}

.case-study-intro {
    text-align: center;
    margin-bottom: 3rem;
}

.case-study-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(13, 110, 253, 0.1);
    border: 1px solid rgba(13, 110, 253, 0.2);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    margin-bottom: 1rem;
    font-size: 0.9rem;
    font-weight: 600;
    color: #0d6efd;
}

.case-study-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.2;
}

.highlight-number {
    color: #28a745;
    background: linear-gradient(135deg, #28a745, #20c997);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.case-study-subtitle {
    font-size: 1.2rem;
    color: #6c757d;
    max-width: 600px;
    margin: 0 auto;
}

.case-study-flow {
    max-width: 800px;
    margin: 0 auto;
}

.story-section {
    background: white;
    border-radius: 16px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    border-left: 4px solid transparent;
}

.challenge-section {
    border-left-color: #dc3545;
}

.solution-section {
    border-left-color: #0d6efd;
}

.results-section {
    border-left-color: #28a745;
}

.section-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.section-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
}

.challenge-icon {
    background: rgba(220, 53, 69, 0.1);
    color: #dc3545;
}

.solution-icon {
    background: rgba(13, 110, 253, 0.1);
    color: #0d6efd;
}

.results-icon {
    background: rgba(40, 167, 69, 0.1);
    color: #28a745;
}

.section-header h3 {
    margin: 0;
    font-size: 1.5rem;
    font-weight: 600;
}

.story-text {
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.inline-metrics {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
}

.metric-item {
    text-align: center;
}

.metric-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: #dc3545;
}

.metric-text {
    font-size: 0.9rem;
    color: #6c757d;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.solution-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
}

.solution-item {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 12px;
    border-left: 3px solid #0d6efd;
}

.solution-item strong {
    display: block;
    margin-bottom: 0.5rem;
    color: #0d6efd;
    font-weight: 600;
}

.story-arrow {
    text-align: center;
    margin: 2rem 0;
}

.arrow-icon {
    font-size: 2rem;
    color: #6c757d;
    margin-bottom: 0.5rem;
}

.arrow-text {
    display: block;
    font-size: 0.9rem;
    color: #6c757d;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.results-showcase {
    text-align: center;
}

.primary-result {
    margin-bottom: 2rem;
}

.big-number {
    display: block;
    font-size: 4rem;
    font-weight: 800;
    color: #28a745;
    line-height: 1;
}

.big-label {
    font-size: 1.2rem;
    color: #495057;
    font-weight: 600;
}

.secondary-results {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1.5rem;
}

.result-stat {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 12px;
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 1.8rem;
    font-weight: 700;
    color: #28a745;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-size: 0.9rem;
    color: #6c757d;
}

.case-study-cta-redesigned {
    margin-top: 3rem;
}

.cta-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: linear-gradient(135deg, #0d6efd 0%, #0056b3 100%);
    color: white;
    padding: 2rem 2.5rem;
    border-radius: 20px;
    box-shadow: 0 8px 32px rgba(13, 110, 253, 0.3);
    max-width: 1000px;
    margin: 0 auto;
    gap: 2rem;
}

.cta-icon {
    flex-shrink: 0;
}

.success-emoji {
    font-size: 3rem;
    display: block;
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
}

.cta-text-content {
    flex: 1;
    text-align: left;
}

.cta-headline {
    font-size: 1.75rem;
    font-weight: 700;
    margin: 0 0 0.5rem 0;
    color: white;
}

.cta-description {
    font-size: 1.1rem;
    margin: 0;
    opacity: 0.9;
    line-height: 1.4;
}

.cta-action {
    flex-shrink: 0;
}

.cta-btn-enhanced {
    background: white;
    color: #0d6efd;
    border: none;
    padding: 1rem 2rem;
    border-radius: 12px;
    font-weight: 600;
    font-size: 1rem;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    white-space: nowrap;
}

.cta-btn-enhanced:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    color: #0d6efd;
    text-decoration: none;
}

/* Remove old CTA styles */
.case-study-cta {
    display: none;
}

/* Mobile CSS for Conversion Elements Section */
@media (max-width: 768px) {
    /* Essential Conversion Elements Section */
    .methods-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .method-card {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        text-align: center !important;
    }
    
    .method-content h3 {
        color: #f15a25 !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .method-content p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
    }
    
    /* Section header */
    .section-content h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
    }
}

@media (max-width: 768px) {
    .cta-container {
        flex-direction: column;
        text-align: center;
        padding: 2rem 1.5rem;
        gap: 1.5rem;
    }
    
    .cta-text-content {
        text-align: center;
    }
    
    .cta-headline {
        font-size: 1.5rem;
    }
    
    .cta-description {
        font-size: 1rem;
    }
    
    .success-emoji {
        font-size: 2.5rem;
    }
    
    .cta-btn-enhanced {
        padding: 1rem 1.5rem;
        width: 100%;
        max-width: 280px;
    }
}

@media (max-width: 768px) {
    .case-study-title {
        font-size: 2rem;
    }
    
    .big-number {
        font-size: 3rem;
    }
    
    .inline-metrics {
        justify-content: center;
    }
    
    .story-section {
        padding: 1.5rem;
    }
    
    .solution-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>
