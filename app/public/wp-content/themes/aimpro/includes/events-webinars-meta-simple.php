<?php
// Simple Events & Webinars Page Meta Fields - No Corruption Issues

function add_events_webinars_meta_boxes() {
    global $post;
    
    if (isset($post) && get_post_type($post) === 'page') {
        $page_template = get_page_template_slug($post->ID);
        
        if ($page_template === 'page-events-webinars.php') {
            add_meta_box(
                'events_webinars_meta_box',
                'Events & Webinars Page Content',
                'events_webinars_meta_box_callback',
                'page',
                'normal',
                'high'
            );
        }
    }
}
add_action('add_meta_boxes', 'add_events_webinars_meta_boxes');

function events_webinars_meta_box_callback($post) {
    $page_template = get_page_template_slug($post->ID);
    if ($page_template !== 'page-events-webinars.php') {
        echo '<p>This meta box only appears when using the "Events & Webinars Page" template.</p>';
        return;
    }

    wp_nonce_field('events_webinars_meta_box', 'events_webinars_meta_box_nonce');

    // Get all values safely
    $header_title = get_post_meta($post->ID, '_events_webinars_header_title', true) ?: 'Events & Webinars';
    $header_subtitle = get_post_meta($post->ID, '_events_webinars_header_subtitle', true) ?: 'Join industry experts and expand your digital marketing knowledge';
    $intro_title = get_post_meta($post->ID, '_events_webinars_intro_title', true) ?: 'Learn from Industry Leaders';
    $intro_content = get_post_meta($post->ID, '_events_webinars_intro_content', true) ?: 'Stay ahead of the curve with our regular webinars, workshops, and industry events.';
    
    $newsletter_title = get_post_meta($post->ID, '_events_webinars_newsletter_title', true) ?: 'Never Miss an Event';
    $newsletter_content = get_post_meta($post->ID, '_events_webinars_newsletter_content', true) ?: 'Get notified about upcoming webinars, workshops, and exclusive invitations to premium events.';
    $ondemand_title = get_post_meta($post->ID, '_events_webinars_ondemand_title', true) ?: 'On-Demand Webinars';
    $ondemand_subtitle = get_post_meta($post->ID, '_events_webinars_ondemand_subtitle', true) ?: 'Missed a live event? Watch our recorded sessions at your convenience.';
    
    ?>
    <style>
        .events-meta-section { margin: 20px 0; padding: 15px; border: 1px solid #ddd; background: #f9f9f9; }
        .events-meta-section h3 { margin-top: 0; color: #333; }
        .events-meta-table { width: 100%; }
        .events-meta-table th { width: 150px; text-align: left; vertical-align: top; padding: 10px 15px 10px 0; }
        .events-meta-table td { padding: 10px 0; }
        .events-meta-table input[type="text"], .events-meta-table textarea { width: 100%; }
        .webinar-item { border: 1px solid #ccc; margin: 10px 0; padding: 15px; background: white; }
        .webinar-item h4 { margin: 0 0 10px 0; }
        .remove-webinar { background: #dc3545; color: white; border: none; padding: 5px 10px; cursor: pointer; }
        .add-webinar { background: #28a745; color: white; border: none; padding: 10px 15px; cursor: pointer; margin: 10px 0; }
    </style>

    <div class="events-meta-section">
        <h3>Page Header</h3>
        <table class="events-meta-table">
            <tr>
                <th><label for="header_title">Header Title</label></th>
                <td><input type="text" id="header_title" name="events_webinars_header_title" value="<?php echo esc_attr($header_title); ?>" /></td>
            </tr>
            <tr>
                <th><label for="header_subtitle">Header Subtitle</label></th>
                <td><textarea id="header_subtitle" name="events_webinars_header_subtitle" rows="2"><?php echo esc_textarea($header_subtitle); ?></textarea></td>
            </tr>
        </table>
    </div>

    <div class="events-meta-section">
        <h3>Introduction Section</h3>
        <table class="events-meta-table">
            <tr>
                <th><label for="intro_title">Intro Title</label></th>
                <td><input type="text" id="intro_title" name="events_webinars_intro_title" value="<?php echo esc_attr($intro_title); ?>" /></td>
            </tr>
            <tr>
                <th><label for="intro_content">Intro Content</label></th>
                <td><textarea id="intro_content" name="events_webinars_intro_content" rows="3"><?php echo esc_textarea($intro_content); ?></textarea></td>
            </tr>
        </table>
    </div>

    <div class="events-meta-section">
        <h3>On-Demand Webinars Section</h3>
        <table class="events-meta-table">
            <tr>
                <th><label for="ondemand_title">Section Title</label></th>
                <td><input type="text" id="ondemand_title" name="events_webinars_ondemand_title" value="<?php echo esc_attr($ondemand_title); ?>" /></td>
            </tr>
            <tr>
                <th><label for="ondemand_subtitle">Section Subtitle</label></th>
                <td><textarea id="ondemand_subtitle" name="events_webinars_ondemand_subtitle" rows="2"><?php echo esc_textarea($ondemand_subtitle); ?></textarea></td>
            </tr>
        </table>
        
        <h4>Webinar Videos</h4>
        <div id="webinars-container">
            <?php
            $ondemand_webinars = get_post_meta($post->ID, '_events_webinars_ondemand_webinars', true);
            if (!is_array($ondemand_webinars)) $ondemand_webinars = array();
            
            // Ensure we have at least 4 default webinars
            $default_webinars = array(
                array(
                    'title' => 'SEO Fundamentals for 2025',
                    'description' => 'Complete guide to search engine optimization, covering technical SEO, content optimization, and link building strategies.',
                    'duration' => '52 min',
                    'views' => '1,240 views',
                    'rating' => '★★★★★ 4.8',
                    'video_url' => '',
                    'thumbnail_url' => ''
                ),
                array(
                    'title' => 'Facebook Ads Mastery Workshop',
                    'description' => 'Advanced Facebook advertising strategies including audience targeting, creative optimization, and campaign scaling techniques.',
                    'duration' => '1h 15m',
                    'views' => '890 views',
                    'rating' => '★★★★★ 4.9',
                    'video_url' => '',
                    'thumbnail_url' => ''
                ),
                array(
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
            
            // If we have fewer than 4 webinars, fill up to 4 with defaults
            if (count($ondemand_webinars) < 4) {
                for ($i = count($ondemand_webinars); $i < 4; $i++) {
                    if (isset($default_webinars[$i])) {
                        $ondemand_webinars[] = $default_webinars[$i];
                    }
                }
                // Save the updated data immediately so front-end shows all 4
                update_post_meta($post->ID, '_events_webinars_ondemand_webinars', $ondemand_webinars);
            }
            
            foreach ($ondemand_webinars as $index => $webinar) {
                if (!is_array($webinar)) continue;
                ?>
                <div class="webinar-item">
                    <h4>Webinar #<?php echo $index + 1; ?> <button type="button" class="remove-webinar" onclick="this.parentElement.parentElement.remove()">Remove</button></h4>
                    <table class="events-meta-table">
                        <tr>
                            <th>Title</th>
                            <td><input type="text" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][title]" value="<?php echo esc_attr($webinar['title'] ?? ''); ?>" /></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><textarea name="events_webinars_ondemand_webinars[<?php echo $index; ?>][description]" rows="2"><?php echo esc_textarea($webinar['description'] ?? ''); ?></textarea></td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td><input type="text" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][duration]" value="<?php echo esc_attr($webinar['duration'] ?? ''); ?>" placeholder="e.g. 52 min" /></td>
                        </tr>
                        <tr>
                            <th>Views</th>
                            <td><input type="text" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][views]" value="<?php echo esc_attr($webinar['views'] ?? ''); ?>" placeholder="e.g. 1,240 views" /></td>
                        </tr>
                        <tr>
                            <th>Rating</th>
                            <td><input type="text" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][rating]" value="<?php echo esc_attr($webinar['rating'] ?? ''); ?>" placeholder="e.g. ★★★★★ 4.8" /></td>
                        </tr>
                        <tr>
                            <th>Video URL</th>
                            <td><input type="url" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][video_url]" value="<?php echo esc_attr($webinar['video_url'] ?? ''); ?>" placeholder="YouTube, Vimeo, or direct video URL" /></td>
                        </tr>
                        <tr>
                            <th>Thumbnail URL</th>
                            <td><input type="url" name="events_webinars_ondemand_webinars[<?php echo $index; ?>][thumbnail_url]" value="<?php echo esc_attr($webinar['thumbnail_url'] ?? ''); ?>" placeholder="Image URL for video thumbnail" /></td>
                        </tr>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="add-webinar" onclick="addWebinar()">Add New Webinar</button>
    </div>

    <div class="events-meta-section">
        <h3>Featured Event</h3>
        <?php
        $featured_event = get_post_meta($post->ID, '_events_webinars_featured_event', true);
        if (!is_array($featured_event)) {
            $featured_event = array(
                'badge' => 'Next Event',
                'date' => 'June 25, 2025',
                'time' => '2:00 PM - 3:30 PM GMT',
                'type' => 'Live Webinar',
                'title' => 'Digital Marketing Trends 2025: What\'s Coming Next',
                'description' => 'Join our panel of industry experts as they reveal the biggest digital marketing trends for the second half of 2025.',
                'price' => 'Free Event',
                'seats' => '42 seats remaining'
            );
        }
        ?>
        <table class="events-meta-table">
            <tr>
                <th><label>Badge Text</label></th>
                <td><input type="text" name="featured_event_badge" value="<?php echo esc_attr($featured_event['badge'] ?? ''); ?>" /></td>
            </tr>
            <tr>
                <th><label>Date</label></th>
                <td><input type="text" name="featured_event_date" value="<?php echo esc_attr($featured_event['date'] ?? ''); ?>" placeholder="e.g. June 25, 2025" /></td>
            </tr>
            <tr>
                <th><label>Time</label></th>
                <td><input type="text" name="featured_event_time" value="<?php echo esc_attr($featured_event['time'] ?? ''); ?>" placeholder="e.g. 2:00 PM - 3:30 PM GMT" /></td>
            </tr>
            <tr>
                <th><label>Type</label></th>
                <td><input type="text" name="featured_event_type" value="<?php echo esc_attr($featured_event['type'] ?? ''); ?>" placeholder="e.g. Live Webinar" /></td>
            </tr>
            <tr>
                <th><label>Title</label></th>
                <td><input type="text" name="featured_event_title" value="<?php echo esc_attr($featured_event['title'] ?? ''); ?>" /></td>
            </tr>
            <tr>
                <th><label>Description</label></th>
                <td><textarea name="featured_event_description" rows="3"><?php echo esc_textarea($featured_event['description'] ?? ''); ?></textarea></td>
            </tr>
            <tr>
                <th><label>Price</label></th>
                <td><input type="text" name="featured_event_price" value="<?php echo esc_attr($featured_event['price'] ?? ''); ?>" placeholder="e.g. Free Event" /></td>
            </tr>
            <tr>
                <th><label>Seats Info</label></th>
                <td><input type="text" name="featured_event_seats" value="<?php echo esc_attr($featured_event['seats'] ?? ''); ?>" placeholder="e.g. 42 seats remaining" /></td>
            </tr>
        </table>
    </div>

    <div class="events-meta-section">
        <h3>Upcoming Events</h3>
        <div id="upcoming-events-container">
            <?php
            $upcoming_events = get_post_meta($post->ID, '_events_webinars_upcoming_events', true);
            if (!is_array($upcoming_events) || empty($upcoming_events)) {
                $upcoming_events = array(
                    array('month' => 'Jul', 'day' => '15', 'time' => '10:00 AM - 11:30 AM', 'format' => 'Workshop', 'title' => 'Advanced Google Ads optimisation', 'description' => 'Hands-on workshop covering advanced Google Ads strategies', 'attendees' => '156 registered', 'price' => '£49'),
                    array('month' => 'Jul', 'day' => '28', 'time' => '2:00 PM - 3:00 PM', 'format' => 'Webinar', 'title' => 'Local SEO for Small Businesses', 'description' => 'Essential local SEO strategies', 'attendees' => '89 registered', 'price' => 'Free'),
                    array('month' => 'Aug', 'day' => '12', 'time' => '1:00 PM - 4:00 PM', 'format' => 'Masterclass', 'title' => 'Content Marketing Masterclass', 'description' => 'Comprehensive masterclass covering content strategy', 'attendees' => '12 spots left', 'price' => '£149')
                );
            }
            
            foreach ($upcoming_events as $index => $event) {
                if (!is_array($event)) continue;
                ?>
                <div class="webinar-item">
                    <h4>Upcoming Event #<?php echo $index + 1; ?> <button type="button" class="remove-webinar" onclick="this.parentElement.parentElement.remove()">Remove</button></h4>
                    <table class="events-meta-table">
                        <tr>
                            <th>Month</th>
                            <td><input type="text" name="upcoming_events[<?php echo $index; ?>][month]" value="<?php echo esc_attr($event['month'] ?? ''); ?>" placeholder="e.g. Jul" style="width: 80px;" /></td>
                        </tr>
                        <tr>
                            <th>Day</th>
                            <td><input type="text" name="upcoming_events[<?php echo $index; ?>][day]" value="<?php echo esc_attr($event['day'] ?? ''); ?>" placeholder="e.g. 15" style="width: 80px;" /></td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td><input type="text" name="upcoming_events[<?php echo $index; ?>][time]" value="<?php echo esc_attr($event['time'] ?? ''); ?>" placeholder="e.g. 10:00 AM - 11:30 AM" /></td>
                        </tr>
                        <tr>
                            <th>Format</th>
                            <td><input type="text" name="upcoming_events[<?php echo $index; ?>][format]" value="<?php echo esc_attr($event['format'] ?? ''); ?>" placeholder="e.g. Workshop" /></td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td><input type="text" name="upcoming_events[<?php echo $index; ?>][title]" value="<?php echo esc_attr($event['title'] ?? ''); ?>" /></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><textarea name="upcoming_events[<?php echo $index; ?>][description]" rows="2"><?php echo esc_textarea($event['description'] ?? ''); ?></textarea></td>
                        </tr>
                        <tr>
                            <th>Attendees</th>
                            <td><input type="text" name="upcoming_events[<?php echo $index; ?>][attendees]" value="<?php echo esc_attr($event['attendees'] ?? ''); ?>" placeholder="e.g. 156 registered" /></td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><input type="text" name="upcoming_events[<?php echo $index; ?>][price]" value="<?php echo esc_attr($event['price'] ?? ''); ?>" placeholder="e.g. £49 or Free" /></td>
                        </tr>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
        <button type="button" class="add-webinar" onclick="addUpcomingEvent()">Add New Upcoming Event</button>
    </div>

    <div class="events-meta-section">
        <h3>Newsletter Section</h3>
        <table class="events-meta-table">
            <tr>
                <th><label for="newsletter_title">Newsletter Title</label></th>
                <td><input type="text" id="newsletter_title" name="events_webinars_newsletter_title" value="<?php echo esc_attr($newsletter_title); ?>" /></td>
            </tr>
            <tr>
                <th><label for="newsletter_content">Newsletter Content</label></th>
                <td><textarea id="newsletter_content" name="events_webinars_newsletter_content" rows="2"><?php echo esc_textarea($newsletter_content); ?></textarea></td>
            </tr>
        </table>
    </div>

    <div class="events-meta-section">
        <div style="padding: 15px; background: #fff3cd; border: 1px solid #ffeaa7;">
            <h4>Data Management</h4>
            <p><strong>Note:</strong> The Featured Event, Upcoming Events, and Event Types sections use default content that's defined in the page template.</p>
            <p>If you need to customize those sections or have corrupted data issues:</p>
            <a href="<?php echo add_query_arg('clear_all_meta', '1'); ?>" 
               onclick="return confirm('This will clear ALL meta data for this page. Continue?')" 
               class="button button-secondary">Clear All Meta Data</a>
        </div>
    </div>

    <script>
    let webinarIndex = <?php echo count($ondemand_webinars); ?>;
    let upcomingEventIndex = <?php echo count($upcoming_events); ?>;
    
    function addWebinar() {
        const container = document.getElementById('webinars-container');
        const newWebinar = document.createElement('div');
        newWebinar.className = 'webinar-item';
        newWebinar.innerHTML = `
            <h4>Webinar #${webinarIndex + 1} <button type="button" class="remove-webinar" onclick="this.parentElement.parentElement.remove()">Remove</button></h4>
            <table class="events-meta-table">
                <tr><th>Title</th><td><input type="text" name="events_webinars_ondemand_webinars[${webinarIndex}][title]" value="" /></td></tr>
                <tr><th>Description</th><td><textarea name="events_webinars_ondemand_webinars[${webinarIndex}][description]" rows="2"></textarea></td></tr>
                <tr><th>Duration</th><td><input type="text" name="events_webinars_ondemand_webinars[${webinarIndex}][duration]" value="" placeholder="e.g. 52 min" /></td></tr>
                <tr><th>Views</th><td><input type="text" name="events_webinars_ondemand_webinars[${webinarIndex}][views]" value="" placeholder="e.g. 1,240 views" /></td></tr>
                <tr><th>Rating</th><td><input type="text" name="events_webinars_ondemand_webinars[${webinarIndex}][rating]" value="" placeholder="e.g. ★★★★★ 4.8" /></td></tr>
                <tr><th>Video URL</th><td><input type="url" name="events_webinars_ondemand_webinars[${webinarIndex}][video_url]" value="" placeholder="YouTube, Vimeo, or direct video URL" /></td></tr>
                <tr><th>Thumbnail URL</th><td><input type="url" name="events_webinars_ondemand_webinars[${webinarIndex}][thumbnail_url]" value="" placeholder="Image URL for video thumbnail" /></td></tr>
            </table>
        `;
        container.appendChild(newWebinar);
        webinarIndex++;
    }
    
    function addUpcomingEvent() {
        const container = document.getElementById('upcoming-events-container');
        const newEvent = document.createElement('div');
        newEvent.className = 'webinar-item';
        newEvent.innerHTML = `
            <h4>Upcoming Event #${upcomingEventIndex + 1} <button type="button" class="remove-webinar" onclick="this.parentElement.parentElement.remove()">Remove</button></h4>
            <table class="events-meta-table">
                <tr><th>Month</th><td><input type="text" name="upcoming_events[${upcomingEventIndex}][month]" value="" placeholder="e.g. Jul" style="width: 80px;" /></td></tr>
                <tr><th>Day</th><td><input type="text" name="upcoming_events[${upcomingEventIndex}][day]" value="" placeholder="e.g. 15" style="width: 80px;" /></td></tr>
                <tr><th>Time</th><td><input type="text" name="upcoming_events[${upcomingEventIndex}][time]" value="" placeholder="e.g. 10:00 AM - 11:30 AM" /></td></tr>
                <tr><th>Format</th><td><input type="text" name="upcoming_events[${upcomingEventIndex}][format]" value="" placeholder="e.g. Workshop" /></td></tr>
                <tr><th>Title</th><td><input type="text" name="upcoming_events[${upcomingEventIndex}][title]" value="" /></td></tr>
                <tr><th>Description</th><td><textarea name="upcoming_events[${upcomingEventIndex}][description]" rows="2"></textarea></td></tr>
                <tr><th>Attendees</th><td><input type="text" name="upcoming_events[${upcomingEventIndex}][attendees]" value="" placeholder="e.g. 156 registered" /></td></tr>
                <tr><th>Price</th><td><input type="text" name="upcoming_events[${upcomingEventIndex}][price]" value="" placeholder="e.g. £49 or Free" /></td></tr>
            </table>
        `;
        container.appendChild(newEvent);
        upcomingEventIndex++;
    }
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

    // Save all fields safely
    $fields = array(
        'events_webinars_header_title' => 'sanitize_text_field',
        'events_webinars_header_subtitle' => 'sanitize_textarea_field',
        'events_webinars_intro_title' => 'sanitize_text_field',
        'events_webinars_intro_content' => 'sanitize_textarea_field',
        'events_webinars_newsletter_title' => 'sanitize_text_field',
        'events_webinars_newsletter_content' => 'sanitize_textarea_field',
        'events_webinars_ondemand_title' => 'sanitize_text_field',
        'events_webinars_ondemand_subtitle' => 'sanitize_textarea_field'
    );

    foreach ($fields as $field => $sanitize_function) {
        if (isset($_POST[$field])) {
            $value = $sanitize_function($_POST[$field]);
            update_post_meta($post_id, '_' . $field, $value);
        }
    }

    // Handle webinars array safely
    if (isset($_POST['events_webinars_ondemand_webinars']) && is_array($_POST['events_webinars_ondemand_webinars'])) {
        $webinars = array();
        
        foreach ($_POST['events_webinars_ondemand_webinars'] as $webinar_data) {
            if (is_array($webinar_data) && !empty($webinar_data['title'])) {
                $webinars[] = array(
                    'title' => sanitize_text_field($webinar_data['title']),
                    'description' => sanitize_textarea_field($webinar_data['description'] ?? ''),
                    'duration' => sanitize_text_field($webinar_data['duration'] ?? ''),
                    'views' => sanitize_text_field($webinar_data['views'] ?? ''),
                    'rating' => sanitize_text_field($webinar_data['rating'] ?? ''),
                    'video_url' => esc_url_raw($webinar_data['video_url'] ?? ''),
                    'thumbnail_url' => esc_url_raw($webinar_data['thumbnail_url'] ?? '')
                );
            }
        }
        
        update_post_meta($post_id, '_events_webinars_ondemand_webinars', $webinars);
    }

    // Handle featured event
    $featured_event = array(
        'badge' => sanitize_text_field($_POST['featured_event_badge'] ?? ''),
        'date' => sanitize_text_field($_POST['featured_event_date'] ?? ''),
        'time' => sanitize_text_field($_POST['featured_event_time'] ?? ''),
        'type' => sanitize_text_field($_POST['featured_event_type'] ?? ''),
        'title' => sanitize_text_field($_POST['featured_event_title'] ?? ''),
        'description' => sanitize_textarea_field($_POST['featured_event_description'] ?? ''),
        'price' => sanitize_text_field($_POST['featured_event_price'] ?? ''),
        'seats' => sanitize_text_field($_POST['featured_event_seats'] ?? '')
    );
    update_post_meta($post_id, '_events_webinars_featured_event', $featured_event);

    // Handle upcoming events array safely
    if (isset($_POST['upcoming_events']) && is_array($_POST['upcoming_events'])) {
        $upcoming_events = array();
        
        foreach ($_POST['upcoming_events'] as $event_data) {
            if (is_array($event_data) && !empty($event_data['title'])) {
                $upcoming_events[] = array(
                    'month' => sanitize_text_field($event_data['month'] ?? ''),
                    'day' => sanitize_text_field($event_data['day'] ?? ''),
                    'time' => sanitize_text_field($event_data['time'] ?? ''),
                    'format' => sanitize_text_field($event_data['format'] ?? ''),
                    'title' => sanitize_text_field($event_data['title']),
                    'description' => sanitize_textarea_field($event_data['description'] ?? ''),
                    'attendees' => sanitize_text_field($event_data['attendees'] ?? ''),
                    'price' => sanitize_text_field($event_data['price'] ?? '')
                );
            }
        }
        
        update_post_meta($post_id, '_events_webinars_upcoming_events', $upcoming_events);
    }
}
add_action('save_post', 'save_events_webinars_meta');

// Handle clearing all meta data
function handle_clear_all_meta() {
    if (isset($_GET['clear_all_meta']) && is_admin()) {
        $post_id = isset($_GET['post']) ? intval($_GET['post']) : 0;
        
        if ($post_id && current_user_can('edit_post', $post_id)) {
            // Clear all events webinars meta
            $meta_keys = array(
                '_events_webinars_header_title',
                '_events_webinars_header_subtitle',
                '_events_webinars_intro_title',
                '_events_webinars_intro_content',
                '_events_webinars_stats',
                '_events_webinars_featured_event',
                '_events_webinars_upcoming_events',
                '_events_webinars_ondemand_title',
                '_events_webinars_ondemand_subtitle',
                '_events_webinars_ondemand_webinars',
                '_events_webinars_categories_title',
                '_events_webinars_categories',
                '_events_webinars_newsletter_title',
                '_events_webinars_newsletter_content'
            );
            
            foreach ($meta_keys as $key) {
                delete_post_meta($post_id, $key);
            }
            
            wp_redirect(remove_query_arg('clear_all_meta'));
            exit;
        }
    }
}
add_action('admin_init', 'handle_clear_all_meta');
