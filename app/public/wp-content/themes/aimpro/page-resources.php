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
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_hero_title', true) ?: 'Resources'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_hero_subtitle', true) ?: 'Your Digital Marketing Knowledge Hub - Everything you need to succeed in digital marketing'); ?></p>
            </div>        </section>

        <!-- Resources Grid -->
        <section class="service-overview">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_categories_title', true) ?: 'Resource Categories'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_categories_subtitle', true) ?: 'Comprehensive resources to power your digital marketing success across all channels and strategies.'); ?></p>
            </div>
            <div class="services-grid">
                
                <!-- Blog -->
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_blog_title', true) ?: 'Blog & Insights'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_blog_description', true) ?: 'Stay updated with the latest digital marketing trends, strategies, and industry insights from our expert team.'); ?></p>
                    <ul class="service-features">
                        <?php 
                        $features = get_post_meta(get_the_ID(), 'resources_blog_features', true);
                        if ($features) {
                            $features_array = explode("\n", $features);
                            foreach ($features_array as $feature) {
                                echo '<li>' . esc_html(trim($feature)) . '</li>';
                            }
                        } else {
                            echo '<li>SEO & Search Marketing Tips</li>';
                            echo '<li>PPC Campaign Strategies</li>';
                            echo '<li>Industry Trend Analysis</li>';
                            echo '<li>Expert Interviews</li>';
                        }
                        ?>
                    </ul>
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), 'resources_blog_link_url', true) ?: '/blog')); ?>" class="service-link"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_blog_link_text', true) ?: 'Read Our Blog'); ?></a>
                </div>                <!-- Case Studies -->
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_casestudies_title', true) ?: 'Case Studies'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_casestudies_description', true) ?: 'Discover real success stories and learn how we\'ve helped businesses achieve their digital marketing goals.'); ?></p>
                    <ul class="service-features">
                        <?php 
                        $features = get_post_meta(get_the_ID(), 'resources_casestudies_features', true);
                        if ($features) {
                            $features_array = explode("\n", $features);
                            foreach ($features_array as $feature) {
                                echo '<li>' . esc_html(trim($feature)) . '</li>';
                            }
                        } else {
                            echo '<li>ROI Improvement Stories</li>';
                            echo '<li>Campaign Performance Data</li>';
                            echo '<li>Strategy Implementations</li>';
                            echo '<li>Client Testimonials</li>';
                        }
                        ?>
                    </ul>
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), 'resources_casestudies_link_url', true) ?: '/case-studies')); ?>" class="service-link"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_casestudies_link_text', true) ?: 'View Case Studies'); ?></a>
                </div>                <!-- Templates & Tools -->
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 7L9 18L4 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_templates_title', true) ?: 'Templates & Tools'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_templates_description', true) ?: 'Access our collection of free templates, checklists, and tools to streamline your marketing efforts.'); ?></p>
                    <ul class="service-features">
                        <?php 
                        $features = get_post_meta(get_the_ID(), 'resources_templates_features', true);
                        if ($features) {
                            $features_array = explode("\n", $features);
                            foreach ($features_array as $feature) {
                                echo '<li>' . esc_html(trim($feature)) . '</li>';
                            }
                        } else {
                            echo '<li>SEO Audit Checklists</li>';
                            echo '<li>Campaign Planning Templates</li>';
                            echo '<li>Performance Tracking Tools</li>';
                            echo '<li>Content Calendar Templates</li>';
                        }
                        ?>
                    </ul>
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), 'resources_templates_link_url', true) ?: '/templates-tools')); ?>" class="service-link"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_templates_link_text', true) ?: 'Get Free Tools'); ?></a>
                </div>                <!-- Events & Webinars -->
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 2V6M16 2V6M3 10H21M5 4H19C20.1046 4 21 4.89543 21 6V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V6C3 4.89543 3.89543 4 5 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_events_title', true) ?: 'Events & Webinars'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_events_description', true) ?: 'Join our upcoming events and webinars to learn from industry experts and network with peers.'); ?></p>
                    <ul class="service-features">
                        <?php 
                        $features = get_post_meta(get_the_ID(), 'resources_events_features', true);
                        if ($features) {
                            $features_array = explode("\n", $features);
                            foreach ($features_array as $feature) {
                                echo '<li>' . esc_html(trim($feature)) . '</li>';
                            }
                        } else {
                            echo '<li>Monthly Expert Webinars</li>';
                            echo '<li>Industry Conference Coverage</li>';
                            echo '<li>Networking Events</li>';
                            echo '<li>Workshop Sessions</li>';
                        }
                        ?>
                    </ul>
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), 'resources_events_link_url', true) ?: '/events-webinars')); ?>" class="service-link"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_events_link_text', true) ?: 'View Events'); ?></a>
                </div>                <!-- Training & Mentoring -->
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14L9 11L13 15L15 13M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_training_title', true) ?: 'Training & Mentoring'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_training_description', true) ?: 'Accelerate your digital marketing skills with our personalized training programs and expert mentoring.'); ?></p>
                    <ul class="service-features">
                        <?php 
                        $features = get_post_meta(get_the_ID(), 'resources_training_features', true);
                        if ($features) {
                            $features_array = explode("\n", $features);
                            foreach ($features_array as $feature) {
                                echo '<li>' . esc_html(trim($feature)) . '</li>';
                            }
                        } else {
                            echo '<li>One-on-One Mentoring</li>';
                            echo '<li>Team Training Sessions</li>';
                            echo '<li>Skill Development Programs</li>';
                            echo '<li>Certification Guidance</li>';
                        }
                        ?>
                    </ul>
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), 'resources_training_link_url', true) ?: '/training-mentoring')); ?>" class="service-link"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_training_link_text', true) ?: 'Learn More'); ?></a>
                </div>

            </div>
        </div>
    </section>    <!-- Featured Content -->
    <section class="features-section featured-resources">
        <div class="container section-content">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured_title', true) ?: 'Featured Resources'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured_subtitle', true) ?: 'Hand-picked resources to accelerate your digital marketing success and stay ahead of the competition.'); ?></p>
            </div>
            <div class="features-grid featured-grid">
                
                <div class="feature-item featured-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-content featured-content">
                        <span class="feature-type featured-type"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured1_type', true) ?: 'Guide'); ?></span>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured1_title', true) ?: 'The Complete SEO Guide for 2025'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured1_description', true) ?: 'Everything you need to know about SEO in 2025, from technical optimization to content strategy.'); ?></p>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_featured1_link_url', true) ?: '#'); ?>" class="feature-link featured-link"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured1_link_text', true) ?: 'Download Free Guide'); ?></a>
                    </div>
                </div>                <div class="feature-item featured-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-content featured-content">
                        <span class="feature-type featured-type"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured2_type', true) ?: 'Tool'); ?></span>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured2_title', true) ?: 'PPC ROI Calculator'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured2_description', true) ?: 'Calculate your pay-per-click advertising return on investment with our easy-to-use tool.'); ?></p>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_featured2_link_url', true) ?: '#'); ?>" class="feature-link featured-link"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured2_link_text', true) ?: 'Use Calculator'); ?></a>
                    </div>
                </div>

                <div class="feature-item featured-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="feature-content featured-content">
                        <span class="feature-type featured-type"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured3_type', true) ?: 'Webinar'); ?></span>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured3_title', true) ?: 'Digital Marketing Trends 2025'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured3_description', true) ?: 'Join our upcoming webinar to discover the latest trends shaping digital marketing this year.'); ?></p>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'resources_featured3_link_url', true) ?: '#'); ?>" class="feature-link featured-link"><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_featured3_link_text', true) ?: 'Register Now'); ?></a>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- Newsletter Signup -->
    <section id="contact" class="cta-section resources-newsletter">
        <div class="container section-content">
            <div class="cta-content newsletter-content animate-on-scroll animate-scale-up">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_newsletter_title', true) ?: 'Stay Updated'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'resources_newsletter_description', true) ?: 'Get the latest resources, insights, and industry updates delivered directly to your inbox.'); ?></p>                <form class="newsletter-form" action="#" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" required>
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>    </section>

    </div>
</main>

<?php get_footer(); ?>
