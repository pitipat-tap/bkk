var bkkApp=angular.module("bkkApp",[]);bkkApp.controller("AccommodationController",["$scope","$http",function(e,a){function o(a){var o={};0==a.length&&(e.page-=1);for(var n=0;n<a.length;++n)void 0!==a[n]&&(o[n]=a[n]),e.accoms.push(o[n])}e.accoms,e.page,e.init=function(){e.page=1,a.get("accommodationJson",{params:{page:e.page}}).success(function(a){200==a.status&&(e.accoms=a.posts.data)})},e.loadmore=function(){e.page+=1,a.get("accommodationJson",{params:{page:e.page}}).success(function(e){200==e.status&&o(e.posts.data)})}}]);var currentHostName="",currentPage=1;currentHostName=window.location.origin.indexOf("local")>0?window.location.origin+"/bkk/public":window.location.origin,Array.prototype.min=function(){return Math.min.apply(null,this)},Array.prototype.max=function(){return Math.max.apply(null,this)},$(window).load(function(){function e(e){var a=e.min();return e[0]==a?0:e[1]==a?1:e[2]==a?2:e[3]==a?3:void 0}function a(a){c=e(s),i=300*c,a.css({left:i,top:s[c]}),s[c]+=a.outerHeight(),a.css("opacity",1)}function o(a){for(var o=0;o<a.moreImages.data.length;o++)c=e(s),temp=$('<div class="gallery-img" style="left:'+300*c+"px; top:"+s[c]+'px; "><img src='+a.moreImages.data[o].image_url+"></div>"),$(".gallery-wrapper").css("height",s.max()+100),$(".gallery-wrapper").append(temp.load(function(){s[c]+=temp.outerHeight()}));console.log($(window).load())}function n(){$.ajax({url:currentHostName+"/galleryLoadMore?page="+currentPage,type:"GET",dataType:"json",success:function(e,a,n){o(e)},error:function(e,a,o){console.log(e)}}),currentPage++}$("#load-more").click(function(){n()});var t=$(".gallery-img:first-child");if(isMobile.tablet&&verge.viewportH()>verge.viewportW())var s=[0,0];else if(isMobile.tablet&&verge.viewportH()<verge.viewportW())var s=[0,0,0];else var s=[0,0,0,0];var i=0,c=0;if(!isMobile.phone){$(".gallery-img").click(function(){$(".selected-img").css({display:"block",opacity:"1"}),$("#selected")[0].src=$(this).children(":first")[0].src}),$(".selected-img").click(function(){$(".selected-img").css({display:"none",opacity:"0"})});for(var l=0;t.length>0;l++)a(t),t=t.next();$(".gallery-wrapper").css("height",s.max()+100)}}),$(document).ready(function(){var e=new Date,a=new Array;a[0]="January",a[1]="February",a[2]="March",a[3]="April",a[4]="May",a[5]="June",a[6]="July",a[7]="August",a[8]="September",a[9]="October",a[10]="November",a[11]="December";var o=a[e.getMonth()];console.log(o),$(".month").click(function(){console.log($(this).attr("data-month")),$(".event-item-list").removeClass("event-item-list-select"),$("#"+$(this).attr("data-month")).addClass("event-item-list-select")}),$("#area-1").hover(function(){$("#zone-1").css("z-index",8)},function(){$("#zone-1").css("z-index",1)}),$("#area-1").click(function(){$(".zone").removeClass("opa-1"),$(".map-content-select").removeClass("opa-1"),$("#zone-1").addClass("opa-1"),$("#map-content-1").addClass("opa-1")}),$("#area-2").hover(function(){$("#zone-2").css("z-index",8)},function(){$("#zone-2").css("z-index",1)}),$("#area-2").click(function(){$(".zone").removeClass("opa-1"),$(".map-content-select").removeClass("opa-1"),$("#zone-2").addClass("opa-1"),$("#map-content-2").addClass("opa-1")}),$("#area-3").hover(function(){$("#zone-3").css("z-index",8)},function(){$("#zone-3").css("z-index",1)}),$("#area-3").click(function(){$(".zone").removeClass("opa-1"),$(".map-content-select").removeClass("opa-1"),$("#zone-3").addClass("opa-1"),$("#map-content-3").addClass("opa-1")}),$("#area-4").hover(function(){$("#zone-4").css("z-index",8)},function(){$("#zone-4").css("z-index",1)}),$("#area-4").click(function(){$(".zone").removeClass("opa-1"),$(".map-content-select").removeClass("opa-1"),$("#zone-4").addClass("opa-1"),$("#map-content-4").addClass("opa-1")}),$("#area-5").hover(function(){$("#zone-5").css("z-index",8)},function(){$("#zone-5").css("z-index",1)}),$("#area-5").click(function(){$(".zone").removeClass("opa-1"),$(".map-content-select").removeClass("opa-1"),$("#zone-5").addClass("opa-1"),$("#map-content-5").addClass("opa-1")}),$("#area-6").hover(function(){$("#zone-5").css("z-index",8)},function(){$("#zone-5").css("z-index",1)}),$("#area-6").click(function(){$(".zone").removeClass("opa-1"),$(".map-content-select").removeClass("opa-1"),$("#zone-5").addClass("opa-1"),$("#map-content-5").addClass("opa-1")}),$(".event-item-list").click(function(){$(this).addClass("event-item-list")}),jQuery(function(e){document.getElementsByTagName("html")[0].className+=" "+(~window.navigator.userAgent.indexOf("MSIE")?"ie":"no-ie");var a=e("#events-slider"),o=a.find(".frame");window.frr=o;new Sly(o,{horizontal:1,itemNav:"basic",smart:1,activateOn:"click",mouseDragging:1,touchDragging:1,releaseSwing:1,scrollBy:1,pagesBar:a.find(".pages"),activatePageOn:"click",speed:200,moveBy:600,elasticBounds:1,dragHandle:1,dynamicHandle:1,clickBar:1,forward:a.find(".forward"),backward:a.find(".backward")}).init()})}),$(window).load(function(){$("body").addClass("loaded")}),$(document).ready(function(){null==localStorage.getItem("language")?(localStorage.setItem("language","th"),document.body.className=localStorage.getItem("language")):document.body.className=localStorage.getItem("language"),$(".change-language").click(function(){var e=$(this).attr("data-lan");document.body.className=e,console.log("lang"+e),localStorage.setItem("language",e),setTimeout(function(){$("body").addClass("loaded")},500)}),$("#button-menu-mobile").click(function(){$(this).toggleClass("open")}),$("#offCanvasContent").click(function(){$("#button-menu-mobile").hasClass("open")&&$("#button-menu-mobile").removeClass("open")});var e=window.location.href,a=e.substring(e.lastIndexOf("/")+1);"partners"==a?document.getElementById("partners").style.display="none":"accommodation"==a||"accommodation2"==a?$("#accommodation").addClass("active"):"attraction"==a||"attraction-category"==a?$("#attraction").addClass("active"):"campaign"==a?$("#campaign").addClass("active"):"gallery"==a?$("#gallery").addClass("active"):"trips"==a||"trip"==a?$("#trips").addClass("active"):"transportation"==a&&$("#transportation").addClass("active"),$(window).scroll(function(){$(this).scrollTop()>200?($("#go-top").fadeIn(300),$("#go-top").removeClass("hide")):($("#go-top").fadeOut(300),$("#go-top").addClass("hide"))}),$(".go-top").click(function(e){e.preventDefault(),$("html, body").animate({scrollTop:0},500)})}),$(document).ready(function(e){var a=e(".timeline-container");a.each(function(){e(this).find(".timeline-badge, .timeline-panel").addClass("hidden")}),e(window).on("scroll",function(){a.each(function(){e(this).offset().top<=e(window).scrollTop()+.5*e(window).height()&&e(this).find(".timeline-badge").hasClass("hidden")&&e(this).find(".timeline-badge, .timeline-panel").removeClass("hidden").addClass("bounce-in")})})}),$(document).ready(function(){$(window).scroll(function(){$(this).scrollTop()>100?($("#go-top").fadeIn(300),$("#go-top").removeClass("hide")):($("#go-top").fadeOut(300),$("#go-top").addClass("hide"))}),$(".go-top").click(function(e){e.preventDefault(),$("html, body").animate({scrollTop:0},300)})});