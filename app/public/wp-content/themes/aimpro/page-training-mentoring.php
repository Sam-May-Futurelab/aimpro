<?php
/**
 * Template Name: Training & Mentoring Page
 * Description: Training programs and mentoring services
 */

get_header(); ?>

<!-- Inline critical CSS to ensure proper rendering -->
<style>
/* Critical CSS for path steps - this will override any conflicting styles */
.path-steps {
    margin: 0 0 1.5rem 0 !important;
    padding: 0 !important;
    display: block !important;
    width: 100% !important;
    text-align: left !important;
}
.step {
    margin: 0 0 0.75rem 0 !important;
    padding: 0 !important;
    display: flex !important;
    flex-direction: row !important;
    align-items: flex-start !important;
    justify-content: flex-start !important;
    width: 100% !important;
    text-align: left !important;
    position: relative !important;
}
.step-number {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 24px !important;
    height: 24px !important;
    min-width: 24px !important;
    min-height: 24px !important;
    margin: 0 0.75rem 0 0 !important;
    padding: 0 !important;
    background-color: #f15a25 !important;
    color: white !important;
    border-radius: 50% !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    position: relative !important;
    top: 0 !important;
    left: 0 !important;
    text-align: center !important;
    flex-shrink: 0 !important;
}
.step-title {
    display: block !important;
    margin: 0 !important;
    padding: 0 !important;
    width: auto !important;
    flex: 1 !important;
    color: #5a6a7e !important;
    font-size: 15px !important;
    font-weight: 400 !important;
    line-height: 1.5 !important;
    text-align: left !important;
    position: relative !important;
    top: 3px !important;
}
/* Hide mentor images completely */
.mentor-image {
    display: none !important;
}
</style>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Training & Mentoring</h1>
                <p class="page-subtitle">Accelerate your digital marketing expertise with personalized guidance</p>
            </div>
        </section>

        <!-- Training Introduction -->
        <section class="training-intro">
            <div class="section-content">
                <div class="intro-content">
                    <h2>Invest in Your Digital Marketing Future</h2>
                    <p>Whether you're looking to upskill your team, advance your career, or master specific digital marketing disciplines, our training and mentoring programs provide the personalized guidance you need to achieve your goals faster.</p>
                </div>
                <div class="training-benefits">
                    <div class="benefit-item">
                        <div class="benefit-icon">🎯</div>
                        <h3>Personalized Approach</h3>
                        <p>Tailored programs based on your current skills and specific goals</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">⚡</div>
                        <h3>Accelerated Learning</h3>
                        <p>Learn from industry experts with real-world experience</p>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">📈</div>
                        <h3>Measurable Results</h3>
                        <p>Track your progress with actionable assignments and projects</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Training Programs -->
        <section class="training-programs">
            <div class="section-content">
                <h2>Training Programs</h2>
                <div class="programs-grid">
                    
                    <!-- Individual Training -->
                    <div class="program-card featured">
                        <div class="program-badge">Most Popular</div>
                        <div class="program-header">
                            <h3>Individual Mentoring</h3>
                            <div class="program-price">
                                <span class="price">£149</span>
                                <span class="period">per session</span>
                            </div>
                        </div>
                        <div class="program-content">
                            <p class="program-description">One-on-one mentoring sessions with senior digital marketing experts tailored to your specific needs and career goals.</p>
                            
                            <ul class="program-features">
                                <li>1-hour intensive sessions</li>
                                <li>Personalized learning plan</li>
                                <li>Homework assignments</li>
                                <li>Progress tracking</li>
                                <li>Email support between sessions</li>
                                <li>Industry certification guidance</li>
                            </ul>

                            <div class="program-topics">
                                <h4>Choose Your Focus Area:</h4>
                                <div class="topics-grid">
                                    <span class="topic">SEO Strategy</span>
                                    <span class="topic">PPC Management</span>
                                    <span class="topic">Content Marketing</span>
                                    <span class="topic">Social Media</span>
                                    <span class="topic">Analytics</span>
                                    <span class="topic">Strategy</span>
                                </div>
                            </div>

                            <a href="#" class="program-cta">Book Session</a>
                        </div>
                    </div>

                    <!-- Team Training -->
                    <div class="program-card">
                        <div class="program-header">
                            <h3>Team Training Workshops</h3>
                            <div class="program-price">
                                <span class="price">£899</span>
                                <span class="period">per workshop</span>
                            </div>
                        </div>
                        <div class="program-content">
                            <p class="program-description">Comprehensive team training workshops designed to upskill your entire marketing department with consistent, high-quality education.</p>
                            
                            <ul class="program-features">
                                <li>Half-day or full-day workshops</li>
                                <li>Up to 12 team members</li>
                                <li>Interactive exercises</li>
                                <li>Custom curriculum</li>
                                <li>Workshop materials included</li>
                                <li>30-day follow-up support</li>
                            </ul>

                            <div class="program-topics">
                                <h4>Popular Workshop Topics:</h4>
                                <div class="topics-grid">
                                    <span class="topic">Digital Strategy</span>
                                    <span class="topic">SEO Fundamentals</span>
                                    <span class="topic">PPC Best Practices</span>
                                    <span class="topic">Content Planning</span>
                                    <span class="topic">Analytics Setup</span>
                                    <span class="topic">Campaign Management</span>
                                </div>
                            </div>

                            <a href="#" class="program-cta">Request Quote</a>
                        </div>
                    </div>

                    <!-- Certification Program -->
                    <div class="program-card">
                        <div class="program-header">
                            <h3>Certification Program</h3>
                            <div class="program-price">
                                <span class="price">£1,299</span>
                                <span class="period">3-month program</span>
                            </div>
                        </div>
                        <div class="program-content">
                            <p class="program-description">Comprehensive 3-month certification program covering all aspects of digital marketing with hands-on projects and industry recognition.</p>
                            
                            <ul class="program-features">
                                <li>12 structured modules</li>
                                <li>Weekly group sessions</li>
                                <li>Real-world projects</li>
                                <li>Industry certification</li>
                                <li>Career guidance</li>
                                <li>Lifetime community access</li>
                            </ul>

                            <div class="program-topics">
                                <h4>Curriculum Includes:</h4>
                                <div class="topics-grid">
                                    <span class="topic">Marketing Strategy</span>
                                    <span class="topic">SEO & SEM</span>
                                    <span class="topic">Content & Social</span>
                                    <span class="topic">Email Marketing</span>
                                    <span class="topic">Analytics</span>
                                    <span class="topic">Campaign Management</span>
                                </div>
                            </div>

                            <a href="#" class="program-cta">Apply Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Mentoring Success Stories -->
        <section class="mentoring-success">
            <div class="section-content">
                <h2>Success Stories</h2>
                <div class="success-grid">
                    
                    <div class="success-story">
                        <div class="story-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentoring/success-emma.jpg" alt="Emma Thompson Success Story" />
                        </div>
                        <div class="story-content">
                            <blockquote>
                                "The individual mentoring program helped me transition from traditional marketing to digital. Within 6 months, I landed a senior digital marketing role with a 40% salary increase."
                            </blockquote>
                            <div class="story-author">
                                <h4>Emma Thompson</h4>
                                <span>Senior Digital Marketing Manager</span>
                                <div class="story-results">
                                    <span class="result">40% salary increase</span>
                                    <span class="result">Senior role in 6 months</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="success-story">
                        <div class="story-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentoring/success-david.jpg" alt="David Chen Success Story" />
                        </div>
                        <div class="story-content">
                            <blockquote>
                                "Our team workshop on PPC management was transformative. We immediately implemented the strategies and saw a 150% improvement in our campaign performance."
                            </blockquote>
                            <div class="story-author">
                                <h4>David Chen</h4>
                                <span>Marketing Director, TechStart</span>
                                <div class="story-results">
                                    <span class="result">150% performance boost</span>
                                    <span class="result">Team alignment achieved</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="success-story">
                        <div class="story-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mentoring/success-lisa.jpg" alt="Lisa Rodriguez Success Story" />
                        </div>
                        <div class="story-content">
                            <blockquote>
                                "The certification program gave me the confidence and skills to start my own digital marketing consultancy. I'm now working with 8 clients and growing."
                            </blockquote>
                            <div class="story-author">
                                <h4>Lisa Rodriguez</h4>
                                <span>Founder, Rodriguez Marketing</span>
                                <div class="story-results">
                                    <span class="result">Started own business</span>
                                    <span class="result">8 active clients</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Learning Paths -->
        <section class="learning-paths">
            <div class="section-content">
                <h2>Learning Paths</h2>
                <p class="section-subtitle">Structured progression routes based on your career goals</p>
                
                <div class="paths-grid">
                    
                    <div class="learning-path">
                        <div class="path-header">
                            <h3>Beginner to Professional</h3>
                            <span class="path-duration">3-6 months</span>
                        </div>
                        <div class="path-content">
                            <p>Perfect for marketing newcomers or those switching from traditional marketing to digital.</p>                            <div class="path-steps">
                                <div class="step">
                                    <div class="step-number">1</div>
                                    <div class="step-title">Digital Marketing Fundamentals</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">2</div>
                                    <div class="step-title">SEO & Content Basics</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">3</div>
                                    <div class="step-title">PPC Campaign Management</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">4</div>
                                    <div class="step-title">Analytics & Reporting</div>
                                </div>
                            </div>
                            <a href="#" class="path-cta">Start Learning Path</a>
                        </div>
                    </div>

                    <div class="learning-path">
                        <div class="path-header">
                            <h3>Specialist to Expert</h3>
                            <span class="path-duration">2-4 months</span>
                        </div>
                        <div class="path-content">
                            <p>For experienced marketers looking to master advanced strategies and become industry experts.</p>                            <div class="path-steps">
                                <div class="step">
                                    <div class="step-number">1</div>
                                    <div class="step-title">Advanced Strategy Development</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">2</div>
                                    <div class="step-title">Marketing Automation</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">3</div>
                                    <div class="step-title">Advanced Analytics</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">4</div>
                                    <div class="step-title">Team Leadership</div>
                                </div>
                            </div>
                            <a href="#" class="path-cta">Start Learning Path</a>
                        </div>
                    </div>

                    <div class="learning-path">
                        <div class="path-header">
                            <h3>Entrepreneur Track</h3>
                            <span class="path-duration">4-8 months</span>
                        </div>
                        <div class="path-content">
                            <p>Comprehensive training for business owners and entrepreneurs to master their own marketing.</p>                            <div class="path-steps">
                                <div class="step">
                                    <div class="step-number">1</div>
                                    <div class="step-title">Business Marketing Strategy</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">2</div>
                                    <div class="step-title">Cost-Effective Tactics</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">3</div>
                                    <div class="step-title">Conversion Optimization</div>
                                </div>
                                <div class="step">
                                    <div class="step-number">4</div>
                                    <div class="step-title">Growth Scaling</div>
                                </div>
                            </div>
                            <a href="#" class="path-cta">Start Learning Path</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Mentoring Team -->
        <section class="mentoring-team">
            <div class="section-content">
                <h2>Meet Your Mentors</h2>
                <div class="mentors-grid">
                      <div class="mentor-card">
                        <div class="mentor-info">
                            <h3>John Smith</h3>
                            <h4>SEO & Content Strategy Expert</h4>
                            <p>15+ years in digital marketing with expertise in enterprise SEO and content strategy. Former head of SEO at major UK e-commerce companies.</p>                            <div class="mentor-specialties">
                                <div class="specialty">Technical SEO</div>
                                <div class="specialty">Content Strategy</div>
                                <div class="specialty">Enterprise SEO</div>
                            </div>
                            <div class="mentor-stats">
                                <span class="stat">50+ mentees</span>
                                <span class="stat">★★★★★ 4.9</span>
                            </div>
                        </div>
                    </div>                    <div class="mentor-card">
                        <div class="mentor-info">
                            <h3>Sarah Johnson</h3>
                            <h4>PPC & Paid Media Specialist</h4>
                            <p>Google Ads certified professional with 12+ years managing multi-million pound advertising budgets across various industries.</p>
                            <div class="mentor-specialties">
                                <span class="specialty">Google Ads</span>
                                <span class="specialty">Facebook Ads</span>
                                <span class="specialty">Campaign Optimization</span>
                            </div>
                            <div class="mentor-stats">
                                <span class="stat">75+ mentees</span>
                                <span class="stat">★★★★★ 4.8</span>
                            </div>
                        </div>
                    </div>                    <div class="mentor-card">
                        <div class="mentor-info">
                            <h3>Mike Chen</h3>
                            <h4>Analytics & Data Strategy Expert</h4>
                            <p>Former Google Analytics team member with deep expertise in data analysis, conversion tracking, and marketing attribution.</p>
                            <div class="mentor-specialties">
                                <span class="specialty">Google Analytics</span>
                                <span class="specialty">Data Analysis</span>
                                <span class="specialty">Attribution Modeling</span>
                            </div>
                            <div class="mentor-stats">
                                <span class="stat">40+ mentees</span>
                                <span class="stat">★★★★★ 4.9</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="training-faq">
            <div class="section-content">
                <h2>Frequently Asked Questions</h2>
                <div class="faq-grid">
                    
                    <div class="faq-item">
                        <h3>How do I choose the right program?</h3>
                        <p>We offer a free 15-minute consultation to understand your goals and recommend the best program for your needs. Contact us to schedule your consultation.</p>
                    </div>

                    <div class="faq-item">
                        <h3>What if I need to reschedule sessions?</h3>
                        <p>We understand life happens. You can reschedule sessions up to 24 hours in advance without any penalties. Emergency rescheduling is handled case-by-case.</p>
                    </div>

                    <div class="faq-item">
                        <h3>Do you offer refunds?</h3>
                        <p>We offer a satisfaction guarantee. If you're not completely satisfied with your first session, we'll refund your money or provide a replacement mentor.</p>
                    </div>

                    <div class="faq-item">
                        <h3>Can I get corporate training for my team?</h3>
                        <p>Absolutely! We offer customized corporate training programs for teams of any size. Contact us for a tailored proposal and volume discounts.</p>
                    </div>

                    <div class="faq-item">
                        <h3>Are sessions recorded?</h3>
                        <p>Individual mentoring sessions can be recorded upon request. Workshop sessions include access to presentation materials and key recordings.</p>
                    </div>

                    <div class="faq-item">
                        <h3>What certification do I receive?</h3>
                        <p>Our certification program provides an industry-recognized certificate upon completion, plus assistance with pursuing Google, Facebook, and other platform certifications.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="training-cta">
            <div class="section-content">
                <h2>Ready to Accelerate Your Marketing Career?</h2>
                <p>Book a free consultation to discuss your goals and find the perfect training program for you.</p>
                <div class="cta-buttons">
                    <a href="#" class="btn btn-primary">Book Free Consultation</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-secondary">Contact Us</a>
                </div>
                <p class="cta-note">Free 15-minute consultation • No obligation • Personalized recommendations</p>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
