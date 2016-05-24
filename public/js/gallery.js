Array.prototype.min = function() {
    return Math.min.apply(null, this);
};

Array.prototype.max = function() {
    return Math.max.apply(null, this);
};
$(window).load(function(){

  var currentImg = $('.gallery-img:first-child');
  var colHight = [0,0,0,0];

// console.log(currentImg);
// var t = document.querySelectorAll('.gallery-img');
// console.log(t[0]);

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

  var left = 0 ;
  var currentCol = 0;

for(var index = 0 ; currentImg.length > 0 ; index++){
    loadImg();
    currentImg = currentImg.next();
}
 function loadImg(){
     currentCol = findMinCol(colHight);
     left = currentCol * 300;
     currentImg.css({'left':left,'top':colHight[currentCol]});
     colHight[currentCol] += currentImg.outerHeight();
     currentImg.css('opacity',1);
 }
  $('.gallery-wrapper').css('height',colHight.max());

});
