$(window).load(function(){$("body").addClass("loaded")}),$(document).ready(function(){null==localStorage.getItem("language")?(localStorage.setItem("language","th"),document.body.className=localStorage.getItem("language")):document.body.className=localStorage.getItem("language"),$(".change-language").click(function(){var a=$(this).attr("data-lan");document.body.className=a,console.log("lang"+a),localStorage.setItem("language",a),setTimeout(function(){$("body").addClass("loaded")},500)}),$("#button-menu-mobile").click(function(){$(this).toggleClass("open")}),$("#offCanvasContent").click(function(){$("#button-menu-mobile").hasClass("open")&&$("#button-menu-mobile").removeClass("open")});var a=window.location.href;a.indexOf("partners")>-1?document.getElementById("partners").style.display="none":a.indexOf("accommodation")>-1?$("#accommodation").addClass("active"):a.indexOf("attraction")>-1?$("#attraction").addClass("active"):a.indexOf("campaign")>-1?$("#campaign").addClass("active"):a.indexOf("gallery")>-1?$("#gallery").addClass("active"):a.indexOf("trip")>-1?$("#trips").addClass("active"):a.indexOf("transportation")>-1?$("#transportation").addClass("active"):a.indexOf("news")>-1&&$("#news").addClass("active"),$(window).scroll(function(){$(this).scrollTop()>200?($("#go-top").fadeIn(300),$("#go-top").removeClass("hide")):($("#go-top").fadeOut(300),$("#go-top").addClass("hide"))}),$(".go-top").click(function(a){a.preventDefault(),$("html, body").animate({scrollTop:0},500)})});