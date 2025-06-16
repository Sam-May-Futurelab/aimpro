<?php
// Meta fields for Streamline Your Sales Funnel page
add_action('add_meta_boxes', function() {
    global $post;
    $template = get_page_template_slug($post->ID);
    if ($template === 'page-streamline-sales-funnel.php' || get_post_field('post_name', $post->ID) === 'streamline-sales-funnel') {
        add_meta_box('streamline_sales_funnel_meta', 'Sales Funnel Page Content', 'streamline_sales_funnel_meta_callback', 'page', 'normal', 'high');
    }
});

function streamline_sales_funnel_meta_callback($post) {
    // Use nonce for verification
    wp_nonce_field('streamline_sales_funnel_meta', 'streamline_sales_funnel_meta_nonce');
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
