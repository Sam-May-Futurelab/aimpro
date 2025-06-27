<?php
/**
 * Template Name: Events & Webinars Page
 * Description: Upcoming events, webinars, and workshops
 */

get_header();

// Get meta values
$header_title = get_post_meta(get_the_ID(), '_events_webinars_header_title', true) ?: 'Events & Webinars';
$header_subtitle = get_post_meta(get_the_ID(), '_events_webinars_header_subtitle', true) ?: 'Join industry experts and expand your digital marketing knowledge';
$intro_title = get_post_meta(get_the_ID(), '_events_webinars_intro_title', true) ?: 'Learn from Industry Leaders';
$intro_content = get_post_meta(get_the_ID(), '_events_webinars_intro_content', true) ?: 'Stay ahead of the curve with our regular webinars, workshops, and industry events. Learn the latest strategies, network with peers, and get your questions answered by digital marketing experts.';

$stats = get_post_meta(get_the_ID(), '_events_webinars_stats', true);
if (empty($stats)) {
    $stats = array(
        array('number' => '50+', 'label' => 'Events Hosted'),
        array('number' => '5,000+', 'label' => 'Attendees'),
        array('number' => '25+', 'label' => 'Expert Speakers')
    );
}

$featured_event = get_post_meta(get_the_ID(), '_events_webinars_featured_event', true);
if (empty($featured_event)) {
    $featured_event = array(
        'badge' => 'Next Event',
        'date' => 'June 25, 2025',
        'time' => '2:00 PM - 3:30 PM GMT',
        'type' => 'Live Webinar',
        'title' => 'Digital Marketing Trends 2025: What\'s Coming Next',
        'description' => 'Join our panel of industry experts as they reveal the biggest digital marketing trends for the second half of 2025. Learn about emerging technologies, changing consumer behaviours, and the strategies that will define successful marketing campaigns.',
        'speakers' => array(
            array('name' => 'Sarah Johnson', 'title' => 'CMO, Aimpro Digital'),
            array('name' => 'Alex Chen', 'title' => 'Digital Strategy Consultant'),
            array('name' => 'Emma Davis', 'title' => 'Analytics Expert, Google')
        ),
        'agenda' => array(
            'AI and machine learning in marketing automation',
            'Privacy-first marketing strategies',
            'Voice search optimisation techniques',
            'Video marketing trends and best practices',
            'Cross-platform attribution modeling'
        ),
        'price' => 'Free Event',
        'seats' => '42 seats remaining',
        'register_url' => '#'
    );
}

$upcoming_events = get_post_meta(get_the_ID(), '_events_webinars_upcoming_events', true);
if (empty($upcoming_events)) {
    $upcoming_events = array(
        array(
            'month' => 'Jul', 'day' => '15', 'time' => '10:00 AM - 11:30 AM', 'format' => 'Workshop',
            'title' => 'Advanced Google Ads optimisation',
            'description' => 'Hands-on workshop covering advanced Google Ads strategies, including Smart Bidding, audience optimisation, and campaign automation.',
            'attendees' => '156 registered', 'price' => '£49', 'register_url' => '#'
        ),
        array(
            'month' => 'Jul', 'day' => '28', 'time' => '2:00 PM - 3:00 PM', 'format' => 'Webinar',
            'title' => 'Local SEO for Small Businesses',
            'description' => 'Essential local SEO strategies to help small businesses dominate local search results and attract more customers.',
            'attendees' => '89 registered', 'price' => 'Free', 'register_url' => '#'
        ),
        array(
            'month' => 'Aug', 'day' => '12', 'time' => '1:00 PM - 4:00 PM', 'format' => 'Masterclass',
            'title' => 'Content Marketing Masterclass',
            'description' => 'Comprehensive masterclass covering content strategy, creation, distribution, and performance measurement for maximum ROI.',
            'attendees' => '12 spots left', 'price' => '£149', 'register_url' => '#'
        ),
        array(
            'month' => 'Aug', 'day' => '25', 'time' => '11:00 AM - 12:00 PM', 'format' => 'Webinar',
            'title' => 'E-commerce Marketing Automation',
            'description' => 'Learn how to set up automated marketing funnels that increase sales, improve customer retention, and save time.',
            'attendees' => 'Early bird', 'price' => 'Free', 'register_url' => '#'
        ),
        array(
            'month' => 'Sep', 'day' => '08', 'time' => '9:00 AM - 5:00 PM', 'format' => 'Conference',
            'title' => 'Digital Marketing Summit 2025',
            'description' => 'Full-day conference featuring 12 speakers, networking sessions, and hands-on workshops covering all aspects of digital marketing.',
            'attendees' => '250 expected', 'price' => '£299', 'register_url' => '#'
        ),
        array(
            'month' => 'Sep', 'day' => '22', 'time' => '3:00 PM - 4:30 PM', 'format' => 'Panel Discussion',
            'title' => 'The Future of Social Media Marketing',
            'description' => 'Panel discussion with social media experts discussing emerging platforms, algorithm changes, and content strategies.',
            'attendees' => 'Coming soon', 'price' => 'Free', 'register_url' => '#'
        )
    );
}

