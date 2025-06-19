<?php
/**
 * Template Name: SEO Audit Page
 * Description: Comprehensive SEO audit services
 */

get_header();

$header_title = get_post_meta(get_the_ID(), 'seo_audit_header_title', true) ?: 'SEO Audit Services';
$header_subtitle = get_post_meta(get_the_ID(), 'seo_audit_header_subtitle', true) ?: 'Comprehensive analysis of your website\'s SEO performance and growth opportunities';
$hero_image = get_post_meta(get_the_ID(), 'seo_audit_hero_image', true);
?>
<main id="main" class="main-content seo-service-page">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html($header_title); ?></h1>
                <p class="page-subtitle"><?php echo esc_html($header_subtitle); ?></p>
            </div>
            <?php if ($hero_image): ?>
                <div class="page-header-image animate-on-scroll animate-slide-right">
                    <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr($header_title); ?>" />
                </div>
            <?php endif; ?>
        </section>        <!-- SEO Audit Overview -->        <section class="seo-audit-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <?php 
                        $overview_title = get_post_meta(get_the_ID(), 'seo_audit_overview_title', true) ?: 'Discover Your Website\'s Hidden SEO Potential';
                        $overview_description = get_post_meta(get_the_ID(), 'seo_audit_overview_description', true) ?: 'Our comprehensive SEO audit provides a detailed analysis of your website\'s current performance, identifies critical issues affecting your rankings, and delivers a prioritized action plan to improve your search visibility. Get the insights you need to outrank your competition and drive more organic traffic.';
                        $benefits_title = get_post_meta(get_the_ID(), 'seo_audit_benefits_title', true) ?: 'What Our SEO Audit Reveals:';
                        $benefits = get_post_meta(get_the_ID(), 'seo_audit_benefits', true) ?: array(
                            'Technical SEO issues preventing good rankings',
                            'Content gaps and optimization opportunities',
                            'Competitor analysis and market positioning',
                            'Keyword opportunities you\'re missing',
                            'Backlink profile analysis and improvement areas',
                            'Mobile and Core Web Vitals performance'
                        );
                        $overview_image = get_post_meta(get_the_ID(), 'seo_audit_overview_image', true);
                        ?>
                        <h2><?php echo esc_html($overview_title); ?></h2>
                        <p><?php echo esc_html($overview_description); ?></p>
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
                    <h3><?php echo esc_html($benefits_title); ?></h3>
                    <ul>
                        <?php foreach ($benefits as $benefit): ?>
                            <li><?php echo esc_html($benefit); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section><!-- Audit Components -->
        <section class="audit-components">
            <div class="section-content">
                <?php 
                $components_title = get_post_meta(get_the_ID(), 'seo_audit_components_title', true) ?: 'Complete SEO Audit Components';
                $components = get_post_meta(get_the_ID(), 'seo_audit_components', true) ?: array(
                    array(
                        'title' => 'Technical SEO Analysis',
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
                        'description' => 'Comprehensive keyword research and optimization opportunity identification.',
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
                        'description' => 'Evaluate your content quality, optimization, and identify improvement opportunities.',
                        'features' => array(
                            'Content quality assessment',
                            'On-page optimization review',
                            'Meta tags and headers analysis',
                            'Content gap identification',
                            'Duplicate content detection',
                            'Content performance metrics'
                        ),
                        'featured' => false
                    ),
                    array(
                        'title' => 'Competitor Analysis',
                        'description' => 'Analyze your top competitors to identify opportunities and benchmark performance.',
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
                        'description' => 'Evaluate your local search presence and optimization opportunities.',
                        'features' => array(
                            'Google My Business optimization',
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
                <h2><?php echo esc_html($components_title); ?></h2>
                <div class="components-grid">
                    
                    <?php foreach ($components as $component): ?>
                        <div class="component-card <?php echo (isset($component['featured']) && $component['featured']) ? 'featured' : ''; ?>">
                            <div class="component-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <?php if (isset($component['featured']) && $component['featured']): ?>
                                        <path d="M14.7 6.3C15.1 5.9 15.1 5.3 14.7 4.9C14.3 4.5 13.7 4.5 13.3 4.9L12 6.2L10.7 4.9C10.3 4.5 9.7 4.5 9.3 4.9C8.9 5.3 8.9 5.9 9.3 6.3L10.6 7.6L9.3 8.9C8.9 9.3 8.9 9.9 9.3 10.3C9.7 10.7 10.3 10.7 10.7 10.3L12 9L13.3 10.3C13.7 10.7 14.3 10.7 14.7 10.3C15.1 9.9 15.1 9.3 14.7 8.9L13.4 7.6L14.7 6.3Z" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                    <?php else: ?>
                                        <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                                        <path d="M21 21L16.65 16.65" stroke="currentColor" stroke-width="2"/>
                                    <?php endif; ?>
                                </svg>
                            </div>
                            <div class="component-content">
                                <h3><?php echo esc_html($component['title']); ?></h3>
                                <p><?php echo esc_html($component['description']); ?></p>
                                <?php if (isset($component['features']) && is_array($component['features'])): ?>
                                    <ul class="component-features">
                                        <?php foreach ($component['features'] as $feature): ?>
                                            <li><?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

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
                    array('title' => 'Content Analysis', 'description' => 'Content optimization opportunities and gaps'),
                    array('title' => 'Competitive Landscape', 'description' => 'How you compare to top competitors'),
                    array('title' => 'Action Plan', 'description' => 'Prioritized recommendations with timelines'),
                    array('title' => 'ROI Projections', 'description' => 'Expected traffic and revenue improvements')
                );
                ?>                <h2><?php echo esc_html($sample_title); ?></h2>
                <div class="sample-content">
                    <div class="sample-details">
                        <h3><?php echo esc_html($sample_subtitle); ?></h3>
                        <div class="report-sections">
                            <?php foreach ($report_sections as $section): ?>
                                <div class="report-section">
                                    <h4><?php echo esc_html($section['title']); ?></h4>
                                    <p><?php echo esc_html($section['description']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Audit Process -->
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
                        'description' => 'Analyze data and create detailed report with actionable recommendations.',
                        'duration' => '5-7 Days'
                    ),
                    array(
                        'title' => 'Presentation & Strategy',
                        'description' => 'Present findings and discuss implementation strategy with your team.',
                        'duration' => '1 Day'
                    )
                );
                ?>                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($process_title); ?></h2>
                <div class="process-steps">
                    
                    <?php foreach ($process_steps as $index => $step): ?>
                        <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                            <div class="step-number"><?php echo ($index + 1); ?></div>
                            <div class="step-content">
                                <h3><?php echo esc_html($step['title']); ?></h3>
                                <p><?php echo esc_html($step['description']); ?></p>
                                <span class="step-duration"><?php echo esc_html($step['duration']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>        <!-- Audit Success Story -->
        <section class="audit-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
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
                        <h2><?php echo esc_html($case_study_title); ?></h2>
                        <p><?php echo esc_html($case_study_description); ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo esc_html($case_study_challenge_title); ?></h3>
                            <ul>
                                <?php foreach ($case_study_challenges as $challenge): ?>
                                    <li><?php echo esc_html($challenge); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo esc_html($case_study_solution_title); ?></h3>
                            <ul>
                                <?php foreach ($case_study_solutions as $solution): ?>
                                    <li><?php echo esc_html($solution); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
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
                            <?php foreach ($case_study_results as $result): ?>
                                <div class="result-item">
                                    <div class="result-number"><?php echo esc_html($result['number']); ?></div>
                                    <div class="result-label"><?php echo esc_html($result['label']); ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a href="<?php echo esc_url($case_study_link_url); ?>" class="case-study-link"><?php echo esc_html($case_study_link_text); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Audit Tools -->
        <section class="audit-tools">
            <div class="section-content">
                <?php 
                $tools_title = get_post_meta(get_the_ID(), 'seo_audit_tools_title', true) ?: 'Professional SEO Audit Tools';
                $tool_categories = get_post_meta(get_the_ID(), 'seo_audit_tool_categories', true) ?: array(
                    array(
                        'title' => 'Technical Analysis',
                        'tools' => array(
                            'Screaming Frog SEO Spider',
                            'Google Search Console',
                            'GTmetrix & PageSpeed Insights',
                            'SEMrush Site Audit'
                        )
                    ),
                    array(
                        'title' => 'Keyword Research',
                        'tools' => array(
                            'Ahrefs Keywords Explorer',
                            'SEMrush Keyword Magic Tool',
                            'Google Keyword Planner',
                            'Moz Keyword Explorer'
                        )
                    ),
                    array(
                        'title' => 'Content Analysis',
                        'tools' => array(
                            'Surfer SEO',
                            'Clearscope',
                            'Siteliner',
                            'Copyscape'
                        )
                    ),
                    array(
                        'title' => 'Backlink Analysis',
                        'tools' => array(
                            'Ahrefs Site Explorer',
                            'Majestic SEO',
                            'SEMrush Backlink Analytics',
                            'Moz Link Explorer'
                        )
                    )
                );
                ?>
                <h2><?php echo esc_html($tools_title); ?></h2>
                <div class="tools-grid">
                    
                    <?php foreach ($tool_categories as $category): ?>
                        <div class="tool-category">
                            <h3><?php echo esc_html($category['title']); ?></h3>
                            <ul class="tool-list">
                                <?php foreach ($category['tools'] as $tool): ?>
                                    <li><?php echo esc_html($tool); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>        </section>        <!-- Audit Testimonial -->
        <section class="audit-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <?php 
                    $testimonial_quote = get_post_meta(get_the_ID(), 'seo_audit_testimonial_quote', true) ?: 'The SEO audit from Aimpro Digital was incredibly detailed and actionable. They found issues we never knew existed and provided a clear roadmap to fix them. After implementing their recommendations, our organic traffic increased by 380% in just 6 months.';
                    $testimonial_author_name = get_post_meta(get_the_ID(), 'seo_audit_testimonial_author_name', true) ?: 'Mike Johnson';
                    $testimonial_author_title = get_post_meta(get_the_ID(), 'seo_audit_testimonial_author_title', true) ?: 'Marketing Director, TechStart Solutions';
                    $testimonial_author_company = get_post_meta(get_the_ID(), 'seo_audit_testimonial_author_company', true) ?: 'B2B Technology Company';
                    $testimonial_image = get_post_meta(get_the_ID(), 'seo_audit_testimonial_image', true);
                    ?>
                    <blockquote>
                        "<?php echo esc_html($testimonial_quote); ?>"
                    </blockquote>
                    <div class="testimonial-author">
                        <?php if ($testimonial_image): ?>
                            <img src="<?php echo esc_url($testimonial_image); ?>" alt="<?php echo esc_attr($testimonial_author_name); ?>" />
                        <?php endif; ?>
                        <div class="author-info">
                            <h4><?php echo esc_html($testimonial_author_name); ?></h4>
                            <span><?php echo esc_html($testimonial_author_title); ?></span>
                            <div class="author-company"><?php echo esc_html($testimonial_author_company); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="audit-cta">
            <div class="container">
                <div class="cta-content">
                    <?php 
                    $cta_title = get_post_meta(get_the_ID(), 'seo_audit_cta_title', true) ?: 'Ready to Uncover Your SEO Opportunities?';
                    $cta_description = get_post_meta(get_the_ID(), 'seo_audit_cta_description', true) ?: 'Get a comprehensive SEO audit that reveals exactly what\'s holding your website back and how to fix it.';
                    $cta_primary_text = get_post_meta(get_the_ID(), 'seo_audit_cta_primary_text', true) ?: 'Get Your SEO Audit';
                    $cta_primary_url = get_post_meta(get_the_ID(), 'seo_audit_cta_primary_url', true) ?: home_url('/contact');
                    $cta_secondary_text = get_post_meta(get_the_ID(), 'seo_audit_cta_secondary_text', true) ?: 'View Audit Results';
                    $cta_secondary_url = get_post_meta(get_the_ID(), 'seo_audit_cta_secondary_url', true) ?: home_url('/case-studies');
                    
                    $cta_benefits = get_post_meta(get_the_ID(), 'seo_audit_cta_benefits', true) ?: array(
                        '<i class="fas fa-check" aria-hidden="true"></i> 40+ page detailed report',
                        '<i class="fas fa-check" aria-hidden="true"></i> Actionable recommendations',
                        '<i class="fas fa-check" aria-hidden="true"></i> Strategy consultation included'
                    );
                    ?>
                    <h2><?php echo esc_html($cta_title); ?></h2>
                    <p><?php echo esc_html($cta_description); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url($cta_primary_url); ?>" class="btn-primary"><?php echo esc_html($cta_primary_text); ?></a>
                        <a href="<?php echo esc_url($cta_secondary_url); ?>" class="btn-outline"><?php echo esc_html($cta_secondary_text); ?></a>
                    </div>
                    <div class="cta-features">
                        <?php foreach ($cta_benefits as $benefit): ?>
                            <span class="feature-check"><?php echo esc_html($benefit); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
