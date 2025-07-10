<?php
/**
 * Template Name: Sales Funnel Development
 * 
 * Sales Funnel Development Services
 *
 * @package Aimpro
 */

get_header(); ?>

<style>
.tools-section .tool-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto 15px;
}
.tools-section .tool-icon i {
    font-size: 2.5rem;
}
.tools-section .tools-category {
    margin-top: 50px;
    margin-bottom: 30px;
    padding: 20px 0;
    position: relative;
    font-size: 1.8rem;
}
.tools-section .tools-grid {
    margin-bottom: 50px;
}
.tools-section .section-header {
    margin-bottom: 50px;
    padding-top: 20px;
}

/* Fix for Font Awesome icons in type cards */
.type-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 64px;
    height: 64px;
    margin: 0 auto 15px;
    background: var(--primary-orange, #f15a25);
    border-radius: 12px;
    color: white;
}

.type-icon i {
    font-size: 2rem;
    color: white !important;
}

/* Fix for extra icons in funnel type lists */
.type-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.type-card li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 0.5rem;
    line-height: 1.5;
}

.type-card li:before {
    content: '✓';
    position: absolute;
    left: 0;
    top: 0;
    color: var(--primary-orange, #f15a25);
    font-weight: bold;
    width: auto;
    height: auto;
    background-image: none !important;
    background: none !important;
}

/* FAQ Section Styles - Reduced Font Size */
.faq-section {
    padding: 60px 0;
    background: #f8fafc;
}

.faq-section h2 {
    font-size: 1.8rem;
    margin-bottom: 30px;
    color: var(--text-dark);
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background: white;
    border-radius: 8px;
    margin-bottom: 15px;
    border: 1px solid #e2e8f0;
    transition: box-shadow 0.3s ease;
}

.faq-item:hover {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.faq-question {
    padding: 15px 20px;
    cursor: pointer;
    border-bottom: 1px solid #e2e8f0;
    position: relative;
}

.faq-question::after {
    content: '+';
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.2rem;
    font-weight: bold;
    color: var(--primary-color);
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question::after {
    transform: translateY(-50%) rotate(45deg);
}

.faq-question h3 {
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--text-dark);
    margin: 0;
    line-height: 1.4;
    padding-right: 30px;
}

.faq-answer {
    padding: 0 20px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
}

.faq-item.active .faq-answer {
    padding: 15px 20px;
    max-height: 200px;
}

.faq-answer p {
    font-size: 0.85rem;
    line-height: 1.5;
    color: #64748b;
    margin: 0;
}
</style>

<main id="primary" class="funnel-builds-page">
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
                <span class="current">Sales Funnel Development</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="service-hero">
        <div class="container">
            <div class="service-hero-content animate-on-scroll animate-fade-up">                <div class="hero-text">
                    <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_hero_title', true)) ?: 'Sales Funnel Development'; ?></h1>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_hero_subtitle', true)) ?: 'Transform visitors into customers with strategic sales funnels that guide prospects through each stage of the buying journey.'; ?></p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_stat1_number', true)) ?: '420%'; ?></span>
                            <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_stat1_label', true)) ?: 'Average Sales Velocity Increase'; ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_stat2_number', true)) ?: '68%'; ?></span>
                            <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_stat2_label', true)) ?: 'Lead-to-Customer Rate'; ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_stat3_number', true)) ?: '3.2x'; ?></span>
                            <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_stat3_label', true)) ?: 'Average Revenue Per Visitor'; ?></span>
                        </div>
                    </div>                    <div class="hero-cta">
                        <a href="#contact" class="btn-primary"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_cta_primary', true)) ?: 'Get Funnel Quote'; ?></a>
                        <a href="#funnel-types" class="btn-outline"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_cta_secondary', true)) ?: 'View Funnel Types'; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_intro_title', true)) ?: 'Sales Funnels That Drive Consistent Results'; ?></h2>
                <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_intro_description', true)) ?: 'Strategic sales funnel development that guides prospects through each stage of the customer journey with precision and purpose.'; ?></p>
            </div>
              <div class="features-grid">
                <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_feature1_title', true)) ?: 'End-to-End Journey Mapping'; ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_feature1_description', true)) ?: 'Comprehensive customer journey design that targets each stage of awareness with appropriate messaging and offers.'; ?></p>
                </div>
                <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_feature2_title', true)) ?: 'Behaviour-Based Automation'; ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_feature2_description', true)) ?: 'Intelligent automation that responds to user behaviour and personalises the experience to increase conversion rates.'; ?></p>
                </div>
                <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_feature3_title', true)) ?: 'Multi-Channel Integration'; ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_feature3_description', true)) ?: 'Seamless integration across email, SMS, and retargeting to maintain engagement throughout the sales process.'; ?></p>
                </div>
                <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_feature4_title', true)) ?: 'Conversion Optimisation'; ?></h3>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_feature4_description', true)) ?: 'Continuous testing and refinement to maximise conversions at each step of your sales funnel.'; ?></p>
                </div>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section id="case-study" class="case-study-section">
        <div class="container">
            <div class="case-study-content">                <div class="case-study-header animate-on-scroll animate-fade-up">
                    <span class="case-study-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_case_study_subtitle', true)) ?: 'Case Study'; ?></span>
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_case_study_title', true)) ?: 'How DigitalCourse Pro Generated £540K in 90 Days with a Strategic Sales Funnel'; ?></h2>
                </div>
                
                <div class="case-study-grid">
                    <div class="case-study-challenge animate-on-scroll animate-slide-left">                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_case_study_challenge', true)) ?: 'DigitalCourse Pro was struggling to convert their high-quality traffic into course sales. They had a single sales page that wasn\'t building enough trust or demonstrating value before asking for a £2,000 course purchase.'; ?></p>
                        
                        <div class="challenge-metrics">
                            <div class="metric animate-on-scroll animate-stagger animate-scale-up">
                                <span class="metric-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_stat1_number', true)) ?: '1.8%'; ?></span>
                                <span class="metric-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_stat1_label', true)) ?: 'Conversion Rate'; ?></span>
                            </div>
                            <div class="metric animate-on-scroll animate-stagger animate-scale-up">
                                <span class="metric-value"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_stat2_number', true)) ?: '£890'; ?></span>
                                <span class="metric-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_stat2_label', true)) ?: 'Monthly Revenue'; ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="case-study-solution animate-on-scroll animate-slide-right">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_case_study_solution_title', true)) ?: 'Our Solution'; ?></h3>
                        <ul>
                            <?php 
                            $solutions = get_post_meta(get_the_ID(), 'fb_case_study_solution', true);
                            if (!empty($solutions)) {
                                $solution_lines = explode("\n", $solutions);
                                foreach ($solution_lines as $line) {
                                    if (!empty(trim($line))) {
                                        echo '<li>' . esc_html(trim($line)) . '</li>';
                                    }
                                }
                            } else {
                                echo '<li><strong>Lead Magnet Funnel:</strong> Created valuable free course to capture email addresses</li>';
                                echo '<li><strong>Nurture Sequence:</strong> 7-day email series building trust and demonstrating expertise</li>';
                                echo '<li><strong>Webinar Funnel:</strong> Live training sessions showcasing course value</li>';
                                echo '<li><strong>Sales Page optimisation:</strong> High-converting sales page with social proof</li>';
                                echo '<li><strong>Upsell System:</strong> Additional products and coaching offers post-purchase</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                  <div class="case-study-results animate-on-scroll animate-fade-up">
                    <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_case_study_results_title', true)) ?: 'The Results'; ?></h3>
                    <div class="results-grid">
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_result1_number', true)) ?: '£540K'; ?></span>
                            <span class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_result1_label', true)) ?: 'Revenue in 90 Days'; ?></span>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_result2_number', true)) ?: '23.5%'; ?></span>
                            <span class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_result2_label', true)) ?: 'Funnel Conversion Rate'; ?></span>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_result3_number', true)) ?: '£3,800'; ?></span>
                            <span class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_result3_label', true)) ?: 'Average Order Value'; ?></span>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_result4_number', true)) ?: '6.2x'; ?></span>
                            <span class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'fb_case_study_result4_label', true)) ?: 'ROI in First Quarter'; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Funnel Types -->
    <section id="funnel-types" class="funnel-types">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_types_title', true)) ?: 'Types of Sales Funnels We Build'; ?></h2>
            
            <div class="types-grid">
                <?php for ($i = 1; $i <= 4; $i++) : 
                    $type_title = get_post_meta(get_the_ID(), "fb_type{$i}_title", true);
                    $type_description = get_post_meta(get_the_ID(), "fb_type{$i}_description", true);
                    $type_items = get_post_meta(get_the_ID(), "fb_type{$i}_items", true);
                    
                    if (empty($type_title) && $i == 1) {
                        $type_title = 'Lead Generation Funnels';
                        $type_description = 'Capture high-quality leads with valuable lead magnets and nurture them into paying customers.';
                        $type_items = "E-book download funnels\nFree tool/calculator funnels\nVideo series funnels\nAssessment/quiz funnels";
                    } elseif (empty($type_title) && $i == 2) {
                        $type_title = 'Webinar Funnels';
                        $type_description = 'Build authority and trust through educational webinars that naturally lead to sales.';
                        $type_items = "Registration page optimisation\nReminder email sequences\nWebinar delivery systems\nPost-webinar sales sequences";
                    } elseif (empty($type_title) && $i == 3) {
                        $type_title = 'E-commerce Funnels';
                        $type_description = 'Maximize revenue per visitor with strategic product funnels and upsell sequences.';
                        $type_items = "Product discovery funnels\nCart abandonment recovery\nUpsell/cross-sell funnels\nCustomer retention funnels";
                    } elseif (empty($type_title) && $i == 4) {
                        $type_title = 'Membership Funnels';
                        $type_description = 'Build recurring revenue with membership and subscription-based funnels.';
                        $type_items = "Free trial funnels\nMembership sales pages\nOnboarding sequences\nRetention campaigns";
                    }
                    
                    if (!empty($type_title)) :
                ?>
                <div class="type-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="type-icon">
                        <?php if ($i == 1) : ?><i class="fas fa-magnet"></i><?php endif; ?>
                        <?php if ($i == 2) : ?><i class="fas fa-video"></i><?php endif; ?>
                        <?php if ($i == 3) : ?><i class="fas fa-shopping-cart"></i><?php endif; ?>
                        <?php if ($i == 4) : ?><i class="fas fa-users"></i><?php endif; ?>
                    </div>
                    <h3><?php echo wp_kses_post($type_title); ?></h3>
                    <p><?php echo wp_kses_post($type_description); ?></p>
                    <?php if (!empty($type_items)) : ?>
                    <ul>
                        <?php 
                        $items = explode("\n", $type_items);
                        foreach ($items as $item) {
                            if (!empty(trim($item))) {
                                echo '<li>' . esc_html(trim($item)) . '</li>';
                            }
                        }
                        ?>
                    </ul>
                    <?php endif; ?>
                    <?php if ($i == 1) : ?><div class="type-result">Average: 340% more leads</div><?php endif; ?>
                    <?php if ($i == 2) : ?><div class="type-result">Average: 28% attendance rate</div><?php endif; ?>
                    <?php if ($i == 3) : ?><div class="type-result">Average: 45% increase in AOV</div><?php endif; ?>
                    <?php if ($i == 4) : ?><div class="type-result">Average: 85% retention rate</div><?php endif; ?>
                </div>
                <?php endif; endfor; ?>
            </div>
        </div>
    </section><!-- Development Process -->
    <section class="development-process">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_process_title', true)) ?: 'Our Funnel Development Process'; ?></h2>
            
            <div class="process-timeline">
                <?php for ($i = 1; $i <= 6; $i++) : 
                    $step_number = get_post_meta(get_the_ID(), "fb_process{$i}_number", true);
                    $step_title = get_post_meta(get_the_ID(), "fb_process{$i}_title", true);
                    $step_description = get_post_meta(get_the_ID(), "fb_process{$i}_description", true);
                    
                    if (empty($step_title) && $i == 1) {
                        $step_number = '1';
                        $step_title = 'Funnel Strategy & Mapping';
                        $step_description = 'Analyse your business model and create detailed funnel strategy with customer journey mapping.';
                    } elseif (empty($step_title) && $i == 2) {
                        $step_number = '2';
                        $step_title = 'Lead Magnet Creation';
                        $step_description = 'Develop compelling lead magnets and value offers that attract your ideal customers.';
                    } elseif (empty($step_title) && $i == 3) {
                        $step_number = '3';
                        $step_title = 'Page Development';
                        $step_description = 'Build all funnel pages with conversion-focused design and mobile optimisation.';
                    } elseif (empty($step_title) && $i == 4) {
                        $step_number = '4';
                        $step_title = 'Email Automation Setup';
                        $step_description = 'Create automated email sequences that nurture leads and drive conversions.';
                    } elseif (empty($step_title) && $i == 5) {
                        $step_number = '5';
                        $step_title = 'Integration & Testing';
                        $step_description = 'Connect all systems, set up tracking, and thoroughly test the complete funnel flow.';
                    } elseif (empty($step_title) && $i == 6) {
                        $step_number = '6';
                        $step_title = 'Launch & Optimisation';
                        $step_description = 'Launch funnel with comprehensive analytics and ongoing optimisation based on performance data.';
                    }
                    
                    if (!empty($step_title)) :
                ?>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number"><?php echo esc_html($step_number ?: $i); ?></div>
                    <div class="step-content">
                        <h3><?php echo wp_kses_post($step_title); ?></h3>
                        <p><?php echo wp_kses_post($step_description); ?></p>
                    </div>
                </div>
                <?php endif; endfor; ?>
            </div>
        </div>
    </section>    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_packages_title', true)) ?: 'Sales Funnel Development Packages'; ?></h2>
                <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_packages_subtitle', true)) ?: 'Complete funnel systems designed to maximise your revenue and customer lifetime value.'; ?></p>
            </div>
            
            <div class="pricing-grid">
                <?php for ($i = 1; $i <= 3; $i++) : 
                    $package_title = get_post_meta(get_the_ID(), "fb_package{$i}_title", true);
                    $package_price = get_post_meta(get_the_ID(), "fb_package{$i}_price", true);
                    $package_description = get_post_meta(get_the_ID(), "fb_package{$i}_description", true);
                    $package_features = get_post_meta(get_the_ID(), "fb_package{$i}_features", true);
                    $package_cta = get_post_meta(get_the_ID(), "fb_package{$i}_cta", true);
                    $package_label = ($i == 2) ? get_post_meta(get_the_ID(), "fb_package{$i}_label", true) : '';
                    
                    if (empty($package_title) && $i == 1) {
                        $package_title = 'Starter Funnel';
                        $package_price = '£3,997';
                        $package_description = 'Simple lead generation funnel';
                        $package_features = "3-page funnel system\nLead magnet creation\nOpt-in page optimisation\nThank you page\nBasic email automation (5 emails)\nAnalytics setup\n3-week delivery\n30 days support";
                        $package_cta = 'Get Started';
                    } elseif (empty($package_title) && $i == 2) {
                        $package_title = 'Professional Funnel';
                        $package_price = '£7,997';
                        $package_description = 'Complete sales funnel system';
                        $package_features = "5-7 page funnel system\nAdvanced lead magnets\nSales page optimisation\nWebinar funnel setup\nAdvanced email automation (15+ emails)\nUpsell/downsell pages\nPayment integration\nA/B testing setup\n5-week delivery\n60 days support";
                        $package_cta = 'Get Started';
                        $package_label = 'Best Value';
                    } elseif (empty($package_title) && $i == 3) {
                        $package_title = 'Enterprise Funnel';
                        $package_price = '£15,997';
                        $package_description = 'Complete funnel ecosystem';
                        $package_features = "10+ page funnel system\nMultiple traffic funnels\nAdvanced segmentation\nMulti-product funnels\nComprehensive automation (30+ emails)\nCustomer retention funnels\nAdvanced integrations\nSplit testing optimisation\n8-week delivery\n90 days support\nOngoing optimisation";
                        $package_cta = 'Get Started';
                    }
                    
                    if (!empty($package_title)) :
                        $is_featured = ($i == 2);
                ?>
                <div class="pricing-card <?php echo $is_featured ? 'featured' : ''; ?> animate-on-scroll animate-stagger animate-fade-up">
                    <?php if (!empty($package_label)) : ?>
                        <div class="pricing-label"><?php echo esc_html($package_label); ?></div>
                    <?php endif; ?>
                    <div class="pricing-header">
                        <h3><?php echo wp_kses_post($package_title); ?></h3>
                        <div class="price"><?php echo esc_html($package_price); ?></div>
                        <p><?php echo wp_kses_post($package_description); ?></p>
                    </div>
                    <?php if (!empty($package_features)) : ?>
                    <ul class="pricing-features">
                        <?php 
                        $features = explode("\n", $package_features);
                        foreach ($features as $feature) {
                            if (!empty(trim($feature))) {
                                echo '<li>' . esc_html(trim($feature)) . '</li>';
                            }
                        }
                        ?>
                    </ul>
                    <?php endif; ?>
                    <a href="#contact" class="<?php echo $is_featured ? 'btn-primary' : 'btn-outline'; ?>"><?php echo wp_kses_post($package_cta); ?></a>
                </div>
                <?php endif; endfor; ?>
            </div>
        </div>
    </section>    <!-- Technologies -->
    <section class="tools-section">
        <div class="container" style="text-align: center;">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2 style="margin-bottom: 20px;"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_technology_title', true)) ?: 'Funnel Technologies & Platforms'; ?></h2>
                <p style="max-width: 800px; margin: 0 auto 30px;">We use industry-leading tools and technologies to create high-converting, automated sales funnels that drive consistent results.</p>
            </div>
            
            <?php for ($i = 1; $i <= 4; $i++) : 
                $tech_title = get_post_meta(get_the_ID(), "fb_technology{$i}_title", true);
                $tech_items = get_post_meta(get_the_ID(), "fb_technology{$i}_items", true);
                
                if (empty($tech_title) && $i == 1) {
                    $tech_title = 'Funnel Platforms';
                    $tech_items = "ClickFunnels\nLeadpages\nUnbounce & Instapage\nWordPress";
                } elseif (empty($tech_title) && $i == 2) {
                    $tech_title = 'Email Automation';
                    $tech_items = "ActiveCampaign\nConvertKit\nMailchimp & Klaviyo\nGetResponse & Drip";
                } elseif (empty($tech_title) && $i == 3) {
                    $tech_title = 'Payment & CRM Integration';
                    $tech_items = "Stripe & PayPal\nHubSpot\nSalesforce\nZapier & Integrations";
                } elseif (empty($tech_title) && $i == 4) {
                    $tech_title = 'Analytics & Tracking';
                    $tech_items = "Google Analytics\nFacebook Pixel\nHotjar\nGoogle Tag Manager";
                }
                
                if (!empty($tech_title)) :
            ?>
            <h3 class="tools-category animate-on-scroll animate-fade-up"><?php echo wp_kses_post($tech_title); ?></h3>
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: center;">
                <?php 
                if (!empty($tech_items)) {
                    $items = explode("\n", $tech_items);
                    foreach ($items as $item) {
                        if (!empty(trim($item))) {
                            echo '<div class="tool-item" style="text-align: center;">';
                            echo '<div class="tool-icon" style="text-align: center; display: flex; justify-content: center;">';
                            // Add appropriate icon based on category and item
                            if ($i == 1) {
                                if (strpos($item, 'ClickFunnels') !== false) echo '<i class="fas fa-funnel-dollar"></i>';
                                elseif (strpos($item, 'Leadpages') !== false) echo '<i class="fas fa-file-alt"></i>';
                                elseif (strpos($item, 'Unbounce') !== false || strpos($item, 'Instapage') !== false) echo '<i class="fas fa-chart-bar"></i>';
                                elseif (strpos($item, 'WordPress') !== false) echo '<i class="fab fa-wordpress"></i>';
                                else echo '<i class="fas fa-globe"></i>';
                            } elseif ($i == 2) {
                                if (strpos($item, 'ActiveCampaign') !== false) echo '<i class="fas fa-envelope-open-text"></i>';
                                elseif (strpos($item, 'ConvertKit') !== false) echo '<i class="fas fa-paper-plane"></i>';
                                elseif (strpos($item, 'Mailchimp') !== false) echo '<i class="fab fa-mailchimp"></i>';
                                elseif (strpos($item, 'GetResponse') !== false || strpos($item, 'Drip') !== false) echo '<i class="fas fa-chart-line"></i>';
                                else echo '<i class="fas fa-envelope"></i>';
                            } elseif ($i == 3) {
                                if (strpos($item, 'Stripe') !== false || strpos($item, 'PayPal') !== false) echo '<i class="fab fa-stripe"></i>';
                                elseif (strpos($item, 'HubSpot') !== false) echo '<i class="fab fa-hubspot"></i>';
                                elseif (strpos($item, 'Salesforce') !== false) echo '<i class="fab fa-salesforce"></i>';
                                elseif (strpos($item, 'Zapier') !== false) echo '<i class="fas fa-plug"></i>';
                                else echo '<i class="fas fa-credit-card"></i>';
                            } else {
                                echo '<i class="fas fa-chart-bar"></i>';
                            }
                            echo '</div>';
                            echo '<h3>' . esc_html(trim($item)) . '</h3>';
                            echo '<p>Professional integration and setup</p>';
                            echo '</div>';
                        }
                    }
                }
                ?>
            </div>
            <?php endif; endfor; ?>
        </div>
    </section>    <!-- Testimonials -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_testimonials_title', true)) ?: 'What Our Clients Say'; ?></h2>
            <div class="testimonials-grid">
                <?php for ($i = 1; $i <= 3; $i++) : 
                    $testimonial_text = get_post_meta(get_the_ID(), "fb_testimonial{$i}_text", true);
                    $testimonial_name = get_post_meta(get_the_ID(), "fb_testimonial{$i}_name", true);
                    $testimonial_title = get_post_meta(get_the_ID(), "fb_testimonial{$i}_title", true);
                    
                    if (empty($testimonial_text) && $i == 1) {
                        $testimonial_text = 'Our new sales funnel generated £540K in just 90 days. The systematic approach to nurturing leads is brilliant.';
                        $testimonial_name = 'Michael Roberts';
                        $testimonial_title = 'Founder, DigitalCourse Pro';
                    } elseif (empty($testimonial_text) && $i == 2) {
                        $testimonial_text = 'The funnel system increased our conversion rate from 1.8% to 23.5%. It\'s like having a sales team that never sleeps.';
                        $testimonial_name = 'Lisa Anderson';
                        $testimonial_title = 'CMO, InnovateCorps';
                    } elseif (empty($testimonial_text) && $i == 3) {
                        $testimonial_text = 'The automated nurture sequence builds incredible trust. Our customers now come to us pre-sold and ready to buy.';
                        $testimonial_name = 'James Wilson';
                        $testimonial_title = 'CEO, TechFlow Solutions';
                    }
                    
                    if (!empty($testimonial_text)) :
                ?>
                <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="testimonial-content">
                        <p><?php echo wp_kses_post($testimonial_text); ?></p>
                    </div>
                    <div class="testimonial-author">
                        <strong><?php echo esc_html($testimonial_name); ?></strong>
                        <span><?php echo esc_html($testimonial_title); ?></span>
                    </div>
                </div>
                <?php endif; endfor; ?>
            </div>
        </div>
    </section>    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'fb_faq_title', true)) ?: 'Frequently Asked Questions'; ?></h2>
                <div class="faq-list">
                    <?php for ($i = 1; $i <= 6; $i++) : 
                        $faq_question = get_post_meta(get_the_ID(), "fb_faq{$i}_question", true);
                        $faq_answer = get_post_meta(get_the_ID(), "fb_faq{$i}_answer", true);
                        
                        if (empty($faq_question) && $i == 1) {
                            $faq_question = 'How long does funnel development take?';
                            $faq_answer = 'Timeline varies by complexity: 3 weeks for Starter, 5 weeks for Professional, and 8 weeks for Enterprise funnels. We provide detailed project timelines during consultation.';
                        } elseif (empty($faq_question) && $i == 2) {
                            $faq_question = 'Do you create the lead magnets and content?';
                            $faq_answer = 'Yes, we create all lead magnets, email sequences, and funnel content. Our team includes copywriters and content creators specialised in conversion optimisation.';
                        } elseif (empty($faq_question) && $i == 3) {
                            $faq_question = 'Which platforms do you recommend?';
                            $faq_answer = 'Platform choice depends on your needs and budget. We\'ll recommend the best solution based on your requirements, from WordPress to dedicated funnel platforms.';
                        } elseif (empty($faq_question) && $i == 4) {
                            $faq_question = 'Can you integrate with our existing systems?';
                            $faq_answer = 'Absolutely! We integrate with all major CRMs, email platforms, payment processors, and business tools to ensure seamless data flow.';
                        } elseif (empty($faq_question) && $i == 5) {
                            $faq_question = 'What kind of results can we expect?';
                            $faq_answer = 'Results vary by industry and implementation, but our clients typically see 200-400% increases in conversion rates and significant improvements in customer lifetime value.';
                        } elseif (empty($faq_question) && $i == 6) {
                            $faq_question = 'Do you provide ongoing optimisation?';
                            $faq_answer = 'Yes, we offer ongoing optimisation services to continuously improve funnel performance based on real data and testing results.';
                        }
                        
                        if (!empty($faq_question)) :
                    ?>
                    <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="faq-question">
                            <h3><?php echo esc_html($faq_question); ?></h3>
                        </div>
                        <div class="faq-answer">
                            <p><?php echo wp_kses_post($faq_answer); ?></p>
                        </div>
                    </div>
                    <?php endif; endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-scale-up">
                <h2 class="animate-on-scroll animate-fade-up">Ready to Build a Sales Funnel That Converts?</h2>
                <p class="animate-on-scroll animate-fade-up">Get a free funnel strategy session and discover how a properly designed sales funnel can transform your business.</p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free Strategy Session</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

