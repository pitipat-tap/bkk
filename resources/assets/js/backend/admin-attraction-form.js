$(document).ready(function() {
	$('.fm-open').fancybox({
		width: 900,
		height: 600,
		type: "iframe",
		autoSize: false,
		afterClose: function() {
			url = $(':text[name="feature_image_url"]').val();
			if (url!='') {
				$('#feature-image').attr('src', url);
			}
		}
	});

	$('.select-image-open').fancybox({
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
			for(i=1; i<=5; i++){
				url = $(':text[name="image_url_'+ i +'"]').val();
				if (url!='') {
					$('#screenshots'+i).attr('src', url);
				}
			}	
		}
	});

});

function removeImage(id){
	var currentHostName = "";
	if(window.location.origin.indexOf("local") > 0) {
	      currentHostName = window.location.origin + '/bkk/public';
	} else {
	      currentHostName = window.location.origin ;
	}
	document.getElementById('screenshots-URL'+id).value = "";
	document.getElementById('screenshots'+id).src = currentHostName+"/images/admin/icon-placeholder.svg";
}




