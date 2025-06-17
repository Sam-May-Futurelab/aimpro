<?php
/**
 * Template Name: Templates & Tools Page
 * Description: Page for displaying marketing templates and tools
 */

get_header(); ?>

<main id="main" class="main-content templates-tools-page">
    <div class="container">        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_templates_tools_header_title', true) ?: 'Templates & Tools'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_templates_tools_header_subtitle', true) ?: 'Free marketing templates and tools to accelerate your growth'); ?></p>
            </div>
        </section>        <!-- Written Content Section -->
        <section class="content-section">
            <div class="content-center">
                <div class="written-content">
                    <div class="content-highlight">
                        <h2 class="section-title">Professional Marketing <span class="highlight curly-underline">RESOURCES</span></h2>
                        <p class="section-subtitle">Transform your marketing efforts with our comprehensive collection of professional-grade templates and tools. Whether you're looking to optimize your SEO strategy, plan effective PPC campaigns, or streamline your content marketing process, our expertly crafted resources provide the <strong class="highlight-word">foundation for success</strong>.</p>
                    </div>
                    
                    <div class="content-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin: 40px 0;">
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
                    
                    <div class="content-cta">
                        <a href="#tools-section" class="btn-primary large">Explore Free Tools</a>
                    </div>
                </div>
            </div>
        </section><!-- Introduction Section -->
        <?php 
        $intro_title = get_post_meta(get_the_ID(), '_templates_tools_intro_title', true);
        $intro_content = get_post_meta(get_the_ID(), '_templates_tools_intro_content', true);
        if ($intro_title || $intro_content) : ?>
            <section class="intro-section">
                <div class="content-center">
                    <?php if ($intro_title) : ?>
                        <h2 class="section-title"><?php echo esc_html($intro_title); ?></h2>
                    <?php endif; ?>
                    <?php if ($intro_content) : ?>
                        <div class="intro-content">
                            <?php echo wp_kses_post($intro_content); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>

        <!-- Filter Categories -->
        <?php
        $categories = get_post_meta(get_the_ID(), '_templates_tools_categories', true);
        if (!empty($categories)) : ?>
            <section class="filter-section">
                <div class="filter-buttons">
                    <?php foreach ($categories as $category) : ?>
                        <button class="filter-btn <?php echo $category['slug'] === 'all' ? 'active' : ''; ?>" data-filter="<?php echo esc_attr($category['slug']); ?>">
                            <?php echo esc_html($category['name']); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>        <!-- Tools & Templates Grid -->
        <section id="tools-section" class="tools-section">
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
                                    <?php if (!empty($tool['file'])) : ?>
                                        <a href="<?php echo esc_url($tool['file']); ?>" class="btn-primary" download>
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
            <?php else : ?>
                <!-- Default/Demo Content -->
                <div class="tools-grid">
                    <!-- SEO Template -->
                    <div class="tool-card" data-category="seo">
                        <div class="tool-content">
                            <div class="tool-header">
                                <div class="tool-icon">
                                    <i class="fas fa-search"></i>
                                </div>
                                <div class="tool-meta">
                                    <span class="tool-type">Template</span>
                                    <span class="tool-category">SEO</span>
                                </div>
                            </div>
                            <h3>SEO Audit Checklist</h3>
                            <p>Comprehensive 50-point SEO audit checklist to optimize your website for search engines.</p>
                            <ul class="tool-features">
                                <li>Technical SEO audit points</li>
                                <li>Content optimization checklist</li>
                                <li>Local SEO recommendations</li>
                            </ul>
                            <div class="tool-footer">
                                <a href="#" class="btn-primary">Download Free</a>
                            </div>
                        </div>
                    </div>

                    <!-- PPC Calculator -->
                    <div class="tool-card" data-category="ppc">
                        <div class="tool-content">
                            <div class="tool-header">
                                <div class="tool-icon">
                                    <i class="fas fa-calculator"></i>
                                </div>
                                <div class="tool-meta">
                                    <span class="tool-type">Calculator</span>
                                    <span class="tool-category">PPC</span>
                                </div>
                            </div>
                            <h3>PPC ROI Calculator</h3>
                            <p>Calculate your pay-per-click advertising return on investment and optimize your ad spend.</p>
                            <ul class="tool-features">
                                <li>Instant ROI calculations</li>
                                <li>Budget optimization tips</li>
                                <li>Performance benchmarks</li>
                            </ul>
                            <div class="tool-footer">
                                <a href="#" class="btn-primary">Use Calculator</a>
                            </div>
                        </div>
                    </div>

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
                            <p>Plan and organize your content strategy with this comprehensive calendar template.</p>
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
            <section class="featured-resources-section">
                <div class="content-center">
                    <h2 class="section-title"><?php echo esc_html($featured_title ?: 'Most Popular Resources'); ?></h2>
                    <div class="featured-resources-grid">
                        <?php foreach ($featured_resources as $resource) : ?>
                            <div class="featured-resource">
                                <div class="resource-header">
                                    <?php if (!empty($resource['icon'])) : ?>
                                        <div class="resource-icon">
                                            <i class="<?php echo esc_attr($resource['icon']); ?>"></i>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($resource['downloads'])) : ?>
                                        <span class="download-badge"><?php echo esc_html($resource['downloads']); ?></span>
                                    <?php endif; ?>
                                </div>
                                <h3><?php echo esc_html($resource['title']); ?></h3>
                                <p><?php echo esc_html($resource['description']); ?></p>
                                <div class="resource-footer">
                                    <?php if (!empty($resource['file'])) : ?>
                                        <a href="<?php echo esc_url($resource['file']); ?>" class="btn-primary" download>
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
            <div class="content-center">
                <h2 class="section-title">Why Choose Our <span class="highlight curly-underline">TOOLS</span>?</h2>
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
            <div class="content-center">
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
                <p>Get personalized marketing tools and strategies tailored to your business needs.</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary large">Get Custom Solution</a>
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
