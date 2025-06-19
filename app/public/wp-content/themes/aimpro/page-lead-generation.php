<?php
/**
 * Template Name: Lead Generation Solution Page
 * Description: Lead generation solution for B2B and B2C businesses
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/solutions'); ?>">Solutions</a>
                <span class="separator">›</span>
                <span class="current">Lead Generation</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_header_title', true) ?: 'Lead Generation (B2B/B2C)'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_header_subtitle', true) ?: 'Generate high-quality leads that convert into customers with proven strategies and targeted campaigns'); ?></p>
            </div>
        </section><!-- Solution Overview -->
        <section class="solution-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_overview_title', true) ?: 'Turn Prospects Into Qualified Leads'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_overview_content', true) ?: 'Lead generation is the lifeblood of any successful business. Our comprehensive lead generation strategies combine multiple touchpoints, compelling offers, and sophisticated targeting to attract and capture high-quality prospects who are ready to engage with your business.'); ?></p>
                        
                        <div class="solution-challenges">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_challenges_title', true) ?: 'Lead Generation Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), '_lead_generation_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'Low-quality leads that don\'t convert',
                                        'High cost per acquisition',
                                        'Inconsistent lead flow',
                                        'Poor lead nurturing processes',
                                        'Difficulty tracking lead sources',
                                        'Long sales cycles without proper follow-up'
                                    );
                                }
                                foreach ($challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';                                }
                                ?>
                            </ul>
                        </div>
                    </div>                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php 
                        $image_url = get_post_meta(get_the_ID(), '_lead_generation_overview_image', true);
                        if (empty($image_url)) {
                            $image_url = get_template_directory_uri() . '/assets/images/solutions/lead-generation-overview.jpg';
                        }
                        ?>
                        <div class="image-wrapper">
                            <img src="<?php echo esc_url($image_url); ?>" alt="Lead Generation Strategy" />
                        </div>
                        <div class="overview-image-cta">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary overview-cta-btn">Generate More Leads</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Lead Generation Methods -->
        <section class="lead-generation-methods">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_methods_title', true) ?: 'Our Lead Generation Methods'); ?></h2>
                <div class="methods-grid animate-on-scroll animate-stagger animate-scale-up">
                    
                    <?php
                    $methods = get_post_meta(get_the_ID(), '_lead_generation_methods', true);
                    if (empty($methods)) {
                        $methods = array(
                            array(
                                'title' => 'Search Engine Marketing',
                                'description' => 'Capture prospects actively searching for your solutions with targeted Google Ads and optimised landing pages.',
                                'features' => array(
                                    'High-intent keyword targeting',
                                    'Conversion-optimised landing pages',
                                    'Search ad optimisation',
                                    'Negative keyword refinement'
                                )
                            ),
                            array(
                                'title' => 'Social Media Lead Generation',
                                'description' => 'Leverage social platforms to reach and engage your ideal audience with compelling lead magnets and offers.',
                                'features' => array(
                                    'Facebook & LinkedIn lead ads',
                                    'Audience targeting & lookalikes',
                                    'Social proof integration',
                                    'Multi-platform campaigns'
                                )
                            ),
                            array(
                                'title' => 'Content Marketing & Lead Magnets',
                                'description' => 'Attract prospects with valuable content and convert them with irresistible lead magnets and gated resources.',
                                'features' => array(
                                    'High-value lead magnet creation',
                                    'Educational content strategy',
                                    'Gated resource optimisation',
                                    'Progressive profiling setup'
                                )
                            ),
                            array(
                                'title' => 'Email Marketing & Nurturing',
                                'description' => 'Build relationships and move prospects through your sales funnel with strategic email sequences.',
                                'features' => array(
                                    'Automated drip campaigns',
                                    'Lead scoring implementation',
                                    'behavioural trigger emails',
                                    'CRM integration & tracking'
                                )
                            )
                        );
                    }

                    $method_icons = array(
                        '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21L16.514 16.506M19 10.5C19 15.194 15.194 19 10.5 19C5.806 19 2 15.194 2 10.5C2 5.806 5.806 2 10.5 2C15.194 2 19 5.806 19 10.5Z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>',
                        '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 20V10" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12 20V4" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 20V14" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>',
                        '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <polyline points="14,2 14,8 20,8" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>',
                        '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentcolour" stroke-width="2"/>
                            <polyline points="22,6 12,13 2,6" stroke="currentcolour" stroke-width="2"/>
                        </svg>'
                    );

                    foreach ($methods as $index => $method) :
                        $icon_index = $index % count($method_icons);
                    ?>                    <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="method-icon">
                            <?php echo $method_icons[$icon_index]; ?>
                        </div>
                        <div class="method-content">
                            <h3><?php echo esc_html($method['title']); ?></h3>
                            <p><?php echo esc_html($method['description']); ?></p>
                            <ul class="method-features">
                                <?php foreach ($method['features'] as $feature) : ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>        <!-- Lead Generation Success Story -->
        <section class="lead-generation-case-study">
            <div class="section-content">
                <div class="case-study-content animate-on-scroll animate-fade-up">
                    <div class="case-study-text">
                        <span class="case-study-label"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_label', true) ?: 'Success Story'); ?></span>
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_title', true) ?: 'TechFlow Solutions: 450% Lead Increase in 4 Months'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_content', true) ?: 'TechFlow Solutions, a B2B software company, was struggling with inconsistent lead flow and poor lead quality from their existing marketing efforts.'); ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_challenge_title', true) ?: 'The Challenge'); ?></h3>
                            <ul>
                                <?php
                                $case_challenges = get_post_meta(get_the_ID(), '_lead_generation_case_study_challenges', true);
                                if (empty($case_challenges)) {
                                    $case_challenges = array(
                                        'Only 15-20 qualified leads per month',
                                        'High cost per lead ($350+ average)',
                                        'Long sales cycles with poor follow-up',
                                        'No systematic lead nurturing process'
                                    );
                                }
                                foreach ($case_challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_solution_title', true) ?: 'Our Solution'); ?></h3>
                            <ul>
                                <?php
                                $case_solutions = get_post_meta(get_the_ID(), '_lead_generation_case_study_solutions', true);
                                if (empty($case_solutions)) {
                                    $case_solutions = array(
                                        'Multi-channel lead generation campaigns',
                                        'High-converting landing page development',
                                        'LinkedIn outreach automation',
                                        'Email nurturing sequence implementation'
                                    );
                                }
                                foreach ($case_solutions as $solution) {
                                    echo '<li>' . esc_html($solution) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Lead Generation Process -->
        <section class="lead-generation-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_process_title', true) ?: 'Our Lead Generation Process'); ?></h2>
                <div class="process-steps animate-on-scroll animate-stagger animate-fade-up">
                    
                    <?php
                    $process_steps = get_post_meta(get_the_ID(), '_lead_generation_process_steps', true);
                    if (empty($process_steps)) {
                        $process_steps = array(
                            array(
                                'number' => '1',
                                'title' => 'Audience Research & Targeting',
                                'description' => 'Identify your ideal customer profiles and create detailed buyer personas for precise targeting.'
                            ),
                            array(
                                'number' => '2',
                                'title' => 'Lead Magnet Creation',
                                'description' => 'Develop compelling offers and valuable content that your prospects can\'t resist downloading.'
                            ),
                            array(
                                'number' => '3',
                                'title' => 'Multi-Channel Campaign Launch',
                                'description' => 'Deploy coordinated campaigns across search, social, and email channels for maximum reach.'
                            ),
                            array(
                                'number' => '4',
                                'title' => 'Nurturing & Conversion',
                                'description' => 'Implement automated nurturing sequences that guide leads toward becoming customers.'
                            )
                        );
                    }

                    foreach ($process_steps as $step) :
                    ?>                    <div class="process-step">
                        <div class="step-number"><?php echo esc_html($step['number']); ?></div>
                        <div class="step-content">
                            <h3><?php echo esc_html($step['title']); ?></h3>
                            <p><?php echo esc_html($step['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>                </div>
                <div class="process-cta animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Start Generating Leads Today</a>
                </div>
            </div>
        </section>        <!-- Lead Generation Types -->
        <section class="lead-generation-types text-center">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_types_title', true) ?: 'Lead Generation Strategies by Business Type'); ?></h2>
                <div class="types-grid animate-on-scroll animate-stagger animate-scale-up">
                    <?php
                    $types = get_post_meta(get_the_ID(), '_lead_generation_types', true);
                    if (empty($types)) {
                        $types = array(
                            array(
                                'title' => 'B2B Lead Generation',
                                'features' => array(
                                    'LinkedIn advertising & outreach',
                                    'Industry-specific content marketing',
                                    'Webinar and event marketing',
                                    'Account-based marketing (ABM)',
                                    'Sales-qualified lead (SQL) optimisation'
                                )
                            ),
                            array(
                                'title' => 'B2C Lead Generation',
                                'features' => array(
                                    'Facebook & Instagram lead ads',
                                    'Google Shopping campaigns',
                                    'Influencer partnerships',
                                    'Contest and giveaway campaigns',
                                    'SMS marketing integration'
                                )
                            ),
                            array(
                                'title' => 'Local Business Lead Generation',
                                'features' => array(
                                    'Google My Business optimisation',
                                    'Local directory submissions',
                                    'Geotargeted advertising',
                                    'Review generation campaigns',
                                    'Local event marketing'
                                )
                            )
                        );
                    }

                    foreach ($types as $type) :
                    ?>
                    <div class="type-card">
                        <h3><?php echo esc_html($type['title']); ?></h3>
                        <ul class="type-features">
                            <?php foreach ($type['features'] as $feature) : ?>
                                <li><?php echo esc_html($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
          <!-- Lead Generation Tools -->
        <section class="lead-generation-tools">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_tools_title', true) ?: 'Lead Generation Tools & Technologies'); ?></h2>
                <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up">
                    
                    <?php
                    $tools = get_post_meta(get_the_ID(), '_lead_generation_tools', true);
                    if (empty($tools)) {
                        $tools = array(
                            array(
                                'title' => 'Analytics & Tracking',
                                'features' => array(
                                    'Google Analytics 4 setup',
                                    'Conversion tracking implementation',
                                    'Lead source attribution',
                                    'ROI measurement dashboards'
                                )
                            ),
                            array(
                                'title' => 'CRM Integration',
                                'features' => array(
                                    'HubSpot integration',
                                    'Salesforce automation',
                                    'Pipedrive setup',
                                    'Custom CRM solutions'
                                )
                            ),
                            array(
                                'title' => 'Landing Page optimisation',
                                'features' => array(
                                    'A/B testing frameworks',
                                    'Heat mapping analysis',
                                    'Form optimisation',
                                    'Mobile responsiveness'
                                )
                            ),
                            array(
                                'title' => 'Email Marketing',
                                'features' => array(
                                    'Automated email sequences',
                                    'Lead nurturing campaigns',
                                    'behavioural email triggers',
                                    'Performance analytics'
                                )
                            )
                        );
                    }

                    $tool_classes = array('analytics', 'crm', 'optimisation', 'automation');
                    
                    foreach ($tools as $index => $tool) :
                        $class_index = $index % count($tool_classes);
                    ?>
                    <div class="tool-card <?php echo esc_attr($tool_classes[$class_index]); ?>">
                        <h3><?php echo esc_html($tool['title']); ?></h3>
                        <ul class="tool-features">
                            <?php foreach ($tool['features'] as $feature) : ?>
                                <li><?php echo esc_html($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </section>        <!-- Lead Generation Testimonial (No Image) -->
        <section class="lead-generation-testimonial text-center">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <blockquote>
                        "<?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_testimonial_quote', true) ?: 'Aimpro Digital completely transformed our lead generation. In just 4 months, we went from 20 leads per month to over 100 high-quality leads. Their multi-channel approach and systematic nurturing process has revolutionized our sales pipeline.'); ?>"
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_testimonial_name', true) ?: 'Sarah Johnson'); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_testimonial_position', true) ?: 'Marketing Director, TechFlow Solutions'); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_testimonial_company', true) ?: 'B2B Software Company'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="lead-generation-cta text-center">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_cta_title', true) ?: 'Ready to Generate More Qualified Leads?'); ?></h2>
                <p class="animate-on-scroll animate-fade-up animate-delay-200"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_cta_subtitle', true) ?: 'Let\'s create a custom lead generation strategy that fills your sales pipeline with high-quality prospects.'); ?></p>
                <div class="cta-buttons animate-on-scroll animate-scale-up animate-delay-400">
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_lead_generation_cta_primary_url', true) ?: '/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_cta_primary_text', true) ?: 'Get Free Lead Generation Audit'); ?></a>
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_lead_generation_cta_secondary_url', true) ?: '/case-studies')); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_cta_secondary_text', true) ?: 'View Lead Generation Success Stories'); ?></a>                </div>
                <div class="cta-benefits animate-on-scroll animate-stagger animate-fade-up">
                    <?php
                    $benefits = get_post_meta(get_the_ID(), '_lead_generation_cta_benefits', true);
                    if (empty($benefits)) {                        $benefits = array(
                            '<i class="fas fa-check" aria-hidden="true"></i> Custom lead generation strategy',
                            '<i class="fas fa-check" aria-hidden="true"></i> Multi-channel campaign setup',
                            '<i class="fas fa-check" aria-hidden="true"></i> CRM integration included'
                        );
                    }
                    foreach ($benefits as $benefit) {
                        echo '<span class="benefit">' . esc_html($benefit) . '</span>';
                    }
                    ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

