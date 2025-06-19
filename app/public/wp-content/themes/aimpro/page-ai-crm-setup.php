<?php
/**
 * Template Name: AI CRM Setup
 * 
 * AI CRM Setup and Implementation services page
 *
 * @package Aimpro
 */

get_header(); ?>

<style>
.tools-section .tool-icon {
    display: flex;
    justify-content: centre;
    align-items: centre;
    margin: 0 auto 15px;
}
.tools-section .tool-icon i {
    font-size: 2.5rem;
}
.tools-section .tools-category {
    margin-top: 50px;
    margin-bottom: 30px;
    padding: 20px 0;
    position: relative;
    font-size: 1.8rem;
}
.tools-section .tools-grid {
    margin-bottom: 50px;
}
.tools-section .section-header {
    margin-bottom: 50px;
    padding-top: 20px;
}

/* Rounded corners for case study sections */
.case-study-challenge, .case-study-solution {
    border-radius: 12px;
    overflow: hidden;
}
</style>

<main id="primary" class="service-page ai-crm-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/marketing-automation'); ?>">Marketing Automation</a>
                <span class="separator">›</span>
                <span class="current">AI CRM Setup</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_title', true) ?: 'AI-Powered CRM Setup & Implementation'); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_subtitle', true) ?: 'Transform your customer relationship management with AI-driven CRM systems that automate lead scoring, predict customer behaviour, and optimise your entire sales funnel for maximum conversion.'); ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_stat_1_number', true) ?: '340%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_stat_1_label', true) ?: 'Lead Conversion Increase'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_stat_2_number', true) ?: '85%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_stat_2_label', true) ?: 'Faster Lead Response'); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_stat_3_number', true) ?: '60%'); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_stat_3_label', true) ?: 'Sales Cycle Reduction'); ?></div>
                    </div>
                </div>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_primary_btn', true) ?: 'Start CRM Setup'); ?></a>
                    <a href="#packages" class="btn-outline streamlined"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_hero_secondary_btn', true) ?: 'View Packages'); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_overview_title', true) ?: 'Intelligent CRM Implementation'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_overview_description', true) ?: 'Modern businesses need more than basic contact management. Our AI-powered CRM implementations leverage machine learning, predictive analytics, and intelligent automation to transform how you manage customer relationships and drive revenue growth.'); ?></p>
            </div>
            
            <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_1_title', true) ?: 'AI Lead Scoring'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_1_desc', true) ?: 'Automatically score and prioritise leads based on behaviour, demographics, and engagement patterns using machine learning algorithms.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_2_title', true) ?: 'Predictive Analytics'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_2_desc', true) ?: 'Forecast customer lifetime value, churn probability, and optimal engagement timing with advanced AI models.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_3_title', true) ?: 'Workflow Automation'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_3_desc', true) ?: 'Create intelligent workflows that adapt based on customer behaviour and automatically trigger the right actions at the right time.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_4_title', true) ?: 'Sales Pipeline optimisation'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_4_desc', true) ?: 'AI-driven pipeline management that identifies bottlenecks and suggests optimal next actions for each prospect.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_5_title', true) ?: 'Intelligent Customer Insights'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_5_desc', true) ?: 'Deep customer profiling using AI to understand preferences, behaviour patterns, and optimal communication strategies.'); ?></p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_6_title', true) ?: 'Omnichannel Integration'); ?></h3>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_service_6_desc', true) ?: 'Unified customer view across all touchpoints with AI-powered attribution and engagement tracking.'); ?></p>                </div>            </div>
            
            <!-- CTA after services overview -->
            <div class="text-centre animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Your AI CRM Assessment</a>
            </div>
        </div>
    </section><!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content animate-on-scroll animate-fade-up">
                <div class="case-study-text">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_case_title', true) ?: 'Case Study: SaaS Company Transformation'); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_case_intro', true) ?: 'How we helped a growing SaaS company increase lead conversion by 340% and reduce sales cycle time by 60% through intelligent CRM implementation.'); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_case_challenge', true) ?: 'A rapidly growing SaaS company was struggling with manual lead management, inconsistent follow-up, and inability to identify high-value prospects. Their sales team was spending 70% of time on administrative tasks instead of selling, and lead response times averaged 4+ hours.'); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our AI CRM Solution</h3>
                        <ul>
                            <?php 
                            $solution_points = get_post_meta(get_the_ID(), 'ai_case_solution', true) ?: "Implemented HubSpot CRM with custom AI lead scoring model\nBuilt predictive analytics dashboard for customer lifetime value\nCreated intelligent workflow automation for lead nurturing\nIntegrated omnichannel communication tracking\nDeployed AI chatbot for initial lead qualification";
                            $points = explode("\n", $solution_points);
                            foreach ($points as $point) {
                                if (trim($point)) {
                                    echo '<li>' . esc_html(trim($point)) . '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results animate-on-scroll animate-fade-up animate-delay-200">
                    <h3>The Results</h3>
                    <div class="results-grid animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_result_1_number', true) ?: '340%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_result_1_label', true) ?: 'Lead Conversion Increase'); ?></div>
                        </div>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_result_2_number', true) ?: '85%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_result_2_label', true) ?: 'Faster Lead Response'); ?></div>
                        </div>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_result_3_number', true) ?: '60%'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_result_3_label', true) ?: 'Sales Cycle Reduction'); ?></div>
                        </div>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_result_4_number', true) ?: '£2.1M'); ?></div>
                            <div class="result-label"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_result_4_label', true) ?: 'Additional Annual Revenue'); ?></div>                        </div>
                    </div>
                </div>
            </div>
            
            <!-- CTA after case study results -->
            <div class="text-centre animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <p style="font-size: 1.1rem; colour: #666; margin-bottom: 1.5rem;">Ready to transform your CRM with AI?</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Start Your AI CRM Transformation</a>
            </div>
        </div>
    </section><!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_process_title', true) ?: 'Our AI CRM Implementation Process'); ?></h2>
            <div class="process-steps animate-on-scroll animate-stagger animate-fade-up">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_1_title', true) ?: 'Discovery & Analysis'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_1_desc', true) ?: 'Comprehensive audit of current CRM processes, data quality assessment, and identification of AI automation opportunities.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_2_title', true) ?: 'Platform Selection & Design'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_2_desc', true) ?: 'Choose optimal CRM platform and design AI-powered workflows tailored to your sales process and customer journey.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_3_title', true) ?: 'Data Migration & Cleansing'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_3_desc', true) ?: 'Migrate existing data with AI-powered cleansing and enrichment to ensure high-quality, actionable customer information.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_4_title', true) ?: 'AI Configuration & Training'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_4_desc', true) ?: 'Configure machine learning models, set up predictive analytics, and train AI systems on your specific business patterns.'); ?></p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_5_title', true) ?: 'Testing & optimisation'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_step_5_desc', true) ?: 'Comprehensive testing of AI workflows, user training, and continuous optimisation based on performance data.'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- AI Features Section -->
    <section class="tools-section">
        <div class="container" style="text-align: centre;">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2 style="margin-bottom: 20px;">AI-Powered CRM Features</h2>
                <p style="max-width: 800px; margin: 0 auto 30px;">Transform your customer relationship management with intelligent features that automate processes and drive better results.</p>
            </div>
            
            <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up" style="justify-content: centre;">
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Smart Lead Scoring</h3>
                    <p>AI algorithms analyse 50+ data points to score leads and predict conversion probability in real-time.</p>
                </div>
                
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Predictive Forecasting</h3>
                    <p>Machine learning models predict sales outcomes, revenue forecasts, and optimal deal closure timing.</p>
                </div>
                
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>behavioural Targeting</h3>
                    <p>AI tracks customer behaviour patterns to trigger personalised engagement at optimal moments.</p>
                </div>
                
                <div class="tool-item" style="text-align: centre;">
                    <div class="tool-icon" style="text-align: centre; display: flex; justify-content: centre;">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Intelligent Reporting</h3>
                    <p>AI-generated insights and recommendations based on performance data and market trends.</p>
                </div>
            </div>
        </div>
    </section><!-- Packages Section -->
    <section id="packages" class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>AI CRM Setup Packages</h2>
                <p>Transform your customer relationship management with data-driven optimisation strategies.</p>
            </div>
            
            <div class="pricing-grid animate-on-scroll animate-stagger animate-scale-up">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Essential AI CRM</h3>
                        <div class="price">£2,497</div>
                        <p>Basic AI implementation</p>
                    </div>
                    <ul class="pricing-features">
                        <li>CRM platform setup (HubSpot/Salesforce)</li>
                        <li>Basic AI lead scoring</li>
                        <li>Contact data migration</li>
                        <li>Essential workflow automation</li>
                        <li>Team training (2 sessions)</li>
                        <li>30-day support</li>
                        <li>Performance reporting</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
                  <div class="pricing-card featured">
                    <div class="pricing-header">
                        <h3>Advanced AI CRM</h3>
                        <div class="price">£4,997</div>
                        <p>Complete AI implementation</p>
                    </div>
                    <ul class="pricing-features">
                        <li>Full CRM implementation</li>
                        <li>Advanced AI lead scoring & prediction</li>
                        <li>Omnichannel integration</li>
                        <li>Intelligent workflow automation</li>
                        <li>Custom dashboards & reporting</li>
                        <li>Comprehensive team training</li>
                        <li>90-day optimisation support</li>
                    </ul>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>
                
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Enterprise AI CRM</h3>
                        <div class="price">£9,997</div>
                        <p>Full enterprise transformation</p>
                    </div>
                    <ul class="pricing-features">
                        <li>Enterprise CRM architecture</li>
                        <li>Custom AI model development</li>
                        <li>Advanced predictive analytics</li>
                        <li>Multi-system integrations</li>
                        <li>White-glove implementation</li>
                        <li>Dedicated project manager</li>
                        <li>6-month ongoing optimisation</li>
                    </ul>
                    <a href="#contact" class="btn-outline">Get Started</a>
                </div>
            </div>
        </div>
    </section>    <!-- CRM Platforms Section -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Supported CRM Platforms</h2>
                <p>We work with leading CRM platforms to implement AI-powered solutions that transform your customer management.</p>
            </div>
            <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fab fa-hubspot"></i>
                    </div>
                    <h3>HubSpot CRM</h3>
                    <p>Complete inbound marketing platform with powerful AI automation and lead nurturing capabilities.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fab fa-salesforce"></i>
                    </div>
                    <h3>Salesforce</h3>
                    <p>Enterprise-grade CRM with Einstein AI for advanced predictive analytics and automation.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3>Pipedrive</h3>
                    <p>Sales-focused CRM with AI-powered sales assistant and intelligent deal recommendations.</p>
                </div>
                  <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3>ActiveCampaign</h3>
                    <p>Customer experience automation platform combining CRM, email marketing, and AI predictions.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Zoho CRM</h3>
                    <p>Comprehensive business suite with Zia AI assistant for intelligent sales forecasting and customer insights.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fab fa-microsoft"></i>
                    </div>
                    <h3>Microsoft Dynamics 365</h3>
                    <p>Enterprise CRM platform with built-in AI capabilities for sales acceleration and customer service automation.</p>
                </div>
            </div>
        </div>
    </section><!-- Industries Section -->
    <section class="industries-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Industries We Serve</h2>
            <div class="industries-grid animate-on-scroll animate-stagger animate-scale-up">
                <div class="industry-item">
                    <h3>SaaS & Technology</h3>
                    <p>optimise trial-to-paid conversions and reduce churn with predictive customer analytics.</p>
                </div>
                <div class="industry-item">
                    <h3>Professional Services</h3>
                    <p>Streamline client onboarding and automate proposal generation with AI workflows.</p>
                </div>
                <div class="industry-item">
                    <h3>E-commerce</h3>
                    <p>personalise customer journeys and predict purchase behaviour for increased sales.</p>
                </div>
                <div class="industry-item">
                    <h3>Real Estate</h3>
                    <p>Automate lead qualification and nurture prospects through complex sales cycles.</p>
                </div>
                <div class="industry-item">
                    <h3>Manufacturing</h3>
                    <p>Manage complex B2B relationships and optimise quote-to-cash processes.</p>
                </div>
                <div class="industry-item">
                    <h3>Healthcare</h3>
                    <p>Improve patient engagement and streamline appointment scheduling with AI automation.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content animate-on-scroll animate-fade-up">
                <blockquote>
                    "<?php echo esc_html(get_post_meta(get_the_ID(), 'ai_testimonial_quote', true) ?: 'The AI CRM implementation by Aimpro completely transformed our sales process. We\'re now converting 340% more leads and our sales cycle is 60% shorter. The predictive analytics help us focus on the right prospects at the right time.'); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_testimonial_author', true) ?: 'James Richardson'); ?></strong><br>
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'ai_testimonial_position', true) ?: 'VP Sales, TechFlow Solutions'); ?>
                </cite>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-fade-up"><h2><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_cta_title', true) ?: 'Ready to Transform Your CRM with AI?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_cta_description', true) ?: 'Stop losing leads to poor follow-up and manual processes. Our AI-powered CRM implementation will revolutionize how you manage customers and drive predictable revenue growth.'); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-outline"><?php echo esc_html(get_post_meta(get_the_ID(), 'ai_cta_button', true) ?: 'Start Your AI CRM'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
