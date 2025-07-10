<?php
/**
 * Single Blog Post Meta Fields
 * Adds custom meta boxes for blog post customization
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add meta boxes for single blog post customization
 */
function aimpro_add_single_blog_meta_boxes() {
    add_meta_box(
        'aimpro_blog_lead_magnet',
        'Lead Magnet Settings',
        'aimpro_blog_lead_magnet_callback',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'aimpro_add_single_blog_meta_boxes');

/**
 * Meta box callback for blog post lead magnet settings
 */
function aimpro_blog_lead_magnet_callback($post) {
    // Add nonce for security
    wp_nonce_field('aimpro_blog_meta_nonce', 'aimpro_blog_meta_nonce');
    
    // Get current values
    $lead_magnet_enabled = get_post_meta($post->ID, '_blog_lead_magnet_enabled', true);
    $lead_magnet_title = get_post_meta($post->ID, '_blog_lead_magnet_title', true);
    $lead_magnet_description = get_post_meta($post->ID, '_blog_lead_magnet_description', true);
    $lead_magnet_type = get_post_meta($post->ID, '_blog_lead_magnet_type', true);
    $lead_magnet_pdf_id = get_post_meta($post->ID, '_blog_lead_magnet_pdf_id', true);
    $lead_magnet_benefits = get_post_meta($post->ID, '_blog_lead_magnet_benefits', true);
    $lead_magnet_button_text = get_post_meta($post->ID, '_blog_lead_magnet_button_text', true);
    $lead_magnet_icon = get_post_meta($post->ID, '_blog_lead_magnet_icon', true);
    $lead_magnet_badge = get_post_meta($post->ID, '_blog_lead_magnet_badge', true);
    
    // Set defaults
    if (empty($lead_magnet_enabled)) $lead_magnet_enabled = '1';
    if (empty($lead_magnet_title)) $lead_magnet_title = 'Complete SEO Checklist for 2025';
    if (empty($lead_magnet_description)) $lead_magnet_description = 'Get our comprehensive 50-point SEO checklist to boost your search rankings and drive more organic traffic.';
    if (empty($lead_magnet_type)) $lead_magnet_type = 'seo_checklist';
    if (empty($lead_magnet_benefits)) $lead_magnet_benefits = "Technical SEO audit points\nContent optimisation tips\nLocal SEO strategies";
    if (empty($lead_magnet_button_text)) $lead_magnet_button_text = 'Download Free';
    if (empty($lead_magnet_icon)) $lead_magnet_icon = 'fas fa-search';
    if (empty($lead_magnet_badge)) $lead_magnet_badge = 'Free Guide';
    
    // Get PDF file info if selected
    $pdf_file_url = '';
    $pdf_file_name = '';
    if ($lead_magnet_pdf_id) {
        $pdf_file_url = wp_get_attachment_url($lead_magnet_pdf_id);
        $pdf_file_name = get_the_title($lead_magnet_pdf_id);
    }
    
    ?>
    <div class="aimpro-meta-box-wrapper">
        <p><strong>Customize the lead magnet that appears in the sidebar of this blog post.</strong></p>
        
        <table class="form-table">
            <tr>
                <th scope="row">
                    <label for="blog_lead_magnet_enabled">Enable Lead Magnet</label>
                </th>
                <td>
                    <input type="checkbox" id="blog_lead_magnet_enabled" name="blog_lead_magnet_enabled" value="1" <?php checked($lead_magnet_enabled, '1'); ?> />
                    <label for="blog_lead_magnet_enabled">Show lead magnet in sidebar</label>
                    <p class="description">Uncheck to hide the lead magnet on this blog post</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="blog_lead_magnet_title">Lead Magnet Title</label>
                </th>
                <td>
                    <input type="text" id="blog_lead_magnet_title" name="blog_lead_magnet_title" value="<?php echo esc_attr($lead_magnet_title); ?>" class="regular-text" />
                    <p class="description">The main title for your lead magnet (e.g., "Complete SEO Checklist for 2025")</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="blog_lead_magnet_description">Description</label>
                </th>
                <td>
                    <textarea id="blog_lead_magnet_description" name="blog_lead_magnet_description" rows="3" class="large-text"><?php echo esc_textarea($lead_magnet_description); ?></textarea>
                    <p class="description">Brief description of what the lead magnet offers</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="blog_lead_magnet_type">Magnet Type/ID</label>
                </th>
                <td>
                    <input type="text" id="blog_lead_magnet_type" name="blog_lead_magnet_type" value="<?php echo esc_attr($lead_magnet_type); ?>" class="regular-text" />
                    <p class="description">Identifier for the lead magnet (used in backend processing). Examples: seo_checklist, marketing_guide, etc.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="blog_lead_magnet_pdf">PDF File</label>
                </th>
                <td>
                    <div class="pdf-upload-field">
                        <input type="hidden" id="blog_lead_magnet_pdf_id" name="blog_lead_magnet_pdf_id" value="<?php echo esc_attr($lead_magnet_pdf_id); ?>" />
                        <div class="pdf-preview" style="<?php echo $lead_magnet_pdf_id ? '' : 'display: none;'; ?>">
                            <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                <span class="dashicons dashicons-media-document" style="font-size: 20px; color: #d63638;"></span>
                                <span class="pdf-name"><?php echo esc_html($pdf_file_name); ?></span>
                                <button type="button" class="button remove-pdf">Remove</button>
                            </div>
                            <?php if ($pdf_file_url): ?>
                                <a href="<?php echo esc_url($pdf_file_url); ?>" target="_blank" class="button button-small">Preview PDF</a>
                            <?php endif; ?>
                        </div>
                        <div class="pdf-upload-button" style="<?php echo $lead_magnet_pdf_id ? 'display: none;' : ''; ?>">
                            <button type="button" class="button upload-pdf">Upload PDF File</button>
                        </div>
                    </div>
                    <p class="description">Upload the PDF file that users will download. Only PDF files are allowed.</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="blog_lead_magnet_benefits">Benefits List</label>
                </th>
                <td>
                    <textarea id="blog_lead_magnet_benefits" name="blog_lead_magnet_benefits" rows="4" class="large-text"><?php echo esc_textarea($lead_magnet_benefits); ?></textarea>
                    <p class="description">Enter each benefit on a new line (checkmarks will be added automatically)</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="blog_lead_magnet_button_text">Button Text</label>
                </th>
                <td>
                    <input type="text" id="blog_lead_magnet_button_text" name="blog_lead_magnet_button_text" value="<?php echo esc_attr($lead_magnet_button_text); ?>" class="regular-text" />
                    <p class="description">Text for the download button (e.g., "Download Free", "Get Guide Now")</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="blog_lead_magnet_badge">Badge Text</label>
                </th>
                <td>
                    <input type="text" id="blog_lead_magnet_badge" name="blog_lead_magnet_badge" value="<?php echo esc_attr($lead_magnet_badge); ?>" class="regular-text" />
                    <p class="description">Badge text that appears in the header (e.g., "Free Guide", "Exclusive Download")</p>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="blog_lead_magnet_icon">Icon Class</label>
                </th>
                <td>
                    <input type="text" id="blog_lead_magnet_icon" name="blog_lead_magnet_icon" value="<?php echo esc_attr($lead_magnet_icon); ?>" class="regular-text" />
                    <p class="description">FontAwesome icon class. Examples:</p>
                    <ul style="margin-top: 5px;">
                        <li><code>fas fa-search</code> - Search icon (SEO guides)</li>
                        <li><code>fas fa-download</code> - Download icon</li>
                        <li><code>fas fa-chart-line</code> - Chart icon (analytics guides)</li>
                        <li><code>fas fa-bullhorn</code> - Marketing icon</li>
                        <li><code>fas fa-cog</code> - Settings/tools icon</li>
                        <li><code>fas fa-rocket</code> - Growth/speed icon</li>
                    </ul>
                </td>
            </tr>
        </table>
        
        <div style="margin-top: 20px; padding: 15px; background: #f0f0f1; border-radius: 5px;">
            <h4 style="margin-top: 0;">Preview</h4>
            <p>The lead magnet will appear in the sidebar with:</p>
            <ul>
                <li><strong>Icon:</strong> <span id="preview_icon"><?php echo esc_html($lead_magnet_icon); ?></span></li>
                <li><strong>Badge:</strong> <span id="preview_badge"><?php echo esc_html($lead_magnet_badge); ?></span></li>
                <li><strong>Title:</strong> <span id="preview_title"><?php echo esc_html($lead_magnet_title); ?></span></li>
                <li><strong>Button:</strong> <span id="preview_button"><?php echo esc_html($lead_magnet_button_text); ?></span></li>
            </ul>
        </div>
    </div>
    
    <script>
    jQuery(document).ready(function($) {
        // Live preview updates
        $('#blog_lead_magnet_title').on('input', function() {
            $('#preview_title').text($(this).val() || 'Complete SEO Checklist for 2025');
        });
        
        $('#blog_lead_magnet_button_text').on('input', function() {
            $('#preview_button').text($(this).val() || 'Download Free');
        });
        
        $('#blog_lead_magnet_badge').on('input', function() {
            $('#preview_badge').text($(this).val() || 'Free Guide');
        });
        
        $('#blog_lead_magnet_icon').on('input', function() {
            $('#preview_icon').text($(this).val() || 'fas fa-search');
        });
        
        // PDF Upload functionality
        var mediaUploader;
        
        $('.upload-pdf').on('click', function(e) {
            e.preventDefault();
            
            // If the uploader object has already been created, reopen the dialog
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }
            
            // Create the media uploader
            mediaUploader = wp.media({
                title: 'Select PDF File',
                button: {
                    text: 'Use this PDF'
                },
                library: {
                    type: 'application/pdf'
                },
                multiple: false
            });
            
            // When a file is selected, run a callback
            mediaUploader.on('select', function() {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                
                // Make sure it's a PDF
                if (attachment.mime === 'application/pdf') {
                    $('#blog_lead_magnet_pdf_id').val(attachment.id);
                    $('.pdf-name').text(attachment.title);
                    $('.pdf-preview a').attr('href', attachment.url);
                    $('.pdf-preview').show();
                    $('.pdf-upload-button').hide();
                } else {
                    alert('Please select a PDF file.');
                }
            });
            
            // Open the uploader dialog
            mediaUploader.open();
        });
        
        // Remove PDF
        $('.remove-pdf').on('click', function(e) {
            e.preventDefault();
            $('#blog_lead_magnet_pdf_id').val('');
            $('.pdf-preview').hide();
            $('.pdf-upload-button').show();
        });
    });
    </script>
    
    <style>
    .aimpro-meta-box-wrapper .form-table th {
        width: 200px;
    }
    .aimpro-meta-box-wrapper .description {
        margin-top: 3px !important;
    }
    .aimpro-meta-box-wrapper code {
        background: #f1f1f1;
        padding: 2px 4px;
        border-radius: 3px;
        font-size: 11px;
    }
    </style>
    <?php
}

