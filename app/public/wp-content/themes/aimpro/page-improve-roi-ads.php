<?php
/**
 * Template Name: Improve ROI from Ads Solution Page
 * Description: Ad optimization solution for maximum ROI
 */

get_header(); ?>

<main id="main" class="main-content improve-roi-ads-page">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_header_title', true) ?: 'Improve ROI from Ads'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_header_subtitle', true) ?: 'Maximize your advertising spend with data-driven optimization strategies that deliver measurable results'); ?></p>
            </div>
        </section>

        <!-- Solution Overview -->
        <section class="solution-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_overview_title', true) ?: 'Turn Ad Spend Into Profitable Growth'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_overview_content', true) ?: 'Every advertising dollar should drive real business results. Our comprehensive ad optimization strategies combine advanced analytics, conversion tracking, and continuous testing to maximize your return on ad spend (ROAS) while reducing customer acquisition costs and improving campaign performance.'); ?></p>
                        
                        <div class="solution-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_challenges_title', true) ?: 'Ad ROI Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), '_improve_roi_ads_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'High cost per acquisition (CPA)',
                                        'Poor ad targeting and audience selection',
                                        'Low conversion rates from ad traffic',
                                        'Wasted budget on underperforming campaigns',
                                        'Lack of proper conversion tracking',
                                        'Difficulty scaling profitable campaigns'
                                    );
                                }
                                foreach ($challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>                    </div>                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php 
                        $overview_image = get_post_meta(get_the_ID(), '_improve_roi_ads_overview_image', true);
                        if ($overview_image): ?>
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($overview_image); ?>" alt="Ad ROI Optimization Strategy" />
                            </div>
                        <?php else: ?>
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solutions/ad-roi-overview.jpg" alt="Ad ROI Optimization Strategy" />
                            </div>
                        <?php endif; ?>
                        <div class="overview-image-cta animate-on-scroll animate-scale-up">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary overview-cta-btn">Improve Your Ad ROI</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- ROI Optimization Methods -->
        <section class="roi-optimization-methods">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_methods_title', true) ?: 'Our Ad ROI Optimization Methods'); ?></h2>
                <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                        <h3>Advanced Conversion Tracking</h3>
                        <p>Implement comprehensive tracking systems to measure true ROI and optimize for the metrics that matter most.</p>
                        <ul style="text-align: left; color: #666; line-height: 1.8;">
                            <li>Enhanced e-commerce tracking</li>
                            <li>Offline conversion tracking</li>
                            <li>Customer lifetime value analysis</li>
                            <li>Attribution modeling setup</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-users"></i></div>
                        <h3>Audience Optimization</h3>
                        <p>Refine targeting to reach high-value prospects while reducing spend on low-converting audiences.</p>
                        <ul style="text-align: left; color: #666; line-height: 1.8;">
                            <li>Audience segmentation analysis</li>
                            <li>Lookalike audience creation</li>
                            <li>Negative audience exclusions</li>
                            <li>Custom intent audiences</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-layer-group"></i></div>
                        <h3>Campaign Structure Optimization</h3>
                        <p>Restructure campaigns for better performance, clearer data insights, and more efficient budget allocation.</p>
                        <ul style="text-align: left; color: #666; line-height: 1.8;">
                            <li>Single keyword ad groups (SKAGs)</li>
                            <li>Campaign segmentation strategies</li>
                            <li>Ad group theme optimization</li>
                            <li>Budget allocation modeling</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                        <h3>Landing Page Optimization</h3>
                        <p>Improve post-click experience to maximize conversion rates and reduce cost per conversion.</p>
                        <ul style="text-align: left; color: #666; line-height: 1.8;">
                            <li>Landing page A/B testing</li>
                            <li>Conversion rate optimization</li>
                            <li>Mobile experience optimization</li>
                            <li>Page speed improvements</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>        <!-- ROI Success Story -->
        <section class="roi-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <span class="case-study-label"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_label', true) ?: 'Success Story'); ?></span>
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_title', true) ?: 'EcoHome Solutions: 320% ROI Improvement'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_content', true) ?: 'EcoHome Solutions was spending £15,000/month on Google Ads with poor returns and high cost per acquisition.'); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_challenge_title', true) ?: 'The Challenge'); ?></h3>
                            <ul>
                                <?php
                                $case_challenges = get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_challenges', true);
                                if (empty($case_challenges)) {
                                    $case_challenges = array(
                                        '£15,000/month ad spend with poor ROI',
                                        'Cost per acquisition of £250+ per lead',
                                        'Low conversion rates (1.2%)',
                                        'No proper conversion tracking in place'
                                    );
                                }
                                foreach ($case_challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_solution_title', true) ?: 'Our Solution'); ?></h3>
                            <ul>
                                <?php
                                $case_solutions = get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_solutions', true);
                                if (empty($case_solutions)) {
                                    $case_solutions = array(
                                        'Complete conversion tracking overhaul',
                                        'Campaign restructuring and optimization',
                                        'Landing page redesign and testing',
                                        'Advanced bidding strategy implementation'
                                    );
                                }
                                foreach ($case_solutions as $solution) {
                                    echo '<li>' . esc_html($solution) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_results_title', true) ?: 'Results After 5 Months'); ?></h3>
                        <div class="results-grid">
                            <?php
                            $results = get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_results', true);
                            if (empty($results)) {
                                $results = array(
                                    array(
                                        'number' => '320%',
                                        'label' => 'ROI Improvement'
                                    ),
                                    array(
                                        'number' => '65%',
                                        'label' => 'Cost Reduction'
                                    ),
                                    array(
                                        'number' => '180%',
                                        'label' => 'Conversion Rate Increase'
                                    ),
                                    array(
                                        'number' => '450%',
                                        'label' => 'Lead Volume Growth'
                                    )
                                );
                            }
                            foreach ($results as $result) :
                            ?>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_link_url', true) ?: '/case-studies')); ?>" class="case-study-link animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_case_study_link_text', true) ?: 'Read Full Case Study'); ?></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ROI Process -->
        <section class="roi-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_process_title', true) ?: 'Our Ad ROI Optimization Process'); ?></h2>
                <div class="process-steps">
                    
                    <?php
                    $process_steps = get_post_meta(get_the_ID(), '_improve_roi_ads_process_steps', true);
                    if (empty($process_steps)) {
                        $process_steps = array(
                            array(
                                'number' => '1',
                                'title' => 'Performance Audit',
                                'description' => 'Comprehensive analysis of current ad performance, tracking setup, and ROI calculation methods.'
                            ),
                            array(
                                'number' => '2',
                                'title' => 'Tracking & Analytics Setup',
                                'description' => 'Implement proper conversion tracking and analytics to measure true campaign performance and ROI.'
                            ),
                            array(
                                'number' => '3',
                                'title' => 'Campaign Optimization',
                                'description' => 'Restructure campaigns, refine targeting, and optimize bidding strategies for improved performance.'
                            ),
                            array(
                                'number' => '4',
                                'title' => 'Continuous Testing',
                                'description' => 'Ongoing A/B testing and optimization to maintain and improve ROI over time.'
                            )
                        );
                    }

                    foreach ($process_steps as $step) :
                    ?>
                    <div class="process-step animate-on-scroll animate-stagger animate-slide-up">
                        <div class="step-number"><?php echo esc_html($step['number']); ?></div>
                        <div class="step-content">
                            <h3><?php echo esc_html($step['title']); ?></h3>
                            <p><?php echo esc_html($step['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="process-cta animate-on-scroll animate-scale-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Maximize Your Ad ROI</a>
                </div>
            </div>
        </section>        <!-- Platform Optimization -->
        <section class="platform-optimization">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_platforms_title', true) ?: 'Platform-Specific ROI Optimization'); ?></h2>
                <div class="platforms-grid">
                    
                    <?php
                    $platforms = get_post_meta(get_the_ID(), '_improve_roi_ads_platforms', true);
                    if (empty($platforms)) {
                        $platforms = array(
                            array(
                                'title' => 'Google Ads Optimization',
                                'features' => array(
                                    'Smart bidding strategy implementation',
                                    'Quality Score improvements',
                                    'Search impression share analysis',
                                    'Shopping campaign optimization',
                                    'Performance Max campaign setup'
                                ),
                                'results' => 'Average: 250% Google Ads ROI improvement'
                            ),
                            array(
                                'title' => 'Facebook Ads Optimization',
                                'features' => array(
                                    'iOS 14.5+ tracking solutions',
                                    'Conversion API implementation',
                                    'Creative testing automation',
                                    'Audience overlap elimination',
                                    'Campaign budget optimization'
                                ),
                                'results' => 'Average: 180% Facebook ROI improvement'
                            ),
                            array(
                                'title' => 'LinkedIn Ads Optimization',
                                'features' => array(
                                    'B2B audience targeting refinement',
                                    'Lead generation form optimization',
                                    'Sponsored content optimization',
                                    'Account-based marketing setup',
                                    'LinkedIn matched audiences'
                                ),
                                'results' => 'Average: 200% LinkedIn ROI improvement'
                            )
                        );
                    }

                    foreach ($platforms as $platform) :
                    ?>
                    <div class="platform-card animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html($platform['title']); ?></h3>
                        <ul class="platform-features">
                            <?php foreach ($platform['features'] as $feature) : ?>
                                <li><?php echo esc_html($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="platform-results">
                            <span><?php echo esc_html($platform['results']); ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        
        <!-- ROI Metrics -->
        <section class="roi-metrics">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_metrics_title', true) ?: 'Key ROI Metrics We Track & Optimize'); ?></h2>
                <div class="metrics-grid">
                    
                    <?php
                    $metrics = get_post_meta(get_the_ID(), '_improve_roi_ads_metrics', true);
                    if (empty($metrics)) {
                        $metrics = array(
                            array(
                                'title' => 'Performance Metrics',
                                'items' => array(
                                    'Return on Ad Spend (ROAS)',
                                    'Cost Per Acquisition (CPA)',
                                    'Click-Through Rate (CTR)',
                                    'Conversion Rate',
                                    'Quality Score'
                                )
                            ),
                            array(
                                'title' => 'Business Metrics',
                                'items' => array(
                                    'Customer Lifetime Value (CLV)',
                                    'Revenue Per Click',
                                    'Profit Margin Per Campaign',
                                    'Payback Period',
                                    'Customer Acquisition Cost'
                                )
                            ),
                            array(
                                'title' => 'Efficiency Metrics',
                                'items' => array(
                                    'Impression Share',
                                    'Search Lost IS (Budget)',
                                    'Search Lost IS (Rank)',
                                    'Cost Per Thousand (CPM)',
                                    'Average Position'
                                )
                            ),
                            array(
                                'title' => 'Targeting Metrics',
                                'items' => array(
                                    'Audience Overlap',
                                    'Demographic Performance',
                                    'Geographic Efficiency',
                                    'Device Performance',
                                    'Time of Day Optimization'
                                )
                            )
                        );
                    }

                    foreach ($metrics as $metric) :
                    ?>
                    <div class="metric-category animate-on-scroll animate-stagger animate-slide-up">
                        <h3><?php echo esc_html($metric['title']); ?></h3>
                        <ul class="metric-list">
                            <?php foreach ($metric['items'] as $item) : ?>
                                <li><?php echo esc_html($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>

        <!-- ROI Testimonial (No Image) -->
        <section class="roi-testimonial">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <blockquote>
                        "<?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_testimonial_quote', true) ?: 'Aimpro Digital took our ad performance from break-even to highly profitable. Our ROI improved by 320% and we\'re now getting 4x more leads for the same budget. Their optimization expertise is exceptional.'); ?>"
                    </blockquote>
                    <div class="testimonial-author animate-on-scroll animate-slide-up">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_testimonial_name', true) ?: 'Michael Thompson'); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_testimonial_position', true) ?: 'Marketing Director, EcoHome Solutions'); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_testimonial_company', true) ?: 'Green Technology Company'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="cta-section">
            <div class="section-content">
                <div class="cta-content animate-on-scroll animate-fade-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_cta_title', true) ?: 'Ready to Maximize Your Ad ROI?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_cta_subtitle', true) ?: 'Let\'s analyze your current ad performance and create a strategy to dramatically improve your return on investment.'); ?></p>                    <div class="cta-buttons animate-on-scroll animate-slide-up">
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_improve_roi_ads_cta_primary_url', true) ?: '/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_cta_primary_text', true) ?: 'Get Free Ad Account Audit'); ?></a>
                    </div>
                    <div class="cta-features animate-on-scroll animate-fade-up">
                        <?php
                        $features = get_post_meta(get_the_ID(), '_improve_roi_ads_cta_features', true);
                        if (empty($features)) {
                            $features = array(
                                '✓ Complete performance analysis',
                                '✓ ROI improvement roadmap',
                                '✓ Custom optimization strategy'
                            );
                        }
                        foreach ($features as $feature) {
                            echo '<span>' . esc_html($feature) . '</span>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
