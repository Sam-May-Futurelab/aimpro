<?php
/**
 * Template Name: Automate Marketing Solution Page
 * Description: Marketing automation solution for streamlined campaigns
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_header_title', true) ?: 'Automate Marketing'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_header_subtitle', true) ?: 'Streamline your marketing processes with intelligent automation that works 24/7'); ?></p>
            </div>
        </section>        <!-- Solution Overview -->
        <section class="solution-overview animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_overview_title', true) ?: 'Transform Manual Tasks Into Automated Success'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_overview_content', true) ?: 'Marketing automation eliminates repetitive tasks while delivering personalised experiences at scale. Our comprehensive automation strategies help you nurture leads, engage customers, and drive conversions without constant manual intervention, freeing your team to focus on strategy and growth.'); ?></p>
                        
                        <div class="solution-challenges">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_challenges_title', true) ?: 'Marketing Automation Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), '_automate_marketing_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'Time-consuming manual marketing tasks',
                                        'Inconsistent lead follow-up',
                                        'Difficulty scaling personalised campaigns',
                                        'Poor lead scoring and qualification',
                                        'Disconnected marketing and sales processes',
                                        'Lack of behavioural trigger campaigns'
                                    );
                                }
                                foreach ($challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php 
                        $overview_image = get_post_meta(get_the_ID(), '_automate_marketing_overview_image', true);
                        if ($overview_image): ?>
                            <div class="image-wrapper">
                                <img src="<?php echo esc_url($overview_image); ?>" alt="Marketing Automation Strategy" />
                            </div>
                        <?php else: ?>
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solutions/marketing-automation-overview.jpg" alt="Marketing Automation Strategy" />
                            </div>
                        <?php endif; ?>
                        <div class="overview-image-cta">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary overview-cta-btn">Automate Your Marketing</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Automation Solutions -->
        <section class="automation-solutions animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_solutions_title', true) ?: 'Our Marketing Automation Solutions'); ?></h2>
                <div class="solutions-grid animate-on-scroll animate-fade-up">
                    
                    <?php
                    $solutions = get_post_meta(get_the_ID(), '_automate_marketing_solutions', true);
                    if (empty($solutions)) {
                        $solutions = array(
                            array(
                                'title' => 'Email Marketing Automation',
                                'description' => 'Create sophisticated email workflows that nurture leads and customers through personalised journeys.',
                                'features' => array(
                                    'Welcome email sequences',
                                    'Abandoned cart recovery',
                                    'behavioural trigger campaigns',
                                    'Re-engagement workflows'
                                )
                            ),
                            array(
                                'title' => 'Lead Scoring & Nurturing',
                                'description' => 'Automatically score and segment leads based on behaviour, demographics, and engagement levels.',
                                'features' => array(
                                    'Dynamic lead scoring models',
                                    'Progressive profiling',
                                    'Automated list segmentation',
                                    'Sales-ready lead alerts'
                                )
                            ),
                            array(
                                'title' => 'Social Media Automation',
                                'description' => 'Schedule, publish, and optimise social media content across multiple platforms automatically.',
                                'features' => array(
                                    'Content scheduling & publishing',
                                    'Social listening automation',
                                    'Automated response systems',
                                    'Cross-platform campaigns'
                                )
                            ),
                            array(
                                'title' => 'CRM Integration & Workflows',
                                'description' => 'Connect your marketing tools with sales systems for seamless lead handoffs and follow-up.',
                                'features' => array(
                                    'CRM data synchronization',
                                    'Sales notification triggers',
                                    'Pipeline automation',
                                    'Customer lifecycle tracking'
                                )
                            )
                        );
                    }

                    $solution_icons = array(
                        '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentcolour" stroke-width="2"/>
                            <polyline points="22,6 12,13 2,6" stroke="currentcolour" stroke-width="2"/>
                        </svg>',
                        '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="9" cy="7" r="4" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M23 21V19C23 18.1645 22.7045 17.3541 22.1679 16.7116C21.6313 16.0691 20.8902 15.6316 20.07 15.4662" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 3.13281C16.8902 3.29814 17.6313 3.73574 18.1679 4.37823C18.7045 5.02072 19 5.83115 19 6.66656C19 7.50197 18.7045 8.3124 18.1679 8.95489C17.6313 9.59738 16.8902 10.035 16 10.2003" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>',
                        '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 20V10" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 20V4" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 20V14" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>',
                        '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 17L12 22L22 17" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 12L12 17L22 12" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>'
                    );

                    foreach ($solutions as $index => $solution) :
                        $icon_index = $index % count($solution_icons);
                    ?>                    <div class="solution-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="solution-icon">
                            <?php echo $solution_icons[$icon_index]; ?>
                        </div>
                        <div class="solution-content">
                            <h3><?php echo esc_html($solution['title']); ?></h3>
                            <p><?php echo esc_html($solution['description']); ?></p>
                            <ul class="solution-features">
                                <?php foreach ($solution['features'] as $feature) : ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>        <!-- Automation Success Story -->
        <section class="automation-case-study animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <span class="case-study-label"><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_case_study_label', true) ?: 'Success Story'); ?></span>
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_case_study_title', true) ?: 'GrowthTech: 60% Time Savings + 300% Lead Conversion'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_case_study_content', true) ?: 'GrowthTech, a SaaS company, was spending 40+ hours per week on manual marketing tasks and struggling with inconsistent lead follow-up.'); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_case_study_challenge_title', true) ?: 'The Challenge'); ?></h3>
                            <ul>
                                <?php
                                $case_challenges = get_post_meta(get_the_ID(), '_automate_marketing_case_study_challenges', true);
                                if (empty($case_challenges)) {
                                    $case_challenges = array(
                                        '40+ hours weekly on manual marketing tasks',
                                        'Inconsistent lead follow-up processes',
                                        'Poor lead qualification and scoring',
                                        'Disconnected marketing and sales teams'
                                    );
                                }
                                foreach ($case_challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_case_study_solution_title', true) ?: 'Our Solution'); ?></h3>
                            <ul>
                                <?php
                                $case_solutions = get_post_meta(get_the_ID(), '_automate_marketing_case_study_solutions', true);
                                if (empty($case_solutions)) {
                                    $case_solutions = array(
                                        'Complete marketing automation setup',
                                        'Lead scoring and nurturing workflows',
                                        'CRM integration and sales automation',
                                        'behavioural trigger campaign implementation'
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
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_results_title', true) ?: 'Results After 3 Months'); ?></h3>
                        <div class="results-grid">
                            <?php
                            $results = get_post_meta(get_the_ID(), '_automate_marketing_results', true);
                            if (empty($results)) {
                                $results = array(
                                    array(
                                        'number' => '60%',
                                        'label' => 'Time Savings'
                                    ),
                                    array(
                                        'number' => '300%',
                                        'label' => 'Lead Conversion Increase'
                                    ),
                                    array(
                                        'number' => '85%',
                                        'label' => 'Email Open Rate'
                                    ),
                                    array(
                                        'number' => '45%',
                                        'label' => 'Sales Cycle Reduction'
                                    )
                                );
                            }
                            
                            foreach ($results as $result) :
                            ?>
                            <div class="result-item">
                                <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo home_url(get_post_meta(get_the_ID(), '_automate_marketing_case_study_link_url', true) ?: '/case-studies'); ?>" class="case-study-link"><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_case_study_link_text', true) ?: 'Read Full Case Study'); ?></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Automation Process -->
        <section class="automation-process">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_process_title', true) ?: 'Our Marketing Automation Process'); ?></h2>
                <div class="process-steps">
                    
                    <?php
                    $process_steps = get_post_meta(get_the_ID(), '_automate_marketing_process_steps', true);
                    if (empty($process_steps)) {
                        $process_steps = array(
                            array(
                                'number' => '1',
                                'title' => 'Current State Analysis',
                                'description' => 'Audit your existing marketing processes to identify automation opportunities and pain points.'
                            ),
                            array(
                                'number' => '2',
                                'title' => 'Workflow Design & Mapping',
                                'description' => 'Create comprehensive automation workflows that align with your customer journey and business goals.'
                            ),
                            array(
                                'number' => '3',
                                'title' => 'Platform Setup & Integration',
                                'description' => 'Configure automation tools, integrate systems, and set up tracking for optimal performance.'
                            ),
                            array(
                                'number' => '4',
                                'title' => 'Testing & optimisation',
                                'description' => 'Monitor performance, A/B test workflows, and continuously optimise for better results.'
                            )
                        );
                    }

                    foreach ($process_steps as $step) :
                    ?>
                    <div class="process-step">
                        <div class="step-number"><?php echo esc_html($step['number']); ?></div>
                        <div class="step-content">
                            <h3><?php echo esc_html($step['title']); ?></h3>
                            <p><?php echo esc_html($step['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="process-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Start Automating Your Marketing</a>
                </div>
            </div>
        </section>

        <!-- Automation Benefits -->
        <section class="automation-benefits">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_benefits_title', true) ?: 'Marketing Automation Benefits'); ?></h2>
                <div class="benefits-grid-4">
                    <?php
                    $benefits = get_post_meta(get_the_ID(), '_automate_marketing_benefits', true);
                    if (empty($benefits)) {
                        $benefits = array(
                            array(
                                'title' => 'Time Savings',
                                'description' => 'Save 40+ hours per week by automating repetitive marketing tasks and workflows.',
                                'icon_class' => 'fas fa-clock'
                            ),
                            array(
                                'title' => 'Better Lead Quality',
                                'description' => 'Improve lead scoring and qualification to focus sales efforts on highest-value prospects.',
                                'icon_class' => 'fas fa-crosshairs'
                            ),
                            array(
                                'title' => 'Increased Conversions',
                                'description' => 'Nurture leads more effectively with personalised, timely communications that drive action.',
                                'icon_class' => 'fas fa-chart-line'
                            ),
                            array(
                                'title' => 'Consistent Execution',
                                'description' => 'Ensure every lead receives consistent, professional follow-up regardless of team capacity.',
                                'icon_class' => 'fas fa-sync-alt'
                            )
                        );
                    }

                    foreach ($benefits as $benefit) :
                    ?>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($benefit['icon_class']); ?>"></i>
                        </div>
                        <div class="benefit-content">
                            <h3><?php echo esc_html($benefit['title']); ?></h3>
                            <p><?php echo esc_html($benefit['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Automation Tools -->
        <section class="automation-tools">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_tools_title', true) ?: 'Marketing Automation Platforms We Use'); ?></h2>
                <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-envelope-open-text"></i></div>
                        <h3>Email Automation</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>HubSpot Marketing Hub</li>
                            <li>Mailchimp Automation</li>
                            <li>ActiveCampaign</li>
                            <li>ConvertKit</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-users-cog"></i></div>
                        <h3>CRM Integration</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Salesforce Automation</li>
                            <li>HubSpot CRM</li>
                            <li>Pipedrive Workflows</li>
                            <li>Zoho CRM Plus</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-share-alt"></i></div>
                        <h3>Social Media Automation</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Hootsuite Scheduling</li>
                            <li>Buffer Automation</li>
                            <li>Sprout Social</li>
                            <li>Later Scheduling</li>
                        </ul>
                    </div>
                    <div class="service-item">
                        <div class="service-icon"><i class="fas fa-chart-bar"></i></div>
                        <h3>Analytics & Reporting</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Google Analytics 4</li>
                            <li>HubSpot Analytics</li>
                            <li>Mixpanel Events</li>
                            <li>Custom Dashboards</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Automation Testimonial (No Image) -->
        <section class="automation-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <blockquote>
                        "<?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_testimonial_quote', true) ?: 'The marketing automation system Aimpro Digital implemented has been a game-changer. We\'ve saved 25 hours per week on manual tasks and our lead conversion rate has tripled. The ROI has been incredible.'); ?>"
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_testimonial_name', true) ?: 'David Chen'); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_testimonial_position', true) ?: 'VP of Marketing, GrowthTech'); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_testimonial_company', true) ?: 'SaaS Platform Company'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="cta-section">
            <div class="section-content">
                <div class="cta-content">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_cta_title', true) ?: 'Ready to Automate Your Marketing?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_cta_subtitle', true) ?: 'Let\'s create a custom automation strategy that saves you time while improving your marketing results.'); ?></p>                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_automate_marketing_cta_primary_url', true) ?: '/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_automate_marketing_cta_primary_text', true) ?: 'Get Free Automation Audit'); ?></a>
                    </div>
                    <div class="cta-features">
                        <?php
                        $features = get_post_meta(get_the_ID(), '_automate_marketing_cta_features', true);
                        if (empty($features)) {                            $features = array(
                                '<i class="fas fa-check" aria-hidden="true"></i> Custom workflow design',
                                '<i class="fas fa-check" aria-hidden="true"></i> Full platform integration',
                                '<i class="fas fa-check" aria-hidden="true"></i> Ongoing optimisation'
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
