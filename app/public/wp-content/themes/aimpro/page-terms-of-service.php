<?php
/**
 * Template Name: Terms of Service
 * Description: Terms of Service page template
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">Terms of Service</span>
            </nav>
        </div>
    </div>

    <div class="container">
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_header_title', true) ?: 'Terms of Service'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_header_subtitle', true) ?: 'Please read these terms and conditions carefully before using our services'); ?></p>
                <p class="last-updated"><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_last_updated', true) ?: 'Last updated: ' . date('F j, Y')); ?></p>
            </div>
        </section>

        <!-- Terms Content -->
        <section class="terms-content">
            <div class="section-content">
                <div class="terms-text animate-on-scroll animate-fade-up">
                    
                    <!-- Introduction -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_intro_title', true) ?: '1. Introduction'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_intro_content', true) ?: 'Welcome to Aimpro Digital. These terms and conditions ("Terms", "Agreement") are an agreement between Aimpro Digital ("we", "us", "our") and you ("User", "you", "your"). This Agreement sets forth the general terms and conditions of your use of our website and services.'); ?></p>
                    </div>

                    <!-- Acceptance of Terms -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_acceptance_title', true) ?: '2. Acceptance of Terms'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_acceptance_content', true) ?: 'By accessing and using our website and services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.'); ?></p>
                    </div>

                    <!-- Services Description -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_services_title', true) ?: '3. Services Description'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_services_content', true) ?: 'Aimpro Digital provides digital marketing services including but not limited to: search engine optimization (SEO), pay-per-click advertising (PPC), social media marketing, content marketing, web design and development, and related digital marketing consultancy services.'); ?></p>
                        
                        <?php 
                        $services_list = get_post_meta(get_the_ID(), '_terms_services_list', true);
                        if (empty($services_list)) {
                            $services_list = array(
                                'Search Engine Optimization (SEO)',
                                'Pay-Per-Click Advertising (PPC)',
                                'Social Media Marketing',
                                'Content Marketing',
                                'Web Design and Development',
                                'Digital Marketing Consultancy',
                                'Analytics and Reporting Services'
                            );
                        }
                        if (!empty($services_list)): ?>
                            <ul class="terms-list">
                                <?php foreach ($services_list as $service): ?>
                                    <li><?php echo esc_html($service); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <!-- User Obligations -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_obligations_title', true) ?: '4. User Obligations'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_obligations_content', true) ?: 'As a user of our services, you agree to:'); ?></p>
                        
                        <?php 
                        $obligations_list = get_post_meta(get_the_ID(), '_terms_obligations_list', true);
                        if (empty($obligations_list)) {
                            $obligations_list = array(
                                'Provide accurate and complete information',
                                'Comply with all applicable laws and regulations',
                                'Not use our services for any unlawful purposes',
                                'Respect intellectual property rights',
                                'Maintain confidentiality of login credentials',
                                'Notify us of any unauthorized use of your account'
                            );
                        }
                        if (!empty($obligations_list)): ?>
                            <ul class="terms-list">
                                <?php foreach ($obligations_list as $obligation): ?>
                                    <li><?php echo esc_html($obligation); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <!-- Payment Terms -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_payment_title', true) ?: '5. Payment Terms'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_payment_content', true) ?: 'Payment terms are specified in individual service agreements. Generally, services are billed monthly in advance unless otherwise agreed. Late payments may result in service suspension or termination.'); ?></p>
                    </div>

                    <!-- Intellectual Property -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_ip_title', true) ?: '6. Intellectual Property'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_ip_content', true) ?: 'The service and its original content, features and functionality are and will remain the exclusive property of Aimpro Digital and its licensors. The service is protected by copyright, trademark, and other laws. Our trademarks and trade dress may not be used in connection with any product or service without our prior written consent.'); ?></p>
                    </div>

                    <!-- Limitation of Liability -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_liability_title', true) ?: '7. Limitation of Liability'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_liability_content', true) ?: 'In no event shall Aimpro Digital, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from your use of the service.'); ?></p>
                    </div>

                    <!-- Termination -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_termination_title', true) ?: '8. Termination'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_termination_content', true) ?: 'We may terminate or suspend your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. Upon termination, your right to use the service will cease immediately.'); ?></p>
                    </div>

                    <!-- Governing Law -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_law_title', true) ?: '9. Governing Law'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_law_content', true) ?: 'These Terms shall be interpreted and governed by the laws of England and Wales, without regard to its conflict of law provisions. Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights.'); ?></p>
                    </div>

                    <!-- Changes to Terms -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_changes_title', true) ?: '10. Changes to Terms'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_changes_content', true) ?: 'We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will try to provide at least 30 days notice prior to any new terms taking effect.'); ?></p>
                    </div>

                    <!-- Contact Information -->
                    <div class="terms-section">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_terms_contact_title', true) ?: '11. Contact Information'); ?></h2>
                        <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), '_terms_contact_content', true) ?: 'If you have any questions about these Terms of Service, please contact us at:'); ?></p>
                        
                        <div class="contact-details">
                            <p><strong>Aimpro Digital</strong><br>
                            Email: <?php echo esc_html(get_post_meta(get_the_ID(), '_terms_contact_email', true) ?: 'info@aimprodigital.com'); ?><br>
                            Phone: <?php echo esc_html(get_post_meta(get_the_ID(), '_terms_contact_phone', true) ?: '+44 121 285 2866'); ?><br>
                            Address: <?php echo esc_html(get_post_meta(get_the_ID(), '_terms_contact_address', true) ?: 'Birmingham, UK'); ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</main>

<style>
.terms-content {
    padding: 2rem 0;
    max-width: 800px;
    margin: 0 auto;
}

.terms-text {
    font-size: 1rem;
    line-height: 1.6;
    color: #333;
}

.terms-section {
    margin-bottom: 2.5rem;
}

.terms-section h2 {
    color: #f15a25;
    font-size: 1.4rem;
    margin-bottom: 1rem;
    font-weight: 600;
}

.terms-section p {
    margin-bottom: 1rem;
    text-align: justify;
}

.terms-list {
    margin: 1rem 0;
    padding-left: 0;
    list-style: none;
}

.terms-list li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 0.5rem;
    line-height: 1.5;
}

.terms-list li:before {
    content: "";
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/aimpro-target.png');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
    width: 16px;
    height: 16px;
    position: absolute;
    left: 0;
    top: 0.1em;
}

.last-updated {
    font-style: italic;
    color: #666;
    font-size: 0.9rem;
    margin-top: 0.5rem;
}

.contact-details {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #f15a25;
    margin-top: 1rem;
}

.contact-details p {
    margin: 0;
    line-height: 1.6;
}

/* Mobile optimizations */
@media (max-width: 768px) {
    .terms-content {
        padding: 1rem 0;
    }
    
    .terms-section h2 {
        font-size: 1.2rem;
    }
    
    .terms-text {
        font-size: 0.95rem;
    }
    
    .contact-details {
        padding: 1rem;
    }
}
</style>

<?php get_footer(); ?>
