<?php
/**
 * Template Name: Estate Agents Industry Page
 * Description: Digital marketing for estate agents and property professionals
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/industries'); ?>">Industries</a>
                <span class="separator">›</span>
                <span class="current">Estate Agents</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_header_title', true) ?: 'Estate Agent Digital Marketing'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_header_subtitle', true) ?: 'Generate quality property leads and dominate your local property market'); ?></p>
            </div>
        </section>        <!-- Industry Overview -->
        <section class="industry-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_overview_title', true) ?: 'Sell More Properties, Attract More Vendors'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_overview_content', true) ?: 'The property market is fiercely competitive. Our specialised estate agent marketing strategies help you stand out, generate high-quality vendor and buyer leads, and establish your agency as the go-to property experts in your area.'); ?></p>
                        
                        <div class="industry-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_challenges_title', true) ?: 'Estate Agent Marketing Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php 
                                $challenges = get_post_meta(get_the_ID(), '_estate_agents_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'Intense competition from online property portals',
                                        'Seasonal market fluctuations',
                                        'Generating quality vendor leads',
                                        'Standing out in local search results',
                                        'Building trust and credibility',
                                        'Managing online reputation and reviews'
                                    );
                                }
                                foreach ($challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>                    </div>                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php 
                        $overview_image = get_post_meta(get_the_ID(), '_estate_agents_overview_image', true);
                        if (!empty($overview_image)): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" alt="Estate Agent Digital Marketing" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/estate-agents-overview.jpg" alt="Estate Agent Digital Marketing" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Estate Agent Services (2x2 Grid) -->
        <section class="estate-agent-services">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_services_title', true) ?: 'Our Estate Agent Marketing Services'); ?></h2>
                <div class="services-grid">
                    <?php 
                    $services = get_post_meta(get_the_ID(), '_estate_agents_services', true);
                    if (empty($services)) {
                        $services = array(
                            array(
                                'icon' => 'fas fa-home',
                                'title' => 'Local Property SEO',
                                'description' => 'Dominate local search results when potential clients search for estate agents, property valuations, and homes for sale in your area.',
                                'features' => array('Google My Business optimisation', 'Local property keyword targeting', 'Area-specific landing pages', 'Property portal profile optimisation')
                            ),
                            array(
                                'icon' => 'fas fa-users',
                                'title' => 'Vendor Lead Generation',
                                'description' => 'Attract property sellers with targeted campaigns designed to generate high-quality vendor leads and property valuations.',
                                'features' => array('Google Ads for vendor leads', 'Facebook lead generation campaigns', 'Property valuation landing pages', 'Market report lead magnets')
                            ),
                            array(
                                'icon' => 'fas fa-desktop',
                                'title' => 'Property Content Marketing',
                                'description' => 'Establish your expertise with valuable property content that educates buyers and sellers while building your brand authority.',
                                'features' => array('Market insight blog posts', 'Area property guides', 'Video property tours', 'Market analysis reports')
                            ),
                            array(
                                'icon' => 'fas fa-chart-bar',
                                'title' => 'Social Media Property Marketing',
                                'description' => 'Showcase properties and build your brand presence across social platforms to reach potential buyers and sellers.',
                                'features' => array('Facebook property advertising', 'Instagram Stories and Reels', 'LinkedIn professional networking', 'Community engagement strategy')
                            )
                        );
                    }
                    foreach ($services as $service): ?>
                        <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="service-icon">
                                <i class="<?php echo esc_attr($service['icon']); ?>"></i>
                            </div>
                            <div class="service-content">
                                <h3><?php echo esc_html($service['title']); ?></h3>
                                <p><?php echo esc_html($service['description']); ?></p>
                                <ul class="service-features">
                                    <?php foreach ($service['features'] as $feature): ?>
                                        <li><?php echo esc_html($feature); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Estate Agent Success Story -->
        <section class="estate-agent-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <span class="case-study-label"><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_case_study_label', true) ?: 'Success Story'); ?></span>
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_case_study_title', true) ?: 'PropertyPro: 280% Increase in Vendor Leads'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_case_study_content', true) ?: 'PropertyPro, an independent estate agency, needed to compete against national chains and generate more vendor leads in their local market.'); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_case_study_challenge_title', true) ?: 'The Challenge'); ?></h3>
                            <ul>
                                <?php 
                                $case_study_challenges = get_post_meta(get_the_ID(), '_estate_agents_case_study_challenges', true);
                                if (empty($case_study_challenges)) {
                                    $case_study_challenges = array(
                                        'Competition from national estate agent brands',
                                        'Limited vendor lead generation',
                                        'Poor local search visibility',
                                        'Seasonal market fluctuations'
                                    );
                                }
                                foreach ($case_study_challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_case_study_solution_title', true) ?: 'Our Solution'); ?></h3>
                            <ul>
                                <?php 
                                $case_study_solutions = get_post_meta(get_the_ID(), '_estate_agents_case_study_solutions', true);
                                if (empty($case_study_solutions)) {
                                    $case_study_solutions = array(
                                        'Comprehensive local SEO strategy',
                                        'Targeted vendor lead campaigns',
                                        'Property market content marketing',
                                        'Social media property showcase'
                                    );
                                }
                                foreach ($case_study_solutions as $solution): ?>
                                    <li><?php echo esc_html($solution); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_case_study_results_title', true) ?: 'Results After 6 Months'); ?></h3>
                        <div class="results-grid">
                            <?php 
                            $case_study_results = get_post_meta(get_the_ID(), '_estate_agents_case_study_results', true);
                            if (empty($case_study_results)) {
                                $case_study_results = array(
                                    array('number' => '280%', 'label' => 'Vendor Lead Increase'),
                                    array('number' => '450%', 'label' => 'Property Valuation Requests'),
                                    array('number' => '320%', 'label' => 'Local Search Visibility'),
                                    array('number' => '65%', 'label' => 'More Property Sales')
                                );
                            }
                            foreach ($case_study_results as $result): ?>
                                <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                    <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                    <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_estate_agents_case_study_link_url', true) ?: home_url('/case-studies')); ?>" class="case-study-link animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_case_study_link_text', true) ?: 'Read Full Case Study'); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Estate Agent Process -->
        <section class="estate-agent-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_process_title', true) ?: 'Our Estate Agent Marketing Process'); ?></h2>
                <div class="process-steps">
                    <?php 
                    $process_steps = get_post_meta(get_the_ID(), '_estate_agents_process_steps', true);
                    if (empty($process_steps)) {
                        $process_steps = array(
                            array(
                                'title' => 'Local Market Analysis',
                                'description' => 'analyse your local property market, competitor strategies, and identify opportunities for growth.'
                            ),
                            array(
                                'title' => 'Multi-Channel Strategy',
                                'description' => 'Develop integrated campaigns across search, social, and content to attract both buyers and sellers.'
                            ),
                            array(
                                'title' => 'Lead Generation Implementation',
                                'description' => 'Launch targeted campaigns designed to generate vendor leads, buyer inquiries, and valuation requests.'
                            ),
                            array(
                                'title' => 'Performance Tracking',
                                'description' => 'Monitor lead quality, conversion rates, and adjust strategies based on market conditions.'
                            )
                        );
                    }
                    $step_number = 1;
                    foreach ($process_steps as $step): ?>
                        <div class="process-step animate-on-scroll animate-stagger animate-slide-up">
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
        </section>        <!-- Estate Agent Insights -->
        <section class="estate-agent-insights">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Property Market Insights</h2>
                <div class="results-grid">
                    
                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">92%</div>
                        <div class="result-label">Online Property Search</div>
                        <p>92% of property buyers start their search online</p>
                    </div>

                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">76%</div>
                        <div class="result-label">Local Agent Preference</div>
                        <p>76% of sellers prefer local estate agents over national chains</p>
                    </div>

                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">84%</div>
                        <div class="result-label">Reviews Influence</div>
                        <p>84% of clients check online reviews before choosing an agent</p>
                    </div>

                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">67%</div>
                        <div class="result-label">Mobile Property Search</div>
                        <p>67% of property searches happen on mobile devices</p>
                    </div>
                </div>
            </div>
        </section><!-- Estate Agent Testimonial -->
        <section class="estate-agent-testimonial">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <blockquote>
                        "<?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_testimonial_quote', true) ?: 'Aimpro Digital transformed our estate agency\'s online presence. Their understanding of the property market and local SEO expertise helped us generate 280% more vendor leads. We\'re now the leading independent agent in our area.'); ?>"
                    </blockquote>
                    <div class="testimonial-author animate-on-scroll animate-slide-up">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_testimonial_name', true) ?: 'Sarah Mitchell'); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_testimonial_position', true) ?: 'Director, PropertyPro Estate Agents'); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_testimonial_company', true) ?: 'Independent estate agency with 3 offices'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content animate-on-scroll animate-fade-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_cta_title', true) ?: 'Ready to Dominate Your Local Property Market?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_cta_subtitle', true) ?: 'Let\'s discuss how our estate agent marketing expertise can generate more vendor leads and property sales.'); ?></p>
                    <div class="cta-buttons animate-on-scroll animate-slide-up">
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_estate_agents_cta_primary_url', true) ?: home_url('/contact')); ?>" class="btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_cta_primary_text', true) ?: 'Get Free Marketing Audit'); ?></a>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_estate_agents_cta_secondary_url', true) ?: home_url('/case-studies')); ?>" class="btn-outline"><?php echo esc_html(get_post_meta(get_the_ID(), '_estate_agents_cta_secondary_text', true) ?: 'View Property Success Stories'); ?></a>
                    </div>                    <div class="cta-features animate-on-scroll animate-fade-up">
                        <?php 
                        $cta_benefits = get_post_meta(get_the_ID(), '_estate_agents_cta_benefits', true);
                        if (empty($cta_benefits)) {
                            $cta_benefits = array(
                                'Property market expertise',
                                'Local SEO specialists', 
                                'Vendor lead generation'
                            );
                        }
                        foreach ($cta_benefits as $benefit): ?>
                            <span><?php echo esc_html($benefit); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

<!-- Add debugging function for estate agents page -->
<?php
add_action('wp_footer', function() {
    if (is_page('estate-agents')) {
        $overview_image = get_post_meta(get_the_ID(), '_estate_agents_overview_image', true);
        echo '<!-- Debug: Estate Agents Overview Image Value: ' . esc_html($overview_image) . ' -->';
    }
});
?>
