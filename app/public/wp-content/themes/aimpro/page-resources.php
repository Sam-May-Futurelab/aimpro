<?php
/**
 * Template Name: Resources Page
 * Description: Main resources hub page
 */

get_header(); ?>

<main id="primary" class="service-page resources-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">Resources</span>
            </nav>
        </div>    </div>

    <div class="container">
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_hero_title', true) ?: 'Resources'); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_hero_subtitle', true) ?: 'Your Digital Marketing Knowledge Hub - Everything you need to succeed in digital marketing'); ?></p>
                <?php if (get_post_meta(get_the_ID(), 'resources_hero_description', true)): ?>
                <div class="page-description">
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_hero_description', true)); ?></p>
                </div>
                <?php endif; ?>
            </div>        </section>        <!-- Resources Grid -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_categories_title', true) ?: 'Resource Categories'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_categories_subtitle', true) ?: 'Comprehensive resources to power your digital marketing success across all channels and strategies.'); ?></p>
                </div>
                
                <!-- Services Quick Links -->
                <div class="services-grid resources-services-grid">
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3>SEO Services</h3>
                        <p>Boost your search rankings with our comprehensive SEO strategies and optimisation techniques.</p>
                        <div class="service-links">
                            <a href="<?php echo home_url('/services/seo'); ?>" class="btn btn-primary">SEO Services</a>
                            <a href="<?php echo home_url('/seo-audit'); ?>" class="btn btn-outline">Free SEO Audit</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h3>Google Ads & PPC</h3>
                        <p>Drive targeted traffic and maximise ROI with our expert Google Ads and PPC management.</p>
                        <div class="service-links">
                            <a href="<?php echo home_url('/services/google-ads'); ?>" class="btn btn-primary">Google Ads</a>
                            <a href="<?php echo home_url('/services/ppc'); ?>" class="btn btn-outline">PPC Management</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Web Development</h3>
                        <p>Create high-converting websites that drive results and deliver exceptional user experiences.</p>
                        <div class="service-links">
                            <a href="<?php echo home_url('/services/web-development'); ?>" class="btn btn-primary">Web Development</a>
                            <a href="<?php echo home_url('/services/ecommerce'); ?>" class="btn btn-outline">E-commerce</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <h3>Social Media</h3>
                        <p>Build your brand presence and engage with your audience across all social media platforms.</p>
                        <div class="service-links">
                            <a href="<?php echo home_url('/services/social-media'); ?>" class="btn btn-primary">Social Media</a>
                            <a href="<?php echo home_url('/services/content-marketing'); ?>" class="btn btn-outline">Content Marketing</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email Marketing</h3>
                        <p>Nurture leads and drive conversions with personalised email marketing campaigns.</p>
                        <div class="service-links">
                            <a href="<?php echo home_url('/services/email-marketing'); ?>" class="btn btn-primary">Email Marketing</a>
                            <a href="<?php echo home_url('/services/automation'); ?>" class="btn btn-outline">Automation</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Analytics & Reporting</h3>
                        <p>Track performance and optimise campaigns with detailed analytics and reporting solutions.</p>
                        <div class="service-links">
                            <a href="<?php echo home_url('/services/analytics'); ?>" class="btn btn-primary">Analytics</a>
                            <a href="<?php echo home_url('/services/conversion-optimisation'); ?>" class="btn btn-outline">CRO</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Knowledge Hub -->
        <section class="service-overview knowledge-hub">
            <div class="container">
                <div class="section-header text-center animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_featured_title', true) ?: 'Digital Marketing Knowledge Hub'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_featured_subtitle', true) ?: 'Expert insights, guides, and resources to accelerate your digital marketing success'); ?></p>
                </div>
                
                <div class="services-grid resources-services-grid">
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-blog"></i>
                        </div>
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_blog_title', true) ?: 'Blog & Insights'); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_blog_description', true) ?: 'Stay updated with the latest digital marketing trends, strategies, and expert insights.'); ?></p>
                        <div class="service-links">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_blog_link_url', true) ?: '/blog'); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_blog_link_text', true) ?: 'Read Our Blog'); ?></a>
                            <a href="<?php echo home_url('/insights'); ?>" class="btn btn-outline">Expert Insights</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_casestudies_title', true) ?: 'Case Studies'); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_casestudies_description', true) ?: 'Discover real success stories and proven strategies that drive exceptional results.'); ?></p>
                        <div class="service-links">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_casestudies_link_url', true) ?: '/case-studies'); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_casestudies_link_text', true) ?: 'View Case Studies'); ?></a>
                            <a href="<?php echo home_url('/success-stories'); ?>" class="btn btn-outline">Success Stories</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_templates_title', true) ?: 'Free Tools & Templates'); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_templates_description', true) ?: 'Access our collection of free templates, checklists, and tools to streamline your marketing.'); ?></p>
                        <div class="service-links">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_templates_link_url', true) ?: '/free-tools'); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_templates_link_text', true) ?: 'Get Free Tools'); ?></a>
                            <a href="<?php echo home_url('/templates'); ?>" class="btn btn-outline">Templates</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_training_title', true) ?: 'Training & Mentoring'); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_training_description', true) ?: 'Accelerate your skills with personalised training programs and expert mentoring.'); ?></p>
                        <div class="service-links">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_training_link_url', true) ?: '/training'); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_training_link_text', true) ?: 'Learn More'); ?></a>
                            <a href="<?php echo home_url('/mentoring'); ?>" class="btn btn-outline">Mentoring</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-search-plus"></i>
                        </div>
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_seo_title', true) ?: 'SEO Guides & Resources'); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_seo_description', true) ?: 'Expert SEO guides and resources to improve your search rankings and organic traffic.'); ?></p>
                        <div class="service-links">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_seo_link_url', true) ?: '/seo-guides'); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_seo_link_text', true) ?: 'SEO Guides'); ?></a>
                            <a href="<?php echo home_url('/seo-audit'); ?>" class="btn btn-outline">Free SEO Audit</a>
                        </div>
                    </div>

                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_events_title', true) ?: 'Webinars & Events'); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_events_description', true) ?: 'Join our live webinars and events to learn from industry experts and network with peers.'); ?></p>
                        <div class="service-links">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_events_link_url', true) ?: '/webinars'); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_events_link_text', true) ?: 'Upcoming Webinars'); ?></a>
                            <a href="<?php echo home_url('/events'); ?>" class="btn btn-outline">Past Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Resources -->
        <?php if (get_post_meta(get_the_ID(), 'resources_featured_title', true) || get_post_meta(get_the_ID(), 'resources_featured1_title', true)): ?>
        <section class="service-overview featured-resources">
            <div class="container">
                <div class="section-header text-center animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_featured_title', true) ?: 'Featured Resources'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_featured_subtitle', true) ?: 'Hand-picked resources to accelerate your digital marketing success'); ?></p>
                </div>
                
                <div class="services-grid featured-resources-grid">
                    <?php 
                    // Featured Resource 1
                    $featured1_title = get_post_meta(get_the_ID(), 'resources_featured1_title', true);
                    if ($featured1_title): ?>
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="resource-type">
                            <span class="badge"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured1_type', true) ?: 'Resource'); ?></span>
                        </div>
                        <h3><?php echo wp_kses_post($featured1_title); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_featured1_description', true)); ?></p>
                        <?php if (get_post_meta(get_the_ID(), 'resources_featured1_link_url', true)): ?>
                        <div class="resource-link">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_featured1_link_url', true)); ?>" class="btn btn-primary">
                                <?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured1_link_text', true) ?: 'Learn More'); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <?php 
                    // Featured Resource 2
                    $featured2_title = get_post_meta(get_the_ID(), 'resources_featured2_title', true);
                    if ($featured2_title): ?>
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="resource-type">
                            <span class="badge"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured2_type', true) ?: 'Resource'); ?></span>
                        </div>
                        <h3><?php echo wp_kses_post($featured2_title); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_featured2_description', true)); ?></p>
                        <?php if (get_post_meta(get_the_ID(), 'resources_featured2_link_url', true)): ?>
                        <div class="resource-link">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_featured2_link_url', true)); ?>" class="btn btn-primary">
                                <?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured2_link_text', true) ?: 'Learn More'); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <?php 
                    // Featured Resource 3
                    $featured3_title = get_post_meta(get_the_ID(), 'resources_featured3_title', true);
                    if ($featured3_title): ?>
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="resource-type">
                            <span class="badge"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured3_type', true) ?: 'Resource'); ?></span>
                        </div>
                        <h3><?php echo wp_kses_post($featured3_title); ?></h3>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_featured3_description', true)); ?></p>
                        <?php if (get_post_meta(get_the_ID(), 'resources_featured3_link_url', true)): ?>
                        <div class="resource-link">
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_featured3_link_url', true)); ?>" class="btn btn-primary">
                                <?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured3_link_text', true) ?: 'Learn More'); ?>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

    <!-- Newsletter CTA -->
    <section class="cta-section newsletter-cta">
        <div class="container">
            <div class="cta-content text-center animate-on-scroll animate-scale-up">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_newsletter_title', true) ?: 'Stay Updated with the Latest Insights'); ?></h2>
                <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'resources_newsletter_description', true) ?: 'Get the latest resources, industry updates, and expert tips delivered directly to your inbox every week.'); ?></p>
                
                <form class="newsletter-form" id="newsletter-form-resources" method="post" action="<?php echo admin_url('admin-post.php'); ?>">
                    <?php wp_nonce_field('newsletter_signup', 'newsletter_nonce'); ?>
                    <input type="hidden" name="action" value="newsletter_signup">
                    <div class="form-group">
                        <input type="text" name="subscriber_name" placeholder="Enter your name" required>
                        <input type="email" name="subscriber_email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary">
                            <span class="button-text">Subscribe</span>
                            <span class="button-spinner" style="display: none;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-dasharray="31.416" stroke-dashoffset="31.416">
                                        <animate attributeName="stroke-dasharray" dur="2s" values="0 31.416;15.708 15.708;0 31.416" repeatCount="indefinite"/>
                                        <animate attributeName="stroke-dashoffset" dur="2s" values="0;-15.708;-31.416" repeatCount="indefinite"/>
                                    </circle>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
                
                <?php include get_template_directory() . '/includes/newsletter-popup.php'; ?>
            </div>
        </div>
    </section>

    </div>
</main>

<?php get_footer(); ?>

