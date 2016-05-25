$(document).ready(function() {

  $('.change-language').click(function(){
      document.body.className = $(this).attr('data-lan');
      console.log(document.body.className);
  });

	var path = window.location.href;
	var loc = path.substring(path.lastIndexOf('/')+1);

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