$ondemand_title = get_post_meta(get_the_ID(), '_events_webinars_ondemand_title', true) ?: 'On-Demand Webinars';
$ondemand_subtitle = get_post_meta(get_the_ID(), '_events_webinars_ondemand_subtitle', true) ?: 'Missed a live event? Watch our recorded sessions at your convenience.';
$ondemand_webinars = get_post_meta(get_the_ID(), '_events_webinars_ondemand_webinars', true);
if (empty($ondemand_webinars)) {
    $ondemand_webinars = array(
        array(
            'title' => 'SEO Fundamentals for 2025',
            'description' => 'Complete guide to search engine optimisation, covering technical SEO, content optimisation, and link building strategies.',
            'duration' => '52 min',
            'views' => '1,240 views',
            'rating' => '★★★★★ 4.8',
            'video_url' => '',
            'thumbnail_url' => ''
        ),
        array(
            'title' => 'Facebook Ads Mastery Workshop',
            'description' => 'Advanced Facebook advertising strategies including audience targeting, creative optimisation, and campaign scaling techniques.',
            'duration' => '1h 15m',
            'views' => '890 views',
            'rating' => '★★★★★ 4.9',
            'video_url' => '',
            'thumbnail_url' => ''
        ),        array(
            'title' => 'Google Analytics 4 Deep Dive',
            'description' => 'Comprehensive walkthrough of GA4 setup, configuration, and advanced reporting for better marketing insights.',
            'duration' => '38 min',
            'views' => '2,100 views',
            'rating' => '★★★★☆ 4.6',
            'video_url' => '',
            'thumbnail_url' => ''
        ),
        array(
            'title' => 'Content Marketing Strategy 2025',
            'description' => 'Effective content planning, creation, and distribution strategies to engage audiences and drive conversions.',
            'duration' => '1h 8m',
            'views' => '1,650 views',
            'rating' => '★★★★★ 4.7',
            'video_url' => '',
            'thumbnail_url' => ''
        )
    );
}

$categories_title = get_post_meta(get_the_ID(), '_events_webinars_categories_title', true) ?: 'Event Types';
$event_categories = get_post_meta(get_the_ID(), '_events_webinars_categories', true);
if (empty($event_categories)) {
    $event_categories = array(
        array(
            'icon' => 'fas fa-crosshairs',
            'title' => 'Strategy Webinars',
            'description' => 'High-level strategic discussions about digital marketing trends, best practices, and industry insights.',
            'frequency' => 'Monthly'
        ),
        array(
            'icon' => 'fas fa-tools',
            'title' => 'Technical Workshops',
            'description' => 'Hands-on sessions focusing on specific tools, platforms, and technical implementation guides.',
            'frequency' => 'Bi-weekly'
        ),        array(
            'icon' => 'fas fa-users',
            'title' => 'Panel Discussions',
            'description' => 'Expert panels featuring industry leaders discussing current challenges and opportunities.',
            'frequency' => 'Quarterly'
        ),
        array(
            'icon' => 'fas fa-graduation-cap',
            'title' => 'Masterclasses',
            'description' => 'In-depth training sessions covering comprehensive topics with practical exercises and Q&A.',
            'frequency' => 'Monthly'
        )
    );
}

