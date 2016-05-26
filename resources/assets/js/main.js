$(document).ready(function() {

  if(localStorage.getItem('language') == null){
    localStorage.setItem('language',"th");
    document.body.className = localStorage.getItem('language');
  }else{
    document.body.className = localStorage.getItem('language');
  }


  $('.change-language').click(function(){
      var selectedLanguage = $(this).attr('data-lan');
      document.body.className = selectedLanguage;
      localStorage.setItem('language', selectedLanguage);
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
