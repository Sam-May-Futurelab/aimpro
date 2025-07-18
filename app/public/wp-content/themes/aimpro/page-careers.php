﻿<?php
/**
 * Template Name: Careers Page
 * Description: Careers and job opportunities page
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/about'); ?>">About</a>
                <span class="separator">›</span>
                <span class="current">Careers</span>
            </nav>
        </div>
    </div>

    <div class="container">        <!-- Page Header -->
        <section class="page-header animate-on-scroll animate-fade-up">
            <div class="page-header-content">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_header_title', true) ?: 'Careers at Aimpro Digital'); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_header_subtitle', true) ?: 'Join our team of digital marketing experts and help businesses grow'); ?></p>
            </div>
        </section>        <!-- Why Work With Us -->
        <section class="why-work-with-us">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_why_heading', true) ?: 'Why Choose Aimpro Digital?'); ?></h2>                <div class="benefits-grid">
                    <?php 
                    $benefit_icons = array(
                        1 => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentcolour" stroke-width="2"/><path d="m22 21-3-3m0 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
                        2 => '<path d="M12 2v6.5l3 1.5-3 1.5V18" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 12c0 4 2.5 8 6 8s6-4 6-8-2.5-8-6-8-6 4-6 8z" stroke="currentcolour" stroke-width="2"/>',
                        3 => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentcolour" stroke-width="2"/><line x1="8" y1="21" x2="16" y2="21" stroke="currentcolour" stroke-width="2"/><line x1="12" y1="17" x2="12" y2="21" stroke="currentcolour" stroke-width="2"/>',
                        4 => '<circle cx="12" cy="12" r="10" stroke="currentcolour" stroke-width="2"/><polyline points="12,6 12,12 16,14" stroke="currentcolour" stroke-width="2"/>',
                        5 => '<path d="M20 6L9 17l-5-5" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
                        6 => '<path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'
                    );
                    
                    $benefit_defaults = array(
                        1 => array('title' => 'Growth Opportunities', 'desc' => 'We invest in our team\'s professional development with training, certifications, and career advancement opportunities.'),
                        2 => array('title' => 'Work-Life Balance', 'desc' => 'Flexible schedules, remote work options, and unlimited PTO to help you maintain a healthy work-life balance.'),
                        3 => array('title' => 'Cutting-Edge Tools', 'desc' => 'Work with the latest digital marketing tools and technologies to deliver exceptional results for our clients.'),
                        4 => array('title' => 'Collaborative Culture', 'desc' => 'Join a supportive team environment where collaboration, creativity, and innovation are valued and encouraged.'),
                        5 => array('title' => 'Competitive Benefits', 'desc' => 'Comprehensive health insurance, retirement plans, performance bonuses, and other competitive benefits.'),
                        6 => array('title' => 'Impactful Work', 'desc' => 'Help businesses grow and succeed while working on challenging and meaningful digital marketing projects.')
                    );
                    
                    for ($i = 1; $i <= 6; $i++):
                        $title = get_post_meta(get_the_ID(), "careers_benefit{$i}_title", true) ?: $benefit_defaults[$i]['title'];
                        $desc = get_post_meta(get_the_ID(), "careers_benefit{$i}_desc", true) ?: $benefit_defaults[$i]['desc'];
                    ?>                    <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <?php echo $benefit_icons[$i]; ?>
                            </svg>
                        </div>
                        <h3><?php echo wp_kses_post($title); ?></h3>
                        <p><?php echo wp_kses_post($desc); ?></p>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>        <!-- Open Positions -->
        <section class="open-positions">            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_openings_heading', true) ?: 'Current Openings'); ?></h2>
                <div class="positions-grid">
                    <?php 
                    // Job defaults for initial setup
                    $job_defaults = array(
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
                      for ($i = 1; $i <= 6; $i++):
                        $job_title = get_post_meta(get_the_ID(), "careers_job{$i}_title", true) ?: $job_defaults[$i]['title'];
                        $job_team = get_post_meta(get_the_ID(), "careers_job{$i}_team", true) ?: $job_defaults[$i]['team'];
                        $job_type = get_post_meta(get_the_ID(), "careers_job{$i}_type", true) ?: $job_defaults[$i]['type'];
                        $job_location = get_post_meta(get_the_ID(), "careers_job{$i}_location", true) ?: $job_defaults[$i]['location'];
                        $job_desc = get_post_meta(get_the_ID(), "careers_job{$i}_desc", true) ?: $job_defaults[$i]['desc'];
                        $job_requirements = get_post_meta(get_the_ID(), "careers_job{$i}_requirements", true) ?: $job_defaults[$i]['requirements'];
                        $job_show = get_post_meta(get_the_ID(), "careers_job{$i}_show", true);
                        
                        // Default to showing job if not set
                        if ($job_show === '') {
                            $job_show = '1';
                        }
                        
                        // Hide job if show is set to 0
                        if ($job_show === '0') continue;
                    ?>
                    <div class="position-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="position-header">
                            <h3><?php echo wp_kses_post($job_title); ?></h3>
                            <div class="position-meta">
                                <span class="department"><?php echo wp_kses_post($job_team); ?></span>
                                <span class="type"><?php echo wp_kses_post($job_type); ?></span>
                                <span class="location"><?php echo wp_kses_post($job_location); ?></span>
                            </div>
                        </div>
                        <div class="position-content">
                            <p><?php echo wp_kses_post($job_desc); ?></p>
                            <?php if (!empty($job_requirements)): ?>
                            <div class="requirements">
                                <h4>Key Requirements:</h4>
                                <div><?php echo wp_kses_post($job_requirements); ?></div>
                            </div>
                            <?php endif; ?>                            <div class="position-actions">
                                <a href="#apply" class="btn btn-primary">Apply Now</a>
                                <?php 
                                $job_pdf = get_post_meta(get_the_ID(), "careers_job{$i}_pdf", true);
                                if (!empty($job_pdf)): 
                                ?>
                                    <a href="<?php echo esc_url($job_pdf); ?>" target="_blank" class="btn btn-secondary">View Details</a>
                                <?php else: ?>
                                    <a href="#details" class="btn btn-secondary" style="opacity: 0.6; cursor: not-allowed;">View Details</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

        <!-- Application Process -->
        <section class="application-process">
            <div class="section-content">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_process_heading', true) ?: 'Our Hiring Process'); ?></h2>
                <div class="process-steps">
                    <?php 
                    $process_defaults = array(
                        1 => array('title' => 'Application Review', 'desc' => 'We review your application and portfolio to assess your skills and experience.'),
                        2 => array('title' => 'Initial Interview', 'desc' => 'Phone or video call to discuss your background and interest in the position.'),
                        3 => array('title' => 'Skills Assessment', 'desc' => 'Practical test or case study relevant to the role you\'re applying for.'),
                        4 => array('title' => 'Final Interview', 'desc' => 'Meet with team members and leadership to ensure mutual fit.'),
                        5 => array('title' => 'Offer & Onboarding', 'desc' => 'Receive your offer and begin your journey with Aimpro Digital.')
                    );
                    
                    for ($i = 1; $i <= 5; $i++):
                        $step_title = get_post_meta(get_the_ID(), "careers_process{$i}_title", true) ?: $process_defaults[$i]['title'];
                        $step_desc = get_post_meta(get_the_ID(), "careers_process{$i}_desc", true) ?: $process_defaults[$i]['desc'];
                    ?>
                    <div class="step">
                        <div class="step-number"><?php echo $i; ?></div>
                        <div class="step-content">
                            <h3><?php echo wp_kses_post($step_title); ?></h3>
                            <p><?php echo wp_kses_post($step_desc); ?></p>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

        <!-- Employee Testimonials -->
        <section class="employee-testimonials">
            <div class="section-content">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_team_testimonials_heading', true) ?: 'What Our Team Says'); ?></h2>
                <div class="testimonials-grid">
                    <?php 
                    $testimonial_defaults = array(
                        1 => array('quote' => 'Working at Aimpro Digital has been incredibly rewarding. The team is supportive, the work is challenging, and I\'ve grown tremendously in my career.', 'author' => 'Emily Rodriguez', 'title' => 'SEO Team Lead'),
                        2 => array('quote' => 'The work-life balance here is exceptional. I can focus on delivering great results for clients while still having time for my family and personal interests.', 'author' => 'David Park', 'title' => 'Senior SEO Analyst'),
                        3 => array('quote' => 'I love the collaborative environment and how everyone is always willing to share knowledge and help each other succeed.', 'author' => 'Lisa Thompson', 'title' => 'PPC Team Lead')
                    );
                    
                    for ($i = 1; $i <= 3; $i++):
                        $quote = get_post_meta(get_the_ID(), "careers_testimonial{$i}_quote", true) ?: $testimonial_defaults[$i]['quote'];
                        $author = get_post_meta(get_the_ID(), "careers_testimonial{$i}_author", true) ?: $testimonial_defaults[$i]['author'];
                        $title = get_post_meta(get_the_ID(), "careers_testimonial{$i}_title", true) ?: $testimonial_defaults[$i]['title'];
                    ?>
                    <div class="testimonial-card">
                        <blockquote>
                            <?php echo wp_kses_post($quote); ?>
                        </blockquote>
                        <div class="testimonial-author">
                            <h4><?php echo wp_kses_post($author); ?></h4>
                            <p><?php echo wp_kses_post($title); ?></p>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>        <!-- Application Form -->
        <section class="application-form">
            <div class="section-content">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_form_heading', true) ?: 'Ready to Apply?'); ?></h2>
                <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_form_description', true) ?: 'Don\'t see a position that fits? We\'re always looking for talented individuals to join our team.'); ?></p>
                
                <?php if (isset($_GET['career_success'])): ?>
                    <div class="form-message success">
                        <p><strong>Thank you!</strong> Your application has been submitted successfully. We'll review it and get back to you soon.</p>
                    </div>
                <?php elseif (isset($_GET['career_error'])): ?>
                    <div class="form-message error">
                        <p><strong>Error:</strong> There was a problem submitting your application. Please try again or contact us directly at careers@aimpro.co.uk.</p>
                    </div>
                <?php endif; ?>
                
                <form class="career-application-form" method="post" action="<?php echo admin_url('admin-post.php'); ?>" enctype="multipart/form-data" novalidate>
                    <?php wp_nonce_field('career_application', 'career_nonce'); ?>
                    <input type="hidden" name="action" value="career_application">
                    <input type="hidden" name="_wp_http_referer" value="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="first_name">First Name *</label>
                            <input type="text" id="first_name" name="first_name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="last_name">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="position">Position of Interest *</label>
                            <select id="position" name="position" required>
                                <option value="">Select a position</option>
                                <option value="seo-specialist">Senior SEO Specialist</option>
                                <option value="ppc-manager">PPC Campaign Manager</option>
                                <option value="content-strategist">Content Marketing Strategist</option>
                                <option value="data-analyst">Digital Marketing Analyst</option>
                                <option value="account-manager">Client Account Manager</option>
                                <option value="web-developer">Web Developer</option>
                                <option value="other">Other / General Application</option>
                            </select>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="resume">Resume/CV *</label>
                            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                            <small>Please upload your resume as PDF, DOC, or DOCX file</small>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="portfolio">Portfolio/Website URL</label>
                            <input type="url" id="portfolio" name="portfolio" placeholder="https://yourwebsite.com">
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="cover_letter">Cover Letter / Why You Want to Join Us *</label>
                            <textarea id="cover_letter" name="cover_letter" rows="6" required placeholder="Tell us about yourself and why you'd be a great fit for our team..."></textarea>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </div>
                </form>
            </div>
        </section>        <!-- Contact HR -->        
        <section class="contact-hr">
            <div class="section-content">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_contact_heading', true) ?: 'Questions About Careers?'); ?></h2>
                <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'careers_contact_description', true) ?: 'Our HR team is here to help answer any questions about working at Aimpro Digital'); ?></p>
                <div class="cta-buttons" style="justify-content: center; margin-top: 2rem;">
                    <a href="mailto:<?php echo esc_attr(get_post_meta(get_the_ID(), 'careers_contact_email', true) ?: 'careers@aimpro.co.uk'); ?>" class="btn btn-primary">
                        <i class="fas fa-envelope" style="margin-right: 0.5rem;"></i>
                        Email Us
                    </a>
                    <a href="tel:0121285849" class="btn btn-secondary">
                        <i class="fas fa-phone" style="margin-right: 0.5rem;"></i>
                        0121 285 8490
                    </a>
                </div>
            </div>
        </section>

    </div>
</main>

<!-- Mobile Responsive Styles for Careers Page -->
<style>
/* Mobile optimizations for position cards */
@media (max-width: 768px) {
    .positions-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .position-card {
        padding: 1.5rem 1rem !important;
        margin-bottom: 1rem;
    }
    
    .position-header h3 {
        font-size: 1.3rem !important;
        line-height: 1.3 !important;
        margin-bottom: 0.75rem !important;
    }
    
    .position-meta {
        flex-direction: column !important;
        align-items: flex-start !important;
        gap: 0.5rem !important;
    }
    
    .position-meta span {
        font-size: 0.85rem !important;
        padding: 0.25rem 0.5rem !important;
        margin-right: 0 !important;
        margin-bottom: 0.25rem !important;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100%;
    }
    
    .position-content p {
        font-size: 0.9rem !important;
        line-height: 1.5 !important;
        margin-bottom: 1rem !important;
    }
    
    .requirements h4 {
        font-size: 1rem !important;
        margin-bottom: 0.5rem !important;
    }
    
    .requirements ul {
        padding-left: 1rem !important;
    }
    
    .requirements li {
        font-size: 0.85rem !important;
        line-height: 1.4 !important;
        margin-bottom: 0.25rem !important;
    }
    
    .position-actions {
        flex-direction: column !important;
        gap: 0.75rem !important;
        margin-top: 1.5rem !important;
    }
    
    .position-actions .btn {
        width: 100% !important;
        text-align: center !important;
        padding: 0.75rem 1rem !important;
        font-size: 0.9rem !important;
    }
}

