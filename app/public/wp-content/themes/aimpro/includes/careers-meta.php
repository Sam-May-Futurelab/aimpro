<?php
/**
 * Careers Page Meta Fields
 * Adds custom meta box for Careers Page template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_careers_meta_box');
function aimpro_add_careers_meta_box() {
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-careers.php' || $page_slug === 'careers') {
        add_meta_box(
            'aimpro_careers_settings',
            'Careers Page Settings',
            'aimpro_careers_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_careers_meta_box_callback($post) {
    wp_nonce_field('aimpro_careers_meta_box', 'aimpro_careers_meta_box_nonce');
    
    // Page header
    $header_title = get_post_meta($post->ID, 'careers_header_title', true) ?: 'Careers at Aimpro Digital';
    $header_subtitle = get_post_meta($post->ID, 'careers_header_subtitle', true) ?: 'Join our team of digital marketing experts and help businesses grow';
    
    // Why Choose section
    $why_heading = get_post_meta($post->ID, 'careers_why_heading', true) ?: 'Why Choose Aimpro Digital?';
    
    // Current Openings section
    $openings_heading = get_post_meta($post->ID, 'careers_openings_heading', true) ?: 'Current Openings';
    
    // Hiring Process section
    $process_heading = get_post_meta($post->ID, 'careers_process_heading', true) ?: 'Our Hiring Process';
    
    // Team testimonials section
    $team_testimonials_heading = get_post_meta($post->ID, 'careers_team_testimonials_heading', true) ?: 'What Our Team Says';
    
    // Application form section
    $form_heading = get_post_meta($post->ID, 'careers_form_heading', true) ?: 'Ready to Apply?';
    $form_description = get_post_meta($post->ID, 'careers_form_description', true) ?: 'Don\'t see a position that fits? We\'re always looking for talented individuals to join our team.';
    
    // Contact section
    $contact_heading = get_post_meta($post->ID, 'careers_contact_heading', true) ?: 'Questions About Careers?';
    $contact_description = get_post_meta($post->ID, 'careers_contact_description', true) ?: 'Our HR team is here to help answer any questions about working at Aimpro Digital';
    $contact_email = get_post_meta($post->ID, 'careers_contact_email', true) ?: 'careers@aimpro.co.uk';
    $contact_phone = get_post_meta($post->ID, 'careers_contact_phone', true) ?: '+44 121 285 8490';
    
    ?>
    <table class="form-table">
        <tr>
          <th colspan="2"><h3>Page Header</h3></th>
        </tr>
        <tr>
            <th><label for="careers_header_title">Page Title</label></th>
            <td><?php wp_editor($header_title, "careers_header_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_header_subtitle">Page Subtitle</label></th>
            <td><?php wp_editor($header_subtitle, "careers_header_subtitle", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Why Choose Section</h3></th>
        </tr>
        <tr>
            <th><label for="careers_why_heading">Section Heading</label></th>
            <td><?php wp_editor($why_heading, "careers_why_heading", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        
        <?php 
        $benefits = array(
            1 => array('title' => 'Growth Opportunities', 'desc' => 'We invest in our team\'s professional development with training, certifications, and career advancement opportunities.'),
            2 => array('title' => 'Work-Life Balance', 'desc' => 'Flexible schedules, remote work options, and unlimited PTO to help you maintain a healthy work-life balance.'),
            3 => array('title' => 'Cutting-Edge Tools', 'desc' => 'Work with the latest digital marketing tools and technologies to deliver exceptional results for our clients.'),
            4 => array('title' => 'Collaborative Culture', 'desc' => 'Join a supportive team environment where collaboration, creativity, and innovation are valued and encouraged.'),
            5 => array('title' => 'Competitive Benefits', 'desc' => 'Comprehensive health insurance, retirement plans, performance bonuses, and other competitive benefits.'),
            6 => array('title' => 'Impactful Work', 'desc' => 'Help businesses grow and succeed while working on challenging and meaningful digital marketing projects.')
        );
        
        foreach ($benefits as $num => $benefit):
            $benefit_title = get_post_meta($post->ID, "careers_benefit{$num}_title", true) ?: $benefit['title'];
            $benefit_desc = get_post_meta($post->ID, "careers_benefit{$num}_desc", true) ?: $benefit['desc'];
        ?>
        <tr>
          <th colspan="2"><h4>Benefit <?php echo $num; ?></h4></th>
        </tr>
        <tr>
            <th><label for="careers_benefit<?php echo $num; ?>_title">Title</label></th>
            <td><?php wp_editor($benefit_title, "careers_benefit{$num}_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_benefit<?php echo $num; ?>_desc">Description</label></th>
            <td><?php wp_editor($benefit_desc, "careers_benefit{$num}_desc", array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <?php endforeach; ?>
          <tr>
          <th colspan="2"><h3>Current Openings Section</h3></th>
        </tr>
        <tr>
            <th><label for="careers_openings_heading">Section Heading</label></th>
            <td><?php wp_editor($openings_heading, "careers_openings_heading", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        
        <?php 
        $jobs = array(
            1 => array('title' => 'Senior SEO Specialist', 'team' => 'SEO Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid', 
                      'desc' => 'We\'re looking for an experienced SEO specialist to join our growing team. You\'ll lead technical SEO audits, develop content strategies, and help our clients achieve top search rankings.',
                      'requirements' => "3+ years of SEO experience\nStrong technical SEO skills\nExperience with SEO tools (SEMrush, Ahrefs, etc.)\nGoogle Analytics & Search Console proficiency"),
            2 => array('title' => 'PPC Campaign Manager', 'team' => 'PPC Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                      'desc' => 'Join our PPC team to manage and optimise paid advertising campaigns across Google Ads, Facebook, and other platforms. Help our clients achieve exceptional ROI on their ad spend.',
                      'requirements' => "Google Ads certification required\n2+ years of PPC management experience\nExperience with Facebook Ads Manager\nStrong analytical and optimisation skills"),
            3 => array('title' => 'Content Marketing Strategist', 'team' => 'Content Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                      'desc' => 'Lead content strategy development and execution for our diverse client base. Create compelling content that drives engagement and conversions across multiple channels.',
                      'requirements' => "3+ years in content marketing\nExcellent writing and editing skills\nExperience with content management systems\nUnderstanding of SEO best practices"),
            4 => array('title' => 'Digital Marketing Analyst', 'team' => 'Analytics Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                      'desc' => 'Transform marketing data into actionable insights. Work with our team to measure campaign performance, identify optimisation opportunities, and report on client results.',
                      'requirements' => "Strong analytical and statistical skills\nProficiency in Google Analytics & Data Studio\nExperience with Excel/Google Sheets\nKnowledge of SQL is a plus"),
            5 => array('title' => 'Client Account Manager', 'team' => 'Client Services', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                      'desc' => 'Build and maintain strong client relationships while ensuring project success. Serve as the primary point of contact for our valued clients and help grow their digital marketing programs.',
                      'requirements' => "2+ years in account management or client services\nStrong communication and presentation skills\nUnderstanding of digital marketing concepts\nProject management experience preferred"),
            6 => array('title' => 'Web Developer', 'team' => 'Development Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                      'desc' => 'Join our development team to create and optimise websites that drive conversions. Work on landing pages, e-commerce sites, and marketing technology integrations.',
                      'requirements' => "3+ years of web development experience\nProficiency in HTML, CSS, JavaScript\nExperience with WordPress and PHP\nUnderstanding of SEO and conversion optimisation")
        );
        
        foreach ($jobs as $num => $job):
            $job_title = get_post_meta($post->ID, "careers_job{$num}_title", true) ?: $job['title'];
            $job_team = get_post_meta($post->ID, "careers_job{$num}_team", true) ?: $job['team'];
            $job_type = get_post_meta($post->ID, "careers_job{$num}_type", true) ?: $job['type'];            $job_location = get_post_meta($post->ID, "careers_job{$num}_location", true) ?: $job['location'];
            $job_desc = get_post_meta($post->ID, "careers_job{$num}_desc", true) ?: $job['desc'];
            $job_requirements = get_post_meta($post->ID, "careers_job{$num}_requirements", true) ?: $job['requirements'];
            $job_show = get_post_meta($post->ID, "careers_job{$num}_show", true);
            
            // Default to showing job if not set
            if ($job_show === '') {
                $job_show = '1';
            }
        ?>
        <tr>
          <th colspan="2"><h4>Job <?php echo $num; ?>: <?php echo $job['title']; ?></h4></th>
        </tr>
        <tr>
            <th><label for="careers_job<?php echo $num; ?>_show">Show This Job</label></th>
            <td>
                <input type="checkbox" id="careers_job<?php echo $num; ?>_show" name="careers_job<?php echo $num; ?>_show" value="1" <?php checked($job_show, '1'); ?> />
                <label for="careers_job<?php echo $num; ?>_show">Display this job on the careers page</label>
            </td>
        </tr>
        <tr>
            <th><label for="careers_job<?php echo $num; ?>_title">Job Title</label></th>
            <td><?php wp_editor($job_title, "careers_job{$num}_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_job<?php echo $num; ?>_team">Team</label></th>
            <td><?php wp_editor($job_team, "careers_job{$num}_team", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_job<?php echo $num; ?>_type">Job Type</label></th>
            <td><?php wp_editor($job_type, "careers_job{$num}_type", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_job<?php echo $num; ?>_location">Location</label></th>
            <td><?php wp_editor($job_location, "careers_job{$num}_location", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_job<?php echo $num; ?>_desc">Description</label></th>
            <td><?php wp_editor($job_desc, "careers_job{$num}_desc", array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>        <tr>
            <th><label for="careers_job<?php echo $num; ?>_requirements">Requirements (one per line)</label></th>
            <td><?php wp_editor($job_requirements, "careers_job{$num}_requirements", array('textarea_rows' => 4, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_job<?php echo $num; ?>_pdf">Job Details PDF</label></th>
            <td>
                <?php 
                $job_pdf = get_post_meta($post->ID, "careers_job{$num}_pdf", true);
                ?>
                <input type="url" id="careers_job<?php echo $num; ?>_pdf" name="careers_job<?php echo $num; ?>_pdf" value="<?php echo esc_attr($job_pdf); ?>" class="regular-text" placeholder="https://example.com/job-details.pdf" />
                <br><small>Enter the URL of the uploaded PDF file for detailed job description. Upload PDF to Media Library and copy the URL here.</small>
                <br><button type="button" class="button upload-pdf-btn" data-target="careers_job<?php echo $num; ?>_pdf">Upload PDF</button>
                <?php if (!empty($job_pdf)): ?>
                    <br><a href="<?php echo esc_url($job_pdf); ?>" target="_blank">View Current PDF</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        
        <tr>
          <th colspan="2"><h3>Hiring Process Section</h3></th>
        </tr>
        <tr>
            <th><label for="careers_process_heading">Section Heading</label></th>
            <td><?php wp_editor($process_heading, "careers_process_heading", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        
        <?php 
        $process_steps = array(
            1 => array('title' => 'Application Review', 'desc' => 'We review your application and portfolio to assess your skills and experience.'),
            2 => array('title' => 'Initial Interview', 'desc' => 'Phone or video call to discuss your background and interest in the position.'),
            3 => array('title' => 'Skills Assessment', 'desc' => 'Practical test or case study relevant to the role you\'re applying for.'),
            4 => array('title' => 'Final Interview', 'desc' => 'Meet with team members and leadership to ensure mutual fit.'),
            5 => array('title' => 'Offer & Onboarding', 'desc' => 'Receive your offer and begin your journey with Aimpro Digital.')
        );
        
        foreach ($process_steps as $num => $step):
            $step_title = get_post_meta($post->ID, "careers_process{$num}_title", true) ?: $step['title'];
            $step_desc = get_post_meta($post->ID, "careers_process{$num}_desc", true) ?: $step['desc'];
        ?>
        <tr>
          <th colspan="2"><h4>Step <?php echo $num; ?></h4></th>
        </tr>
        <tr>
            <th><label for="careers_process<?php echo $num; ?>_title">Title</label></th>
            <td><?php wp_editor($step_title, "careers_process{$num}_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_process<?php echo $num; ?>_desc">Description</label></th>
            <td><?php wp_editor($step_desc, "careers_process{$num}_desc", array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <?php endforeach; ?>
        
        <tr>
          <th colspan="2"><h3>Team Testimonials Section</h3></th>
        </tr>
        <tr>
            <th><label for="careers_team_testimonials_heading">Section Heading</label></th>
            <td><?php wp_editor($team_testimonials_heading, "careers_team_testimonials_heading", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        
        <?php 
        $team_testimonials = array(
            1 => array('quote' => 'Working at Aimpro Digital has been incredibly rewarding. The team is supportive, the work is challenging, and I\'ve grown tremendously in my career.', 'author' => 'Emily Rodriguez', 'title' => 'SEO Team Lead'),
            2 => array('quote' => 'The work-life balance here is exceptional. I can focus on delivering great results for clients while still having time for my family and personal interests.', 'author' => 'David Park', 'title' => 'Senior SEO Analyst'),
            3 => array('quote' => 'I love the collaborative environment and how everyone is always willing to share knowledge and help each other succeed.', 'author' => 'Lisa Thompson', 'title' => 'PPC Team Lead')
        );
        
        foreach ($team_testimonials as $num => $testimonial):
            $testimonial_quote = get_post_meta($post->ID, "careers_testimonial{$num}_quote", true) ?: $testimonial['quote'];
            $testimonial_author = get_post_meta($post->ID, "careers_testimonial{$num}_author", true) ?: $testimonial['author'];
            $testimonial_title = get_post_meta($post->ID, "careers_testimonial{$num}_title", true) ?: $testimonial['title'];
        ?>
        <tr>
          <th colspan="2"><h4>Team Testimonial <?php echo $num; ?></h4></th>
        </tr>
        <tr>
            <th><label for="careers_testimonial<?php echo $num; ?>_quote">Quote</label></th>
            <td><?php wp_editor($testimonial_quote, "careers_testimonial{$num}_quote", array('textarea_rows' => 3, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_testimonial<?php echo $num; ?>_author">Author Name</label></th>
            <td><?php wp_editor($testimonial_author, "careers_testimonial{$num}_author", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_testimonial<?php echo $num; ?>_title">Author Title</label></th>
            <td><?php wp_editor($testimonial_title, "careers_testimonial{$num}_title", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <?php endforeach; ?>
        
        <tr>
          <th colspan="2"><h3>Application Form Section</h3></th>
        </tr>
        <tr>
            <th><label for="careers_form_heading">Form Heading</label></th>
            <td><?php wp_editor($form_heading, "careers_form_heading", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_form_description">Form Description</label></th>
            <td><?php wp_editor($form_description, "careers_form_description", array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Contact Section</h3></th>
        </tr>
        <tr>
            <th><label for="careers_contact_heading">Contact Heading</label></th>
            <td><?php wp_editor($contact_heading, "careers_contact_heading", array('textarea_rows' => 1, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_contact_description">Contact Description</label></th>
            <td><?php wp_editor($contact_description, "careers_contact_description", array('textarea_rows' => 2, 'media_buttons' => false, 'teeny' => true)); ?></td>
        </tr>
        <tr>
            <th><label for="careers_contact_email">Contact Email</label></th>
            <td><input type="email" id="careers_contact_email" name="careers_contact_email" value="<?php echo esc_attr($contact_email); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="careers_contact_phone">Contact Phone</label></th>
            <td><input type="text" id="careers_contact_phone" name="careers_contact_phone" value="<?php echo esc_attr($contact_phone); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

// Save meta box data
add_action('save_post', 'aimpro_save_careers_meta');
function aimpro_save_careers_meta($post_id) {
    if (!isset($_POST['aimpro_careers_meta_box_nonce']) || !wp_verify_nonce($_POST['aimpro_careers_meta_box_nonce'], 'aimpro_careers_meta_box')) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Save header fields
    $header_fields = array(
        'careers_header_title' => 'wp_kses_post',
        'careers_header_subtitle' => 'wp_kses_post',
        'careers_why_heading' => 'wp_kses_post',
        'careers_openings_heading' => 'wp_kses_post',
        'careers_process_heading' => 'wp_kses_post',
        'careers_team_testimonials_heading' => 'wp_kses_post',
        'careers_form_heading' => 'wp_kses_post',
        'careers_form_description' => 'wp_kses_post',
        'careers_contact_heading' => 'wp_kses_post',
        'careers_contact_description' => 'wp_kses_post',
        'careers_contact_email' => 'sanitize_email',
        'careers_contact_phone' => 'sanitize_text_field'
    );
    
    foreach ($header_fields as $field => $sanitize_func) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, $sanitize_func($_POST[$field]));
        }
    }
    
    // Save benefits fields
    for ($i = 1; $i <= 6; $i++) {
        $benefit_fields = array(
            "careers_benefit{$i}_title" => 'wp_kses_post',
            "careers_benefit{$i}_desc" => 'wp_kses_post'
        );
        
        foreach ($benefit_fields as $field => $sanitize_func) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, $field, $sanitize_func($_POST[$field]));
            }
        }
    }
    
    // Save process fields
    for ($i = 1; $i <= 5; $i++) {
        $process_fields = array(
            "careers_process{$i}_title" => 'wp_kses_post',
            "careers_process{$i}_desc" => 'wp_kses_post'
        );
        
        foreach ($process_fields as $field => $sanitize_func) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, $field, $sanitize_func($_POST[$field]));
            }
        }
    }
    
    // Save team testimonials fields
    for ($i = 1; $i <= 3; $i++) {
        $testimonial_fields = array(
            "careers_testimonial{$i}_quote" => 'wp_kses_post',
            "careers_testimonial{$i}_author" => 'wp_kses_post',
            "careers_testimonial{$i}_title" => 'wp_kses_post'
        );
        
        foreach ($testimonial_fields as $field => $sanitize_func) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, $field, $sanitize_func($_POST[$field]));
            }
        }
    }    // Save job opening fields
    for ($i = 1; $i <= 6; $i++) {
        $job_fields = array(
            "careers_job{$i}_title" => 'wp_kses_post',
            "careers_job{$i}_team" => 'wp_kses_post',
            "careers_job{$i}_type" => 'wp_kses_post',
            "careers_job{$i}_location" => 'wp_kses_post',
            "careers_job{$i}_desc" => 'wp_kses_post',
            "careers_job{$i}_requirements" => 'wp_kses_post',
            "careers_job{$i}_pdf" => 'esc_url_raw'
        );
        
        foreach ($job_fields as $field => $sanitize_func) {
            if (isset($_POST[$field])) {                update_post_meta($post_id, $field, $sanitize_func($_POST[$field]));
            }
        }
        
        // Handle show/hide checkbox
        $show_field = "careers_job{$i}_show";
        if (isset($_POST[$show_field])) {
            update_post_meta($post_id, $show_field, '1');        } else {
            update_post_meta($post_id, $show_field, '0');
        }
    }
}

// Add JavaScript for PDF upload functionality
add_action('admin_enqueue_scripts', 'aimpro_careers_admin_scripts');
function aimpro_careers_admin_scripts() {
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-careers.php' || $page_slug === 'careers') {
        wp_enqueue_media();
    }
}

add_action('admin_footer', 'aimpro_careers_pdf_upload_js');
function aimpro_careers_pdf_upload_js() {
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-careers.php' || $page_slug === 'careers') {
        ?>
        <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.upload-pdf-btn').click(function(e) {
                e.preventDefault();
                
                var button = $(this);
                var targetField = button.data('target');
                
                var frame = wp.media({
                    title: 'Select or Upload PDF',
                    button: {
                        text: 'Use this PDF'
                    },
                    library: {
                        type: 'application/pdf'
                    },
                    multiple: false
                });
                
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('#' + targetField).val(attachment.url);
                });
                
                frame.open();
            });
        });
        </script>
        <?php
    }
}
