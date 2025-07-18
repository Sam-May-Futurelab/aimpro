﻿<?php
/**
 * Template Name: Home & Garden Industry Page
 * Description: Digital marketing for home and garden businesses
 */

get_header(); 

// Get meta fields
$header_title = get_post_meta(get_the_ID(), '_home_garden_header_title', true) ?: 'Home & Garden Digital Marketing';
$header_subtitle = get_post_meta(get_the_ID(), '_home_garden_header_subtitle', true) ?: 'Grow your home improvement business with seasonal campaigns and local marketing strategies';
$overview_title = get_post_meta(get_the_ID(), '_home_garden_overview_title', true) ?: 'Cultivate Your Home & Garden Business Growth';
$overview_content = get_post_meta(get_the_ID(), '_home_garden_overview_content', true) ?: 'The home and garden industry is highly seasonal and location-dependent. Our specialised marketing strategies help landscapers, garden centres, contractors, and home improvement businesses maximise their peak seasons while maintaining steady growth year-round.';
$overview_image = get_post_meta(get_the_ID(), '_home_garden_overview_image', true);
$challenges_title = get_post_meta(get_the_ID(), '_home_garden_challenges_title', true) ?: 'Home & Garden Marketing Challenges We Solve:';
$challenges = get_post_meta(get_the_ID(), '_home_garden_challenges', true) ?: array(
    'Seasonal demand fluctuations and planning',
    'Weather-dependent service scheduling',
    'Showcasing visual before/after transformations',
    'Local service area competition',
    'Generating leads during off-peak seasons'
);
$services_title = get_post_meta(get_the_ID(), '_home_garden_services_title', true) ?: 'Our Home & Garden Marketing Services';
$services = get_post_meta(get_the_ID(), '_home_garden_services', true) ?: array();
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
                <span class="current">Home & Garden</span>
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
        </section>        <!-- Industry Overview -->
        <section class="industry-overview animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo wp_kses_post($overview_title); ?></h2>
                        <p><?php echo wp_kses_post($overview_content); ?></p>
                        
                        <div class="industry-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post($challenges_title); ?></h3>
                            <ul>
                                <?php foreach ($challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" alt="<?php echo esc_attr(wp_strip_all_tags($overview_title)); ?>" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/home-garden-overview.jpg" alt="Home & Garden Digital Marketing" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Home & Garden Services -->
        <section class="home-garden-services animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($services_title); ?></h2>
                <div class="benefits-grid-2x2">
                    <?php 
                    // Default services if none set
                    if (empty($services)) {
                        $services = array(
                            array(
                                'icon' => 'fas fa-calendar-alt',
                                'title' => 'Seasonal Campaign optimisation',
                                'description' => 'Maximize revenue during peak seasons with strategically planned campaigns that target homeowners when they\'re ready to invest in their properties.',
                                'features' => array('Spring landscaping campaigns', 'Summer maintenance promotions', 'Fall cleanup and preparation', 'Winter planning and indoor projects')
                            ),
                            array(
                                'icon' => 'fas fa-camera',
                                'title' => 'Visual Content Marketing',
                                'description' => 'Showcase stunning transformations with before/after content that demonstrates your expertise and builds trust with potential customers.',
                                'features' => array('Before/after transformation showcases', 'Time-lapse project videos', 'Pinterest optimisation for inspiration', 'Instagram visual storytelling')
                            ),
                            array(
                                'icon' => 'fas fa-map-marker-alt',
                                'title' => 'Local Service Area Marketing',
                                'description' => 'Dominate your local service areas with geo-targeted campaigns that reach homeowners exactly when they need your services.',
                                'features' => array('Hyper-local SEO optimisation', 'Google My Business management', 'Location-based PPC campaigns', 'Neighborhood-specific targeting')
                            ),
                            array(
                                'icon' => 'fas fa-chart-line',
                                'title' => 'Lead Generation & Conversion',
                                'description' => 'Convert website visitors into paying customers with optimised landing pages, quote request forms, and follow-up automation.',
                                'features' => array('Quote request optimisation', 'Consultation booking systems', 'Follow-up automation', 'Seasonal promotion campaigns')
                            )
                        );
                    }
                    
                    foreach ($services as $service): ?>
                      <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($service['icon']); ?>"></i>
                        </div>
                        <div class="benefit-content">
                            <h3><?php echo wp_kses_post($service['title']); ?></h3>
                            <p><?php echo wp_kses_post($service['description']); ?></p>
                            <?php if (!empty($service['features'])): ?>
                            <ul class="feature-list">
                                <?php foreach ($service['features'] as $feature): ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Home & Garden Success Story -->
        <section class="home-garden-case-study animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <?php 
                        $case_study_label = get_post_meta(get_the_ID(), '_home_garden_case_study_label', true) ?: 'Success Story';
                        $case_study_title = get_post_meta(get_the_ID(), '_home_garden_case_study_title', true) ?: 'Blooming Gardens: 220% Seasonal Revenue Boost';
                        $case_study_content = get_post_meta(get_the_ID(), '_home_garden_case_study_content', true) ?: 'Blooming Gardens, a local garden centre and landscaping company, needed to maximise their peak spring season while building year-round revenue streams.';
                        $case_study_challenge_title = get_post_meta(get_the_ID(), '_home_garden_case_study_challenge_title', true) ?: 'The Challenge';
                        $case_study_challenges = get_post_meta(get_the_ID(), '_home_garden_case_study_challenges', true) ?: array(
                            'Heavy dependence on 3-month peak season',
                            'Limited online visibility for landscaping services',
                            'Competition from big box stores',
                            'Difficulty showcasing service quality online'
                        );
                        $case_study_solution_title = get_post_meta(get_the_ID(), '_home_garden_case_study_solution_title', true) ?: 'Our Solution';
                        $case_study_solutions = get_post_meta(get_the_ID(), '_home_garden_case_study_solutions', true) ?: array(
                            'Pre-season awareness campaigns',
                            'Visual before/after content strategy',
                            'Local SEO for landscaping services',
                            'Year-round maintenance program promotion'
                        );
                        ?>
                        <span class="case-study-label"><?php echo wp_kses_post($case_study_label); ?></span>
                        <h2><?php echo wp_kses_post($case_study_title); ?></h2>
                        <p><?php echo wp_kses_post($case_study_content); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post($case_study_challenge_title); ?></h3>
                            <ul>
                                <?php foreach ($case_study_challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post($case_study_solution_title); ?></h3>
                            <ul>
                                <?php foreach ($case_study_solutions as $solution): ?>
                                    <li><?php echo esc_html($solution); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <?php 
                        $case_study_results_title = get_post_meta(get_the_ID(), '_home_garden_case_study_results_title', true) ?: 'Results After 12 Months';
                        $case_study_results = get_post_meta(get_the_ID(), '_home_garden_case_study_results', true) ?: array(
                            array('number' => '220%', 'label' => 'Seasonal Revenue Increase'),
                            array('number' => '160%', 'label' => 'Landscaping Service Leads'),
                            array('number' => '45%', 'label' => 'Year-Round Revenue Growth'),
                            array('number' => '85%', 'label' => 'Increase in Repeat Customers')
                        );
                        $case_study_link_text = get_post_meta(get_the_ID(), '_home_garden_case_study_link_text', true) ?: 'Read Full Case Study';
                        $case_study_link_url = get_post_meta(get_the_ID(), '_home_garden_case_study_link_url', true) ?: home_url('/case-studies');
                        ?>
                        <h3><?php echo wp_kses_post($case_study_results_title); ?></h3>
                        <div class="results-grid">
                            <?php foreach ($case_study_results as $result): ?>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url($case_study_link_url); ?>" class="case-study-link"><?php echo wp_kses_post($case_study_link_text); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Seasonal Marketing Calendar -->
        <section class="seasonal-calendar animate-on-scroll animate-fade-up">
            <div class="section-content">
                <?php 
                $calendar_title = get_post_meta(get_the_ID(), '_home_garden_calendar_title', true) ?: 'Home & Garden Seasonal Marketing Calendar';
                $seasons = get_post_meta(get_the_ID(), '_home_garden_seasons', true) ?: array();
                
                // Default seasons if none set
                if (empty($seasons)) {
                    $seasons = array(
                        array(
                            'title' => '🌱 Spring (March - May)',
                            'revenue_type' => 'Peak Revenue Season',
                            'focus_title' => 'Key Marketing Focus:',
                            'focus_points' => array('Landscaping design consultations', 'Garden preparation and planting', 'Lawn care service sign-ups', 'Outdoor living space projects'),
                            'tactics' => array('Pre-season email campaigns', 'Early bird promotions', 'Social media inspiration content')
                        ),
                        array(
                            'title' => '☀️ Summer (June - August)',
                            'revenue_type' => 'Maintenance Season',
                            'focus_title' => 'Key Marketing Focus:',
                            'focus_points' => array('Irrigation and watering solutions', 'Pest control services', 'Lawn maintenance contracts', 'Outdoor entertainment spaces'),
                            'tactics' => array('Maintenance reminders', 'Drought-resistant solutions', 'Before/after showcases')
                        ),
                        array(
                            'title' => '🍂 Fall (September - November)',
                            'revenue_type' => 'Preparation Season',
                            'focus_title' => 'Key Marketing Focus:',
                            'focus_points' => array('Fall cleanup services', 'Winter preparation', 'Tree and shrub care', 'Holiday decoration services'),
                            'tactics' => array('Cleanup service packages', 'Winter prep checklists', 'Next year planning')
                        ),
                        array(
                            'title' => '❄️ Winter (December - February)',
                            'revenue_type' => 'Planning Season',
                            'focus_title' => 'Key Marketing Focus:',
                            'focus_points' => array('Holiday decorating services', 'Indoor plant care', 'Next year project planning', 'Design consultations'),
                            'tactics' => array('Planning consultations', 'Educational content', 'Early bird spring bookings')
                        )
                    );
                }
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($calendar_title); ?></h2>
                <div class="calendar-grid">
                    <?php foreach ($seasons as $index => $season): 
                        $season_class = '';
                        if (strpos(strtolower($season['title']), 'spring') !== false) $season_class = 'spring';
                        elseif (strpos(strtolower($season['title']), 'summer') !== false) $season_class = 'summer';
                        elseif (strpos(strtolower($season['title']), 'fall') !== false) $season_class = 'fall';
                        elseif (strpos(strtolower($season['title']), 'winter') !== false) $season_class = 'winter';
                    ?>
                    <div class="season-card <?php echo esc_attr($season_class); ?> animate-on-scroll animate-stagger animate-fade-up">
                        <div class="season-header">
                            <h3><?php echo esc_html($season['title']); ?></h3>
                            <span class="season-revenue"><?php echo esc_html($season['revenue_type']); ?></span>
                        </div>
                        <div class="season-content">
                            <h4><?php echo esc_html($season['focus_title']); ?></h4>
                            <ul>
                                <?php foreach ($season['focus_points'] as $point): ?>
                                    <li><?php echo esc_html($point); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="season-tactics">
                                <?php foreach ($season['tactics'] as $tactic): ?>
                                    <span class="tactic"><?php echo esc_html($tactic); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Visual Marketing Examples -->
        <section class="visual-marketing animate-on-scroll animate-fade-up">
            <div class="section-content">
                <?php 
                $visual_title = get_post_meta(get_the_ID(), '_home_garden_visual_title', true) ?: 'The Power of Visual Marketing for Home & Garden';
                $visual_examples = get_post_meta(get_the_ID(), '_home_garden_visual_examples', true) ?: array();
                
                // Default examples if none set
                if (empty($visual_examples)) {
                    $visual_examples = array(
                        array(
                            'image' => get_template_directory_uri() . '/assets/images/industries/before-after-landscape.svg',
                            'title' => 'Before/After Transformations',
                            'description' => 'Showcase dramatic transformations that demonstrate your expertise and build trust with potential customers.',
                            'stats' => array('↗ 340% higher engagement', '↗ 85% more inquiries')
                        ),
                        array(
                            'image' => get_template_directory_uri() . '/assets/images/industries/time-lapse-garden.svg',
                            'title' => 'Time-lapse Project Videos',
                            'description' => 'Document your projects from start to finish with engaging time-lapse videos that showcase your process.',
                            'stats' => array('↗ 250% video completion rate', '↗ 120% social shares')
                        ),
                        array(
                            'image' => get_template_directory_uri() . '/assets/images/industries/seasonal-inspiration.svg',
                            'title' => 'Seasonal Inspiration Content',
                            'description' => 'Share seasonal tips, plant care guides, and inspiration content that keeps your audience engaged year-round.',
                            'stats' => array('↗ 180% Pinterest traffic', '↗ 95% repeat visitors')
                        )
                    );
                }
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($visual_title); ?></h2>
                <div class="visual-examples">
                    <?php foreach ($visual_examples as $example): ?>
                    <div class="example-card animate-on-scroll animate-stagger animate-scale-up">
                        <div class="example-content">
                            <h3><?php echo esc_html($example['title']); ?></h3>
                            <p><?php echo wp_kses_post($example['description']); ?></p>
                            <div class="example-stats">
                                <?php foreach ($example['stats'] as $stat): ?>
                                    <span class="stat"><?php echo esc_html($stat); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Home & Garden Testimonial -->
        <section class="home-garden-testimonial animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-scale-up">
                    <?php 
                    $testimonial_quote = get_post_meta(get_the_ID(), '_home_garden_testimonial_quote', true) ?: '"Working with Aimpro Digital transformed our seasonal business model. Their strategic approach to seasonal campaigns helped us generate 220% more revenue during peak season, and their year-round content strategy keeps customers engaged even in winter. The visual marketing campaigns they created showcase our work beautifully and generate consistent inquiries."';
                    $testimonial_name = get_post_meta(get_the_ID(), '_home_garden_testimonial_name', true) ?: 'Sarah Mitchell';
                    $testimonial_position = get_post_meta(get_the_ID(), '_home_garden_testimonial_position', true) ?: 'Owner, Blooming Gardens';
                    $testimonial_company = get_post_meta(get_the_ID(), '_home_garden_testimonial_company', true) ?: 'Garden centre & Landscaping Services';
                    ?>
                    <blockquote>
                        <?php echo wp_kses_post($testimonial_quote); ?>
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
        <section class="home-garden-cta text-center animate-on-scroll animate-fade-up">
            <div class="section-content">
                <?php 
                $cta_title = get_post_meta(get_the_ID(), '_home_garden_cta_title', true) ?: 'Ready to Grow Your Home & Garden Business?';
                $cta_subtitle = get_post_meta(get_the_ID(), '_home_garden_cta_subtitle', true) ?: 'Let\'s create a seasonal marketing strategy that maximises your peak seasons and builds year-round revenue.';
                $cta_primary_text = get_post_meta(get_the_ID(), '_home_garden_cta_primary_text', true) ?: 'Get Seasonal Marketing Plan';
                $cta_primary_url = get_post_meta(get_the_ID(), '_home_garden_cta_primary_url', true) ?: home_url('/contact');
                $cta_secondary_text = get_post_meta(get_the_ID(), '_home_garden_cta_secondary_text', true) ?: 'View More Success Stories';
                $cta_secondary_url = get_post_meta(get_the_ID(), '_home_garden_cta_secondary_url', true) ?: home_url('/case-studies');
                $cta_benefits = get_post_meta(get_the_ID(), '_home_garden_cta_benefits', true) ?: array(
                    '✓ Free seasonal audit',
                    '✓ Custom campaign recommendations',
                    '✓ Visual marketing strategy'
                );
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($cta_title); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($cta_subtitle); ?></p>
                <div class="cta-buttons animate-on-scroll animate-scale-up">
                    <a href="<?php echo esc_url($cta_primary_url); ?>" class="btn btn-primary"><?php echo wp_kses_post($cta_primary_text); ?></a>
                    <a href="<?php echo esc_url($cta_secondary_url); ?>" class="btn btn-secondary"><?php echo wp_kses_post($cta_secondary_text); ?></a>
                </div>
                <div class="cta-benefits animate-on-scroll animate-fade-up">
                    <?php foreach ($cta_benefits as $benefit): ?>
                        <span class="benefit"><?php echo esc_html($benefit); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>    </div>
</main>

<style>
/* Improved spacing for Home & Garden benefit cards */
.home-garden-services .benefit-card .benefit-icon {
    margin-bottom: 1rem !important; /* Reduced from default 2rem to 1rem for better spacing */
}

.home-garden-services .benefit-card .benefit-content h3 {
    margin-top: 0.5rem;
    margin-bottom: 1rem;
}

/* Mobile optimization for case study results section */
@media (max-width: 768px) {
    .case-study-content {
        flex-direction: column !important;
        gap: 2rem !important;
    }
    
    .case-study-overview {
        order: 1 !important;
        text-align: center !important;
    }
    
    .case-study-results {
        order: 2 !important;
        text-align: center !important;
        padding: 1.5rem 1rem !important;
    }
    
    .case-study-results h3 {
        font-size: 1.5rem !important;
        margin-bottom: 1.5rem !important;
        text-align: center !important;
    }
    
    .results-grid {
        display: grid !important;
        grid-template-columns: 1fr 1fr !important;
        gap: 1rem !important;
        margin: 1.5rem 0 !important;
    }
    
    .result-item {
        background: var(--glass-bg) !important;
        border: var(--glass-border) !important;
        border-radius: 12px !important;
        padding: 1rem 0.75rem !important;
        text-align: center !important;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1) !important;
    }
    
    .result-number {
        font-size: 1.8rem !important;
        font-weight: 700 !important;
        color: var(--primary-orange) !important;
        margin-bottom: 0.5rem !important;
        display: block !important;
    }
    
    .result-label {
        font-size: 0.8rem !important;
        line-height: 1.3 !important;
        color: var(--text-secondary) !important;
        font-weight: 500 !important;
    }
    
    .case-study-link {
        display: block !important;
        width: 100% !important;
        max-width: 280px !important;
        margin: 2rem auto 0 !important;
        padding: 0.75rem 1rem !important;
        background: var(--primary-orange) !important;
        color: white !important;
        text-decoration: none !important;
        border-radius: 8px !important;
        font-weight: 600 !important;
        text-align: center !important;
        transition: all 0.3s ease !important;
    }
    
    .case-study-link:hover {
        background: var(--primary-orange-dark) !important;
        transform: translateY(-2px) !important;
    }
}

@media (max-width: 480px) {
    .results-grid {
        grid-template-columns: 1fr !important;
        gap: 1rem !important;
    }
    
    .result-item {
        padding: 1.25rem 1rem !important;
    }
    
    .result-number {
        font-size: 2rem !important;
    }
    
    .result-label {
        font-size: 0.85rem !important;
    }
    
    .case-study-results h3 {
        font-size: 1.3rem !important;
    }
}
</style>

<?php get_footer(); ?>

