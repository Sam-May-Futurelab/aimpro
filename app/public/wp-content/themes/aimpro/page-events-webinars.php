<?php
/**
 * Template Name: Events & Webinars Page
 * Description: Upcoming events, webinars, and workshops
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Events & Webinars</h1>
                <p class="page-subtitle">Join industry experts and expand your digital marketing knowledge</p>
            </div>
        </section>

        <!-- Events Introduction -->
        <section class="events-intro">
            <div class="section-content">
                <div class="intro-content">
                    <h2>Learn from Industry Leaders</h2>
                    <p>Stay ahead of the curve with our regular webinars, workshops, and industry events. Learn the latest strategies, network with peers, and get your questions answered by digital marketing experts.</p>
                </div>
                <div class="event-stats">
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Events Hosted</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5,000+</div>
                        <div class="stat-label">Attendees</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Expert Speakers</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Upcoming Event -->
        <section class="featured-event">
            <div class="section-content">                <div class="event-featured">
                    <div class="event-badge">Next Event</div>
                    <div class="event-content">
                        <div class="event-meta">
                            <span class="event-date">June 25, 2025</span>
                            <span class="event-time">2:00 PM - 3:30 PM GMT</span>
                            <span class="event-type">Live Webinar</span>
                        </div>
                        <h2>Digital Marketing Trends 2025: What's Coming Next</h2>
                        <p class="event-description">Join our panel of industry experts as they reveal the biggest digital marketing trends for the second half of 2025. Learn about emerging technologies, changing consumer behaviors, and the strategies that will define successful marketing campaigns.</p>
                        
                        <div class="event-speakers">
                            <h3>Featured Speakers</h3>
                            <div class="speakers-list">
                                <div class="speaker">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speakers/sarah-marketing.jpg" alt="Sarah Johnson" />
                                    <div class="speaker-info">
                                        <h4>Sarah Johnson</h4>
                                        <span>CMO, Aimpro Digital</span>
                                    </div>
                                </div>
                                <div class="speaker">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speakers/alex-strategy.jpg" alt="Alex Chen" />
                                    <div class="speaker-info">
                                        <h4>Alex Chen</h4>
                                        <span>Digital Strategy Consultant</span>
                                    </div>
                                </div>
                                <div class="speaker">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/speakers/emma-analytics.jpg" alt="Emma Davis" />
                                    <div class="speaker-info">
                                        <h4>Emma Davis</h4>
                                        <span>Analytics Expert, Google</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="event-agenda">
                            <h3>What You'll Learn</h3>
                            <ul>
                                <li>AI and machine learning in marketing automation</li>
                                <li>Privacy-first marketing strategies</li>
                                <li>Voice search optimization techniques</li>
                                <li>Video marketing trends and best practices</li>
                                <li>Cross-platform attribution modeling</li>
                            </ul>
                        </div>

                        <div class="event-registration">
                            <div class="registration-info">
                                <span class="price">Free Event</span>
                                <span class="seats">42 seats remaining</span>
                            </div>
                            <a href="#" class="register-btn">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Upcoming Events -->
        <section class="upcoming-events">
            <div class="section-content">
                <h2>Upcoming Events</h2>
                <div class="events-grid">
                    
                    <div class="event-card">
                        <div class="event-date-badge">
                            <div class="month">Jul</div>
                            <div class="day">15</div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span class="event-time">10:00 AM - 11:30 AM</span>
                                <span class="event-format">Workshop</span>
                            </div>
                            <h3>Advanced Google Ads Optimization</h3>
                            <p>Hands-on workshop covering advanced Google Ads strategies, including Smart Bidding, audience optimization, and campaign automation.</p>
                            <div class="event-details">
                                <span class="attendees">156 registered</span>
                                <span class="price">£49</span>
                            </div>
                            <a href="#" class="event-register">Register</a>
                        </div>
                    </div>

                    <div class="event-card">
                        <div class="event-date-badge">
                            <div class="month">Jul</div>
                            <div class="day">28</div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span class="event-time">2:00 PM - 3:00 PM</span>
                                <span class="event-format">Webinar</span>
                            </div>
                            <h3>Local SEO for Small Businesses</h3>
                            <p>Essential local SEO strategies to help small businesses dominate local search results and attract more customers.</p>
                            <div class="event-details">
                                <span class="attendees">89 registered</span>
                                <span class="price">Free</span>
                            </div>
                            <a href="#" class="event-register">Register</a>
                        </div>
                    </div>

                    <div class="event-card">
                        <div class="event-date-badge">
                            <div class="month">Aug</div>
                            <div class="day">12</div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span class="event-time">1:00 PM - 4:00 PM</span>
                                <span class="event-format">Masterclass</span>
                            </div>
                            <h3>Content Marketing Masterclass</h3>
                            <p>Comprehensive masterclass covering content strategy, creation, distribution, and performance measurement for maximum ROI.</p>
                            <div class="event-details">
                                <span class="attendees">12 spots left</span>
                                <span class="price">£149</span>
                            </div>
                            <a href="#" class="event-register">Register</a>
                        </div>
                    </div>

                    <div class="event-card">
                        <div class="event-date-badge">
                            <div class="month">Aug</div>
                            <div class="day">25</div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span class="event-time">11:00 AM - 12:00 PM</span>
                                <span class="event-format">Webinar</span>
                            </div>
                            <h3>E-commerce Marketing Automation</h3>
                            <p>Learn how to set up automated marketing funnels that increase sales, improve customer retention, and save time.</p>
                            <div class="event-details">
                                <span class="attendees">Early bird</span>
                                <span class="price">Free</span>
                            </div>
                            <a href="#" class="event-register">Register</a>
                        </div>
                    </div>

                    <div class="event-card">
                        <div class="event-date-badge">
                            <div class="month">Sep</div>
                            <div class="day">08</div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span class="event-time">9:00 AM - 5:00 PM</span>
                                <span class="event-format">Conference</span>
                            </div>
                            <h3>Digital Marketing Summit 2025</h3>
                            <p>Full-day conference featuring 12 speakers, networking sessions, and hands-on workshops covering all aspects of digital marketing.</p>
                            <div class="event-details">
                                <span class="attendees">250 expected</span>
                                <span class="price">£299</span>
                            </div>
                            <a href="#" class="event-register">Register</a>
                        </div>
                    </div>

                    <div class="event-card">
                        <div class="event-date-badge">
                            <div class="month">Sep</div>
                            <div class="day">22</div>
                        </div>
                        <div class="event-content">
                            <div class="event-meta">
                                <span class="event-time">3:00 PM - 4:30 PM</span>
                                <span class="event-format">Panel Discussion</span>
                            </div>
                            <h3>The Future of Social Media Marketing</h3>
                            <p>Panel discussion with social media experts discussing emerging platforms, algorithm changes, and content strategies.</p>
                            <div class="event-details">
                                <span class="attendees">Coming soon</span>
                                <span class="price">Free</span>
                            </div>
                            <a href="#" class="event-register">Notify Me</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Past Events / On-Demand -->
        <section class="past-events">
            <div class="section-content">
                <h2>On-Demand Webinars</h2>
                <p class="section-subtitle">Missed a live event? Watch our recorded sessions at your convenience.</p>
                
                <div class="on-demand-grid">
                    
                    <div class="on-demand-event">
                        <div class="event-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/seo-fundamentals.jpg" alt="SEO Fundamentals" />
                            <div class="play-button">▶</div>
                            <div class="duration">52 min</div>
                        </div>                        <div class="event-info">
                            <h3>SEO Fundamentals for 2025</h3>
                            <p>Complete guide to search engine optimization, covering technical SEO, content optimization, and link building strategies.</p>
                            <div class="on-demand-event-stats">
                                <span class="views">1,240 views</span>
                                <span class="rating">★★★★★ 4.8</span>
                            </div>
                            <a href="#" class="watch-btn">Watch Now</a>
                        </div>
                    </div>

                    <div class="on-demand-event">
                        <div class="event-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/facebook-ads-mastery.jpg" alt="Facebook Ads Mastery" />
                            <div class="play-button">▶</div>
                            <div class="duration">1h 15m</div>
                        </div>                        <div class="event-info">
                            <h3>Facebook Ads Mastery Workshop</h3>
                            <p>Advanced Facebook advertising strategies including audience targeting, creative optimization, and campaign scaling techniques.</p>
                            <div class="on-demand-event-stats">
                                <span class="views">890 views</span>
                                <span class="rating">★★★★★ 4.9</span>
                            </div>
                            <a href="#" class="watch-btn">Watch Now</a>
                        </div>
                    </div>

                    <div class="on-demand-event">
                        <div class="event-thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/analytics-deep-dive.jpg" alt="Analytics Deep Dive" />
                            <div class="play-button">▶</div>
                            <div class="duration">38 min</div>
                        </div>                        <div class="event-info">
                            <h3>Google Analytics 4 Deep Dive</h3>
                            <p>Comprehensive walkthrough of GA4 setup, configuration, and advanced reporting for better marketing insights.</p>
                            <div class="on-demand-event-stats">
                                <span class="views">2,100 views</span>
                                <span class="rating">★★★★☆ 4.6</span>
                            </div>
                            <a href="#" class="watch-btn">Watch Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Event Categories -->
        <section class="event-categories">
            <div class="section-content">
                <h2>Event Types</h2>
                <div class="categories-grid">
                      <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-crosshairs"></i>
                        </div>
                        <h3>Strategy Webinars</h3>
                        <p>High-level strategic discussions about digital marketing trends, best practices, and industry insights.</p>
                        <span class="category-frequency">Monthly</span>
                    </div>

                    <div class="category-card">
                        <div class="category-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Technical Workshops</h3>
                        <p>Hands-on sessions focusing on specific tools, platforms, and technical implementation guides.</p>
                        <span class="category-frequency">Bi-weekly</span>
                    </div>

                    <div class="category-card">
                        <div class="category-icon">👥</div>
                        <h3>Panel Discussions</h3>
                        <p>Expert panels featuring industry leaders discussing current challenges and opportunities.</p>
                        <span class="category-frequency">Quarterly</span>
                    </div>

                    <div class="category-card">
                        <div class="category-icon">🎓</div>
                        <h3>Masterclasses</h3>
                        <p>In-depth training sessions covering comprehensive topics with practical exercises and Q&A.</p>
                        <span class="category-frequency">Monthly</span>
                    </div>

                </div>
            </div>
        </section>

        <!-- Newsletter & Updates -->
        <section class="events-newsletter">
            <div class="section-content">
                <h2>Never Miss an Event</h2>
                <p>Get notified about upcoming webinars, workshops, and exclusive invitations to premium events.</p>                <form class="newsletter-form" action="#" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-primary">Get Event Updates</button>
                    </div>
                </form>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
