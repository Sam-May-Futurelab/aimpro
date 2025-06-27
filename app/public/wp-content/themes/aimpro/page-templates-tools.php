<?php
/**
 * Template Name: Templates & Tools Page
 * Description: Page for displaying marketing templates and tools
 */

get_header(); ?>

<main id="main" class="main-content templates-tools-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/resources'); ?>">Resources</a>
                <span class="separator">›</span>
                <span class="current">Templates & Tools</span>
            </nav>
        </div>
    </div>

    <div class="container">        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_templates_tools_header_title', true) ?: 'Templates & Tools'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_templates_tools_header_subtitle', true) ?: 'Free marketing templates and tools to accelerate your growth'); ?></p>
            </div>
        </section>        <!-- Written Content Section -->
        <section class="content-section">
            <div class="content-centre">
                <div class="written-content animate-on-scroll animate-fade-up"><div class="content-highlight">                        <h2 class="section-title" style="text-align: center;">
                            Professional Marketing <span class="highlight curly-underline">RESOURCES</span>
                            <style>
                            .content-section .section-title::after {
                                left: 50%;
                                transform: translateX(-50%);
                            }
                            </style>
                        </h2>
                        <p class="section-subtitle">Transform your marketing efforts with our comprehensive collection of professional-grade templates and tools. Whether you're looking to optimise your SEO strategy, plan effective PPC campaigns, or streamline your content marketing process, our expertly crafted resources provide the <strong class="highlight-word">foundation for success</strong>.</p>
                    </div>                    <div class="content-grid animate-on-scroll animate-stagger animate-fade-up" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin: 10px 0 40px 0 !important;">
                        <div class="content-item">
                            <div class="service-icon-container">
                                <div class="service-icon-animated">
                                    <i class="fas fa-tools" style="font-size: 24px; color: #F15A25;"></i>
                                </div>
                            </div>
                            <h3>Expert Development</h3>
                            <p>Each tool has been developed by our team of <strong class="highlight-underline">digital marketing specialists</strong> who understand the challenges modern businesses face. From detailed audit checklists to strategic planning templates, these resources eliminate guesswork and provide clear, actionable frameworks that deliver results.</p>
                        </div>
                        
                        <div class="content-item">
                            <div class="service-icon-container">
                                <div class="service-icon-animated">
                                    <i class="fas fa-rocket" style="font-size: 24px; color: #F15A25;"></i>
                                </div>
                            </div>
                            <h3>Proven Success</h3>
                            <p>Join <strong class="highlight-word">thousands of marketers</strong> who have already accelerated their growth using these proven templates. Download instantly and start implementing strategies that drive <strong class="highlight-underline">measurable improvements</strong> to your marketing performance.</p>
                        </div>
                    </div>
                      <div class="content-cta text-center" style="margin-bottom: 10px !important;">
                        <a href="#tools-section" class="btn-primary large">Explore Free Tools</a>
                    </div>
                </div>
            </div>        </section>        <!-- Tools & Templates Grid -->
        <section id="tools-section" class="tools-section" style="margin-top: 0px !important; padding-top: 5px !important;">
            <?php
            $tools = get_post_meta(get_the_ID(), '_templates_tools_items', true);
            if (!empty($tools)) : ?>
                <div class="tools-grid">
                    <?php foreach ($tools as $tool) : ?>
                        <div class="tool-card" data-category="<?php echo esc_attr($tool['category']); ?>">
                            <div class="tool-content">
                                <div class="tool-header">
                                    <?php if (!empty($tool['icon'])) : ?>
                                        <div class="tool-icon">
                                            <i class="<?php echo esc_attr($tool['icon']); ?>"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="tool-meta">
                                        <span class="tool-type"><?php echo esc_html($tool['type']); ?></span>
                                        <?php if (!empty($tool['downloads'])) : ?>
                                            <span class="download-count"><?php echo esc_html($tool['downloads']); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <h3><?php echo esc_html($tool['title']); ?></h3>
                                <p><?php echo esc_html($tool['description']); ?></p>
                                  <div class="tool-footer">
                                    <?php if (!empty($tool['file_url'])) : ?>
                                        <a href="<?php echo esc_url($tool['file_url']); ?>" class="btn-primary" download>
                                            Download Free
                                        </a>
                                    <?php else : ?>
                                        <a href="#" class="btn-primary">
                                            Download Free
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>                <!-- Default/Demo Content -->
                <div class="tools-grid">

                    <!-- Content Calendar -->
                    <div class="tool-card" data-category="content">
                        <div class="tool-content">
                            <div class="tool-header">
                                <div class="tool-icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>
                                <div class="tool-meta">
                                    <span class="tool-type">Template</span>
                                    <span class="tool-category">Content</span>
                                </div>
                            </div>
                            <h3>Content Calendar Template</h3>
                            <p>Plan and organise your content strategy with this comprehensive calendar template.</p>
                            <ul class="tool-features">
                                <li>12-month planning template</li>
                                <li>Content type categorization</li>
                                <li>Performance tracking sheet</li>
                            </ul>
                            <div class="tool-footer">
                                <a href="#" class="btn-primary">Download Free</a>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Kit -->
                    <div class="tool-card" data-category="social">
                        <div class="tool-content">
                            <div class="tool-header">
                                <div class="tool-icon">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <div class="tool-meta">
                                    <span class="tool-type">Kit</span>
                                    <span class="tool-category">Social Media</span>
                                </div>
                            </div>
                            <h3>Social Media Starter Kit</h3>
                            <p>Complete social media templates and guidelines to boost your online presence.</p>
                            <ul class="tool-features">
                                <li>Post templates for all platforms</li>
                                <li>Content planning worksheets</li>
                                <li>Hashtag research guide</li>
                            </ul>
                            <div class="tool-footer">
                                <a href="#" class="btn-primary">Download Free</a>
                            </div>
                        </div>
                    </div>
                </div>            <?php endif; ?>
        </section>

        <!-- Featured Resources Section -->
        <?php
        $featured_title = get_post_meta(get_the_ID(), '_templates_tools_featured_title', true);
        $featured_resources = get_post_meta(get_the_ID(), '_templates_tools_featured_resources', true);
        if (!empty($featured_resources)) : ?>
            <section class="featured-resources-section">                <div class="content-centre">                    <h2 class="section-title" style="text-align: center;">
                        <?php echo esc_html($featured_title ?: 'Most Popular Resources'); ?>
                        <style>
                        .featured-resources-section .section-title::after {
                            left: 50%;
                            transform: translateX(-50%);
                        }
                        </style>
                    </h2><div class="services-grid animate-on-scroll animate-stagger animate-fade-up">
                        <?php foreach ($featured_resources as $resource) : ?>
                            <div class="service-item">
                                <div class="service-header">
                                    <?php if (!empty($resource['icon'])) : ?>
                                        <div class="service-icon">
                                            <i class="<?php echo esc_attr($resource['icon']); ?>"></i>
                                        </div>
                                    <?php endif; ?>                                    <?php if (!empty($resource['downloads'])) : ?>
                                        <span class="download-count"><?php echo esc_html($resource['downloads']); ?></span>
                                    <?php endif; ?>
                                </div>
                                <h3><?php echo esc_html($resource['title']); ?></h3>
                                <p><?php echo esc_html($resource['description']); ?></p>
                                <div class="service-cta">
                                    <?php if (!empty($resource['file_url'])) : ?>
                                        <a href="<?php echo esc_url($resource['file_url']); ?>" class="btn-primary" download>
                                            Download Now
                                        </a>
                                    <?php else : ?>
                                        <a href="#" class="btn-primary">
                                            Download Now
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>            </section>
        <?php endif; ?>        <!-- Benefits Section -->
        <section class="benefits-section">
            <div class="content-centre">
                <h2 class="section-title text-center">Why Choose Our <span class="highlight curly-underline">TOOLS</span>?
                    <style>
                    .benefits-section .section-title::after {
                        left: 50%;
                        transform: translateX(-50%);
                    }
                    </style>
                </h2>
                <p class="section-subtitle">Professional-grade resources trusted by thousands of marketers worldwide</p>
                  <div class="benefits-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-top: 40px;">
                    <div class="benefit-item" style="text-align: center;">
                        <div class="service-icon-container" style="display: flex; justify-content: center; margin-bottom: 1rem;">
                            <div class="service-icon-animated">
                                <i class="fas fa-rocket"></i>
                            </div>
                        </div>
                        <h3>Ready to Use</h3>
                        <p>No complex setup required. Download and start using immediately to accelerate your marketing efforts.</p>
                    </div>
                    
                    <div class="benefit-item" style="text-align: center;">
                        <div class="service-icon-container" style="display: flex; justify-content: center; margin-bottom: 1rem;">
                            <div class="service-icon-animated">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <h3>Expert Crafted</h3>
                        <p>Created by our team of digital marketing experts with 10+ years of industry experience.</p>
                    </div>
                    
                    <div class="benefit-item" style="text-align: center;">
                        <div class="service-icon-container" style="display: flex; justify-content: center; margin-bottom: 1rem;">
                            <div class="service-icon-animated">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <h3>Proven Results</h3>
                        <p>Used by 5,000+ businesses to improve their marketing performance and ROI.</p>
                    </div>
                    
                    <div class="benefit-item" style="text-align: center;">
                        <div class="service-icon-container" style="display: flex; justify-content: center; margin-bottom: 1rem;">
                            <div class="service-icon-animated">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                        </div>
                        <h3>Regular Updates</h3>
                        <p>Our templates are regularly updated to reflect the latest marketing trends and best practices.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Proof Section -->
        <section class="social-proof-section">
            <div class="content-centre">
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">15,000+</div>
                        <div class="stat-label">Downloads</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5,000+</div>
                        <div class="stat-label">Happy Users</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Free Tools</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">4.9/5</div>
                        <div class="stat-label">User Rating</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter/CTA Section -->
        <?php
        $cta_title = get_post_meta(get_the_ID(), '_templates_tools_cta_title', true);
        $cta_content = get_post_meta(get_the_ID(), '_templates_tools_cta_content', true);
        if ($cta_title || $cta_content) : ?>
            <section class="newsletter-cta-section">
                <div class="cta-content">
                    <h2><?php echo esc_html($cta_title ?: 'Get New Tools First'); ?></h2>
                    <p><?php echo esc_html($cta_content ?: 'Be the first to access our latest templates and tools delivered straight to your inbox.'); ?></p>
                    
                    <!-- Newsletter Signup Form -->
                    <div class="newsletter-form-wrapper">
                        <form class="newsletter-form" method="post">
                            <div class="form-group">
                                <input type="text" name="subscriber_name" placeholder="Enter your name" required>
                                <input type="email" name="subscriber_email" placeholder="Enter your email address" required>
                                <button type="submit" class="btn-primary">
                                    <span class="button-text">Get Free Tools</span>
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
                            <p class="privacy-note">We respect your privacy. Unsubscribe anytime.</p>
                        </form>
                        
                        <?php include get_template_directory() . '/includes/newsletter-popup.php'; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Call to Action Section -->
        <section class="cta-section">
            <div class="cta-content">
                <h2>Need Custom Marketing Solutions?</h2>
                <p>Get personalised marketing tools and strategies tailored to your business needs.</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-secondary">Get Custom Solution</a>
            </div>
        </section>
    </div>
