;
(function ($) {

	// Scripts which runs after DOM load

	$(document).ready(function () {

		// Add fancybox to images
		var $img;
		if ($img = $('img[class*="wp-image"]')) {
			$img.parent('a[href$="jpg"], a[href$="png"], a[href$="gif"]').fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				helpers: {
					overlay: {
						locked: false
					}
				}
			});
		}

		$('a[rel*="album"]').fancybox({
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
		//add class for input on form
		var $input = $(".ba-form-contact__button>input");
		$input.addClass("button");
		$input.val("Notify");

	});

	// Scripts which runs after all elements load

	$(window).load(function () {

		//jQuery code goes here
		//$( "ba-form-contact__button" ).addClass( "button" );

	});

	// Scripts which runs at window resize

	$(window).resize(function () {

	});

}(jQuery));
