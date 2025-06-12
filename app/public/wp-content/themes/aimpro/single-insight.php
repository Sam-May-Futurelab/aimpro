<?php
/**
 * The template for displaying single insight
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Skip to main content for accessibility -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<?php get_header(); ?>

<!-- Main Content -->
<main id="main-content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); 
        $read_time = aimpro_get_read_time(get_the_ID());
    ?>
    <article class="single-insight">
        <div class="container">
            <header class="insight-header">
                <div class="insight-meta">
                    <span class="publish-date"><?php echo get_the_date('F j, Y'); ?></span>
                    <span class="read-time"><?php echo esc_html($read_time); ?> min read</span>
                </div>
                <h1><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                    </div>
                <?php endif; ?>
            </header>
            
            <div class="insight-content">
                <?php the_content(); ?>
            </div>
            
            <footer class="insight-footer">
                <div class="author-bio">
                    <?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
                    <div class="author-info">
                        <h3><?php the_author(); ?></h3>
                        <p><?php the_author_meta('description'); ?></p>
                    </div>
                </div>
                
                <div class="share-buttons">
                    <h3>Share This Insight:</h3>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="share-twitter">Twitter</a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="share-linkedin">LinkedIn</a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="share-facebook">Facebook</a>
                </div>
            </footer>
            
            <div class="related-insights">
                <h2>More Marketing Insights</h2>
                <div class="related-insights-grid">
                    <?php
                    $related_insights = new WP_Query(array(
                        'post_type' => 'insight',
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID())
                    ));
                    
                    if ($related_insights->have_posts()) :
                        while ($related_insights->have_posts()) : $related_insights->the_post();
                            $read_time = aimpro_get_read_time(get_the_ID());
                    ?>
                        <div class="related-insight-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="related-insight-image">
                                    <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                </div>
                            <?php endif; ?>
                            <div class="related-insight-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <span class="read-time"><?php echo esc_html($read_time); ?> min read</span>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
            
            <div class="insight-cta-box">
                <h3>Need Help With Your Digital Marketing Strategy?</h3>
                <p>Speak with our experts about how we can help grow your business with data-driven marketing strategies.</p>
                <a href="#contact" class="btn-primary">Get a Free Consultation</a>
            </div>
        </div>
    </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

</body>
</html>
