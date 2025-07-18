﻿<?php
/**
 * Template Name: Industries Page
 * Description: Main industries hub page
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">Industries</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_header_title', true) ?: 'Industries We Serve'); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_header_subtitle', true) ?: 'specialised digital marketing expertise across diverse sectors'); ?></p>
            </div>
        </section>

        <!-- Industries Introduction -->
        <section class="industries-intro">
            <div class="section-content">
                <div class="intro-content animate-on-scroll animate-slide-left">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_intro_title', true) ?: 'Industry-Specific Digital Marketing Solutions'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_intro_content', true) ?: 'Every industry has unique challenges, customer behaviours, and marketing opportunities. Our team brings deep sector expertise and proven strategies tailored to your specific market, ensuring maximum ROI and sustainable growth.'); ?></p>
                </div>                <div class="industry-stats animate-on-scroll animate-slide-right" style="display: flex !important; justify-content: center !important; align-items: center !important; text-align: center !important; flex-wrap: wrap !important; gap: 2rem !important;">
                    <?php 
                    $industry_stats = get_post_meta(get_the_ID(), '_industries_stats', true);
                    if (empty($industry_stats) || !is_array($industry_stats)) {
                        $industry_stats = array(
                            array('number' => '7+', 'label' => 'Key Industries'),
                            array('number' => '200+', 'label' => 'Industry Clients'),
                            array('number' => '15+', 'label' => 'Years Experience')
                        );
                    }
                    
                    foreach ($industry_stats as $stat): 
                        // Ensure $stat is an array with the expected keys
                        if (!is_array($stat) || !isset($stat['number']) || !isset($stat['label'])) {
                            continue;
                        }
                    ?>
                        <div class="stat-item">
                            <div class="stat-number"><?php echo esc_html($stat['number']); ?></div>
                            <div class="stat-label"><?php echo esc_html($stat['label']); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Industries Grid -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_expertise_title', true) ?: 'Our Industry Expertise'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_expertise_subtitle', true) ?: 'specialised digital marketing solutions tailored to your industry\'s unique challenges and opportunities.'); ?></p>
                </div>
                <div class="services-grid">
                    <?php 
                    $industries = get_post_meta(get_the_ID(), '_industries_list', true);
                    if (empty($industries)) {
                        $industries = array(
                            array(
                                'icon' => 'fas fa-car',
                                'title' => 'Automotive',
                                'description' => 'Drive qualified leads to your dealership or automotive service centre with targeted digital strategies that reach car buyers at every stage of their journey.',
                                'features' => array('Vehicle inventory marketing', 'Service department promotion', 'Local SEO for dealerships', 'Lead generation campaigns'),
                                'link_text' => 'Learn More',
                                'link_url' => '/automotive'
                            ),
                            array(
                                'icon' => 'fas fa-home',
                                'title' => 'Home & Garden',
                                'description' => 'Grow your home improvement, landscaping, or garden centre business with seasonal campaigns and local marketing strategies that capture homeowner intent.',
                                'features' => array('Seasonal campaign optimisation', 'Before/after showcase content', 'Local service area targeting', 'Pinterest and visual marketing'),
                                'link_text' => 'Learn More',
                                'link_url' => '/home-garden'
                            ),
                            array(
                                'icon' => 'fas fa-chart-line',
                                'title' => 'Finance',
                                'description' => 'Build trust and generate high-value leads for financial services with compliant, educational content marketing and targeted advertising strategies.',
                                'features' => array('Regulatory compliant campaigns', 'Educational content marketing', 'Trust-building strategies', 'High-value lead generation'),
                                'link_text' => 'Learn More',
                                'link_url' => '/finance'
                            ),
                            array(
                                'icon' => 'fas fa-user-tie',
                                'title' => 'Professional Services',
                                'description' => 'Establish thought leadership and attract ideal clients for your law firm, accounting practice, or consulting business with strategic content and SEO.',
                                'features' => array('Thought leadership content', 'Professional networking', 'Expertise-based SEO', 'Client testimonial campaigns'),
                                'link_text' => 'Learn More',
                                'link_url' => '/professional-services'
                            ),
                            array(
                                'icon' => 'fas fa-building',
                                'title' => 'Estate Agents',
                                'description' => 'Dominate your local property market with hyper-local SEO, stunning property showcases, and lead generation systems that convert browsers into buyers.',
                                'features' => array('Hyper-local SEO optimisation', 'Property showcase campaigns', 'Virtual tour integration', 'Buyer/seller lead generation'),
                                'link_text' => 'Learn More',
                                'link_url' => '/estate-agents'
                            ),
                            array(
                                'icon' => 'fas fa-users',
                                'title' => 'Coaches & Consultants',
                                'description' => 'Build your personal brand and attract high-value clients with strategic content marketing, thought leadership, and conversion-optimised funnels.',
                                'features' => array('Personal brand development', 'Content marketing funnels', 'Speaking engagement promotion', 'High-ticket service marketing'),
                                'link_text' => 'Learn More',
                                'link_url' => '/coaches-consultants'
                            ),
                            array(
                                'icon' => 'fas fa-shopping-cart',
                                'title' => 'E-commerce',
                                'description' => 'Maximize online sales and customer lifetime value with comprehensive e-commerce marketing including product feed optimisation, remarketing, and conversion rate optimisation.',
                                'features' => array('Shopping campaign optimisation', 'Product feed management', 'Cart abandonment recovery', 'Customer retention strategies'),
                                'link_text' => 'Learn More',
                                'link_url' => '/ecommerce'
                            )
                        );
                    }                    
                    foreach ($industries as $industry): 
                        // Ensure $industry is an array with the expected keys
                        if (!is_array($industry) || !isset($industry['title']) || !isset($industry['description'])) {
                            continue;
                        }
                    ?>
                        <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                            <div class="service-icon">
                                <?php if (isset($industry['icon']) && strpos($industry['icon'], 'fa') === 0): ?>
                                    <i class="<?php echo esc_attr($industry['icon']); ?>"></i>
                                <?php elseif (isset($industry['icon'])): ?>
                                    <span><?php echo esc_html($industry['icon']); ?></span>
                                <?php endif; ?>
                            </div>
                            <h3><?php echo esc_html($industry['title']); ?></h3>
                            <p><?php echo wp_kses_post($industry['description']); ?></p>
                            <?php if (!empty($industry['features'])): ?>
                                <div class="service-features">
                                    <?php 
                                    // Handle both array (legacy) and string (new rich text) formats
                                    if (is_array($industry['features'])) {
                                        // Legacy format - convert array to HTML list
                                        echo '<ul>';
                                        foreach ($industry['features'] as $feature) {
                                            echo '<li>' . esc_html($feature) . '</li>';
                                        }
                                        echo '</ul>';
                                    } else {
                                        // New rich text format
                                        echo wp_kses_post($industry['features']);
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>
                            <a href="<?php echo esc_url(home_url($industry['link_url'] ?? '')); ?>" class="service-link"><?php echo esc_html($industry['link_text'] ?? 'Learn More'); ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Industry Success Stories -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_success_title', true) ?: 'Cross-Industry Success'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_success_subtitle', true) ?: 'Delivering exceptional results across diverse industries and business sectors.'); ?></p>
                </div>
                <div class="success-stats">
                    <?php 
                    $success_stats = get_post_meta(get_the_ID(), '_industries_success_stats', true);
                    if (empty($success_stats) || !is_array($success_stats)) {
                        $success_stats = array(
                            array('number' => '400%', 'label' => 'Average ROI increase across all industries'),
                            array('number' => '95%', 'label' => 'Client retention rate'),
                            array('number' => '£2.8M+', 'label' => 'Revenue generated for clients')
                        );
                    }
                    
                    foreach ($success_stats as $stat): 
                        // Ensure $stat is an array with the expected keys
                        if (!is_array($stat) || !isset($stat['number']) || !isset($stat['label'])) {
                            continue;
                        }
                    ?>
                        <div class="stat-item">
                            <div class="stat-number"><?php echo esc_html($stat['number']); ?></div>
                            <div class="stat-label"><?php echo esc_html($stat['label']); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Why Industry Expertise Matters -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_expertise_matters_title', true) ?: 'Why Industry Expertise Matters'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_expertise_matters_subtitle', true) ?: 'Generic marketing approaches fail because they don\'t account for industry-specific customer behaviours, seasonal patterns, and regulatory requirements. Our deep industry knowledge enables us to:'); ?></p>
                </div>                <div class="benefits-grid-2x2">
                    <?php 
                    $expertise_points = get_post_meta(get_the_ID(), '_industries_expertise_points', true);
                    if (empty($expertise_points)) {
                        $expertise_points = array(
                            array(
                                'icon' => 'fas fa-bullseye',
                                'title' => 'Target the Right Audience',
                                'description' => 'We understand your customer\'s journey, pain points, and decision-making process.'
                            ),
                            array(
                                'icon' => 'fas fa-chart-bar',
                                'title' => 'Leverage Industry Data',
                                'description' => 'Access to sector-specific benchmarks, trends, and performance metrics.'
                            ),
                            array(
                                'icon' => 'fas fa-bolt',
                                'title' => 'Faster Results',
                                'description' => 'Pre-tested strategies and proven tactics that work in your specific market.'
                            ),
                            array(
                                'icon' => 'fas fa-shield-alt',
                                'title' => 'Ensure Compliance',
                                'description' => 'Navigate industry regulations and advertising guidelines with confidence.'
                            )
                        );
                    }
                    
                    foreach ($expertise_points as $point): 
                        // Ensure $point is an array with the expected keys
                        if (!is_array($point) || !isset($point['title']) || !isset($point['description'])) {
                            continue;
                        }
                    ?>                        <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="benefit-icon">
                                <?php if (isset($point['icon'])): ?>
                                    <i class="<?php echo esc_attr($point['icon']); ?>"></i>
                                <?php endif; ?>
                            </div>
                            <div class="benefit-content">
                                <h3><?php echo esc_html($point['title']); ?></h3>
                                <p><?php echo wp_kses_post($point['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Industry Testimonials -->
        <section class="industry-testimonials">
            <div class="section-content">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_testimonials_title', true) ?: 'What Our Industry Clients Say'); ?></h2>
                <div class="testimonials-grid">
                    <?php 
                    $testimonials = get_post_meta(get_the_ID(), '_industries_testimonials', true);
                    if (empty($testimonials)) {
                        $testimonials = array(
                            array(
                                'quote' => 'Their understanding of the automotive market is exceptional. We\'ve seen a 180% increase in qualified leads since working with Aimpro Digital.',
                                'name' => 'Mark Thompson',
                                'position' => 'General Manager, Premier Motors',
                                'industry' => 'Automotive'
                            ),
                            array(
                                'quote' => 'The seasonal campaigns they created for our garden centre generated 220% more revenue during peak season. Outstanding results!',
                                'name' => 'Sarah Mitchell',
                                'position' => 'Owner, Blooming Gardens',
                                'industry' => 'Home & Garden'
                            ),
                            array(
                                'quote' => 'Their compliant approach to financial services marketing helped us generate high-quality leads while maintaining regulatory standards.',
                                'name' => 'David Wilson',
                                'position' => 'Director, WealthWise Financial',
                                'industry' => 'Finance'
                            )
                        );
                    }
                    
                    foreach ($testimonials as $testimonial): 
                        // Ensure $testimonial is an array with the expected keys
                        if (!is_array($testimonial) || !isset($testimonial['quote'])) {
                            continue;
                        }
                    ?>
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"<?php echo wp_kses_post($testimonial['quote']); ?>"</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-info">
                                    <?php if (isset($testimonial['name'])): ?>
                                        <h4><?php echo esc_html($testimonial['name']); ?></h4>
                                    <?php endif; ?>
                                    <?php if (isset($testimonial['position'])): ?>
                                        <span><?php echo esc_html($testimonial['position']); ?></span>
                                    <?php endif; ?>
                                    <?php if (isset($testimonial['industry'])): ?>
                                        <div class="industry-tag"><?php echo esc_html($testimonial['industry']); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section id="contact" class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_cta_title', true) ?: 'Ready to Dominate Your Industry?'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_industries_cta_subtitle', true) ?: 'Let\'s discuss how our industry-specific expertise can accelerate your business growth.'); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_industries_cta_primary_url', true) ?: '/contact')); ?>" class="btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_industries_cta_primary_text', true) ?: 'Get Industry Analysis'); ?></a>
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_industries_cta_secondary_url', true) ?: '/case-studies')); ?>" class="btn-outline"><?php echo esc_html(get_post_meta(get_the_ID(), '_industries_cta_secondary_text', true) ?: 'View Success Stories'); ?></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

<style>
/* Center text in Learn More buttons on mobile */
@media (max-width: 768px) {
    .service-link {
        text-align: center !important;
        display: block !important;
        padding: 12px 20px !important;
        width: 100% !important;
        box-sizing: border-box !important;
    }
}
</style>