</main>

<!-- Mobile Responsive Styles for Templates & Tools Page -->
<style>
/* Default styles for Templates & Tools page */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    margin: 3rem 0;
    padding: 2rem 0;
}

.stat-item {
    text-align: center;
    padding: 1.5rem 1rem;
    background: #f8f9fa;
    border-radius: 12px;
    border: 1px solid #e9ecef;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #f15a25;
    margin-bottom: 0.5rem;
    line-height: 1;
}

.stat-label {
    font-size: 1rem;
    color: #6c757d;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Mobile optimizations for templates and tools page */
@media (max-width: 768px) {
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
    
    /* Content section mobile optimization */
    .content-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
        margin: 1.5rem 0 2rem 0 !important;
    }
    
    .content-item {
        text-align: center !important;
        padding: 1rem !important;
    }
    
    .content-item .service-icon-container {
        display: flex !important;
        justify-content: center !important;
        margin-bottom: 1rem !important;
    }
    
    .content-item .service-icon-animated {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 60px !important;
        height: 60px !important;
        background: rgba(241, 90, 37, 0.1) !important;
        border-radius: 50% !important;
        margin: 0 auto !important;
    }
    
    .content-item .service-icon-animated i {
        font-size: 24px !important;
        color: #F15A25 !important;
    }
    
    .content-item h3 {
        font-size: 1.2rem !important;
        margin-bottom: 0.75rem !important;
    }
    
    .content-item p {
        font-size: 0.9rem !important;
        line-height: 1.5 !important;
    }
    
    /* Tools grid mobile optimization */
    .tools-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
        padding: 1rem !important;
    }
    
    .tool-card {
        width: 100% !important;
        margin-bottom: 1rem !important;
        padding: 0 !important;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1) !important;
        border-radius: 12px !important;
        overflow: hidden !important;
    }
    
    .tool-content {
        padding: 1.5rem 1rem !important;
        width: 100% !important;
    }
    
    .tool-header {
        display: flex !important;
        justify-content: space-between !important;
        align-items: flex-start !important;
        margin-bottom: 1rem !important;
        flex-wrap: wrap !important;
        gap: 0.5rem !important;
    }
    
    .tool-icon {
        font-size: 1.5rem !important;
        margin-bottom: 0.5rem !important;
        color: #F15A25 !important;
    }
    
    /* Fix icon visibility on mobile - make icons white on mobile */
    @media (max-width: 768px) {
        .tool-icon {
            color: #ffffff !important;
        }
        
        .tool-icon i {
            color: #ffffff !important;
        }
    }
    
    .tool-meta {
        display: flex !important;
        flex-direction: column !important;
        align-items: flex-end !important;
        gap: 0.25rem !important;
        text-align: right !important;
    }
    
    .tool-type {
        background: #F15A25 !important;
        color: white !important;
        padding: 0.25rem 0.5rem !important;
        border-radius: 4px !important;
        font-size: 0.7rem !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
    }
    
    .tool-category {
        font-size: 0.7rem !important;
        color: #666 !important;
        font-weight: 500 !important;
    }
    
    .download-count {
        font-size: 0.7rem !important;
        color: #666 !important;
        font-weight: 500 !important;
    }
    
    .tool-card h3 {
        font-size: 1.1rem !important;
        line-height: 1.3 !important;
        margin-bottom: 0.75rem !important;
        color: #333 !important;
        font-weight: 600 !important;
    }
    
    .tool-card p {
        font-size: 0.9rem !important;
        line-height: 1.4 !important;
        color: #666 !important;
        margin-bottom: 1rem !important;
    }
    
    .tool-features {
        list-style: none !important;
        padding: 0 !important;
        margin: 1rem 0 !important;
    }
    
    .tool-features li {
        font-size: 0.8rem !important;
        padding: 0.25rem 0 !important;
        color: #666 !important;
        position: relative !important;
        padding-left: 1rem !important;
    }
    
    .tool-features li:before {
        content: "✓" !important;
        position: absolute !important;
        left: 0 !important;
        color: #F15A25 !important;
        font-weight: bold !important;
    }
    
    .tool-footer {
        margin-top: 1.5rem !important;
        text-align: center !important;
    }
    
    .tool-footer .btn-primary {
        width: 100% !important;
        padding: 0.75rem 1rem !important;
        font-size: 0.9rem !important;
        text-align: center !important;
        display: block !important;
    }
    
    /* Benefits grid mobile optimization */
    .benefits-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
        margin-top: 2rem !important;
    }
    
    .benefit-item {
        text-align: center !important;
        padding: 1rem !important;
    }
    
    .benefit-item h3 {
        font-size: 1.1rem !important;
        margin-bottom: 0.75rem !important;
    }
    
    .benefit-item p {
        font-size: 0.9rem !important;
        line-height: 1.4 !important;
    }
    
    /* Stats grid mobile optimization */
    .stats-grid {
        display: grid !important;
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 1rem !important;
        margin: 2rem 0 !important;
        padding: 1rem 0 !important;
    }
    
    .stat-item {
        text-align: center !important;
        padding: 1.5rem 1rem !important;
        background: #f8f9fa !important;
        border-radius: 12px !important;
        border: 1px solid #e9ecef !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
        transition: none !important;
        transform: none !important;
    }
    
    .stat-item:hover {
        transform: none !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
    }
    
    .stat-number {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #f15a25 !important;
        margin-bottom: 0.5rem !important;
        line-height: 1 !important;
    }
    
    .stat-label {
        font-size: 0.85rem !important;
        color: #6c757d !important;
        font-weight: 500 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.3px !important;
    }
    
    /* Newsletter form mobile optimization */
    .newsletter-form .form-group {
        flex-direction: column !important;
        gap: 0.75rem !important;
    }
    
    .newsletter-form input {
        width: 100% !important;
        margin-bottom: 0.5rem !important;
    }
    
    .newsletter-form button {
        width: 100% !important;
        padding: 0.75rem !important;
    }
    
    /* Featured resources mobile optimization */
    .services-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .service-item {
        padding: 1.5rem 1rem !important;
        text-align: center !important;
    }
}

@media (max-width: 480px) {
    .tools-grid {
        padding: 0.5rem !important;
    }
    
    .tool-content {
        padding: 1rem 0.75rem !important;
    }
    
    .tool-card h3 {
        font-size: 1rem !important;
    }
    
    .tool-card p {
        font-size: 0.85rem !important;
    }
    
    .tool-features li {
        font-size: 0.75rem !important;
    }
    
    .stats-grid {
        grid-template-columns: 1fr !important;
        gap: 1.25rem !important;
        margin: 1.5rem 0 !important;
        padding: 1rem 0 !important;
    }
    
    .stat-item {
        padding: 1.25rem 1rem !important;
        margin: 0 auto !important;
        max-width: 280px !important;
        width: 100% !important;
    }
    
    .stat-number {
        font-size: 1.8rem !important;
    }
    
    .stat-label {
        font-size: 0.8rem !important;
    }
    
    .page-header-content h1 {
        font-size: 1.6rem !important;
    }
}
</style>

<script>
// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const toolCards = document.querySelectorAll('.tool-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter cards
            toolCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php get_footer(); ?>
