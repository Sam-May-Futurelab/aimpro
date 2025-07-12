<?php
/**
 * Resources Page Meta Fields
 * Adds custom meta box for Resources Page template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_resources_meta_box');
function aimpro_add_resources_meta_box() {
    // Only add to pages using the Resources Page template or with 'resources' slug
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-resources.php' || $page_slug === 'resources') {
        add_meta_box(
            'aimpro_resources_settings',
            'Resources Page Settings',
            'aimpro_resources_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_resources_meta_box_callback($post) {
    wp_nonce_field('aimpro_resources_meta_nonce', 'aimpro_resources_meta_nonce');
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    if ($page_template !== 'page-resources.php' && $page_slug !== 'resources') {
        echo '<p><strong>Note:</strong> These settings will only appear when this page uses the "Resources Page" template or has the slug "resources".</p>';
        return;
    }
    
    // Get current values for Hero Section
    $resources_hero_title = get_post_meta($post->ID, 'resources_hero_title', true) ?: 'Resources';
    $resources_hero_subtitle = get_post_meta($post->ID, 'resources_hero_subtitle', true) ?: 'Your Digital Marketing Knowledge Hub - Everything you need to succeed in digital marketing';
    $resources_hero_description = get_post_meta($post->ID, 'resources_hero_description', true) ?: 'Explore our comprehensive collection of resources designed to help you stay ahead in the ever-evolving digital landscape. From the latest industry insights to practical tools and expert guidance, we\'ve got everything you need to elevate your marketing strategy.';
    
    // Get current values for Resource Categories
    $resources_categories_title = get_post_meta($post->ID, 'resources_categories_title', true) ?: 'Resource Categories';
    $resources_categories_subtitle = get_post_meta($post->ID, 'resources_categories_subtitle', true) ?: 'Comprehensive resources to power your digital marketing success across all channels and strategies.';
    
    // Blog Category
    $resources_blog_title = get_post_meta($post->ID, 'resources_blog_title', true) ?: 'Blog & Insights';
    $resources_blog_description = get_post_meta($post->ID, 'resources_blog_description', true) ?: 'Stay updated with the latest digital marketing trends, strategies, and industry insights from our expert team.';
    $resources_blog_features = get_post_meta($post->ID, 'resources_blog_features', true) ?: 'SEO & Search Marketing Tips
PPC Campaign Strategies
Industry Trend Analysis
Expert Interviews';
    $resources_blog_link_text = get_post_meta($post->ID, 'resources_blog_link_text', true) ?: 'Read Our Blog';
    $resources_blog_link_url = get_post_meta($post->ID, 'resources_blog_link_url', true) ?: '/blog';
    
    // Case Studies Category
    $resources_casestudies_title = get_post_meta($post->ID, 'resources_casestudies_title', true) ?: 'Case Studies';
    $resources_casestudies_description = get_post_meta($post->ID, 'resources_casestudies_description', true) ?: 'Discover real success stories and learn how we\'ve helped businesses achieve their digital marketing goals.';
    $resources_casestudies_features = get_post_meta($post->ID, 'resources_casestudies_features', true) ?: 'ROI Improvement Stories
Campaign Performance Data
Strategy Implementations
Client Testimonials';
    $resources_casestudies_link_text = get_post_meta($post->ID, 'resources_casestudies_link_text', true) ?: 'View Case Studies';
    $resources_casestudies_link_url = get_post_meta($post->ID, 'resources_casestudies_link_url', true) ?: '/case-studies';
    
    // Templates & Tools Category
    $resources_templates_title = get_post_meta($post->ID, 'resources_templates_title', true) ?: 'Templates & Tools';
    $resources_templates_description = get_post_meta($post->ID, 'resources_templates_description', true) ?: 'Access our collection of free templates, checklists, and tools to streamline your marketing efforts.';
    $resources_templates_features = get_post_meta($post->ID, 'resources_templates_features', true) ?: 'SEO Audit Checklists
Campaign Planning Templates
Performance Tracking Tools
Content Calendar Templates';
    $resources_templates_link_text = get_post_meta($post->ID, 'resources_templates_link_text', true) ?: 'Get Free Tools';
    $resources_templates_link_url = get_post_meta($post->ID, 'resources_templates_link_url', true) ?: '/templates-tools';
    
    // Events & Webinars Category
    $resources_events_title = get_post_meta($post->ID, 'resources_events_title', true) ?: 'Events & Webinars';
    $resources_events_description = get_post_meta($post->ID, 'resources_events_description', true) ?: 'Join our upcoming events and webinars to learn from industry experts and network with peers.';
    $resources_events_features = get_post_meta($post->ID, 'resources_events_features', true) ?: 'Monthly Expert Webinars
Industry Conference Coverage
Networking Events
Workshop Sessions';
    $resources_events_link_text = get_post_meta($post->ID, 'resources_events_link_text', true) ?: 'View Events';
    $resources_events_link_url = get_post_meta($post->ID, 'resources_events_link_url', true) ?: '/events-webinars';
    
    // Training & Mentoring Category
    $resources_training_title = get_post_meta($post->ID, 'resources_training_title', true) ?: 'Training & Mentoring';
    $resources_training_description = get_post_meta($post->ID, 'resources_training_description', true) ?: 'Accelerate your digital marketing skills with our personalised training programs and expert mentoring.';
    $resources_training_features = get_post_meta($post->ID, 'resources_training_features', true) ?: 'One-on-One Mentoring
Team Training Sessions
Skill Development Programs
Certification Guidance';
    $resources_training_link_text = get_post_meta($post->ID, 'resources_training_link_text', true) ?: 'Learn More';
    $resources_training_link_url = get_post_meta($post->ID, 'resources_training_link_url', true) ?: '/training-mentoring';
    
    // SEO Guides Category
    $resources_seo_title = get_post_meta($post->ID, 'resources_seo_title', true) ?: 'SEO Guides & Resources';
    $resources_seo_description = get_post_meta($post->ID, 'resources_seo_description', true) ?: 'Expert SEO guides and resources to improve your search rankings and organic traffic.';
    $resources_seo_features = get_post_meta($post->ID, 'resources_seo_features', true) ?: 'Technical SEO Guides
Keyword Research Tools
Content Optimization Tips
Local SEO Strategies';
    $resources_seo_link_text = get_post_meta($post->ID, 'resources_seo_link_text', true) ?: 'SEO Guides';
    $resources_seo_link_url = get_post_meta($post->ID, 'resources_seo_link_url', true) ?: '/seo-guides';
    
    // Featured Resources Section
    $resources_featured_title = get_post_meta($post->ID, 'resources_featured_title', true) ?: 'Featured Resources';
    $resources_featured_subtitle = get_post_meta($post->ID, 'resources_featured_subtitle', true) ?: 'Hand-picked resources to accelerate your digital marketing success and stay ahead of the competition.';
      // Featured Resource 1
    $resources_featured1_type = get_post_meta($post->ID, 'resources_featured1_type', true) ?: 'Guide';
    $resources_featured1_title = get_post_meta($post->ID, 'resources_featured1_title', true) ?: 'The Complete SEO Guide for 2025';
    $resources_featured1_description = get_post_meta($post->ID, 'resources_featured1_description', true) ?: 'Everything you need to know about SEO in 2025, from technical optimisation to content strategy.';
    $resources_featured1_link_text = get_post_meta($post->ID, 'resources_featured1_link_text', true) ?: 'Download Free Guide';
    $resources_featured1_link_url = get_post_meta($post->ID, 'resources_featured1_link_url', true) ?: '#';
    
    // Featured Resource 2
    $resources_featured2_type = get_post_meta($post->ID, 'resources_featured2_type', true) ?: 'Tool';
    $resources_featured2_title = get_post_meta($post->ID, 'resources_featured2_title', true) ?: 'Marketing Tool';
    $resources_featured2_description = get_post_meta($post->ID, 'resources_featured2_description', true) ?: 'Access our powerful marketing tools to optimise your campaigns and improve performance.';
    $resources_featured2_link_text = get_post_meta($post->ID, 'resources_featured2_link_text', true) ?: 'Access Tool';
    $resources_featured2_link_url = get_post_meta($post->ID, 'resources_featured2_link_url', true) ?: '#';
    
    // Featured Resource 3
    $resources_featured3_type = get_post_meta($post->ID, 'resources_featured3_type', true) ?: 'Webinar';
    $resources_featured3_title = get_post_meta($post->ID, 'resources_featured3_title', true) ?: 'Digital Marketing Trends 2025';
    $resources_featured3_description = get_post_meta($post->ID, 'resources_featured3_description', true) ?: 'Join our upcoming webinar to discover the latest trends shaping digital marketing this year.';
    $resources_featured3_link_text = get_post_meta($post->ID, 'resources_featured3_link_text', true) ?: 'Register Now';
    $resources_featured3_link_url = get_post_meta($post->ID, 'resources_featured3_link_url', true) ?: '#';
    
    // Newsletter CTA Section
    $resources_newsletter_title = get_post_meta($post->ID, 'resources_newsletter_title', true) ?: 'Stay Updated';
    $resources_newsletter_description = get_post_meta($post->ID, 'resources_newsletter_description', true) ?: 'Get the latest resources, insights, and industry updates delivered directly to your inbox.';
    ?>
    <div class="aimpro-resources-meta">
        <h4>Hero Section</h4>
        <table class="form-table">
            <tr><th><label for="resources_hero_title">Title</label></th><td><?php wp_editor($resources_hero_title, 'resources_hero_title', array('textarea_name' => 'resources_hero_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_hero_subtitle">Subtitle</label></th><td><?php wp_editor($resources_hero_subtitle, 'resources_hero_subtitle', array('textarea_name' => 'resources_hero_subtitle', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_hero_description">Description</label></th><td><?php wp_editor($resources_hero_description, 'resources_hero_description', array('textarea_name' => 'resources_hero_description', 'textarea_rows' => 4, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
        </table>
        
        <h4>Resource Categories Section</h4>
        <table class="form-table">
            <tr><th><label for="resources_categories_title">Section Title</label></th><td><?php wp_editor($resources_categories_title, 'resources_categories_title', array('textarea_name' => 'resources_categories_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_categories_subtitle">Section Subtitle</label></th><td><?php wp_editor($resources_categories_subtitle, 'resources_categories_subtitle', array('textarea_name' => 'resources_categories_subtitle', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
        </table>
        
        <h4>Blog & Insights Category</h4>
        <table class="form-table">
            <tr><th><label for="resources_blog_title">Title</label></th><td><?php wp_editor($resources_blog_title, 'resources_blog_title', array('textarea_name' => 'resources_blog_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_blog_description">Description</label></th><td><?php wp_editor($resources_blog_description, 'resources_blog_description', array('textarea_name' => 'resources_blog_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_blog_features">Features (One per line)</label></th><td><?php wp_editor($resources_blog_features, 'resources_blog_features', array('textarea_name' => 'resources_blog_features', 'textarea_rows' => 4, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_blog_link_text">Link Text</label></th><td><input type="text" id="resources_blog_link_text" name="resources_blog_link_text" value="<?php echo esc_attr($resources_blog_link_text); ?>" /></td></tr>
            <tr><th><label for="resources_blog_link_url">Link URL</label></th><td><input type="text" id="resources_blog_link_url" name="resources_blog_link_url" value="<?php echo esc_attr($resources_blog_link_url); ?>" /></td></tr>
        </table>
        
        <h4>Case Studies Category</h4>
        <table class="form-table">
            <tr><th><label for="resources_casestudies_title">Title</label></th><td><?php wp_editor($resources_casestudies_title, 'resources_casestudies_title', array('textarea_name' => 'resources_casestudies_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_casestudies_description">Description</label></th><td><?php wp_editor($resources_casestudies_description, 'resources_casestudies_description', array('textarea_name' => 'resources_casestudies_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_casestudies_features">Features (One per line)</label></th><td><?php wp_editor($resources_casestudies_features, 'resources_casestudies_features', array('textarea_name' => 'resources_casestudies_features', 'textarea_rows' => 4, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_casestudies_link_text">Link Text</label></th><td><input type="text" id="resources_casestudies_link_text" name="resources_casestudies_link_text" value="<?php echo esc_attr($resources_casestudies_link_text); ?>" /></td></tr>
            <tr><th><label for="resources_casestudies_link_url">Link URL</label></th><td><input type="text" id="resources_casestudies_link_url" name="resources_casestudies_link_url" value="<?php echo esc_attr($resources_casestudies_link_url); ?>" /></td></tr>
        </table>
        
        <h4>Templates & Tools Category</h4>
        <table class="form-table">
            <tr><th><label for="resources_templates_title">Title</label></th><td><?php wp_editor($resources_templates_title, 'resources_templates_title', array('textarea_name' => 'resources_templates_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_templates_description">Description</label></th><td><?php wp_editor($resources_templates_description, 'resources_templates_description', array('textarea_name' => 'resources_templates_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_templates_features">Features (One per line)</label></th><td><?php wp_editor($resources_templates_features, 'resources_templates_features', array('textarea_name' => 'resources_templates_features', 'textarea_rows' => 4, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_templates_link_text">Link Text</label></th><td><input type="text" id="resources_templates_link_text" name="resources_templates_link_text" value="<?php echo esc_attr($resources_templates_link_text); ?>" /></td></tr>
            <tr><th><label for="resources_templates_link_url">Link URL</label></th><td><input type="text" id="resources_templates_link_url" name="resources_templates_link_url" value="<?php echo esc_attr($resources_templates_link_url); ?>" /></td></tr>
        </table>
        
        <h4>Events & Webinars Category</h4>
        <table class="form-table">
            <tr><th><label for="resources_events_title">Title</label></th><td><?php wp_editor($resources_events_title, 'resources_events_title', array('textarea_name' => 'resources_events_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_events_description">Description</label></th><td><?php wp_editor($resources_events_description, 'resources_events_description', array('textarea_name' => 'resources_events_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_events_features">Features (One per line)</label></th><td><?php wp_editor($resources_events_features, 'resources_events_features', array('textarea_name' => 'resources_events_features', 'textarea_rows' => 4, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_events_link_text">Link Text</label></th><td><input type="text" id="resources_events_link_text" name="resources_events_link_text" value="<?php echo esc_attr($resources_events_link_text); ?>" /></td></tr>
            <tr><th><label for="resources_events_link_url">Link URL</label></th><td><input type="text" id="resources_events_link_url" name="resources_events_link_url" value="<?php echo esc_attr($resources_events_link_url); ?>" /></td></tr>
        </table>
        
        <h4>Training & Mentoring Category</h4>
        <table class="form-table">
            <tr><th><label for="resources_training_title">Title</label></th><td><?php wp_editor($resources_training_title, 'resources_training_title', array('textarea_name' => 'resources_training_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_training_description">Description</label></th><td><?php wp_editor($resources_training_description, 'resources_training_description', array('textarea_name' => 'resources_training_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_training_features">Features (One per line)</label></th><td><?php wp_editor($resources_training_features, 'resources_training_features', array('textarea_name' => 'resources_training_features', 'textarea_rows' => 4, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_training_link_text">Link Text</label></th><td><input type="text" id="resources_training_link_text" name="resources_training_link_text" value="<?php echo esc_attr($resources_training_link_text); ?>" /></td></tr>
            <tr><th><label for="resources_training_link_url">Link URL</label></th><td><input type="text" id="resources_training_link_url" name="resources_training_link_url" value="<?php echo esc_attr($resources_training_link_url); ?>" /></td></tr>
        </table>
        
        <h4>SEO Guides Category</h4>
        <table class="form-table">
            <tr><th><label for="resources_seo_title">Title</label></th><td><?php wp_editor($resources_seo_title, 'resources_seo_title', array('textarea_name' => 'resources_seo_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_seo_description">Description</label></th><td><?php wp_editor($resources_seo_description, 'resources_seo_description', array('textarea_name' => 'resources_seo_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_seo_features">Features (One per line)</label></th><td><?php wp_editor($resources_seo_features, 'resources_seo_features', array('textarea_name' => 'resources_seo_features', 'textarea_rows' => 4, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_seo_link_text">Link Text</label></th><td><input type="text" id="resources_seo_link_text" name="resources_seo_link_text" value="<?php echo esc_attr($resources_seo_link_text); ?>" /></td></tr>
            <tr><th><label for="resources_seo_link_url">Link URL</label></th><td><input type="text" id="resources_seo_link_url" name="resources_seo_link_url" value="<?php echo esc_attr($resources_seo_link_url); ?>" /></td></tr>
        </table>
        
        <h4>Featured Resources Section</h4>
        <table class="form-table">
            <tr><th><label for="resources_featured_title">Section Title</label></th><td><?php wp_editor($resources_featured_title, 'resources_featured_title', array('textarea_name' => 'resources_featured_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_featured_subtitle">Section Subtitle</label></th><td><?php wp_editor($resources_featured_subtitle, 'resources_featured_subtitle', array('textarea_name' => 'resources_featured_subtitle', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
        </table>
          <h4>Featured Resource 1</h4>
        <table class="form-table">
            <tr><th><label for="resources_featured1_type">Resource Type</label></th><td><input type="text" id="resources_featured1_type" name="resources_featured1_type" value="<?php echo esc_attr($resources_featured1_type); ?>" /></td></tr>
            <tr><th><label for="resources_featured1_title">Title</label></th><td><?php wp_editor($resources_featured1_title, 'resources_featured1_title', array('textarea_name' => 'resources_featured1_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_featured1_description">Description</label></th><td><?php wp_editor($resources_featured1_description, 'resources_featured1_description', array('textarea_name' => 'resources_featured1_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_featured1_link_text">Link Text</label></th><td><input type="text" id="resources_featured1_link_text" name="resources_featured1_link_text" value="<?php echo esc_attr($resources_featured1_link_text); ?>" /></td></tr>
            <tr><th><label for="resources_featured1_link_url">Link URL</label></th><td><input type="text" id="resources_featured1_link_url" name="resources_featured1_link_url" value="<?php echo esc_attr($resources_featured1_link_url); ?>" /></td></tr>
        </table>
        
        <h4>Featured Resource 2</h4>
        <table class="form-table">
            <tr><th><label for="resources_featured2_type">Resource Type</label></th><td><input type="text" id="resources_featured2_type" name="resources_featured2_type" value="<?php echo esc_attr($resources_featured2_type); ?>" /></td></tr>
            <tr><th><label for="resources_featured2_title">Title</label></th><td><?php wp_editor($resources_featured2_title, 'resources_featured2_title', array('textarea_name' => 'resources_featured2_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_featured2_description">Description</label></th><td><?php wp_editor($resources_featured2_description, 'resources_featured2_description', array('textarea_name' => 'resources_featured2_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_featured2_link_text">Link Text</label></th><td><input type="text" id="resources_featured2_link_text" name="resources_featured2_link_text" value="<?php echo esc_attr($resources_featured2_link_text); ?>" /></td></tr>
            <tr><th><label for="resources_featured2_link_url">Link URL</label></th><td><input type="text" id="resources_featured2_link_url" name="resources_featured2_link_url" value="<?php echo esc_attr($resources_featured2_link_url); ?>" /></td></tr>
        </table>
          <h4>Featured Resource 3</h4>
        <table class="form-table">
            <tr><th><label for="resources_featured3_type">Resource Type</label></th><td><input type="text" id="resources_featured3_type" name="resources_featured3_type" value="<?php echo esc_attr($resources_featured3_type); ?>" /></td></tr>
            <tr><th><label for="resources_featured3_title">Title</label></th><td><?php wp_editor($resources_featured3_title, 'resources_featured3_title', array('textarea_name' => 'resources_featured3_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_featured3_description">Description</label></th><td><?php wp_editor($resources_featured3_description, 'resources_featured3_description', array('textarea_name' => 'resources_featured3_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_featured3_link_text">Link Text</label></th><td><input type="text" id="resources_featured3_link_text" name="resources_featured3_link_text" value="<?php echo esc_attr($resources_featured3_link_text); ?>" /></td></tr>
            <tr><th><label for="resources_featured3_link_url">Link URL</label></th><td><input type="text" id="resources_featured3_link_url" name="resources_featured3_link_url" value="<?php echo esc_attr($resources_featured3_link_url); ?>" /></td></tr>
        </table>
        
        <h4>Newsletter CTA Section</h4>
        <table class="form-table">
            <tr><th><label for="resources_newsletter_title">Title</label></th><td><?php wp_editor($resources_newsletter_title, 'resources_newsletter_title', array('textarea_name' => 'resources_newsletter_title', 'textarea_rows' => 2, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
            <tr><th><label for="resources_newsletter_description">Description</label></th><td><?php wp_editor($resources_newsletter_description, 'resources_newsletter_description', array('textarea_name' => 'resources_newsletter_description', 'textarea_rows' => 3, 'teeny' => true, 'media_buttons' => false, 'quicktags' => array('buttons' => 'strong,em,link'))); ?></td></tr>
        </table>
    </div>
    <?php
}

add_action('save_post', 'aimpro_save_resources_meta_fields');
function aimpro_save_resources_meta_fields($post_id) {
    if (!isset($_POST['aimpro_resources_meta_nonce']) || !wp_verify_nonce($_POST['aimpro_resources_meta_nonce'], 'aimpro_resources_meta_nonce')) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (get_post_type($post_id) !== 'page') return;
    
    // Define which fields should use wp_kses_post for rich text content
    $rich_text_fields = array(
        'resources_hero_title', 'resources_hero_subtitle', 'resources_hero_description',
        'resources_categories_title', 'resources_categories_subtitle',
        'resources_blog_title', 'resources_blog_description', 'resources_blog_features',
        'resources_casestudies_title', 'resources_casestudies_description', 'resources_casestudies_features',
        'resources_templates_title', 'resources_templates_description', 'resources_templates_features',
        'resources_events_title', 'resources_events_description', 'resources_events_features',
        'resources_training_title', 'resources_training_description', 'resources_training_features',
        'resources_seo_title', 'resources_seo_description', 'resources_seo_features',
        'resources_featured_title', 'resources_featured_subtitle',
        'resources_featured1_title', 'resources_featured1_description',
        'resources_featured2_title', 'resources_featured2_description',
        'resources_featured3_title', 'resources_featured3_description',
        'resources_newsletter_title', 'resources_newsletter_description'
    );
    
    // Define text fields (non-rich text)
    $text_fields = array(
        'resources_blog_link_text', 'resources_blog_link_url',
        'resources_casestudies_link_text', 'resources_casestudies_link_url',
        'resources_templates_link_text', 'resources_templates_link_url',
        'resources_events_link_text', 'resources_events_link_url',
        'resources_training_link_text', 'resources_training_link_url',
        'resources_seo_link_text', 'resources_seo_link_url',
        'resources_featured1_type', 'resources_featured1_link_text', 'resources_featured1_link_url',
        'resources_featured2_type', 'resources_featured2_link_text', 'resources_featured2_link_url',
        'resources_featured3_type', 'resources_featured3_link_text', 'resources_featured3_link_url'
    );
    
    // Save rich text fields
    foreach ($rich_text_fields as $field) {
        if (isset($_POST[$field])) {
            $value = wp_kses_post($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        }
    }
    
    // Save text fields  
    foreach ($text_fields as $field) {
        if (isset($_POST[$field])) {
            if (strpos($field, 'url') !== false) {
                $value = esc_url_raw($_POST[$field]);
            } else {
                $value = sanitize_text_field($_POST[$field]);
            }
            update_post_meta($post_id, $field, $value);
        }
    }
}
