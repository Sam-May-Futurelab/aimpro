<?php
/**
 * Template Name: Streamline Sales Funnel Solution Page
 * Description: Sales funnel optimization solution for improved conversions
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_header_title', true) ?: 'Streamline Your Sales Funnel'; ?></h1>
                <p class="page-subtitle"><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_header_subtitle', true) ?: 'Optimize every stage of your sales process to convert more prospects into paying customers'; ?></p>
            </div>
        </section>

        <!-- Solution Overview -->
        <section class="solution-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text">
                        <h2><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_overview_title', true) ?: 'Turn More Prospects Into Customers'; ?></h2>
                        <p><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_overview_description', true) ?: 'A well-optimized sales funnel is the difference between business growth and stagnation. Our systematic approach identifies bottlenecks, eliminates friction, and creates a smooth journey that guides prospects from awareness to purchase. We build funnels that work around the clock to grow your business.'; ?></p>
                        
                        <div class="solution-challenges">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_problems_title', true) ?: 'Sales Funnel Problems We Solve:'; ?></h3>
                            <ul>
                                <?php
                                $problems = get_post_meta(get_the_ID(), 'streamline_sales_funnel_problems', true);
                                if (!empty($problems) && is_array($problems)) {
                                    foreach ($problems as $problem) {
                                        echo '<li>' . esc_html($problem) . '</li>';
                                    }
                                } else {
                                    $default_problems = array(
                                        'High drop-off rates between stages',
                                        'Poor lead qualification processes',
                                        'Inconsistent follow-up sequences',
                                        'Lack of funnel visibility and tracking',
                                        'Misaligned marketing and sales efforts',
                                        'Manual processes slowing conversions'
                                    );
                                    foreach ($default_problems as $problem) {
                                        echo '<li>' . esc_html($problem) . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image">
                        <?php 
                        $overview_image = get_post_meta(get_the_ID(), 'streamline_sales_funnel_overview_image', true);
                        if (!empty($overview_image)) {
                            echo wp_get_attachment_image($overview_image, 'full', false, array('alt' => 'Sales Funnel Optimization Strategy'));
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/solutions/sales-funnel-overview.jpg" alt="Sales Funnel Optimization Strategy" />';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sales Funnel Services -->
        <section class="funnel-services">
            <div class="section-content">
                <h2><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_strategy_title', true) ?: 'Our Sales Funnel Optimization Services'; ?></h2>
                <div class="services-grid">
                    <?php
                    $services = get_post_meta(get_the_ID(), 'streamline_sales_funnel_services', true);
                    if (!empty($services) && is_array($services)) {
                        foreach ($services as $service) {
                            ?>
                            <div class="service-card">
                                <div class="service-icon"><!-- Optionally add icon meta here --></div>
                                <div class="service-content">
                                    <h3><?php echo esc_html($service['title']); ?></h3>
                                    <p><?php echo esc_html($service['description']); ?></p>
                                    <?php if (!empty($service['features']) && is_array($service['features'])) : ?>
                                        <ul class="service-features">
                                            <?php foreach ($service['features'] as $feature) : ?>
                                                <li><?php echo esc_html($feature); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="service-card">
                            <div class="service-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="service-content">
                                <h3>Funnel Analysis & Mapping</h3>
                                <p>Comprehensive audit of your current sales process to identify opportunities and bottlenecks.</p>
                                <ul class="service-features">
                                    <li>Customer journey mapping</li>
                                    <li>Conversion rate analysis</li>
                                    <li>Drop-off point identification</li>
                                    <li>Competitor funnel research</li>
                                </ul>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                    <path d="M12 6V12L16 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="service-content">
                                <h3>Lead Qualification System</h3>
                                <p>Implement scoring and qualification systems to focus efforts on high-value prospects.</p>
                                <ul class="service-features">
                                    <li>Lead scoring model creation</li>
                                    <li>Qualification criteria development</li>
                                    <li>Automated lead routing</li>
                                    <li>Sales-ready lead identification</li>
                                </ul>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 16V8A2 2 0 0 0 19 6H5A2 2 0 0 0 3 8V16A2 2 0 0 0 5 18H19A2 2 0 0 0 21 16Z" stroke="currentColor" stroke-width="2"/>
                                    <polyline points="7,9 12,13 17,9" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="service-content">
                                <h3>Automated Follow-Up Sequences</h3>
                                <p>Create personalized email sequences that nurture leads through the buying process.</p>
                                <ul class="service-features">
                                    <li>Drip campaign development</li>
                                    <li>Behavioral trigger sequences</li>
                                    <li>Personalization strategies</li>
                                    <li>Multi-channel follow-up</li>
                                </ul>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2" y="4" width="20" height="16" rx="2" stroke="currentColor" stroke-width="2"/>
                                    <path d="M7 15L10 12L13 15L17 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="service-content">
                                <h3>Conversion Optimization</h3>
                                <p>Optimize each funnel stage to improve conversion rates and reduce friction.</p>
                                <ul class="service-features">
                                    <li>Landing page optimization</li>
                                    <li>Form conversion improvement</li>
                                    <li>Checkout process streamlining</li>
                                    <li>A/B testing implementation</li>
                                </ul>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 2H6A2 2 0 0 0 4 4V20A2 2 0 0 0 6 22H18A2 2 0 0 0 20 20V8L14 2Z" stroke="currentColor" stroke-width="2"/>
                                    <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="service-content">
                                <h3>Sales Process Documentation</h3>
                                <p>Create clear processes and playbooks for consistent sales performance.</p>
                                <ul class="service-features">
                                    <li>Sales playbook creation</li>
                                    <li>Process documentation</li>
                                    <li>Training material development</li>
                                    <li>Performance tracking setup</li>
                                </ul>
                            </div>
                        </div>

                        <div class="service-card">
                            <div class="service-icon">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="12" y1="1" x2="12" y2="23" stroke="currentColor" stroke-width="2"/>
                                    <path d="M17 5H9.5A3.5 3.5 0 0 0 6 8.5V8.5A3.5 3.5 0 0 0 9.5 12H14.5A3.5 3.5 0 0 1 18 15.5V15.5A3.5 3.5 0 0 1 14.5 19H6" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </div>
                            <div class="service-content">
                                <h3>Revenue Tracking & Analytics</h3>
                                <p>Implement comprehensive tracking to measure and optimize funnel performance.</p>
                                <ul class="service-features">
                                    <li>Revenue attribution setup</li>
                                    <li>Funnel analytics dashboard</li>
                                    <li>Performance reporting</li>
                                    <li>ROI measurement tools</li>
                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Funnel Success Story -->
        <section class="funnel-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text">
                        <span class="case-study-label"><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_label', true) ?: 'Success Story'; ?></span>
                        <h2><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_title', true) ?: 'TechFlow Solutions: 400% Sales Velocity Increase'; ?></h2>
                        <p><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_description', true) ?: 'TechFlow Solutions, a B2B software company, had a complex 6-month sales cycle with low conversion rates and high customer acquisition costs.'; ?></p>
                        <div class="case-study-challenge">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_challenge_title', true) ?: 'The Challenge'; ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_challenge', true);
                                if (!empty($challenges) && is_array($challenges)) {
                                    foreach ($challenges as $challenge) {
                                        echo '<li>' . esc_html($challenge) . '</li>';
                                    }
                                } else {
                                    $default = array('6-month average sales cycle','12% lead-to-customer conversion rate','$8,500 customer acquisition cost','Poor visibility into funnel performance');
                                    foreach ($default as $challenge) echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="case-study-solution">
                            <h3><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_solution_title', true) ?: 'Our Solution'; ?></h3>
                            <ul>
                                <?php
                                $solutions = get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_solution', true);
                                if (!empty($solutions) && is_array($solutions)) {
                                    foreach ($solutions as $solution) {
                                        echo '<li>' . esc_html($solution) . '</li>';
                                    }
                                } else {
                                    $default = array('Complete funnel redesign and optimization','Automated lead qualification system','Multi-touch nurture sequences','Sales process standardization');
                                    foreach ($default as $solution) echo '<li>' . esc_html($solution) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results">
                        <h3><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_results_title', true) ?: 'Results After 6 Months'; ?></h3>
                        <div class="results-grid">
                            <?php
                            $results = get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_results', true);
                            if (!empty($results) && is_array($results)) {
                                foreach ($results as $result) {
                                    echo '<div class="result-item"><div class="result-number">' . esc_html($result['value']) . '</div><div class="result-label">' . esc_html($result['label']) . '</div></div>';
                                }
                            } else {
                                $default = array(
                                    array('value'=>'400%','label'=>'Sales Velocity Increase'),
                                    array('value'=>'45%','label'=>'Conversion Rate Improvement'),
                                    array('value'=>'65%','label'=>'Sales Cycle Reduction'),
                                    array('value'=>'$3,200','label'=>'Reduced CAC'),
                                );
                                foreach ($default as $result) echo '<div class="result-item"><div class="result-number">' . esc_html($result['value']) . '</div><div class="result-label">' . esc_html($result['label']) . '</div></div>';
                            }
                            ?>
                        </div>
                        <a href="<?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_case_link', true) ?: home_url('/case-studies'); ?>" class="case-study-link">Read Full Case Study</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sales Funnel Process -->
        <section class="funnel-process">
            <div class="section-content">
                <h2><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_process_title', true) ?: 'Our Sales Funnel Optimization Process'; ?></h2>
                <div class="process-steps">
                    <?php
                    $steps = get_post_meta(get_the_ID(), 'streamline_sales_funnel_process_steps', true);
                    if (!empty($steps) && is_array($steps)) {
                        $step_count = 1;
                        foreach ($steps as $step) {
                            ?>
                            <div class="process-step">
                                <div class="step-number"><?php echo $step_count; ?></div>
                                <div class="step-content">
                                    <h3><?php echo esc_html($step['title']); ?></h3>
                                    <p><?php echo esc_html($step['description']); ?></p>
                                </div>
                            </div>
                            <?php
                            $step_count++;
                        }
                    } else {
                        ?>
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h3>Funnel Audit & Analysis</h3>
                                <p>Comprehensive review of your current sales process, conversion rates, and customer journey.</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h3>Strategy Development</h3>
                                <p>Create a customized funnel strategy based on your business model and target audience.</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h3>Implementation & Testing</h3>
                                <p>Build and deploy optimized funnel elements with continuous testing and refinement.</p>
                            </div>
                        </div>

                        <div class="process-step">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h3>Monitor & Optimize</h3>
                                <p>Track performance metrics and make data-driven improvements for sustained growth.</p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Funnel Stages -->
        <section class="funnel-stages">
            <div class="section-content">
                <h2><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_stages_title', true) ?: 'Sales Funnel Stages We Optimize'; ?></h2>
                <div class="metrics-grid">
                    <?php
                    $stages = get_post_meta(get_the_ID(), 'streamline_sales_funnel_stages', true);
                    if (!empty($stages) && is_array($stages)) {
                        $stage_count = 1;
                        foreach ($stages as $stage) {
                            ?>
                            <div class="metric-category">
                                <div class="stage-number"><?php echo $stage_count; ?></div>
                                <h3><?php echo esc_html($stage['title']); ?></h3>
                                <p><?php echo esc_html($stage['description']); ?></p>
                                <?php if (!empty($stage['features']) && is_array($stage['features'])) : ?>
                                    <ul class="metric-list">
                                        <?php foreach ($stage['features'] as $feature) : ?>
                                            <li><?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php
                            $stage_count++;
                        }
                    } else {
                        ?>
                        <div class="metric-category">
                            <div class="stage-number">1</div>
                            <h3>Awareness</h3>
                            <p>Attract potential customers through strategic content and advertising.</p>
                            <ul class="metric-list">
                                <li>Content marketing strategy</li>
                                <li>Social media presence</li>
                                <li>Paid advertising campaigns</li>
                                <li>SEO optimization</li>
                            </ul>
                        </div>

                        <div class="metric-category">
                            <div class="stage-number">2</div>
                            <h3>Interest</h3>
                            <p>Engage prospects with valuable content and lead magnets.</p>
                            <ul class="metric-list">
                                <li>Lead magnet creation</li>
                                <li>Email opt-in optimization</li>
                                <li>Educational content delivery</li>
                                <li>Webinar and demo scheduling</li>
                            </ul>
                        </div>

                        <div class="metric-category">
                            <div class="stage-number">3</div>
                            <h3>Consideration</h3>
                            <p>Nurture leads with targeted content that addresses their needs.</p>
                            <ul class="metric-list">
                                <li>Email nurture sequences</li>
                                <li>Case study presentations</li>
                                <li>Product demonstrations</li>
                                <li>Consultation scheduling</li>
                            </ul>
                        </div>

                        <div class="metric-category">
                            <div class="stage-number">4</div>
                            <h3>Decision</h3>
                            <p>Remove barriers and provide compelling reasons to purchase.</p>
                            <ul class="metric-list">
                                <li>Objection handling content</li>
                                <li>Social proof integration</li>
                                <li>Risk reversal offers</li>
                                <li>Limited-time promotions</li>
                            </ul>
                        </div>

                        <div class="metric-category">
                            <div class="stage-number">5</div>
                            <h3>Action</h3>
                            <p>Optimize the purchase process for maximum conversions.</p>
                            <ul class="metric-list">
                                <li>Checkout optimization</li>
                                <li>Payment gateway integration</li>
                                <li>Order confirmation automation</li>
                                <li>Onboarding sequence setup</li>
                            </ul>
                        </div>

                        <div class="metric-category">
                            <div class="stage-number">6</div>
                            <h3>Retention</h3>
                            <p>Keep customers engaged and encourage repeat purchases.</p>
                            <ul class="metric-list">
                                <li>Customer onboarding</li>
                                <li>Upsell and cross-sell campaigns</li>
                                <li>Loyalty program development</li>
                                <li>Referral program creation</li>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Funnel Types -->
        <section class="funnel-types">
            <div class="section-content">
                <h2><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_types_title', true) ?: 'Sales Funnel Optimization by Business Type'; ?></h2>
                <div class="types-grid">
                    <?php
                    $types = get_post_meta(get_the_ID(), 'streamline_sales_funnel_types', true);
                    if (!empty($types) && is_array($types)) {
                        foreach ($types as $type) {
                            ?>
                            <div class="type-card">
                                <h3><?php echo esc_html($type['title']); ?></h3>
                                <?php if (!empty($type['features']) && is_array($type['features'])) : ?>
                                    <ul class="type-features">
                                        <?php foreach ($type['features'] as $feature) : ?>
                                            <li><?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                                <div class="type-results">
                                    <span><?php echo esc_html($type['result']); ?></span>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="type-card">
                            <h3>B2B Sales Funnels</h3>
                            <ul class="type-features">
                                <li>Long-cycle nurture sequences</li>
                                <li>Account-based marketing</li>
                                <li>Multi-stakeholder targeting</li>
                                <li>ROI-focused messaging</li>
                            </ul>
                            <div class="type-results">
                                <span>Average: 250% qualified lead increase</span>
                            </div>
                        </div>

                        <div class="type-card">
                            <h3>E-commerce Funnels</h3>
                            <ul class="type-features">
                                <li>Product recommendation engines</li>
                                <li>Cart abandonment recovery</li>
                                <li>Post-purchase upsells</li>
                                <li>Customer lifetime value optimization</li>
                            </ul>
                            <div class="type-results">
                                <span>Average: 180% revenue per visitor</span>
                            </div>
                        </div>

                        <div class="type-card">
                            <h3>Service-Based Funnels</h3>
                            <ul class="type-features">
                                <li>Consultation booking optimization</li>
                                <li>Service package presentation</li>
                                <li>Trust-building content sequences</li>
                                <li>Client testimonial integration</li>
                            </ul>
                            <div class="type-results">
                                <span>Average: 300% consultation bookings</span>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Funnel Tools -->
        <section class="funnel-tools">
            <div class="section-content">
                <h2><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_tech_title', true) ?: 'Sales Funnel Technology Stack'; ?></h2>
                <div class="tools-grid">
                    <?php
                    $tech = get_post_meta(get_the_ID(), 'streamline_sales_funnel_tech', true);
                    if (!empty($tech) && is_array($tech)) {
                        foreach ($tech as $cat) {
                            ?>
                            <div class="tool-category">
                                <h3><?php echo esc_html($cat['category']); ?></h3>
                                <?php if (!empty($cat['tools']) && is_array($cat['tools'])) : ?>
                                    <ul class="tool-list">
                                        <?php foreach ($cat['tools'] as $tool) : ?>
                                            <li><?php echo esc_html($tool); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php
                        }
                    } else {
                        ?>
                        <div class="tool-category">
                            <h3>CRM & Sales Automation</h3>
                            <ul class="tool-list">
                                <li>HubSpot CRM</li>
                                <li>Salesforce automation</li>
                                <li>Pipedrive optimization</li>
                                <li>ActiveCampaign setup</li>
                            </ul>
                        </div>

                        <div class="tool-category">
                            <h3>Email Marketing & Nurturing</h3>
                            <ul class="tool-list">
                                <li>Mailchimp campaigns</li>
                                <li>ConvertKit sequences</li>
                                <li>Klaviyo e-commerce flows</li>
                                <li>Drip campaign management</li>
                            </ul>
                        </div>

                        <div class="tool-category">
                            <h3>Analytics & Tracking</h3>
                            <ul class="tool-list">
                                <li>Google Analytics 4</li>
                                <li>Facebook Pixel tracking</li>
                                <li>Custom conversion tracking</li>
                                <li>Revenue attribution models</li>
                            </ul>
                        </div>

                        <div class="tool-category">
                            <h3>Landing Page & Conversion</h3>
                            <ul class="tool-list">
                                <li>Unbounce optimization</li>
                                <li>Leadpages creation</li>
                                <li>ClickFunnels management</li>
                                <li>Custom funnel development</li>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Funnel Testimonial -->
        <section class="funnel-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <blockquote>
                        <?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_testimonial_quote', true) ?: 'Aimpro Digital transformed our entire sales process. We went from a chaotic, manual system to a streamlined funnel that runs automatically. Our sales velocity increased by 400% and our team is now much more efficient.'; ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_testimonial_name', true) ?: 'Michael Rodriguez'; ?></h4>
                            <span><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_testimonial_position', true) ?: 'CEO, TechFlow Solutions'; ?></span>
                            <div class="author-company"><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_testimonial_company', true) ?: 'B2B Software Company'; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="website-cta text-center">
            <div class="section-content">
                <h2><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_cta_title', true) ?: 'Ready to Streamline Your Sales Funnel?'; ?></h2>
                <p><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_cta_description', true) ?: 'Let\'s optimize your sales funnel for maximum conversions and business growth.'; ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_cta_primary_link', true) ?: home_url('/contact'); ?>" class="btn btn-primary"><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_cta_primary_text', true) ?: 'Get Free Funnel Audit'; ?></a>
                    <a href="<?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_cta_secondary_link', true) ?: home_url('/case-studies'); ?>" class="btn btn-secondary"><?php echo get_post_meta(get_the_ID(), 'streamline_sales_funnel_cta_secondary_text', true) ?: 'View Success Stories'; ?></a>
                </div>
                <div class="cta-benefits">
                    <?php
                    $benefits = get_post_meta(get_the_ID(), 'streamline_sales_funnel_cta_benefits', true);
                    if (!empty($benefits) && is_array($benefits)) {
                        foreach ($benefits as $benefit) {
                            echo '<span class="benefit">✓ ' . esc_html($benefit) . '</span>';
                        }
                    } else {
                        $default = array('Conversion-focused funnel design','Automated lead nurturing','Comprehensive analytics setup');
                        foreach ($default as $benefit) echo '<span class="benefit">✓ ' . esc_html($benefit) . '</span>';
                    }
                    ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
