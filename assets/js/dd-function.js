$(document).ready(function () {
	$('ul.navlist__sublist-js').hide();
	$('.navlist__item').on("click", function () {
			$(this).find('ul.navlist__sublist-js').fadeToggle();
		}
		//		function () {
		//			$(this).find('ul.navlist__sublist-js').fadeOut();
		//		}
	);


	//	$( '' ).hide();
	$('.navigation__toggle-js').click(function () {

		$('.navlist-js').slideToggle("fast", function () {

		});
	});

});
