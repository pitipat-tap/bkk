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

    // show & hide back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#go-top').fadeIn(300);
            $('#go-top').removeClass('hide');
        } else {
            $('#go-top').fadeOut(300);
            $('#go-top').addClass('hide');
        }
    });

    $('.go-top').click(function(event) {
        event.preventDefault();

        $('html, body').animate({scrollTop: 0}, 300);
    })
});
