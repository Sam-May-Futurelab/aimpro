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
                                <article class="related-post-item" style="display: flex; flex-direction: column;">
                                    <div class="post-image">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                        </a>
                                    </div>
                                    <div class="post-content" style="display: flex; flex-direction: column; height: 100%; flex-grow: 1;">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="post-meta">
                                            <span><?php echo get_the_date('M j, Y'); ?></span>
                                            <span>•</span>
                                            <span><?php echo aimpro_estimated_reading_time(get_the_content()); ?> min read</span>
                                        </div>
                                        <p style="flex-grow: 1; margin-bottom: 0.5rem;"><?php echo wp_trim_words(get_the_excerpt(), 23); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="read-more" style="margin-top: auto;">Read More</a>
                                    </div>
                                </article>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </section>
                <?php endif; ?>
            </article>

            <!-- Conversion Sidebar -->
            <aside class="blog-sidebar">
                <?php 
                // Get lead magnet settings for this post
                $lead_magnet = aimpro_get_blog_lead_magnet_data(get_the_ID());
                
                // Show lead magnet if enabled (default to enabled if not set)
                if ($lead_magnet['enabled'] !== '' ? $lead_magnet['enabled'] : '1') :
                ?>
                <!-- Lead Magnet: Customizable Guide -->
                <div class="lead-magnet">
                    <div class="magnet-header">
                        <div class="magnet-icon">
                            <i class="<?php echo esc_attr($lead_magnet['icon']); ?>"></i>
                        </div>
                        <span class="magnet-badge"><?php echo esc_html($lead_magnet['badge']); ?></span>
                    </div>
                    <h3><?php echo esc_html($lead_magnet['title']); ?></h3>
                    <p><?php echo esc_html($lead_magnet['description']); ?></p>
                    <ul class="magnet-benefits">
                        <?php 
                        $benefits = explode("\n", $lead_magnet['benefits']);
                        foreach ($benefits as $benefit) {
                            $benefit = trim($benefit);
                            if (!empty($benefit)) {
                                echo '<li>✓ ' . esc_html($benefit) . '</li>';
                            }
                        }
                        ?>
                    </ul>
                    
                    <?php
                    // Handle lead magnet success/error messages
                    if (isset($_GET['lead_success'])): ?>
                        <div class="form-message success" style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 4px solid #28a745;">
                            <p style="margin: 0;"><strong>Thank you!</strong> Your download has been sent to your email.</p>
                            <?php if (isset($_GET['download'])): 
                                $download_url = base64_decode($_GET['download']); ?>
                                <p style="margin: 10px 0 0 0;">
                                    <a href="<?php echo esc_url($download_url); ?>" target="_blank" style="color: #155724; font-weight: bold; text-decoration: underline;">Click here to download your PDF</a>
                                </p>
                            <?php endif; ?>
                        </div>
                    <?php elseif (isset($_GET['lead_error'])): ?>
                        <div class="form-message error" style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 4px solid #dc3545;">
                            <p style="margin: 0;"><strong>Error:</strong> There was a problem processing your request. Please try again.</p>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Lead magnet form with inline styles to prevent CSS conflicts -->
                    <div style="overflow: hidden;">
                        <?php if (!empty($lead_magnet['pdf_url'])): ?>
                            <!-- PDF is available - direct download form -->
                            <form action="<?php echo admin_url('admin-post.php'); ?>" method="post" style="display: flex; flex-direction: column; gap: 10px;">
                                <?php wp_nonce_field('lead_magnet_nonce', 'lead_magnet_nonce'); ?>
                                <input type="hidden" name="action" value="lead_magnet_form">
                                <input type="hidden" name="magnet_type" value="<?php echo esc_attr($lead_magnet['type']); ?>">
                                <input type="hidden" name="pdf_id" value="<?php echo esc_attr($lead_magnet['pdf_id']); ?>">
                                <input type="hidden" name="pdf_url" value="<?php echo esc_attr($lead_magnet['pdf_url']); ?>">
                                <input type="email" name="email" placeholder="Enter your email" required style="width: 100%; box-sizing: border-box; padding: 12px 15px; border-radius: 8px; border: 1px solid #e5e7eb; margin: 0; font-size: 16px;">
                                <button type="submit" style="width: 100%; box-sizing: border-box; background: linear-gradient(135deg, #f15a25 0%, #f47b51 100%); color: white; border: none; padding: 12px; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 16px;"><?php echo esc_html($lead_magnet['button_text']); ?></button>
                            </form>
                        <?php else: ?>
                            <!-- No PDF selected - fallback form -->
                            <form action="<?php echo admin_url('admin-post.php'); ?>" method="post" style="display: flex; flex-direction: column; gap: 10px;">
                                <?php wp_nonce_field('lead_magnet_nonce', 'lead_magnet_nonce'); ?>
                                <input type="hidden" name="action" value="lead_magnet_form">
                                <input type="hidden" name="magnet_type" value="<?php echo esc_attr($lead_magnet['type']); ?>">
                                <input type="email" name="email" placeholder="Enter your email" required style="width: 100%; box-sizing: border-box; padding: 12px 15px; border-radius: 8px; border: 1px solid #e5e7eb; margin: 0; font-size: 16px;">
                                <button type="submit" style="width: 100%; box-sizing: border-box; background: linear-gradient(135deg, #f15a25 0%, #f47b51 100%); color: white; border: none; padding: 12px; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 16px;"><?php echo esc_html($lead_magnet['button_text']); ?></button>
                            </form>
                        <?php endif; ?>
                        <p class="privacy-note">We respect your privacy. Unsubscribe anytime.</p>
                    </div>
                </div>
                <?php endif; ?>

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
                    
                    <?php if (isset($_GET['newsletter_success'])): ?>
                        <div class="form-message success" style="background: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 4px solid #28a745;">
                            <p style="margin: 0;"><strong>Thank you!</strong> You've been successfully subscribed to our newsletter.</p>
                        </div>
                    <?php elseif (isset($_GET['newsletter_error'])): ?>
                        <div class="form-message error" style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 8px; margin-bottom: 20px; border-left: 4px solid #dc3545;">
                            <p style="margin: 0;"><strong>Error:</strong> There was a problem with your subscription. Please try again.</p>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Orange background box with inline styles to prevent any CSS conflicts -->
                    <div style="background: linear-gradient(135deg, #f15a25 0%, #f47b51 100%); padding: 20px; border-radius: 8px; margin-top: 15px; color: white; overflow: hidden;">
                        <form method="post" action="<?php echo admin_url('admin-post.php'); ?>" style="display: flex; flex-direction: column; gap: 10px;">
                            <?php wp_nonce_field('newsletter_signup', 'newsletter_nonce'); ?>
                            <input type="hidden" name="action" value="newsletter_signup">
                            <input type="text" name="subscriber_name" placeholder="Name" required style="width: 100%; box-sizing: border-box; padding: 12px 15px; border-radius: 8px; border: none; margin: 0; font-size: 16px;">
                            <input type="email" name="subscriber_email" placeholder="Enter your email" required style="width: 100%; box-sizing: border-box; padding: 12px 15px; border-radius: 8px; border: none; margin: 0; font-size: 16px;">
                            <button type="submit" style="width: 100%; box-sizing: border-box; background: white; color: #f15a25; border: none; padding: 12px; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 16px; transition: all 0.3s ease;">Subscribe</button>
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
