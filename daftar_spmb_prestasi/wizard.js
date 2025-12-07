function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}

function bar_progress(progress_line_object, direction) {
	var number_of_steps = progress_line_object.data('number-of-steps');
	var now_value = progress_line_object.data('now-value');
	var new_value = 0;
	if(direction == 'right') {
		new_value = now_value + ( 100 / number_of_steps );
	}
	else if(direction == 'left') {
		new_value = now_value - ( 100 / number_of_steps );
	}
	progress_line_object.attr('style', 'width: ' + new_value + '%;').data('now-value', new_value);
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
    	parent_fieldset.find('input[type="text"], input[type="date"], input[type="file"], input[type="password"], input[type="number"], textarea, select').each(function() {
    		// Skip field yang hidden atau disabled atau dalam parent hidden
    		if( $(this).closest('.group').is(':hidden') || $(this).is(':disabled') || $(this).closest('.form-group').is(':hidden') ) {
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
    	e.preventDefault();
    	
    	var form_valid = true;
    	var $form = $(this);
    	
    	// validasi form - hanya field yang visible dan tidak disabled
    	$form.find('input[type="text"], input[type="date"], input[type="password"], input[type="file"],input[type="number"] , textarea, select').each(function() {
    		// Skip field yang hidden atau disabled
    		if( $(this).closest('.group').is(':hidden') || $(this).is(':disabled') || $(this).closest('.form-group').is(':hidden') ) {
    			$(this).removeClass('input-error');
    			return;
    		}
    		
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			form_valid = false;
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	
    	if (!form_valid) {
    		scroll_to_class( $('.f1'), 20 );
    		alert('Mohon isi semua field yang wajib diisi');
    		return false;
    	}
    	
    	// Submit via AJAX menggunakan FormData untuk handle file upload
    	var formData = new FormData($form[0]);
    	
    	$.ajax({
    		url: $form.attr('action'),
    		type: 'POST',
    		data: formData,
    		contentType: false,
    		processData: false,
    		dataType: 'html',
    		beforeSend: function() {
    			$form.find('.btn-submit').prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Memproses...');
    		},
    		success: function(response) {
    			// Jika redirect sukses, browser akan handle
    			window.location.href = response.trim();
    		},
    		error: function(xhr, status, error) {
    			$form.find('.btn-submit').prop('disabled', false).html('<i class="fa fa-save"></i> Submit');
    			
    			// Cek apakah ada header location dari error response
    			var redirectUrl = xhr.getResponseHeader('Location');
    			if (redirectUrl) {
    				window.location.href = redirectUrl;
    			} else {
    				alert('Ada kesalahan: ' + (xhr.responseText || error));
    				scroll_to_class( $('.f1'), 20 );
    			}
    		}
    	});
    	
    	return false;
    });
});