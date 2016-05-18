$(document).ready(function() {

	var path = window.location.href;
	var loc = path.substring(path.lastIndexOf('/')+1);

	if(loc=="partners") {
		document.getElementById("partners").style.display = "none";
	}

	// mobile menu
	$('#menu-toggle').click(function(){
		$(this).toggleClass('open');
	});
	$('#offCanvasInner').click(function(){
		if($('#menu-toggle').hasClass('open')){
			$('#menu-toggle').removeClass('open');
		}
	});
});