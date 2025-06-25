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
                        <div class="featured-image-container" style="width: 100%; max-width: 800px; margin: 2rem auto 1rem auto; overflow: hidden; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                            <?php 
                            // Get the featured image with clean attributes and proper sizing
                            the_post_thumbnail('large', array(
                                'alt' => get_the_title(),
                                'class' => 'featured-image-clean',
                                'loading' => 'lazy',
                                'style' => 'width: 100%; height: auto; max-height: 400px; object-fit: cover; display: block;'
                            )); 
                            ?>
                        </div>
                        <?php endif; ?>
                    </header>                    <!-- Blog Content -->
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
                    </div>                    <!-- About the Author Section -->
                    <?php 
                    // Get author data (global or post-specific)
                    $author_data = get_author_data(get_the_ID());
                    ?>
                    <div class="about-author">
                        <div class="author-card">                            <div class="author-image">
                                <img src="<?php echo esc_url($author_data['image_url']); ?>" alt="<?php echo esc_attr($author_data['name']); ?> - Digital Marketing Expert" loading="lazy">
                            </div>
                            <div class="author-content">
                                <h3 class="author-name">About <?php echo esc_html($author_data['name']); ?></h3>
                                <p class="author-title"><?php echo esc_html($author_data['title']); ?></p>                                <p class="author-bio">
                                    <?php echo wp_kses_post($author_data['bio']); ?>
                                </p>
                                <div class="author-social">
                                    <?php if (!empty($author_data['linkedin'])): ?>
                                    <a href="<?php echo esc_url($author_data['linkedin']); ?>" target="_blank" rel="noopener" class="social-link">
                                        <i class="fab fa-linkedin"></i>
                                        <span>Connect on LinkedIn</span>
                                    </a>
                                    <?php endif; ?>
                                    <a href="<?php echo home_url('/contact'); ?>?subject=<?php echo urlencode('Inquiry from blog: ' . get_the_title()); ?>" class="btn-outline btn-small">
                                        <i class="fas fa-envelope"></i>
                                        <span>Get in Touch</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tags -->
                    <?php if (has_tag()) : ?>
                        <div class="blog-tags">
                            <span class="tags-label">Tags:</span>
                            <?php the_tags('', '', ''); ?>
                        </div>
                    <?php endif; ?>                <?php endwhile; ?>

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
                                        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
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
                    <p>Get our comprehensive 50-point SEO checklist to boost your search rankings and drive more organic traffic.</p>                    <ul class="magnet-benefits">
                        <li>✓ Technical SEO audit points</li>
                        <li>✓ Content optimisation tips</li>
                        <li>✓ Local SEO strategies</li>
                    </ul>
                    <!-- Lead magnet form with inline styles to prevent CSS conflicts -->
                    <div style="overflow: hidden;">
                        <form action="#" method="post" style="display: flex; flex-direction: column; gap: 10px;">
                            <input type="email" name="email" placeholder="Enter your email" required style="width: 100%; box-sizing: border-box; padding: 12px 15px; border-radius: 8px; border: 1px solid #e5e7eb; margin: 0; font-size: 16px;">
                            <button type="submit" style="width: 100%; box-sizing: border-box; background: linear-gradient(135deg, #f15a25 0%, #f47b51 100%); color: white; border: none; padding: 12px; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 16px;">Download Free</button>
                            <input type="hidden" name="magnet_type" value="seo_checklist">
                        </form>
                        <p class="privacy-note">We respect your privacy. Unsubscribe anytime.</p>
                    </div>
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
                </div>                <!-- Newsletter Signup -->
                <div class="sidebar-widget" style="overflow: hidden;">
                    <h3 class="widget-title">Stay Updated</h3>
                    <p>Get weekly marketing insights and strategies delivered to your inbox.</p>
                    
                    <!-- Orange background box with inline styles to prevent any CSS conflicts -->
                    <div style="background: linear-gradient(135deg, #f15a25 0%, #f47b51 100%); padding: 20px; border-radius: 8px; margin-top: 15px; colour: white; overflow: hidden;">
                        <form action="#" method="post" style="display: flex; flex-direction: column; gap: 10px;">
                            <input type="email" name="email" placeholder="Enter your email" required style="width: 100%; box-sizing: border-box; padding: 12px 15px; border-radius: 8px; border: none; margin: 0; font-size: 16px;">
                            <button type="submit" style="width: 100%; box-sizing: border-box; background: white; colour: #f15a25; border: none; padding: 12px; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 16px;">Subscribe</button>
                        </form>
                    </div>
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
