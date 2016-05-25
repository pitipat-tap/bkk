$(document).ready(function() {

	var path = window.location.href;
	var loc = path.substring(path.lastIndexOf('/')+1);

	// loading load
	setTimeout(function(){
		$('body').addClass('loaded');
		$('h1').css('color','#222222')
	}, 3000);

	if(loc=="partners") {
		document.getElementById("partners").style.display = "none";
	}

	// mobile menu
	$('#button-menu-mobile').click(function(){
		$(this).toggleClass('open');
	});
	$('#offCanvasContent').click(function(){
		if($('#button-menu-mobile').hasClass('open')){
			$('#button-menu-mobile').removeClass('open');
		}
	});
});