<?php
/**
 * Template Name: Advertising & PPC Services
 * Description: Comprehensive advertising and PPC services overview
 */

get_header(); 

// Get default values for meta fields
function get_advertising_ppc_defaults() {
    if (function_exists('aimpro_get_advertising_ppc_default_values')) {
        return aimpro_get_advertising_ppc_default_values();
    }
    
    // Fallback if function doesn't exist
    return array();
}

// Get default value or meta field with fallback
function get_advertising_ppc_field($field_key, $post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $defaults = get_advertising_ppc_defaults();
    $meta_key = '_advertising_ppc_' . $field_key;
    
    $value = get_post_meta($post_id, $meta_key, true);
    
    // If empty and we have a default, use it
    if (empty($value) && isset($defaults[$field_key])) {
        return $defaults[$field_key];
    }
    
    return $value;
}
?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <span class="current">PPC & Advertising</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_advertising_ppc_field('header_title')); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_advertising_ppc_field('header_subtitle')); ?></p>
                <div class="header-badges animate-on-scroll animate-stagger animate-fade-up">
                    <span class="badge"><?php echo esc_html(get_advertising_ppc_field('header_badge_1')); ?></span>
                    <span class="badge"><?php echo esc_html(get_advertising_ppc_field('header_badge_2')); ?></span>
                    <span class="badge"><?php echo esc_html(get_advertising_ppc_field('header_badge_3')); ?></span>
                </div>
            </div>
        </section>        <!-- Service Overview -->
        <section class="service-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo wp_kses_post(get_advertising_ppc_field('overview_title')); ?></h2>
                        <p><?php echo wp_kses_post(get_advertising_ppc_field('overview_content_1')); ?></p>
                        <p><?php echo wp_kses_post(get_advertising_ppc_field('overview_content_2')); ?></p>
                    </div>
                    <div class="overview-stats animate-on-scroll animate-slide-right">
                        <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="stat-number"><?php echo esc_html(get_advertising_ppc_field('overview_stat1_number')); ?></span>
                            <span class="stat-label"><?php echo esc_html(get_advertising_ppc_field('overview_stat1_label')); ?></span>
                        </div>
                        <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="stat-number"><?php echo esc_html(get_advertising_ppc_field('overview_stat2_number')); ?></span>
                            <span class="stat-label"><?php echo esc_html(get_advertising_ppc_field('overview_stat2_label')); ?></span>
                        </div>
                        <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="stat-number"><?php echo esc_html(get_advertising_ppc_field('overview_stat3_number')); ?></span>
                            <span class="stat-label"><?php echo esc_html(get_advertising_ppc_field('overview_stat3_label')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Services Grid -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post(get_advertising_ppc_field('services_title')); ?></h2>
                    <p><?php echo wp_kses_post(get_advertising_ppc_field('services_subtitle')); ?></p>
                </div>
                <div class="services-grid">
                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fab fa-<?php echo $i == 1 ? 'google' : ($i == 2 ? 'facebook' : ($i == 3 ? 'microsoft' : ($i == 4 ? 'redo-alt' : ($i == 5 ? 'clipboard-check' : 'handshake')))); ?>" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3><?php echo wp_kses_post(get_advertising_ppc_field("service_title_{$i}")); ?></h3>
                            <p><?php echo wp_kses_post(get_advertising_ppc_field("service_content_{$i}")); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_advertising_ppc_field("service_features_{$i}");
                                if ($features) {
                                    $feature_lines = explode("\n", $features);
                                    foreach ($feature_lines as $feature) {
                                        if (trim($feature)) {
                                            echo '<li>' . wp_kses_post(trim($feature)) . '</li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                            <?php $metric = get_advertising_ppc_field("service_metric_{$i}"); ?>
                            <?php if ($metric) : ?>
                            <div class="service-results">
                                <span><?php echo esc_html($metric); ?></span>
                            </div>
                            <?php endif; ?>
                            <?php $link = get_advertising_ppc_field("service_link_{$i}"); ?>
                            <a href="<?php echo home_url($link); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

        <!-- PPC Success Story -->
        <section class="ppc-case-study" style="padding-top: 5px;">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <h2><?php echo wp_kses_post(get_advertising_ppc_field('case_study_title')); ?></h2>
                        <h3><?php echo wp_kses_post(get_advertising_ppc_field('case_study_subtitle')); ?></h3>
                        <p><?php echo wp_kses_post(get_advertising_ppc_field('case_study_intro')); ?></p>
                        
                        <div class="challenge-solution">
                            <div class="challenge">
                                <h4><?php echo wp_kses_post(get_advertising_ppc_field('challenge_title')); ?></h4>
                                <ul>
                                    <?php 
                                    $challenges = get_advertising_ppc_field('challenge_list');
                                    if ($challenges) {
                                        $challenge_lines = explode("\n", $challenges);
                                        foreach ($challenge_lines as $challenge) {
                                            if (trim($challenge)) {
                                                echo '<li>' . wp_kses_post(trim($challenge)) . '</li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="solution">
                                <h4><?php echo wp_kses_post(get_advertising_ppc_field('solution_title')); ?></h4>
                                <ul>
                                    <?php 
                                    $solutions = get_advertising_ppc_field('solution_list');
                                    if ($solutions) {
                                        $solution_lines = explode("\n", $solutions);
                                        foreach ($solution_lines as $solution) {
                                            if (trim($solution)) {
                                                echo '<li>' . wp_kses_post(trim($solution)) . '</li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="case-study-metrics animate-on-scroll animate-slide-right">
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                        <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                            <div class="metric-number"><?php echo esc_html(get_advertising_ppc_field("case_metric_{$i}_number")); ?></div>
                            <div class="metric-label"><?php echo esc_html(get_advertising_ppc_field("case_metric_{$i}_label")); ?></div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- PPC Process -->
        <section class="ppc-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_advertising_ppc_field('process_title')); ?></h2>
                <div class="process-steps">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><?php echo $i; ?></div>
                        <div class="step-content">
                            <h3><?php echo wp_kses_post(get_advertising_ppc_field("process_step_title_{$i}")); ?></h3>
                            <p><?php echo wp_kses_post(get_advertising_ppc_field("process_step_content_{$i}")); ?></p>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                <div class="process-cta animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Transform Your PPC Strategy</a>
                </div>
            </div>
        </section>        <!-- Platforms We Manage -->
        <section class="local-seo-services">
            <div class="container">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_advertising_ppc_field('platforms_title')); ?></h2>
                <div class="services-grid">
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="service-content">
                            <h3>Search Advertising</h3>
                            <p>Comprehensive search advertising across major platforms to capture high-intent traffic.</p>
                            <ul class="service-features">
                                <?php 
                                $search_platforms = get_advertising_ppc_field('platform_list_search-advertising');
                                if ($search_platforms) {
                                    $platform_lines = explode("\n", $search_platforms);
                                    foreach ($platform_lines as $platform) {
                                        if (trim($platform)) {
                                            echo '<li>' . wp_kses_post(trim($platform)) . '</li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                            <a href="<?php echo home_url('/contact'); ?>" class="service-cta">Get Search Advertising</a>
                        </div>
                    </div>
                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="service-content">
                            <h3>E-commerce Advertising</h3>
                            <p>Specialized advertising solutions for online retailers and product-based businesses.</p>
                            <ul class="service-features">
                                <?php 
                                $ecommerce_platforms = get_advertising_ppc_field('platform_list_e-commerce-advertising');
                                if ($ecommerce_platforms) {
                                    $platform_lines = explode("\n", $ecommerce_platforms);
                                    foreach ($platform_lines as $platform) {
                                        if (trim($platform)) {
                                            echo '<li>' . wp_kses_post(trim($platform)) . '</li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                            <a href="<?php echo home_url('/contact'); ?>" class="service-cta">Boost E-commerce Sales</a>
                        </div>
                    </div>
                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="service-content">
                            <h3>Social Media Advertising</h3>
                            <p>Strategic social media campaigns to engage your target audience across popular platforms.</p>
                            <ul class="service-features">
                                <?php 
                                $social_platforms = get_advertising_ppc_field('platform_list_social-media-advertising');
                                if ($social_platforms) {
                                    $platform_lines = explode("\n", $social_platforms);
                                    foreach ($platform_lines as $platform) {
                                        if (trim($platform)) {
                                            echo '<li>' . wp_kses_post(trim($platform)) . '</li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                            <a href="<?php echo home_url('/contact'); ?>" class="service-cta">Start Social Advertising</a>
                        </div>
                    </div>
                </div>
                <div class="section-cta text-center animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Talk to an Advertising Expert</a>
                </div>
            </div>
        </section>        <!-- Industry Applications -->
        <section class="industry-applications">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_advertising_ppc_field('industry_title')); ?></h2>
                <div class="industry-grid">
                    <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo wp_kses_post(get_advertising_ppc_field("industry_name_{$i}")); ?></h3>
                        <p><?php echo wp_kses_post(get_advertising_ppc_field("industry_content_{$i}")); ?></p>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>        <!-- Client Testimonial -->
        <section class="client-testimonial">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <div class="quote-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 21C3 17.4 5.4 17.4 5.4 17.4H9V21H3Z" stroke="currentcolour" stroke-width="2"/>
                            <path d="M15 21C15 17.4 17.4 17.4 17.4 17.4H21V21H15Z" stroke="currentcolour" stroke-width="2"/>
                        </svg>
                    </div>
                    <blockquote>
                        <?php echo wp_kses_post(get_advertising_ppc_field('testimonial_quote')); ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <strong><?php echo esc_html(get_advertising_ppc_field('testimonial_name')); ?></strong>
                        <span><?php echo esc_html(get_advertising_ppc_field('testimonial_title')); ?></span>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section id="contact" class="cta-section">
            <div class="container">
                <div class="cta-content animate-on-scroll animate-scale-up">
                    <h2><?php echo wp_kses_post(get_advertising_ppc_field('cta_title')); ?></h2>
                    <p><?php echo wp_kses_post(get_advertising_ppc_field('cta_content')); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary"><?php echo esc_html(get_advertising_ppc_field('cta_button_1_text')); ?></a>
                        <a href="<?php echo home_url('/services'); ?>" class="btn-outline"><?php echo esc_html(get_advertising_ppc_field('cta_button_2_text')); ?></a>
                    </div>                    <div class="cta-features">
                        <span class="feature-check"><i class="fas fa-check" aria-hidden="true"></i> Free campaign analysis</span>
                        <span class="feature-check"><i class="fas fa-check" aria-hidden="true"></i> Performance improvement plan</span>
                        <span class="feature-check"><i class="fas fa-check" aria-hidden="true"></i> No obligation consultation</span>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

