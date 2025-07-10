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

// Services section
$services_title = get_post_meta(get_the_ID(), '_coaches_consultants_services_title', true);
$services = get_post_meta(get_the_ID(), '_coaches_consultants_services', true);

// Case study section
$case_study_label = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_label', true);
$case_study_title = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_title', true);
$case_study_content = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_content', true);
$case_study_challenge_title = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_challenge_title', true);
$case_study_challenges = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_challenges', true);
$case_study_solution_title = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_solution_title', true);
$case_study_solutions = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_solutions', true);
$case_study_results_title = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_results_title', true);
$case_study_results = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_results', true);
$case_study_link_text = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_link_text', true);
$case_study_link_url = get_post_meta(get_the_ID(), '_coaches_consultants_case_study_link_url', true);

// Process section
$process_title = get_post_meta(get_the_ID(), '_coaches_consultants_process_title', true);
$process_steps = get_post_meta(get_the_ID(), '_coaches_consultants_process_steps', true);

// Insights section
$insights_title = get_post_meta(get_the_ID(), '_coaches_consultants_insights_title', true);
$insights = get_post_meta(get_the_ID(), '_coaches_consultants_insights', true);

// Testimonial section
$testimonial_quote = get_post_meta(get_the_ID(), '_coaches_consultants_testimonial_quote', true);
$testimonial_name = get_post_meta(get_the_ID(), '_coaches_consultants_testimonial_name', true);
$testimonial_position = get_post_meta(get_the_ID(), '_coaches_consultants_testimonial_position', true);
$testimonial_company = get_post_meta(get_the_ID(), '_coaches_consultants_testimonial_company', true);

