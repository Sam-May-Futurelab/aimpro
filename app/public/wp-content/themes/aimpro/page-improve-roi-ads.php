<?php
/**
 * Template Name: Improve ROI from Ads Solution Page
 * Description: Ad optimisation solution for maximum ROI
 */

get_header(); ?>

<main id="main" class="main-content improve-roi-ads-page">    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/solutions'); ?>">Solutions</a>
                <span class="separator">›</span>
                <span class="current">Improve ROI from Ads</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_header_title', true) ?: 'Improve ROI from Ads'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_header_subtitle', true) ?: 'Maximize your advertising spend with data-driven optimisation strategies that deliver measurable results'); ?></p>
            </div>
        </section>

        <!-- Solution Overview -->
        <section class="solution-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_overview_title', true) ?: 'Turn Ad Spend Into Profitable Growth'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_overview_content', true) ?: 'Every advertising dollar should drive real business results. Our comprehensive ad optimisation strategies combine advanced analytics, conversion tracking, and continuous testing to maximise your return on ad spend (ROAS) while reducing customer acquisition costs and improving campaign performance.'); ?></p>
                        
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
                                <img src="<?php echo esc_url($overview_image); ?>" alt="Ad ROI optimisation Strategy" />
                            </div>
                        <?php else: ?>
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solutions/ad-roi-overview.jpg" alt="Ad ROI optimisation Strategy" />
                            </div>
                        <?php endif; ?>
                        <div class="overview-image-cta animate-on-scroll animate-scale-up">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary overview-cta-btn">Improve Your Ad ROI</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- ROI optimisation Methods -->
        <section class="roi-optimisation-methods">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_methods_title', true) ?: 'Our Ad ROI optimisation Methods'); ?></h2>
                <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                        <h3>Advanced Conversion Tracking</h3>
                        <p>Implement comprehensive tracking systems to measure true ROI and optimise for the metrics that matter most.</p>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Enhanced e-commerce tracking</li>
                            <li>Offline conversion tracking</li>
                            <li>Customer lifetime value analysis</li>
                            <li>Attribution modeling setup</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-users"></i></div>
                        <h3>Audience optimisation</h3>
                        <p>Refine targeting to reach high-value prospects while reducing spend on low-converting audiences.</p>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Audience segmentation analysis</li>
                            <li>Lookalike audience creation</li>
                            <li>Negative audience exclusions</li>
                            <li>Custom intent audiences</li>
                        </ul>                    </div>
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                        <h3>Landing Page optimisation</h3>
                        <p>Improve post-click experience to maximise conversion rates and reduce cost per conversion.</p>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Landing page A/B testing</li>
                            <li>Conversion rate optimisation</li>
                            <li>Mobile experience optimisation</li>
                            <li>Page speed improvements</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>        <!-- Case Study Section with Better Styling -->
        <section id="case-study" class="case-study-showcase" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); padding: 80px 0;">
            <div class="container">
                <div class="case-study-wrapper">
                    <!-- Header -->
                    <div class="case-study-intro animate-on-scroll animate-fade-up" style="text-align: center; margin-bottom: 60px;">
                        <div class="case-study-badge" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); color: white; padding: 8px 16px; border-radius: 50px; margin-bottom: 20px; font-weight: 600;">
                            <span class="badge-icon">📈</span>
                            <span class="badge-text">Success Story</span>
                        </div>
                        <h2 class="case-study-title" style="font-size: 2.5rem; font-weight: 700; color: #1e293b; margin-bottom: 20px;">EcoHome Solutions Achieves <span class="highlight-number" style="color: #f15a25;">320% ROI</span> Improvement</h2>
                        <p class="case-study-subtitle" style="font-size: 1.2rem; color: #64748b; max-width: 700px; margin: 0 auto;">Transforming a wasteful £15,000/month Google Ads spend into a high-performing revenue engine</p>
                    </div>

                    <!-- Story Flow -->
                    <div class="case-study-flow" style="max-width: 1000px; margin: 0 auto;">
                        <!-- Challenge -->
                        <div class="story-section challenge-section animate-on-scroll animate-slide-left" style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                            <div class="section-header" style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div class="section-icon challenge-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">⚡</div>
                                <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">The Challenge</h3>
                            </div>
                            <div class="section-content">
                                <p class="story-text" style="font-size: 1.1rem; line-height: 1.8; color: #64748b; margin-bottom: 25px;">EcoHome Solutions was spending £15,000/month on Google Ads with poor returns and high cost per acquisition. Despite significant investment, unclear targeting and poor campaign structure were causing massive budget waste.</p>
                                <div class="inline-metrics" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 20px;">
                                    <div class="metric-item" style="text-align: center; background: #fee2e2; padding: 15px; border-radius: 10px;">
                                        <span class="metric-number" style="display: block; font-size: 1.8rem; font-weight: 700; color: #dc2626;">£250+</span>
                                        <span class="metric-text" style="font-size: 0.9rem; color: #7f1d1d;">Cost per Lead</span>
                                    </div>
                                    <div class="metric-item" style="text-align: center; background: #fee2e2; padding: 15px; border-radius: 10px;">
                                        <span class="metric-number" style="display: block; font-size: 1.8rem; font-weight: 700; color: #dc2626;">1.2%</span>
                                        <span class="metric-text" style="font-size: 0.9rem; color: #7f1d1d;">Conversion Rate</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Arrow -->
                        <div class="story-arrow animate-on-scroll animate-scale-up" style="text-align: center; margin: 20px 0;">
                            <div class="arrow-icon" style="width: 60px; height: 60px; background: #f15a25; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">↓</div>
                            <span class="arrow-text" style="display: block; margin-top: 10px; font-weight: 600; color: #64748b;">Our Strategic Approach</span>
                        </div>

                        <!-- Solution -->
                        <div class="story-section solution-section animate-on-scroll animate-slide-right" style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                            <div class="section-header" style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div class="section-icon solution-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">🎯</div>
                                <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">Strategic Transformation</h3>
                            </div>
                            <div class="section-content">
                                <div class="solution-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
                                    <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                        <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Complete Conversion Tracking Overhaul</strong>
                                        <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Implemented comprehensive tracking to measure true performance and ROI</p>
                                    </div>
                                    <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                        <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Campaign Restructuring & Optimisation</strong>
                                        <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Rebuilt campaigns with precise targeting and improved ad group structure</p>
                                    </div>
                                    <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                        <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Landing Page Redesign & Testing</strong>
                                        <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Created high-converting landing pages optimised for their specific audience</p>
                                    </div>
                                    <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                        <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Advanced Bidding Strategy Implementation</strong>
                                        <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Deployed smart bidding strategies to maximise ROI and reduce costs</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Arrow -->
                        <div class="story-arrow animate-on-scroll animate-scale-up" style="text-align: center; margin: 20px 0;">
                            <div class="arrow-icon" style="width: 60px; height: 60px; background: #f15a25; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">↓</div>
                            <span class="arrow-text" style="display: block; margin-top: 10px; font-weight: 600; color: #64748b;">The Results</span>
                        </div>

                        <!-- Results -->
                        <div class="story-section results-section animate-on-scroll animate-fade-up" style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                            <div class="section-header" style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px; justify-content: center;">
                                <div class="section-icon results-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">🚀</div>
                                <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">Exceptional Results After 5 Months</h3>
                            </div>
                            <div class="section-content">
                                <div class="results-showcase" style="text-align: center;">
                                    <div class="primary-result" style="margin-bottom: 30px;">
                                        <span class="big-number" style="display: block; font-size: 4rem; font-weight: 800; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">320%</span>
                                        <span class="big-label" style="font-size: 1.2rem; color: #64748b; font-weight: 600;">ROI Improvement</span>
                                    </div>
                                    <div class="secondary-results" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 25px; max-width: 600px; margin: 0 auto;">
                                        <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                            <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">65%</span>
                                            <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">Cost Reduction</span>
                                        </div>
                                        <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                            <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">180%</span>
                                            <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">Conversion Rate Increase</span>
                                        </div>
                                        <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                            <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">450%</span>
                                            <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">Lead Volume Growth</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="case-study-cta-redesigned animate-on-scroll animate-fade-up" style="margin-top: 40px; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); padding: 40px; border-radius: 16px; text-align: center;">
                        <div class="cta-container" style="display: flex; align-items: center; justify-content: center; gap: 20px; flex-wrap: wrap;">
                            <div class="cta-icon">
                                <span class="success-emoji" style="font-size: 2rem;">🎯</span>
                            </div>
                            <div class="cta-text-content" style="color: white;">
                                <h4 class="cta-headline" style="font-size: 1.5rem; font-weight: 700; margin: 0 0 8px 0;">Ready for Similar Results?</h4>
                                <p class="cta-description" style="margin: 0; opacity: 0.9;">Let's transform your Google Ads into a profitable growth engine</p>
                            </div>
                            <div class="cta-action">
                                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary cta-btn-enhanced" style="background: white; color: #f15a25; border: none; padding: 15px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-block; transition: all 0.3s ease;">Get Your Free ROI Audit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ROI Process -->
        <section class="roi-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_process_title', true) ?: 'Our Ad ROI optimisation Process'); ?></h2>
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
                                'title' => 'Campaign optimisation',
                                'description' => 'Restructure campaigns, refine targeting, and optimise bidding strategies for improved performance.'
                            ),
                            array(
                                'number' => '4',
                                'title' => 'Continuous Testing',
                                'description' => 'Ongoing A/B testing and optimisation to maintain and improve ROI over time.'
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
        </section>        <!-- Platform optimisation -->
        <section class="platform-optimisation">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_platforms_title', true) ?: 'Platform-Specific ROI optimisation'); ?></h2>
                <div class="platforms-grid">
                    
                    <?php
                    $platforms = get_post_meta(get_the_ID(), '_improve_roi_ads_platforms', true);
                    if (empty($platforms)) {
                        $platforms = array(
                            array(
                                'title' => 'Google Ads optimisation',
                                'features' => array(
                                    'Smart bidding strategy implementation',
                                    'Quality Score improvements',
                                    'Search impression share analysis',
                                    'Shopping campaign optimisation',
                                    'Performance Max campaign setup'
                                ),
                                'results' => 'Average: 250% Google Ads ROI improvement'
                            ),
                            array(
                                'title' => 'Facebook Ads optimisation',
                                'features' => array(
                                    'iOS 14.5+ tracking solutions',
                                    'Conversion API implementation',
                                    'Creative testing automation',
                                    'Audience overlap elimination',
                                    'Campaign budget optimisation'
                                ),
                                'results' => 'Average: 180% Facebook ROI improvement'
                            ),
                            array(
                                'title' => 'LinkedIn Ads optimisation',
                                'features' => array(
                                    'B2B audience targeting refinement',
                                    'Lead generation form optimisation',
                                    'Sponsored content optimisation',
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
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_metrics_title', true) ?: 'Key ROI Metrics We Track & optimise'); ?></h2>
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
                                    'Time of Day optimisation'
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
                        "<?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_testimonial_quote', true) ?: 'Aimpro Digital took our ad performance from break-even to highly profitable. Our ROI improved by 320% and we\'re now getting 4x more leads for the same budget. Their optimisation expertise is exceptional.'); ?>"
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
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_cta_subtitle', true) ?: 'Let\'s analyse your current ad performance and create a strategy to dramatically improve your return on investment.'); ?></p>                    <div class="cta-buttons animate-on-scroll animate-slide-up">
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_improve_roi_ads_cta_primary_url', true) ?: '/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_improve_roi_ads_cta_primary_text', true) ?: 'Get Free Ad Account Audit'); ?></a>
                    </div>
                    <div class="cta-features animate-on-scroll animate-fade-up">
                        <?php
                        $features = get_post_meta(get_the_ID(), '_improve_roi_ads_cta_features', true);
                        if (empty($features)) {
                            $features = array(
                                '✓ Complete performance analysis',
                                '✓ ROI improvement roadmap',
                                '✓ Custom optimisation strategy'
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
