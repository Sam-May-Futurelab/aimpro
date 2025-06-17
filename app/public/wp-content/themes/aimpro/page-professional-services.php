<?php
/**
 * Template Name: Professional Services Industry Page
 * Description: Digital marketing for professional services firms
 */

get_header(); ?>

<!-- Add this debugging function at the top of the page (right after the get_header() call) -->
<?php add_action('wp_footer', function() {
    if (is_page('professional-services')) {
        $overview_image = get_post_meta(get_the_ID(), '_professional_services_overview_image', true);
        echo '<!-- Debug: Overview Image Value: ' . esc_html($overview_image) . ' -->';
    }
}); ?>

<main id="main" class="main-content">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_header_title', true) ?: 'Professional Services Digital Marketing'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_header_subtitle', true) ?: 'Build trust, establish authority, and generate high-quality leads for your professional practice'); ?></p>
            </div>
        </section>        <!-- Industry Overview -->
        <section class="industry-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_overview_title', true) ?: 'Elevate Your Professional Practice'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_overview_content', true) ?: 'Professional services clients expect expertise, trust, and results. Our specialized marketing strategies help law firms, accounting practices, consulting agencies, and other professional services establish authority and attract qualified prospects.'); ?></p>
                        
                        <div class="industry-challenges">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_challenges_title', true) ?: 'Professional Services Marketing Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php 
                                $challenges = get_post_meta(get_the_ID(), '_professional_services_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'Building trust and credibility online',
                                        'Complex, long sales cycles',
                                        'Compliance and ethical advertising constraints',
                                        'High-value client acquisition costs',
                                        'Demonstrating expertise and thought leadership',
                                        'Differentiating from established competitors'
                                    );
                                }
                                foreach ($challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>                    <div class="overview-image">
                        <?php 
                        $overview_image = get_post_meta(get_the_ID(), '_professional_services_overview_image', true);
                        if (!empty($overview_image)): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" alt="Professional Services Digital Marketing" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/professional-services-overview.jpg" alt="Professional Services Digital Marketing" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Professional Services (2x2 Grid) -->
        <section class="professional-services">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_solutions_title', true) ?: 'Our Professional Services Marketing Solutions'); ?></h2>
                <div class="benefits-grid-2x2">
                    <?php 
                    $solutions = get_post_meta(get_the_ID(), '_professional_services_solutions', true);
                    if (empty($solutions)) {
                        $solutions = array(
                            array(
                                'icon' => 'fas fa-search',
                                'title' => 'Local SEO for Professional Services',
                                'description' => 'Dominate local search results when potential clients search for legal, accounting, or consulting services in your area.',
                                'features' => array('Google My Business optimization', 'Local citation building', 'Practice area keyword targeting', 'Review management and reputation')
                            ),
                            array(
                                'icon' => 'fas fa-file-alt',
                                'title' => 'Content Marketing & Thought Leadership',
                                'description' => 'Establish your expertise through strategic content that demonstrates knowledge and builds trust with potential clients.',
                                'features' => array('Legal/industry blog writing', 'Case study development', 'White paper creation', 'Video content strategy')
                            ),
                            array(
                                'icon' => 'fab fa-linkedin',
                                'title' => 'LinkedIn Marketing for B2B',
                                'description' => 'Build professional networks and generate high-value leads through strategic LinkedIn advertising and organic engagement.',
                                'features' => array('LinkedIn profile optimization', 'Sponsored content campaigns', 'Lead generation forms', 'Professional networking strategy')
                            ),
                            array(
                                'icon' => 'fas fa-gavel',
                                'title' => 'Compliance-Focused PPC',
                                'description' => 'Drive qualified leads while maintaining strict adherence to professional advertising regulations and ethical guidelines.',
                                'features' => array('Google Ads for legal/professional', 'Compliance monitoring', 'High-intent keyword targeting', 'Landing page optimization')
                            )
                        );
                    }
                    foreach ($solutions as $solution): ?>
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="<?php echo esc_attr($solution['icon']); ?>"></i>
                            </div>
                            <div class="benefit-content">
                                <h3><?php echo esc_html($solution['title']); ?></h3>
                                <p><?php echo esc_html($solution['description']); ?></p>
                                <ul class="feature-list">
                                    <?php foreach ($solution['features'] as $feature): ?>
                                        <li><?php echo esc_html($feature); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Professional Services Success Story -->
        <section class="professional-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <span class="case-study-label"><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_case_study_label', true) ?: 'Success Story'); ?></span>
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_case_study_title', true) ?: 'WealthWise Advisors: 300% Lead Quality Improvement'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_case_study_content', true) ?: 'WealthWise Advisors, a financial planning firm, needed to generate high-quality leads while maintaining professional standards and regulatory compliance.'); ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_case_study_challenge_title', true) ?: 'The Challenge'); ?></h3>
                            <ul>
                                <?php 
                                $case_study_challenges = get_post_meta(get_the_ID(), '_professional_services_case_study_challenges', true);
                                if (empty($case_study_challenges)) {
                                    $case_study_challenges = array(
                                        'Low-quality leads from generic campaigns',
                                        'Strict compliance requirements',
                                        'Long sales cycles and high client lifetime value',
                                        'Competitive landscape with established firms'
                                    );
                                }
                                foreach ($case_study_challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_case_study_solution_title', true) ?: 'Our Solution'); ?></h3>
                            <ul>
                                <?php 
                                $case_study_solutions = get_post_meta(get_the_ID(), '_professional_services_case_study_solutions', true);
                                if (empty($case_study_solutions)) {
                                    $case_study_solutions = array(
                                        'Compliance-focused content marketing',
                                        'LinkedIn thought leadership campaigns',
                                        'Educational webinar funnels',
                                        'High-intent keyword targeting'
                                    );
                                }
                                foreach ($case_study_solutions as $solution): ?>
                                    <li><?php echo esc_html($solution); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_case_study_results_title', true) ?: 'Results After 8 Months'); ?></h3>
                        <div class="results-grid">
                            <?php 
                            $case_study_results = get_post_meta(get_the_ID(), '_professional_services_case_study_results', true);
                            if (empty($case_study_results)) {
                                $case_study_results = array(
                                    array('number' => '300%', 'label' => 'Lead Quality Improvement'),
                                    array('number' => '220%', 'label' => 'Qualified Consultation Requests'),
                                    array('number' => '185%', 'label' => 'Organic Search Traffic'),
                                    array('number' => '450%', 'label' => 'LinkedIn Engagement')
                                );
                            }
                            foreach ($case_study_results as $result): ?>
                                <div class="result-item">
                                    <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                    <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_professional_services_case_study_link_url', true) ?: home_url('/case-studies')); ?>" class="case-study-link"><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_case_study_link_text', true) ?: 'Read Full Case Study'); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Professional Services Process -->
        <section class="professional-process">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_process_title', true) ?: 'Our Professional Services Marketing Process'); ?></h2>
                <div class="process-steps">
                    <?php 
                    $process_steps = get_post_meta(get_the_ID(), '_professional_services_process_steps', true);
                    if (empty($process_steps)) {
                        $process_steps = array(
                            array(
                                'title' => 'Compliance Audit',
                                'description' => 'Review all regulatory requirements and ethical guidelines for your profession and jurisdiction.'
                            ),
                            array(
                                'title' => 'Authority Strategy',
                                'description' => 'Develop content and positioning strategy to establish your firm as a trusted authority in your practice area.'
                            ),
                            array(
                                'title' => 'Multi-Channel Implementation',
                                'description' => 'Deploy integrated campaigns across search, social, and content channels with compliance monitoring.'
                            ),
                            array(
                                'title' => 'Lead Nurturing',
                                'description' => 'Implement sophisticated nurturing sequences designed for long sales cycles and high-value clients.'
                            )
                        );
                    }
                    $step_number = 1;
                    foreach ($process_steps as $step): ?>
                        <div class="process-step">
                            <div class="step-number"><?php echo $step_number; ?></div>
                            <div class="step-content">
                                <h3><?php echo esc_html($step['title']); ?></h3>
                                <p><?php echo esc_html($step['description']); ?></p>
                            </div>
                        </div>
                    <?php 
                    $step_number++;
                    endforeach; ?>
                </div>
            </div>
        </section>        <!-- Professional Services Insights -->
        <section class="professional-insights">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_insights_title', true) ?: 'Professional Services Industry Insights'); ?></h2>
                <div class="results-grid">
                    <?php 
                    $insights = get_post_meta(get_the_ID(), '_professional_services_insights', true);
                    if (empty($insights)) {
                        $insights = array(
                            array(
                                'stat' => '78%',
                                'title' => 'Research Before Contact',
                                'description' => '78% of clients research professional services extensively before making contact'
                            ),
                            array(
                                'stat' => '65%',
                                'title' => 'Trust Factor',
                                'description' => '65% of clients choose professionals based on online reputation and reviews'
                            ),
                            array(
                                'stat' => '89%',
                                'title' => 'Local Search',
                                'description' => '89% of professional service searches include local intent'
                            ),
                            array(
                                'stat' => '92%',
                                'title' => 'Content Influence',
                                'description' => '92% of buyers are influenced by educational content during research'
                            )
                        );
                    }
                    foreach ($insights as $insight): ?>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html($insight['stat']); ?></div>
                            <div class="result-label"><?php echo esc_html($insight['title']); ?></div>
                            <p><?php echo esc_html($insight['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- Professional Services Testimonial (without image) -->
        <section class="professional-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <blockquote>
                        "<?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_testimonial_quote', true) ?: 'Aimpro Digital\'s understanding of professional services marketing is exceptional. They helped us maintain compliance while dramatically improving our lead quality. The team\'s strategic approach to long sales cycles and high-value clients made all the difference.'); ?>"
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_testimonial_name', true) ?: 'Elizabeth Brown'); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_testimonial_position', true) ?: 'Managing Partner, Brown & Associates Law'); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_testimonial_company', true) ?: 'Multi-practice law firm with 15 attorneys'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->        
        <section class="professional-cta text-center">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_cta_title', true) ?: 'Ready to Elevate Your Professional Practice?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_cta_subtitle', true) ?: 'Let\'s discuss how our professional services marketing expertise can generate high-quality leads for your firm.'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_professional_services_cta_primary_url', true) ?: home_url('/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_cta_primary_text', true) ?: 'Get Free Practice Audit'); ?></a>
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_professional_services_cta_secondary_url', true) ?: home_url('/case-studies')); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_cta_secondary_text', true) ?: 'View More Success Stories'); ?></a>
                </div>
                <div class="cta-benefits">
                    <?php 
                    $cta_benefits = get_post_meta(get_the_ID(), '_professional_services_cta_benefits', true);
                    if (empty($cta_benefits)) {
                        $cta_benefits = array(
                            '✓ Compliance-focused strategies',
                            '✓ Industry-specific expertise',
                            '✓ Confidential consultation'
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