// CTA section
$cta_title = get_post_meta(get_the_ID(), '_coaches_consultants_cta_title', true);
$cta_subtitle = get_post_meta(get_the_ID(), '_coaches_consultants_cta_subtitle', true);
$cta_primary_text = get_post_meta(get_the_ID(), '_coaches_consultants_cta_primary_text', true);
$cta_primary_url = get_post_meta(get_the_ID(), '_coaches_consultants_cta_primary_url', true);
$cta_secondary_text = get_post_meta(get_the_ID(), '_coaches_consultants_cta_secondary_text', true);
$cta_secondary_url = get_post_meta(get_the_ID(), '_coaches_consultants_cta_secondary_url', true);
$cta_benefits = get_post_meta(get_the_ID(), '_coaches_consultants_cta_benefits', true);
?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/industries'); ?>">Industries</a>
                <span class="separator">›</span>
                <span class="current">Coaches & Consultants</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post($header_title ?: 'Coaches & Consultants Digital Marketing'); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post($header_subtitle ?: 'Build your personal brand, attract ideal clients, and scale your coaching or consulting business'); ?></p>
            </div>
        </section>        <!-- Industry Overview -->
        <section class="industry-overview animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo wp_kses_post($overview_title ?: 'Transform Your Expertise Into a Thriving Business'); ?></h2>
                        <p><?php echo wp_kses_post($overview_content ?: 'As a coach or consultant, your expertise is your greatest asset. Our specialised marketing strategies help you build a powerful personal brand, attract high-value clients, and position yourself as the go-to authority in your niche.'); ?></p>
                        
                        <div class="industry-challenges animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post($challenges_title ?: 'Coaching & Consulting Marketing Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php if (!empty($challenges)): ?>
                                    <?php foreach ($challenges as $challenge): ?>
                                        <li><?php echo wp_kses_post($challenge); ?></li>
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
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($services_title ?: 'Our Coaching & Consulting Marketing Services'); ?></h2>
                <div class="benefits-grid-2x2 animate-on-scroll animate-fade-up">
                    <?php if (!empty($services)): ?>
                        <?php foreach ($services as $service): ?>
                            <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                                <div class="benefit-icon">
                                    <i class="<?php echo esc_attr($service['icon'] ?: 'fas fa-star'); ?>"></i>
                                </div>
                                <div class="benefit-content">
                                    <h3><?php echo wp_kses_post($service['title']); ?></h3>
                                    <p><?php echo wp_kses_post($service['description']); ?></p>
                                    <?php if (!empty($service['features'])): ?>
                                        <ul class="target-list">
                                            <?php foreach ($service['features'] as $feature): ?>
                                                <li><?php echo wp_kses_post($feature); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Default fallback services -->
                        <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="benefit-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="benefit-content">
                                <h3>Personal Brand Strategy</h3>
                                <p>Build a powerful personal brand that positions you as the authority in your niche and attracts your ideal coaching clients.</p>
                                <ul class="target-list">
                                    <li>Authority positioning</li>
                                    <li>Brand story development</li>
                                    <li>Brand voice and messaging</li>
                                    <li>Visual identity system</li>
                                </ul>
                            </div>
                        </div>
                        <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="benefit-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <div class="benefit-content">
                                <h3>High-Ticket Client Acquisition</h3>
                                <p>Attract premium clients with targeted marketing campaigns designed to generate high-quality discovery calls and consultations.</p>
                                <ul class="target-list">
                                    <li>Ideal client targeting</li>
                                    <li>Lead magnet creation</li>
                                    <li>Automated nurture sequences</li>
                                    <li>Application process optimisation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="benefit-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="benefit-content">
                                <h3>Authority Content Marketing</h3>
                                <p>Establish your expertise with valuable content that educates prospects while positioning you as the go-to expert in your field.</p>
                                <ul class="target-list">
                                    <li>Thought leadership content</li>
                                    <li>Podcast & interview strategy</li>
                                    <li>Educational resources</li>
                                    <li>SEO-optimised articles</li>
                                </ul>
                            </div>
                        </div>
                        <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="benefit-icon">
                                <i class="fas fa-comment-dollar"></i>
                            </div>
                            <div class="benefit-content">
                                <h3>Digital Sales Funnels</h3>
                                <p>Convert more prospects into paying clients with proven sales funnels and automation that scale your coaching business.</p>
                                <ul class="target-list">
                                    <li>Webinar & workshop funnels</li>
                                    <li>Application & discovery call systems</li>
                                    <li>Email sequences</li>
                                    <li>Conversion optimisation</li>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>        <!-- Coaches Consultants Success Story -->
        <section class="coaches-consultants-case-study animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <span class="case-study-label"><?php echo wp_kses_post($case_study_label ?: 'Success Story'); ?></span>
                        <h2><?php echo wp_kses_post($case_study_title ?: 'Strategic Business Solutions: 400% Client Growth'); ?></h2>
                        <p><?php echo wp_kses_post($case_study_content ?: 'Mark Anderson, a business strategy consultant, needed to establish his authority and generate consistent high-value client leads.'); ?></p>
                        
                        <div class="case-study-challenge animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post($case_study_challenge_title ?: 'The Challenge'); ?></h3>
                            <?php if (!empty($case_study_challenges)): ?>
                                <ul>
                                    <?php foreach ($case_study_challenges as $challenge): ?>
                                        <li><?php echo wp_kses_post($challenge); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <ul>
                                    <li>Low visibility in a competitive niche</li>
                                    <li>Inconsistent lead generation</li>
                                    <li>Under-priced services</li>
                                    <li>Limited scalability with 1:1 clients</li>
                                </ul>
                            <?php endif; ?>
                        </div>

                        <div class="case-study-solution animate-on-scroll animate-fade-up">
                            <h3><?php echo wp_kses_post($case_study_solution_title ?: 'Our Solution'); ?></h3>
                            <?php if (!empty($case_study_solutions)): ?>
                                <ul>
                                    <?php foreach ($case_study_solutions as $solution): ?>
                                        <li><?php echo wp_kses_post($solution); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <ul>
                                    <li>Authority positioning strategy</li>
                                    <li>Automated lead generation system</li>
                                    <li>Premium service packaging</li>
                                    <li>Group program development</li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="case-study-results animate-on-scroll animate-slide-right">
                        <h3><?php echo wp_kses_post($case_study_results_title ?: 'Results After 9 Months'); ?></h3>
                        <div class="results-grid">
                            <?php if (!empty($case_study_results)): ?>
                                <?php foreach ($case_study_results as $result): ?>
                                    <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                        <div class="result-number"><?php echo wp_kses_post($result['number']); ?></div>
                                        <div class="result-label"><?php echo wp_kses_post($result['label']); ?></div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                    <div class="result-number">320%</div>
                                    <div class="result-label">Increase in Discovery Calls</div>
                                </div>
                                <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                    <div class="result-number">250%</div>
                                    <div class="result-label">Increase in Client Value</div>
                                </div>
                                <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                    <div class="result-number">400%</div>
                                    <div class="result-label">Growth in Email Subscribers</div>
                                </div>
                                <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                    <div class="result-number">75%</div>
                                    <div class="result-label">Reduction in Working Hours</div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if ($case_study_link_text && $case_study_link_url): ?>
                            <a href="<?php echo esc_url($case_study_link_url); ?>" class="case-study-link"><?php echo wp_kses_post($case_study_link_text); ?></a>
                        <?php else: ?>
                            <a href="<?php echo home_url('/case-studies'); ?>" class="case-study-link">Read Full Case Study</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>        <!-- Coaches Consultants Process -->
        <section class="coaches-consultants-process animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($process_title ?: 'Our Coaching & Consulting Marketing Process'); ?></h2>
                <div class="process-steps animate-on-scroll animate-fade-up">
                    <?php if (!empty($process_steps)): ?>
                        <?php foreach ($process_steps as $index => $step): ?>
                            <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                                <div class="step-number"><?php echo $index + 1; ?></div>
                                <div class="step-content">
                                    <h3><?php echo wp_kses_post($step['title']); ?></h3>
                                    <p><?php echo wp_kses_post($step['description']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Default fallback steps -->
                        <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h3>Brand & Audience Analysis</h3>
                                <p>We analyse your current brand positioning, audience, and competitor landscape to identify your unique advantage.</p>
                            </div>
                        </div>
                        <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h3>Authority Strategy Development</h3>
                                <p>We create a customised marketing roadmap to position you as the go-to authority in your niche.</p>
                            </div>
                        </div>
                        <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h3>Lead Generation Implementation</h3>
                                <p>We build and launch targeted campaigns designed to attract high-quality coaching prospects.</p>
                            </div>
                        </div>
                        <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                            <div class="step-number">4</div>
                            <div class="step-content">
                                <h3>Conversion & Scale optimisation</h3>
                                <p>We optimise your sales process and develop scalable programs to increase revenue while reducing time commitment.</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>        <!-- Coaches Consultants Insights -->
        <section class="coaches-consultants-insights animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($insights_title ?: 'Coaching & Consulting Industry Insights'); ?></h2>
                <div class="results-grid animate-on-scroll animate-fade-up">
                    <?php if (!empty($insights)): ?>
                        <?php foreach ($insights as $insight): ?>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number"><?php echo wp_kses_post($insight['stat']); ?></div>
                                <div class="result-label"><?php echo wp_kses_post($insight['title']); ?></div>
                                <p><?php echo wp_kses_post($insight['description']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Default fallback insights -->
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number">81%</div>
                            <div class="result-label">Trust Factor</div>
                            <p>81% of clients research coaches online before making a decision</p>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number">68%</div>
                            <div class="result-label">Content Influence</div>
                            <p>68% of prospects choose coaches who provide valuable free content</p>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number">73%</div>
                            <div class="result-label">Referral Importance</div>
                            <p>73% of coaching clients come from referrals and word of mouth</p>
                        </div>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number">89%</div>
                            <div class="result-label">Website Importance</div>
                            <p>89% of prospects visit a coach's website before contacting them</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>        <!-- Coaches Consultants Testimonial -->
        <?php if ($testimonial_quote || $testimonial_name): ?>
        <section class="coaches-consultants-testimonial animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-slide-up">
                    <blockquote>
                        <?php echo wp_kses_post($testimonial_quote ?: '"Aimpro Digital understood exactly what I needed as a consultant. They helped me build a powerful personal brand and create systems that generate high-quality leads consistently. My business has grown 400% and I can now command premium rates."'); ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo wp_kses_post($testimonial_name ?: 'Mark Anderson'); ?></h4>
                            <span><?php echo wp_kses_post($testimonial_position ?: 'Principal, Strategic Business Solutions'); ?></span>
                            <div class="author-company"><?php echo wp_kses_post($testimonial_company ?: 'Business strategy consultant & executive coach'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>        <!-- CTA Section -->
        <section class="coaches-consultants-cta text-center animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($cta_title ?: 'Ready to Scale Your Coaching or Consulting Business?'); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($cta_subtitle ?: 'Let\'s discuss how our expertise can help you build a powerful personal brand and generate consistent high-value clients.'); ?></p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <?php if ($cta_primary_text && $cta_primary_url): ?>
                        <a href="<?php echo esc_url($cta_primary_url); ?>" class="btn btn-primary"><?php echo wp_kses_post($cta_primary_text); ?></a>
                    <?php else: ?>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Free Brand Audit</a>
                    <?php endif; ?>
                    
                    <?php if ($cta_secondary_text && $cta_secondary_url): ?>
                        <a href="<?php echo esc_url($cta_secondary_url); ?>" class="btn btn-secondary"><?php echo wp_kses_post($cta_secondary_text); ?></a>
                    <?php else: ?>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="btn btn-secondary">View Coaching Success Stories</a>
                    <?php endif; ?>
                </div>
                <div class="cta-benefits animate-on-scroll animate-fade-up">
                    <?php if (!empty($cta_benefits)): ?>
                        <?php foreach ($cta_benefits as $benefit): ?>
                            <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> <?php echo wp_kses_post(str_replace('✓', '', $benefit)); ?></span>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Expert authority positioning</span>
                        <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Premium client acquisition</span>
                        <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> Business scaling strategies</span>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

<style>
/* Mobile optimizations for coaches consultants results sections */
@media (max-width: 768px) {
    /* Case Study Results Grid - Mobile Layout */
    .case-study-results .results-grid,
    .coaches-consultants-insights .results-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-top: 1.5rem;
    }
    
    .case-study-results .result-item,
    .coaches-consultants-insights .result-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem 1rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .case-study-results .result-number,
    .coaches-consultants-insights .result-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: #007bff;
        line-height: 1;
        margin-bottom: 0.5rem;
    }
    
    .case-study-results .result-label,
    .coaches-consultants-insights .result-label {
        font-size: 0.9rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
    }
    
    .coaches-consultants-insights .result-item p {
        font-size: 0.85rem;
        color: #6c757d;
        margin: 0;
        line-height: 1.4;
    }
    
    /* Case Study Link Button */
    .case-study-link {
        display: inline-block;
        width: 100%;
        padding: 0.875rem 1.5rem;
        background: #007bff;
        color: white !important;
        text-decoration: none;
        border-radius: 6px;
        font-weight: 600;
        text-align: center;
        margin-top: 1.5rem;
        font-size: 0.9rem;
        transition: background-color 0.3s ease;
    }
    
    .case-study-link:hover {
        background: #0056b3;
        color: white !important;
    }
    
    /* Service Cards Grid - Ensure mobile stacking */
    .benefits-grid-2x2 {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .benefit-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
    }
    
    .benefit-icon {
        margin-bottom: 1rem;
    }
    
    .benefit-icon i {
        font-size: 2.5rem;
        color: #007bff;
    }
    
    .benefit-card h3 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        color: #212529;
    }
    
    .benefit-card p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    
    .target-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .target-list li {
        font-size: 0.85rem;
        color: #495057;
        padding: 0.25rem 0;
        border-bottom: 1px solid #e9ecef;
    }
    
    .target-list li:last-child {
        border-bottom: none;
    }
    
    /* CTA Section Mobile */
    .coaches-consultants-cta .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin: 1.5rem 0;
    }
    
    .coaches-consultants-cta .btn {
        width: 100%;
        padding: 0.875rem 1.5rem;
        text-align: center;
        font-weight: 600;
        border-radius: 6px;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .coaches-consultants-cta .btn-primary {
        background: #007bff;
        color: white !important;
        border: 2px solid #007bff;
    }
    
    .coaches-consultants-cta .btn-primary:hover {
        background: #0056b3;
        border-color: #0056b3;
    }
    
    .coaches-consultants-cta .btn-secondary {
        background: transparent;
        color: #007bff !important;
        border: 2px solid #007bff;
    }
    
    .coaches-consultants-cta .btn-secondary:hover {
        background: #007bff;
        color: white !important;
    }
    
    .cta-benefits {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        justify-content: center;
        margin-top: 1rem;
    }
    
    .cta-benefits .benefit {
        background: #e9ecef;
        color: #495057;
        padding: 0.375rem 0.75rem;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.25rem;
    }
    
    .cta-benefits .benefit i {
        color: #28a745;
        font-size: 0.7rem;
    }
    
    /* Process Steps Mobile - Center step numbers above content */
    .coaches-consultants-process .process-step {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-bottom: 2rem;
    }
    
    .coaches-consultants-process .step-number {
        display: flex;
        align-items: center;
        justify-content: center;
        order: -1;
        margin-bottom: 1rem;
    }
    
    .coaches-consultants-process .step-content {
        width: 100%;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* Tablet Layout - 2x2 grid */
    .case-study-results .results-grid,
    .coaches-consultants-insights .results-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .case-study-results .result-item,
    .coaches-consultants-insights .result-item {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .benefits-grid-2x2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
}
</style>

