﻿<?php
/**
 * Template Name: Automotive Industry Page
 * Description: Digital marketing for automotive businesses
 */

get_header(); 

// Get meta fields
$header_title = get_post_meta(get_the_ID(), '_automotive_header_title', true) ?: 'Automotive Digital Marketing';
$header_subtitle = get_post_meta(get_the_ID(), '_automotive_header_subtitle', true) ?: 'Drive more qualified leads to your dealership with proven automotive marketing strategies';
$overview_title = get_post_meta(get_the_ID(), '_automotive_overview_title', true) ?: 'Accelerate Your Automotive Business';
$overview_content = get_post_meta(get_the_ID(), '_automotive_overview_content', true) ?: 'The automotive industry has evolved dramatically. Today\'s car buyers research extensively online before stepping foot on a lot. Our specialised automotive marketing strategies ensure you\'re visible throughout their entire buyer journey.';
$overview_image = get_post_meta(get_the_ID(), '_automotive_overview_image', true);
$challenges_title = get_post_meta(get_the_ID(), '_automotive_challenges_title', true) ?: 'Automotive Marketing Challenges We Solve:';
$challenges = get_post_meta(get_the_ID(), '_automotive_challenges', true) ?: array(
    'Intense local competition from other dealerships',
    'Long sales cycles and multiple touchpoints',
    'Inventory-based marketing requirements',
    'Service department visibility and bookings',
    'Managing online reputation and reviews'
);
$services_title = get_post_meta(get_the_ID(), '_automotive_services_title', true) ?: 'Our Automotive Marketing Services';
$services = get_post_meta(get_the_ID(), '_automotive_services', true) ?: array();
?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/industries'); ?>">Industries</a>
                <span class="separator">›</span>
                <span class="current">Automotive</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo $header_title; ?></h1>
                <div class="page-subtitle"><?php echo $header_subtitle; ?></div>
            </div>
        </section>        <!-- Industry Overview -->
        <section class="industry-overview animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo $overview_title; ?></h2>
                        <div class="overview-content-formatted">
                            <?php echo $overview_content; ?>
                        </div>
                        
                        <div class="industry-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo $challenges_title; ?></h3>
                            <ul>
                                <?php foreach ($challenges as $challenge): ?>
                                    <li><?php echo $challenge; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" alt="<?php echo esc_attr($overview_title); ?>" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/automotive-overview.jpg" alt="Automotive Digital Marketing" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Automotive Services -->
        <section class="automotive-services animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo $services_title; ?></h2>
                <div class="benefits-grid-2x2">
                    <?php 
                    // Default services if none set
                    if (empty($services)) {
                        $services = array(
                            array(
                                'icon' => 'fas fa-map-marker-alt',
                                'title' => 'Local SEO for Dealerships',
                                'description' => 'Dominate local search results when customers search for "car dealerships near me" or specific vehicle models in your area.',
                                'features' => array('Google My Business optimisation', 'Local directory listings', 'Location-based keyword targeting', 'Review management and reputation')
                            ),
                            array(
                                'icon' => 'fas fa-car',
                                'title' => 'Vehicle Inventory Marketing',
                                'description' => 'Showcase your inventory with dynamic advertising that automatically promotes your available vehicles to interested buyers.',
                                'features' => array('Dynamic vehicle ads on Google', 'Facebook vehicle showcase campaigns', 'Inventory-based remarketing', 'VDP (Vehicle Detail Page) optimisation')
                            ),
                            array(
                                'icon' => 'fas fa-wrench',
                                'title' => 'Service Department Marketing',
                                'description' => 'Drive consistent revenue with targeted campaigns for oil changes, tire rotations, and major automotive services.',
                                'features' => array('Service appointment booking campaigns', 'Maintenance reminder automation', 'Seasonal service promotions', 'Customer retention programs')
                            ),
                            array(
                                'icon' => 'fas fa-chart-line',
                                'title' => 'Lead Generation Campaigns',
                                'description' => 'Generate high-quality leads for sales and service departments with targeted PPC campaigns and conversion optimisation.',
                                'features' => array('Google Ads for automotive', 'Facebook lead generation', 'Trade-in value campaigns', 'Test drive scheduling')
                            )
                        );
                    }
                    
                    foreach ($services as $service): ?>
                      <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($service['icon']); ?>"></i>
                        </div>
                        <div class="benefit-content">
                            <h3><?php echo $service['title']; ?></h3>
                            <div class="service-description">
                                <?php echo $service['description']; ?>
                            </div>
                            <?php if (!empty($service['features'])): ?>
                            <ul class="feature-list">
                                <?php foreach ($service['features'] as $feature): ?>
                                    <li><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>                </div>
                  <!-- Added Services CTA with Particles -->
                <div class="services-cta text-center animate-on-scroll animate-fade-up" style="margin-top: 45px; position: relative; padding: 30px 20px; overflow: hidden; border-radius: 8px; background-color: #f8f9fa;">
                    <!-- Particle Effects -->
                    <div class="automotive-particles-container">
                        <!-- Edge particles - positioned around the perimeter -->
                        <div class="contact-particle particle-bright" style="top: 5%; left: 2%; animation: particle-float-enhanced-v1 15s infinite ease-in-out;"></div>
                        <div class="contact-particle" style="top: 8%; right: 3%; animation: particle-float-enhanced-v2 18s infinite ease-in-out; animation-delay: -3s;"></div>
                        <div class="contact-particle particle-bright" style="top: 15%; left: 1%; animation: particle-float-enhanced-v1 16s infinite ease-in-out; animation-delay: -6s;"></div>
                        <div class="contact-particle" style="top: 25%; right: 2%; animation: particle-float-enhanced-v2 20s infinite ease-in-out; animation-delay: -4s;"></div>
                        <div class="contact-particle particle-bright" style="top: 35%; left: 3%; animation: particle-float-enhanced-v1 17s infinite ease-in-out; animation-delay: -8s;"></div>
                        <div class="contact-particle" style="top: 45%; right: 1%; animation: particle-float-enhanced-v2 19s infinite ease-in-out; animation-delay: -5s;"></div>
                        
                        <!-- Corner and side particles -->
                        <div class="contact-particle particle-small" style="top: 60%; left: 2%; animation: particle-float-enhanced-v1 22s infinite ease-in-out; animation-delay: -7s;"></div>
                        <div class="contact-particle particle-small" style="bottom: 10%; right: 5%; animation: particle-float-enhanced-v2 25s infinite ease-in-out; animation-delay: -9s;"></div>
                        <div class="contact-particle particle-bright particle-small" style="bottom: 20%; left: 4%; animation: particle-float-enhanced-v1 21s infinite ease-in-out; animation-delay: -10s;"></div>
                        <div class="contact-particle particle-small" style="top: 30%; right: 25%; animation: particle-float-enhanced-v2 23s infinite ease-in-out; animation-delay: -11s;"></div>
                        <div class="contact-particle particle-bright particle-small" style="bottom: 40%; left: 35%; animation: particle-float-enhanced-v1 24s infinite ease-in-out; animation-delay: -12s;"></div>
                    </div>
                    <h3>Get Expert Help With Your Automotive Marketing</h3>
                    <p>Ready to boost your dealership's visibility and drive more qualified leads?</p>
                    <div class="cta-buttons" style="margin-top: 5px;">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Schedule a Free Consultation</a>
                    </div>
                </div>
            </div>
        </section>        <!-- Automotive Success Story -->
        <section class="automotive-case-study animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <?php 
                        $case_study_label = get_post_meta(get_the_ID(), '_automotive_case_study_label', true) ?: 'Success Story';
                        $case_study_title = get_post_meta(get_the_ID(), '_automotive_case_study_title', true) ?: 'Premier Motors: 180% Increase in Qualified Leads';
                        $case_study_content = get_post_meta(get_the_ID(), '_automotive_case_study_content', true) ?: 'Premier Motors, a multi-brand dealership, was struggling with online visibility and lead quality. Our comprehensive automotive marketing strategy transformed their digital presence.';
                        $case_study_challenge_title = get_post_meta(get_the_ID(), '_automotive_case_study_challenge_title', true) ?: 'The Challenge';
                        $case_study_challenges = get_post_meta(get_the_ID(), '_automotive_case_study_challenges', true) ?: array(
                            'Low local search visibility',
                            'Poor quality leads from generic campaigns',
                            'Service department underperforming',
                            'Inconsistent online presence across locations'
                        );
                        $case_study_solution_title = get_post_meta(get_the_ID(), '_automotive_case_study_solution_title', true) ?: 'Our Solution';
                        $case_study_solutions = get_post_meta(get_the_ID(), '_automotive_case_study_solutions', true) ?: array(
                            'Comprehensive local SEO optimisation',
                            'Dynamic vehicle inventory advertising',
                            'Service-focused PPC campaigns',
                            'Review management and reputation building'
                        );
                        ?>
                        <span class="case-study-label"><?php echo $case_study_label; ?></span>
                        <h2><?php echo $case_study_title; ?></h2>
                        <div class="case-study-content-formatted">
                            <?php echo $case_study_content; ?>
                        </div>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo $case_study_challenge_title; ?></h3>
                            <ul>
                                <?php foreach ($case_study_challenges as $challenge): ?>
                                    <li><?php echo $challenge; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo $case_study_solution_title; ?></h3>
                            <ul>
                                <?php foreach ($case_study_solutions as $solution): ?>
                                    <li><?php echo $solution; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <?php 
                        $case_study_results_title = get_post_meta(get_the_ID(), '_automotive_case_study_results_title', true) ?: 'Results After 6 Months';$case_study_results = get_post_meta(get_the_ID(), '_automotive_case_study_results', true) ?: array(
                            array('number' => '180%', 'label' => 'Increase in Qualified Leads'),
                            array('number' => '250%', 'label' => 'Service Bookings Growth'),
                            array('number' => '320%', 'label' => 'Local Search Visibility'),
                            array('number' => '4.8<i class="fas fa-star" aria-hidden="true"></i>', 'label' => 'Average Review Rating')
                        );
                        $case_study_link_text = get_post_meta(get_the_ID(), '_automotive_case_study_link_text', true) ?: 'Read Full Case Study';
                        $case_study_link_url = get_post_meta(get_the_ID(), '_automotive_case_study_link_url', true) ?: home_url('/case-studies');
                        ?>                        <h3><?php echo $case_study_results_title; ?></h3>
                        <div class="results-grid">
                            <?php foreach ($case_study_results as $result): ?>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number"><?php echo $result['number']; ?></div>
                                <div class="result-label"><?php echo $result['label']; ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url($case_study_link_url); ?>" class="case-study-link"><?php echo $case_study_link_text; ?></a>
                    </div>
                </div>
            </div>        </section>        <!-- Automotive Marketing Process -->
        <section class="automotive-process animate-on-scroll animate-fade-up">
            <style>
                /* Inline styles to reduce white space above the automotive process section */
                .automotive-process {
                    margin-top: 20px !important; /* Significantly reduced margin from default 80px/60px */
                }
                .automotive-process h2 {
                    margin-bottom: 25px;
                }                
                .automotive-process .process-steps {
                    margin-top: 0;
                    padding-top: 0;
                }
                /* centre the process title */
                .automotive-process h2.text-center {
                    text-align: center;
                    width: 100%;
                }
                /* Add style for the section title's after element (if any) */
                .automotive-process h2.text-center::after {
                    left: 50%;
                    transform: translateX(-50%);
                    margin-left: 0;
                }
                
                /* Particle effects for automotive page */
                .automotive-particles-container {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                    overflow: hidden;
                }
                
                .services-cta {
                    position: relative;
                    z-index: 2;
                }
                
                .services-cta h3, .services-cta p, .services-cta .cta-buttons {
                    position: relative;
                    z-index: 3;
                }
                
                .contact-particle {
                    position: absolute;
                    width: 12px;
                    height: 12px;
                    background: rgba(241, 90, 37, 0.15);
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 1;
                }
                
                .contact-particle.particle-bright {
                    background: rgba(241, 90, 37, 0.25);
                }
                
                .contact-particle.particle-small {
                    width: 6px;
                    height: 6px;
                }
                
                @keyframes particle-float-enhanced-v1 {
                    0% { transform: translate(0, 0); }
                    25% { transform: translate(10px, 10px); }
                    50% { transform: translate(5px, 15px); }
                    75% { transform: translate(-5px, 5px); }
                    100% { transform: translate(0, 0); }
                }
                
                @keyframes particle-float-enhanced-v2 {
                    0% { transform: translate(0, 0); }
                    25% { transform: translate(-10px, 5px); }
                    50% { transform: translate(-5px, 10px); }
                    75% { transform: translate(10px, -5px); }
                    100% { transform: translate(0, 0); }
                }
                
                /* Style for rich text content */
                .page-subtitle p, .cta-subtitle p {
                    margin-top: 0;
                    margin-bottom: 1rem;
                }
                .overview-content-formatted p, .case-study-content-formatted p {
                    margin-bottom: 1rem;
                }
                .overview-content-formatted ul, .case-study-content-formatted ul {
                    padding-left: 1.5rem;
                    margin-bottom: 1rem;
                }
                .overview-content-formatted strong, 
                .case-study-content-formatted strong, 
                .page-subtitle strong, 
                .cta-subtitle strong,
                .step-description strong,
                .service-description strong,
                .stat-description strong {
                    font-weight: bold;
                }
                .overview-content-formatted em, 
                .case-study-content-formatted em, 
                .page-subtitle em, 
                .cta-subtitle em,
                .step-description em,
                .service-description em,
                .stat-description em {
                    font-style: italic;
                }
                
                /* Rich text content formatting */
                .step-description p, .service-description p, .stat-description p {
                    margin-bottom: 1rem;
                }
                .step-description ul, .service-description ul, .stat-description ul {
                    padding-left: 1.5rem;
                    margin-bottom: 1rem;
                    list-style-type: disc;
                }
                .step-description ol, .service-description ol, .stat-description ol {
                    padding-left: 1.5rem;
                    margin-bottom: 1rem;
                    list-style-type: decimal;
                }
                
                /* Mobile responsive styles for process steps */
                @media (max-width: 768px) {
                    .automotive-process .process-steps {
                        display: flex !important;
                        flex-direction: column !important;
                        gap: 1.5rem !important;
                    }
                    
                    .automotive-process .process-step {
                        display: flex !important;
                        flex-direction: column !important;
                        align-items: center !important;
                        text-align: center !important;
                        background: #f8f9fa !important;
                        border: 1px solid #e9ecef !important;
                        border-radius: 8px !important;
                        padding: 1.5rem !important;
                        gap: 1rem !important;
                        box-shadow: 0 2px 4px rgba(0,0,0,0.05) !important;
                    }
                    
                    .automotive-process .step-number {
                        background: #f15a25 !important;
                        color: white !important;
                        width: 50px !important;
                        height: 50px !important;
                        border-radius: 50% !important;
                        display: flex !important;
                        align-items: center !important;
                        justify-content: center !important;
                        font-weight: 700 !important;
                        font-size: 1.2rem !important;
                        flex-shrink: 0 !important;
                        margin-bottom: 0.5rem !important;
                    }
                    
                    .automotive-process .step-content {
                        width: 100% !important;
                    }
                    
                    .automotive-process .step-content h3 {
                        font-size: 1.1rem !important;
                        margin-bottom: 0.5rem !important;
                        color: #333 !important;
                    }
                    
                    .automotive-process .step-content p {
                        font-size: 0.9rem !important;
                        color: #6c757d !important;
                        line-height: 1.5 !important;
                        margin: 0 !important;
                    }
                }
            </style>
            <div class="section-content">
                <?php 
                $process_title = get_post_meta(get_the_ID(), '_automotive_process_title', true) ?: 'Our Automotive Marketing Process';
                $process_steps = get_post_meta(get_the_ID(), '_automotive_process_steps', true) ?: array(
                    array(
                        'title' => 'Market Analysis',
                        'description' => 'We analyse your local automotive market, competitor strategies, and customer behaviour patterns.'
                    ),
                    array(
                        'title' => 'Strategy Development',
                        'description' => 'Create a customised marketing strategy that aligns with your inventory, services, and business goals.'
                    ),
                    array(
                        'title' => 'Campaign Implementation',
                        'description' => 'Launch targeted campaigns across multiple channels, optimised for automotive customer journeys.'
                    ),
                    array(
                        'title' => 'Performance optimisation',
                        'description' => 'Continuously monitor and optimise campaigns based on lead quality, cost per acquisition, and ROI.'                    )
                );
                ?>
                <h2 class="animate-on-scroll animate-fade-up text-center"><?php echo $process_title; ?></h2>
                <div class="process-steps">
                    <?php foreach ($process_steps as $index => $step): ?>
                    <div class="process-step animate-on-scroll animate-stagger animate-slide-up">
                        <div class="step-number"><?php echo $index + 1; ?></div>
                        <div class="step-content">
                            <h3><?php echo $step['title']; ?></h3>
                            <div class="step-description">
                                <?php echo $step['description']; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Automotive Industry Insights -->
        <section class="automotive-insights animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="content-centre">
                    <?php 
                    $insights_title = get_post_meta(get_the_ID(), '_automotive_insights_title', true) ?: 'Automotive Industry Insights';
                    $insights = get_post_meta(get_the_ID(), '_automotive_insights', true) ?: array(
                        array(
                            'stat' => '95%',
                            'title' => 'Research Online First',
                            'description' => '95% of car buyers research vehicles online before visiting a dealership'
                        ),
                        array(
                            'stat' => '13',
                            'title' => 'Digital Touchpoints',
                            'description' => 'Average customer visits 13 digital touchpoints during their car buying journey'
                        ),
                        array(
                            'stat' => '60%',
                            'title' => 'Mobile Research',
                            'description' => '60% of automotive research happens on mobile devices'
                        ),
                        array(
                            'stat' => '89%',
                            'title' => 'Service Revenue',
                            'description' => 'Service departments generate 89% of dealership profits'
                        )
                    );
                    ?>
                    <h2 class="section-title animate-on-scroll animate-fade-up" style="text-align: center;">
                        <?php 
                        // Strip wrapping <p> tags from main insights title
                        echo preg_replace('/<p>(.*?)<\/p>/', '$1', $insights_title); 
                        ?>
                        <style>
                        .automotive-insights .section-title::after {
                            left: 50%;
                            transform: translateX(-50%);
                        }
                        </style>
                    </h2>
                    <div class="stats-grid">
                        <?php foreach ($insights as $insight): ?>
                        <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="stat-number"><?php echo esc_html($insight['stat']); ?></div>
                            <div class="stat-content">
                                <h3 class="stat-title"><?php 
                                    // Strip wrapping <p> tags from titles
                                    echo preg_replace('/<p>(.*?)<\/p>/', '$1', $insight['title']); 
                                ?></h3>
                                <div class="stat-description">
                                    <?php echo $insight['description']; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section><!-- Automotive Testimonial -->
        <section class="automotive-testimonial animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-scale-up">
                    <?php 
                    $testimonial_quote = get_post_meta(get_the_ID(), '_automotive_testimonial_quote', true) ?: '"Aimpro Digital completely transformed our online presence. Their understanding of the automotive market helped us generate 180% more qualified leads and significantly improved our service department bookings. The team\'s expertise in automotive marketing is unmatched."';
                    $testimonial_name = get_post_meta(get_the_ID(), '_automotive_testimonial_name', true) ?: 'Mark Thompson';
                    $testimonial_position = get_post_meta(get_the_ID(), '_automotive_testimonial_position', true) ?: 'General Manager, Premier Motors';
                    $testimonial_company = get_post_meta(get_the_ID(), '_automotive_testimonial_company', true) ?: 'Multi-brand dealership with 3 locations';
                    ?>
                    <blockquote>
                        <?php echo $testimonial_quote; ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo esc_html($testimonial_name); ?></h4>
                            <span><?php echo esc_html($testimonial_position); ?></span>
                            <div class="author-company"><?php echo esc_html($testimonial_company); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="automotive-cta text-center animate-on-scroll animate-fade-up">
            <div class="section-content">
                <?php 
                $cta_title = get_post_meta(get_the_ID(), '_automotive_cta_title', true) ?: 'Ready to Accelerate Your Automotive Marketing?';
                $cta_subtitle = get_post_meta(get_the_ID(), '_automotive_cta_subtitle', true) ?: 'Let\'s discuss how our automotive marketing expertise can drive more qualified leads to your dealership.';
                $cta_primary_text = get_post_meta(get_the_ID(), '_automotive_cta_primary_text', true) ?: 'Get Free Automotive Audit';
                $cta_primary_url = get_post_meta(get_the_ID(), '_automotive_cta_primary_url', true) ?: home_url('/contact');
                $cta_secondary_text = get_post_meta(get_the_ID(), '_automotive_cta_secondary_text', true) ?: 'View More Success Stories';
                $cta_secondary_url = get_post_meta(get_the_ID(), '_automotive_cta_secondary_url', true) ?: home_url('/case-studies');                $cta_benefits = get_post_meta(get_the_ID(), '_automotive_cta_benefits', true) ?: array(
                    '<i class="fas fa-check" aria-hidden="true"></i> Free competitive analysis',
                    '<i class="fas fa-check" aria-hidden="true"></i> Custom strategy recommendations',
                    '<i class="fas fa-check" aria-hidden="true"></i> No obligation consultation'
                );
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($cta_title); ?></h2>
                <div class="cta-subtitle animate-on-scroll animate-fade-up"><?php echo $cta_subtitle; ?></div>
                <div class="cta-buttons animate-on-scroll animate-scale-up">
                    <a href="<?php echo esc_url($cta_primary_url); ?>" class="btn btn-primary"><?php echo esc_html($cta_primary_text); ?></a>
                    <a href="<?php echo esc_url($cta_secondary_url); ?>" class="btn btn-secondary"><?php echo esc_html($cta_secondary_text); ?></a>
                </div>
                <div class="cta-benefits animate-on-scroll animate-fade-up">
                    <?php foreach ($cta_benefits as $benefit): ?>
                        <span class="benefit"><?php echo $benefit; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

