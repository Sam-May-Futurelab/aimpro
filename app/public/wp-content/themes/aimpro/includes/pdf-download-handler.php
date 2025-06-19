<?php
/**
 * PDF Download Handler
 * Handles PDF downloads with email capture and logging
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Create database table for email logs
function create_download_logs_table() {
    global $wpdb;
    
    $table_name = $wpdb->prefix . 'pdf_download_logs';
    
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        email varchar(255) NOT NULL,
        pdf_name varchar(255) NOT NULL,
        download_date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        ip_address varchar(45) NOT NULL,
        user_agent text,
        PRIMARY KEY  (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Hook to create table on theme activation
add_action('after_switch_theme', 'create_download_logs_table');

// Handle AJAX download request
function handle_pdf_download() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'pdf_download_nonce')) {
        wp_die('Security check failed');
    }
    
    $email = sanitize_email($_POST['email']);
    $pdf_id = intval($_POST['pdf_id']);
    
    if (!is_email($email)) {
        wp_send_json_error('Invalid email address');
    }
    
    // Get PDF file
    $pdf_url = wp_get_attachment_url($pdf_id);
    if (!$pdf_url) {
        wp_send_json_error('PDF not found');
    }
    
    // Log the download
    global $wpdb;
    $table_name = $wpdb->prefix . 'pdf_download_logs';
    
    $wpdb->insert(
        $table_name,
        array(
            'email' => $email,
            'pdf_name' => get_the_title($pdf_id),
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT']
        )
    );
    
    wp_send_json_success(array('download_url' => $pdf_url));
}

add_action('wp_ajax_pdf_download', 'handle_pdf_download');
add_action('wp_ajax_nopriv_pdf_download', 'handle_pdf_download');

// Add admin menu for download logs
function add_download_logs_menu() {
    add_management_page(
        'PDF Download Logs',
        'PDF Downloads',
        'manage_options',
        'pdf-download-logs',
        'display_download_logs'
    );
}
add_action('admin_menu', 'add_download_logs_menu');

// Display download logs in admin
function display_download_logs() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'pdf_download_logs';
    
    $logs = $wpdb->get_results("SELECT * FROM $table_name ORDER BY download_date DESC LIMIT 100");
    
    echo '<div class="wrap">';
    echo '<h1>PDF Download Logs</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Email</th><th>PDF</th><th>Date</th><th>IP Address</th></tr></thead>';
    echo '<tbody>';
    
    foreach ($logs as $log) {
        echo '<tr>';
        echo '<td>' . esc_html($log->email) . '</td>';
        echo '<td>' . esc_html($log->pdf_name) . '</td>';
        echo '<td>' . esc_html($log->download_date) . '</td>';
        echo '<td>' . esc_html($log->ip_address) . '</td>';
        echo '</tr>';
    }
    
    echo '</tbody></table></div>';
}

// Add meta box for PDF upload
function add_pdf_upload_meta_box() {
    add_meta_box(
        'pdf_download_meta',
        'PDF Download Settings',
        'render_pdf_upload_meta_box',
        'page'
    );
}
add_action('add_meta_boxes', 'add_pdf_upload_meta_box');

function render_pdf_upload_meta_box($post) {
    wp_nonce_field('pdf_download_meta_nonce', 'pdf_download_meta_nonce_field');
    
    $pdf_id = get_post_meta($post->ID, '_download_pdf_id', true);
    $pdf_title = get_post_meta($post->ID, '_download_pdf_title', true);
    $pdf_description = get_post_meta($post->ID, '_download_pdf_description', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="download_pdf_title">Download Title</label></th>';
    echo '<td><input type="text" id="download_pdf_title" name="download_pdf_title" value="' . esc_attr($pdf_title) . '" style="width: 100%;" placeholder="e.g., Complete SEO Checklist for 2025" /></td></tr>';
    
    echo '<tr><th><label for="download_pdf_description">Download Description</label></th>';
    echo '<td><textarea id="download_pdf_description" name="download_pdf_description" rows="3" style="width: 100%;" placeholder="Brief description of what users will get...">' . esc_textarea($pdf_description) . '</textarea></td></tr>';
    
    echo '<tr><th><label for="download_pdf_file">PDF File</label></th>';
    echo '<td>';
    echo '<input type="hidden" id="download_pdf_id" name="download_pdf_id" value="' . esc_attr($pdf_id) . '" />';
    echo '<button type="button" class="button" id="upload_pdf_button">Choose PDF File</button>';
    echo '<span id="pdf_file_name">';
    if ($pdf_id) {
        echo ' - ' . get_the_title($pdf_id);
    }
    echo '</span>';
    echo '</td></tr>';
    echo '</table>';
    
    ?>
    <script>
    jQuery(document).ready(function($) {
        $('#upload_pdf_button').click(function() {
            var mediaUploader = wp.media({
                title: 'Choose PDF File',
                multiple: false,
                library: {
                    type: 'application/pdf'
                }
            });
            
            mediaUploader.on('select', function() {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#download_pdf_id').val(attachment.id);
                $('#pdf_file_name').text(' - ' + attachment.title);
            });
            
            mediaUploader.open();
        });
    });
    </script>
    <?php
}

function save_pdf_download_meta($post_id) {
    if (!isset($_POST['pdf_download_meta_nonce_field']) || 
        !wp_verify_nonce($_POST['pdf_download_meta_nonce_field'], 'pdf_download_meta_nonce')) {
        return;
    }
    
    if (isset($_POST['download_pdf_title'])) {
        update_post_meta($post_id, '_download_pdf_title', sanitize_text_field($_POST['download_pdf_title']));
    }
    
    if (isset($_POST['download_pdf_description'])) {
        update_post_meta($post_id, '_download_pdf_description', sanitize_textarea_field($_POST['download_pdf_description']));
    }
    
    if (isset($_POST['download_pdf_id'])) {
        update_post_meta($post_id, '_download_pdf_id', intval($_POST['download_pdf_id']));
    }
}
add_action('save_post', 'save_pdf_download_meta');
?>
