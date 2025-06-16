<?php
/**
 * Template Name: Become a Partner Page
 * Description: Partnership opportunities page
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_header_title', true) ?: 'Become a Partner'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_header_subtitle', true) ?: 'Join our network of strategic partners and grow together'); ?></p>
            </div>
        </section>        <!-- Partnership Overview -->
        <section class="partnership-overview">
            <div class="section-content">
                <div class="overview-grid">
                    <div class="overview-content">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_intro_heading', true) ?: 'Partner with Aimpro Digital'); ?></h2>
                        <?php 
                        $intro_text = get_post_meta(get_the_ID(), 'partner_intro_text', true) ?: 'We believe in the power of collaboration. Our partnership program is designed to create mutually beneficial relationships that help both parties grow and succeed in the digital marketing landscape.\n\nWhether you\'re a complementary service provider, technology vendor, or strategic ally, we offer various partnership opportunities that can expand your reach while providing additional value to our clients.';
                        echo wp_kses_post(wpautop($intro_text));
                        ?>
                        <div class="partnership-highlights">
                            <div class="highlight-item">
                                <span class="highlight-number">50+</span>
                                <span class="highlight-label">Active Partners</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-number">200%</span>
                                <span class="highlight-label">Average Partner Growth</span>
                            </div>
                            <div class="highlight-item">
                                <span class="highlight-number">$5M+</span>
                                <span class="highlight-label">Partner Revenue Generated</span>
                            </div>
                        </div>
                    </div>
                    <div class="overview-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partnership-handshake.jpg" alt="<?php echo esc_attr(get_post_meta(get_the_ID(), 'partner_stats_heading', true) ?: 'Partnership Opportunity'); ?>" />
                    </div>
                </div>
            </div>
        </section>        <!-- Partnership Types -->
        <section class="partnership-types">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_opportunities_heading', true) ?: 'Partnership Opportunities'); ?></h2>
                <div class="partnership-grid">
                    
                    <!-- Referral Partners -->
                    <div class="partnership-card">
                        <div class="partnership-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                <path d="M22 11l-3-3 3-3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19 8h-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h3>Referral Partners</h3>
                        <p>Earn generous commissions by referring clients to our digital marketing services. Perfect for consultants, web developers, and business advisors.</p>
                        <div class="partnership-benefits">
                            <ul>
                                <li>Up to 20% commission on referred business</li>
                                <li>Dedicated partner support team</li>
                                <li>Marketing materials and resources</li>
                                <li>Regular training and updates</li>
                            </ul>
                        </div>
                        <div class="partnership-requirements">
                            <h4>Ideal For:</h4>
                            <p>Business consultants, web developers, graphic designers, and other service providers who work with businesses needing digital marketing.</p>
                        </div>
                    </div>

                    <!-- Technology Partners -->
                    <div class="partnership-card">
                        <div class="partnership-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                <line x1="8" y1="21" x2="16" y2="21" stroke="currentColor" stroke-width="2"/>
                                <line x1="12" y1="17" x2="12" y2="21" stroke="currentColor" stroke-width="2"/>
                                <path d="M8 7v6" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 7v6" stroke="currentColor" stroke-width="2"/>
                                <path d="M16 7v6" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Technology Partners</h3>
                        <p>Integrate your software or tools with our marketing stack to provide enhanced solutions for our mutual clients.</p>
                        <div class="partnership-benefits">
                            <ul>
                                <li>Technical integration and API access</li>
                                <li>Joint marketing opportunities</li>
                                <li>Co-branded solution development</li>
                                <li>Shared client success stories</li>
                            </ul>
                        </div>
                        <div class="partnership-requirements">
                            <h4>Ideal For:</h4>
                            <p>SaaS platforms, marketing tools, CRM providers, analytics platforms, and other technology solutions that complement digital marketing.</p>
                        </div>
                    </div>

                    <!-- Agency Partners -->
                    <div class="partnership-card">
                        <div class="partnership-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 1v6m0 6v6" stroke="currentColor" stroke-width="2"/>
                                <path d="m21 12-6-3 6-3" stroke="currentColor" stroke-width="2"/>
                                <path d="m3 12 6 3-6 3" stroke="currentColor" stroke-width="2"/>
                                <path d="m21 7-3 5 3 5" stroke="currentColor" stroke-width="2"/>
                                <path d="m3 7 3 5-3 5" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Agency Partners</h3>
                        <p>White-label our services or collaborate on larger projects that require specialized expertise in digital marketing.</p>
                        <div class="partnership-benefits">
                            <ul>
                                <li>White-label service delivery</li>
                                <li>Shared project management</li>
                                <li>Collaborative proposal development</li>
                                <li>Resource and expertise sharing</li>
                            </ul>
                        </div>
                        <div class="partnership-requirements">
                            <h4>Ideal For:</h4>
                            <p>Creative agencies, PR firms, web development agencies, and other marketing service providers looking to expand their digital capabilities.</p>
                        </div>
                    </div>

                    <!-- Reseller Partners -->
                    <div class="partnership-card">
                        <div class="partnership-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 12V7H5a2 2 0 0 1 0-4h14v4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3 5v14a2 2 0 0 0 2 2h16v-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18 12a2 2 0 0 0 0 4h4v-4z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Reseller Partners</h3>
                        <p>Resell our digital marketing services under your own brand with full support and training from our team.</p>
                        <div class="partnership-benefits">
                            <ul>
                                <li>Competitive wholesale pricing</li>
                                <li>Complete sales and marketing training</li>
                                <li>Dedicated account management</li>
                                <li>Ongoing technical support</li>
                            </ul>
                        </div>
                        <div class="partnership-requirements">
                            <h4>Ideal For:</h4>
                            <p>Established businesses with existing client relationships who want to add digital marketing services to their portfolio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Partner Benefits -->
        <section class="partner-benefits">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_why_heading', true) ?: 'Why Partner with Aimpro Digital?'); ?></h2>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <h3>Proven Track Record</h3>
                        <p>With 500+ successful client campaigns and a 99% retention rate, you can trust in our ability to deliver results.</p>
                    </div>
                    <div class="benefit-item">
                        <h3>Comprehensive Support</h3>
                        <p>From initial onboarding to ongoing support, we provide the resources and training you need to succeed.</p>
                    </div>
                    <div class="benefit-item">
                        <h3>Competitive Compensation</h3>
                        <p>Our partnership terms are designed to be mutually beneficial with competitive commissions and incentives.</p>
                    </div>
                    <div class="benefit-item">
                        <h3>Expert Team</h3>
                        <p>Partner with certified specialists in SEO, PPC, content marketing, and web development.</p>
                    </div>
                    <div class="benefit-item">
                        <h3>Cutting-Edge Tools</h3>
                        <p>Access to premium marketing tools and technologies that enhance service delivery and results.</p>
                    </div>
                    <div class="benefit-item">
                        <h3>Flexible Arrangements</h3>
                        <p>We work with you to create partnership arrangements that fit your business model and goals.</p>
                    </div>
                </div>
            </div>
        </section>        <!-- Partner Success Stories -->
        <section class="partner-testimonials">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_stories_heading', true) ?: 'Partner Success Stories'); ?></h2>
                <div class="testimonials-grid">
                    <div class="testimonial-card">
                        <blockquote>
                            "Partnering with Aimpro Digital has allowed us to offer comprehensive digital marketing services to our clients without having to build that expertise in-house. The results have been outstanding."
                        </blockquote>
                        <div class="testimonial-author">
                            <h4>Mark Johnson</h4>
                            <p>Founder, Creative Solutions Agency</p>
                            <span class="partnership-type">Agency Partner</span>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <blockquote>
                            "The referral program has been incredibly lucrative for our business. We've earned over $50,000 in commissions while providing valuable services to our clients."
                        </blockquote>
                        <div class="testimonial-author">
                            <h4>Lisa Rodriguez</h4>
                            <p>Business Consultant</p>
                            <span class="partnership-type">Referral Partner</span>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <blockquote>
                            "The technical integration was seamless, and the collaborative approach has led to innovative solutions that neither of us could have developed alone."
                        </blockquote>
                        <div class="testimonial-author">
                            <h4>David Chen</h4>
                            <p>CTO, MarketingTech Pro</p>
                            <span class="partnership-type">Technology Partner</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Partnership Process -->
        <section class="partnership-process">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_process_heading', true) ?: 'How to Become a Partner'); ?></h2>
                <div class="process-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Initial Inquiry</h3>
                            <p>Submit your partnership application with details about your business and partnership interests.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Discovery Call</h3>
                            <p>We'll schedule a call to discuss your needs, goals, and how we can work together effectively.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Partnership Proposal</h3>
                            <p>Based on our discussion, we'll create a customized partnership proposal that outlines terms and benefits.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Agreement & Onboarding</h3>
                            <p>Once agreed, we'll formalize the partnership and begin the onboarding process with training and resources.</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Launch & Support</h3>
                            <p>Begin our partnership with ongoing support and regular check-ins to ensure mutual success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Partnership Application Form -->
        <section class="partnership-application">            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_form_heading', true) ?: 'Apply to Become a Partner'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_form_description', true) ?: 'Ready to explore partnership opportunities? Fill out the form below and we\'ll get back to you within 24 hours.'); ?></p>
                
                <?php if (isset($_GET['partnership_success'])): ?>
                    <div class="form-message success">
                        <p><strong>Thank you!</strong> Your partnership application has been submitted successfully. Our team will review your application and get back to you within 2-3 business days.</p>
                    </div>
                <?php elseif (isset($_GET['partnership_error'])): ?>
                    <div class="form-message error">
                        <p><strong>Error:</strong> There was a problem submitting your application. Please try again or contact us directly at hello@aimpro.co.uk.</p>
                    </div>
                <?php endif; ?>
                  <form class="partnership-form" id="partnership-form" method="post" action="<?php echo admin_url('admin-post.php'); ?>" novalidate>
                    <?php wp_nonce_field('partnership_form_nonce', 'partnership_form_nonce'); ?>
                    <input type="hidden" name="action" value="partnership_form">
                    <input type="hidden" name="_wp_http_referer" value="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="company_name">Company Name *</label>
                            <input type="text" id="company_name" name="company_name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="contact_name">Your Name *</label>
                            <input type="text" id="contact_name" name="contact_name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="website">Company Website</label>
                            <input type="url" id="website" name="website" placeholder="https://yourcompany.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="company_size">Company Size</label>
                            <select id="company_size" name="company_size">
                                <option value="">Select company size</option>
                                <option value="1-5">1-5 employees</option>
                                <option value="6-25">6-25 employees</option>
                                <option value="26-100">26-100 employees</option>
                                <option value="100+">100+ employees</option>
                            </select>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="partnership_type">Partnership Interest *</label>
                            <select id="partnership_type" name="partnership_type" required>
                                <option value="">Select partnership type</option>
                                <option value="referral">Referral Partner</option>
                                <option value="technology">Technology Partner</option>
                                <option value="agency">Agency Partner</option>
                                <option value="reseller">Reseller Partner</option>
                                <option value="other">Other / Custom Arrangement</option>
                            </select>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="business_description">Tell Us About Your Business *</label>
                            <textarea id="business_description" name="business_description" rows="4" required placeholder="Describe your business, services, and target market..."></textarea>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="partnership_goals">Partnership Goals *</label>
                            <textarea id="partnership_goals" name="partnership_goals" rows="4" required placeholder="What are you hoping to achieve through this partnership? How do you envision us working together?"></textarea>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="current_clients">Current Client Information</label>
                            <textarea id="current_clients" name="current_clients" rows="3" placeholder="Tell us about your current client base and how this partnership might benefit them..."></textarea>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Submit Partnership Application</button>
                    </div>
                </form>
            </div>
        </section>        <!-- Contact Partnership Team -->
        <section class="contact-hr">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_contact_heading', true) ?: 'Questions About Partnerships?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_contact_description', true) ?: 'Our partnership team is here to answer any questions and help you find the right partnership opportunity'); ?></p>
                <div class="contact-info">
                    <div class="contact-item">
                        <strong>Email:</strong>
                        <a href="mailto:<?php echo esc_attr(get_post_meta(get_the_ID(), 'partner_contact_email', true) ?: 'hello@aimpro.co.uk'); ?>"><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_contact_email', true) ?: 'hello@aimpro.co.uk'); ?></a>
                    </div>
                    <div class="contact-item">
                        <strong>Phone:</strong>
                        <a href="tel:<?php echo esc_attr(str_replace([' ', '-', '(', ')'], '', get_post_meta(get_the_ID(), 'partner_contact_phone', true) ?: '+441212858490')); ?>"><?php echo esc_html(get_post_meta(get_the_ID(), 'partner_contact_phone', true) ?: '+44 121 285 8490'); ?></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
