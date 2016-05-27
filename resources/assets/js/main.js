$(document).ready(function() {

  onload = function() {
      setInterval(function(){
          $('body').addClass('loaded');
      }, 100);
  }

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

	// mobile menu
	$('#button-menu-mobile').click(function(){
		$(this).toggleClass('open');
	});
	$('#offCanvasContent').click(function(){
		if($('#button-menu-mobile').hasClass('open')){
			$('#button-menu-mobile').removeClass('open');
		}
	});

    function setPageBanner() {
        // partner page
        var path = window.location.href;
        var loc = path.substring(path.lastIndexOf('/')+1);

        if(loc=="partners") {
            document.getElementById("partners").style.display = "none";
        }

        if (Foundation.MediaQuery.atLeast('large')) {
            document.getElementById('banner-img').src = "http://placehold.it/1500x500";
        } else if (Foundation.MediaQuery.atLeast('medium')) {
            document.getElementById('banner-img').src = "http://placehold.it/400x300";
        } else {
            document.getElementById('banner-img').src = "http://placehold.it/300x400";
        }
    }

    setPageBanner();
});
