<?php
// Meta fields for Streamline Your Sales Funnel page

// Enqueue media uploader scripts
add_action('admin_enqueue_scripts', function($hook) {
    if ($hook == 'post.php' || $hook == 'post-new.php') {
        global $post;
        if (isset($post)) {
            $page_template = get_page_template_slug($post->ID);
            $page_slug = get_post_field('post_name', $post->ID);
            
            if ($page_template === 'page-streamline-sales-funnel.php' || $page_slug === 'streamline-sales-funnel' || $page_slug === 'funnel-builds') {
                wp_enqueue_media();
            }
        }
    }
});

add_action('add_meta_boxes', function() {
    global $post;
    $template = get_page_template_slug($post->ID);
    $slug = get_post_field('post_name', $post->ID);
    if ($template === 'page-streamline-sales-funnel.php' || $slug === 'streamline-sales-funnel' || $slug === 'funnel-builds') {
        add_meta_box('streamline_sales_funnel_meta', 'Sales Funnel Page Content', 'streamline_sales_funnel_meta_callback', 'page', 'normal', 'high');
    }
});

function streamline_sales_funnel_meta_callback($post) {
    // Use nonce for verification
    wp_nonce_field('streamline_sales_funnel_meta', 'streamline_sales_funnel_meta_nonce');
    
    // Initialize default values if fields are empty
    $header_title = get_post_meta($post->ID, 'streamline_sales_funnel_header_title', true);
    if (empty($header_title)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_header_title', 'Streamline Your Sales Funnel');
    }
    
    $header_subtitle = get_post_meta($post->ID, 'streamline_sales_funnel_header_subtitle', true);
    if (empty($header_subtitle)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_header_subtitle', 'optimise every stage of your sales process to convert more prospects into paying customers');
    }
    
    $overview_title = get_post_meta($post->ID, 'streamline_sales_funnel_overview_title', true);
    if (empty($overview_title)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_overview_title', 'Turn More Prospects Into Customers');
    }
    
    $overview_description = get_post_meta($post->ID, 'streamline_sales_funnel_overview_description', true);
    if (empty($overview_description)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_overview_description', 'A well-optimised sales funnel is the difference between business growth and stagnation. Our systematic approach identifies bottlenecks, eliminates friction, and creates a smooth journey that guides prospects from awareness to purchase. We build funnels that work around the clock to grow your business.');
    }
    
    $strategy_title = get_post_meta($post->ID, 'streamline_sales_funnel_strategy_title', true);
    if (empty($strategy_title)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_strategy_title', 'Our Sales Funnel optimisation Services');
    }
    
    // Initialize services array if empty
    $services = get_post_meta($post->ID, 'streamline_sales_funnel_services', true);
    if (empty($services) || !is_array($services)) {
        $default_services = array(
            array(
                'title' => 'Funnel Analysis & Audit',
                'description' => 'Comprehensive analysis of your current sales process to identify bottlenecks and optimisation opportunities.',
                'features' => array('Customer journey mapping', 'Conversion rate analysis', 'Drop-off point identification', 'Process documentation')
            ),
            array(
                'title' => 'Lead Scoring & Qualification',
                'description' => 'Implement intelligent lead scoring systems to prioritise high-value prospects and improve sales efficiency.',
                'features' => array('behavioural scoring models', 'Demographic weighting', 'Automated qualification', 'Sales handoff criteria')
            ),
            array(
                'title' => 'Automation & Nurturing',
                'description' => 'Create automated sequences that guide prospects through your funnel with personalised touchpoints.',
                'features' => array('Email automation sequences', 'behavioural triggers', 'Follow-up scheduling', 'personalisation engines')
            )
        );
        update_post_meta($post->ID, 'streamline_sales_funnel_services', $default_services);
    }
    
    // Initialize case study fields
    $case_title = get_post_meta($post->ID, 'streamline_sales_funnel_case_title', true);
    if (empty($case_title)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_case_title', 'How TechFlow Solutions Increased Conversions by 340%');
    }
    
    $case_description = get_post_meta($post->ID, 'streamline_sales_funnel_case_description', true);
    if (empty($case_description)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_case_description', 'A B2B software company struggling with low conversion rates and long sales cycles. We completely redesigned their funnel strategy and implemented automated nurturing sequences.');
    }
    
    // Initialize case study results
    $case_results = get_post_meta($post->ID, 'streamline_sales_funnel_case_results', true);
    if (empty($case_results) || !is_array($case_results)) {
        $default_results = array(
            array('label' => 'Conversion Rate Increase', 'value' => '340%'),
            array('label' => 'Sales Cycle Reduction', 'value' => '45%'),
            array('label' => 'Lead Quality Improvement', 'value' => '280%'),
            array('label' => 'Revenue Growth', 'value' => '£125K')
        );
        update_post_meta($post->ID, 'streamline_sales_funnel_case_results', $default_results);
    }
    
    // Initialize process steps
    $process_steps = get_post_meta($post->ID, 'streamline_sales_funnel_process_steps', true);
    if (empty($process_steps) || !is_array($process_steps)) {
        $default_steps = array(
            array('title' => 'Discovery & Analysis', 'description' => 'We analyse your current funnel, identify bottlenecks, and map your customer journey to understand where prospects drop off.'),
            array('title' => 'Strategy Development', 'description' => 'Create a comprehensive optimisation plan with clear conversion goals, lead scoring criteria, and automation workflows.'),
            array('title' => 'Implementation & Setup', 'description' => 'Build and configure your optimised funnel with automation tools, tracking systems, and conversion optimisation elements.'),
            array('title' => 'Testing & Refinement', 'description' => 'A/B test different elements, monitor performance metrics, and continuously refine the funnel for maximum effectiveness.'),
            array('title' => 'Monitoring & optimisation', 'description' => 'Ongoing performance monitoring with regular reporting and strategic adjustments to maintain peak conversion rates.')
        );
        update_post_meta($post->ID, 'streamline_sales_funnel_process_steps', $default_steps);
    }
    
    $process_title = get_post_meta($post->ID, 'streamline_sales_funnel_process_title', true);
    if (empty($process_title)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_process_title', 'Our 5-Step Funnel optimisation Process');
    }
    
    // Initialize testimonial
    $testimonial_quote = get_post_meta($post->ID, 'streamline_sales_funnel_testimonial_quote', true);
    if (empty($testimonial_quote)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_testimonial_quote', 'Aimpro completely transformed our sales process. Our conversion rates increased by 340% and our sales team is now focusing on qualified leads only. The ROI has been incredible.');
    }
    
    $testimonial_name = get_post_meta($post->ID, 'streamline_sales_funnel_testimonial_name', true);
    if (empty($testimonial_name)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_testimonial_name', 'Sarah Johnson');
    }
    
    $testimonial_position = get_post_meta($post->ID, 'streamline_sales_funnel_testimonial_position', true);
    if (empty($testimonial_position)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_testimonial_position', 'VP of Sales');
    }
    
    $testimonial_company = get_post_meta($post->ID, 'streamline_sales_funnel_testimonial_company', true);
    if (empty($testimonial_company)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_testimonial_company', 'TechFlow Solutions');
    }
    
    // Initialize CTA
    $cta_title = get_post_meta($post->ID, 'streamline_sales_funnel_cta_title', true);
    if (empty($cta_title)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_cta_title', 'Ready to optimise Your Sales Funnel?');
    }
    
    $cta_description = get_post_meta($post->ID, 'streamline_sales_funnel_cta_description', true);
    if (empty($cta_description)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_cta_description', 'Stop losing potential customers to inefficient sales processes. Let us build you a high-converting funnel that turns more prospects into paying customers.');
    }
    
    $cta_primary_text = get_post_meta($post->ID, 'streamline_sales_funnel_cta_primary_text', true);
    if (empty($cta_primary_text)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_cta_primary_text', 'Start Your Funnel optimisation');
    }
    
    $cta_secondary_text = get_post_meta($post->ID, 'streamline_sales_funnel_cta_secondary_text', true);
    if (empty($cta_secondary_text)) {
        update_post_meta($post->ID, 'streamline_sales_funnel_cta_secondary_text', 'View Case Studies');
    }
    ?>
    <div style="margin-bottom:20px;">
        <label><strong>Header Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_header_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_header_title', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Header Subtitle</strong></label><br>
        <input type="text" name="streamline_sales_funnel_header_subtitle" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_header_subtitle', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Overview Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_overview_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_overview_title', true)); ?>" style="width:100%;" />
    </div>    <div style="margin-bottom:20px;">
        <label><strong>Overview Description</strong></label><br>
        <textarea name="streamline_sales_funnel_overview_description" style="width:100%;height:60px;"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_sales_funnel_overview_description', true)); ?></textarea>
    </div>
    <div style="margin-bottom:20px;" class="image-upload-container">
        <label><strong>Overview Image</strong></label><br>
        <input type="hidden" 
               id="streamline_sales_funnel_overview_image" 
               name="streamline_sales_funnel_overview_image" 
               value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_overview_image', true)); ?>" />
        <button type="button" class="button upload-button" data-target="streamline_sales_funnel_overview_image">Upload Image</button>
        <?php 
        $overview_image_id = get_post_meta($post->ID, 'streamline_sales_funnel_overview_image', true);
        if ($overview_image_id): 
        ?>
            <img src="<?php echo esc_url(wp_get_attachment_url($overview_image_id)); ?>" class="image-preview" />
            <button type="button" class="button remove-button" data-target="streamline_sales_funnel_overview_image">Remove</button>
        <?php endif; ?>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Problems We Solve (one per line)</strong></label><br>
        <textarea name="streamline_sales_funnel_problems" style="width:100%;height:60px;"><?php echo esc_textarea(implode("\n", (array)get_post_meta($post->ID, 'streamline_sales_funnel_problems', true))); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Strategy Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_strategy_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_strategy_title', true)); ?>" style="width:100%;" />
    </div>    <div style="margin-bottom:20px;">
        <label><strong>Services (repeatable)</strong></label><br>
        <?php
        $services = get_post_meta($post->ID, 'streamline_sales_funnel_services', true);
        if (!is_array($services) || empty($services)) {
            $services = array(
                array(
                    'title' => 'Funnel Analysis & Audit',
                    'description' => 'Comprehensive analysis of your current sales process to identify bottlenecks and optimisation opportunities.',
                    'features' => array('Customer journey mapping', 'Conversion rate analysis', 'Drop-off point identification', 'Process documentation')
                ),
                array(
                    'title' => 'Lead Scoring & Qualification', 
                    'description' => 'Implement intelligent lead scoring systems to prioritise high-value prospects and improve sales efficiency.',
                    'features' => array('behavioural scoring models', 'Demographic weighting', 'Automated qualification', 'Sales handoff criteria')
                ),
                array(
                    'title' => 'Automation & Nurturing',
                    'description' => 'Create automated sequences that guide prospects through your funnel with personalised touchpoints.',
                    'features' => array('Email automation sequences', 'behavioural triggers', 'Follow-up scheduling', 'personalisation engines')
                )
            );
        }
        for ($i = 0; $i < max(3, count($services)); $i++) {
            $service = $services[$i] ?? ['title'=>'','description'=>'','features'=>[]];
            ?>
            <div style="border:1px solid #ccc;padding:10px;margin-bottom:10px;">
                <input type="text" name="streamline_sales_funnel_services[<?php echo $i; ?>][title]" value="<?php echo esc_attr($service['title']); ?>" placeholder="Service Title" style="width:100%;margin-bottom:5px;" />
                <textarea name="streamline_sales_funnel_services[<?php echo $i; ?>][description]" placeholder="Service Description" style="width:100%;height:40px;margin-bottom:5px;"><?php echo esc_textarea($service['description']); ?></textarea>
                <textarea name="streamline_sales_funnel_services[<?php echo $i; ?>][features]" placeholder="Features (one per line)" style="width:100%;height:40px;"><?php echo esc_textarea(implode("\n", (array)($service['features'] ?? []))); ?></textarea>
            </div>
            <?php
        }        ?>
        <button type="button" class="button add-service">Add Service</button>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Label</strong></label><br>
        <input type="text" name="streamline_sales_funnel_case_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_case_label', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_case_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_case_title', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Description</strong></label><br>
        <textarea name="streamline_sales_funnel_case_description" style="width:100%;height:60px;"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_sales_funnel_case_description', true)); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Challenge (one per line)</strong></label><br>
        <textarea name="streamline_sales_funnel_case_challenge" style="width:100%;height:40px;"><?php echo esc_textarea(implode("\n", (array)get_post_meta($post->ID, 'streamline_sales_funnel_case_challenge', true))); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Solution (one per line)</strong></label><br>
        <textarea name="streamline_sales_funnel_case_solution" style="width:100%;height:40px;"><?php echo esc_textarea(implode("\n", (array)get_post_meta($post->ID, 'streamline_sales_funnel_case_solution', true))); ?></textarea>
    </div>    <div style="margin-bottom:20px;">
        <label><strong>Case Study Results (repeatable: label & value)</strong></label><br>
        <?php
        $default_results = array(
            array('label' => 'Conversion Rate Increase', 'value' => '340%'),
            array('label' => 'Sales Cycle Reduction', 'value' => '45%'),
            array('label' => 'Lead Quality Improvement', 'value' => '280%'),
            array('label' => 'Revenue Growth', 'value' => '£125K')
        );
        $results = get_post_meta($post->ID, 'streamline_sales_funnel_case_results', true) ?: $default_results;
        if (!is_array($results)) $results = $default_results;
        for ($i = 0; $i < max(4, count($results)); $i++) {
            $result = $results[$i] ?? ['label'=>'','value'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="streamline_sales_funnel_case_results[<?php echo $i; ?>][label]" value="<?php echo esc_attr($result['label']); ?>" placeholder="Result Label" style="width:48%;margin-right:2%;" />
                <input type="text" name="streamline_sales_funnel_case_results[<?php echo $i; ?>][value]" value="<?php echo esc_attr($result['value']); ?>" placeholder="Result Value" style="width:48%;" />
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-result">Add Result</button>
        <script>
        jQuery(document).ready(function($){
            $('.add-result').on('click',function(){
                var $last = $(this).prevAll('div').last();
                var $clone = $last.clone();
                $clone.find('input').val('');
                $last.after($clone);
            });
        });
        </script>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Link (URL)</strong></label><br>
        <input type="text" name="streamline_sales_funnel_case_link" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_case_link', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Process Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_process_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_process_title', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Process Steps (repeatable: title & description)</strong></label><br>
        <?php
        $steps = get_post_meta($post->ID, 'streamline_sales_funnel_process_steps', true);
        if (!is_array($steps)) $steps = [];
        for ($i = 0; $i < max(1, count($steps)); $i++) {
            $step = $steps[$i] ?? ['title'=>'','description'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="streamline_sales_funnel_process_steps[<?php echo $i; ?>][title]" value="<?php echo esc_attr($step['title']); ?>" placeholder="Step Title" style="width:100%;margin-bottom:3px;" />
                <textarea name="streamline_sales_funnel_process_steps[<?php echo $i; ?>][description]" placeholder="Step Description" style="width:100%;height:30px;"><?php echo esc_textarea($step['description']); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-step">Add Step</button>
        <script>
        jQuery(document).ready(function($){
            $('.add-step').on('click',function(){
                var $last = $(this).prevAll('div').last();
                var $clone = $last.clone();
                $clone.find('input,textarea').val('');
                $last.after($clone);
            });
        });
        </script>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Stages Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_stages_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_stages_title', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Stages (repeatable: title, description, features)</strong></label><br>
        <?php
        $stages = get_post_meta($post->ID, 'streamline_sales_funnel_stages', true);
        if (!is_array($stages)) $stages = [];
        for ($i = 0; $i < max(1, count($stages)); $i++) {
            $stage = $stages[$i] ?? ['title'=>'','description'=>'','features'=>[]];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="streamline_sales_funnel_stages[<?php echo $i; ?>][title]" value="<?php echo esc_attr($stage['title']); ?>" placeholder="Stage Title" style="width:100%;margin-bottom:3px;" />
                <textarea name="streamline_sales_funnel_stages[<?php echo $i; ?>][description]" placeholder="Stage Description" style="width:100%;height:30px;"><?php echo esc_textarea($stage['description']); ?></textarea>
                <textarea name="streamline_sales_funnel_stages[<?php echo $i; ?>][features]" placeholder="Features (one per line)" style="width:100%;height:30px;"><?php echo esc_textarea(implode("\n", (array)($stage['features'] ?? []))); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-stage">Add Stage</button>
        <script>
        jQuery(document).ready(function($){
            $('.add-stage').on('click',function(){
                var $last = $(this).prevAll('div').last();
                var $clone = $last.clone();
                $clone.find('input,textarea').val('');
                $last.after($clone);
            });
        });
        </script>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Business Types Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_types_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_types_title', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Business Types (repeatable: title, features, result)</strong></label><br>
        <?php
        $types = get_post_meta($post->ID, 'streamline_sales_funnel_types', true);
        if (!is_array($types)) $types = [];
        for ($i = 0; $i < max(1, count($types)); $i++) {
            $type = $types[$i] ?? ['title'=>'','features'=>[],'result'=>''];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="streamline_sales_funnel_types[<?php echo $i; ?>][title]" value="<?php echo esc_attr($type['title']); ?>" placeholder="Type Title" style="width:100%;margin-bottom:3px;" />
                <textarea name="streamline_sales_funnel_types[<?php echo $i; ?>][features]" placeholder="Features (one per line)" style="width:100%;height:30px;"><?php echo esc_textarea(implode("\n", (array)($type['features'] ?? []))); ?></textarea>
                <input type="text" name="streamline_sales_funnel_types[<?php echo $i; ?>][result]" value="<?php echo esc_attr($type['result']); ?>" placeholder="Result" style="width:100%;margin-top:3px;" />
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-type">Add Type</button>
        <script>
        jQuery(document).ready(function($){
            $('.add-type').on('click',function(){
                var $last = $(this).prevAll('div').last();
                var $clone = $last.clone();
                $clone.find('input,textarea').val('');
                $last.after($clone);
            });
        });
        </script>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Technology Stack Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_tech_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_tech_title', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Technology Stack (repeatable: category, tools)</strong></label><br>
        <?php
        $tech = get_post_meta($post->ID, 'streamline_sales_funnel_tech', true);
        if (!is_array($tech)) $tech = [];
        for ($i = 0; $i < max(1, count($tech)); $i++) {
            $cat = $tech[$i] ?? ['category'=>'','tools'=>[]];
            ?>
            <div style="border:1px solid #ccc;padding:5px;margin-bottom:5px;">
                <input type="text" name="streamline_sales_funnel_tech[<?php echo $i; ?>][category]" value="<?php echo esc_attr($cat['category']); ?>" placeholder="Category" style="width:100%;margin-bottom:3px;" />
                <textarea name="streamline_sales_funnel_tech[<?php echo $i; ?>][tools]" placeholder="Tools (one per line)" style="width:100%;height:30px;"><?php echo esc_textarea(implode("\n", (array)($cat['tools'] ?? []))); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-tech">Add Category</button>
        <script>
        jQuery(document).ready(function($){
            $('.add-tech').on('click',function(){
                var $last = $(this).prevAll('div').last();
                var $clone = $last.clone();
                $clone.find('input,textarea').val('');
                $last.after($clone);
            });
        });
        </script>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Testimonial Quote</strong></label><br>
        <textarea name="streamline_sales_funnel_testimonial_quote" style="width:100%;height:40px;"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_sales_funnel_testimonial_quote', true)); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Testimonial Name</strong></label><br>
        <input type="text" name="streamline_sales_funnel_testimonial_name" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_testimonial_name', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Testimonial Position</strong></label><br>
        <input type="text" name="streamline_sales_funnel_testimonial_position" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_testimonial_position', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Testimonial Company</strong></label><br>
        <input type="text" name="streamline_sales_funnel_testimonial_company" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_testimonial_company', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_cta_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_cta_title', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Description</strong></label><br>
        <textarea name="streamline_sales_funnel_cta_description" style="width:100%;height:40px;"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_sales_funnel_cta_description', true)); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Primary Button Text</strong></label><br>
        <input type="text" name="streamline_sales_funnel_cta_primary_text" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_cta_primary_text', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Primary Button Link</strong></label><br>
        <input type="text" name="streamline_sales_funnel_cta_primary_link" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_cta_primary_link', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Secondary Button Text</strong></label><br>
        <input type="text" name="streamline_sales_funnel_cta_secondary_text" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_cta_secondary_text', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Secondary Button Link</strong></label><br>
        <input type="text" name="streamline_sales_funnel_cta_secondary_link" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_cta_secondary_link', true)); ?>" style="width:100%;" />
    </div>    <div style="margin-bottom:20px;">
        <label><strong>CTA Benefits (one per line)</strong></label><br>
        <textarea name="streamline_sales_funnel_cta_benefits" style="width:100%;height:40px;"><?php echo esc_textarea(implode("\n", (array)get_post_meta($post->ID, 'streamline_sales_funnel_cta_benefits', true))); ?></textarea>
    </div>
    
    <style>
        .image-upload-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .image-preview {
            max-width: 200px;
            max-height: 150px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-top: 10px;
        }
        .upload-button,
        .remove-button {
            width: fit-content;
        }
    </style>
    
    <script>
    jQuery(document).ready(function($) {
        // Existing add service functionality
        $('.add-service').on('click', function(){
            var $last = $(this).prevAll('div').last();
            var $clone = $last.clone();
            $clone.find('input,textarea').val('');
            $last.after($clone);
        });
        
        // Image upload functionality
        var custom_uploader;
        $('.upload-button').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var target = $this.data('target');
            
            if (custom_uploader) {
                custom_uploader.open();
                return;
            }
            
            custom_uploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Image',
                button: {
                    text: 'Choose Image'
                },
                multiple: false
            });
            
            custom_uploader.on('select', function() {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('#' + target).val(attachment.id);
                
                // Update preview
                var $container = $this.closest('.image-upload-container');
                $container.find('.image-preview').remove();
                $container.find('.remove-button').remove();
                $container.append('<img src="' + attachment.url + '" class="image-preview" />');
                $container.append('<button type="button" class="button remove-button" data-target="' + target + '">Remove</button>');
            });
            
            custom_uploader.open();
        });
        
        // Remove image functionality
        $(document).on('click', '.remove-button', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('#' + target).val('');
            $(this).siblings('.image-preview').remove();
            $(this).remove();
        });
    });
    </script>
    
    <?php
}

// Save Streamline Sales Funnel meta data
add_action('save_post', function($post_id) {
    if (!isset($_POST['streamline_sales_funnel_meta_nonce']) || !wp_verify_nonce($_POST['streamline_sales_funnel_meta_nonce'], 'streamline_sales_funnel_meta')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $streamline_fields = [
        'streamline_sales_funnel_header_title', 'streamline_sales_funnel_header_subtitle',
        'streamline_sales_funnel_overview_title', 'streamline_sales_funnel_overview_description',
        'streamline_service_1_title', 'streamline_service_1_desc',
        'streamline_service_2_title', 'streamline_service_2_desc', 
        'streamline_service_3_title', 'streamline_service_3_desc',
        'streamline_case_title', 'streamline_case_description',
        'streamline_result_1_number', 'streamline_result_1_label',
        'streamline_result_2_number', 'streamline_result_2_label',
        'streamline_result_3_number', 'streamline_result_3_label',
        'streamline_result_4_number', 'streamline_result_4_label',
        'streamline_process_title',
        'streamline_step_1_title', 'streamline_step_1_desc',
        'streamline_step_2_title', 'streamline_step_2_desc',
        'streamline_step_3_title', 'streamline_step_3_desc',
        'streamline_step_4_title', 'streamline_step_4_desc',
        'streamline_step_5_title', 'streamline_step_5_desc',
        'streamline_testimonial_quote', 'streamline_testimonial_author', 'streamline_testimonial_position',
        'streamline_cta_title', 'streamline_cta_description', 'streamline_cta_button'
    ];

    foreach ($streamline_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_textarea_field($_POST[$field]));
        }
    }
});

