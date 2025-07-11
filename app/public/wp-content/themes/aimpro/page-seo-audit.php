<?php
/**
 * Template Name: SEO Audit Page
 * Description: Comprehensive SEO audit services
 */

get_header();

// Helper function to get default values safely
function get_seo_audit_safe_default($field, $default = '') {
    $defaults = function_exists('aimpro_get_seo_audit_default_values') 
        ? aimpro_get_seo_audit_default_values() 
        : array();
    
    return isset($defaults[$field]) ? $defaults[$field] : $default;
}

$header_title = get_post_meta(get_the_ID(), 'seo_audit_header_title', true) ?: get_seo_audit_safe_default('seo_audit_header_title', 'SEO Audit Services');
$header_subtitle = get_post_meta(get_the_ID(), 'seo_audit_header_subtitle', true) ?: get_seo_audit_safe_default('seo_audit_header_subtitle', 'Comprehensive analysis of your website\'s SEO performance and growth opportunities');
$hero_image = get_post_meta(get_the_ID(), 'seo_audit_hero_image', true);
?>
<main id="main" class="main-content seo-service-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/seo-services'); ?>">SEO Services</a>
                <span class="separator">›</span>
                <span class="current">SEO Audit</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post($header_title); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post($header_subtitle); ?></p>
            </div>
            <?php if ($hero_image): ?>
                <div class="page-header-image animate-on-scroll animate-slide-right">
                    <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(strip_tags($header_title)); ?>" />
                </div>
            <?php endif; ?>
        </section>        <!-- SEO Audit Overview -->        <section class="seo-audit-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <?php 
                        $overview_title = get_post_meta(get_the_ID(), 'seo_audit_overview_title', true) ?: get_seo_audit_safe_default('seo_audit_overview_title', 'Discover Your Website\'s Hidden SEO Potential');
                        $overview_description = get_post_meta(get_the_ID(), 'seo_audit_overview_description', true) ?: get_seo_audit_safe_default('seo_audit_overview_description', 'Our comprehensive SEO audit provides a detailed analysis of your website\'s current performance, identifies critical issues affecting your rankings, and delivers a prioritised action plan to improve your search visibility. Get the insights you need to outrank your competition and drive more organic traffic.');
                        $benefits_title = get_post_meta(get_the_ID(), 'seo_audit_benefits_title', true) ?: get_seo_audit_safe_default('seo_audit_benefits_title', 'What Our SEO Audit Reveals:');
                        $benefits = get_post_meta(get_the_ID(), 'seo_audit_benefits', true) ?: array(
                            'Technical SEO issues preventing good rankings',
                            'Content gaps and optimisation opportunities',
                            'Competitor analysis and market positioning',
                            'Keyword opportunities you\'re missing',
                            'Backlink profile analysis and improvement areas',
                            'Mobile and Core Web Vitals performance'
                        );
                        $overview_image = get_post_meta(get_the_ID(), 'seo_audit_overview_image', true);
                        ?>
                        <h2><?php echo wp_kses_post($overview_title); ?></h2>
                        <p><?php echo wp_kses_post($overview_description); ?></p>
                    </div>
                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php 
                        if ($overview_image && is_numeric($overview_image)): ?>
                            <?php echo wp_get_attachment_image($overview_image, 'full', false, array('alt' => 'SEO Audit Services')); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services/seo-audit-overview.jpg" alt="SEO Audit Services" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="audit-benefits animate-on-scroll animate-fade-up">
                    <h3><?php echo wp_kses_post($benefits_title); ?></h3>
                    <ul>
                        <?php if (is_array($benefits)): ?>
                            <?php foreach ($benefits as $benefit): ?>
                                <li><?php echo esc_html($benefit); ?></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section><!-- Audit Components -->
        <section class="audit-components">
            <div class="section-content">
                <?php                $components_title = get_post_meta(get_the_ID(), 'seo_audit_components_title', true) ?: 'Complete SEO Audit Components';
                $components = get_post_meta(get_the_ID(), 'seo_audit_components', true) ?: array(
                    array(
                        'title' => 'Technical SEO Analysis',
                        'icon' => 'fas fa-cogs',
                        'description' => 'Deep dive into your website\'s technical foundation to identify and fix critical issues.',
                        'features' => array(
                            'Site speed and Core Web Vitals',
                            'Crawlability and indexability',
                            'URL structure and redirects',
                            'XML sitemaps and robots.txt',
                            'Schema markup implementation',
                            'Mobile-friendliness assessment'
                        ),
                        'featured' => true
                    ),
                    array(
                        'title' => 'Keyword Analysis',
                        'icon' => 'fas fa-search',
                        'description' => 'Comprehensive keyword research and optimisation opportunity identification.',
                        'features' => array(
                            'Current keyword rankings',
                            'Keyword gap analysis',
                            'Search volume and competition',
                            'Long-tail keyword opportunities',
                            'Semantic keyword mapping',
                            'Local keyword research'
                        ),
                        'featured' => false
                    ),
                    array(
                        'title' => 'Content Audit',
                        'icon' => 'fas fa-file-alt',
                        'description' => 'Evaluate your content quality, optimisation, and identify improvement opportunities.',
                        'features' => array(
                            'Content quality assessment',
                            'On-page optimisation review',
                            'Meta tags and headers analysis',
                            'Content gap identification',
                            'Duplicate content detection',
                            'Content performance metrics'
                        ),
                        'featured' => false
                    ),
                    array(
                        'title' => 'Competitor Analysis',
                        'icon' => 'fas fa-users',
                        'description' => 'analyse your top competitors to identify opportunities and benchmark performance.',
                        'features' => array(
                            'Competitor keyword rankings',
                            'Content strategy analysis',
                            'Backlink profile comparison',
                            'Technical SEO comparison',
                            'SERP position analysis',
                            'Market share assessment'
                        ),
                        'featured' => false
                    ),
                    array(
                        'title' => 'Backlink Analysis',
                        'icon' => 'fas fa-link',
                        'description' => 'Comprehensive review of your link profile and link building opportunities.',
                        'features' => array(
                            'Backlink quality assessment',
                            'Toxic link identification',
                            'Link building opportunities',
                            'Anchor text analysis',
                            'Domain authority evaluation',
                            'Link gap analysis'
                        ),
                        'featured' => false
                    ),
                    array(
                        'title' => 'Local SEO Audit',
                        'icon' => 'fas fa-map-marker-alt',
                        'description' => 'Evaluate your local search presence and optimisation opportunities.',
                        'features' => array(
                            'Google My Business optimisation',
                            'Local citation consistency',
                            'Review profile analysis',
                            'Local keyword rankings',
                            'NAP consistency check',
                            'Local competitor analysis'
                        ),
                        'featured' => false
                    )
                );
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($components_title); ?></h2>
                <div class="components-grid">
                      <?php if (is_array($components)): ?>
                          <?php foreach ($components as $component): ?>
                              <?php if (is_array($component) && isset($component['title']) && isset($component['description'])): ?>
                                  <div class="component-card <?php echo (isset($component['featured']) && $component['featured']) ? 'featured' : ''; ?> animate-on-scroll animate-stagger animate-fade-up">
                                      <div class="component-icon">
                                          <i class="<?php echo esc_attr($component['icon'] ?? 'fas fa-chart-bar'); ?>"></i>
                                      </div>
                                      <div class="component-content">
                                          <h3><?php echo wp_kses_post($component['title']); ?></h3>
                                          <p><?php echo wp_kses_post($component['description']); ?></p>
                                          <?php if (isset($component['features']) && is_array($component['features'])): ?>
                                              <ul class="component-features">
                                                  <?php foreach ($component['features'] as $feature): ?>
                                                      <li><?php echo esc_html($feature); ?></li>
                                                  <?php endforeach; ?>
                                              </ul>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                              <?php endif; ?>
                          <?php endforeach; ?>
                      <?php endif; ?>

                </div>
            </div>
        </section>        <!-- Audit Sample -->
        <section class="audit-sample">
            <div class="section-content">
                <?php 
                $sample_title = get_post_meta(get_the_ID(), 'seo_audit_sample_title', true) ?: 'What\'s Included in Your SEO Audit Report';
                $sample_subtitle = get_post_meta(get_the_ID(), 'seo_audit_sample_subtitle', true) ?: 'Comprehensive 40+ Page Report';
                $sample_image = get_post_meta(get_the_ID(), 'seo_audit_sample_image', true) ?: get_template_directory_uri() . '/assets/images/services/seo-audit-sample.jpg';
                $report_sections = get_post_meta(get_the_ID(), 'seo_audit_report_sections', true) ?: array(
                    array('title' => 'Executive Summary', 'description' => 'High-level overview of findings and recommendations'),
                    array('title' => 'Technical Issues', 'description' => 'Detailed technical problems with priority levels'),
                    array('title' => 'Content Analysis', 'description' => 'Content optimisation opportunities and gaps'),
                    array('title' => 'Competitive Landscape', 'description' => 'How you compare to top competitors'),
                    array('title' => 'Action Plan', 'description' => 'Prioritized recommendations with timelines'),
                    array('title' => 'ROI Projections', 'description' => 'Expected traffic and revenue improvements')
                );
                ?>                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($sample_title); ?></h2>                <div class="sample-content">
                    <div class="sample-details animate-on-scroll animate-slide-left">
                        <h3><?php echo esc_html($sample_subtitle); ?></h3>                        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 30px;">
                            <?php if (is_array($report_sections)): ?>
                                <?php foreach ($report_sections as $section): ?>
                                    <?php if (is_array($section) && isset($section['title']) && isset($section['description'])): ?>
                                        <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                                            <h4><?php echo esc_html($section['title']); ?></h4>
                                            <p><?php echo esc_html($section['description']); ?></p>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?></div>
                    </div>
                </div>
            </div>
        </section><!-- Audit Process -->
        <section class="audit-process">
            <div class="section-content">
                <?php 
                $process_title = get_post_meta(get_the_ID(), 'seo_audit_process_title', true) ?: 'Our SEO Audit Process';
                $process_steps = get_post_meta(get_the_ID(), 'seo_audit_process_steps', true) ?: array(
                    array(
                        'title' => 'Initial Consultation',
                        'description' => 'Understand your business goals, target audience, and current challenges.',
                        'duration' => '1-2 Days'
                    ),
                    array(
                        'title' => 'Data Collection',
                        'description' => 'Gather comprehensive data using professional SEO tools and manual analysis.',
                        'duration' => '3-5 Days'
                    ),
                    array(
                        'title' => 'Analysis & Report',
                        'description' => 'analyse data and create detailed report with actionable recommendations.',
                        'duration' => '5-7 Days'
                    ),
                    array(
                        'title' => 'Presentation & Strategy',
                        'description' => 'Present findings and discuss implementation strategy with your team.',
                        'duration' => '1 Day'
                    )
                );
                ?>                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($process_title); ?></h2>
                <div class="process-steps">
                    
                    <?php if (is_array($process_steps)): ?>
                        <?php foreach ($process_steps as $index => $step): ?>
                            <?php if (is_array($step) && isset($step['title']) && isset($step['description'])): ?>
                                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                                    <div class="step-number"><?php echo ($index + 1); ?></div>
                                    <div class="step-content">
                                        <h3><?php echo wp_kses_post($step['title']); ?></h3>
                                        <p><?php echo wp_kses_post($step['description']); ?></p>
                                        <span class="step-duration"><?php echo wp_kses_post($step['duration'] ?? ''); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                </div>
            </div>
        </section>        <!-- Audit Success Story -->
        <section class="audit-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <?php 
                        $case_study_label = get_post_meta(get_the_ID(), 'seo_audit_case_study_label', true) ?: 'SEO Audit Success Story';
                        $case_study_title = get_post_meta(get_the_ID(), 'seo_audit_case_study_title', true) ?: 'TechStart Solutions: From Audit to 380% Traffic Growth';
                        $case_study_description = get_post_meta(get_the_ID(), 'seo_audit_case_study_description', true) ?: 'TechStart Solutions was struggling with declining organic traffic and poor search rankings despite having great products. Our comprehensive SEO audit revealed critical issues that were holding them back.';
                        $case_study_challenge_title = get_post_meta(get_the_ID(), 'seo_audit_case_study_challenge_title', true) ?: 'Issues Discovered in Audit';
                        $case_study_challenges = get_post_meta(get_the_ID(), 'seo_audit_case_study_challenges', true) ?: array(
                            '47 technical SEO errors affecting crawling',
                            'Poor site speed (3.8s load time)',
                            'Duplicate content across 60% of pages',
                            'Missing schema markup',
                            'Weak internal linking structure'
                        );
                        $case_study_solution_title = get_post_meta(get_the_ID(), 'seo_audit_case_study_solution_title', true) ?: 'Audit Recommendations Implemented';
                        $case_study_solutions = get_post_meta(get_the_ID(), 'seo_audit_case_study_solutions', true) ?: array(
                            'Fixed all technical SEO issues',
                            'Improved site speed to 1.2s',
                            'Resolved duplicate content problems',
                            'Implemented comprehensive schema markup',
                            'Restructured internal linking'
                        );
                        ?>
                        <span class="case-study-label"><?php echo esc_html($case_study_label); ?></span>
                        <h2><?php echo wp_kses_post($case_study_title); ?></h2>
                        <p><?php echo wp_kses_post($case_study_description); ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo wp_kses_post($case_study_challenge_title); ?></h3>
                            <ul>
                                <?php if (is_array($case_study_challenges)): ?>
                                    <?php foreach ($case_study_challenges as $challenge): ?>
                                        <li><?php echo esc_html($challenge); ?></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo esc_html($case_study_solution_title); ?></h3>
                            <ul>
                                <?php if (is_array($case_study_solutions)): ?>
                                    <?php foreach ($case_study_solutions as $solution): ?>
                                        <li><?php echo esc_html($solution); ?></li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <?php 
                        $case_study_results_title = get_post_meta(get_the_ID(), 'seo_audit_case_study_results_title', true) ?: 'Results After Implementation';
                        $case_study_results = get_post_meta(get_the_ID(), 'seo_audit_case_study_results', true) ?: array(
                            array('number' => '380%', 'label' => 'Organic Traffic Increase'),
                            array('number' => '47', 'label' => 'Technical Issues Fixed'),
                            array('number' => '250%', 'label' => 'Keyword Rankings Improved'),
                            array('number' => '70%', 'label' => 'Faster Page Load Speed')
                        );
                        $case_study_link_text = get_post_meta(get_the_ID(), 'seo_audit_case_study_link_text', true) ?: 'Read Full Case Study';
                        $case_study_link_url = get_post_meta(get_the_ID(), 'seo_audit_case_study_link_url', true) ?: home_url('/case-studies');
                        ?>
                        <h3><?php echo esc_html($case_study_results_title); ?></h3>
                        <div class="results-grid">
                            <?php if (is_array($case_study_results)): ?>
                                <?php foreach ($case_study_results as $result): ?>
                                    <?php if (is_array($result) && isset($result['number']) && isset($result['label'])): ?>
                                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                            <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                            <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url($case_study_link_url); ?>" class="case-study-link"><?php echo esc_html($case_study_link_text); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Audit Tools -->
        <section class="service-overview">
            <div class="container">
                <div class="overview-content animate-on-scroll animate-fade-up">
                    <h2>Professional SEO Audit Tools</h2>
                    <p>We use industry-leading tools and technologies to provide comprehensive SEO audits that identify opportunities and drive results.</p>
                </div>
                
                <div class="services-grid">
                    <?php 
                    $tool_categories = array(
                        array(
                            'title' => 'Technical Analysis',
                            'description' => 'Advanced crawling and technical SEO analysis tools for comprehensive site evaluation.',
                            'tools' => array(
                                'Screaming Frog SEO Spider',
                                'Google Search Console',
                                'GTmetrix & PageSpeed Insights',
                                'SEMrush Site Audit'
                            ),
                            'icon' => 'fas fa-cogs'
                        ),
                        array(
                            'title' => 'Keyword Research',
                            'description' => 'Professional keyword research and competitive analysis platforms.',
                            'tools' => array(
                                'Ahrefs Keywords Explorer',
                                'SEMrush Keyword Magic Tool',
                                'Google Keyword Planner',
                                'Moz Keyword Explorer'
                            ),                            'icon' => 'fas fa-search'
                        ),
                        array(
                            'title' => 'Backlink Analysis',
                            'description' => 'Comprehensive backlink profile analysis and link building opportunity identification.',
                            'tools' => array(
                                'Ahrefs Site Explorer',
                                'Majestic SEO',
                                'SEMrush Backlink Analytics',
                                'Moz Link Explorer'
                            ),
                            'icon' => 'fas fa-link'
                        )
                    );
                    ?>
                    
                    <?php if (is_array($tool_categories)): ?>
                        <?php foreach ($tool_categories as $category): ?>
                            <?php if (isset($category['icon']) && isset($category['title']) && isset($category['description']) && isset($category['tools'])): ?>
                                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                                    <div class="service-icon">
                                        <i class="<?php echo esc_attr($category['icon']); ?>"></i>
                                    </div>
                                    <h3><?php echo esc_html($category['title']); ?></h3>
                                    <p><?php echo esc_html($category['description']); ?></p>
                                    <ul class="service-features">
                                        <?php if (is_array($category['tools'])): ?>
                                            <?php foreach ($category['tools'] as $tool): ?>
                                                <li><?php echo esc_html($tool); ?></li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section><!-- Audit Testimonial -->        <section class="audit-testimonial">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <?php 
                    $testimonial_quote = get_post_meta(get_the_ID(), 'seo_audit_testimonial_quote', true) ?: get_seo_audit_safe_default('seo_audit_testimonial_quote', 'The SEO audit from Aimpro Digital was incredibly detailed and actionable. They found issues we never knew existed and provided a clear roadmap to fix them. After implementing their recommendations, our organic traffic increased by 380% in just 6 months.');
                    $testimonial_author_name = get_post_meta(get_the_ID(), 'seo_audit_testimonial_author_name', true) ?: get_seo_audit_safe_default('seo_audit_testimonial_author_name', 'Mike Johnson');
                    $testimonial_author_title = get_post_meta(get_the_ID(), 'seo_audit_testimonial_author_title', true) ?: get_seo_audit_safe_default('seo_audit_testimonial_author_title', 'Marketing Director');
                    $testimonial_author_company = get_post_meta(get_the_ID(), 'seo_audit_testimonial_author_company', true) ?: get_seo_audit_safe_default('seo_audit_testimonial_author_company', 'TechStart Solutions');
                    $testimonial_image = get_post_meta(get_the_ID(), 'seo_audit_testimonial_image', true);
                    ?>
                    <blockquote>
                        "<?php echo wp_kses_post($testimonial_quote); ?>"
                    </blockquote>
                    <div class="testimonial-author">
                        <?php if ($testimonial_image): ?>
                            <img src="<?php echo esc_url($testimonial_image); ?>" alt="<?php echo esc_attr(strip_tags($testimonial_author_name)); ?>" />
                        <?php endif; ?>
                        <div class="author-info">
                            <h4><?php echo wp_kses_post($testimonial_author_name); ?></h4>
                            <span><?php echo wp_kses_post($testimonial_author_title); ?></span>
                            <div class="author-company"><?php echo wp_kses_post($testimonial_author_company); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->        <section class="audit-cta">
            <div class="container">
                <div class="cta-content animate-on-scroll animate-fade-up">
                    <?php 
                    $cta_title = get_post_meta(get_the_ID(), 'seo_audit_cta_title', true) ?: get_seo_audit_safe_default('seo_audit_cta_title', 'Ready to Uncover Your SEO Opportunities?');
                    $cta_description = get_post_meta(get_the_ID(), 'seo_audit_cta_description', true) ?: get_seo_audit_safe_default('seo_audit_cta_description', 'Get a comprehensive SEO audit that reveals exactly what\'s holding your website back and how to fix it.');
                    $cta_primary_text = get_post_meta(get_the_ID(), 'seo_audit_cta_primary_text', true) ?: get_seo_audit_safe_default('seo_audit_cta_primary_text', 'Get Your SEO Audit');
                    $cta_primary_url = get_post_meta(get_the_ID(), 'seo_audit_cta_primary_url', true) ?: home_url('/contact');
                    $cta_secondary_text = get_post_meta(get_the_ID(), 'seo_audit_cta_secondary_text', true) ?: get_seo_audit_safe_default('seo_audit_cta_secondary_text', 'View Audit Results');
                    $cta_secondary_url = get_post_meta(get_the_ID(), 'seo_audit_cta_secondary_url', true) ?: home_url('/case-studies');
                    
                    $cta_benefits = get_post_meta(get_the_ID(), 'seo_audit_cta_benefits', true) ?: array(
                        '<i class="fas fa-check" aria-hidden="true"></i> 40+ page detailed report',
                        '<i class="fas fa-check" aria-hidden="true"></i> Actionable recommendations',
                        '<i class="fas fa-check" aria-hidden="true"></i> Strategy consultation included'
                    );
                    ?>
                    <h2 class="animate-on-scroll animate-scale-up"><?php echo wp_kses_post($cta_title); ?></h2>
                    <p><?php echo wp_kses_post($cta_description); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url($cta_primary_url); ?>" class="btn-primary"><?php echo wp_kses_post($cta_primary_text); ?></a>
                        <a href="<?php echo esc_url($cta_secondary_url); ?>" class="btn-outline"><?php echo wp_kses_post($cta_secondary_text); ?></a>
                    </div>                    <div class="cta-features animate-on-scroll animate-stagger animate-fade-up">
                        <?php foreach ($cta_benefits as $benefit): ?>
                            <span class="feature-check"><?php echo esc_html($benefit); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<style>
