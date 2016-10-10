$(document).ready(function() {

//открытие меню на мобильном устройстве
$("#toggle_menu").click(
function () {
	$(this).toggleClass("on");
	$(".top_menu").slideToggle();
}
	);




 
/*************************************/

//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};
})(jQuery, document, window, ResponsiveBootstrapToolkit);