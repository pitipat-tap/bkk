$(window).load(function(){
 $('body').addClass('loaded');
});
$(document).ready(function() {

  // setTimeout(function(){
  //   $('body').addClass('loaded');
  // },5000);

  if(localStorage.getItem('language') == null){
    localStorage.setItem('language',"th");
    document.body.className = localStorage.getItem('language');
  }else{
    document.body.className = localStorage.getItem('language');
  }

  $('.change-language').click(function(){
      var selectedLanguage = $(this).attr('data-lan');
      document.body.className = selectedLanguage;
      console.log("lang" + selectedLanguage);
      localStorage.setItem('language', selectedLanguage);
      setTimeout(function(){
        $('body').addClass('loaded');
      },500);
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

    if(path.indexOf('partners') > -1) {
        document.getElementById("partners").style.display = "none";
    } else if(path.indexOf('accommodation') > -1) {
        $('#accommodation').addClass('active');
    } else if(path.indexOf('attraction') > -1) {
        $('#attraction').addClass('active');
    } else if(path.indexOf('campaign') > -1) {
        $('#campaign').addClass('active');
    } else if(path.indexOf('gallery') > -1) {
        $('#gallery').addClass('active');
    } else if(path.indexOf('trip') > -1) {
        $('#trips').addClass('active');
    } else if(path.indexOf('transportation') > -1) {
        $('#transportation').addClass('active');
    } else if(path.indexOf('news') > -1) {
        $('#news').addClass('active');
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
