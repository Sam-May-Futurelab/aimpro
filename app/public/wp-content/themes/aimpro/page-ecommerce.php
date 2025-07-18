﻿<?php
/**
 * Template Name: E-commerce Industry Page
 * Description: Digital marketing for e-commerce businesses
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/industries'); ?>">Industries</a>
                <span class="separator">›</span>
                <span class="current">E-commerce</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_header_title', true) ?: "E-commerce Digital Marketing"); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_header_subtitle', true) ?: "Drive more traffic, increase conversions, and maximise revenue for your online store"); ?></p>
            </div>
        </section>        <!-- Industry Overview -->
        <section class="industry-overview animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_overview_title', true) ?: "Accelerate Your E-commerce Growth"); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_overview_content', true) ?: "The e-commerce landscape is more competitive than ever. Our specialised e-commerce marketing strategies help online retailers increase traffic, improve conversion rates, and maximise customer lifetime value through data-driven digital marketing."); ?></p>
                        
                        <div class="industry-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_challenges_title', true) ?: "E-commerce Marketing Challenges We Solve:"); ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), '_ecommerce_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'High customer acquisition costs',
                                        'Intense competition from marketplaces',
                                        'Cart abandonment and low conversion rates',
                                        'Seasonal sales fluctuations',
                                        'Customer retention and loyalty',
                                        'Product visibility and discovery'
                                    );
                                }
                                foreach ($challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php
                        $image_url = get_post_meta(get_the_ID(), '_ecommerce_overview_image', true);
                        if (empty($image_url)) {
                            $image_url = get_template_directory_uri() . '/assets/images/industries/ecommerce-overview.jpg';
                        }
                        ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="E-commerce Digital Marketing" />
                    </div>
                </div>
            </div>
        </section>        <!-- E-commerce Services -->
        <section class="ecommerce-services animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_services_title', true) ?: "Our E-commerce Marketing Services"); ?></h2>
                <div class="services-grid animate-on-scroll animate-fade-up">
                    <?php 
                    $services = get_post_meta(get_the_ID(), '_ecommerce_services', true);
                    // Always use our 6-service array instead of potentially incomplete saved data
                    if (empty($services) || count($services) < 6) {
                        $services = array(
                            array(
                                'icon' => 'fab fa-google',
                                'title' => 'Google Shopping & Product Ads',
                                'description' => 'Maximize product visibility with optimised Google Shopping campaigns that drive qualified traffic to your product pages.',
                                'features' => array('Google Shopping optimisation', 'Product feed management', 'Dynamic remarketing campaigns', 'Performance Max campaigns')
                            ),
                            array(
                                'icon' => 'fas fa-search',
                                'title' => 'E-commerce SEO',
                                'description' => 'Improve organic rankings for product and category pages to drive free, qualified traffic to your online store.',
                                'features' => array('Product page optimisation', 'Category page SEO', 'Technical e-commerce SEO', 'Content marketing for products')
                            ),
                            array(
                                'icon' => 'fab fa-facebook',
                                'title' => 'Social Commerce',
                                'description' => 'Sell directly through social media platforms with engaging content and targeted advertising campaigns.',
                                'features' => array('Facebook & Instagram Shopping', 'Social media advertising', 'Influencer partnerships', 'User-generated content campaigns')
                            ),
                            array(
                                'icon' => 'fas fa-envelope',
                                'title' => 'Email Marketing & Automation',
                                'description' => 'Recover abandoned carts, increase customer lifetime value, and drive repeat purchases with strategic email campaigns.',
                                'features' => array('Abandoned cart recovery', 'Post-purchase email sequences', 'Customer segmentation', 'Promotional campaign automation')
                            ),
                            array(
                                'icon' => 'fas fa-chart-line',
                                'title' => 'Conversion Rate Optimization',
                                'description' => 'Maximize revenue from existing traffic by optimizing user experience, checkout process, and product presentation.',
                                'features' => array('A/B testing product pages', 'Checkout optimization', 'Mobile user experience', 'Product recommendation engines')
                            ),
                            array(
                                'icon' => 'fas fa-sync-alt',
                                'title' => 'Customer Retention Marketing',
                                'description' => 'Build long-term customer relationships and increase lifetime value through strategic retention and loyalty programs.',
                                'features' => array('Loyalty program management', 'Customer lifecycle campaigns', 'Win-back automation', 'VIP customer strategies')
                            )
                        );
                    }
                    foreach ($services as $service): ?>
                        <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="service-icon">
                                <i class="<?php echo esc_attr($service['icon']); ?>" style="font-size: 48px;"></i>
                            </div>
                            <div class="service-content">
                                <h3><?php echo wp_kses_post($service['title']); ?></h3>
                                <p><?php echo wp_kses_post($service['description']); ?></p>
                                <ul class="service-features">
                                    <?php foreach ($service['features'] as $feature): ?>
                                        <li><?php echo esc_html($feature); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center mt-1 animate-on-scroll animate-fade-up">
                    <a href="/contact/" class="btn btn-primary">Boost Your E-commerce Performance</a>
                </div>
            </div>
        </section>        <!-- E-commerce Success Story -->
        <section class="ecommerce-case-study animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <span class="case-study-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_case_study_label', true) ?: "Success Story"); ?></span>
                        <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_case_study_title', true) ?: "Sports Equipment Plus: 320% Revenue Growth"); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_case_study_content', true) ?: "Sports Equipment Plus, an online sports retailer, needed to compete against major e-commerce platforms and increase their market share."); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_case_study_challenge_title', true) ?: "The Challenge"); ?></h3>
                            <ul>
                                <?php
                                $case_study_challenges = get_post_meta(get_the_ID(), '_ecommerce_case_study_challenges', true);
                                if (empty($case_study_challenges)) {
                                    $case_study_challenges = array(
                                        'High customer acquisition costs',
                                        'Low conversion rates from paid traffic',
                                        'Poor product visibility in search',
                                        'Cart abandonment issues'
                                    );
                                }
                                foreach ($case_study_challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_case_study_solution_title', true) ?: "Our Solution"); ?></h3>
                            <ul>
                                <?php
                                $case_study_solutions = get_post_meta(get_the_ID(), '_ecommerce_case_study_solutions', true);
                                if (empty($case_study_solutions)) {
                                    $case_study_solutions = array(
                                        'Comprehensive Google Shopping optimisation',
                                        'Product page SEO and conversion optimisation',
                                        'Email marketing automation',
                                        'Social commerce strategy'
                                    );
                                }
                                foreach ($case_study_solutions as $solution) {
                                    echo '<li>' . esc_html($solution) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_case_study_results_title', true) ?: "Results After 8 Months"); ?></h3>                        <div class="results-grid">
                            <?php
                            $case_study_results = get_post_meta(get_the_ID(), '_ecommerce_case_study_results', true);
                            if (empty($case_study_results)) {
                                $case_study_results = array(
                                    array('number' => '320%', 'label' => 'Revenue Growth'),
                                    array('number' => '180%', 'label' => 'Conversion Rate Increase'),
                                    array('number' => '250%', 'label' => 'Organic Traffic Growth'),
                                    array('number' => '45%', 'label' => 'Cart Recovery Rate')
                                );
                            }
                            foreach ($case_study_results as $result) {
                                echo '<div class="result-item animate-on-scroll animate-stagger animate-scale-up">';
                                echo '<div class="result-number">' . esc_html($result['number']) . '</div>';
                                echo '<div class="result-label">' . esc_html($result['label']) . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_ecommerce_case_study_link_url', true) ?: home_url('/case-studies')); ?>" class="case-study-link"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_case_study_link_text', true) ?: "Read Full Case Study"); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- E-commerce Process -->
        <section class="ecommerce-process animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_process_title', true) ?: "Our E-commerce Marketing Process"); ?></h2>
                <div class="process-steps animate-on-scroll animate-fade-up">
                    <?php
                    $process_steps = get_post_meta(get_the_ID(), '_ecommerce_process_steps', true);
                    if (empty($process_steps)) {
                        $process_steps = array(
                            array(
                                'title' => 'Store Audit',
                                'description' => 'Comprehensive analysis of your e-commerce platform, user experience, and current marketing performance.'
                            ),
                            array(
                                'title' => 'Conversion Optimisation',
                                'description' => 'Optimise product pages, checkout process, and user experience to maximise conversion rates.'
                            ),
                            array(
                                'title' => 'Multi-Channel Strategy',
                                'description' => 'Implement integrated marketing across search, social, email, and marketplace channels.'
                            ),
                            array(
                                'title' => 'Performance Scaling',
                                'description' => 'Continuously optimise and scale successful campaigns while improving customer lifetime value.'
                            )
                        );
                    }
                    foreach ($process_steps as $index => $step) {
                        echo '<div class="process-step animate-on-scroll animate-stagger animate-fade-up">';
                        echo '<div class="step-number">' . ($index + 1) . '</div>';
                        echo '<div class="step-content">';
                        echo '<h3>' . wp_kses_post($step['title']) . '</h3>';
                        echo '<p>' . wp_kses_post($step['description']) . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- E-commerce Insights -->
        <section class="ecommerce-insights animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_insights_title', true) ?: "E-commerce Industry Insights"); ?></h2>
                <div class="results-grid animate-on-scroll animate-fade-up">
                    <?php
                    $insights = get_post_meta(get_the_ID(), '_ecommerce_insights', true);
                    if (empty($insights)) {
                        $insights = array(
                            array(
                                'stat' => '70%',
                                'title' => 'Cart Abandonment',
                                'description' => '70% of online shopping carts are abandoned before purchase'
                            ),
                            array(
                                'stat' => '86%',
                                'title' => 'Product Research',
                                'description' => '86% of consumers research products online before buying'
                            ),
                            array(
                                'stat' => '73%',
                                'title' => 'Mobile Shopping',
                                'description' => '73% of e-commerce traffic comes from mobile devices'
                            ),
                            array(
                                'stat' => '92%',
                                'title' => 'Visual Influence',
                                'description' => '92% of consumers make purchasing decisions based on visual content'
                            )
                        );
                    }
                    foreach ($insights as $insight) {
                        echo '<div class="result-item animate-on-scroll animate-stagger animate-scale-up">';
                        echo '<div class="result-number">' . esc_html($insight['stat']) . '</div>';
                        echo '<div class="result-label">' . esc_html($insight['title']) . '</div>';
                        echo '<p>' . wp_kses_post($insight['description']) . '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- E-commerce Testimonial -->
        <section class="ecommerce-testimonial animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-slide-up">
                    <blockquote>
                        <?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_testimonial_quote', true) ?: "Aimpro Digital transformed our e-commerce business. Their comprehensive approach to Google Shopping, SEO, and email marketing increased our revenue by 320%. The team's expertise in e-commerce marketing is outstanding."); ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_testimonial_name', true) ?: "James Wilson"); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_testimonial_position', true) ?: "Marketing Director, Sports Equipment Plus"); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_testimonial_company', true) ?: "Online sports equipment retailer"); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="ecommerce-cta text-center animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_cta_title', true) ?: "Ready to Scale Your E-commerce Business?"); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_cta_subtitle', true) ?: "Let's discuss how our e-commerce marketing expertise can drive more traffic, conversions, and revenue for your online store."); ?></p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_ecommerce_cta_primary_url', true) ?: home_url('/contact')); ?>" class="btn btn-primary"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_cta_primary_text', true) ?: "Get Free E-commerce Audit"); ?></a>
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_ecommerce_cta_secondary_url', true) ?: home_url('/case-studies')); ?>" class="btn btn-secondary"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_ecommerce_cta_secondary_text', true) ?: "View E-commerce Success Stories"); ?></a>
                </div>
                <div class="cta-benefits animate-on-scroll animate-fade-up">
                    <?php 
                    $benefits = get_post_meta(get_the_ID(), '_ecommerce_cta_benefits', true);
                    if (empty($benefits)) {
                        $benefits = array(
                            '✓ Conversion rate optimisation',
                            '✓ Multi-channel strategies',
                            '✓ ROI-focused campaigns'
                        );
                    }
                    foreach ($benefits as $benefit) {
                        echo '<span class="benefit">' . esc_html($benefit) . '</span>';
                    }
                    ?>
                </div>
            </div>
        </section>    </div>
</main>

<style>
/* General styles for service features alignment */
.service-features {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: left;
}

