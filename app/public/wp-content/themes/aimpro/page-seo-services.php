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
