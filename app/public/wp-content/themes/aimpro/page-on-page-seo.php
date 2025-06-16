<?php
/**
 * Template Name: On-Page SEO Services
 * Description: On-page SEO optimization services
 */

get_header(); ?>

<main id="main" class="main-content seo-service-page">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <?php 
                $header_title = get_post_meta(get_the_ID(), 'on_page_seo_header_title', true) ?: 'On-Page SEO Services';
                $header_subtitle = get_post_meta(get_the_ID(), 'on_page_seo_header_subtitle', true) ?: 'Optimize every page element to boost search rankings and user experience';
                $header_badges = get_post_meta(get_the_ID(), 'on_page_seo_header_badges', true) ?: array(
                    'Content Optimization',
                    'Technical Implementation',
                    'User Experience'
                );
                ?>
                <h1><?php echo esc_html($header_title); ?></h1>
                <p class="page-subtitle"><?php echo esc_html($header_subtitle); ?></p>
                <div class="header-badges">
                    <?php foreach ($header_badges as $badge): ?>
                        <span class="badge"><?php echo esc_html($badge); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Service Overview -->
        <section class="service-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <?php 
                        $overview_title = get_post_meta(get_the_ID(), 'on_page_seo_overview_title', true) ?: 'Comprehensive On-Page SEO Optimization';
                        $overview_description_1 = get_post_meta(get_the_ID(), 'on_page_seo_overview_description_1', true) ?: 'Our on-page SEO services focus on optimizing individual web pages to rank higher and earn more relevant traffic in search engines. We optimize both the content and HTML source code of a page, ensuring every element contributes to your search visibility and user experience.';
                        $overview_description_2 = get_post_meta(get_the_ID(), 'on_page_seo_overview_description_2', true) ?: 'From title tags and meta descriptions to content structure and internal linking, our systematic approach to on-page SEO ensures your website communicates effectively with both search engines and users.';
                        ?>
                        <h2><?php echo esc_html($overview_title); ?></h2>
                        <p><?php echo esc_html($overview_description_1); ?></p>
                        <p><?php echo esc_html($overview_description_2); ?></p>
                    </div>
                    <div class="overview-stats">
                        <?php 
                        $stats = get_post_meta(get_the_ID(), 'on_page_seo_stats', true) ?: array(
                            array('number' => '73%', 'label' => 'Average ranking improvement'),
                            array('number' => '280%', 'label' => 'Increase in organic traffic'),
                            array('number' => '45%', 'label' => 'Improvement in CTR')
                        );
                        foreach ($stats as $stat):
                        ?>
                            <div class="stat-item">
                                <span class="stat-number"><?php echo esc_html($stat['number']); ?></span>
                                <span class="stat-label"><?php echo esc_html($stat['label']); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Services Grid -->
        <section class="onpage-seo-services">
            <div class="section-content">
                <?php 
                $services_title = get_post_meta(get_the_ID(), 'on_page_seo_services_title', true) ?: 'Our On-Page SEO Services';
                $services = get_post_meta(get_the_ID(), 'on_page_seo_services', true) ?: array(
                    array(
                        'title' => 'Title Tag & Meta Description Optimization',
                        'description' => 'Craft compelling title tags and meta descriptions that improve click-through rates and communicate page relevance to search engines.',
                        'features' => array(
                            'Keyword-optimized title tags',
                            'Compelling meta descriptions',
                            'SERP preview optimization',
                            'Character limit compliance'
                        )
                    ),
                    array(
                        'title' => 'Content Structure & Optimization',
                        'description' => 'Optimize content structure using proper heading hierarchy, keyword placement, and semantic markup for better search visibility.',
                        'features' => array(
                            'H1-H6 heading optimization',
                            'Keyword density analysis',
                            'Content readability improvement',
                            'Featured snippet optimization'
                        )
                    ),
                    array(
                        'title' => 'URL Structure & Optimization',
                        'description' => 'Create SEO-friendly URL structures that are both user-friendly and search engine optimized for maximum visibility.',
                        'features' => array(
                            'Clean URL structure',
                            'Keyword-rich URLs',
                            'URL canonicalization',
                            'Redirect management'
                        )
                    ),
                    array(
                        'title' => 'Image & Media Optimization',
                        'description' => 'Optimize images and media files for faster loading times and better search engine understanding of your content.',
                        'features' => array(
                            'Alt text optimization',
                            'Image file compression',
                            'Descriptive file names',
                            'WebP format conversion'
                        )
                    ),
                    array(
                        'title' => 'Internal Linking Strategy',
                        'description' => 'Develop strategic internal linking structures that distribute page authority and improve user navigation throughout your site.',
                        'features' => array(
                            'Link architecture planning',
                            'Anchor text optimization',
                            'Deep linking strategies',
                            'Link equity distribution'
                        )
                    ),
                    array(
                        'title' => 'Schema Markup Implementation',
                        'description' => 'Implement structured data markup to help search engines better understand your content and enable rich snippets.',
                        'features' => array(
                            'Rich snippet optimization',
                            'Local business schema',
                            'Product schema markup',
                            'FAQ and How-to schemas'
                        )
                    )
                );
                ?>
                <h2><?php echo esc_html($services_title); ?></h2>
                <div class="components-grid">
                    
                    <?php foreach ($services as $service): ?>
                        <div class="component-card">
                            <div class="component-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14 2V8H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="component-content">
                                <h3><?php echo esc_html($service['title']); ?></h3>
                                <p><?php echo esc_html($service['description']); ?></p>
                                <?php if (isset($service['features']) && is_array($service['features'])): ?>
                                    <ul class="component-features">
                                        <?php foreach ($service['features'] as $feature): ?>
                                            <li><?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>        <!-- Case Study -->
        <section class="case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <?php 
                        $case_study_title = get_post_meta(get_the_ID(), 'on_page_seo_case_study_title', true) ?: 'Case Study: Professional Services Firm';
                        $case_study_subtitle = get_post_meta(get_the_ID(), 'on_page_seo_case_study_subtitle', true) ?: 'Complete On-Page Optimization Drives 425% Traffic Growth';
                        $case_study_description = get_post_meta(get_the_ID(), 'on_page_seo_case_study_description', true) ?: 'A London-based professional services firm approached us with poor search rankings and low organic visibility. Our comprehensive on-page optimization strategy transformed their digital presence.';
                        $challenges = get_post_meta(get_the_ID(), 'on_page_seo_challenges', true) ?: array(
                            'Pages ranking beyond position 50 for target keywords',
                            'Poor content structure and keyword targeting',
                            'Low click-through rates from search results',
                            'Missing technical SEO elements'
                        );
                        $solutions = get_post_meta(get_the_ID(), 'on_page_seo_solutions', true) ?: array(
                            'Complete title tag and meta description overhaul',
                            'Content restructuring with proper heading hierarchy',
                            'Strategic internal linking implementation',
                            'Schema markup for all service pages'
                        );
                        ?>
                        <h2><?php echo esc_html($case_study_title); ?></h2>
                        <h3><?php echo esc_html($case_study_subtitle); ?></h3>
                        <p><?php echo esc_html($case_study_description); ?></p>
                        
                        <div class="challenge-solution">
                            <div class="challenge">
                                <h4>The Challenge</h4>
                                <ul>
                                    <?php foreach ($challenges as $challenge): ?>
                                        <li><?php echo esc_html($challenge); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="solution">
                                <h4>Our Solution</h4>
                                <ul>
                                    <?php foreach ($solutions as $solution): ?>
                                        <li><?php echo esc_html($solution); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="case-study-metrics">
                        <?php 
                        $metrics = get_post_meta(get_the_ID(), 'on_page_seo_metrics', true) ?: array(
                            array('number' => '425%', 'label' => 'Increase in Organic Traffic'),
                            array('number' => '68%', 'label' => 'Improvement in CTR'),
                            array('number' => '85%', 'label' => 'Keywords in Top 10'),
                            array('number' => '12 Weeks', 'label' => 'Time to See Results')
                        );
                        foreach ($metrics as $metric):
                        ?>
                            <div class="metric-card">
                                <div class="metric-number"><?php echo esc_html($metric['number']); ?></div>
                                <div class="metric-label"><?php echo esc_html($metric['label']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Process -->
        <section class="service-process">
            <div class="section-content">
                <?php 
                $process_title = get_post_meta(get_the_ID(), 'on_page_seo_process_title', true) ?: 'Our On-Page SEO Process';
                $process_steps = get_post_meta(get_the_ID(), 'on_page_seo_process_steps', true) ?: array(
                    array(
                        'title' => 'Content Audit & Analysis',
                        'description' => 'Comprehensive review of existing content, identifying optimization opportunities and gaps in your current on-page SEO strategy.'
                    ),
                    array(
                        'title' => 'Keyword Research & Mapping',
                        'description' => 'In-depth keyword research to identify high-value opportunities and map keywords to specific pages for optimal targeting.'
                    ),
                    array(
                        'title' => 'Technical Implementation',
                        'description' => 'Systematic implementation of on-page optimizations including title tags, meta descriptions, headers, and technical elements.'
                    ),
                    array(
                        'title' => 'Content Optimization',
                        'description' => 'Optimize content structure, readability, and keyword placement while maintaining natural flow and user value.'
                    ),
                    array(
                        'title' => 'Monitoring & Refinement',
                        'description' => 'Ongoing monitoring of performance metrics and continuous refinement of on-page elements based on data and results.'
                    )
                );
                ?>
                <h2><?php echo esc_html($process_title); ?></h2>
                <div class="process-steps">
                    <?php foreach ($process_steps as $index => $step): ?>
                        <div class="process-step">
                            <div class="step-number"><?php echo ($index + 1); ?></div>
                            <div class="step-content">
                                <h3><?php echo esc_html($step['title']); ?></h3>
                                <p><?php echo esc_html($step['description']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Tools & Technologies -->
        <section class="tools-technologies">
            <div class="section-content">
                <?php 
                $tools_title = get_post_meta(get_the_ID(), 'on_page_seo_tools_title', true) ?: 'Tools & Technologies We Use';
                $tool_categories = get_post_meta(get_the_ID(), 'on_page_seo_tool_categories', true) ?: array(
                    array(
                        'title' => 'SEO Analysis Tools',
                        'tools' => array(
                            'Screaming Frog SEO Spider',
                            'Ahrefs Site Audit',
                            'SEMrush On-Page SEO Checker',
                            'Google Search Console'
                        )
                    ),
                    array(
                        'title' => 'Content Optimization',
                        'tools' => array(
                            'Surfer SEO Content Editor',
                            'Clearscope Content Optimization',
                            'MarketMuse Content Planning',
                            'Grammarly for Readability'
                        )
                    ),
                    array(
                        'title' => 'Technical Implementation',
                        'tools' => array(
                            'Yoast SEO (WordPress)',
                            'Schema.org Markup',
                            'Google Tag Manager',
                            'Custom HTML/CSS Solutions'
                        )
                    ),
                    array(
                        'title' => 'Performance Monitoring',
                        'tools' => array(
                            'Google Analytics 4',
                            'Google PageSpeed Insights',
                            'GTmetrix Performance',
                            'Core Web Vitals Monitoring'
                        )
                    )
                );
                ?>
                <h2><?php echo esc_html($tools_title); ?></h2>
                <div class="tools-grid">
                    <?php foreach ($tool_categories as $category): ?>
                        <div class="tool-category">
                            <h3><?php echo esc_html($category['title']); ?></h3>
                            <ul>
                                <?php foreach ($category['tools'] as $tool): ?>
                                    <li><?php echo esc_html($tool); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Industry Applications -->
        <section class="industry-applications">
            <div class="section-content">
                <?php 
                $industries_title = get_post_meta(get_the_ID(), 'on_page_seo_industries_title', true) ?: 'On-Page SEO for Your Industry';
                $industries = get_post_meta(get_the_ID(), 'on_page_seo_industries', true) ?: array(
                    array(
                        'title' => 'E-commerce',
                        'description' => 'Product page optimization, category structure, and schema markup for enhanced product visibility in search results.'
                    ),
                    array(
                        'title' => 'Professional Services',
                        'description' => 'Service page optimization, local business schema, and content structure to attract high-value clients.'
                    ),
                    array(
                        'title' => 'Healthcare',
                        'description' => 'Medical content optimization, YMYL compliance, and structured data for healthcare providers and services.'
                    ),
                    array(
                        'title' => 'Real Estate',
                        'description' => 'Property listing optimization, local area content, and schema markup for enhanced search visibility.'
                    )
                );
                ?>
                <h2><?php echo esc_html($industries_title); ?></h2>
                <div class="industry-grid">
                    <?php foreach ($industries as $industry): ?>
                        <div class="industry-item">
                            <h3><?php echo esc_html($industry['title']); ?></h3>
                            <p><?php echo esc_html($industry['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- FAQ Section -->
        <section class="seo-faqs">
            <div class="section-content">
                <?php 
                $faqs_title = get_post_meta(get_the_ID(), 'on_page_seo_faqs_title', true) ?: 'Frequently Asked Questions';
                $faqs = get_post_meta(get_the_ID(), 'on_page_seo_faqs', true) ?: array(
                    array(
                        'question' => 'How long does it take to see results from on-page SEO?',
                        'answer' => 'While some improvements can be seen within 2-4 weeks, significant ranking improvements typically occur within 8-12 weeks of implementation. The timeline depends on competition level and current site authority.'
                    ),
                    array(
                        'question' => 'What\'s the difference between on-page and technical SEO?',
                        'answer' => 'On-page SEO focuses on optimizing individual page content and HTML elements, while technical SEO addresses site-wide technical issues like crawlability, site speed, and mobile-friendliness.'
                    ),
                    array(
                        'question' => 'Do you provide ongoing on-page optimization?',
                        'answer' => 'Yes, we offer both one-time optimization services and ongoing monthly optimization as part of our comprehensive SEO packages to maintain and improve performance over time.'
                    ),
                    array(
                        'question' => 'How do you measure on-page SEO success?',
                        'answer' => 'We track keyword rankings, organic traffic growth, click-through rates, time on page, and conversions to measure the effectiveness of our on-page optimizations.'
                    )
                );
                ?>
                <h2><?php echo esc_html($faqs_title); ?></h2>
                <div class="faq-list">
                    <?php foreach ($faqs as $faq): ?>
                        <div class="faq-item">
                            <button class="faq-question"><?php echo esc_html($faq['question']); ?></button>
                            <div class="faq-answer">
                                <p><?php echo esc_html($faq['answer']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Client Testimonial -->
        <section class="client-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <div class="quote-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 21C3 17.4 5.4 17.4 5.4 17.4H9V21H3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15 21C15 17.4 17.4 17.4 17.4 17.4H21V21H15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.5 9C7.5 5.4 9.9 3 13.5 3S19.5 5.4 19.5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <?php 
                    $testimonial_quote = get_post_meta(get_the_ID(), 'on_page_seo_testimonial_quote', true) ?: 'The on-page optimization work AIM Pro Marketing did for our website was incredible. Within 3 months, we saw our main service pages ranking on the first page of Google. The attention to detail in optimizing every element was impressive.';
                    $testimonial_author_name = get_post_meta(get_the_ID(), 'on_page_seo_testimonial_author_name', true) ?: 'Sarah Mitchell';
                    $testimonial_author_title = get_post_meta(get_the_ID(), 'on_page_seo_testimonial_author_title', true) ?: 'Marketing Director, Professional Services Ltd';
                    ?>
                    <blockquote>
                        <?php echo esc_html($testimonial_quote); ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <strong><?php echo esc_html($testimonial_author_name); ?></strong>
                        <span><?php echo esc_html($testimonial_author_title); ?></span>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="simple-cta-section">
            <div class="section-content">
                <div class="simple-cta-content">
                    <?php 
                    $cta_title = get_post_meta(get_the_ID(), 'on_page_seo_cta_title', true) ?: 'Ready to Optimize Your Website Pages?';
                    $cta_description = get_post_meta(get_the_ID(), 'on_page_seo_cta_description', true) ?: 'Get a comprehensive on-page SEO audit and strategy session. We\'ll identify optimization opportunities and show you how to improve your search rankings.';
                    $cta_primary_text = get_post_meta(get_the_ID(), 'on_page_seo_cta_primary_text', true) ?: 'Get Free SEO Audit';
                    $cta_primary_url = get_post_meta(get_the_ID(), 'on_page_seo_cta_primary_url', true) ?: home_url('/contact');
                    $cta_secondary_text = get_post_meta(get_the_ID(), 'on_page_seo_cta_secondary_text', true) ?: 'View All SEO Services';
                    $cta_secondary_url = get_post_meta(get_the_ID(), 'on_page_seo_cta_secondary_url', true) ?: home_url('/seo-services');
                    $cta_features = get_post_meta(get_the_ID(), 'on_page_seo_cta_features', true) ?: array(
                        'Free 30-minute consultation',
                        'Detailed optimization recommendations',
                        'No obligation quote'
                    );
                    ?>
                    <h2><?php echo esc_html($cta_title); ?></h2>
                    <p><?php echo esc_html($cta_description); ?></p>
                    <div class="simple-cta-buttons">
                        <a href="<?php echo esc_url($cta_primary_url); ?>" class="btn btn-primary"><?php echo esc_html($cta_primary_text); ?></a>
                        <a href="<?php echo esc_url($cta_secondary_url); ?>" class="btn btn-secondary"><?php echo esc_html($cta_secondary_text); ?></a>
                    </div>
                    <div class="simple-cta-features">
                        <?php foreach ($cta_features as $feature): ?>
                            <span><?php echo esc_html($feature); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
