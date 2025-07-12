<?php
/**
 * Template Name: Terms of Service
 * Description: Terms of Service page template
 */

// Helper function to get terms defaults safely
if (!function_exists('get_terms_default')) {
    function get_terms_default($key, $fallback = '') {
        $defaults = array(
            'header_title' => 'Terms of Service',
            'header_subtitle' => 'Please read these terms and conditions carefully before using our services',
            'last_updated' => 'Last updated: ' . date('F j, Y'),
            'intro_title' => '1. Introduction',
            'intro_content' => 'Welcome to Aimpro Digital. These terms and conditions ("Terms", "Agreement") are an agreement between Aimpro Digital ("we", "us", "our") and you ("User", "you", "your"). This Agreement sets forth the general terms and conditions of your use of our website and services.',
            'acceptance_title' => '2. Acceptance of Terms',
            'acceptance_content' => 'By accessing and using our website and services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.',
            'services_title' => '3. Services Description',
            'services_content' => 'Aimpro Digital provides digital marketing services including but not limited to: search engine optimization (SEO), pay-per-click advertising (PPC), social media marketing, content marketing, web design and development, and related digital marketing consultancy services.',
            'services_list' => array(
                'Search Engine Optimization (SEO)',
                'Pay-Per-Click Advertising (PPC)',
                'Social Media Marketing',
                'Content Marketing',
                'Web Design and Development',
                'Digital Marketing Consultancy',
                'Analytics and Reporting Services'
            ),
            'obligations_title' => '4. User Obligations',
            'obligations_content' => 'As a user of our services, you agree to:',
            'obligations_list' => array(
                'Provide accurate and complete information',
                'Comply with all applicable laws and regulations',
                'Not use our services for any unlawful purposes',
                'Respect intellectual property rights',
                'Maintain confidentiality of login credentials',
                'Notify us of any unauthorized use of your account'
            ),
            'payment_title' => '5. Payment Terms',
            'payment_content' => 'Payment terms are specified in individual service agreements. Generally, services are billed monthly in advance unless otherwise agreed. Late payments may result in service suspension or termination.',
            'ip_title' => '6. Intellectual Property',
            'ip_content' => 'The service and its original content, features and functionality are and will remain the exclusive property of Aimpro Digital and its licensors. The service is protected by copyright, trademark, and other laws. Our trademarks and trade dress may not be used in connection with any product or service without our prior written consent.',
            'liability_title' => '7. Limitation of Liability',
            'liability_content' => 'In no event shall Aimpro Digital, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from your use of the service.',
            'termination_title' => '8. Termination',
            'termination_content' => 'We may terminate or suspend your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. Upon termination, your right to use the service will cease immediately.',
            'law_title' => '9. Governing Law',
            'law_content' => 'These Terms shall be interpreted and governed by the laws of England and Wales, without regard to its conflict of law provisions. Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights.',
            'changes_title' => '10. Changes to Terms',
            'changes_content' => 'We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will try to provide at least 30 days notice prior to any new terms taking effect.',
            'contact_title' => '11. Contact Information',
            'contact_content' => 'If you have any questions about these Terms of Service, please contact us at:',
            'contact_email' => 'info@aimprodigital.com',
            'contact_phone' => '0121 285 2866',
            'contact_address' => 'Birmingham, UK'
        );
        
        return isset($defaults[$key]) ? $defaults[$key] : $fallback;
    }
}

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
                <?php
                $header_title = get_post_meta(get_the_ID(), '_terms_header_title', true);
                if (empty($header_title)) $header_title = get_terms_default('header_title');
                
                $header_subtitle = get_post_meta(get_the_ID(), '_terms_header_subtitle', true);
                if (empty($header_subtitle)) $header_subtitle = get_terms_default('header_subtitle');
                
                $last_updated = get_post_meta(get_the_ID(), '_terms_last_updated', true);
                if (empty($last_updated)) $last_updated = get_terms_default('last_updated');
                ?>
                <h1><?php echo esc_html($header_title); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post($header_subtitle); ?></p>
                <p class="last-updated"><?php echo esc_html($last_updated); ?></p>
            </div>
        </section>

        <!-- Terms Content -->
        <section class="terms-content">
            <div class="section-content">
                <div class="terms-text animate-on-scroll animate-fade-up">
                    
                    <!-- Introduction -->
                    <div class="terms-section">
                        <?php
                        $intro_title = get_post_meta(get_the_ID(), '_terms_intro_title', true);
                        if (empty($intro_title)) $intro_title = get_terms_default('intro_title');
                        
                        $intro_content = get_post_meta(get_the_ID(), '_terms_intro_content', true);
                        if (empty($intro_content)) $intro_content = get_terms_default('intro_content');
                        ?>
                        <h2><?php echo esc_html($intro_title); ?></h2>
                        <p><?php echo wp_kses_post($intro_content); ?></p>
                    </div>

                    <!-- Acceptance of Terms -->
                    <div class="terms-section">
                        <?php
                        $acceptance_title = get_post_meta(get_the_ID(), '_terms_acceptance_title', true);
                        if (empty($acceptance_title)) $acceptance_title = get_terms_default('acceptance_title');
                        
                        $acceptance_content = get_post_meta(get_the_ID(), '_terms_acceptance_content', true);
                        if (empty($acceptance_content)) $acceptance_content = get_terms_default('acceptance_content');
                        ?>
                        <h2><?php echo esc_html($acceptance_title); ?></h2>
                        <p><?php echo wp_kses_post($acceptance_content); ?></p>
                    </div>

                    <!-- Services Description -->
                    <div class="terms-section">
                        <?php
                        $services_title = get_post_meta(get_the_ID(), '_terms_services_title', true);
                        if (empty($services_title)) $services_title = get_terms_default('services_title');
                        
                        $services_content = get_post_meta(get_the_ID(), '_terms_services_content', true);
                        if (empty($services_content)) $services_content = get_terms_default('services_content');
                        
                        $services_list = get_post_meta(get_the_ID(), '_terms_services_list', true);
                        if (empty($services_list)) $services_list = get_terms_default('services_list');
                        ?>
                        <h2><?php echo esc_html($services_title); ?></h2>
                        <p><?php echo wp_kses_post($services_content); ?></p>
                        
                        <?php if (!empty($services_list)): ?>
                            <ul class="terms-list">
                                <?php foreach ($services_list as $service): ?>
                                    <li><?php echo esc_html($service); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <!-- User Obligations -->
                    <div class="terms-section">
                        <?php
                        $obligations_title = get_post_meta(get_the_ID(), '_terms_obligations_title', true);
                        if (empty($obligations_title)) $obligations_title = get_terms_default('obligations_title');
                        
                        $obligations_content = get_post_meta(get_the_ID(), '_terms_obligations_content', true);
                        if (empty($obligations_content)) $obligations_content = get_terms_default('obligations_content');
                        
                        $obligations_list = get_post_meta(get_the_ID(), '_terms_obligations_list', true);
                        if (empty($obligations_list)) $obligations_list = get_terms_default('obligations_list');
                        ?>
                        <h2><?php echo esc_html($obligations_title); ?></h2>
                        <p><?php echo wp_kses_post($obligations_content); ?></p>
                        
                        <?php if (!empty($obligations_list)): ?>
                            <ul class="terms-list">
                                <?php foreach ($obligations_list as $obligation): ?>
                                    <li><?php echo esc_html($obligation); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <!-- Payment Terms -->
                    <div class="terms-section">
                        <?php
                        $payment_title = get_post_meta(get_the_ID(), '_terms_payment_title', true);
                        if (empty($payment_title)) $payment_title = get_terms_default('payment_title');
                        
                        $payment_content = get_post_meta(get_the_ID(), '_terms_payment_content', true);
                        if (empty($payment_content)) $payment_content = get_terms_default('payment_content');
                        ?>
                        <h2><?php echo esc_html($payment_title); ?></h2>
                        <p><?php echo wp_kses_post($payment_content); ?></p>
                    </div>

                    <!-- Intellectual Property -->
                    <div class="terms-section">
                        <?php
                        $ip_title = get_post_meta(get_the_ID(), '_terms_ip_title', true);
                        if (empty($ip_title)) $ip_title = get_terms_default('ip_title');
                        
                        $ip_content = get_post_meta(get_the_ID(), '_terms_ip_content', true);
                        if (empty($ip_content)) $ip_content = get_terms_default('ip_content');
                        ?>
                        <h2><?php echo esc_html($ip_title); ?></h2>
                        <p><?php echo wp_kses_post($ip_content); ?></p>
                    </div>

                    <!-- Limitation of Liability -->
                    <div class="terms-section">
                        <?php
                        $liability_title = get_post_meta(get_the_ID(), '_terms_liability_title', true);
                        if (empty($liability_title)) $liability_title = get_terms_default('liability_title');
                        
                        $liability_content = get_post_meta(get_the_ID(), '_terms_liability_content', true);
                        if (empty($liability_content)) $liability_content = get_terms_default('liability_content');
                        ?>
                        <h2><?php echo esc_html($liability_title); ?></h2>
                        <p><?php echo wp_kses_post($liability_content); ?></p>
                    </div>

                    <!-- Termination -->
                    <div class="terms-section">
                        <?php
                        $termination_title = get_post_meta(get_the_ID(), '_terms_termination_title', true);
                        if (empty($termination_title)) $termination_title = get_terms_default('termination_title');
                        
                        $termination_content = get_post_meta(get_the_ID(), '_terms_termination_content', true);
                        if (empty($termination_content)) $termination_content = get_terms_default('termination_content');
                        ?>
                        <h2><?php echo esc_html($termination_title); ?></h2>
                        <p><?php echo wp_kses_post($termination_content); ?></p>
                    </div>

                    <!-- Governing Law -->
                    <div class="terms-section">
                        <?php
                        $law_title = get_post_meta(get_the_ID(), '_terms_law_title', true);
                        if (empty($law_title)) $law_title = get_terms_default('law_title');
                        
                        $law_content = get_post_meta(get_the_ID(), '_terms_law_content', true);
                        if (empty($law_content)) $law_content = get_terms_default('law_content');
                        ?>
                        <h2><?php echo esc_html($law_title); ?></h2>
                        <p><?php echo wp_kses_post($law_content); ?></p>
                    </div>

                    <!-- Changes to Terms -->
                    <div class="terms-section">
                        <?php
                        $changes_title = get_post_meta(get_the_ID(), '_terms_changes_title', true);
                        if (empty($changes_title)) $changes_title = get_terms_default('changes_title');
                        
                        $changes_content = get_post_meta(get_the_ID(), '_terms_changes_content', true);
                        if (empty($changes_content)) $changes_content = get_terms_default('changes_content');
                        ?>
                        <h2><?php echo esc_html($changes_title); ?></h2>
                        <p><?php echo wp_kses_post($changes_content); ?></p>
                    </div>

                    <!-- Contact Information -->
                    <div class="terms-section">
                        <?php
                        $contact_title = get_post_meta(get_the_ID(), '_terms_contact_title', true);
                        if (empty($contact_title)) $contact_title = get_terms_default('contact_title');
                        
                        $contact_content = get_post_meta(get_the_ID(), '_terms_contact_content', true);
                        if (empty($contact_content)) $contact_content = get_terms_default('contact_content');
                        
                        $contact_email = get_post_meta(get_the_ID(), '_terms_contact_email', true);
                        if (empty($contact_email)) $contact_email = get_terms_default('contact_email');
                        
                        $contact_phone = get_post_meta(get_the_ID(), '_terms_contact_phone', true);
                        if (empty($contact_phone)) $contact_phone = get_terms_default('contact_phone');
                        
                        $contact_address = get_post_meta(get_the_ID(), '_terms_contact_address', true);
                        if (empty($contact_address)) $contact_address = get_terms_default('contact_address');
                        ?>
                        <h2><?php echo esc_html($contact_title); ?></h2>
                        <p><?php echo wp_kses_post($contact_content); ?></p>
                        
                        <div class="contact-details">
                            <p><strong>Aimpro Digital</strong><br>
                            Email: <?php echo esc_html($contact_email); ?><br>
                            Phone: <?php echo esc_html($contact_phone); ?><br>
                            Address: <?php echo esc_html($contact_address); ?></p>
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
