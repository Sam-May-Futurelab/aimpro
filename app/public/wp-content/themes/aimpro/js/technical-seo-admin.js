
jQuery(document).ready(function($) {
    // Hero Image Upload
    $('#technical_seo_hero_image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Hero Image',
            multiple: false
        }).open()
        .on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('#technical_seo_hero_image').val(image_url);
            $('#technical_seo_hero_image_preview').html('<img src="' + image_url + '" style="max-width: 200px; height: auto;" /><br>');
            if ($('#technical_seo_hero_image_remove').length === 0) {
                $('#technical_seo_hero_image_button').after(' <button type="button" class="button" id="technical_seo_hero_image_remove">Remove Image</button>');
            }
        });
    });
    
    // Hero Image Remove
    $(document).on('click', '#technical_seo_hero_image_remove', function(e) {
        e.preventDefault();
        $('#technical_seo_hero_image').val('');
        $('#technical_seo_hero_image_preview').html('');
        $(this).remove();
    });
    
    // Testimonial Image Upload
    $('#technical_seo_testimonial_image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Testimonial Image',
            multiple: false
        }).open()
        .on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('#technical_seo_testimonial_image').val(image_url);
            $('#technical_seo_testimonial_image_preview').html('<img src="' + image_url + '" style="max-width: 150px; height: auto;" /><br>');
            if ($('#technical_seo_testimonial_image_remove').length === 0) {
                $('#technical_seo_testimonial_image_button').after(' <button type="button" class="button" id="technical_seo_testimonial_image_remove">Remove Image</button>');
            }
        });
    });
    
    // Testimonial Image Remove
    $(document).on('click', '#technical_seo_testimonial_image_remove', function(e) {
        e.preventDefault();
        $('#technical_seo_testimonial_image').val('');
        $('#technical_seo_testimonial_image_preview').html('');
        $(this).remove();
    });
    
    // Add Benefit
    $('#add-technical-seo-benefit').click(function() {
        var container = $('#technical-seo-benefits-container');
        var newBenefit = $('<div style="margin-bottom: 10px;"><input type="text" name="technical_seo_benefits[]" value="" style="width: 90%;" /> <button type="button" class="button remove-benefit">Remove</button></div>');
        container.append(newBenefit);
    });
    
    // Remove Benefit
    $(document).on('click', '.remove-benefit', function() {
        $(this).parent().remove();
    });
});
