///////////////--------------------------------------------->drop down
////custom function there
$(document).ready(function() {

	var $container = $('.result');

	$container.imagesLoaded( function(){
		$container.masonry({
			itemSelector : '.boox',
			isAnimated: true
		});
	});
	var $containers = $('.deals');

	$containers.imagesLoaded( function(){
		$containers.masonry({
			itemSelector : '.boox',
			isAnimated: true
		});
	});
	$("img.lazy").lazyload({
		effect : "fadeIn"
	});
	$.cookie('cookie_name', 'cookie_value', { expires: 8, path: '/', domain: 'tripify.me', secure: true });

    $( "#order-date" ).datepicker({
    	minDate:new Date()

    });

	
	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
	$('#profiletabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
	$("#tanggal").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });

});



