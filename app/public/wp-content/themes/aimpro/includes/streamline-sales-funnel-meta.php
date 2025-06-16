<?php
// Meta fields for Streamline Your Sales Funnel page
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
    
    // If this is the funnel-builds page, populate empty fields from the fb_ prefixed fields if they exist
    $slug = get_post_field('post_name', $post->ID);
    if ($slug === 'funnel-builds') {
        $fb_fields = array(
            'streamline_sales_funnel_header_title' => 'fb_hero_title',
            'streamline_sales_funnel_header_subtitle' => 'fb_hero_subtitle',
            'streamline_sales_funnel_overview_title' => 'fb_intro_title',
            'streamline_sales_funnel_overview_description' => 'fb_intro_description',
            // Add more mappings as needed
        );
        
        foreach ($fb_fields as $streamline_field => $fb_field) {
            $streamline_value = get_post_meta($post->ID, $streamline_field, true);
            if (empty($streamline_value)) {
                $fb_value = get_post_meta($post->ID, $fb_field, true);
                if (!empty($fb_value)) {
                    update_post_meta($post->ID, $streamline_field, $fb_value);
                }
            }
        }
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
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Overview Description</strong></label><br>
        <textarea name="streamline_sales_funnel_overview_description" style="width:100%;height:60px;"><?php echo esc_textarea(get_post_meta($post->ID, 'streamline_sales_funnel_overview_description', true)); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Problems We Solve (one per line)</strong></label><br>
        <textarea name="streamline_sales_funnel_problems" style="width:100%;height:60px;"><?php echo esc_textarea(implode("\n", (array)get_post_meta($post->ID, 'streamline_sales_funnel_problems', true))); ?></textarea>
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Strategy Title</strong></label><br>
        <input type="text" name="streamline_sales_funnel_strategy_title" value="<?php echo esc_attr(get_post_meta($post->ID, 'streamline_sales_funnel_strategy_title', true)); ?>" style="width:100%;" />
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Services (repeatable)</strong></label><br>
        <?php
        $services = get_post_meta($post->ID, 'streamline_sales_funnel_services', true);
        if (!is_array($services)) $services = [];
        for ($i = 0; $i < max(1, count($services)); $i++) {
            $service = $services[$i] ?? ['title'=>'','description'=>'','features'=>[]];
            ?>
            <div style="border:1px solid #ccc;padding:10px;margin-bottom:10px;">
                <input type="text" name="streamline_sales_funnel_services[<?php echo $i; ?>][title]" value="<?php echo esc_attr($service['title']); ?>" placeholder="Service Title" style="width:100%;margin-bottom:5px;" />
                <textarea name="streamline_sales_funnel_services[<?php echo $i; ?>][description]" placeholder="Service Description" style="width:100%;height:40px;margin-bottom:5px;"><?php echo esc_textarea($service['description']); ?></textarea>
                <textarea name="streamline_sales_funnel_services[<?php echo $i; ?>][features]" placeholder="Features (one per line)" style="width:100%;height:40px;"><?php echo esc_textarea(implode("\n", (array)($service['features'] ?? []))); ?></textarea>
            </div>
            <?php
        }
        ?>
        <button type="button" class="button add-service">Add Service</button>
        <script>
        jQuery(document).ready(function($){
            $('.add-service').on('click',function(){
                var $last = $(this).prevAll('div').last();
                var $clone = $last.clone();
                $clone.find('input,textarea').val('');
                $last.after($clone);
            });
        });
        </script>
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
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>Case Study Results (repeatable: label & value)</strong></label><br>
        <?php
        $results = get_post_meta($post->ID, 'streamline_sales_funnel_case_results', true);
        if (!is_array($results)) $results = [];
        for ($i = 0; $i < max(1, count($results)); $i++) {
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
    </div>
    <div style="margin-bottom:20px;">
        <label><strong>CTA Benefits (one per line)</strong></label><br>
        <textarea name="streamline_sales_funnel_cta_benefits" style="width:100%;height:40px;"><?php echo esc_textarea(implode("\n", (array)get_post_meta($post->ID, 'streamline_sales_funnel_cta_benefits', true))); ?></textarea>
    </div>
    <?php
}

add_action('save_post', function($post_id) {
    if (!isset($_POST['streamline_sales_funnel_meta_nonce']) || !wp_verify_nonce($_POST['streamline_sales_funnel_meta_nonce'], 'streamline_sales_funnel_meta')) return;
    $fields = [
        'streamline_sales_funnel_header_title',
        'streamline_sales_funnel_header_subtitle',
        'streamline_sales_funnel_overview_title',
        'streamline_sales_funnel_overview_description',
        'streamline_sales_funnel_problems',
        'streamline_sales_funnel_strategy_title',
        'streamline_sales_funnel_services',
        'streamline_sales_funnel_case_label',
        'streamline_sales_funnel_case_title',
        'streamline_sales_funnel_case_description',
        'streamline_sales_funnel_case_challenge',
        'streamline_sales_funnel_case_solution',
        'streamline_sales_funnel_case_results',
        'streamline_sales_funnel_case_link',
        'streamline_sales_funnel_process_title',
        'streamline_sales_funnel_process_steps',
        'streamline_sales_funnel_stages_title',
        'streamline_sales_funnel_stages',
        'streamline_sales_funnel_types_title',
        'streamline_sales_funnel_types',
        'streamline_sales_funnel_tech_title',
        'streamline_sales_funnel_tech',
        'streamline_sales_funnel_testimonial_quote',
        'streamline_sales_funnel_testimonial_name',
        'streamline_sales_funnel_testimonial_position',
        'streamline_sales_funnel_testimonial_company',
        'streamline_sales_funnel_cta_title',
        'streamline_sales_funnel_cta_description',
        'streamline_sales_funnel_cta_primary_text',
        'streamline_sales_funnel_cta_primary_link',
        'streamline_sales_funnel_cta_secondary_text',
        'streamline_sales_funnel_cta_secondary_link',
        'streamline_sales_funnel_cta_benefits',
    ];
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = $_POST[$field];
            if (is_array($value)) {
                foreach ($value as &$v) {
                    if (is_array($v)) {
                        foreach ($v as &$vv) {
                            $vv = sanitize_text_field($vv);
                        }
                    } else {
                        $v = sanitize_text_field($v);
                    }
                }
            } else {
                $value = is_array($value) ? $value : sanitize_text_field($value);
            }
            update_post_meta($post_id, $field, $value);
        } else {
            delete_post_meta($post_id, $field);
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
        .meta-section h3 { margin-top: 0; color: #23282d; }
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
            <textarea name="ma_overview_description_1"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_overview_description_1', true) ?: 'Our marketing automation services help you create sophisticated, personalized customer journeys that nurture leads, increase conversions, and drive revenue growth. From email sequences to AI-powered chatbots, we build automation systems that work 24/7 to grow your business.'); ?></textarea>
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
            <textarea name="ma_service_3_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_3_description', true) ?: 'Design and execute targeted email marketing campaigns that engage your audience and drive conversions with personalized messaging.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 3 Features (one per line)</label>
            <textarea name="ma_service_3_features"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_3_features', true) ?: "Campaign strategy and planning\nEmail template design\nList segmentation and targeting\nA/B testing and optimization\nPerformance analytics and reporting"); ?></textarea>
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
            <textarea name="ma_service_4_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_4_description', true) ?: 'Build and optimize automated sales funnels that guide prospects through your buying process and maximize conversion rates.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 4 Features (one per line)</label>
            <textarea name="ma_service_4_features"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_4_features', true) ?: "Funnel strategy and mapping\nLead magnet creation\nAutomated follow-up sequences\nConversion optimization\nMulti-step campaign setup"); ?></textarea>
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
            <textarea name="ma_service_6_description"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_6_description', true) ?: 'Implement cutting-edge AI tools and technologies to optimize your marketing processes and improve decision-making.'); ?></textarea>
        </div>
        <div class="meta-field">
            <label>Service 6 Features (one per line)</label>
            <textarea name="ma_service_6_features"><?php echo esc_textarea(get_post_meta($post->ID, 'ma_service_6_features', true) ?: "AI-powered content creation\nPredictive analytics setup\nAutomated personalization\nMachine learning optimization\nAI tool integration and training"); ?></textarea>
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
