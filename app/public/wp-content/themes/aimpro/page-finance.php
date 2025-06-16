<?php
/**
 * Template Name: Finance Industry Page
 * Description: Digital marketing for financial services
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_header_title', true) ?: 'Finance Digital Marketing'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_header_subtitle', true) ?: 'Build trust and generate high-value leads with compliant financial services marketing'); ?></p>
            </div>
        </section>        <!-- Industry Overview -->
        <section class="industry-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_overview_title', true) ?: 'Navigate Financial Services Marketing with Confidence'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_overview_content', true) ?: 'Financial services marketing requires a delicate balance of trust-building, compliance, and results. Our specialized approach helps financial advisors, banks, insurance companies, and fintech startups generate qualified leads while maintaining regulatory compliance.'); ?></p>
                        
                        <div class="industry-challenges">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_challenges_title', true) ?: 'Financial Marketing Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php 
                                $challenges = get_post_meta(get_the_ID(), '_finance_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'Strict regulatory compliance requirements (FCA, GDPR)',
                                        'Building trust in a skeptical market',
                                        'Long sales cycles and complex decision processes',
                                        'Educating prospects on complex financial products',
                                        'Generating high-value, qualified leads'
                                    );
                                }
                                foreach ($challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image">
                        <?php 
                        $overview_image = get_post_meta(get_the_ID(), '_finance_overview_image', true);
                        if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" alt="Finance Digital Marketing" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/finance-overview.jpg" alt="Finance Digital Marketing" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Finance Services (2x2 Grid) -->
        <section class="finance-services">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_solutions_title', true) ?: 'Our Financial Services Marketing Solutions'); ?></h2>
                <div class="services-grid services-grid-2x2">
                    <?php 
                    $solutions = get_post_meta(get_the_ID(), '_finance_solutions', true);
                    if (empty($solutions)) {
                        $solutions = array(
                            array(
                                'icon' => 'fas fa-check-circle',
                                'title' => 'Regulatory Compliant Campaigns',
                                'description' => 'Navigate FCA regulations and industry compliance requirements with campaigns designed specifically for financial services.',
                                'features' => array('FCA-compliant ad copy and disclaimers', 'GDPR-compliant lead generation', 'Risk warning implementation', 'Regulatory review processes')
                            ),
                            array(
                                'icon' => 'fas fa-book',
                                'title' => 'Educational Content Marketing',
                                'description' => 'Build trust and authority with educational content that helps prospects understand complex financial concepts and services.',
                                'features' => array('Financial education blog content', 'Explainer videos and guides', 'Webinar and workshop promotion', 'Thought leadership positioning')
                            ),
                            array(
                                'icon' => 'fas fa-user-plus',
                                'title' => 'Trust-Building Strategies',
                                'description' => 'Establish credibility and trust through strategic reputation management, client testimonials, and authority positioning.',
                                'features' => array('Online reputation management', 'Client success story promotion', 'Professional qualification highlighting', 'Trust signal optimization')
                            ),
                            array(
                                'icon' => 'fas fa-chart-line',
                                'title' => 'High-Value Lead Generation',
                                'description' => 'Generate qualified leads for financial consultations, insurance quotes, and investment planning services.',
                                'features' => array('Consultation booking optimization', 'Financial calculator tools', 'Qualification-based lead scoring', 'Nurture sequence automation')
                            )
                        );
                    }
                    foreach ($solutions as $solution): ?>
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="<?php echo esc_attr($solution['icon']); ?>"></i>
                            </div>
                            <div class="service-content">
                                <h3><?php echo esc_html($solution['title']); ?></h3>
                                <p><?php echo esc_html($solution['description']); ?></p>
                                <ul class="service-features">
                                    <?php foreach ($solution['features'] as $feature): ?>
                                        <li><?php echo esc_html($feature); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Finance Success Story -->
        <section class="finance-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <span class="case-study-label"><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_case_study_label', true) ?: 'Success Story'); ?></span>
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_case_study_title', true) ?: 'WealthWise Financial: 150% Increase in Qualified Leads'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_case_study_content', true) ?: 'WealthWise Financial, an independent financial advisory firm, needed to build their client base while maintaining strict compliance with FCA regulations.'); ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_case_study_challenge_title', true) ?: 'The Challenge'); ?></h3>
                            <ul>
                                <?php 
                                $case_study_challenges = get_post_meta(get_the_ID(), '_finance_case_study_challenges', true);
                                if (empty($case_study_challenges)) {
                                    $case_study_challenges = array(
                                        'Strict FCA compliance requirements',
                                        'Difficulty explaining complex services',
                                        'Long sales cycles and high-touch process',
                                        'Competition from larger financial institutions'
                                    );
                                }
                                foreach ($case_study_challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_case_study_solution_title', true) ?: 'Our Solution'); ?></h3>
                            <ul>
                                <?php 
                                $case_study_solutions = get_post_meta(get_the_ID(), '_finance_case_study_solutions', true);
                                if (empty($case_study_solutions)) {
                                    $case_study_solutions = array(
                                        'Educational content strategy',
                                        'Compliant Google Ads campaigns',
                                        'Financial calculator lead magnets',
                                        'LinkedIn thought leadership campaigns'
                                    );
                                }
                                foreach ($case_study_solutions as $solution): ?>
                                    <li><?php echo esc_html($solution); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_case_study_results_title', true) ?: 'Results After 8 Months'); ?></h3>
                        <div class="results-grid">
                            <?php 
                            $case_study_results = get_post_meta(get_the_ID(), '_finance_case_study_results', true);
                            if (empty($case_study_results)) {
                                $case_study_results = array(
                                    array('number' => '150%', 'label' => 'Qualified Leads Increase'),
                                    array('number' => '85%', 'label' => 'Reduction in Cost per Lead'),
                                    array('number' => '220%', 'label' => 'Website Organic Traffic'),
                                    array('number' => '40%', 'label' => 'Consultation Conversion Rate')
                                );
                            }
                            foreach ($case_study_results as $result): ?>
                                <div class="result-item">
                                    <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                    <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_finance_case_study_link_url', true) ?: home_url('/case-studies')); ?>" class="case-study-link"><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_case_study_link_text', true) ?: 'Read Full Case Study'); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Financial Services Types (4x1 Grid) -->
        <section class="finance-types">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_types_title', true) ?: 'Financial Services We Specialize In'); ?></h2>
                <div class="types-grid types-grid-4x1">
                    <?php 
                    $types = get_post_meta(get_the_ID(), '_finance_types', true);
                    if (empty($types)) {
                        $types = array(
                            array(
                                'icon' => 'fas fa-briefcase',
                                'title' => 'Financial Advisory',
                                'services' => array('Independent financial advisors', 'Wealth management firms', 'Investment consultants', 'Retirement planning specialists')
                            ),
                            array(
                                'icon' => 'fas fa-university',
                                'title' => 'Banking & Credit',
                                'services' => array('Community banks', 'Credit unions', 'Mortgage brokers', 'Alternative lending')
                            ),
                            array(
                                'icon' => 'fas fa-shield-alt',
                                'title' => 'Insurance Services',
                                'services' => array('Life insurance agents', 'Health insurance brokers', 'Property & casualty', 'Commercial insurance')
                            ),
                            array(
                                'icon' => 'fas fa-mobile-alt',
                                'title' => 'Fintech & Innovation',
                                'services' => array('Financial apps & platforms', 'Payment processors', 'Cryptocurrency services', 'Investment platforms')
                            )
                        );
                    }
                    foreach ($types as $type): ?>
                        <div class="type-card">
                            <div class="type-icon">
                                <i class="<?php echo esc_attr($type['icon']); ?>"></i>
                            </div>
                            <h3><?php echo esc_html($type['title']); ?></h3>
                            <ul>
                                <?php foreach ($type['services'] as $service): ?>
                                    <li><?php echo esc_html($service); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Compliance Framework -->
        <section class="compliance-framework">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_compliance_title', true) ?: 'Our Financial Marketing Compliance Framework'); ?></h2>
                <div class="compliance-list-container">
                    <ul class="feature-list compliance-list">
                        <?php 
                        $compliance_points = get_post_meta(get_the_ID(), '_finance_compliance_points', true);
                        if (empty($compliance_points)) {
                            $compliance_points = array(
                                array(
                                    'title' => 'FCA Regulation Compliance',
                                    'description' => 'All campaigns reviewed for FCA compliance including appropriate risk warnings, disclaimers, and promotional guidelines.'
                                ),
                                array(
                                    'title' => 'GDPR Data Protection',
                                    'description' => 'Strict data handling procedures ensuring all lead generation and customer data processing meets GDPR requirements.'
                                ),
                                array(
                                    'title' => 'Platform Policy Adherence',
                                    'description' => 'Expert knowledge of Google Ads, Facebook, and LinkedIn financial services policies to ensure campaign approval.'
                                ),
                                array(
                                    'title' => 'Risk Warning Implementation',
                                    'description' => 'Proper implementation of required risk warnings and disclaimers across all marketing materials and channels.'
                                ),
                                array(
                                    'title' => 'Documentation & Audit Trail',
                                    'description' => 'Complete documentation of all campaigns and communications for regulatory audit requirements.'
                                ),
                                array(
                                    'title' => 'Ongoing Compliance Monitoring',
                                    'description' => 'Regular review and updates to ensure ongoing compliance with evolving financial services regulations.'
                                )
                            );
                        }
                        foreach ($compliance_points as $point): ?>
                            <li>
                                <strong><?php echo esc_html($point['title']); ?></strong> - <?php echo esc_html($point['description']); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>        <!-- Financial Marketing Funnel -->
        <section class="optimization-process">
            <div class="container">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_funnel_title', true) ?: 'The Financial Services Marketing Funnel'); ?></h2>
                
                <div class="process-timeline">
                    <?php 
                    $funnel_steps = get_post_meta(get_the_ID(), '_finance_funnel_steps', true);
                    if (empty($funnel_steps)) {
                        $funnel_steps = array(
                            array(
                                'title' => 'Awareness: Educational Content',
                                'description' => 'Attract prospects with educational content about financial planning, investment strategies, and market insights.',
                                'tactics' => array('Financial education blog posts', 'Market analysis videos', 'Social media insights')
                            ),
                            array(
                                'title' => 'Interest: Value-Added Tools',
                                'description' => 'Engage prospects with calculators, guides, and resources that provide immediate value and capture contact information.',
                                'tactics' => array('Financial calculators', 'Planning guides', 'Webinar registration')
                            ),
                            array(
                                'title' => 'Consideration: Trust Building',
                                'description' => 'Build trust through case studies, testimonials, and demonstrations of expertise and qualifications.',
                                'tactics' => array('Client success stories', 'Professional credentials', 'Regulatory compliance')
                            ),
                            array(
                                'title' => 'Conversion: Consultation Booking',
                                'description' => 'Convert qualified prospects into consultations with clear value propositions and easy booking processes.',
                                'tactics' => array('Free consultation offers', 'Online booking systems', 'Qualification questions')
                            )
                        );
                    }
                    $step_number = 1;
                    foreach ($funnel_steps as $step): ?>
                        <div class="process-step">
                            <div class="step-number"><?php echo $step_number; ?></div>
                            <div class="step-content">
                                <h3><?php echo esc_html($step['title']); ?></h3>
                                <p><?php echo esc_html($step['description']); ?></p>
                                <ul class="step-tactics">
                                    <?php foreach ($step['tactics'] as $tactic): ?>
                                        <li><?php echo esc_html($tactic); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php 
                    $step_number++;
                    endforeach; ?>
                </div>
            </div>
        </section>        <!-- Finance Testimonial (without image) -->
        <section class="finance-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <blockquote>
                        "<?php echo esc_html(get_post_meta(get_the_ID(), '_finance_testimonial_quote', true) ?: 'Aimpro Digital\'s understanding of financial services compliance is exceptional. They helped us navigate FCA regulations while generating 150% more qualified leads. Their educational content strategy positions us as thought leaders in our market, and the lead quality has improved dramatically. We finally have a marketing partner that understands our industry.'); ?>"
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_testimonial_name', true) ?: 'David Wilson'); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_testimonial_position', true) ?: 'Director, WealthWise Financial'); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_testimonial_company', true) ?: 'Independent Financial Advisory Firm'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="finance-cta text-center">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_cta_title', true) ?: 'Ready to Grow Your Financial Services Business?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_cta_subtitle', true) ?: 'Let\'s create a compliant, trust-building marketing strategy that generates high-value leads for your financial services.'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_finance_cta_primary_url', true) ?: home_url('/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_cta_primary_text', true) ?: 'Get Compliance Audit'); ?></a>
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_finance_cta_secondary_url', true) ?: home_url('/case-studies')); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_finance_cta_secondary_text', true) ?: 'View Finance Success Stories'); ?></a>
                </div>
                <div class="cta-benefits">
                    <?php 
                    $cta_benefits = get_post_meta(get_the_ID(), '_finance_cta_benefits', true);
                    if (empty($cta_benefits)) {
                        $cta_benefits = array(
                            '✓ Free compliance review',
                            '✓ FCA-compliant strategy',
                            '✓ Trust-building approach'
                        );
                    }
                    foreach ($cta_benefits as $benefit): ?>
                        <span class="benefit"><?php echo esc_html($benefit); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
