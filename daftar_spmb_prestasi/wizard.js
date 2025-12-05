function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}

function bar_progress(progress_line_object, direction) {
	var number_of_steps = progress_line_object.data('number-of-steps');
	// Calculate progress line width based on icon centers so it aligns precisely
	var $f1 = progress_line_object.closest('.f1');
	var $steps = $f1.find('.f1-step');
	var $progress = $f1.find('.f1-progress');
	var progressLeft = $progress.offset().left;
	var centers = [];
	$steps.each(function() {
		var $icon = $(this).find('.f1-step-icon');
		var center = $icon.offset().left + ($icon.outerWidth() / 2) - progressLeft;
		centers.push(center);
	});
	// find current active index
	var activeIndex = $steps.index($steps.filter('.active'));
	if(direction === 'right') activeIndex = Math.min(activeIndex + 1, centers.length - 1);
	else if(direction === 'left') activeIndex = Math.max(activeIndex - 1, 0);
	var newWidth = centers[activeIndex] || 0;
	progress_line_object.css('width', newWidth + 'px').data('now-value', Math.round(((activeIndex + 1) / number_of_steps) * 100));
}

$(document).ready(function() {
    // Form
    $('.f1 fieldset:first').fadeIn('slow');
    
    $('.f1 input[type="text"], .f1 input[type="password"], .f1 textarea, .f1 select').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    // step selanjutnya (ketika klik tombol selanjutnya)
    $('.f1 .btn-next').on('click', function() {
    	var parent_fieldset = $(this).parents('fieldset');
    	var next_step = true;
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');
    	
    	// validasi form - hanya field yang visible dan tidak disabled
    	parent_fieldset.find('input[type="text"], input[type="password"], textarea, select').each(function() {
    		// Skip field yang hidden atau disabled atau dalam .group yang hidden
    		if( $(this).is(':hidden') || $(this).closest('.group').is(':hidden') || $(this).closest('div[style*="display:none"]').length || $(this).is(':disabled') ) {
    			$(this).removeClass('input-error');
    			return;
    		}
    		
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
    			// change icons
    			current_active_step.removeClass('active').addClass('activated').next().addClass('active');
    			// progress bar
    			bar_progress(progress_line, 'right');
    			// show next step
	    		$(this).next().fadeIn();
	    		// scroll window to beginning of the form
    			scroll_to_class( $('.f1'), 20 );
	    	});
    	}
    });
    
    // step sbelumnya (ketika klik tombol sebelumnya)
    $('.f1 .btn-previous').on('click', function() {
    	// navigation steps / progress steps
    	var current_active_step = $(this).parents('.f1').find('.f1-step.active');
    	var progress_line = $(this).parents('.f1').find('.f1-progress-line');
    	
    	$(this).parents('fieldset').fadeOut(400, function() {
    		// change icons
    		current_active_step.removeClass('active').prev().removeClass('activated').addClass('active');
    		// progress bar
    		bar_progress(progress_line, 'left');
    		// show previous step
    		$(this).prev().fadeIn();
    		// scroll window to beginning of the form
			scroll_to_class( $('.f1'), 20 );
    	});
    });
    
    // submit (ketika klik tombol submit diakhir wizard)
    $('.f1').on('submit', function(e) {
    	// validasi form - hanya field yang visible dan tidak disabled
    	$(this).find('input[type="text"], input[type="password"], textarea, select').each(function() {
    		// Skip field yang hidden atau disabled atau dalam .group yang hidden
    		if( $(this).is(':hidden') || $(this).closest('.group').is(':hidden') || $(this).closest('div[style*="display:none"]').length || $(this).is(':disabled') ) {
    			$(this).removeClass('input-error');
    			return;
    		}
    		
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    });
});