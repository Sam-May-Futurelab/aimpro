<?php
// Events & Webinars Page Meta Fields

function add_events_webinars_meta_boxes() {
    $events_webinars_screens = array('page');
    
    foreach ($events_webinars_screens as $screen) {
        add_meta_box(
            'events_webinars_meta_box',
            'Events & Webinars Page Content',
            'events_webinars_meta_box_callback',
            $screen,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'add_events_webinars_meta_boxes');

function events_webinars_meta_box_callback($post) {
    // Only show on events-webinars page template
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-events-webinars.php') {
        echo '<p>This meta box only appears when using the "Events & Webinars Page" template.</p>';
        return;
    }

    wp_nonce_field('events_webinars_meta_box', 'events_webinars_meta_box_nonce');

    // Get existing values
    $header_title = get_post_meta($post->ID, '_events_webinars_header_title', true);
    $header_subtitle = get_post_meta($post->ID, '_events_webinars_header_subtitle', true);
    $intro_title = get_post_meta($post->ID, '_events_webinars_intro_title', true);
    $intro_content = get_post_meta($post->ID, '_events_webinars_intro_content', true);

    // Event stats
    $stats = get_post_meta($post->ID, '_events_webinars_stats', true);
    if (empty($stats)) {
        $stats = array(
            array('number' => '50+', 'label' => 'Events Hosted'),
            array('number' => '5,000+', 'label' => 'Attendees'),
            array('number' => '25+', 'label' => 'Expert Speakers')
        );
    }    // Featured event
    $featured_event = get_post_meta($post->ID, '_events_webinars_featured_event', true);
    if (empty($featured_event)) {
        $featured_event = array(
            'badge' => 'Next Event',
            'date' => 'June 25, 2025',
            'time' => '2:00 PM - 3:30 PM GMT',
            'type' => 'Live Webinar',
            'title' => 'Digital Marketing Trends 2025: What\'s Coming Next',
            'description' => 'Join our panel of industry experts as they reveal the biggest digital marketing trends for the second half of 2025.',
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

    // Upcoming events
    $upcoming_events = get_post_meta($post->ID, '_events_webinars_upcoming_events', true);
    if (empty($upcoming_events)) {
        $upcoming_events = array();
    }

    // On-demand webinars
    $ondemand_title = get_post_meta($post->ID, '_events_webinars_ondemand_title', true);
    $ondemand_subtitle = get_post_meta($post->ID, '_events_webinars_ondemand_subtitle', true);
    $ondemand_webinars = get_post_meta($post->ID, '_events_webinars_ondemand_webinars', true);
    if (empty($ondemand_webinars)) {
        $ondemand_webinars = array(
            array(
                'title' => 'SEO Fundamentals for 2025',
                'description' => 'Complete guide to search engine optimisation, covering technical SEO, content optimisation, and link building strategies.',
                'duration' => '52 min',
                'views' => '1,240 views',
                'rating' => '????? 4.8',
                'video_url' => '',
                'thumbnail_url' => ''
            ),
            array(
                'title' => 'Facebook Ads Mastery Workshop',
                'description' => 'Advanced Facebook advertising strategies including audience targeting, creative optimisation, and campaign scaling techniques.',
                'duration' => '1h 15m',
                'views' => '890 views',
                'rating' => '????? 4.9',
                'video_url' => '',
                'thumbnail_url' => ''
            ),
            array(
                'title' => 'Google Analytics 4 Deep Dive',
                'description' => 'Comprehensive walkthrough of GA4 setup, configuration, and advanced reporting for better marketing insights.',
                'duration' => '38 min',
                'views' => '2,100 views',
                'rating' => '????? 4.6',
                'video_url' => '',
                'thumbnail_url' => ''
            )
        );
    }

    // Event categories
    $categories_title = get_post_meta($post->ID, '_events_webinars_categories_title', true);
    $event_categories = get_post_meta($post->ID, '_events_webinars_categories', true);
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
            ),            array(
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

    // Newsletter/CTA section
    $newsletter_title = get_post_meta($post->ID, '_events_webinars_newsletter_title', true);
    $newsletter_content = get_post_meta($post->ID, '_events_webinars_newsletter_content', true);

    ?>
    <style>
        .events-webinars-meta {
            max-width: 100%;
        }
        .events-webinars-meta .form-table th {
            width: 180px;
            padding: 15px 10px 15px 0;
        }
        .events-webinars-meta .form-table td {
            padding: 15px 10px;
        }
        .events-webinars-meta input[type="text"],
        .events-webinars-meta textarea,
        .events-webinars-meta input[type="url"] {
            width: 100%;
            max-width: 600px;
        }
        .events-webinars-meta textarea {
            height: 100px;
            resize: vertical;
        }
        .stats-repeater, .events-repeater, .webinars-repeater, .categories-repeater, .speakers-repeater, .agenda-repeater {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            background: #f9f9f9;
        }
        .repeater-item {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px 0;
            background: white;
            position: relative;
        }
        .remove-item {
            background: #dc3232;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            float: right;
            margin-top: -5px;
        }
        .add-item {
            background: #0073aa;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            margin: 10px 0;
        }
        .item-field {
            margin: 10px 0;
        }
        .item-field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .item-field input, .item-field textarea, .item-field select {
            width: 100%;
            max-width: 400px;
        }
        .section-divider {
            border-top: 2px solid #0073aa;
            margin: 30px 0 20px 0;
            padding-top: 20px;
        }
        .featured-event-box {
            border: 2px solid #0073aa;
            padding: 20px;
            background: #f0f8ff;
            margin: 15px 0;
        }
    </style>

    <div class="events-webinars-meta">
        <table class="form-table">
            <tr>
                <th><label for="events_webinars_header_title">Page Header Title</label></th>
                <td><input type="text" id="events_webinars_header_title" name="events_webinars_header_title" value="<?php echo esc_attr($header_title); ?>" placeholder="Events & Webinars" /></td>
            </tr>
            <tr>
                <th><label for="events_webinars_header_subtitle">Page Header Subtitle</label></th>
                <td><textarea id="events_webinars_header_subtitle" name="events_webinars_header_subtitle" placeholder="Join industry experts and expand your digital marketing knowledge"><?php echo esc_textarea($header_subtitle); ?></textarea></td>
            </tr>
            <tr>
                <th><label for="events_webinars_intro_title">Introduction Title</label></th>
                <td><input type="text" id="events_webinars_intro_title" name="events_webinars_intro_title" value="<?php echo esc_attr($intro_title); ?>" placeholder="Learn from Industry Leaders" /></td>
            </tr>
            <tr>
                <th><label for="events_webinars_intro_content">Introduction Content</label></th>
                <td><textarea id="events_webinars_intro_content" name="events_webinars_intro_content" placeholder="Stay ahead of the curve with our regular webinars..."><?php echo esc_textarea($intro_content); ?></textarea></td>
            </tr>
        </table>

        <div class="section-divider">
            <h3>Event Statistics</h3>
            <div class="stats-repeater">
                <div id="stats-container">
                    <?php foreach ($stats as $index => $stat): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-stat">Remove</button>
                            <div class="item-field">
                                <label>Number:</label>
                                <input type="text" name="events_webinars_stats[<?php echo $index; ?>][number]" value="<?php echo esc_attr($stat['number']); ?>" placeholder="50+" />
                            </div>
                            <div class="item-field">
                                <label>Label:</label>
                                <input type="text" name="events_webinars_stats[<?php echo $index; ?>][label]" value="<?php echo esc_attr($stat['label']); ?>" placeholder="Events Hosted" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-stat">Add Stat</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Featured Event</h3>
            <div class="featured-event-box">
                <div class="item-field">
                    <label>Event Badge:</label>
                    <input type="text" name="events_webinars_featured_event[badge]" value="<?php echo esc_attr($featured_event['badge']); ?>" placeholder="Next Event" />
                </div>
                <div class="item-field">
                    <label>Date:</label>
                    <input type="text" name="events_webinars_featured_event[date]" value="<?php echo esc_attr($featured_event['date']); ?>" placeholder="June 25, 2025" />
                </div>
                <div class="item-field">
                    <label>Time:</label>
                    <input type="text" name="events_webinars_featured_event[time]" value="<?php echo esc_attr($featured_event['time']); ?>" placeholder="2:00 PM - 3:30 PM GMT" />
                </div>
                <div class="item-field">
                    <label>Event Type:</label>
                    <input type="text" name="events_webinars_featured_event[type]" value="<?php echo esc_attr($featured_event['type']); ?>" placeholder="Live Webinar" />
                </div>
                <div class="item-field">
                    <label>Title:</label>
                    <input type="text" name="events_webinars_featured_event[title]" value="<?php echo esc_attr($featured_event['title']); ?>" placeholder="Digital Marketing Trends 2025" />
                </div>
                <div class="item-field">
                    <label>Description:</label>
                    <textarea name="events_webinars_featured_event[description]" placeholder="Join our panel of industry experts..."><?php echo esc_textarea($featured_event['description']); ?></textarea>
                </div>
                <div class="item-field">
                    <label>Price/Cost:</label>
                    <input type="text" name="events_webinars_featured_event[price]" value="<?php echo esc_attr($featured_event['price']); ?>" placeholder="Free Event" />
                </div>
                <div class="item-field">
                    <label>Seats Info:</label>
                    <input type="text" name="events_webinars_featured_event[seats]" value="<?php echo esc_attr($featured_event['seats']); ?>" placeholder="42 seats remaining" />
                </div>
                <div class="item-field">
                    <label>Registration URL:</label>
                    <input type="url" name="events_webinars_featured_event[register_url]" value="<?php echo esc_url($featured_event['register_url']); ?>" placeholder="https://example.com/register" />
                </div>
                
                <h4>Speakers (remove images)</h4>
                <div class="speakers-repeater">
                    <div id="speakers-container">
                        <?php 
                        $speakers = isset($featured_event['speakers']) ? $featured_event['speakers'] : array();
                        foreach ($speakers as $index => $speaker): ?>
                            <div class="repeater-item">
                                <button type="button" class="remove-item remove-speaker">Remove</button>
                                <div class="item-field">
                                    <label>Speaker Name:</label>
                                    <input type="text" name="events_webinars_featured_event[speakers][<?php echo $index; ?>][name]" value="<?php echo esc_attr($speaker['name']); ?>" placeholder="Sarah Johnson" />
                                </div>
                                <div class="item-field">
                                    <label>Speaker Title:</label>
                                    <input type="text" name="events_webinars_featured_event[speakers][<?php echo $index; ?>][title]" value="<?php echo esc_attr($speaker['title']); ?>" placeholder="CMO, Aimpro Digital" />
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="add-item add-speaker">Add Speaker</button>
                </div>

                <h4>What You'll Learn (Agenda)</h4>
                <div class="agenda-repeater">
                    <div id="agenda-container">
                        <?php 
                        $agenda = isset($featured_event['agenda']) ? $featured_event['agenda'] : array();
                        foreach ($agenda as $index => $item): ?>
                            <div class="repeater-item">
                                <button type="button" class="remove-item remove-agenda">Remove</button>
                                <div class="item-field">
                                    <label>Learning Point:</label>
                                    <input type="text" name="events_webinars_featured_event[agenda][<?php echo $index; ?>]" value="<?php echo esc_attr($item); ?>" placeholder="AI and machine learning in marketing automation" />
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="add-item add-agenda">Add Learning Point</button>
                </div>
            </div>
        </div>

        <div class="section-divider">
            <h3>Upcoming Events</h3>
            <div class="events-repeater">
                <div id="events-container">
                    <?php foreach ($upcoming_events as $index => $event): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-event">Remove</button>
                            <div class="item-field">
                                <label>Month:</label>
                                <input type="text" name="events_webinars_upcoming_events[<?php echo $index; ?>][month]" value="<?php echo esc_attr($event['month']); ?>" placeholder="Jul" />
                            </div>
                            <div class="item-field">
                                <label>Day:</label>
                                <input type="text" name="events_webinars_upcoming_events[<?php echo $index; ?>][day]" value="<?php echo esc_attr($event['day']); ?>" placeholder="15" />
                            </div>
                            <div class="item-field">
                                <label>Time:</label>
                                <input type="text" name="events_webinars_upcoming_events[<?php echo $index; ?>][time]" value="<?php echo esc_attr($event['time']); ?>" placeholder="10:00 AM - 11:30 AM" />
                            </div>
                            <div class="item-field">
                                <label>Format:</label>
                                <input type="text" name="events_webinars_upcoming_events[<?php echo $index; ?>][format]" value="<?php echo esc_attr($event['format']); ?>" placeholder="Workshop" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="events_webinars_upcoming_events[<?php echo $index; ?>][title]" value="<?php echo esc_attr($event['title']); ?>" placeholder="Advanced Google Ads optimisation" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="events_webinars_upcoming_events[<?php echo $index; ?>][description]" placeholder="Hands-on workshop covering..."><?php echo esc_textarea($event['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Attendees Info:</label>
                                <input type="text" name="events_webinars_upcoming_events[<?php echo $index; ?>][attendees]" value="<?php echo esc_attr($event['attendees']); ?>" placeholder="156 registered" />
                            </div>
                            <div class="item-field">
                                <label>Price:</label>
                                <input type="text" name="events_webinars_upcoming_events[<?php echo $index; ?>][price]" value="<?php echo esc_attr($event['price']); ?>" placeholder="£49" />
                            </div>
                            <div class="item-field">
                                <label>Registration URL:</label>
                                <input type="url" name="events_webinars_upcoming_events[<?php echo $index; ?>][register_url]" value="<?php echo esc_url($event['register_url']); ?>" placeholder="https://example.com/register" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-event">Add Event</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>On-Demand Webinars</h3>
            <table class="form-table">
                <tr>
                    <th><label for="events_webinars_ondemand_title">Section Title</label></th>
                    <td><input type="text" id="events_webinars_ondemand_title" name="events_webinars_ondemand_title" value="<?php echo esc_attr($ondemand_title); ?>" placeholder="On-Demand Webinars" /></td>
                </tr>
                <tr>
                    <th><label for="events_webinars_ondemand_subtitle">Section Subtitle</label></th>
                    <td><textarea id="events_webinars_ondemand_subtitle" name="events_webinars_ondemand_subtitle" placeholder="Missed a live event? Watch our recorded sessions..."><?php echo esc_textarea($ondemand_subtitle); ?></textarea></td>
                </tr>
            </table>
            
            <div class="webinars-repeater">
                <div id="webinars-container">
                    <?php foreach ($ondemand_webinars as $index => $webinar): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-webinar">Remove</button>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][title]" value="<?php echo esc_attr($webinar['title']); ?>" placeholder="SEO Fundamentals for 2025" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="events_webinars_ondemand_webinars[<?php echo $index; ?>][description]" placeholder="Complete guide to search engine optimisation..."><?php echo esc_textarea($webinar['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Duration:</label>
                                <input type="text" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][duration]" value="<?php echo esc_attr($webinar['duration']); ?>" placeholder="52 min" />
                            </div>
                            <div class="item-field">
                                <label>Views:</label>
                                <input type="text" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][views]" value="<?php echo esc_attr($webinar['views']); ?>" placeholder="1,240 views" />
                            </div>
                            <div class="item-field">
                                <label>Rating:</label>
                                <input type="text" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][rating]" value="<?php echo esc_attr($webinar['rating']); ?>" placeholder="????? 4.8" />
                            </div>
                            <div class="item-field">
                                <label>Video URL (YouTube, Vimeo, etc.):</label>
                                <input type="url" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][video_url]" value="<?php echo esc_url($webinar['video_url']); ?>" placeholder="https://youtube.com/watch?v=..." />
                            </div>
                            <div class="item-field">
                                <label>Custom Thumbnail URL (optional):</label>
                                <input type="url" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][thumbnail_url]" value="<?php echo esc_url($webinar['thumbnail_url']); ?>" placeholder="https://example.com/thumbnail.jpg" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-webinar">Add Webinar</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Event Categories (4 in a row styling)</h3>
            <table class="form-table">
                <tr>
                    <th><label for="events_webinars_categories_title">Section Title</label></th>
                    <td><input type="text" id="events_webinars_categories_title" name="events_webinars_categories_title" value="<?php echo esc_attr($categories_title); ?>" placeholder="Event Types" /></td>
                </tr>
            </table>
            
            <div class="categories-repeater">
                <div id="categories-container">
                    <?php foreach ($event_categories as $index => $category): ?>
                        <div class="repeater-item">
                            <button type="button" class="remove-item remove-category">Remove</button>                            <div class="item-field">
                                <label>Icon (FontAwesome class):</label>
                                <input type="text" name="events_webinars_categories[<?php echo $index; ?>][icon]" value="<?php echo esc_attr($category['icon']); ?>" placeholder="fas fa-users" />
                            </div>
                            <div class="item-field">
                                <label>Title:</label>
                                <input type="text" name="events_webinars_categories[<?php echo $index; ?>][title]" value="<?php echo esc_attr($category['title']); ?>" placeholder="Strategy Webinars" />
                            </div>
                            <div class="item-field">
                                <label>Description:</label>
                                <textarea name="events_webinars_categories[<?php echo $index; ?>][description]" placeholder="High-level strategic discussions..."><?php echo esc_textarea($category['description']); ?></textarea>
                            </div>
                            <div class="item-field">
                                <label>Frequency:</label>
                                <input type="text" name="events_webinars_categories[<?php echo $index; ?>][frequency]" value="<?php echo esc_attr($category['frequency']); ?>" placeholder="Monthly" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="button" class="add-item add-category">Add Category</button>
            </div>
        </div>

        <div class="section-divider">
            <h3>Newsletter/CTA Section</h3>
            <table class="form-table">
                <tr>
                    <th><label for="events_webinars_newsletter_title">Newsletter Title</label></th>
                    <td><input type="text" id="events_webinars_newsletter_title" name="events_webinars_newsletter_title" value="<?php echo esc_attr($newsletter_title); ?>" placeholder="Never Miss an Event" /></td>
                </tr>
                <tr>
                    <th><label for="events_webinars_newsletter_content">Newsletter Content</label></th>
                    <td><textarea id="events_webinars_newsletter_content" name="events_webinars_newsletter_content" placeholder="Get notified about upcoming webinars..."><?php echo esc_textarea($newsletter_content); ?></textarea></td>
                </tr>
            </table>
        </div>
    </div>

    <script>
        jQuery(document).ready(function($) {
            // Add stat
            $('.add-stat').click(function() {
                var container = $('#stats-container');
                var index = container.find('.repeater-item').length;
                var html = '<div class="repeater-item">' +
                    '<button type="button" class="remove-item remove-stat">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Number:</label>' +
                        '<input type="text" name="events_webinars_stats[' + index + '][number]" placeholder="50+" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Label:</label>' +
                        '<input type="text" name="events_webinars_stats[' + index + '][label]" placeholder="Events Hosted" />' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Add speaker
            $('.add-speaker').click(function() {
                var container = $('#speakers-container');
                var index = container.find('.repeater-item').length;
                var html = '<div class="repeater-item">' +
                    '<button type="button" class="remove-item remove-speaker">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Speaker Name:</label>' +
                        '<input type="text" name="events_webinars_featured_event[speakers][' + index + '][name]" placeholder="Sarah Johnson" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Speaker Title:</label>' +
                        '<input type="text" name="events_webinars_featured_event[speakers][' + index + '][title]" placeholder="CMO, Aimpro Digital" />' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Add agenda item
            $('.add-agenda').click(function() {
                var container = $('#agenda-container');
                var index = container.find('.repeater-item').length;
                var html = '<div class="repeater-item">' +
                    '<button type="button" class="remove-item remove-agenda">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Learning Point:</label>' +
                        '<input type="text" name="events_webinars_featured_event[agenda][' + index + ']" placeholder="AI and machine learning in marketing automation" />' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Add event
            $('.add-event').click(function() {
                var container = $('#events-container');
                var index = container.find('.repeater-item').length;
                var html = '<div class="repeater-item">' +
                    '<button type="button" class="remove-item remove-event">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Month:</label>' +
                        '<input type="text" name="events_webinars_upcoming_events[' + index + '][month]" placeholder="Jul" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Day:</label>' +
                        '<input type="text" name="events_webinars_upcoming_events[' + index + '][day]" placeholder="15" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Time:</label>' +
                        '<input type="text" name="events_webinars_upcoming_events[' + index + '][time]" placeholder="10:00 AM - 11:30 AM" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Format:</label>' +
                        '<input type="text" name="events_webinars_upcoming_events[' + index + '][format]" placeholder="Workshop" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Title:</label>' +
                        '<input type="text" name="events_webinars_upcoming_events[' + index + '][title]" placeholder="Advanced Google Ads optimisation" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Description:</label>' +
                        '<textarea name="events_webinars_upcoming_events[' + index + '][description]" placeholder="Hands-on workshop covering..."></textarea>' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Attendees Info:</label>' +
                        '<input type="text" name="events_webinars_upcoming_events[' + index + '][attendees]" placeholder="156 registered" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Price:</label>' +
                        '<input type="text" name="events_webinars_upcoming_events[' + index + '][price]" placeholder="£49" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Registration URL:</label>' +
                        '<input type="url" name="events_webinars_upcoming_events[' + index + '][register_url]" placeholder="https://example.com/register" />' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Add webinar
            $('.add-webinar').click(function() {
                var container = $('#webinars-container');
                var index = container.find('.repeater-item').length;
                var html = '<div class="repeater-item">' +
                    '<button type="button" class="remove-item remove-webinar">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Title:</label>' +
                        '<input type="text" name="events_webinars_ondemand_webinars[' + index + '][title]" placeholder="SEO Fundamentals for 2025" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Description:</label>' +
                        '<textarea name="events_webinars_ondemand_webinars[' + index + '][description]" placeholder="Complete guide to search engine optimisation..."></textarea>' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Duration:</label>' +
                        '<input type="text" name="events_webinars_ondemand_webinars[' + index + '][duration]" placeholder="52 min" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Views:</label>' +
                        '<input type="text" name="events_webinars_ondemand_webinars[' + index + '][views]" placeholder="1,240 views" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Rating:</label>' +
                        '<input type="text" name="events_webinars_ondemand_webinars[' + index + '][rating]" placeholder="????? 4.8" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Video URL (YouTube, Vimeo, etc.):</label>' +
                        '<input type="url" name="events_webinars_ondemand_webinars[' + index + '][video_url]" placeholder="https://youtube.com/watch?v=..." />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Custom Thumbnail URL (optional):</label>' +
                        '<input type="url" name="events_webinars_ondemand_webinars[' + index + '][thumbnail_url]" placeholder="https://example.com/thumbnail.jpg" />' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Add category
            $('.add-category').click(function() {
                var container = $('#categories-container');
                var index = container.find('.repeater-item').length;                var html = '<div class="repeater-item">' +
                    '<button type="button" class="remove-item remove-category">Remove</button>' +
                    '<div class="item-field">' +
                        '<label>Icon (FontAwesome class):</label>' +
                        '<input type="text" name="events_webinars_categories[' + index + '][icon]" placeholder="fas fa-users" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Title:</label>' +
                        '<input type="text" name="events_webinars_categories[' + index + '][title]" placeholder="Strategy Webinars" />' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Description:</label>' +
                        '<textarea name="events_webinars_categories[' + index + '][description]" placeholder="High-level strategic discussions..."></textarea>' +
                    '</div>' +
                    '<div class="item-field">' +
                        '<label>Frequency:</label>' +
                        '<input type="text" name="events_webinars_categories[' + index + '][frequency]" placeholder="Monthly" />' +
                    '</div>' +
                '</div>';
                container.append(html);
            });

            // Remove items
            $(document).on('click', '.remove-item', function() {
                $(this).closest('.repeater-item').remove();
            });
        });
    </script>
    <?php
}

function save_events_webinars_meta($post_id) {
    if (!isset($_POST['events_webinars_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['events_webinars_meta_box_nonce'], 'events_webinars_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Only save on events-webinars page template
    $page_template = get_page_template_slug($post_id);
    if ($page_template !== 'page-events-webinars.php') {
        return;
    }

    // Save basic fields
    $fields = array(
        'events_webinars_header_title',
        'events_webinars_header_subtitle', 
        'events_webinars_intro_title',
        'events_webinars_intro_content',
        'events_webinars_ondemand_title',
        'events_webinars_ondemand_subtitle',
        'events_webinars_categories_title',
        'events_webinars_newsletter_title',
        'events_webinars_newsletter_content'
    );

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_textarea_field($_POST[$field]));
        }
    }

    // Save arrays
    $array_fields = array(
        'events_webinars_stats',
        'events_webinars_upcoming_events',
        'events_webinars_ondemand_webinars',
        'events_webinars_categories'
    );

    foreach ($array_fields as $field) {
        if (isset($_POST[$field])) {
            $sanitized_data = array();
            foreach ($_POST[$field] as $item) {
                $sanitized_item = array();
                foreach ($item as $key => $value) {
                    if ($key === 'video_url' || $key === 'thumbnail_url' || $key === 'register_url') {
                        $sanitized_item[$key] = esc_url_raw($value);
                    } else {
                        $sanitized_item[$key] = sanitize_textarea_field($value);
                    }
                }
                $sanitized_data[] = $sanitized_item;
            }
            update_post_meta($post_id, '_' . $field, $sanitized_data);
        }
    }

    // Save featured event
    if (isset($_POST['events_webinars_featured_event'])) {
        $featured_event = $_POST['events_webinars_featured_event'];
        $sanitized_featured = array();
        
        foreach ($featured_event as $key => $value) {
            if ($key === 'register_url') {
                $sanitized_featured[$key] = esc_url_raw($value);
            } elseif ($key === 'speakers' || $key === 'agenda') {
                $sanitized_featured[$key] = is_array($value) ? array_map('sanitize_text_field', $value) : array();
            } else {
                $sanitized_featured[$key] = sanitize_textarea_field($value);
            }
        }
        
        update_post_meta($post_id, '_events_webinars_featured_event', $sanitized_featured);
    }
}
add_action('save_post', 'save_events_webinars_meta');
