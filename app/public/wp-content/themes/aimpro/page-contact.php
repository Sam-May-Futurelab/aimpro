<?php
/**
 * Template Name: Contact Page
 * 
 * Main contact page for Aimpro Digital Marketing Agency
 * Includes contact form, office information, and multiple contact methods
 */

get_header(); ?>

<main class="contact-page">
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">            <div class="hero-content">                <div class="hero-badge">
                    <span class="badge-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    <span><?php echo aimpro_get_field('contact_hero_badge', 'LOCATED IN BIRMINGHAM\'S BUSINESS DISTRICT'); ?></span>
                </div>
                <h1><?php echo aimpro_get_field('contact_hero_heading', 'Get In Touch with <span class="text-gradient">Digital Marketing Experts</span>'); ?></h1>
                <p class="hero-description"><?php echo aimpro_get_field('contact_hero_subtitle', 'Ready to transform your business? Let\'s discuss your digital marketing goals and create a strategy that delivers measurable results.'); ?></p>
                  <!-- Quick Contact Options -->
                <div class="quick-contact-grid">
                    <div class="quick-contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>                        <div class="contact-details">
                            <span class="contact-label"><?php echo aimpro_get_field('contact_phone_label', 'Call Us Now'); ?></span>
                            <span class="contact-value"><?php echo aimpro_get_field('contact_phone', '+44 121 285 8490'); ?></span>
                        </div>
                    </div>
                    <div class="quick-contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label"><?php echo aimpro_get_field('contact_email_label', 'Email Us'); ?></span>
                            <span class="contact-value"><?php echo aimpro_get_field('contact_email', 'hello@aimpro.co.uk'); ?></span>
                        </div>
                    </div>
                    <div class="quick-contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label"><?php echo aimpro_get_field('contact_hours_label', 'Business Hours'); ?></span>
                            <span class="contact-value"><?php echo aimpro_get_field('contact_hours', 'Mon-Fri: 9AM-6PM'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Main Content -->
    <div class="contact-main-content">
        <div class="container">
            <div class="contact-layout-centered">
                
                <!-- Contact Form Section -->
                <div class="contact-form-section">
                    <div class="section-header">
                        <h2>Send Us a Message</h2>
                        <p>Fill out the form below and we'll get back to you within 24 hours with a customized strategy for your business.</p>
                    </div>

                    <div class="contact-form-wrapper">
                        <?php if (isset($_GET['contact_success'])): ?>
                            <div class="form-message success">
                                <p><strong>Thank you!</strong> Your message has been sent successfully. We'll respond within 24 hours!</p>
                            </div>
                        <?php elseif (isset($_GET['contact_error'])): ?>
                            <div class="form-message error">
                                <p><strong>Error:</strong> There was a problem sending your message. Please try again or contact us directly.</p>
                            </div>
                        <?php endif; ?>

                        <form class="contact-form" id="contact-form" method="post" action="<?php echo admin_url('admin-post.php'); ?>" novalidate>
                            <?php wp_nonce_field('contact_submission', 'contact_nonce'); ?>
                            <input type="hidden" name="action" value="contact_form">
                            <input type="hidden" name="contact_form" value="1">
                            
                            <div class="form-header">
                                <h3><?php echo aimpro_get_field('contact_form_title', 'Get In Touch'); ?></h3>
                                <p><?php echo aimpro_get_field('contact_form_subtitle', 'We\'d love to hear from you. Send us a message and we\'ll respond as soon as possible.'); ?></p>
                            </div>
                            
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="name"><?php echo aimpro_get_field('contact_form_name_label', 'Name *'); ?></label>
                                    <input type="text" id="name" name="name" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email"><?php echo aimpro_get_field('contact_form_email_label', 'Email *'); ?></label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="phone"><?php echo aimpro_get_field('contact_form_phone_label', 'Phone'); ?></label>
                                    <input type="tel" id="phone" name="phone">
                                </div>
                                
                                <div class="form-group">
                                    <label for="referral"><?php echo aimpro_get_field('contact_form_referral_label', 'Where did you find us?'); ?></label>
                                    <select id="referral" name="referral">
                                        <option value="">Please select...</option>
                                        <option value="google-search">Google Search</option>
                                        <option value="social-media">Social Media</option>
                                        <option value="referral">Referral</option>
                                        <option value="linkedin">LinkedIn</option>
                                        <option value="facebook">Facebook</option>
                                        <option value="instagram">Instagram</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                
                                <div class="form-group full-width">
                                    <label for="query"><?php echo aimpro_get_field('contact_form_query_label', 'Query'); ?></label>
                                    <textarea id="query" name="query" rows="4" placeholder="<?php echo esc_attr(aimpro_get_field('contact_form_query_placeholder', 'Tell us about your inquiry...')); ?>"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-actions">
                                <button type="submit" class="form-submit-btn"><?php echo aimpro_get_field('contact_form_submit_text', 'Submit'); ?></button>
                            </div>
                        </form>
                    </div>                </div>
            </div>
        </div>
    </div>

    <!-- Visit Us Section -->
    <section class="visit-us-section">
        <div class="container">
            <div class="visit-us-container">
                <div class="visit-us-content">
                    <h2>Come See Us... We're a REAL Company with Real Humans</h2>
                    <p>Let's discuss your project over a coffee. Book a time to visit our Birmingham office and meet the team behind your marketing success.</p>
                    
                    <div class="visit-cta">
                        <a href="tel:+441212858490" class="btn btn-primary large">BOOK A COFFEE MEETING</a>
                    </div>
                </div>
                
                <div class="office-info">
                    <div class="office-details">
                        <h3>Our Birmingham Office</h3>
                        <p><strong>Located in:</strong> 55 Colmore Row</p>
                        <p><strong>Address:</strong> 55 Colmore Row, Birmingham B3 2AA</p>
                        <p>Right in the heart of Birmingham's business district</p>
                    </div>
                      <div class="office-image">
                        <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="55 Colmore Row Birmingham Office">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="contact-faq">
        <div class="container">
            <div class="section-header">
                <h2>Frequently Asked Questions</h2>
                <p>Quick answers to common questions about working with our digital marketing agency.</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>How quickly can you start working on my project?</h3>
                    <p>We can typically begin new projects within 1-2 weeks of our initial consultation. For urgent requirements, we offer expedited onboarding within 48-72 hours.</p>
                </div>
                
                <div class="faq-item">
                    <h3>Do you work with businesses outside Birmingham?</h3>
                    <p>Absolutely! While we're based in Birmingham, we work with clients across the UK and internationally. Most of our services are delivered remotely with regular video calls and reports.</p>
                </div>
                
                <div class="faq-item">
                    <h3>What's included in your free consultation?</h3>
                    <p>Our free consultation includes a comprehensive audit of your current digital marketing, competitive analysis, and a customized strategy recommendation with projected ROI.</p>
                </div>
                
                <div class="faq-item">
                    <h3>Do you require long-term contracts?</h3>
                    <p>We prefer to work on monthly rolling contracts for most services, with a minimum 3-month commitment to ensure we can deliver meaningful results. No lengthy lock-ins required.</p>
                </div>
                
                <div class="faq-item">
                    <h3>Can you help with both B2B and B2C marketing?</h3>
                    <p>Yes! Our team has extensive experience in both B2B and B2C marketing across various industries including SaaS, e-commerce, professional services, and retail.</p>
                </div>
                
                <div class="faq-item">
                    <h3>What makes you different from other agencies?</h3>
                    <p>We focus on measurable results with transparent reporting, offer genuine partnership rather than just service delivery, and use AI-powered tools to maximize efficiency and ROI.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof Section -->
    <section class="contact-social-proof">
        <div class="container">
            <div class="social-proof-content">
                <h2>Join 200+ Businesses That Trust Aimpro</h2>
                <p>From startups to established enterprises, we've helped businesses across industries achieve their digital marketing goals.</p>
                
                <div class="proof-stats">
                    <div class="proof-stat">
                        <span class="stat-number">500%</span>
                        <span class="stat-label">Average Lead Increase</span>
                    </div>
                    <div class="proof-stat">
                        <span class="stat-number">£2.4M+</span>
                        <span class="stat-label">Revenue Generated</span>
                    </div>
                    <div class="proof-stat">
                        <span class="stat-number">98%</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                    <div class="proof-stat">
                        <span class="stat-number">24hr</span>
                        <span class="stat-label">Response Time</span>
                    </div>
                </div>
                
                <div class="testimonial-highlight">
                    <blockquote>
                        "Aimpro transformed our digital presence completely. Within 6 months, we saw a 340% increase in qualified leads and our revenue doubled. Their team truly understands both the technical and strategic aspects of digital marketing."
                    </blockquote>
                    <cite>
                        <strong>Sarah Johnson</strong><br>
                        <span>Marketing Director, TechFlow Solutions</span>
                    </cite>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="contact-final-cta">
        <div class="container">
            <div class="final-cta-content">
                <h2>Ready to <span class="text-gradient">Transform Your Digital Marketing?</span></h2>
                <p>Don't let your competitors get ahead. Schedule a free consultation today and discover how we can help you achieve your business goals with proven digital marketing strategies.</p>
                
                <div class="cta-actions">
                    <a href="tel:+441212858490" class="btn btn-primary large">Call Now: +44 121 285 8490</a>
                    <a href="mailto:hello@aimpro.co.uk" class="btn btn-secondary large">Send Email</a>
                </div>
                
                <div class="cta-guarantee">
                    <p><strong>Free Consultation • No Obligation • Immediate Value</strong></p>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Custom Styles for Contact Page -->
<style>
/* Contact Hero Section */
.contact-hero {
    background: linear-gradient(135deg, var(--primary-black) 0%, var(--primary-black-light) 100%);
    padding: 8rem 0 4rem;
    position: relative;
    overflow: hidden;
}

.contact-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><radialGradient id="a" cx="0.5" cy="0.5" r="0.5"><stop offset="0%" stop-color="%23f15a25" stop-opacity="0.1"/><stop offset="100%" stop-color="%23f15a25" stop-opacity="0"/></radialGradient></defs><circle cx="20" cy="20" r="2" fill="url(%23a)"/><circle cx="80" cy="40" r="1.5" fill="url(%23a)"/><circle cx="40" cy="80" r="1" fill="url(%23a)"/></svg>') repeat;
    opacity: 0.5;
}

