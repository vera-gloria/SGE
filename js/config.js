$(document).ready(function(){

var col, el;

$("input[type=radio]").click(function() {
   el = $(this);
   col = el.data("col");
   $("input[data-col=" + col + "]").prop("checked", false);
   el.prop("checked", true);
});
});