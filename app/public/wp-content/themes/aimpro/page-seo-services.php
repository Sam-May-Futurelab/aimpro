<?php
/**
 * Template Name: SEO Services Page
                            <h2><?php echo wp_kses_post($overview_title); ?></h2>
                        <p><?php echo wp_kses_post($overview_description); ?></p>
                        
                        <div class="benefits-section">
                            <h3><?php echo wp_kses_post($benefits_title); ?></h3>               <h2><?php echo wp_kses_post($overview_title); ?></h2>
                        <p><?php echo wp_kses_post($overview_description); ?></p>
                        
                        <div class="benefits-section">
                            <h3><?php echo wp_kses_post($benefits_title); ?></h3>scription: Comprehensive SEO services overview
 */

get_header(); 

// Get default values
$defaults = get_seo_services_defaults();

// Get meta values with fallbacks
$header_title = get_post_meta(get_the_ID(), '_seo_header_title', true) ?: $defaults['header_title'];
$header_subtitle = get_post_meta(get_the_ID(), '_seo_header_subtitle', true) ?: $defaults['header_subtitle'];

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
                <span class="current">SEO Services</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post($header_title); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post($header_subtitle); ?></p>
            </div>
        </section>        <!-- SEO Overview -->
        <section class="seo-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <?php
                        $overview_title = get_post_meta(get_the_ID(), '_seo_overview_title', true) ?: $defaults['overview_title'];
                        $overview_description = get_post_meta(get_the_ID(), '_seo_overview_description', true) ?: $defaults['overview_description'];
                        $benefits_title = get_post_meta(get_the_ID(), '_seo_overview_benefits_title', true) ?: $defaults['overview_benefits_title'];
                        $benefits = get_post_meta(get_the_ID(), '_seo_overview_benefits', true) ?: $defaults['overview_benefits'];
                        ?>
                        <h2><?php echo esc_html($overview_title); ?></h2>
                        <p><?php echo wp_kses_post($overview_description); ?></p>
                        
                        <div class="seo-benefits">
                            <h3><?php echo esc_html($benefits_title); ?></h3>
                            <ul>
                                <?php foreach ((array)$benefits as $benefit): ?>
                                    <li><?php echo esc_html($benefit); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php
                        $overview_image = get_post_meta(get_the_ID(), '_seo_overview_image', true) ?: $defaults['overview_image'];
                        ?>
                        <img src="<?php echo esc_url($overview_image); ?>" alt="SEO Services Overview" />
                    </div>
                </div>
            </div>
        </section>        <!-- SEO Services Grid -->
        <section class="seo-services-grid">
            <div class="section-content">
                <?php
                $services_grid_title = get_post_meta(get_the_ID(), '_seo_services_grid_title', true) ?: $defaults['services_grid_title'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($services_grid_title); ?></h2>
                <div class="services-grid">
                    
                    <?php for ($i = 1; $i <= 5; $i++): 
                        $service_title = get_post_meta(get_the_ID(), "_seo_service_{$i}_title", true) ?: $defaults["service_{$i}_title"];
                        $service_description = get_post_meta(get_the_ID(), "_seo_service_{$i}_description", true) ?: $defaults["service_{$i}_description"];
                        $service_features = get_post_meta(get_the_ID(), "_seo_service_{$i}_features", true) ?: $defaults["service_{$i}_features"];
                        $service_result = get_post_meta(get_the_ID(), "_seo_service_{$i}_result", true) ?: $defaults["service_{$i}_result"];
                        $service_link = get_post_meta(get_the_ID(), "_seo_service_{$i}_link", true) ?: $defaults["service_{$i}_link"];
                        $service_featured = get_post_meta(get_the_ID(), "_seo_service_{$i}_featured", true) ?: $defaults["service_{$i}_featured"];
                        
                        $card_class = $service_featured ? 'service-card featured animate-on-scroll animate-stagger animate-fade-up' : 'service-card animate-on-scroll animate-stagger animate-fade-up';
                    ?>
                    
                    <div class="<?php echo esc_attr($card_class); ?>">
                        <div class="service-icon">                            <?php 
                            // Service icons based on service number
                            switch($i) {
                                case 1: // Local SEO
                                    echo '<i class="fas fa-map-marker-alt" style="font-size: 2.5rem;"></i>';
                                    break;
                                case 2: // SEO Audit
                                    echo '<i class="fas fa-search" style="font-size: 2.5rem;"></i>';
                                    break;
                                case 3: // Technical SEO
                                    echo '<i class="fas fa-cogs" style="font-size: 2.5rem;"></i>';
                                    break;
                                case 4: // On-Page SEO
                                    echo '<i class="fas fa-edit" style="font-size: 2.5rem;"></i>';
                                    break;
                                case 5: // White Label SEO
                                    echo '<i class="fas fa-handshake" style="font-size: 2.5rem;"></i>';
                                    break;
                            }
                            ?>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html($service_title); ?></h3>
                            <p><?php echo esc_html($service_description); ?></p>
                            <ul class="service-features">
                                <?php foreach ((array)$service_features as $feature): ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>                            </ul>
                            <div class="service-results">
                                <span><?php echo esc_html($service_result); ?></span>
                            </div>
                            <a href="<?php echo esc_url($service_link); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <?php endfor; ?>                </div>                <div style="text-align: center; margin-top: 1px;">
                    <a href="/contact/" class="btn btn-primary animate-on-scroll animate-fade-up">Schedule a Free Consultation</a>
                </div>
            </div>
        </section>        <!-- SEO Success Story -->
        <section class="seo-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <?php
                        $case_study_label = get_post_meta(get_the_ID(), '_seo_case_study_label', true) ?: $defaults['case_study_label'];
                        $case_study_title = get_post_meta(get_the_ID(), '_seo_case_study_title', true) ?: $defaults['case_study_title'];
                        $case_study_description = get_post_meta(get_the_ID(), '_seo_case_study_description', true) ?: $defaults['case_study_description'];
                        $challenge_title = get_post_meta(get_the_ID(), '_seo_case_study_challenge_title', true) ?: $defaults['case_study_challenge_title'];
                        $challenges = get_post_meta(get_the_ID(), '_seo_case_study_challenges', true) ?: $defaults['case_study_challenges'];
                        $solution_title = get_post_meta(get_the_ID(), '_seo_case_study_solution_title', true) ?: $defaults['case_study_solution_title'];
                        $solutions = get_post_meta(get_the_ID(), '_seo_case_study_solutions', true) ?: $defaults['case_study_solutions'];
                        ?>
                        <span class="case-study-label"><?php echo wp_kses_post($case_study_label); ?></span>
                        <h2><?php echo wp_kses_post($case_study_title); ?></h2>
                        <p><?php echo wp_kses_post($case_study_description); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post($challenge_title); ?></h3>
                            <ul>
                                <?php foreach ((array)$challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post($solution_title); ?></h3>
                            <ul>
                                <?php foreach ((array)$solutions as $solution): ?>
                                    <li><?php echo esc_html($solution); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <?php
                        $results_title = get_post_meta(get_the_ID(), '_seo_case_study_results_title', true) ?: $defaults['case_study_results_title'];
                        $case_study_link = get_post_meta(get_the_ID(), '_seo_case_study_link', true) ?: $defaults['case_study_link'];
                        $case_study_link_text = get_post_meta(get_the_ID(), '_seo_case_study_link_text', true) ?: $defaults['case_study_link_text'];
                        ?>
                        <h3><?php echo wp_kses_post($results_title); ?></h3>
                        <div class="results-grid">
                            <?php for ($i = 1; $i <= 4; $i++): 
                                $result_number = get_post_meta(get_the_ID(), "_seo_case_study_result_{$i}_number", true) ?: $defaults["case_study_result_{$i}_number"];
                                $result_label = get_post_meta(get_the_ID(), "_seo_case_study_result_{$i}_label", true) ?: $defaults["case_study_result_{$i}_label"];
                            ?>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number"><?php echo wp_kses_post($result_number); ?></div>
                                <div class="result-label"><?php echo wp_kses_post($result_label); ?></div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <a href="<?php echo esc_url($case_study_link); ?>" class="case-study-link"><?php echo wp_kses_post($case_study_link_text); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- SEO Process -->
        <section class="seo-process">
            <div class="section-content">
                <?php
                $process_title = get_post_meta(get_the_ID(), '_seo_process_title', true) ?: $defaults['process_title'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($process_title); ?></h2>
                <div class="process-steps">
                    
                    <?php for ($i = 1; $i <= 4; $i++): 
                        $step_title = get_post_meta(get_the_ID(), "_seo_process_step_{$i}_title", true) ?: $defaults["process_step_{$i}_title"];
                        $step_description = get_post_meta(get_the_ID(), "_seo_process_step_{$i}_description", true) ?: $defaults["process_step_{$i}_description"];
                    ?>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><?php echo $i; ?></div>
                        <div class="step-content">
                            <h3><?php echo esc_html($step_title); ?></h3>
                            <p><?php echo esc_html($step_description); ?></p>
                        </div>
                    </div>
                    <?php endfor; ?>

                </div>
            </div>
        </section>        <!-- SEO Tools & Technologies -->
        <section class="service-overview">
            <div class="container">
                <div class="overview-content animate-on-scroll animate-fade-up">
                    <h2>Professional SEO Tools & Technologies</h2>
                    <p>We leverage industry-leading tools and technologies to deliver comprehensive SEO strategies that drive results.</p>
                </div>
                
                <div class="services-grid">
                    <?php 
                    $tool_categories = array(
                        array(
                            'title' => 'Research & Analysis',
                            'description' => 'Advanced keyword research and competitor analysis tools for strategic insights.',
                            'tools' => array('Ahrefs', 'SEMrush', 'Moz Pro', 'Google Search Console'),
                            'icon' => 'fas fa-chart-bar'
                        ),
                        array(
                            'title' => 'Technical SEO',
                            'description' => 'Comprehensive technical analysis and optimisation tools for site performance.',
                            'tools' => array('Screaming Frog', 'GTmetrix', 'Google PageSpeed Insights', 'Schema Markup Validator'),
                            'icon' => 'fas fa-cogs'
                        ),
                        array(
                            'title' => 'Content optimisation',
                            'description' => 'Content analysis and optimisation tools for improved search rankings.',
                            'tools' => array('Surfer SEO', 'Clearscope', 'Yoast SEO', 'Google Analytics 4'),
                            'icon' => 'fas fa-file-alt'
                        ),                        array(
                            'title' => 'Local SEO',
                            'description' => 'specialised local search optimisation and reputation management tools.',
                            'tools' => array('BrightLocal', 'Google My Business', 'Whitespark', 'ReviewTrackers'),
                            'icon' => 'fas fa-map-marker-alt'
                        ),
                        array(
                            'title' => 'Link Building',
                            'description' => 'Advanced backlink analysis and link building strategy tools for authority building.',
                            'tools' => array('Majestic SEO', 'Ahrefs Backlinks', 'Link Explorer', 'HARO'),
                            'icon' => 'fas fa-link'
                        ),
                        array(
                            'title' => 'Performance Tracking',
                            'description' => 'Comprehensive monitoring and reporting tools for SEO performance measurement.',
                            'tools' => array('Google Analytics 4', 'Search Console', 'Data Studio', 'Rank Tracker'),
                            'icon' => 'fas fa-chart-line'
                        )
                    );
                    ?>
                    
                    <?php foreach ($tool_categories as $category): ?>
                        <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                            <div class="service-icon">
                                <i class="<?php echo esc_attr($category['icon']); ?>"></i>
                            </div>
                            <h3><?php echo esc_html($category['title']); ?></h3>
                            <p><?php echo esc_html($category['description']); ?></p>
                            <ul class="service-features">
                                <?php foreach ($category['tools'] as $tool): ?>
                                    <li><?php echo esc_html($tool); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- SEO Industries -->
        <section class="seo-industries">
            <div class="section-content">
                <?php
                $industries_title = get_post_meta(get_the_ID(), '_seo_industries_title', true) ?: $defaults['industries_title'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($industries_title); ?></h2>
                <div class="industries-grid">
                    
                    <?php for ($i = 1; $i <= 4; $i++): 
                        $industry_title = get_post_meta(get_the_ID(), "_seo_industry_{$i}_title", true) ?: $defaults["industry_{$i}_title"];
                        $industry_description = get_post_meta(get_the_ID(), "_seo_industry_{$i}_description", true) ?: $defaults["industry_{$i}_description"];
                        $industry_features = get_post_meta(get_the_ID(), "_seo_industry_{$i}_features", true) ?: $defaults["industry_{$i}_features"];
                    ?>
                    <div class="industry-card animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html($industry_title); ?></h3>
                        <p><?php echo esc_html($industry_description); ?></p>
                        <ul class="industry-features">
                            <?php foreach ((array)$industry_features as $feature): ?>
                                <li><?php echo esc_html($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endfor; ?>

                </div>
            </div>
        </section>        <!-- SEO Testimonial -->
        <section class="seo-testimonial">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">                    <?php
                    $testimonial_quote = get_post_meta(get_the_ID(), '_seo_testimonial_quote', true) ?: $defaults['testimonial_quote'];
                    $testimonial_image = ''; // Force no image for David Mitchell testimonial
                    $testimonial_name = get_post_meta(get_the_ID(), '_seo_testimonial_name', true) ?: $defaults['testimonial_name'];
                    $testimonial_title = get_post_meta(get_the_ID(), '_seo_testimonial_title', true) ?: $defaults['testimonial_title'];
                    $testimonial_company = get_post_meta(get_the_ID(), '_seo_testimonial_company', true) ?: $defaults['testimonial_company'];
                    ?>
                    <blockquote>
                        <?php echo wp_kses_post($testimonial_quote); ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <?php if (!empty($testimonial_image)): ?>
                            <img src="<?php echo esc_url($testimonial_image); ?>" alt="<?php echo esc_attr($testimonial_name); ?>" />
                        <?php endif; ?>
                        <div class="author-info">
                            <h4><?php echo wp_kses_post($testimonial_name); ?></h4>
                            <span><?php echo wp_kses_post($testimonial_title); ?></span>
                            <div class="author-company"><?php echo wp_kses_post($testimonial_company); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content animate-on-scroll animate-fade-up">
                    <?php
                    $cta_title = get_post_meta(get_the_ID(), '_seo_cta_title', true) ?: $defaults['cta_title'];
                    $cta_description = get_post_meta(get_the_ID(), '_seo_cta_description', true) ?: $defaults['cta_description'];
                    $cta_primary_text = get_post_meta(get_the_ID(), '_seo_cta_primary_text', true) ?: $defaults['cta_primary_text'];
                    $cta_primary_link = get_post_meta(get_the_ID(), '_seo_cta_primary_link', true) ?: $defaults['cta_primary_link'];
                    $cta_secondary_text = get_post_meta(get_the_ID(), '_seo_cta_secondary_text', true) ?: $defaults['cta_secondary_text'];
                    $cta_secondary_link = get_post_meta(get_the_ID(), '_seo_cta_secondary_link', true) ?: $defaults['cta_secondary_link'];
                    $cta_features = get_post_meta(get_the_ID(), '_seo_cta_features', true) ?: $defaults['cta_features'];
                    ?>
                    <h2><?php echo wp_kses_post($cta_title); ?></h2>
                    <p><?php echo wp_kses_post($cta_description); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url($cta_primary_link); ?>" class="btn-primary"><?php echo wp_kses_post($cta_primary_text); ?></a>
                        <a href="<?php echo esc_url($cta_secondary_link); ?>" class="btn-outline"><?php echo wp_kses_post($cta_secondary_text); ?></a>
                    </div>
                    <div class="cta-features">
                        <?php foreach ((array)$cta_features as $feature): ?>
                            <span class="feature-check"><i class="fas fa-check" aria-hidden="true"></i> <?php echo esc_html($feature); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

<style>
/* Mobile optimizations for SEO services page */
@media (max-width: 768px) {
    /* Case Study Results Grid - Mobile Layout */
    .seo-case-study .results-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-top: 1.5rem;
        width: 100%;
        max-width: 100%;
        overflow: hidden;
    }
    
    .seo-case-study .result-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem 1rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        width: 100%;
        max-width: 100%;
        box-sizing: border-box;
    }
    
    .seo-case-study .result-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #ff6b35;
        line-height: 1;
        margin-bottom: 0.5rem;
        word-break: break-word;
    }
    
    .seo-case-study .result-label {
        font-size: 0.9rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }
    
    /* Case Study Link Button */
    .case-study-link {
        display: inline-block;
        width: 100%;
        padding: 0.875rem 1.5rem;
        background: #ff6b35;
        color: white !important;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        text-align: center;
        margin-top: 1.5rem;
        font-size: 0.9rem;
        transition: background-color 0.3s ease;
        box-sizing: border-box;
    }
    
    .case-study-link:hover {
        background: #e55a2b;
        color: white !important;
    }
    
    /* SEO Services Grid - Mobile Layout */
    .seo-services-grid .services-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .seo-services-grid .service-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .seo-services-grid .service-card.featured {
        border: 2px solid #ff6b35;
        background: #fff5f2;
    }
    
    .seo-services-grid .service-icon {
        margin-bottom: 1rem;
    }
    
    .seo-services-grid .service-icon i {
        font-size: 2.5rem !important;
        color: #ff6b35;
    }
    
    .seo-services-grid .service-card h3 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        color: #212529;
    }
    
    .seo-services-grid .service-card p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    
    .seo-services-grid .service-features {
        list-style: none;
        padding: 0;
        margin: 0 0 1rem 0;
    }
    
    .seo-services-grid .service-features li {
        font-size: 0.85rem;
        color: #495057;
        padding: 0.25rem 0;
        border-bottom: 1px solid #e9ecef;
        line-height: 1.4;
    }
    
    .seo-services-grid .service-features li:last-child {
        border-bottom: none;
    }
    
    .seo-services-grid .service-results {
        background: #ff6b35;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    
    .seo-services-grid .service-cta {
        display: inline-block;
        width: 100%;
        padding: 0.75rem 1.5rem;
        background: transparent;
        color: #ff6b35 !important;
        border: 2px solid #ff6b35;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        text-align: center;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        box-sizing: border-box;
    }
    
    .seo-services-grid .service-cta:hover {
        background: #ff6b35;
        color: white !important;
    }
    
    /* Process Steps - Mobile Layout */
    .seo-process .process-steps {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .seo-process .process-step {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .seo-process .step-number {
        background: #ff6b35;
        color: white;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
    }
    
    .seo-process .step-content h3 {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        color: #212529;
    }
    
    .seo-process .step-content p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin: 0;
    }
    
    /* Main CTA Button - Mobile */
    .btn-primary {
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
        box-sizing: border-box;
    }
    
    .btn-primary:hover {
        background: #e55a2b !important;
        border-color: #e55a2b !important;
        color: white !important;
    }
    
    /* Overview Image - Mobile */
    .seo-overview .overview-image {
        margin-top: 2rem;
        text-align: center;
    }
    
    .seo-overview .overview-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    
    /* Container Overrides */
    .container {
        width: 100%;
        max-width: 100%;
        padding-left: 1rem;
        padding-right: 1rem;
        box-sizing: border-box;
    }
    
    .seo-case-study .section-content,
    .seo-services-grid .section-content,
    .seo-process .section-content {
        overflow: hidden;
    }
    
    /* Hide bullet point icons for lists */
    .service-features li:before,
    .seo-benefits li:before {
        display: none !important;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* Tablet Layout - 2x2 grid */
    .seo-case-study .results-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .seo-case-study .result-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .seo-services-grid .services-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
}
</style>
