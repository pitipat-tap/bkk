$(window).load(function(){
    onload = function() {
        setInterval(function(){
            $('body').addClass('loaded');
        }, 50);
    }
});
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

	// mobile menu
	$('#button-menu-mobile').click(function(){
		$(this).toggleClass('open');
	});
	$('#offCanvasContent').click(function(){
		if($('#button-menu-mobile').hasClass('open')){
			$('#button-menu-mobile').removeClass('open');
		}
	});

    // partner page
    var path = window.location.href;
    var loc = path.substring(path.lastIndexOf('/')+1);

    if(loc=="partners") {
        document.getElementById("partners").style.display = "none";
    } else if(loc=="accommodation" || loc=="accommodation2") {
        $('#accommodation').addClass('active');
    } else if(loc=="attraction" || loc=="attraction-category") {
        $('#attraction').addClass('active');
    } else if(loc=="campaign") {
        $('#campaign').addClass('active');
    } else if(loc=="gallery") {
        $('#gallery').addClass('active');
    } else if(loc=="trips" || loc=="trip") {
        $('#trips').addClass('active');
    } else if(loc=="transportation") {
        $('#transportation').addClass('active');
    } else {
        
    }


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

        $('html, body').animate({scrollTop: 0}, 500);
    });
});
