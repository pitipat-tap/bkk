$( document ).ready(function() {   
	$('#area-1').hover(
        function(){
            $('#zone-1').css("z-index",3);
        },
        function(){
            $('#zone-1').css("z-index",1);
        }
    );
    $('#area-2').hover(
        function(){
            $('#zone-2').css("z-index",3);
        },
        function(){
            $('#zone-2').css("z-index",1);
        }
    );
    $('#area-3').hover(
        function(){
            $('#zone-3').css("z-index",3);
        },
        function(){
            $('#zone-3').css("z-index",1);
        }
    );
    $('#area-4').hover(
        function(){
            $('#zone-4').css("z-index",3);
        },
        function(){
            $('#zone-4').css("z-index",1);
        }
    );
    $('#area-5').hover(
        function(){
            $('#zone-5').css("z-index",3);
        },
        function(){
            $('#zone-5').css("z-index",1);
        }
    );             
  $(".clickable").click(function() { 
  	var id = $(this).attr('id');
    $(this).addClass("active");
    $('#detail'+id).addClass("zindex2");
    $('#detail'+id).removeClass("zindex1");
    $('.clickable').not(this).each(function(){
    	$(this).removeClass("active");
     });     
  });

  
});