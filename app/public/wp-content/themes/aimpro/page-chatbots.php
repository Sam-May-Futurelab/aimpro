<?php
/**
 * Template Name: Chatbots
 * 
 * Chatbot development and automation services page
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="service-page chatbots-page">
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
                <span class="current">Chatbots</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content">                <h1>AI-Powered Chatbot Development</h1>
                <p class="hero-subtitle">Engage website visitors 24/7, qualify leads automatically, and provide instant customer support with intelligent chatbots that understand context and drive conversions.</p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number">380%</div>
                        <div class="stat-label">Lead Qualification Increase</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Instant Response Time</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">65%</div>
                        <div class="stat-label">Support Cost Reduction</div>
                    </div>
                </div>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined">Build Your Chatbot</a>
                    <a href="#packages" class="btn-outline streamlined">View Packages</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <h2>Intelligent Chatbot Solutions</h2>
                <p>Transform your website into an interactive experience that never sleeps. Our AI-powered chatbots handle customer inquiries, qualify leads, book appointments, and guide visitors toward conversion - all while providing personalized, human-like interactions.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>AI-Powered Conversations</h3>
                    <p>Natural language processing that understands context and provides intelligent, relevant responses to user inquiries.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h3>Lead Qualification</h3>
                    <p>Automatically qualify prospects with smart questioning flows that identify high-value leads for your sales team.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Appointment Booking</h3>
                    <p>Seamless calendar integration that allows visitors to book consultations and appointments directly through chat.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Customer Support Automation</h3>
                    <p>Handle common customer questions and support requests instantly, escalating complex issues to human agents.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-commerce Integration</h3>
                    <p>Product recommendations, order tracking, and purchase assistance to increase sales and improve customer experience.</p>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Analytics & Insights</h3>
                    <p>Detailed conversation analytics and user behavior insights to optimize chatbot performance and identify opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text">
                    <h2>Case Study: Legal Firm Lead Generation</h2>
                    <p class="case-study-intro">How we helped a law firm increase qualified leads by 380% and reduce response time from hours to seconds with an intelligent chatbot that pre-qualifies legal consultations.</p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p>A growing legal firm was losing potential clients due to slow response times and inefficient lead qualification. Their website generated inquiries but many visitors left without engaging, and the intake process took days to schedule consultations.</p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Chatbot Solution</h3>
                        <ul>
                            <li>Developed AI chatbot with legal expertise and natural conversation flow</li>
                            <li>Created intelligent qualification process for different legal practice areas</li>
                            <li>Integrated with calendar system for instant consultation booking</li>
                            <li>Built knowledge base for common legal questions and FAQ responses</li>
                            <li>Implemented lead scoring and CRM integration for sales team follow-up</li>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <div class="result-item">
                            <div class="result-number">380%</div>
                            <div class="result-label">Qualified Lead Increase</div>
                        </div>
                        <div class="result-item">
                            <div class="result-number">95%</div>
                            <div class="result-label">Website Engagement Rate</div>                        </div>
                        <div class="result-item">
                            <div class="result-number">24/7</div>
                            <div class="result-label">Instant Response Time</div>
                        </div>
                        <div class="result-item">
                            <div class="result-number">£425K</div>
                            <div class="result-label">Additional Annual Revenue</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Chatbot Types Section -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header">
                <h2>Types of Chatbots We Build</h2>
                <p>Custom chatbot solutions designed for specific business needs and customer engagement goals.</p>
            </div>
            <div class="services-grid">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Lead Generation Bots</h3>
                    <p>Engage visitors, qualify prospects, and capture contact information through conversational lead forms.</p>
                    <div class="service-metric">
                        <span>Average: 45% lead capture rate</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-life-ring"></i>
                    </div>
                    <h3>Customer Support Bots</h3>
                    <p>Provide instant answers to common questions and escalate complex issues to human agents when needed.</p>
                    <div class="service-metric">
                        <span>Average: 70% issue resolution</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-shopping-bag"></i>
                    </div>
                    <h3>E-commerce Bots</h3>
                    <p>Recommend products, assist with purchases, track orders, and handle returns or exchanges.</p>
                    <div class="service-metric">
                        <span>Average: 25% sales increase</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <h3>Appointment Booking Bots</h3>
                    <p>Allow visitors to check availability and book appointments or consultations directly through chat.</p>
                    <div class="service-metric">
                        <span>Average: 60% booking completion</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Educational Bots</h3>
                    <p>Guide users through learning paths, answer course questions, and provide educational resources.</p>
                    <div class="service-metric">
                        <span>Average: 85% engagement rate</span>
                    </div>
                </div>
                
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-poll"></i>
                    </div>
                    <h3>Survey & Feedback Bots</h3>
                    <p>Collect customer feedback, conduct surveys, and gather insights through interactive conversations.</p>
                    <div class="service-metric">
                        <span>Average: 3x higher completion</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2>Our Chatbot Development Process</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Strategy & Planning</h3>
                        <p>Analyze your customer interactions and define chatbot objectives, conversation flows, and success metrics.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Conversation Design</h3>
                        <p>Create natural conversation flows, response scripts, and decision trees that guide users toward desired outcomes.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>AI Training & Development</h3>
                        <p>Build and train the chatbot with industry-specific knowledge and natural language understanding capabilities.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Integration & Testing</h3>
                        <p>Integrate with your website, CRM, and other systems, then thoroughly test all conversation paths and scenarios.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Launch & Optimization</h3>
                        <p>Deploy the chatbot with monitoring and continuous improvement based on user interactions and feedback.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Features Section -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header">
                <h2>Advanced Chatbot Features</h2>
                <p>Cutting-edge AI capabilities that make our chatbots intelligent, responsive, and highly effective.</p>
            </div>
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Natural Language Processing</h3>
                    <p>Understanding context, intent, and nuance in human conversation for more natural interactions.</p>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-user-tag"></i>
                    </div>
                    <h3>Personalization</h3>
                    <p>Tailored responses based on user behavior, location, and previous interactions for relevant experiences.</p>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Multi-language Support</h3>
                    <p>Communicate with global audiences in their preferred language with automatic translation capabilities.</p>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Multi-platform Integration</h3>
                    <p>Deploy across website, Facebook Messenger, WhatsApp, and other messaging platforms seamlessly.</p>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-hand-paper"></i>
                    </div>
                    <h3>Human Handoff</h3>
                    <p>Smart escalation to human agents when conversations require personal attention or complex problem-solving.</p>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Advanced Analytics</h3>
                    <p>Detailed insights into conversation patterns, user satisfaction, and optimization opportunities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Platforms Section -->
    <section class="platforms-section">
        <div class="container">
            <h2>Chatbot Platforms We Use</h2>
            <div class="platforms-grid">
                <div class="platform-item">
                    <div class="platform-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Intercom</h3>
                    <p>Advanced conversational AI platform with sophisticated automation and customer support integration.</p>
                </div>
                
                <div class="platform-item">
                    <div class="platform-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Chatfuel</h3>
                    <p>User-friendly bot builder with powerful AI capabilities and multi-platform deployment options.</p>
                </div>
                
                <div class="platform-item">
                    <div class="platform-icon">
                        <i class="fab fa-microsoft"></i>
                    </div>
                    <h3>Microsoft Bot Framework</h3>
                    <p>Enterprise-grade development platform for sophisticated, custom chatbot solutions.</p>
                </div>
                
                <div class="platform-item">
                    <div class="platform-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3>ManyChat</h3>
                    <p>Marketing-focused chatbot platform with excellent social media and automation integrations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="industries-section">
        <div class="container">
            <h2>Industries We Serve</h2>
            <div class="industries-grid">
                <div class="industry-item">
                    <h3>E-commerce & Retail</h3>
                    <p>Product recommendations, order support, and sales assistance chatbots.</p>
                </div>
                <div class="industry-item">
                    <h3>Healthcare</h3>
                    <p>Appointment scheduling, symptom assessment, and patient support automation.</p>
                </div>
                <div class="industry-item">
                    <h3>Professional Services</h3>
                    <p>Lead qualification, consultation booking, and client support chatbots.</p>
                </div>
                <div class="industry-item">
                    <h3>Real Estate</h3>
                    <p>Property search assistance, viewing appointments, and buyer qualification.</p>
                </div>
                <div class="industry-item">
                    <h3>Education</h3>
                    <p>Student support, course information, and enrollment assistance chatbots.</p>
                </div>
                <div class="industry-item">
                    <h3>Financial Services</h3>
                    <p>Account assistance, loan applications, and financial advice automation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content">
                <blockquote>
                    "Our chatbot has revolutionized our lead generation. We're capturing 380% more qualified leads and providing instant responses 24/7. It's like having a team of salespeople that never sleep."
                </blockquote>
                <cite>
                    <strong>David Thompson</strong><br>
                    Senior Partner, Thompson Legal Group
                </cite>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Engage Visitors 24/7?</h2>
                <p>Stop losing leads to slow response times and missed opportunities. Our intelligent chatbots provide instant engagement and qualification, turning your website into a lead-generating machine that works around the clock.</p>                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Build Your Chatbot</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
