<?php
/**
 * Template Name: Local SEO Page
 * Description: Local SEO services for businesses targeting local customers
 */

get_header(); 

// Get default values
$defaults = get_local_seo_defaults();

// Get meta values with fallbacks
$header_title = get_post_meta(get_the_ID(), '_local_seo_header_title', true) ?: $defaults['header_title'];
$header_subtitle = get_post_meta(get_the_ID(), '_local_seo_header_subtitle', true) ?: $defaults['header_subtitle'];

?>

<main id="main" class="main-content seo-service-page">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html($header_title); ?></h1>
                <p class="page-subtitle"><?php echo esc_html($header_subtitle); ?></p>
            </div>
        </section>

        <!-- Local SEO Overview -->
        <section class="local-seo-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <?php
                        $overview_title = get_post_meta(get_the_ID(), '_local_seo_overview_title', true) ?: $defaults['overview_title'];
                        $overview_description = get_post_meta(get_the_ID(), '_local_seo_overview_description', true) ?: $defaults['overview_description'];
                        $benefits_title = get_post_meta(get_the_ID(), '_local_seo_overview_benefits_title', true) ?: $defaults['overview_benefits_title'];
                        $benefits = get_post_meta(get_the_ID(), '_local_seo_overview_benefits', true) ?: $defaults['overview_benefits'];
                        ?>
                        <h2><?php echo esc_html($overview_title); ?></h2>
                        <p><?php echo esc_html($overview_description); ?></p>
                        
                        <div class="local-seo-benefits">
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
                        $overview_image = get_post_meta(get_the_ID(), '_local_seo_overview_image', true) ?: $defaults['overview_image'];
                        ?>
                        <img src="<?php echo esc_url($overview_image); ?>" alt="Local SEO Services" />
                    </div>
                </div>
            </div>
        </section>        <!-- Local SEO Services -->
        <section class="local-seo-services">
            <div class="section-content">
                <?php
                $services_title = get_post_meta(get_the_ID(), '_local_seo_services_title', true) ?: $defaults['services_title'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($services_title); ?></h2>
                <div class="services-grid">
                    
                    <?php for ($i = 1; $i <= 6; $i++): 
                        $service_title = get_post_meta(get_the_ID(), "_local_seo_service_{$i}_title", true) ?: $defaults["service_{$i}_title"];
                        $service_description = get_post_meta(get_the_ID(), "_local_seo_service_{$i}_description", true) ?: $defaults["service_{$i}_description"];
                        $service_features = get_post_meta(get_the_ID(), "_local_seo_service_{$i}_features", true) ?: $defaults["service_{$i}_features"];
                    ?>
                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <?php 
                            // Service icons based on service number
                            switch($i) {
                                case 1: // Google My Business
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                    </svg>';
                                    break;
                                case 2: // Local Citation Building
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                    </svg>';
                                    break;
                                case 3: // Review Management
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.049 2.927C11.3102 2.00407 12.6898 2.00407 12.951 2.927L14.4697 7.60081C14.6035 8.01284 14.9875 8.29155 15.4207 8.29155H20.4329C21.4016 8.29155 21.8044 9.60081 21.0207 10.1008L17.0429 12.9492C16.6932 13.2016 16.5479 13.6463 16.6817 14.0583L18.2004 18.7321C18.4616 19.6551 17.3537 20.4282 16.5699 19.9282L12.5921 17.0798C12.2424 16.8274 11.7576 16.8274 11.4079 17.0798L7.43013 19.9282C6.64635 20.4282 5.53841 19.6551 5.79963 18.7321L7.31829 14.0583C7.45208 13.6463 7.30679 13.2016 6.95711 12.9492L2.97933 10.1008C2.19555 9.60081 2.59844 8.29155 3.56712 8.29155H8.57929C9.01252 8.29155 9.39647 8.01284 9.53026 7.60081L11.049 2.927Z" stroke="currentColor" stroke-width="2"/>
                                    </svg>';
                                    break;
                                case 4: // Local Keyword Optimization
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                        <path d="M21 21L16.65 16.65" stroke="currentColor" stroke-width="2"/>
                                    </svg>';
                                    break;
                                case 5: // Local Link Building
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2"/>
                                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2"/>
                                    </svg>';
                                    break;
                                case 6: // Local Website Optimization
                                    echo '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                        <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/>
                                        <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2"/>
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
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <?php endfor; ?>

                </div>
            </div>
        </section>        <!-- Local SEO Success Story -->
        <section class="local-seo-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <?php
                        $case_study_label = get_post_meta(get_the_ID(), '_local_seo_case_study_label', true) ?: $defaults['case_study_label'];
                        $case_study_title = get_post_meta(get_the_ID(), '_local_seo_case_study_title', true) ?: $defaults['case_study_title'];
                        $case_study_description = get_post_meta(get_the_ID(), '_local_seo_case_study_description', true) ?: $defaults['case_study_description'];
                        $case_study_challenge_title = get_post_meta(get_the_ID(), '_local_seo_case_study_challenge_title', true) ?: $defaults['case_study_challenge_title'];
                        $case_study_challenges = get_post_meta(get_the_ID(), '_local_seo_case_study_challenges', true) ?: $defaults['case_study_challenges'];
                        $case_study_solution_title = get_post_meta(get_the_ID(), '_local_seo_case_study_solution_title', true) ?: $defaults['case_study_solution_title'];
                        $case_study_solutions = get_post_meta(get_the_ID(), '_local_seo_case_study_solutions', true) ?: $defaults['case_study_solutions'];
                        ?>
                        <span class="case-study-label"><?php echo esc_html($case_study_label); ?></span>
                        <h2><?php echo esc_html($case_study_title); ?></h2>
                        <p><?php echo esc_html($case_study_description); ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo esc_html($case_study_challenge_title); ?></h3>
                            <ul>
                                <?php foreach ((array)$case_study_challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo esc_html($case_study_solution_title); ?></h3>
                            <ul>
                                <?php foreach ((array)$case_study_solutions as $solution): ?>
                                    <li><?php echo esc_html($solution); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
                        <?php
                        $case_study_results_title = get_post_meta(get_the_ID(), '_local_seo_case_study_results_title', true) ?: $defaults['case_study_results_title'];
                        $case_study_results = get_post_meta(get_the_ID(), '_local_seo_case_study_results', true) ?: $defaults['case_study_results'];
                        $case_study_link_text = get_post_meta(get_the_ID(), '_local_seo_case_study_link_text', true) ?: $defaults['case_study_link_text'];
                        $case_study_link_url = get_post_meta(get_the_ID(), '_local_seo_case_study_link_url', true) ?: $defaults['case_study_link_url'];
                        ?>
                        <h3><?php echo esc_html($case_study_results_title); ?></h3>
                        <div class="results-grid">
                            <?php foreach ((array)$case_study_results as $result): ?>
                                <div class="result-item">
                                    <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                    <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url($case_study_link_url); ?>" class="case-study-link"><?php echo esc_html($case_study_link_text); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Local SEO Process -->
        <section class="local-seo-process">
            <div class="section-content">
                <?php
                $process_title = get_post_meta(get_the_ID(), '_local_seo_process_title', true) ?: $defaults['process_title'];
                ?>
                <h2><?php echo esc_html($process_title); ?></h2>
                <div class="process-steps">
                    
                    <?php for ($i = 1; $i <= 4; $i++): 
                        $step_title = get_post_meta(get_the_ID(), "_local_seo_process_step_{$i}_title", true) ?: $defaults["process_step_{$i}_title"];
                        $step_description = get_post_meta(get_the_ID(), "_local_seo_process_step_{$i}_description", true) ?: $defaults["process_step_{$i}_description"];
                    ?>
                    <div class="process-step">
                        <div class="step-number"><?php echo $i; ?></div>
                        <div class="step-content">
                            <h3><?php echo esc_html($step_title); ?></h3>
                            <p><?php echo esc_html($step_description); ?></p>
                        </div>
                    </div>
                    <?php endfor; ?>

                </div>
            </div>
        </section>        <!-- Local SEO Industries -->
        <section class="local-seo-industries">
            <div class="section-content">
                <?php
                $industries_title = get_post_meta(get_the_ID(), '_local_seo_industries_title', true) ?: $defaults['industries_title'];
                ?>
                <h2><?php echo esc_html($industries_title); ?></h2>
                <div class="industries-grid">
                    
                    <?php for ($i = 1; $i <= 4; $i++): 
                        $industry_title = get_post_meta(get_the_ID(), "_local_seo_industry_{$i}_title", true) ?: $defaults["industry_{$i}_title"];
                        $industry_features = get_post_meta(get_the_ID(), "_local_seo_industry_{$i}_features", true) ?: $defaults["industry_{$i}_features"];
                    ?>
                    <div class="industry-card">
                        <h3><?php echo esc_html($industry_title); ?></h3>
                        <ul class="industry-features">
                            <?php foreach ((array)$industry_features as $feature): ?>
                                <li><?php echo esc_html($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endfor; ?>

                </div>
            </div>
        </section>

        <!-- Local SEO Tools -->
        <section class="local-seo-tools">
            <div class="section-content">
                <h2>Local SEO Tools & Platforms</h2>
                <div class="tools-grid">
                    
                    <div class="tool-category">
                        <h3>Google Platforms</h3>
                        <ul class="tool-list">
                            <li>Google My Business</li>
                            <li>Google Search Console</li>
                            <li>Google Analytics</li>
                            <li>Google Maps</li>
                        </ul>
                    </div>

                    <div class="tool-category">
                        <h3>Local SEO Tools</h3>
                        <ul class="tool-list">
                            <li>BrightLocal</li>
                            <li>Whitespark</li>
                            <li>Moz Local</li>
                            <li>LocalFalcon</li>
                        </ul>
                    </div>

                    <div class="tool-category">
                        <h3>Review Management</h3>
                        <ul class="tool-list">
                            <li>ReviewTrackers</li>
                            <li>Podium</li>
                            <li>BirdEye</li>
                            <li>Grade.us</li>
                        </ul>
                    </div>

                    <div class="tool-category">
                        <h3>Citation Management</h3>
                        <ul class="tool-list">
                            <li>Yext</li>
                            <li>Synup</li>
                            <li>Neustar Localeze</li>
                            <li>Acxiom</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        <!-- Local SEO Testimonial -->
        <section class="local-seo-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <blockquote>
                        "The local SEO work Aimpro Digital did for our dental practice was phenomenal. We went from being invisible in local search to ranking #1 for 'dentist Birmingham' and have seen a 65% increase in new patients. The team's expertise in local SEO is outstanding."
                    </blockquote>                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Dr. Sarah Williams</h4>
                            <span>Practice Owner, Birmingham Dental Care</span>
                            <div class="author-company">Healthcare Provider</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="local-seo-cta">
            <div class="section-content">
                <h2>Ready to Dominate Local Search?</h2>
                <p>Let's get your business ranking #1 in local search results and attract more customers in your area.</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Free Local SEO Audit</a>
                    <a href="<?php echo home_url('/case-studies'); ?>" class="btn btn-secondary">View Local SEO Results</a>
                </div>                <div class="cta-benefits">
                    <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Local market analysis included</span>
                    <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Google My Business optimization</span>
                    <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Citation audit and cleanup</span>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
