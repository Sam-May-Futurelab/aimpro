<?php
/**
 * Template Name: Team Page
 * Description: Team members page
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Our Team</h1>
                <p class="page-subtitle">Meet the experts behind your digital success</p>
            </div>
        </section>

        <!-- Team Introduction -->
        <section class="team-intro">
            <div class="section-content">
                <div class="intro-content">
                    <h2>The People Who Make It Happen</h2>
                    <p>Our diverse team of digital marketing specialists, strategists, and creative professionals work together to deliver exceptional results for our clients. Each team member brings unique expertise and passion to help your business thrive in the digital landscape.</p>
                </div>
            </div>
        </section>

        <!-- Leadership Team -->
        <section class="leadership-team">
            <div class="section-content">
                <h2>Leadership Team</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/ceo.jpg" alt="John Smith - CEO" />
                        </div>
                        <div class="member-info">
                            <h3>John Smith</h3>
                            <h4>Chief Executive Officer</h4>
                            <p>With over 15 years of experience in digital marketing, John leads Aimpro Digital's strategic vision and ensures we deliver exceptional value to our clients. His expertise spans SEO, PPC, and business development.</p>
                            <div class="member-specialties">
                                <span class="specialty">Strategic Planning</span>
                                <span class="specialty">Business Development</span>
                                <span class="specialty">Client Relations</span>
                            </div>
                            <div class="member-social">
                                <a href="#" aria-label="LinkedIn">LinkedIn</a>
                                <a href="#" aria-label="Twitter">Twitter</a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/cmo.jpg" alt="Sarah Johnson - CMO" />
                        </div>
                        <div class="member-info">
                            <h3>Sarah Johnson</h3>
                            <h4>Chief Marketing Officer</h4>
                            <p>Sarah brings innovative marketing strategies and deep industry expertise to our team. She oversees all marketing operations and ensures our campaigns deliver measurable results for clients across all industries.</p>
                            <div class="member-specialties">
                                <span class="specialty">Marketing Strategy</span>
                                <span class="specialty">Brand Development</span>
                                <span class="specialty">Campaign Management</span>
                            </div>
                            <div class="member-social">
                                <a href="#" aria-label="LinkedIn">LinkedIn</a>
                                <a href="#" aria-label="Twitter">Twitter</a>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/cto.jpg" alt="Mike Chen - CTO" />
                        </div>
                        <div class="member-info">
                            <h3>Mike Chen</h3>
                            <h4>Chief Technology Officer</h4>
                            <p>Mike oversees our technology stack and ensures we stay at the forefront of digital innovation. His technical expertise drives our platform development and automation solutions.</p>
                            <div class="member-specialties">
                                <span class="specialty">Technology Strategy</span>
                                <span class="specialty">Platform Development</span>
                                <span class="specialty">Marketing Automation</span>
                            </div>
                            <div class="member-social">
                                <a href="#" aria-label="LinkedIn">LinkedIn</a>
                                <a href="#" aria-label="GitHub">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Marketing Specialists -->
        <section class="marketing-team">
            <div class="section-content">
                <h2>Marketing Specialists</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/seo-lead.jpg" alt="Emily Rodriguez - SEO Lead" />
                        </div>
                        <div class="member-info">
                            <h3>Emily Rodriguez</h3>
                            <h4>SEO Team Lead</h4>
                            <p>Emily leads our SEO initiatives with 8+ years of experience in organic search optimization. She specializes in technical SEO, content strategy, and local search optimization.</p>
                            <div class="member-specialties">
                                <span class="specialty">Technical SEO</span>
                                <span class="specialty">Content Strategy</span>
                                <span class="specialty">Local SEO</span>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/ppc-lead.jpg" alt="Lisa Thompson - PPC Lead" />
                        </div>
                        <div class="member-info">
                            <h3>Lisa Thompson</h3>
                            <h4>PPC Team Lead</h4>
                            <p>Lisa manages our paid advertising campaigns across Google Ads, Facebook, and other platforms. She's a Google Ads certified professional with expertise in campaign optimization and conversion tracking.</p>
                            <div class="member-specialties">
                                <span class="specialty">Google Ads</span>
                                <span class="specialty">Facebook Ads</span>
                                <span class="specialty">Campaign Optimization</span>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/content-lead.jpg" alt="Maria Gonzalez - Content Lead" />
                        </div>
                        <div class="member-info">
                            <h3>Maria Gonzalez</h3>
                            <h4>Content Strategy Lead</h4>
                            <p>Maria develops comprehensive content strategies that engage audiences and drive conversions. She specializes in blog content, social media strategy, and content calendar development.</p>
                            <div class="member-specialties">
                                <span class="specialty">Content Strategy</span>
                                <span class="specialty">Blog Writing</span>
                                <span class="specialty">Social Media</span>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/ppc-specialist.jpg" alt="Alex Morgan - PPC Specialist" />
                        </div>
                        <div class="member-info">
                            <h3>Alex Morgan</h3>
                            <h4>PPC Specialist</h4>
                            <p>Alex specializes in e-commerce advertising and shopping campaigns. With expertise in feed optimization and dynamic remarketing, Alex helps clients maximize their return on ad spend.</p>
                            <div class="member-specialties">
                                <span class="specialty">E-commerce Ads</span>
                                <span class="specialty">Shopping Campaigns</span>
                                <span class="specialty">Dynamic Remarketing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technical Team -->
        <section class="technical-team">
            <div class="section-content">
                <h2>Technical & Creative Team</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/designer.jpg" alt="James Wilson - Creative Director" />
                        </div>
                        <div class="member-info">
                            <h3>James Wilson</h3>
                            <h4>Creative Director</h4>
                            <p>James leads our creative initiatives, designing compelling visuals for digital campaigns. His expertise in graphic design and user experience helps create engaging marketing materials.</p>
                            <div class="member-specialties">
                                <span class="specialty">Graphic Design</span>
                                <span class="specialty">UX/UI Design</span>
                                <span class="specialty">Brand Identity</span>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/developer.jpg" alt="Tom Anderson - Web Developer" />
                        </div>
                        <div class="member-info">
                            <h3>Tom Anderson</h3>
                            <h4>Senior Web Developer</h4>
                            <p>Tom handles our technical implementations, from website development to conversion optimization. His expertise ensures our marketing strategies are supported by robust technical foundations.</p>
                            <div class="member-specialties">
                                <span class="specialty">Web Development</span>
                                <span class="specialty">Conversion Optimization</span>
                                <span class="specialty">Technical Implementation</span>
                            </div>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/analytics-lead.jpg" alt="Jennifer Kim - Analytics Lead" />
                        </div>
                        <div class="member-info">
                            <h3>Jennifer Kim</h3>
                            <h4>Analytics Team Lead</h4>
                            <p>Jennifer transforms data into actionable insights. She specializes in Google Analytics, conversion tracking, and performance reporting to help clients understand their marketing ROI.</p>
                            <div class="member-specialties">
                                <span class="specialty">Google Analytics</span>
                                <span class="specialty">Conversion Tracking</span>
                                <span class="specialty">Performance Reporting</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Values -->
        <section class="team-values">
            <div class="section-content">
                <h2>What Drives Our Team</h2>
                <div class="values-grid">
                    <div class="value-item">
                        <h3>Collaboration</h3>
                        <p>We believe the best results come from working together, sharing knowledge, and supporting each other's growth.</p>
                    </div>
                    <div class="value-item">
                        <h3>Continuous Learning</h3>
                        <p>Digital marketing evolves rapidly, and we're committed to staying ahead through ongoing education and skill development.</p>
                    </div>
                    <div class="value-item">
                        <h3>Client Success</h3>
                        <p>Your success is our success. We're dedicated to delivering results that exceed expectations and drive real business growth.</p>
                    </div>
                    <div class="value-item">
                        <h3>Innovation</h3>
                        <p>We embrace new technologies and creative approaches to solve complex marketing challenges and stay ahead of the curve.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Join Our Team CTA -->
        <section class="team-cta">
            <div class="section-content">
                <h2>Want to Join Our Team?</h2>
                <p>We're always looking for talented individuals who share our passion for digital marketing excellence</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/careers'); ?>" class="btn btn-primary">View Open Positions</a>
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-secondary">Get in Touch</a>
                </div>
            </div>
        </section>    </div>
</main>

<?php get_footer(); ?>
