<?php
/**
 * Template Name: Templates & Tools Page
 * Description: Free templates, tools, and resources
 */

get_header(); 

// Get meta values
$header_title = get_post_meta(get_the_ID(), '_templates_tools_header_title', true) ?: 'Templates & Tools';
$header_subtitle = get_post_meta(get_the_ID(), '_templates_tools_header_subtitle', true) ?: 'Free resources to accelerate your digital marketing success';
$intro_title = get_post_meta(get_the_ID(), '_templates_tools_intro_title', true) ?: 'Professional-Grade Tools & Templates';
$intro_content = get_post_meta(get_the_ID(), '_templates_tools_intro_content', true) ?: 'Access our curated collection of marketing tools, templates, and resources that we use internally to deliver exceptional results for our clients. All resources are completely free and designed to help you implement best practices immediately.';

$categories = get_post_meta(get_the_ID(), '_templates_tools_categories', true);
if (empty($categories)) {
    $categories = array(
        array('slug' => 'all', 'name' => 'All Tools'),
        array('slug' => 'seo', 'name' => 'SEO'),
        array('slug' => 'ppc', 'name' => 'PPC'),
        array('slug' => 'content', 'name' => 'Content Marketing'),
        array('slug' => 'social', 'name' => 'Social Media'),
        array('slug' => 'analytics', 'name' => 'Analytics'),
        array('slug' => 'strategy', 'name' => 'Strategy')
    );
}

