<?php
/**
 * Template Name: Lead Generation Solution Page
 * Description: Lead generation solution for B2B and B2C businesses
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/solutions'); ?>">Solutions</a>
                <span class="separator">›</span>
                <span class="current">Lead Generation</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_header_title', true) ?: 'Lead Generation (B2B/B2C)'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_header_subtitle', true) ?: 'Generate high-quality leads that convert into customers with proven strategies and targeted campaigns'); ?></p>
            </div>
        </section><!-- Solution Overview -->
        <section class="solution-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_overview_title', true) ?: 'Turn Prospects Into Qualified Leads'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_overview_content', true) ?: 'Lead generation is the lifeblood of any successful business. Our comprehensive lead generation strategies combine multiple touchpoints, compelling offers, and sophisticated targeting to attract and capture high-quality prospects who are ready to engage with your business.'); ?></p>
                        
                        <div class="solution-challenges">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_challenges_title', true) ?: 'Lead Generation Challenges We Solve:'); ?></h3>
                            <ul>
                                <?php
                                $challenges = get_post_meta(get_the_ID(), '_lead_generation_challenges', true);
                                if (empty($challenges)) {
                                    $challenges = array(
                                        'Low-quality leads that don\'t convert',
                                        'High cost per acquisition',
                                        'Inconsistent lead flow',
                                        'Poor lead nurturing processes',
                                        'Difficulty tracking lead sources',
                                        'Long sales cycles without proper follow-up'
                                    );
                                }
                                foreach ($challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';                                }
                                ?>
                            </ul>
                        </div>
                    </div>                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php 
                        $image_url = get_post_meta(get_the_ID(), '_lead_generation_overview_image', true);
                        if (empty($image_url)) {
                            $image_url = get_template_directory_uri() . '/assets/images/solutions/lead-generation-overview.jpg';
                        }
                        ?>
                        <div class="image-wrapper">
                            <img src="<?php echo esc_url($image_url); ?>" alt="Lead Generation Strategy" />
                        </div>
                        <div class="overview-image-cta">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary overview-cta-btn">Generate More Leads</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Lead Generation Methods -->
        <section class="lead-generation-methods">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_methods_title', true) ?: 'Our Lead Generation Methods'); ?></h2>
                <div class="methods-grid animate-on-scroll animate-stagger animate-scale-up">
                    
                    <?php
                    $methods = get_post_meta(get_the_ID(), '_lead_generation_methods', true);
                    if (empty($methods)) {
                        $methods = array(
                            array(
                                'title' => 'Search Engine Marketing',
                                'description' => 'Capture prospects actively searching for your solutions with targeted Google Ads and optimised landing pages.',
                                'features' => array(
                                    'High-intent keyword targeting',
                                    'Conversion-optimised landing pages',
                                    'Search ad optimisation',
                                    'Negative keyword refinement'
                                )
                            ),
                            array(
                                'title' => 'Social Media Lead Generation',
                                'description' => 'Leverage social platforms to reach and engage your ideal audience with compelling lead magnets and offers.',
                                'features' => array(
                                    'Facebook & LinkedIn lead ads',
                                    'Audience targeting & lookalikes',
                                    'Social proof integration',
                                    'Multi-platform campaigns'
                                )
                            ),
                            array(
                                'title' => 'Content Marketing & Lead Magnets',
                                'description' => 'Attract prospects with valuable content and convert them with irresistible lead magnets and gated resources.',
                                'features' => array(
                                    'High-value lead magnet creation',
                                    'Educational content strategy',
                                    'Gated resource optimisation',
                                    'Progressive profiling setup'
                                )
                            ),
                            array(
                                'title' => 'Email Marketing & Nurturing',
                                'description' => 'Build relationships and move prospects through your sales funnel with strategic email sequences.',
                                'features' => array(
                                    'Automated drip campaigns',
                                    'Lead scoring implementation',
                                    'behavioural trigger emails',
                                    'CRM integration & tracking'
                                )
                            )
                        );
                    }

                    $method_icons = array(
                        '<i class="fas fa-search" style="font-size: 48px;"></i>', // Search Engine Marketing
                        '<i class="fab fa-facebook" style="font-size: 48px;"></i>', // Social Media Lead Generation
                        '<i class="fas fa-file-alt" style="font-size: 48px;"></i>', // Content Marketing & Lead Magnets
                        '<i class="fas fa-envelope" style="font-size: 48px;"></i>' // Email Marketing & Nurturing
                    );

                    foreach ($methods as $index => $method) :
                        $icon_index = $index % count($method_icons);
                    ?>                    <div class="method-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="method-icon">
                            <?php echo $method_icons[$icon_index]; ?>
                        </div>
                        <div class="method-content">
                            <h3><?php echo esc_html($method['title']); ?></h3>
                            <p><?php echo esc_html($method['description']); ?></p>
                            <ul class="method-features">
                                <?php foreach ($method['features'] as $feature) : ?>
                                    <li><?php echo esc_html($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>        <!-- Lead Generation Success Story -->
        <section class="lead-generation-case-study">
            <div class="section-content">
                <div class="case-study-content animate-on-scroll animate-fade-up">
                    <div class="case-study-text">
                        <span class="case-study-label"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_label', true) ?: 'Success Story'); ?></span>
                        <h2><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_title', true) ?: 'TechFlow Solutions: 450% Lead Increase in 4 Months'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_content', true) ?: 'TechFlow Solutions, a B2B software company, was struggling with inconsistent lead flow and poor lead quality from their existing marketing efforts.'); ?></p>
                        
                        <div class="case-study-challenge">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_challenge_title', true) ?: 'The Challenge'); ?></h3>
                            <ul>
                                <?php
                                $case_challenges = get_post_meta(get_the_ID(), '_lead_generation_case_study_challenges', true);
                                if (empty($case_challenges)) {
                                    $case_challenges = array(
                                        'Only 15-20 qualified leads per month',
                                        'High cost per lead ($350+ average)',
                                        'Long sales cycles with poor follow-up',
                                        'No systematic lead nurturing process'
                                    );
                                }
                                foreach ($case_challenges as $challenge) {
                                    echo '<li>' . esc_html($challenge) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="case-study-solution">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_case_study_solution_title', true) ?: 'Our Solution'); ?></h3>
                            <ul>
                                <?php
                                $case_solutions = get_post_meta(get_the_ID(), '_lead_generation_case_study_solutions', true);
                                if (empty($case_solutions)) {
                                    $case_solutions = array(
                                        'Multi-channel lead generation campaigns',
                                        'High-converting landing page development',
                                        'LinkedIn outreach automation',
                                        'Email nurturing sequence implementation'
                                    );
                                }
                                foreach ($case_solutions as $solution) {
                                    echo '<li>' . esc_html($solution) . '</li>';
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Lead Generation Process -->
        <section class="lead-generation-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_process_title', true) ?: 'Our Lead Generation Process'); ?></h2>
                <div class="process-steps animate-on-scroll animate-stagger animate-fade-up">
                    
                    <?php
                    $process_steps = get_post_meta(get_the_ID(), '_lead_generation_process_steps', true);
                    if (empty($process_steps)) {
                        $process_steps = array(
                            array(
                                'number' => '1',
                                'title' => 'Audience Research & Targeting',
                                'description' => 'Identify your ideal customer profiles and create detailed buyer personas for precise targeting.'
                            ),
                            array(
                                'number' => '2',
                                'title' => 'Lead Magnet Creation',
                                'description' => 'Develop compelling offers and valuable content that your prospects can\'t resist downloading.'
                            ),
                            array(
                                'number' => '3',
                                'title' => 'Multi-Channel Campaign Launch',
                                'description' => 'Deploy coordinated campaigns across search, social, and email channels for maximum reach.'
                            ),
                            array(
                                'number' => '4',
                                'title' => 'Nurturing & Conversion',
                                'description' => 'Implement automated nurturing sequences that guide leads toward becoming customers.'
                            )
                        );
                    }

                    foreach ($process_steps as $step) :
                    ?>                    <div class="process-step">
                        <div class="step-number"><?php echo esc_html($step['number']); ?></div>
                        <div class="step-content">
                            <h3><?php echo esc_html($step['title']); ?></h3>
                            <p><?php echo esc_html($step['description']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>                </div>
                <div class="process-cta animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Start Generating Leads Today</a>
                </div>
            </div>
        </section>        <!-- Lead Generation Types -->
        <section class="lead-generation-types text-center">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_types_title', true) ?: 'Lead Generation Strategies by Business Type'); ?></h2>
                <div class="types-grid animate-on-scroll animate-stagger animate-scale-up">
                    <?php
                    $types = get_post_meta(get_the_ID(), '_lead_generation_types', true);
                    if (empty($types)) {
                        $types = array(
                            array(
                                'title' => 'B2B Lead Generation',
                                'features' => array(
                                    'LinkedIn advertising & outreach',
                                    'Industry-specific content marketing',
                                    'Webinar and event marketing',
                                    'Account-based marketing (ABM)',
                                    'Sales-qualified lead (SQL) optimisation'
                                )
                            ),
                            array(
                                'title' => 'B2C Lead Generation',
                                'features' => array(
                                    'Facebook & Instagram lead ads',
                                    'Google Shopping campaigns',
                                    'Influencer partnerships',
                                    'Contest and giveaway campaigns',
                                    'SMS marketing integration'
                                )
                            ),
                            array(
                                'title' => 'Local Business Lead Generation',
                                'features' => array(
                                    'Google My Business optimisation',
                                    'Local directory submissions',
                                    'Geotargeted advertising',
                                    'Review generation campaigns',
                                    'Local event marketing'
                                )
                            )
                        );
                    }

                    foreach ($types as $type) :
                    ?>
                    <div class="type-card">
                        <h3><?php echo esc_html($type['title']); ?></h3>
                        <ul class="type-features">
                            <?php foreach ($type['features'] as $feature) : ?>
                                <li><?php echo esc_html($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
          <!-- Lead Generation Tools -->
        <section class="lead-generation-tools">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_tools_title', true) ?: 'Lead Generation Tools & Technologies'); ?></h2>
                <div class="tools-grid animate-on-scroll animate-stagger animate-scale-up">
                    
                    <?php
                    $tools = get_post_meta(get_the_ID(), '_lead_generation_tools', true);
                    if (empty($tools)) {
                        $tools = array(
                            array(
                                'title' => 'Analytics & Tracking',
                                'features' => array(
                                    'Google Analytics 4 setup',
                                    'Conversion tracking implementation',
                                    'Lead source attribution',
                                    'ROI measurement dashboards'
                                )
                            ),
                            array(
                                'title' => 'CRM Integration',
                                'features' => array(
                                    'HubSpot integration',
                                    'Salesforce automation',
                                    'Pipedrive setup',
                                    'Custom CRM solutions'
                                )
                            ),
                            array(
                                'title' => 'Landing Page optimisation',
                                'features' => array(
                                    'A/B testing frameworks',
                                    'Heat mapping analysis',
                                    'Form optimisation',
                                    'Mobile responsiveness'
                                )
                            ),
                            array(
                                'title' => 'Email Marketing',
                                'features' => array(
                                    'Automated email sequences',
                                    'Lead nurturing campaigns',
                                    'behavioural email triggers',
                                    'Performance analytics'
                                )
                            )
                        );
                    }

                    $tool_classes = array('analytics', 'crm', 'optimisation', 'automation');
                    
                    foreach ($tools as $index => $tool) :
                        $class_index = $index % count($tool_classes);
                    ?>
                    <div class="tool-card <?php echo esc_attr($tool_classes[$class_index]); ?>">
                        <h3><?php echo esc_html($tool['title']); ?></h3>
                        <ul class="tool-features">
                            <?php foreach ($tool['features'] as $feature) : ?>
                                <li><?php echo esc_html($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </section>        <!-- Lead Generation Testimonial (No Image) -->
        <section class="lead-generation-testimonial text-center">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <blockquote>
                        "<?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_testimonial_quote', true) ?: 'Aimpro Digital completely transformed our lead generation. In just 4 months, we went from 20 leads per month to over 100 high-quality leads. Their multi-channel approach and systematic nurturing process has revolutionized our sales pipeline.'); ?>"
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_testimonial_name', true) ?: 'Sarah Johnson'); ?></h4>
                            <span><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_testimonial_position', true) ?: 'Marketing Director, TechFlow Solutions'); ?></span>
                            <div class="author-company"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_testimonial_company', true) ?: 'B2B Software Company'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="lead-generation-cta text-center">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_cta_title', true) ?: 'Ready to Generate More Qualified Leads?'); ?></h2>
                <p class="animate-on-scroll animate-fade-up animate-delay-200"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_cta_subtitle', true) ?: 'Let\'s create a custom lead generation strategy that fills your sales pipeline with high-quality prospects.'); ?></p>
                <div class="cta-buttons animate-on-scroll animate-scale-up animate-delay-400">
                    <a href="<?php echo esc_url(home_url(get_post_meta(get_the_ID(), '_lead_generation_cta_primary_url', true) ?: '/contact')); ?>" class="btn btn-primary"><?php echo esc_html(get_post_meta(get_the_ID(), '_lead_generation_cta_primary_text', true) ?: 'Get Free Lead Generation Audit'); ?></a>
                </div>
                <div class="cta-benefits animate-on-scroll animate-stagger animate-fade-up">
                    <?php
                    $benefits = get_post_meta(get_the_ID(), '_lead_generation_cta_benefits', true);
                    if (empty($benefits)) {                        $benefits = array(
                            '<i class="fas fa-check" aria-hidden="true"></i> Custom lead generation strategy',
                            '<i class="fas fa-check" aria-hidden="true"></i> Multi-channel campaign setup',
                            '<i class="fas fa-check" aria-hidden="true"></i> CRM integration included'
                        );
                    }
                    foreach ($benefits as $benefit) {
                        echo '<span class="benefit">' . esc_html($benefit) . '</span>';
                    }
                    ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

<style>
/* Mobile optimizations for lead generation page */
@media (max-width: 768px) {
    /* Lead Generation Methods Grid - Mobile Layout */
    .methods-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .method-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .method-icon {
        margin-bottom: 1rem;
    }
    
    .method-icon i {
        font-size: 2.5rem !important;
        color: #007bff;
    }
    
    .method-card h3 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        color: #212529;
        line-height: 1.3;
    }
    
    .method-card p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    
    .method-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .method-features li {
        font-size: 0.85rem;
        color: #495057;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e9ecef;
        line-height: 1.4;
    }
    
    .method-features li:last-child {
        border-bottom: none;
    }
    
    /* Lead Generation Types Grid - Mobile Layout */
    .types-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .type-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    
    .type-card h3 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
        color: #212529;
    }
    
    .type-features {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .type-features li {
        font-size: 0.85rem;
        color: #495057;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e9ecef;
        line-height: 1.4;
    }
    
    .type-features li:last-child {
        border-bottom: none;
    }
    
    /* Lead Generation Tools Grid - Mobile Layout */
    .lead-generation-tools .tools-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
        margin-top: 1.5rem !important;
    }
    
    .lead-generation-tools .tool-card {
        background: #f8f9fa !important;
        border: 1px solid #e9ecef !important;
        border-radius: 8px !important;
        padding: 1.5rem !important;
        text-align: center !important;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05) !important;
        width: 100% !important;
        max-width: 100% !important;
        display: block !important;
        float: none !important;
    }
    
    .lead-generation-tools .tool-card.analytics,
    .lead-generation-tools .tool-card.crm,
    .lead-generation-tools .tool-card.optimisation,
    .lead-generation-tools .tool-card.automation {
        background: #f8f9fa !important;
        border: 1px solid #e9ecef !important;
        border-radius: 8px !important;
        padding: 1.5rem !important;
        text-align: center !important;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05) !important;
        width: 100% !important;
        max-width: 100% !important;
        display: block !important;
        float: none !important;
        margin-bottom: 1.5rem !important;
    }
    
    .lead-generation-tools .tool-card h3 {
        font-size: 1.25rem !important;
        margin-bottom: 1rem !important;
        color: #212529 !important;
        line-height: 1.3 !important;
    }
    
    .lead-generation-tools .tool-features {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    
    .lead-generation-tools .tool-features li {
        font-size: 0.85rem !important;
        color: #495057 !important;
        padding: 0.5rem 0 !important;
        border-bottom: 1px solid #e9ecef !important;
        line-height: 1.4 !important;
        text-align: left !important;
        position: relative !important;
    }
    
    .lead-generation-tools .tool-features li:before {
        display: none !important; /* Hide bullet icons on mobile */
    }
    
    .lead-generation-tools .tool-features li:last-child {
        border-bottom: none !important;
    }
    
    /* Hide any bullet point icons on mobile for all feature lists */
    .method-features li:before,
    .type-features li:before,
    .tool-features li:before {
        display: none !important;
    }
    
    /* CTA Buttons - Mobile Layout with Orange Theme */
    .lead-generation-cta .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin: 1.5rem 0;
    }
    
    .lead-generation-cta .btn {
        width: 100%;
        padding: 0.875rem 1.5rem;
        text-align: center;
        font-weight: 600;
        border-radius: 6px;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .lead-generation-cta .btn-primary {
        background: #ff6b35 !important; /* Orange primary button */
        color: white !important;
        border: 2px solid #ff6b35 !important;
    }
    
    .lead-generation-cta .btn-primary:hover {
        background: #e55a2b !important; /* Darker orange on hover */
        border-color: #e55a2b !important;
        color: white !important;
    }
    
    .lead-generation-cta .btn-secondary {
        background: transparent !important;
        color: #ff6b35 !important; /* Orange text */
        border: 2px solid #ff6b35 !important; /* Orange border */
    }
    
    .lead-generation-cta .btn-secondary:hover {
        background: #ff6b35 !important; /* Orange background on hover */
        color: white !important;
    }
    .process-steps {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }
    
    .process-step {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        display: flex;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .step-number {
        background: #007bff;
        color: white;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.1rem;
        flex-shrink: 0;
    }
    
    .step-content h3 {
        font-size: 1.1rem;
        margin-bottom: 0.5rem;
        color: #212529;
    }
    
    .step-content p {
        font-size: 0.9rem;
        color: #6c757d;
        line-height: 1.5;
        margin: 0;
    }
    
    /* CTA Buttons - Mobile Layout */
    .lead-generation-cta .cta-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin: 1.5rem 0;
    }
    
    .lead-generation-cta .btn {
        width: 100%;
        padding: 0.875rem 1.5rem;
        text-align: center;
        font-weight: 600;
        border-radius: 6px;
        font-size: 0.9rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .lead-generation-cta .btn-primary {
        background: #007bff;
        color: white !important;
        border: 2px solid #007bff;
    }
    
    .lead-generation-cta .btn-primary:hover {
        background: #0056b3;
        border-color: #0056b3;
    }
    
    .lead-generation-cta .btn-secondary {
        background: transparent;
        color: #007bff !important;
        border: 2px solid #007bff;
    }
    
    .lead-generation-cta .btn-secondary:hover {
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
    
    /* Overview CTA Buttons - Mobile with Orange Theme */
    .overview-cta-btn,
    .process-cta-btn {
        width: 100%;
        padding: 0.875rem 1.5rem;
        text-align: center;
        font-weight: 600;
        border-radius: 6px;
        font-size: 0.9rem;
        text-decoration: none;
        background: #ff6b35 !important; /* Orange background */
        color: white !important;
        border: 2px solid #ff6b35 !important;
        transition: all 0.3s ease;
        margin-top: 1rem;
        display: inline-block;
    }
    
    .overview-cta-btn:hover,
    .process-cta-btn:hover {
        background: #e55a2b !important; /* Darker orange on hover */
        border-color: #e55a2b !important;
        color: white !important;
    }
    
    /* Overview Image - Mobile */
    .overview-image {
        margin-top: 2rem;
        text-align: center;
    }
    
    .overview-image .image-wrapper {
        margin-bottom: 1rem;
    }
    
    .overview-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
}

@media (min-width: 769px) and (max-width: 1024px) {
    /* Tablet Layout - 2x2 grid for most sections */
    .methods-grid,
    .tools-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .types-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }
    
    .method-card,
    .type-card,
    .tool-card {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
}
</style>

