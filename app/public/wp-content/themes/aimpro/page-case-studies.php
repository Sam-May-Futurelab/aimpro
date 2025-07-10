<?php
/**
 * Template Name: Case Studies Page
 * Description: Client success stories and case studies
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/resources'); ?>">Resources</a>
                <span class="separator">›</span>
                <span class="current">Case Studies</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_header_title', true) ?: 'Case Studies'); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_header_subtitle', true) ?: 'Real results from real clients across diverse industries'); ?></p>
            </div>
        </section>        <!-- Case Studies Introduction -->
        <section class="case-studies-intro">
            <div class="section-content">
                <div class="intro-content animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_intro_title', true) ?: 'Proven Success Stories'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_intro_description', true) ?: 'Discover how we\'ve helped businesses like yours achieve remarkable growth through strategic digital marketing. Each case study showcases real challenges, innovative solutions, and measurable results that demonstrate our commitment to client success.'); ?></p>
                </div>
                <div class="results-overview animate-on-scroll animate-stagger animate-scale-up">
                    <div class="result-stat">
                        <div class="stat-number"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_stat1_number', true) ?: '250%'); ?></div>
                        <div class="stat-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_stat1_label', true) ?: 'Average ROI Increase'); ?></div>
                    </div>
                    <div class="result-stat">
                        <div class="stat-number"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_stat2_number', true) ?: '150+'); ?></div>
                        <div class="stat-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_stat2_label', true) ?: 'Successful Projects'); ?></div>
                    </div>
                    <div class="result-stat">
                        <div class="stat-number"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_stat3_number', true) ?: '£2.5M+'); ?></div>
                        <div class="stat-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_stat3_label', true) ?: 'Revenue Generated'); ?></div>
                    </div>
                </div>
            </div>
        </section>        <!-- Featured Case Study -->
        <section class="featured-case-study">
            <div class="section-content">
                <div class="featured-study animate-on-scroll animate-slide-left">
                    <div class="study-content">
                        <span class="study-category"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_category', true) ?: 'E-commerce'); ?></span>
                        <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_title', true) ?: 'TechGear UK: 400% Revenue Growth in 12 Months'); ?></h2>
                        <p class="study-summary"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_summary', true) ?: 'How we transformed a struggling online electronics retailer into a market leader through comprehensive SEO and PPC strategies.'); ?></p>
                        
                        <div class="study-highlights">
                            <div class="highlight-item">
                                <div class="highlight-number"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_highlight1_number', true) ?: '400%'); ?></div>
                                <div class="highlight-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_highlight1_label', true) ?: 'Revenue Increase'); ?></div>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-number"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_highlight2_number', true) ?: '350%'); ?></div>
                                <div class="highlight-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_highlight2_label', true) ?: 'Organic Traffic Growth'); ?></div>
                            </div>
                            <div class="highlight-item">
                                <div class="highlight-number"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_highlight3_number', true) ?: '180%'); ?></div>
                                <div class="highlight-label"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_highlight3_label', true) ?: 'Conversion Rate Improvement'); ?></div>
                            </div>
                        </div>
                        
                        <a href="<?php echo home_url('/blog'); ?>" class="study-cta"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_featured_cta_text', true) ?: 'Read Full Case Study'); ?></a>
                    </div>
                    <div class="study-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/techgear-featured.jpg" alt="<?php echo esc_attr(get_post_meta(get_the_ID(), 'cs_featured_title', true) ?: 'TechGear UK Case Study'); ?>" />
                    </div>
                </div>
            </div>
        </section>        <!-- Case Studies Grid -->        <section class="case-studies-grid">
            <div class="section-content">
                <div class="studies-grid">
                    <?php
                    // Display case study cards
                    for ($i = 1; $i <= 6; $i++) {
                        $category = get_post_meta(get_the_ID(), "cs_case{$i}_category", true);
                        $title = get_post_meta(get_the_ID(), "cs_case{$i}_title", true);
                        $description = get_post_meta(get_the_ID(), "cs_case{$i}_description", true);
                        $metric1_value = get_post_meta(get_the_ID(), "cs_case{$i}_metric1_value", true);
                        $metric1_label = get_post_meta(get_the_ID(), "cs_case{$i}_metric1_label", true);
                        $metric2_value = get_post_meta(get_the_ID(), "cs_case{$i}_metric2_value", true);
                        $metric2_label = get_post_meta(get_the_ID(), "cs_case{$i}_metric2_label", true);
                        $link_text = get_post_meta(get_the_ID(), "cs_case{$i}_link_text", true);
                        $link_url = get_post_meta(get_the_ID(), "cs_case{$i}_link_url", true);
                        
                        // Set defaults based on case study number
                        $defaults = array(
                            1 => array(
                                'category' => 'E-commerce',
                                'title' => 'Fashion Boutique: Local to National Success',
                                'description' => 'Transformed a local fashion boutique into a national online brand through targeted social media marketing and influencer partnerships.',
                                'metric1_value' => '280%',
                                'metric1_label' => 'Social Engagement',
                                'metric2_value' => '150%',
                                'metric2_label' => 'Online Sales',
                                'link_text' => 'View Details',
                                'image' => 'fashion-boutique.jpg'
                            ),
                            2 => array(
                                'category' => 'Healthcare',
                                'title' => 'Premier Dental: Patient Acquisition Success',
                                'description' => 'Increased new patient bookings by 300% through local SEO optimisation and targeted Google Ads campaigns.',
                                'metric1_value' => '300%',
                                'metric1_label' => 'New Patients',
                                'metric2_value' => '450%',
                                'metric2_label' => 'Local Visibility',
                                'link_text' => 'View Details',
                                'image' => 'dental-clinic.jpg'
                            ),
                            3 => array(
                                'category' => 'Finance',
                                'title' => 'WealthWise Advisors: Lead Generation Mastery',
                                'description' => 'Generated high-quality leads for financial planning services through content marketing and LinkedIn advertising.',
                                'metric1_value' => '220%',
                                'metric1_label' => 'Quality Leads',
                                'metric2_value' => '85%',
                                'metric2_label' => 'Cost Reduction',
                                'link_text' => 'View Details',
                                'image' => 'financial-advisor.jpg'
                            ),
                            4 => array(
                                'category' => 'Education',
                                'title' => 'EduTech Solutions: Course Enrollment Boost',
                                'description' => 'Increased online course enrollments by 500% through strategic content marketing and email automation.',
                                'metric1_value' => '500%',
                                'metric1_label' => 'Enrollments',
                                'metric2_value' => '340%',
                                'metric2_label' => 'Email Revenue',
                                'link_text' => 'View Details',
                                'image' => 'online-courses.jpg'
                            ),
                            5 => array(
                                'category' => 'SaaS',
                                'title' => 'CloudFlow: B2B Lead Generation Excellence',
                                'description' => 'Scaled from 50 to 500+ monthly qualified leads through account-based marketing and conversion optimisation.',
                                'metric1_value' => '900%',
                                'metric1_label' => 'Qualified Leads',
                                'metric2_value' => '275%',
                                'metric2_label' => 'Trial Conversions',
                                'link_text' => 'View Details',
                                'image' => 'saas-platform.jpg'
                            ),
                            6 => array(
                                'category' => 'E-commerce',
                                'title' => 'Home & Garden Co: Seasonal Success Strategy',
                                'description' => 'Maximized seasonal sales through strategic PPC campaigns and inventory-based ad optimisation.',
                                'metric1_value' => '320%',
                                'metric1_label' => 'Seasonal Revenue',
                                'metric2_value' => '65%',
                                'metric2_label' => 'Cost Reduction',
                                'link_text' => 'View Details',
                                'image' => 'home-decor.jpg'
                            )
                        );
                        
                        $default = $defaults[$i];
                        
                        // Use meta values or defaults
                        $category = $category ?: $default['category'];
                        $title = $title ?: $default['title'];
                        $description = $description ?: $default['description'];
                        $metric1_value = $metric1_value ?: $default['metric1_value'];
                        $metric1_label = $metric1_label ?: $default['metric1_label'];
                        $metric2_value = $metric2_value ?: $default['metric2_value'];
                        $metric2_label = $metric2_label ?: $default['metric2_label'];
                        $link_text = $link_text ?: $default['link_text'];
                        $link_url = $link_url ?: '#';
                        ?>
                        
                        <!-- Case Study <?php echo $i; ?> -->
                        <div class="case-study-card animate-on-scroll animate-stagger animate-fade-up" data-category="<?php echo strtolower($category); ?>">
                            <div class="study-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/<?php echo $default['image']; ?>" alt="<?php echo esc_attr($title); ?>" />
                                <div class="study-overlay">
                                    <span class="study-category"><?php echo wp_kses_post($category); ?></span>
                                </div>
                            </div>
                            <div class="study-content">
                                <h3><?php echo wp_kses_post($title); ?></h3>
                                <p><?php echo wp_kses_post($description); ?></p>
                                <div class="study-metrics">
                                    <div class="metric">
                                        <span class="metric-value"><?php echo wp_kses_post($metric1_value); ?></span>
                                        <span class="metric-label"><?php echo wp_kses_post($metric1_label); ?></span>
                                    </div>
                                    <div class="metric">
                                        <span class="metric-value"><?php echo wp_kses_post($metric2_value); ?></span>
                                        <span class="metric-label"><?php echo wp_kses_post($metric2_label); ?></span>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url($link_url); ?>" class="study-link"><?php echo wp_kses_post($link_text); ?></a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- Client Testimonials -->
        <section class="case-study-testimonials">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_testimonials_title', true) ?: 'What Our Clients Say'); ?></h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card animate-on-scroll animate-stagger animate-slide-left">
                        <div class="testimonial-content">
                            <p>"<?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_testimonial1_content', true) ?: 'Aimpro Digital completely transformed our online presence. Their strategic approach to SEO and PPC delivered results beyond our expectations.'); ?>"</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_testimonial1_name', true) ?: 'Sarah Johnson'); ?></h4>
                                <span><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_testimonial1_title', true) ?: 'CEO, TechGear UK'); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="testimonial-card animate-on-scroll animate-stagger animate-slide-right">
                        <div class="testimonial-content">
                            <p>"<?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_testimonial2_content', true) ?: 'The team\'s expertise in healthcare marketing is exceptional. We\'ve seen a 300% increase in new patient bookings since working with them.'); ?>"</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-info">
                                <h4><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_testimonial2_name', true) ?: 'Dr. Michael Smith'); ?></h4>
                                <span><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_testimonial2_title', true) ?: 'Practice Owner, Premier Dental'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section id="contact" class="cta-section">
            <div class="container">
                <div class="cta-content animate-on-scroll animate-scale-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_cta_title', true) ?: 'Ready to Be Our Next Success Story?'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_cta_description', true) ?: 'Let\'s discuss how we can help you achieve similar results for your business.'); ?></p><div class="cta-buttons">
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), 'cs_cta_button1_url', true) ?: '/contact')); ?>" class="btn-outline"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_cta_button1_text', true) ?: 'Start Your Project'); ?></a>
                        <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), 'cs_cta_button2_url', true) ?: '/about')); ?>" class="btn-secondary"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'cs_cta_button2_text', true) ?: 'Learn About Our Process'); ?></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<!-- Mobile Responsive Styles for Case Studies Page -->
<style>
/* Mobile optimizations for case studies intro section */
@media (max-width: 768px) {
    .case-studies-intro .section-content {
        padding: 2rem 1rem !important;
    }
    
    .intro-content {
        text-align: center !important;
        margin-bottom: 2rem !important;
    }
    
    .intro-content h2 {
        font-size: 1.8rem !important;
        line-height: 1.3 !important;
        margin-bottom: 1rem !important;
    }
    
    .intro-content p {
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        max-width: 100% !important;
        margin: 0 auto !important;
    }
    
    .results-overview {
        display: flex !important;
        flex-direction: column !important;
        gap: 1.5rem !important;
        align-items: center !important;
        width: 100% !important;
        margin-top: 2rem !important;
    }
    
    .result-stat {
        text-align: center !important;
        padding: 1rem !important;
        width: 100% !important;
        max-width: 280px !important;
        background: rgba(255, 255, 255, 0.05) !important;
        border-radius: 12px !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
    }
    
    .result-stat .stat-number {
        font-size: 2.2rem !important;
        margin-bottom: 0.5rem !important;
        display: block !important;
    }
    
    .result-stat .stat-label {
        font-size: 0.9rem !important;
        line-height: 1.3 !important;
        display: block !important;
    }
    
    /* Page header mobile optimization */
    .page-header-content {
        text-align: center !important;
        padding: 1.5rem 1rem !important;
    }
    
    .page-header-content h1 {
        font-size: 2rem !important;
        margin-bottom: 1rem !important;
    }
    
    .page-subtitle {
        font-size: 1rem !important;
        line-height: 1.4 !important;
    }
    
    /* Featured case study mobile optimization */
    .featured-study {
        flex-direction: column !important;
        gap: 2rem !important;
    }
    
    .study-content {
        text-align: center !important;
        order: 2 !important;
    }
    
    .study-image {
        order: 1 !important;
        width: 100% !important;
    }
    
    .study-highlights {
        flex-direction: column !important;
        gap: 1rem !important;
        margin: 1.5rem 0 !important;
    }
    
    .highlight-item {
        text-align: center !important;
        padding: 1rem !important;
        background: rgba(255, 255, 255, 0.05) !important;
        border-radius: 8px !important;
    }
    
    /* Case studies grid mobile optimization */
    .studies-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .case-study-card {
        margin-bottom: 1rem !important;
    }
    
    .study-metrics {
        flex-direction: column !important;
        gap: 0.75rem !important;
        margin: 1rem 0 !important;
    }
    
    .metric {
        text-align: center !important;
        padding: 0.75rem !important;
        background: rgba(255, 255, 255, 0.05) !important;
        border-radius: 6px !important;
    }
    
    /* Testimonials mobile optimization */
    .testimonials-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .testimonial-card {
        padding: 1.5rem 1rem !important;
        text-align: center !important;
    }
}

@media (max-width: 480px) {
    .case-studies-intro .section-content {
        padding: 1.5rem 0.75rem !important;
    }
    
    .intro-content h2 {
        font-size: 1.5rem !important;
    }
    
    .intro-content p {
        font-size: 0.9rem !important;
    }
    
    .result-stat {
        padding: 0.75rem !important;
        max-width: 100% !important;
    }
    
    .result-stat .stat-number {
        font-size: 1.8rem !important;
    }
    
    .result-stat .stat-label {
        font-size: 0.8rem !important;
    }
    
    .page-header-content {
        padding: 1rem 0.75rem !important;
    }
    
    .page-header-content h1 {
        font-size: 1.6rem !important;
    }
}
</style>

<?php get_footer(); ?>
