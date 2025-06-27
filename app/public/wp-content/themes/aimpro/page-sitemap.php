<?php
/**
 * Template Name: Sitemap
 * Description: Website sitemap page showing all site sections and pages
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">Sitemap</span>
            </nav>
        </div>
    </div>

    <div class="container">
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_header_title', true) ?: 'Sitemap'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_header_subtitle', true) ?: 'Find all the pages and content on our website organized by section'); ?></p>
            </div>
        </section>

        <!-- Sitemap Content -->
        <section class="sitemap-content">
            <div class="section-content">
                <div class="sitemap-grid">
                    
                    <!-- Main Pages Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_main_title', true) ?: 'Main Pages'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $main_pages = get_post_meta(get_the_ID(), '_sitemap_main_pages', true);
                            if (empty($main_pages)) {
                                $main_pages = array(
                                    array('title' => 'Home', 'url' => home_url()),
                                    array('title' => 'About Us', 'url' => home_url('/about')),
                                    array('title' => 'Services', 'url' => home_url('/services')),
                                    array('title' => 'Solutions', 'url' => home_url('/solutions')),
                                    array('title' => 'Industries', 'url' => home_url('/industries')),
                                    array('title' => 'Contact Us', 'url' => home_url('/contact')),
                                    array('title' => 'Blog', 'url' => home_url('/blog')),
                                    array('title' => 'Case Studies', 'url' => home_url('/case-studies'))
                                );
                            }
                            foreach ($main_pages as $page): ?>
                                <a href="<?php echo esc_url($page['url']); ?>" class="sitemap-link"><?php echo esc_html($page['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- SEO Services Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_seo_title', true) ?: 'SEO Services'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $seo_services = get_post_meta(get_the_ID(), '_sitemap_seo_services', true);
                            if (empty($seo_services)) {
                                $seo_services = array(
                                    array('title' => 'SEO Services', 'url' => home_url('/seo-services')),
                                    array('title' => 'Local SEO', 'url' => home_url('/local-seo')),
                                    array('title' => 'SEO Audit', 'url' => home_url('/seo-audit')),
                                    array('title' => 'Technical SEO', 'url' => home_url('/technical-seo')),
                                    array('title' => 'On-Page SEO', 'url' => home_url('/on-page-seo')),
                                    array('title' => 'White Label SEO', 'url' => home_url('/white-label-seo'))
                                );
                            }
                            foreach ($seo_services as $service): ?>
                                <a href="<?php echo esc_url($service['url']); ?>" class="sitemap-link"><?php echo esc_html($service['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Advertising & PPC Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_ppc_title', true) ?: 'Advertising & PPC'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $ppc_services = get_post_meta(get_the_ID(), '_sitemap_ppc_services', true);
                            if (empty($ppc_services)) {
                                $ppc_services = array(
                                    array('title' => 'Advertising & PPC', 'url' => home_url('/advertising-ppc')),
                                    array('title' => 'Google Ads', 'url' => home_url('/google-ads')),
                                    array('title' => 'Meta Ads', 'url' => home_url('/meta-ads')),
                                    array('title' => 'Microsoft Ads', 'url' => home_url('/microsoft-ads')),
                                    array('title' => 'Retargeting & Display', 'url' => home_url('/retargeting-display')),
                                    array('title' => 'PPC Audit', 'url' => home_url('/ppc-audit')),
                                    array('title' => 'White Label PPC', 'url' => home_url('/white-label-ppc'))
                                );
                            }
                            foreach ($ppc_services as $service): ?>
                                <a href="<?php echo esc_url($service['url']); ?>" class="sitemap-link"><?php echo esc_html($service['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Marketing Automation Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_automation_title', true) ?: 'Marketing Automation'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $automation_services = get_post_meta(get_the_ID(), '_sitemap_automation_services', true);
                            if (empty($automation_services)) {
                                $automation_services = array(
                                    array('title' => 'Marketing Automation', 'url' => home_url('/marketing-automation')),
                                    array('title' => 'AI CRM Setup', 'url' => home_url('/ai-crm-setup')),
                                    array('title' => 'Email & SMS Flows', 'url' => home_url('/email-sms-flows')),
                                    array('title' => 'Email Campaigns', 'url' => home_url('/email-campaigns')),
                                    array('title' => 'Funnel Automation', 'url' => home_url('/funnel-automation')),
                                    array('title' => 'Chatbots', 'url' => home_url('/chatbots'))
                                );
                            }
                            foreach ($automation_services as $service): ?>
                                <a href="<?php echo esc_url($service['url']); ?>" class="sitemap-link"><?php echo esc_html($service['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Web Development Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_web_title', true) ?: 'Web Development'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $web_services = get_post_meta(get_the_ID(), '_sitemap_web_services', true);
                            if (empty($web_services)) {
                                $web_services = array(
                                    array('title' => 'Website Development', 'url' => home_url('/website-development')),
                                    array('title' => 'Website Design', 'url' => home_url('/website-design')),
                                    array('title' => 'Landing Pages', 'url' => home_url('/landing-pages')),
                                    array('title' => 'Funnel Builds', 'url' => home_url('/funnel-builds')),
                                    array('title' => 'UX/UI Design', 'url' => home_url('/ux-ui-optimisation'))
                                );
                            }
                            foreach ($web_services as $service): ?>
                                <a href="<?php echo esc_url($service['url']); ?>" class="sitemap-link"><?php echo esc_html($service['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Industries Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_industries_title', true) ?: 'Industries We Serve'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $industries = get_post_meta(get_the_ID(), '_sitemap_industries', true);
                            if (empty($industries)) {
                                $industries = array(
                                    array('title' => 'Estate Agents', 'url' => home_url('/estate-agents')),
                                    array('title' => 'E-commerce', 'url' => home_url('/ecommerce')),
                                    array('title' => 'Finance', 'url' => home_url('/finance')),
                                    array('title' => 'Professional Services', 'url' => home_url('/professional-services')),
                                    array('title' => 'Coaches & Consultants', 'url' => home_url('/coaches-consultants')),
                                    array('title' => 'Automotive', 'url' => home_url('/automotive')),
                                    array('title' => 'Home & Garden', 'url' => home_url('/home-garden'))
                                );
                            }
                            foreach ($industries as $industry): ?>
                                <a href="<?php echo esc_url($industry['url']); ?>" class="sitemap-link"><?php echo esc_html($industry['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Solutions Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_solutions_title', true) ?: 'Solutions'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $solutions = get_post_meta(get_the_ID(), '_sitemap_solutions', true);
                            if (empty($solutions)) {
                                $solutions = array(
                                    array('title' => 'Lead Generation', 'url' => home_url('/lead-generation')),
                                    array('title' => 'Automate Marketing', 'url' => home_url('/automate-marketing')),
                                    array('title' => 'High-Converting Website', 'url' => home_url('/high-converting-website')),
                                    array('title' => 'Improve ROI from Ads', 'url' => home_url('/improve-roi-ads')),
                                    array('title' => 'Rank Higher Locally', 'url' => home_url('/rank-higher-locally')),
                                    array('title' => 'Streamline Sales Funnel', 'url' => home_url('/streamline-sales-funnel'))
                                );
                            }
                            foreach ($solutions as $solution): ?>
                                <a href="<?php echo esc_url($solution['url']); ?>" class="sitemap-link"><?php echo esc_html($solution['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Resources Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_resources_title', true) ?: 'Resources & Tools'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $resources = get_post_meta(get_the_ID(), '_sitemap_resources', true);
                            if (empty($resources)) {
                                $resources = array(
                                    array('title' => 'Blog', 'url' => home_url('/blog')),
                                    array('title' => 'Case Studies', 'url' => home_url('/case-studies')),
                                    array('title' => 'Resources', 'url' => home_url('/resources')),
                                    array('title' => 'Templates & Tools', 'url' => home_url('/templates-tools')),
                                    array('title' => 'SEO Audit', 'url' => home_url('/seo-audit')),
                                    array('title' => 'PPC Audit', 'url' => home_url('/ppc-audit')),
                                    array('title' => 'Events & Webinars', 'url' => home_url('/events-webinars'))
                                );
                            }
                            foreach ($resources as $resource): ?>
                                <a href="<?php echo esc_url($resource['url']); ?>" class="sitemap-link"><?php echo esc_html($resource['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Company Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_company_title', true) ?: 'Company'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $company_pages = get_post_meta(get_the_ID(), '_sitemap_company_pages', true);
                            if (empty($company_pages)) {
                                $company_pages = array(
                                    array('title' => 'About Us', 'url' => home_url('/about')),
                                    array('title' => 'Company', 'url' => home_url('/company')),
                                    array('title' => 'Our Team', 'url' => home_url('/team')),
                                    array('title' => 'Careers', 'url' => home_url('/careers')),
                                    array('title' => 'Locations', 'url' => home_url('/locations')),
                                    array('title' => 'Testimonials', 'url' => home_url('/testimonials'))
                                );
                            }
                            foreach ($company_pages as $page): ?>
                                <a href="<?php echo esc_url($page['url']); ?>" class="sitemap-link"><?php echo esc_html($page['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>



                    <!-- Partnership Opportunities Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_partnership_title', true) ?: 'Partnership Opportunities'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $partnership_pages = get_post_meta(get_the_ID(), '_sitemap_partnership_pages', true);
                            if (empty($partnership_pages)) {
                                $partnership_pages = array(
                                    array('title' => 'Become a Partner', 'url' => home_url('/become-a-partner')),
                                    array('title' => 'Training & Mentoring', 'url' => home_url('/training-mentoring'))
                                );
                            }
                            foreach ($partnership_pages as $page): ?>
                                <a href="<?php echo esc_url($page['url']); ?>" class="sitemap-link"><?php echo esc_html($page['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Legal Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_legal_title', true) ?: 'Legal'); ?></h2>
                        <div class="sitemap-links">
                            <?php 
                            $legal_pages = get_post_meta(get_the_ID(), '_sitemap_legal_pages', true);
                            if (empty($legal_pages)) {
                                $legal_pages = array(
                                    array('title' => 'Privacy Policy', 'url' => home_url('/privacy-policy')),
                                    array('title' => 'Terms of Service', 'url' => home_url('/terms-of-service')),
                                    array('title' => 'Sitemap', 'url' => home_url('/sitemap'))
                                );
                            }
                            foreach ($legal_pages as $page): ?>
                                <a href="<?php echo esc_url($page['url']); ?>" class="sitemap-link"><?php echo esc_html($page['title']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>

                <!-- Additional Information -->
                <div class="sitemap-info animate-on-scroll animate-fade-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_info_title', true) ?: 'Can\'t Find What You\'re Looking For?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_info_content', true) ?: 'If you can\'t find the page you\'re looking for, please don\'t hesitate to contact us. Our team is here to help you navigate our website and find the information you need.'); ?></p>
                    <div class="sitemap-cta">
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_sitemap_cta_url', true) ?: home_url('/contact')); ?>" class="btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_cta_text', true) ?: 'Contact Us'); ?></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<style>
.sitemap-content {
    padding: 2rem 0;
}

.sitemap-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.sitemap-section {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 1.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.sitemap-section h2 {
    color: #f15a25;
    font-size: 1.3rem;
    margin-bottom: 1rem;
    font-weight: 600;
    border-bottom: 2px solid #f15a25;
    padding-bottom: 0.5rem;
}

.sitemap-links {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.sitemap-link {
    display: block;
    color: #495057;
    text-decoration: none;
    font-size: 0.95rem;
    line-height: 1.4;
    padding: 0.75rem 1rem;
    background: #ffffff;
    border: 1px solid #e9ecef;
    border-radius: 6px;
    transition: all 0.3s ease;
    border-left: 3px solid transparent;
}

.sitemap-link:hover {
    color: #f15a25;
    background: #fff5f0;
    border-color: #f15a25;
    border-left-color: #f15a25;
    transform: translateX(3px);
    text-decoration: none;
}

.sitemap-info {
    background: #fff;
    border: 2px solid #f15a25;
    border-radius: 8px;
    padding: 2rem;
    text-align: center;
    margin-top: 2rem;
}

.sitemap-info h2 {
    color: #333;
    font-size: 1.4rem;
    margin-bottom: 1rem;
}

.sitemap-info p {
    color: #6c757d;
    font-size: 1rem;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.sitemap-cta {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.sitemap-cta .btn-primary,
.sitemap-cta .btn-outline {
    padding: 0.75rem 1.5rem;
    border-radius: 6px;
    font-weight: 600;
    text-decoration: none;
    font-size: 0.95rem;
    transition: all 0.3s ease;
}

.sitemap-cta .btn-primary {
    background: #f15a25;
    color: white;
    border: 2px solid #f15a25;
}

.sitemap-cta .btn-primary:hover {
    background: #d4491e;
    border-color: #d4491e;
}

.sitemap-cta .btn-outline {
    background: transparent;
    color: #f15a25;
    border: 2px solid #f15a25;
}

.sitemap-cta .btn-outline:hover {
    background: #f15a25;
    color: white;
}

/* Mobile optimizations */
@media (max-width: 768px) {
    .sitemap-grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .sitemap-section {
        padding: 1rem;
    }
    
    .sitemap-section h2 {
        font-size: 1.2rem;
    }
    
    .sitemap-list a {
        font-size: 0.9rem;
    }
    
    .sitemap-info {
        padding: 1.5rem;
    }
    
    .sitemap-cta {
        flex-direction: column;
        align-items: center;
    }
    
    .sitemap-cta .btn-primary,
    .sitemap-cta .btn-outline {
        width: 100%;
        max-width: 250px;
        text-align: center;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    .sitemap-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<?php get_footer(); ?>
