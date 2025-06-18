<?php
/**
 * Template Name: Marketing Automation Services
 * Description: Comprehensive marketing automation services overview
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_header_title', true) ?: 'Marketing Automation Services'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_header_subtitle', true) ?: 'Streamline your marketing processes and nurture leads automatically'); ?></p>
                <div class="header-badges">
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
                    <div class="overview-text">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_overview_title', true) ?: 'Automate Your Way to Growth'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_overview_description_1', true) ?: 'Our marketing automation services help you create sophisticated, personalized customer journeys that nurture leads, increase conversions, and drive revenue growth. From email sequences to AI-powered chatbots, we build automation systems that work 24/7 to grow your business.'); ?></p>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_overview_description_2', true) ?: 'By leveraging cutting-edge automation tools and AI technology, we help you deliver the right message to the right person at the right time, creating meaningful connections that drive long-term customer relationships.'); ?></p>
                    </div>
                    <div class="overview-stats">
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
                <div class="section-header">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_services_title', true) ?: 'Our Marketing Automation Services'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_services_description', true) ?: 'Streamline your marketing processes with intelligent automation solutions that nurture leads and drive conversions.'); ?></p>
                </div>
                <div class="services-grid">                      <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23 21V19C23 18.1645 22.7045 17.3541 22.1679 16.7116C21.6313 16.0691 20.8902 15.6316 20.07 15.4662" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 3.13281C16.8902 3.29814 17.6313 3.73574 18.1679 4.37823C18.7045 5.02072 19 5.83115 19 6.66656C19 7.50197 18.7045 8.3124 18.1679 8.95489C17.6313 9.59738 16.8902 10.035 16 10.2003" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
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
                        </div>
                    </div><div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2"/>
                                <polyline points="22,6 12,13 2,6" stroke="currentColor" stroke-width="2"/>
                            </svg>
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
                    </div>                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_3_title', true) ?: 'Email Marketing Campaigns'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_3_description', true) ?: 'Design and execute targeted email marketing campaigns that engage your audience and drive conversions with personalized messaging.'); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_post_meta(get_the_ID(), 'ma_service_3_features', true) ?: "Campaign strategy and planning\nEmail template design\nList segmentation and targeting\nA/B testing and optimization\nPerformance analytics and reporting";
                                $features_array = array_filter(array_map('trim', explode("\n", $features)));
                                foreach ($features_array as $feature): 
                                ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>                            </ul>
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_service_3_link', true) ?: home_url('/email-campaigns')); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 16.5C4.5 17.9 5.6 19 7 19H17C18.4 19 19.5 17.9 19.5 16.5V7.5C19.5 6.1 18.4 5 17 5H7C5.6 5 4.5 6.1 4.5 7.5V16.5Z" stroke="currentColor" stroke-width="2"/>
                                <path d="M8 9L12 13L16 9" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_4_title', true) ?: 'Sales Funnel Automation'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_4_description', true) ?: 'Build and optimize automated sales funnels that guide prospects through your buying process and maximize conversion rates.'); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_post_meta(get_the_ID(), 'ma_service_4_features', true) ?: "Funnel strategy and mapping\nLead magnet creation\nAutomated follow-up sequences\nConversion optimization\nMulti-step campaign setup";
                                $features_array = array_filter(array_map('trim', explode("\n", $features)));
                                foreach ($features_array as $feature): 
                                ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>                            </ul>
                            <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_service_4_link', true) ?: home_url('/funnel-automation')); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 15C21 15.5304 20.7893 16.0391 20.4142 16.4142C20.0391 16.7893 19.5304 17 19 17H7L3 21V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V15Z" stroke="currentColor" stroke-width="2"/>
                            </svg>
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
                    </div>                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_6_title', true) ?: 'AI Marketing Tools'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_service_6_description', true) ?: 'Implement cutting-edge AI tools and technologies to optimize your marketing processes and improve decision-making.'); ?></p>
                            <ul class="service-features">
                                <?php 
                                $features = get_post_meta(get_the_ID(), 'ma_service_6_features', true) ?: "AI-powered content creation\nPredictive analytics setup\nAutomated personalization\nMachine learning optimization\nAI tool integration and training";
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
                    <div class="case-study-text">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_study_title', true) ?: 'Case Study: SaaS Company Transformation'); ?></h2>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_study_subtitle', true) ?: 'Complete Marketing Automation Saves 35 Hours Weekly'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_case_study_description', true) ?: 'A growing SaaS company was struggling with manual lead nurturing and inefficient sales processes. Our comprehensive marketing automation solution transformed their entire customer acquisition system.'); ?></p>
                        
                        <div class="challenge-solution">
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
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_title', true) ?: 'Our Marketing Automation Process'); ?></h2>
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_1_title', true) ?: 'Strategy & Planning'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_1_description', true) ?: 'Analyze your current processes, identify automation opportunities, and create a comprehensive automation strategy.'); ?></p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_2_title', true) ?: 'Platform Selection'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_2_description', true) ?: 'Choose the right automation tools and platforms based on your needs, budget, and integration requirements.'); ?></p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_3_title', true) ?: 'Setup & Integration'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_3_description', true) ?: 'Configure automation platforms, integrate with existing systems, and create custom workflows and sequences.'); ?></p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_4_title', true) ?: 'Testing & Launch'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_4_description', true) ?: 'Thoroughly test all automation sequences, ensure proper functionality, and launch your automation systems.'); ?></p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_5_title', true) ?: 'Monitor & Optimize'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_process_step_5_description', true) ?: 'Continuously monitor performance, analyze results, and optimize automation sequences for better results.'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Automation Tools -->
        <section class="automation-tools">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_tools_title', true) ?: 'Marketing Automation Tools We Use'); ?></h2>
                <div class="tools-grid">
                    <div class="tool-category">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_tools_crm_title', true) ?: 'CRM Platforms'); ?></h3>
                        <ul>
                            <?php 
                            $crm_tools = get_post_meta(get_the_ID(), 'ma_tools_crm_list', true) ?: "HubSpot CRM\nSalesforce\nPipedrive\nActiveCampaign\nGoHighLevel";
                            $crm_tools_array = array_filter(array_map('trim', explode("\n", $crm_tools)));
                            foreach ($crm_tools_array as $tool): 
                            ?>
                                <li><?php echo esc_html($tool); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="tool-category">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_tools_email_title', true) ?: 'Email Automation'); ?></h3>
                        <ul>
                            <?php 
                            $email_tools = get_post_meta(get_the_ID(), 'ma_tools_email_list', true) ?: "Mailchimp\nConvertKit\nKlaviyo\nDrip\nGetResponse";
                            $email_tools_array = array_filter(array_map('trim', explode("\n", $email_tools)));
                            foreach ($email_tools_array as $tool): 
                            ?>
                                <li><?php echo esc_html($tool); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="tool-category">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_tools_chatbot_title', true) ?: 'Chatbot Platforms'); ?></h3>
                        <ul>
                            <?php 
                            $chatbot_tools = get_post_meta(get_the_ID(), 'ma_tools_chatbot_list', true) ?: "Intercom\nDrift\nManyChat\nChatfuel\nZendesk Chat";
                            $chatbot_tools_array = array_filter(array_map('trim', explode("\n", $chatbot_tools)));
                            foreach ($chatbot_tools_array as $tool): 
                            ?>
                                <li><?php echo esc_html($tool); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="tool-category">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_tools_ai_title', true) ?: 'AI & Analytics'); ?></h3>
                        <ul>
                            <?php 
                            $ai_tools = get_post_meta(get_the_ID(), 'ma_tools_ai_list', true) ?: "Google Analytics 4\nZapier\nMake (formerly Integromat)\nChatGPT API\nTableau";
                            $ai_tools_array = array_filter(array_map('trim', explode("\n", $ai_tools)));
                            foreach ($ai_tools_array as $tool): 
                            ?>
                                <li><?php echo esc_html($tool); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>        <!-- Industry Applications -->
        <section class="industry-applications">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industries_title', true) ?: 'Marketing Automation for Your Industry'); ?></h2>
                <div class="industry-grid">
                    <div class="industry-item">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_saas_title', true) ?: 'SaaS & Technology'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_saas_description', true) ?: 'User onboarding automation, trial-to-paid conversions, and customer success workflows for software companies.'); ?></p>
                    </div>
                    <div class="industry-item">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_ecommerce_title', true) ?: 'E-commerce'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_ecommerce_description', true) ?: 'Abandoned cart recovery, product recommendations, and customer lifecycle automation for online retailers.'); ?></p>
                    </div>
                    <div class="industry-item">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_professional_title', true) ?: 'Professional Services'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_professional_description', true) ?: 'Lead nurturing, consultation booking, and client onboarding automation for service-based businesses.'); ?></p>
                    </div>
                    <div class="industry-item">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_healthcare_title', true) ?: 'Healthcare'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_healthcare_description', true) ?: 'Patient communication, appointment reminders, and follow-up care automation for healthcare providers.'); ?></p>
                    </div>
                    <div class="industry-item">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_education_title', true) ?: 'Education'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_education_description', true) ?: 'Student enrollment, course delivery, and engagement automation for educational institutions and online courses.'); ?></p>
                    </div>
                    <div class="industry-item">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_realestate_title', true) ?: 'Real Estate'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_industry_realestate_description', true) ?: 'Lead nurturing, property alerts, and client communication automation for real estate professionals.'); ?></p>
                    </div>
                </div>
            </div>
        </section>        <!-- ROI Calculator -->
        <section class="roi-calculator">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_title', true) ?: 'Marketing Automation ROI'); ?></h2>
                <div class="roi-content">
                    <div class="roi-benefits">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefits_title', true) ?: 'Average ROI Benefits:'); ?></h3>
                        <div class="benefit-list">
                            <div class="benefit-item">
                                <span class="benefit-metric"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_1_metric', true) ?: '60%'); ?></span>
                                <span class="benefit-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_1_label', true) ?: 'Time savings on marketing tasks'); ?></span>
                            </div>
                            <div class="benefit-item">
                                <span class="benefit-metric"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_2_metric', true) ?: '300%'); ?></span>
                                <span class="benefit-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_2_label', true) ?: 'Increase in qualified leads'); ?></span>
                            </div>
                            <div class="benefit-item">
                                <span class="benefit-metric"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_3_metric', true) ?: '25%'); ?></span>
                                <span class="benefit-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_3_label', true) ?: 'Improvement in sales velocity'); ?></span>
                            </div>
                            <div class="benefit-item">
                                <span class="benefit-metric"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_4_metric', true) ?: '40%'); ?></span>
                                <span class="benefit-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_benefit_4_label', true) ?: 'Reduction in customer acquisition cost'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="roi-cta">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_cta_title', true) ?: 'Calculate Your ROI'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_cta_description', true) ?: 'See how much time and money marketing automation could save your business with our free ROI calculator.'); ?></p>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_roi_cta_button_url', true) ?: home_url('/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_roi_cta_button_text', true) ?: 'Get ROI Analysis'); ?></a>
                    </div>
                </div>
            </div>
        </section>        <!-- Client Testimonial -->
        <section class="client-testimonial">
            <div class="section-content">
                <div class="testimonial-content">
                    <div class="quote-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 21C3 17.4 5.4 17.4 5.4 17.4H9V21H3Z" stroke="currentColor" stroke-width="2"/>
                            <path d="M15 21C15 17.4 17.4 17.4 17.4 17.4H21V21H15Z" stroke="currentColor" stroke-width="2"/>
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
        <section class="cta-section">
            <div class="section-content">
                <div class="cta-content">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_cta_title', true) ?: 'Ready to Automate Your Marketing?'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_cta_description', true) ?: 'Let\'s create a custom automation strategy that saves you time while improving your marketing results.'); ?></p>                    <div class="cta-buttons">
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_cta_primary_button_url', true) ?: home_url('/contact')); ?>" class="btn-white"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_cta_primary_button_text', true) ?: 'Get Free Automation Audit'); ?></a>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'ma_cta_secondary_button_url', true) ?: home_url('/services')); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), 'ma_cta_secondary_button_text', true) ?: 'View All Services'); ?></a>
                    </div>
                    <div class="cta-features">
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
