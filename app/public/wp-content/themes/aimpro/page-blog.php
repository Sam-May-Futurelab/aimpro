<?php
/**
 * Template Name: Blog Page
 * Description: Blog listing page with WordPress posts
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/resources'); ?>">Resources</a>
                <span class="separator">›</span>
                <span class="current">Blog & Insights</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'blog_header_title', true) ?: 'Blog & Insights'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'blog_header_subtitle', true) ?: 'Stay ahead with the latest digital marketing insights and strategies'); ?></p>
            </div>
        </section>

        <!-- Blog Content -->
        <section class="blog-section">
            <div class="section-content">
                
                <div class="blog-layout">
                    
                    <!-- Main Blog Content -->
                    <div class="blog-main">
                        
                        <!-- Featured Post -->
                        <?php
                        $featured_args = array(
                            'posts_per_page' => 1,
                            'meta_query' => array(
                                array(
                                    'key' => 'featured_post',
                                    'value' => '1',
                                    'compare' => '='
                                )
                            )
                        );
                        $featured_query = new WP_Query($featured_args);
                          if ($featured_query->have_posts()) : ?>
                            <div class="featured-post animate-on-scroll animate-fade-up">
                                <?php while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
                                    <article class="post-featured">
                                        <div class="featured-image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('large'); ?>
                                                </a>
                                            <?php else : ?>
                                                <div class="placeholder-image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/default-featured.jpg" alt="<?php the_title(); ?>" />
                                                </div>
                                            <?php endif; ?>
                                            <span class="featured-badge">Featured</span>
                                        </div>
                                        <div class="featured-content">
                                            <div class="post-meta">
                                                <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                                                <span class="post-category">
                                                    <?php
                                                    $categories = get_the_category();
                                                    if (!empty($categories)) {
                                                        echo $categories[0]->name;
                                                    }
                                                    ?>
                                                </span>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                            <div class="post-excerpt">
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="read-more">Read Full Article</a>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; wp_reset_postdata(); ?>                        <!-- Blog Posts Grid -->
                        <div class="blog-posts">
                            <h2 class="section-title animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'blog_latest_title', true) ?: 'Latest Articles'); ?></h2>
                            
                            <div class="posts-grid">
                                <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $blog_args = array(
                                    'posts_per_page' => 9,
                                    'paged' => $paged,
                                    'meta_query' => array(
                                        'relation' => 'OR',
                                        array(
                                            'key' => 'featured_post',
                                            'value' => '1',
                                            'compare' => '!='
                                        ),
                                        array(
                                            'key' => 'featured_post',
                                            'compare' => 'NOT EXISTS'
                                        )
                                    )
                                );
                                $blog_query = new WP_Query($blog_args);
                                  if ($blog_query->have_posts()) :
                                    while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                                        <article class="post-card animate-on-scroll animate-stagger animate-fade-up">
                                            <div class="post-image">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail('medium'); ?>
                                                    </a>
                                                <?php else : ?>
                                                    <div class="placeholder-image">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/default-post.jpg" alt="<?php the_title(); ?>" />
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-meta">
                                                    <span class="post-date"><?php echo get_the_date('M j, Y'); ?></span>
                                                    <span class="post-category">
                                                        <?php
                                                        $categories = get_the_category();
                                                        if (!empty($categories)) {
                                                            echo $categories[0]->name;
                                                        }
                                                        ?>
                                                    </span>
                                                </div>
                                                <h3 class="post-title">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </h3>
                                                <div class="post-excerpt">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                                </div>
                                                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
                                            </div>
                                        </article>
                                    <?php endwhile;
                                else : ?>
                                    <!-- No Posts Found -->
                                    <div class="no-posts">
                                        <h3>No posts found</h3>
                                        <p>We're working on adding great content. Check back soon!</p>
                                          <!-- Placeholder Posts for Demo -->
                                        <div class="posts-grid">
                                            <article class="post-card animate-on-scroll animate-stagger animate-fade-up">
                                                <div class="post-image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/seo-trends-2025.jpg" alt="SEO Trends 2025" />
                                                </div>
                                                <div class="post-content">
                                                    <div class="post-meta">
                                                        <span class="post-date">June 10, 2025</span>
                                                        <span class="post-category">SEO</span>
                                                    </div>
                                                    <h3 class="post-title">
                                                        <a href="#">Top SEO Trends to Watch in 2025</a>
                                                    </h3>
                                                    <div class="post-excerpt">
                                                        Discover the latest SEO trends that will shape search marketing strategies in 2025 and beyond.
                                                    </div>
                                                    <a href="#" class="read-more">Read More</a>
                                                </div>
                                            </article>                                            <article class="post-card animate-on-scroll animate-stagger animate-fade-up">
                                                <div class="post-image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/ppc-optimisation.jpg" alt="PPC optimisation" />
                                                </div>
                                                <div class="post-content">
                                                    <div class="post-meta">
                                                        <span class="post-date">June 8, 2025</span>
                                                        <span class="post-category">PPC</span>
                                                    </div>
                                                    <h3 class="post-title">
                                                        <a href="#">5 PPC optimisation Strategies That Actually Work</a>
                                                    </h3>
                                                    <div class="post-excerpt">
                                                        Learn proven PPC optimisation techniques to improve your ad performance and ROI.
                                                    </div>
                                                    <a href="#" class="read-more">Read More</a>
                                                </div>
                                            </article>

                                            <article class="post-card animate-on-scroll animate-stagger animate-fade-up">
                                                <div class="post-image">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/content-marketing.jpg" alt="Content Marketing" />
                                                </div>
                                                <div class="post-content">
                                                    <div class="post-meta">
                                                        <span class="post-date">June 5, 2025</span>
                                                        <span class="post-category">Content Marketing</span>
                                                    </div>
                                                    <h3 class="post-title">
                                                        <a href="#">Creating Content That Converts: A Complete Guide</a>
                                                    </h3>
                                                    <div class="post-excerpt">
                                                        Master the art of creating compelling content that drives engagement and conversions.
                                                    </div>
                                                    <a href="#" class="read-more">Read More</a>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Pagination -->
                            <?php if ($blog_query->max_num_pages > 1) : ?>
                                <div class="blog-pagination">
                                    <?php
                                    echo paginate_links(array(
                                        'total' => $blog_query->max_num_pages,
                                        'current' => $paged,
                                        'prev_text' => '← Previous',
                                        'next_text' => 'Next →',
                                        'type' => 'list'
                                    ));
                                    ?>
                                </div>
                            <?php endif; wp_reset_postdata(); ?>
                        </div>
                    </div>                    <!-- Sidebar -->
                    <aside class="blog-sidebar animate-on-scroll animate-slide-right">
                          <!-- Categories -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'blog_categories_title', true) ?: 'Categories'); ?></h3>
                            <ul class="category-list">
                                <?php
                                $categories = get_categories(array(
                                    'orderby' => 'count',
                                    'order' => 'DESC',
                                    'hide_empty' => false
                                ));                                  if (!empty($categories)) :
                                    foreach ($categories as $category) : 
                                        // Skip categories with zero posts
                                        if ($category->count == 0) continue; 
                                    ?>
                                        <li>
                                            <span class="category-name">
                                                <?php echo $category->name; ?>
                                                <span class="post-count">(<?php echo $category->count; ?>)</span>
                                            </span>
                                        </li>
                                    <?php endforeach;
                                else : ?>
                                    <li><span class="category-name">SEO <span class="post-count">(12)</span></span></li>
                                    <li><span class="category-name">PPC <span class="post-count">(8)</span></span></li>
                                    <li><span class="category-name">Content Marketing <span class="post-count">(15)</span></span></li>
                                    <li><span class="category-name">Social Media <span class="post-count">(6)</span></span></li>
                                    <li><span class="category-name">Web Development <span class="post-count">(9)</span></span></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        
                        <!-- Recent Posts -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'blog_recent_posts_title', true) ?: 'Recent Posts'); ?></h3>
                            <div class="recent-posts">
                                <?php
                                $recent_args = array(
                                    'posts_per_page' => 5,
                                    'meta_query' => array(
                                        'relation' => 'OR',
                                        array(
                                            'key' => 'featured_post',
                                            'value' => '1',
                                            'compare' => '!='
                                        ),
                                        array(
                                            'key' => 'featured_post',
                                            'compare' => 'NOT EXISTS'
                                        )
                                    )
                                );
                                $recent_query = new WP_Query($recent_args);
                                
                                if ($recent_query->have_posts()) :
                                    while ($recent_query->have_posts()) : $recent_query->the_post(); ?>
                                        <div class="recent-post">
                                            <a href="<?php the_permalink(); ?>" class="recent-post-link">
                                                <h4><?php the_title(); ?></h4>
                                                <span class="recent-date"><?php echo get_the_date('M j, Y'); ?></span>
                                            </a>
                                        </div>
                                    <?php endwhile; wp_reset_postdata();
                                else : ?>
                                    <div class="recent-post">
                                        <a href="#" class="recent-post-link">
                                            <h4>Getting Started with Google Analytics 4</h4>
                                            <span class="recent-date">June 12, 2025</span>
                                        </a>
                                    </div>
                                    <div class="recent-post">
                                        <a href="#" class="recent-post-link">
                                            <h4>Local SEO Best Practices for Small Businesses</h4>
                                            <span class="recent-date">June 10, 2025</span>
                                        </a>
                                    </div>
                                    <div class="recent-post">
                                        <a href="#" class="recent-post-link">
                                            <h4>Social Media Marketing ROI: How to Measure Success</h4>
                                            <span class="recent-date">June 7, 2025</span>
                                        </a>                                    </div>                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Simple Newsletter Widget -->
                        <div class="sidebar-widget" style="overflow: hidden;">
                            <h3 class="widget-title"><?php echo esc_html(get_post_meta(get_the_ID(), 'blog_newsletter_title', true) ?: 'Stay Updated'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'blog_newsletter_subtitle', true) ?: 'Get weekly insights delivered to your inbox.'); ?></p>
                            
                            <!-- Orange background box with inline styles to prevent any CSS conflicts -->
                            <div style="background: linear-gradient(135deg, #f15a25 0%, #f47b51 100%); padding: 20px; border-radius: 8px; margin-top: 15px; color: white; overflow: hidden;">
                                <form action="#" method="post" style="display: flex; flex-direction: column; gap: 10px;">
                                    <input type="email" name="email" placeholder="Email" required style="width: 100%; box-sizing: border-box; padding: 12px 15px; border-radius: 8px; border: none; margin: 0; font-size: 16px;">
                                    <button type="submit" style="width: 100%; box-sizing: border-box; background: white; color: #f15a25; border: 2px solid #f15a25; padding: 12px; border-radius: 8px; font-weight: 600; cursor: pointer; font-size: 16px; transition: all 0.3s ease;" onmouseover="this.style.background='#f15a25'; this.style.color='white';" onmouseout="this.style.background='white'; this.style.color='#f15a25';"><?php echo esc_html(get_post_meta(get_the_ID(), 'blog_newsletter_button_text', true) ?: 'Subscribe'); ?></button>
                                </form>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
