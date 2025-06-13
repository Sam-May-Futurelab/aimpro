<!-- Service Links Grid -->
<div class="service-links-container">
    <a href="<?php echo home_url('/branding'); ?>" class="service-link">
        <span class="service-icon">🎨</span>
        <span class="service-name">Branding</span>
        <span class="service-arrow">→</span>
    </a>
    <a href="<?php echo home_url('/website-design'); ?>" class="service-link">
        <span class="service-icon">💻</span>
        <span class="service-name">Website Design</span>
        <span class="service-arrow">→</span>
    </a>
    <a href="<?php echo home_url('/app-design'); ?>" class="service-link">
        <span class="service-icon">📱</span>
        <span class="service-name">App Design</span>
        <span class="service-arrow">→</span>
    </a>
    <a href="<?php echo home_url('/development'); ?>" class="service-link">
        <span class="service-icon">⚙️</span>
        <span class="service-name">Development</span>
        <span class="service-arrow">→</span>
    </a>
    <a href="<?php echo home_url('/ui-ux-design'); ?>" class="service-link">
        <span class="service-icon">👆</span>
        <span class="service-name">UI/UX Design</span>
        <span class="service-arrow">→</span>
    </a>
    <a href="<?php echo home_url('/graphic-design'); ?>" class="service-link">
        <span class="service-icon">🖌️</span>
        <span class="service-name">Graphic Design</span>
        <span class="service-arrow">→</span>
    </a>
    <a href="<?php echo home_url('/motion-graphic'); ?>" class="service-link">
        <span class="service-icon">🎬</span>
        <span class="service-name">Motion Graphic</span>
        <span class="service-arrow">→</span>
    </a>
    <a href="<?php echo home_url('/digital-marketing'); ?>" class="service-link">
        <span class="service-icon">📊</span>
        <span class="service-name">Digital Marketing</span>
        <span class="service-arrow">→</span>
    </a>
    <a href="<?php echo home_url('/seo-services'); ?>" class="service-link">
        <span class="service-icon">🔍</span>
        <span class="service-name">SEO</span>
        <span class="service-arrow">→</span>
    </a>
</div>

<style>
/* Service Links Grid */
.service-links-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1rem;
    margin: 2rem 0;
    width: 100%;
}

/* Service Links Section on Services Page */
.service-links-grid {
    padding: 2rem 0 4rem 0;
    background: var(--bg-secondary);
    border-top: 1px solid var(--border-light);
    border-bottom: 1px solid var(--border-light);
}

.service-links-heading {
    text-align: center;
    margin-bottom: 2rem;
}

.service-links-heading h2 {
    font-size: 2.2rem;
    margin-bottom: 1rem;
    color: var(--text-primary);
}

.service-links-heading p {
    color: var(--text-secondary);
    max-width: 800px;
    margin: 0 auto;
}

/* Related Services on Service Template */
.related-services {
    margin: 4rem 0 2rem;
    padding-top: 2rem;
    border-top: 1px solid var(--border-light);
}

.related-services h3 {
    text-align: center;
    margin-bottom: 2rem;
    font-size: 1.8rem;
    color: var(--text-primary);
}

.service-link {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: rgba(255, 255, 255, 0.03);
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.service-link:hover {
    background: rgba(241, 90, 37, 0.1);
    transform: translateX(5px);
}

.service-icon {
    font-size: 1.2rem;
    width: 35px;
    height: 35px;
    background: var(--gradient-orange);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.service-name {
    color: var(--text-primary);
    font-weight: 500;
    flex: 1;
}

.service-arrow {
    color: var(--primary-orange);
    font-weight: 600;
    transition: transform 0.3s ease;
}

.service-link:hover .service-arrow {
    transform: translateX(5px);
}

/* Light Theme Support */
:root.light-theme .service-link {
    background: rgba(241, 90, 37, 0.05);
    border: 1px solid rgba(241, 90, 37, 0.1);
}

:root.light-theme .service-link:hover {
    background: rgba(241, 90, 37, 0.1);
    border-color: rgba(241, 90, 37, 0.2);
}

:root.light-theme .service-name {
    color: var(--text-secondary);
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .service-links-container {
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    }
    
    .service-links-heading h2 {
        font-size: 1.8rem;
    }
    
    .related-services h3 {
        font-size: 1.5rem;
    }
}

@media (max-width: 480px) {
    .service-links-container {
        grid-template-columns: 1fr;
    }
    
    .service-links-heading h2 {
        font-size: 1.5rem;
    }
}
</style>