$tools = get_post_meta(get_the_ID(), '_templates_tools_items', true);
if (empty($tools)) {
    // Default tools when no meta data is set
    $tools = array(
        array(
            'title' => 'SEO Audit Checklist',
            'description' => 'Comprehensive 50-point checklist to audit your website\'s SEO performance and identify optimization opportunities.',
            'category' => 'seo',
            'type' => 'PDF Template',
            'downloads' => '2,540 downloads',
            'icon' => 'fas fa-clipboard-check',
            'file_url' => ''
        ),
        array(
            'title' => 'Keyword Research Template',
            'description' => 'Excel template for organizing keyword research, tracking search volumes, competition, and content opportunities.',
            'category' => 'seo',
            'type' => 'Excel Template',
            'downloads' => '1,890 downloads',
            'icon' => 'fas fa-search',
            'file_url' => ''
        ),
        array(
            'title' => 'Google Ads Campaign Planner',
            'description' => 'Structured template for planning Google Ads campaigns, including budget allocation and keyword mapping.',
            'category' => 'ppc',
            'type' => 'Google Sheets',
            'downloads' => '1,670 downloads',
            'icon' => 'fab fa-google',
            'file_url' => ''
        ),
        array(
            'title' => 'Content Calendar Template',
            'description' => '12-month editorial calendar template for planning, organizing, and tracking your content marketing efforts.',
            'category' => 'content',
            'type' => 'Excel Template',
            'downloads' => '4,120 downloads',
            'icon' => 'fas fa-calendar-alt',
            'file_url' => ''
        ),
        array(
            'title' => 'Blog Post Optimization Guide',
            'description' => 'Step-by-step checklist for optimizing blog posts for SEO, readability, and conversion potential.',
            'category' => 'content',
            'type' => 'PDF Guide',
            'downloads' => '2,890 downloads',
            'icon' => 'fas fa-edit',
            'file_url' => ''
        ),
        array(
            'title' => 'Social Media Posting Schedule',
            'description' => 'Optimal posting times and frequency guide for all major social media platforms to maximize engagement.',
            'category' => 'social',
            'type' => 'PDF Guide',
            'downloads' => '3,450 downloads',
            'icon' => 'fas fa-share-alt',
            'file_url' => ''
        ),
        array(
            'title' => 'GA4 Setup Checklist',
            'description' => 'Complete checklist for setting up Google Analytics 4, including essential configurations and tracking setup.',
            'category' => 'analytics',
            'type' => 'PDF Checklist',
            'downloads' => '1,940 downloads',
            'icon' => 'fab fa-google',
            'file_url' => ''
        ),
        array(
            'title' => 'Marketing Dashboard Template',
            'description' => 'Google Data Studio template for creating comprehensive marketing performance dashboards with KPI tracking.',
            'category' => 'analytics',
            'type' => 'Data Studio Template',
            'downloads' => '980 downloads',
            'icon' => 'fas fa-chart-bar',
            'file_url' => ''
        ),
        array(
            'title' => 'Digital Marketing Strategy Template',
            'description' => 'Comprehensive framework for developing a complete digital marketing strategy, including goals, tactics, and KPIs.',
            'category' => 'strategy',
            'type' => 'PowerPoint Template',
            'downloads' => '2,160 downloads',
            'icon' => 'fas fa-bullseye',
            'file_url' => ''
        )
    );
}
$featured_title = get_post_meta(get_the_ID(), '_templates_tools_featured_title', true) ?: 'Most Popular Resources';
$featured_resources = get_post_meta(get_the_ID(), '_templates_tools_featured_resources', true);
if (empty($featured_resources)) {
    // Default featured resources when no meta data is set
    $featured_resources = array(
        array(
            'title' => 'Complete SEO Audit Checklist',
            'description' => 'Our most comprehensive SEO audit checklist with 50+ optimization points.',
            'downloads' => '2,540 downloads',
            'icon' => 'fas fa-clipboard-list',
            'file_url' => ''
        ),
        array(
            'title' => 'Content Calendar Template',
            'description' => '12-month content planning template used by 1000+ marketers.',
            'downloads' => '4,120 downloads',
            'icon' => 'fas fa-chart-bar',
            'file_url' => ''
        ),
        array(
            'title' => 'PPC Campaign Planner',
            'description' => 'Strategic planning template for Google Ads and Facebook campaigns.',
            'downloads' => '1,670 downloads',
            'icon' => 'fas fa-crosshairs',
            'file_url' => ''
        )
    );
}
$cta_title = get_post_meta(get_the_ID(), '_templates_tools_cta_title', true) ?: 'Get New Tools First';
$cta_content = get_post_meta(get_the_ID(), '_templates_tools_cta_content', true) ?: 'Be the first to access our latest templates and tools. We release new resources monthly.';
?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo esc_html($header_title); ?></h1>
                <p class="page-subtitle"><?php echo esc_html($header_subtitle); ?></p>
            </div>
        </section>

        <!-- Tools Introduction -->
        <section class="tools-intro">
            <div class="section-content">
                <div class="intro-content">
                    <h2><?php echo esc_html($intro_title); ?></h2>
                    <p><?php echo esc_html($intro_content); ?></p>
                </div>
            </div>
        </section>

        <!-- Tool Categories -->
        <section class="tools-categories">
            <div class="section-content">
                <?php if (!empty($categories)): ?>
                <div class="category-filters">
                    <?php foreach ($categories as $index => $category): ?>
                        <button class="filter-btn <?php echo $index === 0 ? 'active' : ''; ?>" data-category="<?php echo esc_attr($category['slug']); ?>">
                            <?php echo esc_html($category['name']); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>                <?php if (!empty($tools)): ?>
                <div class="tools-grid">
                    <?php foreach ($tools as $tool): ?>
                        <div class="tool-card" data-category="<?php echo esc_attr($tool['category']); ?>">
                            <div class="tool-icon">
                                <i class="<?php echo esc_attr($tool['icon'] ?: 'fas fa-file'); ?>"></i>
                            </div>
                            <div class="tool-content">
                                <h3><?php echo esc_html($tool['title']); ?></h3>
                                <p><?php echo esc_html($tool['description']); ?></p>
                                <div class="tool-meta">
                                    <?php if (!empty($tool['type'])): ?>
                                        <span class="tool-type"><?php echo esc_html($tool['type']); ?></span>
                                    <?php endif; ?>
                                    <?php if (!empty($tool['downloads'])): ?>
                                        <span class="tool-downloads"><?php echo esc_html($tool['downloads']); ?></span>
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($tool['file_url'])): ?>
                                    <a href="<?php echo esc_url($tool['file_url']); ?>" class="tool-download" target="_blank">Download Free</a>
                                <?php else: ?>
                                    <a href="#" class="tool-download" onclick="alert('File not available'); return false;">Download Free</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </section>        <!-- Featured Resources -->
        <section class="featured-resources">
            <div class="section-content">
                <h2><?php echo esc_html($featured_title); ?></h2>
                <div class="featured-list">
                    <?php foreach ($featured_resources as $featured): ?>
                        <div class="featured-resource">
                            <div class="resource-icon">
                                <i class="<?php echo esc_attr($featured['icon'] ?: 'fas fa-file'); ?>"></i>
                            </div>
                            <div class="resource-info">
                                <h3><?php echo esc_html($featured['title']); ?></h3>
                                <p><?php echo esc_html($featured['description']); ?></p>
                                <?php if (!empty($featured['downloads'])): ?>
                                    <span class="download-count"><?php echo esc_html($featured['downloads']); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="resource-actions">
                                <?php if (!empty($featured['file_url'])): ?>
                                    <a href="<?php echo esc_url($featured['file_url']); ?>" class="resource-download" target="_blank">Download</a>
                                <?php else: ?>
                                    <a href="#" class="resource-download" onclick="alert('File not available'); return false;">Download</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Newsletter & CTA -->
        <section class="tools-cta">
            <div class="section-content">
                <h2><?php echo esc_html($cta_title); ?></h2>
                <p><?php echo esc_html($cta_content); ?></p>
                <form class="newsletter-form" action="#" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary">Get Updates</button>
                    </div>
                </form>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
