$(document).ready(function(){$(".side-menu-toggle").click(function(){var s=$(this).attr("data-side"),e=$("#"+s+"-side-menu");1==e.length&&(e.addClass("show-for-small-medium"),$("#cover-bg-menu").addClass("show"))}),$("#cover-bg-menu").click(function(){$(this).removeClass("show"),$(".side-menu").removeClass("show-for-small-medium")}),$(".toggle-sub-menu").click(function(s){return $(this).hasClass("toggled")?($(this).removeClass("fa-chevron-up toggled").addClass("fa-chevron-down"),$(this).closest("li").find("ul.sub-menu").removeClass("toggled")):($(this).removeClass("fa-chevron-down").addClass("fa-chevron-up toggled"),$(this).closest("li").find("ul.sub-menu").addClass("toggled")),!1})});