/* Mobile CSS for SEO Audit Page */
@media (max-width: 768px) {
    /* Audit Sample Section - Report Benefits Grid */
    .audit-sample .benefits-grid {
        grid-template-columns: 1fr !important;
        gap: 15px !important;
    }
    
    .audit-sample .benefit-card {
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .audit-sample .benefit-card h4 {
        color: #f15a25;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 8px;
    }
    
    .audit-sample .benefit-card p {
        color: #64748b;
        font-size: 0.9rem;
        line-height: 1.5;
        margin: 0;
    }
    
    /* Audit Components Grid */
    .audit-components .components-grid {
        grid-template-columns: 1fr !important;
        gap: 20px;
    }
    
    .audit-components .component-card {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 24px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .audit-components .component-icon {
        text-align: center;
        margin-bottom: 16px;
    }
    
    .audit-components .component-icon i {
        font-size: 2rem;
        color: #f15a25;
    }
    
    .audit-components .component-content h3 {
        color: #1e293b;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 12px;
        text-align: center;
    }
    
    .audit-components .component-content p {
        color: #64748b;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 16px;
        text-align: center;
    }
    
    .audit-components .component-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .audit-components .component-features li {
        background: #f8fafc;
        border-left: 3px solid #f15a25;
        padding: 10px 15px;
        margin-bottom: 8px;
        border-radius: 0 6px 6px 0;
        color: #475569;
        font-size: 0.9rem;
    }
    
    .audit-components .component-features li:before {
        content: "✓ ";
        color: #f15a25;
        font-weight: bold;
        margin-right: 8px;
    }
    
    /* Service Tools Grid - Professional SEO Audit Tools */
    .service-overview .services-grid {
        grid-template-columns: 1fr !important;
        gap: 20px;
    }
    
    .service-overview .service-item {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 24px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .service-overview .service-icon {
        margin-bottom: 16px;
    }
    
    .service-overview .service-icon i {
        font-size: 2rem;
        color: #f15a25;
    }
    
    .service-overview .service-item h3 {
        color: #1e293b;
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 12px;
    }
    
    .service-overview .service-item p {
        color: #64748b;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 16px;
    }
    
    .service-overview .service-features {
        list-style: none;
        padding: 0;
        margin: 0;
        text-align: left;
    }
    
    .service-overview .service-features li {
        background: #f8fafc;
        border-left: 3px solid #f15a25;
        padding: 10px 15px;
        margin-bottom: 8px;
        border-radius: 0 6px 6px 0;
        color: #475569;
        font-size: 0.9rem;
    }
    
    .service-overview .service-features li:before {
        content: "• ";
        color: #f15a25;
        font-weight: bold;
        margin-right: 8px;
    }
    
    /* Case Study Results Grid */
    .audit-case-study .results-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px;
    }
    
    .audit-case-study .result-item {
        background: white;
        border: 2px solid #f15a25;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .audit-case-study .result-number {
        font-size: 2rem;
        font-weight: 800;
        color: #f15a25;
        display: block;
        margin-bottom: 8px;
    }
    
    .audit-case-study .result-label {
        color: #64748b;
        font-size: 0.85rem;
        font-weight: 600;
        line-height: 1.3;
    }
    
    /* Process Steps */
    .audit-process .process-steps {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    .audit-process .process-step {
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 24px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .audit-process .step-number {
        background: #f15a25;
        color: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
    }
    
    .audit-process .step-content h3 {
        color: #1e293b;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 8px;
    }
    
    .audit-process .step-content p {
        color: #64748b;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 8px;
    }
    
    .audit-process .step-duration {
        background: #fef3f2;
        color: #f15a25;
        font-size: 0.8rem;
        font-weight: 600;
        padding: 4px 8px;
        border-radius: 4px;
        display: inline-block;
    }
    
    /* CTA Section */
    .audit-cta .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin: 24px 0;
    }
    
    .audit-cta .btn-primary,
    .audit-cta .btn-outline {
        background: #f15a25;
        color: white;
        border: 2px solid #f15a25;
        padding: 16px 24px;
        border-radius: 8px;
        font-weight: 700;
        text-decoration: none;
        text-align: center;
        font-size: 1rem;
        transition: all 0.3s ease;
        display: block;
        width: 100%;
    }
    
    .audit-cta .btn-outline {
        background: transparent;
        color: #f15a25;
    }
    
    .audit-cta .cta-features {
        display: flex;
        flex-direction: column;
        gap: 8px;
        text-align: center;
        margin-top: 20px;
    }
    
    .audit-cta .feature-check {
        color: #059669;
        font-size: 0.9rem;
        font-weight: 600;
    }
    
    /* Hide bullet icons on mobile for feature lists */
    .audit-components .component-features li:before,
    .service-overview .service-features li:before {
        display: none;
    }
    
    /* Overview section improvements */
    .seo-audit-overview .overview-content {
        flex-direction: column;
        gap: 30px;
    }
    
    .seo-audit-overview .audit-benefits ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .seo-audit-overview .audit-benefits ul li {
        background: #f8fafc;
        border-left: 3px solid #f15a25;
        padding: 12px 16px;
        margin-bottom: 8px;
        border-radius: 0 6px 6px 0;
        color: #475569;
        font-size: 0.95rem;
    }
}
</style>

<?php get_footer(); ?>
