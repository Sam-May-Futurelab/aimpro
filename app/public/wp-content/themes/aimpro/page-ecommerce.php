<?php
/**
 * Template Name: E-commerce Industry Page
 * Description: Digital marketing for e-commerce businesses
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_header_title', true) ?: "E-commerce Digital Marketing"); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_header_subtitle', true) ?: "Drive more traffic, increase conversions, and maximize revenue for your online store"); ?></p>
            </div>
        </section>

        <!-- Industry Overview -->
        <section class="industry-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_overview_title', true) ?: "Accelerate Your E-commerce Growth"); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_overview_content', true) ?: "The e-commerce landscape is more competitive than ever. Our specialized e-commerce marketing strategies help online retailers increase traffic, improve conversion rates, and maximize customer lifetime value through data-driven digital marketing."); ?></p>
                        
                        <div class="industry-challenges">
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
                    <div class="overview-image">
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
        </section>

        <!-- E-commerce Services -->
        <section class="ecommerce-services">
            <div class="section-content">
                <h2>Our E-commerce Marketing Services</h2>
                <div class="services-grid">
                    
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="9" cy="21" r="1" stroke="currentColor" stroke-width="2"/>
                                <circle cx="20" cy="21" r="1" stroke="currentColor" stroke-width="2"/>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Google Shopping & Product Ads</h3>
                            <p>Maximize product visibility with optimized Google Shopping campaigns that drive qualified traffic to your product pages.</p>
                            <ul class="service-features">
                                <li>Google Shopping optimization</li>
                                <li>Product feed management</li>
                                <li>Dynamic remarketing campaigns</li>
                                <li>Performance Max campaigns</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 21L16.514 16.506M19 10.5C19 15.194 15.194 19 10.5 19C5.806 19 2 15.194 2 10.5C2 5.806 5.806 2 10.5 2C15.194 2 19 5.806 19 10.5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>E-commerce SEO</h3>
                            <p>Improve organic rankings for product and category pages to drive free, qualified traffic to your online store.</p>
                            <ul class="service-features">
                                <li>Product page optimization</li>
                                <li>Category page SEO</li>
                                <li>Technical e-commerce SEO</li>
                                <li>Content marketing for products</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 20V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 20V4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 20V14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Social Commerce</h3>
                            <p>Sell directly through social media platforms with engaging content and targeted advertising campaigns.</p>
                            <ul class="service-features">
                                <li>Facebook & Instagram Shopping</li>
                                <li>Social media advertising</li>
                                <li>Influencer partnerships</li>
                                <li>User-generated content campaigns</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2"/>
                                <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3>Email Marketing & Automation</h3>
                            <p>Recover abandoned carts, increase customer lifetime value, and drive repeat purchases with strategic email campaigns.</p>
                            <ul class="service-features">
                                <li>Abandoned cart recovery</li>
                                <li>Post-purchase email sequences</li>
                                <li>Customer segmentation</li>
                                <li>Promotional campaign automation</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- E-commerce Success Story -->
        <section class="ecommerce-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <span class="case-study-label">Success Story</span>
                        <h2>Sports Equipment Plus: 320% Revenue Growth</h2>
                        <p>Sports Equipment Plus, an online sports retailer, needed to compete against major e-commerce platforms and increase their market share.</p>
                        
                        <div class="case-study-challenge">
                            <h3>The Challenge</h3>
                            <ul>
                                <li>High customer acquisition costs</li>
                                <li>Low conversion rates from paid traffic</li>
                                <li>Poor product visibility in search</li>
                                <li>Cart abandonment issues</li>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3>Our Solution</h3>
                            <ul>
                                <li>Comprehensive Google Shopping optimization</li>
                                <li>Product page SEO and conversion optimization</li>
                                <li>Email marketing automation</li>
                                <li>Social commerce strategy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
                        <h3>Results After 8 Months</h3>
                        <div class="results-grid">
                            <div class="result-item">
                                <div class="result-number">320%</div>
                                <div class="result-label">Revenue Growth</div>
                            </div>
                            <div class="result-item">
                                <div class="result-number">180%</div>
                                <div class="result-label">Conversion Rate Increase</div>
                            </div>
                            <div class="result-item">
                                <div class="result-number">250%</div>
                                <div class="result-label">Organic Traffic Growth</div>
                            </div>
                            <div class="result-item">
                                <div class="result-number">45%</div>
                                <div class="result-label">Cart Recovery Rate</div>
                            </div>
                        </div>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="case-study-link">Read Full Case Study</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- E-commerce Process -->
        <section class="ecommerce-process">
            <div class="section-content">
                <h2>Our E-commerce Marketing Process</h2>
                <div class="process-steps">
                    
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Store Audit</h3>
                            <p>Comprehensive analysis of your e-commerce platform, user experience, and current marketing performance.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Conversion Optimization</h3>
                            <p>Optimize product pages, checkout process, and user experience to maximize conversion rates.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Multi-Channel Strategy</h3>
                            <p>Implement integrated marketing across search, social, email, and marketplace channels.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Performance Scaling</h3>
                            <p>Continuously optimize and scale successful campaigns while improving customer lifetime value.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- E-commerce Insights -->
        <section class="ecommerce-insights">
            <div class="section-content">
                <h2>E-commerce Industry Insights</h2>
                <div class="insights-grid">
                    
                    <div class="insight-card">
                        <div class="insight-stat">70%</div>
                        <div class="insight-text">
                            <h3>Cart Abandonment</h3>
                            <p>70% of online shopping carts are abandoned before purchase</p>
                        </div>
                    </div>

                    <div class="insight-card">
                        <div class="insight-stat">86%</div>
                        <div class="insight-text">
                            <h3>Product Research</h3>
                            <p>86% of consumers research products online before buying</p>
                        </div>
                    </div>

                    <div class="insight-card">
                        <div class="insight-stat">73%</div>
                        <div class="insight-text">
                            <h3>Mobile Shopping</h3>
                            <p>73% of e-commerce traffic comes from mobile devices</p>
                        </div>
                    </div>

                    <div class="insight-card">
                        <div class="insight-stat">92%</div>
                        <div class="insight-text">
                            <h3>Visual Influence</h3>
                            <p>92% of consumers make purchasing decisions based on visual content</p>
                        </div>
                    </div>                </div>
            </div>
        </section>        <!-- E-commerce Testimonial -->
        <section class="ecommerce-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
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
        <section class="ecommerce-cta text-center">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_cta_title', true) ?: "Ready to Scale Your E-commerce Business?"); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_cta_subtitle', true) ?: "Let's discuss how our e-commerce marketing expertise can drive more traffic, conversions, and revenue for your online store."); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_ecommerce_cta_primary_url', true) ?: home_url('/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_cta_primary_text', true) ?: "Get Free E-commerce Audit"); ?></a>
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_ecommerce_cta_secondary_url', true) ?: home_url('/case-studies')); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_ecommerce_cta_secondary_text', true) ?: "View E-commerce Success Stories"); ?></a>
                </div>
                <div class="cta-benefits">
                    <?php 
                    $benefits = get_post_meta(get_the_ID(), '_ecommerce_cta_benefits', true);
                    if (empty($benefits)) {
                        $benefits = array(
                            '✓ Conversion rate optimization',
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
        </section>

    </div>
</main>

<?php get_footer(); ?>