@media (max-width: 480px) {
    .position-card {
        padding: 1rem 0.75rem !important;
    }
    
    .position-header h3 {
        font-size: 1.1rem !important;
    }
    
    .position-meta span {
        font-size: 0.8rem !important;
    }
    
    .position-content p {
        font-size: 0.85rem !important;
    }
    
    .requirements li {
        font-size: 0.8rem !important;
    }
}

/* Mobile optimizations for other sections */
@media (max-width: 768px) {
    .page-header-content {
        text-align: center !important;
        padding: 1rem 0 !important;
    }
    
    .page-header-content h1 {
        font-size: 1.8rem !important;
        margin-bottom: 1rem !important;
    }
    
    .page-subtitle {
        font-size: 1rem !important;
        line-height: 1.4 !important;
    }
    
    .benefits-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .benefit-card {
        padding: 1.5rem 1rem !important;
        text-align: center !important;
    }
    
    .benefit-icon {
        margin-bottom: 1rem !important;
    }
    
    .process-steps {
        flex-direction: column !important;
        gap: 1.5rem !important;
    }
    
    .step {
        text-align: center !important;
        max-width: 100% !important;
    }
    
    .testimonials-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .career-application-form .form-grid {
        grid-template-columns: 1fr !important;
        gap: 1rem !important;
    }
    
    .form-group.full-width {
        grid-column: 1 !important;
    }
}
</style>

<?php get_footer(); ?>
