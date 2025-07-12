<?php
/**
 * Template Name: Privacy Policy Page
 * Description: Privacy Policy page
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">Privacy Policy</span>
            </nav>
        </div>
    </div>

    <div class="container">
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <div class="header-title">
                    <?php 
                    $header_title = get_post_meta(get_the_ID(), 'privacy_header_title', true) ?: 'Privacy Policy';
                    // Strip any wrapper p tags and ensure it's an h1
                    $header_title = strip_tags($header_title, '<strong><em><span>');
                    echo '<h1>' . wp_kses_post($header_title) . '</h1>';
                    ?>
                </div>
                <div class="header-subtitle">
                    <?php 
                    $header_subtitle = get_post_meta(get_the_ID(), 'privacy_header_subtitle', true) ?: 'How we collect, use, and protect your information';
                    // Strip any wrapper p tags and ensure proper subtitle formatting
                    $header_subtitle = strip_tags($header_subtitle, '<strong><em><span>');
                    echo '<p class="hero-subtitle">' . wp_kses_post($header_subtitle) . '</p>';
                    ?>
                </div>
                <?php 
                $last_updated = get_post_meta(get_the_ID(), 'privacy_last_updated', true);
                if (empty($last_updated)) {
                    $last_updated = date('Y-m-d');
                }
                $formatted_date = date('F j, Y', strtotime($last_updated));
                ?>
                <p class="last-updated">Last updated: <?php echo esc_html($formatted_date); ?></p>
            </div>
        </section>

        <!-- Privacy Policy Content -->
        <section class="privacy-content">
            <div class="section-content">
                <?php
                // Helper function to format content with bullet points
                function format_privacy_content($content, $default_content = '') {
                    // Use default if content is empty
                    if (empty(trim($content))) {
                        $content = $default_content;
                    }
                    
                    // For rich text content, just return with wp_kses_post
                    return wp_kses_post($content);
                }
                
                // Default content
                $default_info_collect = 'We collect information you provide directly to us, such as when you:
- Fill out contact forms or request information
- Subscribe to our newsletter or marketing communications
- Download resources or tools from our website
- Contact us via phone, email, or live chat
- Engage with our services or consultations

This may include your name, email address, phone number, company information, and any other details you choose to provide.';

                $default_info_use = 'We use the information we collect to:
- Provide and improve our digital marketing services
- Respond to your inquiries and provide customer support
- Send you relevant marketing communications (with your consent)
- Analyze website usage and improve user experience
- Comply with legal obligations and protect our rights';

                $default_info_sharing = 'We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:
- With your explicit consent
- To comply with legal requirements or protect our rights
- With trusted service providers who assist in our operations (under strict confidentiality)
- In connection with a business transfer or merger';

                $default_cookies = 'Our website uses cookies and similar tracking technologies to:
- Remember your preferences and improve site functionality
- Analyze website traffic and user behavior
- Provide personalized content and advertisements
- Enable social media features and integrations

You can control cookie settings through your browser preferences, though this may affect site functionality.';

                $default_security = 'We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no internet transmission is 100% secure, and we cannot guarantee absolute security.';

                $default_user_rights = 'Depending on your location, you may have certain rights regarding your personal information, including:
- Access to the personal information we hold about you
- Correction of inaccurate or incomplete information
- Deletion of your personal information
- Withdrawal of consent for marketing communications
- Data portability and restriction of processing

To exercise these rights, please contact us using the information provided below.';

                $default_third_party = 'Our website may contain links to third-party websites or integrate with external services (such as Google Analytics, social media platforms, or marketing tools). These third parties have their own privacy policies, and we are not responsible for their practices.';

                $default_changes = 'We may update this Privacy Policy from time to time to reflect changes in our practices or applicable laws. We will notify you of any material changes by posting the updated policy on our website and updating the "Last Updated" date.';

                $default_contact = 'If you have any questions about this Privacy Policy or our data practices, please contact us:

**Aimpro Digital**
55 Colmore Row, Birmingham B3 2AA
Phone: 0121 285 8490
Email: hello@aimpro.co.uk';
                ?>

                <div class="policy-section animate-on-scroll animate-fade-up">
                    <h2>1. Information We Collect</h2>
                    <?php echo format_privacy_content(get_post_meta(get_the_ID(), 'privacy_info_collect', true), $default_info_collect); ?>
                </div>

                <div class="policy-section animate-on-scroll animate-fade-up">
                    <h2>2. How We Use Your Information</h2>
                    <?php echo format_privacy_content(get_post_meta(get_the_ID(), 'privacy_info_use', true), $default_info_use); ?>
                </div>

                <div class="policy-section animate-on-scroll animate-fade-up">
                    <h2>3. Information Sharing</h2>
                    <?php echo format_privacy_content(get_post_meta(get_the_ID(), 'privacy_info_sharing', true), $default_info_sharing); ?>
                </div>

                <div class="policy-section animate-on-scroll animate-fade-up">
                    <h2>4. Cookies and Tracking</h2>
                    <?php echo format_privacy_content(get_post_meta(get_the_ID(), 'privacy_cookies', true), $default_cookies); ?>
                </div>

                <div class="policy-section animate-on-scroll animate-fade-up">
                    <h2>5. Data Security</h2>
                    <?php echo format_privacy_content(get_post_meta(get_the_ID(), 'privacy_security', true), $default_security); ?>
                </div>

                <div class="policy-section animate-on-scroll animate-fade-up">
                    <h2>6. Your Rights</h2>
                    <?php echo format_privacy_content(get_post_meta(get_the_ID(), 'privacy_user_rights', true), $default_user_rights); ?>
                </div>

                <div class="policy-section animate-on-scroll animate-fade-up">
                    <h2>7. Third-Party Services</h2>
                    <?php echo format_privacy_content(get_post_meta(get_the_ID(), 'privacy_third_party', true), $default_third_party); ?>
                </div>

                <div class="policy-section animate-on-scroll animate-fade-up">
                    <h2>8. Changes to This Policy</h2>
                    <?php echo format_privacy_content(get_post_meta(get_the_ID(), 'privacy_changes', true), $default_changes); ?>
                </div>

                <div class="policy-section animate-on-scroll animate-fade-up">
                    <h2>9. Contact Us</h2>
                    <?php 
                    $contact_content = get_post_meta(get_the_ID(), 'privacy_contact', true);
                    if (empty(trim($contact_content))) {
                        echo '<p>If you have any questions about this Privacy Policy or our data practices, please contact us:</p>';
                        echo '<div class="contact-info">';
                        echo '<p><strong>Aimpro Digital</strong></p>';
                        echo '<p>55 Colmore Row, Birmingham B3 2AA</p>';
                        echo '<p>Phone: <a href="tel:+441212858490">0121 285 8490</a></p>';
                        echo '<p>Email: <a href="mailto:hello@aimpro.co.uk">hello@aimpro.co.uk</a></p>';
                        echo '</div>';
                    } else {
                        echo wp_kses_post($contact_content);
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Contact CTA -->
        <section class="testimonials-cta">
            <div class="section-content">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'privacy_cta_heading', true) ?: 'Questions About Our Privacy Policy?'); ?></h2>
                <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'privacy_cta_description', true) ?: 'We\'re here to help clarify any concerns you may have about how we handle your data'); ?></p>
                <div class="cta-buttons">
                    <?php 
                    $button1_text = get_post_meta(get_the_ID(), 'privacy_cta_button1_text', true) ?: 'Contact Us';
                    $button1_url = get_post_meta(get_the_ID(), 'privacy_cta_button1_url', true) ?: home_url('/contact');
                    $button2_text = get_post_meta(get_the_ID(), 'privacy_cta_button2_text', true) ?: 'Back to Home';
                    $button2_url = get_post_meta(get_the_ID(), 'privacy_cta_button2_url', true) ?: home_url();
                    ?>
                    <a href="<?php echo esc_url($button1_url); ?>" class="btn btn-primary"><?php echo esc_html($button1_text); ?></a>
                    <?php if (!empty($button2_text)): ?>
                        <a href="<?php echo esc_url($button2_url); ?>" class="btn btn-secondary"><?php echo esc_html($button2_text); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</main>

<style>
.page-header {
    text-align: center;
    padding: 3rem 0;
    background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
    margin-bottom: 2rem;
}

.page-header-content h1,
.header-title h1 {
    font-size: 3rem !important;
    font-weight: 700 !important;
    color: var(--heading-color) !important;
    margin-bottom: 1rem !important;
    line-height: 1.2 !important;
}

.page-header-content .hero-subtitle,
.header-subtitle .hero-subtitle,
.header-subtitle p {
    font-size: 1.25rem !important;
    color: var(--text-secondary) !important;
    margin-bottom: 1.5rem !important;
    font-weight: 400 !important;
    line-height: 1.4 !important;
}

/* Ensure rich text editor content doesn't override header styling */
.page-header-content p:not(.hero-subtitle):not(.last-updated),
.header-title p,
.header-subtitle p:not(.hero-subtitle) {
    font-size: 1.25rem !important;
    color: var(--text-secondary) !important;
    margin-bottom: 1.5rem !important;
    font-weight: 400 !important;
    line-height: 1.4 !important;
}

