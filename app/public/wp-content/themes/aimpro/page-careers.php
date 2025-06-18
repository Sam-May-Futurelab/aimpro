<?php
/**
 * Template Name: Careers Page
 * Description: Careers and job opportunities page
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_header_title', true) ?: 'Careers at Aimpro Digital'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_header_subtitle', true) ?: 'Join our team of digital marketing experts and help businesses grow'); ?></p>
            </div>
        </section>        <!-- Why Work With Us -->
        <section class="why-work-with-us">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_why_heading', true) ?: 'Why Choose Aimpro Digital?'); ?></h2>                <div class="benefits-grid">
                    <?php 
                    $benefit_icons = array(
                        1 => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/><path d="m22 21-3-3m0 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
                        2 => '<path d="M12 2v6.5l3 1.5-3 1.5V18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 12c0 4 2.5 8 6 8s6-4 6-8-2.5-8-6-8-6 4-6 8z" stroke="currentColor" stroke-width="2"/>',
                        3 => '<rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/><line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/><line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2"/>',
                        4 => '<circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/><polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2"/>',
                        5 => '<path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
                        6 => '<path d="M22 12h-4l-3 9L9 3l-3 9H2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'
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
                    ?>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <?php echo $benefit_icons[$i]; ?>
                            </svg>
                        </div>
                        <h3><?php echo esc_html($title); ?></h3>
                        <p><?php echo esc_html($desc); ?></p>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

        <!-- Open Positions -->
        <section class="open-positions">            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_openings_heading', true) ?: 'Current Openings'); ?></h2>
                <div class="positions-grid">
                    <?php 
                    // Job defaults for initial setup
                    $job_defaults = array(
                        1 => array('title' => 'Senior SEO Specialist', 'team' => 'SEO Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid', 
                                  'desc' => 'We\'re looking for an experienced SEO specialist to join our growing team. You\'ll lead technical SEO audits, develop content strategies, and help our clients achieve top search rankings.',
                                  'requirements' => "3+ years of SEO experience\nStrong technical SEO skills\nExperience with SEO tools (SEMrush, Ahrefs, etc.)\nGoogle Analytics & Search Console proficiency"),
                        2 => array('title' => 'PPC Campaign Manager', 'team' => 'PPC Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                                  'desc' => 'Join our PPC team to manage and optimize paid advertising campaigns across Google Ads, Facebook, and other platforms. Help our clients achieve exceptional ROI on their ad spend.',
                                  'requirements' => "Google Ads certification required\n2+ years of PPC management experience\nExperience with Facebook Ads Manager\nStrong analytical and optimization skills"),
                        3 => array('title' => 'Content Marketing Strategist', 'team' => 'Content Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                                  'desc' => 'Lead content strategy development and execution for our diverse client base. Create compelling content that drives engagement and conversions across multiple channels.',
                                  'requirements' => "3+ years in content marketing\nExcellent writing and editing skills\nExperience with content management systems\nUnderstanding of SEO best practices"),
                        4 => array('title' => 'Digital Marketing Analyst', 'team' => 'Analytics Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                                  'desc' => 'Transform marketing data into actionable insights. Work with our team to measure campaign performance, identify optimization opportunities, and report on client results.',
                                  'requirements' => "Strong analytical and statistical skills\nProficiency in Google Analytics & Data Studio\nExperience with Excel/Google Sheets\nKnowledge of SQL is a plus"),
                        5 => array('title' => 'Client Account Manager', 'team' => 'Client Services', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                                  'desc' => 'Build and maintain strong client relationships while ensuring project success. Serve as the primary point of contact for our valued clients and help grow their digital marketing programs.',
                                  'requirements' => "2+ years in account management or client services\nStrong communication and presentation skills\nUnderstanding of digital marketing concepts\nProject management experience preferred"),
                        6 => array('title' => 'Web Developer', 'team' => 'Development Team', 'type' => 'Full-time', 'location' => 'Remote/Hybrid',
                                  'desc' => 'Join our development team to create and optimize websites that drive conversions. Work on landing pages, e-commerce sites, and marketing technology integrations.',
                                  'requirements' => "3+ years of web development experience\nProficiency in HTML, CSS, JavaScript\nExperience with WordPress and PHP\nUnderstanding of SEO and conversion optimization")
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
                    <div class="position-card">
                        <div class="position-header">
                            <h3><?php echo esc_html($job_title); ?></h3>
                            <div class="position-meta">
                                <span class="department"><?php echo esc_html($job_team); ?></span>
                                <span class="type"><?php echo esc_html($job_type); ?></span>
                                <span class="location"><?php echo esc_html($job_location); ?></span>
                            </div>
                        </div>
                        <div class="position-content">
                            <p><?php echo esc_html($job_desc); ?></p>
                            <?php if (!empty($job_requirements)): ?>
                            <div class="requirements">
                                <h4>Key Requirements:</h4>
                                <ul>
                                    <?php 
                                    $requirements = explode("\n", $job_requirements);
                                    foreach ($requirements as $requirement):
                                        $requirement = trim($requirement);
                                        if (!empty($requirement)):
                                    ?>
                                        <li><?php echo esc_html($requirement); ?></li>
                                    <?php 
                                        endif;
                                    endforeach; 
                                    ?>
                                </ul>
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
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_process_heading', true) ?: 'Our Hiring Process'); ?></h2>
                <div class="process-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Application Review</h3>
                            <p>We review your application and portfolio to assess your skills and experience.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Initial Interview</h3>
                            <p>Phone or video call to discuss your background and interest in the position.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Skills Assessment</h3>
                            <p>Practical test or case study relevant to the role you're applying for.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Final Interview</h3>
                            <p>Meet with team members and leadership to ensure mutual fit.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Offer & Onboarding</h3>
                            <p>Receive your offer and begin your journey with Aimpro Digital.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Employee Testimonials -->
        <section class="employee-testimonials">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_team_testimonials_heading', true) ?: 'What Our Team Says'); ?></h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <blockquote>
                            "Working at Aimpro Digital has been incredibly rewarding. The team is supportive, the work is challenging, and I've grown tremendously in my career."
                        </blockquote>
                        <div class="testimonial-author">
                            <h4>Emily Rodriguez</h4>
                            <p>SEO Team Lead</p>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <blockquote>
                            "The work-life balance here is exceptional. I can focus on delivering great results for clients while still having time for my family and personal interests."
                        </blockquote>
                        <div class="testimonial-author">
                            <h4>David Park</h4>
                            <p>Senior SEO Analyst</p>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <blockquote>
                            "I love the collaborative environment and how everyone is always willing to share knowledge and help each other succeed."
                        </blockquote>
                        <div class="testimonial-author">
                            <h4>Lisa Thompson</h4>
                            <p>PPC Team Lead</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Application Form -->
        <section class="application-form">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_form_heading', true) ?: 'Ready to Apply?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_form_description', true) ?: 'Don\'t see a position that fits? We\'re always looking for talented individuals to join our team.'); ?></p>
                
                <form class="career-application-form">
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
        </section>        <!-- Contact HR -->        <section class="contact-hr">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_contact_heading', true) ?: 'Questions About Careers?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_contact_description', true) ?: 'Our HR team is here to help answer any questions about working at Aimpro Digital'); ?></p>
                <div class="contact-info">
                    <div class="contact-item">
                        <strong>Email:</strong>
                        <a href="mailto:<?php echo esc_attr(get_post_meta(get_the_ID(), 'careers_contact_email', true) ?: 'careers@aimpro.co.uk'); ?>"><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_contact_email', true) ?: 'careers@aimpro.co.uk'); ?></a>
                    </div>
                    <div class="contact-item">
                        <strong>Phone:</strong>
                        <a href="tel:<?php echo str_replace(' ', '', get_post_meta(get_the_ID(), 'careers_contact_phone', true) ?: '+44 121 285 8490'); ?>"><?php echo esc_html(get_post_meta(get_the_ID(), 'careers_contact_phone', true) ?: '+44 121 285 8490'); ?></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
