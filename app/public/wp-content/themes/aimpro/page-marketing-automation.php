<?php
/**
 * Template Name: Marketing Automation Services
 * Description: Comprehensive marketing automation services overview
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <span class="current">Marketing Automation</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_header_title', true) ?: 'Marketing Automation Services'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_header_subtitle', true) ?: 'Streamline your marketing processes and nurture leads automatically'); ?></p>
                <div class="header-badges animate-on-scroll animate-fade-up">
                    <?php 
                    $badges = get_post_meta(get_the_ID(), 'ma_header_badges', true) ?: 'AI-Powered,CRM Integration,Multi-Channel';
                    $badge_array = array_map('trim', explode(',', $badges));
                    foreach ($badge_array as $badge): 
                    ?>
                        <span class="badge"><?php echo esc_html($badge); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Service Overview -->
        <section class="service-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_overview_title', true) ?: 'Automate Your Way to Growth'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_overview_description_1', true) ?: 'Our marketing automation services help you create sophisticated, personalised customer journeys that nurture leads, increase conversions, and drive revenue growth. From email sequences to AI-powered chatbots, we build automation systems that work 24/7 to grow your business.'); ?></p>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_overview_description_2', true) ?: 'By leveraging cutting-edge automation tools and AI technology, we help you deliver the right message to the right person at the right time, creating meaningful connections that drive long-term customer relationships.'); ?></p>
                    </div>
                    <div class="overview-stats animate-on-scroll animate-slide-right">
                        <div class="stat-item">
                            <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_stat_1_number', true) ?: '60%'); ?></span>
                            <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_stat_1_label', true) ?: 'Time savings on average'); ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_stat_2_number', true) ?: '300%'); ?></span>
                            <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_stat_2_label', true) ?: 'Increase in lead nurturing'); ?></span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_stat_3_number', true) ?: '85%'); ?></span>
                            <span class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_stat_3_label', true) ?: 'Improvement in conversion rates'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Services Grid -->        <section class="service-overview">
            <div class="container">
                <div class="section-header animate-on-scroll animate-fade-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_services_title', true) ?: 'Our Marketing Automation Services'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_services_description', true) ?: 'Streamline your marketing processes with intelligent automation solutions that nurture leads and drive conversions.'); ?></p>
                </div>
                <div class="services-grid">                      <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-users-cog" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_1_title', true) ?: 'AI CRM Setup & Integration'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_1_description', true) ?: 'Implement and configure advanced CRM systems with AI capabilities to manage leads, track customer interactions, and automate sales processes.'); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_post_meta(get_the_ID(), 'ma_service_1_features', true) ?: "CRM platform selection and setup\nAI lead scoring implementation\nSales pipeline automation\nCustom field and workflow creation\nThird-party integrations";
                                $features_array = array_filter(array_map('trim', explode("\n", $features)));
                                foreach ($features_array as $feature): 
                                ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_service_1_link', true) ?: home_url('/ai-crm-setup')); ?>" class="service-cta">Learn More</a>
                        </div>                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-envelope-open-text" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_2_title', true) ?: 'Email & SMS Automation Flows'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_2_description', true) ?: 'Create sophisticated email and SMS sequences that nurture leads, onboard customers, and drive repeat purchases automatically.'); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_post_meta(get_the_ID(), 'ma_service_2_features', true) ?: "Welcome series automation\nAbandoned cart recovery\nLead nurturing sequences\nCustomer onboarding flows\nRe-engagement campaigns";
                                $features_array = array_filter(array_map('trim', explode("\n", $features)));
                                foreach ($features_array as $feature): 
                                ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>                            </ul>
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_service_2_link', true) ?: home_url('/email-sms-flows')); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-calendar-alt" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_3_title', true) ?: 'Email Marketing Campaigns'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_3_description', true) ?: 'Design and execute targeted email marketing campaigns that engage your audience and drive conversions with personalised messaging.'); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_post_meta(get_the_ID(), 'ma_service_3_features', true) ?: "Campaign strategy and planning\nEmail template design\nList segmentation and targeting\nA/B testing and optimisation\nPerformance analytics and reporting";
                                $features_array = array_filter(array_map('trim', explode("\n", $features)));
                                foreach ($features_array as $feature): 
                                ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>                            </ul>
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_service_3_link', true) ?: home_url('/email-campaigns')); ?>" class="service-cta">Learn More</a>
                        </div>                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-filter" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_4_title', true) ?: 'Sales Funnel Automation'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_4_description', true) ?: 'Build and optimise automated sales funnels that guide prospects through your buying process and maximise conversion rates.'); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_post_meta(get_the_ID(), 'ma_service_4_features', true) ?: "Funnel strategy and mapping\nLead magnet creation\nAutomated follow-up sequences\nConversion optimisation\nMulti-step campaign setup";
                                $features_array = array_filter(array_map('trim', explode("\n", $features)));
                                foreach ($features_array as $feature): 
                                ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>                            </ul>
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_service_4_link', true) ?: home_url('/funnel-automation')); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-comments" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_5_title', true) ?: 'Chatbot Development'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_5_description', true) ?: 'Deploy intelligent chatbots that provide instant customer support, qualify leads, and automate common interactions 24/7.'); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_post_meta(get_the_ID(), 'ma_service_5_features', true) ?: "AI chatbot development\nLead qualification automation\nCustomer support automation\nMulti-platform deployment\nNatural language processing";
                                $features_array = array_filter(array_map('trim', explode("\n", $features)));
                                foreach ($features_array as $feature): 
                                ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>                            </ul>
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_service_5_link', true) ?: home_url('/chatbots')); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-robot" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_6_title', true) ?: 'AI Marketing Tools'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_6_description', true) ?: 'Implement cutting-edge AI tools and technologies to optimise your marketing processes and improve decision-making.'); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_post_meta(get_the_ID(), 'ma_service_6_features', true) ?: "AI-powered content creation\nPredictive analytics setup\nAutomated personalisation\nMachine learning optimisation\nAI tool integration and training";
                                $features_array = array_filter(array_map('trim', explode("\n", $features)));
                                foreach ($features_array as $feature): 
                                ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>                            </ul>
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_service_6_link', true) ?: home_url('/ai-tools')); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>        <!-- Automation Success Story -->
        <section class="automation-case-study">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_study_title', true) ?: 'Case Study: SaaS Company Transformation'); ?></h2>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_study_subtitle', true) ?: 'Complete Marketing Automation Saves 35 Hours Weekly'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_study_description', true) ?: 'A growing SaaS company was struggling with manual lead nurturing and inefficient sales processes. Our comprehensive marketing automation solution transformed their entire customer acquisition system.'); ?></p>
                        
                        <div class="challenge-solution animate-on-scroll animate-fade-up">
                            <div class="challenge">
                                <h4>The Challenge</h4>
                                <ul>
                                    <?php 
                                    $challenges = get_post_meta(get_the_ID(), 'ma_case_study_challenges', true) ?: "Manual lead qualification consuming 20+ hours weekly\nInconsistent follow-up with potential customers\nNo systematic onboarding process\nPoor lead to customer conversion rates\nDisconnected marketing and sales processes";
                                    $challenges_array = array_filter(array_map('trim', explode("\n", $challenges)));
                                    foreach ($challenges_array as $challenge): 
                                    ?>
                                        <li><?php echo esc_html($challenge); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="solution">
                                <h4>Our Solution</h4>
                                <ul>
                                    <?php 
                                    $solutions = get_post_meta(get_the_ID(), 'ma_case_study_solutions', true) ?: "Implemented AI-powered CRM with lead scoring\nCreated automated nurturing email sequences\nBuilt comprehensive onboarding automation\nDeployed chatbot for initial lead qualification\nIntegrated all systems for seamless data flow";
                                    $solutions_array = array_filter(array_map('trim', explode("\n", $solutions)));
                                    foreach ($solutions_array as $solution): 
                                    ?>
                                        <li><?php echo esc_html($solution); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="case-study-metrics">
                        <div class="metric-card">
                            <div class="metric-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_metric_1_number', true) ?: '35 Hours'); ?></div>
                            <div class="metric-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_metric_1_label', true) ?: 'Weekly Time Savings'); ?></div>
                        </div>
                        <div class="metric-card">
                            <div class="metric-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_metric_2_number', true) ?: '240%'); ?></div>
                            <div class="metric-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_metric_2_label', true) ?: 'Increase in Lead Conversions'); ?></div>
                        </div>
                        <div class="metric-card">
                            <div class="metric-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_metric_3_number', true) ?: '68%'); ?></div>
                            <div class="metric-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_metric_3_label', true) ?: 'Faster Sales Cycle'); ?></div>
                        </div>
                        <div class="metric-card">
                            <div class="metric-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_metric_4_number', true) ?: '12 Weeks'); ?></div>
                            <div class="metric-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_metric_4_label', true) ?: 'Implementation Timeline'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Automation Process -->
        <section class="automation-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_title', true) ?: 'Our Marketing Automation Process'); ?></h2>
                <div class="process-steps">
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_1_title', true) ?: 'Strategy & Planning'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_1_description', true) ?: 'analyse your current processes, identify automation opportunities, and create a comprehensive automation strategy.'); ?></p>
                        </div>
                    </div>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_2_title', true) ?: 'Platform Selection'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_2_description', true) ?: 'Choose the right automation tools and platforms based on your needs, budget, and integration requirements.'); ?></p>
                        </div>
                    </div>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_3_title', true) ?: 'Setup & Integration'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_3_description', true) ?: 'Configure automation platforms, integrate with existing systems, and create custom workflows and sequences.'); ?></p>
                        </div>
                    </div>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_4_title', true) ?: 'Testing & Launch'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_4_description', true) ?: 'Thoroughly test all automation sequences, ensure proper functionality, and launch your automation systems.'); ?></p>
                        </div>
                    </div>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_5_title', true) ?: 'Monitor & optimise'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_5_description', true) ?: 'Continuously monitor performance, analyse results, and optimise automation sequences for better results.'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Automation Tools -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header animate-on-scroll animate-fade-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_tools_title', true) ?: 'Marketing Automation Tools We Use'); ?></h2>
                    <p>We leverage cutting-edge marketing automation platforms and AI technologies to deliver powerful, scalable automation solutions.</p>
                </div>
                <div class="services-grid">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h3>CRM Platforms</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>HubSpot CRM</li>
                            <li>Salesforce</li>
                            <li>Pipedrive</li>
                            <li>ActiveCampaign</li>
                            <li>GoHighLevel</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <h3>Email Automation</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Mailchimp</li>
                            <li>ConvertKit</li>
                            <li>Klaviyo</li>
                            <li>Drip</li>
                            <li>GetResponse</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3>Chatbot Platforms</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Intercom</li>
                            <li>Drift</li>
                            <li>ManyChat</li>
                            <li>Chatfuel</li>
                            <li>Zendesk Chat</li>
                        </ul>
                    </div>
                      <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>AI & Analytics</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Google Analytics 4</li>
                            <li>Zapier</li>
                            <li>Make (formerly Integromat)</li>
                            <li>ChatGPT API</li>
                            <li>Tableau</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <h3>Social Media Management</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Hootsuite</li>
                            <li>Buffer</li>
                            <li>Sprout Social</li>
                            <li>Later</li>
                            <li>SocialBee</li>
                        </ul>
                    </div>
                    
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3>Marketing Automation Platforms</h3>
                        <ul style="text-align: left; colour: #666; line-height: 1.8;">
                            <li>Marketo</li>
                            <li>Pardot</li>
                            <li>Autopilot</li>
                            <li>Ontraport</li>
                            <li>Infusionsoft</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- Industry Applications -->
        <section class="industry-applications">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industries_title', true) ?: 'Marketing Automation for Your Industry'); ?></h2>
                <div class="industry-grid">
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_saas_title', true) ?: 'SaaS & Technology'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_saas_description', true) ?: 'User onboarding automation, trial-to-paid conversions, and customer success workflows for software companies.'); ?></p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_ecommerce_title', true) ?: 'E-commerce'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_ecommerce_description', true) ?: 'Abandoned cart recovery, product recommendations, and customer lifecycle automation for online retailers.'); ?></p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_professional_title', true) ?: 'Professional Services'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_professional_description', true) ?: 'Lead nurturing, consultation booking, and client onboarding automation for service-based businesses.'); ?></p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_healthcare_title', true) ?: 'Healthcare'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_healthcare_description', true) ?: 'Patient communication, appointment reminders, and follow-up care automation for healthcare providers.'); ?></p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_education_title', true) ?: 'Education'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_education_description', true) ?: 'Student enrollment, course delivery, and engagement automation for educational institutions and online courses.'); ?></p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_realestate_title', true) ?: 'Real Estate'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_realestate_description', true) ?: 'Lead nurturing, property alerts, and client communication automation for real estate professionals.'); ?></p>
                    </div>
                </div>
            </div>
        </section>        <!-- ROI Calculator -->
        <section class="roi-calculator">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_title', true) ?: 'Marketing Automation ROI'); ?></h2>
                <div class="roi-content">
                    <div class="roi-benefits animate-on-scroll animate-slide-left">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefits_title', true) ?: 'Average ROI Benefits:'); ?></h3>
                        <div class="benefit-list">
                            <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                                <span class="benefit-metric"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_1_metric', true) ?: '60%'); ?></span>
                                <span class="benefit-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_1_label', true) ?: 'Time savings on marketing tasks'); ?></span>
                            </div>                            <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                                <span class="benefit-metric"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_2_metric', true) ?: '300%'); ?></span>
                                <span class="benefit-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_2_label', true) ?: 'Increase in qualified leads'); ?></span>
                            </div>
                            <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                                <span class="benefit-metric"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_3_metric', true) ?: '25%'); ?></span>
                                <span class="benefit-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_3_label', true) ?: 'Improvement in sales velocity'); ?></span>
                            </div>
                            <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                                <span class="benefit-metric"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_4_metric', true) ?: '40%'); ?></span>
                                <span class="benefit-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_4_label', true) ?: 'Reduction in customer acquisition cost'); ?></span>
                            </div>
                        </div>                    </div>
                    <div class="roi-cta animate-on-scroll animate-slide-right">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_cta_title', true) ?: 'Calculate Your ROI'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_cta_description', true) ?: 'See how much time and money marketing automation could save your business with our free ROI calculator.'); ?></p>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_roi_cta_button_url', true) ?: home_url('/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_cta_button_text', true) ?: 'Get ROI Analysis'); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Client Testimonial -->
        <section class="client-testimonial animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="testimonial-content">
                    <div class="quote-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 21C3 17.4 5.4 17.4 5.4 17.4H9V21H3Z" stroke="currentcolour" stroke-width="2"/>
                            <path d="M15 21C15 17.4 17.4 17.4 17.4 17.4H21V21H15Z" stroke="currentcolour" stroke-width="2"/>
                        </svg>
                    </div>
                    <blockquote>
                        "<?php echo esc_html(get_post_meta(get_the_ID(), 'ma_testimonial_quote', true) ?: 'The marketing automation system AIM Pro Marketing built for us has been a game-changer. We\'re now nurturing 10x more leads with half the manual work. Our conversion rates have never been higher.'); ?>"
                    </blockquote>
                    <div class="testimonial-author">
                        <strong><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_testimonial_author_name', true) ?: 'Jennifer Walsh'); ?></strong>
                        <span><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_testimonial_author_position', true) ?: 'VP of Marketing, InnovateTech Solutions'); ?></span>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="cta-section animate-on-scroll animate-scale-up">
            <div class="section-content">
                <div class="cta-content animate-on-scroll animate-fade-up">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_cta_title', true) ?: 'Ready to Automate Your Marketing?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_cta_description', true) ?: 'Let\'s create a custom automation strategy that saves you time while improving your marketing results.'); ?></p>                    <div class="cta-buttons animate-on-scroll animate-fade-up">
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_cta_primary_button_url', true) ?: home_url('/contact')); ?>" class="btn-white"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_cta_primary_button_text', true) ?: 'Get Free Automation Audit'); ?></a>
                    </div>
                    <div class="cta-features animate-on-scroll animate-fade-up">
                        <?php 
                        $features = get_post_meta(get_the_ID(), 'ma_cta_features', true) ?: '✓ Free process analysis,✓ Custom automation strategy,✓ ROI projection included';
                        $features_array = array_map('trim', explode(',', $features));
                        foreach ($features_array as $feature): 
                        ?>
                            <span><?php echo esc_html($feature); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
