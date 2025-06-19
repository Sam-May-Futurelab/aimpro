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
    align-items: centre !important;
    justify-content: centre !important;
    width: 24px !important;
    height: 24px !important;
    min-width: 24px !important;
    min-height: 24px !important;
    margin: 0 0.75rem 0 0 !important;
    padding: 0 !important;
    background-colour: #f15a25 !important;
    colour: white !important;
    border-radius: 50% !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 1 !important;
    position: relative !important;
    top: 0 !important;
    left: 0 !important;
    text-align: centre !important;
    flex-shrink: 0 !important;
}
.step-title {
    display: block !important;
    margin: 0 !important;
    padding: 0 !important;
    width: auto !important;
    flex: 1 !important;
    colour: #5a6a7e !important;
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

<main id="main" class="main-content service-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/resources'); ?>">Resources</a>
                <span class="separator">›</span>
                <span class="current">Training & Mentoring</span>
            </nav>
        </div>
    </div>

    <div class="container">          <!-- Page Header -->
        <section class="page-header animate-on-scroll animate-fade-up">
            <div class="page-header-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_header_title', true) ?: 'Training & Mentoring'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_header_subtitle', true) ?: 'Accelerate your digital marketing expertise with personalised guidance'); ?></p>
            </div>
        </section>        <!-- Training Introduction -->
        <section class="training-intro animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="intro-content animate-on-scroll animate-slide-left">
                    <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_intro_title', true) ?: 'Invest in Your Digital Marketing Future'); ?></h2>
                    <p><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_intro_content', true) ?: 'Whether you\'re looking to upskill your team, advance your career, or master specific digital marketing disciplines, our training and mentoring programs provide the personalised guidance you need to achieve your goals faster.'); ?></p>
                </div>

                <div class="training-benefits animate-on-scroll animate-slide-right">
                    <?php 
                    $benefits = get_post_meta(get_the_ID(), '_training_mentoring_benefits', true);
                    if (empty($benefits)) {
                        $benefits = array(
                            array(
                                'icon' => 'fas fa-crosshairs',
                                'title' => 'personalised Approach',
                                'description' => 'Tailored programs based on your current skills and specific goals'
                            ),
                            array(
                                'icon' => 'fas fa-bolt',
                                'title' => 'Accelerated Learning',
                                'description' => 'Learn from industry experts with real-world experience'
                            ),
                            array(
                                'icon' => 'fas fa-chart-line',
                                'title' => 'Measurable Results',
                                'description' => 'Track your progress with actionable assignments and projects'
                            ),
                            array(
                                'icon' => 'fas fa-star',
                                'title' => 'Expert Guidance',
                                'description' => 'Direct access to senior digital marketing professionals'
                            )
                        );
                    }
                      foreach ($benefits as $benefit): ?>
                        <div class="benefit-item animate-on-scroll animate-stagger animate-fade-up">
                            <div class="benefit-icon">
                                <i class="<?php echo esc_attr($benefit['icon']); ?>"></i>
                            </div>
                            <h3><?php echo esc_html($benefit['title']); ?></h3>
                            <p><?php echo esc_html($benefit['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Training Programs -->
        <section class="training-programs animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Training Programs</h2>
                <div class="programs-grid animate-on-scroll animate-fade-up">
                    <?php 
                    $programs = get_post_meta(get_the_ID(), '_training_mentoring_programs', true);
                    if (empty($programs)) {
                        $programs = array(
                            array(
                                'featured' => true,
                                'badge' => 'Most Popular',
                                'title' => 'Individual Mentoring',
                                'price' => '£149',
                                'period' => 'per session',
                                'description' => 'One-on-one mentoring sessions with senior digital marketing experts tailored to your specific needs and career goals.',
                                'features' => array('1-hour intensive sessions', 'personalised learning plan', 'Homework assignments', 'Progress tracking', 'Email support between sessions', 'Industry certification guidance'),
                                'topics_title' => 'Choose Your Focus Area:',
                                'topics' => array('SEO Strategy', 'PPC Management', 'Content Marketing', 'Social Media', 'Analytics', 'Strategy'),
                                'cta_text' => 'Book Session',
                                'cta_url' => '#'
                            ),
                            array(
                                'featured' => false,
                                'badge' => '',
                                'title' => 'Team Training Workshops',
                                'price' => '£899',
                                'period' => 'per workshop',
                                'description' => 'Comprehensive team training workshops designed to upskill your entire marketing department with consistent, high-quality education.',
                                'features' => array('Half-day or full-day workshops', 'Up to 12 team members', 'Interactive exercises', 'Custom curriculum', 'Workshop materials included', '30-day follow-up support'),
                                'topics_title' => 'Popular Workshop Topics:',
                                'topics' => array('Digital Strategy', 'SEO Fundamentals', 'PPC Best Practices', 'Content Planning', 'Analytics Setup', 'Campaign Management'),
                                'cta_text' => 'Request Quote',
                                'cta_url' => '#'
                            ),
                            array(
                                'featured' => false,
                                'badge' => '',
                                'title' => 'Certification Program',
                                'price' => '£1,299',
                                'period' => '3-month program',
                                'description' => 'Comprehensive 3-month certification program covering all aspects of digital marketing with hands-on projects and industry recognition.',
                                'features' => array('12 structured modules', 'Weekly group sessions', 'Real-world projects', 'Industry certification', 'Career guidance', 'Lifetime community access'),
                                'topics_title' => 'Curriculum Includes:',
                                'topics' => array('Marketing Strategy', 'SEO & SEM', 'Content & Social', 'Email Marketing', 'Analytics', 'Campaign Management'),
                                'cta_text' => 'Apply Now',
                                'cta_url' => '#'
                            )
                        );
                    }
                      foreach ($programs as $program): ?>
                        <div class="program-card <?php echo !empty($program['featured']) ? 'featured' : ''; ?> animate-on-scroll animate-stagger animate-fade-up">
                            <?php if (!empty($program['badge'])): ?>
                                <div class="program-badge"><?php echo esc_html($program['badge']); ?></div>
                            <?php endif; ?>
                            <div class="program-header">
                                <h3><?php echo esc_html($program['title']); ?></h3>
                                <div class="program-price">
                                    <span class="price"><?php echo esc_html($program['price']); ?></span>
                                    <span class="period"><?php echo esc_html($program['period']); ?></span>
                                </div>
                            </div>
                            <div class="program-content">
                                <p class="program-description"><?php echo esc_html($program['description']); ?></p>
                                
                                <?php if (!empty($program['features'])): ?>
                                    <ul class="program-features">
                                        <?php foreach ($program['features'] as $feature): ?>
                                            <li><?php echo esc_html($feature); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <?php if (!empty($program['topics'])): ?>
                                    <div class="program-topics">
                                        <h4><?php echo esc_html($program['topics_title'] ?: 'Topics:'); ?></h4>
                                        <div class="topics-grid">
                                            <?php foreach ($program['topics'] as $topic): ?>
                                                <span class="topic"><?php echo esc_html($topic); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <a href="<?php echo esc_url($program['cta_url'] ?: '#'); ?>" class="program-cta"><?php echo esc_html($program['cta_text'] ?: 'Learn More'); ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Mentoring Success Stories -->
        <section class="mentoring-success animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_success_stories_title', true) ?: 'Success Stories'); ?></h2>
                <div class="success-grid animate-on-scroll animate-fade-up">
                    <?php 
                    $success_stories = get_post_meta(get_the_ID(), '_training_mentoring_success_stories', true);
                    if (empty($success_stories)) {
                        $success_stories = array(
                            array(
                                'quote' => 'The individual mentoring program helped me transition from traditional marketing to digital. Within 6 months, I landed a senior digital marketing role with a 40% salary increase.',
                                'name' => 'Emma Thompson',
                                'position' => 'Senior Digital Marketing Manager',
                                'results' => array('40% salary increase', 'Senior role in 6 months')
                            ),
                            array(
                                'quote' => 'Our team workshop on PPC management was transformative. We immediately implemented the strategies and saw a 150% improvement in our campaign performance.',
                                'name' => 'David Chen',
                                'position' => 'Marketing Director, TechStart',
                                'results' => array('150% performance boost', 'Team alignment achieved')
                            ),
                            array(
                                'quote' => 'The certification program gave me the confidence and skills to start my own digital marketing consultancy. I\'m now working with 8 clients and growing.',
                                'name' => 'Lisa Rodriguez',
                                'position' => 'Founder, Rodriguez Marketing',
                                'results' => array('Started own business', '8 active clients')
                            )
                        );
                    }
                      foreach ($success_stories as $story): ?>
                        <div class="success-story animate-on-scroll animate-stagger animate-slide-up">
                            <div class="story-content">
                                <blockquote>
                                    "<?php echo esc_html($story['quote']); ?>"
                                </blockquote>
                                <div class="story-author">
                                    <h4><?php echo esc_html($story['name']); ?></h4>
                                    <span><?php echo esc_html($story['position']); ?></span>
                                    <?php if (!empty($story['results'])): ?>
                                        <div class="story-results">
                                            <?php foreach ($story['results'] as $result): ?>
                                                <span class="result"><?php echo esc_html($result); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Learning Paths -->
        <section class="learning-paths animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_learning_paths_title', true) ?: 'Learning Paths'); ?></h2>
                <p class="section-subtitle animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_learning_paths_subtitle', true) ?: 'Structured progression routes based on your career goals'); ?></p>
                
                <div class="paths-grid animate-on-scroll animate-fade-up">
                    <?php 
                    $learning_paths = get_post_meta(get_the_ID(), '_training_mentoring_learning_paths', true);
                    if (empty($learning_paths)) {
                        $learning_paths = array(
                            array(
                                'title' => 'Beginner to Professional',
                                'duration' => '3-6 months',
                                'description' => 'Perfect for marketing newcomers or those switching from traditional marketing to digital.',
                                'steps' => array('Digital Marketing Fundamentals', 'SEO & Content Basics', 'PPC Campaign Management', 'Analytics & Reporting'),
                                'cta_text' => 'Start Learning Path',
                                'cta_url' => '#'
                            ),
                            array(
                                'title' => 'Specialist to Expert',
                                'duration' => '2-4 months',
                                'description' => 'For experienced marketers looking to master advanced strategies and become industry experts.',
                                'steps' => array('Advanced Strategy Development', 'Marketing Automation', 'Advanced Analytics', 'Team Leadership'),
                                'cta_text' => 'Start Learning Path',
                                'cta_url' => '#'
                            ),
                            array(
                                'title' => 'Entrepreneur Track',
                                'duration' => '4-8 months',
                                'description' => 'Comprehensive training for business owners and entrepreneurs to master their own marketing.',
                                'steps' => array('Business Marketing Strategy', 'Cost-Effective Tactics', 'Conversion optimisation', 'Growth Scaling'),
                                'cta_text' => 'Start Learning Path',
                                'cta_url' => '#'
                            )
                        );
                    }
                      foreach ($learning_paths as $path): ?>
                        <div class="learning-path animate-on-scroll animate-stagger animate-fade-up">
                            <div class="path-header">
                                <h3><?php echo esc_html($path['title']); ?></h3>
                                <span class="path-duration"><?php echo esc_html($path['duration']); ?></span>
                            </div>
                            <div class="path-content">
                                <p><?php echo esc_html($path['description']); ?></p>
                                <?php if (!empty($path['steps'])): ?>
                                    <div class="path-steps">
                                        <?php foreach ($path['steps'] as $index => $step): ?>
                                            <div class="step">
                                                <div class="step-number"><?php echo $index + 1; ?></div>
                                                <div class="step-title"><?php echo esc_html($step); ?></div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <a href="<?php echo esc_url($path['cta_url'] ?: '#'); ?>" class="path-cta"><?php echo esc_html($path['cta_text'] ?: 'Start Learning Path'); ?></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Mentoring Team -->
        <section class="mentoring-team animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_mentors_title', true) ?: 'Meet Your Mentors'); ?></h2>
                <div class="mentors-grid animate-on-scroll animate-fade-up">
                    <?php 
                    $mentors = get_post_meta(get_the_ID(), '_training_mentoring_mentors', true);
                    if (empty($mentors)) {
                        $mentors = array(
                            array(
                                'name' => 'John Smith',
                                'title' => 'SEO & Content Strategy Expert',
                                'description' => '15+ years in digital marketing with expertise in enterprise SEO and content strategy. Former head of SEO at major UK e-commerce companies.',
                                'specialties' => array('Technical SEO', 'Content Strategy', 'Enterprise SEO'),
                                'stats' => array('50+ mentees', '★★★★★ 4.9')
                            ),
                            array(
                                'name' => 'Sarah Johnson',
                                'title' => 'PPC & Paid Media Specialist',
                                'description' => 'Google Ads certified professional with 12+ years managing multi-million pound advertising budgets across various industries.',
                                'specialties' => array('Google Ads', 'Facebook Ads', 'Campaign optimisation'),
                                'stats' => array('75+ mentees', '★★★★★ 4.8')
                            ),
                            array(
                                'name' => 'Mike Chen',
                                'title' => 'Analytics & Data Strategy Expert',
                                'description' => 'Former Google Analytics team member with deep expertise in data analysis, conversion tracking, and marketing attribution.',
                                'specialties' => array('Google Analytics', 'Data Analysis', 'Attribution Modeling'),
                                'stats' => array('40+ mentees', '★★★★★ 4.9')
                            )
                        );
                    }
                      foreach ($mentors as $mentor): ?>
                        <div class="mentor-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="mentor-info">
                                <h3><?php echo esc_html($mentor['name']); ?></h3>
                                <h4><?php echo esc_html($mentor['title']); ?></h4>
                                <p><?php echo esc_html($mentor['description']); ?></p>
                                <?php if (!empty($mentor['specialties'])): ?>
                                    <div class="mentor-specialties">
                                        <?php foreach ($mentor['specialties'] as $specialty): ?>
                                            <div class="specialty"><?php echo esc_html($specialty); ?></div>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($mentor['stats'])): ?>
                                    <div class="mentor-stats">
                                        <?php foreach ($mentor['stats'] as $stat): ?>
                                            <span class="stat"><?php echo esc_html($stat); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- FAQ Section -->
        <section class="training-faq faq-section animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_faq_title', true) ?: 'Frequently Asked Questions'); ?></h2>
                <div class="faq-grid animate-on-scroll animate-fade-up">
                    <?php 
                    $faqs = get_post_meta(get_the_ID(), '_training_mentoring_faqs', true);
                    if (empty($faqs)) {
                        $faqs = array(
                            array(
                                'question' => 'How do I choose the right program?',
                                'answer' => 'We offer a free 15-minute consultation to understand your goals and recommend the best program for your needs. Contact us to schedule your consultation.'
                            ),
                            array(
                                'question' => 'What if I need to reschedule sessions?',
                                'answer' => 'We understand life happens. You can reschedule sessions up to 24 hours in advance without any penalties. Emergency rescheduling is handled case-by-case.'
                            ),
                            array(
                                'question' => 'Do you offer refunds?',
                                'answer' => 'We offer a satisfaction guarantee. If you\'re not completely satisfied with your first session, we\'ll refund your money or provide a replacement mentor.'
                            ),
                            array(
                                'question' => 'Can I get corporate training for my team?',
                                'answer' => 'Absolutely! We offer customised corporate training programs for teams of any size. Contact us for a tailored proposal and volume discounts.'
                            ),
                            array(
                                'question' => 'Are sessions recorded?',
                                'answer' => 'Individual mentoring sessions can be recorded upon request. Workshop sessions include access to presentation materials and key recordings.'
                            ),
                            array(
                                'question' => 'What certification do I receive?',
                                'answer' => 'Our certification program provides an industry-recognised certificate upon completion, plus assistance with pursuing Google, Facebook, and other platform certifications.'
                            )
                        );
                    }
                      foreach ($faqs as $faq): ?>
                        <div class="faq-item animate-on-scroll animate-stagger animate-fade-up">
                            <h3><?php echo esc_html($faq['question']); ?></h3>
                            <p><?php echo esc_html($faq['answer']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="training-cta animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_cta_title', true) ?: 'Ready to Accelerate Your Marketing Career?'); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_cta_content', true) ?: 'Book a free consultation to discuss your goals and find the perfect training program for you.'); ?></p>
                <div class="cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_training_mentoring_cta_primary_url', true) ?: '#'); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_cta_primary_text', true) ?: 'Book Free Consultation'); ?></a>
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), '_training_mentoring_cta_secondary_url', true) ?: home_url('/contact')); ?>" class="btn btn-secondary"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_cta_secondary_text', true) ?: 'Contact Us'); ?></a>
                </div>
                <p class="cta-note animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_training_mentoring_cta_note', true) ?: 'Free 15-minute consultation • No obligation • personalised recommendations'); ?></p>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