/**
 * Save blog post meta box data
 */
function aimpro_save_single_blog_meta($post_id) {
    // Check if nonce is set
    if (!isset($_POST['aimpro_blog_meta_nonce'])) {
        return;
    }
    
    // Verify nonce
    if (!wp_verify_nonce($_POST['aimpro_blog_meta_nonce'], 'aimpro_blog_meta_nonce')) {
        return;
    }
    
    // Check if user has permission to edit post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Don't save on autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Save lead magnet fields
    $fields = array(
        'blog_lead_magnet_enabled',
        'blog_lead_magnet_title', 
        'blog_lead_magnet_description',
        'blog_lead_magnet_type',
        'blog_lead_magnet_pdf_id',
        'blog_lead_magnet_benefits',
        'blog_lead_magnet_button_text',
        'blog_lead_magnet_icon',
        'blog_lead_magnet_badge'
    );
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = sanitize_text_field($_POST[$field]);
            if ($field === 'blog_lead_magnet_description' || $field === 'blog_lead_magnet_benefits') {
                $value = sanitize_textarea_field($_POST[$field]);
            }
            update_post_meta($post_id, '_' . $field, $value);
        } else {
            // For checkbox, if not set, save as empty
            if ($field === 'blog_lead_magnet_enabled') {
                update_post_meta($post_id, '_' . $field, '');
            }
        }
    }
}
add_action('save_post', 'aimpro_save_single_blog_meta');