.privacy-content {
    padding: 2rem 0;
}

.policy-section {
    margin-bottom: 2.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #e2e8f0;
}

.policy-section:last-child {
    border-bottom: none;
}

.policy-section h2 {
    color: var(--primary-orange);
    margin-bottom: 1rem;
    font-size: 1.5rem;
    font-weight: 600;
}

.policy-section p {
    margin-bottom: 1rem;
    line-height: 1.6;
    color: var(--text-secondary);
}

.policy-section ul {
    margin: 1rem 0;
    padding-left: 1.5rem;
}

.policy-section li {
    margin-bottom: 0.5rem;
    line-height: 1.6;
    color: var(--text-secondary);
}

.last-updated {
    font-style: italic !important;
    color: var(--text-muted) !important;
    font-size: 0.9rem !important;
    margin-top: 0.5rem !important;
    font-weight: 400 !important;
}

.contact-info {
    background: var(--bg-secondary);
    padding: 1.5rem;
    border-radius: 8px;
    margin-top: 1rem;
}

.contact-info p {
    margin-bottom: 0.5rem;
}

.contact-info a {
    color: var(--primary-orange);
    text-decoration: none;
}

.contact-info a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .page-header {
        padding: 2rem 0;
    }
    
    .page-header-content h1,
    .header-title h1 {
        font-size: 2rem !important;
    }
    
    .page-header-content .hero-subtitle,
    .header-subtitle .hero-subtitle,
    .header-subtitle p,
    .page-header-content p:not(.hero-subtitle):not(.last-updated),
    .header-title p {
        font-size: 1.1rem !important;
    }
    
    .privacy-content {
        padding: 1rem 0;
    }
    
    .policy-section {
        margin-bottom: 2rem;
    }
    
    .policy-section h2 {
        font-size: 1.25rem;
    }
}
</style>

<?php get_footer(); ?>