.service-features li {
    font-size: 0.9rem;
    color: #495057;
    padding: 0.375rem 0;
    text-align: left;
    position: relative;
    padding-left: 1rem;
    line-height: 1.4;
}

.service-features li:before {
    content: "" !important;
    background-image: url('../assets/images/aimpro-target.png') !important;
    background-size: contain !important;
    background-repeat: no-repeat !important;
    background-position: center !important;
    width: 16px !important;
    height: 16px !important;
    position: absolute !important;
    left: 0 !important;
    top: 0.1em !important;
}

.service-features li:last-child {
    border-bottom: none;
}

.service-card {
    text-align: center;
}

.service-card .service-features {
    text-align: left;
    margin-top: 1rem;
}

/* Mobile optimizations for ecommerce results sections */
@media (max-width: 768px) {
    /* Case Study Results Grid - Mobile Layout */
    .case-study-results .results-grid,
    .ecommerce-insights .results-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-top: 1.5rem;
    }
    
    .case-study-results .result-item,
    .ecommerce-insights .result-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem 1rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .case-study-results .result-number,
    .ecommerce-insights .result-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #f15a25;
        line-height: 1;
        margin-bottom: 0.5rem;
    }
    
    .case-study-results .result-label,
    .ecommerce-insights .result-label {
        font-size: 0.9rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
    }
    
    .ecommerce-insights .result-item p {
        font-size: 0.85rem;
        color: #6c757d;
        margin: 0;
        line-height: 1.4;
    }
    
    /* Case Study Link Button */
    .case-study-link {
        display: inline-block;
        width: 100%;
        padding: 0.875rem 1.5rem;
        background: #f15a25;
        color: white !important;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        text-align: center;
        margin-top: 1.5rem;
        font-size: 0.9rem;
        transition: background-color 0.3s ease;
    }
    
    .case-study-link:hover {
        background: #d54a20;
        color: white !important;
    }
    
    /* Service Cards Grid - Ensure mobile stacking */
    .services-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .service-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
    }
    
    .service-icon {
        margin-bottom: 1rem;
    }
    
    .service-icon i {
        font-size: 2.5rem !important;
        color: #f15a25;
    }
    
    .service-card h3 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        color: #212529;
    }
    
    .service-card p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    
    .service-features {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
    }
    
    .service-features li {
        font-size: 0.85rem;
        color: #495057;
        padding: 0.25rem 0;
        text-align: left;
        position: relative;
        padding-left: 1rem;
        line-height: 1.4;
    }
    
    .service-features li:before {
        content: "" !important;
        background-image: url('../assets/images/aimpro-target.png') !important;
        background-size: contain !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        width: 16px !important;
        height: 16px !important;
        position: absolute !important;
        left: 0 !important;
        top: 0.1em !important;
    }
    
    .service-features li:last-child {
        border-bottom: none;
    }
    
    /* CTA Section Mobile */
    .ecommerce-cta .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin: 1.5rem 0;
    }
    
    .ecommerce-cta .btn {
        width: 100%;
        padding: 0.875rem 1.5rem;
        text-align: center;
        font-weight: 600;
        border-radius: 6px;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .ecommerce-cta .btn-primary {
        background: #f15a25;
        color: white !important;
        border: 2px solid #f15a25;
    }
    
    .ecommerce-cta .btn-primary:hover {
        background: #d54a20;
        border-color: #d54a20;
    }
    
    .ecommerce-cta .btn-secondary {
        background: transparent;
        color: #f15a25 !important;
        border: 2px solid #f15a25;
    }
    
    .ecommerce-cta .btn-secondary:hover {
        background: #f15a25;
        color: white !important;
    }
    
    .cta-benefits {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        justify-content: center;
        margin-top: 1rem;
    }
    
    .cta-benefits .benefit {
        background: #e9ecef;
        color: #495057;
        padding: 0.375rem 0.75rem;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 500;
    }
    
    /* Process Steps Mobile - Center step numbers above content */
    .ecommerce-process .process-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .ecommerce-process .step-number {
        display: flex;
        align-items: center;
        justify-content: center;
        order: -1;
        margin-bottom: 1rem;
    }
    
    .ecommerce-process .step-content {
        width: 100%;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* Tablet Layout - 2x2 grid */
    .case-study-results .results-grid,
    .ecommerce-insights .results-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .case-study-results .result-item,
    .ecommerce-insights .result-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
}

/* Reduce white space above E-commerce Marketing Process section */
.ecommerce-process {
    margin-top: 1rem !important; /* Further reduced from 3rem to 1rem */
    padding-top: 1rem !important; /* Further reduced from 2rem to 1rem */
}

/* Reduce padding around the case study results section */
.ecommerce-case-study {
    padding: 3rem 0 1rem 0 !important; /* Reduced bottom padding to bring next section closer */
    margin: 2rem 0 0.5rem 0 !important; /* Reduced bottom margin */
}

.ecommerce-case-study .section-content {
    padding: 2rem 1rem !important; /* Reduced internal padding */
}

.case-study-results {
    padding: 1.5rem !important; /* Reduced padding around results */
    margin: 1rem 0 !important; /* Reduced margin */
}
</style>

<?php get_footer(); ?>

