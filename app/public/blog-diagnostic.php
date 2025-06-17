<?php
// Diagnostic script to check blog posts and settings
require_once('wp-config.php');
require_once('wp-blog-header.php');

echo "<h2>WordPress Blog Diagnostic</h2>\n";

// Check WordPress reading settings
$posts_per_page = get_option('posts_per_page');
echo "<strong>WordPress Posts Per Page Setting:</strong> " . $posts_per_page . "<br>\n";

// Get all published posts
$all_posts = get_posts(array(
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'
));

echo "<strong>Total Published Posts:</strong> " . count($all_posts) . "<br><br>\n";

echo "<strong>All Posts:</strong><br>\n";
foreach ($all_posts as $post) {
    $featured = get_post_meta($post->ID, 'featured_post', true);
    echo "- " . $post->post_title . " (" . $post->post_date . ")" . ($featured ? " [FEATURED]" : "") . "<br>\n";
}

// Check what the blog page query would return
echo "<br><strong>Blog Page Query Test:</strong><br>\n";
$blog_args = array(
    'posts_per_page' => 12,
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

echo "Query found: " . $blog_query->found_posts . " posts<br>\n";
while ($blog_query->have_posts()) {
    $blog_query->the_post();
    echo "- " . get_the_title() . " (" . get_the_date() . ")<br>\n";
}
wp_reset_postdata();

// Check featured post query
echo "<br><strong>Featured Post Query:</strong><br>\n";
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

if ($featured_query->have_posts()) {
    while ($featured_query->have_posts()) {
        $featured_query->the_post();
        echo "- " . get_the_title() . " (FEATURED)<br>\n";
    }
} else {
    echo "No featured posts found<br>\n";
}
wp_reset_postdata();
?>