.hero-content {
    text-align: center;
    position: relative;
    z-index: 2;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(241, 90, 37, 0.1);
    border: 1px solid rgba(241, 90, 37, 0.3);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    color: var(--primary-orange);
    margin-bottom: 2rem;
}

.contact-hero h1 {
    font-size: 3.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.hero-description {
    font-size: 1.2rem;
    color: var(--text-secondary);
    margin-bottom: 3rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.quick-contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    max-width: 800px;
    margin: 0 auto;
}

.quick-contact-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    background: var(--glass-bg);
    border: var(--glass-border);
    padding: 1.5rem;
    border-radius: 15px;
    text-decoration: none;
    transition: all 0.3s ease;
    cursor: default;
}

.quick-contact-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-dark);
    border-color: var(--primary-orange);
}

.contact-icon {
    font-size: 2rem;
    width: 60px;
    height: 60px;
    background: #000000;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #ffffff;
}

/* Light theme icon styling - keep them black */
.light-theme .contact-icon {
    background: #000000;
    color: #ffffff;
}

.contact-details {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.contact-label {
    font-size: 0.9rem;
    color: var(--text-secondary);
    font-weight: 500;
}

.contact-value {
    font-size: 1.1rem;
    color: var(--text-primary);
    font-weight: 600;
}

/* Main Contact Layout */
.contact-main-content {
    padding: 6rem 0;
    background: var(--bg-secondary);
}

.contact-layout {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 4rem;
    align-items: start;
}

.contact-layout-centered {
    display: flex;
    justify-content: center;
    align-items: start;
    width: 100%;
}

.contact-layout-centered .contact-form-section {
    width: 100%;
    max-width: 900px;
}

.contact-form-section .section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.contact-form-section h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1rem;
}

