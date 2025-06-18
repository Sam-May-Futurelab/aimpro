<?php
/**
 * Template Name: Home & Garden Industry Page
 * Description: Digital marketing for home and garden businesses
 */

get_header(); 

// Get meta fields
$header_title = get_post_meta(get_the_ID(), '_home_garden_header_title', true) ?: 'Home & Garden Digital Marketing';
$header_subtitle = get_post_meta(get_the_ID(), '_home_garden_header_subtitle', true) ?: 'Grow your home improvement business with seasonal campaigns and local marketing strategies';
$overview_title = get_post_meta(get_the_ID(), '_home_garden_overview_title', true) ?: 'Cultivate Your Home & Garden Business Growth';
$overview_content = get_post_meta(get_the_ID(), '_home_garden_overview_content', true) ?: 'The home and garden industry is highly seasonal and location-dependent. Our specialized marketing strategies help landscapers, garden centers, contractors, and home improvement businesses maximize their peak seasons while maintaining steady growth year-round.';
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
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html($header_title); ?></h1>
                <p class="page-subtitle"><?php echo esc_html($header_subtitle); ?></p>
            </div>
        </section>

        <!-- Industry Overview -->
        <section class="industry-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <h2><?php echo esc_html($overview_title); ?></h2>
                        <p><?php echo esc_html($overview_content); ?></p>
                        
                        <div class="industry-challenges">
                            <h3><?php echo esc_html($challenges_title); ?></h3>
                            <ul>
                                <?php foreach ($challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image">
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" alt="<?php echo esc_attr($overview_title); ?>" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/home-garden-overview.jpg" alt="Home & Garden Digital Marketing" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Home & Garden Services -->
        <section class="home-garden-services">
            <div class="section-content">
                <h2><?php echo esc_html($services_title); ?></h2>
                <div class="benefits-grid-2x2">
                    <?php 
                    // Default services if none set
                    if (empty($services)) {
                        $services = array(
                            array(
                                'icon' => 'fas fa-calendar-alt',
                                'title' => 'Seasonal Campaign Optimization',
                                'description' => 'Maximize revenue during peak seasons with strategically planned campaigns that target homeowners when they\'re ready to invest in their properties.',
                                'features' => array('Spring landscaping campaigns', 'Summer maintenance promotions', 'Fall cleanup and preparation', 'Winter planning and indoor projects')
                            ),
                            array(
                                'icon' => 'fas fa-camera',
                                'title' => 'Visual Content Marketing',
                                'description' => 'Showcase stunning transformations with before/after content that demonstrates your expertise and builds trust with potential customers.',
                                'features' => array('Before/after transformation showcases', 'Time-lapse project videos', 'Pinterest optimization for inspiration', 'Instagram visual storytelling')
                            ),
                            array(
                                'icon' => 'fas fa-map-marker-alt',
                                'title' => 'Local Service Area Marketing',
                                'description' => 'Dominate your local service areas with geo-targeted campaigns that reach homeowners exactly when they need your services.',
                                'features' => array('Hyper-local SEO optimization', 'Google My Business management', 'Location-based PPC campaigns', 'Neighborhood-specific targeting')
                            ),
                            array(
                                'icon' => 'fas fa-chart-line',
                                'title' => 'Lead Generation & Conversion',
                                'description' => 'Convert website visitors into paying customers with optimized landing pages, quote request forms, and follow-up automation.',
                                'features' => array('Quote request optimization', 'Consultation booking systems', 'Follow-up automation', 'Seasonal promotion campaigns')
                            )
                        );
                    }
                    
                    foreach ($services as $service): ?>
                      <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($service['icon']); ?>"></i>
                        </div>
                        <div class="benefit-content">
                            <h3><?php echo esc_html($service['title']); ?></h3>
                            <p><?php echo esc_html($service['description']); ?></p>
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
        <section class="home-garden-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <?php 
                        $case_study_label = get_post_meta(get_the_ID(), '_home_garden_case_study_label', true) ?: 'Success Story';
                        $case_study_title = get_post_meta(get_the_ID(), '_home_garden_case_study_title', true) ?: 'Blooming Gardens: 220% Seasonal Revenue Boost';
                        $case_study_content = get_post_meta(get_the_ID(), '_home_garden_case_study_content', true) ?: 'Blooming Gardens, a local garden center and landscaping company, needed to maximize their peak spring season while building year-round revenue streams.';
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
                        <span class="case-study-label"><?php echo esc_html($case_study_label); ?></span>
                        <h2><?php echo esc_html($case_study_title); ?></h2>
                        <p><?php echo esc_html($case_study_content); ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo esc_html($case_study_challenge_title); ?></h3>
                            <ul>
                                <?php foreach ($case_study_challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo esc_html($case_study_solution_title); ?></h3>
                            <ul>
                                <?php foreach ($case_study_solutions as $solution): ?>
                                    <li><?php echo esc_html($solution); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
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
                        <h3><?php echo esc_html($case_study_results_title); ?></h3>
                        <div class="results-grid">
                            <?php foreach ($case_study_results as $result): ?>
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
        </section>        <!-- Seasonal Marketing Calendar -->
        <section class="seasonal-calendar">
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
                <h2><?php echo esc_html($calendar_title); ?></h2>
                <div class="calendar-grid">
                    <?php foreach ($seasons as $index => $season): 
                        $season_class = '';
                        if (strpos(strtolower($season['title']), 'spring') !== false) $season_class = 'spring';
                        elseif (strpos(strtolower($season['title']), 'summer') !== false) $season_class = 'summer';
                        elseif (strpos(strtolower($season['title']), 'fall') !== false) $season_class = 'fall';
                        elseif (strpos(strtolower($season['title']), 'winter') !== false) $season_class = 'winter';
                    ?>
                    <div class="season-card <?php echo esc_attr($season_class); ?>">
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
        <section class="visual-marketing">
            <div class="section-content">
                <?php 
                $visual_title = get_post_meta(get_the_ID(), '_home_garden_visual_title', true) ?: 'The Power of Visual Marketing for Home & Garden';
                $visual_examples = get_post_meta(get_the_ID(), '_home_garden_visual_examples', true) ?: array();
                
                // Default examples if none set
                if (empty($visual_examples)) {
                    $visual_examples = array(
                        array(
                            'image' => get_template_directory_uri() . '/assets/images/industries/before-after-landscape.jpg',
                            'title' => 'Before/After Transformations',
                            'description' => 'Showcase dramatic transformations that demonstrate your expertise and build trust with potential customers.',
                            'stats' => array('↗ 340% higher engagement', '↗ 85% more inquiries')
                        ),
                        array(
                            'image' => get_template_directory_uri() . '/assets/images/industries/time-lapse-garden.jpg',
                            'title' => 'Time-lapse Project Videos',
                            'description' => 'Document your projects from start to finish with engaging time-lapse videos that showcase your process.',
                            'stats' => array('↗ 250% video completion rate', '↗ 120% social shares')
                        ),
                        array(
                            'image' => get_template_directory_uri() . '/assets/images/industries/seasonal-inspiration.jpg',
                            'title' => 'Seasonal Inspiration Content',
                            'description' => 'Share seasonal tips, plant care guides, and inspiration content that keeps your audience engaged year-round.',
                            'stats' => array('↗ 180% Pinterest traffic', '↗ 95% repeat visitors')
                        )
                    );
                }
                ?>
                <h2><?php echo esc_html($visual_title); ?></h2>
                <div class="visual-examples">
                    <?php foreach ($visual_examples as $example): ?>
                    <div class="example-card">
                        <div class="example-image">
                            <?php if (!empty($example['image'])): ?>
                                <img src="<?php echo esc_url($example['image']); ?>" alt="<?php echo esc_attr($example['title']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="example-content">
                            <h3><?php echo esc_html($example['title']); ?></h3>
                            <p><?php echo esc_html($example['description']); ?></p>
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
        <section class="home-garden-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <?php 
                    $testimonial_quote = get_post_meta(get_the_ID(), '_home_garden_testimonial_quote', true) ?: '"Working with Aimpro Digital transformed our seasonal business model. Their strategic approach to seasonal campaigns helped us generate 220% more revenue during peak season, and their year-round content strategy keeps customers engaged even in winter. The visual marketing campaigns they created showcase our work beautifully and generate consistent inquiries."';
                    $testimonial_name = get_post_meta(get_the_ID(), '_home_garden_testimonial_name', true) ?: 'Sarah Mitchell';
                    $testimonial_position = get_post_meta(get_the_ID(), '_home_garden_testimonial_position', true) ?: 'Owner, Blooming Gardens';
                    $testimonial_company = get_post_meta(get_the_ID(), '_home_garden_testimonial_company', true) ?: 'Garden Center & Landscaping Services';
                    ?>
                    <blockquote>
                        <?php echo esc_html($testimonial_quote); ?>
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
        <section class="home-garden-cta text-center">
            <div class="section-content">
                <?php 
                $cta_title = get_post_meta(get_the_ID(), '_home_garden_cta_title', true) ?: 'Ready to Grow Your Home & Garden Business?';
                $cta_subtitle = get_post_meta(get_the_ID(), '_home_garden_cta_subtitle', true) ?: 'Let\'s create a seasonal marketing strategy that maximizes your peak seasons and builds year-round revenue.';
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
                <h2><?php echo esc_html($cta_title); ?></h2>
                <p><?php echo esc_html($cta_subtitle); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url($cta_primary_url); ?>" class="btn btn-primary"><?php echo esc_html($cta_primary_text); ?></a>
                    <a href="<?php echo esc_url($cta_secondary_url); ?>" class="btn btn-secondary"><?php echo esc_html($cta_secondary_text); ?></a>
                </div>
                <div class="cta-benefits">
                    <?php foreach ($cta_benefits as $benefit): ?>
                        <span class="benefit"><?php echo esc_html($benefit); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
