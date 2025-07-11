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
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/industries'); ?>">Industries</a>
                <span class="separator">›</span>
                <span class="current">Professional Services</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_header_title', true) ?: 'Professional Services Digital Marketing'); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_header_subtitle', true) ?: 'Build trust, establish authority, and generate high-quality leads for your professional practice'); ?></p>
            </div>
        </section>        <!-- Industry Overview -->
        <section class="industry-overview animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_overview_title', true) ?: 'Elevate Your Professional Practice'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_overview_content', true) ?: 'Professional services clients expect expertise, trust, and results. Our specialised marketing strategies help law firms, accounting practices, consulting agencies, and other professional services establish authority and attract qualified prospects.'); ?></p>
                        
                        <div class="industry-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_challenges_title', true) ?: 'Professional Services Marketing Challenges We Solve:'); ?></h3>
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
                    </div>                    <div class="overview-image animate-on-scroll animate-slide-right">
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
        </section><!-- Professional Services (2x2 Grid) -->
        <section class="professional-services animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_solutions_title', true) ?: 'Our Professional Services Marketing Solutions'); ?></h2>
                <div class="benefits-grid-2x2">
                    <?php 
                    $solutions = get_post_meta(get_the_ID(), '_professional_services_solutions', true);
                    if (empty($solutions)) {
                        $solutions = array(
                            array(
                                'icon' => 'fas fa-search',
                                'title' => 'Local SEO for Professional Services',
                                'description' => 'Dominate local search results when potential clients search for legal, accounting, or consulting services in your area.',
                                'features' => array('Google My Business optimisation', 'Local citation building', 'Practice area keyword targeting', 'Review management and reputation')
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
                                'features' => array('LinkedIn profile optimisation', 'Sponsored content campaigns', 'Lead generation forms', 'Professional networking strategy')
                            ),
                            array(
                                'icon' => 'fas fa-gavel',
                                'title' => 'Compliance-Focused PPC',
                                'description' => 'Drive qualified leads while maintaining strict adherence to professional advertising regulations and ethical guidelines.',
                                'features' => array('Google Ads for legal/professional', 'Compliance monitoring', 'High-intent keyword targeting', 'Landing page optimisation')
                            )
                        );
                    }
                    foreach ($solutions as $solution): ?>
                        <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
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
        <section class="professional-case-study animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <span class="case-study-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_case_study_label', true) ?: 'Success Story'); ?></span>
                        <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_case_study_title', true) ?: 'WealthWise Advisors: 300% Lead Quality Improvement'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_case_study_content', true) ?: 'WealthWise Advisors, a financial planning firm, needed to generate high-quality leads while maintaining professional standards and regulatory compliance.'); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_case_study_challenge_title', true) ?: 'The Challenge'); ?></h3>
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

                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_case_study_solution_title', true) ?: 'Our Solution'); ?></h3>
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
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_case_study_results_title', true) ?: 'Results After 8 Months'); ?></h3>
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
                                <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
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
        <section class="professional-process animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_process_title', true) ?: 'Our Professional Services Marketing Process'); ?></h2>
                <div class="process-steps animate-on-scroll animate-fade-up">
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
                    foreach ($process_steps as $step): ?>                        <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
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
        <section class="professional-insights animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_insights_title', true) ?: 'Professional Services Industry Insights'); ?></h2>
                <div class="results-grid animate-on-scroll animate-fade-up">
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
                    foreach ($insights as $insight): ?>                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html($insight['stat']); ?></div>
                            <div class="result-label"><?php echo esc_html($insight['title']); ?></div>
                            <p><?php echo esc_html($insight['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Professional Services Testimonial (without image) -->
        <section class="professional-testimonial animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-slide-up">
                    <blockquote>
                        "<?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_testimonial_quote', true) ?: 'Aimpro Digital\'s understanding of professional services marketing is exceptional. They helped us maintain compliance while dramatically improving our lead quality. The team\'s strategic approach to long sales cycles and high-value clients made all the difference.'); ?>"
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
        <section class="professional-cta text-center animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_cta_title', true) ?: 'Ready to Elevate Your Professional Practice?'); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_professional_services_cta_subtitle', true) ?: 'Let\'s discuss how our professional services marketing expertise can generate high-quality leads for your firm.'); ?></p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_professional_services_cta_primary_url', true) ?: home_url('/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_cta_primary_text', true) ?: 'Get Free Practice Audit'); ?></a>
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_professional_services_cta_secondary_url', true) ?: home_url('/case-studies')); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_professional_services_cta_secondary_text', true) ?: 'View More Success Stories'); ?></a>
                </div>                <div class="cta-benefits animate-on-scroll animate-fade-up">
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

<!-- Mobile optimization for case study results section -->
<style>
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
    
    /* Professional Services Process - Mobile Layout with Centered Numbers */
    .professional-process .process-steps {
        display: flex !important;
        flex-direction: column !important;
        gap: 1.5rem !important;
    }
    
    .professional-process .process-step {
        background: #f8f9fa !important;
        border: 1px solid #e9ecef !important;
        border-radius: 8px !important;
        padding: 1.5rem !important;
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
        text-align: center !important;
        gap: 1rem !important;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05) !important;
    }
    
    .professional-process .step-number {
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
    
    .professional-process .step-content {
        width: 100% !important;
    }
    
    .professional-process .step-content h3 {
        font-size: 1.1rem !important;
        margin-bottom: 0.5rem !important;
        color: #333 !important;
    }
    
    .professional-process .step-content p {
        font-size: 0.9rem !important;
        color: #6c757d !important;
        line-height: 1.5 !important;
        margin: 0 !important;
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