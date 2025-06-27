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
                        <ul class="sitemap-list">
                            <?php 
                            $main_pages = get_post_meta(get_the_ID(), '_sitemap_main_pages', true);
                            if (empty($main_pages)) {
                                $main_pages = array(
                                    array('title' => 'Home', 'url' => home_url()),
                                    array('title' => 'About Us', 'url' => home_url('/about')),
                                    array('title' => 'Services', 'url' => home_url('/services')),
                                    array('title' => 'Contact Us', 'url' => home_url('/contact')),
                                    array('title' => 'Blog', 'url' => home_url('/blog')),
                                    array('title' => 'Case Studies', 'url' => home_url('/case-studies'))
                                );
                            }
                            foreach ($main_pages as $page): ?>
                                <li><a href="<?php echo esc_url($page['url']); ?>"><?php echo esc_html($page['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Services Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_services_title', true) ?: 'Our Services'); ?></h2>
                        <ul class="sitemap-list">
                            <?php 
                            $services = get_post_meta(get_the_ID(), '_sitemap_services', true);
                            if (empty($services)) {
                                $services = array(
                                    array('title' => 'Search Engine Optimization (SEO)', 'url' => home_url('/seo-services')),
                                    array('title' => 'Pay-Per-Click Advertising (PPC)', 'url' => home_url('/ppc-services')),
                                    array('title' => 'Social Media Marketing', 'url' => home_url('/social-media-marketing')),
                                    array('title' => 'Content Marketing', 'url' => home_url('/content-marketing')),
                                    array('title' => 'Web Design & Development', 'url' => home_url('/website-development')),
                                    array('title' => 'Email Marketing', 'url' => home_url('/email-marketing')),
                                    array('title' => 'Analytics & Reporting', 'url' => home_url('/analytics-reporting'))
                                );
                            }
                            foreach ($services as $service): ?>
                                <li><a href="<?php echo esc_url($service['url']); ?>"><?php echo esc_html($service['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Industries Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_industries_title', true) ?: 'Industries We Serve'); ?></h2>
                        <ul class="sitemap-list">
                            <?php 
                            $industries = get_post_meta(get_the_ID(), '_sitemap_industries', true);
                            if (empty($industries)) {
                                $industries = array(
                                    array('title' => 'Estate Agents', 'url' => home_url('/estate-agents')),
                                    array('title' => 'E-commerce', 'url' => home_url('/ecommerce')),
                                    array('title' => 'Finance & Banking', 'url' => home_url('/finance')),
                                    array('title' => 'Healthcare', 'url' => home_url('/healthcare')),
                                    array('title' => 'Legal Services', 'url' => home_url('/legal')),
                                    array('title' => 'Technology', 'url' => home_url('/technology')),
                                    array('title' => 'Retail', 'url' => home_url('/retail'))
                                );
                            }
                            foreach ($industries as $industry): ?>
                                <li><a href="<?php echo esc_url($industry['url']); ?>"><?php echo esc_html($industry['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Solutions Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_solutions_title', true) ?: 'Solutions'); ?></h2>
                        <ul class="sitemap-list">
                            <?php 
                            $solutions = get_post_meta(get_the_ID(), '_sitemap_solutions', true);
                            if (empty($solutions)) {
                                $solutions = array(
                                    array('title' => 'Local SEO', 'url' => home_url('/local-seo')),
                                    array('title' => 'Lead Generation', 'url' => home_url('/lead-generation')),
                                    array('title' => 'Brand Awareness', 'url' => home_url('/brand-awareness')),
                                    array('title' => 'Conversion Optimization', 'url' => home_url('/conversion-optimization')),
                                    array('title' => 'Online Reputation Management', 'url' => home_url('/reputation-management')),
                                    array('title' => 'Marketing Automation', 'url' => home_url('/marketing-automation'))
                                );
                            }
                            foreach ($solutions as $solution): ?>
                                <li><a href="<?php echo esc_url($solution['url']); ?>"><?php echo esc_html($solution['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Resources Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_resources_title', true) ?: 'Resources'); ?></h2>
                        <ul class="sitemap-list">
                            <?php 
                            $resources = get_post_meta(get_the_ID(), '_sitemap_resources', true);
                            if (empty($resources)) {
                                $resources = array(
                                    array('title' => 'Blog', 'url' => home_url('/blog')),
                                    array('title' => 'Case Studies', 'url' => home_url('/case-studies')),
                                    array('title' => 'White Papers', 'url' => home_url('/white-papers')),
                                    array('title' => 'Free SEO Audit', 'url' => home_url('/free-seo-audit')),
                                    array('title' => 'Digital Marketing Guide', 'url' => home_url('/digital-marketing-guide')),
                                    array('title' => 'Webinars', 'url' => home_url('/webinars'))
                                );
                            }
                            foreach ($resources as $resource): ?>
                                <li><a href="<?php echo esc_url($resource['url']); ?>"><?php echo esc_html($resource['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Company Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_company_title', true) ?: 'Company'); ?></h2>
                        <ul class="sitemap-list">
                            <?php 
                            $company_pages = get_post_meta(get_the_ID(), '_sitemap_company_pages', true);
                            if (empty($company_pages)) {
                                $company_pages = array(
                                    array('title' => 'About Us', 'url' => home_url('/about')),
                                    array('title' => 'Our Team', 'url' => home_url('/team')),
                                    array('title' => 'Careers', 'url' => home_url('/careers')),
                                    array('title' => 'Locations', 'url' => home_url('/locations')),
                                    array('title' => 'News & Updates', 'url' => home_url('/news')),
                                    array('title' => 'Awards & Recognition', 'url' => home_url('/awards'))
                                );
                            }
                            foreach ($company_pages as $page): ?>
                                <li><a href="<?php echo esc_url($page['url']); ?>"><?php echo esc_html($page['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Support Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_support_title', true) ?: 'Support'); ?></h2>
                        <ul class="sitemap-list">
                            <?php 
                            $support_pages = get_post_meta(get_the_ID(), '_sitemap_support_pages', true);
                            if (empty($support_pages)) {
                                $support_pages = array(
                                    array('title' => 'Contact Us', 'url' => home_url('/contact')),
                                    array('title' => 'FAQ', 'url' => home_url('/faq')),
                                    array('title' => 'Support Center', 'url' => home_url('/support')),
                                    array('title' => 'Client Portal', 'url' => home_url('/client-portal')),
                                    array('title' => 'Report a Problem', 'url' => home_url('/report-problem'))
                                );
                            }
                            foreach ($support_pages as $page): ?>
                                <li><a href="<?php echo esc_url($page['url']); ?>"><?php echo esc_html($page['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Legal Section -->
                    <div class="sitemap-section animate-on-scroll animate-fade-up">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_legal_title', true) ?: 'Legal'); ?></h2>
                        <ul class="sitemap-list">
                            <?php 
                            $legal_pages = get_post_meta(get_the_ID(), '_sitemap_legal_pages', true);
                            if (empty($legal_pages)) {
                                $legal_pages = array(
                                    array('title' => 'Privacy Policy', 'url' => home_url('/privacy-policy')),
                                    array('title' => 'Terms of Service', 'url' => home_url('/terms-of-service')),
                                    array('title' => 'Cookie Policy', 'url' => home_url('/cookie-policy')),
                                    array('title' => 'Disclaimer', 'url' => home_url('/disclaimer')),
                                    array('title' => 'Accessibility Statement', 'url' => home_url('/accessibility'))
                                );
                            }
                            foreach ($legal_pages as $page): ?>
                                <li><a href="<?php echo esc_url($page['url']); ?>"><?php echo esc_html($page['title']); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>

                <!-- Additional Information -->
                <div class="sitemap-info animate-on-scroll animate-fade-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_info_title', true) ?: 'Can\'t Find What You\'re Looking For?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_info_content', true) ?: 'If you can\'t find the page you\'re looking for, please don\'t hesitate to contact us. Our team is here to help you navigate our website and find the information you need.'); ?></p>
                    <div class="sitemap-cta">
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_sitemap_cta_url', true) ?: home_url('/contact')); ?>" class="btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_cta_text', true) ?: 'Contact Us'); ?></a>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_sitemap_search_url', true) ?: home_url('/?s=')); ?>" class="btn-outline"><?php echo esc_html(get_post_meta(get_the_ID(), '_sitemap_search_text', true) ?: 'Search Our Site'); ?></a>
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

.sitemap-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sitemap-list li {
    margin-bottom: 0.75rem;
    position: relative;
    padding-left: 1.5rem;
}

.sitemap-list li:before {
    content: "";
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/aimpro-target.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    width: 16px;
    height: 16px;
    position: absolute;
    left: 0;
    top: 0.1em;
}

.sitemap-list li:last-child {
    margin-bottom: 0;
}

.sitemap-list a {
    color: #495057;
    text-decoration: none;
    font-size: 0.95rem;
    line-height: 1.4;
    transition: color 0.3s ease;
}

.sitemap-list a:hover {
    color: #f15a25;
    text-decoration: underline;
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
