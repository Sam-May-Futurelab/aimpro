# Contact Page - Editable Fields Setup Guide

This document lists all the custom fields that need to be created in WordPress Admin (Custom Fields / ACF) for the Contact Page to be fully editable.

## Hero Section
- `contact_hero_badge_icon` - Icon class for hero badge (default: fas fa-map-marker-alt)
- `contact_hero_badge_text` - Badge text (default: LOCATED IN BIRMINGHAM'S BUSINESS DISTRICT)
- `contact_hero_title` - Main hero title with HTML allowed (default: Get In Touch with <span class="text-gradient">Digital Marketing Experts</span>)
- `contact_hero_description` - Hero description text

## Quick Contact Info
- `contact_phone_number` - Phone number for tel: link (default: +441212858490)
- `contact_phone_icon` - Phone icon class (default: fas fa-phone)
- `contact_phone_label` - Phone label text (default: Call Us Now)
- `contact_phone_display` - Phone display text (default: +44 121 285 8490)
- `contact_email_address` - Email for mailto: link (default: hello@aimpro.co.uk)
- `contact_email_icon` - Email icon class (default: fas fa-envelope)
- `contact_email_label` - Email label text (default: Email Us)
- `contact_email_display` - Email display text (default: hello@aimpro.co.uk)
- `contact_hours_icon` - Hours icon class (default: fas fa-clock)
- `contact_hours_label` - Hours label text (default: Business Hours)
- `contact_hours_display` - Hours display text (default: Mon-Fri: 9AM-6PM)

## Contact Form Section
- `contact_form_section_title` - Form section main title (default: Send Us a Message)
- `contact_form_section_subtitle` - Form section subtitle
- `contact_form_title` - Form header title (default: Get In Touch)
- `contact_form_subtitle` - Form header subtitle
- `contact_form_name_label` - Name field label (default: Name *)
- `contact_form_email_label` - Email field label (default: Email *)
- `contact_form_phone_label` - Phone field label (default: Phone)
- `contact_form_referral_label` - Referral field label (default: Where did you find us?)
- `contact_form_query_label` - Query field label (default: Query)
- `contact_form_query_placeholder` - Query field placeholder
- `contact_form_submit_text` - Submit button text (default: Submit)

## Visit Us Section
- `contact_visit_title` - Visit section title
- `contact_visit_description` - Visit section description
- `contact_visit_cta_phone` - CTA phone number for link
- `contact_visit_cta_text` - CTA button text (default: BOOK A COFFEE MEETING)
- `contact_office_title` - Office details title (default: Our Birmingham Office)
- `contact_office_location_label` - Location label (default: Located in:)
- `contact_office_location` - Office location (default: 55 Colmore Row)
- `contact_office_address_label` - Address label (default: Address:)
- `contact_office_address` - Full office address
- `contact_office_description` - Office description
- `contact_office_image_url` - Office image URL
- `contact_office_image_alt` - Office image alt text

## FAQ Section
- `contact_faq_title` - FAQ section title (default: Frequently Asked Questions)
- `contact_faq_subtitle` - FAQ section subtitle
- `contact_faq_1_question` through `contact_faq_6_question` - FAQ questions (6 total)
- `contact_faq_1_answer` through `contact_faq_6_answer` - FAQ answers (6 total)

## Social Proof Section
- `contact_social_proof_title` - Social proof section title
- `contact_social_proof_subtitle` - Social proof section subtitle
- `contact_stat_1_number` through `contact_stat_4_number` - Statistics numbers (4 total)
- `contact_stat_1_label` through `contact_stat_4_label` - Statistics labels (4 total)
- `contact_testimonial_quote` - Featured testimonial quote
- `contact_testimonial_author` - Testimonial author name
- `contact_testimonial_position` - Testimonial author position/company

## Final CTA Section
- `contact_final_cta_title` - Final CTA title with HTML allowed
- `contact_final_cta_description` - Final CTA description
- `contact_final_cta_phone_number` - Phone number for CTA link
- `contact_final_cta_phone_text` - Phone CTA button text
- `contact_final_cta_email_address` - Email for CTA link
- `contact_final_cta_email_text` - Email CTA button text
- `contact_final_cta_guarantee` - Guarantee text

## Setup Instructions
1. In WordPress Admin, go to Custom Fields > Field Groups (if using ACF)
2. Create a new field group called "Contact Page Fields"
3. Add all the above fields as Text, Textarea, or URL fields as appropriate
4. Set the location rules to show only on the Contact page
5. Save and the fields will be available for editing

## Notes
- All fields have sensible defaults so the page will work even before fields are populated
- HTML is allowed in title fields that contain `<span>` tags
- Phone numbers should include country code for international compatibility
- Icon fields use Font Awesome classes (fas fa-icon-name)
