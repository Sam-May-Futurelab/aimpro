<?php
/**
 * Template for displaying single blog posts
 * Includes conversion-focused sidebar with lead magnets
 */

get_header(); ?>

<main id="primary" class="blog-post-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/blog'); ?>">Blog</a>
                <span class="separator">›</span>
                <span class="current"><?php the_title(); ?></span>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="blog-layout">
            <!-- Main Content Area -->
            <article class="blog-content">
                <?php while (have_posts()) : the_post(); ?>
                    
                    <!-- Blog Header -->
                    <header class="blog-header">
                        <h1 class="blog-title"><?php the_title(); ?></h1>
                        
                        <div class="blog-meta">
                            <div class="meta-item">
                                <i class="fas fa-calendar"></i>
                                <span><?php echo get_the_date('F j, Y'); ?></span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-user"></i>
                                <span><?php the_author(); ?></span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-folder"></i>
                                <span><?php the_category(', '); ?></span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span><?php echo aimpro_estimated_reading_time(get_the_content()); ?> min read</span>
                            </div>
                        </div>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="featured-image">
                                <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                            </div>
                        <?php endif; ?>
                    </header>

                    <!-- Blog Content -->
                    <div class="blog-body">
                        <?php the_content(); ?>
                    </div>

                    <!-- In-Content CTA (appears after first few paragraphs) -->
                    <div class="in-content-cta">
                        <div class="cta-box">
                            <div class="cta-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h3>Ready to Accelerate Your Growth?</h3>
                            <p>Get a free digital marketing audit and discover opportunities to boost your results.</p>
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free Audit</a>
                        </div>
                    </div>

                    <!-- Tags -->
                    <?php if (has_tag()) : ?>
                        <div class="blog-tags">
                            <span class="tags-label">Tags:</span>
                            <?php the_tags('', '', ''); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Author Bio -->
                    <div class="author-bio">
                        <div class="author-avatar">
                            <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                        </div>
                        <div class="author-info">
                            <h4>About <?php the_author(); ?></h4>
                            <p><?php echo get_the_author_meta('description') ?: 'Digital marketing expert at Aimpro Digital, specializing in data-driven strategies that deliver measurable results for UK businesses.'; ?></p>
                            <div class="author-social">
                                <a href="<?php echo home_url('/about'); ?>" class="author-link">View Profile</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

                <!-- Bottom CTA Section -->
                <section class="blog-bottom-cta">
                    <div class="cta-content">
                        <h2>Want More Marketing Insights?</h2>
                        <p>Subscribe to our newsletter for the latest digital marketing strategies and industry insights delivered weekly.</p>
                        <div class="cta-buttons">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Subscribe Now</a>
                            <a href="<?php echo home_url('/services'); ?>" class="btn-outline">Our Services</a>
                        </div>
                    </div>
                </section>

                <!-- Related Posts -->
                <?php 
                $related_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID()),
                    'meta_query' => array(
                        array(
                            'key' => '_thumbnail_id',
                            'compare' => 'EXISTS'
                        )
                    )
                ));
                
                if ($related_posts->have_posts()) : ?>
                    <section class="related-posts">
                        <h2>Related Articles</h2>
                        <div class="related-posts-grid">
                            <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                                <article class="related-post-item">
                                    <div class="post-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="post-meta">
                                            <span><?php echo get_the_date('M j, Y'); ?></span>
                                            <span>•</span>
                                            <span><?php echo aimpro_estimated_reading_time(get_the_content()); ?> min read</span>
                                        </div>
                                        <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="read-more">Read More →</a>
                                    </div>
                                </article>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </section>
                <?php endif; ?>
            </article>

            <!-- Conversion Sidebar -->
            <aside class="blog-sidebar">
                <!-- Lead Magnet 1: SEO Guide -->
                <div class="lead-magnet">
                    <div class="magnet-header">
                        <div class="magnet-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <span class="magnet-badge">Free Guide</span>
                    </div>
                    <h3>Complete SEO Checklist for 2025</h3>
                    <p>Get our comprehensive 50-point SEO checklist to boost your search rankings and drive more organic traffic.</p>
                    <ul class="magnet-benefits">
                        <li>✓ Technical SEO audit points</li>
                        <li>✓ Content optimization tips</li>
                        <li>✓ Local SEO strategies</li>
                    </ul>
                    <form class="magnet-form" action="#" method="post">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit" class="btn-primary">Download Free</button>
                        <input type="hidden" name="magnet_type" value="seo_checklist">
                    </form>
                    <p class="privacy-note">We respect your privacy. Unsubscribe anytime.</p>
                </div>

                <!-- Lead Magnet 2: PPC Calculator -->
                <div class="lead-magnet">
                    <div class="magnet-header">
                        <div class="magnet-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <span class="magnet-badge">Free Tool</span>
                    </div>
                    <h3>PPC ROI Calculator</h3>
                    <p>Calculate your pay-per-click advertising return on investment and optimize your ad spend for maximum results.</p>
                    <ul class="magnet-benefits">
                        <li>✓ Instant ROI calculations</li>
                        <li>✓ Budget optimization tips</li>
                        <li>✓ Performance benchmarks</li>
                    </ul>
                    <a href="#ppc-calculator" class="btn-primary magnet-cta">Use Calculator</a>
                </div>

                <!-- Lead Magnet 3: Marketing Audit -->
                <div class="lead-magnet featured-magnet">
                    <div class="magnet-header">
                        <div class="magnet-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <span class="magnet-badge">Most Popular</span>
                    </div>
                    <h3>Free Marketing Audit</h3>
                    <p>Get a comprehensive analysis of your digital marketing performance with actionable recommendations.</p>
                    <ul class="magnet-benefits">
                        <li>✓ Website performance review</li>
                        <li>✓ SEO opportunity analysis</li>
                        <li>✓ Competitor comparison</li>
                        <li>✓ Custom improvement plan</li>
                    </ul>                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary magnet-cta">Get Free Audit</a>
                    <div class="social-proof">
                        <p><strong>500+</strong> businesses improved their ROI</p>
                    </div>
                </div>

                <!-- Newsletter Signup -->
                <div class="sidebar-newsletter">
                    <h3>Stay Updated</h3>
                    <p>Get weekly marketing insights and strategies delivered to your inbox.</p>
                    <form class="newsletter-form" action="#" method="post">
                        <input type="email" name="email" placeholder="Enter your email" required>
                        <button type="submit" class="btn-primary">Subscribe</button>
                    </form>
                </div>

                <!-- Popular Posts -->
                <?php 
                $popular_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                ));
                
                if ($popular_posts->have_posts()) : ?>
                    <div class="popular-posts">
                        <h3>Popular Articles</h3>
                        <div class="popular-posts-list">
                            <?php while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
                                <article class="popular-post-item">
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            <?php else : ?>
                                                <div class="no-image">
                                                    <i class="fas fa-file-alt"></i>
                                                </div>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h4><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 8); ?></a></h4>
                                        <div class="post-meta">
                                            <span><?php echo get_the_date('M j'); ?></span>
                                            <span>•</span>
                                            <span><?php echo aimpro_estimated_reading_time(get_the_content()); ?> min</span>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>
