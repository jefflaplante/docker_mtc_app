﻿/*!
 * Copyright 2015, ThemesCorp All Rights Reserved.
 * http://ThemesCorp.com
 * This file may not be redistributed in whole or significant part without prior consent from ThemesCorp.
 * Version: 1.00 - Script create by ThemesCorp
 */
$(document).ready(function(){var c,f;try{c=document.getElementsByClassName("mainContent")[0],f=window.getComputedStyle(c).marginLeft}catch(k){return}var g=function(){$.setCookie("sidebar",!0);$(".mainContent").animate({marginLeft:f},"slow",function(){$(".sidebar").fadeTo("slow",1,function(){$("div.mainContent").removeClass("no_sidebar");$("div.sidebar_mini").removeClass("sidebar_expand");$("div.sidebar").show()})})},h=function(){$.setCookie("sidebar",!1);$("div.sidebar").fadeTo("slow",0,function(){$("div.mainContent").animate({marginLeft:0},
"slow");$("div.mainContent").addClass("no_sidebar");$("div.sidebar_mini").addClass("sidebar_expand");$("div.sidebar").hide()})},d=!1;c=function(){var b=$("div.sidebar"),a=$("div.mainContent"),c=$("#navigation");if(!d&&b.is(":visible")){d=!0;a.offset().top?a.offsetTop=a.offset().top:a.offsetTop=a[0].offsetTop;a.offset().left?a.offsetLeft=a.offset().left:a.offsetLeft=a[0].offsetLeft;a.offset().right?a.offsetRight=a.offset().right:a.offsetRight=a[0].offsetRight;if(b.height()>=$(a).height())return b.css({position:"initial",
top:"initial",Left:"initial"}),!(d=!1);if(0>=a.offsetLeft)return b.css({position:"initial",top:"initial",left:"initial"}),!(d=!1);if(0==$(window).scrollTop())b.css({position:"initial",top:"initial",left:"initial"});else{b.css("position","fixed");b.css("left",a.offsetRight);if(0<a.offsetTop-$(document).scrollTop()){var e=a.offsetTop-$(document).scrollTop();10>e&&(e=10);b.css("top",e)}else b.css("top",10);(c.hasClass("sticky")||c.parent().hasClass("is-sticky"))&&parseInt(b.css("top"))<c.height()+10&&
b.css("top",c.height()+10);b.offset().top>a.offsetTop+$(a).height()-b.height()&&b.css("top",$("div.breadBoxBottom").offset().top-b.height()-$(window).scrollTop())}return!(d=!1)}};$("div.sidebar_mini a").length&&("false"==$.getCookie("sidebar")&&($("div.mainContent").addClass("no_sidebar"),$("div.sidebar_mini").addClass("sidebar_expand"),$("div.sidebar").css("opacity",0),$("div.sidebar").hide()),$("div.sidebar_mini a").click(function(b){$("div.mainContent").hasClass("no_sidebar")?g():h();b.stopPropagation();
b.preventDefault()}));$("div.sidebar").hasClass("fixed")||($(document).scroll(c),$(window).resize(c),c())});