.contact-form-section p {
    font-size: 1.1rem;
    color: var(--text-secondary);
    max-width: 600px;
    margin: 0 auto;
}

/* Contact Info Cards */
.contact-cards-container {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
}

.contact-cards-container .contact-info-card {
    flex: 1;
    margin-bottom: 0;
}

.contact-info-card {
    background: var(--glass-bg);
    border: var(--glass-border);
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 2rem;
    backdrop-filter: blur(20px);
}

.contact-info-card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1.5rem;
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Office Details */
.office-details {
    margin-bottom: 2rem;
}

.office-item {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 12px;
}

.office-icon {
    font-size: 1.5rem;
    width: 40px;
    height: 40px;
    background: var(--gradient-orange);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.office-content {
    color: var(--text-secondary);
    line-height: 1.5;
}

.office-content strong {
    color: var(--text-primary);
}

.office-cta {
    padding: 1.5rem;
    background: rgba(241, 90, 37, 0.1);
    border: 1px solid rgba(241, 90, 37, 0.3);
    border-radius: 12px;
    text-align: center;
    margin-bottom: 2rem;
}

/* Contact Methods */
.contact-method {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 12px;
    transition: all 0.3s ease;
}

.contact-method:hover {
    background: rgba(255, 255, 255, 0.05);
    transform: translateX(5px);
}

.method-icon {
    font-size: 1.5rem;
    width: 40px;
    height: 40px;
    background: var(--gradient-orange);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.method-content {
    display: flex;
    flex-direction: column;
    gap: 0.25rem;
}

.method-label {
    font-size: 0.9rem;
    color: var(--text-secondary);
    font-weight: 500;
}

.method-value {
    font-size: 1.1rem;
    color: var(--primary-orange);
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s ease;
}

.method-value:hover {
    color: var(--primary-orange-light);
}

.method-note {
    font-size: 0.8rem;
    color: var(--text-secondary);
    opacity: 0.8;
}

/* Service Quick Links */
.service-link {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 12px;
    text-decoration: none;
    margin-bottom: 0.75rem;
    transition: all 0.3s ease;
}

.service-link:hover {
    background: rgba(241, 90, 37, 0.1);
    transform: translateX(5px);
}

.service-icon {
    font-size: 1.2rem;
    width: 35px;
    height: 35px;
    background: var(--gradient-orange);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.service-name {
    color: var(--text-primary);
    font-weight: 500;
    flex: 1;
}

.service-arrow {
    color: var(--primary-orange);
    font-weight: 600;
    transition: transform 0.3s ease;
}

.service-link:hover .service-arrow {
    transform: translateX(5px);
}

.services-cta {
    margin-top: 1.5rem;
    text-align: center;
}

/* FAQ Section */
.contact-faq {
    padding: 6rem 0;
    background: var(--bg-primary);
}

.contact-faq .section-header {
    text-align: center;
    margin-bottom: 4rem;
}

.contact-faq h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1rem;
}

.faq-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 2rem;
}

.faq-item {
    background: var(--glass-bg);
    border: var(--glass-border);
    border-radius: 15px;
    padding: 2rem;
    transition: all 0.3s ease;
}

.faq-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-dark);
}

