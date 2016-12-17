/*!
 * Copyright 2015, ThemesCorp All Rights Reserved.
 * http://ThemesCorp.com
 * This file may not be redistributed in whole or significant part without prior consent from ThemesCorp.
 * Version: 1.00 - Script create by ThemesCorp
 */
$(document).ready(function(){var e=function(a,d){var b=$(a).find("a.toggle_arrow");d?(a.addClass("collapsed"),b.addClass("collapsed"),b.removeClass("collapse")):(a.removeClass("collapsed"),b.addClass("collapse"),b.removeClass("collapsed"))},c=function(a,d){var b=$(a).find("ol.nodeList:first"),c=$(b).is(":visible");c?(d?b.hide():b.slideUp(1E3,"easeOutBounce"),e(a,!0)):(d?b.show():b.slideDown(1E3,"easeOutBounce"),e(a,!1));$.setCookie("toggle-"+a[0].id,!c)};$(".nodeList a.toggle_arrow").click(function(){var a=
$(this).closest(".level_1");c(a)});$("li.node.category").each(function(){"false"===$.getCookie("toggle-"+this.attributes.id.value)&&c($(this),!0)});console.log("Collapse Categories initialized")});