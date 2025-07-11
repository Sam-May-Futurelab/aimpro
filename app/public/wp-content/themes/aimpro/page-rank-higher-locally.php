<?php
/**
 * Template Name: Rank Higher Locally Solution Page
 * Description: Local SEO solution for improved local search visibility
 */

get_header(); ?>

<main id="main" class="main-content rank-higher-locally-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/solutions'); ?>">Solutions</a>
                <span class="separator">›</span>
                <span class="current">Rank Higher Locally</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_header_title', true) ?: 'Rank Higher Locally'); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_header_subtitle', true) ?: 'Dominate local search results and attract customers in your area with comprehensive local SEO strategies'); ?></p>
            </div>
        </section>

        <!-- Solution Overview -->
        <section class="solution-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_overview_title', true) ?: 'Become the Local Leader in Your Industry'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_overview_content', true) ?: 'Local search drives immediate action. When potential customers search for services "near me," you want to be the first business they find. Our comprehensive local SEO strategies help you dominate local search results, increase visibility, and attract more qualified customers in your service area.'); ?></p>
                        
                        <div class="solution-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_challenges_title', true) ?: 'Local Search Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), '_rank_higher_locally_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'Poor visibility in local search results',
                                        'Inconsistent business information online',
                                        'Limited Google My Business optimisation',
                                        'Lack of local customer reviews',
                                        'Competition from national chains',
                                        'Difficulty ranking for location-based keywords'
                                    );
                                }
                                foreach ($challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>                    </div>                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php 
                        $overview_image = get_post_meta(get_the_ID(), '_rank_higher_locally_overview_image', true);
                        if ($overview_image): ?>
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($overview_image); ?>" alt="Local SEO Strategy" />
                            </div>
                        <?php else: ?>
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solutions/local-seo-overview.jpg" alt="Local SEO Strategy" />
                            </div>
                        <?php endif; ?>
                        <div class="overview-image-cta animate-on-scroll animate-scale-up">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary overview-cta-btn">Improve Local Rankings</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Local SEO Services -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_services_title', true) ?: 'Our Local SEO Services'); ?></h2>
                </div>                <div class="services-grid">
                    <?php
                    // Force use of updated hardcoded services array
                    $services = array(
                            array(
                                'title' => 'Google My Business optimisation',
                                'description' => 'Maximize your Google My Business profile to appear prominently in local search results and Google Maps.',                                'features' => array(
                                    'Complete profile optimisation',
                                    'Regular posting and updates',
                                    'Photo and video optimisation'
                                ),                                'icon' => 'fab fa-google'
                            ),
                            array(
                                'title' => 'Review Management',
                                'description' => 'Generate positive reviews and manage your online reputation to build trust with potential customers.',
                                'features' => array(
                                    'Review generation campaigns',
                                    'Review response management',
                                    'Reputation monitoring',
                                    'Review widget implementation'
                                ),
                                'icon' => 'fas fa-star'
                            ),
                            array(
                                'title' => 'Local Keyword optimisation',
                                'description' => 'Target location-specific keywords that drive local traffic and qualified leads to your business.',
                                'features' => array(
                                    'Local keyword research',
                                    'Location page creation',
                                    'Service area optimisation',
                                    'Local content strategy'
                                ),                                'icon' => 'fas fa-search-location'
                            )
                        );
                    
                    foreach ($services as $service) :
                    ?>
                      <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="<?php echo esc_attr($service['icon']); ?>"></i>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html($service['title']); ?></h3>
                            <p><?php echo esc_html($service['description']); ?></p>
                            <ul class="service-features">
                                <?php foreach ($service['features'] as $feature) : ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Local SEO Success Story -->
        <section class="local-seo-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <span class="case-study-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_label', true) ?: 'Success Story'); ?></span>
                        <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_title', true) ?: 'Precision Dental: 500% Local Visibility Increase'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_content', true) ?: 'Precision Dental, a family dental practice, was invisible in local search results despite serving the community for 15 years.'); ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_challenge_title', true) ?: 'The Challenge'); ?></h3>
                            <ul>
                                <?php
                                $case_challenges = get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_challenges', true);
                                if (empty($case_challenges)) {
                                    $case_challenges = array(
                                        'Not appearing in local search results',
                                        'Inconsistent business information online',
                                        'Only 8 Google reviews',
                                        'Lost patients to competitors'
                                    );
                                }
                                foreach ($case_challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_solution_title', true) ?: 'Our Solution'); ?></h3>
                            <ul>
                                <?php
                                $case_solutions = get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_solutions', true);
                                if (empty($case_solutions)) {
                                    $case_solutions = array(
                                        'Complete Google My Business optimisation',
                                        'Local citation building campaign',
                                        'Review generation system implementation',
                                        'Location-specific content creation'
                                    );
                                }
                                foreach ($case_solutions as $solution) {
                                    echo '<li>' . esc_html($solution) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_results_title', true) ?: 'Results After 6 Months'); ?></h3>
                        <div class="results-grid">
                            <?php
                            $results = get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_results', true);
                            if (empty($results)) {
                                $results = array(
                                    array(
                                        'number' => '500%',
                                        'label' => 'Local Visibility Increase'
                                    ),
                                    array(
                                        'number' => '300%',
                                        'label' => 'Phone Call Increase'
                                    ),
                                    array(
                                        'number' => '85+',
                                        'label' => 'New Google Reviews'
                                    ),                                    array(
                                        'number' => '4.9<i class="fas fa-star" aria-hidden="true"></i>',
                                        'label' => 'Average Review Rating'
                                    )
                                );
                            }
                            foreach ($results as $result) :
                            ?>                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_link_url', true) ?: '/case-studies')); ?>" class="case-study-link"><?php echo esc_html(get_post_meta(get_the_ID(), '_rank_higher_locally_case_study_link_text', true) ?: 'Read Full Case Study'); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Local SEO Process -->
        <section class="local-seo-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_process_title', true) ?: 'Our Local SEO Process'); ?></h2>
                <div class="process-steps">
                    <?php
                    $process_steps = get_post_meta(get_the_ID(), '_rank_higher_locally_process_steps', true);
                    if (empty($process_steps)) {
                        $process_steps = array(
                            array(
                                'number' => '1',
                                'title' => 'Local SEO Audit',
                                'description' => 'Comprehensive analysis of your current local search presence and competitor landscape.'
                            ),
                            array(
                                'number' => '2',
                                'title' => 'Foundation optimisation',
                                'description' => 'optimise Google My Business, fix NAP inconsistencies, and establish local search foundation.'
                            ),
                            array(
                                'number' => '3',
                                'title' => 'Citation & Content Building',
                                'description' => 'Build local citations, create location-specific content, and implement review strategies.'
                            ),
                            array(
                                'number' => '4',
                                'title' => 'Monitoring & optimisation',
                                'description' => 'Track local rankings, monitor reviews, and continuously optimise for better performance.'
                            )
                        );
                    }

                    foreach ($process_steps as $step) :
                    ?>
                    <div class="process-step animate-on-scroll animate-stagger animate-slide-up">
                        <div class="step-number"><?php echo esc_html($step['number']); ?></div>
                        <div class="step-content">
                            <h3><?php echo esc_html($step['title']); ?></h3>
                            <p><?php echo wp_kses_post($step['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="process-cta animate-on-scroll animate-scale-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Boost Your Local Rankings</a>
                </div>
            </div>
        </section>        <!-- Local SEO Benefits -->        
        <section class="service-overview">
            <div class="container">
                <div class="overview-content animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_benefits_title', true) ?: 'Local SEO Benefits for Your Business'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_benefits_description', true) ?: 'Powerful local search optimisation that drives real business results'); ?></p>
                </div>
                
                <div class="services-grid">
                    <?php
                    $benefits = array(
                        array(
                            'title' => 'Increased Local Visibility',
                            'description' => 'Appear prominently when potential customers search for your services in your area.',
                            'icon' => 'fas fa-map-marker-alt'
                        ),
                        array(
                            'title' => 'More Phone Calls',
                            'description' => 'Generate more qualified phone leads from customers ready to book or buy.',
                            'icon' => 'fas fa-phone'
                        ),
                        array(
                            'title' => 'Increased Foot Traffic',
                            'description' => 'Drive more customers to your physical location with improved local search presence.',
                            'icon' => 'fas fa-walking'
                        ),                        array(
                            'title' => 'Better Online Reputation',
                            'description' => 'Build trust with positive reviews and professional online presence management.',
                            'icon' => 'fas fa-star'
                        ),
                        array(
                            'title' => 'Competitive Advantage',
                            'description' => 'Outrank competitors in local search results and capture more market share.',
                            'icon' => 'fas fa-trophy'
                        ),
                        array(
                            'title' => 'Higher Conversion Rates',
                            'description' => 'Convert more website visitors into customers with local-focused optimisation.',
                            'icon' => 'fas fa-chart-line'
                        )
                    );

                    foreach ($benefits as $benefit) :
                    ?>
                    <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="<?php echo esc_attr($benefit['icon']); ?>"></i>
                        </div>
                        <h3><?php echo esc_html($benefit['title']); ?></h3>
                        <p><?php echo esc_html($benefit['description']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Local SEO Testimonial -->
        <section class="local-seo-testimonial">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <blockquote>
                        "<?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_testimonial_quote', true) ?: 'Our local visibility has completely transformed since working with Aimpro Digital. We now rank #1 for all our key local searches and get 300% more phone calls. Our practice has never been busier.'); ?>"
                    </blockquote>
                    <div class="testimonial-author animate-on-scroll animate-slide-up">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_rank_higher_locally_testimonial_name', true) ?: 'Dr. Patricia Moore'); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_rank_higher_locally_testimonial_position', true) ?: 'Owner, Precision Dental Practice'); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_rank_higher_locally_testimonial_company', true) ?: 'Family Dental Practice'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="local-seo-cta">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_cta_title', true) ?: 'Ready to Dominate Local Search?'); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_rank_higher_locally_cta_subtitle', true) ?: 'Let\'s create a comprehensive local SEO strategy that puts your business at the top of local search results.'); ?></p>
                <div class="cta-buttons animate-on-scroll animate-slide-up">
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_rank_higher_locally_cta_primary_url', true) ?: '/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_rank_higher_locally_cta_primary_text', true) ?: 'Get Free Local SEO Audit'); ?></a>
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_rank_higher_locally_cta_secondary_url', true) ?: '/case-studies')); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_rank_higher_locally_cta_secondary_text', true) ?: 'View Local Success Stories'); ?></a>
                </div>
                <div class="cta-benefits animate-on-scroll animate-fade-up">
                    <?php
                    $cta_benefits = get_post_meta(get_the_ID(), '_rank_higher_locally_cta_benefits', true);
                    if (empty($cta_benefits)) {
                        $cta_benefits = array(
                            '✓ Complete local presence audit',
                            '✓ Competitor analysis included',
                            '✓ Custom optimisation roadmap'
                        );
                    }
                    foreach ($cta_benefits as $benefit) {
                        echo '<span class="benefit">' . esc_html($benefit) . '</span>';
                    }
                    ?>
                </div>
            </div>
        </section>

    </div>
</main>

<style>
/* Responsive CSS for Local SEO Process Section */
.local-seo-process .process-steps {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.local-seo-process .process-step {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
}

.local-seo-process .step-number {
    background: #f15a25;
    color: white;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.local-seo-process .step-content h3 {
    margin-bottom: 0.5rem;
    color: #333;
}

.local-seo-process .step-content p {
    margin: 0;
    color: #666;
    line-height: 1.6;
}

.local-seo-process .process-cta {
    text-align: center;
    margin-top: 3rem;
}

.local-seo-process .process-cta-btn {
    background: #f15a25;
    color: white;
    padding: 1rem 2rem;
    text-decoration: none;
    border-radius: 5px;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.local-seo-process .process-cta-btn:hover {
    background: #d14619;
}

/* Mobile Responsive - Center step numbers above text */
@media (max-width: 768px) {
    .local-seo-process .process-step {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 1rem;
    }
    
    .local-seo-process .step-number {
        margin-bottom: 0.5rem;
    }
    
    .local-seo-process .step-content {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .local-seo-process .process-steps {
        gap: 1.5rem;
    }
    
    .local-seo-process .step-number {
        width: 45px;
        height: 45px;
        font-size: 1.1rem;
    }
}
</style>

<?php get_footer(); ?>
