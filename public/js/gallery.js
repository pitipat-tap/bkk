var currentHostName="",currentPage=1;currentHostName=window.location.origin.indexOf("local")>0?window.location.origin+"/bkk/public":window.location.origin,Array.prototype.min=function(){return Math.min.apply(null,this)},Array.prototype.max=function(){return Math.max.apply(null,this)},$(window).load(function(){function e(e){var r=e.min();return e[0]==r?0:e[1]==r?1:e[2]==r?2:e[3]==r?3:void 0}function r(r){l=e(n),a=300*l,r.css({left:a,top:n[l]}),n[l]+=r.outerHeight(),r.css("opacity",1)}function i(r){for(var i=0;i<r.moreImages.data.length;i++){$(".gallery-wrapper").append($("<div class='gallery-img'><img src="+r.moreImages.data[i].image_url+"></div>"));console.log(n),l=e(n),console.log(l+" "+a+" "+n[l])}}function o(){$.ajax({url:currentHostName+"/galleryLoadMore?page="+currentPage,type:"GET",dataType:"json",success:function(e,r,o){i(e)},error:function(e,r,i){console.log(e)}}),currentPage++}$("#load-more").click(function(){o()});var t=$(".gallery-img:first-child");if(isMobile.tablet&&verge.viewportH()>verge.viewportW())var n=[0,0];else if(isMobile.tablet&&verge.viewportH()<verge.viewportW())var n=[0,0,0];else var n=[0,0,0,0];var a=0,l=0;if(!isMobile.phone){$(".gallery-img").click(function(){$(".selected-img").css({display:"block",opacity:"1"}),$("#selected")[0].src=$(this).children(":first")[0].src}),$(".selected-img").click(function(){$(".selected-img").css({display:"none",opacity:"0"})});for(var c=0;t.length>0;c++)r(t),t=t.next();$(".gallery-wrapper").css("height",n.max()+100)}});