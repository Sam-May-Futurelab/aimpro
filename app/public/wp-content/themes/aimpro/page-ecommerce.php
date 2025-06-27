<?php
/**
 * Template Name: E-commerce Industry Page
 * Description: Digital marketing for e-commerce businesses
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
                <span class="current">E-commerce</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_header_title', true) ?: "E-commerce Digital Marketing"); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_header_subtitle', true) ?: "Drive more traffic, increase conversions, and maximise revenue for your online store"); ?></p>
            </div>
        </section>        <!-- Industry Overview -->
        <section class="industry-overview animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_overview_title', true) ?: "Accelerate Your E-commerce Growth"); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_overview_content', true) ?: "The e-commerce landscape is more competitive than ever. Our specialised e-commerce marketing strategies help online retailers increase traffic, improve conversion rates, and maximise customer lifetime value through data-driven digital marketing."); ?></p>
                        
                        <div class="industry-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_challenges_title', true) ?: "E-commerce Marketing Challenges We Solve:"); ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), '_ecommerce_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'High customer acquisition costs',
                                        'Intense competition from marketplaces',
                                        'Cart abandonment and low conversion rates',
                                        'Seasonal sales fluctuations',
                                        'Customer retention and loyalty',
                                        'Product visibility and discovery'
                                    );
                                }
                                foreach ($challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php
                        $image_url = get_post_meta(get_the_ID(), '_ecommerce_overview_image', true);
                        if (empty($image_url)) {
                            $image_url = get_template_directory_uri() . '/assets/images/industries/ecommerce-overview.jpg';
                        }
                        ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="E-commerce Digital Marketing" />
                    </div>
                </div>
            </div>
        </section>        <!-- E-commerce Services -->
        <section class="ecommerce-services animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Our E-commerce Marketing Services</h2>
                <div class="services-grid animate-on-scroll animate-fade-up">
                    <?php 
                    $services = get_post_meta(get_the_ID(), '_ecommerce_services', true);
                    // Always use our 6-service array instead of potentially incomplete saved data
                    if (empty($services) || count($services) < 6) {
                        $services = array(
                            array(
                                'icon' => 'fab fa-google',
                                'title' => 'Google Shopping & Product Ads',
                                'description' => 'Maximize product visibility with optimised Google Shopping campaigns that drive qualified traffic to your product pages.',
                                'features' => array('Google Shopping optimisation', 'Product feed management', 'Dynamic remarketing campaigns', 'Performance Max campaigns')
                            ),
                            array(
                                'icon' => 'fas fa-search',
                                'title' => 'E-commerce SEO',
                                'description' => 'Improve organic rankings for product and category pages to drive free, qualified traffic to your online store.',
                                'features' => array('Product page optimisation', 'Category page SEO', 'Technical e-commerce SEO', 'Content marketing for products')
                            ),
                            array(
                                'icon' => 'fab fa-facebook',
                                'title' => 'Social Commerce',
                                'description' => 'Sell directly through social media platforms with engaging content and targeted advertising campaigns.',
                                'features' => array('Facebook & Instagram Shopping', 'Social media advertising', 'Influencer partnerships', 'User-generated content campaigns')
                            ),
                            array(
                                'icon' => 'fas fa-envelope',
                                'title' => 'Email Marketing & Automation',
                                'description' => 'Recover abandoned carts, increase customer lifetime value, and drive repeat purchases with strategic email campaigns.',
                                'features' => array('Abandoned cart recovery', 'Post-purchase email sequences', 'Customer segmentation', 'Promotional campaign automation')
                            ),
                            array(
                                'icon' => 'fas fa-chart-line',
                                'title' => 'Conversion Rate Optimization',
                                'description' => 'Maximize revenue from existing traffic by optimizing user experience, checkout process, and product presentation.',
                                'features' => array('A/B testing product pages', 'Checkout optimization', 'Mobile user experience', 'Product recommendation engines')
                            ),
                            array(
                                'icon' => 'fas fa-sync-alt',
                                'title' => 'Customer Retention Marketing',
                                'description' => 'Build long-term customer relationships and increase lifetime value through strategic retention and loyalty programs.',
                                'features' => array('Loyalty program management', 'Customer lifecycle campaigns', 'Win-back automation', 'VIP customer strategies')
                            )
                        );
                    }
                    foreach ($services as $service): ?>
                        <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="service-icon">
                                <i class="<?php echo esc_attr($service['icon']); ?>" style="font-size: 48px;"></i>
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
                <div class="text-center mt-1 animate-on-scroll animate-fade-up">
                    <a href="/contact/" class="btn btn-primary">Boost Your E-commerce Performance</a>
                </div>
            </div>
        </section>        <!-- E-commerce Success Story -->
        <section class="ecommerce-case-study animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <span class="case-study-label">Success Story</span>
                        <h2>Sports Equipment Plus: 320% Revenue Growth</h2>
                        <p>Sports Equipment Plus, an online sports retailer, needed to compete against major e-commerce platforms and increase their market share.</p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3>The Challenge</h3>
                            <ul>
                                <li>High customer acquisition costs</li>
                                <li>Low conversion rates from paid traffic</li>
                                <li>Poor product visibility in search</li>
                                <li>Cart abandonment issues</li>
                            </ul>
                        </div>                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3>Our Solution</h3>
                            <ul>
                                <li>Comprehensive Google Shopping optimisation</li>
                                <li>Product page SEO and conversion optimisation</li>
                                <li>Email marketing automation</li>
                                <li>Social commerce strategy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <h3>Results After 8 Months</h3>                        <div class="results-grid">
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number">320%</div>
                                <div class="result-label">Revenue Growth</div>
                            </div>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number">180%</div>
                                <div class="result-label">Conversion Rate Increase</div>
                            </div>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number">250%</div>
                                <div class="result-label">Organic Traffic Growth</div>
                            </div>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number">45%</div>
                                <div class="result-label">Cart Recovery Rate</div>
                            </div>
                        </div>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="case-study-link">Read Full Case Study</a>
                    </div>
                </div>
            </div>
        </section>        <!-- E-commerce Process -->
        <section class="ecommerce-process animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Our E-commerce Marketing Process</h2>
                <div class="process-steps animate-on-scroll animate-fade-up">
                    
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Store Audit</h3>
                            <p>Comprehensive analysis of your e-commerce platform, user experience, and current marketing performance.</p>
                        </div>
                    </div>                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Conversion optimisation</h3>
                            <p>optimise product pages, checkout process, and user experience to maximise conversion rates.</p>
                        </div>
                    </div>

                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Multi-Channel Strategy</h3>
                            <p>Implement integrated marketing across search, social, email, and marketplace channels.</p>
                        </div>
                    </div>

                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Performance Scaling</h3>
                            <p>Continuously optimise and scale successful campaigns while improving customer lifetime value.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>        <!-- E-commerce Insights -->
        <section class="ecommerce-insights animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">E-commerce Industry Insights</h2>
                <div class="results-grid animate-on-scroll animate-fade-up">
                    
                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">70%</div>
                        <div class="result-label">Cart Abandonment</div>
                        <p>70% of online shopping carts are abandoned before purchase</p>
                    </div>                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">86%</div>
                        <div class="result-label">Product Research</div>
                        <p>86% of consumers research products online before buying</p>
                    </div>

                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">73%</div>
                        <div class="result-label">Mobile Shopping</div>
                        <p>73% of e-commerce traffic comes from mobile devices</p>
                    </div>

                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">92%</div>
                        <div class="result-label">Visual Influence</div>
                        <p>92% of consumers make purchasing decisions based on visual content</p>
                    </div>
                </div>
            </div>
        </section>        <!-- E-commerce Testimonial -->
        <section class="ecommerce-testimonial animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-slide-up">
                    <blockquote>
                        <?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_testimonial_quote', true) ?: "Aimpro Digital transformed our e-commerce business. Their comprehensive approach to Google Shopping, SEO, and email marketing increased our revenue by 320%. The team's expertise in e-commerce marketing is outstanding."); ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_testimonial_name', true) ?: "James Wilson"); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_testimonial_position', true) ?: "Marketing Director, Sports Equipment Plus"); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_testimonial_company', true) ?: "Online sports equipment retailer"); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="ecommerce-cta text-center animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_cta_title', true) ?: "Ready to Scale Your E-commerce Business?"); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_cta_subtitle', true) ?: "Let's discuss how our e-commerce marketing expertise can drive more traffic, conversions, and revenue for your online store."); ?></p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_ecommerce_cta_primary_url', true) ?: home_url('/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_cta_primary_text', true) ?: "Get Free E-commerce Audit"); ?></a>
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_ecommerce_cta_secondary_url', true) ?: home_url('/case-studies')); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_cta_secondary_text', true) ?: "View E-commerce Success Stories"); ?></a>
                </div>
                <div class="cta-benefits animate-on-scroll animate-fade-up">
                    <?php 
                    $benefits = get_post_meta(get_the_ID(), '_ecommerce_cta_benefits', true);
                    if (empty($benefits)) {
                        $benefits = array(
                            '✓ Conversion rate optimisation',
                            '✓ Multi-channel strategies',
                            '✓ ROI-focused campaigns'
                        );
                    }
                    foreach ($benefits as $benefit) {
                        echo '<span class="benefit">' . esc_html($benefit) . '</span>';
                    }
                    ?>
                </div>
            </div>
        </section>    </div>
</main>

<style>
/* Mobile optimizations for ecommerce results sections */
@media (max-width: 768px) {
    /* Case Study Results Grid - Mobile Layout */
    .case-study-results .results-grid,
    .ecommerce-insights .results-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-top: 1.5rem;
    }
    
    .case-study-results .result-item,
    .ecommerce-insights .result-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem 1rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .case-study-results .result-number,
    .ecommerce-insights .result-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #007bff;
        line-height: 1;
        margin-bottom: 0.5rem;
    }
    
    .case-study-results .result-label,
    .ecommerce-insights .result-label {
        font-size: 0.9rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
    }
    
    .ecommerce-insights .result-item p {
        font-size: 0.85rem;
        color: #6c757d;
        margin: 0;
        line-height: 1.4;
    }
    
    /* Case Study Link Button */
    .case-study-link {
        display: inline-block;
        width: 100%;
        padding: 0.875rem 1.5rem;
        background: #007bff;
        color: white !important;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        text-align: center;
        margin-top: 1.5rem;
        font-size: 0.9rem;
        transition: background-color 0.3s ease;
    }
    
    .case-study-link:hover {
        background: #0056b3;
        color: white !important;
    }
    
    /* Service Cards Grid - Ensure mobile stacking */
    .services-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .service-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
    }
    
    .service-icon {
        margin-bottom: 1rem;
    }
    
    .service-icon i {
        font-size: 2.5rem !important;
        color: #007bff;
    }
    
    .service-card h3 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        color: #212529;
    }
    
    .service-card p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    
    .service-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .service-features li {
        font-size: 0.85rem;
        color: #495057;
        padding: 0.25rem 0;
        border-bottom: 1px solid #e9ecef;
    }
    
    .service-features li:last-child {
        border-bottom: none;
    }
    
    /* CTA Section Mobile */
    .ecommerce-cta .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin: 1.5rem 0;
    }
    
    .ecommerce-cta .btn {
        width: 100%;
        padding: 0.875rem 1.5rem;
        text-align: center;
        font-weight: 600;
        border-radius: 6px;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .ecommerce-cta .btn-primary {
        background: #007bff;
        color: white !important;
        border: 2px solid #007bff;
    }
    
    .ecommerce-cta .btn-primary:hover {
        background: #0056b3;
        border-color: #0056b3;
    }
    
    .ecommerce-cta .btn-secondary {
        background: transparent;
        color: #007bff !important;
        border: 2px solid #007bff;
    }
    
    .ecommerce-cta .btn-secondary:hover {
        background: #007bff;
        color: white !important;
    }
    
    .cta-benefits {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        justify-content: center;
        margin-top: 1rem;
    }
    
    .cta-benefits .benefit {
        background: #e9ecef;
        color: #495057;
        padding: 0.375rem 0.75rem;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 500;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* Tablet Layout - 2x2 grid */
    .case-study-results .results-grid,
    .ecommerce-insights .results-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .case-study-results .result-item,
    .ecommerce-insights .result-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
}

/* Reduce white space above E-commerce Marketing Process section */
.ecommerce-process {
    margin-top: 1rem !important; /* Further reduced from 3rem to 1rem */
    padding-top: 1rem !important; /* Further reduced from 2rem to 1rem */
}

/* Reduce padding around the case study results section */
.ecommerce-case-study {
    padding: 3rem 0 1rem 0 !important; /* Reduced bottom padding to bring next section closer */
    margin: 2rem 0 0.5rem 0 !important; /* Reduced bottom margin */
}

.ecommerce-case-study .section-content {
    padding: 2rem 1rem !important; /* Reduced internal padding */
}

.case-study-results {
    padding: 1.5rem !important; /* Reduced padding around results */
    margin: 1rem 0 !important; /* Reduced margin */
}
</style>

<?php get_footer(); ?>

