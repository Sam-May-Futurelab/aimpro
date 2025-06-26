<?php
/**
 * Template Name: Locations Page
 * Description: Clean, modern locations page showcasing Aimpro Digital's office locations and service areas
 */

get_header(); 

// Enqueue locations page specific CSS
wp_enqueue_style('locations-page-css', get_template_directory_uri() . '/assets/css/locations-page.css', array(), '1.0.0');
?>

<main id="main" class="main-content locations-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">Locations</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo aimpro_get_field('locations_hero_heading', 'Our Locations'); ?></h1>
                <p class="hero-subtitle"><?php echo aimpro_get_field('locations_hero_subtitle', 'Serving businesses across the UK with digital marketing excellence from our strategically located offices and comprehensive remote services.'); ?></p>
            </div>
        </div>
    </section>

    <!-- Remote Services Section -->
    <section class="remote-services-section">
        <div class="container">
            <div class="section-content">
                <div class="remote-services-content">
                    <div class="remote-info animate-on-scroll animate-fade-up">
                        <div class="section-badge">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="currentColor"/>
                            </svg>
                            <?php echo strtoupper(aimpro_get_field('locations_remote_badge', 'REMOTE EXCELLENCE')); ?>
                        </div>
                        <h2><?php echo aimpro_get_field('locations_remote_heading', 'World-Class Digital Marketing, Anywhere'); ?></h2>
                        <p class="remote-description"><?php echo aimpro_get_field('locations_remote_description', 'Distance doesn\'t limit excellence. Our remote collaboration capabilities ensure you receive the same premium service quality whether you\'re across the street or across the country. Advanced project management, regular video calls, and transparent reporting keep you connected every step of the way.'); ?></p>
                        
                        <div class="remote-features">
                            <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                                <div class="feature-icon">
                                    <i class="fas fa-video"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Virtual Consultations</h4>
                                    <p>Face-to-face strategy sessions via secure video conferencing</p>
                                </div>
                            </div>

                            <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Real-Time Reporting</h4>
                                    <p>Live dashboards and instant performance updates</p>
                                </div>
                            </div>

                            <div class="feature-item animate-on-scroll animate-stagger animate-fade-up">
                                <div class="feature-icon">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>24/7 Support</h4>
                                    <p>Dedicated support channels for immediate assistance</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="remote-visual animate-on-scroll animate-scale-up">
                        <div class="connectivity-diagram">
                            <div class="center-hub">
                                <div class="hub-logo">
                                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="var(--primary-orange)"/>
                                    </svg>
                                </div>
                                <span>Birmingham HQ</span>
                            </div>
                            
                            <div class="connection-points">
                                <div class="connection-point point-1">
                                    <div class="point-dot"></div>
                                    <span>London</span>
                                </div>
                                <div class="connection-point point-2">
                                    <div class="point-dot"></div>
                                    <span>Manchester</span>
                                </div>
                                <div class="connection-point point-3">
                                    <div class="point-dot"></div>
                                    <span>Edinburgh</span>
                                </div>
                                <div class="connection-point point-4">
                                    <div class="point-dot"></div>
                                    <span>Cardiff</span>
                                </div>
                            </div>
                            
                            <div class="connection-lines">
                                <svg>
                                    <!-- Lines from center (50%, 50%) to each city point - 40% shorter total -->
                                    <line x1="50%" y1="50%" x2="75%" y2="25%"></line> <!-- To London -->
                                    <line x1="50%" y1="50%" x2="25%" y2="25%"></line> <!-- To Manchester -->
                                    <line x1="50%" y1="50%" x2="25%" y2="75%"></line> <!-- To Edinburgh -->
                                    <line x1="50%" y1="50%" x2="75%" y2="75%"></line> <!-- To Cardiff -->
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Office Visit Section -->
    <section class="office-visit-section">
        <div class="container">
            <div class="office-visit-container">
                <div class="visit-content animate-on-scroll animate-fade-up">
                    <h2>Come See Us... We're a REAL Company with Real Humans</h2>
                    <p>Let's discuss your project over a coffee. Book a time to visit our Birmingham office and meet the team behind your marketing success.</p>
                    
                    <div class="office-contact-info">
                        <div class="contact-row">
                            <strong><i class="fas fa-phone"></i> Phone:</strong>
                            <a href="tel:+441212858490"><?php echo aimpro_get_field('locations_office_phone', '0121 285 8490'); ?></a>
                        </div>
                        <div class="contact-row">
                            <strong><i class="fas fa-envelope"></i> Email:</strong>
                            <a href="mailto:<?php echo aimpro_get_field('locations_office_email', 'hello@aimpro.co.uk'); ?>"><?php echo aimpro_get_field('locations_office_email', 'hello@aimpro.co.uk'); ?></a>
                        </div>
                        <div class="contact-row">
                            <strong><i class="fas fa-clock"></i> Hours:</strong>
                            <span><?php echo aimpro_get_field('locations_office_hours', 'Mon-Fri: 9AM-6PM'); ?></span>
                        </div>
                    </div>
                </div>
                
                <div class="office-visual animate-on-scroll animate-fade-up">
                    <div class="office-details-card">
                        <h3>Our Birmingham Office</h3>
                        <p><strong>Located in:</strong> <?php echo aimpro_get_field('locations_office_name', 'Aimpro Digital'); ?></p>
                        <p><strong>Address:</strong> <?php echo strip_tags(aimpro_get_field('locations_office_address', 'Birmingham Business District<br>West Midlands, UK')); ?></p>
                        <p>Right in the heart of Birmingham's business district</p>
                    </div>
                    
                    <div class="office-image-container">
                        <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Birmingham Office Building - Colmore Row" />
                    </div>
                </div>
            </div>
            
            <!-- Centered CTA Button -->
            <div class="visit-cta-centered">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-orange btn-large cta-primary">BOOK A COFFEE MEETING</a>
            </div>
        </div>
    </section>

    <!-- Service Areas Section -->
    <section class="service-areas-section">
        <div class="container">
            <div class="section-content">
                <div class="content-header text-center animate-on-scroll animate-fade-up">
                    <h2><?php echo aimpro_get_field('locations_areas_heading', 'Nationwide Service Coverage'); ?></h2>
                    <div class="curly-underline-accent"></div>
                    <p class="section-description"><?php echo aimpro_get_field('locations_areas_description', 'While based in Birmingham, our digital marketing expertise extends across the entire UK. We serve clients from London to Edinburgh, delivering consistent, high-quality results regardless of location.'); ?></p>
                </div>

                <div class="service-areas-grid">
                    <!-- Primary Coverage Area -->
                    <div class="area-card primary-area animate-on-scroll animate-stagger animate-fade-up">
                        <div class="area-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="var(--primary-orange)"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('locations_primary_area', 'West Midlands'); ?></h3>
                        <p><?php echo aimpro_get_field('locations_primary_description', 'Our primary service area including Birmingham, Coventry, Wolverhampton, and surrounding areas with dedicated on-site support.'); ?></p>
                        <div class="area-badge primary">Primary Coverage</div>
                    </div>

                    <!-- Regional Coverage Areas -->
                    <div class="area-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="area-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--primary-orange)"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('locations_secondary_area_1', 'Greater London'); ?></h3>
                        <p><?php echo aimpro_get_field('locations_secondary_description_1', 'Full digital marketing services for London-based businesses with regular client visits and remote collaboration.'); ?></p>
                        <div class="area-badge">Regional Coverage</div>
                    </div>

                    <div class="area-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="area-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--primary-orange)"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('locations_secondary_area_2', 'Northern England'); ?></h3>
                        <p><?php echo aimpro_get_field('locations_secondary_description_2', 'Comprehensive digital marketing solutions for Manchester, Leeds, Sheffield, and surrounding Northern regions.'); ?></p>
                        <div class="area-badge">Regional Coverage</div>
                    </div>

                    <div class="area-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="area-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--primary-orange)"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('locations_secondary_area_3', 'Scotland & Wales'); ?></h3>
                        <p><?php echo aimpro_get_field('locations_secondary_description_3', 'Expert digital marketing services for businesses across Scotland and Wales with remote-first approach.'); ?></p>
                        <div class="area-badge">Regional Coverage</div>
                    </div>

                    <!-- Additional Regional Coverage Areas -->
                    <div class="area-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="area-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--primary-orange)"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('locations_south_west', 'South West England'); ?></h3>
                        <p><?php echo aimpro_get_field('locations_south_west_description', 'Professional digital marketing for Bristol, Bath, Plymouth, and the South West region with tailored local strategies.'); ?></p>
                        <div class="area-badge">Regional Coverage</div>
                    </div>

                    <div class="area-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="area-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--primary-orange)"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('locations_south_east', 'South East England'); ?></h3>
                        <p><?php echo aimpro_get_field('locations_south_east_description', 'Complete digital marketing support for Brighton, Reading, Oxford, and South East businesses seeking growth.'); ?></p>
                        <div class="area-badge">Regional Coverage</div>
                    </div>

                    <div class="area-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="area-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--primary-orange)"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('locations_east_england', 'East of England'); ?></h3>
                        <p><?php echo aimpro_get_field('locations_east_description', 'Strategic digital marketing services for Cambridge, Norwich, Ipswich, and East England\'s growing business community.'); ?></p>
                        <div class="area-badge">Regional Coverage</div>
                    </div>

                    <div class="area-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="area-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--primary-orange)"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('locations_northern_ireland', 'Northern Ireland'); ?></h3>
                        <p><?php echo aimpro_get_field('locations_ni_description', 'Specialized digital marketing expertise for Belfast and Northern Ireland businesses with local market knowledge.'); ?></p>
                        <div class="area-badge">Regional Coverage</div>
                    </div>

                    <div class="area-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="area-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--primary-orange)"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('locations_yorkshire_humber', 'Yorkshire & The Humber'); ?></h3>
                        <p><?php echo aimpro_get_field('locations_yorkshire_description', 'Expert digital marketing solutions for Leeds, York, Hull, and the broader Yorkshire region with focus on local business growth.'); ?></p>
                        <div class="area-badge">Regional Coverage</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="locations-cta-section">
        <div class="container">
            <div class="cta-content text-center animate-on-scroll animate-fade-up">
                <div class="cta-icon">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" fill="white"/>
                    </svg>
                </div>
                <h2><?php echo aimpro_get_field('locations_cta_heading', 'Ready to Start Your Digital Journey?'); ?></h2>
                <p class="cta-description"><?php echo aimpro_get_field('locations_cta_description', 'Contact our Birmingham team or schedule a remote consultation to discover how we can help you dominate your market.'); ?></p>
                
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary btn-large">
                        <span>Get Free Consultation</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="tel:+441212858490" class="btn btn-secondary btn-large">
                        <i class="fas fa-phone"></i>
                        <span>Call Now: 0121 285 8490</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
