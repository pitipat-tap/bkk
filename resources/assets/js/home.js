$( document ).ready(function() {   

  var d = new Date();
  var month = new Array();

  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";

  var n = month[d.getMonth()];
  n = n.toLowerCase();
  $('.event-item-list').removeClass('event-item-list-select');
  console.log($('#' + n));
  $('#'+ n).addClass('event-item-list-select');

  //console.log(n);

  $('.month').click(function(){
 //     console.log( $(this).attr("data-month"));
      $('.event-item-list').removeClass('event-item-list-select');
      $('#'+$(this).attr('data-month')).addClass('event-item-list-select');
  });

//====================================== maps ===================================
	$('#area-1').hover(
        function(){
            $('#zone-1').css("z-index",8);
        },
        function(){
            $('#zone-1').css("z-index",1);
        }
    );
    $('#area-1').click(function(){
          $('.zone').removeClass('opa-1');
          $('.map-content-select').removeClass('opa-1');
          $('#zone-1').addClass('opa-1');
          $('#map-content-1').addClass('opa-1');
    });
    $('#area-2').hover(
        function(){
            $('#zone-2').css("z-index",8);
        },
        function(){
            $('#zone-2').css("z-index",1);
        }
    );
    $('#area-2').click(function(){
          $('.zone').removeClass('opa-1');
          $('.map-content-select').removeClass('opa-1');
          $('#zone-2').addClass('opa-1');
          $('#map-content-2').addClass('opa-1');
    });
    $('#area-3').hover(
        function(){
            $('#zone-3').css("z-index",8);
        },
        function(){
            $('#zone-3').css("z-index",1);
        }
    );
    $('#area-3').click(function(){
          $('.zone').removeClass('opa-1');
          $('.map-content-select').removeClass('opa-1');
          $('#zone-3').addClass('opa-1');
          $('#map-content-3').addClass('opa-1');
    });
    $('#area-4').hover(
        function(){
            $('#zone-4').css("z-index",8);
        },
        function(){
            $('#zone-4').css("z-index",1);
        }
    );
    $('#area-4').click(function(){
          $('.zone').removeClass('opa-1');
          $('.map-content-select').removeClass('opa-1');
          $('#zone-4').addClass('opa-1');
          $('#map-content-4').addClass('opa-1');
    });
    $('#area-5').hover(
        function(){
            $('#zone-5').css("z-index",8);
        },
        function(){
            $('#zone-5').css("z-index",1);
        }
    );             
    $('#area-5').click(function(){
          $('.zone').removeClass('opa-1');
          $('.map-content-select').removeClass('opa-1');
          $('#zone-5').addClass('opa-1');
          $('#map-content-5').addClass('opa-1');
    });
    $('#area-6').hover(
        function(){
            $('#zone-5').css("z-index",8);
        },
        function(){
            $('#zone-5').css("z-index",1);
        }
    );             
    $('#area-6').click(function(){
          $('.zone').removeClass('opa-1');
          $('.map-content-select').removeClass('opa-1');
          $('#zone-5').addClass('opa-1');
          $('#map-content-5').addClass('opa-1');
    });

//====================================== maps ===================================

//====================================== event ===================================

    $('.event-item-list').click(function(){
      $(this).addClass('event-item-list');
    });



//====================================== event ===================================

    jQuery(function ($) {

    document.getElementsByTagName('html')[0].className += ' ' +
      (~window.navigator.userAgent.indexOf('MSIE') ? 'ie' : 'no-ie');

    var $eventsSlider= $('#events-slider');
    var $frame =$eventsSlider.find('.frame'); window.frr = $frame;
    var sly = new Sly($frame, {
      horizontal: 1,
      itemNav: 'basic',
      smart: 1,
      activateOn: 'click',
      mouseDragging: 1,
      touchDragging: 1,
      releaseSwing: 1,
      scrollBy: 1,
      pagesBar:$eventsSlider.find('.pages'),
      activatePageOn: 'click',
      speed: 200,
      moveBy: 600,
      elasticBounds: 1,
      dragHandle: 1,
      dynamicHandle: 1,
      clickBar: 1,

      // Buttons
      forward:$eventsSlider.find('.forward'),
      backward:$eventsSlider.find('.backward'),
    }).init();
  });
});
