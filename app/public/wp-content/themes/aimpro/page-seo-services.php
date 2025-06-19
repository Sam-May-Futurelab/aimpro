<?php
/**
 * Template Name: SEO Services Page
 * Description: Comprehensive SEO services overview
 */

get_header(); 

// Get default values
$defaults = get_seo_services_defaults();

// Get meta values with fallbacks
$header_title = get_post_meta(get_the_ID(), '_seo_header_title', true) ?: $defaults['header_title'];
$header_subtitle = get_post_meta(get_the_ID(), '_seo_header_subtitle', true) ?: $defaults['header_subtitle'];

?>

<main id="main" class="main-content seo-service-page">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html($header_title); ?></h1>
                <p class="page-subtitle"><?php echo esc_html($header_subtitle); ?></p>
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
                        <p><?php echo esc_html($overview_description); ?></p>
                        
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
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($services_grid_title); ?></h2>
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
                        <div class="service-icon">
                            <?php 
                            // Service icons based on service number
                            switch($i) {
                                case 1: // Local SEO
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                    </svg>';
                                    break;
                                case 2: // SEO Audit
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>';
                                    break;
                                case 3: // Technical SEO
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.7 6.3C15.1 5.9 15.1 5.3 14.7 4.9C14.3 4.5 13.7 4.5 13.3 4.9L12 6.2L10.7 4.9C10.3 4.5 9.7 4.5 9.3 4.9C8.9 5.3 8.9 5.9 9.3 6.3L10.6 7.6L9.3 8.9C8.9 9.3 8.9 9.9 9.3 10.3C9.7 10.7 10.3 10.7 10.7 10.3L12 9L13.3 10.3C13.7 10.7 14.3 10.7 14.7 10.3C15.1 9.9 15.1 9.3 14.7 8.9L13.4 7.6L14.7 6.3Z" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                    </svg>';
                                    break;
                                case 4: // On-Page SEO
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 2H6A2 2 0 0 0 4 4V20A2 2 0 0 0 6 22H18A2 2 0 0 0 20 20V8L14 2Z" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                                    </svg>';
                                    break;
                                case 5: // White Label SEO
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                        <path d="M23 21V19C23 18.1645 22.7045 17.3541 22.1679 16.7116C21.6313 16.0691 20.8902 15.6316 20.07 15.4662" stroke="currentColor" stroke-width="2"/>
                                    </svg>';
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
                    </div>                    <?php endfor; ?>                </div>
                <div style="text-align: center; margin-top: 1px;">
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
                        <span class="case-study-label"><?php echo esc_html($case_study_label); ?></span>
                        <h2><?php echo esc_html($case_study_title); ?></h2>
                        <p><?php echo esc_html($case_study_description); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html($challenge_title); ?></h3>
                            <ul>
                                <?php foreach ((array)$challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html($solution_title); ?></h3>
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
                        <h3><?php echo esc_html($results_title); ?></h3>
                        <div class="results-grid">
                            <?php for ($i = 1; $i <= 4; $i++): 
                                $result_number = get_post_meta(get_the_ID(), "_seo_case_study_result_{$i}_number", true) ?: $defaults["case_study_result_{$i}_number"];
                                $result_label = get_post_meta(get_the_ID(), "_seo_case_study_result_{$i}_label", true) ?: $defaults["case_study_result_{$i}_label"];
                            ?>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number"><?php echo esc_html($result_number); ?></div>
                                <div class="result-label"><?php echo esc_html($result_label); ?></div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <a href="<?php echo esc_url($case_study_link); ?>" class="case-study-link"><?php echo esc_html($case_study_link_text); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- SEO Process -->
        <section class="seo-process">
            <div class="section-content">
                <?php
                $process_title = get_post_meta(get_the_ID(), '_seo_process_title', true) ?: $defaults['process_title'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($process_title); ?></h2>
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
        <section class="seo-tools">
            <div class="section-content">
                <?php
                $tools_title = get_post_meta(get_the_ID(), '_seo_tools_title', true) ?: $defaults['tools_title'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($tools_title); ?></h2>
                <div class="tools-grid">
                    
                    <?php for ($i = 1; $i <= 4; $i++): 
                        $category_title = get_post_meta(get_the_ID(), "_seo_tools_category_{$i}_title", true) ?: $defaults["tools_category_{$i}_title"];
                        $tools = get_post_meta(get_the_ID(), "_seo_tools_category_{$i}_tools", true) ?: $defaults["tools_category_{$i}_tools"];
                    ?>
                    <div class="tool-category animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html($category_title); ?></h3>
                        <ul class="tool-list">
                            <?php foreach ((array)$tools as $tool): ?>
                                <li><?php echo esc_html($tool); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endfor; ?>

                </div>
            </div>
        </section>        <!-- SEO Industries -->
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
                        <?php echo esc_html($testimonial_quote); ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <?php if (!empty($testimonial_image)): ?>
                            <img src="<?php echo esc_url($testimonial_image); ?>" alt="<?php echo esc_attr($testimonial_name); ?>" />
                        <?php endif; ?>
                        <div class="author-info">
                            <h4><?php echo esc_html($testimonial_name); ?></h4>
                            <span><?php echo esc_html($testimonial_title); ?></span>
                            <div class="author-company"><?php echo esc_html($testimonial_company); ?></div>
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
                    <h2><?php echo esc_html($cta_title); ?></h2>
                    <p><?php echo esc_html($cta_description); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url($cta_primary_link); ?>" class="btn-primary"><?php echo esc_html($cta_primary_text); ?></a>
                        <a href="<?php echo esc_url($cta_secondary_link); ?>" class="btn-outline"><?php echo esc_html($cta_secondary_text); ?></a>
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
