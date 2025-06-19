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
                          <?php if (!empty($featured_event['speakers'])): ?>
                        <div class="event-speakers animate-on-scroll animate-fade-up">
                            <h3>Featured Speakers</h3>
                            <div class="speakers-list">
                                <?php foreach ($featured_event['speakers'] as $speaker): ?>
                                    <div class="speaker">
                                        <div class="speaker-info">
                                            <h4><?php echo esc_html($speaker['name']); ?></h4>
                                            <span><?php echo esc_html($speaker['title']); ?></span>
                                        </div>
                                    </div>
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
                            <a href="<?php echo esc_url($featured_event['register_url']); ?>" class="register-btn">Register Now</a>
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
                                <a href="<?php echo esc_url($event['register_url']); ?>" class="event-register">Register</a>
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
                    <?php foreach ($ondemand_webinars as $webinar): ?>
                        <div class="on-demand-event animate-on-scroll animate-stagger animate-fade-up">
                            <div class="event-thumbnail">
                                <?php if (!empty($webinar['thumbnail_url'])): ?>
                                    <img src="<?php echo esc_url($webinar['thumbnail_url']); ?>" alt="<?php echo esc_attr($webinar['title']); ?>" />
                                <?php else: ?>
                                    <div class="video-placeholder">
                                        <i class="fas fa-video"></i>
                                    </div>
                                <?php endif; ?>
                                <div class="play-button">▶</div>
                                <div class="duration"><?php echo esc_html($webinar['duration']); ?></div>
                            </div>
                            <div class="event-info">
                                <h3><?php echo esc_html($webinar['title']); ?></h3>
                                <p><?php echo esc_html($webinar['description']); ?></p>
                                <div class="on-demand-event-stats">
                                    <span class="views"><?php echo esc_html($webinar['views']); ?></span>
                                    <span class="rating"><?php echo esc_html($webinar['rating']); ?></span>
                                </div>
                                <?php if (!empty($webinar['video_url'])): ?>
                                    <a href="<?php echo esc_url($webinar['video_url']); ?>" class="watch-btn" target="_blank">Watch Now</a>
                                <?php else: ?>
                                    <a href="#" class="watch-btn" onclick="alert('Video not available'); return false;">Watch Now</a>
                                <?php endif; ?>
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
                            <div class="category-icon">
                                <i class="<?php echo esc_attr($category['icon']); ?>"></i>
                            </div>
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
                <form class="newsletter-form animate-on-scroll animate-fade-up" action="#" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary">Get Event Updates</button>
                    </div>
                </form>
            </div>        </section>    </div>
</main>

<?php get_footer(); ?>
