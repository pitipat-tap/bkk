$(document).ready(function() {
	$('.desktop-banner-open').fancybox({
		helpers: {
		    overlay: {
				locked: false
			}
		},
		width: 900,
		height: 600,
		type: "iframe",
		autoSize: false,
		afterClose: function() {
			url = $(':text[name="desktop_image_url"]').val();
			if (url!='') {
				$('#desktop-post-image').attr('src', url);
			}
		}
	});

	$('.tablet-banner-open').fancybox({
		helpers: {
		    overlay: {
				locked: false
			}
		},
		width: 900,
		height: 600,
		type: "iframe",
		autoSize: false,
		afterClose: function() {
			url = $(':text[name="tablet_image_url"]').val();
			if (url!='') {
				$('#tablet-post-image').attr('src', url);
			}
		}
	});

	$('.mobile-banner-open').fancybox({
		helpers: {
		    overlay: {
				locked: false
			}
		},
		width: 900,
		height: 600,
		type: "iframe",
		autoSize: false,
		afterClose: function() {
			url = $(':text[name="mobile_image_url"]').val();
			if (url!='') {
				$('#moblie-post-image').attr('src', url);
			}
		}
	});
});




