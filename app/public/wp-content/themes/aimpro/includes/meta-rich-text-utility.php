<?php
/**
 * Rich Text Meta Utility
 * Shared utility functions for adding rich text editing to all meta boxes
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get common editor settings for consistent configuration
 */
function aimpro_get_editor_settings($field_name, $type = 'standard') {
    $base_settings = array(
        'textarea_name' => $field_name,
        'media_buttons' => false,
        'textarea_rows' => 4,
        'tabindex' => null,
        'editor_css' => '<style>#wp-' . $field_name . '-editor-container .wp-editor-area{font-family: inherit;}</style>',
        'editor_class' => 'rich-text-editor',
        'teeny' => false,
        'dfw' => false,
        'tinymce' => array(
            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink,|,undo,redo',
            'toolbar2' => '',
            'toolbar3' => '',
            'toolbar4' => '',
            'plugins' => 'lists,paste,wordpress,wplink',
            'paste_as_text' => true,
            'paste_auto_cleanup_on_paste' => true,
            'paste_remove_spans' => true,
            'paste_remove_styles' => true,
            'paste_strip_class_attributes' => true,
            'content_style' => 'body { font-family: inherit; font-size: 14px; line-height: 1.4; }'
        ),
        'quicktags' => array(
            'buttons' => 'strong,em,ul,ol,li,link,close'
        )
    );
    
    // Adjust settings based on field type
    switch ($type) {
        case 'title':
            $base_settings['textarea_rows'] = 2;
            $base_settings['tinymce']['toolbar1'] = 'bold,italic,underline,|,undo,redo';
            break;
        case 'subtitle':
            $base_settings['textarea_rows'] = 3;
            $base_settings['tinymce']['toolbar1'] = 'bold,italic,underline,|,link,unlink,|,undo,redo';
            break;
        case 'description':
            $base_settings['textarea_rows'] = 5;
            break;
        case 'content':
            $base_settings['textarea_rows'] = 8;
            break;
    }
    
    return $base_settings;
}

/**
 * Render a rich text editor field with consistent styling
 */
function aimpro_render_editor_field($field_name, $value, $label, $description = '', $type = 'standard', $required = false) {
    $editor_settings = aimpro_get_editor_settings($field_name, $type);
    
    echo '<tr>';
    echo '<th scope="row">';
    echo '<label for="' . esc_attr($field_name) . '">' . esc_html($label);
    if ($required) echo ' <span style="color: red;">*</span>';
    echo '</label>';
    echo '</th>';
    echo '<td>';
    
    wp_editor($value, $field_name, $editor_settings);
    
    if (!empty($description)) {
        echo '<p class="description">' . esc_html($description) . '</p>';
    }
    
    echo '</td>';
    echo '</tr>';
}

/**
 * Simple helper to render wp_editor - no scripts needed
 */
function aimpro_render_rich_text($field_name, $value, $type = 'standard') {
    $settings = aimpro_get_editor_settings($field_name, $type);
    wp_editor($value, $field_name, $settings);
}

/**
 * Smart field converter - converts any text input/textarea to wp_editor
 */
function aimpro_convert_to_rich_text($field_name, $value, $label, $type = 'standard', $placeholder = '') {
    $editor_settings = aimpro_get_editor_settings($field_name, $type);
    
    echo '<label for="' . esc_attr($field_name) . '">' . esc_html($label) . '</label>';
    wp_editor($value, $field_name, $editor_settings);
    
    if (!empty($placeholder)) {
        echo '<p class="description">' . esc_html($placeholder) . '</p>';
    }
}

/**
 * Quick conversion function - just replace textarea with wp_editor
 */
function aimpro_textarea_to_editor($field_name, $value, $rows = 4) {
    $settings = array(
        'textarea_name' => $field_name,
        'media_buttons' => false,
        'textarea_rows' => $rows,
        'teeny' => false,
        'tinymce' => array(
            'toolbar1' => 'bold,italic,underline,strikethrough,|,bullist,numlist,|,link,unlink,|,undo,redo',
            'toolbar2' => '',
            'plugins' => 'lists,paste,wordpress,wplink',
            'paste_as_text' => true
        ),
        'quicktags' => array(
            'buttons' => 'strong,em,ul,ol,li,link,close'
        )
    );
    
    wp_editor($value, $field_name, $settings);
}

/**
 * Add styling for rich text editors
 */
function aimpro_add_rich_text_styles() {
    ?>
    <style>
    .aimpro-meta .form-table th {
        width: 200px;
        font-weight: 600;
        vertical-align: top;
        padding-top: 20px;
    }
    .aimpro-meta .form-table td {
        padding: 15px 10px;
    }
    .aimpro-meta input[type="text"],
    .aimpro-meta input[type="url"],
    .aimpro-meta textarea {
        width: 100%;
        max-width: 100%;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .aimpro-meta .wp-editor-container {
        max-width: 100%;
    }
    .aimpro-meta .wp-editor-area {
        max-width: 100%;
        font-family: inherit;
    }
    .aimpro-meta .description {
        font-style: italic;
        color: #666;
        margin-top: 5px;
    }
    .aimpro-section {
        margin-bottom: 30px;
        padding: 20px;
        background: #f9f9f9;
        border-radius: 5px;
    }
    .aimpro-section h4 {
        margin: 0 0 15px 0;
        padding: 0;
        color: #333;
        border-bottom: 2px solid #0073aa;
        padding-bottom: 10px;
    }
    .repeater-item {
        border: 1px solid #ddd;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 4px;
        background: #fff;
    }
    .repeater-item .remove-item {
        float: right;
        color: #dc3232;
        text-decoration: none;
        font-weight: bold;
    }
    .repeater-item .remove-item:hover {
        color: #a00;
    }
    </style>
    <?php
}

/**
 * Instructions for converting existing meta files to rich text
 * 
 * SUPER SIMPLE CONVERSION PROCESS:
 * 
 * 1. Add this line at the top of your meta file:
 *    require_once get_template_directory() . '/includes/meta-rich-text-utility.php';
 * 
 * 2. Replace textarea elements with wp_editor:
 *    
 *    BEFORE:
 *    <textarea name="field_name" rows="4"><?php echo esc_textarea($value); ?></textarea>
 *    
 *    AFTER:
 *    <?php wp_editor($value, 'field_name', aimpro_get_editor_settings('field_name', 'description')); ?>
 * 
 * 3. Replace text input elements for titles/subtitles:
 *    
 *    BEFORE:
 *    <input type="text" name="field_name" value="<?php echo esc_attr($value); ?>" />
 *    
 *    AFTER:
 *    <?php wp_editor($value, 'field_name', aimpro_get_editor_settings('field_name', 'title')); ?>
 * 
 * 4. Types available: 'title', 'subtitle', 'description', 'content', 'standard'
 * 
 * 5. The save functions don't need to change - they already use wp_kses_post()
 */

/**
 * Quick helper - just include this file and use this function
 */
function aimpro_easy_rich_text($field_name, $value, $type = 'standard') {
    wp_editor($value, $field_name, aimpro_get_editor_settings($field_name, $type));
}
