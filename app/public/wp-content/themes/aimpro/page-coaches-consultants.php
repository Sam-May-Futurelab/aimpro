<?php
/**
 * Template Name: Coaches & Consultants Industry Page
 * Description: Digital marketing for coaches and consultants
 */

get_header(); 

// Get meta values
$header_title = get_post_meta(get_the_ID(), '_coaches_consultants_header_title', true);
$header_subtitle = get_post_meta(get_the_ID(), '_coaches_consultants_header_subtitle', true);
$overview_title = get_post_meta(get_the_ID(), '_coaches_consultants_overview_title', true);
$overview_content = get_post_meta(get_the_ID(), '_coaches_consultants_overview_content', true);
$overview_image = get_post_meta(get_the_ID(), '_coaches_consultants_overview_image', true);
$challenges_title = get_post_meta(get_the_ID(), '_coaches_consultants_challenges_title', true);
$challenges = get_post_meta(get_the_ID(), '_coaches_consultants_challenges', true);
?>

<main id="main" class="main-content">
    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html($header_title ?: 'Coaches & Consultants Digital Marketing'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html($header_subtitle ?: 'Build your personal brand, attract ideal clients, and scale your coaching or consulting business'); ?></p>
            </div>
        </section>        <!-- Industry Overview -->
        <section class="industry-overview animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html($overview_title ?: 'Transform Your Expertise Into a Thriving Business'); ?></h2>
                        <p><?php echo esc_html($overview_content ?: 'As a coach or consultant, your expertise is your greatest asset. Our specialized marketing strategies help you build a powerful personal brand, attract high-value clients, and position yourself as the go-to authority in your niche.'); ?></p>
                        
                        <div class="industry-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo esc_html($challenges_title ?: 'Coaching & Consulting Marketing Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php if (!empty($challenges)): ?>
                                    <?php foreach ($challenges as $challenge): ?>
                                        <li><?php echo esc_html($challenge); ?></li>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                <li>Building trust and credibility online</li>
                                <li>Standing out in a crowded marketplace</li>
                                <li>Generating consistent high-quality leads</li>
                                <li>Positioning yourself as an industry authority</li>
                                <li>Converting prospects into paying clients</li>
                                <li>Scaling beyond one-on-one limitations</li>
                                <?php endif; ?>
                            </ul>
                        </div>                    </div>
                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php if ($overview_image): ?>
                            <img src="<?php echo esc_url($overview_image); ?>" alt="<?php echo esc_attr($overview_title); ?>" />
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industries/coaches-consultants-overview.jpg" alt="Coaches & Consultants Digital Marketing" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Coaches Consultants Services -->
        <section class="coaches-consultants-services animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Our Coaching & Consulting Marketing Services</h2>
                <div class="benefits-grid-2x2 animate-on-scroll animate-fade-up">
                      <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Personal Brand Development</h3>
                            <p>Build a powerful personal brand that establishes your authority and attracts your ideal clients consistently.</p>
                            <ul class="feature-list">
                                <li>Brand positioning strategy</li>
                                <li>Professional photography & video</li>
                                <li>Website design for consultants</li>
                                <li>Personal brand storytelling</li>
                            </ul>
                        </div>
                    </div>                    <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="fas fa-pen-fancy"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Content Marketing & Thought Leadership</h3>
                            <p>Showcase your expertise through strategic content that demonstrates value and builds trust with potential clients.</p>
                            <ul class="feature-list">
                                <li>Blog writing and strategy</li>
                                <li>Video content creation</li>
                                <li>Podcast development</li>
                                <li>Social media content</li>
                            </ul>
                        </div>
                    </div>                    <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="fas fa-funnel-dollar"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>Lead Generation Funnels</h3>
                            <p>Create sophisticated marketing funnels that attract, nurture, and convert your ideal clients automatically.</p>
                            <ul class="feature-list">
                                <li>Lead magnet development</li>
                                <li>Email nurture sequences</li>
                                <li>Webinar funnel creation</li>
                                <li>Client onboarding automation</li>
                            </ul>
                        </div>
                    </div>                    <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="benefit-content">
                            <h3>LinkedIn & Social Media Strategy</h3>
                            <p>Build your professional network and generate high-value leads through strategic social media engagement.</p>
                            <ul class="feature-list">
                                <li>LinkedIn profile optimization</li>
                                <li>Content distribution strategy</li>
                                <li>Social media advertising</li>
                                <li>Community building</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>        <!-- Coaches Consultants Success Story -->
        <section class="coaches-consultants-case-study animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <span class="case-study-label">Success Story</span>
                        <h2>Strategic Business Solutions: 400% Client Growth</h2>
                        <p>Mark Anderson, a business strategy consultant, needed to establish his authority and generate consistent high-value client leads.</p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3>The Challenge</h3>
                            <ul>
                                <li>Invisible in a crowded consulting market</li>
                                <li>Inconsistent lead generation</li>
                                <li>Difficulty commanding premium rates</li>
                                <li>Lack of systematic client acquisition</li>
                            </ul>
                        </div>                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3>Our Solution</h3>
                            <ul>
                                <li>Personal brand development strategy</li>
                                <li>Thought leadership content creation</li>
                                <li>LinkedIn authority building</li>
                                <li>Automated lead nurturing funnel</li>
                            </ul>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <h3>Results After 9 Months</h3>                        <div class="results-grid">
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number">400%</div>
                                <div class="result-label">Client Base Growth</div>
                            </div>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number">250%</div>
                                <div class="result-label">LinkedIn Engagement</div>
                            </div>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number">180%</div>
                                <div class="result-label">Rate Increase</div>
                            </div>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number">90%</div>
                                <div class="result-label">Referral Rate</div>
                            </div>
                        </div>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="case-study-link">Read Full Case Study</a>
                    </div>
                </div>
            </div>
        </section>        <!-- Coaches Consultants Process -->
        <section class="coaches-consultants-process animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Our Coaching & Consulting Marketing Process</h2>
                <div class="process-steps animate-on-scroll animate-fade-up">
                    
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Niche & Positioning</h3>
                            <p>Define your unique value proposition and identify your ideal client avatar for targeted messaging.</p>
                        </div>
                    </div>                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Brand Development</h3>
                            <p>Create a powerful personal brand that establishes your authority and differentiates you from competitors.</p>
                        </div>
                    </div>

                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Content Strategy</h3>
                            <p>Develop valuable content that showcases your expertise and builds trust with potential clients.</p>
                        </div>
                    </div>

                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Lead Generation</h3>
                            <p>Implement automated systems to attract, nurture, and convert prospects into high-value clients.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>        <!-- Coaches Consultants Insights -->
        <section class="coaches-consultants-insights animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Coaching & Consulting Industry Insights</h2>
                <div class="results-grid animate-on-scroll animate-fade-up">
                    
                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">88%</div>
                        <div class="result-label">Trust Building</div>
                        <p>88% of clients hire coaches/consultants based on trust and credibility</p>
                    </div>                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">75%</div>
                        <div class="result-label">Content Influence</div>
                        <p>75% of potential clients consume content before making contact</p>
                    </div>

                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">92%</div>
                        <div class="result-label">Referral Importance</div>
                        <p>92% of successful coaches get clients through referrals and word-of-mouth</p>
                    </div>

                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                        <div class="result-number">67%</div>
                        <div class="result-label">LinkedIn Research</div>
                        <p>67% of B2B buyers research consultants on LinkedIn before hiring</p>
                    </div>

                </div>
            </div>
        </section>        <!-- Coaches Consultants Testimonial -->
        <section class="coaches-consultants-testimonial animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-slide-up">
                    <blockquote>
                        "Aimpro Digital understood exactly what I needed as a consultant. They helped me build a powerful personal brand and create systems that generate high-quality leads consistently. My business has grown 400% and I can now command premium rates."
                    </blockquote>                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4>Mark Anderson</h4>
                            <span>Principal, Strategic Business Solutions</span>
                            <div class="author-company">Business strategy consultant & executive coach</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="coaches-consultants-cta text-center animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Ready to Scale Your Coaching or Consulting Business?</h2>
                <p class="animate-on-scroll animate-fade-up">Let's discuss how our expertise can help you build a powerful personal brand and generate consistent high-value clients.</p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Free Brand Audit</a>
                    <a href="<?php echo home_url('/case-studies'); ?>" class="btn btn-secondary">View Coaching Success Stories</a>
                </div>                <div class="cta-benefits animate-on-scroll animate-fade-up">
                    <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Personal brand strategy</span>
                    <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Lead generation systems</span>
                    <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Authority building expertise</span>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
