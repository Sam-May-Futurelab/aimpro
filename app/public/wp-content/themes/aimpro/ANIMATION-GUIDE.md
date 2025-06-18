# Premium Scroll Animations Guide

## Quick Start - Adding Animations

### Basic Animation Classes:

1. **Fade Up** (most common): `animate-on-scroll animate-fade-up`
2. **Fade In**: `animate-on-scroll animate-fade-in`
3. **Slide Left**: `animate-on-scroll animate-slide-left`
4. **Slide Right**: `animate-on-scroll animate-slide-right`
5. **Scale Up**: `animate-on-scroll animate-scale-up`
6. **Staggered** (for grids): `animate-on-scroll animate-stagger animate-fade-up`

### How to Use:

```html
<!-- Section headings -->
<h2 class="animate-on-scroll animate-fade-up">Section Title</h2>

<!-- Cards in a grid -->
<div class="service-card animate-on-scroll animate-stagger animate-fade-up">

<!-- Hero content -->
<div class="hero-content animate-on-scroll animate-fade-up">

<!-- Testimonials -->
<div class="testimonial-card animate-on-scroll animate-slide-left">

<!-- Call-to-action sections -->
<section class="cta-section animate-on-scroll animate-scale-up">
```

### Performance Features:

✅ **Lightweight**: Only 3KB total file size
✅ **Optimized**: Uses Intersection Observer API
✅ **Accessible**: Respects prefers-reduced-motion
✅ **One-time**: Elements animate once, then stop observing
✅ **Smooth**: Hardware-accelerated CSS transitions

### Animation Timing:

- **Hero sections**: 1s duration
- **Headings**: 0.7s duration  
- **Cards**: 0.6s duration
- **Forms**: 0.4s duration
- **Stagger delay**: 100ms between items

### Already Applied To:

- ✅ **Careers page** (hero, benefits, job cards, testimonials, form)
- ✅ **Index page** (hero section)
- ✅ **Company page** (header, overview, timeline, values, stats)
- ✅ **Contact page** (hero section, contact cards, form)
- ✅ **Partner page** (header, overview, partnership cards)
- ✅ **Funnel Builds page** (hero section)
- ✅ **Lead Generation page** (hero, services, case study, process, FAQ, CTA)
- ✅ **Website Development page** (hero, services, case study, process, FAQ, CTA)
- ✅ **Streamline Sales Funnel page** (hero, overview, services, case study, process, benefits, FAQ, CTA)
- ✅ **Google Ads page** (hero, services, case study, industries, pricing, testimonial, CTA)
- ✅ **Services main page** (header, intro, service grid, categories)

### Currently In Progress:

- 🔄 **Marketing Automation pages**
- 🔄 **Local SEO and SEO services pages**
- 🔄 **PPC/Advertising pages (Meta Ads, Microsoft Ads)**
- 🔄 **Industries pages**
- 🔄 **Solutions pages**

### Recommended Usage:

- **Section headings**: Always use `animate-fade-up`
- **Card grids**: Use `animate-stagger animate-fade-up`
- **Hero content**: Use `animate-fade-up`
- **Side content**: Use `animate-slide-left` or `animate-slide-right`
- **Call-to-actions**: Use `animate-scale-up`

The system is fully automatic - just add the classes and animations will trigger when elements come into view!