// Add Marketing Automation meta box
add_action('add_meta_boxes', function() {
    global $post;
    $template = get_page_template_slug($post->ID);
    $slug = get_post_field('post_name', $post->ID);
    if ($template === 'page-marketing-automation.php' || $slug === 'marketing-automation') {
        add_meta_box('marketing_automation_meta', 'Marketing Automation Settings', 'marketing_automation_meta_callback', 'page', 'normal', 'high');
    }
});

function marketing_automation_meta_callback($post) {
    wp_nonce_field('marketing_automation_meta', 'marketing_automation_meta_nonce');
    ?>
    <style>
        .meta-section { margin-bottom: 30px; padding: 15px; border: 1px solid #ddd; }
        .meta-section h3 { margin-top: 0; colour: #23282d; }
        .meta-field { margin-bottom: 15px; }
        .meta-field label { display: block; margin-bottom: 5px; font-weight: 600; }
        .meta-field input, .meta-field textarea { width: 100%; }
        .meta-field textarea { height: 80px; }
        .stats-row { display: flex; gap: 20px; }
        .stats-row .meta-field { flex: 1; }
    </style>

    <div class="meta-section">
        <h3>Page Header</h3>
        <div class="meta-field">
            <label>Header Title</label>
            <input type="text" name="ma_header_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_header_title', true) ?: 'Marketing Automation Services'); ?>" />
        </div>
        <div class="meta-field">
            <label>Header Subtitle</label>
            <textarea name="ma_header_subtitle"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_header_subtitle', true) ?: 'Streamline your marketing processes and nurture leads automatically'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Header Badges (comma-separated)</label>
            <input type="text" name="ma_header_badges" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_header_badges', true) ?: 'AI-Powered, CRM Integration, Multi-Channel'); ?>" />
        </div>
    </div>

    <div class="meta-section">
        <h3>Service Overview</h3>
        <div class="meta-field">
            <label>Overview Title</label>
            <input type="text" name="ma_overview_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_overview_title', true) ?: 'Automate Your Way to Growth'); ?>" />
        </div>
        <div class="meta-field">
            <label>Overview Description (First Paragraph)</label>
            <textarea name="ma_overview_description_1"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_overview_description_1', true) ?: 'Our marketing automation services help you create sophisticated, personalised customer journeys that nurture leads, increase conversions, and drive revenue growth. From email sequences to AI-powered chatbots, we build automation systems that work 24/7 to grow your business.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Overview Description (Second Paragraph)</label>
            <textarea name="ma_overview_description_2"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_overview_description_2', true) ?: 'By leveraging cutting-edge automation tools and AI technology, we help you deliver the right message to the right person at the right time, creating meaningful connections that drive long-term customer relationships.'); ?></textarea>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label>Stat 1 Number</label>
                <input type="text" name="ma_stat_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_stat_1_number', true) ?: '60%'); ?>" />
            </div>
            <div class="meta-field">
                <label>Stat 1 Label</label>
                <input type="text" name="ma_stat_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_stat_1_label', true) ?: 'Time savings on average'); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label>Stat 2 Number</label>
                <input type="text" name="ma_stat_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_stat_2_number', true) ?: '300%'); ?>" />
            </div>
            <div class="meta-field">
                <label>Stat 2 Label</label>
                <input type="text" name="ma_stat_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_stat_2_label', true) ?: 'Increase in lead nurturing'); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label>Stat 3 Number</label>
                <input type="text" name="ma_stat_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_stat_3_number', true) ?: '85%'); ?>" />
            </div>
            <div class="meta-field">
                <label>Stat 3 Label</label>
                <input type="text" name="ma_stat_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_stat_3_label', true) ?: 'Improvement in conversion rates'); ?>" />
            </div>
        </div>
    </div>

    <div class="meta-section">
        <h3>Services Section</h3>
        <div class="meta-field">
            <label>Services Section Title</label>
            <input type="text" name="ma_services_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_services_title', true) ?: 'Our Marketing Automation Services'); ?>" />
        </div>
        <div class="meta-field">
            <label>Services Section Description</label>
            <textarea name="ma_services_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_services_description', true) ?: 'Streamline your marketing processes with intelligent automation solutions that nurture leads and drive conversions.'); ?></textarea>
        </div>

        <h4>Service 1: AI CRM Setup & Integration</h4>
        <div class="meta-field">
            <label>Service 1 Title</label>
            <input type="text" name="ma_service_1_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_1_title', true) ?: 'AI CRM Setup & Integration'); ?>" />
        </div>
        <div class="meta-field">
            <label>Service 1 Description</label>
            <textarea name="ma_service_1_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_1_description', true) ?: 'Implement and configure advanced CRM systems with AI capabilities to manage leads, track customer interactions, and automate sales processes.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 1 Features (one per line)</label>
            <textarea name="ma_service_1_features"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_1_features', true) ?: "CRM platform selection and setup\nAI lead scoring implementation\nSales pipeline automation\nCustom field and workflow creation\nThird-party integrations"); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 1 Metric</label>
            <input type="text" name="ma_service_1_metric" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_1_metric', true) ?: 'Average: 50% increase in sales efficiency'); ?>" />
        </div>

        <h4>Service 2: Email & SMS Automation Flows</h4>
        <div class="meta-field">
            <label>Service 2 Title</label>
            <input type="text" name="ma_service_2_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_2_title', true) ?: 'Email & SMS Automation Flows'); ?>" />
        </div>
        <div class="meta-field">
            <label>Service 2 Description</label>
            <textarea name="ma_service_2_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_2_description', true) ?: 'Create sophisticated email and SMS sequences that nurture leads, onboard customers, and drive repeat purchases automatically.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 2 Features (one per line)</label>
            <textarea name="ma_service_2_features"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_2_features', true) ?: "Welcome series automation\nAbandoned cart recovery\nLead nurturing sequences\nCustomer onboarding flows\nRe-engagement campaigns"); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 2 Metric</label>
            <input type="text" name="ma_service_2_metric" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_2_metric', true) ?: 'Average: 25% increase in email revenue'); ?>" />
        </div>

        <h4>Service 3: Email Marketing Campaigns</h4>
        <div class="meta-field">
            <label>Service 3 Title</label>
            <input type="text" name="ma_service_3_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_3_title', true) ?: 'Email Marketing Campaigns'); ?>" />
        </div>
        <div class="meta-field">
            <label>Service 3 Description</label>
            <textarea name="ma_service_3_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_3_description', true) ?: 'Design and execute targeted email marketing campaigns that engage your audience and drive conversions with personalised messaging.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 3 Features (one per line)</label>
            <textarea name="ma_service_3_features"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_3_features', true) ?: "Campaign strategy and planning\nEmail template design\nList segmentation and targeting\nA/B testing and optimisation\nPerformance analytics and reporting"); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 3 Metric</label>
            <input type="text" name="ma_service_3_metric" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_3_metric', true) ?: 'Average: 35% improvement in open rates'); ?>" />
        </div>

        <h4>Service 4: Sales Funnel Automation</h4>
        <div class="meta-field">
            <label>Service 4 Title</label>
            <input type="text" name="ma_service_4_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_4_title', true) ?: 'Sales Funnel Automation'); ?>" />
        </div>
        <div class="meta-field">
            <label>Service 4 Description</label>
            <textarea name="ma_service_4_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_4_description', true) ?: 'Build and optimise automated sales funnels that guide prospects through your buying process and maximise conversion rates.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 4 Features (one per line)</label>
            <textarea name="ma_service_4_features"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_4_features', true) ?: "Funnel strategy and mapping\nLead magnet creation\nAutomated follow-up sequences\nConversion optimisation\nMulti-step campaign setup"); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 4 Metric</label>
            <input type="text" name="ma_service_4_metric" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_4_metric', true) ?: 'Average: 180% increase in funnel conversions'); ?>" />
        </div>

        <h4>Service 5: Chatbot Development</h4>
        <div class="meta-field">
            <label>Service 5 Title</label>
            <input type="text" name="ma_service_5_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_5_title', true) ?: 'Chatbot Development'); ?>" />
        </div>
        <div class="meta-field">
            <label>Service 5 Description</label>
            <textarea name="ma_service_5_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_5_description', true) ?: 'Deploy intelligent chatbots that provide instant customer support, qualify leads, and automate common interactions 24/7.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 5 Features (one per line)</label>
            <textarea name="ma_service_5_features"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_5_features', true) ?: "AI chatbot development\nLead qualification automation\nCustomer support automation\nMulti-platform deployment\nNatural language processing"); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 5 Metric</label>
            <input type="text" name="ma_service_5_metric" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_5_metric', true) ?: 'Average: 40% reduction in response time'); ?>" />
        </div>

        <h4>Service 6: AI Marketing Tools</h4>
        <div class="meta-field">
            <label>Service 6 Title</label>
            <input type="text" name="ma_service_6_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_6_title', true) ?: 'AI Marketing Tools'); ?>" />
        </div>
        <div class="meta-field">
            <label>Service 6 Description</label>
            <textarea name="ma_service_6_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_6_description', true) ?: 'Implement cutting-edge AI tools and technologies to optimise your marketing processes and improve decision-making.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 6 Features (one per line)</label>
            <textarea name="ma_service_6_features"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_6_features', true) ?: "AI-powered content creation\nPredictive analytics setup\nAutomated personalisation\nMachine learning optimisation\nAI tool integration and training"); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 6 Metric</label>
            <input type="text" name="ma_service_6_metric" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_service_6_metric', true) ?: 'Average: 45% improvement in marketing efficiency'); ?>" />
        </div>
    </div>

    <div class="meta-section">
        <h3>Case Study Section</h3>
        <div class="meta-field">
            <label>Case Study Title</label>
            <input type="text" name="ma_case_study_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_study_title', true) ?: 'Case Study: SaaS Company Transformation'); ?>" />
        </div>
        <div class="meta-field">
            <label>Case Study Subtitle</label>
            <input type="text" name="ma_case_study_subtitle" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_study_subtitle', true) ?: 'Complete Marketing Automation Saves 35 Hours Weekly'); ?>" />
        </div>
        <div class="meta-field">
            <label>Case Study Description</label>
            <textarea name="ma_case_study_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_case_study_description', true) ?: 'A growing SaaS company was struggling with manual lead nurturing and inefficient sales processes. Our comprehensive marketing automation solution transformed their entire customer acquisition system.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Case Study Challenges (one per line)</label>
            <textarea name="ma_case_study_challenges"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_case_study_challenges', true) ?: "Manual lead qualification consuming 20+ hours weekly\nInconsistent follow-up with potential customers\nNo systematic onboarding process\nPoor lead to customer conversion rates\nDisconnected marketing and sales processes"); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Case Study Solutions (one per line)</label>
            <textarea name="ma_case_study_solutions"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_case_study_solutions', true) ?: "Implemented AI-powered CRM with lead scoring\nCreated automated nurturing email sequences\nBuilt comprehensive onboarding automation\nDeployed chatbot for initial lead qualification\nIntegrated all systems for seamless data flow"); ?></textarea>
        </div>
        
        <div class="stats-row">
            <div class="meta-field">
                <label>Case Study Metric 1 Number</label>
                <input type="text" name="ma_case_metric_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_metric_1_number', true) ?: '35 Hours'); ?>" />
            </div>
            <div class="meta-field">
                <label>Case Study Metric 1 Label</label>
                <input type="text" name="ma_case_metric_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_metric_1_label', true) ?: 'Weekly Time Savings'); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label>Case Study Metric 2 Number</label>
                <input type="text" name="ma_case_metric_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_metric_2_number', true) ?: '240%'); ?>" />
            </div>
            <div class="meta-field">
                <label>Case Study Metric 2 Label</label>
                <input type="text" name="ma_case_metric_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_metric_2_label', true) ?: 'Increase in Lead Conversions'); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label>Case Study Metric 3 Number</label>
                <input type="text" name="ma_case_metric_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_metric_3_number', true) ?: '68%'); ?>" />
            </div>
            <div class="meta-field">
                <label>Case Study Metric 3 Label</label>
                <input type="text" name="ma_case_metric_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_metric_3_label', true) ?: 'Faster Sales Cycle'); ?>" />
            </div>
        </div>
        <div class="stats-row">
            <div class="meta-field">
                <label>Case Study Metric 4 Number</label>
                <input type="text" name="ma_case_metric_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_metric_4_number', true) ?: '12 Weeks'); ?>" />
            </div>
            <div class="meta-field">
                <label>Case Study Metric 4 Label</label>
                <input type="text" name="ma_case_metric_4_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_case_metric_4_label', true) ?: 'Implementation Timeline'); ?>" />
            </div>
        </div>
    </div>

    <div class="meta-section">
        <h3>Testimonial Section</h3>
        <div class="meta-field">
            <label>Testimonial Quote</label>
            <textarea name="ma_testimonial_quote"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_testimonial_quote', true) ?: 'The marketing automation system AIM Pro Marketing built for us has been a game-changer. We\'re now nurturing 10x more leads with half the manual work. Our conversion rates have never been higher.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Testimonial Author Name</label>
            <input type="text" name="ma_testimonial_author_name" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_testimonial_author_name', true) ?: 'Jennifer Walsh'); ?>" />
        </div>
        <div class="meta-field">
            <label>Testimonial Author Position</label>
            <input type="text" name="ma_testimonial_author_position" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_testimonial_author_position', true) ?: 'VP of Marketing, InnovateTech Solutions'); ?>" />
        </div>
    </div>

    <div class="meta-section">
        <h3>CTA Section</h3>
        <div class="meta-field">
            <label>CTA Title</label>
            <input type="text" name="ma_cta_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_cta_title', true) ?: 'Ready to Automate Your Marketing?'); ?>" />
        </div>
        <div class="meta-field">
            <label>CTA Description</label>
            <textarea name="ma_cta_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_cta_description', true) ?: 'Let\'s create a custom automation strategy that saves you time while improving your marketing results.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Primary Button Text</label>
            <input type="text" name="ma_cta_primary_button_text" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_cta_primary_button_text', true) ?: 'Get Free Automation Audit'); ?>" />
        </div>
        <div class="meta-field">
            <label>Primary Button URL</label>
            <input type="url" name="ma_cta_primary_button_url" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_cta_primary_button_url', true) ?: '/contact'); ?>" />
        </div>
        <div class="meta-field">
            <label>Secondary Button Text</label>
            <input type="text" name="ma_cta_secondary_button_text" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_cta_secondary_button_text', true) ?: 'View All Services'); ?>" />
        </div>
        <div class="meta-field">
            <label>Secondary Button URL</label>
            <input type="url" name="ma_cta_secondary_button_url" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_cta_secondary_button_url', true) ?: '/services'); ?>" />
        </div>
        <div class="meta-field">
            <label>CTA Features (comma-separated)</label>
            <input type="text" name="ma_cta_features" value="<?php echo esc_attr(get_post_meta($post->ID, 'ma_cta_features', true) ?: '✓ Free process analysis, ✓ Custom automation strategy, ✓ ROI projection included'); ?>" />
        </div>
    </div>
    <?php
}

// Save Marketing Automation meta data
add_action('save_post', function($post_id) {
    if (!isset($_POST['marketing_automation_meta_nonce']) || !wp_verify_nonce($_POST['marketing_automation_meta_nonce'], 'marketing_automation_meta')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $ma_fields = [
        'ma_header_title', 'ma_header_subtitle', 'ma_header_badges',
        'ma_overview_title', 'ma_overview_description_1', 'ma_overview_description_2',
        'ma_stat_1_number', 'ma_stat_1_label', 'ma_stat_2_number', 'ma_stat_2_label',
        'ma_stat_3_number', 'ma_stat_3_label',
        'ma_services_title', 'ma_services_description',
        'ma_service_1_title', 'ma_service_1_description', 'ma_service_1_features', 'ma_service_1_metric',
        'ma_service_2_title', 'ma_service_2_description', 'ma_service_2_features', 'ma_service_2_metric',
        'ma_service_3_title', 'ma_service_3_description', 'ma_service_3_features', 'ma_service_3_metric',
        'ma_service_4_title', 'ma_service_4_description', 'ma_service_4_features', 'ma_service_4_metric',
        'ma_service_5_title', 'ma_service_5_description', 'ma_service_5_features', 'ma_service_5_metric',
        'ma_service_6_title', 'ma_service_6_description', 'ma_service_6_features', 'ma_service_6_metric',
        'ma_case_study_title', 'ma_case_study_subtitle', 'ma_case_study_description',
        'ma_case_study_challenges', 'ma_case_study_solutions',
        'ma_case_metric_1_number', 'ma_case_metric_1_label', 'ma_case_metric_2_number', 'ma_case_metric_2_label',
        'ma_case_metric_3_number', 'ma_case_metric_3_label', 'ma_case_metric_4_number', 'ma_case_metric_4_label',
        'ma_testimonial_quote', 'ma_testimonial_author_name', 'ma_testimonial_author_position',
        'ma_cta_title', 'ma_cta_description',
        'ma_cta_primary_button_text', 'ma_cta_primary_button_url',
        'ma_cta_secondary_button_text', 'ma_cta_secondary_button_url',
        'ma_cta_features'
    ];

    foreach ($ma_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_textarea_field($_POST[$field]));
        }
    }
});

// Add AI CRM Setup meta box
add_action('add_meta_boxes', function() {
    global $post;
    $template = get_page_template_slug($post->ID);
    $slug = get_post_field('post_name', $post->ID);
    if ($template === 'page-ai-crm-setup.php' || $slug === 'ai-crm-setup') {
        add_meta_box('ai_crm_setup_meta', 'AI CRM Setup Settings', 'ai_crm_setup_meta_callback', 'page', 'normal', 'high');
    }
});

function ai_crm_setup_meta_callback($post) {
    wp_nonce_field('ai_crm_setup_meta', 'ai_crm_setup_meta_nonce');
    ?>
    <style>
        .ai-meta-section { margin-bottom: 25px; padding: 15px; border: 1px solid #ddd; }
        .ai-meta-section h3 { margin-top: 0; colour: #23282d; }
        .ai-meta-field { margin-bottom: 15px; }
        .ai-meta-field label { display: block; margin-bottom: 5px; font-weight: 600; }
        .ai-meta-field input, .ai-meta-field textarea { width: 100%; }
        .ai-meta-field textarea { height: 80px; }
        .ai-stats-row { display: flex; gap: 20px; }
        .ai-stats-row .ai-meta-field { flex: 1; }
    </style>

    <div class="ai-meta-section">
        <h3>Hero Section</h3>
        <div class="ai-meta-field">
            <label>Hero Title</label>
            <input type="text" name="ai_hero_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_hero_title', true) ?: 'AI-Powered CRM Setup & Implementation'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Hero Subtitle</label>
            <textarea name="ai_hero_subtitle"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_hero_subtitle', true) ?: 'Transform your customer relationship management with AI-driven CRM systems that automate lead scoring, predict customer behaviour, and optimise your entire sales funnel for maximum conversion.'); ?></textarea>
        </div>
        <div class="ai-stats-row">
            <div class="ai-meta-field">
                <label>Hero Stat 1 Number</label>
                <input type="text" name="ai_hero_stat_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_hero_stat_1_number', true) ?: '340%'); ?>" />
            </div>
            <div class="ai-meta-field">
                <label>Hero Stat 1 Label</label>
                <input type="text" name="ai_hero_stat_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_hero_stat_1_label', true) ?: 'Lead Conversion Increase'); ?>" />
            </div>
        </div>
        <div class="ai-stats-row">
            <div class="ai-meta-field">
                <label>Hero Stat 2 Number</label>
                <input type="text" name="ai_hero_stat_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_hero_stat_2_number', true) ?: '85%'); ?>" />
            </div>
            <div class="ai-meta-field">
                <label>Hero Stat 2 Label</label>
                <input type="text" name="ai_hero_stat_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_hero_stat_2_label', true) ?: 'Faster Lead Response'); ?>" />
            </div>
        </div>
        <div class="ai-stats-row">
            <div class="ai-meta-field">
                <label>Hero Stat 3 Number</label>
                <input type="text" name="ai_hero_stat_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_hero_stat_3_number', true) ?: '60%'); ?>" />
            </div>
            <div class="ai-meta-field">
                <label>Hero Stat 3 Label</label>
                <input type="text" name="ai_hero_stat_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_hero_stat_3_label', true) ?: 'Sales Cycle Reduction'); ?>" />
            </div>
        </div>
        <div class="ai-meta-field">
            <label>Hero Primary Button Text</label>
            <input type="text" name="ai_hero_primary_btn" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_hero_primary_btn', true) ?: 'Start CRM Setup'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Hero Secondary Button Text</label>
            <input type="text" name="ai_hero_secondary_btn" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_hero_secondary_btn', true) ?: 'View Packages'); ?>" />
        </div>
    </div>

    <div class="ai-meta-section">
        <h3>Service Overview</h3>
        <div class="ai-meta-field">
            <label>Overview Title</label>
            <input type="text" name="ai_overview_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_overview_title', true) ?: 'Intelligent CRM Implementation'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Overview Description</label>
            <textarea name="ai_overview_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_overview_description', true) ?: 'Modern businesses need more than basic contact management. Our AI-powered CRM implementations leverage machine learning, predictive analytics, and intelligent automation to transform how you manage customer relationships and drive revenue growth.'); ?></textarea>
        </div>

        <h4>Service Items</h4>
        <div class="ai-meta-field">
            <label>Service 1 Title</label>
            <input type="text" name="ai_service_1_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_service_1_title', true) ?: 'AI Lead Scoring'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Service 1 Description</label>
            <textarea name="ai_service_1_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_service_1_desc', true) ?: 'Automatically score and prioritise leads based on behaviour, demographics, and engagement patterns using machine learning algorithms.'); ?></textarea>
        </div>

        <div class="ai-meta-field">
            <label>Service 2 Title</label>
            <input type="text" name="ai_service_2_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_service_2_title', true) ?: 'Predictive Analytics'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Service 2 Description</label>
            <textarea name="ai_service_2_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_service_2_desc', true) ?: 'Forecast customer lifetime value, churn probability, and optimal engagement timing with advanced AI models.'); ?></textarea>
        </div>

        <div class="ai-meta-field">
            <label>Service 3 Title</label>
            <input type="text" name="ai_service_3_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_service_3_title', true) ?: 'Workflow Automation'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Service 3 Description</label>
            <textarea name="ai_service_3_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_service_3_desc', true) ?: 'Create intelligent workflows that adapt based on customer behaviour and automatically trigger the right actions at the right time.'); ?></textarea>
        </div>

        <div class="ai-meta-field">
            <label>Service 4 Title</label>
            <input type="text" name="ai_service_4_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_service_4_title', true) ?: 'Sales Pipeline optimisation'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Service 4 Description</label>
            <textarea name="ai_service_4_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_service_4_desc', true) ?: 'AI-driven pipeline management that identifies bottlenecks and suggests optimal next actions for each prospect.'); ?></textarea>
        </div>

        <div class="ai-meta-field">
            <label>Service 5 Title</label>
            <input type="text" name="ai_service_5_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_service_5_title', true) ?: 'Intelligent Customer Insights'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Service 5 Description</label>
            <textarea name="ai_service_5_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_service_5_desc', true) ?: 'Deep customer profiling using AI to understand preferences, behaviour patterns, and optimal communication strategies.'); ?></textarea>
        </div>

        <div class="ai-meta-field">
            <label>Service 6 Title</label>
            <input type="text" name="ai_service_6_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_service_6_title', true) ?: 'Omnichannel Integration'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Service 6 Description</label>
            <textarea name="ai_service_6_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_service_6_desc', true) ?: 'Unified customer view across all touchpoints with AI-powered attribution and engagement tracking.'); ?></textarea>
        </div>
    </div>

    <div class="ai-meta-section">
        <h3>Case Study</h3>
        <div class="ai-meta-field">
            <label>Case Study Title</label>
            <input type="text" name="ai_case_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_case_title', true) ?: 'Case Study: SaaS Company Transformation'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Case Study Intro</label>
            <textarea name="ai_case_intro"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_case_intro', true) ?: 'How we helped a growing SaaS company increase lead conversion by 340% and reduce sales cycle time by 60% through intelligent CRM implementation.'); ?></textarea>
        </div>
        <div class="ai-meta-field">
            <label>Challenge Description</label>
            <textarea name="ai_case_challenge"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_case_challenge', true) ?: 'A rapidly growing SaaS company was struggling with manual lead management, inconsistent follow-up, and inability to identify high-value prospects. Their sales team was spending 70% of time on administrative tasks instead of selling, and lead response times averaged 4+ hours.'); ?></textarea>
        </div>
        <div class="ai-meta-field">
            <label>Solution Points (one per line)</label>
            <textarea name="ai_case_solution"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_case_solution', true) ?: "Implemented HubSpot CRM with custom AI lead scoring model\nBuilt predictive analytics dashboard for customer lifetime value\nCreated intelligent workflow automation for lead nurturing\nIntegrated omnichannel communication tracking\nDeployed AI chatbot for initial lead qualification"); ?></textarea>
        </div>
        
        <div class="ai-stats-row">
            <div class="ai-meta-field">
                <label>Result 1 Number</label>
                <input type="text" name="ai_result_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_result_1_number', true) ?: '340%'); ?>" />
            </div>
            <div class="ai-meta-field">
                <label>Result 1 Label</label>
                <input type="text" name="ai_result_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_result_1_label', true) ?: 'Lead Conversion Increase'); ?>" />
            </div>
        </div>
        <div class="ai-stats-row">
            <div class="ai-meta-field">
                <label>Result 2 Number</label>
                <input type="text" name="ai_result_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_result_2_number', true) ?: '85%'); ?>" />
            </div>
            <div class="ai-meta-field">
                <label>Result 2 Label</label>
                <input type="text" name="ai_result_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_result_2_label', true) ?: 'Faster Lead Response'); ?>" />
            </div>
        </div>
        <div class="ai-stats-row">
            <div class="ai-meta-field">
                <label>Result 3 Number</label>
                <input type="text" name="ai_result_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_result_3_number', true) ?: '60%'); ?>" />
            </div>
            <div class="ai-meta-field">
                <label>Result 3 Label</label>
                <input type="text" name="ai_result_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_result_3_label', true) ?: 'Sales Cycle Reduction'); ?>" />
            </div>
        </div>
        <div class="ai-stats-row">
            <div class="ai-meta-field">
                <label>Result 4 Number</label>
                <input type="text" name="ai_result_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_result_4_number', true) ?: '£2.1M'); ?>" />
            </div>
            <div class="ai-meta-field">
                <label>Result 4 Label</label>
                <input type="text" name="ai_result_4_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_result_4_label', true) ?: 'Additional Annual Revenue'); ?>" />
            </div>
        </div>
    </div>

    <div class="ai-meta-section">
        <h3>Process Section</h3>
        <div class="ai-meta-field">
            <label>Process Title</label>
            <input type="text" name="ai_process_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_process_title', true) ?: 'Our AI CRM Implementation Process'); ?>" />
        </div>
        
        <?php for ($i = 1; $i <= 5; $i++): 
            $step_titles = [
                1 => 'Discovery & Analysis',
                2 => 'Platform Selection & Design', 
                3 => 'Data Migration & Cleansing',
                4 => 'AI Configuration & Training',
                5 => 'Testing & optimisation'
            ];
            $step_descriptions = [
                1 => 'Comprehensive audit of current CRM processes, data quality assessment, and identification of AI automation opportunities.',
                2 => 'Choose optimal CRM platform and design AI-powered workflows tailored to your sales process and customer journey.',
                3 => 'Migrate existing data with AI-powered cleansing and enrichment to ensure high-quality, actionable customer information.',
                4 => 'Configure machine learning models, set up predictive analytics, and train AI systems on your specific business patterns.',
                5 => 'Comprehensive testing of AI workflows, user training, and continuous optimisation based on performance data.'
            ];
        ?>
        <h4>Step <?php echo $i; ?></h4>
        <div class="ai-meta-field">
            <label>Step <?php echo $i; ?> Title</label>
            <input type="text" name="ai_step_<?php echo $i; ?>_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_step_' . $i . '_title', true) ?: $step_titles[$i]); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Step <?php echo $i; ?> Description</label>
            <textarea name="ai_step_<?php echo $i; ?>_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_step_' . $i . '_desc', true) ?: $step_descriptions[$i]); ?></textarea>
        </div>
        <?php endfor; ?>
    </div>

    <div class="ai-meta-section">
        <h3>Testimonial</h3>
        <div class="ai-meta-field">
            <label>Testimonial Quote</label>
            <textarea name="ai_testimonial_quote"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_testimonial_quote', true) ?: 'The AI CRM implementation by Aimpro completely transformed our sales process. We\'re now converting 340% more leads and our sales cycle is 60% shorter. The predictive analytics help us focus on the right prospects at the right time.'); ?></textarea>
        </div>
        <div class="ai-meta-field">
            <label>Testimonial Author Name</label>
            <input type="text" name="ai_testimonial_author" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_testimonial_author', true) ?: 'James Richardson'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>Testimonial Author Position</label>
            <input type="text" name="ai_testimonial_position" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_testimonial_position', true) ?: 'VP Sales, TechFlow Solutions'); ?>" />
        </div>
    </div>

    <div class="ai-meta-section">
        <h3>CTA Section</h3>
        <div class="ai-meta-field">
            <label>CTA Title</label>
            <input type="text" name="ai_cta_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_cta_title', true) ?: 'Ready to Transform Your CRM with AI?'); ?>" />
        </div>
        <div class="ai-meta-field">
            <label>CTA Description</label>
            <textarea name="ai_cta_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ai_cta_description', true) ?: 'Stop losing leads to poor follow-up and manual processes. Our AI-powered CRM implementation will revolutionize how you manage customers and drive predictable revenue growth.'); ?></textarea>
        </div>
        <div class="ai-meta-field">
            <label>CTA Button Text</label>
            <input type="text" name="ai_cta_button" value="<?php echo esc_attr(get_post_meta($post->ID, 'ai_cta_button', true) ?: 'Start Your AI CRM'); ?>" />
        </div>
    </div>
    <?php
}

// Save AI CRM Setup meta data
add_action('save_post', function($post_id) {
    if (!isset($_POST['ai_crm_setup_meta_nonce']) || !wp_verify_nonce($_POST['ai_crm_setup_meta_nonce'], 'ai_crm_setup_meta')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $ai_fields = [
        'ai_hero_title', 'ai_hero_subtitle',
        'ai_hero_stat_1_number', 'ai_hero_stat_1_label',
        'ai_hero_stat_2_number', 'ai_hero_stat_2_label',
        'ai_hero_stat_3_number', 'ai_hero_stat_3_label',
        'ai_hero_primary_btn', 'ai_hero_secondary_btn',
        'ai_overview_title', 'ai_overview_description',
        'ai_service_1_title', 'ai_service_1_desc',
        'ai_service_2_title', 'ai_service_2_desc',
        'ai_service_3_title', 'ai_service_3_desc',
        'ai_service_4_title', 'ai_service_4_desc',
        'ai_service_5_title', 'ai_service_5_desc',
        'ai_service_6_title', 'ai_service_6_desc',
        'ai_case_title', 'ai_case_intro', 'ai_case_challenge', 'ai_case_solution',
        'ai_result_1_number', 'ai_result_1_label',
        'ai_result_2_number', 'ai_result_2_label',
        'ai_result_3_number', 'ai_result_3_label',
        'ai_result_4_number', 'ai_result_4_label',
        'ai_process_title',
        'ai_step_1_title', 'ai_step_1_desc',
        'ai_step_2_title', 'ai_step_2_desc',
        'ai_step_3_title', 'ai_step_3_desc',
        'ai_step_4_title', 'ai_step_4_desc',
        'ai_step_5_title', 'ai_step_5_desc',
        'ai_testimonial_quote', 'ai_testimonial_author', 'ai_testimonial_position',
        'ai_cta_title', 'ai_cta_description', 'ai_cta_button'
    ];

    foreach ($ai_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_textarea_field($_POST[$field]));
        }
    }
});

// Email & SMS Flows Meta Box
add_action('add_meta_boxes', function() {
    global $post;
    $template = get_page_template_slug($post->ID);
    $slug = get_post_field('post_name', $post->ID);
    if ($template === 'page-email-sms-flows.php' || $slug === 'email-sms-flows') {
        add_meta_box('email_sms_flows_meta', 'Email & SMS Flows Settings', 'email_sms_flows_meta_callback', 'page', 'normal', 'high');
    }
});

function email_sms_flows_meta_callback($post) {
    wp_nonce_field('email_sms_flows_meta', 'email_sms_flows_meta_nonce');
    ?>
    <style>
        .email-meta-section { margin-bottom: 25px; padding: 15px; border: 1px solid #ddd; }
        .email-meta-section h3 { margin-top: 0; colour: #23282d; }
        .email-meta-field { margin-bottom: 15px; }
        .email-meta-field label { display: block; margin-bottom: 5px; font-weight: 600; }
        .email-meta-field input, .email-meta-field textarea { width: 100%; }
        .email-meta-field textarea { height: 80px; }
        .email-stats-row { display: flex; gap: 20px; }
        .email-stats-row .email-meta-field { flex: 1; }
    </style>

    <div class="email-meta-section">
        <h3>Hero Section</h3>
        <div class="email-meta-field">
            <label>Hero Title</label>
            <input type="text" name="email_hero_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_title', true) ?: 'Email & SMS Automation Flows'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Hero Subtitle</label>
            <textarea name="email_hero_subtitle"><?php echo esc_textarea(get_post_meta($post->ID, 'email_hero_subtitle', true) ?: 'Create sophisticated multi-channel communication sequences that nurture leads, recover abandoned carts, and build lasting customer relationships through intelligent email and SMS automation.'); ?></textarea>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Hero Stat 1 Number</label>
                <input type="text" name="email_hero_stat_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_1_number', true) ?: '580%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Hero Stat 1 Label</label>
                <input type="text" name="email_hero_stat_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_1_label', true) ?: 'Revenue Per Email Increase'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Hero Stat 2 Number</label>
                <input type="text" name="email_hero_stat_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_2_number', true) ?: '45%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Hero Stat 2 Label</label>
                <input type="text" name="email_hero_stat_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_2_label', true) ?: 'Higher SMS Open Rates'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Hero Stat 3 Number</label>
                <input type="text" name="email_hero_stat_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_3_number', true) ?: '320%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Hero Stat 3 Label</label>
                <input type="text" name="email_hero_stat_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_stat_3_label', true) ?: 'Cart Recovery Improvement'); ?>" />
            </div>
        </div>
        <div class="email-meta-field">
            <label>Hero Primary Button Text</label>
            <input type="text" name="email_hero_primary_btn" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_primary_btn', true) ?: 'Build Your Flows'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Hero Secondary Button Text</label>
            <input type="text" name="email_hero_secondary_btn" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_hero_secondary_btn', true) ?: 'View Packages'); ?>" />
        </div>
    </div>

    <div class="email-meta-section">
        <h3>Service Overview</h3>
        <div class="email-meta-field">
            <label>Overview Title</label>
            <input type="text" name="email_overview_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_overview_title', true) ?: 'Intelligent Multi-Channel Communication'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Overview Description</label>
            <textarea name="email_overview_description"><?php echo esc_textarea(get_post_meta($post->ID, 'email_overview_description', true) ?: 'Transform one-time visitors into loyal customers with strategically designed email and SMS automation flows. Our data-driven approach ensures the right message reaches the right person at the perfect moment, maximising engagement and conversions.'); ?></textarea>
        </div>

        <h4>Service Items</h4>
        <div class="email-meta-field">
            <label>Service 1 Title</label>
            <input type="text" name="email_service_1_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_1_title', true) ?: 'Welcome Email Series'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 1 Description</label>
            <textarea name="email_service_1_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_1_desc', true) ?: 'Onboard new subscribers with engaging welcome sequences that build trust and drive first purchases.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 2 Title</label>
            <input type="text" name="email_service_2_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_2_title', true) ?: 'Abandoned Cart Recovery'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 2 Description</label>
            <textarea name="email_service_2_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_2_desc', true) ?: 'Multi-step email and SMS sequences that recover lost sales with personalised product reminders and incentives.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 3 Title</label>
            <input type="text" name="email_service_3_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_3_title', true) ?: 'SMS Marketing Automation'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 3 Description</label>
            <textarea name="email_service_3_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_3_desc', true) ?: 'High-impact SMS campaigns for time-sensitive offers, shipping updates, and urgent customer communications.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 4 Title</label>
            <input type="text" name="email_service_4_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_4_title', true) ?: 'Lead Nurturing Sequences'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 4 Description</label>
            <textarea name="email_service_4_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_4_desc', true) ?: 'Educational and value-driven email flows that guide prospects through your sales funnel over time.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 5 Title</label>
            <input type="text" name="email_service_5_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_5_title', true) ?: 'Re-engagement Campaigns'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 5 Description</label>
            <textarea name="email_service_5_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_5_desc', true) ?: 'Win back inactive subscribers and customers with targeted campaigns designed to rekindle interest.'); ?></textarea>
        </div>

        <div class="email-meta-field">
            <label>Service 6 Title</label>
            <input type="text" name="email_service_6_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_service_6_title', true) ?: 'VIP Customer Flows'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Service 6 Description</label>
            <textarea name="email_service_6_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_service_6_desc', true) ?: 'Exclusive communications for high-value customers with special offers and premium experiences.'); ?></textarea>
        </div>
    </div>

    <div class="email-meta-section">
        <h3>Case Study</h3>
        <div class="email-meta-field">
            <label>Case Study Title</label>
            <input type="text" name="email_case_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_case_title', true) ?: 'Case Study: E-commerce Revenue Recovery'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Case Study Intro</label>
            <textarea name="email_case_intro"><?php echo esc_textarea(get_post_meta($post->ID, 'email_case_intro', true) ?: 'How we helped an online fashion retailer increase revenue per email by 580% and recover 320% more abandoned carts through strategic email and SMS automation flows.'); ?></textarea>
        </div>
        <div class="email-meta-field">
            <label>Challenge Description</label>
            <textarea name="email_case_challenge"><?php echo esc_textarea(get_post_meta($post->ID, 'email_case_challenge', true) ?: 'A growing fashion e-commerce brand was losing 78% of potential customers to cart abandonment and had low customer lifetime value. Their basic email marketing generated minimal revenue, and they had no SMS strategy to complement their efforts.'); ?></textarea>
        </div>
        <div class="email-meta-field">
            <label>Solution Points (one per line)</label>
            <textarea name="email_case_solution"><?php echo esc_textarea(get_post_meta($post->ID, 'email_case_solution', true) ?: "Designed 12-email welcome series with fashion styling tips and progressive discounts\nCreated 5-step abandoned cart recovery flow with SMS integration\nBuilt browse abandonment flows for window shoppers\nImplemented post-purchase upsell and review request sequences\nDeveloped VIP customer program with exclusive SMS alerts"); ?></textarea>
        </div>
        
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Result 1 Number</label>
                <input type="text" name="email_result_1_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_1_number', true) ?: '580%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Result 1 Label</label>
                <input type="text" name="email_result_1_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_1_label', true) ?: 'Revenue Per Email Increase'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Result 2 Number</label>
                <input type="text" name="email_result_2_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_2_number', true) ?: '320%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Result 2 Label</label>
                <input type="text" name="email_result_2_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_2_label', true) ?: 'Cart Recovery Improvement'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Result 3 Number</label>
                <input type="text" name="email_result_3_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_3_number', true) ?: '45%'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Result 3 Label</label>
                <input type="text" name="email_result_3_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_3_label', true) ?: 'SMS Open Rate'); ?>" />
            </div>
        </div>
        <div class="email-stats-row">
            <div class="email-meta-field">
                <label>Result 4 Number</label>
                <input type="text" name="email_result_4_number" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_4_number', true) ?: '£185K'); ?>" />
            </div>
            <div class="email-meta-field">
                <label>Result 4 Label</label>
                <input type="text" name="email_result_4_label" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_result_4_label', true) ?: 'Additional Monthly Revenue'); ?>" />
            </div>
        </div>
    </div>

    <div class="email-meta-section">
        <h3>Process Section</h3>
        <div class="email-meta-field">
            <label>Process Title</label>
            <input type="text" name="email_process_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_process_title', true) ?: 'Our Flow Development Process'); ?>" />
        </div>
        
        <?php for ($i = 1; $i <= 5; $i++): 
            $step_titles = [
                1 => 'Customer Journey Mapping',
                2 => 'Flow Strategy Design', 
                3 => 'Content Creation',
                4 => 'Technical Implementation',
                5 => 'Testing & optimisation'
            ];
            $step_descriptions = [
                1 => 'analyse your customer touchpoints and identify key moments where automation can drive engagement and conversions.',
                2 => 'Create detailed flow maps with timing, triggers, and branching logic based on customer behaviour and preferences.',
                3 => 'Develop compelling email and SMS content with persuasive copy, engaging visuals, and clear calls-to-action.',
                4 => 'Build and configure automation flows with proper tracking, segmentation, and cross-channel coordination.',
                5 => 'A/B test flow performance and continuously optimise timing, content, and triggers for maximum effectiveness.'
            ];
        ?>
        <h4>Step <?php echo $i; ?></h4>
        <div class="email-meta-field">
            <label>Step <?php echo $i; ?> Title</label>
            <input type="text" name="email_step_<?php echo $i; ?>_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_step_' . $i . '_title', true) ?: $step_titles[$i]); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Step <?php echo $i; ?> Description</label>
            <textarea name="email_step_<?php echo $i; ?>_desc"><?php echo esc_textarea(get_post_meta($post->ID, 'email_step_' . $i . '_desc', true) ?: $step_descriptions[$i]); ?></textarea>
        </div>
        <?php endfor; ?>
    </div>

    <div class="email-meta-section">
        <h3>Testimonial</h3>
        <div class="email-meta-field">
            <label>Testimonial Quote</label>
            <textarea name="email_testimonial_quote"><?php echo esc_textarea(get_post_meta($post->ID, 'email_testimonial_quote', true) ?: 'Our email and SMS flows are now our most profitable marketing channel. Aimpro\'s automation strategy increased our revenue per email by 580% and we\'re recovering 3x more abandoned carts. The ROI is incredible.'); ?></textarea>
        </div>
        <div class="email-meta-field">
            <label>Testimonial Author Name</label>
            <input type="text" name="email_testimonial_author" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_testimonial_author', true) ?: 'Sophie Chen'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>Testimonial Author Position</label>
            <input type="text" name="email_testimonial_position" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_testimonial_position', true) ?: 'Marketing Director, StyleBox Fashion'); ?>" />
        </div>
    </div>

    <div class="email-meta-section">
        <h3>CTA Section</h3>
        <div class="email-meta-field">
            <label>CTA Title</label>
            <input type="text" name="email_cta_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_cta_title', true) ?: 'Ready to Build Revenue-Generating Automation Flows?'); ?>" />
        </div>
        <div class="email-meta-field">
            <label>CTA Description</label>
            <textarea name="email_cta_description"><?php echo esc_textarea(get_post_meta($post->ID, 'email_cta_description', true) ?: 'Stop leaving money on the table with basic email marketing. Our sophisticated email and SMS automation flows will turn your subscriber list into a predictable revenue engine that works 24/7.'); ?></textarea>
        </div>
        <div class="email-meta-field">
            <label>CTA Button Text</label>
            <input type="text" name="email_cta_button" value="<?php echo esc_attr(get_post_meta($post->ID, 'email_cta_button', true) ?: 'Build Your Flows'); ?>" />
        </div>
    </div>
    <?php
}

// Save Email & SMS Flows meta data
add_action('save_post', function($post_id) {
    if (!isset($_POST['email_sms_flows_meta_nonce']) || !wp_verify_nonce($_POST['email_sms_flows_meta_nonce'], 'email_sms_flows_meta')) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $email_fields = [
        'email_hero_title', 'email_hero_subtitle',
        'email_hero_stat_1_number', 'email_hero_stat_1_label',
        'email_hero_stat_2_number', 'email_hero_stat_2_label',
        'email_hero_stat_3_number', 'email_hero_stat_3_label',
        'email_hero_primary_btn', 'email_hero_secondary_btn',
        'email_overview_title', 'email_overview_description',
        'email_service_1_title', 'email_service_1_desc',
        'email_service_2_title', 'email_service_2_desc',
        'email_service_3_title', 'email_service_3_desc',
        'email_service_4_title', 'email_service_4_desc',
        'email_service_5_title', 'email_service_5_desc',
        'email_service_6_title', 'email_service_6_desc',
        'email_case_title', 'email_case_intro', 'email_case_challenge', 'email_case_solution',
        'email_result_1_number', 'email_result_1_label',
        'email_result_2_number', 'email_result_2_label',
        'email_result_3_number', 'email_result_3_label',
        'email_result_4_number', 'email_result_4_label',
        'email_process_title',
        'email_step_1_title', 'email_step_1_desc',
        'email_step_2_title', 'email_step_2_desc',
        'email_step_3_title', 'email_step_3_desc',
        'email_step_4_title', 'email_step_4_desc',
        'email_step_5_title', 'email_step_5_desc',
        'email_testimonial_quote', 'email_testimonial_author', 'email_testimonial_position',
        'email_cta_title', 'email_cta_description', 'email_cta_button'
    ];

    foreach ($email_fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_textarea_field($_POST[$field]));
        }
    }
});
