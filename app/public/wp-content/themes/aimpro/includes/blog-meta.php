<?php
/**
 * Blog Page Meta Fields
 * Adds custom meta box for Blog Page template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_blog_meta_box');
function aimpro_add_blog_meta_box() {
    // Only add to pages using the Blog Page template or with 'blog' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-blog.php' || $page_slug === 'blog') {
        add_meta_box(
            'aimpro_blog_settings',
            'Blog Page Settings',
            'aimpro_blog_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_blog_meta_box_callback($post) {
    wp_nonce_field('aimpro_blog_meta_nonce', 'aimpro_blog_meta_nonce');
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    if ($page_template !== 'page-blog.php' && $page_slug !== 'blog') {
        echo '<p><strong>Note:</strong> These settings will only appear when this page uses the "Blog Page" template or has the slug "blog".</p>';
        return;
    }
    
    // Get current values for header section
    $blog_header_title = get_post_meta($post->ID, 'blog_header_title', true) ?: 'Blog & Insights';
    $blog_header_subtitle = get_post_meta($post->ID, 'blog_header_subtitle', true) ?: 'Stay ahead with the latest digital marketing insights and strategies';
    
    // Get current values for blog posts section
    $blog_latest_title = get_post_meta($post->ID, 'blog_latest_title', true) ?: 'Latest Articles';
    
    // Get current values for sidebar widgets
    $blog_categories_title = get_post_meta($post->ID, 'blog_categories_title', true) ?: 'Categories';
    $blog_recent_posts_title = get_post_meta($post->ID, 'blog_recent_posts_title', true) ?: 'Recent Posts';
    
    // Get current values for newsletter widget
    $blog_newsletter_title = get_post_meta($post->ID, 'blog_newsletter_title', true) ?: 'Stay Updated';
    $blog_newsletter_subtitle = get_post_meta($post->ID, 'blog_newsletter_subtitle', true) ?: 'Get weekly insights delivered to your inbox.';
    $blog_newsletter_button_text = get_post_meta($post->ID, 'blog_newsletter_button_text', true) ?: 'Subscribe';
    ?>
    <div class="aimpro-blog-meta">
        <h4>Header Section</h4>
        <table class="form-table">
            <tr>
                <th><label for="blog_header_title">Title</label></th>
                <td><?php wp_editor($blog_header_title, 'blog_header_title', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
            </tr>
            <tr>
                <th><label for="blog_header_subtitle">Subtitle</label></th>
                <td><?php wp_editor($blog_header_subtitle, 'blog_header_subtitle', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
            </tr>
        </table>
        
        <h4>Blog Posts Section</h4>
        <table class="form-table">
            <tr>
                <th><label for="blog_latest_title">Latest Posts Title</label></th>
                <td><?php wp_editor($blog_latest_title, 'blog_latest_title', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
            </tr>
        </table>
        
        <h4>Sidebar Widgets</h4>
        <table class="form-table">
            <tr>
                <th><label for="blog_categories_title">Categories Widget Title</label></th>
                <td><?php wp_editor($blog_categories_title, 'blog_categories_title', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
            </tr>
            <tr>
                <th><label for="blog_recent_posts_title">Recent Posts Widget Title</label></th>
                <td><?php wp_editor($blog_recent_posts_title, 'blog_recent_posts_title', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
            </tr>
        </table>
        
        <h4>Newsletter Widget</h4>
        <table class="form-table">
            <tr>
                <th><label for="blog_newsletter_title">Newsletter Title</label></th>
                <td><?php wp_editor($blog_newsletter_title, 'blog_newsletter_title', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
            </tr>
            <tr>
                <th><label for="blog_newsletter_subtitle">Newsletter Subtitle</label></th>
                <td><?php wp_editor($blog_newsletter_subtitle, 'blog_newsletter_subtitle', array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
            </tr>
            <tr>
                <th><label for="blog_newsletter_button_text">Button Text</label></th>
                <td><?php wp_editor($blog_newsletter_button_text, 'blog_newsletter_button_text', array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true)); ?></td>
            </tr>
        </table>
    </div>
    <?php
}

add_action('save_post', 'aimpro_save_blog_meta_fields');
function aimpro_save_blog_meta_fields($post_id) {
    if (!isset($_POST['aimpro_blog_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_blog_meta_nonce'], 'aimpro_blog_meta_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (get_post_type($post_id) !== 'page') return;
    
    $fields = array(
        // Header Section
        'blog_header_title', 'blog_header_subtitle',
        
        // Blog Posts Section
        'blog_latest_title',
        
        // Sidebar Widgets
        'blog_categories_title', 'blog_recent_posts_title',
        
        // Newsletter Widget
        'blog_newsletter_title', 'blog_newsletter_subtitle', 'blog_newsletter_button_text'
    );
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            // Use wp_kses_post for rich text fields (all fields use wp_editor)
            $value = wp_kses_post($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        }
    }
}