$newsletter_title = get_post_meta(get_the_ID(), '_events_webinars_newsletter_title', true) ?: 'Never Miss an Event';
$newsletter_content = get_post_meta(get_the_ID(), '_events_webinars_newsletter_content', true) ?: 'Get notified about upcoming webinars, workshops, and exclusive invitations to premium events.';
?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/resources'); ?>">Resources</a>
                <span class="separator">›</span>
                <span class="current">Events & Webinars</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header animate-on-scroll animate-fade-up">
            <div class="page-header-content">
                <h1><?php echo esc_html($header_title); ?></h1>
                <p class="page-subtitle"><?php echo esc_html($header_subtitle); ?></p>
            </div>
        </section>        <!-- Events Introduction -->
        <section class="events-intro animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="intro-content animate-on-scroll animate-slide-left">
                    <h2><?php echo esc_html($intro_title); ?></h2>
                    <p><?php echo esc_html($intro_content); ?></p>
                </div>
                <div class="event-stats animate-on-scroll animate-slide-right">
                    <?php foreach ($stats as $stat): ?>
                        <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="stat-number"><?php echo esc_html($stat['number']); ?></div>
                            <div class="stat-label"><?php echo esc_html($stat['label']); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Featured Upcoming Event -->
        <section class="featured-event animate-on-scroll animate-fade-up">
            <div class="section-content">
                <div class="event-featured animate-on-scroll animate-slide-up">
                    <div class="event-badge"><?php echo esc_html($featured_event['badge']); ?></div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span class="event-date"><?php echo esc_html($featured_event['date']); ?></span>
                            <span class="event-time"><?php echo esc_html($featured_event['time']); ?></span>
                            <span class="event-type"><?php echo esc_html($featured_event['type']); ?></span>
                        </div>
                        <h2><?php echo esc_html($featured_event['title']); ?></h2>
                        <p class="event-description"><?php echo esc_html($featured_event['description']); ?></p>
                          <?php if (!empty($featured_event['speakers']) && is_array($featured_event['speakers'])): ?>
                        <div class="event-speakers animate-on-scroll animate-fade-up">
                            <h3>Featured Speakers</h3>
                            <div class="speakers-list">
                                <?php foreach ($featured_event['speakers'] as $speaker): ?>
                                    <?php if (is_array($speaker) && isset($speaker['name']) && isset($speaker['title'])): ?>
                                    <div class="speaker">
                                        <div class="speaker-info">
                                            <h4><?php echo esc_html($speaker['name']); ?></h4>
                                            <span><?php echo esc_html($speaker['title']); ?></span>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <?php if (!empty($featured_event['agenda'])): ?>
                        <div class="event-agenda animate-on-scroll animate-fade-up">
                            <h3>What You'll Learn</h3>
                            <ul>
                                <?php foreach ($featured_event['agenda'] as $item): ?>
                                    <li><?php echo esc_html($item); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <div class="event-registration">
                            <div class="registration-info">
                                <span class="price"><?php echo esc_html($featured_event['price']); ?></span>
                                <span class="seats"><?php echo esc_html($featured_event['seats']); ?></span>
                            </div>
                            <a href="<?php echo home_url('/contact'); ?>" class="register-btn">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- Upcoming Events -->
        <?php if (!empty($upcoming_events)): ?>
        <section class="upcoming-events animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Upcoming Events</h2>
                <div class="events-grid animate-on-scroll animate-fade-up">
                    <?php foreach ($upcoming_events as $event): ?>
                        <div class="event-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="event-date-badge">
                                <div class="month"><?php echo esc_html($event['month']); ?></div>
                                <div class="day"><?php echo esc_html($event['day']); ?></div>
                            </div>
                            <div class="event-content">
                                <div class="event-meta">
                                    <span class="event-time"><?php echo esc_html($event['time']); ?></span>
                                    <span class="event-format"><?php echo esc_html($event['format']); ?></span>
                                </div>
                                <h3><?php echo esc_html($event['title']); ?></h3>
                                <p><?php echo esc_html($event['description']); ?></p>
                                <div class="event-details">
                                    <span class="attendees"><?php echo esc_html($event['attendees']); ?></span>
                                    <span class="price"><?php echo esc_html($event['price']); ?></span>
                                </div>
                                <a href="<?php echo home_url('/contact'); ?>" class="event-register">Register</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>        <!-- Past Events / On-Demand -->
        <?php if (!empty($ondemand_webinars)): ?>
        <section class="past-events animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($ondemand_title); ?></h2>
                <p class="section-subtitle animate-on-scroll animate-fade-up"><?php echo esc_html($ondemand_subtitle); ?></p>
                
                <div class="on-demand-grid animate-on-scroll animate-fade-up">
                    <?php foreach ($ondemand_webinars as $index => $webinar): ?>
                        <div class="on-demand-event animate-on-scroll animate-stagger animate-fade-up">
                            <div class="event-thumbnail">
                                <?php if (!empty($webinar['video_url'])): ?>
                                    <?php
                                    // Convert YouTube URL to embed format
                                    $video_url = $webinar['video_url'];
                                    $embed_url = '';
                                    
                                    if (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'youtu.be') !== false) {
                                        preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $video_url, $matches);
                                        if (isset($matches[1])) {
                                            $embed_url = 'https://www.youtube.com/embed/' . $matches[1];
                                        }
                                    } elseif (strpos($video_url, 'vimeo.com') !== false) {
                                        $video_id = substr(parse_url($video_url, PHP_URL_PATH), 1);
                                        $embed_url = 'https://player.vimeo.com/video/' . $video_id;
                                    }
                                    
                                    if ($embed_url): ?>
                                        <iframe width="100%" height="200" src="<?php echo esc_url($embed_url); ?>" frameborder="0" allowfullscreen></iframe>
                                    <?php else: ?>
                                        <div class="video-placeholder">
                                            <i class="fas fa-video"></i>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="video-placeholder">
                                        <i class="fas fa-video"></i>
                                    </div>
                                <?php endif; ?>
                                <div class="duration"><?php echo esc_html($webinar['duration']); ?></div>
                            </div>
                            <div class="event-info">
                                <h3><?php echo esc_html($webinar['title']); ?></h3>
                                <p><?php echo esc_html($webinar['description']); ?></p>
                                <div class="on-demand-event-stats">
                                    <span class="views"><?php echo esc_html($webinar['views']); ?></span>
                                    <span class="rating"><?php echo esc_html($webinar['rating']); ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>        <!-- Event Categories - 4 in a row styling -->
        <?php if (!empty($event_categories)): ?>
        <section class="event-categories animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($categories_title); ?></h2>
                <div class="categories-grid categories-grid-four animate-on-scroll animate-fade-up">                    <?php foreach ($event_categories as $category): ?>
                        <div class="category-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3><?php echo esc_html($category['title']); ?></h3>
                            <p><?php echo esc_html($category['description']); ?></p>
                            <span class="category-frequency"><?php echo esc_html($category['frequency']); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>        <!-- Newsletter & Updates -->
        <section class="events-newsletter animate-on-scroll animate-fade-up">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($newsletter_title); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo esc_html($newsletter_content); ?></p>
                <form class="newsletter-form animate-on-scroll animate-fade-up" id="newsletter-form">
                    <div class="form-group">
                        <input type="text" name="subscriber_name" placeholder="Enter your name" required>
                        <input type="email" name="subscriber_email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary">
                            <span class="button-text">Get Event Updates</span>
                            <span class="button-spinner" style="display: none;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-dasharray="31.416" stroke-dashoffset="31.416">
                                        <animate attributeName="stroke-dasharray" dur="2s" values="0 31.416;15.708 15.708;0 31.416" repeatCount="indefinite"/>
                                        <animate attributeName="stroke-dashoffset" dur="2s" values="0;-15.708;-31.416" repeatCount="indefinite"/>
                                    </circle>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
                
                <?php include get_template_directory() . '/includes/newsletter-popup.php'; ?>
            </div>        </section>    </div>
