﻿<?php
/**
 * Template Name: Solutions Page
 * Description: Main solutions hub page
 */

get_header(); ?>

<style>
/* Center process step numbers on mobile for Solutions page */
@media (max-width: 768px) {
    .process-step {
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .step-number {
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }
    
    .step-content {
        text-align: center;
        width: 100%;
    }
    
    .step-content h3 {
        text-align: center;
    }
    
    .step-content p {
        text-align: center;
    }
}
</style>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">Solutions</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_header_title', true) ?: 'Solutions'); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_header_subtitle', true) ?: 'Proven digital marketing solutions that drive real business results'); ?></p>
            </div>
        </section>        <!-- Solutions Introduction -->
        <section class="solutions-intro">
            <div class="section-content">
                <div class="intro-content animate-on-scroll animate-slide-left">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_intro_title', true) ?: 'Transform Your Business with Strategic Digital Solutions'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_intro_content', true) ?: 'Every business faces unique challenges in today\'s digital landscape. Our comprehensive solutions are designed to address your most pressing needs, from generating quality leads to maximising ROI from your marketing investments. Discover how our proven methodologies can accelerate your growth.'); ?></p>
                </div>                <div class="solution-stats animate-on-scroll animate-stagger animate-scale-up">
                    <?php 
                    $solution_stats = get_post_meta(get_the_ID(), '_solutions_stats', true);
                    if (empty($solution_stats)) {
                        $solution_stats = array(
                            array('number' => '6', 'label' => 'Core Solutions'),
                            array('number' => '300%', 'label' => 'Average ROI Increase'),
                            array('number' => '500+', 'label' => 'Successful Projects')
                        );
                    }
                    
                    foreach ($solution_stats as $stat) {
                        ?>
                        <div class="stat-item">
                            <div class="stat-number"><?php echo wp_kses_post($stat['number']); ?></div>
                            <div class="stat-label"><?php echo wp_kses_post($stat['label']); ?></div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- Solutions Grid -->
        <section class="solutions-section">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_grid_title', true) ?: 'Our Digital Marketing Solutions'); ?></h2>
                <div class="solutions-main-grid">
                    <?php 
                    $solutions_cards = get_post_meta(get_the_ID(), '_solutions_cards', true);
                    if (empty($solutions_cards)) {
                        $solutions_cards = array(
                            array(
                                'title' => 'Lead Generation (B2B/B2C)',
                                'description' => 'Generate high-quality leads that convert into customers through targeted campaigns and proven funnels.',
                                'features' => array(
                                    'Targeted PPC campaigns',
                                    'Lead magnet creation',
                                    'Landing page optimisation',
                                    'CRM integration & nurturing'
                                ),
                                'results' => 'Average: 250% lead increase',
                                'cta_text' => 'Explore Lead Generation',
                                'cta_url' => '/lead-generation'
                            ),
                            array(
                                'title' => 'Automate Marketing',
                                'description' => 'Streamline your marketing processes with intelligent automation that nurtures leads and drives conversions 24/7.',
                                'features' => array(
                                    'Email marketing automation',
                                    'Lead scoring & segmentation',
                                    'behavioural trigger campaigns',
                                    'Multi-channel workflows'
                                ),
                                'results' => 'Average: 40% time savings',
                                'cta_text' => 'Discover Automation',
                                'cta_url' => '/automate-marketing'
                            ),
                            array(
                                'title' => 'Improve ROI from Ads',
                                'description' => 'Maximize your advertising spend with data-driven optimisation strategies that deliver measurable results.',
                                'features' => array(
                                    'PPC campaign optimisation',
                                    'Conversion tracking setup',
                                    'Audience refinement',
                                    'Bid strategy optimisation'
                                ),
                                'results' => 'Average: 180% ROI improvement',
                                'cta_text' => 'Boost Ad Performance',
                                'cta_url' => '/improve-roi-ads'
                            ),
                            array(
                                'title' => 'Rank Higher Locally',
                                'description' => 'Dominate local search results and attract customers in your area with comprehensive local SEO strategies.',
                                'features' => array(
                                    'Google My Business optimisation',
                                    'Local citation building',
                                    'Review management',
                                    'Local keyword targeting'
                                ),
                                'results' => 'Average: 300% local visibility boost',
                                'cta_text' => 'Dominate Local Search',
                                'cta_url' => '/rank-higher-locally'
                            ),
                            array(
                                'title' => 'Build a High-Converting Website',
                                'description' => 'Create a website that turns visitors into customers with conversion-focused design and optimisation.',
                                'features' => array(
                                    'Conversion rate optimisation',
                                    'User experience design',
                                    'A/B testing implementation',
                                    'Mobile optimisation'
                                ),
                                'results' => 'Average: 150% conversion increase',
                                'cta_text' => 'Build Better Websites',
                                'cta_url' => '/high-converting-website'
                            ),
                            array(
                                'title' => 'Streamline Your Sales Funnel',
                                'description' => 'optimise every stage of your customer journey to reduce friction and increase conversion rates.',
                                'features' => array(
                                    'Funnel analysis & optimisation',
                                    'Customer journey mapping',
                                    'Conversion bottleneck removal',
                                    'Multi-step campaign design'
                                ),
                                'results' => 'Average: 200% funnel efficiency gain',
                                'cta_text' => 'optimise Your Funnel',
                                'cta_url' => '/streamline-sales-funnel'
                            )
                        );
                    }
                      foreach ($solutions_cards as $card) {
                        ?>
                        <div class="solution-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3><?php echo wp_kses_post($card['title']); ?></h3>
                            <p><?php echo wp_kses_post($card['description']); ?></p>
                            <?php if (!empty($card['features'])) { ?>
                                <ul class="solution-features">
                                    <?php 
                                    $features = is_array($card['features']) ? $card['features'] : explode("\n", $card['features']);
                                    foreach ($features as $feature) { 
                                        if (trim($feature)) {
                                    ?>
                                        <li><?php echo esc_html(trim($feature)); ?></li>
                                    <?php 
                                        }
                                    } 
                                    ?>
                                </ul>
                            <?php } ?>
                            <div class="solution-results">
                                <?php echo wp_kses_post($card['results']); ?>
                            </div>
                            <a href="<?php echo esc_url(home_url($card['cta_url'])); ?>" class="solution-cta"><?php echo wp_kses_post($card['cta_text']); ?></a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- Solution Process -->
        <section class="solution-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_process_title', true) ?: 'Our Solution Implementation Process'); ?></h2>
                <div class="process-steps">
                    <?php 
                    $process_steps = get_post_meta(get_the_ID(), '_solutions_process_steps', true);
                    if (empty($process_steps)) {
                        $process_steps = array(
                            array(
                                'number' => '1',
                                'title' => 'Discovery & Analysis',
                                'description' => 'We analyse your current situation, challenges, and goals to identify the most impactful solutions.'
                            ),
                            array(
                                'number' => '2',
                                'title' => 'Custom Strategy Development',
                                'description' => 'Create a tailored strategy that combines the right solutions for your specific business needs.'
                            ),
                            array(
                                'number' => '3',
                                'title' => 'Implementation & Integration',
                                'description' => 'Deploy solutions with seamless integration into your existing systems and workflows.'
                            ),
                            array(
                                'number' => '4',
                                'title' => 'optimisation & Scaling',
                                'description' => 'Continuously monitor, optimise, and scale solutions based on performance data and results.'
                            )
                        );
                    }
                      foreach ($process_steps as $step) {
                        ?>
                        <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                            <div class="step-number"><?php echo esc_html($step['number']); ?></div>
                            <div class="step-content">
                                <h3><?php echo wp_kses_post($step['title']); ?></h3>
                                <p><?php echo wp_kses_post($step['description']); ?></p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- Success Stories -->
        <section class="solution-success">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_success_stories_title', true) ?: 'Solution Success Stories'); ?></h2>
                <div class="success-grid">
                    <?php 
                    $success_stories = get_post_meta(get_the_ID(), '_solutions_success_stories', true);
                    if (empty($success_stories)) {
                        $success_stories = array(
                            array(
                                'metric_number' => '450%',
                                'metric_label' => 'Lead Increase',
                                'title' => 'Manufacturing Company',
                                'description' => '"Our lead generation solution transformed their B2B marketing, generating 450% more qualified leads within 6 months."',
                                'solution_used' => 'Lead Generation + Marketing Automation'
                            ),
                            array(
                                'metric_number' => '320%',
                                'metric_label' => 'ROI Improvement',
                                'title' => 'E-commerce Retailer',
                                'description' => '"Ad optimisation and funnel streamlining resulted in 320% ROI improvement and 40% lower customer acquisition costs."',
                                'solution_used' => 'ROI optimisation + Sales Funnel'
                            ),
                            array(
                                'metric_number' => '500%',
                                'metric_label' => 'Local Visibility',
                                'title' => 'Professional Services',
                                'description' => '"Local SEO implementation increased their Google My Business visibility by 500% and doubled client inquiries."',
                                'solution_used' => 'Local SEO + Website optimisation'
                            )
                        );
                    }
                      foreach ($success_stories as $story) {
                        ?>
                        <div class="success-story animate-on-scroll animate-stagger animate-slide-left">
                            <div class="story-metric">
                                <span class="metric-number"><?php echo wp_kses_post($story['metric_number']); ?></span>
                                <span class="metric-label"><?php echo wp_kses_post($story['metric_label']); ?></span>
                            </div>
                            <div class="story-content">
                                <h3><?php echo wp_kses_post($story['title']); ?></h3>
                                <p><?php echo wp_kses_post($story['description']); ?></p>
                                <span class="story-solution"><?php echo wp_kses_post($story['solution_used']); ?></span>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- Solution CTA -->
        <section class="solution-cta-section">
            <div class="section-content">
                <div class="cta-content animate-on-scroll animate-scale-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_cta_title', true) ?: 'Ready to Transform Your Business?'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_cta_subtitle', true) ?: 'Let\'s identify the perfect solution combination for your unique challenges and growth goals.'); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_solutions_cta_primary_url', true) ?: '/contact')); ?>" class="btn btn-primary"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_cta_primary_text', true) ?: 'Get Free Strategy Session'); ?></a>
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_solutions_cta_secondary_url', true) ?: '/case-studies')); ?>" class="btn btn-secondary"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_solutions_cta_secondary_text', true) ?: 'View All Success Stories'); ?></a>
                    </div>
                    <div class="cta-benefits">
                        <?php
                        $cta_benefits = get_post_meta(get_the_ID(), '_solutions_cta_benefits', true);
                        if (empty($cta_benefits)) {
                            $cta_benefits = array(
                                '✓ Custom solution roadmap',
                                '✓ ROI projections included',
                                '✓ No obligation consultation'
                            );
                        }
                        
                        foreach ($cta_benefits as $benefit) {
                            echo '<span class="benefit">' . esc_html($benefit) . '</span>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