.faq-item h3 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 1rem;
}

.faq-item p {
    color: var(--text-secondary);
    line-height: 1.6;
}

/* Social Proof Section */
.contact-social-proof {
    padding: 6rem 0;
    background: var(--bg-secondary);
}

.social-proof-content {
    text-align: center;
}

.contact-social-proof h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1rem;
}

.contact-social-proof p {
    font-size: 1.1rem;
    color: var(--text-secondary);
    margin-bottom: 3rem;
}

.proof-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-bottom: 4rem;
}

.proof-stat {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.stat-label {
    font-size: 0.9rem;
    color: var(--text-secondary);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.testimonial-highlight {
    max-width: 800px;
    margin: 0 auto;
    background: var(--glass-bg);
    border: var(--glass-border);
    border-radius: 20px;
    padding: 3rem;
}

.testimonial-highlight blockquote {
    font-size: 1.2rem;
    color: var(--text-primary);
    line-height: 1.6;
    margin-bottom: 2rem;
    font-style: italic;
}

.testimonial-highlight cite {
    color: var(--text-secondary);
    font-style: normal;
}

/* Final CTA Section */
.contact-final-cta {
    padding: 6rem 0;
    background: linear-gradient(135deg, var(--primary-black) 0%, var(--primary-black-light) 100%);
}

.final-cta-content {
    text-align: center;
}

.contact-final-cta h2 {
    font-size: 3rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1.5rem;
}

.contact-final-cta p {
    font-size: 1.2rem;
    color: var(--text-secondary);
    margin-bottom: 3rem;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.cta-actions {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.cta-guarantee {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.cta-guarantee strong {
    color: var(--primary-orange);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .contact-layout {
        grid-template-columns: 1fr;
        gap: 3rem;
    }
    
    .contact-layout-centered {
        display: block;
    }
    
    .contact-hero h1 {
        font-size: 2.5rem;
    }
    
    .faq-grid {
        grid-template-columns: 1fr;
    }
    
    .proof-stats {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .contact-hero {
        padding: 6rem 0 3rem;
    }
    
    .contact-hero h1 {
        font-size: 2rem;
    }
    
    .quick-contact-grid {
        grid-template-columns: 1fr;
    }
    
    .contact-main-content {
        padding: 4rem 0;
    }
    
    .contact-faq,
    .contact-social-proof,
    .contact-final-cta {
        padding: 4rem 0;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .proof-stats {
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .contact-final-cta h2 {
        font-size: 2rem;
    }
      .contact-cards-container {
        flex-direction: column;
        gap: 2rem;
    }
}

/* Visit Us Section */
.visit-us-section {
    padding: 6rem 0;
    background: var(--bg-primary);
    border-top: 1px solid var(--border-light);
}

.visit-us-container {
    background: var(--glass-bg);
    border: var(--glass-border);
    border-radius: 20px;
    padding: 3rem;
    backdrop-filter: blur(20px);
    max-width: 1100px;
    margin: 0 auto;
}

.visit-us-content {
    text-align: center;
    margin-bottom: 3rem;
}

.visit-us-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1.5rem;
    background: var(--gradient-orange);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.visit-us-content p {
    font-size: 1.2rem;
    color: var(--text-secondary);
    max-width: 700px;
    margin: 0 auto 2rem;
    line-height: 1.6;
}

.visit-cta {
    margin-bottom: 1rem;
}

.office-info {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    align-items: center;
}

.office-details h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--text-primary);
    margin-bottom: 1.5rem;
}

.office-details p {
    font-size: 1.1rem;
    color: var(--text-secondary);
    margin-bottom: 0.75rem;
    line-height: 1.5;
}

.office-image {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.office-image img {
    width: 100%;
    height: auto;
    display: block;
    border-radius: 15px;
}

@media (max-width: 768px) {
    .office-info {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .visit-us-container {
        padding: 2rem;
    }
    
    .visit-us-content h2 {
        font-size: 2rem;
    }
}
</style>

<?php get_footer(); ?>
