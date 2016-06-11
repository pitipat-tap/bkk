var currentHostName = "";
var currentPage = 1;
if(window.location.origin.indexOf("local") > 0) {
        currentHostName = window.location.origin + '/bkk/public';
} else {
        currentHostName = window.location.origin ;
}
Array.prototype.min = function() {
    return Math.min.apply(null, this);
};

Array.prototype.max = function() {
    return Math.max.apply(null, this);
};
$(window).load(function(){

  $('#load-more').click(function(){
    loadMore();
  });
  var currentImg = $('.gallery-img:first-child');

  if(isMobile.tablet && (verge.viewportH() > verge.viewportW())){
    var colHight = [0,0];
  }else if(isMobile.tablet && (verge.viewportH() < verge.viewportW())){
    var colHight = [0,0,0];
  }else {
    var colHight = [0,0,0,0];
  }

// console.log(currentImg);
// var t = document.querySelectorAll('.gallery-img');
// console.log(t[0]);

  var left = 0 ;
  var currentCol = 0;

  if(!isMobile.phone){
    $('.gallery-img').click(function(){
        $('.selected-img').css({'display':'block','opacity':'1'});
        $('#selected')[0].src = ($(this).children(":first")[0].src);
    });
    $('.selected-img').click(function(){
        $('.selected-img').css({'display':'none','opacity':'0'});
    });
    for(var index = 0 ; currentImg.length > 0 ; index++){
        loadImg(currentImg);
        currentImg = currentImg.next();
    }
    $('.gallery-wrapper').css('height',colHight.max()+100);
  }


  function findMinCol(col){
    var min = col.min();
    if(col[0] == min){
      return 0;
    }else if(col[1] == min){
      return 1;
    }else if(col[2] == min){
      return 2;
    }else if(col[3] == min){
      return 3;
    }
  }

  function loadImg(currentImg){
     currentCol = findMinCol(colHight);
     left = currentCol * 300;
     currentImg.css({'left':left,'top':colHight[currentCol]});
     colHight[currentCol] += currentImg.outerHeight();
     currentImg.css('opacity',1);
  }
  
  function loadImgMore(data){

     for(var index = 0; index < data.moreImages.data.length;index++){

        currentCol = findMinCol(colHight);
          temp =
             $( 
               '<div class="gallery-img" style="left:'+ currentCol*300 +'px; top:'+colHight[currentCol] + 'px; ">'+
                 '<img src=' + data.moreImages.data[index].image_url +'>'+
               '</div>'
             ); 

        $('.gallery-wrapper').css('height',colHight.max()+100);

         $( ".gallery-wrapper" ).append(temp.load(function(){
            colHight[currentCol] += temp.outerHeight();
         }));


     }
    console.log($(window).load());
  }

  function loadMore(){
      $.ajax({
               url: currentHostName + '/galleryLoadMore' + '?page=' + currentPage,
               type: 'GET',
               dataType: 'json',
               success: function(data, status, xhr) {
                 loadImgMore(data);
               },
               error: function(xhr, status, error) {
                              console.log(xhr);
               }
      });
      currentPage++;
  }
});
