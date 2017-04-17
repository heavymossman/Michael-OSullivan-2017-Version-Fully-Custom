//loads the script before the html, good if you have the script in the header of the HTML file

$(document).ready(function() {
	

	// Set Options

	var speed = 1000; // transition speed 1000 is one second, so this is half a second

	var autoSwitch = true;  // auto slider option to set to auto or manual, ie auto fade or just via the next/prev buttons 

	var autoSwitchSpeed = 5000;  // Auto slider speed

	// Add initial active class to slide one

	$('.slide').first().addClass('active'); 

	// Hide all slides

	$('.slide').hide();

	// Shoe first slide

	$('.active').show();


	// Next handler


	$('#next').on('click', nextSlide); // Take the ID next, and on click run the function nextSlide - very cool!!

	$('#prev').on('click', prevSlide);

	// Set the auto play 

	if (autoSwitch == true) {

		setInterval(nextSlide,autoSwitchSpeed); // if the autoplay switch is set to true, then just run the next slide function with the jQuery parameters autoSwitchSPeed, which we set at the top
	}

	// Switch to the next slide function - as we have repeated code we are going to make a function for the same code, and then jsut call that

	function nextSlide() {

		$('.active').removeClass('active').addClass('oldActive');
		if ($('.oldActive').is(':last-child')){

			$('.slide').first().addClass('active'); // if we are on the last slide, this will load hte first slide
		} else {

			$('.oldActive').next().addClass('active');
		}

		$('.oldActive').removeClass('oldActive');

		$('.slide').fadeOut(speed);

		$('.active').fadeIn(speed);

	};

	// Switch to the prev slide function

	function prevSlide() {

		$('.active').removeClass('active').addClass('oldActive');
		if ($('.oldActive').is(':first-child')){

			$('.slide').last().addClass('active'); // if we are on the last slide, this will load hte first slide
		} else {

			$('.oldActive').prev().addClass('active'); //next and prev ARE jQUERY METHODS
		}

		$('.oldActive').removeClass('oldActive');

		$('.slide').fadeOut(speed);

		$('.active').fadeIn(speed);

	};

});