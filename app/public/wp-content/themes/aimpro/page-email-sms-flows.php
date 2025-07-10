<?php
/**
 * Template Name: Email & SMS Flows
 * 
 * Email & SMS automation flows services page
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="service-page email-sms-flows-page">
    
    <?php
    // Check if there's content in the WordPress editor
    if (have_posts()) :
        while (have_posts()) : the_post();
            $content = get_the_content();
            if (!empty(trim($content))) :
                // If there's content in the editor, display it instead of the hardcoded content
                ?>
                <div class="container">
                    <div class="page-content">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php
                get_footer();
                return; // Exit early to avoid showing the hardcoded content
            endif;
        endwhile;
    endif;
    // If no content in editor, show the hardcoded template below
    ?>
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/marketing-automation'); ?>">Marketing Automation</a>
                <span class="separator">›</span>
                <span class="current">Email & SMS Flows</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_hero_title', true) ?: 'Email & SMS Automation Flows'); ?></h1>
                <p class="hero-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_hero_subtitle', true) ?: 'Create sophisticated multi-channel communication sequences that nurture leads, recover abandoned carts, and build lasting customer relationships through intelligent email and SMS automation.'); ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_hero_stat_1_number', true) ?: '580%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_hero_stat_1_label', true) ?: 'Revenue Per Email Increase'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_hero_stat_2_number', true) ?: '45%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_hero_stat_2_label', true) ?: 'Higher SMS Open Rates'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_hero_stat_3_number', true) ?: '320%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_hero_stat_3_label', true) ?: 'Cart Recovery Improvement'); ?></div>
                    </div>
                </div>                <div class="hero-ctas animate-on-scroll animate-fade-up">
                    <a href="#contact" class="btn-primary streamlined"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_hero_button', true) ?: 'Build Your Flows'); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content animate-on-scroll animate-fade-up">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_overview_title', true) ?: 'Intelligent Multi-Channel Communication'); ?></h2>
                <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_overview_description', true) ?: 'Transform one-time visitors into loyal customers with strategically designed email and SMS automation flows. Our data-driven approach ensures the right message reaches the right person at the perfect moment, maximising engagement and conversions.'); ?></p>
            </div>
            
            <div class="services-grid">
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_1_title', true) ?: 'Welcome Email Series'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_1_desc', true) ?: 'Onboard new subscribers with engaging welcome sequences that build trust and drive first purchases.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_2_title', true) ?: 'Abandoned Cart Recovery'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_2_desc', true) ?: 'Multi-step email and SMS sequences that recover lost sales with personalised product reminders and incentives.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_3_title', true) ?: 'SMS Marketing Automation'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_3_desc', true) ?: 'High-impact SMS campaigns for time-sensitive offers, shipping updates, and urgent customer communications.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_4_title', true) ?: 'Lead Nurturing Sequences'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_4_desc', true) ?: 'Educational and value-driven email flows that guide prospects through your sales funnel over time.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_5_title', true) ?: 'Re-engagement Campaigns'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_5_desc', true) ?: 'Win back inactive subscribers and customers with targeted campaigns designed to rekindle interest.'); ?></p>
                </div>
                
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_6_title', true) ?: 'VIP Customer Flows'); ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_service_6_desc', true) ?: 'Exclusive communications for high-value customers with special offers and premium experiences.'); ?></p>
                </div>            </div>
        </div>
    </section>

    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text animate-on-scroll animate-slide-left">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_case_title', true) ?: 'Case Study: E-commerce Revenue Recovery'); ?></h2>
                    <p class="case-study-intro"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_case_intro', true) ?: 'How we helped an online fashion retailer increase revenue per email by 580% and recover 320% more abandoned carts through strategic email and SMS automation flows.'); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_case_challenge', true) ?: 'A growing fashion e-commerce brand was losing 78% of potential customers to cart abandonment and had low customer lifetime value. Their basic email marketing generated minimal revenue, and they had no SMS strategy to complement their efforts.'); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Flow Strategy</h3>
                        <?php 
                        $solutions = get_post_meta(get_the_ID(), 'email_sms_flows_case_solution', true);
                        if (empty($solutions)) {
                            $solutions = "Designed 12-email welcome series with fashion styling tips and progressive discounts\nCreated 5-step abandoned cart recovery flow with SMS integration\nBuilt browse abandonment flows for window shoppers\nImplemented post-purchase upsell and review request sequences\nDeveloped VIP customer program with exclusive SMS alerts";
                        }
                        $solution_list = explode("\n", $solutions);
                        echo '<ul>';
                        foreach ($solution_list as $solution) {
                            if (!empty(trim($solution))) {
                                echo '<li>' . wp_kses_post(trim($solution)) . '</li>';
                            }
                        }
                        echo '</ul>';
                        ?>
                    </div>
                </div>
                
                <div class="case-study-results animate-on-scroll animate-slide-right">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_result_1_number', true) ?: '580%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_result_1_label', true) ?: 'Revenue Per Email Increase'); ?></div>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_result_2_number', true) ?: '320%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_result_2_label', true) ?: 'Cart Recovery Improvement'); ?></div>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_result_3_number', true) ?: '45%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_result_3_label', true) ?: 'SMS Open Rate'); ?></div>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_result_4_number', true) ?: '£185K'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'email_sms_flows_result_4_label', true) ?: 'Additional Monthly Revenue'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Flow Types Section -->
    <section class="whitelabel-services">
        <div class="section-content">
            <h2 class="animate-on-scroll animate-fade-up">Types of Automation Flows We Build</h2>
            <div class="whitelabel-services-grid">
                <div class="whitelabel-service-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-play"></i>
                    </div>
                    <h3>Welcome & Onboarding</h3>
                    <p>Multi-touch sequences that introduce your brand, build trust, and guide new subscribers toward their first purchase.</p>
                    <div class="service-metric">
                        <strong>Average: 4x higher engagement</strong>
                    </div>
                </div>
                
                <div class="whitelabel-service-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3>Abandonment Recovery</h3>
                    <p>Cart, browse, and checkout abandonment flows with strategic timing and personalised product recommendations.</p>
                    <div class="service-metric">
                        <strong>Average: 25% cart recovery rate</strong>
                    </div>
                </div>
                
                <div class="whitelabel-service-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Educational Nurturing</h3>
                    <p>Value-driven content sequences that educate prospects and position your brand as the trusted solution.</p>
                    <div class="service-metric">
                        <strong>Average: 65% lead-to-customer rate</strong>
                    </div>
                </div>
                
                <div class="whitelabel-service-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <h3>Lifecycle & Milestone</h3>
                    <p>Birthday, anniversary, and customer milestone campaigns that strengthen relationships and drive repeat purchases.</p>
                    <div class="service-metric">
                        <strong>Average: 8x higher CTR</strong>
                    </div>
                </div>
                
                <div class="whitelabel-service-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Win-Back Campaigns</h3>
                    <p>Re-engagement flows for inactive subscribers and lapsed customers with compelling comeback offers.</p>
                    <div class="service-metric">
                        <strong>Average: 12% reactivation rate</strong>
                    </div>
                </div>
                
                <div class="whitelabel-service-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Review & Referral</h3>
                    <p>Post-purchase sequences that encourage reviews, referrals, and social sharing to drive organic growth.</p>
                    <div class="service-metric">
                        <strong>Average: 35% review generation rate</strong>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Our Flow Development Process</h2>
            <div class="process-steps">
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Customer Journey Mapping</h3>
                        <p>analyse your customer touchpoints and identify key moments where automation can drive engagement and conversions.</p>
                    </div>
                </div>
                
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Flow Strategy Design</h3>
                        <p>Create detailed flow maps with timing, triggers, and branching logic based on customer behaviour and preferences.</p>
                    </div>
                </div>
                
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Content Creation</h3>
                        <p>Develop compelling email and SMS content with persuasive copy, engaging visuals, and clear calls-to-action.</p>
                    </div>
                </div>
                
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Technical Implementation</h3>
                        <p>Build and configure automation flows with proper tracking, segmentation, and cross-channel coordination.</p>
                    </div>
                </div>
                
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Testing & optimisation</h3>
                        <p>A/B test flow performance and continuously optimise timing, content, and triggers for maximum effectiveness.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Tools & Platforms -->
    <section class="whitelabel-benefits">
        <div class="section-content">
            <h2 class="animate-on-scroll animate-fade-up">Platforms We Use</h2>
            <div class="benefits-grid benefits-grid-4">
                <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="benefit-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Klaviyo</h3>
                    <p>Advanced e-commerce email and SMS automation with powerful segmentation and predictive analytics.</p>
                </div>
                
                <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="benefit-icon">
                        <i class="fab fa-mailchimp"></i>
                    </div>
                    <h3>Mailchimp</h3>
                    <p>User-friendly email marketing platform with automation workflows and basic SMS capabilities.</p>
                </div>
                
                <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="benefit-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>ActiveCampaign</h3>
                    <p>Comprehensive marketing automation with CRM integration and advanced behavioural targeting.</p>
                </div>
                
                <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="benefit-icon">
                        <i class="fab fa-hubspot"></i>
                    </div>
                    <h3>HubSpot</h3>
                    <p>Full-featured marketing hub with email automation, SMS, and comprehensive customer journey mapping.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Benefits Section -->
    <section class="whitelabel-benefits">
        <div class="section-content">
            <h2 class="animate-on-scroll animate-fade-up">Why Email & SMS Automation Works</h2>
            <div class="benefits-grid benefits-grid-4">
                <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="benefit-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Perfect Timing</h3>
                    <p>Reach customers at the optimal moment based on their behaviour and engagement patterns.</p>
                </div>
                
                <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="benefit-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3>personalisation</h3>
                    <p>Deliver highly relevant messages based on purchase history, preferences, and behaviour data.</p>
                </div>
                
                <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Scalability</h3>
                    <p>Automate personal communication at scale without increasing manual workload.</p>
                </div>
                
                <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="benefit-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>High ROI</h3>
                    <p>Email automation delivers $42 for every $1 spent, while SMS achieves 98% open rates.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content animate-on-scroll animate-fade-up">
                <blockquote>
                    <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_testimonial_quote', true) ?: 'Our email and SMS flows are now our most profitable marketing channel. Aimpro\'s automation strategy increased our revenue per email by 580% and we\'re recovering 3x more abandoned carts. The ROI is incredible.'); ?>
                </blockquote>
                <cite>
                    <strong><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_testimonial_author', true) ?: 'Sophie Chen'); ?></strong><br>
                    <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_testimonial_position', true) ?: 'Marketing Director, StyleBox Fashion'); ?>
                </cite>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-scale-up">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_cta_title', true) ?: 'Ready to Build Revenue-Generating Automation Flows?'); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_cta_description', true) ?: 'Stop leaving money on the table with basic email marketing. Our sophisticated email and SMS automation flows will turn your subscriber list into a predictable revenue engine that works 24/7.'); ?></p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-outline" style="background-colour: white; colour: #333; border: 2px solid white;"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'email_sms_flows_cta_button', true) ?: 'Build Your Flows'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
