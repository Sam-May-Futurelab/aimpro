<?php
/**
 * Template Name: Testimonials Page
 * Description: Client testimonials and success stories
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonials_header_title', true) ?: 'Client Testimonials'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonials_header_subtitle', true) ?: 'See what our clients have to say about working with Aimpro Digital'); ?></p>
            </div>
        </section>        <!-- Featured Testimonials -->
        <section class="featured-testimonials">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonials_featured_heading', true) ?: 'Success Stories'); ?></h2>
                <div class="testimonials-grid">
                    <?php for ($i = 1; $i <= 2; $i++): 
                        $quote = get_post_meta(get_the_ID(), "testimonial{$i}_quote", true);
                        $author = get_post_meta(get_the_ID(), "testimonial{$i}_author", true);
                        $title = get_post_meta(get_the_ID(), "testimonial{$i}_title", true);
                        $company = get_post_meta(get_the_ID(), "testimonial{$i}_company", true);
                        $industry = get_post_meta(get_the_ID(), "testimonial{$i}_industry", true);
                        $result1 = get_post_meta(get_the_ID(), "testimonial{$i}_result1", true);
                        $result1_label = get_post_meta(get_the_ID(), "testimonial{$i}_result1_label", true);
                        $result2 = get_post_meta(get_the_ID(), "testimonial{$i}_result2", true);
                        $result2_label = get_post_meta(get_the_ID(), "testimonial{$i}_result2_label", true);
                        $result3 = get_post_meta(get_the_ID(), "testimonial{$i}_result3", true);
                        $result3_label = get_post_meta(get_the_ID(), "testimonial{$i}_result3_label", true);
                        
                        // Defaults
                        if ($i == 1 && !$quote) {
                            $quote = 'Aimpro Digital transformed our online presence completely. Within 6 months, our website traffic increased by 300% and our lead generation improved by 250%. Their team\'s expertise in SEO and PPC advertising delivered results beyond our expectations.';
                            $author = 'Sarah Williams';
                            $title = 'CEO, TechStart Solutions';
                            $company = 'TechStart Solutions';
                            $industry = 'Technology Consulting';
                            $result1 = '300%'; $result1_label = 'Traffic Increase';
                            $result2 = '250%'; $result2_label = 'More Leads';
                            $result3 = '6'; $result3_label = 'Months to Results';
                        } elseif ($i == 2 && !$quote) {
                            $quote = 'Working with Aimpro Digital has been a game-changer for our e-commerce business. Their strategic approach to Google Ads and Facebook advertising helped us achieve a 400% return on ad spend. The team is professional, responsive, and truly understands our industry.';
                            $author = 'Michael Chen';
                            $title = 'Founder, Elite Fitness Gear';
                            $company = 'Elite Fitness Gear';
                            $industry = 'E-commerce';
                            $result1 = '400%'; $result1_label = 'ROAS';
                            $result2 = '180%'; $result2_label = 'Sales Growth';
                            $result3 = '90'; $result3_label = 'Days to ROI';
                        }
                    ?>
                    <div class="testimonial-card featured animate-on-scroll animate-stagger animate-slide-left">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" fill="currentColor"/>
                                </svg>
                            </div>
                            <blockquote><?php echo esc_html($quote); ?></blockquote>
                            <div class="testimonial-author">
                                <div class="author-info">
                                    <h4><?php echo esc_html($author); ?></h4>
                                    <p><?php echo esc_html($title); ?></p>
                                    <div class="company-info">
                                        <span><?php echo esc_html($industry); ?></span>
                                        <span><?php echo esc_html($company); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="results-summary">
                                <div class="result-item">
                                    <span class="result-number"><?php echo esc_html($result1); ?></span>
                                    <span class="result-label"><?php echo esc_html($result1_label); ?></span>
                                </div>
                                <div class="result-item">
                                    <span class="result-number"><?php echo esc_html($result2); ?></span>
                                    <span class="result-label"><?php echo esc_html($result2_label); ?></span>
                                </div>
                                <div class="result-item">
                                    <span class="result-number"><?php echo esc_html($result3); ?></span>
                                    <span class="result-label"><?php echo esc_html($result3_label); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>        <!-- Industry Testimonials -->
        <section class="industry-testimonials">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonials_industry_heading', true) ?: 'Testimonials by Industry'); ?></h2>
                
                <?php for ($ind = 1; $ind <= 4; $ind++): 
                    $industry_title = get_post_meta(get_the_ID(), "industry{$ind}_title", true);
                    
                    // Default industry titles
                    if (!$industry_title) {
                        $default_titles = array(
                            1 => 'Technology & SaaS',
                            2 => 'Healthcare & Medical', 
                            3 => 'Retail & E-commerce',
                            4 => 'Professional Services'
                        );
                        $industry_title = $default_titles[$ind];
                    }
                ?>                <!-- Industry <?php echo $ind; ?> -->
                <div class="industry-group animate-on-scroll animate-fade-up">
                    <h3><?php echo esc_html($industry_title); ?></h3>
                    <div class="testimonials-row">
                        <?php for ($t = 1; $t <= 2; $t++): 
                            $quote = get_post_meta(get_the_ID(), "industry{$ind}_testimonial{$t}_quote", true);
                            $author = get_post_meta(get_the_ID(), "industry{$ind}_testimonial{$t}_author", true);
                            $title = get_post_meta(get_the_ID(), "industry{$ind}_testimonial{$t}_title", true);
                            
                            // Default values if not set
                            if (!$quote) {
                                $defaults = array(
                                    '1_1' => array('quote' => 'Aimpro Digital\'s content marketing strategy helped us establish thought leadership in our space. Our blog traffic increased by 500% and we\'re now recognized as industry experts.', 'author' => 'Jennifer Martinez', 'title' => 'CMO, CloudSync Pro'),
                                    '1_2' => array('quote' => 'Their technical SEO expertise was exactly what we needed. Our SaaS platform now ranks #1 for our primary keywords, resulting in 40% of our new customers coming from organic search.', 'author' => 'David Kim', 'title' => 'CEO, DataFlow Analytics'),
                                    '2_1' => array('quote' => 'Our medical practice saw a 200% increase in new patient appointments after implementing Aimpro Digital\'s local SEO strategy. Their understanding of healthcare marketing compliance is exceptional.', 'author' => 'Dr. Amanda Foster', 'title' => 'Medical Director, Foster Family Medicine'),
                                    '2_2' => array('quote' => 'The team helped us navigate complex healthcare advertising regulations while still achieving outstanding results. Our patient acquisition cost decreased by 60%.', 'author' => 'Robert Taylor', 'title' => 'Administrator, Wellness Center Group'),
                                    '3_1' => array('quote' => 'Our online sales tripled within the first year of working with Aimpro Digital. Their e-commerce expertise and data-driven approach made all the difference.', 'author' => 'Lisa Thompson', 'title' => 'Owner, Artisan Home Decor'),
                                    '3_2' => array('quote' => 'The shopping campaign optimization they implemented for our Google Ads resulted in a 250% increase in qualified traffic and 180% boost in conversions.', 'author' => 'James Wilson', 'title' => 'Marketing Director, Sports Equipment Plus'),
                                    '4_1' => array('quote' => 'As a law firm, we needed a marketing partner who understood our industry\'s unique challenges. Aimpro Digital delivered targeted strategies that increased our qualified leads by 300%.', 'author' => 'Patricia Rodriguez', 'title' => 'Managing Partner, Rodriguez & Associates'),
                                    '4_2' => array('quote' => 'Their LinkedIn advertising strategy for our B2B consulting firm generated high-quality leads that converted at 3x our previous rate. Exceptional work and great communication.', 'author' => 'Mark Anderson', 'title' => 'Principal, Strategic Business Solutions')
                                );
                                
                                $key = "{$ind}_{$t}";
                                if (isset($defaults[$key])) {
                                    $quote = $defaults[$key]['quote'];
                                    $author = $defaults[$key]['author'];
                                    $title = $defaults[$key]['title'];
                                }
                            }
                        ?>
                        <div class="testimonial-card animate-on-scroll animate-stagger animate-fade-up">
                            <blockquote>
                                "<?php echo esc_html($quote); ?>"
                            </blockquote>
                            <div class="testimonial-author">
                                <h4><?php echo esc_html($author); ?></h4>
                                <p><?php echo esc_html($title); ?></p>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </section>        <!-- Metrics & Results -->
        <section class="testimonial-metrics">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonials_metrics_heading', true) ?: 'Client Results by the Numbers'); ?></h2>
                <div class="metrics-grid">
                    <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                        <span class="metric-number">500+</span>
                        <span class="metric-label">Happy Clients</span>
                        <p>Businesses we've helped grow</p>
                    </div>                    <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                        <span class="metric-number">99%</span>
                        <span class="metric-label">Client Retention</span>
                        <p>Long-term partnerships</p>
                    </div>
                    <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                        <span class="metric-number">250%</span>
                        <span class="metric-label">Average ROI</span>
                        <p>Return on marketing investment</p>
                    </div>
                    <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                        <span class="metric-number">$50M+</span>
                        <span class="metric-label">Revenue Generated</span>
                        <p>For our clients collectively</p>                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="testimonials-cta">
            <div class="section-content">
                <div class="animate-on-scroll animate-scale-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonials_cta_heading', true) ?: 'Ready to Join Our Success Stories?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonials_cta_text', true) ?: 'Let\'s discuss how we can help your business achieve similar results'); ?></p>
                    <div class="cta-buttons">
                        <a href="<?php echo home_url(get_post_meta(get_the_ID(), 'testimonials_cta_button1_url', true) ?: '/contact'); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonials_cta_button1_text', true) ?: 'Start Your Success Story'); ?></a>
                        <a href="<?php echo home_url(get_post_meta(get_the_ID(), 'testimonials_cta_button2_url', true) ?: '/case-studies'); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), 'testimonials_cta_button2_text', true) ?: 'View Case Studies'); ?></a>
                    </div>
                </div>
            </div>
        </section></div>
</main>

<?php get_footer(); ?>
