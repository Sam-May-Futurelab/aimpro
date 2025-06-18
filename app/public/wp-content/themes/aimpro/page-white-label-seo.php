<?php
/**
 * Template Name: White Label SEO Services
 * Description: White label SEO services for agencies
 */

get_header(); ?>

<main id="main" class="main-content seo-service-page">
    <div class="container">        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_header_title', true) ?: 'White Label SEO Services'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_header_subtitle', true) ?: 'Scale your agency with our comprehensive white label SEO solutions'); ?></p>
                <div class="header-badges">
                    <?php 
                    $badges = get_post_meta(get_the_ID(), 'white_label_seo_header_badges', true) ?: ['Agency Partners', 'Your Branding', 'Full Transparency'];
                    foreach ($badges as $badge): ?>
                        <span class="badge"><?php echo esc_html($badge); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Service Overview -->
        <section class="service-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_overview_title', true) ?: 'Professional SEO Services Under Your Brand'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_overview_description_1', true) ?: 'Our white label SEO services allow agencies, consultants, and business owners to offer comprehensive SEO solutions to their clients without the overhead of building an in-house team. We work behind the scenes, delivering exceptional results while you maintain the client relationship.'); ?></p>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_overview_description_2', true) ?: 'From technical audits to content optimization and link building, our team becomes an extension of your agency, delivering consistent, high-quality SEO services that help you scale your business and increase profitability.'); ?></p>
                    </div>
                    <div class="overview-stats animate-on-scroll animate-slide-right">
                        <?php 
                        $stats = get_post_meta(get_the_ID(), 'white_label_seo_stats', true) ?: [
                            ['number' => '150+', 'label' => 'Agency partners'],
                            ['number' => '95%', 'label' => 'Partner retention rate'],
                            ['number' => '48hr', 'label' => 'Average response time']
                        ];
                        foreach ($stats as $stat): ?>
                            <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                                <span class="stat-number"><?php echo esc_html($stat['number']); ?></span>
                                <span class="stat-label"><?php echo esc_html($stat['label']); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Why Choose White Label -->
        <section class="whitelabel-benefits">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_benefits_title', true) ?: 'Why Choose White Label SEO?'); ?></h2>
                <div class="benefits-grid benefits-grid-4">
                    <?php 
                    $benefits = get_post_meta(get_the_ID(), 'white_label_seo_benefits', true) ?: [
                        ['icon' => 'fas fa-rocket', 'title' => 'Scale Rapidly', 'description' => 'Expand your service offerings and take on more clients without hiring additional staff or investing in expensive SEO tools.'],
                        ['icon' => 'fas fa-user-graduate', 'title' => 'Expert Delivery', 'description' => 'Leverage our team of certified SEO specialists and access to premium tools without the overhead costs.'],
                        ['icon' => 'fas fa-chart-line', 'title' => 'Higher Margins', 'description' => 'Increase your profit margins by offering SEO services at competitive rates while reducing operational costs.'],
                        ['icon' => 'fas fa-palette', 'title' => 'Your Brand', 'description' => 'All deliverables are fully branded with your company\'s logo, colors, and messaging. Your clients never know we exist.']
                    ];
                    foreach ($benefits as $benefit): ?>
                        <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="benefit-icon">
                                <i class="<?php echo esc_attr($benefit['icon']); ?>"></i>
                            </div>
                            <h3><?php echo esc_html($benefit['title']); ?></h3>
                            <p><?php echo esc_html($benefit['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Services Grid -->
        <section class="seo-services-grid">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_services_title', true) ?: 'White Label SEO Services We Provide'); ?></h2>
                <div class="services-grid">
                    <?php 
                    $services = get_post_meta(get_the_ID(), 'white_label_seo_services', true) ?: [
                        [
                            'title' => 'SEO Audits & Analysis',
                            'description' => 'Comprehensive website audits with detailed reports, recommendations, and action plans - all under your branding.',
                            'features' => ['Technical SEO audits', 'Content gap analysis', 'Competitor research', 'Keyword opportunity mapping']
                        ],
                        [
                            'title' => 'On-Page Optimization',
                            'description' => 'Complete on-page SEO optimization including content, meta tags, and technical elements for improved rankings.',
                            'features' => ['Title tag & meta optimization', 'Content optimization', 'Schema markup implementation', 'Internal linking strategy']
                        ],
                        [
                            'title' => 'Local SEO Services',
                            'description' => 'Comprehensive local SEO optimization to help your clients dominate local search results and attract nearby customers.',
                            'features' => ['Google Business Profile optimization', 'Local citation building', 'Review management setup', 'Local content creation']
                        ],
                        [
                            'title' => 'Technical SEO',
                            'description' => 'Advanced technical optimization to improve site performance, crawlability, and search engine understanding.',
                            'features' => ['Site speed optimization', 'Core Web Vitals improvement', 'Mobile optimization', 'Crawl error resolution']
                        ],
                        [
                            'title' => 'Link Building',
                            'description' => 'High-quality, white-hat link building campaigns to improve domain authority and search rankings.',
                            'features' => ['Guest posting campaigns', 'Business directory submissions', 'Resource page link building', 'Digital PR outreach']
                        ],
                        [
                            'title' => 'Monthly Reporting',
                            'description' => 'Comprehensive monthly reports with your branding, showing progress, insights, and recommendations.',
                            'features' => ['Ranking tracking reports', 'Traffic & conversion analysis', 'Competitive intelligence', 'Custom branded dashboards']
                        ]
                    ];
                    foreach ($services as $service): ?>
                        <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="service-content">
                                <h3><?php echo esc_html($service['title']); ?></h3>
                                <p><?php echo esc_html($service['description']); ?></p>
                                <ul class="service-features-list">
                                    <?php foreach ($service['features'] as $feature): ?>
                                        <li><?php echo esc_html($feature); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Pricing Packages -->
        <section class="pricing-section">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_packages_title', true) ?: 'White Label SEO Packages'); ?></h2>
                <div class="pricing-grid">
                    <?php 
                    $packages = get_post_meta(get_the_ID(), 'white_label_seo_packages', true) ?: [
                        [
                            'name' => 'Starter Package',
                            'price' => '£497',
                            'period' => 'per month',
                            'featured' => false,
                            'badge' => '',
                            'features' => [
                                'Up to 5 target keywords',
                                'Monthly SEO audit',
                                'On-page optimization',
                                'Basic link building (5 links/month)',
                                'Monthly branded report',
                                'Google Business Profile optimization',
                                'Technical SEO monitoring'
                            ]
                        ],
                        [
                            'name' => 'Professional Package',
                            'price' => '£997',
                            'period' => 'per month',
                            'featured' => true,
                            'badge' => 'Most Popular',
                            'features' => [
                                'Up to 15 target keywords',
                                'Bi-weekly SEO audits',
                                'Advanced on-page optimization',
                                'Premium link building (15 links/month)',
                                'Weekly branded reports',
                                'Local SEO optimization',
                                'Content optimization',
                                'Competitor analysis',
                                'Priority support'
                            ]
                        ],
                        [
                            'name' => 'Enterprise Package',
                            'price' => '£1,997',
                            'period' => 'per month',
                            'featured' => false,
                            'badge' => '',
                            'features' => [
                                'Unlimited keywords',
                                'Weekly SEO audits',
                                'Complete on-page optimization',
                                'Premium link building (30+ links/month)',
                                'Custom reporting schedule',
                                'Multi-location SEO',
                                'Content creation included',
                                'Advanced technical SEO',
                                'Dedicated account manager',
                                'White-glove support'
                            ]
                        ]
                    ];
                    foreach ($packages as $package): ?>
                        <div class="pricing-card<?php echo $package['featured'] ? ' featured' : ''; ?> animate-on-scroll animate-stagger animate-fade-up">
                            <?php if ($package['badge']): ?>
                                <span class="popular-badge"><?php echo esc_html($package['badge']); ?></span>
                            <?php endif; ?>
                            <div class="pricing-header">
                                <h3><?php echo esc_html($package['name']); ?></h3>
                                <div class="price"><?php echo esc_html($package['price']); ?><span><?php echo esc_html($package['period']); ?></span></div>
                            </div>
                            <ul class="pricing-features">
                                <?php foreach ($package['features'] as $feature): ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="<?php echo home_url('/contact'); ?>" class="<?php echo $package['featured'] ? 'btn-primary' : 'btn-outline'; ?>">Get Started</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section><!-- Case Study -->
        <section class="case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_case_study_title', true) ?: 'Partner Success Story'); ?></h2>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_case_study_subtitle', true) ?: 'Digital Agency Scales to £50K Monthly Revenue'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_case_study_description', true) ?: 'A small digital marketing agency approached us looking to add SEO services to their offering without the overhead of hiring specialists. Our white label partnership helped them transform their business.'); ?></p>
                        
                        <div class="challenge-solution">
                            <div class="challenge animate-on-scroll animate-slide-left">
                                <h4>The Challenge</h4>
                                <ul>
                                    <?php 
                                    $challenges = get_post_meta(get_the_ID(), 'white_label_seo_case_study_challenges', true) ?: [
                                        'Clients requesting SEO services they couldn\'t provide',
                                        'Limited budget for hiring SEO specialists',
                                        'Lack of SEO tools and expertise',
                                        'Need to maintain client relationships'
                                    ];
                                    foreach ($challenges as $challenge): ?>
                                        <li><?php echo esc_html($challenge); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="solution animate-on-scroll animate-slide-right">
                                <h4>Our Solution</h4>
                                <ul>
                                    <?php 
                                    $solutions = get_post_meta(get_the_ID(), 'white_label_seo_case_study_solutions', true) ?: [
                                        'Complete white label SEO service integration',
                                        'Branded reports and client communications',
                                        'Monthly strategy calls and support',
                                        'Transparent pricing and processes'
                                    ];
                                    foreach ($solutions as $solution): ?>
                                        <li><?php echo esc_html($solution); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="case-study-metrics animate-on-scroll animate-fade-up">
                        <?php 
                        $metrics = get_post_meta(get_the_ID(), 'white_label_seo_case_study_metrics', true) ?: [
                            ['number' => '£50K', 'label' => 'Monthly SEO Revenue'],
                            ['number' => '35', 'label' => 'New SEO Clients'],
                            ['number' => '85%', 'label' => 'Profit Margin'],
                            ['number' => '18 Months', 'label' => 'Partnership Duration']
                        ];
                        foreach ($metrics as $metric): ?>
                            <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                                <div class="metric-number"><?php echo esc_html($metric['number']); ?></div>
                                <div class="metric-label"><?php echo esc_html($metric['label']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- What's Included -->
        <section class="whitelabel-benefits">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_included_title', true) ?: 'What\'s Included in Every Partnership'); ?></h2>
                <div class="benefits-grid">
                    <?php 
                    $included_items = get_post_meta(get_the_ID(), 'white_label_seo_included_items', true) ?: [
                        ['icon' => 'fas fa-palette', 'title' => 'Full Branding', 'description' => 'All reports, dashboards, and communications use your company branding, colors, and logo.'],
                        ['icon' => 'fas fa-phone', 'title' => 'Direct Communication', 'description' => 'Dedicated account manager and direct access to our SEO team for questions and updates.'],
                        ['icon' => 'fas fa-chart-bar', 'title' => 'Transparent Reporting', 'description' => 'Real-time access to all campaign data, metrics, and progress through branded dashboards.'],
                        ['icon' => 'fas fa-tools', 'title' => 'Premium Tools', 'description' => 'Access to enterprise-level SEO tools and software at no additional cost to you.'],
                        ['icon' => 'fas fa-chart-line', 'title' => 'Growth Support', 'description' => 'Marketing materials, sales support, and training to help you sell SEO services effectively.'],
                        ['icon' => 'fas fa-shield-alt', 'title' => 'Quality Guarantee', 'description' => '100% satisfaction guarantee with full refund if you\'re not completely satisfied with our services.']
                    ];
                    foreach ($included_items as $item): ?>
                        <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="benefit-icon">
                                <i class="<?php echo esc_attr($item['icon']); ?>"></i>
                            </div>
                            <h3><?php echo esc_html($item['title']); ?></h3>
                            <p><?php echo esc_html($item['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;"><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_faq_title', true) ?: 'Frequently Asked Questions'); ?></h2>
                <div class="faq-list">
                    <?php 
                    $faqs = get_post_meta(get_the_ID(), 'white_label_seo_faqs', true) ?: [
                        ['question' => 'Will my clients know you\'re providing the SEO services?', 'answer' => 'No, absolutely not. All communications, reports, and deliverables are fully branded with your company information. We remain completely invisible to your clients.'],
                        ['question' => 'What\'s the minimum commitment for white label services?', 'answer' => 'We require a minimum 6-month commitment to ensure we can deliver meaningful results. This also allows time to build strong processes and see significant improvements.'],
                        ['question' => 'How do you handle client communications?', 'answer' => 'You maintain all client relationships. We provide you with regular updates and reports that you can share with your clients under your branding.'],
                        ['question' => 'Can I customize the services for different clients?', 'answer' => 'Yes, we offer flexible service packages that can be customized based on each client\'s specific needs, budget, and goals.'],
                        ['question' => 'What kind of training and support do you provide?', 'answer' => 'We provide comprehensive onboarding, sales training materials, and ongoing support to help you successfully sell and manage SEO services.'],
                        ['question' => 'How quickly can we get started?', 'answer' => 'After our initial consultation and agreement, we can typically have your white label SEO services up and running within 1-2 weeks.']
                    ];
                    foreach ($faqs as $faq): ?>
                        <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                            <div class="faq-question">
                                <h3><?php echo esc_html($faq['question']); ?></h3>
                            </div>
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
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <?php 
                    $testimonial_image = get_post_meta(get_the_ID(), 'white_label_seo_testimonial_image', true);
                    if ($testimonial_image): ?>
                        <div class="testimonial-image">
                            <img src="<?php echo esc_url($testimonial_image); ?>" alt="Testimonial" />
                        </div>
                    <?php else: ?>
                        <div class="quote-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 21C3 17.4 5.4 17.4 5.4 17.4H9V21H3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 21C15 17.4 17.4 17.4 17.4 17.4H21V21H15Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    <?php endif; ?>
                    <blockquote>
                        <?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_testimonial_quote', true) ?: 'Partnering with AIM Pro Marketing for white label SEO has been a game-changer for our agency. We\'ve added £30K in monthly recurring revenue and our clients are seeing incredible results. The team is professional, transparent, and delivers exactly what they promise.'); ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <strong><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_testimonial_author', true) ?: 'James Richardson'); ?></strong>
                        <span><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_testimonial_position', true) ?: 'Founder, Digital Growth Agency'); ?></span>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="simple-cta-section">
            <div class="section-content">
                <div class="simple-cta-content animate-on-scroll animate-fade-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_cta_title', true) ?: 'Ready to Scale Your Agency with SEO?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_cta_description', true) ?: 'Join over 150 successful agency partners who trust us to deliver exceptional SEO results under their brand. Schedule a consultation to learn how our white label services can help you grow.'); ?></p>
                    <div class="simple-cta-buttons">
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'white_label_seo_cta_button_url', true) ?: home_url('/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'white_label_seo_cta_button_text', true) ?: 'Schedule Partnership Call'); ?></a>
                    </div>
                    <div class="simple-cta-features">
                        <?php 
                        $features = get_post_meta(get_the_ID(), 'white_label_seo_cta_features', true) ?: ['No setup fees', '6-month minimum commitment', '100% satisfaction guarantee'];
                        foreach ($features as $feature): ?>
                            <span><?php echo esc_html($feature); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
