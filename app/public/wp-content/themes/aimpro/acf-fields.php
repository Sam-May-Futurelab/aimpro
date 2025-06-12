<?php
/**
 * ACF Field Groups for Page Templates
 * 
 * This file contains the ACF field group definitions for all page templates
 * Copy these into ACF > Field Groups in WordPress admin
 */

if( function_exists('acf_add_local_field_group') ):

/**
 * Common Fields for All Page Templates
 */
acf_add_local_field_group(array(
    'key' => 'group_page_common_fields',
    'title' => 'Common Page Fields',
    'fields' => array(
        array(
            'key' => 'field_custom_h1_text',
            'label' => 'Custom H1 Text',
            'name' => 'custom_h1_text',
            'type' => 'text',
            'instructions' => 'Enter a custom H1 heading that is different from the page title.',
            'placeholder' => 'Leave empty to use the page title',
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'page',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
));

/**
 * About Page Template Fields
 */
acf_add_local_field_group(array(
    'key' => 'group_about_page_fields',
    'title' => 'About Page Content',
    'fields' => array(
        array(
            'key' => 'field_about_intro',
            'label' => 'About Intro',
            'name' => 'about_intro',
            'type' => 'wysiwyg',
            'instructions' => 'Introduction text for the about page.',
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_about_mission',
            'label' => 'Our Mission',
            'name' => 'about_mission',
            'type' => 'wysiwyg',
            'instructions' => 'The company mission statement.',
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_about_values',
            'label' => 'Our Values',
            'name' => 'about_values',
            'type' => 'wysiwyg',
            'instructions' => 'The company values.',
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_team_members',
            'label' => 'Team Members',
            'name' => 'team_members',
            'type' => 'repeater',
            'instructions' => 'Add team members.',
            'layout' => 'block',
            'button_label' => 'Add Team Member',
            'sub_fields' => array(
                array(
                    'key' => 'field_team_member_image',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                ),
                array(
                    'key' => 'field_team_member_name',
                    'label' => 'Name',
                    'name' => 'name',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_team_member_title',
                    'label' => 'Job Title',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_team_member_bio',
                    'label' => 'Bio',
                    'name' => 'bio',
                    'type' => 'textarea',
                ),
            ),
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-templates/about.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
));

/**
 * Service Page Template Fields
 */
acf_add_local_field_group(array(
    'key' => 'group_service_page_fields',
    'title' => 'Service Page Content',
    'fields' => array(
        array(
            'key' => 'field_service_intro',
            'label' => 'Service Introduction',
            'name' => 'service_intro',
            'type' => 'wysiwyg',
            'instructions' => 'Introduction text for this service.',
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_service_features',
            'label' => 'Service Features',
            'name' => 'service_features',
            'type' => 'repeater',
            'instructions' => 'Add features or benefits of this service.',
            'layout' => 'block',
            'button_label' => 'Add Service Feature',
            'sub_fields' => array(
                array(
                    'key' => 'field_service_feature_icon',
                    'label' => 'Icon',
                    'name' => 'icon',
                    'type' => 'text',
                    'instructions' => 'FontAwesome icon class (e.g. fas fa-chart-line)',
                ),
                array(
                    'key' => 'field_service_feature_title',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_service_feature_description',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                ),
            ),
        ),
        array(
            'key' => 'field_service_video',
            'label' => 'Service Video',
            'name' => 'service_video',
            'type' => 'oembed',
            'instructions' => 'Add a YouTube or Vimeo URL to embed a video.',
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_service_cta_text',
            'label' => 'CTA Button Text',
            'name' => 'service_cta_text',
            'type' => 'text',
            'default_value' => 'Get Started',
        ),
        array(
            'key' => 'field_service_cta_link',
            'label' => 'CTA Button Link',
            'name' => 'service_cta_link',
            'type' => 'url',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-templates/service.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
));

/**
 * Category Landing Page Template Fields
 */
acf_add_local_field_group(array(
    'key' => 'group_category_page_fields',
    'title' => 'Category Landing Page Content',
    'fields' => array(
        array(
            'key' => 'field_category_intro',
            'label' => 'Category Introduction',
            'name' => 'category_intro',
            'type' => 'wysiwyg',
            'instructions' => 'Introduction text for this category.',
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_category_items',
            'label' => 'Category Items',
            'name' => 'category_items',
            'type' => 'repeater',
            'instructions' => 'Add the items (pages/services) that belong to this category.',
            'layout' => 'block',
            'button_label' => 'Add Category Item',
            'sub_fields' => array(
                array(
                    'key' => 'field_category_item_image',
                    'label' => 'Image',
                    'name' => 'image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                ),
                array(
                    'key' => 'field_category_item_title',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_category_item_description',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                ),
                array(
                    'key' => 'field_category_item_link',
                    'label' => 'Link',
                    'name' => 'link',
                    'type' => 'url',
                ),
            ),
        ),
        array(
            'key' => 'field_category_cta_text',
            'label' => 'CTA Button Text',
            'name' => 'category_cta_text',
            'type' => 'text',
            'default_value' => 'Contact Us',
        ),
        array(
            'key' => 'field_category_cta_link',
            'label' => 'CTA Button Link',
            'name' => 'category_cta_link',
            'type' => 'url',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-templates/category-landing.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
));

/**
 * Resource Page Template Fields
 */
acf_add_local_field_group(array(
    'key' => 'group_resource_page_fields',
    'title' => 'Resource Page Content',
    'fields' => array(
        array(
            'key' => 'field_resource_intro',
            'label' => 'Resource Introduction',
            'name' => 'resource_intro',
            'type' => 'wysiwyg',
            'instructions' => 'Introduction text for this resource.',
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_resource_download',
            'label' => 'Resource Download',
            'name' => 'resource_download',
            'type' => 'file',
            'instructions' => 'Upload a downloadable resource file (PDF, etc.)',
            'return_format' => 'array',
        ),
        array(
            'key' => 'field_resource_cta',
            'label' => 'Resource CTA',
            'name' => 'resource_cta',
            'type' => 'group',
            'sub_fields' => array(
                array(
                    'key' => 'field_resource_cta_text',
                    'label' => 'CTA Button Text',
                    'name' => 'text',
                    'type' => 'text',
                    'default_value' => 'Contact Us',
                ),
                array(
                    'key' => 'field_resource_cta_link',
                    'label' => 'CTA Button Link',
                    'name' => 'link',
                    'type' => 'url',
                ),
            ),
        ),
        array(
            'key' => 'field_resource_video',
            'label' => 'Resource Video',
            'name' => 'resource_video',
            'type' => 'oembed',
            'instructions' => 'Add a YouTube or Vimeo URL to embed a video.',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-templates/resource.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
));

/**
 * Industry Page Template Fields
 */
acf_add_local_field_group(array(
    'key' => 'group_industry_page_fields',
    'title' => 'Industry Page Content',
    'fields' => array(
        array(
            'key' => 'field_industry_intro',
            'label' => 'Industry Introduction',
            'name' => 'industry_intro',
            'type' => 'wysiwyg',
            'instructions' => 'Introduction text for this industry.',
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        array(
            'key' => 'field_industry_challenges',
            'label' => 'Industry Challenges',
            'name' => 'industry_challenges',
            'type' => 'wysiwyg',
            'instructions' => 'Describe the challenges faced in this industry.',
        ),
        array(
            'key' => 'field_industry_solutions',
            'label' => 'Our Solutions',
            'name' => 'industry_solutions',
            'type' => 'wysiwyg',
            'instructions' => 'Describe the solutions you offer for this industry.',
        ),
        array(
            'key' => 'field_industry_stats',
            'label' => 'Industry Stats',
            'name' => 'industry_stats',
            'type' => 'repeater',
            'instructions' => 'Add statistics relevant to this industry.',
            'layout' => 'table',
            'button_label' => 'Add Statistic',
            'sub_fields' => array(
                array(
                    'key' => 'field_industry_stat_number',
                    'label' => 'Number',
                    'name' => 'number',
                    'type' => 'text',
                ),
                array(
                    'key' => 'field_industry_stat_label',
                    'label' => 'Label',
                    'name' => 'label',
                    'type' => 'text',
                ),
            ),
        ),
        array(
            'key' => 'field_industry_case_studies',
            'label' => 'Case Studies',
            'name' => 'industry_case_studies',
            'type' => 'relationship',
            'instructions' => 'Select case studies relevant to this industry.',
            'return_format' => 'object',
            'post_type' => array(
                0 => 'post',
                1 => 'page',
            ),
            'filters' => array(
                0 => 'search',
                1 => 'post_type',
            ),
            'min' => '',
            'max' => '',
        ),
        array(
            'key' => 'field_industry_video',
            'label' => 'Industry Video',
            'name' => 'industry_video',
            'type' => 'oembed',
            'instructions' => 'Add a YouTube or Vimeo URL to embed a video.',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'page_template',
                'operator' => '==',
                'value' => 'page-templates/industry.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
));

endif;