</main>

<!-- Mobile Responsive Styles for Events & Webinars Page -->
<style>
/* Mobile optimizations for events and webinars page */
@media (max-width: 768px) {
    /* Page header mobile optimization */
    .page-header-content {
        text-align: center !important;
        padding: 1.5rem 1rem !important;
    }
    
    .page-header-content h1 {
        font-size: 2rem !important;
        margin-bottom: 1rem !important;
    }
    
    .page-subtitle {
        font-size: 1rem !important;
        line-height: 1.4 !important;
    }
    
    /* Hide events intro section completely on mobile */
    .events-intro {
        display: none !important;
    }
    
    /* Events intro section mobile optimization (keeping for reference) */
    .events-intro .section-content {
        display: flex !important;
        flex-direction: column !important;
        gap: 2rem !important;
        padding: 1.5rem 1rem !important;
    }
    
    .intro-content {
        text-align: center !important;
        order: 1 !important;
    }
    
    .intro-content h2 {
        font-size: 1.8rem !important;
        margin-bottom: 1rem !important;
        color: #333 !important;
        line-height: 1.3 !important;
    }
    
    .intro-content p {
        font-size: 1rem !important;
        line-height: 1.5 !important;
        color: #666 !important;
        margin-bottom: 1.5rem !important;
    }
    
    .event-stats {
        display: grid !important;
        grid-template-columns: repeat(3, 1fr) !important;
        gap: 1rem !important;
        order: 2 !important;
        margin-top: 1rem !important;
    }
    
    .event-stats .stat-item {
        background: #f8f9fa !important;
        border: 1px solid #e9ecef !important;
        border-radius: 12px !important;
        padding: 1.5rem 1rem !important;
        text-align: center !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
    }
    
    .event-stats .stat-number {
        font-size: 1.8rem !important;
        font-weight: 700 !important;
        color: #f15a25 !important;
        margin-bottom: 0.5rem !important;
        line-height: 1 !important;
    }
    
    .event-stats .stat-label {
        font-size: 0.85rem !important;
        color: #6c757d !important;
        font-weight: 500 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.3px !important;
    }
    
    /* Featured event mobile optimization */
    .featured-event .section-content {
        padding: 1.5rem 1rem !important;
    }
    
    .event-featured {
        background: #f8f9fa !important;
        border: 1px solid #e9ecef !important;
        border-radius: 12px !important;
        padding: 1.5rem !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
    }
    
    .event-badge {
        display: none !important; /* Hide Next Event badge on mobile */
    }
    
    .event-content .event-meta {
        display: flex !important;
        flex-direction: column !important;
        gap: 0.5rem !important;
        margin-bottom: 1rem !important;
        padding: 1rem !important;
        background: white !important;
        border-radius: 8px !important;
        border: 1px solid #e9ecef !important;
    }
    
    .event-date {
        font-size: 1rem !important;
        font-weight: 600 !important;
        color: #333 !important;
    }
    
    .event-time {
        font-size: 0.9rem !important;
        color: #666 !important;
        font-weight: 500 !important;
    }
    
    .event-type {
        background: #f15a25 !important;
        color: white !important;
        padding: 0.25rem 0.75rem !important;
        border-radius: 20px !important;
        font-size: 0.8rem !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        display: inline-block !important;
        align-self: flex-start !important;
    }
    
    .featured-event h2 {
        font-size: 1.5rem !important;
        line-height: 1.3 !important;
        margin-bottom: 1rem !important;
        color: #333 !important;
        font-weight: 600 !important;
    }
    
    .event-description {
        font-size: 1rem !important;
        line-height: 1.5 !important;
        color: #666 !important;
        margin-bottom: 1.5rem !important;
    }
    
    .event-speakers {
        margin-bottom: 1.5rem !important;
    }
    
    .event-speakers h3 {
        font-size: 1.1rem !important;
        margin-bottom: 0.75rem !important;
        color: #333 !important;
        font-weight: 600 !important;
    }
    
    .speakers-list {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 0.75rem !important;
    }
    
    .speaker {
        background: white !important;
        border: 1px solid #e9ecef !important;
        border-radius: 8px !important;
        padding: 1rem !important;
    }
    
    .speaker-info h4 {
        font-size: 1rem !important;
        margin-bottom: 0.25rem !important;
        color: #333 !important;
        font-weight: 600 !important;
    }
    
    .speaker-info span {
        font-size: 0.9rem !important;
        color: #666 !important;
    }
    
    .event-agenda {
        margin-bottom: 1.5rem !important;
    }
    
    .event-agenda h3 {
        font-size: 1.1rem !important;
        margin-bottom: 0.75rem !important;
        color: #333 !important;
        font-weight: 600 !important;
    }
    
    .event-agenda ul {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    
    .event-agenda li {
        font-size: 0.9rem !important;
        color: #666 !important;
        padding: 0.5rem 0 !important;
        border-bottom: 1px solid #e9ecef !important;
        position: relative !important;
        padding-left: 1.5rem !important;
    }
    
    .event-agenda li:before {
        content: "✓" !important;
        position: absolute !important;
        left: 0 !important;
        color: #f15a25 !important;
        font-weight: bold !important;
    }
    
    .event-agenda li:last-child {
        border-bottom: none !important;
    }
    
    .event-registration {
        background: white !important;
        border: 1px solid #e9ecef !important;
        border-radius: 8px !important;
        padding: 1rem !important;
        display: flex !important;
        flex-direction: column !important;
        gap: 1rem !important;
    }
    
    .registration-info {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        flex-wrap: wrap !important;
        gap: 0.5rem !important;
    }
    
    .registration-info .price {
        font-size: 1.1rem !important;
        font-weight: 700 !important;
        color: #f15a25 !important;
    }
    
    .registration-info .seats {
        font-size: 0.9rem !important;
        color: #666 !important;
        background: rgba(241, 90, 37, 0.1) !important;
        padding: 0.25rem 0.5rem !important;
        border-radius: 4px !important;
    }
    
    .register-btn {
        width: 100% !important;
        text-align: center !important;
        padding: 0.875rem 1.5rem !important;
        background: #f15a25 !important;
        color: white !important;
        text-decoration: none !important;
        border-radius: 8px !important;
        font-weight: 600 !important;
        font-size: 1rem !important;
        transition: all 0.3s ease !important;
        display: block !important;
    }
    
    .register-btn:hover {
        background: #d14619 !important;
        transform: translateY(-2px) !important;
    }
    
    /* Event categories mobile optimization */
    .event-categories .section-content {
        padding: 1.5rem 1rem !important;
    }
    
    .categories-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
        margin-top: 1.5rem !important;
    }
    
    .category-card {
        background: #f8f9fa !important;
        border: 1px solid #e9ecef !important;
        border-radius: 12px !important;
        padding: 1.5rem !important;
        text-align: center !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
        transition: transform 0.3s ease !important;
    }
    
    .category-card:hover {
        transform: translateY(-4px) !important;
        box-shadow: 0 8px 25px rgba(0,0,0,0.12) !important;
    }
    
    .category-card h3 {
        font-size: 1.25rem !important;
        margin-bottom: 0.75rem !important;
        color: #333 !important;
        font-weight: 600 !important;
    }
    
    .category-card p {
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        color: #666 !important;
        margin-bottom: 1rem !important;
    }
    
    .category-frequency {
        background: #f15a25 !important;
        color: white !important;
        padding: 0.5rem 1rem !important;
        border-radius: 20px !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        display: inline-block !important;
    }
        font-size: 1rem !important;
        line-height: 1.4 !important;
    }
    
    /* Events grid mobile optimization */
    .events-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
        padding: 1rem !important;
    }
    
    .event-card {
        width: 100% !important;
        display: flex !important;
        flex-direction: column !important;
        background: var(--glass-bg) !important;
        border: var(--glass-border) !important;
        border-radius: 15px !important;
        padding: 0 !important;
        overflow: hidden !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1) !important;
        margin-bottom: 1rem !important;
    }
    
    .event-date-badge {
        position: relative !important;
        top: auto !important;
        left: auto !important;
        background: var(--primary-orange) !important;
        color: white !important;
        padding: 1rem !important;
        text-align: center !important;
        width: 100% !important;
        border-radius: 0 !important;
        margin: 0 !important;
        transform: none !important;
    }
    
    .event-date-badge .month {
        font-size: 0.9rem !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        margin-bottom: 0.25rem !important;
    }
    
    .event-date-badge .day {
        font-size: 1.8rem !important;
        font-weight: 700 !important;
        line-height: 1 !important;
    }
    
    .event-content {
        padding: 1.5rem 1rem !important;
        width: 100% !important;
    }
    
    .event-meta {
        display: flex !important;
        flex-direction: column !important;
        gap: 0.5rem !important;
        margin-bottom: 1rem !important;
        align-items: flex-start !important;
    }
    
    .event-time {
        font-size: 0.9rem !important;
        color: var(--text-secondary) !important;
        font-weight: 500 !important;
    }
    
    .event-format {
        background: var(--primary-orange) !important;
        color: white !important;
        padding: 0.25rem 0.75rem !important;
        border-radius: 20px !important;
        font-size: 0.8rem !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        align-self: flex-start !important;
    }
    
    .event-card h3 {
        font-size: 1.2rem !important;
        line-height: 1.3 !important;
        margin-bottom: 0.75rem !important;
        color: var(--text-primary) !important;
        font-weight: 600 !important;
    }
    
    .event-card p {
        font-size: 0.9rem !important;
        line-height: 1.5 !important;
        color: var(--text-secondary) !important;
        margin-bottom: 1rem !important;
    }
    
    .event-details {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        margin-bottom: 1.5rem !important;
        flex-wrap: wrap !important;
        gap: 0.5rem !important;
    }
    
    .attendees {
        font-size: 0.8rem !important;
        color: var(--text-secondary) !important;
        background: rgba(var(--primary-orange-rgb), 0.1) !important;
        padding: 0.25rem 0.5rem !important;
        border-radius: 4px !important;
    }
    
    .event-details .price {
        font-size: 1rem !important;
        font-weight: 700 !important;
        color: var(--primary-orange) !important;
    }
    
    .event-register {
        width: 100% !important;
        text-align: center !important;
        padding: 0.75rem 1rem !important;
        background: var(--primary-orange) !important;
        color: white !important;
        text-decoration: none !important;
        border-radius: 8px !important;
        font-weight: 600 !important;
        font-size: 0.9rem !important;
        transition: all 0.3s ease !important;
        display: block !important;
    }
    
    .event-register:hover {
        background: var(--primary-orange-dark) !important;
        transform: translateY(-2px) !important;
    }
    
    /* Featured event mobile optimization */
    .featured-event {
        flex-direction: column !important;
        gap: 2rem !important;
        padding: 1.5rem 1rem !important;
    }
    
    .featured-event-content {
        text-align: center !important;
        order: 2 !important;
    }
    
    .featured-event-image {
        order: 1 !important;
        width: 100% !important;
    }
    
    /* On-demand grid mobile optimization */
    .on-demand-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
    }
    
    .on-demand-event {
        padding: 1rem !important;
    }
    
    .event-thumbnail {
        margin-bottom: 1rem !important;
    }
    
    .event-thumbnail iframe {
        height: 180px !important;
    }
    
    /* Stats grid mobile optimization */
    .stats-grid {
        display: grid !important;
        grid-template-columns: repeat(3, 1fr) !important;
        gap: 1rem !important;
        margin: 2rem 0 !important;
    }
    
    .stat-item {
        text-align: center !important;
        padding: 1rem 0.5rem !important;
    }
    
    .stat-number {
        font-size: 1.5rem !important;
        margin-bottom: 0.25rem !important;
    }
    
    .stat-label {
        font-size: 0.8rem !important;
    }
    
    /* Newsletter form mobile optimization */
    .newsletter-form .form-group {
        flex-direction: column !important;
        gap: 0.75rem !important;
    }
    
    .newsletter-form input {
        width: 100% !important;
        margin-bottom: 0.5rem !important;
    }
    
    .newsletter-form button {
        width: 100% !important;
        padding: 0.75rem !important;
    }
    
    /* Event categories mobile optimization */
    .event-categories-grid {
        grid-template-columns: 1fr !important;
        gap: 1.5rem !important;
        padding: 1rem !important;
    }
    
    .event-category {
        padding: 1.5rem 1rem !important;
        text-align: center !important;
        background: var(--glass-bg) !important;
        border: var(--glass-border) !important;
        border-radius: 15px !important;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1) !important;
        margin-bottom: 1rem !important;
        width: 100% !important;
    }
    
    .event-category h3 {
        font-size: 1.2rem !important;
        margin-bottom: 0.75rem !important;
        color: var(--text-primary) !important;
        font-weight: 600 !important;
    }
    
    .event-category p {
        font-size: 0.9rem !important;
        line-height: 1.5 !important;
        color: var(--text-secondary) !important;
        margin-bottom: 1rem !important;
    }
    
    .category-frequency {
        background: var(--primary-orange) !important;
        color: white !important;
        padding: 0.4rem 1rem !important;
        border-radius: 20px !important;
        font-size: 0.8rem !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        display: inline-block !important;
    }
}

@media (max-width: 480px) {
    .events-grid {
        padding: 0.5rem !important;
    }
    
    .event-content {
        padding: 1rem 0.75rem !important;
    }
    
    .event-card h3 {
        font-size: 1.1rem !important;
    }
    
    .event-card p {
        font-size: 0.85rem !important;
    }
    
    .stats-grid {
        grid-template-columns: 1fr !important;
        gap: 1rem !important;
    }
    
    .page-header-content h1 {
        font-size: 1.6rem !important;
    }
    
    .event-date-badge {
        padding: 0.75rem !important;
    }
    
    .event-date-badge .day {
        font-size: 1.5rem !important;
    }
}
</style>

<?php get_footer(); ?>
