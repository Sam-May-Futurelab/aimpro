<?php
/**
 * Template Name: Templates & Tools Page
 * Description: Page for displaying marketing templates and tools
 */

get_header(); ?>

<main id="main" class="main-content templates-tools-page">
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
                            <div class="content-icon">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h3>Expert Development</h3>
                            <p>Each tool has been developed by our team of <strong class="highlight-underline">digital marketing specialists</strong> who understand the challenges modern businesses face. From detailed audit checklists to strategic planning templates, these resources eliminate guesswork and provide clear, actionable frameworks that deliver results.</p>
                        </div>
                        
                        <div class="content-item">
                            <div class="content-icon">
                                <i class="fas fa-rocket"></i>
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
            <section class="featured-resources-section">                <div class="content-centre">
                    <h2 class="section-title" style="text-align: centre;">
                        <?php echo esc_html($featured_title ?: 'Most Popular Resources'); ?>
                        <style>
                        .featured-resources-section .section-title::after {
                            left: 50%;
                            transform: translateX(-50%);
                        }
                        </style>
                    </h2>                    <div class="services-grid animate-on-scroll animate-stagger animate-fade-up">
                        <?php foreach ($featured_resources as $resource) : ?>
                            <div class="service-item">
                                <div class="service-header">
                                    <?php if (!empty($resource['icon'])) : ?>
                                        <div class="service-icon">
                                            <i class="<?php echo esc_attr($resource['icon']); ?>"></i>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($resource['downloads'])) : ?>
                                        <span class="download-count"><?php echo esc_html($resource['downloads']); ?> downloads</span>
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
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Ready to Use</h3>
                        <p>No complex setup required. Download and start using immediately to accelerate your marketing efforts.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Expert Crafted</h3>
                        <p>Created by our team of digital marketing experts with 10+ years of industry experience.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Proven Results</h3>
                        <p>Used by 5,000+ businesses to improve their marketing performance and ROI.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-sync-alt"></i>
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
                        <form class="newsletter-form" action="#" method="post">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email address" required>
                                <button type="submit" class="btn-primary">Get Free Tools</button>
                            </div>
                            <p class="privacy-note">We respect your privacy. Unsubscribe anytime.</p>
                        </form>
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
