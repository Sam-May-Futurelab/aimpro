<?php
/**
 * The template for displaying insights archive
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> - Insights</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Skip to main content for accessibility -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<?php get_header(); ?>

<!-- Main Content -->
<main id="main-content" role="main">
    <section class="page-header">
        <div class="container">
            <h1>Marketing Insights & Strategy</h1>
            <p class="subtitle">Expert analysis, industry trends, and proven strategies to keep your business ahead of the competition</p>
        </div>
    </section>

    <section class="insights-archive">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="insights-grid-archive">
                    <?php while (have_posts()) : the_post();
                        $read_time = aimpro_get_read_time(get_the_ID());
                    ?>
                        <article class="insight-card-archive">
                            <div class="insight-image-archive">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-insight.png" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="insight-content-archive">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <div class="insight-meta">
                                    <span class="read-time"><?php echo esc_html($read_time); ?> min read</span>
                                    <span class="publish-date"><?php echo get_the_date('M j, Y'); ?></span>
                                </div>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn-outline">Read More</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <div class="pagination">
                    <?php the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '&laquo; Previous',
                        'next_text' => 'Next &raquo;',
                    )); ?>
                </div>
            <?php else : ?>
                <div class="no-results">
                    <p>No insights have been published yet. Please check back soon for new content.</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>

</body>
</html>