/**
 * Helper function to get lead magnet data for a blog post
 */
function aimpro_get_blog_lead_magnet_data($post_id) {
    $pdf_id = get_post_meta($post_id, '_blog_lead_magnet_pdf_id', true);
    $pdf_url = $pdf_id ? wp_get_attachment_url($pdf_id) : '';
    
    return array(
        'enabled' => get_post_meta($post_id, '_blog_lead_magnet_enabled', true),
        'title' => get_post_meta($post_id, '_blog_lead_magnet_title', true) ?: 'Complete SEO Checklist for 2025',
        'description' => get_post_meta($post_id, '_blog_lead_magnet_description', true) ?: 'Get our comprehensive 50-point SEO checklist to boost your search rankings and drive more organic traffic.',
        'type' => get_post_meta($post_id, '_blog_lead_magnet_type', true) ?: 'seo_checklist',
        'pdf_id' => $pdf_id,
        'pdf_url' => $pdf_url,
        'benefits' => get_post_meta($post_id, '_blog_lead_magnet_benefits', true) ?: "Technical SEO audit points\nContent optimisation tips\nLocal SEO strategies",
        'button_text' => get_post_meta($post_id, '_blog_lead_magnet_button_text', true) ?: 'Download Free',
        'icon' => get_post_meta($post_id, '_blog_lead_magnet_icon', true) ?: 'fas fa-search',
        'badge' => get_post_meta($post_id, '_blog_lead_magnet_badge', true) ?: 'Free Guide'
    );
}

/**
 * Enqueue media uploader scripts for the admin
 */
function aimpro_enqueue_media_uploader() {
    global $post_type;
    if ($post_type == 'post') {
        wp_enqueue_media();
    }
}
add_action('admin_enqueue_scripts', 'aimpro_enqueue_media_uploader');
