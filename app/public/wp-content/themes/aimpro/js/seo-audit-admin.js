
jQuery(document).ready(function($) {
    // Hero Image Upload
    $('#seo_audit_hero_image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Hero Image',
            multiple: false
        }).open()
        .on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('#seo_audit_hero_image').val(image_url);
            $('#seo_audit_hero_image_preview').html('<img src="' + image_url + '" style="max-width: 200px; height: auto;" /><br>');
            if ($('#seo_audit_hero_image_remove').length === 0) {
                $('#seo_audit_hero_image_button').after(' <button type="button" class="button" id="seo_audit_hero_image_remove">Remove Image</button>');
            }
        });
    });
    
    // Hero Image Remove
    $(document).on('click', '#seo_audit_hero_image_remove', function(e) {
        e.preventDefault();
        $('#seo_audit_hero_image').val('');
        $('#seo_audit_hero_image_preview').html('');
        $(this).remove();
    });
    
    // Testimonial Image Upload
    $('#seo_audit_testimonial_image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Testimonial Image',
            multiple: false
        }).open()
        .on('select', function(e){
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('#seo_audit_testimonial_image').val(image_url);
            $('#seo_audit_testimonial_image_preview').html('<img src="' + image_url + '" style="max-width: 150px; height: auto;" /><br>');
            if ($('#seo_audit_testimonial_image_remove').length === 0) {
                $('#seo_audit_testimonial_image_button').after(' <button type="button" class="button" id="seo_audit_testimonial_image_remove">Remove Image</button>');
            }
        });
    });
    
    // Testimonial Image Remove
    $(document).on('click', '#seo_audit_testimonial_image_remove', function(e) {
        e.preventDefault();
        $('#seo_audit_testimonial_image').val('');
        $('#seo_audit_testimonial_image_preview').html('');
        $(this).remove();
    });
    
    // Add Benefit
    $('#add-seo-audit-benefit').click(function() {
        var container = $('#seo-audit-benefits-container');
        var newBenefit = $('<div style="margin-bottom: 10px;"><input type="text" name="seo_audit_benefits[]" value="" style="width: 90%;" /> <button type="button" class="button remove-benefit">Remove</button></div>');
        container.append(newBenefit);
    });
      // Remove Benefit
    $(document).on('click', '.remove-benefit', function() {
        $(this).parent().remove();
    });
      // Universal Image Upload functionality for new pattern
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
            var $previewContainer = $('#' + target + '_preview');
            $previewContainer.html('<img src="' + attachment.url + '" style="max-width: 200px; height: auto;" />');
        });
        
        custom_uploader.open();
    });
    
    // Universal Remove Image functionality
    $('.remove-button').on('click', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $('#' + target).val('');
        $('#' + target + '_preview').html('');
    });
});
